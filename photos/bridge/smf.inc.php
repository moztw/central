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
// CVS version: $Id: smf.inc.php,v 1.7 2004/07/24 15:04:10 gaugau Exp $
// ------------------------------------------------------------------------- //
// As a special exception, the copyright holders of Coppermine Photo Gallery //
// give you permission to link Coppermine Photo Gallery with independent     //
// modules that communicate with SimpleMachines Forum solely through this    //
// 'bridge file' interface, regardless of the license terms of these         //
// independent modules, and to copy and distribute the resulting combined    //
// work under terms of your choice, provided that every copy of the combined //
// work is accompanied by a complete copy of the source code of Coppermine   //
// Photo Gallery (the version of Coppermine Photo Gallery used to produce    //
// the combined work), being distributed under the terms of the GNU General  //
// Public License plus this exception.  An independent module is a module    //
// which is not derived from or based on Coppermine Photo Gallery.           //
//                                                                           //
// Note that people who make modified versions of Coppermine Photo Gallery   //
// are not obligated to grant this special exception for their modified      //
// versions; it is their choice whether to do so.  The GNU General Public    //
// License gives permission to release a modified version without this       //
// exception; this exception also makes it possible to release a modified    //
// version which carries forward this exception.                             //
// ------------------------------------------------------------------------- //
// Simple Machines Forum Integration for Coppermine                          //
// V0.5 Public Beta                                                          //
// ------------------------------------------------------------------------- //
// Modify the value below according to your Board installation               //
//                                                                           //
// WARNING : Do not activate this bridge if you already have pictures or     //
//           usergroups in your gallery.                                     //
// ------------------------------------------------------------------------- //

// Set this to the location of your Settings file:
$path = '../smf';

// Comment this out if you want to default user's group to 'Registered'
// rather than using Post Count based groups.
define('USE_POST_GROUPS', 1);

// Set the names of implied groups here
define('CM_ADMIN_GROUP_NAME', 'Administrators');
define('CM_MEMBERS_GROUP_NAME', 'Registered');
define('CM_GUEST_GROUP_NAME', 'Anonymous');
define('CM_BANNED_GROUP_NAME', 'Banned');
define('CM_GMOD_GROUP_NAME', 'Global Moderators');

// ------------------------------------------------------------------------- //
// Nothing to edit below this line
// ------------------------------------------------------------------------- //

// Otherwise, try to autodetect SMF path if not set:
if (substr($path, -1) == '/')
        $path = substr($path, 0, -1);

$possible_paths = array($path, '..', '../forum', '../forums',
'../community', '../yabbse', '../smf');

$correct = 0;
while (!file_exists($possible_paths[$correct] . '/Settings.php') &&
count($possible_paths) > $correct)
        $correct++;

require_once($possible_paths[$correct] . '/Settings.php');

define ('SMF', 1);

// other includes
cm_include_smf_funcs("$sourcedir/Load.php", array("reloadSettings", "md5_hmac", "loadUserSettings"));
cm_include_smf_funcs("$sourcedir/Subs.php", array("updateMemberData", "updateStats", "updateSettings"));

// database configuration
define('SMF_DB_NAME', $db_name); // The name of the database used by the board
define('SMF_DB_HOST', $db_server); // The name of the database server
define('SMF_DB_USERNAME', $db_user); // The username to use to connect to the database
define('SMF_DB_PASSWORD', $db_passwd); // The password to use to connect to the database

// The web path to your SMF Board directory
define('SMF_WEB_PATH', "$boardurl/");

// The Name of the Cookie used for SMF logon
define('SMF_COOKIE_NAME', $cookiename);

// Prefix for the database tables
define('SMF_TABLE_PREFIX', $db_prefix); // Table Prefix

// Names for the database tables
define('SMF_USER_TABLE', 'members'); // The members table
define('SMF_GROUP_TABLE', 'membergroups'); // The groups table

// Group definitions (default values used by the board)
define('SMF_GMOD_GROUP', 2);
define('SMF_BANNED_GROUP', -3);
define('SMF_GUEST_GROUP', -1);
define('SMF_MEMBERS_GROUP', -2);
define('SMF_ADMIN_GROUP', 1);

define('SMF_PASSWD_SEED', 'ys');

