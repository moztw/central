<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the NarroUser class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single NarroUser object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a NarroUserMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package Narro
	 * @subpackage MetaControls
	 * @property-read NarroUser $NarroUser the actual NarroUser data class being edited
	 * @property QIntegerTextBox $UserIdControl
	 * @property-read QLabel $UserIdLabel
	 * @property QTextBox $UsernameControl
	 * @property-read QLabel $UsernameLabel
	 * @property QTextBox $PasswordControl
	 * @property-read QLabel $PasswordLabel
	 * @property QTextBox $EmailControl
	 * @property-read QLabel $EmailLabel
	 * @property QTextBox $RealNameControl
	 * @property-read QLabel $RealNameLabel
	 * @property QTextBox $DataControl
	 * @property-read QLabel $DataLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class NarroUserMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var NarroUser objNarroUser
		 * @access protected
		 */
		protected $objNarroUser;
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

		// Controls that allow the editing of NarroUser's individual data fields
		/**
		 * @var QIntegerTextBox txtUserId
		 * @access protected
		 */
		protected $txtUserId;
		/**
		 * @var QTextBox txtUsername
		 * @access protected
		 */
		protected $txtUsername;
		/**
		 * @var QTextBox txtPassword
		 * @access protected
		 */
		protected $txtPassword;
		/**
		 * @var QTextBox txtEmail
		 * @access protected
		 */
		protected $txtEmail;
		/**
		 * @var QTextBox txtRealName
		 * @access protected
		 */
		protected $txtRealName;
		/**
		 * @var QTextBox txtData
		 * @access protected
		 */
		protected $txtData;

		// Controls that allow the viewing of NarroUser's individual data fields
		/**
		 * @var QLabel lblUserId
		 * @access protected
		 */
		protected $lblUserId;
		/**
		 * @var QLabel lblUsername
		 * @access protected
		 */
		protected $lblUsername;
		/**
		 * @var QLabel lblPassword
		 * @access protected
		 */
		protected $lblPassword;
		/**
		 * @var QLabel lblEmail
		 * @access protected
		 */
		protected $lblEmail;
		/**
		 * @var QLabel lblRealName
		 * @access protected
		 */
		protected $lblRealName;
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
		 * NarroUserMetaControl to edit a single NarroUser object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single NarroUser object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroUserMetaControl
		 * @param NarroUser $objNarroUser new or existing NarroUser object
		 */
		 public function __construct($objParentObject, NarroUser $objNarroUser) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this NarroUserMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked NarroUser object
			$this->objNarroUser = $objNarroUser;

			// Figure out if we're Editing or Creating New
			if ($this->objNarroUser->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroUserMetaControl
		 * @param integer $intUserId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing NarroUser object creation - defaults to CreateOrEdit
 		 * @return NarroUserMetaControl
		 */
		public static function Create($objParentObject, $intUserId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intUserId)) {
				$objNarroUser = NarroUser::Load($intUserId);

				// NarroUser was found -- return it!
				if ($objNarroUser)
					return new NarroUserMetaControl($objParentObject, $objNarroUser);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a NarroUser object with PK arguments: ' . $intUserId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new NarroUserMetaControl($objParentObject, new NarroUser());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroUserMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NarroUser object creation - defaults to CreateOrEdit
		 * @return NarroUserMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intUserId = QApplication::PathInfo(0);
			return NarroUserMetaControl::Create($objParentObject, $intUserId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroUserMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NarroUser object creation - defaults to CreateOrEdit
		 * @return NarroUserMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intUserId = QApplication::QueryString('intUserId');
			return NarroUserMetaControl::Create($objParentObject, $intUserId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QIntegerTextBox txtUserId
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtUserId_Create($strControlId = null) {
			$this->txtUserId = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtUserId->Name = QApplication::Translate('User Id');
			$this->txtUserId->Text = $this->objNarroUser->UserId;
			$this->txtUserId->Required = true;
			return $this->txtUserId;
		}

		/**
		 * Create and setup QLabel lblUserId
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblUserId_Create($strControlId = null, $strFormat = null) {
			$this->lblUserId = new QLabel($this->objParentObject, $strControlId);
			$this->lblUserId->Name = QApplication::Translate('User Id');
			$this->lblUserId->Text = $this->objNarroUser->UserId;
			$this->lblUserId->Required = true;
			$this->lblUserId->Format = $strFormat;
			return $this->lblUserId;
		}

		/**
		 * Create and setup QTextBox txtUsername
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtUsername_Create($strControlId = null) {
			$this->txtUsername = new QTextBox($this->objParentObject, $strControlId);
			$this->txtUsername->Name = QApplication::Translate('Username');
			$this->txtUsername->Text = $this->objNarroUser->Username;
			$this->txtUsername->Required = true;
			$this->txtUsername->MaxLength = NarroUser::UsernameMaxLength;
			return $this->txtUsername;
		}

		/**
		 * Create and setup QLabel lblUsername
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblUsername_Create($strControlId = null) {
			$this->lblUsername = new QLabel($this->objParentObject, $strControlId);
			$this->lblUsername->Name = QApplication::Translate('Username');
			$this->lblUsername->Text = $this->objNarroUser->Username;
			$this->lblUsername->Required = true;
			return $this->lblUsername;
		}

		/**
		 * Create and setup QTextBox txtPassword
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtPassword_Create($strControlId = null) {
			$this->txtPassword = new QTextBox($this->objParentObject, $strControlId);
			$this->txtPassword->Name = QApplication::Translate('Password');
			$this->txtPassword->Text = $this->objNarroUser->Password;
			$this->txtPassword->Required = true;
			$this->txtPassword->MaxLength = NarroUser::PasswordMaxLength;
			return $this->txtPassword;
		}

		/**
		 * Create and setup QLabel lblPassword
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPassword_Create($strControlId = null) {
			$this->lblPassword = new QLabel($this->objParentObject, $strControlId);
			$this->lblPassword->Name = QApplication::Translate('Password');
			$this->lblPassword->Text = $this->objNarroUser->Password;
			$this->lblPassword->Required = true;
			return $this->lblPassword;
		}

		/**
		 * Create and setup QTextBox txtEmail
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtEmail_Create($strControlId = null) {
			$this->txtEmail = new QTextBox($this->objParentObject, $strControlId);
			$this->txtEmail->Name = QApplication::Translate('Email');
			$this->txtEmail->Text = $this->objNarroUser->Email;
			$this->txtEmail->Required = true;
			$this->txtEmail->MaxLength = NarroUser::EmailMaxLength;
			return $this->txtEmail;
		}

		/**
		 * Create and setup QLabel lblEmail
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblEmail_Create($strControlId = null) {
			$this->lblEmail = new QLabel($this->objParentObject, $strControlId);
			$this->lblEmail->Name = QApplication::Translate('Email');
			$this->lblEmail->Text = $this->objNarroUser->Email;
			$this->lblEmail->Required = true;
			return $this->lblEmail;
		}

		/**
		 * Create and setup QTextBox txtRealName
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtRealName_Create($strControlId = null) {
			$this->txtRealName = new QTextBox($this->objParentObject, $strControlId);
			$this->txtRealName->Name = QApplication::Translate('Real Name');
			$this->txtRealName->Text = $this->objNarroUser->RealName;
			$this->txtRealName->MaxLength = NarroUser::RealNameMaxLength;
			return $this->txtRealName;
		}

		/**
		 * Create and setup QLabel lblRealName
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblRealName_Create($strControlId = null) {
			$this->lblRealName = new QLabel($this->objParentObject, $strControlId);
			$this->lblRealName->Name = QApplication::Translate('Real Name');
			$this->lblRealName->Text = $this->objNarroUser->RealName;
			return $this->lblRealName;
		}

		/**
		 * Create and setup QTextBox txtData
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtData_Create($strControlId = null) {
			$this->txtData = new QTextBox($this->objParentObject, $strControlId);
			$this->txtData->Name = QApplication::Translate('Data');
			$this->txtData->Text = $this->objNarroUser->Data;
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
			$this->lblData->Text = $this->objNarroUser->Data;
			return $this->lblData;
		}



		/**
		 * Refresh this MetaControl with Data from the local NarroUser object.
		 * @param boolean $blnReload reload NarroUser from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objNarroUser->Reload();

			if ($this->txtUserId) $this->txtUserId->Text = $this->objNarroUser->UserId;
			if ($this->lblUserId) $this->lblUserId->Text = $this->objNarroUser->UserId;

			if ($this->txtUsername) $this->txtUsername->Text = $this->objNarroUser->Username;
			if ($this->lblUsername) $this->lblUsername->Text = $this->objNarroUser->Username;

			if ($this->txtPassword) $this->txtPassword->Text = $this->objNarroUser->Password;
			if ($this->lblPassword) $this->lblPassword->Text = $this->objNarroUser->Password;

			if ($this->txtEmail) $this->txtEmail->Text = $this->objNarroUser->Email;
			if ($this->lblEmail) $this->lblEmail->Text = $this->objNarroUser->Email;

			if ($this->txtRealName) $this->txtRealName->Text = $this->objNarroUser->RealName;
			if ($this->lblRealName) $this->lblRealName->Text = $this->objNarroUser->RealName;

			if ($this->txtData) $this->txtData->Text = $this->objNarroUser->Data;
			if ($this->lblData) $this->lblData->Text = $this->objNarroUser->Data;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC NARROUSER OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's NarroUser instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveNarroUser() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtUserId) $this->objNarroUser->UserId = $this->txtUserId->Text;
				if ($this->txtUsername) $this->objNarroUser->Username = $this->txtUsername->Text;
				if ($this->txtPassword) $this->objNarroUser->Password = $this->txtPassword->Text;
				if ($this->txtEmail) $this->objNarroUser->Email = $this->txtEmail->Text;
				if ($this->txtRealName) $this->objNarroUser->RealName = $this->txtRealName->Text;
				if ($this->txtData) $this->objNarroUser->Data = $this->txtData->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the NarroUser object
				$this->objNarroUser->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's NarroUser instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteNarroUser() {
			$this->objNarroUser->Delete();
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
				case 'NarroUser': return $this->objNarroUser;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to NarroUser fields -- will be created dynamically if not yet created
				case 'UserIdControl':
					if (!$this->txtUserId) return $this->txtUserId_Create();
					return $this->txtUserId;
				case 'UserIdLabel':
					if (!$this->lblUserId) return $this->lblUserId_Create();
					return $this->lblUserId;
				case 'UsernameControl':
					if (!$this->txtUsername) return $this->txtUsername_Create();
					return $this->txtUsername;
				case 'UsernameLabel':
					if (!$this->lblUsername) return $this->lblUsername_Create();
					return $this->lblUsername;
				case 'PasswordControl':
					if (!$this->txtPassword) return $this->txtPassword_Create();
					return $this->txtPassword;
				case 'PasswordLabel':
					if (!$this->lblPassword) return $this->lblPassword_Create();
					return $this->lblPassword;
				case 'EmailControl':
					if (!$this->txtEmail) return $this->txtEmail_Create();
					return $this->txtEmail;
				case 'EmailLabel':
					if (!$this->lblEmail) return $this->lblEmail_Create();
					return $this->lblEmail;
				case 'RealNameControl':
					if (!$this->txtRealName) return $this->txtRealName_Create();
					return $this->txtRealName;
				case 'RealNameLabel':
					if (!$this->lblRealName) return $this->lblRealName_Create();
					return $this->lblRealName;
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
					// Controls that point to NarroUser fields
					case 'UserIdControl':
						return ($this->txtUserId = QType::Cast($mixValue, 'QControl'));
					case 'UsernameControl':
						return ($this->txtUsername = QType::Cast($mixValue, 'QControl'));
					case 'PasswordControl':
						return ($this->txtPassword = QType::Cast($mixValue, 'QControl'));
					case 'EmailControl':
						return ($this->txtEmail = QType::Cast($mixValue, 'QControl'));
					case 'RealNameControl':
						return ($this->txtRealName = QType::Cast($mixValue, 'QControl'));
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