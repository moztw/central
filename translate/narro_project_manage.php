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

    require_once('includes/prepend.inc.php');
    require_once('includes/narro/narro_progress_bar.class.php');

    class NarroProjectManageForm extends QForm {
        protected $objNarroProject;

        protected $pnlLogViewer;

        protected $btnDelProjectFiles;
        protected $btnDelProjectContexts;
        protected $btnDelProjectContextInfos;

        /**
         * common options
         */
        protected $chkForce;
        protected $lstLogLevel;

        /**
         * import controls and options
         */
        protected $btnImport;
        protected $flaImportFromFile;
        protected $objImportProgress;
        protected $lblImport;

        protected $chkDoNotDeactivateFiles;
        protected $chkDoNotDeactivateContexts;
        protected $chkValidate;
        protected $chkOnlySuggestions;
        protected $chkCheckEqual;

        /**
         * export controls and options
         */
        protected $btnExport;
        protected $flaExportFromFile;
        protected $objExportProgress;
        protected $lblExport;

        protected $lstExportedSuggestion;
        protected $lstExportArchiveType;

        protected function SetupNarroProject() {
            // Lookup Object PK information from Query String (if applicable)
            // Set mode to Edit or New depending on what's found
            $intProjectId = QApplication::QueryString('p');
            if ($intProjectId > 0) {
                $this->objNarroProject = NarroProject::Load(($intProjectId));

                if (!$this->objNarroProject)
                    QApplication::Redirect(NarroLink::ProjectList());

            } else
                QApplication::Redirect(NarroLink::ProjectList());

        }

        protected function Form_Create() {
            parent::Form_Create();

            $this->SetupNarroProject();

            if (!QApplication::$objUser->hasPermission('Can manage project', $this->objNarroProject->ProjectId, QApplication::$Language->LanguageId))
                QApplication::Redirect(NarroLink::ProjectList());

            $this->pnlLogViewer = new QPanel($this);
            $this->pnlLogViewer->Visible = false;

            $this->btnDelProjectContexts = new QButton($this);
            $this->btnDelProjectContexts->Text = t('Delete project contexts');
            $this->btnDelProjectContexts->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE the contexts for the project "%s"?\nThis operation might take a while and will delete:\n - project contexts and associated comments\n - votes for contexts belonging to this project\nTexts and suggestions are not deleted.'), $this->objNarroProject->ProjectName)));
            $this->btnDelProjectContexts->AddAction(new QClickEvent(), new QServerAction('btnDelProjectContexts_Click'));

            $this->btnDelProjectContextInfos = new QButton($this);
            $this->btnDelProjectContextInfos->Text = sprintf(t('Delete context informations in %s for this project'), QApplication::$Language->LanguageName);
            $this->btnDelProjectContextInfos->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE the context information for the project "%s", language "%s"?\nThis operation might take a while and will delete:\n - context information for the current language\nYou can recreate this deleted information by doing an import for this project and current language\nProject\'s contexts are not deleted, only this language is affected\nTexts and suggestions are not deleted.'), $this->objNarroProject->ProjectName, QApplication::$Language->LanguageName)));
            $this->btnDelProjectContextInfos->AddAction(new QClickEvent(), new QServerAction('btnDelProjectContextInfos_Click'));

            $this->btnDelProjectFiles = new QButton($this);
            $this->btnDelProjectFiles->Text = t('Delete project files');
            $this->btnDelProjectFiles->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE the files for the project "%s"?\nThis operation might take a while and will delete:\n - project contexts and associated comments\n - votes for contexts belonging to this project\n - project\'s files.\nTexts and suggestions are not deleted.'), $this->objNarroProject->ProjectName)));
            $this->btnDelProjectFiles->AddAction(new QClickEvent(), new QServerAction('btnDelProjectFiles_Click'));

            $this->lstExportedSuggestion = new QListBox($this);
            $this->lstExportedSuggestion->AddItem(t('The validated suggestion'), 1);
            $this->lstExportedSuggestion->AddItem(t('The most voted suggestion'), 2);
            $this->lstExportedSuggestion->AddItem(t('My suggestion'), 3);
            $this->lstExportedSuggestion->Enabled = false;

            $this->lstLogLevel = new QListBox($this);
            $this->lstLogLevel->AddItem(1, 1);
            $this->lstLogLevel->AddItem(2, 2);
            $this->lstLogLevel->AddItem(3, 3, true);

            $this->chkCheckEqual = new QCheckBox($this);
            $this->chkCheckEqual->Checked = true;

            $this->chkDoNotDeactivateFiles = new QCheckBox($this);
            $this->chkDoNotDeactivateFiles->Checked = true;

            $this->chkDoNotDeactivateContexts = new QCheckBox($this);
            $this->chkDoNotDeactivateContexts->Checked = true;

            $this->chkValidate = new QCheckBox($this);
            $this->chkValidate->Checked = true;

            $this->chkOnlySuggestions = new QCheckBox($this);


            $this->flaImportFromFile = new QFileAsset($this);
            $this->flaImportFromFile->TemporaryUploadPath = __TMP_PATH__;
            $this->flaImportFromFile->FileAssetType = QFileAssetType::Archive;

            $this->objImportProgress = new NarroTranslationProgressBar($this);
            $this->objImportProgress->Total = 100;
            $this->objImportProgress->Visible = false;

            $this->btnImport = new QButton($this);
            $this->btnImport->Text = t('Import');
            $this->btnImport->AddAction(new QClickEvent(), new QJavaScriptAction(sprintf('document.getElementById(\'%s\').disabled=true;document.getElementById(\'%s\_ctl\').visible=true;', $this->btnImport->ControlId, $this->objImportProgress->ControlId)));
            if (function_exists('proc_open') && QApplication::$blnUseAjax)
                $this->btnImport->AddAction(new QClickEvent(), new QAjaxAction('btnImport_Click'));
            else
                $this->btnImport->AddAction(new QClickEvent(), new QServerAction('btnImport_Click'));

            $this->lblImport = new QLabel($this);
            $this->lblImport->Visible = false;

            $this->flaExportFromFile = new QFileAsset($this);
            $this->flaExportFromFile->TemporaryUploadPath = __TMP_PATH__;
            $this->flaExportFromFile->FileAssetType = QFileAssetType::Archive;

            $this->btnExport = new QButton($this);
            $this->btnExport->Text = t('Export');
            if (
                function_exists('proc_open') &&
                function_exists('escapeshellarg') &&
                function_exists('escapeshellcmd') &&
                QApplication::$blnUseAjax)
                $this->btnExport->AddAction(new QClickEvent(), new QAjaxAction('btnExport_Click'));
            else
                $this->btnExport->AddAction(new QClickEvent(), new QServerAction('btnExport_Click'));

            $this->objExportProgress = new NarroTranslationProgressBar($this);
            $this->objExportProgress->Total = 100;
            $this->objExportProgress->Visible = false;

            $this->lblExport = new QLabel($this);
            $this->lblExport->Visible = false;
            $this->lblExport->HtmlEntities = false;



            $this->lstExportArchiveType = new QListBox($this);
            $this->lstExportArchiveType->AddItem('tar.gz', 'tar.gz');
            $this->lstExportArchiveType->AddItem('zip', 'zip');

            $this->chkForce = new QCheckBox($this);
            $this->chkForce->AddAction(new QClickEvent(), new QJavaScriptAction(sprintf('document.getElementById(\'%s\').disabled = false', $this->btnImport->ControlId)));
            $this->chkForce->AddAction(new QClickEvent(), new QJavaScriptAction(sprintf('document.getElementById(\'%s\').disabled = false', $this->btnExport->ControlId)));

            $strImportPath = __DOCROOT__ . __SUBDIRECTORY__ . __IMPORT_PATH__ . '/' . $this->objNarroProject->ProjectId;

            foreach(array('tar.gz', 'zip') as $strFileExt) {
                $strArchiveName = $this->objNarroProject->ProjectId . '-' . QApplication::$Language->LanguageCode . '.' . $strFileExt;
                $strExportFile = $strImportPath . '/' . $strArchiveName;
                if (file_exists($strExportFile)) {
                    $objDateSpan = new QDateTimeSpan(time() - filemtime($strExportFile));
                    if ($this->lblExport->Visible)
                        $this->lblExport->Text .= ', ' . sprintf(t('or <a href="%s">%s</a>, exported %s ago'), str_replace(__DOCROOT__, __HTTP_URL__, $strExportFile) , $strArchiveName, $objDateSpan->SimpleDisplay());
                    else
                        $this->lblExport->Text = sprintf(t('Link to last export: <a href="%s">%s</a>, exported %s ago'), str_replace(__DOCROOT__, __HTTP_URL__, $strExportFile) , $strArchiveName, $objDateSpan->SimpleDisplay());
                    $this->lblExport->Visible = true;
                }
            }

            if (file_exists($strImportPath . '/' . QApplication::$Language->LanguageCode . '/import.pid')) {
                $this->btnImport->Enabled = false;
                $this->objImportProgress->Visible = true;
                NarroProgress::SetProgressFile($strImportPath . '/' . QApplication::$Language->LanguageCode . '/import.progress');
                $this->objImportProgress->Translated = NarroProgress::GetProgress();
                QApplication::ExecuteJavaScript(sprintf('lastImportId = setInterval("qcodo.postAjax(\'%s\', \'%s\', \'QClickEvent\', \'1\');", %d);', $this->FormId, $this->btnImport->ControlId, 2000));
            }
            else {
                NarroLog::SetLogFile($strImportPath . '/' . QApplication::$Language->LanguageCode . '/import.log');
                NarroLog::ClearLog();
            }


            if (file_exists($strImportPath . '/' . QApplication::$Language->LanguageCode . '/export.pid')) {
                $this->btnExport->Enabled = false;
                $this->objExportProgress->Visible = true;
                NarroProgress::SetProgressFile($strImportPath . '/' . QApplication::$Language->LanguageCode . '/export.progress');
                $this->objExportProgress->Translated = NarroProgress::GetProgress();
                QApplication::ExecuteJavaScript(sprintf('lastImportId = setInterval("qcodo.postAjax(\'%s\', \'%s\', \'QClickEvent\', \'1\');", %d);', $this->FormId, $this->btnExport->ControlId, 2000));
            }
            else {
                NarroLog::SetLogFile($strImportPath . '/' . QApplication::$Language->LanguageCode . '/export.log');
                NarroLog::ClearLog();
            }


            $this->Form_PreRender();

        }

        public function Form_PreRender() {
        }

        public function btnImport_Click($strFormId, $strControlId, $strParameter) {
            if (!QApplication::$objUser->hasPermission('Can manage project', $this->objNarroProject->ProjectId, QApplication::$Language->LanguageId))
                return false;

            $strImportPath = __DOCROOT__ . __SUBDIRECTORY__ . __IMPORT_PATH__ . '/' . $this->objNarroProject->ProjectId;
            NarroProgress::SetProgressFile($strImportPath . '/' . QApplication::$Language->LanguageCode . '/import.progress');
            NarroLog::SetLogFile($strImportPath . '/' . QApplication::$Language->LanguageCode . '/import.log');

            if ($strParameter != 1) {
                $this->btnImport->Enabled = false;
                $this->objImportProgress->Visible = true;
                $this->pnlLogViewer->Text = '';
                $this->lblImport->Text = '';

                if (file_exists($this->flaImportFromFile->File)) {
                    $strWorkDir = __TMP_PATH__ . '/import-project-' . $this->objNarroProject->ProjectId . '-' . QApplication::$Language->LanguageCode;

                    if (file_exists($strWorkDir))
                        try {
                            NarroUtils::RecursiveDelete($strWorkDir);
                        }
                        catch(Exception $objEx) {
                            NarroLog::LogMessage(3, $objEx->getMessage());
                        }

                    mkdir($strWorkDir);
                    chmod($strWorkDir, 0777);
                    chdir($strWorkDir);

                    $strExportArchive = $this->objNarroProject->ProjectId . '-' . QApplication::$Language->LanguageCode . '.' . $this->lstExportArchiveType->SelectedValue;

                    if (file_exists($strExportPath . '/' . $strExportArchive))
                        unlink($strExportPath . '/' . $strExportArchive);

                    switch($strExt = pathinfo($this->flaImportFromFile->File, PATHINFO_EXTENSION)) {
                        case 'gz':
                            $objArchiver = new Archive_Tar($this->flaImportFromFile->File, $strExt);
                            if (!$objArchiver->extract($strWorkDir))
                                NarroLog::LogMessage(3, sprintf(t('Failed to uncompress %s'), $this->flaImportFromFile->FileName));
                            break;
                        case 'zip':
                            $objArchiver = new ZipArchive();

                            if ($objArchiver->open($this->flaImportFromFile->File) === true) {
                                if (!$objArchiver->extractTo($strWorkDir))
                                    NarroLog::LogMessage(3, sprintf(t('Failed to uncompress %s'), $this->flaImportFromFile->FileName));
                            }
                            else
                                NarroLog::LogMessage(3, sprintf(t('Can\'t open %s as a zip file'), $this->flaImportFromFile->FileName));
                            break;
                        default:
                            NarroLog::LogMessage(3, sprintf(t('Unsupported extension: %s. Supported archives are: %s'), $strExt, 'tar.gz, zip'));
                    }

                    if (isset($objArchiver)) {
                        try {
                            NarroUtils::RecursiveChmod($strWorkDir);
                        }
                        catch(Exception $objEx) {
                            NarroLog::LogMessage(3, $objEx->getMessage());
                        }

                    }

                    if (!file_exists($strWorkDir . '/en-US') && !file_exists($strWorkDir . '/' . QApplication::$Language->LanguageCode)) {
                        NarroLog::LogMessage(3, sprintf(t('The uploaded archive should have at least one directory named "en-US" or one named "%s" that contains the files with the original texts'), QApplication::$Language->LanguageCode));
                        $this->lblImport->Text = t('Import failed.');
                        try {
                            NarroUtils::RecursiveDelete($strWorkDir);
                        }
                        catch(Exception $objEx) {
                            NarroLog::LogMessage(3, $objEx->getMessage());
                        }

                        if (file_exists($this->flaImportFromFile->File))
                            unlink($this->flaImportFromFile->File);

                        $this->btnImport->Enabled = true;
                        $this->objImportProgress->Visible = false;
                        $this->showLog();
                        return false;
                    }
                    else {
                        if (file_exists($strWorkDir . '/en-US')) {
                            try {
                                NarroUtils::RecursiveDelete($strImportPath . '/en-US');
                                NarroUtils::RecursiveCopy($strWorkDir . '/en-US', __DOCROOT__ . __SUBDIRECTORY__ . __IMPORT_PATH__ . '/' . $this->objNarroProject->ProjectId . '/en-US');
                                NarroUtils::RecursiveChmod(__DOCROOT__ . __SUBDIRECTORY__ . __IMPORT_PATH__ . '/' . $this->objNarroProject->ProjectId . '/en-US');
                            }
                            catch(Exception $objEx) {
                                NarroLog::LogMessage(3, $objEx->getMessage());
                            }
                        }

                        if (file_exists($strWorkDir . '/' . QApplication::$Language->LanguageCode)) {
                            try {
                                NarroUtils::RecursiveDelete($strImportPath . '/' . QApplication::$Language->LanguageCode . '/*');
                                NarroUtils::RecursiveCopy($strWorkDir . '/' . QApplication::$Language->LanguageCode, __DOCROOT__ . __SUBDIRECTORY__ . __IMPORT_PATH__ . '/' . $this->objNarroProject->ProjectId . '/' . QApplication::$Language->LanguageCode);
                                NarroUtils::RecursiveChmod(__DOCROOT__ . __SUBDIRECTORY__ . __IMPORT_PATH__ . '/' . $this->objNarroProject->ProjectId . '/' . QApplication::$Language->LanguageCode);
                            }
                            catch(Exception $objEx) {
                                NarroLog::LogMessage(3, $objEx->getMessage());
                            }
                        }

                        try {
                            NarroUtils::RecursiveDelete($strWorkDir);
                        }
                        catch(Exception $objEx) {
                            NarroLog::LogMessage(3, $objEx->getMessage());
                        }

                        NarroLog::LogMessage(3, sprintf(t('The directories "%s" and "%s" from the uploaded archive were extracted to "%s"'), 'en-US', QApplication::$Language->LanguageCode, __DOCROOT__ . __SUBDIRECTORY__ . __IMPORT_PATH__ . '/' . $this->objNarroProject->ProjectId));
                    }

                }

                /**
                 * refresh the page to show the progress. keep the interval id as a global variable (no var before it) to clear it afterwards
                 */
                if (function_exists('proc_open') && QApplication::$blnUseAjax)
                    QApplication::ExecuteJavaScript(sprintf('lastImportId = setInterval("qcodo.postAjax(\'%s\', \'%s\', \'QClickEvent\', \'1\');", %d);', $strFormId, $strControlId, 2000));
            }
            else {
                if (!file_exists($strImportPath . '/' . QApplication::$Language->LanguageCode . '/import.pid')) {
                    $this->lblImport->Text = t('Import finished.');

                    if (file_exists($this->flaImportFromFile->File))
                        unlink($this->flaImportFromFile->File);

                    QApplication::ExecuteJavaScript('if (typeof lastImportId != \'undefined\') clearInterval(lastImportId)');

                    $this->showLog();

                    $this->lblImport->Visible = true;
                    $this->btnImport->Enabled = true;
                    $this->objImportProgress->Translated = 0;
                    $this->objImportProgress->Visible = false;
                }
                else {
                    $this->objImportProgress->Translated = NarroProgress::GetProgress();
                    $this->objImportProgress->MarkAsModified();
                }
                return true;
            }

            chdir(__DOCROOT__ . __SUBDIRECTORY__);

            if (function_exists('proc_open')) {
                $strCommand = sprintf(
                    '/usr/bin/php ' .
                        escapeshellarg('includes/narro/importer/importer.php').
                        ' --import --minloglevel %d --project %d --user %d ' .
                        (($this->chkValidate->Checked)?'--validate ':'') .
                        (($this->chkForce->Checked)?'--force ':'') .
                        (($this->chkCheckEqual->Checked)?'--check-equal ':'') .
                        (($this->chkOnlySuggestions->Checked)?'--only-suggestions --do-not-deactivate-files --do-not-deactivate-contexts ':'') .
                        ' --source-lang en-US --target-lang %s',
                    $this->lstLogLevel->SelectedValue,
                    $this->objNarroProject->ProjectId,
                    QApplication::$objUser->UserId,
                    QApplication::$Language->LanguageCode
                );

                proc_close(proc_open ("$strCommand &", array(), $foo));
                /**
                 * give the process a few seconds to start
                 */
                sleep(3);
            } elseif ($strParameter != 1) {
                set_time_limit(0);

                $objNarroImporter = new NarroProjectImporter();

                NarroLog::$blnEchoOutput = false;

                /**
                 * Get boolean options
                 */
                $objNarroImporter->DeactivateFiles = true;
                $objNarroImporter->DeactivateContexts = true;
                $objNarroImporter->CheckEqual = $this->chkCheckEqual->Checked;
                $objNarroImporter->Validate = $this->chkValidate->Checked;
                $objNarroImporter->OnlySuggestions = $this->chkOnlySuggestions->Checked;
                $objNarroImporter->MinLogLevel = $this->lstLogLevel->SelectedValue;
                $objNarroImporter->Project = $this->objNarroProject;
                $objNarroImporter->User = QApplication::$objUser;
                $objNarroImporter->TargetLanguage = QApplication::$Language;
                $objNarroImporter->SourceLanguage = NarroLanguage::LoadByLanguageCode('en-US');
                $objNarroImporter->TranslationPath = $strImportPath . '/' . $objNarroImporter->TargetLanguage->LanguageCode;
                $objNarroImporter->TemplatePath = $strImportPath . '/' . $objNarroImporter->SourceLanguage->LanguageCode;

                NarroLog::$intMinLogLevel = $this->lstLogLevel->SelectedValue;

                NarroLog::LogMessage(3, sprintf(t('Target language is %s'), $objNarroImporter->TargetLanguage->LanguageName));
                NarroLog::LogMessage(3, sprintf(t('Source language is %s'), $objNarroImporter->SourceLanguage->LanguageName));
                NarroLog::LogMessage(3, sprintf(t('Importing using templates from %s'), $strImportPath . '/' . $objNarroImporter->SourceLanguage->LanguageCode));

                if ($this->chkForce->Checked)
                    $objNarroImporter->CleanImportDirectory();

                try {
                    $objNarroImporter->ImportProject();
                }
                catch (Exception $objEx) {
                    NarroLog::LogMessage(3, sprintf(t('An error occured during import: %s'), $objEx->getMessage()));
                    $objNarroImporter->CleanImportDirectory();
                    $this->lblImport->Text = t('Import failed.');
                    $this->showLog();
                }

                $this->showLog();

                $objNarroImporter->CleanImportDirectory();
                NarroLog::LogMessage(2, var_export(NarroImportStatistics::$arrStatistics, true));

                $this->btnImport_Click($strFormId, $strControlId, 1);
            }
        }

        public function btnExport_Click($strFormId, $strControlId, $strParameter) {
            if (!QApplication::$objUser->hasPermission('Can manage project', $this->objNarroProject->ProjectId, QApplication::$Language->LanguageId))
                return false;

            $strExportPath = __DOCROOT__ . __SUBDIRECTORY__ . __IMPORT_PATH__ . '/' . $this->objNarroProject->ProjectId;
            NarroProgress::SetProgressFile($strExportPath . '/' . QApplication::$Language->LanguageCode . '/export.progress');
            NarroLog::SetLogFile($strExportPath . '/' . QApplication::$Language->LanguageCode . '/export.log');

            if ($strParameter != 1) {
                $this->btnExport->Enabled = false;
                $this->pnlLogViewer->Text = '';
                $this->lblExport->Text = '';

                /**
                 * refresh the page to show the progress. keep the interval id as a global variable (no var before it) to clear it afterwards
                 */
                if (function_exists('proc_open') && QApplication::$blnUseAjax) {
                    $this->objExportProgress->Visible = true;
                    QApplication::ExecuteJavaScript(sprintf('lastExportId = setInterval("qcodo.postAjax(\'%s\', \'%s\', \'QClickEvent\', \'1\');", %d);', $strFormId, $strControlId, 2000));
                }
            }
            else {
                if (!file_exists($strExportPath . '/' . QApplication::$Language->LanguageCode . '/export.pid')) {
                    $this->lblExport->Text = t('Export finished.');
                    QApplication::ExecuteJavaScript('if (typeof lastExportId != \'undefined\') clearInterval(lastExportId)');

                    $this->lblExport->Visible = true;
                    $this->btnExport->Enabled = true;
                    $this->objExportProgress->Visible = false;

                    /**
                     * Create an archive
                     */
                    if (file_exists($strExportPath . '/' . QApplication::$Language->LanguageCode)) {
                        $strExportArchive = $this->objNarroProject->ProjectId . '-' . QApplication::$Language->LanguageCode . '.' . $this->lstExportArchiveType->SelectedValue;
                        $strCurDir = getcwd();
                        chdir($strExportPath);

                        if (file_exists($strExportPath . '/' . $strExportArchive))
                            unlink($strExportPath . '/' . $strExportArchive);

                        $arrFiles = array_merge(
                            NarroUtils::ListDirectory($strExportPath . '/en-US', null, '/CVS|\.svn|\.hg|port\.pid|port\.log|port\.status/', $strExportPath . '/', true),
                            NarroUtils::ListDirectory($strExportPath . '/' . QApplication::$Language->LanguageCode, null, '/CVS|\.svn|\.hg|port\.pid|port\.log|port\.status/', $strExportPath . '/', true)
                        );


                        switch($this->lstExportArchiveType->SelectedValue) {
                            case 'tar.gz':
                            case 'tar.bz2':
                                foreach($arrFiles as $intKey=>$strFile)
                                    if (is_dir($strFile)) unset($arrFiles[$intKey]);

                                $objArchiver = new Archive_Tar($strExportArchive);
                                $objArchiver->create($arrFiles);
                                break;
                            default:
                                $objArchiver = new ZipArchive();
                                unlink($strExportArchive);
                                if ($objArchiver->open($strExportArchive, ZIPARCHIVE::CREATE) !== true ) {
                                    throw new Exception(__METHOD__ . ':Can\'t open file: ' . $strExportArchive);
                                }

                                foreach ($arrFiles as $strFile)
                                {
                                    if (is_dir($strFile))
                                        $objArchiver->addEmptyDir($strFile);
                                    elseif (is_file($strFile))
                                        $objArchiver->addFile($strFile);
                                }

                                $objArchiver->close();
                        }

                        chmod($strExportPath . '/' . $strExportArchive, 0666);
                        if (file_exists($strExportPath . '/' . $strExportArchive)) {
                            $strDownloadUrl = __HTTP_URL__ . __SUBDIRECTORY__ . __IMPORT_PATH__ . '/' . $this->objNarroProject->ProjectId . '/' . $strExportArchive;
                            $this->lblExport->Text .= ' ' . sprintf(t('Download link: <a href="%s">%s</a>'), $strDownloadUrl, $strExportArchive);
                            $this->objExportProgress->Translated = 0;
                        }
                        else {
                            $this->lblExport->Text .= ' ' . t('Failed to create an archive for download');
                            $this->objExportProgress->Translated = 0;
                        }

                        $this->showLog();
                    }
                }
                else {
                    $this->objExportProgress->Translated = NarroProgress::GetProgress();
                    $this->objExportProgress->MarkAsModified();
                }

                return true;
            }

            chdir(__DOCROOT__ . __SUBDIRECTORY__);

            if (function_exists('proc_open')) {
                $strCommand = sprintf(
                    '/usr/bin/php ' .
                        escapeshellarg('includes/narro/importer/importer.php').
                        ' --export --minloglevel %d --project %d --user %d ' .
                        (($this->chkValidate->Checked)?'--validate ':'') .
                        (($this->chkForce->Checked)?'--force ':'') .
                        (($this->chkOnlySuggestions->Checked)?'--only-suggestions --do-not-deactivate-files --do-not-deactivate-contexts ':'') .
                        ' --check-equal --source-lang en-US --target-lang %s',
                    $this->lstLogLevel->SelectedValue,
                    $this->objNarroProject->ProjectId,
                    QApplication::$objUser->UserId,
                    QApplication::$Language->LanguageCode
                );

                proc_close(proc_open ("$strCommand &", array(), $foo));
            }
            elseif($strParameter != 1) {
                set_time_limit(0);

                $objNarroImporter = new NarroProjectImporter();
                NarroLog::$blnEchoOutput = false;
                $objNarroImporter->MinLogLevel = $this->lstLogLevel->SelectedValue;
                NarroLog::$intMinLogLevel = $this->lstLogLevel->SelectedValue;
                $objNarroImporter->ExportedSuggestion = $this->lstExportedSuggestion->SelectedValue;
                $objNarroImporter->TargetLanguage = QApplication::$Language;
                $objNarroImporter->SourceLanguage = NarroLanguage::LoadByLanguageCode('en-US');
                $objNarroImporter->Project = $this->objNarroProject;
                $objNarroImporter->User = QApplication::$objUser;
                $objNarroImporter->TranslationPath = $strExportPath . '/' . QApplication::$Language->LanguageCode;
                $objNarroImporter->TemplatePath = $strExportPath . '/en-US';

                NarroLog::LogMessage(3, sprintf(t('Source language is %s'), $objNarroImporter->SourceLanguage->LanguageName));
                NarroLog::LogMessage(3, sprintf(t('Target language is %s'), $objNarroImporter->TargetLanguage->LanguageName));
                NarroLog::LogMessage(3, sprintf(t('Exporting using templates from %s'), $strExportPath . '/en-US'));

                if ($this->chkForce->Checked)
                    $objNarroImporter->CleanExportDirectory();

                try {
                    $objNarroImporter->ExportProject();
                }
                catch (Exception $objEx) {
                    NarroLog::LogMessage(3, sprintf(t('An error occured during export: %s'), $objEx->getMessage()));
                    $objNarroImporter->CleanExportDirectory();
                    $this->lblExport->Text = t('Export failed.');
                    $this->showLog();
                }

                $objNarroImporter->CleanExportDirectory();
                NarroLog::LogMessage(2, var_export(NarroImportStatistics::$arrStatistics, true));
                $this->showLog();

                $this->btnExport_Click($strFormId, $strControlId, 1);
            }
        }

        private function showLog() {
            $this->pnlLogViewer->Text = '<div class="dotted_box">
            <div class="dotted_box_title">' . t('Operation log') . '</div>
            <div class="dotted_box_content">' . nl2br(NarroLog::GetLogContents()) . '</div></div></div>';

            $this->pnlLogViewer->Visible = true;
        }

        protected function btnDelProjectContextInfos_Click($strFormId, $strControlId, $strParameter) {
            if (!QApplication::$objUser->hasPermission('Can manage project', $this->objNarroProject->ProjectId, QApplication::$Language->LanguageId))
                QApplication::Redirect(NarroLink::ProjectList());

            $objDatabase = QApplication::$Database[1];

            $strQuery = sprintf("DELETE FROM narro_context_comment USING narro_context_comment LEFT JOIN narro_context ON narro_context_comment.context_id=narro_context.context_id WHERE narro_context_comment.language_id=%d AND narro_context.project_id=%d", QApplication::$Language->LanguageId, $this->objNarroProject->ProjectId);
            try {
                $objDatabase->NonQuery($strQuery);
            }catch (Exception $objEx) {
                throw new Exception(sprintf(t('Error while executing sql query in file %s, line %d: %s'), __FILE__, __LINE__ - 4, $objEx->getMessage()));
            }

            $strQuery = sprintf("DELETE FROM narro_context_info USING narro_context_info LEFT JOIN narro_context ON narro_context_info.context_id=narro_context.context_id WHERE narro_context_info.language_id=%d AND narro_context.project_id=%d", QApplication::$Language->LanguageId, $this->objNarroProject->ProjectId);
            try {
                $objDatabase->NonQuery($strQuery);
            }catch (Exception $objEx) {
                throw new Exception(sprintf(t('Error while executing sql query in file %s, line %d: %s'), __FILE__, __LINE__ - 4, $objEx->getMessage()));
            }
        }

        protected function btnDelProjectContexts_Click($strFormId, $strControlId, $strParameter) {
            if (!QApplication::$objUser->hasPermission('Can delete project', $this->objNarroProject->ProjectId, QApplication::$Language->LanguageId))
                QApplication::Redirect(NarroLink::ProjectList());

            $objDatabase = QApplication::$Database[1];

            $strQuery = sprintf("DELETE FROM `narro_context` WHERE project_id = %d", $this->objNarroProject->ProjectId);
            try {
                $objDatabase->NonQuery($strQuery);
            }catch (Exception $objEx) {
                throw new Exception(sprintf(t('Error while executing sql query in file %s, line %d: %s'), __FILE__, __LINE__ - 4, $objEx->getMessage()));
            }
        }

        protected function btnDelProjectFiles_Click($strFormId, $strControlId, $strParameter) {
            if (!QApplication::$objUser->hasPermission('Can delete project', $this->objNarroProject->ProjectId, QApplication::$Language->LanguageId))
                QApplication::Redirect(NarroLink::ProjectList());

            $objDatabase = QApplication::$Database[1];

            $strQuery = sprintf("DELETE FROM `narro_context` WHERE project_id = %d", $this->objNarroProject->ProjectId);
            try {
                $objDatabase->NonQuery($strQuery);
            }catch (Exception $objEx) {
                throw new Exception(sprintf(t('Error while executing sql query in file %s, line %d: %s'), __FILE__, __LINE__ - 4, $objEx->getMessage()));
            }

            $strQuery = sprintf("UPDATE `narro_file` SET parent_id=NULL WHERE project_id = %d", $this->objNarroProject->ProjectId);
            try {
                $objDatabase->NonQuery($strQuery);
            }catch (Exception $objEx) {
                throw new Exception(sprintf(t('Error while executing sql query in file %s, line %d: %s'), __FILE__, __LINE__ - 4, $objEx->getMessage()));
            }

            $strQuery = sprintf("DELETE FROM `narro_file` WHERE project_id = %d", $this->objNarroProject->ProjectId);
            try {
                $objDatabase->NonQuery($strQuery);
            }catch (Exception $objEx) {
                throw new Exception(sprintf(t('Error while executing sql query in file %s, line %d: %s'), __FILE__, __LINE__ - 4, $objEx->getMessage()));
            }
        }
    }


    NarroProjectManageForm::Run('NarroProjectManageForm', 'templates/narro_project_manage.tpl.php');
?>
