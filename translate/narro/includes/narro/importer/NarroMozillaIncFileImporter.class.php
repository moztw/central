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

    class NarroMozillaIncFileImporter extends NarroFileImporter {

        public function ImportFile($strTemplateFile, $strTranslatedFile = null) {
            $intTime = time();

            if ($strTranslatedFile)
                $strTranslatedFileContents = file_get_contents($strTranslatedFile);
            else
                $strTranslatedFileContents = file_get_contents($strTemplateFile);

            $strTemplateContents = file_get_contents($strTemplateFile);

            if (strstr($strTemplateContents, '# #define MOZ_LANGPACK_CONTRIBUTORS'))
                $strTemplateContents = preg_replace('/^# #define MOZ_LANGPACK_CONTRIBUTORS.*$/m', '#define MOZ_LANGPACK_CONTRIBUTORS <em:contributor>Joe Solon</em:contributor> <em:contributor>Suzy Solon</em:contributor>', $strTemplateContents);

            if (!$strTranslatedFileContents || !$strTemplateContents)
                return false;

            $arrFileContents = split("\n", $strTranslatedFileContents);
            $arrTemplateContents = split("\n", $strTemplateContents);

            foreach($arrFileContents as $intPos=>$strLine) {
                if (preg_match('/^#define\s+([^\s]+)\s+(.+)$/s', trim($strLine), $arrMatches)) {
                    $arrTranslation[trim($arrMatches[1])] = trim($arrMatches[2]);
                    if (preg_match('/&([a-zA-Z])/', trim($arrMatches[2]), $arrKeyMatches)) {
                        $arrTranslationAccKeys[trim($arrMatches[1])] = $arrKeyMatches[1];
                        $arrTranslation[trim($arrMatches[1])] = str_replace('&' . $arrKeyMatches[1], $arrKeyMatches[1], trim($arrMatches[2]));
                    }

                }
            }

            $strContext = '';
            foreach($arrTemplateContents as $intPos=>$strLine) {
                if (preg_match('/^#define\s+([^\s]+)\s+(.+)$/s', trim($strLine), $arrMatches)) {
                    $arrTemplate[trim($arrMatches[1])] = trim($arrMatches[2]);
                    $arrTemplateComments[trim($arrMatches[1])] = $strContext;
                    if (preg_match('/&([a-zA-Z])/', trim($arrMatches[2]), $arrKeyMatches)) {
                        $arrTemplateAccKeys[trim($arrMatches[1])] = $arrKeyMatches[1];
                        $arrTemplate[trim($arrMatches[1])] = str_replace('&' . $arrKeyMatches[1], $arrKeyMatches[1], trim($arrMatches[2]));
                    }

                    $strContext = '';
                }
                elseif (strlen($strLine) > 2)
                    $strContext .= $strLine . "\n";
            }

            $intElapsedTime = time() - $intTime;
            if ($intElapsedTime > 0)
                NarroLog::LogMessage(1, sprintf('Inc file %s preprocessing took %d seconds.', $this->objFile->FileName, $intElapsedTime));

            NarroLog::LogMessage(1, sprintf('Found %d contexts in file %s.', count($arrTemplate), $this->objFile->FileName));

            if (is_array($arrTemplate))
                foreach($arrTemplate as $strKey=>$strVal) {
                    $this->AddTranslation(
                                $strVal,
                                isset($arrTemplateAccKeys[$strKey])?$arrTemplateAccKeys[$strKey]:null,
                                $arrTranslation[$strKey],
                                isset($arrTranslationAccKeys[$strKey])?$arrTranslationAccKeys[$strKey]:null,
                                trim($strKey),
                                $arrTemplateComments[$strKey]
                    );
                }
            else {
                NarroLog::LogMessage(2, sprintf('Found a empty template (%s), copying the original', $strTemplateFile));
                copy($strTemplateFile, $strTranslatedFile);
                chmod($strTranslatedFile, 0666);
            }

        }

        public function ExportFile($strTemplateFile, $strTranslatedFile) {
            $strTemplateContents = file_get_contents($strTemplateFile);

            if (!$strTemplateContents) {
                NarroLog::LogMessage(2, sprintf('Found a empty template (%s), copying the original', $strTemplateFile));
                copy($strTemplateFile, $strTranslatedFile);
                chmod($strTranslatedFile, 0666);
                return false;
            }

            if (strstr($strTemplateContents, '#define MOZ_LANGPACK_CONTRIBUTORS'))
                $strTemplateContents = preg_replace('/^#\s+#define MOZ_LANGPACK_CONTRIBUTORS.*$/m', '#define MOZ_LANGPACK_CONTRIBUTORS <em:contributor>Joe Solon</em:contributor> <em:contributor>Suzy Solon</em:contributor>', $strTemplateContents);

            $arrTemplateContents = split("\n", $strTemplateContents);

            foreach($arrTemplateContents as $intPos=>$strLine) {
                if (preg_match('/^#define\s+([^\s]+)\s+(.+)$/s', trim($strLine), $arrMatches)) {
                    $arrTemplate[trim($arrMatches[1])] = trim($arrMatches[2]);
                    $arrTemplateLines[trim($arrMatches[1])] = $arrMatches[0];
                }
                elseif (trim($strLine) != '' && $strLine[0] != '#')
                    NarroLog::LogMessage(1, sprintf('Skipped line "%s" from the template "%s".', $strLine, $this->objFile->FileName));
            }

            $strTranslateContents = '';

            if (count($arrTemplate) < 1) return false;

            $arrTranslationObjects =
                NarroContextInfo::QueryArray(
                    QQ::AndCondition(
                        QQ::Equal(QQN::NarroContextInfo()->Context->FileId, $this->objFile->FileId),
                        QQ::Equal(QQN::NarroContextInfo()->LanguageId, NarroApp::GetLanguageId()),
                        QQ::Equal(QQN::NarroContextInfo()->Context->Active, 1)
                    )
                );

            foreach($arrTranslationObjects as $objNarroContextInfo) {
                if ($objNarroContextInfo->ValidSuggestionId > 0) {
                    $arrTranslation[$objNarroContextInfo->Context->Context] = $this->GetExportedSuggestion($objNarroContextInfo);

                    if ($arrTranslation[$objNarroContextInfo->Context->Context] === false)
                        $arrTranslation[$objNarroContextInfo->Context->Context] = $objNarroContextInfo->Context->Text->TextValue;

                    if ($objNarroContextInfo->TextAccessKey) {
                        if ($objNarroContextInfo->SuggestionAccessKey)
                            $strAccessKey = $objNarroContextInfo->SuggestionAccessKey;
                        else
                            $strAccessKey = $objNarroContextInfo->TextAccessKey;

                        $arrTranslation[$objNarroContextInfo->Context->Context] = preg_replace('/' . $strAccessKey . '/', '&' . $strAccessKey, $arrTranslation[$objNarroContextInfo->Context->Context] , 1);

                        NarroImportStatistics::$arrStatistics['Texts that have access keys']++;
                    }
                    else
                        NarroImportStatistics::$arrStatistics["Texts that don't have access keys"]++;
                }
                else {
                    NarroLog::LogMessage(1, sprintf('In file "%s", the context "%s" does not have a valid suggestion.', $this->objFile->FileName, $objNarroContextInfo->Context->Context));
                    NarroImportStatistics::$arrStatistics['Texts without valid suggestions']++;
                    NarroImportStatistics::$arrStatistics['Texts kept as original']++;
                }
            }


            $strTranslateContents = $strTemplateContents;

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
                        NarroLog::LogMessage(2, sprintf('A plugin returned an unexpected result while processing the suggestion "%s": %s', $arrTranslation[$strKey], var_export($arrResult, true)));

                    if (strstr($strTranslateContents, sprintf('#define %s %s', $strKey, $strOriginalText)))
                        $strTranslateContents = str_replace(sprintf('#define %s %s', $strKey, $strOriginalText), sprintf('#define %s %s', $strKey, $arrTranslation[$strKey]), $strTranslateContents);
                    else
                        NarroLog::LogMessage(2, sprintf('Can\'t find "%s" in the file "%s"'), $strKey . $strGlue . $strOriginalText, $this->objFile->FileName);

                    if (strstr($arrTranslation[$strKey], "\n")) {
                        NarroLog::LogMessage(2, sprintf('Skpping translation "%s" because it has a newline in it'), $arrTranslation[$strKey]);
                        continue;
                    }

                }
                else {
                    NarroLog::LogMessage(1, sprintf('Couldn\'t find the key "%s" in the translations, using the original text.', $strKey, $this->objFile->FileName));
                    NarroImportStatistics::$arrStatistics['Texts kept as original']++;
                }
            }

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
