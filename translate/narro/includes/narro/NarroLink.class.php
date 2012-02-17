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
    class NarroLink {
        public static function ProjectManage($intProjectId, $strLinkText = '') {
            $strLink = sprintf('narro_project_manage.php?l=%s&p=%d', NarroApp::$Language->LanguageCode, $intProjectId);
            if ($strLinkText)
                return sprintf('<a href="%s">%s</a>', $strLink, $strLinkText);
            else
                return $strLink;
        }

        public static function ProjectEdit($intProjectId, $strLinkText = '') {
            $strLink = sprintf('narro_project_edit.php?l=%s&p=%d', NarroApp::$Language->LanguageCode, $intProjectId);
            if ($strLinkText)
                return sprintf('<a href="%s">%s</a>', $strLink, $strLinkText);
            else
                return $strLink;
        }

        public static function ProjectLanguages($intProjectId, $strLinkText = '') {
            $strLink = sprintf('narro_project_language_list.php?l=%s&p=%d', NarroApp::$Language->LanguageCode, $intProjectId);
            if ($strLinkText)
                return sprintf('<a href="%s">%s</a>', $strLink, $strLinkText);
            else
                return $strLink;
        }

        public static function ProjectList($strLinkText = '') {
            $strLink = sprintf('narro_project_list.php?l=%s', NarroApp::$Language->LanguageCode);
            if ($strLinkText)
                return sprintf('<a href="%s">%s</a>', $strLink, $strLinkText);
            else
                return $strLink;
        }

        public static function ProjectTextList($intProjectId, $intTextFilter = 1, $intSearchType = 1, $strSearchText = '', $strLinkText = '') {
            $strLink = sprintf('narro_project_text_list.php?l=%s&p=%d&tf=%d&st=%d&s=%s', NarroApp::$Language->LanguageCode, $intProjectId, $intTextFilter, $intSearchType, urlencode($strSearchText));
            if ($strLinkText)
                return sprintf('<a href="%s">%s</a>', $strLink, $strLinkText);
            else
                return $strLink;
        }

        public static function FileTextList($intProjectId, $intFileId, $intTextFilter = 1, $intSearchType = 1, $strSearchText = '', $strLinkText = '') {
            $strLink = sprintf('narro_file_text_list.php?l=%s&p=%d&f=%d&tf=%d&st=%d&s=%s', NarroApp::$Language->LanguageCode, $intProjectId, $intFileId, $intTextFilter, $intSearchType, urlencode($strSearchText));
            if ($strLinkText)
                return sprintf('<a href="%s">%s</a>', $strLink, $strLinkText);
            else
                return $strLink;
        }

        public static function ProjectFileList($intProjectId, $strPath = '', $strLinkText = '') {
            $strLink = sprintf('narro_project_file_list.php?l=%s&p=%d&pf=%s', NarroApp::$Language->LanguageCode, $intProjectId, $strPath);
            if ($strLinkText)
                return sprintf('<a href="%s">%s</a>', $strLink, $strLinkText);
            else
                return $strLink;
        }

        public static function UserProfile($intUserId, $strLinkText = '') {
            $strLink = sprintf('narro_user_profile.php?l=%s&u=%d', NarroApp::$Language->LanguageCode, $intUserId);
            if ($strLinkText)
                return sprintf('<a href="%s">%s</a>', $strLink, $strLinkText);
            else
                return $strLink;
        }

        public static function UserRole($intUserId, $strLinkText = '') {
            $strLink = sprintf('narro_user_role.php?l=%s&u=%d', NarroApp::$Language->LanguageCode, $intUserId);
            if ($strLinkText)
                return sprintf('<a href="%s">%s</a>', $strLink, $strLinkText);
            else
                return $strLink;
        }

        public static function RoleList($intRoleId = 0, $strView = '', $strLinkText = '') {
            switch($strView) {
                case 'permission':
                        $strExtraLink = '&view=permission';
                        break;
                case 'user':
                        $strExtraLink = '&view=user';
                        break;
                default:
                        $strExtraLink = '';
            }

            if ($intRoleId)
                $strLink = sprintf('narro_role_list.php?l=%s&r=%d', NarroApp::$Language->LanguageCode, $intRoleId);
            else
                $strLink = sprintf('narro_role_list.php?l=%s', NarroApp::$Language->LanguageCode);

            $strLink .= $strExtraLink;

            if ($strLinkText)
                return sprintf('<a href="%s">%s</a>', $strLink, $strLinkText);
            else
                return $strLink;
        }

        public static function UserPreferences($intUserId, $strLinkText = '') {
            $strLink = sprintf('narro_user_preferences.php?l=%s&u=%d', NarroApp::$Language->LanguageCode, $intUserId);
            if ($strLinkText)
                return sprintf('<a href="%s">%s</a>', $strLink, $strLinkText);
            else
                return $strLink;
        }

        public static function ContextSuggest($intProjectId, $intFileId, $intContextId, $intTextFilter = 1, $intSearchType = 1, $strSearchText = '', $intCurrentContext = null, $intContextCount = null, $intSortColumnIndex = -1, $intSortDirection = 0, $strLinkText = '') {
            $strLink = sprintf(
                'narro_context_suggest.php?l=%s&p=%d&f=%d&c=%d&tf=%d&st=%d&s=%s&ci=%d&cc=%d&o=%d&a=%d',
                NarroApp::$Language->LanguageCode,
                $intProjectId,
                $intFileId,
                $intContextId,
                $intTextFilter,
                $intSearchType,
                urlencode($strSearchText),
                $intCurrentContext,
                $intContextCount,
                $intSortColumnIndex,
                $intSortDirection
            );
            if ($strLinkText)
                return sprintf('<a href="%s">%s</a>', $strLink, $strLinkText);
            else
                return $strLink;
        }
    }
?>