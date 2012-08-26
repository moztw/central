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
    abstract class NarroMozillaFileImporter extends NarroFileImporter {
        protected $blnIsHeader = false;
        protected $blnHeaderFound = false;
        protected $blnFirstEntityFound = false;

        protected function FileAsArray($strFile, $blnNoHeader = false) {
            $intTime = time();

            if (!file_exists($strFile)) {
                NarroLogger::LogInfo(sprintf(t('%s does not exist'), $strFile));
                return false;
            }

            $strFileContent = file_get_contents($strFile);
            if (!$strFileContent) {
                NarroLogger::LogInfo(sprintf(t('%s is empty'), $strFile));
                return false;
            }

            $strFileContent = $this->PreProcessFile($strFileContent);

            $arrFile = explode("\n", $strFileContent);

            unset($strFileContent);

            $arrKeys = array();
            $strPreviousLines = '';
            $strFileHeader = '';

            foreach($arrFile as $intPos=>$strLine) {
                if ($this->blnIsHeader) {
                    $this->objFile->Header = $strPreviousLines;
                    $this->objFile->Save();
                    $this->blnIsHeader = false;
                    $strPreviousLines = '';
                }

                $strPreProcessedLine = $this->PreProcessLine($strLine);
                $strLineToProcess = $strPreviousLines . $strPreProcessedLine;

                $mixResult = $this->ProcessLine($strLineToProcess);

                if ($mixResult instanceof NarroFileEntity) {
                    $strLastKey = $mixResult->Key;
                    $arrKeys[$mixResult->Key] = $mixResult;
                    $strPreviousLines = '';
                    $this->blnFirstEntityFound = true;
                }
                else {
                    $strPreviousLines = $strPreviousLines . $strLine . "\n";
                }
            }

            if (!$this->blnHeaderFound) {
                $this->objFile->Header = null;
                $this->objFile->Save();
            }

            foreach ($arrKeys as $strKey=>$objEntity) {
                /* @var $objEntity NarroFileEntity */
                if (isset($strLastKey) && $strKey != $strLastKey)
                    $arrKeys[$strKey]->AfterValue .= "\n";
            }

            if (isset($strLastKey) && $strPreviousLines)
                $arrKeys[$strLastKey]->AfterValue .=  "\n" . $strPreviousLines;

            // NarroLogger::LogDebug(sprintf('Converted file to array in %s second(s)', (time() - $intTime)));

            return $arrKeys;
        }

        protected function GetLabelForAccessKey($strAccCtx, $arrTexts) {
            $arrPattern = array(
                '/^(.*)\.accesskey$/' => array('.label', '.message', '.title', '.button', '.placeholder', ''),
                '/^(.*)Access[kK]ey$/' => array('Label', 'Text', ''),
                '/^(.*)\.accessKey$/' => array('.label', '.message', '.title', ''),
                '/^(.*)\_accesskey$/' => array(''),
                '/^(.*)Accesskey$/' => array(''),
                '/^(.*)\.access$/' => array('', 'Button'),
                '/^accesskey\-(.*)$/' => array('button-')
            );

            foreach($arrPattern as $strPattern=>$arrLabel) {
                if (preg_match($strPattern, $strAccCtx, $arrMatches) === 1) {
                    foreach($arrLabel as $strLabel) {
                        if (isset($arrTexts[$arrMatches[1] . $strLabel]))
                            return $arrMatches[1] . $strLabel;
                        elseif (isset($arrTexts[$strLabel . $arrMatches[1]]))
                            return $strLabel . $arrMatches[1];
                    }
                }
            }

            $arrKeys = array_keys($arrTexts);
            $arrKeysFlipped = array_flip($arrKeys);
            $strPreviousLabel = $arrKeys[$arrKeysFlipped[$strAccCtx] - 1];
            // NarroLogger::LogDebug(sprintf('No matching context found for access key context %s, previous context is %s', $strAccCtx, $strPreviousLabel));

            return false;
        }

        protected function GetLabelForCommandKey($strAccCtx, $arrTexts) {
            $arrPattern = array(
                '/^(.*)\.key$/' => array('.label', '.message', '.title', '.button', '.placeholder', ''),
                '/^(.*)\.command[kK]ey$/' => array('.label', '.message', '.title', '')
            );

            foreach($arrPattern as $strPattern=>$arrLabel) {
                if (preg_match($strPattern, $strAccCtx, $arrMatches) === 1) {
                    foreach($arrLabel as $strLabel) {
                        if (isset($arrTexts[$arrMatches[1] . $strLabel]))
                        return $arrMatches[1] . $strLabel;
                        elseif (isset($arrTexts[$strLabel . $arrMatches[1]]))
                        return $strLabel . $arrMatches[1];
                    }
                }
            }

            $arrKeys = array_keys($arrTexts);
            $arrKeysFlipped = array_flip($arrKeys);
            $strPreviousLabel = $arrKeys[$arrKeysFlipped[$strAccCtx] - 1];
            // NarroLogger::LogDebug(sprintf('No matching context found for command key context %s, previous context is %s', $strAccCtx, $strPreviousLabel));

            return false;
        }


        /**
         * This function looks for accesskey entries and creates po style texts, e.g. &File
         * @param array $arrTexts an array with context as keys and texts as values
         */
        public function GetAccessKeys($arrTexts) {
            if (is_array($arrTexts)) {
                foreach($arrTexts as $strContext=>$objEntity) {
                    $strAccKey = $objEntity->Value;
                    if (stristr($strContext, 'access')) {
                        $strLabelCtx = $this->GetLabelForAccessKey($strContext, $arrTexts);
                        if ($strLabelCtx !== false) {
                            // NarroLogger::LogDebug(sprintf('Found access key %s for %s, contexts %s, %s', $strAccKey, $arrTexts[$strLabelCtx]->Value, $strLabelCtx, $strContext));
                            $arrTexts[$strContext]->LabelCtx = $strLabelCtx;
                            $arrTexts[$strLabelCtx]->AccessKey = $objEntity->Value;
                            $arrTexts[$strLabelCtx]->AccessKeyCtx = $strContext;
                        }
                    }

                    if (stristr($strContext, '.key') || stristr($strContext, '.commandkey')) {
                        $strLabelCtx = $this->GetLabelForCommandKey($strContext, $arrTexts);
                        if ($strLabelCtx !== false) {
                            // NarroLogger::LogDebug(sprintf('Found command key %s for %s, contexts %s, %s', $strAccKey, $arrTexts[$strLabelCtx]->Value, $strLabelCtx, $strContext));
                            $arrTexts[$strContext]->LabelCtx = $strLabelCtx;
                            $arrTexts[$strLabelCtx]->CommandKeyCtx = $strContext;
                            $arrTexts[$strLabelCtx]->CommandKey = $objEntity->Value;
                        }
                    }
                }
            }

            return $arrTexts;


        }

        /**
         * This function does the opposite of GetAccessKeys
         * @param array $arrTemplate an array with context as keys and original texts as values
         * @return array $arrTranslation an array with context as keys and translations as values
         */
        public function GetTranslations($arrTemplate) {
            $arrTranslation = array();

            $arrTranslationObjects =
                NarroContextInfo::QueryArray(
                    QQ::AndCondition(
                        QQ::Equal(QQN::NarroContextInfo()->Context->FileId, $this->objFile->FileId),
                        QQ::Equal(QQN::NarroContextInfo()->LanguageId, $this->objTargetLanguage->LanguageId),
                        QQ::Equal(QQN::NarroContextInfo()->Context->Active, 1)
                    ),
                    QQ::Expand(QQN::NarroContextInfo()->Context)
                );

            foreach($arrTranslationObjects as $objNarroContextInfo) {
                $arrTranslation[$objNarroContextInfo->Context->Context] = $this->GetExportedSuggestion($objNarroContextInfo);
                if ($arrTranslation[$objNarroContextInfo->Context->Context] === false) {
                    if ($this->blnSkipUntranslated == false)
                        $arrTranslation[$objNarroContextInfo->Context->Context] = $objNarroContextInfo->Context->Text->TextValue;
                    else
                        unset($arrTranslation[$objNarroContextInfo->Context->Context]);
                }

                if ($objNarroContextInfo->Context->TextAccessKey) {
                    if ($objNarroContextInfo->SuggestionAccessKey && isset($arrTemplate[$objNarroContextInfo->Context->Context]->AccessKeyCtx))
                        $arrTranslation[$arrTemplate[$objNarroContextInfo->Context->Context]->AccessKeyCtx] = $objNarroContextInfo->SuggestionAccessKey;
                    else
                        $arrTranslation[$arrTemplate[$objNarroContextInfo->Context->Context]->AccessKeyCtx] = $objNarroContextInfo->Context->TextAccessKey;
                }

                if ($objNarroContextInfo->Context->TextCommandKey) {
                    if ($objNarroContextInfo->SuggestionCommandKey && isset($arrTemplate[$objNarroContextInfo->Context->Context]->CommandKeyCtx))
                        $arrTranslation[$arrTemplate[$objNarroContextInfo->Context->Context]->CommandKeyCtx] = $objNarroContextInfo->SuggestionCommandKey;
                    else
                        $arrTranslation[$arrTemplate[$objNarroContextInfo->Context->Context]->CommandKeyCtx] = $objNarroContextInfo->Context->TextCommandKey;
                }
            }

            return $arrTranslation;
        }

        public function ImportFile($strTemplateFile, $strTranslatedFile = null) {
            $intTime = time();

            if ($strTranslatedFile)
                $arrTransKey = $this->FileAsArray($strTranslatedFile, false);

            $arrSourceKey = $this->FileAsArray($strTemplateFile);

            $intElapsedTime = time() - $intTime;
            if ($intElapsedTime > 0) {
                // NarroLogger::LogDebug(sprintf('Preprocessing %s took %d seconds.', $this->objFile->FileName, $intElapsedTime));
            }

            // NarroLogger::LogDebug(sprintf('Found %d contexts in file %s.', count($arrSourceKey), $this->objFile->FileName));

            if (is_array($arrSourceKey)) {
                $arrSourceKey = $this->GetAccessKeys($arrSourceKey);
                if (isset($arrTransKey))
                    $arrTransKey = $this->GetAccessKeys($arrTransKey);

                foreach($arrSourceKey as $strKey=>$objEntity) {
                    /* @var $objEntity NarroFileEntity */
                    // if it's a matched access key or command key, keep going
                    if (isset($objEntity->LabelCtx))
                        continue;

                    if (strstr($objEntity->Comment, 'DONT_TRANSLATE') !== false)
                        continue;

                    $this->AddTranslation(
                                $objEntity->Value,
                                $objEntity->AccessKey,
                                isset($arrTransKey[$strKey])?$arrTransKey[$strKey]->Value:null,
                                isset($arrTransKey[$strKey])?(isset($arrTransKey[$strKey]->AccessKey)?$arrTransKey[$strKey]->AccessKey:null):null,
                                trim($strKey),
                                (isset($objEntity->AccessKeyCtx))?
                                    trim($objEntity->Comment) . "\n" . trim($arrSourceKey[$objEntity->AccessKeyCtx]->Comment):
                                    trim($objEntity->Comment),
                                $objEntity->CommandKey,
                                isset($arrTransKey[$strKey])?(isset($arrTransKey[$strKey]->CommandKey)?$arrTransKey[$strKey]->CommandKey:null):null
                    );
                }
            }
            else {
                NarroLogger::LogWarn(sprintf('Found a empty template (%s), copying the original', $strTemplateFile));
                copy($strTemplateFile, $strTranslatedFile);
                chmod($strTranslatedFile, 0666);
            }
        }
    }
?>