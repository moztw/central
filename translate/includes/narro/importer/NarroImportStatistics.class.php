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
    class NarroImportStatistics {
        /*
         * big array with statistics
         */
        public static $arrStatistics;

    }

    foreach(
        array
        (
            "Texts that don't have access keys",
            'Contexts to export',
            'Exported contexts',
            'Exported files',
            'Texts that have access keys',
            'Texts kept as original',
            'Orphan translation access keys',
            'Texts without valid suggestions',
            'Skipped suggestions',
            'Skipped contexts',
            'Skipped texts',
            'Texts that had errors while adding',
            'Imported files',
            'Imported folders',
            'Kept folders',
            'Kept files',
            'Imported texts',
            'Imported contexts',
            'Imported suggestions',
            'Reused contexts',
            'Texts without suggestions',
            'Skipped contexts',
            'Suggestions that kept the original text',
            'Validated suggestions',
            'Reused suggestions',
            'Empty original texts',
            'Texts with no access key set, but fixed'
        )
        as $strPropertyName)
        NarroImportStatistics::$arrStatistics[$strPropertyName] = 0;
?>