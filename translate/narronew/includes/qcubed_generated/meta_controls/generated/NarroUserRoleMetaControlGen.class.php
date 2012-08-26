<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the NarroUserRole class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single NarroUserRole object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a NarroUserRoleMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package Narro
	 * @subpackage MetaControls
	 * @property-read NarroUserRole $NarroUserRole the actual NarroUserRole data class being edited
	 * @property QLabel $UserRoleIdControl
	 * @property-read QLabel $UserRoleIdLabel
	 * @property QListBox $UserIdControl
	 * @property-read QLabel $UserIdLabel
	 * @property QListBox $RoleIdControl
	 * @property-read QLabel $RoleIdLabel
	 * @property QListBox $ProjectIdControl
	 * @property-read QLabel $ProjectIdLabel
	 * @property QListBox $LanguageIdControl
	 * @property-read QLabel $LanguageIdLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class NarroUserRoleMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var NarroUserRole objNarroUserRole
		 * @access protected
		 */
		protected $objNarroUserRole;
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

		// Controls that allow the editing of NarroUserRole's individual data fields
		/**
		 * @var QLabel lblUserRoleId
		 * @access protected
		 */
		protected $lblUserRoleId;
		/**
		 * @var QListBox lstUser
		 * @access protected
		 */
		protected $lstUser;
		/**
		 * @var QListBox lstRole
		 * @access protected
		 */
		protected $lstRole;
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

		// Controls that allow the viewing of NarroUserRole's individual data fields
		/**
		 * @var QLabel lblUserId
		 * @access protected
		 */
		protected $lblUserId;
		/**
		 * @var QLabel lblRoleId
		 * @access protected
		 */
		protected $lblRoleId;
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

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * NarroUserRoleMetaControl to edit a single NarroUserRole object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single NarroUserRole object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroUserRoleMetaControl
		 * @param NarroUserRole $objNarroUserRole new or existing NarroUserRole object
		 */
		 public function __construct($objParentObject, NarroUserRole $objNarroUserRole) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this NarroUserRoleMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked NarroUserRole object
			$this->objNarroUserRole = $objNarroUserRole;

			// Figure out if we're Editing or Creating New
			if ($this->objNarroUserRole->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroUserRoleMetaControl
		 * @param integer $intUserRoleId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing NarroUserRole object creation - defaults to CreateOrEdit
 		 * @return NarroUserRoleMetaControl
		 */
		public static function Create($objParentObject, $intUserRoleId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intUserRoleId)) {
				$objNarroUserRole = NarroUserRole::Load($intUserRoleId);

				// NarroUserRole was found -- return it!
				if ($objNarroUserRole)
					return new NarroUserRoleMetaControl($objParentObject, $objNarroUserRole);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a NarroUserRole object with PK arguments: ' . $intUserRoleId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new NarroUserRoleMetaControl($objParentObject, new NarroUserRole());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroUserRoleMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NarroUserRole object creation - defaults to CreateOrEdit
		 * @return NarroUserRoleMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intUserRoleId = QApplication::PathInfo(0);
			return NarroUserRoleMetaControl::Create($objParentObject, $intUserRoleId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroUserRoleMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NarroUserRole object creation - defaults to CreateOrEdit
		 * @return NarroUserRoleMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intUserRoleId = QApplication::QueryString('intUserRoleId');
			return NarroUserRoleMetaControl::Create($objParentObject, $intUserRoleId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblUserRoleId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblUserRoleId_Create($strControlId = null) {
			$this->lblUserRoleId = new QLabel($this->objParentObject, $strControlId);
			$this->lblUserRoleId->Name = QApplication::Translate('User Role Id');
			if ($this->blnEditMode)
				$this->lblUserRoleId->Text = $this->objNarroUserRole->UserRoleId;
			else
				$this->lblUserRoleId->Text = 'N/A';
			return $this->lblUserRoleId;
		}

		/**
		 * Create and setup QListBox lstUser
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstUser_Create($strControlId = null) {
			$this->lstUser = new QListBox($this->objParentObject, $strControlId);
			$this->lstUser->Name = QApplication::Translate('User');
			$this->lstUser->Required = true;
			if (!$this->blnEditMode)
				$this->lstUser->AddItem(QApplication::Translate('- Select One -'), null);
			$objUserArray = NarroUser::LoadAll();
			if ($objUserArray) foreach ($objUserArray as $objUser) {
				$objListItem = new QListItem($objUser->__toString(), $objUser->UserId);
				if (($this->objNarroUserRole->User) && ($this->objNarroUserRole->User->UserId == $objUser->UserId))
					$objListItem->Selected = true;
				$this->lstUser->AddItem($objListItem);
			}
			return $this->lstUser;
		}

		/**
		 * Create and setup QLabel lblUserId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblUserId_Create($strControlId = null) {
			$this->lblUserId = new QLabel($this->objParentObject, $strControlId);
			$this->lblUserId->Name = QApplication::Translate('User');
			$this->lblUserId->Text = ($this->objNarroUserRole->User) ? $this->objNarroUserRole->User->__toString() : null;
			$this->lblUserId->Required = true;
			return $this->lblUserId;
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
				if (($this->objNarroUserRole->Role) && ($this->objNarroUserRole->Role->RoleId == $objRole->RoleId))
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
			$this->lblRoleId->Text = ($this->objNarroUserRole->Role) ? $this->objNarroUserRole->Role->__toString() : null;
			$this->lblRoleId->Required = true;
			return $this->lblRoleId;
		}

		/**
		 * Create and setup QListBox lstProject
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstProject_Create($strControlId = null) {
			$this->lstProject = new QListBox($this->objParentObject, $strControlId);
			$this->lstProject->Name = QApplication::Translate('Project');
			$this->lstProject->AddItem(QApplication::Translate('- Select One -'), null);
			$objProjectArray = NarroProject::LoadAll();
			if ($objProjectArray) foreach ($objProjectArray as $objProject) {
				$objListItem = new QListItem($objProject->__toString(), $objProject->ProjectId);
				if (($this->objNarroUserRole->Project) && ($this->objNarroUserRole->Project->ProjectId == $objProject->ProjectId))
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
			$this->lblProjectId->Text = ($this->objNarroUserRole->Project) ? $this->objNarroUserRole->Project->__toString() : null;
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
			$this->lstLanguage->AddItem(QApplication::Translate('- Select One -'), null);
			$objLanguageArray = NarroLanguage::LoadAll();
			if ($objLanguageArray) foreach ($objLanguageArray as $objLanguage) {
				$objListItem = new QListItem($objLanguage->__toString(), $objLanguage->LanguageId);
				if (($this->objNarroUserRole->Language) && ($this->objNarroUserRole->Language->LanguageId == $objLanguage->LanguageId))
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
			$this->lblLanguageId->Text = ($this->objNarroUserRole->Language) ? $this->objNarroUserRole->Language->__toString() : null;
			return $this->lblLanguageId;
		}



		/**
		 * Refresh this MetaControl with Data from the local NarroUserRole object.
		 * @param boolean $blnReload reload NarroUserRole from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objNarroUserRole->Reload();

			if ($this->lblUserRoleId) if ($this->blnEditMode) $this->lblUserRoleId->Text = $this->objNarroUserRole->UserRoleId;

			if ($this->lstUser) {
					$this->lstUser->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstUser->AddItem(QApplication::Translate('- Select One -'), null);
				$objUserArray = NarroUser::LoadAll();
				if ($objUserArray) foreach ($objUserArray as $objUser) {
					$objListItem = new QListItem($objUser->__toString(), $objUser->UserId);
					if (($this->objNarroUserRole->User) && ($this->objNarroUserRole->User->UserId == $objUser->UserId))
						$objListItem->Selected = true;
					$this->lstUser->AddItem($objListItem);
				}
			}
			if ($this->lblUserId) $this->lblUserId->Text = ($this->objNarroUserRole->User) ? $this->objNarroUserRole->User->__toString() : null;

			if ($this->lstRole) {
					$this->lstRole->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstRole->AddItem(QApplication::Translate('- Select One -'), null);
				$objRoleArray = NarroRole::LoadAll();
				if ($objRoleArray) foreach ($objRoleArray as $objRole) {
					$objListItem = new QListItem($objRole->__toString(), $objRole->RoleId);
					if (($this->objNarroUserRole->Role) && ($this->objNarroUserRole->Role->RoleId == $objRole->RoleId))
						$objListItem->Selected = true;
					$this->lstRole->AddItem($objListItem);
				}
			}
			if ($this->lblRoleId) $this->lblRoleId->Text = ($this->objNarroUserRole->Role) ? $this->objNarroUserRole->Role->__toString() : null;

			if ($this->lstProject) {
					$this->lstProject->RemoveAllItems();
				$this->lstProject->AddItem(QApplication::Translate('- Select One -'), null);
				$objProjectArray = NarroProject::LoadAll();
				if ($objProjectArray) foreach ($objProjectArray as $objProject) {
					$objListItem = new QListItem($objProject->__toString(), $objProject->ProjectId);
					if (($this->objNarroUserRole->Project) && ($this->objNarroUserRole->Project->ProjectId == $objProject->ProjectId))
						$objListItem->Selected = true;
					$this->lstProject->AddItem($objListItem);
				}
			}
			if ($this->lblProjectId) $this->lblProjectId->Text = ($this->objNarroUserRole->Project) ? $this->objNarroUserRole->Project->__toString() : null;

			if ($this->lstLanguage) {
					$this->lstLanguage->RemoveAllItems();
				$this->lstLanguage->AddItem(QApplication::Translate('- Select One -'), null);
				$objLanguageArray = NarroLanguage::LoadAll();
				if ($objLanguageArray) foreach ($objLanguageArray as $objLanguage) {
					$objListItem = new QListItem($objLanguage->__toString(), $objLanguage->LanguageId);
					if (($this->objNarroUserRole->Language) && ($this->objNarroUserRole->Language->LanguageId == $objLanguage->LanguageId))
						$objListItem->Selected = true;
					$this->lstLanguage->AddItem($objListItem);
				}
			}
			if ($this->lblLanguageId) $this->lblLanguageId->Text = ($this->objNarroUserRole->Language) ? $this->objNarroUserRole->Language->__toString() : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC NARROUSERROLE OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's NarroUserRole instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveNarroUserRole() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstUser) $this->objNarroUserRole->UserId = $this->lstUser->SelectedValue;
				if ($this->lstRole) $this->objNarroUserRole->RoleId = $this->lstRole->SelectedValue;
				if ($this->lstProject) $this->objNarroUserRole->ProjectId = $this->lstProject->SelectedValue;
				if ($this->lstLanguage) $this->objNarroUserRole->LanguageId = $this->lstLanguage->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the NarroUserRole object
				$this->objNarroUserRole->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's NarroUserRole instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteNarroUserRole() {
			$this->objNarroUserRole->Delete();
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
				case 'NarroUserRole': return $this->objNarroUserRole;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to NarroUserRole fields -- will be created dynamically if not yet created
				case 'UserRoleIdControl':
					if (!$this->lblUserRoleId) return $this->lblUserRoleId_Create();
					return $this->lblUserRoleId;
				case 'UserRoleIdLabel':
					if (!$this->lblUserRoleId) return $this->lblUserRoleId_Create();
					return $this->lblUserRoleId;
				case 'UserIdControl':
					if (!$this->lstUser) return $this->lstUser_Create();
					return $this->lstUser;
				case 'UserIdLabel':
					if (!$this->lblUserId) return $this->lblUserId_Create();
					return $this->lblUserId;
				case 'RoleIdControl':
					if (!$this->lstRole) return $this->lstRole_Create();
					return $this->lstRole;
				case 'RoleIdLabel':
					if (!$this->lblRoleId) return $this->lblRoleId_Create();
					return $this->lblRoleId;
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
					// Controls that point to NarroUserRole fields
					case 'UserRoleIdControl':
						return ($this->lblUserRoleId = QType::Cast($mixValue, 'QControl'));
					case 'UserIdControl':
						return ($this->lstUser = QType::Cast($mixValue, 'QControl'));
					case 'RoleIdControl':
						return ($this->lstRole = QType::Cast($mixValue, 'QControl'));
					case 'ProjectIdControl':
						return ($this->lstProject = QType::Cast($mixValue, 'QControl'));
					case 'LanguageIdControl':
						return ($this->lstLanguage = QType::Cast($mixValue, 'QControl'));
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