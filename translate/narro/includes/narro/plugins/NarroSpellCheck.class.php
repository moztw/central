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
    class NarroSpellCheck extends NarroPlugin {

        public function __construct() {
            parent::__construct();
            $this->strName = t('Spell check');
            $this->Enable();
        }

        public static function GetSpellSuggestions($strText) {

            $strCleanText = mb_ereg_replace('[…\\n\.,:;\\\!\?0-9]+', ' ', $strText);
            $strCleanText = str_replace(array('\n', '\r'), array(' ', ' '), $strText);
            $strCleanText = mb_ereg_replace('http://[a-z\-A-Z\.]+', ' ', $strCleanText);
            $strCleanText = strip_tags($strCleanText);
            /**
             * mozilla entitites: &xxx;
             */
            $strCleanText = mb_ereg_replace('&[\.\-a-zA-Z\-0-9]+\;', ' ' , $strCleanText);
            /**
             * keyboard shortcuts
             */
            $strCleanText = mb_ereg_replace('[~&]', '' , $strCleanText);
            /**
             * openoffice entities: %xxx %%xxx %%%xxx #xxx and so on
             */
            $strCleanText = mb_ereg_replace('[\$\[\#\%]{1,3}[a-zA-Z\_\-0-9]+[\$\]\#\%]{0,3}', ' ', $strCleanText);

            /**
             * some characters that mess with the spellchecking
             */
            $strCleanText = mb_ereg_replace('[\(\)]+', ' ', $strCleanText);
            $strCleanText = mb_ereg_replace('[„”]', ' ', $strCleanText);
            $strCleanText = mb_ereg_replace('[…\\n\.,:;\\\!\?0-9]+', ' ', $strCleanText);

            return self::GetSpellSuggestionsWithPspell($strCleanText, QApplication::$TargetLanguage->LanguageCode);
        }

        public static function GetSpellSuggestionsWithPspell($strText, $strSpellLang) {
            if (!function_exists('pspell_new')) {
                return true;
            }

            if (file_exists(__DICTIONARY_PATH__ . '/' . $strSpellLang . '.dat')) {
                if (!defined('PSPELL_FAST'))
                    return self::GetSpellSuggestionsWithHunspell($strText, $strSpellLang);

                if (!$pspell_config = pspell_config_create($strSpellLang, null, null, 'utf-8'))
                    return self::GetSpellSuggestionsWithHunspell($strText, $strSpellLang);
                if (!pspell_config_data_dir($pspell_config, __DICTIONARY_PATH__))
                    return self::GetSpellSuggestionsWithHunspell($strText, $strSpellLang);

                if (!pspell_config_dict_dir($pspell_config, __DICTIONARY_PATH__))
                    return self::GetSpellSuggestionsWithHunspell($strText, $strSpellLang);

                if (!$pspell_link = @pspell_new_config($pspell_config)) {
                    return self::GetSpellSuggestionsWithHunspell($strText, $strSpellLang);
                }
            }
            else
                if (file_exists('/usr/lib/aspell-0.60/' . $strSpellLang . '.dat')) {
                    $strDictPath = '/usr/lib/aspell-0.60/';
                    $pspell_link = pspell_new($strSpellLang, null, null, 'utf-8');
                }
                elseif (file_exists('/usr/lib64/aspell-0.60/' . $strSpellLang . '.dat')) {
                    $strDictPath = '/usr/lib64/aspell-0.60/';
                    $pspell_link = pspell_new($strSpellLang, null, null, 'utf-8');
                }
                else
                    return self::GetSpellSuggestionsWithHunspell($strText, $strSpellLang);

            $arrSuggestions = array();
            $arrCleanText = mb_split('\s+', $strText);

            foreach($arrCleanText as $strCleanText) {

                if (!pspell_check($pspell_link, trim($strCleanText))) {
                    $suggestions = pspell_suggest($pspell_link, trim($strCleanText));

                    if (in_array($strCleanText, $suggestions))
                        continue;
                    $arrSuggestions[$strCleanText] = array_slice($suggestions, 0, 3);
                }
            }
            return $arrSuggestions;
        }

        public static function GetSpellSuggestionsWithHunspell($strText, $strSpellLang) {
            //@todo code me please
            return true;
        }

        public function SaveSuggestion($strOriginal, $strTranslation, $strContext, $objFile, $objProject) {
            return $this->ApproveSuggestion($strOriginal, $strTranslation, $strContext, $objFile, $objProject);
        }

        public function ApproveSuggestion($strOriginal, $strTranslation, $strContext, $objFile, $objProject) {
            $arrTextSuggestions = self::GetSpellSuggestions($strTranslation);
            
            $strSpellcheckText = '';

            if (is_array($arrTextSuggestions) && count($arrTextSuggestions)) {
                foreach($arrTextSuggestions as $strWord=>$arrSuggestions) {
                    if (count($arrSuggestions))
                        $strSpellcheckText .= sprintf(
                            t('<span class="mispelled_word">%s</span> seems to be mispelled. Maybe you meant %s.'),
                            $strWord,
                            ' <span class="mispelled_suggestion">' .
                                join('</span>, <span class="mispelled_suggestion">', $arrSuggestions) .
                                '</span>'
                        ) . '<br />';
                    else
                        $strSpellcheckText .= sprintf(
                            t('<span class="mispelled_word">%s</span> seems to be mispelled.'),
                            $strWord
                        ) . '<br />';
                }
                
                if ($strSpellcheckText)
                    $this->arrErrors[] =  $strSpellcheckText;
            }

            return array($strOriginal, $strTranslation, $strContext, $objFile, $objProject);
        }


    }
?>