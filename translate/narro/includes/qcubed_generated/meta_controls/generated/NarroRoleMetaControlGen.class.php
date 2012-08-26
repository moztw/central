<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the NarroRole class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single NarroRole object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a NarroRoleMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package Narro
	 * @subpackage MetaControls
	 * @property-read NarroRole $NarroRole the actual NarroRole data class being edited
	 * @property QLabel $RoleIdControl
	 * @property-read QLabel $RoleIdLabel
	 * @property QTextBox $RoleNameControl
	 * @property-read QLabel $RoleNameLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class NarroRoleMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var NarroRole objNarroRole
		 * @access protected
		 */
		protected $objNarroRole;
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

		// Controls that allow the editing of NarroRole's individual data fields
		/**
		 * @var QLabel lblRoleId
		 * @access protected
		 */
		protected $lblRoleId;
		/**
		 * @var QTextBox txtRoleName
		 * @access protected
		 */
		protected $txtRoleName;

		// Controls that allow the viewing of NarroRole's individual data fields
		/**
		 * @var QLabel lblRoleName
		 * @access protected
		 */
		protected $lblRoleName;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * NarroRoleMetaControl to edit a single NarroRole object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single NarroRole object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroRoleMetaControl
		 * @param NarroRole $objNarroRole new or existing NarroRole object
		 */
		 public function __construct($objParentObject, NarroRole $objNarroRole) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this NarroRoleMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked NarroRole object
			$this->objNarroRole = $objNarroRole;

			// Figure out if we're Editing or Creating New
			if ($this->objNarroRole->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroRoleMetaControl
		 * @param integer $intRoleId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing NarroRole object creation - defaults to CreateOrEdit
 		 * @return NarroRoleMetaControl
		 */
		public static function Create($objParentObject, $intRoleId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intRoleId)) {
				$objNarroRole = NarroRole::Load($intRoleId);

				// NarroRole was found -- return it!
				if ($objNarroRole)
					return new NarroRoleMetaControl($objParentObject, $objNarroRole);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a NarroRole object with PK arguments: ' . $intRoleId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new NarroRoleMetaControl($objParentObject, new NarroRole());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroRoleMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NarroRole object creation - defaults to CreateOrEdit
		 * @return NarroRoleMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intRoleId = QApplication::PathInfo(0);
			return NarroRoleMetaControl::Create($objParentObject, $intRoleId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroRoleMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NarroRole object creation - defaults to CreateOrEdit
		 * @return NarroRoleMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intRoleId = QApplication::QueryString('intRoleId');
			return NarroRoleMetaControl::Create($objParentObject, $intRoleId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblRoleId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblRoleId_Create($strControlId = null) {
			$this->lblRoleId = new QLabel($this->objParentObject, $strControlId);
			$this->lblRoleId->Name = QApplication::Translate('Role Id');
			if ($this->blnEditMode)
				$this->lblRoleId->Text = $this->objNarroRole->RoleId;
			else
				$this->lblRoleId->Text = 'N/A';
			return $this->lblRoleId;
		}

		/**
		 * Create and setup QTextBox txtRoleName
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtRoleName_Create($strControlId = null) {
			$this->txtRoleName = new QTextBox($this->objParentObject, $strControlId);
			$this->txtRoleName->Name = QApplication::Translate('Role Name');
			$this->txtRoleName->Text = $this->objNarroRole->RoleName;
			$this->txtRoleName->Required = true;
			$this->txtRoleName->MaxLength = NarroRole::RoleNameMaxLength;
			return $this->txtRoleName;
		}

		/**
		 * Create and setup QLabel lblRoleName
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblRoleName_Create($strControlId = null) {
			$this->lblRoleName = new QLabel($this->objParentObject, $strControlId);
			$this->lblRoleName->Name = QApplication::Translate('Role Name');
			$this->lblRoleName->Text = $this->objNarroRole->RoleName;
			$this->lblRoleName->Required = true;
			return $this->lblRoleName;
		}



		/**
		 * Refresh this MetaControl with Data from the local NarroRole object.
		 * @param boolean $blnReload reload NarroRole from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objNarroRole->Reload();

			if ($this->lblRoleId) if ($this->blnEditMode) $this->lblRoleId->Text = $this->objNarroRole->RoleId;

			if ($this->txtRoleName) $this->txtRoleName->Text = $this->objNarroRole->RoleName;
			if ($this->lblRoleName) $this->lblRoleName->Text = $this->objNarroRole->RoleName;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC NARROROLE OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's NarroRole instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveNarroRole() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtRoleName) $this->objNarroRole->RoleName = $this->txtRoleName->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the NarroRole object
				$this->objNarroRole->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's NarroRole instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteNarroRole() {
			$this->objNarroRole->Delete();
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
				case 'NarroRole': return $this->objNarroRole;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to NarroRole fields -- will be created dynamically if not yet created
				case 'RoleIdControl':
					if (!$this->lblRoleId) return $this->lblRoleId_Create();
					return $this->lblRoleId;
				case 'RoleIdLabel':
					if (!$this->lblRoleId) return $this->lblRoleId_Create();
					return $this->lblRoleId;
				case 'RoleNameControl':
					if (!$this->txtRoleName) return $this->txtRoleName_Create();
					return $this->txtRoleName;
				case 'RoleNameLabel':
					if (!$this->lblRoleName) return $this->lblRoleName_Create();
					return $this->lblRoleName;
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
					// Controls that point to NarroRole fields
					case 'RoleIdControl':
						return ($this->lblRoleId = QType::Cast($mixValue, 'QControl'));
					case 'RoleNameControl':
						return ($this->txtRoleName = QType::Cast($mixValue, 'QControl'));
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