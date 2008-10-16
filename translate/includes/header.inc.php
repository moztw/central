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
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=<?php _p(QApplication::$EncodingType); ?>" />
        <?php if (isset($strPageTitle)) { ?>
            <title><?php _p($strPageTitle); ?></title>
        <?php } ?>
        <link rel="stylesheet" type="text/css" href="<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/style.css" />
        <link rel="stylesheet" type="text/css" href="<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/font-<?php echo QApplication::$objUser->getPreferenceValueByName('Font size') ?>.css" />
        <?php if (QApplication::QueryString('p')) { ?>
            <link rel="alternate" type="application/rss+xml" title="<?php echo sprintf(t('Context information changes in %s for the project %s'), QApplication::$objUser->Language->LanguageName, $this->objNarroProject->ProjectName) ?>" href="rss.php?t=context_info_changes&l=<?php echo QApplication::$objUser->Language->LanguageId ?>&p=<?php echo $this->objNarroProject->ProjectId ?>" />
            <link rel="alternate" type="application/rss+xml" title="<?php echo sprintf(t('New texts to translate for the project %s'), $this->objNarroProject->ProjectName) ?>" href="rss.php?t=text&l=<?php echo QApplication::$objUser->Language->LanguageId ?>&p=<?php echo $this->objNarroProject->ProjectId ?>" />
        <?php } else { ?>
            <link rel="alternate" type="application/rss+xml" title="<?php echo sprintf(t('Context information changes in %s'), QApplication::$objUser->Language->LanguageName) ?>" href="rss.php?t=context_info_changes&l=<?php echo QApplication::$objUser->Language->LanguageId ?>" />
            <link rel="alternate" type="application/rss+xml" title="<?php echo t('New texts to translate') ?>" href="rss.php?t=text&l=<?php echo QApplication::$objUser->Language->LanguageId ?>" />
        <?php } ?>
        <link rel="alternate" type="application/rss+xml" title="<?php echo sprintf(t('New translation suggestions in %s'), QApplication::$objUser->Language->LanguageName) ?>" href="rss.php?t=suggestion&l=<?php echo QApplication::$objUser->Language->LanguageId ?>" />
        <link type="image/x-icon" href="<?php echo __HTTP_URL__ . __VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__ ?>/narro.ico" rel="shortcut icon"/>
        <link type="image/x-icon" href="<?php echo __HTTP_URL__ . __VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__ ?>/narro.ico" rel="icon"/>
        <script type="text/javascript" src="<?php echo __JS_ASSETS__ ?>/table_row_highlight.js"></script>
    </head>
    <body>
        <div id="header">
            <?php
                echo
                    sprintf(
                        t('<i>Translating in: %s</i>'),
                        QApplication::$objUser->Language->LanguageName
                    ) . ' | ';
            ?>
            <?php if (QApplication::$objUser->UserId != NarroUser::ANONYMOUS_USER_ID) {
                echo
                    sprintf(
                        t('<i>Logged in as <a href="%s" style="color:green;font-weight:bold">%s</a></i>'),
                        'narro_user_profile.php?u=' . QApplication::$objUser->UserId,
                        QApplication::$objUser->Username
                    ) . ' | '
                    ;
            } else { ?>
                <a href="narro_register.php"><?php echo t('Register') ?></a> |
                <a href="narro_login.php"><?php echo t('Login') ?></a> |
            <?php } ?>
            <a href="narro_user_preferences.php"><?php echo t('Preferences') ?></a> |
            <a href="narro_project_list.php" title="<?php echo t('Project list') ?>"><?php echo t('Projects') ?></a> |
            <a href="narro_language_list.php" title="<?php echo t('Language list') ?>"><?php echo t('Languages') ?></a>
            <?php if (QApplication::$objUser->hasPermission('Can manage users')) { ?>
            | <a href="narro_user_list.php" title="<?php echo t('Manage users') ?>"><?php echo t('Users') ?></a>
            <?php } ?>
            <?php if (QApplication::$objUser->UserId > 0) { ?>
                | <a href="narro_logout.php"><?php echo t('Logout') ?></a>
            <?php } ?>

        </div>
        <div id="main">
