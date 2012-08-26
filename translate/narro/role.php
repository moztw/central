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
    require_once(dirname(__FILE__) . '/configuration/prepend.inc.php');

    class NarroRoleEditForm extends NarroForm {
        protected $pnlTab;
        protected $pnlRoleTab;
        public $pnlRoleEdit;

        protected function Form_Create() {
            parent::Form_Create();

            $this->pnlTab = new QTabPanel($this);
            $this->pnlTab->UseAjax = false;

            $this->pnlRoleTab = new QTabPanel($this->pnlTab);

            $this->pnlRoleEdit = new NarroRoleEditPanel($this->pnlRoleTab, NarroRole::Load(QApplication::QueryString('rid')));

            $this->pnlRoleTab->addTab(new QPanel($this->pnlRoleTab), t('List'), NarroLink::RoleList());
            $this->pnlRoleTab->addTab($this->pnlRoleEdit, (QApplication::QueryString('lid')?t('Edit'):t('Add')));

            $this->pnlTab->addTab(new QPanel($this->pnlTab), t('Projects'), NarroLink::ProjectList());
            $this->pnlTab->addTab(new QPanel($this->pnlTab), t('Translate'), NarroLink::Translate(0, '', NarroTranslatePanel::SHOW_ALL, '', 0, 0, 10, 0, 0));
            $this->pnlTab->addTab(new QPanel($this->pnlTab), t('Languages'), NarroLink::LanguageList());
            $this->pnlTab->addTab(new QPanel($this->pnlTab), t('Users'), NarroLink::UserList());
            $this->pnlTab->addTab($this->pnlRoleTab, t('Roles'));

            $this->pnlTab->SelectedTab = 4;
            $this->pnlRoleTab->SelectedTab = 1;
            
            $this->pnlTab = new QTabs($this);
            
            $pnlDummy = new QPanel($this->pnlTab);
            $arrHeaders[] = NarroLink::ProjectList(t('Projects'));
            
            $pnlDummy = new QPanel($this->pnlTab);
            $arrHeaders[] = NarroLink::Translate(0, '', NarroTranslatePanel::SHOW_NOT_TRANSLATED, '', 0, 0, 10, 0, 0, t('Translate'));
            
            $pnlDummy = new QPanel($this->pnlTab);
            $arrHeaders[] = NarroLink::Review(0, '', NarroTranslatePanel::SHOW_NOT_APPROVED, '', 0, 0, 10, 0, 0, t('Translate'));
            
            
            if (NarroLanguage::CountAllActive() > 2 || QApplication::HasPermission('Administrator')) {
                $pnlDummy = new QPanel($this->pnlTab);
                $arrHeaders[] = NarroLink::LanguageList(t('Languages'));
            }
            
            $pnlDummy = new QPanel($this->pnlTab);
            $arrHeaders[] = NarroLink::UserList('', t('Users'));
            
            $this->pnlRoleTab = new QTabs($this->pnlTab);
            new QPanel($this->pnlRoleTab);
            $arrRoleHeaders[] = NarroLink::RoleList(0, '', t('List'));
            if (QApplication::HasPermissionForThisLang('Can add role')) {
                $pnlDummy = new NarroRoleEditPanel($this->pnlRoleTab, NarroRole::Load(QApplication::QueryString('rid')));
                $arrRoleHeaders[] = NarroLink::RoleEdit(null, t('Add'));
                $this->pnlRoleTab->Selected = count($arrRoleHeaders) - 1;
            }
            $this->pnlRoleTab->Headers = $arrRoleHeaders;
            $arrHeaders[] = t('Roles');
            $this->pnlTab->Selected = count($arrHeaders) - 1;
            
            if (QApplication::HasPermissionForThisLang('Administrator')) {
                $pnlDummy = new QPanel($this->pnlTab);
                $arrHeaders[] = NarroLink::Log('', t('Application Log'));
            }
            
            $this->pnlTab->Headers = $arrHeaders;
        }
    }

    NarroRoleEditForm::Run('NarroRoleEditForm');
?>