<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the NarroProject class.  It uses the code-generated
	 * NarroProjectDataGrid control which has meta-methods to help with
	 * easily creating/defining NarroProject columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both narro_project_list.php AND
	 * narro_project_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package Narro
	 * @subpackage FormBaseObjects
	 */
	abstract class NarroProjectListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list NarroProjects
		/**
		 * @var NarroProjectDataGrid dtgNarroProjects
		 */
		protected $dtgNarroProjects;

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
			$this->dtgNarroProjects = new NarroProjectDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgNarroProjects->CssClass = 'datagrid';
			$this->dtgNarroProjects->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgNarroProjects->Paginator = new QPaginator($this->dtgNarroProjects);
			$this->dtgNarroProjects->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/narro_project_edit.php';
			$this->dtgNarroProjects->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for narro_project's properties, or you
			// can traverse down QQN::narro_project() to display fields that are down the hierarchy)
			$this->dtgNarroProjects->MetaAddColumn('ProjectId');
			$this->dtgNarroProjects->MetaAddColumn(QQN::NarroProject()->ProjectCategory);
			$this->dtgNarroProjects->MetaAddColumn('ProjectName');
			$this->dtgNarroProjects->MetaAddTypeColumn('ProjectType', 'NarroProjectType');
			$this->dtgNarroProjects->MetaAddColumn('ProjectDescription');
			$this->dtgNarroProjects->MetaAddColumn('Data');
			$this->dtgNarroProjects->MetaAddColumn('Active');
		}
	}
?>
