<?php
    /**
     * Narro is an application that allows online software translation and maintenance.
     * Copyright (C) 2008 Alexandru Szasz <alexxed@gmail.com>
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

    require_once('includes/prepend.inc.php');

    class NarroLanguageListForm extends QForm {
        protected $dtgNarroLanguage;

        // DataGrid Columns
        protected $colLanguageName;
        protected $colLanguageCode;
        protected $colCountryCode;
        protected $colEncoding;
        protected $colTextDirection;
        protected $colSpecialCharacters;
        protected $colPluralForm;
        protected $colActive;

        protected $colActions;

        protected function Form_Create() {
            parent::Form_Create();

            // Setup DataGrid Columns
            $this->colLanguageName = new QDataGridColumn(t('Language Name'), '<?= $_FORM->dtgNarroLanguage_LanguageNameColumn_Render($_ITEM) ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroLanguage()->LanguageName), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroLanguage()->LanguageName, false)));
            $this->colLanguageName->HtmlEntities = false;
            $this->colLanguageCode = new QDataGridColumn(t('Language Code'), '<?= $_FORM->dtgNarroLanguage_LanguageCodeColumn_Render($_ITEM) ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroLanguage()->LanguageCode), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroLanguage()->LanguageCode, false)));
            $this->colCountryCode = new QDataGridColumn(t('Country Code'), '<?= $_FORM->dtgNarroLanguage_CountryCodeColumn_Render($_ITEM) ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroLanguage()->CountryCode), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroLanguage()->CountryCode, false)));
            $this->colEncoding = new QDataGridColumn(t('Encoding'), '<?= $_FORM->dtgNarroLanguage_EncodingColumn_Render($_ITEM) ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroLanguage()->Encoding), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroLanguage()->Encoding, false)));
            $this->colTextDirection = new QDataGridColumn(t('Text Direction'), '<?= $_FORM->dtgNarroLanguage_TextDirectionColumn_Render($_ITEM) ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroLanguage()->TextDirection), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroLanguage()->TextDirection, false)));
            $this->colSpecialCharacters = new QDataGridColumn(t('Special Characters'), '<?= $_FORM->dtgNarroLanguage_SpecialCharactersColumn_Render($_ITEM) ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroLanguage()->SpecialCharacters), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroLanguage()->SpecialCharacters, false)));
            $this->colPluralForm = new QDataGridColumn(t('Plural Forms'), '<?= $_FORM->dtgNarroLanguage_PluralFormColumn_Render($_ITEM) ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroLanguage()->SpecialCharacters), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroLanguage()->SpecialCharacters, false)));
            $this->colActive = new QDataGridColumn(t('Active'), '<?= $_FORM->dtgNarroLanguage_ActiveColumn_Render($_ITEM) ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroLanguage()->Active), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroLanguage()->Active, false)));

            $this->colActions = new QDataGridColumn(t('Actions'), '<?= $_FORM->dtgNarroLanguage_Actions_Render($_ITEM) ?>');
            $this->colActions->HtmlEntities = false;

            // Setup DataGrid
            $this->dtgNarroLanguage = new QDataGrid($this);

            // Datagrid Paginator
            $this->dtgNarroLanguage->Paginator = new QPaginator($this->dtgNarroLanguage);
            $this->dtgNarroLanguage->ItemsPerPage = NarroApp::$User->getPreferenceValueByName('Items per page');

            // Specify Whether or Not to Refresh using Ajax
            $this->dtgNarroLanguage->UseAjax = false;

            // Specify the local databind method this datagrid will use
            $this->dtgNarroLanguage->SetDataBinder('dtgNarroLanguage_Bind');

            $this->dtgNarroLanguage->AddColumn($this->colLanguageName);
            $this->dtgNarroLanguage->AddColumn($this->colLanguageCode);
            $this->dtgNarroLanguage->AddColumn($this->colCountryCode);
            $this->dtgNarroLanguage->AddColumn($this->colEncoding);
            $this->dtgNarroLanguage->AddColumn($this->colTextDirection);
            $this->dtgNarroLanguage->AddColumn($this->colSpecialCharacters);
            $this->dtgNarroLanguage->AddColumn($this->colPluralForm);
            $this->dtgNarroLanguage->AddColumn($this->colActive);

            $this->dtgNarroLanguage->AddColumn($this->colActions);

            $this->dtgNarroLanguage->SortColumnIndex = 0;
        }

        public function dtgNarroLanguage_LanguageNameColumn_Render(NarroLanguage $objNarroLanguage) {
            return sprintf('<a href="%s?l=%s">%s</a>', basename(__FILE__), $objNarroLanguage->LanguageCode, $objNarroLanguage->LanguageName);
        }

        public function dtgNarroLanguage_LanguageCodeColumn_Render(NarroLanguage $objNarroLanguage) {
            return $objNarroLanguage->LanguageCode;
        }

        public function dtgNarroLanguage_PluralFormColumn_Render(NarroLanguage $objNarroLanguage) {
            return $objNarroLanguage->Plurals;
        }

        public function dtgNarroLanguage_CountryCodeColumn_Render(NarroLanguage $objNarroLanguage) {
            return $objNarroLanguage->CountryCode;
        }

        public function dtgNarroLanguage_EncodingColumn_Render(NarroLanguage $objNarroLanguage) {
            return $objNarroLanguage->Encoding;
        }

        public function dtgNarroLanguage_TextDirectionColumn_Render(NarroLanguage $objNarroLanguage) {
            return $objNarroLanguage->TextDirection;
        }

        public function dtgNarroLanguage_SpecialCharactersColumn_Render(NarroLanguage $objNarroLanguage) {
            return $objNarroLanguage->SpecialCharacters;
        }

        public function dtgNarroLanguage_ActiveColumn_Render(NarroLanguage $objNarroLanguage) {
            return $objNarroLanguage->Active?t('Yes'):t('No');
        }

        public function dtgNarroLanguage_Actions_Render(NarroLanguage $objNarroLanguage) {
            if (NarroApp::HasPermissionForThisLang('Can edit language', null))
                return sprintf('<a href="narro_language_edit.php?l=%s&lid=%d">%s</a>', NarroApp::$Language->LanguageCode, $objNarroLanguage->LanguageId, t('Edit'));
        }

        protected function dtgNarroLanguage_Bind() {
            // Because we want to enable pagination AND sorting, we need to setup the $objClauses array to send to LoadAll()

            $this->dtgNarroLanguage->TotalItemCount = NarroLanguage::QueryCount(QQ::All());

            if ($this->dtgNarroLanguage->TotalItemCount == 0)
                NarroApp::Redirect('narro_language_edit.php');

            // Setup the $objClauses Array
            $objClauses = array();

            // If a column is selected to be sorted, and if that column has a OrderByClause set on it, then let's add
            // the OrderByClause to the $objClauses array
            if ($objClause = $this->dtgNarroLanguage->OrderByClause)
                array_push($objClauses, $objClause);

            // Add the LimitClause information, as well
            if ($objClause = $this->dtgNarroLanguage->LimitClause)
                array_push($objClauses, $objClause);

            $this->dtgNarroLanguage->DataSource = NarroLanguage::QueryArray(QQ::All(), $objClauses);

            NarroApp::ExecuteJavaScript('highlight_datagrid();');
        }
    }

    NarroLanguageListForm::Run('NarroLanguageListForm', 'templates/narro_language_list.tpl.php');
?>
