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

        protected $txtAccessKey;
        protected $btnSaveAccessKey;

        /**
         * move this somewhere to preferences so that you can choose which languages you actually want to see
         * @var unknown_type
         */
        protected $chkShowOtherLanguages;

        protected $intEditSuggestionId;

        public function __construct($objParentObject, $strControlId = null) {
            // Call the Parent
            try {
                parent::__construct($objParentObject, $strControlId);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            $this->lblMessage_Create();
            $this->chkShowOtherLanguages_Create();
            $this->txtAccessKey_Create();
            $this->btnSaveAccessKey_Create();

            $this->lblSuggestions = new QLabel($this);

            // Setup DataGrid Columns
            $this->colSuggestion = new QDataGridColumn(t('Translation'), '<?= $_CONTROL->ParentControl->dtgSuggestions_colSuggestion_Render($_ITEM); ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroSuggestion()->SuggestionValue), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroSuggestion()->SuggestionValue, false)));
            $this->colSuggestion->HtmlEntities = false;
            $this->colSuggestion->CssClass = NarroApp::$Language->TextDirection;

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
            $this->dtgSuggestions->ItemsPerPage = NarroApp::$User->getPreferenceValueByName('Items per page');

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

        private function txtAccessKey_Create() {
            $this->txtAccessKey = new QTextBox($this);
            $this->txtAccessKey->MaxLength = 1;
            $this->txtAccessKey->MinLength = 1;
            $this->txtAccessKey->Columns = 1;
        }

        private function btnSaveAccessKey_Create() {
            $this->btnSaveAccessKey = new QButton($this);
            $this->btnSaveAccessKey->Text = t('Save');
            $this->btnSaveAccessKey->ActionParameter = $this->txtAccessKey->ControlId;
            if (NarroApp::$UseAjax)
                $this->btnSaveAccessKey->AddAction(new QClickEvent(), new QAjaxAction('btnSaveAccessKey_Click'));
            else
                $this->btnSaveAccessKey->AddAction(new QClickEvent(), new QServerAction('btnSaveAccessKey_Click')
            );
        }

        private function lblMessage_Create() {
            $this->lblMessage = new QLabel($this);
            $this->lblMessage->ForeColor = 'green';
            $this->lblMessage->HtmlEntities = false;
            $this->lblMessage->DisplayStyle = QDisplayStyle::Block;
        }

        private function chkShowOtherLanguages_Create() {
            $this->chkShowOtherLanguages = new QCheckBox($this);
            $this->chkShowOtherLanguages->Text = t('Show suggestions from other languages');
            if (NarroApp::$UseAjax)
                $this->chkShowOtherLanguages->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'dtgSuggestions_Bind'));
            else
                $this->chkShowOtherLanguages->AddAction(new QClickEvent(), new QServerControlAction($this, 'dtgSuggestions_Bind'));
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
                    if (NarroApp::$UseAjax)
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
                    if (NarroApp::$UseAjax)
                        $btnVote->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnVote_Click'));
                    else
                        $btnVote->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnVote_Click')
                    );


                }

                $btnVote->ActionParameter = $this->objNarroContextInfo->ValidSuggestionId;

                $strControlId = 'btnCancelApproval';

                $btnApprove = $this->objForm->GetControl($strControlId);
                if (!$btnApprove) {
                    $btnApprove = new QButton($this, $strControlId);
                    $btnApprove->SetCustomStyle('float', 'right');
                    if (NarroApp::$UseAjax)
                        $btnApprove->AddAction(new QClickEvent(), new QAjaxAction('btnApprove_Click'));
                    else
                        $btnApprove->AddAction(new QClickEvent(), new QServerAction('btnApprove_Click')
                    );
                }

                $btnApprove->Text = t('Disapprove');

                $btnApprove->ActionParameter = $this->objNarroContextInfo->ValidSuggestionId;

                $this->strText .= sprintf('<div style="color:gray;float:right;">%s, %s %s</div>%s<div class="green3dbg" style="border:1px dotted #DDDDDD;padding: 5px"><div style="float:right;">%s%s%s</div>%s</div><br/>',
                    sprintf(t('added by %s'), $this->dtgSuggestions_colAuthor_Render($this->objNarroContextInfo->ValidSuggestion)),
                    $this->dtgSuggestions_colVote_Render($this->objNarroContextInfo->ValidSuggestion),
                    t('votes'),
                    t('Approved translation') . ':',
                    $btnEdit->Render(false),
                    $btnVote->Render(false),
                    ((NarroApp::HasPermissionForThisLang('Can approve', $this->objNarroContextInfo->Context->ProjectId))?$btnApprove->Render(false):'' ),
                    $this->dtgSuggestions_colSuggestion_Render($this->objNarroContextInfo->ValidSuggestion)
                );

                if ($this->objNarroContextInfo->TextAccessKey && NarroApp::HasPermissionForThisLang('Can approve', $this->objNarroContextInfo->Context->ProjectId)) {
                    $this->txtAccessKey->Text = $this->objNarroContextInfo->SuggestionAccessKey;
                    $this->strText .= sprintf('%s<div class="green3dbg" style="border:1px dotted #DDDDDD;padding: 5px"><div style="float:right;">%s</div>%s</div><br/>',
                        t('Access key') . ':',
                        $this->btnSaveAccessKey->Render(false),
                        $this->txtAccessKey->Render(false)
                    );
                }
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
                $this->lblMessage->Render(false) .
                '<div style="text-align:right;width:100%">' . $this->chkShowOtherLanguages->Render(false) . '</div>';

            return $this->strText;
        }

        public function dtgSuggestions_colProject_Render(NarroSuggestion $objNarroSuggestion) {
            if ($strProjectName = $this->objNarroContextInfo->Context->File->Project->ProjectName)
                return NarroLink::ProjectFileList($this->objNarroContextInfo->Context->Project->ProjectId, null, $strProjectName);
        }


        public function dtgSuggestions_colSuggestion_Render(NarroSuggestion $objNarroSuggestion) {

            $strSuggestionValue = NarroApp::$PluginHandler->DisplaySuggestion($objNarroSuggestion->SuggestionValue);
            if (!$strSuggestionValue)
                $strSuggestionValue = $objNarroSuggestion->SuggestionValue;

            $strSuggestionValue = NarroString::ShowLeadingAndTrailingSpaces(NarroString::HtmlEntities($strSuggestionValue));

            if ($objNarroSuggestion->SuggestionId == $this->objNarroContextInfo->ValidSuggestionId && $this->objNarroContextInfo->TextAccessKey) {
                if ($this->objNarroContextInfo->SuggestionAccessKey != '') {
                    $intAccPos = mb_strpos($strSuggestionValue, $this->objNarroContextInfo->SuggestionAccessKey);

                    if (NarroApp::$Language->TextDirection == 'rtl' && $intAccPos == 0)
                        $strDirControlChar = "\xE2\x80\x8E"; //ltr = \xE2\x80\x8F"
                    else
                        $strDirControlChar = '';

                    if ($this->objNarroContextInfo->SuggestionAccessKey && mb_stristr($strSuggestionValue, $this->objNarroContextInfo->SuggestionAccessKey))
                        $strSuggestionValue = mb_substr($strSuggestionValue, 0, $intAccPos) . $strDirControlChar . '<u>' . mb_substr($strSuggestionValue, $intAccPos, 1) . '</u>' . mb_substr($strSuggestionValue, $intAccPos + 1);
                    else
                        $strSuggestionValue .= sprintf(' (%s)', $this->objNarroContextInfo->SuggestionAccessKey);
                }
            }

            if ($objNarroSuggestion->SuggestionId == $this->objNarroContextInfo->ValidSuggestionId)
                $strCellValue = '<b>' . $strSuggestionValue . '</b>';
            else
                $strCellValue = $strSuggestionValue;

            if
            (
                NarroApp::$User->hasPermission(
                    'Can suggest',
                    $this->objNarroContextInfo->Context->ProjectId,
                    NarroApp::GetLanguageId()
                )
                &&
                $this->intEditSuggestionId == $objNarroSuggestion->SuggestionId
            ) {
                $strControlId = 'txtEditSuggestion' . $objNarroSuggestion->SuggestionId;
                $txtEditSuggestion = $this->objForm->GetControl($strControlId);
                if (!$txtEditSuggestion) {
                    $txtEditSuggestion = new QTextBox($this->dtgSuggestions, $strControlId);
                    $txtEditSuggestion->CssClass = NarroApp::$Language->TextDirection . ' green3dbg';
                    $txtEditSuggestion->Width = '100%';
                    $txtEditSuggestion->Height = 85;
                    $txtEditSuggestion->Required = true;
                    $txtEditSuggestion->TextMode = QTextMode::MultiLine;
                    $txtEditSuggestion->CrossScripting = QCrossScripting::Allow;
                    $txtEditSuggestion->Text = $objNarroSuggestion->SuggestionValue;
                }
                $strCellValue = $txtEditSuggestion->Render(false);

            }

            if ($this->chkShowOtherLanguages->Checked)
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
                $strAuthorInfo .= ', ' . sprintf(sprintf(t('approved by %s'), NarroLink::UserProfile($this->objNarroContextInfo->ValidatorUser->UserId, $this->objNarroContextInfo->ValidatorUser->Username) . ' %s'), (($objDateSpan->SimpleDisplay())?sprintf(t('%s ago'), $objDateSpan->SimpleDisplay()):''));
            }

            return $strAuthorInfo;
        }


        public function dtgSuggestions_colActions_Render(NarroSuggestion $objNarroSuggestion) {

            $strControlId = 'btnEditSuggestion' . $objNarroSuggestion->SuggestionId;
            $btnEdit = $this->objForm->GetControl($strControlId);
            if (!$btnEdit) {
                $btnEdit = new QButton($this->dtgSuggestions, $strControlId);
                if (NarroApp::$UseAjax)
                    $btnEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnEdit_Click'));
                else
                    $btnEdit->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnEdit_Click'));
            }

            $blnCanEdit = NarroApp::$User->hasPermission(
                                'Can edit any suggestion',
                                $this->objNarroContextInfo->Context->ProjectId,
                                NarroApp::GetLanguageId()
                          )
                          ||
                          (
                                $objNarroSuggestion->UserId == NarroApp::GetUserId()
                                &&
                                NarroApp::GetUserId() != NarroUser::ANONYMOUS_USER_ID
                          );

            if ($blnCanEdit) {
                $strControlId = 'btnSaveIgnoreSuggestion' . $objNarroSuggestion->SuggestionId;
                $btnSaveIgnoreSuggestion = $this->objForm->GetControl($strControlId);
                if (!$btnSaveIgnoreSuggestion) {
                    $btnSaveIgnoreSuggestion = new QButton($this->dtgSuggestions, $strControlId);
                    $btnSaveIgnoreSuggestion->Text = t('Ignore and save');
                    $btnSaveIgnoreSuggestion->Visible = false;
                    if (NarroApp::$UseAjax)
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
                if (NarroApp::$UseAjax)
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
                if (NarroApp::$UseAjax)
                    $btnVote->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnVote_Click'));
                else
                    $btnVote->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnVote_Click')
                );

            }

            $btnVote->ActionParameter = $objNarroSuggestion->SuggestionId;

            $strControlId = 'btnApprove' . $this->dtgSuggestions->CurrentRowIndex;

            $btnApprove = $this->objForm->GetControl($strControlId);
            if (!$btnApprove) {
                $btnApprove = new QButton($this->dtgSuggestions, $strControlId);
                if (NarroApp::$UseAjax)
                    $btnApprove->AddAction(new QClickEvent(), new QAjaxAction('btnApprove_Click'));
                else
                    $btnApprove->AddAction(new QClickEvent(), new QServerAction('btnApprove_Click')
                );
            }

            $btnApprove->Text = t('Approve');

            $btnApprove->ActionParameter = $objNarroSuggestion->SuggestionId;

            $strText = '';

            if (NarroApp::$User->Language->LanguageId == $objNarroSuggestion->LanguageId) {
                if (NarroApp::HasPermissionForThisLang('Can approve', $this->objNarroContextInfo->Context->ProjectId))
                    $strText .= '&nbsp;' . $btnApprove->Render(false);
                if (NarroApp::HasPermissionForThisLang('Can vote', $this->objNarroContextInfo->Context->ProjectId))
                    $strText .= '&nbsp;' . $btnVote->Render(false);
                if (NarroApp::HasPermissionForThisLang('Can suggest', $this->objNarroContextInfo->Context->ProjectId) || ($objNarroSuggestion->UserId == NarroApp::GetUserId() && NarroApp::GetUserId() != NarroUser::ANONYMOUS_USER_ID )) {
                    $strText .= '&nbsp;' . $btnEdit->Render(false);
                    if ($blnCanEdit) $strText .= '&nbsp;' . $btnSaveIgnoreSuggestion->Render(false);
                }
                if (NarroApp::HasPermissionForThisLang('Can delete any suggestion', $this->objNarroContextInfo->Context->ProjectId) || ($objNarroSuggestion->UserId == NarroApp::GetUserId() && NarroApp::GetUserId() != NarroUser::ANONYMOUS_USER_ID ))
                    $strText .= '&nbsp;' . $btnDelete->Render(false);

                return '<div style="float:right">' . $strText . '</div>';
            }
            else {
                return '';
            }
        }

        public function dtgSuggestions_Bind() {
            $objLangCondition = QQ::All();
            if (NarroApp::$User->getPreferenceValueByName('Other languages')) {
                foreach(explode(' ', NarroApp::$User->getPreferenceValueByName('Other languages')) as $strLangCode) {
                    $arrConditions[] = QQ::Equal(QQN::NarroSuggestion()->Language->LanguageCode, $strLangCode);
                }

                if (isset($arrConditions))
                    $objLangCondition = QQ::OrCondition($arrConditions);
            }

            // Get Total Count b/c of Pagination
            if ($this->chkShowOtherLanguages->Checked)
                $this->dtgSuggestions->TotalItemCount = NarroSuggestion::QueryCount(
                        QQ::AndCondition(
                            QQ::Equal(QQN::NarroSuggestion()->TextId, $this->objNarroContextInfo->Context->TextId),
                            QQ::NotEqual(QQN::NarroSuggestion()->SuggestionId, $this->objNarroContextInfo->ValidSuggestionId),
                            $objLangCondition
                        )
                );
            else
                $this->dtgSuggestions->TotalItemCount = NarroSuggestion::QueryCount(
                        QQ::AndCondition(
                            QQ::Equal(QQN::NarroSuggestion()->TextId, $this->objNarroContextInfo->Context->TextId),
                            QQ::Equal(QQN::NarroSuggestion()->LanguageId, NarroApp::GetLanguageId()),
                            QQ::NotEqual(QQN::NarroSuggestion()->SuggestionId, $this->objNarroContextInfo->ValidSuggestionId)
                        )
                );

            $this->dtgSuggestions->ShowFooter = ($this->dtgSuggestions->TotalItemCount > $this->dtgSuggestions->ItemsPerPage);

            $objClauses = QQ::Clause(QQ::OrderBy(QQN::NarroSuggestion()->LanguageId));
            if ($objClause = $this->dtgSuggestions->OrderByClause)
                array_push($objClauses, $objClause);
            if ($objClause = $this->dtgSuggestions->LimitClause)
                array_push($objClauses, $objClause);

            if ($this->chkShowOtherLanguages->Checked)
                $this->dtgSuggestions->DataSource =
                    NarroSuggestion::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::NarroSuggestion()->TextId, $this->objNarroContextInfo->Context->TextId),
                                QQ::NotEqual(QQN::NarroSuggestion()->SuggestionId, $this->objNarroContextInfo->ValidSuggestionId),
                                $objLangCondition
                            ),
                            $objClauses
                    );
            else
                $this->dtgSuggestions->DataSource =
                    NarroSuggestion::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::NarroSuggestion()->TextId, $this->objNarroContextInfo->Context->TextId),
                            QQ::Equal(QQN::NarroSuggestion()->LanguageId, NarroApp::GetLanguageId()),
                            QQ::NotEqual(QQN::NarroSuggestion()->SuggestionId, $this->objNarroContextInfo->ValidSuggestionId)
                        ),
                        $objClauses
                    );
            $this->blnModified = true;
            NarroApp::ExecuteJavaScript('highlight_datagrid();');
        }

        // Control ServerActions
        public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
            if (!$this->IsSuggestionUsed($strParameter)) {

                $objSuggestion = NarroSuggestion::Load($strParameter);

                NarroApp::$PluginHandler->DeleteSuggestion($this->objNarroContextInfo->Context->Text->TextValue, $objSuggestion->SuggestionValue, $this->objNarroContextInfo->Context->Context, $this->objNarroContextInfo->Context->File, $this->objNarroContextInfo->Context->Project);

                if (!NarroApp::HasPermissionForThisLang('Can delete any suggestion', $this->objNarroContextInfo->Context->ProjectId) && ($objSuggestion->UserId != NarroApp::GetUserId() || NarroApp::GetUserId() == NarroUser::ANONYMOUS_USER_ID ))
                  return false;

                $objSuggestion->Delete();

                if (NarroSuggestion::QueryCount(QQ::Equal(QQN::NarroSuggestion()->TextId, $this->objNarroContextInfo->Context->TextId)) == 0) {
                    $arrCtx = NarroContextInfo::QueryArray(QQ::Equal(QQN::NarroContextInfo()->Context->TextId, $this->objNarroContextInfo->Context->TextId));

                    foreach($arrCtx as $objContextInfo) {
                        $objContextInfo->HasSuggestions = 0;
                        $objContextInfo->Modified = date('Y-m-d H:i:s');
                        $objContextInfo->Save();
                    }

                    $this->objNarroContextInfo->HasSuggestions = 0;
                }

                $this->lblMessage->Text = t('Suggestion succesfully deleted.');
                $this->blnModified = true;
            }

        }

        public function btnVote_Click($strFormId, $strControlId, $strParameter) {

            if (!NarroApp::HasPermissionForThisLang('Can vote', $this->objNarroContextInfo->Context->ProjectId))
              return false;

            $objSuggestion = NarroSuggestion::Load($strParameter);
            NarroApp::$PluginHandler->VoteSuggestion($this->objNarroContextInfo->Context->Text->TextValue, $objSuggestion->SuggestionValue, $this->objNarroContextInfo->Context->Context, $this->objNarroContextInfo->Context->File, $this->objNarroContextInfo->Context->Project);

            $arrSuggestion = NarroSuggestionVote::QueryArray(
                QQ::AndCondition(
                    QQ::Equal(QQN::NarroSuggestionVote()->ContextId, $this->objNarroContextInfo->ContextId),
                    QQ::Equal(QQN::NarroSuggestionVote()->UserId, NarroApp::GetUserId())
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
                $objNarroSuggestionVote->UserId = NarroApp::GetUserId();
                $objNarroSuggestionVote->Created = date('Y-m-d H:i:s');
                $objNarroSuggestionVote->VoteValue = 1;
            }

            $objNarroSuggestionVote->Modified = date('Y-m-d H:i:s');
            $objNarroSuggestionVote->Save();

            $this->lblMessage->Text = t('Thank you for your vote. You can change it anytime by voting another suggestion.');
            $this->MarkAsModified();

        }

        public function btnEdit_Click($strFormId, $strControlId, $strParameter) {
            if (!NarroApp::HasPermissionForThisLang('Can suggest', $this->objNarroContextInfo->Context->ProjectId))
                return false;

            $objSuggestion = NarroSuggestion::Load($strParameter);

            $blnCanEdit = NarroApp::$User->hasPermission(
                                'Can edit any suggestion',
                                $this->objNarroContextInfo->Context->ProjectId,
                                NarroApp::GetLanguageId()
                          )
                          ||
                          (
                                $objSuggestion->UserId == NarroApp::GetUserId()
                                &&
                                NarroApp::GetUserId() != NarroUser::ANONYMOUS_USER_ID
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
                        $arrResult = NarroApp::$PluginHandler->SaveSuggestion($this->objNarroContextInfo->Context->Text->TextValue, $txtControl->Text, $this->objNarroContextInfo->Context->Context, $this->objNarroContextInfo->Context->File, $this->objNarroContextInfo->Context->Project);
                        if (is_array($arrResult) && isset($arrResult[1]))
                            $strSuggestionValue = $arrResult[1];
                        else
                            $strSuggestionValue = $txtControl->Text;

                        $btnSaveIgnoreSuggestion = $this->objForm->GetControl('btnSaveIgnoreSuggestion' . $objSuggestion->SuggestionId);

                        if ($strControlId != 'btnSaveIgnoreSuggestion' . $objSuggestion->SuggestionId && NarroApp::$PluginHandler->Error) {
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

                    foreach($arrCtx as $objContextInfo) {
                        if ($objContextInfo->ContextId != $this->objNarroContextInfo->ContextId)
                            $arrTexts[
                                sprintf('<a target="_blank" href="%s">%s</a>',
                                    NarroLink::ContextSuggest(
                                        $objContextInfo->Context->ProjectId,
                                        $objContextInfo->Context->FileId,
                                        $objContextInfo->ContextId,
                                        NarroApp::QueryString('tf'),
                                        NarroApp::QueryString('st'),
                                        NarroApp::QueryString('s')
                                    ),
                                    $objContextInfo->ContextId
                                )
                            ] = 1;
                    }
                    if (isset($arrTexts) && count(array_keys($arrTexts))) {
                        $this->lblMessage->ForeColor = 'red';
                        $this->lblMessage->Text = sprintf(t('You cannot alter this suggestion because it is approved for the following contexts: %s. <br />You can cancel the approval for all these contexts and try again. Click on the contexts to open them in new tabs or windows.'), join(', ', array_keys($arrTexts)));
                        $this->MarkAsModified();
                        return true;
                    }
                }
            }
            elseif ($intVoteCount = NarroSuggestionVote::QueryCount(QQ::AndCondition(QQ::Equal(QQN::NarroSuggestionVote()->SuggestionId, $strSuggestionId), QQ::NotEqual(QQN::NarroSuggestionVote()->UserId, NarroApp::GetUserId())))) {
                $this->lblMessage->ForeColor = 'red';
                $this->lblMessage->Text = sprintf(t('You cannot alter this suggestion because it has %d vote(s).'), $intVoteCount);
                $this->MarkAsModified();
                return true;
            }
            elseif ($intCommentsCount = NarroSuggestionComment::QueryCount(QQ::AndCondition(QQ::Equal(QQN::NarroSuggestionComment()->SuggestionId, $strSuggestionId), QQ::NotEqual(QQN::NarroSuggestionComment()->UserId, NarroApp::GetUserId())))) {
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
