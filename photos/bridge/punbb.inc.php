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
// CVS version: $Id: punbb.inc.php,v 1.2 2004/08/15 00:44:06 nibbler999 Exp $
// ------------------------------------------------------------------------- //
// PunBB 1.1.5 Integration for Coppermine                                    //
// ------------------------------------------------------------------------- //
// Modify the values below according to your Board installation              //
// ------------------------------------------------------------------------- //

// URL of your punbb
$path = 'http://www.mysite.com/punbb';

// local path to your punbb config file
require_once('../punbb/config.php');

// punbb mod == cpg Admin ?
define('MOD_IS_ADMIN', FALSE);

// ------------------------------------------------------------------------- //
// Nothing to edit below this line
// ------------------------------------------------------------------------- //

// automatic configuration
define('PUNBB_DB_NAME', $db_name); // The name of the database used by the board
define('PUNBB_DB_HOST', $db_host); // The name of the database server
define('PUNBB_DB_USERNAME', $db_username); // The username to use to connect to the database
define('PUNBB_DB_PASSWORD', $db_password); // The password to use to connect to the database
define('PUNBB_TABLE_PREFIX', $db_prefix); // The prefix used for the DB tables
define('PUNBB_WEB_PATH', $path); // The prefix used for the DB tables
define('PUNBB_USER_TABLE', 'users'); // The members table

// Group definitions
define('PUNBB_MOD_GROUP', 4);
define('PUNBB_GUEST_GROUP', 3);
define('PUNBB_MEMBERS_GROUP', 2);
define('PUNBB_ADMIN_GROUP', 1);

