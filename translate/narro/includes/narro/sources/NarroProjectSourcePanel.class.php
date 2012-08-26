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
    class NarroProjectSourcePanel extends QPanel {
        protected $lstProject;
        protected $objProject;
        protected $objLanguage;

        public function __construct(NarroProject $objProject, NarroLanguage $objLanguage, $objParentObject, $strControlId = null) {
            // Call the Parent
            try {
                parent::__construct($objParentObject, $strControlId);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            $this->objProject = $objProject;
            $this->objLanguage = $objLanguage;

            $this->lstProject = new QListBox($this);
            $this->lstProject->DisplayStyle = QDisplayStyle::Block;
            $this->lstProject->Instructions = t('Please choose the project from which you will import matching approved translations');
            $this->lstProject->PreferedRenderMethod = 'RenderWithName';

            $this->blnAutoRenderChildren = true;

            foreach(
                NarroProject::QueryArray(
                        QQ::Equal(QQN::NarroProject()->Active, 1),
                        array(QQ::OrderBy(QQN::NarroProject()->ProjectName))
                ) as $objProject
            )
            {
                $this->lstProject->AddItem($objProject->ProjectName, $objProject->ProjectId);
            }
        }

        public function __get($strName) {
            switch ($strName) {
                case "Directory":
                    return sprintf('%s/%s/%s', __IMPORT_PATH__, $this->lstProject->SelectedValue, QApplication::$TargetLanguage->LanguageCode);

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