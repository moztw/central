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
    class NarroMozillaFileImporter extends NarroFileImporter {
        /**
         * This function looks for accesskey entries and creates po style texts, e.g. &File
         * @param array $arrTexts an array with context as keys and texts as values
         */
        public function GetAccessKeys($arrTexts) {
            $arrAccKey = array();

            if (is_array($arrTexts))
                foreach($arrTexts as $strAccCtx=>$strAccKey) {
                    if (stristr($strAccCtx, 'accesskey')) {
                        /**
                         * if this is an accesskey, look for the label
                         * until now the following label and accesskeys are matched:
                         *
                         * ctx.label / ctx.acesskey
                         * ctxLabel / ctxAccesskey
                         * ctx / ctx.accesskey
                         *
                         * and so on
                         */
                        $arrMatches = array();
                        $strLabelCtx = false;
                        $strNewAcc = false;

                        if (preg_match('/([A-Z0-9a-z\.\_\-]+)([\.\-\_]a|[\.\-\_]{0,1}A)ccesskey$/s', $strAccCtx, $arrMatches)) {
                            $arrMatches[2] = str_replace('a', '', $arrMatches[2]);

                            if (isset($arrTexts[$arrMatches[1] . $arrMatches[2] . 'label']))
                                $strLabelCtx = $arrMatches[1] . $arrMatches[2] . 'label';
                            elseif (isset($arrTexts[$arrMatches[1] . $arrMatches[2] . 'title']))
                                $strLabelCtx = $arrMatches[1] . $arrMatches[2] . 'title';
                            elseif (isset($arrTexts[$arrMatches[1] . 'Label']))
                                $strLabelCtx = $arrMatches[1] . 'Label';
                            elseif (isset($arrTexts[$arrMatches[1]]))
                                $strLabelCtx = $arrMatches[1];
                            else {
                                $strLabelCtx = '';
                                NarroLog::LogMessage(2, sprintf('Found acesskey %s in context %s but didn\'t find any label to match "%s" (.label, Label, etc).', $strAccKey, $strAccCtx, $arrMatches[1]));
                                continue;
                            }

                            if ($strLabelCtx) {
                                NarroLog::LogMessage(1, sprintf('Found label context "%s", looking for an acceptable access key', $strLabelCtx));
                                /**
                                 * strip mozilla entities when looking for an acceptable access key
                                 */
                                $strOriginalText = preg_replace('/&[^;]+;/', '', $arrTexts[$strLabelCtx]);
                                /**
                                 * search for the accesskey in the label
                                 * the case of the access keys doesn't matter in Mozilla, so it's a insensitive search
                                 */
                                $intPos = @mb_stripos( $strOriginalText, $strAccKey);
                                if ($intPos !== false) {
                                    $arrAccKey[$strLabelCtx] = mb_substr($strOriginalText, $intPos, 1);
                                    unset($arrTexts[$strAccCtx]);
                                    NarroLog::LogMessage(1, sprintf('Found access key %s, using it', $arrAccKey[$strLabelCtx]));
                                }
                                elseif (preg_match('/[a-z]/i', $strOriginalText, $arrPossibleKeyMatches)) {
                                    $arrAccKey[$strLabelCtx] = $arrPossibleKeyMatches[0];
                                    unset($arrTexts[$strAccCtx]);
                                    NarroLog::LogMessage(3, sprintf('Found access key %s does not exist in the label %s, using the first ascii character as accesskey: "%s"', $strAccKey, $arrTexts[$strLabelCtx], $arrPossibleKeyMatches[0]));
                                }
                                else {
                                    $arrAccKey[$strLabelCtx] = $strAccKey;
                                    unset($arrTexts[$strAccCtx]);
                                    NarroLog::LogMessage(2, sprintf('No acceptable access key found for context "%s", text "%s", leaving the original.', $strLabelCtx, $strOriginalText));
                                }
                            }
                            else {
                                NarroLog::LogMessage(2, sprintf('Found acesskey %s in context %s but didn\'t find any label to match "%s" (.label, Label, etc).', $strAccKey, $strAccCtx, $arrMatches[1]));
                                continue;
                            }
                        }
                    }
                    else
                        continue;
                }

            return array($arrTexts, $arrAccKey);


        }

        /**
         * This function does the opposite of GetAccessKeys
         * @param array $arrTemplate an array with context as keys and original texts as values
         * @param array $arrTranslation an array with context as keys and translations as values
         * @return array $arrTranslation an array with context as keys and translations as values
         */
        public function GetTranslations($objFile, $arrTemplate) {
            $arrTranslation = array();

            $arrTranslationObjects =
                NarroContextInfo::QueryArray(
                    QQ::AndCondition(
                        QQ::Equal(QQN::NarroContextInfo()->Context->FileId, $objFile->FileId),
                        QQ::Equal(QQN::NarroContextInfo()->LanguageId, NarroApp::GetLanguageId()),
                        QQ::Equal(QQN::NarroContextInfo()->Context->Active, 1)
                    )
                );

            foreach($arrTranslationObjects as $objNarroContextInfo) {
                $arrTranslation[$objNarroContextInfo->Context->Context] = $this->GetExportedSuggestion($objNarroContextInfo);
                if ($arrTranslation[$objNarroContextInfo->Context->Context] === false)
                    $arrTranslation[$objNarroContextInfo->Context->Context] = $objNarroContextInfo->Context->Text->TextValue;

                if ($objNarroContextInfo->TextAccessKey) {
                    if ($objNarroContextInfo->SuggestionAccessKey) {
                        if (!preg_match('/[a-z0-9\-\+]/i', $objNarroContextInfo->SuggestionAccessKey)) {
                            if (preg_match('/[a-z0-9\-\+]/i', $objNarroContextInfo->ValidSuggestion->SuggestionValue, $arrPossibleKeyMatches)) {
                                $arrTranslationKeys[$objNarroContextInfo->Context->Context] = $arrPossibleKeyMatches[0];
                                NarroLog::LogMessage(3, sprintf('For context "%s", found access key "%s" is not a ascii character, using the first ascii character as accesskey: "%s"', $objNarroContextInfo->Context->Context, $objNarroContextInfo->SuggestionAccessKey, $arrPossibleKeyMatches[0]));
                            }
                            else {
                                $arrTranslationKeys[$objNarroContextInfo->Context->Context] = $objNarroContextInfo->TextAccessKey;
                                NarroLog::LogMessage(3, sprintf('For context "%s", found access key "%s" is not a ascii character, and no ascii characters were found in "%s", keeping the original access key "%s"', $objNarroContextInfo->Context->Context, $objNarroContextInfo->SuggestionAccessKey, $objNarroContextInfo->ValidSuggestion->SuggestionValue, $arrPossibleKeyMatches[0]));
                            }
                        }
                        else
                            $arrTranslationKeys[$objNarroContextInfo->Context->Context] = $objNarroContextInfo->SuggestionAccessKey;
                    }
                    else
                        $arrTranslationKeys[$objNarroContextInfo->Context->Context] = $objNarroContextInfo->TextAccessKey;
                }
            }

            foreach($arrTemplate as $strKey=>$strOriginalText) {
                if (trim($strKey) == '') continue;

                /**
                 * if this is an accesskey, look for the label
                 * until now the following label and accesskeys are matched:
                 *
                 * ctx.label / ctx.acesskey
                 * ctxLabel / ctxAccesskey
                 * ctx / ctx.accesskey
                 *
                 * and so on
                 */
                if (preg_match('/([A-Z0-9a-z\.\_\-]+)([\.\-\_]a|[\.\-\_]{0,1}A)ccesskey$/s', $strKey, $arrMatches)) {
                    $arrMatches[2] = str_replace('a', '', $arrMatches[2]);
                    if (isset($arrTranslation[$arrMatches[1] . $arrMatches[2] . 'label']))
                        $strMatchedKey = $arrMatches[1] . $arrMatches[2] . 'label';
                    elseif (isset($arrTranslation[$arrMatches[1] . $arrMatches[2] . 'title']))
                        $strMatchedKey = $arrMatches[1] . $arrMatches[2] . 'title';
                    elseif (isset($arrTranslation[$arrMatches[1] . 'Label']))
                        $strMatchedKey = $arrMatches[1] . 'Label';
                    elseif (isset($arrTranslation[$arrMatches[1]]))
                        $strMatchedKey = $arrMatches[1];
                    else {
                        NarroImportStatistics::$arrStatistics['Orphan translation access keys']++;
                        continue;
                    }
                    if (isset($arrTranslationKeys[$strMatchedKey]))
                        $arrTranslation[$strKey] = $arrTranslationKeys[$strMatchedKey];
                }
            }

            NarroImportStatistics::$arrStatistics['Contexts to export'] += count($arrTemplate);
            NarroImportStatistics::$arrStatistics['Exported contexts'] += count($arrTranslation);

            return $arrTranslation;
        }
    }
?>