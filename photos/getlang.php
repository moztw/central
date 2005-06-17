<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.3.2                                            //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002-2004 Gregory DEMAR                                     //
// http://www.chezgreg.net/coppermine/                                       //
// ------------------------------------------------------------------------- //
// Updated by the Coppermine Dev Team                                        //
// (http://coppermine.sf.net/team/)                                          //
// see /docs/credits.html for details                                        //
// ------------------------------------------------------------------------- //
// This program is free software; you can redistribute it and/or modify      //
// it under the terms of the GNU General Public License as published by      //
// the Free Software Foundation; either version 2 of the License, or         //
// (at your option) any later version.                                       //
// ------------------------------------------------------------------------- //
// CVS version: $Id: getlang.php,v 1.5 2004/07/24 15:03:53 gaugau Exp $
// ------------------------------------------------------------------------- //

define('IN_COPPERMINE', true);
define('CONFIG_PHP', true);

define('LANG_DIR', 'lang');

require('include/init.inc.php');

$dir = opendir(LANG_DIR);
$lang_files = array();
while ($file = readdir($dir)) {
    if (is_file(LANG_DIR . '/' . $file)) {
        $lang_files[] = $file;
    }
}
closedir($dir);
asort($lang_files);

if (isset($HTTP_GET_VARS['get'])) {
    $file_index = (int)$HTTP_GET_VARS['get'];
    if ((isset($lang_files[$file_index]))) {
        header("Content-type: application/php");
        header("Content-Disposition: attachment; filename={$lang_files[$file_index]}");
        fpassthru(fopen(LANG_DIR . '/' . $lang_files[$file_index], 'r'));
        exit;
    }
}

pageheader('Language files');
starttable('100%', 'Language files');
foreach($lang_files as $index => $file) {
    echo <<<EOT
                <tr>
                        <td class="tableb">
                                <img src="images/folder.gif" alt="">&nbsp;<a href="$PHP_SELF?get=$index">$file</a>
                        </td>
                </tr>
EOT;
}
endtable();
pagefooter();
ob_end_flush();

?>
