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
    class NarroLink {

        public static function ProjectManage($intProjectId, $strLinkText = '') {
            $strLink = sprintf('narro_project_manage.php?l=%s&p=%d', QApplication::$TargetLanguage->LanguageCode, $intProjectId);
            if ($strLinkText != '')
                return sprintf('<a href="%s">%s</a>', $strLink, $strLinkText);
            else
                return $strLink;
        }

        public static function ProjectEdit($intProjectId, $strLinkText = '') {
            $strLink = sprintf('project_edit.php?l=%s&p=%d', QApplication::$TargetLanguage->LanguageCode, $intProjectId);
            if ($strLinkText != '')
                return sprintf('<a href="%s">%s</a>', $strLink, $strLinkText);
            else
                return $strLink;
        }

        public static function ProjectImport($intProjectId, $strLinkText = '') {
            $strLink = sprintf('import.php?l=%s&p=%d', QApplication::$TargetLanguage->LanguageCode, $intProjectId);
            if ($strLinkText != '')
                return sprintf('<a href="%s">%s</a>', $strLink, $strLinkText);
            else
                return $strLink;
        }

        public static function ProjectExport($intProjectId, $strLinkText = '') {
            $strLink = sprintf('export.php?l=%s&p=%d', QApplication::$TargetLanguage->LanguageCode, $intProjectId);
            if ($strLinkText != '')
                return sprintf('<a href="%s">%s</a>', $strLink, $strLinkText);
            else
                return $strLink;
        }

        public static function ProjectLanguages($intProjectId, $strLinkText = '') {
            $strLink = sprintf('project_languages.php?l=%s&p=%d', QApplication::$TargetLanguage->LanguageCode, $intProjectId);
            if ($strLinkText != '')
                return sprintf('<a href="%s">%s</a>', $strLink, $strLinkText);
            else
                return $strLink;
        }

        public static function ProjectList($strLinkText = '', $intFilter = 0) {
            $strLink = sprintf('projects.php?l=%s&f=%d', QApplication::$TargetLanguage->LanguageCode, $intFilter);
            if ($strLinkText != '')
                return sprintf('<a href="%s">%s</a>', $strLink, $strLinkText);
            else
                return $strLink;
        }

        public static function FileTextList($intProjectId, $intFileId, $intTextFilter = 1, $intSearchType = 1, $strSearchText = '', $strLinkText = '') {
            $strLink = sprintf('file_texts.php?l=%s&p=%d&f=%d&tf=%d&st=%d&s=%s', QApplication::$TargetLanguage->LanguageCode, $intProjectId, $intFileId, $intTextFilter, $intSearchType, urlencode($strSearchText));
            if ($strLinkText != '')
                return sprintf('<a href="%s">%s</a>', $strLink, $strLinkText);
            else
                return $strLink;
        }

        public static function ProjectFileList($intProjectId, $strPath = '', $strSearchText = '', $strLinkText = '') {
            $strLink = sprintf('files.php?l=%s&p=%d&pf=%s&s=%s', QApplication::$TargetLanguage->LanguageCode, $intProjectId, $strPath, $strSearchText);
            if ($strLinkText != '')
                return sprintf('<a href="%s">%s</a>', $strLink, $strLinkText);
            else
                return $strLink;
        }

        public static function Project($intProjectId, $strLinkText = '') {
            $strLink = sprintf('project.php?l=%s&p=%d', QApplication::$TargetLanguage->LanguageCode, $intProjectId);
            if ($strLinkText != '')
                return sprintf('<a href="%s">%s</a>', $strLink, $strLinkText);
            else
                return $strLink;
        }
        
        /**
        * Creates a link to the review page
        *
        * @param integer $intProjectId 0
        * @param string $strFilePath ''
        * @param integer $intFilter NarroTranslatePanel::SHOW_NOT_TRANSLATED
        * @param string $strSearch ''
        * @param integer $intSortBy 0
        * @param integer $intSortDir 1
        * @param integer $intMaxRowCount 10
        * @param integer $intStart 0
        * @param integer $intContextInfoId ''
        * @param string $strLinkText ''
        *
        * @return string if you provide the last parameter, a full <a> string is return, if not, just the href value
        */
        public static function Review(
            $intProjectId,
            $strFilePath,
            $intFilter,
            $strSearch,
            $intSortBy,
            $intSortDir,
            $intMaxRowCount,
            $intStart,
            $intContextInfoId,
            $strLinkText = '') {
                $strLink = sprintf(
                            'review.php?l=%s&p=%s&f=%s&t=%s&s=%s&o=%s&h=%s&m=%d&i=%d%s',
                QApplication::$TargetLanguage->LanguageCode,
                $intProjectId,
                $strFilePath,
                $intFilter,
                urlencode($strSearch),
                $intSortBy,
                $intSortDir,
                $intMaxRowCount,
                $intStart,
                (($intContextInfoId>0)?'#i' . $intContextInfoId:'')
                );
                if ($strLinkText != '')
                return sprintf('<a href="%s">%s</a>', $strLink, $strLinkText);
                else
            return $strLink;
        }
        

        /**
         * Creates a link to the translation page
         *
         * @param integer $intProjectId 0
         * @param string $strFilePath ''
         * @param integer $intFilter NarroTranslatePanel::SHOW_NOT_TRANSLATED
         * @param string $strSearch ''
         * @param integer $intSortBy 0
         * @param integer $intSortDir 1
         * @param integer $intMaxRowCount 10
         * @param integer $intStart 0
         * @param integer $intContextInfoId ''
         * @param string $strLinkText ''
         *
         * @return string if you provide the last parameter, a full <a> string is return, if not, just the href value
         */
        public static function Translate(
            $intProjectId,
            $strFilePath,
            $intFilter,
            $strSearch,
            $intSortBy,
            $intSortDir,
            $intMaxRowCount,
            $intStart,
            $intContextInfoId,
            $strLinkText = '') {
            $strLink = sprintf(
                'translate.php?l=%s&p=%s&f=%s&t=%s&s=%s&o=%s&h=%s&m=%d&i=%d%s',
                QApplication::$TargetLanguage->LanguageCode,
                $intProjectId,
                $strFilePath,
                $intFilter,
                urlencode($strSearch),
                $intSortBy,
                $intSortDir,
                $intMaxRowCount,
                $intStart,
                (($intContextInfoId>0)?'#i' . $intContextInfoId:'')
            );
            if ($strLinkText != '')
                return sprintf('<a href="%s">%s</a>', $strLink, $strLinkText);
            else
                return $strLink;
        }

        /**
         * Creates a link to the translation page
         *
         * @param integer $intProjectId
         * @param integer $intFilter
         * @param string $strSearch
         * @param string $strLinkText
         *
         * @return string if you provide the last parameter, a full <a> string is return, if not, just the href value
         */
        public static function ProjectTextList($intProjectId = null, $intFilter = NarroTranslatePanel::SHOW_NOT_TRANSLATED, $strSearch = '', $strLinkText = '') {
            $strLink = sprintf(
                'translate.php?l=%s&p=%s&f=%s&t=%s&s=%s&o=%s&h=%s&m=%d&i=%d#i%s',
                QApplication::$TargetLanguage->LanguageCode,
                $intProjectId,
                null,
                $intFilter,
                $strSearch,
                null,
                null,
                null,
                null,
                null
            );
            if ($strLinkText != '')
                return sprintf('<a href="%s">%s</a>', $strLink, $strLinkText);
            else
                return $strLink;
        }

        public static function UserProfile($intUserId, $strLinkText = '') {
            $strLink = sprintf('user.php?l=%s&u=%d', QApplication::$TargetLanguage->LanguageCode, $intUserId);
            if ($strLinkText != '')
                return sprintf('<a href="%s">%s</a>', $strLink, $strLinkText);
            else
                return $strLink;
        }

        public static function UserRole($intUserId, $strLinkText = '') {
            $strLink = sprintf('user_role.php?l=%s&u=%d', QApplication::$TargetLanguage->LanguageCode, $intUserId);
            if ($strLinkText != '')
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
                $strLink = sprintf('roles.php?l=%s&r=%d', QApplication::$TargetLanguage->LanguageCode, $intRoleId);
            else
                $strLink = sprintf('roles.php?l=%s', QApplication::$TargetLanguage->LanguageCode);

            $strLink .= $strExtraLink;

            if ($strLinkText != '')
                return sprintf('<a href="%s">%s</a>', $strLink, $strLinkText);
            else
                return $strLink;
        }

        public static function RoleEdit($intRoleId = null, $strLinkText = '') {
            $strLink = sprintf('role.php?l=%s&rid=%d', QApplication::$TargetLanguage->LanguageCode, $intRoleId);
            if ($strLinkText != '')
                return sprintf('<a href="%s">%s</a>', $strLink, $strLinkText);
            else
                return $strLink;
        }

        public static function UserPreferences($intUserId, $strLinkText = '') {
            $strLink = sprintf('preferences.php?l=%s&u=%d', QApplication::$TargetLanguage->LanguageCode, $intUserId);
            if ($strLinkText != '')
                return sprintf('<a href="%s">%s</a>', $strLink, $strLinkText);
            else
                return $strLink;
        }

        public static function UserEdit($intUserId, $strLinkText = '') {
            $strLink = sprintf('account.php?l=%s&u=%d', QApplication::$TargetLanguage->LanguageCode, $intUserId);
            if ($strLinkText != '')
                return sprintf('<a href="%s">%s</a>', $strLink, $strLinkText);
            else
                return $strLink;
        }

        public static function LanguageList($strLinkText = '') {
            $strLink = sprintf('languages.php?l=%s', QApplication::$TargetLanguage->LanguageCode);
            if ($strLinkText != '')
                return sprintf('<a href="%s">%s</a>', $strLink, $strLinkText);
            else
                return $strLink;
        }

        public static function UserRegister($strLinkText = '') {
            $strLink = sprintf('join.php?l=%s', QApplication::$TargetLanguage->LanguageCode);
            if ($strLinkText != '')
                return sprintf('<a href="%s">%s</a>', $strLink, $strLinkText);
            else
                return $strLink;
        }

        public static function UserLogin($strLinkText = '') {
            $strLink = sprintf('login.php?l=%s', QApplication::$TargetLanguage->LanguageCode);
            if ($strLinkText != '')
                return sprintf('<a href="%s">%s</a>', $strLink, $strLinkText);
            else
                return $strLink;
        }

        public static function UserRecoverPassword($strLinkText = '') {
            $strLink = sprintf('password.php?l=%s', QApplication::$TargetLanguage->LanguageCode);
            if ($strLinkText != '')
                return sprintf('<a href="%s">%s</a>', $strLink, $strLinkText);
            else
                return $strLink;
        }

        public static function LanguageEdit($intLanguageId = null, $strLinkText = '') {
            $strLink = sprintf('language_edit.php?l=%s&lid=%d', QApplication::$TargetLanguage->LanguageCode, $intLanguageId);
            if ($strLinkText != '')
                return sprintf('<a href="%s">%s</a>', $strLink, $strLinkText);
            else
                return $strLink;
        }

        public static function UserList($strSearch = '', $strLinkText = '') {
            $strLink = sprintf('users.php?l=%s&s=%s', QApplication::$TargetLanguage->LanguageCode, $strSearch);
            if ($strLinkText != '')
                return sprintf('<a href="%s">%s</a>', $strLink, $strLinkText);
            else
                return $strLink;
        }
        
        public static function Log($strSearch = '', $strLinkText = '') {
            $strLink = sprintf('log.php?l=%s&s=%s', QApplication::$TargetLanguage->LanguageCode, $strSearch);
            if ($strLinkText != '')
                return sprintf('<a href="%s">%s</a>', $strLink, $strLinkText);
            else
                return $strLink;
        }

    }
?>