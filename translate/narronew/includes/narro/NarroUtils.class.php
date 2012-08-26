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
    class NarroUtils {
        /**
         * Cleans form states older than two hours
         */
        public static function CleanStaleFormStates() {
            $arrFileList = self::ListDirectory(__FILE_FORM_STATE_HANDLER_PATH__, '/qformstate_.*/');
            if (is_array($arrFileList))
                foreach($arrFileList as $strFile) {
                    if (fileatime($strFile) < time() - 7200)
                        unlink($strFile);
                }
        }

        public static function RecursiveDelete($strFilePath) {
            if (strstr($strFilePath, '/*')) {
                $strFilePath = str_replace('/*', '', $strFilePath);
                if ($hndDir = opendir($strFilePath)) {
                    while (($strFileName = readdir($hndDir)) !== false) {
                        if ($strFileName == '.' || $strFileName == '..')
                            continue;

                        self::RecursiveDelete($strFilePath.'/'.$strFileName);
                    }
                    closedir($hndDir);
                }
                else {
                    throw new Exception(sprintf('Can\'t open directory %s for reading, maybe %s doesn\'t have execute permissions on it.', $strFilePath, get_current_user()));
                }
            }
            else {
                if (is_dir($strFilePath) && !is_link($strFilePath)) {
                    if ($hndDir = opendir($strFilePath)) {
                        while (($strFileName = readdir($hndDir)) !== false) {
                            if ($strFileName == '.' || $strFileName == '..') {
                                continue;
                            }
                            self::RecursiveDelete($strFilePath.'/'.$strFileName);
                        }
                        closedir($hndDir);
                    }
                    else {
                        throw new Exception(sprintf('Can\'t open directory %s for reading, maybe %s doesn\'t have execute permissions on it.', $strFilePath, get_current_user()));
                    }

                    if (!@rmdir($strFilePath)) {
                        if (file_exists($strFilePath . '/..') && is_writable($strFilePath . '/..'))
                            $strError = sprintf('Maybe "%s" is not empty.', realpath($strFilePath . '/..'));
                        elseif (file_exists($strFilePath . '/..') && !is_writable($strFilePath . '/..'))
                            $strError = sprintf('Parent directory, "%s", is not writable.', realpath($strFilePath . '/..'));
                        else
                            $strError = 'Unknown error.';

                        throw new Exception(sprintf('Could not delete directory %s: %s', $strFilePath, $strError));

                        return false;
                    }
                    else
                        return true;
                }

                if ((file_exists($strFilePath) || is_link($strFilePath)) && !@unlink($strFilePath)) {
                    if (!is_writable($strFilePath))
                        $strError = sprintf('"%s" is only writable by "%s".', realpath($strFilePath . '/..'), fileowner(realpath($strFilePath . '/..')));
                    else
                        $strError = 'Unknown error.';

                    throw new Exception(sprintf('Could not delete file %s: %s', $strFilePath, $strError));

                    return false;
                }
                else
                    return true;
            }
        }

        public static function Chmod($strFilePath, $intFileMode = 0666) {
            if (!@chmod($strFilePath, $intFileMode)) {
                /**
                 * If it's writable, we don't care if chmod failed, it's probably due to selinux
                 */
                if (!is_writable($strFilePath)) {
                    $strError = sprintf('"%s" is not writable by "%s".', $strFilePath, fileowner($strFilePath));
                    throw new Exception(sprintf('Could not chmod file %s: %s', $strFilePath, $strError));
                }

                return false;
            }
            else
                return true;
        }

        public static function RecursiveChmod($strFilePath, $intFileMode = 0666, $intDirMode = 0777, $blnKeepExecutableFiles = true) {
            if (is_dir($strFilePath) && !is_link($strFilePath)) {
                if ($hndDir = opendir($strFilePath)) {
                    while (($strFileName = readdir($hndDir)) !== false) {

                        if ($strFileName == '.' || $strFileName == '..') {
                            continue;
                        }

                        self::RecursiveChmod($strFilePath.'/'.$strFileName, $intFileMode, $intDirMode);
                    }
                    closedir($hndDir);
                }
                else {
                    throw new Exception(sprintf('Can\'t open directory %s for reading, maybe %s doesn\'t have execute permissions on it.', $strFilePath, fileowner($strFilePath)));
                }

                if (!@chmod($strFilePath, $intDirMode)) {
                    /**
                     * If it's writable, we don't care if chmod failed, it's probably due to selinux
                     */
                    if (!is_writable($strFilePath)) {
                        $strError = sprintf('"%s" is only writable by "%s".', $strFilePath, fileowner($strFilePath));
                        throw new Exception(sprintf('Could not chmod file %s: %s', $strFilePath, $strError));
                    }

                    return false;
                }
                else
                    return true;
            }

            if (is_file($strFilePath) && !is_link($strFilePath)) {
                if ($blnKeepExecutableFiles && is_executable($strFilePath))
                    $intFileMode = 0777;

                if (!@chmod($strFilePath, $intFileMode)) {
                    /**
                     * If it's writable, we don't care if chmod failed, it's probably due to selinux
                     */
                    if (!is_writable($strFilePath)) {
                        $strError = sprintf('"%s" is only writable by "%s".', $strFilePath, fileowner($strFilePath));
                        throw new Exception(sprintf('Could not chmod file %s: %s', $strFilePath, $strError));
                    }

                    return false;
                }
                else
                    return true;
            }
            else
                /**
                 * ignore symlinks and other non-regular files
                 */
                return true;
        }

        public static function RecursiveCopy( $source, $target ) {
            if ( is_dir( $source ) ) {
                if (!file_exists($target) && !@mkdir( $target, 0777, true )) {
                    if (is_writable($target))
                        throw new Exception(
                                    sprintf('Could not create directory %s. The parent directory has owner %s and permissions %s',
                                        $target,
                                        fileowner('.'),
                                        fileperms('.')
                                    )
                        );
                    else
                        throw new Exception(
                                    sprintf('Could not create directory %s. The parent directory is only writable by %s',
                                        $target,
                                        fileowner($target)
                                    )
                        );
                }

                $d = dir( $source );

                while ( FALSE !== ( $entry = $d->read() ) ) {
                    if ( $entry == '.' || $entry == '..' )
                        continue;

                    $Entry = $source . '/' . $entry;
                    if ( is_dir( $Entry ) ) {
                        self::RecursiveCopy( $Entry, $target . '/' . $entry );
                        continue;
                    }
                    if (!@copy( $Entry, $target . '/' . $entry )) {
                        if (file_exists($target) && !is_writable($target))
                            throw new Exception(
                                sprintf('Could not overwrite %s. The target file exists with owner %s, but I am %s',
                                    $source,
                                    $target,
                                    fileowner($target),
                                    get_current_user()
                                )
                            );
                        elseif (!is_writable(dirname($target)))
                            throw new Exception(
                                sprintf('Could not copy %s to %s. The directory %s is only writable by %s',
                                    $source,
                                    $target,
                                    dirname($target),
                                    fileowner(dirname($target))
                                )
                            );
                        else
                            throw new Exception(sprintf('Could not copy %s to %s. Unknown error.', $source, $target));
                    }
                }

                $d->close();
            } else {
                if (!@copy( $source, $target )) {
                    if (file_exists($target) && !is_writable($target))
                        throw new Exception(
                            sprintf('Could not overwrite %s. The target file exists with owner %s, but I am %s',
                                $source,
                                $target,
                                fileowner($target),
                                get_current_user()
                            )
                        );
                    elseif (!is_writable(dirname($target)))
                        throw new Exception(
                            sprintf('Could not copy %s to %s. The directory %s is only writable by %s',
                                $source,
                                $target,
                                dirname($target),
                                get_current_user()
                            )
                        );
                    else
                        throw new Exception(sprintf('Could not copy %s to %s. Unknown error.', $source, $target));
                }
            }
        }

        public static function CountFileLines($strFile) {
            if ($hndFile = fopen($strFile, 'r')) {
                $intLines = 0;
                while(fgets($hndFile)) $intLines++;
                fclose($hndFile);
                return $intLines;
            }
            else
                return false;


        }

        public static function SearchDirectoryByName($strPathToStartFrom, $strDirectoryName, $blnCaseSensitive = false) {
            $arrSearchResult = self::ListDirectory($strPathToStartFrom, null, null, null, true);

            $arrFoundDirectory = array();
            if (is_array($arrSearchResult))
                foreach($arrSearchResult as $intIndex=>$strPath) {
                    if (trim($strPath) == trim($strPathToStartFrom))
                        continue;

                    if ($blnCaseSensitive && is_dir($strPath) && trim($strDirectoryName) == trim(basename($strPath)))
                        $arrFoundDirectory[] = $strPath;

                    if (!$blnCaseSensitive && is_dir($strPath) && strtolower(trim($strDirectoryName)) == strtolower(trim(basename($strPath))))
                        $arrFoundDirectory[] = $strPath;
                }
            else
                return false;

            if (count($arrFoundDirectory) > 0)
                return $arrFoundDirectory;
            else
                return false;
        }

        public static function ListDirectory($strDir = '.', $strIncludePattern = null, $strExcludePattern = null, $strExcludePath = null, $blnIncludeDirectories = false) {
            $arrFiles = array();
            if (is_dir($strDir)) {
                $hndFile = opendir($strDir);
                if ($blnIncludeDirectories) {
                    $blnContinue = false;
                    if (!is_null($strIncludePattern) && !preg_match($strIncludePattern, $strDir))
                        $blnContinue = true;

                    if (!$blnContinue && !is_null($strExcludePattern) && preg_match($strExcludePattern, $strDir))
                        $blnContinue = true;

                    if (!$blnContinue) {
                        array_push($arrFiles, (!is_null($strExcludePath))?str_replace($strExcludePath, '', $strDir):$strDir);
                    }
                }

                while (($strFile = readdir($hndFile)) !== false) {
                    // loop through the files, skipping . and .., and recursing if necessary
                    if (strcmp($strFile, '.')==0 || strcmp($strFile, '..')==0) continue;

                    $strFilePath = $strDir . '/' . $strFile;

                    if ( is_dir($strFilePath) )
                        $arrFiles = array_merge($arrFiles, self::ListDirectory($strFilePath, $strIncludePattern, $strExcludePattern, $strExcludePath, $blnIncludeDirectories));
                    else {
                        if ($strIncludePattern && !preg_match($strIncludePattern, $strFilePath))
                            continue;

                        if ($strExcludePattern && preg_match($strExcludePattern, $strFilePath))
                            continue;

                        if ($strExcludePath) {
                            array_push($arrFiles, str_replace($strExcludePath, '', $strFilePath));
                            continue;
                        }

                        array_push($arrFiles, $strFilePath);
                    }
                }
                closedir($hndFile);
            } else {
                // false if the function was called with an invalid non-directory argument
                $arrFiles = false;
            }
            return $arrFiles;
        }

        public static function IsProcessRunning($strOperation, $intProjectId) {
            $strSearchCmd = sprintf('egrep -e "php.*--%s.*--project %d.*--translation-lang %s"', $strOperation, $intProjectId, QApplication::$TargetLanguage->LanguageCode);
            $strPsFindCmd = 'ps aux | ' . $strSearchCmd;
            $arrCmdLines = explode("\n", `$strPsFindCmd`);

            if (is_array($arrCmdLines))
                foreach($arrCmdLines as $strCmdLine)
                {
                    if(preg_match("/(\S{1,})(\s{1,})(\d{1,})/", $strCmdLine, $arrMatches))
                    {
                        if (strstr($strCmdLine, 'egrep') || $arrMatches[3] == 0)
                            continue;
                        else {
                            return $arrMatches[3];
                        }
                    }
                    else
                        return false;
                }
            /**
             * If exec functions are disabled, return false, surely no process is running in background
             */

            return false;
        }
        
        /**
         *
         * A better version of exec()
         * @param string $strCommand The command to run
         * @param array $arrOutput An array where you'll get the output
         * @param array $arrError An array where you'll get the errors
         * @param integer $intRetVal The return value of the command
         * @param boolean $blnInBackground Whether to launch the command in background
         * @param array $env Associative array with environment variables
         * @param string $cwd The directory to switch to before running the command
         * @param boolean $blnLogErrors Whether to log the errors in the database
         *
         * @return boolean
         */
        public static function Exec($strCommand, &$arrOutput, &$arrError, &$intRetVal, $blnInBackground = false, $env = null, $cwd = null, $blnLogErrors = true) {
            $process = proc_open(
                $strCommand . (($blnInBackground)?' &':''),
                array(
                    1 => array("pipe", 'w'),
                    2 => array("pipe", 'w')
                ),
                $pipes,
                $cwd,
                $env
            );
            
            if (!$blnInBackground) {
                if (is_resource($process)) {
                    $arrOutput = explode("\n", stream_get_contents($pipes[1]));
                    fclose($pipes[1]);
                    
                    $arrError = explode("\n", stream_get_contents($pipes[2]));
                    fclose($pipes[2]);
                
                    // It is important that you close any pipes before calling
                    // proc_close in order to avoid a deadlock
                    $intRetVal = proc_close($process);
                    
                    if ($intRetVal != 0 && $blnLogErrors) {
                        NarroLogger::LogError(sprintf('Running "%s" in "%s" returned %d', $strCommand, is_null($cwd)?getcwd():$cwd, $intRetVal));
                        foreach($arrOutput as $strOutput)
                            NarroLogger::LogInfo($strOutput);
                    
                        foreach($arrError as $strOutput)
                            NarroLogger::LogError($strOutput);
                        
                        return false;
                    }
                    
                    NarroLogger::LogDebug(sprintf('Running "%s" in "%s"', $strCommand, is_null($cwd)?getcwd():$cwd));
                                        
                    return true;
                }
                else
                    return false;
            }
            else {
                if (is_resource($process))
                    return true;
                else
                    return false;
            }
        }
        
        public static function CanExec($strCommand) {
            $intRetCode = 0;
            exec($strCommand, $arrOutput, $intRetCode);
            return ($intRetCode == 0);
        }
    }
?>