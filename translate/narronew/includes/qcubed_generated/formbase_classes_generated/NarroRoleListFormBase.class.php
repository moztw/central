<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the NarroRole class.  It uses the code-generated
	 * NarroRoleDataGrid control which has meta-methods to help with
	 * easily creating/defining NarroRole columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both narro_role_list.php AND
	 * narro_role_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package Narro
	 * @subpackage FormBaseObjects
	 */
	abstract class NarroRoleListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list NarroRoles
		/**
		 * @var NarroRoleDataGrid dtgNarroRoles
		 */
		protected $dtgNarroRoles;

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
			$this->dtgNarroRoles = new NarroRoleDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgNarroRoles->CssClass = 'datagrid';
			$this->dtgNarroRoles->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgNarroRoles->Paginator = new QPaginator($this->dtgNarroRoles);
			$this->dtgNarroRoles->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/narro_role_edit.php';
			$this->dtgNarroRoles->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for narro_role's properties, or you
			// can traverse down QQN::narro_role() to display fields that are down the hierarchy)
			$this->dtgNarroRoles->MetaAddColumn('RoleId');
			$this->dtgNarroRoles->MetaAddColumn('RoleName');
		}
	}
?>
