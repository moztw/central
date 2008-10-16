<?php
    /**
     * Narro is an application that allows online software translation and maintenance.
     * Copyright (C) 2008 Alexandru Szasz <alexxed@gmail.com>
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

    class NarroFileImporter {
        /**
         * the user object used for import
         */
        protected $objUser;
        /**
         * the language object used to import in
         */
        protected $objSourceLanguage;
        /**
         * the language object used to import from
         */
        protected $objTargetLanguage;
        /**
         * the project object that is imported
         */
        protected $objProject;
        protected $objFile;
        /**
         * whether to check if the suggestion value is the same as the original text
         * if it's true, the suggestions that are the same as the original text are not imported
         */
        protected $blnCheckEqual = true;
        /**
         * whether to validate the imported suggestions
         */
        protected $blnValidate = true;
        /**
         * whether to import only suggestions, that is don't add anything else than suggestions
         */
        protected $blnOnlySuggestions = false;
        /**
         * what suggestions are exported
         * 1 = validated
         * 2 = validated and most voted
         * 3 = validated and current user's suggestion
         */
        protected $intExportedSuggestion = 1;

        public function __construct($objImporter = null) {

            if ($objImporter instanceof NarroProjectImporter) {

                $this->objUser = $objImporter->User;
                $this->objSourceLanguage = $objImporter->SourceLanguage;
                $this->objTargetLanguage = $objImporter->TargetLanguage;
                $this->objProject = $objImporter->Project;
                $this->blnCheckEqual = $objImporter->CheckEqual;
                $this->blnValidate = $objImporter->Validate;
                $this->blnOnlySuggestions = $objImporter->OnlySuggestions;
            }

        }


        protected function startTimer() {
            NarroImportStatistics::$arrStatistics['Start time'] = time();
        }

        protected function stopTimer() {
            NarroImportStatistics::$arrStatistics['End time'] = time();
        }

        /**
         * A translation here consists of the project, file, text, translation, context, validation, ignore equals
         *
         * @param string $strOriginal the original text
         * @param string $strOriginalAccKey access key for the original text
         * @param string $strTranslation the translated text from the import file (can be empty)
         * @param string $strOriginalAccKey access key for the translated text
         * @param string $strContext the context where the text/translation appears in the file
         * @param string $strComment a comment from the imported file
         */
        protected function AddTranslation($strOriginal, $strOriginalAccKey = null, $strTranslation, $strTranslationAccKey = null, $strContext, $strComment = null) {
            $blnContextInfoChanged = false;
            $blnContextChanged = false;

            /**
             * First, let the plug-ins process the data
             */
            if ($strOriginal == '') {
                NarroLog::LogMessage(2, sprintf(t('In file "%s", the context "%s" was skipped because the original text "%s" was empty.'), $this->objFile->FileName, $strContext, $strOriginal));
                NarroImportStatistics::$arrStatistics['Skipped contexts']++;
                NarroImportStatistics::$arrStatistics['Skipped suggestions']++;
                NarroImportStatistics::$arrStatistics['Skipped texts']++;
                NarroImportStatistics::$arrStatistics['Empty original texts']++;
                return false;
            }
            else {
                $arrResult = QApplication::$objPluginHandler->SaveText($strOriginal, $strTranslation, $strContext, $this->objFile, $this->objProject);
                if
                (
                    trim($arrResult[0]) != '' &&
                    $arrResult[1] == $strTranslation &&
                    $arrResult[2] == $strContext &&
                    $arrResult[3] == $this->objFile &&
                    $arrResult[4] == $this->objProject
                ) {

                    $strOriginal = $arrResult[0];
                }
                else
                    NarroLog::LogMessage(2, sprintf(t('A plug-in returned an unexpected result while processing the text "%s": %s'), $strOriginal, print_r($arrResult, true)));
            }

            if ($strTranslation != '') {
                $arrResult = QApplication::$objPluginHandler->SaveSuggestion($strOriginal, $strTranslation, $strContext, $this->objFile, $this->objProject);
                if
                (
                    trim($arrResult[1]) != '' &&
                    $arrResult[0] == $strOriginal &&
                    $arrResult[2] == $strContext &&
                    $arrResult[3] == $this->objFile &&
                    $arrResult[4] == $this->objProject
                ) {
                    $strTranslation = $arrResult[1];
                }
                else
                    NarroLog::LogMessage(2, sprintf(t('A plug-in returned an unexpected result while processing the translation "%s": %s'), $strTranslation, print_r($arrResult, true)));
            }

            if ($strContext == '') {
                NarroLog::LogMessage(2, sprintf(t('In file "%s", the context "%s" was skipped because it was empty.'), $this->objFile->FileName, $strContext));
                NarroImportStatistics::$arrStatistics['Skipped contexts']++;
                NarroImportStatistics::$arrStatistics['Skipped suggestions']++;
                NarroImportStatistics::$arrStatistics['Skipped texts']++;
                return false;
            }
            else {
                $strContext = trim($strContext);
                $arrResult = QApplication::$objPluginHandler->SaveContext($strOriginal, $strTranslation, $strContext, $this->objFile, $this->objProject);
                if
                (
                    trim($arrResult[2]) != '' &&
                    $arrResult[0] == $strOriginal &&
                    $arrResult[1] == $strTranslation &&
                    $arrResult[3] == $this->objFile &&
                    $arrResult[4] == $this->objProject
                ) {

                    $strContext = $arrResult[2];
                }
                else
                    NarroLog::LogMessage(2, sprintf(t('A plug-in returned an unexpected result while processing the context "%s": %s'), $strContext, print_r($arrResult, true)));
            }

            if (!is_null($strComment) && trim($strComment) != '') {
                $arrResult = QApplication::$objPluginHandler->SaveContextComment($strOriginal, $strTranslation, $strContext, $strComment, $this->objFile, $this->objProject);
                if
                (
                    trim($arrResult[3]) != '' &&
                    $arrResult[0] == $strOriginal &&
                    $arrResult[1] == $strTranslation &&
                    $arrResult[2] == $strContext &&
                    $arrResult[4] == $this->objFile &&
                    $arrResult[5] == $this->objProject
                ) {

                    $strComment = $arrResult[3];
                }
                else
                    NarroLog::LogMessage(2, sprintf(t('A plug-in returned an unexpected result while processing the comment "%s": %s'), $strComment, print_r($arrResult, true)));
            }

            /**
             * Fetch the text by its md5; we could fetch it by the full text but it would be slower
             * @example $objNarroText = NarroText::QuerySingle(QQ::Equal(QQN::NarroText()->TextValue, mysql_real_escape_string($strOriginal)));
             */
            $objNarroText = NarroText::QuerySingle(QQ::Equal(QQN::NarroText()->TextValueMd5, md5($strOriginal)));

            if (!$this->blnOnlySuggestions && !$objNarroText instanceof NarroText) {

                $objNarroText = new NarroText();
                $objNarroText->TextValue = $strOriginal;
                $objNarroText->TextValueMd5 = md5($strOriginal);
                $objNarroText->TextCharCount = mb_strlen($strOriginal);
                $objNarroText->Modified = date('Y-m-d H:i:s');
                $objNarroText->Created = date('Y-m-d H:i:s');

                try {
                    $objNarroText->Save();
                    NarroLog::LogMessage(1, sprintf(t('Added text "%s" from the file "%s"'), $strOriginal, $this->objFile->FileName));
                    NarroImportStatistics::$arrStatistics['Imported texts']++;
                } catch(Exception $objExc) {
                    NarroLog::LogMessage(3, sprintf(t('Error while adding "%s": %s'), $strOriginal, $objExc->getMessage()));
                    NarroImportStatistics::$arrStatistics['Skipped contexts']++;
                    NarroImportStatistics::$arrStatistics['Skipped suggestions']++;
                    NarroImportStatistics::$arrStatistics['Skipped texts']++;
                    NarroImportStatistics::$arrStatistics['Texts that had errors while adding']++;
                    /**
                     * If there's no text, there's no context and no suggestion
                     */
                    return false;
                }
            }
            elseif (!$objNarroText instanceof NarroText) {
                /**
                 * If there's no text, there's no context and no suggestion
                 */
                return false;
            }

            /**
             * fetch the context
             */
            $objNarroContext = NarroContext::QuerySingle(
                                    QQ::AndCondition(
                                        QQ::Equal(QQN::NarroContext()->TextId, $objNarroText->TextId),
                                        /**
                                         * If you change the file structure, and would like to reuse contexts, you might want to comment the following line
                                         */
                                        QQ::Equal(QQN::NarroContext()->FileId, $this->objFile->FileId),
                                        QQ::Equal(QQN::NarroContext()->ProjectId, $this->objProject->ProjectId),
                                        QQ::Equal(QQN::NarroContext()->Context, $strContext)
                                    )
                                );

            if (!$this->blnOnlySuggestions && !$objNarroContext instanceof NarroContext) {

                $objNarroContext = new NarroContext();
                $objNarroContext->TextId = $objNarroText->TextId;
                $objNarroContext->ProjectId = $this->objProject->ProjectId;
                $objNarroContext->Context = $strContext;
                $objNarroContext->ContextMd5 = md5($strContext);
                $objNarroContext->FileId = $this->objFile->FileId;
                $objNarroContext->Active = 1;
                $objNarroContext->Modified = date('Y-m-d H:i:s');
                $objNarroContext->Created = date('Y-m-d H:i:s');
                $objNarroContext->Save();

                NarroLog::LogMessage(1, sprintf(t('Added the context "%s" from the file "%s"'), $strContext, $this->objFile->FileName));
                NarroImportStatistics::$arrStatistics['Imported contexts']++;
            }
            elseif(!$objNarroContext instanceof NarroContext) {
                /*
                 * no context found = no go
                 */
                return false;
            }
            else {
                NarroImportStatistics::$arrStatistics['Reused contexts']++;
            }


            /**
             * load the context info
             */
            $objContextInfo = NarroContextInfo::LoadByContextIdLanguageId($objNarroContext->ContextId, $this->objTargetLanguage->LanguageId);

            if (!$this->blnOnlySuggestions && !$objContextInfo instanceof NarroContextInfo) {

                $objContextInfo = new NarroContextInfo();
                $objContextInfo->ContextId = $objNarroContext->ContextId;
                $objContextInfo->LanguageId = $this->objTargetLanguage->LanguageId;
                $objContextInfo->HasSuggestions = 0;
                $objContextInfo->HasComments = 0;
                $blnContextInfoChanged = true;
            }
            elseif (!$objContextInfo instanceof NarroContextInfo) {
                /**
                 * no context info = no go
                 */
                return false;
            }


            /**
             * this lies outside the if/else if reusing contexts is activated, so if a context was moved in another file, we'll just update the file_id
             */
            if ($objNarroContext->FileId != $this->objFile->FileId) {
                $blnContextChanged = true;
                $objNarroContext->FileId = $this->objFile->FileId;
            }

            if ($objContextInfo->TextAccessKey != $strOriginalAccKey) {
                $blnContextInfoChanged = true;
                $objContextInfo->TextAccessKey = $strOriginalAccKey;;
            }

            if (!$this->blnOnlySuggestions && trim($strComment) != '') {

                $objContextComment = NarroContextComment::QuerySingle(
                                        QQ::AndCondition(
                                            QQ::Equal(QQN::NarroContextComment()->ContextId, $objNarroContext->ContextId),
                                            QQ::Equal(QQN::NarroContextComment()->LanguageId, $this->objTargetLanguage->LanguageId),
                                            QQ::Equal(QQN::NarroContextComment()->CommentTextMd5, md5($strComment))
                                        )
                );

                if (!$objContextComment instanceof NarroContextComment) {
                    $objContextComment = new NarroContextComment();
                    $objContextComment->ContextId = $objNarroContext->ContextId;
                    $objContextComment->UserId = $this->objUser->UserId;
                    $objContextComment->LanguageId = $this->objTargetLanguage->LanguageId;
                    $objContextComment->CommentText = $strComment;
                    $objContextComment->CommentTextMd5 = md5($strComment);
                    $objContextComment->Modified = date('Y-m-d H:i:s');
                    $objContextComment->Created = date('Y-m-d H:i:s');
                    $objContextComment->Save();
                }


                $objContextInfo->HasComments = 1;
                $blnContextInfoChanged = true;
            }

            if  ( $strTranslation == '' ) {
                /**
                 * just ignore, used for import without suggestions
                 */
                NarroImportStatistics::$arrStatistics['Texts without suggestions']++;
            }
            /**
             * if a translation is not empty and the suggestion is/isn't equal to the original
             * also skip checking the texts with only one character (access keys)
             */
            elseif ($this->blnCheckEqual && strlen($strOriginal)>1 && $strOriginal == $strTranslation)
            {
                NarroLog::LogMessage(1, sprintf(t('Skipped "%s" because "%s" has the same value. From "%s".'), $strOriginal, $strTranslation, $this->objFile->FileName));
                NarroImportStatistics::$arrStatistics['Skipped suggestions']++;
                NarroImportStatistics::$arrStatistics['Suggestions that kept the original text']++;
            }
            /**
             * Finally, we can process the suggestion if we got so far
             */
            else {
                /**
                 * See if a suggestion already exists, fetch it
                 */
                $objNarroSuggestion =
                    NarroSuggestion::QuerySingle(
                        QQ::AndCondition(
                            QQ::Equal(QQN::NarroSuggestion()->TextId, $objNarroText->TextId),
                            QQ::Equal(QQN::NarroSuggestion()->LanguageId, $this->objTargetLanguage->LanguageId),
                            QQ::Equal(QQN::NarroSuggestion()->SuggestionValueMd5, md5($strTranslation))
                        )
                );

                if (!$objNarroSuggestion instanceof NarroSuggestion) {

                    $objNarroSuggestion = new NarroSuggestion();
                    $objNarroSuggestion->UserId = $this->objUser->UserId;
                    $objNarroSuggestion->TextId = $objNarroText->TextId;
                    $objNarroSuggestion->LanguageId = $this->objTargetLanguage->LanguageId;
                    $objNarroSuggestion->SuggestionValue = $strTranslation;
                    $objNarroSuggestion->SuggestionValueMd5 = md5($strTranslation);
                    $objNarroSuggestion->SuggestionCharCount = mb_strlen($strTranslation);
                    $objNarroSuggestion->Modified = date('Y-m-d H:i:s');
                    $objNarroSuggestion->Created = date('Y-m-d H:i:s');
                    $objNarroSuggestion->Save();
                    /**
                     * update the HasSuggestions if it was 0 and we added a suggestion
                     */
                    if ($objContextInfo->HasSuggestions == 0 && $objNarroSuggestion instanceof NarroSuggestion )
                        $objContextInfo->HasSuggestions = 1;

                    NarroImportStatistics::$arrStatistics['Imported suggestions']++;
                }
                else {
                    NarroImportStatistics::$arrStatistics['Reused suggestions']++;
                }

                if ($this->blnValidate) {
                    $objContextInfo->ValidSuggestionId = $objNarroSuggestion->SuggestionId;
                    $objContextInfo->ValidatorUserId = QApplication::$objUser->UserId;
                    $blnContextInfoChanged = true;
                    NarroImportStatistics::$arrStatistics['Validated suggestions']++;
                }

                if (!is_null($strTranslationAccKey) && $objContextInfo->SuggestionAccessKey != $strTranslationAccKey) {
                    $blnContextInfoChanged = true;
                    $objContextInfo->SuggestionAccessKey = $strTranslationAccKey;
                }

            }

            if ($objContextInfo->HasSuggestions == 0) {
                $intSuggestionCnt = NarroSuggestion::QueryCount(
                                        QQ::AndCondition(
                                            QQ::Equal(
                                                QQN::NarroSuggestion()->TextId,
                                                $objNarroText->TextId
                                            ),
                                            QQ::Equal(
                                                QQN::NarroSuggestion()->LanguageId,
                                                $this->objTargetLanguage->LanguageId
                                            )
                                        )
                );

                if ($intSuggestionCnt > 0) {
                    $blnContextInfoChanged = true;

                    $arrContextInfo = NarroContextInfo::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::NarroContextInfo()->Context->TextId, $objNarroText->TextId),
                                QQ::Equal(QQN::NarroContextInfo()->LanguageId, $this->objTargetLanguage->LanguageId),
                                QQ::Equal(QQN::NarroContextInfo()->HasSuggestions, 0)
                            )
                    );

                    foreach($arrContextInfo as $objOneContextInfo) {
                        $objOneContextInfo->HasSuggestions = 1;
                        $objOneContextInfo->Modified = date('Y-m-d H:i:s');
                        $objOneContextInfo->Save();
                    }

                    $objContextInfo->HasSuggestions = 1;
                }
            }

            if (!$this->blnOnlySuggestions && $objNarroContext instanceof NarroContext) {
                try {
                    $objNarroContext->Active = 1;
                    $objNarroContext->Modified = date('Y-m-d H:i:s');
                    $objNarroContext->Save();
                } catch(Exception $objExc) {
                    NarroLog::LogMessage(3, sprintf(t('Error while setting context "%s" to active: %s'), $strContext, $objExc->getMessage()));
                    NarroImportStatistics::$arrStatistics['Skipped contexts']++;
                }
            }

            if ($blnContextInfoChanged) {
                $objContextInfo->Modified = date('Y-m-d H:i:s');
                try {
                    $objContextInfo->Save();
                } catch(Exception $objExc) {
                    NarroLog::LogMessage(3, sprintf(t('Error while saving context info for context %s: %s'), $strContext, $objExc->getMessage()));
                    NarroImportStatistics::$arrStatistics['Skipped context infos']++;
                }
            }

            return true;
        }

        /**
         * Get the context info for a certain context
         *
         * @param string $strContext
         * @param integer $intType
         * @return NarroContextInfo
         */
        public function GetContextInfo($strOriginal, $strContext) {
            return NarroContextInfo::QuerySingle(
                QQ::AndCondition(
                    QQ::Equal(QQN::NarroContextInfo()->Context->ProjectId, $this->objProject->ProjectId),
                    QQ::Equal(QQN::NarroContextInfo()->Context->FileId, $this->objFile->FileId),
                    QQ::Equal(QQN::NarroContextInfo()->Context->ContextMd5, md5($strContext)),
                    QQ::Equal(QQN::NarroContextInfo()->Context->Text->TextValueMd5, md5($strOriginal)),
                    QQ::Equal(QQN::NarroContextInfo()->LanguageId, $this->objTargetLanguage->LanguageId)
                )
            );
        }

        /**
         * Get the suggestion made by a specified user
         *
         * @param integer $intContextId
         * @param integer $intTextId
         * @param integer $intUserId
         * @return NarroSuggestion
         */
        public function GetUserSuggestion($intContextId, $intTextId, $intUserId) {
            $arrSuggestion = NarroSuggestion::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::NarroSuggestion()->UserId, $intUserId),
                            QQ::Equal(QQN::NarroSuggestion()->TextId, $intTextId)
                        )
            );

            if (count($arrSuggestion) == 1) {
                return $arrSuggestion[0];
            }
            elseif(count($arrSuggestion) > 1) {
                /**
                 * if there are more suggestions for a user, get the one that he has voted for
                 */
                $objSuggestionVote = NarroSuggestionVote::QuerySingle(
                    QQ::AndCondition(
                        QQ::Equal(QQN::NarroSuggestionVote()->UserId, $intUserId),
                        QQ::Equal(QQN::NarroSuggestionVote()->ContextId, $intContextId)
                    )
                );

                if ($objSuggestionVote)
                    return NarroSuggestion::Load($objSuggestionVote->SuggestionId);
                else
                    /**
                     * the user has more suggestions but has voted none
                     */
                    return false;
            }
            else
                /**
                 * The user has no suggestions for this text
                 */
                return false;
        }

        /**
         * Get the most voted suggestion for a context
         *
         * @param integer $intContextId
         * @return NarroSuggestion
         */
        public function GetMostVotedSuggestion($intContextId) {
            $strQuery = sprintf(
                'SELECT suggestion_id, SUM(vote_value) as votes ' .
                'FROM narro_suggestion_vote ' .
                'WHERE context_id=%d ' .
                'GROUP BY suggestion_id ' .
                'ORDER BY votes DESC ' .
                'LIMIT 1',
                $intContextId
            );
            $objDatabase = QApplication::$Database[1];

            if (!$objDbResult = $objDatabase->Query($strQuery)) {
                NarroLog::LogMessage(3, __METHOD__ . ':' . __LINE__ . ':db_query failed. $strQuery=' . $strQuery);
                return false;
            }
            else {

                if ($objDbResult->CountRows()) {
                    $arrDbRow = $objDbResult->FetchArray();
                    return NarroSuggestion::Load($arrDbRow['suggestion_id']);
                }
                else {
                    NarroLog::LogMessage(2, __METHOD__ . ':' . __LINE__ . ': There are no votes recorded from ' . $strQuery);
                    return false;
                }
            }
        }

        /////////////////////////
        // Public Properties: GET
        /////////////////////////
        public function __get($strName) {
            switch ($strName) {
                case "User": return $this->objUser;
                case "Project": return $this->objProject;
                case "SourceLanguage": return $this->objSourceLanguage;
                case "TargetLanguage": return $this->objTargetLanguage;
                case "Validate": return $this->blnValidate;
                case "CheckEqual": return $this->blnCheckEqual;
                case "OnlySuggestions": return $this->blnOnlySuggestions;

                default: return false;
            }
        }

        /////////////////////////
        // Public Properties: SET
        /////////////////////////
        public function __set($strName, $mixValue) {

            switch ($strName) {
                case "User":
                    if ($mixValue instanceof NarroUser)
                        $this->objUser = $mixValue;
                    else
                        throw new Exception(t('User should be set with an instance of NarroUser'));

                    break;

                case "Project":
                    if ($mixValue instanceof NarroProject)
                        $this->objProject = $mixValue;
                    else
                        throw new Exception(t('Project should be set with an instance of NarroProject'));

                    break;

                case "File":
                    if ($mixValue instanceof NarroFile)
                        $this->objFile = $mixValue;
                    else
                        throw new Exception(t('File should be set with an instance of NarroFile'));

                    break;

                case "TargetLanguage":
                    if ($mixValue instanceof NarroLanguage)
                        $this->objTargetLanguage = $mixValue;
                    else
                        throw new Exception(t('TargetLanguage should be set with an instance of NarroLanguage'));

                    break;

                case "SourceLanguage":
                    if ($mixValue instanceof NarroLanguage)
                        $this->objSourceLanguage = $mixValue;
                    else
                        throw new Exception(t('SourceLanguage should be set with an instance of NarroLanguage'));

                    break;


                case "Validate":
                    try {
                        $this->blnValidate = QType::Cast($mixValue, QType::Boolean);
                        break;
                    } catch (QInvalidCastException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case "CheckEqual":
                    try {
                        $this->blnCheckEqual = QType::Cast($mixValue, QType::Boolean);
                        break;
                    } catch (QInvalidCastException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case "OnlySuggestions":
                    try {
                        $this->blnOnlySuggestions = QType::Cast($mixValue, QType::Boolean);
                        break;
                    } catch (QInvalidCastException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                default:
                    return false;
            }
        }
    }

?>
