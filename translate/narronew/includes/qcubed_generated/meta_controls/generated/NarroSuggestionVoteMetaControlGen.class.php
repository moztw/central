<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the NarroSuggestionVote class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single NarroSuggestionVote object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a NarroSuggestionVoteMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package Narro
	 * @subpackage MetaControls
	 * @property-read NarroSuggestionVote $NarroSuggestionVote the actual NarroSuggestionVote data class being edited
	 * @property QListBox $SuggestionIdControl
	 * @property-read QLabel $SuggestionIdLabel
	 * @property QListBox $ContextIdControl
	 * @property-read QLabel $ContextIdLabel
	 * @property QListBox $UserIdControl
	 * @property-read QLabel $UserIdLabel
	 * @property QIntegerTextBox $VoteValueControl
	 * @property-read QLabel $VoteValueLabel
	 * @property QDateTimePicker $CreatedControl
	 * @property-read QLabel $CreatedLabel
	 * @property QDateTimePicker $ModifiedControl
	 * @property-read QLabel $ModifiedLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class NarroSuggestionVoteMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var NarroSuggestionVote objNarroSuggestionVote
		 * @access protected
		 */
		protected $objNarroSuggestionVote;
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

		// Controls that allow the editing of NarroSuggestionVote's individual data fields
		/**
		 * @var QListBox lstSuggestion
		 * @access protected
		 */
		protected $lstSuggestion;
		/**
		 * @var QListBox lstContext
		 * @access protected
		 */
		protected $lstContext;
		/**
		 * @var QListBox lstUser
		 * @access protected
		 */
		protected $lstUser;
		/**
		 * @var QIntegerTextBox txtVoteValue
		 * @access protected
		 */
		protected $txtVoteValue;
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

		// Controls that allow the viewing of NarroSuggestionVote's individual data fields
		/**
		 * @var QLabel lblSuggestionId
		 * @access protected
		 */
		protected $lblSuggestionId;
		/**
		 * @var QLabel lblContextId
		 * @access protected
		 */
		protected $lblContextId;
		/**
		 * @var QLabel lblUserId
		 * @access protected
		 */
		protected $lblUserId;
		/**
		 * @var QLabel lblVoteValue
		 * @access protected
		 */
		protected $lblVoteValue;
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

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * NarroSuggestionVoteMetaControl to edit a single NarroSuggestionVote object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single NarroSuggestionVote object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroSuggestionVoteMetaControl
		 * @param NarroSuggestionVote $objNarroSuggestionVote new or existing NarroSuggestionVote object
		 */
		 public function __construct($objParentObject, NarroSuggestionVote $objNarroSuggestionVote) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this NarroSuggestionVoteMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked NarroSuggestionVote object
			$this->objNarroSuggestionVote = $objNarroSuggestionVote;

			// Figure out if we're Editing or Creating New
			if ($this->objNarroSuggestionVote->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroSuggestionVoteMetaControl
		 * @param integer $intSuggestionId primary key value
		 * @param integer $intContextId primary key value
		 * @param integer $intUserId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing NarroSuggestionVote object creation - defaults to CreateOrEdit
 		 * @return NarroSuggestionVoteMetaControl
		 */
		public static function Create($objParentObject, $intSuggestionId = null, $intContextId = null, $intUserId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intSuggestionId) && strlen($intContextId) && strlen($intUserId)) {
				$objNarroSuggestionVote = NarroSuggestionVote::Load($intSuggestionId, $intContextId, $intUserId);

				// NarroSuggestionVote was found -- return it!
				if ($objNarroSuggestionVote)
					return new NarroSuggestionVoteMetaControl($objParentObject, $objNarroSuggestionVote);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a NarroSuggestionVote object with PK arguments: ' . $intSuggestionId . ', ' . $intContextId . ', ' . $intUserId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new NarroSuggestionVoteMetaControl($objParentObject, new NarroSuggestionVote());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroSuggestionVoteMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NarroSuggestionVote object creation - defaults to CreateOrEdit
		 * @return NarroSuggestionVoteMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intSuggestionId = QApplication::PathInfo(0);
			$intContextId = QApplication::PathInfo(1);
			$intUserId = QApplication::PathInfo(2);
			return NarroSuggestionVoteMetaControl::Create($objParentObject, $intSuggestionId, $intContextId, $intUserId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroSuggestionVoteMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NarroSuggestionVote object creation - defaults to CreateOrEdit
		 * @return NarroSuggestionVoteMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intSuggestionId = QApplication::QueryString('intSuggestionId');
			$intContextId = QApplication::QueryString('intContextId');
			$intUserId = QApplication::QueryString('intUserId');
			return NarroSuggestionVoteMetaControl::Create($objParentObject, $intSuggestionId, $intContextId, $intUserId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QListBox lstSuggestion
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstSuggestion_Create($strControlId = null) {
			$this->lstSuggestion = new QListBox($this->objParentObject, $strControlId);
			$this->lstSuggestion->Name = QApplication::Translate('Suggestion');
			$this->lstSuggestion->Required = true;
			if (!$this->blnEditMode)
				$this->lstSuggestion->AddItem(QApplication::Translate('- Select One -'), null);
			$objSuggestionArray = NarroSuggestion::LoadAll();
			if ($objSuggestionArray) foreach ($objSuggestionArray as $objSuggestion) {
				$objListItem = new QListItem($objSuggestion->__toString(), $objSuggestion->SuggestionId);
				if (($this->objNarroSuggestionVote->Suggestion) && ($this->objNarroSuggestionVote->Suggestion->SuggestionId == $objSuggestion->SuggestionId))
					$objListItem->Selected = true;
				$this->lstSuggestion->AddItem($objListItem);
			}
			return $this->lstSuggestion;
		}

		/**
		 * Create and setup QLabel lblSuggestionId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblSuggestionId_Create($strControlId = null) {
			$this->lblSuggestionId = new QLabel($this->objParentObject, $strControlId);
			$this->lblSuggestionId->Name = QApplication::Translate('Suggestion');
			$this->lblSuggestionId->Text = ($this->objNarroSuggestionVote->Suggestion) ? $this->objNarroSuggestionVote->Suggestion->__toString() : null;
			$this->lblSuggestionId->Required = true;
			return $this->lblSuggestionId;
		}

		/**
		 * Create and setup QListBox lstContext
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstContext_Create($strControlId = null) {
			$this->lstContext = new QListBox($this->objParentObject, $strControlId);
			$this->lstContext->Name = QApplication::Translate('Context');
			$this->lstContext->Required = true;
			if (!$this->blnEditMode)
				$this->lstContext->AddItem(QApplication::Translate('- Select One -'), null);
			$objContextArray = NarroContext::LoadAll();
			if ($objContextArray) foreach ($objContextArray as $objContext) {
				$objListItem = new QListItem($objContext->__toString(), $objContext->ContextId);
				if (($this->objNarroSuggestionVote->Context) && ($this->objNarroSuggestionVote->Context->ContextId == $objContext->ContextId))
					$objListItem->Selected = true;
				$this->lstContext->AddItem($objListItem);
			}
			return $this->lstContext;
		}

		/**
		 * Create and setup QLabel lblContextId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblContextId_Create($strControlId = null) {
			$this->lblContextId = new QLabel($this->objParentObject, $strControlId);
			$this->lblContextId->Name = QApplication::Translate('Context');
			$this->lblContextId->Text = ($this->objNarroSuggestionVote->Context) ? $this->objNarroSuggestionVote->Context->__toString() : null;
			$this->lblContextId->Required = true;
			return $this->lblContextId;
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
				if (($this->objNarroSuggestionVote->User) && ($this->objNarroSuggestionVote->User->UserId == $objUser->UserId))
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
			$this->lblUserId->Text = ($this->objNarroSuggestionVote->User) ? $this->objNarroSuggestionVote->User->__toString() : null;
			$this->lblUserId->Required = true;
			return $this->lblUserId;
		}

		/**
		 * Create and setup QIntegerTextBox txtVoteValue
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtVoteValue_Create($strControlId = null) {
			$this->txtVoteValue = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtVoteValue->Name = QApplication::Translate('Vote Value');
			$this->txtVoteValue->Text = $this->objNarroSuggestionVote->VoteValue;
			$this->txtVoteValue->Required = true;
			return $this->txtVoteValue;
		}

		/**
		 * Create and setup QLabel lblVoteValue
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblVoteValue_Create($strControlId = null, $strFormat = null) {
			$this->lblVoteValue = new QLabel($this->objParentObject, $strControlId);
			$this->lblVoteValue->Name = QApplication::Translate('Vote Value');
			$this->lblVoteValue->Text = $this->objNarroSuggestionVote->VoteValue;
			$this->lblVoteValue->Required = true;
			$this->lblVoteValue->Format = $strFormat;
			return $this->lblVoteValue;
		}

		/**
		 * Create and setup QDateTimePicker calCreated
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calCreated_Create($strControlId = null) {
			$this->calCreated = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calCreated->Name = QApplication::Translate('Created');
			$this->calCreated->DateTime = $this->objNarroSuggestionVote->Created;
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
			$this->lblCreated->Text = sprintf($this->objNarroSuggestionVote->Created) ? $this->objNarroSuggestionVote->Created->qFormat($this->strCreatedDateTimeFormat) : null;
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
			$this->calModified->DateTime = $this->objNarroSuggestionVote->Modified;
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
			$this->lblModified->Text = sprintf($this->objNarroSuggestionVote->Modified) ? $this->objNarroSuggestionVote->Modified->qFormat($this->strModifiedDateTimeFormat) : null;
			return $this->lblModified;
		}

		protected $strModifiedDateTimeFormat;




		/**
		 * Refresh this MetaControl with Data from the local NarroSuggestionVote object.
		 * @param boolean $blnReload reload NarroSuggestionVote from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objNarroSuggestionVote->Reload();

			if ($this->lstSuggestion) {
					$this->lstSuggestion->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstSuggestion->AddItem(QApplication::Translate('- Select One -'), null);
				$objSuggestionArray = NarroSuggestion::LoadAll();
				if ($objSuggestionArray) foreach ($objSuggestionArray as $objSuggestion) {
					$objListItem = new QListItem($objSuggestion->__toString(), $objSuggestion->SuggestionId);
					if (($this->objNarroSuggestionVote->Suggestion) && ($this->objNarroSuggestionVote->Suggestion->SuggestionId == $objSuggestion->SuggestionId))
						$objListItem->Selected = true;
					$this->lstSuggestion->AddItem($objListItem);
				}
			}
			if ($this->lblSuggestionId) $this->lblSuggestionId->Text = ($this->objNarroSuggestionVote->Suggestion) ? $this->objNarroSuggestionVote->Suggestion->__toString() : null;

			if ($this->lstContext) {
					$this->lstContext->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstContext->AddItem(QApplication::Translate('- Select One -'), null);
				$objContextArray = NarroContext::LoadAll();
				if ($objContextArray) foreach ($objContextArray as $objContext) {
					$objListItem = new QListItem($objContext->__toString(), $objContext->ContextId);
					if (($this->objNarroSuggestionVote->Context) && ($this->objNarroSuggestionVote->Context->ContextId == $objContext->ContextId))
						$objListItem->Selected = true;
					$this->lstContext->AddItem($objListItem);
				}
			}
			if ($this->lblContextId) $this->lblContextId->Text = ($this->objNarroSuggestionVote->Context) ? $this->objNarroSuggestionVote->Context->__toString() : null;

			if ($this->lstUser) {
					$this->lstUser->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstUser->AddItem(QApplication::Translate('- Select One -'), null);
				$objUserArray = NarroUser::LoadAll();
				if ($objUserArray) foreach ($objUserArray as $objUser) {
					$objListItem = new QListItem($objUser->__toString(), $objUser->UserId);
					if (($this->objNarroSuggestionVote->User) && ($this->objNarroSuggestionVote->User->UserId == $objUser->UserId))
						$objListItem->Selected = true;
					$this->lstUser->AddItem($objListItem);
				}
			}
			if ($this->lblUserId) $this->lblUserId->Text = ($this->objNarroSuggestionVote->User) ? $this->objNarroSuggestionVote->User->__toString() : null;

			if ($this->txtVoteValue) $this->txtVoteValue->Text = $this->objNarroSuggestionVote->VoteValue;
			if ($this->lblVoteValue) $this->lblVoteValue->Text = $this->objNarroSuggestionVote->VoteValue;

			if ($this->calCreated) $this->calCreated->DateTime = $this->objNarroSuggestionVote->Created;
			if ($this->lblCreated) $this->lblCreated->Text = sprintf($this->objNarroSuggestionVote->Created) ? $this->objNarroSuggestionVote->Created->qFormat($this->strCreatedDateTimeFormat) : null;

			if ($this->calModified) $this->calModified->DateTime = $this->objNarroSuggestionVote->Modified;
			if ($this->lblModified) $this->lblModified->Text = sprintf($this->objNarroSuggestionVote->Modified) ? $this->objNarroSuggestionVote->Modified->qFormat($this->strModifiedDateTimeFormat) : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC NARROSUGGESTIONVOTE OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's NarroSuggestionVote instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveNarroSuggestionVote() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstSuggestion) $this->objNarroSuggestionVote->SuggestionId = $this->lstSuggestion->SelectedValue;
				if ($this->lstContext) $this->objNarroSuggestionVote->ContextId = $this->lstContext->SelectedValue;
				if ($this->lstUser) $this->objNarroSuggestionVote->UserId = $this->lstUser->SelectedValue;
				if ($this->txtVoteValue) $this->objNarroSuggestionVote->VoteValue = $this->txtVoteValue->Text;
				if ($this->calCreated) $this->objNarroSuggestionVote->Created = $this->calCreated->DateTime;
				if ($this->calModified) $this->objNarroSuggestionVote->Modified = $this->calModified->DateTime;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the NarroSuggestionVote object
				$this->objNarroSuggestionVote->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's NarroSuggestionVote instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteNarroSuggestionVote() {
			$this->objNarroSuggestionVote->Delete();
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
				case 'NarroSuggestionVote': return $this->objNarroSuggestionVote;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to NarroSuggestionVote fields -- will be created dynamically if not yet created
				case 'SuggestionIdControl':
					if (!$this->lstSuggestion) return $this->lstSuggestion_Create();
					return $this->lstSuggestion;
				case 'SuggestionIdLabel':
					if (!$this->lblSuggestionId) return $this->lblSuggestionId_Create();
					return $this->lblSuggestionId;
				case 'ContextIdControl':
					if (!$this->lstContext) return $this->lstContext_Create();
					return $this->lstContext;
				case 'ContextIdLabel':
					if (!$this->lblContextId) return $this->lblContextId_Create();
					return $this->lblContextId;
				case 'UserIdControl':
					if (!$this->lstUser) return $this->lstUser_Create();
					return $this->lstUser;
				case 'UserIdLabel':
					if (!$this->lblUserId) return $this->lblUserId_Create();
					return $this->lblUserId;
				case 'VoteValueControl':
					if (!$this->txtVoteValue) return $this->txtVoteValue_Create();
					return $this->txtVoteValue;
				case 'VoteValueLabel':
					if (!$this->lblVoteValue) return $this->lblVoteValue_Create();
					return $this->lblVoteValue;
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
					// Controls that point to NarroSuggestionVote fields
					case 'SuggestionIdControl':
						return ($this->lstSuggestion = QType::Cast($mixValue, 'QControl'));
					case 'ContextIdControl':
						return ($this->lstContext = QType::Cast($mixValue, 'QControl'));
					case 'UserIdControl':
						return ($this->lstUser = QType::Cast($mixValue, 'QControl'));
					case 'VoteValueControl':
						return ($this->txtVoteValue = QType::Cast($mixValue, 'QControl'));
					case 'CreatedControl':
						return ($this->calCreated = QType::Cast($mixValue, 'QControl'));
					case 'ModifiedControl':
						return ($this->calModified = QType::Cast($mixValue, 'QControl'));
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