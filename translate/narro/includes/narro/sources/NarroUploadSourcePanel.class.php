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

    class NarroUploadSourcePanel extends QPanel {
        protected $fileSource;
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

            $this->fileSource = new QFileAsset($this);
            $this->fileSource->DisplayStyle = QDisplayStyle::Block;
            $this->fileSource->TemporaryUploadPath = __TMP_PATH__;
            $this->fileSource->PreferedRenderMethod = 'RenderWithName';
            $this->fileSource->Instructions = t('Please upload an archive that contains the files');

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
            if (!file_exists($this->fileSource->File))
                throw new Exception('You have to upload a file');

            $this->strWorkingDirectory = sprintf('%s/upload-u_%d-l_%s-p_%d', __TMP_PATH__, QApplication::GetUserId(), $this->objLanguage->LanguageCode, $this->objProject->ProjectId);

            $this->CleanWorkingDirectory();

            mkdir($this->strWorkingDirectory);
            chmod($this->strWorkingDirectory, 0777);

            switch(strtolower(pathinfo($this->fileSource->File, PATHINFO_EXTENSION))) {
                case 'zip':
                case 'xpi':
                    NarroLogger::LogInfo(sprintf('Trying to uncompress %s', $this->fileSource->FileName));
                    $objZipFile = new ZipArchive();
                    $intErrCode = $objZipFile->open($this->fileSource->File);
                    if ($intErrCode === TRUE) {
                        $objZipFile->extractTo($this->strWorkingDirectory);
                        $objZipFile->close();
                        NarroLogger::LogInfo(sprintf('Sucessfully uncompressed %s.', $this->fileSource->FileName));
                    } else {
                        switch($intErrCode) {
                            case ZIPARCHIVE::ER_NOZIP:
                                $strError = 'Not a zip archive';
                                break;
                            default:
                                $strError = 'Error code: '. $intErrCode;
                        }
                        $this->fileSource->File = '';

                        throw new Exception(sprintf('Failed to uncompress %s: %s', $this->fileSource->File, $strError));
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
                    copy($this->fileSource->File, $this->strWorkingDirectory . '/' . $this->fileSource->FileName);
                    chmod($this->strWorkingDirectory . '/' . $this->fileSource->FileName, 0666);
                    NarroLogger::LogInfo(sprintf('Single file uploaded, copied %s to %s', $this->fileSource->FileName, $this->strWorkingDirectory));
                    break;
                default:
                    throw new Exception(sprintf('Unsupported file type uploaded'));
            }

            if (file_exists($this->fileSource->File))
                unlink($this->fileSource->File);

            $this->fileSource->btnDelete_Click();

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
