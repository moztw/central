<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do Create, Edit, and Delete functionality
	 * of the NarroFile class.  It uses the code-generated
	 * NarroFileMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a NarroFile columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both narro_file_edit.php AND
	 * narro_file_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package Narro
	 * @subpackage FormBaseObjects
	 */
	abstract class NarroFileEditFormBase extends QForm {
		// Local instance of the NarroFileMetaControl
		/**
		 * @var NarroFileMetaControlGen mctNarroFile
		 */
		protected $mctNarroFile;

		// Controls for NarroFile's Data Fields
		protected $lblFileId;
		protected $txtFileName;
		protected $txtFilePath;
		protected $txtFileMd5;
		protected $lstParent;
		protected $lstType;
		protected $lstProject;
		protected $chkActive;
		protected $calCreated;
		protected $calModified;
		protected $txtHeader;

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

			// Use the CreateFromPathInfo shortcut (this can also be done manually using the NarroFileMetaControl constructor)
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctNarroFile = NarroFileMetaControl::CreateFromPathInfo($this);

			// Call MetaControl's methods to create qcontrols based on NarroFile's data fields
			$this->lblFileId = $this->mctNarroFile->lblFileId_Create();
			$this->txtFileName = $this->mctNarroFile->txtFileName_Create();
			$this->txtFilePath = $this->mctNarroFile->txtFilePath_Create();
			$this->txtFileMd5 = $this->mctNarroFile->txtFileMd5_Create();
			$this->lstParent = $this->mctNarroFile->lstParent_Create();
			$this->lstType = $this->mctNarroFile->lstType_Create();
			$this->lstProject = $this->mctNarroFile->lstProject_Create();
			$this->chkActive = $this->mctNarroFile->chkActive_Create();
			$this->calCreated = $this->mctNarroFile->calCreated_Create();
			$this->calModified = $this->mctNarroFile->calModified_Create();
			$this->txtHeader = $this->mctNarroFile->txtHeader_Create();

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
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'), QApplication::Translate('NarroFile'))));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxAction('btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctNarroFile->EditMode;
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
			if (($objNarroFile = NarroFile::LoadByFilePathProjectId($this->txtFilePath->Text,$this->lstProject->SelectedValue)) && ($objNarroFile->FileId != $this->mctNarroFile->NarroFile->FileId )){
				$blnToReturn = false;
				$this->txtFilePath->Warning = QApplication::Translate("Already in Use");
				$this->lstProject->Warning = QApplication::Translate("Already in Use");
			}
			if (($objNarroFile = NarroFile::LoadByFileNameParentId($this->txtFileName->Text,$this->lstParent->SelectedValue)) && ($objNarroFile->FileId != $this->mctNarroFile->NarroFile->FileId )){
				$blnToReturn = false;
				$this->txtFileName->Warning = QApplication::Translate("Already in Use");
				$this->lstParent->Warning = QApplication::Translate("Already in Use");
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
			// Delegate "Save" processing to the NarroFileMetaControl
			$this->mctNarroFile->SaveNarroFile();
			$this->RedirectToListPage();
		}

		protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the NarroFileMetaControl
			$this->mctNarroFile->DeleteNarroFile();
			$this->RedirectToListPage();
		}

		protected function btnCancel_Click($strFormId, $strControlId, $strParameter) {
			$this->RedirectToListPage();
		}

		// Other Methods

		protected function RedirectToListPage() {
			QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/narro_file_list.php');
		}
	}
?>
