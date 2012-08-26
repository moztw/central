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

    class NarroFileExportPanel extends QPanel {
        protected $fileToUpload;
        protected $btnExport;
        protected $objFile;

        public function __construct(NarroFile $objFile, $objParentObject, $strControlId = null) {
            parent::__construct($objParentObject, $strControlId);

            $this->objFile = $objFile;

            $this->btnExport = new QButton($this);
            $this->btnExport->Text = t('Download');
            $this->btnExport->ActionParameter = $this->objFile->FileId;
            $this->btnExport->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnExport_Click'));

            $strTemplateFile = $this->objFile->Project->DefaultTemplatePath . $this->objFile->FilePath;
            if (file_exists($strTemplateFile) && (filesize($strTemplateFile) < __MAXIMUM_FILE_SIZE_TO_EXPORT__ || QApplication::HasPermissionForThisLang('Can export file', $this->objFile->ProjectId)) && file_exists($strTemplateFile))
                $this->blnDisplay = true;
            else
                $this->blnDisplay = false;

            $this->fileToUpload = new QFileControl($this);
        }

        public function GetControlHtml() {

            $this->strText = $this->btnExport->Render(false);

            return parent::GetControlHtml();
        }

        public function btnExport_Click($strFormId, $strControlId, $strParameter) {
           
            if (!$this->fileToUpload->Display) {
                $this->fileToUpload->Display = true;
                return false;
            }

            $objFileImporter = NarroFileType::GetFileImporter($this->objFile->TypeId);
            $objFileImporter->User = QApplication::$User;
            $objFileImporter->Project = $this->objFile->Project;
            $objFileImporter->SourceLanguage = NarroLanguage::LoadByLanguageCode(NarroLanguage::SOURCE_LANGUAGE_CODE);
            $objFileImporter->TargetLanguage = QApplication::$TargetLanguage;
            $objFileImporter->File = $this->objFile;

            $strTempFileName = tempnam(__TMP_PATH__, QApplication::$TargetLanguage->LanguageCode);
            
            if (file_exists($this->fileToUpload->File)) {
                $objFileImporter->ExportFile($this->fileToUpload->File, $strTempFileName);
                unlink($this->fileToUpload->File);
            }
            else
                $objFileImporter->ExportFile($this->objFile->Project->DefaultTemplatePath . $this->objFile->FilePath, $strTempFileName);
            
            ob_clean();
            header(sprintf('Content-Disposition: attachment; filename="%s"', $this->objFile->FileName));
            readfile($strTempFileName);
            unlink($strTempFileName);
            exit;
        }
    }