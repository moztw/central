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
// CVS version: $Id: ecard.php,v 1.9 2004/07/27 23:17:11 nibbler999 Exp $
// ------------------------------------------------------------------------- //

define('IN_COPPERMINE', true);
define('ECARDS_PHP', true);

require('include/init.inc.php');
require('include/smilies.inc.php');
require('include/mailer.inc.php');

if (!USER_CAN_SEND_ECARDS) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

//print_r(get_defined_constants());

function get_post_var($name, $default = '')
{
    global $HTTP_POST_VARS;

    return isset($HTTP_POST_VARS[$name]) ? $HTTP_POST_VARS[$name] : $default;
}

$pid = (int)$HTTP_GET_VARS['pid'];
$album = $HTTP_GET_VARS['album'];
$pos = (int)$HTTP_GET_VARS['pos'];

$sender_name = get_post_var('sender_name', USER_NAME ? USER_NAME : (isset($USER['name']) ? $USER['name'] : ''));
if (defined('UDB_INTEGRATION')AND USER_ID) $USER_DATA = array_merge($USER_DATA,udb_get_user_infos(USER_ID));
if ($USER_DATA['user_email']){
$sender_email = $USER_DATA['user_email'];
$sender_box = $sender_email;
} else {
$sender_email = get_post_var('sender_email',$USER['email'] ? $USER['email'] : '');
$sender_box = "<input type=\"text\" class=\"textinput\" value=\"$sender_email\" name=\"sender_email\" style=\"WIDTH: 100%;\">";
}
$recipient_name = get_post_var('recipient_name');
$recipient_email = get_post_var('recipient_email');
$greetings = get_post_var('greetings');
$message = get_post_var('message');
$sender_email_warning = '';
$recipient_email_warning = '';
// Get picture thumbnail url
$result = mysql_query("SELECT * from {$CONFIG['TABLE_PICTURES']} WHERE pid='$pid' $ALBUM_SET");
if (!mysql_num_rows($result)) cpg_die(ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
$row = mysql_fetch_array($result);
$thumb_pic_url = get_pic_url($row, 'thumb');

if (!is_image($row['filename'])) cpg_die(ERROR, $lang_ecard_php['error_not_image'], __FILE__, __LINE__);

// Check supplied email address
$valid_email_pattern = "^[_\.0-9a-z\-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,6}$";
$valid_sender_email = eregi($valid_email_pattern, $sender_email);
$valid_recipient_email = eregi($valid_email_pattern, $recipient_email);
$invalid_email = '<font size="1">' . $lang_ecard_php['invalid_email'] . '</font>';
if (!$valid_sender_email && count($HTTP_POST_VARS) > 0) $sender_email_warning = $invalid_email;
if (!$valid_recipient_email && count($HTTP_POST_VARS) > 0) $recipient_email_warning = $invalid_email;
// Create and send the e-card
if (count($HTTP_POST_VARS) > 0 && $valid_sender_email && $valid_recipient_email) {
    $gallery_url_prefix = $CONFIG['ecards_more_pic_target']. (substr($CONFIG['ecards_more_pic_target'], -1) == '/' ? '' : '/');
    if ($CONFIG['make_intermediate'] && max($row['pwidth'], $row['pheight']) > $CONFIG['picture_width']) {
        $n_picname = get_pic_url($row, 'normal');
    } else {
        $n_picname = get_pic_url($row, 'fullsize');
    }

    if (!stristr($n_picname, 'http:')) $n_picname = $gallery_url_prefix . $n_picname;

    $msg_content = nl2br(process_smilies($message, $gallery_url_prefix));

    $data = array('rn' => $HTTP_POST_VARS['recipient_name'],
        'sn' => $HTTP_POST_VARS['sender_name'],
        'se' => $sender_email,
        'p' => $n_picname,
        'g' => $greetings,
        'm' => $message,
        );

    $encoded_data = urlencode(base64_encode(serialize($data)));

    $params = array('{LANG_DIR}' => $lang_text_dir,
        '{TITLE}' => sprintf($lang_ecard_php['ecard_title'], $sender_name),
        '{CHARSET}' => $CONFIG['charset'] == 'language file' ? $lang_charset : $CONFIG['charset'],
        '{VIEW_ECARD_TGT}' => "{$gallery_url_prefix}displayecard.php?data=$encoded_data",
        '{VIEW_ECARD_LNK}' => $lang_ecard_php['view_ecard'],
        '{PIC_URL}' => $n_picname,
        '{URL_PREFIX}' => $gallery_url_prefix,
        '{GREETINGS}' => $greetings,
        '{MESSAGE}' => $msg_content,
        '{SENDER_EMAIL}' => $sender_email,
        '{SENDER_NAME}' => $sender_name,
        '{VIEW_MORE_TGT}' => $CONFIG['ecards_more_pic_target'],
        '{VIEW_MORE_LNK}' => $lang_ecard_php['view_more_pics'],
        );

            $message = template_eval($template_ecard, $params);
        $tempTime = time();
        $message .= "Sent by $sender_name from IP {$_SERVER['REMOTE_ADDR']} at ".gmstrftime("%A,  %B,%d,%Y %I:%M %p ", time())." [GMT]";
            $subject = sprintf($lang_ecard_php['ecard_title'], $sender_name);

            $result = cpg_mail($recipient_email, $subject, $message, 'text/html', $sender_name, $sender_email);

        //write ecard log
        if ($CONFIG['log_ecards'] == 1) {
          $result_log = db_query("INSERT INTO {$CONFIG['TABLE_ECARDS']} (sender_name, sender_email, recipient_name, recipient_email, link, date, sender_ip) VALUES ('$sender_name', '$sender_email', '$recipient_name', '$recipient_email',   '$encoded_data', '$tempTime', '{$_SERVER["REMOTE_ADDR"]}')");
          }

    if (!USER_ID) {
        $USER['name'] = $sender_name;
        $USER['email'] = $sender_email;
    }

    if ($result) {
        pageheader($lang_ecard_php['title'], "<META http-equiv=\"refresh\" content=\"3;url=displayimage.php?album=$album&pos=$pos\">");
        msg_box($lang_cpg_die[INFORMATION], $lang_ecard_php['send_success'], $lang_continue, "displayimage.php?album=$album&pos=$pos");
        pagefooter();
        ob_end_flush();
        exit;
    } else {
        cpg_die(ERROR, $lang_ecard_php['send_failed'], __FILE__, __LINE__);
    }
}

pageheader($lang_ecard_php['title']);
starttable("100%", $lang_ecard_php['title'], 3);

echo <<<EOT
        <tr>
                <td class="tableh2" colspan="2"><b>{$lang_ecard_php['from']}</b></td>
                <td rowspan="6" align="center" valign="top" class="tableb">
                        <img src="$thumb_pic_url" alt="" vspace="8" border="0" class="image"><br />
                </td>
        </tr>
        <tr>
                <td class="tableb" valign="top" width="40%">
                        <form method="post" name="post" action="$PHP_SELF?album=$album&pid=$pid&pos=$pos">
                        {$lang_ecard_php['your_name']}<br />
                </td>
                <td valign="top" class="tableb" width="60%">
                        <input type="text" class="textinput" name="sender_name"  value="$sender_name" style="WIDTH: 100%;"><br />
                </td>
        </tr>
        <tr>
                <td class="tableb" valign="top" width="40%">
                        {$lang_ecard_php['your_email']}<br />
                </td>
                <td valign="top" class="tableb" width="60%">
                        {$sender_box}
                        {$sender_email_warning}
                </td>
        </tr>
        <tr>
                <td class="tableh2" colspan="2"><b>{$lang_ecard_php['to']}</b></td>
        </tr>
        <tr>
                <td class="tableb" valign="top" width="40%">
                        {$lang_ecard_php['rcpt_name']}<br />
                </td>
                <td valign="top" class="tableb" width="60%">
                        <input type="text" class="textinput" name="recipient_name"  value="$recipient_name" style="WIDTH: 100%;"><br />
                </td>
        </tr>
        <tr>
                <td class="tableb" valign="top" width="40%">
                        {$lang_ecard_php['rcpt_email']}<br />
                </td>
                <td valign="top" class="tableb" width="60%">
                        <input type="text" class="textinput" name="recipient_email"  value="$recipient_email" style="WIDTH: 100%;"><br />
                        $recipient_email_warning
                </td>
        </tr>
        <tr>
                <td class="tableh2" colspan="3"><b>{$lang_ecard_php['greetings']}</b></td>
        </tr>
        <tr>
                <td class="tableb" colspan="3">
                        <input type="text" class="textinput" name="greetings"  value="$greetings" style="WIDTH: 100%;"><br />
                </td>
        </tr>
        <tr>
                <td class="tableh2" colspan="3"><b>{$lang_ecard_php['message']}</b></td>
        </tr>
        <tr>
                <td class="tableb" colspan="3" valign="top"><br />
                        <textarea name="message" class="textinput" ROWS="8" COLS="40" WRAP="virtual" onselect="storeCaret_post(this);" onclick="storeCaret_post(this);" onkeyup="storeCaret_post(this);" STYLE="WIDTH: 100%;">$message</textarea><br /><br />
                </td>
        </tr>
        <tr>
                <td class="tableb" colspan="3" valign="top">

EOT;
echo generate_smilies();
echo <<<EOT
                </td>
        </tr>
        <tr>
                <td colspan="3" align="center" class="tablef">
                        <input type="submit" class="button" value="{$lang_ecard_php['title']}">
                        </form>
                </td>
        </tr>
EOT;

endtable();
pagefooter();
ob_end_flush();

?>
