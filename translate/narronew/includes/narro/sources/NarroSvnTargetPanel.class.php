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

    class NarroSvnTargetPanel extends NarroVcsTargetPanel {
        protected $txtRepositoryUrl;
        protected $fileSSHPrivateKey;
        protected $txtUsername;
        protected $txtCommitMessage;
        protected $lblOutput;
        protected $pnlPatchViewer;
        
        protected $btnCommit;
        protected $btnTest;
        protected $strSSHKey;

        public function __construct(NarroProject $objProject, NarroLanguage $objLanguage, $objParentObject, $strControlId = null) {
            parent::__construct($objProject, $objLanguage, $objParentObject, $strControlId);
            
            NarroProject::RegisterPreference('SVN commit path', false, 0, 'text', 'The url to commit this project to SVN.', '');
            NarroProject::RegisterPreference('Username for SVN', false, 0, 'text', '', '');
            
            $this->txtRepositoryUrl = new QTextBox($this);
            $this->txtRepositoryUrl->Name = t('SVN commit path');
            $this->txtRepositoryUrl->Text = $this->objProject->GetPreferenceValueByName('SVN commit path');
            $this->txtRepositoryUrl->Instructions = t('e.g. svn+ssh://hg.mozilla.org/releases/l10n/mozilla-aurora/ro');
            $this->txtRepositoryUrl->PreferedRenderMethod = 'RenderWithName';
            $this->txtRepositoryUrl->Required = true;
            
            $this->txtUsername = new QTextBox($this);
            $this->txtUsername->Name = t('Username for SVN');
            $this->txtUsername->Text = $this->objProject->GetPreferenceValueByName('Username for SVN');
            $this->txtUsername->Instructions = '';
            $this->txtUsername->Required = true;
            $this->txtUsername->PreferedRenderMethod = 'RenderWithName';
            
            $this->fileSSHPrivateKey = new QFileControl($this);
            $this->fileSSHPrivateKey->Name = t('Private SSH key for SVN');
            $this->fileSSHPrivateKey->Required = true;
            $this->fileSSHPrivateKey->Instructions = t("Uploading a private key is really unsecure unless you're using https. Proceed with caution.");
            $this->fileSSHPrivateKey->PreferedRenderMethod = 'RenderWithName';
            
            $this->txtCommitMessage = new QTextBox($this);
            $this->txtCommitMessage->Required = true;
            $this->txtCommitMessage->TextMode = QTextMode::MultiLine;
            $this->txtCommitMessage->Name = t('The commit message');
            $this->txtCommitMessage->Text = sprintf(t('Commit from Narro by %s'), sprintf('%s <%s>', QApplication::$User->RealName, QApplication::$User->Email));
            $this->txtCommitMessage->Instructions = t('Be creative or leave it as it is');
            $this->txtCommitMessage->PreferedRenderMethod = 'RenderWithName';

            $this->btnTest = new QButton($this);
            $this->btnTest->Text = 'Test before commit';
            $this->btnTest->CausesValidation = $this;
            $this->btnTest->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnTest_Click'));
            
            $this->btnCommit = new QButton($this);
            $this->btnCommit->CausesValidation = $this;
            $this->btnCommit->Text = 'Commit';
            $this->btnCommit->Display = false;
            $this->btnCommit->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnCommit_Click'));
            
            $this->lblOutput = new QLabel($this);
            $this->lblOutput->TagName = 'pre';
            $this->lblOutput->HtmlEntities = false;
        }
        
        protected function RepositorySetup() {
            
            NarroProject::RegisterPreference('SVN commit path', false, 0, 'text', 'The url to commit this project to SVN.', '');
            NarroProject::RegisterPreference('Username for SVN', false, 0, 'text', '', '');
            
            $this->objProject->SetPreferenceValueByName('SVN commit path', $this->txtRepositoryUrl->Text);
            $this->objProject->SetPreferenceValueByName('Username for SVN', $this->txtUsername->Text);
            $this->objProject->Save();
            
            $this->strSSHKey = sprintf('%s/svn_%d_%s_%d', __TMP_PATH__, QApplication::$User->UserId, QApplication::$TargetLanguage->LanguageCode, $this->objProject->ProjectId);
            $strProcLogFile = __TMP_PATH__ . '/' . $this->objProject->ProjectId . '-' . QApplication::$TargetLanguage->LanguageCode . '-svn.log';
            copy($this->fileSSHPrivateKey->File, $this->strSSHKey);
            chmod($this->strSSHKey, 0600);
            
            $mixProcess = NarroUtils::Exec(
                sprintf(
                	'svn checkout %s %s_svn',
                    escapeshellarg($this->txtRepositoryUrl->Text),
                    $this->strSSHKey
                ),
                $arrOutput,
                $arrError,
                $intRetVal,
                false,
                array(
                    'SVN_SSH' => sprintf('ssh -o StrictHostKeyChecking=no -l %s -p 22 -i %s', escapeshellarg($this->txtUsername->Text), escapeshellarg($this->strSSHKey)),
            		'HOME' => __TMP_PATH__
                ),
                __TMP_PATH__,
                true
            );
            
            if ($intRetVal == 0) {
                NarroUtils::RecursiveCopy($this->objProject->DefaultTranslationPath, $this->strSSHKey . '_svn');
                
                $mixProcess = NarroUtils::Exec(
                	'svn add -q ./*',
                    $arrOutput,
                    $arrError,
                    $intRetVal,
                    false,
                    array(
                        'SVN_SSH' => sprintf('ssh -o StrictHostKeyChecking=no -l %s -p 22 -i %s', escapeshellarg($this->txtUsername->Text), escapeshellarg($this->strSSHKey)),
                		'HOME' => __TMP_PATH__
                    ),
                    $this->strSSHKey . '_svn',
                    true
                );
                
                return $intRetVal;
            }
            else
                return $intRetVal;
        }
        
        public function btnCommit_Click() {
            if ($this->RepositorySetup() == 0) {
                $mixProcess = NarroUtils::Exec(
                    sprintf(
                    	'svn commit -m "%s" %s',
                        escapeshellarg($this->txtCommitMessage->Text),
                        (($this->pnlPatchViewer && count($this->pnlPatchViewer->SelectedFiles))?join(" ", $this->pnlPatchViewer->SelectedFiles):"")
                	),
                    $arrOutput,
                    $arrError,
                    $intRetVal,
                    false,
                    array(
                        'SVN_SSH' => sprintf('ssh -o StrictHostKeyChecking=no -l %s -p 22 -i %s', escapeshellarg($this->txtUsername->Text), $this->strSSHKey),
                        'HOME' => __TMP_PATH__
                    ),
                    $this->strSSHKey . '_svn',
                    true
                );
            }
            
            $this->lblOutput->Text = join("\n", $arrOutput);
            
            unlink($this->strSSHKey);
            NarroUtils::RecursiveDelete($this->strSSHKey . '_svn');
        }
        
        public function btnTest_Click() {
            if ($this->RepositorySetup() == 0) {
                $mixProcess = NarroUtils::Exec(
            		sprintf('svn diff > %s_diff', $this->strSSHKey),
                    $arrOutput,
                    $arrError,
                    $intRetVal,
                    false,
                    array(
                        'SVN_SSH' => sprintf('ssh -o StrictHostKeyChecking=no -l %s -p 22 -i %s', escapeshellarg($this->txtUsername->Text), $this->strSSHKey),
                		'HOME' => __TMP_PATH__
                    ),
                    $this->strSSHKey . '_svn',
                    true
                );
                
            }
            else
                $this->lblOutput->Text = join("\n", $arrOutput);
            
            $this->Form->RemoveControl($this->pnlPatchViewer->ControlId);
            
            NarroPatchViewerPanel::$strFileExpression = '/^\-\-\-\s([^\(]+).*$/';
            $this->pnlPatchViewer = new NarroPatchViewerPanel($this->strSSHKey . '_diff', $this);
            
            unlink($this->strSSHKey);
            unlink($this->strSSHKey . '_diff');
            
            NarroUtils::RecursiveDelete($this->strSSHKey . '_svn');
            
            $this->btnCommit->Display = true;
        }
    }