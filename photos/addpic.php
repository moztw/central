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
  $Source: /cvsroot/coppermine/stable/addpic.php,v $
  $Revision: 1.9 $
  $Author: gaugau $
  $Date: 2005/04/19 03:17:10 $
**********************************************/

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
$file_name = $sane_name;

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