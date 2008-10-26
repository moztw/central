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

    class NarroSuggestionListPanel extends QPanel {
        // General Panel Variables
        protected $objNarroContextInfo;

        public $lblMessage;

        protected $lblSuggestions;

        protected $dtgSuggestions;

        protected $colSuggestion;
        protected $colAuthor;
        protected $colVote;
        protected $colActions;

        protected $chkShowAllLanguages;

        protected $intEditSuggestionId;

        public function __construct($objParentObject, $strControlId = null) {
            // Call the Parent
            try {
                parent::__construct($objParentObject, $strControlId);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            $this->lblMessage = new QLabel($this);
            $this->lblMessage->ForeColor = 'green';
            $this->lblMessage->HtmlEntities = false;
            $this->lblMessage->DisplayStyle = QDisplayStyle::Block;

            $this->lblSuggestions = new QLabel($this);

            $this->chkShowAllLanguages = new QCheckBox($this);
            $this->chkShowAllLanguages->Text = t('Show suggestions from all languages');
            if (QApplication::$blnUseAjax)
                $this->chkShowAllLanguages->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'dtgSuggestions_Bind'));
            else
                $this->chkShowAllLanguages->AddAction(new QClickEvent(), new QServerControlAction($this, 'dtgSuggestions_Bind'));


            // Setup DataGrid Columns
            $this->colSuggestion = new QDataGridColumn(t('Translation'), '<?= $_CONTROL->ParentControl->dtgSuggestions_colSuggestion_Render($_ITEM); ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroSuggestion()->SuggestionValue), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroSuggestion()->SuggestionValue, false)));
            $this->colSuggestion->HtmlEntities = false;
            $this->colSuggestion->CssClass = QApplication::$Language->TextDirection;

            $this->colAuthor = new QDataGridColumn(t('Author'), '<?= $_CONTROL->ParentControl->dtgSuggestions_colAuthor_Render($_ITEM); ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroSuggestion()->UserId), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroSuggestion()->UserId, false)));
            $this->colAuthor->HtmlEntities = false;

            $this->colVote = new QDataGridColumn(t('Votes'), '<?= $_CONTROL->ParentControl->dtgSuggestions_colVote_Render($_ITEM); ?>');
            $this->colVote->HtmlEntities = false;
            $this->colVote->Wrap = false;

            $this->colActions = new QDataGridColumn(t('Actions'), '<?= $_CONTROL->ParentControl->dtgSuggestions_colActions_Render($_ITEM); ?>');
            $this->colActions->HtmlEntities = false;
            $this->colActions->Wrap = false;

            // Setup DataGrid
            $this->dtgSuggestions = new QDataGrid($this);
            $this->dtgSuggestions->ShowHeader = true;

            // Datagrid Paginator
            $this->dtgSuggestions->Paginator = new QPaginator($this->dtgSuggestions);
            $this->dtgSuggestions->ItemsPerPage = QApplication::$objUser->getPreferenceValueByName('Items per page');

            $this->dtgSuggestions->PaginatorAlternate = new QPaginator($this->dtgSuggestions);

            // Specify Whether or Not to Refresh using Ajax
            $this->dtgSuggestions->UseAjax = true;

            // Specify the local databind method this datagrid will use
            $this->dtgSuggestions->SetDataBinder('dtgSuggestions_Bind', $this);

            $this->dtgSuggestions->AddColumn($this->colSuggestion);
            $this->dtgSuggestions->AddColumn($this->colAuthor);
            $this->dtgSuggestions->AddColumn($this->colVote);
            $this->dtgSuggestions->AddColumn($this->colActions);
        }

        public function GetControlHtml() {
            $this->strText = '';
            if ($this->objNarroContextInfo->ValidSuggestionId) {
                $strControlId = 'btnEditSuggestion';
                $btnEdit = $this->objForm->GetControl($strControlId);
                if (!$btnEdit) {
                    $btnEdit = new QButton($this, $strControlId);
                    $btnEdit->SetCustomStyle('float', 'right');
                    $btnEdit->Text = t('Copy');
                    if (QApplication::$blnUseAjax)
                        $btnEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnEdit_Click'));
                    else
                        $btnEdit->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnEdit_Click'));
                }

                $btnEdit->ActionParameter = $this->objNarroContextInfo->ValidSuggestionId;

                $strControlId = 'btnVoteValidSuggestion';

                $btnVote = $this->objForm->GetControl($strControlId);
                if (!$btnVote) {
                    $btnVote = new QButton($this, $strControlId);
                    $btnVote->Text = t('Vote');
                    $btnVote->SetCustomStyle('float', 'right');
                    if (QApplication::$blnUseAjax)
                        $btnVote->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnVote_Click'));
                    else
                        $btnVote->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnVote_Click')
                    );


                }

                $btnVote->ActionParameter = $this->objNarroContextInfo->ValidSuggestionId;

                $strControlId = 'btnCancelValidation';

                $btnValidate = $this->objForm->GetControl($strControlId);
                if (!$btnValidate) {
                    $btnValidate = new QButton($this, $strControlId);
                    $btnValidate->SetCustomStyle('float', 'right');
                    if (QApplication::$blnUseAjax)
                        $btnValidate->AddAction(new QClickEvent(), new QAjaxAction('btnValidate_Click'));
                    else
                        $btnValidate->AddAction(new QClickEvent(), new QServerAction('btnValidate_Click')
                    );
                }

                $btnValidate->Text = t('Cancel validation');

                $btnValidate->ActionParameter = $this->objNarroContextInfo->ValidSuggestionId;

                $this->strText .= sprintf('<div style="color:gray;float:right;">%s, %s %s</div>%s<div class="green3dbg" style="border:1px dotted #DDDDDD;padding: 5px"><div style="float:right;">%s%s%s</div>%s</div><br/>',
                    sprintf(t('added by %s'), $this->dtgSuggestions_colAuthor_Render($this->objNarroContextInfo->ValidSuggestion)),
                    $this->dtgSuggestions_colVote_Render($this->objNarroContextInfo->ValidSuggestion),
                    t('votes'),
                    t('Approved translation:'),
                    $btnVote->Render(false),
                    $btnEdit->Render(false),
                    ((QApplication::$objUser->hasPermission('Can validate', $this->objNarroContextInfo->Context->ProjectId, QApplication::$Language->LanguageId))?$btnValidate->Render(false):'' ),
                    $this->dtgSuggestions_colSuggestion_Render($this->objNarroContextInfo->ValidSuggestion)
                );
            }

            if ($this->dtgSuggestions->TotalItemCount) {
                $this->lblSuggestions->Text = t('Translations for this text:');
                $this->dtgSuggestions->Visible = true;
            }
            elseif ($this->objNarroContextInfo->ValidSuggestionId) {
                $this->lblSuggestions->Text = t('No other suggestions yet.');
                $this->dtgSuggestions->Visible = false;
            }
            else {
                $this->lblSuggestions->Text = t('No suggestions yet.');
                $this->dtgSuggestions->Visible = false;
            }

            $this->strText .=
                $this->lblSuggestions->Render(false) . '<br />' .
                $this->dtgSuggestions->Render(false) . '<br />' .
                '<div style="text-align:right;width:100%">' . $this->chkShowAllLanguages->Render(false) . '</div>';
            $this->strText .= $this->lblMessage->Render(false);
            return $this->strText;
        }

        public function dtgSuggestions_colProject_Render(NarroSuggestion $objNarroSuggestion) {
            if ($strProjectName = $this->objNarroContextInfo->Context->File->Project->ProjectName)
                return NarroLink::ProjectFileList($this->objNarroContextInfo->Context->Project->ProjectId, 1, $strProjectName);
        }


        public function dtgSuggestions_colSuggestion_Render(NarroSuggestion $objNarroSuggestion) {

            $strSuggestionValue = QApplication::$objPluginHandler->DisplaySuggestion($objNarroSuggestion->SuggestionValue);
            if (!$strSuggestionValue)
                $strSuggestionValue = $objNarroSuggestion->SuggestionValue;
            /**
             * @todo Fix please. There are problems with html code.
            if ($objNarroSuggestion->LanguageId == QApplication::$Language->LanguageId)
                $arrWordSuggestions = QApplication::GetSpellSuggestions($objNarroSuggestion->SuggestionValue);
            else*/
                $arrWordSuggestions = array();

            $strSuggestionValue = NarroString::ShowLeadingAndTrailingSpaces(NarroString::HtmlEntities($strSuggestionValue));

            if ($objNarroSuggestion->SuggestionId == $this->objNarroContextInfo->ValidSuggestionId && $this->objNarroContextInfo->TextAccessKey) {
                /**
                 * @todo clean this please
                 */
                $strSuggestionChars = mb_ereg_replace('[\s\\n\.,:;\\\!\?]+', '', $strSuggestionValue);
                $strSuggestionChars = strip_tags($strSuggestionChars);
                /**
                 * mozilla entitites: &xxx;
                 */
                $strSuggestionChars = mb_ereg_replace('&[a-zA-Z\-0-9]+\;', '' , $strSuggestionChars);
                /**
                 * keyboard shortcuts
                 */
                $strSuggestionChars = mb_ereg_replace('[~&]', '' , $strSuggestionChars);
                /**
                 * openoffice entities: %xxx %%xxx %%%xxx #xxx and so on
                 */
                $strSuggestionChars = mb_ereg_replace('[\$\[\#\%]{1,3}[a-zA-Z\_\-0-9]+[\$\]\#\%]{0,3}', '', $strSuggestionChars);

                /**
                 * some characters that mess with the spellchecking
                 */
                $strSuggestionChars = mb_ereg_replace('[\(\)]+', '', $strSuggestionChars);

                $arrAccKeys = array();
                for($i=0; $i<mb_strlen($strSuggestionChars);$i++) {
                    if (!in_array(mb_substr($strSuggestionChars, $i, 1), $arrAccKeys))
                        $arrAccKeys[] = mb_substr($strSuggestionChars, $i, 1);
                }

                $strControlId = 'lstAccessKey' . $objNarroSuggestion->SuggestionId;
                $lstAccessKey = $this->objForm->GetControl($strControlId);
                if (!$lstAccessKey) {
                    $lstAccessKey = new QListBox($this, $strControlId);
                    foreach($arrAccKeys as $strKey) {
                        $lstAccessKey->AddItem($strKey, $strKey, $this->objNarroContextInfo->SuggestionAccessKey == $strKey);
                    }
                    //foreach
                    if (QApplication::$blnUseAjax)
                        $lstAccessKey->AddAction(new QChangeEvent(), new QAjaxAction('lstAccessKey_Change'));
                    else
                        $lstAccessKey->AddAction(new QChangeEvent(), new QServerAction('lstAccessKey_Change')
                    );
                }

                if ($this->objNarroContextInfo->SuggestionAccessKey != '')
                    $intAccPos = mb_stripos($strSuggestionValue, $this->objNarroContextInfo->SuggestionAccessKey);
                else
                    $intAccPos = 0;

                if (QApplication::$Language->TextDirection == 'rtl' && $intAccPos == 0)
                    $strDirControlChar = "\xE2\x80\x8E"; //ltr = \xE2\x80\x8F"
                else
                    $strDirControlChar = '';

                if (QApplication::$objUser->hasPermission('Can validate', $this->objNarroContextInfo->Context->ProjectId, QApplication::$Language->LanguageId))
                    $strSuggestionValue = mb_substr($strSuggestionValue, 0, $intAccPos) . $strDirControlChar . $lstAccessKey->Render(false) . mb_substr($strSuggestionValue, $intAccPos + 1);
                else
                    $strSuggestionValue = mb_substr($strSuggestionValue, 0, $intAccPos) . $strDirControlChar . '<u>' . mb_substr($strSuggestionValue, $intAccPos, 1) . '</u>' . mb_substr($strSuggestionValue, $intAccPos + 1);
            }

            if (is_array($arrWordSuggestions))
            foreach($arrWordSuggestions as $strWord=>$arrSuggestion) {
                $strSuggestionValue = str_replace($strWord, sprintf(t('<span style="color:red" title="Misspelled. Suggestions: %s">%s</span>'), addslashes(join(',', $arrSuggestion)), $strWord), $strSuggestionValue);
            }

            if ($objNarroSuggestion->SuggestionId == $this->objNarroContextInfo->ValidSuggestionId)
                $strCellValue = '<b>' . $strSuggestionValue . '</b>';
            else
                $strCellValue = $strSuggestionValue;

            if
            (
                QApplication::$objUser->hasPermission(
                    'Can suggest',
                    $this->objNarroContextInfo->Context->ProjectId,
                    QApplication::$Language->LanguageId
                )
                &&
                $this->intEditSuggestionId == $objNarroSuggestion->SuggestionId
            ) {
                $strControlId = 'txtEditSuggestion' . $objNarroSuggestion->SuggestionId;
                $txtEditSuggestion = $this->objForm->GetControl($strControlId);
                if (!$txtEditSuggestion) {
                    $txtEditSuggestion = new QTextBox($this->dtgSuggestions, $strControlId);
                    $txtEditSuggestion->CssClass = QApplication::$Language->TextDirection . ' green3dbg';
                    $txtEditSuggestion->Width = '100%';
                    $txtEditSuggestion->Height = 85;
                    $txtEditSuggestion->Required = true;
                    $txtEditSuggestion->TextMode = QTextMode::MultiLine;
                    $txtEditSuggestion->CrossScripting = QCrossScripting::Allow;
                    $txtEditSuggestion->Text = $objNarroSuggestion->SuggestionValue;
                }
                $strCellValue = $txtEditSuggestion->Render(false);

            }
            if ($this->chkShowAllLanguages->Checked)
                return '<div style="color:gray;font-size:70%">' . t($objNarroSuggestion->Language->LanguageName) . '</div>' . $strCellValue;
            else
                return $strCellValue;

        }

        public function dtgSuggestions_colComment_Render(NarroSuggestion $objNarroSuggestion) {
            $arrComments = NarroSuggestionComment::LoadArrayBySuggestionId($objNarroSuggestion->SuggestionId);
            if (count($arrComments)) {
            foreach($arrComments as $objComment) {
                $arrCommentTexts[] = $objComment->CommentText;
            }
            return join('<hr />', $arrCommentTexts);
            }
            else
                return '';
        }

        public function dtgSuggestions_colVote_Render(NarroSuggestion $objNarroSuggestion) {
            $intVoteCount = NarroSuggestionVote::QueryCount(QQ::AndCondition(QQ::Equal(QQN::NarroSuggestionVote()->ContextId, $this->objNarroContextInfo->ContextId), QQ::Equal(QQN::NarroSuggestionVote()->SuggestionId, $objNarroSuggestion->SuggestionId)));
            return $intVoteCount;
        }

        public function dtgSuggestions_colAuthor_Render( NarroSuggestion $objNarroSuggestion ) {
            $objDateSpan = new QDateTimeSpan(time() - strtotime($objNarroSuggestion->Created));
            $strModifiedWhen = $objDateSpan->SimpleDisplay();

            if (strtotime($objNarroSuggestion->Modified) > 0 && $strModifiedWhen && $objNarroSuggestion->User->Username)
                $strAuthorInfo = sprintf('%s, ' . t('%s ago'), NarroLink::UserProfile($objNarroSuggestion->User->UserId, $objNarroSuggestion->User->Username), $strModifiedWhen);
            elseif (strtotime($objNarroSuggestion->Modified) > 0 && $strModifiedWhen && !$objNarroSuggestion->User->Username)
                $strAuthorInfo = sprintf(t('%s ago'), $strModifiedWhen);
            elseif ($objNarroSuggestion->User->Username)
                $strAuthorInfo = NarroLink::UserProfile($objNarroSuggestion->User->UserId, $objNarroSuggestion->User->Username);
            else
                $strAuthorInfo = t('Unknown');

            if ($objNarroSuggestion->SuggestionId == $this->objNarroContextInfo->ValidSuggestionId && $this->objNarroContextInfo->ValidatorUserId != NarroUser::ANONYMOUS_USER_ID) {
                $objDateSpan = new QDateTimeSpan(time() - strtotime($this->objNarroContextInfo->Modified));
                $strModifiedWhen = $objDateSpan->SimpleDisplay();
                $strAuthorInfo .= ', ' . sprintf(sprintf(t('validated by %s'), NarroLink::UserProfile($this->objNarroContextInfo->ValidatorUser->UserId, $this->objNarroContextInfo->ValidatorUser->Username) . ' %s'), (($objDateSpan->SimpleDisplay())?sprintf(t('%s ago'), $objDateSpan->SimpleDisplay()):''));
            }

            return $strAuthorInfo;
        }


        public function dtgSuggestions_colActions_Render(NarroSuggestion $objNarroSuggestion) {

            $strControlId = 'btnEditSuggestion' . $objNarroSuggestion->SuggestionId;
            $btnEdit = $this->objForm->GetControl($strControlId);
            if (!$btnEdit) {
                $btnEdit = new QButton($this->dtgSuggestions, $strControlId);
                if (QApplication::$blnUseAjax)
                    $btnEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnEdit_Click'));
                else
                    $btnEdit->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnEdit_Click'));
            }

            $blnCanEdit = QApplication::$objUser->hasPermission(
                                'Can edit any suggestion',
                                $this->objNarroContextInfo->Context->ProjectId,
                                QApplication::$Language->LanguageId
                          )
                          ||
                          (
                                $objNarroSuggestion->UserId == QApplication::$objUser->UserId
                                &&
                                QApplication::$objUser->UserId != NarroUser::ANONYMOUS_USER_ID
                          );

            if ($blnCanEdit) {
                $strControlId = 'btnSaveIgnoreSuggestion' . $objNarroSuggestion->SuggestionId;
                $btnSaveIgnoreSuggestion = $this->objForm->GetControl($strControlId);
                if (!$btnSaveIgnoreSuggestion) {
                    $btnSaveIgnoreSuggestion = new QButton($this->dtgSuggestions, $strControlId);
                    $btnSaveIgnoreSuggestion->Text = t('Ignore and save');
                    $btnSaveIgnoreSuggestion->Visible = false;
                    if (QApplication::$blnUseAjax)
                        $btnSaveIgnoreSuggestion->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnEdit_Click'));
                    else
                        $btnSaveIgnoreSuggestion->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnEdit_Click'));
                }
                $btnSaveIgnoreSuggestion->ActionParameter = $objNarroSuggestion->SuggestionId;
            }

            if ($objNarroSuggestion->SuggestionId != $this->intEditSuggestionId)
                $btnEdit->Text = ($blnCanEdit)?t('Edit'):t('Copy');

            $btnEdit->ActionParameter = $objNarroSuggestion->SuggestionId;

            $strControlId = 'btnDelete' . $this->dtgSuggestions->CurrentRowIndex;

            $btnDelete = $this->objForm->GetControl($strControlId);
            if (!$btnDelete) {
                $btnDelete = new QButton($this->dtgSuggestions, $strControlId);
                $btnDelete->Text = t('Delete');
                $btnDelete->AddAction(new QClickEvent(), new QConfirmAction(t('Are you sure you want to delete this suggestion?')));
                if (QApplication::$blnUseAjax)
                    $btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
                else
                    $btnDelete->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnDelete_Click')
                );

            }

            $btnDelete->ActionParameter = $objNarroSuggestion->SuggestionId;

            $strControlId = 'btnVote' . $this->dtgSuggestions->CurrentRowIndex;

            $btnVote = $this->objForm->GetControl($strControlId);
            if (!$btnVote) {
                $btnVote = new QButton($this->dtgSuggestions, $strControlId);
                $btnVote->Text = t('Vote');
                if (QApplication::$blnUseAjax)
                    $btnVote->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnVote_Click'));
                else
                    $btnVote->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnVote_Click')
                );

            }

            $btnVote->ActionParameter = $objNarroSuggestion->SuggestionId;

            $strControlId = 'btnValidate' . $this->dtgSuggestions->CurrentRowIndex;

            $btnValidate = $this->objForm->GetControl($strControlId);
            if (!$btnValidate) {
                $btnValidate = new QButton($this->dtgSuggestions, $strControlId);
                if (QApplication::$blnUseAjax)
                    $btnValidate->AddAction(new QClickEvent(), new QAjaxAction('btnValidate_Click'));
                else
                    $btnValidate->AddAction(new QClickEvent(), new QServerAction('btnValidate_Click')
                );
            }

            $btnValidate->Text = t('Validate');

            $btnValidate->ActionParameter = $objNarroSuggestion->SuggestionId;

            $strText = '';

            if (QApplication::$objUser->hasPermission('Can vote', $this->objNarroContextInfo->Context->ProjectId, QApplication::$Language->LanguageId))
                $strText .= '&nbsp;' . $btnVote->Render(false);
            if (QApplication::$objUser->hasPermission('Can suggest', $this->objNarroContextInfo->Context->ProjectId, QApplication::$Language->LanguageId) || ($objNarroSuggestion->UserId == QApplication::$objUser->UserId && QApplication::$objUser->UserId != NarroUser::ANONYMOUS_USER_ID )) {
                $strText .= '&nbsp;' . $btnEdit->Render(false);
                if ($blnCanEdit) $strText .= '&nbsp;' . $btnSaveIgnoreSuggestion->Render(false);
            }
            if (QApplication::$objUser->hasPermission('Can delete any suggestion', $this->objNarroContextInfo->Context->ProjectId, QApplication::$Language->LanguageId) || ($objNarroSuggestion->UserId == QApplication::$objUser->UserId && QApplication::$objUser->UserId != NarroUser::ANONYMOUS_USER_ID ))
                $strText .= '&nbsp;' . $btnDelete->Render(false);
            if (QApplication::$objUser->hasPermission('Can validate', $this->objNarroContextInfo->Context->ProjectId, QApplication::$Language->LanguageId))
                $strText .= '&nbsp;' . $btnValidate->Render(false);

            return '<div style="float:right">' . $strText . '</div>';
        }

        public function dtgSuggestions_Bind() {
            // Get Total Count b/c of Pagination
            if ($this->chkShowAllLanguages->Checked)
                $this->dtgSuggestions->TotalItemCount = NarroSuggestion::QueryCount(
                        QQ::AndCondition(
                            QQ::Equal(QQN::NarroSuggestion()->TextId, $this->objNarroContextInfo->Context->TextId),
                            QQ::NotEqual(QQN::NarroSuggestion()->SuggestionId, $this->objNarroContextInfo->ValidSuggestionId)
                        )
                );
            else
                $this->dtgSuggestions->TotalItemCount = NarroSuggestion::QueryCount(
                        QQ::AndCondition(
                            QQ::Equal(QQN::NarroSuggestion()->TextId, $this->objNarroContextInfo->Context->TextId),
                            QQ::Equal(QQN::NarroSuggestion()->LanguageId, QApplication::$Language->LanguageId),
                            QQ::NotEqual(QQN::NarroSuggestion()->SuggestionId, $this->objNarroContextInfo->ValidSuggestionId)
                        )
                );

            $this->dtgSuggestions->ShowFooter = ($this->dtgSuggestions->TotalItemCount > $this->dtgSuggestions->ItemsPerPage);

            $objClauses = QQ::Clause(QQ::OrderBy(QQN::NarroSuggestion()->LanguageId));
            if ($objClause = $this->dtgSuggestions->OrderByClause)
                array_push($objClauses, $objClause);
            if ($objClause = $this->dtgSuggestions->LimitClause)
                array_push($objClauses, $objClause);

            if ($this->chkShowAllLanguages->Checked)
                $this->dtgSuggestions->DataSource =
                    NarroSuggestion::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::NarroSuggestion()->TextId, $this->objNarroContextInfo->Context->TextId),
                                QQ::NotEqual(QQN::NarroSuggestion()->SuggestionId, $this->objNarroContextInfo->ValidSuggestionId)
                            ),
                            $objClauses
                    );
            else
                $this->dtgSuggestions->DataSource =
                    NarroSuggestion::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::NarroSuggestion()->TextId, $this->objNarroContextInfo->Context->TextId),
                            QQ::Equal(QQN::NarroSuggestion()->LanguageId, QApplication::$Language->LanguageId),
                            QQ::NotEqual(QQN::NarroSuggestion()->SuggestionId, $this->objNarroContextInfo->ValidSuggestionId)
                        ),
                        $objClauses
                    );
            $this->blnModified = true;
            QApplication::ExecuteJavaScript('highlight_datagrid();');
        }

        // Control ServerActions
        public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
            if (!$this->IsSuggestionUsed($strParameter)) {

                $objSuggestion = NarroSuggestion::Load($strParameter);

                QApplication::$objPluginHandler->DeleteSuggestion($this->objNarroContextInfo->Context->Text->TextValue, $objSuggestion->SuggestionValue, $this->objNarroContextInfo->Context->Context, $this->objNarroContextInfo->Context->File, $this->objNarroContextInfo->Context->Project);

                if (!QApplication::$objUser->hasPermission('Can delete any suggestion', $this->objNarroContextInfo->Context->ProjectId, QApplication::$Language->LanguageId) && ($objSuggestion->UserId != QApplication::$objUser->UserId || QApplication::$objUser->UserId == NarroUser::ANONYMOUS_USER_ID ))
                  return false;

                $objSuggestion->Delete();
                NarroCache::ClearAllTextsCount($this->objNarroContextInfo->Context->ProjectId);

                if (NarroSuggestion::QueryCount(QQ::Equal(QQN::NarroSuggestion()->TextId, $this->objNarroContextInfo->Context->TextId)) == 0) {
                    $arrCtx = NarroContextInfo::QueryArray(QQ::Equal(QQN::NarroContextInfo()->Context->TextId, $this->objNarroContextInfo->Context->TextId));

                    foreach($arrCtx as $objContext) {
                        $objContext->HasSuggestions = 0;
                        $objContext->Modified = date('Y-m-d H:i:s');
                        $objContext->Save();
                    }

                    $this->objNarroContextInfo->HasSuggestions = 0;
                }

                $this->lblMessage->Text = t('Suggestion succesfully deleted.');
                $this->blnModified = true;
            }

        }

        public function btnVote_Click($strFormId, $strControlId, $strParameter) {

            if (!QApplication::$objUser->hasPermission('Can vote', $this->objNarroContextInfo->Context->ProjectId, QApplication::$Language->LanguageId))
              return false;

            $objSuggestion = NarroSuggestion::Load($strParameter);
            QApplication::$objPluginHandler->VoteSuggestion($this->objNarroContextInfo->Context->Text->TextValue, $objSuggestion->SuggestionValue, $this->objNarroContextInfo->Context->Context, $this->objNarroContextInfo->Context->File, $this->objNarroContextInfo->Context->Project);

            $arrSuggestion = NarroSuggestionVote::QueryArray(
                QQ::AndCondition(
                    QQ::Equal(QQN::NarroSuggestionVote()->ContextId, $this->objNarroContextInfo->ContextId),
                    QQ::Equal(QQN::NarroSuggestionVote()->UserId, QApplication::$objUser->UserId)
                )
            );

            if (count($arrSuggestion)) {
                $objNarroSuggestionVote = $arrSuggestion[0];
                if ($objNarroSuggestionVote->SuggestionId == $strParameter)
                    return true;
                    $objNarroSuggestionVote->SuggestionId = $strParameter;
            }
            else {

                $objNarroSuggestionVote = new NarroSuggestionVote();
                $objNarroSuggestionVote->SuggestionId = $strParameter;
                $objNarroSuggestionVote->ContextId = $this->objNarroContextInfo->ContextId;
                $objNarroSuggestionVote->UserId = QApplication::$objUser->UserId;
                $objNarroSuggestionVote->Created = date('Y-m-d H:i:s');
                $objNarroSuggestionVote->VoteValue = 1;
            }

            $objNarroSuggestionVote->Modified = date('Y-m-d H:i:s');
            $objNarroSuggestionVote->Save();

            $this->lblMessage->Text = t('Thank you for your vote. You can change it anytime by voting another suggestion.');
            $this->MarkAsModified();

        }

        public function btnEdit_Click($strFormId, $strControlId, $strParameter) {
            if (!QApplication::$objUser->hasPermission('Can suggest', $this->objNarroContextInfo->Context->ProjectId, QApplication::$Language->LanguageId))
                return false;

            $objSuggestion = NarroSuggestion::Load($strParameter);

            $blnCanEdit = QApplication::$objUser->hasPermission(
                                'Can edit any suggestion',
                                $this->objNarroContextInfo->Context->ProjectId,
                                QApplication::$Language->LanguageId
                          )
                          ||
                          (
                                $objSuggestion->UserId == QApplication::$objUser->UserId
                                &&
                                QApplication::$objUser->UserId != NarroUser::ANONYMOUS_USER_ID
                          );
            if (!$blnCanEdit || $this->objNarroContextInfo->ValidSuggestionId == $strParameter) {
                $this->Form->txtSuggestionValue->Text = $objSuggestion->SuggestionValue;
                $this->Form->txtSuggestionValue->Focus();
                return false;
            }

            $btnEdit = $this->objForm->GetControl('btnEditSuggestion' . $objSuggestion->SuggestionId);
            if ($btnEdit->Text != t('Save')) {
                $btnEdit->Text = t('Save');
                $this->intEditSuggestionId = $strParameter;
            }
            else {
                // save
                if (!$this->IsSuggestionUsed($strParameter)) {
                    $txtControl = $this->objForm->GetControl('txtEditSuggestion' . $objSuggestion->SuggestionId);

                    if (trim($txtControl->Text) == '')
                        return true;

                    if ($txtControl) {
                        $arrResult = QApplication::$objPluginHandler->SaveSuggestion($this->objNarroContextInfo->Context->Text->TextValue, $txtControl->Text, $this->objNarroContextInfo->Context->Context, $this->objNarroContextInfo->Context->File, $this->objNarroContextInfo->Context->Project);
                        if (is_array($arrResult) && isset($arrResult[1]))
                            $strSuggestionValue = $arrResult[1];
                        else
                            $strSuggestionValue = $txtControl->Text;

                        $btnSaveIgnoreSuggestion = $this->objForm->GetControl('btnSaveIgnoreSuggestion' . $objSuggestion->SuggestionId);

                        if ($strControlId != 'btnSaveIgnoreSuggestion' . $objSuggestion->SuggestionId && QApplication::$objPluginHandler->Error) {
                            if ($btnSaveIgnoreSuggestion instanceof QButton)
                                $btnSaveIgnoreSuggestion->Visible = true;
                            $this->Form->ShowPluginErrors();
                            return false;
                        }
                        else {
                            if ($btnSaveIgnoreSuggestion instanceof QButton)
                                $btnSaveIgnoreSuggestion->Visible = false;
                            $this->Form->HidePluginErrors();
                        }


                        $objSuggestion->Modified = date('Y-m-d H:i:s');
                        $objSuggestion->SuggestionValue = $strSuggestionValue;
                        $objSuggestion->SuggestionValueMd5 = md5($strSuggestionValue);
                        $objSuggestion->SuggestionCharCount = mb_strlen($strSuggestionValue);

                        try {
                            $objSuggestion->Save();
                            $this->lblMessage->Text = t('Your changes were saved succesfully.');
                            $btnEdit->Text = ($blnCanEdit)?t('Edit'):t('Copy');
                            $this->intEditSuggestionId = null;
                        } catch (QMySqliDatabaseException $objExc) {
                            $this->lblMessage->Text = t('The text you are trying to save already exists.');
                        }
                    }
                }
            }
            //$this->dtgSuggestions_Bind();
            $this->MarkAsModified();
        }

        protected function IsSuggestionUsed($strSuggestionId) {
            if ( $arrCtx = NarroContextInfo::LoadArrayByValidSuggestionId($strSuggestionId) ) {
                if (count($arrCtx) == 1 && $arrCtx[0]->ValidSuggestionId == $this->objNarroContextInfo->ValidSuggestionId)
                    return false;
                else {

                    foreach($arrCtx as $objContext) {
                        if ($objContext->ContextId != $this->objNarroContextInfo->ContextId)
                            $arrTexts[
                                sprintf('<a target="_blank" href="%s">%s</a>',
                                    NarroLink::ContextSuggest(
                                        QApplication::QueryString('p'),
                                        $objContext->ContextId,
                                        QApplication::QueryString('tf'),
                                        QApplication::QueryString('st'),
                                        QApplication::QueryString('s')
                                    ),
                                    $objContext->ContextId
                                )
                            ] = 1;
                    }
                    if (isset($arrTexts) && count(array_keys($arrTexts))) {
                        $this->lblMessage->ForeColor = 'red';
                        $this->lblMessage->Text = sprintf(t('You cannot alter this suggestion because it is marked valid for the following contexts: %s. <br />You can cancel validation for all these contexts and try again. Click on the contexts to open them in new tabs or windows.'), join(', ', array_keys($arrTexts)));
                        $this->MarkAsModified();
                        return true;
                    }
                }
            }
            elseif ($intVoteCount = NarroSuggestionVote::QueryCount(QQ::AndCondition(QQ::Equal(QQN::NarroSuggestionVote()->SuggestionId, $strSuggestionId), QQ::NotEqual(QQN::NarroSuggestionVote()->UserId, QApplication::$objUser->UserId)))) {
                $this->lblMessage->ForeColor = 'red';
                $this->lblMessage->Text = sprintf(t('You cannot alter this suggestion because it has %d vote(s).'), $intVoteCount);
                $this->MarkAsModified();
                return true;
            }
            elseif ($intCommentsCount = NarroSuggestionComment::QueryCount(QQ::AndCondition(QQ::Equal(QQN::NarroSuggestionComment()->SuggestionId, $strSuggestionId), QQ::NotEqual(QQN::NarroSuggestionComment()->UserId, QApplication::$objUser->UserId)))) {
                $this->lblMessage->ForeColor = 'red';
                $this->lblMessage->Text = sprintf(t('You cannot alter this suggestion because it has %d comment(s).'), $intVoteCount);
                $this->MarkAsModified();
                return true;
            }

            return false;
        }

        /////////////////////////
        // Public Properties: SET
        /////////////////////////
        public function __set($strName, $mixValue) {
            $this->blnModified = true;

            switch ($strName) {
                // APPEARANCE
                case "NarroContextInfo":
                    try {
                        $this->objNarroContextInfo = $mixValue;
                        $this->lblMessage->Text = '';
                        $this->dtgSuggestions_Bind();
                        $this->MarkAsModified();
                    } catch (QInvalidCastException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }
                    break;
                default:
                    try {
                        parent::__set($strName, $mixValue);
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }
                    break;
            }
        }

    }
?>
