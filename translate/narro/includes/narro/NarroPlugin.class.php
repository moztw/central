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
    class NarroPlugin {
        protected $strName;
        protected $arrErrors = array();
        protected $blnEnable = true;

        public function __construct() {
            $this->strName = __CLASS__;
        }
        
        protected function Enable() {
            if ($this->blnEnable) {
                NarroUser::RegisterPreference($this->strName, 'option', sprintf(t('Enables the %s plugin'), $this->strName), ($this->blnEnable)?'Yes':'No', array('Yes', 'No'));
                $this->blnEnable = $this->blnEnable && (QApplication::$User->GetPreferenceValueByName($this->strName) == 'Yes');
            }
        }

        /////////////////////////
        // Public Properties: GET
        /////////////////////////
        public function __get($strName) {
            switch ($strName) {
                case "Errors": return $this->arrErrors;
                case "Error": return QType::Cast(count($this->arrErrors), QType::Boolean);
                case "Name": return $this->strName;
                case "Enable": return $this->blnEnable;
                default:
                    throw new QUndefinedPropertyException("GET", __CLASS__, $strName);
            }
        }

        public function ClearErrors() {
            $this->arrErrors = array();
        }
    }
?>