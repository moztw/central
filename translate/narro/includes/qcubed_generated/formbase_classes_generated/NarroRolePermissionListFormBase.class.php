<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the NarroRolePermission class.  It uses the code-generated
	 * NarroRolePermissionDataGrid control which has meta-methods to help with
	 * easily creating/defining NarroRolePermission columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both narro_role_permission_list.php AND
	 * narro_role_permission_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package Narro
	 * @subpackage FormBaseObjects
	 */
	abstract class NarroRolePermissionListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list NarroRolePermissions
		/**
		 * @var NarroRolePermissionDataGrid dtgNarroRolePermissions
		 */
		protected $dtgNarroRolePermissions;

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
			$this->dtgNarroRolePermissions = new NarroRolePermissionDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgNarroRolePermissions->CssClass = 'datagrid';
			$this->dtgNarroRolePermissions->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgNarroRolePermissions->Paginator = new QPaginator($this->dtgNarroRolePermissions);
			$this->dtgNarroRolePermissions->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/narro_role_permission_edit.php';
			$this->dtgNarroRolePermissions->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for narro_role_permission's properties, or you
			// can traverse down QQN::narro_role_permission() to display fields that are down the hierarchy)
			$this->dtgNarroRolePermissions->MetaAddColumn('RolePermissionId');
			$this->dtgNarroRolePermissions->MetaAddColumn(QQN::NarroRolePermission()->Role);
			$this->dtgNarroRolePermissions->MetaAddColumn(QQN::NarroRolePermission()->Permission);
		}
	}
?>
