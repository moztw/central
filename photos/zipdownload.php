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
  $Source: /cvsroot/coppermine/stable/zipdownload.php,v $
  $Revision: 1.5 $
  $Author: gaugau $
  $Date: 2005/04/19 03:17:11 $
**********************************************/

define('IN_COPPERMINE', true);
define('THUMBNAILS_PHP', true);
define('INDEX_PHP', true);
require('include/init.inc.php');
include ( 'include/archive.php');

if ($CONFIG['enable_zipdownload'] != 1) {
//someone has entered the url manually, while the admin has disabled zipdownload
pageheader($lang_error);
starttable('-2', $lang_error);
print <<<EOT
<tr>
        <td align="center" class="tableb">
      {$lang_errors['perm_denied']}
      </td>
</tr>
EOT;
endtable();
pagefooter();
ob_end_flush();
} else {
// zipdownload allowed, go ahead...

$filelist= array();

if (count($FAVPICS)>0){
        $favs = implode(",",$FAVPICS);

        $select_columns = 'filepath,filename';

        $result = db_query("SELECT $select_columns FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES'AND pid IN ($favs)");
        $rowset = db_fetch_rowset($result);
        foreach ($rowset as $key => $row){

                $filelist[] = $rowset[$key]['filepath'].$rowset[$key]['filename'];

        }
}

$flags['storepath'] = 0;
// $cwd = './albums';
$cwd = "./{$CONFIG['fullpath']}";
$cwd = substr($cwd, 0, -1);

$zip = new zipfile($cwd,$flags);

$zip->addfiles($filelist);

$zip->filedownload('pictures.zip');
}
?>