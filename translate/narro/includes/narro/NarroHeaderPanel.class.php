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
    class NarroHeaderPanel extends QPanel {
        public $lstLanguage;

        public function __construct($objParentObject, $strControlId = null) {
            parent::__construct($objParentObject, $strControlId);
            $this->strTemplate = __DOCROOT__ . __SUBDIRECTORY__ . '/templates/NarroHeaderPanel.tpl.php';
            $this->strHorizontalAlign = QHorizontalAlign::Right;

            $this->lstLanguage = new QListBox($this);
            $this->lstLanguage->AddAction(new QChangeEvent(), new QServerControlAction($this, 'lstLanguage_Change'));
            $arrLanguages = NarroLanguage::LoadAllActive(QQ::Clause(QQ::OrderBy(QQN::NarroLanguage()->LanguageName)));
            foreach($arrLanguages as $objLanguage) {
                $this->lstLanguage->AddItem(t($objLanguage->LanguageName), $objLanguage->LanguageCode, ($objLanguage->LanguageCode == NarroApp::$Language->LanguageCode));
            }

        }

        public function lstLanguage_Change() {
            /**
             * @todo replace this code with a javascript one that keeps the #part
             */
            if (strstr($_SERVER['REQUEST_URI'], 'l='))
                NarroApp::Redirect(str_replace('l=' . NarroApp::$Language->LanguageCode, 'l=' . $this->lstLanguage->SelectedValue, $_SERVER['REQUEST_URI']));
            elseif (strstr($_SERVER['REQUEST_URI'], '?'))
                NarroApp::Redirect($_SERVER['REQUEST_URI'] . '&l=' . $this->lstLanguage->SelectedValue);
            else
                NarroApp::Redirect($_SERVER['REQUEST_URI'] . '?l=' . $this->lstLanguage->SelectedValue);
        }

    }
?>