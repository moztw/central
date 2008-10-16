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

    class NarroLoginForm extends QForm {
        protected $lblMessage;
        protected $txtUsername;
        protected $txtPassword;
        protected $chkRememberLogin;
        protected $btnLogin;
        protected $btnRecoverPassword;
        protected $txtPreviousUrl;

        protected function Form_Create() {
            $this->lblMessage = new QLabel($this);
            $this->lblMessage->HtmlEntities = false;
            $this->txtUsername = new QTextBox($this);
            $this->txtPassword = new QTextBox($this);
            $this->txtPassword->TextMode = QTextMode::Password;
            $this->chkRememberLogin = new QCheckBox($this);
            $this->btnLogin = new QButton($this);
            $this->btnLogin->Text = t('Login');
            $this->btnLogin->PrimaryButton = true;
            $this->btnLogin->AddAction(new QClickEvent(), new QServerAction('btnLogin_Click'));
            $this->btnRecoverPassword = new QButton($this);
            $this->btnRecoverPassword->Text = t('Lost password or username');
            $this->btnRecoverPassword->AddAction(new QClickEvent(), new QServerAction('btnRecoverPassword_Click'));

            if (isset($_SERVER['HTTP_REFERER']) && !strstr($_SERVER['HTTP_REFERER'], basename(__FILE__)) && $_SERVER['HTTP_REFERER'] !='')
                $this->txtPreviousUrl = $_SERVER['HTTP_REFERER'];


        }

        protected function btnRecoverPassword_Click($strFormId, $strControlId, $strParameter) {
            QApplication::Redirect('narro_recover_password.php');
        }

        protected function btnLogin_Click($strFormId, $strControlId, $strParameter) {
            if ($objUser = NarroUser::LoadByUsernameAndPassword($this->txtUsername->Text, md5($this->txtPassword->Text))) {
                $_SESSION['objUser'] = $objUser;
                if ($this->chkRememberLogin->Checked)
                    setcookie(session_name(), $_COOKIE[session_name()], time()+31*24*3600, __VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__);
                QApplication::$objUser = $objUser;
                if ($this->txtPreviousUrl)
                    QApplication::Redirect($this->txtPreviousUrl);
                else
                    QApplication::Redirect('narro_project_list.php');
            }
            else {
                $this->lblMessage->ForeColor = 'red';
                $this->lblMessage->Text = t('Bad username or password');
            }
        }
    }

    NarroLoginForm::Run('NarroLoginForm', 'templates/narro_login.tpl.php');
?>
