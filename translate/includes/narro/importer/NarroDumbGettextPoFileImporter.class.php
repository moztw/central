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

    class NarroDumbGettextPoFileImporter extends NarroFileImporter {
        protected function getFieldGroups($strFile) {

            $arrGroupFields = array();
            if (trim($strFile) == '') return $arrGroupFields;

            $hndFile = fopen($strFile, 'r');
            if ($hndFile) {

                $intCurrentGroup = 1;

                while (!feof($hndFile)) {
                    $arrFields = array();

                    $strLine = fgets($hndFile, 8192);
                    NarroLog::LogMessage(1, "Processing " . $strLine . "<br />");
                    if (strpos($strLine, '# ') === 0) {
                        NarroLog::LogMessage(1, 'Found translator comment. <br />');
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
                        NarroLog::LogMessage(1, 'Found extracted comment. <br />');
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
                        NarroLog::LogMessage(1, 'Found reference. <br />');
                        $arrFields['Reference'] = $strLine;
                        while (!feof($hndFile)) {
                            $strLine = fgets($hndFile, 8192);
                            if (strpos($strLine, '#:') === 0)
                                $arrFields['Reference'] .= $strLine;
                            else
                                break;
                        }
                    }

                    if (strpos($strLine, '#,') === 0) {
                        NarroLog::LogMessage(1, 'Found flag. <br />');
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
                        NarroLog::LogMessage(1, 'Found previous context. <br />');
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
                        NarroLog::LogMessage(1, 'Found previous translated string. <br />');
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
                        NarroLog::LogMessage(1, 'Found previous translated plural string. <br />');
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
                        NarroLog::LogMessage(1, 'Found string. <br />');
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
                        NarroLog::LogMessage(1, 'Found msgid. <br />');
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
                        NarroLog::LogMessage(1, 'Found plural string. <br />');
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
                        NarroLog::LogMessage(1, 'Found translation. <br />');
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
                        NarroLog::LogMessage(1, 'Found translation plural 1. <br />');
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
                        NarroLog::LogMessage(1, 'Found translation plural 2. <br />');
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
                        NarroLog::LogMessage(1, 'Found translation plural 3. <br />');
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

                    $arrFields['Context'] = $arrFields['MsgId'];
                    $arrFields['ContextComment'] = $arrFields['ExtractedComment'] . $arrFields['Reference'] . $arrFields['Flag'] . $arrFields['PreviousContext'] . $arrFields['PreviousUntranslated'] . $arrFields['PreviousUntranslatedPlural'] . $arrFields['MsgContext'];

                    if (!is_null($arrFields['MsgId'])) $arrFields['MsgId'] = str_replace('\"', '"', $arrFields['MsgId']);
                    if (!is_null($arrFields['MsgStr'])) $arrFields['MsgStr'] = str_replace('\"', '"', $arrFields['MsgStr']);

                    if (!is_null($arrFields['MsgPluralId'])) $arrFields['MsgPluralId'] = str_replace('\"', '"', $arrFields['MsgPluralId']);
                    if (!is_null($arrFields['MsgStr0'])) $arrFields['MsgStr0'] = str_replace('\"', '"', $arrFields['MsgStr0']);
                    if (!is_null($arrFields['MsgStr1'])) $arrFields['MsgStr1'] = str_replace('\"', '"', $arrFields['MsgStr1']);
                    if (!is_null($arrFields['MsgStr2'])) $arrFields['MsgStr2'] = str_replace('\"', '"', $arrFields['MsgStr2']);

                    if (trim($arrFields['Context']) == '') {
                        $arrFields['Context'] = sprintf('This text has no context info. The text is used in %s. Position in file: %d', $this->objFile->FileName, $intCurrentGroup);
                    }

                    if ((!isset($arrFields['MsgId']) && !isset($arrFields['MsgPluralId'])) || (!isset($arrFields['MsgStr']) && !isset($arrFields['MsgStr0'])))
                        continue;

                    $intCurrentGroup++;
                    /**
                     * If there is a similar context, add a unique thing to it, like the group number in the file
                     */
                    if (isset($arrGroupFields[$arrFields['Context']])) {
                        $arrFields['Context'] .= sprintf("\nPosition in file: %d", $intCurrentGroup);
                    $arrGroupFields[$arrFields['Context']] = $arrFields;
                    }
                    else {
                        $arrGroupFields[$arrFields['Context']] = $arrFields;
                    }
                }
            }
            else {
                NarroLog::LogMessage(3, sprintf(t('Cannot read "%s".'), $strFile));
            }

            return $arrGroupFields;
        }

        public function ExportFile($strTemplate, $strTranslatedFile = null) {
            $hndExportFile = fopen($strTranslatedFile, 'w');
            if (!$hndExportFile) {
                NarroLog::LogMessage(3, sprintf(t('Cannot create or write to "%s".'), $strTranslatedFile));
                return false;
            }

            $arrTemplateFile = $this->getFieldGroups($strTemplate);

            foreach($arrTemplateFile as $strContext=>$arrTemplateFields) {

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
                         * At import, we concatenate strings on more than one lines, so no we have to restore it
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
                            $arrTemplateFields['MsgStr'] = preg_replace('/X\-Generator:[^"]+/mi', $strGeneratorLine, $arrTemplateFields['MsgStr']);
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

                        $strTranslatorLine = sprintf('Last-Translator: %s <%s>\n', QApplication::$objUser->Username, QApplication::$objUser->Email);

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

                    }
                    else
                        $arrTemplateFields['MsgStr'] = $this->GetTranslation($this->stripAccessKey($arrTemplateFields['MsgStr']), $this->getAccessKey($arrTemplateFields['MsgStr']), $this->getAccessKeyPrefix($arrTemplateFields['MsgStr']), null , null, $arrTemplateFields['Context']);
                }
                else {
                    /**
                     * if it's a plural, add the pluralid with all the msgstr's available
                     * the first one is added with msgid/msgstr[0] (this is the singular)
                     * the next ones are added with plural id, so in fact they will be tied to the same text
                     */
                    $strSingularText = $arrTemplateFields['MsgStr0'];

                    if (!is_null($arrTemplateFields['MsgStr0']))
                        $arrTemplateFields['MsgStr0'] = $this->GetTranslation($this->stripAccessKey($arrTemplateFields['MsgStr0']), $this->getAccessKey($arrTemplateFields['MsgStr0']), $this->getAccessKeyPrefix($arrTemplateFields['MsgStr0']), null, null, $arrTemplateFields['Context'] . "\nThis text has plurals.");

                    $strPluralText = $arrTemplateFields['MsgStr1'];
                    for($intPluralId=1; $intPluralId < $this->objTargetLanguage->Plurals; $intPluralId++) {
                        $arrTemplateFields['MsgStr' . $intPluralId] = $this->GetTranslation($this->stripAccessKey($strPluralText), $this->getAccessKey($strPluralText), $this->getAccessKeyPrefix($strPluralText), null, null, $arrTemplateFields['Context'] . "\nThis is plural form $intPluralId for the text \"".$strSingularText."\".");
                    }
                }

                if (!is_null($arrTemplateFields['TranslatorComment']))
                    fputs($hndExportFile, $arrTemplateFields['TranslatorComment']);
                if (!is_null($arrTemplateFields['ExtractedComment']))
                    fputs($hndExportFile, $arrTemplateFields['ExtractedComment']);
                if (!is_null($arrTemplateFields['Reference']))
                    fputs($hndExportFile, $arrTemplateFields['Reference']);
                if (!is_null($arrTemplateFields['Flag']))
                    fputs($hndExportFile, $arrTemplateFields['Flag']);
                if (!is_null($arrTemplateFields['PreviousContext']))
                    fputs($hndExportFile, $arrTemplateFields['PreviousContext']);
                if (!is_null($arrTemplateFields['PreviousUntranslated']))
                    fputs($hndExportFile, $arrTemplateFields['PreviousUntranslated']);
                if (!is_null($arrTemplateFields['PreviousUntranslatedPlural']))
                    fputs($hndExportFile, $arrTemplateFields['PreviousUntranslatedPlural']);
                if (!is_null($arrTemplateFields['MsgContext']))
                    fputs($hndExportFile, sprintf('msgctxt "%s"' . "\n", str_replace('"', '\"', $arrTemplateFields['MsgContext'])));
                if (!is_null($arrTemplateFields['MsgId']))
                    fputs($hndExportFile, sprintf('msgid "%s"' . "\n", str_replace('"', '\"', $arrTemplateFields['MsgId'])));
                if (!is_null($arrTemplateFields['MsgPluralId']))
                    fputs($hndExportFile, sprintf('msgid_plural "%s"' . "\n", str_replace('"', '\"', $arrTemplateFields['MsgPluralId'])));

                if (!is_null($arrTemplateFields['MsgStr'])) {
                    /**
                     * put the header as it is
                     */
                    if ($arrTemplateFields['MsgId'] == '' && strstr($arrTemplateFields['MsgStr'], 'Project-Id-Version'))
                        fputs($hndExportFile, sprintf('msgstr "%s"' . "\n", $arrTemplateFields['MsgStr']));
                    else
                        fputs($hndExportFile, sprintf('msgstr "%s"' . "\n", str_replace('"', '\"', $arrTemplateFields['MsgStr'])));
                }

                for($intPluralId=0; $intPluralId < $this->objTargetLanguage->Plurals; $intPluralId++) {
                    if (!is_null($arrTemplateFields['MsgStr' . $intPluralId]))
                        fputs($hndExportFile, sprintf('msgstr[%d] "%s"' . "\n", $intPluralId, str_replace('"', '\"', $arrTemplateFields['MsgStr' . $intPluralId])));
                }

                fputs($hndExportFile, "\n");

                if ($arrTemplateFields['MsgId'] == '') {
                    fputs($hndExportFile, $strLine);
                }
            }

            fclose($hndExportFile);
            chmod($strTranslatedFile, 0666);

            /**
             * Try to format the file
             * @todo add php replacement for msgcat
             */
            if (file_exists($strTranslatedFile . '~')) {
                unlink($strTranslatedFile . '~');
            }

            exec(sprintf('msgcat %s -w 80 -o %s~', $strTranslatedFile, $strTranslatedFile));
            if (file_exists($strTranslatedFile . '~')) {
                unlink($strTranslatedFile);
                copy($strTranslatedFile . '~', $strTranslatedFile);
            }
        }

        public function ImportFile($strTemplate, $strTranslatedFile = null) {
            $arrTemplateFile = $this->getFieldGroups($strTemplate);
            $arrTranslatedFile = $this->getFieldGroups($strTranslatedFile);

            foreach($arrTemplateFile as $strContext=>$arrTemplateFields) {
                /**
                 * ignore po header
                 */
                if ($arrTemplateFields['MsgId'] === '') continue;

                if (isset($arrTranslatedFile[$strContext]['MsgStr']) && $arrTranslatedFile[$strContext]['MsgStr'] != '' && isset($arrTranslatedFile[$strContext]['MsgId']) && $arrTranslatedFile[$strContext]['MsgId'] == $arrTemplateFields['MsgId'])
                    $arrTranslatedFile[$strContext]['MsgStr'] = str_replace('\"', '"', $arrTranslatedFile[$strContext]['MsgStr']);
                else
                    $arrTranslatedFile[$strContext]['MsgStr'] = null;

                for($intPluralId=0; $intPluralId < $this->objTargetLanguage->Plurals; $intPluralId++) {
                    if (strstr($arrTranslatedFile[$strContext]['Flag'], 'fuzzy')) {
                        /**
                         * if the string is marked fuzzy, don't import the translation and delete fuzzy flag
                         */
                        $arrTranslatedFile[$strContext]['MsgStr' . $intPluralId] = '';

                        $arrTranslatedFile[$strContext]['Flag'] = str_replace(', fuzzy', '', $arrTranslatedFile[$strContext]['Flag']);
                        /**
                         * if no other flags are found, just empty the variable
                         */
                        if (strlen(trim($arrTranslatedFile[$strContext]['Flag'])) < 4) $arrTranslatedFile[$strContext]['Flag'] = null;
                    }

                    if (
                        isset($arrTranslatedFile[$strContext]['MsgStr' . $intPluralId]) &&
                        $arrTranslatedFile[$strContext]['MsgStr' . $intPluralId] != '' &&
                        isset($arrTranslatedFile[$strContext]['MsgPluralId']) &&
                        $arrTranslatedFile[$strContext]['MsgPluralId'] == $arrTemplateFields['MsgPluralId']
                    ) {
                        $arrTranslatedFile[$strContext]['MsgStr' . $intPluralId] = str_replace('\"', '"', $arrTranslatedFile[$strContext]['MsgStr' . $intPluralId]);
                    }
                    else {
                        $arrTranslatedFile[$strContext]['MsgStr' . $intPluralId] = '';
                    }
                }

                /**
                 * if it's not a plural, just add msgid and msgstr
                 */
                if (is_null($arrTemplateFields['MsgPluralId'])) {
                        $this->AddTranslation(
                            $this->stripAccessKey($arrTemplateFields['MsgStr']),
                            $this->getAccessKey($arrTemplateFields['MsgStr']),
                            $this->stripAccessKey($arrTranslatedFile[$strContext]['MsgStr']),
                            $this->getAccessKey($arrTranslatedFile[$strContext]['MsgStr']),
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
                            $this->stripAccessKey($arrTemplateFields['MsgStr0']),
                            $this->getAccessKey($arrTemplateFields['MsgStr0']),
                            $this->stripAccessKey($arrTranslatedFile[$strContext]['MsgStr0']),
                            $this->getAccessKey($arrTranslatedFile[$strContext]['MsgStr0']),
                            $arrTemplateFields['Context'] . "\nThis text has plurals.",
                            $arrTemplateFields['ContextComment']
                        );
                    }

                    for($intPluralId=1; $intPluralId < $this->objTargetLanguage->Plurals; $intPluralId++) {
                        if (!is_null($arrTranslatedFile[$strContext]['MsgStr' . $intPluralId])) {
                            $this->AddTranslation(
                                $this->stripAccessKey($arrTemplateFields['MsgStr1']),
                                $this->getAccessKey($arrTemplateFields['MsgStr1']),
                                $this->stripAccessKey($arrTranslatedFile[$strContext]['MsgStr' . $intPluralId]),
                                $this->getAccessKey($arrTranslatedFile[$strContext]['MsgStr' . $intPluralId]),
                                $arrTemplateFields['Context'] . "\nThis is plural form $intPluralId for the text \"" . $arrTemplateFields['MsgStr0'] . "\".",
                                $arrTemplateFields['ContextComment']
                            );
                        }
                    }
                }
            }
        }

        private function getAccessKeyAndStrippedText($strText) {
            $strCleanText = preg_replace('/<literal>.*<\/literal>/', '', $strText);
            $strCleanText = strip_tags($strCleanText);
            $strCleanText = html_entity_decode($strCleanText);
            $strCleanText = preg_replace('/\$[a-z0-9A-Z_\-]+/', '', $strCleanText);

            if (preg_match('/_(\w)/', $strCleanText, $arrMatches)) {
                return array(NarroString::Replace('_' . $arrMatches[1], $arrMatches[1], $strText), '_', $arrMatches[1]);
            }
            else {
                if (preg_match('/&(\w)/', $strCleanText, $arrMatches)) {
                    return array(NarroString::Replace('&' . $arrMatches[1], $arrMatches[1], $strText), '&', $arrMatches[1]);
                }
                else
                    return array($strText, null);
            }
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
         * A translation here consists of the project, file, text, translation, context, plurals, validation, ignore equals
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
            $objNarroContextInfo = NarroContextInfo::QuerySingle(
                QQ::AndCondition(
                    QQ::Equal(QQN::NarroContextInfo()->Context->ProjectId, $this->objProject->ProjectId),
                    QQ::Equal(QQN::NarroContextInfo()->Context->FileId, $this->objFile->FileId),
                    QQ::Equal(QQN::NarroContextInfo()->Context->ContextMd5, md5(trim($strContext))),
                    QQ::Equal(QQN::NarroContextInfo()->Context->Text->TextValueMd5, md5($strOriginal)),
                    QQ::Equal(QQN::NarroContextInfo()->LanguageId, $this->objTargetLanguage->LanguageId),
                    QQ::IsNotNull(QQN::NarroContextInfo()->ValidSuggestionId)
                )
            );

            if ( $objNarroContextInfo instanceof NarroContextInfo ) {
                $arrResult = QApplication::$objPluginHandler->ExportSuggestion($strOriginal, $objNarroContextInfo->ValidSuggestion->SuggestionValue, $strContext, $this->objFile, $this->objProject);
                if
                (
                    trim($arrResult[1]) != '' &&
                    $arrResult[0] == $strOriginal &&
                    $arrResult[2] == $strContext &&
                    $arrResult[3] == $this->objFile &&
                    $arrResult[4] == $this->objProject
                ) {
                $objNarroContextInfo->ValidSuggestion->SuggestionValue = $arrResult[1];
                }
            else
            NarroLog::LogMessage(2, sprintf(t('A plugin returned an unexpected result while processing the suggestion "%s": %s'), $strTranslation, $strTranslation));

                if (!is_null($strOriginalAccKey) && !is_null($strOriginalAccKeyPrefix)) {
                    /**
                     * @todo don't export if there's no valid access key
                     */
                    $strTextWithAccKey = NarroString::Replace($objNarroContextInfo->SuggestionAccessKey, $strOriginalAccKeyPrefix . $objNarroContextInfo->SuggestionAccessKey, $objNarroContextInfo->ValidSuggestion->SuggestionValue, 1);
                    return $strTextWithAccKey;
                }
                else
                    return $objNarroContextInfo->ValidSuggestion->SuggestionValue;
            }
            else {
                /**
                 * leave it untranslated
                 */
                return $strOriginal;
            }
        }
    }
?>
