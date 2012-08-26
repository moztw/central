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

    $this->objDefaultWaitIcon->Render();

    if (QApplication::GetUserId() == NarroUser::ANONYMOUS_USER_ID) {
        echo
            sprintf(
                t('Translating in %s'),
                ($_CONTROL->lstLanguage->ItemCount>1)?$_CONTROL->lstLanguage->Render(false):$_CONTROL->lstLanguage->GetItem(0)->Name
            ) .
            sprintf(
                ', <a href="%s">' . t('sign in') . '</a>',
                'login.php?l=' . QApplication::$TargetLanguage->LanguageCode
            );

    } else {
        echo
            sprintf(
                t('Translating in %s as %s'),
                (($_CONTROL->lstLanguage->ItemCount>1)?$_CONTROL->lstLanguage->Render(false):$_CONTROL->lstLanguage->GetItem(0)->Name),
                sprintf(' <a title="%s" href="%s"><b>%s</b></a> ',
                    t('Profile'),
                    NarroLink::UserProfile(QApplication::$User->UserId),
                    ((QApplication::$User->RealName)?QApplication::$User->RealName:QApplication::$User->RealName)
                ) .
                sprintf(
                	'<a title="%s" href="%s" style="vertical-align:middle"><img src="%s/settings.png" /></a>',
                	t('Preferences'),
                    NarroLink::UserPreferences(QApplication::GetUserId()),
                    __NARRO_IMAGE_ASSETS__
                ) . ' ' .
                $_CONTROL->btnLogout->Render(false)
            );
    }
?>