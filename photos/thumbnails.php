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
// CVS version: $Id: thumbnails.php,v 1.5 2004/07/24 15:03:53 gaugau Exp $
// ------------------------------------------------------------------------- //

define('IN_COPPERMINE', true);
define('THUMBNAILS_PHP', true);
define('INDEX_PHP', true);

require('include/init.inc.php');
if ($CONFIG['enable_smilies']) include("include/smilies.inc.php");

function get_subcat_data($parent, &$album_set_array, $level)
{
    global $CONFIG;

    $result = db_query("SELECT cid, name, description FROM {$CONFIG['TABLE_CATEGORIES']} WHERE parent = '$parent'");
    if (mysql_num_rows($result) > 0) {
        $rowset = db_fetch_rowset($result);
        foreach ($rowset as $subcat) {
            $result = db_query("SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = {$subcat['cid']}");
            $album_count = mysql_num_rows($result);
            while ($row = mysql_fetch_array($result)) {
                $album_set_array[] = $row['aid'];
            } // while
        }
        if ($level > 1) get_subcat_data($subcat['cid'], $album_set_array, $level -1);
    }
}

/**
 * Main code
 */

if (isset($HTTP_GET_VARS['sort'])) $USER['sort'] = $HTTP_GET_VARS['sort'];
if (isset($HTTP_GET_VARS['cat'])) $cat = (int)$HTTP_GET_VARS['cat'];
if (isset($HTTP_GET_VARS['uid'])) $USER['uid'] = (int)$HTTP_GET_VARS['uid'];
if (isset($HTTP_GET_VARS['search'])) {
    $USER['search'] = $HTTP_GET_VARS['search'];
    if (isset($HTTP_GET_VARS['type']) && $HTTP_GET_VARS['type'] == 'full') {
        $USER['search'] = '###' . $USER['search'];
    }
}

$album = $HTTP_GET_VARS['album'];

if (isset($HTTP_GET_VARS['page'])) {
    $page = max((int)$HTTP_GET_VARS['page'], 1);
} else {
    $page = 1;
}

$breadcrumb = '';
$breadcrumb_text = '';
$cat_data = array();
$lang_meta_album_names['lastupby'] = $lang_meta_album_names['lastup'];
$lang_meta_album_names['lastcomby'] = $lang_meta_album_names['lastcom'];

if (is_numeric($album)) {
    $result = db_query("SELECT category, title, aid, keyword, description FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='$album'");
    if (mysql_num_rows($result) > 0) {
        $CURRENT_ALBUM_DATA = mysql_fetch_array($result);
        $actual_cat = $CURRENT_ALBUM_DATA['category'];
        $CURRENT_ALBUM_KEYWORD = $CURRENT_ALBUM_DATA['keyword'];
        breadcrumb($actual_cat, $breadcrumb, $breadcrumb_text);
        $cat = - $album;
    }
} elseif (isset($cat) && $cat) { // Meta albums, we need to restrict the albums to the current category
    if ($cat < 0) {
        $result = db_query("SELECT category, title, aid, keyword,description FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='" . (- $cat) . "'");
        if (mysql_num_rows($result) > 0) {
            $CURRENT_ALBUM_DATA = mysql_fetch_array($result);
            $actual_cat = $CURRENT_ALBUM_DATA['category'];
                $CURRENT_ALBUM_KEYWORD = $CURRENT_ALBUM_DATA['keyword'];
        }

        $ALBUM_SET .= 'AND aid IN (' . (- $cat) . ') ';
        breadcrumb($actual_cat, $breadcrumb, $breadcrumb_text);
        $CURRENT_CAT_NAME = $CURRENT_ALBUM_DATA['title'];
            $CURRENT_ALBUM_KEYWORD = $CURRENT_ALBUM_DATA['keyword'];
    } else {
        $album_set_array = array();
        if ($cat == USER_GAL_CAT)
            $where = 'category > ' . FIRST_USER_CAT;
        else
            $where = "category = '$cat'";

        $result = db_query("SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE $where");
        while ($row = mysql_fetch_array($result)) {
            $album_set_array[] = $row['aid'];
        } // while
        if ($cat >= FIRST_USER_CAT) {
            $user_name = get_username($cat - FIRST_USER_CAT);
            $CURRENT_CAT_NAME = sprintf($lang_list_categories['xx_s_gallery'], $user_name);
        } else {
            $result = db_query("SELECT name FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = '$cat'");
            if (mysql_num_rows($result) == 0) cpg_die(CRITICAL_ERROR, $lang_errors['non_exist_cat'], __FILE__, __LINE__);
            $row = mysql_fetch_array($result);
            $CURRENT_CAT_NAME = $row['name'];
        }
        get_subcat_data($cat, $album_set_array, $CONFIG['subcat_level']);
        // Treat the album set
        if (count($album_set_array)) {
            $set = '';
            foreach ($album_set_array as $album_id) $set .= ($set == '') ? $album_id : ',' . $album_id;
            $ALBUM_SET .= "AND aid IN ($set) ";
        }

        breadcrumb($cat, $breadcrumb, $breadcrumb_text);
    }
}

pageheader(isset($CURRENT_ALBUM_DATA) ? $CURRENT_ALBUM_DATA['title'] : $lang_meta_album_names[$album]);
if ($breadcrumb) {
  if(!(strpos($CONFIG['main_page_layout'],"breadcrumb")===false)){
            theme_display_breadcrumb($breadcrumb, $cat_data);
        }
    theme_display_cat_list($breadcrumb, $cat_data, '');
}

display_thumbnails($album, (isset($cat) ? $cat : 0), $page, $CONFIG['thumbcols'], $CONFIG['thumbrows'], true);
pagefooter();
ob_end_flush();
?>