function udb_authenticate()
{
    global $USER_DATA, $CONFIG, $cookie_name, $UDB_DB_LINK_ID, $UDB_DB_NAME_PREFIX;
 
    // For error checking
    $CONFIG['TABLE_USERS'] = '**ERROR**';
    
    function unescape($str)
	{
		return (get_magic_quotes_gpc() == 1) ? stripslashes($str) : $str;
	}

    // Retrieve cookie stored login information
    
    // default user info
	$USER_DATA['user_id'] = 0;
	$USER_DATA['status'] = -1;
	$USER_DATA['user_name'] = 'Guest';
		
	if (isset($_COOKIE[$cookie_name]))
	{	
		list($cookie['username'], $cookie['password_hash']) = unserialize(unescape($_COOKIE[$cookie_name]));

		if (strcasecmp($cookie['username'], 'Guest'))
		{
			$result = db_query("SELECT id AS user_id, username AS user_name, status FROM ". $UDB_DB_NAME_PREFIX . PUNBB_TABLE_PREFIX . PUNBB_USER_TABLE ." WHERE username='" . addslashes($cookie['username']). "' AND password='". addslashes($cookie['password_hash'])."'",$UDB_DB_LINK_ID);	
			$USER_DATA = mysql_fetch_assoc($result);	
		}
	} 

	$USER_DATA['groups'] = array();

	// Define the basic groups
	        
	switch ($USER_DATA['status']) {
	
		case 0:
			$USER_DATA['groups'][0] = PUNBB_MEMBERS_GROUP;
			break;
		case 1:
			$USER_DATA['groups'][0] = PUNBB_MOD_GROUP;
			break;
		case 2:
			$USER_DATA['groups'][0] = PUNBB_ADMIN_GROUP;
			break;
		default:
			$USER_DATA['groups'][0] = PUNBB_GUEST_GROUP;
			break;	
	}
	
	if ($USER_DATA['status'] == -1) {
		define('USER_ID', 0);
	} else {
		define('USER_ID', (int)$USER_DATA['user_id']);
	}

	$user_group_set = '(' . implode(',', $USER_DATA['groups']) . ')';

	// Default group data
	$USER_DATA['group_quota'] = 1;
	$USER_DATA['can_rate_pictures'] = 0;
	$USER_DATA['can_send_ecards'] = 0;
	$USER_DATA['can_post_comments'] = 0;
	$USER_DATA['can_upload_pictures'] = 0;
	$USER_DATA['can_create_albums'] = 0;
	$USER_DATA['pub_upl_need_approval'] = 1;
	$USER_DATA['priv_upl_need_approval'] = 1;
	$USER_DATA['upload_form_config'] = 0;
	$USER_DATA['num_file_upload'] = 0; 
	$USER_DATA['num_URI_upload'] = 0;
	$USER_DATA['custom_user_upload'] = 0;

	$USER_DATA = array_merge($USER_DATA, cpgGetUserData($USER_DATA['groups'][0], $USER_DATA['groups'], PUNBB_GUEST_GROUP));
	
	$USER_DATA['has_admin_access'] = (($USER_DATA['status'] == 2) || (($USER_DATA['status'] == 1) && MOD_IS_ADMIN)) ? 1 : 0;
	$USER_DATA['can_see_all_albums'] = $USER_DATA['has_admin_access'];
	
	define('USER_NAME', $USER_DATA['user_name']);
	define('USER_GROUP', $USER_DATA['group_name']);
	define('USER_GROUP_SET', $user_group_set);
	define('USER_IS_ADMIN', $USER_DATA['has_admin_access']);
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

// Retrieve the name of a user
function udb_get_user_name($uid)
{
    global $CONFIG, $UDB_DB_LINK_ID, $UDB_DB_NAME_PREFIX;

    $sql = "SELECT username as user_name FROM " . $UDB_DB_NAME_PREFIX . PUNBB_TABLE_PREFIX . PUNBB_USER_TABLE . " WHERE id = '$uid'";

    $result = db_query($sql, $UDB_DB_LINK_ID);

    if (mysql_num_rows($result)) {
        $row = mysql_fetch_array($result);
        mysql_free_result($result);
        return $row['user_name'];
    } else {
        return '';
    }
}
// Retrieve the id of a user (Added to fix banning w/ bb integration - Nibbler)
function udb_get_user_id($username)
{
    global $CONFIG, $UDB_DB_LINK_ID, $UDB_DB_NAME_PREFIX;

    $username = addslashes($username);

    $sql = "SELECT id AS user_id FROM " . $UDB_DB_NAME_PREFIX . PUNBB_TABLE_PREFIX . PUNBB_USER_TABLE . " WHERE username = '$username'";

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
    header('Location: '. PUNBB_WEB_PATH . $target);
    exit;
}

// Register
function udb_register_page()
{
    $target = '/register.php';
    udb_redirect($target);
}
// Login
function udb_login_page()
{
	global $path;
	
	echo '<html><body onload="document.redir.submit();"><form name="redir" method="post" action="'.$path.'/redir.php"><input type="hidden" name="redir" value="login.php" /></form></body></html>';
	exit;
}
// Logout
function udb_logout_page()
{
	global $path;
	
	echo '<html><body onload="document.redir.submit();"><form name="redir" method="post" action="'.$path.'/redir.php"><input type="hidden" name="redir" value="login.php?action=out" /></form></body></html>';
	exit;
}
// Edit users
function udb_edit_users()
{
    $target = '/userlist.php';
    udb_redirect($target);
}
// Get user information
function udb_get_user_infos($uid)
{
	global $UDB_DB_NAME_PREFIX, $UDB_DB_LINK_ID, $lang_register_php;

    $sql = "SELECT username AS user_name, email AS user_email, registered AS user_regdate, location AS user_location, url AS user_website FROM " . $UDB_DB_NAME_PREFIX . PUNBB_TABLE_PREFIX . PUNBB_USER_TABLE . " WHERE id = '$uid'";
    $result = db_query($sql, $UDB_DB_LINK_ID);
    if (!mysql_num_rows($result)) cpg_die(ERROR, $lang_register_php['err_unk_user'], __FILE__, __LINE__);

    $user_data = mysql_fetch_array($result);
    $user_data['group_name'] = '';
    mysql_free_result($result);

    return $user_data;
}

// Edit user profile
function udb_edit_profile($uid)
{
    $target = "/profile.php?id=$uid";
    udb_redirect($target);
}

// Query used to list users
function udb_list_users_query(&$user_count)
{
    global $CONFIG, $FORBIDDEN_SET, $UDB_DB_LINK_ID;

    if ($FORBIDDEN_SET != "") $forbidden = "AND $FORBIDDEN_SET";
    $sql = "SELECT (category - " . FIRST_USER_CAT . ") as user_id," . "        '???' as user_name," . "        COUNT(DISTINCT a.aid) as alb_count," . "        COUNT(DISTINCT pid) as pic_count," . "        MAX(pid) as thumb_pid " . "FROM {$CONFIG['TABLE_ALBUMS']} AS a " . "INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = a.aid " . "WHERE approved = 'YES' AND category > " . FIRST_USER_CAT . " $forbidden GROUP BY category " . "ORDER BY category ";
    $result = db_query($sql, $UDB_DB_LINK_ID);

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
    $sql = "SELECT id AS user_id, username AS user_name FROM " . $UDB_DB_NAME_PREFIX . PUNBB_TABLE_PREFIX . PUNBB_USER_TABLE . " WHERE id IN $user_id_set";
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
    global $CONFIG ;

    $PUNBB_groups = array(
    	PUNBB_GUEST_GROUP => 'Guests',
    	PUNBB_MEMBERS_GROUP => 'Members',
        PUNBB_ADMIN_GROUP => 'Administrators',
        PUNBB_MOD_GROUP => 'Moderators'
        );

    $result = db_query("SELECT group_id, group_name FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1");
    while ($row = mysql_fetch_array($result)) {
        $cpg_groups[$row['group_id']] = $row['group_name'];
    }
    mysql_free_result($result);
    // Scan Coppermine groups that need to be deleted
    foreach($cpg_groups as $c_group_id => $c_group_name) {
        if ((!isset($PUNBB_groups[$c_group_id]))) {
            db_query("DELETE FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id = '" . $c_group_id . "' LIMIT 1");
            unset($cpg_groups[$c_group_id]);
        }
    }
    // Scan punBB groups that need to be created inside Coppermine table
    foreach($PUNBB_groups as $i_group_id => $i_group_name) {
        if ((!isset($cpg_groups[$i_group_id]))) {
            db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']} (group_id, group_name) VALUES ('$i_group_id', '" . addslashes($i_group_name) . "')");
            $cpg_groups[$i_group_id] = $i_group_name;
        }
    }
    // Update Group names
    foreach($PUNBB_groups as $i_group_id => $i_group_name) {
        if ($cpg_groups[$i_group_id] != $i_group_name) {
            db_query("UPDATE {$CONFIG['TABLE_USERGROUPS']} SET group_name = '" . addslashes($i_group_name) . "' WHERE group_id = '$i_group_id' LIMIT 1");
        }
    }
}
// Retrieve the album list used in gallery admin mode
function udb_get_admin_album_list()
{
    global $CONFIG, $UDB_DB_NAME_PREFIX, $UDB_DB_LINK_ID, $FORBIDDEN_SET;

    if (UDB_CAN_JOIN_TABLES) {
        $sql = "SELECT aid, CONCAT('(', username, ') ', a.title) AS cpg_title " . "FROM {$CONFIG['TABLE_ALBUMS']} AS a " . "INNER JOIN " . $UDB_DB_NAME_PREFIX . PUNBB_TABLE_PREFIX . PUNBB_USER_TABLE . " AS u ON category = (" . FIRST_USER_CAT . " + id) " . "ORDER BY cpg_title";
        return $sql;
    } else {
        $sql = "SELECT aid, IF(category > " . FIRST_USER_CAT . ", CONCAT('* ', a.title), CONCAT(' ', title)) AS cpg_title " . "FROM {$CONFIG['TABLE_ALBUMS']} " . "ORDER BY cpg_title";
        return $sql;
    }
}

function udb_util_filloptions()
{
    global $albumtbl, $picturetbl, $categorytbl, $lang_util_php, $CONFIG, $UDB_DB_NAME_PREFIX, $UDB_DB_LINK_ID;

    $usertbl = $UDB_DB_NAME_PREFIX . PUNBB_TABLE_PREFIX . PUNBB_USER_TABLE;

    if (UDB_CAN_JOIN_TABLES) {

        $query = "SELECT aid, category, IF(username IS NOT NULL, CONCAT('(', username, ') ', a.title), CONCAT(' - ', a.title)) AS title " . "FROM {$CONFIG['TABLE_ALBUMS']} AS a " . "LEFT JOIN $usertbl AS u ON category = (" . FIRST_USER_CAT . " + id) " . "ORDER BY category, title";
        $result = db_query($query, $UDB_DB_LINK_ID);
        // $num=mysql_numrows($result);
        echo '<select size="1" name="albumid">';

        while ($row = mysql_fetch_array($result)) {
            $sql = "SELECT name FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = " . $row["category"];
            $result2 = db_query($sql);
            $row2 = mysql_fetch_array($result2);

            print "<option value=\"" . $row["aid"] . "\">" . $row2["name"] . $row["title"] . "</option>\n";
        }

        print '</select> (3)';
        print '&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="'.$lang_util_php['submit_form'].'" class="submit" /> (4)';
        print '</form>';

    } else {

        // Query for list of public albums

        $public_albums = db_query("SELECT aid, a.title AS cpg_title, category FROM {$CONFIG['TABLE_ALBUMS']} WHERE category < " . FIRST_USER_CAT . " ORDER BY cpg_title");

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

        $user_album_ids_and_names = db_query("SELECT (id + ".FIRST_USER_CAT.") as id, CONCAT('(', username, ') ') as name FROM $usertbl ORDER BY name ASC",$UDB_DB_LINK_ID);

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
define('UDB_CAN_JOIN_TABLES', (PUNBB_DB_HOST == $CONFIG['dbserver'] && (PUNBB_DB_NAME == $CONFIG['dbname'] || PUNBB_DB_USERNAME == $CONFIG['dbuser'])));
// Connect to SMF Database if necessary
$UDB_DB_LINK_ID = 0;
$UDB_DB_NAME_PREFIX = PUNBB_DB_NAME ? '`' . PUNBB_DB_NAME . '`.' : '';
if (!UDB_CAN_JOIN_TABLES) {
    $UDB_DB_LINK_ID = @mysql_connect(PUNBB_DB_HOST, PUNBB_DB_USERNAME, PUNBB_DB_PASSWORD);
    
    if (!$UDB_DB_LINK_ID) die("<b>Coppermine critical error</b>:<br />Unable to connect to PunBB database !<br /><br />MySQL said: <b>" . mysql_error() . "</b>");
    mysql_select_db (PUNBB_DB_NAME, $UDB_DB_LINK_ID);
}
?>
