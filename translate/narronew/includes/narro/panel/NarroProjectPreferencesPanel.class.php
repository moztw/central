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

    class NarroProjectPreferencesPanel extends QPanel {
        protected $lblMessage;
    
        protected $arrControls;
    
        protected $objProject;
        protected $objProjectProgress;
    
        public function __construct(NarroProject $objProject, $objParentObject, $strControlId = null) {
            // Call the Parent
            try {
                parent::__construct($objParentObject, $strControlId);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
    
            $this->objProject = $objProject;
            $this->objProjectProgress = NarroProjectProgress::LoadByProjectIdLanguageId($objProject->ProjectId, QApplication::GetLanguageId());
    
            $this->lblMessage = new QLabel($this);
            $this->lblMessage->DisplayStyle = QDisplayStyle::Block;
        }
    
        protected function GetControlHtml() {
            $strOutput = $this->lblMessage->Render(false) . '<br /><table style="border: 1px solid #DDDDDD" cellpadding="4" cellspacing="0" width="100%">';
    
            foreach(NarroProject::$AvailablePreferences as $strName=>$arrPref) {
                if ($arrPref['project_type'] && $arrPref['project_type'] != $this->objProject->ProjectType) continue;
                
                $this->lblMessage->Text = t('Here you can set your project preferences.');
                
                switch($arrPref['type']) {
                    case 'number':
                        $txtNumber = new QIntegerTextBox($this);
                        $txtNumber->Name = $strName;
                        $txtNumber->Minimum = 5;
                        $txtNumber->Maximum = 100;
                        $txtNumber->MaxLength = 3;
                        $txtNumber->Width = 50;
                        if ($arrPref['global'])
                            $txtNumber->Enabled = QApplication::HasPermission('Can edit project', $this->objProject->ProjectId);
                        $txtNumber->Text = $this->objProject->GetPreferenceValueByName($strName);
                        $strOutput .= sprintf('<tr class="datagrid_row datagrid_even" style="height:40px"><td>%s:</td><td>%s</td><td style="font-size:-1">%s</td></tr>', t($strName), $txtNumber->RenderWithError(false), ($arrPref['description'])?t($arrPref['description']):'');
                        $this->arrControls[$strName] = $txtNumber;
                        break;
                    case 'text':
                        $txtTextPref = new QTextBox($this);
                        $txtTextPref->Name = $strName;
                        if ($arrPref['global'])
                            $txtTextPref->Enabled = QApplication::HasPermission('Can edit project', $this->objProject->ProjectId);
                        $txtTextPref->Text = $this->objProject->GetPreferenceValueByName($strName);
                        $txtTextPref->Columns = strlen($txtTextPref->Text);
    
                        $strOutput .= sprintf('<tr class="datagrid_row datagrid_even" style="height:40px"><td>%s:</td><td>%s</td><td style="font-size:-1">%s</td></tr>', t($strName), $txtTextPref->RenderWithError(false), ($arrPref['description'])?t($arrPref['description']):'');
                        $this->arrControls[$strName] = $txtTextPref;
                        break;
                    case 'option':
                        $lstOption = new QListBox($this);
                        $lstOption->Name = $strName;
                        if ($arrPref['global'])
                            $lstOption->Enabled = QApplication::HasPermission('Can edit project', $this->objProject->ProjectId);
                        foreach($arrPref['values'] as $strValue) {
                            $lstOption->AddItem(t($strValue), $strValue, ($strValue == $this->objProject->GetPreferenceValueByName($strName)));
                        }
                        $strOutput .= sprintf('<tr class="datagrid_row datagrid_even" style="height:40px"><td>%s:</td><td>%s</td><td style="font-size:-1">%s</td></tr>', t($strName), $lstOption->RenderWithError(false), ($arrPref['description'])?t($arrPref['description']):'');
                        $this->arrControls[$strName] = $lstOption;
                        break;
                }
            }
    
            $strOutput .= '</table><br />';
    
            $this->strText = $strOutput;
    
            return parent::GetControlHtml();
        }
    
        public function btnSave_Click($strFormId, $strControlId, $strParameter) {
            foreach($this->arrControls as $strName=>$objControl) {
                switch(NarroProject::$AvailablePreferences[$strName]['type']) {
                    case 'number':
                        $this->objProject->SetPreferenceValueByName($strName, $objControl->Text);
                        break;
                    case 'text':
                        $this->objProject->SetPreferenceValueByName($strName,  $objControl->Text);
                        break;
                    case 'option':
                        $this->objProject->SetPreferenceValueByName($strName, $objControl->SelectedValue);
                        break;
                }
            }
    
            try {
                $this->objProject->Save();
                $this->objProject = NarroProject::Load($this->objProject->ProjectId);
                $this->objProjectProgress = NarroProjectProgress::LoadByProjectIdLanguageId($this->objProject->ProjectId, QApplication::GetLanguageId());
            
                $this->lblMessage->Text = t('Your preferences were saved successfuly.');
                $this->lblMessage->ForeColor = 'green';
            } catch( Exception $objEx) {
                $this->lblMessage->Text = t('An error occurred while trying to save your preferences.');
                $this->lblMessage->ForeColor = 'red';
            }
        }
    
        public function __get($strName) {
            switch ($strName) {
                case 'Project': return $this->objProject;
    
                default:
                    try {
                    return parent::__get($strName);
                } catch (QCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }
            }
        }
    
    }