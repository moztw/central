<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the NarroLanguage class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single NarroLanguage object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a NarroLanguageMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package Narro
	 * @subpackage MetaControls
	 * @property-read NarroLanguage $NarroLanguage the actual NarroLanguage data class being edited
	 * @property QLabel $LanguageIdControl
	 * @property-read QLabel $LanguageIdLabel
	 * @property QTextBox $LanguageNameControl
	 * @property-read QLabel $LanguageNameLabel
	 * @property QTextBox $LanguageCodeControl
	 * @property-read QLabel $LanguageCodeLabel
	 * @property QTextBox $CountryCodeControl
	 * @property-read QLabel $CountryCodeLabel
	 * @property QTextBox $DialectCodeControl
	 * @property-read QLabel $DialectCodeLabel
	 * @property QTextBox $EncodingControl
	 * @property-read QLabel $EncodingLabel
	 * @property QTextBox $TextDirectionControl
	 * @property-read QLabel $TextDirectionLabel
	 * @property QTextBox $SpecialCharactersControl
	 * @property-read QLabel $SpecialCharactersLabel
	 * @property QTextBox $PluralFormControl
	 * @property-read QLabel $PluralFormLabel
	 * @property QCheckBox $ActiveControl
	 * @property-read QLabel $ActiveLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class NarroLanguageMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var NarroLanguage objNarroLanguage
		 * @access protected
		 */
		protected $objNarroLanguage;
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

		// Controls that allow the editing of NarroLanguage's individual data fields
		/**
		 * @var QLabel lblLanguageId
		 * @access protected
		 */
		protected $lblLanguageId;
		/**
		 * @var QTextBox txtLanguageName
		 * @access protected
		 */
		protected $txtLanguageName;
		/**
		 * @var QTextBox txtLanguageCode
		 * @access protected
		 */
		protected $txtLanguageCode;
		/**
		 * @var QTextBox txtCountryCode
		 * @access protected
		 */
		protected $txtCountryCode;
		/**
		 * @var QTextBox txtDialectCode
		 * @access protected
		 */
		protected $txtDialectCode;
		/**
		 * @var QTextBox txtEncoding
		 * @access protected
		 */
		protected $txtEncoding;
		/**
		 * @var QTextBox txtTextDirection
		 * @access protected
		 */
		protected $txtTextDirection;
		/**
		 * @var QTextBox txtSpecialCharacters
		 * @access protected
		 */
		protected $txtSpecialCharacters;
		/**
		 * @var QTextBox txtPluralForm
		 * @access protected
		 */
		protected $txtPluralForm;
		/**
		 * @var QCheckBox chkActive
		 * @access protected
		 */
		protected $chkActive;

		// Controls that allow the viewing of NarroLanguage's individual data fields
		/**
		 * @var QLabel lblLanguageName
		 * @access protected
		 */
		protected $lblLanguageName;
		/**
		 * @var QLabel lblLanguageCode
		 * @access protected
		 */
		protected $lblLanguageCode;
		/**
		 * @var QLabel lblCountryCode
		 * @access protected
		 */
		protected $lblCountryCode;
		/**
		 * @var QLabel lblDialectCode
		 * @access protected
		 */
		protected $lblDialectCode;
		/**
		 * @var QLabel lblEncoding
		 * @access protected
		 */
		protected $lblEncoding;
		/**
		 * @var QLabel lblTextDirection
		 * @access protected
		 */
		protected $lblTextDirection;
		/**
		 * @var QLabel lblSpecialCharacters
		 * @access protected
		 */
		protected $lblSpecialCharacters;
		/**
		 * @var QLabel lblPluralForm
		 * @access protected
		 */
		protected $lblPluralForm;
		/**
		 * @var QLabel lblActive
		 * @access protected
		 */
		protected $lblActive;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * NarroLanguageMetaControl to edit a single NarroLanguage object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single NarroLanguage object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroLanguageMetaControl
		 * @param NarroLanguage $objNarroLanguage new or existing NarroLanguage object
		 */
		 public function __construct($objParentObject, NarroLanguage $objNarroLanguage) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this NarroLanguageMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked NarroLanguage object
			$this->objNarroLanguage = $objNarroLanguage;

			// Figure out if we're Editing or Creating New
			if ($this->objNarroLanguage->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroLanguageMetaControl
		 * @param integer $intLanguageId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing NarroLanguage object creation - defaults to CreateOrEdit
 		 * @return NarroLanguageMetaControl
		 */
		public static function Create($objParentObject, $intLanguageId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intLanguageId)) {
				$objNarroLanguage = NarroLanguage::Load($intLanguageId);

				// NarroLanguage was found -- return it!
				if ($objNarroLanguage)
					return new NarroLanguageMetaControl($objParentObject, $objNarroLanguage);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a NarroLanguage object with PK arguments: ' . $intLanguageId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new NarroLanguageMetaControl($objParentObject, new NarroLanguage());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroLanguageMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NarroLanguage object creation - defaults to CreateOrEdit
		 * @return NarroLanguageMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intLanguageId = QApplication::PathInfo(0);
			return NarroLanguageMetaControl::Create($objParentObject, $intLanguageId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroLanguageMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NarroLanguage object creation - defaults to CreateOrEdit
		 * @return NarroLanguageMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intLanguageId = QApplication::QueryString('intLanguageId');
			return NarroLanguageMetaControl::Create($objParentObject, $intLanguageId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblLanguageId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblLanguageId_Create($strControlId = null) {
			$this->lblLanguageId = new QLabel($this->objParentObject, $strControlId);
			$this->lblLanguageId->Name = QApplication::Translate('Language Id');
			if ($this->blnEditMode)
				$this->lblLanguageId->Text = $this->objNarroLanguage->LanguageId;
			else
				$this->lblLanguageId->Text = 'N/A';
			return $this->lblLanguageId;
		}

		/**
		 * Create and setup QTextBox txtLanguageName
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtLanguageName_Create($strControlId = null) {
			$this->txtLanguageName = new QTextBox($this->objParentObject, $strControlId);
			$this->txtLanguageName->Name = QApplication::Translate('Language Name');
			$this->txtLanguageName->Text = $this->objNarroLanguage->LanguageName;
			$this->txtLanguageName->Required = true;
			$this->txtLanguageName->MaxLength = NarroLanguage::LanguageNameMaxLength;
			return $this->txtLanguageName;
		}

		/**
		 * Create and setup QLabel lblLanguageName
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblLanguageName_Create($strControlId = null) {
			$this->lblLanguageName = new QLabel($this->objParentObject, $strControlId);
			$this->lblLanguageName->Name = QApplication::Translate('Language Name');
			$this->lblLanguageName->Text = $this->objNarroLanguage->LanguageName;
			$this->lblLanguageName->Required = true;
			return $this->lblLanguageName;
		}

		/**
		 * Create and setup QTextBox txtLanguageCode
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtLanguageCode_Create($strControlId = null) {
			$this->txtLanguageCode = new QTextBox($this->objParentObject, $strControlId);
			$this->txtLanguageCode->Name = QApplication::Translate('Language Code');
			$this->txtLanguageCode->Text = $this->objNarroLanguage->LanguageCode;
			$this->txtLanguageCode->Required = true;
			$this->txtLanguageCode->MaxLength = NarroLanguage::LanguageCodeMaxLength;
			return $this->txtLanguageCode;
		}

		/**
		 * Create and setup QLabel lblLanguageCode
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblLanguageCode_Create($strControlId = null) {
			$this->lblLanguageCode = new QLabel($this->objParentObject, $strControlId);
			$this->lblLanguageCode->Name = QApplication::Translate('Language Code');
			$this->lblLanguageCode->Text = $this->objNarroLanguage->LanguageCode;
			$this->lblLanguageCode->Required = true;
			return $this->lblLanguageCode;
		}

		/**
		 * Create and setup QTextBox txtCountryCode
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCountryCode_Create($strControlId = null) {
			$this->txtCountryCode = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCountryCode->Name = QApplication::Translate('Country Code');
			$this->txtCountryCode->Text = $this->objNarroLanguage->CountryCode;
			$this->txtCountryCode->Required = true;
			$this->txtCountryCode->MaxLength = NarroLanguage::CountryCodeMaxLength;
			return $this->txtCountryCode;
		}

		/**
		 * Create and setup QLabel lblCountryCode
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCountryCode_Create($strControlId = null) {
			$this->lblCountryCode = new QLabel($this->objParentObject, $strControlId);
			$this->lblCountryCode->Name = QApplication::Translate('Country Code');
			$this->lblCountryCode->Text = $this->objNarroLanguage->CountryCode;
			$this->lblCountryCode->Required = true;
			return $this->lblCountryCode;
		}

		/**
		 * Create and setup QTextBox txtDialectCode
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtDialectCode_Create($strControlId = null) {
			$this->txtDialectCode = new QTextBox($this->objParentObject, $strControlId);
			$this->txtDialectCode->Name = QApplication::Translate('Dialect Code');
			$this->txtDialectCode->Text = $this->objNarroLanguage->DialectCode;
			$this->txtDialectCode->MaxLength = NarroLanguage::DialectCodeMaxLength;
			return $this->txtDialectCode;
		}

		/**
		 * Create and setup QLabel lblDialectCode
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDialectCode_Create($strControlId = null) {
			$this->lblDialectCode = new QLabel($this->objParentObject, $strControlId);
			$this->lblDialectCode->Name = QApplication::Translate('Dialect Code');
			$this->lblDialectCode->Text = $this->objNarroLanguage->DialectCode;
			return $this->lblDialectCode;
		}

		/**
		 * Create and setup QTextBox txtEncoding
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtEncoding_Create($strControlId = null) {
			$this->txtEncoding = new QTextBox($this->objParentObject, $strControlId);
			$this->txtEncoding->Name = QApplication::Translate('Encoding');
			$this->txtEncoding->Text = $this->objNarroLanguage->Encoding;
			$this->txtEncoding->Required = true;
			$this->txtEncoding->MaxLength = NarroLanguage::EncodingMaxLength;
			return $this->txtEncoding;
		}

		/**
		 * Create and setup QLabel lblEncoding
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblEncoding_Create($strControlId = null) {
			$this->lblEncoding = new QLabel($this->objParentObject, $strControlId);
			$this->lblEncoding->Name = QApplication::Translate('Encoding');
			$this->lblEncoding->Text = $this->objNarroLanguage->Encoding;
			$this->lblEncoding->Required = true;
			return $this->lblEncoding;
		}

		/**
		 * Create and setup QTextBox txtTextDirection
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtTextDirection_Create($strControlId = null) {
			$this->txtTextDirection = new QTextBox($this->objParentObject, $strControlId);
			$this->txtTextDirection->Name = QApplication::Translate('Text Direction');
			$this->txtTextDirection->Text = $this->objNarroLanguage->TextDirection;
			$this->txtTextDirection->Required = true;
			$this->txtTextDirection->MaxLength = NarroLanguage::TextDirectionMaxLength;
			return $this->txtTextDirection;
		}

		/**
		 * Create and setup QLabel lblTextDirection
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTextDirection_Create($strControlId = null) {
			$this->lblTextDirection = new QLabel($this->objParentObject, $strControlId);
			$this->lblTextDirection->Name = QApplication::Translate('Text Direction');
			$this->lblTextDirection->Text = $this->objNarroLanguage->TextDirection;
			$this->lblTextDirection->Required = true;
			return $this->lblTextDirection;
		}

		/**
		 * Create and setup QTextBox txtSpecialCharacters
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtSpecialCharacters_Create($strControlId = null) {
			$this->txtSpecialCharacters = new QTextBox($this->objParentObject, $strControlId);
			$this->txtSpecialCharacters->Name = QApplication::Translate('Special Characters');
			$this->txtSpecialCharacters->Text = $this->objNarroLanguage->SpecialCharacters;
			$this->txtSpecialCharacters->MaxLength = NarroLanguage::SpecialCharactersMaxLength;
			return $this->txtSpecialCharacters;
		}

		/**
		 * Create and setup QLabel lblSpecialCharacters
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblSpecialCharacters_Create($strControlId = null) {
			$this->lblSpecialCharacters = new QLabel($this->objParentObject, $strControlId);
			$this->lblSpecialCharacters->Name = QApplication::Translate('Special Characters');
			$this->lblSpecialCharacters->Text = $this->objNarroLanguage->SpecialCharacters;
			return $this->lblSpecialCharacters;
		}

		/**
		 * Create and setup QTextBox txtPluralForm
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtPluralForm_Create($strControlId = null) {
			$this->txtPluralForm = new QTextBox($this->objParentObject, $strControlId);
			$this->txtPluralForm->Name = QApplication::Translate('Plural Form');
			$this->txtPluralForm->Text = $this->objNarroLanguage->PluralForm;
			$this->txtPluralForm->MaxLength = NarroLanguage::PluralFormMaxLength;
			return $this->txtPluralForm;
		}

		/**
		 * Create and setup QLabel lblPluralForm
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPluralForm_Create($strControlId = null) {
			$this->lblPluralForm = new QLabel($this->objParentObject, $strControlId);
			$this->lblPluralForm->Name = QApplication::Translate('Plural Form');
			$this->lblPluralForm->Text = $this->objNarroLanguage->PluralForm;
			return $this->lblPluralForm;
		}

		/**
		 * Create and setup QCheckBox chkActive
		 * @param string $strControlId optional ControlId to use
		 * @return QCheckBox
		 */
		public function chkActive_Create($strControlId = null) {
			$this->chkActive = new QCheckBox($this->objParentObject, $strControlId);
			$this->chkActive->Name = QApplication::Translate('Active');
			$this->chkActive->Checked = $this->objNarroLanguage->Active;
			return $this->chkActive;
		}

		/**
		 * Create and setup QLabel lblActive
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblActive_Create($strControlId = null) {
			$this->lblActive = new QLabel($this->objParentObject, $strControlId);
			$this->lblActive->Name = QApplication::Translate('Active');
			$this->lblActive->Text = ($this->objNarroLanguage->Active) ? QApplication::Translate('Yes') : QApplication::Translate('No');
			return $this->lblActive;
		}



		/**
		 * Refresh this MetaControl with Data from the local NarroLanguage object.
		 * @param boolean $blnReload reload NarroLanguage from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objNarroLanguage->Reload();

			if ($this->lblLanguageId) if ($this->blnEditMode) $this->lblLanguageId->Text = $this->objNarroLanguage->LanguageId;

			if ($this->txtLanguageName) $this->txtLanguageName->Text = $this->objNarroLanguage->LanguageName;
			if ($this->lblLanguageName) $this->lblLanguageName->Text = $this->objNarroLanguage->LanguageName;

			if ($this->txtLanguageCode) $this->txtLanguageCode->Text = $this->objNarroLanguage->LanguageCode;
			if ($this->lblLanguageCode) $this->lblLanguageCode->Text = $this->objNarroLanguage->LanguageCode;

			if ($this->txtCountryCode) $this->txtCountryCode->Text = $this->objNarroLanguage->CountryCode;
			if ($this->lblCountryCode) $this->lblCountryCode->Text = $this->objNarroLanguage->CountryCode;

			if ($this->txtDialectCode) $this->txtDialectCode->Text = $this->objNarroLanguage->DialectCode;
			if ($this->lblDialectCode) $this->lblDialectCode->Text = $this->objNarroLanguage->DialectCode;

			if ($this->txtEncoding) $this->txtEncoding->Text = $this->objNarroLanguage->Encoding;
			if ($this->lblEncoding) $this->lblEncoding->Text = $this->objNarroLanguage->Encoding;

			if ($this->txtTextDirection) $this->txtTextDirection->Text = $this->objNarroLanguage->TextDirection;
			if ($this->lblTextDirection) $this->lblTextDirection->Text = $this->objNarroLanguage->TextDirection;

			if ($this->txtSpecialCharacters) $this->txtSpecialCharacters->Text = $this->objNarroLanguage->SpecialCharacters;
			if ($this->lblSpecialCharacters) $this->lblSpecialCharacters->Text = $this->objNarroLanguage->SpecialCharacters;

			if ($this->txtPluralForm) $this->txtPluralForm->Text = $this->objNarroLanguage->PluralForm;
			if ($this->lblPluralForm) $this->lblPluralForm->Text = $this->objNarroLanguage->PluralForm;

			if ($this->chkActive) $this->chkActive->Checked = $this->objNarroLanguage->Active;
			if ($this->lblActive) $this->lblActive->Text = ($this->objNarroLanguage->Active) ? QApplication::Translate('Yes') : QApplication::Translate('No');

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC NARROLANGUAGE OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's NarroLanguage instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveNarroLanguage() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtLanguageName) $this->objNarroLanguage->LanguageName = $this->txtLanguageName->Text;
				if ($this->txtLanguageCode) $this->objNarroLanguage->LanguageCode = $this->txtLanguageCode->Text;
				if ($this->txtCountryCode) $this->objNarroLanguage->CountryCode = $this->txtCountryCode->Text;
				if ($this->txtDialectCode) $this->objNarroLanguage->DialectCode = $this->txtDialectCode->Text;
				if ($this->txtEncoding) $this->objNarroLanguage->Encoding = $this->txtEncoding->Text;
				if ($this->txtTextDirection) $this->objNarroLanguage->TextDirection = $this->txtTextDirection->Text;
				if ($this->txtSpecialCharacters) $this->objNarroLanguage->SpecialCharacters = $this->txtSpecialCharacters->Text;
				if ($this->txtPluralForm) $this->objNarroLanguage->PluralForm = $this->txtPluralForm->Text;
				if ($this->chkActive) $this->objNarroLanguage->Active = $this->chkActive->Checked;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the NarroLanguage object
				$this->objNarroLanguage->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's NarroLanguage instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteNarroLanguage() {
			$this->objNarroLanguage->Delete();
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
				case 'NarroLanguage': return $this->objNarroLanguage;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to NarroLanguage fields -- will be created dynamically if not yet created
				case 'LanguageIdControl':
					if (!$this->lblLanguageId) return $this->lblLanguageId_Create();
					return $this->lblLanguageId;
				case 'LanguageIdLabel':
					if (!$this->lblLanguageId) return $this->lblLanguageId_Create();
					return $this->lblLanguageId;
				case 'LanguageNameControl':
					if (!$this->txtLanguageName) return $this->txtLanguageName_Create();
					return $this->txtLanguageName;
				case 'LanguageNameLabel':
					if (!$this->lblLanguageName) return $this->lblLanguageName_Create();
					return $this->lblLanguageName;
				case 'LanguageCodeControl':
					if (!$this->txtLanguageCode) return $this->txtLanguageCode_Create();
					return $this->txtLanguageCode;
				case 'LanguageCodeLabel':
					if (!$this->lblLanguageCode) return $this->lblLanguageCode_Create();
					return $this->lblLanguageCode;
				case 'CountryCodeControl':
					if (!$this->txtCountryCode) return $this->txtCountryCode_Create();
					return $this->txtCountryCode;
				case 'CountryCodeLabel':
					if (!$this->lblCountryCode) return $this->lblCountryCode_Create();
					return $this->lblCountryCode;
				case 'DialectCodeControl':
					if (!$this->txtDialectCode) return $this->txtDialectCode_Create();
					return $this->txtDialectCode;
				case 'DialectCodeLabel':
					if (!$this->lblDialectCode) return $this->lblDialectCode_Create();
					return $this->lblDialectCode;
				case 'EncodingControl':
					if (!$this->txtEncoding) return $this->txtEncoding_Create();
					return $this->txtEncoding;
				case 'EncodingLabel':
					if (!$this->lblEncoding) return $this->lblEncoding_Create();
					return $this->lblEncoding;
				case 'TextDirectionControl':
					if (!$this->txtTextDirection) return $this->txtTextDirection_Create();
					return $this->txtTextDirection;
				case 'TextDirectionLabel':
					if (!$this->lblTextDirection) return $this->lblTextDirection_Create();
					return $this->lblTextDirection;
				case 'SpecialCharactersControl':
					if (!$this->txtSpecialCharacters) return $this->txtSpecialCharacters_Create();
					return $this->txtSpecialCharacters;
				case 'SpecialCharactersLabel':
					if (!$this->lblSpecialCharacters) return $this->lblSpecialCharacters_Create();
					return $this->lblSpecialCharacters;
				case 'PluralFormControl':
					if (!$this->txtPluralForm) return $this->txtPluralForm_Create();
					return $this->txtPluralForm;
				case 'PluralFormLabel':
					if (!$this->lblPluralForm) return $this->lblPluralForm_Create();
					return $this->lblPluralForm;
				case 'ActiveControl':
					if (!$this->chkActive) return $this->chkActive_Create();
					return $this->chkActive;
				case 'ActiveLabel':
					if (!$this->lblActive) return $this->lblActive_Create();
					return $this->lblActive;
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
					// Controls that point to NarroLanguage fields
					case 'LanguageIdControl':
						return ($this->lblLanguageId = QType::Cast($mixValue, 'QControl'));
					case 'LanguageNameControl':
						return ($this->txtLanguageName = QType::Cast($mixValue, 'QControl'));
					case 'LanguageCodeControl':
						return ($this->txtLanguageCode = QType::Cast($mixValue, 'QControl'));
					case 'CountryCodeControl':
						return ($this->txtCountryCode = QType::Cast($mixValue, 'QControl'));
					case 'DialectCodeControl':
						return ($this->txtDialectCode = QType::Cast($mixValue, 'QControl'));
					case 'EncodingControl':
						return ($this->txtEncoding = QType::Cast($mixValue, 'QControl'));
					case 'TextDirectionControl':
						return ($this->txtTextDirection = QType::Cast($mixValue, 'QControl'));
					case 'SpecialCharactersControl':
						return ($this->txtSpecialCharacters = QType::Cast($mixValue, 'QControl'));
					case 'PluralFormControl':
						return ($this->txtPluralForm = QType::Cast($mixValue, 'QControl'));
					case 'ActiveControl':
						return ($this->chkActive = QType::Cast($mixValue, 'QControl'));
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