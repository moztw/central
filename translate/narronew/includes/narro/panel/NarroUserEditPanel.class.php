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

    class NarroUserEditPanel extends QPanel {
        // General Panel Variables
        public $objNarroUser;

        public $lblMessage;

        // Controls for NarroUser's Data Fields
        public $txtUsername;
        public $txtRealname;
        public $txtPassword;
        public $txtEmail;

        // Button Actions
        public $btnSave;
        public $btnCancel;
        public $btnDelete;

        public function __construct($objNarroUser, $objParentObject, $strControlId = null) {
            // Call the Parent
            try {
                parent::__construct($objParentObject, $strControlId);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            $this->strTemplate = __NARRO_INCLUDES__ . '/narro/panel/NarroUserEditPanel.tpl.php';

            $this->objNarroUser = $objNarroUser;

            // Create/Setup Controls for NarroUser's Data Fields
            $this->txtUsername_Create();
            $this->txtPassword_Create();
            $this->txtEmail_Create();
            $this->txtRealname_Create();

            // Create/Setup ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References

            // Create/Setup Button Action controls
            $this->btnSave_Create();
            $this->btnCancel_Create();
            $this->btnDelete_Create();

            $this->lblMessage = new QLabel($this);
            $this->lblMessage->DisplayStyle = QDisplayStyle::Block;
            $this->lblMessage->Visible = false;
        }

        // Create and Setup txtUsername
        protected function txtUsername_Create() {
            $this->txtUsername = new QTextBox($this);
            $this->txtUsername->Name = QApplication::Translate('Username');
            $this->txtUsername->Text = $this->objNarroUser->Username;
            $this->txtUsername->Required = true;
            $this->txtUsername->SafeHtml = true;
            $this->txtUsername->MaxLength = NarroUser::UsernameMaxLength;
        }
        
        // Create and Setup txtRealname
        protected function txtRealname_Create() {
            $this->txtRealname = new QTextBox($this);
            $this->txtRealname->Name = QApplication::Translate('Real name');
            $this->txtRealname->Text = $this->objNarroUser->RealName;
            $this->txtRealname->Required = false;
            $this->txtRealname->SafeHtml = true;
            $this->txtRealname->MaxLength = NarroUser::RealNameMaxLength;
        }

        // Create and Setup txtPassword
        protected function txtPassword_Create() {
            $this->txtPassword = new QTextBox($this);
            $this->txtPassword->Name = QApplication::Translate('Password');
            $this->txtPassword->Required = false;
            $this->txtPassword->TextMode = QTextMode::Password;
            $this->txtPassword->MaxLength = NarroUser::PasswordMaxLength;
        }

        // Create and Setup txtEmail
        protected function txtEmail_Create() {
            $this->txtEmail = new QTextBox($this);
            $this->txtEmail->Name = QApplication::Translate('Email');
            $this->txtEmail->Text = $this->objNarroUser->Email;
            $this->txtEmail->Required = true;
            $this->txtEmail->SafeHtml = true;
            $this->txtEmail->MaxLength = NarroUser::EmailMaxLength;
        }

        // Setup btnSave
        protected function btnSave_Create() {
            $this->btnSave = new QButton($this);
            $this->btnSave->Text = QApplication::Translate('Save');
            $this->btnSave->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnSave_Click'));
            $this->btnSave->PrimaryButton = true;
            $this->btnSave->CausesValidation = true;
        }

        // Setup btnCancel
        protected function btnCancel_Create() {
            $this->btnCancel = new QButton($this);
            $this->btnCancel->Text = QApplication::Translate('Cancel');
            $this->btnCancel->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnCancel_Click'));
            $this->btnCancel->CausesValidation = false;
        }

        // Setup btnDelete
        protected function btnDelete_Create() {
            $this->btnDelete = new QButton($this);
            $this->btnDelete->Text = QApplication::Translate('Delete');
            $this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(t('Are you SURE you want to DELETE this user?')));
            $this->btnDelete->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnDelete_Click'));
            $this->btnDelete->CausesValidation = false;
            $this->btnDelete->Display = QApplication::HasPermission('Can manage users');
        }

        // Protected Update Methods
        protected function UpdateNarroUserFields() {
            $this->objNarroUser->Username = $this->txtUsername->Text;
            $this->objNarroUser->RealName = $this->txtRealname->Text;
            if ($this->txtPassword->Text) {
                require_once(__NARRO_INCLUDES__ . '/PasswordHash.class.php');
                
                $objHasher = new PasswordHash(8, FALSE);
                
                $this->objNarroUser->Password = $objHasher->HashPassword($this->txtPassword->Text);
            }
            $this->objNarroUser->Email = $this->txtEmail->Text;
        }

        public function Validate() {return true;}

        // Control ServerActions
        public function btnSave_Click($strFormId, $strControlId, $strParameter) {
            $this->UpdateNarroUserFields();
            try {
                $this->objNarroUser->Save();
            }
            catch (Exception $objEx) {
                $this->lblMessage->ForeColor = 'red';
                $this->lblMessage->Text = t('Error') . ':' . $objEx->getMessage();
                $this->lblMessage->Visible = true;
                $this->blnModified = true;
                return false;
            }

            QApplication::Redirect(NarroLink::UserList($this->objNarroUser->Username));
        }

        public function btnCancel_Click($strFormId, $strControlId, $strParameter) {
            QApplication::Redirect(NarroLink::UserList($this->objNarroUser->Username));
        }

        public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
            if (QApplication::HasPermission('Can manage users')) {
                $this->objNarroUser->Delete();
                QApplication::Redirect(NarroLink::UserList(''));
            }
        }

    }
