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
    class NarroString {


        /**
         *  Multibyte equivalent for htmlentities()
         *
         * @param string $str
         * @param string $encoding
         * @return string
         **/
        public static function HtmlEntities($strText, $strEncoding = 'utf-8') {
            $arrPattern = array('&', '<', '>');
            $arrReplacement = array('&amp;', '&lt;', '&gt;', );
            for ($i=0; $i<count($arrPattern); $i++) {
                $strText = mb_ereg_replace($arrPattern[$i], $arrReplacement[$i], $strText);
            }
            return $strText;
        }
        
        public static function EscapeQuote($strText, $strEncoding = 'utf-8') {
            return str_replace('"', '\\"', $strText);
        }

        public static function Replace($strNeedle, $strReplacement, $strText, $intCount = null) {
            if ($strText == '' || $strNeedle == '')
                return $strText;

            $intPos = mb_strpos($strText, $strNeedle, 0);
            $intCurrentResult = 0;
            while ($intPos !== false && ($intCount == null || $intCount > $intCurrentResult)) {
                $strText = mb_substr($strText, 0, $intPos) . $strReplacement . mb_substr($strText, $intPos + mb_strlen($strNeedle));

                if ($intPos + mb_strlen($strNeedle) <= mb_strlen($strText))
                    $intPos = mb_strpos($strText, $strNeedle, $intPos + mb_strlen($strNeedle));
                else
                    return $strText;

                $intCurrentResult++;
            }

            return $strText;
        }

        public static function ShowLeadingAndTrailingSpaces($strText) {
            $strResult = '';
            
            for($i=0; $i < mb_strlen($strText); $i++) {
                $chrCurrent = mb_substr($strText, $i, 1);
                $chrPrevious = mb_substr($strText, $i - 1, 1);
                if ($i == 0 || $chrCurrent == "\n") {
                    // begining of the text or of a line, check for leading spaces
                    $blnLineBegining = true;
                    $strResult .= $chrCurrent;
                    continue;
                }
                
                if ($blnLineBegining) {
                    if ($chrCurrent == ' ') {
                        $strResult .= sprintf('<span class="whitespace_block" title="Space">&nbsp;</span>', __NARRO_IMAGE_ASSETS__);
                        continue;
                    }
                    else
                        $blnLineBegining = false;
                }
                elseif ($chrCurrent == ' ') {
                    $blnLineEnd = false;
                    for($j=$i+1; $j < mb_strlen($strText); $j++) {
                        $chrSecondCurrent = mb_substr($strText, $j, 1);
                        
                        if ($chrSecondCurrent == "\n" || $j == mb_strlen($strText) - 1) {
                            $blnLineEnd = true;
                            break;
                        }

                        if ($chrSecondCurrent != ' ') {
                            $blnLineEnd = false;
                            break;
                        }
                        
                        
                    }
                    
                    
                    if ($blnLineEnd == true) {
                        $strResult .= sprintf('<span class="whitespace_block" title="Space">&nbsp;</span>', __NARRO_IMAGE_ASSETS__);
                        continue;
                    }
                    
                }
                
                $strResult .= $chrCurrent;
            }

            return $strResult;
        }
        
        public static function WordCount($strText) {
            $intWordCount = 0;
            $arrPossibleWords = mb_split('\\W+', $strText);
            foreach($arrPossibleWords as $strPossibleWord) {
                if (trim($strPossibleWord)) $intWordCount++;
            }
            return $intWordCount;
        }

    }
?>