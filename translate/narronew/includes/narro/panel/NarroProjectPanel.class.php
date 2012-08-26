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
    class NarroProjectPanel extends QPanel {
        // General Panel Variables
        /**
         * @var NarroProject
         */
        public $objProject;

        public $pnlTop;
        
        public $pnlProgressBar;

        protected function SetupNarroProject(NarroProject $objNarroProject) {
            $this->objProject = $objNarroProject;
        }

        public function __construct(NarroProject $objNarroProject, $objParentObject, $strControlId = null) {

            // Call the Parent
            try {
                parent::__construct($objParentObject, $strControlId);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Call SetupNarroProject to either Load/Edit Existing or Create New
            $this->SetupNarroProject($objNarroProject);

            $this->strTemplate = __NARRO_INCLUDES__ . '/narro/panel/NarroProjectPanel.tpl.php';

            $this->pnlTop = new QTabs($this);
            
            $pnlOverall = new NarroTopPanel(date(sprintf('Y-m-%d 00:00:00', date('d') - date('N') + 1)), $this->pnlTop, $this->objProject);
            $pnlWeekly = new NarroTopPanel('1970-01-01 00:00:00', $this->pnlTop, $this->objProject);
            
            $this->pnlTop->Headers = array(t('Weekly'), t('All time'));
            
            $this->pnlProgressBar = new NarroProjectTranslationProgressBar($this->objProject->ProjectProgressForCurrentLanguage, $this);
        }

    }
