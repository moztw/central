<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the NarroUserRole class.  It uses the code-generated
	 * NarroUserRoleDataGrid control which has meta-methods to help with
	 * easily creating/defining NarroUserRole columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both narro_user_role_list.php AND
	 * narro_user_role_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package Narro
	 * @subpackage FormBaseObjects
	 */
	abstract class NarroUserRoleListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list NarroUserRoles
		/**
		 * @var NarroUserRoleDataGrid dtgNarroUserRoles
		 */
		protected $dtgNarroUserRoles;

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
			$this->dtgNarroUserRoles = new NarroUserRoleDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgNarroUserRoles->CssClass = 'datagrid';
			$this->dtgNarroUserRoles->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgNarroUserRoles->Paginator = new QPaginator($this->dtgNarroUserRoles);
			$this->dtgNarroUserRoles->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/narro_user_role_edit.php';
			$this->dtgNarroUserRoles->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for narro_user_role's properties, or you
			// can traverse down QQN::narro_user_role() to display fields that are down the hierarchy)
			$this->dtgNarroUserRoles->MetaAddColumn('UserRoleId');
			$this->dtgNarroUserRoles->MetaAddColumn(QQN::NarroUserRole()->User);
			$this->dtgNarroUserRoles->MetaAddColumn(QQN::NarroUserRole()->Role);
			$this->dtgNarroUserRoles->MetaAddColumn(QQN::NarroUserRole()->Project);
			$this->dtgNarroUserRoles->MetaAddColumn(QQN::NarroUserRole()->Language);
		}
	}
?>
