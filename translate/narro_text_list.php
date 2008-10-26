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

        protected $lblMessage;

        const SHOW_ALL_TEXTS = 1;
        const SHOW_UNTRANSLATED_TEXTS = 2;
        const SHOW_VALIDATED_TEXTS = 3;
        const SHOW_TEXTS_THAT_REQUIRE_VALIDATION = 4;

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
            $this->colTranslatedText->CssClass = QApplication::$Language->TextDirection;
            $this->colActions = new QDataGridColumn(
                t('Actions'),
                '<?= $_FORM->dtgNarroContextInfo_Actions_Render($_ITEM, $_CONTROL->CurrentRowIndex + 1); ?>'
            );
            $this->colActions->HtmlEntities = false;

            // Setup DataGrid
            $this->dtgNarroContextInfo = new QDataGrid($this);

            // Datagrid Paginator
            $this->dtgNarroContextInfo->Paginator = new QPaginator($this->dtgNarroContextInfo);
            $this->dtgNarroContextInfo->ItemsPerPage = QApplication::$objUser->getPreferenceValueByName('Items per page');

            $this->dtgNarroContextInfo->PaginatorAlternate = new QPaginator($this->dtgNarroContextInfo);

            // Specify Whether or Not to Refresh using Ajax
            $this->dtgNarroContextInfo->UseAjax = true;

            // Specify the local databind method this datagrid will use
            $this->dtgNarroContextInfo->SetDataBinder('dtgNarroContextInfo_Bind');

            if (QApplication::QueryString('st') == 3)
                $this->dtgNarroContextInfo->AddColumn($this->colContext);
            $this->dtgNarroContextInfo->AddColumn($this->colOriginalText);
            $this->dtgNarroContextInfo->AddColumn($this->colTranslatedText);
            $this->dtgNarroContextInfo->AddColumn($this->colActions);

            $this->lstTextFilter = new QListBox($this);
            $this->lstTextFilter->AddItem(t('All texts'), self::SHOW_ALL_TEXTS, true);
            $this->lstTextFilter->AddItem(t('Untranslated texts'), self::SHOW_UNTRANSLATED_TEXTS);
            $this->lstTextFilter->AddItem(t('Validated texts'), self::SHOW_VALIDATED_TEXTS);
            $this->lstTextFilter->AddItem(t('Texts that require validation'), self::SHOW_TEXTS_THAT_REQUIRE_VALIDATION);
            if (QApplication::QueryString('tf') > 0)
                $this->lstTextFilter->SelectedValue = QApplication::QueryString('tf');
            $this->lstTextFilter->AddAction(new QChangeEvent(), new QServerAction('lstTextFilter_Change'));

            $this->txtSearch = new QTextBox($this);
            $this->txtSearch->Text = QApplication::QueryString('s');

            $this->lstSearchType = new QListBox($this);
            $this->lstSearchType->AddItem(t('original texts'), self::SEARCH_TEXTS, true);
            $this->lstSearchType->AddItem(t('translations'), self::SEARCH_SUGGESTIONS);
            $this->lstSearchType->AddItem(t('contexts'), self::SEARCH_CONTEXTS);
            $this->lstSearchType->AddAction(new QClickEvent(), new QJavaScriptAction(sprintf('qc.getControl(\'%s\').className=((this.selectedIndex == 1)?\'%s\':\'ltr\');', $this->txtSearch->ControlId, QApplication::$Language->TextDirection)));
            if (QApplication::QueryString('st') > 0)
                $this->lstSearchType->SelectedValue = QApplication::QueryString('st');

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
                $strText = QApplication::$objPluginHandler->DisplayText($objNarroContextInfo->Context->Text->TextValue);

                if (!$strText)
                    $strText = $objNarroContextInfo->Context->Text->TextValue;
                $strText = (strlen($strText)>100)?substr($strText, 0, 100) . '...':$strText;

                $strText = htmlentities($strText, null, 'utf-8');

                if ($objNarroContextInfo->TextAccessKey && $objNarroContextInfo->ValidSuggestionId && QApplication::$objUser->hasPermission('Can validate', $objNarroContextInfo->Context->ProjectId, QApplication::$Language->LanguageId))
                    $strText = preg_replace('/' . $objNarroContextInfo->TextAccessKey . '/', '<u>' . $objNarroContextInfo->TextAccessKey . '</u>', $strText, 1);

                return $strText;
            }
            else
                return null;
        }

        public function dtgNarroContextInfo_Context_Render(NarroContextInfo $objNarroContextInfo) {
            if (!is_null($objNarroContextInfo->Context->Context)) {
                $strContext = QApplication::$objPluginHandler->DisplayContext($objNarroContextInfo->Context->Context);
                if (!$strContext)
                    $strContext = $objNarroContextInfo->Context->Context;
                return (strlen($strContext)>100)?substr($strContext, 0, 100) . '...':$strContext;
            }
            else
                return '<div width="100%" style="background:gray">&nbsp;</div>';
        }

        public function dtgNarroContextInfo_TranslatedText_Render(NarroContextInfo $objNarroContextInfo) {
            /**
            * if there is a valid suggestion, show it
            * if not and a user has made a suggestion, show it in green
            * if not, show the most voted suggestion
            */
            if (!is_null($objNarroContextInfo->ValidSuggestion)) {
                $strSuggestionValue = QApplication::$objPluginHandler->DisplaySuggestion($objNarroContextInfo->ValidSuggestion->SuggestionValue);
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
                                 QQ::Equal(QQN::NarroSuggestion()->LanguageId, QApplication::$Language->LanguageId),
                                 QQ::Equal(QQN::NarroSuggestion()->UserId, QApplication::$objUser->UserId)
                             )
                         )
                   ) {
                $strSuggestionValue = QApplication::$objPluginHandler->DisplaySuggestion($objSuggestion->SuggestionValue);
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
                                QQ::Equal(QQN::NarroSuggestion()->LanguageId, QApplication::$Language->LanguageId)
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

                $strSuggestionValue = QApplication::$objPluginHandler->DisplaySuggestion($objSuggestion->SuggestionValue);
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
