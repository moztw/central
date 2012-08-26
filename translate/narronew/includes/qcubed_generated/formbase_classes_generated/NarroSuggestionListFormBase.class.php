<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the NarroSuggestion class.  It uses the code-generated
	 * NarroSuggestionDataGrid control which has meta-methods to help with
	 * easily creating/defining NarroSuggestion columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both narro_suggestion_list.php AND
	 * narro_suggestion_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package Narro
	 * @subpackage FormBaseObjects
	 */
	abstract class NarroSuggestionListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list NarroSuggestions
		/**
		 * @var NarroSuggestionDataGrid dtgNarroSuggestions
		 */
		protected $dtgNarroSuggestions;

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
			$this->dtgNarroSuggestions = new NarroSuggestionDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgNarroSuggestions->CssClass = 'datagrid';
			$this->dtgNarroSuggestions->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgNarroSuggestions->Paginator = new QPaginator($this->dtgNarroSuggestions);
			$this->dtgNarroSuggestions->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/narro_suggestion_edit.php';
			$this->dtgNarroSuggestions->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for narro_suggestion's properties, or you
			// can traverse down QQN::narro_suggestion() to display fields that are down the hierarchy)
			$this->dtgNarroSuggestions->MetaAddColumn('SuggestionId');
			$this->dtgNarroSuggestions->MetaAddColumn(QQN::NarroSuggestion()->User);
			$this->dtgNarroSuggestions->MetaAddColumn(QQN::NarroSuggestion()->Text);
			$this->dtgNarroSuggestions->MetaAddColumn(QQN::NarroSuggestion()->Language);
			$this->dtgNarroSuggestions->MetaAddColumn('SuggestionValue');
			$this->dtgNarroSuggestions->MetaAddColumn('SuggestionValueMd5');
			$this->dtgNarroSuggestions->MetaAddColumn('SuggestionCharCount');
			$this->dtgNarroSuggestions->MetaAddColumn('SuggestionWordCount');
			$this->dtgNarroSuggestions->MetaAddColumn('HasComments');
			$this->dtgNarroSuggestions->MetaAddColumn('IsImported');
			$this->dtgNarroSuggestions->MetaAddColumn('Created');
			$this->dtgNarroSuggestions->MetaAddColumn('Modified');
		}
	}
?>
