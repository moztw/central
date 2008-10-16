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
    class NarroProgress {
        public static $strProgressFile;
        
        public static function SetProgressFile($strFile) {
            self::$strProgressFile = $strFile;
        }
        
        public static function GetProgress() {
            if (file_exists(self::$strProgressFile))            
                return trim(file_get_contents(self::$strProgressFile));
            else
                return 0;
        }
        
        public static function SetProgress($intValue) {
            $intOldValue = self::GetProgress();
                
//            if ($intOldValue > $intValue)
//                throw new Exception(sprintf(t('Tried to set a progress value (%s) smaller than what it was (%s)'), $intValue, $intOldValue));
                
            $intRetVal = @file_put_contents(self::$strProgressFile, $intValue);
            
//            if (!$intRetVal)
//                throw new Exception(sprintf(t('Could not write "%s" in progress file "%s"'), self::$strProgressFile, $intValue));
        }
    }
?>