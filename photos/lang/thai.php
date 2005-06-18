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
// CVS version: $Id: thai.php,v 1.3 2005/03/22 07:24:31 gaugau Exp $
// ------------------------------------------------------------------------- //

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Thailand',
  'lang_name_native' => 'Thailand',
  'lang_country_code' => 'th',
  'trans_name'=> 'Thanit T.',
  'trans_email' => 'webmaster@thaioffroader.net',
  'trans_website' => 'http://www.thaioffroader.net/',
  'trans_date' => '2005-03-18',
);

$lang_charset = 'Tis-620';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('อาทิตย์์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์t');
$lang_month = array('ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.');

// Some common strings
$lang_yes = 'ใช่';
$lang_no  = 'ไม่ใช่';
$lang_back = 'ย้อนกลับ';
$lang_continue = 'ต่อไป';
$lang_info = 'โปรดทราบ';
$lang_error = 'เกิดความผิดพลาด';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%B %d, %Y';
$lastcom_date_fmt =  '%m/%d/%y at %H:%M'; //cpg1.3.0
$lastup_date_fmt = '%B %d, %Y';
$register_date_fmt = '%B %d, %Y';
$lasthit_date_fmt = '%B %d, %Y at %I:%M %p'; //cpg1.3.0
$comment_date_fmt =  '%B %d, %Y at %I:%M %p'; //cpg1.3.0

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*', 'เย็ด', 'หี', 'ควย', 'แตด');

$lang_meta_album_names = array(
  'random' => 'สุ่มภาพ', //cpg1.3.0
  'lastup' => 'เพิ่มล่าสุด',
  'lastalb'=> 'แก้ไขล่าสุด',
  'lastcom' => 'ความเห็นล่าสุด',
  'topn' => 'เข้าชมมากสุด',
  'toprated' => 'คะแนนสูงสุด',
  'lasthits' => 'แสดงล่าสุด',
  'search' => 'ผลการค้นหา',
  'favpics'=> 'รูปที่ชื่นชอบ', //cpg1.3.0
);

$lang_errors = array(
  'access_denied' => 'คุณไม่ได้รับอนุญาตให้ใช้งานในหน้า้นี้',
  'perm_denied' => 'คุณไม่ได้รับอนุญาตให้ใช้งาน',
  'param_missing' => 'สคริปต์ถูกเรียกโดยไม่มีพารามิเตอร์',
  'non_exist_ap' => 'ไม่มีรูป/อัลบั้มที่คุณเลือก', //cpg1.3.0
  'quota_exceeded' => 'ขนาดดิสค์ที่อนุญาตไม่พอ<br /><br />คุณได้รับขนาดที่อนุญาต [quota]K, ภาพของคุณมีขนาด [space]K, การเพิ่มภาพนี้จะทำให้ขนาดดิสค์ที่ได้รับอนุญาตไม่พอ', //cpg1.3.0
  'gd_file_type_err' => 'เมื่อใช้ GD image library จะอนุญาตเฉพาะ JPEG และ PNG.',
  'invalid_image' => 'รูปใช้ไม่ได้ หรือไม่สามารถใช้กับ GD library',
  'resize_failed' => 'ไม่สามารถแสดงภาพย่อ หรือย่อขนาดภาพ',
  'no_img_to_display' => 'ไม่มีภาพที่จะแสดง',
  'non_exist_cat' => 'ไม่มีหมวดหมู่ที่คุณเลือก',
  'orphan_cat' => 'ไม่มีหมวดหมู่หลัก, กรุณาใช้ส่วนจัดการหมวดหมู่เพื่อแก้ไข', //cpg1.3.0
  'directory_ro' => 'ไดเรคทอรี่ \'%s\' ไม่สามารถเขียนภาพได้, ภาพไม่สามารถลบได้', //cpg1.3.0
  'non_exist_comment' => 'ไม่มีความเห็นที่คุณเลือก',
  'pic_in_invalid_album' => 'ภาพไม่ได้อยู่ในอัลบั้มใดๆ (%s)!?', //cpg1.3.0
  'banned' => 'คุณกระทำการก่อกวนและสร้างความเสียหายเป็นผู้ไม่พึงประสงค์ หากไม่หยุดกระทำการเราจะแจ้งความเพื่อดำเนินคดี',
  'not_with_udb' => 'ส่วนนี้ถูกยกเลิก เพราะอาจทำให้เกิดความเสียหายกับโปรแกรมอื่น',
  'offline_title' => 'ไม่เปิดใช้งาน', //cpg1.3.0
  'offline_text' => 'แกลเลอรี่หยุดใช้งานชั่วคราว - กรุณากลับมาใหม่อีกครั้ง', //cpg1.3.0
  'ecards_empty' => 'ไม่มี ecard ที่จะแสดง กรุณาตรวจสอบค่าการแสดง ecard ใน config', //cpg1.3.0
  'action_failed' => 'ไม่สามารถกระทำได้', //cpg1.3.0
  'no_zip' => 'ไม่พบไลบรารี่ที่จัดการ ภาพ ZIP กรุณาติดต่อผู้ดูแลระบบ', //cpg1.3.0
  'zip_type' => 'คุณไม่ได้รับอนุญาตให้อัพโหลดภาพ ZIP', //cpg1.3.0
);

$lang_bbcode_help = 'โค๊ดเหล่านี้อาจช่วยให้คุณสะดวกขึ้น: <li>[b]<b>ตัวหนา</b>[/b]</li> <li>[i]<i>ตัวเอียง</i>[/i]</li> <li>[url=http://yoursite.com/]Url Text[/url]</li> <li>[email]user@domain.com[/email]</li>'; //cpg1.3.0

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'alb_list_title' => 'ไปที่รายการอัลบั้ม',
  'alb_list_lnk' => 'รายการอัลบั้ม',
  'my_gal_title' => 'ไปที่อัลบั้มส่วนตัวของฉัน',
  'my_gal_lnk' => 'แกลเลอรี่ของฉัน',
  'my_prof_lnk' => 'ข้อมูลส่วนตัวของฉัน',
  'adm_mode_title' => 'เปลี่ยนเป็นระบบผู้ดูแลระบบ',
  'adm_mode_lnk' => 'ระบบผู้ดูแลระบบ',
  'usr_mode_title' => 'เปลี่ยนเป็นระบบผู้ใช้',
  'usr_mode_lnk' => 'ระบบผู้ใช้',
  'upload_pic_title' => 'อัพโหลดภาพไปที่อัลบั้ม', //cpg1.3.0
  'upload_pic_lnk' => 'อัพโหลดภาพ', //cpg1.3.0
  'register_title' => 'สร้างทะเบียนผู้ใช้',
  'register_lnk' => 'สมัครสมาชิก',
  'login_lnk' => 'Login',
  'logout_lnk' => 'Logout',
  'lastup_lnk' => 'อัพโหลดล่าสุด ',
  'lastcom_lnk' => 'ความเห็นล่าสุด ',
  'topn_lnk' => 'แสดงมากสุด ',
  'toprated_lnk' => 'คะแนนสูงสุด ',
  'search_lnk' => 'ค้นหา',
  'fav_lnk' => 'My Favorites',
  'memberlist_title' => 'รายชื่อสมาชิก', //cpg1.3.0
  'memberlist_lnk' => 'แสดงรายชื่อสมาชิก', //cpg1.3.0
  'faq_title' => 'คำถามที่ถามบ่อยใน &quot;Coppermine&quot;', //cpg1.3.0
  'faq_lnk' => 'FAQ', //cpg1.3.0
);

$lang_gallery_admin_menu = array(
  'upl_app_lnk' => 'ตรวจสอบการอัพโหลด',
  'config_lnk' => 'จัดการระบบ',
  'albums_lnk' => 'อัลบั้ม',
  'categories_lnk' => 'หมวดหมู่',
  'users_lnk' => 'ผู้ใช้',
  'groups_lnk' => 'กลุ่ม',
  'comments_lnk' => 'แสดงความเห็น', //cpg1.3.0
  'searchnew_lnk' => 'เพิ่มภาพต่อเนื่อง', //cpg1.3.0
  'util_lnk' => 'เครื่องมือผู้ดูแลระบบ', //cpg1.3.0
  'ban_lnk' => 'ห้ามผู้ใช้',
  'db_ecard_lnk' => 'แสดง Ecards', //cpg1.3.0
);

$lang_user_admin_menu = array(
  'albmgr_lnk' => 'สร้าง/ สั่ง อัลบั้มของฉัน',
  'modifyalb_lnk' => 'แก้ไขอัลบั้มของฉัน',
  'my_prof_lnk' => 'ข้อมูลส่วนตัว',
);

$lang_cat_list = array(
  'category' => 'หมวดหมู่',
  'albums' => 'อัลบั้ม',
  'pictures' => 'ภาพ', //cpg1.3.0
);

$lang_album_list = array(
  'album_on_page' => '%d อัลบั้ม ใน %d หน้า',
);

$lang_thumb_view = array(
  'date' => 'วันที่',
  //Sort by filename and title
  'name' => 'ชื่อภาพ',
  'title' => 'ชื่อเรื่อง',
  'sort_da' => 'เรียงวันที่ น้อยไปมาก',
  'sort_dd' => 'เรียงวันที่ มากไปน้อย',
  'sort_na' => 'เรียงชื่อ น้อยไปมาก',
  'sort_nd' => 'เรียงชื่อ มากไปน้อย',
  'sort_ta' => 'เรียงชื่อเรื่อง น้อยไปมาก',
  'sort_td' => 'เรียงชื่อเรื่อง มากไปน้อย',
  'download_zip' => 'ดาวน์โหลดภาพ Zip', //cpg1.3.0
  'pic_on_page' => '%d ภาพ ใน %d หน้า',
  'user_on_page' => '%d ผู้ใช้ ใน %d หน้า', //cpg1.3.0
);

