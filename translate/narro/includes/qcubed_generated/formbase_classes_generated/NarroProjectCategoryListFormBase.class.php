<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the NarroProjectCategory class.  It uses the code-generated
	 * NarroProjectCategoryDataGrid control which has meta-methods to help with
	 * easily creating/defining NarroProjectCategory columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both narro_project_category_list.php AND
	 * narro_project_category_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package Narro
	 * @subpackage FormBaseObjects
	 */
	abstract class NarroProjectCategoryListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list NarroProjectCategories
		/**
		 * @var NarroProjectCategoryDataGrid dtgNarroProjectCategories
		 */
		protected $dtgNarroProjectCategories;

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
			$this->dtgNarroProjectCategories = new NarroProjectCategoryDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgNarroProjectCategories->CssClass = 'datagrid';
			$this->dtgNarroProjectCategories->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgNarroProjectCategories->Paginator = new QPaginator($this->dtgNarroProjectCategories);
			$this->dtgNarroProjectCategories->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/narro_project_category_edit.php';
			$this->dtgNarroProjectCategories->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for narro_project_category's properties, or you
			// can traverse down QQN::narro_project_category() to display fields that are down the hierarchy)
			$this->dtgNarroProjectCategories->MetaAddColumn('ProjectCategoryId');
			$this->dtgNarroProjectCategories->MetaAddColumn('CategoryName');
			$this->dtgNarroProjectCategories->MetaAddColumn('CategoryDescription');
		}
	}
?>
