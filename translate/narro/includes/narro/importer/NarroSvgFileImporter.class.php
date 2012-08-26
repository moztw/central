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

    class NarroSvgFileImporter extends NarroFileImporter {
        protected $objFile;

        public function ExportFile($strTemplate, $strTranslatedFile = null) {

            if ($strFileContents = file_get_contents($strTemplate)) {
                if (preg_match_all('/<flowPara[^>]+>([^<]+)<\/flowPara>/', $strFileContents, $arrMatches)) {
                    foreach($arrMatches[0] as $intKey=>$strContext) {
                        $strOriginal = $arrMatches[1][$intKey];
                        if (trim($strOriginal) != '') {
                            $strTranslation = $this->GetTranslation($strOriginal, $strContext);
                            if ($strTranslation != $strOriginal) {
                                $strTranslationContext = str_replace($strOriginal, $strTranslation, $strContext);
                                $strFileContents = str_replace($strContext, $strTranslationContext, $strFileContents);
                            }
                        }
                    }
                }

                file_put_contents($strTranslatedFile, $strFileContents);
                chmod($strTranslatedFile, 0666);
            }
            else {
                NarroLogger::LogError(sprintf('Cannot open file "%s".', $strFileToImport));
            }
        }

        public function ImportFile($strFileToImport, $strTranslatedFile = null) {

            if ($strFileContents = file_get_contents($strFileToImport)) {
                if (preg_match_all('/<flowPara[^>]+>([^<]+)<\/flowPara>/', $strFileContents, $arrMatches)) {
                    foreach($arrMatches[0] as $intKey=>$strContext) {
                        if (trim($arrMatches[1][$intKey]) != '')
                            $this->AddTranslation($this->objFile, $arrMatches[1][$intKey], null, null, null, $strContext);
                    }
                }
            }
            else {
                NarroLogger::LogError(sprintf('Cannot open file "%s".', $strFileToImport));
            }
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
        protected function GetTranslation($strOriginal, $strContext) {
            $objNarroContextInfo = NarroContextInfo::QuerySingle(
                QQ::AndCondition(
                    QQ::Equal(QQN::NarroContextInfo()->Context->ProjectId, $this->objProject->ProjectId),
                    QQ::Equal(QQN::NarroContextInfo()->Context->FileId, $this->objFile->FileId),
                    QQ::Equal(QQN::NarroContextInfo()->Context->ContextMd5, md5($strContext)),
                    QQ::Equal(QQN::NarroContextInfo()->Context->Text->TextValueMd5, md5($strOriginal)),
                    QQ::Equal(QQN::NarroContextInfo()->LanguageId, $this->objTargetLanguage->LanguageId),
                    QQ::IsNotNull(QQN::NarroContextInfo()->ValidSuggestionId)
                )
            );

            if ( $objNarroContextInfo instanceof NarroContextInfo ) {
                return $objNarroContextInfo->ValidSuggestion->SuggestionValue;
            }
            else {
                return $strOriginal;
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
