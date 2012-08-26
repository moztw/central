<?php
    /**
     * @package Narro
     * @subpackage Panels
     *
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
     */

    class NarroProjectListPanel extends QPanel {
        /**
         * A datagrid of projects
         * @var NarroDataGrid
         */
        public $dtgProjectList;
        /**
         * The current set filter
         * @see the constants defined in this panel
         * @var integer
         */
        protected $intFilter;

        // DataGrid Columns
        protected $colProjectName;
        protected $colLastActivity;
        protected $colPercentTranslated;

        public $txtSearch;
        public $btnSearch;
        public $btnAdd;

        const SHOW_ALL = 0;
        const SHOW_IN_PROGRESS = 1;
        const SHOW_COMPLETED = 2;
        const SHOW_EMPTY = 3;
        const SHOW_INACTIVE = 4;

        public function __construct($objParentObject, $strControlId = null) {
            // Call the Parent
            try {
                parent::__construct($objParentObject, $strControlId);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            $this->strTemplate = __NARRO_INCLUDES__ . '/narro/panel/NarroProjectListPanel.tpl.php';

            $this->colProjectName_Create();
            $this->colLastActivity_Create();
            $this->colPercentTranslated_Create();

            $this->dtgProjectList_Create();

            $this->dtgProjectList->AddColumn($this->colProjectName);
            $this->dtgProjectList->AddColumn($this->colLastActivity);
            $this->dtgProjectList->AddColumn($this->colPercentTranslated);

            $colWordCount = new QDataGridColumn(t('Word count'));
            $colWordCount->Html = '<?=number_format($_ITEM->CountAllWordsByLanguage())?>';
            $colWordCount->HorizontalAlign = QHorizontalAlign::Right;
            // $this->dtgProjectList->AddColumn($colWordCount);

            $this->dtgProjectList->SortColumnIndex = 1;
            $this->dtgProjectList->SortDirection = 1;

            $this->txtSearch_Create();
            $this->btnSearch_Create();
            $this->btnAdd_Create();

        }

        protected function colProjectName_Create() {
            $this->colProjectName = new QDataGridColumn(
                t('Name'),
                '<?= $_CONTROL->ParentControl->dtgProjectList_ProjectNameColumn_Render($_ITEM) ?>',
                array(
                    'OrderByClause' => QQ::OrderBy(QQN::NarroProject()->ProjectName),
                    'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroProject()->ProjectName, false)
                )
            );
            $this->colProjectName->HtmlEntities = false;
        }

        protected function colLastActivity_Create() {
            $this->colLastActivity = new QDataGridColumn(
                t('Last Activity'),
                '<?= $_CONTROL->ParentControl->dtgProjectList_LastActivityColumn_Render($_ITEM) ?>',
                array(
                    'OrderByClause' => QQ::OrderBy(
                        QQN::NarroProject()->NarroProjectProgressAsProject->LastModified, true
                    ),
                    'ReverseOrderByClause' => QQ::OrderBy(
                        QQN::NarroProject()->NarroProjectProgressAsProject->LastModified, false
                    )
                )
            );
            $this->colLastActivity->HtmlEntities = false;
        }

        protected function colPercentTranslated_Create() {
            $this->colPercentTranslated = new QDataGridColumn(
                t('Progress'),
                '<?= $_CONTROL->ParentControl->dtgProjectList_PercentTranslated_Render($_ITEM) ?>',
                array(
                    'OrderByClause' => QQ::OrderBy(
                        QQN::NarroProject()->NarroProjectProgressAsProject->ProgressPercent, true,
                        QQN::NarroProject()->NarroProjectProgressAsProject->FuzzyTextCount, true
                    ),
                    'ReverseOrderByClause' => QQ::OrderBy(
                        QQN::NarroProject()->NarroProjectProgressAsProject->ProgressPercent, false,
                        QQN::NarroProject()->NarroProjectProgressAsProject->FuzzyTextCount, false
                    )
                )
            );
            $this->colPercentTranslated->HtmlEntities = false;
            $this->colPercentTranslated->Wrap = false;
        }

        protected function dtgProjectList_Create() {
            // Setup DataGrid
            $this->dtgProjectList = new NarroDataGrid($this);
            $this->dtgProjectList->ShowHeader = true;
            $this->dtgProjectList->Title = t('Projects');

            // Datagrid Paginator
            $this->dtgProjectList->Paginator = new QPaginator($this->dtgProjectList);
            $this->dtgProjectList->PaginatorAlternate = new QPaginator($this->dtgProjectList);
            $this->dtgProjectList->ItemsPerPage = QApplication::$User->GetPreferenceValueByName('Items per page');

            // Specify Whether or Not to Refresh using Ajax
            $this->dtgProjectList->UseAjax = QApplication::$UseAjax;

            // Specify the local databind method this datagrid will use
            $this->dtgProjectList->SetDataBinder('dtgProjectList_Bind', $this);
        }

        protected function btnSearch_Create() {
            $this->btnSearch = new QButton($this);
            $this->btnSearch->Text = t('Search');
            $this->btnSearch->PrimaryButton = true;

            if (QApplication::$UseAjax)
                $this->btnSearch->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSearch_Click'));
            else
                $this->btnSearch->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnSearch_Click'));
        }

        protected function btnAdd_Create() {
            $this->btnAdd = new QButton($this);
            $this->btnAdd->Text = t('Add');
            $this->btnAdd->Display = QApplication::HasPermission('Can add project');
            $this->btnAdd->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnAdd_Click'));
        }

        protected function txtSearch_Create() {
            $this->txtSearch = new QAutocomplete($this);
            $this->txtSearch->SetDataBinder("txtSearch_Autocomplete", $this);
            $this->txtSearch->AddAction(new QEnterKeyEvent(), new QAjaxControlAction($this, 'btnSearch_Click'));
        }

        public function txtSearch_Autocomplete() {
            $arrReturn = array();

            $arrConditions = array(QQ::Like(QQN::NarroProject()->ProjectName, '%' . $this->txtSearch->Text . '%'));

            if (!QApplication::HasPermission('Administrator'))
                $arrConditions[] = QQ::Equal(QQN::NarroProject()->Active, true);

            foreach(NarroProject::QueryArray(QQ::AndCondition($arrConditions), array(QQ::LimitInfo(10, 0))) as $objProject) {
                $arrReturn[] = $objProject->ProjectName;
            }

            $this->txtSearch->DataSource = $arrReturn;
        }

        public function dtgProjectList_LastActivityColumn_Render(NarroProject $objProject) {

            if ($objProject->_NarroProjectProgressAsProject && $objProject->_NarroProjectProgressAsProject->LastModified->Timestamp > 0) {
                $objDateSpan = new QDateTimeSpan(time() - $objProject->_NarroProjectProgressAsProject->LastModified->Timestamp);
                $strModifiedWhen = $objDateSpan->SimpleDisplay();
                return sprintf(t('%s ago'), $strModifiedWhen);
            }
            else {
                return t('never');
            }
        }

        public function dtgProjectList_PercentTranslated_Render(NarroProject $objProject) {
            if (!$objProject->_NarroProjectProgressAsProject) return '';

            $objProgressBar = new NarroProjectTranslationProgressBar($objProject->_NarroProjectProgressAsProject, $this->dtgProjectList);

            QApplication::$PluginHandler->DisplayInProjectListInProgressColumn($objProject);

            $strOutput = '';
            if (is_array(QApplication::$PluginHandler->PluginReturnValues)) {
                foreach(QApplication::$PluginHandler->PluginReturnValues as $strPluginName=>$mixReturnValue) {
                    if (count($mixReturnValue) == 2 && $mixReturnValue[0] instanceof NarroProject && is_string($mixReturnValue[1]) && $mixReturnValue[1] != '') {
                        $strOutput .= sprintf('<br /><span style="font-size:small" title="%s">%s</span>', $strPluginName, $mixReturnValue[1]);
                    }
                }
            }

            return NarroLink::Translate($objProject->ProjectId, '', 0, '', 0, 0, 10, 0, 0, $objProgressBar->Render(false)) . $strOutput;
        }

        public function dtgProjectList_ProjectNameColumn_Render(NarroProject $objProject) {

            if ((!$objProject->_NarroProjectProgressAsProject || $objProject->_NarroProjectProgressAsProject->Active) && $objProject->Active)
                $strProjectName =
                    '<span style="font-size:1.2em;font-weight:bold;">' .
                    $objProject->ProjectName .
                    '</span>';
            else
                $strProjectName =
                    '<span style="color:gray;font-style:italic;font-size:1.2em">' .
                    $objProject->ProjectName .
                    '</span>';

            return
                NarroLink::Project($objProject->ProjectId, $strProjectName) .
                '<div style="display:block">' .
                $objProject->ProjectDescription .
                '</div>';
        }

        public function dtgProjectList_Bind() {

            if ($this->txtSearch->Text != '')
                $arrConditions[] = QQ::Like(QQN::NarroProject()->ProjectName, sprintf('%%%s%%', $this->txtSearch->Text));
            else
                $arrConditions[] = QQ::All();


            if (QApplication::HasPermissionForThisLang('Can manage project'))
                $arrConditions[] = QQ::All();
            else
                $arrConditions[] = QQ::AndCondition(
                    QQ::Equal(QQN::NarroProject()->NarroProjectProgressAsProject->Active, 1),
                    QQ::Equal(QQN::NarroProject()->Active, 1)
                );

            // Setup the $objClauses Array
            $objClauses = array(
                QQ::Expand(
                    QQN::NarroProject()->NarroProjectProgressAsProject,
                    QQ::Equal(QQN::NarroProject()->NarroProjectProgressAsProject->LanguageId, QApplication::GetLanguageId())
                )
            );

            // Remember!  We need to first set the TotalItemCount, which will affect the calcuation of LimitClause below
            $this->dtgProjectList->TotalItemCount = NarroProject::QueryCount(QQ::AndCondition($arrConditions), $objClauses);

            // If a column is selected to be sorted, and if that column has a OrderByClause set on it, then let's add
            // the OrderByClause to the $objClauses array
            if ($objClause = $this->dtgProjectList->OrderByClause)
                array_push($objClauses, $objClause);

            // Add the LimitClause information, as well
            if ($objClause = $this->dtgProjectList->LimitClause)
                array_push($objClauses, $objClause);

            // Set the DataSource to be the array of all NarroProjectProgress objects, given the clauses above
            $this->dtgProjectList->DataSource = NarroProject::QueryArray(QQ::AndCondition($arrConditions), $objClauses);
        }

        public function btnSearch_Click($strFormId, $strControlId, $strParameter) {
            $this->dtgProjectList->PageNumber = 1;
            $this->dtgProjectList_Bind();
        }

        public function btnAdd_Click($strFormId, $strControlId, $strParameter) {
            QApplication::Redirect(NarroLink::ProjectEdit(0));
        }

        /////////////////////////
        // Public Properties: GET
        /////////////////////////
        public function __get($strName) {
            switch ($strName) {
                case "Filter": return $this->intFilter;

                default:
                    try {
                        return parent::__get($strName);
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
                case "Filter":
                    try {
                        $this->intFilter = QType::Cast($mixValue, QType::Integer);
                        break;
                    } catch (QInvalidCastException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

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
