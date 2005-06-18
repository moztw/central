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
// CVS version: $Id: welsh-utf-8.php,v 1.2 2005/01/11 12:17:42 caspershadow Exp $
// ------------------------------------------------------------------------- //

// cyfieithiad Cymraeg gan www.dyffrynaeron.com
$lang_translation_info = array(
  'lang_name_english' => 'Welsh',
  'lang_name_native' => 'Cymraeg',
  'lang_country_code' => 'cm',
  'trans_name'=> 'dyffrynaeron.com',
  'trans_email' => 'cysylltu@dyffrynaeron.com',
  'trans_website' => 'http://www.dyffrynaeron.com/',
  'trans_date' => '2005-01-01',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Beitiau', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Sul', 'Llun', 'Maw', 'Mer', 'Iau', 'Gwe', 'Sad');
$lang_month = array('Ion', 'Chwe', 'Maw', 'Ebr', 'Mai', 'Meh', 'Gor', 'Aws', 'Med', 'Hyd', 'Tach', 'Rhag');

// Some common strings
$lang_yes = 'Ie';
$lang_no  = 'Na';
$lang_back = 'N&Ocirc;L';
$lang_continue = 'PARHAU';
$lang_info = 'Gwybodaeth';
$lang_error = 'Gwall';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%e.%B %Y';
$lastcom_date_fmt =  '%e.%m.%y um %H:%M';
$lastup_date_fmt = '%e %B %Y';
$register_date_fmt = '%e %B %Y';
$lasthit_date_fmt = '%e %B %Y um %H:%M';
$comment_date_fmt =  '%e %B %Y um %H:%M';


// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'ffwrch', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
  'random' => 'Ffeiliau heb drefn arbennig', //cpg1.3.0
  'lastup' => 'Lluniau mwyaf newydd',
  'lastalb'=> 'Llyfr Lluniau ddiweddarwyd ddiwethaf',
  'lastcom' => 'Sylwadau diwethaf',
  'topn' => 'Edrychwyd arno fwyaf',
  'toprated' => 'Gradd uchaf',
  'lasthits' => 'Edrychwyd arno ddiwethaf',
  'search' => 'Canlyniadau chwilio',
  'favpics'=> 'Ffefrynnau', //cpg1.3.0
);

$lang_errors = array(
  'access_denied' => 'Does gen ti ddim caniat&acirc;d i gael mynediad i\'r dudalen hon.',
  'perm_denied' => 'Does gen ti ddim caniat&acirc;d i gyflawni\'r weithred hon.',
  'param_missing' => 'Galwyd y sgript heb y paramedrau anghenrheidiol.',
  'non_exist_ap' => 'Dyw\'r Llyfr Lluniau/ffeil ddewises di ddim yn bodoli !', //cpg1.3.0
  'quota_exceeded' => 'Dros dy gwota<br /><br />Mae [quota]K ar dy gyfer di, ac mae dy ffeiliau yn defnyddio[space]K, byddai ychwanegu\'r ffeil hon yn mynd &acirc; ti dros dy gwota.', //cpg1.3.0
  'gd_file_type_err' => 'Yr unig fathau o ddelweddau allu di ddefnyddio gyda llyfrgell delweddau GD yw JPEG a PNG.',
  'invalid_image' => 'Mae\'r ddelwedd wnes di anfon wedi\'i llygru neu\'n anaddas ar gyfer llyfrgell GD',
  'resize_failed' => 'Methu creu bawdlun neu ddelwedd llai o faint.',
  'no_img_to_display' => 'Dim delwedd i\'w dangos',
  'non_exist_cat' => 'Dyw\'r categori wnes di ddewis ddim yn bodoli',
  'orphan_cat' => 'Categori heb riant-gategori, defnyddia\'r rheolwr categori i wirio hyn!', //cpg1.3.0
  'directory_ro' => 'Does dim hawl gen ti ysgrifennu i blygell \'%s\' felly does dim modd dileu\'r ffeiliau.', //cpg1.3.0
  'non_exist_comment' => 'Dyw\'r sylw wnes di ddewis ddim yn bodoli.',
  'pic_in_invalid_album' => 'Mae\'r ffeil mewn Llyfr Lluniau (%s)!? sydd ddim yn bodoli', //cpg1.3.0
  'banned' => 'Rwyt ti wedi cael dy wahardd rhag defnyddio\'r safle.',
  'not_with_udb' => 'Mae\'r weithred wedi ei hanalluogi yn Coppermine oherwydd ei fod wedi ei integreiddio gyda meddalwedd fforwm. Naill ai dyw beth rwyt ti\'n ceisio gwneud ddim yn cael ei gefnogi gan y cyfluniad hwn, neu dylai meddalwedd y fforwm fod yn ymdrin &acirc;\'r swyddogaeth.',
  'offline_title' => 'Ddim arlein', //cpg1.3.0
  'offline_text' => 'Dyw\'r oriel ddim arlein ar hyn o bryd, dere n&ocirc;l yn fuan', //cpg1.3.0
  'ecards_empty' => 'Does dim cofnodion egardiau i\'w harddangos. Gwna\'n siwr dy fod wedi galluogi logio egardiau yng nghyfluniad Coppermine!', //cpg1.3.0
  'action_failed' => 'Methodd y weithred.  Dyw Coppermine ddim yn medru prosesu dy gais.', //cpg1.3.0
  'no_zip' => 'Dyw\'r llyfrgelloedd sydd eu hangen i brosesu ffeiliau ZIP ddim ar gael.  Cysyllta &acirc;\'r gweinyddwr.', //cpg1.3.0
  'zip_type' => 'Does gen ti ddim caniat&acirc;d i anfon ffeiliau ZIP.', //cpg1.3.0
);

$lang_bbcode_help = 'Gallai\'r c&ocirc;d canlynol fod yn ddefnyddiol: <li>[b]<b>Cryf</b>[/b]</li> <li>[i]<i>Italig</i>[/i]</li> <li>[url=http://dy_safle.com/]Testun[/url]</li> <li>[email]defnyddiwr@safle.com[/email]</li>'; //cpg1.3.0

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'alb_list_title' => 'Mynd i restr Llyfr Lluniau',
  'alb_list_lnk' => 'Rhestr Llyfrau Lluniau',
  'my_gal_title' => 'Mynd i fy oriel bersonol i',
  'my_gal_lnk' => 'Fy oriel',
  'my_prof_lnk' => 'Fy mhroffil',
  'adm_mode_title' => 'Newid i modd gweinyddwr',
  'adm_mode_lnk' => 'Modd gweinyddwr',
  'usr_mode_title' => 'Newid i modd defnyddiwr',
  'usr_mode_lnk' => 'Modd defnyddiwr',
  'upload_pic_title' => 'Anfon llun i Lyfr Lluniau', //cpg1.3.0
  'upload_pic_lnk' => 'Anfon llun', //cpg1.3.0
  'register_title' => 'Creu cyfri',
  'register_lnk' => 'Cofrestru',
  'login_lnk' => 'Mewngofnodi',
  'logout_lnk' => 'Allgofnodi',
  'lastup_lnk' => 'Lluniau mwyaf newydd',
  'lastcom_lnk' => 'Sylwadau diwethaf',
  'topn_lnk' => 'Edrychwyd arno fwyaf',
  'toprated_lnk' => 'Gradd uchaf',
  'search_lnk' => 'Chwilio',
  'fav_lnk' => 'Ffefrynnau',
  'memberlist_title' => 'Dangos Rhestr Aelodau', //cpg1.3.0
  'memberlist_lnk' => 'Rhestr Aelodau', //cpg1.3.0
  'faq_title' => 'Cwestiynau Cyffredin am oriel lluniau &quot;Coppermine&quot;', //cpg1.3.0
  'faq_lnk' => 'Cwestiynau Cyffredin', //cpg1.3.0
);

$lang_gallery_admin_menu = array(
  'upl_app_lnk' => 'Cymeradwyo ffeiliau',
  'config_lnk' => 'Cyfluniad',
  'albums_lnk' => 'Llyfrau Lluniau',
  'categories_lnk' => 'Categoriau',
  'users_lnk' => 'Defnyddwyr',
  'groups_lnk' => 'Grwpiau',
  'comments_lnk' => 'Adolygu Sylwadau', //cpg1.3.0
  'searchnew_lnk' => 'Swp-brosesu ffeiliau', //cpg1.3.0
  'util_lnk' => 'Offer Gweinyddol', //cpg1.3.0
  'ban_lnk' => 'Gwahardd Defnyddwyr',
  'db_ecard_lnk' => 'Dangos Egardiau', //cpg1.3.0
);

$lang_user_admin_menu = array(
  'albmgr_lnk' => 'Creu/trefnu fy Llyfrau Lluniau',
  'modifyalb_lnk' => 'Addasu fy Llyfrau Lluniau',
  'my_prof_lnk' => 'Fy mhroffil',
);

$lang_cat_list = array(
  'category' => 'Categori',
  'albums' => 'Llyfrau Lluniau',
  'pictures' => 'Ffeiliau', //cpg1.3.0
);

$lang_album_list = array(
  'album_on_page' => '%d o Lyfrau Lluniau ar %d tudalen',
);

$lang_thumb_view = array(
  'date' => 'DYDDIAD',
  //Sort by filename and title
  'name' => 'ENW FFEIL',
  'title' => 'TEITL',
  'sort_da' => 'Trefnu yn &ocirc;l dyddiad yn esgynnol',
  'sort_dd' => 'Trefnu yn &ocirc;l dyddiad yn ddisgynnol',
  'sort_na' => 'Trefnu yn &ocirc;l enw yn esgynnol',
  'sort_nd' => 'Trefnu yn &ocirc;l enw yn ddisgynnol',
  'sort_ta' => 'Trefnu yn &ocirc;l teitl yn esgynnol',
  'sort_td' => 'Trefnu yn &ocirc;l teitl yn ddisgynnol',
  'download_zip' => 'Llwytho lawr fel ffeil Zip', //cpg1.3.0
  'pic_on_page' => '%d o ffeiliau ar %d tudalen',
  'user_on_page' => '%d o ddefnyddwyr ar %d tudalen', //cpg1.3.0
);

