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
    class NarroMozilla {
        /**
         * This function looks for accesskey entries and creates po style texts, e.g. &File
         * @param array $arrTexts an array with context as keys and texts as values
         */
        public static function GetAccessKeys($arrTexts) {
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
                                NarroLog::LogMessage(2, sprintf(t('Found acesskey %s in context %s but didn\'t find any label to match "%s" (.label, Label, etc).'), $strAccKey, $strAccCtx, $arrMatches[1]));
                                continue;
                            }

                            if ($strLabelCtx) {
                                /**
                                 * strip mozilla entities when looking for an acceptable access key
                                 */
                                $strOriginalText = preg_replace('/&[^;]+;/', '', $arrTexts[$strLabelCtx]);
                                /**
                                 * search for the accesskey in the label
                                 */
                                $intPos = mb_stripos( $strOriginalText, $strAccKey);
                                if ($intPos !== false) {
                                    $strNewAcc = mb_substr($strOriginalText, $intPos, 1);
                                    $arrAccKey[$strLabelCtx] = $strNewAcc;
                                    unset($arrTexts[$strAccCtx]);
                                }
                                elseif (preg_match('/[a-z]/i', $strOriginalText)) {
                                    NarroLog::LogMessage(2, sprintf(t('Found access key %s does not exist in the label %s, using the first letter as accesskey'), $strAccKey, $arrTexts[$strLabelCtx]));
                                    $strNewAcc = mb_substr($arrTexts[$strLabelCtx], 0, 1);
                                    $arrAccKey[$strLabelCtx] = $strNewAcc;
                                    unset($arrTexts[$strAccCtx]);
//                                    NarroLog::LogMessage(2, sprintf(t('Found access key %s does not exist in the label %s, dropping translation'), $strAccKey, $arrTexts[$strLabelCtx]));
//                                    unset($arrTexts[$strAccCtx]);
//                                    unset($arrTexts[$strLabelCtx]);
                                }
                            }
                            else
                                continue;
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
        public static function GetTranslations($objFile, $arrTemplate) {
            $arrTranslation = array();

            $arrTranslationObjects =
                NarroContextInfo::QueryArray(
                    QQ::AndCondition(
                        QQ::Equal(QQN::NarroContextInfo()->Context->FileId, $objFile->FileId),
                        QQ::Equal(QQN::NarroContextInfo()->LanguageId, QApplication::$Language->LanguageId),
                        QQ::Equal(QQN::NarroContextInfo()->Context->Active, 1)
                    )
                );

            foreach($arrTranslationObjects as $objNarroContextInfo) {
                if ($objNarroContextInfo->ValidSuggestionId > 0) {
                    $arrTranslation[$objNarroContextInfo->Context->Context] = $objNarroContextInfo->ValidSuggestion->SuggestionValue;
                    if ($objNarroContextInfo->TextAccessKey) {
                        if ($objNarroContextInfo->SuggestionAccessKey)
                            $arrTranslationKeys[$objNarroContextInfo->Context->Context] = $objNarroContextInfo->SuggestionAccessKey;
                        else {
                            if (preg_match('/[a-zA-Z0-9]/', $objNarroContextInfo->ValidSuggestion->SuggestionValue, $arrMatches)) {
                                $arrTranslationKeys[$objNarroContextInfo->Context->Context] = $arrMatches[0];
                                NarroLog::LogMessage(2, sprintf(t('No access key found for context %s, text %s, using "%s"'), $objNarroContextInfo->Context->Context, $objNarroContextInfo->ValidSuggestion->SuggestionValue, $arrMatches[0]));
                                NarroImportStatistics::$arrStatistics['Texts with no access key set, but fixed']++;
                            }
                            else {
//                                NarroLog::LogMessage(2, sprintf(t('No access key found for context %s, text %s and could not find a valid letter to use, dropping translation.'), $objNarroContextInfo->Context->Context, $objNarroContextInfo->ValidSuggestion->SuggestionValue));
//                                unset($arrTranslation[$objNarroContextInfo->Context->Context]);
//                                NarroImportStatistics::$arrStatistics['Texts without acceptable access keys']++;
//                                NarroImportStatistics::$arrStatistics['Texts kept as original']++;
                            }

                        }
                        NarroImportStatistics::$arrStatistics['Texts that have access keys']++;
                    }
                    else
                        NarroImportStatistics::$arrStatistics["Texts that don't have access keys"]++;
                }
                else {
                    NarroLog::LogMessage(1, sprintf(t('In file "%s", the context "%s" does not have a valid suggestion.'), $objFile->FileName, $objNarroContextInfo->Context->Context));
                    NarroImportStatistics::$arrStatistics['Texts without valid suggestions']++;
                    NarroImportStatistics::$arrStatistics['Texts kept as original']++;
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