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

    require_once(dirname(__FILE__) . '/../../../configuration/prepend.inc.php');

    NarroLogger::LogInfo(sprintf('Starting %s with parameters "%s"', basename(__FILE__), join(' ', $argv)));

    if (!isset($argv[2])) {
        echo
            sprintf(
                    "php %s [--import|--export] [options]\n" .
                    "--import                     import a project\n" .
                    "--export                     export a project\n" .
                    "--project                    project id from the database\n" .
                    "--template-lang              language code for the original texts, optional, defaults to %s\n" .
                    "--translation-lang           language code for the translations\n" .
                    "--template-directory         the directory that holds the original texts" .
                    "--translation-directory      the directory that holds the translations" .
                    "--user                       user id that will be used for the added\n" .
                    "--disable-plugins            disable plugins during import/export\n" .
                    "                             suggestions, optional, defaults to anonymous\n" .
                    "--exported-suggestion        1 for approved,\n" .
                    "                             2 - approved, then most voted,\n" .
                    "                             3 - approved, then most recent,\n" .
                    "                             4 approved, most voted, most recent,\n" .
                    "                             5 approved, my suggestion\n" .
                    "                             6 approved, then most recent from a list of authors\n" .
                    "--export-author-list         comma separated list of author usernames for option 6\n" .
                    "--do-not-deactivate-contexts do not deactivate project contexts before\n" .
                    "                             importing\n" .
                    "--do-not-check-equal         don't check if the translation is equal to the original\n" .
                    "                             text and don't import it\n" .
                    "--skip-untranslated          skip likes that don't have translated texts\n" .
                    "--approve                    approve the imported suggestions\n" .
                    "--approve-already-approved   overwrite translations approved in Narro\n" .
                    "--import-unchanged-files     import files marked unchanged after the last import\n" .
                    "--only-suggestions           import only suggestions, don't add files, texts\n" .
                    "                             or contexts\n" .
                    "--no-suggestions             do not import suggestions\n",
                basename(__FILE__),
                NarroLanguage::SOURCE_LANGUAGE_CODE
            )
        ;
        exit();
    }

    if (in_array('--import', $argv)) {

        $objNarroImporter = new NarroProjectImporter();

        /**
         * Get boolean options
         */
        $objNarroImporter->CheckEqual = !(bool) array_search('--do-not-check-equal', $argv);
        $objNarroImporter->ImportSuggestions = !(bool) array_search('--no-suggestions', $argv);
        $objNarroImporter->Approve = (bool) array_search('--approve', $argv);
        $objNarroImporter->ApproveAlreadyApproved = (bool) array_search('--approve-already-approved', $argv);
        $objNarroImporter->OnlySuggestions = (bool) array_search('--only-suggestions', $argv);
        $objNarroImporter->ImportUnchangedFiles = (bool) array_search('--import-unchanged-files', $argv);
        NarroPluginHandler::$blnEnablePlugins = !(bool) array_search('--disable-plugins', $argv);
        if (!NarroPluginHandler::$blnEnablePlugins)
            NarroLogger::LogInfo('Plugins deactivated');

        /**
         * Get specific options
         */
        if (array_search('--project', $argv) !== false)
            $intProjectId = $argv[array_search('--project', $argv)+1];

        if (array_search('--template-lang', $argv) !== false)
            $strSourceLanguage = $argv[array_search('--template-lang', $argv)+1];
        else
            $strSourceLanguage = NarroLanguage::SOURCE_LANGUAGE_CODE;

        if (array_search('--translation-lang', $argv) !== false)
            $strTargetLanguage = $argv[array_search('--translation-lang', $argv)+1];

        if (array_search('--user', $argv) !== false)
            $intUserId = $argv[array_search('--user', $argv)+1];


        /**
         * Load the specified user or the anonymous user if unspecified
         */
        $objUser = NarroUser::LoadByUserId($intUserId);
        if (!$objUser instanceof NarroUser) {
            NarroLogger::LogInfo(sprintf('User id=%s does not exist in the database, will try to use the anonymous user.', $intUserId));
            $objUser = NarroUser::LoadAnonymousUser();
            if (!$objUser instanceof NarroUser) {
                NarroLogger::LogInfo(sprintf('The anonymous user id=%s does not exist in the database.', $intUserId));
                return false;
            }
        }

        QApplication::$User = $objUser;

        /**
         * Load the specified project
         */
        $objProject = NarroProject::Load($intProjectId);
        if (!$objProject instanceof NarroProject) {
            NarroLogger::LogInfo(sprintf('Project with id=%s does not exist in the database.', $intProjectId));
            return false;
        }

        /**
         * Load the specified target language
         */
        $objLanguage = NarroLanguage::LoadByLanguageCode($strTargetLanguage);
        if (!$objLanguage instanceof NarroLanguage) {
            NarroLogger::LogInfo(sprintf('Language %s does not exist in the database.', $strTargetLanguage));
            return false;
        }

        QApplication::$TargetLanguage = $objLanguage;

        $objNarroImporter->TargetLanguage = $objLanguage;

        NarroLogger::LogInfo(sprintf('Target language is %s', $objNarroImporter->TargetLanguage->LanguageName));

        /**
         * Load the specified source language
         */
        $objNarroImporter->SourceLanguage = NarroLanguage::LoadByLanguageCode($strSourceLanguage);
        if (!$objNarroImporter->SourceLanguage instanceof NarroLanguage) {
            NarroLogger::LogInfo(sprintf('Language %s does not exist in the database.', $strSourceLanguage));
            return false;
        }

        NarroLogger::LogInfo(sprintf('Source language is %s', $objNarroImporter->SourceLanguage->LanguageName));

        $objNarroImporter->Project = $objProject;
        $objNarroImporter->User = $objUser;

        if (array_search('--template-directory', $argv) !== false)
            $objNarroImporter->TemplatePath = $argv[array_search('--template-directory', $argv)+1];
        else
            $objNarroImporter->TemplatePath = $objNarroImporter->Project->DefaultTemplatePath;

        if (array_search('--translation-directory', $argv) !== false)
            $objNarroImporter->TranslationPath = $argv[array_search('--translation-directory', $argv)+1];
        else
            $objNarroImporter->TranslationPath = $objNarroImporter->Project->DefaultTranslationPath;

        try {
            $intPid = NarroUtils::IsProcessRunning('import', $objNarroImporter->Project->ProjectId);

            if ($intPid && $intPid <> getmypid())
                throw new Exception(sprintf('An import process is already running for this project with pid %d', $intPid));

            $strProcPidFile = __TMP_PATH__ . '/' . $objNarroImporter->Project->ProjectId . '-' . $objNarroImporter->TargetLanguage->LanguageCode . '-import-process.pid';
            if (file_exists($strProcPidFile))
                unlink($strProcPidFile);

            file_put_contents($strProcPidFile, getmypid());
            chmod($strProcPidFile, 0666);

            $blnResult = $objNarroImporter->ImportProject();
        }
        catch (Exception $objEx) {
            NarroLogger::LogError(sprintf('An error occurred during import: %s', $objEx->getMessage()));
            exit();
        }

        if ($blnResult)
        foreach(NarroImportStatistics::$arrStatistics as $strName=>$strValue) {
            if ($strName == 'Start time')
                $strValue = date('Y-m-d H:i:s', $strValue);

            if ($strName == 'End time')
                $strValue = date('Y-m-d H:i:s', $strValue);

            if ($strValue != 0)
                NarroLogger::LogInfo(stripslashes($strName) . ': ' . $strValue);
        }
     }
     elseif (in_array('--export', $argv)) {

        $objNarroImporter = new NarroProjectImporter();
        $objNarroImporter->SkipUntranslated = (bool) array_search('--skip-untranslated', $argv);
        NarroPluginHandler::$blnEnablePlugins = !(bool) array_search('--disable-plugins', $argv);
        if (!NarroPluginHandler::$blnEnablePlugins)
            NarroLogger::LogInfo('Plugins deactivated');

        if (array_search('--exported-suggestion', $argv))
            $objNarroImporter->ExportedSuggestion = $argv[array_search('--exported-suggestion', $argv)+1];

        if (array_search('--export-author-list', $argv) !== false)
            $objNarroImporter->ExportAuthorList = $argv[array_search('--export-author-list', $argv)+1];

        if (array_search('--project', $argv) !== false)
            $intProjectId = $argv[array_search('--project', $argv)+1];

        if (array_search('--template-lang', $argv) !== false)
            $strSourceLanguage = $argv[array_search('--template-lang', $argv)+1];
        else
            $strSourceLanguage = NarroLanguage::SOURCE_LANGUAGE_CODE;

        if (array_search('--translation-lang', $argv) !== false)
            $strTargetLanguage = $argv[array_search('--translation-lang', $argv)+1];

        if (array_search('--user', $argv) !== false)
            $intUserId = $argv[array_search('--user', $argv)+1];

        $objUser = NarroUser::LoadByUserId($intUserId);
        if (!$objUser instanceof NarroUser) {
            NarroLogger::LogInfo(sprintf('User id=%s does not exist in the database, will try to use the anonymous user.', $intUserId));
            $objUser = NarroUser::LoadAnonymousUser();
            if (!$objUser instanceof NarroUser) {
                NarroLogger::LogInfo(sprintf('The anonymous user id=%s does not exist in the database.', $intUserId));
                return false;
            }
        }

        QApplication::$User = $objUser;

        $objProject = NarroProject::Load($intProjectId);
        if (!$objProject instanceof NarroProject) {
            NarroLogger::LogInfo(sprintf('Project with id=%s does not exist in the database.', $intProjectId));
            return false;
        }

        $objLanguage = NarroLanguage::LoadByLanguageCode($strTargetLanguage);
        if (!$objLanguage instanceof NarroLanguage) {
            NarroLogger::LogInfo(sprintf('Language %s does not exist in the database.', $strTargetLanguage));
            return false;
        }

        QApplication::$TargetLanguage = $objLanguage;

        $objNarroImporter->TargetLanguage = $objLanguage;

        NarroLogger::LogInfo(sprintf('Target language is %s', $objNarroImporter->TargetLanguage->LanguageName));

        $objNarroImporter->SourceLanguage = NarroLanguage::LoadByLanguageCode($strSourceLanguage);
        if (!$objNarroImporter->SourceLanguage instanceof NarroLanguage) {
            NarroLogger::LogInfo(sprintf('Language %s does not exist in the database.', $strSourceLanguage));
            return false;
        }

        NarroLogger::LogInfo(sprintf('Source language is %s', $objNarroImporter->SourceLanguage->LanguageName));

        $objNarroImporter->Project = $objProject;
        $objNarroImporter->User = $objUser;
        if (array_search('--template-directory', $argv) !== false)
            $objNarroImporter->TemplatePath = $argv[array_search('--template-directory', $argv)+1];
        else
            $objNarroImporter->TemplatePath = $objNarroImporter->Project->DefaultTemplatePath;

        if (array_search('--translation-directory', $argv) !== false)
            $objNarroImporter->TranslationPath = $argv[array_search('--translation-directory', $argv)+1];
        else
            $objNarroImporter->TranslationPath = $objNarroImporter->Project->DefaultTranslationPath;

        try {
            $intPid = NarroUtils::IsProcessRunning('export', $objNarroImporter->Project->ProjectId);

            if ($intPid && $intPid <> getmypid())
                NarroLogger::LogInfo(sprintf('An export process is already running for this project with pid %d', $intPid));

            $strProcPidFile = __TMP_PATH__ . '/' . $objNarroImporter->Project->ProjectId . '-' . $objNarroImporter->TargetLanguage->LanguageCode . '-export-process.pid';
            if (file_exists($strProcPidFile))
                unlink($strProcPidFile);

            file_put_contents($strProcPidFile, getmypid());
            chmod($strProcPidFile, 0666);

            $objNarroImporter->ExportProject();
        }
        catch (Exception $objEx) {
            NarroLogger::LogError(sprintf('An error occurred during export: %s', $objEx->getMessage()));
            exit();
        }

     }


?>
