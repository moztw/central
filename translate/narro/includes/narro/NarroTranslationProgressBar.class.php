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

    class NarroTranslationProgressBar extends QControl {
        protected $intTotal;
        protected $intTranslated;
        protected $intFuzzy;

        //////////
        // Methods
        //////////
        public function ParsePostData() {}
        public function Validate() {return true;}

        protected function GetControlHtml() {
            if ($this->intTotal == 0) {
                return t('No texts');
            }

            $intPercentTranslated = 0;
            $intPercentFuzzy = 0;

            $strText = sprintf(sprintf('<div class="graph" title="%s">', t('%d with suggestions, %d approved, %d untranslated, %d in total')), $this->intFuzzy, $this->intTranslated, $this->intTotal - $this->intFuzzy - $this->intTranslated, $this->intTotal);

            if ($this->intTranslated <= $this->intTotal) {

                if ($this->intTranslated>0)
                    $intPercentTranslated = floor(($this->intTranslated * 100)/$this->intTotal);
                else
                    $intPercentTranslated = 0;

                $strText .= sprintf('<img src="%s" width="%d" height="100%%" border="0" />', __IMAGE_ASSETS__ . '/green-bar.png', $intPercentTranslated);

                if ($this->intFuzzy > 0)
                    $intPercentFuzzy = ceil(($this->intFuzzy * 100)/$this->intTotal);
                else
                    $intPercentFuzzy = 0;

                $strText .= sprintf('<img src="%s" width="%d" height="100%%" border="0" />', __IMAGE_ASSETS__ . '/orange-bar.png', $intPercentFuzzy);

            }

            if ($this->intTotal > $this->intFuzzy + $this->intTranslated )
                $intPercentUntranslated = 100 - $intPercentFuzzy - $intPercentTranslated;
            else
                $intPercentUntranslated = 0;

            $strText .= sprintf('<img src="%s" width="%d" height="100%%" border="0" />', __IMAGE_ASSETS__ . '/red-bar.png',  $intPercentUntranslated);


            $strText .= sprintf(' %d%%</div>', $intPercentTranslated);

            return $strText;
        }

        /////////////////////////
        // Public Properties: SET
        /////////////////////////
        public function __set($strName, $mixValue) {
            $this->blnModified = true;

            switch ($strName) {
                case "Total":
                    try {
                        $this->intTotal = max(0, QType::Cast($mixValue, QType::Integer));
                        break;
                    } catch (QInvalidCastException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case "Fuzzy":
                    try {
                        $this->intFuzzy = max(0, QType::Cast($mixValue, QType::Integer));
                        break;
                    } catch (QInvalidCastException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case "Translated":
                    try {
                        $this->intTranslated = max(0, QType::Cast($mixValue, QType::Integer));
                        break;
                    } catch (QInvalidCastException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                default:
                    try {
                        parent::__set($strName, $mixValue);
                        break;
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }
            }
        }

        public function __get($strName) {
                    switch ($strName) {
                case "Total":
                    return $this->intTotal;

                case "Fuzzy":
                    return $this->intFuzzy;

                case "Translated":
                    return $this->intTranslated;

                default:
                    try {
                        return parent::__get($strName);
                        break;
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }
            }
        }
    }
?>