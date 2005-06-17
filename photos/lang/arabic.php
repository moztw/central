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
// CVS version: $Id: arabic.php,v 1.8 2004/07/24 15:04:00 gaugau Exp $
// ------------------------------------------------------------------------- //

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Arabic',
  'lang_name_native' => 'ÚÑÈí',
  'lang_country_code' => 'ar',
  'trans_name'=> 'alwateen ',
  'trans_email' => 'webmaster@watein.com',
  'trans_website' => 'http://watein.com/',
  'trans_date' => '2004-03-18',
);

$lang_charset = 'windows-1256';
$lang_text_dir = 'rtl'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('ÈÇíÊ', 'ß.È', 'ã.È');

// Day of weeks and months
$lang_day_of_week = array('ÇÍÏ', 'ÇËäíä', 'ËáÇËÇÁ', 'ÇÑÈÚÇÁ', 'ÎãíÓ', 'ÌãÚÉ', 'ÓÈÊ');
$lang_month = array('íäÇíÑ', 'İÈÑÇíÑ', 'ãÇÑÓ', 'ÇÈÑíá', 'ãÇíæ', 'íæäíæ', 'íæáíæ', 'ÇÛÓØÓ', 'ÓÈÊãÈÑ', 'ÇßÊæÈÑ', 'äæİãÈÑ', 'ÏíÓãÈÑ');

// Some common strings
$lang_yes = 'äÚã';
$lang_no  = 'áÇ';
$lang_back = 'ÑÌæÚ';
$lang_continue = 'ÇÓÊãÑ';
$lang_info = 'ãÚáæãÇÊ';
$lang_error = 'ÎØÃ';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%B %d, %Y';
$lastcom_date_fmt =  '%m/%d/%y at %H:%M'; //cpg1.3.0
$lastup_date_fmt = '%B %d, %Y';
$register_date_fmt = '%B %d, %Y';
$lasthit_date_fmt = '%B %d, %Y at %I:%M %p'; //cpg1.3.0
$comment_date_fmt =  '%B %d, %Y at %I:%M %p'; //cpg1.3.0

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
        'random' => 'ÕæÑ ÚÔæÇÆíÜÜÜÉ',
        'lastup' => 'ÂÎÜÜÑ ÇÖÇİÜÜÇÊ',
        'lastalb'=> 'ÂÎÑ ÃáÈæãÇÊ Êã ÊÍÏíËåÇ',
        'lastcom' => 'ÂÎÑ ãáÇÍÙÜÜÇÊ',
        'topn' => 'ÇßËÑåÇ ãÔÇåÏÉ',
        'toprated' => 'ÇÚáÇåÇ ÊŞííãÇ',
        'lasthits' => 'ÂÎÑ ãÇ ÔæåÏ',
        'search' => 'äÊÇÆÌ ÇáÈÍÜË',
        'favpics'=> 'ÇáÕæÑ ÇáãİÖáÉ'
);

$lang_errors = array(
  'access_denied' => 'áíÜÓ áÏíß ÇáÕáÇÍíÉ áÏÎæá åĞå ÇáÕİÍÉ.',
  'perm_denied' => 'áíÓ áÏíß ÇáÕáÇÍíÉ ááŞíÇã ÈÊáß ÇáÎØæÉ.',
  'param_missing' => 'áŞÏ äæÏí ÇáÈÑäÇãÌ ÈÏæä ãÊÛíÑÇÊ.',
  'non_exist_ap' => 'ÇáÃáÈæã Ãæ ÇáÕæÑÉ ÇáãÎÊÇÑÉ ÛíÑ ãæÌæÏÉ!',
  'quota_exceeded' => 'ÊÎØíÊ ÍÏæÏ ÇáÊÎÒíä<br /><br />ÇáãÓÇÍÉ ÇáãÓãæÍÉ áß [quota]K, ÕæÑß ÊÍÊá ãÓÇÍÉ [space]K, æÈÅÖÇİÉ åĞå ÇáÕæÑÉ Óæİ ÊÊÎØì ÍÏæÏ ÇáÊÎÒíä ÇáãÓãæÍÉ áß.',
  'gd_file_type_err' => 'ÚäÏ ÇÓÊÚãÇá ãßÊÈÉ GD ááÈÑÇãÌ áÇ íÓãÍ ÅáÇ ÈÜãáİÇÊ  JPEG æ PNG.',
  'invalid_image' => 'ÇáÕæÑÉ ÇáãÍãáÉ ÛíÑ ÕÇáÍÉ Çæ áã ÊÚÇáÌ ÈãßÊÈÉ GD',
  'resize_failed' => 'áã ÇÓÊØÚ Êßæíä ÇÎÊÕÇÑ ÇáÕæÑÉ Çæ ÊÕÛíÑåÇ.',
  'no_img_to_display' => 'áÇ ÊæÌÏ ÕæÑÉ ááÚÑÖ',
  'non_exist_cat' => 'ÇáÊÕäíİ ÇáãÎÊÇÑ ÛíÑ ãæÌæÏ',
  'orphan_cat' => 'ÊÕäíİ áíÓ áå ÊÕäíİ ÑÆíÓí, ÔÛá ãÏíÑ ÇáÊÕäíİÇÊ áÚáÇÌ ÇáãÔßáÉ.',
  'directory_ro' => 'ÇáÏáíá \'%s\' ÛíÑ ŞÇÈá ááßÊÇÈÉ, áÇ ÇÓÊØíÚ ÇáÛÇÁ ÇáÕæÑÉ',
  'non_exist_comment' => 'ÇáÊÚáíŞ ÇáãÎÊÇÑ ÛíÑ ãæÌæÏ.',
  'pic_in_invalid_album' => 'ÇáÕæÑÉ ÛíÑ ãæÌæÏÉ İí ÇáÇáÈæã (%s)!?',
  'banned' => 'ÇäÊ ããäæÚ ãä ÇÓÊÚãÇá åĞÇ ÇáãæŞÚ ÇáÂä.',
  'not_with_udb' => 'åĞå ÇáãíÒÉ ãÚØáÉ İí Coppermine áÃäåÇ ãÏãæÌÉ ãÚ ÇáãäÊÏì. ÇãÇ ãÇ ÊæÏ ÇáŞíÇã Èå ÛíÑ ãÏÚæã, Ãæ Çä ÈÑäÇãÌ ÇáãäÊÏì íŞæã ÈäİÓ ÇáãåãÉ.',
  'offline_title' => 'ÇááÈæã ãÛáŞ ÇáÂä', //cpg1.3.0
  'offline_text' => 'ÇáãÚÑÖ ãÛáŞ ÇáÂä ßÑÑ ÒíÇÑÊß İí æŞÊ áÇÍŞ', //cpg1.3.0
  'ecards_empty' => 'ÎÇÕíÉ ÇáÈØÇŞÇÊ ÇáÈÑíÏíÉ ÛíÑ ãÊæİÑÉ ÊÃßÏ ÇäåÇ ãİÚáÉ ãä áæÍÉ ÇáÊÍßã!', //cpg1.3.0
  'action_failed' => 'ÇáÚãáíÉ İÇÔáÉ ÛíÑ ŞÇÏÑ Úáì ÇÊãÇãÇ ÇáÚãáíÉ.', //cpg1.3.0
  'no_zip' => 'ÎÇÕíÉ ÇáãáİÇÊ ÇáãÖÛæØÉ ÛíÑ ãÊæİÑÉ ÑÇÌÚ ÇáãæŞÚ ÇáÑÆíÓ ááãäÊÌ.', //cpg1.3.0
  'zip_type' => 'áÇíæÌÏ áÏíß ÊÑÎíÕ ÇáãáİÇÊ ÇáãÖÛæØÉ.', //cpg1.3.0
);

$lang_bbcode_help = 'ÇáÑãæÒ ÇáÊÇáíÉ ŞóÏú Êóßõæäõ ãİíÏÉó: <li>[b]<b>ÇÓæÏ</b>[/b]</li> <li>[i]<i>ãÇÆá</i>[/i]</li> <li>[url=http://yoursite.com/]Url Text[/url]</li> <li>[email]user@domain.com[/email]</li>'; //cpg1.3.0

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
        'alb_list_title' => 'ÇäÊŞá Çáì ŞÇÆãÉ ÇáÇáÈæãÇÊ',
        'alb_list_lnk' => 'ŞÇÆãÉ ÇáÇáÈæãÇÊ',
        'my_gal_title' => 'ÇäÊŞá Çáì ÇáÈæãí ÇáÎÇÕ',
        'my_gal_lnk' => 'ÇáÈæãí ÇáÎÇÕ',
        'my_prof_lnk' => 'ÊÚÑíİí',
        'adm_mode_title' => 'ÊÍæíá Çáì æÇÌåÉ ÇáÇÏÇÑÉ',
        'adm_mode_lnk' => 'ÍÇáÉ ÇáÇÏÇÑÉ',
        'usr_mode_title' => 'ÊÍæíá Çáì æÇÌåÉ ÇáÇÓÊÚãÇá',
        'usr_mode_lnk' => 'ÍÇáÉ ÇáãÓÊÎÏã',
        'upload_pic_title' => 'ÊÍãíá ÇáÕæÑÉ İí ÇáÇáÈæã',
        'upload_pic_lnk' => 'ÊÍãíá ÇáÕæÑÉ',
        'register_title' => 'Êßæíä ÍÓÇÈ',
        'register_lnk' => 'ÊÓÌíá',
        'login_lnk' => 'ÏÎæá',
        'logout_lnk' => 'ÎÑæÌ',
        'lastup_lnk' => 'ÂÎÑ ÊÍãíá',
        'lastcom_lnk' => 'ÂÎÑ ÊÚáíŞÇÊ',
        'topn_lnk' => 'ÇßËÑ ÇáÕæÑ ãØÇáÚÉ',
        'toprated_lnk' => 'ÇÚáì ÇáÕæÑ ÊŞííãÇ',
        'search_lnk' => 'ÇÈÍË',
        'fav_lnk' => 'ÇáãİÖáÉ',
  'memberlist_title' => 'ÚÑÖ ŞÇÆãÉ ÇáÃÚÖÇÁ', //cpg1.3.0
  'memberlist_lnk' => 'ŞÇÆãÉ ÇáÃÚÖÇÁ', //cpg1.3.0
  'faq_title' => 'ÇáÃÓÆáÉ ÇáãßÑøóÑÉ Úáì ãÚÑÖö ÇáÕæÑ &quot;Coppermine&quot;', //cpg1.3.0
  'faq_lnk' => 'Ó æ Ì', //cpg1.3.0
);

$lang_gallery_admin_menu = array(
  'upl_app_lnk' => 'ÇáãæÇİŞÉ Úáì ÇáÊÍãíá',
  'config_lnk' => 'ÇáÊÍßã',
  'albums_lnk' => 'ÇáÈæãÇÊ',
  'categories_lnk' => 'ÇáÇŞÓÇã',
  'users_lnk' => 'ÇáãÓÊÎÏãíä',
  'groups_lnk' => 'ÇáãÌãæÚÇÊ',
  'comments_lnk' => 'ãÑÇÌÚÉ ÇáÊÚáíŞÇÊ', //cpg1.3.0
  'searchnew_lnk' => 'ÇÖÇİÉ ãÌãæÚÉ ãä ÇáÕæÑ', //cpg1.3.0
  'util_lnk' => 'ÇÏæÇÊ ÇáÅÏÇÑÉ', //cpg1.3.0
  'ban_lnk' => 'ãäÚ ÇáãÓÊÎÏãíä',
  'db_ecard_lnk' => 'ÚÑÖ ÇáÈØÇŞÇÊ', //cpg1.3.0
);

$lang_user_admin_menu = array(
        'albmgr_lnk' => 'ÇÎáŞ / ÇİÑÒ ÇáÈæãÇÊí',
        'modifyalb_lnk' => 'ÊÚÏíá ÇáÈæãÇÊí',
        'my_prof_lnk' => 'Çáãáİ ÇáÔÎÕí',
);

$lang_cat_list = array(
        'category' => 'ÇáÊÕäíİ',
        'albums' => 'ÇáÇáÈæãÇÊ',
        'pictures' => 'ÇáÕæÑ',
);

$lang_album_list = array(
        'album_on_page' => '%d ÇáÈæã İí %d ÕİÍÉ'
);

$lang_thumb_view = array(
        'date' => 'ÇáÊÇÑíÎ',
  //Sort by filename and title
  'name' => 'ÇÓã Çáãáİ',
  'title' => 'ÇáÚäæÇä',
  'sort_da' => 'ÊÑÊíÈ ÊÕÇÚÏí ÍÓÈ ÇáÊÇÑíÎ',
  'sort_dd' => 'ÊÑÊíÈ ÊäÇÒáí ÍÓÈ ÇáÊÇÑíÎ',
  'sort_na' => 'ÊÑÊíÈ ÊÕÇÚÏí ÍÓÈ ÇáÇÓã',
  'sort_nd' => 'ÊÑÊíÈ ÊäÇÒáí ÍÓÈ ÇáÇÓã',
  'sort_ta' => 'ÊÑÊíÈ ÊÕÇÚÏí ÍÓÈ ÇáÚäæÇä',
  'sort_td' => 'ÊÑÊíÈ ÊäÇÒáí ÍÓÈ ÇáÚäæÇä',
  'download_zip' => 'Íãá ÇáÕæÑÉ ßãáİ ãÖÛæØ zip', //cpg1.3.0
  'pic_on_page' => '%d ÕæÑÉ İí %d ÕİÍÉ/ÕİÍÇÊ',
  'user_on_page' => '%d ãÓÊÎÏã İí %d ÕİÍÉ', //cpg1.3.0
);