function cm_include_smf_funcs ($source_file, $funcs)
{
        $fp = fopen ($source_file, "r");
        $len = filesize($source_file);

        $source = fread($fp, $len);
        fclose ($fp);
        $oe = error_reporting(E_ERROR | E_WARNING | E_PARSE);

        foreach ($funcs as $index => $func) {
                preg_match('/\n\s*(function ' . $func . '.*?)\n\s*(function|\?>)/si', $source, $f);
                $func = preg_replace("/db_query/s", "cm_db_query", $f[1]);
                eval ($func);
        }

        error_reporting ($oe);
}

function cm_db_query ($query, $other, $other2)
{
                global $UDB_DB_LINK_ID;

        return db_query($query, $UDB_DB_LINK_ID);
}

// Authenticate a user using cookies

function udb_authenticate()
{
    global $HTTP_COOKIE_VARS, $USER_DATA, $UDB_DB_LINK_ID, $UDB_DB_NAME_PREFIX, $CONFIG;
    global $HTTP_SERVER_VARS, $HTTP_X_FORWARDED_FOR, $HTTP_PROXY_USER, $REMOTE_ADDR;
    global $password, $username, $pwseed, $settings, $ID_MEMBER, $realname, $txt, $user_info, $user_settings;

    $pwseed = SMF_PASSWD_SEED;

        session_start();

        reloadSettings();
        LoadUserSettings();

    // For error checking
    $CONFIG['TABLE_USERS'] = '**ERROR**';

    // get first 50 chars
    $HTTP_USER_AGENT = substr($HTTP_SERVER_VARS['HTTP_USER_AGENT'], 0, 50);
    $REMOTE_ADDR = substr($HTTP_SERVER_VARS['REMOTE_ADDR'], 0, 50);

    /* If the user is a guest, initialize all the critial user settings */
    if (!$ID_MEMBER) {
        $USER_DATA = cpgGetUserData(SMF_GUEST_GROUP, array(SMF_GUEST_GROUP), SMF_GUEST_GROUP);

        define('USER_ID', 0);
        define('USER_NAME', 'Anonymous');
        define('USER_GROUP_SET', '(' . SMF_GUEST_GROUP . ')');
        define('USER_IS_ADMIN', 0);
        define('USER_CAN_SEND_ECARDS', (int)$USER_DATA['can_send_ecards']);
        define('USER_CAN_RATE_PICTURES', (int)$USER_DATA['can_rate_pictures']);
        define('USER_CAN_POST_COMMENTS', (int)$USER_DATA['can_post_comments']);
        define('USER_CAN_UPLOAD_PICTURES', (int)$USER_DATA['can_upload_pictures']);
        define('USER_CAN_CREATE_ALBUMS', 0);
        define('USER_UPLOAD_FORM', (int)$USER_DATA['upload_form_config']);
        define('CUSTOMIZE_UPLOAD_FORM', (int)$USER_DATA['custom_user_upload']);
        define('NUM_FILE_BOXES', (int)$USER_DATA['num_file_upload']);
        define('NUM_URI_BOXES', (int)$USER_DATA['num_URI_upload']);
    } else {
        if ($user_settings['ID_GROUP']){
                $cm_group_id = $user_settings['ID_GROUP'];
        }  else if ($user_settings['ID_POST_GROUP'] && defined ('USE_POST_GROUPS')){
                $cm_group_id = $user_settings['ID_POST_GROUP'];
        } else {
                $cm_group_id = SMF_MEMBERS_GROUP;
        }

        // Retrieve group information
                $USER_DATA = cpgGetUserData($cm_group_id, $user_info['groups'], SMF_GUEST_GROUP);
                $USER_DATA['has_admin_access'] = $user_info['is_admin'];
        $USER_DATA['can_see_all_albums']=$USER_DATA['has_admin_access'] | in_array(SMF_GMOD_GROUP,$user_info['groups']);

        define('USER_ID', $ID_MEMBER);
        define('USER_NAME', $user_info['name']);
        define('SMF_USER_NAME', $user_info['username']);
        define('USER_GROUP', $USER_DATA['group_name']);
        define('USER_GROUP_SET', '(' . implode(",", $USER_DATA['groups']) . ')');
        define('USER_IS_ADMIN', $user_info['is_admin']);
        define('USER_CAN_SEND_ECARDS', (int)$USER_DATA['can_send_ecards']);
        define('USER_CAN_RATE_PICTURES', (int)$USER_DATA['can_rate_pictures']);
        define('USER_CAN_POST_COMMENTS', (int)$USER_DATA['can_post_comments']);
        define('USER_CAN_UPLOAD_PICTURES', (int)$USER_DATA['can_upload_pictures']);
        define('USER_CAN_CREATE_ALBUMS', (int)$USER_DATA['can_create_albums']);
        define('USER_UPLOAD_FORM', (int)$USER_DATA['upload_form_config']);
        define('CUSTOMIZE_UPLOAD_FORM', (int)$USER_DATA['custom_user_upload']);
        define('NUM_FILE_BOXES', (int)$USER_DATA['num_file_upload']);
        define('NUM_URI_BOXES', (int)$USER_DATA['num_URI_upload']);
    }
}

