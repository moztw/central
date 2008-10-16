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

    class NarroUserSuggestionsPanel extends QPanel {
        protected $dtgSuggestions;
        protected $colText;
        protected $colSuggestion;

        protected $intUserId;

        public function __construct($intUserId, $objParentObject, $strControlId = null) {
            // Call the Parent
            try {
                parent::__construct($objParentObject, $strControlId);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            $this->intUserId = $intUserId;

            $this->colSuggestion = new QDataGridColumn(t('Translated text'), '<?= $_CONTROL->ParentControl->dtgSuggestions_colSuggestion_Render($_ITEM); ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroSuggestion()->SuggestionValue), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroSuggestion()->SuggestionValue, false)));
            $this->colText = new QDataGridColumn(t('Original text'), '<?= $_CONTROL->ParentControl->dtgSuggestions_colText_Render($_ITEM); ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroSuggestion()->Text->TextValue), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroSuggestion()->Text->TextValue, false)));

            // Setup DataGrid
            $this->dtgSuggestions = new QDataGrid($this);
            $this->dtgSuggestions->SetCustomStyle('padding', '5px');
            //$this->dtgSuggestions->SetCustomStyle('margin-left', '15px');


            // Datagrid Paginator
            $this->dtgSuggestions->Paginator = new QPaginator($this->dtgSuggestions);
            $this->dtgSuggestions->ItemsPerPage = QApplication::$objUser->getPreferenceValueByName('Items per page');

            // Specify Whether or Not to Refresh using Ajax
            $this->dtgSuggestions->UseAjax = true;

            // Specify the local databind method this datagrid will use
            $this->dtgSuggestions->SetDataBinder('dtgSuggestions_Bind', $this);

            $this->dtgSuggestions->AddColumn($this->colText);
            $this->dtgSuggestions->AddColumn($this->colSuggestion);
        }

        public function dtgSuggestions_colSuggestion_Render( NarroSuggestion $objNarroSuggestion ) {
            return $objNarroSuggestion->SuggestionValue;
        }

        public function dtgSuggestions_colText_Render( NarroSuggestion $objNarroSuggestion ) {
            return $objNarroSuggestion->Text->TextValue;
        }

        public function dtgSuggestions_Bind() {
            // Get Total Count b/c of Pagination
            //$this->dtgSuggestions->TotalItemCount = NarroSuggestion::CountByTextId($this->objNarroContext->TextId);

            $objClauses = array();
            if ($objClause = $this->dtgSuggestions->OrderByClause)
                array_push($objClauses, $objClause);

            // Add the LimitClause information, as well
            if ($objClause = $this->dtgSuggestions->LimitClause)
                array_push($objClauses, $objClause);
            else
                array_push($objClauses, QQ::LimitInfo($this->dtgSuggestions->ItemsPerPage));

            $this->dtgSuggestions->TotalItemCount = NarroSuggestion::CountByUserId($this->intUserId);
            $this->dtgSuggestions->DataSource = NarroSuggestion::LoadArrayByUserId($this->intUserId, $objClauses);

            QApplication::ExecuteJavaScript('highlight_datagrid();');
        }

        protected function GetControlHtml() {
            return $this->dtgSuggestions->Render(false);
        }

    }
?>
