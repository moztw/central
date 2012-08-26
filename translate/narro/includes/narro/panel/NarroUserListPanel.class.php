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

    class NarroUserListPanel extends QPanel {
        public $dtgUser;
        public $txtSearch;
        public $btnSearch;

        public function __construct($objParentObject, $strControlId = null) {
            // Call the Parent
            try {
                parent::__construct($objParentObject, $strControlId);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            $this->strTemplate = __NARRO_INCLUDES__ . '/narro/panel/NarroUserListPanel.tpl.php';

            $colActions = new QDataGridColumn(QApplication::Translate('Actions'), '<?= $_CONTROL->ParentControl->dtgUser_ActionsColumn_Render($_ITEM) ?>');
            $colActions->HtmlEntities = false;


            // Setup DataGrid
            $this->dtgUser = new NarroUserDataGrid($this);
            $this->dtgUser->UseAjax = QApplication::$UseAjax;
            $this->dtgUser->ShowHeader = true;
            $this->dtgUser->ShowFilter = false;
            $this->dtgUser->Title = t('Users');

            // Datagrid Paginator
            $this->dtgUser->Paginator = new QPaginator($this->dtgUser);
            $this->dtgUser->PaginatorAlternate = new QPaginator($this->dtgUser);
            $this->dtgUser->ItemsPerPage = QApplication::$User->GetPreferenceValueByName('Items per page');

            // Specify the local databind method this datagrid will use
            $this->dtgUser->SetDataBinder('dtgUser_Bind', $this);

            $this->dtgUser->MetaAddColumn(QQN::NarroUser()->RealName, sprintf('Name="%s"', t('Real name')), 'Html="<?= $_CONTROL->ParentControl->dtgUser_RealNameColumn_Render($_ITEM) ?>"', 'HtmlEntities=false');
            $this->dtgUser->MetaAddColumn(QQN::NarroUser()->Username, sprintf('Name="%s"', t('Username')), 'Html="<?= $_CONTROL->ParentControl->dtgUser_UsernameColumn_Render($_ITEM) ?>"', 'HtmlEntities=false');

            if (QApplication::HasPermissionForThisLang('Administrator', null)) {
                $this->dtgUser->MetaAddColumn(QQN::NarroUser()->Email, sprintf('Name="%s"', t('Email')), 'Html="<?= $_CONTROL->ParentControl->dtgUser_EmailColumn_Render($_ITEM) ?>"', 'HtmlEntities=false');
            }

            if (QApplication::HasPermissionForThisLang('Can manage users', null)) {
                $this->dtgUser->AddColumn($colActions);
            }

            $this->dtgUser->SortColumnIndex = 0;

            $this->txtSearch = new QTextBox($this);

            $this->btnSearch = new QButton($this);
            $this->btnSearch->Text = t('Search');
            $this->btnSearch->PrimaryButton = true;

            if (QApplication::$UseAjax)
                $this->btnSearch->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'dtgUser_Bind'));
            else
                $this->btnSearch->AddAction(new QClickEvent(), new QServerControlAction($this, 'dtgUser_Bind'));

        }

        public function dtgUser_UsernameColumn_Render(NarroUser $objUser) {
            if ($objUser->UserId == NarroUser::ANONYMOUS_USER_ID)
                return t('Anonymous');
            else
                return NarroLink::UserProfile($objUser->UserId, $objUser->Username);
        }
        
        public function dtgUser_RealNameColumn_Render(NarroUser $objUser) {
            if ($objUser->UserId == NarroUser::ANONYMOUS_USER_ID)
                return t('Anonymous');
            else
                return NarroLink::UserProfile($objUser->UserId, $objUser->RealName);
        }

        public function dtgUser_EmailColumn_Render(NarroUser $objUser) {
            return $objUser->Email;
        }

        public function dtgUser_ActionsColumn_Render(NarroUser $objUser) {
            return NarroLink::UserRole($objUser->UserId, t('Roles'));
        }

        public function dtgUser_Bind() {
            if ($this->txtSearch->Text != '')
                $objSearchCondition = QQ::OrCondition(
                    QQ::Like(QQN::NarroUser()->RealName, sprintf('%%%s%%', $this->txtSearch->Text)),
                    QQ::Like(QQN::NarroUser()->Username, sprintf('%%%s%%', $this->txtSearch->Text)),
                    QQ::Like(QQN::NarroUser()->Email, sprintf('%%%s%%', $this->txtSearch->Text))
                );
            else
                $objSearchCondition = QQ::All();

            // Because we want to enable pagination AND sorting, we need to setup the $objClauses array to send to LoadAll()

            // Remember!  We need to first set the TotalItemCount, which will affect the calcuation of LimitClause below
            $this->dtgUser->TotalItemCount = NarroUser::QueryCount($objSearchCondition);

            // Setup the $objClauses Array
            $objClauses = array();

            // If a column is selected to be sorted, and if that column has a OrderByClause set on it, then let's add
            // the OrderByClause to the $objClauses array
            if ($objClause = $this->dtgUser->OrderByClause)
                array_push($objClauses, $objClause);

            // Add the LimitClause information, as well
            if ($objClause = $this->dtgUser->LimitClause)
                array_push($objClauses, $objClause);

            // Set the DataSource to be the array of all NarroUser objects, given the clauses above
            $this->dtgUser->DataSource = NarroUser::QueryArray($objSearchCondition, $objClauses);

            QApplication::ExecuteJavaScript('highlight_datagrid();');
        }

    }
?>
