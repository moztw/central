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
    class NarroEntityCheck extends NarroPlugin {
        private static $arrEntityRegex;
        private static $arrIgnoreRegex;

        public function __construct() {
            parent::__construct();
            $this->strName = t('Entity check');
            $this->Enable();
        }

        public static function RegisterEntityFormat($strRegexForEntity) {
            self::$arrEntityRegex[] = $strRegexForEntity;
        }

        public static function RegisterIgnoreCharacters($strRegexFind, $strReplace) {
            self::$arrIgnoreRegex[] = array('find' => $strRegexFind, 'replace' => $strReplace);
        }

        public static function StripEntities($strText, $strWithWhat = ' ') {
            if (is_array(self::$arrEntityRegex))
                foreach(self::$arrEntityRegex as $strRegexForEntity)
                    $strText = preg_replace($strRegexForEntity, $strWithWhat, $strText);

            return $strText;
        }

        public static function GetEntities($strText) {
            if (is_array(self::$arrEntityRegex)) {
                $arrEntityMatches = array();
                foreach(self::$arrEntityRegex as $strRegexForEntity)
                    if (preg_match_all($strRegexForEntity, $strText, $arrMatches))
                        $arrEntityMatches = array_merge($arrEntityMatches, $arrMatches[0]);
            }

            if (is_array($arrEntityMatches))
                return array_unique($arrEntityMatches);
            else
                return false;
        }

        public static function StripIgnoreCharacters($strText) {
            if (is_array(self::$arrIgnoreRegex))
                foreach(self::$arrIgnoreRegex as $arrFindReplace)
                    $strText = preg_replace($arrFindReplace['find'], $arrFindReplace['replace'], $strText);

            return $strText;
        }

        public function SaveSuggestion($strOriginal, $strTranslation, $strContext, NarroFile $objFile, NarroProject $objProject) {
            return $this->ApproveSuggestion($strOriginal, $strTranslation, $strContext, $objFile, $objProject);
        }

        /**
         * Checks for forgotten variables and entities
         * @param $strOriginal
         * @param $strTranslation
         * @param $strContext
         * @param $objFile
         * @param $objProject
         * @return array with the same parameters given
         */
        public function ApproveSuggestion($strOriginal, $strTranslation, $strContext, NarroFile $objFile, NarroProject $objProject) {

            /**
             * replace CR, LF and tabs with a space
             */
            self::RegisterIgnoreCharacters('/\\r|\\n|\\t/', ' ');
            /**
             * usual sprintf placeholders catch
             */
            if (strstr($strOriginal, '%'))
                self::RegisterEntityFormat('/%[a-zA-Z\.0-9\$]+/');
            if (strstr($strOriginal, '$'))
                self::RegisterEntityFormat('/[\$\[\#\%]{1,3}[a-zA-Z\_\-0-9]+[\$\]\#\%]{0,3}[\s\.\;$]/');
            if ($objProject->ProjectType != NarroProjectType::Gettext)
                /**
                 * &entity; catch
                 */
                if (strstr($strOriginal, '&'))
                    self::RegisterEntityFormat('/&[\.a-zA-Z\-0-9]+\;/');

            $strPreparedOriginal = self::StripIgnoreCharacters($strOriginal);

            if (strstr($strOriginal, '%') || strstr($strOriginal, '$') || strstr($strOriginal, '&')) {
                $arrEntities = self::GetEntities($strOriginal);
                if (count($arrEntities)) {
                    if (is_array($arrEntities))
                    foreach($arrEntities as $strEntity) {
                        if (strpos($strTranslation, trim($strEntity)) === false)
                            $arrDiff[] = htmlspecialchars(trim($strEntity), null, 'utf-8');
                    }

                    if (isset($arrDiff) && $arrDiff) {
                        $this->arrErrors[] =
                            sprintf(
                                t(
                                    'You translated or forgot some variables that should have been left as they were: <span style="color:red;font-size:large">%s</span>'),
                                join(', ', $arrDiff)
                            );
                    }
                }
            }

            return array($strOriginal, $strTranslation, $strContext, $objFile, $objProject);
        }
    }
?>