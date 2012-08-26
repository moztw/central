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
    class NarroPunctuationCheck extends NarroPlugin {

        public function __construct() {
            parent::__construct();
            $this->strName = t('Punctuation check');
            $this->Enable();
        }

        public function SaveSuggestion($strOriginal, $strTranslation, $strContext, $objFile, $objProject) {
            return $this->ApproveSuggestion($strOriginal, $strTranslation, $strContext, $objFile, $objProject);
        }

        public function ApproveSuggestion($strOriginal, $strTranslation, $strContext, $objFile, $objProject) {

            preg_match('/[\.\!\?\:]+$/', $strOriginal, $arrOriginalTextMatches);
            preg_match('/[\.\!\?\:]+$/', $strTranslation, $arrSuggestionMatches);

            if (isset($arrOriginalTextMatches[0]) && !isset($arrSuggestionMatches[0])) {
                    $this->arrErrors[] =
                        sprintf(
                            t('<span style="color:red">Did you forget the ending "<span style="color:red;font-size:large">%s</span>"?</span>'),
                        $arrOriginalTextMatches[0]
                        );
            }
            elseif (!isset($arrOriginalTextMatches[0]) && isset($arrSuggestionMatches[0])) {
                if (preg_match('/\s+$/', $strOriginal, $arrSpaceMatches))
                    $this->arrErrors[] =
                        sprintf(
                            t('The original text ends with %d space character(s), please correct your suggestion.'
                            ),
                            strlen($arrSpaceMatches[0])
                        );
                else
                    $this->arrErrors[] =
                        sprintf(
                            t('The original text does not end with "<span style="color:red;font-size:large">%s</span>".'
                            ),
                            $arrSuggestionMatches[0]
                        );
            }
            elseif (isset($arrOriginalTextMatches[0]) && isset($arrSuggestionMatches[0]) && $arrOriginalTextMatches[0] != $arrSuggestionMatches[0]) {
                    $this->arrErrors[] =
                        sprintf(
                            t(
                                'The original text ends with "<span style="color:green;font-size:large">%s</span>", but your suggestion ends in "<span style="color:red;font-size:large">%s</span>".'
                            ),
                            $arrOriginalTextMatches[0],
                            $arrSuggestionMatches[0]
                        );
            }

            $intLeadingTextSpaces = 0;
            $intLeadingTranslationSpaces = 0;
            $intTrailingTextSpaces = 0;
            $intTrailingTranslationSpaces = 0;

            if (preg_match_all('/^\s+/m', $strOriginal, $arrMatches))
                $intLeadingTextSpaces = strlen($arrMatches[0][0]);

            if (preg_match_all('/^\s+/m', $strTranslation, $arrMatches))
                $intLeadingTranslationSpaces = strlen($arrMatches[0][0]);

            if (preg_match_all('/\s+$/m', $strOriginal, $arrMatches))
                $intTrailingTextSpaces = strlen($arrMatches[0][0]);

            if (preg_match_all('/\s+$/m', $strTranslation, $arrMatches))
                $intTrailingTranslationSpaces = strlen($arrMatches[0][0]);

            if ($intLeadingTextSpaces != $intLeadingTranslationSpaces && $intTrailingTextSpaces != $intTrailingTranslationSpaces)
                $this->arrErrors[] =
                        sprintf(
                            t(
                                'The original text has %d leading spaces and %d trailing spaces, your suggestion has %d leading spaces and %d trailing spaces.'
                            ),
                            $intLeadingTextSpaces,
                            $intLeadingTranslationSpaces,
                            $intTrailingTextSpaces,
                            $intTrailingTranslationSpaces
                        );
            elseif ($intLeadingTextSpaces != $intLeadingTranslationSpaces)
                $this->arrErrors[] =
                        sprintf(
                            t(
                                'The original text has %d leading spaces, your suggestion has %d.'
                            ),
                            $intLeadingTextSpaces,
                            $intLeadingTranslationSpaces
                        );
            elseif ($intTrailingTextSpaces != $intTrailingTranslationSpaces)
                $this->arrErrors[] =
                        sprintf(
                            t(
                                'The original text has %d trailing spaces, your suggestion has %d.'
                            ),
                            $intTrailingTextSpaces,
                            $intTrailingTranslationSpaces
                        );

            return array($strOriginal, $strTranslation, $strContext, $objFile, $objProject);
        }
    }
?>