$lang_img_nav_bar = array(
  'thumb_title' => 'N&ocirc;l i\'r dudalen bawdluniau',
  'pic_info_title' => 'Dangos/cuddio gwybodaeth ffeiliau', //cpg1.3.0
  'slideshow_title' => 'Sioe sleidiau',
  'ecard_title' => 'Anfon y ffeil hwn fel egerdyn', //cpg1.3.0
  'ecard_disabled' => 'Egardiau wedi\'u hanalluogi',
  'ecard_disabled_msg' => 'Does gen ti ddim caniat&acirc;d i anfon egardiau', //js-alert //cpg1.3.0
  'prev_title' => 'Gweld ffeil blaenorol', //cpg1.3.0
  'next_title' => 'Gweld ffeil nesaf', //cpg1.3.0
  'pic_pos' => 'FFEIL %s/%s', //cpg1.3.0
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Graddio\'r ffeil hwn', //cpg1.3.0
  'no_votes' => '(Dim pleidleisiau eto)',
  'rating' => '(gradd ar hyn o bryd : %s / 5 gyda %s o bleidleisiau)',
  'rubbish' => 'Rwtsh llwyr',
  'poor' => 'Gwael',
  'fair' => 'Gweddol',
  'good' => 'Da',
  'excellent' => 'Gwych',
  'great' => 'Ardderchog',
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
  CRITICAL_ERROR => 'Gwall difrifol',
  'file' => 'Ffeil: ',
  'line' => 'Llinell: ',
);

$lang_display_thumbnails = array(
  'filename' => 'Enw ffeil : ',
  'filesize' => 'Maint y ffeil : ',
  'dimensions' => 'Deimensiynau : ',
  'date_added' => 'Dyddiad ychwanegu : ', //cpg1.3.0
);

$lang_get_pic_data = array(
  'n_comments' => '%s o sylwadau',
  'n_views' => '%s golwg',
  'n_votes' => '(%s pleidlais)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Gwybodaeth dadfygio', //cpg1.3.0
  'select_all' => 'Dewis y cyfan', //cpg1.3.0
  'copy_and_paste_instructions' => 'Os wyt ti\'n mynd i ofyn am gymorth ar fwrdd cefnogi Coppermine, torra a gludo yr allbwn dadfygio hwn a\'i ychwanegu at dy gais. Cofia gael gwared o unrhyw gyfrineiriau a rhoi *** yn eu lle.', //cpg1.3.0
  'phpinfo' => 'dangos gwybodaeth php', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => 'Iaith wreiddiol - Cymraeg', //cpg1.3.0
  'choose_language' => 'Dewis dy iaith', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'Thema wreiddiol', //cpg1.3.0
  'choose_theme' => 'Dewis thema', //cpg1.3.0
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
  'Exclamation' => 'Ebychiad',
  'Question' => 'Cwestiwn',
  'Very Happy' => 'Hapus Iawn',
  'Smile' => 'Gw&ecirc;n',
  'Sad' => 'Trist',
  'Surprised' => 'Syndod',
  'Shocked' => 'Sioc',
  'Confused' => 'Dryslyd',
  'Cool' => 'Cwwwl!',
  'Laughing' => 'Chwerthin',
  'Mad' => 'Lloerig',
  'Razz' => 'Gwawd',
  'Embarassed' => 'Embaras',
  'Crying or Very sad' => 'Trist iawn, feri sad',
  'Evil or Very Mad' => 'Drwg neu crac iawn',
  'Twisted Evil' => 'Anfad',
  'Rolling Eyes' => 'Llygaid yn rowlio',
  'Wink' => 'Winc',
  'Idea' => 'Syniad',
  'Arrow' => 'Saeth',
  'Neutral' => 'Niwtral',
  'Mr. Green' => 'Mr.Cen Figen',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  0 => 'Gadael modd gweinyddwr...',
  1 => 'Agor modd gweinyddwr...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Rhaid rhoi enw i Lyfr Lluniau !', //js-alert
  'confirm_modifs' => 'Hollol siwr?', //js-alert
  'no_change' => 'Wnes di ddim newid dim byd !', //js-alert
  'new_album' => 'Llyfr lluniau newydd',
  'confirm_delete1' => 'Hollol siwr dy fod am ei ddileu ?', //js-alert
  'confirm_delete2' => 'Bydd popeth sydd ynddo yn diflannu !', //js-alert
  'select_first' => 'Dewis dy Lyfr Lluniau', //js-alert
  'alb_mrg' => 'Rheolwr Llyfrau Lluniau',
  'my_gallery' => '* Fy oriel *',
  'no_category' => '* Dim categori *',
  'delete' => 'Dileu',
  'new' => 'Newydd',
  'apply_modifs' => 'Cadw newidiadau',
  'select_category' => 'Dewis gategori',

);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Dyw\'r paramedrau sydd eu hangen ar gyfer \'%s\'ddim wedi cael eu darparu!',
  'unknown_cat' => 'Dyw\'r categori hwn ddim yn bodoli yn y b&acirc;s data',
  'usergal_cat_ro' => 'Does dim modd dileu categori Oriel Defnyddiwr !',
  'manage_cat' => 'Rheoli categoriau',
  'confirm_delete' => 'Wyt ti\\\'n siwr dy fod eisiau DILEU y categori hwn', //js-alert
  'category' => 'Categori',
  'operations' => 'Gweithredoedd',
  'move_into' => 'Symud mewn i',
  'update_create' => 'Diweddaru/Creu categori',
  'parent_cat' => 'Rhiant gategori',
  'cat_title' => 'Teitl y categori',
  'cat_thumb' => 'Bawdlun y categori', //cpg1.3.0
  'cat_desc' => 'Disgrifiad o\'r categori',
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
  'title' => 'Cyfluniad',
  'restore_cfg' => 'Ailosod gosodiadau gwreiddiol',
  'save_cfg' => 'Cadw\'r cyfluniad newydd',
  'notes' => 'Nodiadau',
  'info' => 'Gwybodaeth',
  'upd_success' => 'Cyfluniad Coppermine wedi ei ddiweddaru',
  'restore_success' => 'Ailosodwyd cyfluniad gwreiddiol Coppermine',
  'name_a' => 'Enw esgynnol',
  'name_d' => 'Enw disgynnol',
  'title_a' => 'Teitl esgynnol',
  'title_d' => 'Teitl disgynnol',
  'date_a' => 'Dyddiad esgynnol',
  'date_d' => 'Dyddiad disgynnol',
  'th_any' => 'Agwedd uchaf',
  'th_ht' => 'Uchder',
  'th_wd' => 'Lled',
  'label' => 'label', //cpg1.3.0
  'item' => 'eitem', //cpg1.3.0
  'debug_everyone' => 'Pawb', //cpg1.3.0
  'debug_admin' => 'Gweinyddwr yn unig', //cpg1.3.0
        );

