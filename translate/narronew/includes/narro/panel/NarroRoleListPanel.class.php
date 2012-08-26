<?php
    /**
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

    class NarroRoleListPanel extends QPanel {
        public $dtgRole;
        public $pnlRolePermissions;
        public $pnlRoleUsers;

        // DataGrid Columns
        protected $colRoleName;
        protected $colActions;

        public function __construct($objParentObject, $strControlId = null) {
            // Call the Parent
            try {
                parent::__construct($objParentObject, $strControlId);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            $this->strTemplate = __NARRO_INCLUDES__ . '/narro/panel/NarroRoleListPanel.tpl.php';

            $this->pnlRolePermissions = new NarroRolePermissionPanel($this);
            if (QApplication::QueryString('r'))
                $this->pnlRolePermissions->Role = NarroRole::Load(QApplication::QueryString('r'));

            $this->pnlRoleUsers = new NarroRoleUserListPanel($this);
            if ($this->pnlRolePermissions->Role instanceof NarroRole)
                $this->pnlRoleUsers->Role = $this->pnlRolePermissions->Role;

            switch(QApplication::QueryString('view')) {
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
            $this->colRoleName = new QDataGridColumn(t('Role'), '<?= $_CONTROL->ParentControl->dtgRole_RoleNameColumn_Render($_ITEM) ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroRole()->RoleName), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroRole()->RoleName, false)));
            $this->colRoleName->HtmlEntities = false;

            $this->colActions = new QDataGridColumn(t('Actions'), '<?= $_CONTROL->ParentControl->dtgRole_Actions_Render($_ITEM) ?>');
            $this->colActions->HtmlEntities = false;

            // Setup DataGrid
            $this->dtgRole = new NarroDataGrid($this);
            $this->dtgRole->Title = t('Roles');

            // Specify Whether or Not to Refresh using Ajax
            $this->dtgRole->UseAjax = false;

            // Specify the local databind method this datagrid will use
            $this->dtgRole->SetDataBinder('dtgRole_Bind', $this);

            $this->dtgRole->AddColumn($this->colRoleName);
            $this->dtgRole->AddColumn($this->colActions);

            $this->dtgRole->SortColumnIndex = 0;

        }

        public function dtgRole_RoleNameColumn_Render(NarroRole $objNarroRole) {
            $strControlId = 'lblRoleName' . $objNarroRole->RoleId;
            $lblRoleName = $this->Form->GetControl($strControlId);
            if (!$lblRoleName) {
                $lblRoleName = new QLabel($this->dtgRole, $strControlId);
                $lblRoleName->DisplayStyle = QDisplayStyle::Inline;
                $lblRoleName->Text = t($objNarroRole->RoleName);
            }

            $strControlId = 'txtEditRole' . $objNarroRole->RoleId;
            $txtEditRole = $this->Form->GetControl($strControlId);
            if (!$txtEditRole) {
                $txtEditRole = new QTextBox($this->dtgRole, $strControlId);
                $txtEditRole->DisplayStyle = QDisplayStyle::None;
                $txtEditRole->Text = $objNarroRole->RoleName;
            }

            return $lblRoleName->Render(false) . $txtEditRole->Render(false);
        }

        public function dtgRole_Actions_Render(NarroRole $objNarroRole) {
            $strControlId = 'btnEditRole' . $objNarroRole->RoleId;
            $btnEdit = $this->Form->GetControl($strControlId);
            if (!$btnEdit) {
                $btnEdit = new QButton($this->dtgRole, $strControlId);
                $btnEdit->Text = t('Edit');
                if (QApplication::$UseAjax)
                    $btnEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnEditRole_Click'));
                else
                    $btnEdit->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnEditRole_Click'));
            }
            $btnEdit->ActionParameter = $objNarroRole->RoleId;
            $btnEdit->Display = QApplication::HasPermission('Can manage user roles');

            $strControlId = 'btnDeleteRole' . $objNarroRole->RoleId;
            $btnDelete = $this->Form->GetControl($strControlId);
            if (!$btnDelete) {
                $btnDelete = new QButton($this->dtgRole, $strControlId);
                $btnDelete->Text = t('Delete');
                $btnDelete->AddAction(new QClickEvent(), new QConfirmAction(t('Are you sure you want to delete this role?')));
                if (QApplication::$UseAjax)
                    $btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDeleteRole_Click'));
                else
                    $btnDelete->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnDeleteRole_Click'));
            }
            $btnDelete->ActionParameter = $objNarroRole->RoleId;
            $btnDelete->Display = QApplication::HasPermission('Can manage user roles');

            $strControlId = 'btnPermissions' . $objNarroRole->RoleId;
            $btnPermissions = $this->Form->GetControl($strControlId);
            if (!$btnPermissions) {
                $btnPermissions = new QButton($this->dtgRole, $strControlId);
                $btnPermissions->Text = t('Permissions');
                $btnPermissions->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnPermissions_Click'));
            }
            $btnPermissions->ActionParameter = $objNarroRole->RoleId;

            $strControlId = 'btnViewUsers' . $objNarroRole->RoleId;
            $btnViewUsers = $this->Form->GetControl($strControlId);
            if (!$btnViewUsers) {
                $btnViewUsers = new QButton($this->dtgRole, $strControlId);
                $btnViewUsers->Text = t('View users');
                $btnViewUsers->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnViewUsers_Click'));
            }
            $btnViewUsers->ActionParameter = $objNarroRole->RoleId;

            $strOutput = '';

            if ($objNarroRole->RoleId > 5)
                $strOutput .= $btnEdit->Render(false) . ' ' . $btnDelete->Render(false) . ' ';

            $strOutput .= $btnPermissions->Render(false) . ' ' . $btnViewUsers->Render(false);

            return $strOutput;
        }

        public function btnPermissions_Click($strFormId, $strControlId, $strParameter) {
            QApplication::Redirect(NarroLink::RoleList($strParameter, 'permission'));
        }

        public function btnViewUsers_Click($strFormId, $strControlId, $strParameter) {
            QApplication::Redirect(NarroLink::RoleList($strParameter, 'user'));
        }

        public function btnEditRole_Click($strFormId, $strControlId, $strParameter) {

            if (is_numeric($strParameter)) {
                $btnEditRole = $this->Form->GetControl($strControlId);
                $txtEditRole = $this->Form->GetControl('txtEditRole' . $strParameter);
                $lblRoleName = $this->Form->GetControl('lblRoleName' . $strParameter);

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

                $this->dtgRole->MarkAsModified();
            }
            else {
                $this->dtgRole_Bind();
            }

        }

        public function dtgRole_Bind() {
            // Because we want to enable pagination AND sorting, we need to setup the $objClauses array to send to LoadAll()

            // Setup the $objClauses Array
            $objClauses = array();

            // If a column is selected to be sorted, and if that column has a OrderByClause set on it, then let's add
            // the OrderByClause to the $objClauses array
            if ($objClause = $this->dtgRole->OrderByClause)
                array_push($objClauses, $objClause);

            // Add the LimitClause information, as well
            if ($objClause = $this->dtgRole->LimitClause)
                array_push($objClauses, $objClause);

            // Set the DataSource to be the array of all NarroRole objects, given the clauses above
            $this->dtgRole->DataSource = NarroRole::LoadAll($objClauses);

            QApplication::ExecuteJavaScript('highlight_datagrid();');
        }
    }
?>
