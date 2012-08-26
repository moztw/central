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

    class NarroMozillaDashboard extends NarroPlugin {
        protected $strUrl = 'https://l10n-stage-sj.mozilla.org/dashboard/l10n_status.json?locale=%s';

        public function __construct() {
            parent::__construct();
            $this->blnEnable = false;
            $this->strName = t('Mozilla l10n dashboard');
            $this->Enable();
            $this->blnEnable = $this->blnEnable && function_exists('json_decode');
            $this->strUrl = sprintf($this->strUrl, QApplication::$TargetLanguage->LanguageCode);
            
            if ($this->blnEnable)
                NarroProject::RegisterPreference('Code name on mozilla l10n dashboard', true, NarroProjectType::Mozilla, 'text', 'e.g. fx_aurora, see <a href="https://l10n-stage-sj.mozilla.org/shipping/dashboard">https://l10n-stage-sj.mozilla.org/shipping/dashboard</a>', '');
        }
        
        public function AfterExportProject(NarroProject $objProject) {
            $objCache = new NarroCache(__CLASS__, QApplication::GetLanguageId());
            $objCache->DeleteData();
        
            return array($objProject);
        }

        public function DisplayInProjectListInProgressColumn(NarroProject $objProject, $strText = '') {
            $strExportText = '';
            if ($objProject->ProjectType != NarroProjectType::Mozilla) return array($objProject, '');
            $objCache = new NarroCache(__CLASS__, QApplication::GetLanguageId());
            $objData = $objCache->GetData();
            if (!$objData) {
                $strJson = @file_get_contents($this->strUrl);
                if ($strJson) {
                    $objData = json_decode($strJson);
                    if ($objData) {
                        $objCache->SaveData($objData);
                    }
                    
                }
            }
            if (is_array($objData->items))
                foreach($objData->items as $objItem) {
                    if ($objItem->id == sprintf('%s/%s', $objProject->GetPreferenceValueByName('Code name on mozilla l10n dashboard'), QApplication::$TargetLanguage->LanguageCode)) {
                        $strWarning = ($objItem->warnings)?sprintf('%d warnings', $objItem->warnings):'';
                        $strMissing = ($objItem->missing)?sprintf('%d missing', $objItem->missing):'';
                        $strExportText = sprintf('<a title="Visit the Mozilla l10n dashboard" target="_blank" href="https://l10n-stage-sj.mozilla.org/dashboard/compare?run=%d">%s</a>', $objItem->runid, join(', ', array($objItem->result, $strMissing, $strWarning)));
                        break;
                    }
                }
            
            return array($objProject, $strExportText);
        }
    }
?>