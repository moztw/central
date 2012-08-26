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

    class NarroTopPanel extends QPanel {
        public $tabTop;


        public function __construct($strDate, $objParentObject, NarroProject $objProject = null, $strControlId = null) {
            // Call the Parent
            try {
                parent::__construct($objParentObject, $strControlId);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            $this->strTemplate = dirname(__FILE__) . '/' . __CLASS__ . '.tpl.php';
            $this->blnAutoRenderChildren = true;

            // Tabs
            $this->tabTop = new QTabs($this);
            $pnlTranslators = new NarroUserDataGrid($this->tabTop);
            $pnlTranslators->CssClass = 'datagrid';
            $colUsername = $pnlTranslators->MetaAddColumn(QQN::NarroUser()->Username);
            $colUsername->HtmlEntities = false;
            $colUsername->Html = '<?=NarroLink::UserProfile($_ITEM->UserId, $_ITEM->Username)?>';
            $colCnt = new QDataGridColumn(t('Translations'));
            $colCnt->Html = '<?=$_ITEM->GetVirtualAttribute("suggestion_cnt")?>';
            $colCnt->OrderByClause = QQ::OrderBy('__suggestion_cnt', 1);
            $colCnt->ReverseOrderByClause = QQ::OrderBy('__suggestion_cnt', 0);
            $pnlTranslators->SortColumnIndex = 1;
            $pnlTranslators->ShowHeader = false;
            $pnlTranslators->SortDirection = 1;
            $pnlTranslators->AddColumn($colCnt);
            $pnlTranslators->AdditionalConditions = QQ::AndCondition(
                QQ::GreaterOrEqual(QQN::NarroUser()->NarroSuggestionAsUser->Created, $strDate),
                QQ::Equal(QQN::NarroUser()->NarroSuggestionAsUser->LanguageId, QApplication::GetLanguageId()),
                QQ::NotEqual(QQN::NarroUser()->UserId, NarroUser::ANONYMOUS_USER_ID),
                ($objProject)?QQ::Equal(QQN::NarroUser()->NarroSuggestionAsUser->Text->NarroContextAsText->ProjectId, $objProject->ProjectId):QQ::All()
            );
            $pnlTranslators->AdditionalClauses = array(QQ::Count(QQN::NarroUser()->NarroSuggestionAsUser->SuggestionId, 'suggestion_cnt'), QQ::GroupBy(QQN::NarroUser()->UserId));
            
            $pnlReviewers = new NarroUserDataGrid($this->tabTop);
            $pnlReviewers->CssClass = 'datagrid';
            $colUsername = $pnlReviewers->MetaAddColumn(QQN::NarroUser()->Username);
            $colUsername->HtmlEntities = false;
            $colUsername->Html = '<?=NarroLink::UserProfile($_ITEM->UserId, $_ITEM->Username)?>';
            $colCnt = new QDataGridColumn(t('Reviewers'));
            $colCnt->Html = '<?=$_ITEM->GetVirtualAttribute("suggestion_cnt")?>';
            $colCnt->OrderByClause = QQ::OrderBy('__suggestion_cnt', 1);
            $colCnt->ReverseOrderByClause = QQ::OrderBy('__suggestion_cnt', 0);
            $pnlReviewers->SortColumnIndex = 1;
            $pnlReviewers->ShowHeader = false;
            $pnlReviewers->SortDirection = 1;
            $pnlReviewers->AddColumn($colCnt);
            $pnlReviewers->AdditionalConditions = QQ::AndCondition(
                QQ::GreaterOrEqual(QQN::NarroUser()->NarroContextInfoAsValidatorUser->Modified, $strDate),
                QQ::Equal(QQN::NarroUser()->NarroContextInfoAsValidatorUser->LanguageId, QApplication::GetLanguageId()),
                QQ::NotEqual(QQN::NarroUser()->UserId, NarroUser::ANONYMOUS_USER_ID),
                ($objProject)?QQ::Equal(QQN::NarroUser()->NarroContextInfoAsValidatorUser->Context->ProjectId, $objProject->ProjectId):QQ::All()
            );
            $pnlReviewers->AdditionalClauses = array(QQ::Count(QQN::NarroUser()->NarroContextInfoAsValidatorUser->ValidSuggestionId, 'suggestion_cnt'), QQ::GroupBy(QQN::NarroUser()->UserId));
            
            $pnlVoters = new NarroUserDataGrid($this->tabTop);
            $pnlVoters->CssClass = 'datagrid';
            $colUsername = $pnlVoters->MetaAddColumn(QQN::NarroUser()->Username);
            $colUsername->HtmlEntities = false;
            $colUsername->Html = '<?=NarroLink::UserProfile($_ITEM->UserId, $_ITEM->Username)?>';
            $colCnt = new QDataGridColumn(t('Reviewers'));
            $colCnt->Html = '<?=$_ITEM->GetVirtualAttribute("suggestion_cnt")?>';
            $colCnt->OrderByClause = QQ::OrderBy('__suggestion_cnt', 1);
            $colCnt->ReverseOrderByClause = QQ::OrderBy('__suggestion_cnt', 0);
            $pnlVoters->SortColumnIndex = 1;
            $pnlVoters->ShowHeader = false;
            $pnlVoters->SortDirection = 1;
            $pnlVoters->AddColumn($colCnt);
            $pnlVoters->AdditionalConditions = QQ::AndCondition(
                QQ::GreaterOrEqual(QQN::NarroUser()->NarroSuggestionVoteAsUser->Created, $strDate),
                QQ::Equal(QQN::NarroUser()->NarroSuggestionVoteAsUser->Suggestion->LanguageId, QApplication::GetLanguageId()),
                QQ::NotEqual(QQN::NarroUser()->UserId, NarroUser::ANONYMOUS_USER_ID),
                ($objProject)?QQ::Equal(QQN::NarroUser()->NarroSuggestionVoteAsUser->Suggestion->Text->NarroContextAsText->ProjectId, $objProject->ProjectId):QQ::All()
            );
            $pnlVoters->AdditionalClauses = array(QQ::Count(QQN::NarroUser()->NarroSuggestionVoteAsUser->SuggestionId, 'suggestion_cnt'), QQ::GroupBy(QQN::NarroUser()->UserId));
            
            $pnlComments = new NarroUserDataGrid($this->tabTop);
            $pnlComments->CssClass = 'datagrid';
            $colUsername = $pnlComments->MetaAddColumn(QQN::NarroUser()->Username);
            $colUsername->HtmlEntities = false;
            $colUsername->Html = '<?=NarroLink::UserProfile($_ITEM->UserId, $_ITEM->Username)?>';
            $colCnt = new QDataGridColumn(t('Reviewers'));
            $colCnt->Html = '<?=$_ITEM->GetVirtualAttribute("suggestion_cnt")?>';
            $colCnt->OrderByClause = QQ::OrderBy('__suggestion_cnt', 1);
            $colCnt->ReverseOrderByClause = QQ::OrderBy('__suggestion_cnt', 0);
            $pnlComments->SortColumnIndex = 1;
            $pnlComments->ShowHeader = false;
            $pnlComments->SortDirection = 1;
            $pnlComments->AddColumn($colCnt);
            $pnlComments->AdditionalConditions = QQ::AndCondition(
                QQ::GreaterOrEqual(QQN::NarroUser()->NarroTextCommentAsUser->Created, $strDate),
                QQ::Equal(QQN::NarroUser()->NarroTextCommentAsUser->LanguageId, QApplication::GetLanguageId()),
                QQ::NotEqual(QQN::NarroUser()->UserId, NarroUser::ANONYMOUS_USER_ID)
            );
            $pnlComments->AdditionalClauses = array(QQ::Count(QQN::NarroUser()->NarroTextCommentAsUser->TextCommentId, 'suggestion_cnt'), QQ::GroupBy(QQN::NarroUser()->UserId));
            
            $this->tabTop->Headers = array(t('Translators'), t('Reviewers'), t('Voters'), t('Comments'));
            
        }
    }
