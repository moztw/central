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

    require_once(dirname(__FILE__) . '/../../prepend.inc.php');

    if (!isset($argv[2])) {
        echo
            sprintf(
                    "php %s [--import|--export] [options]\n" .
                    "--import                     import a project\n" .
                    "--export                     export a project\n" .
                    "--minloglevel                minimum level of errors logged, 1 gives the most\n".
                    "                             information\n" .
                    "--project                    project id from the database\n" .
                    "--source-lang                source language code, optional, defaults to en-US\n" .
                    "--target-lang                target language code\n" .
                    "--user                       user id that will be used for the added\n" .
                    "                             suggestions, optional, defaults to anonymous\n" .
                    "--exported-suggestion        1 for approved,\n" .
                    "                             2 - approved, then most voted,\n" .
                    "                             3 - approved, then most recent,\n" .
                    "                             4 approved, most voted, most recent,\n" .
                    "                             5 approved, my suggestion\n" .
                    "--force                      run the operation even if a previous operation is\n" .
                    "                             reported to be running\n" .
                    "--do-not-deactivate-files    do not deactivate project files before importing\n" .
                    "--do-not-deactivate-contexts do not deactivate project contexts before\n" .
                    "                             importing\n" .
                    "--check-equal                check if the translation is equal to the original\n" .
                    "                             text and don't import it\n" .
                    "--approve                    approve the imported suggestions\n" .
                    "--copy-unhandled-files       copy unhandled files when exporting\n" .
                    "--only-suggestions           import only suggestions, don't add files, texts\n" .
                    "                             or contexts\n",
                basename(__FILE__)
            )
        ;
        exit();
    }

    if (in_array('--import', $argv)) {

        $objNarroImporter = new NarroProjectImporter();

        NarroLog::$blnEchoOutput = false;

        /**
         * Get boolean options
         */
        $objNarroImporter->DeactivateFiles = !((bool) array_search('--do-not-deactivate-files', $argv));
        $objNarroImporter->DeactivateContexts = !((bool) array_search('--do-not-deactivate-contexts', $argv));
        $objNarroImporter->CheckEqual = (bool) array_search('--check-equal', $argv);
        $objNarroImporter->Approve = (bool) array_search('--approve', $argv);
        $objNarroImporter->OnlySuggestions = (bool) array_search('--only-suggestions', $argv);

        /**
         * Get specific options
         */
        if (array_search('--minloglevel', $argv))
            NarroLog::$intMinLogLevel = $argv[array_search('--minloglevel', $argv)+1];

        if (array_search('--project', $argv) !== false)
            $intProjectId = $argv[array_search('--project', $argv)+1];

        if (array_search('--source-lang', $argv) !== false)
            $strSourceLanguage = $argv[array_search('--source-lang', $argv)+1];
        else
            $strSourceLanguage = 'en-US';

        if (array_search('--target-lang', $argv) !== false)
            $strTargetLanguage = $argv[array_search('--target-lang', $argv)+1];

        if (array_search('--user', $argv) !== false)
            $intUserId = $argv[array_search('--user', $argv)+1];

        /**
         * Load the specified user or the anonymous user if unspecified
         */
        $objUser = NarroUser::LoadByUserId($intUserId);
        if (!$objUser instanceof NarroUser) {
            NarroLog::LogMessage(2, sprintf('User id=%s does not exist in the database, will try to use the anonymous user.', $intUserId));
            $objUser = NarroUser::LoadAnonymousUser();
            if (!$objUser instanceof NarroUser) {
                NarroLog::LogMessage(3, sprintf('The anonymous user id=%s does not exist in the database.', $intUserId));
                return false;
            }
        }

        NarroApp::$User = $objUser;

        /**
         * Load the specified project
         */
        $objProject = NarroProject::Load($intProjectId);
        if (!$objProject instanceof NarroProject) {
            NarroLog::LogMessage(3, sprintf('Project with id=%s does not exist in the database.', $intProjectId));
            return false;
        }

        /**
         * Load the specified target language
         */
        $objLanguage = NarroLanguage::LoadByLanguageCode($strTargetLanguage);
        if (!$objLanguage instanceof NarroLanguage) {
            NarroLog::LogMessage(3, sprintf('Language %s does not exist in the database.', $strTargetLanguage));
            return false;
        }

        NarroApp::$Language = $objLanguage;

        $objNarroImporter->TargetLanguage = $objLanguage;

        NarroLog::LogMessage(3, sprintf('Target language is %s', $objNarroImporter->TargetLanguage->LanguageName));

        /**
         * Load the specified source language
         */
        $objNarroImporter->SourceLanguage = NarroLanguage::LoadByLanguageCode($strSourceLanguage);
        if (!$objNarroImporter->SourceLanguage instanceof NarroLanguage) {
            NarroLog::LogMessage(3, sprintf('Language %s does not exist in the database.', $strSourceLanguage));
            return false;
        }

        NarroLog::LogMessage(3, sprintf('Source language is %s', $objNarroImporter->SourceLanguage->LanguageName));

        $objNarroImporter->Project = $objProject;
        $objNarroImporter->User = $objUser;

        if (in_array('--force', $argv)) {
            $objNarroImporter->CleanImportDirectory();
        }



        try {
            $objNarroImporter->TranslationPath = __DOCROOT__ . __SUBDIRECTORY__ . __IMPORT_PATH__ . '/' . $objNarroImporter->Project->ProjectId . '/' . $objNarroImporter->TargetLanguage->LanguageCode;
            $objNarroImporter->TemplatePath = __DOCROOT__ . __SUBDIRECTORY__ . __IMPORT_PATH__ . '/' . $objNarroImporter->Project->ProjectId . '/' . $objNarroImporter->SourceLanguage->LanguageCode;
            NarroLog::SetLogFile($objNarroImporter->Project->ProjectId . '-' . $objNarroImporter->TargetLanguage->LanguageCode . '-import.log');
            $intPid = NarroUtils::IsProcessRunning('import', $objNarroImporter->Project->ProjectId);

            if ($intPid && $intPid <> getmypid())
                throw new Exception(sprintf('An import process is already for this project with pid %d', $intPid));

            $objNarroImporter->ImportProject();
        }
        catch (Exception $objEx) {
            NarroLog::LogMessage(3, sprintf('An error occured during import: %s', $objEx->getMessage()));
            $objNarroImporter->CleanImportDirectory();
            exit();
        }

        $objNarroImporter->CleanImportDirectory();
        NarroLog::LogMessage(2, var_export(NarroImportStatistics::$arrStatistics, true));
     }
     elseif (in_array('--export', $argv)) {

        $objNarroImporter = new NarroProjectImporter();
        NarroLog::$blnEchoOutput = false;

        if (array_search('--minloglevel', $argv))
            NarroLog::$intMinLogLevel = $argv[array_search('--minloglevel', $argv)+1];

        if (array_search('--exported-suggestion', $argv))
            $objNarroImporter->ExportedSuggestion = $argv[array_search('--exported-suggestion', $argv)+1];

        if (array_search('--project', $argv) !== false)
            $intProjectId = $argv[array_search('--project', $argv)+1];

        if (array_search('--source-lang', $argv) !== false)
            $strSourceLanguage = $argv[array_search('--source-lang', $argv)+1];
        else
            $strSourceLanguage = 'en-US';

        if (array_search('--target-lang', $argv) !== false)
            $strTargetLanguage = $argv[array_search('--target-lang', $argv)+1];

        if (array_search('--user', $argv) !== false)
            $intUserId = $argv[array_search('--user', $argv)+1];

        $objUser = NarroUser::LoadByUserId($intUserId);
        if (!$objUser instanceof NarroUser) {
            NarroLog::LogMessage(2, sprintf('User id=%s does not exist in the database, will try to use the anonymous user.', $intUserId));
            $objUser = NarroUser::LoadAnonymousUser();
            if (!$objUser instanceof NarroUser) {
                NarroLog::LogMessage(3, sprintf('The anonymous user id=%s does not exist in the database.', $intUserId));
                return false;
            }
        }

        NarroApp::$User = $objUser;

        $objProject = NarroProject::Load($intProjectId);
        if (!$objProject instanceof NarroProject) {
            NarroLog::LogMessage(3, sprintf('Project with id=%s does not exist in the database.', $intProjectId));
            return false;
        }

        $objLanguage = NarroLanguage::LoadByLanguageCode($strTargetLanguage);
        if (!$objLanguage instanceof NarroLanguage) {
            NarroLog::LogMessage(3, sprintf('Language %s does not exist in the database.', $strTargetLanguage));
            return false;
        }

        NarroApp::$Language = $objLanguage;

        $objNarroImporter->TargetLanguage = $objLanguage;

        NarroLog::LogMessage(3, sprintf('Target language is %s', $objNarroImporter->TargetLanguage->LanguageName));

        $objNarroImporter->SourceLanguage = NarroLanguage::LoadByLanguageCode($strSourceLanguage);
        if (!$objNarroImporter->SourceLanguage instanceof NarroLanguage) {
            NarroLog::LogMessage(3, sprintf('Language %s does not exist in the database.', $strSourceLanguage));
            return false;
        }

        NarroLog::LogMessage(3, sprintf('Source language is %s', $objNarroImporter->SourceLanguage->LanguageName));

        $objNarroImporter->Project = $objProject;
        $objNarroImporter->User = $objUser;
        $objNarroImporter->CopyUnhandledFiles = !((bool) array_search('--copy-unhandled-files', $argv));

        if (in_array('--force', $argv)) {
            $objNarroImporter->CleanExportDirectory();
        }

        try {
            $objNarroImporter->TranslationPath = __DOCROOT__ . __SUBDIRECTORY__ . __IMPORT_PATH__ . '/' . $objNarroImporter->Project->ProjectId . '/' . $objNarroImporter->TargetLanguage->LanguageCode;
            $objNarroImporter->TemplatePath = __DOCROOT__ . __SUBDIRECTORY__ . __IMPORT_PATH__ . '/' . $objNarroImporter->Project->ProjectId . '/' . $objNarroImporter->SourceLanguage->LanguageCode;
            NarroLog::SetLogFile($objNarroImporter->Project->ProjectId . '-' . $objNarroImporter->TargetLanguage->LanguageCode . '-export.log');
            $intPid = NarroUtils::IsProcessRunning('export', $objNarroImporter->Project->ProjectId);

            if ($intPid && $intPid <> getmypid())
                throw new Exception(sprintf('An export process is already for this project with pid %d', $intPid));

            $objNarroImporter->ExportProject();
        }
        catch (Exception $objEx) {
            NarroLog::LogMessage(3, sprintf('An error occured during export: %s', $objEx->getMessage()));
            $objNarroImporter->CleanExportDirectory();
            exit();
        }

        $objNarroImporter->CleanExportDirectory();
        NarroLog::LogMessage(2, var_export(NarroImportStatistics::$arrStatistics, true));

     }


?>
