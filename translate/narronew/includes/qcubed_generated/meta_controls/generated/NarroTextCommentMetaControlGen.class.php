<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the NarroTextComment class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single NarroTextComment object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a NarroTextCommentMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package Narro
	 * @subpackage MetaControls
	 * @property-read NarroTextComment $NarroTextComment the actual NarroTextComment data class being edited
	 * @property QLabel $TextCommentIdControl
	 * @property-read QLabel $TextCommentIdLabel
	 * @property QListBox $TextIdControl
	 * @property-read QLabel $TextIdLabel
	 * @property QListBox $UserIdControl
	 * @property-read QLabel $UserIdLabel
	 * @property QListBox $LanguageIdControl
	 * @property-read QLabel $LanguageIdLabel
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

	class NarroTextCommentMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var NarroTextComment objNarroTextComment
		 * @access protected
		 */
		protected $objNarroTextComment;
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

		// Controls that allow the editing of NarroTextComment's individual data fields
		/**
		 * @var QLabel lblTextCommentId
		 * @access protected
		 */
		protected $lblTextCommentId;
		/**
		 * @var QListBox lstText
		 * @access protected
		 */
		protected $lstText;
		/**
		 * @var QListBox lstUser
		 * @access protected
		 */
		protected $lstUser;
		/**
		 * @var QListBox lstLanguage
		 * @access protected
		 */
		protected $lstLanguage;
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

		// Controls that allow the viewing of NarroTextComment's individual data fields
		/**
		 * @var QLabel lblTextId
		 * @access protected
		 */
		protected $lblTextId;
		/**
		 * @var QLabel lblUserId
		 * @access protected
		 */
		protected $lblUserId;
		/**
		 * @var QLabel lblLanguageId
		 * @access protected
		 */
		protected $lblLanguageId;
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
		 * NarroTextCommentMetaControl to edit a single NarroTextComment object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single NarroTextComment object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroTextCommentMetaControl
		 * @param NarroTextComment $objNarroTextComment new or existing NarroTextComment object
		 */
		 public function __construct($objParentObject, NarroTextComment $objNarroTextComment) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this NarroTextCommentMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked NarroTextComment object
			$this->objNarroTextComment = $objNarroTextComment;

			// Figure out if we're Editing or Creating New
			if ($this->objNarroTextComment->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroTextCommentMetaControl
		 * @param integer $intTextCommentId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing NarroTextComment object creation - defaults to CreateOrEdit
 		 * @return NarroTextCommentMetaControl
		 */
		public static function Create($objParentObject, $intTextCommentId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intTextCommentId)) {
				$objNarroTextComment = NarroTextComment::Load($intTextCommentId);

				// NarroTextComment was found -- return it!
				if ($objNarroTextComment)
					return new NarroTextCommentMetaControl($objParentObject, $objNarroTextComment);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a NarroTextComment object with PK arguments: ' . $intTextCommentId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new NarroTextCommentMetaControl($objParentObject, new NarroTextComment());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroTextCommentMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NarroTextComment object creation - defaults to CreateOrEdit
		 * @return NarroTextCommentMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intTextCommentId = QApplication::PathInfo(0);
			return NarroTextCommentMetaControl::Create($objParentObject, $intTextCommentId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NarroTextCommentMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing NarroTextComment object creation - defaults to CreateOrEdit
		 * @return NarroTextCommentMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intTextCommentId = QApplication::QueryString('intTextCommentId');
			return NarroTextCommentMetaControl::Create($objParentObject, $intTextCommentId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblTextCommentId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTextCommentId_Create($strControlId = null) {
			$this->lblTextCommentId = new QLabel($this->objParentObject, $strControlId);
			$this->lblTextCommentId->Name = QApplication::Translate('Text Comment Id');
			if ($this->blnEditMode)
				$this->lblTextCommentId->Text = $this->objNarroTextComment->TextCommentId;
			else
				$this->lblTextCommentId->Text = 'N/A';
			return $this->lblTextCommentId;
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
				if (($this->objNarroTextComment->Text) && ($this->objNarroTextComment->Text->TextId == $objText->TextId))
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
			$this->lblTextId->Text = ($this->objNarroTextComment->Text) ? $this->objNarroTextComment->Text->__toString() : null;
			$this->lblTextId->Required = true;
			return $this->lblTextId;
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
				if (($this->objNarroTextComment->User) && ($this->objNarroTextComment->User->UserId == $objUser->UserId))
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
			$this->lblUserId->Text = ($this->objNarroTextComment->User) ? $this->objNarroTextComment->User->__toString() : null;
			$this->lblUserId->Required = true;
			return $this->lblUserId;
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
				if (($this->objNarroTextComment->Language) && ($this->objNarroTextComment->Language->LanguageId == $objLanguage->LanguageId))
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
			$this->lblLanguageId->Text = ($this->objNarroTextComment->Language) ? $this->objNarroTextComment->Language->__toString() : null;
			$this->lblLanguageId->Required = true;
			return $this->lblLanguageId;
		}

		/**
		 * Create and setup QDateTimePicker calCreated
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calCreated_Create($strControlId = null) {
			$this->calCreated = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calCreated->Name = QApplication::Translate('Created');
			$this->calCreated->DateTime = $this->objNarroTextComment->Created;
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
			$this->lblCreated->Text = sprintf($this->objNarroTextComment->Created) ? $this->objNarroTextComment->Created->qFormat($this->strCreatedDateTimeFormat) : null;
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
			$this->calModified->DateTime = $this->objNarroTextComment->Modified;
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
			$this->lblModified->Text = sprintf($this->objNarroTextComment->Modified) ? $this->objNarroTextComment->Modified->qFormat($this->strModifiedDateTimeFormat) : null;
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
			$this->txtCommentText->Text = $this->objNarroTextComment->CommentText;
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
			$this->lblCommentText->Text = $this->objNarroTextComment->CommentText;
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
			$this->txtCommentTextMd5->Text = $this->objNarroTextComment->CommentTextMd5;
			$this->txtCommentTextMd5->Required = true;
			$this->txtCommentTextMd5->MaxLength = NarroTextComment::CommentTextMd5MaxLength;
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
			$this->lblCommentTextMd5->Text = $this->objNarroTextComment->CommentTextMd5;
			$this->lblCommentTextMd5->Required = true;
			return $this->lblCommentTextMd5;
		}



		/**
		 * Refresh this MetaControl with Data from the local NarroTextComment object.
		 * @param boolean $blnReload reload NarroTextComment from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objNarroTextComment->Reload();

			if ($this->lblTextCommentId) if ($this->blnEditMode) $this->lblTextCommentId->Text = $this->objNarroTextComment->TextCommentId;

			if ($this->lstText) {
					$this->lstText->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstText->AddItem(QApplication::Translate('- Select One -'), null);
				$objTextArray = NarroText::LoadAll();
				if ($objTextArray) foreach ($objTextArray as $objText) {
					$objListItem = new QListItem($objText->__toString(), $objText->TextId);
					if (($this->objNarroTextComment->Text) && ($this->objNarroTextComment->Text->TextId == $objText->TextId))
						$objListItem->Selected = true;
					$this->lstText->AddItem($objListItem);
				}
			}
			if ($this->lblTextId) $this->lblTextId->Text = ($this->objNarroTextComment->Text) ? $this->objNarroTextComment->Text->__toString() : null;

			if ($this->lstUser) {
					$this->lstUser->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstUser->AddItem(QApplication::Translate('- Select One -'), null);
				$objUserArray = NarroUser::LoadAll();
				if ($objUserArray) foreach ($objUserArray as $objUser) {
					$objListItem = new QListItem($objUser->__toString(), $objUser->UserId);
					if (($this->objNarroTextComment->User) && ($this->objNarroTextComment->User->UserId == $objUser->UserId))
						$objListItem->Selected = true;
					$this->lstUser->AddItem($objListItem);
				}
			}
			if ($this->lblUserId) $this->lblUserId->Text = ($this->objNarroTextComment->User) ? $this->objNarroTextComment->User->__toString() : null;

			if ($this->lstLanguage) {
					$this->lstLanguage->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstLanguage->AddItem(QApplication::Translate('- Select One -'), null);
				$objLanguageArray = NarroLanguage::LoadAll();
				if ($objLanguageArray) foreach ($objLanguageArray as $objLanguage) {
					$objListItem = new QListItem($objLanguage->__toString(), $objLanguage->LanguageId);
					if (($this->objNarroTextComment->Language) && ($this->objNarroTextComment->Language->LanguageId == $objLanguage->LanguageId))
						$objListItem->Selected = true;
					$this->lstLanguage->AddItem($objListItem);
				}
			}
			if ($this->lblLanguageId) $this->lblLanguageId->Text = ($this->objNarroTextComment->Language) ? $this->objNarroTextComment->Language->__toString() : null;

			if ($this->calCreated) $this->calCreated->DateTime = $this->objNarroTextComment->Created;
			if ($this->lblCreated) $this->lblCreated->Text = sprintf($this->objNarroTextComment->Created) ? $this->objNarroTextComment->Created->qFormat($this->strCreatedDateTimeFormat) : null;

			if ($this->calModified) $this->calModified->DateTime = $this->objNarroTextComment->Modified;
			if ($this->lblModified) $this->lblModified->Text = sprintf($this->objNarroTextComment->Modified) ? $this->objNarroTextComment->Modified->qFormat($this->strModifiedDateTimeFormat) : null;

			if ($this->txtCommentText) $this->txtCommentText->Text = $this->objNarroTextComment->CommentText;
			if ($this->lblCommentText) $this->lblCommentText->Text = $this->objNarroTextComment->CommentText;

			if ($this->txtCommentTextMd5) $this->txtCommentTextMd5->Text = $this->objNarroTextComment->CommentTextMd5;
			if ($this->lblCommentTextMd5) $this->lblCommentTextMd5->Text = $this->objNarroTextComment->CommentTextMd5;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC NARROTEXTCOMMENT OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's NarroTextComment instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveNarroTextComment() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstText) $this->objNarroTextComment->TextId = $this->lstText->SelectedValue;
				if ($this->lstUser) $this->objNarroTextComment->UserId = $this->lstUser->SelectedValue;
				if ($this->lstLanguage) $this->objNarroTextComment->LanguageId = $this->lstLanguage->SelectedValue;
				if ($this->calCreated) $this->objNarroTextComment->Created = $this->calCreated->DateTime;
				if ($this->calModified) $this->objNarroTextComment->Modified = $this->calModified->DateTime;
				if ($this->txtCommentText) $this->objNarroTextComment->CommentText = $this->txtCommentText->Text;
				if ($this->txtCommentTextMd5) $this->objNarroTextComment->CommentTextMd5 = $this->txtCommentTextMd5->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the NarroTextComment object
				$this->objNarroTextComment->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's NarroTextComment instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteNarroTextComment() {
			$this->objNarroTextComment->Delete();
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
				case 'NarroTextComment': return $this->objNarroTextComment;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to NarroTextComment fields -- will be created dynamically if not yet created
				case 'TextCommentIdControl':
					if (!$this->lblTextCommentId) return $this->lblTextCommentId_Create();
					return $this->lblTextCommentId;
				case 'TextCommentIdLabel':
					if (!$this->lblTextCommentId) return $this->lblTextCommentId_Create();
					return $this->lblTextCommentId;
				case 'TextIdControl':
					if (!$this->lstText) return $this->lstText_Create();
					return $this->lstText;
				case 'TextIdLabel':
					if (!$this->lblTextId) return $this->lblTextId_Create();
					return $this->lblTextId;
				case 'UserIdControl':
					if (!$this->lstUser) return $this->lstUser_Create();
					return $this->lstUser;
				case 'UserIdLabel':
					if (!$this->lblUserId) return $this->lblUserId_Create();
					return $this->lblUserId;
				case 'LanguageIdControl':
					if (!$this->lstLanguage) return $this->lstLanguage_Create();
					return $this->lstLanguage;
				case 'LanguageIdLabel':
					if (!$this->lblLanguageId) return $this->lblLanguageId_Create();
					return $this->lblLanguageId;
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
					// Controls that point to NarroTextComment fields
					case 'TextCommentIdControl':
						return ($this->lblTextCommentId = QType::Cast($mixValue, 'QControl'));
					case 'TextIdControl':
						return ($this->lstText = QType::Cast($mixValue, 'QControl'));
					case 'UserIdControl':
						return ($this->lstUser = QType::Cast($mixValue, 'QControl'));
					case 'LanguageIdControl':
						return ($this->lstLanguage = QType::Cast($mixValue, 'QControl'));
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