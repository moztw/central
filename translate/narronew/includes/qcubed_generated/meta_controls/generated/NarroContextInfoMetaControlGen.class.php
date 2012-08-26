<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the NarroContextInfo class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single NarroContextInfo object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a NarroContextInfoMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package Narro
	 * @subpackage MetaControls
	 * @property-read NarroContextInfo $NarroContextInfo the actual NarroContextInfo data class being edited
	 * @property QLabel $ContextInfoIdControl
	 * @property-read QLabel $ContextInfoIdLabel
	 * @property QListBox $ContextIdControl
	 * @property-read QLabel $ContextIdLabel
	 * @property QListBox $LanguageIdControl
	 * @property-read QLabel $LanguageIdLabel
	 * @property QListBox $ValidatorUserIdControl
	 * @property-read QLabel $ValidatorUserIdLabel
	 * @property QListBox $ValidSuggestionIdControl
	 * @property-read QLabel $ValidSuggestionIdLabel
	 * @property QCheckBox $HasSuggestionsControl
	 * @property-read QLabel $HasSuggestionsLabel
	 * @property QTextBox $SuggestionAccessKeyControl
	 * @property-read QLabel $SuggestionAccessKeyLabel
	 * @property QTextBox $SuggestionCommandKeyControl
	 * @property-read QLabel $SuggestionCommandKeyLabel
	 * @property QDateTimePicker $CreatedControl
	 * @property-read QLabel $CreatedLabel
	 * @property QDateTimePicker $ModifiedControl
	 * @property-read QLabel $ModifiedLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class NarroContextInfoMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var NarroContextInfo objNarroContextInfo
		 * @access protected
		 */
		protected $objNarroContextInfo;
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

		// Controls that allow the editing of NarroContextInfo's individual data fields
		/**
		 * @var QLabel lblContextInfoId
		 * @access protected
		 */
		protected $lblContextInfoId;
		/**
		 * @var QListBox lstContext
		 * @access protected
		 */
		protected $lstContext;
		/**
		 * @var QListBox lstLanguage
		 * @access protected
		 */
		protected $lstLanguage;
		/**
		 * @var QListBox lstValidatorUser
		 * @access protected
		 */
		protected $lstValidatorUser;
		/**
		 * @var QListBox lstValidSuggestion
		 * @access protected
		 */
		protected $lstValidSuggestion;
		/**
		 * @var QCheckBox chkHasSuggestions
		 * @access protected
		 */
		protected $chkHasSuggestions;
		/**
		 * @var QTextBox txtSuggestionAccessKey
		 * @access protected
		 */
		protected $txtSuggestionAccessKey;
		/**
		 * @var QTextBox txtSuggestionCommandKey
		 * @access protected
		 */
		protected $txtSuggestionCommandKey;
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

		// Controls that allow the viewing of NarroContextInfo's individual data fields
		/**
		 * @var QLabel lblContextId
		 * @access protected
		 */
		protected $lblContextId;
		/**
		 * @var QLabel lblLanguageId
		 * @access protected
		 */
		protected $lblLanguageId;
		/**
		 * @var QLabel lblValidatorUserId
		 * @access protected
		 */
		protected $lblValidatorUserId;
		/**
		 * @var QLabel lblValidSuggestionId
		 * @access protected
		 */
		protected $lblValidSuggestionId;
		/**
		 * @var QLabel lblHasSuggestions
		 * @access protected
		 */
		protected $lblHasSuggestions;
		/**
		 * @var QLabel lblSuggestionAccessKey
		 * @access protected
		 */
		protected $lblSuggestionAccessKey;
		/**
		 * @var QLabel lblSuggestionCommandKey
		 * @access protected
		 */
		protected $lblSuggestionCommandKey;
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
		 * NarroContextInfoMetaControl to edit a single NarroContextInfo object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single NarroContextInfo object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroContextInfoMetaControl
		 * @param NarroContextInfo $objNarroContextInfo new or existing NarroContextInfo object
		 */
		 public function __construct($objParentObject, NarroContextInfo $objNarroContextInfo) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this NarroContextInfoMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked NarroContextInfo object
			$this->objNarroContextInfo = $objNarroContextInfo;

			// Figure out if we're Editing or Creating New
			if ($this->objNarroContextInfo->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroContextInfoMetaControl
		 * @param integer $intContextInfoId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing NarroContextInfo object creation - defaults to CreateOrEdit
 		 * @return NarroContextInfoMetaControl
		 */
		public static function Create($objParentObject, $intContextInfoId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intContextInfoId)) {
				$objNarroContextInfo = NarroContextInfo::Load($intContextInfoId);

				// NarroContextInfo was found -- return it!
				if ($objNarroContextInfo)
					return new NarroContextInfoMetaControl($objParentObject, $objNarroContextInfo);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a NarroContextInfo object with PK arguments: ' . $intContextInfoId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new NarroContextInfoMetaControl($objParentObject, new NarroContextInfo());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroContextInfoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NarroContextInfo object creation - defaults to CreateOrEdit
		 * @return NarroContextInfoMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intContextInfoId = QApplication::PathInfo(0);
			return NarroContextInfoMetaControl::Create($objParentObject, $intContextInfoId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroContextInfoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NarroContextInfo object creation - defaults to CreateOrEdit
		 * @return NarroContextInfoMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intContextInfoId = QApplication::QueryString('intContextInfoId');
			return NarroContextInfoMetaControl::Create($objParentObject, $intContextInfoId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblContextInfoId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblContextInfoId_Create($strControlId = null) {
			$this->lblContextInfoId = new QLabel($this->objParentObject, $strControlId);
			$this->lblContextInfoId->Name = QApplication::Translate('Context Info Id');
			if ($this->blnEditMode)
				$this->lblContextInfoId->Text = $this->objNarroContextInfo->ContextInfoId;
			else
				$this->lblContextInfoId->Text = 'N/A';
			return $this->lblContextInfoId;
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
				if (($this->objNarroContextInfo->Context) && ($this->objNarroContextInfo->Context->ContextId == $objContext->ContextId))
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
			$this->lblContextId->Text = ($this->objNarroContextInfo->Context) ? $this->objNarroContextInfo->Context->__toString() : null;
			$this->lblContextId->Required = true;
			return $this->lblContextId;
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
				if (($this->objNarroContextInfo->Language) && ($this->objNarroContextInfo->Language->LanguageId == $objLanguage->LanguageId))
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
			$this->lblLanguageId->Text = ($this->objNarroContextInfo->Language) ? $this->objNarroContextInfo->Language->__toString() : null;
			$this->lblLanguageId->Required = true;
			return $this->lblLanguageId;
		}

		/**
		 * Create and setup QListBox lstValidatorUser
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstValidatorUser_Create($strControlId = null) {
			$this->lstValidatorUser = new QListBox($this->objParentObject, $strControlId);
			$this->lstValidatorUser->Name = QApplication::Translate('Validator User');
			$this->lstValidatorUser->AddItem(QApplication::Translate('- Select One -'), null);
			$objValidatorUserArray = NarroUser::LoadAll();
			if ($objValidatorUserArray) foreach ($objValidatorUserArray as $objValidatorUser) {
				$objListItem = new QListItem($objValidatorUser->__toString(), $objValidatorUser->UserId);
				if (($this->objNarroContextInfo->ValidatorUser) && ($this->objNarroContextInfo->ValidatorUser->UserId == $objValidatorUser->UserId))
					$objListItem->Selected = true;
				$this->lstValidatorUser->AddItem($objListItem);
			}
			return $this->lstValidatorUser;
		}

		/**
		 * Create and setup QLabel lblValidatorUserId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblValidatorUserId_Create($strControlId = null) {
			$this->lblValidatorUserId = new QLabel($this->objParentObject, $strControlId);
			$this->lblValidatorUserId->Name = QApplication::Translate('Validator User');
			$this->lblValidatorUserId->Text = ($this->objNarroContextInfo->ValidatorUser) ? $this->objNarroContextInfo->ValidatorUser->__toString() : null;
			return $this->lblValidatorUserId;
		}

		/**
		 * Create and setup QListBox lstValidSuggestion
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstValidSuggestion_Create($strControlId = null) {
			$this->lstValidSuggestion = new QListBox($this->objParentObject, $strControlId);
			$this->lstValidSuggestion->Name = QApplication::Translate('Valid Suggestion');
			$this->lstValidSuggestion->AddItem(QApplication::Translate('- Select One -'), null);
			$objValidSuggestionArray = NarroSuggestion::LoadAll();
			if ($objValidSuggestionArray) foreach ($objValidSuggestionArray as $objValidSuggestion) {
				$objListItem = new QListItem($objValidSuggestion->__toString(), $objValidSuggestion->SuggestionId);
				if (($this->objNarroContextInfo->ValidSuggestion) && ($this->objNarroContextInfo->ValidSuggestion->SuggestionId == $objValidSuggestion->SuggestionId))
					$objListItem->Selected = true;
				$this->lstValidSuggestion->AddItem($objListItem);
			}
			return $this->lstValidSuggestion;
		}

		/**
		 * Create and setup QLabel lblValidSuggestionId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblValidSuggestionId_Create($strControlId = null) {
			$this->lblValidSuggestionId = new QLabel($this->objParentObject, $strControlId);
			$this->lblValidSuggestionId->Name = QApplication::Translate('Valid Suggestion');
			$this->lblValidSuggestionId->Text = ($this->objNarroContextInfo->ValidSuggestion) ? $this->objNarroContextInfo->ValidSuggestion->__toString() : null;
			return $this->lblValidSuggestionId;
		}

		/**
		 * Create and setup QCheckBox chkHasSuggestions
		 * @param string $strControlId optional ControlId to use
		 * @return QCheckBox
		 */
		public function chkHasSuggestions_Create($strControlId = null) {
			$this->chkHasSuggestions = new QCheckBox($this->objParentObject, $strControlId);
			$this->chkHasSuggestions->Name = QApplication::Translate('Has Suggestions');
			$this->chkHasSuggestions->Checked = $this->objNarroContextInfo->HasSuggestions;
			return $this->chkHasSuggestions;
		}

		/**
		 * Create and setup QLabel lblHasSuggestions
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblHasSuggestions_Create($strControlId = null) {
			$this->lblHasSuggestions = new QLabel($this->objParentObject, $strControlId);
			$this->lblHasSuggestions->Name = QApplication::Translate('Has Suggestions');
			$this->lblHasSuggestions->Text = ($this->objNarroContextInfo->HasSuggestions) ? QApplication::Translate('Yes') : QApplication::Translate('No');
			return $this->lblHasSuggestions;
		}

		/**
		 * Create and setup QTextBox txtSuggestionAccessKey
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtSuggestionAccessKey_Create($strControlId = null) {
			$this->txtSuggestionAccessKey = new QTextBox($this->objParentObject, $strControlId);
			$this->txtSuggestionAccessKey->Name = QApplication::Translate('Suggestion Access Key');
			$this->txtSuggestionAccessKey->Text = $this->objNarroContextInfo->SuggestionAccessKey;
			$this->txtSuggestionAccessKey->MaxLength = NarroContextInfo::SuggestionAccessKeyMaxLength;
			return $this->txtSuggestionAccessKey;
		}

		/**
		 * Create and setup QLabel lblSuggestionAccessKey
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblSuggestionAccessKey_Create($strControlId = null) {
			$this->lblSuggestionAccessKey = new QLabel($this->objParentObject, $strControlId);
			$this->lblSuggestionAccessKey->Name = QApplication::Translate('Suggestion Access Key');
			$this->lblSuggestionAccessKey->Text = $this->objNarroContextInfo->SuggestionAccessKey;
			return $this->lblSuggestionAccessKey;
		}

		/**
		 * Create and setup QTextBox txtSuggestionCommandKey
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtSuggestionCommandKey_Create($strControlId = null) {
			$this->txtSuggestionCommandKey = new QTextBox($this->objParentObject, $strControlId);
			$this->txtSuggestionCommandKey->Name = QApplication::Translate('Suggestion Command Key');
			$this->txtSuggestionCommandKey->Text = $this->objNarroContextInfo->SuggestionCommandKey;
			$this->txtSuggestionCommandKey->MaxLength = NarroContextInfo::SuggestionCommandKeyMaxLength;
			return $this->txtSuggestionCommandKey;
		}

		/**
		 * Create and setup QLabel lblSuggestionCommandKey
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblSuggestionCommandKey_Create($strControlId = null) {
			$this->lblSuggestionCommandKey = new QLabel($this->objParentObject, $strControlId);
			$this->lblSuggestionCommandKey->Name = QApplication::Translate('Suggestion Command Key');
			$this->lblSuggestionCommandKey->Text = $this->objNarroContextInfo->SuggestionCommandKey;
			return $this->lblSuggestionCommandKey;
		}

		/**
		 * Create and setup QDateTimePicker calCreated
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calCreated_Create($strControlId = null) {
			$this->calCreated = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calCreated->Name = QApplication::Translate('Created');
			$this->calCreated->DateTime = $this->objNarroContextInfo->Created;
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
			$this->lblCreated->Text = sprintf($this->objNarroContextInfo->Created) ? $this->objNarroContextInfo->Created->qFormat($this->strCreatedDateTimeFormat) : null;
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
			$this->calModified->DateTime = $this->objNarroContextInfo->Modified;
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
			$this->lblModified->Text = sprintf($this->objNarroContextInfo->Modified) ? $this->objNarroContextInfo->Modified->qFormat($this->strModifiedDateTimeFormat) : null;
			return $this->lblModified;
		}

		protected $strModifiedDateTimeFormat;




		/**
		 * Refresh this MetaControl with Data from the local NarroContextInfo object.
		 * @param boolean $blnReload reload NarroContextInfo from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objNarroContextInfo->Reload();

			if ($this->lblContextInfoId) if ($this->blnEditMode) $this->lblContextInfoId->Text = $this->objNarroContextInfo->ContextInfoId;

			if ($this->lstContext) {
					$this->lstContext->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstContext->AddItem(QApplication::Translate('- Select One -'), null);
				$objContextArray = NarroContext::LoadAll();
				if ($objContextArray) foreach ($objContextArray as $objContext) {
					$objListItem = new QListItem($objContext->__toString(), $objContext->ContextId);
					if (($this->objNarroContextInfo->Context) && ($this->objNarroContextInfo->Context->ContextId == $objContext->ContextId))
						$objListItem->Selected = true;
					$this->lstContext->AddItem($objListItem);
				}
			}
			if ($this->lblContextId) $this->lblContextId->Text = ($this->objNarroContextInfo->Context) ? $this->objNarroContextInfo->Context->__toString() : null;

			if ($this->lstLanguage) {
					$this->lstLanguage->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstLanguage->AddItem(QApplication::Translate('- Select One -'), null);
				$objLanguageArray = NarroLanguage::LoadAll();
				if ($objLanguageArray) foreach ($objLanguageArray as $objLanguage) {
					$objListItem = new QListItem($objLanguage->__toString(), $objLanguage->LanguageId);
					if (($this->objNarroContextInfo->Language) && ($this->objNarroContextInfo->Language->LanguageId == $objLanguage->LanguageId))
						$objListItem->Selected = true;
					$this->lstLanguage->AddItem($objListItem);
				}
			}
			if ($this->lblLanguageId) $this->lblLanguageId->Text = ($this->objNarroContextInfo->Language) ? $this->objNarroContextInfo->Language->__toString() : null;

			if ($this->lstValidatorUser) {
					$this->lstValidatorUser->RemoveAllItems();
				$this->lstValidatorUser->AddItem(QApplication::Translate('- Select One -'), null);
				$objValidatorUserArray = NarroUser::LoadAll();
				if ($objValidatorUserArray) foreach ($objValidatorUserArray as $objValidatorUser) {
					$objListItem = new QListItem($objValidatorUser->__toString(), $objValidatorUser->UserId);
					if (($this->objNarroContextInfo->ValidatorUser) && ($this->objNarroContextInfo->ValidatorUser->UserId == $objValidatorUser->UserId))
						$objListItem->Selected = true;
					$this->lstValidatorUser->AddItem($objListItem);
				}
			}
			if ($this->lblValidatorUserId) $this->lblValidatorUserId->Text = ($this->objNarroContextInfo->ValidatorUser) ? $this->objNarroContextInfo->ValidatorUser->__toString() : null;

			if ($this->lstValidSuggestion) {
					$this->lstValidSuggestion->RemoveAllItems();
				$this->lstValidSuggestion->AddItem(QApplication::Translate('- Select One -'), null);
				$objValidSuggestionArray = NarroSuggestion::LoadAll();
				if ($objValidSuggestionArray) foreach ($objValidSuggestionArray as $objValidSuggestion) {
					$objListItem = new QListItem($objValidSuggestion->__toString(), $objValidSuggestion->SuggestionId);
					if (($this->objNarroContextInfo->ValidSuggestion) && ($this->objNarroContextInfo->ValidSuggestion->SuggestionId == $objValidSuggestion->SuggestionId))
						$objListItem->Selected = true;
					$this->lstValidSuggestion->AddItem($objListItem);
				}
			}
			if ($this->lblValidSuggestionId) $this->lblValidSuggestionId->Text = ($this->objNarroContextInfo->ValidSuggestion) ? $this->objNarroContextInfo->ValidSuggestion->__toString() : null;

			if ($this->chkHasSuggestions) $this->chkHasSuggestions->Checked = $this->objNarroContextInfo->HasSuggestions;
			if ($this->lblHasSuggestions) $this->lblHasSuggestions->Text = ($this->objNarroContextInfo->HasSuggestions) ? QApplication::Translate('Yes') : QApplication::Translate('No');

			if ($this->txtSuggestionAccessKey) $this->txtSuggestionAccessKey->Text = $this->objNarroContextInfo->SuggestionAccessKey;
			if ($this->lblSuggestionAccessKey) $this->lblSuggestionAccessKey->Text = $this->objNarroContextInfo->SuggestionAccessKey;

			if ($this->txtSuggestionCommandKey) $this->txtSuggestionCommandKey->Text = $this->objNarroContextInfo->SuggestionCommandKey;
			if ($this->lblSuggestionCommandKey) $this->lblSuggestionCommandKey->Text = $this->objNarroContextInfo->SuggestionCommandKey;

			if ($this->calCreated) $this->calCreated->DateTime = $this->objNarroContextInfo->Created;
			if ($this->lblCreated) $this->lblCreated->Text = sprintf($this->objNarroContextInfo->Created) ? $this->objNarroContextInfo->Created->qFormat($this->strCreatedDateTimeFormat) : null;

			if ($this->calModified) $this->calModified->DateTime = $this->objNarroContextInfo->Modified;
			if ($this->lblModified) $this->lblModified->Text = sprintf($this->objNarroContextInfo->Modified) ? $this->objNarroContextInfo->Modified->qFormat($this->strModifiedDateTimeFormat) : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC NARROCONTEXTINFO OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's NarroContextInfo instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveNarroContextInfo() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstContext) $this->objNarroContextInfo->ContextId = $this->lstContext->SelectedValue;
				if ($this->lstLanguage) $this->objNarroContextInfo->LanguageId = $this->lstLanguage->SelectedValue;
				if ($this->lstValidatorUser) $this->objNarroContextInfo->ValidatorUserId = $this->lstValidatorUser->SelectedValue;
				if ($this->lstValidSuggestion) $this->objNarroContextInfo->ValidSuggestionId = $this->lstValidSuggestion->SelectedValue;
				if ($this->chkHasSuggestions) $this->objNarroContextInfo->HasSuggestions = $this->chkHasSuggestions->Checked;
				if ($this->txtSuggestionAccessKey) $this->objNarroContextInfo->SuggestionAccessKey = $this->txtSuggestionAccessKey->Text;
				if ($this->txtSuggestionCommandKey) $this->objNarroContextInfo->SuggestionCommandKey = $this->txtSuggestionCommandKey->Text;
				if ($this->calCreated) $this->objNarroContextInfo->Created = $this->calCreated->DateTime;
				if ($this->calModified) $this->objNarroContextInfo->Modified = $this->calModified->DateTime;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the NarroContextInfo object
				$this->objNarroContextInfo->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's NarroContextInfo instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteNarroContextInfo() {
			$this->objNarroContextInfo->Delete();
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
				case 'NarroContextInfo': return $this->objNarroContextInfo;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to NarroContextInfo fields -- will be created dynamically if not yet created
				case 'ContextInfoIdControl':
					if (!$this->lblContextInfoId) return $this->lblContextInfoId_Create();
					return $this->lblContextInfoId;
				case 'ContextInfoIdLabel':
					if (!$this->lblContextInfoId) return $this->lblContextInfoId_Create();
					return $this->lblContextInfoId;
				case 'ContextIdControl':
					if (!$this->lstContext) return $this->lstContext_Create();
					return $this->lstContext;
				case 'ContextIdLabel':
					if (!$this->lblContextId) return $this->lblContextId_Create();
					return $this->lblContextId;
				case 'LanguageIdControl':
					if (!$this->lstLanguage) return $this->lstLanguage_Create();
					return $this->lstLanguage;
				case 'LanguageIdLabel':
					if (!$this->lblLanguageId) return $this->lblLanguageId_Create();
					return $this->lblLanguageId;
				case 'ValidatorUserIdControl':
					if (!$this->lstValidatorUser) return $this->lstValidatorUser_Create();
					return $this->lstValidatorUser;
				case 'ValidatorUserIdLabel':
					if (!$this->lblValidatorUserId) return $this->lblValidatorUserId_Create();
					return $this->lblValidatorUserId;
				case 'ValidSuggestionIdControl':
					if (!$this->lstValidSuggestion) return $this->lstValidSuggestion_Create();
					return $this->lstValidSuggestion;
				case 'ValidSuggestionIdLabel':
					if (!$this->lblValidSuggestionId) return $this->lblValidSuggestionId_Create();
					return $this->lblValidSuggestionId;
				case 'HasSuggestionsControl':
					if (!$this->chkHasSuggestions) return $this->chkHasSuggestions_Create();
					return $this->chkHasSuggestions;
				case 'HasSuggestionsLabel':
					if (!$this->lblHasSuggestions) return $this->lblHasSuggestions_Create();
					return $this->lblHasSuggestions;
				case 'SuggestionAccessKeyControl':
					if (!$this->txtSuggestionAccessKey) return $this->txtSuggestionAccessKey_Create();
					return $this->txtSuggestionAccessKey;
				case 'SuggestionAccessKeyLabel':
					if (!$this->lblSuggestionAccessKey) return $this->lblSuggestionAccessKey_Create();
					return $this->lblSuggestionAccessKey;
				case 'SuggestionCommandKeyControl':
					if (!$this->txtSuggestionCommandKey) return $this->txtSuggestionCommandKey_Create();
					return $this->txtSuggestionCommandKey;
				case 'SuggestionCommandKeyLabel':
					if (!$this->lblSuggestionCommandKey) return $this->lblSuggestionCommandKey_Create();
					return $this->lblSuggestionCommandKey;
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
					// Controls that point to NarroContextInfo fields
					case 'ContextInfoIdControl':
						return ($this->lblContextInfoId = QType::Cast($mixValue, 'QControl'));
					case 'ContextIdControl':
						return ($this->lstContext = QType::Cast($mixValue, 'QControl'));
					case 'LanguageIdControl':
						return ($this->lstLanguage = QType::Cast($mixValue, 'QControl'));
					case 'ValidatorUserIdControl':
						return ($this->lstValidatorUser = QType::Cast($mixValue, 'QControl'));
					case 'ValidSuggestionIdControl':
						return ($this->lstValidSuggestion = QType::Cast($mixValue, 'QControl'));
					case 'HasSuggestionsControl':
						return ($this->chkHasSuggestions = QType::Cast($mixValue, 'QControl'));
					case 'SuggestionAccessKeyControl':
						return ($this->txtSuggestionAccessKey = QType::Cast($mixValue, 'QControl'));
					case 'SuggestionCommandKeyControl':
						return ($this->txtSuggestionCommandKey = QType::Cast($mixValue, 'QControl'));
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