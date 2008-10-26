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
    class NarroCache {
        public static function ClearAllTextsCount($intProjectId, $intLanguageId = null) {
            if (is_null($intLanguageId)) $intLanguageId = QApplication::$Language->LanguageId;
            
            QApplication::$Cache->remove('total_texts_' . $intProjectId . '_' . $intLanguageId);
            QApplication::$Cache->remove('translated_texts_' . $intProjectId . '_' . $intLanguageId);
            QApplication::$Cache->remove('validated_texts_' . $intProjectId . '_' . $intLanguageId);
        }
        
        public static function UpdateAllTextsByProjectAndLanguage($intValue, $intProjectId, $intLanguageId = null) {
            $objDatabase = QApplication::$Database[1];
            if (is_null($intLanguageId)) $intLanguageId = QApplication::$Language->LanguageId;
            
            $intTotalTexts = QApplication::$Cache->load('total_texts_' . $intProjectId . '_' . $intLanguageId);
            if ($intTotalTexts === false)
                $intTotalTexts = self::CountAllTextsByProjectAndLanguage($intProjectId, $intLanguageId);
            $intTotalTexts += $intValue;
            
            QApplication::$Cache->save($intTotalTexts, 'total_texts_' . $intProjectId . '_' . $intLanguageId);
        }
        
        public static function UpdateTranslatedTextsByProjectAndLanguage($intValue, $intProjectId, $intLanguageId = null) {
            $objDatabase = QApplication::$Database[1];
            if (is_null($intLanguageId)) $intLanguageId = QApplication::$Language->LanguageId;
            
            $intTotalTexts = QApplication::$Cache->load('translated_texts_' . $intProjectId . '_' . $intLanguageId);
            if ($intTotalTexts === false)
                $intTotalTexts = self::CountTranslatedTextsByProjectAndLanguage($intProjectId, $intLanguageId);
            $intTotalTexts += $intValue;
            
            QApplication::$Cache->save($intTotalTexts, 'translated_texts_' . $intProjectId . '_' . $intLanguageId);
        }

        public static function UpdateValidatedTextsByProjectAndLanguage($intValue, $intProjectId, $intLanguageId = null) {
            $objDatabase = QApplication::$Database[1];
            if (is_null($intLanguageId)) $intLanguageId = QApplication::$Language->LanguageId;
            
            $intTotalTexts = QApplication::$Cache->load('validated_texts_' . $intProjectId . '_' . $intLanguageId);
            if ($intTotalTexts === false)
                $intTotalTexts = self::CountValidatedTextsByProjectAndLanguage($intProjectId, $intLanguageId);
            $intTotalTexts += $intValue;
            
            QApplication::$Cache->save($intTotalTexts, 'validated_texts_' . $intProjectId . '_' . $intLanguageId);
        }        
        
        public static function CountAllTextsByProjectAndLanguage($intProjectId, $intLanguageId = null) {
            $objDatabase = QApplication::$Database[1];
            if (is_null($intLanguageId)) $intLanguageId = QApplication::$Language->LanguageId;
            
            $intTotalTexts = QApplication::$Cache->load('total_texts_' . $intProjectId . '_' . $intLanguageId);
            if ($intTotalTexts === false) {

                $strQuery = sprintf('SELECT COUNT(c.context_id) AS cnt FROM narro_context c, narro_context_info ci WHERE c.context_id=ci.context_id AND c.project_id = %d AND ci.language_id=%d AND c.active=1', $intProjectId, $intLanguageId);

                // Perform the Query
                $objDbResult = $objDatabase->Query($strQuery);

                if ($objDbResult) {
                    $mixRow = $objDbResult->FetchArray();
                    $intTotalTexts = $mixRow['cnt'];
                    QApplication::$Cache->save($intTotalTexts, 'total_texts_' . $intProjectId . '_' . $intLanguageId);
                }
            }
            
            return $intTotalTexts;
        }

        public static function CountTranslatedTextsByProjectAndLanguage($intProjectId, $intLanguageId = null) {
            $objDatabase = QApplication::$Database[1];
            
            if (is_null($intLanguageId)) $intLanguageId = QApplication::$Language->LanguageId;
            $intTranslatedTexts = QApplication::$Cache->load('translated_texts_' . $intProjectId . '_' . $intLanguageId);
            if ($intTranslatedTexts === false) {
            
                $strQuery = sprintf('SELECT COUNT(c.context_id) AS cnt FROM narro_context c, narro_context_info ci WHERE c.context_id=ci.context_id AND c.project_id = %d AND ci.language_id=%d AND ci.valid_suggestion_id IS NULL AND ci.has_suggestions=1 AND c.active=1', $intProjectId, $intLanguageId);

                // Perform the Query
                $objDbResult = $objDatabase->Query($strQuery);

                if ($objDbResult) {
                    $mixRow = $objDbResult->FetchArray();
                    $intTranslatedTexts = $mixRow['cnt'];
                    QApplication::$Cache->save($intTranslatedTexts, 'translated_texts_' . $intProjectId . '_' . $intLanguageId);
                }
            }
            
            return $intTranslatedTexts;
        }       
        
        public static function CountValidatedTextsByProjectAndLanguage($intProjectId, $intLanguageId = null) {
            $objDatabase = QApplication::$Database[1];
            
            if (is_null($intLanguageId)) $intLanguageId = QApplication::$Language->LanguageId;
            $intValidatedTexts = QApplication::$Cache->load('validated_texts_' . $intProjectId . '_' . $intLanguageId);
            if ($intValidatedTexts === false) {
            
                $strQuery = sprintf('SELECT COUNT(c.context_id) AS cnt FROM `narro_context` c, narro_context_info ci WHERE c.context_id=ci.context_id AND c.project_id = %d AND ci.language_id=%d AND ci.valid_suggestion_id IS NOT NULL AND c.active=1', $intProjectId, $intLanguageId);
                // Perform the Query
                $objDbResult = $objDatabase->Query($strQuery);

                if ($objDbResult) {
                    $mixRow = $objDbResult->FetchArray();
                    $intValidatedTexts = $mixRow['cnt'];
                    QApplication::$Cache->save($intValidatedTexts, 'validated_texts_' . $intProjectId . '_' . $intLanguageId);
                }
            }
            
            return $intValidatedTexts;
        }                
    }
?>