<?php
    /**
     * Narro is an application that allows online software translation and maintenance.
     * Copyright (C) 2008-2011 Alexandru Szasz <alexxed@gmail.com>
     * http://code.google.com/p/narro/
     *
     * This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public
     * License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any
     * later version.
     *
     * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the
     * implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for
     * more details.
     *
     * You should have received a copy of the GNU General Public License along with this program; if not, write to the
     * Free Software Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
     */
    require_once(dirname(__FILE__) . '/configuration/prepend.inc.php');

    if (isset($argv[0])) {
        $intCnt = 0;
        $intSkipped = 0;
        foreach(NarroSuggestion::QueryArray(QQ::AndCondition(QQ::NotEqual(QQN::NarroSuggestion()->UserId, 0), QQ::LessThan(QQN::NarroSuggestion()->SuggestionWordCount, 1)), array(QQ::OrderBy(QQN::NarroSuggestion()->SuggestionId, 0), QQ::LimitInfo(10000, 0))) as $intVal=>$objSuggestion) {
            if ($objSuggestion->SuggestionValueMd5 != md5($objSuggestion->SuggestionValue)) {$intSkipped++; continue;}

            try {
                $objSuggestion->SaveWordCount();
                $intCnt++;
            }
            catch (Exception $objEx) {
                echo $objEx->getMessage();
            }
        }
        printf("Skipped %d, saved %d suggestions, last suggestion id is %d\n", $intSkipped, $intCnt, $objSuggestion->SuggestionId);
        die();
    }

