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

    class NarroProjectLanguageListForm extends QForm {
        protected $dtgNarroLanguage;

        // DataGrid Columns
        protected $colLanguageName;
        protected $colPercentTranslated;

        protected $objNarroProject;

        protected function SetupNarroProject() {
            // Lookup Object PK information from Query String (if applicable)
            // Set mode to Edit or New depending on what's found
            $intProjectId = NarroApp::QueryString('p');
            if ($intProjectId > 0) {
                $this->objNarroProject = NarroProject::Load(($intProjectId));

                if (!$this->objNarroProject)
                    NarroApp::Redirect(NarroLink::ProjectList());

            } else
                NarroApp::Redirect(NarroLink::ProjectList());

        }

        protected function Form_Create() {
            parent::Form_Create();

            $this->SetupNarroProject();

            // Setup DataGrid Columns
            $this->colLanguageName = new QDataGridColumn(t('Language'), '<?= $_FORM->dtgNarroLanguage_LanguageNameColumn_Render($_ITEM) ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroLanguage()->LanguageName), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroLanguage()->LanguageName, false)));
            $this->colLanguageName->HtmlEntities = false;

            $this->colPercentTranslated = new QDataGridColumn(t('Progress'), '<?= $_FORM->dtgNarroLanguage_PercentTranslated_Render($_ITEM); ?>');
            $this->colPercentTranslated->HtmlEntities = false;
            $this->colPercentTranslated->Width = 160;


            // Setup DataGrid
            $this->dtgNarroLanguage = new QDataGrid($this);

            // Datagrid Paginator
            $this->dtgNarroLanguage->Paginator = new QPaginator($this->dtgNarroLanguage);
            $this->dtgNarroLanguage->PaginatorAlternate = new QPaginator($this->dtgNarroLanguage);
            $this->dtgNarroLanguage->ItemsPerPage = NarroApp::$User->getPreferenceValueByName('Items per page');
            $this->dtgNarroLanguage->SortColumnIndex = 0;

            // Specify Whether or Not to Refresh using Ajax
            $this->dtgNarroLanguage->UseAjax = false;

            // Specify the local databind method this datagrid will use
            $this->dtgNarroLanguage->SetDataBinder('dtgNarroLanguage_Bind');

            $this->dtgNarroLanguage->AddColumn($this->colLanguageName);
            $this->dtgNarroLanguage->AddColumn($this->colPercentTranslated);

            $this->dtgNarroLanguage->SortColumnIndex = 0;

            $this->pnlBreadcrumb->strSeparator = ' | ';

            $this->pnlBreadcrumb->setElements(
                NarroLink::ProjectTextList($this->objNarroProject->ProjectId, 1, 1, '', $this->objNarroProject->ProjectName),
                NarroLink::ProjectFileList($this->objNarroProject->ProjectId, null, t('Files'))
            );

            if (NarroApp::HasPermissionForThisLang('Can manage project', $this->objNarroProject->ProjectId))
                $this->pnlBreadcrumb->addElement(NarroLink::ProjectManage($this->objNarroProject->ProjectId, t('Manage')));

            if (NarroApp::HasPermissionForThisLang('Can edit project', $this->objNarroProject->ProjectId))
                $this->pnlBreadcrumb->addElement(NarroLink::ProjectEdit($this->objNarroProject->ProjectId, t('Edit')));

            $this->pnlBreadcrumb->addElement(t('Languages'));

        }

        public function dtgNarroLanguage_PercentTranslated_Render(NarroLanguage $objNarroLanguage) {
            $sOutput = '';

            $objDatabase = NarroApp::$Database[1];

            $strQuery = sprintf('SELECT COUNT(c.context_id) AS cnt FROM narro_context c, narro_context_info ci WHERE c.context_id=ci.context_id AND c.project_id = %d AND ci.language_id=%d AND c.active=1', $this->objNarroProject->ProjectId, $objNarroLanguage->LanguageId);

            // Perform the Query
            $objDbResult = $objDatabase->Query($strQuery);

            if ($objDbResult) {
                $mixRow = $objDbResult->FetchArray();
                $intTotalTexts = $mixRow['cnt'];

                $strQuery = sprintf('SELECT COUNT(c.context_id) AS cnt FROM narro_context c, narro_context_info ci WHERE c.context_id=ci.context_id AND c.project_id = %d AND ci.language_id=%d AND ci.valid_suggestion_id IS NULL AND ci.has_suggestions=1 AND c.active=1', $this->objNarroProject->ProjectId, $objNarroLanguage->LanguageId);

                // Perform the Query
                $objDbResult = $objDatabase->Query($strQuery);

                if ($objDbResult) {
                    $mixRow = $objDbResult->FetchArray();
                    $intTranslatedTexts = $mixRow['cnt'];
                }

                $strQuery = sprintf('SELECT COUNT(c.context_id) AS cnt FROM `narro_context` c, narro_context_info ci WHERE c.context_id=ci.context_id AND c.project_id = %d AND ci.language_id=%d AND ci.valid_suggestion_id IS NOT NULL AND c.active=1', $this->objNarroProject->ProjectId, $objNarroLanguage->LanguageId);
                // Perform the Query
                $objDbResult = $objDatabase->Query($strQuery);

                if ($objDbResult) {
                    $mixRow = $objDbResult->FetchArray();
                    $intApprovedTexts = $mixRow['cnt'];
                }

                $objProgressBar = $this->GetControl('progressbar' . $objNarroLanguage->LanguageId);
                if (!$objProgressBar instanceof NarroTranslationProgressBar)
                    $objProgressBar = new NarroTranslationProgressBar($this->dtgNarroLanguage, 'progressbar' . $objNarroLanguage->LanguageId);
                $objProgressBar->Total = $intTotalTexts;
                $objProgressBar->Translated = $intApprovedTexts;
                $objProgressBar->Fuzzy = $intTranslatedTexts;

                $sOutput .= $objProgressBar->Render(false);
            }
            return $sOutput;

        }

        public function dtgNarroLanguage_LanguageNameColumn_Render(NarroLanguage $objNarroLanguage) {
            return sprintf('<a href="%s?l=%s">%s</a>', basename(__FILE__), $objNarroLanguage->LanguageCode, $objNarroLanguage->LanguageName);
        }

        protected function dtgNarroLanguage_Bind() {
            $this->dtgNarroLanguage->TotalItemCount = NarroLanguage::CountAll();

            $this->dtgNarroLanguage->DataSource = NarroLanguage::LoadAllActive(QQ::Clause(
                $this->dtgNarroLanguage->OrderByClause,
                $this->dtgNarroLanguage->LimitClause
            ));

            NarroApp::ExecuteJavaScript('highlight_datagrid();');
        }

    }

    NarroProjectLanguageListForm::Run('NarroProjectLanguageListForm', 'templates/narro_project_language_list.tpl.php');

?>