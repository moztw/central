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

    class QPieChart extends QPanel {
        protected $arrData;
        protected $intMinimumDataValue = 0;
        protected $intTotal;
        protected $intMaxValues = 12;

        public function __construct($objParentObject, $strControlId = null) {
            // Call the Parent
            try {
                parent::__construct($objParentObject, $strControlId);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            $this->strHeight = '200';
            $this->strWidth = '500';
        }

        public function GetControlHtml() {
            $arrData = array();
            $arrToolTip = array();
            $intIndex = 1;
            
            if ($this->intTotal > 0) {
                $arrData[t('Others')] = 0;
                foreach($this->arrData as $strLabel=>$intCount) {
                    if ($intCount > $this->intMinimumDataValue) {
                        if ($intIndex > $this->intMaxValues) {
                            $arrData[t('Others')] += round(($intCount * 100) / $this->intTotal, 2);
                            $arrToolTip[t('Others')] = sprintf('%s (%d), ', t('Others'), $arrData[t('Others')]);
                        }
                        else {
                            $arrData[$strLabel] = round(($intCount * 100) / $this->intTotal, 2);
                            $arrToolTip[$strLabel] = sprintf('%s (%d)', $strLabel, $intCount);
                        }
    
                        $intIndex++;
                    }
                }
            }
            
            if (isset($arrData[t('Others')]) && $arrData[t('Others')] == 0) {
                unset($arrData[t('Others')]);
                unset($arrToolTip[t('Others')]);
            }

            if (count($arrData)) {
                $strData = join(',', array_values($arrData));
                $strLabels = join('|', array_keys($arrData));
                $strTooltip = join(',', array_values($arrToolTip));

                $this->strText = sprintf('<img src="http://chart.apis.google.com/chart?cht=p&chd=t:%s&chs=%dx%d&chl=%s&chf=bg,s,65432100" alt="%s" title="%s" />', $strData, $this->strWidth, $this->strHeight, $strLabels, $strTooltip, $strTooltip);
            }
            else {
                $this->blnDisplay = false;
            }

            return parent::GetControlHtml();
        }

        /////////////////////////
        // Public Properties: GET
        /////////////////////////
        public function __get($strName) {

            switch ($strName) {
                case "Data": return $this->arrData;
                case "MinimumDataValue": return $this->intMinimumDataValue;
                case "Total": return $this->intTotal;

                default:
                    try {
                        return parent::__get($strName);
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }
            }
        }

        /////////////////////////
        // Public Properties: SET
        /////////////////////////
        public function __set($strName, $mixValue) {
            $this->blnModified = true;

            switch ($strName) {
                case "Data":
                    try {
                        $this->arrData = QType::Cast($mixValue, QType::ArrayType);
                        break;
                    } catch (QInvalidCastException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case "MinimumDataValue":
                    try {
                        $this->intMinimumDataValue = QType::Cast($mixValue, QType::Integer);
                        break;
                    } catch (QInvalidCastException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case "Total":
                    try {
                        $this->intTotal = QType::Cast($mixValue, QType::Integer);
                        break;
                    } catch (QInvalidCastException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                default:
                    try {
                        parent::__set($strName, $mixValue);
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }
                    break;
            }
        }

    }
?>
