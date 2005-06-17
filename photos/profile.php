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
// CVS version: $Id: profile.php,v 1.6 2004/07/24 15:03:53 gaugau Exp $
// ------------------------------------------------------------------------- //

define('IN_COPPERMINE', true);
define('PROFILE_PHP', true);

require('include/init.inc.php');

$edit_profile_form_param = array(
    array('text', 'username', $lang_register_php['username']),
    array('text', 'reg_date', $lang_register_php['reg_date']),
    array('text', 'group', $lang_register_php['group']),
    array('text', 'email', $lang_register_php['email']),
    array('text', 'disk_usage', $lang_register_php['disk_usage']),
    array('input', 'location', $lang_register_php['location'], 255),
    array('input', 'interests', $lang_register_php['interests'], 255),
    array('input', 'website', $lang_register_php['website'], 255),
    array('input', 'occupation', $lang_register_php['occupation'], 255),
    );

$display_profile_form_param = array(
    array('text', 'username', $lang_register_php['username']),
    array('text', 'reg_date', $lang_register_php['reg_date']),
    array('text', 'group', $lang_register_php['group']),
    array('text', 'location', $lang_register_php['location']),
    array('text', 'interests', $lang_register_php['interests']),
    array('text', 'website', $lang_register_php['website']),
    array('text', 'occupation', $lang_register_php['occupation']),
    array('thumb', 'user_thumb'),
    );

$change_password_form_param = array(
    array('password', 'current_pass', $lang_register_php['current_pass'], 25),
    array('password', 'new_pass', $lang_register_php['new_pass'], 25),
    array('password', 'new_pass_again', $lang_register_php['new_pass_again'], 25),
    );

function make_form($form_param, $form_data)
{
    global $CONFIG, $PHP_SELF, $HTTP_POST_VARS;
    global $lang_register_php;

    foreach ($form_param as $element) switch ($element[0]) {
        case 'label' :
            echo <<<EOT
    <tr>
        <td colspan="2" class="tableh2">
            <b>{$element[1]}<b>
        </td>
    </tr>

EOT;
            break;

        case 'text' :
            if ($form_data[$element[1]] == '') break;
            echo <<<EOT
    <tr>
        <td width="40%" class="tableb" height="25">
            {$element[2]}
        </td>
        <td width="60%" class="tableb">
            {$form_data[$element[1]]}
        </td>
    </tr>

EOT;

            break;
        case 'input' :
            $value = $form_data[$element[1]];

            echo <<<EOT
    <tr>
        <td width="40%" class="tableb"  height="25">
            {$element[2]}
        </td>
        <td width="60%" class="tableb" valign="top">
            <input type="text" style="width: 100%" name="{$element[1]}" maxlength="{$element[3]}" value="$value" class="textinput">
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
            <input type="password" style="width: 100%" name="{$element[1]}" maxlength="{$element[3]}" value="" class="textinput">
        </td>
    </tr>

EOT;
            break;
        case 'thumb' :
            $value = $form_data[$element[1]];

            if ($value) echo <<<EOT
    <td valign="top" colspan="2" class="thumbnails" align="center">
        <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td align="center">
                    $value
                </td>
            </tr>
        </table>
    </td>
EOT;
            break;

        default:
            cpg_die(CRITICAL_ERROR, 'Invalid action for form creation ' . $element[0], __FILE__, __LINE__);
    }
}

function get_post_var($var)
{
    global $HTTP_POST_VARS, $lang_errors;

    if (!isset($HTTP_POST_VARS[$var])) cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'] . " ($var)", __FILE__, __LINE__);
    return addslashes(trim($HTTP_POST_VARS[$var]));
}

$op = isset($HTTP_GET_VARS['op']) ? $HTTP_GET_VARS['op'] : '';
$uid = isset($HTTP_GET_VARS['uid']) ? (int)$HTTP_GET_VARS['uid'] : -1;
if (isset($HTTP_POST_VARS['change_pass'])) $op = 'change_pass';

