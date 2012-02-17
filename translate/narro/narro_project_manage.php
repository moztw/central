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

    class NarroProjectManageForm extends QForm {
        protected $objNarroProject;

        protected $pnlLogViewer;

        protected $btnDelProjectFiles;
        protected $btnDelProjectContexts;
        protected $btnDelProjectContextInfos;

        /**
         * common options
         */
        protected $btnCleanLocaleDirectory;
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
        protected $chkApprove;
        protected $chkOnlySuggestions;
        protected $chkCheckEqual;

        /**
         * export controls and options
         */
        protected $btnExport;
        protected $flaExportFromFile;
        protected $objExportProgress;
        protected $lblExport;
        protected $chkCopyUnhandledFiles;

        protected $lstExportedSuggestion;
        protected $lstExportArchiveType;

        protected function SetupNarroProject() {
            // Lookup Object PK information from Query String (if applicable)
            // Set mode to Edit or New depending on what's found
            $intProjectId = NarroApp::QueryString('p');
            if ($intProjectId > 0) {
                $this->objNarroProject = NarroProject::Load(($intProjectId));

                if (!$this->objNarroProject)
                    NarroApp::Redirect(NarroLink::ProjectList());

            } else
                NarroApp::Redirect(NarroLink::ProjectList());

        }

        protected function Form_Create() {
            parent::Form_Create();

            $this->SetupNarroProject();

            if (!NarroApp::HasPermissionForThisLang('Can manage project', $this->objNarroProject->ProjectId))
                NarroApp::Redirect(NarroLink::ProjectList());

            $this->pnlLogViewer = new QPanel($this);
            $this->pnlLogViewer->Visible = false;

            $this->btnDelProjectContexts = new QButton($this);
            $this->btnDelProjectContexts->Text = t('Delete project contexts');
            $this->btnDelProjectContexts->AddAction(new QClickEvent(), new QConfirmAction(sprintf(NarroApp::Translate('Are you SURE you want to DELETE the contexts for the project "%s"?\nThis operation might take a while and will delete:\n - project contexts and associated comments\n - votes for contexts belonging to this project\nTexts and suggestions are not deleted.'), $this->objNarroProject->ProjectName)));
            $this->btnDelProjectContexts->AddAction(new QClickEvent(), new QServerAction('btnDelProjectContexts_Click'));

            $this->btnDelProjectContextInfos = new QButton($this);
            $this->btnDelProjectContextInfos->Text = sprintf(t('Delete context informations in %s for this project'), NarroApp::$Language->LanguageName);
            $this->btnDelProjectContextInfos->AddAction(new QClickEvent(), new QConfirmAction(sprintf(NarroApp::Translate('Are you SURE you want to DELETE the context information for the project "%s", language "%s"?\nThis operation might take a while and will delete:\n - context information for the current language\nYou can recreate this deleted information by doing an import for this project and current language\nProject\'s contexts are not deleted, only this language is affected\nTexts and suggestions are not deleted.'), $this->objNarroProject->ProjectName, NarroApp::$Language->LanguageName)));
            $this->btnDelProjectContextInfos->AddAction(new QClickEvent(), new QServerAction('btnDelProjectContextInfos_Click'));

            $this->btnDelProjectFiles = new QButton($this);
            $this->btnDelProjectFiles->Text = t('Delete project files');
            $this->btnDelProjectFiles->AddAction(new QClickEvent(), new QConfirmAction(sprintf(NarroApp::Translate('Are you SURE you want to DELETE the files for the project "%s"?\nThis operation might take a while and will delete:\n - project contexts and associated comments\n - votes for contexts belonging to this project\n - project\'s files.\nTexts and suggestions are not deleted.'), $this->objNarroProject->ProjectName)));
            $this->btnDelProjectFiles->AddAction(new QClickEvent(), new QServerAction('btnDelProjectFiles_Click'));

            $this->lstExportedSuggestion = new QListBox($this);

            $this->lstExportedSuggestion->AddItem(t('Approved suggestion'), 1);
            $this->lstExportedSuggestion->AddItem(t('Approved, then most voted suggestion'), 2);
            $this->lstExportedSuggestion->AddItem(t('Approved, then most recent suggestion'), 3);
            $this->lstExportedSuggestion->AddItem(t('Approved, then most voted and then most recent suggestion'), 4);
            $this->lstExportedSuggestion->AddItem(t('Approved, then my suggestion'), 5);

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

            $this->chkApprove = new QCheckBox($this);
            $this->chkApprove->Checked = true;

            $this->chkOnlySuggestions = new QCheckBox($this);

            if (!(NarroApp::HasPermission('Can manage project'))) {
                $this->chkOnlySuggestions->Enabled = false;
                $this->chkOnlySuggestions->Checked = true;
            }

            $this->flaImportFromFile = new QFileAsset($this);
            $this->flaImportFromFile->TemporaryUploadPath = __TMP_PATH__;
            $this->flaImportFromFile->FileAssetType = QFileAssetType::Archive;

            $this->objImportProgress = new NarroTranslationProgressBar($this);
            $this->objImportProgress->Total = 100;
            $this->objImportProgress->Visible = false;

            $this->btnImport = new QButton($this);
            $this->btnImport->Text = t('Import');
            $this->btnImport->AddAction(new QClickEvent(), new QJavaScriptAction(sprintf('document.getElementById(\'%s\').disabled=true;document.getElementById(\'%s\_ctl\').visible=true;', $this->btnImport->ControlId, $this->objImportProgress->ControlId)));
            if (function_exists('proc_open') && NarroApp::$UseAjax)
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
                NarroApp::$UseAjax)
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

            $this->chkCopyUnhandledFiles = new QCheckBox($this);
            $this->chkCopyUnhandledFiles->Checked = true;
            $this->chkCopyUnhandledFiles->Text = t('Copy unhandled files');

            $this->btnCleanLocaleDirectory = new QButton($this);
            $this->btnCleanLocaleDirectory->Text = t('Clean locale directory');
            $this->btnCleanLocaleDirectory->AddAction(new QClickEvent(), new QConfirmAction(NarroApp::Translate('Are you SURE you want to DELETE the files in your locale directory?\nThis operation has no effect on the data present in the application, but you might loose translated unhandled files, so you should backup first.')));
            $this->btnCleanLocaleDirectory->AddAction(new QClickEvent(), new QServerAction('btnClearLocaleDirectory_Click'));

            $strImportPath = __DOCROOT__ . __SUBDIRECTORY__ . __IMPORT_PATH__ . '/' . $this->objNarroProject->ProjectId;

            foreach(array('tar.gz', 'zip') as $strFileExt) {
                $strArchiveName = $this->objNarroProject->ProjectId . '-' . NarroApp::$Language->LanguageCode . '.' . $strFileExt;
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

            if (NarroUtils::IsProcessRunning('import', $this->objNarroProject->ProjectId)) {
                $this->btnImport->Enabled = false;
                $this->objImportProgress->Visible = true;
                $this->objImportProgress->Translated = NarroProgress::GetProgress($this->objNarroProject->ProjectId, 'import');
                NarroApp::ExecuteJavaScript(sprintf('lastImportId = setInterval("qcodo.postAjax(\'%s\', \'%s\', \'QClickEvent\', \'1\');", %d);', $this->FormId, $this->btnImport->ControlId, 2000));
            }
            else {
                NarroLog::SetLogFile($this->objNarroProject->ProjectId . '-' . NarroApp::$Language->LanguageCode . '-import.log');
                NarroLog::ClearLog();
            }


            if (NarroUtils::IsProcessRunning('export', $this->objNarroProject->ProjectId)) {
                $this->btnExport->Enabled = false;
                $this->objExportProgress->Visible = true;
                $this->objExportProgress->Translated = NarroProgress::GetProgress($this->objNarroProject->ProjectId, 'import');
                NarroApp::ExecuteJavaScript(sprintf('lastImportId = setInterval("qcodo.postAjax(\'%s\', \'%s\', \'QClickEvent\', \'1\');", %d);', $this->FormId, $this->btnExport->ControlId, 2000));
            }
            else {
                NarroLog::SetLogFile($this->objNarroProject->ProjectId . '-' . NarroApp::$Language->LanguageCode . '-export.log');
                NarroLog::ClearLog();
            }


            $this->Form_PreRender();

            $this->pnlBreadcrumb->strSeparator = ' | ';

            $this->pnlBreadcrumb->setElements(
                NarroLink::ProjectTextList($this->objNarroProject->ProjectId, 1, 1, '', $this->objNarroProject->ProjectName),
                NarroLink::ProjectFileList($this->objNarroProject->ProjectId, null, t('Files'))
            );

            $this->pnlBreadcrumb->addElement(t('Manage'));

            if (NarroApp::HasPermissionForThisLang('Can edit project', $this->objNarroProject->ProjectId))
                $this->pnlBreadcrumb->addElement(NarroLink::ProjectEdit($this->objNarroProject->ProjectId, t('Edit')));

            $this->pnlBreadcrumb->addElement(NarroLink::ProjectLanguages($this->objNarroProject->ProjectId, t('Languages')));
        }

        public function Form_PreRender() {
        }

        public function btnImport_Click($strFormId, $strControlId, $strParameter) {
            if (!NarroApp::HasPermissionForThisLang('Can manage project', $this->objNarroProject->ProjectId))
                return false;

            $strImportPath = __DOCROOT__ . __SUBDIRECTORY__ . __IMPORT_PATH__ . '/' . $this->objNarroProject->ProjectId;
            NarroLog::SetLogFile($this->objNarroProject->ProjectId . '-' . NarroApp::$Language->LanguageCode . '-import.log');

            if ($strParameter != 1) {
                $this->btnImport->Enabled = false;
                $this->objImportProgress->Visible = true;
                $this->pnlLogViewer->Text = '';
                $this->lblImport->Text = '';

                if (file_exists($this->flaImportFromFile->File)) {
                    $strWorkDir = __TMP_PATH__ . '/import-project-' . $this->objNarroProject->ProjectId . '-' . NarroApp::$Language->LanguageCode;

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

                    $strExportArchive = $this->objNarroProject->ProjectId . '-' . NarroApp::$Language->LanguageCode . '.' . $this->lstExportArchiveType->SelectedValue;

                    if (file_exists($strExportPath . '/' . $strExportArchive))
                        unlink($strExportPath . '/' . $strExportArchive);

                    switch($strExt = pathinfo($this->flaImportFromFile->File, PATHINFO_EXTENSION)) {
                        case 'gz':
                            $objArchiver = new Archive_Tar($this->flaImportFromFile->File, $strExt);
                            if (!$objArchiver->extract($strWorkDir))
                                NarroLog::LogMessage(3, sprintf('Failed to uncompress %s', $this->flaImportFromFile->FileName));
                            break;
                        case 'zip':
                            $objArchiver = new ZipArchive();

                            if ($objArchiver->open($this->flaImportFromFile->File) === true) {
                                if (!$objArchiver->extractTo($strWorkDir))
                                    NarroLog::LogMessage(3, sprintf('Failed to uncompress %s', $this->flaImportFromFile->FileName));
                            }
                            else
                                NarroLog::LogMessage(3, sprintf('Can\'t open %s as a zip file', $this->flaImportFromFile->FileName));
                            break;
                        default:
                            NarroLog::LogMessage(3, sprintf('Unsupported extension: %s. Supported archives are: %s', $strExt, 'tar.gz, zip'));
                    }

                    if (isset($objArchiver)) {
                        try {
                            NarroUtils::RecursiveChmod($strWorkDir);
                        }
                        catch(Exception $objEx) {
                            NarroLog::LogMessage(3, $objEx->getMessage());
                        }

                    }

                    if (!file_exists($strWorkDir . '/en-US') && !file_exists($strWorkDir . '/' . NarroApp::$Language->LanguageCode)) {
                        NarroLog::LogMessage(3, sprintf('The uploaded archive should have at least one directory named "en-US" or one named "%s" that contains the files with the original texts', NarroApp::$Language->LanguageCode));
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

                        if (file_exists($strWorkDir . '/' . NarroApp::$Language->LanguageCode)) {
                            try {
                                NarroUtils::RecursiveDelete($strImportPath . '/' . NarroApp::$Language->LanguageCode . '/*');
                                NarroUtils::RecursiveCopy($strWorkDir . '/' . NarroApp::$Language->LanguageCode, __DOCROOT__ . __SUBDIRECTORY__ . __IMPORT_PATH__ . '/' . $this->objNarroProject->ProjectId . '/' . NarroApp::$Language->LanguageCode);
                                NarroUtils::RecursiveChmod(__DOCROOT__ . __SUBDIRECTORY__ . __IMPORT_PATH__ . '/' . $this->objNarroProject->ProjectId . '/' . NarroApp::$Language->LanguageCode);
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

                        NarroLog::LogMessage(3, sprintf('The directories "%s" and "%s" from the uploaded archive were extracted to "%s"', 'en-US', NarroApp::$Language->LanguageCode, __DOCROOT__ . __SUBDIRECTORY__ . __IMPORT_PATH__ . '/' . $this->objNarroProject->ProjectId));
                    }

                }

                /**
                 * refresh the page to show the progress. keep the interval id as a global variable (no var before it) to clear it afterwards
                 */
                if (function_exists('proc_open'))
                    NarroApp::ExecuteJavaScript(sprintf('lastImportId = setInterval("qcodo.postAjax(\'%s\', \'%s\', \'QClickEvent\', \'1\');", %d);', $strFormId, $strControlId, 2000));
            }
            else {
                if (!NarroUtils::IsProcessRunning('import', $this->objNarroProject->ProjectId)) {
                    $this->lblImport->Text = t('Import finished.');

                    if (file_exists($this->flaImportFromFile->File))
                        unlink($this->flaImportFromFile->File);

                    NarroApp::ExecuteJavaScript('if (typeof lastImportId != \'undefined\') clearInterval(lastImportId)');

                    $this->showLog();

                    $this->lblImport->Visible = true;
                    $this->btnImport->Enabled = true;
                    $this->objImportProgress->Translated = 0;
                    $this->objImportProgress->Visible = false;
                }
                else {
                    $this->objImportProgress->Translated = NarroProgress::GetProgress($this->objNarroProject->ProjectId, 'import');
                    $this->objImportProgress->MarkAsModified();
                }
                return true;
            }

            chdir(__DOCROOT__ . __SUBDIRECTORY__);

            if (function_exists('proc_open')) {
                if (!file_exists(__PHP_CLI_PATH__))
                    NarroLog::LogMessage(3, 'Please set __PHP_CLI_PATH__ in includes/configuration.inc.php to a valid path to a php executable');
                $strCommand = sprintf(
                    __PHP_CLI_PATH__ . ' ' .
                        escapeshellarg('includes/narro/importer/importer.php').
                        ' --import --minloglevel %d --project %d --user %d ' .
                        (($this->chkApprove->Checked)?'--approve ':'') .
                        (($this->chkCheckEqual->Checked)?'--check-equal ':'') .
                        (($this->chkOnlySuggestions->Checked || !NarroApp::HasPermission('Can manage project'))?'--only-suggestions --do-not-deactivate-files --do-not-deactivate-contexts ':'') .
                        ' --source-lang en-US --target-lang %s',
                    $this->lstLogLevel->SelectedValue,
                    $this->objNarroProject->ProjectId,
                    0,
                    NarroApp::$Language->LanguageCode
                );
                $strProcLogFile = __TMP_PATH__ . '/' . $this->objNarroProject->ProjectId . '-' . NarroApp::$Language->LanguageCode . '-import-process.log';
                if (file_exists($strProcLogFile) && is_writable($strProcLogFile))
                    unlink($strProcLogFile);

                $intRetVal = proc_close(proc_open("$strCommand &", array(2 => array("file", $strProcLogFile, 'a')), $foo));

                if (file_exists($strProcLogFile) && filesize($strProcLogFile))
                    NarroLog::LogMessage(3, sprintf('There are messages from the background process: %s', file_get_contents($strProcLogFile)));

            } elseif ($strParameter != 1) {
                set_time_limit(0);

                $objNarroImporter = new NarroProjectImporter();

                NarroLog::$blnEchoOutput = false;

                /**
                 * Get boolean options
                 */
                $objNarroImporter->DeactivateFiles = NarroApp::HasPermission('Can manage project');
                $objNarroImporter->DeactivateContexts = NarroApp::HasPermission('Can manage project');
                $objNarroImporter->CheckEqual = $this->chkCheckEqual->Checked;
                $objNarroImporter->Approve = $this->chkApprove->Checked;

                if (!NarroApp::HasPermission('Can manage project'))
                    $objNarroImporter->OnlySuggestions = true;
                else
                    $objNarroImporter->OnlySuggestions = $this->chkOnlySuggestions->Checked;

                $objNarroImporter->MinLogLevel = $this->lstLogLevel->SelectedValue;
                $objNarroImporter->Project = $this->objNarroProject;
                $objNarroImporter->User = NarroUser::LoadAnonymousUser();
                $objNarroImporter->TargetLanguage = NarroApp::$Language;
                $objNarroImporter->SourceLanguage = NarroLanguage::LoadByLanguageCode('en-US');
                $objNarroImporter->TranslationPath = $strImportPath . '/' . $objNarroImporter->TargetLanguage->LanguageCode;
                $objNarroImporter->TemplatePath = $strImportPath . '/' . $objNarroImporter->SourceLanguage->LanguageCode;

                NarroLog::$intMinLogLevel = $this->lstLogLevel->SelectedValue;

                NarroLog::LogMessage(3, sprintf('Target language is %s', $objNarroImporter->TargetLanguage->LanguageName));
                NarroLog::LogMessage(3, sprintf('Source language is %s', $objNarroImporter->SourceLanguage->LanguageName));
                NarroLog::LogMessage(3, sprintf('Importing using templates from %s', $strImportPath . '/' . $objNarroImporter->SourceLanguage->LanguageCode));

                try {
                    $objNarroImporter->ImportProject();
                }
                catch (Exception $objEx) {
                    NarroLog::LogMessage(3, sprintf('An error occured during import: %s', $objEx->getMessage()));
                    $objNarroImporter->CleanImportDirectory();
                    $this->lblImport->Text = t('Import failed.');
                    $this->showLog();
                }

                $this->showLog();

                $objNarroImporter->CleanImportDirectory();
                NarroLog::LogMessage(3, var_export(NarroImportStatistics::$arrStatistics, true));

                $this->btnImport_Click($strFormId, $strControlId, 1);
            }
        }

        public function btnExport_Click($strFormId, $strControlId, $strParameter) {
            if (!NarroApp::HasPermissionForThisLang('Can manage project', $this->objNarroProject->ProjectId))
                return false;

            $strExportPath = __DOCROOT__ . __SUBDIRECTORY__ . __IMPORT_PATH__ . '/' . $this->objNarroProject->ProjectId;
            NarroLog::SetLogFile($this->objNarroProject->ProjectId . '-' . NarroApp::$Language->LanguageCode . '-export.log');

            if ($strParameter != 1) {
                $this->btnExport->Enabled = false;
                $this->pnlLogViewer->Text = '';
                $this->lblExport->Text = '';

                /**
                 * refresh the page to show the progress. keep the interval id as a global variable (no var before it) to clear it afterwards
                 */
                if (function_exists('proc_open') && NarroApp::$UseAjax) {
                    $this->objExportProgress->Visible = true;
                    NarroApp::ExecuteJavaScript(sprintf('lastExportId = setInterval("qcodo.postAjax(\'%s\', \'%s\', \'QClickEvent\', \'1\');", %d);', $strFormId, $strControlId, 2000));
                }
            }
            else {
                if (!NarroUtils::IsProcessRunning('export', $this->objNarroProject->ProjectId)) {
                    $this->lblExport->Text = t('Export finished.');
                    NarroApp::ExecuteJavaScript('if (typeof lastExportId != \'undefined\') clearInterval(lastExportId)');

                    $this->lblExport->Visible = true;
                    $this->btnExport->Enabled = true;
                    $this->objExportProgress->Visible = false;

                    /**
                     * Create an archive
                     */
                    if (file_exists($strExportPath . '/' . NarroApp::$Language->LanguageCode)) {
                        $strExportArchive = $this->objNarroProject->ProjectId . '-' . NarroApp::$Language->LanguageCode . '.' . $this->lstExportArchiveType->SelectedValue;
                        $strCurDir = getcwd();
                        chdir($strExportPath);

                        if (file_exists($strExportPath . '/' . $strExportArchive))
                            unlink($strExportPath . '/' . $strExportArchive);

                        $arrFiles = array_merge(
                            NarroUtils::ListDirectory($strExportPath . '/' . NarroApp::$Language->LanguageCode, null, '/CVS|\.svn|\.hg|\.git/', $strExportPath . '/', true)
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
                                if (file_exists($strExportArchive))
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
                    $this->objExportProgress->Translated = NarroProgress::GetProgress($this->objNarroProject->ProjectId, 'export');
                    $this->objExportProgress->MarkAsModified();
                }

                return true;
            }

            chdir(__DOCROOT__ . __SUBDIRECTORY__);

            if (function_exists('proc_open')) {
                if (!file_exists(__PHP_CLI_PATH__))
                    NarroLog::LogMessage(3, 'Please set __PHP_CLI_PATH__ in includes/configuration.inc.php to a valid path to a php executable');

                $strCommand = sprintf(
                    __PHP_CLI_PATH__ . ' ' .
                        escapeshellarg('includes/narro/importer/importer.php').
                        ' --export --minloglevel %d --project %d --user %d ' .
                        (($this->chkApprove->Checked)?'--approve ':'') .
                        (($this->chkCopyUnhandledFiles->Checked)?'--copy-unhandled-files ':'') .
                        (($this->chkOnlySuggestions->Checked)?'--only-suggestions --do-not-deactivate-files --do-not-deactivate-contexts ':'') .
                        ' --check-equal --source-lang en-US --target-lang %s --exported-suggestion %d',
                    $this->lstLogLevel->SelectedValue,
                    $this->objNarroProject->ProjectId,
                    NarroApp::GetUserId(),
                    NarroApp::$Language->LanguageCode,
                    $this->lstExportedSuggestion->SelectedValue
                );

                $strProcLogFile = __TMP_PATH__ . '/' . $this->objNarroProject->ProjectId . '-' . NarroApp::$Language->LanguageCode . '-export-process.log';
                if (file_exists($strProcLogFile) && is_writable($strProcLogFile))
                    unlink($strProcLogFile);

                $intRetVal = proc_close(proc_open("$strCommand &", array(2 => array("file", $strProcLogFile, 'a')), $foo));

                if (file_exists($strProcLogFile) && filesize($strProcLogFile))
                    NarroLog::LogMessage(3, sprintf('There are messages from the background process: %s', file_get_contents($strProcLogFile)));
            }
            elseif($strParameter != 1) {
                set_time_limit(0);

                $objNarroImporter = new NarroProjectImporter();
                NarroLog::$blnEchoOutput = false;
                $objNarroImporter->MinLogLevel = $this->lstLogLevel->SelectedValue;
                NarroLog::$intMinLogLevel = $this->lstLogLevel->SelectedValue;
                $objNarroImporter->ExportedSuggestion = $this->lstExportedSuggestion->SelectedValue;
                $objNarroImporter->TargetLanguage = NarroApp::$Language;
                $objNarroImporter->SourceLanguage = NarroLanguage::LoadByLanguageCode('en-US');
                $objNarroImporter->Project = $this->objNarroProject;
                $objNarroImporter->User = NarroApp::$User;
                $objNarroImporter->TranslationPath = $strExportPath . '/' . NarroApp::$Language->LanguageCode;
                $objNarroImporter->TemplatePath = $strExportPath . '/en-US';
                $objNarroImporter->ExportedSuggestion = $this->lstExportedSuggestion->SelectedValue;
                $objNarroImporter->CopyUnhandledFiles = $this->chkCopyUnhandledFiles->Checked;

                NarroLog::LogMessage(3, sprintf('Source language is %s', $objNarroImporter->SourceLanguage->LanguageName));
                NarroLog::LogMessage(3, sprintf('Target language is %s', $objNarroImporter->TargetLanguage->LanguageName));
                NarroLog::LogMessage(3, sprintf('Exporting using templates from %s', $strExportPath . '/en-US'));

                try {
                    $objNarroImporter->ExportProject();
                }
                catch (Exception $objEx) {
                    NarroLog::LogMessage(3, sprintf('An error occured during export: %s', $objEx->getMessage()));
                    $objNarroImporter->CleanExportDirectory();
                    $this->lblExport->Text = t('Export failed.');
                    $this->showLog();
                }

                $objNarroImporter->CleanExportDirectory();
                NarroLog::LogMessage(3, var_export(NarroImportStatistics::$arrStatistics, true));
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
            if (!NarroApp::HasPermissionForThisLang('Can manage project', $this->objNarroProject->ProjectId))
                NarroApp::Redirect(NarroLink::ProjectList());

            $objDatabase = NarroApp::$Database[1];

            $strQuery = sprintf("DELETE FROM narro_context_comment USING narro_context_comment LEFT JOIN narro_context ON narro_context_comment.context_id=narro_context.context_id WHERE narro_context_comment.language_id=%d AND narro_context.project_id=%d", NarroApp::GetLanguageId(), $this->objNarroProject->ProjectId);
            try {
                $objDatabase->NonQuery($strQuery);
            }catch (Exception $objEx) {
                throw new Exception(sprintf(t('Error while executing sql query in file %s, line %d: %s'), __FILE__, __LINE__ - 4, $objEx->getMessage()));
            }

            $strQuery = sprintf("DELETE FROM narro_context_info USING narro_context_info LEFT JOIN narro_context ON narro_context_info.context_id=narro_context.context_id WHERE narro_context_info.language_id=%d AND narro_context.project_id=%d", NarroApp::GetLanguageId(), $this->objNarroProject->ProjectId);
            try {
                $objDatabase->NonQuery($strQuery);
            }catch (Exception $objEx) {
                throw new Exception(sprintf(t('Error while executing sql query in file %s, line %d: %s'), __FILE__, __LINE__ - 4, $objEx->getMessage()));
            }
        }

        protected function btnDelProjectContexts_Click($strFormId, $strControlId, $strParameter) {
            if (!NarroApp::HasPermissionForThisLang('Can delete project', $this->objNarroProject->ProjectId))
                NarroApp::Redirect(NarroLink::ProjectList());

            $objDatabase = NarroApp::$Database[1];

            $strQuery = sprintf("DELETE FROM `narro_context` WHERE project_id = %d", $this->objNarroProject->ProjectId);
            try {
                $objDatabase->NonQuery($strQuery);
            }catch (Exception $objEx) {
                throw new Exception(sprintf(t('Error while executing sql query in file %s, line %d: %s'), __FILE__, __LINE__ - 4, $objEx->getMessage()));
            }
        }

        protected function btnDelProjectFiles_Click($strFormId, $strControlId, $strParameter) {
            if (!NarroApp::HasPermissionForThisLang('Can delete project', $this->objNarroProject->ProjectId))
                NarroApp::Redirect(NarroLink::ProjectList());

            $objDatabase = NarroApp::$Database[1];

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

        protected function btnClearLocaleDirectory_Click($strFormId, $strControlId, $strParameter) {
            NarroLog::LogMessage(3, 'Clearing locale directory...');

            if (!NarroApp::HasPermissionForThisLang('Can manage project', $this->objNarroProject->ProjectId))
                NarroApp::Redirect(NarroLink::ProjectList());
            try {
                NarroUtils::RecursiveDelete(__DOCROOT__ . __SUBDIRECTORY__ . __IMPORT_PATH__ . '/' . $this->objNarroProject->ProjectId . '/' . NarroApp::$Language->LanguageCode . '/*');
            } catch(Exception $objEx) {
                NarroLog::LogMessage(3, $objEx->getMessage());
            }

            NarroLog::LogMessage(3, 'Done!');

            $this->showLog();
        }
    }


    NarroProjectManageForm::Run('NarroProjectManageForm', 'templates/narro_project_manage.tpl.php');
?>
