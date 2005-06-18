<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2005 Coppermine Dev Team
  v1.1 originaly written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
  ********************************************
  Coppermine version: 1.3.3
  $Source: /cvsroot/coppermine/stable/getlang.php,v $
  $Revision: 1.6 $
  $Author: gaugau $
  $Date: 2005/04/19 03:17:10 $
**********************************************/

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