// Retrieve the name of a user
function udb_get_user_name($uid)
{
    global $UDB_DB_LINK_ID, $UDB_DB_NAME_PREFIX, $CONFIG;

    $sql = "SELECT realName as user_name " . "FROM " . $UDB_DB_NAME_PREFIX . SMF_TABLE_PREFIX . SMF_USER_TABLE . " " . "WHERE ID_MEMBER = '$uid'";

    $result = db_query($sql, $UDB_DB_LINK_ID);

    if (mysql_num_rows($result)) {
        $row = mysql_fetch_array($result);
        mysql_free_result($result);
        return $row['user_name'];
    } else {
        return '';
    }
}
// Retrieve the name of a user (Added to fix banning w/ bb integration - Nibbler)
function udb_get_user_id($username)
{
    global $UDB_DB_LINK_ID, $UDB_DB_NAME_PREFIX, $CONFIG;

    $username = addslashes($username);

    $sql = "SELECT ID_MEMBER as user_id " . "FROM " . $UDB_DB_NAME_PREFIX . SMF_TABLE_PREFIX . SMF_USER_TABLE . " " . "WHERE realName = '$username'";

    $result = db_query($sql, $UDB_DB_LINK_ID);

    if (mysql_num_rows($result)) {
        $row = mysql_fetch_array($result);
        mysql_free_result($result);
        return $row['user_id'];
    } else {
        return '';
    }
}

// Redirect
function udb_redirect($target)
{
    header('Location: '. SMF_WEB_PATH . $target);
    exit;
}

// Register
function udb_register_page()
{
    $target = 'index.php?action=register';
    udb_redirect($target);
}

// Login
function udb_login_page()
{
        $_SESSION['login_url'] = $HTTP_GET_VARS['referer'] ? $HTTP_GET_VARS['referer'] : 'index.php';
        $_SESSION['login_url'] = "http://localhost/cgpcvs/";
    $target = 'index.php?action=login';
    udb_redirect($target);
}

// Logout
function udb_logout_page()
{
    $target = 'index.php?&action=logout;sesc=' . $_SESSION['rand_code'];
    udb_redirect($target);
}

// Edit users
function udb_edit_users()
{
    $target = 'index.php?action=mlist';
    udb_redirect($target);
}

// Get user information
function udb_get_user_infos($uid)
{
    global $CONFIG, $UDB_DB_NAME_PREFIX, $UDB_DB_LINK_ID;
    global $lang_register_php;

    $sql = "SELECT realName as user_name, ID_GROUP as mgroup, ID_POST_GROUP, emailAddress as user_email, dateRegistered as user_regdate, " . "websiteURL as user_website " . "FROM " . $UDB_DB_NAME_PREFIX . SMF_TABLE_PREFIX . SMF_USER_TABLE . " " . "WHERE ID_MEMBER = '$uid'";
    $result = db_query($sql, $UDB_DB_LINK_ID);

    if (!mysql_num_rows($result)) cpg_die(ERROR, $lang_register_php['err_unk_user'], __FILE__, __LINE__);
    $user_data = mysql_fetch_array($result);
    mysql_free_result($result);

    $user_data['user_occupation'] = '';
    $user_data['user_location'] = '';
    $user_data['user_interests'] = '';

    if (!$user_data['mgroup'] && defined('USE_POST_GROUPS')) {
            $user_data['mgroup'] = $user_data['ID_POST_GROUP'];
    }

        $sql = "SELECT groupName " . "FROM " . $UDB_DB_NAME_PREFIX . SMF_TABLE_PREFIX . SMF_GROUP_TABLE . " " . "WHERE ID_GROUP = '{$user_data['mgroup']}' ";
    $result = db_query($sql, $UDB_DB_LINK_ID);

        if (mysql_num_rows($result)) {
            $row = mysql_fetch_array($result);
            $user_data['group_name'] = $row['groupName'];
    } else {
            $user_data['group_name'] = CM_MEMBERS_GROUP_NAME;
    }
    mysql_free_result($result);

    return $user_data;
}

