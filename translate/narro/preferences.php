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
    require_once(dirname(__FILE__) . '/configuration/prepend.inc.php');

    class NarroUserPreferencesPanel extends QPanel {
        protected $lblMessage;
        protected $btnSave;
        protected $btnCancel;
        protected $txtPreviousUrl;

        protected $arrControls;

        protected $objUser;

        public function __construct($objUser, $objParentObject, $strControlId = null) {
            // Call the Parent
            try {
                parent::__construct($objParentObject, $strControlId);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            $this->objUser = $objUser;
            
            if (QApplication::GetUserId() == NarroUser::ANONYMOUS_USER_ID) {
                QApplication::Redirect(NarroLink::ProjectList());
                exit;
            }

            if (isset($_SERVER['HTTP_REFERER']) && !strstr($_SERVER['HTTP_REFERER'], 'login.php') && strstr($_SERVER['HTTP_REFERER'], __HTTP_URL__) && !strstr($_SERVER['HTTP_REFERER'], basename(__FILE__)) && $_SERVER['HTTP_REFERER'] !='')
                $this->txtPreviousUrl = $_SERVER['HTTP_REFERER'];

            $this->lblMessage = new QLabel($this);
            $this->lblMessage->Text = t('Here you can set your preferences.');
            $this->lblMessage->DisplayStyle = QDisplayStyle::Block;

            $this->btnSave = new QButton($this);
            $this->btnSave->Text = t('Save');
            $this->btnSave->PrimaryButton = true;
            $this->btnSave->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnSave_Click'));

            $this->btnCancel = new QButton($this);
            $this->btnCancel->Text = t('Cancel');
            $this->btnCancel->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnCancel_Click'));

            if ($this->objUser->Data == '' && $this->objUser->UserId <> NarroUser::ANONYMOUS_USER_ID) {
                $this->lblMessage->Text = t('You don\'t have any preferences set. Please set your preferences and save them.');
                $this->lblMessage->ForeColor = 'red';
            }
        }

        protected function GetControlHtml() {
            $strOutput = $this->lblMessage->Render(false) . '<br /><table style="border: 1px solid #DDDDDD" cellpadding="4" cellspacing="0" width="100%">';

            foreach(NarroUser::$AvailablePreferences as $strName=>$arrPref) {
                switch($arrPref['type']) {
                    case 'number':
                            $txtNumber = new QIntegerTextBox($this);
                            $txtNumber->Name = $strName;
                            $txtNumber->Minimum = 5;
                            $txtNumber->Maximum = 100;
                            $txtNumber->MaxLength = 3;
                            $txtNumber->Width = 50;
                            $txtNumber->Text = $this->objUser->GetPreferenceValueByName($strName);
                            $strOutput .= sprintf('<tr class="datagrid_row datagrid_even" style="height:40px"><td>%s:</td><td>%s</td><td style="font-size:-1">%s</td></tr>', t($strName), $txtNumber->RenderWithError(false), t($arrPref['description']));
                            $this->arrControls[$strName] = $txtNumber;
                            break;
                    case 'text':
                            $txtTextPref = new QTextBox($this);
                            $txtTextPref->Name = $strName;
                            $txtTextPref->Text = $this->objUser->GetPreferenceValueByName($strName);

                            if ($strName == 'Special characters') {
                                $strSelect = sprintf('<select onchange="document.getElementById(\'%s\').value+=this.options[this.selectedIndex].value;">', $txtTextPref->ControlId);
                                foreach(NarroDiacriticsPanel::$arrEntities as $strEntityName=>$strEntityChar)
                                    $strSelect .= sprintf('<option value=" %s">%s (%s)', $strEntityName, $strEntityChar, $strEntityName);
                                $strSelect .= '</select>';
                                $arrPref['description'] = t($arrPref['description']) . $strSelect;
                                $txtTextPref->Width = 400;
                            }
                            elseif ($strName == 'Other languages') {
                                $strSelect = sprintf('<select onchange="document.getElementById(\'%s\').value+= \' \' + this.options[this.selectedIndex].value;">', $txtTextPref->ControlId);
                                foreach(NarroLanguage::QueryArray(QQ::All(), QQ::Clause(QQ::OrderBy(QQN::NarroLanguage()->LanguageName))) as $objLanguage)
                                    $strSelect .= sprintf('<option value="%s">%s (%s)', $objLanguage->LanguageCode, t($objLanguage->LanguageName), $objLanguage->LanguageCode);
                                $strSelect .= '</select>';
                                $arrPref['description'] = t($arrPref['description']) . $strSelect;
                                $txtTextPref->Width = 400;
                            }

                            $strOutput .= sprintf('<tr class="datagrid_row datagrid_even" style="height:40px"><td>%s:</td><td>%s</td><td style="font-size:-1">%s</td></tr>', t($strName), $txtTextPref->RenderWithError(false), $arrPref['description']);
                            $this->arrControls[$strName] = $txtTextPref;
                            break;
                    case 'option':
                            $lstOption = new QListBox($this);
                            $lstOption->Name = $strName;
                            if ($strName == 'Language') {
                                $arrLanguages = NarroLanguage::LoadAllActive(QQ::Clause(QQ::OrderBy(QQN::NarroLanguage()->LanguageName)));
                                foreach($arrLanguages as $objLanguage) {
                                    $lstOption->AddItem(t($objLanguage->LanguageName), $objLanguage->LanguageCode, ($objLanguage->LanguageCode == $this->objUser->GetPreferenceValueByName($strName)));
                                }
                            }
                            elseif ($strName == 'Application language') {
                                $arrLanguages = NarroLanguage::QueryArray(QQ::All(), QQ::Clause(QQ::OrderBy(QQN::NarroLanguage()->LanguageName)));
                                foreach($arrLanguages as $objLanguage) {
                                    $lstOption->AddItem(t($objLanguage->LanguageName), $objLanguage->LanguageCode, ($objLanguage->LanguageCode == $this->objUser->GetPreferenceValueByName($strName)));
                                }
                            }
                            else
                                foreach($arrPref['values'] as $strValue) {
                                    $lstOption->AddItem(t($strValue), $strValue, ($strValue == $this->objUser->GetPreferenceValueByName($strName)));
                                }
                            $strOutput .= sprintf('<tr class="datagrid_row datagrid_even" style="height:40px"><td>%s:</td><td>%s</td><td style="font-size:-1">%s</td></tr>', t($strName), $lstOption->RenderWithError(false), t($arrPref['description']));
                            $this->arrControls[$strName] = $lstOption;
                            break;
                }
            }

            $strOutput .= '</table><br />';
            $strOutput .= $this->btnCancel->Render(false) . ' ' . $this->btnSave->Render(false);

            if ($this->txtPreviousUrl)
                $strOutput .= ' ' . sprintf(t('Click <a href="%s">here</a> to return to the page you were.'), $this->txtPreviousUrl);

            $this->strText = $strOutput;

            return parent::GetControlHtml();
        }

        public function btnSave_Click($strFormId, $strControlId, $strParameter) {
            foreach($this->arrControls as $strName=>$objControl) {
                switch(NarroUser::$AvailablePreferences[$strName]['type']) {
                    case 'number':
                            $this->objUser->SetPreferenceValueByName($strName, $objControl->Text);
                            break;
                    case 'text':
                            $this->objUser->SetPreferenceValueByName($strName,  $objControl->Text);
                            break;
                    case 'option':
                            $this->objUser->SetPreferenceValueByName($strName, $objControl->SelectedValue);
                            break;
                }
            }

            $this->objUser->Data = serialize($this->objUser->Preferences);
            
            QApplication::$Session->User = $this->objUser;

            /**
             * Don't save the preferences for the anonymous user in the database
             */
            if ($this->objUser->UserId == 0 && (!is_numeric(QApplication::QueryString('u')) || !QApplication::HasPermission('Can manage users')))
                return true;

            try {
                $this->objUser->Save();
                $this->lblMessage->Text = t('Your preferences were saved successfuly.');
                $this->lblMessage->ForeColor = 'green';
            } catch( Exception $objEx) {
                $this->lblMessage->Text = t('An error occurred while trying to save your preferences.');
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

    class NarroUserPreferencesForm extends NarroForm {
        protected $pnlTab;
        protected $pnlPreferences;
        protected $objUser;

        protected function Form_Create() {
            parent::Form_Create();
            if (QApplication::GetUserId() != QApplication::QueryString('u') && QApplication::HasPermissionForThisLang('Can manage users', null))
                $this->objUser = NarroUser::Load(QApplication::QueryString('u'));

            if (!$this->objUser instanceof NarroUser)
                $this->objUser = QApplication::$User;

            $this->pnlBreadcrumb->setElements(NarroLink::ProjectList(t('Projects')), NarroLink::UserList('', t('Users')), $this->objUser->RealName);
            
            $this->pnlTab = new QTabs($this);
                        
            new QPanel($this->pnlTab);
            $arrHeaders[] = NarroLink::UserProfile($this->objUser->UserId, t('Profile'));
            
            if (QApplication::GetUserId() == $this->objUser->UserId || QApplication::HasPermissionForThisLang('Can manage users', null)) {
                $this->pnlPreferences = new NarroUserPreferencesPanel($this->objUser, $this->pnlTab);
                $arrHeaders[] = NarroLink::UserPreferences($this->objUser->UserId, t('Preferences'));
                $this->pnlTab->Selected = count($arrHeaders) - 1;
            }
            
            new QPanel($this->pnlTab);
            $arrHeaders[] = NarroLink::UserRole($this->objUser->UserId, t('Roles'));
            
            if (QApplication::GetUserId() == $this->objUser->UserId || QApplication::HasPermissionForThisLang('Can manage users', null)) {
                new QPanel($this->pnlTab);
                $arrHeaders[] = NarroLink::UserEdit($this->objUser->UserId, t('Edit'));
            }
            
            $this->pnlTab->Headers = $arrHeaders;
        }
    }

    NarroUserPreferencesForm::Run('NarroUserPreferencesForm');
?>
