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
    class NarroCache extends NarroPlugin {

        public function __construct() {
            parent::__construct();
            $this->blnEnable = true;
            $this->strName = t('Narro cache');
        }

        public function AddText($strOriginal, $strTranslation, $strContext, NarroFile $objFile, NarroProject $objProject) {
            $objFile->DeleteAllTextsCacheByLanguage(NarroApp::GetLanguageId());
            $objProject->DeleteAllTextsCacheByLanguage(NarroApp::GetLanguageId());
            return array($strOriginal, $strTranslation, $strContext, $objFile, $objProject);
        }

        public function ActivateFile(NarroFile $objFile, NarroProject $objProject) {
            return array($objFile, $objProject);
        }

        public function ActivateFolder(NarroFile $objFile, NarroProject $objProject) {
            return array($objFile, $objProject);
        }

        public function DisapproveSuggestion($strOriginal, $strTranslation, $strContext, NarroFile $objFile, NarroProject $objProject) {
            $objFile->DeleteApprovedTextsByLanguage(NarroApp::GetLanguageId());
            $objProject->DeleteApprovedTextsByLanguage(NarroApp::GetLanguageId());
            $objFile->DeleteTranslatedTextsByLanguage(NarroApp::GetLanguageId());
            $objProject->DeleteTranslatedTextsByLanguage(NarroApp::GetLanguageId());

            return array($strOriginal, $strTranslation, $strContext, $objFile, $objProject);
        }

        public function ApproveSuggestion($strOriginal, $strTranslation, $strContext, NarroFile $objFile, NarroProject $objProject) {
            $objFile->DeleteApprovedTextsByLanguage(NarroApp::GetLanguageId());
            $objProject->DeleteApprovedTextsByLanguage(NarroApp::GetLanguageId());
            $objFile->DeleteTranslatedTextsByLanguage(NarroApp::GetLanguageId());
            $objProject->DeleteTranslatedTextsByLanguage(NarroApp::GetLanguageId());

            return array($strOriginal, $strTranslation, $strContext, $objFile, $objProject);
        }

        public function AddSuggestion($strOriginal, $strTranslation, $strContext, NarroFile $objFile, NarroProject $objProject) {
            $objFile->DeleteTranslatedTextsByLanguage(NarroApp::GetLanguageId());
            $objProject->DeleteTranslatedTextsByLanguage(NarroApp::GetLanguageId());

            return array($strOriginal, $strTranslation, $strContext, $objFile, $objProject);
        }

        public function DeleteSuggestion($strOriginal, $strTranslation, $strContext, NarroFile $objFile, NarroProject $objProject) {
            $objFile->DeleteTranslatedTextsByLanguage(NarroApp::GetLanguageId());
            $objProject->DeleteTranslatedTextsByLanguage(NarroApp::GetLanguageId());

            return array($strOriginal, $strTranslation, $strContext, $objFile, $objProject);
        }
    }
?>