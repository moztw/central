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
    class NarroTextLengthCheck extends NarroPlugin {

        public function __construct() {
            parent::__construct();
            $this->blnEnable = true;
            $this->strName = t('Text length check');
            $this->Enable();
        }

        public function SaveSuggestion($strOriginal, $strTranslation, $strContext, $objFile, $objProject) {
            return $this->ApproveSuggestion($strOriginal, $strTranslation, $strContext, $objFile, $objProject);
        }

        public function ApproveSuggestion($strOriginal, $strTranslation, $strContext, $objFile, $objProject) {
            /**
             * If the translated text is more than 50% shorter than the original, show a warning
             */
            if (mb_strlen($strTranslation) < mb_strlen($strOriginal) / 2) {
                $this->arrErrors[] =
                    '<span style="color:red">' . t('Your translation seems really short compared to the original. Are you sure it is correct?') . '</span>';
            }
            
            if (mb_strlen($strTranslation) > mb_strlen($strOriginal) * 2) {
                $this->arrErrors[] =
                    '<span style="color:red">' . t('Your translation seems really long compared to the original. Are you sure it is correct?') . '</span>';
            }

            return array($strOriginal, $strTranslation, $strContext, $objFile, $objProject);
        }
    }
?>