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

    class NarroProjectTextListForm extends NarroTextListForm {

        protected function Form_Create() {
            parent::Form_Create();

            switch($this->lstSearchType->SelectedValue) {
                case NarroTextListForm::SEARCH_SUGGESTIONS:
                    $this->SetMessage(t('Note that, since you\'re searching suggestions, you won\'t see the texts without suggestions.'));
                    break;
            }

        }


        protected function SetupNarroObject() {
            // Lookup Object PK information from Query String (if applicable)
            $intProjectId = NarroApp::QueryString('p');
            if (($intProjectId)) {
                $this->objNarroProject = NarroProject::Load(($intProjectId));

                if (!$this->objNarroProject)
                    NarroApp::Redirect(NarroLink::ProjectList());

            } else
                NarroApp::Redirect(NarroLink::ProjectList());

            $this->pnlBreadcrumb->strSeparator = ' | ';

            $this->pnlBreadcrumb->setElements(
                NarroLink::ProjectTextList($this->objNarroProject->ProjectId, 1, 1, '', $this->objNarroProject->ProjectName),
                NarroLink::ProjectFileList($this->objNarroProject->ProjectId, null, t('Files'))
            );

            if (NarroApp::HasPermissionForThisLang('Can manage project', $this->objNarroProject->ProjectId) && NarroApp::HasPermissionForThisLang('Can vote', $this->objNarroProject->ProjectId) )
                $this->pnlBreadcrumb->addElement(NarroLink::ProjectManage($intProjectId, t('Manage')));

            if (NarroApp::HasPermissionForThisLang('Can edit project', $this->objNarroProject->ProjectId) && NarroApp::HasPermissionForThisLang('Can vote', $this->objNarroProject->ProjectId) )
                $this->pnlBreadcrumb->addElement(NarroLink::ProjectEdit($intProjectId, t('Edit')));

            $this->pnlBreadcrumb->addElement(NarroLink::ProjectLanguages($intProjectId, t('Languages')));
        }

        public function dtgNarroContextInfo_Actions_Render(NarroContextInfo $objNarroContextInfo, $intRowIndex) {
            if (NarroApp::HasPermissionForThisLang('Can suggest', $this->objNarroProject->ProjectId) && NarroApp::HasPermissionForThisLang('Can vote', $this->objNarroProject->ProjectId) )
                $strText = t('Suggest/Vote');
            elseif (NarroApp::HasPermissionForThisLang('Can suggest', $this->objNarroProject->ProjectId))
                $strText = t('Suggest');
            elseif (NarroApp::HasPermissionForThisLang('Can vote', $this->objNarroProject->ProjectId))
                $strText = t('Vote');
            else
                $strText = t('Details');

            return
                NarroLink::ContextSuggest(
                    $this->objNarroProject->ProjectId,
                    0,
                    $objNarroContextInfo->Context->ContextId,
                    $this->lstTextFilter->SelectedValue,
                    $this->lstSearchType->SelectedValue,
                    $this->txtSearch->Text,
                    $intRowIndex + (($this->dtgNarroContextInfo->PageNumber - 1) * $this->dtgNarroContextInfo->ItemsPerPage),
                    $this->dtgNarroContextInfo->TotalItemCount,
                    $this->dtgNarroContextInfo->SortColumnIndex,
                    $this->dtgNarroContextInfo->SortDirection,
                    $strText
               );
        }

        public function lstTextFilter_Change() {
            NarroApp::Redirect(NarroLink::ProjectTextList($this->objNarroProject->ProjectId, $this->lstTextFilter->SelectedValue, $this->lstSearchType->SelectedValue, $this->txtSearch->Text));
        }

        public function btnSearch_Click() {
            NarroApp::Redirect(NarroLink::ProjectTextList($this->objNarroProject->ProjectId, $this->lstTextFilter->SelectedValue, $this->lstSearchType->SelectedValue, $this->txtSearch->Text));
        }


        protected function dtgNarroContextInfo_Bind() {
            $this->arrSuggestionList = array();

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

            // Setup the $objClauses Array
            $objClauses = array();

            // If a column is selected to be sorted, and if that column has a OrderByClause set on it, then let's add
            // the OrderByClause to the $objClauses array
            if ($objClause = $this->dtgNarroContextInfo->OrderByClause)
                array_push($objClauses, $objClause);

            // Add the LimitClause information, as well
            if ($objClause = $this->dtgNarroContextInfo->LimitClause)
                array_push($objClauses, $objClause);
            else
                array_push($objClauses, QQ::LimitInfo($this->dtgNarroContextInfo->ItemsPerPage));

            // Set the DataSource to be the array of all NarroContextInfo objects, given the clauses above
            switch($this->lstSearchType->SelectedValue) {
                case NarroTextListForm::SEARCH_TEXTS:
                    $this->dtgNarroContextInfo->DataSource = NarroContextInfo::LoadArrayByTextValue(
                        $this->txtSearch->Text,
                        $this->lstTextFilter->SelectedValue,
                        $this->dtgNarroContextInfo->LimitClause,
                        $this->dtgNarroContextInfo->OrderByClause,
                        $objCommonCondition
                    );
                    break;
                case NarroTextListForm::SEARCH_SUGGESTIONS:
                    $this->dtgNarroContextInfo->DataSource = NarroContextInfo::LoadArrayBySuggestionValue(
                        $this->txtSearch->Text,
                        $this->lstTextFilter->SelectedValue,
                        $this->dtgNarroContextInfo->LimitClause,
                        $this->dtgNarroContextInfo->OrderByClause,
                        $objCommonCondition
                    );
                    break;

                case NarroTextListForm::SEARCH_CONTEXTS:
                    $this->dtgNarroContextInfo->DataSource = NarroContextInfo::LoadArrayByContext(
                        $this->txtSearch->Text,
                        $this->lstTextFilter->SelectedValue,
                        $this->dtgNarroContextInfo->LimitClause,
                        $this->dtgNarroContextInfo->OrderByClause,
                        $objCommonCondition
                    );
                    break;
            }

            NarroApp::ExecuteJavaScript('highlight_datagrid();');
        }

    }

    NarroProjectTextListForm::Run('NarroProjectTextListForm', 'templates/narro_project_text_list.tpl.php');
?>
