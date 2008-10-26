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
    require_once('includes/prepend.inc.php');

    class NarroUserPreferencesPanel extends QPanel {
        protected $lblMessage;
        protected $btnSave;
        protected $btnCancel;
        protected $txtPreviousUrl;

        protected $arrControls;
        protected $objUser;

        public function __construct($objParentObject, $strControlId = null) {
            // Call the Parent
            try {
                parent::__construct($objParentObject, $strControlId);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            if (isset($_SERVER['HTTP_REFERER']) && !strstr($_SERVER['HTTP_REFERER'], 'narro_login.php') && strstr($_SERVER['HTTP_REFERER'], __HTTP_URL__) && !strstr($_SERVER['HTTP_REFERER'], basename(__FILE__)) && $_SERVER['HTTP_REFERER'] !='')
                $this->txtPreviousUrl = $_SERVER['HTTP_REFERER'];

            $this->lblMessage = new QLabel($this);

            $this->btnSave = new QButton($this);
            $this->btnSave->Text = t('Save');
            $this->btnSave->PrimaryButton = true;
            $this->btnSave->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnSave_Click'));

            $this->btnCancel = new QButton($this);
            $this->btnCancel->Text = t('Cancel');
            $this->btnCancel->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnCancel_Click'));

            if (QApplication::$objUser->UserId != QApplication::QueryString('u') && QApplication::$objUser->hasPermission('Can manage users')) {
                $this->objUser = NarroUser::LoadByUserId(QApplication::QueryString('u'));
                $this->lblMessage->ForeColor = 'red';
                $this->lblMessage->Text = t('Warning, you are editing another user\'s preferences!');
            }
            else {
                $this->objUser = QApplication::$objUser;
            }

        }

        protected function GetControlHtml() {
            $strOutput = $this->lblMessage->Render(false) . '<br /><table style="border: 1px solid #DDDDDD" cellspacing="0">';

            foreach(QApplication::$arrPreferences as $strName=>$arrPref) {
                switch($arrPref['type']) {
                    case 'number':
                            $txtNumber = new QIntegerTextBox($this);
                            $txtNumber->Name = $strName;
                            $txtNumber->Minimum = 5;
                            $txtNumber->Maximum = 100;
                            $txtNumber->MaxLength = 3;
                            $txtNumber->Width = 50;
                            $txtNumber->Text = $this->objUser->getPreferenceValueByName($strName);
                            $strOutput .= sprintf('<tr class="datagrid_row datagrid_even" style="height:40px"><td>%s:</td><td>%s</td><td style="font-size:-1">%s</td></tr>', t($strName), $txtNumber->RenderWithError(false), t($arrPref['description']));
                            $this->arrControls[$strName] = $txtNumber;
                            break;
                    case 'text':
                            $txtTextPref = new QTextBox($this);
                            $txtTextPref->Name = $strName;
                            $txtTextPref->Text = $this->objUser->getPreferenceValueByName($strName);

                            if ($strName == 'Special characters') {
                                $strSelect = sprintf('<select onchange="document.getElementById(\'%s\').value+=this.options[this.selectedIndex].value;">', $txtTextPref->ControlId);
                                foreach(NarroDiacriticsPanel::$arrEntities as $strEntityName=>$strEntityChar)
                                    $strSelect .= sprintf('<option value=" %s">%s (%s)', $strEntityName, $strEntityChar, $strEntityName);
                                $strSelect .= '</select>';
                                $arrPref['description'] .= $strSelect;
                                $txtTextPref->Width = 400;
                            }

                            $strOutput .= sprintf('<tr class="datagrid_row datagrid_even" style="height:40px"><td>%s:</td><td>%s</td><td style="font-size:-1">%s</td></tr>', t($strName), $txtTextPref->RenderWithError(false), t($arrPref['description']));
                            $this->arrControls[$strName] = $txtTextPref;
                            break;
                    case 'option':
                            $lstOption = new QListBox($this);
                            $lstOption->Name = $strName;
                            if ($strName == 'Language') {
                                $arrLanguages = NarroLanguage::LoadAll(QQ::Clause(QQ::OrderBy(QQN::NarroLanguage()->LanguageName)));
                                foreach($arrLanguages as $objLanguage) {
                                    $lstOption->AddItem(t($objLanguage->LanguageName), $objLanguage->LanguageCode, ($objLanguage->LanguageCode == $this->objUser->getPreferenceValueByName($strName)));
                                }
                            }
                            elseif ($strName == 'Application language') {
                                $arrLanguages = NarroLanguage::LoadAll(QQ::Clause(QQ::OrderBy(QQN::NarroLanguage()->LanguageName)));
                                foreach($arrLanguages as $objLanguage) {
                                    $lstOption->AddItem(t($objLanguage->LanguageName), $objLanguage->LanguageId, ($objLanguage->LanguageId == $this->objUser->getPreferenceValueByName($strName)));
                                }
                            }
                            else
                                foreach($arrPref['values'] as $strValue) {
                                    $lstOption->AddItem(t($strValue), $strValue, ($strValue == $this->objUser->getPreferenceValueByName($strName)));
                                }
                            $strOutput .= sprintf('<tr class="datagrid_row datagrid_even" style="height:40px"><td>%s:</td><td>%s</td><td style="font-size:-1">%s</td></tr>', t($strName), $lstOption->RenderWithError(false), t($arrPref['description']));
                            $this->arrControls[$strName] = $lstOption;
                            break;
                }
            }

            $strOutput .= '<tr><td colspan="3" style="text-align:right">' . $this->btnCancel->Render(false) . ' ' . $this->btnSave->Render(false) . '</td></tr></table>';
            if ($this->txtPreviousUrl)
                $strOutput .= '<p>' . sprintf(t('Click <a href="%s">here</a> to return to the page you were.'), $this->txtPreviousUrl) . '</p>';
            return $strOutput;
        }

        public function btnSave_Click($strFormId, $strControlId, $strParameter) {
            foreach($this->arrControls as $strName=>$objControl) {
                switch(QApplication::$arrPreferences[$strName]['type']) {
                    case 'number':
                            $this->objUser->setPreferenceValueByName($strName, $objControl->Text);
                            break;
                    case 'text':
                            $this->objUser->setPreferenceValueByName($strName,  $objControl->Text);
                            break;
                    case 'option':
                            $this->objUser->setPreferenceValueByName($strName, $objControl->SelectedValue);
                            break;
                }
            }

            $this->objUser->Data = serialize($this->objUser->Preferences);

            if (QApplication::QueryString('u') == $this->objUser->UserId) {
                require_once __INCLUDES__ . '/Zend/Session/Namespace.php';
                $objNarroSession = new Zend_Session_Namespace('Narro');
                $objNarroSession->User = $this->objUser;
            }

            /**
             * Don't save the preferences for the anonymous user in the database
             */
            if ($this->objUser->UserId == 0 && (!is_numeric(QApplication::QueryString('u')) || !QApplication::$objUser->hasPermission('Can manage users')))
                return true;

            try {
                $this->objUser->Save();
                if (QApplication::$objUser->UserId != QApplication::QueryString('u') && QApplication::$objUser->hasPermission('Can manage users'))
                    $this->lblMessage->Text = sprintf(t('Preferences for %s were saved successfuly.'), $this->objUser->Username);
                else
                    $this->lblMessage->Text = t('Your preferences were saved successfuly.');
                $this->lblMessage->ForeColor = 'green';
            } catch( Exception $objEx) {
                $this->lblMessage->Text = t('An error occured while trying to save your preferences.');
                $this->lblMessage->ForeColor = 'red';
            }
        }

        public function btnCancel_Click($strFormId, $strControlId, $strParameter) {
            QApplication::Redirect(NarroLink::ProjectList());
        }

        public function __get($strName) {
            switch ($strName) {
                case 'User': return $this->objUser;

                default:
                    try {
                        return parent::__get($strName);
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }
            }
        }

    }

    class NarroUserPreferencesForm extends QForm {
        protected $pnlPreferences;

        protected function Form_Create() {
            parent::Form_Create();

            $this->pnlPreferences = new NarroUserPreferencesPanel($this);
        }
    }

    NarroUserPreferencesForm::Run('NarroUserPreferencesForm', 'templates/narro_user_preferences.tpl.php');
?>
