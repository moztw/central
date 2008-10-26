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

            $strText = sprintf(sprintf('<div class="graph" title="%s">', t('%d with suggestions, %d validated, %d untranslated, %d in total')), $this->intFuzzy, $this->intTranslated, $this->intTotal - $this->intFuzzy - $this->intTranslated, $this->intTotal);

            if ($this->intTranslated <= $this->intTotal) {
                $intPercentTranslated = ceil(($this->intTranslated * 100)/$this->intTotal);
                $strText .= sprintf('<div class="translated" style="width: %spx;"></div>', $intPercentTranslated);
                if ($this->intFuzzy > 0) {
                    $intPercentFuzzy = ceil(($this->intFuzzy * 100)/$this->intTotal);
                    $strText .= sprintf('<div class="fuzzy" style="left:%spx;width: %spx;"></div>', $intPercentTranslated, $intPercentFuzzy);
                }
                else {
                    $intPercentFuzzy = 0;
                }

            }

            $strText .= sprintf('<div class="untranslated" style="left:%spx;width: %spx;"></div>', $intPercentTranslated + $intPercentFuzzy, 100 - $intPercentFuzzy - $intPercentTranslated);

            //$strText .= sprintf('<div style="height:100%%;width:250px;position:absolute;top:0px;left:110px">%d%% (%d/%d/%d)</div></div>', $intPercentTranslated, $this->intTranslated, $this->intFuzzy, $this->intTotal);
            $strText .= sprintf('<div style="height:100%%;width:25px;position:absolute;top:0px;left:110px">%d%%</div></div>', $intPercentTranslated);

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