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

    require(__DATAGEN_CLASSES__ . '/NarroProjectGen.class.php');

    /**
    * The NarroProject class defined here contains any
    * customized code for the NarroProject class in the
    * Object Relational Model.  It represents the "narro_project" table
    * in the database, and extends from the code generated abstract NarroProjectGen
    * class, which contains all the basic CRUD-type functionality as well as
    * basic methods to handle relationships and index-based loading.
    *
    * @package My Application
    * @subpackage DataObjects
    *
    */
    class NarroProject extends NarroProjectGen {
        /**
        * Default "to string" handler
        * Allows pages to _p()/echo()/print() this object, and to define the default
        * way this object would be outputted.
        *
        * Can also be called directly via $objNarroProject->__toString().
        *
        * @return string a nicely formatted string representation of this object
        */
        public function __toString() {
            return sprintf('NarroProject Object %s',  $this->intProjectId);
        }

        public function DeleteAllTextsCacheByLanguage($intLanguageId = null) {
            NarroApp::$Cache->remove('total_texts' . $this->ProjectId . '_' . $intLanguageId);
        }

        public function DeleteTranslatedTextsByLanguage($intLanguageId = null) {
            NarroApp::$Cache->remove('translated_texts_' . $this->ProjectId . '_' . $intLanguageId);
        }

        public function DeleteApprovedTextsByLanguage($intLanguageId = null) {
            NarroApp::$Cache->remove('approved_texts_' . $this->ProjectId . '_' . $intLanguageId);
        }


        public function CountAllTextsByLanguage($intLanguageId = null) {
            $objDatabase = NarroApp::$Database[1];
            if (is_null($intLanguageId)) $intLanguageId = NarroApp::GetLanguageId();

            $intTotalTexts = NarroApp::$Cache->load('total_texts_' . $this->ProjectId . '_' . $intLanguageId);
            if ($intTotalTexts === false || !class_exists('NarroCache')) {

                $strQuery = sprintf('SELECT COUNT(c.context_id) AS cnt FROM narro_context c, narro_context_info ci WHERE c.context_id=ci.context_id AND c.project_id = %d AND ci.language_id=%d AND c.active=1', $this->ProjectId, $intLanguageId);

                // Perform the Query
                $objDbResult = $objDatabase->Query($strQuery);

                if ($objDbResult) {
                    $mixRow = $objDbResult->FetchArray();
                    $intTotalTexts = $mixRow['cnt'];

                    $objProjectProgress = NarroProjectProgress::LoadByProjectIdLanguageId($this->ProjectId, $intLanguageId);

                    if (!$objProjectProgress instanceof NarroProjectProgress) {
                        $objProjectProgress = new NarroProjectProgress();
                        $objProjectProgress->ProjectId = $this->ProjectId;
                        $objProjectProgress->LanguageId = $intLanguageId;
                        $objProjectProgress->TotalTextCount = 0;
                        $objProjectProgress->ApprovedTextCount = 0;
                        $objProjectProgress->FuzzyTextCount = 0;
                        $objProjectProgress->ProgressPercent = 0;
                    }


                    $objProjectProgress->TotalTextCount = $intTotalTexts;
                    if ($objProjectProgress->TotalTextCount)
                        $objProjectProgress->ProgressPercent = floor($objProjectProgress->ApprovedTextCount*100/$objProjectProgress->TotalTextCount);
                    $objProjectProgress->Save();

                    NarroApp::$Cache->save($intTotalTexts, 'total_texts_' . $this->ProjectId . '_' . $intLanguageId);
                }
            }

            return $intTotalTexts;
        }

        public function CountTranslatedTextsByLanguage($intLanguageId = null) {
            $objDatabase = NarroApp::$Database[1];

            if (is_null($intLanguageId)) $intLanguageId = NarroApp::GetLanguageId();
            $intTranslatedTexts = NarroApp::$Cache->load('translated_texts_' . $this->ProjectId . '_' . $intLanguageId);
            if ($intTranslatedTexts === false || !class_exists('NarroCache')) {

                $strQuery = sprintf('SELECT COUNT(c.context_id) AS cnt FROM narro_context c, narro_context_info ci WHERE c.context_id=ci.context_id AND c.project_id = %d AND ci.language_id=%d AND ci.valid_suggestion_id IS NULL AND ci.has_suggestions=1 AND c.active=1', $this->ProjectId, $intLanguageId);

                // Perform the Query
                $objDbResult = $objDatabase->Query($strQuery);

                if ($objDbResult) {
                    $mixRow = $objDbResult->FetchArray();
                    $intTranslatedTexts = $mixRow['cnt'];

                    $objProjectProgress = NarroProjectProgress::LoadByProjectIdLanguageId($this->ProjectId, $intLanguageId);

                    if (!$objProjectProgress instanceof NarroProjectProgress) {
                        $objProjectProgress = new NarroProjectProgress();
                        $objProjectProgress->ProjectId = $this->ProjectId;
                        $objProjectProgress->LanguageId = $intLanguageId;
                        $objProjectProgress->TotalTextCount = 0;
                        $objProjectProgress->ApprovedTextCount = 0;
                        $objProjectProgress->FuzzyTextCount = 0;
                        $objProjectProgress->ProgressPercent = 0;
                    }

                    $objProjectProgress->FuzzyTextCount = $intTranslatedTexts;
                    $objProjectProgress->Save();

                    NarroApp::$Cache->save($intTranslatedTexts, 'translated_texts_' . $this->ProjectId . '_' . $intLanguageId);
                }
            }

            return $intTranslatedTexts;
        }

        public function CountApprovedTextsByLanguage($intLanguageId = null) {
            $objDatabase = NarroApp::$Database[1];

            if (is_null($intLanguageId)) $intLanguageId = NarroApp::GetLanguageId();
            $intApprovedTexts = NarroApp::$Cache->load('approved_texts_' . $this->ProjectId . '_' . $intLanguageId);
            if ($intApprovedTexts === false || !class_exists('NarroCache')) {

                $strQuery = sprintf('SELECT COUNT(c.context_id) AS cnt FROM `narro_context` c, narro_context_info ci WHERE c.context_id=ci.context_id AND c.project_id = %d AND ci.language_id=%d AND ci.valid_suggestion_id IS NOT NULL AND c.active=1', $this->ProjectId, $intLanguageId);
                // Perform the Query
                $objDbResult = $objDatabase->Query($strQuery);

                if ($objDbResult) {
                    $mixRow = $objDbResult->FetchArray();
                    $intApprovedTexts = $mixRow['cnt'];

                    $objProjectProgress = NarroProjectProgress::LoadByProjectIdLanguageId($this->ProjectId, $intLanguageId);

                    if (!$objProjectProgress instanceof NarroProjectProgress) {
                        $objProjectProgress = new NarroProjectProgress();
                        $objProjectProgress->LanguageId = $intLanguageId;
                        $objProjectProgress->ProjectId = $this->ProjectId;
                        $objProjectProgress->TotalTextCount = 0;
                        $objProjectProgress->ApprovedTextCount = 0;
                        $objProjectProgress->FuzzyTextCount = 0;
                        $objProjectProgress->ProgressPercent = 0;
                    }

                    $objProjectProgress->ApprovedTextCount = $intApprovedTexts;
                    if ($objProjectProgress->TotalTextCount)
                        $objProjectProgress->ProgressPercent = floor($objProjectProgress->ApprovedTextCount*100/$objProjectProgress->TotalTextCount);
                    $objProjectProgress->Save();
                    NarroApp::$Cache->save($intApprovedTexts, 'approved_texts_' . $this->ProjectId . '_' . $intLanguageId);
                }
            }

            return $intApprovedTexts;
        }
    }
?>