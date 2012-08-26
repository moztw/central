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

    class NarroVcsSourcePanel extends QPanel {
        protected $txtRepository;
        protected $objProject;
        protected $strWorkingDirectory;
        protected $objLanguage;
        protected $chkCopyFilesToDefaultDirectory;

        public function __construct(NarroProject $objProject, NarroLanguage $objLanguage, $objParentObject, $strControlId = null) {
            // Call the Parent
            try {
                parent::__construct($objParentObject, $strControlId);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            $this->objProject = $objProject;
            $this->objLanguage = $objLanguage;

            $this->txtRepository = new QTextBox($this);
            $this->txtRepository->Name = 'Repository path';
            $this->txtRepository->PreferedRenderMethod = 'RenderWithName';

            $this->blnAutoRenderChildren = true;

            $this->chkCopyFilesToDefaultDirectory = new QCheckBox($this);
            $this->chkCopyFilesToDefaultDirectory->Name = t('Copy files to the default project directory for later use');
            $this->chkCopyFilesToDefaultDirectory->Instructions = sprintf(t('This will also delete the files from "%s/"'), __IMPORT_PATH__ . '/' . $this->objProject->ProjectId . '/' . $this->objLanguage->LanguageCode);
            $this->chkCopyFilesToDefaultDirectory->Checked = true;
            $this->chkCopyFilesToDefaultDirectory->PreferedRenderMethod = 'RenderWithName';

        }

        protected function CleanWorkingDirectory() {
            if (file_exists($this->strWorkingDirectory)) {
                NarroUtils::RecursiveDelete($this->strWorkingDirectory);
            }
        }

        protected function GetWorkingDirectory($strCheckoutCommand = null) {
            $this->strWorkingDirectory = sprintf('%s/upload-u_%d-l_%s-p_%d', __TMP_PATH__, QApplication::GetUserId(), $this->objLanguage->LanguageCode, $this->objProject->ProjectId);

            $this->CleanWorkingDirectory();

            if (!$this instanceof NarroMercurialSourcePanel)
                mkdir($this->strWorkingDirectory);

            $strCommand = sprintf($strCheckoutCommand, escapeshellarg($this->txtRepository->Text), escapeshellarg($this->strWorkingDirectory));
            NarroLogger::LogInfo(sprintf('Running "%s"', $strCommand));
            $strProcLogFile = __TMP_PATH__ . '/' . $this->objProject->ProjectId . '-' . $this->objLanguage->LanguageCode . '-vcs.log';

            if (file_exists($strProcLogFile) && is_writable($strProcLogFile)) {
                unlink($strProcLogFile);
            }

            chdir(__TMP_PATH__);
            $mixProcess = proc_open("$strCommand", array(1 => array("file", $strProcLogFile, 'a'), 2 => array("file", $strProcLogFile, 'a')), $foo);
            
            $status = proc_get_status($mixProcess);
            while ($status['running']) {
                $status = proc_get_status($mixProcess);
            }
            proc_close($mixProcess);
            
            if (!file_exists($this->strWorkingDirectory))
                throw new Exception(sprintf('The working directory "%s" does not exist, probably the checkout command failed', $this->strWorkingDirectory));

            chmod($this->strWorkingDirectory, 0777);

            if (file_exists($strProcLogFile))
                NarroLogger::LogInfo(file_get_contents($strProcLogFile));

            NarroUtils::RecursiveDelete($this->strWorkingDirectory . '/.hg');
            foreach(NarroUtils::SearchDirectoryByName($this->strWorkingDirectory, '.svn') as $strSvnDir) {
                NarroUtils::RecursiveDelete($strSvnDir);
            }

            $arrSearchResult = NarroUtils::SearchDirectoryByName($this->strWorkingDirectory, $this->objLanguage->LanguageCode);

            if ($arrSearchResult == false)
                $arrSearchResult = NarroUtils::SearchDirectoryByName($this->strWorkingDirectory, $this->objLanguage->LanguageCode . '-' . $this->objLanguage->CountryCode);

            if ($arrSearchResult == false)
                $arrSearchResult = NarroUtils::SearchDirectoryByName($this->strWorkingDirectory, $this->objLanguage->LanguageCode . '_' . $this->objLanguage->CountryCode);

            NarroUtils::RecursiveChmod($this->strWorkingDirectory);

            if (is_array($arrSearchResult) && count($arrSearchResult) == 1) {
                NarroLogger::LogWarn(sprintf('Path changed from "%s" to "%s" because a directory named "%s" was found deeper in the given path.', $this->strWorkingDirectory, $arrSearchResult[0], $this->objLanguage->LanguageCode));
                $this->strWorkingDirectory = $arrSearchResult[0];
            }

            if ($this->chkCopyFilesToDefaultDirectory->Checked) {
                if (file_exists(__IMPORT_PATH__ . '/' . $this->objProject->ProjectId . '/' . $this->objLanguage->LanguageCode))
                    NarroUtils::RecursiveDelete(__IMPORT_PATH__ . '/' . $this->objProject->ProjectId . '/' . $this->objLanguage->LanguageCode .'/*');
                else {
                    mkdir(__IMPORT_PATH__ . '/' . $this->objProject->ProjectId . '/' . $this->objLanguage->LanguageCode, 0777, true);
                }
                NarroUtils::RecursiveCopy($this->strWorkingDirectory, __IMPORT_PATH__ . '/' . $this->objProject->ProjectId . '/' . $this->objLanguage->LanguageCode);
                NarroUtils::RecursiveChmod(__IMPORT_PATH__ . '/' . $this->objProject->ProjectId . '/' . $this->objLanguage->LanguageCode);
            }

            return $this->strWorkingDirectory;
        }

        public function __get($strName) {
            switch ($strName) {
                case "Directory":
                    return $this->GetWorkingDirectory();

                default:
                    try {
                        return parent::__get($strName);
                        break;
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }
            }
        }

        public function __set($strName, $mixValue) {
            $this->blnModified = true;

            switch ($strName) {
                case "Directory":
                    try {
                        $this->strWorkingDirectory = QType::Cast($mixValue, QType::String);
                        break;
                    } catch (QInvalidCastException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                default:
                    try {
                        parent::__set($strName, $mixValue);
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }
                    break;
            }
        }
    }