// Edit user profile
function udb_edit_profile($uid)
{
    $target = 'index.php?action=profile;u=' . USER_ID;
    udb_redirect($target);
}

// Query used to list users
function udb_list_users_query(&$user_count)
{
    global $CONFIG, $FORBIDDEN_SET;

        if ($FORBIDDEN_SET != "") $forbidden = "AND $FORBIDDEN_SET";
    $sql = "SELECT (category - " . FIRST_USER_CAT . ") as user_id," . "                '???' as user_name," . "                COUNT(DISTINCT a.aid) as alb_count," . "                COUNT(DISTINCT pid) as pic_count," . "                MAX(pid) as thumb_pid " . "FROM {$CONFIG['TABLE_ALBUMS']} AS a " . "INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = a.aid " . "WHERE approved = 'YES' AND category > " . FIRST_USER_CAT . " $forbidden GROUP BY category " . "ORDER BY category ";
    $result = db_query($sql);

    $user_count = mysql_num_rows($result);

    return $result;
}

function udb_list_users_retrieve_data($result, $lower_limit, $count)
{
    global $CONFIG, $UDB_DB_NAME_PREFIX, $UDB_DB_LINK_ID;

    mysql_data_seek($result, $lower_limit);

    $rowset = array();
    $i = 0;
    $user_id_set = '';

    while (($row = mysql_fetch_array($result)) && ($i++ < $count)) {
        $user_id_set .= $row['user_id'] . ',';
        $rowset[] = $row;
    }

    mysql_free_result($result);

    $user_id_set = '(' . substr($user_id_set, 0, -1) . ')';
    $sql = "SELECT ID_MEMBER as user_id, realName as user_name " . "FROM " . $UDB_DB_NAME_PREFIX . SMF_TABLE_PREFIX . SMF_USER_TABLE . " " . "WHERE ID_MEMBER IN $user_id_set";
    $result = db_query($sql, $UDB_DB_LINK_ID);
    while ($row = mysql_fetch_array($result)) {
        $name[$row['user_id']] = $row['user_name'];
    }
    for($i = 0; $i < count($rowset); $i++) {
        $rowset[$i]['user_name'] = empty($name[$rowset[$i]['user_id']]) ? '???' : $name[$rowset[$i]['user_id']];
    }

    return $rowset;
}

// Group table synchronisation
function udb_synchronize_groups()
{
    global $CONFIG, $UDB_DB_NAME_PREFIX, $UDB_DB_LINK_ID;

    $result = db_query("SELECT ID_GROUP as usergroupid, groupName as title FROM " . $UDB_DB_NAME_PREFIX . SMF_TABLE_PREFIX . SMF_GROUP_TABLE , $UDB_DB_LINK_ID);
    while ($row = mysql_fetch_array($result)) {
        $SMF_groups[$row['usergroupid']] = $row['title'];
    }
    mysql_free_result($result);

    $SMF_groups[SMF_MEMBERS_GROUP] = CM_MEMBERS_GROUP_NAME;
    $SMF_groups[SMF_GUEST_GROUP] = CM_GUEST_GROUP_NAME;

    $result = db_query("SELECT group_id, group_name FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1");
    while ($row = mysql_fetch_array($result)) {
        $cpg_groups[$row['group_id']] = $row['group_name'];
    }
    mysql_free_result($result);
    // Scan Coppermine groups that need to be deleted
    foreach($cpg_groups as $c_group_id => $c_group_name) {
        if ((!isset($SMF_groups[$c_group_id]))) {
            db_query("DELETE FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id = '" . $c_group_id . "' LIMIT 1");
            unset($cpg_groups[$c_group_id]);
        }
    }
    // Scan Board groups that need to be created inside Coppermine table
    foreach($SMF_groups as $i_group_id => $i_group_name) {
        if ((!isset($cpg_groups[$i_group_id]))) {
            db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']} (group_id, group_name, group_quota) VALUES ('$i_group_id', '" . addslashes($i_group_name) . "', 1)");
            $cpg_groups[$i_group_id] = $i_group_name;
        }
    }
    // Update Group names

    foreach($SMF_groups as $i_group_id => $i_group_name){
            if ($cpg_groups[$i_group_id] != $i_group_name) {
                    db_query("UPDATE {$CONFIG['TABLE_USERGROUPS']} SET group_name = '".addslashes($i_group_name)."' WHERE group_id = '$i_group_id' LIMIT 1");
            }
    }
}

