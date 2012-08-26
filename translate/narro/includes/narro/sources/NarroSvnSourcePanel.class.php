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

    class NarroSvnSourcePanel extends NarroVcsSourcePanel {
        /**
         * 1st parameter is the repository path entered in Narro and 2nd parameter is where to put the files
         */
        const CHECKOUT_COMMAND = '/usr/bin/svn checkout %1$s %2$s';

        public function __construct(NarroProject $objProject, NarroLanguage $objLanguage, $objParentObject, $strControlId = null) {
            parent::__construct($objProject, $objLanguage, $objParentObject, $strControlId);
            $this->txtRepository->Instructions = t('Please enter the path to the SVN repository');
        }

        protected function GetWorkingDirectory($strCheckoutCommand = null) {
            if ($this->txtRepository->Text == '')
                throw new Exception('You have to enter a path to a svn repository');
            
            $this->objProject->SetPreferenceValueByName('SVN repository for source texts', $this->txtRepository->Text);
            $this->objProject->Save();

            return parent::GetWorkingDirectory(self::CHECKOUT_COMMAND);
        }
    }