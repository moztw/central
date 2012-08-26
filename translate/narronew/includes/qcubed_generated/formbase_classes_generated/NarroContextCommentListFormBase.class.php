<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the NarroContextComment class.  It uses the code-generated
	 * NarroContextCommentDataGrid control which has meta-methods to help with
	 * easily creating/defining NarroContextComment columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both narro_context_comment_list.php AND
	 * narro_context_comment_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package Narro
	 * @subpackage FormBaseObjects
	 */
	abstract class NarroContextCommentListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list NarroContextComments
		/**
		 * @var NarroContextCommentDataGrid dtgNarroContextComments
		 */
		protected $dtgNarroContextComments;

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
			$this->dtgNarroContextComments = new NarroContextCommentDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgNarroContextComments->CssClass = 'datagrid';
			$this->dtgNarroContextComments->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgNarroContextComments->Paginator = new QPaginator($this->dtgNarroContextComments);
			$this->dtgNarroContextComments->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/narro_context_comment_edit.php';
			$this->dtgNarroContextComments->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for narro_context_comment's properties, or you
			// can traverse down QQN::narro_context_comment() to display fields that are down the hierarchy)
			$this->dtgNarroContextComments->MetaAddColumn('CommentId');
			$this->dtgNarroContextComments->MetaAddColumn(QQN::NarroContextComment()->Context);
			$this->dtgNarroContextComments->MetaAddColumn('Created');
			$this->dtgNarroContextComments->MetaAddColumn('Modified');
			$this->dtgNarroContextComments->MetaAddColumn('CommentText');
			$this->dtgNarroContextComments->MetaAddColumn('CommentTextMd5');
		}
	}
?>
