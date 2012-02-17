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
    echo
        sprintf(
            t('<i>Translating in: %s</i>'),
            ($_CONTROL->lstLanguage->ItemCount>1)?$_CONTROL->lstLanguage->Render(false):$_CONTROL->lstLanguage->GetItem(0)->Name
        ) . ' | ';

    if (NarroApp::GetUserId() != NarroUser::ANONYMOUS_USER_ID) {
        echo
            sprintf(
                t('<i>Logged in as <a href="%s" style="color:green;font-weight:bold">%s</a></i>'),
                NarroLink::UserProfile(NarroApp::GetUserId()),
                NarroApp::$User->Username
            ) . ' | '
            ;
    } else {
    ?>
        <a href="narro_register.php?l=<?php echo NarroApp::$Language->LanguageCode ?>"><?php echo t('Register') ?></a> |
        <a href="narro_login.php?l=<?php echo NarroApp::$Language->LanguageCode ?>"><?php echo t('Login') ?></a> |
    <?php
    }
    ?>
    <?php echo NarroLink::UserPreferences(NarroApp::GetUserId(), t('Preferences')) ?> |
    <?php echo NarroLink::ProjectList(t('Projects')) ?> |
    <a href="narro_language_list.php?l=<?php echo NarroApp::$Language->LanguageCode ?>" title="<?php echo t('Languages') ?>"><?php echo t('Languages') ?></a> |
    <a href="narro_user_list.php?l=<?php echo NarroApp::$Language->LanguageCode ?>" title="<?php echo t('Users') ?>"><?php echo t('Users') ?></a>
    <?php
    if (NarroApp::HasPermission('Can manage users')) {
    ?>
    | <a href="narro_role_list.php?l=<?php echo NarroApp::$Language->LanguageCode ?>" title="<?php echo t('Roles') ?>"><?php echo t('Roles') ?></a>
    <?php
    }
    ?>
    <?php
    if (NarroApp::GetUserId() > 0) {
    ?>
        | <a href="narro_logout.php?l=<?php echo NarroApp::$Language->LanguageCode ?>"><?php echo t('Logout') ?></a>
    <?php
    }
    ?>