$lang_img_nav_bar = array(
  'thumb_title' => 'ÇáÑÌæÚ Åáì ÇáãÕÛÑÇÊ',
  'pic_info_title' => 'ÇÙåÑ/ÇÎİí ãÚáæãÇÊ ÇáÕæÑ', //cpg1.3.0
  'slideshow_title' => 'ÚÑÖ ÊáŞÇÆí',
  'ecard_title' => 'ÇÑÓá ÇáÕæÑÉ ßÈØÇŞÉ', //cpg1.3.0
  'ecard_disabled' => 'ÇáÈØÇŞÇÊ ÇáÈÑíÏíÉ ãÚØáÉ',
  'ecard_disabled_msg' => 'áíÓ áÏíß ÕáÇÍíÉ áÇÑÓÇá ÇáÈØÇŞÇÊ ÇáÈÑíÏíÉ', //js-alert //cpg1.3.0
  'prev_title' => 'ÇáÕæÑÉ ÇáÓÇÈŞÉ', //cpg1.3.0
  'next_title' => 'ÇáÕæÑÉ ÇááÇÍŞÉ', //cpg1.3.0
  'pic_pos' => 'ÕÜæÑå %s/%s', //cpg1.3.0
);

$lang_rate_pic = array(
        'rate_this_pic' => 'ŞíÜã åĞå ÇáÕæÑÉ',
        'no_votes' => '(áÇ íæÌÏ ÊÕæíÊ)',
        'rating' => '(ÇáÊÕæíÊ ÇáÍÇáí: %s / 5 ãä %s ÊÕæíÊ)',
        'rubbish' => 'ÓíÜÆÉ',
        'poor' => 'ÚÇÏíÉ',
        'fair' => 'ãŞÈæáÉ',
        'good' => 'ÌíÜÏÉ',
        'excellent' => 'ããÊÜÇÒÉ',
        'great' => 'ÑÇÆÚÉ',
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
  CRITICAL_ERROR => 'ÎØÃ ÍÇÏ',
  'file' => 'ãáİ: ',
  'line' => 'ÓØÑ: ',
);

$lang_display_thumbnails = array(
        'filename' => 'ÇÓã Çáãáİ : ',
        'filesize' => 'ÇáÍÌã : ',
        'dimensions' => 'ÇáÇÈÚÇÏ : ',
        'date_added' => 'ÇÖíİÊ İí : '
);

$lang_get_pic_data = array(
        'n_comments' => '%s ÊÚáíŞ',
        'n_views' => '%s ãÔÇåÏÉ',
        'n_votes' => '(%s ÊÕæíÊ)'
);

$lang_cpg_debug_output = array(
  'debug_info' => 'äŞøÍú ÇáãÚáæãÇÊó', //cpg1.3.0
  'select_all' => 'ÊÍÏíÏ Çáßá', //cpg1.3.0
  'copy_and_paste_instructions' => 'If you\'re going to request help on the coppermine support board, copy-and-paste this debug output into your posting. Make sure to replace any passwords from the query with *** before posting.', //cpg1.3.0
  'phpinfo' => 'ÚÑÖ ãÚáæãÇÊ php', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => 'Default language', //cpg1.3.0
  'choose_language' => 'ÇÎÊÑ áÛÉ', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'ÇáÔßá ÇáÇÓÇÓí', //cpg1.3.0
  'choose_theme' => 'ÇÎÊÑ ÔßáÇ', //cpg1.3.0
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
        'Exclamation' => 'ÊÚÌÈ',
        'Question' => 'ÇÓÊİåÇã',
        'Very Happy' => 'ÓÚíÏ ÌÏÇ',
        'Smile' => 'ãÈÊÓã',
        'Sad' => 'ÍÒíä',
        'Surprised' => 'ãÊÚÌÈ',
        'Shocked' => 'ãäÏåÔ',
        'Confused' => 'ãÑÊÈß',
        'Cool' => 'ÚÌíÈ',
        'Laughing' => 'íÖÍß',
        'Mad' => 'ÛÇÖÈ',
        'Razz' => 'ÑÇİÖ',
        'Embarassed' => 'ãÍÑÌ',
        'Crying or Very sad' => 'íÈßí',
        'Evil or Very Mad' => 'ÛÇÖÈ',
        'Twisted Evil' => 'ãÓÊÚÏ ááÔÑ',
        'Rolling Eyes' => 'ÍíÑÇä',
        'Wink' => 'íÛãÒ',
        'Idea' => 'İßÑÉ',
        'Arrow' => 'Óåã',
        'Neutral' => 'ÚÇÏí',
        'Mr. Green' => 'ãÚÕÈ',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  0 => 'ÊóÑúß äãØö ÇáÅÏÇÑÉö. . .',
  1 => 'ÏõÎõæá äãØö ÇáÅÏÇÑÉö...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
        'alb_need_name' => 'ÇáÃáÈæã ÈÍÇÌÉ Çáì ÅÓÜã !',
        'confirm_modifs' => 'åá ÃäÊ ãÊÃßøÏ Ãäøß ÊÑíÏ Úãá åĞå ÇáÊøÚÏíáÇÊ  ?',
        'no_change' => 'áã ÊŞã ÈÃí ÊÛííÑ !',
        'new_album' => 'ÇáÈÜæã ÌÏíÏ',
        'confirm_delete1' => 'åá ÃäÊ ãÊÃßÏ ãä ÅáÛÇÁ åĞÇ ÇáÈæã ?',
        'confirm_delete2' => '\nÓæİ íÊã ÍĞİ ÇáÕæÑ æ ÇáÊÚáíŞÇÊ !',
        'select_first' => 'íÌÈ Úáíß ÃæáÇ ÇÏÎÇá ÇÓã ááÈæã',
        'alb_mrg' => 'ÇáÊÍßã ÈÇáÃáÈæã',
        'my_gallery' => '* ãÚÑÖÜí *',
        'no_category' => '* ÇáãÚÑÖ ÛíÑ ãæÌæÏ *',
        'delete' => 'ÇáÛÜÇÁ',
        'new' => 'ÌÏíÏ',
        'apply_modifs' => 'ÇÓÊÚãá ÇáÊøÚÏíáÇÊ ',
        'select_category' => 'ÇáÕøäİ ÇáãÎÊÇÑ ',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
        'miss_param' => 'ÇáãÚáæãÇÊ ÇáãØáæÈÉ ááÚãáíÉ \'%s\'áã ÊÚØì !',
        'unknown_cat' => 'ÇáÊÕäíİ ÇáãÎÊÇÑ ÛíÑ ãÚÑæİ',
        'usergal_cat_ro' => 'áÇíÓãÍ ÈÇáÛÇÁ ÊÕäíİ ÇáãÓÊÎÏãíä !',
        'manage_cat' => 'ÇÏÇÑÉ ÇáÊÕäíİÇÊ',
        'confirm_delete' => 'åá ÇäÊ ãÊÃßÏ ãä ÇáÛÇÁ åĞÇ ÇáÊÕäíİ',
        'category' => 'ÇáÊÕäíİ',
        'operations' => 'ÇáÚãáíÇÊ',
        'move_into' => 'ÇäŞá Çáì',
        'update_create' => 'ÇÖÇİÉ ÊÚÏíá ÊÕäíİ',
        'parent_cat' => 'ÇáÊÕäíİ ÇáÑÆíÓí',
        'cat_title' => 'ÚäæÇä ÇáÊÕäíİ',
        'cat_thumb' => 'ÊÕäíİ İÑÚí', //cpg1.3.0
        'cat_desc' => 'ÔÑÍ ÇáÊÕäíİ'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
        'title' => 'ÇáÅÚÜÜÜÏÇÏÊ',
        'restore_cfg' => 'ÊÌÇåÜá ÇáÊÛííÑÇÊ',
        'save_cfg' => 'áÍİÜÙ ÇáÅÚÏÇÏÇÊ',
        'notes' => 'ãáÇÍÙÜÜÇÊ',
        'info' => 'ÇáãÚÜáæãÜÇÊ',
        'upd_success' => 'áŞÏ Êã ÊÍÏíË ÇáÅÚÜÏÇÏÊ',
        'restore_success' => 'Êã ÇÑÌÇÚ ÇáÇÚÏÇÏÇÊ ÇáÇÕáíÉ',
        'name_a' => 'ÊÕÇÚÏí Úáì ÇáÇÓã',
        'name_d' => 'ÊäÇÒáí Úáì ÇáÇÓã',
        'title_a' => 'ÊÕÇÚÏí Úáì ÇáÚäæÇä',
        'title_d' => 'ÊäÇÒáí Úáì ÇáÚäæÇä',
        'date_a' => 'ÊÇÑíÎ ÊÕÇÚÏí',
        'date_d' => 'ÊÇÑíÎ ÊäÇÒáí',
        'th_any' => 'ÇÚáì ãäÙæÑ',
        'th_ht' => 'ÇÑÊİÇÚ',
        'th_wd' => 'ÚÑÖ',
        'label' => 'ÕæÑÉ ÇáÚáã', //cpg1.3.0
        'item' => 'ÇÓã ÇááÛÉ', //cpg1.3.0
        'debug_everyone' => 'ÇáÌãíÚ', //cpg1.3.0
        'debug_admin' => 'ÇáãÏíÑ İŞØ', //cpg1.3.0
        );

