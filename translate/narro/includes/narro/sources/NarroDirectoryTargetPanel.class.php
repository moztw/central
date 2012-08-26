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

    class NarroDirectoryTargetPanel extends QPanel {
        protected $objProject;
        public $objExportProgress;

        public $pnlLogViewer;
        public $lblExport;
        public $btnKillProcess;

        public $chkCleanDirectory;
        public $lstExportSuggestionType;
        public $txtAuthor;

        public $btnExport;

        public function __construct(NarroProject $objProject, NarroLanguage $objLanguage, $objParentObject, $strControlId = null) {
            // Call the Parent
            try {
                parent::__construct($objParentObject, $strControlId);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            $this->strTemplate = dirname(__FILE__) . '/' . __CLASS__ . '.tpl.php';

            $this->objProject = $objProject;

            $this->pnlLogViewer = new NarroLogViewerPanel($this);

            $this->lblExport = new QLabel($this);
            $this->lblExport->HtmlEntities = false;

            $this->chkCleanDirectory = new QCheckBox($this);
            $this->chkCleanDirectory->Name = t('Clean export directory before exporting');

            $this->lstExportSuggestionType = new QListBox($this);
            $this->lstExportSuggestionType->Name = t('Export translations using') . ':';
            $this->lstExportSuggestionType->AddItem(t('Approved suggestion'), 1);
            $this->lstExportSuggestionType->AddItem(t('Approved, then most voted suggestion'), 2);
            $this->lstExportSuggestionType->AddItem(t('Approved, then most recent suggestion'), 3);
            $this->lstExportSuggestionType->AddItem(t('Approved, then most voted and then most recent suggestion'), 4);
            $this->lstExportSuggestionType->AddItem(t('Approved, then my suggestion'), 5);
            $this->lstExportSuggestionType->AddItem(t('Approved, then the most recent suggestion from selected users'), 6);
            $this->lstExportSuggestionType->AddAction(new QChangeEvent(), new QAjaxControlAction($this, 'lstExportSuggestionType_Change'));
            
            $this->txtAuthor = new QTextBox($this);
            $this->txtAuthor->Name = 'Author(s)';
            $this->txtAuthor->Instructions = 'Type author names, separated by comma';
            $this->txtAuthor->Display = false;

            $this->objExportProgress = new NarroTranslationProgressBar($this);
            $this->objExportProgress->Total = 100;
            $this->objExportProgress->Visible = false;

            $this->btnKillProcess = new QButton($this);
            $this->btnKillProcess->Text = 'Kill process';
            if (QApplication::$UseAjax)
                $this->btnKillProcess->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnKillProcess_Click'));
            else
                $this->btnKillProcess->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnKillProcess_Click'));

            $this->btnExport = new QButton($this);
            $this->btnExport->Text = t('Export');
            if (QApplication::$UseAjax && QApplication::$User->GetPreferenceValueByName('Launch imports and exports in background') == 'Yes')
                $this->btnExport->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnExport_Click'));
            else {
                $this->btnExport->ActionParameter = 2;
                $this->btnExport->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnExport_Click'));
            }

            if (NarroUtils::IsProcessRunning('export', $this->objProject->ProjectId)) {
                $this->btnExport->Visible = false;
                $this->objExportProgress->Visible = true;
                $this->objExportProgress->Translated = NarroProgress::GetProgress($this->objProject->ProjectId, 'export');
                QApplication::ExecuteJavaScript(sprintf('lastExportId = setInterval("qc.pA(\'%s\', \'%s\', \'QClickEvent\', \'1\');", %d);', $this->Form->FormId, $this->btnExport->ControlId, 2000));
            }

            $this->btnKillProcess->Visible = QApplication::HasPermission('Administrator', $this->objProject->ProjectId, QApplication::$TargetLanguage->LanguageCode) && !$this->btnExport->Visible;
        }
        
        public function lstExportSuggestionType_Change() {
            $this->txtAuthor->Display = ($this->lstExportSuggestionType->SelectedValue == 6);
        }

        public function btnExport_Click($strFormId, $strControlId, $strParameter) {
            if (!QApplication::HasPermissionForThisLang('Can export project', $this->objProject->ProjectId))
                return false;

            $strProcLogFile = __TMP_PATH__ . '/' . $this->objProject->ProjectId . '-' . QApplication::$TargetLanguage->LanguageCode . '-export-process.log';

            if ($strParameter == 1) {
                if (NarroUtils::IsProcessRunning('export', $this->objProject->ProjectId)) {
                    $this->objExportProgress->Translated = NarroProgress::GetProgress($this->objProject->ProjectId, 'export');
                    $this->objExportProgress->MarkAsModified();
                }
                else {

                    $this->lblExport->Text = t('Export finished.');

                    if (QApplication::$UseAjax)
                        QApplication::ExecuteJavaScript('if (typeof lastExportId != \'undefined\') clearInterval(lastExportId)');

                    if (file_exists($strProcLogFile) && filesize($strProcLogFile))
                        NarroLogger::LogInfo(sprintf('There are messages from the background process: %s', file_get_contents($strProcLogFile)));

                    $this->lblExport->Visible = true;
                    $this->btnExport->Visible = true;
                    $this->btnKillProcess->Visible = false;
                    $this->objExportProgress->Translated = 0;
                    $this->objExportProgress->Visible = false;

                    QApplication::$PluginHandler->DisplayExportMessage($this->objProject);

                    if (is_array(QApplication::$PluginHandler->PluginReturnValues))
                        foreach(QApplication::$PluginHandler->PluginReturnValues as $strPluginName=>$mixReturnValue) {
                            if (count($mixReturnValue) == 2 && $mixReturnValue[0] instanceof NarroProject && is_string($mixReturnValue[1]) && $mixReturnValue[1] != '') {
                                $this->lblExport->Text .= sprintf('<br /><span class="info"><b>%s</b>: %s</span>', $strPluginName, nl2br($mixReturnValue[1]));
                            }
                        }

                }
                $this->pnlLogViewer->MarkAsModified();
            }
            elseif ($strParameter == 2) {
                $this->pnlLogViewer->DateStart = QDateTime::Now();
                $this->pnlLogViewer->ProjectId = $this->objProject->ProjectId;
                $this->pnlLogViewer->LanguageId = QApplication::GetLanguageId();
                
                NarroProgress::ClearProgressFileName($this->objProject->ProjectId, 'import');

                set_time_limit(0);

                if ($this->chkCleanDirectory->Checked)
                    NarroUtils::RecursiveDelete($this->objProject->DefaultTranslationPath .'/*');

                $objNarroImporter = new NarroProjectImporter();

                /**
                 * Get boolean options
                 */
                $objNarroImporter->ExportedSuggestion = $this->lstExportSuggestionType->SelectedValue;
                $objNarroImporter->Project = $this->objProject;
                $objNarroImporter->ExportAuthorList = $this->txtAuthor->Text;
                $objNarroImporter->User = QApplication::$User;
                $objNarroImporter->TargetLanguage = QApplication::$TargetLanguage;
                $objNarroImporter->SourceLanguage = NarroLanguage::LoadByLanguageCode(NarroLanguage::SOURCE_LANGUAGE_CODE);
                try {
                    $objNarroImporter->TranslationPath = $this->objProject->DefaultTranslationPath;
                    $objNarroImporter->TemplatePath = $this->objProject->DefaultTemplatePath;
                }
                catch (Exception $objEx) {
                    NarroLogger::LogError(sprintf('An error occurred during export: %s', $objEx->getMessage()));
                    $this->lblExport->Text = t('Export failed.');
                }

                try {
                    $objNarroImporter->ExportProject();
                }
                catch (Exception $objEx) {
                    NarroLogger::LogError(sprintf('An error occurred during export: %s', $objEx->getMessage()));
                    $this->lblExport->Text = t('Export failed.');
                }

                $this->lblExport->Visible = true;
                $this->btnExport->Visible = true;
                $this->btnKillProcess->Visible = false;
                $this->objExportProgress->Visible = false;

                $this->pnlLogViewer->MarkAsModified();

            }
            else {
                $this->pnlLogViewer->DateStart = QDateTime::Now();
                $this->pnlLogViewer->ProjectId = $this->objProject->ProjectId;
                $this->pnlLogViewer->LanguageId = QApplication::GetLanguageId();
    
                    
                if ($this->chkCleanDirectory->Checked)
                    NarroUtils::RecursiveDelete($this->objProject->DefaultTranslationPath .'/*');

                $this->btnExport->Visible = false;
                $this->btnKillProcess->Visible = $this->btnKillProcess->Visible = QApplication::HasPermission('Administrator',$this->objProject,QApplication::$TargetLanguage->LanguageCode);
                $this->objExportProgress->Visible = true;
                $this->objExportProgress->Translated = 0;
                $this->lblExport->Text = '';
                try {
                    $strCommand = sprintf(
                        '%s %s --export --project %d --user %d --template-lang %s --translation-lang %s --template-directory %s --translation-directory %s --exported-suggestion %d --export-author-list %s',
                        __PHP_CLI_PATH__,
                        escapeshellarg(sprintf('%s/includes/narro/importer/narro-cli.php', __DOCROOT__ . __SUBDIRECTORY__)),
                        (int) $this->objProject->ProjectId,
                        (int) QApplication::$User->UserId,
                        escapeshellarg(NarroLanguage::SOURCE_LANGUAGE_CODE),
                        escapeshellarg(QApplication::$TargetLanguage->LanguageCode),
                        escapeshellarg($this->objProject->DefaultTemplatePath),
                        escapeshellarg($this->objProject->DefaultTranslationPath),
                        (int) $this->lstExportSuggestionType->SelectedValue,
                        escapeshellarg($this->txtAuthor->Text)
                    );
                }
                catch (Exception $objEx) {
                    NarroLogger::LogError(sprintf('An error occurred during export: %s', $objEx->getMessage()));
                    $this->lblExport->Text = t('Export failed.');

                    $this->lblExport->Visible = true;
                    $this->btnExport->Visible = true;
                    $this->btnKillProcess->Visible = false;
                    $this->objExportProgress->Translated = 0;
                    $this->objExportProgress->Visible = false;

                    $this->pnlLogViewer->MarkAsModified();
                    return false;
                }


                if (file_exists($strProcLogFile) && is_writable($strProcLogFile))
                    unlink($strProcLogFile);

                $mixProcess = proc_open("$strCommand &", array(2 => array("file", $strProcLogFile, 'a')), $foo);

                if ($mixProcess) {
                    if (QApplication::$UseAjax)
                        QApplication::ExecuteJavaScript(sprintf('lastExportId = setInterval("qc.pA(\'%s\', \'%s\', \'QClickEvent\', \'1\')", %d);', $strFormId, $strControlId, 2000));
                    else
                        $this->btnExport_Click($strFormId, $strControlId, 1);
                }
                else {
                    $this->objExportProgress->Visible = false;
                    NarroLogger::LogError('Failed to launch a background process, there will be no progress displayed, and it might take a while, please wait for more messages');
                    $this->pnlLogViewer->MarkAsModified();
                    /**
                     * try exporting without launching a background process
                     */
                    if (QApplication::$UseAjax)
                        QApplication::ExecuteJavaScript(sprintf('lastExportId = setTimeout("qc.pA(\'%s\', \'%s\', \'QClickEvent\', \'2\')", %d);', $strFormId, $strControlId, 2000));
                    else
                        $this->btnExport_Click($strFormId, $strControlId, 2);
                }
            }
        }

        public function btnKillProcess_Click($strFormId, $strControlId, $strParameter) {
            $strProcLogFile = __TMP_PATH__ . '/' . $this->objProject->ProjectId . '-' . QApplication::$TargetLanguage->LanguageCode . '-export-process.log';
            $strProcPidFile = __TMP_PATH__ . '/' . $this->objProject->ProjectId . '-' . QApplication::$TargetLanguage->LanguageCode . '-export-process.pid';

            if (!file_exists($strProcPidFile)) {
                NarroLogger::LogError('Could not find a pid file for the background process.');
                $this->pnlLogViewer->MarkAsModified();
                return false;
            }

            $intPid = file_get_contents($strProcPidFile);

            if (is_numeric(trim($intPid))) {

                $mixProcess = proc_open(sprintf('kill -9 %d', $intPid), array(2 => array("file", $strProcLogFile, 'a')), $foo);

                if ($mixProcess) {
                    proc_close($mixProcess);
                    NarroLogger::LogInfo('Process killed');
                }
                else {
                    NarroLogger::LogInfo('Failed to kill process');
                }

                if (file_exists($strProcLogFile) && filesize($strProcLogFile))
                    NarroLogger::LogInfo(sprintf('There are messages from the background process: %s', file_get_contents($strProcLogFile)));

                $this->pnlLogViewer->MarkAsModified();
            }

        }

    }
