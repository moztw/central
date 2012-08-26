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

    class NarroLanguageListForm extends NarroForm {
        protected $pnlTab;
        protected $pnlLanguageList;

        protected function Form_Create() {
            parent::Form_Create();

            $this->pnlTab = new QTabs($this);
            
            $pnlDummy = new QPanel($this->pnlTab);
            $pnlDummy = new QPanel($this->pnlTab);
            $pnlDummy = new QPanel($this->pnlTab);
            
            $arrHeaders = array(
                NarroLink::ProjectList(t('Projects')),
                NarroLink::Translate(0, '', NarroTranslatePanel::SHOW_ALL, '', 0, 0, 10, 0, 0, t('Translate')),
                NarroLink::Translate(0, '', NarroTranslatePanel::SHOW_NOT_APPROVED, '', 0, 0, 10, 0, 0, t('Review'))
            
            );
            
            /**
             * Do not show the langauge tab if only two languages are active (source and target
             * Unless the user is an administrator and might want to set another one active
             */
            if (NarroLanguage::CountAllActive() > 2 || QApplication::HasPermission('Administrator')) {
                $this->pnlLanguageList = new QTabs($this->pnlTab);
                new NarroLanguageListPanel($this->pnlLanguageList);
                $arrLangHeaders[] = t('List');
                if (QApplication::HasPermissionForThisLang('Can add language')) {
                    $pnlDummy = new QPanel($this->pnlLanguageList);
                    $arrLangHeaders[] = NarroLink::LanguageEdit(null, t('Add'));
                }
                $this->pnlLanguageList->Headers = $arrLangHeaders;
                
                $arrHeaders[] = t('Languages');
                $this->pnlTab->Selected = count($arrHeaders) - 1;
            }
            
            $pnlDummy = new QPanel($this->pnlTab);
            $arrHeaders[] = NarroLink::UserList('', t('Users'));
            $pnlDummy = new QPanel($this->pnlTab);
            $arrHeaders[] = NarroLink::RoleList(0, '', t('Roles'));
            
            if (QApplication::HasPermissionForThisLang('Administrator')) {
                $pnlDummy = new QPanel($this->pnlTab);
                $arrHeaders[] = NarroLink::Log('', t('Application Log'));
            }
            
            $this->pnlTab->Headers = $arrHeaders;
        }
    }

    NarroLanguageListForm::Run('NarroLanguageListForm');
?>
