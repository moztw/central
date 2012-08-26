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


    class NarroTranslatePanel extends QPanel {

        public $dtrText;
        public $btnMore;
        public $btnLess;
        public $intMaxRowCount = 0;
        public $intStart = 0;
        public $objWaitIcon;
        public $objMoreWaitIcon;

        public $lstProject;
        public $txtFile;
        public $lstFilter;
        public $txtSearch;
        public $txtReplace;
        public $lstSearchIn;
        public $lstSort;
        public $lstSortDir;
        public $btnSearch;
        public $btnReplace;
        public $chkLast;
        public $chkRequestMoreSent;

        public $chkApprove;
        public $chkRefresh;
        
        public $pnlGlossary;

        public $intTotalItemCount = 0;
        public $blnNewEditorCreated = true;
        public $strCurrentTranslationId;
        protected $arrConditions;
        protected $arrClauses;

        const SHOW_NOT_TRANSLATED = 1;
        const SHOW_NOT_APPROVED = 2;
        const SHOW_APPROVED_AND_NOT_APPROVED = 3;
        const SHOW_NOT_APPROVED_AND_NOT_TRANSLATED = 4;
        const SHOW_APPROVED = 5;
        const SHOW_ALL = 6;
        const SHOW_NOT_APPROVED_AND_WITHOUT_VOTES = 7;
        const SHOW_NOT_APPROVED_AND_WITH_VOTES = 8;
        const SHOW_IDENTICAL_APPROVED = 9;
        const SHOW_IDENTICAL = 10;

        const SORT_TEXT = 1;
        const SORT_TRANSLATION = 2;
        const SORT_TEXT_LENGTH = 3;
        const SORT_TRANSLATION_DATE = 4;

        const SEARCH_IN_TEXTS = 1;
        const SEARCH_IN_TRANSLATIONS = 2;
        const SEARCH_IN_CONTEXTS = 3;
        const SEARCH_IN_AUTHORS = 4;
        const SEARCH_IN_ALL = 5;

        public function __construct($objParentObject, $strControlId = null) {
            parent::__construct($objParentObject, $strControlId);

            $this->strTemplate = dirname(__FILE__) . '/' . get_class($this) . '.tpl.php';

            $this->chkLast = new QCheckBox($this, 'endReached');
            if (SERVER_INSTANCE != 'dev')
                $this->chkLast->DisplayStyle = QDisplayStyle::None;
            
            $this->chkRequestMoreSent = new QCheckBox($this, 'requestMoreSent');
            if (SERVER_INSTANCE != 'dev')
                $this->chkRequestMoreSent->DisplayStyle = QDisplayStyle::None;

            $this->dtrText_Create();

            $this->objWaitIcon = new QWaitIcon($this);
            $this->objWaitIcon->Text = sprintf('<img style="vertical-align: top" src="%s/horizontal_loader.gif" alt="Loading..."/>', __VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__ . '/assets/images');

            $this->objMoreWaitIcon = new QWaitIcon($this);
            $this->objMoreWaitIcon->Text = sprintf('<div align="center"><img align="center" src="%s/horizontal_loader.gif" alt="Loading..."/></div>', __VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__ . '/assets/images');

            $this->btnMore = new QButton($this);
            $this->btnMore->Text = t('More');
            $this->btnMore->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnMore_Click', $this->objMoreWaitIcon));
            
            $this->lstProject_Create();

            $this->txtFile_Create();

            $this->lstFilter_Create();
            $this->txtSearch_Create();
            $this->lstSearchIn_Create();
            $this->lstSort_Create();
            $this->lstSortDir_Create();
            $this->btnSearch_Create();
            $this->txtReplace_Create();
            $this->btnReplace_Create();

            if (QApplication::QueryString('a'))
                $this->intMaxRowCount = QApplication::QueryString('a');

            $this->intStart = max(0, QApplication::QueryString('i'));

            $this->btnLess_Create();

            $this->chkRefresh_Create();
            $this->chkApprove_Create();
            
            $this->pnlGlossary = new NarroSuggestionSearchPanel($this);
            $this->pnlGlossary->Instructions = t('Put the text in quotes to do an exact search, e.g. "file". Press Enter to search.');

            $this->btnMore->DisplayStyle = QDisplayStyle::Block;
            $this->dtrText_Conditions(false);
            $this->dtrText_Bind(null, null, null, false);
        }
        
        protected function txtFile_Create() {
            $this->txtFile = new QTextBox($this, 'filename');
            $this->txtFile->Text = t('all files');
            $this->txtFile->RenderWithNameCssClass = 'inline_block';
            if (QApplication::QueryString('f'))
                $this->txtFile->Text = QApplication::QueryString('f');
        }
        
        public function chkApprove_Create() {
            $this->chkApprove = new QCheckBox($this);
            $this->chkApprove->Name = t('Approve added translations');
            $this->chkApprove->Checked = true;
            $this->chkApprove->Display = QApplication::HasPermissionForThisLang('Can approve');
        }
        
        public function chkRefresh_Create() {
            $this->chkRefresh = new QCheckBox($this);
            $this->chkRefresh->Name = t('Refresh after saving');
            $this->chkRefresh->Checked = false;
        }

        public function txtSearch_Create() {
            $this->txtSearch = new QTextBox($this, 'search');
            $this->txtSearch->RenderWithNameCssClass = 'inline_block';
            $this->txtSearch->ToolTip = t("'exact' does an exact search");
            if (QApplication::QueryString('s'))
                $this->txtSearch->Text = QApplication::QueryString('s');
        }

        public function lstProject_Create() {
            $this->lstProject = new QListBox($this);
            $this->lstProject->AddItem(t('all projects'));
            $this->lstProject->RenderWithNameCssClass = 'inline_block';
            foreach(NarroProject::LoadArrayByActive(1, array(QQ::OrderBy(QQN::NarroProject()->ProjectName))) as $objProject)
                $this->lstProject->AddItem($objProject->ProjectName, $objProject->ProjectId);
            $this->lstProject->AddAction(new QChangeEvent(), new QAjaxControlAction($this, 'btnSearch_Click', $this->objWaitIcon));
            if (QApplication::QueryString('p') > 0)
                $this->lstProject->SelectedValue = QApplication::QueryString('p');
        }

        public function btnSearch_Create() {
            $this->btnSearch = new QButton($this);
            $this->btnSearch->RenderWithNameCssClass = 'inline_block';
            $this->btnSearch->PrimaryButton = true;
            $this->btnSearch->Text = t('Search');
            $this->btnSearch->ToolTip = t('Or hit enter');
            $this->btnSearch->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSearch_Click', $this->objWaitIcon));
        }
        
        public function txtReplace_Create() {
            $this->txtReplace = new QTextBox($this, 'replace');
            $this->txtReplace->RenderWithNameCssClass = 'inline_block';
            $this->txtReplace->Name = t('and translate it with');
            $this->txtReplace->Display = QApplication::HasPermissionForThisLang('Can approve') && ($this->lstSearchIn->SelectedValue == self::SEARCH_IN_TEXTS);
            $this->txtReplace->ToolTip = t('Exact and case sensitive.');
        }
                
        public function btnReplace_Create() {
            $this->btnReplace = new QButton($this);
            $this->btnReplace->RenderWithNameCssClass = 'inline_block';
            $this->btnReplace->Display = QApplication::HasPermissionForThisLang('Can approve') && ($this->lstSearchIn->SelectedValue == self::SEARCH_IN_TEXTS);
            $this->btnReplace->Text = t('Translate');
            $this->btnReplace->ToolTip = t('This will translate all occurences with what you enter here. If the approve checkbox found above is checked, the replacements will also be approved everywhere.');
            $this->btnReplace->AddAction(
                new QClickEvent(),
                new QJavaScriptAction(
                    sprintf(
                        "if (!confirm('%s')) return false;",
                        sprintf(
                            addslashes(t('By proceeding, you will translate all the search results of "%s" with "%s"')),
                            sprintf("' + jQuery('#%s').val() + '", $this->txtSearch->ControlId),
                            sprintf("' + jQuery('#%s').val() + '", $this->txtReplace->ControlId)
                        )
                    )
                )
            );
            $this->btnReplace->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnReplace_Click', $this->objWaitIcon));
        }
        
        public function dtrText_Create() {
            $this->dtrText = new QDataRepeater($this);
            $this->dtrText->Template = dirname(__FILE__) . '/NarroTranslatePanel_DataRepeater.tpl.php';
            $this->dtrText->SetDataBinder('dtrText_Bind', $this);
            $this->dtrText->Paginator = new QPaginator($this);
            $this->dtrText->Paginator->DisplayStyle = QDisplayStyle::Block;
            $this->dtrText->Paginator->SetCustomStyle('text-align', 'right');
            $this->dtrText->Paginator->UseAjax = true;
            $this->dtrText->UseAjax = true;
            $this->dtrText->ItemsPerPage = QApplication::$User->GetPreferenceValueByName('Items per page');
            
            // Let's create a second paginator
            $this->dtrText->PaginatorAlternate = new QPaginator($this);
        }

        public function lstSortDir_Create() {
            $this->lstSortDir = new QListBox($this);
            $this->lstSortDir->RenderWithNameCssClass = 'inline_block';
            $this->lstSortDir->AddItem(t('ascending'), 1, true);
            $this->lstSortDir->AddItem(t('descending'), 0);
            $this->lstSortDir->AddAction(new QChangeEvent(), new QAjaxControlAction($this, 'btnSearch_Click', $this->objWaitIcon));
            if (QApplication::QueryString('h'))
                $this->lstSortDir->SelectedValue = QApplication::QueryString('h');
        }

        public function lstFilter_Create() {
            $this->lstFilter = new QListBox($this);
            $this->lstFilter->RenderWithNameCssClass = 'inline_block';
            $this->lstFilter->Name = t('Show');
            $this->lstFilter->AddItem(t('all texts'), self::SHOW_ALL);
            $this->lstFilter->AddItem(t('untranslated texts'), self::SHOW_NOT_TRANSLATED, true);
            $this->lstFilter->AddItem(t('unapproved texts'), self::SHOW_NOT_APPROVED);
            $this->lstFilter->AddItem(t('translated or approved texts'), self::SHOW_APPROVED_AND_NOT_APPROVED);
            $this->lstFilter->AddItem(t('untranslated or unapproved texts'), self::SHOW_NOT_APPROVED_AND_NOT_TRANSLATED);
            $this->lstFilter->AddItem(t('approved texts'), self::SHOW_APPROVED);
            $this->lstFilter->AddItem(t('identical to the text, approved'), self::SHOW_IDENTICAL_APPROVED);
            $this->lstFilter->AddItem(t('identical to the text, not approved'), self::SHOW_IDENTICAL);
            $this->lstFilter->AddAction(new QChangeEvent(), new QAjaxControlAction($this, 'btnSearch_Click', $this->objWaitIcon));
            if (QApplication::QueryString('t'))
                $this->lstFilter->SelectedValue = QApplication::QueryString('t');
        }

        public function lstSort_Create() {
            $this->lstSort = new QListBox($this);
            $this->lstSort->RenderWithNameCssClass = 'inline_block';
            $this->lstSort->AddItem(t('sorted by age'));
            $this->lstSort->AddItem(t('sorted by texts'), self::SORT_TEXT);
            $this->lstSort->AddItem(t('sorted by translations'), self::SORT_TRANSLATION);
            $this->lstSort->AddItem(t('sorted by text length'), self::SORT_TEXT_LENGTH);
            $this->lstSort->AddAction(new QChangeEvent(), new QAjaxControlAction($this, 'btnSearch_Click', $this->objWaitIcon));
            if (QApplication::QueryString('o'))
                $this->lstSort->SelectedValue = QApplication::QueryString('o');
        }

        public function lstSearchIn_Create() {
            $this->lstSearchIn = new QListBox($this);
            $this->lstSearchIn->Name = t('Search');
            $this->lstSearchIn->RenderWithNameCssClass = 'inline_block';
            $this->lstSearchIn->ToolTip = t('where to search');
            $this->lstSearchIn->AddItem(t('texts'), self::SEARCH_IN_TEXTS);
            $this->lstSearchIn->AddItem(t('translations'), self::SEARCH_IN_TRANSLATIONS);
            $this->lstSearchIn->AddItem(t('contexts'), self::SEARCH_IN_CONTEXTS);
            $this->lstSearchIn->AddItem(t('authors'), self::SEARCH_IN_AUTHORS);
            $this->lstSearchIn->AddItem(t('everywhere'), self::SEARCH_IN_ALL);
            $this->lstSearchIn->AddAction(new QChangeEvent(), new QAjaxControlAction($this, 'btnSearch_Click', $this->objWaitIcon));
            if (QApplication::QueryString('in'))
                $this->lstSearchIn->SelectedValue = QApplication::QueryString('in');
            else
                $this->lstSearchIn->SelectedValue = self::SEARCH_IN_TEXTS;
        }

        public function btnLess_Create() {
            $this->btnLess = new QButton($this);
            $this->btnLess->Text = t('Less');
            $this->btnLess->Display = ($this->intStart > 0);
            $this->btnLess->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnLess_Click', $this->objWaitIcon));
        }
        
        public function btnLess_Click($strFormId = null, $strControlId = null, $strParameter = null) {
            $this->intStart = max (0, $this->intStart -= 10);
            $this->dtrText_Conditions(false);
            $this->dtrText_Bind(null, null, null, false);
        }

        public function btnMore_Click($strFormId = null, $strControlId = null, $strParameter = null) {
            $this->dtrText->ItemsPerPage += $this->dtrText->ItemsPerPage;
            $this->dtrText_Conditions(false);
            $this->dtrText_Bind(null, null, null, false);
        }

        public function btnSearch_Click($strFormId = null, $strControlId = null, $strParameter = null) {
            $this->btnReplace->Display = QApplication::HasPermissionForThisLang('Can approve') && ($this->lstSearchIn->SelectedValue == self::SEARCH_IN_TEXTS);
            $this->txtReplace->Display = $this->btnReplace->Display;
            $this->btnMore->DisplayStyle = QDisplayStyle::Block;
            $this->dtrText_Conditions(true);
            $this->dtrText_Bind(null, null, null, true);
        }

        public function txtTranslation_Focus($strFormId, $strControlId, $strParameter) {
            foreach($this->dtrText->GetChildControls() as $ctl) {
                if ($ctl instanceof NarroContextInfoEditor) {
                    $blnSaveResult = $ctl->btnSave_Click($strFormId, $strControlId, $strParameter);

                    if ($ctl->Translation->ControlId == $strControlId) {
                        $this->strCurrentTranslationId = $ctl->Translation->ControlId;
                    }
                }
            }
        }

        protected function dtrText_Conditions($blnReset = false) {
            $this->arrConditions = array(
                QQ::AndCondition(
                    QQ::Equal(QQN::NarroContextInfo()->LanguageId, QApplication::GetLanguageId()),
                    QQ::Equal(QQN::NarroContextInfo()->Context->Active, true),
                    QQ::Equal(QQN::NarroContextInfo()->Context->File->Active, true)
                )
            );
            if ($blnReset)
                $this->intMaxRowCount = 0;

            $this->arrClauses = array(
                QQ::Expand(QQN::NarroContextInfo()->Context),
                QQ::Expand(QQN::NarroContextInfo()->Context->Text),
                QQ::Expand(QQN::NarroContextInfo()->Context->File),
                QQ::Expand(QQN::NarroContextInfo()->Context->Project),
                QQ::Expand(QQN::NarroContextInfo()->ValidSuggestion)
            );
            
            if ($this->lstProject->SelectedValue > 0)
                $this->arrConditions[] = QQ::Equal(QQN::NarroContextInfo()->Context->ProjectId, $this->lstProject->SelectedValue);

            switch($this->lstFilter->SelectedValue) {
                case self::SHOW_NOT_TRANSLATED:
                    $this->arrConditions[] = QQ::Equal(QQN::NarroContextInfo()->HasSuggestions, false);
                    break;

                case self::SHOW_NOT_APPROVED:
                    $this->arrConditions[] = QQ::AndCondition(
                        QQ::IsNull(QQN::NarroContextInfo()->ValidSuggestionId),
                        QQ::Equal(QQN::NarroContextInfo()->HasSuggestions, true)
                    );
                    break;

                case self::SHOW_APPROVED:
                    $this->arrConditions[] = QQ::IsNotNull(QQN::NarroContextInfo()->ValidSuggestionId);
                    break;

                case self::SHOW_APPROVED_AND_NOT_APPROVED:
                    $this->arrConditions[] = QQ::Equal(QQN::NarroContextInfo()->HasSuggestions, true);
                    break;
                    
                case self::SHOW_NOT_APPROVED_AND_NOT_TRANSLATED:
                    $this->arrConditions[] = QQ::IsNull(QQN::NarroContextInfo()->ValidSuggestionId);
                    break;
                    
                case self::SHOW_NOT_APPROVED_AND_WITHOUT_VOTES:
                    $this->arrConditions[] = QQ::Equal(
                        QQ::SubSql(
                        	'SELECT COUNT(*) FROM narro_suggestion_vote, narro_suggestion WHERE narro_suggestion_vote.suggestion_id=narro_suggestion.suggestion_id AND narro_suggestion.text_id={1}',
                            QQN::NarroContextInfo()->Context->TextId
                        ),
                        0
                    );
                    break;
                    
                case self::SHOW_NOT_APPROVED_AND_WITH_VOTES:
                    $this->arrConditions[] = QQ::NotEqual(
                        QQ::SubSql(
                        	'SELECT COUNT(*) FROM narro_suggestion_vote, narro_suggestion WHERE narro_suggestion_vote.suggestion_id=narro_suggestion.suggestion_id AND narro_suggestion.text_id={1}',
                            QQN::NarroContextInfo()->Context->TextId
                        ),
                        0
                    );
                    break;
                    
                case self::SHOW_IDENTICAL_APPROVED:
                    $this->arrClauses[] = QQ::ExpandAsArray(QQN::NarroContextInfo()->Context->Text->NarroSuggestionAsText);
                    $this->arrClauses[] = QQ::Distinct();
                    
                    $this->arrConditions[] = QQ::AndCondition(
                        QQ::Equal(QQN::NarroContextInfo()->Context->Text->TextValueMd5, QQN::NarroContextInfo()->Context->Text->NarroSuggestionAsText->SuggestionValueMd5),
                        QQ::Equal(QQN::NarroContextInfo()->ValidSuggestionId, QQN::NarroContextInfo()->Context->Text->NarroSuggestionAsText->SuggestionId),
                        QQ::Equal(QQN::NarroContextInfo()->Context->Text->NarroSuggestionAsText->LanguageId, QQN::NarroContextInfo()->LanguageId)
                    );
                    break;
                    
                case self::SHOW_IDENTICAL:
                    $this->arrClauses[] = QQ::ExpandAsArray(QQN::NarroContextInfo()->Context->Text->NarroSuggestionAsText);
                    $this->arrClauses[] = QQ::Distinct();
                    
                    $this->arrConditions[] = QQ::AndCondition(
                        QQ::Equal(QQN::NarroContextInfo()->Context->Text->TextValueMd5, QQN::NarroContextInfo()->Context->Text->NarroSuggestionAsText->SuggestionValueMd5),
                        QQ::Equal(QQN::NarroContextInfo()->Context->Text->NarroSuggestionAsText->LanguageId, QQN::NarroContextInfo()->LanguageId)
                    );
                    break;
                                             
                case self::SHOW_ALL:
                default:
                    

            }

            if ($this->txtFile->Text != t('all files') && $this->txtFile->Text != '')
                if (preg_match("/^'.+'$/", $this->txtFile->Text))
                    $this->arrConditions[] = QQ::Equal(QQN::NarroContextInfo()->Context->File->FilePath, substr($this->txtFile->Text, 1, -1));
                elseif (preg_match('/^".+"$/', $this->txtFile->Text))
                    $this->arrConditions[] = QQ::Equal(QQN::NarroContextInfo()->Context->File->FilePath, substr($this->txtFile->Text, 1, -1));
                else
                    $this->arrConditions[] = QQ::Like(QQN::NarroContextInfo()->Context->File->FilePath, '%' . $this->txtFile->Text . '%');
                

            if ($this->txtSearch->Text) {
                if (preg_match("/^'.+'$/", $this->txtSearch->Text))
                    $strLikeSearch = substr($this->txtSearch->Text, 1, -1);
                elseif (preg_match('/^".+"$/', $this->txtSearch->Text))
                    $strLikeSearch = substr($this->txtSearch->Text, 1, -1);
                else
                    $strLikeSearch = '%' . $this->txtSearch->Text . '%';
                
                switch($this->lstSearchIn->SelectedValue) {
                    case self::SEARCH_IN_TEXTS:
                        $this->arrConditions[] = QQ::Like(QQN::NarroContextInfo()->Context->Text->TextValue, $strLikeSearch);
                        break;
                    case self::SEARCH_IN_TRANSLATIONS:
                        $this->arrClauses[] = QQ::ExpandAsArray(QQN::NarroContextInfo()->Context->Text->NarroSuggestionAsText);
                        $this->arrConditions[] = QQ::AndCondition(
                            QQ::Like(QQN::NarroContextInfo()->Context->Text->NarroSuggestionAsText->SuggestionValue, $strLikeSearch),
                            QQ::Equal(QQN::NarroContextInfo()->Context->Text->NarroSuggestionAsText->LanguageId, QApplication::GetLanguageId())
                        );
                        break;
                    case self::SEARCH_IN_AUTHORS:
                        $this->arrClauses[] = QQ::ExpandAsArray(QQN::NarroContextInfo()->Context->Text->NarroSuggestionAsText);
                        $this->arrConditions[] = QQ::AndCondition(
                            QQ::Like(QQN::NarroContextInfo()->Context->Text->NarroSuggestionAsText->User->RealName, $strLikeSearch),
                            QQ::Equal(QQN::NarroContextInfo()->Context->Text->NarroSuggestionAsText->LanguageId, QApplication::GetLanguageId())
                        );
                        break;
                    case self::SEARCH_IN_CONTEXTS:
                        $this->arrConditions[] = QQ::OrCondition(
                            QQ::Like(QQN::NarroContextInfo()->Context->Context, $strLikeSearch),
                            QQ::Like(QQN::NarroContextInfo()->Context->Comment, $strLikeSearch)
                        );
                        break;
                    case self::SEARCH_IN_ALL:
                    default:
                        $this->arrClauses[] = QQ::Distinct();
                        $this->arrConditions[] = QQ::OrCondition(
                            QQ::Like(QQN::NarroContextInfo()->Context->Text->TextValue, $strLikeSearch),
                            QQ::AndCondition(
                                QQ::Like(QQN::NarroContextInfo()->Context->Text->NarroSuggestionAsText->SuggestionValue, $strLikeSearch),
                                QQ::Equal(QQN::NarroContextInfo()->Context->Text->NarroSuggestionAsText->LanguageId, QApplication::GetLanguageId())
                            ),
                            QQ::AndCondition(
                                QQ::Like(QQN::NarroContextInfo()->Context->Text->NarroSuggestionAsText->User->RealName, $strLikeSearch),
                                QQ::Equal(QQN::NarroContextInfo()->Context->Text->NarroSuggestionAsText->LanguageId, QApplication::GetLanguageId())
                            ),
                            QQ::Like(QQN::NarroContextInfo()->Context->Context, $strLikeSearch),
                            QQ::Like(QQN::NarroContextInfo()->Context->Comment, $strLikeSearch)
                        );
                }
            }

            switch($this->lstSort->SelectedValue) {
                case self::SORT_TEXT:
                    $this->arrClauses[] = QQ::OrderBy(QQN::NarroContextInfo()->Context->Text->TextValue, $this->lstSortDir->SelectedValue);
                    break;
                case self::SORT_TEXT_LENGTH:
                    $this->arrClauses[] = QQ::OrderBy(QQN::NarroContextInfo()->Context->Text->TextWordCount, $this->lstSortDir->SelectedValue);
                    break;
                case self::SORT_TRANSLATION:
                    $this->arrClauses[] = QQ::OrderBy(QQN::NarroContextInfo()->ValidSuggestion->SuggestionValue, $this->lstSortDir->SelectedValue);
                    break;
                case self::SORT_TRANSLATION_DATE:
                    $this->arrClauses[] = QQ::OrderBy(QQN::NarroContextInfo()->Modified, $this->lstSortDir->SelectedValue);
                    break;
             }
        }

        public function dtrText_Bind($strFormId = null, $strControlId = null, $strParameter = null, $blnReset = false) {
            if ($blnReset) $this->dtrText->RemoveChildControls(true);
            
            $arrClausesWithLimit = $this->arrClauses;
            $arrClausesWithLimit[] = $this->dtrText->LimitClause;
            
            $this->dtrText->DataSource = NarroContextInfo::QueryArray(
                QQ::AndCondition($this->arrConditions),
                $arrClausesWithLimit
            );
            
            if ($this->lstProject->SelectedValue) {
                $this->intTotalItemCount = NarroContextInfo::QueryCount(
                    QQ::AndCondition($this->arrConditions),
                    $this->arrClauses
                );
                
                $this->dtrText->TotalItemCount = $this->intTotalItemCount;
            }
            else
                $this->intTotalItemCount = 0;
            
            if ($this->blnNewEditorCreated == false)
                $this->intTotalItemCount = $this->intStart + count($this->dtrText->DataSource);
            
            if ($this->intStart == 0)
                $this->btnLess->Display = false;

            if ($this->intTotalItemCount == $this->dtrText->ItemCount) {
                $this->chkLast->Checked = true;
                $this->btnMore->DisplayStyle = QDisplayStyle::None;
            }
            else {
                $this->chkLast->Checked = false;
            }

            if ($this->strCurrentTranslationId) {
                $txtTranslation = $this->Form->GetControl($this->strCurrentTranslationId);
                if ($txtTranslation instanceof QTextBox)
                    $txtTranslation->Focus();
            }
            
            $this->chkRequestMoreSent->Checked = false;
        }
        
        public function btnReplace_Click() {
            
            if (!QApplication::HasPermissionForThisLang('Can approve')) return false;
            
            if ($this->txtReplace->Display == false)
                $this->txtReplace->Display = true;
            else {
                if ($this->txtSearch->Text == '') return false;
                if ($this->txtReplace->Text == '') return false;
                
                $strQuery = NarroContextInfo::GetQueryForConditions($objQueryBuilder, QQ::AndCondition($this->arrConditions), $this->arrClauses);
                $objDbResult = NarroContextInfo::GetDatabase()->Query($strQuery);
                if ($objDbResult) {
                    $intReplaceCnt = 0;
                    $intApproved = 0;
                    $intTranslations = 0;
                    $arrProcessed = array();
                    while ($objDbRow = $objDbResult->GetNextRow()) {
                        $objContextInfo = NarroContextInfo::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
                        if (in_array($objContextInfo->ContextInfoId, $arrProcessed))
                            continue;
                        else
                            $arrProcessed[] = $objContextInfo->ContextInfoId;
                        
                        $objReplaceSuggestion = null;
                        
                        if (preg_match("/^'.*'$/", $this->txtSearch->Text))
                            $strToReplace = substr($this->txtSearch->Text, 1, -1);
                        else
                            $strToReplace = $this->txtSearch->Text;
                        
                        if ($strToReplace == $objContextInfo->Context->Text->TextValue) {
                            $objReplaceSuggestion = NarroSuggestion::LoadByTextIdLanguageIdSuggestionValueMd5($objContextInfo->Context->TextId, QApplication::GetLanguageId(), md5($this->txtReplace->Text));
                            if (!$objReplaceSuggestion) {
                                $objSuggestion = new NarroSuggestion();
                                $objSuggestion->UserId = QApplication::GetUserId();
                                $objSuggestion->TextId = $objContextInfo->Context->TextId;
                                $objSuggestion->LanguageId = QApplication::GetLanguageId();
                                $objSuggestion->SuggestionValue = $this->txtReplace->Text;
                                $objSuggestion->HasComments = 0;
                                $objSuggestion->IsImported = 0;
                                $objSuggestion->Created = QDateTime::Now();
                                $objSuggestion->Modified = null;
                                $objSuggestion->Save();
                                $intTranslations++;
                                
                                $objReplaceSuggestion = $objSuggestion;
                            }
                            
                        }
                        
                        if ($objReplaceSuggestion instanceof NarroSuggestion) {
                            $intReplaceCnt++;
                            
                            if ($objContextInfo->ValidSuggestionId != $objReplaceSuggestion->SuggestionId || $this->chkApprove->Checked) {
                                if ($objContextInfo->ValidSuggestionId == null)
                                    $intApproved++;
                                $objContextInfo->ValidSuggestionId = $objReplaceSuggestion->SuggestionId;
                                $objContextInfo->ValidatorUserId = QApplication::GetUserId();
                                $objContextInfo->Modified = QDateTime::Now();
                                $objContextInfo->Save();
                            }
                        }
                    }
                    
                    $this->dtrText->RemoveChildControls(true);
                    $this->btnReplace->Refresh();
                    QApplication::ExecuteJavaScript(
                    	sprintf(
                    		'jQuery(\'#%s\').after(\'&nbsp;<small style="padding: 2px;" class="ui-state-highlight ui-corner-all"><span style="width:16px; height: 16px; display:inline-block" class="ui-icon ui-icon-info"></span>&nbsp;%s.</small>\')',
                            $this->btnReplace->ControlId,
                            sprintf(t('%d occurences of "%s" translated with "%s", out of which %d were already approved, %d translations added.'), $intReplaceCnt, $strToReplace, $this->txtReplace->Text, $intApproved, $intTranslations)
                        )
                    );
                }
                
            }
        }
    }
