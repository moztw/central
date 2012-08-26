<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the NarroText class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single NarroText object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a NarroTextMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package Narro
	 * @subpackage MetaControls
	 * @property-read NarroText $NarroText the actual NarroText data class being edited
	 * @property QLabel $TextIdControl
	 * @property-read QLabel $TextIdLabel
	 * @property QTextBox $TextValueControl
	 * @property-read QLabel $TextValueLabel
	 * @property QTextBox $TextValueMd5Control
	 * @property-read QLabel $TextValueMd5Label
	 * @property QIntegerTextBox $TextCharCountControl
	 * @property-read QLabel $TextCharCountLabel
	 * @property QIntegerTextBox $TextWordCountControl
	 * @property-read QLabel $TextWordCountLabel
	 * @property QCheckBox $HasCommentsControl
	 * @property-read QLabel $HasCommentsLabel
	 * @property QDateTimePicker $CreatedControl
	 * @property-read QLabel $CreatedLabel
	 * @property QDateTimePicker $ModifiedControl
	 * @property-read QLabel $ModifiedLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class NarroTextMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var NarroText objNarroText
		 * @access protected
		 */
		protected $objNarroText;
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

		// Controls that allow the editing of NarroText's individual data fields
		/**
		 * @var QLabel lblTextId
		 * @access protected
		 */
		protected $lblTextId;
		/**
		 * @var QTextBox txtTextValue
		 * @access protected
		 */
		protected $txtTextValue;
		/**
		 * @var QTextBox txtTextValueMd5
		 * @access protected
		 */
		protected $txtTextValueMd5;
		/**
		 * @var QIntegerTextBox txtTextCharCount
		 * @access protected
		 */
		protected $txtTextCharCount;
		/**
		 * @var QIntegerTextBox txtTextWordCount
		 * @access protected
		 */
		protected $txtTextWordCount;
		/**
		 * @var QCheckBox chkHasComments
		 * @access protected
		 */
		protected $chkHasComments;
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

		// Controls that allow the viewing of NarroText's individual data fields
		/**
		 * @var QLabel lblTextValue
		 * @access protected
		 */
		protected $lblTextValue;
		/**
		 * @var QLabel lblTextValueMd5
		 * @access protected
		 */
		protected $lblTextValueMd5;
		/**
		 * @var QLabel lblTextCharCount
		 * @access protected
		 */
		protected $lblTextCharCount;
		/**
		 * @var QLabel lblTextWordCount
		 * @access protected
		 */
		protected $lblTextWordCount;
		/**
		 * @var QLabel lblHasComments
		 * @access protected
		 */
		protected $lblHasComments;
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
		 * NarroTextMetaControl to edit a single NarroText object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single NarroText object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroTextMetaControl
		 * @param NarroText $objNarroText new or existing NarroText object
		 */
		 public function __construct($objParentObject, NarroText $objNarroText) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this NarroTextMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked NarroText object
			$this->objNarroText = $objNarroText;

			// Figure out if we're Editing or Creating New
			if ($this->objNarroText->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroTextMetaControl
		 * @param integer $intTextId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing NarroText object creation - defaults to CreateOrEdit
 		 * @return NarroTextMetaControl
		 */
		public static function Create($objParentObject, $intTextId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intTextId)) {
				$objNarroText = NarroText::Load($intTextId);

				// NarroText was found -- return it!
				if ($objNarroText)
					return new NarroTextMetaControl($objParentObject, $objNarroText);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a NarroText object with PK arguments: ' . $intTextId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new NarroTextMetaControl($objParentObject, new NarroText());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroTextMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NarroText object creation - defaults to CreateOrEdit
		 * @return NarroTextMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intTextId = QApplication::PathInfo(0);
			return NarroTextMetaControl::Create($objParentObject, $intTextId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroTextMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NarroText object creation - defaults to CreateOrEdit
		 * @return NarroTextMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intTextId = QApplication::QueryString('intTextId');
			return NarroTextMetaControl::Create($objParentObject, $intTextId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblTextId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTextId_Create($strControlId = null) {
			$this->lblTextId = new QLabel($this->objParentObject, $strControlId);
			$this->lblTextId->Name = QApplication::Translate('Text Id');
			if ($this->blnEditMode)
				$this->lblTextId->Text = $this->objNarroText->TextId;
			else
				$this->lblTextId->Text = 'N/A';
			return $this->lblTextId;
		}

		/**
		 * Create and setup QTextBox txtTextValue
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtTextValue_Create($strControlId = null) {
			$this->txtTextValue = new QTextBox($this->objParentObject, $strControlId);
			$this->txtTextValue->Name = QApplication::Translate('Text Value');
			$this->txtTextValue->Text = $this->objNarroText->TextValue;
			$this->txtTextValue->Required = true;
			$this->txtTextValue->TextMode = QTextMode::MultiLine;
			return $this->txtTextValue;
		}

		/**
		 * Create and setup QLabel lblTextValue
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTextValue_Create($strControlId = null) {
			$this->lblTextValue = new QLabel($this->objParentObject, $strControlId);
			$this->lblTextValue->Name = QApplication::Translate('Text Value');
			$this->lblTextValue->Text = $this->objNarroText->TextValue;
			$this->lblTextValue->Required = true;
			return $this->lblTextValue;
		}

		/**
		 * Create and setup QTextBox txtTextValueMd5
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtTextValueMd5_Create($strControlId = null) {
			$this->txtTextValueMd5 = new QTextBox($this->objParentObject, $strControlId);
			$this->txtTextValueMd5->Name = QApplication::Translate('Text Value Md 5');
			$this->txtTextValueMd5->Text = $this->objNarroText->TextValueMd5;
			$this->txtTextValueMd5->Required = true;
			$this->txtTextValueMd5->MaxLength = NarroText::TextValueMd5MaxLength;
			return $this->txtTextValueMd5;
		}

		/**
		 * Create and setup QLabel lblTextValueMd5
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTextValueMd5_Create($strControlId = null) {
			$this->lblTextValueMd5 = new QLabel($this->objParentObject, $strControlId);
			$this->lblTextValueMd5->Name = QApplication::Translate('Text Value Md 5');
			$this->lblTextValueMd5->Text = $this->objNarroText->TextValueMd5;
			$this->lblTextValueMd5->Required = true;
			return $this->lblTextValueMd5;
		}

		/**
		 * Create and setup QIntegerTextBox txtTextCharCount
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtTextCharCount_Create($strControlId = null) {
			$this->txtTextCharCount = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtTextCharCount->Name = QApplication::Translate('Text Char Count');
			$this->txtTextCharCount->Text = $this->objNarroText->TextCharCount;
			$this->txtTextCharCount->Required = true;
			return $this->txtTextCharCount;
		}

		/**
		 * Create and setup QLabel lblTextCharCount
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblTextCharCount_Create($strControlId = null, $strFormat = null) {
			$this->lblTextCharCount = new QLabel($this->objParentObject, $strControlId);
			$this->lblTextCharCount->Name = QApplication::Translate('Text Char Count');
			$this->lblTextCharCount->Text = $this->objNarroText->TextCharCount;
			$this->lblTextCharCount->Required = true;
			$this->lblTextCharCount->Format = $strFormat;
			return $this->lblTextCharCount;
		}

		/**
		 * Create and setup QIntegerTextBox txtTextWordCount
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtTextWordCount_Create($strControlId = null) {
			$this->txtTextWordCount = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtTextWordCount->Name = QApplication::Translate('Text Word Count');
			$this->txtTextWordCount->Text = $this->objNarroText->TextWordCount;
			return $this->txtTextWordCount;
		}

		/**
		 * Create and setup QLabel lblTextWordCount
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblTextWordCount_Create($strControlId = null, $strFormat = null) {
			$this->lblTextWordCount = new QLabel($this->objParentObject, $strControlId);
			$this->lblTextWordCount->Name = QApplication::Translate('Text Word Count');
			$this->lblTextWordCount->Text = $this->objNarroText->TextWordCount;
			$this->lblTextWordCount->Format = $strFormat;
			return $this->lblTextWordCount;
		}

		/**
		 * Create and setup QCheckBox chkHasComments
		 * @param string $strControlId optional ControlId to use
		 * @return QCheckBox
		 */
		public function chkHasComments_Create($strControlId = null) {
			$this->chkHasComments = new QCheckBox($this->objParentObject, $strControlId);
			$this->chkHasComments->Name = QApplication::Translate('Has Comments');
			$this->chkHasComments->Checked = $this->objNarroText->HasComments;
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
			$this->lblHasComments->Text = ($this->objNarroText->HasComments) ? QApplication::Translate('Yes') : QApplication::Translate('No');
			return $this->lblHasComments;
		}

		/**
		 * Create and setup QDateTimePicker calCreated
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calCreated_Create($strControlId = null) {
			$this->calCreated = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calCreated->Name = QApplication::Translate('Created');
			$this->calCreated->DateTime = $this->objNarroText->Created;
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
			$this->lblCreated->Text = sprintf($this->objNarroText->Created) ? $this->objNarroText->Created->qFormat($this->strCreatedDateTimeFormat) : null;
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
			$this->calModified->DateTime = $this->objNarroText->Modified;
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
			$this->lblModified->Text = sprintf($this->objNarroText->Modified) ? $this->objNarroText->Modified->qFormat($this->strModifiedDateTimeFormat) : null;
			return $this->lblModified;
		}

		protected $strModifiedDateTimeFormat;




		/**
		 * Refresh this MetaControl with Data from the local NarroText object.
		 * @param boolean $blnReload reload NarroText from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objNarroText->Reload();

			if ($this->lblTextId) if ($this->blnEditMode) $this->lblTextId->Text = $this->objNarroText->TextId;

			if ($this->txtTextValue) $this->txtTextValue->Text = $this->objNarroText->TextValue;
			if ($this->lblTextValue) $this->lblTextValue->Text = $this->objNarroText->TextValue;

			if ($this->txtTextValueMd5) $this->txtTextValueMd5->Text = $this->objNarroText->TextValueMd5;
			if ($this->lblTextValueMd5) $this->lblTextValueMd5->Text = $this->objNarroText->TextValueMd5;

			if ($this->txtTextCharCount) $this->txtTextCharCount->Text = $this->objNarroText->TextCharCount;
			if ($this->lblTextCharCount) $this->lblTextCharCount->Text = $this->objNarroText->TextCharCount;

			if ($this->txtTextWordCount) $this->txtTextWordCount->Text = $this->objNarroText->TextWordCount;
			if ($this->lblTextWordCount) $this->lblTextWordCount->Text = $this->objNarroText->TextWordCount;

			if ($this->chkHasComments) $this->chkHasComments->Checked = $this->objNarroText->HasComments;
			if ($this->lblHasComments) $this->lblHasComments->Text = ($this->objNarroText->HasComments) ? QApplication::Translate('Yes') : QApplication::Translate('No');

			if ($this->calCreated) $this->calCreated->DateTime = $this->objNarroText->Created;
			if ($this->lblCreated) $this->lblCreated->Text = sprintf($this->objNarroText->Created) ? $this->objNarroText->Created->qFormat($this->strCreatedDateTimeFormat) : null;

			if ($this->calModified) $this->calModified->DateTime = $this->objNarroText->Modified;
			if ($this->lblModified) $this->lblModified->Text = sprintf($this->objNarroText->Modified) ? $this->objNarroText->Modified->qFormat($this->strModifiedDateTimeFormat) : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC NARROTEXT OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's NarroText instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveNarroText() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtTextValue) $this->objNarroText->TextValue = $this->txtTextValue->Text;
				if ($this->txtTextValueMd5) $this->objNarroText->TextValueMd5 = $this->txtTextValueMd5->Text;
				if ($this->txtTextCharCount) $this->objNarroText->TextCharCount = $this->txtTextCharCount->Text;
				if ($this->txtTextWordCount) $this->objNarroText->TextWordCount = $this->txtTextWordCount->Text;
				if ($this->chkHasComments) $this->objNarroText->HasComments = $this->chkHasComments->Checked;
				if ($this->calCreated) $this->objNarroText->Created = $this->calCreated->DateTime;
				if ($this->calModified) $this->objNarroText->Modified = $this->calModified->DateTime;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the NarroText object
				$this->objNarroText->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's NarroText instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteNarroText() {
			$this->objNarroText->Delete();
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
				case 'NarroText': return $this->objNarroText;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to NarroText fields -- will be created dynamically if not yet created
				case 'TextIdControl':
					if (!$this->lblTextId) return $this->lblTextId_Create();
					return $this->lblTextId;
				case 'TextIdLabel':
					if (!$this->lblTextId) return $this->lblTextId_Create();
					return $this->lblTextId;
				case 'TextValueControl':
					if (!$this->txtTextValue) return $this->txtTextValue_Create();
					return $this->txtTextValue;
				case 'TextValueLabel':
					if (!$this->lblTextValue) return $this->lblTextValue_Create();
					return $this->lblTextValue;
				case 'TextValueMd5Control':
					if (!$this->txtTextValueMd5) return $this->txtTextValueMd5_Create();
					return $this->txtTextValueMd5;
				case 'TextValueMd5Label':
					if (!$this->lblTextValueMd5) return $this->lblTextValueMd5_Create();
					return $this->lblTextValueMd5;
				case 'TextCharCountControl':
					if (!$this->txtTextCharCount) return $this->txtTextCharCount_Create();
					return $this->txtTextCharCount;
				case 'TextCharCountLabel':
					if (!$this->lblTextCharCount) return $this->lblTextCharCount_Create();
					return $this->lblTextCharCount;
				case 'TextWordCountControl':
					if (!$this->txtTextWordCount) return $this->txtTextWordCount_Create();
					return $this->txtTextWordCount;
				case 'TextWordCountLabel':
					if (!$this->lblTextWordCount) return $this->lblTextWordCount_Create();
					return $this->lblTextWordCount;
				case 'HasCommentsControl':
					if (!$this->chkHasComments) return $this->chkHasComments_Create();
					return $this->chkHasComments;
				case 'HasCommentsLabel':
					if (!$this->lblHasComments) return $this->lblHasComments_Create();
					return $this->lblHasComments;
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
					// Controls that point to NarroText fields
					case 'TextIdControl':
						return ($this->lblTextId = QType::Cast($mixValue, 'QControl'));
					case 'TextValueControl':
						return ($this->txtTextValue = QType::Cast($mixValue, 'QControl'));
					case 'TextValueMd5Control':
						return ($this->txtTextValueMd5 = QType::Cast($mixValue, 'QControl'));
					case 'TextCharCountControl':
						return ($this->txtTextCharCount = QType::Cast($mixValue, 'QControl'));
					case 'TextWordCountControl':
						return ($this->txtTextWordCount = QType::Cast($mixValue, 'QControl'));
					case 'HasCommentsControl':
						return ($this->chkHasComments = QType::Cast($mixValue, 'QControl'));
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