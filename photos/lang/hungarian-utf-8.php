<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.3.2                                            //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002-2004 Gregory DEMAR                                     //
//  http://www.chezgreg.net/coppermine/                                      //
// ------------------------------------------------------------------------- //
// Updated by the Coppermine Dev Team                                        //
// (http://coppermine.sf.net/team/)                                          //
// see /docs/credits.html for details                                        //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
// ------------------------------------------------------------------------- //
// CVS version: $Id: hungarian-utf-8.php,v 1.7 2004/07/24 15:04:05 gaugau Exp $
// ------------------------------------------------------------------------- //

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Hungarian',  
  'lang_name_native' => 'Magyar', 
  'lang_country_code' => 'hu', 
  'trans_name'=> 'Peter Ardo', //the name of the translator - can be a nickname
  'trans_email' => 'petardo@freemail.hu', //translator's email address (optional)
  'trans_website' => '', //translator's website (optional)
  'trans_date' => '2003-10-20', //the date the translation was created / last modified
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('byte', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('H', 'K', 'Sze', 'Cs', 'P', 'Szo', 'V');
$lang_month = array('Jan', 'Feb', 'MÃ¡r', 'Ãpr', 'MÃ¡j', 'JÃºn', 'JÃºl', 'Aug', 'Szept', 'Okt', 'Nov', 'Dec');

// Some common strings
$lang_yes = 'Igen';
$lang_no  = 'Nem';
$lang_back = 'VISSZA';
$lang_continue = 'TOVÃBB';
$lang_info = 'InformÃ¡ciÃ³';
$lang_error = 'Hiba';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%Y %B %d';
$lastcom_date_fmt =  '%y.%m.%d %H:%M';
$lastup_date_fmt = '%Y %B %d';
$register_date_fmt = '%Y %B %d';
$lasthit_date_fmt = '%Y %B %d %H:%M';
$comment_date_fmt =  '%Y %B %d %H:%M';

// For the word censor
$lang_bad_words = array('basz*', 'segg*', 'fasz*', 'kurva*', 'picsa', 'geci');

$lang_meta_album_names = array(
        'random' => 'VÃ©letlen fÃ¡jlok', //cpg1.3.0
        'lastup' => 'Friss feltÃ¶ltÃ©sek',
        'lastalb'=> 'UtoljÃ¡ra mÃ³dosÃ­tott albumok',
        'lastcom' => 'Friss hozzÃ¡szÃ³lÃ¡sok',
        'topn' => 'Top-nÃ©zett',
        'toprated' => 'Top-szavazat',
        'lasthits' => 'UtoljÃ¡ra nÃ©zett',
        'search' => 'KeresÃ©s eredmÃ©nye',
        'favpics'=> 'Kedvenc FÃ¡jlok' //cpg1.3.0
);

$lang_errors = array(
        'access_denied' => 'Nincs jogosultsÃ¡god ennek az oldalnak a megtekintÃ©sÃ©hez.',
        'perm_denied' => 'Nincs jogosultsÃ¡god ennek a mÅ±veletnek az elvÃ©gzÃ©sÃ©hez.',
        'param_missing' => 'Szkript hÃ­vÃ¡s a szÃ¼ksÃ©ge paramÃ©ter(ek) megadÃ¡sa nÃ©lkÃ¼l.',
        'non_exist_ap' => 'A kijelÃ¶lt album / fÃ¡jl nem talÃ¡lhatÃ³!', //cpg1.3.0
        'quota_exceeded' => 'Diszk kvÃ³ta tÃºllÃ©pve<br /><br />A beÃ¡llÃ­tott diszkkvÃ³ta [quota]K, a kÃ©peid Ã¡ltal jelenleg elfoglalt tÃ¡rhely [space]K, ennek a fÃ¡jlnak a feltÃ¶ltÃ©sÃ©vel tÃºllÃ©pnÃ©d a kvÃ³tÃ¡jÃ¡t.', //cpg1.3.0
        'gd_file_type_err' => 'GD kÃ¶nyvtÃ¡r hasznÃ¡lata esetÃ©n csak JPEG Ã©s PNG tÃ­pusok megengedettek.',
        'invalid_image' => 'A feltÃ¶ltÃ¶tt kÃ©p sÃ©rÃ¼lt, vagy a GD kÃ¶nyvtÃ¡r Ã¡ltal nem kezelhetÅ‘',
        'resize_failed' => 'Nem sikerÃ¼lt az ikonizÃ¡lt vagy Ã¡tmÃ©retezett kÃ©pek generÃ¡lÃ¡sa.',
        'no_img_to_display' => 'Nincs megjelenÃ­thetÅ‘ kÃ©p',
        'non_exist_cat' => 'A kijelÃ¶lt kategÃ³ria nem lÃ©tezik',
        'orphan_cat' => 'A kategÃ³ria szÃ¼lÅ‘kategÃ³riÃ¡ja nem lÃ©tezik, futtasd a kategÃ³riamenedzsert a problÃ©ma kikÃ¼szÃ¶bÃ¶lÃ©sÃ©re.',
        'directory_ro' => 'A \'%s\' kÃ¶nyvtÃ¡r nem Ã­rhatÃ³, a fÃ¡jlokat nem lehet tÃ¶rÃ¶lni', //cpg1.3.0
        'non_exist_comment' => 'A kijelÃ¶lt hozzÃ¡szÃ³lÃ¡s nem lÃ©tezik.',
        'pic_in_invalid_album' => 'FÃ¡jl nem lÃ©tezÅ‘ albumban (%s)!?', //cpg1.3.0
        'banned' => 'Jelenleg ki vagy tiltva a weblap hasznÃ¡latÃ¡bÃ³l.',
        'not_with_udb' => 'Ez a funkciÃ³ le van tiltva a Coppermine-ban, mivel a fÃ³rum sw rÃ©sze. A kÃ©rt funkciÃ³t vagy nem tÃ¡mogatja a jelen konfigurÃ¡ciÃ³, vagy a fÃ³rum sw kezeli.',
        'offline_title' => 'Offline', //cpg1.3.0
        'offline_text' => 'A galÃ©ria jelenleg  offline - lÃ¡togass vissza kÃ©sÅ‘bb', //cpg1.3.0
        'ecards_empty' => 'Jelenleg nincs megjelenÃ­thetÅ‘ e-kÃ©peslap. EllenÅ‘rizd, hogy engedÃ©lyezted -e az e-lapok naplÃ³zÃ¡sÃ¡t a coppermine konfigurÃ¡ciÃ³ban!', //cpg1.3.0
        'action_failed' => 'A mÅ±velet sikertelen.  Coppermine nem tudja feldolgozni a kÃ©rÃ©st.', //cpg1.3.0
        'no_zip' => 'A ZIP fÃ¡jlok feldolgozÃ¡sÃ¡hoz szÃ¼ksÃ©ges kÃ¶nyvtÃ¡r nem Ã¡ll rendelkezÃ©sre. Fordulj a Coppermine adminisztrÃ¡torhoz.', //cpg1.3.0
        'zip_type' => 'Nincs jogosultsÃ¡god ZIP fÃ¡jlok feltÃ¶ltÃ©sÃ©re.', //cpg1.3.0
);

$lang_bbcode_help = 'A kÃ¶vetkezÅ‘ kÃ³dok hasznosak lehetnek: <li>[b]<b>Bold</b>[/b]</li> <li>[i]<i>Italic</i>[/i]</li> <li>[url=http://yoursite.com/]Url Text[/url]</li> <li>[email]user@domain.com[/email]</li>'; //cpg1.3.0

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
        'alb_list_title' => 'UgrÃ¡s az albumlistÃ¡ra',
        'alb_list_lnk' => 'Albumlista',
        'my_gal_title' => 'UgrÃ¡s a szemÃ©lyes kÃ©ptÃ¡rra',
        'my_gal_lnk' => 'KÃ©ptÃ¡ram',
        'my_prof_lnk' => 'Profilom',
        'adm_mode_title' => 'VÃ¡ltÃ¡s adminisztrÃ¡tor mÃ³dra',
        'adm_mode_lnk' => 'Admin mÃ³d',
        'usr_mode_title' => 'VÃ¡ltÃ¡s felhasznÃ¡lÃ³ mÃ³dra',
        'usr_mode_lnk' => 'Felhaszn.mÃ³d',
        'upload_pic_title' => 'FÃ¡jl feltÃ¶ltÃ©s az albumba', //cpg1.3.0
        'upload_pic_lnk' => 'FeltÃ¶ltÃ©s', //cpg1.3.0
        'register_title' => 'FelhasznÃ¡lÃ³ hozzÃ¡adÃ¡sa',
        'register_lnk' => 'RegisztrÃ¡ciÃ³',
        'login_lnk' => 'BejelentkezÃ©s',
        'logout_lnk' => 'KijelentkezÃ©s',
        'lastup_lnk' => 'Friss feltÃ¶ltÃ©sek',
        'lastcom_lnk' => 'Friss hozzÃ¡szÃ³lÃ¡sok',
        'topn_lnk' => 'Top-nÃ©zett',
        'toprated_lnk' => 'Top-szavazat',
        'search_lnk' => 'KeresÃ©s',
        'fav_lnk' => 'Kedvencek',
        'memberlist_title' => 'Taglista megmutatÃ¡sa', //cpg1.3.0
        'memberlist_lnk' => 'Taglista', //cpg1.3.0
        'faq_title' => 'A &quot;Coppermine&quot; galÃ©riÃ¡ra vonatkozÃ³ Gyakran IsmÃ©telt KÃ©rdÃ©sek', //cpg1.3.0
        'faq_lnk' => 'GYIK', //cpg1.3.0
);


$lang_gallery_admin_menu = array(
        'upl_app_lnk' => 'FeltÃ¶ltÃ©s jÃ³vÃ¡hagyÃ¡s',
        'config_lnk' => 'KonfigurÃ¡ciÃ³',
        'albums_lnk' => 'Albumok',
        'categories_lnk' => 'KategÃ³riÃ¡k',
        'users_lnk' => 'FelhasznÃ¡lÃ³k',
        'groups_lnk' => 'Csoportok',
        'comments_lnk' => 'HozzÃ¡szÃ³lÃ¡sok szerkesztÃ©se', //cpg1.3.0
        'searchnew_lnk' => 'KÃ¶tegelt feltÃ¶ltÃ©s',
        'util_lnk' => 'Admin eszkÃ¶zÃ¶k',
        'ban_lnk' => 'FelhasznÃ¡lÃ³k kitiltÃ¡sa',
        'db_ecard_lnk' => 'E-lapok megtekintÃ©se', //cpg1.3.0
);

$lang_user_admin_menu = array(
        'albmgr_lnk' => 'SzemÃ©lyes albumok szerkesztÃ©se',
        'modifyalb_lnk' => 'SzemÃ©lyes albumok tulajdonsÃ¡gai',
        'my_prof_lnk' => 'Profilom',
);

$lang_cat_list = array(
        'category' => 'KategÃ³ria',
        'albums' => 'Albumok',
        'pictures' => 'FÃ¡jlok', //cpg1.3.0
);

$lang_album_list = array(
        'album_on_page' => '%d album %d oldalon',
);

$lang_thumb_view = array(
        'date' => 'DÃTUM',
        'name' => 'NÃ‰V',
        'title' => 'KÃ©p cÃ­m',
        'sort_da' => 'DÃ¡tum szerinti sorrendezÃ©s, nÃ¶vekvÅ‘',
        'sort_dd' => 'DÃ¡tum szerinti sorrendezÃ©s, csÃ¶kkenÅ‘',
        'sort_na' => 'NÃ©v szerinti sorrendezÃ©s, nÃ¶vekvÅ‘',
        'sort_nd' => 'NÃ©v szerinti sorrendezÃ©s, csÃ¶kkenÅ‘',
        'sort_ta' => 'SorrendezÃ©s cÃ­m szerint - nÃ¶vekvÅ‘',
        'sort_td' => 'SorrendezÃ©s cÃ­m szerint - csÃ¶kkenÅ‘',
        'download_zip' => 'Zip fÃ¡jl letÃ¶ltÃ©se', //cpg1.3.0
        'pic_on_page' => '%d kÃ©p %d oldalon',
        'user_on_page' => '%d felhasznÃ¡lÃ³ %d oldalon', //cpg1.3.0
);

$lang_img_nav_bar = array(
        'thumb_title' => 'Vissza az ikonos elrendezÃ©sre',
        'pic_info_title' => 'FÃ¡jl informÃ¡ciÃ³ megtekintÃ©se / elrejtÃ©se', //cpg1.3.0
        'slideshow_title' => 'DiavetÃ­tÃ©s',
        'ecard_title' => 'FÃ¡jl elkÃ¼ldÃ©se e-kÃ©peslapkÃ©nt', //cpg1.3.0
        'ecard_disabled' => 'e-lapok kÃ¼ldÃ©se nem engedÃ©lyezett',
        'ecard_disabled_msg' => 'Nincs jogosultsÃ¡god e-kÃ©peslap kÃ¼ldÃ©sÃ©re', //js-alert //cpg1.3.0
        'prev_title' => 'ElÅ‘zÅ‘ fÃ¡jl', //cpg1.3.0
        'next_title' => 'KÃ¶vetkezÅ‘ fÃ¡jl', //cpg1.3.0
        'pic_pos' => 'FÃJL %s/%s', //cpg1.3.0
);

$lang_rate_pic = array(
        'rate_this_pic' => 'FÃ¡jl osztÃ¡lyozÃ¡sa ', //cpg1.3.0
        'no_votes' => '(MÃ©g nincs osztÃ¡lyozva)',
        'rating' => '(jelenlegi osztÃ¡lyzat: %s, %s szavazattal)',
        'rubbish' => 'Vacak',
        'poor' => 'Gyenge',
        'fair' => 'MegfelelÅ‘',
        'good' => 'JÃ³',
        'excellent' => 'KitÅ±nÅ‘',
        'great' => 'Szuper',
);

