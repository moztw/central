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

    require(__DATAGEN_CLASSES__ . '/NarroUserGen.class.php');

    /**
    * The NarroUser class defined here contains any
    * customized code for the NarroUser class in the
    * Object Relational Model.  It represents the "narro_user" table
    * in the database, and extends from the code generated abstract NarroUserGen
    * class, which contains all the basic CRUD-type functionality as well as
    * basic methods to handle relationships and index-based loading.
    *
    * @package Narro
    * @subpackage DataObjects
    *
    */
    class NarroUser extends NarroUserGen {
        protected $arrPermissions;
        protected $arrPreferences;
        protected $objLanguage;

        const ANONYMOUS_USER_ID = 0;
        const ANONYMOUS_LANGUAGE_ID = 58;
        /**
        * Default "to string" handler
        * Allows pages to _p()/echo()/print() this object, and to define the default
        * way this object would be outputted.
        *
        * Can also be called directly via $objNarroUser->__toString().
        *
        * @return string a nicely formatted string representation of this object
        */
        public function __toString() {
            return sprintf('NarroUser Object %s',  $this->intUserId);
        }

        public function setPreferenceValueByName($strName, $strValue) {
            if ($strName == 'Language') {
                $this->arrPreferences['Language'] = $strValue;
                $objLanguage = NarroLanguage::LoadByLanguageCode($this->arrPreferences['Language']);

                if ($objLanguage instanceof NarroLanguage) {
                    $this->Language = $objLanguage;
                }
                else {
                    $this->Language = NarroLanguage::Load(self::ANONYMOUS_LANGUAGE_ID);
                }
            }

            $this->arrPreferences[$strName] = $strValue;
        }

        public function getPreferenceValueByName($strName) {
            if (isset($this->arrPreferences[$strName]))
                return $this->arrPreferences[$strName];
            else
                return QApplication::$arrPreferences[$strName]['default'];
        }

        public static function LoadByUsernameAndPassword($strUsername, $strPassword) {
            $objUser = NarroUser::QuerySingle(
                        QQ::AndCondition(
                            QQ::Equal(QQN::NarroUser()->Username, $strUsername),
                            QQ::Equal(QQN::NarroUser()->Password, $strPassword)
                        )
            );
            if (!$objUser instanceof NarroUser)
                return false;
            $arrUserPermissions = NarroUserPermission::LoadArrayByUserId($objUser->intUserId);
            foreach($arrUserPermissions as $objUserPermission) {
                $objUser->arrPermissions[$objUserPermission->Permission->PermissionName . '-' . $objUserPermission->LanguageId . '-' . $objUserPermission->ProjectId] = $objUserPermission;
            }

            $objUser->arrPreferences = unserialize($objUser->Data);

            if (isset($objUser->Preferences['Language'])) {
                $objLanguage = NarroLanguage::LoadByLanguageCode($objUser->Preferences['Language']);

                if ($objLanguage instanceof NarroLanguage) {
                    $objUser->Language = $objLanguage;
                }
                else {
                    $objUser->Language = NarroLanguage::Load(self::ANONYMOUS_LANGUAGE_ID);
                }
            }
            else
                $objUser->Language = NarroLanguage::Load(self::ANONYMOUS_LANGUAGE_ID);

            return $objUser;
        }

        public static function LoadAnonymousUser() {
            $objUser = NarroUser::LoadByUserId(self::ANONYMOUS_USER_ID);
            $arrUserPermissions = NarroUserPermission::LoadArrayByUserId(self::ANONYMOUS_USER_ID);
            foreach($arrUserPermissions as $objUserPermission) {
                $objUser->arrPermissions[$objUserPermission->Permission->PermissionName . '-' . $objUserPermission->LanguageId . '-' . $objUserPermission->ProjectId] = $objUserPermission;
            }

            $objUser->arrPreferences = unserialize($objUser->Data);

            if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
                if (strstr($_SERVER['HTTP_ACCEPT_LANGUAGE'], ';')) {
                    $arrLangGroups = split(';', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
                    foreach($arrLangGroups as $strLangGroup) {
                        if (strstr($strLangGroup, ',')) {
                            $arrLangCodes = split(',', $strLangGroup);
                            foreach($arrLangCodes as $strLangCode) {
                                $objLanguage = NarroLanguage::LoadByLanguageCode($strLangCode);
                                if ($objLanguage instanceof NarroLanguage) {
                                    $objUser->Language = $objLanguage;
                                    return $objUser;
                                }
                            }
                        }
                        else {
                            $objLanguage = NarroLanguage::LoadByLanguageCode($strLangCode);
                            if ($objLanguage instanceof NarroLanguage) {
                                $objUser->Language = $objLanguage;
                                return $objUser;
                            }
                        }
                    }
                }
            }

            if (isset($objUser->Preferences['Language'])) {
                $objLanguage = NarroLanguage::LoadByLanguageCode($objUser->Preferences['Language']);

                if ($objLanguage instanceof NarroLanguage) {
                    $objUser->Language = $objLanguage;
                }
                else {
                    $objUser->Language = NarroLanguage::Load(self::ANONYMOUS_LANGUAGE_ID);
                }
            }
            else
                $objUser->Language = NarroLanguage::Load(self::ANONYMOUS_LANGUAGE_ID);

            return $objUser;
        }

        public static function LoadByUsername($strUsername) {
            $objUser = NarroUser::QuerySingle(
                        QQ::AndCondition(
                            QQ::Equal(QQN::NarroUser()->Username, $strUsername)
                        )
            );
            if (!$objUser instanceof NarroUser)
                return false;
            $arrUserPermissions = NarroUserPermission::LoadArrayByUserId($objUser->intUserId);
            foreach($arrUserPermissions as $objUserPermission) {
                $objUser->arrPermissions[$objUserPermission->Permission->PermissionName . '-' . $objUserPermission->LanguageId . '-' . $objUserPermission->ProjectId] = $objUserPermission;
            }

            $objUser->arrPreferences = unserialize($objUser->Data);

            if (isset($objUser->Preferences['Language'])) {
                $objLanguage = NarroLanguage::LoadByLanguageCode($objUser->Preferences['Language']);

                if ($objLanguage instanceof NarroLanguage) {
                    $objUser->Language = $objLanguage;
                }
                else {
                    $objUser->Language = NarroLanguage::Load(self::ANONYMOUS_LANGUAGE_ID);
                }
            }
            else
                $objUser->Language = NarroLanguage::Load(self::ANONYMOUS_LANGUAGE_ID);

            return $objUser;
        }

        public static function LoadByUserId($intUserId) {
            $objUser = NarroUser::QuerySingle(
                        QQ::AndCondition(
                            QQ::Equal(QQN::NarroUser()->UserId, $intUserId)
                        )
            );
            if (!$objUser instanceof NarroUser)
                return false;
            $arrUserPermissions = NarroUserPermission::LoadArrayByUserId($objUser->intUserId);
            foreach($arrUserPermissions as $objUserPermission) {
                $objUser->arrPermissions[$objUserPermission->Permission->PermissionName . '-' . $objUserPermission->LanguageId . '-' . $objUserPermission->ProjectId] = $objUserPermission;
            }

            $objUser->arrPreferences = unserialize($objUser->Data);

            if (isset($objUser->Preferences['Language'])) {
                $objLanguage = NarroLanguage::LoadByLanguageCode($objUser->Preferences['Language']);

                if ($objLanguage instanceof NarroLanguage) {
                    $objUser->Language = $objLanguage;
                }
                else {
                    $objUser->Language = NarroLanguage::Load(self::ANONYMOUS_LANGUAGE_ID);
                }
            }
            else
                $objUser->Language = NarroLanguage::Load(self::ANONYMOUS_LANGUAGE_ID);

            return $objUser;
        }

        public function hasPermission($strPermissionName, $intProjectId = null, $intLanguageId = null) {
            if (
                isset($this->arrPermissions[$strPermissionName . '-' . $intLanguageId . '-' . $intProjectId]) ||
                isset($this->arrPermissions[$strPermissionName . '-' . $intLanguageId . '-']) ||
                isset($this->arrPermissions[$strPermissionName . '--' . $intProjectId]) ||
                isset($this->arrPermissions[$strPermissionName . '--'])
               ) {
                    return true;
            }
            else
                return false;
        }

        public static function RegisterUser($strUsername, $strEmail, $strPassword) {
            $objMaxUser = NarroUser::LoadAll(QQ::Clause(QQ::LimitInfo(1,0), QQ::OrderBy(QQN::NarroUser()->UserId, false)));

            $objUser = new NarroUser();
            $objUser->UserId = $objMaxUser[0]->UserId + 1;
            $objUser->Username = $strUsername;
            $objUser->Email = $strEmail;
            $objUser->Password = md5($strPassword);

            try {
                $objUser->Save();
            } catch(Exception $objEx) {
                throw $objEx;
            }

            /**
             * set up default permissions
             */
            if ($objUser->UserId == 1) {
                /**
                 * give super powers to the first user
                 */
                $arrPermissions = array();
                $arrNarroPermissions = NarroPermission::LoadAll();
                foreach($arrNarroPermissions as $objNarroPermission) {
                    $arrPermissions[] = $objNarroPermission->PermissionId;
                }
            }
            else
                /**
                 * registered users can suggest, vote and comment
                 */
                $arrPermissions = array(1, 2, 4);

            foreach($arrPermissions as $intPermissionId) {
                $objUserPermission = new NarroUserPermission();
                $objUserPermission->PermissionId = $intPermissionId;
                $objUserPermission->UserId = $objUser->UserId;
                $objUserPermission->Save();
            }

            return NarroUser::LoadByUsernameAndPassword($strUsername, md5($strPassword));
        }



        // Override or Create New Load/Count methods
        // (For obvious reasons, these methods are commented out...
        // but feel free to use these as a starting point)
/*
        public static function LoadArrayBySample($strParam1, $intParam2, $objOptionalClauses = null) {
            // This will return an array of NarroUser objects
            return NarroUser::QueryArray(
                QQ::AndCondition(
                    QQ::Equal(QQN::NarroUser()->Param1, $strParam1),
                    QQ::GreaterThan(QQN::NarroUser()->Param2, $intParam2)
                ),
                $objOptionalClauses
            );
        }

        public static function LoadBySample($strParam1, $intParam2, $objOptionalClauses = null) {
            // This will return a single NarroUser object
            return NarroUser::QuerySingle(
                QQ::AndCondition(
                    QQ::Equal(QQN::NarroUser()->Param1, $strParam1),
                    QQ::GreaterThan(QQN::NarroUser()->Param2, $intParam2)
                ),
                $objOptionalClauses
            );
        }

        public static function CountBySample($strParam1, $intParam2, $objOptionalClauses = null) {
            // This will return a count of NarroUser objects
            return NarroUser::QueryCount(
                QQ::AndCondition(
                    QQ::Equal(QQN::NarroUser()->Param1, $strParam1),
                    QQ::Equal(QQN::NarroUser()->Param2, $intParam2)
                ),
                $objOptionalClauses
            );
        }

        public static function LoadArrayBySample($strParam1, $intParam2, $objOptionalClauses) {
            // Performing the load manually (instead of using Qcodo Query)

            // Get the Database Object for this Class
            $objDatabase = NarroUser::GetDatabase();

            // Properly Escape All Input Parameters using Database->SqlVariable()
            $strParam1 = $objDatabase->SqlVariable($strParam1);
            $intParam2 = $objDatabase->SqlVariable($intParam2);

            // Setup the SQL Query
            $strQuery = sprintf('
                SELECT
                    `narro_user`.*
                FROM
                    `narro_user` AS `narro_user`
                WHERE
                    param_1 = %s AND
                    param_2 < %s',
                $strParam1, $intParam2);

            // Perform the Query and Instantiate the Result
            $objDbResult = $objDatabase->Query($strQuery);
            return NarroUser::InstantiateDbResult($objDbResult);
        }
*/



        public function __get($strName) {
            switch ($strName) {
                case 'Language': return $this->objLanguage;
                case 'Preferences': return $this->arrPreferences;
                case 'Permissions': return $this->arrPermissions;

                default:
                    try {
                        return parent::__get($strName);
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }
            }
        }

        public function __set($strName, $mixValue) {
            switch ($strName) {
                case "Language":
                    if ($mixValue instanceof NarroLanguage)
                        $this->objLanguage = $mixValue;
                    else
                        throw new Exception(t('Language should be set with an instance of NarroLanguage'));

                    break;

                default:
                    try {
                        return (parent::__set($strName, $mixValue));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }
            }
        }
    }
?>