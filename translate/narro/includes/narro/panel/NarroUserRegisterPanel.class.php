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

    class NarroUserRegisterPanel extends QPanel {
        public $lblMessage;
        public $txtUsername;
        public $txtRealname;
        public $txtPassword;
        public $txtEmail;
        public $btnRegister;

        public function __construct($objParentObject, $strControlId = null) {
            // Call the Parent
            try {
                parent::__construct($objParentObject, $strControlId);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            $this->strTemplate = __NARRO_INCLUDES__ . '/narro/panel/NarroUserRegisterPanel.tpl.php';

            $this->lblMessage = new QLabel($this);
            $this->lblMessage->HtmlEntities = false;
            $this->txtUsername = new QTextBox($this, 'username');
            $this->txtUsername->Required = true;
            $this->txtRealname = new QTextBox($this, 'name');
            $this->txtRealname->Required = false;
            $this->txtEmail = new QTextBox($this, 'email');
            $this->txtEmail->Required = true;
            $this->txtPassword = new QTextBox($this, 'password');
            $this->txtPassword->TextMode = QTextMode::Password;
            $this->btnRegister = new QButton($this);
            $this->btnRegister->Text = t('Register');
            $this->btnRegister->PrimaryButton = true;
            $this->btnRegister->CausesValidation = true;
            $this->btnRegister->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnRegister_Click'));
        }

        public function Validate() {
            if (strstr($this->txtUsername->Text, '<')) {
                $this->txtUsername->Warning = t("No <, please.");
                return false;
            }
            elseif (trim($this->txtEmail->Text) && strstr($this->txtEmail->Text, '<')) {
                $this->txtEmail->Warning = t("No <, please.");
                return false;
            }
            else
                return true;
        }

        public function btnRegister_Click($strFormId, $strControlId, $strParameter) {
            if (!trim($this->txtUsername->Text) || !trim($this->txtPassword->Text)) {
                $this->lblMessage->ForeColor = 'red';
                $this->lblMessage->Text = t("It's just three fields, don't leave one empty please.");
                return false;
            }

            try {
                $objUser = NarroUser::RegisterUser($this->txtUsername->Text, $this->txtEmail->Text, $this->txtPassword->Text, $this->txtRealname->Text);
            } catch(Exception $objEx) {
                $this->lblMessage->ForeColor = 'red';
                $this->lblMessage->Text = t("Seems like the username or email is already in use.") . $objEx->getMessage();
                return false;
            }

            if (!$objUser instanceof NarroUser)
                QApplication::Redirect(sprintf('login.php?l=%s', QApplication::$TargetLanguage->LanguageCode));

            QApplication::$Session->User = $objUser;
            QApplication::Redirect(NarroLink::UserPreferences($objUser->UserId));
        }

    }
?>
