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
// ENCODING CHECK; SHOULD BE YEN BETA MU: ¥ ß µ
// ------------------------------------------------------------------------- //
// CVS version: $Id: uighur-utf-8.php,v 1.4 2004/12/29 23:06:35 chtito Exp $
// ------------------------------------------------------------------------- //

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Uighur',
  'lang_name_native' => 'Uighur',
  'lang_country_code' => 'Uig',
  'trans_name'=> 'Abduwahit Semet.NEWRUZ',
  'trans_email' => 'abduwahit@yahoo.com or qumluq@yahoo.com.cn',
  'trans_website' => 'http://www.shehrizat.com/album',
  'trans_date' => '2004-08-30',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Yek', 'Dü', 'Sey', 'Char', 'Pey', 'Jüme', 'Shem');
$lang_month = array('Yanwar', ' Féwral', 'Mart', 'April', 'May', 'Iyun', 'Iyul', 'Awghust', 'Séntebir', 'öktebir', 'Noyabir', 'Dékabir');

// Some common strings
$lang_yes = 'Hee';
$lang_no  = 'Yaq';
$lang_back = 'Qaytish';
$lang_continue = 'Dawami';
$lang_info = 'Uchur';
$lang_error = 'Xataliq';

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
  'random' => 'Random Höjjet', //cpg1.3.0
  'lastup' => 'Yéngi Yükler',
  'lastalb'=> 'Yéngi özgermiler',
  'lastcom' => 'Yéngi Sözler',
  'topn' => 'köp körülgen',
  'toprated' => 'köp nomurluq',
  'lasthits' => 'Yéngi körülgini',
  'search' => 'Izdesh',
  'favpics'=> 'Könglümdikidek resim', //cpg1.3.0
);

$lang_errors = array(
  'access_denied' => 'Bu betning ziyaret hoqqoqingiz yoq.',
  'perm_denied' => 'Bu paaliyitingiz cheklinidu.',
  'param_missing' => 'Bu sizge bilazm paramétir.',
  'non_exist_ap' => 'Tallighan albüm/höjjet Yoq!', //cpg1.3.0
  'quota_exceeded' => 'Teqsim chektin ashti<br /><br />Teqsimingiz[quota]K, Ishletkiningiz[space]K, Bu höjjet bilen teqsim chektin ashidu.', //cpg1.3.0
  'gd_file_type_err' => 'Ishletken GD ambiringiz JPEG bilen PNG la qollaydu.',
  'invalid_image' => 'Yükingiz buzulghan yaki GD ambar bir terep qilalmaydu.',
  'resize_failed' => 'Kichiklitilme yaki özgertilme élip baralmidim.',
  'no_img_to_display' => 'Körünme Höjjet yoq',
  'non_exist_cat' => 'Tallanma Tür yoq',
  'orphan_cat' => 'Tallanma türi xata, Tür tallashtin özgertiwéling!', //cpg1.3.0
  'directory_ro' => 'Münderije \'%s\'  xatirlenmidi, netijide höjjetni öchürelmeysiz.', //cpg1.3.0
  'non_exist_comment' => 'Siz tallighan Söz yoq.',
  'pic_in_invalid_album' => 'Höjjet Mewhüm albümda (%s)!?', //cpg1.3.0
  'banned' => 'Siz békitimiz cheklidi.',
  'not_with_udb' => 'Albüm münber bilen birikturulgen, Bu iqtidar toxtitildi. Tengshek qollimaydu yaki münber bir terep qiliwatidu.',
  'offline_title' => 'Biliniye', //cpg1.3.0
  'offline_text' => 'Gallery Biliniyede - Sel turup sinang', //cpg1.3.0
  'ecards_empty' => 'Tor kartisi yoq. Tengshekte tor kartisi ijramiken!', //cpg1.3.0
  'action_failed' => 'Paaliyet tamam.  Coppermine teliwingizni orundiyalmaydu.', //cpg1.3.0
  'no_zip' => 'Höjjetni ZIP liyalmaysiz.  Albüm Atamani bilen alaqilishing.', //cpg1.3.0
  'zip_type' => 'ZIP höjjetni yükleshke biijazet.', //cpg1.3.0
);

$lang_bbcode_help = 'Paydilinish kodi: <li>[b]<b>Bold</b>[/b]</li> <li>[i]<i>Italic</i>[/i]</li> <li>[url=http://yoursite.com/]Url Text[/url]</li> <li>[email]user@domain.com[/email]</li>'; //cpg1.3.0

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'alb_list_title' => 'Albüm sehipisi qaytish',
  'alb_list_lnk' => 'Albüm sehipisi',
  'my_gal_title' => 'Albümimgha qaytimen',
  'my_gal_lnk' => 'Albümim',
  'my_prof_lnk' => 'Arxipim',
  'adm_mode_title' => 'Admingha aylinish',
  'adm_mode_lnk' => 'Admin Könümi',
  'usr_mode_title' => 'Qollanchi könümige aylinish',
  'usr_mode_lnk' => 'Qollanchi könümi',
  'upload_pic_title' => 'Albomgha höjjet yüklesh', //cpg1.3.0
  'upload_pic_lnk' => 'Höjjet yüklesh', //cpg1.3.0
  'register_title' => 'Qollanchi qoshush',
  'register_lnk' => 'Tizimlitish',
  'login_lnk' => 'Kiring',
  'logout_lnk' => 'Chiqing',
  'lastup_lnk' => 'Yéngi Yük',
  'lastcom_lnk' => 'Yéngi Söz',
  'topn_lnk' => 'Köp körüm',
  'toprated_lnk' => 'Yoquri Nomur',
  'search_lnk' => 'Izde',
  'fav_lnk' => 'Könglümdikisi',
  'memberlist_title' => 'Qollanchi tizimliki', //cpg1.3.0
  'memberlist_lnk' => 'Qollanchilar', //cpg1.3.0
  'faq_title' => 'Galleryning Daimliq soaligha jawap &quot;Coppermine&quot;', //cpg1.3.0
  'faq_lnk' => 'FAQ', //cpg1.3.0
);

$lang_gallery_admin_menu = array(
  'upl_app_lnk' => 'Bap Yüklesh',
  'config_lnk' => 'Tengshesh',
  'albums_lnk' => 'Albümlar',
  'categories_lnk' => 'Katégoriyiler',
  'users_lnk' => 'Qollanchilar',
  'groups_lnk' => 'Grouplar',
  'comments_lnk' => 'Pikirler', //cpg1.3.0
  'searchnew_lnk' => 'Höjjetber', //cpg1.3.0
  'util_lnk' => 'Ataman Arxipi', //cpg1.3.0
  'ban_lnk' => 'Cheklen`genler',
  'db_ecard_lnk' => 'Atrétkilar', //cpg1.3.0
);

$lang_user_admin_menu = array(
  'albmgr_lnk' => 'Albümimni/Qurush ',
  'modifyalb_lnk' => 'Albümimni Tehrirlesh',
  'my_prof_lnk' => 'Arxipim',
);

$lang_cat_list = array(
  'category' => 'Türler',
  'albums' => 'Albümlar',
  'pictures' => 'Höjjet', //cpg1.3.0
);

$lang_album_list = array(
  'album_on_page' => '%d albüm  %d bet(liri)',
);

$lang_thumb_view = array(
  'date' => 'DATE',
  //Sort by filename and title
  'name' => 'Höjjet nami',
  'title' => 'Tambet',
  'sort_da' => 'WAqt tertipi Yéqindin yiraqqa',
  'sort_dd' => 'WAqt tertipi yiraqtin yéqin`gha',
  'sort_na' => 'Nam Kichiktin chonggha',
  'sort_nd' => 'Nam Chongdin kichikke',
  'sort_ta' => 'Téma Kichiktin chonggha',
  'sort_td' => 'Téma Chongdin kichikke',
  'download_zip' => 'Zip Höjjitide yüklesh', //cpg1.3.0
  'pic_on_page' => '%d Höjjet %d Bet(liri)',
  'user_on_page' => '%d Qollanchi %d Bet(liri)', //cpg1.3.0
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Kichiklitilgen resim bétige qayting.',
  'pic_info_title' => 'Körünsün/Yoshurun höjjet information', //cpg1.3.0
  'slideshow_title' => 'Ret-ret körünsun',
  'ecard_title' => 'Resim é-card qilip yollansun.', //cpg1.3.0
  'ecard_disabled' => 'é-cards iqtidari toxtitilghan.',
  'ecard_disabled_msg' => 'Sizge é-cards ni ewertish hoquqi bérilmidi.', //js-alert //cpg1.3.0
  'prev_title' => 'Aldinqi höjjet', //cpg1.3.0
  'next_title' => 'Kéyinki höjjet', //cpg1.3.0
  'pic_pos' => 'Höjjet %s/%s', //cpg1.3.0
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Höjjetni bahalang ', //cpg1.3.0
  'no_votes' => '(Hichkim bahalimidi)',
  'rating' => '(Érishken nomuri : %s / 5 We %s nomur)',
  'rubbish' => 'Nacharken',
  'poor' => 'Sel nacharken',
  'fair' => 'Adettikidekla',
  'good' => 'Yaxshiken',
  'excellent' => 'Qaltis',
  'great' => 'Bek Qaltis',
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
  CRITICAL_ERROR => 'Jiddiy xataliq',
  'file' => 'Höjjet: ',
  'line' => 'Qur sani: ',
);

