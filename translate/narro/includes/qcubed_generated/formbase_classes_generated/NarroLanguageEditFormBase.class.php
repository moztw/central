<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do Create, Edit, and Delete functionality
	 * of the NarroLanguage class.  It uses the code-generated
	 * NarroLanguageMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a NarroLanguage columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both narro_language_edit.php AND
	 * narro_language_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package Narro
	 * @subpackage FormBaseObjects
	 */
	abstract class NarroLanguageEditFormBase extends QForm {
		// Local instance of the NarroLanguageMetaControl
		/**
		 * @var NarroLanguageMetaControlGen mctNarroLanguage
		 */
		protected $mctNarroLanguage;

		// Controls for NarroLanguage's Data Fields
		protected $lblLanguageId;
		protected $txtLanguageName;
		protected $txtLanguageCode;
		protected $txtCountryCode;
		protected $txtDialectCode;
		protected $txtEncoding;
		protected $txtTextDirection;
		protected $txtSpecialCharacters;
		protected $txtPluralForm;
		protected $chkActive;

		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References

		// Other Controls
		/**
		 * @var QButton Save
		 */
		protected $btnSave;
		/**
		 * @var QButton Delete
		 */
		protected $btnDelete;
		/**
		 * @var QButton Cancel
		 */
		protected $btnCancel;

		// Create QForm Event Handlers as Needed

//		protected function Form_Exit() {}
//		protected function Form_Load() {}
//		protected function Form_PreRender() {}

		protected function Form_Run() {
			parent::Form_Run();
		}

		protected function Form_Create() {
			parent::Form_Create();

			// Use the CreateFromPathInfo shortcut (this can also be done manually using the NarroLanguageMetaControl constructor)
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctNarroLanguage = NarroLanguageMetaControl::CreateFromPathInfo($this);

			// Call MetaControl's methods to create qcontrols based on NarroLanguage's data fields
			$this->lblLanguageId = $this->mctNarroLanguage->lblLanguageId_Create();
			$this->txtLanguageName = $this->mctNarroLanguage->txtLanguageName_Create();
			$this->txtLanguageCode = $this->mctNarroLanguage->txtLanguageCode_Create();
			$this->txtCountryCode = $this->mctNarroLanguage->txtCountryCode_Create();
			$this->txtDialectCode = $this->mctNarroLanguage->txtDialectCode_Create();
			$this->txtEncoding = $this->mctNarroLanguage->txtEncoding_Create();
			$this->txtTextDirection = $this->mctNarroLanguage->txtTextDirection_Create();
			$this->txtSpecialCharacters = $this->mctNarroLanguage->txtSpecialCharacters_Create();
			$this->txtPluralForm = $this->mctNarroLanguage->txtPluralForm_Create();
			$this->chkActive = $this->mctNarroLanguage->chkActive_Create();

			// Create Buttons and Actions on this Form
			$this->btnSave = new QButton($this);
			$this->btnSave->Text = QApplication::Translate('Save');
			$this->btnSave->AddAction(new QClickEvent(), new QAjaxAction('btnSave_Click'));
			$this->btnSave->CausesValidation = true;

			$this->btnCancel = new QButton($this);
			$this->btnCancel->Text = QApplication::Translate('Cancel');
			$this->btnCancel->AddAction(new QClickEvent(), new QAjaxAction('btnCancel_Click'));

			$this->btnDelete = new QButton($this);
			$this->btnDelete->Text = QApplication::Translate('Delete');
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'), QApplication::Translate('NarroLanguage'))));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxAction('btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctNarroLanguage->EditMode;
		}

		/**
		 * This Form_Validate event handler allows you to specify any custom Form Validation rules.
		 * It will also Blink() on all invalid controls, as well as Focus() on the top-most invalid control.
		 */
		protected function Form_Validate() {
			// By default, we report the result of validation from the parent
			$blnToReturn = parent::Form_Validate();

			// Custom Validation Rules
			// TODO: Be sure to set $blnToReturn to false if any custom validation fails!
			// Check for records that may violate Unique Clauses
			if (($objNarroLanguage = NarroLanguage::LoadByLanguageName($this->txtLanguageName->Text)) && ($objNarroLanguage->LanguageId != $this->mctNarroLanguage->NarroLanguage->LanguageId )){
				$blnToReturn = false;
				$this->txtLanguageName->Warning = QApplication::Translate("Already in Use");
			}
			if (($objNarroLanguage = NarroLanguage::LoadByLanguageCode($this->txtLanguageCode->Text)) && ($objNarroLanguage->LanguageId != $this->mctNarroLanguage->NarroLanguage->LanguageId )){
				$blnToReturn = false;
				$this->txtLanguageCode->Warning = QApplication::Translate("Already in Use");
			}


			$blnFocused = false;
			foreach ($this->GetErrorControls() as $objControl) {
				// Set Focus to the top-most invalid control
				if (!$blnFocused) {
					$objControl->Focus();
					$blnFocused = true;
				}

				// Blink on ALL invalid controls
				$objControl->Blink();
			}

			return $blnToReturn;
		}

		// Button Event Handlers

		protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the NarroLanguageMetaControl
			$this->mctNarroLanguage->SaveNarroLanguage();
			$this->RedirectToListPage();
		}

		protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the NarroLanguageMetaControl
			$this->mctNarroLanguage->DeleteNarroLanguage();
			$this->RedirectToListPage();
		}

		protected function btnCancel_Click($strFormId, $strControlId, $strParameter) {
			$this->RedirectToListPage();
		}

		// Other Methods

		protected function RedirectToListPage() {
			QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/narro_language_list.php');
		}
	}
?>
