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


    /**
     * Paths that may need changing
     */
    define ('__DOCROOT__', realpath(dirname(__FILE__) . '/../..'));
    define ('__VIRTUAL_DIRECTORY__', '');
    define ('__HTTP_URL__', 'http://translate.moztw.org');
    define ('__SUBDIRECTORY__', '/narro');
    define ('__PHP_CLI_PATH__', '/usr/bin/php');
    define ('ADMIN_EMAIL_ADDRESS', 'petercpg@mail.moztw.org');


    /**
     * Database configuration
     */
    define('DB_CONNECTION_1', serialize(array(
        'adapter' => 'MySql',
        'encoding' => 'UTF8',
        'server' => 'localhost',
        'port' => null,
        'database' => 'narro',
        'username' => 'root',
        'password' => '',
        'profiling' => false)));

    define('SERVER_INSTANCE', 'dev');

    switch (SERVER_INSTANCE) {
        case 'dev':
        case 'prod':
    }

    define ('NARRO_VERSION', '0.9.4');
    define ('ALLOW_REMOTE_ADMIN', false);
    define ('__URL_REWRITE__', 'none');

    define ('__DEVTOOLS_CLI__', __DOCROOT__ . __SUBDIRECTORY__ . '/_devtools_cli');
    define ('__INCLUDES__', __DOCROOT__ .  __SUBDIRECTORY__ . '/includes');
    define ('__QCODO__', __INCLUDES__ . '/qcodo');
    define ('__QCODO_CORE__', __INCLUDES__ . '/qcodo/_core');
    define ('__DATA_CLASSES__', __INCLUDES__ . '/data_classes');
    define ('__DATAGEN_CLASSES__', __INCLUDES__ . '/data_classes/generated');
    define ('__FORMBASE_CLASSES__', __DOCROOT__ .  __SUBDIRECTORY__ . '/data/qcodo_generated/formbase_classes_generated');
    define ('__PANELBASE_CLASSES__', __DOCROOT__ .  __SUBDIRECTORY__ . '/data/qcodo_generated/panelbase_classes_generated');
    define ('__DEVTOOLS__', __SUBDIRECTORY__ . '/_devtools');
    define ('__FORM_DRAFTS__', __SUBDIRECTORY__ . '/data/qcodo_generated/form_drafts');
    define ('__PANEL_DRAFTS__', __SUBDIRECTORY__ . '/data/qcodo_generated/panel_drafts');

    // We don't want "Examples", and we don't want to download them during qcodo_update
    define ('__EXAMPLES__', null);

    define ('__JS_ASSETS__', __SUBDIRECTORY__ . '/assets/js');
    define ('__CSS_ASSETS__', __SUBDIRECTORY__ . '/assets/css');
    define ('__IMAGE_ASSETS__', __SUBDIRECTORY__ . '/assets/images');
    define ('__PHP_ASSETS__', __SUBDIRECTORY__ . '/assets/php');

    if ((function_exists('date_default_timezone_set')) && (!ini_get('date.timezone')))
        date_default_timezone_set('America/Los_Angeles');

    define('ERROR_PAGE_PATH', __PHP_ASSETS__ . '/_core/error_page.php');

    define ('__DICTIONARY_PATH__', __DOCROOT__ . __SUBDIRECTORY__ . '/data/dictionaries');
    define ('__TMP_PATH__', __DOCROOT__ . __SUBDIRECTORY__ . '/data/tmp');
    define ('__IMPORT_PATH__', '/data/import');
    define ('__RSS_PATH__', __DOCROOT__ . __SUBDIRECTORY__ . '/data/rss');

    set_include_path(
        get_include_path() . PATH_SEPARATOR .
        dirname(__FILE__) . __SUBDIRECTORY__ . PATH_SEPARATOR .
        __INCLUDES__ . PATH_SEPARATOR .
        __INCLUDES__ . '/narro/importer' . PATH_SEPARATOR .
        __INCLUDES__ . '/narro' . PATH_SEPARATOR .
        __INCLUDES__ . '/PEAR'
        );

    ini_set('mbstring.encoding_translation', true);
    ini_set('mbstring.internal_encoding', 'UTF-8');
    ini_set('memory_limit', "512M");

    set_time_limit(0);

    if (!file_exists(__DOCROOT__ . __SUBDIRECTORY__ . '/data'))
        die(sprintf('Please create a directory "data" in %s and give it write permissions for everyone (chmod 777)', __DOCROOT__ . __SUBDIRECTORY__));

    foreach (array('cache', 'cache/i18n', 'cache/zend', 'dictionaries', 'import', 'tmp', 'tmp/session', 'tmp/qform_state') as $strDirName) {
        if (!file_exists(__DOCROOT__ . __SUBDIRECTORY__ . '/data/' . $strDirName)) {
            if (!mkdir(__DOCROOT__ . __SUBDIRECTORY__ . '/data/' . $strDirName))
                die(sprintf('Could not create a directory. Please create the directory "%s" and give it write permissions for everyone (chmod 777)', __DOCROOT__ . __SUBDIRECTORY__ . '/data/' . $strDirName));
            else
                chmod(__DOCROOT__ . __SUBDIRECTORY__ . '/data/' . $strDirName, 0777);
        }
    }

    $arrConData = unserialize(DB_CONNECTION_1);

    $link = mysql_connect($arrConData['server'].(($arrConData['port'])?':' . $arrConData['port']:''), $arrConData['username'], $arrConData['password']);
    if (!$link) {
        print(sprintf('Unable to connect to the dabase. Please check database settings in file "%s"', dirname(__FILE__) . '/configuration.inc.php') . '<br />');
        print(sprintf('Error: "%s"', mysql_error()));
        die();
    }

    if (!mysql_select_db($arrConData['database'], $link)) {
        print(sprintf('Unable to connect to the dabase. Please check database settings in file "%s"', dirname(__FILE__) . '/configuration.inc.php') . '<br />');
        print(sprintf('Error: "%s"', mysql_error()));
        die();
    }
?>
