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

    class NarroProjectTranslateTextListForm extends QForm {
        protected $dtgNarroContextInfo;
        protected $objNarroProject;

        // DataGrid Columns
        protected $colContext;
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
        const SHOW_APPROVED_TEXTS = 3;
        const SHOW_TEXTS_THAT_REQUIRE_APPROVAL = 4;

        const SEARCH_TEXTS = 1;
        const SEARCH_SUGGESTIONS = 2;
        const SEARCH_CONTEXTS = 3;

        protected function Form_Create() {
            parent::Form_Create();

            $intProjectId = NarroApp::QueryString('p');
            if (($intProjectId)) {
                $this->objNarroProject = NarroProject::Load(($intProjectId));

                if (!$this->objNarroProject)
                    NarroApp::Redirect(NarroLink::ProjectList());

            } else
                NarroApp::Redirect(NarroLink::ProjectList());

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

            // Setup DataGrid
            $this->dtgNarroContextInfo = new QDataRepeater($this);

            // Datagrid Paginator
            $this->dtgNarroContextInfo->Paginator = new QPaginator($this->dtgNarroContextInfo);
            $this->dtgNarroContextInfo->ItemsPerPage = NarroApp::$User->getPreferenceValueByName('Items per page');

            $this->dtgNarroContextInfo->PaginatorAlternate = new QPaginator($this->dtgNarroContextInfo);

            // Specify Whether or Not to Refresh using Ajax
            $this->dtgNarroContextInfo->UseAjax = true;

            // Specify the local databind method this datagrid will use
            $this->dtgNarroContextInfo->SetDataBinder('dtgNarroContextInfo_Bind');

            $this->dtgNarroContextInfo->Template = 'templates/narro_project_translate_text_list_row.tpl.php';

        }

        protected function dtgNarroContextInfo_Bind() {
            // Because we want to enable pagination AND sorting, we need to setup the $objClauses array to send to LoadAll()

            $objCommonCondition = QQ::AndCondition(
                QQ::Equal(QQN::NarroContextInfo()->Context->ProjectId, $this->objNarroProject->ProjectId),
                QQ::Equal(QQN::NarroContextInfo()->LanguageId, NarroApp::GetLanguageId()),
                QQ::Equal(QQN::NarroContextInfo()->Context->Active, 1)
            );

            // Remember!  We need to first set the TotalItemCount, which will affect the calcuation of LimitClause below
            switch($this->lstSearchType->SelectedValue) {
                case NarroTextListForm::SEARCH_TEXTS:
                    $this->dtgNarroContextInfo->TotalItemCount = NarroContextInfo::CountByTextValue(
                        $this->txtSearch->Text,
                        $this->lstTextFilter->SelectedValue,
                        $objCommonCondition
                    );
                    break;
                case NarroTextListForm::SEARCH_SUGGESTIONS:
                    $this->dtgNarroContextInfo->TotalItemCount = NarroContextInfo::CountBySuggestionValue(
                        $this->txtSearch->Text,
                        $this->lstTextFilter->SelectedValue,
                        $objCommonCondition
                    );
                    break;
                case NarroTextListForm::SEARCH_CONTEXTS:
                    $this->dtgNarroContextInfo->TotalItemCount = NarroContextInfo::CountByContext(
                        $this->txtSearch->Text,
                        $this->lstTextFilter->SelectedValue,
                        $objCommonCondition
                    );
                    break;
            }

            // Set the DataSource to be the array of all NarroContextInfo objects, given the clauses above
            switch($this->lstSearchType->SelectedValue) {
                case NarroTextListForm::SEARCH_TEXTS:
                    $this->dtgNarroContextInfo->DataSource = NarroContextInfo::LoadArrayByTextValue(
                        $this->txtSearch->Text,
                        $this->lstTextFilter->SelectedValue,
                        $this->dtgNarroContextInfo->LimitClause,
                        null,
                        $objCommonCondition
                    );

                    break;
                case NarroTextListForm::SEARCH_SUGGESTIONS:
                    $this->dtgNarroContextInfo->DataSource = NarroContextInfo::LoadArrayBySuggestionValue(
                        $this->txtSearch->Text,
                        $this->lstTextFilter->SelectedValue,
                        $this->dtgNarroContextInfo->LimitClause,
                        $objCommonCondition
                    );
                    break;

                case NarroTextListForm::SEARCH_CONTEXTS:
                    $this->dtgNarroContextInfo->DataSource = NarroContextInfo::LoadArrayByContext(
                        $this->txtSearch->Text,
                        $this->lstTextFilter->SelectedValue,
                        $this->dtgNarroContextInfo->LimitClause,
                        $objCommonCondition
                    );
                    break;
            }

            NarroApp::ExecuteJavaScript('highlight_datagrid();');
        }

    }

    NarroProjectTranslateTextListForm::Run('NarroProjectTranslateTextListForm', 'templates/narro_project_translate_text_list.tpl.php');
?>
