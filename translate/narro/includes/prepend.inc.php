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


        ///////////////////////////////////
        // Define Server-specific constants
        ///////////////////////////////////
        /*
        * This assumes that the configuration include file is in the same directory
        * as this prepend include file.  For security reasons, you can feel free
        * to move the configuration file anywhere you want.  But be sure to provide
        * a relative or absolute path to the file.
        */
        require(dirname(__FILE__) . '/configuration.inc.php');


        //////////////////////////////
        // Include the Qcodo Framework
        //////////////////////////////
        require(__QCODO_CORE__ . '/qcodo.inc.php');


        ///////////////////////////////
        // Define the Application Class
        ///////////////////////////////
        /**
        * The Application class is an abstract class that statically provides
        * information and global utilities for the entire web application.
        *
        * Custom constants for this webapp, as well as global variables and global
        * methods should be declared in this abstract class (declared statically).
        *
        * This Application class should extend from the ApplicationBase class in
        * the framework.
        */
        abstract class QApplication extends QApplicationBase {
            /**
            * This is called by the PHP5 Autoloader.  This method overrides the
            * one in ApplicationBase.
            *
            * @return void
            */
            public static function Autoload($strClassName) {
                // First use the Qcodo Autoloader
                parent::Autoload($strClassName);

                // TODO: Run any custom autoloading functionality (if any) here...
            }

            ////////////////////////////
            // QApplication Customizations (e.g. EncodingType, etc.)
            ////////////////////////////
            // public static $EncodingType = 'ISO-8859-1';

            ////////////////////////////
            // Additional Static Methods
            ////////////////////////////
            // TODO: Define any other custom global WebApplication functions (if any) here...

            public static function Translate($strText, $strPlural = null, $intCnt = null) {
                return NarroApp::Translate($strText, $strPlural, $intCnt);
            }
        }


        //////////////////////////
        // Custom Global Functions
        //////////////////////////
        // TODO: Define any custom global functions (if any) here...


        ////////////////
        // Include Files
        ////////////////
        // TODO: Include any other include files (if any) here...

        require_once(dirname(__FILE__) . '/application.inc.php');


        ///////////////////////
        // Setup Error Handling
        ///////////////////////
        /*
        * Set Error/Exception Handling to the default
        * Qcodo HandleError and HandlException functions
        * (Only in non CLI mode)
        *
        * Feel free to change, if needed, to your own
        * custom error handling script(s).
        */
        if (array_key_exists('SERVER_PROTOCOL', $_SERVER)) {
            set_error_handler('QcodoHandleError');
            set_exception_handler('QcodoHandleException');
        }
    }
?>
