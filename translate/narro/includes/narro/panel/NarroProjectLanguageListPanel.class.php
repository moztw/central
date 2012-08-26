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

    class NarroProjectLanguageListPanel extends QPanel {
        protected $objProject;
        protected $objFile;
        public $btnRefreshAll;
        
        public $dtgLanguage;


        public function __construct(NarroProject $objNarroProject, $objParentObject, $strControlId = null) {
            // Call the Parent
            try {
                parent::__construct($objParentObject, $strControlId);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            $this->objProject = $objNarroProject;

            $this->strTemplate = dirname(__FILE__) . '/' . __CLASS__ . '.tpl.php';

            $this->dtgLanguage_Create();
            
            $this->btnRefreshAll = new QButton($this);
            $this->btnRefreshAll->Text = t('Refresh all');
            $this->btnRefreshAll->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnRefreshAll_Click'));

        }
        
        public function btnRefreshAll_Click() {
            foreach($this->dtgLanguage->GetChildControls() as $ctl) {
                if ($ctl instanceof NarroProjectTranslationProgressBar)
                    $ctl->btnRefresh_Click($this->Form->FormId, $ctl->ControlId, '');
            }
            
            $this->dtgLanguage->Refresh();
        }

        public function dtgLanguage_PercentTranslated_Render(NarroLanguage $objLanguage) {
            $objProgressBar = new NarroProjectTranslationProgressBar($objLanguage->_NarroProjectProgressAsLanguage, $this->dtgLanguage);
            return $objProgressBar->Render(false);
        }

        protected function dtgLanguage_Create() {
            $this->dtgLanguage = new NarroLanguageDataGrid($this);
            $this->dtgLanguage->SortColumnIndex = 1;
            $this->dtgLanguage->SortDirection = 1;
            $this->dtgLanguage->AdditionalConditions =
                QQ::AndCondition(
                    QQ::Equal(QQN::NarroLanguage()->Active, true),
                    QQ::Equal(QQN::NarroLanguage()->NarroProjectProgressAsLanguage->ProjectId, $this->objProject->ProjectId)
                );
            
            $this->dtgLanguage->AdditionalClauses = array(QQ::Expand(QQN::NarroLanguage()->NarroProjectProgressAsLanguage));
            
            $colLanguage = $this->dtgLanguage->MetaAddColumn(QQN::NarroLanguage()->LanguageName);
            $colLanguage->Name = t('Language');
            
            $colProgress = new QDataGridColumn(t('Progress'));
            $colProgress->Html = '<?=$_CONTROL->ParentControl->dtgLanguage_PercentTranslated_Render($_ITEM)?>';
            $colProgress->HtmlEntities = false;
            $colProgress->OrderByClause = QQ::OrderBy(
                QQN::NarroLanguage()->NarroProjectProgressAsLanguage->ProgressPercent, 1,
                QQN::NarroLanguage()->NarroProjectProgressAsLanguage->FuzzyTextCount, 1
            );
            $colProgress->ReverseOrderByClause = QQ::OrderBy(
                QQN::NarroLanguage()->NarroProjectProgressAsLanguage->ProgressPercent, 0,
                QQN::NarroLanguage()->NarroProjectProgressAsLanguage->FuzzyTextCount, 0
            );
            
            $this->dtgLanguage->AddColumn($colProgress);
            
            //$colLanguage = $this->dtgLanguage->MetaAddColumn(QQN::NarroLanguage()->NarroProjectProgressAsLanguage->ProgressPercent);
        }
    }
?>
