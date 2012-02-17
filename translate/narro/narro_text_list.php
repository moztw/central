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

    class NarroTextListForm extends QForm {
        protected $dtgNarroContextInfo;
        protected $objNarroProject;

        // DataGrid Columns
        protected $colContext;
        protected $colOriginalTextLength;
        protected $colOriginalText;
        protected $colTranslatedText;
        protected $colActions;


        protected $lstTextFilter;
        protected $txtSearch;
        protected $lstSearchType;
        protected $btnSearch;
        protected $btnMultiApprove;
        protected $btnMultiApproveBottom;

        protected $arrSuggestionList;

        protected $lblMessage;

        const SHOW_ALL_TEXTS = 1;
        const SHOW_UNTRANSLATED_TEXTS = 2;
        const SHOW_APPROVED_TEXTS = 3;
        const SHOW_TEXTS_THAT_REQUIRE_APPROVAL = 4;

        const SEARCH_TEXTS = 1;
        const SEARCH_SUGGESTIONS = 2;
        const SEARCH_CONTEXTS = 3;

        protected function Form_Create() {
            parent::Form_Create();

            $this->SetupNarroObject();

            // Setup DataGrid Columns
            $this->colContext = new QDataGridColumn(
                t('Context'),
                '<?= $_FORM->dtgNarroContextInfo_Context_Render($_ITEM); ?>',
                array(
                    'OrderByClause' => QQ::OrderBy(QQN::NarroContextInfo()->Context->Context),
                    'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroContextInfo()->Context->Context, false)
                )
            );
            $this->colContext->BackColor = 'lightgreen';
            $this->colOriginalText = new QDataGridColumn(
                t('Original text'),
                '<?= $_FORM->dtgNarroContextInfo_OriginalText_Render($_ITEM); ?>',
                array(
                    'OrderByClause' => QQ::OrderBy(QQN::NarroContextInfo()->Context->Text->TextValue),
                    'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroContextInfo()->Context->Text->TextValue, false)
                )
            );
            $this->colOriginalText->HtmlEntities = false;

            $this->colTranslatedText = new QDataGridColumn(
                t('Translated text'),
                '<?= $_FORM->dtgNarroContextInfo_TranslatedText_Render($_ITEM); ?>'
            );
            $this->colTranslatedText->HtmlEntities = false;
            $this->colTranslatedText->CssClass = NarroApp::$Language->TextDirection;
            $this->colActions = new QDataGridColumn(
                t('Actions'),
                '<?= $_FORM->dtgNarroContextInfo_Actions_Render($_ITEM, $_CONTROL->CurrentRowIndex + 1); ?>'
            );
            $this->colActions->HtmlEntities = false;

            // Setup DataGrid
            $this->dtgNarroContextInfo = new QDataGrid($this);

            // Datagrid Paginator
            $this->dtgNarroContextInfo->Paginator = new QPaginator($this->dtgNarroContextInfo);
            $this->dtgNarroContextInfo->ItemsPerPage = NarroApp::$User->getPreferenceValueByName('Items per page');

            $this->dtgNarroContextInfo->PaginatorAlternate = new QPaginator($this->dtgNarroContextInfo);

            // Specify Whether or Not to Refresh using Ajax
            $this->dtgNarroContextInfo->UseAjax = true;

            // Specify the local databind method this datagrid will use
            $this->dtgNarroContextInfo->SetDataBinder('dtgNarroContextInfo_Bind');

            if (NarroApp::QueryString('st') == 3)
                $this->dtgNarroContextInfo->AddColumn($this->colContext);
            $this->dtgNarroContextInfo->AddColumn($this->colOriginalText);
            $this->dtgNarroContextInfo->AddColumn($this->colTranslatedText);
            $this->dtgNarroContextInfo->AddColumn($this->colActions);

            $this->lstTextFilter = new QListBox($this);
            $this->lstTextFilter->AddItem(t('All texts'), self::SHOW_ALL_TEXTS, true);
            $this->lstTextFilter->AddItem(t('Untranslated texts'), self::SHOW_UNTRANSLATED_TEXTS);
            $this->lstTextFilter->AddItem(t('Approved texts'), self::SHOW_APPROVED_TEXTS);
            $this->lstTextFilter->AddItem(t('Texts that require approval'), self::SHOW_TEXTS_THAT_REQUIRE_APPROVAL);
            if (NarroApp::QueryString('tf') > 0)
                $this->lstTextFilter->SelectedValue = NarroApp::QueryString('tf');
            $this->lstTextFilter->AddAction(new QChangeEvent(), new QServerAction('lstTextFilter_Change'));

            $this->txtSearch = new QTextBox($this);
            $this->txtSearch->Text = NarroApp::QueryString('s');

            $this->lstSearchType = new QListBox($this);
            $this->lstSearchType->AddItem(t('original texts'), self::SEARCH_TEXTS, true);
            $this->lstSearchType->AddItem(t('translations'), self::SEARCH_SUGGESTIONS);
            $this->lstSearchType->AddItem(t('contexts'), self::SEARCH_CONTEXTS);
            $this->lstSearchType->AddAction(new QClickEvent(), new QJavaScriptAction(sprintf('qc.getControl(\'%s\').className=((this.selectedIndex == 1)?\'%s\':\'ltr\');', $this->txtSearch->ControlId, NarroApp::$Language->TextDirection)));
            if (NarroApp::QueryString('st') > 0)
                $this->lstSearchType->SelectedValue = NarroApp::QueryString('st');

            $this->btnSearch = new QButton($this);
            $this->btnSearch->Text = t('Search');
            $this->btnSearch->AddAction(new QClickEvent(), new QServerAction('btnSearch_Click'));
            $this->btnSearch->PrimaryButton = true;

            $this->lblMessage = new QLabel($this);
            $this->lblMessage->Visible = false;
            //$this->lblMessage->FontBold = true;
            $this->lblMessage->FontItalic = true;
            $this->lblMessage->Padding = 3;
            $this->lblMessage->ForeColor = 'white';
            $this->lblMessage->DisplayStyle = QDisplayStyle::Block;

            $this->btnMultiApprove = new QButton($this);
            $this->btnMultiApprove->Text = t('Mass approve');
            $this->btnMultiApprove->Display = NarroApp::HasPermissionForThisLang('Can mass approve', $this->objNarroProject->ProjectId);
            $this->btnMultiApprove->AddAction(new QClickEvent(), new QServerAction('btnMultiApprove_Click'));

            $this->btnMultiApproveBottom = new QButton($this);
            $this->btnMultiApproveBottom->Text = t('Mass approve');
            $this->btnMultiApproveBottom->Display = NarroApp::HasPermissionForThisLang('Can mass approve', $this->objNarroProject->ProjectId);
            $this->btnMultiApproveBottom->AddAction(new QClickEvent(), new QServerAction('btnMultiApprove_Click'));
        }

        protected function btnMultiApprove_Click($strFormId, $strControlId, $strParameter) {
            if (!NarroApp::HasPermissionForThisLang('Can mass approve', $this->objNarroProject->ProjectId))
              return false;

            if ($this->btnMultiApprove->Text == t('Mass approve')) {
                $this->btnMultiApprove->Text = t('Approve all selected suggestions');
                $this->btnMultiApproveBottom->Text = t('Approve all selected suggestions');
                $this->SetMessage(t('Mass approve mode is the quick way to approve short translations. Leave empty to disapprove.'));
                if (NarroApp::QueryString('st') != 3)
                    $this->dtgNarroContextInfo->AddColumnAt(0, $this->colContext);
                $this->dtgNarroContextInfo->RemoveColumnByName(t('Actions'));
                $this->dtgNarroContextInfo->MarkAsModified();

            }
            else {
                $this->btnMultiApprove->Text = t('Mass approve');
                $this->btnMultiApproveBottom->Text = t('Mass approve');
                /**
                 * Approve changes
                 */
                if (is_array($this->arrSuggestionList)) {
                    $intProcessed = 0;
                    $intModified = 0;
                    foreach($this->arrSuggestionList as $intContextInfoId=>$objSuggestionList) {
                        $intProcessed++;
                        $objContextInfo = NarroContextInfo::Load($intContextInfoId);
                        if ($objContextInfo->ValidSuggestionId != $objSuggestionList->SelectedValue) {
                            if ($objSuggestionList->SelectedValue) {
                                $objContextInfo->ValidSuggestionId = $objSuggestionList->SelectedValue;
                                NarroApp::$PluginHandler->ApproveSuggestion($objContextInfo->Context->Text->TextValue, $objSuggestionList->SelectedName, $objContextInfo->Context->Context, $objContextInfo->Context->File, $objContextInfo->Context->Project);
                            }
                            else {
                                $objContextInfo->ValidSuggestionId = null;
                                NarroApp::$PluginHandler->DisapproveSuggestion($objContextInfo->Context->Text->TextValue, $objSuggestionList->SelectedName, $objContextInfo->Context->Context, $objContextInfo->Context->File, $objContextInfo->Context->Project);
                            }

                            $objContextInfo->ValidatorUserId = NarroApp::GetUserId();
                            try {
                                $objContextInfo->Save();
                            }
                            catch (Exception $objEx) {
                                $this->SetMessage(
                                sprintf(t('Saved %d changes.'), $intModified) . ' ' .
                                sprintf(t('An error ocurred: %s'), $objEx->GetMessage()) . ' ' .
                                sprintf(t('Aborting.'))
                                );
                                return false;
                            }
                            $intModified++;
                        }
                    }

                    if ($intModified > 0)
                        $this->SetMessage(sprintf(t('Saved %d changes.'), $intModified));
                    else
                        $this->SetMessage(t('No changes.'));
                }

                if (NarroApp::QueryString('st') != 3)
                    $this->dtgNarroContextInfo->RemoveColumnByName(t('Context'));

                $this->dtgNarroContextInfo->AddColumn($this->colActions);
                $this->dtgNarroContextInfo->MarkAsModified();
            }

        }

        protected function SetMessage($strText) {
            $this->lblMessage->BackColor = 'green';
            $this->lblMessage->Text = $strText;
            $this->lblMessage->Visible = true;
        }

        protected function SetErrorMessage($strText) {
            $this->lblMessage->BackColor = 'red';
            $this->lblMessage->Text = $strText;
            $this->lblMessage->Visible = true;
        }

        protected function ClearMessage() {
            $this->lblMessage->Visible = false;
        }

        public function dtgNarroContextInfo_OriginalText_Render(NarroContextInfo $objNarroContextInfo) {
            if (!is_null($objNarroContextInfo->Context->Text)) {
                $strText = NarroApp::$PluginHandler->DisplayText($objNarroContextInfo->Context->Text->TextValue);

                if (!$strText)
                    $strText = $objNarroContextInfo->Context->Text->TextValue;
                $strText = (strlen($strText)>100)?substr($strText, 0, 100) . '...':$strText;

                $strText = htmlentities($strText, null, 'utf-8');

                if ($objNarroContextInfo->TextAccessKey && $objNarroContextInfo->ValidSuggestionId && NarroApp::HasPermissionForThisLang('Can approve', $objNarroContextInfo->Context->ProjectId))
                    $strText = preg_replace('/' . $objNarroContextInfo->TextAccessKey . '/', '<u>' . $objNarroContextInfo->TextAccessKey . '</u>', $strText, 1);

                return $strText;
            }
            else
                return null;
        }

        public function dtgNarroContextInfo_Context_Render(NarroContextInfo $objNarroContextInfo) {
            if (!is_null($objNarroContextInfo->Context->Context)) {
                $strContext = NarroApp::$PluginHandler->DisplayContext($objNarroContextInfo->Context->Context);
                if (!$strContext)
                    $strContext = $objNarroContextInfo->Context->Context;
                return (strlen($strContext)>100)?substr($strContext, 0, 100) . '...':$strContext;
            }
            else
                return '<div width="100%" style="background:gray">&nbsp;</div>';
        }

        public function dtgNarroContextInfo_EditTranslatedText_Render(NarroContextInfo $objNarroContextInfo) {
            $this->arrSuggestionList[$objNarroContextInfo->ContextInfoId] = new QListBox($this->dtgNarroContextInfo);
            $this->arrSuggestionList[$objNarroContextInfo->ContextInfoId]->AddItem('', '');
            foreach(NarroSuggestion::LoadArrayByTextIdForCurrentLanguage($objNarroContextInfo->Context->TextId) as $objSuggestion) {
                $this->arrSuggestionList[$objNarroContextInfo->ContextInfoId]->AddItem($objSuggestion->SuggestionValue, $objSuggestion->SuggestionId, ($objNarroContextInfo->ValidSuggestionId == $objSuggestion->SuggestionId));
            }

            return $this->arrSuggestionList[$objNarroContextInfo->ContextInfoId]->Render(false);
        }


        public function dtgNarroContextInfo_TranslatedText_Render(NarroContextInfo $objNarroContextInfo) {
            if ($this->btnMultiApprove->Text != t('Mass approve') && $objNarroContextInfo->HasSuggestions && !$objNarroContextInfo->TextAccessKey && $objNarroContextInfo->Context->Text->TextCharCount < 100) {
                return $this->dtgNarroContextInfo_EditTranslatedText_Render($objNarroContextInfo);
            }
            /**
            * if there is a valid suggestion, show it
            * if not and a user has made a suggestion, show it in green
            * if not, show the most voted suggestion
            */
            if (!is_null($objNarroContextInfo->ValidSuggestion)) {
                $strSuggestionValue = NarroApp::$PluginHandler->DisplaySuggestion($objNarroContextInfo->ValidSuggestion->SuggestionValue);
                if (!$strSuggestionValue)
                    $strSuggestionValue = $objNarroContextInfo->ValidSuggestion->SuggestionValue;


                $strSuggestionValue = (strlen($strSuggestionValue)>100)?mb_substr($strSuggestionValue, 0, 100) . '...':$strSuggestionValue;

                $strSuggestionValue = NarroString::HtmlEntities($strSuggestionValue);

                if ($objNarroContextInfo->TextAccessKey && $objNarroContextInfo->SuggestionAccessKey)
                    $strSuggestionValue = NarroString::Replace($objNarroContextInfo->SuggestionAccessKey, '<u>' . $objNarroContextInfo->SuggestionAccessKey . '</u>', $strSuggestionValue, 1);

                return $strSuggestionValue;
            }
            elseif (
                $objSuggestion =
                         NarroSuggestion::QuerySingle(
                             QQ::AndCondition(
                                 QQ::Equal(QQN::NarroSuggestion()->TextId, $objNarroContextInfo->Context->TextId),
                                 QQ::Equal(QQN::NarroSuggestion()->LanguageId, NarroApp::GetLanguageId()),
                                 QQ::Equal(QQN::NarroSuggestion()->UserId, NarroApp::GetUserId())
                             )
                         )
                   ) {
                $strSuggestionValue = NarroApp::$PluginHandler->DisplaySuggestion($objSuggestion->SuggestionValue);
                if (!$strSuggestionValue)
                    $strSuggestionValue = $objSuggestion->SuggestionValue;

                $strSuggestionValue = (strlen($strSuggestionValue)>100)?mb_substr($strSuggestionValue, 0, 100) . '...':$strSuggestionValue;

                return '<div style="color:green">' . NarroString::HtmlEntities($strSuggestionValue) . '</div>';
            }
            elseif (
                $arrSuggestions =
                        NarroSuggestion::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::NarroSuggestion()->TextId, $objNarroContextInfo->Context->TextId),
                                QQ::Equal(QQN::NarroSuggestion()->LanguageId, NarroApp::GetLanguageId())
                            )
                        )
                   ) {
                $intVoteCnt = 0;
                $strSuggestionValue = $arrSuggestions[0]->SuggestionValue;
                foreach($arrSuggestions as $objSuggestion) {
                    $intSuggVotCnt = NarroSuggestionVote::QueryCount(QQ::AndCondition(QQ::Equal(QQN::NarroSuggestionVote()->ContextId, $objNarroContextInfo->ContextId), QQ::Equal(QQN::NarroSuggestionVote()->SuggestionId, $objSuggestion->SuggestionId)));
                    if ($intSuggVotCnt > $intVoteCnt) {
                        $intVoteCnt = $intSuggVotCnt;
                        $strSuggestionValue = $objSuggestion->SuggestionValue;
                    }
                }

                $strSuggestionValue = NarroApp::$PluginHandler->DisplaySuggestion($objSuggestion->SuggestionValue);
                if (!$strSuggestionValue)
                    $strSuggestionValue = $objSuggestion->SuggestionValue;

                $strSuggestionValue = (strlen($strSuggestionValue)>100)?mb_substr($strSuggestionValue, 0, 100) . '...':$strSuggestionValue;
                return '<div style="color:blue">' . NarroString::HtmlEntities($strSuggestionValue) . '</div>';
            }
            else {
                return '<div width="100%" style="background:gray">&nbsp;</div>';
            }
        }

    }


?>
