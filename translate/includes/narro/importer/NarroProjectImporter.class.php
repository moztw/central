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
        protected $blnCheckEqual;
        /**
         * whether to validate the imported suggestions
         */
        protected $blnValidate;
        /**
         * whether to import only suggestions, that is don't add anything else than suggestions
         */
        protected $blnOnlySuggestions = false;

        /**
         * what suggestions are exported
         * 1 = validated
         * 2 = most voted and validated
         * 3 = current user's suggestion and validated
         * for 2 and 3 the fallback is to validated
         */
        protected $intExportedSuggestion = 1;
        /**
         * whether to make files inactive before import
         */
        protected $blnDeactivateFiles = true;
        /**
         * whether to make contexts inactive before import
         */
        protected $blnDeactivateContexts = true;

        protected $strTranslationPath;
        protected $strTemplatePath;
        protected $intTotalContexts = 0;
        protected $intTotalFiles = 0;

        public function CleanImportDirectory() {
            if (file_exists($this->strTranslationPath  . '/import.pid'))
                unlink($this->strTranslationPath  . '/import.pid');

            if (file_exists($this->strTranslationPath  . '/import.progress'))
                unlink($this->strTranslationPath  . '/import.progress');
        }

        public function CleanExportDirectory() {
            if (file_exists($this->strTranslationPath  . '/export.pid'))
                unlink($this->strTranslationPath  . '/export.pid');

            if (file_exists($this->strTranslationPath  . '/export.progress'))
                unlink($this->strTranslationPath  . '/export.progress');
        }

        public function ImportProject() {
            $this->startTimer();

            switch ($this->objProject->ProjectType) {
                case NarroProjectType::Narro:
                    NarroProgress::SetProgressFile($this->strTranslationPath  . '/import.progress');

                    $objNarroImporter = new NarroSelfFileImporter();
                    $objNarroImporter->Project = NarroProject::LoadByProjectName('Narro');

                    $objNarroImporter->SourceLanguage = $this->objSourceLanguage;
                    $objNarroImporter->TargetLanguage = $this->objTargetLanguage;
                    $objNarroImporter->Import();
                    break;
                default:

                    if (!file_exists($this->strTemplatePath))
                        throw new Exception(sprintf(t('%s does not exist.'), $this->strTemplatePath));

                    NarroLog::LogMessage(3, sprintf(t('Starting import for the project %s from the directory %s'), $this->objProject->ProjectName, realpath($this->strTemplatePath . '/..')));


                    if (is_dir($this->strTemplatePath))
                        $this->ImportFromDirectory();
                    elseif (is_file($this->strTemplatePath))
                        $this->ImportFromFile();
                    else
                        throw new Exception(sprintf(t('"%s" is not a file or a directory.'), $this->strTemplatePath));
            }

            $this->stopTimer();
            NarroLog::LogMessage(3, sprintf(t('Import finished successfully in %d seconds.'), NarroImportStatistics::$arrStatistics['End time'] - NarroImportStatistics::$arrStatistics['Start time']));
        }

        public function ImportFromFile() {

            $objDatabase = QApplication::$Database[1];

            NarroLog::SetLogFile(dirname($this->strTranslationPath)  . '/import.log');;

            if (file_exists(dirname($this->strTranslationPath)  . '/import.pid'))
                throw new Exception(sprintf(t('An export process is already running in the directory "%s" with pid %d'), dirname($this->strTranslationPath), file_get_contents(dirname($this->strTranslationPath)  . '/import.pid')));

            $hndPidFile = fopen(dirname($this->strTranslationPath)  . '/import.pid', 'w');

            if (!$hndPidFile)
                throw new Exception(sprintf(t('Cannot create %s in %s.'), 'import.pid', dirname($this->strTranslationPath)));

            fputs($hndPidFile, getmypid());
            fclose($hndPidFile);

            NarroProgress::SetProgressFile($this->strTranslationPath  . '/import.progress');

            if (!$intFileType = $this->GetFileType($this->strTranslationPath))
                throw new Exception(t('Unrecognizable file type given for import.'));


            $objFile = NarroFile::QuerySingle(
                            QQ::AndCondition(
                                QQ::Equal(
                                    QQN::NarroFile()->ProjectId,
                                    $this->objProject->ProjectId
                                ),
                                QQ::Equal(
                                    QQN::NarroFile()->FileName,
                                    basename($this->strTranslationPath)
                                ),
                                QQ::IsNull(
                                    QQN::NarroFile()->ParentId
                                )
                            )
            );

            if (!$objFile instanceof NarroFile) {
                /**
                 * add the file
                 */
                $objFile = new NarroFile();
                $objFile->FileName = basename($this->strTranslationPath);
                $objFile->TypeId = $intFileType;
                $objFile->ParentId = null;
                $objFile->ProjectId = $this->objProject->ProjectId;
                $objFile->ContextCount = 0;
                $objFile->Encoding = 'UTF-8';
                $objFile->Modified = date('Y-m-d H:i:s');
                $objFile->Created = date('Y-m-d H:i:s');
                NarroLog::LogMessage(1, sprintf(t('Added file "%s" from "%s"'), basename($this->strTranslationPath), dirname($this->strTranslationPath)));
                NarroImportStatistics::$arrStatistics['Imported files']++;
            }
            else {
                $objFile->Modified = date('Y-m-d H:i:s');
            }

            $objFile->Active = 1;
            $objFile->Save();

            if ($this->blnDeactivateFiles) {
                $strQuery = sprintf("UPDATE `narro_file` SET `active` = 0 WHERE project_id=%d AND file_id=%d", $this->objProject->ProjectId, $objFile->FileId);
                try {
                    $objDatabase->NonQuery($strQuery);
                }catch (Exception $objEx) {
                    throw new Exception(sprintf(t('Error while executing sql query in file %s, line %d: %s'), __FILE__, __LINE__ - 4, $objEx->getMessage()));
                }
            }

            if ($this->blnDeactivateContexts) {
                $strQuery = sprintf("UPDATE `narro_context` SET `active` = 0 WHERE project_id=%d AND file_id=%d AND active=1", $this->objProject->ProjectId, $objFile->FileId);
                try {
                    $objDatabase->NonQuery($strQuery);
                }catch (Exception $objEx) {
                    throw new Exception(sprintf(t('Error while executing sql query in file %s, line %d: %s'), __FILE__, __LINE__ - 4, $objEx->getMessage()));
                }
            }

            chdir(dirname($this->strTranslationPath));
            $this->ImportFile($objFile, $this->strTemplatePath, $this->strTranslationPath);

            if (file_exists(dirname($this->strTranslationPath)  . '/import.pid'))
                unlink(dirname($this->strTranslationPath)  . '/import.pid');
        }

        public function ImportFromDirectory() {

            $objDatabase = QApplication::$Database[1];

            NarroLog::SetLogFile($this->strTranslationPath . '/import.log');

            if (file_exists($this->strTranslationPath . '/import.pid'))
                throw new Exception(sprintf(t('An export process is already running in the directory "%s" with pid %d'), $this->strTranslationPath, file_get_contents($this->strTranslationPath  . '/import.pid')));

            $hndPidFile = fopen($this->strTranslationPath  . '/import.pid', 'w');

            if (!$hndPidFile)
                throw new Exception(sprintf(t('Cannot create %s in %s.'), 'import.pid', $this->strTranslationPath));

            fputs($hndPidFile, getmypid());
            fclose($hndPidFile);

            NarroProgress::SetProgressFile($this->strTranslationPath  . '/import.progress');

            /**
             * get the file list with complete paths
             */
            $arrFiles = $this->ListDir($this->strTemplatePath);
            $intTotalFilesToProcess = count($arrFiles);

            NarroLog::LogMessage(1, sprintf(t('Starting to process %d files using directory %s'), $intTotalFilesToProcess, $this->strTemplatePath));

            if ($this->blnDeactivateFiles) {
                $strQuery = sprintf("UPDATE `narro_file` SET `active` = 0 WHERE project_id=%d", $this->objProject->ProjectId);
                try {
                    $objDatabase->NonQuery($strQuery);
                }catch (Exception $objEx) {
                    throw new Exception(sprintf(t('Error while executing sql query in file %s, line %d: %s'), __FILE__, __LINE__ - 4, $objEx->getMessage()));
                }
            }

            if ($this->blnDeactivateContexts) {
                $strQuery = sprintf("UPDATE `narro_context` SET `active` = 0 WHERE project_id=%d", $this->objProject->ProjectId);
                try {
                    $objDatabase->NonQuery($strQuery);
                }catch (Exception $objEx) {
                    throw new Exception(sprintf(t('Error while executing sql query in file %s, line %d: %s'), __FILE__, __LINE__ - 4, $objEx->getMessage()));
                }
            }

            $arrDirectories = array();
            if (is_array($arrFiles))
            foreach($arrFiles as $intFileNo=>$strFileToImport) {
                $strFilePath = str_replace($this->strTemplatePath, '', $strFileToImport);
                $arrFileParts = split('/', $strFilePath);
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
                                                QQ::Equal(
                                                    QQN::NarroFile()->ParentId,
                                                    $intParentId
                                                )
                                            )
                            );
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

                        if ($objFile instanceof NarroFile) {
                            NarroImportStatistics::$arrStatistics['Kept folders']++;
                            $objFile->Active = 1;
                            $objFile->ContextCount = 0;
                            $objFile->FilePath = $strPath;
                            $objFile->Modified = date('Y-m-d H:i:s');
                            $objFile->Save();
                        }
                        else {
                            /**
                             * add the file
                             */
                            $objFile = new NarroFile();
                            $objFile->FileName = $strDir;
                            $objFile->Encoding = 'UTF-8';
                            $objFile->TypeId = NarroFileType::Folder;
                            if ($intParentId)
                                $objFile->ParentId = $intParentId;
                            $objFile->ProjectId = $this->objProject->ProjectId;
                            $objFile->ContextCount = 0;
                            $objFile->FilePath = $strPath;
                            $objFile->Modified = date('Y-m-d H:i:s');
                            $objFile->Created = date('Y-m-d H:i:s');
                            $objFile->Active = 1;
                            $objFile->Save();
                            NarroLog::LogMessage(1, sprintf(t('Added folder "%s" from "%s"'), $strDir, $strPath));
                            NarroImportStatistics::$arrStatistics['Imported folders']++;
                        }
                        $arrDirectories[$strPath] = $objFile->FileId;
                    }
                    $intParentId = $arrDirectories[$strPath];
                }

                /**
                 * import the file
                 */
                if (!$intFileType = $this->GetFileType($strFileName))
                    continue;

                $objFile = NarroFile::QuerySingle(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::NarroFile()->ProjectId, $this->objProject->ProjectId),
                                    QQ::Equal(QQN::NarroFile()->FileName, $strFileName),
                                    QQ::Equal(QQN::NarroFile()->ParentId, $intParentId)
                                )
                );

                if ($objFile instanceof NarroFile) {
                    $objFile->Active = 1;
                    $objFile->TypeId = $intFileType;
                    $objFile->FilePath = $strFilePath;
                    $objFile->Modified = date('Y-m-d H:i:s');
                    $objFile->Save();
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
                    $objFile->Encoding = 'UTF-8';
                    $objFile->Modified = date('Y-m-d H:i:s');
                    $objFile->Created = date('Y-m-d H:i:s');
                    $objFile->Save();
                    NarroLog::LogMessage(1, sprintf(t('Added file "%s" from "%s"'), $strFileName, $strPath));
                    NarroImportStatistics::$arrStatistics['Imported files']++;
                }

                $strTranslatedFileToImport = str_replace($this->strTemplatePath, $this->strTranslationPath, $strFileToImport);

                $intTime = time();
                if (file_exists($strTranslatedFileToImport))
                    $this->ImportFile($objFile, $strFileToImport, $strTranslatedFileToImport);
                else {
                    // it's ok, equal strings won't be imported
                    $this->ImportFile($objFile, $strFileToImport);
                }
                $intElapsedTime = time() - $intTime;
                NarroLog::LogMessage(1, sprintf(t('Processed file "%s" in %d seconds, %d files left'), str_replace($this->strTemplatePath, '', $strFileToImport), $intElapsedTime, (count($arrFiles) - $intFileNo)));

                NarroProgress::SetProgress((int) ceil(($intFileNo*100)/$intTotalFilesToProcess));

            }

            if (file_exists($this->strTranslationPath . '/import.pid'))
                unlink($this->strTranslationPath . '/import.pid');
            if (file_exists($this->strTranslationPath . '/import.progress'))
                unlink($this->strTranslationPath . '/import.progress');

            /**
             * clear the progress cache
             */
            QApplication::$Cache->remove('project_progress_' . $this->objProject->ProjectId . '_' . $this->objTargetLanguage->LanguageId);

        }

        public function ImportFile ($objFile, $strTemplateFile, $strTranslatedFile = false) {
            if (!$objFile instanceof NarroFile)
                return false;

            switch($objFile->TypeId) {
                case NarroFileType::MozillaDtd:
                        $objFileImporter = new NarroMozillaDtdFileImporter($this);
                        break;
                case NarroFileType::MozillaIni:
                        $objFileImporter = new NarroMozillaIniFileImporter($this);
                        break;
                case NarroFileType::MozillaInc:
                        $objFileImporter = new NarroMozillaIncFileImporter($this);
                        break;
                case NarroFileType::GettextPo:
                        $objFileImporter = new NarroGettextPoFileImporter($this);
                        break;
                case NarroFileType::OpenOfficeSdf:
                        $objFileImporter = new NarroOpenOfficeSdfFileImporter($this);
                        break;
                case NarroFileType::Svg:
                        $objFileImporter = new NarroSvgFileImporter($this);
                        break;
                case NarroFileType::DumbGettextPo:
                        $objFileImporter = new NarroDumbGettextPoFileImporter($this);
                        break;
                case NarroFileType::PhpMyAdmin:
                        $objFileImporter = new NarroPhpMyAdminFileImporter($this);
                        break;
                default:
                        return false;
            }

            $objFileImporter->File = $objFile;

            return $objFileImporter->ImportFile($strTemplateFile, $strTranslatedFile);
        }

        public function ExportProject() {

            NarroLog::LogMessage(3, sprintf(t('Starting export for the project %s using as template %s'), $this->objProject->ProjectName, $this->strTemplatePath));

            $this->startTimer();

            if (file_exists($this->strTemplatePath) && is_dir($this->strTemplatePath))
                $this->ExportFromDirectory();
            elseif (is_file($this->strTemplatePath))
                $this->ExportToFile();
            else
                throw new Exception(sprintf(t('%s does not exist or it is not a directory or file'), $this->strTemplatePath));
            $this->stopTimer();

            NarroLog::LogMessage(3, sprintf(t('Export finished successfully in %d seconds.'), NarroImportStatistics::$arrStatistics['End time'] - NarroImportStatistics::$arrStatistics['Start time']));
        }

        public function ExportToFile() {
            $strDirectory = dirname($this->strTemplatePath);

            chdir($strDirectory);

            NarroLog::SetLogFile(dirname($this->strTranslationPath)  . '/export.log');

            if (file_exists($strDirectory . '/export.pid'))
                throw new Exception(sprintf(t('An export process is already running in the directory "%s" with pid %d'), $strDirectory, file_get_contents($strDirectory . '/export.pid')));

            $hndPidFile = fopen($strDirectory . '/export.pid', 'w');

            if (!$hndPidFile)
                throw new Exception(sprintf(t('Cannot create %s in %s.'), 'export.pid', $strDirectory));

            fputs($hndPidFile, getmypid());
            fclose($hndPidFile);

            NarroProgress::SetProgressFile($this->strTranslationPath  . '/export.progress');

            NarroLog::LogMessage(1, sprintf(t('Exporting to "%s" using template "%s"'), $this->strTranslationPath, $this->strTemplatePath));

            $objFile = NarroFile::QuerySingle(
                            QQ::AndCondition(
                                QQ::Equal(
                                    QQN::NarroFile()->ProjectId,
                                    $this->objProject->ProjectId
                                ),
                                QQ::Equal(
                                    QQN::NarroFile()->FileName,
                                    basename($this->strTemplatePath)
                                ),
                                QQ::IsNull(
                                    QQN::NarroFile()->ParentId
                                )
                            )
            );

            if (!$objFile instanceof NarroFile) {
                $objFile = NarroFile::QuerySingle(
                            QQ::AndCondition(
                                QQ::Equal(
                                    QQN::NarroFile()->ProjectId,
                                    $this->objProject->ProjectId
                                ),
                                QQ::IsNotNull(
                                    QQN::NarroFile()->ParentId
                                )
                            )
                );

                if (!$objFile instanceof NarroFile)
                    throw new Exception(t('There are no files in the database for this project.'));
            }


            $this->ExportFile($objFile, $this->strTemplatePath, $this->strTranslationPath);

            NarroImportStatistics::$arrStatistics['Exported files']++;

            if (file_exists($strDirectory   . '/export.pid'))
                unlink($strDirectory  . '/export.pid');

        }

        public function ExportFromDirectory() {

            NarroLog::SetLogFile($this->strTranslationPath . '/export.log');

            NarroLog::LogMessage(1, sprintf(t('Starting to export in directory "%s"'), $this->strTranslationPath));

            if (file_exists($this->strTranslationPath  . '/export.pid'))
                throw new Exception(sprintf(t('An export process is already running in the directory "%s" with pid %d'), $this->strTranslationPath, file_get_contents($this->strTranslationPath . '/export.pid')));

            $hndPidFile = fopen($this->strTranslationPath  . '/export.pid', 'w');

            if (!$hndPidFile)
                throw new Exception(sprintf(t('Cannot create %s in %s.'), 'export.pid', $this->strTranslationPath));

            fputs($hndPidFile, getmypid());
            fclose($hndPidFile);

            NarroProgress::SetProgressFile($this->strTranslationPath  . '/export.progress');

            /**
             * get the file list with complete paths
             */
            $arrFiles = $this->ListDir($this->strTemplatePath);

            $intTotalFilesToProcess = count($arrFiles);

            NarroLog::LogMessage(1, sprintf(t('Starting to process %d files'), $intTotalFilesToProcess));

            $arrDirectories = array();

            foreach($arrFiles as $intFileNo=>$strFileToExport) {
                $arrFileParts = split('/', str_replace($this->strTemplatePath, '', $strFileToExport));
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
                            NarroLog::LogMessage(2, sprintf(t('Could not find folder "%s" with parent id "%d" in the database.'), $strDir, $intParentId));
                            continue;
                        }

                        $arrDirectories[$strPath] = $objFile->FileId;
                    }
                    $intParentId = $arrDirectories[$strPath];
                }

                $strTranslatedFileToExport = str_replace($this->strTemplatePath, $this->strTranslationPath, $strFileToExport);
                if (!file_exists(dirname($strTranslatedFileToExport))) {
                    if (!mkdir(dirname($strTranslatedFileToExport), 0777, true)) {
                        NarroLog::LogMessage(2, sprintf(t('Failed to create the parent directories for the file %s'), $strFileToExport));
                        continue;
                    }
                }

                if (!$intFileType = $this->GetFileType($strFileName)) {
                    NarroLog::LogMessage(2, sprintf(t('Copying unhandled file type: %s'), $strFileToExport));
                    NarroImportStatistics::$arrStatistics['Unhandled files that were copied from the source language']++;
                    if (!file_exists($strTranslatedFileToExport) && !copy($strFileToExport, $strTranslatedFileToExport))
                        NarroLog::LogMessage(2, sprintf(t('Failed to copy the file to %s'), $strTranslatedFileToExport));
                    continue;
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

                NarroLog::LogMessage(1, sprintf(t('Exporting file "%s" using template "%s"'), $objFile->FileName, $strTranslatedFileToExport));

                $this->ExportFile($objFile, $strFileToExport, $strTranslatedFileToExport);
                NarroImportStatistics::$arrStatistics['Exported files']++;

                NarroProgress::SetProgress((int) ceil(($intFileNo*100)/$intTotalFilesToProcess));

            }

            $this->stopTimer();
        }

        public function ExportFile ($objFile, $strTemplateFile, $strTranslatedFile) {
            if (!$objFile instanceof NarroFile)
                return false;

            switch($objFile->TypeId) {
                case NarroFileType::MozillaDtd:
                        $objFileImporter = new NarroMozillaDtdFileImporter($this);
                        break;
                case NarroFileType::MozillaIni:
                        $objFileImporter = new NarroMozillaIniFileImporter($this);
                        break;
                case NarroFileType::MozillaInc:
                        $objFileImporter = new NarroMozillaIncFileImporter($this);
                        break;
                case NarroFileType::GettextPo:
                        $objFileImporter = new NarroGettextPoFileImporter($this);
                        break;
                case NarroFileType::OpenOfficeSdf:
                        $objFileImporter = new NarroOpenOfficeSdfFileImporter($this);
                        break;
                case NarroFileType::Svg:
                        $objFileImporter = new NarroSvgFileImporter($this);
                        break;
                case NarroFileType::DumbGettextPo:
                        $objFileImporter = new NarroDumbGettextPoFileImporter($this);
                        break;
                case NarroFileType::PhpMyAdmin:
                        $objFileImporter = new NarroPhpMyAdminFileImporter($this);
                        break;
                default:
                        NarroLog::LogMessage(2, sprintf(t('Copying unhandled file type: %s'), $strTemplateFile));
                        NarroImportStatistics::$arrStatistics['Unhandled files that were copied from the source language']++;
                        copy($strTemplateFile, $strTranslatedFile);
                        return false;
            }
            $objFileImporter->File = $objFile;
            return $objFileImporter->ExportFile($strTemplateFile, $strTranslatedFile);
        }

        public function GetFileType($strFile) {
            if (!preg_match('/^.+\.(.+)$/', $strFile, $arrMatches))
                return false;

            if (!isset($arrMatches[1]))
                return false;

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
                default:
                        return false;
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
                case "Validate": return $this->blnValidate;
                case "CheckEqual": return $this->blnCheckEqual;
                case "OnlySuggestions": return $this->blnOnlySuggestions;

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
                        if (mkdir($mixValue, 0777, true))
                            $this->strTranslationPath = $mixValue;
                        else
                            throw new Exception(sprintf(t('TranslationPath "%s" does not exist.'), $mixValue));
                    }

                    break;

                case "TemplatePath":
                    if (file_exists($mixValue))
                        $this->strTemplatePath = $mixValue;
                    else {
                        if (mkdir($mixValue, 0777, true))
                            $this->strTranslationPath = $mixValue;
                        else
                            throw new Exception(sprintf(t('TranslationPath "%s" does not exist.'), $mixValue));
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


                case "Validate":
                    try {
                        $this->blnValidate = QType::Cast($mixValue, QType::Boolean);
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

                case "OnlySuggestions":
                    try {
                        $this->blnOnlySuggestions = QType::Cast($mixValue, QType::Boolean);
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


    }
?>
