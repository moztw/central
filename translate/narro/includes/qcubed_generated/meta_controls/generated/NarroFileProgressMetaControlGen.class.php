<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the NarroFileProgress class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single NarroFileProgress object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a NarroFileProgressMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package Narro
	 * @subpackage MetaControls
	 * @property-read NarroFileProgress $NarroFileProgress the actual NarroFileProgress data class being edited
	 * @property QLabel $FileProgressIdControl
	 * @property-read QLabel $FileProgressIdLabel
	 * @property QListBox $FileIdControl
	 * @property-read QLabel $FileIdLabel
	 * @property QListBox $LanguageIdControl
	 * @property-read QLabel $LanguageIdLabel
	 * @property QTextBox $FileMd5Control
	 * @property-read QLabel $FileMd5Label
	 * @property QTextBox $HeaderControl
	 * @property-read QLabel $HeaderLabel
	 * @property QIntegerTextBox $TotalTextCountControl
	 * @property-read QLabel $TotalTextCountLabel
	 * @property QIntegerTextBox $ApprovedTextCountControl
	 * @property-read QLabel $ApprovedTextCountLabel
	 * @property QIntegerTextBox $FuzzyTextCountControl
	 * @property-read QLabel $FuzzyTextCountLabel
	 * @property QIntegerTextBox $ProgressPercentControl
	 * @property-read QLabel $ProgressPercentLabel
	 * @property QCheckBox $ExportControl
	 * @property-read QLabel $ExportLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class NarroFileProgressMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var NarroFileProgress objNarroFileProgress
		 * @access protected
		 */
		protected $objNarroFileProgress;
		/**
		 * @var QForm|QControl objParentObject
		 * @access protected
		 */
		protected $objParentObject;
		/**
		 * @var string strTitleVerb
		 * @access protected
		 */
		protected $strTitleVerb;
		/**
		 * @var boolean blnEditMode
		 * @access protected
		 */
		protected $blnEditMode;

		// Controls that allow the editing of NarroFileProgress's individual data fields
		/**
		 * @var QLabel lblFileProgressId
		 * @access protected
		 */
		protected $lblFileProgressId;
		/**
		 * @var QListBox lstFile
		 * @access protected
		 */
		protected $lstFile;
		/**
		 * @var QListBox lstLanguage
		 * @access protected
		 */
		protected $lstLanguage;
		/**
		 * @var QTextBox txtFileMd5
		 * @access protected
		 */
		protected $txtFileMd5;
		/**
		 * @var QTextBox txtHeader
		 * @access protected
		 */
		protected $txtHeader;
		/**
		 * @var QIntegerTextBox txtTotalTextCount
		 * @access protected
		 */
		protected $txtTotalTextCount;
		/**
		 * @var QIntegerTextBox txtApprovedTextCount
		 * @access protected
		 */
		protected $txtApprovedTextCount;
		/**
		 * @var QIntegerTextBox txtFuzzyTextCount
		 * @access protected
		 */
		protected $txtFuzzyTextCount;
		/**
		 * @var QIntegerTextBox txtProgressPercent
		 * @access protected
		 */
		protected $txtProgressPercent;
		/**
		 * @var QCheckBox chkExport
		 * @access protected
		 */
		protected $chkExport;

		// Controls that allow the viewing of NarroFileProgress's individual data fields
		/**
		 * @var QLabel lblFileId
		 * @access protected
		 */
		protected $lblFileId;
		/**
		 * @var QLabel lblLanguageId
		 * @access protected
		 */
		protected $lblLanguageId;
		/**
		 * @var QLabel lblFileMd5
		 * @access protected
		 */
		protected $lblFileMd5;
		/**
		 * @var QLabel lblHeader
		 * @access protected
		 */
		protected $lblHeader;
		/**
		 * @var QLabel lblTotalTextCount
		 * @access protected
		 */
		protected $lblTotalTextCount;
		/**
		 * @var QLabel lblApprovedTextCount
		 * @access protected
		 */
		protected $lblApprovedTextCount;
		/**
		 * @var QLabel lblFuzzyTextCount
		 * @access protected
		 */
		protected $lblFuzzyTextCount;
		/**
		 * @var QLabel lblProgressPercent
		 * @access protected
		 */
		protected $lblProgressPercent;
		/**
		 * @var QLabel lblExport
		 * @access protected
		 */
		protected $lblExport;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * NarroFileProgressMetaControl to edit a single NarroFileProgress object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single NarroFileProgress object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroFileProgressMetaControl
		 * @param NarroFileProgress $objNarroFileProgress new or existing NarroFileProgress object
		 */
		 public function __construct($objParentObject, NarroFileProgress $objNarroFileProgress) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this NarroFileProgressMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked NarroFileProgress object
			$this->objNarroFileProgress = $objNarroFileProgress;

			// Figure out if we're Editing or Creating New
			if ($this->objNarroFileProgress->__Restored) {
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			} else {
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
		 }

		/**
		 * Static Helper Method to Create using PK arguments
		 * You must pass in the PK arguments on an object to load, or leave it blank to create a new one.
		 * If you want to load via QueryString or PathInfo, use the CreateFromQueryString or CreateFromPathInfo
		 * static helper methods.  Finally, specify a CreateType to define whether or not we are only allowed to
		 * edit, or if we are also allowed to create a new one, etc.
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroFileProgressMetaControl
		 * @param integer $intFileProgressId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing NarroFileProgress object creation - defaults to CreateOrEdit
 		 * @return NarroFileProgressMetaControl
		 */
		public static function Create($objParentObject, $intFileProgressId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intFileProgressId)) {
				$objNarroFileProgress = NarroFileProgress::Load($intFileProgressId);

				// NarroFileProgress was found -- return it!
				if ($objNarroFileProgress)
					return new NarroFileProgressMetaControl($objParentObject, $objNarroFileProgress);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a NarroFileProgress object with PK arguments: ' . $intFileProgressId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new NarroFileProgressMetaControl($objParentObject, new NarroFileProgress());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroFileProgressMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NarroFileProgress object creation - defaults to CreateOrEdit
		 * @return NarroFileProgressMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intFileProgressId = QApplication::PathInfo(0);
			return NarroFileProgressMetaControl::Create($objParentObject, $intFileProgressId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroFileProgressMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NarroFileProgress object creation - defaults to CreateOrEdit
		 * @return NarroFileProgressMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intFileProgressId = QApplication::QueryString('intFileProgressId');
			return NarroFileProgressMetaControl::Create($objParentObject, $intFileProgressId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblFileProgressId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblFileProgressId_Create($strControlId = null) {
			$this->lblFileProgressId = new QLabel($this->objParentObject, $strControlId);
			$this->lblFileProgressId->Name = QApplication::Translate('File Progress Id');
			if ($this->blnEditMode)
				$this->lblFileProgressId->Text = $this->objNarroFileProgress->FileProgressId;
			else
				$this->lblFileProgressId->Text = 'N/A';
			return $this->lblFileProgressId;
		}

		/**
		 * Create and setup QListBox lstFile
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstFile_Create($strControlId = null) {
			$this->lstFile = new QListBox($this->objParentObject, $strControlId);
			$this->lstFile->Name = QApplication::Translate('File');
			$this->lstFile->Required = true;
			if (!$this->blnEditMode)
				$this->lstFile->AddItem(QApplication::Translate('- Select One -'), null);
			$objFileArray = NarroFile::LoadAll();
			if ($objFileArray) foreach ($objFileArray as $objFile) {
				$objListItem = new QListItem($objFile->__toString(), $objFile->FileId);
				if (($this->objNarroFileProgress->File) && ($this->objNarroFileProgress->File->FileId == $objFile->FileId))
					$objListItem->Selected = true;
				$this->lstFile->AddItem($objListItem);
			}
			return $this->lstFile;
		}

		/**
		 * Create and setup QLabel lblFileId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblFileId_Create($strControlId = null) {
			$this->lblFileId = new QLabel($this->objParentObject, $strControlId);
			$this->lblFileId->Name = QApplication::Translate('File');
			$this->lblFileId->Text = ($this->objNarroFileProgress->File) ? $this->objNarroFileProgress->File->__toString() : null;
			$this->lblFileId->Required = true;
			return $this->lblFileId;
		}

		/**
		 * Create and setup QListBox lstLanguage
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstLanguage_Create($strControlId = null) {
			$this->lstLanguage = new QListBox($this->objParentObject, $strControlId);
			$this->lstLanguage->Name = QApplication::Translate('Language');
			$this->lstLanguage->Required = true;
			if (!$this->blnEditMode)
				$this->lstLanguage->AddItem(QApplication::Translate('- Select One -'), null);
			$objLanguageArray = NarroLanguage::LoadAll();
			if ($objLanguageArray) foreach ($objLanguageArray as $objLanguage) {
				$objListItem = new QListItem($objLanguage->__toString(), $objLanguage->LanguageId);
				if (($this->objNarroFileProgress->Language) && ($this->objNarroFileProgress->Language->LanguageId == $objLanguage->LanguageId))
					$objListItem->Selected = true;
				$this->lstLanguage->AddItem($objListItem);
			}
			return $this->lstLanguage;
		}

		/**
		 * Create and setup QLabel lblLanguageId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblLanguageId_Create($strControlId = null) {
			$this->lblLanguageId = new QLabel($this->objParentObject, $strControlId);
			$this->lblLanguageId->Name = QApplication::Translate('Language');
			$this->lblLanguageId->Text = ($this->objNarroFileProgress->Language) ? $this->objNarroFileProgress->Language->__toString() : null;
			$this->lblLanguageId->Required = true;
			return $this->lblLanguageId;
		}

		/**
		 * Create and setup QTextBox txtFileMd5
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtFileMd5_Create($strControlId = null) {
			$this->txtFileMd5 = new QTextBox($this->objParentObject, $strControlId);
			$this->txtFileMd5->Name = QApplication::Translate('File Md 5');
			$this->txtFileMd5->Text = $this->objNarroFileProgress->FileMd5;
			$this->txtFileMd5->MaxLength = NarroFileProgress::FileMd5MaxLength;
			return $this->txtFileMd5;
		}

		/**
		 * Create and setup QLabel lblFileMd5
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblFileMd5_Create($strControlId = null) {
			$this->lblFileMd5 = new QLabel($this->objParentObject, $strControlId);
			$this->lblFileMd5->Name = QApplication::Translate('File Md 5');
			$this->lblFileMd5->Text = $this->objNarroFileProgress->FileMd5;
			return $this->lblFileMd5;
		}

		/**
		 * Create and setup QTextBox txtHeader
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtHeader_Create($strControlId = null) {
			$this->txtHeader = new QTextBox($this->objParentObject, $strControlId);
			$this->txtHeader->Name = QApplication::Translate('Header');
			$this->txtHeader->Text = $this->objNarroFileProgress->Header;
			$this->txtHeader->TextMode = QTextMode::MultiLine;
			return $this->txtHeader;
		}

		/**
		 * Create and setup QLabel lblHeader
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblHeader_Create($strControlId = null) {
			$this->lblHeader = new QLabel($this->objParentObject, $strControlId);
			$this->lblHeader->Name = QApplication::Translate('Header');
			$this->lblHeader->Text = $this->objNarroFileProgress->Header;
			return $this->lblHeader;
		}

		/**
		 * Create and setup QIntegerTextBox txtTotalTextCount
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtTotalTextCount_Create($strControlId = null) {
			$this->txtTotalTextCount = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtTotalTextCount->Name = QApplication::Translate('Total Text Count');
			$this->txtTotalTextCount->Text = $this->objNarroFileProgress->TotalTextCount;
			$this->txtTotalTextCount->Required = true;
			return $this->txtTotalTextCount;
		}

		/**
		 * Create and setup QLabel lblTotalTextCount
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblTotalTextCount_Create($strControlId = null, $strFormat = null) {
			$this->lblTotalTextCount = new QLabel($this->objParentObject, $strControlId);
			$this->lblTotalTextCount->Name = QApplication::Translate('Total Text Count');
			$this->lblTotalTextCount->Text = $this->objNarroFileProgress->TotalTextCount;
			$this->lblTotalTextCount->Required = true;
			$this->lblTotalTextCount->Format = $strFormat;
			return $this->lblTotalTextCount;
		}

		/**
		 * Create and setup QIntegerTextBox txtApprovedTextCount
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtApprovedTextCount_Create($strControlId = null) {
			$this->txtApprovedTextCount = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtApprovedTextCount->Name = QApplication::Translate('Approved Text Count');
			$this->txtApprovedTextCount->Text = $this->objNarroFileProgress->ApprovedTextCount;
			$this->txtApprovedTextCount->Required = true;
			return $this->txtApprovedTextCount;
		}

		/**
		 * Create and setup QLabel lblApprovedTextCount
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblApprovedTextCount_Create($strControlId = null, $strFormat = null) {
			$this->lblApprovedTextCount = new QLabel($this->objParentObject, $strControlId);
			$this->lblApprovedTextCount->Name = QApplication::Translate('Approved Text Count');
			$this->lblApprovedTextCount->Text = $this->objNarroFileProgress->ApprovedTextCount;
			$this->lblApprovedTextCount->Required = true;
			$this->lblApprovedTextCount->Format = $strFormat;
			return $this->lblApprovedTextCount;
		}

		/**
		 * Create and setup QIntegerTextBox txtFuzzyTextCount
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtFuzzyTextCount_Create($strControlId = null) {
			$this->txtFuzzyTextCount = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtFuzzyTextCount->Name = QApplication::Translate('Fuzzy Text Count');
			$this->txtFuzzyTextCount->Text = $this->objNarroFileProgress->FuzzyTextCount;
			$this->txtFuzzyTextCount->Required = true;
			return $this->txtFuzzyTextCount;
		}

		/**
		 * Create and setup QLabel lblFuzzyTextCount
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblFuzzyTextCount_Create($strControlId = null, $strFormat = null) {
			$this->lblFuzzyTextCount = new QLabel($this->objParentObject, $strControlId);
			$this->lblFuzzyTextCount->Name = QApplication::Translate('Fuzzy Text Count');
			$this->lblFuzzyTextCount->Text = $this->objNarroFileProgress->FuzzyTextCount;
			$this->lblFuzzyTextCount->Required = true;
			$this->lblFuzzyTextCount->Format = $strFormat;
			return $this->lblFuzzyTextCount;
		}

		/**
		 * Create and setup QIntegerTextBox txtProgressPercent
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtProgressPercent_Create($strControlId = null) {
			$this->txtProgressPercent = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtProgressPercent->Name = QApplication::Translate('Progress Percent');
			$this->txtProgressPercent->Text = $this->objNarroFileProgress->ProgressPercent;
			$this->txtProgressPercent->Required = true;
			return $this->txtProgressPercent;
		}

		/**
		 * Create and setup QLabel lblProgressPercent
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblProgressPercent_Create($strControlId = null, $strFormat = null) {
			$this->lblProgressPercent = new QLabel($this->objParentObject, $strControlId);
			$this->lblProgressPercent->Name = QApplication::Translate('Progress Percent');
			$this->lblProgressPercent->Text = $this->objNarroFileProgress->ProgressPercent;
			$this->lblProgressPercent->Required = true;
			$this->lblProgressPercent->Format = $strFormat;
			return $this->lblProgressPercent;
		}

		/**
		 * Create and setup QCheckBox chkExport
		 * @param string $strControlId optional ControlId to use
		 * @return QCheckBox
		 */
		public function chkExport_Create($strControlId = null) {
			$this->chkExport = new QCheckBox($this->objParentObject, $strControlId);
			$this->chkExport->Name = QApplication::Translate('Export');
			$this->chkExport->Checked = $this->objNarroFileProgress->Export;
			return $this->chkExport;
		}

		/**
		 * Create and setup QLabel lblExport
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblExport_Create($strControlId = null) {
			$this->lblExport = new QLabel($this->objParentObject, $strControlId);
			$this->lblExport->Name = QApplication::Translate('Export');
			$this->lblExport->Text = ($this->objNarroFileProgress->Export) ? QApplication::Translate('Yes') : QApplication::Translate('No');
			return $this->lblExport;
		}



		/**
		 * Refresh this MetaControl with Data from the local NarroFileProgress object.
		 * @param boolean $blnReload reload NarroFileProgress from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objNarroFileProgress->Reload();

			if ($this->lblFileProgressId) if ($this->blnEditMode) $this->lblFileProgressId->Text = $this->objNarroFileProgress->FileProgressId;

			if ($this->lstFile) {
					$this->lstFile->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstFile->AddItem(QApplication::Translate('- Select One -'), null);
				$objFileArray = NarroFile::LoadAll();
				if ($objFileArray) foreach ($objFileArray as $objFile) {
					$objListItem = new QListItem($objFile->__toString(), $objFile->FileId);
					if (($this->objNarroFileProgress->File) && ($this->objNarroFileProgress->File->FileId == $objFile->FileId))
						$objListItem->Selected = true;
					$this->lstFile->AddItem($objListItem);
				}
			}
			if ($this->lblFileId) $this->lblFileId->Text = ($this->objNarroFileProgress->File) ? $this->objNarroFileProgress->File->__toString() : null;

			if ($this->lstLanguage) {
					$this->lstLanguage->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstLanguage->AddItem(QApplication::Translate('- Select One -'), null);
				$objLanguageArray = NarroLanguage::LoadAll();
				if ($objLanguageArray) foreach ($objLanguageArray as $objLanguage) {
					$objListItem = new QListItem($objLanguage->__toString(), $objLanguage->LanguageId);
					if (($this->objNarroFileProgress->Language) && ($this->objNarroFileProgress->Language->LanguageId == $objLanguage->LanguageId))
						$objListItem->Selected = true;
					$this->lstLanguage->AddItem($objListItem);
				}
			}
			if ($this->lblLanguageId) $this->lblLanguageId->Text = ($this->objNarroFileProgress->Language) ? $this->objNarroFileProgress->Language->__toString() : null;

			if ($this->txtFileMd5) $this->txtFileMd5->Text = $this->objNarroFileProgress->FileMd5;
			if ($this->lblFileMd5) $this->lblFileMd5->Text = $this->objNarroFileProgress->FileMd5;

			if ($this->txtHeader) $this->txtHeader->Text = $this->objNarroFileProgress->Header;
			if ($this->lblHeader) $this->lblHeader->Text = $this->objNarroFileProgress->Header;

			if ($this->txtTotalTextCount) $this->txtTotalTextCount->Text = $this->objNarroFileProgress->TotalTextCount;
			if ($this->lblTotalTextCount) $this->lblTotalTextCount->Text = $this->objNarroFileProgress->TotalTextCount;

			if ($this->txtApprovedTextCount) $this->txtApprovedTextCount->Text = $this->objNarroFileProgress->ApprovedTextCount;
			if ($this->lblApprovedTextCount) $this->lblApprovedTextCount->Text = $this->objNarroFileProgress->ApprovedTextCount;

			if ($this->txtFuzzyTextCount) $this->txtFuzzyTextCount->Text = $this->objNarroFileProgress->FuzzyTextCount;
			if ($this->lblFuzzyTextCount) $this->lblFuzzyTextCount->Text = $this->objNarroFileProgress->FuzzyTextCount;

			if ($this->txtProgressPercent) $this->txtProgressPercent->Text = $this->objNarroFileProgress->ProgressPercent;
			if ($this->lblProgressPercent) $this->lblProgressPercent->Text = $this->objNarroFileProgress->ProgressPercent;

			if ($this->chkExport) $this->chkExport->Checked = $this->objNarroFileProgress->Export;
			if ($this->lblExport) $this->lblExport->Text = ($this->objNarroFileProgress->Export) ? QApplication::Translate('Yes') : QApplication::Translate('No');

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC NARROFILEPROGRESS OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's NarroFileProgress instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveNarroFileProgress() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstFile) $this->objNarroFileProgress->FileId = $this->lstFile->SelectedValue;
				if ($this->lstLanguage) $this->objNarroFileProgress->LanguageId = $this->lstLanguage->SelectedValue;
				if ($this->txtFileMd5) $this->objNarroFileProgress->FileMd5 = $this->txtFileMd5->Text;
				if ($this->txtHeader) $this->objNarroFileProgress->Header = $this->txtHeader->Text;
				if ($this->txtTotalTextCount) $this->objNarroFileProgress->TotalTextCount = $this->txtTotalTextCount->Text;
				if ($this->txtApprovedTextCount) $this->objNarroFileProgress->ApprovedTextCount = $this->txtApprovedTextCount->Text;
				if ($this->txtFuzzyTextCount) $this->objNarroFileProgress->FuzzyTextCount = $this->txtFuzzyTextCount->Text;
				if ($this->txtProgressPercent) $this->objNarroFileProgress->ProgressPercent = $this->txtProgressPercent->Text;
				if ($this->chkExport) $this->objNarroFileProgress->Export = $this->chkExport->Checked;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the NarroFileProgress object
				$this->objNarroFileProgress->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's NarroFileProgress instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteNarroFileProgress() {
			$this->objNarroFileProgress->Delete();
		}



		///////////////////////////////////////////////
		// PUBLIC GETTERS and SETTERS
		///////////////////////////////////////////////

		/**
		 * Override method to perform a property "Get"
		 * This will get the value of $strName
		 *
		 * @param string $strName Name of the property to get
		 * @return mixed
		 */
		public function __get($strName) {
			switch ($strName) {
				// General MetaControlVariables
				case 'NarroFileProgress': return $this->objNarroFileProgress;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to NarroFileProgress fields -- will be created dynamically if not yet created
				case 'FileProgressIdControl':
					if (!$this->lblFileProgressId) return $this->lblFileProgressId_Create();
					return $this->lblFileProgressId;
				case 'FileProgressIdLabel':
					if (!$this->lblFileProgressId) return $this->lblFileProgressId_Create();
					return $this->lblFileProgressId;
				case 'FileIdControl':
					if (!$this->lstFile) return $this->lstFile_Create();
					return $this->lstFile;
				case 'FileIdLabel':
					if (!$this->lblFileId) return $this->lblFileId_Create();
					return $this->lblFileId;
				case 'LanguageIdControl':
					if (!$this->lstLanguage) return $this->lstLanguage_Create();
					return $this->lstLanguage;
				case 'LanguageIdLabel':
					if (!$this->lblLanguageId) return $this->lblLanguageId_Create();
					return $this->lblLanguageId;
				case 'FileMd5Control':
					if (!$this->txtFileMd5) return $this->txtFileMd5_Create();
					return $this->txtFileMd5;
				case 'FileMd5Label':
					if (!$this->lblFileMd5) return $this->lblFileMd5_Create();
					return $this->lblFileMd5;
				case 'HeaderControl':
					if (!$this->txtHeader) return $this->txtHeader_Create();
					return $this->txtHeader;
				case 'HeaderLabel':
					if (!$this->lblHeader) return $this->lblHeader_Create();
					return $this->lblHeader;
				case 'TotalTextCountControl':
					if (!$this->txtTotalTextCount) return $this->txtTotalTextCount_Create();
					return $this->txtTotalTextCount;
				case 'TotalTextCountLabel':
					if (!$this->lblTotalTextCount) return $this->lblTotalTextCount_Create();
					return $this->lblTotalTextCount;
				case 'ApprovedTextCountControl':
					if (!$this->txtApprovedTextCount) return $this->txtApprovedTextCount_Create();
					return $this->txtApprovedTextCount;
				case 'ApprovedTextCountLabel':
					if (!$this->lblApprovedTextCount) return $this->lblApprovedTextCount_Create();
					return $this->lblApprovedTextCount;
				case 'FuzzyTextCountControl':
					if (!$this->txtFuzzyTextCount) return $this->txtFuzzyTextCount_Create();
					return $this->txtFuzzyTextCount;
				case 'FuzzyTextCountLabel':
					if (!$this->lblFuzzyTextCount) return $this->lblFuzzyTextCount_Create();
					return $this->lblFuzzyTextCount;
				case 'ProgressPercentControl':
					if (!$this->txtProgressPercent) return $this->txtProgressPercent_Create();
					return $this->txtProgressPercent;
				case 'ProgressPercentLabel':
					if (!$this->lblProgressPercent) return $this->lblProgressPercent_Create();
					return $this->lblProgressPercent;
				case 'ExportControl':
					if (!$this->chkExport) return $this->chkExport_Create();
					return $this->chkExport;
				case 'ExportLabel':
					if (!$this->lblExport) return $this->lblExport_Create();
					return $this->lblExport;
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		/**
		 * Override method to perform a property "Set"
		 * This will set the property $strName to be $mixValue
		 *
		 * @param string $strName Name of the property to set
		 * @param string $mixValue New value of the property
		 * @return mixed
		 */
		public function __set($strName, $mixValue) {
			try {
				switch ($strName) {
					// Controls that point to NarroFileProgress fields
					case 'FileProgressIdControl':
						return ($this->lblFileProgressId = QType::Cast($mixValue, 'QControl'));
					case 'FileIdControl':
						return ($this->lstFile = QType::Cast($mixValue, 'QControl'));
					case 'LanguageIdControl':
						return ($this->lstLanguage = QType::Cast($mixValue, 'QControl'));
					case 'FileMd5Control':
						return ($this->txtFileMd5 = QType::Cast($mixValue, 'QControl'));
					case 'HeaderControl':
						return ($this->txtHeader = QType::Cast($mixValue, 'QControl'));
					case 'TotalTextCountControl':
						return ($this->txtTotalTextCount = QType::Cast($mixValue, 'QControl'));
					case 'ApprovedTextCountControl':
						return ($this->txtApprovedTextCount = QType::Cast($mixValue, 'QControl'));
					case 'FuzzyTextCountControl':
						return ($this->txtFuzzyTextCount = QType::Cast($mixValue, 'QControl'));
					case 'ProgressPercentControl':
						return ($this->txtProgressPercent = QType::Cast($mixValue, 'QControl'));
					case 'ExportControl':
						return ($this->chkExport = QType::Cast($mixValue, 'QControl'));
					default:
						return parent::__set($strName, $mixValue);
				}
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
	}
?>