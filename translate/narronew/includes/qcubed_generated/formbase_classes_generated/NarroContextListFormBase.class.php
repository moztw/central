<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the NarroContext class.  It uses the code-generated
	 * NarroContextDataGrid control which has meta-methods to help with
	 * easily creating/defining NarroContext columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both narro_context_list.php AND
	 * narro_context_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package Narro
	 * @subpackage FormBaseObjects
	 */
	abstract class NarroContextListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list NarroContexts
		/**
		 * @var NarroContextDataGrid dtgNarroContexts
		 */
		protected $dtgNarroContexts;

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
			$this->dtgNarroContexts = new NarroContextDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgNarroContexts->CssClass = 'datagrid';
			$this->dtgNarroContexts->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgNarroContexts->Paginator = new QPaginator($this->dtgNarroContexts);
			$this->dtgNarroContexts->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/narro_context_edit.php';
			$this->dtgNarroContexts->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for narro_context's properties, or you
			// can traverse down QQN::narro_context() to display fields that are down the hierarchy)
			$this->dtgNarroContexts->MetaAddColumn('ContextId');
			$this->dtgNarroContexts->MetaAddColumn(QQN::NarroContext()->Text);
			$this->dtgNarroContexts->MetaAddColumn('TextAccessKey');
			$this->dtgNarroContexts->MetaAddColumn('TextCommandKey');
			$this->dtgNarroContexts->MetaAddColumn(QQN::NarroContext()->Project);
			$this->dtgNarroContexts->MetaAddColumn('Context');
			$this->dtgNarroContexts->MetaAddColumn('ContextMd5');
			$this->dtgNarroContexts->MetaAddColumn('Comment');
			$this->dtgNarroContexts->MetaAddColumn('CommentMd5');
			$this->dtgNarroContexts->MetaAddColumn(QQN::NarroContext()->File);
			$this->dtgNarroContexts->MetaAddColumn('Created');
			$this->dtgNarroContexts->MetaAddColumn('Modified');
			$this->dtgNarroContexts->MetaAddColumn('Active');
		}
	}
?>
