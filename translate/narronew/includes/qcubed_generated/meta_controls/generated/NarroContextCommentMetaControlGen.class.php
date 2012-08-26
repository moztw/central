<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the NarroContextComment class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single NarroContextComment object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a NarroContextCommentMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package Narro
	 * @subpackage MetaControls
	 * @property-read NarroContextComment $NarroContextComment the actual NarroContextComment data class being edited
	 * @property QLabel $CommentIdControl
	 * @property-read QLabel $CommentIdLabel
	 * @property QListBox $ContextIdControl
	 * @property-read QLabel $ContextIdLabel
	 * @property QDateTimePicker $CreatedControl
	 * @property-read QLabel $CreatedLabel
	 * @property QDateTimePicker $ModifiedControl
	 * @property-read QLabel $ModifiedLabel
	 * @property QTextBox $CommentTextControl
	 * @property-read QLabel $CommentTextLabel
	 * @property QTextBox $CommentTextMd5Control
	 * @property-read QLabel $CommentTextMd5Label
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class NarroContextCommentMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var NarroContextComment objNarroContextComment
		 * @access protected
		 */
		protected $objNarroContextComment;
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

		// Controls that allow the editing of NarroContextComment's individual data fields
		/**
		 * @var QLabel lblCommentId
		 * @access protected
		 */
		protected $lblCommentId;
		/**
		 * @var QListBox lstContext
		 * @access protected
		 */
		protected $lstContext;
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
		/**
		 * @var QTextBox txtCommentText
		 * @access protected
		 */
		protected $txtCommentText;
		/**
		 * @var QTextBox txtCommentTextMd5
		 * @access protected
		 */
		protected $txtCommentTextMd5;

		// Controls that allow the viewing of NarroContextComment's individual data fields
		/**
		 * @var QLabel lblContextId
		 * @access protected
		 */
		protected $lblContextId;
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
		/**
		 * @var QLabel lblCommentText
		 * @access protected
		 */
		protected $lblCommentText;
		/**
		 * @var QLabel lblCommentTextMd5
		 * @access protected
		 */
		protected $lblCommentTextMd5;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * NarroContextCommentMetaControl to edit a single NarroContextComment object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single NarroContextComment object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroContextCommentMetaControl
		 * @param NarroContextComment $objNarroContextComment new or existing NarroContextComment object
		 */
		 public function __construct($objParentObject, NarroContextComment $objNarroContextComment) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this NarroContextCommentMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked NarroContextComment object
			$this->objNarroContextComment = $objNarroContextComment;

			// Figure out if we're Editing or Creating New
			if ($this->objNarroContextComment->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroContextCommentMetaControl
		 * @param integer $intCommentId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing NarroContextComment object creation - defaults to CreateOrEdit
 		 * @return NarroContextCommentMetaControl
		 */
		public static function Create($objParentObject, $intCommentId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intCommentId)) {
				$objNarroContextComment = NarroContextComment::Load($intCommentId);

				// NarroContextComment was found -- return it!
				if ($objNarroContextComment)
					return new NarroContextCommentMetaControl($objParentObject, $objNarroContextComment);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a NarroContextComment object with PK arguments: ' . $intCommentId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new NarroContextCommentMetaControl($objParentObject, new NarroContextComment());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroContextCommentMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NarroContextComment object creation - defaults to CreateOrEdit
		 * @return NarroContextCommentMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intCommentId = QApplication::PathInfo(0);
			return NarroContextCommentMetaControl::Create($objParentObject, $intCommentId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroContextCommentMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NarroContextComment object creation - defaults to CreateOrEdit
		 * @return NarroContextCommentMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intCommentId = QApplication::QueryString('intCommentId');
			return NarroContextCommentMetaControl::Create($objParentObject, $intCommentId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblCommentId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCommentId_Create($strControlId = null) {
			$this->lblCommentId = new QLabel($this->objParentObject, $strControlId);
			$this->lblCommentId->Name = QApplication::Translate('Comment Id');
			if ($this->blnEditMode)
				$this->lblCommentId->Text = $this->objNarroContextComment->CommentId;
			else
				$this->lblCommentId->Text = 'N/A';
			return $this->lblCommentId;
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
				if (($this->objNarroContextComment->Context) && ($this->objNarroContextComment->Context->ContextId == $objContext->ContextId))
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
			$this->lblContextId->Text = ($this->objNarroContextComment->Context) ? $this->objNarroContextComment->Context->__toString() : null;
			$this->lblContextId->Required = true;
			return $this->lblContextId;
		}

		/**
		 * Create and setup QDateTimePicker calCreated
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calCreated_Create($strControlId = null) {
			$this->calCreated = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calCreated->Name = QApplication::Translate('Created');
			$this->calCreated->DateTime = $this->objNarroContextComment->Created;
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
			$this->lblCreated->Text = sprintf($this->objNarroContextComment->Created) ? $this->objNarroContextComment->Created->qFormat($this->strCreatedDateTimeFormat) : null;
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
			$this->calModified->DateTime = $this->objNarroContextComment->Modified;
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
			$this->lblModified->Text = sprintf($this->objNarroContextComment->Modified) ? $this->objNarroContextComment->Modified->qFormat($this->strModifiedDateTimeFormat) : null;
			return $this->lblModified;
		}

		protected $strModifiedDateTimeFormat;


		/**
		 * Create and setup QTextBox txtCommentText
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCommentText_Create($strControlId = null) {
			$this->txtCommentText = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCommentText->Name = QApplication::Translate('Comment Text');
			$this->txtCommentText->Text = $this->objNarroContextComment->CommentText;
			$this->txtCommentText->Required = true;
			$this->txtCommentText->TextMode = QTextMode::MultiLine;
			return $this->txtCommentText;
		}

		/**
		 * Create and setup QLabel lblCommentText
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCommentText_Create($strControlId = null) {
			$this->lblCommentText = new QLabel($this->objParentObject, $strControlId);
			$this->lblCommentText->Name = QApplication::Translate('Comment Text');
			$this->lblCommentText->Text = $this->objNarroContextComment->CommentText;
			$this->lblCommentText->Required = true;
			return $this->lblCommentText;
		}

		/**
		 * Create and setup QTextBox txtCommentTextMd5
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCommentTextMd5_Create($strControlId = null) {
			$this->txtCommentTextMd5 = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCommentTextMd5->Name = QApplication::Translate('Comment Text Md 5');
			$this->txtCommentTextMd5->Text = $this->objNarroContextComment->CommentTextMd5;
			$this->txtCommentTextMd5->Required = true;
			$this->txtCommentTextMd5->MaxLength = NarroContextComment::CommentTextMd5MaxLength;
			return $this->txtCommentTextMd5;
		}

		/**
		 * Create and setup QLabel lblCommentTextMd5
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCommentTextMd5_Create($strControlId = null) {
			$this->lblCommentTextMd5 = new QLabel($this->objParentObject, $strControlId);
			$this->lblCommentTextMd5->Name = QApplication::Translate('Comment Text Md 5');
			$this->lblCommentTextMd5->Text = $this->objNarroContextComment->CommentTextMd5;
			$this->lblCommentTextMd5->Required = true;
			return $this->lblCommentTextMd5;
		}



		/**
		 * Refresh this MetaControl with Data from the local NarroContextComment object.
		 * @param boolean $blnReload reload NarroContextComment from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objNarroContextComment->Reload();

			if ($this->lblCommentId) if ($this->blnEditMode) $this->lblCommentId->Text = $this->objNarroContextComment->CommentId;

			if ($this->lstContext) {
					$this->lstContext->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstContext->AddItem(QApplication::Translate('- Select One -'), null);
				$objContextArray = NarroContext::LoadAll();
				if ($objContextArray) foreach ($objContextArray as $objContext) {
					$objListItem = new QListItem($objContext->__toString(), $objContext->ContextId);
					if (($this->objNarroContextComment->Context) && ($this->objNarroContextComment->Context->ContextId == $objContext->ContextId))
						$objListItem->Selected = true;
					$this->lstContext->AddItem($objListItem);
				}
			}
			if ($this->lblContextId) $this->lblContextId->Text = ($this->objNarroContextComment->Context) ? $this->objNarroContextComment->Context->__toString() : null;

			if ($this->calCreated) $this->calCreated->DateTime = $this->objNarroContextComment->Created;
			if ($this->lblCreated) $this->lblCreated->Text = sprintf($this->objNarroContextComment->Created) ? $this->objNarroContextComment->Created->qFormat($this->strCreatedDateTimeFormat) : null;

			if ($this->calModified) $this->calModified->DateTime = $this->objNarroContextComment->Modified;
			if ($this->lblModified) $this->lblModified->Text = sprintf($this->objNarroContextComment->Modified) ? $this->objNarroContextComment->Modified->qFormat($this->strModifiedDateTimeFormat) : null;

			if ($this->txtCommentText) $this->txtCommentText->Text = $this->objNarroContextComment->CommentText;
			if ($this->lblCommentText) $this->lblCommentText->Text = $this->objNarroContextComment->CommentText;

			if ($this->txtCommentTextMd5) $this->txtCommentTextMd5->Text = $this->objNarroContextComment->CommentTextMd5;
			if ($this->lblCommentTextMd5) $this->lblCommentTextMd5->Text = $this->objNarroContextComment->CommentTextMd5;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC NARROCONTEXTCOMMENT OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's NarroContextComment instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveNarroContextComment() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstContext) $this->objNarroContextComment->ContextId = $this->lstContext->SelectedValue;
				if ($this->calCreated) $this->objNarroContextComment->Created = $this->calCreated->DateTime;
				if ($this->calModified) $this->objNarroContextComment->Modified = $this->calModified->DateTime;
				if ($this->txtCommentText) $this->objNarroContextComment->CommentText = $this->txtCommentText->Text;
				if ($this->txtCommentTextMd5) $this->objNarroContextComment->CommentTextMd5 = $this->txtCommentTextMd5->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the NarroContextComment object
				$this->objNarroContextComment->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's NarroContextComment instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteNarroContextComment() {
			$this->objNarroContextComment->Delete();
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
				case 'NarroContextComment': return $this->objNarroContextComment;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to NarroContextComment fields -- will be created dynamically if not yet created
				case 'CommentIdControl':
					if (!$this->lblCommentId) return $this->lblCommentId_Create();
					return $this->lblCommentId;
				case 'CommentIdLabel':
					if (!$this->lblCommentId) return $this->lblCommentId_Create();
					return $this->lblCommentId;
				case 'ContextIdControl':
					if (!$this->lstContext) return $this->lstContext_Create();
					return $this->lstContext;
				case 'ContextIdLabel':
					if (!$this->lblContextId) return $this->lblContextId_Create();
					return $this->lblContextId;
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
				case 'CommentTextControl':
					if (!$this->txtCommentText) return $this->txtCommentText_Create();
					return $this->txtCommentText;
				case 'CommentTextLabel':
					if (!$this->lblCommentText) return $this->lblCommentText_Create();
					return $this->lblCommentText;
				case 'CommentTextMd5Control':
					if (!$this->txtCommentTextMd5) return $this->txtCommentTextMd5_Create();
					return $this->txtCommentTextMd5;
				case 'CommentTextMd5Label':
					if (!$this->lblCommentTextMd5) return $this->lblCommentTextMd5_Create();
					return $this->lblCommentTextMd5;
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
					// Controls that point to NarroContextComment fields
					case 'CommentIdControl':
						return ($this->lblCommentId = QType::Cast($mixValue, 'QControl'));
					case 'ContextIdControl':
						return ($this->lstContext = QType::Cast($mixValue, 'QControl'));
					case 'CreatedControl':
						return ($this->calCreated = QType::Cast($mixValue, 'QControl'));
					case 'ModifiedControl':
						return ($this->calModified = QType::Cast($mixValue, 'QControl'));
					case 'CommentTextControl':
						return ($this->txtCommentText = QType::Cast($mixValue, 'QControl'));
					case 'CommentTextMd5Control':
						return ($this->txtCommentTextMd5 = QType::Cast($mixValue, 'QControl'));
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