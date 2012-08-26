<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the NarroUser class.  It uses the code-generated
	 * NarroUserDataGrid control which has meta-methods to help with
	 * easily creating/defining NarroUser columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both narro_user_list.php AND
	 * narro_user_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package Narro
	 * @subpackage FormBaseObjects
	 */
	abstract class NarroUserListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list NarroUsers
		/**
		 * @var NarroUserDataGrid dtgNarroUsers
		 */
		protected $dtgNarroUsers;

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
			$this->dtgNarroUsers = new NarroUserDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgNarroUsers->CssClass = 'datagrid';
			$this->dtgNarroUsers->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgNarroUsers->Paginator = new QPaginator($this->dtgNarroUsers);
			$this->dtgNarroUsers->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/narro_user_edit.php';
			$this->dtgNarroUsers->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for narro_user's properties, or you
			// can traverse down QQN::narro_user() to display fields that are down the hierarchy)
			$this->dtgNarroUsers->MetaAddColumn('UserId');
			$this->dtgNarroUsers->MetaAddColumn('Username');
			$this->dtgNarroUsers->MetaAddColumn('Password');
			$this->dtgNarroUsers->MetaAddColumn('Email');
			$this->dtgNarroUsers->MetaAddColumn('RealName');
			$this->dtgNarroUsers->MetaAddColumn('Data');
		}
	}
?>
