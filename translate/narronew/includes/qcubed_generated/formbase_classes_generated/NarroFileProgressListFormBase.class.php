<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the NarroFileProgress class.  It uses the code-generated
	 * NarroFileProgressDataGrid control which has meta-methods to help with
	 * easily creating/defining NarroFileProgress columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both narro_file_progress_list.php AND
	 * narro_file_progress_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package Narro
	 * @subpackage FormBaseObjects
	 */
	abstract class NarroFileProgressListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list NarroFileProgresses
		/**
		 * @var NarroFileProgressDataGrid dtgNarroFileProgresses
		 */
		protected $dtgNarroFileProgresses;

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
			$this->dtgNarroFileProgresses = new NarroFileProgressDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgNarroFileProgresses->CssClass = 'datagrid';
			$this->dtgNarroFileProgresses->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgNarroFileProgresses->Paginator = new QPaginator($this->dtgNarroFileProgresses);
			$this->dtgNarroFileProgresses->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/narro_file_progress_edit.php';
			$this->dtgNarroFileProgresses->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for narro_file_progress's properties, or you
			// can traverse down QQN::narro_file_progress() to display fields that are down the hierarchy)
			$this->dtgNarroFileProgresses->MetaAddColumn('FileProgressId');
			$this->dtgNarroFileProgresses->MetaAddColumn(QQN::NarroFileProgress()->File);
			$this->dtgNarroFileProgresses->MetaAddColumn(QQN::NarroFileProgress()->Language);
			$this->dtgNarroFileProgresses->MetaAddColumn('FileMd5');
			$this->dtgNarroFileProgresses->MetaAddColumn('Header');
			$this->dtgNarroFileProgresses->MetaAddColumn('TotalTextCount');
			$this->dtgNarroFileProgresses->MetaAddColumn('ApprovedTextCount');
			$this->dtgNarroFileProgresses->MetaAddColumn('FuzzyTextCount');
			$this->dtgNarroFileProgresses->MetaAddColumn('ProgressPercent');
			$this->dtgNarroFileProgresses->MetaAddColumn('Export');
		}
	}
?>