if (isset($HTTP_POST_VARS['change_profile']) && USER_ID && !defined('UDB_INTEGRATION')) {
    $location = get_post_var('location');
    $interests = get_post_var('interests');
    $website = get_post_var('website');
    $occupation = get_post_var('occupation');

    $sql = "UPDATE {$CONFIG['TABLE_USERS']} SET " . "user_location = '$location', " . "user_interests = '$interests', " . "user_website = '$website', " . "user_occupation = '$occupation' " . "WHERE user_id = '" . USER_ID . "'";

    $result = db_query($sql);

    $title = sprintf($lang_register_php['x_s_profile'], USER_NAME);
    $redirect = "index.php";
    pageheader($title, "<META http-equiv=\"refresh\" content=\"3;url=$redirect\">");
    msg_box($lang_info, $lang_register_php['update_success'], $lang_continue, $redirect);
    pagefooter();
    ob_end_flush();
    exit;
}

if (isset($HTTP_POST_VARS['change_password']) && USER_ID && !defined('UDB_INTEGRATION')) {
    $current_pass = get_post_var('current_pass');
    $new_pass = get_post_var('new_pass');
    $new_pass_again = get_post_var('new_pass_again');

    if (strlen($new_pass) < 2) cpg_die(ERROR, $lang_register_php['err_password_short'], __FILE__, __LINE__);
    if ($new_pass != $new_pass_again) cpg_die(ERROR, $lang_register_php['err_password_mismatch'], __FILE__, __LINE__);

    $sql = "UPDATE {$CONFIG['TABLE_USERS']} SET " . "user_password = '$new_pass' " . "WHERE user_id = '" . USER_ID . "' AND BINARY user_password = '$current_pass'";

    $result = db_query($sql);
    if (!mysql_affected_rows()) cpg_die(ERROR, $lang_register_php['pass_chg_error'], __FILE__, __LINE__);

    setcookie($CONFIG['cookie_name'] . '_pass', md5($HTTP_POST_VARS['new_pass']), time() + 86400, $CONFIG['cookie_path']);

    $title = sprintf($lang_register_php['x_s_profile'], USER_NAME);
    $redirect = $PHP_SELF . "?op=edit_profile";
    pageheader($title, "<META http-equiv=\"refresh\" content=\"3;url=$redirect\">");
    msg_box($lang_info, $lang_register_php['pass_chg_success'], $lang_continue, $redirect);
    pagefooter();
    ob_end_flush();
    exit;
}

