<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the NarroPermission class.  It uses the code-generated
	 * NarroPermissionDataGrid control which has meta-methods to help with
	 * easily creating/defining NarroPermission columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both narro_permission_list.php AND
	 * narro_permission_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package Narro
	 * @subpackage FormBaseObjects
	 */
	abstract class NarroPermissionListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list NarroPermissions
		/**
		 * @var NarroPermissionDataGrid dtgNarroPermissions
		 */
		protected $dtgNarroPermissions;

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
			$this->dtgNarroPermissions = new NarroPermissionDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgNarroPermissions->CssClass = 'datagrid';
			$this->dtgNarroPermissions->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgNarroPermissions->Paginator = new QPaginator($this->dtgNarroPermissions);
			$this->dtgNarroPermissions->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/narro_permission_edit.php';
			$this->dtgNarroPermissions->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for narro_permission's properties, or you
			// can traverse down QQN::narro_permission() to display fields that are down the hierarchy)
			$this->dtgNarroPermissions->MetaAddColumn('PermissionId');
			$this->dtgNarroPermissions->MetaAddColumn('PermissionName');
		}
	}
?>
