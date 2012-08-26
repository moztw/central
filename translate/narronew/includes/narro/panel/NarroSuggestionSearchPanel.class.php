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
     *
     * @property QLabel $Message
     * @property NarroTextCommentPanel $CommentList
     * @property QLabel $Text
     * @property QTextBox $TextAccessKey
     * @property QTextbox $TextCommandKey
     */

    class NarroSuggestionSearchPanel extends QPanel {
        public $txtSearch;
        public $lstLanguage;
        public $btnSearch;
        public $btnClear;
        public $dtgSuggestion;


        public function __construct($objParentObject, $strControlId = null) {
            parent::__construct($objParentObject, $strControlId);
            
            $this->blnAutoRenderChildren = true;

            $this->strTemplate = dirname(__FILE__) . '/' . __CLASS__ . '.tpl.php';
            
            $this->txtSearch = new QTextBox($this);
            $this->txtSearch->Name = t('Text');
            $this->txtSearch->AddAction(new QEnterKeyEvent(), new QAjaxControlAction($this, 'txtSearch_KeyUp'));
            $this->txtSearch->SetCustomAttribute('autocomplete', 'off');
            
            $this->btnClear = new QImageButton($this);
            $this->btnClear->AlternateText = t('Clear');
            $this->btnClear->ToolTip = $this->btnClear->AlternateText;
            $this->btnClear->CssClass = 'clear_button';
            $this->btnClear->ImageUrl = __NARRO_IMAGE_ASSETS__ . '/clear.png';
            $this->btnClear->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnClear_Click'));
            
            $this->lstLanguage = new QListBox($this);
            $arrLanguages = NarroLanguage::LoadAllActive(QQ::OrderBy(QQN::NarroLanguage()->LanguageName));
            foreach($arrLanguages as $objLanguage) {
                $this->lstLanguage->AddItem(t($objLanguage->LanguageName), $objLanguage->LanguageId, ($objLanguage->LanguageCode == QApplication::$TargetLanguage->LanguageCode));
            }
            
            $this->btnSearch = new QImageButton($this);
            $this->btnSearch->AlternateText = t('Search');
            $this->btnSearch->ToolTip = $this->btnSearch->AlternateText;
            $this->btnSearch->CssClass = 'clear_button';
            $this->btnSearch->ImageUrl = __NARRO_IMAGE_ASSETS__ . '/search.png';
            $this->btnSearch->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'txtSearch_KeyUp'));
            
            $this->dtgSuggestion = new NarroSuggestionDataGrid($this);
            $this->dtgSuggestion->ShowHeader = false;
            $this->dtgSuggestion->MetaAddColumn(QQN::NarroSuggestion()->SuggestionValue);
            $this->dtgSuggestion->AdditionalClauses = array(QQ::LimitInfo(20), QQ::OrderBy(QQN::NarroSuggestion()->Text->TextCharCount));
            $this->btnClear_Click();
        }
        
        public function btnClear_Click() {
            $this->txtSearch->Text = '';
            $this->dtgSuggestion->AdditionalConditions = QQ::None();
        }
        
        public function txtSearch_KeyUp() {
            if (strlen($this->txtSearch->Text) < 2 || preg_match("/^'.*'$/", $this->txtSearch->Text) || preg_match('/^".*"$/', $this->txtSearch->Text))
                $this->dtgSuggestion->AdditionalConditions = QQ::AndCondition(
                    QQ::Equal(QQN::NarroSuggestion()->LanguageId, $this->lstLanguage->SelectedValue),
                    QQ::Like(QQN::NarroSuggestion()->Text->TextValue, substr($this->txtSearch->Text, 1, -1))
                );
            else
                $this->dtgSuggestion->AdditionalConditions = QQ::AndCondition(
                    QQ::Equal(QQN::NarroSuggestion()->LanguageId, $this->lstLanguage->SelectedValue),
                    QQ::Like(QQN::NarroSuggestion()->Text->TextValue, '%' . $this->txtSearch->Text .'%')
                );
            
            $this->dtgSuggestion->Refresh();
        }
        

        public function __get($strName) {
            switch ($strName) {

                default:
                    try {
                        return parent::__get($strName);
                        break;
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }
            }
        }

        /////////////////////////
        // Public Properties: SET
        /////////////////////////
        public function __set($strName, $mixValue) {
            $this->blnModified = true;

            switch ($strName) {

                default:
                    try {
                        parent::__set($strName, $mixValue);
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }
                    break;
            }
        }

    }
?>

