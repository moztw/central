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
  $Source: /cvsroot/coppermine/stable/delete.php,v $
  $Revision: 1.7 $
  $Author: gaugau $
  $Date: 2005/04/19 03:17:10 $
**********************************************/

define('IN_COPPERMINE', true);
define('DELETE_PHP', true);

require('include/init.inc.php');

/**
 * Local functions definition
 */

$header_printed = false;
$need_caption = false;

function output_table_header()
{
    global $header_printed, $need_caption;

    $header_printed = true;
    $need_caption = true;

    ?>
<tr>
<td class="tableh2"><b>Picture</b></td>
<td class="tableh2" align="center"><b>F</b></td>
<td class="tableh2" align="center"><b>N</b></td>
<td class="tableh2" align="center"><b>T</b></td>
<td class="tableh2" align="center"><b>C</b></td>
<td class="tableh2" align="center"><b>D</b></td>
</tr>
<?php
}

function output_caption()
{
    global $lang_delete_php
    ?>
<tr><td colspan="6" class="tableb">&nbsp;</td></tr>
<tr><td colspan="6" class="tableh2"><b><?php echo $lang_delete_php['caption'] ?></b></tr>
<tr><td colspan="6" class="tableb">
<table cellpadding="1" cellspacing="0">
<tr><td><b>F</b></td><td>:</td><td><?php echo $lang_delete_php['fs_pic'] ?></td><td width="20">&nbsp;</td><td><img src="images/green.gif" border="0" width="12" height="12" align="absmiddle"></td><td>:</td><td><?php echo $lang_delete_php['del_success'] ?></td></tr>
<tr><td><b>N</b></td><td>:</td><td><?php echo $lang_delete_php['ns_pic'] ?></td><td width="20">&nbsp</td><td><img src="images/red.gif" border="0" width="12" height="12" align="absmiddle"></td><td>:</td><td><?php echo $lang_delete_php['err_del'] ?></td></tr>
<tr><td><b>T</b></td><td>:</td><td><?php echo $lang_delete_php['thumb_pic'] ?></td></tr>
<tr><td><b>C</b></td><td>:</td><td><?php echo $lang_delete_php['comment'] ?></td></tr>
<tr><td><b>D</b></td><td>:</td><td><?php echo $lang_delete_php['im_in_alb'] ?></td></tr>
</table>
</td>
</tr>
<?php
}

