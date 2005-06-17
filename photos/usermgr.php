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
// CVS version: $Id: usermgr.php,v 1.6 2004/07/24 15:03:53 gaugau Exp $
// ------------------------------------------------------------------------- //

define('IN_COPPERMINE', true);
define('USERMGR_PHP', true);
define('PROFILE_PHP', true);

require('include/init.inc.php');

if (defined('UDB_INTEGRATION')) udb_edit_users();

if (USER_ID !='') {
 if (GALLERY_ADMIN_MODE) {
  $lim_user = 0;
 }
 elseif ($CONFIG['allow_memberlist']) {
  $lim_user = 1;
  show_memberlist;
 }
 else {
  $lim_user = 2;
  cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
 }
}
else {
 $lim_user = 3;
 cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

function show_memberlist()
{
        db_query("DELETE FROM {$CONFIG['TABLE_USERS']} WHERE user_name = '' LIMIT 1");
        pageheader($lang_usermgr_php['title']);
        list_users();
        pagefooter();
        ob_end_flush();
}



function list_users()
{
    global $CONFIG, $PHP_SELF, $HTTP_GET_VARS;
    global $lang_usermgr_php, $lang_byte_units, $register_date_fmt;
    global $lim_user;


    $sort_codes = array('name_a' => 'user_name ASC',
        'name_d' => 'user_name DESC',
        'group_a' => 'group_name ASC',
        'group_d' => 'group_name DESC',
        'reg_a' => 'user_regdate ASC',
        'reg_d' => 'user_regdate DESC',
        'pic_a' => 'pic_count ASC',
        'pic_d' => 'pic_count DESC',
        'disku_a' => 'disk_usage ASC',
        'disku_d' => 'disk_usage DESC',
        'lv_a' => 'user_lastvisit ASC',
        'lv_d' => 'user_lastvisit DESC',
        );

    $sort = (!isset($HTTP_GET_VARS['sort']) || !isset($sort_codes[$HTTP_GET_VARS['sort']])) ? 'reg_d' : $HTTP_GET_VARS['sort'];

    $tab_tmpl = array('left_text' => '<td width="100%%" align="left" valign="middle" class="tableh1_compact" style="white-space: nowrap"><b>' . $lang_usermgr_php['u_user_on_p_pages'] . '</b></td>' . "\n",
        'tab_header' => '',
        'tab_trailer' => '',
        'active_tab' => '<td><img src="images/spacer.gif" width="1" height="1"></td>' . "\n" . '<td align="center" valign="middle" class="tableb_compact"><b>%d</b></td>',
        'inactive_tab' => '<td><img src="images/spacer.gif" width="1" height="1"></td>' . "\n" . '<td align="center" valign="middle" class="navmenu"><a href="' . $PHP_SELF . '?page=%d&sort=' . $sort . '"<b>%d</b></a></td>' . "\n"
        );

    $result = db_query("SELECT count(*) FROM {$CONFIG['TABLE_USERS']} WHERE 1");
    $nbEnr = mysql_fetch_array($result);
    $user_count = $nbEnr[0];
    mysql_free_result($result);

    if (!$user_count) cpg_die(CRITICAL_ERROR, $lang_usermgr_php['err_no_users'], __FILE__, __LINE__);

    $user_per_page = 25;
    $page = isset($HTTP_GET_VARS['page']) ? (int)$HTTP_GET_VARS['page'] : 1;
    $lower_limit = ($page-1) * $user_per_page;
    $total_pages = ceil($user_count / $user_per_page);

    $sql = "SELECT user_id, user_name, UNIX_TIMESTAMP(user_regdate) as user_regdate, UNIX_TIMESTAMP(user_lastvisit) as user_lastvisit, user_active, ".
           "COUNT(pid) as pic_count, ROUND(SUM(total_filesize)/1024) as disk_usage, group_name, group_quota ".
           "FROM {$CONFIG['TABLE_USERS']} AS u ".
           "INNER JOIN {$CONFIG['TABLE_USERGROUPS']} AS g ON user_group = group_id ".
           "LEFT JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.owner_id = u.user_id ".
           "GROUP BY user_id ".
           "ORDER BY " . $sort_codes[$sort] . " ".
           "LIMIT $lower_limit, $user_per_page;";

    $result = db_query($sql);

    $tabs = create_tabs($user_count, $page, $total_pages, $tab_tmpl);

    starttable('100%');
    if (!$lim_user) {
     echo <<< EOT

        <tr>
                <td class="tableh1"><b><span class="statlink">{$lang_usermgr_php['name']}</span></b></td>
                <td class="tableh1"><b><span class="statlink">{$lang_usermgr_php['group']}</span></b></td>
                <td class="tableh1"><b><span class="statlink">{$lang_usermgr_php['registered_on']}</span></b></td>
                <td class="tableh1"><b><span class="statlink">{$lang_usermgr_php['last_visit']}</span></b></td>
                <td class="tableh1" colspan="2" align="center"><b><span class="statlink">{$lang_usermgr_php['operations']}</span></b></td>
                <td class="tableh1" align="center"><b><span class="statlink">{$lang_usermgr_php['pictures']}</span></b></td>
                <td class="tableh1" colspan="2" align="center"><b><span class="statlink">{$lang_usermgr_php['disk_space']}</span></b></td>
        </tr>
EOT;
    }
    else {
     echo <<< EOT

        <tr>
                <td class="tableh1"><b><span class="statlink">{$lang_usermgr_php['name']}</span></b></td>
                <td class="tableh1"><b><span class="statlink">{$lang_usermgr_php['group']}</span></b></td>
                <td class="tableh1"><b><span class="statlink">{$lang_usermgr_php['registered_on']}</span></b></td>
                <td class="tableh1"><b><span class="statlink">{$lang_usermgr_php['last_visit']}</span></b></td>
                <td class="tableh1" align="center"><b><span class="statlink">{$lang_usermgr_php['pictures']}</span></b></td>
                <td class="tableh1" colspan="2" align="center"><b><span class="statlink">{$lang_usermgr_php['disk_space']}</span></b></td>
        </tr>
EOT;
    }


    while ($user = mysql_fetch_array($result)) {
        if ($user['user_active'] == 'NO') $user['group_name'] = '<i>' . $lang_usermgr_php['inactive'] . '</i>';
        $user['user_regdate'] = localised_date($user['user_regdate'], $register_date_fmt);
        if ($user['user_lastvisit']) {
            $user['user_lastvisit'] = localised_date($user['user_lastvisit'], $register_date_fmt);
        }
        else {
            $user['user_lastvisit'] = $lang_usermgr_php['never'];
        }

        $usr_link = '<a href="profile.php?uid=' . $user['user_id'] . '">' . $user['user_name'];
        if ($user['pic_count']) {
            $usr_link .= '</a> (<a href="thumbnails.php?album=lastupby&uid=' . $user['user_id'] . '">' . $lang_usermgr_php['latest_upload'] . '</a>)';
        } else {
            $usr_link .= '</a>';
        }


        if (!$lim_user) {
         echo <<< EOT
        <tr>
                <td class="tableb">$usr_link</td>
                <td class="tableb">{$user['group_name']}</td>
                <td class="tableb">{$user['user_regdate']}</td>
                <td class="tableb">{$user['user_lastvisit']}</td>
                <td class="tableb" align="center"><div class="admin_menu"><a href="$PHP_SELF?op=edit&user_id={$user['user_id']}">{$lang_usermgr_php['edit']}</a></div></td>
                <td class="tableb"  align="center"><div class="admin_menu"><a href="delete.php?id={$user['user_id']}&what=user"  onclick="return confirm('{$lang_usermgr_php['confirm_del']}');">{$lang_usermgr_php['delete']}</a></div></td>
                <td class="tableb" align="center">{$user['pic_count']}</td>
                <td class="tableb" align="right">{$user['disk_usage']}&nbsp;{$lang_byte_units[1]}</td>
                <td class="tableb" align="right">{$user['group_quota']}&nbsp;{$lang_byte_units[1]}</td>
        </tr>

EOT;
        } else {
                  echo <<< EOT
        <tr>
                <td class="tableb">$usr_link</td>
                <td class="tableb">{$user['group_name']}</td>
                <td class="tableb">{$user['user_regdate']}</td>
                <td class="tableb">{$user['user_lastvisit']}</td>
                <td class="tableb" align="center">{$user['pic_count']}</td>
                <td class="tableb" align="right">{$user['disk_usage']}&nbsp;{$lang_byte_units[1]}</td>
                <td class="tableb" align="right">{$user['group_quota']}&nbsp;{$lang_byte_units[1]}</td>
        </tr>

EOT;
        }

    } // while
    mysql_free_result($result);

    $lb = "<select name=\"album_listbox\" class=\"listbox\" onChange=\"if(this.options[this.selectedIndex].value) window.location.href='$PHP_SELF?page=$page&sort='+this.options[this.selectedIndex].value;\">\n";
    foreach($sort_codes as $key => $value) {
        $selected = ($key == $sort) ? "SELECTED" : "";
        $lb .= "        <option value=\"" . $key . "\" $selected>" . $lang_usermgr_php[$key] . "</option>\n";
    }
    $lb .= "</select>\n";

    if (!$lim_user) {
     echo <<<EOT
        <tr>
                <form method="post" action="$PHP_SELF?op=new_user">
                <td colspan="9" align="center" class="tablef">
                <table cellpadding="0" cellspacing="0">
                <tr>
                        <td><input type="submit" value="{$lang_usermgr_php['create_new_user']}" class="button"></td>
                        <td><img src="images/spacer.gif" width="50" height="1" alt="" /></td>
                        <td><b>{$lang_usermgr_php['sort_by']}</b></td>
                        <td><img src="images/spacer.gif" width="10" height="1" alt="" /></td>
                        <td>$lb</td>
                </tr>
                </table>
                </td>
                </form>
        </tr>
EOT;
    }
    echo <<<EOT
        <tr>
                <td colspan="9" style="padding: 0px;">
                        <table width="100%" cellspacing="0" cellpadding="0">
                                <tr>
                                        $tabs
                                </tr>
                        </table>
                </td>
        </tr>

EOT;


    endtable();
}

function edit_user($user_id)
{
    global $CONFIG, $PHP_SELF;
    global $lang_usermgr_php, $lang_yes, $lang_no;

    $form_data = array(
        array('input', 'user_name', $lang_usermgr_php['name'], 25),
        array('password', 'user_password', $lang_usermgr_php['password'], 25),
        array('yesno', 'user_active', $lang_usermgr_php['user_active']),
        array('group_list', 'user_group', $lang_usermgr_php['user_group']),
        array('input', 'user_email', $lang_usermgr_php['user_email'], 255),
        array('input', 'user_location', $lang_usermgr_php['user_location'], 255),
        array('input', 'user_interests', $lang_usermgr_php['user_interests'], 255),
        array('input', 'user_website', $lang_usermgr_php['user_web_site'], 255),
        array('input', 'user_occupation', $lang_usermgr_php['user_occupation'], 255)
        );

    $sql = "SELECT * FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '$user_id'";
    $result = db_query($sql);
    if (!mysql_num_rows($result)) cpg_die(CRITICAL_ERROR, $lang_usermgr_php['err_unknown_user'], __FILE__, __LINE__);
    $user_data = mysql_fetch_array($result);
    mysql_free_result($result);

    starttable(500, $lang_usermgr_php['modify_user'], 2);
    echo <<<EOT
        <form method="post" action="$PHP_SELF?op=update&user_id=$user_id">

EOT;

    foreach ($form_data as $element) switch ($element[0]) {
        case 'input' :
            $user_data[$element[1]] = $user_data[$element[1]];
            echo <<<EOT
        <tr>
            <td width="40%" class="tableb">
                        {$element[2]}
        </td>
        <td width="60%" class="tableb" valign="top">
                <input type="text" style="width: 100%" name="{$element[1]}" maxlength="{$element[3]}" value="{$user_data[$element[1]]}" class="textinput">
                </td>
        </tr>

EOT;
            break;

        case 'password' :
            echo <<<EOT
        <tr>
            <td width="40%" class="tableb">
                        {$element[2]}
        </td>
        <td width="60%" class="tableb" valign="top">
                <input type="input" style="width: 100%" name="{$element[1]}" maxlength="{$element[3]}" value="" class="textinput">
                </td>
        </tr>

EOT;
            break;

        case 'yesno' :
            $value = $user_data[$element[1]];
            $yes_selected = ($value == 'YES') ? 'selected' : '';
            $no_selected = ($value == 'NO') ? 'selected' : '';
            echo <<< EOT
        <tr>
            <td class="tableb">
                        {$element[2]}
        </td>
                <td class="tableb">
                        <select name="{$element[1]}" class="listbox">
                                <option value="YES" $yes_selected>$lang_yes</option>
                                <option value="NO" $no_selected>$lang_no</option>
                        </select>
                </td>
        </tr>

EOT;
            break;

        case 'group_list' :
            $sql = "SELECT group_id, group_name FROM {$CONFIG['TABLE_USERGROUPS']} ORDER BY group_name";
            $result = db_query($sql);
            $group_list = db_fetch_rowset($result);
            mysql_free_result($result);

            $sel_group = $user_data[$element[1]];
            $user_group_list = ($user_data['user_group_list'] == '') ? ',' . $sel_group . ',' : ',' . $user_data['user_group_list'] . ',' . $sel_group . ',';

            echo <<<EOT
        <tr>
            <td class="tableb">
                        {$element[2]}
        </td>
        <td class="tableb" valign="top">
                <select name="{$element[1]}" class="listbox">

EOT;
            $group_cb = '';
            foreach($group_list as $group) {
                echo '                        <option value="' . $group['group_id'] . '"' . ($group['group_id'] == $sel_group ? ' selected' : '') . '>' . $group['group_name'] . "</option>\n";
                $checked = strpos(' ' . $user_group_list, ',' . $group['group_id'] . ',') ? 'checked' : '';
                $group_cb .= '<input name="group_list[]" type="checkbox" value="' . $group['group_id'] . '" ' . $checked . '>' . $group['group_name'] . "<br />\n";
            }
            echo <<<EOT
                        </select><br />
                        $group_cb
                </td>
        </tr>

EOT;
            break;

        default:
            cpg_die(CRITICAL_ERROR, 'Invalid action for form creation ' . $element[0], __FILE__, __LINE__);
    }

    echo <<<EOT
        <tr>
                <td colspan="2" class="tableh2">
                        <b>{$lang_usermgr_php['notes']}</b>
                </td>
        </tr>
        <tr>
                <td colspan="2" class="tableb">
                        <ul>
                        {$lang_usermgr_php['note_list']}
                        </ul>
                </td>
        </tr>
        <tr>
                <td colspan="2" align="center" class="tablef">
                        <input type="submit" value="{$lang_usermgr_php['modify_user']}" class="button">
                </td>
                </form>
        </tr>

EOT;

    endtable();
}

function update_user($user_id)
{
    global $CONFIG, $PHP_SELF, $HTTP_POST_VARS;
    global $lang_usermgr_php, $lang_register_php;

    $user_name = addslashes(trim($HTTP_POST_VARS['user_name']));
    $user_password = addslashes(trim($HTTP_POST_VARS['user_password']));
    $user_email = addslashes(trim($HTTP_POST_VARS['user_email']));
    $user_location = addslashes($HTTP_POST_VARS['user_location']);
    $user_interests = addslashes($HTTP_POST_VARS['user_interests']);
    $user_website = addslashes($HTTP_POST_VARS['user_website']);
    $user_occupation = addslashes($HTTP_POST_VARS['user_occupation']);
    $user_active = $HTTP_POST_VARS['user_active'];
    $user_group = $HTTP_POST_VARS['user_group'];
    $group_list = isset($HTTP_POST_VARS['group_list']) ? $HTTP_POST_VARS['group_list'] : '';

    $sql = "SELECT user_id " . "FROM {$CONFIG['TABLE_USERS']} " . "WHERE user_name = '" . addslashes($user_name) . "' AND user_id != $user_id";
    $result = db_query($sql);

    if (mysql_num_rows($result)) {
        cpg_die(ERROR, $lang_register_php['err_user_exists'], __FILE__, __LINE__);
        return false;
    }
    mysql_free_result($result);

    if (strlen($user_name) < 2) cpg_die(ERROR, $lang_register_php['err_uname_short'], __FILE__, __LINE__);
    if (strlen($user_password) && strlen($user_password) < 2) cpg_die(ERROR, $lang_register_php['err_password_short'], __FILE__, __LINE__);

    if (is_array($group_list)) {
        $user_group_list = '';
        foreach($group_list as $group) $user_group_list .= ($group != $user_group) ? $group . ',' : '';
        $user_group_list = substr($user_group_list, 0, -1);
    } else {
        $user_group_list = '';
    }

    $sql_update = "UPDATE {$CONFIG['TABLE_USERS']} " . "SET " . "user_name           = '$user_name', " . "user_email          = '$user_email', " . "user_active    = '$user_active', " . "user_group           = '$user_group', " . "user_location  = '$user_location', " . "user_interests = '$user_interests', " . "user_website          = '$user_website', " . "user_occupation= '$user_occupation', " . "user_group_list      = '$user_group_list'";
    if (strlen($user_password)) $sql_update .= ", user_password = '$user_password'";
    $sql_update .= " WHERE user_id = '$user_id'";

    db_query($sql_update);
}

$op = isset($HTTP_GET_VARS['op']) ? $HTTP_GET_VARS['op'] : '';

switch ($op) {
    case 'edit' :
        $user_id = isset($HTTP_GET_VARS['user_id']) ? (int)$HTTP_GET_VARS['user_id'] : -1;

        if (USER_ID == $user_id) cpg_die(ERROR, $lang_usermgr_php['err_edit_self'], __FILE__, __LINE__);

        pageheader($lang_usermgr_php['title']);
        edit_user($user_id);
        pagefooter();
        ob_end_flush();
        break;

    case 'update' :
        $user_id = isset($HTTP_GET_VARS['user_id']) ? (int)$HTTP_GET_VARS['user_id'] : -1;

        update_user($user_id);

        db_query("DELETE FROM {$CONFIG['TABLE_USERS']} WHERE user_name = '' LIMIT 1");

        pageheader($lang_usermgr_php['title']);
        list_users();
        pagefooter();
        ob_end_flush();
        break;

    case 'new_user' :
        db_query("INSERT INTO {$CONFIG['TABLE_USERS']}(user_regdate, user_active) VALUES (NOW(), 'YES')");

        $user_id = mysql_insert_id();

        pageheader($lang_usermgr_php['title']);
        edit_user($user_id);
        pagefooter();
        ob_end_flush();
        break;

    default :
        db_query("DELETE FROM {$CONFIG['TABLE_USERS']} WHERE user_name = '' LIMIT 1");

        pageheader($lang_usermgr_php['title']);
        list_users();
        pagefooter();
        ob_end_flush();
        break;
}

?>
