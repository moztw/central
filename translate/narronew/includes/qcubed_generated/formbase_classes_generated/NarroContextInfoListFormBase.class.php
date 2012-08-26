<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the NarroContextInfo class.  It uses the code-generated
	 * NarroContextInfoDataGrid control which has meta-methods to help with
	 * easily creating/defining NarroContextInfo columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both narro_context_info_list.php AND
	 * narro_context_info_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package Narro
	 * @subpackage FormBaseObjects
	 */
	abstract class NarroContextInfoListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list NarroContextInfos
		/**
		 * @var NarroContextInfoDataGrid dtgNarroContextInfos
		 */
		protected $dtgNarroContextInfos;

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
			$this->dtgNarroContextInfos = new NarroContextInfoDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgNarroContextInfos->CssClass = 'datagrid';
			$this->dtgNarroContextInfos->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgNarroContextInfos->Paginator = new QPaginator($this->dtgNarroContextInfos);
			$this->dtgNarroContextInfos->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/narro_context_info_edit.php';
			$this->dtgNarroContextInfos->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for narro_context_info's properties, or you
			// can traverse down QQN::narro_context_info() to display fields that are down the hierarchy)
			$this->dtgNarroContextInfos->MetaAddColumn('ContextInfoId');
			$this->dtgNarroContextInfos->MetaAddColumn(QQN::NarroContextInfo()->Context);
			$this->dtgNarroContextInfos->MetaAddColumn(QQN::NarroContextInfo()->Language);
			$this->dtgNarroContextInfos->MetaAddColumn(QQN::NarroContextInfo()->ValidatorUser);
			$this->dtgNarroContextInfos->MetaAddColumn(QQN::NarroContextInfo()->ValidSuggestion);
			$this->dtgNarroContextInfos->MetaAddColumn('HasSuggestions');
			$this->dtgNarroContextInfos->MetaAddColumn('SuggestionAccessKey');
			$this->dtgNarroContextInfos->MetaAddColumn('SuggestionCommandKey');
			$this->dtgNarroContextInfos->MetaAddColumn('Created');
			$this->dtgNarroContextInfos->MetaAddColumn('Modified');
		}
	}
?>
