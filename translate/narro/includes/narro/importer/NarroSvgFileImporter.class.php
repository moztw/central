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

    class NarroSvgFileImporter extends NarroFileImporter {
        protected $objFile;

        public function ExportFile($objFile, $strTemplate, $strTranslatedFile = null) {
            $this->objFile = $objFile;

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
                NarroLog::LogMessage(3, sprintf('Cannot open file "%s".', $strFileToImport));
            }
        }

        public function ImportFile($objFile, $strFileToImport, $strTranslatedFile = null) {
            $this->objFile = $objFile;

            if ($strFileContents = file_get_contents($strFileToImport)) {
                if (preg_match_all('/<flowPara[^>]+>([^<]+)<\/flowPara>/', $strFileContents, $arrMatches)) {
                    foreach($arrMatches[0] as $intKey=>$strContext) {
                        if (trim($arrMatches[1][$intKey]) != '')
                            $this->AddTranslation($objFile, $arrMatches[1][$intKey], null, null, null, $strContext);
                    }
                }
            }
            else {
                NarroLog::LogMessage(3, sprintf('Cannot open file "%s".', $strFileToImport));
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
    }

?>
