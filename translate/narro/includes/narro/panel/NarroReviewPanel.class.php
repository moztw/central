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


    class NarroReviewPanel extends NarroTranslatePanel {
        public function __construct($objParentObject, $strControlId = null) {
            parent::__construct($objParentObject, $strControlId);
        }
        
        public function dtrText_Create() {
            parent::dtrText_Create();
            $this->dtrText->Template = dirname(__FILE__) . '/NarroReviewPanel_DataRepeater.tpl.php';
        }
        
        public function lstFilter_Create() {
            $this->lstFilter = new QListBox($this);
            $this->lstFilter->RenderWithNameCssClass = 'inline_block';
            $this->lstFilter->Name = t('Show');
            $this->lstFilter->AddItem(t('unapproved texts'), self::SHOW_NOT_APPROVED, true);
            $this->lstFilter->AddItem(t('approved texts'), self::SHOW_APPROVED);
            $this->lstFilter->AddItem(t('translated or approved texts'), self::SHOW_APPROVED_AND_NOT_APPROVED);
            $this->lstFilter->AddItem(t('translated with no votes'), self::SHOW_NOT_APPROVED_AND_WITHOUT_VOTES);
            $this->lstFilter->AddItem(t('translated with votes'), self::SHOW_NOT_APPROVED_AND_WITH_VOTES);
            
            $this->lstFilter->AddAction(new QChangeEvent(), new QAjaxControlAction($this, 'btnSearch_Click'));
            if (QApplication::QueryString('t'))
                $this->lstFilter->SelectedValue = QApplication::QueryString('t');
        }
        
        public function lstSort_Create() {
            $this->lstSort = new QListBox($this);
            $this->lstSort->RenderWithNameCssClass = 'inline_block';
            $this->lstSort->AddItem(t('not sorted'), null, true);
            $this->lstSort->AddItem(t('sorted by most recent translation'), self::SORT_TRANSLATION_DATE);
            $this->lstSort->AddAction(new QChangeEvent(), new QAjaxControlAction($this, 'btnSearch_Click'));
            if (QApplication::QueryString('o'))
                $this->lstSort->SelectedValue = QApplication::QueryString('o');
        }
        
        public function chkRefresh_Create() {
            parent::chkRefresh_Create();
            $this->chkRefresh->Checked = true;
        }
        
    }
