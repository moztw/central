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

    class NarroWebSourcePanel extends QPanel {
        protected $txtWebAddress;
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

            $this->txtWebAddress = new QTextBox($this, 'webImport');
            $this->txtWebAddress->Name = t('Web Address');
            $this->txtWebAddress->PreferedRenderMethod = 'RenderWithName';
            $this->txtWebAddress->Instructions = t('Please enter a web address to a zip file or a single supported file');

            $this->chkCopyFilesToDefaultDirectory = new QCheckBox($this);
            $this->chkCopyFilesToDefaultDirectory->Name = t('Copy files to the default project directory for later use');
            $this->chkCopyFilesToDefaultDirectory->Instructions = sprintf(t('This will also delete the files from "%s/"'), __IMPORT_PATH__ . '/' . $this->objProject->ProjectId . '/' . $this->objLanguage->LanguageCode);
            $this->chkCopyFilesToDefaultDirectory->Checked = true;
            $this->chkCopyFilesToDefaultDirectory->PreferedRenderMethod = 'RenderWithName';

            $this->blnAutoRenderChildren = true;
            
        }

        protected function CleanWorkingDirectory() {
            if (file_exists($this->strWorkingDirectory)) {
                NarroUtils::RecursiveDelete($this->strWorkingDirectory);
            }
        }

        protected function GetWorkingDirectory() {
            if ($this->txtWebAddress->Text == '')
                throw new Exception('You have to specify a web addresss, either a zip file or directly a file');

            $this->strWorkingDirectory = sprintf('%s/upload-u_%d-l_%s-p_%d', __TMP_PATH__, QApplication::GetUserId(), $this->objLanguage->LanguageCode, $this->objProject->ProjectId);

            $this->CleanWorkingDirectory();

            mkdir($this->strWorkingDirectory);
            chmod($this->strWorkingDirectory, 0777);
            $strDownloadedFileName = $this->strWorkingDirectory . '/' . basename($this->txtWebAddress->Text);
            if (!@copy($this->txtWebAddress->Text, $strDownloadedFileName)) {
                $ch = curl_init($this->txtWebAddress->Text);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);
                file_put_contents($strDownloadedFileName, $data);
            }
            chmod($strDownloadedFileName, 0666);

            switch(strtolower(pathinfo($strDownloadedFileName, PATHINFO_EXTENSION))) {
                case 'xpi':
                case 'zip':
                    NarroLogger::LogInfo(sprintf('Trying to uncompress %s', $strDownloadedFileName));
                    $objZipFile = new ZipArchive();
                    $intErrCode = $objZipFile->open($strDownloadedFileName);
                    if ($intErrCode === TRUE) {
                        $objZipFile->extractTo($this->strWorkingDirectory);
                        $objZipFile->close();
                        NarroLogger::LogInfo(sprintf('Sucessfully uncompressed %s.', $strDownloadedFileName));
                    } else {
                        switch($intErrCode) {
                            case ZIPARCHIVE::ER_NOZIP:
                                $strError = 'Not a zip archive';
                                break;
                            default:
                                $strError = 'Error code: '. $intErrCode;
                        }

                        throw new Exception(sprintf('Failed to uncompress %s: %s', $strDownloadedFileName, $strError));
                    }
                    break;
                case 'dtd':
                case 'properties':
                case 'ini':
                case 'inc':
                case 'po':
                case 'sdf':
                case 'svg':
                case 'dpo':
                case 'srt':
                case 'php':
                    NarroLogger::LogInfo(sprintf('Single file uploaded, copied %s to %s', $this->txtWebAddress->Text, $this->strWorkingDirectory));
                    break;
                default:
                    throw new Exception(sprintf('Unsupported file type uploaded'));
            }

            if (file_exists($this->txtWebAddress->Text))
                unlink($this->txtWebAddress->Text);

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
                    mkdir(__IMPORT_PATH__ . '/' . $this->objProject->ProjectId . '/' . $this->objLanguage->LanguageCode, 0777);
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
