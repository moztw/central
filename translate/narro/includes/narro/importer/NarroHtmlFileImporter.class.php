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

    class NarroHtmlFileImporter extends NarroFileImporter {
        const SUPPORTED_TAGS = 'p,li,h1,h2,h3,h4,h5,title,textarea,dt,dd';
        const SUPPORTED_ATTRS = 'alt';

        public function __construct($objImporter = null) {
            parent::__construct($objImporter);

        }

        /**
         * Preprocesses the whole file, e.g. removing trailing spaces
         * @param string $strFile file content
         * @return string
         */
        protected function PreProcessFile($strFile) {
            return $strFile;
        }

        /**
         * Converts the file to an associative array
         * array(
         *     'key' => ''
         *     array(
         *         'text' => '',
         *         'comment' => '',
         *         'full_line' => '',
         *         'before_line' => ''
         *     )
         * );
         *
         * The key is something that must be unique to each text from that file; in most cases it can be the actual text
         * @param string $strFile file path
         * @return array
         */
        protected function FileAsArray($strFilePath) {
            $hndFile = fopen($strFilePath, 'r');

            $blnTagStart = false;
            $blnTagEnd = false;
            $blnCloseTagStart = false;
            $blnCloseTagEnd = false;
            $strCurrent = '';
            $arrSupportedTags = explode(',', self::SUPPORTED_TAGS);
            while(!feof($hndFile)) {
                $c = fgetc($hndFile);
                if ($c == '<') {
                    if (!feof($hndFile)) {
                        $c = fgetc($hndFile);
                        if (!$blnTagStart && preg_match('/[a-z]/i', $c)) {
                            $strTagStart = '<' . $c;
                            while(!feof($hndFile) && $c != '>') {
                                $c = fgetc($hndFile);
                                $strTagStart .= $c;
                            }

                            if (preg_match('/<([a-z0-9]+)(\s[^>]*|>)/i', $strTagStart, $arrMatches)) {
                                $strTagStartName = $arrMatches[1];
                                if (in_array($strTagStartName, $arrSupportedTags)) {
                                    $blnTagEnd = false;
                                    $blnTagStart = true;
                                    $strTagStartBefore = $strCurrent;
                                    $strCurrent = '';

                                }
                                else {
                                    $strCurrent .= $strTagStart;
                                }
                            }
                            else {
                                $strCurrent .= $strTagStart;
                            }

                        }
                        // closing tag
                        elseif ($c == '/') {
                            if (!feof($hndFile)) {
                                $c = fgetc($hndFile);
                                if (preg_match('/[a-z]/i', $c)) {
                                    $strTagEnd = '</' . $c;
                                    while(!feof($hndFile) && $c != '>') {
                                        $c = fgetc($hndFile);
                                        $strTagEnd .= $c;
                                    }

                                    if (preg_match('/<\/([a-z0-9]+)>/i', $strTagEnd, $arrMatches)) {
                                        $strTagEndName = $arrMatches[1];
                                        if (in_array($strTagEndName, $arrSupportedTags)) {
                                            $blnTagEnd = true;
                                            $blnTagStart = false;
                                            preg_match('/^\s*/', $strCurrent, $arrMatches);
                                            $strCurrent = substr($strCurrent, strlen($arrMatches[0]));
                                            // @todo process $strTagStartBefore for comments
                                            if ($intStartComment = strpos($strTagStartBefore, '<!--')) {
                                                $strComment = trim(substr($strTagStartBefore, $intStartComment + 4, strpos($strTagStartBefore, '-->') - $intStartComment - 4));
                                            }
                                            else {
                                                $strComment = '';
                                            }
                                            $arrTags[$strTagEndName . count($arrTags)] = array('full_line' => $strTagStart . $arrMatches[0] . $strCurrent . $strTagEnd, 'text'=>html_entity_decode($strCurrent, ENT_COMPAT, 'UTF-8'), 'before_line'=>$strTagStartBefore, 'comment'=>$strComment);
                                            $strCurrent = '';

                                        }
                                        else {
                                            $strCurrent .= $strTagEnd;
                                        }
                                    }
                                    else {
                                        $strCurrent .= $strTagEnd;
                                    }
                                }
                            }
                        }
                        else {
                            $strCurrent .= '<' . $c;
                        }
                    }
                }
                else {
                    $strCurrent .= $c;
                }
            }

            return $arrTags;

        }

        /**
         * Tells whether the file is a comment
         * This function helps with comments that spread over multiple lines
         * @param string $strLine
         * @return boolean
         */
        protected function IsComment($strLine) {
            return false;
        }

        /**
         * Preprocesses the line if needed
         * e.g. in the source file there's a comment like '# #define MOZ_LANGPACK_CONTRIBUTORS that should be uncommented
         * @param string $strLine
         * @param array $arrComment
         * @param array $arrLinesBefore
         * @return array an array with the arguments received; processed if needed
         */
        protected function PreProcessLine($strLine, $arrComment, $arrLinesBefore) {
            return array($strLine, $arrComment, $arrLinesBefore);
        }

        /**
         * Process the line by splitting the $strLine in key=>value
         * @param string $strLine
         * @param array $arrComment
         * @param array $arrLinesBefore
         * @return array
         */
        protected function ProcessLine($strLine, $arrComment, $arrLinesBefore) {

        }

        public function ImportFile($strTemplateFile, $strTranslatedFile = null) {
            $intTime = time();

            if ($strTranslatedFile)
                $arrTransKey = $this->FileAsArray($strTranslatedFile);

            $arrSourceKey = $this->FileAsArray($strTemplateFile);

            $intElapsedTime = time() - $intTime;
            if ($intElapsedTime > 0) {
                // NarroLogger::LogDebug(sprintf('Preprocessing %s took %d seconds.', $this->objFile->FileName, $intElapsedTime));
            }

            // NarroLogger::LogDebug(sprintf('Found %d contexts in file %s.', count($arrSourceKey), $this->objFile->FileName));

            if (is_array($arrSourceKey)) {
                foreach($arrSourceKey as $strKey=>$arrData) {
                    $this->AddTranslation(
                                trim($arrData['text']),
                                null,
                                trim(@$arrTransKey[$strKey]['text']),
                                null,
                                trim($strKey),
                                trim($arrData['comment'])
                    );
                }
            }
            else {
                NarroLogger::LogWarn(sprintf('Found a empty template (%s), copying the original', $strTemplateFile));
                copy($strTemplateFile, $strTranslatedFile);
                chmod($strTranslatedFile, 0666);
            }
        }

        public function ExportFile($strTemplateFile, $strTranslatedFile) {
            $arrSourceKey = $this->FileAsArray($strTemplateFile);

            $intElapsedTime = time() - $intTime;
            if ($intElapsedTime > 0) {
                // NarroLogger::LogDebug(sprintf('Preprocessing %s took %d seconds.', $this->objFile->FileName, $intElapsedTime));
            }

            // NarroLogger::LogDebug(sprintf('Found %d contexts in file %s.', count($arrSourceKey), $this->objFile->FileName));

            if (is_array($arrSourceKey)) {
                $arrTranslationObjects = NarroContextInfo::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::NarroContextInfo()->Context->FileId, $this->objFile->FileId),
                            QQ::Equal(QQN::NarroContextInfo()->LanguageId, $this->objTargetLanguage->LanguageId),
                            QQ::Equal(QQN::NarroContextInfo()->Context->Active, 1)
                        )
                );

                foreach($arrTranslationObjects as $objNarroContextInfo) {
                    $strTranslation = $this->GetExportedSuggestion($objNarroContextInfo);

                    if (isset($arrSourceKey[$objNarroContextInfo->Context->Context])) {
                        $arrSourceKey[$objNarroContextInfo->Context->Context]['translation'] = $strTranslation;
                    }
                    else {
                        if ($this->blnSkipUntranslated == false)
                            $arrSourceKey[$objNarroContextInfo->Context->Context]['translation'] = $objNarroContextInfo->Context->Text->TextValue;
                        else
                            unset($arrTranslation[$objNarroContextInfo->Context->Context]);
                    }
                }

                $hndTranslationFile = fopen($strTranslatedFile, 'w');
                foreach($arrSourceKey as $strContext=>$arrData) {
                    if (isset($arrData['translation'])) {
                        fwrite($hndTranslationFile, $arrData['before_line'] . str_replace($arrData['text'], $arrData['translation'], $arrData['full_line']));
                    }
                    else {
                        if ($this->blnSkipUntranslated == false)
                            fwrite($hndTranslationFile, $arrData['before_line'] . $arrData['full_line']);
                        else
                            fwrite($hndTranslationFile, $arrData['before_line'] . str_replace($arrData['text'], '', $arrData['full_line']));
                    }
                }

                fclose($hndTranslationFile);
                NarroUtils::Chmod($strTranslatedFile, 0666);
                return true;
            }
            else {
                NarroLogger::LogWarn(sprintf('Found a empty template (%s), copying the original', $strTemplateFile));
                copy($strTemplateFile, $strTranslatedFile);
                NarroUtils::Chmod($strTranslatedFile, 0666);
                return false;
            }
        }
    }
?>
