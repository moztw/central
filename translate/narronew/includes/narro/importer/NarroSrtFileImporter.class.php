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

    class NarroSrtFileImporter extends NarroFileImporter {

        public function __construct($objImporter = null) {
            parent::__construct($objImporter);

        }

        /**
         * Converts the file to an associative array
         * The key is something that must be unique to each text from that file; in most cases it can be the actual text
         * @param string $strFilePath file path
         * @return NarroFileEntity[]
         */
        protected function FileAsArray($strFilePath) {
            $hndFile = fopen($strFilePath, 'r');

            $i = 1;
            while(!feof($hndFile)) {
                $strIndex = trim(fgets($hndFile));
                if ($strIndex == $i) {
                    if (!feof($hndFile)) {
                        $strTime = fgets($hndFile);
                        if (!feof($hndFile)) {
                            $strLine = fgets($hndFile);
                            $strText = $strLine;
                            while(!feof($hndFile) && trim($strLine) != '') {
                                $strLine = fgets($hndFile);
                                if ($strLine)
                                    $strText .= $strLine;
                            }
                            
                            $objEntity = new NarroFileEntity();
                            $objEntity->Key = $i;
                            $objEntity->Comment = trim($strTime);
                            $objEntity->Value = trim($strText);
                            
                            if (isset($arrResult[$objEntity->Key]))
                                throw new Exception('Duplicate index found');
                            
                            $arrResult[$objEntity->Key] = $objEntity;
                        }
                    }
                    
                    $i++;
                }
            }
            
            return $arrResult;
        }

        public function ImportFile($strTemplateFile, $strTranslatedFile = null) {
            $intTime = time();

            if ($strTranslatedFile)
                $arrTransKey = $this->FileAsArray($strTranslatedFile);

            $arrSourceKey = $this->FileAsArray($strTemplateFile);
            
            QFirebug::error($arrSourceKey);
            
            QFirebug::error($arrTransKey);
            
            
            $intElapsedTime = time() - $intTime;
            if ($intElapsedTime > 0) {
                // NarroLogger::LogDebug(sprintf('Preprocessing %s took %d seconds.', $this->objFile->FileName, $intElapsedTime));
            }

            // NarroLogger::LogDebug(sprintf('Found %d contexts in file %s.', count($arrSourceKey), $this->objFile->FileName));

            if (is_array($arrSourceKey)) {
                foreach($arrSourceKey as $strContext=>$objEntity) {
                    /* @var $objEntity NarroFileEntity */
                    $this->AddTranslation(
                        $objEntity->Value,
                        null,
                        (isset($arrTransKey[$strContext]))?$arrTransKey[$strContext]->Value:null,
                        null,
                        $objEntity->Key,
                        $objEntity->Comment
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
                        $arrSourceKey[$objNarroContextInfo->Context->Context]->Value = $strTranslation;
                    }
                    else {
                        if ($this->blnSkipUntranslated == false)
                            $arrSourceKey[$objNarroContextInfo->Context->Context]->Value = $objNarroContextInfo->Context->Text->TextValue;
                        else
                            unset($arrTranslation[$objNarroContextInfo->Context->Context]);
                    }
                }
                
                $hndTranslationFile = fopen($strTranslatedFile, 'w');
                foreach($arrSourceKey as $strContext=>$objEntity) {
                    /* @var $objEntity NarroFileEntity */
                    fwrite($hndTranslationFile, $objEntity->Key . "\n");
                    fwrite($hndTranslationFile, $objEntity->Comment . "\n");
                    fwrite($hndTranslationFile, $objEntity->Value . "\n\n");
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
