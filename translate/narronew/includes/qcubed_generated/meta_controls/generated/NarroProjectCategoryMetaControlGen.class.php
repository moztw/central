<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the NarroProjectCategory class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single NarroProjectCategory object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a NarroProjectCategoryMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package Narro
	 * @subpackage MetaControls
	 * @property-read NarroProjectCategory $NarroProjectCategory the actual NarroProjectCategory data class being edited
	 * @property QLabel $ProjectCategoryIdControl
	 * @property-read QLabel $ProjectCategoryIdLabel
	 * @property QTextBox $CategoryNameControl
	 * @property-read QLabel $CategoryNameLabel
	 * @property QTextBox $CategoryDescriptionControl
	 * @property-read QLabel $CategoryDescriptionLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class NarroProjectCategoryMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var NarroProjectCategory objNarroProjectCategory
		 * @access protected
		 */
		protected $objNarroProjectCategory;
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

		// Controls that allow the editing of NarroProjectCategory's individual data fields
		/**
		 * @var QLabel lblProjectCategoryId
		 * @access protected
		 */
		protected $lblProjectCategoryId;
		/**
		 * @var QTextBox txtCategoryName
		 * @access protected
		 */
		protected $txtCategoryName;
		/**
		 * @var QTextBox txtCategoryDescription
		 * @access protected
		 */
		protected $txtCategoryDescription;

		// Controls that allow the viewing of NarroProjectCategory's individual data fields
		/**
		 * @var QLabel lblCategoryName
		 * @access protected
		 */
		protected $lblCategoryName;
		/**
		 * @var QLabel lblCategoryDescription
		 * @access protected
		 */
		protected $lblCategoryDescription;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * NarroProjectCategoryMetaControl to edit a single NarroProjectCategory object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single NarroProjectCategory object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroProjectCategoryMetaControl
		 * @param NarroProjectCategory $objNarroProjectCategory new or existing NarroProjectCategory object
		 */
		 public function __construct($objParentObject, NarroProjectCategory $objNarroProjectCategory) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this NarroProjectCategoryMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked NarroProjectCategory object
			$this->objNarroProjectCategory = $objNarroProjectCategory;

			// Figure out if we're Editing or Creating New
			if ($this->objNarroProjectCategory->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroProjectCategoryMetaControl
		 * @param integer $intProjectCategoryId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing NarroProjectCategory object creation - defaults to CreateOrEdit
 		 * @return NarroProjectCategoryMetaControl
		 */
		public static function Create($objParentObject, $intProjectCategoryId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intProjectCategoryId)) {
				$objNarroProjectCategory = NarroProjectCategory::Load($intProjectCategoryId);

				// NarroProjectCategory was found -- return it!
				if ($objNarroProjectCategory)
					return new NarroProjectCategoryMetaControl($objParentObject, $objNarroProjectCategory);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a NarroProjectCategory object with PK arguments: ' . $intProjectCategoryId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new NarroProjectCategoryMetaControl($objParentObject, new NarroProjectCategory());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroProjectCategoryMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NarroProjectCategory object creation - defaults to CreateOrEdit
		 * @return NarroProjectCategoryMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intProjectCategoryId = QApplication::PathInfo(0);
			return NarroProjectCategoryMetaControl::Create($objParentObject, $intProjectCategoryId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroProjectCategoryMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NarroProjectCategory object creation - defaults to CreateOrEdit
		 * @return NarroProjectCategoryMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intProjectCategoryId = QApplication::QueryString('intProjectCategoryId');
			return NarroProjectCategoryMetaControl::Create($objParentObject, $intProjectCategoryId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblProjectCategoryId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblProjectCategoryId_Create($strControlId = null) {
			$this->lblProjectCategoryId = new QLabel($this->objParentObject, $strControlId);
			$this->lblProjectCategoryId->Name = QApplication::Translate('Project Category Id');
			if ($this->blnEditMode)
				$this->lblProjectCategoryId->Text = $this->objNarroProjectCategory->ProjectCategoryId;
			else
				$this->lblProjectCategoryId->Text = 'N/A';
			return $this->lblProjectCategoryId;
		}

		/**
		 * Create and setup QTextBox txtCategoryName
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCategoryName_Create($strControlId = null) {
			$this->txtCategoryName = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCategoryName->Name = QApplication::Translate('Category Name');
			$this->txtCategoryName->Text = $this->objNarroProjectCategory->CategoryName;
			$this->txtCategoryName->Required = true;
			$this->txtCategoryName->MaxLength = NarroProjectCategory::CategoryNameMaxLength;
			return $this->txtCategoryName;
		}

		/**
		 * Create and setup QLabel lblCategoryName
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCategoryName_Create($strControlId = null) {
			$this->lblCategoryName = new QLabel($this->objParentObject, $strControlId);
			$this->lblCategoryName->Name = QApplication::Translate('Category Name');
			$this->lblCategoryName->Text = $this->objNarroProjectCategory->CategoryName;
			$this->lblCategoryName->Required = true;
			return $this->lblCategoryName;
		}

		/**
		 * Create and setup QTextBox txtCategoryDescription
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCategoryDescription_Create($strControlId = null) {
			$this->txtCategoryDescription = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCategoryDescription->Name = QApplication::Translate('Category Description');
			$this->txtCategoryDescription->Text = $this->objNarroProjectCategory->CategoryDescription;
			$this->txtCategoryDescription->Required = true;
			$this->txtCategoryDescription->MaxLength = NarroProjectCategory::CategoryDescriptionMaxLength;
			return $this->txtCategoryDescription;
		}

		/**
		 * Create and setup QLabel lblCategoryDescription
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCategoryDescription_Create($strControlId = null) {
			$this->lblCategoryDescription = new QLabel($this->objParentObject, $strControlId);
			$this->lblCategoryDescription->Name = QApplication::Translate('Category Description');
			$this->lblCategoryDescription->Text = $this->objNarroProjectCategory->CategoryDescription;
			$this->lblCategoryDescription->Required = true;
			return $this->lblCategoryDescription;
		}



		/**
		 * Refresh this MetaControl with Data from the local NarroProjectCategory object.
		 * @param boolean $blnReload reload NarroProjectCategory from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objNarroProjectCategory->Reload();

			if ($this->lblProjectCategoryId) if ($this->blnEditMode) $this->lblProjectCategoryId->Text = $this->objNarroProjectCategory->ProjectCategoryId;

			if ($this->txtCategoryName) $this->txtCategoryName->Text = $this->objNarroProjectCategory->CategoryName;
			if ($this->lblCategoryName) $this->lblCategoryName->Text = $this->objNarroProjectCategory->CategoryName;

			if ($this->txtCategoryDescription) $this->txtCategoryDescription->Text = $this->objNarroProjectCategory->CategoryDescription;
			if ($this->lblCategoryDescription) $this->lblCategoryDescription->Text = $this->objNarroProjectCategory->CategoryDescription;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC NARROPROJECTCATEGORY OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's NarroProjectCategory instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveNarroProjectCategory() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtCategoryName) $this->objNarroProjectCategory->CategoryName = $this->txtCategoryName->Text;
				if ($this->txtCategoryDescription) $this->objNarroProjectCategory->CategoryDescription = $this->txtCategoryDescription->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the NarroProjectCategory object
				$this->objNarroProjectCategory->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's NarroProjectCategory instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteNarroProjectCategory() {
			$this->objNarroProjectCategory->Delete();
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
				case 'NarroProjectCategory': return $this->objNarroProjectCategory;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to NarroProjectCategory fields -- will be created dynamically if not yet created
				case 'ProjectCategoryIdControl':
					if (!$this->lblProjectCategoryId) return $this->lblProjectCategoryId_Create();
					return $this->lblProjectCategoryId;
				case 'ProjectCategoryIdLabel':
					if (!$this->lblProjectCategoryId) return $this->lblProjectCategoryId_Create();
					return $this->lblProjectCategoryId;
				case 'CategoryNameControl':
					if (!$this->txtCategoryName) return $this->txtCategoryName_Create();
					return $this->txtCategoryName;
				case 'CategoryNameLabel':
					if (!$this->lblCategoryName) return $this->lblCategoryName_Create();
					return $this->lblCategoryName;
				case 'CategoryDescriptionControl':
					if (!$this->txtCategoryDescription) return $this->txtCategoryDescription_Create();
					return $this->txtCategoryDescription;
				case 'CategoryDescriptionLabel':
					if (!$this->lblCategoryDescription) return $this->lblCategoryDescription_Create();
					return $this->lblCategoryDescription;
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
					// Controls that point to NarroProjectCategory fields
					case 'ProjectCategoryIdControl':
						return ($this->lblProjectCategoryId = QType::Cast($mixValue, 'QControl'));
					case 'CategoryNameControl':
						return ($this->txtCategoryName = QType::Cast($mixValue, 'QControl'));
					case 'CategoryDescriptionControl':
						return ($this->txtCategoryDescription = QType::Cast($mixValue, 'QControl'));
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