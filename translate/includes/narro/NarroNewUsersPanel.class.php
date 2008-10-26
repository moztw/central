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

    class NarroNewUsersPanel extends QPanel {
        protected $dtgUsers;
        protected $colUsername;
        protected $colLanguage;
        protected $colSuggestionCnt;
        protected $colCharCnt;
        protected $intLimit = 10;

        public function __construct($objParentObject, $strControlId = null) {
            // Call the Parent
            try {
                parent::__construct($objParentObject, $strControlId);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            $this->colUsername = new QDataGridColumn(t('Username'), '<?= $_CONTROL->ParentControl->dtgUsers_colUsername_Render($_ITEM); ?>');
            $this->colUsername->HtmlEntities = false;
            $this->colSuggestionCnt = new QDataGridColumn(t('Translations'), '<?= $_CONTROL->ParentControl->dtgUsers_colSuggestionCnt_Render($_ITEM); ?>');
            $this->colCharCnt = new QDataGridColumn(t('Characters'), '<?= $_CONTROL->ParentControl->dtgUsers_colCharCnt_Render($_ITEM); ?>');
            $this->colLanguage = new QDataGridColumn(t('Language'), '<?= $_CONTROL->ParentControl->dtgUsers_colLanguage_Render($_ITEM); ?>');

            // Setup DataGrid
            $this->dtgUsers = new QDataGrid($this);
            $this->dtgUsers->SetCustomStyle('padding', '5px');
            //$this->dtgUsers->SetCustomStyle('margin-left', '15px');


            // Specify Whether or Not to Refresh using Ajax
            $this->dtgUsers->UseAjax = true;

            // Specify the local databind method this datagrid will use
            $this->dtgUsers->SetDataBinder('dtgUsers_Bind', $this);

            $this->dtgUsers->AddColumn($this->colUsername);
            $this->dtgUsers->AddColumn($this->colSuggestionCnt);
            $this->dtgUsers->AddColumn($this->colCharCnt);
            $this->dtgUsers->AddColumn($this->colLanguage);
        }

        public function dtgUsers_colUsername_Render( $arrUserInfo ) {
            return NarroLink::UserProfile($arrUserInfo->GetColumn('user_id'), $arrUserInfo->GetColumn('username'));
        }

        public function dtgUsers_colSuggestionCnt_Render( $arrUserInfo ) {
            return $arrUserInfo->GetColumn('suggestion_cnt');
        }

        public function dtgUsers_colCharCnt_Render( $arrUserInfo ) {
            return $arrUserInfo->GetColumn('char_cnt');
        }

        public function dtgUsers_colLanguage_Render( $arrUserInfo ) {
            try {
                $arrUserData = unserialize($arrUserInfo->GetColumn('data'));
                return $arrUserData['Language'];
            }
            catch (Exception $objEx) {
                return t('Unknown');
            }
        }


        public function dtgUsers_Bind() {
            $objDatabase = QApplication::$Database[1];

            $strQuery = sprintf('SELECT u.username, u.user_id, u.data, COUNT(s.suggestion_id) as suggestion_cnt, SUM(s.suggestion_char_count) AS char_cnt FROM narro_user u LEFT JOIN narro_suggestion s ON u.user_id=s.user_id WHERE u.user_id<>%d GROUP BY u.user_id ORDER BY u.user_id DESC LIMIT 0,%d', NarroUser::ANONYMOUS_USER_ID, $this->intLimit);

            // Perform the Query
            $objDbResult = $objDatabase->Query($strQuery);

            $this->dtgUsers->DataSource = $objDbResult->GetRows();

            QApplication::ExecuteJavaScript('highlight_datagrid();');

        }

        protected function GetControlHtml() {
            return $this->dtgUsers->Render(false);
        }

    }
?>
