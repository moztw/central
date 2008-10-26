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

    require_once('includes/prepend.inc.php');

    QApplication::$Language = NarroLanguage::Load(QApplication::QueryString('l'));
    if (QApplication::QueryString('p'))
        $objProject = NarroProject::Load(QApplication::QueryString('p'));

    switch(QApplication::QueryString('t')) {
        case 'suggestion':
            if (isset($objProject) && $objProject instanceof NarroProject)
                $strCacheId = sprintf('rssfeed_suggestion_%d_%d', $objProject->ProjectId, QApplication::QueryString('l'));
            else
                $strCacheId = sprintf('rssfeed_suggestion_%d', QApplication::QueryString('l'));

            if (!$objRssFeed = QApplication::$Cache->load($strCacheId)) {
                if (isset($objProject) && $objProject instanceof NarroProject)
                    $objRssFeed  = new QRssFeed(
                            sprintf(t('Translations for %s'), $objProject->ProjectName),
                            __HTTP_URL__ . __VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__,
                            sprintf(t('Get the latest translation suggestions in %s for %s'), t(QApplication::$Language->LanguageName), $objProject->ProjectName)
                    );
                else
                    $objRssFeed  = new QRssFeed(
                            sprintf(t('Translations for all projects'), t(QApplication::$Language->LanguageName)),
                            __HTTP_URL__ . __VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__,
                            sprintf(t('Get the latest translation suggestions in %s'), t(QApplication::$Language->LanguageName))
                    );


                if (isset($objProject) && $objProject instanceof NarroProject)
                    $objProjectCondition = QQ::Equal(QQN::NarroContextInfo()->Context->ProjectId, $objProject->ProjectId);
                else
                    $objProjectCondition = QQ::All();

                $arrNarroSuggestion = NarroSuggestion::LoadArrayByLanguageId(
                    QApplication::$Language->LanguageId,
                    array(
                        QQ::OrderBy(QQN::NarroSuggestion()->Created, 0),
                        QQ::LimitInfo(20, 0)
                    )
                );

                $intOldTextId = 0;
                $intOldProjectId = 0;
                $strDescription = '';

                foreach($arrNarroSuggestion as $objNarroSuggestion) {

                    $arrNarroContextInfo = NarroContextInfo::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::NarroContextInfo()->LanguageId, QApplication::$Language->LanguageId),
                            QQ::Equal(QQN::NarroContextInfo()->Context->TextId, $objNarroSuggestion->TextId),
                            QQ::Equal(QQN::NarroContextInfo()->Context->Active, 1),
                            $objProjectCondition
                        )
                    );

                    $strUserLink =
                            __HTTP_URL__ .
                            __VIRTUAL_DIRECTORY__ .
                            __SUBDIRECTORY__ .
                            NarroLink::UserProfile($objNarroSuggestion->UserId)
                    ;

                    foreach($arrNarroContextInfo as $objNarroContextInfo) {
                        $strContextLink =
                                __HTTP_URL__ .
                                __VIRTUAL_DIRECTORY__ .
                                __SUBDIRECTORY__ .
                                '/' .
                                NarroLink::ContextSuggest(
                                    $objNarroContextInfo->Context->ProjectId,
                                    $objNarroContextInfo->ContextId,
                                    1,
                                    2,
                                    $objNarroSuggestion->SuggestionValue
                                )
                        ;

                        $strFileLink =
                                __HTTP_URL__ .
                                __VIRTUAL_DIRECTORY__ .
                                __SUBDIRECTORY__ .
                                '/' .
                                NarroLink::FileTextList(
                                    $objNarroContextInfo->Context->ProjectId,
                                    $objNarroContextInfo->Context->FileId,
                                    1,
                                    2,
                                    $objNarroSuggestion->SuggestionValue
                                )
                        ;

                        $strProjectLink =
                                __HTTP_URL__ .
                                __VIRTUAL_DIRECTORY__ .
                                __SUBDIRECTORY__ .
                                '/' .
                                NarroLink::ProjectTextList(
                                    $objNarroContextInfo->Context->ProjectId,
                                    1,
                                    2,
                                    $objNarroSuggestion->SuggestionValue
                                )
                        ;

                        $strDescription = sprintf('<li>' . t('<a href="%s">%s</a> from the file <a href="%s">%s</a>, project <a href="%s">%s</a>') . '</li>', $strContextLink, NarroString::HtmlEntities($objNarroContextInfo->Context->Context), $strFileLink, $objNarroContextInfo->Context->File->FileName, $strProjectLink, $objNarroContextInfo->Context->Project->ProjectName);

                    }

                    if (count($arrNarroContextInfo)) {
                        $objItem = new QRssItem(
                            (strlen($objNarroSuggestion->SuggestionValue)>124)?
                                substr($objNarroSuggestion->SuggestionValue, 0, 124) . '...':
                                $objNarroSuggestion->SuggestionValue
                            ,
                            null,
                            '<p>' . t('Original text') . ': ' . NarroString::HtmlEntities($objNarroSuggestion->Text->TextValue) . '</p>' .
                            '<p>' . t('Translation') . ': ' . NarroString::HtmlEntities($objNarroSuggestion->SuggestionValue) . '</p>' .
                            '<ul>' . $strDescription . '</ul>' .
                            t('Click on the context to use the suggestion, on the file name or project name to search for the suggestion in them.')
                        );
                        $objItem->PubDate = new QDateTime($objNarroSuggestion->Created);
                        $objRssFeed->AddItem($objItem);
                    }
                }
                QApplication::$Cache->save($objRssFeed, $strCacheId, array(), 3600);
            }

            $objRssFeed->Run();
            break;
        case 'text':
            if (isset($objProject) && $objProject instanceof NarroProject)
                $strCacheId = sprintf('rssfeed_text_%d_%d', $objProject->ProjectId, QApplication::QueryString('l'));
            else
                $strCacheId = sprintf('rssfeed_text_%d', QApplication::QueryString('l'));

            if (!$objRssFeed = QApplication::$Cache->load($strCacheId)) {
                if (isset($objProject) && $objProject instanceof NarroProject)
                    $objRssFeed  = new QRssFeed(
                            sprintf(t('Texts to translate for %s'), $objProject->ProjectName),
                            __HTTP_URL__ . __VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__,
                            sprintf(t('Get the latest texts to translate for the project %s'), $objProject->ProjectName)
                    );
                else
                    $objRssFeed  = new QRssFeed(
                            t('Texts to translate'),
                            __HTTP_URL__ . __VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__,
                            t('Get the latest texts to translate')
                    );


                if (isset($objProject) && $objProject instanceof NarroProject)
                    $objProjectCondition = QQ::Equal(QQN::NarroContextInfo()->Context->ProjectId, $objProject->ProjectId);
                else
                    $objProjectCondition = QQ::All();

                $arrNarroContextInfo = NarroContextInfo::QueryArray(
                    QQ::AndCondition(
                        QQ::Equal(QQN::NarroContextInfo()->Context->Active, 1),
                        $objProjectCondition,
                        QQ::IsNull(QQN::NarroContextInfo()->ValidSuggestionId),
                        QQ::Equal(QQN::NarroContextInfo()->LanguageId, QApplication::$Language->LanguageId)
                    ),
                    array(
                        QQ::OrderBy(QQN::NarroContextInfo()->Context->Text->Created, 0),
                        QQ::OrderBy(QQN::NarroContextInfo()->Context->TextId, 1),
                        QQ::OrderBy(QQN::NarroContextInfo()->Context->ProjectId, 1),
                        QQ::LimitInfo(20, 0)
                    )
                );

                $intOldTextId = 0;
                $intOldProjectId = 0;
                $strDescription = '';

                foreach($arrNarroContextInfo as $intKey=>$objNarroContextInfo) {
                    $strContextLink = sprintf(
                            __HTTP_URL__ .
                            __VIRTUAL_DIRECTORY__ .
                            __SUBDIRECTORY__ .
                            '/' .
                            NarroLink::ContextSuggest(
                                $objNarroContextInfo->Context->ProjectId,
                                $objNarroContextInfo->ContextId
                            )
                    );

                    if ($intOldTextId != $objNarroContextInfo->Context->TextId) {
                        if (isset($objItem)) {
                            $objItem->Description = $strDescription . '</ul><p>' . t('Click on any context to translate the text, on the file name or project name to see all the untranslated texts from that file or project.'). '</p>';
                            $objRssFeed->AddItem($objItem);
                            $strDescription = '';
                            $intOldProjectId = 0;
                        }

                        $objItem = new QRssItem(
                            (strlen($objNarroContextInfo->Context->Text->TextValue)>124)?
                                substr($objNarroContextInfo->Context->Text->TextValue, 0, 124) . '...'
                                :
                                $objNarroContextInfo->Context->Text->TextValue,
                            $strContextLink
                        );
                        $objItem->PubDate = new QDateTime($objNarroContextInfo->Context->Text->Created);
                    }

                    $intOldTextId = $objNarroContextInfo->Context->TextId;

                    if ($intOldProjectId != $objNarroContextInfo->Context->ProjectId) {
                        $strProjectLink = sprintf(
                                __HTTP_URL__ .
                                __VIRTUAL_DIRECTORY__ .
                                __SUBDIRECTORY__ .
                                '/' .
                                NarroLink::ProjectTextList(
                                    $objNarroContextInfo->Context->ProjectId,
                                    2,
                                    1,
                                    ''
                                )
                        );
                        if (isset($objProject))
                            $strDescription .= sprintf(t('Used in the following contexts:') . '<ul>', $strProjectLink, $objNarroContextInfo->Context->Project->ProjectName, t('Contexts'));
                        else
                            $strDescription .= sprintf(t('Used in the project <a href="%s">%s</a>, in the following contexts:') . '<ul>', $strProjectLink, $objNarroContextInfo->Context->Project->ProjectName, t('Contexts'));
                    }

                    $intOldProjectId = $objNarroContextInfo->Context->ProjectId;

                    $strFileLink = sprintf(
                            __HTTP_URL__ .
                            __VIRTUAL_DIRECTORY__ .
                            __SUBDIRECTORY__ .
                            '/' .
                            NarroLink::FileTextList(
                                $objNarroContextInfo->Context->ProjectId,
                                $objNarroContextInfo->Context->FileId,
                                2,
                                1,
                                ''
                            )
                    );

                    $strDescription .= sprintf('<li>' . t('<a href="%s">%s</a> from the file <a href="%s">%s</a>') . '</li>', $strContextLink, NarroString::HtmlEntities($objNarroContextInfo->Context->Context), $strFileLink, $objNarroContextInfo->Context->File->FileName);

                }
                QApplication::$Cache->save($objRssFeed, $strCacheId, array(), 3600);
            }

            $objRssFeed->Run();
            break;
        case 'context_info_changes':
            if (isset($objProject) && $objProject instanceof NarroProject)
                $strCacheId = sprintf('rssfeed_context_info_changes_%d_%d', $objProject->ProjectId, QApplication::QueryString('l'));
            else
                $strCacheId = sprintf('rssfeed_context_info_changes_%d', QApplication::QueryString('l'));

            if (!$objRssFeed = QApplication::$Cache->load($strCacheId)) {
                $objRssFeed  = new QRssFeed(
                        sprintf(
                            t('Context changes in %s'),
                            t(QApplication::$Language->LanguageName)
                        ),
                        __HTTP_URL__ . __VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__,
                        sprintf(
                            t('Get the latest context information changes in %s'),
                            t(QApplication::$Language->LanguageName)
                        )
                );
                $objRssFeed->PubDate = new QDateTime(QDateTime::Now);
                $objRssFeed->Language = strtolower(str_replace('_', '-', QApplication::$Language->LanguageCode));

                $strDescription = '';

                if (isset($objProject) && $objProject instanceof NarroProject)
                    $objCondition = QQ::AndCondition(
                                            QQ::Equal(
                                                QQN::NarroContextInfo()->LanguageId,
                                                QApplication::$Language->LanguageId
                                            ),
                                            QQ::Equal(
                                                QQN::NarroContextInfo()->Context->ProjectId,
                                                $objProject->ProjectId
                                            )
                    );
                else
                    $objCondition = QQ::Equal(QQN::NarroContextInfo()->LanguageId, QApplication::$Language->LanguageId);

                foreach(NarroContextInfo::QueryArray($objCondition, array(QQ::OrderBy(QQN::NarroContextInfo()->Modified, 0), QQ::LimitInfo(20, 0))) as $intKey=>$objNarroContextInfo) {
                    $strContextLink = sprintf(
                            __HTTP_URL__ .
                            __VIRTUAL_DIRECTORY__ .
                            __SUBDIRECTORY__ .
                            '/' .
                            NarroLink::ContextSuggest(
                                $objNarroContextInfo->Context->ProjectId,
                                $objNarroContextInfo->ContextId
                            )
                    );

                    $strProjectLink = sprintf(
                            __HTTP_URL__ .
                            __VIRTUAL_DIRECTORY__ .
                            __SUBDIRECTORY__ .
                            '/' .
                            NarroLink::ProjectTextList(
                                $objNarroContextInfo->Context->ProjectId,
                                1,
                                1,
                                ''
                            )
                    );

                    $strUserLink =
                            __HTTP_URL__ .
                            __VIRTUAL_DIRECTORY__ .
                            __SUBDIRECTORY__ .
                            NarroLink::UserProfile($objNarroContextInfo->ValidatorUserId)
                    ;

                    if (isset($objProject) && $objProject instanceof NarroProject)
                        $strItemName = '';
                    else
                        $strItemName = $objNarroContextInfo->Context->Project->ProjectName . ' :: ';

                    $objItem = new QRssItem(
                            $strItemName .
                            (
                                (strlen($objNarroContextInfo->Context->Text->TextValue)>124)?
                                    substr($objNarroContextInfo->Context->Text->TextValue, 0, 124) . '...'
                                    :
                                    $objNarroContextInfo->Context->Text->TextValue
                            )
                            ,
                        $strContextLink
                    );

                    $objItem->Description =
                        sprintf('<p>' . t('Project') . ': <a href="%s">%s</a></p>', $strProjectLink, $objNarroContextInfo->Context->Project->ProjectName) .
                        sprintf('<p>' . t('Context') . ': <a href="%s">%s</a></p>', $strContextLink, NarroString::HtmlEntities($objNarroContextInfo->Context->Context)) .
                        sprintf('<p>' . t('Original text') . ': %s</p>',
                            (
                                ($objNarroContextInfo->TextAccessKey)?
                                    NarroString::Replace($objNarroContextInfo->TextAccessKey, '<u>' . $objNarroContextInfo->TextAccessKey . '</u>', NarroString::HtmlEntities($objNarroContextInfo->Context->Text->TextValue), 1)
                                    :
                                    NarroString::HtmlEntities($objNarroContextInfo->Context->Text->TextValue)
                            )
                        ) .
                        (
                            ($objNarroContextInfo->ValidSuggestionId)?
                                sprintf('<p>' . t('Validated suggestion') . ': %s</p>',
                                    (
                                        ($objNarroContextInfo->TextAccessKey)?
                                            NarroString::Replace($objNarroContextInfo->SuggestionAccessKey, '<u>' . $objNarroContextInfo->SuggestionAccessKey . '</u>', NarroString::HtmlEntities($objNarroContextInfo->ValidSuggestion->SuggestionValue), 1)
                                            :
                                            NarroString::HtmlEntities($objNarroContextInfo->ValidSuggestion->SuggestionValue)
                                    )
                                )
                                :
                                ''
                        ) .
                        (($objNarroContextInfo->HasSuggestions)?
                            sprintf(t('The text has %s suggestions'), NarroSuggestion::QueryCount(QQ::AndCondition(QQ::Equal(QQN::NarroSuggestion()->TextId, $objNarroContextInfo->Context->TextId), QQ::Equal(QQN::NarroSuggestion()->LanguageId, QApplication::$Language->LanguageId)))):
                            t('The text has no suggestions')) .
                        (
                            ($objNarroContextInfo->ValidSuggestionId && $objNarroContextInfo->ValidatorUserId != NarroUser::ANONYMOUS_USER_ID)?
                                sprintf('<p>' . t('Validated by') . ': <a href="%s">%s</a>', $strUserLink, ($objNarroContextInfo->ValidSuggestionId)?$objNarroContextInfo->ValidatorUser->Username:''):
                                ''
                        );

                    if ($objNarroContextInfo->HasComments)
                        $objItem->Comments = sprintf(t('%d comments'), NarroContextComment::QueryCount(QQ::AndCondition(QQ::Equal(QQN::NarroContextComment()->ContextId, $objNarroContextInfo->ContextId), QQ::Equal(QQN::NarroContextComment()->LanguageId, $objNarroContextInfo->LanguageId))));

                    $objItem->PubDate = new QDateTime($objNarroContextInfo->Modified);

                    $objItem->Author = ($objNarroContextInfo->ValidSuggestionId)?$objNarroContextInfo->ValidatorUser->Username:'';

                    $objRssFeed->AddItem($objItem);
                    $strDescription = '';
                }

                QApplication::$Cache->save($objRssFeed, $strCacheId, array(), 3600);
            }

            $objRssFeed->Run();
            break;
        case 'textcomment':
            if (isset($objProject) && $objProject instanceof NarroProject)
                $strCacheId = sprintf('rssfeed_textcomment_%d_%d', $objProject->ProjectId, QApplication::QueryString('l'));
            else
                $strCacheId = sprintf('rssfeed_textcomment_%d', QApplication::QueryString('l'));

            if (!$objRssFeed = QApplication::$Cache->load($strCacheId)) {
                if (isset($objProject) && $objProject instanceof NarroProject)
                    $objRssFeed  = new QRssFeed(
                            sprintf(t('Debates on texts from %s'), $objProject->ProjectName),
                            __HTTP_URL__ . __VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__,
                            sprintf(t('Get the latest debates on texts from the project %s'), $objProject->ProjectName)
                    );
                else
                    $objRssFeed  = new QRssFeed(
                            t('Debates on texts'),
                            __HTTP_URL__ . __VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__,
                            t('Get the latest debates on texts')
                    );


                if (isset($objProject) && $objProject instanceof NarroProject)
                    $strSqlQuery = sprintf(
                        'SELECT narro_text_comment.* FROM narro_text_comment, narro_context WHERE narro_text_comment.text_id=narro_context.text_id AND narro_context.active=1 AND narro_context.project_id=%d AND narro_text_comment.language_id=%d ORDER BY created DESC LIMIT 0, 20',
                         $objProject->ProjectId,
                         QApplication::$Language->LanguageId
                    );
                else
                    $strSqlQuery = sprintf('SELECT narro_text_comment.* FROM narro_text_comment WHERE narro_text_comment.language_id=%d ORDER BY created DESC LIMIT 0, 20',
                         QApplication::$Language->LanguageId
                    );

                $objDatabase = QApplication::$Database[1];
                $objDbResult = $objDatabase->Query($strSqlQuery);

                if ($objDbResult) {
                    $arrTextComment = NarroTextComment::InstantiateDbResult($objDbResult);
                    foreach($arrTextComment as $objTextComment) {
                        if (isset($objProject) && $objProject instanceof NarroProject) {
                            $objContext = NarroContext::QuerySingle(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::NarroContext()->ProjectId, $objProject->ProjectId),
                                    QQ::Equal(QQN::NarroContext()->TextId, $objTextComment->TextId),
                                    QQ::Equal(QQN::NarroContext()->Active, 1)
                                )
                            );

                        }
                        else {
                            $objContext = NarroContext::QuerySingle(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::NarroContext()->TextId, $objTextComment->TextId),
                                    QQ::Equal(QQN::NarroContext()->Active, 1)
                                )
                            );
                        }

                        if ($objContext) {
                            $strDescription = sprintf('
                                <span style="font-size:80%%;color:gray;">' . t('%s wrote on %s:') . '</span>
                                <br />
                                <span style="margin-left:5px;padding:3px;">%s</span>',
                                NarroLink::UserProfile($objTextComment->UserId, '<b>' . $objTextComment->User->Username . '</b>'),
                                $objTextComment->Created,
                                nl2br($objTextComment->CommentText)
                            );
                            $strLink = __HTTP_URL__ . __VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__ .
                                sprintf('/narro_context_suggest.php?l=%s&p=%d&c=%d#textcomments',
                                    QApplication::$Language->LanguageCode,
                                    $objContext->ProjectId,
                                    $objContext->ContextId
                                );

                        }
                        else
                            continue;

                        $objItem = new QRssItem(
                            (strlen($objTextComment->CommentText)>124)?
                                substr($objTextComment->CommentText, 0, 124) . '...'
                                :
                                $objTextComment->CommentText,
                            $strLink
                        );
                        $objItem->Description = $strDescription;
                        $objItem->PubDate = new QDateTime($objTextComment->Created);
                        $objItem->Author = $objTextComment->User->Username;
                        $objRssFeed->AddItem($objItem);
                    }
                }
                QApplication::$Cache->save($objRssFeed, $strCacheId, array(), 3600);
            }

            $objRssFeed->Run();
            break;
        default:
            exit();
    }

?>
