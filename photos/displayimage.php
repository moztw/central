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
  $Source: /cvsroot/coppermine/stable/displayimage.php,v $
  $Revision: 1.11 $
  $Author: gaugau $
  $Date: 2005/04/19 03:17:10 $
**********************************************/

define('IN_COPPERMINE', true);
define('DISPLAYIMAGE_PHP', true);
define('INDEX_PHP', true);
//define('SMILIES_PHP', true);

require('include/init.inc.php');

if ($CONFIG['enable_smilies']) include("include/smilies.inc.php");

$breadcrumb = '';
$breadcrumb_text = '';
$cat_data = array();

if($CONFIG['read_exif_data'] ){
        include("include/exif_php.inc.php");
}
if($CONFIG['read_iptc_data'] ){
        include("include/iptc.inc.php");
}


/**
 * Local functions definition
 */

function html_picture_menu($id)
{
    global $lang_display_image_php;

    return <<<EOT
     <a href="#" onClick="return MM_openBrWindow('picEditor.php?id=$id','Crop_Picture','scrollbars=yes,toolbar=no,status=yes,resizable=yes')" class="admin_menu" >{$lang_display_image_php['crop_pic']}</a> <a href="editOnePic.php?id=$id&what=picture"  class="admin_menu">{$lang_display_image_php['edit_pic']}</a> <a href="delete.php?id=$id&what=picture"  class="admin_menu" onclick="return confirm('{$lang_display_image_php['confirm_del']}'); return false; ">{$lang_display_image_php['del_pic']}</a>

EOT;
}
// Prints the image-navigation menu
function html_img_nav_menu()
{
    global $CONFIG, $HTTP_SERVER_VARS, $HTTP_GET_VARS, $CURRENT_PIC_DATA, $PHP_SELF;
    global $album, $cat, $pos, $pic_count, $lang_img_nav_bar, $lang_text_dir, $template_img_navbar;

    $cat_link = is_numeric($album) ? '' : '&cat=' . $cat;

    $human_pos = $pos + 1;
    $page = ceil(($pos + 1) / ($CONFIG['thumbrows'] * $CONFIG['thumbcols']));
    $pid = $CURRENT_PIC_DATA['pid'];

    if ($pos > 0) {
        $prev = $pos - 1;
        $prev_tgt = "$PHP_SELF?album=$album$cat_link&pos=$prev";
        $prev_title = $lang_img_nav_bar['prev_title'];
    } else {
        $prev_tgt = "javascript:;";
        $prev_title = "";
    }
    if ($pos < ($pic_count -1)) {
        $next = $pos + 1;
        $next_tgt = "$PHP_SELF?album=$album$cat_link&pos=$next";
        $next_title = $lang_img_nav_bar['next_title'];
    } else {
        $next_tgt = "javascript:;";
        $next_title = "";
    }

    if (USER_CAN_SEND_ECARDS) {
        $ecard_tgt = "ecard.php?album=$album$cat_link&pid=$pid&pos=$pos";
        $ecard_title = $lang_img_nav_bar['ecard_title'];
    } else {
        $ecard_tgt = "javascript:alert('" . addslashes($lang_img_nav_bar['ecard_disabled_msg']) . "');";
        $ecard_title = $lang_img_nav_bar['ecard_disabled'];
    }

    $thumb_tgt = "thumbnails.php?album=$album$cat_link&page=$page";

    $slideshow_tgt = "$PHP_SELF?album=$album$cat_link&pid=$pid&slideshow=".$CONFIG['slideshow_interval'];

    $pic_pos = sprintf($lang_img_nav_bar['pic_pos'], $human_pos, $pic_count);

    $params = array('{THUMB_TGT}' => $thumb_tgt,
        '{THUMB_TITLE}' => $lang_img_nav_bar['thumb_title'],
        '{PIC_INFO_TITLE}' => $lang_img_nav_bar['pic_info_title'],
        '{SLIDESHOW_TGT}' => $slideshow_tgt,
        '{SLIDESHOW_TITLE}' => $lang_img_nav_bar['slideshow_title'],
        '{PIC_POS}' => $pic_pos,
        '{ECARD_TGT}' => $ecard_tgt,
        '{ECARD_TITLE}' => $ecard_title,
        '{PREV_TGT}' => $prev_tgt,
        '{PREV_TITLE}' => $prev_title,
        '{NEXT_TGT}' => $next_tgt,
        '{NEXT_TITLE}' => $next_title,
        '{PREV_IMAGE}' => ($lang_text_dir=='LTR') ? 'prev' : 'next',
        '{NEXT_IMAGE}' => ($lang_text_dir=='LTR') ? 'next' : 'prev',
        );

    return template_eval($template_img_navbar, $params);
}
// Displays a picture
function html_picture()
{
    global $CONFIG, $CURRENT_PIC_DATA, $CURRENT_ALBUM_DATA, $USER, $HTTP_COOKIE_VARS;
    global $album, $comment_date_fmt, $template_display_picture;
    global $lang_display_image_php, $lang_picinfo;

    $pid = $CURRENT_PIC_DATA['pid'];

    if (!isset($USER['liv']) || !is_array($USER['liv'])) {
        $USER['liv'] = array();
    }
    // Add 1 to hit counter
    if ($album != "lasthits" && !in_array($pid, $USER['liv']) && isset($HTTP_COOKIE_VARS[$CONFIG['cookie_name'] . '_data'])) {
        add_hit($pid);
        if (count($USER['liv']) > 4) array_shift($USER['liv']);
        array_push($USER['liv'], $pid);
    }

    if($CONFIG['thumb_use']=='ht' && $CURRENT_PIC_DATA['pheight'] > $CONFIG['picture_width'] ){ // The wierd comparision is because only picture_width is stored
      $condition = true;
    }elseif($CONFIG['thumb_use']=='wd' && $CURRENT_PIC_DATA['pwidth'] > $CONFIG['picture_width']){
      $condition = true;
    }elseif($CONFIG['thumb_use']=='any' && max($CURRENT_PIC_DATA['pwidth'], $CURRENT_PIC_DATA['pheight']) > $CONFIG['picture_width']){
      $condition = true;
    }else{
     $condition = false;
    }



    if ($CONFIG['make_intermediate'] && $condition ) {
        $picture_url = get_pic_url($CURRENT_PIC_DATA, 'normal');
    } else {
        $picture_url = get_pic_url($CURRENT_PIC_DATA, 'fullsize');
    }
    $pic_thumb_url = get_pic_url($CURRENT_PIC_DATA,'thumb');

    $picture_menu = ((USER_ADMIN_MODE && $CURRENT_ALBUM_DATA['category'] == FIRST_USER_CAT + USER_ID) || GALLERY_ADMIN_MODE) ? html_picture_menu($pid) : '';

    $image_size = compute_img_size($CURRENT_PIC_DATA['pwidth'], $CURRENT_PIC_DATA['pheight'], $CONFIG['picture_width']);

    $pic_title = '';
    $mime_content = get_type($CURRENT_PIC_DATA['filename']);


    if ($CURRENT_PIC_DATA['title'] != '') {
        $pic_title .= $CURRENT_PIC_DATA['title'] . "\n";
    }
    if ($CURRENT_PIC_DATA['caption'] != '') {
        $pic_title .= $CURRENT_PIC_DATA['caption'] . "\n";
    }
    if ($CURRENT_PIC_DATA['keywords'] != '') {
        $pic_title .= $lang_picinfo['Keywords'] . ": " . $CURRENT_PIC_DATA['keywords'];
    }

    if ($CURRENT_PIC_DATA['pwidth']==0 || $CURRENT_PIC_DATA['pheight']==0) {
        $image_size['geom']='';
        $image_size['whole'] = '';
    } elseif ($mime_content['content']=='movie' || $mime_content['content']=='audio') {
        $ctrl_offset['mov']=15;
        $ctrl_offset['wmv']=45;
        $ctrl_offset['swf']=0;
        $ctrl_offset['rm']=0;
        $ctrl_offset_default=45;
        $ctrl_height = (isset($ctrl_offset[$mime_content['extension']]))?($ctrl_offset[$mime_content['extension']]):$ctrl_offset_default;
        $image_size['whole']='width="'.$CURRENT_PIC_DATA['pwidth'].'" height="'.($CURRENT_PIC_DATA['pheight']+$ctrl_height).'"';
    }

    if ($mime_content['content']=='image') {
        if (isset($image_size['reduced'])) {
            $winsizeX = $CURRENT_PIC_DATA['pwidth'] + 16;
            $winsizeY = $CURRENT_PIC_DATA['pheight'] + 16;
            $pic_html = "<a href=\"javascript:;\" onClick=\"MM_openBrWindow('displayimage.php?pid=$pid&fullsize=1','" . uniqid(rand()) . "','scrollbars=yes,toolbar=yes,status=yes,resizable=yes,width=$winsizeX,height=$winsizeY')\">";
            $pic_title = $lang_display_image_php['view_fs'] . "\n==============\n" . $pic_title;
            $pic_html .= "<img src=\"" . $picture_url . "\" class=\"image\" border=\"0\" alt=\"{$lang_display_image_php['view_fs']}\" /><br />";
            $pic_html .= "</a>\n";
        } else {
            $pic_html = "<img src=\"" . $picture_url . "\" {$image_size['geom']} class=\"image\" border=\"0\" /><br />\n";
        }
    } elseif ($mime_content['content']=='document') {
        $pic_html = "<a href=\"{$picture_url}\" target=\"_blank\" class=\"document_link\"><img src=\"".$pic_thumb_url."\" border=\"0\" class=\"image\" /></a>\n<br />";
    } else {
            $pic_html = "<object {$image_size['whole']}><param name=\"autostart\" value=\"true\"><param name=\"src\" value=\"". $picture_url . "\"><embed {$image_size['whole']} src=\"". $picture_url . "\" autostart=\"true\"></embed></object><br />\n";
    }

    if (!$CURRENT_PIC_DATA['title'] && !$CURRENT_PIC_DATA['caption']) {
        template_extract_block($template_display_picture, 'img_desc');
    } else {
        if (!$CURRENT_PIC_DATA['title']) {
            template_extract_block($template_display_picture, 'title');
        }
        if (!$CURRENT_PIC_DATA['caption']) {
            template_extract_block($template_display_picture, 'caption');
        }
    }

    $params = array('{CELL_HEIGHT}' => '100',
        '{IMAGE}' => $pic_html,
        '{ADMIN_MENU}' => $picture_menu,
        '{TITLE}' => $CURRENT_PIC_DATA['title'],
        '{CAPTION}' => bb_decode($CURRENT_PIC_DATA['caption']),
        );

    return template_eval($template_display_picture, $params);
}

