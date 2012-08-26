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

    class NarroGettextPoFileImporter extends NarroFileImporter {
        private $objCurrentContext;

        protected function getFieldGroups($strFile) {
            // NarroLogger::LogDebug(sprintf('Starting to read contexts from %s', $this->objFile->FileName));

            $arrGroupFields = array();
            if (trim($strFile) == '') return $arrGroupFields;

            $hndFile = fopen($strFile, 'r');
            if ($hndFile) {

                $intCurrentGroup = 1;

                while (!feof($hndFile)) {
                    $arrFields = array();
                    $arrFields['MsgContext'] = null;
                    $arrFields['MsgId'] = null;
                    $arrFields['ExtractedComment'] = null;
                    $arrFields['Reference'] = null;
                    $arrFields['Flag'] = null;
                    $arrFields['PreviousContext'] = null;
                    $arrFields['PreviousUntranslated'] = null;
                    $arrFields['PreviousUntranslatedPlural'] = null;
                    $arrFields['MsgStr'] = null;
                    $arrFields['MsgStr0'] = null;
                    $arrFields['MsgStr1'] = null;
                    $arrFields['MsgStr2'] = null;
                    $arrFields['MsgStr3'] = null;
                    $arrFields['MsgStr4'] = null;
                    $arrFields['MsgStr5'] = null;
                    $arrFields['MsgPluralId'] = null;

                    $strLine = fgets($hndFile, 8192);
                    // NarroLogger::LogDebug('Processing ' . trim($strLine));
                    if (strpos($strLine, '# ') === 0) {
                        // NarroLogger::LogDebug('Found translator comment');
                        $arrFields['TranslatorComment'] = $strLine;
                        while (!feof($hndFile)) {
                            $strLine = fgets($hndFile, 8192);
                            if (strpos($strLine, '# ') === 0)
                                $arrFields['TranslatorComment'] .= $strLine;
                            else
                                break;

                        }
                    }

                    if (strpos($strLine, '#.') === 0) {
                        // NarroLogger::LogDebug('Found extracted comment');
                        $arrFields['ExtractedComment'] = $strLine;
                        while (!feof($hndFile)) {
                            $strLine = fgets($hndFile, 8192);
                            if (strpos($strLine, '#.') === 0)
                                $arrFields['ExtractedComment'] .= $strLine;
                            else
                                break;

                        }
                    }

                    if (strpos($strLine, '#:') === 0) {
                        // NarroLogger::LogDebug('Found reference');
                        /**
                         * Remove the line number from the source file
                         */
                        $arrFields['Reference'] = $strLine;
                        while (!feof($hndFile)) {
                            $strLine = fgets($hndFile, 8192);
                            if (strpos($strLine, '#:') === 0)
                                /**
                                 * Remove the line number from the source file
                                 */
                                $arrFields['Reference'] .= $strLine;
                            else
                                break;
                        }
                    }

                    if (strpos($strLine, '#,') === 0) {
                        // NarroLogger::LogDebug('Found flag');
                        $arrFields['Flag'] = $strLine;
                        while (!feof($hndFile)) {
                            $strLine = fgets($hndFile, 8192);
                            if (strpos($strLine, '#,') === 0)
                                $arrFields['Flag'] .= $strLine;
                            else
                                break;
                        }
                    }

                    if (strpos($strLine, '#| msgctxt') === 0) {
                        // NarroLogger::LogDebug('Found previous context');
                        $arrFields['PreviousContext'] = $strLine;
                        while (!feof($hndFile)) {
                            $strLine = fgets($hndFile, 8192);
                            if (strpos($strLine, '#| msgctxt') === 0)
                                $arrFields['PreviousContext'] .= $strLine;
                            else
                                break;
                        }
                    }

                    if (strpos($strLine, '#| msgid') === 0) {
                        // NarroLogger::LogDebug('Found previous translated string');
                        $arrFields['PreviousUntranslated'] = $strLine;
                        while (!feof($hndFile)) {
                            $strLine = fgets($hndFile, 8192);
                            if (strpos($strLine, '#| msgid') === 0)
                                $arrFields['PreviousUntranslated'] .= $strLine;
                            else
                                break;
                        }
                    }

                    if (strpos($strLine, '#| msgid_plural') === 0) {
                        // NarroLogger::LogDebug('Found previous translated plural string');
                        $arrFields['PreviousUntranslatedPlural'] = $strLine;
                        while (!feof($hndFile)) {
                            $strLine = fgets($hndFile, 8192);
                            if (strpos($strLine, '#| msgid_plural') === 0)
                                $arrFields['PreviousUntranslatedPlural'] .= $strLine;
                            else
                                break;
                        }
                    }

                    if (strpos($strLine, 'msgctxt ') === 0) {
                        // NarroLogger::LogDebug('Found string');
                        preg_match('/msgctxt\s+\"(.*)\"/', $strLine, $arrMatches);
                        $arrFields['MsgContext'] = str_replace('\"', '"', $arrMatches[1]);
                        while (!feof($hndFile)) {
                            $strLine = fgets($hndFile, 8192);
                            if (strpos($strLine, '"') === 0) {
                                $arrFields['MsgContext'] .= str_replace('\"', '"', substr(trim($strLine), 1, strlen(trim($strLine)) - 2));
                            }
                            else
                                break;
                        }
                    }

                    if (strpos($strLine, 'msgid ') === 0) {
                        // NarroLogger::LogDebug('Found msgid');
                        preg_match('/msgid\s+\"(.*)\"/', $strLine, $arrMatches);
                        $arrFields['MsgId'] = str_replace('\"', '"', $arrMatches[1]);
                        while (!feof($hndFile)) {
                            $strLine = fgets($hndFile, 8192);
                            if (strpos($strLine, '"') === 0) {
                                $arrFields['MsgId'] .= str_replace('\"', '"', substr(trim($strLine), 1, strlen(trim($strLine)) - 2));
                            }
                            else
                                break;
                        }
                    }

                    if (strpos($strLine, 'msgid_plural') === 0) {
                        // NarroLogger::LogDebug('Found plural string');
                        preg_match('/msgid_plural\s+\"(.*)\"/', $strLine, $arrMatches);
                        $arrFields['MsgPluralId'] = str_replace('\"', '"', $arrMatches[1]);
                        while (!feof($hndFile)) {
                            $strLine = fgets($hndFile, 8192);
                            if (strpos($strLine, '"') === 0) {
                                $arrFields['MsgPluralId'] .= str_replace('\"', '"', substr(trim($strLine), 1, strlen(trim($strLine)) - 2));
                            }
                            else
                                break;
                        }
                    }

                    if (strpos($strLine, 'msgstr ') === 0) {
                        // NarroLogger::LogDebug('Found translation');
                        preg_match('/msgstr\s+\"(.*)\"/', $strLine, $arrMatches);
                        $arrFields['MsgStr'] = str_replace('\"', '"', $arrMatches[1]);
                        while (!feof($hndFile)) {
                            $strLine = fgets($hndFile, 8192);
                            if (strpos($strLine, '"') === 0) {
                                $arrFields['MsgStr'] .= str_replace('\"', '"', substr(trim($strLine), 1, strlen(trim($strLine)) - 2));
                            }
                            else
                                break;
                        }
                    }

                    if (strpos($strLine, 'msgstr[0]') === 0) {
                        // NarroLogger::LogDebug('Found translation plural 1');
                        preg_match('/msgstr\[0\]\s+\"(.*)\"/', $strLine, $arrMatches);
                        $arrFields['MsgStr0'] = str_replace('\"', '"', $arrMatches[1]);
                        while (!feof($hndFile)) {
                            $strLine = fgets($hndFile, 8192);
                            if (strpos($strLine, '"') === 0) {
                                $arrFields['MsgStr0'] .= str_replace('\"', '"', substr(trim($strLine), 1, strlen(trim($strLine)) - 2));
                            }
                            else
                                break;
                        }
                    }

                    if (strpos($strLine, 'msgstr[1]') === 0) {
                        // NarroLogger::LogDebug('Found translation plural 2');
                        preg_match('/msgstr\[1\]\s+\"(.*)\"/', $strLine, $arrMatches);
                        $arrFields['MsgStr1'] = str_replace('\"', '"', $arrMatches[1]);
                        while (!feof($hndFile)) {
                            $strLine = fgets($hndFile, 8192);
                            if (strpos($strLine, '"') === 0) {
                                $arrFields['MsgStr1'] .= str_replace('\"', '"', substr(trim($strLine), 1, strlen(trim($strLine)) - 2));
                            }
                            else
                                break;
                        }
                    }

                    if (strpos($strLine, 'msgstr[2]') === 0) {
                        // NarroLogger::LogDebug('Found translation plural 3');
                        preg_match('/msgstr\[2\]\s+\"(.*)\"/', $strLine, $arrMatches);
                        $arrFields['MsgStr2'] = str_replace('\"', '"', $arrMatches[1]);
                        while (!feof($hndFile)) {
                            $strLine = fgets($hndFile, 8192);
                            if (strpos($strLine, '"') === 0) {
                                $arrFields['MsgStr2'] .= str_replace('\"', '"', substr(trim($strLine), 1, strlen(trim($strLine)) - 2));
                            }
                            else
                                break;
                        }
                    }

                    /**
                     * Remove the source line numbers from the context, they change too often
                     */
                    $arrFields['Context'] =  trim($arrFields['MsgContext']);
                    $arrFields['ContextComment'] =
                        $arrFields['ExtractedComment'] .
                        preg_replace('/(:[0-9]+)/m', '', $arrFields['Reference']) .
                        $arrFields['Flag'] .
                        $arrFields['PreviousContext'] .
                        $arrFields['PreviousUntranslated'] .
                        $arrFields['PreviousUntranslatedPlural'];

                    if (!is_null($arrFields['MsgId'])) $arrFields['MsgId'] = str_replace('\"', '"', $arrFields['MsgId']);
                    if (!is_null($arrFields['MsgStr'])) $arrFields['MsgStr'] = str_replace('\"', '"', $arrFields['MsgStr']);

                    if (!is_null($arrFields['MsgPluralId'])) $arrFields['MsgPluralId'] = str_replace('\"', '"', $arrFields['MsgPluralId']);
                    if (!is_null($arrFields['MsgStr0'])) $arrFields['MsgStr0'] = str_replace('\"', '"', $arrFields['MsgStr0']);
                    if (!is_null($arrFields['MsgStr1'])) $arrFields['MsgStr1'] = str_replace('\"', '"', $arrFields['MsgStr1']);
                    if (!is_null($arrFields['MsgStr2'])) $arrFields['MsgStr2'] = str_replace('\"', '"', $arrFields['MsgStr2']);

                    if ((!isset($arrFields['MsgId']) && !isset($arrFields['MsgPluralId'])) || (!isset($arrFields['MsgStr']) && !isset($arrFields['MsgStr0'])))
                        continue;


                    $i = 1;
                    while(isset($arrGroupFields[$arrFields['MsgId'] . $arrFields['Context']])) {
                        // NarroLogger::LogDebug(sprintf('Found duplicate key for "%s", "%s", trying %s%s%d', $arrFields['MsgId'], $arrFields['Context'], $arrFields['MsgId'], $arrFields['Context'], $i));
                        $arrFields['Context'] = $arrFields['Context'] . $i;
                        $i++;
                    }

                    $intCurrentGroup++;

                    $arrGroupFields[$arrFields['MsgId'] . $arrFields['Context']] = $arrFields;
                }
            }
            else {
                NarroLogger::LogError(sprintf('Cannot read "%s".', $strFile));
            }

            // NarroLogger::LogDebug(sprintf('Done reading contexts from %s', $this->objFile->FileName));

            return $arrGroupFields;
        }

        public function ExportFile($strTemplate, $strTranslatedFile) {
            $hndExportFile = fopen($strTranslatedFile, 'w');
            if (!$hndExportFile) {
                NarroLogger::LogError(sprintf('Cannot create or write to "%s".', $strTranslatedFile));
                return false;
            }
            
            if ($this->objProject->GetPreferenceValueByName('Export translators and reviewers in the file header as a comment') == 'Yes') {
                $arrUsers = array();
                foreach($this->objFile->GetTranslatorArray($this->objTargetLanguage->LanguageId) as $objUser) {
                    $arrUsers[] = sprintf("# %s <%s>", $objUser->RealName, $objUser->Email);
                }
            
                if (count($arrUsers))
                    fwrite($hndExportFile, sprintf("# Translator(s):\n#\n%s\n#\n", join("\n", $arrUsers)));
            
                $arrUsers = array();
                foreach($this->objFile->GetReviewerArray($this->objTargetLanguage->LanguageId) as $objUser) {
                    $arrUsers[] = sprintf("# %s <%s>", $objUser->RealName, $objUser->Email);
                }
            
                if (count($arrUsers))
                    fwrite($hndExportFile, sprintf("# Reviewer(s):\n#\n%s\n#\n", join("\n", $arrUsers)));
            }

            $arrTemplateFile = $this->getFieldGroups($strTemplate);
            $intTotalContexts = count($arrTemplateFile);
            $intCurrentContext = 0;
            foreach($arrTemplateFile as $strIndex=>$arrTemplateFields) {
                $intCurrentContext++;
                NarroProgress::SetProgressPerFile(($intCurrentContext/$intTotalContexts)*100, $this->objProject->ProjectId, 'export');


                $this->objCurrentContext = null;

                if (!is_null($arrTemplateFields['MsgId'])) $arrTemplateFields['MsgId'] = str_replace('\"', '"', $arrTemplateFields['MsgId']);
                if (!is_null($arrTemplateFields['MsgStr'])) $arrTemplateFields['MsgStr'] = str_replace('\"', '"', $arrTemplateFields['MsgStr']);

                if (!is_null($arrTemplateFields['MsgPluralId'])) $arrTemplateFields['MsgPluralId'] = str_replace('\"', '"', $arrTemplateFields['MsgPluralId']);

                if (isset($arrTemplateFields['MsgPluralId']))
                    for($intPluralId=0; $intPluralId < $this->objTargetLanguage->Plurals; $intPluralId++) {
                        $arrTemplateFields['MsgStr' . $intPluralId] = str_replace('\"', '"', $arrTemplateFields['MsgStr' . $intPluralId]);
                    }

                /**
                 * if it's not a plural, just add msgid and msgstr
                 */
                if (is_null($arrTemplateFields['MsgPluralId'])) {
                    /**
                     * Leave the header alone
                     */
                    if ($arrTemplateFields['MsgId'] == '' && strstr($arrTemplateFields['MsgStr'], 'Project-Id-Version')) {
                        /**
                         * This is the header
                         */

                        /**
                         * unset the flag, if is set
                         */
                        unset($arrTemplateFields['Flag']);
                        /**
                         * At import, we concatenate strings on more than one lines, so now we have to restore it
                         */
                        $arrTemplateFields['MsgStr'] = str_replace('\n', '\\n"' . "\n" . '"', $arrTemplateFields['MsgStr']);
                        /**
                         * There's an extra " at the end, remove it
                         */
                        $arrTemplateFields['MsgStr'] = trim(preg_replace('/"$/', '', $arrTemplateFields['MsgStr']));

                        if (strstr($arrTemplateFields['MsgStr'], '"Plural-Forms')) {
                            /**
                             * the plural declaration is there, try to replace it
                             */
                            $arrTemplateFields['MsgStr'] = preg_replace('/"Plural-Forms:[^"]+"/mi', $this->objTargetLanguage->PluralForm, $arrTemplateFields['MsgStr']);
                        }
                        else {
                            /**
                             * the plural declaration isn't there, try to change it
                             */
                            $arrTemplateFields['MsgStr'] .= "\n" . $this->objTargetLanguage->PluralForm;
                        }

                        /**
                         * There's an extra " at the end, remove it
                         */
                        $arrTemplateFields['MsgStr'] = trim(preg_replace('/"$/', '', $arrTemplateFields['MsgStr']));

                        $strGeneratorLine = sprintf('X-Generator: Narro %s on %s\n', NARRO_VERSION, __HTTP_URL__ . __VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__);

                        if (strstr($arrTemplateFields['MsgStr'], '"X-Generator:'))
                            $arrTemplateFields['MsgStr'] = $strGeneratorLine;
                        else
                            $arrTemplateFields['MsgStr'] .= '"' . "\n" . '"' . $strGeneratorLine ;

                        $strProjectLine = sprintf('Project-Id-Version: %s\n', $this->objProject->ProjectName);

                        if (strstr($arrTemplateFields['MsgStr'], 'Project-Id-Version:'))
                            $arrTemplateFields['MsgStr'] = preg_replace('/Project\-Id\-Version:[^"]+/mi', $strProjectLine, $arrTemplateFields['MsgStr']);
                        else
                            $arrTemplateFields['MsgStr'] .= '"' . "\n" . '"' . $strProjectLine ;

                        $strCharsetLine = sprintf('Content-Type: text/plain; charset=%s\n', $this->objTargetLanguage->Encoding);

                        if (strstr($arrTemplateFields['MsgStr'], '"Content-Type:'))
                            $arrTemplateFields['MsgStr'] = preg_replace('/Content\-Type:[^"]+/mi', $strCharsetLine, $arrTemplateFields['MsgStr']);
                        else
                            $arrTemplateFields['MsgStr'] .= '"' . "\n" . '"' . $strCharsetLine ;

                        $strTranslatorLine = sprintf('Last-Translator: %s <%s>\n', QApplication::$User->RealName, QApplication::$User->Email);

                        if (strstr($arrTemplateFields['MsgStr'], '"Last-Translator:'))
                            $arrTemplateFields['MsgStr'] = preg_replace('/Last\-Translator:[^"]+/mi', $strTranslatorLine, $arrTemplateFields['MsgStr']);
                        else
                            $arrTemplateFields['MsgStr'] .= '"' . "\n" . '"' . $strTranslatorLine ;

                        $strLanguageLine = sprintf('Language-Team: %s <LL@li.org>\n', $this->objTargetLanguage->LanguageName);

                        if (strstr($arrTemplateFields['MsgStr'], '"Language-Team:'))
                            $arrTemplateFields['MsgStr'] = preg_replace('/Language\-Team:[^"]+/mi', $strLanguageLine, $arrTemplateFields['MsgStr']);
                        else
                            $arrTemplateFields['MsgStr'] .= '"' . "\n" . '"' . $strLanguageLine;

                        $strRevisionLine = sprintf('PO-Revision-Date: %s\n', date('Y-m-d H:iO'));

                        if (strstr($arrTemplateFields['MsgStr'], '"PO-Revision-Date:'))
                            $arrTemplateFields['MsgStr'] = preg_replace('/PO\-Revision\-Date:[^"]+/mi', $strRevisionLine, $arrTemplateFields['MsgStr']);
                        else
                            $arrTemplateFields['MsgStr'] .= '"' . "\n" . '"' . $strRevisionLine;
                        
                        if (!strstr($arrTemplateFields['MsgStr'], '"MIME-Version'))
                            $arrTemplateFields['MsgStr'] .= '"' . "\n" . '"MIME-Version: 1.0\n';
                            
                        if (!strstr($arrTemplateFields['MsgStr'], '"Content-Type'))
                        	$arrTemplateFields['MsgStr'] .= '"' . "\n" . '"Content-Type: text/plain; charset=UTF-8\n';
                        	
                    	if (!strstr($arrTemplateFields['MsgStr'], '"Content-Transfer-Encoding'))
                        	$arrTemplateFields['MsgStr'] .= '"' . "\n" . '"Content-Transfer-Encoding: 8bit\n';
                    	
                    	if (!strstr($arrTemplateFields['MsgStr'], '"Plural-Forms'))
                    	    $arrTemplateFields['MsgStr'] .= '"' . "\n" . $this->objTargetLanguage->PluralForm . "\n" . '"';
                    }
                    else
                        $arrTemplateFields['MsgStr'] = $this->GetTranslation($this->stripAccessKey($arrTemplateFields['MsgId']), $this->getAccessKey($arrTemplateFields['MsgId']), $this->getAccessKeyPrefix($arrTemplateFields['MsgId']), null , null, $arrTemplateFields['Context']);
                }
                else {
                    /**
                     * if it's a plural, add the pluralid with all the msgstr's available
                     * the first one is added with msgid/msgstr[0] (this is the singular)
                     * the next ones are added with plural id, so in fact they will be tied to the same text
                     */
                    $strSingularText = $arrTemplateFields['MsgId'];

                    if (!is_null($arrTemplateFields['MsgStr0']))
                        $arrTemplateFields['MsgStr0'] = $this->GetTranslation($this->stripAccessKey($arrTemplateFields['MsgId']), $this->getAccessKey($arrTemplateFields['MsgId']), $this->getAccessKeyPrefix($arrTemplateFields['MsgId']), null, null, $arrTemplateFields['Context'] . "\nThis text has plurals.");

                    for($intPluralId=1; $intPluralId < $this->objTargetLanguage->Plurals; $intPluralId++) {
                        $arrTemplateFields['MsgStr' . $intPluralId] = $this->GetTranslation($this->stripAccessKey($arrTemplateFields['MsgPluralId']), $this->getAccessKey($arrTemplateFields['MsgPluralId']), $this->getAccessKeyPrefix($arrTemplateFields['MsgPluralId']), null, null, $arrTemplateFields['Context'] . "\nThis is plural form $intPluralId for the text \"".$strSingularText."\".");
                    }
                }

                if (isset($arrTemplateFields['TranslatorComment']) && !is_null($arrTemplateFields['TranslatorComment']))
                    fputs($hndExportFile, $arrTemplateFields['TranslatorComment']);
                if (isset($arrTemplateFields['ExtractedComment']) && !is_null($arrTemplateFields['ExtractedComment']))
                    fputs($hndExportFile, $arrTemplateFields['ExtractedComment']);
                if (isset($arrTemplateFields['Reference']) && !is_null($arrTemplateFields['Reference']))
                    fputs($hndExportFile, $arrTemplateFields['Reference']);
                if (isset($arrTemplateFields['Flag']) && !is_null($arrTemplateFields['Flag']))
                    fputs($hndExportFile, $arrTemplateFields['Flag']);
                if (isset($arrTemplateFields['PreviousContext']) && !is_null($arrTemplateFields['PreviousContext']))
                    fputs($hndExportFile, $arrTemplateFields['PreviousContext']);
                if (isset($arrTemplateFields['PreviousUntranslated']) && !is_null($arrTemplateFields['PreviousUntranslated']))
                    fputs($hndExportFile, $arrTemplateFields['PreviousUntranslated']);
                if (isset($arrTemplateFields['PreviousUntranslatedPlural']) && !is_null($arrTemplateFields['PreviousUntranslatedPlural']))
                    fputs($hndExportFile, $arrTemplateFields['PreviousUntranslatedPlural']);
                if (isset($arrTemplateFields['MsgContext']) && !is_null($arrTemplateFields['MsgContext']))
                    fputs($hndExportFile, sprintf('msgctxt "%s"' . "\n", str_replace('"', '\"', $arrTemplateFields['MsgContext'])));
                if (isset($arrTemplateFields['MsgId']) && !is_null($arrTemplateFields['MsgId'])) {
                    /**
                     * If we're exporting a translation that is not approved, mark it as fuzzy
                     */
                    if (
                        $this->objCurrentContext instanceof NarroContextInfo &&
                        !$this->objCurrentContext->ValidSuggestionId &&
                        isset($arrTemplateFields['MsgStr']) &&
                        $arrTemplateFields['MsgStr'] != '')
                    {
                        NarroImportStatistics::$arrStatistics['Texts exported as fuzzy because they are not approved']++;
                        fputs($hndExportFile, "#, fuzzy\n");
                    }
                    fputs($hndExportFile, sprintf('msgid "%s"' . "\n", str_replace('"', '\"', $arrTemplateFields['MsgId'])));
                }
                if (isset($arrTemplateFields['MsgPluralId']) && !is_null($arrTemplateFields['MsgPluralId']))
                    fputs($hndExportFile, sprintf('msgid_plural "%s"' . "\n", str_replace('"', '\"', $arrTemplateFields['MsgPluralId'])));

                if (!is_null($arrTemplateFields['MsgStr'])) {
                    /**
                     * put the header as it is
                     */
                    if ($arrTemplateFields['MsgId'] == '' && strstr($arrTemplateFields['MsgStr'], 'Project-Id-Version'))
                        fputs($hndExportFile, sprintf('msgstr "%s"' . "\n", $arrTemplateFields['MsgStr']));
                    else
                        fputs($hndExportFile, sprintf('msgstr "%s"' . "\n", str_replace(array('"', "\n"), array('\"', '"' . "\n" . '"'), $arrTemplateFields['MsgStr'])));
                }

                for($intPluralId=0; $intPluralId < $this->objTargetLanguage->Plurals; $intPluralId++) {
                    if (!is_null($arrTemplateFields['MsgStr' . $intPluralId]))
                        fputs($hndExportFile, sprintf('msgstr[%d] "%s"' . "\n", $intPluralId, str_replace(array('"', "\n"), array('\"', '"' . "\n" . '"'), $arrTemplateFields['MsgStr' . $intPluralId])));
                }

                fputs($hndExportFile, "\n");

            }

            fclose($hndExportFile);
            @chmod($strTranslatedFile, 0666);

            /**
             * Try to format the file
             * @todo add php replacement for msgcat
             */
            if (file_exists($strTranslatedFile . '~')) {
                unlink($strTranslatedFile . '~');
            }
            
            NarroUtils::Exec(
                sprintf('msgcat %s -w 80 -o %s~', escapeshellarg($strTranslatedFile), escapeshellarg($strTranslatedFile)),
                $arrOutput,
                $arrError,
                $intRetVal,
                false,
                null,
                __TMP_PATH__,
                true
            );

            if (file_exists($strTranslatedFile . '~')) {
                unlink($strTranslatedFile);
                copy($strTranslatedFile . '~', $strTranslatedFile);
            }

            if (file_exists($strTranslatedFile . '~'))
                unlink($strTranslatedFile . '~');
            
            NarroUtils::Exec(sprintf('msgfmt -cv "%s"', $strTranslatedFile), $arrOutput, $arrError, $intRetVal);
            if ($intRetVal != 0) {
                NarroLogger::LogError(sprintf('Not exporting %s because it has errors: %s', $this->objFile->FilePath, join("\n", $arrOutput)));
                unlink($strTranslatedFile);
            }
            else
                @chmod($strTranslatedFile, 0666);
        }

        public function ImportFile($strTemplate, $strTranslatedFile = null) {
            // No need to check equals for gettext
            $this->blnCheckEqual = false;
            
            $arrTemplateFile = $this->getFieldGroups($strTemplate);
            $arrTranslatedFile = $this->getFieldGroups($strTranslatedFile);

            $intTotalContexts = count($arrTemplateFile);
            $intCurrentContext = 0;
            foreach($arrTemplateFile as $strIndex=>$arrTemplateFields) {
                $intCurrentContext++;
                NarroProgress::SetProgressPerFile(($intCurrentContext/$intTotalContexts)*100, $this->objProject->ProjectId, 'import');
                /**
                 * ignore po header
                 */
                if ($arrTemplateFields['MsgId'] === '') continue;

                if (isset($arrTranslatedFile[$strIndex]['MsgStr']) && $arrTranslatedFile[$strIndex]['MsgStr'] != '' && isset($arrTranslatedFile[$strIndex]['MsgId']) && $arrTranslatedFile[$strIndex]['MsgId'] == $arrTemplateFields['MsgId'])
                    $arrTranslatedFile[$strIndex]['MsgStr'] = str_replace('\"', '"', $arrTranslatedFile[$strIndex]['MsgStr']);
                else
                    $arrTranslatedFile[$strIndex]['MsgStr'] = null;

                if (strstr($arrTranslatedFile[$strIndex]['Flag'], 'fuzzy')) {
                    /**
                     * if the string is marked fuzzy, don't import the translation and delete fuzzy flag
                     */
                    $arrTranslatedFile[$strIndex]['MsgStr'] = '';

                }


                for($intPluralId=0; $intPluralId < $this->objTargetLanguage->Plurals; $intPluralId++) {
                    if (strstr($arrTranslatedFile[$strIndex]['Flag'], 'fuzzy')) {
                        /**
                         * if the string is marked fuzzy, don't import the translation and delete fuzzy flag
                         */
                        $arrTranslatedFile[$strIndex]['MsgStr' . $intPluralId] = '';

                        $arrTranslatedFile[$strIndex]['Flag'] = str_replace(', fuzzy', '', $arrTranslatedFile[$strIndex]['Flag']);
                        /**
                         * if no other flags are found, just empty the variable
                         */
                        if (strlen(trim($arrTranslatedFile[$strIndex]['Flag'])) < 4) $arrTranslatedFile[$strIndex]['Flag'] = null;
                    }
                    else {

                        if (
                            isset($arrTranslatedFile[$strIndex]['MsgStr' . $intPluralId]) &&
                            $arrTranslatedFile[$strIndex]['MsgStr' . $intPluralId] != '' &&
                            isset($arrTranslatedFile[$strIndex]['MsgPluralId']) &&
                            $arrTranslatedFile[$strIndex]['MsgPluralId'] == $arrTemplateFields['MsgPluralId']
                        ) {
                            $arrTranslatedFile[$strIndex]['MsgStr' . $intPluralId] = str_replace('\"', '"', $arrTranslatedFile[$strIndex]['MsgStr' . $intPluralId]);
                        }
                        else {
                            $arrTranslatedFile[$strIndex]['MsgStr' . $intPluralId] = '';
                        }
                    }
                }

                $arrTranslatedFile[$strIndex]['Flag'] = str_replace(', fuzzy', '', $arrTranslatedFile[$strIndex]['Flag']);
                /**
                 * if no other flags are found, just empty the variable
                 */
                if (strlen(trim($arrTranslatedFile[$strIndex]['Flag'])) < 4) $arrTranslatedFile[$strIndex]['Flag'] = null;


                /**
                 * if it's not a plural, just add msgid and msgstr
                 */
                if (is_null($arrTemplateFields['MsgPluralId'])) {
                        $this->AddTranslation(
                            $this->stripAccessKey($arrTemplateFields['MsgId']),
                            $this->getAccessKey($arrTemplateFields['MsgId']),
                            $this->stripAccessKey($arrTranslatedFile[$strIndex]['MsgStr']),
                            $this->getAccessKey($arrTranslatedFile[$strIndex]['MsgStr']),
                            $arrTemplateFields['Context'],
                            $arrTemplateFields['ContextComment']
                        );
                }
                else {
                    /**
                     * if it's a plural, add the pluralid with all the msgstr's available
                     * the first one is added with msgid/msgstr[0] (this is the singular)
                     * the next ones are added with plural id, so in fact they will be tied to the same text
                     */
                    if (!is_null($arrTemplateFields['MsgStr0'])) {
                        $this->AddTranslation(
                            $this->stripAccessKey($arrTemplateFields['MsgId']),
                            $this->getAccessKey($arrTemplateFields['MsgId']),
                            $this->stripAccessKey($arrTranslatedFile[$strIndex]['MsgStr0']),
                            $this->getAccessKey($arrTranslatedFile[$strIndex]['MsgStr0']),
                            $arrTemplateFields['Context'] . "\nThis text has plurals.",
                            $arrTemplateFields['ContextComment']
                        );
                    }

                    for($intPluralId=1; $intPluralId < $this->objTargetLanguage->Plurals; $intPluralId++) {
                        if (!is_null($arrTranslatedFile[$strIndex]['MsgStr' . $intPluralId])) {
                            $this->AddTranslation(
                                $this->stripAccessKey($arrTemplateFields['MsgPluralId']),
                                $this->getAccessKey($arrTemplateFields['MsgPluralId']),
                                $arrTranslatedFile[$strIndex]['MsgStr' . $intPluralId],
                                $this->getAccessKey($arrTranslatedFile[$strIndex]['MsgStr' . $intPluralId]),
                                $arrTemplateFields['Context'] . "\nThis is plural form $intPluralId for the text \"" . $arrTemplateFields['MsgId'] . "\".",
                                $arrTemplateFields['ContextComment']
                            );
                        }
                    }
                }
            }
        }

        public static function getAccessKeyAndStrippedText($strText) {
            $strCleanText = preg_replace('/<literal>.*<\/literal>/', '', $strText);
            $strCleanText = strip_tags($strCleanText);
            $strCleanText = html_entity_decode($strCleanText);
            $strCleanText = preg_replace('/\$[a-z0-9A-Z_\-]+/', '', $strCleanText);
            /**
             * it's an access key if _ is found only once
             */
            if (strstr($strCleanText, '_') && !strstr(NarroString::Replace('_', '', $strCleanText, 1), '_')) {
                if (strstr($strCleanText, ' ')) {
                    $arrPossibleWords = explode(' ', $strCleanText);
                    foreach($arrPossibleWords as $strPossibleWord) {
                        /**
                         * if there's a _ and the word that contains it starts with a capital letter or is a number, + or -
                         */
                        if (strstr($strPossibleWord, '_') && preg_match('/^[A-Z0-9\+\-]/', str_replace('_', '', $strPossibleWord))) {
                            if (preg_match('/_(\w)/', $strText, $arrMatches))
                                return array(NarroString::Replace('_' . $arrMatches[1], $arrMatches[1], $strText), '_', $arrMatches[1]);
                        }
                    }
                }
                else {
                    if (strstr($strCleanText, '_') && preg_match('/^[A-Z0-9\+\-]/', str_replace('_', '', $strCleanText))) {
                        if (preg_match('/_(\w)/', $strText, $arrMatches))
                            return array(NarroString::Replace('_' . $arrMatches[1], $arrMatches[1], $strText), '_', $arrMatches[1]);
                    }

                }
            }

            /**
             * it's a access key if & is found only once
             */
            if (strstr($strCleanText, '&') && !strstr(NarroString::Replace('&', '', $strCleanText, 1), '&')) {
                if (strstr($strCleanText, ' ')) {
                    $arrPossibleWords = explode(' ', $strCleanText);
                    foreach($arrPossibleWords as $strPossibleWord) {
                        /**
                         * if there's a _ and the word that contains it starts with a capital letter or is a number, + or -
                         */
                        if (strstr($strPossibleWord, '&') && preg_match('/^[A-Z0-9\+\-]/', str_replace('&', '', $strPossibleWord))) {
                            preg_match('/&(\w)/', $strText, $arrMatches);
                            return array(NarroString::Replace('&' . $arrMatches[1], $arrMatches[1], $strText), '&', $arrMatches[1]);
                        }
                    }
                } else {
                    if (strstr($strCleanText, '&') && preg_match('/^[A-Z0-9\+\-]/', str_replace('&', '', $strCleanText))) {
                        preg_match('/&(\w)/', $strText, $arrMatches);
                        return array(NarroString::Replace('&' . $arrMatches[1], $arrMatches[1], $strText), '&', $arrMatches[1]);
                    }

                }
            }


            return array($strText, null, null);
        }

        protected function getAccessKey($strText) {
            list($strStrippedText, $strAccKeyPrefix, $strAccKey) = $this->getAccessKeyAndStrippedText($strText);
            return $strAccKey;
        }

        protected function stripAccessKey($strText) {
            list($strStrippedText, $strAccKeyPrefix, $strAccKey) = $this->getAccessKeyAndStrippedText($strText);
            return $strStrippedText;
        }

        protected function getAccessKeyPrefix($strText) {
            list($strStrippedText, $strAccKeyPrefix, $strAccKey) = $this->getAccessKeyAndStrippedText($strText);
            return $strAccKeyPrefix;
        }

        /**
         * A translation here consists of the project, file, text, translation, context, plurals, approval, ignore equals
         *
         * @param string $strOriginal the original text
         * @param string $strOriginalAccKey access key for the original text
         * @param string $strTranslation the translated text from the import file (can be empty)
         * @param string $strOriginalAccKey access key for the translated text
         * @param string $strContext the context where the text/translation appears in the file
         * @param string $intPluralForm if this is a plural, what plural form is it (0 singular, 1 plural form 1, and so on)
         * @param string $strComment a comment from the imported file
         *
         * @return string valid suggestion
         */
        protected function GetTranslation($strOriginal, $strOriginalAccKey = null, $strOriginalAccKeyPrefix = null, $strTranslation, $strTranslationAccKey = null, $strContext, $strComment = null) {
            /**
             * The contexts are trimmed at import to avoid useless white space contexts, so we need to trim it when searching for it as well
             */
            $strContext = trim($strContext);

            if ($strContext != '')
                $objNarroContextInfo = NarroContextInfo::QuerySingle(
                    QQ::AndCondition(
                        QQ::Equal(QQN::NarroContextInfo()->Context->ProjectId, $this->objProject->ProjectId),
                        QQ::Equal(QQN::NarroContextInfo()->Context->FileId, $this->objFile->FileId),
                        QQ::Equal(QQN::NarroContextInfo()->Context->Active, 1),
                        QQ::Equal(QQN::NarroContextInfo()->Context->File->Active, 1),
                        QQ::Equal(QQN::NarroContextInfo()->Context->TextAccessKey, $strOriginalAccKey),
                        QQ::Equal(QQN::NarroContextInfo()->Context->ContextMd5, md5($strContext)),
                        QQ::Equal(QQN::NarroContextInfo()->Context->Text->TextValueMd5, md5($strOriginal)),
                        QQ::Equal(QQN::NarroContextInfo()->LanguageId, $this->objTargetLanguage->LanguageId)
                    )
                );
            else
                $objNarroContextInfo = NarroContextInfo::QuerySingle(
                    QQ::AndCondition(
                        QQ::Equal(QQN::NarroContextInfo()->Context->ProjectId, $this->objProject->ProjectId),
                        QQ::Equal(QQN::NarroContextInfo()->Context->FileId, $this->objFile->FileId),
                        QQ::Equal(QQN::NarroContextInfo()->Context->Active, 1),
                        QQ::Equal(QQN::NarroContextInfo()->Context->File->Active, 1),
                        QQ::Equal(QQN::NarroContextInfo()->Context->TextAccessKey, $strOriginalAccKey),
                        QQ::Equal(QQN::NarroContextInfo()->Context->Text->TextValueMd5, md5($strOriginal)),
                        QQ::Equal(QQN::NarroContextInfo()->LanguageId, $this->objTargetLanguage->LanguageId)
                    )
                );

            if ( $objNarroContextInfo instanceof NarroContextInfo ) {
                $this->objCurrentContext = $objNarroContextInfo;
                $strSuggestionValue = $this->GetExportedSuggestion($objNarroContextInfo);

                if ($strSuggestionValue !== false) {

                    $arrResult = QApplication::$PluginHandler->ExportSuggestion($strOriginal, $strSuggestionValue, $strContext, $this->objFile, $this->objProject);
                    if
                    (
                        $arrResult[1] != '' &&
                        $arrResult[0] == $strOriginal &&
                        $arrResult[2] == $strContext &&
                        $arrResult[3] == $this->objFile &&
                        $arrResult[4] == $this->objProject
                    ) {
                        $strSuggestionValue = $arrResult[1];
                    }
                    else
                        NarroLogger::LogWarn(sprintf('The plugin "%s" returned an unexpected result while processing the suggestion "%s": %s', QApplication::$PluginHandler->CurrentPluginName, $strSuggestionValue, join(';', $arrResult)));

                    if (!is_null($strOriginalAccKey) && !is_null($strOriginalAccKeyPrefix)) {
                        /**
                         * @todo don't export if there's no valid access key
                         */
                        $strTextWithAccKey = NarroString::Replace($objNarroContextInfo->SuggestionAccessKey, $strOriginalAccKeyPrefix . $objNarroContextInfo->SuggestionAccessKey, $strSuggestionValue, 1);
                        return $strTextWithAccKey;
                    }
                    else
                        return $strSuggestionValue;
                }
                else {
                    // NarroLogger::LogDebug(sprintf('No translation found for the text "%s", while searching for context "%s"', $strOriginal, $strContext));
                    return '';
                }
            }
            else {
                NarroLogger::LogError(sprintf('No context found for the text "%s", while searching for context "%s"', $strOriginal, $strContext));
                return '';
            }
        }

    }
?>