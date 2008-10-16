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

    class NarroRecoverPasswordForm extends QForm {
        protected $lblMessage;
        protected $txtUsername;
        protected $txtEmail;
        protected $btnRecoverPassword;

        protected function Form_Create() {
            $this->lblMessage = new QLabel($this);
            $this->lblMessage->HtmlEntities = false;
            $this->txtUsername = new QTextBox($this);
            $this->txtEmail = new QTextBox($this);
            $this->btnRecoverPassword = new QButton($this);
            $this->btnRecoverPassword->Text = t('Proceed');
            $this->btnRecoverPassword->PrimaryButton = true;
            $this->btnRecoverPassword->AddAction(new QClickEvent(), new QServerAction('btnRecoverPassword_Click'));

        }

        protected function btnRecoverPassword_Click($strFormId, $strControlId, $strParameter) {
            if ($this->txtUsername->Text)
                $objUser = NarroUser::QuerySingle(QQ::Equal(QQN::NarroUser()->Username, $this->txtUsername->Text));
            elseif ($this->txtEmail->Text)
                $objUser = NarroUser::QuerySingle(QQ::Equal(QQN::NarroUser()->Email, $this->txtEmail->Text));
            else {
                $this->lblMessage->ForeColor = 'red';
                $this->lblMessage->Text = t('Please enter a username or email to continue.');
                return false;
            }

            if ($objUser instanceof NarroUser) {
                if ($objUser->UserId == NarroUser::ANONYMOUS_USER_ID) {
                    $this->lblMessage->ForeColor = 'red';
                    $this->lblMessage->Text = t('Hey, the anonymous user doesn\'t have a password. What are you trying to do?');
                    return false;
                }
                $objEmailMessage = new QEmailMessage();
                $objEmailMessage->From = ADMIN_EMAIL_ADDRESS;
                $objEmailMessage->To = $objUser->Email;
                $objEmailMessage->Subject = sprintf(t('Password recovery for "%s" on "%s"'), $objUser->Username, $_SERVER['HTTP_HOST']);
                $objEmailMessage->Body = sprintf(t('Somebody, probably you, requested a password recovery for "%s" on "%s". To change your password, please follow this link: %'),
                    $objUser->Username,
                    $_SERVER['HTTP_HOST'],
                    ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on')?'https://':'http://') . $_SERVER['HTTP_HOST'] . __VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__ . sprintf('/narro_change_password.php?u=%s&h=%s', $objUser->Username, $objUser->Password)
                );
                //$objEmailMessage->Body = strip_tags(str_replace('<br />', "\n", $objEmailMessage->HtmlBody));

                try {
                    QEmailServer::Send($objEmailMessage);
                } catch (Exception $objEx) {
                    $this->lblMessage->ForeColor = 'red';
                    $this->lblMessage->Text = t('Failed to send email. This may be a server issue. Please try again later.');
                    return false;
                }

            }
            else {
                $this->lblMessage->ForeColor = 'red';
                $this->lblMessage->Text = t('Bad username or/and email');
            }
            $this->lblMessage->ForeColor = 'green';
            $this->lblMessage->Text = t('You should have a new email message with instructions. Check your spam/bulk directory too.');

        }
    }

    NarroRecoverPasswordForm::Run('NarroRecoverPasswordForm', 'templates/narro_recover_password.tpl.php');
?>
