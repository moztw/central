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

    class NarroChangePasswordForm extends QForm {
        protected $lblMessage;
        protected $txtPassword;
        protected $btnChangePassword;

        protected function Form_Create() {
            parent::Form_Create();

            if (QApplication::$objUser->UserId == NarroUser::ANONYMOUS_USER_ID) {
                $strPassHash = QApplication::QueryString('h');
                $strUsername = QApplication::QueryString('u');
                if ($strPassHash && $strUsername) {
                    if ($objUser = NarroUser::LoadByUsernameAndPassword($strUsername, $strPassHash)) {
                        require_once __INCLUDES__ . '/Zend/Session/Namespace.php';
                        $objNarroSession = new Zend_Session_Namespace('Narro');
                        $objNarroSession->User = $objUser;
                        QApplication::$objUser = $objUser;
                    }
                    else
                        QApplication::Redirect('narro_login.php');
                }
                else
                    QApplication::Redirect('narro_login.php');
            }

            $this->lblMessage = new QLabel($this);
            $this->lblMessage->HtmlEntities = false;
            $this->txtPassword = new QTextBox($this);
            $this->txtPassword->TextMode = QTextMode::Password;
            $this->btnChangePassword = new QButton($this);
            $this->btnChangePassword->PrimaryButton = true;
            $this->btnChangePassword->Text = t('Change password');
            $this->btnChangePassword->AddAction(new QClickEvent(), new QServerAction('btnChangePassword_Click'));

        }

        protected function btnChangePassword_Click($strFormId, $strControlId, $strParameter) {
            QApplication::$objUser->Password = md5($this->txtPassword->Text);

            try {
                QApplication::$objUser->Save();
            } catch (Exception $objEx) {
                $this->lblMessage->ForeColor = 'red';
                $this->lblMessage->Text = t('Failed to change the password.');
            }

            require_once __INCLUDES__ . '/Zend/Session/Namespace.php';
            $objNarroSession = new Zend_Session_Namespace('Narro');
            $objNarroSession->User = QApplication::$objUser;
            $this->lblMessage->ForeColor = 'green';
            $this->lblMessage->Text = t('Password changed succesfully.');

        }
    }

    NarroChangePasswordForm::Run('NarroChangePasswordForm', 'templates/narro_change_password.tpl.php');
?>
