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

    class NarroRoleListForm extends NarroForm {
        protected $pnlTab;
        protected $pnlRoleList;

        protected function Form_Create() {
            parent::Form_Create();

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
            
            $this->pnlRoleList = new QTabs($this->pnlTab);
            new NarroRoleListPanel($this->pnlRoleList);
            $arrRoleHeaders[] = t('List');
            if (QApplication::HasPermissionForThisLang('Can add role')) {
                $pnlDummy = new QPanel($this->pnlRoleList);
                $arrRoleHeaders[] = NarroLink::RoleEdit(null, t('Add'));
            }
            $this->pnlRoleList->Headers = $arrRoleHeaders;
            $arrHeaders[] = t('Roles');
            $this->pnlTab->Selected = count($arrHeaders) - 1;
            
            if (QApplication::HasPermissionForThisLang('Administrator')) {
                $pnlDummy = new QPanel($this->pnlTab);
                $arrHeaders[] = NarroLink::Log('', t('Application Log'));
            }
            
            $this->pnlTab->Headers = $arrHeaders;
        }
    }

    NarroRoleListForm::Run('NarroRoleListForm');
?>
