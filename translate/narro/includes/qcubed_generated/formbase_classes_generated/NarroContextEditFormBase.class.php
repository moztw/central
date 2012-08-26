<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do Create, Edit, and Delete functionality
	 * of the NarroContext class.  It uses the code-generated
	 * NarroContextMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a NarroContext columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both narro_context_edit.php AND
	 * narro_context_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package Narro
	 * @subpackage FormBaseObjects
	 */
	abstract class NarroContextEditFormBase extends QForm {
		// Local instance of the NarroContextMetaControl
		/**
		 * @var NarroContextMetaControlGen mctNarroContext
		 */
		protected $mctNarroContext;

		// Controls for NarroContext's Data Fields
		protected $lblContextId;
		protected $lstText;
		protected $txtTextAccessKey;
		protected $txtTextCommandKey;
		protected $lstProject;
		protected $txtContext;
		protected $txtContextMd5;
		protected $txtComment;
		protected $txtCommentMd5;
		protected $lstFile;
		protected $calCreated;
		protected $calModified;
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

			// Use the CreateFromPathInfo shortcut (this can also be done manually using the NarroContextMetaControl constructor)
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctNarroContext = NarroContextMetaControl::CreateFromPathInfo($this);

			// Call MetaControl's methods to create qcontrols based on NarroContext's data fields
			$this->lblContextId = $this->mctNarroContext->lblContextId_Create();
			$this->lstText = $this->mctNarroContext->lstText_Create();
			$this->txtTextAccessKey = $this->mctNarroContext->txtTextAccessKey_Create();
			$this->txtTextCommandKey = $this->mctNarroContext->txtTextCommandKey_Create();
			$this->lstProject = $this->mctNarroContext->lstProject_Create();
			$this->txtContext = $this->mctNarroContext->txtContext_Create();
			$this->txtContextMd5 = $this->mctNarroContext->txtContextMd5_Create();
			$this->txtComment = $this->mctNarroContext->txtComment_Create();
			$this->txtCommentMd5 = $this->mctNarroContext->txtCommentMd5_Create();
			$this->lstFile = $this->mctNarroContext->lstFile_Create();
			$this->calCreated = $this->mctNarroContext->calCreated_Create();
			$this->calModified = $this->mctNarroContext->calModified_Create();
			$this->chkActive = $this->mctNarroContext->chkActive_Create();

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
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'), QApplication::Translate('NarroContext'))));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxAction('btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctNarroContext->EditMode;
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
			if (($objNarroContext = NarroContext::LoadByTextIdContextMd5FileIdCommentMd5($this->lstText->SelectedValue,$this->txtContextMd5->Text,$this->lstFile->SelectedValue,$this->txtCommentMd5->Text)) && ($objNarroContext->ContextId != $this->mctNarroContext->NarroContext->ContextId )){
				$blnToReturn = false;
				$this->lstText->Warning = QApplication::Translate("Already in Use");
				$this->txtContextMd5->Warning = QApplication::Translate("Already in Use");
				$this->lstFile->Warning = QApplication::Translate("Already in Use");
				$this->txtCommentMd5->Warning = QApplication::Translate("Already in Use");
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
			// Delegate "Save" processing to the NarroContextMetaControl
			$this->mctNarroContext->SaveNarroContext();
			$this->RedirectToListPage();
		}

		protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the NarroContextMetaControl
			$this->mctNarroContext->DeleteNarroContext();
			$this->RedirectToListPage();
		}

		protected function btnCancel_Click($strFormId, $strControlId, $strParameter) {
			$this->RedirectToListPage();
		}

		// Other Methods

		protected function RedirectToListPage() {
			QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/narro_context_list.php');
		}
	}
?>
