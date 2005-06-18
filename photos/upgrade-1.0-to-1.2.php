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
  $Source: /cvsroot/coppermine/stable/upgrade-1.0-to-1.2.php,v $
  $Revision: 1.7 $
  $Author: gaugau $
  $Date: 2005/04/19 03:17:11 $
**********************************************/

define('IN_COPPERMINE', true);
define('ADMIN_PHP', true);

require "include/init.inc.php";

if (!GALLERY_ADMIN_MODE) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

$db10 = ""; // DB in which Coppermine 1.0 tables resides (leave blank is same DB as v1.2)
$prefix10 = "CPG_"; // The prefix used for the Coppermine 1.0 tables
$prefix10 = ($db10 ? $db10 . '.' : '') . $prefix10;

$CPG_pictures = $prefix10 . "pictures";
$CPG_albums = $prefix10 . "albums";
$CPG_comments = $prefix10 . "comments";

$cpg11_pictures = $CONFIG['TABLE_PICTURES'];
$cpg11_albums = $CONFIG['TABLE_ALBUMS'];
$cpg11_comments = $CONFIG['TABLE_COMMENTS'];

echo "Upgrading Coppermine 1.0 tables to 1.1<br />";
echo "Prefix used for 1.0 tables : $prefix10<br /><br />";
// Upgrade for the picture table
$sql = "INSERT INTO $cpg11_pictures " . "(approved, pid, aid, caption, filepath, filename, filesize, pwidth, pheight, hits, mtime," . " ctime) " . "SELECT 'yes' as approved, p.pid, aid, msg_body AS caption, filepath, filename, filesize, " . "pwidth, pheight, hits, mtime, UNIX_TIMESTAMP(ctime)" . "FROM $CPG_pictures AS p " . "LEFT JOIN $CPG_comments AS c ON p.caption = c.msg_id ";
db_query($sql);
echo "Picture table upgraded<br />";
// Get the list of comments that are used a image captions
$sql = "SELECT msg_id FROM $CPG_pictures AS p, $CPG_comments AS c " . "WHERE p.caption = c.msg_id";
$result = db_query($sql);
$msg_id_set = '';
if ((mysql_num_rows($result))) {
    $set = '';
    while ($comment = mysql_fetch_array($result)) {
        $set .= $comment['msg_id'] . ',';
    } // while
    $msg_id_set = 'AND msg_id NOT IN (' . substr($set, 0, -1) . ') ';
}
mysql_free_result($result);
// Upgrade the comment table
$sql = "INSERT INTO $cpg11_comments " . "(pid, msg_id, msg_author, msg_body, msg_date)" . "SELECT pid, msg_id, msg_author, msg_body, msg_date " . "FROM $CPG_comments " . "WHERE 1 $msg_id_set";
db_query($sql);
echo "Comment table upgraded<br />";
// Upgrade the album table
$sql = "INSERT INTO $cpg11_albums " . "(aid, title, description, uploads, pos)" . "SELECT aid, title, description, uploads, UNIX_TIMESTAMP(date) " . "FROM $CPG_albums";
db_query($sql);
echo "Album table upgraded<br />";
echo "<br />First step of upgrade completed!<br />";

echo "<a href='update.php'>Click Here</a> to complete the 1.2 upgrade.</P>";

?>