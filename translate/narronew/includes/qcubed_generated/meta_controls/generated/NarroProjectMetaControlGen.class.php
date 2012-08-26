<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the NarroProject class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single NarroProject object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a NarroProjectMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package Narro
	 * @subpackage MetaControls
	 * @property-read NarroProject $NarroProject the actual NarroProject data class being edited
	 * @property QLabel $ProjectIdControl
	 * @property-read QLabel $ProjectIdLabel
	 * @property QListBox $ProjectCategoryIdControl
	 * @property-read QLabel $ProjectCategoryIdLabel
	 * @property QTextBox $ProjectNameControl
	 * @property-read QLabel $ProjectNameLabel
	 * @property QListBox $ProjectTypeControl
	 * @property-read QLabel $ProjectTypeLabel
	 * @property QTextBox $ProjectDescriptionControl
	 * @property-read QLabel $ProjectDescriptionLabel
	 * @property QTextBox $DataControl
	 * @property-read QLabel $DataLabel
	 * @property QIntegerTextBox $ActiveControl
	 * @property-read QLabel $ActiveLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class NarroProjectMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var NarroProject objNarroProject
		 * @access protected
		 */
		protected $objNarroProject;
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

		// Controls that allow the editing of NarroProject's individual data fields
		/**
		 * @var QLabel lblProjectId
		 * @access protected
		 */
		protected $lblProjectId;
		/**
		 * @var QListBox lstProjectCategory
		 * @access protected
		 */
		protected $lstProjectCategory;
		/**
		 * @var QTextBox txtProjectName
		 * @access protected
		 */
		protected $txtProjectName;
		/**
		 * @var QListBox lstProjectTypeObject
		 * @access protected
		 */
		protected $lstProjectTypeObject;
		/**
		 * @var QTextBox txtProjectDescription
		 * @access protected
		 */
		protected $txtProjectDescription;
		/**
		 * @var QTextBox txtData
		 * @access protected
		 */
		protected $txtData;
		/**
		 * @var QIntegerTextBox txtActive
		 * @access protected
		 */
		protected $txtActive;

		// Controls that allow the viewing of NarroProject's individual data fields
		/**
		 * @var QLabel lblProjectCategoryId
		 * @access protected
		 */
		protected $lblProjectCategoryId;
		/**
		 * @var QLabel lblProjectName
		 * @access protected
		 */
		protected $lblProjectName;
		/**
		 * @var QLabel lblProjectType
		 * @access protected
		 */
		protected $lblProjectType;
		/**
		 * @var QLabel lblProjectDescription
		 * @access protected
		 */
		protected $lblProjectDescription;
		/**
		 * @var QLabel lblData
		 * @access protected
		 */
		protected $lblData;
		/**
		 * @var QLabel lblActive
		 * @access protected
		 */
		protected $lblActive;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * NarroProjectMetaControl to edit a single NarroProject object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single NarroProject object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroProjectMetaControl
		 * @param NarroProject $objNarroProject new or existing NarroProject object
		 */
		 public function __construct($objParentObject, NarroProject $objNarroProject) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this NarroProjectMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked NarroProject object
			$this->objNarroProject = $objNarroProject;

			// Figure out if we're Editing or Creating New
			if ($this->objNarroProject->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroProjectMetaControl
		 * @param integer $intProjectId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing NarroProject object creation - defaults to CreateOrEdit
 		 * @return NarroProjectMetaControl
		 */
		public static function Create($objParentObject, $intProjectId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intProjectId)) {
				$objNarroProject = NarroProject::Load($intProjectId);

				// NarroProject was found -- return it!
				if ($objNarroProject)
					return new NarroProjectMetaControl($objParentObject, $objNarroProject);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a NarroProject object with PK arguments: ' . $intProjectId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new NarroProjectMetaControl($objParentObject, new NarroProject());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroProjectMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NarroProject object creation - defaults to CreateOrEdit
		 * @return NarroProjectMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intProjectId = QApplication::PathInfo(0);
			return NarroProjectMetaControl::Create($objParentObject, $intProjectId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroProjectMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NarroProject object creation - defaults to CreateOrEdit
		 * @return NarroProjectMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intProjectId = QApplication::QueryString('intProjectId');
			return NarroProjectMetaControl::Create($objParentObject, $intProjectId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblProjectId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblProjectId_Create($strControlId = null) {
			$this->lblProjectId = new QLabel($this->objParentObject, $strControlId);
			$this->lblProjectId->Name = QApplication::Translate('Project Id');
			if ($this->blnEditMode)
				$this->lblProjectId->Text = $this->objNarroProject->ProjectId;
			else
				$this->lblProjectId->Text = 'N/A';
			return $this->lblProjectId;
		}

		/**
		 * Create and setup QListBox lstProjectCategory
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstProjectCategory_Create($strControlId = null) {
			$this->lstProjectCategory = new QListBox($this->objParentObject, $strControlId);
			$this->lstProjectCategory->Name = QApplication::Translate('Project Category');
			$this->lstProjectCategory->AddItem(QApplication::Translate('- Select One -'), null);
			$objProjectCategoryArray = NarroProjectCategory::LoadAll();
			if ($objProjectCategoryArray) foreach ($objProjectCategoryArray as $objProjectCategory) {
				$objListItem = new QListItem($objProjectCategory->__toString(), $objProjectCategory->ProjectCategoryId);
				if (($this->objNarroProject->ProjectCategory) && ($this->objNarroProject->ProjectCategory->ProjectCategoryId == $objProjectCategory->ProjectCategoryId))
					$objListItem->Selected = true;
				$this->lstProjectCategory->AddItem($objListItem);
			}
			return $this->lstProjectCategory;
		}

		/**
		 * Create and setup QLabel lblProjectCategoryId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblProjectCategoryId_Create($strControlId = null) {
			$this->lblProjectCategoryId = new QLabel($this->objParentObject, $strControlId);
			$this->lblProjectCategoryId->Name = QApplication::Translate('Project Category');
			$this->lblProjectCategoryId->Text = ($this->objNarroProject->ProjectCategory) ? $this->objNarroProject->ProjectCategory->__toString() : null;
			return $this->lblProjectCategoryId;
		}

		/**
		 * Create and setup QTextBox txtProjectName
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtProjectName_Create($strControlId = null) {
			$this->txtProjectName = new QTextBox($this->objParentObject, $strControlId);
			$this->txtProjectName->Name = QApplication::Translate('Project Name');
			$this->txtProjectName->Text = $this->objNarroProject->ProjectName;
			$this->txtProjectName->Required = true;
			$this->txtProjectName->MaxLength = NarroProject::ProjectNameMaxLength;
			return $this->txtProjectName;
		}

		/**
		 * Create and setup QLabel lblProjectName
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblProjectName_Create($strControlId = null) {
			$this->lblProjectName = new QLabel($this->objParentObject, $strControlId);
			$this->lblProjectName->Name = QApplication::Translate('Project Name');
			$this->lblProjectName->Text = $this->objNarroProject->ProjectName;
			$this->lblProjectName->Required = true;
			return $this->lblProjectName;
		}

		/**
		 * Create and setup QListBox lstProjectTypeObject
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstProjectTypeObject_Create($strControlId = null) {
			$this->lstProjectTypeObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstProjectTypeObject->Name = QApplication::Translate('Project Type Object');
			$this->lstProjectTypeObject->Required = true;
			foreach (NarroProjectType::$NameArray as $intId => $strValue)
				$this->lstProjectTypeObject->AddItem(new QListItem($strValue, $intId, $this->objNarroProject->ProjectType == $intId));
			return $this->lstProjectTypeObject;
		}

		/**
		 * Create and setup QLabel lblProjectType
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblProjectType_Create($strControlId = null) {
			$this->lblProjectType = new QLabel($this->objParentObject, $strControlId);
			$this->lblProjectType->Name = QApplication::Translate('Project Type Object');
			$this->lblProjectType->Text = ($this->objNarroProject->ProjectType) ? NarroProjectType::$NameArray[$this->objNarroProject->ProjectType] : null;
			$this->lblProjectType->Required = true;
			return $this->lblProjectType;
		}

		/**
		 * Create and setup QTextBox txtProjectDescription
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtProjectDescription_Create($strControlId = null) {
			$this->txtProjectDescription = new QTextBox($this->objParentObject, $strControlId);
			$this->txtProjectDescription->Name = QApplication::Translate('Project Description');
			$this->txtProjectDescription->Text = $this->objNarroProject->ProjectDescription;
			$this->txtProjectDescription->MaxLength = NarroProject::ProjectDescriptionMaxLength;
			return $this->txtProjectDescription;
		}

		/**
		 * Create and setup QLabel lblProjectDescription
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblProjectDescription_Create($strControlId = null) {
			$this->lblProjectDescription = new QLabel($this->objParentObject, $strControlId);
			$this->lblProjectDescription->Name = QApplication::Translate('Project Description');
			$this->lblProjectDescription->Text = $this->objNarroProject->ProjectDescription;
			return $this->lblProjectDescription;
		}

		/**
		 * Create and setup QTextBox txtData
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtData_Create($strControlId = null) {
			$this->txtData = new QTextBox($this->objParentObject, $strControlId);
			$this->txtData->Name = QApplication::Translate('Data');
			$this->txtData->Text = $this->objNarroProject->Data;
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
			$this->lblData->Text = $this->objNarroProject->Data;
			return $this->lblData;
		}

		/**
		 * Create and setup QIntegerTextBox txtActive
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtActive_Create($strControlId = null) {
			$this->txtActive = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtActive->Name = QApplication::Translate('Active');
			$this->txtActive->Text = $this->objNarroProject->Active;
			$this->txtActive->Required = true;
			return $this->txtActive;
		}

		/**
		 * Create and setup QLabel lblActive
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblActive_Create($strControlId = null, $strFormat = null) {
			$this->lblActive = new QLabel($this->objParentObject, $strControlId);
			$this->lblActive->Name = QApplication::Translate('Active');
			$this->lblActive->Text = $this->objNarroProject->Active;
			$this->lblActive->Required = true;
			$this->lblActive->Format = $strFormat;
			return $this->lblActive;
		}



		/**
		 * Refresh this MetaControl with Data from the local NarroProject object.
		 * @param boolean $blnReload reload NarroProject from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objNarroProject->Reload();

			if ($this->lblProjectId) if ($this->blnEditMode) $this->lblProjectId->Text = $this->objNarroProject->ProjectId;

			if ($this->lstProjectCategory) {
					$this->lstProjectCategory->RemoveAllItems();
				$this->lstProjectCategory->AddItem(QApplication::Translate('- Select One -'), null);
				$objProjectCategoryArray = NarroProjectCategory::LoadAll();
				if ($objProjectCategoryArray) foreach ($objProjectCategoryArray as $objProjectCategory) {
					$objListItem = new QListItem($objProjectCategory->__toString(), $objProjectCategory->ProjectCategoryId);
					if (($this->objNarroProject->ProjectCategory) && ($this->objNarroProject->ProjectCategory->ProjectCategoryId == $objProjectCategory->ProjectCategoryId))
						$objListItem->Selected = true;
					$this->lstProjectCategory->AddItem($objListItem);
				}
			}
			if ($this->lblProjectCategoryId) $this->lblProjectCategoryId->Text = ($this->objNarroProject->ProjectCategory) ? $this->objNarroProject->ProjectCategory->__toString() : null;

			if ($this->txtProjectName) $this->txtProjectName->Text = $this->objNarroProject->ProjectName;
			if ($this->lblProjectName) $this->lblProjectName->Text = $this->objNarroProject->ProjectName;

			if ($this->lstProjectTypeObject) $this->lstProjectTypeObject->SelectedValue = $this->objNarroProject->ProjectType;
			if ($this->lblProjectType) $this->lblProjectType->Text = ($this->objNarroProject->ProjectType) ? NarroProjectType::$NameArray[$this->objNarroProject->ProjectType] : null;

			if ($this->txtProjectDescription) $this->txtProjectDescription->Text = $this->objNarroProject->ProjectDescription;
			if ($this->lblProjectDescription) $this->lblProjectDescription->Text = $this->objNarroProject->ProjectDescription;

			if ($this->txtData) $this->txtData->Text = $this->objNarroProject->Data;
			if ($this->lblData) $this->lblData->Text = $this->objNarroProject->Data;

			if ($this->txtActive) $this->txtActive->Text = $this->objNarroProject->Active;
			if ($this->lblActive) $this->lblActive->Text = $this->objNarroProject->Active;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC NARROPROJECT OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's NarroProject instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveNarroProject() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstProjectCategory) $this->objNarroProject->ProjectCategoryId = $this->lstProjectCategory->SelectedValue;
				if ($this->txtProjectName) $this->objNarroProject->ProjectName = $this->txtProjectName->Text;
				if ($this->lstProjectTypeObject) $this->objNarroProject->ProjectType = $this->lstProjectTypeObject->SelectedValue;
				if ($this->txtProjectDescription) $this->objNarroProject->ProjectDescription = $this->txtProjectDescription->Text;
				if ($this->txtData) $this->objNarroProject->Data = $this->txtData->Text;
				if ($this->txtActive) $this->objNarroProject->Active = $this->txtActive->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the NarroProject object
				$this->objNarroProject->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's NarroProject instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteNarroProject() {
			$this->objNarroProject->Delete();
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
				case 'NarroProject': return $this->objNarroProject;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to NarroProject fields -- will be created dynamically if not yet created
				case 'ProjectIdControl':
					if (!$this->lblProjectId) return $this->lblProjectId_Create();
					return $this->lblProjectId;
				case 'ProjectIdLabel':
					if (!$this->lblProjectId) return $this->lblProjectId_Create();
					return $this->lblProjectId;
				case 'ProjectCategoryIdControl':
					if (!$this->lstProjectCategory) return $this->lstProjectCategory_Create();
					return $this->lstProjectCategory;
				case 'ProjectCategoryIdLabel':
					if (!$this->lblProjectCategoryId) return $this->lblProjectCategoryId_Create();
					return $this->lblProjectCategoryId;
				case 'ProjectNameControl':
					if (!$this->txtProjectName) return $this->txtProjectName_Create();
					return $this->txtProjectName;
				case 'ProjectNameLabel':
					if (!$this->lblProjectName) return $this->lblProjectName_Create();
					return $this->lblProjectName;
				case 'ProjectTypeControl':
					if (!$this->lstProjectTypeObject) return $this->lstProjectTypeObject_Create();
					return $this->lstProjectTypeObject;
				case 'ProjectTypeLabel':
					if (!$this->lblProjectType) return $this->lblProjectType_Create();
					return $this->lblProjectType;
				case 'ProjectDescriptionControl':
					if (!$this->txtProjectDescription) return $this->txtProjectDescription_Create();
					return $this->txtProjectDescription;
				case 'ProjectDescriptionLabel':
					if (!$this->lblProjectDescription) return $this->lblProjectDescription_Create();
					return $this->lblProjectDescription;
				case 'DataControl':
					if (!$this->txtData) return $this->txtData_Create();
					return $this->txtData;
				case 'DataLabel':
					if (!$this->lblData) return $this->lblData_Create();
					return $this->lblData;
				case 'ActiveControl':
					if (!$this->txtActive) return $this->txtActive_Create();
					return $this->txtActive;
				case 'ActiveLabel':
					if (!$this->lblActive) return $this->lblActive_Create();
					return $this->lblActive;
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
					// Controls that point to NarroProject fields
					case 'ProjectIdControl':
						return ($this->lblProjectId = QType::Cast($mixValue, 'QControl'));
					case 'ProjectCategoryIdControl':
						return ($this->lstProjectCategory = QType::Cast($mixValue, 'QControl'));
					case 'ProjectNameControl':
						return ($this->txtProjectName = QType::Cast($mixValue, 'QControl'));
					case 'ProjectTypeControl':
						return ($this->lstProjectTypeObject = QType::Cast($mixValue, 'QControl'));
					case 'ProjectDescriptionControl':
						return ($this->txtProjectDescription = QType::Cast($mixValue, 'QControl'));
					case 'DataControl':
						return ($this->txtData = QType::Cast($mixValue, 'QControl'));
					case 'ActiveControl':
						return ($this->txtActive = QType::Cast($mixValue, 'QControl'));
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