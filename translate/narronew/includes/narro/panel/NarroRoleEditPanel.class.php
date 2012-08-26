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

    class NarroRoleEditPanel extends QPanel {
        // General Panel Variables
        protected $objNarroRole;
        protected $strTitleVerb;
        protected $blnEditMode;

        public $txtRoleName;

        // Button Actions
        public $btnSave;
        public $btnCancel;
        public $btnDelete;

        protected function SetupNarroRole($objNarroRole) {
            if ($objNarroRole) {
                $this->objNarroRole = $objNarroRole;
                $this->strTitleVerb = t('Edit');
                $this->blnEditMode = true;
            } else {
                $this->objNarroRole = new NarroRole();
                $this->strTitleVerb = t('Add');
                $this->blnEditMode = false;
            }
        }

        public function __construct($objParentObject, $objNarroRole = null, $strControlId = null) {
            // Call the Parent
            try {
                parent::__construct($objParentObject, $strControlId);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            $this->strTemplate = __NARRO_INCLUDES__ . '/narro/panel/NarroRoleEditPanel.tpl.php';

            // Call SetupNarroRole to either Load/Edit Existing or Create New
            $this->SetupNarroRole($objNarroRole);

            // Create/Setup Controls for NarroRole's Data Fields
            $this->txtRoleName_Create();

            // Create/Setup Button Action controls
            $this->btnSave_Create();
            $this->btnCancel_Create();
            $this->btnDelete_Create();
        }

        // Create and Setup txtRoleName
        protected function txtRoleName_Create() {
            $this->txtRoleName = new QTextBox($this);
            $this->txtRoleName->Name = QApplication::Translate('Role Name');
            $this->txtRoleName->Text = $this->objNarroRole->RoleName;
            $this->txtRoleName->Required = true;
            $this->txtRoleName->SafeHtml = true;
            $this->txtRoleName->MaxLength = NarroRole::RoleNameMaxLength;
        }


        // Setup btnSave
        protected function btnSave_Create() {
            $this->btnSave = new QButton($this);
            $this->btnSave->Text = QApplication::Translate('Save');
            $this->btnSave->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSave_Click'));
            $this->btnSave->PrimaryButton = true;
            $this->btnSave->CausesValidation = true;
        }

        // Setup btnCancel
        protected function btnCancel_Create() {
            $this->btnCancel = new QButton($this);
            $this->btnCancel->Text = QApplication::Translate('Cancel');
            $this->btnCancel->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCancel_Click'));
            $this->btnCancel->CausesValidation = false;
        }

        // Setup btnDelete
        protected function btnDelete_Create() {
            $this->btnDelete = new QButton($this);
            $this->btnDelete->Text = QApplication::Translate('Delete');
            $this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'), 'NarroRole')));
            $this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
            $this->btnDelete->CausesValidation = false;
            if (!$this->blnEditMode)
                $this->btnDelete->Visible = false;
        }

        // Protected Update Methods
        protected function UpdateNarroRoleFields() {
            $this->objNarroRole->RoleName = $this->txtRoleName->Text;
        }


        // Control ServerActions
        public function btnSave_Click($strFormId, $strControlId, $strParameter) {
            if (QApplication::HasPermissionForThisLang('Can manage roles', null)) {
                $this->UpdateNarroRoleFields();
                $this->objNarroRole->Save();
            }
            QApplication::Redirect(NarroLink::RoleList());
        }

        public function btnCancel_Click($strFormId, $strControlId, $strParameter) {
            QApplication::Redirect(NarroLink::RoleList());
        }

        public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
            if (QApplication::HasPermissionForThisLang('Can manage roles', null))
                $this->objNarroRole->Delete();
            QApplication::Redirect(NarroLink::RoleList());
        }

    }
?>
