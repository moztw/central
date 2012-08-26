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
     *
     * @property NarroProjectProgress $ProjectProgress
     * @property NarroProject $Project
     */

    class NarroProjectTranslationProgressBar extends NarroTranslationProgressBar {
        /**
         * @var NarroProjectProgress
         */
        protected $objProjectProgress;
        protected $strLink;
        protected $btnRefresh;
        protected $objWaitIcon;
        
        public function __construct(NarroProjectProgress $objProjectProgress, $objParentObject, $strControlId = null) {
            $this->objProjectProgress = $objProjectProgress;
            parent::__construct($objParentObject, $strControlId);
            
            $this->objWaitIcon = new QWaitIcon($this);
            $this->objWaitIcon->Text = sprintf('<img src="%s/spinner_16.gif" title="Refreshing progress..." />', __NARRO_IMAGE_ASSETS__);
            
            $this->btnRefresh = new QImageButton($this);
            $this->btnRefresh->ImageUrl = __NARRO_IMAGE_ASSETS__ . '/refresh.png';
            $this->btnRefresh->Height = 20;
            $this->btnRefresh->Width = 20;
            $this->btnRefresh->Cursor = QCursor::Pointer;
            $this->btnRefresh->AddAction(new QClickEvent(), new QJavaScriptAction('this.style.display="none"'));
            $this->btnRefresh->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnRefresh_Click', $this->objWaitIcon));

            $this->strDisplayStyle = QDisplayStyle::InlineBlock;
            $this->strInstructions = t('Hover over the bar to get some details, click on the refresh button to refresh it');
            
            $this->Total = $this->objProjectProgress->TotalTextCount;
            $this->Translated = $this->objProjectProgress->ApprovedTextCount;
            $this->Fuzzy = $this->objProjectProgress->FuzzyTextCount;
        }

        //////////
        // Methods
        //////////
        public function ParsePostData() {}
        public function Validate() {return true;}

        protected function GetControlHtml() {
            return $this->btnRefresh->Render(false) . $this->objWaitIcon->Render(false) . parent::GetControlHtml();
        }
        
        public function btnRefresh_Click($strFormId, $strControlId, $strParameter) {
            $this->Total = $this->objProjectProgress->Project->CountAllTextsByLanguage($this->ProjectProgress->LanguageId);
            $this->Translated = $this->objProjectProgress->Project->CountApprovedTextsByLanguage($this->ProjectProgress->LanguageId);
            $this->Fuzzy = $this->objProjectProgress->Project->CountTranslatedTextsByLanguage($this->ProjectProgress->LanguageId);
            $this->blnModified = true;
        }

        /////////////////////////
        // Public Properties: SET
        /////////////////////////
        public function __set($strName, $mixValue) {
            $this->blnModified = true;

            switch ($strName) {
                case "Project":
                    try {
                        $this->objProject = QType::Cast($mixValue, 'NarroProject');
                        break;
                    } catch (QInvalidCastException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }
                    
                case "ProjectProgress":
                    try {
                        $this->objProjectProgress = QType::Cast($mixValue, 'NarroProjectProgress');
                        break;
                    } catch (QInvalidCastException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                default:
                    try {
                        parent::__set($strName, $mixValue);
                        break;
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }
            }
        }

        public function __get($strName) {
            switch ($strName) {
                case "ProjectProgress":
                    return $this->objProjectProgress;

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
    }
?>