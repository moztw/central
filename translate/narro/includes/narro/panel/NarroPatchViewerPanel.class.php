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
    class NarroPatchViewerPanel extends QPanel {
        protected $chkSelectAll;
        protected $btnExpandAll;
        protected $blnAutoRenderChildren = true;
        public static $strFileExpression = '/^\-\-\-\s+a\/(.*)$/';
        public function __construct($strPatchFilePath, $objParentObject, $strControlId = null) {
            parent::__construct($objParentObject, $strControlId);
    
            $this->chkSelectAll = new QCheckBox($this);
            $this->chkSelectAll->Name = 'Select All';
            $this->chkSelectAll->PreferedRenderMethod = 'RenderWithName';
            $this->chkSelectAll->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'chkSelectAll_Click'));
            $this->chkSelectAll->DisplayStyle = QDisplayStyle::Block;
    
            $this->btnExpandAll = new QButton($this);
            $this->btnExpandAll->Text = 'Expand All';
            $this->btnExpandAll->HtmlAfter = '<br />';
            $this->btnExpandAll->PreferedRenderMethod = 'Render';
            $this->btnExpandAll->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnExpandAll_Click'));
            $this->btnExpandAll->DisplayStyle = QDisplayStyle::Block;
    
            $hndFile = fopen($strPatchFilePath, 'r');
            $strCurrentFileContents = '';
            while(!feof($hndFile)) {
                $strFileLine = fgets($hndFile);
                preg_match(self::$strFileExpression, $strFileLine, $arrMatches);
                if (isset($arrMatches[1])) {
                    if ($strCurrentFileContents != '' && isset($pnlWrap)) {
                        $pnlFileDiff = $this->pnlFileDiff_Create($pnlWrap);
                        $pnlFileDiff->Text = $strCurrentFileContents;
                    }
    
                    $pnlWrap = $this->pnlWrap_Create();
                    $chkFile = $this->chkFile_Create($pnlWrap);
                    $chkFile->Name = $arrMatches[1];
                    $lblFile = $this->lblFile_Create($pnlWrap);
                    $lblFile->Text = QApplication::HtmlEntities($arrMatches[1]) . '<br />';
    
                    $strCurrentFileContents = '';
                }
                else {
                    if (preg_match('/^[\s\+\-]+/', $strFileLine))
                    $strCurrentFileContents .= preg_replace(
                    array(
                                    '/^\-(.+)$/',
                                    '/^\+(.+)$/'
                    ),
                    array(
                                    '<span style="color:red;font-weight:bold">-\1</span>',
                                    '<span style="color:green;font-weight:bold">+\1</span>'
                    ),
                    QApplication::HtmlEntities($strFileLine)
                    );
                }
            };
    
            if ($strCurrentFileContents != '' && isset($pnlWrap)) {
                $pnlFileDiff = $this->pnlFileDiff_Create($pnlWrap);
                $pnlFileDiff->Text = $strCurrentFileContents;
            }
    
            fclose($hndFile);
        }
    
        protected function pnlWrap_Create() {
            $pnlWrap = new QPanel($this);
            $pnlWrap->AutoRenderChildren = true;
            $pnlWrap->SetCustomStyle('font-weight', 'normal');
            $pnlWrap->CssClass = 'section_title';
            return $pnlWrap;
        }
    
        protected function chkFile_Create($pnlWrap) {
            $chkFile = new QCheckBox($pnlWrap, $pnlWrap->ControlId . 'chk');
            $chkFile->PreferedRenderMethod = 'Render';
            return $chkFile;
        }
    
        protected function pnlFileDiff_Create($pnlWrap) {
            $pnlFileDiff = new QPanel($pnlWrap, $pnlWrap->ControlId . 'pnl');
            $pnlFileDiff->TagName = 'pre';
            $pnlFileDiff->Display = false;
            $pnlFileDiff->CssClass = 'section';
            $pnlFileDiff->HtmlEntities = false;
            $pnlFileDiff->SetCustomStyle('margin-left', '20px');
            return $pnlFileDiff;
        }
    
        protected function lblFile_Create($pnlWrap) {
            $lblFile = new QLabel($pnlWrap, $pnlWrap->ControlId . 'lbl');
            $lblFile->HtmlEntities = false;
            $lblFile->Cursor = QCursor::Pointer;
            $lblFile->ActionParameter = $pnlWrap->ControlId;
            $lblFile->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'lblFile_Click'));
            return $lblFile;
        }
    
        public function chkSelectAll_Click($strFormId, $strControlId, $strParameter) {
            foreach($this->objChildControlArray as $objControl) {
                if ($objControl instanceof QPanel) {
                    $chkControl = $objControl->GetChildControl($objControl->ControlId . 'chk');
                    if ($chkControl instanceof QCheckBox) {
                        $chkControl->Checked = $this->chkSelectAll->Checked;
                    }
                }
            }
        }
    
        public function btnExpandAll_Click($strFormId, $strControlId, $strParameter) {
            foreach($this->objChildControlArray as $objControl) {
                if ($objControl instanceof QPanel) {
                    $pnlControl = $objControl->GetChildControl($objControl->ControlId . 'pnl');
                    if ($pnlControl instanceof QPanel) {
                        $this->lblFile_Click($strFormId, $pnlControl->ControlId, $objControl->ControlId);
                        if ($pnlControl->Display)
                        $this->btnExpandAll->Text = 'Collapse All';
                        else
                        $this->btnExpandAll->Text = 'Expand All';
                    }
                }
            }
        }
    
        public function lblFile_Click($strFormId, $strControlId, $strParameter) {
            $pnlWrap = $this->GetChildControl($strParameter);
            $pnlFileDiff = $pnlWrap->GetChildControl($strParameter . 'pnl');
            if ($pnlFileDiff instanceof QPanel) {
                $pnlFileDiff->Display = !$pnlFileDiff->Display;
            }
        }
        
        public function __get($strName) {
            switch ($strName) {
                case 'SelectedFiles':
                    $arrFiles = array();
                    foreach($this->objChildControlArray as $objControl) {
                        if ($objControl instanceof QPanel) {
                            $chkControl = $objControl->GetChildControl($objControl->ControlId . 'chk');
                            if ($chkControl instanceof QCheckBox && $chkControl->Checked) {
                                $arrFiles[] = $chkControl->Name;
                            }
                        }
                    }

                    return $arrFiles;
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
?>