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

    class NarroRoleUserListPanel extends QPanel {
        protected $objRole;
        public $dtgRoleUserList;

        // DataGrid Columns
        protected $colUsername;
        protected $colProject;
        protected $colLanguage;

        public function __construct($objParentObject, $strControlId = null) {
            parent::__construct($objParentObject, $strControlId);

            // Setup DataGrid Columns
            $this->colUsername = new QDataGridColumn(QApplication::Translate('Username'), '<?= $_CONTROL->ParentControl->dtgRoleUserList_UsernameColumn_Render($_ITEM) ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroUserRole()->User->Username), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroUserRole()->User->Username, false)));
            $this->colUsername->HtmlEntities = false;
            $this->colProject = new QDataGridColumn(QApplication::Translate('Project'), '<?= $_CONTROL->ParentControl->dtgRoleUserList_ProjectColumn_Render($_ITEM) ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroUserRole()->ProjectId), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroUserRole()->ProjectId, false)));
            $this->colLanguage = new QDataGridColumn(QApplication::Translate('Language'), '<?= $_CONTROL->ParentControl->dtgRoleUserList_LanguageColumn_Render($_ITEM) ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroUserRole()->LanguageId), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroUserRole()->LanguageId, false)));


            // Setup DataGrid
            $this->dtgRoleUserList = new NarroDataGrid($this);

            // Datagrid Paginator
            $this->dtgRoleUserList->Paginator = new QPaginator($this->dtgRoleUserList);
            $this->dtgRoleUserList->ItemsPerPage = QApplication::$User->GetPreferenceValueByName('Items per page');

            // Specify Whether or Not to Refresh using Ajax
            $this->dtgRoleUserList->UseAjax = QApplication::$UseAjax;

            // Specify the local databind method this datagrid will use
            $this->dtgRoleUserList->SetDataBinder('dtgRoleUserList_Bind', $this);

            $this->dtgRoleUserList->AddColumn($this->colUsername);
            $this->dtgRoleUserList->AddColumn($this->colProject);
            $this->dtgRoleUserList->AddColumn($this->colLanguage);

            $this->dtgRoleUserList->SortColumnIndex = 0;
        }

        public function GetControlHTML() {
            return $this->dtgRoleUserList->Render(false);
        }

        public function dtgRoleUserList_UsernameColumn_Render(NarroUserRole $objNarroUserRole) {
            if (QApplication::HasPermission('Can manage roles'))
                return NarroLink::UserRole($objNarroUserRole->UserId, $objNarroUserRole->User->Username);
            else
                return NarroLink::UserProfile($objNarroUserRole->UserId, $objNarroUserRole->User->Username);
        }

        public function dtgRoleUserList_ProjectColumn_Render(NarroUserRole $objNarroUserRole) {
            if ($objNarroUserRole->ProjectId)
                return $objNarroUserRole->Project->ProjectName;
            else
                return t('Any');
        }

        public function dtgRoleUserList_LanguageColumn_Render(NarroUserRole $objNarroUserRole) {
            if ($objNarroUserRole->LanguageId)
                return $objNarroUserRole->Language->LanguageName;
            else
                return t('Any');
        }

        public function dtgRoleUserList_Bind() {
            $this->dtgRoleUserList->TotalItemCount = NarroUserRole::CountByRoleId($this->objRole->RoleId);

            // Because we want to enable pagination AND sorting, we need to setup the $objClauses array to send to LoadAll()

            // Setup the $objClauses Array
            $objClauses = array();

            // If a column is selected to be sorted, and if that column has a OrderByClause set on it, then let's add
            // the OrderByClause to the $objClauses array
            if ($objClause = $this->dtgRoleUserList->OrderByClause)
                array_push($objClauses, $objClause);

            // Add the LimitClause information, as well
            if ($objClause = $this->dtgRoleUserList->LimitClause)
                array_push($objClauses, $objClause);

            // Set the DataSource to be the array of all NarroUser objects, given the clauses above
            $this->dtgRoleUserList->DataSource = NarroUserRole::LoadArrayByRoleId($this->objRole->RoleId, $objClauses);

            QApplication::ExecuteJavaScript('highlight_datagrid();');
        }

        public function chkPermission_Click($strFormId, $strControlId, $strParameter) {

            if (is_numeric($strParameter)) {
                $chkPermission = $this->Form->GetControl($strControlId);
                if ($chkPermission->Checked) {
                    $objRolePermission = new NarroRolePermission();
                    $objRolePermission->RoleId = $this->objRole->RoleId;
                    $objRolePermission->PermissionId = $strParameter;
                    try {
                        $objRolePermission->Save();
                    } catch (QMySqliDatabaseException $objExc) {
                        if (strpos($objExc->getMessage(), 'Duplicate entry') === false) {
                            throw $objExc;
                        }
                        else {
                            //
                        }
                    }
                }
                else {
                    $objRolePermission = NarroRolePermission::QuerySingle(
                        QQ::AndCondition(
                            QQ::Equal(
                                QQN::NarroRolePermission()->RoleId,
                                $this->objRole->RoleId
                            ),
                            QQ::Equal(
                                QQN::NarroRolePermission()->PermissionId,
                                $strParameter
                            )
                        )
                    );

                    if ($objRolePermission instanceof NarroRolePermission)
                        $objRolePermission->Delete();
                }
            }
            else {
                $this->dtgRoleUserList_Bind();
            }

        }

        /////////////////////////
        // Public Properties: GET
        /////////////////////////
        public function __get($strName) {
            switch ($strName) {
                case "Role": return $this->objRole;
                default:
                    try {
                        return parent::__get($strName);
                        break;
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
                // APPEARANCE
                case "Role":
                    $this->objRole = $mixValue;
                    $this->dtgRoleUserList->Title = sprintf(t('Users with "%s" role'), $this->objRole->RoleName);
                    $this->dtgRoleUserList->TotalItemCount;
                    break;
                default:
                    try {
                        return (parent::__set($strName, $mixValue));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }
                    break;
            }
        }
    }

?>