//    if (QApplication::HasPermission('Administrator')) {
//        $intDuplicateSuggestionsDeleted = 0;
//        foreach(NarroSuggestion::LoadAll() as $intVal=>$objSuggestion) {
//            if ($objSuggestion->SuggestionValue != md5($objSuggestion->SuggestionValue)) continue;
//            try {
//                $objSuggestion->Save();
//            }
//            catch (Exception $objEx) {
//                if (strstr($objEx->getMessage(), 'Duplicate')) {
//                    $arrDuplicateSuggestions = NarroSuggestion::QueryArray(
//                        QQ::AndCondition(
//                            QQ::NotEqual(QQN::NarroSuggestion()->SuggestionId, $objSuggestion->SuggestionId),
//                            QQ::Equal(QQN::NarroSuggestion()->SuggestionValue, $objSuggestion->SuggestionValue),
//                            QQ::Equal(QQN::NarroSuggestion()->TextId, $objSuggestion->TextId),
//                            QQ::Equal(QQN::NarroSuggestion()->LanguageId, $objSuggestion->LanguageId)
//                        )
//                    );
//
//                    error_log(sprintf('Found duplicates for "%s": %d', $objSuggestion->SuggestionValue, count($arrDuplicateSuggestions)));
//
//                    foreach($arrDuplicateSuggestions as $objDuplicateSuggestion) {
//                        if ($objSuggestion->SuggestionValue !== $objDuplicateSuggestion->SuggestionValue) continue;
//
//
//                        foreach(NarroSuggestionVote::LoadArrayBySuggestionId($objDuplicateSuggestion->SuggestionId) as $objSuggestionVote) {
//                            error_log('Moving suggestion vote');
//                            $objSuggestionVote->SuggestionId = $objSuggestion->SuggestionId;
//                            $objSuggestionVote->Save();
//                        }
//
//                        foreach(NarroContextInfo::LoadArrayByValidSuggestionId($objDuplicateSuggestion->SuggestionId) as $objApprovedSuggestion) {
//                            error_log('Moving approved suggestion');
//                            $objApprovedSuggestion->ValidSuggestionId = $objSuggestion->SuggestionId;
//                            $objApprovedSuggestion->Save();
//                        }
//
//                        error_log(sprintf('Deleting suggestion %d %d "%s"', $objDuplicateSuggestion->SuggestionId, $objDuplicateSuggestion->LanguageId, $objDuplicateSuggestion->SuggestionValue));
//                        $objDuplicateSuggestion->Delete();
//                        $intDuplicateSuggestionsDeleted++;
//                    }
//                }
//
//                $objSuggestion->Save();
//            }
//        }

        $intDuplicateTextsDeleted = 0;
        foreach(NarroText::LoadAll() as $intVal=>$objText) {
            if ($objText->TextValueMd5 == md5($objText->TextValue)) continue;
            try {
                $objText->Save();
            }
            catch (Exception $objEx) {
                if (strstr($objEx->getMessage(), 'Duplicate')) {
                    $arrDuplicateTexts = NarroText::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::NarroText()->TextValue, $objText->TextValue),
                            QQ::NotEqual(QQN::NarroText()->TextId, $objText->TextId)
                        )
                    );

                    error_log(sprintf('Found duplicates for "%s": %d', $objText->TextValue, count($arrDuplicateTexts)));

                    foreach($arrDuplicateTexts as $objDuplicateText) {
                        if ($objText->TextValue !== $objDuplicateText->TextValue) continue;

                        foreach(NarroTextComment::LoadArrayByTextId($objDuplicateText->TextId) as $objTextComment) {
                            error_log('Moving text comment');
                            $objTextComment->TextId = $objText->TextId;
                            $objTextComment->Save();
                        }

                        foreach(NarroSuggestion::LoadArrayByTextId($objDuplicateText->TextId) as $objSuggestion) {
                            error_log('Moving text from suggestion');

                            $arrDuplicateSuggestions = NarroSuggestion::QueryArray(
                                QQ::AndCondition(
                                    QQ::NotEqual(QQN::NarroSuggestion()->SuggestionId, $objSuggestion->SuggestionId),
                                    QQ::Equal(QQN::NarroSuggestion()->SuggestionValue, $objSuggestion->SuggestionValue),
                                    QQ::Equal(QQN::NarroSuggestion()->TextId, $objText->TextId),
                                    QQ::Equal(QQN::NarroSuggestion()->LanguageId, $objSuggestion->LanguageId)
                                )
                            );

                            if (count($arrDuplicateSuggestions)) {
                                error_log(sprintf('Found duplicates for "%s": %d', $objSuggestion->SuggestionValue, count($arrDuplicateSuggestions)));

                                foreach($arrDuplicateSuggestions as $objDuplicateSuggestion) {
                                    if ($objSuggestion->SuggestionValue !== $objDuplicateSuggestion->SuggestionValue) continue;

                                    foreach(NarroSuggestionComment::LoadArrayBySuggestionId($objDuplicateSuggestion->SuggestionId) as $objSuggestionComment) {
                                        error_log('Moving suggestion comment');
                                        $objSuggestionComment->SuggestionId = $objSuggestion->SuggestionId;
                                        $objSuggestionComment->Save();
                                    }

                                    foreach(NarroSuggestionVote::LoadArrayBySuggestionId($objDuplicateSuggestion->SuggestionId) as $objSuggestionVote) {
                                        error_log('Moving suggestion vote');
                                        $objSuggestionVote->SuggestionId = $objSuggestion->SuggestionId;
                                        $objSuggestionVote->Save();
                                    }

                                    foreach(NarroContextInfo::LoadArrayByValidSuggestionId($objDuplicateSuggestion->SuggestionId) as $objApprovedSuggestion) {
                                        error_log('Moving approved suggestion');
                                        $objApprovedSuggestion->ValidSuggestionId = $objSuggestion->SuggestionId;
                                        $objApprovedSuggestion->Save();
                                    }

                                    error_log(sprintf('Deleting suggestion %d %d "%s"', $objDuplicateSuggestion->SuggestionId, $objDuplicateSuggestion->LanguageId, $objDuplicateSuggestion->SuggestionValue));
                                    $objDuplicateSuggestion->Delete();
                                    $intDuplicateSuggestionsDeleted++;
                                }
                            }
                            $objSuggestion->TextId = $objText->TextId;
                            $objSuggestion->Save();
                        }

                        foreach(NarroContext::LoadArrayByTextId($objDuplicateText->TextId) as $objContext) {
                            error_log('Moving text from context');
                            $objContext->TextId = $objText->TextId;
                            $objContext->Save();
                        }

                        error_log(sprintf('Deleting text %d "%s"', $objDuplicateText->TextId, $objDuplicateText->TextValue));
                        $objDuplicateText->Delete();
                        $intDuplicateTextsDeleted++;
                    }
                }

                $objText->Save();
            }
        }

        error_log(sprintf('Deleted %d duplicate suggestions and %d duplicate texts', $intDuplicateSuggestionsDeleted, $intDuplicateTextsDeleted));
//    }
//    else {
//        QApplication::Redirect('login.php');
//    }
?>
