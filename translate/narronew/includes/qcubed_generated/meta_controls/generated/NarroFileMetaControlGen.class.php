<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the NarroFile class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single NarroFile object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a NarroFileMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package Narro
	 * @subpackage MetaControls
	 * @property-read NarroFile $NarroFile the actual NarroFile data class being edited
	 * @property QLabel $FileIdControl
	 * @property-read QLabel $FileIdLabel
	 * @property QTextBox $FileNameControl
	 * @property-read QLabel $FileNameLabel
	 * @property QTextBox $FilePathControl
	 * @property-read QLabel $FilePathLabel
	 * @property QTextBox $FileMd5Control
	 * @property-read QLabel $FileMd5Label
	 * @property QListBox $ParentIdControl
	 * @property-read QLabel $ParentIdLabel
	 * @property QListBox $TypeIdControl
	 * @property-read QLabel $TypeIdLabel
	 * @property QListBox $ProjectIdControl
	 * @property-read QLabel $ProjectIdLabel
	 * @property QCheckBox $ActiveControl
	 * @property-read QLabel $ActiveLabel
	 * @property QDateTimePicker $CreatedControl
	 * @property-read QLabel $CreatedLabel
	 * @property QDateTimePicker $ModifiedControl
	 * @property-read QLabel $ModifiedLabel
	 * @property QTextBox $HeaderControl
	 * @property-read QLabel $HeaderLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class NarroFileMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var NarroFile objNarroFile
		 * @access protected
		 */
		protected $objNarroFile;
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

		// Controls that allow the editing of NarroFile's individual data fields
		/**
		 * @var QLabel lblFileId
		 * @access protected
		 */
		protected $lblFileId;
		/**
		 * @var QTextBox txtFileName
		 * @access protected
		 */
		protected $txtFileName;
		/**
		 * @var QTextBox txtFilePath
		 * @access protected
		 */
		protected $txtFilePath;
		/**
		 * @var QTextBox txtFileMd5
		 * @access protected
		 */
		protected $txtFileMd5;
		/**
		 * @var QListBox lstParent
		 * @access protected
		 */
		protected $lstParent;
		/**
		 * @var QListBox lstType
		 * @access protected
		 */
		protected $lstType;
		/**
		 * @var QListBox lstProject
		 * @access protected
		 */
		protected $lstProject;
		/**
		 * @var QCheckBox chkActive
		 * @access protected
		 */
		protected $chkActive;
		/**
		 * @var QDateTimePicker calCreated
		 * @access protected
		 */
		protected $calCreated;
		/**
		 * @var QDateTimePicker calModified
		 * @access protected
		 */
		protected $calModified;
		/**
		 * @var QTextBox txtHeader
		 * @access protected
		 */
		protected $txtHeader;

		// Controls that allow the viewing of NarroFile's individual data fields
		/**
		 * @var QLabel lblFileName
		 * @access protected
		 */
		protected $lblFileName;
		/**
		 * @var QLabel lblFilePath
		 * @access protected
		 */
		protected $lblFilePath;
		/**
		 * @var QLabel lblFileMd5
		 * @access protected
		 */
		protected $lblFileMd5;
		/**
		 * @var QLabel lblParentId
		 * @access protected
		 */
		protected $lblParentId;
		/**
		 * @var QLabel lblTypeId
		 * @access protected
		 */
		protected $lblTypeId;
		/**
		 * @var QLabel lblProjectId
		 * @access protected
		 */
		protected $lblProjectId;
		/**
		 * @var QLabel lblActive
		 * @access protected
		 */
		protected $lblActive;
		/**
		 * @var QLabel lblCreated
		 * @access protected
		 */
		protected $lblCreated;
		/**
		 * @var QLabel lblModified
		 * @access protected
		 */
		protected $lblModified;
		/**
		 * @var QLabel lblHeader
		 * @access protected
		 */
		protected $lblHeader;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * NarroFileMetaControl to edit a single NarroFile object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single NarroFile object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroFileMetaControl
		 * @param NarroFile $objNarroFile new or existing NarroFile object
		 */
		 public function __construct($objParentObject, NarroFile $objNarroFile) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this NarroFileMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked NarroFile object
			$this->objNarroFile = $objNarroFile;

			// Figure out if we're Editing or Creating New
			if ($this->objNarroFile->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroFileMetaControl
		 * @param integer $intFileId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing NarroFile object creation - defaults to CreateOrEdit
 		 * @return NarroFileMetaControl
		 */
		public static function Create($objParentObject, $intFileId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intFileId)) {
				$objNarroFile = NarroFile::Load($intFileId);

				// NarroFile was found -- return it!
				if ($objNarroFile)
					return new NarroFileMetaControl($objParentObject, $objNarroFile);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a NarroFile object with PK arguments: ' . $intFileId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new NarroFileMetaControl($objParentObject, new NarroFile());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroFileMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NarroFile object creation - defaults to CreateOrEdit
		 * @return NarroFileMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intFileId = QApplication::PathInfo(0);
			return NarroFileMetaControl::Create($objParentObject, $intFileId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroFileMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NarroFile object creation - defaults to CreateOrEdit
		 * @return NarroFileMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intFileId = QApplication::QueryString('intFileId');
			return NarroFileMetaControl::Create($objParentObject, $intFileId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblFileId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblFileId_Create($strControlId = null) {
			$this->lblFileId = new QLabel($this->objParentObject, $strControlId);
			$this->lblFileId->Name = QApplication::Translate('File Id');
			if ($this->blnEditMode)
				$this->lblFileId->Text = $this->objNarroFile->FileId;
			else
				$this->lblFileId->Text = 'N/A';
			return $this->lblFileId;
		}

		/**
		 * Create and setup QTextBox txtFileName
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtFileName_Create($strControlId = null) {
			$this->txtFileName = new QTextBox($this->objParentObject, $strControlId);
			$this->txtFileName->Name = QApplication::Translate('File Name');
			$this->txtFileName->Text = $this->objNarroFile->FileName;
			$this->txtFileName->Required = true;
			$this->txtFileName->MaxLength = NarroFile::FileNameMaxLength;
			return $this->txtFileName;
		}

		/**
		 * Create and setup QLabel lblFileName
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblFileName_Create($strControlId = null) {
			$this->lblFileName = new QLabel($this->objParentObject, $strControlId);
			$this->lblFileName->Name = QApplication::Translate('File Name');
			$this->lblFileName->Text = $this->objNarroFile->FileName;
			$this->lblFileName->Required = true;
			return $this->lblFileName;
		}

		/**
		 * Create and setup QTextBox txtFilePath
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtFilePath_Create($strControlId = null) {
			$this->txtFilePath = new QTextBox($this->objParentObject, $strControlId);
			$this->txtFilePath->Name = QApplication::Translate('File Path');
			$this->txtFilePath->Text = $this->objNarroFile->FilePath;
			$this->txtFilePath->Required = true;
			$this->txtFilePath->MaxLength = NarroFile::FilePathMaxLength;
			return $this->txtFilePath;
		}

		/**
		 * Create and setup QLabel lblFilePath
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblFilePath_Create($strControlId = null) {
			$this->lblFilePath = new QLabel($this->objParentObject, $strControlId);
			$this->lblFilePath->Name = QApplication::Translate('File Path');
			$this->lblFilePath->Text = $this->objNarroFile->FilePath;
			$this->lblFilePath->Required = true;
			return $this->lblFilePath;
		}

		/**
		 * Create and setup QTextBox txtFileMd5
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtFileMd5_Create($strControlId = null) {
			$this->txtFileMd5 = new QTextBox($this->objParentObject, $strControlId);
			$this->txtFileMd5->Name = QApplication::Translate('File Md 5');
			$this->txtFileMd5->Text = $this->objNarroFile->FileMd5;
			$this->txtFileMd5->MaxLength = NarroFile::FileMd5MaxLength;
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
			$this->lblFileMd5->Text = $this->objNarroFile->FileMd5;
			return $this->lblFileMd5;
		}

		/**
		 * Create and setup QListBox lstParent
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstParent_Create($strControlId = null) {
			$this->lstParent = new QListBox($this->objParentObject, $strControlId);
			$this->lstParent->Name = QApplication::Translate('Parent');
			$this->lstParent->AddItem(QApplication::Translate('- Select One -'), null);
			$objParentArray = NarroFile::LoadAll();
			if ($objParentArray) foreach ($objParentArray as $objParent) {
				$objListItem = new QListItem($objParent->__toString(), $objParent->FileId);
				if (($this->objNarroFile->Parent) && ($this->objNarroFile->Parent->FileId == $objParent->FileId))
					$objListItem->Selected = true;
				$this->lstParent->AddItem($objListItem);
			}
			return $this->lstParent;
		}

		/**
		 * Create and setup QLabel lblParentId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblParentId_Create($strControlId = null) {
			$this->lblParentId = new QLabel($this->objParentObject, $strControlId);
			$this->lblParentId->Name = QApplication::Translate('Parent');
			$this->lblParentId->Text = ($this->objNarroFile->Parent) ? $this->objNarroFile->Parent->__toString() : null;
			return $this->lblParentId;
		}

		/**
		 * Create and setup QListBox lstType
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstType_Create($strControlId = null) {
			$this->lstType = new QListBox($this->objParentObject, $strControlId);
			$this->lstType->Name = QApplication::Translate('Type');
			$this->lstType->Required = true;
			foreach (NarroFileType::$NameArray as $intId => $strValue)
				$this->lstType->AddItem(new QListItem($strValue, $intId, $this->objNarroFile->TypeId == $intId));
			return $this->lstType;
		}

		/**
		 * Create and setup QLabel lblTypeId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTypeId_Create($strControlId = null) {
			$this->lblTypeId = new QLabel($this->objParentObject, $strControlId);
			$this->lblTypeId->Name = QApplication::Translate('Type');
			$this->lblTypeId->Text = ($this->objNarroFile->TypeId) ? NarroFileType::$NameArray[$this->objNarroFile->TypeId] : null;
			$this->lblTypeId->Required = true;
			return $this->lblTypeId;
		}

		/**
		 * Create and setup QListBox lstProject
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstProject_Create($strControlId = null) {
			$this->lstProject = new QListBox($this->objParentObject, $strControlId);
			$this->lstProject->Name = QApplication::Translate('Project');
			$this->lstProject->Required = true;
			if (!$this->blnEditMode)
				$this->lstProject->AddItem(QApplication::Translate('- Select One -'), null);
			$objProjectArray = NarroProject::LoadAll();
			if ($objProjectArray) foreach ($objProjectArray as $objProject) {
				$objListItem = new QListItem($objProject->__toString(), $objProject->ProjectId);
				if (($this->objNarroFile->Project) && ($this->objNarroFile->Project->ProjectId == $objProject->ProjectId))
					$objListItem->Selected = true;
				$this->lstProject->AddItem($objListItem);
			}
			return $this->lstProject;
		}

		/**
		 * Create and setup QLabel lblProjectId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblProjectId_Create($strControlId = null) {
			$this->lblProjectId = new QLabel($this->objParentObject, $strControlId);
			$this->lblProjectId->Name = QApplication::Translate('Project');
			$this->lblProjectId->Text = ($this->objNarroFile->Project) ? $this->objNarroFile->Project->__toString() : null;
			$this->lblProjectId->Required = true;
			return $this->lblProjectId;
		}

		/**
		 * Create and setup QCheckBox chkActive
		 * @param string $strControlId optional ControlId to use
		 * @return QCheckBox
		 */
		public function chkActive_Create($strControlId = null) {
			$this->chkActive = new QCheckBox($this->objParentObject, $strControlId);
			$this->chkActive->Name = QApplication::Translate('Active');
			$this->chkActive->Checked = $this->objNarroFile->Active;
			return $this->chkActive;
		}

		/**
		 * Create and setup QLabel lblActive
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblActive_Create($strControlId = null) {
			$this->lblActive = new QLabel($this->objParentObject, $strControlId);
			$this->lblActive->Name = QApplication::Translate('Active');
			$this->lblActive->Text = ($this->objNarroFile->Active) ? QApplication::Translate('Yes') : QApplication::Translate('No');
			return $this->lblActive;
		}

		/**
		 * Create and setup QDateTimePicker calCreated
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calCreated_Create($strControlId = null) {
			$this->calCreated = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calCreated->Name = QApplication::Translate('Created');
			$this->calCreated->DateTime = $this->objNarroFile->Created;
			$this->calCreated->DateTimePickerType = QDateTimePickerType::DateTime;
			$this->calCreated->Required = true;
			return $this->calCreated;
		}

		/**
		 * Create and setup QLabel lblCreated
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblCreated_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblCreated = new QLabel($this->objParentObject, $strControlId);
			$this->lblCreated->Name = QApplication::Translate('Created');
			$this->strCreatedDateTimeFormat = $strDateTimeFormat;
			$this->lblCreated->Text = sprintf($this->objNarroFile->Created) ? $this->objNarroFile->Created->qFormat($this->strCreatedDateTimeFormat) : null;
			$this->lblCreated->Required = true;
			return $this->lblCreated;
		}

		protected $strCreatedDateTimeFormat;


		/**
		 * Create and setup QDateTimePicker calModified
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calModified_Create($strControlId = null) {
			$this->calModified = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calModified->Name = QApplication::Translate('Modified');
			$this->calModified->DateTime = $this->objNarroFile->Modified;
			$this->calModified->DateTimePickerType = QDateTimePickerType::DateTime;
			return $this->calModified;
		}

		/**
		 * Create and setup QLabel lblModified
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblModified_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblModified = new QLabel($this->objParentObject, $strControlId);
			$this->lblModified->Name = QApplication::Translate('Modified');
			$this->strModifiedDateTimeFormat = $strDateTimeFormat;
			$this->lblModified->Text = sprintf($this->objNarroFile->Modified) ? $this->objNarroFile->Modified->qFormat($this->strModifiedDateTimeFormat) : null;
			return $this->lblModified;
		}

		protected $strModifiedDateTimeFormat;


		/**
		 * Create and setup QTextBox txtHeader
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtHeader_Create($strControlId = null) {
			$this->txtHeader = new QTextBox($this->objParentObject, $strControlId);
			$this->txtHeader->Name = QApplication::Translate('Header');
			$this->txtHeader->Text = $this->objNarroFile->Header;
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
			$this->lblHeader->Text = $this->objNarroFile->Header;
			return $this->lblHeader;
		}



		/**
		 * Refresh this MetaControl with Data from the local NarroFile object.
		 * @param boolean $blnReload reload NarroFile from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objNarroFile->Reload();

			if ($this->lblFileId) if ($this->blnEditMode) $this->lblFileId->Text = $this->objNarroFile->FileId;

			if ($this->txtFileName) $this->txtFileName->Text = $this->objNarroFile->FileName;
			if ($this->lblFileName) $this->lblFileName->Text = $this->objNarroFile->FileName;

			if ($this->txtFilePath) $this->txtFilePath->Text = $this->objNarroFile->FilePath;
			if ($this->lblFilePath) $this->lblFilePath->Text = $this->objNarroFile->FilePath;

			if ($this->txtFileMd5) $this->txtFileMd5->Text = $this->objNarroFile->FileMd5;
			if ($this->lblFileMd5) $this->lblFileMd5->Text = $this->objNarroFile->FileMd5;

			if ($this->lstParent) {
					$this->lstParent->RemoveAllItems();
				$this->lstParent->AddItem(QApplication::Translate('- Select One -'), null);
				$objParentArray = NarroFile::LoadAll();
				if ($objParentArray) foreach ($objParentArray as $objParent) {
					$objListItem = new QListItem($objParent->__toString(), $objParent->FileId);
					if (($this->objNarroFile->Parent) && ($this->objNarroFile->Parent->FileId == $objParent->FileId))
						$objListItem->Selected = true;
					$this->lstParent->AddItem($objListItem);
				}
			}
			if ($this->lblParentId) $this->lblParentId->Text = ($this->objNarroFile->Parent) ? $this->objNarroFile->Parent->__toString() : null;

			if ($this->lstType) $this->lstType->SelectedValue = $this->objNarroFile->TypeId;
			if ($this->lblTypeId) $this->lblTypeId->Text = ($this->objNarroFile->TypeId) ? NarroFileType::$NameArray[$this->objNarroFile->TypeId] : null;

			if ($this->lstProject) {
					$this->lstProject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstProject->AddItem(QApplication::Translate('- Select One -'), null);
				$objProjectArray = NarroProject::LoadAll();
				if ($objProjectArray) foreach ($objProjectArray as $objProject) {
					$objListItem = new QListItem($objProject->__toString(), $objProject->ProjectId);
					if (($this->objNarroFile->Project) && ($this->objNarroFile->Project->ProjectId == $objProject->ProjectId))
						$objListItem->Selected = true;
					$this->lstProject->AddItem($objListItem);
				}
			}
			if ($this->lblProjectId) $this->lblProjectId->Text = ($this->objNarroFile->Project) ? $this->objNarroFile->Project->__toString() : null;

			if ($this->chkActive) $this->chkActive->Checked = $this->objNarroFile->Active;
			if ($this->lblActive) $this->lblActive->Text = ($this->objNarroFile->Active) ? QApplication::Translate('Yes') : QApplication::Translate('No');

			if ($this->calCreated) $this->calCreated->DateTime = $this->objNarroFile->Created;
			if ($this->lblCreated) $this->lblCreated->Text = sprintf($this->objNarroFile->Created) ? $this->objNarroFile->Created->qFormat($this->strCreatedDateTimeFormat) : null;

			if ($this->calModified) $this->calModified->DateTime = $this->objNarroFile->Modified;
			if ($this->lblModified) $this->lblModified->Text = sprintf($this->objNarroFile->Modified) ? $this->objNarroFile->Modified->qFormat($this->strModifiedDateTimeFormat) : null;

			if ($this->txtHeader) $this->txtHeader->Text = $this->objNarroFile->Header;
			if ($this->lblHeader) $this->lblHeader->Text = $this->objNarroFile->Header;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC NARROFILE OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's NarroFile instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveNarroFile() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtFileName) $this->objNarroFile->FileName = $this->txtFileName->Text;
				if ($this->txtFilePath) $this->objNarroFile->FilePath = $this->txtFilePath->Text;
				if ($this->txtFileMd5) $this->objNarroFile->FileMd5 = $this->txtFileMd5->Text;
				if ($this->lstParent) $this->objNarroFile->ParentId = $this->lstParent->SelectedValue;
				if ($this->lstType) $this->objNarroFile->TypeId = $this->lstType->SelectedValue;
				if ($this->lstProject) $this->objNarroFile->ProjectId = $this->lstProject->SelectedValue;
				if ($this->chkActive) $this->objNarroFile->Active = $this->chkActive->Checked;
				if ($this->calCreated) $this->objNarroFile->Created = $this->calCreated->DateTime;
				if ($this->calModified) $this->objNarroFile->Modified = $this->calModified->DateTime;
				if ($this->txtHeader) $this->objNarroFile->Header = $this->txtHeader->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the NarroFile object
				$this->objNarroFile->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's NarroFile instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteNarroFile() {
			$this->objNarroFile->Delete();
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
				case 'NarroFile': return $this->objNarroFile;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to NarroFile fields -- will be created dynamically if not yet created
				case 'FileIdControl':
					if (!$this->lblFileId) return $this->lblFileId_Create();
					return $this->lblFileId;
				case 'FileIdLabel':
					if (!$this->lblFileId) return $this->lblFileId_Create();
					return $this->lblFileId;
				case 'FileNameControl':
					if (!$this->txtFileName) return $this->txtFileName_Create();
					return $this->txtFileName;
				case 'FileNameLabel':
					if (!$this->lblFileName) return $this->lblFileName_Create();
					return $this->lblFileName;
				case 'FilePathControl':
					if (!$this->txtFilePath) return $this->txtFilePath_Create();
					return $this->txtFilePath;
				case 'FilePathLabel':
					if (!$this->lblFilePath) return $this->lblFilePath_Create();
					return $this->lblFilePath;
				case 'FileMd5Control':
					if (!$this->txtFileMd5) return $this->txtFileMd5_Create();
					return $this->txtFileMd5;
				case 'FileMd5Label':
					if (!$this->lblFileMd5) return $this->lblFileMd5_Create();
					return $this->lblFileMd5;
				case 'ParentIdControl':
					if (!$this->lstParent) return $this->lstParent_Create();
					return $this->lstParent;
				case 'ParentIdLabel':
					if (!$this->lblParentId) return $this->lblParentId_Create();
					return $this->lblParentId;
				case 'TypeIdControl':
					if (!$this->lstType) return $this->lstType_Create();
					return $this->lstType;
				case 'TypeIdLabel':
					if (!$this->lblTypeId) return $this->lblTypeId_Create();
					return $this->lblTypeId;
				case 'ProjectIdControl':
					if (!$this->lstProject) return $this->lstProject_Create();
					return $this->lstProject;
				case 'ProjectIdLabel':
					if (!$this->lblProjectId) return $this->lblProjectId_Create();
					return $this->lblProjectId;
				case 'ActiveControl':
					if (!$this->chkActive) return $this->chkActive_Create();
					return $this->chkActive;
				case 'ActiveLabel':
					if (!$this->lblActive) return $this->lblActive_Create();
					return $this->lblActive;
				case 'CreatedControl':
					if (!$this->calCreated) return $this->calCreated_Create();
					return $this->calCreated;
				case 'CreatedLabel':
					if (!$this->lblCreated) return $this->lblCreated_Create();
					return $this->lblCreated;
				case 'ModifiedControl':
					if (!$this->calModified) return $this->calModified_Create();
					return $this->calModified;
				case 'ModifiedLabel':
					if (!$this->lblModified) return $this->lblModified_Create();
					return $this->lblModified;
				case 'HeaderControl':
					if (!$this->txtHeader) return $this->txtHeader_Create();
					return $this->txtHeader;
				case 'HeaderLabel':
					if (!$this->lblHeader) return $this->lblHeader_Create();
					return $this->lblHeader;
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
					// Controls that point to NarroFile fields
					case 'FileIdControl':
						return ($this->lblFileId = QType::Cast($mixValue, 'QControl'));
					case 'FileNameControl':
						return ($this->txtFileName = QType::Cast($mixValue, 'QControl'));
					case 'FilePathControl':
						return ($this->txtFilePath = QType::Cast($mixValue, 'QControl'));
					case 'FileMd5Control':
						return ($this->txtFileMd5 = QType::Cast($mixValue, 'QControl'));
					case 'ParentIdControl':
						return ($this->lstParent = QType::Cast($mixValue, 'QControl'));
					case 'TypeIdControl':
						return ($this->lstType = QType::Cast($mixValue, 'QControl'));
					case 'ProjectIdControl':
						return ($this->lstProject = QType::Cast($mixValue, 'QControl'));
					case 'ActiveControl':
						return ($this->chkActive = QType::Cast($mixValue, 'QControl'));
					case 'CreatedControl':
						return ($this->calCreated = QType::Cast($mixValue, 'QControl'));
					case 'ModifiedControl':
						return ($this->calModified = QType::Cast($mixValue, 'QControl'));
					case 'HeaderControl':
						return ($this->txtHeader = QType::Cast($mixValue, 'QControl'));
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