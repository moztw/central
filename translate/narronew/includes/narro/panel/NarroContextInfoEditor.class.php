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
     *
     * @property QLabel $Message
     * @property NarroTextCommentPanel $CommentList
     * @property QLabel $Text
     * @property QTextBox $TextAccessKey
     * @property QTextbox $TextCommandKey
     */

    class NarroContextInfoEditor extends QPanel {
        protected $objContextInfo;
        protected $lblText;
        protected $lblIndex;
        protected $txtTranslation;
        protected $lblContextInfo;
        protected $txtAccessKey;
        protected $txtCommandKey;
        protected $dtgTranslation;
        protected $pnlComment;
        protected $lblMessage;
        protected $btnCopy;
        protected $btnHelp;
        protected $btnSave;
        protected $chkChanged;
        protected $btnSaveIgnore;
        protected $btnKeepUntranslated;

        public function __construct($objParentObject, $strControlId = null, NarroContextInfo $objContextInfo) {
            parent::__construct($objParentObject, $strControlId);

            $this->objContextInfo = $objContextInfo;

            $this->lblIndex = new QLabel($this);
            $this->lblIndex->CssClass = 'index';
            $this->lblIndex->HtmlEntities = false;

            $this->lblMessage = new QLabel($this);
            $this->lblMessage->CssClass = 'message';
            $this->lblMessage->HtmlEntities = false;

            $this->chkChanged = new QCheckBox($this);
            $this->chkChanged->DisplayStyle = QDisplayStyle::None;
            
            $this->txtTranslation = new QTextBox($this);
            $this->txtTranslation->ActionParameter = $objContextInfo->ContextInfoId;
            $this->txtTranslation->TextMode = QTextMode::MultiLine;
            $this->txtTranslation->CssClass = 'translation_box';
            $this->txtTranslation->CrossScripting = QCrossScripting::Allow;
            $this->txtTranslation->Rows = 1;
            $this->txtTranslation->ReadOnly = !QApplication::HasPermissionForThisLang('Can suggest');
            $this->txtTranslation->Width = '100%';
            $this->txtTranslation->DisplayStyle = QDisplayStyle::Block;
            if ($this->txtTranslation->ReadOnly)
                $this->txtTranslation->ToolTip = t('Sign in to add translations');
            else
                $this->txtTranslation->ToolTip = t('Enter your translation here');

            if ($this->objContextInfo->Context->TextAccessKey) {
                $this->txtAccessKey = new QTextBox($this);
                $this->txtAccessKey->ToolTip = sprintf(t('Access key (original access key: %s)'), $this->objContextInfo->Context->TextAccessKey);
                $this->txtAccessKey->TextMode = QTextMode::SingleLine;
                $this->txtAccessKey->Name = t('Access key');
                $this->txtAccessKey->Instructions = sprintf(t('This is the letter that appears underlined in menus and buttons and you can use Alt + this letter to select, e.g. <b>%s</b>'), NarroString::Replace($this->objContextInfo->Context->TextAccessKey, sprintf('<u>%s</u>', $this->objContextInfo->Context->TextAccessKey), $this->objContextInfo->Context->Text->TextValue, 1));
                $this->txtAccessKey->Columns = 5;
                $this->txtAccessKey->MaxLength = 10;
                $this->txtAccessKey->Text = $this->objContextInfo->SuggestionAccessKey;
            }
            
            if ($this->objContextInfo->Context->TextCommandKey) {
                $this->txtCommandKey = new QTextBox($this);
                $this->txtCommandKey->ToolTip = sprintf(t('Command key (original command key: %s)'), $this->objContextInfo->Context->TextCommandKey);
                $this->txtCommandKey->TextMode = QTextMode::SingleLine;
                $this->txtCommandKey->Name = t('Command key');
                $this->txtCommandKey->Instructions = sprintf(t('This is the letter that appears in menus and buttons after the text and you can use Ctrl + this letter to select, e.g. <b>%s Ctrl+%s</b>'), NarroString::Replace($this->objContextInfo->Context->TextAccessKey, sprintf('<u>%s</u>', $this->objContextInfo->Context->TextAccessKey), $this->objContextInfo->Context->Text->TextValue, 1), $this->objContextInfo->Context->TextCommandKey);
                $this->txtCommandKey->Columns = 5;
                $this->txtCommandKey->MaxLength = 10;
                $this->txtCommandKey->Text = $this->objContextInfo->SuggestionCommandKey;
            }

            if ($objContextInfo->ValidSuggestionId)
                $this->txtTranslation->Text = $objContextInfo->ValidSuggestion->SuggestionValue;
            $this->txtTranslation->Columns = 50;

            $this->btnCopy = new QButton($this);
            $this->btnCopy->Text = t('Copy');
            $this->btnCopy->DisplayStyle = QDisplayStyle::None;
            $this->btnCopy->TabIndex = -1;
            $this->btnCopy->CssClass = $this->btnCopy->CssClass . ' copy';
            $this->btnCopy->Display = QApplication::HasPermissionForThisLang('Can suggest');

            $this->lblText = new QLabel($this);
            $this->lblText->Width = '100%';
            $this->lblText->TagName = 'pre';
            $this->lblText->CssClass = 'originalText';
            $this->lblText->Text = NarroString::ShowLeadingAndTrailingSpaces(NarroString::HtmlEntities($this->objContextInfo->Context->Text->TextValue));
            $this->lblText->HtmlEntities = false;
            
            $this->lblText->Text = str_replace("\n", '<span class="newline_block" title="Enter">&nbsp;</span><br />', $this->lblText->Text);
            

            $this->btnHelp_Create();
            
            $this->btnSave = new QButton($this);
            $this->btnSave->Text = t('Save');
            $this->btnSave->CssClass = $this->btnSave->CssClass . ' save';
            $this->btnSave->DisplayStyle = QDisplayStyle::InlineBlock;
            $this->btnSave->Display = QApplication::HasPermissionForThisLang('Can suggest');
            
            if (QApplication::$User->GetPreferenceValueByName('Automatically save translations') == 'Yes') {
                $this->btnSave->DisplayStyle = QDisplayStyle::None;
                $this->btnSave->TabIndex = -1;
            }
            
            
            $this->btnSave->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSave_Click'));

            $this->btnKeepUntranslated_Create();

            $this->lblContextInfo_Create();

            $this->txtTranslation->AddAction(new QFocusEvent(), new QJavaScriptAction(sprintf('ctx_editor_focus("%s", "%s", "%s", "%s", "%s", "%s")', $this->ControlId, $this->txtTranslation->ControlId, $this->btnCopy->ControlId, $this->btnHelp->ControlId, $this->lblContextInfo->ControlId, $this->chkChanged->ControlId)));

            $this->txtTranslation->AddAction(new QChangeEvent(), new QJavaScriptAction(sprintf('jQuery("#%s").attr("checked", true);', $this->chkChanged->ControlId)));
            
            if (QApplication::$User->GetPreferenceValueByName('Automatically save translations') == 'Yes')
                $this->txtTranslation->AddAction(new QFocusEvent(), new QAjaxControlAction($this, 'txtTranslation_Focus'));

            $this->btnCopy->AddAction(
                new QClickEvent(),
                new QJavaScriptAction(
                    sprintf(
                        'if (jQuery("#%s").attr("alt") == "%s") {jQuery("#%s").val(jQuery("#%s").text());jQuery("#%s").attr("alt", "%s");jQuery("#%s").attr("checked", "true");} else {jQuery("#%s").val("");jQuery("#%s").attr("alt", "%s");jQuery("#%s").attr("checked", "");}',
                        $this->btnCopy->ControlId,
                        t('Copy'),
                        $this->txtTranslation->ControlId,
                        $this->lblText->ControlId,
                        $this->btnCopy->ControlId,
                        t('Clear'),
                        $this->chkChanged->ControlId,
                        $this->txtTranslation->ControlId,
                        $this->btnCopy->ControlId,
                        t('Copy'),
                        $this->chkChanged->ControlId
                    )
                )
            );

            if ($this->objContextInfo->HasSuggestions && is_null($this->objContextInfo->ValidSuggestionId))
                $this->dtgTranslation_Create();

            $this->strTemplate = dirname(__FILE__) . '/' . __CLASS__ . '.tpl.php';
            
            if ($this->txtTranslation->ReadOnly)
                $this->btnHelp_Click($this->Form->FormId, $this->btnHelp->ControlId, '');
        }
        
        public function btnHelp_Create() {
            $this->btnHelp = new QLinkButton($this);
            $this->btnHelp->DisplayStyle = QDisplayStyle::InlineBlock;
            $this->btnHelp->CssClass = 'help';
            $this->btnHelp->ToolTip = $this->btnHelp->Text;
            $this->btnHelp->TabIndex = -1;
            $this->btnHelp->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnHelp_Click'));
            $this->btnHelp_Update();
        }
        
        public function btnHelp_Update() {
            $intComments = $this->objContextInfo->Context->Text->CountNarroTextCommentsAsText();
            $intTranslations = NarroSuggestion::CountByTextIdLanguageId($this->objContextInfo->Context->TextId, QApplication::GetLanguageId());
            
            if ($intComments == 0 && $intTranslations == 0)
                $this->btnHelp->Text = sprintf(t('No translations, no comments'));
            elseif ($intComments > 0 && $intTranslations == 0)
                $this->btnHelp->Text = sprintf(t('No translations, %d comments'), $intComments);
            elseif ($intComments == 0 && $intTranslations > 0)
                $this->btnHelp->Text = sprintf(t('%d translations, no comments'), $intTranslations);
            elseif ($intComments > 0 && $intTranslations > 0)
                $this->btnHelp->Text = sprintf(t('%d translations, %d comments'), $intTranslations, $intComments);
        }
        
        public function btnKeepUntranslated_Create($strControlId = null) {
            $this->btnKeepUntranslated = new QButton($this, $strControlId);
            $this->btnKeepUntranslated->ToolTip = t('Keep untranslated');
            $this->btnKeepUntranslated->Text = t('Keep');
            $this->btnKeepUntranslated->TabIndex = -1;
            $this->btnKeepUntranslated->CssClass = $this->btnKeepUntranslated->CssClass . ' keep';
            $this->btnKeepUntranslated->Display =
                QApplication::HasPermissionForThisLang('Can vote', $this->objContextInfo->Context->ProjectId) ||
                QApplication::HasPermissionForThisLang('Can approve', $this->objContextInfo->Context->ProjectId);
            $this->btnKeepUntranslated->DisplayStyle = QDisplayStyle::InlineBlock;
            $this->btnKeepUntranslated->AddAction(new QClickEvent(), new QJavaScriptAction(sprintf('this.disabled=\'disabled\'')));
            $this->btnKeepUntranslated->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnKeepUntranslated_Click'));
        }
        
        public function btnSaveIgnore_Create() {
            if ($this->btnSaveIgnore instanceof QLinkButton) return true;
            
            $this->btnSaveIgnore = new QButton($this);
            $this->btnSaveIgnore->Text = t('Ignore and save');
            $this->btnSaveIgnore->DisplayStyle = QDisplayStyle::Block;
            $this->btnSaveIgnore->Display = false;
            $this->btnSaveIgnore->TabIndex = -1;
        }

        public function lblContextInfo_Create() {
            if (!$this->lblContextInfo) {
                $this->lblContextInfo = new QLabel($this);
                $this->lblContextInfo->CssClass = 'instructions ctxinfo';
                $this->lblContextInfo->TagName = 'div';
                $this->lblContextInfo->DisplayStyle = QDisplayStyle::None;
                if (QApplication::QueryString('p'))
                    $this->lblContextInfo->Text = sprintf('%s<br /><span>%s</span>', $this->objContextInfo->Context->File->FilePath, NarroString::HtmlEntities($this->objContextInfo->Context->Context));
                else
                    $this->lblContextInfo->Text = sprintf('<b>%s</b>%s<br /><span>%s</span>', $this->objContextInfo->Context->Project->ProjectName, $this->objContextInfo->Context->File->FilePath, NarroString::HtmlEntities($this->objContextInfo->Context->Context));
                $this->lblContextInfo->HtmlEntities = false;

                if ($this->objContextInfo->Context->Comment)
                    $this->lblContextInfo->Text .= '<br />' . nl2br(str_replace(array('<!--', '-->'), array('', ''), NarroString::HtmlEntities($this->objContextInfo->Context->Comment)));
            }
        }

        public function dtgTranslation_colAuthor_Render(NarroSuggestion $objSuggestion) {
            $objDateSpan = new QDateTimeSpan(time() - strtotime($objSuggestion->Created));
            $strModifiedWhen = $objDateSpan->SimpleDisplay();

            if (strtotime($objSuggestion->Modified) > 0 && $strModifiedWhen && $objSuggestion->User->RealName)
                $strAuthorInfo = sprintf(
                    (($objSuggestion->IsImported)?t('imported by <a href="%s" tabindex="-1">%s</a>, %s ago'):t('<a href="%s" tabindex="-1">%s</a>, %s ago')),
                    NarroLink::UserProfile($objSuggestion->User->UserId),
                    $objSuggestion->User->RealName,
                    $strModifiedWhen
                );
            elseif (strtotime($objSuggestion->Modified) > 0 && $strModifiedWhen && !$objSuggestion->User->RealName)
                $strAuthorInfo = sprintf(t('%s ago'), $strModifiedWhen);
            elseif ($objSuggestion->User)
                $strAuthorInfo = sprintf(
                    ($objSuggestion->IsImported)?t('imported by <a href="%s" tabindex="-1">%s</a>'):'<a href="%s" tabindex="-1">%s</a>',
                    NarroLink::UserProfile($objSuggestion->User->UserId),
                    $objSuggestion->User->RealName
                );
            else
                $strAuthorInfo = t('Unknown');

            if ($objSuggestion->SuggestionId == $this->objContextInfo->ValidSuggestionId && $this->objContextInfo->ValidatorUserId != NarroUser::ANONYMOUS_USER_ID) {
                $objDateSpan = new QDateTimeSpan(time() - strtotime($this->objContextInfo->Modified));
                $strModifiedWhen = $objDateSpan->SimpleDisplay();
                $strAuthorInfo .= ', ' . sprintf(sprintf(t('approved by <a href="%s" tabindex="-1">%s</a>'), NarroLink::UserProfile($this->objContextInfo->ValidatorUser->UserId), $this->objContextInfo->ValidatorUser->RealName . ' %s'), (($objDateSpan->SimpleDisplay())?sprintf(t('%s ago'), $objDateSpan->SimpleDisplay()):''));
            }

            return sprintf('<small>-- %s, %s</small>', $strAuthorInfo, sprintf(t('%d votes'), $objSuggestion->Votes));
        }

        public function dtgTranslation_colActions_Render(NarroSuggestion $objSuggestion) {

            if (
                $this->objContextInfo->ValidSuggestionId != $objSuggestion->SuggestionId &&
                (
                    QApplication::HasPermissionForThisLang('Can delete any suggestion', $this->objContextInfo->Context->ProjectId) ||
                    ($objSuggestion->UserId == QApplication::GetUserId() && QApplication::GetUserId() != NarroUser::ANONYMOUS_USER_ID )
                )
            ) {
                $strControlId = 'del' . $this->objContextInfo->ContextInfoId . 's' . $objSuggestion->SuggestionId;

                $btnDelete = $this->dtgTranslation->GetChildControl($strControlId);
                if (!$btnDelete) {
                    $btnDelete = new QLabel($this->dtgTranslation, $strControlId);
                    $btnDelete->ToolTip = t('Delete');
                    $btnDelete->CssClass = 'ui-icon ui-icon-circle-close';
                    $btnDelete->DisplayStyle = QDisplayStyle::InlineBlock;
                    $btnDelete->AddAction(new QClickEvent(), new QJavaScriptAction(sprintf('this.disabled=\'disabled\'')));
                    $btnDelete->AddAction(new QClickEvent(), new QConfirmAction(t('Are you sure you want to delete this suggestion?')));
                    if (QApplication::$UseAjax)
                        $btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
                    else
                        $btnDelete->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnDelete_Click')
                    );

                }

                $btnDelete->ActionParameter = $objSuggestion->SuggestionId;
            }


            if (QApplication::HasPermissionForThisLang('Can vote', $this->objContextInfo->Context->ProjectId)) {
                $strControlId = 'votup' . $this->objContextInfo->ContextInfoId . 's' . $objSuggestion->SuggestionId;
                $btnVoteUp = $this->dtgTranslation->GetChildControl($strControlId);
                if (!$btnVoteUp) {
                    $btnVoteUp = new QLabel($this->dtgTranslation, $strControlId);
                    $btnVoteUp->Display = QApplication::HasPermissionForThisLang('Can vote', $this->objContextInfo->Context->ProjectId);
                    $btnVoteUp->ToolTip = t('Vote up');
                    $btnVoteUp->CssClass = 'ui-icon ui-icon-circle-arrow-n';
                    $btnVoteUp->DisplayStyle = QDisplayStyle::InlineBlock;
                    $btnVoteUp->AddAction(new QClickEvent(), new QJavaScriptAction(sprintf('this.disabled=\'disabled\'')));
                    if (QApplication::$UseAjax)
                        $btnVoteUp->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnVote_Click'));
                    else
                        $btnVoteUp->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnVote_Click')
                    );

                }

                $btnVoteUp->ActionParameter = $objSuggestion->SuggestionId;
                
                $strControlId = 'votdn' . $this->objContextInfo->ContextInfoId . 's' . $objSuggestion->SuggestionId;
                $btnVoteDown = $this->dtgTranslation->GetChildControl($strControlId);
                if (!$btnVoteDown) {
                    $btnVoteDown = new QLabel($this->dtgTranslation, $strControlId);
                    $btnVoteDown->Display = QApplication::HasPermissionForThisLang('Can vote', $this->objContextInfo->Context->ProjectId);
                    $btnVoteDown->ToolTip = t('Vote down');
                    $btnVoteDown->CssClass = 'ui-icon ui-icon-circle-arrow-s';
                    $btnVoteDown->DisplayStyle = QDisplayStyle::InlineBlock;
                    $btnVoteDown->AddAction(new QClickEvent(), new QJavaScriptAction(sprintf('this.disabled=\'disabled\'')));
                    if (QApplication::$UseAjax)
                        $btnVoteDown->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnVote_Click'));
                    else
                        $btnVoteDown->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnVote_Click')
                    );
                
                }
                
                $btnVoteDown->ActionParameter = $objSuggestion->SuggestionId;
            }

            if ($this->objContextInfo->ValidSuggestionId != $objSuggestion->SuggestionId && QApplication::HasPermissionForThisLang('Can approve', $this->objContextInfo->Context->ProjectId)) {

                $strControlId = 'apr' . $this->objContextInfo->ContextInfoId . 's' . $objSuggestion->SuggestionId;

                $btnApprove = $this->dtgTranslation->GetChildControl($strControlId);
                if (!$btnApprove) {
                    $btnApprove = new QLabel($this->dtgTranslation, $strControlId);
                    $btnApprove->CssClass = 'ui-icon ui-icon-check';
                    $btnApprove->ToolTip = t('Approve');
                    $btnApprove->DisplayStyle = QDisplayStyle::InlineBlock;
                    $btnApprove->AddAction(new QClickEvent(), new QJavaScriptAction(sprintf('this.disabled=\'disabled\'')));
                    if (QApplication::$UseAjax)
                        $btnApprove->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnApprove_Click'));
                    else
                        $btnApprove->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnApprove_Click')
                    );
                }

                $btnApprove->ActionParameter = $objSuggestion->SuggestionId;
            }

            $strText = '';

            if (isset($btnVoteUp))
                $strText .= '&nbsp;' . $btnVoteUp->Render(false);

            if (isset($btnVoteDown))
                $strText .= '&nbsp;' . $btnVoteDown->Render(false);
            
            if (isset($btnApprove))
                $strText .= '&nbsp;&nbsp;' . $btnApprove->Render(false);

            if (isset($btnDelete))
                $strText .= '&nbsp;&nbsp;' . $btnDelete->Render(false);

            return '<div style="float:right">' . $strText . '</div>';
        }

        public function dtgTranslation_Create() {
            $this->dtgTranslation = new NarroSuggestionDataGrid($this);
            $this->dtgTranslation->ShowFilter = false;
            $this->dtgTranslation->ShowHeader = false;
            $this->dtgTranslation->ShowFooter = false;
            $this->dtgTranslation->AdditionalClauses = array(
                QQ::Expand(QQN::NarroSuggestion()->User)
            );
            $this->dtgTranslation->AdditionalConditions = QQ::AndCondition(
                QQ::Equal(QQN::NarroSuggestion()->LanguageId, QApplication::GetLanguageId()),
                QQ::Equal(QQN::NarroSuggestion()->TextId, $this->objContextInfo->Context->TextId)
            );
            $colSuggestion = $this->dtgTranslation->MetaAddColumn('SuggestionValue');
            $colSuggestion->HtmlEntities = false;
            $colSuggestion->Html = '<?=$_CONTROL->ParentControl->dtgTranslaton_colSuggestion_Render($_ITEM)?>';

            $colActions = new QDataGridColumn('Actions');
            $colActions->HtmlEntities = false;
            $colActions->CssClass = 'actions';
            $colActions->Html = '<?=$_CONTROL->ParentControl->dtgTranslation_colActions_Render($_ITEM)?>';

            $this->dtgTranslation->AddColumn($colActions);
        }

        public function dtgTranslaton_colSuggestion_Render(NarroSuggestion $objSuggestion) {
            return sprintf(
                "<pre%s>%s</pre>%s",
                (($objSuggestion->SuggestionId == $this->objContextInfo->ValidSuggestionId)?" class=\"approved\"":""),
                htmlspecialchars($objSuggestion->SuggestionValue, ENT_NOQUOTES, "UTF-8"),
                $this->dtgTranslation_colAuthor_Render($objSuggestion)
            );
        }

        private function dtgTranslation_Destroy() {
            if ($this->dtgTranslation)
                $this->RemoveChildControl($this->dtgTranslation->ControlId, true);
            $this->dtgTranslation = null;
        }

        public function btnHelp_Click($strFormId, $strControlId, $strParameter) {
            if ($this->btnHelp->Display == false)
                return false;
            
            if (!$this->dtgTranslation)
                $this->dtgTranslation_Create();

            if (!$this->lblContextInfo)
                $this->lblContextInfo_Create();
            
            if (!$this->pnlComment)
                $this->pnlComment_Create();

            $this->dtgTranslation->Display = true;
            $this->lblContextInfo->Display = true;
            $this->btnHelp->Display = false;
            
            $this->txtTranslation->Display = true;
            $this->btnSave->Display = true;
            $this->btnCopy->Display = QApplication::HasPermissionForThisLang('Can suggest');
            $this->btnKeepUntranslated->Display = QApplication::HasPermissionForThisLang('Can vote', $this->objContextInfo->Context->ProjectId) ||
                QApplication::HasPermissionForThisLang('Can approve', $this->objContextInfo->Context->ProjectId);
            
            if ($strParameter != '1')
                $this->txtTranslation->Focus();
        }
        
        public function pnlComment_Create() {
            $this->pnlComment = new NarroTextCommentPanel($this->objContextInfo->Context->Text, $this);
        }

        public function Validate() {
            if ($_POST['Qform__FormControl'] == $this->btnSaveIgnore->ControlId) return true;
            
            $blnEmpty = ($this->txtTranslation->Text == '');
            $blnCanSuggest = QApplication::HasPermissionForThisLang('Can suggest', $this->objContextInfo->Context->ProjectId);

            if (!$blnEmpty && $blnCanSuggest) {
                $arrResult = QApplication::$PluginHandler->SaveSuggestion(
                    $this->objContextInfo->Context->Text->TextValue,
                    $this->txtTranslation->Text,
                    $this->objContextInfo->Context->Context,
                    $this->objContextInfo->Context->File,
                    $this->objContextInfo->Context->Project
                );

                if (is_array($arrResult) && isset($arrResult[1]))
                    $strSuggestionValue = $arrResult[1];
                else
                    $strSuggestionValue = $this->txtTranslation->Text;

                if (QApplication::$PluginHandler->Error) {
                    $this->lblMessage->Text = '';
                    foreach(QApplication::$PluginHandler->PluginErrors as $strPluginName=>$arrErors)
                        $this->lblMessage->Text .= '<b class="error">' . $strPluginName . '</b><div class="plugin_message">' . join('<br />', $arrErors) . '</div>';
                    return false;
                }
                else {
                    /**
                     * Make sure that we're not putting in a empty suggestion
                     */
                    if ($strSuggestionValue == '' && $this->txtTranslation->Text != '') {
                        $this->lblMessage->Text = t('A plugin returned an empty value after processing your translation.');
                        return false;
                    }
                    else
                        return true;
                }
            }
            else {
                if (!$blnCanSuggest) {
                    $this->lblMessage->Text = t("You don't have the permission to add translations.");
                    return false;
                }
                else
                    return false;
            }
        }

        public function btnSave_Click($strFormId, $strControlId, $strParameter) {
            if ($this->txtAccessKey && $this->txtAccessKey->Text != $this->objContextInfo->SuggestionAccessKey) {
                $this->objContextInfo->SuggestionAccessKey = $this->txtAccessKey->Text;
                $this->objContextInfo->Save();
            }
            
            if ($this->txtCommandKey && $this->txtCommandKey->Text != $this->objContextInfo->SuggestionCommandKey) {
                $this->objContextInfo->SuggestionCommandKey = $this->txtCommandKey->Text;
                $this->objContextInfo->Save();
            }
            
            if ($this->txtTranslation->Text != '' && ($this->chkChanged->Checked || ($this->btnSaveIgnore && $this->btnSaveIgnore->ControlId == $strControlId))) {
                if (!$this->btnSaveIgnore && !$this->Validate()) {
                    $this->btnSaveIgnore_Create();
                    $this->btnSaveIgnore->RemoveAllActions('click');
                    $this->btnSaveIgnore->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSave_Click'));
                    $this->btnSaveIgnore->Text = t('Ignore and save');
                    $this->lblMessage->Text .= sprintf(t('Clear the textbox to skip this translation, click Ignore and save or click the save button to try again'));
                    $this->btnSaveIgnore->Display = true;
                    $this->chkChanged->Checked = false;
                    return false;
                }
                
                if ($this->btnSaveIgnore) {
                    $this->btnSaveIgnore->Display = false;
                    $this->btnSave->Display = true;
                }

                if (!$objSuggestion = NarroSuggestion::LoadByTextIdLanguageIdSuggestionValueMd5($this->objContextInfo->Context->TextId, QApplication::GetLanguageId(), md5($this->txtTranslation->Text))) {
                    $objSuggestion = new NarroSuggestion();
                    $objSuggestion->IsImported = false;
                    $objSuggestion->HasComments = false;
                    $objSuggestion->LanguageId = QApplication::GetLanguageId();
                    $objSuggestion->TextId = $this->objContextInfo->Context->TextId;
                    $objSuggestion->SuggestionValue = $this->txtTranslation->Text;
                    $objSuggestion->UserId = QApplication::GetUserId();
                    $objSuggestion->Save();
                    
                    $this->objContextInfo->HasSuggestions = 1;
                    $this->objContextInfo->Modified = QDateTime::Now();;
                    $this->objContextInfo->Save();
                    
                    QApplication::ExecuteJavaScript(
                    	sprintf(
                    		'jQuery(\'#%s\').after(\'&nbsp;<small style="padding: 2px;" class="ui-state-highlight ui-corner-all"><span style="width:16px; height: 16px; display:inline-block" class="ui-icon ui-icon-info"></span>&nbsp;%s.</small>\')',
                            $this->btnHelp->ControlId,
                            t('Translation saved')
                        )
                    );

                    if ($this->dtgTranslation)
                        $this->dtgTranslation->MarkAsModified();
                }
                
                if ($this->ParentControl->ParentControl->chkApprove->Checked == true) {
                    $this->btnApprove_Click($strFormId, $strControlId, $objSuggestion->SuggestionId);
                }
                else {
                    if ($this->ParentControl->ParentControl->chkRefresh->Checked && $strControlId != $this->btnKeepUntranslated->ControlId)
                        $this->ParentControl->ParentControl->btnSearch_Click();
                    
                    $this->btnHelp_Update();
                    
                    foreach($this->Form->GetAllControls() as $ctl) {
                        if ($ctl instanceof NarroContextInfoEditor) {
                            if ($ctl->Text->Text == $this->lblText->Text) {
                                $ctl->btnHelp_Click($this->Form->FormId, $ctl->btnHelp->ControlId, '1');
                            }
                        }
                    }
                }

                $this->chkChanged->Checked = false;

                $this->lblMessage->Text = '';
            }
            elseif ($this->txtTranslation->Text == '' && $this->objContextInfo->ValidSuggestionId) {
                $this->objContextInfo->ValidSuggestionId = null;
                $this->objContextInfo->ValidatorUserId = null;
                $this->objContextInfo->Save();

                if ($this->dtgTranslation)
                    $this->dtgTranslation->MarkAsModified();
            }

            if (isset($objSuggestion))
                return $objSuggestion;
            else
                return true;
        }

        public function txtTranslation_Focus($strFormId, $strControlId, $strParameter) {
            if (
                method_exists($this->ParentControl->ParentControl, 'txtTranslation_Focus')
            )
                $this->ParentControl->ParentControl->txtTranslation_Focus($strFormId, $strControlId, $strParameter);
        }

        public function btnApprove_Click($strFormId, $strControlId, $strParameter) {
            if (!QApplication::HasPermissionForThisLang('Can approve', $this->objContextInfo->Context->ProjectId))
                return false;

            if ($strParameter != $this->objContextInfo->ValidSuggestionId) {
                $this->objContextInfo->ValidSuggestionId = (int) $strParameter;
                $this->objContextInfo->ValidatorUserId = QApplication::GetUserId();
                QApplication::$PluginHandler->ApproveSuggestion($this->objContextInfo->Context->Text->TextValue, $this->txtTranslation->Text, $this->objContextInfo->Context->Context, $this->objContextInfo->Context->File, $this->objContextInfo->Context->Project);

                $objSuggestion = NarroSuggestion::Load($strParameter);
                $strSuggestionValue = $objSuggestion->SuggestionValue;
                
                if ($this->txtAccessKey) {
                    $this->objContextInfo->SuggestionAccessKey = $this->txtAccessKey->Text;
                }
                else {
                    if ($this->objContextInfo->Context->TextAccessKey) {
                        if (mb_stripos($strSuggestionValue, $this->objContextInfo->Context->TextAccessKey) === false)
                            $this->objContextInfo->SuggestionAccessKey = mb_substr($strSuggestionValue, 0, 1);
                        elseif (mb_strpos($strSuggestionValue, mb_strtoupper($this->objContextInfo->Context->TextAccessKey)) === false)
                            $this->objContextInfo->SuggestionAccessKey = mb_strtolower($this->objContextInfo->Context->TextAccessKey);
                        else
                            $this->objContextInfo->SuggestionAccessKey = mb_strtoupper($this->objContextInfo->Context->TextAccessKey);
                    }
                }
                
                if ($this->txtCommandKey) {
                    $this->objContextInfo->SuggestionCommandKey = $this->txtCommandKey->Text;
                }
                else {
                    if ($this->objContextInfo->Context->TextCommandKey) {
                        if (mb_stripos($strSuggestionValue, $this->objContextInfo->Context->TextCommandKey) === false)
                        $this->objContextInfo->SuggestionCommandKey = mb_substr($strSuggestionValue, 0, 1);
                        elseif (mb_strpos($strSuggestionValue, mb_strtoupper($this->objContextInfo->Context->TextCommandKey)) === false)
                        $this->objContextInfo->SuggestionCommandKey = mb_strtolower($this->objContextInfo->Context->TextCommandKey);
                        else
                        $this->objContextInfo->SuggestionCommandKey = mb_strtoupper($this->objContextInfo->Context->TextCommandKey);
                    }
                }

                $this->objContextInfo->Modified = QDateTime::Now();
                $this->objContextInfo->Save();

                $this->txtTranslation->Text = $objSuggestion->SuggestionValue;

                if ($this->dtgTranslation)
                    $this->dtgTranslation->MarkAsModified();
                
                if ($this->ParentControl->ParentControl->chkRefresh->Checked && $strControlId != $this->btnKeepUntranslated->ControlId)
                    $this->ParentControl->ParentControl->btnSearch_Click();
                
                $this->btnHelp_Update();
            }
        }

        protected function IsSuggestionUsed($objSuggestion) {
            if (
                NarroContextInfo::QueryCount(
                    QQ::AndCondition(
                        QQ::Equal(QQN::NarroContextInfo()->Context->File->Active, true),
                        QQ::Equal(QQN::NarroContextInfo()->Context->Active, true),
                        QQ::Equal(QQN::NarroContextInfo()->ValidSuggestionId, $objSuggestion->SuggestionId)
                    )
                )
            ) {
                $strLink = NarroLink::Translate(0, '', NarroTranslatePanel::SHOW_APPROVED, "'" . $objSuggestion->Text->TextValue . "'", 0, 1, 30, 0, 0, '');
                $this->lblText->Warning = sprintf(t('This translation was already approved somewhere.<br />If you still want to delete it, click <a href="%s" target="_blank">here</a> to edit all the texts that use it or %s'), $strLink, '');
                return true;
            }
            /**
            elseif ($intVoteCount = NarroSuggestionVote::QueryCount(QQ::AndCondition(QQ::Equal(QQN::NarroSuggestionVote()->SuggestionId, $strSuggestionId), QQ::NotEqual(QQN::NarroSuggestionVote()->UserId, QApplication::GetUserId())))) {
                $this->lblMessage->ForeColor = 'red';
                $this->lblMessage->Text = sprintf(t('You cannot alter this suggestion because it has %d vote(s).'), $intVoteCount);
                $this->MarkAsModified();
                return true;
            }
            */

            return false;
        }

        public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
            $objSuggestion = NarroSuggestion::Load($strParameter);
            if (($this->btnSaveIgnore && $this->btnSaveIgnore->ControlId == $strControlId) || !$this->IsSuggestionUsed($objSuggestion)) {

                QApplication::$PluginHandler->DeleteSuggestion($this->objContextInfo->Context->Text->TextValue, $objSuggestion->SuggestionValue, $this->objContextInfo->Context->Context, $this->objContextInfo->Context->File, $this->objContextInfo->Context->Project);

                if (
                    !QApplication::HasPermissionForThisLang('Can delete any suggestion', $this->objContextInfo->Context->ProjectId) &&
                    (
                        $objSuggestion->UserId != QApplication::GetUserId() ||
                        QApplication::GetUserId() == NarroUser::ANONYMOUS_USER_ID
                    )
                )
                  return false;

                $objSuggestion->Delete();

                if (NarroSuggestion::CountByTextIdLanguageId($this->objContextInfo->Context->TextId, QApplication::GetLanguageId()) == 0) {
                    $arrCtx = NarroContextInfo::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::NarroContextInfo()->Context->TextId, $this->objContextInfo->Context->TextId),
                            QQ::Equal(QQN::NarroContextInfo()->LanguageId, QApplication::GetLanguageId())
                        )
                    );

                    foreach($arrCtx as $objContextInfo) {
                        $objContextInfo->HasSuggestions = 0;
                        $objContextInfo->Modified = QDateTime::Now();
                        $objContextInfo->Save();
                    }

                    $this->objContextInfo->HasSuggestions = 0;
                    $this->objContextInfo->Save();
                }

                foreach($this->Form->GetAllControls() as $ctl) {
                    if ($ctl instanceof NarroContextInfoEditor) {
                        if ($ctl->TranslationList && $ctl->Text->Text == $this->lblText->Text) {
                            $ctl->btnHelp_Click($this->Form->FormId, $ctl->btnHelp->ControlId, '');
                        }
                    }
                }

                $this->lblMessage->Text = t('Suggestion succesfully deleted.');
                $this->blnModified = true;
                if ($this->btnSaveIgnore) {
                    $this->btnSave->Display = true;
                }
            }
            else {
                $this->btnSaveIgnore_Create();
                $this->btnSaveIgnore->Display = true;
                $this->btnSaveIgnore->Text = t('Ignore and delete');
                $this->btnSaveIgnore->RemoveAllActions('click');
                $this->btnSaveIgnore->ActionParameter = $strParameter;
                $this->btnSaveIgnore->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
            }

        }

        public function btnVote_Click($strFormId, $strControlId, $strParameter) {
            if (!QApplication::HasPermissionForThisLang('Can vote', $this->objContextInfo->Context->ProjectId))
                return false;

            $objNarroSuggestionVote = NarroSuggestionVote::QuerySingle(
                QQ::AndCondition(
                    QQ::Equal(QQN::NarroSuggestionVote()->ContextId, $this->objContextInfo->ContextId),
                    QQ::Equal(QQN::NarroSuggestionVote()->SuggestionId, $strParameter),
                    QQ::Equal(QQN::NarroSuggestionVote()->UserId, QApplication::GetUserId())
                )
            );

            if (!$objNarroSuggestionVote) {

                $objNarroSuggestionVote = new NarroSuggestionVote();
                $objNarroSuggestionVote->SuggestionId = $strParameter;
                $objNarroSuggestionVote->ContextId = $this->objContextInfo->ContextId;
                $objNarroSuggestionVote->UserId = QApplication::GetUserId();
                $objNarroSuggestionVote->Created = QDateTime::Now();
            }
            
            if (strpos($strControlId, 'votdn') === 0)
                $objNarroSuggestionVote->VoteValue = -1;
            else
                $objNarroSuggestionVote->VoteValue = 1;
            
            $objNarroSuggestionVote->Modified = QDateTime::Now();;
            $objNarroSuggestionVote->Save();
            
            $this->objContextInfo->Modified = QDateTime::Now();;
            $this->objContextInfo->Save();
            
            if ($this->ParentControl->ParentControl->chkRefresh->Checked && $strControlId != $this->btnKeepUntranslated->ControlId)
                $this->ParentControl->ParentControl->btnSearch_Click();

            $this->lblText->Warning = t('Thank you for your vote. You can change it anytime by voting another suggestion.');

        }
        
        public function btnKeepUntranslated_Click($strFormId, $strControlId, $strParameter) {
            if (QApplication::HasPermissionForThisLang('Can suggest', $this->objContextInfo->Context->ProjectId)) {
                $this->txtTranslation->Text = $this->objContextInfo->Context->Text->TextValue;
                $this->chkChanged->Checked = true;
                $objSuggestion = $this->btnSave_Click($strFormId, $strControlId, $strParameter);
            }
            
            if (!QApplication::HasPermissionForThisLang('Can approve', $this->objContextInfo->Context->ProjectId) && $objSuggestion instanceof NarroSuggestion) {
                $this->btnVote_Click($strFormId, $strControlId, $objSuggestion->SuggestionId);
            }
            
            $this->btnHelp_Click($strFormId, $strControlId, $strParameter);
        }

        public function __get($strName) {
            switch ($strName) {
                case 'CopyButton': return $this->btnCopy;
                case 'HelpButton': return $this->btnHelp;
                case 'SaveButton': return $this->btnSave;
                case 'KeepUntranslatedButton': return $this->btnKeepUntranslated;
                case 'Text': return $this->lblText;
                case 'TextAccessKey': return $this->txtAccessKey;
                case 'TextCommandKey': return $this->txtCommandKey;
                case 'Translation': return $this->txtTranslation;
                case 'ContextInfo': return $this->lblContextInfo;
                case 'TranslationList': return $this->dtgTranslation;
                case 'CommentList': return $this->pnlComment;
                case 'Message': return $this->lblMessage;
                case 'Changed': return $this->chkChanged->Checked;
                case 'Index': return $this->lblIndex;
                case 'ChangedCheckbox': return $this->chkChanged;
                case 'SaveIgnoreButton': return $this->btnSaveIgnore;

                default:
                    try {
                        return parent::__get($strName);
                        break;
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }
            }
        }

        /////////////////////////
        // Public Properties: SET
        /////////////////////////
        public function __set($strName, $mixValue) {
            $this->blnModified = true;

            switch ($strName) {
                case 'Changed':
                    try {
                        $this->chkChanged->Checked = QType::Cast($mixValue, QType::Boolean);
                        break;
                    } catch (QInvalidCastException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }
                    return;
                case "Index":
                    try {
                        $this->lblIndex->Text = QType::Cast($mixValue, QType::String);
                        break;
                    } catch (QInvalidCastException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }
                    return;

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

