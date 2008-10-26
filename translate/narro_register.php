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

    require('includes/prepend.inc.php');

    class NarroRegisterForm extends QForm {
        protected $lblMessage;
        protected $txtUsername;
        protected $txtPassword;
        protected $txtEmail;
        protected $btnRegister;

        protected function Form_Create() {
            parent::Form_Create();

            $this->lblMessage = new QLabel($this);
            $this->lblMessage->HtmlEntities = false;
            $this->txtUsername = new QTextBox($this);
            $this->txtEmail = new QTextBox($this);
            $this->txtPassword = new QTextBox($this);
            $this->txtPassword->TextMode = QTextMode::Password;
            $this->btnRegister = new QButton($this);
            $this->btnRegister->Text = t('Register');
            $this->btnRegister->AddAction(new QClickEvent(), new QServerAction('btnRegister_Click'));

        }

        protected function btnRegister_Click($strFormId, $strControlId, $strParameter) {
            if (!trim($this->txtUsername->Text) || !trim($this->txtPassword->Text) || !trim($this->txtEmail->Text)) {
                $this->lblMessage->ForeColor = 'red';
                $this->lblMessage->Text = t("It's just three fields, don't leave one empty please.");
                return false;
            }

            $objMaxUser = NarroUser::LoadAll(QQ::Clause(QQ::LimitInfo(1,0), QQ::OrderBy(QQN::NarroUser()->UserId, false)));

            $objUser = new NarroUser();
            $objUser->UserId = $objMaxUser[0]->UserId + 1;
            $objUser->Username = $this->txtUsername->Text;
            $objUser->Email = $this->txtEmail->Text;
            $objUser->Password = md5($this->txtPassword->Text);

            try {
                $objUser = NarroUser::RegisterUser($this->txtUsername->Text, $this->txtEmail->Text, $this->txtPassword->Text);
            } catch(Exception $objEx) {
                $this->lblMessage->ForeColor = 'red';
                $this->lblMessage->Text = t("Seems like the username or email is already in use.") . $objEx->getMessage();
                return false;
            }

            if (!$objUser instanceof NarroUser)
                QApplication::Redirect(sprintf('narro_login.php?l=%s', QApplication::$Language->LanguageCode));

            require_once __INCLUDES__ . '/Zend/Session/Namespace.php';
            $objNarroSession = new Zend_Session_Namespace('Narro');
            $objNarroSession->User = $objUser;
            QApplication::$objUser = $objUser;
            QApplication::Redirect(NarroLink::UserPreferences($objUser->UserId));
        }
    }

    NarroRegisterForm::Run('NarroRegisterForm', 'templates/narro_register.tpl.php');
?>