$lang_display_thumbnails = array(
  'filename' => 'Höjjet nami : ',
  'filesize' => 'Höjjet hejimi : ',
  'dimensions' => 'Keng_tarliqi : ',
  'date_added' => 'Ay_kün qoshush : ', //cpg1.3.0
);

$lang_get_pic_data = array(
  'n_comments' => '%s Pikir',
  'n_views' => '%s Qétim Körüldi',
  'n_votes' => '(%s Nomur)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Xata uchur', //cpg1.3.0
  'select_all' => 'Hemmini tallash', //cpg1.3.0
  'copy_and_paste_instructions' => 'If you\'re going to request help on the coppermine support board, copy-and-paste this debug output into your posting. Make sure to replace any passwords from the query with *** before posting.', //cpg1.3.0
  'phpinfo' => 'display phpinfo', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => 'Ataman Tilini Tallang', //cpg1.3.0
  'choose_language' => 'Tilingizni Tallang', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'Ataman tambétini tallang', //cpg1.3.0
  'choose_theme' => 'Tambéti tallang', //cpg1.3.0
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
  'Very Happy' => 'Bek xushhal',
  'Smile' => 'Külümsiresh',
  'Sad' => 'Azaplinish',
  'Surprised' => 'Heyran qélish',
  'Shocked' => 'Soghuq',
  'Confused' => 'Aylinip kétey',
  'Cool' => 'Epsus',
  'Laughing' => 'Külkilik',
  'Mad' => 'Sarang',
  'Razz' => 'Mesxire',
  'Embarassed' => 'Embarassed',
  'Crying or Very sad' => 'Crying or Very sad',
  'Evil or Very Mad' => 'Zeherxende',
  'Twisted Evil' => 'Ghelite',
  'Rolling Eyes' => 'Közini aylandurush',
  'Wink' => 'Aliyish',
  'Idea' => 'Diqqet',
  'Arrow' => 'Arrow',
  'Neutral' => 'Ara pozutsiye',
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
  0 => 'Bashqurush bölikidin ayrilish...',
  1 => 'Bashqurush bölikige qedem...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Albümgha nam béring !', //js-alert
  'confirm_modifs' => 'Choqum özgertemsiz ?', //js-alert
  'no_change' => 'Siz héchnimini özgertmidingiz !', //js-alert
  'new_album' => 'Yéngi albüm',
  'confirm_delete1' => 'Rastinla bu albümni öchürwetmekchimu?', //js-alert
  'confirm_delete2' => '\n Barliq höjjet we Sözler öchüp kétidu !', //js-alert
  'select_first' => 'Albüm tallang', //js-alert
  'alb_mrg' => 'Album Bashqurghuchisi',
  'my_gallery' => '* Méning galleryim *',
  'no_category' => '* Katégoriye yoq *',
  'delete' => 'Öcher',
  'new' => 'Qoshush',
  'apply_modifs' => 'Tüzitish',
  'select_category' => 'Katégoriyeni Tallash',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Meshghulatqa kéreklik \'%s\'miqdar teminlenmidi !',
  'unknown_cat' => 'Tallighan Katégoriye san ambirida yoq',
  'usergal_cat_ro' => 'Qollanchi galleries Katégoriyisidin öchürüshke bolmaydu !',
  'manage_cat' => 'Katégoriye bashqurush',
  'confirm_delete' => 'Bu Katégoriyeni rastinla öchüremsiz', //js-alert
  'category' => 'Katégoriye',
  'operations' => 'Meshghulat',
  'move_into' => 'gh yötkesh',
  'update_create' => 'Katégoriyeni Yéngilash/Qurush ',
  'parent_cat' => 'Ata Katégoriye',
  'cat_title' => 'Katégoriye munderijisi',
  'cat_thumb' => 'Katégoriye kichiklitilme süriti', //cpg1.3.0
  'cat_desc' => 'Katégoriye izahati',
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
  'title' => 'Tengshek',
  'restore_cfg' => 'Esli tengshekke qayturush',
  'save_cfg' => 'Tengshekni saqlash',
  'notes' => 'Diqqet',
  'info' => 'Uchur',
  'upd_success' => 'Tengshek yéngilandi',
  'restore_success' => 'Tengshek eslige keltürildi',
  'name_a' => 'Nam kichiktin chonggha',
  'name_d' => 'Nam chongdin kichikke',
  'title_a' => 'Tambet kichiktin chonggha',
  'title_d' => 'Tambet chongdin kichikke',
  'date_a' => 'Waqt yeqindin yiraqqa',
  'date_d' => 'Waqt yiraqtin yéqin`gha',
  'th_any' => 'Eng chong körüm',
  'th_ht' => 'Igizliki',
  'th_wd' => 'Kengliki',
  'label' => 'Munderije', //cpg1.3.0
  'item' => 'Tür', //cpg1.3.0
  'debug_everyone' => 'Herbir', //cpg1.3.0
  'debug_admin' => 'Atamanchün', //cpg1.3.0
        );