// ------------------------------------------------------------------------- //
// File include/exif.inc.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
                'title' => 'Tiltott felhasznÃ¡lÃ³k',
                'user_name' => 'FelhasznÃ¡lÃ³nÃ©v',
                'ip_address' => 'IP cÃ­m',
                'expiry' => 'LejÃ¡rat (Ã¡llandÃ³ esetÃ©n Ã¼res marad)',
                'edit_ban' => 'MÃ³dosÃ­tÃ¡sok tÃ¡rolÃ¡sa',
                'delete_ban' => 'TÃ¶rlÃ©s',
                'add_new' => 'Ãšj tiltÃ¡s hozzÃ¡adÃ¡sa',
                'add_ban' => 'HozzÃ¡adÃ¡s',
				'error_user' => 'Nem talÃ¡lom a felhasznÃ¡lÃ³t', //cpg1.3.0
				'error_specify' => 'Meg kell adnod vagy a felhasznÃ¡lÃ³nevet, vagy egy IP cÃ­met', //cpg1.3.0
				'error_ban_id' => 'Ã‰rvÃ©nytelen tiltÃ¡s ID!', //cpg1.3.0
				'error_admin_ban' => 'Nem zÃ¡rhatod ki magadat!', //cpg1.3.0
				'error_server_ban' => 'Te ki akartad zÃ¡rni a sajÃ¡t szervered? Zzzzzz..., ezt nem teheted...', //cpg1.3.0
				'error_ip_forbidden' => 'Nem zÃ¡rhatod ki ezt az IP-t - ez nem irÃ¡nyÃ­thatÃ³ (non-routable)!', //cpg1.3.0
				'lookup_ip' => 'Keress egy IP cÃ­met', //cpg1.3.0
				'submit' => 'mehet!', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

$lang_cpg_die = array(
        INFORMATION => $lang_info,
        ERROR => $lang_error,
        CRITICAL_ERROR => 'Kritikus hiba',
        'file' => 'FÃ¡jl: ',
        'line' => 'Sor: ',
);

$lang_display_thumbnails = array(
        'filename' => 'FÃ¡jlnÃ©v : ',
        'filesize' => 'FÃ¡jlmÃ©ret : ',
        'dimensions' => 'MÃ©retek : ',
        'date_added' => 'FeltÃ¶ltÃ©s dÃ¡tuma : ', //cpg1.3.0
);

$lang_get_pic_data = array(
        'n_comments' => '%s kommentÃ¡r',
        'n_views' => '%s megtekintÃ©s',
        'n_votes' => '(%s szavazat)',
);
$lang_cpg_debug_output = array(
  'debug_info' => 'Debug infÃ³', //cpg1.3.0
  'select_all' => 'Mind kivÃ¡laszt', //cpg1.3.0
  'copy_and_paste_instructions' => 'If you\'re going to request help on the coppermine support board, copy-and-paste this debug output into your posting. Make sure to replace any passwords from the query with *** before posting.', //cpg1.3.0
  'phpinfo' => 'Phpinfo megjelenÃ­tÃ©se', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => 'AlapÃ©rtelmezett nyelv', //cpg1.3.0
  'choose_language' => 'VÃ¡lassz nyelvet', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'AlapÃ©rtelmezett tÃ©ma', //cpg1.3.0
  'choose_theme' => 'VÃ¡lassz tÃ©mÃ¡t', //cpg1.3.0
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
        'Exclamation' => 'FelkiÃ¡ltÃ¡s',
        'Question' => 'KÃ©rdÃ©s',
        'Very Happy' => 'Nagyon boldog',
        'Smile' => 'Mosolyog',
        'Sad' => 'SzomorÃº',
        'Surprised' => 'Meglepett',
        'Shocked' => 'Sokkolt',
        'Confused' => 'Zavarodott',
        'Cool' => 'Higgadt',
        'Laughing' => 'Nevet',
        'Mad' => 'ÅrÃ¼lt',
        'Razz' => 'GÃºnyos',
        'Embarassed' => 'KÃ­nos',
        'Crying or Very sad' => 'SÃ­r / nagyon szomorÃº',
        'Evil or Very Mad' => 'Gonosz vagy Å‘rÃ¼lt',
        'Twisted Evil' => 'Torz gonosz',
        'Rolling Eyes' => 'GurulÃ³ szemek',
        'Wink' => 'Kacsint',
        'Idea' => 'Ã–tlet',
        'Arrow' => 'NyÃ­l',
        'Neutral' => 'Semleges',
        'Mr. Green' => 'Mr. ZÃ¶ld',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
        0 => 'KilÃ©pÃ©s adminisztrÃ¡tor mÃ³dbÃ³l...',
        1 => 'VÃ¡ltÃ¡s adminisztrÃ¡tor mÃ³dra...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
        'alb_need_name' => 'Az albumokat el kell nevezni!', //js-alert
        'confirm_modifs' => 'Biztos vÃ©gre akarod hajtani ezt a mÃ³dosÃ­tÃ¡st?', //js-alert
        'no_change' => 'Semmit nem vÃ¡ltoztattÃ¡l!', //js-alert
        'new_album' => 'Ãšj album',
        'confirm_delete1' => 'Biztos tÃ¶rlÃ¶d az albumot?', //js-alert
        'confirm_delete2' => '\nA tartalmazott Ã¶sszes kÃ©p Ã©s hozzÃ¡szÃ³lÃ¡s tÃ¶rlÅ‘dik!', //js-alert
        'select_first' => 'ElÅ‘szÃ¶r vÃ¡lassz albumot', //js-alert
        'alb_mrg' => 'Albummenedzser',
        'my_gallery' => '* KÃ©ptÃ¡ram *',
        'no_category' => '* Nincs kategÃ³ria *',
        'delete' => 'TÃ¶rlÃ©s',
        'new' => 'Ãšj',
        'apply_modifs' => 'MÃ³dosÃ­tÃ¡sok vÃ©grehajtÃ¡sa',
        'select_category' => 'VÃ¡lassz kategÃ³riÃ¡t',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
        'miss_param' => 'A \'%s\' mÅ±velethez szÃ¼ksÃ©ges paramÃ©terek hiÃ¡nyoznak!',
        'unknown_cat' => 'Nincs az adatbÃ¡zisban a kijelÃ¶lt kategÃ³ria ',
        'usergal_cat_ro' => 'A szemÃ©lyes kÃ©ptÃ¡rak nem tÃ¶rÃ¶lhetÅ‘k!',
        'manage_cat' => 'KategÃ³riÃ¡k menedzselÃ©se',
        'confirm_delete' => 'Biztosan tÃ¶rlÃ¶d ezt a kategÃ³riÃ¡t?', //js-alert
        'category' => 'KategÃ³ria',
        'operations' => 'MÅ±veletek',
        'move_into' => 'MozgatÃ¡s a kÃ¶vetkezÅ‘be',
        'update_create' => 'KategÃ³ria lÃ©trehozÃ¡s / mÃ³dosÃ­tÃ¡s',
        'parent_cat' => 'SzÃ¼lÅ‘ kategÃ³ria',
        'cat_title' => 'KategÃ³ria megnevezÃ©s',
        'cat_thumb' => 'KategÃ³ria ikon', //cpg1.3.0
        'cat_desc' => 'KategÃ³ria leÃ­rÃ¡sa',
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
        'title' => 'KonfigurÃ¡ciÃ³',
        'restore_cfg' => 'GyÃ¡ri beÃ¡llÃ­tÃ¡sok',
        'save_cfg' => 'KonfigurÃ¡ciÃ³ tÃ¡rolÃ¡sa',
        'notes' => 'MegjegyzÃ©sek',
        'info' => 'InformÃ¡ciÃ³',
        'upd_success' => 'Coppermine konfigurÃ¡ciÃ³ frissÃ­tve',
        'restore_success' => 'Coppermine gyÃ¡ri beÃ¡llÃ­tÃ¡s visszaÃ¡llÃ­tva',
        'name_a' => 'NÃ©v - nÃ¶vekvÅ‘',
        'name_d' => 'NÃ©v - csÃ¶kkenÅ‘',
        'title_a' => 'CÃ­m szerint - nÃ¶vekvÅ‘',
        'title_d' => 'CÃ­m szerint - csÃ¶kkenÅ‘',
        'date_a' => 'DÃ¡tum nÃ¶vekvÅ‘',
        'date_d' => 'DÃ¡tum csÃ¶kkenÅ‘',
        'th_any' => 'Max Aspect',
        'th_ht' => 'MagassÃ¡g',
        'th_wd' => 'SzÃ©lessÃ©g',
        'label' => 'cÃ­mke', //cpg1.3.0
        'item' => 'tÃ©tel', //cpg1.3.0
        'debug_everyone' => 'Mindenki', //cpg1.3.0
        'debug_admin' => 'Csak Admin', //cpg1.3.0
);

