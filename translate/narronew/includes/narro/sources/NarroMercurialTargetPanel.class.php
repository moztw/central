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

    class NarroMercurialTargetPanel extends NarroVcsTargetPanel {
        protected $txtRepositoryUrl;
        protected $fileSSHPrivateKey;
        protected $txtUsername;
        protected $txtPassword;
        protected $txtCommitUsername;
        protected $txtCommitMessage;
        protected $chkForce;
        protected $lblOutput;
        protected $pnlPatchViewer;
        
        protected $btnCommit;
        protected $btnTest;

        public function __construct(NarroProject $objProject, NarroLanguage $objLanguage, $objParentObject, $strControlId = null) {
            parent::__construct($objProject, $objLanguage, $objParentObject, $strControlId);
            
            NarroProject::RegisterPreference('Mercurial commit path', false, 0, 'text', 'The url to commit this project to mercurial.', '');
            NarroProject::RegisterPreference('Username for Mercurial', false, 0, 'text', '', '');
            
            $this->txtRepositoryUrl = new QTextBox($this);
            $this->txtRepositoryUrl->Name = t('Mercurial commit path');
            $this->txtRepositoryUrl->Text = $this->objProject->GetPreferenceValueByName('Mercurial commit path');
            $this->txtRepositoryUrl->Instructions = t('e.g. ssh://hg.mozilla.org/releases/l10n/mozilla-aurora/ro');
            $this->txtRepositoryUrl->PreferedRenderMethod = 'RenderWithName';
            $this->txtRepositoryUrl->Required = true;
            
            $this->txtUsername = new QTextBox($this);
            $this->txtUsername->Name = t('Username for Mercurial');
            $this->txtUsername->Text = $this->objProject->GetPreferenceValueByName('Username for Mercurial');
            $this->txtUsername->Instructions = '';
            $this->txtUsername->Required = true;
            $this->txtUsername->PreferedRenderMethod = 'RenderWithName';
            
            $this->txtPassword = new QTextBox($this);
            $this->txtPassword->Name = t('Password for Mercurial');
            $this->txtPassword->Text = '';
            // @todo finish the implementation to support passwords as well
            $this->txtPassword->Display = false;
            $this->txtPassword->Instructions = t('Not needed if you use a private SSH key');
            $this->txtPassword->PreferedRenderMethod = 'RenderWithName';
            
            $this->fileSSHPrivateKey = new QFileControl($this);
            $this->fileSSHPrivateKey->Name = t('Private SSH key for Mercurial');
            $this->fileSSHPrivateKey->Required = true;
            $this->fileSSHPrivateKey->Instructions = t("Uploading a private key is really unsecure unless you're using https. Proceed with caution.");
            $this->fileSSHPrivateKey->PreferedRenderMethod = 'RenderWithName';
            
            $this->txtCommitUsername = new QTextBox($this);
            $this->txtCommitUsername->Required = true;
            $this->txtCommitUsername->Name = t('Author shown in the commit message');
            $this->txtCommitUsername->Text = sprintf('%s <%s>', QApplication::$User->RealName, QApplication::$User->Email);
            $this->txtCommitUsername->Instructions = t('Usually, this is something like Alexandru Szasz <alexxed@gmail.com>');
            $this->txtCommitUsername->PreferedRenderMethod = 'RenderWithName';
            
            $this->txtCommitMessage = new QTextBox($this);
            $this->txtCommitMessage->Required = true;
            $this->txtCommitMessage->Name = t('The commit message');
            $this->txtCommitMessage->Text = t('Commit from Narro');
            $this->txtCommitMessage->Instructions = t('Be creative or leave it as it is');
            $this->txtCommitMessage->PreferedRenderMethod = 'RenderWithName';

            $this->chkForce = new QCheckBox($this);
            $this->chkForce->Text = t('Force');
            $this->chkForce->Instructions = t('This would pass -f to hg and usually creates a new head');
            $this->chkForce->PreferedRenderMethod = 'RenderWithName';
            $this->chkForce->Display = false;

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
        
        public function btnCommit_Click() {
            NarroProject::RegisterPreference('Mercurial commit path', false, 0, 'text', 'The url to commit this project to mercurial.', '');
            NarroProject::RegisterPreference('Username for Mercurial', false, 0, 'text', '', '');
            
            $this->objProject->SetPreferenceValueByName('Mercurial commit path', $this->txtRepositoryUrl->Text);
            $this->objProject->SetPreferenceValueByName('Username for Mercurial', $this->txtUsername->Text);
            $this->objProject->Save();
                        
            $strSSHKey = sprintf('%s/mercurial_%d_%s_%d', __TMP_PATH__, QApplication::$User->UserId, QApplication::$TargetLanguage->LanguageCode, $this->objProject->ProjectId);
            $strProcLogFile = __TMP_PATH__ . '/' . $this->objProject->ProjectId . '-' . QApplication::$TargetLanguage->LanguageCode . '-mercurial.log';
            copy($this->fileSSHPrivateKey->File, $strSSHKey);
            chmod($strSSHKey, 0600);
            file_put_contents(
                $strSSHKey . '_hgrc',
                sprintf(
                    "[paths]\n" .
                    "default = %s\n" .
                    "\n" .
                    "[ui]\n" .
                    "ssh = ssh -i %s -o StrictHostKeyChecking=no -l %s\n" .
                    "username = %s\n",
                    $this->txtRepositoryUrl->Text,
                    $strSSHKey,
                    $this->txtUsername->Text,
                    $this->txtCommitUsername->Text
                )
            );
            
            $mixProcess = exec(
                sprintf(
                    'export HOME=%s;export HGRCPATH=%s; hg clone %s %s_mercurial;cd %s_mercurial; cp -f -R %s/* .; hg addremove; hg commit -m "%s" %s; hg push %s%s',
                    __TMP_PATH__,
                    $strSSHKey . '_hgrc',
                    escapeshellarg($this->txtRepositoryUrl->Text),
                    $strSSHKey,
                    $strSSHKey,
                    $this->objProject->DefaultTranslationPath,
                    escapeshellarg($this->txtCommitMessage->Text),
                    (($this->pnlPatchViewer && count($this->pnlPatchViewer->SelectedFiles))?join(" ", $this->pnlPatchViewer->SelectedFiles):""),
                    (($this->chkForce->Checked)?'-f ':''),
                    escapeshellarg($this->txtRepositoryUrl->Text)
                ),
                $arrOutput
            );
            
            $this->lblOutput->Text = join("\n", $arrOutput);
            
            unlink($strSSHKey);
            unlink($strSSHKey . '_hgrc');
            
            NarroUtils::RecursiveDelete($strSSHKey . '_mercurial');
        }
        
        public function btnTest_Click() {
            NarroProject::RegisterPreference('Mercurial commit path', false, 0, 'text', 'The url to commit this project to mercurial.', '');
            NarroProject::RegisterPreference('Username for Mercurial', false, 0, 'text', '', '');
            
            $this->objProject->SetPreferenceValueByName('Mercurial commit path', $this->txtRepositoryUrl->Text);
            $this->objProject->SetPreferenceValueByName('Username for Mercurial', $this->txtUsername->Text);
            $this->objProject->Save();
            
            $strSSHKey = sprintf('%s/mercurial_%d_%s_%d', __TMP_PATH__, QApplication::$User->UserId, QApplication::$TargetLanguage->LanguageCode, $this->objProject->ProjectId);
            $strProcLogFile = __TMP_PATH__ . '/' . $this->objProject->ProjectId . '-' . QApplication::$TargetLanguage->LanguageCode . '-mercurial.log';
            copy($this->fileSSHPrivateKey->File, $strSSHKey);
            chmod($strSSHKey, 0600);
            file_put_contents(
                $strSSHKey . '_hgrc',
                sprintf(
                    "[paths]\n" .
                    "default = %s\n" .
                    "\n" .
                    "[ui]\n" .
                    "ssh = ssh -i %s -o StrictHostKeyChecking=no -l %s\n" .
                    "username = %s\n",
                    $this->txtRepositoryUrl->Text,
                    $strSSHKey,
                    $this->txtUsername->Text,
                    $this->txtCommitUsername->Text
                )
            );
            
            $mixProcess = exec(
                sprintf(
                	'export HOME=%s;export HGRCPATH=%s; hg clone %s %s_mercurial;cd %s_mercurial; cp -f -R %s/* .; hg addremove; hg diff -w --nodates > %s_diff; hg commit -m "%s" %s; hg outgoing',
                    __TMP_PATH__,
                    $strSSHKey . '_hgrc',
                    escapeshellarg($this->txtRepositoryUrl->Text),
                    $strSSHKey,
                    $strSSHKey,
                    escapeshellarg($this->objProject->DefaultTranslationPath),
                    $strSSHKey,
                    escapeshellarg($this->txtCommitMessage->Text),
                    ($this->pnlPatchViewer && count($this->pnlPatchViewer->SelectedFiles))?join(" ", $this->pnlPatchViewer->SelectedFiles):""
                ),
                $arrOutput
            );
            
            $this->lblOutput->Text = join("\n", $arrOutput);
            
            $this->Form->RemoveControl($this->pnlPatchViewer->ControlId);
            
            $this->pnlPatchViewer = new NarroPatchViewerPanel($strSSHKey . '_diff', $this);
            
            unlink($strSSHKey);
            unlink($strSSHKey . '_hgrc');
            unlink($strSSHKey . '_diff');
            
            NarroUtils::RecursiveDelete($strSSHKey . '_mercurial');
            
            $this->btnCommit->Display = true;
            $this->chkForce->Display = true;
        }
    }