$lang_img_nav_bar = array(
  'thumb_title' => 'กลับไปหน้าแสดงภาพย่อ',
  'pic_info_title' => 'แสดง/ซ่อน รายละเีอียดภาพ', //cpg1.3.0
  'slideshow_title' => 'สไลด์',
  'ecard_title' => 'ส่งเป็น e-card', //cpg1.3.0
  'ecard_disabled' => 'e-cards ใช้งานไม่ได้',
  'ecard_disabled_msg' => 'คุณไม่ได้รับอนุญาตให้ส่ง ecards', //js-alert //cpg1.3.0
  'prev_title' => 'ดูภาพก่อนหน้า', //cpg1.3.0
  'next_title' => 'ดูภาพถัดไป', //cpg1.3.0
  'pic_pos' => 'ภาพ %s/%s', //cpg1.3.0
);

$lang_rate_pic = array(
  'rate_this_pic' => 'ให้คะแนนภาพนี้ ', //cpg1.3.0
  'no_votes' => '(ยังไม่ให้คะแนน)',
  'rating' => '(คะแนนตอนนี้ : %s / 5 with %s votes)',
  'rubbish' => 'แย่มาก',
  'poor' => 'ต้องปรับปรุง',
  'fair' => 'พอใช้',
  'good' => 'ดี',
  'excellent' => 'ดีมาก',
  'great' => 'โอ้ว..พระเจ้าจอร์ช!!  มันยอดมาก...',
);

// ------------------------------------------------------------------------- //
// File include/exif.inc.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

$lang_cpg_die = array(
  INFORMATION => $lang_info,
  ERROR => $lang_error,
  CRITICAL_ERROR => 'เกิดความผิดพลาดร้ายแรง',
  'file' => 'ภาพ: ',
  'line' => 'บรรทัดที่: ',
);

$lang_display_thumbnails = array(
  'filename' => 'ชื่อภาพ : ',
  'filesize' => 'ขนาดภาพ : ',
  'dimensions' => 'ขนาดภาพ : ',
  'date_added' => 'วันที่เพิ่ม : ', //cpg1.3.0
);

$lang_get_pic_data = array(
  'n_comments' => '%s ความเห็น',
  'n_views' => '%s แสดง',
  'n_votes' => '(%s โหวต)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Debug Info', //cpg1.3.0
  'select_all' => 'เลือกทั้งหมด', //cpg1.3.0
  'copy_and_paste_instructions' => 'หากคุณต้องการความช่วยเหลือบน coppermine support board, ก๊อปปี้ debug output ไปวางในส่วนของคำขอของคุณ และอย่าลืมเปลี่ยน password เป็น *** ก่อนโพสต์ข้อความ', //cpg1.3.0
  'phpinfo' => 'แสดง phpinfo', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => 'ภาษาหลัก', //cpg1.3.0
  'choose_language' => 'กรุณาเลือกภาษา', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'ธีมหลัก', //cpg1.3.0
  'choose_theme' => 'กรุณาเลือกธีม', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File include/init.inc.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File include/picmgmt.inc.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
  'Exclamation' => 'Exclamation',
  'Question' => 'Question',
  'Very Happy' => 'Very Happy',
  'Smile' => 'Smile',
  'Sad' => 'Sad',
  'Surprised' => 'Surprised',
  'Shocked' => 'Shocked',
  'Confused' => 'Confused',
  'Cool' => 'Cool',
  'Laughing' => 'Laughing',
  'Mad' => 'Mad',
  'Razz' => 'Razz',
  'Embarassed' => 'Embarassed',
  'Crying or Very sad' => 'Crying or Very sad',
  'Evil or Very Mad' => 'Evil or Very Mad',
  'Twisted Evil' => 'Twisted Evil',
  'Rolling Eyes' => 'Rolling Eyes',
  'Wink' => 'Wink',
  'Idea' => 'Idea',
  'Arrow' => 'Arrow',
  'Neutral' => 'Neutral',
  'Mr. Green' => 'Mr. Green',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  0 => 'ออกจากผู้ดูแลระบบ...',
  1 => 'เข้าสู่ผู้ดูแลระบบ...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'กรุณาตั้งชื่ออัลบั้ม !', //js-alert
  'confirm_modifs' => 'คุณแน่ใจที่จะเปลี่ยนค่าตามนี้ ?', //js-alert
  'no_change' => 'คุณไม่ได้เปลี่ยนอะไร !', //js-alert
  'new_album' => 'สร้างอัลบั้มใหม่',
  'confirm_delete1' => 'คุณแน่ใจที่จะลบอัลบั้มนี้ ?', //js-alert
  'confirm_delete2' => '\n ภาพและความเห็นจะถูกลบ !', //js-alert
  'select_first' => 'กรุณาเลือกอัลบั้มก่อน', //js-alert
  'alb_mrg' => 'จัดการอัลบั้ม',
  'my_gallery' => '* แกลเลอรี่ของฉัน *',
  'no_category' => '* ไม่มีหมวดหมู่ *',
  'delete' => 'ลบ',
  'new' => 'เพิ่ม',
  'apply_modifs' => 'บันทึกการเปลี่ยนแปลง',
  'select_category' => 'เลือกหมวดหมู่',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'พารามิเตอร์สำหรับ \'%s\' ไม่สามารถส่งคำสั่งได้ !',
  'unknown_cat' => 'หมวดหมู่ที่เลือกไม่มีในฐานข้อมูล',
  'usergal_cat_ro' => 'อัลบั้มภาพสมาชิกไม่สามารถลบได้ !',
  'manage_cat' => 'จัดการหมวดหมู่',
  'confirm_delete' => 'คุณแน่ใจที่จะลบหมวดหมู่นี้ ?', //js-alert
  'category' => 'หมวดหมู่',
  'operations' => 'จัดการ',
  'move_into' => 'ย้ายไป',
  'update_create' => 'ปรับปรุง/สร้าง หมวดหมู่',
  'parent_cat' => 'หมวดหมู่หลัก',
  'cat_title' => 'คำอธิบายหมวดหมู่',
  'cat_thumb' => 'ภาพแบบย่อของหมวดหมู่', //cpg1.3.0
  'cat_desc' => 'รายละเอียดของหมวดหมู่',
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
  'title' => 'กำหนดค่า',
  'restore_cfg' => 'กลับไปใช้ค่าหลักของระบบ',
  'save_cfg' => 'บันทึกค่าใหม่',
  'notes' => 'บันทึกความเห็น',
  'info' => 'คำแนะนำ',
  'upd_success' => 'การตั้งค่า Coppermine ถูกบันทึกแล้ว',
  'restore_success' => 'การตั้งค่าหลักของระบบ Coppermine ถูกเรียกคืนแล้ว',
  'name_a' => 'ชื่อ น้อยไปมาก',
  'name_d' => 'ชื่อ มากไปน้อย',
  'title_a' => 'คำอธิบาย น้อยไปมาก',
  'title_d' => 'คำอธิบาย มากไปน้อย',
  'date_a' => 'วันที่ น้อยไปมาก',
  'date_d' => 'วันที่ มากไปน้อย',
  'th_any' => 'สัดส่วนอัตโนมัติ',
  'th_ht' => 'ส่วนสูง',
  'th_wd' => 'ความกว้าง',
  'label' => 'ชื่อ', //cpg1.3.0
  'item' => 'รายละเอียด', //cpg1.3.0
  'debug_everyone' => 'ทุกคน', //cpg1.3.0
  'debug_admin' => 'เฉพาะผู้ดูแลระบบ', //cpg1.3.0
        );

