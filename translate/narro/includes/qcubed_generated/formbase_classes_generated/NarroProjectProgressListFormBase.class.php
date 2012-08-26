<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the NarroProjectProgress class.  It uses the code-generated
	 * NarroProjectProgressDataGrid control which has meta-methods to help with
	 * easily creating/defining NarroProjectProgress columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both narro_project_progress_list.php AND
	 * narro_project_progress_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package Narro
	 * @subpackage FormBaseObjects
	 */
	abstract class NarroProjectProgressListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list NarroProjectProgresses
		/**
		 * @var NarroProjectProgressDataGrid dtgNarroProjectProgresses
		 */
		protected $dtgNarroProjectProgresses;

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
			$this->dtgNarroProjectProgresses = new NarroProjectProgressDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgNarroProjectProgresses->CssClass = 'datagrid';
			$this->dtgNarroProjectProgresses->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgNarroProjectProgresses->Paginator = new QPaginator($this->dtgNarroProjectProgresses);
			$this->dtgNarroProjectProgresses->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/narro_project_progress_edit.php';
			$this->dtgNarroProjectProgresses->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for narro_project_progress's properties, or you
			// can traverse down QQN::narro_project_progress() to display fields that are down the hierarchy)
			$this->dtgNarroProjectProgresses->MetaAddColumn('ProjectProgressId');
			$this->dtgNarroProjectProgresses->MetaAddColumn(QQN::NarroProjectProgress()->Project);
			$this->dtgNarroProjectProgresses->MetaAddColumn(QQN::NarroProjectProgress()->Language);
			$this->dtgNarroProjectProgresses->MetaAddColumn('Active');
			$this->dtgNarroProjectProgresses->MetaAddColumn('LastModified');
			$this->dtgNarroProjectProgresses->MetaAddColumn('TotalTextCount');
			$this->dtgNarroProjectProgresses->MetaAddColumn('FuzzyTextCount');
			$this->dtgNarroProjectProgresses->MetaAddColumn('ApprovedTextCount');
			$this->dtgNarroProjectProgresses->MetaAddColumn('ProgressPercent');
			$this->dtgNarroProjectProgresses->MetaAddColumn('Data');
		}
	}
?>
