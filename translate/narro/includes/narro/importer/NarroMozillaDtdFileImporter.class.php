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

    class NarroMozillaDtdFileImporter extends NarroMozillaFileImporter {

        public function ImportFile($strTemplateFile, $strTranslatedFile = null) {
            $intTime = time();

            $strEntitiesAndCommentsRegex = '/<!--\s*(.+)\s*-->\s+<!ENTITY\s+([^\s]+)\s+"([^"]+)"\s?>\s*|<!ENTITY\s+([^\s]+)\s+"([^"]*)"\s?>\s*|<!--\s*(.+)\s*-->\s+<!ENTITY\s+([^\s]+)\s+\'([^\']+)\'\s?>\s*|<!ENTITY\s+([^\s]+)\s+\'([^\']*)\'\s?>\s*/m';
            $strEntitiesRegex = '/<!ENTITY\s+([^\s]+)\s+"([^"]*)"\s?>\s*|<!ENTITY\s+([^\s]+)\s+\'([^\']*)\'\s?>\s*/m';

            /**
             * If a translation file exists, process it so the suggestions in it are imported
             */
            if ($strTranslatedFile) {
                $strTranslatedFileContents = file_get_contents($strTranslatedFile);
                if ($strTranslatedFileContents) {
                    /**
                     * Fetch all entities, we don't care about comments in the translation file
                     */
                    if (preg_match_all($strEntitiesRegex, $strTranslatedFileContents, $arrMatches)) {
                        foreach($arrMatches[1] as $intPos=>$strContextKey) {
                            if (trim($arrMatches[2][$intPos]) != '')
                                $arrTranslation[$arrMatches[1][$intPos]] = $arrMatches[2][$intPos];
                            else
                                $arrTranslation[$arrMatches[3][$intPos]] = $arrMatches[4][$intPos];
                        }
                        list($arrTranslation, $arrTranslationAccKeys) = $this->GetAccessKeys($arrTranslation);

                    }
                    else {
                        NarroLog::LogMessage(2, sprintf('No entities found in translation file %s', $strTranslatedFile));
                    }
                }
                else
                    NarroLog::LogMessage(2, sprintf('Failed to open file %s', $strTranslatedFile));
            }
            else
                $strTranslatedFileContents = false;

            /**
             * Process template with original texts, contexts and context comments
             */
            $strTemplateContents = file_get_contents($strTemplateFile);

            /**
             * handle the credits.translation
             */
            if ($strTemplateContents) {
                if (strstr($strTemplateContents, 'credit.translation'))
                    $strTemplateContents = preg_replace('/<!ENTITY\s+credit.translation\s+"">/', '<!ENTITY credit.translation "<h3>Translators</h3><ul><li>Name Here</li></ul>">', $strTemplateContents);

                /**
                 * Fetch all entities and eventual comments before them
                 */
                if (preg_match_all($strEntitiesAndCommentsRegex, $strTemplateContents, $arrTemplateMatches)) {
                    /**
                     * Do a second match only for entities to make sure that comments matching didn't do something unexpected
                     */
                    if (preg_match_all($strEntitiesRegex, $strTemplateContents, $arrCheckMatches)) {
                        /**
                         * Build an array with context as keys and original texts as value
                         */
                        foreach($arrTemplateMatches[1] as $intPos=>$strContextKey) {
                            if (trim($arrTemplateMatches[2][$intPos]) != '') {
                                $arrTemplate[$arrTemplateMatches[2][$intPos]] = $arrTemplateMatches[3][$intPos];
                                $arrTemplateComments[$arrTemplateMatches[2][$intPos]] = $arrTemplateMatches[1][$intPos];
                            }
                            elseif (trim($arrTemplateMatches[4][$intPos]) != '')
                                $arrTemplate[$arrTemplateMatches[4][$intPos]] = $arrTemplateMatches[5][$intPos];
                            elseif (trim($arrTemplateMatches[7][$intPos]) != '') {
                                $arrTemplate[$arrTemplateMatches[7][$intPos]] = $arrTemplateMatches[8][$intPos];
                                $arrTemplateComments[$arrTemplateMatches[7][$intPos]] = $arrTemplateMatches[6][$intPos];
                            }
                            elseif (trim($arrTemplateMatches[9][$intPos]) != '')
                                $arrTemplate[$arrTemplateMatches[9][$intPos]] = $arrTemplateMatches[10][$intPos];

                        }

                        /**
                         * add po style access keys instead of keeping separate entries for access keys
                         */

                        list($arrTemplate, $arrTemplateKeys) = $this->GetAccessKeys($arrTemplate);

                        $intElapsedTime = time() - $intTime;
                        if ($intElapsedTime > 0)
                            NarroLog::LogMessage(1, sprintf('DTD file %s processing took %d seconds.', $this->objFile->FileName, $intElapsedTime));

                        NarroLog::LogMessage(1, sprintf('Found %d contexts in file %s.', count($arrTemplate), $this->objFile->FileName));

                        foreach($arrTemplate as $strContextKey=>$strOriginalText) {
                            if (isset($arrTranslation) && isset($arrTranslation[$strContextKey]))
                                $strTranslation = $arrTranslation[$strContextKey];
                            else
                                $strTranslation = false;

                            if (isset($arrTemplateComments) && isset($arrTemplateComments[$strContextKey]))
                                $strContextComment = $arrTemplateComments;
                            else
                                $strContextComment = null;

                            $this->AddTranslation(
                                        $strOriginalText,
                                        isset($arrTemplateKeys[$strContextKey])?$arrTemplateKeys[$strContextKey]:null,
                                        $strTranslation,
                                        isset($arrTranslationAccKeys[$strContextKey])?$arrTranslationAccKeys[$strContextKey]:null,
                                        trim($strContextKey),
                                        $strContextComment[$strContextKey]
                            );
                        }
                    }
                    elseif (count($arrCheckMatches[0]) != count($arrTemplateMatches[0]))
                        NarroLog::LogMessage(3, sprintf('Error on matching expressions in file %s', $strTemplateFile));
                    else
                        NarroLog::LogMessage(2, sprintf('No entities found in file %s', $strTemplateFile));
                }
                else
                    NarroLog::LogMessage(2, sprintf('No entities found in template file %s', $strTemplateFile));
            }
            else {
                NarroLog::LogMessage(2, sprintf('No contexts found in file: %s', $strTemplateFile));
                NarroLog::LogMessage(2, sprintf('Found a empty template (%s), copying the original', $strTemplateFile));
                copy($strTemplateFile, $strTranslatedFile);
                chmod($strTranslatedFile, 0666);
                return false;
            }
        }

        public function ExportFile($strTemplateFile, $strTranslatedFile) {
            NarroLog::LogMessage(1, sprintf('Exporting %s using %s', $strTemplateFile, __CLASS__));
            $strTemplateContents = file_get_contents($strTemplateFile);

            if (!$strTemplateContents) {
                NarroLog::LogMessage(2, sprintf('Found a empty template (%s), copying the original', $strTemplateFile));
                copy($strTemplateFile, $strTranslatedFile);
                chmod($strTranslatedFile, 0666);
                return false;
            }

            preg_match_all('/<!ENTITY\s+([^\s]+)\s+"([^"]*)"\s?>/m', $strTemplateContents, $arrTemplateMatches);

            if (is_array($arrTemplateMatches))
                foreach($arrTemplateMatches[1] as $intPos=>$strVal) {
                        $arrTemplate[$strVal] = $arrTemplateMatches[2][$intPos];
                        $arrTemplateLines[$strVal] = $arrTemplateMatches[0][$intPos];
                }

            preg_match_all('/<!ENTITY\s+([^\s]+)\s+\'([^\']*)\'\s?>/m', $strTemplateContents, $arrTemplateMatches);

            if (is_array($arrTemplateMatches))
                foreach($arrTemplateMatches[1] as $intPos=>$strVal) {
                        $arrTemplate[$strVal] = $arrTemplateMatches[2][$intPos];
                        $arrTemplateLines[$strVal] = $arrTemplateMatches[0][$intPos];
                }

            if (!is_array($arrTemplate) || count($arrTemplate) == 0) {
                NarroLog::LogMessage(2, sprintf('No contexts found in %s', $strTemplateFile));
                return false;
            }

            NarroLog::LogMessage(1, sprintf('Found %d contexts in %s', count($arrTemplate), $strTemplateFile));

            $strTranslateContents = '';

            $arrTranslation = $this->GetTranslations($this->objFile, $arrTemplate);

            foreach($arrTemplate as $strKey=>$strOriginalText) {
                if (isset($arrTranslation[$strKey])) {
                    $arrResult = NarroApp::$PluginHandler->ExportSuggestion($strOriginalText, $arrTranslation[$strKey], $strKey, $this->objFile, $this->objProject);
                    if
                    (
                        trim($arrResult[1]) != '' &&
                        $arrResult[0] == $strOriginalText &&
                        $arrResult[2] == $strKey &&
                        $arrResult[3] == $this->objFile &&
                        $arrResult[4] == $this->objProject
                    ) {

                        $arrTranslation[$strKey] = $arrResult[1];
                    }
                    else
                        NarroLog::LogMessage(2, sprintf('A plugin returned an unexpected result while processing the suggestion "%s": %s', $arrTranslation[$strKey], print_r($arrResult, true)));

                    $strTranslatedLine = str_replace('"' . $arrTemplate[$strKey] . '"', '"' . $arrTranslation[$strKey] . '"', $arrTemplateLines[$strKey]);
                    /**
                     * try again with simple quotes
                     */
                    if ($strTranslatedLine == $arrTemplateLines[$strKey])
                        $strTranslatedLine = str_replace("'" . $arrTemplate[$strKey] . "'", "'" . $arrTranslation[$strKey] . "'", $arrTemplateLines[$strKey]);

                    if ($strTranslatedLine)
                        $strTemplateContents = str_replace($arrTemplateLines[$strKey], $strTranslatedLine, $strTemplateContents);
                    else
                        NarroLog::LogMessage(3, sprintf('In file "%s", failed to replace "%s"', 'str_replace("' . $arrTemplate[$strKey] . '"' . ', "' . $arrTranslation[$strKey] . '", ' . $arrTemplateLines[$strKey] . ');'));
                }
                else {
                    NarroLog::LogMessage(1, sprintf('Couldn\'t find the key "%s" in the translations for "%s" from the file "%s". Using the original text.', $strKey, $strOriginalText, $this->objFile->FileName));
                    NarroImportStatistics::$arrStatistics['Texts kept as original']++;
                }
            }

            $strTranslateContents = $strTemplateContents;

            if (file_exists($strTranslatedFile) && !is_writable($strTranslatedFile) && !unlink($strTranslatedFile)) {
                NarroLog::LogMessage(3, sprintf('Can\'t delete the file "%s"', $strTranslatedFile));
            }

            if (!file_put_contents($strTranslatedFile, $strTranslateContents)) {
                NarroLog::LogMessage(3, sprintf('Can\'t write to file "%s"', $strTranslatedFile));
            }

            chmod($strTranslatedFile, 0666);
        }
    }
?>
