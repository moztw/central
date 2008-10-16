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
    class NarroUtils {
        public static function RecursiveDelete($strFilePath) {
            if (strstr($strFilePath, '/*')) {
                $strFilePath = str_replace('/*', '', $strFilePath);
                if ($hndDir = opendir($strFilePath)) {
                    while (($strFileName = readdir($hndDir)) !== false) {
                        if ($strFileName == '.' || $strFileName == '..')
                            continue;

                        if (!self::RecursiveDelete($strFilePath.'/'.$strFileName)) {
                            throw new Exception(
                                            sprintf('%s/%s could not be deleted. File owner: %s, file permissions %s',
                                                $strFilePath,
                                                $strFileName,
                                                fileowner($strFilePath . '/' . $strFileName),
                                                fileperms($strFilePath . '/' . $strFileName)
                                            )
                            );
                        }
                    }
                    closedir($hndDir);
                }
            }
            else {
                if (is_dir($strFilePath) && !is_link($strFilePath)) {
                    if ($hndDir = opendir($strFilePath)) {
                        while (($strFileName = readdir($hndDir)) !== false) {
                            if ($strFileName == '.' || $strFileName == '..') {
                                continue;
                            }
                            if (!self::RecursiveDelete($strFilePath.'/'.$strFileName)) {
                                throw new Exception(
                                                sprintf('%s/%s could not be deleted. File owner: %s, file permissions %s',
                                                    $strFilePath,
                                                    $strFileName,
                                                    fileowner($strFilePath . '/' . $strFileName),
                                                    fileperms($strFilePath . '/' . $strFileName)
                                                )
                                );
                            }
                        }
                        closedir($hndDir);
                    }
                    return rmdir($strFilePath);
                }
                return unlink($strFilePath);
            }
        }

        public static function RecursiveChmod($strFilePath, $intFileMode = 0666, $intDirMode = 0777) {
            if (is_dir($strFilePath) && !is_link($strFilePath)) {
                if ($hndDir = opendir($strFilePath)) {
                    while (($strFileName = readdir($hndDir)) !== false) {

                        if ($strFileName == '.' || $strFileName == '..') {
                            continue;
                        }

                        if (!self::RecursiveChmod($strFilePath.'/'.$strFileName, $intFileMode, $intDirMode)) {
                                throw new Exception(
                                                sprintf('%s/%s could not be chmoded. File owner: %s, file permissions %s',
                                                    $strFilePath,
                                                    $strFileName,
                                                    fileowner($strFilePath . '/' . $strFileName),
                                                    fileperms($strFilePath . '/' . $strFileName)
                                                )
                                );
                        }
                    }
                    closedir($hndDir);
                }
                return @chmod($strFilePath, $intDirMode);
            }
            return @chmod($strFilePath, $intFileMode);
        }

        public static function RecursiveCopy( $source, $target ) {
            if ( is_dir( $source ) ) {
                @mkdir( $target );

                $d = dir( $source );

                while ( FALSE !== ( $entry = $d->read() ) ) {
                    if ( $entry == '.' || $entry == '..' )
                        continue;

                    $Entry = $source . '/' . $entry;
                    if ( is_dir( $Entry ) ) {
                        self::RecursiveCopy( $Entry, $target . '/' . $entry );
                        continue;
                    }
                    copy( $Entry, $target . '/' . $entry );
                }

                $d->close();
            } else {
                copy( $source, $target );
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

        public static function ListDirectory($strDir = '.', $strIncludePattern = null, $strExcludePattern = null, $strExcludePath = null, $blnIncludeDirectories = false) {

            $arrFiles = array();
            if (is_dir($strDir)) {
                $hndFile = opendir($strDir);
                if ($blnIncludeDirectories) {
                    $blnContinue = false;
                    if ($strIncludePattern && !preg_match($strIncludePattern, $strDir))
                        $blnContinue = true;

                    if (!$blnContinue && $strExcludePattern && preg_match($strExcludePattern, $strDir))
                        $blnContinue = true;

                    if (!$blnContinue)
                        array_push($arrFiles, ($strExcludePath)?str_replace($strExcludePath, '', $strDir):$strDir);
                }

                while (($strFile = readdir($hndFile)) !== false) {
                    // loop through the files, skipping . and .., and recursing if necessary
                    if (strcmp($strFile, '.')==0 || strcmp($strFile, '..')==0) continue;

                    $strFilePath = $strDir . '/' . $strFile;

                    if ( is_dir($strFilePath) )
                        $arrFiles = array_merge($arrFiles, self::ListDirectory($strFilePath, $strIncludePattern, $strExcludePattern, $strExcludePath));
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
    }
?>