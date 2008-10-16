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

    class NarroUserListForm extends QForm {
        protected $objUser;
        protected $dtgNarroUserList;

        // DataGrid Columns
        protected $colUsername;
        protected $colEmail;
        protected $colPreferences;
        protected $colActions;


        protected function Form_Create() {
            if (!QApplication::$objUser->hasPermission('Can manage users'))
                QApplication::Redirect('narro_project_list.php');

            $this->objUser = NarroUser::Load(QApplication::QueryString('u'));

            // Setup DataGrid Columns
            $this->colUsername = new QDataGridColumn(QApplication::Translate('Username'), '<?= $_FORM->dtgNarroUserList_UsernameColumn_Render($_ITEM) ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroUser()->Username), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroUser()->Username, false)));
            $this->colUsername->HtmlEntities = false;
            $this->colEmail = new QDataGridColumn(QApplication::Translate('Email'), '<?= $_FORM->dtgNarroUserList_EmailColumn_Render($_ITEM) ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroUser()->Email), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroUser()->Email, false)));
            $this->colEmail->HtmlEntities = false;
            $this->colPreferences = new QDataGridColumn(QApplication::Translate('Preferences'), '<?= $_FORM->dtgNarroUserList_DataColumn_Render($_ITEM) ?>');
            $this->colPreferences->HtmlEntities = false;

            $this->colActions = new QDataGridColumn(QApplication::Translate('Actions'), '<?= $_FORM->dtgNarroUserList_ActionsColumn_Render($_ITEM) ?>');
            $this->colActions->HtmlEntities = false;


            // Setup DataGrid
            $this->dtgNarroUserList = new QDataGrid($this);
            $this->dtgNarroUserList->CellSpacing = 0;
            $this->dtgNarroUserList->CellPadding = 4;
            $this->dtgNarroUserList->BorderStyle = QBorderStyle::Solid;
            $this->dtgNarroUserList->BorderWidth = 1;
            $this->dtgNarroUserList->GridLines = QGridLines::Both;

            // Datagrid Paginator
            $this->dtgNarroUserList->Paginator = new QPaginator($this->dtgNarroUserList);
            $this->dtgNarroUserList->ItemsPerPage = QApplication::$objUser->getPreferenceValueByName('Items per page');


            // Specify Whether or Not to Refresh using Ajax
            $this->dtgNarroUserList->UseAjax = false;

            // Specify the local databind method this datagrid will use
            $this->dtgNarroUserList->SetDataBinder('dtgNarroUserList_Bind');

            $this->dtgNarroUserList->AddColumn($this->colUsername);
            $this->dtgNarroUserList->AddColumn($this->colEmail);
            $this->dtgNarroUserList->AddColumn($this->colPreferences);
            $this->dtgNarroUserList->AddColumn($this->colActions);
        }

        public function dtgNarroUserList_UsernameColumn_Render(NarroUser $objNarroUser) {
            if ($objNarroUser->UserId == NarroUser::ANONYMOUS_USER_ID)
                return t('Anonymous');
            else
                return $objNarroUser->Username;
        }

        public function dtgNarroUserList_EmailColumn_Render(NarroUser $objNarroUser) {
            return $objNarroUser->Email;
        }

        public function dtgNarroUserList_DataColumn_Render(NarroUser $objNarroUser) {
            return '<pre>' . var_export(unserialize($objNarroUser->Data),true) . '</pre>';
        }

        public function dtgNarroUserList_ActionsColumn_Render(NarroUser $objNarroUser) {
            return
                sprintf('<a href="narro_user_preferences.php?u=%d">%s</a>',
                    $objNarroUser->UserId,
                    QApplication::Translate('Preferences')
                ) . ' | ' .
                sprintf('<a href="narro_user_permission.php?u=%d">%s</a>',
                    $objNarroUser->UserId,
                    QApplication::Translate('Permissions')
                );
            return '';
        }

        protected function dtgNarroUserList_Bind() {
            // Remember!  We need to first set the TotalItemCount, which will affect the calcuation of LimitClause below
            $this->dtgNarroUserList->TotalItemCount = NarroUser::CountAll();

            // Because we want to enable pagination AND sorting, we need to setup the $objClauses array to send to LoadAll()

            // Setup the $objClauses Array
            $objClauses = array();

            // If a column is selected to be sorted, and if that column has a OrderByClause set on it, then let's add
            // the OrderByClause to the $objClauses array
            if ($objClause = $this->dtgNarroUserList->OrderByClause)
                array_push($objClauses, $objClause);

            // Add the LimitClause information, as well
            if ($objClause = $this->dtgNarroUserList->LimitClause)
                array_push($objClauses, $objClause);

            // Set the DataSource to be the array of all NarroUser objects, given the clauses above
            $this->dtgNarroUserList->DataSource = NarroUser::LoadAll($objClauses);
        }
    }

    NarroUserListForm::Run('NarroUserListForm', 'templates/narro_user_list.tpl.php');

?>