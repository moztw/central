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

    if (!defined('__PREPEND_INCLUDED__')) {
        // Ensure prepend.inc is only executed once
        define('__PREPEND_INCLUDED__', 1);

        require(dirname(__FILE__) . '/configuration.inc.php');

        if (!file_exists(__DOCROOT__ . __SUBDIRECTORY__ . '/data'))
            die(sprintf('Please create a directory "data" in %s and give it write permissions for everyone (chmod 777)', __DOCROOT__ . __SUBDIRECTORY__));

        foreach (array('cache', 'cache/i18n', 'cache/zend', 'dictionaries', 'import', 'tmp', 'tmp/session') as $strDirName) {
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
            print(sprintf('Unable to connect to the dabase. Please check database settings in file "%s"', dirname(__FILE__) . '/db.inc.php') . '<br />');
            print(sprintf('Error: "%s"', mysql_error()));
            die();
        }

        if (!mysql_select_db($arrConData['database'], $link)) {
            print(sprintf('Unable to connect to the dabase. Please check database settings in file "%s"', dirname(__FILE__) . '/db.inc.php') . '<br />');
            print(sprintf('Error: "%s"', mysql_error()));
            die();
        }



        require(__QCODO_CORE__ . '/qcodo.inc.php');
        require_once(dirname(__FILE__) . '/application.inc.php');
    }
?>
