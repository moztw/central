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

    class QApplication extends QApplicationBase {
        /**
         * @var boolean
         */
        public static $UseAjax = true;
        /**
         * @var NarroUser
         */
        public static $User;
        /**
         * @var NarroPluginHandler
         */
        public static $PluginHandler;
        public static $Session;
        /**
         * @var NarroLanguage
         */
        public static $TargetLanguage;
        /**
         * @var NarroLanguage
         */
        public static $SourceLanguage;

        /**
         * An array of Database objects, as initialized by QApplication::InitializeDatabaseConnections()
         *
         * @var DatabaseBase[] QMySqli5Database
         */
        public static $Database;

        ////////////////////////////
        // Additional Static Methods
        ////////////////////////////

        public static function Autoload($strClassName) {
            if (!parent::Autoload($strClassName)) {
                if (file_exists($strFilePath = sprintf('%s/narro/%s.class.php', __NARRO_INCLUDES__, $strClassName)))
                    require_once($strFilePath);
                elseif (file_exists($strFilePath = sprintf('%s/database/%s.class.php', __QCUBED_CORE__, $strClassName)))
                    require_once($strFilePath);
                elseif (file_exists($strFilePath = sprintf('%s/narro/importer/%s.class.php', __NARRO_INCLUDES__, $strClassName)))
                    require_once($strFilePath);
                elseif (file_exists($strFilePath = sprintf('%s/narro/panel/%s.class.php', __NARRO_INCLUDES__, $strClassName)))
                    require_once($strFilePath);
                elseif (file_exists($strFilePath = sprintf('%s/narro/sources/%s.class.php', __NARRO_INCLUDES__, $strClassName)))
                    require_once($strFilePath);
                elseif (file_exists($strFilePath = sprintf('%s/narro/search/%s.class.php', __NARRO_INCLUDES__, $strClassName)))
                    require_once($strFilePath);
                elseif (file_exists($strFilePath = sprintf('%s/model/%s.class.php', __NARRO_INCLUDES__, $strClassName)))
                    require_once($strFilePath);
                elseif (file_exists($strFilePath = sprintf('%s/qcubed_custom_controls/%s.class.php', __NARRO_INCLUDES__, $strClassName)))
                    require_once($strFilePath);
                elseif (file_exists($strFilePath = sprintf('%s/%s.php', __NARRO_INCLUDES__, str_replace('_', '/', $strClassName))))
                    require_once($strFilePath);
                else
                    throw new Exception(sprintf('Cannot find the file that contains the class "%s"', $strClassName));
            }

        }

        public static function RegisterFormat($strName, $strPluginName) {
            self::$arrFileFormats[$strName] = $strPluginName;
        }

        public static function GetUserId() {
            if (self::$User instanceof NarroUser)
                return self::$User->UserId;
        }

        public static function GetLanguageId() {
            if (self::$TargetLanguage instanceof NarroLanguage)
                return self::$TargetLanguage->LanguageId;
        }

        public static function HasPermissionForThisLang($strPermissionName, $intProjectId = null) {
            if (self::$User instanceof NarroUser)
                return self::$User->hasPermission($strPermissionName, $intProjectId, self::GetLanguageId());
            else
                return false;
        }

        public static function HasPermission($strPermissionName, $intProjectId = null, $intLanguageId = null) {
            if (self::$User instanceof NarroUser)
                return self::$User->hasPermission($strPermissionName, $intProjectId, $intLanguageId);
            else
                return false;
        }

        public static function GetBrowserLanguage() {

            if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
                if (strstr($_SERVER['HTTP_ACCEPT_LANGUAGE'], ';')) {
                    $arrLangGroups = explode(';', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
                    foreach($arrLangGroups as $strLangGroup) {
                        if (strstr($strLangGroup, ',')) {
                            $arrLangCodes = explode(',', $strLangGroup);
                            foreach($arrLangCodes as $strLangCode) {
                                $objLanguage = NarroLanguage::QuerySingle(QQ::AndCondition(QQ::Equal(QQN::NarroLanguage()->LanguageCode, $strLangCode), QQ::Equal(QQN::NarroLanguage()->Active, 1)));
                                if ($objLanguage instanceof NarroLanguage) {
                                    return $objLanguage;
                                }
                            }
                        }
                        else {
                            $objLanguage = NarroLanguage::QuerySingle(QQ::AndCondition(QQ::Equal(QQN::NarroLanguage()->LanguageCode, $strLangGroup), QQ::Equal(QQN::NarroLanguage()->Active, 1)));
                            if ($objLanguage instanceof NarroLanguage) {
                                return $objLanguage;
                            }
                        }
                    }
                }
            }
            return false;
        }

        public static function InitializeSession() {
            self::$Session = new NarroSession();
        }

        public static function InitializeLanguage() {
            global $argv;

            if (strstr($_SERVER['REQUEST_URI'], '_devtools')) return false;
            if (strstr($_SERVER['REQUEST_URI'], 'image.php')) return false;
            if (strstr($_SERVER['REQUEST_URI'], 'profile.php')) return false;

            QApplication::$SourceLanguage = NarroLanguage::LoadByLanguageCode(__SOURCE_LANGUAGE_CODE__);

            // language passed through the l parameter
            if (@$_REQUEST['l'])
                QApplication::$TargetLanguage = NarroLanguage::LoadByLanguageCode(@$_REQUEST['l']);
            // language passed through cli parameter
            elseif (isset($argv) && $strLanguage = $argv[array_search('--translation-lang', $argv)+1])
                QApplication::$TargetLanguage = NarroLanguage::LoadByLanguageCode($strLanguage);
            // language taken from user preferences
            else {
                if (QApplication::$User->UserId != NarroUser::ANONYMOUS_USER_ID) {
                    $objGuessedLanguage = NarroLanguage::LoadByLanguageCode(QApplication::$User->GetPreferenceValueByName('Language'));
                    if (!$objGuessedLanguage instanceof NarroLanguage || !$objGuessedLanguage->Active) {
                        $objGuessedLanguage = null;
                    }
                }
                
                if (!$objGuessedLanguage) {
                    $objGuessedLanguage = QApplication::GetBrowserLanguage();
                    if (!$objGuessedLanguage instanceof NarroLanguage || !$objGuessedLanguage->Active) {
                        $objGuessedLanguage = null;
                    }
                }
                
                if (!$objGuessedLanguage) {
                    $objGuessedLanguage = NarroLanguage::QuerySingle(QQ::Equal(QQN::NarroLanguage()->Active, true));
                }
                
                if (!$objGuessedLanguage) {
                    die('There are no active languages in the database.');
                }
                else {
                    if (!isset($_REQUEST['openid_mode']) && !isset($argv)) {
                        QApplication::Redirect(sprintf('projects.php?l=%s', $objGuessedLanguage->LanguageCode));
                        exit;
                    }
                    else
                        QApplication::$TargetLanguage = $objGuessedLanguage;
                }
            }
            
            if (QApplication::$TargetLanguage->Active == false && !isset($argv))
                die(sprintf('The language %s is not active. Please ask the administrator to activate or check your URL if this is not the language you wanted.', QApplication::$TargetLanguage->LanguageName));
        }

        public static function InitializeUser() {
            global $argv;
            if (QApplication::$Session->User) {
                QApplication::$User = QApplication::$Session->User;
            }
            elseif (is_array($argv) && array_search('--user', $argv) !== false) {
                QApplication::$User = NarroUser::LoadByUserId((int) $argv[array_search('--user', $argv)+1]);
            }
            
            if (!QApplication::$User instanceof NarroUser) {
                QApplication::$User = NarroUser::LoadAnonymousUser();
                QApplication::$Session->User = QApplication::$User;
            }
            
            if (!QApplication::$User instanceof NarroUser)
                // @todo add handling here
                throw new Exception('Could not create an instance of NarroUser');
        }
        
        public static function GetProjectId() {
            global $argv;
            
            // project log via browser
            if (isset($_REQUEST['p']) && is_numeric($_REQUEST['p']))
                return (int) $_REQUEST['p'];
            // project log via cli
            elseif (isset($argv) && array_search('--project', $argv) && isset($argv[array_search('--project', $argv)+1]) && $argv[array_search('--project', $argv)+1] > 0)
                return (int) $argv[array_search('--project', $argv)+1];
            else
                return null;
        }

        public static function InitializeLogging($intProjectId = null) {
            NarroLogger::$intProjectId = self::GetProjectId();
            NarroLogger::$intLanguageId = self::GetLanguageId();
            NarroLogger::$intUserId = self::GetUserId();
        }

        public static function InitializeTranslationEngine() {
            require_once(__NARRO_INCLUDES__ . '/gettext_reader.class.php');
            require_once(__NARRO_INCLUDES__ . '/StreamReader.class.php');
            if (QApplication::$User->UserId == NarroUser::ANONYMOUS_USER_ID)
                QApplication::$LanguageCode = QApplication::$TargetLanguage->LanguageCode;
            else
                QApplication::$LanguageCode = QApplication::$User->GetPreferenceValueByName('Application language');
            
            define('__LOCALE_DIRECTORY__', __DOCROOT__ . __SUBDIRECTORY__ . '/locale/' . QApplication::$LanguageCode);
            
            QI18n::Initialize('NarroPoParser');
        }
    }
?>