if (defined('CONFIG_PHP')) $lang_config_data = array(
  'Asasi tengshek',
  array('Albüm nami', 'gallery_name', 0),
  array('Albüm izahati', 'gallery_description', 0),
  array('Albüm atamani émaili', 'gallery_admin_email', 0),
  array('Adréslar ichide \'Téximu köp resim\' e-cards ulinishi', 'ecards_more_pic_target', 0),
  array('Albüm liniyesiz', 'offline', 1), //cpg1.3.0
  array('Écardlar Tizimi', 'log_ecards', 1), //cpg1.3.0
  array('Yaqturghanni ZIP-qilip saqliyalisun', 'enable_zipdownload', 1), //cpg1.3.0

  'Tiltüri, Tambetler &amp; Til reqemlik tengshiki',
  array('Tiltüri', 'lang', 5),
  array('Tambet', 'theme', 6),
  array('Til tallishi körünsun', 'language_list', 1), //cpg1.3.0
  array('Til tughi körünsun', 'language_flags', 8), //cpg1.3.0
  array('Körünüsh &quot;Qayata tengshesh&quot; Tambet tengshesh ichide', 'language_reset', 1), //cpg1.3.0
  array('Tambet Munderijisi', 'theme_list', 1), //cpg1.3.0
  array('Körünüsh &quot;Qayta tengshesh&quot; Tambet tengshesh ichide', 'theme_reset', 1), //cpg1.3.0
  array('Soal_jawab körünüsh', 'display_faq', 1), //cpg1.3.0
  array('bbcode Yardimi körünüsh', 'show_bbcode_help', 1), //cpg1.3.0
  array('Xet kodi', 'charset', 4), //cpg1.3.0

  'Albüm Körünishi',
  array('Asasliq jedwel kengliki (süzükliki or %)', 'main_table_width', 0),
  array('Tür körsitish sani', 'subcat_level', 0),
  array('Albüm sani', 'albums_per_page', 0),
  array('Albüm munderijisi qur sani', 'album_list_cols', 0),
  array('Kichiklitilgen höjjetning Süzükliki', 'alb_list_thumb_size', 0),
  array('Bash bet mezmuni', 'main_page_layout', 0),
  array('albüm kichiklitilme bash béti','first_level',1),

  'Kichiklitip körsitish',
  array('Kichik körsitish qur sani', 'thumbcols', 0),
  array('Kichik körsitish tik qur sani', 'thumbrows', 0),
  array('Jedwel körinish eng chong sani', 'max_tabs', 10), //cpg1.3.0
  array('Höjjet chüshenchisi, kichik körsitish astida (Qoshumche Téma)', 'caption_in_thumbview', 1), //cpg1.3.0
  array('Körüm sani kichiklitilmining astida körülidu', 'views_in_thumbview', 1), //cpg1.3.0
  array('Söz sani kichiklitilmining astida körülidu', 'display_comment_count', 1),
  array('Yük ismi kichiklitilmining astida körülidu', 'display_uploader', 1), //cpg1.3.0
  array('Höjjet körüm sani tertipi', 'default_sort_order', 3), //cpg1.3.0
  array('höjjetke qizghin tashlan`ghan bélet\'lazmliq eng az bélet sani', 'min_votes_for_rating', 0), //cpg1.3.0

  'Resim körünüsh &amp; Söz Tengshiki',
  array('Resim körinidighan jedwelning kengliki (Süzükliki or %)', 'picture_table_width', 0), //cpg1.3.0
  array('Höjjet uchurini aldin körsitish', 'display_pic_info', 1), //cpg1.3.0
  array('Sözlerdin  chiqirwétish.', 'filter_bad_words', 1),
  array('Söz bergende sinlarni ishlitish', 'enable_smilies', 1),
  array('Bir höjjetke birqanche söz bérelisun (qoghdunush izini Taqash)', 'disable_comment_flood_protect', 1), //cpg1.3.0
  array('Resim izahatining uzunliqi', 'max_img_desc_length', 0),
  array('izahatning xet chéki sani', 'max_com_wlength', 0),
  array('izahatning qur chéki sani', 'max_com_lines', 0),
  array('izahatning uzunliqi', 'max_com_size', 0),
  array('Resimche körünüsh qur sani', 'display_film_strip', 1),
  array('ziyaret qurdiki resim sani', 'max_film_strip_items', 0),
  array('Söz berse ataman`gha Émail arqiliq uqturulsun', 'email_comment_notification', 1), //cpg1.3.0
  array('Üzülmey körünüshi milliseconds (1 second = 1000 milliseconds)', 'slideshow_interval', 0), //cpg1.3.0

  'Höjjet kichiklitilme tengshigi', //cpg1.3.0
  array('JPEG Höjjitining süpiti', 'jpeg_qual', 0),
  array('Kichiklitilme chéki <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0), //cpg1.3.0
  array('Ishlitish chéki ( kengliki, igizliki yaki kichiklitilme chéki)<b>**</b>', 'thumb_use', 7),
  array('Ara derijilik resim qurush','make_intermediate',1),
  array('Ara derije resim we sinning chéki<a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0), //cpg1.3.0
  array('Yüklenme höjjetning hejimi (KB)', 'max_upl_size', 0), //cpg1.3.0
  array('Yüklenme resim we sinning igizlik yaki kenglik chéki (pixels)', 'max_upl_width_height', 0), //cpg1.3.0

  'Höjjet bilen resimchening kirgüzme qimmet tengshiki', //cpg1.3.0
  array('Qollanchi höjjitini méhmangha körsütüsh','show_private',1), //cpg1.3.0
  array('Qobul qilinmaydighan arxip nam belgiliri', 'forbiden_fname_char',0), //cpg1.3.0
  //array('Yüklenme resim qobullaydighan qoshumche nam', 'allowed_file_extensions',0), //cpg1.3.0
  array('Qobul resim shekli', 'allowed_img_types',0), //cpg1.3.0
  array('Qobul sin shekli', 'allowed_mov_types',0), //cpg1.3.0
  array('Qobul awaz shekli', 'allowed_snd_types',0), //cpg1.3.0
  array('Qobul höjjet shekli', 'allowed_doc_types',0), //cpg1.3.0
  array('Resimche qurush usuli','thumb_method',2), //cpg1.3.0
  array('Path to ImageMagick \'convert\' ulinish yoli (mesilen /usr/bin/X11/)', 'impath', 0), //cpg1.3.0
  //array('Qobul resim shekli (peqet ImageMagick la ishleydu)', 'allowed_img_types',0), //cpg1.3.0
  array('ImageMagick ning buyruq tallanmiliri', 'im_options', 0), //cpg1.3.0
  array('JPEG ning EXIF matériyalini oqush', 'read_exif_data', 1), //cpg1.3.0
  array('JPEG ning IPTC matériyalini oqush', 'read_iptc_data', 1), //cpg1.3.0
  array('Albüm yoli <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0), //cpg1.3.0
  array('Qollanchi höjjet yoli <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0), //cpg1.3.0
  array('Ara resimning prefix li <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0), //cpg1.3.0
  array('Kichiklitilme resimning prefix li <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0), //cpg1.3.0
  array('Resim munderijisi belgilime chéki', 'default_dir_mode', 0), //cpg1.3.0
  array('Yük resim belgilime chéki', 'default_file_mode', 0), //cpg1.3.0

  'Qollanchi chéki',
  array('Yéngi eza qobullinidu', 'allow_user_registration', 1),
  array('Émail arqiliq tizim testiqlinidu', 'reg_requires_valid_email', 1),
  array('ishletküchi tizimlatsa Ataman`gha Émail ewertilsun', 'reg_notify_admin_email', 1), //cpg1.3.0
  array('Ikki qollanchi bir émail ishletse bolidu', 'allow_duplicate_emails_addr', 1),
  array('Qollanchiningmu albümi bolsun (Diqqet: Eger hee din yaqqa almashtursingiz Qollanchi albümi ammiwiliship qalidu)', 'allow_private_albums', 1), //cpg1.3.0
  array('Qollanchi yük testiqi ataman`gha uqturulsun', 'upl_notify_admin_email', 1), //cpg1.3.0
  array('Ezalar qollanchi tizimini körelisun', 'allow_memberlist', 1), //cpg1.3.0

  'Süret izahati öz quri (ishletmisingiz bosh qalsun)',
  array('Qur 1 nami', 'user_field1_name', 0),
  array('Qur 2 nami', 'user_field2_name', 0),
  array('Qur 3 nami', 'user_field3_name', 0),
  array('Qur 4 nami', 'user_field4_name', 0),

  'Cookies settings',
  array('Qollanghan cookie Nami (bbs bilen ishletkende,  bbs\'s cookie nami bilen oxshash bolmisun)', 'cookie_name', 0),
  array('cookie yoli', 'cookie_path', 0),

  'Bashqa tengshek',
  array('Xataliq shekli qozghutulsun', 'debug_mode', 9), //cpg1.3.0
  array('Xataliq shekli körünme uchuri', 'debug_notice', 1), //cpg1.3.0

  '<br /><div align="left"><a name="notice1"></a>(*) Bu höjjet san ambirida alla burun bar.<br />
  <a name="notice2"></a>(**) özgertilme bar arxipqila ishleydu, Qandaqla bolmisun ataman iqtidaridin arxipni tengshisingiz &quot;<a href="util.php">ataman qorali</a> da(Resim chong_kichiklikini tengshesh)&quot; </div><br />', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'É kartisi yollash', //cpg1.3.0
  'ecard_sender' => 'Bergüchi', //cpg1.3.0
  'ecard_recipient' => 'Bérilgüchi', //cpg1.3.0
  'ecard_date' => 'Waqt', //cpg1.3.0
  'ecard_display' => 'ékard körünüsh', //cpg1.3.0
  'ecard_name' => 'Nami', //cpg1.3.0
  'ecard_email' => 'Émail', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'ashurush', //cpg1.3.0
  'ecard_descending' => 'kémeytish', //cpg1.3.0
  'ecard_sorted' => 'tertip', //cpg1.3.0
  'ecard_by_date' => 'Bergen Waqt', //cpg1.3.0
  'ecard_by_sender_name' => 'Bergen Yollanchi nami\'s name', //cpg1.3.0
  'ecard_by_sender_email' => 'Berguchi\'s émail', //cpg1.3.0
  'ecard_by_sender_ip' => 'Berguchi\'s IP adrési', //cpg1.3.0
  'ecard_by_recipient_name' => 'Bérilgüchi\'s nami', //cpg1.3.0
  'ecard_by_recipient_email' => 'Bérilgüchi\'s émail', //cpg1.3.0
  'ecard_number' => 'Kör xatire %s din %s gha %s', //cpg1.3.0
  'ecard_goto_page' => 'Betke baridu', //cpg1.3.0
  'ecard_records_per_page' => 'Bet qétim sani', //cpg1.3.0
  'check_all' => 'Hemmini tallash', //cpg1.3.0
  'uncheck_all' => 'Tallimasliq', //cpg1.3.0
  'ecards_delete_selected' => 'Tallan`ghanni öchürüsh', //cpg1.3.0
  'ecards_delete_confirm' => 'Rastinla xatirini öchermekchimu? Emise tallang!', //cpg1.3.0
  'ecards_delete_sure' => 'Muqimlidim', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Nam we Sözni yézing',
  'com_added' => 'Sözingiz xatirlendi',
  'alb_need_title' => 'Siz albüm üchün Téma béring !',
  'no_udp_needed' => 'Yéngilash bihajet.',
  'alb_updated' => 'Albüm yéngilinip bolghan',
  'unknown_album' => 'Tallighan albüm yoq yaki siz cheklimige uchurdingiz.',
  'no_pic_uploaded' => 'Höjjet yüklenmidi !<br /><br />Yük bermek bolsingiz, yükleshke ijazet barmu yoq tekshürüp biling...', //cpg1.3.0
  'err_mkdir' => 'Munderije qurghili bolmidi %s !',
  'dest_dir_ro' => 'Munderije %s Xatirige yézilmidi !',
  'err_move' => 'ge %s Yötkilelmidi %s !',
  'err_fsize_too_large' => 'Yük resimi chong ( %s x %s din ashmisun) !', //cpg1.3.0
  'err_imgsize_too_large' => 'Höjjet hejimi chong ( %s KB din ashmisun) !',
  'err_invalid_img' => 'Siz yükligen höjjet sheklini qollimaymiz !',
  'allowed_img_types' => 'Siz peqet %s Resim yolliyalaysiz.',
  'err_insert_pic' => 'Höjjet \'%s\' Albümgha yüklinelmeydu ', //cpg1.3.0
  'upload_success' => 'Höjjetni yüklesh tamam.<br /><br />Ataman testiqidin kéyin Yüklimingizni köreleysiz.', //cpg1.3.0
  'notify_admin_email_subject' => '%s - Yüklenme uqturishi', //cpg1.3.0
  'notify_admin_email_body' => ' %s Yollanma yük bar testiqingizni kütmekte. Körüp béqing. %s', //cpg1.3.0
  'info' => 'Uchur',
  'com_added' => 'Sözingiz qoshuldi',
  'alb_updated' => 'Albüm Yéngilandi',
  'err_comment_empty' => 'Sözber quruq !',
  'err_invalid_fext' => 'Töwendiki qoshumche namnila qollaydu : <br /><br />%s.',
  'no_flood' => 'Kechürüng Eng axirqi söz sizning<br /><br />Tehrirliwalsingiz bolidu.', //cpg1.3.0
  'redirect_msg' => 'Bet yötkiliwatidu.<br /><br /><br />Chéking \'Dawami\' Eger bet özligidin chötkilanmisa',
  'upl_success' => 'Höjjitingiz saqlandi', //cpg1.3.0
  'email_comment_subject' => 'Siz Coppermine Photo Galleryge pikir sözi bérip bolghan', //cpg1.3.0
  'email_comment_body' => 'Galleryingizge kishiler söz qaldurdi. Körüng', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Izah',
  'fs_pic' => 'Esli resim',
  'del_success' => 'Pakiz öchürüldi',
  'ns_pic' => 'normal hejimdiki resim',
  'err_del' => 'öchürelmiduq',
  'thumb_pic' => 'Resimche',
  'comment' => 'Sözber',
  'im_in_alb' => 'Albümdiki resim',
  'alb_del_success' => 'Albüm \'%s\' öchürüsh',
  'alb_mgr' => 'Albüm Atamani',
  'err_invalid_data' => 'Natoghra Tapshuruwélinma \'%s\'',
  'create_alb' => 'Albüm qurush \'%s\'',
  'update_alb' => 'Albüm yéngilandi \'%s\' Témisi \'%s\' Bash béti \'%s\'',
  'del_pic' => 'Höjjetni öchürüsh', //cpg1.3.0
  'del_alb' => 'Albümni öchürüsh',
  'del_user' => 'Qollanchini öchürüsh',
  'err_unknown_user' => 'Tallan`ghan qollanchi yoq !',
  'comment_deleted' => 'Sözler öchürüldi',
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
  'confirm_del' => 'Bu höjjetni rastinla öchiremsiz? \\nComments will also be deleted.', //js-alert //cpg1.3.0
  'del_pic' => 'Bu resim öchürüsh', //cpg1.3.0
  'size' => '%s x %s pixels',
  'views' => '%s Qétim',
  'slideshow' => 'Ulanma körünüsh',
  'stop_slideshow' => 'Qoyulushni toxtitish',
  'view_fs' => 'chékip resimning esli halitini körüng',
  'edit_pic' => 'Chüshenchini tehrirlesh', //cpg1.3.0
  'crop_pic' => 'Késish we Aylandurush', //cpg1.3.0
);

$lang_picinfo = array(
  'title' =>'Höjjet uchuri', //cpg1.3.0
  'Filename' => 'Höjjet nami',
  'Album name' => 'Albüm nami',
  'Rating' => 'Nomur qoyush (%s chi bélet)',
  'Keywords' => 'halqiliq söz',
  'File Size' => 'Höjjet hejimi',
  'Dimensions' => 'Chong_kichikliki',
  'Displayed' => 'körünüsh',
  'Camera' => 'Kaméra',
  'Date taken' => 'Tartilghan waqt',
  'ISO'=>'ISO',
  'Aperture' => 'Köz halqisi',
  'Exposure time' => 'Exposure waqti',
  'Focal length' => 'Fokusni yighmaq',
  'Comment' => 'Sözber',
  'addFav'=>'Könglümdikisige saqlash', //cpg1.3.0
  'addFavPhrase'=>'Könglümdikisi', //cpg1.3.0
  'remFav'=>'Könglümdikisidin yötkesh', //cpg1.3.0
  'iptcTitle'=>'IPTC Téma', //cpg1.3.0
  'iptcCopyright'=>'IPTC Neshir hoquqi', //cpg1.3.0
  'iptcKeywords'=>'IPTC Halqiliq söz', //cpg1.3.0
  'iptcCategory'=>'IPTC Katégoriye', //cpg1.3.0
  'iptcSubCategories'=>'IPTC Tarmaq Katégoriye', //cpg1.3.0
);

$lang_display_comments = array(
  'OK' => 'Qobul',
  'edit_title' => 'Bu yazmini tehrirlesh',
  'confirm_delete' => 'Bu yazmini rastinla öchürwétemsiz ?', //js-alert
  'add_your_comment' => 'Söz qaldurung',
  'name'=>'Nam',
  'comment'=>'Sözber',
  'your_name' => 'Sözleng',
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Resimni chékip köznekni taqang',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'É_kardni ewertish',
  'invalid_email' => '<b>Agahlandurush</b> : inawetsiz émail !',
  'ecard_title' => 'Bu Ékard %s Din kelgen',
  'error_not_image' => 'É_kartimiz peqetla resimnila yollaydu.', //cpg1.3.0
  'view_ecard' => 'É_card normal körünmise, Bu ulanmini chéking',
  'view_more_pics' => 'Bu chékip téximu köp resimlerni körüng !',
  'send_success' => 'É_cartingiz yollandi',
  'send_failed' => 'Kechürüng! mulamitérimiz É-car yollashqa amalsiz...',
  'from' => 'Yollighuchi',
  'your_name' => 'Namingiz',
  'your_email' => 'Émail adrésisingiz',
  'to' => 'Yollan`ghuchi',
  'rcpt_name' => 'Dostingizning nami',
  'rcpt_email' => 'Dostingizning Émail adrési',
  'greetings' => 'Salam témisi',
  'message' => 'Salam sözi',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'File info', //cpg1.3.0
  'album' => 'Albüm',
  'title' => 'Téma',
  'desc' => 'Izahat',
  'keywords' => 'Halqiliq söz',
  'pic_info_str' => '%s &times; %s - %s KB - %s Körüldi - %s Bahalandi',
  'approve' => 'Höjjetni tekshürüp-bahalash', //cpg1.3.0
  'postpone_app' => 'Tekshürüp bahalash uzartildi',
  'del_pic' => 'Höjjetni öchürüsh', //cpg1.3.0
  'read_exif' => 'Yene EXIF uchurini oqush', //cpg1.3.0
  'reset_view_count' => 'Sanaqni qayta tengshesh',
  'reset_votes' => 'Bahani qayta tengshesh',
  'del_comm' => 'Sözni öchürwétish',
  'upl_approval' => 'Bahalan`ghanni yüklesh',
  'edit_pics' => 'Höjjetni tehrirlesh', //cpg1.3.0
  'see_next' => 'Kéyinki höjjet', //cpg1.3.0
  'see_prev' => 'Aldinqi höjjet', //cpg1.3.0
  'n_pic' => '%s Höjjet', //cpg1.3.0
  'n_of_pic_to_disp' => 'Höjjet körinish sani', //cpg1.3.0
  'apply' => 'özgertish', //cpg1.3.0
  'crop_title' => 'Coppermine Resim tehriri', //cpg1.3.0
  'preview' => 'Ziyaret', //cpg1.3.0
  'save' => 'Saqlash', //cpg1.3.0
  'save_thumb' =>'Kichiklitilmini saqlash', //cpg1.3.0
  'sel_on_img' =>'Paaliyet axirlashti!', //js-alert //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Daimliq soal_jawablar', //cpg1.3.0
  'toc' => 'Münderije', //cpg1.3.0
  'question' => 'Soal: ', //cpg1.3.0
  'answer' => 'Jawap: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'Adettiki soal_jawap', //cpg1.3.0
  array('Nime üchün tizimlinimiz?', 'Ataman qollanchilarni testiqlaydu. Tizimlansingiz nurghun iqtidarlardin behriman bolisiz, mesilen: Yüklesh, Könglümdikisi, Höjjetlerge baha béreleysiz yaki söz qalduralaysiz qatarliqlar.', 'allow_user_registration', '1'), //cpg1.3.0
  array('Qandaq tizimlinimen?', '&quot; Tizimlinishni &quot; Chékip, katekchilerni toldurimiz (Tallap toldurimiz).<br />Eger, Ataman Émail aktiplashni qozghatqan bolsa, Aktiplinish toldurma uchuringizni tapshurwalisiz, sehipimizge kirishtin burun choqum aktiplinishingiz kérek.', 'allow_user_registration', '1'), //cpg1.3.0
  array('Qandaq kirimen?', ' &quot; Kirish &quot;, ni chékip Nam we Im(parol)ni toldurisiz &quot;Méni unutmang &quot; Tallap qoysingiz kélerki kirishingiz aptumatik orunlinidu.<br /><b>Diqqet: Kompingizning Cookies iqtidari ochuq bolsun. cookie ponkitimiz kompingizgha saqlaydu.</b>', 'offline', 0), //cpg1.3.0
  array('Nechün kirelmeymen?', 'Tizimlinipmu kirelmigen bolsingiz qaytip émailingizgha qarang. (aktiplandingizmu yoq) Qaldi ishlar bolsa béket atamanidin sorang.', 'offline', 0), //cpg1.3.0
  array('Imni untuptimen?', 'Eger bu tor bette &quot;Im(parol) untulsa &quot; ni chéking. Bolmisa ataman`gha éyting sizge yéngidin Im(parol) ewertip bersun.', 'offline', 0), //cpg1.3.0
  //array('Émailim özgerdi ne qilay?', 'Kirgenla bolsingiz &quot;Arxipingizdin özgertiwalsingizla bolghini;', 'offline', 0), //cpg1.3.0
  array('Resimlerni Qandaq &quot;könglümdikisi&quot; ge Qoshimen?', 'Awal resimni chékip Tallaysiz (<img src="images/info.gif" width="16" height="16" border="0" alt="Picture information" />);  mushu belgini chékisiz, bet astida  &quot;könglümdikisi &quot; dégen xetni chékip saqliwalimiz.<br />Ataman choqum bu iqtidarni tengshep qoyghan bolishi kérek.<br />Diqqet: Kompingizning Cookies iqtidari ochuq bolsun. cookie ponkitimiz kompingizgha saqlaydu.', 'offline', 0), //cpg1.3.0
  array('Höjjetni Qandaq bahalaymiz?', 'Kichiklitilmining astidiki bahalarni tallang.', 'offline', 0), //cpg1.3.0
  array('Qandaq pikir bérimiz?', 'Kichiklitilmining astidiki Sözberge yazsingiz bolidu.', 'offline', 0), //cpg1.3.0
  array('Höjjetni qandaq yükleymiz?', ' &quot;Höjjet yüklesh &quot;ni chékip. Albümni tallap bolup &quot??/ziyaret&quot arqiliq yükleymiz, Andin, izah we Höjjet namini toldurup yollisaqla boldi.', 'allow_private_albums', 0), //cpg1.3.0
  array('Höjjetni qandaq Yükleymiz?', ' &quot;Méning albümim&quot;. Arqiliq yükleysiz. eskertish: Ataman bu iqtidarni aktiplighan bolishi kérek.', 'allow_private_albums', 0), //cpg1.3.0
  array('Yüklenmining hejimi, höjjet shekli qandaq bolidu?', 'Hejim, höjjet sheklini Ataman belgileydu. (mesilen: jpg, png, etc...wav, rm, xx.Kb qatarliqlar) .', 'offline', 0), //cpg1.3.0
  array('&quot;Albümim&quot;dégen nime?', 'özingizning yüki hem bashqurush ijazet rayoningizdur.', 'allow_private_albums', 0), //cpg1.3.0
  array('Yüklesh, özgertish, öchürüsh qandaq élip bérilidu;?', ' awal bu chéking &quot;Qollanchi kirish&quot; ni <br /> Andin, &quo;Albüm qurush&quot; ni chékip albüm qurup &quot;Albüm yüklesh &quot;ni chékip yüklep we  &quot;tehrirlesh &quot;ni chékip özgertsingiz bolidu.', 'allow_private_albums', 0), //cpg1.3.0
  array('cookies nime?', 'Cookie ni ponkitimiz kompingizgha saqlaydu, meqset siz kéler qétim ziyaret qilghanda tizimlanmisingizmu aptumatik tizimlinisiz.<br />Cookies ni cheklep qoysingiz bu iqtidardin behriman bolalmaysiz.', 'offline', 0), //cpg1.3.0
  array('Siz bu ponkit programmisini nedin yükliwalghan?', 'Coppermine GNU GPL ni asas qilghan heqsiz Multimedia Gallery. yaqtursingiz <a href="http://coppermine.sf.net/">Coppermine Ana bétini</a> ziyaret qilip yükliwéling. Andin www.newruz.com teminligen Uyghur terjime til höjjitini ishletsingiz bolidu.', 'offline', 0), //cpg1.3.0

  'Tor béket yétekchisi', //cpg1.3.0
  array('&quot;Albüm sehipisi&quot; dégen nime?', 'Barliq albümlar, katigoriyeler, kichiklitilmiler bar bash betni körsitidu..', 'offline', 0), //cpg1.3.0
  array('&quot;Albümim&quot; dégen nime?', 'Qollanchilar üchün qurulghan, yük qoshush, tehrirlesh, öchürsh rayonidur.(Elwette ataman ruxsiti bolishi kérek.)', 'allow_private_albums', 0), //cpg1.3.0
  array('&quot;Bashqurush shekli we Qollanchi shekli&quot; Qandaq ayrilidu?', 'Qollanchi shekli ziyaritingiz üchün, Bashqurush shekli tehrirlesh, öchürüsh, Yük qoshishingiz üchün ajritildi. (Elwette, Atamanning ruxsiti bolishi shert.)', 'allow_private_albums', 0), //cpg1.3.0
  array('&quot;Yüklesh&quot; dégen nime?', 'Höjjet yollishingizni körsitidu. (Elwette, hejimini, höjjer sheklini ataman belgileydu.)', 'allow_private_albums', 0), //cpg1.3.0
  array('&quot;Eng yéngi yük&quot; dégen nime?', 'Siz we bashqilar yollighan eng yéngi höjjetlerni körsitidu.', 'offline', 0), //cpg1.3.0
  array('&quot;Eng yéngi söz&quot; dégen nime?', 'Békettiki höjjetlerge bérilgen eng yéngi pikir yazmilarni körsitidu.', 'offline', 0), //cpg1.3.0
  array('&quot;Köp  Körülme &quot; dégen nime?', 'Ezalar bolsun yaki Méhmanlar bolsun chékilish sani yoquri höjjetlerni körsitidu. ', 'offline', 0), //cpg1.3.0
  array('&quot;Yoquri baha &quot; dégen nime?', 'Érishken yoquri nomurni körsitidu. (Mesilen: Besh qollanchi <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ni Berse, Netijisi <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />Bolidu; Besh qollanchi 1 din 5 kiche (1,2,3,4,5) Nomur berse, Netijisi<img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> Bolidu .)<br />Netijisi <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (e`la) din <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (Nachar)gha Tizilidu.', 'offline', 0), //cpg1.3.0
  array('&quot;Könglümdikisi &quot; dégen nime?', 'Siz yaqturup tallighan höjjetlerni körsitidu. cookie ni lazimlaydu.', 'offline', 0), //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Im(parol)ni üntüptimen', //cpg1.3.0
  'err_already_logged_in' => 'Siz kirip bolghan !', //cpg1.3.0
  'enter_username_email' => 'Qollanchi nami yaki Émail adrésini toldurung', //cpg1.3.0
  'submit' => 'Muqimlash', //cpg1.3.0
  'failed_sending_email' => 'Im(parol) teminlen`gen émalni ewertishke amalsizmiz !', //cpg1.3.0
  'email_sent' => 'Nam we Imingizni %sge éwertip bolundi', //cpg1.3.0
  'err_unk_user' => 'Bu qollanchi yoq!', //cpg1.3.0
  'passwd_reminder_subject' => '%s  Im(parol) Eskertishi', //cpg1.3.0
  'passwd_reminder_body' => 'Kirgüzgen uchuringiz mundaq:
Username: %s
Password: %s
Chékip %s gha kirish.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Group nami',
  'disk_quota' => 'Disk hejimi',
  'can_rate' => 'Höjjetke baha qoshalisun', //cpg1.3.0
  'can_send_ecards' => 'Écards yolliyalisun',
  'can_post_com' => 'Söz bérelisun',
  'can_upload' => 'Höjjet yolliyalisun', //cpg1.3.0
  'can_have_gallery' => 'Xususiy albüm bar bolsun',
  'apply' => 'Özgertish',
  'create_new_group' => 'Yéngi group qurush',
  'del_groups' => 'Tallan`ghan group(lar) ni öchürüsh',
  'confirm_del' => 'Diqqet, group öchersingiz, grouptiki Qollanchi \'Registered\' Groupqa barsun !\n\n Rastinla öcherdingizmu ?', //js-alert //cpg1.3.0
  'title' => 'Ataman groupisi',
  'approval_1' => 'Ammiwi albümni testiqlash (1)',
  'approval_2' => 'xususiy albümni testiqlash (2)',
  'upload_form_config' => 'Yük shekillirini tengshesh', //cpg1.3.0
  'upload_form_config_values' => array( 'Bir höjjetni yüklesh', 'Köp höjjetni yüklesh', 'URI nila yüklesh', 'ZIP nila yüklesh', 'File-URI', 'File-ZIP', 'URI-ZIP', 'File-URI-ZIP'), //cpg1.3.0
  'custom_user_upload'=>'Qollanchilar yüklime somka sani?', //cpg1.3.0
  'num_file_upload'=>'Eng köp/Yük Höjjet somka sani', //cpg1.3.0
  'num_URI_upload'=>'Eng köp/Yük URI Höjjet somka sani', //cpg1.3.0
  'note1' => '<b>(1)</b> Ammiwiy albüm yüklimisini ataman testiqlaydu',
  'note2' => '<b>(2)</b> Xususiy albüm yüklimisini ataman testiqlaydu',
  'notes' => 'Diqqet',
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Xush keldingiz !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Bu albümni rastinla öchüremsiz ? \\n Barliq resim we Sözler öchüp kétidu.', //js-alert //cpg1.3.0
  'delete' => 'Öchürüsh',
  'modify' => 'Xarektér',
  'edit_pics' => 'Tehrirlesh', //cpg1.3.0
);

$lang_list_categories = array(
  'home' => 'Ana bet',
  'stat1' => '<b>[pictures]</b> Höjjetler <b>[albums]</b> Albümde we<b>[cat]</b> Katigoriyede, <b>[comments]</b> Jawap söz <b>[views]</b> Körüm(ziyaret xatirisi) bar.', //cpg1.3.0
  'stat2' => '<b>[pictures]</b> Höjjetler <b>[albums]</b> Albümde we<b>[views]</b> Jawap söz bar.', //cpg1.3.0
  'xx_s_gallery' => '%s\'s Gallery',
  'stat3' => '<b>[pictures]</b> Höjjetler <b>[albums]</b> Albümda we <b>[comments]</b> Jawap söz <b>[views]</b> Körüm(ziyaret xatirisi) bar.', //cpg1.3.0
);

$lang_list_users = array(
  'user_list' => 'Qollanchi tizimi',
  'no_user_gal' => 'Qollanchi albümi yoq',
  'n_albums' => '%s Albüm(lar)',
  'n_pics' => '%s Höjjet(ler)', //cpg1.3.0
);

$lang_list_albums = array(
  'n_pictures' => '%s Höjjet', //cpg1.3.0
  'last_added' => ', Eng yéngisi %s',
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Kiring',
  'enter_login_pswd' => 'Nam we Im(parol)ni toldurung',
  'username' => 'Nam',
  'password' => 'Im(parol)',
  'remember_me' => 'Méni unutmang',
  'welcome' => 'Merhaba %s ...',
  'err_login' => '*** Kirelmidingiz Qayta sinang***',
  'err_already_logged_in' => 'Ow! siz kirip bolghan!',
  'forgot_password_link' => 'Im(parol)ni untuptimen', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Chiqe',
  'bye' => 'Xeyr_xosh %s ...',
  'err_not_loged_in' => 'Siz téxi kirmidingiz !',
);

// ------------------------------------------------------------------------- //
// File phpinfo.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP uchuri', //cpg1.3.0
  'explanation' => 'Buni PHP-function keltürüp chiqarghan <a href="http://www.php.net/phpinfo">phpinfo()</a>, Copermine azqisim uchurlirini körsitish.', //cpg1.3.0
  'no_link' => 'Bashqilar phpinfo yingizni körse bixeterlik xataliqi körilidu, Ataman bolup kirishingizdiki sewebmu shu. Bu ulunushni bashqilargha dep bermeng, bolmisa saqlash xataliqi körilidu.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Update album %s',
  'general_settings' => 'General settings',
  'alb_title' => 'Albüm Munderijisi',
  'alb_cat' => 'Albüm katégoriyisi',
  'alb_desc' => 'Albüm izahati',
  'alb_thumb' => 'Albüm ülgisi',
  'alb_perm' => 'Albüm cheklimisi',
  'can_view' => 'Albümni köreleysiz',
  'can_upload' => 'Höjjet yükliyeleysiz',
  'can_post_comments' => 'Pikir béreleysiz',
  'can_rate' => 'Höjjetke nomur béreleysiz',
  'user_gal' => 'Qollanchi albümi',
  'no_cat' => '* Albüm türi *',
  'alb_empty' => 'Albüm quruq',
  'last_uploaded' => 'Yéqinqi yük',
  'public_alb' => 'Hemmige (Ammiwi albüm)',
  'me_only' => 'Peqet menla',
  'owner_only' => 'Albüm igisigila (%s) tewe',
  'groupp_only' => 'Qollanchilar \'%s\' grouplar',
  'err_no_alb_to_modify' => 'Albümingizda höjjet yoq.',
  'update' => 'Albümni yéngilash', //cpg1.3.0
  'notice1' => '(*) groupqa %s asasen%s Tengshesh', //cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Kechürisiz! siz bu höjjetke nomur bérip bolghan.', //cpg1.3.0
  'rate_ok' => 'Nomuringiz qobullandi',
  'forbidden' => 'Özingizning höjjitige nomur bérelmeysiz.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
 {SITE_NAME} ning Atamani, Adette namuwapiq höjjetlerni retlep tursimu, Biraq, Barliq höjjetlerni waqtida körüp bolishi mumkin emes. Shunga, Yüklimining mesuliyiti yollighuchighila tewe bolup, Atamanning (Ataman yükligen höjjetler buningdin sirtida) meydanini bildürmeydu hem qanuniy mesuliyetni öz üstige alalmaydu.
<br />
<br />
Siz choqum eza bolghandin kéyin, bashqilarning shexsiyitige yatidighan, Zorawanliq, Shehwaniliq, Dinniy esebiylikni, Xurapatliqni terghip qilidighan qanungha xilap bolghan herqandaq höjjetni yollimasliqqa qoshulishingiz shert. Siz {SITE_NAME} ning Atamani herqandaq waqtta höjjetlerni tehrirlishige yaki öchürüshige yol qoyisiz. Yüklimingiz sanliq ambarda saqlinidu, Sizning ruxsitingizsiz biz héch kishige ötünmeymiz. Shunisi, Hachkérliq qilmishi bilen oghurlunup kétilse mesuliyetni ustimizge alalmaymiz.  <br />
<br />
Békitimiz "cookiesa" arqiliq kompingizgha uchur saqlap yene ziyaret qilishingizni asanlashturidu. Émailingiz peqetla tizim arxipingizni (parolingizni) aktiplash üchünla ishlitilidu. <br />
<br />
'Qoshulimen' ni chékish arqiliq shertlirimizge könüng.
EOT;

$lang_register_php = array(
  'page_title' => 'Ezaliqqa Tizimlitish',
  'term_cond' => 'Shertler',
  'i_agree' => 'Qoshulimen',
  'submit' => 'Tizimlinimen',
  'err_user_exists' => 'Kechürisiz, Bu nam qollinip bolun`ghan, bashqa Namni qollunung',
  'err_password_mismatch' => 'Ikki im(parol) oxshash bolmidi, qayta yézing',
  'err_uname_short' => 'Namingiz ikki herptin kam bolmisun.',
  'err_password_short' => 'Im(parol) ikki herptin kam bolmisun.',
  'err_uname_pass_diff' => 'Im(parol) we Nam oxshash bolmisun.',
  'err_invalid_email' => 'Émail adrési xata.',
  'err_duplicate_email' => 'Bu émail ishlitilip bolun`ghan.',
  'enter_info' => 'Tizimlitish uchurini toldurung',
  'required_info' => 'Choqum toldurung',
  'optional_info' => 'Toldurmisingizmu bolidu',
  'username' => 'Namingiz',
  'password' => 'Im(parol)',
  'password_again' => 'Im(parol)ni qayta yézing',
  'email' => 'Émail',
  'location' => 'Orningiz',
  'interests' => 'Qiziqishingiz',
  'website' => 'Tor bétinigiz',
  'occupation' => 'Kespingiz',
  'error' => 'Xataliq',
  'confirm_email_subject' => '%s - Höjjet Yüklime uqturushi',
  'information' => 'Uchur',
  'failed_sending_email' => 'Tizimlan`ghan émail adrési ewertelmeydu !',
  'thank_you' => 'Tizimlatqiningizgha teshekkür.<br /><br />Hésapingizni aktiplash uchuri émalingizgha yollandi.',
  'acct_created' => 'Hésapingiz quruldi, kirsinigz bolidu.',
  'acct_active' => 'Hésapingiz qozghitildi, kirsingiz bolidu.',
  'acct_already_act' => 'Hésapingiz qozghitildi!',
  'acct_act_failed' => 'Hésapingiz qozghilishqa amalsiz!',
  'err_unk_user' => 'Siz tallighan Qollanchi mewjüt emes !',
  'x_s_profile' => '%s\'s ning arxipi',
  'group' => 'Group',
  'reg_date' => 'Eza bolung',
  'disk_usage' => 'Disk Hejimi',
  'change_pass' => ' IM(parol) özgertish ',
  'current_pass' => 'Esli IM(parol)',
  'new_pass' => 'Yéngi IM(parol)',
  'new_pass_again' => 'Yéngi Im(parol)ni muqimlang',
  'err_curr_pass' => 'Esli IM(parol) xata',
  'apply_modif' => 'Özgertish',
  'change_pass' => 'IM(parol)ni özgertish',
  'update_success' => 'Arxipingiz yéngilandi',
  'pass_chg_success' => 'IM(parol) özgerdi',
  'pass_chg_error' => 'IM(parol) özgermidi',
  'notify_admin_email_subject' => '%s - Tizimlitish uqturushi', //cpg1.3.0
  'notify_admin_email_body' => 'Yene bir yéngi eza nami"%s" galleryge tizimlandi', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
{SITE_NAME} ge tizimlatqiningizgha köp teshekkür

Qollanchi namingiz : "{USER_NAME}"
IM(parol)ingiz : "{PASSWORD}"

Töwendiki ulanmini chékip Hésapingizni qozghutung yaki ulanmini E ulanmisigha chaplang.
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
  'title' => 'Pikir körüsh',
  'no_comment' => 'Téxi Söz yoq',
  'n_comm_del' => '%s Pikir öchürüldi',
  'n_comm_disp' => 'Pikir ziyaret sani',
  'see_prev' => 'Aldinqisi',
  'see_next' => 'Kéyinkisi',
  'del_comm' => 'Tallan`ghan sözni öchürüng',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
  0 => 'Albümdin izdesh',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Yéngidin höjjet izdesh', //cpg1.3.0
  'select_dir' => 'Münderijini tallash',
  'select_dir_msg' => 'Bu iqtida sizning FTP arqiliq top höjjet yolishinigzni qollaydu.<br /><br />Yollimaqchi bolghan top höjjet münderijisini tallang', //cpg1.3.0
  'no_pic_to_add' => 'Qoshulidighan höjjet yoqken', //cpg1.3.0
  'need_one_album' => 'Bu iqtidarni ishlitishchün azkem bir albüm bolsun.',
  'warning' => 'agahlandurush',
  'change_perm' => 'Münderije qurulmisa, CMOD qimmitini 775 yaki 777 qilip tengshep körüng!', //cpg1.3.0
  'target_album' => '<b>Höjjetni &quot;</b>%s<b>&quot; ge yollang </b>%s', //cpg1.3.0
  'folder' => 'Somka',
  'image' => 'Höjjet',
  'album' => 'Albüm',
  'result' => 'Netije',
  'dir_ro' => 'Yüklenmidi. ',
  'dir_cant_read' => 'Oqulmidi. ',
  'insert' => 'galleryge yéngi höjjet qoshush', //cpg1.3.0
  'list_new_pic' => 'Yéngi höjjetler', //cpg1.3.0
  'insert_selected' => 'Tallighan höjjetni qoshung', //cpg1.3.0
  'no_pic_found' => 'Yéngi höjjet tépilmidi', //cpg1.3.0
  'be_patient' => 'Saqlang, Höjjetni yükleshke azraq waqt kétidu.', //cpg1.3.0
  'no_album' => 'Albüm tallanmidi',  //cpg1.3.0
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : Höjjet muwapiqiyetlik yüklendi'.
                          '<li><b>DP</b> : Höjjet qaytilan`ghan yaki ambarda bar'.
                          '<li><b>PB</b> : Höjjet Yüklenmeyse, tengshekni yaki munderije cheklimisini tekshürüp körüng.'.
                          '<li><b>NA</b> : Höjjet albümini tallimapsiz, Muqimlash \'<a href="javascript:history.back(1)">Qaytish</a>\' Albümni tallang. Albümingiz bolmisa <a href="albmgr.php">Albüm qurung</a></li>'.
                          '<li>Eger OK, DP, PB \'Belgiler\' Höjjet körünmise PHP körsetken xataliq uchurini tekshürüng.'.
                          '<li>Eger torkez(browser/???)ning waqti ötse qaytidin retleng.'.
                          '</ul>', //cpg1.3.0
  'select_album' => 'Albümni tallang', //cpg1.3.0
  'check_all' => 'Hemmini tallang', //cpg1.3.0
  'uncheck_all' => 'Hemmini tallimang', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Cheklen`gen Qollanchi',
  'user_name' => 'Qollanchi Nami',
  'ip_address' => 'IP Adrési',
  'expiry' => 'Chéki (Bosh qalsa menggülüktur)',
  'edit_ban' => 'özgirishni saqlash',
  'delete_ban' => 'Öchürüsh',
  'add_new' => 'Cheklen`gen Qollanchi Qoshush',
  'add_ban' => 'Qoshush',
  'error_user' => 'Bundaq qolanchi yoq', //cpg1.3.0
  'error_specify' => 'Qollanchi namini we IP adrésini kirgüzüng', //cpg1.3.0
  'error_ban_id' => 'Xata ID!', //cpg1.3.0
  'error_admin_ban' => 'Özingizni cheklimekchimu!', //cpg1.3.0
  'error_server_ban' => 'Özingizning Mulazimétirini cheklimekchimu? boldi...boldi.. axmaqliq qilmang!', //cpg1.3.0
  'error_ip_forbidden' => 'Bu IP ni chekliyelmeysiz- chünki u, non-routable!', //cpg1.3.0
  'lookup_ip' => 'IP adrésini tekshürüsh', //cpg1.3.0
  'submit' => 'Ijra!', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Höjjet yüklesh', //cpg1.3.0
  'custom_title' => 'Yüklesh tallanma jediwili', //cpg1.3.0
  'cust_instr_1' => 'Töwendikilerdin Yük somkisini tallap yükleng.', //cpg1.3.0
  'cust_instr_2' => 'Tallanma somka nomuri', //cpg1.3.0
  'cust_instr_3' => 'Höjjet yüklesh somkisi: %s', //cpg1.3.0
  'cust_instr_4' => 'URI/URL Yük somkisi: %s', //cpg1.3.0
  'cust_instr_5' => 'URI/URL Yük somkisi:', //cpg1.3.0
  'cust_instr_6' => 'Höjjet Yük somkisi:', //cpg1.3.0
  'cust_instr_7' => 'Lazmliq Yük somkisining sanini yézip chéking \'Dawami\'. ', //cpg1.3.0
  'reg_instr_1' => 'Inawetsiz paaliyet.', //cpg1.3.0
  'reg_instr_2' => 'Höjjetlerni "töwendiki yük somkisi arqiliq yollisingiz bolidu. Yük hejimi %s KB etrapida. ZIP Höjjet yollinidu \'Höjjet yollash\' we \'URI/URL Yollash\' arqiliq baridu.', //cpg1.3.0
  'reg_instr_3' => 'Eger zipliq yaki zipsiz höjjetlerni choqum Höjjet yollash arqiliq yükleng \'ZIPsiz Höjjet yüklesh\' arqiliq Yüklinidu.', //cpg1.3.0
  'reg_instr_4' => 'Eger URI/URL Yükini tallisingiz, Höjjet ulinishini tallang Mesilen: http://www.mysite.com/images/example.jpg', //cpg1.3.0
  'reg_instr_5' => 'Tallap bolghandin kéyin, Chéking \'dawami\'.', //cpg1.3.0
  'reg_instr_6' => 'Yéshilme ZIP yüklesh:', //cpg1.3.0
  'reg_instr_7' => 'Höjjet yüklesh:', //cpg1.3.0
  'reg_instr_8' => 'URI/URL Yüki:', //cpg1.3.0
  'error_report' => 'Xata doklat', //cpg1.3.0
  'error_instr' => 'Töwendikiler uchurghan xataliqlar:', //cpg1.3.0
  'file_name_url' => 'Höjjet ismi/URL', //cpg1.3.0
  'error_message' => 'Xata uchur', //cpg1.3.0
  'no_post' => 'Höjjet yüklenmidi.', //cpg1.3.0
  'forb_ext' => 'Biruxset qoshumche nam.', //cpg1.3.0
  'exc_php_ini' => 'Höjjet php.ini cheklimisidin éship ketti.', //cpg1.3.0
  'exc_file_size' => 'Höjjet CPG cheklimisidin éship ketti.', //cpg1.3.0
  'partial_upload' => 'Bir qismila yüklendi.', //cpg1.3.0
  'no_upload' => 'Yüklenmidi.', //cpg1.3.0
  'unknown_code' => 'Biligsiz PHP xata code.', //cpg1.3.0
  'no_temp_name' => 'Yüklenmidi - temp nam yoq.', //cpg1.3.0
  'no_file_size' => 'Mezmun yoq/Corrupted', //cpg1.3.0
  'impossible' => 'Arxipqa yollanmidi.', //cpg1.3.0
  'not_image' => 'Bu ölchemsiz téma', //cpg1.3.0
  'not_GD' => 'Bu GD ning yandash nami emes.', //cpg1.3.0
  'pixel_allowance' => 'Bek chong bolup ketti.', //cpg1.3.0
  'incorrect_prefix' => 'URI/URL xata, prefix', //cpg1.3.0
  'could_not_open_URI' => 'URI Qozghulushqa amalsiz.', //cpg1.3.0
  'unsafe_URI' => 'Bixeterlik testiqlanmidi.', //cpg1.3.0
  'meta_data_failure' => 'Höjjetni aylandurush muwapiqiyetsiz', //cpg1.3.0
  'http_401' => '401 Ziyaret tosulghan', //cpg1.3.0
  'http_402' => '402 Pulgha ziyaret qilisiz', //cpg1.3.0
  'http_403' => '403 Ziyaret cheklengen', //cpg1.3.0
  'http_404' => '404 Mualzimétirdin jawab yoq', //cpg1.3.0
  'http_500' => '500 Mulazimétirdiki chataq', //cpg1.3.0
  'http_503' => '503 Mulazimétir uzaq saqlighach mulazimet toxtitildi.', //cpg1.3.0
  'MIME_extraction_failure' => 'MIME Tekshürüp testiqlanmidi.', //cpg1.3.0
  'MIME_type_unknown' => 'Bilgili bolmas MIME type', //cpg1.3.0
  'cant_create_write' => 'Yazma arxipni qoshqili bolmidi.', //cpg1.3.0
  'not_writable' => 'Yazghili bolmidi.', //cpg1.3.0
  'cant_read_URI' => 'URI/URL lar oqulmidi', //cpg1.3.0
  'cant_open_write_file' => 'URI Qozghatqili bolmidi.', //cpg1.3.0
  'cant_write_write_file' => 'URI ni xatirligili bolmidi.', //cpg1.3.0
  'cant_unzip' => 'Muwapiqiyetsiz unzip.', //cpg1.3.0
  'unknown' => 'Chüshiniksiz xataliq', //cpg1.3.0
  'succ' => 'Yüklendi', //cpg1.3.0
  'success' => '%s Yüklinip bolun`ghan.', //cpg1.3.0
  'add' => 'Chéking \'Dawamlashturung\' Höjjet arxipini albümgha qoshush.', //cpg1.3.0
  'failure' => 'Yüklenmidi', //cpg1.3.0
  'f_info' => 'Höjjet uchuri', //cpg1.3.0
  'no_place' => 'Yüklime arxipqa saqlanmidi.', //cpg1.3.0
  'yes_place' => 'Yüklime arxipta saqlandi.', //cpg1.3.0
  'max_fsize' => 'Arxipning eng chong ruxset hejimi is %s KB',
  'album' => 'Albüm',
  'picture' => 'Höjjet', //cpg1.3.0
  'pic_title' => 'Höjjet témisi', //cpg1.3.0
  'description' => 'Höjjet izahati', //cpg1.3.0
  'keywords' => 'Halqiliq söz (Bosh orun)',
  'err_no_alb_uploadables' => 'Siz yollighudek albüm yoq', //cpg1.3.0
  'place_instr_1' => 'Höjjetlerni albümgha chaplang.  Siz hazir bu arxipning munasiwetlik uchurlirini kirgüzsingiz bolidu.', //cpg1.3.0
  'place_instr_2' => 'Köpligen höjjetler Seplinishni kütüwatidu. Chéking \'Dawamlashturung\'.', //cpg1.3.0
  'process_complete' => 'Qutluq! Hemme höjjetni muwapiqiyetlik yüklep boldingiz.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'title' => 'Qollanchi Tehrirlesh',
  'name_a' => 'Nami kichiktin chonggha',
  'name_d' => 'Nami chongdin kichikke',
  'group_a' => 'Group kichiktin chonggha',
  'group_d' => 'Group chongdin kichikke',
  'reg_a' => 'Tizim waqti yéqindin yiraqqa',
  'reg_d' => 'Tizim waqti yiraqtin yéqin`gha',
  'pic_a' => 'Höjjet sani azdin köpke',
  'pic_d' => 'Höjjet sani köptin azgha',
  'disku_a' => 'Hejimi kichiktin chonggha',
  'disku_d' => 'Hejimi chongdin kichikke',
  'lv_a' => 'Qollanchi ziyariti yéqindin yiraqqa', //cpg1.3.0
  'lv_d' => ' Qollanchi ziyariti yiraqtin yéqin`gha', //cpg1.3.0
  'sort_by' => '`Qollanchi réti ',
  'err_no_users' => 'Ezalar matiryal béti quruq !',
  'err_edit_self' => 'özingizni arxipini özgertelmeysiz \'profilingizgha\' kélip özgerting',
  'edit' => 'Tehrir',
  'delete' => 'öcher',
  'name' => 'Qollanchi nami',
  'group' => 'Group',
  'inactive' => 'Qozghalmighan',
  'operations' => 'Herketlen',
  'pictures' => 'Höjjet', //cpg1.3.0
  'disk_space' => 'Hejimi/ Chéki',
  'registered_on' => 'Tizimlatqan waqit',
  'last_visit' => 'Yéngi ziyaret', //cpg1.3.0
  'u_user_on_p_pages' => '%d Qollanchi %d bet',
  'confirm_del' => 'Bu qollanchini rastla öchiremsiz? \\nBarliq höjjetlirimu öchüp kétidu.', //js-alert //cpg1.3.0
  'mail' => 'Émail',
  'err_unknown_user' => 'Siz tallighan Qollanchi mewjüt emes!',
  'modify_user' => 'Qollanchi Tehrirlesh',
  'notes' => 'Diqqet',
  'note_list' => '<li>Im(parol)ni özgertmisingiz, "Im(parol)" ornini bosh qaldurung.',
  'password' => 'Im(parol)',
  'user_active' => 'Qollanchini aktiplash',
  'user_group' => 'Qollanchi group',
  'user_email' => 'Qollanchi émail',
  'user_web_site' => 'Qollanchi tor béti',
  'create_new_user' => 'Yéngi eza qoshush',
  'user_location' => 'Qollanchi yurti',
  'user_interests' => 'Qollanchi qiziqishi',
  'user_occupation' => 'Qollanchi kespi',
  'latest_upload' => 'Yéngi yük', //cpg1.3.0
  'never' => 'Yoq', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
  'title' => 'Ataman qorali (Resim chong_kichiklikini tengshesh)', //cpg1.3.0
  'what_it_does' => 'Iqtidar',
  'what_update_titles' => 'Arxiptiki ismidin resim arxipini özgertish.',
  'what_delete_title' => 'Témini öchürüsh',
  'what_rebuild' => 'Qaytidin kichiklitilme we resim chong kichiklikini békitish.',
  'what_delete_originals' => 'Qayta tengshelgen resim esli resimning ornini alsun.',
  'file' => 'Höjjet',
  'title_set_to' => 'Témini özgertish',
  'submit_form' => 'Muqimlash',
  'updated_succesfully' => 'Yéngilandi',
  'error_create' => 'Xataliq körüldi',
  'continue' => 'Bashqa resimlerni ijralash',
  'main_success' => 'Bu Höjjet %s Bash resim qilindi', //cpg1.3.0
  'error_rename' => 'Xataliq %s ismini  %s gha özgertimiz',
  'error_not_found' => 'Bu höjjet %s Tépilmidi',
  'back' => 'Bash betke qaytish',
  'thumbs_wait' => 'Kichiklitilmini dawamliq yéngilash yaki resim chong kichiklikini tengshash boliwatidu, Sel saqlang...',
  'thumbs_continue_wait' => 'Continuing to update thumbnails and/or resized images...',
  'titles_wait' => 'Témini yéngilawatidu, Sel saqlang...',
  'delete_wait' => 'Témini öchürüwatidu, Sel saqlang...',
  'replace_wait' => 'Tengshelgen resim esli resimning ornigha almishiwatidu, sel saqlang..',
  'instruction' => 'Addiy paaliyet chüshendürilishi',
  'instruction_action' => 'Paaliyetni tallash',
  'instruction_parameter' => 'parameterni tallash',
  'instruction_album' => 'Albümni tallang',
  'instruction_press' => 'chéking %s',
  'update' => 'Kichiktilmini yaki resim chong_kichiklikini yéngilash',
  'update_what' => 'Nimini yéngilaysiz',
  'update_thumb' => 'Peqet kichiklitilminila élish',
  'update_pic' => 'Peqet Resim chong_kichiklikini tengshesh.',
  'update_both' => 'Kichiklitilme resim hem ölchimini yéngilash.',
  'update_number' => 'Her chékilgende resim sanini belgilesh',
  'update_option' => '(Eger programma ijrasida mesile körülse, Tengshekni töwenliting.)',
  'filename_title' => 'Höjjet nami &rArr; Höjjet ', //cpg1.3.0
  'filename_how' => 'Höjjet nami qandaq özgertilidu.',
  'filename_remove' => 'Esli .jpg öchürülüp _ (underscore) gha özgertilidu.',
  'filename_euro' => 'Bu 2003_11_23_13_20_20.jpg gha özgertilidu 23/11/2003 13:20',
  'filename_us' => 'Bu 2003_11_23_13_20_20.jpg gha özgertilidu 11/23/2003 13:20',
  'filename_time' => 'Bu 2003_11_23_13_20_20.jpg gha özgertilidu 13:20',
  'delete' => 'Höjjet münderijisi yaki ölchimini öchürüsh', //cpg1.3.0
  'delete_title' => 'Höjjet munderijisini öchürüsh.', //cpg1.3.0
  'delete_original' => 'Esli ölchemdiki resimni öchürüsh',
  'delete_replace' => 'Eslidiki ölchem öchürülüp yéngi ölchem qollinilsun.',
  'select_album' => 'Albüm tallash',
  'delete_orphans' => 'Parche_purat Sözlerni öchürüsh(Hemme albümdiki)', //cpg1.3.0
  'orphan_comment' => 'Parche_purat Sözler bayqaldi.', //cpg1.3.0
  'delete' => 'öcher', //cpg1.3.0
  'delete_all' => 'Hemmini öcher', //cpg1.3.0
  'comment' => 'Söz qaldurung: ', //cpg1.3.0
  'nonexist' => 'Qoshumche qoshulma yoq # ', //cpg1.3.0
  'phpinfo' => 'php uchurini körsitish', //cpg1.3.0
  'update_db' => 'San ambirini yéngilash', //cpg1.3.0
  'update_db_explanation' => 'coppermine ning arxipini yéngilimaq bolsingiz, özgertish yaki neshirini yéngilimaq bolsingiz, Matiryal ambirini yéngilashni ijra qiling. shundila coppermine ning matiryal ambirigha yéngidin jedwel qoshulidu. yaki Tengshilidu.', //cpg1.3.0
);

?>