function html_rating_box()
{
    global $CONFIG, $CURRENT_PIC_DATA, $CURRENT_ALBUM_DATA;
    global $template_image_rating, $lang_rate_pic;

    if (!(USER_CAN_RATE_PICTURES && $CURRENT_ALBUM_DATA['votes'] == 'YES')) return '';

    $votes = $CURRENT_PIC_DATA['votes'] ? sprintf($lang_rate_pic['rating'], round($CURRENT_PIC_DATA['pic_rating'] / 2000, 1), $CURRENT_PIC_DATA['votes']) : $lang_rate_pic['no_votes'];
    $pid = $CURRENT_PIC_DATA['pid'];

    $params = array('{TITLE}' => $lang_rate_pic['rate_this_pic'],
        '{VOTES}' => $votes,
        '{RATE0}' => "ratepic.php?pic=$pid&rate=0",
        '{RATE1}' => "ratepic.php?pic=$pid&rate=1",
        '{RATE2}' => "ratepic.php?pic=$pid&rate=2",
        '{RATE3}' => "ratepic.php?pic=$pid&rate=3",
        '{RATE4}' => "ratepic.php?pic=$pid&rate=4",
        '{RATE5}' => "ratepic.php?pic=$pid&rate=5",
        '{RUBBISH}' => $lang_rate_pic['rubbish'],
        '{POOR}' => $lang_rate_pic['poor'],
        '{FAIR}' => $lang_rate_pic['fair'],
        '{GOOD}' => $lang_rate_pic['good'],
        '{EXCELLENT}' => $lang_rate_pic['excellent'],
        '{GREAT}' => $lang_rate_pic['great'],
        );

    return template_eval($template_image_rating, $params);
}
// Display picture information
function html_picinfo()
{
    global $CONFIG, $CURRENT_PIC_DATA, $CURRENT_ALBUM_DATA, $THEME_DIR, $FAVPICS;
    global $album, $lang_picinfo, $lang_display_image_php, $lang_byte_units;

    if ($CURRENT_PIC_DATA['owner_id'] && $CURRENT_PIC_DATA['owner_name']) {
        $owner_link = '<a href ="profile.php?uid=' . $CURRENT_PIC_DATA['owner_id'] . '">' . $CURRENT_PIC_DATA['owner_name'] . '</a> ';
    } else {
        $owner_link = '';
    }

    if (GALLERY_ADMIN_MODE && $CURRENT_PIC_DATA['pic_raw_ip']) {
        if ($CURRENT_PIC_DATA['pic_hdr_ip']) {
            $ipinfo = ' (' . $CURRENT_PIC_DATA['pic_hdr_ip'] . '[' . $CURRENT_PIC_DATA['pic_raw_ip'] . ']) / ';
        } else {
            $ipinfo = ' (' . $CURRENT_PIC_DATA['pic_raw_ip'] . ') / ';
        }
    } else {
        if ($owner_link) {
            $ipinfo = '/ ';
        } else {
            $ipinfo = '';
        }
    }

    $info[$lang_picinfo['Filename']] = htmlspecialchars($CURRENT_PIC_DATA['filename']);
    $info[$lang_picinfo['Album name']] = '<span class="alblink">' . $owner_link . $ipinfo . '<a href="thumbnails.php?album=' . $CURRENT_PIC_DATA['aid'] . '">' . $CURRENT_ALBUM_DATA['title'] . '</a></span>';

    if ($CURRENT_PIC_DATA['votes'] > 0) {
        if (defined('THEME_HAS_RATING_GRAPHICS')) {
            $prefix = $THEME_DIR;
        } else {
            $prefix = '';
        }
        $info[sprintf($lang_picinfo['Rating'], $CURRENT_PIC_DATA['votes'])] = '<img src="' . $prefix . 'images/rating' . round($CURRENT_PIC_DATA['pic_rating'] / 2000) . '.gif" align="absmiddle"/>';
    }

    if ($CURRENT_PIC_DATA['keywords'] != "") {
        $info[$lang_picinfo['Keywords']] = '<span class="alblink">' . preg_replace("/(\S+)/", "<a href=\"thumbnails.php?album=search&search=\\1\">\\1</a>" , $CURRENT_PIC_DATA['keywords']) . '</span>';
    }

    for ($i = 1; $i <= 4; $i++) {
        if ($CONFIG['user_field' . $i . '_name']) {
            if ($CURRENT_PIC_DATA['user' . $i] != "") {
                $info[$CONFIG['user_field' . $i . '_name']] = make_clickable($CURRENT_PIC_DATA['user' . $i]);
            }
        }
    }

    $info[$lang_picinfo['File Size']] = ($CURRENT_PIC_DATA['filesize'] > 10240 ? ($CURRENT_PIC_DATA['filesize'] >> 10) . '&nbsp;' . $lang_byte_units[1] : $CURRENT_PIC_DATA['filesize'] . '&nbsp;' . $lang_byte_units[0]);
    $info[$lang_picinfo['File Size']] = '<span dir="LTR">' . $info[$lang_picinfo['File Size']] . '</span>';
    $info[$lang_picinfo['Dimensions']] = sprintf($lang_display_image_php['size'], $CURRENT_PIC_DATA['pwidth'], $CURRENT_PIC_DATA['pheight']);
    $info[$lang_picinfo['Displayed']] = sprintf($lang_display_image_php['views'], $CURRENT_PIC_DATA['hits']);

    $path_to_pic = $CONFIG['fullpath'] . $CURRENT_PIC_DATA['filepath'] . $CURRENT_PIC_DATA['filename'];

    if ($CONFIG['read_exif_data']) $exif = exif_parse_file($path_to_pic);

    if (isset($exif) && is_array($exif)) {
        if (isset($exif['Camera'])) $info[$lang_picinfo['Camera']] = $exif['Camera'];
        if (isset($exif['DateTaken'])) $info[$lang_picinfo['Date taken']] = $exif['DateTaken'];
        if (isset($exif['Aperture'])) $info[$lang_picinfo['Aperture']] = $exif['Aperture'];
        if (isset($exif['ISO'])) $info[$lang_picinfo['ISO']] = $exif['ISO'];
        if (isset($exif['ExposureTime'])) $info[$lang_picinfo['Exposure time']] = $exif['ExposureTime'];
        if (isset($exif['FocalLength'])) $info[$lang_picinfo['Focal length']] = $exif['FocalLength'];
        if (@strlen(trim($exif['Comment'])) > 0 ) {
                $info[$lang_picinfo['Comment']] = trim($exif['Comment']);
        }
    }

    if ($CONFIG['read_iptc_data']) $iptc = get_IPTC($path_to_pic);

    if (isset($iptc) && is_array($iptc)) {
        if (isset($iptc['Title'])) $info[$lang_picinfo['iptcTitle']] = trim($iptc['Title']);
        if (isset($iptc['Copyright'])) $info[$lang_picinfo['iptcCopyright']] = trim($iptc['Copyright']);
        if (isset($iptc['Keywords'])) $info[$lang_picinfo['iptcKeywords']] = trim(implode(" ",$iptc['Keywords']));
        if (isset($iptc['Category'])) $info[$lang_picinfo['iptcCategory']] = trim($iptc['Category']);
        if (isset($iptc['SubCategories'])) $info[$lang_picinfo['iptcSubCategories']] = trim(implode(" ",$iptc['SubCategories']));
    }
    // Create the absolute URL for display in info
    $info['URL'] = '<a href="' . $CONFIG["ecards_more_pic_target"] . (substr($CONFIG["ecards_more_pic_target"], -1) == '/' ? '' : '/') .basename($_SERVER['PHP_SELF']) . "?pos=-$CURRENT_PIC_DATA[pid]" . '" >' . $CONFIG["ecards_more_pic_target"] . (substr($CONFIG["ecards_more_pic_target"], -1) == '/' ? '' : '/') . basename($_SERVER['PHP_SELF']) . "?pos=-$CURRENT_PIC_DATA[pid]" . '</a>';
    // with subdomains the variable is $_SERVER["SERVER_NAME"] does not return the right value instead of using a new config variable I reused $CONFIG["ecards_more_pic_target"] no trailing slash in the configure
    // Create the add to fav link
    if (!in_array($CURRENT_PIC_DATA['pid'], $FAVPICS)) {
        $info[$lang_picinfo['addFavPhrase']] = "<a href=\"addfav.php?pid=" . $CURRENT_PIC_DATA['pid'] . "\">" . $lang_picinfo['addFav'] . '</a>';
    } else {
        $info[$lang_picinfo['addFavPhrase']] = "<a href=\"addfav.php?pid=" . $CURRENT_PIC_DATA['pid'] . "\">" . $lang_picinfo['remFav'] . '</a>';
    }

    return theme_html_picinfo($info);
}
// Displays comments for a specific picture
function html_comments($pid)
{
    global $CONFIG, $USER, $CURRENT_ALBUM_DATA, $comment_date_fmt, $HTML_SUBST;
    global $template_image_comments, $template_add_your_comment, $lang_display_comments;

    $html = '';

    if (!$CONFIG['enable_smilies']) {
        $tmpl_comment_edit_box = template_extract_block($template_image_comments, 'edit_box_no_smilies', '{EDIT}');
        template_extract_block($template_image_comments, 'edit_box_smilies');
        template_extract_block($template_add_your_comment, 'input_box_smilies');
    } else {
        $tmpl_comment_edit_box = template_extract_block($template_image_comments, 'edit_box_smilies', '{EDIT}');
        template_extract_block($template_image_comments, 'edit_box_no_smilies');
        template_extract_block($template_add_your_comment, 'input_box_no_smilies');
    }

    $tmpl_comments_buttons = template_extract_block($template_image_comments, 'buttons', '{BUTTONS}');
    $tmpl_comments_ipinfo = template_extract_block($template_image_comments, 'ipinfo', '{IPINFO}');

    $result = db_query("SELECT msg_id, msg_author, msg_body, UNIX_TIMESTAMP(msg_date) AS msg_date, author_id, author_md5_id, msg_raw_ip, msg_hdr_ip FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid='$pid' ORDER BY msg_id ASC");

    while ($row = mysql_fetch_array($result)) {
        $user_can_edit = (GALLERY_ADMIN_MODE) || (USER_ID && USER_ID == $row['author_id'] && USER_CAN_POST_COMMENTS) || (!USER_ID && USER_CAN_POST_COMMENTS && ($USER['ID'] == $row['author_md5_id']));
        $comment_buttons = $user_can_edit ? $tmpl_comments_buttons : '';
        $comment_edit_box = $user_can_edit ? $tmpl_comment_edit_box : '';
        $comment_ipinfo = ($row['msg_raw_ip'] && GALLERY_ADMIN_MODE)?$tmpl_comments_ipinfo : '';

        if ($CONFIG['enable_smilies']) {
            $comment_body = process_smilies(make_clickable($row['msg_body']));
            $smilies = generate_smilies("f{$row['msg_id']}", 'msg_body');
        } else {
            $comment_body = make_clickable($row['msg_body']);
            $smilies = '';
        }

        $params = array('{EDIT}' => &$comment_edit_box,
            '{BUTTONS}' => &$comment_buttons,
            '{IPINFO}' => &$comment_ipinfo
            );

        $template = template_eval($template_image_comments, $params);

        $params = array('{MSG_AUTHOR}' => $row['msg_author'],
            '{MSG_ID}' => $row['msg_id'],
            '{EDIT_TITLE}' => &$lang_display_comments['edit_title'],
            '{CONFIRM_DELETE}' => &$lang_display_comments['confirm_delete'],
            '{MSG_DATE}' => localised_date($row['msg_date'], $comment_date_fmt),
            '{MSG_BODY}' => &$comment_body,
            '{MSG_BODY_RAW}' => $row['msg_body'],
            '{OK}' => &$lang_display_comments['OK'],
            '{SMILIES}' => $smilies,
            '{HDR_IP}' => $row['msg_hdr_ip'],
            '{RAW_IP}' => $row['msg_raw_ip'],
            );

        $html .= template_eval($template, $params);
    }

    if (USER_CAN_POST_COMMENTS && $CURRENT_ALBUM_DATA['comments'] == 'YES') {
        if (USER_ID) {
            $user_name_input = '<input type="hidden" name="msg_author" value="' . USER_NAME . '">';
            template_extract_block($template_add_your_comment, 'user_name_input', $user_name_input);
            $user_name = '';
        } else {
            $user_name = isset($USER['name']) ? '"' . strtr($USER['name'], $HTML_SUBST) . '"' : '"' . $lang_display_comments['your_name'] . '" onClick="javascript:this.value=\'\';"';
        }

        $params = array('{ADD_YOUR_COMMENT}' => $lang_display_comments['add_your_comment'],
            // Modified Name and comment field
            '{NAME}' => $lang_display_comments['name'],
            '{COMMENT}' => $lang_display_comments['comment'],
            '{PIC_ID}' => $pid,
            '{USER_NAME}' => $user_name,
            '{MAX_COM_LENGTH}' => $CONFIG['max_com_size'],
            '{OK}' => $lang_display_comments['OK'],
            '{SMILIES}' => '',
            );

        if ($CONFIG['enable_smilies']) $params['{SMILIES}'] = generate_smilies();

        $html .= template_eval($template_add_your_comment, $params);
    }

    return $html;
}
// Display the full size image
function display_fullsize_pic()
{
    global $CONFIG, $HTTP_GET_VARS, $THEME_DIR, $ALBUM_SET;
    global $lang_errors, $lang_fullsize_popup, $lang_charset;

    if (function_exists('theme_display_fullsize_pic')) {
        theme_display_fullsize_pic();
        return;
    }

    ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title><?php echo $CONFIG['gallery_name'] ?>: <?php echo $lang_fullsize_popup['click_to_close'];
    ?></title>
<meta http-equiv="content-type" content="text/html; charset=<?php echo $CONFIG['charset'] == 'language file' ? $lang_charset : $CONFIG['charset'] ?>" />
<link rel="stylesheet" href="<?php echo $THEME_DIR ?>style.css" />
<script type="text/javascript" src="scripts.js"></script>
</head>
<body scroll="auto" marginwidth="0" marginheight="0">
<script language="JavaScript" type="text/JavaScript">
adjust_popup();
</script>

<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="2">
 <td align="center" valign="middle">
  <table cellspacing="2" cellpadding="0" style="border: 1px solid #000000; background-color: #FFFFFF;">
   <td>
<?php
    if (isset($HTTP_GET_VARS['picfile'])) {
        if (!GALLERY_ADMIN_MODE) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

        $picfile = $HTTP_GET_VARS['picfile'];
        $picname = $CONFIG['fullpath'] . $picfile;
        $imagesize = @getimagesize($picname);
        echo "<a href=\"javascript: window.close()\"><img src=\"" . path2url($picname) . "\" $imagesize[3] class=\"image\" border=\"0\" alt=\"\" title=\"$picfile\n" . $lang_fullsize_popup['click_to_close'] . "\"/></a><br />\n";
    } elseif (isset($HTTP_GET_VARS['pid'])) {
        $pid = (int)$HTTP_GET_VARS['pid'];
        $sql = "SELECT * " . "FROM {$CONFIG['TABLE_PICTURES']} " . "WHERE pid='$pid' $ALBUM_SET";
        $result = db_query($sql);

        if (!mysql_num_rows($result)) cpg_die(ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);

        $row = mysql_fetch_array($result);
        $pic_url = get_pic_url($row, 'fullsize');
        $geom = 'width="' . $row['pwidth'] . '" height="' . $row['pheight'] . '"';
        echo "<a href=\"javascript: window.close()\"><img src=\"" . $pic_url . "\" $geom class=\"image\" border=\"0\" alt=\"\" title=\"" . htmlspecialchars($row['filename']) . "\n" . $lang_fullsize_popup['click_to_close'] . "\"></a><br />\n";
    }

    ?>
   </td>
  </table>
 </td>
</table>
</body>
</html>
<?php
}

