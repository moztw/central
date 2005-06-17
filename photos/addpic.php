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
// CVS version: $Id: addpic.php,v 1.7 2004/07/24 15:03:52 gaugau Exp $
// ------------------------------------------------------------------------- //

define('IN_COPPERMINE', true);
define('ADDPIC_PHP', true);

require('include/init.inc.php');
require('include/picmgmt.inc.php');

if (!GALLERY_ADMIN_MODE) die('Access denied');

$aid = (int)$HTTP_GET_VARS['aid'];
$pic_file = base64_decode($HTTP_GET_VARS['pic_file']);
$dir_name = dirname($pic_file) . "/";
$file_name = basename($pic_file);

// Get the forbidden characters from the Config console string, and do any necessary translation. Return the translated string.
$forbidden_chars = strtr($CONFIG['forbiden_fname_char'], array('&amp;' => '&', '&quot;' => '"', '&lt;' => '<', '&gt;' => '>'));

// Create the holder $picture_name by translating the file name. Translate any forbidden character into an underscore.
$sane_name = strtr($file_name, $forbidden_chars, str_repeat('_', strlen($CONFIG['forbiden_fname_char'])));
$source = "./" . $CONFIG['fullpath'] . $dir_name . $file_name;
rename($source, "./" . $CONFIG['fullpath'] . $dir_name . $sane_name);

$sql = "SELECT pid " . "FROM {$CONFIG['TABLE_PICTURES']} " . "WHERE filepath='" . addslashes($dir_name) . "' AND filename='" . addslashes($file_name) . "' " . "LIMIT 1";
$result = db_query($sql);

if (mysql_num_rows($result)) {
    $file_name = "images/up_dup.gif";
} elseif (add_picture($aid, $dir_name, $file_name)) {
    $file_name = "images/up_ok.gif";
} else {
    $file_name = "images/up_pb.gif";
    echo $ERROR;
}

if (ob_get_length()) {
    ob_end_flush();
    exit;
}

header('Content-type: image/gif');
echo fread(fopen($file_name, 'rb'), filesize($file_name));
ob_end_flush()
?>
