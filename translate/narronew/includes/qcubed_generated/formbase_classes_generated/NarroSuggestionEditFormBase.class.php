<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do Create, Edit, and Delete functionality
	 * of the NarroSuggestion class.  It uses the code-generated
	 * NarroSuggestionMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a NarroSuggestion columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both narro_suggestion_edit.php AND
	 * narro_suggestion_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package Narro
	 * @subpackage FormBaseObjects
	 */
	abstract class NarroSuggestionEditFormBase extends QForm {
		// Local instance of the NarroSuggestionMetaControl
		/**
		 * @var NarroSuggestionMetaControlGen mctNarroSuggestion
		 */
		protected $mctNarroSuggestion;

		// Controls for NarroSuggestion's Data Fields
		protected $lblSuggestionId;
		protected $lstUser;
		protected $lstText;
		protected $lstLanguage;
		protected $txtSuggestionValue;
		protected $txtSuggestionValueMd5;
		protected $txtSuggestionCharCount;
		protected $txtSuggestionWordCount;
		protected $chkHasComments;
		protected $chkIsImported;
		protected $calCreated;
		protected $calModified;

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

			// Use the CreateFromPathInfo shortcut (this can also be done manually using the NarroSuggestionMetaControl constructor)
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctNarroSuggestion = NarroSuggestionMetaControl::CreateFromPathInfo($this);

			// Call MetaControl's methods to create qcontrols based on NarroSuggestion's data fields
			$this->lblSuggestionId = $this->mctNarroSuggestion->lblSuggestionId_Create();
			$this->lstUser = $this->mctNarroSuggestion->lstUser_Create();
			$this->lstText = $this->mctNarroSuggestion->lstText_Create();
			$this->lstLanguage = $this->mctNarroSuggestion->lstLanguage_Create();
			$this->txtSuggestionValue = $this->mctNarroSuggestion->txtSuggestionValue_Create();
			$this->txtSuggestionValueMd5 = $this->mctNarroSuggestion->txtSuggestionValueMd5_Create();
			$this->txtSuggestionCharCount = $this->mctNarroSuggestion->txtSuggestionCharCount_Create();
			$this->txtSuggestionWordCount = $this->mctNarroSuggestion->txtSuggestionWordCount_Create();
			$this->chkHasComments = $this->mctNarroSuggestion->chkHasComments_Create();
			$this->chkIsImported = $this->mctNarroSuggestion->chkIsImported_Create();
			$this->calCreated = $this->mctNarroSuggestion->calCreated_Create();
			$this->calModified = $this->mctNarroSuggestion->calModified_Create();

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
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'), QApplication::Translate('NarroSuggestion'))));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxAction('btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctNarroSuggestion->EditMode;
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
			if (($objNarroSuggestion = NarroSuggestion::LoadByTextIdLanguageIdSuggestionValueMd5($this->lstText->SelectedValue,$this->lstLanguage->SelectedValue,$this->txtSuggestionValueMd5->Text)) && ($objNarroSuggestion->SuggestionId != $this->mctNarroSuggestion->NarroSuggestion->SuggestionId )){
				$blnToReturn = false;
				$this->lstText->Warning = QApplication::Translate("Already in Use");
				$this->lstLanguage->Warning = QApplication::Translate("Already in Use");
				$this->txtSuggestionValueMd5->Warning = QApplication::Translate("Already in Use");
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
			// Delegate "Save" processing to the NarroSuggestionMetaControl
			$this->mctNarroSuggestion->SaveNarroSuggestion();
			$this->RedirectToListPage();
		}

		protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the NarroSuggestionMetaControl
			$this->mctNarroSuggestion->DeleteNarroSuggestion();
			$this->RedirectToListPage();
		}

		protected function btnCancel_Click($strFormId, $strControlId, $strParameter) {
			$this->RedirectToListPage();
		}

		// Other Methods

		protected function RedirectToListPage() {
			QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/narro_suggestion_list.php');
		}
	}
?>
