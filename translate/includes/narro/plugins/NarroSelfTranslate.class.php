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
    class NarroSelfTranslate extends NarroPlugin {

        public static $arrTranslations;

        public function __construct() {
            parent::__construct();
            $this->blnEnable = true;
            $this->strName = t('Narro self translator');
        }

        public function ValidateSuggestion($strOriginal, $strTranslation, $strContext, $objFile, $objProject) {
            self::UpdateTranslation($strOriginal, $strTranslation, $strContext, $objFile, $objProject);

            return func_get_args();
        }

        public function SaveSuggestion($strOriginal, $strTranslation, $strContext, $objFile, $objProject) {
            if ($objProject->ProjectName == 'Narro')
                self::UpdateTranslation($strOriginal, $strTranslation, $strContext, $objFile, $objProject);

            return func_get_args();
        }

        public function DeleteSuggestion($strOriginal, $strTranslation, $strContext, $objFile, $objProject) {
            self::UpdateTranslation($strOriginal, $strTranslation, $strContext, $objFile, $objProject);

            return func_get_args();
        }


        public function VoteSuggestion($strOriginal, $strTranslation, $strContext, $objFile, $objProject) {
            self::UpdateTranslation($strOriginal, $strTranslation, $strContext, $objFile, $objProject);

            return func_get_args();

        }

        public static function UpdateTranslation($strText, $strSuggestion, $strContext, $objFile, $objProject) {
            if ($objProject->ProjectName != 'Narro') return true;

            self::CacheTranslation($strText);
        }

        public static function CacheTranslation($strText) {
            $strIdentifier = sprintf('narro_%d', QApplication::$objUser->getPreferenceValueByName('Application language'));

            $arrTextSuggestions = QApplication::$Cache->load($strIdentifier);

            /**
             * Take the validated suggestion
             */
            $objContextInfo = NarroContextInfo::QuerySingle(
                QQ::AndCondition(
                    QQ::Equal(QQN::NarroContextInfo()->Context->Project->ProjectName, 'Narro'),
                    QQ::Equal(QQN::NarroContextInfo()->LanguageId, QApplication::$objUser->getPreferenceValueByName('Application language')),
                    QQ::Equal(QQN::NarroContextInfo()->Context->Text->TextValueMd5, md5($strText)),
                    QQ::IsNotNull(QQN::NarroContextInfo()->ValidSuggestionId)
                )
            );

            if ($objContextInfo instanceof NarroContextInfo) {
                $arrTextSuggestions[md5($strText)] = $objContextInfo->ValidSuggestion->SuggestionValue;
            }
            else {
                $arrTextSuggestions[md5($strText)] = $strText;
            }

            if (isset($arrTextSuggestions))
                QApplication::$Cache->save($arrTextSuggestions, $strIdentifier);

            if (isset($arrTextSuggestions[md5($strText)]))
                return $arrTextSuggestions[md5($strText)];
            else
                return $strText;

        }

        public static function Translate($strText) {
            if (!count(self::$arrTranslations)) {
                $strIdentifier = sprintf('narro_%d', QApplication::$objUser->getPreferenceValueByName('Application language'));

                $arrTextSuggestions = QApplication::$Cache->load($strIdentifier);

                if (is_array($arrTextSuggestions))
                    self::$arrTranslations = $arrTextSuggestions;
            }

            if (isset(self::$arrTranslations[md5($strText)]))
                return self::$arrTranslations[md5($strText)];
            else
                return self::CacheTranslation($strText);
        }

        /////////////////////////
        // Public Properties: GET
        /////////////////////////
        public function __get($strName) {
            switch ($strName) {
                case "Errors": return $this->arrErrors;

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