function slideshow()
{
    global $CONFIG, $HTTP_GET_VARS, $lang_display_image_php, $template_display_picture;

    if (function_exists('theme_slideshow')) {
        theme_slideshow();
        return;
    }

    pageheader($lang_display_image_php['slideshow']);

    include "include/slideshow.inc.php";

    $start_slideshow = '<script language="JavaScript" type="text/JavaScript">runSlideShow()</script>';
    template_extract_block($template_display_picture, 'img_desc', $start_slideshow);

    $params = array('{CELL_HEIGHT}' => $CONFIG['picture_width'] + 100,
        '{IMAGE}' => '<img src="' . $start_img . '" name="SlideShow" class="image" /><br />',
        '{ADMIN_MENU}' => '',
        );

    starttable();
    echo template_eval($template_display_picture, $params);
    endtable();
    starttable();
    echo <<<EOT
        <tr>
                <td align="center" class="navmenu" style="white-space: nowrap;">
                        <a href="javascript:endSlideShow()" class="navmenu">{$lang_display_image_php['stop_slideshow']}</a>
                </td>
        </tr>

EOT;
    endtable();
    pagefooter();
}

function get_subcat_data($parent, $level)
{
    global $CONFIG, $ALBUM_SET_ARRAY;

    $result = db_query("SELECT cid, name, description FROM {$CONFIG['TABLE_CATEGORIES']} WHERE parent = '$parent'");
    if (mysql_num_rows($result) > 0) {
        $rowset = db_fetch_rowset($result);
        foreach ($rowset as $subcat) {
            $result = db_query("SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = {$subcat['cid']}");
            $album_count = mysql_num_rows($result);
            while ($row = mysql_fetch_array($result)) {
                $ALBUM_SET_ARRAY[] = $row['aid'];
            } // while
        }
        if ($level > 1) get_subcat_data($subcat['cid'], $level -1);
    }
}

