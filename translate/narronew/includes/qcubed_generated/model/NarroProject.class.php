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

    require(__MODEL_GEN__ . '/NarroProjectGen.class.php');

    /**
    * The NarroProject class defined here contains any
    * customized code for the NarroProject class in the
    * Object Relational Model.  It represents the "narro_project" table
    * in the database, and extends from the code generated abstract NarroProjectGen
    * class, which contains all the basic CRUD-type functionality as well as
    * basic methods to handle relationships and index-based loading.
    *
    * @package My Application
    * @subpackage DataObjects
    *
    * @property array $Preferences
    * @property NarroProjectProgress $ProjectProgressForCurrentLanguage
    * @property string $DefaultTemplatePath
    * @property string $DefaultTranslationPath
    *
    */
    class NarroProject extends NarroProjectGen {
        /**
         * @var array
         */
        public static $AvailablePreferences = array();
        
        protected $arrPreferences;
        /**
         * @var NarroProjectProgress
         */
        protected $objProjectProgressForCurrentLanguage;
        
        /**
        * Default "to string" handler
        * Allows pages to _p()/echo()/print() this object, and to define the default
        * way this object would be outputted.
        *
        * Can also be called directly via $objNarroProject->__toString().
        *
        * @return string a nicely formatted string representation of this object
        */
        public function __toString() {
            return sprintf('NarroProject Object %s',  $this->intProjectId);
        }
        
        public static function LoadArrayByActive($intActive, $objOptionalClauses = null) {
            if (is_null($objOptionalClauses))
                $objOptionalClauses = array(QQ::OrderBy(QQN::NarroProject()->ProjectName));
            return parent::LoadArrayByActive($intActive, $objOptionalClauses);
        }

        public function CountTranslatedTextsByLanguage($intLanguageId = null) {
            $intTranslatedTexts = 0;

            if (is_null($intLanguageId)) $intLanguageId = QApplication::GetLanguageId();

            // Cache miss
            $strQuery = sprintf('SELECT COUNT(c.context_id) AS cnt FROM narro_context c, narro_context_info ci, narro_file f WHERE f.active=1 AND f.file_id=c.file_id AND c.context_id=ci.context_id AND c.project_id = %d AND ci.language_id=%d AND ci.valid_suggestion_id IS NULL AND ci.has_suggestions=1 AND c.active=1', $this->ProjectId, $intLanguageId);

            // Perform the Query
            $objDbResult = self::GetDatabase()->Query($strQuery);

            if ($objDbResult) {
                $mixRow = $objDbResult->FetchArray();
                $intTranslatedTexts = $mixRow['cnt'];

                $this->UpdateProjectProgress($intLanguageId, 'FuzzyTextCount', $intTranslatedTexts);
            }

            return $intTranslatedTexts;
        }

        public function CountAllTextsByLanguage($intLanguageId = null) {
            $intTotalTexts = 0;

            if (is_null($intLanguageId)) $intLanguageId = QApplication::GetLanguageId();

            // Cache miss
            $strQuery = sprintf('SELECT COUNT(c.context_id) AS cnt FROM narro_context c, narro_file f WHERE f.project_id=c.project_id AND f.file_id=c.file_id AND f.active=1 AND c.project_id = %d AND c.active=1', $this->ProjectId);

            // Perform the Query
            $objDbResult = self::GetDatabase()->Query($strQuery);

            if ($objDbResult) {
                $mixRow = $objDbResult->FetchArray();
                $intTotalTexts = $mixRow['cnt'];

                $this->UpdateProjectProgress($intLanguageId, 'TotalTextCount', $intTotalTexts);
            }

            return $intTotalTexts;
        }
        
        public function CountAllWordsByLanguage($intLanguageId = null) {
            $intTotalTexts = 0;
        
            if (is_null($intLanguageId)) $intLanguageId = QApplication::GetLanguageId();
        
            // Cache miss
            $strQuery = sprintf('SELECT SUM(t.text_word_count) AS cnt FROM narro_context c, narro_text t, narro_file f WHERE t.text_id=c.text_id AND f.project_id=c.project_id AND f.file_id=c.file_id AND f.active=1 AND c.project_id = %d AND c.active=1', $this->ProjectId);
        
            // Perform the Query
            $objDbResult = self::GetDatabase()->Query($strQuery);
        
            if ($objDbResult) {
                $mixRow = $objDbResult->FetchArray();
                $intTotalTexts = $mixRow['cnt'];
        
                // $this->UpdateProjectProgress($intLanguageId, 'TotalWordCount', $intTotalTexts);
            }
        
            return $intTotalTexts;
        }

        protected function UpdateProjectProgress($intLanguageId, $strColumn, $intValue) {
            $objProjectProgress = NarroProjectProgress::LoadByProjectIdLanguageId($this->ProjectId, $intLanguageId);

            $blnChanged = false;

            if (!$objProjectProgress instanceof NarroProjectProgress) {
                $objProjectProgress = new NarroProjectProgress();
                $objProjectProgress->LanguageId = $intLanguageId;
                $objProjectProgress->ProjectId = $this->ProjectId;
                $objProjectProgress->TotalTextCount = 0;
                $objProjectProgress->ApprovedTextCount = 0;
                $objProjectProgress->FuzzyTextCount = 0;
                $objProjectProgress->ProgressPercent = 0;
                $objProjectProgress->Active = $this->Active;
                $objProjectProgress->LastModified = QDateTime::Now();

                $blnChanged = true;
            }

            // Nothing changed
            if (!$blnChanged && $objProjectProgress->$strColumn == $intValue)
                return true;

            $objProjectProgress->$strColumn = $intValue;

            if ($objProjectProgress->TotalTextCount)
                $objProjectProgress->ProgressPercent = floor($objProjectProgress->ApprovedTextCount*100 / $objProjectProgress->TotalTextCount);
            else
                $objProjectProgress->ProgressPercent = 0;

            $objLastContextInfo = NarroContextInfo::QuerySingle(
                QQ::AndCondition(
                    QQ::Equal(QQN::NarroContextInfo()->Context->ProjectId, $this->intProjectId),
                    QQ::Equal(QQN::NarroContextInfo()->Context->Active, true),
                    QQ::Equal(QQN::NarroContextInfo()->LanguageId, $intLanguageId)
                ),
                QQ::OrderBy(QQN::NarroContextInfo()->Modified, 0)
            );
            if ($objLastContextInfo)
                $objProjectProgress->LastModified = $objLastContextInfo->Modified;

            $objProjectProgress->Save();

            return true;
        }

        public function CountApprovedTextsByLanguage($intLanguageId = null) {
            $intApprovedTexts = 0;

            if (is_null($intLanguageId)) $intLanguageId = QApplication::GetLanguageId();

            // Cache miss
            $strQuery = sprintf('SELECT COUNT(c.context_id) AS cnt FROM `narro_context` c, narro_context_info ci, narro_file f WHERE f.active=1 AND f.file_id=c.file_id AND c.context_id=ci.context_id AND c.project_id = %d AND ci.language_id=%d AND ci.valid_suggestion_id IS NOT NULL AND c.active=1', $this->ProjectId, $intLanguageId);
            // Perform the Query
            $objDbResult = self::GetDatabase()->Query($strQuery);

            if ($objDbResult) {
                $mixRow = $objDbResult->FetchArray();
                $intApprovedTexts = $mixRow['cnt'];

                $this->UpdateProjectProgress($intLanguageId, 'ApprovedTextCount', $intApprovedTexts);
            }

            return $intApprovedTexts;
        }

        public function Save($blnForceInsert = false, $blnForceUpdate = false) {
            $blnNew = (!$this->__blnRestored) || ($blnForceInsert);
            
            $objProjectProgress = NarroProjectProgress::LoadByProjectIdLanguageId($this->intProjectId, QApplication::GetLanguageId());
            if (is_array($this->arrPreferences))
            foreach($this->arrPreferences as $strName=>$strValue) {
                if (self::$AvailablePreferences[$strName]['global'] == false) {
                    if ($objProjectProgress)
                        $objProjectProgress->SetPreferenceValueByName($strName, $strValue);
                }
                else {
                    $arrGlobalPreferences[$strName] = $strValue;
                }
                    
            }
            
            if (isset($arrGlobalPreferences))
                $this->strData = serialize($arrGlobalPreferences);
            
            if ($objProjectProgress)
                $objProjectProgress->Save();
            
            $mixResult = parent::Save($blnForceInsert, $blnForceUpdate);

            if ($blnNew) {
                if (!file_exists(__IMPORT_PATH__ . '/' . $this->ProjectId)) {
                    @mkdir(__IMPORT_PATH__ . '/' . $this->ProjectId, 0777, true);
                    NarroUtils::RecursiveChmod(__IMPORT_PATH__ . '/' . $this->ProjectId);
                }
                
                if (!file_exists($this->DefaultTemplatePath)) {
                    @mkdir($this->DefaultTemplatePath, 0777, true);
                    NarroUtils::RecursiveChmod($this->DefaultTemplatePath);
                }

                foreach(NarroLanguage::LoadAll() as $objLanguage) {

                    $objProjectProgress = new NarroProjectProgress();
                    $objProjectProgress->LanguageId = $objLanguage->LanguageId;
                    $objProjectProgress->ProjectId = $this->ProjectId;
                    $objProjectProgress->Active = $this->Active;
                    $objProjectProgress->TotalTextCount = 0;
                    $objProjectProgress->ApprovedTextCount = 0;
                    $objProjectProgress->FuzzyTextCount = 0;
                    $objProjectProgress->ProgressPercent = 0;
                    $objProjectProgress->Active = $this->Active;
                    $objProjectProgress->LastModified = QDateTime::Now();
                    $objProjectProgress->Save();

                    if (!file_exists($this->DefaultTranslationPath))
                        @mkdir($this->DefaultTranslationPath, 0777, true);
                    NarroUtils::RecursiveChmod($this->DefaultTranslationPath, 0666, 0777);
                }
            }

            return $mixResult;
        }
        
        public function SetPreferenceValueByName($strName, $strValue) {
            if (is_null($this->arrPreferences) && $this->strData)
                $this->arrPreferences = unserialize($this->strData);
            
            $this->arrPreferences[$strName] = $strValue;
        }

        public function GetPreferenceValueByName($strName) {
            if (is_null($this->arrPreferences) && $this->strData)
                $this->arrPreferences = unserialize($this->strData);
            
            
            if (self::$AvailablePreferences[$strName]['global'])
                if (!is_null($this->arrPreferences) && isset($this->arrPreferences[$strName]))
                    return $this->arrPreferences[$strName];
                else
                    return self::$AvailablePreferences[$strName]['default'];
            else {
                if ($this->ProjectProgressForCurrentLanguage)
                    return $this->ProjectProgressForCurrentLanguage->GetPreferenceValueByName($strName);
                else
                    return self::$AvailablePreferences[$strName]['default'];
            }
        }
        
        /**
         * Register a preference that can be set on the project edit tab
         * @param string $strName the name that the user sees, it will be localizable
         * @param boolean $blnGlobal if the preference valid for all languages or can it be set individually
         * @param integer $intProjectType applies to what project type, 0 for all
         * @param string $strType text, option, number
         * @param string $strDescription a description shown to the user, it will be localizable
         * @param string $strDefaultValue the default value if it's not set yet
         * @param array $arrValues if the option is a list, an array of possible values
         */
        public static function RegisterPreference($strName, $blnGlobal, $intProjectType, $strType, $strDescription, $strDefaultValue, $arrValues = array()) {
            self::$AvailablePreferences[$strName] = array(
            	'type' => $strType,
                'global' => $blnGlobal,
                'project_type' => $intProjectType,
                'description' => $strDescription,
                'default' => $strDefaultValue,
                'values' => $arrValues
            );
        }

        /**
         * Override method to perform a property "Get"
         * This will get the value of $strName
         *
         * @param string $strName Name of the property to get
         * @return mixed
         */
        public function __get($strName) {
            switch ($strName) {
                ///////////////////
                // Member Variables
                ///////////////////
                case 'Preferences': return $this->arrPreferences;
                case 'ProjectProgressForCurrentLanguage':
                    if (!$this->intProjectId) return false;
                    
                    if (isset($this->objProjectProgressForCurrentLanguage))
                        return $this->objProjectProgressForCurrentLanguage;
                    else {
                        $this->objProjectProgressForCurrentLanguage = NarroProjectProgress::LoadByProjectIdLanguageId($this->intProjectId, QApplication::GetLanguageId());
                        if (!$this->objProjectProgressForCurrentLanguage instanceof NarroProjectProgress) {
                            $this->objProjectProgressForCurrentLanguage = new NarroProjectProgress();
                            $this->objProjectProgressForCurrentLanguage->LanguageId = QApplication::GetLanguageId();
                            $this->objProjectProgressForCurrentLanguage->ProjectId = $this->intProjectId;
                            $this->objProjectProgressForCurrentLanguage->TotalTextCount = 0;
                            $this->objProjectProgressForCurrentLanguage->ApprovedTextCount = 0;
                            $this->objProjectProgressForCurrentLanguage->FuzzyTextCount = 0;
                            $this->objProjectProgressForCurrentLanguage->ProgressPercent = 0;
                            $this->objProjectProgressForCurrentLanguage->LastModified = QDateTime::Now();
                            $this->objProjectProgressForCurrentLanguage->Active = $this->Active;
                            $this->objProjectProgressForCurrentLanguage->Save();
                        }
                        return $this->objProjectProgressForCurrentLanguage;
                    }
                case 'DefaultTemplatePath':
                    return __IMPORT_PATH__ . '/' . $this->ProjectId . '/' . NarroLanguage::SOURCE_LANGUAGE_CODE;

                case 'DefaultTranslationPath':
                    return __IMPORT_PATH__ . '/' . $this->ProjectId . '/' . QApplication::$TargetLanguage->LanguageCode;

                default:
                    try {
                        return parent::__get($strName);
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }
            }
        }

    }
?>