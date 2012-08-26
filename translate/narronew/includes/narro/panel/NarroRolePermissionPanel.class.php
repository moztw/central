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

    class NarroRolePermissionPanel extends QPanel {
        /**
         * @var NarroRole
         */
        protected $objRole;
        public $dtgPermission;

        public function __construct($objParentObject, $strControlId = null) {
            parent::__construct($objParentObject, $strControlId);

            // Setup DataGrid
            $this->dtgPermission = new NarroPermissionDataGrid($this);
            // Datagrid Paginator
            $this->dtgPermission->ShowHeader = true;
            $this->dtgPermission->ShowFilter = false;

            // Specify Whether or Not to Refresh using Ajax
            $this->dtgPermission->UseAjax = QApplication::$UseAjax;

            $colPermission = $this->dtgPermission->MetaAddColumn(QQN::NarroPermission()->PermissionName);
            $colPermission->Name = t('Permission');
            $colPermission->Html = '<?= $_CONTROL->ParentControl->dtgPermission_PermissionColumn_Render($_ITEM) ?>';
            $colPermission->HtmlEntities = false;

            $this->dtgPermission->SortColumnIndex = 0;
        }

        public function GetControlHTML() {
            return $this->dtgPermission->Render(false);
        }

        public function dtgPermission_PermissionColumn_Render(NarroPermission $objPermission) {
            if (QApplication::HasPermission('Can manage roles')) {
                $strControlId = 'chkPermission' . $objPermission->PermissionId;
                $chkPermission = new QCheckBox($this->dtgPermission);
                $chkPermission->Text = t($objPermission->PermissionName);
                $chkPermission->ActionParameter = $objPermission->PermissionId;
                $chkPermission->Checked = NarroRolePermission::QueryCount(
                    QQ::AndCondition(
                        QQ::Equal(
                            QQN::NarroRolePermission()->RoleId,
                            $this->objRole->RoleId
                        ),
                        QQ::Equal(
                            QQN::NarroRolePermission()->PermissionId,
                            $objPermission->PermissionId
                        )
                    )
                );
                if (QApplication::$UseAjax)
                    $chkPermission->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'chkPermission_Click'));
                else
                    $chkPermission->AddAction(new QClickEvent(), new QServerControlAction($this, 'chkPermission_Click'));

                return $chkPermission->Render(false);
            }
            else {
                return t($objPermission->PermissionName);
            }
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
                $this->dtgPermission_Bind();
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
                    if (!QApplication::HasPermission('Can manage roles'))
                        $this->dtgPermission->AdditionalConditions = QQ::Equal(QQN::NarroPermission()->NarroRolePermissionAsPermission->RoleId, $this->objRole->RoleId);
                    $this->dtgPermission->MarkAsModified();
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