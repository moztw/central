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

    class NarroLanguageEditForm extends QForm {
        // General Form Variables
        protected $objNarroLanguage;
        protected $strTitleVerb;
        protected $blnEditMode;

        // Controls for NarroLanguage's Data Fields
        protected $lblLanguageId;
        protected $txtLanguageName;
        protected $txtLanguageCode;
        protected $txtCountryCode;
        protected $txtEncoding;
        protected $lstTextDirection;
        protected $txtSpecialCharacters;
        protected $txtPluralForm;

        // Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References

        // Button Actions
        protected $btnSave;
        protected $btnCancel;
        protected $btnDelete;

        protected function SetupNarroLanguage() {
            // Lookup Object PK information from Query String (if applicable)
            // Set mode to Edit or New depending on what's found
            $intLanguageId = QApplication::QueryString('l');
            if (($intLanguageId)) {
                $this->objNarroLanguage = NarroLanguage::Load(($intLanguageId));

                if (!$this->objNarroLanguage)
                    throw new Exception('Could not find a NarroLanguage object with PK arguments: ' . $intLanguageId);

                $this->strTitleVerb = QApplication::Translate('Edit');
                $this->blnEditMode = true;
            } else {
                $this->objNarroLanguage = new NarroLanguage();
                $this->strTitleVerb = QApplication::Translate('Create');
                $this->blnEditMode = false;
            }
        }

        protected function Form_Create() {
            // Call SetupNarroLanguage to either Load/Edit Existing or Create New
            $this->SetupNarroLanguage();

            // Create/Setup Controls for NarroLanguage's Data Fields
            $this->lblLanguageId_Create();
            $this->txtLanguageName_Create();
            $this->txtLanguageCode_Create();
            $this->txtCountryCode_Create();
            $this->txtEncoding_Create();
            $this->lstTextDirection_Create();
            $this->txtSpecialCharacters_Create();
            $this->txtPluralForm_Create();

            // Create/Setup ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References

            // Create/Setup Button Action controls
            $this->btnSave_Create();
            $this->btnCancel_Create();
            $this->btnDelete_Create();
        }

        // Protected Create Methods
        // Create and Setup lblLanguageId
        protected function lblLanguageId_Create() {
            $this->lblLanguageId = new QLabel($this);
            $this->lblLanguageId->Name = QApplication::Translate('Language Id');
            if ($this->blnEditMode)
                $this->lblLanguageId->Text = $this->objNarroLanguage->LanguageId;
            else
                $this->lblLanguageId->Text = 'N/A';
        }

        // Create and Setup txtLanguageName
        protected function txtLanguageName_Create() {
            $this->txtLanguageName = new QTextBox($this);
            $this->txtLanguageName->Name = QApplication::Translate('Language Name');
            $this->txtLanguageName->Text = $this->objNarroLanguage->LanguageName;
            $this->txtLanguageName->Required = true;
            $this->txtLanguageName->MaxLength = NarroLanguage::LanguageNameMaxLength;
        }

        // Create and Setup txtLanguageCode
        protected function txtLanguageCode_Create() {
            $this->txtLanguageCode = new QTextBox($this);
            $this->txtLanguageCode->Name = QApplication::Translate('Language Code');
            $this->txtLanguageCode->Text = $this->objNarroLanguage->LanguageCode;
            $this->txtLanguageCode->Required = true;
            $this->txtLanguageCode->MaxLength = NarroLanguage::LanguageCodeMaxLength;
        }

        // Create and Setup txtCountryCode
        protected function txtCountryCode_Create() {
            $this->txtCountryCode = new QTextBox($this);
            $this->txtCountryCode->Name = QApplication::Translate('Country Code');
            $this->txtCountryCode->Text = $this->objNarroLanguage->CountryCode;
            $this->txtCountryCode->Required = true;
            $this->txtCountryCode->MaxLength = NarroLanguage::CountryCodeMaxLength;
        }

        // Create and Setup txtEncoding
        protected function txtEncoding_Create() {
            $this->txtEncoding = new QTextBox($this);
            $this->txtEncoding->Name = QApplication::Translate('Encoding');
            $this->txtEncoding->Text = $this->objNarroLanguage->Encoding;
            $this->txtEncoding->Required = true;
            $this->txtEncoding->MaxLength = NarroLanguage::EncodingMaxLength;
        }

        // Create and Setup lstTextDirection
        protected function lstTextDirection_Create() {
            $this->lstTextDirection = new QListBox($this);
            $this->lstTextDirection->Name = QApplication::Translate('Text Direction');
            $this->lstTextDirection->Required = true;
            $this->lstTextDirection->AddItem(t('Left to right'), 'ltr');
            $this->lstTextDirection->AddItem(t('Right to left'), 'rtl');
        }

        // Create and Setup txtSpecialCharacters
        protected function txtSpecialCharacters_Create() {
            $this->txtSpecialCharacters = new QTextBox($this);
            $this->txtSpecialCharacters->Name = QApplication::Translate('Special Characters');
            $this->txtSpecialCharacters->Text = $this->objNarroLanguage->SpecialCharacters;
            $this->txtSpecialCharacters->MaxLength = NarroLanguage::SpecialCharactersMaxLength;
        }

        // Create and Setup txtPluralForm
        protected function txtPluralForm_Create() {
            $this->txtPluralForm = new QTextBox($this);
            $this->txtPluralForm->Name = QApplication::Translate('Plural formula');
            $this->txtPluralForm->Text = $this->objNarroLanguage->PluralForm;
            $this->txtPluralForm->Width = 800;
            $this->txtPluralForm->MaxLength = NarroLanguage::PluralFormMaxLength;
        }

        // Setup btnSave
        protected function btnSave_Create() {
            $this->btnSave = new QButton($this);
            $this->btnSave->Text = QApplication::Translate('Save');
            $this->btnSave->AddAction(new QClickEvent(), new QServerAction('btnSave_Click'));
            $this->btnSave->PrimaryButton = true;
            $this->btnSave->CausesValidation = true;
            if ($this->blnEditMode)
                $this->btnSave->Visible = QApplication::$objUser->hasPermission('Can edit language', null, QApplication::$objUser->Language->LanguageId);
            else
                $this->btnSave->Visible = QApplication::$objUser->hasPermission('Can add language');
        }

        // Setup btnCancel
        protected function btnCancel_Create() {
            $this->btnCancel = new QButton($this);
            $this->btnCancel->Text = QApplication::Translate('Cancel');
            $this->btnCancel->AddAction(new QClickEvent(), new QServerAction('btnCancel_Click'));
            $this->btnCancel->CausesValidation = false;
        }

        // Setup btnDelete
        protected function btnDelete_Create() {
            $this->btnDelete = new QButton($this);
            $this->btnDelete->Text = QApplication::Translate('Delete');
            $this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'), 'NarroLanguage')));
            $this->btnDelete->AddAction(new QClickEvent(), new QServerAction('btnDelete_Click'));
            $this->btnDelete->CausesValidation = false;
            if (!$this->blnEditMode)
                $this->btnDelete->Visible = false;
            $this->btnDelete->Visible = QApplication::$objUser->hasPermission('Can delete language', null, QApplication::$objUser->Language->LanguageId);
        }

        // Protected Update Methods
        protected function UpdateNarroLanguageFields() {
            $this->objNarroLanguage->LanguageName = $this->txtLanguageName->Text;
            $this->objNarroLanguage->LanguageCode = $this->txtLanguageCode->Text;
            $this->objNarroLanguage->CountryCode = $this->txtCountryCode->Text;
            $this->objNarroLanguage->Encoding = $this->txtEncoding->Text;
            $this->objNarroLanguage->TextDirection = $this->lstTextDirection->SelectedValue;
            $this->objNarroLanguage->SpecialCharacters = $this->txtSpecialCharacters->Text;
            $this->objNarroLanguage->PluralForm = $this->txtPluralForm->Text;
        }


        // Control ServerActions
        protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
            if ($this->blnEditMode && !QApplication::$objUser->hasPermission('Can edit language', null, QApplication::$objUser->Language->LanguageId))
                QApplication::Redirect('narro_language_list.php');

            if (!$this->blnEditMode && !QApplication::$objUser->hasPermission('Can add language'))
                QApplication::Redirect('narro_language_list.php');

            $this->UpdateNarroLanguageFields();
            $this->objNarroLanguage->Save();


            $this->RedirectToListPage();
        }

        protected function btnCancel_Click($strFormId, $strControlId, $strParameter) {
            $this->RedirectToListPage();
        }

        protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
            if (!QApplication::$objUser->hasPermission('Can delete language', null, QApplication::$objUser->Language->LanguageId))
                QApplication::Redirect('narro_language_list.php');

            $this->objNarroLanguage->Delete();

            $this->RedirectToListPage();
        }

        protected function RedirectToListPage() {
            QApplication::Redirect('narro_language_list.php');
        }
    }

    NarroLanguageEditForm::Run('NarroLanguageEditForm', 'templates/narro_language_edit.tpl.php');
?>