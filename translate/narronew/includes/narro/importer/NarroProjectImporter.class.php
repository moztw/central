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
     *
     * @property array $ExportAuthorList comma separated list of usernames or array of user ids
     */

    class NarroProjectImporter {
        /**
         * the user object used for import
         */
        protected $objUser;
        /**
         * the language object used to import in
         */
        protected $objSourceLanguage;
        /**
         * the language object used to import from
         */
        protected $objTargetLanguage;
        /**
         * the project object that is imported
         */
        protected $objProject;
        /**
         * whether to check if the suggestion value is the same as the original text
         * if it's true, the suggestions that are the same as the original text are not imported
         */
        protected $blnCheckEqual = true;
        /**
         * whether to approve the imported suggestions
         */
        protected $blnApprove;
        /**
         * whether to approve the import suggestions even if another suggestion is approved in Narro
         * @var boolean
         */
        protected $blnApproveAlreadyApproved = false;
        /**
         * whether to import only suggestions, that is don't add anything else than suggestions
         */
        protected $blnOnlySuggestions = false;

        protected $blnImportUnchangedFiles = false;

        /**
         * whether to export the source text if no translation is found
         */
        protected $blnSkipUntranslated = false;

        /**
         * what suggestions are exported
         * 1 = approved
         * 2 = approved and most voted
         * 3 = approved and most recent suggestion
         * 4 = approved and most voted and most recent suggestion
         * 5 = approved and current user's suggestion
         * 6 = approved then the most recent suggestion from selected users in the given order
         */
        protected $intExportedSuggestion = 1;

        /**
         * Whether to import translations
         * @var boolean
         */
        protected $blnImportSuggestions = true;

        /**
         * Array of Narro user ids
         */
        protected $arrExportAuthorList;

        protected $strTranslationPath;
        protected $strTemplatePath;
        protected $intTotalContexts = 0;
        protected $intTotalFiles = 0;

        protected $arrFileId;

        public function MarkUnusedFilesAsInactive() {
            if (count($this->arrFileId)) {
                NarroFile::GetDatabase()->NonQuery(
                    sprintf(
                        'UPDATE narro_file SET active=0 WHERE project_id=%d AND file_id NOT IN (%s)',
                        $this->objProject->ProjectId,
                        join(',', array_keys($this->arrFileId))
                    )
                );

                NarroFile::GetDatabase()->NonQuery(
                    sprintf(
                        'UPDATE narro_context SET active=0 WHERE project_id=%d AND file_id NOT IN (%s)',
                        $this->objProject->ProjectId,
                        join(',', array_keys($this->arrFileId))
                    )
                );
            }
        }


        public function ImportProject() {

            $this->startTimer();

            if (
                function_exists('popen') &&
                function_exists('escapeshellarg') &&
                function_exists('escapeshellcmd') &&
                file_exists(__IMPORT_PATH__ . '/' . $this->objProject->ProjectId . '/import.sh')
            ) {
                NarroLogger::LogInfo('Found a before import script, trying to run it.');
                 $fp = popen(
                        sprintf(
                            '/bin/sh %s %s %d %s %d %d 2>&1',
                            escapeshellarg(__IMPORT_PATH__ . '/' . $this->objProject->ProjectId . '/import.sh'),
                            escapeshellarg($this->objTargetLanguage->LanguageCode),
                            $this->objTargetLanguage->LanguageId,
                            escapeshellarg($this->objProject->ProjectName),
                            $this->objProject->ProjectId,
                            QApplication::GetUserId()
                        ),
                        'r'
                );

                $strOutput = '';

                while(!feof($fp)) {
                    $strOutput .= fread($fp, 1024);
                }
                if (pclose($fp))
                    NarroLogger::LogError("Before import script failed:\n" . $strOutput);
                else
                    NarroLogger::LogInfo("Before import script finished successfully:\n" . $strOutput);
            }

            /**
             * Make an exception for the naro project. The template path will be changed to the locale directory.
             */
            if ($this->objProject->ProjectName == 'Narro') {
                $this->strTemplatePath = __DOCROOT__ . __SUBDIRECTORY__ . '/locale/en-US';
                if (!file_exists($this->strTemplatePath))
                    mkdir($this->strTemplatePath, 0777);

                $this->strTranslationPath = __DOCROOT__ . __SUBDIRECTORY__ . '/locale/' . $this->objTargetLanguage->LanguageCode;
                if (!file_exists($this->strTranslationPath))
                    mkdir($this->strTranslationPath, 0777);

                if (SERVER_INSTANCE == 'dev')
                    $this->CreateNarroTemplate($this->objProject->ProjectId);

            }

            if (!file_exists($this->strTemplatePath))
                throw new Exception(sprintf('Template path %s does not exist.', $this->strTemplatePath));

            NarroLogger::LogInfo(sprintf('Starting import for the project %s', $this->objProject->ProjectName));
            NarroLogger::LogInfo(sprintf('Template path is %s', $this->strTemplatePath));
            NarroLogger::LogInfo(sprintf('Translation path is %s', $this->strTranslationPath));
            NarroLogger::LogInfo(sprintf('Active plugins: %s', join(',', QApplication::$PluginHandler->ActivePlugins)));
            NarroLogger::LogInfo(sprintf('Running import under user %s', $this->objUser->Username));

            if (is_dir($this->strTemplatePath)) {
                /**
                 * If we have the big en-US.sdf file, we need to split it first in smaller pieces
                 */
                if ($this->objProject->ProjectType == NarroProjectType::OpenOffice) {
                    $strBigGsiFile = $this->strTemplatePath . '/' . $this->objSourceLanguage->LanguageCode .'.sdf';
                    if (file_exists($strBigGsiFile)) {
                        NarroLogger::LogInfo(sprintf('Found a big GSI file, splitting it in smaller files before import'));
                        NarroOpenOfficeSdfFileImporter::SplitFile($strBigGsiFile, $this->strTemplatePath, array($this->objSourceLanguage->LanguageCode));
                        unlink($strBigGsiFile);
                    }

                    $strBigGsiFile = $this->strTranslationPath . '/' . $this->objTargetLanguage->LanguageCode .'.sdf';
                    if (file_exists($strBigGsiFile)) {
                        NarroLogger::LogInfo(sprintf('Found a big GSI file, splitting it in smaller files before import'));
                        NarroOpenOfficeSdfFileImporter::SplitFile($strBigGsiFile, $this->strTranslationPath, array($this->objTargetLanguage->LanguageCode));
                        unlink($strBigGsiFile);
                    }
                }

                if ($this->blnOnlySuggestions == false)
                    QApplication::$PluginHandler->BeforeImportProject($this->objProject);

                /**
                 * Go ahead and import from the directory.
                 */
                if ($this->ImportFromDirectory()) {
                    /**
                     * After the import is finished, copy the files for future use to the project directory
                     */
                    if ($this->strTemplatePath != $this->objProject->DefaultTemplatePath)
                        NarroUtils::RecursiveCopy($this->strTemplatePath, $this->objProject->DefaultTemplatePath);

                    /**
                     * The same for translation files
                     */
                    if ($this->strTranslationPath != $this->objProject->DefaultTranslationPath)
                        if (file_exists($this->strTranslationPath))
                            NarroUtils::RecursiveCopy($this->strTranslationPath, $this->objProject->DefaultTranslationPath);
                        else
                            NarroLogger::LogWarn(sprintf('"%s" is not a directory, not copying to default translation path: "%s"', $this->strTranslationPath, $this->objProject->DefaultTranslationPath));

                    $this->stopTimer();
                    NarroLogger::LogInfo(sprintf('Import finished successfully in %d seconds.', NarroImportStatistics::$arrStatistics['End time'] - NarroImportStatistics::$arrStatistics['Start time']));
                }
                else {
                    NarroLogger::LogError('Import failed. See any messages above for details.');
                }
            }
            else
                throw new Exception(sprintf('Template path "%s" is not a directory.', $this->strTemplatePath));


            QApplication::$PluginHandler->AfterImportProject($this->objProject);

            $strUploadPath = sprintf('%s/upload-u_%d-l_%s-p_%d', __TMP_PATH__, QApplication::GetUserId(), $this->objSourceLanguage->LanguageCode, $this->objProject->ProjectId);
            if (file_exists($strUploadPath))
                NarroUtils::RecursiveDelete($strUploadPath);

            $strUploadPath = sprintf('%s/upload-u_%d-l_%s-p_%d', __TMP_PATH__, QApplication::GetUserId(), $this->objTargetLanguage->LanguageCode, $this->objProject->ProjectId);
            if (file_exists($strUploadPath))
                NarroUtils::RecursiveDelete($strUploadPath);

            if ($this->blnOnlySuggestions == false)
                $this->MarkUnusedFilesAsInactive();

            NarroProgress::ClearProgressFileName($this->objProject->ProjectId, 'import');

            $this->objProject->CountAllTextsByLanguage();
            $this->objProject->CountApprovedTextsByLanguage();
            $this->objProject->CountTranslatedTextsByLanguage();

            foreach(NarroImportStatistics::$arrStatistics as $strName=>$strValue) {
                if ($strValue != 0)
                NarroLogger::LogInfo(stripslashes($strName) . ': ' . $strValue);
            }

            if (SERVER_INSTANCE == 'dev') {
                $strQueryData = '';
                $intTimeSpentOnQueries = 0;
                if (isset($GLOBALS['arrQueries']) && is_array($GLOBALS['arrQueries']))
                foreach($GLOBALS['arrQueries'] as $arrQueryData) {
                    $strQueryData .= sprintf('"%s";"%d"', str_replace("\n", " ", $arrQueryData[0]), $arrQueryData[1]) . "\n";
                    $intTimeSpentOnQueries += $arrQueryData[1];
                }
                file_put_contents(__TMP_PATH__ . '/queries.csv', $strQueryData);
                @chmod(__TMP_PATH__ . '/queries.csv', 0666);

                $strCacheData = '';
                if (isset($GLOBALS['arrCacheQueries']) && is_array($GLOBALS['arrCacheQueries']))
                foreach($GLOBALS['arrCacheQueries'] as $arrCacheData) {
                    $strCacheData .= sprintf('"%s";"%d"', str_replace("\n", " ", $arrCacheData[0]), $arrCacheData[1]) . "\n";
                }
                file_put_contents(__TMP_PATH__ . '/cache.csv', $strCacheData);
                @chmod(__TMP_PATH__ . '/cache.csv', 0666);

                NarroLogger::LogInfo(sprintf('%d queries in total, %d seconds spent on them', count(@$GLOBALS['arrQueries']), $intTimeSpentOnQueries));
                NarroLogger::LogInfo(sprintf('%d cache queries in total, %s seconds spent on them', count(@$GLOBALS['arrCacheQueries']), intval(@$GLOBALS['arrCacheQueriesSpent'])));
            }
        }

        public function ImportFromXpi($strXpiFilePath) {
            $strWorkingDir = $strXpiFilePath . '_extract';
            mkdir($strWorkingDir, 0777);
            NarroLogger::LogInfo(sprintf('Trying to uncompress %s', $strXpiFilePath));
            $objZipFile = new ZipArchive();
            $intErrCode = $objZipFile->open($strXpiFilePath);
            if ($intErrCode === TRUE) {
                $objZipFile->extractTo($strWorkingDir);
                $objZipFile->close();
                NarroLogger::LogInfo(sprintf('Sucessfully uncompressed %s.', $strXpiFilePath));
            } else {
                switch($intErrCode) {
                    case ZIPARCHIVE::ER_NOZIP:
                        $strError = 'Not a zip archive';
                        break;
                    default:
                        $strError = 'Error code: '. $intErrCode;
                }

                throw new Exception(sprintf('Failed to uncompress %s: %s', $strXpiFilePath, $strError));
            }

            NarroUtils::RecursiveChmod($strWorkingDir);

            // Search source directory
            $arrSearchResult = NarroUtils::SearchDirectoryByName($strWorkingDir, $this->objSourceLanguage->LanguageCode);

            if ($arrSearchResult == false)
                $arrSearchResult = NarroUtils::SearchDirectoryByName($strWorkingDir, $this->objSourceLanguage->LanguageCode . '-' . $this->objSourceLanguage->CountryCode);

            if ($arrSearchResult == false)
                $arrSearchResult = NarroUtils::SearchDirectoryByName($strWorkingDir, $this->objSourceLanguage->LanguageCode . '_' . $this->objSourceLanguage->CountryCode);


            if (is_array($arrSearchResult) && count($arrSearchResult) == 1) {
                NarroLogger::LogWarn(sprintf('Path changed from "%s" to "%s" because a directory named "%s" was found deeper in the given path.', $strWorkingDir, $arrSearchResult[0], $this->objSourceLanguage->LanguageCode));

                $strTemplatePath = $arrSearchResult[0];
            }

            // Search target directory
            $arrSearchResult = NarroUtils::SearchDirectoryByName($strWorkingDir, $this->objTargetLanguage->LanguageCode);

            if ($arrSearchResult == false)
                $arrSearchResult = NarroUtils::SearchDirectoryByName($strWorkingDir, $this->objTargetLanguage->LanguageCode . '-' . $this->objTargetLanguage->CountryCode);

            if ($arrSearchResult == false)
                $arrSearchResult = NarroUtils::SearchDirectoryByName($strWorkingDir, $this->objTargetLanguage->LanguageCode . '_' . $this->objTargetLanguage->CountryCode);


            if (is_array($arrSearchResult) && count($arrSearchResult) == 1) {
                NarroLogger::LogWarn(sprintf('Path changed from "%s" to "%s" because a directory named "%s" was found deeper in the given path.', $strWorkingDir, $arrSearchResult[0], $this->objTargetLanguage->LanguageCode));

                $strTranslationPath = $arrSearchResult[0];
            }

            if (isset($strTemplatePath) && isset($strTranslationPath)) {
                $this->strTemplatePath = $strTemplatePath;
                $this->strTranslationPath = $strTranslationPath;

                $this->ImportFromDirectory();
            }

            NarroUtils::RecursiveDelete($strWorkingDir);

        }

        public function ImportFromDirectory() {

            /**
             * get the file list with complete paths
             */
            $arrFiles = $this->ListDir($this->strTemplatePath);
            $intTotalFilesToProcess = count($arrFiles);

            if ($intTotalFilesToProcess == 1 && pathinfo($arrFiles[0], PATHINFO_EXTENSION) == 'xpi')
                return $this->ImportFromXpi($arrFiles[0]);

            if ($intTotalFilesToProcess > __MAXIMUM_FILE_COUNT_TO_IMPORT__) {
                NarroLogger::LogError(sprintf('Too many files to process: %d. The maximum number of files to import is set in the configuration file at %d', $intTotalFilesToProcess, __MAXIMUM_FILE_COUNT_TO_IMPORT__));
                return false;
            }

            NarroLogger::LogInfo(sprintf('Starting to process %d files using directory %s', $intTotalFilesToProcess, $this->strTemplatePath));

            $arrDirectories = array();
            NarroProgress::SetProgress(0, $this->objProject->ProjectId, 'import', $intTotalFilesToProcess);

            if (is_array($arrFiles))
            foreach($arrFiles as $intFileNo=>$strFileToImport) {
                if (preg_match('/\/CVS|\/\.svn|\/\.hg.*|\/\.git/', $strFileToImport)) continue;

                $strFilePath = str_replace($this->strTemplatePath, '', $strFileToImport);
                $arrFileParts = explode('/', $strFilePath);
                $strFileName = $arrFileParts[count($arrFileParts)-1];

                unset($arrFileParts[count($arrFileParts)-1]);
                unset($arrFileParts[0]);

                /**
                 * create directories
                 */
                $strPath = '';
                $intParentId = null;
                foreach($arrFileParts as $intPos=>$strDir) {
                    $strPath = $strPath . '/' . $strDir;
                    if (!isset($arrDirectories[$strPath])) {
                        if ($intParentId) {
                            $objFile = NarroFile::LoadByProjectIdFileNameParentId($this->objProject->ProjectId, $strDir, $intParentId);
                        }
                        else {
                            $objFile = NarroFile::QuerySingle(
                                            QQ::AndCondition(
                                                QQ::Equal(
                                                    QQN::NarroFile()->ProjectId,
                                                    $this->objProject->ProjectId
                                                ),
                                                QQ::Equal(
                                                    QQN::NarroFile()->FileName,
                                                    $strDir
                                                ),
                                                QQ::IsNull(QQN::NarroFile()->ParentId)
                                            )
                            );
                        }

                        if (!$objFile instanceof NarroFile) {
                            /**
                             * add the file
                             */
                            $objFile = new NarroFile();
                            $objFile->FileName = $strDir;
                            $objFile->TypeId = NarroFileType::Folder;
                            if ($intParentId)
                                $objFile->ParentId = $intParentId;
                            $objFile->ProjectId = $this->objProject->ProjectId;
                            $objFile->FilePath = $strPath;
                            $objFile->Modified = QDateTime::Now();
                            $objFile->Created = QDateTime::Now();
                            $objFile->Active = 1;
                            if ($this->blnOnlySuggestions == false)
                                $objFile->Save();
                            // NarroLogger::LogDebug(sprintf('Added folder "%s" from "%s"', $strDir, $strPath));
                            NarroImportStatistics::$arrStatistics['Imported folders']++;
                        }

                        $arrDirectories[$strPath] = $objFile->FileId;

                        if (!$objFile->Active) {
                            $objFile->Active = 1;
                            if ($this->blnOnlySuggestions == false)
                                $objFile->Save();
                        }

                        // Create the file progress if needed
                        $objFile->FileProgressForCurrentLanguage;

                        $this->arrFileId[$objFile->FileId] = 1;
                    }
                    $intParentId = $arrDirectories[$strPath];
                }

                /**
                 * import the file
                 */
                $intFileType = $this->GetFileType($strFileName);

                if (!is_readable($strFileToImport)) {
                    NarroLogger::LogError(sprintf('Cannot read "%s"', $strFileToImport));
                    return false;
                }

                $objFile = NarroFile::LoadByProjectIdFileNameParentId(
                    $this->objProject->ProjectId, $strFileName, $intParentId,
                    QQ::Expand(
                        QQN::NarroFile()->NarroFileProgressAsFile,
                        QQ::Equal(QQN::NarroFile()->NarroFileProgressAsFile->LanguageId, $this->objTargetLanguage->LanguageId)
                    )
                );

                if ($objFile instanceof NarroFile) {
                    $strMd5File = md5_file($strFileToImport);

                    if ($strMd5File == $objFile->FileMd5) {
                        $blnSourceFileChanged = false;
                        NarroImportStatistics::$arrStatistics['Unchanged files']++;
                    } else {
                        $objFile->FileMd5 = $strMd5File;
                        $objFile->Save();
                        // Set the md5 for all languages to null to force import
                        NarroFile::GetDatabase()->NonQuery(sprintf('UPDATE narro_file_progress SET file_md5=NULL WHERE file_id=%d', $objFile->FileId));
                        $blnSourceFileChanged = true;
                        NarroImportStatistics::$arrStatistics['Changed files']++;
                    }
                    NarroImportStatistics::$arrStatistics['Kept files']++;
                }
                else {
                    /**
                     * add the file
                     */
                    $objFile = new NarroFile();
                    $objFile->FileName = $strFileName;
                    $objFile->TypeId = $intFileType;
                    if ($intParentId)
                        $objFile->ParentId = $intParentId;
                    $objFile->ProjectId = $this->objProject->ProjectId;
                    $objFile->Active = 1;
                    $objFile->FilePath = $strFilePath;
                    $objFile->FileMd5 = md5_file($strFileToImport);
                    $objFile->Modified = QDateTime::Now();
                    $objFile->Created = QDateTime::Now();
                    if ($this->blnOnlySuggestions == false)
                        $objFile->Save();
                    $blnSourceFileChanged = true;
                    QApplication::$PluginHandler->ActivateFile($objFile, $this->objProject);
                    // NarroLogger::LogDebug(sprintf('Added file "%s" from "%s"', $strFileName, $strPath));
                    NarroImportStatistics::$arrStatistics['Imported files']++;
                }

                if ($objFile->Active == 0) {
                    $objFile->Active = 1;
                    if ($this->blnOnlySuggestions == false)
                        $objFile->Save();
                }

                $this->arrFileId[$objFile->FileId] = 1;

                $strTranslatedFileToImport = str_replace($this->strTemplatePath, $this->strTranslationPath, $strFileToImport);

                if ($objFile->FileId > 0) {
                    $intTime = time();
                    if (file_exists($strTranslatedFileToImport)) {
                        $this->ImportFile($objFile, $strFileToImport, $strTranslatedFileToImport);
                    }
                    else {
                        // it's ok, equal strings won't be imported
                        $this->ImportFile($objFile, $strFileToImport);
                    }

                    $intElapsedTime = time() - $intTime;
                    // NarroLogger::LogDebug(sprintf('Processed file "%s" in %d seconds, %d files left', str_replace($this->strTemplatePath, '', $strFileToImport), $intElapsedTime, (count($arrFiles) - $intFileNo - 1)));
                }

                NarroProgress::SetProgress(intval((($intFileNo+1)*100)/$intTotalFilesToProcess), $this->objProject->ProjectId, 'import', $intTotalFilesToProcess, 1);

            }

            return true;
        }

        public function ImportFile (NarroFile $objFile, $strTemplateFile, $strTranslatedFile = false) {
            $objFileProgress = $objFile->_NarroFileProgressAsFile;
            if (!$objFileProgress) {
                $objFileProgress = new NarroFileProgress();
                $objFileProgress->FileId = $objFile->FileId;
                $objFileProgress->LanguageId = $this->objTargetLanguage->LanguageId;
                $objFileProgress->Export = 1;
                $objFileProgress->ApprovedTextCount = 0;
                $objFileProgress->FuzzyTextCount = 0;
                $objFileProgress->TotalTextCount = 0;
                $objFileProgress->ProgressPercent = 0;
            }

            if ($this->blnImportUnchangedFiles == false) {
                if ($objFileProgress && $strTranslatedFile) {
                    if (
                        $objFile->FileMd5 == md5_file($strTemplateFile) &&
                        $objFileProgress->FileMd5 == md5_file($strTranslatedFile)
                    ) {
                        // NarroLogger::LogDebug(sprintf('Both source and target file are unchanged, skipping import for %s', $strTemplateFile));
                        return true;
                    }
                }
            }

            if ($strTranslatedFile) {
                $objFileProgress->FileMd5 = md5_file($strTranslatedFile);
                if ($this->blnOnlySuggestions == false || $objFileProgress->FileProgressId > 0)
                    $objFileProgress->Save();
            }

            if (!$objFile instanceof NarroFile)
                return false;

            if (is_file($strTemplateFile) && filesize($strTemplateFile) > __MAXIMUM_FILE_SIZE_TO_IMPORT__) {
                NarroLogger::LogError(sprintf('The file "%s" exceeds the maximum file size allowed to be imported, skipping it', $strTemplateFile));
                return false;
            }

            if (is_file($strTranslatedFile) && filesize($strTranslatedFile) > __MAXIMUM_FILE_SIZE_TO_IMPORT__) {
                NarroLogger::LogError(sprintf('The file "%s" exceeds the maximum file size allowed to be imported, skipping it', $strTranslatedFile));
                return false;
            }

            if ($strTranslatedFile) {
                // NarroLogger::LogDebug( sprintf( t('Starting to import from$this->strTemplatePathr_replace($this->objProject->DefaultTemplatePath, '', $strTemplateFile), str_replace($this->objProject->DefaultTranslationPath, '', $strTranslatedFile)));
            }
            else {
                // NarroLogger::LogDebug( sprintf( t('Starting to import from "%s", no translations file'), str_replace($this->objProject->DefaultTemplatePath, '', $strTemplateFile)));
            }

            $objFileImporter = NarroFileType::GetFileImporter($objFile->TypeId, $this);

            QApplication::$PluginHandler->BeforeImportFile($objFile);

            $objFileImporter->File = $objFile;

            $blnFileImportResult = $objFileImporter->ImportFile($strTemplateFile, $strTranslatedFile);

            if ($this->blnOnlySuggestions == false)
                $objFileImporter->MarkUnusedContextsAsInactive();

            QApplication::$PluginHandler->AfterImportFile($objFile);

            $objFile->CountAllTextsByLanguage();
            $objFile->CountApprovedTextsByLanguage();
            $objFile->CountTranslatedTextsByLanguage();

            return $blnFileImportResult;
        }

        public function ExportProject() {
            if ($this->objProject->ProjectName == 'Narro') {
                $this->strTemplatePath = __DOCROOT__ . __SUBDIRECTORY__ . '/locale/en-US';
                $this->strTranslationPath = __DOCROOT__ . __SUBDIRECTORY__ . '/locale/' . $this->objTargetLanguage->LanguageCode;
                if (!file_exists($this->strTranslationPath))
                    mkdir($this->strTranslationPath, 0777);
            }

            NarroLogger::LogInfo(sprintf(t('Starting export for the project %s using as template %s'), $this->objProject->ProjectName, $this->strTemplatePath));
            NarroLogger::LogInfo(sprintf('Active plugins: %s', join(',', QApplication::$PluginHandler->ActivePlugins)));
            NarroLogger::LogInfo(sprintf('Running export under user %s', $this->objUser->Username));

            $this->startTimer();

            QApplication::$PluginHandler->BeforeExportProject($this->objProject);

            if (file_exists($this->strTemplatePath) && is_dir($this->strTemplatePath))
                if ($this->ExportFromDirectory()) {
                    $this->stopTimer();
                    NarroLogger::LogInfo(sprintf('Export finished successfully in %d seconds.', NarroImportStatistics::$arrStatistics['End time'] - NarroImportStatistics::$arrStatistics['Start time']));
                }
                else {
                    NarroLogger::LogError('Export failed.');
                }

            else
                throw new Exception(sprintf('Template path "%s" does not exist or it is not a directory', $this->strTemplatePath));

            if (function_exists('popen') && function_exists('escapeshellarg') && function_exists('escapeshellcmd') && file_exists($this->strTemplatePath . '/../export.sh')) {
                NarroLogger::LogInfo('Found an after export script, trying to run it.');
                 $fp = popen(
                        sprintf(
                            '/bin/sh %s %s %d %s %d %d 2>&1',
                            escapeshellarg(realpath($this->strTemplatePath . '/..') . '/export.sh'),
                            escapeshellarg($this->objTargetLanguage->LanguageCode),
                            $this->objTargetLanguage->LanguageId,
                            escapeshellarg($this->objProject->ProjectName),
                            $this->objProject->ProjectId,
                            QApplication::GetUserId()
                        ),
                        'r'
                );

                $strOutput = '';

                while(!feof($fp)) {
                    $strOutput .= fread($fp, 1024);
                }
                if (pclose($fp))
                    NarroLogger::LogError("After export script failed:\n" . $strOutput);
                else
                    NarroLogger::LogInfo("After export script finished successfully:\n" . $strOutput);
            }

            if ($this->objProject->ProjectName == 'Narro') {

                NarroUtils::Exec(
                    sprintf(
                        'msgfmt -cv %s -o %s 2>&1',
                        escapeshellarg($this->strTranslationPath . '/narro.po'),
                        escapeshellarg($this->strTranslationPath . '/narro.mo')
                    ),
                    $arrOutput,
                    $arrError,
                    $intRetVal
                );

                if ($intRetVal != 0)
                    NarroLogger::LogError("Exporting Narro's translation failed:\n" . $strOutput);
                else
                    NarroLogger::LogInfo("Exported Narro's translation succesfully. Press Ctrl+F5 to reload and see it.");

                if (file_exists($this->strTranslationPath . '/narro.mo'))
                    chmod($this->strTranslationPath . '/narro.mo', 0666);

            }

            NarroProgress::ClearProgressFileName($this->objProject->ProjectId, 'export');

            QApplication::$PluginHandler->AfterExportProject($this->objProject);

            foreach(NarroImportStatistics::$arrStatistics as $strName=>$strValue) {
                if ($strValue != 0)
                NarroLogger::LogInfo(stripslashes($strName) . ': ' . $strValue);
            }

            if (SERVER_INSTANCE == 'dev') {
                $strQueryData = '';
                $intTimeSpentOnQueries = 0;
                if (isset($GLOBALS['arrQueries']) && is_array($GLOBALS['arrQueries']))
                foreach($GLOBALS['arrQueries'] as $arrQueryData) {
                    $strQueryData .= '"' . join('";"', $arrQueryData) . '"';
                    $intTimeSpentOnQueries += $arrQueryData[1];
                }
                file_put_contents(__TMP_PATH__ . '/queries.csv', $strQueryData);
                chmod(__TMP_PATH__ . '/queries.csv', 0666);

                $strCacheData = '';
                if (isset($GLOBALS['arrCacheQueries']) && is_array($GLOBALS['arrCacheQueries']))
                foreach($GLOBALS['arrCacheQueries'] as $arrCacheData) {
                    $strCacheData .= '"' . join('";"', $arrCacheData) . '"';
                }
                file_put_contents(__TMP_PATH__ . '/cache.csv', $strCacheData);
                chmod(__TMP_PATH__ . '/cache.csv', 0666);

                NarroLogger::LogInfo(sprintf('%d queries in total, %d seconds spent on them', count(@$GLOBALS['arrQueries']), $intTimeSpentOnQueries));
                NarroLogger::LogInfo(sprintf('%d cache queries in total, %s seconds spent on them', count(@$GLOBALS['arrCacheQueries']), intval(@$GLOBALS['arrCacheQueriesSpent'])));
            }
        }

        public function ExportToXpi($strXpiFilePath) {
            $strArchive = $this->strTranslationPath . '/' . basename($strXpiFilePath);
            if (file_exists($strArchive)) {
                unlink($strArchive);
            }

            $strWorkingDir = $strXpiFilePath . '_extract';
            mkdir($strWorkingDir, 0777);
            NarroLogger::LogInfo(sprintf('Trying to uncompress %s', $strXpiFilePath));
            $objZipFile = new ZipArchive();
            $intErrCode = $objZipFile->open($strXpiFilePath);
            if ($intErrCode === TRUE) {
                $objZipFile->extractTo($strWorkingDir);
                $objZipFile->close();
                NarroLogger::LogInfo(sprintf('Sucessfully uncompressed %s.', $strXpiFilePath));
            } else {
                switch($intErrCode) {
                    case ZIPARCHIVE::ER_NOZIP:
                        $strError = 'Not a zip archive';
                        break;
                    default:
                        $strError = 'Error code: '. $intErrCode;
                }

                throw new Exception(sprintf('Failed to uncompress %s: %s', $strXpiFilePath, $strError));
            }

            NarroUtils::RecursiveChmod($strWorkingDir);

            // Search source directory
            $arrSearchResult = NarroUtils::SearchDirectoryByName($strWorkingDir, $this->objSourceLanguage->LanguageCode);

            if ($arrSearchResult == false)
            $arrSearchResult = NarroUtils::SearchDirectoryByName($strWorkingDir, $this->objSourceLanguage->LanguageCode . '-' . $this->objSourceLanguage->CountryCode);

            if ($arrSearchResult == false)
            $arrSearchResult = NarroUtils::SearchDirectoryByName($strWorkingDir, $this->objSourceLanguage->LanguageCode . '_' . $this->objSourceLanguage->CountryCode);


            if (is_array($arrSearchResult) && count($arrSearchResult) == 1) {
                NarroLogger::LogWarn(sprintf('Path changed from "%s" to "%s" because a directory named "%s" was found deeper in the given path.', $strWorkingDir, $arrSearchResult[0], $this->objSourceLanguage->LanguageCode));

                $strTemplatePath = $arrSearchResult[0];
            }

            // Search target directory
            $arrSearchResult = NarroUtils::SearchDirectoryByName($strWorkingDir, $this->objTargetLanguage->LanguageCode);

            if ($arrSearchResult == false)
            $arrSearchResult = NarroUtils::SearchDirectoryByName($strWorkingDir, $this->objTargetLanguage->LanguageCode . '-' . $this->objTargetLanguage->CountryCode);

            if ($arrSearchResult == false)
            $arrSearchResult = NarroUtils::SearchDirectoryByName($strWorkingDir, $this->objTargetLanguage->LanguageCode . '_' . $this->objTargetLanguage->CountryCode);


            if (is_array($arrSearchResult) && count($arrSearchResult) == 1) {
                NarroLogger::LogWarn(sprintf('Path changed from "%s" to "%s" because a directory named "%s" was found deeper in the given path.', $strWorkingDir, $arrSearchResult[0], $this->objTargetLanguage->LanguageCode));

                $strTranslationPath = $arrSearchResult[0];
            }

            if (isset($strTemplatePath)) {
                $strOldTemplatePath = $this->strTemplatePath;
                $this->strTemplatePath = $strTemplatePath;
                if (isset($strTranslationPath))
                    $this->strTranslationPath = $strTranslationPath;

                $this->ExportFromDirectory();

                $arrFiles = NarroUtils::ListDirectory($strWorkingDir, null, null, null, true);

                $objZipFile = new ZipArchive();
                if ($objZipFile->open($strArchive, ZipArchive::OVERWRITE) === TRUE) {
                    foreach($arrFiles as $strFileName) {
                        if (basename($strFileName) == 'chrome.manifest') {
                            $strManifest = file_get_contents($strFileName);
                            preg_match_all('/^locale\s+([^\s]+)\s+([^\s]+)\s+([^\s]+)\s+/m', $strManifest, $arrMatches);
                            if (isset($arrMatches[2]) && in_array($this->objTargetLanguage->LanguageCode, $arrMatches[2])) {
                                // locale already in the manifest
                                NarroLogger::LogInfo('Locale already in the manifest');
                            }
                            else {
                                $strLastLocaleCode = $arrMatches[2][count($arrMatches[2]) - 1];
                                $strLastLocaleLine = $arrMatches[0][count($arrMatches[2]) - 1];
                                $strLastLocalePath = $arrMatches[3][count($arrMatches[2]) - 1];
                                $strManifest = str_replace(
                                    $strLastLocaleLine,
                                    $strLastLocaleLine . "\n" .
                                    sprintf(
                                        'locale %s %s %s',
                                        $arrMatches[1][count($arrMatches[2]) - 1],
                                        $this->objTargetLanguage->LanguageCode,
                                        preg_replace('/\/[^\/]+\/\s*$/m', '/' . $this->objTargetLanguage->LanguageCode . '/', $strLastLocalePath)
                                    ),
                                    $strManifest
                                );

                            }

                        }

                        if ($strWorkingDir == $strFileName) continue;
                        if (is_dir($strFileName)) {
                            $objZipFile->addEmptyDir(str_replace($strWorkingDir . '/', '', $strFileName ));
                        }
                        elseif (is_file($strFileName)) {
                            $objZipFile->addFile($strFileName, str_replace($strWorkingDir . '/', '', $strFileName ));
                        }
                    }
                    $objZipFile->close();
                    if (file_exists($strArchive))
                        chmod($strArchive, 0666);
                    else {
                        NarroLogger::LogError(sprintf('Failed to create an archive %s', $strArchive));
                        NarroUtils::RecursiveDelete($strWorkingDir);
                        return false;
                    }
                } else {
                    NarroLogger::LogError(sprintf('Failed to create a new archive %s', $strArchive));
                    NarroUtils::RecursiveDelete($strWorkingDir);
                    return false;
                }
            }

            NarroUtils::RecursiveDelete($strWorkingDir);
            return true;
        }

        public function ExportFromDirectory() {

            // NarroLogger::LogDebug(sprintf('Starting to export in directory "%s"', $this->strTranslationPath));

            /**
             * get the file list with complete paths
             */
            $arrFiles = $this->ListDir($this->strTemplatePath);

            $intTotalFilesToProcess = count($arrFiles);

            if ($intTotalFilesToProcess == 1 && pathinfo($arrFiles[0], PATHINFO_EXTENSION) == 'xpi')
                return $this->ExportToXpi($arrFiles[0]);

            if ($intTotalFilesToProcess > __MAXIMUM_FILE_COUNT_TO_EXPORT__) {
                NarroLogger::LogError(sprintf('Too many files to process: %d. The maximum number of files to export is set in the configuration file at %d', $intTotalFilesToProcess, __MAXIMUM_FILE_COUNT_TO_EXPORT__));
                return false;
            }


            // NarroLogger::LogDebug(sprintf('Starting to process %d files', $intTotalFilesToProcess));

            $arrDirectories = array();
            NarroProgress::SetProgress(0, $this->objProject->ProjectId, 'export', $intTotalFilesToProcess);

            if (is_array($arrFiles))
            foreach($arrFiles as $intFileNo=>$strFileToExport) {
                $arrFileParts = explode('/', str_replace($this->strTemplatePath, '', $strFileToExport));
                $strFileName = $arrFileParts[count($arrFileParts)-1];
                unset($arrFileParts[count($arrFileParts)-1]);
                unset($arrFileParts[0]);

                $strPath = '';
                $intParentId = null;
                $arrDirectories = array();

                foreach($arrFileParts as $intPos=>$strDir) {
                    $strPath = $strPath . '/' . $strDir;

                    if (!isset($arrDirectories[$strPath])) {
                        if (!is_null($intParentId))
                            $objFile = NarroFile::QuerySingle(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::NarroFile()->ProjectId, $this->objProject->ProjectId),
                                    QQ::Equal(QQN::NarroFile()->FileName, $strDir),
                                    QQ::Equal(QQN::NarroFile()->TypeId, NarroFileType::Folder),
                                    QQ::Equal(QQN::NarroFile()->ParentId, $intParentId)
                                )
                            );
                        else
                            $objFile = NarroFile::QuerySingle(
                                    QQ::AndCondition(
                                        QQ::Equal(QQN::NarroFile()->ProjectId, $this->objProject->ProjectId),
                                        QQ::Equal(QQN::NarroFile()->FileName, $strDir),
                                        QQ::Equal(QQN::NarroFile()->TypeId, NarroFileType::Folder),
                                        QQ::IsNull(QQN::NarroFile()->ParentId)
                                    )
                            );

                        if (!$objFile instanceof NarroFile) {
                            NarroLogger::LogWarn(sprintf('Could not find folder "%s" with parent id "%d" in the database.', $strDir, $intParentId));
                            continue;
                        }

                        $arrDirectories[$strPath] = $objFile->FileId;
                    }
                    $intParentId = $arrDirectories[$strPath];
                }

                $strTranslatedFileToExport = str_replace($this->strTemplatePath, $this->strTranslationPath, $strFileToExport);
                if (!file_exists(dirname($strTranslatedFileToExport))) {
                    if (!mkdir(dirname($strTranslatedFileToExport), 0777, true)) {
                        NarroLogger::LogWarn(sprintf('Failed to create the parent directories for the file %s', $strFileToExport));
                        return false;
                    }
                    NarroUtils::RecursiveChmod(dirname($strTranslatedFileToExport));
                }

                $objFile = NarroFile::QuerySingle(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::NarroFile()->ProjectId, $this->objProject->ProjectId),
                                    QQ::Equal(QQN::NarroFile()->FileName, $strFileName),
                                    QQ::Equal(QQN::NarroFile()->ParentId, $intParentId),
                                    QQ::Equal(QQN::NarroFile()->Active, 1)
                                )
                );

                if (!$objFile instanceof NarroFile) {
                    continue;
                }

                // NarroLogger::LogDebug(sprintf('Exporting file "%s" using template "%s"', $objFile->FileName, $strTranslatedFileToExport));
                $intTime = time();
                $this->ExportFile($objFile, $strFileToExport, $strTranslatedFileToExport);
                $intElapsedTime = time() - $intTime;
                // NarroLogger::LogDebug(sprintf('Processed file "%s" in %d seconds, %d files left', str_replace($this->strTemplatePath, '', $strFileToExport), $intElapsedTime, (count($arrFiles) - $intFileNo - 1)));
                NarroImportStatistics::$arrStatistics['Exported files']++;

                NarroProgress::SetProgress((int) ceil(($intFileNo*100)/$intTotalFilesToProcess), $this->objProject->ProjectId, 'export');

            }

            return true;
        }

        public function ExportFile($objFile, $strTemplateFile, $strTranslatedFile) {
            if (!$objFile instanceof NarroFile) {
                NarroLogger::LogWarn(sprintf('Failed to find a corresponding file in the database for %s', $strTemplateFile));
                return false;
            }

            if (NarroFileProgress::CountByFileIdLanguageIdExport($objFile->FileId, $this->objTargetLanguage->LanguageId, 0)) {
                NarroLogger::LogWarn(sprintf('Not exporting %s based on the file settings.', $strTemplateFile));
                return false;
            }

            $objFileImporter = NarroFileType::GetFileImporter($objFile->TypeId, $this);

            // NarroLogger::LogDebug( sprintf( t('Starting to export "%s"'), str_replace($this->objProject->DefaultTranslationPath, '', $strTranslatedFile) ) );
            $objFileImporter->File = $objFile;
            QApplication::$PluginHandler->BeforeExportFile($objFile, $strTemplateFile, $strTranslatedFile);
            $blnMixResult = $objFileImporter->ExportFile($strTemplateFile, $strTranslatedFile);
            if (file_exists($strTranslatedFile))
                QApplication::$PluginHandler->AfterExportFile($objFile, $strTemplateFile, $strTranslatedFile);
            $this->arrFileId[$objFile->FileId] = 1;

            return $blnMixResult;
        }

        public function GetFileType($strFile) {
            if (!preg_match('/^.+\.(.+)$/', $strFile, $arrMatches))
                return NarroFileType::Unsupported;

            if (!isset($arrMatches[1]))
                return NarroFileType::Unsupported;

            switch($arrMatches[1]) {
                case 'dtd':
                        return NarroFileType::MozillaDtd;
                case 'properties':
                        return NarroFileType::MozillaIni;
                case 'ini':
                        return NarroFileType::MozillaIni;
                case 'inc':
                        return NarroFileType::MozillaInc;
                case 'po':
                        return NarroFileType::GettextPo;
                case 'sdf':
                        return NarroFileType::OpenOfficeSdf;
                case 'svg':
                        return NarroFileType::Svg;
                case 'dpo':
                        return NarroFileType::DumbGettextPo;
                case 'php':
                        return NarroFileType::PhpMyAdmin;
                case 'srt':
                        return NarroFileType::Srt;
                case 'htm':
                case 'html':
                case 'thtml':
                        return NarroFileType::Html;
                default:
                        return NarroFileType::Unsupported;
            }
        }

        /////////////////////////
        // Public Properties: GET
        /////////////////////////
        public function __get($strName) {
            switch ($strName) {
                case "User": return $this->objUser;
                case "Project": return $this->objProject;
                case "SourceLanguage": return $this->objSourceLanguage;
                case "TargetLanguage": return $this->objTargetLanguage;
                case "Approve": return $this->blnApprove;
                case "ApproveAlreadyApproved": return $this->blnApproveAlreadyApproved;
                case "CheckEqual": return $this->blnCheckEqual;
                case "ImportUnchangedFiles": return $this->blnImportUnchangedFiles;
                case "ImportSuggestions": return $this->blnImportSuggestions;
                case "OnlySuggestions": return $this->blnOnlySuggestions;
                case "ExportedSuggestion": return $this->intExportedSuggestion;
                case "CopyUnhandledFiles": return $this->blnCopyUnhandledFiles;
                case "SkipUntranslated": return $this->blnSkipUntranslated;
                case "ExportAuthorList": return $this->arrExportAuthorList;

                default: return false;
            }
        }

        /////////////////////////
        // Public Properties: SET
        /////////////////////////
        public function __set($strName, $mixValue) {

            switch ($strName) {
                case "TranslationPath":
                    if (file_exists($mixValue))
                        $this->strTranslationPath = $mixValue;
                    else {
                        if (!file_exists(dirname($mixValue)))
                            throw new Exception(sprintf('Cannot create "%s" because the parent directory "%s" does not exist', $mixValue, dirname($mixValue)));

                        if (!is_writable(dirname($mixValue)))
                            throw new Exception(sprintf('Cannot create "%s" because the parent directory "%s" is not writable', $mixValue, dirname($mixValue)));

                        chmod(dirname($mixValue), 0777);

                        if (mkdir($mixValue, 0777, true))
                            $this->strTranslationPath = $mixValue;
                        else
                            throw new Exception(sprintf(t('TranslationPath "%s" does not exist.'), $mixValue));

                        NarroUtils::RecursiveChmod($mixValue);
                    }

                    break;

                case "TemplatePath":
                    if (file_exists($mixValue))
                        $this->strTemplatePath = $mixValue;
                    else {
                        if (!file_exists(dirname($mixValue)))
                        throw new Exception(sprintf('Cannot create "%s" because the parent directory "%s" does not exist', $mixValue, dirname($mixValue)));

                        if (!is_writable(dirname($mixValue)))
                        throw new Exception(sprintf('Cannot create "%s" because the parent directory "%s" is not writable', $mixValue, dirname($mixValue)));

                        chmod(dirname($mixValue), 0777);

                        if (mkdir($mixValue, 0777, true))
                            $this->strTranslationPath = $mixValue;
                        else
                            throw new Exception(sprintf(t('TranslationPath "%s" does not exist.'), $mixValue));

                        NarroUtils::RecursiveChmod($mixValue);
                    }

                    break;

                case "User":
                    if ($mixValue instanceof NarroUser)
                        $this->objUser = $mixValue;
                    else
                        throw new Exception(t('User should be set with an instance of NarroUser'));

                    break;

                case "Project":
                    if ($mixValue instanceof NarroProject)
                        $this->objProject = $mixValue;
                    else
                        throw new Exception(t('Project should be set with an instance of NarroProject'));

                    break;

                case "TargetLanguage":
                    if ($mixValue instanceof NarroLanguage)
                        $this->objTargetLanguage = $mixValue;
                    else
                        throw new Exception(t('TargetLanguage should be set with an instance of NarroLanguage'));

                    break;

                case "SourceLanguage":
                    if ($mixValue instanceof NarroLanguage)
                        $this->objSourceLanguage = $mixValue;
                    else
                        throw new Exception(t('SourceLanguage should be set with an instance of NarroLanguage'));

                    break;


                case "Approve":
                    try {
                        $this->blnApprove = QType::Cast($mixValue, QType::Boolean);
                        break;
                    } catch (QInvalidCastException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case "SkipUntranslated":
                    try {
                        $this->blnSkipUntranslated = QType::Cast($mixValue, QType::Boolean);
                        break;
                    } catch (QInvalidCastException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case "ApproveAlreadyApproved":
                    try {
                        $this->blnApproveAlreadyApproved = QType::Cast($mixValue, QType::Boolean);
                        break;
                    } catch (QInvalidCastException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case "CheckEqual":
                    try {
                        $this->blnCheckEqual = QType::Cast($mixValue, QType::Boolean);
                        break;
                    } catch (QInvalidCastException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case "ImportUnchangedFiles":
                    try {
                        $this->blnImportUnchangedFiles = QType::Cast($mixValue, QType::Boolean);
                        break;
                    } catch (QInvalidCastException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case "ImportSuggestions":
                    try {
                        $this->blnImportSuggestions = QType::Cast($mixValue, QType::Boolean);
                        break;
                    } catch (QInvalidCastException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case "CopyUnhandledFiles":
                    try {
                        $this->blnCopyUnhandledFiles = QType::Cast($mixValue, QType::Boolean);
                        break;
                    } catch (QInvalidCastException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case "OnlySuggestions":
                    try {
                        $this->blnOnlySuggestions = QType::Cast($mixValue, QType::Boolean);
                        break;
                    } catch (QInvalidCastException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case "ExportedSuggestion":
                    try {
                        $this->intExportedSuggestion = QType::Cast($mixValue, QType::Integer);
                        break;
                    } catch (QInvalidCastException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case "ExportAuthorList":
                    try {
                        if (is_array($mixValue))
                            $this->arrExportAuthorList = QType::Cast($mixValue, QType::ArrayType);
                        else {
                            $arrAuthor = explode(',', $mixValue);
                            foreach($arrAuthor as $intIdx=>$strAuthor) {
                                $arrAuthor[$intIdx] = trim($strAuthor);
                            }

                            foreach(NarroUser::QueryArray(QQ::In(QQN::NarroUser()->RealName, $arrAuthor)) as $objUser) {
                                $this->arrExportAuthorList[] = $objUser->UserId;
                            }
                        }
                        break;
                    } catch (QInvalidCastException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                default:
                    return false;
            }
        }

        protected function startTimer() {
            NarroImportStatistics::$arrStatistics['Start time'] = time();
        }

        protected function stopTimer() {
            NarroImportStatistics::$arrStatistics['End time'] = time();
        }

        protected function ListDir($strDir='.') {

            $arrFiles = array();
            if (is_dir($strDir)) {
                $hndFile = opendir($strDir);
                while (($strFile = readdir($hndFile)) !== false) {
                    // loop through the files, skipping . and .., and recursing if necessary
                    if (strcmp($strFile, '.')==0 || strcmp($strFile, '..')==0) continue;

                    $strFilePath = $strDir . '/' . $strFile;

                    if ( is_dir($strFilePath) )
                    $arrFiles = array_merge($arrFiles, $this->ListDir($strFilePath));
                    else
                    array_push($arrFiles, $strFilePath);
                }
                closedir($hndFile);
            } else {
                // false if the function was called with an invalid non-directory argument
                $arrFiles = false;
            }
            return $arrFiles;
        }

        private function CreateNarroTemplate($intProjectId) {
            $strPoFile = __DOCROOT__ . __SUBDIRECTORY__ . '/locale/' . $this->objSourceLanguage->LanguageCode . '/narro.po';
            NarroLogger::LogInfo(sprintf('Building a narro gettext template in %s.', $strPoFile));

            $arrPermissions = NarroPermission::QueryArray(QQ::All(), QQ::Clause(QQ::OrderBy(QQN::NarroPermission()->PermissionName)));
            NarroLogger::LogInfo(sprintf('Found %d permission names to localize.', count($arrPermissions)));

            $arrRoles = NarroRole::QueryArray(QQ::All(), QQ::Clause(QQ::OrderBy(QQN::NarroRole()->RoleName)));
            NarroLogger::LogInfo(sprintf('Found %d role names to localize.', count($arrRoles)));

            $allFiles = NarroUtils::ListDirectory(realpath(dirname(__FILE__) . '/../../..'), null, '/.*\/drafts\/.*|.*\/data\/.*|.*\/examples\/.*|.*\/qcubed_generated\/.*/');

            NarroLogger::LogInfo(sprintf('Found %d php files to search for localizable messages.', count($allFiles)));
            foreach($allFiles as $strFileName) {
                if (pathinfo($strFileName, PATHINFO_EXTENSION) != 'php') continue;

                $strFile = file_get_contents($strFileName);
                $strShortPath = str_ireplace(realpath(__DOCROOT__ . __SUBDIRECTORY__) . '/', '', $strFileName);

                if (strpos($strShortPath, 'data') === 0) continue;
                if (strpos($strShortPath, 'includes/qcubed_generated') === 0) continue;

                $strFile = str_replace("\'", "&&&escapedsimplequote&&&", $strFile);
                $strFile = str_replace('\"', "&&&escapeddoublequote&&&", $strFile);

                if ($strFile) {
                    preg_match_all('/([^a-zA-Z]t|NarroApp::Translate|QApplication::Translate|__t)\s*\(\s*[\']([^\']{2,})[\']\s*\)/', $strFile, $arrMatches);
                    if (isset($arrMatches[2])) {
                        foreach($arrMatches[2] as $intMatchNo=>$strText) {
                            if (trim($strText) != '') {
                                $strText = str_replace(
                                array(
                                    "&&&escapedsimplequote&&&",
                                    "&&&escapeddoublequote&&&",
                                ),
                                array(
                                    "'",
                                    '\"',
                                ),
                                $strText
                                );
                                $arrMessages[md5($strText)]['text'] = $strText;
                                $arrMessages[md5($strText)]['files'][$strShortPath] = $strShortPath;
                                $strSearchText = str_replace(
                                array(
                                    "&&&escapedsimplequote&&&",
                                    "&&&escapeddoublequote&&&",
                                ),
                                array(
                                    "'",
                                    '\"',
                                ),
                                $arrMatches[0][$intMatchNo]
                                );
                                preg_match_all('/^.*'. preg_quote($strSearchText, '/') .'.*$/m', $strFile, $arrFullMatches);
                                $arrMessages[md5($strText)]['context'] = '#. ';
                                foreach($arrFullMatches[0] as $strFullMatch)
                                if (trim($strFullMatch))
                                $arrMessages[md5($strText)]['context'] .= trim($strFullMatch) . "\n";
                            }
                        }
                    }

                    preg_match_all('/([^a-zA-Z]t|NarroApp::Translate|QApplication::Translate|__t)\s*\(\s*[\"]([^\"]{2,})[\"]\s*\)/', $strFile, $arrMatches);
                    if (isset($arrMatches[2])) {
                        foreach($arrMatches[2] as $intMatchNo=>$strText) {
                            if (trim($strText) != '') {
                                $strText = str_replace(
                                array(
                                    "&&&escapedsimplequote&&&",
                                    "&&&escapeddoublequote&&&",
                                ),
                                array(
                                    "'",
                                    '\"',
                                ),
                                $strText
                                );
                                $arrMessages[md5($strText)]['text'] = $strText;
                                $arrMessages[md5($strText)]['files'][$strShortPath] = $strShortPath;
                                $strSearchText = str_replace(
                                array(
                                    "&&&escapedsimplequote&&&",
                                    "&&&escapeddoublequote&&&",
                                ),
                                array(
                                    "'",
                                    '\"',
                                ),
                                $arrMatches[0][$intMatchNo]
                                );
                                preg_match_all('/^.*'. preg_quote($strSearchText, '/') .'.*$/m', $strFile, $arrFullMatches);
                                $arrMessages[md5($strText)]['context'] = '#. ';
                                foreach($arrFullMatches[0] as $strFullMatch)
                                if (trim($strFullMatch))
                                $arrMessages[md5($strText)]['context'] .= trim($strFullMatch) . "\n";

                            }
                        }
                    }

                    preg_match_all('/([^a-zA-Z]t|NarroApp::Translate|QApplication::Translate|__t)\s*\(\s*[\']([^\']{2,})[\']\s*,\s*[\']([^\']{2,})[\']\s*,\s*([^\)]+)\s*\)/', $strFile, $arrMatches);
                    if (isset($arrMatches[2])) {
                        foreach($arrMatches[2] as $intMatchNo=>$strText) {
                            if (trim($strText) != '') {
                                $strText = str_replace(
                                array(
                                    "&&&escapedsimplequote&&&",
                                    "&&&escapeddoublequote&&&",
                                ),
                                array(
                                    "'",
                                    '\"',
                                ),
                                $strText
                                );
                                $arrMessages[md5($strText)]['text'] = $strText;
                                $arrMessages[md5($strText)]['files'][$strShortPath] = $strShortPath;
                                $arrMessages[md5($strText)]['plural'] = $arrMatches[3][$intMatchNo];
                                $strSearchText = str_replace(
                                array(
                                    "&&&escapedsimplequote&&&",
                                    "&&&escapeddoublequote&&&",
                                ),
                                array(
                                    "'",
                                    '\"',
                                ),
                                $arrMatches[0][$intMatchNo]
                                );
                                preg_match_all('/^.*'. preg_quote($strSearchText, '/') .'.*$/m', $strFile, $arrFullMatches);
                                $arrMessages[md5($strText)]['context'] = '#. ';
                                foreach($arrFullMatches[0] as $strFullMatch)
                                if (trim($strFullMatch))
                                $arrMessages[md5($strText)]['context'] .= trim($strFullMatch) . "\n";
                            }
                        }
                    }
                    preg_match_all('/([^a-zA-Z]t|NarroApp::Translate|QApplication::Translate|__t)\s*\(\s*[\"]([^\"]{2,})[\"]\s*,\s*[\"]([^\"]{2,})[\"]\s*,\s*([^\)]+)\s*\)/', $strFile, $arrMatches);
                    if (isset($arrMatches[2])) {
                        foreach($arrMatches[2] as $intMatchNo=>$strText) {
                            if (trim($strText) != '') {
                                $strText = str_replace(
                                array(
                                    "&&&escapedsimplequote&&&",
                                    "&&&escapeddoublequote&&&",
                                ),
                                array(
                                    "'",
                                    '\"',
                                ),
                                $strText
                                );
                                $arrMessages[md5($strText)]['text'] = $strText;
                                $arrMessages[md5($strText)]['files'][$strShortPath] = $strShortPath;
                                $arrMessages[md5($strText)]['plural'] = $arrMatches[3][$intMatchNo];
                                $strSearchText = str_replace(
                                array(
                                    "&&&escapedsimplequote&&&",
                                    "&&&escapeddoublequote&&&",
                                ),
                                array(
                                    "'",
                                    '\"',
                                ),
                                $arrMatches[0][$intMatchNo]
                                );
                                preg_match_all('/^.*'. preg_quote($strSearchText, '/') .'.*$/m', $strFile, $arrFullMatches);
                                $arrMessages[md5($strText)]['context'] = '#. ';
                                foreach($arrFullMatches[0] as $strFullMatch)
                                if (trim($strFullMatch))
                                $arrMessages[md5($strText)]['context'] .= trim($strFullMatch) . "\n";
                            }
                        }
                    }

                    preg_match_all('/NarroApp::RegisterPreference\(\s*\'([^\']+)\'\s*,\s*\'[^\']+\'\s*,\s*\'([^\']+)\'\s*,\s*/', $strFile, $arrMatches);
                    if (isset($arrMatches[1])) {
                        foreach($arrMatches[1] as $intMatchNo=>$strText) {
                            if (trim($strText) != '') {
                                $strText = str_replace(
                                array(
                                    "&&&escapedsimplequote&&&",
                                    "&&&escapeddoublequote&&&",
                                ),
                                array(
                                    "'",
                                    '\"',
                                ),
                                $strText
                                );
                                $arrMessages[md5($strText)]['text'] = $strText;
                                $arrMessages[md5($strText)]['files'][$strShortPath] = $strShortPath;
                                $strSearchText = $arrMatches[0][$intMatchNo];
                                preg_match_all('/^.*'. preg_quote($strSearchText, '/') .'.*$/m', $strFile, $arrFullMatches);
                                $arrMessages[md5($strText)]['context'] = "#. Preference name\n";
                                foreach($arrFullMatches[0] as $strLine)
                                if (isset($strLine) && trim($strLine))
                                $arrMessages[md5($strText)]['context'] .= trim($strLine) . "\n";
                            }
                        }

                        foreach($arrMatches[2] as $intMatchNo=>$strText) {
                            if (trim($strText) != '') {
                                $strText = str_replace(
                                array(
                                    "&&&escapedsimplequote&&&",
                                    "&&&escapeddoublequote&&&",
                                ),
                                array(
                                    "'",
                                    '\"',
                                ),
                                $strText
                                );
                                $arrMessages[md5($strText)]['text'] = $strText;
                                $arrMessages[md5($strText)]['files'][$strShortPath] = $strShortPath;
                                $strSearchText = $arrMatches[0][$intMatchNo];
                                preg_match_all('/^.*'. preg_quote($strSearchText, '/') .'.*$/m', $strFile, $arrFullMatches);
                                $arrMessages[md5($strText)]['context'] = "#. Preference description\n";
                                foreach($arrFullMatches[0] as $strLine)
                                if (isset($strLine) && trim($strLine))
                                $arrMessages[md5($strText)]['context'] .= trim($strLine) . "\n";
                            }
                        }
                    }

                    if (preg_match_all('/t\(\$[a-zA-Z]+\-\>LanguageName/', $strFile, $arrMatches)) {
                        if (!isset($arrLanguages)) {
                            $arrLanguages = NarroLanguage::QueryArray(QQ::All(), QQ::Clause(QQ::OrderBy(QQN::NarroLanguage()->LanguageName)));
                        }

                        $strLangContext = '#. ';
                        foreach($arrMatches as $intMatchNo=>$arrVal) {
                            $strSearchText = $arrMatches[0][$intMatchNo];
                            preg_match_all('/^.*'. preg_quote($strSearchText, '/') .'.*$/m', $strFile, $arrFullMatches);
                            foreach($arrFullMatches[0] as $strLine)
                            if (isset($strLine) && trim($strLine))
                            $strLangContext .= trim($strLine) . "\n";
                        }


                        if(is_array($arrLanguages)) {
                            foreach($arrLanguages as $objLanguage) {
                                $arrMessages[md5($objLanguage->LanguageName)]['text'] = $objLanguage->LanguageName;
                                $arrMessages[md5($objLanguage->LanguageName)]['files'][$strShortPath] = $strShortPath;
                                $arrMessages[md5($objLanguage->LanguageName)]['context'] = $strLangContext;
                            }
                        }

                    }

                    if (preg_match_all('/t\(\$[a-zA-Z]+\-\>RoleName/', $strFile, $arrMatches)) {

                        $strLangContext = '#. ';
                        foreach($arrMatches as $intMatchNo=>$arrVal) {
                            $strSearchText = $arrMatches[0][$intMatchNo];
                            preg_match_all('/^.*'. preg_quote($strSearchText, '/') .'.*$/m', $strFile, $arrFullMatches);
                            foreach($arrFullMatches[0] as $strLine)
                            if (isset($strLine) && trim($strLine))
                            $strLangContext .= trim($strLine) . "\n";
                        }

                        if (is_array($arrRoles)) {
                            foreach($arrRoles as $objRole) {
                                $arrMessages[md5($objRole->RoleName)]['text'] = $objRole->RoleName;
                                $arrMessages[md5($objRole->RoleName)]['files'][$strShortPath] = $strShortPath;
                                $arrMessages[md5($objRole->RoleName)]['context'] = $strLangContext;
                            }
                        }
                    }

                    if (preg_match_all('/t\(\$[a-zA-Z]+\-\>PermissionName/', $strFile, $arrMatches)) {

                        $strLangContext = '#. ';
                        foreach($arrMatches as $intMatchNo=>$arrVal) {
                            $strSearchText = $arrMatches[0][$intMatchNo];
                            preg_match_all('/^.*'. preg_quote($strSearchText, '/') .'.*$/m', $strFile, $arrFullMatches);
                            foreach($arrFullMatches[0] as $strLine)
                            if (isset($strLine) && trim($strLine))
                            $strLangContext .= trim($strLine) . "\n";
                        }

                        if (is_array($arrPermissions)) {
                            foreach($arrPermissions as $objPermission) {
                                $arrMessages[md5($objPermission->PermissionName)]['text'] = $objPermission->PermissionName;
                                $arrMessages[md5($objPermission->PermissionName)]['files'][$strShortPath] = $strShortPath;
                                $arrMessages[md5($objPermission->PermissionName)]['context'] = $strLangContext;
                            }
                        }
                    }
                }
            }
            $strPoHeader =
            '#, fuzzy' . "\n" .
            'msgid ""' . "\n" .
            'msgstr ""' . "\n" .
            '"Project-Id-Version: Narro ' . NARRO_VERSION . "\n" .
            '"Report-Msgid-Bugs-To: alexxed@gmail.com\n"' . "\n" .
            '"POT-Creation-Date: ' . date('Y-d-m H:iO'). '\n"' . "\n" .
            '"PO-Revision-Date: ' . date('Y-d-m H:iO'). '\n"' . "\n" .
            '"Last-Translator: FULL NAME <EMAIL@ADDRESS>\n"' . "\n" .
            '"Language-Team: LANGUAGE <LL@li.org>\n"' . "\n" .
            '"MIME-Version: 1.0\n"' . "\n" .
            '"Content-Type: text/plain; charset=UTF-8\n"' . "\n" .
            '"Content-Transfer-Encoding: 8bit\n"' . "\n" .
            '"Plural-Forms: nplurals=2; plural=n != 1;\n"' . "\n" .
            '"X-Generator: Narro\n"' . "\n";
            $hndFile = fopen($strPoFile, 'w');
            if (!$hndFile) {
                NarroLogger::LogError(sprintf('Error while opening the po file "%s" for writing.', $strPoFile));
            }
            fputs($hndFile, $strPoHeader);

            // Obtain a list of columns
            foreach ($arrMessages as $key => $row) {
                $texts[$key]  = $row['text'];
            }

            //array_multisort($texts, SORT_ASC, SORT_STRING, $arrMessages);

            foreach($arrMessages as $intKey=>$arrMsgData) {
                if (isset($arrMsgData['plural']))
                fputs($hndFile, sprintf("#: %s\nmsgid \"%s\"\nmsgid_plural \"%s\"\nmsgstr[0] \"\"\nmsgstr[1] \"\"\n\n", join(' ', array_values($arrMsgData['files'])), str_replace(array('"', "\n"), array('\"', '\n'), $arrMsgData['text']), str_replace(array('"', "\n"), array('\"', '\n'), $arrMsgData['plural'])));
                else {
                    if (!isset($arrMsgData['files']))
                        print_r($arrMsgData);
                    else
                        fputs($hndFile, sprintf("%s\n#: %s\nmsgid \"%s\"\nmsgstr \"\"\n\n", (isset($arrMsgData['context']))?str_replace("\n", "\n#. ", trim($arrMsgData['context'])) . '':'', join(' ', array_values($arrMsgData['files'])), str_replace(array('"', "\n"), array('\"', '\n'), $arrMsgData['text'])));
                }
            }

            fclose($hndFile);
            NarroUtils::Chmod($strPoFile, 0666);

            NarroLogger::LogInfo('Wrote a new Narro template file in ' . $strPoFile);

        }
    }
?>