function delete_picture($pid)
{
    global $CONFIG, $header_printed, $lang_errors;

    if (!$header_printed)
        output_table_header();

    $green = "<img src=\"images/green.gif\" border=\"0\" width=\"12\" height=\"12\"><br>";
    $red = "<img src=\"images/red.gif\" border=\"0\" width=\"12\" height=\"12\"><br>";

    if (GALLERY_ADMIN_MODE) {
        $query = "SELECT aid, filepath, filename FROM {$CONFIG['TABLE_PICTURES']} WHERE pid='$pid'";
        $result = db_query($query);
        if (!mysql_num_rows($result)) cpg_die(CRITICAL_ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
        $pic = mysql_fetch_array($result);
    } else {
        $query = "SELECT {$CONFIG['TABLE_PICTURES']}.aid as aid, category, filepath, filename FROM {$CONFIG['TABLE_PICTURES']}, {$CONFIG['TABLE_ALBUMS']} WHERE {$CONFIG['TABLE_PICTURES']}.aid = {$CONFIG['TABLE_ALBUMS']}.aid AND pid='$pid'";
        $result = db_query($query);
        if (!mysql_num_rows($result)) cpg_die(CRITICAL_ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
        $pic = mysql_fetch_array($result);
        if ($pic['category'] != FIRST_USER_CAT + USER_ID) cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
    }

    $aid = $pic['aid'];
    $dir = $CONFIG['fullpath'] . $pic['filepath'];
    $file = $pic['filename'];


    if (!is_writable($dir)) cpg_die(CRITICAL_ERROR, sprintf($lang_errors['directory_ro'], htmlspecialchars($dir)), __FILE__, __LINE__);

    echo "<td class=\"tableb\">" . htmlspecialchars($file) . "</td>";

    $files = array($dir . $file, $dir . $CONFIG['normal_pfx'] . $file, $dir . $CONFIG['thumb_pfx'] . $file);
    foreach ($files as $currFile) {
        echo "<td class=\"tableb\" align=\"center\">";
        if (is_file($currFile)) {
            if (@unlink($currFile))
                echo $green;
            else
                echo $red;
        } else
            echo "&nbsp;";
        echo "</td>";
    }

    $query = "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid='$pid'";
    $result = db_query($query);
    echo "<td class=\"tableb\" align=\"center\">";
    if (mysql_affected_rows() > 0)
        echo $green;
    else
        echo "&nbsp;";
    echo "</td>";

    $query = "DELETE FROM {$CONFIG['TABLE_EXIF']} WHERE filename='$dir$file' LIMIT 1";
    $result = db_query($query);

    $query = "DELETE FROM {$CONFIG['TABLE_PICTURES']} WHERE pid='$pid' LIMIT 1";
    $result = db_query($query);
    echo "<td class=\"tableb\" align=\"center\">";
    if (mysql_affected_rows() > 0)
        echo $green;
    else
        echo $red;
    echo "</td>";

    echo "</tr>\n";

    return $aid;
}

function delete_album($aid)
{
    global $CONFIG, $lang_errors, $lang_delete_php;

    $query = "SELECT title, category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid ='$aid'";
    $result = db_query($query);
    if (!mysql_num_rows($result)) cpg_die(CRITICAL_ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
    $album_data = mysql_fetch_array($result);

    if (!GALLERY_ADMIN_MODE) {
        if ($album_data['category'] != FIRST_USER_CAT + USER_ID) cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
    }

    $query = "SELECT pid FROM {$CONFIG['TABLE_PICTURES']} WHERE aid='$aid'";
    $result = db_query($query);
    // Delete all files
    while ($pic = mysql_fetch_array($result)) {
        delete_picture($pic['pid']);
    }
    // Delete album
    $query = "DELETE from {$CONFIG['TABLE_ALBUMS']} WHERE aid='$aid'";
    $result = db_query($query);
    if (mysql_affected_rows() > 0)
        echo "<tr><td colspan=\"6\" class=\"tableb\">" . sprintf($lang_delete_php['alb_del_success'], $album_data['title']) . "</td></tr>\n";
}

/**
 * Album manager functions
 */

function parse_select_option($value)
{
    global $HTML_SUBST;

    if (!preg_match("/.+?no=(\d+),album_nm='(.+?)',album_sort=(\d+),action=(\d)/", $value, $matches))
        return false;

    return array('album_no' => (int)$matches[1],
        'album_nm' => get_magic_quotes_gpc() ? strtr(stripslashes($matches[2]), $HTML_SUBST) : strtr($matches[2], $HTML_SUBST),
        'album_sort' => (int)$matches[3],
        'action' => (int)$matches[4]
        );
}

function parse_orig_sort_order($value)
{
    if (!preg_match("/(\d+)@(\d+)/", $value, $matches))
        return false;

    return array('aid' => (int)$matches[1],
        'pos' => (int)$matches[2],
        );
}

function parse_list($value)
{
    return preg_split("/,/", $value, -1, PREG_SPLIT_NO_EMPTY);
}

/**
 * Main code starts here
 */

if (!isset($HTTP_GET_VARS['what']) && !isset($HTTP_POST_VARS['what'])) {
    cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);
}

$what = isset($HTTP_GET_VARS['what']) ? $HTTP_GET_VARS['what'] : $HTTP_POST_VARS['what'];
switch ($what) {

    // Album manager (don't necessarily delete something ;-)

    case 'albmgr':
        if (!(GALLERY_ADMIN_MODE || USER_ADMIN_MODE)) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

        if (!GALLERY_ADMIN_MODE) {
            $restrict = "AND category = '" . (FIRST_USER_CAT + USER_ID) . "'";
        } else {
            $restrict = '';
        }

        pageheader($lang_delete_php['alb_mgr']);
        starttable("100%", $lang_delete_php['alb_mgr'], 6);

        $orig_sort_order = parse_list($HTTP_POST_VARS['sort_order']);
        foreach ($orig_sort_order as $album) {
            $op = parse_orig_sort_order($album);
            if (count ($op) == 2) {
                $query = "UPDATE $CONFIG[TABLE_ALBUMS] SET pos='{$op['pos']}' WHERE aid='{$op['aid']}' $restrict LIMIT 1";
                db_query($query);
            } else {
                cpg_die (sprintf(CRITICAL_ERROR, $lang_delete_php['err_invalid_data'], $HTTP_POST_VARS['sort_order']), __FILE__, __LINE__);
            }
        }

        $to_delete = parse_list($HTTP_POST_VARS['delete_album']);
        foreach ($to_delete as $album_id) {
            delete_album((int)$album_id);
        }

        if (isset($HTTP_POST_VARS['to'])) foreach ($HTTP_POST_VARS['to'] as $option_value) {
            $op = parse_select_option(stripslashes($option_value));
            switch ($op['action']) {
                case '0':
                    break;
                case '1':
                    if (GALLERY_ADMIN_MODE) {
                        $category = (int)$HTTP_POST_VARS['cat'];
                    } else {
                        $category = FIRST_USER_CAT + USER_ID;
                    }
                    echo "<tr><td colspan=\"6\" class=\"tableb\">" . sprintf($lang_delete_php['create_alb'], $op['album_nm']) . "</td></tr>\n";
                    $query = "INSERT INTO {$CONFIG['TABLE_ALBUMS']} (category, title, uploads, pos) VALUES ('$category', '" . addslashes($op['album_nm']) . "', 'NO',  '{$op['album_sort']}')";
                    db_query($query);
                    break;
                case '2':
                    echo "<tr><td colspan=\"6\" class=\"tableb\">" . sprintf($lang_delete_php['update_alb'], $op['album_no'], $op['album_nm'], $op['album_sort']) . "</td></tr>\n";
                    $query = "UPDATE $CONFIG[TABLE_ALBUMS] SET title='" . addslashes($op['album_nm']) . "', pos='{$op['album_sort']}' WHERE aid='{$op['album_no']}' $restrict LIMIT 1";
                    db_query($query);
                    break;
                default:
                    cpg_die (CRITICAL_ERROR, $lang_delete_php['err_invalid_data'], __FILE__, __LINE__);
            }
        }
        if ($need_caption) output_caption();
        echo "<tr><td colspan=\"6\" class=\"tablef\" align=\"center\">\n";
        echo "<div class=\"admin_menu_thumb\"><a href=\"index.php\"  class=\"adm_menu\">$lang_continue</a></div>\n";
        echo "</td></tr>";
        endtable();
        pagefooter();
        ob_end_flush();
        break;

    // Comment

    case 'comment':
        $msg_id = (int)$HTTP_GET_VARS['msg_id'];

        $result = db_query("SELECT pid FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id='$msg_id'");
        if (!mysql_num_rows($result)) {
            cpg_die(CRITICAL_ERROR, $lang_errors['non_exist_comment'], __FILE__, __LINE__);
        } else {
            $comment_data = mysql_fetch_array($result);
        }

        if (GALLERY_ADMIN_MODE) {
            $query = "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id='$msg_id'";
        } elseif (USER_ID) {
            $query = "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id='$msg_id' AND author_id ='" . USER_ID . "' LIMIT 1";
        } else {
            $query = "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id='$msg_id' AND author_md5_id ='{$USER['ID']}' AND author_id = '0' LIMIT 1";
        }
        $result = db_query($query);

        $header_location = (@preg_match('/Microsoft|WebSTAR|Xitami/', getenv('SERVER_SOFTWARE'))) ? 'Refresh: 0; URL=' : 'Location: ';
        $redirect = "displayimage.php?pos=" . (- $comment_data['pid']);
        header($header_location . $redirect);
        pageheader($lang_info, "<META http-equiv=\"refresh\" content=\"1;url=$redirect\">");
        msg_box($lang_info, $lang_delete_php['comment_deleted'], $lang_continue, $redirect);
        pagefooter();
        ob_end_flush();
        break;

    // Picture

    case 'picture':
        if (!(GALLERY_ADMIN_MODE || USER_ADMIN_MODE)) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

        $pid = (int)$HTTP_GET_VARS['id'];

        pageheader($lang_delete_php['del_pic']);
        starttable("100%", $lang_delete_php['del_pic'], 6);
        output_table_header();
        $aid = delete_picture($pid);
        output_caption();
        echo "<tr><td colspan=\"6\" class=\"tablef\" align=\"center\">\n";
        echo "<div class=\"admin_menu_thumb\"><a href=\"thumbnails.php?album=$aid\"  class=\"adm_menu\">$lang_continue</a></div>\n";
        echo "</td></tr>\n";
        endtable();
        pagefooter();
        ob_end_flush();
        break;

    // Album

    case 'album':
        if (!(GALLERY_ADMIN_MODE || USER_ADMIN_MODE)) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

        $aid = (int)$HTTP_GET_VARS['id'];

        pageheader($lang_delete_php['del_alb']);
        starttable("100%", $lang_delete_php['del_alb'], 6);

        delete_album($aid);
        if ($need_caption) output_caption();

        echo "<tr><td colspan=\"6\" class=\"tablef\" align=\"center\">\n";
        echo "<div class=\"admin_menu_thumb\"><a href=\"index.php\"  class=\"adm_menu\">$lang_continue</a></div>\n";
        echo "</td></tr>";
        endtable();
        pagefooter();
        ob_end_flush();
        break;

    // User

    case 'user':
        $user_id = (int)$HTTP_GET_VARS['id'];
        if (!(GALLERY_ADMIN_MODE) || ($user_id == USER_ID) || defined('UDB_INTEGRATION')) cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);

        $result = db_query("SELECT user_name FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '$user_id'");
        if (!mysql_num_rows($result)) cpg_die(CRITICAL_ERROR, $lang_delete_php['err_unknown_user'], __FILE__, __LINE__);
        $user_data = mysql_fetch_array($result);
        mysql_free_result($result);

        pageheader($lang_delete_php['del_user']);
        starttable("100%", $lang_delete_php['del_user'] . ' - ' . $user_data['user_name'], 6);
        // First delete the albums
        $result = db_query("SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = '" . (FIRST_USER_CAT + $user_id) . "'");
        while ($album = mysql_fetch_array($result)) {
            delete_album($album['aid']);
        } // while
        mysql_free_result($result);

        if ($need_caption) output_caption();
        // Then anonymize comments posted by the user
        db_query("UPDATE {$CONFIG['TABLE_COMMENTS']} SET  author_id = '0' WHERE  author_id = '$user_id'");
        // Do the same for pictures uploaded in public albums
        db_query("UPDATE {$CONFIG['TABLE_PICTURES']} SET  owner_id = '0' WHERE  owner_id = '$user_id'");
        // Finally delete the user
        db_query("DELETE FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '$user_id'");

        echo "<tr><td colspan=\"6\" class=\"tablef\" align=\"center\">\n";
        echo "<div class=\"admin_menu_thumb\"><a href=\"usermgr.php\"  class=\"adm_menu\">$lang_continue</a></div>\n";
        echo "</td></tr>";
        endtable();
        pagefooter();
        ob_end_flush();
        break;

    // Unknow command

    default:
        cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);
}

?>