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
        protected $btnLogin;
        protected $btnRecoverPassword;
        protected $txtPreviousUrl;

        protected function Form_Create() {
            parent::Form_Create();

            $this->lblMessage = new QLabel($this);
            $this->lblMessage->HtmlEntities = false;
            $this->txtUsername = new QTextBox($this, 'username');
            $this->txtUsername->TabIndex = 1;
            $this->txtPassword = new QTextBox($this);
            $this->txtPassword->TabIndex = 2;
            $this->txtPassword->TextMode = QTextMode::Password;
            $this->btnLogin = new QButton($this);
            $this->btnLogin->Text = t('Login');
            $this->btnLogin->PrimaryButton = true;
            $this->btnLogin->TabIndex = 4;
            $this->btnLogin->AddAction(new QClickEvent(), new QServerAction('btnLogin_Click'));
            $this->btnRecoverPassword = new QButton($this);
            $this->btnRecoverPassword->Text = t('Lost password or username');
            $this->btnRecoverPassword->AddAction(new QClickEvent(), new QServerAction('btnRecoverPassword_Click'));
            $this->btnRecoverPassword->TabIndex = 5;

            if (isset($_SERVER['HTTP_REFERER']) && !strstr($_SERVER['HTTP_REFERER'], basename(__FILE__)) && $_SERVER['HTTP_REFERER'] !='')
                $this->txtPreviousUrl = $_SERVER['HTTP_REFERER'];


        }

        protected function Form_PreRender() {
            if (isset($_REQUEST['openid_mode'])) {
                require_once "Zend/Auth.php";
                require_once "Zend/Auth/Adapter/OpenId.php";
                require_once "Zend/Auth/Storage/NonPersistent.php";

                $auth = Zend_Auth::getInstance();
                $auth->authenticate(new Zend_Auth_Adapter_OpenId($this->txtUsername->Text));

                if ($auth->hasIdentity()) {
                    $objUser = NarroUser::LoadByUsername($auth->getIdentity());
                    require_once 'Zend/Session/Namespace.php';
                    $objNarroSession = new Zend_Session_Namespace('Narro');

                    if (!$objUser instanceof NarroUser) {
                        try {
                            $objUser = NarroUser::RegisterUser($auth->getIdentity(), $auth->getIdentity(), '');
                        }
                        catch (Exception $objEx) {
                            $this->lblMessage->ForeColor = 'red';
                            $this->lblMessage->Text = t('Failed to create an associated user for this OpenId') . $objEx->getMessage() . var_export($auth->getIdentity(), true);
                            return false;
                        }

                        $objNarroSession->User = $objUser;
                        NarroApp::Redirect(NarroLink::UserPreferences($objUser->UserId));
                    }

                    $objNarroSession->User = $objUser;

                    NarroApp::$User = $objUser;
                    if ($this->txtPreviousUrl)
                        NarroApp::Redirect($this->txtPreviousUrl);
                    else
                        NarroApp::Redirect(NarroLink::ProjectList());
                }
            }
        }

        protected function btnRecoverPassword_Click($strFormId, $strControlId, $strParameter) {
            NarroApp::Redirect('narro_recover_password.php');
        }

        protected function btnLogin_Click($strFormId, $strControlId, $strParameter) {
            if (trim($this->txtPassword->Text) == '') {
                require_once "Zend/Auth.php";
                require_once "Zend/Auth/Adapter/OpenId.php";
                require_once "Zend/Auth/Storage/NonPersistent.php";

                $this->txtUsername->Text = preg_replace('/\/$/', '', $this->txtUsername->Text);

                $status = "";
                $auth = Zend_Auth::getInstance();
                $result = $auth->authenticate(
                new Zend_Auth_Adapter_OpenId($this->txtUsername->Text));
                if ($result->isValid()) {
                    Zend_OpenId::redirect(Zend_OpenId::selfURL());
                } else {
                    $auth->clearIdentity();
                    foreach ($result->getMessages() as $message) {
                        $status .= "$message<br>\n";
                    }
                    $this->lblMessage->ForeColor = 'red';
                    $this->lblMessage->Text = 'OpenId: ' . $status;
                }
            }
            else {
                if (trim($this->txtPassword->Text) != '' && $objUser = NarroUser::LoadByUsernameAndPassword($this->txtUsername->Text, md5($this->txtPassword->Text))) {
                    require_once 'Zend/Session/Namespace.php';
                    $objNarroSession = new Zend_Session_Namespace('Narro');
                    $objNarroSession->User = $objUser;

                    NarroApp::$User = $objUser;
                    if ($this->txtPreviousUrl)
                        NarroApp::Redirect($this->txtPreviousUrl);
                    else
                        NarroApp::Redirect(NarroLink::ProjectList());
                }
                else {
                    $this->lblMessage->ForeColor = 'red';
                    $this->lblMessage->Text = t('Bad username or password');
                }
            }
        }
    }

    NarroLoginForm::Run('NarroLoginForm', 'templates/narro_login.tpl.php');
?>
