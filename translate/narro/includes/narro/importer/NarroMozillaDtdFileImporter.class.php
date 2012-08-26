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

    class NarroMozillaDtdFileImporter extends NarroMozillaFileImporter {
        const ENTITY_REGEX = '/(.*)(<!ENTITY\s+)([a-z][^\s]+)(\s+")([^"]*)("\s?>\s*)/im';
        const ENTITY_REGEX_2 = "/(.*)(<!ENTITY\s+)([a-z][^\s]+)(\s+')([^']*)('\s?>\s*)/im";
        const COMMENT_REGEX = '/<!--([^>]+)-->/m';
        
        protected $blnCommentStart = false;
        protected $blnCommentEnd = true;
        protected $intCommments = 0;
        
        /**
         * Preprocesses the whole file, e.g. removing trailing spaces
         * @param string $strFile file content
         * @return string
         */
        protected function PreProcessFile($strFile) {
            return $strFile;
        }

        /**
         * Preprocesses the line if needed
         * e.g. in the source file there's a comment like '# #define MOZ_LANGPACK_CONTRIBUTORS that should be uncommented
         * @param string $strLine
         * @return string
         */
        protected function PreProcessLine($strLine) {

            if (strstr($strLine, 'credit.translation'))
                $strLine = preg_replace('/<!ENTITY\s+credit.translation\s+"">/', '<!ENTITY credit.translation "<h3>Translators</h3><ul><li>Name Here</li></ul>">', $strLine);

            return $strLine;
        }
        
        protected function GetComments($strLine) {
            if (preg_match_all(self::COMMENT_REGEX, $strLine, $arrMatches)) {
                return $arrMatches[0];
            }
            else
                return array();
        }
        
        protected function StripComments($strLine) {
            return preg_replace(self::COMMENT_REGEX, '', $strLine);
        }

        /**
         * Process the line by splitting the $strLine in key=>value
         * array(array('key' => $strKey, 'value' => $strValue), $arrComment, $arrLinesBefore)
         * or
         * array(false, $arrComment, $arrLinesBefore)
         * @param string $strLine
         * @return NarroFileEntity
         */
        protected function ProcessLine($strLine) {
            if (preg_match(self::ENTITY_REGEX, $this->StripComments($strLine), $arrMatches) || preg_match(self::ENTITY_REGEX_2, $this->StripComments($strLine), $arrMatches) ) {
                $objEntity = new NarroFileEntity();

                $objEntity->Key = $arrMatches[3];
                $objEntity->Value = $arrMatches[5];

                $strLineWithoutEntity = str_replace($arrMatches[0], '', $strLine);

                $objEntity->Comment = join("\n", $this->GetComments($strLine));

                $objEntity->BeforeValue = substr($strLine, 0, strpos($strLine, $arrMatches[0])) . $arrMatches[1] . $arrMatches[2] . $arrMatches[3] . $arrMatches[4];
                $objEntity->AfterValue = $arrMatches[6] . substr($strLine, strpos($strLine, $arrMatches[0]) + strlen($arrMatches[0]));
                
                return $objEntity;
            }
            else {
                $arrComments = $this->GetComments($strLine);
                if ($this->blnHeaderFound == false && $this->blnFirstEntityFound == false && count($arrComments) == 1) {
                    if (strstr($arrComments[0], 'BEGIN LICENSE BLOCK')) {
                        $this->blnHeaderFound = true;
                        $this->blnIsHeader = true;
                    }
                }
                return false;
            }
        }

        public function ExportFile($strTemplateFile, $strTranslatedFile) {
            $intTime = time();

            $arrSourceKey = $this->FileAsArray($strTemplateFile);
            
            $intElapsedTime = time() - $intTime;
            if ($intElapsedTime > 0) {
                // NarroLogger::LogDebug(sprintf('Preprocessing %s took %d seconds.', $this->objFile->FileName, $intElapsedTime));
            }

            // NarroLogger::LogDebug(sprintf('Found %d contexts in file %s.', count($arrSourceKey), $this->objFile->FileName));

            if (is_array($arrSourceKey)) {
                $arrSourceKey = $this->GetAccessKeys($arrSourceKey);
                $arrTranslation = $this->GetTranslations($arrSourceKey);

                $hndTranslationFile = fopen($strTranslatedFile, 'w');

                if ($this->objProject->GetPreferenceValueByName('Export translators and reviewers in the file header as a comment') == 'Yes') {
                    $arrUsers = array();
                    foreach($this->objFile->GetTranslatorArray($this->objTargetLanguage->LanguageId) as $objUser) {
                        $arrUsers[] = sprintf("# %s <%s>", $objUser->RealName, $objUser->Email);
                    }
    
                    if (count($arrUsers))
                        fwrite($hndTranslationFile, sprintf("<!--\n# Translator(s):\n#\n%s\n#\n-->\n", join("\n", $arrUsers)));
    
                    $arrUsers = array();
                    foreach($this->objFile->GetReviewerArray($this->objTargetLanguage->LanguageId) as $objUser) {
                        $arrUsers[] = sprintf("# %s <%s>", $objUser->RealName, $objUser->Email);
                    }
    
                    if (count($arrUsers))
                        fwrite($hndTranslationFile, sprintf("<!--\n# Reviewer(s):\n#\n%s\n#\n-->\n", join("\n", $arrUsers)));
                }

                if ($this->objFile->Header)
                    fwrite($hndTranslationFile, $this->objFile->Header);
                
                foreach($arrSourceKey as $strContext=>$objEntity) {
                    if (isset($arrTranslation[$strContext]))
                        fwrite($hndTranslationFile, $objEntity->BeforeValue . $arrTranslation[$strContext] . $objEntity->AfterValue);
                    else
                        fwrite($hndTranslationFile, $objEntity->BeforeValue . $objEntity->Value . $objEntity->AfterValue);
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