if (defined('CONFIG_PHP')) $lang_config_data = array(
  'General settings',
  array('Gallery name', 'gallery_name', 0),
  array('Gallery description', 'gallery_description', 0),
  array('Gallery administrator email', 'gallery_admin_email', 0),
  array('Target address for the \'See more pictures\' link in e-cards', 'ecards_more_pic_target', 0),
  array('Gallery is offline', 'offline', 1), //cpg1.3.0
  array('Log ecards', 'log_ecards', 1), //cpg1.3.0
  array('Allow ZIP-download of favorites', 'enable_zipdownload', 1), //cpg1.3.0

  'Language, Themes &amp; Charset settings',
  array('Language', 'lang', 5),
  array('Theme', 'theme', 6),
  array('Display language list', 'language_list', 1), //cpg1.3.0
  array('Display language flags', 'language_flags', 8), //cpg1.3.0
  array('Display &quot;reset&quot; in language selection', 'language_reset', 1), //cpg1.3.0
  array('Display theme list', 'theme_list', 1), //cpg1.3.0
  array('Display &quot;reset&quot; in theme selection', 'theme_reset', 1), //cpg1.3.0
  array('Display FAQ', 'display_faq', 1), //cpg1.3.0
  array('Display bbcode help', 'show_bbcode_help', 1), //cpg1.3.0
  array('Character encoding', 'charset', 4), //cpg1.3.0

  'Album list view',
  array('Width of the main table (pixels or %)', 'main_table_width', 0),
  array('Number of levels of categories to display', 'subcat_level', 0),
  array('Number of albums to display', 'albums_per_page', 0),
  array('Number of columns for the album list', 'album_list_cols', 0),
  array('Size of thumbnails in pixels', 'alb_list_thumb_size', 0),
  array('The content of the main page', 'main_page_layout', 0),
  array('Show first level album thumbnails in categories','first_level',1),

  'Thumbnail view',
  array('Number of columns on thumbnail page', 'thumbcols', 0),
  array('Number of rows on thumbnail page', 'thumbrows', 0),
  array('Maximum number of tabs to display', 'max_tabs', 10), //cpg1.3.0
  array('Display file caption (in addition to title) below the thumbnail', 'caption_in_thumbview', 1), //cpg1.3.0
  array('Display number of views below the thumbnail', 'views_in_thumbview', 1), //cpg1.3.0
  array('Display number of comments below the thumbnail', 'display_comment_count', 1),
  array('Display uploader name below the thumbnail', 'display_uploader', 1), //cpg1.3.0
  array('Default sort order for files', 'default_sort_order', 3), //cpg1.3.0
  array('Minimum number of votes for a file to appear in the \'top-rated\' list', 'min_votes_for_rating', 0), //cpg1.3.0

  'Image view &amp; Comment settings',
  array('Width of the table for file display (pixels or %)', 'picture_table_width', 0), //cpg1.3.0
  array('File information is visible by default', 'display_pic_info', 1), //cpg1.3.0
  array('Filter bad words in comments', 'filter_bad_words', 1),
  array('Allow smiles in comments', 'enable_smilies', 1),
  array('Allow several consecutive comments on one file from the same user (disable flood protection)', 'disable_comment_flood_protect', 1), //cpg1.3.0
  array('Max length for an image description', 'max_img_desc_length', 0),
  array('Max number of characters in a word', 'max_com_wlength', 0),
  array('Max number of lines in a comment', 'max_com_lines', 0),
  array('Maximum length of a comment', 'max_com_size', 0),
  array('Show film strip', 'display_film_strip', 1),
  array('Number of items in film strip', 'max_film_strip_items', 0),
  array('Notify admin of comments by email', 'email_comment_notification', 1), //cpg1.3.0
  array('Slideshow interval in milliseconds (1 second = 1000 milliseconds)', 'slideshow_interval', 0), //cpg1.3.0

  'Files and thumbnails settings', //cpg1.3.0
  array('Quality for JPEG files', 'jpeg_qual', 0),
  array('Max dimension of a thumbnail <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0), //cpg1.3.0
  array('Use dimension ( width or height or Max aspect for thumbnail )<b>**</b>', 'thumb_use', 7),
  array('Create intermediate pictures','make_intermediate',1),
  array('Max width or height of an intermediate picture/video <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0), //cpg1.3.0
  array('Max size for uploaded files (KB)', 'max_upl_size', 0), //cpg1.3.0
  array('Max width or height for uploaded pictures/videos (pixels)', 'max_upl_width_height', 0), //cpg1.3.0

  'Files and thumbnails advanced settings', //cpg1.3.0
  array('Show private album Icon to unlogged user','show_private',1), //cpg1.3.0
  array('Characters forbidden in filenames', 'forbiden_fname_char',0), //cpg1.3.0
  //array('Accepted file extensions for uploaded pictures', 'allowed_file_extensions',0), //cpg1.3.0
  array('Allowed image types', 'allowed_img_types',0), //cpg1.3.0
  array('Allowed movie types', 'allowed_mov_types',0), //cpg1.3.0
  array('Allowed audio types', 'allowed_snd_types',0), //cpg1.3.0
  array('Allowed document types', 'allowed_doc_types',0), //cpg1.3.0
  array('Method for resizing images','thumb_method',2), //cpg1.3.0
  array('Path to ImageMagick \'convert\' utility (example /usr/bin/X11/)', 'impath', 0), //cpg1.3.0
  //array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types',0), //cpg1.3.0
  array('Command line options for ImageMagick', 'im_options', 0), //cpg1.3.0
  array('Read EXIF data in JPEG files', 'read_exif_data', 1), //cpg1.3.0
  array('Read IPTC data in JPEG files', 'read_iptc_data', 1), //cpg1.3.0
  array('The album directory <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0), //cpg1.3.0
  array('The directory for user files <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0), //cpg1.3.0
  array('The prefix for intermediate pictures <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0), //cpg1.3.0
  array('The prefix for thumbnails <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0), //cpg1.3.0
  array('Default mode for directories', 'default_dir_mode', 0), //cpg1.3.0
  array('Default mode for files', 'default_file_mode', 0), //cpg1.3.0

  'User settings',
  array('Allow new user registrations', 'allow_user_registration', 1),
  array('User registration requires email verification', 'reg_requires_valid_email', 1),
  array('Notify admin of user registration by email', 'reg_notify_admin_email', 1), //cpg1.3.0
  array('Allow two users to have the same email address', 'allow_duplicate_emails_addr', 1),
  array('Users can have private albums (Note: if you switch from \'yes\' to \'no\' any current private albums will become public)', 'allow_private_albums', 1), //cpg1.3.0
  array('Notify admin of user upload awaiting approval', 'upl_notify_admin_email', 1), //cpg1.3.0
  array('Allow logged in users to view memberlist', 'allow_memberlist', 1), //cpg1.3.0

  'Custom fields for image description (leave blank if unused)',
  array('Field 1 name', 'user_field1_name', 0),
  array('Field 2 name', 'user_field2_name', 0),
  array('Field 3 name', 'user_field3_name', 0),
  array('Field 4 name', 'user_field4_name', 0),

  'Cookies settings',
  array('Name of the cookie used by the script (when using bbs integration, make sure it differs from the bbs\'s cookie name)', 'cookie_name', 0),
  array('Path of the cookie used by the script', 'cookie_path', 0),

  'Miscellaneous settings',
  array('Enable debug mode', 'debug_mode', 9), //cpg1.3.0
  array('Display notices in debug mode', 'debug_notice', 1), //cpg1.3.0

  '<br /><div align="left"><a name="notice1"></a>(*) This settings mustn\'t be changed if you already have files in your database.<br />
  <a name="notice2"></a>(**) When changing this setting, only the files that are added from that point on are affected, so it is advisable that this setting must not be changed if there are already files in the gallery. You can, however, apply the changes to the existing files with the &quot;<a href="util.php">admin tools</a> (resize pictures)&quot; utility from the admin menu.</div><br />', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'ส่ง ecards', //cpg1.3.0
  'ecard_sender' => 'ผู้ส่ง', //cpg1.3.0
  'ecard_recipient' => 'ผู้รับ', //cpg1.3.0
  'ecard_date' => 'วันที่', //cpg1.3.0
  'ecard_display' => 'แสดง ecard', //cpg1.3.0
  'ecard_name' => 'ชื่อ', //cpg1.3.0
  'ecard_email' => 'Email', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'น้อยไปมาก', //cpg1.3.0
  'ecard_descending' => 'มากไปน้อย', //cpg1.3.0
  'ecard_sorted' => 'เรียง', //cpg1.3.0
  'ecard_by_date' => 'by date', //cpg1.3.0
  'ecard_by_sender_name' => 'โดยผู้ส่ง ชื่อ', //cpg1.3.0
  'ecard_by_sender_email' => 'โดยผู้ส่ง อีเมล์', //cpg1.3.0
  'ecard_by_sender_ip' => 'โดยผู้ส่ง IP address', //cpg1.3.0
  'ecard_by_recipient_name' => 'โดยผู้รับชื่อ', //cpg1.3.0
  'ecard_by_recipient_email' => 'โดยผู้รับ อีเมล์', //cpg1.3.0
  'ecard_number' => 'แสดงเรคคอร์ดที่ %s ถึง %s จาก %s', //cpg1.3.0
  'ecard_goto_page' => 'ไปที่หน้า', //cpg1.3.0
  'ecard_records_per_page' => 'เรคคอร์ดต่อหน้า', //cpg1.3.0
  'check_all' => 'เลือกทั้งหมด', //cpg1.3.0
  'uncheck_all' => 'ไม่เลือก', //cpg1.3.0
  'ecards_delete_selected' => 'ลบ ecards ที่เลือก', //cpg1.3.0
  'ecards_delete_confirm' => 'คุณแน่ใจที่จะลบ? เลือกที่เช็คบ็อกซ์!', //cpg1.3.0
  'ecards_delete_sure' => 'ฉันแน่ใจ', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'คุณต้องพิมพ์ชื่อและความเห็น',
  'com_added' => 'ความเห็นคุณถูกบันทึกแล้ว',
  'alb_need_title' => 'คุณควรจะอธิบายคำแนะนำของอัลบั้ม !',
  'no_udp_needed' => 'ไม่จำเป็นต้องอัพเดต',
  'alb_updated' => 'อัลบั้มอัพเดตแล้ว',
  'unknown_album' => 'ไม่มีอัลบั้มที่คุณเลือก หรือคุณไม่มีสิทธิ์จะส่งไฟล์สู่อัลบั้มนี้',
  'no_pic_uploaded' => 'ไม่มีภาพใดๆได้อัพโหลด !<br /><br />หากคุณได้เลือกภาพที่จะอัพโหลด โปรดตรวจสอบการอัพโหลดจากเซิร์ฟเวอร์...', //cpg1.3.0
  'err_mkdir' => 'ไม่สามารถสร้าง ไดเรคทอรี่ %s !',
  'dest_dir_ro' => 'ไดเรคทอรี่ %s ไม่สามารถเขียนด้วยสคริปต์ได้ !',
  'err_move' => 'ไม่สามารถย้าย %s ไป %s !',
  'err_fsize_too_large' => 'ขนาดภาพของคุณใหญ่เกินไป (ขนาดสูงสุดที่อนุญาตคือ %s x %s) !', //cpg1.3.0
  'err_imgsize_too_large' => 'ขนาดภาพของคุณใหญ่เกินไป (ขนาดสูงสุดที่อนุญาตคือ %s KB) !',
  'err_invalid_img' => 'ภาพที่คุณอัพโหลดไม่ใช่ภาพแบบที่อนุญาต !',
  'allowed_img_types' => 'คุณยังอัพโหลดได้ %s ภาพ.',
  'err_insert_pic' => 'ภาพของคุณ \'%s\' ไม่สามารถส่งเข้าอัลบั้มได้ ', //cpg1.3.0
  'upload_success' => 'อัพโหลดภาพแล้ว<br /><br />ภาพจะแสดงหลังจากตรวจสอบโดยผู้ดูแลระบบ', //cpg1.3.0
  'notify_admin_email_subject' => '%s - ภาพส่งเข้ามา', //cpg1.3.0
  'notify_admin_email_body' => 'รูปที่อัพโหลดเข้ามา %s ซึ่งรอการตรวจสอบ. มีผู้เข้าชม %s', //cpg1.3.0
  'info' => 'รายละเอียด',
  'com_added' => 'ความเห็นถูกบันทึก',
  'alb_updated' => 'อัลบั้มถูกปรับปรุง',
  'err_comment_empty' => 'คุณไม่ได้พิมพ์ความเห็น !',
  'err_invalid_fext' => 'ภาพแบบนี้เท่านั้นที่อนุญาต : <br /><br />%s.',
  'no_flood' => 'คุณได้แสดงความเห็นล่าสุดไปแล้ว<br /><br />คุณแก้ไขความเห็นของคุณได้ถ้าต้องการ', //cpg1.3.0
  'redirect_msg' => 'เรากำลังพาคุณไปที่<br /><br /><br />คลิ๊ก \'CONTINUE\' หากระบบไม่ส่งไปโดยอัตโนมัติ',
  'upl_success' => 'เพิ่มภาพสำเร็จ', //cpg1.3.0
  'email_comment_subject' => 'ความเห็นที่โพสต์ใน Coppermine Photo Gallery', //cpg1.3.0
  'email_comment_body' => 'มีผู้แสดงความเห็นในแกลเลอรี่ของคุณ ชมได้ที่นี่', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'คำอธิบาย',
  'fs_pic' => 'ภาพขยาย',
  'del_success' => 'ลบแล้ว',
  'ns_pic' => 'ภาพขนาดปกติ',
  'err_del' => 'ไม่สามารถลบได้',
  'thumb_pic' => 'ภาพย่อ',
  'comment' => 'ความเห็น',
  'im_in_alb' => 'ภาพในอัลบั้ม',
  'alb_del_success' => 'อัลบั้ม \'%s\' ลบ',
  'alb_mgr' => 'จัดการอัลบั้ม',
  'err_invalid_data' => 'ไม่สามารถรับข้อมูลจาก \'%s\'',
  'create_alb' => 'สร้างอัลบั้ม \'%s\'',
  'update_alb' => 'ปรับปรุงอัลบั้ม \'%s\' และคำอธิบาย \'%s\' และจัดเรียง \'%s\'',
  'del_pic' => 'ลบภาพ', //cpg1.3.0
  'del_alb' => 'ลบอัลบั้ม',
  'del_user' => 'ลบผู้ใช้',
  'err_unknown_user' => 'ไม่มีชื่อผู้ใช้ที่คุณเลือก',
  'comment_deleted' => 'ลบความเห็นแล้ว',
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
  'confirm_del' => 'คุณแน่ใจที่จะลบภาพนี้ ? \\n ความเห็นจะถููกลบไปด้วย', //js-alert //cpg1.3.0
  'del_pic' => 'ลบภาพนี้', //cpg1.3.0
  'size' => '%s x %s pixels',
  'views' => '%s ครั้ง',
  'slideshow' => 'สไลด์',
  'stop_slideshow' => 'หยุดแสดงสไลด์',
  'view_fs' => 'ดูภาพขยาย',
  'edit_pic' => 'แก้ไขรายละเอียด', //cpg1.3.0
  'crop_pic' => 'Crop and Rotate', //cpg1.3.0
);

$lang_picinfo = array(
  'title' =>'รายละเอียดของภาพ', //cpg1.3.0
  'Filename' => 'ชื่อภาพ',
  'Album name' => 'ชื่ออัลบั้ม',
  'Rating' => 'คะแนน (%s โหวต)',
  'Keywords' => 'คำค้น',
  'File Size' => 'ขนาดภาพ',
  'Dimensions' => 'ขนาดภาพ',
  'Displayed' => 'แสดง',
  'Camera' => 'กล้อง',
  'Date taken' => 'วันที่ถ่ายภาพ',
  'ISO'=>'ISO',
  'Aperture' => 'Aperture',
  'Exposure time' => 'Exposure time',
  'Focal length' => 'Focal length',
  'Comment' => 'ความเห็น',
  'addFav'=>'เพิ่มในส่วนที่ชอบ', //cpg1.3.0
  'addFavPhrase'=>'ส่วนที่ชอบ', //cpg1.3.0
  'remFav'=>'ลบจากส่วนที่ชอบ', //cpg1.3.0
  'iptcTitle'=>'IPTC Title', //cpg1.3.0
  'iptcCopyright'=>'IPTC Copyright', //cpg1.3.0
  'iptcKeywords'=>'IPTC Keywords', //cpg1.3.0
  'iptcCategory'=>'IPTC Category', //cpg1.3.0
  'iptcSubCategories'=>'IPTC Sub Categories', //cpg1.3.0
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'แก้ความเห็นนี้',
  'confirm_delete' => 'คุณแน่ใจที่จะลบความเห็นนี้ ?', //js-alert
  'add_your_comment' => 'เพิ่มความเห็น',
  'name'=>'ชื่อ',
  'comment'=>'ความเห็น',
  'your_name' => 'someone',
);

$lang_fullsize_popup = array(
  'click_to_close' => 'คลิ๊กที่ภาพเพื่อออก',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'ส่ง-card',
  'invalid_email' => '<b>คำเตือน</b> : รูปแบบของอีเมล์ไม่ถูกต้อง !',
  'ecard_title' => 'e-card จาก %s ถึงคุณ',
  'error_not_image' => 'ภาพเท่านั้นที่จะส่งเป็น e-card ได้', //cpg1.3.0
  'view_ecard' => 'หาก e-card ไม่แสดง, กรุณาคลิ๊กที่นี่',
  'view_more_pics' => 'คลิี๊กที่นี่เพื่อดูภาพเพิ่มเติม !',
  'send_success' => 'ecard ถูกส่งแล้ว',
  'send_failed' => 'เซิร์ฟเวอร์ไม่สามารถส่ง e-card...',
  'from' => 'จาก',
  'your_name' => 'ชื่อคุณ',
  'your_email' => 'อีเมล์ของคุณ',
  'to' => 'To',
  'rcpt_name' => 'ชื่อผู้รับ',
  'rcpt_email' => 'อีเมล์ผู้รับ',
  'greetings' => 'คำอวยพร',
  'message' => 'ข้อความ',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'รายละเอียดภาพ', //cpg1.3.0
  'album' => 'อัลบั้ม',
  'title' => 'คำอธิบาย',
  'desc' => 'รายละเอียด',
  'keywords' => 'คำค้น',
  'pic_info_str' => '%s &times; %s - %s KB - %s ครั้ง - %s โหวต',
  'approve' => 'ตรวจสอบภาพ', //cpg1.3.0
  'postpone_app' => 'อยู่ระหว่างตรวจสอบ',
  'del_pic' => 'ลบภาพ', //cpg1.3.0
  'read_exif' => 'อ่านค่า EXIF อีกครั้ง', //cpg1.3.0
  'reset_view_count' => 'ตั้งค่าตัวนับใหม่',
  'reset_votes' => 'ตั้งค่าโหวตใหม่',
  'del_comm' => 'ลบความเห็น',
  'upl_approval' => 'รอการตรวจสอบ',
  'edit_pics' => 'แก้ไขภาพ', //cpg1.3.0
  'see_next' => 'แสดงภาพต่อไป', //cpg1.3.0
  'see_prev' => 'แสดงภาพก่อนหน้า', //cpg1.3.0
  'n_pic' => '%s ภาพ', //cpg1.3.0
  'n_of_pic_to_disp' => 'จำนวนที่แสดง', //cpg1.3.0
  'apply' => 'บันทึกค่า', //cpg1.3.0
  'crop_title' => 'Coppermine Picture Editor', //cpg1.3.0
  'preview' => 'แสดงตัวอย่าง', //cpg1.3.0
  'save' => 'บันทึก', //cpg1.3.0
  'save_thumb' =>'บันทึกเป็นภาพย่อ', //cpg1.3.0
  'sel_on_img' =>'สามารถเลือกได้เฉพาะบนภาพเท่านั้น!', //js-alert //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'คำถามที่ถามบ่อย', //cpg1.3.0
  'toc' => 'เนื้อหา', //cpg1.3.0
  'question' => 'คำถาม: ', //cpg1.3.0
  'answer' => 'คำตอบ: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'General FAQ', //cpg1.3.0
  array('ทำไมต้องสมัครสมาชิก?', 'Registration may or may not be required by the administrator. Registration gives a member additional features such as uploading, having a favorite list, rating pictures and posting comments etc.', 'allow_user_registration', '1'), //cpg1.3.0
  array('สมัครสมาชิกอย่างไร?', 'Go to &quot;Register&quot; and fill out the required fields (and the optional ones if you want to).<br />If the Administrator has Email Activation enabled ,then after submitting your information you should recieve an email message at the address that you have submitted while registering, giving you instructions on how to activate your membership. Your membership must be activated in order for you to login.', 'allow_user_registration', '1'), //cpg1.3.0
  array('เข้าระบบอย่างไร?', 'Go to &quot;Login&quot;, submit your username and password and check &quot;Remember Me&quot; so you will be logged in on the site if you should leave it.<br /><b>IMPORTANT:Cookies must be enabled and the cookie from this site must not be deleted in order to use &quot;Remember Me&quot;.</b>', 'offline', 0), //cpg1.3.0
  array('ทำไมฉันเข้าระบบไม่ได้?', 'Did you register and click the link that was sent to you via email?. The link will activate your account. For other login problems contact the site administrator.', 'offline', 0), //cpg1.3.0
  array('ฉันลืม password?', 'If this site has a &quot;Forgot password&quot; link then use it. Other than that contact the site administrator for a new password.', 'offline', 0), //cpg1.3.0
  //array('What if I changed my email address?', 'Just simply login and change your email address through &quot;Profile&quot;', 'offline', 0), //cpg1.3.0
  array('ฉันจะเก็บภาพเข้าส่วน &quot;ภาพที่ฉันชอบ&quot; ได้อย่างไร?', 'Click on a picture and click on the &quot;picture info&quot; link (<img src="images/info.gif" width="16" height="16" border="0" alt="Picture information" />); scroll down to the picture information set and click &quot;Add to fav&quot;.<br />The administrator may have the &quot;picture information&quot; on by default.<br />IMPORTANT:Cookies must be enabled and the cookie from this site must not be deleted.', 'offline', 0), //cpg1.3.0
  array('ฉันจะให้คะแนนอย่างไร?', 'Click on a thumbnail and go to the bottom and choose a rating.', 'offline', 0), //cpg1.3.0
  array('ฉันจะแสดงความเห็นอย่างไร?', 'Click on a thumbnail and go to the bottom and post a comment.', 'offline', 0), //cpg1.3.0
array('ฉันจะส่งภาพขึ้นอัลบั้มอย่างไร?', 'Go to &quot;Upload&quot;and select the album that you want to upload to, click &quot;Browse&quot; and find the file to upload and click &quot;open&quot; (add a title and description if you want to) and click &quot;Submit&quot;', 'allow_private_albums', 0), //cpg1.3.0
  array('ภาพของฉันจะอัพโหลดไปที่ไหน?', 'You will be able to upload a file to one of your albums in &quot;My Gallery&quot;. The Administrator may also allow you to upload a file to one or more of the albums in the Main Gallery.', 'allow_private_albums', 0), //cpg1.3.0
  array('ขนาดภาพที่ฉันได้รับอนุญาตให้อัพโหลด?', 'The size and type (jpg, png, etc.) is up to the administrator.', 'offline', 0), //cpg1.3.0
  array('อะไรคือ &quot;แกลเลอรี่ของฉัน&quot;?', '&quot;My Gallery&quot; is a personal gallery that the user can upload to and manage.', 'allow_private_albums', 0), //cpg1.3.0
  array('ทำไงฉันจะสร้าง, เปลี่ยนชื่อ หรือลบ อัลบั้มจาก &quot;My Gallery&quot;?', 'You should already be in &quot;Admin-Mode&quot;<br />Go to &quot;Create/Order My Albums&quot;and click &quot;New&quot;. Change &quot;New Album&quot; to your desired name.<br />You can also rename any of the albums in your gallery.<br />Click &quot;Apply Modifications&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('ทำไงฉันถึงจะเปลี่ยนค่าผู้เข้าชมอัลบั้มของฉัน?', 'You should already be in &quot;Admin Mode&quot;<br />Go to &quot;Modify My Albums. On the &quot;Update Album&quot; bar, select the album that you want to modify.<br />Here, you can change the name, description, thumbnail picture, restrict viewing and comment/rating permissions.<br />Click &quot;Update Album&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('ทำไงถึงจะดู แกลเลอรี่ของผู้ใช้คนอื่นได้?', 'Go to &quot;Album List&quot; and select &quot;User Galleries&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('อะไรคือคุ๊กกี้ ขนมเหรอ?', 'Cookies are a plain text piece of data that is sent from a website and is put on to your computer.<br />Cookies usually allow a user to leave and return to the site without having to login again and other various chores.', 'offline', 0), //cpg1.3.0
  array('ฉันอยากได้โปรแกรมนี้สำหรับเงปของฉันบ้าง?', 'Coppermine is a free Multimedia Gallery, released under GNU GPL. It is full of features and has been ported to various platforms. Visit the <a href="http://coppermine.sf.net/">Coppermine Home Page</a> to find out more or download it.', 'offline', 0), //cpg1.3.0

  'Navigating the Site', //cpg1.3.0
  array('What\'s &quot;Album List&quot;?', 'This will show you the entire category you are currently in, with a link to each album. If you are not in a category, it will show you the entire gallery with a link to each category. Thumbnails may be a link to the category.', 'offline', 0), //cpg1.3.0
  array('What\'s &quot;My Gallery&quot;?', 'This feature lets a user create their own gallery and add,delete or modify albums as well as upload to them.', 'allow_private_albums', 0), //cpg1.3.0
  array('What\'s the difference between &quot;Admin Mode&quot; and &quot;User Mode&quot;?', 'This feature, when in admin-mode, allows a user to modify their gallery (as well as others if allowed by the administrator).', 'allow_private_albums', 0), //cpg1.3.0
  array('What\'s &quot;Upload Picture&quot;?', 'This feature allows a user to upload a file (size and type is set by the site administrator) to a gallery selected by either you or the administrator.', 'allow_private_albums', 0), //cpg1.3.0
  array('What\'s &quot;Last Uploads&quot;?', 'This feature shows the last uploads to the site.', 'offline', 0), //cpg1.3.0
  array('What\'s &quot;Last Comments&quot;?', 'This feature shows the last comments along with the files posted by users.', 'offline', 0), //cpg1.3.0
  array('What\'s &quot;Most Viewed&quot;?', 'This feature shows the most viewed files by all users (whether logged in or not).', 'offline', 0), //cpg1.3.0
  array('What\'s &quot;Top Rated&quot;?', 'This feature shows the top rated files rated by the users, showing the average rating (e.g: five users each gave a <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: the file would have an average rating of <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;Five users rated the file from 1 to 5 (1,2,3,4,5) would result in an average <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />The ratings go from <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (best) to <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (worst).', 'offline', 0), //cpg1.3.0
  array('What\'s &quot;My Favorites&quot;?', 'This feature will let a user store a favorite file in the cookie that was sent to your computer.', 'offline', 0), //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'ระบบเตือนความจำรหัสผ่าน', //cpg1.3.0
  'err_already_logged_in' => 'คุณเข้าระบบอยู่ !', //cpg1.3.0
  'enter_username_email' => 'กรุณาใส่ชื่อผู้ใช้และอีเมล์ของคุณ', //cpg1.3.0
  'submit' => 'go', //cpg1.3.0
  'failed_sending_email' => 'อีเมล์เตือนความจำรหัสผ่าน ไม่สามารถส่งได้ !', //cpg1.3.0
  'email_sent' => 'ระบบได้ส่งอีเมล์ username และ password ไปยัง %s', //cpg1.3.0
  'err_unk_user' => 'ไม่มีชื่อผู้ใช้นี้!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - ระบบเตือนความจำรหัสผ่าน', //cpg1.3.0
  'passwd_reminder_body' => 'คุณได้ขอให้ระบบเตือนความจำรหัสผ่านสำหรับชื่อผู้ใช้:
Username: %s
Password: %s
Click %s to log in.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'ชื่อกลุ่ม',
  'disk_quota' => 'ขนาดดิสค์ที่อนุญาต',
  'can_rate' => 'สามารถให้คะแนนภาพ', //cpg1.3.0
  'can_send_ecards' => 'สามารถส่ง ecards',
  'can_post_com' => 'สามารถแสดงความเห็น',
  'can_upload' => 'สามารถอัพโหลดภาพ', //cpg1.3.0
  'can_have_gallery' => 'สามารถมีีแกลเลอรี่ส่วนตัว',
  'apply' => 'บันทึกค่า',
  'create_new_group' => 'สร้างกลุ่มใหม่',
  'del_groups' => 'ลบกลุ่มที่เลือก',
  'confirm_del' => 'คำเตือน .. เมื่อคุณลบกลุ่ม ผู้ใช้ในกลุ่มนั้นจะเปลี่ยนไปสู่ \'Registered\' group !\n\n ดำเนินการต่อหรือไม่ ?', //js-alert //cpg1.3.0
  'title' => 'จัดการกลุ่มผู้ใช้',
  'approval_1' => 'สามารถอัพโหลดโดยผู้ใช้ทั่วไป (1)',
  'approval_2' => 'สามารถอัพโหลดไดยโดยส่วนตัว (2)',
  'upload_form_config' => 'อัพโหลตจากค่ากำหนด', //cpg1.3.0
  'upload_form_config_values' => array( 'อัพโหลตทีละภาพ', 'อัพโหลตทีละหลายๆภาพ', 'URI เท่านั้น', 'ZIP เท่านั้น', 'File-URI', 'File-ZIP', 'URI-ZIP', 'File-URI-ZIP'), //cpg1.3.0
  'custom_user_upload'=>'ผู้ใช้สามารถกำหนดจำนวนที่อัพโหลด?', //cpg1.3.0
  'num_file_upload'=>'จำนวนมากสุดของภาพที่อัพโหลด', //cpg1.3.0
  'num_URI_upload'=>'จำนวนมากสุดของ URI upload boxes', //cpg1.3.0
  'note1' => '<b>(1)</b> อัพโหลดสู่อัลบั้มสาธารณะต้องรอการตรวจสอบ',
  'note2' => '<b>(2)</b> อัพโหลดสู่อัลบั้มผู้ใช้ต้องรอการตรวจสอบ',
  'notes' => 'หมายเหตุ',
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'ยินดีต้อนรับ !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'คุณแน่ใจที่จะลบอัลบั้มนี้ ? \\n ภาพและความเห็นจะถูกลบไปด้วย', //js-alert //cpg1.3.0
  'delete' => 'ลบ',
  'modify' => 'กำหนดค่า',
  'edit_pics' => 'แก้ไข', //cpg1.3.0
);

$lang_list_categories = array(
  'home' => 'หน้าหลัก',
  'stat1' => '<b>[pictures]</b> ภาพใน <b>[albums]</b> อัลบั้ม และ <b>[cat]</b> หมวดหมู่ กับ <b>[comments]</b> ความเห็น มีผู้เข้าชม <b>[views]</b> ครั้ง', //cpg1.3.0
  'stat2' => '<b>[pictures]</b> ภาพใน <b>[albums]</b> อัลบั้มที่แสดง <b>[views]</b> ครั้ง', //cpg1.3.0
  'xx_s_gallery' => '%s\'s แกลเลอรี่',
  'stat3' => '<b>[pictures]</b> ภาพใน <b>[albums]</b> อัลบั้ม และ <b>[comments]</b> ความเห็น <b>[views]</b> ครั้ง', //cpg1.3.0
);

$lang_list_users = array(
  'user_list' => 'รายชื่อผู้ใช้',
  'no_user_gal' => 'ไม่มีแกลเลอรี่ผู้ใช้',
  'n_albums' => '%s อัลบั้ม',
  'n_pics' => '%s ภาพ', //cpg1.3.0
);

$lang_list_albums = array(
  'n_pictures' => '%s ภาพ', //cpg1.3.0
  'last_added' => ', สุดท้ายเพิ่มเมื่อ %s',
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'เข้าระบบ',
  'enter_login_pswd' => 'กรอกชื่อผู้ใช้และรหัสผ่าน',
  'username' => 'ชื่อผู้ใช้',
  'password' => 'รหัสผ่าน',
  'remember_me' => 'จำค่านี้ไว้',
  'welcome' => 'ยินดีต้อนรับ %s ...',
  'err_login' => '*** ไม่สามารถให้คุณเข้าระบบได้ - ลองใหม่อีกครั้ง ***',
  'err_already_logged_in' => 'คุณเข้าระบบแล้ว !',
  'forgot_password_link' => 'ฉันลืมรหัสผ่าน', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'ออกจากระบบ',
  'bye' => 'บ๊ายบาย  แล้วมาอีกนะ %s ...',
  'err_not_loged_in' => 'คุณไม่ได้เข้าระบบ !',
);

// ------------------------------------------------------------------------- //
// File phpinfo.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP info', //cpg1.3.0
  'explanation' => 'This is the output generated by the PHP-function <a href="http://www.php.net/phpinfo">phpinfo()</a>, displayed within Copermine (trimming the output at the right corner).', //cpg1.3.0
  'no_link' => 'Having others see your phpinfo can be a security risk, that\'s why this page is only visible when you\'re logged in as admin. You can not post a link to this page for others, they will be denied access.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'ปรับปรุงอัลบั้ม %s',
  'general_settings' => 'ค่าทั่วไป',
  'alb_title' => 'คำอธิบาย',
  'alb_cat' => 'หมวดหมู่',
  'alb_desc' => 'รายละเอียด',
  'alb_thumb' => 'ภาพย่อ',
  'alb_perm' => 'Permissions สำหรับอัลบั้ม',
  'can_view' => 'อัลบั้มสามารถแสดงโดย',
  'can_upload' => 'ผู้มาเยือนสามารถส่งภาพ',
  'can_post_comments' => 'ผู้มาเยือนสามารถแสดงความเห็น',
  'can_rate' => 'ผู้มาเยือนสามารถให้คะแนน',
  'user_gal' => 'อัลบั้มส่วนตัว',
  'no_cat' => '* ไม่มีหมวดหมู่ *',
  'alb_empty' => 'ไม่มีอัลบั้ม',
  'last_uploaded' => 'อัพโหลดล่าสุด',
  'public_alb' => 'ทุกคน (อัลบั้มสาธารณะ)',
  'me_only' => 'เฉพาะฉันเท่านั้น',
  'owner_only' => 'เจ้าของอัลบั้ม (%s) เท่านั้น',
  'groupp_only' => 'สมาชิกของ \'%s\' ',
  'err_no_alb_to_modify' => 'ไม่มีอัลบั้มถูกปรับปรุงในฐานข้อมูล',
  'update' => 'ปรับปรุงอัลบั้ม', //cpg1.3.0
  'notice1' => '(*) ขึ้นอยู่กับ %sgroups%s settings', //cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'คุณให้คะแนนภาพนี้แล้ว', //cpg1.3.0
  'rate_ok' => 'คะแนนบันทึกแล้ว',
  'forbidden' => 'คุณไม่สามารถให้คะแนนภาพของตัวเอง', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
While the administrators of {SITE_NAME} will attempt to remove or edit any generally objectionable material as quickly as possible, it is impossible to review every post. Therefore you acknowledge that all posts made to this site express the views and opinions of the author and not the administrators or webmaster (except for posts by these people) and hence will not be held liable.<br />
<br />
You agree not to post any abusive, obscene, vulgar, slanderous, hateful, threatening, sexually-orientated or any other material that may violate any applicable laws. You agree that the webmaster, administrator and moderators of {SITE_NAME} have the right to remove or edit any content at any time should they see fit. As a user you agree to any information you have entered above being stored in a database. While this information will not be disclosed to any third party without your consent the webmaster and administrator cannot be held responsible for any hacking attempt that may lead to the data being compromised.<br />
<br />
This site uses cookies to store information on your local computer. These cookies serve only to improve your viewing pleasure. The email address is used only for confirming your registration details and password.<br />
<br />
By clicking 'I agree' below you agree to be bound by these conditions.
EOT;

$lang_register_php = array(
  'page_title' => 'ลงทะเบียนผู้ใช้',
  'term_cond' => 'ข้อตกลง',
  'i_agree' => 'ฉันเข้าใจ',
  'submit' => 'ตกลง',
  'err_user_exists' => 'มีคนใช้ username นี้แล้ว, คุณต้องใช้ชื่ออื่น',
  'err_password_mismatch' => 'รหัสผ่านทั้ง 2 ครั้งไม่ตรงกัน, กรุณากรอกใหม่',
  'err_uname_short' => 'ชื่อผู้ใช้ต้องมีอย่างน้อย 2 ตัวอักษร',
  'err_password_short' => 'รหัสผ่านต้องมีอย่างน้อย 2 ตัวอักษร',
  'err_uname_pass_diff' => 'ชื่อผู้ใช้และรหัสผ่านไม่ควรเหมือนกันเพื่อความปลอดภัย',
  'err_invalid_email' => 'รูปแบบของอีเมล์ไม่ถูกต้อง',
  'err_duplicate_email' => 'มีผู้ใช้ท่านอื่นลงทะเบียนด้วยอีเมล์นี้แล้ว',
  'enter_info' => 'กรอกรายละเอียดการลงทะเบียน',
  'required_info' => 'ต้องกรอกค่า',
  'optional_info' => 'รายละเอียดเพิ่มเติม',
  'username' => 'ชื่อผู้ใช้',
  'password' => 'รหัสผ่าน',
  'password_again' => 'กรุณากรอกรหัสผ่านอีกครั้ง',
  'email' => 'อีเมล์',
  'location' => 'หลักแหล่ง',
  'interests' => 'สิ่งที่ชอบ',
  'website' => 'เวปไซต์',
  'occupation' => 'อาชีพ',
  'error' => 'เกิดความผิดพลาด',
  'confirm_email_subject' => '%s - ยืนยันการลงทะเบียน',
  'information' => 'รายละเอียด',
  'failed_sending_email' => 'อีเมล์ยืนยันการลงทะเบียนไม่สามารถส่งได้ !',
  'thank_you' => 'ขอบคุณที่ลงทะเบียน<br /><br />ระบบได้ส่งอีเมล์สำหรับเริ่มการใช้งานไปยังอีเมล์ที่คุณได้ลงทะเบียนไว้แล้ว...',
  'acct_created' => 'ระบบบันทึกข้อมูลของคุณเรียบร้อยแล้ว คุณสามารถเข้าระบบได้โดย ล๊อกอิน ด้วย ชื่อผู้ใช้ และ รหัสผ่านของคุณ',
  'acct_active' => 'บัญชีผู้ใช้ของคุณทำงานแล้ว คุณสามารถเข้าระบบได้โดย ล๊อกอิน ด้วย ชื่อผู้ใช้ และ รหัสผ่านของคุณ',
  'acct_already_act' => 'บัญชีผู้ใช้ของคุณทำงาน !',
  'acct_act_failed' => 'ชื่อผู้ใช้นี้ไม่สามารถใช้งานได้ !',
  'err_unk_user' => 'ไม่มีชื่อผู้ใช้นี้ !',
  'x_s_profile' => '%s\'s ข้อมูลส่วนตัว',
  'group' => 'กลุ่ม',
  'reg_date' => 'เข้าร่วม',
  'disk_usage' => 'ใช้พื้นที่',
  'change_pass' => 'เปลี่ยนรหัสผ่าน',
  'current_pass' => 'รหัสผ่านปัจจุบัน',
  'new_pass' => 'รหัสผ่านใหม่',
  'new_pass_again' => 'รหัสผ่านใหม่อีกครั้ง',
  'err_curr_pass' => 'รัหผ่านปัจจุบันไม่ถูกต้อง',
  'apply_modif' => 'ยอมรับค่าที่เปลี่ยนแปลง',
  'change_pass' => 'เปลี่ยนรหัสผ่านของฉัน',
  'update_success' => 'ข้อมุลส่วนตัวของคุณถูกเปลี่ยนแปลงแล้ว',
  'pass_chg_success' => 'รหัสผ่านของคุณถูกเปลี่ยนแปลงแล้ว',
  'pass_chg_error' => 'รหัสผ่านของคุณไม่เปลี่ยนแปลง',
  'notify_admin_email_subject' => '%s - แจ้งผู้ดูแลระบบ', //cpg1.3.0
  'notify_admin_email_body' => 'ผู้ใช้ใหม่ ชื่อ "%s" ลงทะเบียนเข้าใช้แกลเลอรี่ของคุณ', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
Thank you for registering at {SITE_NAME}

Your username is : "{USER_NAME}"
Your password is : "{PASSWORD}"

In order to activate your account, you need to click on the link below
or copy and paste it in your web browser.

{ACT_LINK}

Regards,

The management of {SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'แสดงความเห็น',
  'no_comment' => 'ไม่มีความเห็นที่จะแสดง',
  'n_comm_del' => '%s ความเห็นถูกลบ',
  'n_comm_disp' => 'จำนวนความเห็นที่แสดง',
  'see_prev' => 'ก่อนหน้า',
  'see_next' => 'ถัดไป',
  'del_comm' => 'ลบความเห็นนี้',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
  0 => 'ค้นหา',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'ค้นหาภาพใหม่', //cpg1.3.0
  'select_dir' => 'เลือกแฟ้ม',
  'select_dir_msg' => 'คำสั่งนี้ช่วยให้คุณเพิ่มไฟล์จำนวนมากๆ เข้าเซิร์ฟเวอร์ฝ่าน FTP.<br /><br />เลือกไดเรคทอรี่ที่จะอัพโหลดไฟล์', //cpg1.3.0
  'no_pic_to_add' => 'ไม่มีภาพถูกเพิ่ม', //cpg1.3.0
  'need_one_album' => 'คุณต้องมีอัลบั้มก่อนจะใช้คำสั่งนี้',
  'warning' => 'คำเตือน',
  'change_perm' => 'สคริปต์ ไม่สามารถใช้กับ ไดเรคทอรี่นี้ คุณต้องเปลี่ยนโหมดเป็น  755 หรือ 777 ก่อน !', //cpg1.3.0
  'target_album' => '<b>เพิ่มไฟล์จาก &quot;</b>%s<b>&quot; ไปสู่ </b>%s', //cpg1.3.0
  'folder' => 'แฟ้ม',
  'image' => 'ภาพ',
  'album' => 'อัลบั้ม',
  'result' => 'ผลลัพธ์',
  'dir_ro' => 'ไม่สามารถบันทึกได้ ',
  'dir_cant_read' => 'ไม่สามารถอ่านได้. ',
  'insert' => 'เพิ่มภาพสู่อัลบั้ม', //cpg1.3.0
  'list_new_pic' => 'รายชื่อภาพมาใหม่', //cpg1.3.0
  'insert_selected' => 'เพิ่มภาพที่เลือก', //cpg1.3.0
  'no_pic_found' => 'ไม่มีภาพมาใหม่', //cpg1.3.0
  'be_patient' => 'โปรดรอสักครู่, กำลังทำงาน....', //cpg1.3.0
  'no_album' => 'ไม่มีอัลบั้มถูกเลือก',  //cpg1.3.0
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : เพิ่มสำเร็จ'.
                          '<li><b>DP</b> : ข้อมูลซ้ำ'.
                          '<li><b>PB</b> : ไม่สามารถเพิ่มได้, โปรดตรวจสอบค่าของระบบและการอนุญาตของเซิร์ฟเวอร์'.
                          '<li><b>NA</b> : คุณไม่ได้เลือกอัลบั้มที่จะส่งภาพไป, เลือก \'<a href="javascript:history.back(1)">ย้อนกลับ</a>\' และเลือกอัลบั้ม หากคณยังไม่มีอัลบั้ม <a href="albmgr.php">ให้สร้างก่อน</a></li>'.
                          '<li>หาก OK, DP, PB \'signs\' ไม่แสดง ให้คลิ๊ก ภาพที่ผิดพลาด เพื่อดูข้อความจากเซิร์ฟเวอร์'.
                          '<li>เวลาเกินที่กำหนด, คลิ๊กที่ reload'.
                          '</ul>', //cpg1.3.0
  'select_album' => 'เลือกอัลบั้ม', //cpg1.3.0
  'check_all' => 'เลือกทั้งหมด', //cpg1.3.0
  'uncheck_all' => 'ยกเลิกการเลือก', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'ห้ามผู้ใช้',
  'user_name' => 'ชื่อ',
  'ip_address' => 'IP Address',
  'expiry' => 'หมดอายุ (เว้นว่างคือไม่มีกำหนด)',
  'edit_ban' => 'บันทึกค่า',
  'delete_ban' => 'ลบ',
  'add_new' => 'เพิ่มชื่อห้ามใช้',
  'add_ban' => 'เพิ่ม',
  'error_user' => 'ไม่พบผู้ใช้นี้', //cpg1.3.0
  'error_specify' => 'คุณต้องกำหนดทั้งชื่อและ IP address', //cpg1.3.0
  'error_ban_id' => 'ไม่มี ban ID!', //cpg1.3.0
  'error_admin_ban' => 'คุณจะห้ามตัวเองเข้าใช้??', //cpg1.3.0
  'error_server_ban' => 'คุณจะห้ามเซิร์ฟเวอร์ของคุณ ...คิกคิก..เอางั้นเลยเหรอ...', //cpg1.3.0
  'error_ip_forbidden' => 'คุณไม่สามารถห้าม IP - เพราะมันไม่มี!', //cpg1.3.0
  'lookup_ip' => 'ตรวจสอบ IP address', //cpg1.3.0
  'submit' => 'ไป!', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'อัพโหลด', //cpg1.3.0
  'custom_title' => 'เปลี่ยนค่ากำหนด', //cpg1.3.0
  'cust_instr_1' => 'คุณต้องเลือกหมายเลขของกล่องอัพโหลด และต้องไม่เลือกมากกว่าจำนวนที่กำหนดไว้.', //cpg1.3.0
  'cust_instr_2' => 'กล่องอัพโหลดที่ถูกเลือก', //cpg1.3.0
  'cust_instr_3' => 'ไฟล์อัพโหลด: %s', //cpg1.3.0
  'cust_instr_4' => 'URI/URL upload boxes: %s', //cpg1.3.0
  'cust_instr_5' => 'URI/URL upload boxes:', //cpg1.3.0
  'cust_instr_6' => 'ไฟล์อัพโหลด:', //cpg1.3.0
  'cust_instr_7' => 'กรอกจำนวน ในแต่ละแบบของกล่องอัพโหลด จากนั้นคลิีก ต่อไป ', //cpg1.3.0
  'reg_instr_1' => 'ไม่มีการกระทำใดๆเกิดขึ้น.', //cpg1.3.0
  'reg_instr_2' => 'คุณสมารถอัพโหลดไฟล์ ด้วยกล่องอัพโหลดข้างล่างนี้. ขนาดของแต่ละไฟล์ ต้องไม่เกิน %s KB  ไฟล์ ZIP ต้องอัพโหลดใน  \'File Upload\' หรือ \'URI/URL Upload\' .', //cpg1.3.0
  'reg_instr_3' =>  'ถ้าต้องการยบีบไฟล์หรือคลายออก, คุณต้องใช้กล่องอัพโหลด \'Decompressive ZIP Upload\' ', //cpg1.3.0
  'reg_instr_4' => 'เมื่อใช้ส่วนอัพโหลด URI/URL , ต้องเลือก พาท ของไฟล์ด้วย (ดตัวอย่าง) http://www.mysite.com/images/example.jpg', //cpg1.3.0
  'reg_instr_5' => 'เมื่อกรอกเสร็จ คลิ๊กที่ ต่อไป ', //cpg1.3.0
  'reg_instr_6' => 'Decompressive ZIP Uploads:', //cpg1.3.0
  'reg_instr_7' => 'File Uploads:', //cpg1.3.0
  'reg_instr_8' => 'URI/URL Uploads:', //cpg1.3.0
  'error_report' => 'รายงานความผิดพลาด', //cpg1.3.0
  'error_instr' => 'เกิดความผิดพลาดขึ้นดังต่อไปนี้:', //cpg1.3.0
  'file_name_url' => 'File Name/URL', //cpg1.3.0
  'error_message' => 'ข้อความ', //cpg1.3.0
  'no_post' => 'File not uploaded by POST.', //cpg1.3.0
  'forb_ext' => 'ไม่มีนามสกุลนี้.', //cpg1.3.0
  'exc_php_ini' => 'เกินขนาดที่อนุญาตใน php.ini.', //cpg1.3.0
  'exc_file_size' => 'เกินขนาดที่อนุญาตใน CPG.', //cpg1.3.0
  'partial_upload' => 'สำหรับการอัพโหลดที่ไม่สมบูรณ์.', //cpg1.3.0
  'no_upload' => 'ไม่มีการอัพโหลด.', //cpg1.3.0
  'unknown_code' => 'Unknown PHP เกิดความผิดพลาดในโค๊ดอัพโหลด.', //cpg1.3.0
  'no_temp_name' => 'ไม่มีการอัพโหลด - ไม่มี temp name.', //cpg1.3.0
  'no_file_size' => 'ไม่มีข้อมูล', //cpg1.3.0
  'impossible' => 'ไม่สามารถย้ายได้.', //cpg1.3.0
  'not_image' => 'ไม่ใช่รูปภาพ', //cpg1.3.0
  'not_GD' => 'Not a GD extension.', //cpg1.3.0
  'pixel_allowance' => 'ภาพใหญ่เกินไป.', //cpg1.3.0
  'incorrect_prefix' => 'Incorrect URI/URL prefix', //cpg1.3.0
  'could_not_open_URI' => 'Could not open URI.', //cpg1.3.0
  'unsafe_URI' => 'ไม่ผ่านการตรวจสอบความปลอดภัย.', //cpg1.3.0
  'meta_data_failure' => 'Meta data failure', //cpg1.3.0
  'http_401' => '401 ไม่ได้รับอนุญาต', //cpg1.3.0
  'http_402' => '402 ต้องชำระเงิน', //cpg1.3.0
  'http_403' => '403 ไม่พบ', //cpg1.3.0
  'http_404' => '404 ไม่มี', //cpg1.3.0
  'http_500' => '500 เซิร์ฟเวอร์ผิดพลาด', //cpg1.3.0
  'http_503' => '503 ไม่มีบริการนี้', //cpg1.3.0
  'MIME_extraction_failure' => 'MIME could not be determined.', //cpg1.3.0
  'MIME_type_unknown' => 'Unknown MIME type', //cpg1.3.0
  'cant_create_write' => 'สร้างข้อมูลไม่ได้.', //cpg1.3.0
  'not_writable' => 'บันทึกข้อมูลไม่ได้.', //cpg1.3.0
  'cant_read_URI' => 'ไม่สามารถอ่าน URI/URL', //cpg1.3.0
  'cant_open_write_file' => 'ไม่สามารถเปิด URI write file.', //cpg1.3.0
  'cant_write_write_file' => 'ไม่สามารถเขียน URI write file.', //cpg1.3.0
  'cant_unzip' => 'ไม่สามารถ unzip.', //cpg1.3.0
  'unknown' => 'เกิดความผิดพลาด', //cpg1.3.0
  'succ' => 'อัพโหลดสำเร็จ', //cpg1.3.0
  'success' => '%s ไฟล์อัพโหลดสำเร็จ.', //cpg1.3.0
  'add' => 'คลิ๊ก ต่อไป เพื่อเพิ่มภาพสู่อัลบั้ม', //cpg1.3.0
  'failure' => 'อัพโหลดไม่ได้', //cpg1.3.0
  'f_info' => 'รายละเอียด', //cpg1.3.0
  'no_place' => 'แทนที่ไม่ได้.', //cpg1.3.0
  'yes_place' => 'แทนที่สำเร็จ.', //cpg1.3.0
  'max_fsize' => 'ขนาดสูงสุดที่อนุญาตคือ %s KB',
  'album' => 'อัลบั้ม',
  'picture' => 'ภาพ', //cpg1.3.0
  'pic_title' => 'ชื่อภาพ', //cpg1.3.0
  'description' => 'รายละเอียด', //cpg1.3.0
  'keywords' => 'คำค้น (แยกด้วยการเว้นวรรค)',
  'err_no_alb_uploadables' => 'ไม่มีอัลบั้มที่อนุญาตให้อัพโหลดไฟล์', //cpg1.3.0
  'place_instr_1' => 'ลองเลือกภาพเข้าสู่อัลบั้ม.  ซึ่งคุณจะเห็นรายละเอียดต่างๆ.', //cpg1.3.0
  'place_instr_2' => 'อีกหลายไฟล์ต้องมีการเปลี่ยนค่าต่างๆ โปรดคลิ๊กที่ ต่อไป', //cpg1.3.0
  'process_complete' => 'คุณได้แทนที่ค่าต่างๆเรียบร้อยแล้ว.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'title' => 'จัดการผู้ใช้',
  'name_a' => 'ชื่อ จากน้อยไปมาก',
  'name_d' => 'ชื่อ จากมากไปน้อย',
  'group_a' => 'กลุ่ม จากน้อยไปมาก',
  'group_d' => 'กลุ่ม จากมากไปน้อย',
  'reg_a' => 'วันลงทะเบียน จากน้อยไปมาก',
  'reg_d' => 'วันลงทะเบียน จากมากไปน้อย',
  'pic_a' => 'จำนวนภาพ น้อยไปมาก',
  'pic_d' => 'จำนวนภาพ มากไปน้อย',
  'disku_a' => 'ขนาดดิคส์ที่ใช้ น้อยไปมาก',
  'disku_d' => 'ขนาดดิคส์ที่ใช้ มากไปน้อย',
  'lv_a' => 'จำนวนเข้าชม  น้อยไปมาก', //cpg1.3.0
  'lv_d' => 'จำนวนเข้าชม  มากไปน้อยก', //cpg1.3.0
  'sort_by' => 'เรียงโดย',
  'err_no_users' => 'ข้อมูลผู้ใช้ว่างเปล่า !',
  'err_edit_self' => 'คุณไม่สามารถแก้ไขข้อมูลส่วนตัวได้, คุณต้องเลือกคลิ๊กที่ ข้อมูลส่วนตัว ',
  'edit' => 'แก้ไข',
  'delete' => 'ลบ',
  'name' => 'ชื่อผู้ใช้',
  'group' => 'กลุ่ม',
  'inactive' => 'ไม่ได้เข้าใช้',
  'operations' => 'จัดการ',
  'pictures' => 'ภาพ', //cpg1.3.0
  'disk_space' => 'ขนาดพื้นที่ดิสค์',
  'registered_on' => 'ลงทะเบียนเมื่อ',
  'last_visit' => 'ผู้เข้าชม', //cpg1.3.0
  'u_user_on_p_pages' => '%d ผู้ใช้ ใน %d หน้า',
  'confirm_del' => 'แน่ใจว่าจะลบผู้ใช้นี้ ? \\n  ภาพและอัลบั้มจะถูกลบไปด้วย.', //js-alert //cpg1.3.0
  'mail' => 'จดหมาย',
  'err_unknown_user' => 'ไม่พบชื่อที่เลือก !',
  'modify_user' => 'แก้ไขผู้ใช้',
  'notes' => 'บันทึกข้อความ',
  'note_list' => '<li>ถ้าไม่ต้องการเปลี่ยนรหัสผ่าน ก็ปล่อยให้ว่างไว้',
  'password' => 'รหัสผ่าน',
  'user_active' => 'เข้าใช้',
  'user_group' => 'กลุ่ม',
  'user_email' => 'อีเมล์ผู้ใช้',
  'user_web_site' => 'เวปไซต์ผู้ใช้',
  'create_new_user' => 'สร้างผู้ใช้ใหม่',
  'user_location' => 'หลักแหล่งผู้ใช้',
  'user_interests' => 'สิ่งที่ชอบของผู้ใช้',
  'user_occupation' => 'อาชีพของผู้ใช้',
  'latest_upload' => 'จำนวนที่อัพโหลด', //cpg1.3.0
  'never' => 'ไม่มี', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
  'title' => 'เครื่องมือผู้ดูแลระบบ (ปรับขนาดภาพ)', //cpg1.3.0  ** This module doesn't work on some server!! Check your php.ini before use.
  'what_it_does' => ',มันทำอะไร',
  'what_update_titles' => 'เปลี่ยนชื่อรูปจากภาพ',
  'what_delete_title' => 'ลบชื่อรูป',
  'what_rebuild' => 'สร้างภาพย่อและย่อขนาดภาพ',
  'what_delete_originals' => 'แทนภาพที่ย่อขนาดแล้วแทนต้นฉบับ',
  'file' => 'ภาพ',
  'title_set_to' => 'เปลี่ยนชื่อเป็น',
  'submit_form' => 'ตกลง',
  'updated_succesfully' => 'อัพเดตเ้รียบร้อย',
  'error_create' => 'สร้างไม่ได้',
  'continue' => 'เอาอีก ๆ',
  'main_success' => 'ไฟล์ %s ถูกใช้โดยไฟล์ต้นฉบับ', //cpg1.3.0
  'error_rename' => 'ไม่สามารถเปลี่ยนชื่อ %s เป็น %s',
  'error_not_found' => 'ไม่พบไฟล์ %s ',
  'back' => 'กลับไปเริ่มใหม่',
  'thumbs_wait' => 'กำลังบันทึกการเปลี่ยนแปลงภาพย่อหรือลดขนาดภาพ...',
  'thumbs_continue_wait' => 'กำลังเปลี่ยนแปลงภาพย่อหรือลดขนาดภาพ...',
  'titles_wait' => 'กำลังเปลี่ยนชื่อภาพ...',
  'delete_wait' => 'กำลังลบชื่อภาพ...',
  'replace_wait' => 'ลบภาพต้นฉบับและแทนที่ด้วยภาพที่เปลี่ยนขนาดแล้ว...',
  'instruction' => 'การใช้อย่างรวดเร็ว',
  'instruction_action' => 'เลือกการทำงาน',
  'instruction_parameter' => 'เลือก พารามิเตอร์',
  'instruction_album' => 'เลือกอัลบั้ม',
  'instruction_press' => 'กด %s',
  'update' => 'บันทึกการเปลี่ยนแปลงภาพย่อหรือลดขนาดภาพ',
  'update_what' => 'ซึ่งจะไม่เปลี่ยนแปลง',
  'update_thumb' => 'เฉพาะภาพย่อ',
  'update_pic' => 'เฉพาะภาพลดขนาด',
  'update_both' => 'ทั้งภาพย่อและภาพที่ลดขนาดแล้ว',
  'update_number' => 'จำนวนภาพใน 1 คลิ๊ก',
  'update_option' => '(ลองลดคุณสมบัตินี้ลง หากเกิดปัญหา timeout)',
  'filename_title' => 'ชื่อไฟล์ &rArr; ชื่อภาพ', //cpg1.3.0
  'filename_how' => 'เปลี่ยนชื่อไฟล์อย่างไร',
  'filename_remove' => 'ลบ .jpg และแทนที่เป็น _ (underscore)',
  'filename_euro' => 'เปลี่ยน 2003_11_23_13_20_20.jpg เป็น 23/11/2003 13:20',
  'filename_us' => 'เปลี่ยน 2003_11_23_13_20_20.jpg เป็นo 11/23/2003 13:20',
  'filename_time' => 'เปลี่ยน 2003_11_23_13_20_20.jpg เป็น 13:20',
  'delete' => 'ลบชื่อภาพและขนาดรูป', //cpg1.3.0
  'delete_title' => 'ลบชื่อภาพ', //cpg1.3.0
  'delete_original' => 'ลบขนาดรูป',
  'delete_replace' => 'ลบภาพต้นฉบับและแทนที่ด้วยขนาดที่เปลี่ยนแปลงแล้ว',
  'select_album' => 'เลือกอัลบั้ม',
  'delete_orphans' => 'ลบความเห็นที่ผิดพลาด (ได้ทุกอัลบั้ม)', //cpg1.3.0
  'orphan_comment' => 'พบความเห็นที่ผิดพลาด', //cpg1.3.0
  'delete' => 'ลบ', //cpg1.3.0
  'delete_all' => 'ลบทั้งหมด', //cpg1.3.0
  'comment' => 'ความเห็น: ', //cpg1.3.0
  'nonexist' => 'ไฟล์ที่แนบผิดพลาด # ', //cpg1.3.0
  'phpinfo' => 'แสดง phpinfo', //cpg1.3.0
  'update_db' => 'บันทึกข้อมูล', //cpg1.3.0
  'update_db_explanation' => 'If you have replaced coppermine files, added a modification or upgraded from a previous version of coppermine, make sure to run the database update once. This will create the necessary tables and/or config values in your coppermine database.', //cpg1.3.0
);

?>
