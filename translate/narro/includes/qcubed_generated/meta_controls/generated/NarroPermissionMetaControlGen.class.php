<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the NarroPermission class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single NarroPermission object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a NarroPermissionMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package Narro
	 * @subpackage MetaControls
	 * @property-read NarroPermission $NarroPermission the actual NarroPermission data class being edited
	 * @property QLabel $PermissionIdControl
	 * @property-read QLabel $PermissionIdLabel
	 * @property QTextBox $PermissionNameControl
	 * @property-read QLabel $PermissionNameLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class NarroPermissionMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var NarroPermission objNarroPermission
		 * @access protected
		 */
		protected $objNarroPermission;
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

		// Controls that allow the editing of NarroPermission's individual data fields
		/**
		 * @var QLabel lblPermissionId
		 * @access protected
		 */
		protected $lblPermissionId;
		/**
		 * @var QTextBox txtPermissionName
		 * @access protected
		 */
		protected $txtPermissionName;

		// Controls that allow the viewing of NarroPermission's individual data fields
		/**
		 * @var QLabel lblPermissionName
		 * @access protected
		 */
		protected $lblPermissionName;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * NarroPermissionMetaControl to edit a single NarroPermission object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single NarroPermission object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroPermissionMetaControl
		 * @param NarroPermission $objNarroPermission new or existing NarroPermission object
		 */
		 public function __construct($objParentObject, NarroPermission $objNarroPermission) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this NarroPermissionMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked NarroPermission object
			$this->objNarroPermission = $objNarroPermission;

			// Figure out if we're Editing or Creating New
			if ($this->objNarroPermission->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroPermissionMetaControl
		 * @param integer $intPermissionId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing NarroPermission object creation - defaults to CreateOrEdit
 		 * @return NarroPermissionMetaControl
		 */
		public static function Create($objParentObject, $intPermissionId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intPermissionId)) {
				$objNarroPermission = NarroPermission::Load($intPermissionId);

				// NarroPermission was found -- return it!
				if ($objNarroPermission)
					return new NarroPermissionMetaControl($objParentObject, $objNarroPermission);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a NarroPermission object with PK arguments: ' . $intPermissionId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new NarroPermissionMetaControl($objParentObject, new NarroPermission());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroPermissionMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NarroPermission object creation - defaults to CreateOrEdit
		 * @return NarroPermissionMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intPermissionId = QApplication::PathInfo(0);
			return NarroPermissionMetaControl::Create($objParentObject, $intPermissionId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroPermissionMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NarroPermission object creation - defaults to CreateOrEdit
		 * @return NarroPermissionMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intPermissionId = QApplication::QueryString('intPermissionId');
			return NarroPermissionMetaControl::Create($objParentObject, $intPermissionId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblPermissionId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPermissionId_Create($strControlId = null) {
			$this->lblPermissionId = new QLabel($this->objParentObject, $strControlId);
			$this->lblPermissionId->Name = QApplication::Translate('Permission Id');
			if ($this->blnEditMode)
				$this->lblPermissionId->Text = $this->objNarroPermission->PermissionId;
			else
				$this->lblPermissionId->Text = 'N/A';
			return $this->lblPermissionId;
		}

		/**
		 * Create and setup QTextBox txtPermissionName
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtPermissionName_Create($strControlId = null) {
			$this->txtPermissionName = new QTextBox($this->objParentObject, $strControlId);
			$this->txtPermissionName->Name = QApplication::Translate('Permission Name');
			$this->txtPermissionName->Text = $this->objNarroPermission->PermissionName;
			$this->txtPermissionName->Required = true;
			$this->txtPermissionName->MaxLength = NarroPermission::PermissionNameMaxLength;
			return $this->txtPermissionName;
		}

		/**
		 * Create and setup QLabel lblPermissionName
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPermissionName_Create($strControlId = null) {
			$this->lblPermissionName = new QLabel($this->objParentObject, $strControlId);
			$this->lblPermissionName->Name = QApplication::Translate('Permission Name');
			$this->lblPermissionName->Text = $this->objNarroPermission->PermissionName;
			$this->lblPermissionName->Required = true;
			return $this->lblPermissionName;
		}



		/**
		 * Refresh this MetaControl with Data from the local NarroPermission object.
		 * @param boolean $blnReload reload NarroPermission from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objNarroPermission->Reload();

			if ($this->lblPermissionId) if ($this->blnEditMode) $this->lblPermissionId->Text = $this->objNarroPermission->PermissionId;

			if ($this->txtPermissionName) $this->txtPermissionName->Text = $this->objNarroPermission->PermissionName;
			if ($this->lblPermissionName) $this->lblPermissionName->Text = $this->objNarroPermission->PermissionName;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC NARROPERMISSION OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's NarroPermission instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveNarroPermission() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtPermissionName) $this->objNarroPermission->PermissionName = $this->txtPermissionName->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the NarroPermission object
				$this->objNarroPermission->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's NarroPermission instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteNarroPermission() {
			$this->objNarroPermission->Delete();
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
				case 'NarroPermission': return $this->objNarroPermission;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to NarroPermission fields -- will be created dynamically if not yet created
				case 'PermissionIdControl':
					if (!$this->lblPermissionId) return $this->lblPermissionId_Create();
					return $this->lblPermissionId;
				case 'PermissionIdLabel':
					if (!$this->lblPermissionId) return $this->lblPermissionId_Create();
					return $this->lblPermissionId;
				case 'PermissionNameControl':
					if (!$this->txtPermissionName) return $this->txtPermissionName_Create();
					return $this->txtPermissionName;
				case 'PermissionNameLabel':
					if (!$this->lblPermissionName) return $this->lblPermissionName_Create();
					return $this->lblPermissionName;
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
					// Controls that point to NarroPermission fields
					case 'PermissionIdControl':
						return ($this->lblPermissionId = QType::Cast($mixValue, 'QControl'));
					case 'PermissionNameControl':
						return ($this->txtPermissionName = QType::Cast($mixValue, 'QControl'));
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