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

    class NarroUserProfileForm extends NarroForm {
        protected $pnlTab;
        protected $pnlUserSuggestions;
        protected $objUser;

        protected function Form_Create() {
            parent::Form_Create();

            $this->objUser = NarroUser::Load(QApplication::QueryString('u'));

            if (!$this->objUser instanceof NarroUser)
                QApplication::Redirect(NarroLink::UserList());

            $this->pnlBreadcrumb->setElements(NarroLink::ProjectList(t('Projects')), NarroLink::UserList('', t('Users')), $this->objUser->RealName);

            $this->pnlTab = new QTabs($this);

            $this->pnlUserSuggestions = new NarroUserSuggestionsPanel($this->objUser, $this->pnlTab);
            $arrHeaders[] = NarroLink::UserProfile($this->objUser->UserId, t('Profile'));
            $this->pnlTab->Selected = count($arrHeaders) - 1;


            if (QApplication::GetUserId() == $this->objUser->UserId || QApplication::HasPermissionForThisLang('Can manage users', null)) {
                new QPanel($this->pnlTab);
                $arrHeaders[] = NarroLink::UserPreferences($this->objUser->UserId, t('Preferences'));
            }

            new QPanel($this->pnlTab);
            $arrHeaders[] = NarroLink::UserRole($this->objUser->UserId, t('Roles'));

            if (QApplication::GetUserId() == $this->objUser->UserId || QApplication::HasPermissionForThisLang('Can manage users', null)) {
                new QPanel($this->pnlTab);
                $arrHeaders[] = NarroLink::UserEdit($this->objUser->UserId, t('Edit'));
            }
            
            $this->pnlTab->Headers = $arrHeaders;
        }
    }

    NarroUserProfileForm::Run('NarroUserProfileForm');
?>
