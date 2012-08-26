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

    require_once (dirname(__FILE__) . '/../../configuration/configuration.qcubed.inc.php');
    require_once (dirname(__FILE__) . '/../../includes/narro/NarroUtils.class.php');
    require_once (dirname(__FILE__) . '/../../configuration/header.inc.php');
    
    function check_boolean($strSetting, $strInstructions, $blnCondition) {
        
        if ($blnCondition)
            printf('<div class="install_result"><img src="%s/approve.png" /></div>', __NARRO_IMAGE_ASSETS__);
        else
            printf('<div class="install_result"><img src="%s/delete.png" /></div>', __NARRO_IMAGE_ASSETS__);
        
        printf('<div class="install_setting">%s</div>', $strSetting);
        
        if ($blnCondition)
            printf('<div class="install_instructions">%s</div>', '');
        else
            printf('<div class="install_instructions">%s</div>', $strInstructions);
        
        return $blnCondition;
    }
    
    check_boolean(
    	'Data directory present and writable',
    	sprintf('Please create a directory "data" in %s and give it write permissions for everyone (chmod 777)', __NARRO_DATA__),
    	file_exists(__NARRO_DATA__)
	);

    foreach (array(__TMP_PATH__, __NARRO_DATA__, __DICTIONARY_PATH__, __IMPORT_PATH__, __RSS_PATH__, __FILE_FORM_STATE_HANDLER_PATH__, ERROR_LOG_PATH) as $strDirName) {
        if (!file_exists($strDirName)) {
            if (
                check_boolean(
            	    $strDirName . ' directory present and writable',
                    sprintf('Please create the directory %s and give it write permissions for everyone (chmod 777)', $strDirName),
                    @mkdir($strDirName)
                )
            )
                chmod($strDirName, 0777);
        }
    }

    $arrConData = unserialize(DB_CONNECTION_1);

    if (session_id())
        session_destroy();
    
    $blnResult = session_start();
    $blnResultRestore = false;
    if ($blnResult) {
        $_SESSION['test'] = 1;
        session_write_close();
        unset($_SESSION);
        $blnResultRestore = session_start();
    }

    check_boolean('a session can be started', sprintf('The session_start() function is returning false. Check the php.ini file to see if the session is set to start automatically or if %s is writable', session_save_path()), $blnResult);
    check_boolean('a session can be restored', sprintf('The session_start() function is returning false. Check the php.ini file to see if the session is set to start automatically or if %s is writable', session_save_path()), $blnResultRestore);
    check_boolean('a session can be restored correctly', sprintf('The session_start() function is returning true, but the session is empty. Check the php.ini file to see if the session is set to start automatically or if %s is writable', session_save_path()), isset($_SESSION['test']));
    check_boolean('the default session save path is writable', sprintf('%s is not writable, so sessions cannot be started. chmod 777 or chown nobody/apache should fix this', session_save_path()), is_writable(session_save_path()));
    
    session_destroy();

    $link = mysql_connect($arrConData['server'].(($arrConData['port'])?':' . $arrConData['port']:''), $arrConData['username'], $arrConData['password']);
    check_boolean('Database server connection', sprintf('Unable to connect to the database. Please check database settings in file "%s"', __CONFIGURATION__. '/configuration.narro.inc.php'), $link);
    check_boolean('Database selection', sprintf('Unable to select the database. Please check database settings in file "%s"', __CONFIGURATION__ . '/configuration.narro.inc.php'), mysql_select_db($arrConData['database'], $link));

    $arrExtension = array('mysql', 'mbstring', 'gd', 'zip', 'zlib', 'ftp', 'soap', 'pspell', 'mysqli');
    foreach($arrExtension as $strExtensionName) {
        check_boolean($strExtensionName . ' php extension loaded', sprintf('This version of Narro needs the %s php extension, please install php-%s or php5-%s', $strExtensionName, $strExtensionName, $strExtensionName), extension_loaded($strExtensionName));
    }
    
    check_boolean('mb_stripos present', 'This version of Narro needs mb_stripos, that\'s available only in php versions bigger than 5.2.0', function_exists('mb_stripos'));
    
    check_boolean('locale directory writable', sprintf('Please give write permissions for everyone (chmod 777) to the directory "%s"', __DOCROOT__ . __SUBDIRECTORY__ . '/locale/'), is_writable(__DOCROOT__ . __SUBDIRECTORY__ . '/locale/'));
    