/**
 * Main code
 */

$pos = isset($HTTP_GET_VARS['pos']) ? (int)$HTTP_GET_VARS['pos'] : 0;
$cat = isset($HTTP_GET_VARS['cat']) ? (int)$HTTP_GET_VARS['cat'] : 0;
$album = isset($HTTP_GET_VARS['album']) ? $HTTP_GET_VARS['album'] : '';
// Build the album set if required
if (!is_numeric($album) && $cat) { // Meta albums, we need to restrict the albums to the current category
    if ($cat < 0) {
        $ALBUM_SET .= 'AND aid IN (' . (- $cat) . ') ';
    } else {
        $ALBUM_SET_ARRAY = array();
        if ($cat == USER_GAL_CAT)
            $where = 'category > ' . FIRST_USER_CAT;
        else
            $where = "category = '$cat'";

        $result = db_query("SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE $where");
        while ($row = mysql_fetch_array($result)) {
            $ALBUM_SET_ARRAY[] = $row['aid'];
        } // while
        get_subcat_data($cat, $CONFIG['subcat_level']);
        // Treat the album set
        if (count($ALBUM_SET_ARRAY)) {
            $set = '';
            foreach ($ALBUM_SET_ARRAY as $album_id) $set .= ($set == '') ? $album_id : ',' . $album_id;
            $ALBUM_SET .= "AND aid IN ($set) ";
        }
    }
}
// Retrieve data for the current picture
if ($pos < 0) {
    $pid = - $pos;
    $result = db_query("SELECT aid from {$CONFIG['TABLE_PICTURES']} WHERE pid='$pid' $ALBUM_SET LIMIT 1");
    if (mysql_num_rows($result) == 0) cpg_die(ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
    $row = mysql_fetch_array($result);
    $album = $row['aid'];
    $pic_data = get_pic_data($album, $pic_count, $album_name, -1, -1, false);
    for($pos = 0; $pic_data[$pos]['pid'] != $pid && $pos < $pic_count; $pos++);
    $pic_data = get_pic_data($album, $pic_count, $album_name, $pos, 1, false);
    $CURRENT_PIC_DATA = $pic_data[0];
} elseif (isset($HTTP_GET_VARS['pos'])) {
    $pic_data = get_pic_data($album, $pic_count, $album_name, $pos, 1, false);
    if ($pic_count == 0) {
        cpg_die(INFORMATION, $lang_errors['no_img_to_display'], __FILE__, __LINE__);
    } elseif (count($pic_data) == 0 && $pos >= $pic_count) {
        $pos = $pic_count - 1;
        $human_pos = $pos + 1;
        $pic_data = get_pic_data($album, $pic_count, $album_name, $pos, 1, false);
    }
    $CURRENT_PIC_DATA = $pic_data[0];
}
// Retrieve data for the current album
if (isset($CURRENT_PIC_DATA)) {
    $result = db_query("SELECT title, comments, votes, category, aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='{$CURRENT_PIC_DATA['aid']}' LIMIT 1");
    if (!mysql_num_rows($result)) cpg_die(CRITICAL_ERROR, sprintf($lang_errors['pic_in_invalid_album'], $CURRENT_PIC_DATA['aid']), __FILE__, __LINE__);
    $CURRENT_ALBUM_DATA = mysql_fetch_array($result);

    if (is_numeric($album)) {
        $cat = - $album;
        $actual_cat = $CURRENT_ALBUM_DATA['category'];
        breadcrumb($actual_cat, $breadcrumb, $breadcrumb_text);
        $cat = - $album;
    } else {
        $actual_cat = $CURRENT_ALBUM_DATA['category'];
        breadcrumb($actual_cat, $breadcrumb, $breadcrumb_text);
    }
}

if (isset($HTTP_GET_VARS['fullsize'])) {
    display_fullsize_pic();
    ob_end_flush();
} elseif (isset($HTTP_GET_VARS['slideshow'])) {
    slideshow();
    ob_end_flush();
} else {
    if (!isset($HTTP_GET_VARS['pos'])) cpg_die(ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
    $picture_title = $CURRENT_PIC_DATA['title'] ? $CURRENT_PIC_DATA['title'] : strtr(preg_replace("/(.+)\..*?\Z/", "\\1", htmlspecialchars($CURRENT_PIC_DATA['filename'])), "_", " ");

    $nav_menu = html_img_nav_menu();
    $picture = html_picture();
    $votes = html_rating_box();
    $pic_info = html_picinfo();
    $comments = html_comments($CURRENT_PIC_DATA['pid']);
    if ($CURRENT_PIC_DATA['keywords']) { $meta_keywords = "<meta name=\"keywords\" content=\"".$CURRENT_PIC_DATA['keywords']."\">"; }

    pageheader($album_name . '/' . $picture_title, $meta_keywords, false);
    // Display Breadcrumbs
    if ($breadcrumb && !(strpos($CONFIG['main_page_layout'],"breadcrumb")===false)) {
        theme_display_breadcrumb($breadcrumb, $cat_data);
    }
    // Display Filmstrip if the album is not search
    if ($album != 'search') {
        $film_strip = display_film_strip($album, (isset($cat) ? $cat : 0), $pos, true);
    }
    theme_display_image($nav_menu, $picture, $votes, $pic_info, $comments, $film_strip);
    pagefooter();
    ob_end_flush();
}

?>