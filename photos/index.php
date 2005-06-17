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
// CVS version: $Id: index.php,v 1.13 2004/07/28 09:58:14 tarique Exp $
// ------------------------------------------------------------------------- //

// Check if standalone is installed in a portal like phpNuke (added by DJMaze)
$DIR=preg_split("/[\/\\\]/",dirname($_SERVER['PATH_TRANSLATED']));
if ($DIR[count($DIR)-2] == "modules") {
    echo "<html><body><h1>ERROR</h1>You installed the standalone Coppermine into your Nuke portal.<br>".
         "Please download and install a CPG Port: <a href=\"http://sourceforge.net/project/showfiles.php?group_id=89658\">CPG for PostNuke OR CPG for PHPnuke</a></body></html>";
    die();
} // end check
define('IN_COPPERMINE', true);
define('INDEX_PHP', true);

require('include/init.inc.php');
if ($CONFIG['enable_smilies']) include("include/smilies.inc.php");
/**
 * Local functions definition
 */
function html_albummenu($id)
{
    global $template_album_admin_menu, $lang_album_admin_menu;

    static $template = '';

    if ($template == '') {
        $params = array('{CONFIRM_DELETE}' => $lang_album_admin_menu['confirm_delete'],
            '{DELETE}' => $lang_album_admin_menu['delete'],
            '{MODIFY}' => $lang_album_admin_menu['modify'],
            '{EDIT_PICS}' => $lang_album_admin_menu['edit_pics'],
            );

        $template = template_eval($template_album_admin_menu, $params);
    }

    $params = array('{ALBUM_ID}' => $id,
        );

    return template_eval($template, $params);
}

