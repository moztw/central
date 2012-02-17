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

    class NarroProjectListForm extends QForm {
        protected $dtgNarroProject;

        // DataGrid Columns
        protected $colProjectName;
        protected $colProjectType;
        protected $colActive;
        protected $colPercentTranslated;
        protected $colActions;

        protected $pnlTopUsers;
        protected $pnlNewUsers;

        protected function Form_Create() {
            parent::Form_Create();

            // Setup DataGrid Columns
            $this->colProjectName = new QDataGridColumn(t('Name'), '<?= $_FORM->dtgNarroProject_ProjectNameColumn_Render($_ITEM) ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroProject()->ProjectName), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroProject()->ProjectName, false)));
            $this->colProjectName->HtmlEntities = false;

            $this->colProjectType = new QDataGridColumn(t('Type'), '<?= $_FORM->dtgNarroProject_ProjectTypeColumn_Render($_ITEM) ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroProject()->ProjectType), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroProject()->ProjectType, false)));
            $this->colActive = new QDataGridColumn(t('Active'), '<?= $_FORM->dtgNarroProject_ActiveColumn_Render($_ITEM) ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroProject()->Active), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroProject()->Active, false)));

            $this->colPercentTranslated = new QDataGridColumn(t('Progress'), '<?= $_FORM->dtgNarroProject_PercentTranslated_Render($_ITEM) ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroProject()->NarroProjectProgressAsProject->ProgressPercent, true, QQN::NarroProject()->NarroProjectProgressAsProject->FuzzyTextCount, true), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroProject()->NarroProjectProgressAsProject->ProgressPercent, false, QQN::NarroProject()->NarroProjectProgressAsProject->FuzzyTextCount, false)));
            $this->colPercentTranslated->HtmlEntities = false;

            $this->colActions = new QDataGridColumn(t('Actions'), '<?= $_FORM->dtgNarroProject_Actions_Render($_ITEM) ?>');
            $this->colActions->HtmlEntities = false;

            // Setup DataGrid
            $this->dtgNarroProject = new QDataGrid($this);

            // Datagrid Paginator
            $this->dtgNarroProject->Paginator = new QPaginator($this->dtgNarroProject);
            $this->dtgNarroProject->ItemsPerPage = NarroApp::$User->getPreferenceValueByName('Items per page');

            // Specify Whether or Not to Refresh using Ajax
            $this->dtgNarroProject->UseAjax = false;

            // Specify the local databind method this datagrid will use
            $this->dtgNarroProject->SetDataBinder('dtgNarroProject_Bind');

            $this->dtgNarroProject->AddColumn($this->colProjectName);

            if (NarroApp::HasPermissionForThisLang('Can manage project', null)) {
                $this->dtgNarroProject->AddColumn($this->colProjectType);
                $this->dtgNarroProject->AddColumn($this->colActive);
            }

            $this->dtgNarroProject->AddColumn($this->colPercentTranslated);
            $this->dtgNarroProject->AddColumn($this->colActions);

            $this->dtgNarroProject->SortColumnIndex = 0;

            $this->pnlTopUsers = new NarroTopUsersPanel($this);
            $this->pnlNewUsers = new NarroNewUsersPanel($this);

        }

        public function dtgNarroProject_PercentTranslated_Render(NarroProject $objNarroProject) {
            $intTotalTexts = $objNarroProject->CountAllTextsByLanguage();
            $intTranslatedTexts = $objNarroProject->CountTranslatedTextsByLanguage();
            $intApprovedTexts = $objNarroProject->CountApprovedTextsByLanguage();

            $objProgressBar = $this->GetControl('progressbar' . $objNarroProject->ProjectId);
            if (!$objProgressBar instanceof NarroTranslationProgressBar)
                $objProgressBar = new NarroTranslationProgressBar($this->dtgNarroProject, 'progressbar' . $objNarroProject->ProjectId);
            $objProgressBar->Total = $intTotalTexts;
            $objProgressBar->Translated = $intApprovedTexts;
            $objProgressBar->Fuzzy = $intTranslatedTexts;

            $strOutput .= $objProgressBar->Render(false);

            return
                NarroLink::ContextSuggest(
                    $objNarroProject->ProjectId,
                    0,
                    0,
                    2,
                    1,
                    '',
                    0,
                    $intTotalTexts - $intApprovedTexts - $intTranslatedTexts,
                    -1,
                    0,
                    $strOutput
                );
        }

        public function dtgNarroProject_ProjectNameColumn_Render(NarroProject $objNarroProject) {
            $intTotalTexts = $objNarroProject->CountAllTextsByLanguage();
            $intTranslatedTexts = $objNarroProject->CountTranslatedTextsByLanguage();
            $intApprovedTexts = $objNarroProject->CountApprovedTextsByLanguage();

            return
                NarroLink::ContextSuggest(
                    $objNarroProject->ProjectId,
                    0,
                    0,
                    2,
                    1,
                    '',
                    0,
                    $intTotalTexts - $intApprovedTexts - $intTranslatedTexts,
                    -1,
                    0,
                    $objNarroProject->ProjectName
                );
        }

        public function dtgNarroProject_ProjectTypeColumn_Render(NarroProject $objNarroProject) {
            return NarroProjectType::ToString($objNarroProject->ProjectType);
        }

        public function dtgNarroProject_ActiveColumn_Render(NarroProject $objNarroProject) {
            if ($objNarroProject->Active)
                return t('Yes');
            else
                return t('No');
        }

        public function dtgNarroProject_Actions_Render(NarroProject $objNarroProject) {
            $strOutput =
                NarroLink::ProjectTextList($objNarroProject->ProjectId, 1, 1, '', t('Texts')) .
                ' | ' .
                NarroLink::ProjectFileList($objNarroProject->ProjectId, null, t('Files')) .
                sprintf(' | <a href="narro_project_language_list.php?l=%s&p=%d">%s</a>', NarroApp::$Language->LanguageCode, $objNarroProject->ProjectId, t('Languages'));

            if (NarroApp::HasPermissionForThisLang('Can manage project', $objNarroProject->ProjectId))
                $strOutput .=
                    sprintf(' | <a href="narro_project_manage.php?l=%s&p=%d">%s</a>', NarroApp::$Language->LanguageCode, $objNarroProject->ProjectId, t('Manage'));

            if (NarroApp::HasPermissionForThisLang('Can edit project', $objNarroProject->ProjectId))
                $strOutput .=
                    sprintf(' | <a href="narro_project_edit.php?l=%s&p=%d">%s</a>', NarroApp::$Language->LanguageCode, $objNarroProject->ProjectId, t('Edit'));

            return $strOutput;
        }

        protected function dtgNarroProject_Bind() {
            // Because we want to enable pagination AND sorting, we need to setup the $objClauses array to send to LoadAll()

            // Remember!  We need to first set the TotalItemCount, which will affect the calcuation of LimitClause below
            if (NarroApp::HasPermissionForThisLang('Can manage project', null))
                $this->dtgNarroProject->TotalItemCount = NarroProject::CountAll();
            else
                $this->dtgNarroProject->TotalItemCount = NarroProject::QueryCount(QQ::Equal(QQN::NarroProject()->Active, 1));

            if ($this->dtgNarroProject->TotalItemCount == 0 && NarroApp::HasPermissionForThisLang('Can manage project', null))
                NarroApp::Redirect(sprintf('narro_project_edit.php?l=%s', NarroApp::$Language->LanguageCode));

            // Setup the $objClauses Array
            $objClauses = array();

            // If a column is selected to be sorted, and if that column has a OrderByClause set on it, then let's add
            // the OrderByClause to the $objClauses array
            if ($objClause = $this->dtgNarroProject->OrderByClause)
                array_push($objClauses, $objClause);

            // Add the LimitClause information, as well
            if ($objClause = $this->dtgNarroProject->LimitClause)
                array_push($objClauses, $objClause);

            // Set the DataSource to be the array of all NarroProject objects, given the clauses above
            if (NarroApp::HasPermissionForThisLang('Can manage project', null))
                $this->dtgNarroProject->DataSource = NarroProject::LoadAll($objClauses);
            else
                $this->dtgNarroProject->DataSource = NarroProject::QueryArray(QQ::Equal(QQN::NarroProject()->Active, 1), $objClauses);

            NarroApp::ExecuteJavaScript('highlight_datagrid();');
        }
    }

    NarroProjectListForm::Run('NarroProjectListForm', 'templates/narro_project_list.tpl.php');
?>
