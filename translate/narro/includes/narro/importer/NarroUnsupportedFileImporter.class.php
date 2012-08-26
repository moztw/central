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

    class NarroUnsupportedFileImporter extends NarroFileImporter {

        public function ExportFile($strTemplateFile, $strTranslatedFile) {
            if ($strTranslatedFile != $this->objProject->DefaultTranslationPath . '/' . $this->objFile->FilePath && QApplication::HasPermissionForThisLang('Can import project', $this->objProject->ProjectId)) {
                if (file_exists($this->objProject->DefaultTranslationPath . '/' . $this->objFile->FilePath))
                    copy($this->objProject->DefaultTranslationPath . '/' . $this->objFile->FilePath, $strTranslatedFile);
                else
                    copy($strTemplateFile, $strTranslatedFile);
            }
        }

        public function ImportFile($strTemplateFile, $strTranslatedFile = null) {
            if ($strTranslatedFile != '' && !file_exists($strTranslatedFile)) {
                NarroLogger::LogWarn(sprintf('Copying unsupported file type: %s', $strTemplateFile));
                NarroImportStatistics::$arrStatistics['Unsupported files that were copied from the source language']++;
                if (@copy($strTemplateFile, $strTranslatedFile) == false) {
                    NarroLogger::LogError(sprintf('Failed to copy "%s" to "%s"', $strTemplateFile, $strTranslatedFile));
                }
            }
        }
    }
?>
