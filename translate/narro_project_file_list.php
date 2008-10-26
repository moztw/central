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

    class NarroProjectFileListForm extends QForm {
        protected $dtgNarroFile;

        // DataGrid Columns
        protected $colFileName;
        protected $colPercentTranslated;
        protected $colActions;

        protected $objNarroProject;
        protected $objParentFile;

        protected $chkShowHierarchy;
        protected $chkShowFolders;

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

            $intParentId = QApplication::QueryString('pf');

            if ($intParentId)
                $this->objParentFile = NarroFile::Load($intParentId);

        }

        protected function Form_Create() {
            parent::Form_Create();
            
            $this->SetupNarroProject();

            // Setup DataGrid Columns
            $this->colFileName = new QDataGridColumn(t('File name'), '<?= $_FORM->dtgNarroFile_FileNameColumn_Render($_ITEM) ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroFile()->FileName), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroFile()->FileName, false)));
            $this->colFileName->HtmlEntities = false;

            $this->colPercentTranslated = new QDataGridColumn(t('Progress'), '<?= $_FORM->dtgNarroFile_PercentTranslated_Render($_ITEM); ?>');
            $this->colPercentTranslated->HtmlEntities = false;
            $this->colPercentTranslated->Width = 160;

            $this->colActions = new QDataGridColumn(t('Actions'), '<?= $_FORM->dtgNarroFile_ActionsColumn_Render($_ITEM) ?>');
            $this->colActions->HtmlEntities = false;

            // Setup DataGrid
            $this->dtgNarroFile = new QDataGrid($this);

            // Datagrid Paginator
            $this->dtgNarroFile->Paginator = new QPaginator($this->dtgNarroFile);
            $this->dtgNarroFile->ItemsPerPage = QApplication::$objUser->getPreferenceValueByName('Items per page');
            $this->dtgNarroFile->PaginatorAlternate = new QPaginator($this->dtgNarroFile);
            $this->dtgNarroFile->SortColumnIndex = 0;

            // Specify Whether or Not to Refresh using Ajax
            $this->dtgNarroFile->UseAjax = false;

            // Specify the local databind method this datagrid will use
            $this->dtgNarroFile->SetDataBinder('dtgNarroFile_Bind');

            $this->dtgNarroFile->AddColumn($this->colFileName);
            $this->dtgNarroFile->AddColumn($this->colPercentTranslated);
            $this->dtgNarroFile->AddColumn($this->colActions);

            $this->chkShowHierarchy = new QCheckBox($this);
            $this->chkShowHierarchy->Checked = true;
            $this->chkShowHierarchy->AddAction(new QClickEvent(), new QServerAction('dtgNarroFile_Bind'));

            $this->chkShowFolders = new QCheckBox($this);
            $this->chkShowFolders->Checked = true;
            $this->chkShowFolders->AddAction(new QClickEvent(), new QServerAction('dtgNarroFile_Bind'));

        }

        public function dtgNarroFile_PercentTranslated_Render(NarroFile $objNarroFile) {
            if ($objNarroFile->TypeId != NarroFileType::Folder) {
                $sOutput = '';

                $objDatabase = QApplication::$Database[1];

                $strQuery = sprintf('SELECT COUNT(c.context_id) AS cnt FROM `narro_context` c WHERE c.project_id=%d AND c.active=1 AND c.file_id=%d', $objNarroFile->ProjectId, $objNarroFile->FileId);

                // Perform the Query
                $objDbResult = $objDatabase->Query($strQuery);

                if ($objDbResult) {
                    $mixRow = $objDbResult->FetchArray();
                    $intTotalTexts = $mixRow['cnt'];

                    $strQuery = sprintf('SELECT COUNT(c.context_id) AS cnt FROM `narro_context` c, narro_context_info ci WHERE c.context_id=ci.context_id AND c.project_id = %d AND ci.language_id=%d AND ci.valid_suggestion_id IS NULL AND ci.has_suggestions=1 AND c.active=1 AND c.file_id=%d', $objNarroFile->ProjectId, QApplication::$Language->LanguageId, $objNarroFile->FileId);

                    // Perform the Query
                    $objDbResult = $objDatabase->Query($strQuery);

                    if ($objDbResult) {
                        $mixRow = $objDbResult->FetchArray();
                        $intTranslatedTexts = $mixRow['cnt'];
                    }

                    $strQuery = sprintf('SELECT COUNT(c.context_id) AS cnt FROM `narro_context` c, narro_context_info ci WHERE c.context_id=ci.context_id AND c.project_id = %d AND ci.language_id=%d AND ci.valid_suggestion_id IS NOT NULL AND c.active=1 AND c.file_id=%d', $objNarroFile->ProjectId, QApplication::$Language->LanguageId, $objNarroFile->FileId);
                    // Perform the Query
                    $objDbResult = $objDatabase->Query($strQuery);

                    if ($objDbResult) {
                        $mixRow = $objDbResult->FetchArray();
                        $intValidatedTexts = $mixRow['cnt'];
                    }

                    $objProgressBar = $this->GetControl('progressbar' . $objNarroFile->FileId);
                    if (!$objProgressBar instanceof NarroTranslationProgressBar)
                        $objProgressBar = new NarroTranslationProgressBar($this->dtgNarroFile, 'progressbar' . $objNarroFile->FileId);

                    $objProgressBar->Total = $intTotalTexts;
                    $objProgressBar->Translated = $intValidatedTexts;
                    $objProgressBar->Fuzzy = $intTranslatedTexts;

                    $sOutput .= $objProgressBar->Render(false);

                }
                return NarroLink::FileTextList($objNarroFile->ProjectId, $objNarroFile->FileId, 1, 1, '', $sOutput);
            }
            else
                return '';

        }

        public function dtgNarroFile_FileNameColumn_Render(NarroFile $objNarroFile) {
            if ($objNarroFile->TypeId == NarroFileType::Folder)
                return sprintf('<img src="%s" style="vertical-align:middle" /> %s',                
                    __IMAGE_ASSETS__ . '/folder.png',
                    NarroLink::ProjectFileList(
                        $this->objNarroProject->ProjectId,
                        $objNarroFile->FileId,
                        $objNarroFile->FileName
                    )
                );
            else {
                switch($objNarroFile->TypeId) {
                    case NarroFileType::MozillaDtd:
                            $strIcon = 'dtd_file.gif';
                            break;
                    case NarroFileType::MozillaInc:
                            $strIcon = 'inc_file.gif';
                            break;
                    case NarroFileType::MozillaIni:
                            $strIcon = 'ini_file.gif';
                            break;
                    default:
                            $strIcon = 'dtd_file.gif';
                }
                return sprintf('<img src="%s" style="vertical-align:middle" /> %s',
                    __IMAGE_ASSETS__ . '/' . $strIcon,
                    NarroLink::FileTextList(
                        $objNarroFile->ProjectId,
                        $objNarroFile->FileId,
                        1,
                        1,
                        '',
                        $objNarroFile->FileName
                    )
                );
            }
        }

        public function dtgNarroFile_ActionsColumn_Render(NarroFile $objNarroFile) {
            if ($objNarroFile->TypeId == NarroFileType::Folder) {
                return '';
            }
            else {
                /**
                 * @todo remove hard coded value en-US
                 */
                $strTemplateFile = __DOCROOT__ . __SUBDIRECTORY__ . __IMPORT_PATH__ . '/' . $this->objNarroProject->ProjectId . '/en-US' . $objNarroFile->FilePath;

                if (!file_exists($strTemplateFile)) return '';

                if (!$objExportButton = $this->GetControl('btnExport' . $objNarroFile->FileId)) {
                    $objExportButton = new QButton($this->dtgNarroFile, 'btnExport' . $objNarroFile->FileId);
                    $objExportButton->Text = t('Export');
                    $objExportButton->ActionParameter = $objNarroFile->FileId;
                    $objExportButton->AddAction(new QClickEvent(), new QServerAction('btnExport_Click'));
                    $objExportButton->Visible = QApplication::$objUser->hasPermission('Can export file', $objNarroFile->ProjectId, QApplication::$Language->LanguageId);
                }

                if (!$objImportButton = $this->GetControl('btnImport' . $objNarroFile->FileId)) {
                    $objImportButton = new QButton($this->dtgNarroFile, 'btnImport' . $objNarroFile->FileId);
                    $objImportButton->Text = t('Import');
                    $objImportButton->ActionParameter = $objNarroFile->FileId;
                    $objImportButton->AddAction(new QClickEvent(), new QServerAction('btnImport_Click'));
                    $objImportButton->Visible = QApplication::$objUser->hasPermission('Can import file', $objNarroFile->ProjectId, QApplication::$Language->LanguageId);
                }

                if (!$objImportFile = $this->GetControl('fileImport' . $objNarroFile->FileId)) {
                    $objImportFile = new QFileControl($this->dtgNarroFile, 'fileImport' . $objNarroFile->FileId);
                    $objImportFile->Visible = QApplication::$objUser->hasPermission('Can import file', $objNarroFile->ProjectId, QApplication::$Language->LanguageId);
                }

                if (!$objExportFile = $this->GetControl('fileExport' . $objNarroFile->FileId)) {
                    $objExportFile = new QFileControl($this->dtgNarroFile, 'fileExport' . $objNarroFile->FileId);
                    $objExportFile->Visible = QApplication::$objUser->hasPermission('Can export file', $objNarroFile->ProjectId, QApplication::$Language->LanguageId);
                }

                if (QApplication::$objUser->hasPermission('Can import file', $objNarroFile->ProjectId, QApplication::$Language->LanguageId))
                    $strImportAction = t('File to import') . ': ' . $objImportFile->Render(false) . $objImportButton->Render(false);

                if (QApplication::$objUser->hasPermission('Can export file', $objNarroFile->ProjectId, QApplication::$Language->LanguageId))
                    $strExportAction = t('Model to use') . ': ' . $objExportFile->Render(false) . $objExportButton->Render(false);


                return $strImportAction . '<br />' . $strExportAction;
            }
        }

        protected function dtgNarroFile_Bind() {
            // Because we want to enable pagination AND sorting, we need to setup the $objClauses array to send to LoadAll()

            $objCommonCondition = QQ::AndCondition(
                QQ::Equal(QQN::NarroFile()->Active, 1),
                QQ::Equal(QQN::NarroFile()->ProjectId, $this->objNarroProject->ProjectId)
            );

            // Remember!  We need to first set the TotalItemCount, which will affect the calcuation of LimitClause below
            if (!$this->chkShowHierarchy->Checked) {
                if ($this->chkShowFolders->Checked)
                    $this->dtgNarroFile->TotalItemCount = NarroFile::QueryCount($objCommonCondition);
                else
                    $this->dtgNarroFile->TotalItemCount = NarroFile::QueryCount(QQ::AndCondition($objCommonCondition, QQ::NotEqual(QQN::NarroFile()->TypeId, NarroFileType::Folder) ));
            }
            elseif ($this->objParentFile) {
                if ($this->chkShowFolders->Checked)
                    $this->dtgNarroFile->TotalItemCount = NarroFile::QueryCount(QQ::AndCondition($objCommonCondition, QQ::Equal(QQN::NarroFile()->ParentId, $this->objParentFile->FileId)));
                else
                    $this->dtgNarroFile->TotalItemCount = NarroFile::QueryCount(QQ::AndCondition($objCommonCondition, QQ::Equal(QQN::NarroFile()->ParentId, $this->objParentFile->FileId), QQ::NotEqual(QQN::NarroFile()->TypeId, NarroFileType::Folder)));
            }
            else {
                if ($this->chkShowFolders->Checked)
                    $this->dtgNarroFile->TotalItemCount = NarroFile::QueryCount(QQ::AndCondition($objCommonCondition, QQ::IsNull(QQN::NarroFile()->ParentId)));
                else
                    $this->dtgNarroFile->TotalItemCount = NarroFile::QueryCount(QQ::AndCondition($objCommonCondition, QQ::IsNull(QQN::NarroFile()->ParentId), QQ::NotEqual(QQN::NarroFile()->TypeId, NarroFileType::Folder)));
            }

            // Setup the $objClauses Array
            $objClauses = array();

            // If a column is selected to be sorted, and if that column has a OrderByClause set on it, then let's add
            // the OrderByClause to the $objClauses array
            if ($objClause = $this->dtgNarroFile->OrderByClause)
                array_push($objClauses, $objClause);

            // Add the LimitClause information, as well
            if ($objClause = $this->dtgNarroFile->LimitClause)
                array_push($objClauses, $objClause);

            // Set the DataSource to be the array of all NarroFile objects, given the clauses above
            if (!$this->chkShowHierarchy->Checked) {
                if ($this->chkShowFolders->Checked)
                    $this->dtgNarroFile->DataSource = NarroFile::QueryArray($objCommonCondition, $objClauses);
                else
                    $this->dtgNarroFile->DataSource = NarroFile::QueryArray(QQ::AndCondition($objCommonCondition, QQ::NotEqual(QQN::NarroFile()->TypeId, NarroFileType::Folder) ), $objClauses);
            }
            elseif ($this->objParentFile) {
                if ($this->chkShowFolders->Checked)
                    $this->dtgNarroFile->DataSource = NarroFile::QueryArray(QQ::AndCondition($objCommonCondition, QQ::Equal(QQN::NarroFile()->ParentId, $this->objParentFile->FileId)), $objClauses);
                else
                    $this->dtgNarroFile->DataSource = NarroFile::QueryArray(QQ::AndCondition($objCommonCondition, QQ::Equal(QQN::NarroFile()->ParentId, $this->objParentFile->FileId), QQ::NotEqual(QQN::NarroFile()->TypeId, NarroFileType::Folder)), $objClauses);
            }
            else {
                if ($this->chkShowFolders->Checked)
                    $this->dtgNarroFile->DataSource = NarroFile::QueryArray(QQ::AndCondition($objCommonCondition, QQ::IsNull(QQN::NarroFile()->ParentId)), $objClauses);
                else
                    $this->dtgNarroFile->DataSource = NarroFile::QueryArray(QQ::AndCondition($objCommonCondition, QQ::IsNull(QQN::NarroFile()->ParentId), QQ::NotEqual(QQN::NarroFile()->TypeId, NarroFileType::Folder)), $objClauses);
            }

            QApplication::ExecuteJavaScript('highlight_datagrid();');
        }

        protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
            $objNarroFile = NarroFile::Load($strParameter);
            if ($objNarroFile instanceof NarroFile) {
                $objEncodingBox = $this->GetControl('fileenc' . $strParameter);
                $objNarroFile->Encoding = $objEncodingBox->TextValue;
                $objNarroFile->Modified = date('Y-m-d H:i:s');
                $objNarroFile->Created = date('Y-m-d H:i:s');
                $objNarroFile->Save();
            }
        }

        protected function btnExport_Click($strFormId, $strControlId, $strParameter) {
            $objFile = NarroFile::Load($strParameter);
            $objFileControl = $this->GetControl('fileExport' . $strParameter);

            switch($objFile->TypeId) {
                case NarroFileType::MozillaDtd:
                    $objFileImporter = new NarroMozillaDtdFileImporter();
                    break;
                case NarroFileType::MozillaInc:
                    $objFileImporter = new NarroMozillaIncFileImporter();
                    break;
                case NarroFileType::MozillaIni:
                    $objFileImporter = new NarroMozillaIniFileImporter();
                    break;
                case NarroFileType::GettextPo:
                    $objFileImporter = new NarroGettextPoFileImporter();
                    break;
                case NarroFileType::DumbGettextPo:
                    $objFileImporter = new NarroDumbGettextPoFileImporter();
                    break;
                case NarroFileType::Svg:
                    $objFileImporter = new NarroSvgFileImporter();
                    break;
                case NarroFileType::PhpMyAdmin:
                    $objFileImporter = new NarroPhpMyAdminFileImporter();
                    break;
                default:
                    throw new Exception(sprintf(t('Tried to export an unknown file type: %d'), $strParameter));
            }

            $objFileImporter->User = QApplication::$objUser;
            $objFileImporter->Project = $this->objNarroProject;
            $objFileImporter->SourceLanguage = NarroLanguage::LoadByLanguageCode('en-US');
            $objFileImporter->TargetLanguage = QApplication::$Language;
            $objFileImporter->File = $objFile;

            NarroLog::$intMinLogLevel = 3;

            $strTempFileName = tempnam(__TMP_PATH__, QApplication::$Language->LanguageCode);

            if ($objFileControl instanceof QFileControl && file_exists($objFileControl->File)) {
                $objFileImporter->ExportFile($objFileControl->File, $strTempFileName);
                unlink($objFileControl->File);
            }
            else
                $objFileImporter->ExportFile(__DOCROOT__ . __SUBDIRECTORY__ . __IMPORT_PATH__ . '/' . $this->objNarroProject->ProjectId . '/en-US' . $objFile->FilePath, $strTempFileName);

            header(sprintf('Content-Disposition: attachment; filename="%s"', $objFile->FileName));
            readfile($strTempFileName);
            unlink($strTempFileName);
            exit;
        }

        protected function btnImport_Click($strFormId, $strControlId, $strParameter) {
            $objFileControl = $this->GetControl('fileImport' . $strParameter);
            if (!$objFileControl instanceof QFileControl) return false;

            $objFile = NarroFile::Load($strParameter);
            if (!$objFile instanceof NarroFile) return false;

            switch($objFile->TypeId) {
                case NarroFileType::MozillaDtd:
                    $objFileImporter = new NarroMozillaDtdFileImporter();
                    break;
                case NarroFileType::MozillaInc:
                    $objFileImporter = new NarroMozillaIncFileImporter();
                    break;
                case NarroFileType::MozillaIni:
                    $objFileImporter = new NarroMozillaIniFileImporter();
                    break;
                case NarroFileType::GettextPo:
                    $objFileImporter = new NarroGettextPoFileImporter();
                    break;
                case NarroFileType::DumbGettextPo:
                    $objFileImporter = new NarroDumbGettextPoFileImporter();
                    break;
                case NarroFileType::Svg:
                    $objFileImporter = new NarroSvgFileImporter();
                    break;
                case NarroFileType::OpenOfficeSdf:
                    $objFileImporter = new NarroOpenOfficeSdfFileImporter();
                    break;
                case NarroFileType::PhpMyAdmin:
                    $objFileImporter = new NarroPhpMyAdminFileImporter();
                    break;
                default:
                    throw new Exception(sprintf(t('Tried to import an unknown file type: %d'), $strParameter));
            }

            $objFileImporter->User = QApplication::$objUser;
            $objFileImporter->Project = $this->objNarroProject;
            $objFileImporter->SourceLanguage = NarroLanguage::LoadByLanguageCode('en-US');
            $objFileImporter->TargetLanguage = QApplication::$Language;
            $objFileImporter->CheckEqual = true;
            $objFileImporter->File = $objFile;

            $objFileImporter->OnlySuggestions = true;
            $objFileImporter->DeactivateFiles = false;
            $objFileImporter->DeactivateContexts = false;

            NarroLog::$intMinLogLevel = 3;

            $objFileImporter->Validate = QApplication::$objUser->hasPermission('Can validate', $objFile->ProjectId, QApplication::$Language->LanguageId);

            $strTempFileName = tempnam(__TMP_PATH__, QApplication::$Language->LanguageCode);

            $objFileImporter->ImportFile(__DOCROOT__ . __SUBDIRECTORY__ . __IMPORT_PATH__ . '/' . $this->objNarroProject->ProjectId . '/en-US' . $objFile->FilePath, $objFileControl->File);

            /**
             * clear the progress cache
             */
            NarroCache::ClearAllTextsCount($this->objNarroProject->ProjectId, QApplication::$Language->LanguageId);
        }

    }

    NarroProjectFileListForm::Run('NarroProjectFileListForm', 'templates/narro_project_file_list.tpl.php');

?>
