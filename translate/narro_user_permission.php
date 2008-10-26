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

    class NarroUserPermissionForm extends QForm {
        protected $objUser;
        protected $dtgNarroUserPermission;

        // DataGrid Columns
        protected $colLanguage;
        protected $colProject;
        protected $colPermissions;
        protected $colActions;

        protected $lstProject;
        protected $lstLanguage;
        protected $lstPermission;
        protected $btnAddPermission;

        protected function Form_Create() {
            parent::Form_Create();
            
            if (!QApplication::$objUser->hasPermission('Can manage users'))
                QApplication::Redirect(NarroLink::ProjectList());

            $this->objUser = NarroUser::Load(QApplication::QueryString('u'));

            // Setup DataGrid Columns
            $this->colLanguage = new QDataGridColumn(QApplication::Translate('Language'), '<?= $_FORM->dtgNarroUserPermission_LanguageColumn_Render($_ITEM) ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroUserPermission()->Language->LanguageName), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroUserPermission()->Language->LanguageName, false)));
            $this->colLanguage->HtmlEntities = false;
            $this->colProject = new QDataGridColumn(QApplication::Translate('Project'), '<?= $_FORM->dtgNarroUserPermission_ProjectColumn_Render($_ITEM) ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroUserPermission()->Project->ProjectName), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroUserPermission()->Project->ProjectName, false)));
            $this->colProject->HtmlEntities = false;
            $this->colPermissions = new QDataGridColumn(QApplication::Translate('Permissions'), '<?= $_FORM->dtgNarroUserPermission_PermissionsColumn_Render($_ITEM) ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroUserPermission()->Permission->PermissionName), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroUserPermission()->Permission->PermissionName, false)));
            $this->colPermissions->HtmlEntities = false;
            $this->colActions = new QDataGridColumn(QApplication::Translate('Actions'), '<?= $_FORM->dtgNarroUserPermission_ActionsColumn_Render($_ITEM) ?>');
            $this->colActions->HtmlEntities = false;


            // Setup DataGrid
            $this->dtgNarroUserPermission = new QDataGrid($this);
            $this->dtgNarroUserPermission->CellSpacing = 0;
            $this->dtgNarroUserPermission->CellPadding = 4;
            $this->dtgNarroUserPermission->BorderStyle = QBorderStyle::Solid;
            $this->dtgNarroUserPermission->BorderWidth = 1;
            $this->dtgNarroUserPermission->GridLines = QGridLines::Both;

            // Specify Whether or Not to Refresh using Ajax
            $this->dtgNarroUserPermission->UseAjax = false;

            // Specify the local databind method this datagrid will use
            $this->dtgNarroUserPermission->SetDataBinder('dtgNarroUserPermission_Bind');

            $this->dtgNarroUserPermission->AddColumn($this->colLanguage);
            $this->dtgNarroUserPermission->AddColumn($this->colProject);
            $this->dtgNarroUserPermission->AddColumn($this->colPermissions);
            $this->dtgNarroUserPermission->AddColumn($this->colActions);

            $this->lstLanguage = new QListBox($this);
            $this->lstLanguage->AddItem('Any');
            foreach(NarroLanguage::LoadAll() as $objNarroLanguage) {
                if (QApplication::$objUser->hasPermission('Can manage users', null, $objNarroLanguage->LanguageId))
                    $this->lstLanguage->AddItem($objNarroLanguage->LanguageName, $objNarroLanguage->LanguageId);
            }

            $this->lstProject = new QListBox($this);
            $this->lstProject->AddItem('Any');
            foreach(NarroProject::QueryArray(QQ::Equal(QQN::NarroProject()->Active, 1)) as $objNarroProject) {
                if (QApplication::$objUser->hasPermission('Can manage users', $objNarroProject->ProjectId))
                    $this->lstProject->AddItem($objNarroProject->ProjectName, $objNarroProject->ProjectId);
            }

            $this->lstPermission = new QListBox($this);
            foreach(NarroPermission::LoadAll() as $objNarroPermission)
                $this->lstPermission->AddItem($objNarroPermission->PermissionName, $objNarroPermission->PermissionId);

            $this->btnAddPermission = new QButton($this);
            $this->btnAddPermission->Text = t('Add permission');
            $this->btnAddPermission->AddAction(new QClickEvent(), new QServerAction('btnAddPermission_Click'));

        }

        public function dtgNarroUserPermission_LanguageColumn_Render(NarroUserPermission $objNarroUserPermission) {
            if (is_null($objNarroUserPermission->LanguageId))
                return t('Any');
            else
                return $objNarroUserPermission->Language->LanguageName;
        }

        public function dtgNarroUserPermission_ProjectColumn_Render(NarroUserPermission $objNarroUserPermission) {
            if (is_null($objNarroUserPermission->ProjectId))
                return t('Any');
            else
                return $objNarroUserPermission->Project->ProjectName;
        }

        public function dtgNarroUserPermission_PermissionsColumn_Render(NarroUserPermission $objNarroUserPermission) {
            return $objNarroUserPermission->Permission->PermissionName;
        }

        public function dtgNarroUserPermission_ActionsColumn_Render(NarroUserPermission $objNarroUserPermission) {
            $strControlId = 'btnEditPermission' . $objNarroUserPermission->UserPermissionId;
            $btnEdit = $this->GetControl($strControlId);
            if (!$btnEdit) {
                $btnEdit = new QButton($this->dtgNarroUserPermission, $strControlId);
                $btnEdit->Text = t('Edit');
                if (QApplication::$blnUseAjax)
                    $btnEdit->AddAction(new QClickEvent(), new QAjaxAction('btnEditPermission_Click'));
                else
                    $btnEdit->AddAction(new QClickEvent(), new QServerAction('btnEditPermission_Click'));
            }
            $btnEdit->ActionParameter = $objNarroUserPermission->UserPermissionId;

            $strControlId = 'btnDeletePermission' . $objNarroUserPermission->UserPermissionId;
            $btnDelete = $this->GetControl($strControlId);
            if (!$btnDelete) {
                $btnDelete = new QButton($this->dtgNarroUserPermission, $strControlId);
                $btnDelete->Text = t('Delete');
                $btnDelete->AddAction(new QClickEvent(), new QConfirmAction(t('Are you sure you want to delete this permission?')));
                if (QApplication::$blnUseAjax)
                    $btnDelete->AddAction(new QClickEvent(), new QAjaxAction('btnDeletePermission_Click'));
                else
                    $btnDelete->AddAction(new QClickEvent(), new QServerAction('btnDeletePermission_Click'));
            }
            $btnDelete->ActionParameter = $objNarroUserPermission->UserPermissionId;

            if (QApplication::$objUser->hasPermission('Can manage users', $objNarroUserPermission->ProjectId, $objNarroUserPermission->LanguageId))
                return
                    $btnEdit->Render(false) . ' ' . $btnDelete->Render(false);
            else
                return '';
        }

        protected function dtgNarroUserPermission_Bind() {
            // Because we want to enable pagination AND sorting, we need to setup the $objClauses array to send to LoadAll()

            // Setup the $objClauses Array
            $objClauses = array();

            // If a column is selected to be sorted, and if that column has a OrderByClause set on it, then let's add
            // the OrderByClause to the $objClauses array
            if ($objClause = $this->dtgNarroUserPermission->OrderByClause)
                array_push($objClauses, $objClause);

            // Add the LimitClause information, as well
            if ($objClause = $this->dtgNarroUserPermission->LimitClause)
                array_push($objClauses, $objClause);

            // Set the DataSource to be the array of all NarroUser objects, given the clauses above
            $this->dtgNarroUserPermission->DataSource = NarroUserPermission::LoadArrayByUserId($this->objUser->UserId, $objClauses);
        }

        public function btnAddPermission_Click($strFormId, $strControlId, $strParameter) {

            if (is_numeric($strParameter)) {
                $objNarroUserPermission = NarroUserPermission::Load($strParameter);
                $this->btnAddPermission->Text = t('Add');
                $strControlId = 'btnEditPermission' . $strParameter;
                $btnEdit = $this->GetControl($strControlId);
                $btnEdit->Text = t('Edit');
                $this->btnAddPermission->ActionParameter = 'a';
            }
            else {
                $objNarroUserPermission = new NarroUserPermission();
                $objNarroUserPermission->UserId = $this->objUser->UserId;
            }

            if (!QApplication::$objUser->hasPermission('Can manage users', $objNarroUserPermission->ProjectId, $objNarroUserPermission->LanguageId))
                return false;

            $objNarroUserPermission->LanguageId = $this->lstLanguage->SelectedValue;
            $objNarroUserPermission->ProjectId = $this->lstProject->SelectedValue;
            $objNarroUserPermission->PermissionId = $this->lstPermission->SelectedValue;
            try {
                $objNarroUserPermission->Save();
            } catch (QMySqliDatabaseException $objExc) {
                if (strpos($objExc->getMessage(), 'Duplicate entry') === false) {
                    throw $objExc;
                }
                else {
                    //
                }
            }

            $this->dtgNarroUserPermission_Bind();
        }

        public function btnEditPermission_Click($strFormId, $strControlId, $strParameter) {
            $strControlId = 'btnEditPermission' . $strParameter;
            $btnEdit = $this->GetControl($strControlId);

            if ($btnEdit->Text == t('Cancel edit')) {
                $this->btnAddPermission->Text = t('Add');
                $btnEdit->Text = t('Edit');
            }
            else {
                $objNarroUserPermission = NarroUserPermission::Load($strParameter);

                if (!QApplication::$objUser->hasPermission('Can manage users', $objNarroUserPermission->ProjectId, $objNarroUserPermission->LanguageId))
                    return false;

                $this->lstLanguage->SelectedValue = $objNarroUserPermission->LanguageId;
                $this->lstProject->SelectedValue = $objNarroUserPermission->ProjectId;
                $this->lstPermission->SelectedValue = $objNarroUserPermission->PermissionId;

                $this->btnAddPermission->Text = t('Save permission');
                $this->btnAddPermission->ActionParameter = $strParameter;

                $btnEdit->Text = t('Cancel edit');
            }
        }

        public function btnDeletePermission_Click($strFormId, $strControlId, $strParameter) {
            $objNarroUserPermission = NarroUserPermission::Load($strParameter);

            if (!QApplication::$objUser->hasPermission('Can manage users', $objNarroUserPermission->ProjectId, $objNarroUserPermission->LanguageId))
                return false;

            $objNarroUserPermission->Delete();

            $this->dtgNarroUserPermission_Bind();
        }
    }

    NarroUserPermissionForm::Run('NarroUserPermissionForm', 'templates/narro_user_permission.tpl.php');

?>