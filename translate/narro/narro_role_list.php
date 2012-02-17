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

    class NarroRoleListForm extends QForm {
        protected $dtgNarroRole;
        protected $pnlRolePermissions;
        protected $pnlRoleUsers;

        // DataGrid Columns
        protected $colRoleName;
        protected $colActions;

        protected function Form_Create() {
            parent::Form_Create();
            $this->pnlRolePermissions = new NarroRolePermissionPanel($this);
            $this->pnlRolePermissions->Role = NarroRole::Load(NarroApp::QueryString('r'));

            $this->pnlRoleUsers = new NarroRoleUserListPanel($this);
            $this->pnlRoleUsers->Role = $this->pnlRolePermissions->Role;

            switch(NarroApp::QueryString('view')) {
                case 'permission':
                        $this->pnlRolePermissions->Display = QDisplayStyle::Inline;
                        $this->pnlRoleUsers->Display = QDisplayStyle::None;
                        break;
                case 'user':
                        $this->pnlRolePermissions->Display = QDisplayStyle::None;
                        $this->pnlRoleUsers->Display = QDisplayStyle::Inline;
                        break;
                default:
                        $this->pnlRolePermissions->Display = QDisplayStyle::None;
                        $this->pnlRoleUsers->Display = QDisplayStyle::None;
            }

            // Setup DataGrid Columns
            $this->colRoleName = new QDataGridColumn(t('Role'), '<?= $_FORM->dtgNarroRole_RoleNameColumn_Render($_ITEM) ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroRole()->RoleName), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroRole()->RoleName, false)));
            $this->colRoleName->HtmlEntities = false;

            $this->colActions = new QDataGridColumn(t('Actions'), '<?= $_FORM->dtgNarroRole_Actions_Render($_ITEM) ?>');
            $this->colActions->HtmlEntities = false;

            // Setup DataGrid
            $this->dtgNarroRole = new QDataGrid($this);

            // Datagrid Paginator
            $this->dtgNarroRole->Paginator = new QPaginator($this->dtgNarroRole);
            $this->dtgNarroRole->ItemsPerPage = NarroApp::$User->getPreferenceValueByName('Items per page');

            // Specify Whether or Not to Refresh using Ajax
            $this->dtgNarroRole->UseAjax = NarroApp::$UseAjax;

            // Specify the local databind method this datagrid will use
            $this->dtgNarroRole->SetDataBinder('dtgNarroRole_Bind');

            $this->dtgNarroRole->AddColumn($this->colRoleName);
            $this->dtgNarroRole->AddColumn($this->colActions);

            $this->dtgNarroRole->SortColumnIndex = 0;

        }

        public function dtgNarroRole_RoleNameColumn_Render(NarroRole $objNarroRole) {
            $strControlId = 'lblRoleName' . $objNarroRole->RoleId;
            $lblRoleName = $this->GetControl($strControlId);
            if (!$lblRoleName) {
                $lblRoleName = new QLabel($this->dtgNarroRole, $strControlId);
                $lblRoleName->DisplayStyle = QDisplayStyle::Inline;
                $lblRoleName->Text = $objNarroRole->RoleName;
            }

            $strControlId = 'txtEditRole' . $objNarroRole->RoleId;
            $txtEditRole = $this->GetControl($strControlId);
            if (!$txtEditRole) {
                $txtEditRole = new QTextBox($this->dtgNarroRole, $strControlId);
                $txtEditRole->DisplayStyle = QDisplayStyle::None;
                $txtEditRole->Text = $objNarroRole->RoleName;
            }

            return $lblRoleName->Render(false) . $txtEditRole->Render(false);
        }

        public function dtgNarroRole_Actions_Render(NarroRole $objNarroRole) {
            $strControlId = 'btnEditRole' . $objNarroRole->RoleId;
            $btnEdit = $this->GetControl($strControlId);
            if (!$btnEdit) {
                $btnEdit = new QButton($this->dtgNarroRole, $strControlId);
                $btnEdit->Text = t('Edit');
                if (NarroApp::$UseAjax)
                    $btnEdit->AddAction(new QClickEvent(), new QAjaxAction('btnEditRole_Click'));
                else
                    $btnEdit->AddAction(new QClickEvent(), new QServerAction('btnEditRole_Click'));
            }
            $btnEdit->ActionParameter = $objNarroRole->RoleId;

            $strControlId = 'btnDeleteRole' . $objNarroRole->RoleId;
            $btnDelete = $this->GetControl($strControlId);
            if (!$btnDelete) {
                $btnDelete = new QButton($this->dtgNarroRole, $strControlId);
                $btnDelete->Text = t('Delete');
                $btnDelete->AddAction(new QClickEvent(), new QConfirmAction(t('Are you sure you want to delete this role?')));
                if (NarroApp::$UseAjax)
                    $btnDelete->AddAction(new QClickEvent(), new QAjaxAction('btnDeleteRole_Click'));
                else
                    $btnDelete->AddAction(new QClickEvent(), new QServerAction('btnDeleteRole_Click'));
            }
            $btnDelete->ActionParameter = $objNarroRole->RoleId;

            $strControlId = 'btnPermissions' . $objNarroRole->RoleId;
            $btnPermissions = $this->GetControl($strControlId);
            if (!$btnPermissions) {
                $btnPermissions = new QButton($this->dtgNarroRole, $strControlId);
                $btnPermissions->Text = t('Permissions');
                if (NarroApp::$UseAjax)
                    $btnPermissions->AddAction(new QClickEvent(), new QAjaxAction('btnPermissions_Click'));
                else
                    $btnPermissions->AddAction(new QClickEvent(), new QServerAction('btnPermissions_Click'));
            }
            $btnPermissions->ActionParameter = $objNarroRole->RoleId;

            $strControlId = 'btnViewUsers' . $objNarroRole->RoleId;
            $btnViewUsers = $this->GetControl($strControlId);
            if (!$btnViewUsers) {
                $btnViewUsers = new QButton($this->dtgNarroRole, $strControlId);
                $btnViewUsers->Text = t('View users');
                if (NarroApp::$UseAjax)
                    $btnViewUsers->AddAction(new QClickEvent(), new QAjaxAction('btnViewUsers_Click'));
                else
                    $btnViewUsers->AddAction(new QClickEvent(), new QServerAction('btnViewUsers_Click'));
            }
            $btnViewUsers->ActionParameter = $objNarroRole->RoleId;

            $strOutput = '';

            if ($objNarroRole->RoleId > 5)
                $strOutput .= $btnEdit->Render(false) . ' ' . $btnDelete->Render(false) . ' ';

            $strOutput .= $btnPermissions->Render(false) . ' ' . $btnViewUsers->Render(false);

            return $strOutput;
        }

        public function btnPermissions_Click($strFormId, $strControlId, $strParameter) {
            NarroApp::Redirect(NarroLink::RoleList($strParameter, 'permission'));
        }

        public function btnViewUsers_Click($strFormId, $strControlId, $strParameter) {
            NarroApp::Redirect(NarroLink::RoleList($strParameter, 'user'));
        }

        public function btnEditRole_Click($strFormId, $strControlId, $strParameter) {

            if (is_numeric($strParameter)) {
                $btnEditRole = $this->GetControl($strControlId);
                $txtEditRole = $this->GetControl('txtEditRole' . $strParameter);
                $lblRoleName = $this->GetControl('lblRoleName' . $strParameter);

                if ($btnEditRole->Text == t('Edit')) {
                    $txtEditRole->DisplayStyle = QDisplayStyle::Inline;
                    $lblRoleName->DisplayStyle = QDisplayStyle::None;
                    $btnEditRole->Text = t('Save');
                }
                else {
                    $txtEditRole->DisplayStyle = QDisplayStyle::None;
                    $lblRoleName->DisplayStyle = QDisplayStyle::Inline;
                    $objNarroRole = NarroRole::Load($strParameter);
                    if ($objNarroRole->RoleName != $txtEditRole->Text) {
                        $objNarroRole->RoleName = $txtEditRole->Text;
                        $lblRoleName->Text = $txtEditRole->Text;
                        $objNarroRole->Save();
                    }
                    $btnEditRole->Text = t('Edit');
                }

                $this->dtgNarroRole->MarkAsModified();
            }
            else {
                $this->dtgNarroRole_Bind();
            }

        }

        protected function dtgNarroRole_Bind() {
            // Because we want to enable pagination AND sorting, we need to setup the $objClauses array to send to LoadAll()

            // Remember!  We need to first set the TotalItemCount, which will affect the calcuation of LimitClause below
            $this->dtgNarroRole->TotalItemCount = NarroRole::CountAll();

            // Setup the $objClauses Array
            $objClauses = array();

            // If a column is selected to be sorted, and if that column has a OrderByClause set on it, then let's add
            // the OrderByClause to the $objClauses array
            if ($objClause = $this->dtgNarroRole->OrderByClause)
                array_push($objClauses, $objClause);

            // Add the LimitClause information, as well
            if ($objClause = $this->dtgNarroRole->LimitClause)
                array_push($objClauses, $objClause);

            // Set the DataSource to be the array of all NarroRole objects, given the clauses above
            $this->dtgNarroRole->DataSource = NarroRole::LoadAll($objClauses);

            NarroApp::ExecuteJavaScript('highlight_datagrid();');
        }
    }

    NarroRoleListForm::Run('NarroRoleListForm', 'templates/narro_role_list.tpl.php');
?>
