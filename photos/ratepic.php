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
// CVS version: $Id: ratepic.php,v 1.5 2004/07/24 15:03:53 gaugau Exp $
// ------------------------------------------------------------------------- //

define('IN_COPPERMINE', true);
define('RATEPIC_PHP', true);

require('include/init.inc.php');
// Check if required parameters are present
if (!isset($HTTP_GET_VARS['pic']) || !isset($HTTP_GET_VARS['rate'])) cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);

$pic = (int)$HTTP_GET_VARS['pic'];
$rate = (int)$HTTP_GET_VARS['rate'];

$rate = min($rate, 5);
$rate = max($rate, 0);

// If user does not accept script's cookies, we don't accept the vote
if (!isset($HTTP_COOKIE_VARS[$CONFIG['cookie_name'] . '_data'])) {
    header('Location: displayimage.php?pos=' . (- $pic));
    exit;
}
// Retrieve picture/album information & check if user can rate picture
$sql = "SELECT a.votes as votes_allowed, p.votes as votes, pic_rating, owner_id " . "FROM {$CONFIG['TABLE_PICTURES']} AS p, {$CONFIG['TABLE_ALBUMS']} AS a " . "WHERE p.aid = a.aid AND pid = '$pic' LIMIT 1";
$result = db_query($sql);
if (!mysql_num_rows($result)) cpg_die(CRITICAL_ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
$row = mysql_fetch_array($result);
mysql_free_result($result);
if (!USER_CAN_RATE_PICTURES || $row['votes_allowed'] == 'NO') cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
// Clean votes older votes
$curr_time = time();
$clean_before = $curr_time - $CONFIG['keep_votes_time'] * 86400;
$sql = "DELETE " . "FROM {$CONFIG['TABLE_VOTES']} " . "WHERE vote_time < $clean_before";
$result = db_query($sql);
// Check if user already rated this picture
$user_md5_id = USER_ID ? md5(USER_ID) : $USER['ID'];
$sql = "SELECT * " . "FROM {$CONFIG['TABLE_VOTES']} " . "WHERE pic_id = '$pic' AND user_md5_id = '$user_md5_id'";
$result = db_query($sql);
if (mysql_num_rows($result)) cpg_die(ERROR, $lang_rate_pic_php['already_rated'], __FILE__, __LINE__);
//Test for Self-Rating
$user=USER_ID;
$owner=$row['owner_id'];

if (!empty($user) && $user==$owner && !USER_IS_ADMIN) cpg_die(ERROR, $lang_rate_pic_php['forbidden'], __FILE__, __LINE__);
// Update picture rating
$new_rating = round(($row['votes'] * $row['pic_rating'] + $rate * 2000) / ($row['votes'] + 1));
$sql = "UPDATE {$CONFIG['TABLE_PICTURES']} " . "SET pic_rating = '$new_rating', votes = votes + 1 " . "WHERE pid = '$pic' LIMIT 1";
$result = db_query($sql);
// Update the votes table
$sql = "INSERT INTO {$CONFIG['TABLE_VOTES']} " . "VALUES ('$pic', '$user_md5_id', '$curr_time')";
$result = db_query($sql);

$location = "displayimage.php?pos=" . (- $pic);
$header_location = (@preg_match('/Microsoft|WebSTAR|Xitami/', getenv('SERVER_SOFTWARE'))) ? 'Refresh: 0; URL=' : 'Location: ';
header($header_location . $location);
pageheader($lang_info, "<META http-equiv=\"refresh\" content=\"1;url=$location\">");
msg_box($lang_info, $lang_rate_pic_php['rate_ok'], $lang_continue, $location);
pagefooter();
ob_end_flush();

?>
