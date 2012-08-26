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

    require_once(dirname(__FILE__) . '/../configuration/prepend.inc.php');

    if (!isset($argv)) exit;
    QFirebug::setEnabled(false);

    if (array_search('--help', $argv) !== false) {
        echo
            sprintf(
                    "php %s [options]\n" .
        			"--project                    project id instead of exporting all projects\n" .
        			"--language                   language code instead of importing all languages\n" .
                    "--disable-plugins            disable plugins during import/export\n" .
                    "                             suggestions, optional, defaults to anonymous\n" .
                    "--exported-suggestion        1 for approved,\n" .
                    "                             2 - approved, then most voted,\n" .
                    "                             3 - approved, then most recent,\n" .
                    "                             4 - approved, most voted, most recent,\n" .
                    "                             5 - approved, my suggestion\n" .
                    "--skip-untranslated          skip lines that don't have translated texts\n",
                basename(__FILE__),
                NarroLanguage::SOURCE_LANGUAGE_CODE
            )
        ;
        exit();
    }

    foreach(NarroProject::LoadArrayByActive(1) as $objProject) {
        if (in_array('--project', $argv) && $objProject->ProjectId != $argv[array_search('--project', $argv)+1]) continue;
        
        foreach(NarroLanguage::LoadAllActive() as $objLanguage) {
            if (in_array('--language', $argv) && $objLanguage->LanguageCode != $argv[array_search('--language', $argv)+1]) continue;
            QApplication::$TargetLanguage = $objLanguage;

            $objProjectProgress = NarroProjectProgress::LoadByProjectIdLanguageId($objProject->ProjectId, $objLanguage->LanguageId);

            if (!$objProjectProgress || $objProjectProgress->Active) {
                try {
                    $objNarroImporter = new NarroProjectImporter();
                    $objNarroImporter->SkipUntranslated = (bool) array_search('--skip-untranslated', $argv);
                    NarroPluginHandler::$blnEnablePlugins = !(bool) array_search('--disable-plugins', $argv);
    
                    if (array_search('--exported-suggestion', $argv))
                        $objNarroImporter->ExportedSuggestion = $argv[array_search('--exported-suggestion', $argv)+1];
    
                    $strSourceLanguage = NarroLanguage::SOURCE_LANGUAGE_CODE;
    
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
                    $objNarroImporter->TemplatePath = $objNarroImporter->Project->DefaultTemplatePath;
                    $objNarroImporter->TranslationPath = $objNarroImporter->Project->DefaultTranslationPath;

                    $intPid = NarroUtils::IsProcessRunning('export', $objNarroImporter->Project->ProjectId);

                    if ($intPid && $intPid <> getmypid())
                        NarroLogger::LogInfo(sprintf('An export process is already running for this project with pid %d', $intPid));

                    $strProcPidFile = __TMP_PATH__ . '/' . $objNarroImporter->Project->ProjectId . '-' . $objNarroImporter->TargetLanguage->LanguageCode . '-export-process.pid';
                    if (file_exists($strProcPidFile))
                        unlink($strProcPidFile);

                    file_put_contents($strProcPidFile, getmypid());
                    chmod($strProcPidFile, 0666);

                    $objNarroImporter->ExportProject();
                    
                    unlink($strProcPidFile);
                }
                catch (Exception $objEx) {
                    printf("\n%s: %s\n", $objEx->getMessage(), $objEx->getTraceAsString());
                    NarroLogger::LogError(sprintf('An error occurred during export: %s', $objEx->getMessage()));
                    continue;
                }
            }
        }
    }
    
    $objDateSpan = new QDateTimeSpan(time() - $intStartTime);
    printf("Export started %s ago, finished in %d seconds\n", $objDateSpan->SimpleDisplay(), time() - $intStartTime);
    NarroLogger::LogInfo(sprintf('Export started %s ago, finished in %d seconds', $objDateSpan->SimpleDisplay(), time() - $intStartTime));
    