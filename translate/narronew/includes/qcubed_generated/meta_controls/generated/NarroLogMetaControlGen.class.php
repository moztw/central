<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the NarroLog class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single NarroLog object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a NarroLogMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package Narro
	 * @subpackage MetaControls
	 * @property-read NarroLog $NarroLog the actual NarroLog data class being edited
	 * @property QLabel $LogIdControl
	 * @property-read QLabel $LogIdLabel
	 * @property QListBox $LanguageIdControl
	 * @property-read QLabel $LanguageIdLabel
	 * @property QListBox $ProjectIdControl
	 * @property-read QLabel $ProjectIdLabel
	 * @property QListBox $UserIdControl
	 * @property-read QLabel $UserIdLabel
	 * @property QTextBox $MessageControl
	 * @property-read QLabel $MessageLabel
	 * @property QIntegerTextBox $PriorityControl
	 * @property-read QLabel $PriorityLabel
	 * @property QDateTimePicker $DateControl
	 * @property-read QLabel $DateLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class NarroLogMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var NarroLog objNarroLog
		 * @access protected
		 */
		protected $objNarroLog;
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

		// Controls that allow the editing of NarroLog's individual data fields
		/**
		 * @var QLabel lblLogId
		 * @access protected
		 */
		protected $lblLogId;
		/**
		 * @var QListBox lstLanguage
		 * @access protected
		 */
		protected $lstLanguage;
		/**
		 * @var QListBox lstProject
		 * @access protected
		 */
		protected $lstProject;
		/**
		 * @var QListBox lstUser
		 * @access protected
		 */
		protected $lstUser;
		/**
		 * @var QTextBox txtMessage
		 * @access protected
		 */
		protected $txtMessage;
		/**
		 * @var QIntegerTextBox txtPriority
		 * @access protected
		 */
		protected $txtPriority;
		/**
		 * @var QDateTimePicker calDate
		 * @access protected
		 */
		protected $calDate;

		// Controls that allow the viewing of NarroLog's individual data fields
		/**
		 * @var QLabel lblLanguageId
		 * @access protected
		 */
		protected $lblLanguageId;
		/**
		 * @var QLabel lblProjectId
		 * @access protected
		 */
		protected $lblProjectId;
		/**
		 * @var QLabel lblUserId
		 * @access protected
		 */
		protected $lblUserId;
		/**
		 * @var QLabel lblMessage
		 * @access protected
		 */
		protected $lblMessage;
		/**
		 * @var QLabel lblPriority
		 * @access protected
		 */
		protected $lblPriority;
		/**
		 * @var QLabel lblDate
		 * @access protected
		 */
		protected $lblDate;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * NarroLogMetaControl to edit a single NarroLog object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single NarroLog object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroLogMetaControl
		 * @param NarroLog $objNarroLog new or existing NarroLog object
		 */
		 public function __construct($objParentObject, NarroLog $objNarroLog) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this NarroLogMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked NarroLog object
			$this->objNarroLog = $objNarroLog;

			// Figure out if we're Editing or Creating New
			if ($this->objNarroLog->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroLogMetaControl
		 * @param integer $intLogId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing NarroLog object creation - defaults to CreateOrEdit
 		 * @return NarroLogMetaControl
		 */
		public static function Create($objParentObject, $intLogId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intLogId)) {
				$objNarroLog = NarroLog::Load($intLogId);

				// NarroLog was found -- return it!
				if ($objNarroLog)
					return new NarroLogMetaControl($objParentObject, $objNarroLog);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a NarroLog object with PK arguments: ' . $intLogId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new NarroLogMetaControl($objParentObject, new NarroLog());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroLogMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NarroLog object creation - defaults to CreateOrEdit
		 * @return NarroLogMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intLogId = QApplication::PathInfo(0);
			return NarroLogMetaControl::Create($objParentObject, $intLogId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroLogMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NarroLog object creation - defaults to CreateOrEdit
		 * @return NarroLogMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intLogId = QApplication::QueryString('intLogId');
			return NarroLogMetaControl::Create($objParentObject, $intLogId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblLogId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblLogId_Create($strControlId = null) {
			$this->lblLogId = new QLabel($this->objParentObject, $strControlId);
			$this->lblLogId->Name = QApplication::Translate('Log Id');
			if ($this->blnEditMode)
				$this->lblLogId->Text = $this->objNarroLog->LogId;
			else
				$this->lblLogId->Text = 'N/A';
			return $this->lblLogId;
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
				if (($this->objNarroLog->Language) && ($this->objNarroLog->Language->LanguageId == $objLanguage->LanguageId))
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
			$this->lblLanguageId->Text = ($this->objNarroLog->Language) ? $this->objNarroLog->Language->__toString() : null;
			return $this->lblLanguageId;
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
				if (($this->objNarroLog->Project) && ($this->objNarroLog->Project->ProjectId == $objProject->ProjectId))
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
			$this->lblProjectId->Text = ($this->objNarroLog->Project) ? $this->objNarroLog->Project->__toString() : null;
			return $this->lblProjectId;
		}

		/**
		 * Create and setup QListBox lstUser
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstUser_Create($strControlId = null) {
			$this->lstUser = new QListBox($this->objParentObject, $strControlId);
			$this->lstUser->Name = QApplication::Translate('User');
			$this->lstUser->AddItem(QApplication::Translate('- Select One -'), null);
			$objUserArray = NarroUser::LoadAll();
			if ($objUserArray) foreach ($objUserArray as $objUser) {
				$objListItem = new QListItem($objUser->__toString(), $objUser->UserId);
				if (($this->objNarroLog->User) && ($this->objNarroLog->User->UserId == $objUser->UserId))
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
			$this->lblUserId->Text = ($this->objNarroLog->User) ? $this->objNarroLog->User->__toString() : null;
			return $this->lblUserId;
		}

		/**
		 * Create and setup QTextBox txtMessage
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtMessage_Create($strControlId = null) {
			$this->txtMessage = new QTextBox($this->objParentObject, $strControlId);
			$this->txtMessage->Name = QApplication::Translate('Message');
			$this->txtMessage->Text = $this->objNarroLog->Message;
			$this->txtMessage->Required = true;
			$this->txtMessage->TextMode = QTextMode::MultiLine;
			return $this->txtMessage;
		}

		/**
		 * Create and setup QLabel lblMessage
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblMessage_Create($strControlId = null) {
			$this->lblMessage = new QLabel($this->objParentObject, $strControlId);
			$this->lblMessage->Name = QApplication::Translate('Message');
			$this->lblMessage->Text = $this->objNarroLog->Message;
			$this->lblMessage->Required = true;
			return $this->lblMessage;
		}

		/**
		 * Create and setup QIntegerTextBox txtPriority
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtPriority_Create($strControlId = null) {
			$this->txtPriority = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtPriority->Name = QApplication::Translate('Priority');
			$this->txtPriority->Text = $this->objNarroLog->Priority;
			$this->txtPriority->Required = true;
			return $this->txtPriority;
		}

		/**
		 * Create and setup QLabel lblPriority
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblPriority_Create($strControlId = null, $strFormat = null) {
			$this->lblPriority = new QLabel($this->objParentObject, $strControlId);
			$this->lblPriority->Name = QApplication::Translate('Priority');
			$this->lblPriority->Text = $this->objNarroLog->Priority;
			$this->lblPriority->Required = true;
			$this->lblPriority->Format = $strFormat;
			return $this->lblPriority;
		}

		/**
		 * Create and setup QDateTimePicker calDate
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calDate_Create($strControlId = null) {
			$this->calDate = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calDate->Name = QApplication::Translate('Date');
			$this->calDate->DateTime = $this->objNarroLog->Date;
			$this->calDate->DateTimePickerType = QDateTimePickerType::DateTime;
			$this->calDate->Required = true;
			return $this->calDate;
		}

		/**
		 * Create and setup QLabel lblDate
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblDate_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblDate = new QLabel($this->objParentObject, $strControlId);
			$this->lblDate->Name = QApplication::Translate('Date');
			$this->strDateDateTimeFormat = $strDateTimeFormat;
			$this->lblDate->Text = sprintf($this->objNarroLog->Date) ? $this->objNarroLog->Date->qFormat($this->strDateDateTimeFormat) : null;
			$this->lblDate->Required = true;
			return $this->lblDate;
		}

		protected $strDateDateTimeFormat;




		/**
		 * Refresh this MetaControl with Data from the local NarroLog object.
		 * @param boolean $blnReload reload NarroLog from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objNarroLog->Reload();

			if ($this->lblLogId) if ($this->blnEditMode) $this->lblLogId->Text = $this->objNarroLog->LogId;

			if ($this->lstLanguage) {
					$this->lstLanguage->RemoveAllItems();
				$this->lstLanguage->AddItem(QApplication::Translate('- Select One -'), null);
				$objLanguageArray = NarroLanguage::LoadAll();
				if ($objLanguageArray) foreach ($objLanguageArray as $objLanguage) {
					$objListItem = new QListItem($objLanguage->__toString(), $objLanguage->LanguageId);
					if (($this->objNarroLog->Language) && ($this->objNarroLog->Language->LanguageId == $objLanguage->LanguageId))
						$objListItem->Selected = true;
					$this->lstLanguage->AddItem($objListItem);
				}
			}
			if ($this->lblLanguageId) $this->lblLanguageId->Text = ($this->objNarroLog->Language) ? $this->objNarroLog->Language->__toString() : null;

			if ($this->lstProject) {
					$this->lstProject->RemoveAllItems();
				$this->lstProject->AddItem(QApplication::Translate('- Select One -'), null);
				$objProjectArray = NarroProject::LoadAll();
				if ($objProjectArray) foreach ($objProjectArray as $objProject) {
					$objListItem = new QListItem($objProject->__toString(), $objProject->ProjectId);
					if (($this->objNarroLog->Project) && ($this->objNarroLog->Project->ProjectId == $objProject->ProjectId))
						$objListItem->Selected = true;
					$this->lstProject->AddItem($objListItem);
				}
			}
			if ($this->lblProjectId) $this->lblProjectId->Text = ($this->objNarroLog->Project) ? $this->objNarroLog->Project->__toString() : null;

			if ($this->lstUser) {
					$this->lstUser->RemoveAllItems();
				$this->lstUser->AddItem(QApplication::Translate('- Select One -'), null);
				$objUserArray = NarroUser::LoadAll();
				if ($objUserArray) foreach ($objUserArray as $objUser) {
					$objListItem = new QListItem($objUser->__toString(), $objUser->UserId);
					if (($this->objNarroLog->User) && ($this->objNarroLog->User->UserId == $objUser->UserId))
						$objListItem->Selected = true;
					$this->lstUser->AddItem($objListItem);
				}
			}
			if ($this->lblUserId) $this->lblUserId->Text = ($this->objNarroLog->User) ? $this->objNarroLog->User->__toString() : null;

			if ($this->txtMessage) $this->txtMessage->Text = $this->objNarroLog->Message;
			if ($this->lblMessage) $this->lblMessage->Text = $this->objNarroLog->Message;

			if ($this->txtPriority) $this->txtPriority->Text = $this->objNarroLog->Priority;
			if ($this->lblPriority) $this->lblPriority->Text = $this->objNarroLog->Priority;

			if ($this->calDate) $this->calDate->DateTime = $this->objNarroLog->Date;
			if ($this->lblDate) $this->lblDate->Text = sprintf($this->objNarroLog->Date) ? $this->objNarroLog->Date->qFormat($this->strDateDateTimeFormat) : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC NARROLOG OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's NarroLog instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveNarroLog() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstLanguage) $this->objNarroLog->LanguageId = $this->lstLanguage->SelectedValue;
				if ($this->lstProject) $this->objNarroLog->ProjectId = $this->lstProject->SelectedValue;
				if ($this->lstUser) $this->objNarroLog->UserId = $this->lstUser->SelectedValue;
				if ($this->txtMessage) $this->objNarroLog->Message = $this->txtMessage->Text;
				if ($this->txtPriority) $this->objNarroLog->Priority = $this->txtPriority->Text;
				if ($this->calDate) $this->objNarroLog->Date = $this->calDate->DateTime;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the NarroLog object
				$this->objNarroLog->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's NarroLog instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteNarroLog() {
			$this->objNarroLog->Delete();
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
				case 'NarroLog': return $this->objNarroLog;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to NarroLog fields -- will be created dynamically if not yet created
				case 'LogIdControl':
					if (!$this->lblLogId) return $this->lblLogId_Create();
					return $this->lblLogId;
				case 'LogIdLabel':
					if (!$this->lblLogId) return $this->lblLogId_Create();
					return $this->lblLogId;
				case 'LanguageIdControl':
					if (!$this->lstLanguage) return $this->lstLanguage_Create();
					return $this->lstLanguage;
				case 'LanguageIdLabel':
					if (!$this->lblLanguageId) return $this->lblLanguageId_Create();
					return $this->lblLanguageId;
				case 'ProjectIdControl':
					if (!$this->lstProject) return $this->lstProject_Create();
					return $this->lstProject;
				case 'ProjectIdLabel':
					if (!$this->lblProjectId) return $this->lblProjectId_Create();
					return $this->lblProjectId;
				case 'UserIdControl':
					if (!$this->lstUser) return $this->lstUser_Create();
					return $this->lstUser;
				case 'UserIdLabel':
					if (!$this->lblUserId) return $this->lblUserId_Create();
					return $this->lblUserId;
				case 'MessageControl':
					if (!$this->txtMessage) return $this->txtMessage_Create();
					return $this->txtMessage;
				case 'MessageLabel':
					if (!$this->lblMessage) return $this->lblMessage_Create();
					return $this->lblMessage;
				case 'PriorityControl':
					if (!$this->txtPriority) return $this->txtPriority_Create();
					return $this->txtPriority;
				case 'PriorityLabel':
					if (!$this->lblPriority) return $this->lblPriority_Create();
					return $this->lblPriority;
				case 'DateControl':
					if (!$this->calDate) return $this->calDate_Create();
					return $this->calDate;
				case 'DateLabel':
					if (!$this->lblDate) return $this->lblDate_Create();
					return $this->lblDate;
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
					// Controls that point to NarroLog fields
					case 'LogIdControl':
						return ($this->lblLogId = QType::Cast($mixValue, 'QControl'));
					case 'LanguageIdControl':
						return ($this->lstLanguage = QType::Cast($mixValue, 'QControl'));
					case 'ProjectIdControl':
						return ($this->lstProject = QType::Cast($mixValue, 'QControl'));
					case 'UserIdControl':
						return ($this->lstUser = QType::Cast($mixValue, 'QControl'));
					case 'MessageControl':
						return ($this->txtMessage = QType::Cast($mixValue, 'QControl'));
					case 'PriorityControl':
						return ($this->txtPriority = QType::Cast($mixValue, 'QControl'));
					case 'DateControl':
						return ($this->calDate = QType::Cast($mixValue, 'QControl'));
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