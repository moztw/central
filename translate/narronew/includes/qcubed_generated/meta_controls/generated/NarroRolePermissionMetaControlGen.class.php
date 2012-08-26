<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the NarroRolePermission class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single NarroRolePermission object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a NarroRolePermissionMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package Narro
	 * @subpackage MetaControls
	 * @property-read NarroRolePermission $NarroRolePermission the actual NarroRolePermission data class being edited
	 * @property QLabel $RolePermissionIdControl
	 * @property-read QLabel $RolePermissionIdLabel
	 * @property QListBox $RoleIdControl
	 * @property-read QLabel $RoleIdLabel
	 * @property QListBox $PermissionIdControl
	 * @property-read QLabel $PermissionIdLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class NarroRolePermissionMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var NarroRolePermission objNarroRolePermission
		 * @access protected
		 */
		protected $objNarroRolePermission;
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

		// Controls that allow the editing of NarroRolePermission's individual data fields
		/**
		 * @var QLabel lblRolePermissionId
		 * @access protected
		 */
		protected $lblRolePermissionId;
		/**
		 * @var QListBox lstRole
		 * @access protected
		 */
		protected $lstRole;
		/**
		 * @var QListBox lstPermission
		 * @access protected
		 */
		protected $lstPermission;

		// Controls that allow the viewing of NarroRolePermission's individual data fields
		/**
		 * @var QLabel lblRoleId
		 * @access protected
		 */
		protected $lblRoleId;
		/**
		 * @var QLabel lblPermissionId
		 * @access protected
		 */
		protected $lblPermissionId;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * NarroRolePermissionMetaControl to edit a single NarroRolePermission object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single NarroRolePermission object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroRolePermissionMetaControl
		 * @param NarroRolePermission $objNarroRolePermission new or existing NarroRolePermission object
		 */
		 public function __construct($objParentObject, NarroRolePermission $objNarroRolePermission) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this NarroRolePermissionMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked NarroRolePermission object
			$this->objNarroRolePermission = $objNarroRolePermission;

			// Figure out if we're Editing or Creating New
			if ($this->objNarroRolePermission->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroRolePermissionMetaControl
		 * @param integer $intRolePermissionId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing NarroRolePermission object creation - defaults to CreateOrEdit
 		 * @return NarroRolePermissionMetaControl
		 */
		public static function Create($objParentObject, $intRolePermissionId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intRolePermissionId)) {
				$objNarroRolePermission = NarroRolePermission::Load($intRolePermissionId);

				// NarroRolePermission was found -- return it!
				if ($objNarroRolePermission)
					return new NarroRolePermissionMetaControl($objParentObject, $objNarroRolePermission);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a NarroRolePermission object with PK arguments: ' . $intRolePermissionId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new NarroRolePermissionMetaControl($objParentObject, new NarroRolePermission());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroRolePermissionMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NarroRolePermission object creation - defaults to CreateOrEdit
		 * @return NarroRolePermissionMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intRolePermissionId = QApplication::PathInfo(0);
			return NarroRolePermissionMetaControl::Create($objParentObject, $intRolePermissionId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroRolePermissionMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NarroRolePermission object creation - defaults to CreateOrEdit
		 * @return NarroRolePermissionMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intRolePermissionId = QApplication::QueryString('intRolePermissionId');
			return NarroRolePermissionMetaControl::Create($objParentObject, $intRolePermissionId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblRolePermissionId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblRolePermissionId_Create($strControlId = null) {
			$this->lblRolePermissionId = new QLabel($this->objParentObject, $strControlId);
			$this->lblRolePermissionId->Name = QApplication::Translate('Role Permission Id');
			if ($this->blnEditMode)
				$this->lblRolePermissionId->Text = $this->objNarroRolePermission->RolePermissionId;
			else
				$this->lblRolePermissionId->Text = 'N/A';
			return $this->lblRolePermissionId;
		}

		/**
		 * Create and setup QListBox lstRole
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstRole_Create($strControlId = null) {
			$this->lstRole = new QListBox($this->objParentObject, $strControlId);
			$this->lstRole->Name = QApplication::Translate('Role');
			$this->lstRole->Required = true;
			if (!$this->blnEditMode)
				$this->lstRole->AddItem(QApplication::Translate('- Select One -'), null);
			$objRoleArray = NarroRole::LoadAll();
			if ($objRoleArray) foreach ($objRoleArray as $objRole) {
				$objListItem = new QListItem($objRole->__toString(), $objRole->RoleId);
				if (($this->objNarroRolePermission->Role) && ($this->objNarroRolePermission->Role->RoleId == $objRole->RoleId))
					$objListItem->Selected = true;
				$this->lstRole->AddItem($objListItem);
			}
			return $this->lstRole;
		}

		/**
		 * Create and setup QLabel lblRoleId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblRoleId_Create($strControlId = null) {
			$this->lblRoleId = new QLabel($this->objParentObject, $strControlId);
			$this->lblRoleId->Name = QApplication::Translate('Role');
			$this->lblRoleId->Text = ($this->objNarroRolePermission->Role) ? $this->objNarroRolePermission->Role->__toString() : null;
			$this->lblRoleId->Required = true;
			return $this->lblRoleId;
		}

		/**
		 * Create and setup QListBox lstPermission
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstPermission_Create($strControlId = null) {
			$this->lstPermission = new QListBox($this->objParentObject, $strControlId);
			$this->lstPermission->Name = QApplication::Translate('Permission');
			$this->lstPermission->Required = true;
			if (!$this->blnEditMode)
				$this->lstPermission->AddItem(QApplication::Translate('- Select One -'), null);
			$objPermissionArray = NarroPermission::LoadAll();
			if ($objPermissionArray) foreach ($objPermissionArray as $objPermission) {
				$objListItem = new QListItem($objPermission->__toString(), $objPermission->PermissionId);
				if (($this->objNarroRolePermission->Permission) && ($this->objNarroRolePermission->Permission->PermissionId == $objPermission->PermissionId))
					$objListItem->Selected = true;
				$this->lstPermission->AddItem($objListItem);
			}
			return $this->lstPermission;
		}

		/**
		 * Create and setup QLabel lblPermissionId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPermissionId_Create($strControlId = null) {
			$this->lblPermissionId = new QLabel($this->objParentObject, $strControlId);
			$this->lblPermissionId->Name = QApplication::Translate('Permission');
			$this->lblPermissionId->Text = ($this->objNarroRolePermission->Permission) ? $this->objNarroRolePermission->Permission->__toString() : null;
			$this->lblPermissionId->Required = true;
			return $this->lblPermissionId;
		}



		/**
		 * Refresh this MetaControl with Data from the local NarroRolePermission object.
		 * @param boolean $blnReload reload NarroRolePermission from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objNarroRolePermission->Reload();

			if ($this->lblRolePermissionId) if ($this->blnEditMode) $this->lblRolePermissionId->Text = $this->objNarroRolePermission->RolePermissionId;

			if ($this->lstRole) {
					$this->lstRole->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstRole->AddItem(QApplication::Translate('- Select One -'), null);
				$objRoleArray = NarroRole::LoadAll();
				if ($objRoleArray) foreach ($objRoleArray as $objRole) {
					$objListItem = new QListItem($objRole->__toString(), $objRole->RoleId);
					if (($this->objNarroRolePermission->Role) && ($this->objNarroRolePermission->Role->RoleId == $objRole->RoleId))
						$objListItem->Selected = true;
					$this->lstRole->AddItem($objListItem);
				}
			}
			if ($this->lblRoleId) $this->lblRoleId->Text = ($this->objNarroRolePermission->Role) ? $this->objNarroRolePermission->Role->__toString() : null;

			if ($this->lstPermission) {
					$this->lstPermission->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstPermission->AddItem(QApplication::Translate('- Select One -'), null);
				$objPermissionArray = NarroPermission::LoadAll();
				if ($objPermissionArray) foreach ($objPermissionArray as $objPermission) {
					$objListItem = new QListItem($objPermission->__toString(), $objPermission->PermissionId);
					if (($this->objNarroRolePermission->Permission) && ($this->objNarroRolePermission->Permission->PermissionId == $objPermission->PermissionId))
						$objListItem->Selected = true;
					$this->lstPermission->AddItem($objListItem);
				}
			}
			if ($this->lblPermissionId) $this->lblPermissionId->Text = ($this->objNarroRolePermission->Permission) ? $this->objNarroRolePermission->Permission->__toString() : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC NARROROLEPERMISSION OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's NarroRolePermission instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveNarroRolePermission() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstRole) $this->objNarroRolePermission->RoleId = $this->lstRole->SelectedValue;
				if ($this->lstPermission) $this->objNarroRolePermission->PermissionId = $this->lstPermission->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the NarroRolePermission object
				$this->objNarroRolePermission->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's NarroRolePermission instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteNarroRolePermission() {
			$this->objNarroRolePermission->Delete();
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
				case 'NarroRolePermission': return $this->objNarroRolePermission;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to NarroRolePermission fields -- will be created dynamically if not yet created
				case 'RolePermissionIdControl':
					if (!$this->lblRolePermissionId) return $this->lblRolePermissionId_Create();
					return $this->lblRolePermissionId;
				case 'RolePermissionIdLabel':
					if (!$this->lblRolePermissionId) return $this->lblRolePermissionId_Create();
					return $this->lblRolePermissionId;
				case 'RoleIdControl':
					if (!$this->lstRole) return $this->lstRole_Create();
					return $this->lstRole;
				case 'RoleIdLabel':
					if (!$this->lblRoleId) return $this->lblRoleId_Create();
					return $this->lblRoleId;
				case 'PermissionIdControl':
					if (!$this->lstPermission) return $this->lstPermission_Create();
					return $this->lstPermission;
				case 'PermissionIdLabel':
					if (!$this->lblPermissionId) return $this->lblPermissionId_Create();
					return $this->lblPermissionId;
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
					// Controls that point to NarroRolePermission fields
					case 'RolePermissionIdControl':
						return ($this->lblRolePermissionId = QType::Cast($mixValue, 'QControl'));
					case 'RoleIdControl':
						return ($this->lstRole = QType::Cast($mixValue, 'QControl'));
					case 'PermissionIdControl':
						return ($this->lstPermission = QType::Cast($mixValue, 'QControl'));
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