function get_subcat_data($parent, &$cat_data, &$album_set_array, $level, $ident = '')
{
    global $CONFIG, $HIDE_USER_CAT, $FORBIDDEN_SET,$cpg_show_private_album;

    $album_filter='';
    $pic_filter='';
    if (!empty($FORBIDDEN_SET) && !$cpg_show_private_album) {
        $album_filter = ' and '.str_replace('p.','a.',$FORBIDDEN_SET);
        $pic_filter = ' and '.str_replace('p.',$CONFIG['TABLE_PICTURES'].'.',$FORBIDDEN_SET);
    }

    $result = db_query("SELECT cid, name, description, thumb FROM {$CONFIG['TABLE_CATEGORIES']} WHERE parent = '$parent'  ORDER BY pos");

    if (mysql_num_rows($result) > 0) {
        $rowset = db_fetch_rowset($result);
        foreach ($rowset as $subcat) {
            if ($subcat['cid'] == USER_GAL_CAT) {
                $sql = "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE category>=" . FIRST_USER_CAT.$album_filter;
                $result = db_query($sql);
                $album_count = mysql_num_rows($result);
                while ($row = mysql_fetch_array($result)) {
                    $album_set_array[] = $row['aid'];
                } // while
                mysql_free_result($result);

                $result = db_query("SELECT count(*) FROM {$CONFIG['TABLE_PICTURES']} as p, {$CONFIG['TABLE_ALBUMS']} as a WHERE p.aid = a.aid AND category >= " . FIRST_USER_CAT.$album_filter);
                $nbEnr = mysql_fetch_array($result);
                $pic_count = $nbEnr[0];

                $subcat['description'] = preg_replace("/<br.*?>[\r\n]*/i", '<br />' . $ident , bb_decode($subcat['description']));
                $link = $ident . "<a href=index.php?cat={$subcat['cid']}>{$subcat['name']}</a>";
                if ($album_count) {
                    $cat_data[] = array($link, $ident . $subcat['description'], $album_count, $pic_count);
                    $HIDE_USER_CAT = 0;
                } else {
                    $HIDE_USER_CAT = 1;
                }
            } else {
                                $unaliased_album_filter = str_replace('a.','',$album_filter);
                $result = db_query("SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = {$subcat['cid']}".$unaliased_album_filter);
                $album_count = mysql_num_rows($result);
                while ($row = mysql_fetch_array($result)) {
                    $album_set_array[] = $row['aid'];
                } // while
                mysql_free_result($result);

                $result = db_query("SELECT count(*) FROM {$CONFIG['TABLE_PICTURES']} as p, {$CONFIG['TABLE_ALBUMS']} as a WHERE p.aid = a.aid AND category = {$subcat['cid']}".$album_filter);
                $nbEnr = mysql_fetch_array($result);
                mysql_free_result($result);
                $pic_count = $nbEnr[0];
                if ($subcat['thumb']>0) {
                    $sql = "SELECT filepath, filename, url_prefix, pwidth, pheight ".
                        "FROM {$CONFIG['TABLE_PICTURES']} ".
                        "WHERE pid='{$subcat['thumb']}'".$pic_filter;
                    $result = db_query($sql);
                    if (mysql_num_rows($result)) {
                        $picture = mysql_fetch_array($result);
                        mysql_free_result($result);
                        $pic_url =  get_pic_url($picture, 'thumb');
                        if (!is_image($picture['filename'])) {
                                $image_info = getimagesize($pic_url);
                                $picture['pwidth'] = $image_info[0];
                                $picture['pheight'] = $image_info[1];
                        }
                        $image_size = compute_img_size($picture['pwidth'], $picture['pheight'], $CONFIG['alb_list_thumb_size']);
                        $user_thumb = "<img src=\"" . $pic_url . "\" class=\"image\" {$image_size['geom']} border=\"0\" alt=\"\">";
                        $user_thumb = "<a href=\"index.php?cat={$subcat['cid']}\">".$user_thumb."</a>";
                    }
                }else{
                    $user_thumb ="";
                }
                $subcat['name'] = $subcat['name'];
                $subcat['description'] = preg_replace("/<br.*?>[\r\n]*/i", '<br />', bb_decode($subcat['description']));
                $link = "<a href=\"index.php?cat={$subcat['cid']}\">{$subcat['name']}</a>";
                $user_thumb = $ident.$user_thumb;
                if ($pic_count == 0 && $album_count == 0) {
					$user_thumb = $ident;
                    $cat_data[] = array($link, $subcat['description'],'cat_thumb' =>$user_thumb);
                } else {
                    // Check if you need to show subcat_level
                    if ($level == $CONFIG['subcat_level']) {
                        $cat_albums = list_cat_albums($subcat['cid']);
                    } else {
                        $cat_albums = '';
                    }
                    $cat_data[] = array($link, $subcat['description'], $album_count, $pic_count, 'cat_albums' => $cat_albums,'cat_thumb' =>$user_thumb);
                }
            }

            if ($level > 1) get_subcat_data($subcat['cid'], $cat_data, $album_set_array, $level -1, $ident . "</td><td><img src=\"images/spacer.gif\" width=\"20\" height=\"1\"></td><td>");
        }
    }
}
// List all categories
function get_cat_list(&$breadcrumb, &$cat_data, &$statistics)
{
    global $HTTP_GET_VARS, $CONFIG, $ALBUM_SET, $CURRENT_CAT_NAME, $BREADCRUMB_TEXT, $STATS_IN_ALB_LIST, $FORBIDDEN_SET;
    global $HIDE_USER_CAT,$cpg_show_private_album;
    global $cat;
    global $lang_list_categories, $lang_errors;

    // Build the breadcrumb
    breadcrumb($cat, $breadcrumb, $BREADCRUMB_TEXT);
    // Build the category list
    $cat_data = array();
    $album_set_array = array();
    get_subcat_data($cat, $cat_data, $album_set_array, $CONFIG['subcat_level']);

    $album_filter='';
    $pic_filter='';
    $cat = (int) $cat;
    if (!empty($FORBIDDEN_SET) && !$cpg_show_private_album) {
        $album_filter = ' and '.str_replace('p.','a.',$FORBIDDEN_SET);
        $pic_filter = ' and '.$FORBIDDEN_SET;
    }

    // Add the albums in the current category to the album set
    //if ($cat) {
        if ($cat == USER_GAL_CAT) {
            $sql = "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE category >= " . FIRST_USER_CAT.$album_filter;
            $result = db_query($sql);
        } else {
            $sql = "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE category = '$cat'".$album_filter;
            $result = db_query($sql);
        }
        while ($row = mysql_fetch_array($result)) {
            $album_set_array[] = $row['aid'];
        } // while
        mysql_free_result($result);
    //}
    if (count($album_set_array)&&$cat) {
        $set = '';
        foreach ($album_set_array as $album) $set .= $album . ',';
        $set = substr($set, 0, -1);
        $current_album_set = "AND aid IN ($set) ";
        $ALBUM_SET .= $current_album_set;
    } elseif ($cat) {
        $current_album_set = "AND aid IN (-1) ";
        $ALBUM_SET .= $current_album_set;
    }
    // Gather gallery statistics
    if ($cat == 0) {
        $result = db_query("SELECT count(*) FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE 1".$album_filter);
        $nbEnr = mysql_fetch_array($result);
        $album_count = $nbEnr[0];
        mysql_free_result($result);

        $sql = "SELECT count(*) FROM {$CONFIG['TABLE_PICTURES']} as p ".
                'LEFT JOIN '.$CONFIG['TABLE_ALBUMS'].' as a '.
                'ON a.aid=p.aid '.
                'WHERE 1'.$pic_filter;
        $result = db_query($sql);
        $nbEnr = mysql_fetch_array($result);
        $picture_count = $nbEnr[0];
        mysql_free_result($result);

        $sql = "SELECT count(*) FROM {$CONFIG['TABLE_COMMENTS']} as c ".
                'LEFT JOIN '.$CONFIG['TABLE_PICTURES'].' as p '.
                'ON c.pid=p.pid '.
                'LEFT JOIN '.$CONFIG['TABLE_ALBUMS'].' as a '.
                'ON a.aid=p.aid '.
                'WHERE 1'.$pic_filter;
        $result = db_query($sql);
        $nbEnr = mysql_fetch_array($result);
        $comment_count = $nbEnr[0];
        mysql_free_result($result);

        $sql = "SELECT count(*) FROM {$CONFIG['TABLE_CATEGORIES']} WHERE 1";
        $result = db_query($sql);
        $nbEnr = mysql_fetch_array($result);
        $cat_count = $nbEnr[0] - $HIDE_USER_CAT;
        mysql_free_result($result);

        $sql = "SELECT sum(hits) FROM {$CONFIG['TABLE_PICTURES']} as p ".
                'LEFT JOIN '.$CONFIG['TABLE_ALBUMS'].' as a '.
                'ON p.aid=a.aid '.
                'WHERE 1'.$pic_filter;
        $result = db_query($sql);
        $nbEnr = mysql_fetch_array($result);
        $hit_count = (int)$nbEnr[0];
        mysql_free_result($result);

        if (count($cat_data)) {
            $statistics = strtr($lang_list_categories['stat1'], array('[pictures]' => $picture_count,
                    '[albums]' => $album_count,
                    '[cat]' => $cat_count,
                    '[comments]' => $comment_count,
                    '[views]' => $hit_count));
        } else {
            $STATS_IN_ALB_LIST = true;
            $statistics = strtr($lang_list_categories['stat3'], array('[pictures]' => $picture_count,
                    '[albums]' => $album_count,
                    '[comments]' => $comment_count,
                    '[views]' => $hit_count));
        }
    } elseif ($cat >= FIRST_USER_CAT && $ALBUM_SET) {
        $result = db_query("SELECT count(*) FROM {$CONFIG['TABLE_ALBUMS']} WHERE 1 $current_album_set");
        $nbEnr = mysql_fetch_array($result);
        $album_count = $nbEnr[0];
        mysql_free_result($result);

        $result = db_query("SELECT count(*) FROM {$CONFIG['TABLE_PICTURES']} WHERE 1 $current_album_set");
        $nbEnr = mysql_fetch_array($result);
        $picture_count = $nbEnr[0];
        mysql_free_result($result);

        $result = db_query("SELECT sum(hits) FROM {$CONFIG['TABLE_PICTURES']} WHERE 1 $current_album_set");
        $nbEnr = mysql_fetch_array($result);
        $hit_count = (int)$nbEnr[0];
        mysql_free_result($result);

        $statistics = strtr($lang_list_categories['stat2'], array('[pictures]' => $picture_count,
                '[albums]' => $album_count,
                '[views]' => $hit_count));
    } else {
        $statistics = '';
    }
}