if (defined('CONFIG_PHP')) $lang_config_data = array(
  'ÇÚÏÇÏÇÊ ÚÇãÉ',
  array('ÇÓã ÇáãÚÑÖ', 'gallery_name', 0),
  array('æÕİ ÇáãÚÑÖ', 'gallery_description', 0),
  array('ÈÑíÏ ãÏíÑ ÇáãÚÑÖ', 'gallery_admin_email', 0),
  array('ÇáÚäæÇä ÇáåÏİ áæÕáÉ \'ÑÄíÉ ÇáãÒíÏ ãä ÇáÕæÑ\' İí ÇáßÑæÊ', 'ecards_more_pic_target', 0),
  array('ÇÛáÇŞ ÇáãÚÑÖ', 'offline', 1), //cpg1.3.0
  array('ÊİÚíá ÇáÈØÇŞÇÊ', 'log_ecards', 1), //cpg1.3.0
  array('ÇáÓãÇÍ ÈÊÍãíá ÇáãáİÇÊ ÇáãÖÛæØÉzipãä ÇáãİÖáÉ', 'enable_zipdownload', 1), //cpg1.3.0

  'ÇááÛÉ ÇáÇÔßÇá æÇáÓãÇÊ æÇáÊÑãíÒ',
  array('ÇááÛÉ', 'lang', 5),
  array('ÇáÔßá', 'theme', 6),
  array('ÚÑÖ ŞÇÆãÉ ÇááÛÉ', 'language_list', 1), //cpg1.3.0
  array('ÚÑÖ ÇÚáÇã ÇááÛÉ', 'language_flags', 8), //cpg1.3.0
  array('ÚÑÖ ãÓÍ İí ÇÎÊíÇÑÇÊ ÇááÛÉ', 'language_reset', 1), //cpg1.3.0
  array('ÚÑÖ ŞÇÆãÉ ÇáÇÔßÇá ( ÇáÓãÇÊ )', 'theme_list', 1), //cpg1.3.0
  array('ÚÑÖ ÇáÊåíÆ İí ŞÇÆãÉ ÇáÇÔßÇá', 'theme_reset', 1), //cpg1.3.0
  array('ÚÑÖ ÇáÇÓÆáÉ ÇáãÊßÑÑÉ', 'display_faq', 1), //cpg1.3.0
  array('ÚÑÖ ãÓÇÚÏ ÔİÑÉ bbcode', 'show_bbcode_help', 1), //cpg1.3.0
  array('äæÚíÉ ÇáÊÑãíÒ', 'charset', 4), //cpg1.3.0

  'ÎíÇÑÇÊ ÚÑÖ ÇáãÚÑÖ',
        array('ÚÑÖ ÇáÌÏæá ÇáÑÆíÓí áÚÑÖ ÇáÕæÑ (ÈÇáäŞÇØ Ãæ ÈÇáäÓÈÉ)', 'main_table_width', 0),
        array('ÚÏÏ ãÓÊæíÇÊ ÇáÊÕäíİ ÇáÊí ÊÚÑÖ', 'subcat_level', 0),
        array('ÚÏÏ ÇáÇáÈæãÇÊ ÇáÊí ÊÚÑÖ', 'albums_per_page', 0),
        array('ÚÏÏ ÇáÇÚãÏÉ áÚÑÖ ÇáÇáÈæã', 'album_list_cols', 0),
        array('ŞíÇÓ ÇáÇÎÊÕÇÑ ÈÇáäŞÇØ', 'alb_list_thumb_size', 0),
        array('ãÍÊæíÇÊ ÇáÕİÍÉ ÇáÑÆíÓíÉ', 'main_page_layout', 0),
            array('ÇÚÑÖ ãÎÊÕÑÇÊ ÇáÈæã ÇáãÓÊæì ÇáÇæá İí ÇáÊÕäíİÇÊ ','first_level',1),

  'ØÑíŞÉ ÚÑÖ ÇáãÎÊÕÑÇÊ',
  array('ÚÏÏ ÇáÇÚãÏÉ İí ÕİÍÉ ãÎÊÕÑÇÊ ÇáÕæÑ', 'thumbcols', 0),
  array('ÚÏÏ ÇáÇÓØÑ İí ÕİÍÉ ãÎÊÕÑÇÊ ÇáÕæÑ', 'thumbrows', 0),
  array('ÇßÈÑ ÚÏÏ ááÕİÍÇÊ ÇáÊí ÓÊÚÑÖ', 'max_tabs', 10), //cpg1.3.0
  array('ÚÑÖ ÚäæÇä ÇáÕæÑ ÇÓİá ßá ÕæÑÉ', 'caption_in_thumbview', 1), //cpg1.3.0
  array('ÇÚÑÖ ÚÏÏÇáãÔÇåÏÇÊ ÇÓİá ÇáÕæÑ', 'views_in_thumbview', 1), //cpg1.3.0
  array('ÇÙåÑ ÚÏÏ ÇáÊÚáíŞÇÊ ÇÓİá ÇáÕæÑÉ', 'display_comment_count', 1),
  array('ÇÚÑÖ ÇÓã ãÍãá ÇáÕæÑÉ ÇÓİá ÇáÕæÑ', 'display_uploader', 1), //cpg1.3.0
  array('ÇáÊÑÊíÈ ÇáÊŞáíÏí ááÕæÑ', 'default_sort_order', 3), //cpg1.3.0
  array('ÇŞá ÚÏÏ ãä ÇáÊÕæíÊÇÊ áÙåæÑ ÇáÕæÑÉ İí ŞÇÆãÉ  \'ÇÚáì ÊŞííã\'', 'min_votes_for_rating', 0),

  'ÇÚÏÇÏÇÊ ãäÙÑ ÇáÕæÑ æÇáÊÚáíŞÇÊ',
  array('ÚÑÖ ÇáÌÏæá áÚÑÖ ÇáÕæÑ (ÈÇáäŞÇØ Ãæ ÈÇáäÓÈÉ)', 'picture_table_width', 0), //cpg1.3.0
  array('ãÚáæãÇÊ ÇáÕæÑ ÊÑì ÊáŞÇÆíÇ', 'display_pic_info', 1), //cpg1.3.0
  array('ãäÚ ÇáßáãÇÊ ÛíÑ ÇááÇÆŞÉ (íÌÈ æÖÚ ÇáßáãÇÊ ÃæáÇ )', 'filter_bad_words', 1),
  array('ÇáÓãÇÍ ÈÇÓÊÎÏÇã ÊÚÈíÑÇÊ ÇáæÌæå', 'enable_smilies', 1),
  array('ÅÓãÍ áÚÏøÉ ÊÚáíŞÇÊ ãÊÊÇáíÉ Úáì ÕæÑÉ æÇÍÏ ãä äİÓ ÇáÔÎÕ(ÈÊÚØíáÉ íŞáá ãä ÇáÖÛØ Úáì ŞæÇÚÏ ÇáÈíÇäÇÊ)', 'disable_comment_flood_protect', 1), //cpg1.3.0
  array('ÇßÈÑ Øæá áæÕİ ÇáÕæÑÉ', 'max_img_desc_length', 0),
  array('ÇßÈÑ ÚÏÏ ãä ÇáÍÑæİ İí ÇáßáãÉ', 'max_com_wlength', 0),
  array('ÇßÈÑ ÚÏÏ ãä ÇáÇÓØÑ İí ÇáÊÚáíŞ', 'max_com_lines', 0),
  array('ÇßÈÑ Øæá ááÊÚáíŞ', 'max_com_size', 0),
  array('ÇÙåÑ ÔÑíØ Çáİáã', 'display_film_strip', 1),
  array('ÚÏÏ ÇáÕæÑ İí ÔÑíØ Çáİáã', 'max_film_strip_items', 0),
  array('ÇÔÚÑ ÇáÅÏÇÑÉ ÈÇáÊÚáíŞÇÊ ÈÑíÏíÇ', 'email_comment_notification', 1), //cpg1.3.0
  array('İÊÑÉ ÇáÚÑÖ ÈÇáÌÒÁ ãä ÇáËÇäíÉ (1 ËÇäíÉ = 1000 ÃÌÒÇÁ ãä ÇáÃáİ ãä ÇáËÇäíÉ)', 'slideshow_interval', 0), //cpg1.3.0

  'ÇÚÏÇÏÊ ÇáÕæÑ æÇáãÕÛÑÇÊ ááÕæÑ', //cpg1.3.0
  array('ÏŞÉ æÖæÍ ÕæÑ JPEG', 'jpeg_qual', 0),
  array('ÇßÈÑ ŞíÇÓ áãÎÊÕÑ ÇáÕæÑÉ<a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0), //cpg1.3.0
  array('ÇÓÊÚãá ÇáŞíÇÓÇÊ (ÚÑÖ Çæ ÇÑÊİÇÚ Ãæ ÇßÈÑ ÊÈÇÚÏ áãÎÊÕÑ ÇáÕæÑ )<b>**</b>', 'thumb_use', 7),
  array('ÅÎáŞú ÕæÑó ãÊæÓøØÉó','make_intermediate',1),
  array('ÇßÈÑ ÚÑÖ Çæ ÇÑÊİÇÚ áÕæÑÉ æÓØíÉ/video <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0), //cpg1.3.0
  array('ÇßÈÑ ÍÌã áÕæÑÉ ãÍãáÉ (ÈÇáßíáæ ÈÇíÊ)', 'max_upl_size', 0), //cpg1.3.0
  array('ÇßÈÑ ÚÑÖ Çæ ÇÑÊİÇÚ áÕæÑÉ æÓØíÉ İíÏíæ ÈÇáäŞÇØ ( ÈíßÓá )', 'max_upl_width_height', 0), //cpg1.3.0

  'ÇÚÏÇÏÊ ÙåæÑ ÇáÕæÑ æÇáãÕÛÑÇÊ', //cpg1.3.0
  array('ÇÚÑÖ ÇíŞæäÉ áÈæã ÇáãÓÊÎÏã ÛíÑ ÇáİÚÇá','show_private',1), //cpg1.3.0
  array('ÖÚ ÇáÑãæÒ æÇáÇÓãÇÁ áãäÚ ÇáãÓÌáíä ãä ÇÓÊÎÏÇãåÇİí ÇáÊÓÌíá', 'forbiden_fname_char',0), //cpg1.3.0
  //array('Accepted file extensions for uploaded pictures', 'allowed_file_extensions',0), //cpg1.3.0
  array('ÇäæÇÚ ÇáÕæÑ ÇáãÓãæÍÉ', 'allowed_img_types',0), //cpg1.3.0
  array('ÇäæÇÚ ÇáæÓÇÆØ ÇáãÓãæÍÉ', 'allowed_mov_types',0), //cpg1.3.0
  array('ÇäæÇÚãáİÇÊ ÇáÕæÊ ÇáãÓãæÍÉ', 'allowed_snd_types',0), //cpg1.3.0
  array('ÇäæÇÚ ÇáæËÇÆŞ ÇáãÓãæÍÉ', 'allowed_doc_types',0), //cpg1.3.0
  array('ÈÑäÇãÌ ÕäÚ ÇáãÕÛÑÇÊ ÇáĞí ÊÑíÏ ÇÓÊÎÏÇãå','thumb_method',2), //cpg1.3.0
  array('Path to ImageMagick \'convert\' utility (example /usr/bin/X11/)', 'impath', 0), //cpg1.3.0
  //array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types',0), //cpg1.3.0
  array('Command line options for ImageMagick', 'im_options', 0), //cpg1.3.0
  array('ÅŞÑÃ ÈíÇäÇÊ EXIF İí ãáİÇÊö JPEG', 'read_exif_data', 1), //cpg1.3.0
  array('ÅŞÑÃ ÈíÇäÇÊ IPTC İí ãáİÇÊö JPEG', 'read_iptc_data', 1), //cpg1.3.0
  array('Ïáíá ÇáÃáÈæã <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0), //cpg1.3.0
  array('ÇáÏáíá áãáİÇÊ ÇáÚÖæ <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0), //cpg1.3.0
  array('ÇáÕæÑ ÇáãÊæÓØÉ ÊÈÏÃ ÈÜ <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0), //cpg1.3.0
  array('ÇáÕæÑ ÇáãÕÛÑÉ ÊÈÏÃ ÈÜ <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0), //cpg1.3.0
  array('ÇáÊÕÑíÍ ÇáÊáŞÇÆí ááãÌáÏÇÊ', 'default_dir_mode', 0), //cpg1.3.0
  array('ÇáÊÕÑíÍ ÇáÊáŞÇÆí ááãáİÇÊ', 'default_file_mode', 0), //cpg1.3.0

  'ÎíÇÑÇÊ ÇáãÓÊÎÏãíä',
  array('ÇáÓãÇÍ ÈÇáÊÓÌíá ááãÓÊÎÏãíä', 'allow_user_registration', 1),
  array('ÊÃßíÏ ÇáÊÓÌíá Úä ØÑíŞ ÇáÈÑíÏ', 'reg_requires_valid_email', 1),
  array('ÇÔÚÑ ÇáÅÏÇÑÉ ÈÇáãÓÌáíä ÇáÌÏÏ Úä ØÑíŞ ÇáÈÑíÏ', 'reg_notify_admin_email', 1), //cpg1.3.0
  array('ÇáÓãÇÍ ÈÇáÊÓÌíá áÈÑíÏ ãÓÌá ÓÇÈŞÇ', 'allow_duplicate_emails_addr', 1),
  array('ÇáãÓÊÎÏãæä íãßä Çä íÍÕáæÇ Úáì ÇáÈæã ÎÇÕ Èåã (ãáÇÍÙÉ: ÇĞÇ ÇÎÊÑÊ áÇ ãÚäì åĞÇ Çä ÇáÈæãÇÊ ÇáÎÇÕÉ ÓÇÈŞÇ ÓÊÕÈÍ ÚÇãÉ )', 'allow_private_albums', 1), //cpg1.3.0
  array('ÇÔÚÑ ÇáÅÏÇÑÉ ÈÇáãÓÊÎÏã ÇáĞí íäÊÙÑ ÇáãæÇİŞå Úáì ÊİÚíáå', 'upl_notify_admin_email', 1), //cpg1.3.0
  array('ÇáÓãÇÍ áÛíÑ ÇáãİÚáíä ÈãÔÇåÏÉ ŞÇÆãÉ ÇáÇÚÖÇÁ', 'allow_memberlist', 1), //cpg1.3.0

  'ÈíÇäÇÊ ÇÖÇİíÉ áãáÚæãÇÊ ÇáÕæÑ (ÇÊÑßå İÇÑÛÇ Çä ßäÊ áÇ ÊÑíÏ ÇÖÇİÉ ãÚáæãÇÊ ÇÖÇİíÉ)',
        array('ÇÓã ÇáÍŞá ÇáÇæá', 'user_field1_name', 0),
        array('ÇÓã ÇáÍŞá ÇáËÇäí', 'user_field2_name', 0),
        array('ÇÓã ÇáÍŞá ÇáËÇáË', 'user_field3_name', 0),
        array('ÇÓã ÇáÍŞá ÇáÑÇÈÚ', 'user_field4_name', 0),

  'ÇÚÏÇÏÇÊ ÇáßæßíÒ',
        array('ÇÓã Çáßæßí ÇáãÓÊÚãá İí ÇáÈÑäÇãÌ', 'cookie_name', 0),
        array('Ïáíá ÇáßæßíÒ ÇáãÓÊÚãá İí ÇáÈÑäÇãÌ', 'cookie_path', 0),

  'ÇÚÏÇÏÇÊ ÇÎÑì',
  array('Êãßíä æÖÚ ÇáÊÊÈÚ', 'debug_mode', 9), //cpg1.3.0
  array('Display notices in debug mode', 'debug_notice', 1), //cpg1.3.0

  '<br /><div align="left"><a name="notice1"></a>(*) This settings mustn\'t be changed if you already have files in your database.<br />
  <a name="notice2"></a>(**) When changing this setting, only the files that are added from that point on are affected, so it is advisable that this setting must not be changed if there are already files in the gallery. You can, however, apply the changes to the existing files with the &quot;<a href="util.php">admin tools</a> (resize pictures)&quot; utility from the admin menu.</div><br />', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'ÇÑÓá ÈØÇŞÉ', //cpg1.3.0
  'ecard_sender' => 'ÇáãÑÓá', //cpg1.3.0
  'ecard_recipient' => 'ÇáãõÓÊáã', //cpg1.3.0
  'ecard_date' => 'ÇáÊÇÑíÎ', //cpg1.3.0
  'ecard_display' => 'ÇÚÑÖ ÇáÈØÇŞÉ', //cpg1.3.0
  'ecard_name' => 'ÇáÇÓã', //cpg1.3.0
  'ecard_email' => 'ÇáÈÑíÏ ÇáÇáßÊÑæäí', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'ÊÕÇÚÏí', //cpg1.3.0
  'ecard_descending' => 'ÊäÇÒáí', //cpg1.3.0
  'ecard_sorted' => 'ãÕäİ', //cpg1.3.0
  'ecard_by_date' => 'ÈæÇÓØÉ ÇáÊÇÑíÎ', //cpg1.3.0
  'ecard_by_sender_name' => 'ãöä ŞöÈá ÇáãÑÓáö \ ÇÓã', //cpg1.3.0
  'ecard_by_sender_email' => 'ãöä ŞöÈá ÇáãÑÓáö \ ÈÑíÏ ÅáßÊÑæäí', //cpg1.3.0
  'ecard_by_sender_ip' => 'by sender\'s IP address', //cpg1.3.0
  'ecard_by_recipient_name' => 'ãöä ŞöÈá ÇáãõÓÊáãö \ ÇÓã', //cpg1.3.0
  'ecard_by_recipient_email' => 'ãöä ŞöÈá ÇáãõÓÊáãö \ ÈÑíÏ ÅáßÊÑæäí', //cpg1.3.0
  'ecard_number' => 'ÚóÑúÖ ÇáÓÌáö %s Åáì %s %s', //cpg1.3.0
  'ecard_goto_page' => 'ÇĞåÈ Çáì ÇáÕİÍÉ', //cpg1.3.0
  'ecard_records_per_page' => 'ÓÌáÇÊ áßáø ÕİÍÉö', //cpg1.3.0
  'check_all' => 'ÏŞŞ Çáßá', //cpg1.3.0
  'uncheck_all' => 'áÇ ÊÏŞŞ Çáßá', //cpg1.3.0
  'ecards_delete_selected' => 'ÇÍÏİ ÇáÈØÇŞÇÊ ÇáãÎÊÇÑÉ', //cpg1.3.0
  'ecards_delete_confirm' => 'ÇäÊ ãÊÃßÏ ãä ÚãáíÉ ÇáÍĞİ !!', //cpg1.3.0
  'ecards_delete_sure' => 'äÚã ãÊÃßÏ', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
        'empty_name_or_com' => 'íÌÈ Çä ÊßÊÈ ÇÓãß æÊÚáíŞß',
        'com_added' => 'Êã ÇÖÇİÉ ÇáÊÚáíŞ',
        'alb_need_title' => 'íÌÈ Çä ÊÍÏÏ ÚäæÇä ááÇáÈæã !',
        'no_udp_needed' => 'áÇ ÍÇÌÉ ááÊÍÏíË.',
        'alb_updated' => 'Êã ÊÍÏíË ÇáÇáÈæã',
        'unknown_album' => 'ÇáÇáÈæã ÇáãÎÊÇÑ ÛíÑ ãæÌæÏ Çæ áíÓ áß ÇáÕáÇÍíÉ ááÊÍãíá İí åĞÇ ÇáÇáÈæã',
        'no_pic_uploaded' => 'áÇ ÊæÌÏ ÕæÑ ãÍãáÉ !<br /><br />ÇĞÇ ßäÊ İÚáÇ ÇÎÊÑÊ ÕæÑ ááÊÍãíá, ÊÃßÏ ãä Çä ÎÇÏã ÇáÕİÍÇÊ íÓãÍ ÈÇáÊÍãíá...',
        'err_mkdir' => 'áã ÇÓÊØÚ Êßæíä ÇáãÌáÏ %s !',
        'dest_dir_ro' => 'æÌåÉ Çáãáİ %s ÛíÑ ŞÇÈá ááßÊÇÈÉ !',
        'err_move' => 'ãä ÇáãÓÊÍíá äŞá %s Çáì %s !',
        'err_fsize_too_large' => 'ÇáÕæÑ ÇáÊí ÊÑíÏ ÊÍãíáåÇ ßÈíÑÉ ÌÏÇ (ÇßÈÑ ÍÌã ááÕæÑÉ åæ %s x %s) !',
        'err_imgsize_too_large' => 'ÇáÕæÑ ÇáÊí ÊÑíÏ ÊÍãíáåÇ ßÈíÑÉ ÌÏÇ (ÇßÈÑ ÍÌã ááÕæÑÉ åæ %s KB) !',
        'err_invalid_img' => 'ÇáÕæÑÉ ÇáÊí Êã ÊÍãíáåÇ ÛíÑ ÕÇáÍÉ !',
        'allowed_img_types' => 'ÊÓÊØíÚ ÊÍãíá %s ÕæÑÉ.',
        'err_insert_pic' => 'ÇáÕæÑÉ \'%s\' áÇ íãßä ÊÎÒíåÇ İí ÇáÇáÈæã ',
        'upload_success' => 'Êãã ÊÍãíá ÇáÕæÑÉ ÈäÌÇÍ<br /><br />Óæİ ÊÑÇåÇ ÈÚÏ ãæÇİŞÉ ÇáãÏíÑ.',
  'notify_admin_email_subject' => '%s - ÇáÊÈáíÛ', //cpg1.3.0
  'notify_admin_email_body' => 'í ÕæÑÉ ÃõÑÓáÊú ãöä ŞöÈá %s ÇáĞí ÊóÍÊÇÌõ ãæÇİŞÊóßö. ÒíÇÑÉ %s', //cpg1.3.0
        'info' => 'ãÚáæãÇÊ',
        'com_added' => 'Êã ÇÖÇİÉ ÇáÊÚáíŞ',
        'alb_updated' => 'Êã ÊÍÏíË ÇáÇáÈæã',
        'err_comment_empty' => 'áã ÊßÊÈ ÇáÊÚáíŞ !',
        'err_invalid_fext' => 'Óæİ íÓãÍ ÈÇáãáİÇÊ ÇáÊí ÊäÊåí ÈÜ : <br /><br />%s.',
        'no_flood' => 'äÃÓİ áßäß ÇäÊ ßäÊ ÂÎÑ ãÚáŞ Úáì åĞå ÇáÕæÑÉ<br /><br />ÊÓÊØíÚ ÊÛííÑ ÊÚáíŞß Úáì ÇáÕæÑÉ',
        'redirect_msg' => 'ÓíÊã ÊÍæáíß Çáì ÕİÍÉ ÇÎÑì.<br /><br /><br />ÇÖÛØ Úáì  \'ÇÓÊãÜÜÑ\' Çä áã íÊã ÇÚÇÏÉ ÊäÔíØ ÇáÕİÍÉ ÊáŞÇÆíÇ',
        'upl_success' => 'Êã ÊÍãíá ÇáÕæÑÉ ÈäÌÇÍ',
  'email_comment_subject' => 'ÇÑÓá ÇáÊÚáíŞ ááãÚÑÖ', //cpg1.3.0
  'email_comment_body' => 'ãÓÊÎÏã ÇÑÓá ÊÚáíŞ Úáì ÇáÈæãß ÔÇåÏå', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
        'caption' => 'ÇáÚäæÇä',
        'fs_pic' => 'ÕæÑÉ ÈÇáÍÌã ÇáØÈíÚí',
        'del_success' => 'Êã ÇáÛÇÁåÇ ÈäÌÇÍ',
        'ns_pic' => 'ÕæÑÉ ÈÇáÍÌã ÇáØÈíÚí',
        'err_del' => 'áÇ íãßä ÇáÛÇÁå',
        'thumb_pic' => 'ãÎÊÕÑ',
        'comment' => 'ÊÚáíŞ',
        'im_in_alb' => 'ÕæÑÉ İí ÇáÇáÈæã',
        'alb_del_success' => 'ÇáÇáÈæã \'%s\' Êã ÇáÛÇÁå',
        'alb_mgr' => 'ãÏíÑ ÇáÇáÈæã',
        'err_invalid_data' => 'ÈíÇäÇÊ ÛíÑ ÕÇáÍÉ Êã ÇÓÊŞÈÇáåÇ İí \'%s\'',
        'create_alb' => 'ÌÇÑí Êßæíä ÇáÇáÈæã \'%s\'',
        'update_alb' => 'ÌÇÑí ÊÍÏíË ÇáÇáÈæã \'%s\' ÈÇáÚäæÇä \'%s\' æÇáİåÑÓ \'%s\'',
        'del_pic' => 'ÇáÛÇÁ ÇáÕæÑÉ',
        'del_alb' => 'ÇáÛí ÇáÇáÈæã',
        'del_user' => 'ÇáÛí ÇáãÓÊÎÏã',
        'err_unknown_user' => 'ÇáãÓÊÎÏã ÇáãÎÊÇÑ ÛíÑ ãæÌæÏ !',
        'comment_deleted' => 'Êã ÇáÛÇÁ ÇáÊÚáíŞ ÈäÌÇÍ',
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
  'confirm_del' => 'åá ÃäÊ ãÊÃßÏ áÅáÛÇÁ ÇáÕæÑÉ ? \\nÓíÊã ÇáÛÇÁ ÇáÊÚáíŞÇÊ ÇíÖÇ', //js-alert //cpg1.3.0
  'del_pic' => 'ÃÖÛØ áãÓÜÍ åĞå ÇáÕæÑÉ', //cpg1.3.0
  'size' => '%s İí %s äŞØÉ',
  'views' => '%s ãÜÑÇÊ',
  'slideshow' => 'ÚÑÖ ÇáÔÑÇÆÍ',
  'stop_slideshow' => 'ÇíŞÇİ ÚÑÖ ÇáÔÑÇÆÍ',
  'view_fs' => 'ÇÖÛØ áÊßÈíÜÑ ÇáÕæÑÉ',
  'edit_pic' => 'ÍÑÑ æÕİ ÇáÕæÑÉ', //cpg1.3.0
  'crop_pic' => 'Crop and Rotate', //cpg1.3.0
);

$lang_picinfo = array(
        'title' =>'ãÚáæãÇÊ Úä ÇáÕæÑÉ',
        'Filename' => 'ÇÓã Çáãáİ',
        'Album name' => 'ÇÓã ÇáÃáÈæã',
        'Rating' => 'ÊŞííã (%s ÊÕæíÊ)',
        'Keywords' => 'ÇáßáãÇÊ ÇáÑøÆíÓíøÉ ',
        'File Size' => 'ÍÌã Çáãáİ',
        'Dimensions' => 'ÇáÃÈÚÇÏ ',
        'Displayed' => 'ÚÏÏ ãÑÇÊ ÇáãÔÇåÏÉ',
        'Camera' => 'ÂáÉ ÇáÊÕæíÑ',
        'Date taken' => 'ÊÇÑíÎ ÇáÊŞÇØ ÇáÕæÑÉ',
        'Aperture' => 'ÇáÚÏÓÉ ',
        'Exposure time' => 'æŞÊ ÇáÊøÚÑøÖ ',
        'Focal length' => 'ÇáÈÚÏ ÇáÈÄÑíø ',
        'Comment' => 'ãáÇÍÙÇÊ',
        'addFav'=>'ÇÖİ Çáì ÇáãİÖáÉ',
        'addFavPhrase'=>'ÇáãİÖáÉ',
        'remFav'=>'ÇáÛ ãä ÇáãİÖáÉ',
  'iptcTitle'=>'IPTC ÚäæÇä', //cpg1.3.0
  'iptcCopyright'=>'IPTC ÍŞæŞ', //cpg1.3.0
  'iptcKeywords'=>'IPTC äÕ', //cpg1.3.0
  'iptcCategory'=>'IPTC ŞÓã', //cpg1.3.0
  'iptcSubCategories'=>'IPTC ÇáŞÓã ÇáİÑÚí áÜ', //cpg1.3.0
);

$lang_display_comments = array(
        'OK' => 'ÍÓäÜÇ',
        'edit_title' => 'áÊÍÜÑíÑ ÇáãáÇÍÙÇÊ',
        'confirm_delete' => 'åá ÃäÊ ãÊÃßÜÏ áÍÜĞİ åĞå ÇáãáÇÍÙÇÊ ?',
        'add_your_comment' => 'ÃÏÎÜá ãáÇÍÙÇÊß',
        'name'=>'ÇáÇÓã',
        'comment'=>'ÊÚáíŞ',
        'your_name' => 'ãÌåæá',
);

$lang_fullsize_popup = array(
        'click_to_close' => 'ÇÖÛØ Úáì ÇáÕæÑÉ áÇÛáÇŞ ÇáäÇİĞÉ',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
        'title' => 'ÇÑÓÇá ßÑÊ ãÚÇíÏÉ',
        'invalid_email' => '<b>ÊäÈÜíå</b> : ÇáÈÑíÏ ÇáÇáßÊÑæäí ÎØÃ !',
        'ecard_title' => 'ßÑÊ ãä  %s áß',
  'error_not_image' => 'İŞØ ÇáÕæÑ ÇáÊí ÊÑÓá ßÈØÇŞÉ ÈÑíÏíÉ.', //cpg1.3.0
        'view_ecard' => 'Çä áã íÙåÑ ÇáßÑÊ ÈÇáÕæÑÉ ÇáÕÍíÍÉ, ÇÖÛØ åäÇ',
        'view_more_pics' => 'ÇÖÛØ åäÇ áÑÄíÉ ÇáãÒíÏ ãä ÇáÕæÑ !',
        'send_success' => 'Êã ÇÑÓÇá ßÑÊß',
        'send_failed' => 'äÃÓİ áßä ÇáÎÇÏã áÇ íÓÊØíÚ ÇÑÓÇá ÇáßÑÊ...',
        'from' => 'ãä',
        'your_name' => 'ÇÓãß',
        'your_email' => 'ÇáÈÑíÏ ÇáÃáßÊÑæäí',
        'to' => 'Çáì',
        'rcpt_name' => 'ÇÓã ÇáãÑÓá Çáíå',
        'rcpt_email' => 'ÈÑíÏ ÇáãÑÓá Çáíå ÇáÇáßÊÑæäí',
        'greetings' => 'ÇáÊÍíÉ',
        'message' => 'ÇáÑÓÇáÉ',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'ãÚáæãÇÊ ÇáÕæÑÉ', //cpg1.3.0
  'album' => 'ÇáÈæã',
  'title' => 'ÚäæÇä ÇáÕæÑÉ',
  'desc' => 'æÕİ æÔÑÍ Úä ÇáÕæÑÉ',
  'keywords' => 'ÇáßáãÇÊ ÇáÏáíáíÉ ááÈÍË',
  'pic_info_str' => '%s &times; %s - %sßíáæÈÇíÊ - %s ãÔÇåÏÉ - %s ÊÕæíÊÇÊ',
  'approve' => 'ÇÚÊãÏ ÇáÕæÑÉ', //cpg1.3.0
  'postpone_app' => 'ÊÃÌíá ÇáãæÇİŞÉ',
  'del_pic' => 'ÍĞİ ÇáÕæÑÉ', //cpg1.3.0
  'read_exif' => 'ÅŞÑÃú ãÚáæãÇÊó EXIF ËÇäíÉğ', //cpg1.3.0
  'reset_view_count' => 'ÊÕİíÑ ÚÏÇÏ ÇáãÔÇåÏÇÊ',
  'reset_votes' => 'ÊÕİíÑ ÇáÊŞííã',
  'del_comm' => 'ÇÍĞİ ÇáÊÚáíŞÇÊ',
  'upl_approval' => 'ÇáãæÇİŞÉ Úáì ÇáÕæÑÉ',
  'edit_pics' => 'ÊÍÑíÑ ÇáÕæÑ', //cpg1.3.0
  'see_next' => 'ÇáÕæÑÉ ÇáÊÇáíÉ', //cpg1.3.0
  'see_prev' => 'ÇáÕæÑÉ ÇááÇÍŞÉ', //cpg1.3.0
  'n_pic' => '%s ÇáÕæÑ', //cpg1.3.0
  'n_of_pic_to_disp' => 'ÚÏÏ ÇáÕæÑ ÇáãÚÑæÖÉ', //cpg1.3.0
  'apply' => 'ÍİÙ ÇáÊÚÏíáÇÊ', //cpg1.3.0
  'crop_title' => 'ãÍÑÑ ÕæÑ ÇáãÚÑÖ', //cpg1.3.0
  'preview' => 'ÇáÚÑÖ', //cpg1.3.0
  'save' => 'ÇÍİÙ ÇáÕæÑÉ', //cpg1.3.0
  'save_thumb' =>'ÇÍİÙ ßãÕÛÑÉ', //cpg1.3.0
  'sel_on_img' =>'ÇáÅÎÊíÇÑ íÌÈ Ãä íßæä ßáíøÇ Úáì ÇáÕæÑÉ!', //js-alert //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'ÇáÇÓÆáÉ ÇáãÊßÑÑÉ', //cpg1.3.0
  'toc' => 'ÌÏæá ÇáãÍÊæíÇÊ', //cpg1.3.0
  'question' => 'ÇáÓÄÇá: ', //cpg1.3.0
  'answer' => 'ÇáÌæÇÈ: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'ÇáÃÓÆáÉ ÇáãåãÉ', //cpg1.3.0
  array('áãÇĞÇ ÃÍÊÇÌ ááÊÓÌíá¿', 'Registration may or may not be required by the administrator. Registration gives a member additional features such as uploading, having a favorite list, rating pictures and posting comments etc.', 'allow_user_registration', '0'), //cpg1.3.0
  array('ßíİ ÃÓÌøá¿', 'áßí ÊŞæã ÈÚãáíÉ ÇáÊÓÌíá ÇĞåÈ Çáì ÑÇÈØ ( <b>
ÇáÊÓÌíá</b> ) ÊÌÏå ÇÚáì ÇáÕİÍÉ æãä Ëã ÇãáÃ ÌãíÚ ÇáÍŞæá ÇáãØáæÈÉ æÇäÊÙÑ æÕæá
ÑÓÇáÉ áÊÃßÈÏ ÊÓÌíáß İí ÍÇáÉ Ãä ÇáÊÓÌíá íÊØáÈ ÊÃßíÏ ÇáÑÓÇáÉ ÇáÈÑíÏíÉ ÇáŞÇÏãÉ Çáíß
ÊÍæí ÑÇÈØ áÊİÚíá ÇÔÊÑÇßß áßí ÊŞæã ÈÊÍãíá ÇáÕæÑ ááãæŞÚ', 'allow_user_registration', '1'), //cpg1.3.0
  array('ßíİ ÇÏÎá ááãÚÑÖ¿', 'áßí íÊã ÏÎæáß Åáì ÇáãæŞÚ ÇĞåÈ Åáì ÑÇÈØ ( ÏÎæá ) ÇÚáì ÇáÕİÍÉ æãä Ëã
ÇÏÎá ÇÓã ÇáãÓÊÎÏã æßáãÉ ÇáãÑæÑ<br /><b>ãáÇÍÙÉ ÇáãÚÑÖ íÍÊæí Úáì ãíÒÉ ÇáßæßíÒ
İÊİÚíáå ãåã áß áßí ÊÏÎá ÇáãæŞÚ ÊáŞÇÆíÇ İí ÇáãÑÇÊ ÇáŞÇÏãÉ Ïæä ÇáÍÇÌÉ Çáì ÊßÑÇÑ
ÇáÚãáíÉ İí ßá ÒíÇÑÉ áÊãßä ÇáßæßíÒ&nbsp; ÇäŞÑ Úáì ÒÑ &quot;ÊĞßÑ äí&quot;.</b></p>
</b>', 'offline', 0), //cpg1.3.0
  array('áãÇĞÇ áÇ ÇÓÊØíÚ ÇáÏÎæá ááãÚÑÖ ¿', 'åá ÓÌøáÊ æäŞÑÊ Úáì ÇáæÕáÉ ÇáÊí ÃÑÓáÊ Åáíß Úä ØÑíŞ ÇáÈÑíÏ ÇáÅáßÊÑæäí¿ . ÇáæÕáÉ ÓÊäÔøØ ÍÓÇÈß. åĞå åí ÇáãÔßáÉ Çä áãÊÍá İÇÊÕá ÈãÏíÑ ÇáãÚÑÖ.', 'offline', 0), //cpg1.3.0
  array('ãÇĞÇ áæ  äÓíÊ ßáãÉ ÇáãÑæÑ¿', 'ÇäŞÑ Úáì ÑÇÈØ áŞÏ äÓíÊ ßáãÉ ÇáãÑæÑ İí ÇÓİá ÇáÍŞæá ÇáãÎÕÕÉ ááÏÎæá ÈÚÏ äŞÑ ÒÑ ÏÎæá Óæİ ÊÌÏ ÍŞá ÎÇÕ ÈÚäæÇä ÈÑíÏß ÇÏÎá ÚäæÇä ÇáÈÑíÏ ÇáĞí ÓÌáÊ Èå æÓÊÕáß ÑÓÇáÉ ÈÑíÏíÉ ÈßáãÉ ãÑæÑ ÌÏíÏÉ', 'offline', 0), //cpg1.3.0
  //array('What if I changed my email address?', 'Just simply login and change your email address through &quot;Profile&quot;', 'offline', 0), //cpg1.3.0
  array('ßíİ ÇÍİÙ ÕæÑí ÇáãİÖáÉ İí ãİÖáÊí ÇáÎÇÕÉ ¿', 'ÇäŞÑ Úáì ÇáÕæÑÉ ÇáãØáæÈÉ æãäËã ÓÊÌÏ ÇÓİá ãÚáæãÇÊ ÇáÕæÑÉ ÑÇÈØ ÇÖÇİÉ Åáì ÇáãİÖáÉ íÊØáÈ Ğáß Ãä Êßæä ÚÖæÇ İí ÇáãÚÑÖ<br />.', 'offline', 0), //cpg1.3.0
  array('ÇáÓÄÇá?', 'ÍæÇÈå.', 'offline', 0), //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'ÑÓÇáÉ ÊĞßíÑ áßáãÉ ÇáãÑæÑ', //cpg1.3.0
  'err_already_logged_in' => 'ÇäÊ ÈÇáİÚá ãÓÌá İí ÇáãÚÑÖ !', //cpg1.3.0
  'enter_username_email' => 'ÇÏÎá ÇÓã ÇáãÓÊÎÏã Çæ ÚäæÇä ÈÑíÏß', //cpg1.3.0
  'submit' => 'ÇÑÓá', //cpg1.3.0
  'failed_sending_email' => 'åäÇß ÎØÃ ãÇ áÇíãßä ÇÑÓÇá ÑÓÇáÉ ÊĞßíÑ ÈßáãÉ ÇáãÑæÑ áÈÑíÏß !', //cpg1.3.0
  'email_sent' => 'ÇÑÓáÊ ßáãÉ ÇáãÑæÑ ÇáÊĞßíÑíÉ Çáì ÈÑíÏß ÑÇÌÚ ÈÑíÏß %s', //cpg1.3.0
  'err_unk_user' => 'ÎØÃ: áÇíæÌÏ áÏíäÇ ãÓÊÎÏãÇ ÈåĞÇ ÇáÇÓã ÍÇæá ãÑÉ ÇÎÑì', //cpg1.3.0
  'passwd_reminder_subject' => '%s - ÑÓÇáÉ ÊĞßíÑ ÈßáãÉ ÇáãÑæÑ', //cpg1.3.0
  'passwd_reminder_body' => 'ÈíÇäÇÊß áÏíäÇ İí ÇáãÚÑÖ åí:
ÇÓã ÇáãÓÊÎÏã: %s
ßáãÉ ÇáãÑæÑ: %s
ÇäŞÑ åäÇ %s ááÏÎæá.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
        'group_name' => 'ÇÓã ÇáãÌãæÚÉ',
        'disk_quota' => 'ãÓÇÍÉ ÇáÊÎÒíä ÇáãÓãæÍÉ',
        'can_rate' => 'áÇ ÇÓÊØíÚ ÊŞííã ÇáÕæÑ',
        'can_send_ecards' => 'íÓÊØíÚ ÇÑÓÇá ÇáÕæÑÉ ßÈÑíÏ',
        'can_post_com' => 'íÓÊØíÚ ÇÖÇİÉ ÊÚáíŞÇÊ',
        'can_upload' => 'íÓÊØíÚ ÊÍãíá ÇáÕæÑ',
        'can_have_gallery' => 'íÓÊØíÚ ÇáÍÕæá Úáì ãÚÑÖ ÔÎÕí',
        'apply' => 'ÊÎÒíä ÇáÊÚÏíáÇÊ',
        'create_new_group' => 'Êßæíä ãÌãæÚÉ ãÓÊÎÏãíä ÌÏíÏÉ',
        'del_groups' => 'ÇáÛÇÁ ÇáãÌãæÚÇÊ ÇáãÎÊÇÑÉ',
        'confirm_del' => 'ÊÍĞíÑ, ÚäÏãÇ ÊãÓÍ ãÌãæÚÉ, ÓíÊã äŞá ÇáãÓÊÎÏãíä İí åĞå ÇáãÌãæÚÉ Çáì ŞÇÆãÉ \'ÇáãÓÌáíä\' !\n\nåá ÊæÏ ÇÓÊßãÇá ÇáÚãáíÉ  ?',
        'title' => 'ÇÏÇÑÉ ãÌãæÚÇÊ ÇáãÓÊÎÏãíä',
        'approval_1' => 'ãæÇİŞÉ ÊÍãíá ÚÇãÉ (1)',
        'approval_2' => 'ãæÇİŞÉ ÊÍãíá ÚÇãÉ (2)',
  'upload_form_config' => 'ÇÎÊíÇÑ ØÑíŞÉ ÇáÊÍãíá', //cpg1.3.0
  'upload_form_config_values' => array( 'ÊÍãíá ÕæÑÉ æÍíÏÉ', 'ÊÍãíá ÚÏÉ ãáİÇÊ', 'æÖÚ ÑÇÈØ ááÕæÑÉ İŞØ', 'ãáİ ãÖÛæØ zip İŞØ', 'ÇáÕæÑÉ-ÑÇÈØ', 'ÑÇÈØ-ZIP', 'ÑÇÈØ-ZIP', 'ÇáÕæÑÉ-ÑÇÈØ-ZIP'), //cpg1.3.0
  'custom_user_upload'=>'ÇáãÓÊÚãá åá íãßä Ãä íİÕøá ÚÏÏ ÕäÇÏíŞ ÇáÊÍãíá¿', //cpg1.3.0
  'num_file_upload'=>'ÇáÍÏ ÇáÇÚáì ãä ÕäÇÏíŞ ÇáÊÍãíá', //cpg1.3.0
  'num_URI_upload'=>'ÇáÍÏ ÇáÇÚáì ãä ÑæÇÈØ ÇáÊÍãíá', //cpg1.3.0
        'note1' => '<b>(1)</b> ÇáÊÍãíá İí ÇáÇáÈæã ÇáÚÇã íÍÊÇÌ ãæÇİŞÉ ÇáãÏíÑ',
        'note2' => '<b>(2)</b> ÇáÊÍãíáÇÊ ÇáÊí íãßáåÇ ÇáãÓÊÎÏã ÊÍÊÇÌ ãæÇİŞÉ ÇáãÏíÑ',
        'notes' => 'ãáÇÍÙÇÊ'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'ÇáÓáÇã Úáíßã æÑÍãÉ Çááå æÈÑßÇÊå ÇåáÇ Èß íÇ !',
);

$lang_album_admin_menu = array(
        'confirm_delete' => 'åá ÃäÊ ãÊÃßÏ áÃáÛÇÁ åĞå ÇáÕæÑÉ ? \\nAll pictures and comments will also be deleted.',
        'delete' => 'ÇáÛÇÁ ÇáÕæÑÉ',
        'modify' => 'ÊÍÏíË ÇáÃáÈæã',
        'edit_pics' => 'ÊÍÑíÑ ÇáÕæÑÉ',
);

$lang_list_categories = array(
        'home' => 'Home',
        'stat1' => '<b>[pictures]</b> ÕæÑÉ İí <b>[albums]</b> ÇáÈæã æ <b>[cat]</b> ÊÕäíİÇÊ ãÚ <b>[comments]</b> ÊÚáíŞÇÊ ÔæåÏÊ <b>[views]</b> ãÑÉ',
        'stat2' => '<b>[pictures]</b> ÕæÑÉ İí <b>[albums]</b> ÇáÈæã æÔæåÏÊ <b>[views]</b> ãÑÉ',
        'xx_s_gallery' => 'ãÚÑÖ %s',
        'stat3' => '<b>[pictures]</b> ÕæÑÉ İí <b>[albums]</b> ÇáÈæã ãÚ <b>[comments]</b> ÊÚáíŞÇÊ ÔæåÏÊ <b>[views]</b> ãÑÉ'
);

$lang_list_users = array(
        'user_list' => 'ŞÇÆãÉ ÇáãÓÊÎÏãíä',
        'no_user_gal' => 'áÇ íæÌÏ ãÓÊÎÏãíä íãßä Çä íßæä áåã ÇáÈæãÇÊ',
        'n_albums' => '%s ÇáÈæã',
        'n_pics' => '%s ÕæÑÉ/ÕæÑ'
);

$lang_list_albums = array(
        'n_pictures' => '%s ÕæÑÉ',
        'last_added' => ', ÂÎÑ ÕæÑÉ ÇÖíİÊ İí %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
        'login' => 'ÇáÏÎæá',
        'enter_login_pswd' => 'ÇÏÎá ÇáßäíÉ æßáãÉ ÇáÓÑ ááÏÎæá',
        'username' => 'ÇÓã ÇáãÊÓÎÏã',
        'password' => 'ßáãÉ ÇáãÑæÑ',
        'remember_me' => 'ÊĞßÑäí',
        'welcome' => 'ÍíÇß Çááå  %s ...',
        'err_login' => '*** áã ÇÓÊØÚ ÇáÏÎæá ÍÇæá ãÑÉ ÇÎÑì ***',
        'err_already_logged_in' => 'áŞÏ Êã ÊÓÌíá ÏÎæáß ãÓÈŞÇ !',
  'forgot_password_link' => 'áŞÏ äÓíÊ ßáãÉ ÇáãÑæÑ', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
        'logout' => 'ÎÑæÌ',
        'bye' => 'İí ÍİÙ Çááå æÑÚÇíÊå íÇ %s ...',
        'err_not_loged_in' => 'áã ÊÓÌá ÇáÏÎæá !',
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
        'upd_alb_n' => 'ÊÍÏíË ÇáÇáÈæã %s',
        'general_settings' => 'ÇÚÏÇÏÇÊ ÚÇãÉ',
        'alb_title' => 'ÚäæÇä ÇáÇáÈæã',
        'alb_cat' => 'ÊÕäíİ ÇáÇáÈæã',
        'alb_desc' => 'ÔÑÍ ÇáÇáÈæã',
        'alb_thumb' => 'äÈĞÉ ÇáÇáÈæã',
        'alb_perm' => 'ÕáÇÍíÇÊ ÇáÇáÈæã',
        'can_view' => 'ãÔÇåÏíä ÇáÇáÈæã åã',
        'can_upload' => 'ÇáÒæÇÑ íÓÊØíÚæä ÊÍãíá ÕæÑ',
        'can_post_comments' => 'ÇáÒæÇÑ íÓÊØíÚæä ÊÓÌíá ÊÚáíŞÇÊ',
        'can_rate' => 'ÇáÒæÇÑ íÓÊØíÚæä ÇáÊŞííã',
        'user_gal' => 'ÇáÈæã ÇáãÓÊÎÏãíä',
        'no_cat' => '* ÛíÑ ãÕäİ *',
        'alb_empty' => 'ÇáÇáÈæã İÇÑÛ',
        'last_uploaded' => 'ÂÎÑ ÊÍãíá',
        'public_alb' => 'ááÌãíÚ (ÇáÈæã ÚÇã)',
        'me_only' => 'áí İŞØ',
        'owner_only' => 'ãÇáß ÇáÇáÈæã (%s) İŞØ',
  'groupp_only' => 'ÇÚÖÇÁ ÇáãÌãæÚÉ \'%s\'',
  'err_no_alb_to_modify' => 'áÇ íæÌÏ ÇáÈæã ÊÓÊØíÚ ÊÚÏíáå İí ŞÇÚÏÉ ÇáÈíÇäÇÊ.',
  'update' => 'ÊÍÏíË ÇáÇáÈæã', //cpg1.3.0
  'notice1' => '(*) depending on %sgroups%s settings', //cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
        'already_rated' => 'äÃÓİ áßä ßäÊ ŞÏ ŞíãÊ åĞå ÇáÕæÑÉ ãÓÈŞÇ',
        'rate_ok' => 'Êã ŞÈæá ÊŞííãß',
  'forbidden' => 'áÇíãßäß ÊŞííã ÕæÑß ÇáÎÇÕÉ ÏÚ ÇáÂÎÑíä íŞíãæäåÇ.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
ÍíË Çä ãÏÑÇÁ ÇáãæŞÚ {SITE_NAME} ÓíŞæãæä ÈÊÚÏíá Çæ ÇáÛÇÁ ÇáÕæÑ ÇáÛíÑ ãÑÛæÈ İíåÇ, İãä ÇáÕÚÈ ãÑÇÌÚÉ ÌãíÚ ÇáÕæÑ. áĞÇ íÌÈ Úáíß ÇáÚáã Çä ÇáÕæÑ ÊãËá ÇÕÍÇÈåÇ İŞØ æáíÓ áåÇ ÚáÇŞÉ ÈÇáãÏÑÇÁ Ãæ ãÓÄæáíä ÇáÕİÍÉ (Çáì ÇĞÇ ŞÇãæ åã ÈĞáß) æÈÇáÊÇáí áä íÊÍãáæ ãÓÄæáíÉ Êáß ÇáÕæÑ.<br />
<br />
ÇäÊ ÊæÇİŞ Çäß áä ÊŞæã ÈÊÍãíá Çí ÕæÑ ãÑİæÖÉ, æŞÍÉ, ÎÇÑÌÉ Úä ÇááíÇŞÉ ÇáÚÇãÉ, ÊŞĞİ ÇáÛíÑ, ßÑÇåíÉ, ÊåÏÏ ÇáÛíÑ, ÌäÓíÉ Ãæ Çí ÕæÑ ÎÇÑÌÉ Úä äØÇŞ ÇáŞÇäæä. ÇäÊ ÊæÇİŞ Çä ãÓÄæá ÇáÕİÍÉ, ÇáãÏíÑ æÇáãÔÑİíä İí ÇáãæŞÚ {SITE_NAME} áåã ÇáÍŞ İí ÊÚÏíá æÇÒÇáÉ Çí ãÍÊæì İí Çí æŞÊ íÑæäå ãäÇÓÈÇ. æßãÇ ÊæÇİŞ Çä Êßæä ÇáÈíÇäÇÊ ÇáÊí ÊÏÎáåÇ Óæİ ÊÎÒä İí ŞÇÚÏÉ ÈíÇäÇÊ. æÍíË Çä åĞå ÇáãÚáæãÇÊ áä ÊÚáä áÔÎÕ ËÇáË Ïæä ãæÇŞŞÊß áä íÊÍãá ÇáãÓÄæá Çæ ãÏíÑ ÇáãæŞÚ Çí ÏÎæá ÊÎÑíÈí Úáì ÇáãæŞÚ íÊã Èå ãÚÑİÉ åĞå ÇáãÚáæãÇÊ.<br />
<br />
åĞÇ ÇáãæŞÚ íÓÊÚãá ÇáßæßíÒ áÊÎÒíä ÇáãÚáæãÇÊ Úáì ÌåÇÒß. åĞå ÇáßæßíÒ ÊÍÓä ãä ÇØáÇÚß Úáì ÇáÕæÑ İŞØ. æíÓÊÚãá ÇáÈÑíÏ ÇáÇáßÊÑæäí áÊÃßíÏ ÚãáíÉ ÊÓÌíáß æßáãÉ ÇáÓÑ.<br />
<br />
ÈÇáÖÛØ Úáì ÒÑ 'ÇæÇİŞ' Çä ÊæÇİŞ æÊáÒã ÈåĞå ÇáÔÑæØ.
EOT;

$lang_register_php = array(
        'page_title' => 'ÊÓÌíá ÇáãÓÊÎÏã',
        'term_cond' => 'ÇáÔÑæØ æÇáŞæÇÚÏ',
        'i_agree' => 'ÇæÇİŞ',
        'submit' => 'ÊÓÌíá ÇáØáÈ',
        'err_user_exists' => 'ÇáÇÓã ÇáĞí ÇÏÎáÊå ãæÌæÏ ãÓÈŞÇ, ÇáÑÌÇÁ ÇÓÊÎÏÇã ÇÓã ÂÎÑ',
        'err_password_mismatch' => 'ßáãÊí ÇáÓÑ áÇ íäØÈŞÇä¡ Úáíß ÇÏÎÇáåãÇ ãÑÉ ÇÎÑì',
        'err_uname_short' => 'íÌÈ Çä Êßæä ÇáßäíÉ Úáì ÇáÇŞá ÍÑİíä',
        'err_password_short' => 'íÌÈ Çä Êßæä ßáãÉ ÇáÓÑ Úáì ÇáÇŞá ÍÑİíä',
        'err_uname_pass_diff' => 'íÌÈ Çä Êßæä ÇáßäíÉ ãÎÊáİÉ Úä ßáãÉ ÇáÓÑ',
        'err_invalid_email' => 'ÇáÈÑíÏ ÇáÇáßÊÑæäí ÇáĞí ßÊÈÊå áÇ íÚãá',
        'err_duplicate_email' => 'ãÓÊÎÏã ÂÎÑ ãÓÌá áå äİÕ ÇáÈÑíÏ ÇáÇáßÊÑæäí',
        'enter_info' => 'ÇÏÎá ÈíÇäÇÊ ÇáÊÓÌíá',
        'required_info' => 'ãÚáæãÇÊ ãØáæÈÉ',
        'optional_info' => 'ãÚáæãÇÊ ÇÖÇİíÉ',
        'username' => 'ÇáßäíÉ',
        'password' => 'ßáãÉ ÇáÓÑ',
        'password_again' => 'ÇÚÏ ÇÏÎÇá ßáãÉ ÇáÓÑ',
        'email' => 'ÇáÈÑíÏ ÇáÇáßÊÑæäí',
        'location' => 'ÇáãßÇä',
        'interests' => 'ÇáÇåÊãÇãÇÊ',
        'website' => 'ÕİÍÊß',
        'occupation' => 'ÇáæÙíİÉ',
        'error' => 'ÎØÃ',
        'confirm_email_subject' => '%s - ÊÃßíÏ ÇáÊÓÌíá',
        'information' => 'ÈíÇäÇÊ',
        'failed_sending_email' => 'áã ÇÓÊØíÚ ÇÑÓÇá ÑÓÇáÉ ÊÃßíÏ ÇáÊÓÌíá !',
        'thank_you' => 'ÔßÑÇ Úáì ÇáÊÓÌíá.<br /><br />Êã ÇÑÓÇá ÈÑíÏ íæÖÍ ßíİíÉ ÊİÚíá ÇáÇÔÊÑÇß.',
        'acct_created' => 'Êã Êßæíä ÇÔÊÑÇßß æÊÓÊØíÚ ÇáÏÎæá ÈßäíÊß æßáãÉ ÇáÓÑ',
        'acct_active' => 'ÇÔÊÑÇßß İÚÇá ÇáÂä æÊÓÊØíÚ ÇáÏÎæá ÈßäíÊß æßáãÉ ÇáÓÑ',
        'acct_already_act' => 'ÇÔÊÑÇßß İÚÇá ãÓÈŞÇ !',
        'acct_act_failed' => 'áÇ íãßä ÊİÚíá åĞÇ ÇáÍÓÇÈ !',
        'err_unk_user' => 'ÇáãÓÊÎÏã ÇáãÎÊÇÑ ÛíÑ ãæÌæÏ !',
        'x_s_profile' => 'ÈíÇäÇÊ %s',
        'group' => 'ÇáãÌãæÚÉ',
        'reg_date' => 'ãÔÇÑß',
        'disk_usage' => 'ÇÓÊåáÇß ÇáÊÎÒíä',
        'change_pass' => 'ÊÛííÑ ßáãÉ ÇáÓÑ',
        'current_pass' => 'ßáãÉ ÇáÓÑ ÇáÍÇáíÉ',
        'new_pass' => 'ßáãÉ ÓÑ ÌÏíÏÉ',
        'new_pass_again' => 'ßáãÉ ÇáÓÑ ÇáÌÏíÏÉ ãÑÉ ÇÎÑì',
        'err_curr_pass' => 'ßáãÉ ÇáÓÑ ÇáÍÇáíÉ ÛíÑ ÕÍíÍÉ',
        'apply_modif' => 'ÊØÈíŞ ÇáÊÛííÑÇÊ',
        'change_pass' => 'ÛíÑ ßáãÉ ÇáÓÑ',
        'update_success' => 'Êã ÊÍÏíË ÈíÇäÇÊß',
        'pass_chg_success' => 'Êã ÊÛííÑ ßáãÉ ÇáÓÑ',
        'pass_chg_error' => 'áã ÊÊÛíÑ ßáãÉ ÇáÓÑ',
  'notify_admin_email_subject' => '%s - ÅÎØÇÑ ÊÓÌíá', //cpg1.3.0
  'notify_admin_email_body' => 'ÚÖæ ÌÏíÏ "%s" ÓÌá İí ãÚÑÖß', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
Thank you for registering at {SITE_NAME}

Your username is : "{USER_NAME}"
Your password is : "{PASSWORD}"

áÊİÚíá ÇáÍÓÇÈ Úáíß ÇáÖÛØ Úáì ÇáæÕáÉ ÈÇáÇÓİá
Çæ ÇäÓÎ æÇáÕŞ ÇáæÕáÉ İí ãÊÕİÍ ÇáÇäÊÑäÊ áÏíß.

{ACT_LINK}

Regards,

The management of {SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
        'title' => 'ãÑÇÌÚÉ ÇáÊÚáíŞÇÊ',
        'no_comment' => 'áÇ ÊÚáíŞÇÊ ááãÑÇÌÚÉ',
        'n_comm_del' => '%s ÊÚáíŞ ÇáÛí',
        'n_comm_disp' => 'ÚÏÏ ÇáÊÚáíŞÇÊ ÇáãÚÑæÖÉ',
        'see_prev' => 'ÇáÓÇÈŞ',
        'see_next' => 'ÇáÊÇáí',
        'del_comm' => 'ÇáÛÇÁ ÇáÊÚáíŞÇÊ ÇáãÎÊÇÑÉ',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
        0 => 'ÇÈÍË ãÌãæÚÉ ÇáÕæÑ',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
        'page_title' => 'ÇÈÍË ÇáÕæÑ ÇáÌÏíÏÉ',
        'select_dir' => 'ÇÎÊÑ ãÌáÏ',
        'select_dir_msg' => 'åĞå ÇáÚãáíÉ Êãßäß ãä ÇÖÇİÉ ßãíÉ ãä ÇáÕæÑ Êã ÊÍãíáåÇ ÈæÇÓØÉ FTP Çáì ÎÇÏã ÇáÕİÍÇÊ áÏíß.<br /><br />ÇÎÊÑ ÇáÏáíá ÍíË ŞãÊ ÈÚãáíÉ ÇáÊÍãíá ãÓÈŞÇ',
        'no_pic_to_add' => 'áÇ ÊæÌÏ ÕæÑÉ ÇÖíİåÇ',
        'need_one_album' => 'ÊÍÊÇÌ Úáì ÇáÇŞá ÇáÈæãÇ æÇÍÏÇ áåĞå ÇáÚãáíÉ',
        'warning' => 'ÊÍĞíÑ',
        'change_perm' => 'áÇ íÓÊØíÚ ÇáÈÑäÇãÌ ÇáÊÎÒíä İí åĞÇ ÇáÏáíá, ÊÍÊÇÌ ÊÛííÑ ÕáÇÍíÇÊ ÇáÏáíá Çáì 755 Çæ 777 ŞÈá ÇÖÇİÉ ÇáÕæÑ !',
        'target_album' => '<b>ÖÚ ÕæÑ &quot;</b>%s<b>&quot; İí </b>%s',
        'folder' => 'ãÌáÏ',
        'image' => 'ÕæÑÉ',
        'album' => 'ÇáÈæã',
        'result' => 'äÊíÌÉ',
        'dir_ro' => 'ÛíÑ ŞÇÈá ááÊÎÒíä. ',
        'dir_cant_read' => 'ÛíÑ ŞÇÈá ááŞÑÇÁÉ. ',
        'insert' => 'ÇÖÇİÉ ÕæÑ ÌÏíÏÉ ááãÚÑÖ',
        'list_new_pic' => 'ŞÇÆãÉ ÇáÕæÑ ÇáÌÏíÏÉ',
        'insert_selected' => 'ÊÎÒíä ÇáÕæÑ ÇáãÎÊÇÑÉ',
        'no_pic_found' => 'áÇ ÊæÌÏ ÕæÑ ÌÏíÏÉ',
        'be_patient' => 'ÇáÑÌÇÁ ÇáÕÈÑ¡ ÍíË íÍÊÇÌ ÇáÈÑäÇãÌ áÈÚÖ ãä ÇáæŞÊ áÇÖÇİÉ ÇáÕæÑ',
  'no_album' => 'áã ÊÎÊÑ ÇáÈæã',  //cpg1.3.0
  'notes' =>  '<ul>'.
                                '<li><b>OK</b> : íÚäí Çäå Êã ÇÖÇİÉ ÇáÕæÑ ÈäÌÇÍ'.
                                '<li><b>DP</b> : íÚäí Çä ÇáÕæÑÉ ãßÑÑÉ İí ŞÇÚÏÉ ÇáÈíÇäÇÊ æåí ãæÌæÏÉ İÚáÇ'.
                                '<li><b>PB</b> : ÊÚäí Çääí áã ÇÊãßä ãä ÇÖÇİÉ ÇáÕæÑÉ, ÊÃßÏ ãä ÇáÇÚÏÇÏÇÊ æãä ÕáÇÍíÇÊß İí ÊÎÒíä ÇáÕæÑÉ İí åĞÇ ÇáãÌáÏ'.
                          '<li><b>NA</b> : means that you haven\'t selected an album the files should go to, hit \'<a href="javascript:history.back(1)">back</a>\' and select an album. If you don\'t have an album <a href="albmgr.php">create one first</a></li>'.
                                '<li>ÇĞÇ ßÇä ÇáÑãÒ OK, DP, PB áÇ íÙåÑ ÇÖÛØ Úáì ÇáæÕáÉ ÇáãßÓæÑÉ áãÚÑİÉ ÓÈÈ ÚÏã ÙåæÑåÇ PHP'.
                                '<li>Çä áã íÑÏ Úáì ÇáãÊÕİÍ ÈÚÏ æŞÊ ßÇİ, ÇÖÛØ Úáì ÒÑ ÇÚÇÏÉ ÊÍãíá ÇáÕİÍÉ'.
                          '</ul>', //cpg1.3.0
  'select_album' => 'ÇÎÊÑ ÇáÈæã', //cpg1.3.0
  'check_all' => 'ÇÎÊÈÑ Çáßá', //cpg1.3.0
  'uncheck_all' => 'áÇ ÊÎÊÈÑ Çáßá', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
                'title' => 'ãäÚ ÇáãÓÊÎÏãíä',
                'user_name' => 'ÇÓã ÇáãÓÊÎÏã',
                'ip_address' => 'ÑŞã ÇáÇäÊÑäÊ',
                'expiry' => 'íäÊåí İí (İÇÑÛ íÚäí áÇ íäÊåí)',
                'edit_ban' => 'ÍİÙ ÇáÊÛííÑÇÊ',
                'delete_ban' => 'ÇáÛÇÁ',
                'add_new' => 'ÇÖÇİÉ ãäÚ ÌÏíÏ',
                'add_ban' => 'ÇÖÇİÉ',
  'error_user' => 'áÇíæÌÏ ãÓÊÎÏã', //cpg1.3.0
  'error_specify' => 'You need to specifiy either a user name or an IP address', //cpg1.3.0
  'error_ban_id' => 'ÇáãäÚ ÈÇØá!', //cpg1.3.0
  'error_admin_ban' => 'áÇÊÓÊØíÚ ãäÚ äİÓß!', //cpg1.3.0
  'error_server_ban' => 'You were going to ban your own server? Tsk tsk, cannot do that...', //cpg1.3.0
  'error_ip_forbidden' => 'You cannnot ban this IP - it is non-routable!', //cpg1.3.0
  'lookup_ip' => 'Lookup an IP address', //cpg1.3.0
  'submit' => 'ÇÑÓá!', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Upload file', //cpg1.3.0
  'custom_title' => 'Customized Request Form', //cpg1.3.0
  'cust_instr_1' => 'You may select a customized number of upload boxes. However, you may not select more than the limits listed below.', //cpg1.3.0
  'cust_instr_2' => 'Box Number Requests', //cpg1.3.0
  'cust_instr_3' => 'File upload boxes: %s', //cpg1.3.0
  'cust_instr_4' => 'ÑÇÈØ/ÑÇÈØ ÕäÏæŞ ÇáÊÍãíá: %s', //cpg1.3.0
  'cust_instr_5' => 'ÑÇÈØ/ÑÇÈØ äÏæŞ ÇáÊÍãíá:', //cpg1.3.0
  'cust_instr_6' => 'File upload boxes:', //cpg1.3.0
  'cust_instr_7' => 'Please enter the number of each type of upload box you desire at this time.  Then click \'Continue\'. ', //cpg1.3.0
  'reg_instr_1' => 'Invalid action for form creation.', //cpg1.3.0
  'reg_instr_2' => 'Now you may upload your files using the upload boxes below. The size of files uploaded from your client to the server should not exceed %s KB each. ZIP files uploaded in the \'File Upload\' and \'URI/URL Upload\' sections will remain compressed.', //cpg1.3.0
  'reg_instr_3' => 'If you want the zipped file or archive to be decompressed, you must use the file upload box provided in the \'Decompressive ZIP Upload\' area.', //cpg1.3.0
  'reg_instr_4' => 'When using the URI/URL upload section, please enter the path to the file like so: http://www.mysite.com/images/example.jpg', //cpg1.3.0
  'reg_instr_5' => 'When you have completed the form, please click \'Continue\'.', //cpg1.3.0
  'reg_instr_6' => 'Decompressive ZIP Uploads:', //cpg1.3.0
  'reg_instr_7' => 'File Uploads:', //cpg1.3.0
  'reg_instr_8' => 'ÑÇÈØ/ÑÇÈØ ÇáÊÍãíá:', //cpg1.3.0
  'error_report' => 'Error Report', //cpg1.3.0
  'error_instr' => 'The following uploads encountered errors:', //cpg1.3.0
  'file_name_url' => 'ÇÓã ÇáÕæÑÉ/ÑÇÈØ', //cpg1.3.0
  'error_message' => 'Error Message', //cpg1.3.0
  'no_post' => 'File not uploaded by POST.', //cpg1.3.0
  'forb_ext' => 'Forbidden file extension.', //cpg1.3.0
  'exc_php_ini' => 'Exceeded filesize allowed in php.ini.', //cpg1.3.0
  'exc_file_size' => 'Exceeded filesize permitted by CPG.', //cpg1.3.0
  'partial_upload' => 'Only a partial upload.', //cpg1.3.0
  'no_upload' => 'No upload occurred.', //cpg1.3.0
  'unknown_code' => 'Unknown PHP upload error code.', //cpg1.3.0
  'no_temp_name' => 'No upload - No temp name.', //cpg1.3.0
  'no_file_size' => 'Contains no data/Corrupted', //cpg1.3.0
  'impossible' => 'Impossible to move.', //cpg1.3.0
  'not_image' => 'Not an image/corrupt', //cpg1.3.0
  'not_GD' => 'Not a GD extension.', //cpg1.3.0
  'pixel_allowance' => 'Pixel allowance exceeded.', //cpg1.3.0
  'incorrect_prefix' => 'Incorrect URI/URL prefix', //cpg1.3.0
  'could_not_open_URI' => 'Could not open URI.', //cpg1.3.0
  'unsafe_URI' => 'Safety not verifiable.', //cpg1.3.0
  'meta_data_failure' => 'Meta data failure', //cpg1.3.0
  'http_401' => '401 Unauthorized', //cpg1.3.0
  'http_402' => '402 Payment Required', //cpg1.3.0
  'http_403' => '403 Forbidden', //cpg1.3.0
  'http_404' => '404 Not Found', //cpg1.3.0
  'http_500' => '500 Internal Server Error', //cpg1.3.0
  'http_503' => '503 Service Unavailable', //cpg1.3.0
  'MIME_extraction_failure' => 'MIME could not be determined.', //cpg1.3.0
  'MIME_type_unknown' => 'Unknown MIME type', //cpg1.3.0
  'cant_create_write' => 'Cannot create write file.', //cpg1.3.0
  'not_writable' => 'Cannot write to write file.', //cpg1.3.0
  'cant_read_URI' => 'Cannot read URI/URL', //cpg1.3.0
  'cant_open_write_file' => 'Cannot open URI write file.', //cpg1.3.0
  'cant_write_write_file' => 'Cannot write to URI write file.', //cpg1.3.0
  'cant_unzip' => 'Cannot unzip.', //cpg1.3.0
  'unknown' => 'Unknown error', //cpg1.3.0
  'succ' => 'Successful Uploads', //cpg1.3.0
  'success' => '%s uploads were successful.', //cpg1.3.0
  'add' => 'Please click \'Continue\' to add the files to albums.', //cpg1.3.0
  'failure' => 'Upload Failure', //cpg1.3.0
  'f_info' => 'File Information', //cpg1.3.0
  'no_place' => 'The previous file could not be placed.', //cpg1.3.0
  'yes_place' => 'The previous file was placed successfully.', //cpg1.3.0
  'max_fsize' => 'Maximum allowed file size is %s KB',
  'album' => 'Album',
  'picture' => 'File', //cpg1.3.0
  'pic_title' => 'File title', //cpg1.3.0
  'description' => 'File description', //cpg1.3.0
  'keywords' => 'Keywords (separate with spaces)',
  'err_no_alb_uploadables' => 'Sorry there is no album where you are allowed to upload files', //cpg1.3.0
  'place_instr_1' => 'Please place the files in albums at this time.  You may also enter relevant information about each file now.', //cpg1.3.0
  'place_instr_2' => 'More files need placement. Please click \'Continue\'.', //cpg1.3.0
  'process_complete' => 'You have successfully placed all the files.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
        'title' => 'ÇÏÇÑÉ ÇáãÓÊÎÏãíä',
        'name_a' => 'ÊÕÇÚÏí ÍÓÈ ÇáÇÓã',
        'name_d' => 'ÊäÇÒáí ÍÓÈ ÇáÇÓã',
        'group_a' => 'ÊÕÇÚÏí ÍÓÈ ÇáãÌãæÚÉ',
        'group_d' => 'ÊäÇÒáí ÍÓÈ ÇáãÌãæÚÉ',
        'reg_a' => 'ÊÕÇÚÏí ÍÓÈ ÊÇÑíÎ ÇáÊÓÌíá',
        'reg_d' => 'ÊäÇÒáí ÍÓÈ ÊÇÑíÎ ÇáÊÓÌíá',
        'pic_a' => 'ÊÕÇÚÏí ÍÓÈ ÚÏ ÇáÕæÑ',
        'pic_d' => 'ÊäÇÒáí ÍÓÈ ÚÏ ÇáÕæÑ',
        'disku_a' => 'ÊÕÇÚÏí ÍÓÈ ãÓÇÍÉ ÇáÊÎÒíä',
        'disku_d' => 'ÊäÇÒáí ÍÓÈ ãÓÇÍÉ ÇáÊÎÒíä',
  'lv_a' => 'ÍÓÈ ÇÎÑ ÇáÒíÇÑÇÊ ÊÕÇÚÏí', //cpg1.3.0
  'lv_d' => 'ÍÓÈ ÇÎÑ ÇáÒíÇÑÇÊ ÊäÇÒáí', //cpg1.3.0
        'sort_by' => 'ÑÊÈ ÇáãÓÊÎÏãíä ÍÓÈ',
        'err_no_users' => 'ÌÏæá ÇáãÓÊÎÏã İÇÑÛ !',
        'err_edit_self' => 'áÇ ÊÓÊØíÚ ÊÚÏíá ÈíÇäÇÊß ÇáÎÇÕÉ, ÇÓÊÚãá ÒÑ \'ÈíÇäÇÊí\' áĞáß',
        'edit' => 'ÊÚÏíá',
        'delete' => 'ÇáÛÇÁ',
        'name' => 'ÇÓã ÇáãÓÊÎÏã',
        'group' => 'ÇáãÌãæÚÉ',
        'inactive' => 'ãÚØá',
        'operations' => 'ÇáÚãáíÇÊ',
  'pictures' => 'ÇáÕæÑ', //cpg1.3.0
  'disk_space' => 'ãÓÇÍÉ ÇáÊÎÒíä ÇáãÓãæÍÉ / ßæÊÇ',
  'registered_on' => 'Êã ÊÓÌíáå İí',
  'last_visit' => 'ÇÎÑ ÇáÒíÇÑÇÊ', //cpg1.3.0
  'u_user_on_p_pages' => '%d ãÓÊÎÏã İí %d ÕİÍÉ/ÕİÍÇÊ',
        'confirm_del' => 'åá ÇäÊ ãÊÃßÏ ãä ÇáÛÇÁ åĞÇ ÇáãÓÊÎÏã ? \\nßá ÕæÑå æÇáÈæãÇÊå Óæİ ÊáÛì.',
        'mail' => 'ÈÑíÏ',
        'err_unknown_user' => 'ÇáãÓÊÎÏã ÇáãÎÊÇÑ ÛíÑ ãæÌæÏ !',
        'modify_user' => 'ÊÛííÑ ÇáãÓÊÎÏã',
        'notes' => 'ãáÇÍÙÇÊ',
        'note_list' => '<li>Çä áã ÊÑíÏ ÊÛííÑ ßáãÉ ÇáÓÑ, ÇÊÑß ãÑÈÚ ßáãÉ ÇáÓÑ İÇÑÛÇ',
  'password' => 'ßáãÉ ÇáãÑæÑ',
  'user_active' => 'ÇáãÓÊÚãá äÔØ',
  'user_group' => 'ãÌãæÚÇÊ ÇáãÓÊÎÏãíä',
  'user_email' => 'ÈÑíÏ ÇáãÓÊÎÏã',
  'user_web_site' => 'ãæŞÚ ÇáãÓÊÎÏã',
  'create_new_user' => 'ÇÖİ ãÓÊÎÏã ÌÏíÏ',
  'user_location' => 'ÈáÏ ÇáãÓÊÎÏã',
  'user_interests' => 'ÇåÊãÇãÇÊ ÇáãÓÊÎÏã',
  'user_occupation' => 'ãåäÉ ÇáãÓÊÎÏã',
  'latest_upload' => 'ÇáÇÖÇİÇÊ ÇáÇÎíÑÉ', //cpg1.3.0
  'never' => 'ÇÈÏÇ', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
  'title' => 'ÊÛííÑ ŞíÇÓ ÇáÕæÑÉ', //cpg1.3.0
        'what_it_does' => 'ãÇĞÇ ÊÚãá',
        'what_update_titles' => 'ÊÍÏíË ÇáÚäÇæíä ãä ÇÓãÇÁ ÇáãáİÇÊ',
        'what_delete_title' => 'ÇáÛÇÁ ÇáÚäÇæíä',
        'what_rebuild' => 'íÚÈÏ ÈäÇÁ ãÎÊÕÑÇÊ ÇáÕæÑ æíÚíÏ ŞíÇÓ ÇáÕæÑ',
        'what_delete_originals' => 'íáÛí ÇáÕæÑ ÇáãÚÇÏ ŞíÇÓåÇ ÇáÇÕáíÉ æ íÓÊÈÏáåã ÈÕæÑ ãÚÇÏ ŞíÇÓåÇ',
        'file' => 'ãáİ',
        'title_set_to' => 'ÇáÚäæÇä ãÍÏÏ Çáì',
        'submit_form' => 'ÓÌá',
        'updated_succesfully' => 'Êã ÊÍÏíËå ÈäÌÇÍ',
        'error_create' => 'ÎØÃ İí Êßæíä',
        'continue' => 'ãÚÇáÌÉ ÇáãÒíÏ ãä ÇáÕæÑ',
        'main_success' => 'Çáãáİ %s Êã ÇÓÊÚãÇáå ßÇáÕæÑÉ ÇáÑÆíÓíÉ',
        'error_rename' => 'ÎØÃ İí ÊÛííÑ ÇáÇÓã %s Çáì %s',
        'error_not_found' => 'Çáãáİ %s ÛíÑ ãæÌæÏ',
        'back' => 'ÇáÑÌæÚ Çáì ÇáÑÆíÓíÉ',
        'thumbs_wait' => 'ÊÍÏíË ãÎÊÕÑÇÊ ÇáÕæÑ æ/Çæ ÇáÕæÑ ÇáãÚÇÏ ŞíÇÓåÇ, ÇáÑÌÇÁ ÇáÇäÊÙÇÑ...',
        'thumbs_continue_wait' => 'ãÓÊãÑ İí ÊÍÏíË ãÎÊÕÑÇÊ ÇáÕæÑ Çæ/æ ÇáÕæÑ ÇáãÚÇÏ ŞíÇÓåÇ...',
        'titles_wait' => 'ÊÍÏíË ÇáÚäÇæíä, ÇáÑÌÇÁ ÇáÇäÊÙÇÑ...',
        'delete_wait' => 'ÇáÛÇÁ ÇáÚäÇæíä, ÇáÑÌÇÁ ÇáÇäÊÙÇÑ...',
        'replace_wait' => 'íÊã ÇáÛÇÁ ÇáÕæÑ ÇáÇÕáíÉ æíÊã ÇÓÊÈÏÇáå ÈÇÎÑì ãÚÇÏ ŞíÇÓåÇ, ÇáÑÌÇÁ ÇáÇäÊÙÇÑ..',
        'instruction' => 'ÊÚáíãÇÊ ÓÑíÚÉ',
        'instruction_action' => 'ÇÎÊÇÑ ÚãáíÉ',
        'instruction_parameter' => 'ÊÍÏíÏ ÇáãÊÛíÑÇÊ',
        'instruction_album' => 'ÇÎÊÑ ÇáÇáÈæã',
        'instruction_press' => 'ÇÖÛØ Úáì %s',
        'update' => 'ÊÍÏíË ÇáãÎÊÕÑÇÊ æ/Ãæ ÇÚÇÏÉ ÊŞííÓ ÇáÕæÑ',
        'update_what' => 'ãÇĞÇ íÌÈ ÊÍÏíËå',
        'update_thumb' => 'ãÎÊÕÑÇÊ ÇáÕæÑ İŞØ',
        'update_pic' => 'ÇáÕæÑ ÇáãÚÇÏ ŞíÇÓåÇ İŞØ',
        'update_both' => 'ÇáÕæÑ ÇáãÎÊÕÑÉ æÇáãÚÇÏ ŞíÇÓåÇ ãÚÇ',
        'update_number' => 'ÚÏÏ ÇáÕæÑ ÇáãÚÇáÌÉ ÈÇáÖÛØÉ',
        'update_option' => '(ÍÇá ÇáÊŞáíá ãä åĞÇ ÇáÇÚÏÇÏ Çä æÇÌåÊ ãÔÇßá ÇäÊåÇÁ ÇáæŞÊ)',
        'filename_title' => 'ÇÓã Çáãáİ &rArr; ÚäæÇä ÇáÕæÑÉ',
        'filename_how' => 'ßíİíÉ ÊÛííÑ ÇÓã Çáãáİ',
        'filename_remove' => 'ÇÒÇáÉ äåÇíÉ .jpg æ ÇÓÊÈÏÇá _ (ÔÑØÉ ÓİáíÉ) ÈÇáãÓÇİÇÊ',
        'filename_euro' => 'ÛíÑ 2003_11_23_13_20_20.jpg Çáì 23/11/2003 13:20',
        'filename_us' => 'íÛíÑ  2003_11_23_13_20_20.jpg Çáì  11/23/2003 13:20',
        'filename_time' => 'íÛíÑ  2003_11_23_13_20_20.jpg Çáì 13:20',
        'delete' => 'íáÛí ÚäÇæíä ÇáÕæÑ Çæ ÕæÑ ÇáŞíÇÓ ÇáÇÕáíÉ',
        'delete_title' => 'ÇáÛí ÚäÇæíä ÇáÕæÑ',
        'delete_original' => 'ÇáÛí ÕæÑ ÇáŞíÇÓ ÇáÇÕáíÉ',
        'delete_replace' => 'íáÛí ÇáÕæÑ ÇáÇÕáíÉ æíÓÊÈÏáåã ÈÇÎÑì ÈŞíÇÓ ãÎÊáİ',
        'select_album' => 'ÇÎÊÇÑ ÇáÇáÈæã',
  'delete_orphans' => 'ÇÍĞİ ÇáÚáíŞÇÊ (ÌãíÚ ÇáÇáÈæãÇÊ)', //cpg1.3.0
  'orphan_comment' => 'ÇáÊÚáíŞÇÊ ÇáÊí æÌÏÊ', //cpg1.3.0
  'delete' => 'ÍĞİ', //cpg1.3.0
  'delete_all' => 'ÍĞİ Çáßá', //cpg1.3.0
  'comment' => 'ÇáÊÚáíŞÇÊ: ', //cpg1.3.0
  'nonexist' => 'ÑÈØ ÈÇáãáİ ÇáÛíÑ ãæÌæÏ # ', //cpg1.3.0
  'phpinfo' => 'ÇÚÑÖ ãÚáæãÇÊ php', //cpg1.3.0
  'update_db' => 'ÊÑŞíÉ ŞæÇÚÏ ÇáÈíÇäÇÊ', //cpg1.3.0
  'update_db_explanation' => 'If you have replaced coppermine files, added a modification or upgraded from a previous version of coppermine, make sure to run the database update once. This will create the necessary tables and/or config values in your coppermine database.', //cpg1.3.0
);

?>
