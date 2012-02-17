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

    class NarroRolePermissionPanel extends QPanel {
        protected $objRole;
        public $dtgNarroPermission;

        // DataGrid Columns
        protected $colPermission;

        public function __construct($objParentObject, $strControlId = null) {
            parent::__construct($objParentObject, $strControlId);

            // Setup DataGrid Columns
            $this->colPermission = new QDataGridColumn(NarroApp::Translate('Permission'), '<?= $_CONTROL->ParentControl->dtgNarroPermission_PermissionColumn_Render($_ITEM) ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroPermission()->PermissionName), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroPermission()->PermissionName, false)));
            $this->colPermission->HtmlEntities = false;


            // Setup DataGrid
            $this->dtgNarroPermission = new QDataGrid($this);
            $this->dtgNarroPermission->CellSpacing = 0;
            $this->dtgNarroPermission->CellPadding = 4;
            $this->dtgNarroPermission->BorderStyle = QBorderStyle::Solid;
            $this->dtgNarroPermission->BorderWidth = 1;
            $this->dtgNarroPermission->GridLines = QGridLines::Both;

            // Specify Whether or Not to Refresh using Ajax
            $this->dtgNarroPermission->UseAjax = NarroApp::$UseAjax;

            // Specify the local databind method this datagrid will use
            $this->dtgNarroPermission->SetDataBinder('dtgNarroPermission_Bind', $this);

            $this->dtgNarroPermission->AddColumn($this->colPermission);

            $this->dtgNarroPermission->SortColumnIndex = 0;
        }

        public function GetControlHTML() {
            return
                '<div class="title_action">' . sprintf(t('%s\'s permissions'), $this->objRole->RoleName) . '</div><br class="item_divider" />' .
                $this->dtgNarroPermission->Render(false);
        }

        public function dtgNarroPermission_PermissionColumn_Render(NarroPermission $objNarroPermission) {
            $strControlId = 'chkPermission' . $objNarroPermission->PermissionId;
            $chkPermission = new QCheckBox($this->dtgNarroPermission);
            $chkPermission->Text = $objNarroPermission->PermissionName;
            $chkPermission->ActionParameter = $objNarroPermission->PermissionId;
            $chkPermission->Checked = NarroRolePermission::QueryCount(
                QQ::AndCondition(
                    QQ::Equal(
                        QQN::NarroRolePermission()->RoleId,
                        $this->objRole->RoleId
                    ),
                    QQ::Equal(
                        QQN::NarroRolePermission()->PermissionId,
                        $objNarroPermission->PermissionId
                    )
                )
            );
            if (NarroApp::$UseAjax)
                $chkPermission->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'chkPermission_Click'));
            else
                $chkPermission->AddAction(new QClickEvent(), new QServerControlAction($this, 'chkPermission_Click'));

            return $chkPermission->Render(false);
        }

        public function dtgNarroPermission_Bind() {
            // Because we want to enable pagination AND sorting, we need to setup the $objClauses array to send to LoadAll()

            // Setup the $objClauses Array
            $objClauses = array();

            // If a column is selected to be sorted, and if that column has a OrderByClause set on it, then let's add
            // the OrderByClause to the $objClauses array
            if ($objClause = $this->dtgNarroPermission->OrderByClause)
                array_push($objClauses, $objClause);

            // Add the LimitClause information, as well
            if ($objClause = $this->dtgNarroPermission->LimitClause)
                array_push($objClauses, $objClause);

            // Set the DataSource to be the array of all NarroUser objects, given the clauses above
            $this->dtgNarroPermission->DataSource = NarroPermission::LoadAll($objClauses);
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
                $this->dtgNarroPermission_Bind();
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
                    $this->dtgNarroPermission_Bind();
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