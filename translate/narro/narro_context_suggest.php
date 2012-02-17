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

    class NarroContextSuggestForm extends QForm {

        // Button Actions
        protected $btnSave;
        protected $chkApprove;
        protected $btnSaveIgnore;
        protected $btnNext;
        protected $btnNext100;
        protected $btnPrevious100;
        protected $btnPrevious;
        protected $btnCopyOriginal;
        protected $btnComments;

        protected $chkGoToNext;

        protected $objNarroContextInfo;
        protected $objNarroProject;
        protected $pnlOriginalText;
        protected $pnlComments;
        protected $pnlContext;
        public $txtSuggestionValue;
        protected $txtSuggestionComment;

        protected $pnlSuggestionList;
        protected $lblMessage;

        protected $intTextFilter;
        protected $intProjectId;
        protected $intFileId;
        protected $intSearchType;
        protected $strSearchText;

        protected $pnlPluginMessages;
        protected $pnlDiacritics;

        protected $intCurrentContext;
        protected $intContextsCount;
        protected $pnlProgress;

        protected $lblProgress;

        protected function SetupNarroContextInfo() {

            // Lookup Object PK information from Query String (if applicable)
            $intContextId = NarroApp::QueryString('c');

            $this->intTextFilter = NarroApp::QueryString('tf');
            $this->intProjectId = NarroApp::QueryString('p');
            $this->intFileId = NarroApp::QueryString('f');
            $this->intSearchType = NarroApp::QueryString('st');
            $this->strSearchText = NarroApp::QueryString('s');

            $this->intCurrentContext = NarroApp::QueryString('ci');
            $this->intContextsCount = NarroApp::QueryString('cc');

            if (!$this->intProjectId && !$this->intFileId) {
                NarroApp::Redirect(NarroLink::ProjectList());
            }

            if ($intContextId) {
                $this->objNarroContextInfo = NarroContextInfo::LoadByContextIdLanguageId($intContextId, NarroApp::GetLanguageId());
            }

            if (!$intContextId || !$this->objNarroContextInfo instanceof NarroContextInfo) {
                if ($this->intFileId)
                    $objFilterCodition = QQ::Equal(QQN::NarroContextInfo()->Context->FileId, $this->intFileId);
                else
                    $objFilterCodition = QQ::Equal(QQN::NarroContextInfo()->Context->ProjectId, $this->intProjectId);

                $objExtraCondition = QQ::AndCondition(
                    QQ::GreaterThan(QQN::NarroContextInfo()->ContextId, 1),
                    QQ::Equal(QQN::NarroContextInfo()->LanguageId, NarroApp::GetLanguageId()),
                    $objFilterCodition,
                    QQ::Equal(QQN::NarroContextInfo()->Context->Active, 1)
                );

                if
                (
                    $objContext = NarroContextInfo::GetContext(
                        1,
                        $this->strSearchText,
                        $this->intSearchType,
                        $this->intTextFilter,
                        QQ::OrderBy(array(QQN::NarroContextInfo()->ContextId, true)),
                        $objExtraCondition
                    )
                )
                {
                    NarroApp::Redirect(
                        NarroLink::ContextSuggest(
                            $this->intProjectId,
                            $this->intFileId,
                            $objContext->ContextId,
                            $this->intTextFilter,
                            $this->intSearchType,
                            $this->strSearchText,
                            null,
                            NarroApp::QueryString('cc')
                        )
                    );
                }
                elseif ($this->intFileId)
                    NarroApp::Redirect(NarroLink::FileTextList($this->intProjectId, $this->intFileId, $this->intTextFilter, $this->intSearchType, $this->strSearchText ));
                elseif ($this->intProjectId)
                    NarroApp::Redirect(NarroLink::ProjectTextList($this->intProjectId, $this->intTextFilter, $this->intSearchType, $this->strSearchText));
                else
                    NarroApp::Redirect(NarroLink::ProjectList());
            }
        }

        protected function Form_Create() {
            parent::Form_Create();

            $this->SetupNarroContextInfo();

            $this->objNarroProject = $this->objNarroContextInfo->Context->Project;

            $this->intTextFilter = $this->intTextFilter;

            $this->pnlOriginalText_Create();

            // Create/Setup Button Action controls
            $this->btnSave_Create();
            $this->btnSaveIgnore_Create();
            $this->chkApprove_Create();

            $this->btnNext_Create();
            $this->btnNext100_Create();
            $this->btnPrevious100_Create();
            $this->btnPrevious_Create();
            $this->btnCopyOriginal_Create();
            $this->btnComments_Create();

            $this->chkGoToNext_Create();

            $this->pnlContext_Create();
            $this->pnlComments_Create();
            $this->txtSuggestionValue_Create();

            $this->pnlSuggestionList = new NarroSuggestionListPanel($this);
            $this->pnlSuggestionList->ToolTip = t('Other suggestions so far');

            $this->lblMessage = new QLabel($this);
            $this->lblMessage->ForeColor = 'green';
            $this->pnlPluginMessages = new QPanel($this);
            $this->pnlPluginMessages->BorderWidth = 0;
            $this->pnlPluginMessages->BorderStyle = QBorderStyle::None;
            $this->pnlPluginMessages->Visible = false;
            $this->pnlPluginMessages->SetCustomStyle('padding', '5px');

            $this->pnlProgress = new QPanel($this);
            $this->pnlProgress->Display = NarroApp::HasPermission('Can suggest');

            $this->lblProgress = new QLabel($this);

            $this->UpdateNavigator();

            $this->UpdateData();

            $this->pnlDiacritics = new NarroDiacriticsPanel($this);
            $this->pnlDiacritics->strTextareaControlId = $this->txtSuggestionValue->ControlId;

        }

        // Protected Create Methods

        // Create and Setup pnlOriginalText
        protected function pnlOriginalText_Create() {
            $this->pnlOriginalText = new QPanel($this);
            $this->pnlOriginalText->ToolTip = t('Original text');
            $this->pnlOriginalText->FontBold = true;
            $this->pnlOriginalText->DisplayStyle = QDisplayStyle::Inline;
        }

        // Create and Setup pnlContext
        protected function pnlContext_Create() {
            $this->pnlContext = new QPanel($this);
            $this->pnlContext->ToolTip = t('Details about the place where the text is used');
        }

        // Create and Setup pnlComments
        protected function pnlComments_Create() {
            $this->pnlComments = new NarroTextCommentListPanel($this, 'textcomments');
            $this->pnlComments->Display = false;
        }

        // Update values from objNarroContextInfo
        protected function UpdateData() {
            /**
             * @todo Show somehow the leading spaces ' ' => &nbsp;
             */
            $this->pnlOriginalText->Text = nl2br(NarroString::HtmlEntities($this->objNarroContextInfo->Context->Text->TextValue));
            $this->pnlOriginalText->Text = NarroString::ShowLeadingAndTrailingSpaces($this->pnlOriginalText->Text);

            if
            (
                !is_null($this->objNarroContextInfo->TextAccessKey) &&
                !is_null($this->objNarroContextInfo->ValidSuggestionId) &&
                NarroApp::HasPermissionForThisLang('Can approve', $this->objNarroContextInfo->Context->ProjectId)
            )
                $this->pnlOriginalText->Text = NarroString::Replace(
                    $this->objNarroContextInfo->TextAccessKey,
                    '<u>' . $this->objNarroContextInfo->TextAccessKey . '</u>',
                    $this->pnlOriginalText->Text,
                    1
                );

            $this->pnlContext->Text = nl2br(NarroString::HtmlEntities(str_replace('\n', "\n", $this->objNarroContextInfo->Context->Context)));
            $this->pnlComments->NarroText = $this->objNarroContextInfo->Context->Text;

            if ($this->objNarroContextInfo->Context->Text->HasComments)
                if ($this->pnlComments->Display)
                    $this->btnComments->Text = t('Hide debate');
                else
                    if ($this->objNarroContextInfo->Context->Text->HasComments)
                        $this->btnComments->Text = t('Show debate');
                    else
                        $this->btnComments->Text = t('Start a debate');

            $this->btnComments->MarkAsModified();

            if
            (
                $arrContextComments =
                NarroContextComment::QueryArray(
                    QQ::AndCondition(
                        QQ::Equal(QQN::NarroContextComment()->ContextId, $this->objNarroContextInfo->ContextId),
                        QQ::Equal(QQN::NarroContextComment()->LanguageId, NarroApp::GetLanguageId())
                    )
                )
            ) {
                foreach($arrContextComments as $objContextComment) {
                    $this->pnlContext->Text .= '<br />' . nl2br(NarroString::HtmlEntities($objContextComment->CommentText));
                }
            }

            $this->pnlSuggestionList->NarroContextInfo = $this->objNarroContextInfo;
            //$this->txtSuggestionComment->Text = '';
            $this->txtSuggestionValue->Text = '';

            $this->pnlPluginMessages->Visible = false;
            $this->btnSaveIgnore->Visible = false;

            $this->lblMessage->Text = '';

            if (NarroApp::HasPermissionForThisLang('Can suggest', $this->objNarroContextInfo->Context->ProjectId))
                $this->txtSuggestionValue->Focus();

        }

        protected function UpdateNavigator() {
            $strPageTitle = sprintf((NarroApp::HasPermissionForThisLang('Can suggest', $this->objNarroContextInfo->Context->ProjectId))?t('Translate "%s"'):t('See suggestions for "%s"'),
                            (strlen($this->objNarroContextInfo->Context->Text->TextValue)>30)?mb_substr($this->objNarroContextInfo->Context->Text->TextValue, 0, 30) . '...':$this->objNarroContextInfo->Context->Text->TextValue);

            NarroApp::ExecuteJavaScript(sprintf('document.title="%s"', str_replace(array('\\', '"', "\n"), array('\\\\', '\\"', ' '), $strPageTitle)));

            $this->pnlBreadcrumb->setElements(
                NarroLink::ProjectTextList(
                        $this->objNarroContextInfo->Context->File->Project->ProjectId,
                        $this->intTextFilter,
                        NarroApp::QueryString('st'),
                        $this->strSearchText,
                        $this->objNarroProject->ProjectName
                    ),
                NarroLink::ProjectFileList($this->objNarroContextInfo->Context->Project->ProjectId, null, t('Files'))
            );

            $arrPaths = explode('/', $this->objNarroContextInfo->Context->File->FilePath);
            $strProgressivePath = '';
            if (is_array($arrPaths)) {
                /**
                 * remove the first part that is empty because paths begin with /
                 * and the last part that will be displayed unlinked
                 */
                unset($arrPaths[count($arrPaths) - 1]);
                unset($arrPaths[0]);
                foreach($arrPaths as $strPathPart) {
                    $strProgressivePath .= '/' . $strPathPart;
                    $this->pnlBreadcrumb->addElement(
                        NarroLink::ProjectFileList(
                                $this->objNarroContextInfo->Context->ProjectId,
                                $strProgressivePath,
                                $strPathPart
                        )
                    );
                }
            }

            $this->pnlBreadcrumb->addElement(
                NarroLink::FileTextList(
                        $this->objNarroContextInfo->Context->ProjectId,
                        $this->objNarroContextInfo->Context->FileId,
                        $this->intTextFilter,
                        NarroApp::QueryString('st'),
                        $this->strSearchText,
                        $this->objNarroContextInfo->Context->File->FileName
                )
            );


            $strFilter = '';
            switch ($this->intTextFilter) {
                case NarroTextListForm::SHOW_UNTRANSLATED_TEXTS:
                        $this->pnlBreadcrumb->addElement(t('Untranslated texts'));
                        break;
                case NarroTextListForm::SHOW_APPROVED_TEXTS:
                        $this->pnlBreadcrumb->addElement(t('Approved texts'));
                        break;
                case NarroTextListForm::SHOW_TEXTS_THAT_REQUIRE_APPROVAL:
                        $this->pnlBreadcrumb->addElement(t('Texts that require approval'));
                        break;
                default:

            }

            if ($this->strSearchText != ''){
                switch ($this->intSearchType) {
                    case NarroTextListForm::SEARCH_TEXTS:
                        $this->pnlBreadcrumb->addElement(sprintf(t('Search in original texts for "%s"'), $this->strSearchText));
                        break;
                    case NarroTextListForm::SEARCH_SUGGESTIONS:
                        $this->pnlBreadcrumb->addElement(sprintf(t('Search in suggestions for "%s"'), $this->strSearchText));
                        break;
                    case NarroTextListForm::SEARCH_CONTEXTS:
                        $this->pnlBreadcrumb->addElement(sprintf(t('Search in contexts for "%s"'), $this->strSearchText));
                        break;
                    default:
                }
            }
            else {
                $strSearchType = '';
            }

            $strText = NarroString::HtmlEntities($this->objNarroContextInfo->Context->Text->TextValue);
            $strPageTitle =
                sprintf((NarroApp::HasPermissionForThisLang('Can suggest', $this->objNarroContextInfo->Context->ProjectId))?t('Translate "%s"'):t('See suggestions for "%s"'),
                (strlen($this->objNarroContextInfo->Context->Text->TextValue)>30)?mb_substr($strText, 0, 30) . '...':$strText);

            $this->pnlBreadcrumb->addElement($strPageTitle);
            $this->pnlBreadcrumb->MarkAsModified();
            if ($this->intContextsCount) {
                $this->lblProgress->Text = sprintf('%d/%d', $this->intCurrentContext, $this->intContextsCount);
                $this->pnlProgress->Text = sprintf(
                    '
                    <br />
                    %s <br />
                    <div class="graph" style="width:100%%">
                    <div class="translated" style="width: %d%%;"></div>
                    <div class="untranslated" style="left:%d%%;width: %d%%;"></div>
                    </div>
                    ',
                    sprintf(t('You are now translating a batch of %d texts. The bar below shows your progress through this batch'), $this->intContextsCount),
                    ceil(($this->intCurrentContext * 100)/$this->intContextsCount),
                    ceil(($this->intCurrentContext * 100)/$this->intContextsCount),
                    100 - ceil(($this->intCurrentContext * 100)/$this->intContextsCount)
                );
            }
        }

        // Create and Setup chkGoToNext
        protected function chkGoToNext_Create() {
            $this->chkGoToNext = new QCheckBox($this);
            $this->chkGoToNext->Checked = false;
            $this->chkGoToNext->Text = t('After approving, proceed to the next text');
        }

        // Create and Setup txtSuggestionValue
        protected function txtSuggestionValue_Create() {
            $this->txtSuggestionValue = new QTextBox($this);
            $this->txtSuggestionValue->Text = '';
            $this->txtSuggestionValue->CssClass = NarroApp::$Language->TextDirection . ' green3dbg';
            $this->txtSuggestionValue->Width = '100%';
            $this->txtSuggestionValue->Height = 85;
            $this->txtSuggestionValue->Required = true;
            $this->txtSuggestionValue->TextMode = QTextMode::MultiLine;
            $this->txtSuggestionValue->TabIndex = 1;
            $this->txtSuggestionValue->CrossScripting = QCrossScripting::Allow;
        }

        // Create and Setup txtSuggestionValueMd5
        protected function txtSuggestionComment_Create() {
            $this->txtSuggestionComment = new QTextBox($this);
            $this->txtSuggestionComment->TextMode = QTextMode::MultiLine;
            //$this->txtSuggestionComment->BorderStyle = QBorderStyle::None;
            $this->txtSuggestionComment->Name = t('Suggestion comment (optional):');
            $this->txtSuggestionComment->Width = 465;
            $this->txtSuggestionComment->Height = 85;
            $this->txtSuggestionComment->Text = '';
            $strOrigText = $this->objNarroContextInfo->Context->Text;
            //$this->txtSuggestionComment->MaxLength = strlen($strOrigText) + ceil(20 * strlen($strOrigText) / 100 );
            $this->txtSuggestionComment->TabIndex = 2;
            $this->txtSuggestionComment->Display = NarroApp::HasPermissionForThisLang('Can suggest', $this->objNarroContextInfo->Context->ProjectId);
        }

        // Setup btnSave
        protected function btnSave_Create() {
            $this->btnSave = new QButton($this);
            $this->btnSave->Text = t('Save');
            $this->btnSave->AccessKey = 's';
            if (NarroApp::$UseAjax)
                $this->btnSave->AddAction(new QClickEvent(), new QAjaxAction('btnSave_Click'));
            else
                $this->btnSave->AddAction(new QClickEvent(), new QServerAction('btnSave_Click'));
            //$this->btnSave->PrimaryButton = true;
            $this->btnSave->CausesValidation = true;
            $this->btnSave->TabIndex = 3;
            $this->btnSave->Display = NarroApp::HasPermissionForThisLang('Can suggest', $this->objNarroContextInfo->Context->ProjectId);
            //$this->btnSave->DisplayStyle = QDisplayStyle::None;
        }

        // Setup btnSaveIgnore
        protected function btnSaveIgnore_Create() {
            $this->btnSaveIgnore = new QButton($this);
            $this->btnSaveIgnore->Text = t('Ignore and save');
            if (NarroApp::$UseAjax)
                $this->btnSaveIgnore->AddAction(new QClickEvent(), new QAjaxAction('btnSave_Click'));
            else
                $this->btnSaveIgnore->AddAction(new QClickEvent(), new QServerAction('btnSave_Click'));
            $this->btnSaveIgnore->CausesValidation = true;
            $this->btnSaveIgnore->TabIndex = 3;
            $this->btnSaveIgnore->Visible = false;
            $this->btnSaveIgnore->Display = NarroApp::HasPermissionForThisLang('Can suggest', $this->objNarroContextInfo->Context->ProjectId);
            $this->btnSaveIgnore->AccessKey = 'i';
        }

        // Setup chkApprove
        protected function chkApprove_Create() {
            $this->chkApprove = new QCheckBox($this);
            //$this->chkApprove->TabIndex = 7;
            $this->chkApprove->Display = NarroApp::HasPermissionForThisLang('Can approve', $this->objNarroContextInfo->Context->ProjectId);
            $this->chkApprove->Checked = NarroApp::HasPermissionForThisLang('Can approve', $this->objNarroContextInfo->Context->ProjectId);
            $this->chkApprove->Text = t('Approve after saving');
            $this->chkApprove->AccessKey = 'v';
        }

        // Setup btnNext
        protected function btnNext_Create() {
            $this->btnNext = new QButton($this);
            $this->btnNext->Text = t('Next');

            if (NarroApp::$UseAjax)
                $this->btnNext->AddAction(new QClickEvent(), new QAjaxAction('btnNext_Click'));
            else
                $this->btnNext->AddAction(new QClickEvent(), new QServerAction('btnNext_Click'));

            $this->btnNext->CausesValidation = false;
            $this->btnNext->TabIndex = 4;
            $this->btnNext->AccessKey = 'k';
        }

        // Setup btnNext100
        protected function btnNext100_Create() {
            $this->btnNext100 = new QButton($this);
            $this->btnNext100->Text = t('100 forward');

            if (NarroApp::$UseAjax)
                $this->btnNext100->AddAction(new QClickEvent(), new QAjaxAction('btnNext100_Click'));
            else
                $this->btnNext100->AddAction(new QClickEvent(), new QServerAction('btnNext100_Click'));
            $this->btnNext100->CausesValidation = false;
            $this->btnNext100->TabIndex = 5;
            $this->btnNext100->AccessKey = 'h';
        }

        // Setup btnPrevious100
        protected function btnPrevious100_Create() {
            $this->btnPrevious100 = new QButton($this);
            $this->btnPrevious100->Text = t('100 back');
            if (NarroApp::$UseAjax)
                $this->btnPrevious100->AddAction(new QClickEvent(), new QAjaxAction('btnPrevious100_Click'));
            else
                $this->btnPrevious100->AddAction(new QClickEvent(), new QServerAction('btnPrevious100_Click'));
            $this->btnPrevious100->CausesValidation = false;
            $this->btnPrevious100->TabIndex = 6;
            $this->btnPrevious100->AccessKey = 'l';
        }


        // Setup btnPrevious
        protected function btnPrevious_Create() {
            $this->btnPrevious = new QButton($this);
            $this->btnPrevious->Text = t('Previous');
            if (NarroApp::$UseAjax)
                $this->btnPrevious->AddAction(new QClickEvent(), new QAjaxAction('btnPrevious_Click'));
            else
                $this->btnPrevious->AddAction(new QClickEvent(), new QServerAction('btnPrevious_Click'));
            $this->btnPrevious->CausesValidation = false;
            $this->btnPrevious->TabIndex = 6;
            $this->btnPrevious->AccessKey = 'j';
        }

        // Setup btnCopyOriginal
        protected function btnCopyOriginal_Create() {
            $this->btnCopyOriginal = new QButton($this);
            $this->btnCopyOriginal->Text = t('Copy');

            if (NarroApp::$UseAjax)
                $this->btnCopyOriginal->AddAction(new QClickEvent(), new QAjaxAction('btnCopyOriginal_Click'));
            else
                $this->btnCopyOriginal->AddAction(new QClickEvent(), new QServerAction('btnCopyOriginal_Click'));

            $this->btnCopyOriginal->CausesValidation = false;
            $this->btnCopyOriginal->SetCustomStyle('float', 'right');
            $this->btnCopyOriginal->AccessKey = 'c';
        }

        // Setup btnComments
        protected function btnComments_Create() {
            $this->btnComments = new QButton($this);
            if ($this->objNarroContextInfo->Context->Text->HasComments)
                $this->btnComments->Text = t('Hide debate');
            else
                $this->btnComments->Text = t('Start a debate');

            if (NarroApp::$UseAjax)
                $this->btnComments->AddAction(new QClickEvent(), new QAjaxAction('btnComments_Click'));
            else
                $this->btnComments->AddAction(new QClickEvent(), new QServerAction('btnComments_Click'));

            $this->btnComments->CausesValidation = false;
            $this->btnComments->SetCustomStyle('float', 'right');
        }

        public function ShowPluginErrors() {
            $this->pnlPluginMessages->Text = '';
            if (NarroApp::$PluginHandler->Error) {
                foreach(NarroApp::$PluginHandler->PluginErrors as $strPluginName=>$arrErors) {
                    $this->pnlPluginMessages->Text .= $strPluginName . '<div style="padding-left:10px;border:1px dotted black;">' . join('<br />', $arrErors) . '</div><br />';
                }
                $this->pnlPluginMessages->Visible = true;
            }
            else {
                $this->pnlPluginMessages->Visible = false;
            }

            $this->pnlPluginMessages->MarkAsModified();
        }

        public function HidePluginErrors() {
            $this->pnlPluginMessages->Text = '';
            $this->pnlPluginMessages->Visible = false;
            $this->pnlPluginMessages->MarkAsModified();
        }

        protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
            if (trim($this->txtSuggestionValue->Text) == '')
                return true;

            /**
             * For SaveIgnore, pass ignore checking parameter
             */
            $blnResult = $this->SaveSuggestion($strControlId == $this->btnSaveIgnore->ControlId);

            /**
             * Update the data only if we remain on the same page (button save was clicked)
             */
            if ($blnResult && !$this->chkGoToNext->Checked && NarroApp::$UseAjax)
                $this->UpdateData();

            if ($blnResult && $this->chkGoToNext->Checked )
                $this->btnNext_Click($strFormId, $strControlId, $strParameter);

            return $blnResult;
        }

        protected function SaveSuggestion($blnIgnorePluginErrors = false) {
            if (!NarroApp::HasPermissionForThisLang('Can suggest', $this->objNarroContextInfo->Context->ProjectId))
                return false;

            $arrResult = NarroApp::$PluginHandler->SaveSuggestion($this->objNarroContextInfo->Context->Text->TextValue, $this->txtSuggestionValue->Text, $this->objNarroContextInfo->Context->Context, $this->objNarroContextInfo->Context->File, $this->objNarroContextInfo->Context->Project);
            if (is_array($arrResult) && isset($arrResult[1]))
                $strSuggestionValue = $arrResult[1];
            else
                $strSuggestionValue = $this->txtSuggestionValue->Text;

            if (!$blnIgnorePluginErrors && NarroApp::$PluginHandler->Error) {
                $this->btnSaveIgnore->Visible = true;
                $this->ShowPluginErrors();
                return false;
            }

            /**
             * Make sure that we're not putting in a empty suggestion
             */
            if ($strSuggestionValue == '')
                return false;

            $this->pnlPluginMessages->Text = '';
            $this->pnlPluginMessages->Visible = false;
            $this->btnSaveIgnore->Visible = false;

            $objSuggestion = new NarroSuggestion();
            $objSuggestion->UserId = NarroApp::GetUserId();
            $objSuggestion->LanguageId = NarroApp::GetLanguageId();
            $objSuggestion->TextId = $this->objNarroContextInfo->Context->TextId;
            $objSuggestion->Created = date('Y-m-d H:i:s');
            $objSuggestion->SuggestionValue = $strSuggestionValue;
            $objSuggestion->SuggestionValueMd5 = md5($strSuggestionValue);
            $objSuggestion->SuggestionCharCount = mb_strlen($strSuggestionValue);

            try {
                $objSuggestion->Save();
            } catch (QMySqliDatabaseException $objExc) {
                if (strpos($objExc->getMessage(), 'Duplicate entry') === false) {
                    throw $objExc;
                }
                else {
                    $this->pnlSuggestionList->dtgSuggestions_Bind();
                }
            }

            NarroApp::$PluginHandler->AddSuggestion($this->objNarroContextInfo->Context->Text->TextValue, $strSuggestionValue, $this->objNarroContextInfo->Context->Context, $this->objNarroContextInfo->Context->File, $this->objNarroContextInfo->Context->Project);

            $arrNarroText = NarroText::QueryArray(QQ::Equal(QQN::NarroText()->TextValue, $this->objNarroContextInfo->Context->Text->TextValue));
            if (count($arrNarroText)) {
                foreach($arrNarroText as $objNarroText) {
                    $arrNarroContextInfo = NarroContextInfo::QueryArray(QQ::AndCondition(QQ::Equal(QQN::NarroContextInfo()->LanguageId, NarroApp::GetLanguageId()), QQ::Equal(QQN::NarroContextInfo()->Context->TextId, $objNarroText->TextId), QQ::Equal(QQN::NarroContextInfo()->HasSuggestions, 0)));
                        if (count($arrNarroContextInfo)) {
                            foreach($arrNarroContextInfo as $objNarroContextInfo) {
                                $objNarroContextInfo->HasSuggestions = 1;
                                $objNarroContextInfo->Modified = date('Y-m-d H:i:s');
                                $objNarroContextInfo->Save();
                            }
                        }

                }
            }

            $this->objNarroContextInfo->HasSuggestions = 1;
            if (NarroApp::HasPermissionForThisLang('Can approve', $this->objNarroContextInfo->Context->ProjectId) && $this->chkApprove->Checked && $this->objNarroContextInfo->ValidSuggestionId != $objSuggestion->SuggestionId) {
                $this->objNarroContextInfo->ValidSuggestionId = $objSuggestion->SuggestionId;
                $this->objNarroContextInfo->ValidatorUserId = NarroApp::GetUserId();

                if (mb_stripos($strSuggestionValue, $this->objNarroContextInfo->TextAccessKey) === false)
                    $this->objNarroContextInfo->SuggestionAccessKey = mb_substr($strSuggestionValue, 0, 1);
                elseif (mb_strpos($strSuggestionValue, mb_strtoupper($this->objNarroContextInfo->TextAccessKey)) === false)
                    $this->objNarroContextInfo->SuggestionAccessKey = mb_strtolower($this->objNarroContextInfo->TextAccessKey);
                else
                    $this->objNarroContextInfo->SuggestionAccessKey = mb_strtoupper($this->objNarroContextInfo->TextAccessKey);

                $this->objNarroContextInfo->Modified = date('Y-m-d H:i:s');
                $this->objNarroContextInfo->Save();

                NarroApp::$PluginHandler->ApproveSuggestion($this->objNarroContextInfo->Context->Text->TextValue, $this->txtSuggestionValue->Text, $this->objNarroContextInfo->Context->Context, $this->objNarroContextInfo->Context->File, $this->objNarroContextInfo->Context->Project);
            }


            if ($this->txtSuggestionComment && trim($this->txtSuggestionComment->Text) != '' && $objSuggestion->SuggestionId) {
                $objSuggestionComment = new NarroSuggestionComment();
                $objSuggestionComment->SuggestionId = $objSuggestion->SuggestionId;
                $objSuggestionComment->CommentText = trim($this->txtSuggestionComment->Text);
                $objSuggestionComment->Created = date('Y-m-d H:i:s');
                $objSuggestionComment->Modified = date('Y-m-d H:i:s');
                $objSuggestionComment->Save();
            }

            return true;
        }

        protected function btnPrevious_Click($strFormId, $strControlId, $strParameter) {
            if (!$this->pnlPluginMessages->Visible && trim($this->txtSuggestionValue->Text != '') && $strControlId == $this->btnPrevious->ControlId && !$this->SaveSuggestion())
                return false;

            if ($this->intFileId)
                $objFilterCodition = QQ::Equal(QQN::NarroContextInfo()->Context->FileId, $this->intFileId);
            else
                $objFilterCodition = QQ::Equal(QQN::NarroContextInfo()->Context->ProjectId, $this->intProjectId);

            $objExtraCondition = QQ::AndCondition(
                                    QQ::LessThan(QQN::NarroContextInfo()->ContextId, $this->objNarroContextInfo->ContextId),
                                    QQ::Equal(QQN::NarroContextInfo()->LanguageId, NarroApp::GetLanguageId()),
                                    $objFilterCodition,
                                    QQ::Equal(QQN::NarroContextInfo()->Context->Active, 1)
            );

            if
            (
                $objContext = NarroContextInfo::GetContext(
                                                    $this->objNarroContextInfo->ContextId,
                                                    $this->strSearchText,
                                                    $this->intSearchType,
                                                    $this->intTextFilter,
                                                    QQ::OrderBy(array(QQN::NarroContextInfo()->ContextId, false)),
                                                    $objExtraCondition
                )
            )
            {
                $this->btnNext->Enabled = true;
                $this->btnNext100->Enabled = true;
                $this->intCurrentContext -= 1;
                $this->GoToContext($objContext);
            }
            else {
                $this->btnPrevious->Enabled = false;
                $this->btnPrevious100->Enabled = false;
            }
        }

        protected function btnNext_Click($strFormId, $strControlId, $strParameter) {
            if (!$this->pnlPluginMessages->Visible && trim($this->txtSuggestionValue->Text != '') && $strControlId == $this->btnNext->ControlId && !$this->SaveSuggestion())
                return false;

            if ($this->intFileId)
                $objFilterCodition = QQ::Equal(QQN::NarroContextInfo()->Context->FileId, $this->intFileId);
            else
                $objFilterCodition = QQ::Equal(QQN::NarroContextInfo()->Context->ProjectId, $this->intProjectId);

            $objExtraCondition = QQ::AndCondition(
                                    QQ::GreaterThan(QQN::NarroContextInfo()->ContextId, $this->objNarroContextInfo->ContextId),
                                    QQ::Equal(QQN::NarroContextInfo()->LanguageId, NarroApp::GetLanguageId()),
                                    $objFilterCodition,
                                    QQ::Equal(QQN::NarroContextInfo()->Context->Active, 1)
            );

            if
            (
                $objContext = NarroContextInfo::GetContext(
                                                    $this->objNarroContextInfo->ContextId,
                                                    $this->strSearchText,
                                                    $this->intSearchType,
                                                    $this->intTextFilter,
                                                    QQ::OrderBy(array(QQN::NarroContextInfo()->ContextId, true)),
                                                    $objExtraCondition
                )
            )
            {
                $this->btnPrevious->Enabled = true;
                $this->btnPrevious100->Enabled = true;
                $this->intCurrentContext += 1;
                $this->GoToContext($objContext);
            }
            else {
                $this->btnNext->Enabled = false;
                $this->btnNext100->Enabled = false;
                $this->UpdateData();
                $this->UpdateNavigator();
                NarroApp::ExecuteJavaScript(sprintf('location.hash=\'#c%di%d\'', $this->objNarroContextInfo->ContextId, $this->intCurrentContext));
            }

        }

        protected function btnNext100_Click($strFormId, $strControlId, $strParameter) {
            if (!$this->pnlPluginMessages->Visible && trim($this->txtSuggestionValue->Text != '') && $strControlId == $this->btnNext100->ControlId && !$this->SaveSuggestion())
                return false;

            if ($this->intFileId)
                $objFilterCodition = QQ::Equal(QQN::NarroContextInfo()->Context->FileId, $this->intFileId);
            else
                $objFilterCodition = QQ::Equal(QQN::NarroContextInfo()->Context->ProjectId, $this->intProjectId);

            $objExtraCondition = QQ::AndCondition(
                                    QQ::GreaterThan(QQN::NarroContextInfo()->ContextId, $this->objNarroContextInfo->ContextId  + 100),
                                    QQ::Equal(QQN::NarroContextInfo()->LanguageId, NarroApp::GetLanguageId()),
                                    $objFilterCodition,
                                    QQ::Equal(QQN::NarroContextInfo()->Context->Active, 1)
            );

            if
            (
                $objContext = NarroContextInfo::GetContext(
                                                    $this->objNarroContextInfo->ContextId,
                                                    $this->strSearchText,
                                                    $this->intSearchType,
                                                    $this->intTextFilter,
                                                    QQ::OrderBy(array(QQN::NarroContextInfo()->ContextId, true)),
                                                    $objExtraCondition
                )
            )
            {
                $this->btnPrevious->Enabled = true;
                $this->btnPrevious100->Enabled = true;
                $this->intCurrentContext += 100;
                $this->GoToContext($objContext);

            }
            else {
                $this->btnNext100->Enabled = false;
            }

        }

        protected function btnPrevious100_Click($strFormId, $strControlId, $strParameter) {
            if (!$this->pnlPluginMessages->Visible && trim($this->txtSuggestionValue->Text != '') && $strControlId == $this->btnPrevious100->ControlId && !$this->SaveSuggestion())
                return false;

            if ($this->intFileId)
                $objFilterCodition = QQ::Equal(QQN::NarroContextInfo()->Context->FileId, $this->intFileId);
            else
                $objFilterCodition = QQ::Equal(QQN::NarroContextInfo()->Context->ProjectId, $this->intProjectId);

            $objExtraCondition = QQ::AndCondition(
                                    QQ::LessThan(QQN::NarroContextInfo()->ContextId, $this->objNarroContextInfo->ContextId - 100),
                                    QQ::Equal(QQN::NarroContextInfo()->LanguageId, NarroApp::GetLanguageId()),
                                    $objFilterCodition,
                                    QQ::Equal(QQN::NarroContextInfo()->Context->Active, 1)
            );

            if
            (
                $objContext = NarroContextInfo::GetContext(
                                                    $this->objNarroContextInfo->ContextId,
                                                    $this->strSearchText,
                                                    $this->intSearchType,
                                                    $this->intTextFilter,
                                                    QQ::OrderBy(array(QQN::NarroContextInfo()->ContextId, false)),
                                                    $objExtraCondition
                )
            )
            {
                $this->btnNext->Enabled = true;
                $this->btnNext100->Enabled = true;
                $this->intCurrentContext -= 100;
                $this->GoToContext($objContext);
            }
            else {
                $this->btnPrevious100->Enabled = false;
            }

        }

        protected function GoToContext($objContext) {
            if (NarroApp::$UseAjax) {
                $this->objNarroContextInfo = $objContext;
                $this->UpdateData();
                $this->UpdateNavigator();
                NarroApp::ExecuteJavaScript(sprintf('location.hash=\'#c%di%d\'', $this->objNarroContextInfo->ContextId, $this->intCurrentContext));
                return true;
            }
            else {
                NarroApp::Redirect(NarroLink::ContextSuggest($this->intProjectId, $this->intFileId, $objContext->ContextId, $this->intTextFilter, $this->intSearchType, $this->strSearchText));
            }
        }

        public function btnApprove_Click($strFormId, $strControlId, $strParameter) {
            if (!NarroApp::HasPermissionForThisLang('Can approve', $this->objNarroContextInfo->Context->ProjectId))
              return false;

            if ($strParameter != $this->objNarroContextInfo->ValidSuggestionId) {
                $this->objNarroContextInfo->ValidSuggestionId = (int) $strParameter;
                $this->objNarroContextInfo->ValidatorUserId = NarroApp::GetUserId();
                NarroApp::$PluginHandler->ApproveSuggestion($this->objNarroContextInfo->Context->Text->TextValue, $this->txtSuggestionValue->Text, $this->objNarroContextInfo->Context->Context, $this->objNarroContextInfo->Context->File, $this->objNarroContextInfo->Context->Project);
            }
            else {
                $this->objNarroContextInfo->ValidSuggestionId = null;
                NarroApp::$PluginHandler->DisapproveSuggestion($this->objNarroContextInfo->Context->Text->TextValue, $this->txtSuggestionValue->Text, $this->objNarroContextInfo->Context->Context, $this->objNarroContextInfo->Context->File, $this->objNarroContextInfo->Context->Project);
            }

            $objSuggestion = NarroSuggestion::Load($strParameter);
            $strSuggestionValue = $objSuggestion->SuggestionValue;

            if (mb_stripos($strSuggestionValue, $this->objNarroContextInfo->TextAccessKey) === false)
                $this->objNarroContextInfo->SuggestionAccessKey = mb_substr($strSuggestionValue, 0, 1);
            elseif (mb_strpos($strSuggestionValue, mb_strtoupper($this->objNarroContextInfo->TextAccessKey)) === false)
                $this->objNarroContextInfo->SuggestionAccessKey = mb_strtolower($this->objNarroContextInfo->TextAccessKey);
            else
                $this->objNarroContextInfo->SuggestionAccessKey = mb_strtoupper($this->objNarroContextInfo->TextAccessKey);

            $this->objNarroContextInfo->Modified = date('Y-m-d H:i:s');
            $this->objNarroContextInfo->Save();

            $this->pnlSuggestionList->NarroContextInfo =  $this->objNarroContextInfo;
            $this->pnlSuggestionList->MarkAsModified();

            if ($this->chkGoToNext->Checked )
                $this->btnNext_Click($strFormId, $strControlId, $strParameter);

        }

        public function btnCopyOriginal_Click($strFormId, $strControlId, $strParameter) {
            $this->txtSuggestionValue->Text = $this->objNarroContextInfo->Context->Text->TextValue;
            $this->txtSuggestionValue->Focus();
        }

        public function btnComments_Click($strFormId, $strControlId, $strParameter) {
            if ($this->pnlComments->Display) {
                if ($this->objNarroContextInfo->Context->Text->HasComments)
                    $this->btnComments->Text = t('Show debate');
                else
                    $this->btnComments->Text = t('Start a debate');
                $this->pnlComments->Display = false;
            }
            else {
                $this->btnComments->Text = t('Hide debate');
                $this->pnlComments->Display = true;
            }
        }

        public function btnSaveAccessKey_Click($strFormId, $strControlId, $strParameter) {
            if (!NarroApp::HasPermissionForThisLang('Can approve', $this->objNarroContextInfo->Context->ProjectId))
              return false;

            $this->objNarroContextInfo->SuggestionAccessKey = $this->GetControl($strParameter)->Text;
            $this->objNarroContextInfo->Modified = date('Y-m-d H:i:s');
            $this->objNarroContextInfo->Save();

            $this->pnlSuggestionList->NarroContextInfo =  $this->objNarroContextInfo;
            $this->pnlSuggestionList->MarkAsModified();

        }

        protected function getSortOrderClause() {
            switch(NarroApp::QueryString('o')) {
                case 0:
                    return QQ::OrderBy(QQN::NarroContextInfo()->Context->Text->TextCharCount, NarroApp::QueryString('a'));
                case 1:
                    return QQ::OrderBy(QQN::NarroContextInfo()->Context->Text->TextValue, NarroApp::QueryString('a'));
                default:
                    return QQ::OrderBy(QQN::NarroContextInfo()->ContextId, true);
            }
        }

    }

    switch(NarroApp::$User->getPreferenceValueByName('Theme')) {
        case 'KBabel' :
            NarroContextSuggestForm::Run('NarroContextSuggestForm', 'templates/narro_context_suggest_kbabel.tpl.php');
            break;
        default :
            NarroContextSuggestForm::Run('NarroContextSuggestForm', 'templates/narro_context_suggest.tpl.php');
    }

?>
