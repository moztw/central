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
  $Source: /cvsroot/coppermine/stable/db_input.php,v $
  $Revision: 1.9 $
  $Author: gaugau $
  $Date: 2005/04/19 03:17:10 $
**********************************************/

define('IN_COPPERMINE', true);
define('DB_INPUT_PHP', true);

require('include/init.inc.php');
require('include/picmgmt.inc.php');
require('include/mailer.inc.php');

function check_comment(&$str)
{
    global $CONFIG, $lang_bad_words, $queries;

    $ercp = array('/\S{' . ($CONFIG['max_com_wlength'] + 1) . ',}/i');
    if ($CONFIG['filter_bad_words']) foreach($lang_bad_words as $word) {
        $ercp[] = '/' . ($word[0] == '*' ? '': '\b') . str_replace('*', '', $word) . ($word[(strlen($word)-1)] == '*' ? '': '\b') . '/i';
    }

    if (strlen($str) > $CONFIG['max_com_size']) $str = substr($str, 0, ($CONFIG['max_com_size'] -3)) . '...';
    $str = preg_replace($ercp, '(...)', $str);
}

if (!isset($HTTP_GET_VARS['event']) && !isset($HTTP_POST_VARS['event'])) {
    cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);
}

$event = isset($HTTP_POST_VARS['event']) ? $HTTP_POST_VARS['event'] : $HTTP_GET_VARS['event'];
switch ($event) {

    // Comment update

    case 'comment_update':
        if (!(USER_CAN_POST_COMMENTS)) cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);

        check_comment($HTTP_POST_VARS['msg_body']);
        check_comment($HTTP_POST_VARS['msg_author']);
        $msg_body = addslashes(trim($HTTP_POST_VARS['msg_body']));
        $msg_author = addslashes(trim($HTTP_POST_VARS['msg_author']));
        $msg_id = (int)$HTTP_POST_VARS['msg_id'];

        if ($msg_body == '') cpg_die(ERROR, $lang_db_input_php['err_comment_empty'], __FILE__, __LINE__);

        if (GALLERY_ADMIN_MODE) {
            $update = db_query("UPDATE {$CONFIG['TABLE_COMMENTS']} SET msg_body='$msg_body', msg_author='$msg_author' WHERE msg_id='$msg_id'");
        } elseif (USER_ID) {
            $update = db_query("UPDATE {$CONFIG['TABLE_COMMENTS']} SET msg_body='$msg_body' WHERE msg_id='$msg_id' AND author_id ='" . USER_ID . "' LIMIT 1");
        } else {
            $update = db_query("UPDATE {$CONFIG['TABLE_COMMENTS']} SET msg_body='$msg_body' WHERE msg_id='$msg_id' AND author_md5_id ='{$USER['ID']}' AND author_id = '0' LIMIT 1");
        }

        $header_location = (@preg_match('/Microsoft|WebSTAR|Xitami/', getenv('SERVER_SOFTWARE'))) ? 'Refresh: 0; URL=' : 'Location: ';

        $result = db_query("SELECT pid FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id='$msg_id'");
        if (!mysql_num_rows($result)) {
            mysql_free_result($result);
            $header_location = (@preg_match('/Microsoft|WebSTAR|Xitami/', getenv('SERVER_SOFTWARE'))) ? 'Refresh: 0; URL=' : 'Location: ';
            $redirect = "index.php";
            header($header_location . $redirect);
            pageheader($lang_info, "<META http-equiv=\"refresh\" content=\"1;url=$redirect\">");
            msg_box($lang_info, $lang_db_input_php['redirect_msg'], $lang_db_input_php['continue'], $redirect);
            pagefooter();
            ob_end_flush();
            exit;
        } else {
            $comment_data = mysql_fetch_array($result);
            mysql_free_result($result);
            $redirect = "displayimage.php?pos=" . (- $comment_data['pid']);
            header($header_location . $redirect);
            pageheader($lang_info, "<META http-equiv=\"refresh\" content=\"1;url=$redirect\">");
            msg_box($lang_info, $lang_db_input_php['redirect_msg'], $lang_db_input_php['continue'], $redirect);
            pagefooter();
            ob_end_flush();
            exit;
        }
        break;

    // Comment

    case 'comment':
        if (!(USER_CAN_POST_COMMENTS)) cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);

        check_comment($HTTP_POST_VARS['msg_body']);
                check_comment($HTTP_POST_VARS['msg_author']);
        $msg_author = addslashes(trim($HTTP_POST_VARS['msg_author']));
        $msg_body = addslashes(trim($HTTP_POST_VARS['msg_body']));
        $pid = (int)$HTTP_POST_VARS['pid'];

        if ($msg_author == '' || $msg_body == '') cpg_die(ERROR, $lang_db_input_php['empty_name_or_com'], __FILE__, __LINE__);

        $result = db_query("SELECT comments FROM {$CONFIG['TABLE_PICTURES']}, {$CONFIG['TABLE_ALBUMS']} WHERE {$CONFIG['TABLE_PICTURES']}.aid = {$CONFIG['TABLE_ALBUMS']}.aid AND pid='$pid'");
        if (!mysql_num_rows($result)) cpg_die(ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
        $album_data = mysql_fetch_array($result);
        mysql_free_result($result);

        if ($album_data['comments'] != 'YES') cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);

        if (!$CONFIG['disable_comment_flood_protect']){
          $result = db_query("SELECT author_md5_id, author_id FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid = '$pid' ORDER BY msg_id DESC LIMIT 1");
          if (mysql_num_rows($result)) {
              $last_com_data = mysql_fetch_array($result);
              if ((USER_ID && $last_com_data['author_id'] == USER_ID) || (!USER_ID && $last_com_data['author_md5_id'] == $USER['ID'])) {
                  cpg_die(ERROR, $lang_db_input_php['no_flood'], __FILE__, __LINE__);
              }
          }
        }

        if (!USER_ID) { // Anonymous users, we need to use META refresh to save the cookie
            $insert = db_query("INSERT INTO {$CONFIG['TABLE_COMMENTS']} (pid, msg_author, msg_body, msg_date, author_md5_id, author_id, msg_raw_ip, msg_hdr_ip) VALUES ('$pid', '$msg_author', '$msg_body', NOW(), '{$USER['ID']}', '0', '$raw_ip', '$hdr_ip')");
            $USER['name'] = $HTTP_POST_VARS['msg_author'];
            $redirect = "displayimage.php?pos=" . (- $pid);
            if ($CONFIG['email_comment_notification']) {
                $mail_body = $msg_body . "\n\r ".$lang_db_input_php['email_comment_body'] . " " . $CONFIG['ecards_more_pic_target'] . $redirect;
                cpg_mail($CONFIG['gallery_admin_email'], $lang_db_input_php['email_comment_subject'], $mail_body);
            }
            pageheader($lang_db_input_php['com_added'], "<META http-equiv=\"refresh\" content=\"1;url=$redirect\">");
            msg_box($lang_db_input_php['info'], $lang_db_input_php['com_added'], $lang_continue, $redirect);
            pagefooter();
            ob_end_flush();
            exit;
        } else { // Registered users, we can use Location to redirect
            $insert = db_query("INSERT INTO {$CONFIG['TABLE_COMMENTS']} (pid, msg_author, msg_body, msg_date, author_md5_id, author_id, msg_raw_ip, msg_hdr_ip) VALUES ('$pid', '" . addslashes(USER_NAME) . "', '$msg_body', NOW(), '', '" . USER_ID . "', '$raw_ip', '$hdr_ip')");
            $redirect = "displayimage.php?pos=" . (- $pid);
            if ($CONFIG['email_comment_notification']) {
                $mail_body = $msg_body . "\n\r ".$lang_db_input_php['email_comment_body'] . " " . $CONFIG['ecards_more_pic_target'] . $redirect;
                cpg_mail($CONFIG['gallery_admin_email'], $lang_db_input_php['email_comment_subject'], $mail_body);
            }
            $header_location = (@preg_match('/Microsoft|WebSTAR|Xitami/', getenv('SERVER_SOFTWARE'))) ? 'Refresh: 0; URL=' : 'Location: ';
            header($header_location . $redirect);
            pageheader($lang_db_input_php['com_added'], "<META http-equiv=\"refresh\" content=\"1;url=$redirect\">");
            msg_box($lang_db_input_php['info'], $lang_db_input_php['com_added'], $lang_continue, $redirect);
            pagefooter();
            ob_end_flush();
            exit;
        }
        break;

    // Update album

    case 'album_update':
        if (!(USER_ADMIN_MODE || GALLERY_ADMIN_MODE)) cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);

        $aid = (int)$HTTP_POST_VARS['aid'];
        $title = addslashes(trim($HTTP_POST_VARS['title']));
        $category = (int)$HTTP_POST_VARS['category'];
        $description = addslashes(trim($HTTP_POST_VARS['description']));
        $thumb = (int)$HTTP_POST_VARS['thumb'];
        $visibility = (int)$HTTP_POST_VARS['visibility'];
        $uploads = $HTTP_POST_VARS['uploads'] == 'YES' ? 'YES' : 'NO';
        $comments = $HTTP_POST_VARS['comments'] == 'YES' ? 'YES' : 'NO';
        $votes = $HTTP_POST_VARS['votes'] == 'YES' ? 'YES' : 'NO';

        if (!$title) cpg_die(ERROR, $lang_db_input_php['alb_need_title'], __FILE__, __LINE__);

        if (GALLERY_ADMIN_MODE) {
            $query = "UPDATE {$CONFIG['TABLE_ALBUMS']} SET title='$title', description='$description', category='$category', thumb='$thumb', uploads='$uploads', comments='$comments', votes='$votes', visibility='$visibility' WHERE aid='$aid' LIMIT 1";
        } else {
            $category = FIRST_USER_CAT + USER_ID;
            $query = "UPDATE {$CONFIG['TABLE_ALBUMS']} SET title='$title', description='$description', thumb='$thumb',  comments='$comments', votes='$votes', visibility='$visibility' WHERE aid='$aid' AND category='$category' LIMIT 1";
        }

        $update = db_query($query);
        if (isset($CONFIG['debug_mode']) && ($CONFIG['debug_mode'] == 1)) {
            $queries[] = $query;
        }

        if (!mysql_affected_rows()) cpg_die(INFORMATION, $lang_db_input_php['no_udp_needed'], __FILE__, __LINE__);
        if ($CONFIG['debug_mode'] == 0) {
            pageheader($lang_db_input_php['alb_updated'], "<META http-equiv=\"refresh\" content=\"1;url=modifyalb.php?album=$aid\">");
        }
        msg_box($lang_db_input_php['info'], $lang_db_input_php['alb_updated'], $lang_continue, "modifyalb.php?album=$aid");
        pagefooter();
        ob_end_flush();
        exit;
        break;

    // Picture upload


    case 'picture':
        if (!USER_CAN_UPLOAD_PICTURES) cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);

        $album = (int)$HTTP_POST_VARS['album'];
        $title = addslashes($HTTP_POST_VARS['title']);
        $caption = addslashes($HTTP_POST_VARS['caption']);
        $keywords = addslashes($HTTP_POST_VARS['keywords']);
        $user1 = addslashes($HTTP_POST_VARS['user1']);
        $user2 = addslashes($HTTP_POST_VARS['user2']);
        $user3 = addslashes($HTTP_POST_VARS['user3']);
        $user4 = addslashes($HTTP_POST_VARS['user4']);
        // Check if the album id provided is valid
        if (!GALLERY_ADMIN_MODE) {
            $result = db_query("SELECT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='$album' and (uploads = 'YES' OR category = '" . (USER_ID + FIRST_USER_CAT) . "')");
            if (mysql_num_rows($result) == 0)cpg_die(ERROR, $lang_db_input_php['unknown_album'], __FILE__, __LINE__);
            $row = mysql_fetch_array($result);
            mysql_free_result($result);
            $category = $row['category'];
        } else {
            $result = db_query("SELECT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='$album'");
            if (mysql_num_rows($result) == 0)cpg_die(ERROR, $lang_db_input_php['unknown_album'], __FILE__, __LINE__);
            $row = mysql_fetch_array($result);
            mysql_free_result($result);
            $category = $row['category'];
        }
        // Test if the filename of the temporary uploaded picture is empty
        if ($HTTP_POST_FILES['userpicture']['tmp_name'] == '') cpg_die(ERROR, $lang_db_input_php['no_pic_uploaded'], __FILE__, __LINE__);
        // Pictures are moved in a directory named 10000 + USER_ID
        if (USER_ID && !defined('SILLY_SAFE_MODE')) {
            $filepath = $CONFIG['userpics'] . (USER_ID + FIRST_USER_CAT);
            $dest_dir = $CONFIG['fullpath'] . $filepath;
            if (!is_dir($dest_dir)) {
                mkdir($dest_dir, octdec($CONFIG['default_dir_mode']));
                if (!is_dir($dest_dir)) cpg_die(CRITICAL_ERROR, sprintf($lang_db_input_php['err_mkdir'], $dest_dir), __FILE__, __LINE__, true);
                chmod($dest_dir, octdec($CONFIG['default_dir_mode']));
                $fp = fopen($dest_dir . '/index.html', 'w');
                fwrite($fp, ' ');
                fclose($fp);
            }
            $dest_dir .= '/';
            $filepath .= '/';
        } else {
            $filepath = $CONFIG['userpics'];
            $dest_dir = $CONFIG['fullpath'] . $filepath;
        }
        // Check that target dir is writable
        if (!is_writable($dest_dir)) cpg_die(CRITICAL_ERROR, sprintf($lang_db_input_php['dest_dir_ro'], $dest_dir), __FILE__, __LINE__, true);
        // Replace forbidden chars with underscores
        $matches = array();
        $forbidden_chars = strtr($CONFIG['forbiden_fname_char'], array('&amp;' => '&', '&quot;' => '"', '&lt;' => '<', '&gt;' => '>'));
        // Check that the file uploaded has a valid extension
        if (get_magic_quotes_gpc()) $HTTP_POST_FILES['userpicture']['name'] = stripslashes($HTTP_POST_FILES['userpicture']['name']);
        $picture_name = strtr($HTTP_POST_FILES['userpicture']['name'], $forbidden_chars, str_repeat('_', strlen($CONFIG['forbiden_fname_char'])));
        if (!preg_match("/(.+)\.(.*?)\Z/", $picture_name, $matches)) {
            $matches[1] = 'invalid_fname';
            $matches[2] = 'xxx';
        }

        if ($matches[2] == '' || !is_known_filetype($matches)) {
            cpg_die(ERROR, sprintf($lang_db_input_php['err_invalid_fext'], $CONFIG['allowed_file_extensions']), __FILE__, __LINE__);
        }

        // Create a unique name for the uploaded file
        $nr = 0;
        $picture_name = $matches[1] . '.' . $matches[2];
        while (file_exists($dest_dir . $picture_name)) {
            $picture_name = $matches[1] . '~' . $nr++ . '.' . $matches[2];
        }
        $uploaded_pic = $dest_dir . $picture_name;
        // Move the picture into its final location
        if (!move_uploaded_file($HTTP_POST_FILES['userpicture']['tmp_name'], $uploaded_pic))
            cpg_die(CRITICAL_ERROR, sprintf($lang_db_input_php['err_move'], $picture_name, $dest_dir), __FILE__, __LINE__, true);
        // Change file permission
        chmod($uploaded_pic, octdec($CONFIG['default_file_mode']));
        // Get picture information


        // Check that picture file size is lower than the maximum allowed
        if (filesize($uploaded_pic) > ($CONFIG['max_upl_size'] << 10)) {
            @unlink($uploaded_pic);
            cpg_die(ERROR, sprintf($lang_db_input_php['err_imgsize_too_large'], $CONFIG['max_upl_size']), __FILE__, __LINE__);
        } elseif (is_image($picture_name)) {
            $imginfo = getimagesize($uploaded_pic);
            // getimagesize does not recognize the file as a picture
            if ($imginfo == null) {
                @unlink($uploaded_pic);
                cpg_die(ERROR, $lang_db_input_php['err_invalid_img'], __FILE__, __LINE__, true);
            // JPEG and PNG only are allowed with GD
            } elseif ($imginfo[2] != GIS_JPG && $imginfo[2] != GIS_PNG && ($CONFIG['thumb_method'] == 'gd1' || $CONFIG['thumb_method'] == 'gd2')) {
                @unlink($uploaded_pic);
                cpg_die(ERROR, $lang_errors['gd_file_type_err'], __FILE__, __LINE__, true);
            // *** NOT NEEDED CHECK DONE BY 'is_image'
            // Check image type is among those allowed for ImageMagick
            //} elseif (!stristr($CONFIG['allowed_img_types'], $IMG_TYPES[$imginfo[2]]) && $CONFIG['thumb_method'] == 'im') {
                //@unlink($uploaded_pic);
                //cpg_die(ERROR, sprintf($lang_db_input_php['allowed_img_types'], $CONFIG['allowed_img_types']), __FILE__, __LINE__);
            // Check that picture size (in pixels) is lower than the maximum allowed
            } elseif (max($imginfo[0], $imginfo[1]) > $CONFIG['max_upl_width_height']) {
                @unlink($uploaded_pic);
                cpg_die(ERROR, sprintf($lang_db_input_php['err_fsize_too_large'], $CONFIG['max_upl_width_height'], $CONFIG['max_upl_width_height']), __FILE__, __LINE__);
            } // Image is ok
        }

        // Upload is ok
        // Create thumbnail and internediate image and add the image into the DB
        $result = add_picture($album, $filepath, $picture_name, $title, $caption, $keywords, $user1, $user2, $user3, $user4, $category, $raw_ip, $hdr_ip,(int) $_POST['width'],(int) $_POST['height']);

        if (!$result) {
            @unlink($uploaded_pic);
            cpg_die(CRITICAL_ERROR, sprintf($lang_db_input_php['err_insert_pic'], $uploaded_pic) . '<br /><br />' . $ERROR, __FILE__, __LINE__, true);
        } elseif ($PIC_NEED_APPROVAL) {
            pageheader($lang_info);
            msg_box($lang_info, $lang_db_input_php['upload_success'], $lang_continue, 'index.php');
            // start: send admin approval mail
            if ($CONFIG['upl_notify_admin_email'])
            {
                include_once('include/mailer.inc.php');
                cpg_mail($CONFIG['gallery_admin_email'], sprintf($lang_db_input_php['notify_admin_email_subject'], $CONFIG['gallery_name']), sprintf($lang_db_input_php['notify_admin_email_body'], USER_NAME,  $CONFIG['ecards_more_pic_target'].'/editpics.php?mode=upload_approval' ));
            }
            // end: send admin approval mail
            ob_end_flush();
        } else {
            $header_location = (@preg_match('/Microsoft|WebSTAR|Xitami/', getenv('SERVER_SOFTWARE'))) ? 'Refresh: 0; URL=' : 'Location: ';
            $redirect = "displayimage.php?pos=" . (- mysql_insert_id());
            header($header_location . $redirect);
            pageheader($lang_info, "<META http-equiv=\"refresh\" content=\"1;url=$redirect\">");
            msg_box($lang_info, $lang_db_input_php['upl_success'], $lang_continue, $redirect);
            pagefooter();
            ob_end_flush();
            exit;
        }
        break;

    // Unknow event

    default:
        cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);
}
?>