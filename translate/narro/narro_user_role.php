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

    class NarroUserRoleForm extends QForm {
        protected $objUser;
        protected $dtgNarroUserRole;

        // DataGrid Columns
        protected $colLanguage;
        protected $colProject;
        protected $colRole;
        protected $colActions;

        protected $lstProject;
        protected $lstLanguage;
        protected $lstRole;
        protected $btnAddRole;

        protected function Form_Create() {
            parent::Form_Create();

            if (NarroApp::QueryString('u') == NarroApp::GetUserId())
                NarroApp::Redirect(NarroLink::ProjectList());

            $this->objUser = NarroUser::Load(NarroApp::QueryString('u'));

            // Setup DataGrid Columns
            $this->colLanguage = new QDataGridColumn(NarroApp::Translate('Language'), '<?= $_FORM->dtgNarroUserRole_LanguageColumn_Render($_ITEM) ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroUserRole()->Language->LanguageName), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroUserRole()->Language->LanguageName, false)));
            $this->colLanguage->HtmlEntities = false;
            $this->colProject = new QDataGridColumn(NarroApp::Translate('Project'), '<?= $_FORM->dtgNarroUserRole_ProjectColumn_Render($_ITEM) ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroUserRole()->Project->ProjectName), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroUserRole()->Project->ProjectName, false)));
            $this->colProject->HtmlEntities = false;
            $this->colRole = new QDataGridColumn(NarroApp::Translate('Roles'), '<?= $_FORM->dtgNarroUserRole_RoleColumn_Render($_ITEM) ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroUserRole()->Role->RoleName), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroUserRole()->Role->RoleName, false)));
            $this->colRole->HtmlEntities = false;
            $this->colActions = new QDataGridColumn(NarroApp::Translate('Actions'), '<?= $_FORM->dtgNarroUserRole_ActionsColumn_Render($_ITEM) ?>');
            $this->colActions->HtmlEntities = false;


            // Setup DataGrid
            $this->dtgNarroUserRole = new QDataGrid($this);
            $this->dtgNarroUserRole->CellSpacing = 0;
            $this->dtgNarroUserRole->CellPadding = 4;
            $this->dtgNarroUserRole->BorderStyle = QBorderStyle::Solid;
            $this->dtgNarroUserRole->BorderWidth = 1;
            $this->dtgNarroUserRole->GridLines = QGridLines::Both;

            // Specify Whether or Not to Refresh using Ajax
            $this->dtgNarroUserRole->UseAjax = false;

            // Specify the local databind method this datagrid will use
            $this->dtgNarroUserRole->SetDataBinder('dtgNarroUserRole_Bind');

            $this->dtgNarroUserRole->AddColumn($this->colLanguage);
            $this->dtgNarroUserRole->AddColumn($this->colProject);
            $this->dtgNarroUserRole->AddColumn($this->colRole);
            $this->dtgNarroUserRole->AddColumn($this->colActions);

            $this->lstLanguage = new QListBox($this);
            $this->lstLanguage->AddItem('Any');
            foreach(NarroLanguage::LoadAllActive() as $objNarroLanguage) {
                if (NarroApp::HasPermission('Can manage users', null, $objNarroLanguage->LanguageId))
                    $this->lstLanguage->AddItem($objNarroLanguage->LanguageName, $objNarroLanguage->LanguageId);
            }

            $this->lstProject = new QListBox($this);
            $this->lstProject->AddItem('Any');
            foreach(NarroProject::QueryArray(QQ::Equal(QQN::NarroProject()->Active, 1)) as $objNarroProject) {
                if (NarroApp::HasPermission('Can manage users', $objNarroProject->ProjectId))
                    $this->lstProject->AddItem($objNarroProject->ProjectName, $objNarroProject->ProjectId);
            }

            $this->lstRole = new QListBox($this);
            foreach(NarroRole::LoadAll() as $objNarroRole)
                $this->lstRole->AddItem($objNarroRole->RoleName, $objNarroRole->RoleId);

            $this->btnAddRole = new QButton($this);
            $this->btnAddRole->Text = t('Add');
            $this->btnAddRole->AddAction(new QClickEvent(), new QServerAction('btnAddRole_Click'));

        }

        public function dtgNarroUserRole_LanguageColumn_Render(NarroUserRole $objNarroUserRole) {
            if (is_null($objNarroUserRole->LanguageId))
                return t('Any');
            else
                return $objNarroUserRole->Language->LanguageName;
        }

        public function dtgNarroUserRole_ProjectColumn_Render(NarroUserRole $objNarroUserRole) {
            if (is_null($objNarroUserRole->ProjectId))
                return t('Any');
            else
                return $objNarroUserRole->Project->ProjectName;
        }

        public function dtgNarroUserRole_RoleColumn_Render(NarroUserRole $objNarroUserRole) {
            return NarroLink::RoleList($objNarroUserRole->RoleId, 'user', $objNarroUserRole->Role->RoleName);
        }

        public function dtgNarroUserRole_ActionsColumn_Render(NarroUserRole $objNarroUserRole) {
            $strControlId = 'btnEditRole' . $objNarroUserRole->UserRoleId;
            $btnEdit = $this->GetControl($strControlId);
            if (!$btnEdit) {
                $btnEdit = new QButton($this->dtgNarroUserRole, $strControlId);
                $btnEdit->Text = t('Edit');
                if (NarroApp::$UseAjax)
                    $btnEdit->AddAction(new QClickEvent(), new QAjaxAction('btnEditRole_Click'));
                else
                    $btnEdit->AddAction(new QClickEvent(), new QServerAction('btnEditRole_Click'));
            }
            $btnEdit->ActionParameter = $objNarroUserRole->UserRoleId;

            $strControlId = 'btnDeleteRole' . $objNarroUserRole->UserRoleId;
            $btnDelete = $this->GetControl($strControlId);
            if (!$btnDelete) {
                $btnDelete = new QButton($this->dtgNarroUserRole, $strControlId);
                $btnDelete->Text = t('Delete');
                $btnDelete->AddAction(new QClickEvent(), new QConfirmAction(t('Are you sure you want to revoke this role for this user?')));
                if (NarroApp::$UseAjax)
                    $btnDelete->AddAction(new QClickEvent(), new QAjaxAction('btnDeleteRole_Click'));
                else
                    $btnDelete->AddAction(new QClickEvent(), new QServerAction('btnDeleteRole_Click'));
            }
            $btnDelete->ActionParameter = $objNarroUserRole->UserRoleId;

            return $btnEdit->Render(false) . ' ' . $btnDelete->Render(false);
        }

        protected function dtgNarroUserRole_Bind() {
            // Because we want to enable pagination AND sorting, we need to setup the $objClauses array to send to LoadAll()

            // Setup the $objClauses Array
            $objClauses = array();

            // If a column is selected to be sorted, and if that column has a OrderByClause set on it, then let's add
            // the OrderByClause to the $objClauses array
            if ($objClause = $this->dtgNarroUserRole->OrderByClause)
                array_push($objClauses, $objClause);

            // Add the LimitClause information, as well
            if ($objClause = $this->dtgNarroUserRole->LimitClause)
                array_push($objClauses, $objClause);

            // Set the DataSource to be the array of all NarroUser objects, given the clauses above
            $this->dtgNarroUserRole->DataSource = NarroUserRole::LoadArrayByUserId($this->objUser->UserId, $objClauses);
        }

        public function btnAddRole_Click($strFormId, $strControlId, $strParameter) {

            if (is_numeric($strParameter)) {
                $objNarroUserRole = NarroUserRole::Load($strParameter);
                $this->btnAddRole->Text = t('Add');
                $strControlId = 'btnEditRole' . $strParameter;
                $btnEdit = $this->GetControl($strControlId);
                $btnEdit->Text = t('Edit');
                $this->btnAddRole->ActionParameter = 'a';
            }
            else {
                $objNarroUserRole = new NarroUserRole();
                $objNarroUserRole->UserId = $this->objUser->UserId;
            }

            if (!NarroApp::HasPermission('Can manage users', $objNarroUserRole->ProjectId, $objNarroUserRole->LanguageId))
                return false;

            $objNarroUserRole->LanguageId = $this->lstLanguage->SelectedValue;
            $objNarroUserRole->ProjectId = $this->lstProject->SelectedValue;
            $objNarroUserRole->RoleId = $this->lstRole->SelectedValue;
            try {
                $objNarroUserRole->Save();
            } catch (QMySqliDatabaseException $objExc) {
                if (strpos($objExc->getMessage(), 'Duplicate entry') === false) {
                    throw $objExc;
                }
                else {
                    //
                }
            }

            $this->dtgNarroUserRole_Bind();
        }

        public function btnEditRole_Click($strFormId, $strControlId, $strParameter) {
            $strControlId = 'btnEditRole' . $strParameter;
            $btnEdit = $this->GetControl($strControlId);

            if ($btnEdit->Text == t('Cancel edit')) {
                $this->btnAddRole->Text = t('Add');
                $btnEdit->Text = t('Edit');
            }
            else {
                $objNarroUserRole = NarroUserRole::Load($strParameter);

                $this->lstLanguage->SelectedValue = $objNarroUserRole->LanguageId;
                $this->lstLanguage->Enabled = NarroApp::HasPermission('Can manage users', null, $objNarroUserRole->LanguageId);
                $this->lstProject->SelectedValue = $objNarroUserRole->ProjectId;
                $this->lstProject->Enabled = NarroApp::HasPermission('Can manage users', $objNarroUserRole->ProjectId);
                $this->lstRole->SelectedValue = $objNarroUserRole->RoleId;

                $this->btnAddRole->Text = t('Save');
                $this->btnAddRole->ActionParameter = $strParameter;

                $btnEdit->Text = t('Cancel edit');
            }
        }

        public function btnDeleteRole_Click($strFormId, $strControlId, $strParameter) {
            $objNarroUserRole = NarroUserRole::Load($strParameter);

            if (!NarroApp::HasPermission('Can manage users', $objNarroUserRole->ProjectId, $objNarroUserRole->LanguageId))
                return false;

            $objNarroUserRole->Delete();

            $this->dtgNarroUserRole_Bind();
        }
    }

    NarroUserRoleForm::Run('NarroUserRoleForm', 'templates/narro_user_role.tpl.php');

?>