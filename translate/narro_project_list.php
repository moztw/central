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
    require_once('includes/narro/narro_progress_bar.class.php');

    class NarroProjectListForm extends QForm {
        protected $dtgNarroProject;

        // DataGrid Columns
        protected $colProjectName;
        protected $colProjectType;
        protected $colActive;
        protected $colPercentTranslated;
        protected $colActions;

        protected $pnlTopUsers;

        protected function Form_Create() {
            // Setup DataGrid Columns
            $this->colProjectName = new QDataGridColumn(t('Name'), '<?= $_FORM->dtgNarroProject_ProjectNameColumn_Render($_ITEM) ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroProject()->ProjectName), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroProject()->ProjectName, false)));
            $this->colProjectName->HtmlEntities = false;

            $this->colProjectType = new QDataGridColumn(t('Type'), '<?= $_FORM->dtgNarroProject_ProjectTypeColumn_Render($_ITEM) ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroProject()->ProjectType), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroProject()->ProjectType, false)));
            $this->colActive = new QDataGridColumn(t('Active'), '<?= $_FORM->dtgNarroProject_ActiveColumn_Render($_ITEM) ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroProject()->Active), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroProject()->Active, false)));

            $this->colPercentTranslated = new QDataGridColumn(t('Progress'), '<?= $_FORM->dtgNarroProject_PercentTranslated_Render($_ITEM) ?>');
            $this->colPercentTranslated->HtmlEntities = false;

            $this->colActions = new QDataGridColumn(t('Actions'), '<?= $_FORM->dtgNarroProject_Actions_Render($_ITEM) ?>');
            $this->colActions->HtmlEntities = false;

            // Setup DataGrid
            $this->dtgNarroProject = new QDataGrid($this);

            // Datagrid Paginator
            $this->dtgNarroProject->Paginator = new QPaginator($this->dtgNarroProject);
            $this->dtgNarroProject->ItemsPerPage = QApplication::$objUser->getPreferenceValueByName('Items per page');

            // Specify Whether or Not to Refresh using Ajax
            $this->dtgNarroProject->UseAjax = false;

            // Specify the local databind method this datagrid will use
            $this->dtgNarroProject->SetDataBinder('dtgNarroProject_Bind');

            $this->dtgNarroProject->AddColumn($this->colProjectName);

            if (QApplication::$objUser->hasPermission('Can manage project', null, QApplication::$objUser->Language->LanguageId)) {
                $this->dtgNarroProject->AddColumn($this->colProjectType);
                $this->dtgNarroProject->AddColumn($this->colActive);
            }

            $this->dtgNarroProject->AddColumn($this->colPercentTranslated);

            $this->dtgNarroProject->AddColumn($this->colActions);

            $this->pnlTopUsers = new NarroTopUsersPanel($this);

        }

        public function dtgNarroProject_PercentTranslated_Render(NarroProject $objNarroProject) {
            $strOutput = QApplication::$Cache->load('project_progress_' . $objNarroProject->ProjectId . '_' . QApplication::$objUser->Language->LanguageId);

            if (!$strOutput || $strOutput == '') {

                $objDatabase = QApplication::$Database[1];

                $strQuery = sprintf('SELECT COUNT(c.context_id) AS cnt FROM narro_context c, narro_context_info ci WHERE c.context_id=ci.context_id AND c.project_id = %d AND ci.language_id=%d AND c.active=1', $objNarroProject->ProjectId, QApplication::$objUser->Language->LanguageId);

                // Perform the Query
                $objDbResult = $objDatabase->Query($strQuery);

                if ($objDbResult) {
                    $mixRow = $objDbResult->FetchArray();
                    $intTotalTexts = $mixRow['cnt'];

                    $strQuery = sprintf('SELECT COUNT(c.context_id) AS cnt FROM narro_context c, narro_context_info ci WHERE c.context_id=ci.context_id AND c.project_id = %d AND ci.language_id=%d AND ci.valid_suggestion_id IS NULL AND ci.has_suggestions=1 AND c.active=1', $objNarroProject->ProjectId, QApplication::$objUser->Language->LanguageId);

                    // Perform the Query
                    $objDbResult = $objDatabase->Query($strQuery);

                    if ($objDbResult) {
                        $mixRow = $objDbResult->FetchArray();
                        $intTranslatedTexts = $mixRow['cnt'];
                    }

                    $strQuery = sprintf('SELECT COUNT(c.context_id) AS cnt FROM `narro_context` c, narro_context_info ci WHERE c.context_id=ci.context_id AND c.project_id = %d AND ci.language_id=%d AND ci.valid_suggestion_id IS NOT NULL AND c.active=1', $objNarroProject->ProjectId, QApplication::$objUser->Language->LanguageId);
                    // Perform the Query
                    $objDbResult = $objDatabase->Query($strQuery);

                    if ($objDbResult) {
                        $mixRow = $objDbResult->FetchArray();
                        $intValidatedTexts = $mixRow['cnt'];
                    }

                    $objProgressBar = $this->GetControl('progressbar' . $objNarroProject->ProjectId);
                    if (!$objProgressBar instanceof NarroTranslationProgressBar)
                        $objProgressBar = new NarroTranslationProgressBar($this->dtgNarroProject, 'progressbar' . $objNarroProject->ProjectId);
                    $objProgressBar->Total = $intTotalTexts;
                    $objProgressBar->Translated = $intValidatedTexts;
                    $objProgressBar->Fuzzy = $intTranslatedTexts;

                    $strOutput .= $objProgressBar->Render(false);

                    QApplication::$Cache->save($strOutput, 'project_progress_' . $objNarroProject->ProjectId . '_' . QApplication::$objUser->Language->LanguageId);
                }
            }

            return sprintf('<a href="narro_context_suggest.php?p=%s&tf=2&st=1&s=">%s</a>', $objNarroProject->ProjectId, $strOutput);
        }

        public function dtgNarroProject_ProjectNameColumn_Render(NarroProject $objNarroProject) {
            return sprintf('<a href="narro_context_suggest.php?p=%s&tf=2&st=1&s=">%s</a>',
                $objNarroProject->ProjectId,
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
                sprintf('<a href="narro_project_text_list.php?p=%d">%s</a>', $objNarroProject->ProjectId, t('Texts')) .
                sprintf(' | <a href="narro_project_file_list.php?p=%d">%s</a>', $objNarroProject->ProjectId, t('Files')) .
                sprintf(' | <a href="narro_project_language_list.php?p=%d">%s</a>', $objNarroProject->ProjectId, t('Languages'));

            if (QApplication::$objUser->hasPermission('Can manage project', $objNarroProject->ProjectId, QApplication::$objUser->Language->LanguageId))
                $strOutput .=
                    sprintf(' | <a href="narro_project_manage.php?p=%d">%s</a>', $objNarroProject->ProjectId, t('Manage'));

            if (QApplication::$objUser->hasPermission('Can edit project', $objNarroProject->ProjectId, QApplication::$objUser->Language->LanguageId))
                $strOutput .=
                    sprintf(' | <a href="narro_project_edit.php?p=%d">%s</a>', $objNarroProject->ProjectId, t('Edit'));

            return $strOutput;
        }

        protected function dtgNarroProject_Bind() {
            // Because we want to enable pagination AND sorting, we need to setup the $objClauses array to send to LoadAll()

            // Remember!  We need to first set the TotalItemCount, which will affect the calcuation of LimitClause below
            if (QApplication::$objUser->hasPermission('Can manage project', null, QApplication::$objUser->Language->LanguageId))
                $this->dtgNarroProject->TotalItemCount = NarroProject::CountAll();
            else
                $this->dtgNarroProject->TotalItemCount = NarroProject::QueryCount(QQ::Equal(QQN::NarroProject()->Active, 1));

            if ($this->dtgNarroProject->TotalItemCount == 0)
                QApplication::Redirect('narro_project_edit.php');

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
            if (QApplication::$objUser->hasPermission('Can manage project', null, QApplication::$objUser->Language->LanguageId))
                $this->dtgNarroProject->DataSource = NarroProject::LoadAll($objClauses);
            else
                $this->dtgNarroProject->DataSource = NarroProject::QueryArray(QQ::Equal(QQN::NarroProject()->Active, 1), $objClauses);

            QApplication::ExecuteJavaScript('highlight_datagrid();');
        }
    }

    NarroProjectListForm::Run('NarroProjectListForm', 'templates/narro_project_list.tpl.php');
?>
