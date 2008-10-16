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
            if (preg_match_all('/^\s+/m', $strText, $arrMatches)) {
                foreach($arrMatches[0] as $strSpaces) {
                    foreach(str_split($strSpaces) as $strSpaceCharacter) {
                        $strSpanSpaces .= '<span style="background-color:white;margin-right:2px;">&nbsp;</span>';
                    }

                    $strText = preg_replace('/^' . $strSpaces . '/m', $strSpanSpaces, $strText);
                }
            }

            if (preg_match_all('/\s+$/m', $strText, $arrMatches)) {
                foreach($arrMatches[0] as $strSpaces) {
                    foreach(str_split($strSpaces) as $strSpaceCharacter) {
                        $strSpanSpaces .= '<span class="whitespace">&nbsp;</span>';
                    }

                    $strText = preg_replace('/' . $strSpaces . '$/m', $strSpanSpaces, $strText);
                }
            }

            return $strText;
        }

    }
?>