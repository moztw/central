<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the NarroLanguage class.  It uses the code-generated
	 * NarroLanguageDataGrid control which has meta-methods to help with
	 * easily creating/defining NarroLanguage columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both narro_language_list.php AND
	 * narro_language_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package Narro
	 * @subpackage FormBaseObjects
	 */
	abstract class NarroLanguageListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list NarroLanguages
		/**
		 * @var NarroLanguageDataGrid dtgNarroLanguages
		 */
		protected $dtgNarroLanguages;

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
			$this->dtgNarroLanguages = new NarroLanguageDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgNarroLanguages->CssClass = 'datagrid';
			$this->dtgNarroLanguages->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgNarroLanguages->Paginator = new QPaginator($this->dtgNarroLanguages);
			$this->dtgNarroLanguages->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/narro_language_edit.php';
			$this->dtgNarroLanguages->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for narro_language's properties, or you
			// can traverse down QQN::narro_language() to display fields that are down the hierarchy)
			$this->dtgNarroLanguages->MetaAddColumn('LanguageId');
			$this->dtgNarroLanguages->MetaAddColumn('LanguageName');
			$this->dtgNarroLanguages->MetaAddColumn('LanguageCode');
			$this->dtgNarroLanguages->MetaAddColumn('CountryCode');
			$this->dtgNarroLanguages->MetaAddColumn('DialectCode');
			$this->dtgNarroLanguages->MetaAddColumn('Encoding');
			$this->dtgNarroLanguages->MetaAddColumn('TextDirection');
			$this->dtgNarroLanguages->MetaAddColumn('SpecialCharacters');
			$this->dtgNarroLanguages->MetaAddColumn('PluralForm');
			$this->dtgNarroLanguages->MetaAddColumn('Active');
		}
	}
?>