function list_users()
{
    global $CONFIG, $PAGE, $FORBIDDEN_SET;
    global $lang_list_users, $lang_errors, $template_user_list_info_box, $cpg_show_private_album;

    if (defined('UDB_INTEGRATION')) {
        $result = udb_list_users_query($user_count);
    } else {
//        $sql = "SELECT user_id," . "        user_name," . "        COUNT(DISTINCT a.aid) as alb_count," . "        COUNT(DISTINCT pid) as pic_count," . "        MAX(pid) as thumb_pid " . "FROM {$CONFIG['TABLE_USERS']} AS u " . "INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON category = " . FIRST_USER_CAT . " + user_id " . "INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = a.aid " . "WHERE approved = 'YES' " . "$FORBIDDEN_SET " . "GROUP BY user_id " . "ORDER BY user_name ";
// Fixed correct album count DJMaze
        $sql = "SELECT user_id, " .
               "user_name, " .
               "COUNT(DISTINCT a.aid) as alb_count, " .
               "COUNT(DISTINCT pid) as pic_count, " .
               "MAX(pid) as thumb_pid " .
               "FROM {$CONFIG['TABLE_USERS']} AS u " .
               "INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON category = " . FIRST_USER_CAT . " + user_id " .
               "LEFT JOIN {$CONFIG['TABLE_PICTURES']} AS p ON (p.aid = a.aid AND approved = 'YES') ";
        if ($FORBIDDEN_SET != "" && !$cpg_show_private_album) $sql .= "WHERE $FORBIDDEN_SET ";
        $sql .= "GROUP BY user_id " .
                "ORDER BY user_name";

        $result = db_query($sql);

        $user_count = mysql_num_rows($result);
    }

    if (!$user_count) {
        msg_box($lang_list_users['user_list'], $lang_list_users['no_user_gal'], '', '', '100%');
        mysql_free_result($result);
        return;
    }

    $user_per_page = $CONFIG['thumbcols'] * $CONFIG['thumbrows'];
    $totalPages = ceil($user_count / $user_per_page);
    if ($PAGE > $totalPages) $PAGE = 1;
    $lower_limit = ($PAGE-1) * $user_per_page;
    $upper_limit = min($user_count, $PAGE * $user_per_page);
    $row_count = $upper_limit - $lower_limit;

    if (defined('UDB_INTEGRATION')) {
        $rowset = udb_list_users_retrieve_data($result, $lower_limit, $row_count);
    } else {
        $rowset = array();
        $i = 0;
        mysql_data_seek($result, $lower_limit);
        while (($row = mysql_fetch_array($result)) && ($i++ < $row_count)) $rowset[] = $row;
        mysql_free_result($result);
    }

    $user_list = array();
    foreach ($rowset as $user) {
        $user_thumb = '<img src="images/nopic.jpg" class="image" border="0" />';
        $user_pic_count = $user['pic_count'];
        $user_thumb_pid = $user['thumb_pid'];
        $user_album_count = $user['alb_count'];

        if ($user_pic_count) {
            $sql = "SELECT filepath, filename, url_prefix, pwidth, pheight " . "FROM {$CONFIG['TABLE_PICTURES']} " . "WHERE pid='$user_thumb_pid'";
            $result = db_query($sql);
            if (mysql_num_rows($result)) {
                $picture = mysql_fetch_array($result);
                mysql_free_result($result);
                $pic_url =  get_pic_url($picture, 'thumb');
                if (!is_image($picture['filename'])) {
                        $image_info = getimagesize($pic_url);
                        $picture['pwidth'] = $image_info[0];
                        $picture['pheight'] = $image_info[1];
                }
                $image_size = compute_img_size($picture['pwidth'], $picture['pheight'], $CONFIG['alb_list_thumb_size']);
                    $user_thumb = "<img src=\"" . get_pic_url($picture, 'thumb') . "\" class=\"image\" {$image_size['geom']} border=\"0\" alt=\"\">";
            }
        }

        $albums_txt = sprintf($lang_list_users['n_albums'], $user_album_count);
        $pictures_txt = sprintf($lang_list_users['n_pics'], $user_pic_count);

        $params = array('{USER_NAME}' => $user['user_name'],
            '{USER_ID}' => $user['user_id'],
            '{ALBUMS}' => $albums_txt,
            '{PICTURES}' => $pictures_txt,
            );
        $caption = template_eval($template_user_list_info_box, $params);

        $user_list[] = array('cat' => FIRST_USER_CAT + $user['user_id'],
            'image' => $user_thumb,
            'caption' => $caption,
            );
    }
    theme_display_thumbnails($user_list, $user_count, '', '', 1, $PAGE, $totalPages, false, true, 'user');
}
// List all albums
function list_albums()
{
    global $CONFIG, $USER, $USER_DATA, $PAGE, $lastup_date_fmt,$FORBIDDEN_SET;
    global $cat;
    global $lang_list_albums, $lang_errors,$cpg_show_private_album;

    $alb_per_page = $CONFIG['albums_per_page'];
    $maxTab = $CONFIG['max_tabs'];

    $album_filter='';
    $pic_filter='';
    $pic_subquery='';

    if (!empty($FORBIDDEN_SET) && !$cpg_show_private_album) {
        $album_filter = ' and '.str_replace('p.','a.',$FORBIDDEN_SET);
        $pic_filter = ' and '.$FORBIDDEN_SET;
    }


    $result = db_query("SELECT count(*) FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE category = '$cat'".$album_filter);
    $nbEnr = mysql_fetch_array($result);
    $nbAlb = $nbEnr[0];
    mysql_free_result($result);

    if (!$nbAlb) return;

    $totalPages = ceil($nbAlb / $alb_per_page);

    if ($PAGE > $totalPages) $PAGE = 1;
    $lower_limit = ($PAGE-1) * $alb_per_page;
    $upper_limit = min($nbAlb, $PAGE * $alb_per_page);
    $limit = "LIMIT " . $lower_limit . "," . ($upper_limit - $lower_limit);

    $sql = 'SELECT a.aid, a.title, a.description, visibility, filepath, '.
           'filename, url_prefix, pwidth, pheight '.
           'FROM '.$CONFIG['TABLE_ALBUMS'].' as a '.
           'LEFT JOIN '.$CONFIG['TABLE_PICTURES'].' as p '.
           'ON a.thumb=p.pid '.
           'WHERE category='.$cat.$album_filter.
           ' ORDER BY a.pos '.
           $limit;


    $alb_thumbs_q = db_query($sql);
    $alb_thumbs = db_fetch_rowset($alb_thumbs_q);
    mysql_free_result($alb_thumbs_q);

    $disp_album_count = count($alb_thumbs);
    $album_set = '';
    foreach($alb_thumbs as $value) {
        $album_set .= $value['aid'] . ', ';
    }
    $album_set = '(' . substr($album_set, 0, -2) . ')';

    $sql = "SELECT aid, count(pid) as pic_count, max(pid) as last_pid, max(ctime) as last_upload ".
           "FROM {$CONFIG['TABLE_PICTURES']} ".
           "WHERE aid IN $album_set AND approved = 'YES' ".
           "GROUP BY aid";
    $alb_stats_q = db_query($sql);
    $alb_stats = db_fetch_rowset($alb_stats_q);
    mysql_free_result($alb_stats_q);

    foreach($alb_stats as $key => $value) {
        $cross_ref[$value['aid']] = &$alb_stats[$key];
    }

    for ($alb_idx = 0; $alb_idx < $disp_album_count; $alb_idx++) {
        $alb_thumb = &$alb_thumbs[$alb_idx];
        $aid = $alb_thumb['aid'];

        if (isset($cross_ref[$aid])) {
            $alb_stat = $cross_ref[$aid];
            $count = $alb_stat['pic_count'];
        } else {
            $alb_stat = array();
            $count = 0;
        }
        // Inserts a thumbnail if the album contains 1 or more images

        $visibility = $alb_thumb['visibility'];
        if ($visibility == '0' || $visibility == (FIRST_USER_CAT + USER_ID) || in_array($visibility, $USER_DATA['groups']) || $USER_DATA['can_see_all_albums'] || $CONFIG['allow_private_albums']==0) {
            if ($count > 0) {
                if ($alb_thumb['filename']) {
                    $picture = &$alb_thumb;
                } else {
                    $sql = "SELECT filepath, filename, url_prefix, pwidth, pheight ".
                           "FROM {$CONFIG['TABLE_PICTURES']} ".
                           "WHERE pid='{$alb_stat['last_pid']}'";
                    $result = db_query($sql);
                    $picture = mysql_fetch_array($result);
                    mysql_free_result($result);
                }
                $pic_url =  get_pic_url($picture, 'thumb');
                if (!is_image($picture['filename'])) {
                        $image_info = getimagesize($pic_url);
                        $picture['pwidth'] = $image_info[0];
                        $picture['pheight'] = $image_info[1];
                }
                $image_size = compute_img_size($picture['pwidth'], $picture['pheight'], $CONFIG['alb_list_thumb_size']);
                $alb_list[$alb_idx]['thumb_pic'] = "<img src=\"" . $pic_url . "\" class=\"image\" {$image_size['geom']} border=\"0\" alt=\"{$picture['filename']}\">";
            } else { // Inserts an empty thumbnail if the album contains 0 images
                $image_size = compute_img_size(100, 75, $CONFIG['alb_list_thumb_size']);

                $alb_list[$alb_idx]['thumb_pic'] = "<img src=\"images/nopic.jpg\" {$image_size['geom']} alt=\"\" border=\"0\" class=\"image\" />";
            }
        } elseif ($CONFIG['show_private']) {
            $image_size = compute_img_size(100, 75, $CONFIG['alb_list_thumb_size']);
            $alb_list[$alb_idx]['thumb_pic'] = "<img src=\"images/private.jpg\" {$image_size['geom']} alt=\"\" border=\"0\" class=\"image\" />";

        }
        // Prepare everything

        if ($visibility == '0' || $visibility == (FIRST_USER_CAT + USER_ID) || in_array($visibility, $USER_DATA['groups']) || $USER_DATA['can_see_all_albums'] || $CONFIG['allow_private_albums']==0) {
            $last_upload_date = $count ? localised_date($alb_stat['last_upload'], $lastup_date_fmt) : '';
            $alb_list[$alb_idx]['aid'] = $alb_thumb['aid'];
            $alb_list[$alb_idx]['album_title'] = $alb_thumb['title'];
            $alb_list[$alb_idx]['album_desc'] = bb_decode($alb_thumb['description']);
            $alb_list[$alb_idx]['pic_count'] = $count;
            $alb_list[$alb_idx]['last_upl'] = $last_upload_date;
            $alb_list[$alb_idx]['album_info'] = sprintf($lang_list_albums['n_pictures'], $count) . ($count ? sprintf($lang_list_albums['last_added'], $last_upload_date) : "");
            $alb_list[$alb_idx]['album_adm_menu'] = (GALLERY_ADMIN_MODE || (USER_ADMIN_MODE && $cat == USER_ID + FIRST_USER_CAT)) ? html_albummenu($alb_thumb['aid']) : ' ';
        } elseif ($CONFIG['show_private']) { // uncomment this else block to show private album description
            $last_upload_date = $count ? localised_date($alb_stat['last_upload'], $lastup_date_fmt) : '';
            $alb_list[$alb_idx]['aid'] = $alb_thumb['aid'];
            $alb_list[$alb_idx]['album_title'] = $alb_thumb['title'];
            $alb_list[$alb_idx]['album_desc'] = bb_decode($alb_thumb['description']);
            $alb_list[$alb_idx]['pic_count'] = $count;
            $alb_list[$alb_idx]['last_upl'] = $last_upload_date;
            $alb_list[$alb_idx]['album_info'] = sprintf($lang_list_albums['n_pictures'], $count) . ($count ? sprintf($lang_list_albums['last_added'], $last_upload_date) : "");
            $alb_list[$alb_idx]['album_adm_menu'] = (GALLERY_ADMIN_MODE || (USER_ADMIN_MODE && $cat == USER_ID + FIRST_USER_CAT)) ? html_albummenu($alb_thumb['aid']) : ' ';
        }
    }

    theme_display_album_list($alb_list, $nbAlb, $cat, $PAGE, $totalPages);
}

