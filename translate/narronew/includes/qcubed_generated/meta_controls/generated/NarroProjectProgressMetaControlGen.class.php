<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the NarroProjectProgress class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single NarroProjectProgress object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a NarroProjectProgressMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package Narro
	 * @subpackage MetaControls
	 * @property-read NarroProjectProgress $NarroProjectProgress the actual NarroProjectProgress data class being edited
	 * @property QLabel $ProjectProgressIdControl
	 * @property-read QLabel $ProjectProgressIdLabel
	 * @property QListBox $ProjectIdControl
	 * @property-read QLabel $ProjectIdLabel
	 * @property QListBox $LanguageIdControl
	 * @property-read QLabel $LanguageIdLabel
	 * @property QCheckBox $ActiveControl
	 * @property-read QLabel $ActiveLabel
	 * @property QDateTimePicker $LastModifiedControl
	 * @property-read QLabel $LastModifiedLabel
	 * @property QIntegerTextBox $TotalTextCountControl
	 * @property-read QLabel $TotalTextCountLabel
	 * @property QIntegerTextBox $FuzzyTextCountControl
	 * @property-read QLabel $FuzzyTextCountLabel
	 * @property QIntegerTextBox $ApprovedTextCountControl
	 * @property-read QLabel $ApprovedTextCountLabel
	 * @property QIntegerTextBox $ProgressPercentControl
	 * @property-read QLabel $ProgressPercentLabel
	 * @property QTextBox $DataControl
	 * @property-read QLabel $DataLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class NarroProjectProgressMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var NarroProjectProgress objNarroProjectProgress
		 * @access protected
		 */
		protected $objNarroProjectProgress;
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

		// Controls that allow the editing of NarroProjectProgress's individual data fields
		/**
		 * @var QLabel lblProjectProgressId
		 * @access protected
		 */
		protected $lblProjectProgressId;
		/**
		 * @var QListBox lstProject
		 * @access protected
		 */
		protected $lstProject;
		/**
		 * @var QListBox lstLanguage
		 * @access protected
		 */
		protected $lstLanguage;
		/**
		 * @var QCheckBox chkActive
		 * @access protected
		 */
		protected $chkActive;
		/**
		 * @var QDateTimePicker calLastModified
		 * @access protected
		 */
		protected $calLastModified;
		/**
		 * @var QIntegerTextBox txtTotalTextCount
		 * @access protected
		 */
		protected $txtTotalTextCount;
		/**
		 * @var QIntegerTextBox txtFuzzyTextCount
		 * @access protected
		 */
		protected $txtFuzzyTextCount;
		/**
		 * @var QIntegerTextBox txtApprovedTextCount
		 * @access protected
		 */
		protected $txtApprovedTextCount;
		/**
		 * @var QIntegerTextBox txtProgressPercent
		 * @access protected
		 */
		protected $txtProgressPercent;
		/**
		 * @var QTextBox txtData
		 * @access protected
		 */
		protected $txtData;

		// Controls that allow the viewing of NarroProjectProgress's individual data fields
		/**
		 * @var QLabel lblProjectId
		 * @access protected
		 */
		protected $lblProjectId;
		/**
		 * @var QLabel lblLanguageId
		 * @access protected
		 */
		protected $lblLanguageId;
		/**
		 * @var QLabel lblActive
		 * @access protected
		 */
		protected $lblActive;
		/**
		 * @var QLabel lblLastModified
		 * @access protected
		 */
		protected $lblLastModified;
		/**
		 * @var QLabel lblTotalTextCount
		 * @access protected
		 */
		protected $lblTotalTextCount;
		/**
		 * @var QLabel lblFuzzyTextCount
		 * @access protected
		 */
		protected $lblFuzzyTextCount;
		/**
		 * @var QLabel lblApprovedTextCount
		 * @access protected
		 */
		protected $lblApprovedTextCount;
		/**
		 * @var QLabel lblProgressPercent
		 * @access protected
		 */
		protected $lblProgressPercent;
		/**
		 * @var QLabel lblData
		 * @access protected
		 */
		protected $lblData;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * NarroProjectProgressMetaControl to edit a single NarroProjectProgress object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single NarroProjectProgress object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroProjectProgressMetaControl
		 * @param NarroProjectProgress $objNarroProjectProgress new or existing NarroProjectProgress object
		 */
		 public function __construct($objParentObject, NarroProjectProgress $objNarroProjectProgress) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this NarroProjectProgressMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked NarroProjectProgress object
			$this->objNarroProjectProgress = $objNarroProjectProgress;

			// Figure out if we're Editing or Creating New
			if ($this->objNarroProjectProgress->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroProjectProgressMetaControl
		 * @param integer $intProjectProgressId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing NarroProjectProgress object creation - defaults to CreateOrEdit
 		 * @return NarroProjectProgressMetaControl
		 */
		public static function Create($objParentObject, $intProjectProgressId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intProjectProgressId)) {
				$objNarroProjectProgress = NarroProjectProgress::Load($intProjectProgressId);

				// NarroProjectProgress was found -- return it!
				if ($objNarroProjectProgress)
					return new NarroProjectProgressMetaControl($objParentObject, $objNarroProjectProgress);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a NarroProjectProgress object with PK arguments: ' . $intProjectProgressId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new NarroProjectProgressMetaControl($objParentObject, new NarroProjectProgress());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroProjectProgressMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NarroProjectProgress object creation - defaults to CreateOrEdit
		 * @return NarroProjectProgressMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intProjectProgressId = QApplication::PathInfo(0);
			return NarroProjectProgressMetaControl::Create($objParentObject, $intProjectProgressId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroProjectProgressMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NarroProjectProgress object creation - defaults to CreateOrEdit
		 * @return NarroProjectProgressMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intProjectProgressId = QApplication::QueryString('intProjectProgressId');
			return NarroProjectProgressMetaControl::Create($objParentObject, $intProjectProgressId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblProjectProgressId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblProjectProgressId_Create($strControlId = null) {
			$this->lblProjectProgressId = new QLabel($this->objParentObject, $strControlId);
			$this->lblProjectProgressId->Name = QApplication::Translate('Project Progress Id');
			if ($this->blnEditMode)
				$this->lblProjectProgressId->Text = $this->objNarroProjectProgress->ProjectProgressId;
			else
				$this->lblProjectProgressId->Text = 'N/A';
			return $this->lblProjectProgressId;
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
				if (($this->objNarroProjectProgress->Project) && ($this->objNarroProjectProgress->Project->ProjectId == $objProject->ProjectId))
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
			$this->lblProjectId->Text = ($this->objNarroProjectProgress->Project) ? $this->objNarroProjectProgress->Project->__toString() : null;
			$this->lblProjectId->Required = true;
			return $this->lblProjectId;
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
				if (($this->objNarroProjectProgress->Language) && ($this->objNarroProjectProgress->Language->LanguageId == $objLanguage->LanguageId))
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
			$this->lblLanguageId->Text = ($this->objNarroProjectProgress->Language) ? $this->objNarroProjectProgress->Language->__toString() : null;
			$this->lblLanguageId->Required = true;
			return $this->lblLanguageId;
		}

		/**
		 * Create and setup QCheckBox chkActive
		 * @param string $strControlId optional ControlId to use
		 * @return QCheckBox
		 */
		public function chkActive_Create($strControlId = null) {
			$this->chkActive = new QCheckBox($this->objParentObject, $strControlId);
			$this->chkActive->Name = QApplication::Translate('Active');
			$this->chkActive->Checked = $this->objNarroProjectProgress->Active;
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
			$this->lblActive->Text = ($this->objNarroProjectProgress->Active) ? QApplication::Translate('Yes') : QApplication::Translate('No');
			return $this->lblActive;
		}

		/**
		 * Create and setup QDateTimePicker calLastModified
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calLastModified_Create($strControlId = null) {
			$this->calLastModified = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calLastModified->Name = QApplication::Translate('Last Modified');
			$this->calLastModified->DateTime = $this->objNarroProjectProgress->LastModified;
			$this->calLastModified->DateTimePickerType = QDateTimePickerType::DateTime;
			$this->calLastModified->Required = true;
			return $this->calLastModified;
		}

		/**
		 * Create and setup QLabel lblLastModified
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblLastModified_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblLastModified = new QLabel($this->objParentObject, $strControlId);
			$this->lblLastModified->Name = QApplication::Translate('Last Modified');
			$this->strLastModifiedDateTimeFormat = $strDateTimeFormat;
			$this->lblLastModified->Text = sprintf($this->objNarroProjectProgress->LastModified) ? $this->objNarroProjectProgress->LastModified->qFormat($this->strLastModifiedDateTimeFormat) : null;
			$this->lblLastModified->Required = true;
			return $this->lblLastModified;
		}

		protected $strLastModifiedDateTimeFormat;


		/**
		 * Create and setup QIntegerTextBox txtTotalTextCount
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtTotalTextCount_Create($strControlId = null) {
			$this->txtTotalTextCount = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtTotalTextCount->Name = QApplication::Translate('Total Text Count');
			$this->txtTotalTextCount->Text = $this->objNarroProjectProgress->TotalTextCount;
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
			$this->lblTotalTextCount->Text = $this->objNarroProjectProgress->TotalTextCount;
			$this->lblTotalTextCount->Required = true;
			$this->lblTotalTextCount->Format = $strFormat;
			return $this->lblTotalTextCount;
		}

		/**
		 * Create and setup QIntegerTextBox txtFuzzyTextCount
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtFuzzyTextCount_Create($strControlId = null) {
			$this->txtFuzzyTextCount = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtFuzzyTextCount->Name = QApplication::Translate('Fuzzy Text Count');
			$this->txtFuzzyTextCount->Text = $this->objNarroProjectProgress->FuzzyTextCount;
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
			$this->lblFuzzyTextCount->Text = $this->objNarroProjectProgress->FuzzyTextCount;
			$this->lblFuzzyTextCount->Required = true;
			$this->lblFuzzyTextCount->Format = $strFormat;
			return $this->lblFuzzyTextCount;
		}

		/**
		 * Create and setup QIntegerTextBox txtApprovedTextCount
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtApprovedTextCount_Create($strControlId = null) {
			$this->txtApprovedTextCount = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtApprovedTextCount->Name = QApplication::Translate('Approved Text Count');
			$this->txtApprovedTextCount->Text = $this->objNarroProjectProgress->ApprovedTextCount;
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
			$this->lblApprovedTextCount->Text = $this->objNarroProjectProgress->ApprovedTextCount;
			$this->lblApprovedTextCount->Required = true;
			$this->lblApprovedTextCount->Format = $strFormat;
			return $this->lblApprovedTextCount;
		}

		/**
		 * Create and setup QIntegerTextBox txtProgressPercent
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtProgressPercent_Create($strControlId = null) {
			$this->txtProgressPercent = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtProgressPercent->Name = QApplication::Translate('Progress Percent');
			$this->txtProgressPercent->Text = $this->objNarroProjectProgress->ProgressPercent;
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
			$this->lblProgressPercent->Text = $this->objNarroProjectProgress->ProgressPercent;
			$this->lblProgressPercent->Required = true;
			$this->lblProgressPercent->Format = $strFormat;
			return $this->lblProgressPercent;
		}

		/**
		 * Create and setup QTextBox txtData
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtData_Create($strControlId = null) {
			$this->txtData = new QTextBox($this->objParentObject, $strControlId);
			$this->txtData->Name = QApplication::Translate('Data');
			$this->txtData->Text = $this->objNarroProjectProgress->Data;
			$this->txtData->TextMode = QTextMode::MultiLine;
			return $this->txtData;
		}

		/**
		 * Create and setup QLabel lblData
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblData_Create($strControlId = null) {
			$this->lblData = new QLabel($this->objParentObject, $strControlId);
			$this->lblData->Name = QApplication::Translate('Data');
			$this->lblData->Text = $this->objNarroProjectProgress->Data;
			return $this->lblData;
		}



		/**
		 * Refresh this MetaControl with Data from the local NarroProjectProgress object.
		 * @param boolean $blnReload reload NarroProjectProgress from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objNarroProjectProgress->Reload();

			if ($this->lblProjectProgressId) if ($this->blnEditMode) $this->lblProjectProgressId->Text = $this->objNarroProjectProgress->ProjectProgressId;

			if ($this->lstProject) {
					$this->lstProject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstProject->AddItem(QApplication::Translate('- Select One -'), null);
				$objProjectArray = NarroProject::LoadAll();
				if ($objProjectArray) foreach ($objProjectArray as $objProject) {
					$objListItem = new QListItem($objProject->__toString(), $objProject->ProjectId);
					if (($this->objNarroProjectProgress->Project) && ($this->objNarroProjectProgress->Project->ProjectId == $objProject->ProjectId))
						$objListItem->Selected = true;
					$this->lstProject->AddItem($objListItem);
				}
			}
			if ($this->lblProjectId) $this->lblProjectId->Text = ($this->objNarroProjectProgress->Project) ? $this->objNarroProjectProgress->Project->__toString() : null;

			if ($this->lstLanguage) {
					$this->lstLanguage->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstLanguage->AddItem(QApplication::Translate('- Select One -'), null);
				$objLanguageArray = NarroLanguage::LoadAll();
				if ($objLanguageArray) foreach ($objLanguageArray as $objLanguage) {
					$objListItem = new QListItem($objLanguage->__toString(), $objLanguage->LanguageId);
					if (($this->objNarroProjectProgress->Language) && ($this->objNarroProjectProgress->Language->LanguageId == $objLanguage->LanguageId))
						$objListItem->Selected = true;
					$this->lstLanguage->AddItem($objListItem);
				}
			}
			if ($this->lblLanguageId) $this->lblLanguageId->Text = ($this->objNarroProjectProgress->Language) ? $this->objNarroProjectProgress->Language->__toString() : null;

			if ($this->chkActive) $this->chkActive->Checked = $this->objNarroProjectProgress->Active;
			if ($this->lblActive) $this->lblActive->Text = ($this->objNarroProjectProgress->Active) ? QApplication::Translate('Yes') : QApplication::Translate('No');

			if ($this->calLastModified) $this->calLastModified->DateTime = $this->objNarroProjectProgress->LastModified;
			if ($this->lblLastModified) $this->lblLastModified->Text = sprintf($this->objNarroProjectProgress->LastModified) ? $this->objNarroProjectProgress->LastModified->qFormat($this->strLastModifiedDateTimeFormat) : null;

			if ($this->txtTotalTextCount) $this->txtTotalTextCount->Text = $this->objNarroProjectProgress->TotalTextCount;
			if ($this->lblTotalTextCount) $this->lblTotalTextCount->Text = $this->objNarroProjectProgress->TotalTextCount;

			if ($this->txtFuzzyTextCount) $this->txtFuzzyTextCount->Text = $this->objNarroProjectProgress->FuzzyTextCount;
			if ($this->lblFuzzyTextCount) $this->lblFuzzyTextCount->Text = $this->objNarroProjectProgress->FuzzyTextCount;

			if ($this->txtApprovedTextCount) $this->txtApprovedTextCount->Text = $this->objNarroProjectProgress->ApprovedTextCount;
			if ($this->lblApprovedTextCount) $this->lblApprovedTextCount->Text = $this->objNarroProjectProgress->ApprovedTextCount;

			if ($this->txtProgressPercent) $this->txtProgressPercent->Text = $this->objNarroProjectProgress->ProgressPercent;
			if ($this->lblProgressPercent) $this->lblProgressPercent->Text = $this->objNarroProjectProgress->ProgressPercent;

			if ($this->txtData) $this->txtData->Text = $this->objNarroProjectProgress->Data;
			if ($this->lblData) $this->lblData->Text = $this->objNarroProjectProgress->Data;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC NARROPROJECTPROGRESS OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's NarroProjectProgress instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveNarroProjectProgress() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstProject) $this->objNarroProjectProgress->ProjectId = $this->lstProject->SelectedValue;
				if ($this->lstLanguage) $this->objNarroProjectProgress->LanguageId = $this->lstLanguage->SelectedValue;
				if ($this->chkActive) $this->objNarroProjectProgress->Active = $this->chkActive->Checked;
				if ($this->calLastModified) $this->objNarroProjectProgress->LastModified = $this->calLastModified->DateTime;
				if ($this->txtTotalTextCount) $this->objNarroProjectProgress->TotalTextCount = $this->txtTotalTextCount->Text;
				if ($this->txtFuzzyTextCount) $this->objNarroProjectProgress->FuzzyTextCount = $this->txtFuzzyTextCount->Text;
				if ($this->txtApprovedTextCount) $this->objNarroProjectProgress->ApprovedTextCount = $this->txtApprovedTextCount->Text;
				if ($this->txtProgressPercent) $this->objNarroProjectProgress->ProgressPercent = $this->txtProgressPercent->Text;
				if ($this->txtData) $this->objNarroProjectProgress->Data = $this->txtData->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the NarroProjectProgress object
				$this->objNarroProjectProgress->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's NarroProjectProgress instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteNarroProjectProgress() {
			$this->objNarroProjectProgress->Delete();
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
				case 'NarroProjectProgress': return $this->objNarroProjectProgress;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to NarroProjectProgress fields -- will be created dynamically if not yet created
				case 'ProjectProgressIdControl':
					if (!$this->lblProjectProgressId) return $this->lblProjectProgressId_Create();
					return $this->lblProjectProgressId;
				case 'ProjectProgressIdLabel':
					if (!$this->lblProjectProgressId) return $this->lblProjectProgressId_Create();
					return $this->lblProjectProgressId;
				case 'ProjectIdControl':
					if (!$this->lstProject) return $this->lstProject_Create();
					return $this->lstProject;
				case 'ProjectIdLabel':
					if (!$this->lblProjectId) return $this->lblProjectId_Create();
					return $this->lblProjectId;
				case 'LanguageIdControl':
					if (!$this->lstLanguage) return $this->lstLanguage_Create();
					return $this->lstLanguage;
				case 'LanguageIdLabel':
					if (!$this->lblLanguageId) return $this->lblLanguageId_Create();
					return $this->lblLanguageId;
				case 'ActiveControl':
					if (!$this->chkActive) return $this->chkActive_Create();
					return $this->chkActive;
				case 'ActiveLabel':
					if (!$this->lblActive) return $this->lblActive_Create();
					return $this->lblActive;
				case 'LastModifiedControl':
					if (!$this->calLastModified) return $this->calLastModified_Create();
					return $this->calLastModified;
				case 'LastModifiedLabel':
					if (!$this->lblLastModified) return $this->lblLastModified_Create();
					return $this->lblLastModified;
				case 'TotalTextCountControl':
					if (!$this->txtTotalTextCount) return $this->txtTotalTextCount_Create();
					return $this->txtTotalTextCount;
				case 'TotalTextCountLabel':
					if (!$this->lblTotalTextCount) return $this->lblTotalTextCount_Create();
					return $this->lblTotalTextCount;
				case 'FuzzyTextCountControl':
					if (!$this->txtFuzzyTextCount) return $this->txtFuzzyTextCount_Create();
					return $this->txtFuzzyTextCount;
				case 'FuzzyTextCountLabel':
					if (!$this->lblFuzzyTextCount) return $this->lblFuzzyTextCount_Create();
					return $this->lblFuzzyTextCount;
				case 'ApprovedTextCountControl':
					if (!$this->txtApprovedTextCount) return $this->txtApprovedTextCount_Create();
					return $this->txtApprovedTextCount;
				case 'ApprovedTextCountLabel':
					if (!$this->lblApprovedTextCount) return $this->lblApprovedTextCount_Create();
					return $this->lblApprovedTextCount;
				case 'ProgressPercentControl':
					if (!$this->txtProgressPercent) return $this->txtProgressPercent_Create();
					return $this->txtProgressPercent;
				case 'ProgressPercentLabel':
					if (!$this->lblProgressPercent) return $this->lblProgressPercent_Create();
					return $this->lblProgressPercent;
				case 'DataControl':
					if (!$this->txtData) return $this->txtData_Create();
					return $this->txtData;
				case 'DataLabel':
					if (!$this->lblData) return $this->lblData_Create();
					return $this->lblData;
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
					// Controls that point to NarroProjectProgress fields
					case 'ProjectProgressIdControl':
						return ($this->lblProjectProgressId = QType::Cast($mixValue, 'QControl'));
					case 'ProjectIdControl':
						return ($this->lstProject = QType::Cast($mixValue, 'QControl'));
					case 'LanguageIdControl':
						return ($this->lstLanguage = QType::Cast($mixValue, 'QControl'));
					case 'ActiveControl':
						return ($this->chkActive = QType::Cast($mixValue, 'QControl'));
					case 'LastModifiedControl':
						return ($this->calLastModified = QType::Cast($mixValue, 'QControl'));
					case 'TotalTextCountControl':
						return ($this->txtTotalTextCount = QType::Cast($mixValue, 'QControl'));
					case 'FuzzyTextCountControl':
						return ($this->txtFuzzyTextCount = QType::Cast($mixValue, 'QControl'));
					case 'ApprovedTextCountControl':
						return ($this->txtApprovedTextCount = QType::Cast($mixValue, 'QControl'));
					case 'ProgressPercentControl':
						return ($this->txtProgressPercent = QType::Cast($mixValue, 'QControl'));
					case 'DataControl':
						return ($this->txtData = QType::Cast($mixValue, 'QControl'));
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