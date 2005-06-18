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
  $Source: /cvsroot/coppermine/stable/addfav.php,v $
  $Revision: 1.6 $
  $Author: gaugau $
  $Date: 2005/04/19 03:12:58 $
**********************************************/

define('IN_COPPERMINE', true);
define('RATEPIC_PHP', true);

require('include/init.inc.php');
// Check if required parameters are present
if (!isset($HTTP_GET_VARS['pid'])) cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);

$pic = (int)$HTTP_GET_VARS['pid'];
// If user does not accept script's cookies, we don't accept the vote
if (!isset($HTTP_COOKIE_VARS[$CONFIG['cookie_name'] . '_data'])) {
    header('Location: displayimage.php?pos=' . (- $pid));
    exit;
}
// See if this picture is already present in the array
if (!in_array($pic, $FAVPICS)) {
    $FAVPICS[] = $pic;
} else {
    $key = array_search($pic, $FAVPICS);
    unset ($FAVPICS[$key]);
}

$data = base64_encode(serialize($FAVPICS));
setcookie($CONFIG['cookie_name'] . '_fav', $data, time() + 86400 * 30, $CONFIG['cookie_path']);

$location = "displayimage.php?pos=" . (- $pic);
$header_location = (@preg_match('/Microsoft|WebSTAR|Xitami/', getenv('SERVER_SOFTWARE'))) ? 'Refresh: 0; URL=' : 'Location: ';
header($header_location . $location);
pageheader($lang_info, "<META http-equiv=\"refresh\" content=\"1;url=$location\">");
msg_box($lang_info, $lang_rate_pic_php['rate_ok'], $lang_continue, $location);
pagefooter();
ob_end_flush();

?>