if (defined('CONFIG_PHP')) $lang_config_data = array(
  'Gosodiadau cyffredinol',
  array('Enw Oriel', 'gallery_name', 0),
  array('Disgrifiad o\'r Oriel', 'gallery_description', 0),
  array('Ebost gweinyddwr yr Oriel', 'gallery_admin_email', 0),
  array('Cyfeiriad targed ar gyfer dolen \'Gweld mwy o luniau\' mewn egardiau', 'ecards_more_pic_target', 0),
  array('Oriel ddim arlein', 'offline', 1), //cpg1.3.0
  array('Logio egardiau', 'log_ecards', 1), //cpg1.3.0
  array('Caniat&aacute;u llwytho Ffefrynnau lawr ar ffurf ZIP', 'enable_zipdownload', 1), //cpg1.3.0

  'Gosodiadau iaith, them&acirc;u &amp; chymeriadau iaith',
  array('Iaith', 'lang', 5),
  array('Thema', 'theme', 6),
  array('Dangos rhestr ieithoedd', 'language_list', 1), //cpg1.3.0
  array('Dangos baneri ieithoedd', 'language_flags', 8), //cpg1.3.0
  array('Dangos &quot;ailosod&quot; yn y dewisiadau iaith', 'language_reset', 1), //cpg1.3.0
  array('Dangos rhestr them&acirc;u', 'theme_list', 1), //cpg1.3.0
  array('Dangos &quot;ailosod&quot; yn y dewisiadau thema', 'theme_reset', 1), //cpg1.3.0
  array('Dangos Cwestiynau Cyffredin', 'display_faq', 1), //cpg1.3.0
  array('Dangos cymorth bbcode', 'show_bbcode_help', 1), //cpg1.3.0
  array('Amgodio llythrennau', 'charset', 4), //cpg1.3.0

  'Gwedd rhestr Llyfrau Lluniau',
  array('Lled y prif dabl (picseli neu %)', 'main_table_width', 0),
  array('Nifer o lefelau o gategoriau i\'w harddangos', 'subcat_level', 0),
  array('Nifer o Lyfrau Lluniau i\'w harddangos', 'albums_per_page', 0),
  array('Nifer o golofnau yn y Rhestr Llyfrau Lluniau', 'album_list_cols', 0),
  array('Maint y bawdlun mewn picseli', 'alb_list_thumb_size', 0),
  array('Cynnwys y brif dudalen', 'main_page_layout', 0),
  array('Dangos y lefel gyntaf o fawdluniau mewn categoriau','first_level',1),

  'Gwedd bawdluniau',
  array('Nifer o golofnau ar y dudalen bawdluniau', 'thumbcols', 0),
  array('Nifer o resi ar y dudalen bawdluniau', 'thumbrows', 0),
  array('Uchafswm nifer y tabiau i\'w harddangos', 'max_tabs', 10), //cpg1.3.0
  array('Dangos pennawd ffeil (yn ogystal &acirc; theitl) o dan y bawdlun', 'caption_in_thumbview', 1), //cpg1.3.0
  array('Dangos sawl gwaith yr edrychwyd arno dan y bawdlun', 'views_in_thumbview', 1), //cpg1.3.0
  array('Dangos nifer o sylwadau o dan y bawdlun', 'display_comment_count', 1),
  array('Dangos enw\'r person anfonodd y ffeil dan y bawdlun', 'display_uploader', 1), //cpg1.3.0
  array('Gosodiadau gwreiddiol trefnu ffeiliau', 'default_sort_order', 3), //cpg1.3.0
  array('Isafswm y pleidleisiau cyn bod ffeil yn ymddangos yn y rhestr \'Gradd uchaf\'', 'min_votes_for_rating', 0), //cpg1.3.0

  'Gwedd y lluniau &amp; gosodiadau sylwadau',
  array('Lled y tabl i arddangos ffeiliau (picseli neu %)', 'picture_table_width', 0), //cpg1.3.0
  array('Gwybodaeth ffeiliau yn weladwy', 'display_pic_info', 1), //cpg1.3.0
  array('Hidlo geiriau drwg o sylwadau', 'filter_bad_words', 1),
  array('Caniat&acirc;u gwenogluniau', 'enable_smilies', 1),
  array('Caniat&acirc;u sawl sylw ar un ffeil gan yr un defnyddiwr (analluogi diogelwch llifeiriant)', 'disable_comment_flood_protect', 1), //cpg1.3.0
  array('Uchafswm disgrifiad llun', 'max_img_desc_length', 0),
  array('Uchafswm llythrennau mewn gair', 'max_com_wlength', 0),
  array('Uchafswm y llinellau mewn sylw', 'max_com_lines', 0),
  array('Uchafswm hyd y sylw', 'max_com_size', 0),
  array('Dangos stribyn ffilm', 'display_film_strip', 1),
  array('Nifer o eitemau mewn stribyn ffilm', 'max_film_strip_items', 0),
  array('Ebost i\'r gweinyddwr bob tro bydd sylwadau', 'email_comment_notification', 1), //cpg1.3.0
  array('Milieiliadau rhwng pob llun yn y sioe sleidiau (1 eiliad = 1000 milieiliad)', 'slideshow_interval', 0), //cpg1.3.0

  'Gosodiadau ffeiliau a bawdluniau', //cpg1.3.0
  array('Safon ffeiliau JPEG', 'jpeg_qual', 0),
  array('Deimensiynau mwyaf y bawdlun <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0), //cpg1.3.0
  array('Deimenswn i\'w ddefnyddio ar gyfer bawdlun <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7),
  array('Creu lluniau canolradd','make_intermediate',1),
  array('Uchafswm lled neu uchder llun/fideo canolradd <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0), //cpg1.3.0
  array('Uchafswm maint ffeil i\'w anfon (KB)', 'max_upl_size', 0), //cpg1.3.0
  array('Uchafswm lled neu uchder llun/fideo i\'w anfon (picseli)', 'max_upl_width_height', 0), //cpg1.3.0

  'Gosodiadau uwch ffeiliau a bawdluniau', //cpg1.3.0
  array('Dangos eicon llyfr lluniau preifat i ddefnyddiwr sydd heb ei logio','show_private',1), //cpg1.3.0
  array('Cymeriadau i\'w gwahardd mewn enwau ffeiliau', 'forbiden_fname_char',0), //cpg1.3.0
  array('Pa fathau o ffeiliau sydd hawl eu hanfon', 'allowed_file_extensions',0), //cpg1.3.0
  array('Ffeiliau delweddau sy\'n cael eu caniat&aacute;u', 'allowed_img_types',0), //cpg1.3.0
  array('Ffeiliau ffilm sy\'n cael eu caniat&aacute;u', 'allowed_mov_types',0), //cpg1.3.0
  array('Ffeiliau sain sy\'n cael eu caniat&aacute;u', 'allowed_snd_types',0), //cpg1.3.0
  array('Dogfennau sy\'n cael eu caniat&aacute;u', 'allowed_doc_types',0), //cpg1.3.0
  array('Dull o newid maint delweddau','thumb_method',2), //cpg1.3.0
  array('Llwybr i wasanaeth \'trosi\' ImageMagick (enghraifft /usr/bin/X11/ ar Linux)', 'impath', 0), //cpg1.3.0
  array('Ffeiliau sy\'n cael eu caniat&aacute;u (dim ond yn ddilys ar gyfer ImageMagick)', 'allowed_img_types',0), //cpg1.3.0
  array('Opsiynau llinell gorchymyn ImageMagick', 'im_options', 0), //cpg1.3.0
  array('Darllen gwybodaeth EXIF mewn ffeiliau JPEG', 'read_exif_data', 1), //cpg1.3.0
  array('Darllen gwybodaeth IPTC mewn ffeiliau JPEG', 'read_iptc_data', 1), //cpg1.3.0
  array('Cyfeiriadur llyfrau lluniau <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0), //cpg1.3.0
  array('Cyfeiriadur ffeiliau defnyddwyr <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0), //cpg1.3.0
  array('Rhagddodiad lluniau canolradd <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0), //cpg1.3.0
  array('Rhagddodiad bawdluniau <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0), //cpg1.3.0
  array('Modd diofyn cyfeiriaduron', 'default_dir_mode', 0), //cpg1.3.0
  array('Modd diofyn ffeiliau', 'default_file_mode', 0), //cpg1.3.0

  'Gosodiadau defnyddiwr',
  array('Caniat&aacute;u cofrestu defnyddiwr newydd', 'allow_user_registration', 1),
  array('Angen gwirio defnyddiwr newydd ag ebost', 'reg_requires_valid_email', 1),
  array('Rhoi gwybod i\'r gweinyddwr am gofrestru defnyddwyr newydd', 'reg_notify_admin_email', 1), //cpg1.3.0
  array('Caniat&aacute;u dau ddefnyddiwr i gael yr un cyfeiriad ebost', 'allow_duplicate_emails_addr', 1),
  array('Hawl gan ddefnyddwyr i gael llyfrau lluniau preifat (Sylwer: os newidiwch chi o \'ie\' i \'na\' bydd llyfrau llunaiu preifat yn dod yn gyhoeddus)', 'allow_private_albums', 1), //cpg1.3.0
  array('Rhoi gwybod i\'r gweinyddwr pan fydd ffeiliau\'n cael eu hanfon', 'upl_notify_admin_email', 1), //cpg1.3.0
  array('Caniat&aacute;u defnyddwyr sydd wedi mewngofnodi i weld rhestr aelodau', 'allow_memberlist', 1), //cpg1.3.0

  'Meysydd arferol i ddisgrifio lluniau (gadewch yn wag os nad ydych yn eu defnyddio)',
  array('Enw Maes 1', 'user_field1_name', 0),
  array('Enw Maes 2', 'user_field2_name', 0),
  array('Enw Maes 3', 'user_field3_name', 0),
  array('Enw Maes 4', 'user_field4_name', 0),

  'Gosodiadau cwcis',
  array('Enw\'r cwci mae\'r sgript yn defnyddio (os yn integreiddio gyda bbs, gwnewch yn siwr ei fod yn wahanol i enw cwci bbs)', 'cookie_name', 0),
  array('Llwybr y cwci sy\'n cael ei ddefnyddio gan y sgript', 'cookie_path', 0),

  'Gosodiadau amrywiol',
  array('Galluogi modd dadfygio', 'debug_mode', 9), //cpg1.3.0
  array('Dangos rhybuddion yn modd dadfygio', 'debug_notice', 1), //cpg1.3.0

  '<br /><div align="left"><a name="notice1"></a>(*) Rhaid peidio newid y gosodiadau hyn os oes ffeiliau eisoes yn y b&acirc;s data.<br />
  <a name="notice2"></a>(**) Pan yn newid hwn, dim ond ffeiliau sy\'n cael eu hychwanegu o hynny ymlaen sy\'n cael eu heffeithio, felly mae\'n well peidio newid hwn os oes ffeiliau eisoes yn y Oriel. Gallwch serch hynny gymhwyso\'r newidiadau i ffeiliau sy\'n bodoli\'n barod gyda\'r &quot;<a href="util.php">offer gweinyddol</a> (newid maint lluniau)&quot; o\'r ddewislen gweinyddol.</div><br />', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Anfon egardiau', //cpg1.3.0
  'ecard_sender' => 'Anfonwr', //cpg1.3.0
  'ecard_recipient' => 'Derbyniwr', //cpg1.3.0
  'ecard_date' => 'Dyddiad', //cpg1.3.0
  'ecard_display' => 'Dangos egerdyn', //cpg1.3.0
  'ecard_name' => 'Enw', //cpg1.3.0
  'ecard_email' => 'Ebost', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'esgynnol', //cpg1.3.0
  'ecard_descending' => 'disgynnol', //cpg1.3.0
  'ecard_sorted' => 'Didoli', //cpg1.3.0
  'ecard_by_date' => 'yn &ocirc;l dyddiad', //cpg1.3.0
  'ecard_by_sender_name' => 'yn &ocirc;l enw\'r anfonwr', //cpg1.3.0
  'ecard_by_sender_email' => 'yn &ocirc;l ebost anfonwr', //cpg1.3.0
  'ecard_by_sender_ip' => 'yn &ocirc;l cyferiad IP anfonwr', //cpg1.3.0
  'ecard_by_recipient_name' => 'yn &ocirc;l enw derbyniwr', //cpg1.3.0
  'ecard_by_recipient_email' => 'yn &ocirc;l ebost derbyniwr', //cpg1.3.0
  'ecard_number' => 'dangos cofnod %s i %s o %s', //cpg1.3.0
  'ecard_goto_page' => 'mynd i dudalen', //cpg1.3.0
  'ecard_records_per_page' => 'Cofnod ar bob tudalen', //cpg1.3.0
  'check_all' => 'Dewis y cyfan', //cpg1.3.0
  'uncheck_all' => 'Dewis dim un', //cpg1.3.0
  'ecards_delete_selected' => 'Dileu egardiau ddewiswyd', //cpg1.3.0
  'ecards_delete_confirm' => 'Wyt ti\'n siwr dy fod am ddileu\'r cofnodion? Ticia\'r blwch!', //cpg1.3.0
  'ecards_delete_sure' => 'Ydw, siwr!', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Mae angen teipio dy enw a sylw',
  'com_added' => 'Cafodd dy sylw ei ychwanegu',
  'alb_need_title' => 'Rhaid i ti roi teitl i\'r llyfr lluniau !',
  'no_udp_needed' => 'Dim angen diweddaru.',
  'alb_updated' => 'Cafodd y llyfr lluniau ei ddiweddaru',
  'unknown_album' => 'Dyw\'r llyfr lluniau ddewises di ddim yn bodoli neu does gen ti ddim hawl anfon lluniau i\'r llyfr lluniau hwn',
  'no_pic_uploaded' => 'Dim ffeil wedi\'i anfon !<br /><br />Os ddewises di ffeil gwna\'n siwr bod y gweinydd yn caniat&aacute;u anfon ffeiliau...', //cpg1.3.0
  'err_mkdir' => 'Methwyd creu cyfeiriadur %s !',
  'dest_dir_ro' => 'Does dim modd i\'r sgript ysgrifennu i gyfeiriadur %s !',
  'err_move' => 'Amhosib symud %s i %s !',
  'err_fsize_too_large' => 'Mae maint y ffeil wnes di anfon yn rhy fawr (uchafswm sy\'n cael ei ganiat&aacute;u yw %s x %s) !', //cpg1.3.0
  'err_imgsize_too_large' => 'Mae maint y ffeil wnes di anfon yn rhy fawr (uchafswm sy\'n cael ei ganiat&aacute;u yw %s KB) !',
  'err_invalid_img' => 'Dyw\'r ffeil wnes di anfon ddim yn ddelwedd ddilys !',
  'allowed_img_types' => 'Dim ond %s delwedd allu di anfon.',
  'err_insert_pic' => 'Does dim modd rhoi ffeil \'%s\' yn y Llyfr Lluniau', //cpg1.3.0
  'upload_success' => 'Diolch yn fawr iawn i ti.<br /><br />Cafodd dy lun ei anfon yn llwyddiannus.<br /><br />Bydd i\'w weld ar y wefan cyn bo hir.', //cpg1.3.0
  'notify_admin_email_subject' => '%s - cyfraniad newydd', //cpg1.3.0
  'notify_admin_email_body' => 'Mae llun i\'w gymeradwyo wedi cael ei anfon gan %s.<br /><br />Cer i %s', //cpg1.3.0
  'info' => 'Gwybodaeth',
  'com_added' => 'Ychwanegwyd sylw',
  'alb_updated' => 'Diweddarwyd y Llyfr Lluniau',
  'err_comment_empty' => 'Mae\'r sylw\'n wag !',
  'err_invalid_fext' => 'Dim ond ffeil gydag un o\'r estyniadau canlynol sy\'n cael eu derbyn : <br /><br />%s.',
  'no_flood' => 'Mae\'n ddrwg gen i ond ti yw awdur y sylw diwethaf ar y ffeil hon<br /><br />Rhaid i ti olygu\'r sylw sydd yno os wyt ti am ei newid', //cpg1.3.0
  'redirect_msg' => 'Rwyt ti\'n cael dy anfon ymlaen.<br /><br /><br />Clicia \'PARHAU\' os nad yw\'r dudalen yn diweddaru\'n awtomatig',
  'upl_success' => 'Cafodd dy ffeil ei ychwanegu\'n llwyddiannus', //cpg1.3.0
  'email_comment_subject' => 'Sylw ar lyfr lluniau Coppermine', //cpg1.3.0
  'email_comment_body' => 'Mae rhywun wedi ychwanegu sylw i dy lyfr lluniau. Cer i\'w weld yn', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Pennawd',
  'fs_pic' => 'llun maint llawn',
  'del_success' => 'dilewyd yn llwyddiannus',
  'ns_pic' => 'llun maint arferol',
  'err_del' => 'methu dileu',
  'thumb_pic' => 'bawdlun',
  'comment' => 'sylw',
  'im_in_alb' => 'llun yn Llyfr Lluniau',
  'alb_del_success' => 'Dilewyd Llyfr Lluniau \'%s\'',
  'alb_mgr' => 'Rheolwr Llyfrau Lluniau',
  'err_invalid_data' => 'Derbyniwyd data annilys yn \'%s\'',
  'create_alb' => 'Creu Llyfr Lluniau \'%s\'',
  'update_alb' => 'Diweddaru Llyfr Lluniau \'%s\' gyda theitl \'%s\' a mynegai \'%s\'',
  'del_pic' => 'Dileu ffeil', //cpg1.3.0
  'del_alb' => 'Dileu llyfr lluniau',
  'del_user' => 'Dileu defnyddiwr',
  'err_unknown_user' => 'Dyw\'r defnyddiwr ddim yn bodoli !',
  'comment_deleted' => 'Cafodd y sylw ei ddileu\'n llwyddiannus',
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
  'confirm_del' => 'Wyt ti\\\'n siwr dy fod am DDILEU\\\'r ffeil yma ? Bydd sylwadau hefyd yn cael eu dileu.', //js-alert //cpg1.3.0
  'del_pic' => 'DILEU FFEIL', //cpg1.3.0
  'size' => '%s x %s picsel',
  'views' => '%s gwaith',
  'slideshow' => 'Sioe sleidiau',
  'stop_slideshow' => 'ATAL',
  'view_fs' => 'Clicia i weld llun maint llawn',
  'edit_pic' => 'Golygu\'r disgrifiad', //cpg1.3.0
  'crop_pic' => 'Torri a Throi', //cpg1.3.0
);

$lang_picinfo = array(
  'title' =>'Gwybodaeth Ffeil', //cpg1.3.0
  'Filename' => 'Enw\'r ffeil',
  'Album name' => 'Enw\'r Llyfr Lluniau',
  'Rating' => 'Gradd (%s votes)',
  'Keywords' => 'Geiriau allweddol',
  'File Size' => 'Maint y ffeil',
  'Dimensions' => 'Deimensiynau',
  'Displayed' => 'Dangoswyd',
  'Camera' => 'Camera',
  'Date taken' => 'Dyddiad tynnu',
  'ISO'=>'ISO',
  'Aperture' => 'Agorfa',
  'Exposure time' => 'Amser dinoethiad',
  'Focal length' => 'Hyd ffocal',
  'Comment' => 'Sylw',
  'addFav'=>'Rhoi yn Ffefrynnau', //cpg1.3.0
  'addFavPhrase'=>'Ffefrynnau', //cpg1.3.0
  'remFav'=>'Tynnu o Ffefrynnau', //cpg1.3.0
  'iptcTitle'=>'Teitl IPTC', //cpg1.3.0
  'iptcCopyright'=>'Hawlfraint IPTC', //cpg1.3.0
  'iptcKeywords'=>'Allweddeiriau IPTC', //cpg1.3.0
  'iptcCategory'=>'Categori IPTC', //cpg1.3.0
  'iptcSubCategories'=>'Is-gategoriau IPTC', //cpg1.3.0
);

$lang_display_comments = array(
  'OK' => 'IAWN',
  'edit_title' => 'Golygu\'r sylw hwn',
  'confirm_delete' => 'Hollol siwr dy fod am ei ddileu ?', //js-alert
  'add_your_comment' => 'Ychwanega dy sylw',
  'name'=>'Enw',
  'comment'=>'Sylw',
  'your_name' => 'Dienw',
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Clicia ar y llun i gau\'r ffenest',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Anfon egerdyn',
  'invalid_email' => '<b>Rhybudd</b> : cyfeiriad ebost annilys !',
  'ecard_title' => 'Egerdyn i ti wrth %s',
  'error_not_image' => 'Dim ond lluniau all gael eu hanfon fel egardiau.', //cpg1.3.0
  'view_ecard' => 'Os nad yw\'r egerdyn yn edrych yn iawn, clicia\'r ddolen hon',
  'view_more_pics' => 'Clicia\'r ddolen hon i weld mwy o luniau !',
  'send_success' => 'Anfonwyd dy egerdyn',
  'send_failed' => 'Mae\'n ddrwg gen i ond all y gweinydd ddim anfon dy egerdyn...',
  'from' => 'Wrth',
  'your_name' => 'Dy enw',
  'your_email' => 'Dy gyfeiriad ebost',
  'to' => 'I',
  'rcpt_name' => 'Enw derbyniwr',
  'rcpt_email' => 'Ebost derbyniwr',
  'greetings' => 'Cyfarchiad',
  'message' => 'Neges',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Gwybodaeth ffeil', //cpg1.3.0
  'album' => 'Llyfr Lluniau',
  'title' => 'Teitl',
  'desc' => 'Disgrifiad',
  'keywords' => 'Geiriau allweddol',
  'pic_info_str' => '%s &times; %s - %s KB - %s golwg - %s pleidlais',
  'approve' => 'Cymeradwyo ffeil', //cpg1.3.0
  'postpone_app' => 'Oedi cyn cymeradwyo',
  'del_pic' => 'Dileu ffeil', //cpg1.3.0
  'read_exif' => 'Darllen gwybodaeth EXIF eto', //cpg1.3.0
  'reset_view_count' => 'Ailosdod cyfri sawl golwg',
  'reset_votes' => 'Ailosod cyfri sawl pleidlais',
  'del_comm' => 'Dileu sylwadau',
  'upl_approval' => 'Cymeradwyo ffeil',
  'edit_pics' => 'Golygu ffeil', //cpg1.3.0
  'see_next' => 'Gweld y ffeiliau nesaf', //cpg1.3.0
  'see_prev' => 'Gweld y ffeiliau blaenorol', //cpg1.3.0
  'n_pic' => '%s ffeil', //cpg1.3.0
  'n_of_pic_to_disp' => 'Nifer o ffeiliau i ddangos', //cpg1.3.0
  'apply' => 'Cadw newidiadau', //cpg1.3.0
  'crop_title' => 'Golygydd Lluniau Coppermine', //cpg1.3.0
  'preview' => 'Rhagolwg', //cpg1.3.0
  'save' => 'Cadw llun', //cpg1.3.0
  'save_thumb' =>'Cadw fel bawdlun', //cpg1.3.0
  'sel_on_img' =>'Rhaid i\\\'r detholiad i gyd fod ar y llun!', //js-alert //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Cwestiynau Cyffredin', //cpg1.3.0
  'toc' => 'Tabl cynnwys', //cpg1.3.0
  'question' => 'Cwestiwn:  ', //cpg1.3.0
  'answer' => 'Ateb:  ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'Cyffredinol', //cpg1.3.0
  array('Pam fod angen i fi gofrestru?', 'Bydd rhai Gweinyddwyr angen i ti gofrestru, a rhai ddim. O gofrestru fe gei di nodweddion ychwanegol fel anfon lluniau, creu rhestr Ffefrynnau, graddio lluniau, a chyflwyno sylwadau ayb. ', 'allow_user_registration', '1'), //cpg1.3.0
  array('Sut mae cofrestru?', 'Cer i &quot;Cofrestru&quot; a llenwi\'r meysydd gorfodol (a\'r rhai dewisol os wyt ti eisiau). Os yw\'r gweinyddwr wedi galluogi Ebost, fe fyddi di\'n derbyn ebost drwy\'r cyfeiriad roies di wrth gofrestru yn cynnwys cyfarwyddiadau ar sut i fynd ati i weithredu dy gyfrif. Rhaid gweithredu\'r cyfrif cyn mewngofnodi.', 'allow_user_registration', '1'), //cpg1.3.0
  array('Sut mae mewngofnodi?', 'Cer i &quot;Mewngofnodi&quot;, llenwa\'r bylchau gyda dy enw defnyddiwr a chyfrinair, a rhoi tic yn y blwch &quot;Cofia fi\'r tro nesaf&quot; os wyt ti eisiau mewngofnodi\'n syth bob tro.  PWYSIG: Rhaid galluogi cwcis a rhaid peidio dileu\'r cwci o\'r safle hwn cyn bod &quot;Cofia fi\'r tro nesaf&quot; yn gweithio.', 'offline', 0), //cpg1.3.0
  array('Alla i ddim mewngofnodi. Pam?', 'Wnes di gofrestru a rhoi clec i\'r ddolen ges di mewn ebost? Mae\'r ddolen yn gwneud dy gyfri\'n weithredol. Cysyllta &acirc;\'r gweinyddwr os yw dy broblem mewngofnodi\'n parhau.', 'offline', 0), //cpg1.3.0
  array('Beth os wna i anghofio cyfrinair?', 'Os oes gan y safle ddolen &quot;Wedi anghofio cyfrinair&quot; defnyddia hi. Fel arall, cysyllta &acirc;\'r gweinyddwr am gyfrinair newydd.', 'offline', 0), //cpg1.3.0
  array('Beth os ydw i wedi newid fy nghyfeiriad ebost?', 'Mewngofnoda a newid dy gyfeiriad ebost drwy roi clec i &quot;Fy mhroffil&quot;', 'offline', 0), //cpg1.3.0
  array('Sut mae cadw llun yn &quot;Ffefrynnau&quot;?', 'Clicia ar y llun a wedyn ar y ddolen &quot;gwybodaeth ffeil&quot; (<img src="images/info.gif" width="16" height="16" border="0" alt="Picture information" />); sgrolia lawr i\'r wybodaeth a rho glec i &quot;Ychwanegu at ffefrynnau&quot;. Efallai na fydd y gweinyddwr wedi dewis gwneud &quot;gwybodaeth ffeil&quot; yn weithredol.  PWYSIG: Rhaid galluogi cwcis a rhaid peidio dileu\'r cwci o\'r safle hwn.<b></b>.', 'offline', 0), //cpg1.3.0
  array('Sut mae graddio ffeil?', 'Clicia ar un o\'r bawdluniau a cher i\'r gwaelod i ddewis gradd.', 'offline', 0), //cpg1.3.0
  array('Sut mae ychwanegu sylwadau at lun?', 'Clicia ar un o\'r bawdluniau a cher i\'r gwaelod i ychwanegu sylw.', 'offline', 0), //cpg1.3.0
  array('Sut mae anfon llun?', 'Cer i &quot;Anfon llun&quot; a dewis y llyfr lluniau i anfon y llun iddo, rho glec i &quot;Pori&quot; neu &quot;Browse&quot; (mae\'n bryd i ti ddechrau defnyddio porwr Cymraeg!) a chwilia am y ffeil rwyt ti am anfon, wedyn rho glec i &quot;agor neu open&quot; (gallu di roi teitl a disgrifiad os wyt ti eisiau) a rho glec i &quot;Parhau&quot;', 'offline', 0), //cpg1.3.0
  array('I ble alla i anfon llun?', 'Gallu di anfon llun i un o dy lyfrau lluniau yn &quot;Fy oriel&quot;. Efallai fydd y Gweinyddwr hefyd yn caniat&aacute;u i ti anfon llun i un neu fwy o\'r llyfrau lluniau cyhoeddus.', 'allow_private_albums', 0), //cpg1.3.0
  array('Pa fath o lun alla i anfon, a pha faint?', 'Dewis y Gweinyddwr yw pa fath o ffeil, a pha faint allu di anfon (jpg, png, ayb).', 'offline', 0), //cpg1.3.0
  array('Beth yw &quot;Fy oriel&quot;?', 'Oriel bersonol y gall defnyddiwr reoli ac anfon lluniau iddi yw &quot;Fy oriel&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Sut rwy\'n creu, ailenwi neu ddileu llyfr lluniau yn &quot;Fy oriel&quot;?', 'Newid i &quot;Modd Gweinyddwr&quot;<br />Cer i &quot;Creu/trefnu fy Llyfrau Lluniau&quot; a rho glec i &quot;Newydd&quot;. Newid &quot;Llyfr lluniau newydd&quot; ar y gwaelod i\'r enw rwyt ti eisiau. Rwyt ti hefyd yn gallu ailenwi llyfrau lluniau yn dy oriel.<br />Rho glec i &quot;Cadw newidiadau&quot; cyn gorffen.', 'allow_private_albums', 0), //cpg1.3.0
  array('Sut alla i wahardd defnyddwyr rhag gweld fy llyfrau lluniau?', 'Newid i &quot;Modd Gweinyddwr&quot; Cer i &quot;Addasu fy Llyfrau Lluniau&quot; Dewis y llyfr lluniau rwyt ti eisiau diweddaru neu addasu yn y ddewislen yn y bar &quot;Diweddaru llyfr lluniau&quot;.<br />Wedyn fe allu di newid enw, disgrifiad, llun bawdlun, y gosodiadau gweld, sylwadau a graddio.<br />Rho glec i &quot;Diweddaru Llyfr Lluniau&quot; cyn gorffen.', 'allow_private_albums', 0), //cpg1.3.0
  array('Sut alla i weld orielau pobl eraill?', 'Cer i &quot;Rhestr Llyfrau Lluniau&quot; a dewis &quot;Orielau Defnyddwyr&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Beth yw cwci?', 'Talp o ddata testun plaen sy\'n cael ei anfon o wefan a\'i osod ar dy gyfrifiadur. Mae\'n gallu storio gwybodaeth, er enghraifft gwybodaeth sy\'n dy alluogi i adael a dychwelyd i safle heb orfod mewngofnodi eto, neu wybodaeth am ddewisiadau iaith.', 'offline', 0), //cpg1.3.0
  array('Ble alla i gael gael copi o\'r meddalwedd hwn?', 'Mae Coppermine yn Oriel Aml-gyfrwng rhad ac am ddim ryddhawyd dan Trwydded Gyhoeddus Gyffredinol GNU (TGG GNU). Mae\'n cynnwys llawer o nodweddion ac yn gweithio ar systemau gwahanol. Cer i <a href="http://coppermine.sf.net/">wefan Coppermine</a> i gael gwybod mwy a\'i lwytho i dy gyfrifiadur.', 'offline', 0), //cpg1.3.0

  'Symud o gwmpas y safle ', //cpg1.3.0
  array('Beth yw &quot;Rhestr Llyfrau Lluniau&quot;?', 'Mae hwn yn dangos popeth yn y categori rwyt ti ynddo, gyda dolen i bob llyfr lluniau. Os nag wyt ti mewn categori, mae\'n dangos yr oriel gyfan gyda dolen i bob categori. Gall bawdlun fod yn ddolen i\'r categori.', 'offline', 0), //cpg1.3.0
  array('Beth yw &quot;Fy oriel&quot;?', 'Mae hwn yn galluogi defnyddiwr i greu ei oriel ei hun gan ychwanegu, dileu neu addasu llyfrau lluniau neu anfon lluniau iddyn nhw.', 'allow_private_albums', 0), //cpg1.3.0
  array('Beth yw the difference between &quot;Modd gweinyddwr&quot; and &quot;Modd defnyddiwr&quot;?', 'This feature, when in admin-mode, allows a user to modify their gallery (as well as others if allowed by the administrator).', 'allow_private_albums', 0), //cpg1.3.0
  array('Beth yw &quot;Anfon llun&quot;?', 'Drwy roi clec i hwn fe allu di anfon llun i oriel neu lyfr lluniau o dy ddewis di. Y gweinyddwr sy\'n penderfynu pa fath a ffeil a pha faint all hi fod, a phwy sydd &acirc;\'r hawl i anfon lluniau i ble!.', 'offline', 0), //cpg1.3.0
  array('Beth yw &quot;Lluniau mwyaf newydd&quot;?', 'Mae\'n dangos y lluniau diweddaraf i gael eu hanfon i\'r safle.', 'offline', 0), //cpg1.3.0
  array('Beth yw &quot;Sylwadau diwethaf&quot;?', 'Mae\'n dangos y sylwadau diweddaraf gyda\'r lluniau sy\'n cydfynd &acirc; nhw.', 'offline', 0), //cpg1.3.0
  array('Beth yw &quot;Edrychwyd arno fwyaf&quot;?', 'Mae\'n dangos y lluniau mae defnyddwyr wedi edrych arnyn nhw fwyaf.', 'offline', 0), //cpg1.3.0
  array('Beth yw &quot;Gradd uchaf&quot;?', 'Mae\'n dangos y ffeliau sydd wedi cael y graddau uchaf gan ddefnyddwyr (e.e: os yw pump defnyddiwr yn rhoi gradd o <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: cyfartaledd gradd y ffeil fydd <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ; byddai cael pump defnyddiwr yn rhoi gradd o 1 i 5 (1,2,3,4,5) hefyd yn creu cyfartaledd o <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .) Mae\'r graddau\'n mynd o <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (gorau) i <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (gwaethaf).', 'offline', 0), //cpg1.3.0
  array('Beth yw &quot;Ffefrynnau&quot;?', 'Mae defnyddiwr yn gallu creu rhestr o\'i hoff luniau, ac mae gwybodaeth am rhain yn cael eu cadw mewn cwci. Mae modd eu llwytho lawr wedyn ar ffurf ffeil ZIP os yw\'n dewis.', 'offline', 0), //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Atgoffa ti o dy gyfrinair', //cpg1.3.0
  'err_already_logged_in' => 'Rwyt ti wedi mewngofnodi\'n barod !', //cpg1.3.0
  'enter_username_email' => 'Rho dy enw defnyddiwr neu dy gyfeiriad ebost', //cpg1.3.0
  'submit' => 'Anfon', //cpg1.3.0
  'failed_sending_email' => 'Does dim modd anfon ebost i dy atgoffa ti o dy gyfrinair !', //cpg1.3.0
  'email_sent' => 'Anfonwyd ebost yn cynnwys dy enw defnyddiwr a dy gyfrinair iS %s', //cpg1.3.0
  'err_unk_user' => 'Dyw\'r defnyddiwr yma ddim yn bodoli!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - Atgoffa ti o dy gyfrinair', //cpg1.3.0
  'passwd_reminder_body' => 'Rwyt ti wedi gwneud cais i gael dy atgoffa o dy wybodaeth mewngofnodi:
Enw: %s
Cyfrinair: %s
Clicia %s i fewngofnodi.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Enw grwp',
  'disk_quota' => 'Cwota disg',
  'can_rate' => 'Hawl graddio ffeiliau', //cpg1.3.0
  'can_send_ecards' => 'Hawl anfon egardiau',
  'can_post_com' => 'Hawl cyflwyno sylwadau',
  'can_upload' => 'Hawl anfon lluniau', //cpg1.3.0
  'can_have_gallery' => 'Hawl i gael oriel bersonol',
  'apply' => 'Cadw\'r newidiadau',
  'create_new_group' => 'Creu grwp newydd',
  'del_groups' => 'Dileu\'r grwp(iau) ddewiswyd',
  'confirm_del' => 'Rhybudd: pan fyddi di\\\'n dileu grwp bydd defnyddwyr sy\\\'n rhan o\\\'r grwp yn cael eu trosglwyddo i grwp \\\'Wedi cofrestru\\\'! Wyt ti eisiau parhau?', //js-alert //cpg1.3.0
  'title' => 'Rheoli grwpiau defnyddwyr',
  'approval_1' => 'Cymeradwyo anfon cyhoeddus (1)',
  'approval_2' => 'Cymeradwyo anfon preifat (2)',
  'upload_form_config' => 'Cyfluniad ffurflen anfon', //cpg1.3.0
  'upload_form_config_values' => array( 'Ffeiliau unigol yn unig', 'Ffeiliau lluosog yn unig', 'Anfon URI yn unig', 'Anfon ZIP yn unig', 'Ffeil-URI', 'Ffeil-ZIP', 'URI-ZIP', 'Ffeil-URI-ZIP'), //cpg1.3.0
  'custom_user_upload'=>'Gall defnyddiwr newid nifer o flychau anfon?', //cpg1.3.0
  'num_file_upload'=>'Uchafswm/union rif blychau anfon ffeiliau', //cpg1.3.0
  'num_URI_upload'=>'Uchafswm/union rif blychau anfon URI', //cpg1.3.0
  'note1' => '<b>(1)</b> Mae angen cymeradwyo ffeiliau i oriel gyhoeddus',
  'note2' => '<b>(2)</b> Mae angen cymeradwyo ffeiliau i oriel sy\'n eiddo i\'r defnyddiwr',
  'notes' => 'Nodiadau',
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Croeso !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Wyt ti\\\'n siwr dy fod am DDILEU y llyfr lluniau? Bydd pob ffeil a sylw hefyd yn cael eu dileu.', //js-alert //cpg1.3.0
  'delete' => 'DILEU',
  'modify' => 'PRIODWEDDAU',
  'edit_pics' => 'GOLYGU FFEIL', //cpg1.3.0
);

$lang_list_categories = array(
  'home' => 'Cartref',
  'stat1' => '<b>Gwybodaeth: [pictures]</b> ffeil, <b>[albums]</b> Llyfr Lluniau, <b>[cat]</b> categori.', //cpg1.3.0
  'stat2' => '<b>[pictures]</b> ffeil mewn <b>[albums]</b> llyfr lluniau edrychwyd arno <b>[views]</b> gwaith', //cpg1.3.0
  'xx_s_gallery' => 'Oriel %',
  'stat3' => '<b>[pictures]</b> ffeil mewn <b>[albums]</b> Llyfr Lluniau<b>', //cpg1.3.0
);

$lang_list_users = array(
  'user_list' => 'Rhestr defnyddwyr',
  'no_user_gal' => 'Does dim orielau defnyddwyr',
  'n_albums' => '%s llyfra(au) lluniau',
  'n_pics' => '%s ffeil(iau)', //cpg1.3.0
);

$lang_list_albums = array(
  'n_pictures' => '%s ffeil', //cpg1.3.0
  'last_added' => ', anfonwyd yr un diwethaf - %s',
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Mewngofnodi',
  'enter_login_pswd' => 'Rho enw defnyddiwr a chyfrinair i fewngofnodi',
  'username' => 'Enw defnyddiwr',
  'password' => 'Cyfrinair',
  'remember_me' => 'Cofia fi\'r tro nesaf',
  'welcome' => 'Shwmai %s ...',
  'err_login' => '*** Methu dy fewngofnodi. Rho gynnig arall arni ***',
  'err_already_logged_in' => 'Rwyt ti wedi mewngofnodi\'n barod !',
  'forgot_password_link' => 'Wedi anghofio dy gyfrinair', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Allgofnodi',
  'bye' => 'Hwyl am nawr %s ...',
  'err_not_loged_in' => 'Dwyt ti ddim wedi mewngofnodi !',
);

// ------------------------------------------------------------------------- //
// File phpinfo.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'Gwybodaeth PHP', //cpg1.3.0
  'explanation' => 'Hwn yw\'r allbwn sy\'n cael ei greu gan <a href="http://www.php.net/phpinfo">gwybodaeth php()</a>.', //cpg1.3.0
  'no_link' => 'Gall caniat&aacute;u i eraill weld dy wybodaeth php fod yn beryglus, a dyna pam mae\'r dudalen hon ond yn weladwy pan fyddi di wedi mewngofnodi fel gweinyddwr. Allu di ddim creu dolen i eraill i\'r dudalen hon.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Diweddaru llyfr lluniau %s',
  'general_settings' => 'Gosodiadau cyffredinol',
  'alb_title' => 'Teitl llyfr lluniau',
  'alb_cat' => 'Categori llyfr lluniau',
  'alb_desc' => 'Disgrifiad o\'r llyfr lluniau',
  'alb_thumb' => 'Bawdlun y llyfr lluniau',
  'alb_perm' => 'Caniatadau i\'r llyfr lluniau hwn',
  'can_view' => 'Gall y canlynol ei weld',
  'can_upload' => 'Gall ymwelwyr lwytho ffeiliau',
  'can_post_comments' => 'Gall ymwelwyr adael sylwadau',
  'can_rate' => 'Gall ymwelwyr raddio ffeiliau',
  'user_gal' => 'Oriel defnyddiwr',
  'no_cat' => '* Dim categori *',
  'alb_empty' => 'Mae\'r llyfr lluniau\'n wag',
  'last_uploaded' => 'Anfonwyd ddiwethaf',
  'public_alb' => 'Pawb (llyfr cyhoeddus)',
  'me_only' => 'Fi yn unig',
  'owner_only' => 'Perchennog yn unig (%s)',
  'groupp_only' => 'Aelodau grwp \'%s\'',
  'err_no_alb_to_modify' => 'Dim llyfr lluniau i\'w ddiweddaru yn y b&acirc;s data.',
  'update' => 'Diweddaru llyfr lluniau', //cpg1.3.0
  'notice1' => '(*) dibynnu ar osodiadau %sgrwp%s', //cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Mae\'n flin gen i ond rwyt ti eisoes wedi graddio\'r ffeil', //cpg1.3.0
  'rate_ok' => 'Cafodd dy bleidlais ei derbyn',
  'forbidden' => 'Allu di ddim graddio dy ffeiliau dy hunan.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Tra bod gweinyddwyr {SITE_NAME} yn ceisio symud unrhyw ddeunydd annymunol cyn gynted &acirc; phosib, mae'n amhosib rhoi sylw i bob cyfraniad. Rwyt ti felly'n derbyn bod cyfraniadau i'r safle hwn yn cynrychioli barn yr awdur, ac nid o reidrwydd gweinyddwyr y safle, a fyddan nhw felly ddim yn atebol amdanyn nhw.<br />
<br />
Rwyt ti'n cytuno i beidio anfon sylwadau anweddus, ymosodol, atgas, rhywiol eu natur, bygythiol, enllibus, neu unrhyw beth arall sy'n groes i'r gyfraith. Rwyt ti'n cytuno bod gan gwefeistr, gweinyddwyr a chymedrolwyr safwe {SITE_NAME} yr hawl i dynnu neu olygu gwybodaeth ar unrhyw adeg. Fel defnyddiwr rwyt ti'n cytuno i wybodaeth rwyt ti wedi ei gyflwyno i gael ei gadw ar f&acirc;s data. Er na fydd y wybodaeth yn cael ei datgelu i unrhyw un heb dy ganiat&acirc;d all y gwefeistr na'r gweinyddwyr ddim fod yn gyfrifol dros unrhyw ymdrech lwyddiannus i hacio'r safle all arwain at ddatgelu gwybodaeth.<br />
<br />
Mae'r safle'n defnyddio cwcis i gadw gwybodaeth ar dy gyfrifiadur di. Unig nod y cwcis hyn yw gwneud pethau'n haws i ti. Yr unig ddefnydd fydd yn cael ei wneud o dy gyfeiriad ebost yw cadarnhau dy enw a chyfrinair.<br />
<br />
Drwy roi clec i 'Cytuno' rwyt ti'n cytuno i dderbyn yr amodau hyn.
EOT;

$lang_register_php = array(
  'page_title' => 'Cofrestru defnyddiwr',
  'term_cond' => 'Telerau ac amodau',
  'i_agree' => 'Cytuno',
  'submit' => 'Anfon gwybodaeth gofrestru',
  'err_user_exists' => 'Mae\'r enw defnyddiwr eisoes yn cael ei ddefnyddio. Dewis un arall os gweli di\'n dda',
  'err_password_mismatch' => 'Dyw\'r ddau gyfrinair ddim yr un peth. Rho gynnig arall arni.',
  'err_uname_short' => 'Rhaid i\'r enw defnyddiwr fod o leiaf 2 lythyren o hyd',
  'err_password_short' => 'Rhaid i\'r enw cyfrinair fod o leiaf 2 lythyren o hyd',
  'err_uname_pass_diff' => 'Rhaid i\'r enw defnyddiwr a chyfrinair fod yn wahanol',
  'err_invalid_email' => 'Ebost annerbyniol',
  'err_duplicate_email' => 'Mae defnyddiwr arall eisoes wedi cofrestru gyda\'r cyfeiriad ebost hwn',
  'enter_info' => 'Gwybodaeth gofrestru',
  'required_info' => 'Meysydd gorfodol',
  'optional_info' => 'Meysydd dewisiol',
  'username' => 'Enw',
  'password' => 'Cyfrinair',
  'password_again' => 'Cyfrinair eto',
  'email' => 'Ebost',
  'location' => 'Lleoliad',
  'interests' => 'Diddordebau',
  'website' => 'Gwefan',
  'occupation' => 'Gwaith',
  'error' => 'GWALL',
  'confirm_email_subject' => '%s - Cadarnhau cofrestru',
  'information' => 'Gwybodaeth',
  'failed_sending_email' => 'Does dim modd anfon yr ebost i gadarnhau cofrestru!',
  'thank_you' => 'Diolch am gofrestru.<br /><br />Mae ebost yn cynnwys gwybodaeth am sut i weithredu\'r cyfri wedi cael ei anfon i\'r cyfeiriad ebost wnes di ddarparu.',
  'acct_created' => 'Mae dy gyfri wedi cael ei greu ac mae modd i ti fewngofnodi gyda dy enw defnyddiwr a chyfrinair',
  'acct_active' => 'Mae dy gyfri\'n weithredol ac mae modd i ti fewngofnodi gyda dy enw defnyddiwr a chyfrinair',
  'acct_already_act' => 'Mae dy gyfri\'n weithredol yn barod !',
  'acct_act_failed' => 'Does dim modd gweithredu\'r cyfri hwn !',
  'err_unk_user' => 'Dyw\'r defnyddiwr ddim yn bodoli !',
  'x_s_profile' => 'Proffil %s\'',
  'group' => 'Grwp',
  'reg_date' => 'Dyddiad ymuno',
  'disk_usage' => 'Defnydd',
  'change_pass' => 'Newid cyfrinair',
  'current_pass' => 'Cyfrnair cyfredol',
  'new_pass' => 'Cyfrinair newydd',
  'new_pass_again' => 'Cyfrinair newydd eto',
  'err_curr_pass' => 'Cyfrinair cyfredol yn anghywir',
  'apply_modif' => 'Cadw newidiadau',
  'change_pass' => 'Newid fy nghyfrinair',
  'update_success' => 'Diweddarwyd dy broffil',
  'pass_chg_success' => 'Mae dy gyfrinair wedi cael ei newid',
  'pass_chg_error' => 'Dyw dy gyfrinair ddim wedi cael ei newid',
  'notify_admin_email_subject' => '%s - Cofrestru defnyddiwr newydd', //cpg1.3.0
  'notify_admin_email_body' => 'Mae defnyddiwr newydd gyda\'r enw "%s" wedi cofrestru yn dy oriel', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
Diolch am gofrestru gyda {SITE_NAME}

Dy enw defnyddiwr yw : "{USER_NAME}"
Dy gyfrinair yw : "{PASSWORD}"

I weithredu dy gyfrif rho glec i\'r ddolen isod neu copia hi a\'i gludo ym mar cyfeiriad dy borwr.

{ACT_LINK}

Pob hwyl,

Gweinyddwyr {SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'Adolygu sylwadau',
  'no_comment' => 'Does dim sylw i adolygu',
  'n_comm_del' => 'Dilewyd %s sylw(adau)',
  'n_comm_disp' => 'Nifer o sylwadau i\'w dangos',
  'see_prev' => 'Blaenorol',
  'see_next' => 'Nesaf',
  'del_comm' => 'Dileu sylwadau',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
  0 => 'Chwilio\'r casgliad ffeiliau',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Chwilio ffeiliau newydd', //cpg1.3.0
  'select_dir' => 'Dewis cyfeiriadur',
  'select_dir_msg' => 'Mae modd i ti swp-brosesu ffeiliau sydd wedi cael eu hanfon i\'r gweinydd drwy FTP. Dewis y cyfeiriadur ble rwyt ti wedi anfon dy ffeiliau', //cpg1.3.0
  'no_pic_to_add' => 'Does dim ffeil i ychwanegu', //cpg1.3.0
  'need_one_album' => 'Mae angen o leiaf un llyfr lluniau arnat ti i ddefnyddio hwn',
  'warning' => 'Rhybudd',
  'change_perm' => 'All y sgript ddim ysgrifennu i\'r cyfeiriadur hwn. Mae angen newid caniatadau i 755 neu 777 cyn ceisio llwytho\'r ffeiliau !', //cpg1.3.0
  'target_album' => '<b>Rhoi ffeiliau &quot;</b>%s<b>&quot; mewn i </b>%s', //cpg1.3.0
  'folder' => 'Ffolder',
  'image' => 'Ffeil',
  'album' => 'Llyfr Lluniau',
  'result' => 'Canlyniad',
  'dir_ro' => 'Dim modd ysgrifennu. ',
  'dir_cant_read' => 'Dim modd darllen. ',
  'insert' => 'Ychwanegu ffeiliau newydd i\'r oriel', //cpg1.3.0
  'list_new_pic' => 'Rhestr o ffeiliau newydd', //cpg1.3.0
  'insert_selected' => 'Gosod y ffeiliau ddewiswyd', //cpg1.3.0
  'no_pic_found' => 'Heb ganfod ffeil newydd', //cpg1.3.0
  'be_patient' => 'Amynedd os gweli di\'n dda, mae angen amser ar y sgript i ychwanegu\'r ffeiliau', //cpg1.3.0
  'no_album' => 'Dim llyfr lluniau wedi ei ddewis',  //cpg1.3.0
  'notes' =>  '<ul>'.
                          '<li><b>IA</b> : sy\'n golygu fod y ffeil wedi ei llwytho\'n llwyddiannus'.
                          '<li><b>CO</b> : sy\'n golygu fod y ffeil yn gopi o ffeil sydd eisoes yn y b&acirc;s data'.
                          '<li><b>CY</b> : sy\'n golygu nad oedd modd ychwanegu\'r ffeil; gwiria\'r cyfluniad a chaniatadau y cyfeiriadur ble roedd y ffeil i fod i gael ei anfon'.
                          '<li><b>DO</b> : sy\'n golygu nad wyt ti wedi dewis llyfr lluniau; rho glec i \'<a href="javascript:history.back(1)">blaenorol</a>\' a dewis llyfr lluniau. Os nag oes un yn bodoli <a href="albmgr.php">mae angen creu un yn gyntaf</a></li>'.
                          '<li>Os nag yw IA, CO, CY, DO i weld \'signs\' chwilia am neges PHP sy\'n dangos gwall'.
                          '<li>Os yw dy borwr yn rhedeg mas o amser rho glec i\'r botwm ail-lwytho'.
                          '</ul>', //cpg1.3.0
  'select_album' => 'Dewis llyfr lluniau', //cpg1.3.0
  'check_all' => 'Dewis y cyfan', //cpg1.3.0
  'uncheck_all' => 'Dewis dim', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Gwahardd Defnyddwyr',
  'user_name' => 'Enw defnyddiwr',
  'ip_address' => 'Cyfeiriad IP',
  'expiry' => 'Daw i ben (gwag yn barhaol)',
  'edit_ban' => 'Cadw newidiadau',
  'delete_ban' => 'Dileu',
  'add_new' => 'Gwaharddiad newydd',
  'add_ban' => 'Ychwanegu',
  'error_user' => 'Methu canfod defnyddiwr', //cpg1.3.0
  'error_specify' => 'Rhaid i ti nodi naill ai enw defnyddiwr neu gyfeiriad IP', //cpg1.3.0
  'error_ban_id' => 'Gwaharddiad annilys!', //cpg1.3.0
  'error_admin_ban' => 'Allu di ddim gwahardd dy hun!', //cpg1.3.0
  'error_server_ban' => 'Roeddet ti\'n mynd i wahardd dy weinydd dy hun? Twt twt, allu di ddim gwneud hynny...', //cpg1.3.0
  'error_ip_forbidden' => 'Allu di ddim gwahardd y cyfeiriad IP - dyw e ddim yn routable!', //cpg1.3.0
  'lookup_ip' => 'Chwilio cyfeiriad IP', //cpg1.3.0
  'submit' => 'Mynd', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Anfon llun', //cpg1.3.0
  'custom_title' => 'Ffurflen Gais Wedi Addasu', //cpg1.3.0
  'cust_instr_1' => 'Galli di ddewid nifer o flychau anfon. Serch hynny, alli di ddim dewis mwy na\'r uchafswm isod.', //cpg1.3.0
  'cust_instr_2' => 'Cais Rhif Blychau', //cpg1.3.0
  'cust_instr_3' => 'Blychau anfon ffeil: %s', //cpg1.3.0
  'cust_instr_4' => 'Blychau anfon URI/URL: %s', //cpg1.3.0
  'cust_instr_5' => 'Blychau anfon URI/URL:', //cpg1.3.0
  'cust_instr_6' => 'Blychau anfon ffeil:', //cpg1.3.0
  'cust_instr_7' => 'Rho\'r nifer o flychau anfon rwyt ti eisiau. Wedyn rho glec i \'Parhau\'. ', //cpg1.3.0
  'reg_instr_1' => 'Gweithred anghyfreithlon i greu ffurflen.', //cpg1.3.0
  'reg_instr_2' => 'Nawr rwyt ti\'n barod i anfon lluniau drwy ddefnyddio\'r blychau isod. Ddylai\'r lluniau ddim bod yn fwy na %s KB yr un. Ceisia leihau maint y lluniau cyn eu hanfon os allu di. Diolch am y lluniau!', //cpg1.3.0
  'reg_instr_3' => 'Os wyt ti eisiau ffeiliau archif neu ZIP i gael aeu dadgywasgu, rhaid i ti ddefnyddio\'r blwch yn y rhan \'Anfon ZIP Dadgywasgu\'.', //cpg1.3.0
  'reg_instr_4' => 'Pan fyddi di\'n defnyddio adran anfon URI/URL, rho lwybr y ffeil, er enghraifft: http://www.dysafle.com/delweddau/esiampl.jpg', //cpg1.3.0
  'reg_instr_5' => 'Pan fyddi di\'n barod, gwasga \'Parhau\'.', //cpg1.3.0
  'reg_instr_6' => 'Anfon ZIP Dadgywasgu:', //cpg1.3.0
  'reg_instr_7' => 'Anfon llun:', //cpg1.3.0
  'reg_instr_8' => 'Llwytho URI/URL:', //cpg1.3.0
  'error_report' => 'Adroddiad o wallau', //cpg1.3.0
  'error_instr' => 'Cafwyd problemau wrth anfon y canlynol:', //cpg1.3.0
  'file_name_url' => 'Enw ffeil/URL', //cpg1.3.0
  'error_message' => 'Gwall', //cpg1.3.0
  'no_post' => 'Methwyd llwytho\'r ffeil.', //cpg1.3.0
  'forb_ext' => 'Estyniad ffeil wedi ei wahardd.', //cpg1.3.0
  'exc_php_ini' => 'Mae ffeil yn fwy na\'r hyn sy\'n cael ei ganiat&aacute;u yn php.ini.', //cpg1.3.0
  'exc_file_size' => 'Mae ffeil yn fwy na\'r hyn sy\'n cael ei ganiat&aacute;u gan CPG.', //cpg1.3.0
  'partial_upload' => 'Heb anfon yn llawn.', //cpg1.3.0
  'no_upload' => 'Heb anfon yn iawn.', //cpg1.3.0
  'unknown_code' => 'Gwall nad yw PHP yn gyfarwydd ag ef.', //cpg1.3.0
  'no_temp_name' => 'Heb anfon - Dim enw temp.', //cpg1.3.0
  'no_file_size' => 'Dim data/wedi llygru', //cpg1.3.0
  'impossible' => 'Amhosib symud.', //cpg1.3.0
  'not_image' => 'Ddim yn llun/wedi llygru', //cpg1.3.0
  'not_GD' => 'Ddim yn estyniad GD.', //cpg1.3.0
  'pixel_allowance' => 'Uwch na\'r caniat&acirc;d picseli.', //cpg1.3.0
  'incorrect_prefix' => 'Rhagddodiad URI/URL anghywir', //cpg1.3.0
  'could_not_open_URI' => 'Methu agor URI.', //cpg1.3.0
  'unsafe_URI' => 'Methu gwirio diogelwch.', //cpg1.3.0
  'meta_data_failure' => 'Methiant gwybodaeth Meta', //cpg1.3.0
  'http_401' => '401 Dim caniat&acirc;d', //cpg1.3.0
  'http_402' => '402 Angen taliad', //cpg1.3.0
  'http_403' => '403 Gwaharddwyd', //cpg1.3.0
  'http_404' => '404 Heb ei ganfod', //cpg1.3.0
  'http_500' => '500 Gwall Mewnol Gweinydd', //cpg1.3.0
  'http_503' => '503 Gwasanaeth ddim ar gael', //cpg1.3.0
  'MIME_extraction_failure' => 'Methu pennu MIME.', //cpg1.3.0
  'MIME_type_unknown' => 'Math MIME anhysbys', //cpg1.3.0
  'cant_create_write' => 'Methu creu ffeil ysgrifennu.', //cpg1.3.0
  'not_writable' => 'Methu ysgrifennu i\'r ffeil.', //cpg1.3.0
  'cant_read_URI' => 'Methu darllen URI/URL', //cpg1.3.0
  'cant_open_write_file' => 'Methu agor ffeil ysgrifennu URI.', //cpg1.3.0
  'cant_write_write_file' => 'Methu ysgrifennu i ffeil URI.', //cpg1.3.0
  'cant_unzip' => 'Methu dadbacio ZIP.', //cpg1.3.0
  'unknown' => 'Gwall anhysbys', //cpg1.3.0
  'succ' => 'Ffeiliau wedi eu hanfon yn llwyddiannus', //cpg1.3.0
  'success' => 'Anfonwyd %s ffeil yn llwyddiannus.', //cpg1.3.0
  'add' => 'Rho glec i \'Parhau\' i ychwanegu ffeiliau i\'r llyfau lluniau.', //cpg1.3.0
  'failure' => 'Methiant wrth anfon', //cpg1.3.0
  'f_info' => 'Gwybodaeth ffeil', //cpg1.3.0
  'no_place' => 'Methwyd anfon y ffeil flaenorol.', //cpg1.3.0
  'yes_place' => 'Gosodwyd y ffeil yn llwyddiannus.', //cpg1.3.0
  'max_fsize' => 'Mwyafswm maint ffeil sy\'n cael ei ganiat&acirc;u yw %s KB',
  'album' => 'Llyfr Lluniau',
  'picture' => 'Llun', //cpg1.3.0
  'pic_title' => 'Teitl y llun', //cpg1.3.0
  'description' => 'Digrifiad o\'r llun', //cpg1.3.0
  'keywords' => 'Geiriau allweddol (gadewch fwlch rhwng pob gair)',
  'err_no_alb_uploadables' => 'Mae\'n flin gen i, ond does dim llyfr lluniau ble mae gen ti ganiat&acirc;d i anfon lluniau', //cpg1.3.0
  'place_instr_1' => 'Rho\'r lluniau mewn llyfr lluniau nawr.  Galli di hefyd gyflwyno gwybodaeth berthnasol am bob llun.', //cpg1.3.0
  'place_instr_2' => 'Angen gosod mwy o ffeiliau. Rho glec i \'Parhau\'.', //cpg1.3.0
  'process_complete' => 'Rwyt ti wedi gosod bob llun yn llwyddiannus.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'title' => 'Rheoli defnyddwyr',
  'name_a' => 'Enw esgynnol',
  'name_d' => 'Enw disgynnol',
  'group_a' => 'Grwp esgynnol',
  'group_d' => 'Grwp disgynnol',
  'reg_a' => 'Dyddiad cofrestru esgynnol',
  'reg_d' => 'Dyddiad cofrestru disgynnol',
  'pic_a' => 'Nifer y ffeiliau esgynnol',
  'pic_d' => 'Nifer y ffeiliau disgynnol',
  'disku_a' => 'Defnydd lle esgynnol',
  'disku_d' => 'Defnydd lle disgynnol',
  'lv_a' => 'Ymweliad diwethaf esgynnol', //cpg1.3.0
  'lv_d' => 'Ymweliad diwethaf disgynnol', //cpg1.3.0
  'sort_by' => 'Didoli defnyddwyr',
  'err_no_users' => 'Tabl defnyddwyr yn wag !',
  'err_edit_self' => 'Allu di ddim golygu dy broffil dy hun. Defnyddia \'Fy mhroffil\' i wneud hynny',
  'edit' => 'GOLYGU',
  'delete' => 'DILEU',
  'name' => 'Enw defnyddiwr',
  'group' => 'Grwp',
  'inactive' => 'Anweithredol',
  'operations' => 'Gweithrediadau',
  'pictures' => 'Ffeiliau', //cpg1.3.0
  'disk_space' => 'Yn defnyddio / Cwota',
  'registered_on' => 'Dyddiad cofrestru',
  'last_visit' => 'Ymweliad diwethaf', //cpg1.3.0
  'u_user_on_p_pages' => '%d o ddefnyddwyr ar %d tudalen',
  'confirm_del' => 'Siwr dy fod eisiau dileu ? Bydd ei holl ffeiliau a llyfrau lluniau yn diflannu.', //js-alert //cpg1.3.0
  'mail' => 'POST',
  'err_unknown_user' => 'Dyw\'r defnyddiwr ddim yn bodoli !',
  'modify_user' => 'Addasu defnyddiwr',
  'notes' => 'Nodiadau',
  'note_list' => '<li>Os nag wyt ti eisiau newid y cyfrinair cyfredol, galli di adael maes "cyfrinair" yn wag',
  'password' => 'Cyfrinair',
  'user_active' => 'Defnyddiwr gweithredol',
  'user_group' => 'Grwp defnyddwyr',
  'user_email' => 'Ebost defnyddiwr',
  'user_web_site' => 'Gwefan defnyddiwr',
  'create_new_user' => 'Creu defnyddiwr newydd',
  'user_location' => 'Lleoliad defnyddiwr',
  'user_interests' => 'Diddordebau defnyddiwr',
  'user_occupation' => 'Gwaith defnyddiwr',
  'latest_upload' => 'Ffeiliau anfonwyd yn ddiweddar', //cpg1.3.0
  'never' => 'byth', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
  'title' => 'Offer Gweinyddol (Newid maint lluniau)', //cpg1.3.0
  'what_it_does' => 'Beth mae\'n gwneud',
  'what_update_titles' => 'Diweddaru penawdau o enw ffeil',
  'what_delete_title' => 'Dileu penawdau',
  'what_rebuild' => 'Ailadeiladu bawdluniau a lluniau',
  'what_delete_originals' => 'Dileu lluniau gwreiddiol a gosod rhai maint newydd yn eu lle',
  'file' => 'Ffeil',
  'title_set_to' => 'gosod pennawd fel',
  'submit_form' => 'Anfon',
  'updated_succesfully' => 'Diweddarwyd yn llwyddiannus',
  'error_create' => 'GWALL wrth greu',
  'continue' => 'Prosesu mwy o luniau',
  'main_success' => 'Defnyddiwyd %s yn llwyddiannus fel prif ffeil', //cpg1.3.0
  'error_rename' => 'Gwall wrth ailenwi %s i %s',
  'error_not_found' => 'Methu canfod %s',
  'back' => 'N&ocirc;l i\'r brif dudalen',
  'thumbs_wait' => 'Diweddaru bawdluniau a/neu delweddau maint newydd, amynedd os gweli di\'n dda...',
  'thumbs_continue_wait' => 'Parhau i ddiweddaru bawdluniau a/neu delweddau maint newydd...',
  'titles_wait' => 'Diweddaru penawdau, amynedd os gweli di\'n dda...',
  'delete_wait' => 'Dileu penawdau, amynedd os gweli di\'n dda...',
  'replace_wait' => 'Dileu lluniau gwreiddiol a gosod rhai maint newydd yn eu lle, amynedd os gweli di\'n dda..',
  'instruction' => 'Cyfarwyddiadau cyflym',
  'instruction_action' => 'Dewis gweithred',
  'instruction_parameter' => 'Gosod paramedrau',
  'instruction_album' => 'Dewis llyfr lluniau',
  'instruction_press' => 'Rhoi clec i %s',
  'update' => 'Diweddaru bawdluniau a/neu delweddau maint newydd',
  'update_what' => 'Beth sydd angen diweddaru',
  'update_thumb' => 'Dim ond bawdluniau',
  'update_pic' => 'Dim ond lluniau maint newydd',
  'update_both' => 'Bawdluniau a lluniau maint newydd',
  'update_number' => 'Nifer o luniau i\'w prosesu gyda phob clec',
  'update_option' => '(Ceisia osod hwn yn is os oes problemau)',
  'filename_title' => 'Enw ffeil &rArr; Pennawd y ffeil', //cpg1.3.0
  'filename_how' => 'Sut wyt ti eisiau addasu\'r ffeil hon',
  'filename_remove' => 'Tynnu diweddeb .jpg a rhoi bylchau yn lle_ (is-linell)',
  'filename_euro' => 'Newid 2003_11_23_13_20_20.jpg i 23/11/2003 13:20',
  'filename_us' => 'Newid 2003_11_23_13_20_20.jpg i 11/23/2003 13:20',
  'filename_time' => 'Newid 2003_11_23_13_20_20.jpg i 13:20',
  'delete' => 'Dileu penawdau ffeil neu lluniau maint gwreiddiol', //cpg1.3.0
  'delete_title' => 'Dileu pennawd ffeil', //cpg1.3.0
  'delete_original' => 'Dileu lluniau maint gwreiddiol',
  'delete_replace' => 'Dileu\'r llun gwreiddiol gan roi un maint newydd yn ei le',
  'select_album' => 'Dewis llyfr lluniau',
  'delete_orphans' => 'Dileu sylwadau heb riant-gategori (gweithio gyda phob llyfr lluniau)', //cpg1.3.0
  'orphan_comment' => 'Canfuwyd sylwadau heb riant-gategori', //cpg1.3.0
  'delete' => 'Dileu', //cpg1.3.0
  'delete_all' => 'Dileu\'r cyfan', //cpg1.3.0
  'comment' => 'Sylw: ', //cpg1.3.0
  'nonexist' => 'ynghlwm wrth ffeil sydd ddim yn bodoli # ', //cpg1.3.0
  'phpinfo' => 'Dangos gwybodaeth php', //cpg1.3.0
  'update_db' => 'Diweddaru b&acirc;s data', //cpg1.3.0
  'update_db_explanation' => 'Os wyt ti wedi ailosod ffeiliau coppermine, addasu coppermine neu ddiweddaru o fersiwn arall o coppermine, rhaid diweddaru\'r b&acirc;s data unwaith. Bydd hyn yn creu\'r tablau sydd eu hangen a\'r gwerthoedd cyflunio ym m&acirc;s data coppermine.', //cpg1.3.0
);

?>