<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the NarroText class.  It uses the code-generated
	 * NarroTextDataGrid control which has meta-methods to help with
	 * easily creating/defining NarroText columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both narro_text_list.php AND
	 * narro_text_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package Narro
	 * @subpackage FormBaseObjects
	 */
	abstract class NarroTextListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list NarroTexts
		/**
		 * @var NarroTextDataGrid dtgNarroTexts
		 */
		protected $dtgNarroTexts;

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
			$this->dtgNarroTexts = new NarroTextDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgNarroTexts->CssClass = 'datagrid';
			$this->dtgNarroTexts->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgNarroTexts->Paginator = new QPaginator($this->dtgNarroTexts);
			$this->dtgNarroTexts->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/narro_text_edit.php';
			$this->dtgNarroTexts->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for narro_text's properties, or you
			// can traverse down QQN::narro_text() to display fields that are down the hierarchy)
			$this->dtgNarroTexts->MetaAddColumn('TextId');
			$this->dtgNarroTexts->MetaAddColumn('TextValue');
			$this->dtgNarroTexts->MetaAddColumn('TextValueMd5');
			$this->dtgNarroTexts->MetaAddColumn('TextCharCount');
			$this->dtgNarroTexts->MetaAddColumn('TextWordCount');
			$this->dtgNarroTexts->MetaAddColumn('HasComments');
			$this->dtgNarroTexts->MetaAddColumn('Created');
			$this->dtgNarroTexts->MetaAddColumn('Modified');
		}
	}
?>
