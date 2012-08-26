<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the NarroSuggestionVote class.  It uses the code-generated
	 * NarroSuggestionVoteDataGrid control which has meta-methods to help with
	 * easily creating/defining NarroSuggestionVote columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both narro_suggestion_vote_list.php AND
	 * narro_suggestion_vote_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package Narro
	 * @subpackage FormBaseObjects
	 */
	abstract class NarroSuggestionVoteListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list NarroSuggestionVotes
		/**
		 * @var NarroSuggestionVoteDataGrid dtgNarroSuggestionVotes
		 */
		protected $dtgNarroSuggestionVotes;

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
			$this->dtgNarroSuggestionVotes = new NarroSuggestionVoteDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgNarroSuggestionVotes->CssClass = 'datagrid';
			$this->dtgNarroSuggestionVotes->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgNarroSuggestionVotes->Paginator = new QPaginator($this->dtgNarroSuggestionVotes);
			$this->dtgNarroSuggestionVotes->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/narro_suggestion_vote_edit.php';
			$this->dtgNarroSuggestionVotes->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for narro_suggestion_vote's properties, or you
			// can traverse down QQN::narro_suggestion_vote() to display fields that are down the hierarchy)
			$this->dtgNarroSuggestionVotes->MetaAddColumn(QQN::NarroSuggestionVote()->Suggestion);
			$this->dtgNarroSuggestionVotes->MetaAddColumn(QQN::NarroSuggestionVote()->Context);
			$this->dtgNarroSuggestionVotes->MetaAddColumn(QQN::NarroSuggestionVote()->User);
			$this->dtgNarroSuggestionVotes->MetaAddColumn('VoteValue');
			$this->dtgNarroSuggestionVotes->MetaAddColumn('Created');
			$this->dtgNarroSuggestionVotes->MetaAddColumn('Modified');
		}
	}
?>
