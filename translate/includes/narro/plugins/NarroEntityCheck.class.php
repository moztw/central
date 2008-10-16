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
    class NarroEntityCheck extends NarroPlugin {

        public function __construct() {
            parent::__construct();
            $this->strName = t('Entity check');
        }

        public function SaveSuggestion($strOriginal, $strTranslation, $strContext, $objFile, $objProject) {
            return $this->ValidateSuggestion($strOriginal, $strTranslation, $strContext, $objFile, $objProject);
        }

        public function ValidateSuggestion($strOriginal, $strTranslation, $strContext, $objFile, $objProject) {
            $strPreparedOriginal = preg_replace('/\\r|\\n|\\t/', ' ', $strOriginal);

            preg_match_all('/%[Ssd]/', $strPreparedOriginal, $arrPoMatches);
            preg_match_all('/[\$\[\#\%]{1,3}[a-zA-Z\_\-0-9]+[\$\]\#\%]{0,3}[\s\.\;$]/', $strPreparedOriginal, $arrMatches);
            preg_match_all('/&[a-zA-Z\-0-9]+\;/', $strPreparedOriginal, $arrMoz1Matches);
            preg_match_all('/\%[0-9]\$S/', $strPreparedOriginal, $arrMoz2Matches);
            if (is_array($arrPoMatches[0])) {
                $arrMatches[0] = array_merge($arrMatches[0], $arrPoMatches[0]);
                $arrMatches[0] = array_unique($arrMatches[0]);
            }
            if (is_array($arrMoz1Matches[0])) {
                $arrMatches[0] = array_merge($arrMatches[0], $arrMoz1Matches[0]);
                $arrMatches[0] = array_unique($arrMatches[0]);
            }
            if (is_array($arrMoz2Matches[0])) {
                $arrMatches[0] = array_merge($arrMatches[0], $arrMoz2Matches[0]);
                $arrMatches[0] = array_unique($arrMatches[0]);
            }

            if (isset($arrMatches[0]) && count($arrMatches[0])) {
                foreach($arrMatches[0] as $strMatch) {
                    if (strpos($strTranslation, trim($strMatch)) === false)
                        $arrDiff[] = htmlspecialchars(trim($strMatch), null, 'utf-8');
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

            return array($strOriginal, $strTranslation, $strContext, $objFile, $objProject);
        }
    }
?>