/**
 */
// List category albums
// This has been added to list the category albums largely a repetition of code elsewhere
// Redone for a cleaner approach
function list_cat_albums($cat = 0)
{
    global $CONFIG, $USER, $lastup_date_fmt, $HTTP_GET_VARS, $USER_DATA, $FORBIDDEN_SET;
    global $lang_list_albums, $lang_errors,$cpg_show_private_album;
    $PAGE = 1;
    if ($cat == 0) {
        return '';
    }

    $alb_per_page = $CONFIG['albums_per_page'];
    $maxTab = $CONFIG['max_tabs'];

    $album_filter='';
    $pic_filter='';
    if (!empty($FORBIDDEN_SET) && !$cpg_show_private_album) {
        $album_filter = ' and '.str_replace('p.','a.',$FORBIDDEN_SET);
        $pic_filter = ' and '.$FORBIDDEN_SET;
    }

    $sql = "SELECT count(*) FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE category = '$cat'".$album_filter;
    $result = db_query($sql);
    $nbEnr = mysql_fetch_array($result);
    $nbAlb = $nbEnr[0];
    mysql_free_result($result);

    if ($nbAlb == 0) {
        return;
    }

    $totalPages = ceil($nbAlb / $alb_per_page);

    if ($PAGE > $totalPages) $PAGE = 1;
    $lower_limit = ($PAGE-1) * $alb_per_page;
    $upper_limit = min($nbAlb, $PAGE * $alb_per_page);
    $limit = "LIMIT " . $lower_limit . "," . ($upper_limit - $lower_limit);


    /*
    $sql = "SELECT a.aid, a.title, a.description, visibility, filepath, ".
           "filename, url_prefix, pwidth, pheight ".
           "FROM {$CONFIG['TABLE_ALBUMS']} as a ".
           "LEFT JOIN {$CONFIG['TABLE_PICTURES']} as p ON thumb=pid ".
           "WHERE category = $cat ORDER BY a.pos ".$limit;

    */
    $sql = 'SELECT a.aid, a.title, a.description, visibility, filepath, '.
           'filename, url_prefix, pwidth, pheight '.
           'FROM '.$CONFIG['TABLE_ALBUMS'].' as a '.
           'LEFT JOIN '.$CONFIG['TABLE_PICTURES'].' as p '.
           'ON a.thumb=p.pid '.
           'WHERE category='.$cat.$album_filter.
           ' ORDER BY a.pos '.
           $limit;

    $alb_thumbs_q = db_query($sql);
    $alb_thumbs = db_fetch_rowset($alb_thumbs_q);
    mysql_free_result($alb_thumbs_q);

    $disp_album_count = count($alb_thumbs);
    $album_set = '';
    foreach($alb_thumbs as $value) {
        $album_set .= $value['aid'] . ', ';
    }
    $album_set = '(' . substr($album_set, 0, -2) . ')';

    $sql = "SELECT aid, count(pid) as pic_count, max(pid) as last_pid, max(ctime) as last_upload ".
           "FROM {$CONFIG['TABLE_PICTURES']} ".
           "WHERE aid IN $album_set AND approved = 'YES' ".
           "GROUP BY aid";
    $alb_stats_q = db_query($sql);
    $alb_stats = db_fetch_rowset($alb_stats_q);
    mysql_free_result($alb_stats_q);

    foreach($alb_stats as $key => $value) {
        $cross_ref[$value['aid']] = &$alb_stats[$key];
    }

    for ($alb_idx = 0; $alb_idx < $disp_album_count; $alb_idx++) {
        $alb_thumb = &$alb_thumbs[$alb_idx];
        $aid = $alb_thumb['aid'];

        if (isset($cross_ref[$aid])) {
            $alb_stat = $cross_ref[$aid];
            $count = $alb_stat['pic_count'];
        } else {
            $alb_stat = array();
            $count = 0;
        }
        // Inserts a thumbnail if the album contains 1 or more images
        $visibility = $alb_thumb['visibility'];
        if ($visibility == '0' || $visibility == (FIRST_USER_CAT + USER_ID) || in_array($visibility, $USER_DATA['groups']) || $USER_DATA['can_see_all_albums'] || $CONFIG['allow_private_albums']==0) { // test for visibility
            if ($count > 0) { // Inserts a thumbnail if the album contains 1 or more images
                if ($alb_thumb['filename']) {
                    $picture = &$alb_thumb;
                } else {
                    $sql = "SELECT filepath, filename, url_prefix, pwidth, pheight " . "FROM {$CONFIG['TABLE_PICTURES']} " . "WHERE pid='{$alb_stat['last_pid']}'";
                    $result = db_query($sql);
                    $picture = mysql_fetch_array($result);
                    mysql_free_result($result);
                }
                $pic_url =  get_pic_url($picture, 'thumb');
                if (!is_image($picture['filename'])) {
                        $image_info = getimagesize($pic_url);
                        $picture['pwidth'] = $image_info[0];
                        $picture['pheight'] = $image_info[1];
                }
                $image_size = compute_img_size($picture['pwidth'], $picture['pheight'], $CONFIG['alb_list_thumb_size']);
                $alb_list[$alb_idx]['thumb_pic'] = "<img src=\"" . $pic_url . "\" class=\"image\" {$image_size['geom']} border=\"0\" alt=\"{$picture['filename']}\">";
            } else { // Inserts an empty thumbnail if the album contains 0 images
                $image_size = compute_img_size(100, 75, $CONFIG['alb_list_thumb_size']);
                $alb_list[$alb_idx]['thumb_pic'] = "<img src=\"images/nopic.jpg\" {$image_size['geom']} alt=\"\" border=\"0\" class=\"image\" />";
            }
        } elseif ($CONFIG['show_private']) {
            $image_size = compute_img_size(100, 75, $CONFIG['alb_list_thumb_size']);
            $alb_list[$alb_idx]['thumb_pic'] = "<img src=\"images/private.jpg\" {$image_size['geom']} alt=\"\" border=\"0\" class=\"image\" />";
        }
        // Prepare everything
        if ($visibility == '0' || $visibility == (FIRST_USER_CAT + USER_ID) || in_array($visibility, $USER_DATA['groups']) || $USER_DATA['can_see_all_albums']) {
            $last_upload_date = $count ? localised_date($alb_stat['last_upload'], $lastup_date_fmt) : '';
            $alb_list[$alb_idx]['aid'] = $alb_thumb['aid'];
            $alb_list[$alb_idx]['album_title'] = $alb_thumb['title'];
            $alb_list[$alb_idx]['album_desc'] = bb_decode($alb_thumb['description']);
            $alb_list[$alb_idx]['pic_count'] = $count;
            $alb_list[$alb_idx]['last_upl'] = $last_upload_date;
            $alb_list[$alb_idx]['album_info'] = sprintf($lang_list_albums['n_pictures'], $count) . ($count ? sprintf($lang_list_albums['last_added'], $last_upload_date) : "");
            $alb_list[$alb_idx]['album_adm_menu'] = (GALLERY_ADMIN_MODE || (USER_ADMIN_MODE && $cat == USER_ID + FIRST_USER_CAT)) ? html_albummenu($alb_thumb['aid']) : '';
        } elseif ($CONFIG['show_private']) { // uncomment this else block to show private album description
            $last_upload_date = $count ? localised_date($alb_stat['last_upload'], $lastup_date_fmt) : '';
            $alb_list[$alb_idx]['aid'] = $alb_thumb['aid'];
            $alb_list[$alb_idx]['album_title'] = $alb_thumb['title'];
            $alb_list[$alb_idx]['album_desc'] = bb_decode($alb_thumb['description']);
            $alb_list[$alb_idx]['pic_count'] = $count;
            $alb_list[$alb_idx]['last_upl'] = $last_upload_date;
            $alb_list[$alb_idx]['album_info'] = sprintf($lang_list_albums['n_pictures'], $count) . ($count ? sprintf($lang_list_albums['last_added'], $last_upload_date) : "");
            $alb_list[$alb_idx]['album_adm_menu'] = (GALLERY_ADMIN_MODE || (USER_ADMIN_MODE && $cat == USER_ID + FIRST_USER_CAT)) ? html_albummenu($alb_thumb['aid']) : '';
        }
    }
    ob_start();
    theme_display_album_list_cat($alb_list, $nbAlb, $cat, $PAGE, $totalPages);
    $cat_albums = ob_get_contents();
    ob_end_clean();
    return $cat_albums;
}

