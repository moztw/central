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

    if (file_exists(dirname(__FILE__) . '/configuration.narro.local.inc.php')) {
        require_once (dirname(__FILE__) . '/configuration.narro.local.inc.php');
    }
    else {

        define ('ADMIN_EMAIL_ADDRESS', 'petercpg@mail.moztw.org');
        define ('__PHP_CLI_PATH__', '/usr/bin/php');
        
        /**
         * Common setup for setting up Narro in a subdirectory narro under a docroot
         * e.g. docroot is /var/www/html, you put Narro in /var/www/html/narro and access it at http://localhost/narro
         */
        //define ('__HTTP_URL__', 'http' . (($_SERVER['HTTPS'])?'s':'') . '://' . $_SERVER['HTTP_HOST']);
        define ('__HTTP_URL__', 'http://' . $_SERVER['HTTP_HOST']);
	define ('__DOCROOT__', realpath(dirname(__FILE__) . '/../../'));
        define ('__VIRTUAL_DIRECTORY__', '');
        define ('__SUBDIRECTORY__', '/narro');
    
        /**
         * The database connection settings
         */
        define('DB_CONNECTION_1', serialize(array(
            'adapter' => 'MySqli5',
            'server' => 'localhost',
            'port' => null,
            'database' => 'narronew',
            'username' => 'root',
            'password' => '',
            'profiling' => false)));
    
        /**
         * this constant allows any user do export files or import up to this defined size
         * default is ~ 16MB
         */
        define ('__MAXIMUM_FILE_SIZE_TO_IMPORT__', 16000000);
        define ('__MAXIMUM_FILE_SIZE_TO_EXPORT__', 16000000);
        define ('__MAXIMUM_FILE_COUNT_TO_IMPORT__', 3000);
        define ('__MAXIMUM_FILE_COUNT_TO_EXPORT__', 3000);
        define ('__SOURCE_LANGUAGE_CODE__', 'en-US');
    
    
        /**
         * used for email sending from narro (notifications and password recovery)
         */
        define ('__FROM_EMAIL_ADDRESS__', 'root@localhost');
        define ('__FROM_EMAIL_NAME__', 'Narro');
    
        define ('__NARRO_INCLUDES__', __DOCROOT__ . __SUBDIRECTORY__ . '/includes');
        define ('__NARRO_DATA__', __DOCROOT__ . __SUBDIRECTORY__ . '/data');
        define ('__NARRO_IMAGE_ASSETS__', __VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__ . '/assets/images');
        define ('__NARRO_PHP_ASSETS__', __VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__ . '/assets/php');
        define ('__DICTIONARY_PATH__', __NARRO_DATA__ . '/dictionaries');
        define ('__TMP_PATH__', __NARRO_DATA__ . '/tmp');
        define ('__IMPORT_PATH__', __NARRO_DATA__ . '/import');
        define ('__RSS_PATH__', __NARRO_DATA__ . '/rss');
    
        set_include_path(
            __DOCROOT__ . __SUBDIRECTORY__ . PATH_SEPARATOR .
            __DOCROOT__ . __SUBDIRECTORY__ . '/includes' . PATH_SEPARATOR .
            __DOCROOT__ . __SUBDIRECTORY__ . '/includes' . '/qcubed_custom_controls' . PATH_SEPARATOR .
            __DOCROOT__ . __SUBDIRECTORY__ . '/includes' . '/narro/importer' . PATH_SEPARATOR .
            __DOCROOT__ . __SUBDIRECTORY__ . '/includes' . '/narro/search' . PATH_SEPARATOR .
            __DOCROOT__ . __SUBDIRECTORY__ . '/includes' . '/narro' . PATH_SEPARATOR .
            '/usr/share/php' . PATH_SEPARATOR .
            '/usr/share/pear' . PATH_SEPARATOR .
            get_include_path()
            );
    
        ini_set('mbstring.encoding_translation', true);
        ini_set('mbstring.internal_encoding', 'UTF-8');
        ini_set('error_log', __TMP_PATH__ . '/error.log');
        error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
    
        define ('SERVER_INSTANCE', 'prod');
        define ('NARRO_VERSION', '2.0');
    
        // Problems with form states? Try flipping these values
        define ('__COMPRESS_FORM_STATES__', true);
        define ('__ENCODE_FORM_STATES__', true);
    }
        
?>
