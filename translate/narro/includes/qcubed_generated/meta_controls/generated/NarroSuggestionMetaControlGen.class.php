<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the NarroSuggestion class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single NarroSuggestion object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a NarroSuggestionMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package Narro
	 * @subpackage MetaControls
	 * @property-read NarroSuggestion $NarroSuggestion the actual NarroSuggestion data class being edited
	 * @property QLabel $SuggestionIdControl
	 * @property-read QLabel $SuggestionIdLabel
	 * @property QListBox $UserIdControl
	 * @property-read QLabel $UserIdLabel
	 * @property QListBox $TextIdControl
	 * @property-read QLabel $TextIdLabel
	 * @property QListBox $LanguageIdControl
	 * @property-read QLabel $LanguageIdLabel
	 * @property QTextBox $SuggestionValueControl
	 * @property-read QLabel $SuggestionValueLabel
	 * @property QTextBox $SuggestionValueMd5Control
	 * @property-read QLabel $SuggestionValueMd5Label
	 * @property QIntegerTextBox $SuggestionCharCountControl
	 * @property-read QLabel $SuggestionCharCountLabel
	 * @property QIntegerTextBox $SuggestionWordCountControl
	 * @property-read QLabel $SuggestionWordCountLabel
	 * @property QCheckBox $HasCommentsControl
	 * @property-read QLabel $HasCommentsLabel
	 * @property QCheckBox $IsImportedControl
	 * @property-read QLabel $IsImportedLabel
	 * @property QDateTimePicker $CreatedControl
	 * @property-read QLabel $CreatedLabel
	 * @property QDateTimePicker $ModifiedControl
	 * @property-read QLabel $ModifiedLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class NarroSuggestionMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var NarroSuggestion objNarroSuggestion
		 * @access protected
		 */
		protected $objNarroSuggestion;
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

		// Controls that allow the editing of NarroSuggestion's individual data fields
		/**
		 * @var QLabel lblSuggestionId
		 * @access protected
		 */
		protected $lblSuggestionId;
		/**
		 * @var QListBox lstUser
		 * @access protected
		 */
		protected $lstUser;
		/**
		 * @var QListBox lstText
		 * @access protected
		 */
		protected $lstText;
		/**
		 * @var QListBox lstLanguage
		 * @access protected
		 */
		protected $lstLanguage;
		/**
		 * @var QTextBox txtSuggestionValue
		 * @access protected
		 */
		protected $txtSuggestionValue;
		/**
		 * @var QTextBox txtSuggestionValueMd5
		 * @access protected
		 */
		protected $txtSuggestionValueMd5;
		/**
		 * @var QIntegerTextBox txtSuggestionCharCount
		 * @access protected
		 */
		protected $txtSuggestionCharCount;
		/**
		 * @var QIntegerTextBox txtSuggestionWordCount
		 * @access protected
		 */
		protected $txtSuggestionWordCount;
		/**
		 * @var QCheckBox chkHasComments
		 * @access protected
		 */
		protected $chkHasComments;
		/**
		 * @var QCheckBox chkIsImported
		 * @access protected
		 */
		protected $chkIsImported;
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

		// Controls that allow the viewing of NarroSuggestion's individual data fields
		/**
		 * @var QLabel lblUserId
		 * @access protected
		 */
		protected $lblUserId;
		/**
		 * @var QLabel lblTextId
		 * @access protected
		 */
		protected $lblTextId;
		/**
		 * @var QLabel lblLanguageId
		 * @access protected
		 */
		protected $lblLanguageId;
		/**
		 * @var QLabel lblSuggestionValue
		 * @access protected
		 */
		protected $lblSuggestionValue;
		/**
		 * @var QLabel lblSuggestionValueMd5
		 * @access protected
		 */
		protected $lblSuggestionValueMd5;
		/**
		 * @var QLabel lblSuggestionCharCount
		 * @access protected
		 */
		protected $lblSuggestionCharCount;
		/**
		 * @var QLabel lblSuggestionWordCount
		 * @access protected
		 */
		protected $lblSuggestionWordCount;
		/**
		 * @var QLabel lblHasComments
		 * @access protected
		 */
		protected $lblHasComments;
		/**
		 * @var QLabel lblIsImported
		 * @access protected
		 */
		protected $lblIsImported;
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
		 * NarroSuggestionMetaControl to edit a single NarroSuggestion object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single NarroSuggestion object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroSuggestionMetaControl
		 * @param NarroSuggestion $objNarroSuggestion new or existing NarroSuggestion object
		 */
		 public function __construct($objParentObject, NarroSuggestion $objNarroSuggestion) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this NarroSuggestionMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked NarroSuggestion object
			$this->objNarroSuggestion = $objNarroSuggestion;

			// Figure out if we're Editing or Creating New
			if ($this->objNarroSuggestion->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroSuggestionMetaControl
		 * @param integer $intSuggestionId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing NarroSuggestion object creation - defaults to CreateOrEdit
 		 * @return NarroSuggestionMetaControl
		 */
		public static function Create($objParentObject, $intSuggestionId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intSuggestionId)) {
				$objNarroSuggestion = NarroSuggestion::Load($intSuggestionId);

				// NarroSuggestion was found -- return it!
				if ($objNarroSuggestion)
					return new NarroSuggestionMetaControl($objParentObject, $objNarroSuggestion);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a NarroSuggestion object with PK arguments: ' . $intSuggestionId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new NarroSuggestionMetaControl($objParentObject, new NarroSuggestion());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroSuggestionMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NarroSuggestion object creation - defaults to CreateOrEdit
		 * @return NarroSuggestionMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intSuggestionId = QApplication::PathInfo(0);
			return NarroSuggestionMetaControl::Create($objParentObject, $intSuggestionId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroSuggestionMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NarroSuggestion object creation - defaults to CreateOrEdit
		 * @return NarroSuggestionMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intSuggestionId = QApplication::QueryString('intSuggestionId');
			return NarroSuggestionMetaControl::Create($objParentObject, $intSuggestionId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblSuggestionId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblSuggestionId_Create($strControlId = null) {
			$this->lblSuggestionId = new QLabel($this->objParentObject, $strControlId);
			$this->lblSuggestionId->Name = QApplication::Translate('Suggestion Id');
			if ($this->blnEditMode)
				$this->lblSuggestionId->Text = $this->objNarroSuggestion->SuggestionId;
			else
				$this->lblSuggestionId->Text = 'N/A';
			return $this->lblSuggestionId;
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
				if (($this->objNarroSuggestion->User) && ($this->objNarroSuggestion->User->UserId == $objUser->UserId))
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
			$this->lblUserId->Text = ($this->objNarroSuggestion->User) ? $this->objNarroSuggestion->User->__toString() : null;
			return $this->lblUserId;
		}

		/**
		 * Create and setup QListBox lstText
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstText_Create($strControlId = null) {
			$this->lstText = new QListBox($this->objParentObject, $strControlId);
			$this->lstText->Name = QApplication::Translate('Text');
			$this->lstText->Required = true;
			if (!$this->blnEditMode)
				$this->lstText->AddItem(QApplication::Translate('- Select One -'), null);
			$objTextArray = NarroText::LoadAll();
			if ($objTextArray) foreach ($objTextArray as $objText) {
				$objListItem = new QListItem($objText->__toString(), $objText->TextId);
				if (($this->objNarroSuggestion->Text) && ($this->objNarroSuggestion->Text->TextId == $objText->TextId))
					$objListItem->Selected = true;
				$this->lstText->AddItem($objListItem);
			}
			return $this->lstText;
		}

		/**
		 * Create and setup QLabel lblTextId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTextId_Create($strControlId = null) {
			$this->lblTextId = new QLabel($this->objParentObject, $strControlId);
			$this->lblTextId->Name = QApplication::Translate('Text');
			$this->lblTextId->Text = ($this->objNarroSuggestion->Text) ? $this->objNarroSuggestion->Text->__toString() : null;
			$this->lblTextId->Required = true;
			return $this->lblTextId;
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
				if (($this->objNarroSuggestion->Language) && ($this->objNarroSuggestion->Language->LanguageId == $objLanguage->LanguageId))
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
			$this->lblLanguageId->Text = ($this->objNarroSuggestion->Language) ? $this->objNarroSuggestion->Language->__toString() : null;
			$this->lblLanguageId->Required = true;
			return $this->lblLanguageId;
		}

		/**
		 * Create and setup QTextBox txtSuggestionValue
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtSuggestionValue_Create($strControlId = null) {
			$this->txtSuggestionValue = new QTextBox($this->objParentObject, $strControlId);
			$this->txtSuggestionValue->Name = QApplication::Translate('Suggestion Value');
			$this->txtSuggestionValue->Text = $this->objNarroSuggestion->SuggestionValue;
			$this->txtSuggestionValue->Required = true;
			$this->txtSuggestionValue->TextMode = QTextMode::MultiLine;
			return $this->txtSuggestionValue;
		}

		/**
		 * Create and setup QLabel lblSuggestionValue
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblSuggestionValue_Create($strControlId = null) {
			$this->lblSuggestionValue = new QLabel($this->objParentObject, $strControlId);
			$this->lblSuggestionValue->Name = QApplication::Translate('Suggestion Value');
			$this->lblSuggestionValue->Text = $this->objNarroSuggestion->SuggestionValue;
			$this->lblSuggestionValue->Required = true;
			return $this->lblSuggestionValue;
		}

		/**
		 * Create and setup QTextBox txtSuggestionValueMd5
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtSuggestionValueMd5_Create($strControlId = null) {
			$this->txtSuggestionValueMd5 = new QTextBox($this->objParentObject, $strControlId);
			$this->txtSuggestionValueMd5->Name = QApplication::Translate('Suggestion Value Md 5');
			$this->txtSuggestionValueMd5->Text = $this->objNarroSuggestion->SuggestionValueMd5;
			$this->txtSuggestionValueMd5->Required = true;
			$this->txtSuggestionValueMd5->MaxLength = NarroSuggestion::SuggestionValueMd5MaxLength;
			return $this->txtSuggestionValueMd5;
		}

		/**
		 * Create and setup QLabel lblSuggestionValueMd5
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblSuggestionValueMd5_Create($strControlId = null) {
			$this->lblSuggestionValueMd5 = new QLabel($this->objParentObject, $strControlId);
			$this->lblSuggestionValueMd5->Name = QApplication::Translate('Suggestion Value Md 5');
			$this->lblSuggestionValueMd5->Text = $this->objNarroSuggestion->SuggestionValueMd5;
			$this->lblSuggestionValueMd5->Required = true;
			return $this->lblSuggestionValueMd5;
		}

		/**
		 * Create and setup QIntegerTextBox txtSuggestionCharCount
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtSuggestionCharCount_Create($strControlId = null) {
			$this->txtSuggestionCharCount = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtSuggestionCharCount->Name = QApplication::Translate('Suggestion Char Count');
			$this->txtSuggestionCharCount->Text = $this->objNarroSuggestion->SuggestionCharCount;
			return $this->txtSuggestionCharCount;
		}

		/**
		 * Create and setup QLabel lblSuggestionCharCount
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblSuggestionCharCount_Create($strControlId = null, $strFormat = null) {
			$this->lblSuggestionCharCount = new QLabel($this->objParentObject, $strControlId);
			$this->lblSuggestionCharCount->Name = QApplication::Translate('Suggestion Char Count');
			$this->lblSuggestionCharCount->Text = $this->objNarroSuggestion->SuggestionCharCount;
			$this->lblSuggestionCharCount->Format = $strFormat;
			return $this->lblSuggestionCharCount;
		}

		/**
		 * Create and setup QIntegerTextBox txtSuggestionWordCount
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtSuggestionWordCount_Create($strControlId = null) {
			$this->txtSuggestionWordCount = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtSuggestionWordCount->Name = QApplication::Translate('Suggestion Word Count');
			$this->txtSuggestionWordCount->Text = $this->objNarroSuggestion->SuggestionWordCount;
			return $this->txtSuggestionWordCount;
		}

		/**
		 * Create and setup QLabel lblSuggestionWordCount
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblSuggestionWordCount_Create($strControlId = null, $strFormat = null) {
			$this->lblSuggestionWordCount = new QLabel($this->objParentObject, $strControlId);
			$this->lblSuggestionWordCount->Name = QApplication::Translate('Suggestion Word Count');
			$this->lblSuggestionWordCount->Text = $this->objNarroSuggestion->SuggestionWordCount;
			$this->lblSuggestionWordCount->Format = $strFormat;
			return $this->lblSuggestionWordCount;
		}

		/**
		 * Create and setup QCheckBox chkHasComments
		 * @param string $strControlId optional ControlId to use
		 * @return QCheckBox
		 */
		public function chkHasComments_Create($strControlId = null) {
			$this->chkHasComments = new QCheckBox($this->objParentObject, $strControlId);
			$this->chkHasComments->Name = QApplication::Translate('Has Comments');
			$this->chkHasComments->Checked = $this->objNarroSuggestion->HasComments;
			return $this->chkHasComments;
		}

		/**
		 * Create and setup QLabel lblHasComments
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblHasComments_Create($strControlId = null) {
			$this->lblHasComments = new QLabel($this->objParentObject, $strControlId);
			$this->lblHasComments->Name = QApplication::Translate('Has Comments');
			$this->lblHasComments->Text = ($this->objNarroSuggestion->HasComments) ? QApplication::Translate('Yes') : QApplication::Translate('No');
			return $this->lblHasComments;
		}

		/**
		 * Create and setup QCheckBox chkIsImported
		 * @param string $strControlId optional ControlId to use
		 * @return QCheckBox
		 */
		public function chkIsImported_Create($strControlId = null) {
			$this->chkIsImported = new QCheckBox($this->objParentObject, $strControlId);
			$this->chkIsImported->Name = QApplication::Translate('Is Imported');
			$this->chkIsImported->Checked = $this->objNarroSuggestion->IsImported;
			return $this->chkIsImported;
		}

		/**
		 * Create and setup QLabel lblIsImported
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIsImported_Create($strControlId = null) {
			$this->lblIsImported = new QLabel($this->objParentObject, $strControlId);
			$this->lblIsImported->Name = QApplication::Translate('Is Imported');
			$this->lblIsImported->Text = ($this->objNarroSuggestion->IsImported) ? QApplication::Translate('Yes') : QApplication::Translate('No');
			return $this->lblIsImported;
		}

		/**
		 * Create and setup QDateTimePicker calCreated
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calCreated_Create($strControlId = null) {
			$this->calCreated = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calCreated->Name = QApplication::Translate('Created');
			$this->calCreated->DateTime = $this->objNarroSuggestion->Created;
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
			$this->lblCreated->Text = sprintf($this->objNarroSuggestion->Created) ? $this->objNarroSuggestion->Created->qFormat($this->strCreatedDateTimeFormat) : null;
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
			$this->calModified->DateTime = $this->objNarroSuggestion->Modified;
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
			$this->lblModified->Text = sprintf($this->objNarroSuggestion->Modified) ? $this->objNarroSuggestion->Modified->qFormat($this->strModifiedDateTimeFormat) : null;
			return $this->lblModified;
		}

		protected $strModifiedDateTimeFormat;




		/**
		 * Refresh this MetaControl with Data from the local NarroSuggestion object.
		 * @param boolean $blnReload reload NarroSuggestion from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objNarroSuggestion->Reload();

			if ($this->lblSuggestionId) if ($this->blnEditMode) $this->lblSuggestionId->Text = $this->objNarroSuggestion->SuggestionId;

			if ($this->lstUser) {
					$this->lstUser->RemoveAllItems();
				$this->lstUser->AddItem(QApplication::Translate('- Select One -'), null);
				$objUserArray = NarroUser::LoadAll();
				if ($objUserArray) foreach ($objUserArray as $objUser) {
					$objListItem = new QListItem($objUser->__toString(), $objUser->UserId);
					if (($this->objNarroSuggestion->User) && ($this->objNarroSuggestion->User->UserId == $objUser->UserId))
						$objListItem->Selected = true;
					$this->lstUser->AddItem($objListItem);
				}
			}
			if ($this->lblUserId) $this->lblUserId->Text = ($this->objNarroSuggestion->User) ? $this->objNarroSuggestion->User->__toString() : null;

			if ($this->lstText) {
					$this->lstText->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstText->AddItem(QApplication::Translate('- Select One -'), null);
				$objTextArray = NarroText::LoadAll();
				if ($objTextArray) foreach ($objTextArray as $objText) {
					$objListItem = new QListItem($objText->__toString(), $objText->TextId);
					if (($this->objNarroSuggestion->Text) && ($this->objNarroSuggestion->Text->TextId == $objText->TextId))
						$objListItem->Selected = true;
					$this->lstText->AddItem($objListItem);
				}
			}
			if ($this->lblTextId) $this->lblTextId->Text = ($this->objNarroSuggestion->Text) ? $this->objNarroSuggestion->Text->__toString() : null;

			if ($this->lstLanguage) {
					$this->lstLanguage->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstLanguage->AddItem(QApplication::Translate('- Select One -'), null);
				$objLanguageArray = NarroLanguage::LoadAll();
				if ($objLanguageArray) foreach ($objLanguageArray as $objLanguage) {
					$objListItem = new QListItem($objLanguage->__toString(), $objLanguage->LanguageId);
					if (($this->objNarroSuggestion->Language) && ($this->objNarroSuggestion->Language->LanguageId == $objLanguage->LanguageId))
						$objListItem->Selected = true;
					$this->lstLanguage->AddItem($objListItem);
				}
			}
			if ($this->lblLanguageId) $this->lblLanguageId->Text = ($this->objNarroSuggestion->Language) ? $this->objNarroSuggestion->Language->__toString() : null;

			if ($this->txtSuggestionValue) $this->txtSuggestionValue->Text = $this->objNarroSuggestion->SuggestionValue;
			if ($this->lblSuggestionValue) $this->lblSuggestionValue->Text = $this->objNarroSuggestion->SuggestionValue;

			if ($this->txtSuggestionValueMd5) $this->txtSuggestionValueMd5->Text = $this->objNarroSuggestion->SuggestionValueMd5;
			if ($this->lblSuggestionValueMd5) $this->lblSuggestionValueMd5->Text = $this->objNarroSuggestion->SuggestionValueMd5;

			if ($this->txtSuggestionCharCount) $this->txtSuggestionCharCount->Text = $this->objNarroSuggestion->SuggestionCharCount;
			if ($this->lblSuggestionCharCount) $this->lblSuggestionCharCount->Text = $this->objNarroSuggestion->SuggestionCharCount;

			if ($this->txtSuggestionWordCount) $this->txtSuggestionWordCount->Text = $this->objNarroSuggestion->SuggestionWordCount;
			if ($this->lblSuggestionWordCount) $this->lblSuggestionWordCount->Text = $this->objNarroSuggestion->SuggestionWordCount;

			if ($this->chkHasComments) $this->chkHasComments->Checked = $this->objNarroSuggestion->HasComments;
			if ($this->lblHasComments) $this->lblHasComments->Text = ($this->objNarroSuggestion->HasComments) ? QApplication::Translate('Yes') : QApplication::Translate('No');

			if ($this->chkIsImported) $this->chkIsImported->Checked = $this->objNarroSuggestion->IsImported;
			if ($this->lblIsImported) $this->lblIsImported->Text = ($this->objNarroSuggestion->IsImported) ? QApplication::Translate('Yes') : QApplication::Translate('No');

			if ($this->calCreated) $this->calCreated->DateTime = $this->objNarroSuggestion->Created;
			if ($this->lblCreated) $this->lblCreated->Text = sprintf($this->objNarroSuggestion->Created) ? $this->objNarroSuggestion->Created->qFormat($this->strCreatedDateTimeFormat) : null;

			if ($this->calModified) $this->calModified->DateTime = $this->objNarroSuggestion->Modified;
			if ($this->lblModified) $this->lblModified->Text = sprintf($this->objNarroSuggestion->Modified) ? $this->objNarroSuggestion->Modified->qFormat($this->strModifiedDateTimeFormat) : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC NARROSUGGESTION OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's NarroSuggestion instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveNarroSuggestion() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstUser) $this->objNarroSuggestion->UserId = $this->lstUser->SelectedValue;
				if ($this->lstText) $this->objNarroSuggestion->TextId = $this->lstText->SelectedValue;
				if ($this->lstLanguage) $this->objNarroSuggestion->LanguageId = $this->lstLanguage->SelectedValue;
				if ($this->txtSuggestionValue) $this->objNarroSuggestion->SuggestionValue = $this->txtSuggestionValue->Text;
				if ($this->txtSuggestionValueMd5) $this->objNarroSuggestion->SuggestionValueMd5 = $this->txtSuggestionValueMd5->Text;
				if ($this->txtSuggestionCharCount) $this->objNarroSuggestion->SuggestionCharCount = $this->txtSuggestionCharCount->Text;
				if ($this->txtSuggestionWordCount) $this->objNarroSuggestion->SuggestionWordCount = $this->txtSuggestionWordCount->Text;
				if ($this->chkHasComments) $this->objNarroSuggestion->HasComments = $this->chkHasComments->Checked;
				if ($this->chkIsImported) $this->objNarroSuggestion->IsImported = $this->chkIsImported->Checked;
				if ($this->calCreated) $this->objNarroSuggestion->Created = $this->calCreated->DateTime;
				if ($this->calModified) $this->objNarroSuggestion->Modified = $this->calModified->DateTime;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the NarroSuggestion object
				$this->objNarroSuggestion->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's NarroSuggestion instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteNarroSuggestion() {
			$this->objNarroSuggestion->Delete();
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
				case 'NarroSuggestion': return $this->objNarroSuggestion;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to NarroSuggestion fields -- will be created dynamically if not yet created
				case 'SuggestionIdControl':
					if (!$this->lblSuggestionId) return $this->lblSuggestionId_Create();
					return $this->lblSuggestionId;
				case 'SuggestionIdLabel':
					if (!$this->lblSuggestionId) return $this->lblSuggestionId_Create();
					return $this->lblSuggestionId;
				case 'UserIdControl':
					if (!$this->lstUser) return $this->lstUser_Create();
					return $this->lstUser;
				case 'UserIdLabel':
					if (!$this->lblUserId) return $this->lblUserId_Create();
					return $this->lblUserId;
				case 'TextIdControl':
					if (!$this->lstText) return $this->lstText_Create();
					return $this->lstText;
				case 'TextIdLabel':
					if (!$this->lblTextId) return $this->lblTextId_Create();
					return $this->lblTextId;
				case 'LanguageIdControl':
					if (!$this->lstLanguage) return $this->lstLanguage_Create();
					return $this->lstLanguage;
				case 'LanguageIdLabel':
					if (!$this->lblLanguageId) return $this->lblLanguageId_Create();
					return $this->lblLanguageId;
				case 'SuggestionValueControl':
					if (!$this->txtSuggestionValue) return $this->txtSuggestionValue_Create();
					return $this->txtSuggestionValue;
				case 'SuggestionValueLabel':
					if (!$this->lblSuggestionValue) return $this->lblSuggestionValue_Create();
					return $this->lblSuggestionValue;
				case 'SuggestionValueMd5Control':
					if (!$this->txtSuggestionValueMd5) return $this->txtSuggestionValueMd5_Create();
					return $this->txtSuggestionValueMd5;
				case 'SuggestionValueMd5Label':
					if (!$this->lblSuggestionValueMd5) return $this->lblSuggestionValueMd5_Create();
					return $this->lblSuggestionValueMd5;
				case 'SuggestionCharCountControl':
					if (!$this->txtSuggestionCharCount) return $this->txtSuggestionCharCount_Create();
					return $this->txtSuggestionCharCount;
				case 'SuggestionCharCountLabel':
					if (!$this->lblSuggestionCharCount) return $this->lblSuggestionCharCount_Create();
					return $this->lblSuggestionCharCount;
				case 'SuggestionWordCountControl':
					if (!$this->txtSuggestionWordCount) return $this->txtSuggestionWordCount_Create();
					return $this->txtSuggestionWordCount;
				case 'SuggestionWordCountLabel':
					if (!$this->lblSuggestionWordCount) return $this->lblSuggestionWordCount_Create();
					return $this->lblSuggestionWordCount;
				case 'HasCommentsControl':
					if (!$this->chkHasComments) return $this->chkHasComments_Create();
					return $this->chkHasComments;
				case 'HasCommentsLabel':
					if (!$this->lblHasComments) return $this->lblHasComments_Create();
					return $this->lblHasComments;
				case 'IsImportedControl':
					if (!$this->chkIsImported) return $this->chkIsImported_Create();
					return $this->chkIsImported;
				case 'IsImportedLabel':
					if (!$this->lblIsImported) return $this->lblIsImported_Create();
					return $this->lblIsImported;
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
					// Controls that point to NarroSuggestion fields
					case 'SuggestionIdControl':
						return ($this->lblSuggestionId = QType::Cast($mixValue, 'QControl'));
					case 'UserIdControl':
						return ($this->lstUser = QType::Cast($mixValue, 'QControl'));
					case 'TextIdControl':
						return ($this->lstText = QType::Cast($mixValue, 'QControl'));
					case 'LanguageIdControl':
						return ($this->lstLanguage = QType::Cast($mixValue, 'QControl'));
					case 'SuggestionValueControl':
						return ($this->txtSuggestionValue = QType::Cast($mixValue, 'QControl'));
					case 'SuggestionValueMd5Control':
						return ($this->txtSuggestionValueMd5 = QType::Cast($mixValue, 'QControl'));
					case 'SuggestionCharCountControl':
						return ($this->txtSuggestionCharCount = QType::Cast($mixValue, 'QControl'));
					case 'SuggestionWordCountControl':
						return ($this->txtSuggestionWordCount = QType::Cast($mixValue, 'QControl'));
					case 'HasCommentsControl':
						return ($this->chkHasComments = QType::Cast($mixValue, 'QControl'));
					case 'IsImportedControl':
						return ($this->chkIsImported = QType::Cast($mixValue, 'QControl'));
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