/**
 */
/**
 * Main code
 */

if (isset($HTTP_GET_VARS['page'])) {
    $PAGE = max((int)$HTTP_GET_VARS['page'], 1);
    $USER['lap'] = $PAGE;
} elseif (isset($USER['lap'])) {
    $PAGE = max((int)$USER['lap'], 1);
} else {
    $PAGE = 1;
}

if (isset($HTTP_GET_VARS['cat'])) {
    $cat = (int)$HTTP_GET_VARS['cat'];
}
// Gather data for categories
$breadcrumb = '';
$cat_data = array();
$statistics = '';
$STATS_IN_ALB_LIST = false;
$cpg_show_private_album = ($CONFIG['allow_private_albums'])?($CONFIG['show_private']):(true);

get_cat_list($breadcrumb, $cat_data, $statistics);

pageheader($BREADCRUMB_TEXT ? $BREADCRUMB_TEXT : $lang_index_php['welcome']);

$elements = preg_split("|/|", $CONFIG['main_page_layout'], -1, PREG_SPLIT_NO_EMPTY);
foreach ($elements as $element) {
    if (preg_match("/(\w+),*(\d+)*/", $element, $matches)) switch ($matches[1]) {
            case 'breadcrumb':
                // Added breadcrumb as a separate listable block from config
                if (($breadcrumb != '' || count($cat_data) > 0) && $cat !=0 ) theme_display_breadcrumb($breadcrumb, $cat_data);
                break;

            case 'catlist':
                if ($breadcrumb != '' || count($cat_data) > 0) theme_display_cat_list($breadcrumb, $cat_data, $statistics);
                if (isset($cat) && $cat == USER_GAL_CAT) list_users();
                flush();
                break;

            case 'alblist':
                list_albums();
                flush();
                break;

            case 'random':
                display_thumbnails('random', $cat, 1, $CONFIG['thumbcols'], max(1, $matches[2]), false);
                flush();
                break;

            case 'lastup':
                display_thumbnails('lastup', $cat, 1, $CONFIG['thumbcols'], max(1, $matches[2]), false);
                flush();
                break;
            case 'lastalb':
                display_thumbnails('lastalb', $cat, 1, $CONFIG['thumbcols'], max(1, $matches[2]), false);
                break;

            case 'topn':
                display_thumbnails('topn', $cat, 1, $CONFIG['thumbcols'], max(1, $matches[2]), false);
                flush();
                break;

            case 'toprated':
                display_thumbnails('toprated', $cat, 1, $CONFIG['thumbcols'], max(1, $matches[2]), false);
                flush();
                break;

            case 'lastcom':
                display_thumbnails('lastcom', $cat, 1, $CONFIG['thumbcols'], max(1, $matches[2]), false);
                flush();
                break;

            case 'lasthits':
                display_thumbnails('lasthits', $cat, 1, $CONFIG['thumbcols'], max(1, $matches[2]), false);
                flush();
                break;

            case 'anycontent':
                if ($cat == 0) {
                    include('anycontent.php');
                }
                flush();
                break;
        }
    }

    pagefooter();
    ob_end_flush();
    // Speed-up the random image query by 'keying' the image table
    if (time() - $CONFIG['randpos_interval'] > 86400) {
        $result = db_query("SELECT count(*) FROM {$CONFIG['TABLE_PICTURES']} WHERE 1");
        $nbEnr = mysql_fetch_array($result);
        mysql_free_result($result);
        $pic_count = $nbEnr[0];
        $granularity = floor($pic_count / RANDPOS_MAX_PIC);
        $result = db_query("UPDATE {$CONFIG['TABLE_PICTURES']} SET randpos = ROUND(RAND()*$granularity) WHERE 1");
        $result = db_query("UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '" . time() . "' WHERE name = 'randpos_interval'");
    }

    ?>
