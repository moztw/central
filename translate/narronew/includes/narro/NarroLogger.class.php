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
    class NarroLogger {
        public static $intUserId;
        public static $intProjectId;
        public static $intLanguageId;
        
        public static function LogError($strMessage, $intProjectId = null, $intLanguageId = null, $intUserId = null) {
            self::Log($strMessage, NarroLog::PRIORITY_ERROR, $intProjectId, $intLanguageId, $intUserId);
        }

        public static function LogInfo($strMessage, $intProjectId = null, $intLanguageId = null, $intUserId = null) {
            self::Log($strMessage, NarroLog::PRIORITY_INFO, $intProjectId, $intLanguageId, $intUserId);
        }
        
        public static function LogWarn($strMessage, $intProjectId = null, $intLanguageId = null, $intUserId = null) {
            self::Log($strMessage, NarroLog::PRIORITY_WARN, $intProjectId, $intLanguageId, $intUserId);
        }

        public static function LogDebug($strMessage, $intProjectId = null, $intLanguageId = null, $intUserId = null) {
            self::Log($strMessage, NarroLog::PRIORITY_DEBUG, $intProjectId, $intLanguageId, $intUserId);
        }

        private static function Log($strMessage, $intPriority, $intProjectId = null, $intLanguageId = null, $intUserId = null) {
            if (SERVER_INSTANCE != 'dev' && $intPriority == NarroLog::PRIORITY_DEBUG)
                return true;
            
            $objLogEntry = new NarroLog();
            $objLogEntry->Date = QDateTime::Now();
            $objLogEntry->Priority = $intPriority;
            $objLogEntry->Message = $strMessage;
            $objLogEntry->ProjectId = is_null($intProjectId)?(is_null(self::$intProjectId)?null:self::$intProjectId):$intProjectId;
            $objLogEntry->LanguageId = is_null($intLanguageId)?(is_null(self::$intLanguageId)?null:self::$intLanguageId):$intLanguageId;
            $objLogEntry->UserId = is_null($intUserId)?(is_null(self::$intUserId)?null:self::$intUserId):$intUserId;
            
            try {
                $objLogEntry->Save();
            }
            catch (Exception $objEx) {
                error_log($objEx->getMessage() . $objEx->getTraceAsString());
            }
            
            if (QFirebug::getEnabled()) {
                switch($intPriority) {
                    case NarroLog::PRIORITY_INFO:
                        QFirebug::info($objLogEntry->Message . ' / ' . $objLogEntry->UserId . ' / ' . $objLogEntry->ProjectId . ' / ' . $objLogEntry->LanguageId);
                        break;
                    case NarroLog::PRIORITY_WARN:
                        QFirebug::warn($objLogEntry->Message . ' / ' . $objLogEntry->UserId . ' / ' . $objLogEntry->ProjectId . ' / ' . $objLogEntry->LanguageId);
                        break;
                    case NarroLog::PRIORITY_ERROR:
                        QFirebug::error($objLogEntry->Message . ' / ' . $objLogEntry->UserId . ' / ' . $objLogEntry->ProjectId . ' / ' . $objLogEntry->LanguageId);
                        break;
                    default:
                        QFirebug::log($objLogEntry->Message . ' / ' . $objLogEntry->UserId . ' / ' . $objLogEntry->ProjectId . ' / ' . $objLogEntry->LanguageId);
                }
            }
            
        }

    }
?>