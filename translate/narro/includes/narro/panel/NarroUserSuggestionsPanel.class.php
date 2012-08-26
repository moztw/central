<?php
    /**
     * Narro is an application that allows online software translation and maintenance.
     * Copyright (C) 2008-2011 Alexandru Szasz <alexxed@gmail.com>
     * http://code.google.com/p/narro/
     *
     * This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public
     * License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any
     * later version.
     *
     * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the
     * implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for
     * more details.
     *
     * You should have received a copy of the GNU General Public License along with this program; if not, write to the
     * Free Software Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
     */

    class NarroUserSuggestionsPanel extends QPanel {
        public $tabActivity;
        protected $objUser;
        
        public $pnlTranslatedPerProjectPie;
        public $pnlApprovedPie;

        public function __construct(NarroUser $objUser, $objParentObject, $strControlId = null) {
            // Call the Parent
            try {
                parent::__construct($objParentObject, $strControlId);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
            
            $this->strTemplate = dirname(__FILE__) . '/' . __CLASS__ . '.tpl.php';

            $this->objUser = $objUser;
            
            $this->pnlTranslatedPerProjectPie = new QDatabasePieChart($this);
            $this->pnlTranslatedPerProjectPie->DisplayStyle = QDisplayStyle::InlineBlock;
            $this->pnlTranslatedPerProjectPie->Query = sprintf('
                            SELECT
                                narro_project.project_name AS label, COUNT(narro_suggestion.suggestion_id) AS cnt
                            FROM
                                narro_suggestion, narro_context, narro_project
                            WHERE
                                narro_context.text_id = narro_suggestion.text_id AND
                                narro_project.project_id = narro_context.project_id AND
                                narro_suggestion.language_id=%d AND
                                narro_suggestion.user_id=%d
                            GROUP BY narro_context.project_id',
            QApplication::GetLanguageId(),
            $this->objUser->UserId
            );
            $intSuggestionCount = NarroSuggestion::CountByUserId($this->objUser->UserId);
            
            $this->pnlTranslatedPerProjectPie->Total = $intSuggestionCount;
            $this->pnlTranslatedPerProjectPie->MinimumDataValue = 0;
            
            $this->pnlApprovedPie = new QPieChart($this);
            $this->pnlApprovedPie->DisplayStyle = QDisplayStyle::InlineBlock;
            $this->pnlApprovedPie->Total = $this->pnlTranslatedPerProjectPie->Total;
            $this->pnlApprovedPie->MinimumDataValue = 0;
            
            $objDatabase = NarroContextInfo::GetDatabase();
            $strQuery = sprintf("
                            SELECT
                                DISTINCT narro_context_info.valid_suggestion_id
                            FROM
                                narro_context_info, narro_suggestion
                            WHERE
                                narro_context_info.valid_suggestion_id=narro_suggestion.suggestion_id AND
                                narro_suggestion.user_id=%d",
            $this->objUser->UserId);
            
            $objDbResult = $objDatabase->Query($strQuery);
            
            $intValidSuggestionCount = $objDbResult->CountRows();
            
            $this->pnlApprovedPie->Data = array(t('Approved')=>$intValidSuggestionCount, t('Not approved') => ($intSuggestionCount - $intValidSuggestionCount));
            
            $this->tabActivity = new QTabs($this);

            $this->dtgSuggestions_Create();
            $arrHeaders[] = t('Translations');
            
            $this->dtgReviews_Create();
            $arrHeaders[] = t('Reviews');
            
            $this->dtgComments_Create();
            $arrHeaders[] = t('Comments');
            
            $this->dtgVotes_Create();
            $arrHeaders[] = t('Votes');
            
            if (QApplication::HasPermissionForThisLang('Administrator') || QApplication::GetUserId() == $this->objUser->UserId) {
                $this->dtgLog_Create();
                $arrHeaders[] = t('Logged messages');
            }
            
            $this->tabActivity->Headers = $arrHeaders;
        }
        
        protected function dtgLog_Create() {
            $dtgLog = new NarroLogDataGrid($this->tabActivity);
            $dtgLog->SetCustomStyle('padding', '5px');
            $dtgLog->Title = sprintf(t('Logged messages for <b>%s</b>'), $this->objUser->RealName);
        
            $colProject = $dtgLog->MetaAddColumn(QQN::NarroLog()->Project->ProjectName);
            $colProject->Name = t('Project');
            
            $colLanguage = $dtgLog->MetaAddColumn(QQN::NarroLog()->Language->LanguageName);
            $colLanguage->Name = t('Language');
            $colLanguage->Html = '<?= $_CONTROL->colLanguage_Render($_ITEM); ?>';
            
            $colPriority = $dtgLog->MetaAddColumn(QQN::NarroLog()->Priority);
            $colPriority->Name = t('Priority');
            
            $colMessage = $dtgLog->MetaAddColumn(QQN::NarroLog()->Message);
            $colMessage->Name = t('Message');
            $colMessage->Html = '<?= $_CONTROL->colMessage_Render($_ITEM); ?>';
            $colMessage->HtmlEntities = false;
        
            $colCreated = $dtgLog->MetaAddColumn(QQN::NarroLog()->Date);
            $colCreated->Name = t('Added');
            $colCreated->FilterType = QFilterType::None;
            $colCreated->Html = '<?= $_CONTROL->colCreated_Render($_ITEM); ?>';
            $colCreated->HtmlEntities = false;
            $colCreated->Wrap = false;
        
            // Datagrid Paginator
            $dtgLog->Paginator = new QPaginator($dtgLog);
            $dtgLog->ItemsPerPage = QApplication::$User->GetPreferenceValueByName('Items per page');
        
            // Specify Whether or Not to Refresh using Ajax
            $dtgLog->UseAjax = true;
        
            $dtgLog->SortColumnIndex = 2;
            $dtgLog->SortDirection = true;
        
        
            $dtgLog->AdditionalClauses = array(
                QQ::Expand(QQN::NarroLog()->Project),
                QQ::Expand(QQN::NarroLog()->Language)
            );
        
            $dtgLog->AdditionalConditions = QQ::Equal(QQN::NarroLog()->UserId, $this->objUser->UserId);
        
            $dtgLog->btnFilter_Click($this->Form->FormId, $dtgLog->FilterButton->ControlId, '');
        }
        
        protected function dtgVotes_Create() {
            $dtgVotes = new NarroSuggestionVoteDataGrid($this->tabActivity);
            $dtgVotes->SetCustomStyle('padding', '5px');
            $dtgVotes->Title = sprintf(t('Votes added by <b>%s</b>'), $this->objUser->RealName);
        
            $colSuggestion = $dtgVotes->MetaAddColumn(QQN::NarroSuggestionVote()->Suggestion->SuggestionValue);
            $colSuggestion->Name = t('Translation');
            $colSuggestion->Html = '<?= $_CONTROL->colSuggestion_Render($_ITEM); ?>';
            $colSuggestion->HtmlEntities = false;
        
            $colVote = $dtgVotes->MetaAddColumn(QQN::NarroSuggestionVote()->VoteValue);
            $colVote->Name = t('Vote');
            $colVote->Html = '<?= $_ITEM->VoteValue; ?>';
        
            $colCreated = $dtgVotes->MetaAddColumn(QQN::NarroSuggestionVote()->Created);
            $colCreated->Name = t('Added');
            $colCreated->FilterType = QFilterType::None;
            $colCreated->Html = '<?= $_CONTROL->colCreated_Render($_ITEM); ?>';
            $colCreated->HtmlEntities = false;
            $colCreated->Wrap = false;
        
            // Datagrid Paginator
            $dtgVotes->Paginator = new QPaginator($dtgVotes);
            $dtgVotes->ItemsPerPage = QApplication::$User->GetPreferenceValueByName('Items per page');
        
            // Specify Whether or Not to Refresh using Ajax
            $dtgVotes->UseAjax = true;
        
            $dtgVotes->SortColumnIndex = 2;
            $dtgVotes->SortDirection = true;
        
        
            $dtgVotes->AdditionalClauses = array(
                QQ::Expand(QQN::NarroSuggestionVote()->Suggestion)
            );
        
            $dtgVotes->AdditionalConditions = QQ::Equal(QQN::NarroSuggestionVote()->UserId, $this->objUser->UserId);
        
            $dtgVotes->btnFilter_Click($this->Form->FormId, $dtgVotes->FilterButton->ControlId, '');
        }
        
        protected function dtgComments_Create() {
            $dtgComments = new NarroTextCommentDataGrid($this->tabActivity);
            $dtgComments->SetCustomStyle('padding', '5px');
            $dtgComments->Title = sprintf(t('Comments added by <b>%s</b>'), $this->objUser->RealName);
        
            $colText = $dtgComments->MetaAddColumn(QQN::NarroTextComment()->Text->TextValue);
            $colText->Name = t('Text');
            $colText->Html = '<?= $_CONTROL->colText_Render($_ITEM); ?>';
            $colText->HtmlEntities = false;
        
            $colSuggestion = $dtgComments->MetaAddColumn(QQN::NarroTextComment()->CommentText);
            $colSuggestion->Name = t('Comment');
            $colSuggestion->Html = '<?= $_CONTROL->colCommentText_Render($_ITEM); ?>';
        
            $colLanguage = $dtgComments->MetaAddColumn(QQN::NarroTextComment()->Language->LanguageName);
            $colLanguage->Name = t('Language');
            $colLanguage->Filter = null;
            foreach(NarroLanguage::LoadAllActive() as $objLanguage) {
                $colLanguage->FilterAddListItem($objLanguage->LanguageName, QQ::Equal(QQN::NarroTextComment()->LanguageId, $objLanguage->LanguageId));
            }
            $colLanguage->FilterActivate(QApplication::$TargetLanguage->LanguageName);
            $colLanguage->Html = '<?= $_CONTROL->colLanguage_Render($_ITEM); ?>';
        
            $colCreated = $dtgComments->MetaAddColumn(QQN::NarroTextComment()->Created);
            $colCreated->Name = t('Approved');
            $colCreated->FilterType = QFilterType::None;
            $colCreated->Html = '<?= $_CONTROL->colCreated_Render($_ITEM); ?>';
            $colCreated->HtmlEntities = false;
            $colCreated->Wrap = false;
        
            // Datagrid Paginator
            $dtgComments->Paginator = new QPaginator($dtgComments);
            $dtgComments->ItemsPerPage = QApplication::$User->GetPreferenceValueByName('Items per page');
        
            // Specify Whether or Not to Refresh using Ajax
            $dtgComments->UseAjax = true;
        
            $dtgComments->SortColumnIndex = 3;
            $dtgComments->SortDirection = true;
        
        
            $dtgComments->AdditionalClauses = array(
                QQ::Expand(QQN::NarroTextComment()->Text),
                QQ::Expand(QQN::NarroTextComment()->Language)
            );
        
            $dtgComments->AdditionalConditions = QQ::Equal(QQN::NarroTextComment()->UserId, $this->objUser->UserId);
        
            $dtgComments->btnFilter_Click($this->Form->FormId, $dtgComments->FilterButton->ControlId, '');
        }
        
        protected function dtgReviews_Create() {
            $dtgReviews = new NarroContextInfoDataGrid($this->tabActivity);
            $dtgReviews->SetCustomStyle('padding', '5px');
            $dtgReviews->Title = sprintf(t('Translations approved by <b>%s</b>'), $this->objUser->RealName);
            
            $colText = $dtgReviews->MetaAddColumn(QQN::NarroContextInfo()->ValidSuggestion->Text->TextValue);
            $colText->Name = t('Original text');
            $colText->Html = '<?= $_CONTROL->colText_Render($_ITEM); ?>';
            $colText->HtmlEntities = false;
            
            $colSuggestion = $dtgReviews->MetaAddColumn(QQN::NarroContextInfo()->ValidSuggestion->SuggestionValue);
            $colSuggestion->Name = t('Approved translation');
            $colSuggestion->Html = '<?= $_CONTROL->colSuggestion_Render($_ITEM); ?>';
            
            $colProject = $dtgReviews->MetaAddColumn(QQN::NarroContextInfo()->Context->Project->ProjectName);
            $colProject->Name = t('Project');
            $colProject->Filter = null;
            foreach(NarroProject::LoadArrayByActive(1) as $objProject) {
                $colProject->FilterAddListItem($objProject->ProjectName, QQ::Equal(QQN::NarroContextInfo()->Context->ProjectId, $objProject->ProjectId));
            }
            $colProject->Html = '<?= $_CONTROL->colProject_Render($_ITEM); ?>';
            $colProject->HtmlEntities = false;
            
            $colLanguage = $dtgReviews->MetaAddColumn(QQN::NarroContextInfo()->Language->LanguageName);
            $colLanguage->Name = t('Language');
            $colLanguage->Filter = null;
            foreach(NarroLanguage::LoadAllActive() as $objLanguage) {
                $colLanguage->FilterAddListItem($objLanguage->LanguageName, QQ::Equal(QQN::NarroContextInfo()->LanguageId, $objLanguage->LanguageId));
            }
            $colLanguage->FilterActivate(QApplication::$TargetLanguage->LanguageName);
            $colLanguage->Html = '<?= $_CONTROL->colLanguage_Render($_ITEM); ?>';
            
            $colModified = $dtgReviews->MetaAddColumn(QQN::NarroContextInfo()->Modified);
            $colModified->Name = t('Approved');
            $colModified->FilterType = QFilterType::None;
            $colModified->Html = '<?= $_CONTROL->colModified_Render($_ITEM); ?>';
            $colModified->HtmlEntities = false;
            $colModified->Wrap = false;
            
            // Datagrid Paginator
            $dtgReviews->Paginator = new QPaginator($dtgReviews);
            $dtgReviews->ItemsPerPage = QApplication::$User->GetPreferenceValueByName('Items per page');
            
            // Specify Whether or Not to Refresh using Ajax
            $dtgReviews->UseAjax = true;
            
            $dtgReviews->SortColumnIndex = 4;
            $dtgReviews->SortDirection = true;
            
            
            $dtgReviews->AdditionalClauses = array(
                QQ::Expand(QQN::NarroContextInfo()->ValidSuggestion),
                QQ::Expand(QQN::NarroContextInfo()->Language)
            );
            
            $dtgReviews->AdditionalConditions = QQ::AndCondition(
                QQ::IsNotNull(QQN::NarroContextInfo()->ValidSuggestionId),
                QQ::Equal(QQN::NarroContextInfo()->ValidatorUserId, $this->objUser->UserId)
            );
            
            $dtgReviews->btnFilter_Click($this->Form->FormId, $dtgReviews->FilterButton->ControlId, '');
        }
        
        protected function dtgSuggestions_Create() {
            $dtgSuggestions = new NarroSuggestionDataGrid($this->tabActivity);
            $dtgSuggestions->SetCustomStyle('padding', '5px');
            $dtgSuggestions->Title = sprintf(t('Translations added by <b>%s</b>'), $this->objUser->RealName);
            //$dtgSuggestions->SetCustomStyle('margin-left', '15px');
            
            $colText = $dtgSuggestions->MetaAddColumn(QQN::NarroSuggestion()->Text->TextValue);
            $colText->Name = t('Original text');
            $colText->Html = '<?= $_CONTROL->colText_Render($_ITEM); ?>';
            $colText->HtmlEntities = false;
            
            $colSuggestion = $dtgSuggestions->MetaAddColumn(QQN::NarroSuggestion()->SuggestionValue);
            $colSuggestion->Name = t('Translated text');
            $colSuggestion->Html = '<?= $_CONTROL->colSuggestion_Render($_ITEM); ?>';
            
            $colLanguage = $dtgSuggestions->MetaAddColumn(QQN::NarroSuggestion()->Language->LanguageName);
            $colLanguage->Name = t('Language');
            $colLanguage->Filter = null;
            foreach(NarroLanguage::LoadAllActive() as $objLanguage) {
                $colLanguage->FilterAddListItem($objLanguage->LanguageName, QQ::Equal(QQN::NarroSuggestion()->LanguageId, $objLanguage->LanguageId));
            }
            $colLanguage->FilterActivate(QApplication::$TargetLanguage->LanguageName);
            $colLanguage->Html = '<?= $_CONTROL->colLanguage_Render($_ITEM); ?>';
            
            $colCreated = $dtgSuggestions->MetaAddColumn(QQN::NarroSuggestion()->Created);
            $colCreated->Name = t('Created');
            $colCreated->FilterType = QFilterType::None;
            $colCreated->Html = '<?= $_CONTROL->colCreated_Render($_ITEM); ?>';
            $colCreated->HtmlEntities = false;
            $colCreated->Wrap = false;
            
            // Datagrid Paginator
            $dtgSuggestions->Paginator = new QPaginator($dtgSuggestions);
            $dtgSuggestions->ItemsPerPage = QApplication::$User->GetPreferenceValueByName('Items per page');
            
            $dtgSuggestions->SortColumnIndex = 3;
            $dtgSuggestions->SortDirection = true;
            
            
            $dtgSuggestions->AdditionalClauses = array(
                QQ::Expand(QQN::NarroSuggestion()->Text),
                QQ::Expand(QQN::NarroSuggestion()->Language)
            );
            
            $dtgSuggestions->AdditionalConditions = QQ::Equal(QQN::NarroSuggestion()->UserId, $this->objUser->UserId);
            
            $dtgSuggestions->btnFilter_Click($this->Form->FormId, $dtgSuggestions->FilterButton->ControlId, '');
        }
    }
?>
