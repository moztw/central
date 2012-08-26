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

    if (isset($_REQUEST['p']) && isset($_REQUEST['pn']) && isset($_REQUEST['l'])) {
        require_once(dirname(__FILE__) . '/../../../configuration/configuration.narro.inc.php');
        $strFullPath = sprintf('%s/%d/%s-%s.xpi', __IMPORT_PATH__, $_REQUEST['p'], $_REQUEST['pn'], $_REQUEST['l']);
        // File Exists?
        if( file_exists($strFullPath)) {
            header("Pragma: public"); // required
            header("Expires: 0");
            header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
            header("Cache-Control: private",false); // required for certain browsers
            header("Content-Type: application/zip");
            header("Content-Disposition: attachment; filename=\"" . basename($strFullPath) . "\";" );
            header("Content-Transfer-Encoding: binary");
            header("Content-Length: " . filesize($strFullPath));
            ob_clean();
            flush();
            readfile($strFullPath);
            exit;
        } elseif (!defined('__PREPEND_INCLUDED__'))
            exit;
    }


    class NarroMozillaBuild extends NarroPlugin {
        public static $arrBrowserDirList = array(
            'dom',
            'netwerk',
            'security',
            'services',
            'toolkit'
        );
        
        public static $arrMailDirList = array(
            'editor',
            'mail'
        );
        
        public static $arrMobileDirList = array(
            'mobile',
            'embedding'
        );
        
        public static $arrCalendarDirList = array(
            'calendar'
        );
        
        protected $strRepoUrl;
        protected $strReleaseName;
        protected $strHgDir;
        protected $strObjDir;
        protected $strApplicationType;
        protected $blnEnable = false;
        protected $objFirefoxProject;
        protected $objMailProject;

        public function __construct() {
            parent::__construct();
            $this->strName = t('Mozilla build system (en-US sources, XPI generation, Compare Locales)');
            $this->blnEnable = $this->blnEnable;
            $this->Enable();
            
            if ($this->blnEnable) {
                NarroProject::RegisterPreference('Mozilla repository to build from', true, NarroProjectType::Mozilla, 'text', 'e.g. http://hg.mozilla.org/releases/mozilla-aurora/', '');
                NarroProject::RegisterPreference('Mozilla application type', true, NarroProjectType::Mozilla, 'option', '', '', array('browser', 'mail', 'suite', 'calendar', 'mobile'));
                NarroProject::RegisterPreference('Mozilla release name', true, NarroProjectType::Mozilla, 'text', 'leave empty for central', '');
                NarroProject::RegisterPreference('Firefox project name for this release', true, NarroProjectType::Mozilla, 'text', 'leave empty for Firefox, if this project would be Thunderbird Aurora, fill in the name of the Narro project that holds Firefox Aurora', '');
                NarroProject::RegisterPreference('Thunderbird project name for this release', true, NarroProjectType::Mozilla, 'text', 'leave empty for Thunderbird and Firefox, if this project would be Seamonkey Aurora, fill in the name of the Narro project that holds Thunderbird Aurora', '');
                NarroProject::RegisterPreference('Build a language pack after export', true, NarroProjectType::Mozilla, 'option', t('Whether to build a language pack after the export process'), 'Yes', array('Yes', 'No'));
            }
            
        }
        
        private function SetupProject(NarroProject $objProject) {
            $this->strRepoUrl = $objProject->GetPreferenceValueByName('Mozilla repository to build from');
            NarroLogger::LogInfo(sprintf('Mozilla repository to build from %s', $this->strRepoUrl));
            
            $this->strReleaseName = $objProject->GetPreferenceValueByName('Mozilla release name');
            NarroLogger::LogInfo(sprintf('Mozilla release name %s', $this->strReleaseName));
            
            $this->strApplicationType = $objProject->GetPreferenceValueByName('Mozilla application type');
            NarroLogger::LogInfo(sprintf('Mozilla application type %s', $this->strApplicationType));
            
            $this->strHgDir = sprintf('%s/project-%d-hg', __NARRO_DATA__ . '/mozilla-build', $objProject->ProjectId);
            NarroLogger::LogInfo(sprintf('Clone directory %s', $this->strHgDir));
            
            $this->strObjDir = sprintf('%s/project-%d-obj', __NARRO_DATA__ . '/mozilla-build', $objProject->ProjectId);
            NarroLogger::LogInfo(sprintf('Build directory %s', $this->strObjDir));
            
            $this->objFirefoxProject = NarroProject::LoadByProjectName($objProject->GetPreferenceValueByName('Firefox project name for this release'));
            if ($this->objFirefoxProject instanceof NarroProject)
                NarroLogger::LogInfo(sprintf('Firefox project name for this release %s', $this->objFirefoxProject->ProjectName));
            
            $this->objMailProject = NarroProject::LoadByProjectName($objProject->GetPreferenceValueByName('Thunderbird project name for this release'));
            if ($this->objMailProject instanceof NarroProject)
                NarroLogger::LogInfo(sprintf('Thunderbird project name for this release %s', $this->objMailProject->ProjectName));
            
            if (!file_exists(__NARRO_DATA__ . '/mozilla-build'))
                mkdir(__NARRO_DATA__ . '/mozilla-build', 0777);
            
            chmod(__NARRO_DATA__ . '/mozilla-build', 0777);
        }
        
        private function InitBuildDirectory(NarroProject $objProject) {
            NarroLogger::LogInfo(sprintf('Running hg clone %s %s', $this->strRepoUrl, $this->strHgDir));
            NarroUtils::Exec(
                sprintf('hg clone %s %s', escapeshellarg($this->strRepoUrl), escapeshellarg($this->strHgDir)),
                $arrOutput,
                $arrError,
                $intRetVal,
                false,
                array(
                	'PYTHONPATH' => sprintf('%s/compare-locales/lib', $this->strObjDir)
                ),
                __TMP_PATH__,
                true
            );
            
            if ($retVal != 0) {
                NarroLogger::LogError(sprintf('Cloning the Mercurial repository failed: %d', $retVal));
                return false;
            }
            
            mkdir($this->strObjDir, 0777);
            mkdir(sprintf('%s/dist', $this->strObjDir), 0777);
            mkdir(sprintf('%s/dist/install', $this->strObjDir), 0777);
            mkdir(sprintf('%s/dist/xpi-stage', $this->strObjDir), 0777);
        }
        
        private function parse_l10n_ini_file($strHgDir, $strFilePath) {
            if (!file_exists($strHgDir . '/' . $strFilePath)) return array();
            $strL10nIni = preg_replace('/^#.*$/m', '', file_get_contents($strHgDir . '/' . $strFilePath));
            $blnIncludes = preg_match_all('/ = (.+\/l10n.ini)/mi', $strL10nIni, $arrIniFile);
            $arrDirs = array();
        
            if ($blnIncludes)
            foreach($arrIniFile[1] as $strIniFilePath) {
                $arrNewDirs = $this->parse_l10n_ini_file($strHgDir, $strIniFilePath);
                if (count($arrNewDirs))
                $arrDirs = array_merge($arrDirs, $arrNewDirs);
            }
        
            $arrDirs = array_merge($arrDirs, $this->parse_l10n_ini_file_dirs($strHgDir, $strFilePath));
        
            return $arrDirs;
        }
        
        private function parse_l10n_ini_file_dirs($strHgDir, $strL10nIniFilePath) {
            if (!file_exists($strHgDir . '/' . $strL10nIniFilePath)) return array();
            $arrResult = array();
            preg_match_all('/dirs = ([^\[]+)/i', preg_replace('/^#.*$/m', '', file_get_contents($strHgDir . '/' . $strL10nIniFilePath)), $arrDirsToInclude);
            foreach($arrDirsToInclude[1] as $strDirToInclude) {
                foreach(preg_split("/[$\s]/", $strDirToInclude) as $strSingleDirToInclude) {
                    if (trim($strSingleDirToInclude)) {
                        $arrResult[] = trim($strSingleDirToInclude);
                    }
                }
            }
        
            return $arrResult;
        }
        
        private function get_l10n_ini_dirs($strHgDir, $strApp) {
            $strL10nIniPath =  $strApp . '/locales/l10n' . (($this->strReleaseName)?'-' . $this->strReleaseName:'') . '.ini';
            if (!file_exists($strL10nIniPath))
                $strL10nIniPath =  $strApp . '/locales/l10n.ini';
                
            $arrResult = array();
            foreach($this->parse_l10n_ini_file($strHgDir, $strL10nIniPath) as $strDir) {
                if ($strDir == '') continue;
                if (file_exists($strHgDir . '/' . $strDir . '/locales/en-US'))
                    $arrResult[$strDir . '/locales/en-US'] = str_replace('mozilla/', '', $strDir);
                elseif (file_exists($strHgDir . '/mozilla/'  . $strDir . '/locales/en-US'))
                    $arrResult['mozilla/' . $strDir . '/locales/en-US'] = str_replace('mozilla/', '', $strDir);
                elseif (file_exists($strHgDir . '/' . $strDir . '/resources/locale/en-US'))
                    $arrResult[$strDir . '/resources/locale/en-US'] = str_replace('mozilla/', '', $strDir);
            }
            
            return $arrResult;
        }
        
        private function UpdateBuildDirectory(NarroProject $objProject) {
            
            $blnResult = chdir($this->strHgDir);
            if ($blnResult == false)
                return false;
            
            if (file_exists('/usr/bin/autoconf-2.13')) {
                $strAutoConf = 'autoconf-2.13';
            }
            else {
                if (file_exists('/usr/bin/autoconf2.13')) {
                    $strAutoConf = 'autoconf2.13';
                }
                else {
                    NarroLogger::LogError('autoconf-2.13 or autoconf2.13 not found in /usr/bin, aborting build');
                    return false;
                }
            }
            
            if (!file_exists('/usr/bin/python') && !file_exists('/usr/bin/python2.6')) {
                NarroLogger::LogError('python or python2.6 not found in /usr/bin, aborting build');
                return false;
            }
            
            file_put_contents(
                sprintf('%s/.mozconfig', $this->strHgDir),
                sprintf("mk_add_options MOZ_OBJDIR=%s\n", $this->strObjDir) .
                "ac_add_options --disable-ogg\n" .
                sprintf("mk_add_options PYTHON=%s\n", (file_exists('/usr/bin/python2.6')?'python2.6':'python')) .
                sprintf("ac_add_options --with-l10n-base=%s/%d\n", __IMPORT_PATH__, $objProject->ProjectId) .
                "ac_add_options --disable-compile-environment\n" .
                sprintf("ac_add_options --enable-application=%s\n", $this->strApplicationType) .
                "ac_add_options --disable-libjpeg-turbo\n" .
                "ac_add_options --disable-necko-wifi\n" .
                ((in_array($this->strApplicationType, array('mail', 'suite', 'calendar')))?"ac_add_options --enable-chrome-format=jar\n":'') .
                "ac_add_options --disable-webm\n" .
                sprintf("mk_add_options AUTOCONF=%s\n", $strAutoConf) .
                sprintf("ac_cv_path_PYTHON=/usr/bin/%s\n", (file_exists('/usr/bin/python2.6')?'python2.6':'python')) .
                ((in_array($this->strApplicationType, array('suite')))?"ac_add_options --disable-mailnews\n":'')
            );
            
            if (!
                NarroUtils::Exec(
                    sprintf('hg pull %s', escapeshellarg($this->strRepoUrl)),
                    $arrOutput,
                    $arrError,
                    $intRetVal,
                    false,
                    array(),
                    $this->strHgDir,
                    true
                )
            )
                return false;
            

            if (!
                NarroUtils::Exec(
                    'hg update -C',
                    $arrOutput,
                    $arrError,
                    $intRetVal,
                    false,
                    array(),
                    escapeshellarg($this->strHgDir),
                    true
                )
            )
                return false;
            
            if (in_array($this->strApplicationType, array('suite', 'calendar', 'mail'))) {
                if (!
                    NarroUtils::Exec(
                        sprintf('/usr/bin/%s client.py checkout', (file_exists('/usr/bin/python2.6')?'python2.6':'python')),
                        $arrOutput,
                        $arrError,
                        $intRetVal,
                        false,
                        array(),
                        escapeshellarg($this->strHgDir),
                        true
                    )
                )
                    return false;
            }
            
            NarroUtils::Exec(
                'make -sf client.mk configure',
                $arrOutput,
                $arrError,
                $intRetVal,
                false,
                null,
                $this->strHgDir,
                true
            );

            
            switch($this->strApplicationType) {
                case 'browser':
                    NarroUtils::RecursiveDelete($objProject->DefaultTemplatePath . '/*');
                    foreach($this->get_l10n_ini_dirs($this->strHgDir, $this->strApplicationType) as $strBuildPath=>$strLocalePath) {
                        $strFirstDir = preg_replace('/\/.*$/', '', $strLocalePath);
                        if (!in_array($strLocalePath, array('extensions/spellcheck')))
                            NarroUtils::RecursiveCopy($strBuildPath, $objProject->DefaultTemplatePath . '/' . $strLocalePath);
                    }
                    break;
                    
                case 'mail':
                    NarroUtils::RecursiveDelete($objProject->DefaultTemplatePath . '/*');
                    foreach($this->get_l10n_ini_dirs($this->strHgDir, $this->strApplicationType) as $strBuildPath=>$strLocalePath) {
                        $strFirstDir = preg_replace('/\/.*$/', '', $strLocalePath);
                        if (!in_array($strFirstDir, self::$arrBrowserDirList) && !in_array($strLocalePath, array('extensions/spellcheck')))
                            NarroUtils::RecursiveCopy($strBuildPath, $objProject->DefaultTemplatePath . '/' . $strLocalePath);
                    }
                    break;
                    
                case 'suite':
                    NarroUtils::RecursiveDelete($objProject->DefaultTemplatePath . '/*');
                    foreach($this->get_l10n_ini_dirs($this->strHgDir, $this->strApplicationType) as $strBuildPath=>$strLocalePath) {
                        $strFirstDir = preg_replace('/\/.*$/', '', $strLocalePath);
                        if (!in_array($strFirstDir, self::$arrMailDirList) && !in_array($strFirstDir, self::$arrBrowserDirList) && !in_array($strLocalePath, array('extensions/spellcheck')))
                            NarroUtils::RecursiveCopy($strBuildPath, $objProject->DefaultTemplatePath . '/' . $strLocalePath);
                    }
                    break;
                     
                case 'calendar':
                    NarroUtils::RecursiveDelete($objProject->DefaultTemplatePath . '/*');
                    foreach($this->get_l10n_ini_dirs($this->strHgDir, $this->strApplicationType) as $strBuildPath=>$strLocalePath) {
                        $strFirstDir = preg_replace('/\/.*$/', '', $strLocalePath);
                        if (!in_array($strFirstDir, self::$arrBrowserDirList) && !in_array($strLocalePath, array('extensions/spellcheck')))
                            NarroUtils::RecursiveCopy($strBuildPath, $objProject->DefaultTemplatePath . '/' . $strLocalePath);
                    }
                    break;

                case 'mobile':
                    NarroUtils::RecursiveDelete($objProject->DefaultTemplatePath . '/*');
                    foreach($this->get_l10n_ini_dirs($this->strHgDir, $this->strApplicationType) as $strBuildPath=>$strLocalePath) {
                        $strFirstDir = preg_replace('/\/.*$/', '', $strLocalePath);
                        if (!in_array($strFirstDir, self::$arrBrowserDirList))
                            NarroUtils::RecursiveCopy($strBuildPath, $objProject->DefaultTemplatePath . '/' . $strLocalePath);
                    }
                    break;
            }
            
            NarroUtils::RecursiveChmod($objProject->DefaultTemplatePath);
        }
        
        private function CreateExportArchive(NarroProject $objProject) {
            $strArchive = __IMPORT_PATH__ . '/' . $objProject->ProjectId . '/' . $objProject->ProjectName . '-en-US.zip';
            if (file_exists($strArchive))
                unlink($strArchive);
        
            $arrFiles = NarroUtils::ListDirectory($objProject->DefaultTemplatePath, null, null, null, true);
        
            $objZipFile = new ZipArchive();
            if ($objZipFile->open($strArchive, ZipArchive::OVERWRITE) === TRUE) {
                foreach($arrFiles as $strFileName) {
                    if ($objProject->DefaultTemplatePath == $strFileName) continue;
                    if (is_dir($strFileName)) {
                        $objZipFile->addEmptyDir(str_replace($objProject->DefaultTemplatePath . '/', '', $strFileName ));
                    }
                    elseif (is_file($strFileName)) {
                        $objZipFile->addFile($strFileName, str_replace($objProject->DefaultTemplatePath . '/', '', $strFileName ));
                    }
                }
            } else {
                NarroLogger::LogError(sprintf('Failed to create a new archive %s', $strArchive));
                return false;
            }
            $objZipFile->close();
            if (file_exists($strArchive))
                chmod($strArchive, 0666);
            else {
                NarroLogger::LogError(sprintf('Failed to create an archive %s', $strArchive));
                return false;
            }
            return true;
        }
        
        
        public function BeforeImportProject(NarroProject $objProject) {
            if (!QApplication::HasPermission('Administrator')) {
                return false;
            }
            
            if ($objProject->ProjectType != NarroProjectType::Mozilla) {
                return false;
            }
            
            $this->SetupProject($objProject);
            if (!$this->strApplicationType || !$this->strHgDir || !$this->strObjDir || !$this->strRepoUrl) {
                return false;
            }
            if (!file_exists($this->strHgDir)) {
                NarroLogger::LogWarn(sprintf('Cloning an entire Mozilla repository from %s. This is going to take a while...', $this->strRepoUrl));
                $this->InitBuildDirectory($objProject);
            }
            
            $this->UpdateBuildDirectory($objProject);
            
            $this->CreateExportArchive($objProject);
            
            try {
                NarroUtils::RecursiveChmod($this->strHgDir);
                NarroUtils::RecursiveChmod($this->strObjDir);
            }
            catch (Exception $objEx) {
                NarroLogger::LogWarn($objEx->getMessage());
            }
        
            return array($objProject);
        }
        
        public function AfterExportProject(NarroProject $objProject) {
            if ($objProject->ProjectType != NarroProjectType::Mozilla) {
                return false;
            }
            
            $this->SetupProject($objProject);
            if (!$this->strApplicationType || !$this->strHgDir || !$this->strObjDir || !$this->strRepoUrl) {
                return false;
            }
            
            $blnResult = chdir($this->strObjDir . '/' . $this->strApplicationType . '/locales');
            if (!$blnResult) {
                return false;
            }
            
            if ($this->strApplicationType != 'browser') {
                if (!$this->objFirefoxProject instanceof NarroProject) {
                    NarroLogger::LogError(sprintf('Associated Firefox project not set or does not exist'));
                    return false;
                }
                NarroLogger::LogInfo(sprintf('Copying %s directories from %s', join(',', self::$arrBrowserDirList), $this->objFirefoxProject->DefaultTranslationPath));
                NarroUtils::RecursiveCopy($this->objFirefoxProject->DefaultTranslationPath, $objProject->DefaultTranslationPath);
                
                if ($this->strApplicationType == 'suite') {
                    if (!$this->objMailProject instanceof NarroProject) {
                        NarroLogger::LogError(sprintf('Associated Thunderbird project not set or does not exist'));
                        return false;
                    }
                    NarroLogger::LogInfo(sprintf('Copying %s directories from %s', join(',', self::$arrMailDirList), $this->objMailProject->DefaultTranslationPath));
                    NarroUtils::RecursiveCopy($this->objMailProject->DefaultTranslationPath, $objProject->DefaultTranslationPath);
                }
                
            }
            
            if ($objProject->GetPreferenceValueByName('Build a language pack after export') == 'Yes') {
                NarroUtils::Exec(
                    sprintf('make -s langpack-%s', escapeshellarg(QApplication::$TargetLanguage->LanguageCode)),
                    $arrOutput,
                    $arrError,
                    $intRetVal,
                    false,
                    array(
                    	'PYTHONPATH' => sprintf('%s/compare-locales/lib', $this->strObjDir)
                	),
                    $this->strObjDir . '/' . $this->strApplicationType . '/locales',
                    true
                );
            }

            if ($this->strApplicationType != 'browser') {
                foreach(self::$arrBrowserDirList as $strDir) {
                    NarroUtils::RecursiveDelete($objProject->DefaultTranslationPath . '/' . $strDir);
                }
            }
            
            if (in_array($this->strApplicationType, array('mobile', 'browser')))
                $strXpiDir = sprintf('%s/dist', $this->strObjDir);
            else
                $strXpiDir = sprintf('%s/mozilla/dist', $this->strObjDir);
            
            foreach(NarroUtils::ListDirectory($strXpiDir, sprintf('/.*%s.langpack.xpi/', preg_quote(QApplication::$TargetLanguage->LanguageCode, '/'))) as $strFile) {
                $strXpiFile = sprintf(
                	'%s/%s/%s-%s.xpi',
                    __IMPORT_PATH__,
                    $objProject->ProjectId,
                    $objProject->ProjectName,
                    QApplication::$TargetLanguage->LanguageCode
                );
                copy(
                    $strFile,
                    $strXpiFile
                );
                chmod($strXpiFile, 0666);
            }
            
            NarroUtils::RecursiveChmod($this->strHgDir);
            NarroUtils::RecursiveChmod($this->strObjDir);
            
            return array($objProject);
        }
        
        private function GetCompareLocales() {
            if (file_exists('/usr/bin/easy_install')) {
                if (!file_exists(sprintf('%s/compare-locales/lib', $this->strObjDir)))
                    mkdir(sprintf('%s/compare-locales/lib', $this->strObjDir), 0777, true);
                
                if (!
                    NarroUtils::Exec(
                        sprintf('/usr/bin/easy_install --install-dir=%s/compare-locales/lib/ -U compare-locales', $this->strObjDir),
                        $arrOutput,
                        $arrError,
                        $intRetVal,
                        false,
                        array('PYTHONPATH' => sprintf('%s/compare-locales/lib', $this->strObjDir))
                    )
                )
                    return false;
                
                return true;
            }
            else {
                NarroLogger::LogInfo('/usr/bin/easy_install not found, compare locales will not run');
                return false;
            }
        }
        
        private function CompareLocales(NarroProject $objProject) {
            $this->SetupProject($objProject);
            if (!$this->strApplicationType || !$this->strHgDir || !$this->strObjDir || !$this->strRepoUrl) {
                return false;
            }
            $blnResult = $this->GetCompareLocales();
            NarroUtils::RecursiveChmod(sprintf('%s/compare-locales', $this->strObjDir));
            if(!$blnResult)
                return false;
            
            $strCompareLocales = sprintf(
            	'%s/compare-locales/lib/compare-locales %s/%s/locales/l10n%s.ini %s/%s %s',
                $this->strObjDir,
                $this->strHgDir,
                $this->strApplicationType,
                ($this->strReleaseName && file_exists(sprintf('%s/%s/locales/l10n%s.ini', $this->strHgDir, $this->strApplicationType, '-' . $this->strReleaseName)))?'-' . $this->strReleaseName:'',
                __IMPORT_PATH__,
                $objProject->ProjectId,
                QApplication::$TargetLanguage->LanguageCode
            );
            
            if (!$strCompareLocales)
                return false;
            
            if ($this->strApplicationType != 'browser') {
                if (!$this->objFirefoxProject instanceof NarroProject) {
                    NarroLogger::LogError(sprintf('Associated Firefox project not set or does not exist'));
                    return false;
                }
                NarroLogger::LogInfo(sprintf('Copying %s directories from %s', join(',', self::$arrBrowserDirList), $this->objFirefoxProject->DefaultTranslationPath));
                NarroUtils::RecursiveCopy($this->objFirefoxProject->DefaultTranslationPath, $objProject->DefaultTranslationPath);
                
                if ($this->strApplicationType == 'suite') {
                    if (!$this->objMailProject instanceof NarroProject) {
                        NarroLogger::LogError(sprintf('Associated Thunderbird project not set or does not exist'));
                        return false;
                    }
                    NarroLogger::LogInfo(sprintf('Copying %s directories from %s', join(',', self::$arrMailDirList), $this->objMailProject->DefaultTranslationPath));
                    NarroUtils::RecursiveCopy($this->objMailProject->DefaultTranslationPath, $objProject->DefaultTranslationPath);
                }
            }
                        
            NarroUtils::Exec(
                $strCompareLocales,
                $arrOutput,
                $arrError,
                $intRetVal,
                false,
                array('PYTHONPATH' => sprintf('%s/compare-locales/lib', $this->strObjDir)),
                null,
                false
            );
            
            if ($this->strApplicationType != 'browser') {
                foreach(self::$arrBrowserDirList as $strDir) {
                    NarroUtils::RecursiveDelete($objProject->DefaultTranslationPath . '/' . $strDir);
                }
            }
            
            $strOutput = join("\n", $arrOutput);
            
            $strOutput = preg_replace(
            	'/within\s+([a-zA-Z0-9\.\-_]+)/',
        	    sprintf(
        	    	'within <a target="_blank" href="%s/translate.php?l=%s&p=%d&t=%d&in=%d&s=\1">\1</a>',
        	    	__HTTP_URL__ . __VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__,
        	    	QApplication::$TargetLanguage->LanguageCode,
                    $objProject->ProjectId,
                    NarroTranslatePanel::SHOW_ALL,
                    NarroTranslatePanel::SEARCH_IN_CONTEXTS
                ),
                $strOutput
            );
            $strOutput = preg_replace(
            	'/(\s+)\+([a-zA-Z0-9\.\-_]+)/',
            	sprintf(
            		'\1+<a target="_blank" href="%s/translate.php?l=%s&p=%d&t=%d&in=%d&s=\2">\2</a>',
            	    __HTTP_URL__ . __VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__,
        	    	QApplication::$TargetLanguage->LanguageCode,
                    $objProject->ProjectId,
                    NarroTranslatePanel::SHOW_ALL,
                    NarroTranslatePanel::SEARCH_IN_CONTEXTS
                ),
                $strOutput
            );
                                            
            $strOutput = str_replace('ERROR', '<span style="background-color:red;font-weight:bold">ERROR</span>', $strOutput);
            
            $strOutput = str_replace('WARNING', '<span style="background-color:orange;font-weight:bold">WARNING</span>', $strOutput);
            
            return $strOutput;
        }
        
        protected function GetOutputFileName(NarroProject $objProject) {
            return __IMPORT_PATH__ . '/' . $objProject->ProjectId . '/' . $objProject->ProjectName . '-' . QApplication::$TargetLanguage->LanguageCode . '.xpi';
        }
        
        public function DisplayExportMessage(NarroProject $objProject, $strText = '') {
            if ($objProject->ProjectType != NarroProjectType::Mozilla) {
                return array($objProject, '');
            }
            
            $strExportText = $this->CompareLocales($objProject);
            
            return array($objProject, '<br />' . $strExportText . '<br />' . $this->GetXpiLink($objProject));
        }
        
        private function GetXpiLink(NarroProject $objProject) {
            
            $strExportText = '';
            
            if (file_exists($this->GetOutputFileName($objProject))) {
                $strDownloadUrl = sprintf(
                    __HTTP_URL__ . __VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__ . '/includes/narro/plugins/' . __CLASS__ . '.class.php?p=%d&pn=%s&l=%s',
                    $objProject->ProjectId,
                    $objProject->ProjectName,
                    QApplication::$TargetLanguage->LanguageCode
                );
                $objDateSpan = new QDateTimeSpan(time() - filemtime($this->GetOutputFileName($objProject)));
                $strExportText = sprintf(
                    '<a href="%s">%s</a>, ' . t('generated %s ago'),
                    $strDownloadUrl ,
                    basename($this->GetOutputFileName($objProject)),
                    $objDateSpan->SimpleDisplay()
                );
            }
        
            return $strExportText;
        }
        
        public function DisplayInProjectListInProgressColumn(NarroProject $objProject, $strText = '') {
            if ($objProject->ProjectType != NarroProjectType::Mozilla) {
                return array($objProject, '');
            }
            
            return array($objProject, $this->GetXpiLink($objProject));
        }
    }
?>