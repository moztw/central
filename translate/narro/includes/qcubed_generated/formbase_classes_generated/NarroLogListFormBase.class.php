<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the NarroLog class.  It uses the code-generated
	 * NarroLogDataGrid control which has meta-methods to help with
	 * easily creating/defining NarroLog columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both narro_log_list.php AND
	 * narro_log_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package Narro
	 * @subpackage FormBaseObjects
	 */
	abstract class NarroLogListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list NarroLogs
		/**
		 * @var NarroLogDataGrid dtgNarroLogs
		 */
		protected $dtgNarroLogs;

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
			$this->dtgNarroLogs = new NarroLogDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgNarroLogs->CssClass = 'datagrid';
			$this->dtgNarroLogs->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgNarroLogs->Paginator = new QPaginator($this->dtgNarroLogs);
			$this->dtgNarroLogs->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/narro_log_edit.php';
			$this->dtgNarroLogs->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for narro_log's properties, or you
			// can traverse down QQN::narro_log() to display fields that are down the hierarchy)
			$this->dtgNarroLogs->MetaAddColumn('LogId');
			$this->dtgNarroLogs->MetaAddColumn(QQN::NarroLog()->Language);
			$this->dtgNarroLogs->MetaAddColumn(QQN::NarroLog()->Project);
			$this->dtgNarroLogs->MetaAddColumn(QQN::NarroLog()->User);
			$this->dtgNarroLogs->MetaAddColumn('Message');
			$this->dtgNarroLogs->MetaAddColumn('Priority');
			$this->dtgNarroLogs->MetaAddColumn('Date');
		}
	}
?>
