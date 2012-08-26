<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the NarroFile class.  It uses the code-generated
	 * NarroFileDataGrid control which has meta-methods to help with
	 * easily creating/defining NarroFile columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both narro_file_list.php AND
	 * narro_file_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package Narro
	 * @subpackage FormBaseObjects
	 */
	abstract class NarroFileListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list NarroFiles
		/**
		 * @var NarroFileDataGrid dtgNarroFiles
		 */
		protected $dtgNarroFiles;

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
			$this->dtgNarroFiles = new NarroFileDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgNarroFiles->CssClass = 'datagrid';
			$this->dtgNarroFiles->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgNarroFiles->Paginator = new QPaginator($this->dtgNarroFiles);
			$this->dtgNarroFiles->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/narro_file_edit.php';
			$this->dtgNarroFiles->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for narro_file's properties, or you
			// can traverse down QQN::narro_file() to display fields that are down the hierarchy)
			$this->dtgNarroFiles->MetaAddColumn('FileId');
			$this->dtgNarroFiles->MetaAddColumn('FileName');
			$this->dtgNarroFiles->MetaAddColumn('FilePath');
			$this->dtgNarroFiles->MetaAddColumn('FileMd5');
			$this->dtgNarroFiles->MetaAddColumn(QQN::NarroFile()->Parent);
			$this->dtgNarroFiles->MetaAddTypeColumn('TypeId', 'NarroFileType');
			$this->dtgNarroFiles->MetaAddColumn(QQN::NarroFile()->Project);
			$this->dtgNarroFiles->MetaAddColumn('Active');
			$this->dtgNarroFiles->MetaAddColumn('Created');
			$this->dtgNarroFiles->MetaAddColumn('Modified');
			$this->dtgNarroFiles->MetaAddColumn('Header');
		}
	}
?>