if (defined('CONFIG_PHP')) $lang_config_data = array(
        'ÃltalÃ¡nos beÃ¡llÃ­tÃ¡sok',
        array('KÃ©ptÃ¡r neve', 'gallery_name', 0),
        array('KÃ©ptÃ¡r leÃ­rÃ¡sa', 'gallery_description', 0),
        array('KÃ©ptÃ¡r adminisztrÃ¡tor email cÃ­me', 'gallery_admin_email', 0),
        array('Az e-lapok  \'TovÃ¡bbi kÃ©pek\' linkjÃ©hez tartozÃ³ webcÃ­m', 'ecards_more_pic_target', 0),
        array('GalÃ©ria offline', 'offline', 1), //cpg1.3.0
        array('E-lapok naplÃ³zÃ¡sa', 'log_ecards', 1), //cpg1.3.0
        array('Kedvencek ZIP-letÃ¶ltÃ©sÃ©nek engedÃ©lyezÃ©se', 'enable_zipdownload', 1), //cpg1.3.0

        'Nyelv, tÃ©ma Ã©s karakterkÃ©szlet beÃ¡llÃ­tÃ¡sok',
        array('Nyelv', 'lang', 5),
        array('TÃ©ma', 'theme', 6),
        array('LegÃ¶rdÃ¼lÅ‘ nyelv-menÃ¼ megjelenÃ­tÃ©se', 'language_list', 1), //cpg1.3.0
        array('OrszÃ¡g zÃ¡szlÃ³k megjelenÃ­tÃ©se', 'language_flags', 8), //cpg1.3.0
        array('&quot;Reset&quot; megjelenÃ­tÃ©se a nyelv-menÃ¼ben', 'language_reset', 1), //cpg1.3.0
        array('LegÃ¶rdÃ¼lÅ‘ tÃ©ma-menÃ¼ megjelenÃ­tÃ©se', 'theme_list', 1), //cpg1.3.0
        array('&quot;Reset&quot; megjelenÃ­tÃ©se a tÃ©ma-menÃ¼ben', 'theme_reset', 1), //cpg1.3.0
        array('GYIK megjelenÃ­tÃ©se', 'display_faq', 1), //cpg1.3.0
        array('Bbcode help megjelenÃ­tÃ©se', 'show_bbcode_help', 1), //cpg1.3.0
        array('KarakterkÃ©szlet', 'charset', 4), //cpg1.3.0


        'Albumlista nÃ©zet',
        array('FÅ‘tÃ¡blÃ¡zat szÃ©lessÃ©ge (pixel vagy %)', 'main_table_width', 0),
        array('KategÃ³riÃ¡k megjelenÃ­tendÅ‘ szÃ¡ma', 'subcat_level', 0),
        array('OldalankÃ©nt megjelenÃ­tendÅ‘ albumok szÃ¡ma', 'albums_per_page', 0),
        array('Albumlista oszlopainak szÃ¡ma', 'album_list_cols', 0),
        array('Ikonok mÃ©rete pixelben', 'alb_list_thumb_size', 0),
        array('A fÅ‘oldal tartalma', 'main_page_layout', 0),
        array('ElsÅ‘ szintÅ± albumok ikonok megjelenÃ­tÃ©se a kategÃ³riÃ¡kban','first_level',1),

        'Ikonlista nÃ©zet',
        array('Oszlopok szÃ¡ma az ikonlistÃ¡ban', 'thumbcols', 0),
        array('Sorok szÃ¡ma az ikonlistÃ¡ban', 'thumbrows', 0),
        array('MegjelenÃ­tendÅ‘ tab- fÃ¼lek maximÃ¡lis szÃ¡ma', 'max_tabs', 10), //cpg1.3.0
        array('FÃ¡jl leÃ­rÃ¡s megjelenÃ­tÃ©s (a kÃ©p cÃ­mÃ©n felÃ¼l) az ikonok alatt', 'caption_in_thumbview', 1), //cpg1.3.0
        array('MegtekintÃ©sek szÃ¡mÃ¡nak megjelenÃ­tÃ©se az ikonok alatt', 'views_in_thumbview', 1), //cpg1.3.0
        array('Az ikon alatt megjelenjen -e a hozzÃ¡szÃ³lÃ¡sok szÃ¡ma', 'display_comment_count', 1),
        array('FeltÃ¶ltÅ‘ nevÃ©nek kijelzÃ©se az ikon alatt', 'display_uploader', 1), //cpg1.3.0
        array('FÃ¡jlok alapÃ©rtelmezett sorrendje', 'default_sort_order', 3), //cpg1.3.0
        array('Szavazatok minimuma a \'top-szavazat\' listÃ¡ra valÃ³ felkerÃ¼lÃ©shez', 'min_votes_for_rating', 0),

        'KÃ©p-nÃ©zet Ã©s hozzÃ¡szÃ³lÃ¡s beÃ¡llÃ­tÃ¡sok',
        array('A fÃ¡jl-nÃ©zethez tartozÃ³ tÃ¡blÃ¡zat szÃ©lessÃ©ge (pixel vagy %)', 'picture_table_width', 0), //cpg1.3.0
        array('FÃ¡jl informÃ¡ciÃ³k lÃ¡thatÃ³k alapÃ©rtelmezÃ©sben', 'display_pic_info', 1), //cpg1.3.0
        array('TrÃ¡gÃ¡r szavak kiszÅ±rÃ©se a hozzÃ¡szÃ³lÃ¡sokbÃ³l', 'filter_bad_words', 1),
        array('Hangulatkarakterek engedÃ©lyezÃ©se a hozzÃ¡szÃ³lÃ¡sokban', 'enable_smilies', 1),
        array('TÃ¶bb egymÃ¡st kÃ¶vetÅ‘ hozzÃ¡szÃ³lÃ¡s engedÃ©lyezÃ©se egy kÃ©phez ugyanazon felhasznÃ¡lÃ³nak (visszaÃ©lÃ©s vÃ©delem tiltÃ¡sa)', 'disable_comment_flood_protect', 1), //cpg1.3.0
        array('A kÃ©pleÃ­rÃ¡s maximÃ¡lis hossza', 'max_img_desc_length', 0),
        array('MaximÃ¡lis karakterszÃ¡m szavankÃ©nt', 'max_com_wlength', 0),
        array('Sorok maximÃ¡lis szÃ¡ma hozzÃ¡szÃ³lÃ¡sonkÃ©nt', 'max_com_lines', 0),
        array('HozzÃ¡szÃ³lÃ¡sok maximÃ¡lis hossza', 'max_com_size', 0),
        array('FilmcsÃ­k megjelenÃ­tÃ©se', 'display_film_strip', 1),
        array('KÃ©pkockÃ¡k szÃ¡ma a filmcsÃ­kban', 'max_film_strip_items', 0),
        array('AdminisztrÃ¡tor Ã©rtesÃ­tÃ©se a hozzÃ¡szÃ³lÃ¡sokrÃ³l e-mailben', 'email_comment_notification', 1), //cpg1.3.0
        array('DiavetÃ­tÃ©s idÅ‘ intervalluma milliszekundumban (1 second = 1000 milliseconds)', 'slideshow_interval', 0), //cpg1.3.0

        'FÃ¡jl- Ã©s ikonbeÃ¡llÃ­tÃ¡sok', //cpg1.3.0
        array('JPEG fÃ¡jlok minÅ‘sÃ©ge', 'jpeg_qual', 0),
        array('Ikonok maximÃ¡lis mÃ©rete  <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0), //cpg1.3.0
        array('MÃ©retek hasznÃ¡lata (ikonok szÃ©lessÃ©ge, magassÃ¡ga, vagy maximÃ¡lis mÃ©rete)<a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7),
        array('KÃ¶zbensÅ‘ mÃ©retÅ± kÃ©p generÃ¡lÃ¡sa','make_intermediate',1),
        array('KÃ¶zbensÅ‘ mÃ©retÅ± kÃ©p / videÃ³ maximÃ¡lis szÃ©lessÃ©ge Ã©s magassÃ¡ga <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0), //cpg1.3.0
        array('FeltÃ¶ltÃ¶tt fÃ¡jlok maximÃ¡lis mÃ©rete (KB)', 'max_upl_size', 0), //cpg1.3.0
        array('FeltÃ¶ltÃ¶tt kÃ©pek / videÃ³k maximÃ¡lis szÃ©lessÃ©ge Ã©s magassÃ¡ga (pixel)', 'max_upl_width_height', 0), //cpg1.3.0

  	'FÃ¡jlok Ã©s ikonok extra beÃ¡llÃ­tÃ¡sai', //cpg1.3.0
  	array('PrivÃ¡t album ikon megjelenÃ­tÃ©se be nem jelentkezett felhasznÃ¡lÃ³ esetÃ©n','show_private',1), //cpg1.3.0
  	array('FÃ¡jlnevekben nem engedÃ©lyezett karakterek', 'forbiden_fname_char',0), //cpg1.3.0
  	//array('FeltÃ¶ltÃ¶tt kÃ©pek megengedett fÃ¡jlkiterjesztÃ©sei', 'allowed_file_extensions',0), //cpg1.3.0
  	array('Megengedett kÃ©ptÃ­pusok', 'allowed_img_types',0), //cpg1.3.0
  	array('Megengedett videÃ³ tÃ­pusok', 'allowed_mov_types',0), //cpg1.3.0
  	array('Megengedett audiÃ³ tÃ­pusok', 'allowed_snd_types',0), //cpg1.3.0
  	array('Megengedett dokumentum tÃ­pusok', 'allowed_doc_types',0), //cpg1.3.0
  	array('KÃ©pek Ã¡tmÃ©retezÃ©sÃ©nek mÃ³dszere','thumb_method',2), //cpg1.3.0
  	array('FÃ¡jlelÃ©rÃ©si Ãºtvonal az ImageMagick \'convert\' programhoz (pÃ©ldÃ¡ul /usr/bin/X11/)', 'impath', 0), //cpg1.3.0
  	//array('Megengedett kÃ©ptÃ­pusok (csak ImageMagick esetÃ©n)', 'allowed_img_types',0), //cpg1.3.0
  	array('ImageMagick parancssor opciÃ³k', 'im_options', 0), //cpg1.3.0
  	array('EXIF adatok Ã©rtelmezÃ©se a JPEG fÃ¡jlokban', 'read_exif_data', 1), //cpg1.3.0
  	array('IPTC adatok Ã©rtelmezÃ©se a JPEG fÃ¡jlokban', 'read_iptc_data', 1), //cpg1.3.0
  	array('Album elÃ©rÃ©si Ãºtvonal <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0), //cpg1.3.0
  	array('FelhasznÃ¡lÃ³i fÃ¡jlok elÃ©rÃ©si Ãºtvonala <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0), //cpg1.3.0
  	array('KÃ¶zbensÅ‘ mÃ©retezÃ©sÅ± kÃ©pek prefixe <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0), //cpg1.3.0
  	array('IkonfÃ¡jlok prefixe <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0), //cpg1.3.0
  	array('KÃ¶nyvtÃ¡rak alapÃ©rtelmezett mÃ³dja', 'default_dir_mode', 0), //cpg1.3.0
  	array('FÃ¡jlok alapÃ©rtelmezett mÃ³dja', 'default_file_mode', 0), //cpg1.3.0

         'FelhasznÃ¡lÃ³ beÃ¡llÃ­tÃ¡sok',
        array('Ãšj felhasznÃ¡lÃ³k regisztrÃ¡lhatnak', 'allow_user_registration', 1),
        array('RegisztrÃ¡ciÃ³ email megerÅ‘sÃ­tÃ©shez kÃ¶tÃ¶tt', 'reg_requires_valid_email', 1),
		array('Admin Ã©rtesÃ­tÃ©se felhasznÃ¡lÃ³ regisztrÃ¡ciÃ³rÃ³l e-mailben', 'reg_notify_admin_email', 1), //cpg1.3.0
        array('KÃ©t felhasznÃ¡lÃ³nak lehet azonos email cÃ­me', 'allow_duplicate_emails_addr', 1),
        array('FelhasznÃ¡lÃ³knak lehetnek privÃ¡t albumai (MegjegyzÃ©s: ha \'igen\' -rÅ‘l \'nem\' -re vÃ¡ltasz, minden jelenlegi privÃ¡t album publikussÃ¡ vÃ¡lik)', 'allow_private_albums', 1), //cpg1.3.0
  		array('Admin Ã©rtesÃ­tÃ©se jÃ³vÃ¡hagyÃ¡sra vÃ¡rÃ³ feltÃ¶ltÃ©srÅ‘l', 'upl_notify_admin_email', 1), //cpg1.3.0
  		array('Bejelentkezett felhasznÃ¡lÃ³k megtekinthetik a taglistÃ¡t', 'allow_memberlist', 1), //cpg1.3.0

        'SajÃ¡t mezÅ‘k a kÃ©pek leÃ­rÃ¡sÃ¡hoz (hagyd Ã¼resen, ha nem hasznÃ¡lod)',
        array('1. mezÅ‘nÃ©v', 'user_field1_name', 0),
        array('2. mezÅ‘nÃ©v', 'user_field2_name', 0),
        array('3. mezÅ‘nÃ©v', 'user_field3_name', 0),
        array('4. mezÅ‘nÃ©v', 'user_field4_name', 0),


        'Cooky beÃ¡llÃ­tÃ¡sok',
        array('A szkript Ã¡ltal hasznÃ¡lt cooky nÃ©v (bbs integrÃ¡ciÃ³ esetÃ©n gyÅ‘zÅ‘dj meg rÃ³la, hogy eltÃ©r a bbs cooky nÃ©vtÅ‘l)', 'cookie_name', 0),
        array('A szkript Ã¡ltal hasznÃ¡lt cooky Ãºtvonala', 'cookie_path', 0),

        'EgyÃ©b beÃ¡llÃ­tÃ¡sok',
        array('Debug mÃ³d engedÃ©lyezÃ©se', 'debug_mode', 9), //cpg1.3.0
		array('MegjegyzÃ©sek kijelzÃ©se debug mÃ³dban', 'debug_notice', 1), //cpg1.3.0

        '<br /><div align="left"><a name="notice1"></a>(*) * -gal jelÃ¶lt mezÅ‘ket nem szabad megvÃ¡ltoztatni, ha mÃ¡r nem Ã¼res a kÃ©ptÃ¡r.<br />
		<a name="notice2"></a>(**) Ha ezt a beÃ¡llÃ­tÃ¡st megvÃ¡ltoztatod, csak azok a fÃ¡jlok lesznek Ã©rintve, melyeket ettÅ‘l kezdve adsz hozzÃ¡, ezÃ©rt ajÃ¡nlatos ezt a beÃ¡llÃ­tÃ¡st nem megvÃ¡ltoztatni, ha mÃ¡r van fÃ¡jl a kÃ©ptÃ¡rban. Azonban tetszÅ‘leges albumra Ã©rvÃ©nyesÃ­teni tudod a kÃ­vÃ¡nt vÃ¡ltoztatÃ¡sokat az adminisztrÃ¡tori menÃ¼ &quot;<a href="util.php">Admin eszkÃ¶zÃ¶k</a>&quot; menÃ¼pontjÃ¡ban.</div><br />', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'E-lapok kÃ¼ldÃ©se', //cpg1.3.0
  'ecard_sender' => 'FeladÃ³', //cpg1.3.0
  'ecard_recipient' => 'CÃ­mzett', //cpg1.3.0
  'ecard_date' => 'DÃ¡tum', //cpg1.3.0
  'ecard_display' => 'E-kÃ©peslap megjelenÃ­tÃ©se', //cpg1.3.0
  'ecard_name' => 'NÃ©v', //cpg1.3.0
  'ecard_email' => 'Email', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'nÃ¶vekvÅ‘', //cpg1.3.0
  'ecard_descending' => 'csÃ¶kkenÅ‘', //cpg1.3.0
  'ecard_sorted' => 'Sorrendezett', //cpg1.3.0
  'ecard_by_date' => 'dÃ¡tum szerint', //cpg1.3.0
  'ecard_by_sender_name' => 'feladÃ³ neve szerint', //cpg1.3.0
  'ecard_by_sender_email' => 'feladÃ³ e-mail cÃ­me szerint', //cpg1.3.0
  'ecard_by_sender_ip' => 'feladÃ³ IP cÃ­me szerint', //cpg1.3.0
  'ecard_by_recipient_name' => 'cÃ­mzett neve szerint', //cpg1.3.0
  'ecard_by_recipient_email' => 'cÃ­mzett e-mail cÃ­me szerint', //cpg1.3.0
  'ecard_number' => 'Rekordok kijelzÃ©se: %s tÅ‘l %s Ã¶sszesen %s', //cpg1.3.0
  'ecard_goto_page' => 'ugrÃ¡s oldalra', //cpg1.3.0
  'ecard_records_per_page' => 'Rekord per lap', //cpg1.3.0
  'check_all' => 'Mind kivÃ¡lasztÃ¡sa', //cpg1.3.0
  'uncheck_all' => 'Mind NEM kivÃ¡lasztÃ¡sa', //cpg1.3.0
  'ecards_delete_selected' => 'KivÃ¡lasztott e-lapok tÃ¶rlÃ©se', //cpg1.3.0
  'ecards_delete_confirm' => 'Biztosan tÃ¶rÃ¶lni akarod a rekordokat? PipÃ¡ld ki a nÃ©gyzetet!', //cpg1.3.0
  'ecards_delete_sure' => 'Biztos vagyok benne', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
        'empty_name_or_com' => 'Meg kell adnod a neved Ã©s egy hozzÃ¡szÃ³lÃ¡st',
        'com_added' => 'HozzÃ¡szÃ³lÃ¡sod rÃ¶gzÃ­tettÃ¼k',
        'alb_need_title' => 'Adj nevet az albumnak!',
        'no_udp_needed' => 'Nincs mit mÃ³dosÃ­tani.',
        'alb_updated' => 'Az album mÃ³dosÃ­tÃ¡sa megtÃ¶rtÃ©nt',
        'unknown_album' => 'A kivÃ¡lasztott album nem lÃ©tezik, vagy nincs feltÃ¶ltÃ©si jogosultsÃ¡god az albumhoz',
        'no_pic_uploaded' => 'Nem tÃ¶rtÃ©nt feltÃ¶ltÃ©s!<br /><br />Ha tÃ©nyleg kijelÃ¶ltÃ©l feltÃ¶ltÃ©sre fÃ¡jlt, ellenÅ‘rizd, hogy a szerveren megengedett-e a feltÃ¶ltÃ©s...', //cpg1.3.0
        'err_mkdir' => 'Nem sikerÃ¼lt a %s kÃ¶nyvtÃ¡r lÃ©trehozÃ¡sa !',
        'dest_dir_ro' => 'A szkript nem Ã­rhat a %s cÃ©lkÃ¶nyvtÃ¡rba!',
        'err_move' => 'Nem mozgathatÃ³ %s %s -be!',
        'err_fsize_too_large' => 'A feltÃ¶ltÃ¶tt fÃ¡jl mÃ©rete tÃºl nagy (maximum megengedett: %s x %s)!', //cpg1.3.0
        'err_imgsize_too_large' => 'A feltÃ¶ltÃ¶tt fÃ¡jl mÃ©rete tÃºl nagy (maximum megengedett: %s KB) !',
        'err_invalid_img' => 'A feltÃ¶ltÃ¶tt fÃ¡jl nem egy Ã©rvÃ©nyes kÃ©pformÃ¡tum !',
        'allowed_img_types' => 'Csak %s kÃ©p feltÃ¶ltÃ©se megengedett.',
        'err_insert_pic' => 'A \'%s\' fÃ¡jl nem adhatÃ³ hozzÃ¡ az albumhoz ', //cpg1.3.0
        'upload_success' => 'A fÃ¡jl feltÃ¶ltÃ©se sikeres volt<br /><br />JÃ³vÃ¡hagyÃ¡s utÃ¡n lÃ¡thatÃ³ lesz.', //cpg1.3.0
		'notify_admin_email_subject' => '%s - Ã‰rtesÃ­tÃ©s feltÃ¶ltÃ©srÅ‘l', //cpg1.3.0
		'notify_admin_email_body' => 'Egy fÃ¡jlt feltÃ¶ltÃ¶tt %s, jÃ³vÃ¡hagyÃ¡sodra vÃ¡r. LÃ¡togasd meg %s-t', //cpg1.3.0
        'info' => 'InformÃ¡ciÃ³',
        'com_added' => 'KommentÃ¡r hozzÃ¡adÃ¡sa megtÃ¶rtÃ©nt',
        'alb_updated' => 'Album mÃ³dosÃ­tva',
        'err_comment_empty' => 'Nem adott meg kommentÃ¡rt !',
        'err_invalid_fext' => 'Csak a kÃ¶vetkezÅ‘ kiterjesztÃ©sÅ± fÃ¡jlok megengedettek: <br /><br />%s.',
        'no_flood' => 'MÃ¡r hozzÃ¡szÃ³ltÃ¡l a fÃ¡jlhoz.<br /><br />Szerkeszd az elÅ‘zÅ‘ hozzÃ¡szÃ³lÃ¡sod, ha szÃ¼ksÃ©ges', //cpg1.3.0
        'redirect_msg' => 'ÃtirÃ¡nyÃ­tÃ¡s folyamatban.<br /><br /><br />Nyomd meg a \'CONTINUE\'-t, ha a kÃ©p nem frissÃ¼l automatikusan',
        'upl_success' => 'A fÃ¡jl sikeresen hozzÃ¡adÃ¡sra kerÃ¼lt', //cpg1.3.0
		'email_comment_subject' => 'HozzÃ¡szÃ³lÃ¡s postÃ¡zva lett Coppermine FotÃ³galÃ©riÃ¡n-n', //cpg1.3.0
		'email_comment_body' => 'Valaki hozzÃ¡szÃ³lÃ¡st postÃ¡zott a galÃ©riÃ¡dhoz. LÃ¡togasd meg', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
        'caption' => 'KÃ©palÃ¡Ã­rÃ¡s',
        'fs_pic' => 'teljes mÃ©retÅ± kÃ©p',
        'del_success' => 'tÃ¶rlÃ©s sikeres',
        'ns_pic' => 'normÃ¡l mÃ©retÅ± kÃ©p',
        'err_del' => 'nem lehet tÃ¶rÃ¶lni',
        'thumb_pic' => 'ikon',
        'comment' => 'megjegyzÃ©s',
        'im_in_alb' => 'kÃ©p az albumban',
        'alb_del_success' => ' \'%s\' album tÃ¶rÃ¶lve',
        'alb_mgr' => 'Albummenedzser',
        'err_invalid_data' => 'Ã‰rvÃ©nytelen adat a kÃ¶vetkezÅ‘ben \'%s\'',
        'create_alb' => 'Album generÃ¡lÃ¡sa \'%s\'',
        'update_alb' => 'Album mÃ³dosÃ­tÃ¡s \'%s\' nÃ©v: \'%s\' index: \'%s\'',
        'del_pic' => 'FÃ¡jl tÃ¶rlÃ©se', //cpg1.3.0
        'del_alb' => 'Album tÃ¶rlÃ©se',
        'del_user' => 'FelhasznÃ¡lÃ³ tÃ¶rlÃ©se',
        'err_unknown_user' => 'A kijelÃ¶lt felhasznÃ¡lÃ³ nem lÃ©tezik !',
        'comment_deleted' => 'A megjegyzÃ©st sikeresen tÃ¶rÃ¶ltÃ¼k',
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
        'confirm_del' => 'Biztosan tÃ¶rÃ¶lni akarod ezt a fÃ¡jlt? \\nA hozzÃ¡szÃ³lÃ¡sok is tÃ¶rlÅ‘dnek.', //js-alert //cpg1.3.0
        'del_pic' => 'A FÃJL TÃ–RLÃ‰SE', //cpg1.3.0
        'size' => '%s x %s pixel',
        'views' => '%s',
        'slideshow' => 'DiavetÃ­tÃ©s',
        'stop_slideshow' => 'DIAVETÃTÃ‰S VÃ‰GE',
        'view_fs' => 'Teljes mÃ©retÅ± kÃ©p megtekintÃ©se',
		'edit_pic' => 'LeÃ­rÃ¡s szerkesztÃ©se', //cpg1.3.0
		'crop_pic' => 'KivÃ¡gÃ¡s Ã©s forgatÃ¡s', //cpg1.3.0
);

$lang_picinfo = array(
        'title' =>'FÃ¡jl informÃ¡ciÃ³', //cpg1.3.0
        'Filename' => 'FÃ¡jlnÃ©v',
        'Album name' => 'Album nÃ©v',
        'Rating' => 'OsztÃ¡lyozÃ¡s (%s szavazat)',
        'Keywords' => 'Kulcsszavak',
        'File Size' => 'FÃ¡jlmÃ©ret',
        'Dimensions' => 'MÃ©retek',
        'Displayed' => 'MegtekintÃ©sek szÃ¡ma',
        'Camera' => 'Kamera',
        'Date taken' => 'FelvÃ©tel dÃ¡tuma',
        'Aperture' => 'ApertÃºra',
        'Exposure time' => 'ExpozÃ­ciÃ³ idÅ‘pontja',
        'Focal length' => 'FÃ³kusztÃ¡volsÃ¡g',
        'Comment' => 'MegjegyzÃ©s',
        'addFav'=>'HozzÃ¡adÃ¡s a kedvencekhez',
        'addFavPhrase'=>'Kedvencek',
        'remFav'=>'KivÃ©tel kedvencekbÅ‘l',
		'iptcTitle'=>'IPTC CÃ­m', //cpg1.3.0
		'iptcCopyright'=>'IPTC Copyright', //cpg1.3.0
		'iptcKeywords'=>'IPTC kulcsszavak', //cpg1.3.0
		'iptcCategory'=>'IPTC kategÃ³riÃ¡k', //cpg1.3.0
		'iptcSubCategories'=>'IPTC alkategÃ³riÃ¡k', //cpg1.3.0
);

$lang_display_comments = array(
        'OK' => 'OK',
        'edit_title' => 'HozzÃ¡szÃ³lÃ¡s szerkesztÃ©se',
        'confirm_delete' => 'Biztos tÃ¶rÃ¶lni kÃ­vÃ¡nod a hozzÃ¡szÃ³lÃ¡st?', //js-alert
        'add_your_comment' => 'HozzÃ¡szÃ³lÃ¡s hozzÃ¡fÅ±zÃ©se',
        'name'=>'NÃ©v',
        'comment'=>'MegjegyzÃ©s',
        'your_name' => 'Anon',
);

$lang_fullsize_popup = array(
        'click_to_close' => 'Klikkelj a kÃ©pre az ablak bezÃ¡rÃ¡sÃ¡hoz',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
        'title' => 'E-kÃ©peslap kÃ¼ldÃ©se',
        'invalid_email' => '<b>FigyelmeztetÃ©s</b> : Ã©rvÃ©nytelen e-mail cÃ­m!',
        'ecard_title' => 'Egy e-kÃ©peslap %s -tÃ³l neked',
		'error_not_image' => 'Csak kÃ©peket lehet e-kÃ©peslapkÃ©nt kÃ¼ldeni.', //cpg1.3.0
        'view_ecard' => 'Ha az e-kÃ©peslap nem jelenik meg helyesen, klikkelj a kÃ¶vetkezÅ‘ linkre',
        'view_more_pics' => 'Klikkelj erre a linkre tovÃ¡bbi kÃ©pek megtekintÃ©sÃ©hez!',
        'send_success' => 'E-kÃ©peslapod tovÃ¡bbÃ­tottuk',
        'send_failed' => 'SajnÃ¡lom, de a szerver nem tud e-kÃ©peslapot kÃ¼ldeni...',
        'from' => 'FeladÃ³',
        'your_name' => 'Neved',
        'your_email' => 'E-mail cÃ­med',
        'to' => 'CÃ­mzett',
        'rcpt_name' => 'CÃ­mzett neve',
        'rcpt_email' => 'CÃ­mzett e-mail cÃ­me',
        'greetings' => 'ÃœdvÃ¶zlet',
        'message' => 'Ãœzenet',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
        'pic_info' => 'FÃ¡jl informÃ¡ciÃ³', //cpg1.3.0
        'album' => 'Album',
        'title' => 'CÃ­m',
        'desc' => 'LeÃ­rÃ¡s',
        'keywords' => 'Kulcsszavak',
        'pic_info_str' => '%sx%s - %sKB - %s megtekintÃ©s - %s szavazat',
        'approve' => 'FÃ¡jl jÃ³vÃ¡hagyÃ¡sa', //cpg1.3.0
        'postpone_app' => 'JÃ³vÃ¡hagyÃ¡s kÃ©sÅ‘bb',
        'del_pic' => 'FÃ¡jl tÃ¶rlÃ©s', //cpg1.3.0
		'read_exif' => 'EXIF informÃ¡ciÃ³ ÃºjraolvasÃ¡sa', //cpg1.3.0
        'reset_view_count' => 'NÃ©zettsÃ©gszÃ¡mlÃ¡lÃ³ nullÃ¡zÃ¡sa',
        'reset_votes' => 'SzavazatszÃ¡mlÃ¡lÃ³ alaphelyzetbe',
        'del_comm' => 'HozzÃ¡szÃ³lÃ¡sok tÃ¶rlÃ©se',
        'upl_approval' => 'FeltÃ¶ltÃ©s jÃ³vÃ¡hagyÃ¡s',
        'edit_pics' => 'FÃ¡jlok rendezÃ©se', //cpg1.3.0
        'see_next' => 'KÃ¶vetkezÅ‘ fÃ¡jl', //cpg1.3.0
        'see_prev' => 'ElÅ‘zÅ‘ fÃ¡jl', //cpg1.3.0
        'n_pic' => '%s db fÃ¡jl', //cpg1.3.0
        'n_of_pic_to_disp' => 'FÃ¡jl / oldal', //cpg1.3.0
        'apply' => 'MÃ³dosÃ­tÃ¡sok vÃ©grehajtÃ¡sa', //cpg1.3.0
		'crop_title' => 'Coppermine kÃ©pszerkesztÅ‘', //cpg1.3.0
		'preview' => 'ElÅ‘nÃ©zet', //cpg1.3.0
		'save' => 'KÃ©p mentÃ©se', //cpg1.3.0
		'save_thumb' =>'MentÃ©s ikonkÃ©nt', //cpg1.3.0
		'sel_on_img' =>'A kivÃ¡lasztott rÃ©sznek a kÃ©pen belÃ¼l kell lennie!', //js-alert //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Gyakran IsmÃ©telt kÃ©rdÃ©sek', //cpg1.3.0
  'toc' => 'TartalomjegyzÃ©k', //cpg1.3.0
  'question' => 'KÃ©rdÃ©sek: ', //cpg1.3.0
  'answer' => 'VÃ¡laszok: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'ÃltalÃ¡nos GYIK', //cpg1.3.0
  array('MiÃ©rt kell regisztrÃ¡lnom?', 'A regisztrÃ¡lÃ¡st kÃ©rheti az adminisztrÃ¡tor. A regisztrÃ¡ciÃ³ a tagnak plusz szolgÃ¡ltatÃ¡sokat biztosÃ­that, mint kÃ©pek feltÃ¶ltÃ©sÃ©t, kedvencek lista vezetÃ©sÃ©t, kÃ©pek osztÃ¡lyozÃ¡sÃ¡t Ã©s hozzÃ¡szÃ³lÃ¡sok postÃ¡zÃ¡sÃ¡t stb.', 'allow_user_registration', '0'), //cpg1.3.0
  array('Hogyan regisztrÃ¡ljak?', 'Menj a &quot;RegisztrÃ¡ciÃ³&quot; menÃ¼be Ã©s tÃ¶ltsd ki a kÃ­vÃ¡nt mezÅ‘ket (Ã©s az opcionÃ¡lisakat ha akarod).<br />Ha az adminisztrÃ¡tor engedÃ©lyezte az e-mail aktivÃ¡lÃ¡st, akkor az informÃ¡ciÃ³k megadÃ¡sa utÃ¡n egy e-mailben kapsz Ã©rtesÃ­tÃ©st a regisztrÃ¡ciÃ³rÃ³l, valamint arrÃ³l, hogy hogyan aktivÃ¡lhatod a hozzÃ¡fÃ©rÃ©sedet, ami a bejelentkezÃ©shez szÃ¼ksÃ©ges.', 'allow_user_registration', '1'), //cpg1.3.0
  array('Hogyan jelentkezhetek be?', 'Menj a &quot;BejelentkezÃ©s&quot; menÃ¼be, add meg a felhasznÃ¡lÃ³neved Ã©s jelszavadat. Ha azt akarod, hogy a legkÃ¶zelebbi lÃ¡togatÃ¡sod alkalmÃ¡val automatikusan be legyÃ©l jelentkezve, x-eld ki a &quot;EmlÃ©kezz rÃ¡m&quot; nÃ©gyzetet.<br /><b>FONTOS: &quot;Az EmlÃ©kezz rÃ¡m&quot; csak akkor mÅ±kÃ¶dik, ha a Cooky-kat engedÃ©lyezted Ã©s nem tÃ¶rÃ¶lted a webhelyeden!</b>', 'offline', 0), //cpg1.3.0
  array('MiÃ©rt nem tudok bejelentkezni?', 'RegisztrÃ¡ltÃ¡l, Ã©s vÃ¡laszoltÃ¡l az e-mailben kapott linkre? Ez aktivÃ¡lja a hozzÃ¡fÃ©rÃ©sed. EgyÃ©b bejelentkezÃ©si problÃ©ma esetÃ©n fordulj a webhely adminisztrÃ¡torÃ¡hoz!', 'offline', 0), //cpg1.3.0
  array('Mi tÃ¶rtÃ©nik, ha elfelejtettem a jelszavam?', 'Ha lÃ¡tsz a webhelyen &quot;Elfelejtettem a jelszavam&quot; linket, hasznÃ¡ld! EgyÃ©bkÃ©nt kÃ©rj a webhely adminisztrÃ¡torÃ¡tÃ³l Ãºj jelszÃ³t!', 'offline', 0), //cpg1.3.0
  //array('Mi tÃ¶rtÃ©nik, ha megvÃ¡ltozott az e-mail cÃ­mem?', 'EgyszerÅ±en lÃ©pj be Ã©s a &quot;Profilom&quot; menÃ¼ben vÃ¡ltoztasd meg az e-mail cÃ­medet!', 'offline', 0), //cpg1.3.0
  array('Hogyan tÃ¡rolhatok egy fÃ¡jlt a &quot;Kedvencek&quot; kÃ¶zÃ¶tt?', 'Klikkelj a kÃ©pre, ha a kÃ©p alatt nem lÃ¡thatÃ³ a &quot;FÃ¡jl informÃ¡ciÃ³&quot;, akkor klikkelj a fÃ¡jlinformÃ¡ciÃ³ ikonra (<img src="images/info.gif" width="16" height="16" border="0" alt="FÃ¡jl informÃ¡ciÃ³" />), gÃ¶rgess le a &quot;FÃ¡jl informÃ¡ciÃ³&quot;-hoz, majd klikkelj a &quot;HozzÃ¡adÃ¡s a kedvencekhez&quot; likre!<br /><br />FONTOS: A cooky-kat engedÃ©lyezned kell Ã©s nem tÃ¶rÃ¶lheted a webhelyeden!', 'offline', 0), //cpg1.3.0
  array('Hogyan osztÃ¡lyozhatom a fÃ¡jlokat?', 'Klikkelj az ikonizÃ¡lt kÃ©pre, gÃ¶rgess az aljÃ¡ra, Ã©s vÃ¡laszd a &quot;FÃ¡jl osztÃ¡lyozÃ¡sa&quot; rÃ©szben klikkelj a megfelelÅ‘ osztÃ¡lyzatra!', 'offline', 0), //cpg1.3.0
  array('Hogyan postÃ¡zhatok hozzÃ¡szÃ³lÃ¡st egy fÃ¡jlhoz?', 'Klikkelj az ikonizÃ¡lt kÃ©pre, mej az aljÃ¡ra, Ã©s postÃ¡zz hozzÃ¡szÃ³lÃ¡st!', 'offline', 0), //cpg1.3.0
  array('Hogyan tÃ¶lthetek fel fÃ¡jlokat?', 'Menj a &quot;FeltÃ¶ltÃ©s&quot; menÃ¼be Ã©s vÃ¡laszd ki az albumot, amelyikbe fÃ¡jlt akarsz feltÃ¶lteni! Klikkelj a &quot;Browse...&quot; gombra Ã©s vÃ¡laszd ki a feltÃ¶ltendÅ‘ fÃ¡jlt! Megadhatsz cÃ­met Ã©s kÃ©palÃ¡Ã­rÃ¡st is igÃ©ny szerint. VÃ©gÃ¼l klikkelj a &quot;TOVÃBB&quot; gombra.', 'allow_private_albums', 0), //cpg1.3.0
  array('Hova tÃ¶lthetek fel fÃ¡jlokat?', 'Az &quot;KÃ©ptÃ¡ram&quot; valamelyik albumÃ¡ba tÃ¶lthetsz fel fÃ¡jlokat. Az adminisztrÃ¡tor engedÃ©lyezheti, hogy feltÃ¶lthess fÃ¡jlokat a fÅ‘kÃ©ptÃ¡r egy vagy tÃ¶bb albumÃ¡ba is.', 'allow_private_albums', 0), //cpg1.3.0
  array('Milyen tÃ­pusÃº Ã©s mÃ©retÅ± fÃ¡jlt tÃ¶lthetek fel?', 'A mÃ©retet Ã©s tÃ­pust (jpg,gif,..etc.) az adminisztrÃ¡tor dÃ¶ntheti el.', 'offline', 0), //cpg1.3.0
  array('Mi az &quot;KÃ©ptÃ¡ram&quot;?', 'Az &quot;KÃ©ptÃ¡ram&quot; egy szemÃ©lyes kÃ©ptÃ¡r, ahova a felhasznÃ¡lÃ³ feltÃ¶lthet fÃ¡jlt, Ã©s menedzselheti.', 'allow_private_albums', 0), //cpg1.3.0
  array('Hogyan hozhatok lÃ©tre, nevezhetek Ã¡t, vagy tÃ¶rÃ¶lhetek albumot az &quot;KÃ©ptÃ¡ram&quot;-ban?', '&quot;Admin mÃ³d&quot;-ban kell, hogy legyÃ©l.<br />Menj a &quot;SzemÃ©lyes albumok szerkesztÃ©se 
 
&quot; menÃ¼be Ã©s klikkelj a &quot;Ãšj&quot; gombra. Ãrd Ã¡t az &quot;Ãšj album&quot;-ot a kÃ­vÃ¡nt nÃ©vre.<br />A kÃ©ptÃ¡rad bÃ¡rmelyik meglÃ©vÅ‘ albumÃ¡t is Ã¡tnevezheted.<br />Klikkelj a &quot;MÃ³dosÃ­tÃ¡sok vÃ©grehajtÃ¡sa&quot;-ra.', 'allow_private_albums', 0), //cpg1.3.0
  array('Hogyan szabÃ¡lyozhatom, hogy a felhasznÃ¡lÃ³k lÃ¡thassÃ¡k-e az albumomat?','&quot;Admin mÃ³d&quot;-ban kell, hogy legyÃ©l.<br />Menj a &quot;SzemÃ©lyes albumom tulajdonsÃ¡gai&quot;-ba. Az &quot;Album mÃ³dosÃ­tÃ¡sa&quot; legÃ¶rdÃ¼lÅ‘ menÃ¼bÅ‘l vÃ¡laszd ki a kÃ­vÃ¡nt albumot.<br />Itt megvÃ¡ltoztathatod az album nevÃ©t, leÃ­rÃ¡sÃ¡t, ikonizÃ¡lt kÃ©pÃ©t, Ã©s korlÃ¡tozhatod az albumban lÃ©vÅ‘ fÃ¡jlok megtekintÃ©sÃ©t, osztÃ¡lyozÃ¡sÃ¡t, Ã©s hozzÃ¡szÃ³lÃ¡sok postÃ¡zÃ¡sÃ¡t.<br />Klikkelj ezutÃ¡n az &quot;Album mÃ³dosÃ­tÃ¡sa&quot; gombra!.', 'allow_private_albums', 0), //cpg1.3.0
  array('Hogyan lÃ¡thatom mÃ¡s felhasznÃ¡lÃ³ kÃ©ptÃ¡rÃ¡t?', 'Menj az &quot;AlbumlistÃ¡ra&quot; Ã©s vÃ¡laszd ki a &quot;FelhasznÃ¡lÃ³i kÃ©ptÃ¡rak&quot; linket.', 'allow_private_albums', 0), //cpg1.3.0
  array('Mik a Cooky-k?', 'A cooky-k szÃ¶veges adatÃ¡llomÃ¡nyok, melyeket a webhely kÃ¼ld a szÃ¡mÃ­tÃ³gÃ©pedre.<br />A cooky-k Ã¡ltalÃ¡ban azt teszik lehetÅ‘vÃ©, hogy a felhasznÃ¡lÃ³ ismÃ©telt bejelentkezÃ©s nÃ©lkÃ¼l is visszatalÃ¡ljon a webhelyre, Ã©s egyÃ©b hasonlÃ³ kÃ©nyelmi lehetÅ‘sÃ©geket biztosÃ­t.', 'offline', 0), //cpg1.3.0
  array('Hol kaphatom meg ezt a programot a webhelyemre?', 'Coppermine egy ingyenes multimÃ©diÃ¡s kÃ©ptÃ¡r, GNU GPL licensszel. Tele van szolgÃ¡ltatÃ¡sokkal Ã©s kÃ¼lÃ¶nbÃ¶zÅ‘ platformokon mÅ±kÃ¶dik. LÃ¡togass el a <a href="http://coppermine.sf.net/">Coppermine honlap</a>-ra tovÃ¡bbi informÃ¡ciÃ³Ã©rt Ã©s a program letÃ¶ltÃ©sÃ©Ã©rt.', 'offline', 0), //cpg1.3.0

  'NavigÃ¡lÃ¡s a webhelyen', //cpg1.3.0
  array('Mi az &quot;Albumlista&quot;?', 'Ez megmutatja a teljes kÃ©ptÃ¡rat a kategÃ³riÃ¡kra mutatÃ³ linkeken keresztÃ¼l. A kategÃ³ria linkje ikonizÃ¡lt kÃ©p is lehet.', 'offline', 0), //cpg1.3.0
  array('Mi az &quot;KÃ©ptÃ¡ram&quot;?', 'Ennek a szolgÃ¡ltatÃ¡snak a segÃ­tsÃ©gÃ©vel a felhasznÃ¡lÃ³k sajÃ¡t kÃ©ptÃ¡rt hozhatnak lÃ©tre, ebben lÃ©trehozhatnak, mÃ³dosÃ­thatnak Ã©s tÃ¶rÃ¶lhetnek albumokat, valamint kÃ©peket tÃ¶lthetnek fel ide.', 'allow_private_albums', 0), //cpg1.3.0
  array('Mi a kÃ¼lÃ¶nbsÃ©g az &quot;Admin mÃ³d&quot; Ã©s a &quot;Felhaszn.mÃ³d&quot; kÃ¶zÃ¶tt?', 'AdminisztrÃ¡tor mÃ³dban a felhasznÃ¡lÃ³ mÃ³dosÃ­thatja a kÃ©ptÃ¡rÃ¡t (Ã©s mÃ¡sÃ©t, ha az adminisztrÃ¡tor ezt engedÃ©lyezte).', 'allow_private_albums', 0), //cpg1.3.0
  array('Mi a &quot;FeltÃ¶ltÃ©se&quot;?', 'Ez a szolgÃ¡ltatÃ¡s lehetÅ‘vÃ© teszi a felhasznÃ¡lÃ³knak fÃ¡jlok feltÃ¶ltÃ©sÃ©t egy az Ã¡ltalad vagy az adminisztrÃ¡tor Ã¡ltal megadott kÃ©ptÃ¡rba (mÃ©retet Ã©s tÃ­pust az adminisztrÃ¡tor engedÃ©lyez).', 'allow_private_albums', 0), //cpg1.3.0
  array('Mi a &quot;Friss feltÃ¶ltÃ©sek&quot;?', 'Ez a szolgÃ¡ltatÃ¡s mutatja az utoljÃ¡ra feltÃ¶ltÃ¶tt fÃ¡jlokat.', 'offline', 0), //cpg1.3.0
  array('Mi a &quot;Friss hozzÃ¡szÃ³lÃ¡sok&quot;?', 'Ez a szolgÃ¡ltatÃ¡s mutatja az utoljÃ¡ra postÃ¡zott hozzÃ¡szÃ³lÃ¡sokat a fÃ¡jlokhoz.', 'offline', 0), //cpg1.3.0
  array('Mi a &quot;LegtÃ¶bbszÃ¶r nÃ©zett&quot;?', 'Ez a szolgÃ¡ltatÃ¡s mutatja az Ã¶sszes felhasznÃ¡lÃ³ Ã¡ltal legtÃ¶bbszÃ¶r nÃ©zett fÃ¡jlokat, fÃ¼ggetlenÃ¼l attÃ³l, hogy bejelentkeztek-e, vagy nem.', 'offline', 0), //cpg1.3.0
  array('Mi a &quot;LegtÃ¶bb szavazat&quot;?', 'Ez a szolgÃ¡ltatÃ¡s mutatja legtÃ¶bb szavazatot kapott fÃ¡jlokat, az Ã¡tlagosztÃ¡lyzattal (pÃ©ldÃ¡ul ha 5 felhasznÃ¡lÃ³ mindegyike <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />-t adott, akkor a kÃ©p Ã¡tlagosztÃ¡lyzata <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />. Ha Ã¶ felhasznÃ¡lÃ³ 1-tÅ‘l 5-ig osztÃ¡lyozott (1,2,3,4,5), akkor az Ã¡tlagosztÃ¡lyzat <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> lesz.)<br />Az osztÃ¡lyzat <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" />-tÅ‘ (legjobb) megy <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" />-ig (legrosszabb).', 'offline', 0), //cpg1.3.0
  array('Mi a &quot;Kedvencek&quot;?', 'Ez a szolgÃ¡ltatÃ¡s a felhasznÃ¡lÃ³ szÃ¡mÃ¡ra lehetÅ‘vÃ© teszi, hogy kedvenc kÃ©peire cooky segÃ­tsÃ©gÃ©vel emlÃ©kezzen a szÃ¡mÃ­tÃ³gÃ©p.', 'offline', 0), //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'JelszÃ³ emlÃ©keztetÅ‘', //cpg1.3.0
  'err_already_logged_in' => 'MÃ¡r bejelentkeztÃ©l!', //cpg1.3.0
  'enter_username_email' => 'Add meg a felhasznÃ¡lÃ³neved Ã©s e-mail cÃ­medet!', //cpg1.3.0
  'submit' => 'mehet', //cpg1.3.0
  'failed_sending_email' => 'A jelszÃ³-emlÃ©keztetÅ‘ e-mail kikÃ¼ldÃ©se nem sikerÃ¼lt!', //cpg1.3.0
  'email_sent' => 'Egy e-mailt kÃ¼ldtÃ¼nk felhasznÃ¡lÃ³nÃ©vvel Ã©s jelszÃ³val %s-nek', //cpg1.3.0
  'err_unk_user' => 'A kivÃ¡lasztott felhasznÃ¡lÃ³ nem lÃ©tezik!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - JelszÃ³-emlÃ©keztetÅ‘', //cpg1.3.0
  'passwd_reminder_body' => 'KÃ©rted, hogy emlÃ©keztessÃ¼nk a bejelentkezÃ©si adataidra:
FelhasznÃ¡lÃ³nÃ©v: %s
JelszÃ³: %s
Klikkelj %s -ra a bejelentkezÃ©shez.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
        'group_name' => 'Csoport megnevezÃ©se',
        'disk_quota' => 'Diszk kvÃ³ta',
        'can_rate' => 'OsztÃ¡lyozhat fÃ¡jlokat', //cpg1.3.0
        'can_send_ecards' => 'KÃ¼ldhet e-kÃ©peslapot',
        'can_post_com' => 'HozzÃ¡szÃ³lÃ¡st kÃ¼ldhet',
        'can_upload' => 'FeltÃ¶lthet fÃ¡jlokat', //cpg1.3.0
        'can_have_gallery' => 'Lehet szemÃ©lyes kÃ©ptÃ¡ra',
        'apply' => 'MÃ³dosÃ­tÃ¡sok vÃ©grehajtÃ¡sa',
        'create_new_group' => 'Ãšj csoport lÃ©trehozÃ¡sa',
        'del_groups' => 'KijelÃ¶lt csoport(ok) tÃ¶rlÃ©se ',
        'confirm_del' => 'FigyelmeztetÃ©s: ha tÃ¶rÃ¶lsz egy csoportot, a hozzÃ¡ tartozÃ³ felhasznÃ¡lÃ³k Ã¡thelyezÅ‘dnek a \'RegisztrÃ¡ltak\' csoportba !\n\nFolytatod ?', //js-alert //cpg1.3.0
        'title' => 'FelhasznÃ¡lÃ³csoportok menedzselÃ©se',
        'approval_1' => 'NyilvÃ¡nos feltÃ¶ltÃ©s jÃ³vÃ¡hagyÃ¡s (1)',
        'approval_2' => 'PrivÃ¡t feltÃ¶ltÃ©s jÃ³vÃ¡hagyÃ¡s (2)',
		'upload_form_config' => 'FeltÃ¶ltÃ©s a konfigurÃ¡ciÃ³bÃ³l', //cpg1.3.0
		'upload_form_config_values' => array( 'Csak egyenkÃ©nti feltÃ¶ltÃ©s', 'Csak csoportos feltÃ¶ltÃ©s', 'Csak URI feltÃ¶ltÃ©s', 'Csak ZIP feltÃ¶ltÃ©s', 'FÃ¡jl-URI', 'FÃ¡jl-ZIP', 'URI-ZIP', 'FÃ¡jl-URI-ZIP'), //cpg1.3.0
		'custom_user_upload'=>'A felhasznÃ¡lÃ³k beÃ¡llÃ­thatjÃ¡k a feltÃ¶ltÃ©s sorok szÃ¡mÃ¡t?', //cpg1.3.0
		'num_file_upload'=>'FÃ¡jl feltÃ¶ltÃ©s sorok maximum/pontos szÃ¡ma', //cpg1.3.0
		'num_URI_upload'=>'URI feltÃ¶ltÃ©s sorok maximum/pontos szÃ¡ma', //cpg1.3.0
        'note1' => '<b>(1)</b> A nyilvÃ¡nos albumba tÃ¶rtÃ©nÅ‘ feltÃ¶ltÃ©s adminisztrÃ¡tori jÃ³vÃ¡hagyÃ¡st igÃ©nyel',
        'note2' => '<b>(2)</b> A felhasznÃ¡lÃ³ albumÃ¡ba tÃ¶rtÃ©nÅ‘ feltÃ¶ltÃ©s adminisztrÃ¡tori jÃ³vÃ¡hagyÃ¡st igÃ©nyel',
        'notes' => 'MegjegyzÃ©sek',
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
        'welcome' => 'ÃœdvÃ¶zÃ¶llek!',
);

$lang_album_admin_menu = array(
        'confirm_delete' => 'Biztos tÃ¶rÃ¶lni akarod az albumot? \\nMinden fÃ¡jl Ã©s hozzÃ¡szÃ³lÃ¡s is tÃ¶rlÅ‘dik!', //js-alert //cpg1.3.0
        'delete' => 'TÃ–RLÃ‰S',
        'modify' => 'TULAJDONSÃGOK',
        'edit_pics' => 'SZERKESZTÃ‰S',
);

$lang_list_categories = array(
        'home' => 'Home',
        'stat1' => '<b>[pictures]</b> fÃ¡jl <b>[albums]</b> albumban Ã©s <b>[cat]</b> kategÃ³riÃ¡ban <b>[comments]</b> hozzÃ¡szÃ³lÃ¡ssal, megtekintÃ©sek szÃ¡ma: <b>[views]</b>', //cpg1.3.0
        'stat2' => '<b>[pictures]</b> fÃ¡jl <b>[albums]</b> albumban, megtekintÃ©sek szÃ¡ma: <b>[views]</b>', //cpg1.3.0
        'xx_s_gallery' => '%s kÃ©ptÃ¡ra',
        'stat3' => '<b>[pictures]</b> fÃ¡jl <b>[albums]</b> albumban <b>[comments]</b> hozzÃ¡szÃ³lÃ¡ssal, megtekintÃ©sek szÃ¡ma: <b>[views]</b>' //cpg1.3.0
);

$lang_list_users = array(
        'user_list' => 'FelhasznÃ¡lÃ³k listÃ¡ja',
        'no_user_gal' => 'Nincs felhasznÃ¡lÃ³ a kÃ©ptÃ¡rban',
        'n_albums' => '%s album(ok)',
        'n_pics' => '%s fÃ¡jl(ok)' //cpg1.3.0
);

$lang_list_albums = array(
        'n_pictures' => '%s fÃ¡jl', //cpg1.3.0
        'last_added' => ', utolsÃ³ feltÃ¶ltÃ©s: %s',
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
        'login' => 'BejelentkezÃ©s',
        'enter_login_pswd' => 'Adja meg felhasznÃ¡lÃ³nevÃ©t Ã©s jelszavÃ¡t a bejelentkezÃ©shez',
        'username' => 'FelhasznÃ¡lÃ³nÃ©v',
        'password' => 'JelszÃ³',
        'remember_me' => 'EmlÃ©kezz rÃ¡m',
        'welcome' => 'ÃœdvÃ¶zÃ¶llek %s ...',
        'err_login' => '*** A bejelentkezÃ©s sikertelen, prÃ³bÃ¡ld Ãºjra ***',
        'err_already_logged_in' => 'MÃ¡r bejelentkeztÃ©l!',
		'forgot_password_link' => 'Elfelejtettem a jelszavam', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
        'logout' => 'KijelentkezÃ©s',
        'bye' => 'ViszontlÃ¡tÃ¡sra %s ...',
        'err_not_loged_in' => 'Nem vagy bejelentkezve!',
);

// ------------------------------------------------------------------------- //
// File phpinfo.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP infÃ³', //cpg1.3.0
  'explanation' => 'Ezt az Ã¼zenetet a <a href="http://www.php.net/phpinfo">phpinfo()</a> PHP fÃ¼ggvÃ©ny generÃ¡lta a Copermine rendszerben (az Ã¼zenet jobb sarka levÃ¡gÃ¡sra kerÃ¼lhet).', //cpg1.3.0
  'no_link' => 'SajÃ¡t phpinfÃ³d megmutatÃ¡sa mÃ¡soknak biztonsÃ¡gi rizikÃ³t jelenthet, ezÃ©rt ez az oldal csak admin mÃ³dban lÃ¡thatÃ³. ErrÅ‘l az oldlrÃ³l nem postÃ¡zhatsz linket mÃ¡soknak, ezekhez a hozzÃ¡fÃ©rÃ©s le lesz tiltva.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
        'upd_alb_n' => '%s album mÃ³dosÃ­tÃ¡sa ',
        'general_settings' => 'ÃltalÃ¡nos beÃ¡llÃ­tÃ¡sok',
        'alb_title' => 'Album cÃ­m',
        'alb_cat' => 'Album kategÃ³ria',
        'alb_desc' => 'Album leÃ­rÃ¡s',
        'alb_thumb' => 'Album ikon',
        'alb_perm' => 'Album jogosultsÃ¡gok',
        'can_view' => 'Albumot lÃ¡thatja: ',
        'can_upload' => 'LÃ¡togatÃ³k feltÃ¶lthetnek kÃ©pet',
        'can_post_comments' => 'LÃ¡togatÃ³k kÃ¼ldhetnek hozzÃ¡szÃ³lÃ¡sokat',
        'can_rate' => 'LÃ¡togatÃ³k osztÃ¡lyozhatjÃ¡k a kÃ©peket',
        'user_gal' => 'FelhasznÃ¡lÃ³i kÃ©ptÃ¡r',
        'no_cat' => '* Nincs kategÃ³ria *',
        'alb_empty' => 'Az album Ã¼res',
        'last_uploaded' => 'UtoljÃ¡ra feltÃ¶ltÃ¶tt',
        'public_alb' => 'Mindenki (nyilvÃ¡nos album)',
        'me_only' => 'Csak Ã©n',
        'owner_only' => 'Csak a (%s) album tulajdonosa',
        'groupp_only' => 'Csak a \'%s\' csoport tagjai',
        'err_no_alb_to_modify' => 'Nincs mÃ³dosÃ­thatÃ³ album az adatbÃ¡zisban.',
        'update' => 'Album mÃ³dosÃ­tÃ¡sa', //cpg1.3.0
		'notice1' => '(*) a %sgroups%s beÃ¡llÃ­tÃ¡soktÃ³l fÃ¼ggÅ‘en', //cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
        'already_rated' => 'SajnÃ¡lom, de mÃ¡r osztÃ¡lyoztad ezt a fÃ¡jlt', //cpg1.3.0
        'rate_ok' => 'OsztÃ¡lyzatod elfogadtuk',
		'forbidden' => 'Nem osztÃ¡lyozhatod a sajÃ¡t kÃ©peidet.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
BÃ¡r a {SITE_NAME} adminisztrÃ¡tora mindent elkÃ¶vet, hogy amilyen gyorsan csak lehet, szerkesszen vagy tÃ¶rÃ¶ljÃ¶n minden kifogÃ¡solhatÃ³ dokumentumot, lehetetlen minden kÃ¼ldemÃ©ny ellenÅ‘rzÃ©se. KÃ©rjÃ¼k ezÃ©rt annak megÃ©rtÃ©sÃ©t, hogy minden erre a weblapra cÃ­mzett kÃ¼ldemÃ©ny annak szerzÅ‘je nÃ©zetÃ©t Ã©s vÃ©lemÃ©nyÃ©t fejezi ki, Ã©s nem az adminisztrÃ¡torÃ©t, illetve webmesterÃ©t (kivÃ©ve az Ã¡ltaluk postÃ¡zott kÃ¼ldemÃ©nyeket). EnnÃ©l fogva nem tudunk Ã©rtÃ¼k felelÅ‘ssÃ©get vÃ¡llalni.<br />
<br />
Elfogadod, hogy nem postÃ¡zol semmilyen sÃ©rtÅ‘, obszcÃ©n, vulgÃ¡ris, rÃ¡galmazÃ³, gyÅ±lÃ¶lkÃ¶dÅ‘, fenyegetÅ‘, szexuÃ¡lis tartalmÃº, vagy bÃ¡rmilyen mÃ¡s olyan tartalmÃº anyagot, amely Ã©rvÃ©nyes tÃ¶rvÃ©nyt sÃ©rt. Elfogadod, hogy a {SITE_NAME} webmesterÃ©nek, adminisztrÃ¡torÃ¡nak, vagy moderÃ¡torÃ¡nak bÃ¡rmikor jogÃ¡ban Ã¡ll bÃ¡rmilyen tartalmat szÃ¼ksÃ©g esetÃ©n tÃ¶rÃ¶lni, vagy szerkeszteni. Mint felhasznÃ¡lÃ³ egyetÃ©rtesz a kÃ¶zÃ¶lt informÃ¡ciÃ³k adatbÃ¡zisban tÃ¶rtÃ©nÅ‘ tÃ¡rolÃ¡sÃ¡hoz. BÃ¡r a webmester, illetve adminisztrÃ¡tor nem adja ki harmadik feleknek ezeket az informÃ¡ciÃ³kat a hozzÃ¡jÃ¡rulÃ¡sod nÃ©lkÃ¼l, nem tehetÅ‘ felelÅ‘ssÃ© semmilyen olyan hacker kÃ­sÃ©rletÃ©rt, melyek az adatok kompromittÃ¡lÃ¡sÃ¡hoz vezet.<br />
<br />
Ez a weblap cooky formÃ¡jÃ¡ban informÃ¡ciÃ³t tÃ¡rol a szÃ¡mÃ­tÃ³gÃ©peden. Ezek a cooky-k csak azt a cÃ©lt szolgÃ¡ljÃ¡k, hogy fokozzÃ¡k a nÃ©zhetÅ‘sÃ©gi Ã©lmÃ©nyt. Az email cÃ­m csak a regisztrÃ¡ciÃ³s adataidnak Ã©s jelszavadnak nyugtÃ¡zÃ¡sÃ¡ra szolgÃ¡l.<br />
<br />
Az 'EgyetÃ©rtek'-re klikkelve elfogadod ezeket a feltÃ©teleket.
EOT;

$lang_register_php = array(
        'page_title' => 'FelhasznÃ¡lÃ³ regisztrÃ¡ciÃ³',
        'term_cond' => 'RegisztrÃ¡ciÃ³s feltÃ©telek',
        'i_agree' => 'EgyetÃ©rtek',
        'submit' => 'RegisztrÃ¡lÃ¡s',
        'err_user_exists' => 'A megadott felhasznÃ¡lÃ³nÃ©v mÃ¡r lÃ©tezik, adjon meg mÃ¡sikat',
        'err_password_mismatch' => 'A kÃ©t jelszÃ³ nem egyezik, add meg Ãºjra',
        'err_uname_short' => 'A felhasznÃ¡lÃ³nÃ©v legalÃ¡bb 2 karakter hosszÃº kell, hogy legyen',
        'err_password_short' => 'A jelszÃ³ legalÃ¡bb 2 karakter hosszÃº kell, hogy legyen',
        'err_uname_pass_diff' => 'A felhasznÃ¡lÃ³nÃ©vnek Ã©s a jelszÃ³nak kÃ¼lÃ¶nbÃ¶znie kell',
        'err_invalid_email' => 'Ã‰rvÃ©nytelen email cÃ­m',
        'err_duplicate_email' => 'Egy mÃ¡sik felhasznÃ¡lÃ³ mÃ¡r regisztrÃ¡lt ezzel az email cÃ­mmel',
        'enter_info' => 'RegisztrÃ¡ciÃ³s informÃ¡ciÃ³k megadÃ¡sa',
        'required_info' => 'KÃ¶telezÅ‘ adat',
        'optional_info' => 'OpcionÃ¡lis adat',
        'username' => 'FelhasznÃ¡lÃ³nÃ©v',
        'password' => 'JelszÃ³',
        'password_again' => 'JelszÃ³ mÃ©g egyszer',
        'email' => 'Email',
        'location' => 'TartÃ³zkodÃ¡si hely',
        'interests' => 'Ã‰rdeklÅ‘dÃ©si kÃ¶r',
        'website' => 'Honlap',
        'occupation' => 'FoglalkozÃ¡s',
        'error' => 'HIBA',
        'confirm_email_subject' => '%s - RegisztrÃ¡ciÃ³ nyugtÃ¡zÃ¡sa',
        'information' => 'InformÃ¡ciÃ³',
        'failed_sending_email' => 'A regisztrÃ¡ciÃ³s megerÅ‘sÃ­tÅ‘ emailt nem sikerÃ¼lt elkÃ¼ldeni !',
        'thank_you' => 'KÃ¶szÃ¶njÃ¼k, hogy regisztrÃ¡ltÃ¡l.<br /><br />KÃ¼ldtÃ¼nk egy emailt a megadott email cÃ­mre, amiben megadtuk, hogy hogyan aktivÃ¡lhatod felhasznÃ¡lÃ³i hozzÃ¡fÃ©rÃ©sed.',
        'acct_created' => 'FelhasznÃ¡lÃ³i hozzÃ¡fÃ©rÃ©sed lÃ©trehoztuk Ã©s bejelentkezhetsz a felhasznÃ¡lÃ³neveddel Ã©s jelszavaddal',
        'acct_active' => 'FelhasznÃ¡lÃ³i hozzÃ¡fÃ©rÃ©sed aktivÃ¡ltuk Ã©s bejelentkezhetsz a felhasznÃ¡lÃ³neveddel Ã©s jelszavaddal',
        'acct_already_act' => 'FelhasznÃ¡lÃ³i hozzÃ¡fÃ©rÃ©sed mÃ¡r aktÃ­v !',
        'acct_act_failed' => 'Ezt a felhasznÃ¡lÃ³i hozzÃ¡fÃ©rÃ©st nem lehet aktivÃ¡lni !',
        'err_unk_user' => 'A kivÃ¡lasztott felhasznÃ¡lÃ³ nem lÃ©tezik !',
        'x_s_profile' => '%s profilja',
        'group' => 'Csoport',
        'reg_date' => 'CsatlakozÃ¡s ideje',
        'disk_usage' => 'TÃ¡rfelhasznÃ¡lÃ¡s',
        'change_pass' => 'JelszÃ³ megvÃ¡ltoztatÃ¡sa',
        'current_pass' => 'Jelenlegi jelszÃ³',
        'new_pass' => 'Ãšj jelszÃ³',
        'new_pass_again' => 'Ãšj jelszÃ³ mÃ©g egyszer',
        'err_curr_pass' => 'A jelenlegi jelszÃ³ hibÃ¡s',
        'apply_modif' => 'MÃ³dosÃ­tÃ¡sok vÃ©grehajtÃ¡sa',
        'change_pass' => 'JelszÃ³ megvÃ¡ltoztatÃ¡sa',
        'update_success' => 'Profilod aktualizÃ¡ltuk',
        'pass_chg_success' => 'Jelszavad megvÃ¡ltoztattuk',
        'pass_chg_error' => 'Jelszavad nem vÃ¡ltoztattuk meg',
		'notify_admin_email_subject' => '%s - regisztrÃ¡ciÃ³s Ã©rtesÃ­tÃ©s', //cpg1.3.0
		'notify_admin_email_body' => 'Egy Ãºj felhasznÃ¡lÃ³ "%s" nÃ©vvel regisztrÃ¡lt a kÃ©ptÃ¡radba', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
KÃ¶szÃ¶njÃ¼k, hogy regisztrÃ¡ltÃ¡l '{SITE_NAME}' weblapunkon

FelhasznÃ¡lÃ³neved : "{USER_NAME}"
Jelszavad : "{PASSWORD}"

FelhaznÃ¡lÃ³i hozzÃ¡fÃ©rÃ©sed aktivÃ¡lÃ¡sÃ¡hoz az alÃ¡bbi linkre kell klikkelned.

{ACT_LINK}

ÃœdvÃ¶zlettel,

A '{SITE_NAME}' adminisztrÃ¡tora

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
        'title' => 'HozzÃ¡szÃ³lÃ¡sok megtekintÃ©se',
        'no_comment' => 'Nincs hozzÃ¡szÃ³lÃ¡s',
        'n_comm_del' => '%s hozzÃ¡szÃ³lÃ¡s(ok) tÃ¶rÃ¶lve',
        'n_comm_disp' => 'MegjelenÃ­tendÅ‘ hozzÃ¡szÃ³lÃ¡sok szÃ¡ma',
        'see_prev' => 'ElÅ‘zÅ‘',
        'see_next' => 'KÃ¶vetkezÅ‘',
        'del_comm' => 'KijelÃ¶lt hozzÃ¡szÃ³lÃ¡sok tÃ¶rÃ¶lve',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
        0 => 'KeresÃ©s a kÃ©ptÃ¡rban',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
        'page_title' => 'Ãšj fÃ¡jl keresÃ©se', //cpg1.3.0
        'select_dir' => 'KÃ¶nyvtÃ¡r vÃ¡lasztÃ¡sa',
        'select_dir_msg' => 'Ez a funkciÃ³ lehetÅ‘vÃ© teszi egy kÃ¶teg - FTP-vel a szerverre mÃ¡solt - fÃ¡jl hozzÃ¡adÃ¡sÃ¡t a kÃ©ptÃ¡rhoz.<br /><br />VÃ¡laszd ki a kÃ¶nyvtÃ¡rat, ahonnan hozzÃ¡ akarsz adni a kÃ©ptÃ¡rhoz fÃ¡jlokat', //cpg1.3.0
        'no_pic_to_add' => 'Nincs hozzÃ¡adhatÃ³ fÃ¡jl', //cpg1.3.0
        'need_one_album' => 'Ehhez a funkciÃ³hoz legalÃ¡bb egy albumnak lÃ©teznie kell',
        'warning' => 'FigyelmeztetÃ©s',
        'change_perm' => 'a szkript nem tud Ã­rni ebbe a kÃ¶nyvtÃ¡rba, 755-rÅ‘l 777-re kell cserÃ©lned a jogosultsÃ¡gÃ¡t mielÅ‘tt hozzÃ¡adsz fÃ¡jlokat!', //cpg1.3.0
        'target_album' => '<b>Adja hozzÃ¡ a </b>"%s"<b> kÃ¶nyvtÃ¡rbÃ³l a fÃ¡jlokat a </b>%s albumhoz', //cpg1.3.0
        'folder' => 'KÃ¶nyvtÃ¡r',
        'image' => 'KÃ©p',
        'album' => 'Album',
        'result' => 'EredmÃ©ny',
        'dir_ro' => 'Nem Ã­rhatÃ³. ',
        'dir_cant_read' => 'Nem olvashatÃ³. ',
        'insert' => 'Ãšj fÃ¡jlok hozzÃ¡adÃ¡sa a kÃ©ptÃ¡rhoz', //cpg1.3.0
        'list_new_pic' => 'Ãšj fÃ¡jlok felsorolÃ¡sa', //cpg1.3.0
        'insert_selected' => 'KijelÃ¶lt fÃ¡jlok hozzÃ¡adÃ¡sa', //cpg1.3.0
        'no_pic_found' => 'Nincs Ãºj fÃ¡jl', //cpg1.3.0
        'be_patient' => 'LÃ©gy tÃ¼relemmel, a szkriptnek idÅ‘ kell a fÃ¡jlok hozzÃ¡adÃ¡sÃ¡hoz', //cpg1.3.0
		'no_album' => 'nem vÃ¡lasztottÃ¡l albumot',  //cpg1.3.0
        'notes' =>  '<ul>'.
                                '<li><b>OK</b> : azt jelenti, hogy a fÃ¡jl hozzÃ¡adÃ¡sa sikeres volt'. //cpg1.3.0
                                '<li><b>DP</b> : azt jelenti, hogy a fÃ¡jl mÃ¡r az adatbÃ¡zisban volt'. //cpg1.3.0
                                '<li><b>PB</b> : azt jelenti, hogy a fÃ¡jl nem volt hozzÃ¡adhatÃ³, ellenÅ‘rizd a konfigurÃ¡ciÃ³t Ã©s a fÃ¡jlokat tartalmazÃ³ kÃ¶nyvtÃ¡rak jogosultsÃ¡gait '. //cpg1.3.0
		                        '<li><b>NA</b> : azt jelenti, hogy nem vÃ¡lasztottad ki az albumot, melybe a fÃ¡jlokat fel akarod tÃ¶lteni, Ã¼ss \'<a href="javascript:history.back(1)">back</a>\'-t Ã©s vÃ¡lassz ki egy albumot. Ha nincs egy albumod se, akkor <a href="albmgr.php">elÅ‘szÃ¶r generÃ¡lj egyet</a></li>'.
                                '<li>Ha az OK, DP, PB \'jelek\' nem lÃ¡thatÃ³k, klikkelj a hibÃ¡s fÃ¡jlra a PHP hibaÃ¼zenetÃ©nek megjelenÃ­tÃ©sÃ©hez'. //cpg1.3.0
                                '<li>Ha a browser leidÅ‘zÃ­tett, nyomja meg a frissÃ­tÃ©s gombot'.
                                '</ul>',
								'select_album' => 'album kivÃ¡lasztÃ¡sa', //cpg1.3.0
								'check_all' => 'Mindet kijelÃ¶l', //cpg1.3.0
								'uncheck_all' => 'Mindet NEM kijelÃ¶l', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void


// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
        'title' => 'FÃ¡jl feltÃ¶ltÃ©se', //cpg1.3.0
		'custom_title' => 'BeÃ¡llÃ­tott lekÃ©rÃ©si Å±rlap', //cpg1.3.0
		'cust_instr_1' => 'KivÃ¡laszthatsz beÃ¡llÃ­tott szÃ¡mÃº feltÃ¶ltÃ©si sort. Azonban nem lÃ©pheted tÃºl az alÃ¡bbi limitet.', //cpg1.3.0
		'cust_instr_2' => 'Sor szÃ¡m lekÃ©rÃ©s', //cpg1.3.0
		'cust_instr_3' => 'FÃ¡jl feltÃ¶ltÃ©si sok: %s', //cpg1.3.0
		'cust_instr_4' => 'URI/URL feltÃ¶ltÃ©si sorok: %s', //cpg1.3.0
		'cust_instr_5' => 'URI/URL feltÃ¶ltÃ©si sorok:', //cpg1.3.0
		'cust_instr_6' => 'FÃ¡jl feltÃ¶ltÃ©si sorok:', //cpg1.3.0
		'cust_instr_7' => 'Add meg minden tÃ­pusra a jelenleg tervezett feltÃ¶ltÃ©si sorok szÃ¡mÃ¡t.  UtÃ¡na Ã¼ss \'FolytatÃ¡s\'-t. ', //cpg1.3.0
		'reg_instr_1' => 'Ã‰rvÃ©nytelen akciÃ³ ebben a generÃ¡lÃ¡sban.', //cpg1.3.0
		'reg_instr_2' => 'Most feltÃ¶ltheted a fÃ¡jljaidat az alÃ¡bbi feltÃ¶ltÃ©si sorok hasznÃ¡latÃ¡val. A kliensrÅ‘l a szerverre feltÃ¶ltendÅ‘ fÃ¡jlok mÃ©rete egyenkÃ©nt nem lÃ©pheti tÃºl a %s KB hatÃ¡rt. A \'FÃ¡jl feltÃ¶ltÃ©s\' Ã©s \'URI/URL FeltÃ¶ltÃ©s\' rÃ©szben feltÃ¶ltÃ¶tt ZIP fÃ¡jlok tÃ¶mÃ¶rÃ­tettek maradnak.', //cpg1.3.0
		'reg_instr_3' => 'Ha azt akarod, hogy a ZIP fÃ¡jlod kicsomagolÃ¡sra kerÃ¼ljÃ¶n, hasznÃ¡ld a \'KitÃ¶mÃ¶rÃ­tÅ‘ ZIP feltÃ¶ltÃ©s\' rÃ©szben talÃ¡lhatÃ³ sort.', //cpg1.3.0
		'reg_instr_4' => 'Az URI/URL feltÃ¶ltÃ©si rÃ©szben add meg a fÃ¡jl elÃ©rÃ©si Ãºtvonalat a kÃ¶vetkezÅ‘ mÃ³don: http://www.mysite.com/images/example.jpg', //cpg1.3.0
		'reg_instr_5' => 'Ha kitÃ¶ltÃ¶tted az Å±rlapot, nyomj \'FolytatÃ¡s\'-t.', //cpg1.3.0
		'reg_instr_6' => 'KitÃ¶mÃ¶rÃ­tÅ‘ ZIP feltÃ¶ltÃ©s:', //cpg1.3.0
		'reg_instr_7' => 'FÃ¡jl feltÃ¶ltÃ©s:', //cpg1.3.0
		'reg_instr_8' => 'URI/URL feltÃ¶ltÃ©s:', //cpg1.3.0
		'error_report' => 'HibajelentÃ©s', //cpg1.3.0
		'error_instr' => 'A kÃ¶vetkezÅ‘ feltÃ¶ltÃ©sek hibÃ¡t eredmÃ©nyeztek:', //cpg1.3.0
		'file_name_url' => 'FÃ¡jlnÃ©v/URL', //cpg1.3.0
		'error_message' => 'HibaÃ¼zenet', //cpg1.3.0
		'no_post' => 'Nem kerÃ¼lt feltÃ¶ltÃ©sre fÃ¡jl a postÃ¡zÃ¡ssal.', //cpg1.3.0
		'forb_ext' => 'Tiltott fÃ¡jlkiterjesztÃ©s.', //cpg1.3.0
		'exc_php_ini' => 'TÃºllÃ©pted a php.ini-ben megengedett fÃ¡jlmÃ©retet.', //cpg1.3.0
		'exc_file_size' => 'TÃºllÃ©pted a CPG-ben megengedett fÃ¡jlmÃ©retet.', //cpg1.3.0
		'partial_upload' => 'Csak rÃ©szleges feltÃ¶ltÃ©s.', //cpg1.3.0
		'no_upload' => 'Nem tÃ¶rtÃ©nt feltÃ¶ltÃ©s.', //cpg1.3.0
		'unknown_code' => 'Ismeretlen PHP feltÃ¶ltÃ©si hibakÃ³d.', //cpg1.3.0
		'no_temp_name' => 'Nincs feltÃ¶ltÃ©s - Nincs temp nÃ©v.', //cpg1.3.0
		'no_file_size' => 'Nem tartalmaz adatot / hibÃ¡s adat', //cpg1.3.0
		'impossible' => 'Nem lehet Ã¡tmozgatni.', //cpg1.3.0
		'not_image' => 'Nem / hibÃ¡s kÃ©p', //cpg1.3.0
		'not_GD' => 'Nem GD kiterjesztÃ©s.', //cpg1.3.0
		'pixel_allowance' => 'Pixel hatÃ¡rt tÃºllÃ©pted.', //cpg1.3.0
		'incorrect_prefix' => 'Helytelen URI/URL prefix', //cpg1.3.0
		'could_not_open_URI' => 'Nem tudtam megnyitni az URI-t.', //cpg1.3.0
		'unsafe_URI' => 'Nem igazolhatÃ³ a biztonsÃ¡g.', //cpg1.3.0
		'meta_data_failure' => 'Meta adat hiba', //cpg1.3.0
		'http_401' => '401 Jogosulatlan', //cpg1.3.0
		'http_402' => '402 fizetÃ©si kÃ¶telezettsÃ©g', //cpg1.3.0
		'http_403' => '403 tiltott', //cpg1.3.0
		'http_404' => '404 nem talÃ¡lhatÃ³', //cpg1.3.0
		'http_500' => '500 belsÅ‘ szerver hiba', //cpg1.3.0
		'http_503' => '503 szerver nem elÃ©rhetÅ‘', //cpg1.3.0
		'MIME_extraction_failure' => 'MIME nem volt meghatÃ¡rozhatÃ³.', //cpg1.3.0
		'MIME_type_unknown' => 'Ismeretlen MIME tipus', //cpg1.3.0
		'cant_create_write' => 'Nem lehet Ã­rhatÃ³ fÃ¡jlt lÃ©trehozni.', //cpg1.3.0
		'not_writable' => 'Nem lehet Ã­rni az Ã­rhatÃ³ fÃ¡jlba.', //cpg1.3.0
		'cant_read_URI' => 'Nem olvashatÃ³ az URI/URL', //cpg1.3.0
		'cant_open_write_file' => 'Nem nyithatÃ³ meg az URI Ã­rhatÃ³ fÃ¡jl.', //cpg1.3.0
		'cant_write_write_file' => 'Nem lehet Ã­rni az URI Ã­rhatÃ³ fÃ¡jlba.', //cpg1.3.0
		'cant_unzip' => 'Nem lehet kicsomagolni.', //cpg1.3.0
		'unknown' => 'Ismeretlen hiba', //cpg1.3.0
		'succ' => 'Sikeres feltÃ¶ltÃ©sek', //cpg1.3.0
		'success' => '%s feltÃ¶ltÃ©s sikeres volt.', //cpg1.3.0
		'add' => 'Ãœss \'FolytatÃ¡s\'-t a fÃ¡jlok albumhoz tÃ¶rtÃ©nÅ‘ hozzÃ¡adÃ¡sÃ¡hoz.', //cpg1.3.0
		'failure' => 'FeltÃ¶ltÃ©s hiba', //cpg1.3.0
		'f_info' => 'FÃ¡jl informÃ¡ciÃ³', //cpg1.3.0
		'no_place' => 'Az elÅ‘zÅ‘ fÃ¡jlt nem sikerÃ¼lt elhelyezni.', //cpg1.3.0
		'yes_place' => 'Az elÅ‘zÅ‘ fÃ¡jlt sikerÃ¼lt elhelyezni.', //cpg1.3.0
        'max_fsize' => 'Maximum megengedett fÃ¡jlmÃ©ret %s KB',
        'album' => 'Album',
        'picture' => 'FÃ¡jl', //cpg1.3.0
        'pic_title' => 'FÃ¡jl cÃ­me', //cpg1.3.0
        'description' => 'FÃ¡jl leÃ­rÃ¡sa', //cpg1.3.0
        'keywords' => 'Kulcsszavak (szÃ³kÃ¶zÃ¶kkel elvÃ¡lasztva)',
        'err_no_alb_uploadables' => 'Nincs album, ahova engedÃ©lyezett a feltÃ¶ltÃ©s',
		'place_instr_1' => 'Tedd a fÃ¡jlokat az albumba ezÃºttal.  Most megadhatod a relevÃ¡ns informÃ¡ciÃ³kat minden fÃ¡jlhoz.', //cpg1.3.0
		'place_instr_2' => 'TÃ¶bb fÃ¡jlt kell elhelyezni. Nyomj \'FolytatÃ¡s\'-t.', //cpg1.3.0
		'process_complete' => 'Minden fÃ¡jlt sikeresen elhelyeztÃ©l.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
        'title' => 'FelhasznÃ¡lÃ³k menedzselÃ©se',
        'name_a' => 'NÃ©v nÃ¶vekvÅ‘',
        'name_d' => 'NÃ©v csÃ¶kkenÅ‘',
        'group_a' => 'Csoport nÃ¶vekvÅ‘',
        'group_d' => 'Csoport csÃ¶kkenÅ‘',
        'reg_a' => 'Reg. dÃ¡tum nÃ¶vekvÅ‘',
        'reg_d' => 'Reg. dÃ¡tum csÃ¶kkenÅ‘',
        'pic_a' => 'KÃ©pszÃ¡m nÃ¶vekvÅ‘',
        'pic_d' => 'KÃ©pszÃ¡m csÃ¶kkenÅ‘',
        'disku_a' => 'DiszkfelhasznÃ¡lÃ¡s nÃ¶vekvÅ‘',
        'disku_d' => 'DiszkfelhasznÃ¡lÃ¡s csÃ¶kkenÅ‘',
		'lv_a' => 'UtolsÃ³ lÃ¡togatÃ¡s nÃ¶vekvÅ‘', //cpg1.3.0
		'lv_d' => 'UtolsÃ³ lÃ¡togatÃ¡s csÃ¶kkenÅ‘', //cpg1.3.0
        'sort_by' => 'FelhasznÃ¡lÃ³k sorrendezÃ©se',
        'err_no_users' => 'Nincs felhasznÃ¡lÃ³ !',
        'err_edit_self' => 'Nem szerkesztheted a sajÃ¡t profilod, hasznÃ¡ld az \'Profilom\' menÃ¼pontot',
        'edit' => 'SZERKESZT',
        'delete' => 'TÃ–RÃ–L',
        'name' => 'FelhasznÃ¡lÃ³nÃ©v',
        'group' => 'Csoport',
        'inactive' => 'InaktÃ­v',
        'operations' => 'MÅ±veletek',
        'pictures' => 'FÃ¡jlok', //cpg1.3.0
        'disk_space' => 'FelhasznÃ¡lt tÃ¡rhely / kvÃ³ta',
        'registered_on' => 'RegisztrÃ¡lva',
		'last_visit' => 'UtolsÃ³ lÃ¡togatÃ¡s', //cpg1.3.0
        'u_user_on_p_pages' => '%d felhasznÃ¡lÃ³ %d oldalon',
        'confirm_del' => 'BiztÃ¶s tÃ¶rÃ¶lni kÃ­vÃ¡nod a felhasznÃ¡lÃ³t? \\nMinden fÃ¡jlja Ã©s albuma is tÃ¶rlÅ‘dni fog.', //js-alert //cpg1.3.0
        'mail' => 'MAIL',
        'err_unknown_user' => 'A kijelÃ¶lt felhasznÃ¡lÃ³ nem lÃ©tezik !',
        'modify_user' => 'FelhasznÃ¡lÃ³ mÃ³dosÃ­tÃ¡sa',
        'notes' => 'MegjegyzÃ©sek',
        'note_list' => '<li>Ha nem kÃ­vÃ¡nod megvÃ¡ltoztatni az aktuÃ¡lis jelszÃ³t, hagyd Ã¼resen a "jelszÃ³" mezÅ‘t',
        'password' => 'JelszÃ³',
        'user_active' => 'FelhasznÃ¡lÃ³ aktÃ­v',
        'user_group' => 'FelhasznÃ¡lÃ³ csoport',
        'user_email' => 'FelhasznÃ¡lÃ³ email cÃ­me',
        'user_web_site' => 'FelhasznÃ¡lÃ³ honlapja',
        'create_new_user' => 'Ãšj felhasznÃ¡lÃ³ lÃ©trehozÃ¡sa',
        'user_location' => 'FelhasznÃ¡lÃ³ lakhelye',
        'user_interests' => 'FelhasznÃ¡lÃ³ Ã©rdeklÅ‘dÃ©si kÃ¶re',
        'user_occupation' => 'FelhasznÃ¡lÃ³ foglalkozÃ¡sa',
		'latest_upload' => 'Friss feltÃ¶ltÃ©sek', //cpg1.3.0
		'never' => 'soha', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
        'title' => 'FÃ¡jlok Ã¡tmÃ©retezÃ©se', //cpg1.3.0
        'what_it_does' => 'Mi tÃ¶rtÃ©njen',
        'what_update_titles' => 'CÃ­mek aktualizÃ¡lÃ¡sa fÃ¡jlnevekbÅ‘l',
        'what_delete_title' => 'CÃ­mek tÃ¶rlÃ©se',
        'what_rebuild' => 'Ikonok Ã©s Ã¡tmÃ©retezett kÃ©pek ÃºjragenerÃ¡lÃ¡sa',
        'what_delete_originals' => 'Eredeti kÃ©pek felÃ¼lÃ­rÃ¡sa az Ã¡tmÃ©retezettekkel',
        'file' => 'FÃ¡jl',
        'title_set_to' => 'cÃ­m beÃ¡llÃ­tÃ¡sa ..',
        'submit_form' => 'Ã©rvÃ©nyesÃ­tÃ©s',
        'updated_succesfully' => 'sikeres mÃ³dosÃ­tÃ¡s',
        'error_create' => 'HIBA a generÃ¡lÃ¡s sorÃ¡n',
        'continue' => 'TÃ¶bb kÃ©p feldolgozÃ¡sa',
        'main_success' => 'A % fÃ¡jlok felhasznÃ¡lÃ¡sa elsÅ‘dleges fÃ¡jlkÃ©nt sikeres volt', //cpg1.3.0
        'error_rename' => '%s %s -ra Ã¡tnevezÃ©se sorÃ¡n HIBA',
        'error_not_found' => 'A % fÃ¡jlok nem talÃ¡lhatÃ³k',
        'back' => 'vissza a fÅ‘oldalra',
        'thumbs_wait' => 'Ikonok Ã©s/vagy Ã¡tmÃ©retezett kÃ©pek aktualizÃ¡lÃ¡sa, kÃ©rlek vÃ¡rj...',
        'thumbs_continue_wait' => 'Ikonok Ã©s/vagy Ã¡tmÃ©retezett kÃ©pek aktualizÃ¡lÃ¡sÃ¡nak folytatÃ¡sa...',
        'titles_wait' => 'CÃ­mek aktualizÃ¡lÃ¡sa, kÃ©rlek vÃ¡rj...',
        'delete_wait' => 'CÃ­mek tÃ¶rlÃ©se, kÃ©rlek vÃ¡rj...',
        'replace_wait' => 'Eredeti kÃ©pek felÃ¼lÃ­rÃ¡sa az Ã¡tmÃ©retezettekkel, kÃ©rlek vÃ¡rj...',
        'instruction' => 'Gyors Ã¡ttekintÃ©s',
        'instruction_action' => 'MÅ±velet kivÃ¡lasztÃ¡sa',
        'instruction_parameter' => 'ParamÃ©terek beÃ¡llÃ­tÃ¡sa',
        'instruction_album' => 'Album kivÃ¡lasztÃ¡sa',
        'instruction_press' => 'Nyomj &quot;%s&quot;-t',
        'update' => 'Ikonok Ã©s/vagy Ã¡tmÃ©retezett fÃ©nykÃ©pek aktualizÃ¡lÃ¡sa',
        'update_what' => 'Mit kell aktualizÃ¡lni',
        'update_thumb' => 'Csak ikonokat',
        'update_pic' => 'Csak Ã¡tmÃ©retezett kÃ©peket',
        'update_both' => 'Ikonokat Ã©s Ã¡tmÃ©retezett kÃ©peket is',
        'update_number' => 'KlikkelÃ©senkÃ©nt feldolgozandÃ³ kÃ©pek szÃ¡ma',
        'update_option' => '(PrÃ³bÃ¡ld csÃ¶kkenteni ezt az Ã©rtÃ©ket, ha leidÅ‘zÃ­tÃ©si problÃ©mÃ¡t Ã©szlelsz)',
        'filename_title' => 'FÃ¡jlnÃ©v &#8594; FÃ¡jl cÃ­m', //cpg1.3.0
        'filename_how' => 'Hogy legyen mÃ³dosÃ­tva a fÃ¡jlnÃ©v',
        'filename_remove' => 'A jpg vÃ©gzÅ‘dÃ©s tÃ¶rlÃ©se Ã©s _ (alulvonÃ¡s) helyettesÃ­tÃ©se szÃ³kÃ¶zzel',
        'filename_euro' => '2003_11_23_13_20_20.jpg Ã¡tnevezÃ©se 23/11/2003 13:20-ra',
        'filename_us' => '2003_11_23_13_20_20.jpg Ã¡tnevezÃ©se 11/23/2003 13:20-ra',
        'filename_time' => '2003_11_23_13_20_20.jpg Ã¡tnevezÃ©se 13:20ra',
        'delete' => 'KÃ©p cÃ­mek vagy eredeti mÃ©retÅ± kÃ©pek tÃ¶rlÃ©se',
        'delete_title' => 'FÃ¡jl cÃ­mek tÃ¶rlÃ©se', //cpg1.3.0
        'delete_original' => 'Eredeti mÃ©retÅ± fÃ¡jlok tÃ¶rlÃ©se', //cpg1.3.0
        'delete_replace' => 'Eredeti kÃ©pek felÃ¼lÃ­rÃ¡sa Ã¡tmÃ©retezettel',
        'select_album' => 'Album kivÃ¡lasztÃ¡sa',
		'delete_orphans' => 'Ãrva hozzÃ¡szÃ³lÃ¡sok tÃ¶rlÃ©se (minden albumon mÅ±kÃ¶dik)', //cpg1.3.0
		'orphan_comment' => 'Ã¡rva hozzÃ¡szÃ³lÃ¡st talÃ¡ltam', //cpg1.3.0
		'delete' => 'TÃ¶rlÃ©s', //cpg1.3.0
		'delete_all' => 'Mind tÃ¶rlÃ©se', //cpg1.3.0
		'comment' => 'HozzÃ¡szÃ³lÃ¡s: ', //cpg1.3.0
		'nonexist' => 'nem lÃ©tezÅ‘ fÃ¡jlhoz csatolva # ', //cpg1.3.0
		'phpinfo' => 'Phpinfo kijelzÃ©se', //cpg1.3.0
		'update_db' => 'AdatbÃ¡zis aktualizÃ¡lÃ¡sa', //cpg1.3.0
		'update_db_explanation' => 'Ha lecserÃ©ltÃ©l coppermine fÃ¡jlokat, mÃ³dosÃ­tÃ¡sokat vÃ©geztÃ©l, vagy korÃ¡bbi verziÃ³jÃº coppermine-rÃ³l upgrade-eltÃ©l, futtasd le az adatbÃ¡zis update-et. Ez lÃ©trehozza a szÃ¼ksÃ©ges adattÃ¡blÃ¡kat Ã©s / vagy konfigurÃ¡ciÃ³s Ã©rtÃ©keket a coppermine adatbÃ¡zisodban.', //cpg1.3.0
);

?>

