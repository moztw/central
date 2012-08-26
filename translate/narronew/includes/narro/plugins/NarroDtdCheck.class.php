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
    class NarroDtdCheck extends NarroPlugin {

        public function __construct() {
            parent::__construct();
            $this->strName = t('DTD check');
            $this->Enable();
        }

        public function ExportSuggestion($strOriginal, $strTranslation, $strContext, NarroFile $objFile, NarroProject $objProject) {
            $strStrippedTranslation = preg_replace('/<\/?[a-z][^>]+>/', '', $strTranslation);
            if ($strTranslation && $objFile->TypeId == NarroFileType::MozillaDtd && strstr($strStrippedTranslation, '"')) {
                NarroLogger::LogError(
                    sprintf(
                        t('Your translation for "%s", in "%s" includes double quote characters. Those need to be written as HTML entities, otherwise the export will not be valid. You can use &quot; instead of each double quote.'),
                        str_replace("\n", '\\n', ((strlen($strOriginal) > 50)?substr($strOriginal, 0, 50) . '...':$strOriginal)),
                        $objFile->FilePath
                    )
                );
            }

            return array($strOriginal, $strTranslation, $strContext, $objFile, $objProject);
        }

        public function SaveSuggestion($strOriginal, $strTranslation, $strContext, NarroFile $objFile, NarroProject $objProject) {
            return $this->ApproveSuggestion($strOriginal, $strTranslation, $strContext, $objFile, $objProject);
        }

        /**
         * Checks for forgotten variables and entities
         * @param $strOriginal
         * @param $strTranslation
         * @param $strContext
         * @param $objFile
         * @param $objProject
         * @return array with the same parameters given
         */
        public function ApproveSuggestion($strOriginal, $strTranslation, $strContext, NarroFile $objFile, NarroProject $objProject) {
            $strStrippedTranslation = preg_replace('/<\/?[a-z][^>]+>/', '', $strTranslation);
            if ($objFile->TypeId == NarroFileType::MozillaDtd && strstr($strStrippedTranslation, '"'))
                $this->arrErrors[] = sprintf(
                    htmlentities(t('Your translation includes double quote characters. Those need to be written as HTML entities, otherwise the export will not be valid. You can use &quot; instead of each double quote.'))
                );

            return array($strOriginal, $strTranslation, $strContext, $objFile, $objProject);
        }
    }
?>