// Retrieve the album list used in gallery admin mode
function udb_get_admin_album_list()
{
    global $CONFIG, $UDB_DB_NAME_PREFIX, $UDB_DB_LINK_ID, $FORBIDDEN_SET;

    if (UDB_CAN_JOIN_TABLES) {
        $sql = "SELECT aid, CONCAT('(', realName, ') ', a.title) AS title " . "FROM {$CONFIG['TABLE_ALBUMS']} AS a " . "INNER JOIN " . $UDB_DB_NAME_PREFIX . SMF_TABLE_PREFIX . SMF_USER_TABLE . " AS u ON category = (" . FIRST_USER_CAT . " + ID_MEMBER) " . "ORDER BY title";
        return $sql;
    } else {
        $sql = "SELECT aid, IF(category > " . FIRST_USER_CAT . ", CONCAT('* ', title), CONCAT(' ', title)) AS title " . "FROM {$CONFIG['TABLE_ALBUMS']} " . "ORDER BY title";
        return $sql;
    }
}

function udb_util_filloptions()
{
    global $albumtbl, $picturetbl, $categorytbl, $lang_util_php, $CONFIG, $UDB_DB_NAME_PREFIX, $UDB_DB_LINK_ID;

    $usertbl = $UDB_DB_NAME_PREFIX.SMF_TABLE_PREFIX.SMF_USER_TABLE;

    if (UDB_CAN_JOIN_TABLES) {

        $query = "SELECT aid, category, IF(realName IS NOT NULL, CONCAT('(', realName, ') ', a.title), CONCAT(' - ', a.title)) AS title " . "FROM $albumtbl AS a " . "LEFT JOIN $usertbl AS u ON category = (" . FIRST_USER_CAT . " + ID_MEMBER) " . "ORDER BY category, title";
        $result = db_query($query, $UDB_DB_LINK_ID);
        // $num=mysql_numrows($result);
        echo '<select size="1" name="albumid">';

        while ($row = mysql_fetch_array($result)) {
            $sql = "SELECT name FROM $categorytbl WHERE cid = " . $row["category"];
            $result2 = db_query($sql);
            $row2 = mysql_fetch_array($result2);

            print "<option value=\"" . $row["aid"] . "\">" . $row2["name"] . $row["title"] . "</option>\n";
        }

        print '</select> (3)';
        print '&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="'.$lang_util_php['submit_form'].'" class="submit" /> (4)';
        print '</form>';

    } else {

        // Query for list of public albums

        $public_albums = db_query("SELECT aid, title, category FROM {$CONFIG['TABLE_ALBUMS']} WHERE category < " . FIRST_USER_CAT . " ORDER BY title");

        if (mysql_num_rows($public_albums)) {
            $public_result = db_fetch_rowset($public_albums);
        } else {
            $public_result = array();
        }

        // Initialize $merged_array
        $merged_array = array();

        // Count the number of albums returned.
        $end = count($public_result);

        // Cylce through the User albums.
        for($i=0;$i<$end;$i++) {

            //Create a new array sow we may sort the final results.
            $merged_array[$i]['id'] = $public_result[$i]['aid'];
            $merged_array[$i]['album_name'] = $public_result[$i]['title'];

            // Query the database to get the category name.
            $vQuery = "SELECT name, parent FROM " . $CONFIG['TABLE_CATEGORIES'] . " WHERE cid='" . $public_result[$i]['category'] . "'";
            $vRes = mysql_query($vQuery);
            $vRes = mysql_fetch_array($vRes);
            if (isset($merged_array[$i]['username_category'])) {
                $merged_array[$i]['username_category'] = (($vRes['name']) ? '(' . $vRes['name'] . ') ' : '').$merged_array[$i]['username_category'];
            } else {
                $merged_array[$i]['username_category'] = (($vRes['name']) ? '(' . $vRes['name'] . ') ' : '');
            }

        }

        // We transpose and divide the matrix into columns to prepare it for use in array_multisort().
        foreach ($merged_array as $key => $row) {
           $aid[$key] = $row['id'];
           $title[$key] = $row['album_name'];
           $album_lineage[$key] = $row['username_category'];
        }

        // We sort all columns in descending order and plug in $album_menu at the end so it is sorted by the common key.
        array_multisort($album_lineage, SORT_ASC, $title, SORT_ASC, $aid, SORT_ASC, $merged_array);

        // Query for list of user albums

        $user_albums = db_query("SELECT aid, title, category FROM {$CONFIG['TABLE_ALBUMS']} WHERE category >= " . FIRST_USER_CAT . " ORDER BY aid");
        if (mysql_num_rows($user_albums)) {
            $user_albums_list = db_fetch_rowset($user_albums);
        } else {
            $user_albums_list = array();
        }

        // Query for list of user IDs and names

        $user_album_ids_and_names = db_query("SELECT (ID_MEMBER + ".FIRST_USER_CAT.") as id, CONCAT('(', realName, ') ') as name FROM $usertbl ORDER BY name ASC",$UDB_DB_LINK_ID);

        if (mysql_num_rows($user_album_ids_and_names)) {
            $user_album_ids_and_names_list = db_fetch_rowset($user_album_ids_and_names);
        } else {
            $user_album_ids_and_names_list = array();
        }

        // Glue what we've got together.

        // Initialize $udb_i as a counter.
        if (count($merged_array)) {
            $udb_i = count($merged_array);
        } else {
            $udb_i = 0;
        }

        //Begin a set of nested loops to merge the various query results.
        foreach ($user_albums_list as $aq) {
            foreach ($user_album_ids_and_names_list as $uq) {
                if ($aq['category'] == $uq['id']) {
                    $merged_array[$udb_i]['id']= $aq['category'];
                    $merged_array[$udb_i]['album_name']= $aq['title'];
                    $merged_array[$udb_i]['username_category']= $uq['name'];
                    $udb_i++;
                }
            }
        }

        // The user albums and public albums have been merged into one list. Print the dropdown.
        echo '<select size="1" name="albumid">';

        foreach ($merged_array as $menu_item) {

            echo "<option value=\"" . $menu_item['id'] . "\">" . (isset($menu_item['username_category']) ? $menu_item['username_category'] : '') . $menu_item['album_name'] . "</option>\n";

        }

        // Close list, etc.
        print '</select> (3)';
        print '&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="'.$lang_util_php['submit_form'].'" class="submit" /> (4)';
        print '</form>';

    }

}

// ------------------------------------------------------------------------- //

// Define wheter we can join tables or not in SQL queries (same host & same db or user)
define('UDB_CAN_JOIN_TABLES', (SMF_DB_HOST == $CONFIG['dbserver'] && (SMF_DB_NAME == $CONFIG['dbname'] || SMF_DB_USERNAME == $CONFIG['dbuser'])));
// Connect to SMF Database if necessary
$UDB_DB_LINK_ID = 0;
$UDB_DB_NAME_PREFIX = SMF_DB_NAME ? '`' . SMF_DB_NAME . '`.' : '';
if (!UDB_CAN_JOIN_TABLES) {
    $UDB_DB_LINK_ID = @mysql_connect(SMF_DB_HOST, SMF_DB_USERNAME, SMF_DB_PASSWORD);

    if (!$UDB_DB_LINK_ID) die("<b>Coppermine critical error</b>:<br />Unable to connect to SMF Board database !<br /><br />MySQL said: <b>" . mysql_error() . "</b>");
    mysql_select_db (SMF_DB_NAME, $UDB_DB_LINK_ID);
}
?>
