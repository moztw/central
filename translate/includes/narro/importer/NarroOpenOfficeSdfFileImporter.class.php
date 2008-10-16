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

    class NarroOpenOfficeSdfFileImporter extends NarroFileImporter {

        public function ExportFile($strTemplateFile, $strTranslatedFile) {
            $hndTemplateFile = fopen($strTemplateFile, 'r');
            if (!$hndTemplateFile) {
                NarroLog::LogMessage(3, __LINE__ . ':' . sprintf(t('Can\'t open file "%s" for reading'), $strTemplateFile));
                return false;
            }

            $hndTranslatedFile = @fopen($strTranslatedFile, 'w');

            if (!$hndTranslatedFile)
                throw new Exception(sprintf('Can\'t open file "%s" for writing', $strTranslatedFile));

            $intTotalToProcess = NarroUtils::CountFileLines($strTemplateFile);

            NarroLog::LogMessage(1, __LINE__ . ':' . sprintf(t('Starting to process file "%s" (%d texts), the result is written to "%s".'), $strTemplateFile, $intTotalToProcess, $strTranslatedFile));

            $intFileLineNr=0;

            while(!feof($hndTemplateFile)) {

                $strFileLine = fgets($hndTemplateFile, 4096);
                $intFileLineNr++;

                NarroProgress::SetProgress((int) ceil(($intFileLineNr*100)/$intTotalToProcess));

                $arrColumn = preg_split('/\t/', $strFileLine);

                /**
                 * Unset a number before language code
                 */
                $arrColumn[8] = '';

                /**
                 * skip help
                 */
                if ($arrColumn[0] == 'helpcontent2') continue;

                if (count($arrColumn) != 15) {
                    NarroLog::LogMessage(2, __LINE__ . ':' . sprintf('Skipped "%s" because splitting by tab does not give 14 columns.', $strFileLine));
                    continue;
                }

                $arrTranslatedColumn = $arrColumn;

                $strLangCode = $arrColumn[9];
                $strText = $arrColumn[10];

                $strPossibleContext = '';
                /**
                 * positions 8, 9 and 10 contain a number, the language code and the text/translation
                 */
                foreach(array(1, 2, 3, 4, 5, 6, 7, 11, 12, 13, 14) as $intPos) {
                    if (trim($arrColumn[$intPos]) != '' && !is_numeric($arrColumn[$intPos]))
                        $strPossibleContext .= $arrColumn[$intPos] ."\n";
                }
                $strContext = trim($strPossibleContext);

                $arrTranslatedColumn[8] = 0;
                $arrTranslatedColumn[9] = 'ro';

                $objNarroContextInfo = $this->GetContextInfo($strText, $strContext);

                if ($objNarroContextInfo instanceof NarroContextInfo && $objNarroContextInfo->ValidSuggestionId) {
                    $arrResult = QApplication::$objPluginHandler->ExportSuggestion($strText, $objNarroContextInfo->ValidSuggestion->SuggestionValue, $strContext, $objFile, $this->objProject);
                    if
                    (
                        trim($arrResult[1]) != '' &&
                        $arrResult[0] == $strText &&
                        $arrResult[2] == $strContext &&
                        $arrResult[3] == $objFile &&
                        $arrResult[4] == $this->objProject
                    ) {

                        $objNarroContextInfo->ValidSuggestion->SuggestionValue = $arrResult[1];
                    }
                    else
                        NarroLog::LogMessage(2, sprintf(t('A plugin returned an unexpected result while processing the suggestion "%s": %s'), $objNarroContextInfo->ValidSuggestion->SuggestionValue, print_r($arrResult, true)));

                    if ($objNarroContextInfo->TextAccessKey != '' && $objNarroContextInfo->SuggestionAccessKey != '') {
                        $objNarroContextInfo->ValidSuggestion->SuggestionValue = NarroString::Replace($objNarroContextInfo->SuggestionAccessKey, '~' . $objNarroContextInfo->SuggestionAccessKey, $objNarroContextInfo->ValidSuggestion->SuggestionValue, 1);
                    }

                    $arrTranslatedColumn[10] = str_replace(array("\n", "\r"), array("",""), $objNarroContextInfo->ValidSuggestion->SuggestionValue);
                }
                else {
                    NarroLog::LogMessage(1, sprintf('Nothing found in the database for text %s and context %s', $strText, $strContext . ' ' . md5($strContext)));
                    continue;
                }

                preg_match_all('/\\\\"/', $strText, $arrEscOrigMatches);
                preg_match_all('/\\\\"/', $objNarroContextInfo->ValidSuggestion->SuggestionValue, $arrEscTransMatches);

                if (isset($arrEscOrigMatches[0])) {
                    if (!isset($arrEscTransMatches[0])) {
                        NarroLog::LogMessage(3, __LINE__ . ':' . sprintf('Warning! The original text "%s" has some doube quotes but the translated text "%s" doesn\'t.', $strText, $objNarroContextInfo->ValidSuggestion->SuggestionValue));
                        continue;
                    }

                    if (count($arrEscOrigMatches[0]) != count($arrEscTransMatches[0])) {
                        NarroLog::LogMessage(3, __LINE__ . ':' . sprintf('Warning! The original text "%s" has some double quotes but the translated text "%s" has less or more of them.', $strText, $objNarroContextInfo->ValidSuggestion->SuggestionValue));
                        continue;
                    }
                }

                fwrite($hndTranslatedFile, join("\t", $arrColumn));
                fwrite($hndTranslatedFile, join("\t", $arrTranslatedColumn));

            }

            fclose($hndTemplateFile);
            fclose($hndTranslatedFile);
            chmod($strTranslatedFile, 0666);
        }

        public function ImportFile($strTemplateFile, $strTranslatedFile = null) {
            $objDatabase = QApplication::$Database[1];
            /**
             * Open the template file
             */
            $hndFile = fopen($strTemplateFile, 'r');

            if (!$hndFile) {
                NarroLog::LogMessage(3, sprintf(t('Cannot open input file "%s" for reading.'), $strTemplateFile));
                return false;
            }

            $intTotalToProcess = NarroUtils::CountFileLines($strTemplateFile);
            $intProcessedSoFar = 0;

            /**
             * read the template file line by line
             */
            while(!feof($hndFile)) {
                $strFileLine = fgets($hndFile, 16384);
                $intProcessedSoFar++;
                NarroProgress::SetProgress((int) ceil(($intProcessedSoFar*100)/$intTotalToProcess));

                /**
                 * OpenOffice uses tab separated values
                 */
                $arrColumn = preg_split('/\t/', $strFileLine);

                /**
                 * skip help
                 */
                if ($arrColumn[0] == 'helpcontent2') continue;

                $strLangCode = $arrColumn[9];

                $strPossibleContext = '';
                /**
                 * positions 8, 9 and 10 contain a number, the language code and the text/translation
                 */
                foreach(array(1, 2, 3, 4, 5, 6, 7, 11, 12, 13, 14) as $intPos) {
                    if (trim($arrColumn[$intPos]) != '' && !is_numeric($arrColumn[$intPos]))
                        $strPossibleContext .= $arrColumn[$intPos] ."\n";
                }
                $strPossibleContext = trim($strPossibleContext);

                /**
                 * Unset some unused fields
                 */
                unset($arrColumn[8]);
                unset($arrColumn[9]);
                unset($arrColumn[9]);

                if ($strLangCode == 1)
                    $strLangCode = 'en-US';

                /**
                 * if we have a line with the target language in the language column, then the previous line was probably the original english value
                 * to be sure, we're checking the context too
                 */
                if ($this->objTargetLanguage->LanguageCode == trim($strLangCode) && isset($strContext) && $strContext == $strPossibleContext) {
                    /**
                     * $strText and $strTextAccKey are kept from the previous cycle
                     */
                    $strTranslation = $arrColumn[10];

                    /**
                     * search for access key if needed
                     */
                    if ($strTextAccKey) {
                        /**
                         * if we import a translation and it already has an access key set, keep it
                         * if not, find one or just use the first usable character
                         */
                        if (preg_match('/~(\w)/', $strTranslation, $arrTranslationAccMatches)) {
                            $strTranslationAccKey = $arrTranslationAccMatches[1];
                        }
                        else {
                            $intPos = mb_stripos($strTranslation, $strTextAccKey);
                            if ($intPos != false)
                                $strTranslationAccKey = mb_substr($strTranslation, $intPos, 1);
                            else {
                                if (preg_match('/(\w)/', $strTranslation, $arrTranslationAccMatches))
                                    $strTranslationAccKey = $arrTranslationAccMatches[1];
                                else
                                    $strTranslationAccKey = mb_substr($strTranslation, 0, 1);
                            }
                        }

                        $strTranslation = mb_ereg_replace('~' . $strTranslationAccKey, $strTranslationAccKey, $strTranslation);
                    }
                    else
                        $strTranslationAccKey = null;

                }
                elseif ($this->objSourceLanguage->LanguageCode == trim($strLangCode) ) {
                    $strText = $arrColumn[10];

                    $strTranslation = null;
                    $strTranslationAccKey = null;

                    if (preg_match('/~(\w)/', $strText, $arrTextAccMatches)) {
                        $strTextAccKey = $arrTextAccMatches[1];
                        $strText = mb_ereg_replace('~' . $strTextAccKey, $strTextAccKey, $strText);
                    }
                    else {
                        $strTextAccKey = null;
                    }
                }
                else {
                    NarroLog::LogMessage(2, sprintf(t('Skipped line "%s" because the language code found "%s" does not match the source or target language. Columns: %s'), $strFileLine, $strLangCode, print_r($arrColumn, true)));
                    continue;
                }

                $strContext = $strPossibleContext;

                $strDate = $arrColumn[14];

                if (!isset($strDate))
                    continue;

                if (!preg_match('/[0-9]{4,4}[\-]?[0-9]{2,2}[\-]?[0-9]{2,2}\s[0-9]{2,2}:[0-9]{2,2}:[0-9]{2,2}/', $strDate)) {
                    NarroLog::LogMessage(2, var_export($strDate,true) . ' not good. Count: ' . count($arrColumn) . var_export($arrColumn, true));
                    continue;
                }

                $this->AddTranslation($strText, $strTextAccKey, $strTranslation, $strTranslationAccKey, $strContext);

                if ($intProcessedSoFar % 10 === 0) {
                    NarroLog::LogMessage(1, sprintf(t("Progress: %s%%"), (int) ceil(($intProcessedSoFar*100)/$intTotalToProcess)));
                }
            }
            fclose($hndFile);
        }
    }
?>
