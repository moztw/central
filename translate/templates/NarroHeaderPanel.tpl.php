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
            $_CONTROL->lstLanguage->Render(false)
        ) . ' | ';

    if (QApplication::$objUser->UserId != NarroUser::ANONYMOUS_USER_ID) {
        echo
            sprintf(
                t('<i>Logged in as <a href="%s" style="color:green;font-weight:bold">%s</a></i>'),
                NarroLink::UserProfile(QApplication::$objUser->UserId),
                QApplication::$objUser->Username
            ) . ' | '
            ;
    } else {
    ?>
        <a href="narro_register.php?l=<?php echo QApplication::$Language->LanguageCode ?>"><?php echo t('Register') ?></a> |
        <a href="narro_login.php?l=<?php echo QApplication::$Language->LanguageCode ?>"><?php echo t('Login') ?></a> |
    <?php
    }
    ?>
    <?php echo NarroLink::UserPreferences(QApplication::$objUser->UserId, t('Preferences')) ?> |
    <?php echo NarroLink::ProjectList(t('Project list')) ?> |
    <a href="narro_language_list.php?l=<?php echo QApplication::$Language->LanguageCode ?>" title="<?php echo t('Language list') ?>"><?php echo t('Languages') ?></a>
    <?php
    if (QApplication::$objUser->hasPermission('Can manage users')) {
    ?>
        | <a href="narro_user_list.php?l=<?php echo QApplication::$Language->LanguageCode ?>" title="<?php echo t('Manage users') ?>"><?php echo t('Users') ?></a>
    <?php
    }
    ?>
    <?php
    if (QApplication::$objUser->UserId > 0) {
    ?>
        | <a href="narro_logout.php?l=<?php echo QApplication::$Language->LanguageCode ?>"><?php echo t('Logout') ?></a>
    <?php
    }
    ?>
