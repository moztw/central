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

    class NarroPhpMyAdminFileImporter extends NarroFileImporter {
        protected $objFile;

        public function ExportFile($strTemplate, $strTranslatedFile) {
            if ($strTemplateFileContents = file_get_contents($strTemplate)) {
                $arrTemplate = array();
                if (preg_match_all('/([^$]+)\$([^\s]+)\s*=\s*([\']?.*[\']?);(.*)/m', $strTemplateFileContents, $arrTemplateMatches)) {
                    foreach($arrTemplateMatches[2] as $intKey=>$strIdentifier) {
                        if (trim(preg_replace('/^\'(.*)\'$/', '\1', $arrTemplateMatches[3][$intKey]))) {
                            $strText = preg_replace('/^\'(.*)\'$/', '\1', $arrTemplateMatches[3][$intKey]);
                            $strContext = $arrTemplateMatches[1][$intKey] . $arrTemplateMatches[2][$intKey] . $arrTemplateMatches[4][$intKey];

                            $objNarroContextInfo = $this->GetContextInfo($strText, trim($strContext));
                            if ($objNarroContextInfo->ValidSuggestionId) {
                                /**
                                 * @todo replace the following code with a replacement of the full line
                                 */
                                $strNewBlock = NarroString::Replace("= '" . $strText . "'", "= '" . $objNarroContextInfo->ValidSuggestion->SuggestionValue . "'", $arrTemplateMatches[0][$intKey], 1);
                                $strTemplateFileContents = str_replace($arrTemplateMatches[0][$intKey], $strNewBlock, $strTemplateFileContents);
                            }

                        }
                    }
                    file_put_contents($strTranslatedFile, $strTemplateFileContents);

                }
            }
            else {
                NarroLogger::LogError(sprintf('Cannot open file "%s".', $strFileToImport));
            }
        }

        public function ImportFile($strFileToImport, $strTranslatedFile = null) {

            if ($strTemplateFileContents = file_get_contents($strFileToImport)) {
                $arrTemplate = array();
                if (preg_match_all('/([^$]+)\$([^\s]+)\s*=\s*([\']?.*[\']?);(.*)/m', $strTemplateFileContents, $arrTemplateMatches)) {
                    if ($strTranslatedFileContents = file_get_contents($strTranslatedFile)) {
                        $arrTranslationMatches = array();
                        preg_match_all('/([^$]+)\$([^\s]+)\s*=\s*([\']?.*[\']?);(.*)/m', $strTranslatedFileContents, $arrTranslationMatches);
                        foreach($arrTranslationMatches[2] as $intKey=>$strIdentifier) {
                            if (trim(preg_replace('/^\'(.*)\'$/', '\1', $arrTranslationMatches[3][$intKey]))) {
                                $arrTranslations[$strIdentifier]['text'] = preg_replace('/^\'(.*)\'$/', '\1', $arrTranslationMatches[3][$intKey]);
                                $arrTranslations[$strIdentifier]['context'] = $arrTranslationMatches[1][$intKey] . $arrTranslationMatches[2][$intKey] . $arrTranslationMatches[4][$intKey];
                            }
                        }
                    }

                    foreach($arrTemplateMatches[2] as $intKey=>$strIdentifier) {
                        if (trim(preg_replace('/^\'(.*)\'$/', '\1', $arrTemplateMatches[3][$intKey]))) {
                            $arrTemplate[$strIdentifier]['text'] = preg_replace('/^\'(.*)\'$/', '\1', $arrTemplateMatches[3][$intKey]);
                            $arrTemplate[$strIdentifier]['context'] = $arrTemplateMatches[1][$intKey] . $arrTemplateMatches[2][$intKey] . $arrTemplateMatches[4][$intKey];
                            if (isset($arrTranslations[$strIdentifier]))
                                $arrTemplate[$strIdentifier]['translation'] = $arrTranslations[$strIdentifier]['text'];
                            else
                                $arrTemplate[$strIdentifier]['translation'] = '';
                        }
                    }


                    foreach($arrTemplate as $intKey=>$arrInfo) {
                        $this->AddTranslation($arrInfo['text'], null, $arrInfo['translation'], null, $arrInfo['context']);
                    }
                }
            }
            else {
                NarroLogger::LogError(sprintf('Cannot open file "%s".', $strFileToImport));
            }

        }

        /**
         * Preprocesses the whole file, e.g. removing trailing spaces
         * @param string $strFile file content
         * @return string
         */
        protected function PreProcessFile($strFile) {}

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
        protected function FileAsArray($strFilePath) {}

        /**
         * Tells whether the file is a comment
         * This function helps with comments that spread over multiple lines
         * @param string $strLine
         * @return boolean
         */
        protected function IsComment($strLine) {}

        /**
         * Preprocesses the line if needed
         * e.g. in the source file there's a comment like '# #define MOZ_LANGPACK_CONTRIBUTORS that should be uncommented
         * @param string $strLine
         * @param array $arrComment
         * @param array $arrLinesBefore
         * @return array an array with the arguments received; processed if needed
         */
        protected function PreProcessLine($strLine, $arrComment, $arrLinesBefore) {}

        /**
         * Process the line by splitting the $strLine in key=>value
         * array(array('key' => $strKey, 'value' => $strValue), $arrComment, $arrLinesBefore)
         * or
         * array(false, $arrComment, $arrLinesBefore)
         * @param string $strLine
         * @param array $arrComment
         * @param array $arrLinesBefore
         * @return array
         */
        protected function ProcessLine($strLine, $arrComment, $arrLinesBefore) {}

    }

?>
