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
    class NarroProgress {

        public static function GetProgressFileName($intProjectId, $strOperation) {
            return __TMP_PATH__ . '/' . $strOperation . '-' . $intProjectId . '-' . QApplication::$TargetLanguage->LanguageCode . '.progress';
        }

        public static function ClearProgressFileName($intProjectId, $strOperation) {
            if (file_exists(self::GetProgressFileName($intProjectId, $strOperation))) {
                unlink(self::GetProgressFileName($intProjectId, $strOperation));
            }
        }

        public static function GetProgressPerProject($intProjectId, $strOperation) {
            if (file_exists(self::GetProgressFileName($intProjectId, $strOperation))) {
                $arrValues = explode(',', file_get_contents(self::GetProgressFileName($intProjectId, $strOperation)));
                if (count($arrValues) == 3) {
                    list($intFiles, $intProgress, $intProgressPerFile) = $arrValues;
                    return min(100, $intProgress);
                }
                else
                    return 0;
            }
            else
                return 0;
        }

        public static function GetProgress($intProjectId, $strOperation) {
            if (file_exists(self::GetProgressFileName($intProjectId, $strOperation))) {
                $arrValues = explode(',', file_get_contents(self::GetProgressFileName($intProjectId, $strOperation)));
                if (count($arrValues) == 3) {
                    list($intFiles, $intProgress, $intProgressPerFile) = $arrValues;
                    if ($intFiles > 0)
                        return min(100, $intProgress + intval($intProgressPerFile/$intFiles));
                    else
                        return 0;
                }
                else
                    return 0;
            }
            else
                return 0;
        }

        public static function GetProgressPerFile($intProjectId, $strOperation) {
            if (file_exists(self::GetProgressFileName($intProjectId, $strOperation))) {
                $arrValues = explode(',', file_get_contents(self::GetProgressFileName($intProjectId, $strOperation)));
                if (count($arrValues) == 3) {
                    list($intFiles, $intProgress, $intProgressPerFile) = $arrValues;
                    return $intProgressPerFile;
                }
                else
                    return 0;
            }
            else
                return 0;
        }

        public static function GetFilesToProcess($intProjectId, $strOperation) {
            if (file_exists(self::GetProgressFileName($intProjectId, $strOperation))) {
                list($intFiles, $intProgress, $intProgressPerFile) = explode(',', file_get_contents(self::GetProgressFileName($intProjectId, $strOperation)));
                return $intFiles;
            }
            else
                return 0;
        }

        public static function SetProgress($intValue, $intProjectId, $strOperation, $intFilesToProcess = 0, $intProgressPerFile = 0) {
            if ($intFilesToProcess == 0)
                $intFilesToProcess = self::GetFilesToProcess($intProjectId, $strOperation);

            if ($intProgressPerFile == 0)
                $intProgressPerFile = self::GetProgressPerFile($intProjectId, $strOperation);

            if ($intValue == 0)
                $intValue = self::GetProgressPerProject($intProjectId, $strOperation);

            if (!@file_put_contents(self::GetProgressFileName($intProjectId, $strOperation), $intFilesToProcess . ',' . $intValue . ',' . $intProgressPerFile)) {
                NarroLogger::LogWarn(sprintf('Can\'t write progress file %s', self::GetProgressFileName($intProjectId, $strOperation)));
            }
            @chmod(self::GetProgressFileName($intProjectId, $strOperation), 0666);
        }

        public static function SetProgressPerFile($intValue, $intProjectId, $strOperation) {
            self::SetProgress(0, $intProjectId, $strOperation, 0, min(100, floor($intValue)));
        }

    }
?>