switch ($op) {
    // ------------------------------------------------------------------------- //
    case 'edit_profile' :
        if (!USER_ID) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

        if (defined('UDB_INTEGRATION')) udb_edit_profile(USER_ID);

        $sql = "SELECT user_name, user_email, user_group, UNIX_TIMESTAMP(user_regdate) as user_regdate, group_name, " . "user_location, user_interests, user_website, user_occupation, user_group_list, " . "COUNT(pid) as pic_count, ROUND(SUM(total_filesize)/1024) as disk_usage, group_quota " . "FROM {$CONFIG['TABLE_USERS']} AS u " . "INNER JOIN {$CONFIG['TABLE_USERGROUPS']} AS g ON user_group = group_id " . "LEFT JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.owner_id = u.user_id " . "WHERE user_id ='" . USER_ID . "' " . "GROUP BY user_id ";

        $result = db_query($sql);

        if (!mysql_num_rows($result)) cpg_die(ERROR, $lang_register_php['err_unk_user'], __FILE__, __LINE__);
        $user_data = mysql_fetch_array($result);
        mysql_free_result($result);

        $group_list = '';
        if ($user_data['user_group_list'] != '') {
            $sql = "SELECT group_name " . "FROM {$CONFIG['TABLE_USERGROUPS']} " . "WHERE group_id IN ({$user_data['user_group_list']}) AND group_id != {$user_data['user_group']} " . "ORDER BY group_name";
            $result = db_query($sql);
            while ($row = mysql_fetch_array($result)) {
                $group_list .= $row['group_name'] . ', ';
            }
            mysql_free_result($result);
            $group_list = '<br /><i>(' . substr($group_list, 0, -2) . ')</i>';
        }

        $form_data = array('username' => $user_data['user_name'],
            'reg_date' => localised_date($user_data['user_regdate'], $register_date_fmt),
            'group' => $user_data['group_name'] . $group_list,
            'email' => $user_data['user_email'],
            'disk_usage' => $user_data['disk_usage'] .
            ($user_data['group_quota'] ? '/' . $user_data['group_quota'] : '') . '&nbsp;' . $lang_byte_units[1],
            'location' => $user_data['user_location'],
            'interests' => $user_data['user_interests'],
            'website' => $user_data['user_website'],
            'occupation' => $user_data['user_occupation'],
            );

        $title = sprintf($lang_register_php['x_s_profile'], USER_NAME);
        pageheader($title);
        starttable(-1, $title, 2);
        echo <<<EOT
    <form method="post" action="$PHP_SELF">

EOT;
        make_form($edit_profile_form_param, $form_data);
        echo <<<EOT
    <tr>
        <td colspan="2" align="center" class="tablef">
            <input type="submit" name="change_profile" value="{$lang_register_php['apply_modif']}" class="button">
            <img src="images/spacer.gif" width="20" height="1">
            <input type="submit" name="change_pass" value="{$lang_register_php['change_pass']}" class="button">
        </td>
    </tr>
    </form>

EOT;
        endtable();
        pagefooter();
        ob_end_flush();
        break;
    // ------------------------------------------------------------------------- //
    case 'change_pass' :
        if (!USER_ID || defined('UDB_INTEGRATION')) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

        $title = $lang_register_php['change_pass'];
        pageheader($title);
        starttable(-1, $title, 2);
        echo <<<EOT
    <form method="post" action="$PHP_SELF">

EOT;
        make_form($change_password_form_param, '');
        echo <<<EOT
    <tr>
        <td colspan="2" align="center" class="tablef">
            <input type="submit" name="change_password" value="$title" class="button">
        </td>
    </tr>
    </form>

EOT;
        endtable();
        pagefooter();
        ob_end_flush();
        break;
    // ------------------------------------------------------------------------- //
    default :

        if (defined('UDB_INTEGRATION')) {
            $user_data = udb_get_user_infos($uid);
        } else {
            $sql = "SELECT user_name, user_email, UNIX_TIMESTAMP(user_regdate) as user_regdate, group_name, " . "user_location, user_interests, user_website, user_occupation " . "FROM {$CONFIG['TABLE_USERS']} AS u " . "INNER JOIN {$CONFIG['TABLE_USERGROUPS']} AS g ON user_group = group_id " . "WHERE user_id ='$uid'";

            $result = db_query($sql);

            if (!mysql_num_rows($result)) cpg_die(ERROR, $lang_register_php['err_unk_user'], __FILE__, __LINE__);
            $user_data = mysql_fetch_array($result);
            mysql_free_result($result);
        }
        if ($FORBIDDEN_SET != "") $FORBIDDEN_SET = "AND $FORBIDDEN_SET";
        $query = "SELECT count(*), MAX(pid) FROM {$CONFIG['TABLE_PICTURES']} AS p WHERE owner_id = '$uid' AND approved = 'YES' $FORBIDDEN_SET";
        $result = db_query($query);
        $nbEnr = mysql_fetch_array($result);
        $picture_count = $nbEnr[0];
        $thumb_pid = $nbEnr[1];
        mysql_free_result($result);

        $result = db_query("SELECT count(*) FROM {$CONFIG['TABLE_ALBUMS']} AS p WHERE category = '" . (FIRST_USER_CAT + $uid) . "' $FORBIDDEN_SET");
        $nbEnr = mysql_fetch_array($result);
        $album_count = $nbEnr[0];
        mysql_free_result($result);

        $result = db_query("SELECT count(*), MAX(msg_id) FROM {$CONFIG['TABLE_COMMENTS']} as c, {$CONFIG['TABLE_PICTURES']} as p WHERE c.pid = p.pid AND author_id = '$uid' $FORBIDDEN_SET");
        $nbEnr = mysql_fetch_array($result);
        $comment_count = $nbEnr[0];
        $lastcom_id = $nbEnr[1];
        mysql_free_result($result);

        $lastcom = '';
        if ($comment_count) {
            $sql = "SELECT filepath, filename, url_prefix, pwidth, pheight, msg_author, UNIX_TIMESTAMP(msg_date) as msg_date, msg_body " . "FROM {$CONFIG['TABLE_COMMENTS']} AS c, {$CONFIG['TABLE_PICTURES']} AS p " . "WHERE msg_id='" . $lastcom_id . "' AND c.pid = p.pid";
            $result = db_query($sql);
            if (mysql_num_rows($result)) {
                $row = mysql_fetch_array($result);
                mysql_free_result($result);
                $pic_url =  get_pic_url($row, 'thumb');
                if (!is_image($row['filename'])) {
                        $image_info = getimagesize($pic_url);
                        $row['pwidth'] = $image_info[0];
                        $row['pheight'] = $image_info[1];
                }
                $image_size = compute_img_size($row['pwidth'], $row['pheight'], $CONFIG['thumb_width']);
                $mime_content = get_type($row['filename']);
                $lastcom = '<img src="' . $pic_url . '" class="image"' . $image_size['geom'] . ' border="0" alt="">';
                $lastcom = '<td width="50%" valign="top" align="center">'
                            . '<a href="thumbnails.php?album=lastcomby&uid=' . $uid . '">'
                            . $lastcom
                            . '</a><br />';
                $lastcom .= "<span class=\"thumb_caption\"><b>" . $row['msg_author'] . '</b></span>' . "<span class=\"thumb_caption\">" . localised_date($row['msg_date'], $lastcom_date_fmt) . '</span>' . "<span class=\"thumb_caption\">" . $row['msg_body'] . '</span></td>';
            }
        }

        $user_thumb = '';
        if ($picture_count) {
            $sql = "SELECT filepath, filename, url_prefix, pwidth, pheight " . "FROM {$CONFIG['TABLE_PICTURES']} " . "WHERE pid='" . $thumb_pid . "'";
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
                $image_size = compute_img_size($picture['pwidth'], $picture['pheight'], $CONFIG['thumb_width']);
                $mime_content = get_type($picture['filename']);
                $user_thumb = '<img src="' . $pic_url . '" class="image"'
                                . $image_size['geom'] . ' border="0" alt="">';
                $user_thumb = '<td width="50%" valign="top" align="center">'
                            . '<a href="thumbnails.php?album=lastupby&uid=' . $uid . '">'
                            . $user_thumb
                            . '</a></td>';
            }
        }

        $quick_jump = ($user_thumb . $lastcom) ? '<table width="100%" border="0" cellspacing="5"><tr>' . $user_thumb . $lastcom . '</tr></table>' : '';

        $form_data = array('username' => $user_data['user_name'],
            'reg_date' => localised_date($user_data['user_regdate'], $register_date_fmt),
            'group' => $user_data['group_name'],
            'location' => $user_data['user_location'],
            'interests' => $user_data['user_interests'],
            'website' => make_clickable($user_data['user_website']),
            'occupation' => $user_data['user_occupation'],
            'user_thumb' => $quick_jump,
            );

        $title = sprintf($lang_register_php['x_s_profile'], $user_data['user_name']);
        pageheader($title);
        starttable(-1, $title, 2);
        make_form($display_profile_form_param, $form_data);
        endtable();
        pagefooter();
        ob_end_flush();
        break;
}

?>
