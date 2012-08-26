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

    require(__MODEL_GEN__ . '/NarroUserGen.class.php');

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
        /**
        * @var array
        */
        public static $AvailablePreferences;
                
        protected $arrPermissions;
        protected $arrPreferences;
        protected $objLanguage;

        const ANONYMOUS_USER_ID = 0;
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

        public function SetPreferenceValueByName($strName, $strValue) {
            if ($strName == 'Language') {
                $this->arrPreferences['Language'] = $strValue;
                $objLanguage = NarroLanguage::LoadByLanguageCode($this->arrPreferences['Language']);

                if ($objLanguage instanceof NarroLanguage) {
                    $this->Language = $objLanguage;
                }
                else {
                    $this->Language = QApplication::$TargetLanguage;
                }
            }

            $this->arrPreferences[$strName] = $strValue;
        }

        public function GetPreferenceValueByName($strName) {
            if (isset($this->arrPreferences[$strName]))
                return $this->arrPreferences[$strName];
            else
                return self::$AvailablePreferences[$strName]['default'];
        }
        
        public static function RegisterPreference($strName, $strType = 'text', $strDescription = '', $strDefaultValue = '', $arrValues = array()) {
            self::$AvailablePreferences[$strName] = array('type'=> $strType, 'description'=>$strDescription, 'default'=>$strDefaultValue, 'values'=>$arrValues);
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

            $arrUserRole = NarroUserRole::LoadArrayByUserId($objUser->intUserId);
            foreach($arrUserRole as $objRole) {
                $arrRolePermission = NarroRolePermission::LoadArrayByRoleId($objRole->RoleId);
                foreach($arrRolePermission as $objRolePermission)
                    $objUser->arrPermissions[$objRolePermission->Permission->PermissionName . '-' . $objRole->LanguageId . '-' . $objRole->ProjectId] = $objRolePermission;
            }

            if (isset($objUser->Preferences['Language'])) {
                $objLanguage = NarroLanguage::LoadByLanguageCode($objUser->Preferences['Language']);

                if ($objLanguage instanceof NarroLanguage) {
                    $objUser->Language = $objLanguage;
                }
            }

            return $objUser;
        }

        public static function LoadAnonymousUser() {


            $objCache = new NarroCache('user', self::ANONYMOUS_USER_ID);
            $objUser = $objCache->GetData();

            if (!$objUser instanceof NarroUser) {
                $objUser = NarroUser::LoadByUserId(self::ANONYMOUS_USER_ID);

                $arrUserRole = NarroUserRole::LoadArrayByUserId(self::ANONYMOUS_USER_ID);
                foreach($arrUserRole as $objRole) {
                    $arrRolePermission = NarroRolePermission::LoadArrayByRoleId($objRole->RoleId);
                    foreach($arrRolePermission as $objRolePermission)
                        $objUser->arrPermissions[$objRolePermission->Permission->PermissionName . '-' . $objRole->LanguageId . '-' . $objRole->ProjectId] = $objRolePermission;
                }

                $objCache->SaveData($objUser);
            }
            
            return $objUser;
        }

        public static function LoadByUsername($strUsername, $objOptionalClauses = null) {
            $objUser = NarroUser::QuerySingle(
                        QQ::AndCondition(
                            QQ::Equal(QQN::NarroUser()->Username, $strUsername)
                        )
            );
            if (!$objUser instanceof NarroUser)
                return false;

            $arrUserRole = NarroUserRole::LoadArrayByUserId($objUser->intUserId);
            foreach($arrUserRole as $objRole) {
                $arrRolePermission = NarroRolePermission::LoadArrayByRoleId($objRole->RoleId);
                foreach($arrRolePermission as $objRolePermission)
                    $objUser->arrPermissions[$objRolePermission->Permission->PermissionName . '-' . $objRole->LanguageId . '-' . $objRole->ProjectId] = $objRolePermission;
            }

            if (isset($objUser->Preferences['Language'])) {
                $objLanguage = NarroLanguage::LoadByLanguageCode($objUser->Preferences['Language']);

                if ($objLanguage instanceof NarroLanguage) {
                    $objUser->Language = $objLanguage;
                }
                elseif (QApplication::$TargetLanguage instanceof NarroLanguage) {
                    $objUser->Language = QApplication::$TargetLanguage;
                }
            }
            else
                $objUser->Language = QApplication::$TargetLanguage;

            return $objUser;
        }

        public static function LoadByUserId($intUserId, $objOptionalClauses = null) {
            $objUser = NarroUser::QuerySingle(
                        QQ::AndCondition(
                            QQ::Equal(QQN::NarroUser()->UserId, $intUserId)
                        ),
                        QQ::ExpandAsArray(QQN::NarroUser()->NarroUserRoleAsUser)
            );
            if (!$objUser instanceof NarroUser)
                return false;

            foreach($objUser->_NarroUserRoleAsUserArray as $objRole) {
                /* @var $objRole NarroUserRole */
                $arrRolePermission = NarroRolePermission::LoadArrayByRoleId($objRole->RoleId, QQ::Expand(QQN::NarroRolePermission()->Permission));
                foreach($arrRolePermission as $objRolePermission)
                    $objUser->arrPermissions[$objRolePermission->Permission->PermissionName . '-' . $objRole->LanguageId . '-' . $objRole->ProjectId] = $objRolePermission;
            }

            if (isset($objUser->Preferences['Language'])) {
                $objLanguage = NarroLanguage::LoadByLanguageCode($objUser->Preferences['Language']);

                if ($objLanguage instanceof NarroLanguage) {
                    $objUser->Language = $objLanguage;
                }
                elseif (QApplication::$TargetLanguage instanceof NarroLanguage) {
                    $objUser->Language = QApplication::$TargetLanguage;
                }
            }
            elseif (QApplication::$TargetLanguage instanceof NarroLanguage)
                $objUser->Language = QApplication::$TargetLanguage;

            return $objUser;
        }

        public function hasPermission($strPermissionName, $intProjectId = null, $intLanguageId = null) {
            if (
                $this->intUserId == 1 ||
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

        public static function RegisterUser($strUsername, $strEmail, $strPassword, $strRealName) {
            $objMaxUser = NarroUser::LoadAll(QQ::Clause(QQ::LimitInfo(1,0), QQ::OrderBy(QQN::NarroUser()->UserId, false)));

            $objUser = new NarroUser();
            $objUser->UserId = $objMaxUser[0]->UserId + 1;
            $objUser->Username = $strUsername;
            if ($strRealName)
                $objUser->RealName = $strRealName;
            $objUser->Email = $strEmail;
            $objUser->Password = md5($strPassword);

            try {
                $objUser->Save();
            } catch(Exception $objEx) {
                throw $objEx;
            }

            /**
             * set up default roles
             */

            $objUserRole = new NarroUserRole();

            if ($objUser->UserId == 1)
                $objUserRole->RoleId = 5;
            else
                $objUserRole->RoleId = 2;

            $objUserRole->UserId = $objUser->UserId;
            $objUserRole->Save();

            return NarroUser::LoadByUsernameAndPassword($strUsername, md5($strPassword));
        }

        public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
            $objUser = parent::InstantiateDbRow($objDbRow, $strAliasPrefix, $strExpandAsArrayNodes, $arrPreviousItems, $strColumnAliasArray);
            if ($objUser->Data)
                $objUser->arrPreferences = @unserialize($objUser->Data);
            return $objUser;
        }

        public function __get($strName) {
            switch ($strName) {
                case 'RealName':
                    if ($this->strRealName)
                        return htmlspecialchars($this->strRealName, ENT_NOQUOTES, 'UTF-8');
                    else
                        return htmlspecialchars($this->strUsername, ENT_NOQUOTES, 'UTF-8');
                case 'Username':
                    /**
                    * Gets the value for strUsername (Unique)
                    * @return string
                    */
                    return htmlspecialchars($this->strUsername, ENT_NOQUOTES, 'UTF-8');
                case 'Language':
                    if (!$this->objLanguage instanceof NarroLanguage)
                        return QApplication::$TargetLanguage;
                    else
                        return $this->objLanguage;
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