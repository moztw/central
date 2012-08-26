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

 if (class_exists('QApplication') && QApplication::QueryString('p')) {
     $objProject = NarroProject::Load(QApplication::QueryString('p'));
 }
 
 if (isset($_SERVER['HTTPS'])) {
     header('Strict-Transport-Security: max-age=43200; includeSubDomains');
 }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <?php if (isset($strPageTitle)) { ?>
            <title><?php echo $strPageTitle; ?></title>
        <?php } ?>
        <link rel="stylesheet" type="text/css" href="<?php echo __HTTP_URL__ . __VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__; ?>/assets/css/style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo __HTTP_URL__ . __VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__; ?>/assets/css/tabs.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo __CSS_ASSETS__ . '/' . __JQUERY_CSS__; ?>" />
        <?php if (class_exists('QApplication')) { ?>
            <link rel="stylesheet" type="text/css" href="<?php echo __HTTP_URL__ . __VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__; ?>/assets/css/font-<?php if (QApplication::$User instanceof NarroUser && QApplication::$User->UserId != NarroUser::ANONYMOUS_USER_ID) echo QApplication::$User->GetPreferenceValueByName('Font size'); else echo 'medium' ?>.css" />

            <?php if (QApplication::QueryString('p') && isset($this) && $objProject instanceof NarroProject) { ?>
                <link rel="alternate" type="application/rss+xml" title="<?php echo sprintf(t('Context changes for %s'), $objProject->ProjectName) ?>" href="rss.php?t=context_info_changes&l=<?php echo QApplication::GetLanguageId() ?>&p=<?php echo $objProject->ProjectId ?>" />
                <link rel="alternate" type="application/rss+xml" title="<?php echo sprintf(t('Texts to translate for %s'), $objProject->ProjectName) ?>" href="rss.php?t=text&l=<?php echo QApplication::GetLanguageId() ?>&p=<?php echo $objProject->ProjectId ?>" />
                <link rel="alternate" type="application/rss+xml" title="<?php echo sprintf(t('Comments on texts from %s'), $objProject->ProjectName) ?>" href="rss.php?t=textcomment&l=<?php echo QApplication::GetLanguageId() ?>&p=<?php echo $objProject->ProjectId ?>" />
                <link rel="alternate" type="application/rss+xml" title="<?php echo sprintf(t('Translations for %s'), $objProject->ProjectName) ?>" href="rss.php?t=suggestion&l=<?php echo QApplication::GetLanguageId() ?>&p=<?php echo $objProject->ProjectId ?>" />
            <?php } ?>
            <?php if (QApplication::$User instanceof NarroUser) { ?>
            <link rel="alternate" type="application/rss+xml" title="<?php echo t('Context changes for all projects') ?>" href="rss.php?t=context_info_changes&l=<?php echo QApplication::GetLanguageId() ?>" />
            <link rel="alternate" type="application/rss+xml" title="<?php echo t('Texts to translate for all projects') ?>" href="rss.php?t=text&l=<?php echo QApplication::GetLanguageId() ?>" />
            <link rel="alternate" type="application/rss+xml" title="<?php echo t('Comments on texts from all projects') ?>" href="rss.php?t=textcomment&l=<?php echo QApplication::GetLanguageId() ?>" />
            <link rel="alternate" type="application/rss+xml" title="<?php echo t('Translations for all projects') ?>" href="rss.php?t=suggestion&l=<?php echo QApplication::GetLanguageId() ?>" />
            <?php } ?>
        <?php } ?>
        <link type="image/x-icon" href="<?php echo __HTTP_URL__ . __VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__ ?>/assets/images/narro.ico" rel="shortcut icon"/>
        <link type="image/x-icon" href="<?php echo __HTTP_URL__ . __VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__ ?>/assets/images/narro.ico" rel="icon"/>
        <script type="text/javascript" src="<?php echo __VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__?>/assets/js/table_row_highlight.js"></script>
        <script type="text/javascript" src="<?php echo __JS_ASSETS__ . '/' . __JQUERY_BASE__?>"></script>
        <script type="text/javascript" src="<?php echo  __JS_ASSETS__ . '/' . __JQUERY_EFFECTS__?>"></script>
        <script type="text/javascript" src="<?php echo  __JS_ASSETS__ . '/qcubed.js'?>"></script>
        <script type="text/javascript" src="<?php echo  __JS_ASSETS__ . '/control.js'?>"></script>
        <script type="text/javascript" src="<?php echo  __JS_ASSETS__ . '/date_time_picker.js'?>"></script>
        <script type="text/javascript" src="<?php echo  __JS_ASSETS__ . '/treenav.js'?>"></script>
    </head>
    <body>
        <?php if (SERVER_INSTANCE == 'dev') {
            $GLOBALS['arrQueries'][0] = array('Query', 'Time');
            $GLOBALS['arrCacheQueries'][0] = array('Cache id', 'Status');
        ?>
            <div style="background-color:red;color:white;font-weight:bold;padding:10px;text-align: center;display:block">THIS IS A DEVELOPMENT VERSION MEANT FOR TESTING ONLY ! PLEASE DON'T WASTE YOUR TIME TRANSLATING !</div>
        <?php } ?>
        <div id="main">
