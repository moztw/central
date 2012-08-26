<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the NarroTextComment class.  It uses the code-generated
	 * NarroTextCommentDataGrid control which has meta-methods to help with
	 * easily creating/defining NarroTextComment columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both narro_text_comment_list.php AND
	 * narro_text_comment_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package Narro
	 * @subpackage FormBaseObjects
	 */
	abstract class NarroTextCommentListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list NarroTextComments
		/**
		 * @var NarroTextCommentDataGrid dtgNarroTextComments
		 */
		protected $dtgNarroTextComments;

		// Create QForm Event Handlers as Needed

//		protected function Form_Exit() {}
//		protected function Form_Load() {}
//		protected function Form_PreRender() {}
//		protected function Form_Validate() {}

		protected function Form_Run() {
			parent::Form_Run();
		}

		protected function Form_Create() {
			parent::Form_Create();

			// Instantiate the Meta DataGrid
			$this->dtgNarroTextComments = new NarroTextCommentDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgNarroTextComments->CssClass = 'datagrid';
			$this->dtgNarroTextComments->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgNarroTextComments->Paginator = new QPaginator($this->dtgNarroTextComments);
			$this->dtgNarroTextComments->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/narro_text_comment_edit.php';
			$this->dtgNarroTextComments->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for narro_text_comment's properties, or you
			// can traverse down QQN::narro_text_comment() to display fields that are down the hierarchy)
			$this->dtgNarroTextComments->MetaAddColumn('TextCommentId');
			$this->dtgNarroTextComments->MetaAddColumn(QQN::NarroTextComment()->Text);
			$this->dtgNarroTextComments->MetaAddColumn(QQN::NarroTextComment()->User);
			$this->dtgNarroTextComments->MetaAddColumn(QQN::NarroTextComment()->Language);
			$this->dtgNarroTextComments->MetaAddColumn('Created');
			$this->dtgNarroTextComments->MetaAddColumn('Modified');
			$this->dtgNarroTextComments->MetaAddColumn('CommentText');
			$this->dtgNarroTextComments->MetaAddColumn('CommentTextMd5');
		}
	}
?>
