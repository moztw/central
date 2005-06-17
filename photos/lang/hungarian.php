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
// CVS version: $Id: hungarian.php,v 1.7 2004/07/24 15:04:05 gaugau Exp $
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

$lang_charset = 'iso-8859-2';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('byte', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('H', 'K', 'Sze', 'Cs', 'P', 'Szo', 'V');
$lang_month = array('Jan', 'Feb', 'Már', 'Ápr', 'Máj', 'Jún', 'Júl', 'Aug', 'Szept', 'Okt', 'Nov', 'Dec');

// Some common strings
$lang_yes = 'Igen';
$lang_no  = 'Nem';
$lang_back = 'VISSZA';
$lang_continue = 'TOVÁBB';
$lang_info = 'Információ';
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
        'random' => 'Véletlen fájlok', //cpg1.3.0
        'lastup' => 'Friss feltöltések',
        'lastalb'=> 'Utoljára módosított albumok',
        'lastcom' => 'Friss hozzászólások',
        'topn' => 'Top-nézett',
        'toprated' => 'Top-szavazat',
        'lasthits' => 'Utoljára nézett',
        'search' => 'Keresés eredménye',
        'favpics'=> 'Kedvenc Fájlok' //cpg1.3.0
);

$lang_errors = array(
        'access_denied' => 'Nincs jogosultságod ennek az oldalnak a megtekintéséhez.',
        'perm_denied' => 'Nincs jogosultságod ennek a mûveletnek az elvégzéséhez.',
        'param_missing' => 'Szkript hívás a szüksége paraméter(ek) megadása nélkül.',
        'non_exist_ap' => 'A kijelölt album / fájl nem található!', //cpg1.3.0
        'quota_exceeded' => 'Diszk kvóta túllépve<br /><br />A beállított diszkkvóta [quota]K, a képeid által jelenleg elfoglalt tárhely [space]K, ennek a fájlnak a feltöltésével túllépnéd a kvótáját.', //cpg1.3.0
        'gd_file_type_err' => 'GD könyvtár használata esetén csak JPEG és PNG típusok megengedettek.',
        'invalid_image' => 'A feltöltött kép sérült, vagy a GD könyvtár által nem kezelhetõ',
        'resize_failed' => 'Nem sikerült az ikonizált vagy átméretezett képek generálása.',
        'no_img_to_display' => 'Nincs megjeleníthetõ kép',
        'non_exist_cat' => 'A kijelölt kategória nem létezik',
        'orphan_cat' => 'A kategória szülõkategóriája nem létezik, futtasd a kategóriamenedzsert a probléma kiküszöbölésére.',
        'directory_ro' => 'A \'%s\' könyvtár nem írható, a fájlokat nem lehet törölni', //cpg1.3.0
        'non_exist_comment' => 'A kijelölt hozzászólás nem létezik.',
        'pic_in_invalid_album' => 'Fájl nem létezõ albumban (%s)!?', //cpg1.3.0
        'banned' => 'Jelenleg ki vagy tiltva a weblap használatából.',
        'not_with_udb' => 'Ez a funkció le van tiltva a Coppermine-ban, mivel a fórum sw része. A kért funkciót vagy nem támogatja a jelen konfiguráció, vagy a fórum sw kezeli.',
        'offline_title' => 'Offline', //cpg1.3.0
        'offline_text' => 'A galéria jelenleg  offline - látogass vissza késõbb', //cpg1.3.0
        'ecards_empty' => 'Jelenleg nincs megjeleníthetõ e-képeslap. Ellenõrizd, hogy engedélyezted -e az e-lapok naplózását a coppermine konfigurációban!', //cpg1.3.0
        'action_failed' => 'A mûvelet sikertelen.  Coppermine nem tudja feldolgozni a kérést.', //cpg1.3.0
        'no_zip' => 'A ZIP fájlok feldolgozásához szükséges könyvtár nem áll rendelkezésre. Fordulj a Coppermine adminisztrátorhoz.', //cpg1.3.0
        'zip_type' => 'Nincs jogosultságod ZIP fájlok feltöltésére.', //cpg1.3.0
);

$lang_bbcode_help = 'A következõ kódok hasznosak lehetnek: <li>[b]<b>Bold</b>[/b]</li> <li>[i]<i>Italic</i>[/i]</li> <li>[url=http://yoursite.com/]Url Text[/url]</li> <li>[email]user@domain.com[/email]</li>'; //cpg1.3.0

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
        'alb_list_title' => 'Ugrás az albumlistára',
        'alb_list_lnk' => 'Albumlista',
        'my_gal_title' => 'Ugrás a személyes képtárra',
        'my_gal_lnk' => 'Képtáram',
        'my_prof_lnk' => 'Profilom',
        'adm_mode_title' => 'Váltás adminisztrátor módra',
        'adm_mode_lnk' => 'Admin mód',
        'usr_mode_title' => 'Váltás felhasználó módra',
        'usr_mode_lnk' => 'Felhaszn.mód',
        'upload_pic_title' => 'Fájl feltöltés az albumba', //cpg1.3.0
        'upload_pic_lnk' => 'Feltöltés', //cpg1.3.0
        'register_title' => 'Felhasználó hozzáadása',
        'register_lnk' => 'Regisztráció',
        'login_lnk' => 'Bejelentkezés',
        'logout_lnk' => 'Kijelentkezés',
        'lastup_lnk' => 'Friss feltöltések',
        'lastcom_lnk' => 'Friss hozzászólások',
        'topn_lnk' => 'Top-nézett',
        'toprated_lnk' => 'Top-szavazat',
        'search_lnk' => 'Keresés',
        'fav_lnk' => 'Kedvencek',
        'memberlist_title' => 'Taglista megmutatása', //cpg1.3.0
        'memberlist_lnk' => 'Taglista', //cpg1.3.0
        'faq_title' => 'A &quot;Coppermine&quot; galériára vonatkozó Gyakran Ismételt Kérdések', //cpg1.3.0
        'faq_lnk' => 'GYIK', //cpg1.3.0
);


$lang_gallery_admin_menu = array(
        'upl_app_lnk' => 'Feltöltés jóváhagyás',
        'config_lnk' => 'Konfiguráció',
        'albums_lnk' => 'Albumok',
        'categories_lnk' => 'Kategóriák',
        'users_lnk' => 'Felhasználók',
        'groups_lnk' => 'Csoportok',
        'comments_lnk' => 'Hozzászólások szerkesztése', //cpg1.3.0
        'searchnew_lnk' => 'Kötegelt feltöltés',
        'util_lnk' => 'Admin eszközök',
        'ban_lnk' => 'Felhasználók kitiltása',
        'db_ecard_lnk' => 'E-lapok megtekintése', //cpg1.3.0
);

$lang_user_admin_menu = array(
        'albmgr_lnk' => 'Személyes albumok szerkesztése',
        'modifyalb_lnk' => 'Személyes albumok tulajdonságai',
        'my_prof_lnk' => 'Profilom',
);

$lang_cat_list = array(
        'category' => 'Kategória',
        'albums' => 'Albumok',
        'pictures' => 'Fájlok', //cpg1.3.0
);

$lang_album_list = array(
        'album_on_page' => '%d album %d oldalon',
);

$lang_thumb_view = array(
        'date' => 'DÁTUM',
        'name' => 'NÉV',
        'title' => 'Kép cím',
        'sort_da' => 'Dátum szerinti sorrendezés, növekvõ',
        'sort_dd' => 'Dátum szerinti sorrendezés, csökkenõ',
        'sort_na' => 'Név szerinti sorrendezés, növekvõ',
        'sort_nd' => 'Név szerinti sorrendezés, csökkenõ',
        'sort_ta' => 'Sorrendezés cím szerint - növekvõ',
        'sort_td' => 'Sorrendezés cím szerint - csökkenõ',
        'download_zip' => 'Zip fájl letöltése', //cpg1.3.0
        'pic_on_page' => '%d kép %d oldalon',
        'user_on_page' => '%d felhasználó %d oldalon', //cpg1.3.0
);

$lang_img_nav_bar = array(
        'thumb_title' => 'Vissza az ikonos elrendezésre',
        'pic_info_title' => 'Fájl információ megtekintése / elrejtése', //cpg1.3.0
        'slideshow_title' => 'Diavetítés',
        'ecard_title' => 'Fájl elküldése e-képeslapként', //cpg1.3.0
        'ecard_disabled' => 'e-lapok küldése nem engedélyezett',
        'ecard_disabled_msg' => 'Nincs jogosultságod e-képeslap küldésére', //js-alert //cpg1.3.0
        'prev_title' => 'Elõzõ fájl', //cpg1.3.0
        'next_title' => 'Következõ fájl', //cpg1.3.0
        'pic_pos' => 'FÁJL %s/%s', //cpg1.3.0
);

$lang_rate_pic = array(
        'rate_this_pic' => 'Fájl osztályozása ', //cpg1.3.0
        'no_votes' => '(Még nincs osztályozva)',
        'rating' => '(jelenlegi osztályzat: %s, %s szavazattal)',
        'rubbish' => 'Vacak',
        'poor' => 'Gyenge',
        'fair' => 'Megfelelõ',
        'good' => 'Jó',
        'excellent' => 'Kitûnõ',
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
                'title' => 'Tiltott felhasználók',
                'user_name' => 'Felhasználónév',
                'ip_address' => 'IP cím',
                'expiry' => 'Lejárat (állandó esetén üres marad)',
                'edit_ban' => 'Módosítások tárolása',
                'delete_ban' => 'Törlés',
                'add_new' => 'Új tiltás hozzáadása',
                'add_ban' => 'Hozzáadás',
				'error_user' => 'Nem találom a felhasználót', //cpg1.3.0
				'error_specify' => 'Meg kell adnod vagy a felhasználónevet, vagy egy IP címet', //cpg1.3.0
				'error_ban_id' => 'Érvénytelen tiltás ID!', //cpg1.3.0
				'error_admin_ban' => 'Nem zárhatod ki magadat!', //cpg1.3.0
				'error_server_ban' => 'Te ki akartad zárni a saját szervered? Zzzzzz..., ezt nem teheted...', //cpg1.3.0
				'error_ip_forbidden' => 'Nem zárhatod ki ezt az IP-t - ez nem irányítható (non-routable)!', //cpg1.3.0
				'lookup_ip' => 'Keress egy IP címet', //cpg1.3.0
				'submit' => 'mehet!', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

$lang_cpg_die = array(
        INFORMATION => $lang_info,
        ERROR => $lang_error,
        CRITICAL_ERROR => 'Kritikus hiba',
        'file' => 'Fájl: ',
        'line' => 'Sor: ',
);

$lang_display_thumbnails = array(
        'filename' => 'Fájlnév : ',
        'filesize' => 'Fájlméret : ',
        'dimensions' => 'Méretek : ',
        'date_added' => 'Feltöltés dátuma : ', //cpg1.3.0
);

$lang_get_pic_data = array(
        'n_comments' => '%s kommentár',
        'n_views' => '%s megtekintés',
        'n_votes' => '(%s szavazat)',
);
$lang_cpg_debug_output = array(
  'debug_info' => 'Debug infó', //cpg1.3.0
  'select_all' => 'Mind kiválaszt', //cpg1.3.0
  'copy_and_paste_instructions' => 'If you\'re going to request help on the coppermine support board, copy-and-paste this debug output into your posting. Make sure to replace any passwords from the query with *** before posting.', //cpg1.3.0
  'phpinfo' => 'Phpinfo megjelenítése', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => 'Alapértelmezett nyelv', //cpg1.3.0
  'choose_language' => 'Válassz nyelvet', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'Alapértelmezett téma', //cpg1.3.0
  'choose_theme' => 'Válassz témát', //cpg1.3.0
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
        'Exclamation' => 'Felkiáltás',
        'Question' => 'Kérdés',
        'Very Happy' => 'Nagyon boldog',
        'Smile' => 'Mosolyog',
        'Sad' => 'Szomorú',
        'Surprised' => 'Meglepett',
        'Shocked' => 'Sokkolt',
        'Confused' => 'Zavarodott',
        'Cool' => 'Higgadt',
        'Laughing' => 'Nevet',
        'Mad' => 'Õrült',
        'Razz' => 'Gúnyos',
        'Embarassed' => 'Kínos',
        'Crying or Very sad' => 'Sír / nagyon szomorú',
        'Evil or Very Mad' => 'Gonosz vagy õrült',
        'Twisted Evil' => 'Torz gonosz',
        'Rolling Eyes' => 'Guruló szemek',
        'Wink' => 'Kacsint',
        'Idea' => 'Ötlet',
        'Arrow' => 'Nyíl',
        'Neutral' => 'Semleges',
        'Mr. Green' => 'Mr. Zöld',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
        0 => 'Kilépés adminisztrátor módból...',
        1 => 'Váltás adminisztrátor módra...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
        'alb_need_name' => 'Az albumokat el kell nevezni!', //js-alert
        'confirm_modifs' => 'Biztos végre akarod hajtani ezt a módosítást?', //js-alert
        'no_change' => 'Semmit nem változtattál!', //js-alert
        'new_album' => 'Új album',
        'confirm_delete1' => 'Biztos törlöd az albumot?', //js-alert
        'confirm_delete2' => '\nA tartalmazott összes kép és hozzászólás törlõdik!', //js-alert
        'select_first' => 'Elõször válassz albumot', //js-alert
        'alb_mrg' => 'Albummenedzser',
        'my_gallery' => '* Képtáram *',
        'no_category' => '* Nincs kategória *',
        'delete' => 'Törlés',
        'new' => 'Új',
        'apply_modifs' => 'Módosítások végrehajtása',
        'select_category' => 'Válassz kategóriát',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
        'miss_param' => 'A \'%s\' mûvelethez szükséges paraméterek hiányoznak!',
        'unknown_cat' => 'Nincs az adatbázisban a kijelölt kategória ',
        'usergal_cat_ro' => 'A személyes képtárak nem törölhetõk!',
        'manage_cat' => 'Kategóriák menedzselése',
        'confirm_delete' => 'Biztosan törlöd ezt a kategóriát?', //js-alert
        'category' => 'Kategória',
        'operations' => 'Mûveletek',
        'move_into' => 'Mozgatás a következõbe',
        'update_create' => 'Kategória létrehozás / módosítás',
        'parent_cat' => 'Szülõ kategória',
        'cat_title' => 'Kategória megnevezés',
        'cat_thumb' => 'Kategória ikon', //cpg1.3.0
        'cat_desc' => 'Kategória leírása',
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
        'title' => 'Konfiguráció',
        'restore_cfg' => 'Gyári beállítások',
        'save_cfg' => 'Konfiguráció tárolása',
        'notes' => 'Megjegyzések',
        'info' => 'Információ',
        'upd_success' => 'Coppermine konfiguráció frissítve',
        'restore_success' => 'Coppermine gyári beállítás visszaállítva',
        'name_a' => 'Név - növekvõ',
        'name_d' => 'Név - csökkenõ',
        'title_a' => 'Cím szerint - növekvõ',
        'title_d' => 'Cím szerint - csökkenõ',
        'date_a' => 'Dátum növekvõ',
        'date_d' => 'Dátum csökkenõ',
        'th_any' => 'Max Aspect',
        'th_ht' => 'Magasság',
        'th_wd' => 'Szélesség',
        'label' => 'címke', //cpg1.3.0
        'item' => 'tétel', //cpg1.3.0
        'debug_everyone' => 'Mindenki', //cpg1.3.0
        'debug_admin' => 'Csak Admin', //cpg1.3.0
);

if (defined('CONFIG_PHP')) $lang_config_data = array(
        'Általános beállítások',
        array('Képtár neve', 'gallery_name', 0),
        array('Képtár leírása', 'gallery_description', 0),
        array('Képtár adminisztrátor email címe', 'gallery_admin_email', 0),
        array('Az e-lapok  \'További képek\' linkjéhez tartozó webcím', 'ecards_more_pic_target', 0),
        array('Galéria offline', 'offline', 1), //cpg1.3.0
        array('E-lapok naplózása', 'log_ecards', 1), //cpg1.3.0
        array('Kedvencek ZIP-letöltésének engedélyezése', 'enable_zipdownload', 1), //cpg1.3.0

        'Nyelv, téma és karakterkészlet beállítások',
        array('Nyelv', 'lang', 5),
        array('Téma', 'theme', 6),
        array('Legördülõ nyelv-menü megjelenítése', 'language_list', 1), //cpg1.3.0
        array('Ország zászlók megjelenítése', 'language_flags', 8), //cpg1.3.0
        array('&quot;Reset&quot; megjelenítése a nyelv-menüben', 'language_reset', 1), //cpg1.3.0
        array('Legördülõ téma-menü megjelenítése', 'theme_list', 1), //cpg1.3.0
        array('&quot;Reset&quot; megjelenítése a téma-menüben', 'theme_reset', 1), //cpg1.3.0
        array('GYIK megjelenítése', 'display_faq', 1), //cpg1.3.0
        array('Bbcode help megjelenítése', 'show_bbcode_help', 1), //cpg1.3.0
        array('Karakterkészlet', 'charset', 4), //cpg1.3.0


        'Albumlista nézet',
        array('Fõtáblázat szélessége (pixel vagy %)', 'main_table_width', 0),
        array('Kategóriák megjelenítendõ száma', 'subcat_level', 0),
        array('Oldalanként megjelenítendõ albumok száma', 'albums_per_page', 0),
        array('Albumlista oszlopainak száma', 'album_list_cols', 0),
        array('Ikonok mérete pixelben', 'alb_list_thumb_size', 0),
        array('A fõoldal tartalma', 'main_page_layout', 0),
        array('Elsõ szintû albumok ikonok megjelenítése a kategóriákban','first_level',1),

        'Ikonlista nézet',
        array('Oszlopok száma az ikonlistában', 'thumbcols', 0),
        array('Sorok száma az ikonlistában', 'thumbrows', 0),
        array('Megjelenítendõ tab- fülek maximális száma', 'max_tabs', 10), //cpg1.3.0
        array('Fájl leírás megjelenítés (a kép címén felül) az ikonok alatt', 'caption_in_thumbview', 1), //cpg1.3.0
        array('Megtekintések számának megjelenítése az ikonok alatt', 'views_in_thumbview', 1), //cpg1.3.0
        array('Az ikon alatt megjelenjen -e a hozzászólások száma', 'display_comment_count', 1),
        array('Feltöltõ nevének kijelzése az ikon alatt', 'display_uploader', 1), //cpg1.3.0
        array('Fájlok alapértelmezett sorrendje', 'default_sort_order', 3), //cpg1.3.0
        array('Szavazatok minimuma a \'top-szavazat\' listára való felkerüléshez', 'min_votes_for_rating', 0),

        'Kép-nézet és hozzászólás beállítások',
        array('A fájl-nézethez tartozó táblázat szélessége (pixel vagy %)', 'picture_table_width', 0), //cpg1.3.0
        array('Fájl információk láthatók alapértelmezésben', 'display_pic_info', 1), //cpg1.3.0
        array('Trágár szavak kiszûrése a hozzászólásokból', 'filter_bad_words', 1),
        array('Hangulatkarakterek engedélyezése a hozzászólásokban', 'enable_smilies', 1),
        array('Több egymást követõ hozzászólás engedélyezése egy képhez ugyanazon felhasználónak (visszaélés védelem tiltása)', 'disable_comment_flood_protect', 1), //cpg1.3.0
        array('A képleírás maximális hossza', 'max_img_desc_length', 0),
        array('Maximális karakterszám szavanként', 'max_com_wlength', 0),
        array('Sorok maximális száma hozzászólásonként', 'max_com_lines', 0),
        array('Hozzászólások maximális hossza', 'max_com_size', 0),
        array('Filmcsík megjelenítése', 'display_film_strip', 1),
        array('Képkockák száma a filmcsíkban', 'max_film_strip_items', 0),
        array('Adminisztrátor értesítése a hozzászólásokról e-mailben', 'email_comment_notification', 1), //cpg1.3.0
        array('Diavetítés idõ intervalluma milliszekundumban (1 second = 1000 milliseconds)', 'slideshow_interval', 0), //cpg1.3.0

        'Fájl- és ikonbeállítások', //cpg1.3.0
        array('JPEG fájlok minõsége', 'jpeg_qual', 0),
        array('Ikonok maximális mérete  <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0), //cpg1.3.0
        array('Méretek használata (ikonok szélessége, magassága, vagy maximális mérete)<a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7),
        array('Közbensõ méretû kép generálása','make_intermediate',1),
        array('Közbensõ méretû kép / videó maximális szélessége és magassága <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0), //cpg1.3.0
        array('Feltöltött fájlok maximális mérete (KB)', 'max_upl_size', 0), //cpg1.3.0
        array('Feltöltött képek / videók maximális szélessége és magassága (pixel)', 'max_upl_width_height', 0), //cpg1.3.0

  	'Fájlok és ikonok extra beállításai', //cpg1.3.0
  	array('Privát album ikon megjelenítése be nem jelentkezett felhasználó esetén','show_private',1), //cpg1.3.0
  	array('Fájlnevekben nem engedélyezett karakterek', 'forbiden_fname_char',0), //cpg1.3.0
  	//array('Feltöltött képek megengedett fájlkiterjesztései', 'allowed_file_extensions',0), //cpg1.3.0
  	array('Megengedett képtípusok', 'allowed_img_types',0), //cpg1.3.0
  	array('Megengedett videó típusok', 'allowed_mov_types',0), //cpg1.3.0
  	array('Megengedett audió típusok', 'allowed_snd_types',0), //cpg1.3.0
  	array('Megengedett dokumentum típusok', 'allowed_doc_types',0), //cpg1.3.0
  	array('Képek átméretezésének módszere','thumb_method',2), //cpg1.3.0
  	array('Fájlelérési útvonal az ImageMagick \'convert\' programhoz (például /usr/bin/X11/)', 'impath', 0), //cpg1.3.0
  	//array('Megengedett képtípusok (csak ImageMagick esetén)', 'allowed_img_types',0), //cpg1.3.0
  	array('ImageMagick parancssor opciók', 'im_options', 0), //cpg1.3.0
  	array('EXIF adatok értelmezése a JPEG fájlokban', 'read_exif_data', 1), //cpg1.3.0
  	array('IPTC adatok értelmezése a JPEG fájlokban', 'read_iptc_data', 1), //cpg1.3.0
  	array('Album elérési útvonal <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0), //cpg1.3.0
  	array('Felhasználói fájlok elérési útvonala <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0), //cpg1.3.0
  	array('Közbensõ méretezésû képek prefixe <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0), //cpg1.3.0
  	array('Ikonfájlok prefixe <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0), //cpg1.3.0
  	array('Könyvtárak alapértelmezett módja', 'default_dir_mode', 0), //cpg1.3.0
  	array('Fájlok alapértelmezett módja', 'default_file_mode', 0), //cpg1.3.0

         'Felhasználó beállítások',
        array('Új felhasználók regisztrálhatnak', 'allow_user_registration', 1),
        array('Regisztráció email megerõsítéshez kötött', 'reg_requires_valid_email', 1),
		array('Admin értesítése felhasználó regisztrációról e-mailben', 'reg_notify_admin_email', 1), //cpg1.3.0
        array('Két felhasználónak lehet azonos email címe', 'allow_duplicate_emails_addr', 1),
        array('Felhasználóknak lehetnek privát albumai (Megjegyzés: ha \'igen\' -rõl \'nem\' -re váltasz, minden jelenlegi privát album publikussá válik)', 'allow_private_albums', 1), //cpg1.3.0
  		array('Admin értesítése jóváhagyásra váró feltöltésrõl', 'upl_notify_admin_email', 1), //cpg1.3.0
  		array('Bejelentkezett felhasználók megtekinthetik a taglistát', 'allow_memberlist', 1), //cpg1.3.0

        'Saját mezõk a képek leírásához (hagyd üresen, ha nem használod)',
        array('1. mezõnév', 'user_field1_name', 0),
        array('2. mezõnév', 'user_field2_name', 0),
        array('3. mezõnév', 'user_field3_name', 0),
        array('4. mezõnév', 'user_field4_name', 0),


        'Cooky beállítások',
        array('A szkript által használt cooky név (bbs integráció esetén gyõzõdj meg róla, hogy eltér a bbs cooky névtõl)', 'cookie_name', 0),
        array('A szkript által használt cooky útvonala', 'cookie_path', 0),

        'Egyéb beállítások',
        array('Debug mód engedélyezése', 'debug_mode', 9), //cpg1.3.0
		array('Megjegyzések kijelzése debug módban', 'debug_notice', 1), //cpg1.3.0

        '<br /><div align="left"><a name="notice1"></a>(*) * -gal jelölt mezõket nem szabad megváltoztatni, ha már nem üres a képtár.<br />
		<a name="notice2"></a>(**) Ha ezt a beállítást megváltoztatod, csak azok a fájlok lesznek érintve, melyeket ettõl kezdve adsz hozzá, ezért ajánlatos ezt a beállítást nem megváltoztatni, ha már van fájl a képtárban. Azonban tetszõleges albumra érvényesíteni tudod a kívánt változtatásokat az adminisztrátori menü &quot;<a href="util.php">Admin eszközök</a>&quot; menüpontjában.</div><br />', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'E-lapok küldése', //cpg1.3.0
  'ecard_sender' => 'Feladó', //cpg1.3.0
  'ecard_recipient' => 'Címzett', //cpg1.3.0
  'ecard_date' => 'Dátum', //cpg1.3.0
  'ecard_display' => 'E-képeslap megjelenítése', //cpg1.3.0
  'ecard_name' => 'Név', //cpg1.3.0
  'ecard_email' => 'Email', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'növekvõ', //cpg1.3.0
  'ecard_descending' => 'csökkenõ', //cpg1.3.0
  'ecard_sorted' => 'Sorrendezett', //cpg1.3.0
  'ecard_by_date' => 'dátum szerint', //cpg1.3.0
  'ecard_by_sender_name' => 'feladó neve szerint', //cpg1.3.0
  'ecard_by_sender_email' => 'feladó e-mail címe szerint', //cpg1.3.0
  'ecard_by_sender_ip' => 'feladó IP címe szerint', //cpg1.3.0
  'ecard_by_recipient_name' => 'címzett neve szerint', //cpg1.3.0
  'ecard_by_recipient_email' => 'címzett e-mail címe szerint', //cpg1.3.0
  'ecard_number' => 'Rekordok kijelzése: %s tõl %s összesen %s', //cpg1.3.0
  'ecard_goto_page' => 'ugrás oldalra', //cpg1.3.0
  'ecard_records_per_page' => 'Rekord per lap', //cpg1.3.0
  'check_all' => 'Mind kiválasztása', //cpg1.3.0
  'uncheck_all' => 'Mind NEM kiválasztása', //cpg1.3.0
  'ecards_delete_selected' => 'Kiválasztott e-lapok törlése', //cpg1.3.0
  'ecards_delete_confirm' => 'Biztosan törölni akarod a rekordokat? Pipáld ki a négyzetet!', //cpg1.3.0
  'ecards_delete_sure' => 'Biztos vagyok benne', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
        'empty_name_or_com' => 'Meg kell adnod a neved és egy hozzászólást',
        'com_added' => 'Hozzászólásod rögzítettük',
        'alb_need_title' => 'Adj nevet az albumnak!',
        'no_udp_needed' => 'Nincs mit módosítani.',
        'alb_updated' => 'Az album módosítása megtörtént',
        'unknown_album' => 'A kiválasztott album nem létezik, vagy nincs feltöltési jogosultságod az albumhoz',
        'no_pic_uploaded' => 'Nem történt feltöltés!<br /><br />Ha tényleg kijelöltél feltöltésre fájlt, ellenõrizd, hogy a szerveren megengedett-e a feltöltés...', //cpg1.3.0
        'err_mkdir' => 'Nem sikerült a %s könyvtár létrehozása !',
        'dest_dir_ro' => 'A szkript nem írhat a %s célkönyvtárba!',
        'err_move' => 'Nem mozgatható %s %s -be!',
        'err_fsize_too_large' => 'A feltöltött fájl mérete túl nagy (maximum megengedett: %s x %s)!', //cpg1.3.0
        'err_imgsize_too_large' => 'A feltöltött fájl mérete túl nagy (maximum megengedett: %s KB) !',
        'err_invalid_img' => 'A feltöltött fájl nem egy érvényes képformátum !',
        'allowed_img_types' => 'Csak %s kép feltöltése megengedett.',
        'err_insert_pic' => 'A \'%s\' fájl nem adható hozzá az albumhoz ', //cpg1.3.0
        'upload_success' => 'A fájl feltöltése sikeres volt<br /><br />Jóváhagyás után látható lesz.', //cpg1.3.0
		'notify_admin_email_subject' => '%s - Értesítés feltöltésrõl', //cpg1.3.0
		'notify_admin_email_body' => 'Egy fájlt feltöltött %s, jóváhagyásodra vár. Látogasd meg %s-t', //cpg1.3.0
        'info' => 'Információ',
        'com_added' => 'Kommentár hozzáadása megtörtént',
        'alb_updated' => 'Album módosítva',
        'err_comment_empty' => 'Nem adott meg kommentárt !',
        'err_invalid_fext' => 'Csak a következõ kiterjesztésû fájlok megengedettek: <br /><br />%s.',
        'no_flood' => 'Már hozzászóltál a fájlhoz.<br /><br />Szerkeszd az elõzõ hozzászólásod, ha szükséges', //cpg1.3.0
        'redirect_msg' => 'Átirányítás folyamatban.<br /><br /><br />Nyomd meg a \'CONTINUE\'-t, ha a kép nem frissül automatikusan',
        'upl_success' => 'A fájl sikeresen hozzáadásra került', //cpg1.3.0
		'email_comment_subject' => 'Hozzászólás postázva lett Coppermine Fotógalérián-n', //cpg1.3.0
		'email_comment_body' => 'Valaki hozzászólást postázott a galériádhoz. Látogasd meg', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
        'caption' => 'Képaláírás',
        'fs_pic' => 'teljes méretû kép',
        'del_success' => 'törlés sikeres',
        'ns_pic' => 'normál méretû kép',
        'err_del' => 'nem lehet törölni',
        'thumb_pic' => 'ikon',
        'comment' => 'megjegyzés',
        'im_in_alb' => 'kép az albumban',
        'alb_del_success' => ' \'%s\' album törölve',
        'alb_mgr' => 'Albummenedzser',
        'err_invalid_data' => 'Érvénytelen adat a következõben \'%s\'',
        'create_alb' => 'Album generálása \'%s\'',
        'update_alb' => 'Album módosítás \'%s\' név: \'%s\' index: \'%s\'',
        'del_pic' => 'Fájl törlése', //cpg1.3.0
        'del_alb' => 'Album törlése',
        'del_user' => 'Felhasználó törlése',
        'err_unknown_user' => 'A kijelölt felhasználó nem létezik !',
        'comment_deleted' => 'A megjegyzést sikeresen töröltük',
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
        'confirm_del' => 'Biztosan törölni akarod ezt a fájlt? \\nA hozzászólások is törlõdnek.', //js-alert //cpg1.3.0
        'del_pic' => 'A FÁJL TÖRLÉSE', //cpg1.3.0
        'size' => '%s x %s pixel',
        'views' => '%s',
        'slideshow' => 'Diavetítés',
        'stop_slideshow' => 'DIAVETÍTÉS VÉGE',
        'view_fs' => 'Teljes méretû kép megtekintése',
		'edit_pic' => 'Leírás szerkesztése', //cpg1.3.0
		'crop_pic' => 'Kivágás és forgatás', //cpg1.3.0
);

$lang_picinfo = array(
        'title' =>'Fájl információ', //cpg1.3.0
        'Filename' => 'Fájlnév',
        'Album name' => 'Album név',
        'Rating' => 'Osztályozás (%s szavazat)',
        'Keywords' => 'Kulcsszavak',
        'File Size' => 'Fájlméret',
        'Dimensions' => 'Méretek',
        'Displayed' => 'Megtekintések száma',
        'Camera' => 'Kamera',
        'Date taken' => 'Felvétel dátuma',
        'Aperture' => 'Apertúra',
        'Exposure time' => 'Expozíció idõpontja',
        'Focal length' => 'Fókusztávolság',
        'Comment' => 'Megjegyzés',
        'addFav'=>'Hozzáadás a kedvencekhez',
        'addFavPhrase'=>'Kedvencek',
        'remFav'=>'Kivétel kedvencekbõl',
		'iptcTitle'=>'IPTC Cím', //cpg1.3.0
		'iptcCopyright'=>'IPTC Copyright', //cpg1.3.0
		'iptcKeywords'=>'IPTC kulcsszavak', //cpg1.3.0
		'iptcCategory'=>'IPTC kategóriák', //cpg1.3.0
		'iptcSubCategories'=>'IPTC alkategóriák', //cpg1.3.0
);

$lang_display_comments = array(
        'OK' => 'OK',
        'edit_title' => 'Hozzászólás szerkesztése',
        'confirm_delete' => 'Biztos törölni kívánod a hozzászólást?', //js-alert
        'add_your_comment' => 'Hozzászólás hozzáfûzése',
        'name'=>'Név',
        'comment'=>'Megjegyzés',
        'your_name' => 'Anon',
);

$lang_fullsize_popup = array(
        'click_to_close' => 'Klikkelj a képre az ablak bezárásához',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
        'title' => 'E-képeslap küldése',
        'invalid_email' => '<b>Figyelmeztetés</b> : érvénytelen e-mail cím!',
        'ecard_title' => 'Egy e-képeslap %s -tól neked',
		'error_not_image' => 'Csak képeket lehet e-képeslapként küldeni.', //cpg1.3.0
        'view_ecard' => 'Ha az e-képeslap nem jelenik meg helyesen, klikkelj a következõ linkre',
        'view_more_pics' => 'Klikkelj erre a linkre további képek megtekintéséhez!',
        'send_success' => 'E-képeslapod továbbítottuk',
        'send_failed' => 'Sajnálom, de a szerver nem tud e-képeslapot küldeni...',
        'from' => 'Feladó',
        'your_name' => 'Neved',
        'your_email' => 'E-mail címed',
        'to' => 'Címzett',
        'rcpt_name' => 'Címzett neve',
        'rcpt_email' => 'Címzett e-mail címe',
        'greetings' => 'Üdvözlet',
        'message' => 'Üzenet',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
        'pic_info' => 'Fájl információ', //cpg1.3.0
        'album' => 'Album',
        'title' => 'Cím',
        'desc' => 'Leírás',
        'keywords' => 'Kulcsszavak',
        'pic_info_str' => '%sx%s - %sKB - %s megtekintés - %s szavazat',
        'approve' => 'Fájl jóváhagyása', //cpg1.3.0
        'postpone_app' => 'Jóváhagyás késõbb',
        'del_pic' => 'Fájl törlés', //cpg1.3.0
		'read_exif' => 'EXIF információ újraolvasása', //cpg1.3.0
        'reset_view_count' => 'Nézettségszámláló nullázása',
        'reset_votes' => 'Szavazatszámláló alaphelyzetbe',
        'del_comm' => 'Hozzászólások törlése',
        'upl_approval' => 'Feltöltés jóváhagyás',
        'edit_pics' => 'Fájlok rendezése', //cpg1.3.0
        'see_next' => 'Következõ fájl', //cpg1.3.0
        'see_prev' => 'Elõzõ fájl', //cpg1.3.0
        'n_pic' => '%s db fájl', //cpg1.3.0
        'n_of_pic_to_disp' => 'Fájl / oldal', //cpg1.3.0
        'apply' => 'Módosítások végrehajtása', //cpg1.3.0
		'crop_title' => 'Coppermine képszerkesztõ', //cpg1.3.0
		'preview' => 'Elõnézet', //cpg1.3.0
		'save' => 'Kép mentése', //cpg1.3.0
		'save_thumb' =>'Mentés ikonként', //cpg1.3.0
		'sel_on_img' =>'A kiválasztott résznek a képen belül kell lennie!', //js-alert //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Gyakran Ismételt kérdések', //cpg1.3.0
  'toc' => 'Tartalomjegyzék', //cpg1.3.0
  'question' => 'Kérdések: ', //cpg1.3.0
  'answer' => 'Válaszok: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'Általános GYIK', //cpg1.3.0
  array('Miért kell regisztrálnom?', 'A regisztrálást kérheti az adminisztrátor. A regisztráció a tagnak plusz szolgáltatásokat biztosíthat, mint képek feltöltését, kedvencek lista vezetését, képek osztályozását és hozzászólások postázását stb.', 'allow_user_registration', '0'), //cpg1.3.0
  array('Hogyan regisztráljak?', 'Menj a &quot;Regisztráció&quot; menübe és töltsd ki a kívánt mezõket (és az opcionálisakat ha akarod).<br />Ha az adminisztrátor engedélyezte az e-mail aktiválást, akkor az információk megadása után egy e-mailben kapsz értesítést a regisztrációról, valamint arról, hogy hogyan aktiválhatod a hozzáférésedet, ami a bejelentkezéshez szükséges.', 'allow_user_registration', '1'), //cpg1.3.0
  array('Hogyan jelentkezhetek be?', 'Menj a &quot;Bejelentkezés&quot; menübe, add meg a felhasználóneved és jelszavadat. Ha azt akarod, hogy a legközelebbi látogatásod alkalmával automatikusan be legyél jelentkezve, x-eld ki a &quot;Emlékezz rám&quot; négyzetet.<br /><b>FONTOS: &quot;Az Emlékezz rám&quot; csak akkor mûködik, ha a Cooky-kat engedélyezted és nem törölted a webhelyeden!</b>', 'offline', 0), //cpg1.3.0
  array('Miért nem tudok bejelentkezni?', 'Regisztráltál, és válaszoltál az e-mailben kapott linkre? Ez aktiválja a hozzáférésed. Egyéb bejelentkezési probléma esetén fordulj a webhely adminisztrátorához!', 'offline', 0), //cpg1.3.0
  array('Mi történik, ha elfelejtettem a jelszavam?', 'Ha látsz a webhelyen &quot;Elfelejtettem a jelszavam&quot; linket, használd! Egyébként kérj a webhely adminisztrátorától új jelszót!', 'offline', 0), //cpg1.3.0
  //array('Mi történik, ha megváltozott az e-mail címem?', 'Egyszerûen lépj be és a &quot;Profilom&quot; menüben változtasd meg az e-mail címedet!', 'offline', 0), //cpg1.3.0
  array('Hogyan tárolhatok egy fájlt a &quot;Kedvencek&quot; között?', 'Klikkelj a képre, ha a kép alatt nem látható a &quot;Fájl információ&quot;, akkor klikkelj a fájlinformáció ikonra (<img src="images/info.gif" width="16" height="16" border="0" alt="Fájl információ" />), görgess le a &quot;Fájl információ&quot;-hoz, majd klikkelj a &quot;Hozzáadás a kedvencekhez&quot; likre!<br /><br />FONTOS: A cooky-kat engedélyezned kell és nem törölheted a webhelyeden!', 'offline', 0), //cpg1.3.0
  array('Hogyan osztályozhatom a fájlokat?', 'Klikkelj az ikonizált képre, görgess az aljára, és válaszd a &quot;Fájl osztályozása&quot; részben klikkelj a megfelelõ osztályzatra!', 'offline', 0), //cpg1.3.0
  array('Hogyan postázhatok hozzászólást egy fájlhoz?', 'Klikkelj az ikonizált képre, mej az aljára, és postázz hozzászólást!', 'offline', 0), //cpg1.3.0
  array('Hogyan tölthetek fel fájlokat?', 'Menj a &quot;Feltöltés&quot; menübe és válaszd ki az albumot, amelyikbe fájlt akarsz feltölteni! Klikkelj a &quot;Browse...&quot; gombra és válaszd ki a feltöltendõ fájlt! Megadhatsz címet és képaláírást is igény szerint. Végül klikkelj a &quot;TOVÁBB&quot; gombra.', 'allow_private_albums', 0), //cpg1.3.0
  array('Hova tölthetek fel fájlokat?', 'Az &quot;Képtáram&quot; valamelyik albumába tölthetsz fel fájlokat. Az adminisztrátor engedélyezheti, hogy feltölthess fájlokat a fõképtár egy vagy több albumába is.', 'allow_private_albums', 0), //cpg1.3.0
  array('Milyen típusú és méretû fájlt tölthetek fel?', 'A méretet és típust (jpg,gif,..etc.) az adminisztrátor döntheti el.', 'offline', 0), //cpg1.3.0
  array('Mi az &quot;Képtáram&quot;?', 'Az &quot;Képtáram&quot; egy személyes képtár, ahova a felhasználó feltölthet fájlt, és menedzselheti.', 'allow_private_albums', 0), //cpg1.3.0
  array('Hogyan hozhatok létre, nevezhetek át, vagy törölhetek albumot az &quot;Képtáram&quot;-ban?', '&quot;Admin mód&quot;-ban kell, hogy legyél.<br />Menj a &quot;Személyes albumok szerkesztése 
 
&quot; menübe és klikkelj a &quot;Új&quot; gombra. Írd át az &quot;Új album&quot;-ot a kívánt névre.<br />A képtárad bármelyik meglévõ albumát is átnevezheted.<br />Klikkelj a &quot;Módosítások végrehajtása&quot;-ra.', 'allow_private_albums', 0), //cpg1.3.0
  array('Hogyan szabályozhatom, hogy a felhasználók láthassák-e az albumomat?','&quot;Admin mód&quot;-ban kell, hogy legyél.<br />Menj a &quot;Személyes albumom tulajdonságai&quot;-ba. Az &quot;Album módosítása&quot; legördülõ menübõl válaszd ki a kívánt albumot.<br />Itt megváltoztathatod az album nevét, leírását, ikonizált képét, és korlátozhatod az albumban lévõ fájlok megtekintését, osztályozását, és hozzászólások postázását.<br />Klikkelj ezután az &quot;Album módosítása&quot; gombra!.', 'allow_private_albums', 0), //cpg1.3.0
  array('Hogyan láthatom más felhasználó képtárát?', 'Menj az &quot;Albumlistára&quot; és válaszd ki a &quot;Felhasználói képtárak&quot; linket.', 'allow_private_albums', 0), //cpg1.3.0
  array('Mik a Cooky-k?', 'A cooky-k szöveges adatállományok, melyeket a webhely küld a számítógépedre.<br />A cooky-k általában azt teszik lehetõvé, hogy a felhasználó ismételt bejelentkezés nélkül is visszataláljon a webhelyre, és egyéb hasonló kényelmi lehetõségeket biztosít.', 'offline', 0), //cpg1.3.0
  array('Hol kaphatom meg ezt a programot a webhelyemre?', 'Coppermine egy ingyenes multimédiás képtár, GNU GPL licensszel. Tele van szolgáltatásokkal és különbözõ platformokon mûködik. Látogass el a <a href="http://coppermine.sf.net/">Coppermine honlap</a>-ra további információért és a program letöltéséért.', 'offline', 0), //cpg1.3.0

  'Navigálás a webhelyen', //cpg1.3.0
  array('Mi az &quot;Albumlista&quot;?', 'Ez megmutatja a teljes képtárat a kategóriákra mutató linkeken keresztül. A kategória linkje ikonizált kép is lehet.', 'offline', 0), //cpg1.3.0
  array('Mi az &quot;Képtáram&quot;?', 'Ennek a szolgáltatásnak a segítségével a felhasználók saját képtárt hozhatnak létre, ebben létrehozhatnak, módosíthatnak és törölhetnek albumokat, valamint képeket tölthetnek fel ide.', 'allow_private_albums', 0), //cpg1.3.0
  array('Mi a különbség az &quot;Admin mód&quot; és a &quot;Felhaszn.mód&quot; között?', 'Adminisztrátor módban a felhasználó módosíthatja a képtárát (és másét, ha az adminisztrátor ezt engedélyezte).', 'allow_private_albums', 0), //cpg1.3.0
  array('Mi a &quot;Feltöltése&quot;?', 'Ez a szolgáltatás lehetõvé teszi a felhasználóknak fájlok feltöltését egy az általad vagy az adminisztrátor által megadott képtárba (méretet és típust az adminisztrátor engedélyez).', 'allow_private_albums', 0), //cpg1.3.0
  array('Mi a &quot;Friss feltöltések&quot;?', 'Ez a szolgáltatás mutatja az utoljára feltöltött fájlokat.', 'offline', 0), //cpg1.3.0
  array('Mi a &quot;Friss hozzászólások&quot;?', 'Ez a szolgáltatás mutatja az utoljára postázott hozzászólásokat a fájlokhoz.', 'offline', 0), //cpg1.3.0
  array('Mi a &quot;Legtöbbször nézett&quot;?', 'Ez a szolgáltatás mutatja az összes felhasználó által legtöbbször nézett fájlokat, függetlenül attól, hogy bejelentkeztek-e, vagy nem.', 'offline', 0), //cpg1.3.0
  array('Mi a &quot;Legtöbb szavazat&quot;?', 'Ez a szolgáltatás mutatja legtöbb szavazatot kapott fájlokat, az átlagosztályzattal (például ha 5 felhasználó mindegyike <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />-t adott, akkor a kép átlagosztályzata <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />. Ha ö felhasználó 1-tõl 5-ig osztályozott (1,2,3,4,5), akkor az átlagosztályzat <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> lesz.)<br />Az osztályzat <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" />-tõ (legjobb) megy <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" />-ig (legrosszabb).', 'offline', 0), //cpg1.3.0
  array('Mi a &quot;Kedvencek&quot;?', 'Ez a szolgáltatás a felhasználó számára lehetõvé teszi, hogy kedvenc képeire cooky segítségével emlékezzen a számítógép.', 'offline', 0), //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Jelszó emlékeztetõ', //cpg1.3.0
  'err_already_logged_in' => 'Már bejelentkeztél!', //cpg1.3.0
  'enter_username_email' => 'Add meg a felhasználóneved és e-mail címedet!', //cpg1.3.0
  'submit' => 'mehet', //cpg1.3.0
  'failed_sending_email' => 'A jelszó-emlékeztetõ e-mail kiküldése nem sikerült!', //cpg1.3.0
  'email_sent' => 'Egy e-mailt küldtünk felhasználónévvel és jelszóval %s-nek', //cpg1.3.0
  'err_unk_user' => 'A kiválasztott felhasználó nem létezik!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - Jelszó-emlékeztetõ', //cpg1.3.0
  'passwd_reminder_body' => 'Kérted, hogy emlékeztessünk a bejelentkezési adataidra:
Felhasználónév: %s
Jelszó: %s
Klikkelj %s -ra a bejelentkezéshez.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
        'group_name' => 'Csoport megnevezése',
        'disk_quota' => 'Diszk kvóta',
        'can_rate' => 'Osztályozhat fájlokat', //cpg1.3.0
        'can_send_ecards' => 'Küldhet e-képeslapot',
        'can_post_com' => 'Hozzászólást küldhet',
        'can_upload' => 'Feltölthet fájlokat', //cpg1.3.0
        'can_have_gallery' => 'Lehet személyes képtára',
        'apply' => 'Módosítások végrehajtása',
        'create_new_group' => 'Új csoport létrehozása',
        'del_groups' => 'Kijelölt csoport(ok) törlése ',
        'confirm_del' => 'Figyelmeztetés: ha törölsz egy csoportot, a hozzá tartozó felhasználók áthelyezõdnek a \'Regisztráltak\' csoportba !\n\nFolytatod ?', //js-alert //cpg1.3.0
        'title' => 'Felhasználócsoportok menedzselése',
        'approval_1' => 'Nyilvános feltöltés jóváhagyás (1)',
        'approval_2' => 'Privát feltöltés jóváhagyás (2)',
		'upload_form_config' => 'Feltöltés a konfigurációból', //cpg1.3.0
		'upload_form_config_values' => array( 'Csak egyenkénti feltöltés', 'Csak csoportos feltöltés', 'Csak URI feltöltés', 'Csak ZIP feltöltés', 'Fájl-URI', 'Fájl-ZIP', 'URI-ZIP', 'Fájl-URI-ZIP'), //cpg1.3.0
		'custom_user_upload'=>'A felhasználók beállíthatják a feltöltés sorok számát?', //cpg1.3.0
		'num_file_upload'=>'Fájl feltöltés sorok maximum/pontos száma', //cpg1.3.0
		'num_URI_upload'=>'URI feltöltés sorok maximum/pontos száma', //cpg1.3.0
        'note1' => '<b>(1)</b> A nyilvános albumba történõ feltöltés adminisztrátori jóváhagyást igényel',
        'note2' => '<b>(2)</b> A felhasználó albumába történõ feltöltés adminisztrátori jóváhagyást igényel',
        'notes' => 'Megjegyzések',
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
        'welcome' => 'Üdvözöllek!',
);

$lang_album_admin_menu = array(
        'confirm_delete' => 'Biztos törölni akarod az albumot? \\nMinden fájl és hozzászólás is törlõdik!', //js-alert //cpg1.3.0
        'delete' => 'TÖRLÉS',
        'modify' => 'TULAJDONSÁGOK',
        'edit_pics' => 'SZERKESZTÉS',
);

$lang_list_categories = array(
        'home' => 'Home',
        'stat1' => '<b>[pictures]</b> fájl <b>[albums]</b> albumban és <b>[cat]</b> kategóriában <b>[comments]</b> hozzászólással, megtekintések száma: <b>[views]</b>', //cpg1.3.0
        'stat2' => '<b>[pictures]</b> fájl <b>[albums]</b> albumban, megtekintések száma: <b>[views]</b>', //cpg1.3.0
        'xx_s_gallery' => '%s képtára',
        'stat3' => '<b>[pictures]</b> fájl <b>[albums]</b> albumban <b>[comments]</b> hozzászólással, megtekintések száma: <b>[views]</b>' //cpg1.3.0
);

$lang_list_users = array(
        'user_list' => 'Felhasználók listája',
        'no_user_gal' => 'Nincs felhasználó a képtárban',
        'n_albums' => '%s album(ok)',
        'n_pics' => '%s fájl(ok)' //cpg1.3.0
);

$lang_list_albums = array(
        'n_pictures' => '%s fájl', //cpg1.3.0
        'last_added' => ', utolsó feltöltés: %s',
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
        'login' => 'Bejelentkezés',
        'enter_login_pswd' => 'Adja meg felhasználónevét és jelszavát a bejelentkezéshez',
        'username' => 'Felhasználónév',
        'password' => 'Jelszó',
        'remember_me' => 'Emlékezz rám',
        'welcome' => 'Üdvözöllek %s ...',
        'err_login' => '*** A bejelentkezés sikertelen, próbáld újra ***',
        'err_already_logged_in' => 'Már bejelentkeztél!',
		'forgot_password_link' => 'Elfelejtettem a jelszavam', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
        'logout' => 'Kijelentkezés',
        'bye' => 'Viszontlátásra %s ...',
        'err_not_loged_in' => 'Nem vagy bejelentkezve!',
);

// ------------------------------------------------------------------------- //
// File phpinfo.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP infó', //cpg1.3.0
  'explanation' => 'Ezt az üzenetet a <a href="http://www.php.net/phpinfo">phpinfo()</a> PHP függvény generálta a Copermine rendszerben (az üzenet jobb sarka levágásra kerülhet).', //cpg1.3.0
  'no_link' => 'Saját phpinfód megmutatása másoknak biztonsági rizikót jelenthet, ezért ez az oldal csak admin módban látható. Errõl az oldlról nem postázhatsz linket másoknak, ezekhez a hozzáférés le lesz tiltva.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
        'upd_alb_n' => '%s album módosítása ',
        'general_settings' => 'Általános beállítások',
        'alb_title' => 'Album cím',
        'alb_cat' => 'Album kategória',
        'alb_desc' => 'Album leírás',
        'alb_thumb' => 'Album ikon',
        'alb_perm' => 'Album jogosultságok',
        'can_view' => 'Albumot láthatja: ',
        'can_upload' => 'Látogatók feltölthetnek képet',
        'can_post_comments' => 'Látogatók küldhetnek hozzászólásokat',
        'can_rate' => 'Látogatók osztályozhatják a képeket',
        'user_gal' => 'Felhasználói képtár',
        'no_cat' => '* Nincs kategória *',
        'alb_empty' => 'Az album üres',
        'last_uploaded' => 'Utoljára feltöltött',
        'public_alb' => 'Mindenki (nyilvános album)',
        'me_only' => 'Csak én',
        'owner_only' => 'Csak a (%s) album tulajdonosa',
        'groupp_only' => 'Csak a \'%s\' csoport tagjai',
        'err_no_alb_to_modify' => 'Nincs módosítható album az adatbázisban.',
        'update' => 'Album módosítása', //cpg1.3.0
		'notice1' => '(*) a %sgroups%s beállításoktól függõen', //cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
        'already_rated' => 'Sajnálom, de már osztályoztad ezt a fájlt', //cpg1.3.0
        'rate_ok' => 'Osztályzatod elfogadtuk',
		'forbidden' => 'Nem osztályozhatod a saját képeidet.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Bár a {SITE_NAME} adminisztrátora mindent elkövet, hogy amilyen gyorsan csak lehet, szerkesszen vagy töröljön minden kifogásolható dokumentumot, lehetetlen minden küldemény ellenõrzése. Kérjük ezért annak megértését, hogy minden erre a weblapra címzett küldemény annak szerzõje nézetét és véleményét fejezi ki, és nem az adminisztrátorét, illetve webmesterét (kivéve az általuk postázott küldeményeket). Ennél fogva nem tudunk értük felelõsséget vállalni.<br />
<br />
Elfogadod, hogy nem postázol semmilyen sértõ, obszcén, vulgáris, rágalmazó, gyûlölködõ, fenyegetõ, szexuális tartalmú, vagy bármilyen más olyan tartalmú anyagot, amely érvényes törvényt sért. Elfogadod, hogy a {SITE_NAME} webmesterének, adminisztrátorának, vagy moderátorának bármikor jogában áll bármilyen tartalmat szükség esetén törölni, vagy szerkeszteni. Mint felhasználó egyetértesz a közölt információk adatbázisban történõ tárolásához. Bár a webmester, illetve adminisztrátor nem adja ki harmadik feleknek ezeket az információkat a hozzájárulásod nélkül, nem tehetõ felelõssé semmilyen olyan hacker kísérletért, melyek az adatok kompromittálásához vezet.<br />
<br />
Ez a weblap cooky formájában információt tárol a számítógépeden. Ezek a cooky-k csak azt a célt szolgálják, hogy fokozzák a nézhetõségi élményt. Az email cím csak a regisztrációs adataidnak és jelszavadnak nyugtázására szolgál.<br />
<br />
Az 'Egyetértek'-re klikkelve elfogadod ezeket a feltételeket.
EOT;

$lang_register_php = array(
        'page_title' => 'Felhasználó regisztráció',
        'term_cond' => 'Regisztrációs feltételek',
        'i_agree' => 'Egyetértek',
        'submit' => 'Regisztrálás',
        'err_user_exists' => 'A megadott felhasználónév már létezik, adjon meg másikat',
        'err_password_mismatch' => 'A két jelszó nem egyezik, add meg újra',
        'err_uname_short' => 'A felhasználónév legalább 2 karakter hosszú kell, hogy legyen',
        'err_password_short' => 'A jelszó legalább 2 karakter hosszú kell, hogy legyen',
        'err_uname_pass_diff' => 'A felhasználónévnek és a jelszónak különböznie kell',
        'err_invalid_email' => 'Érvénytelen email cím',
        'err_duplicate_email' => 'Egy másik felhasználó már regisztrált ezzel az email címmel',
        'enter_info' => 'Regisztrációs információk megadása',
        'required_info' => 'Kötelezõ adat',
        'optional_info' => 'Opcionális adat',
        'username' => 'Felhasználónév',
        'password' => 'Jelszó',
        'password_again' => 'Jelszó még egyszer',
        'email' => 'Email',
        'location' => 'Tartózkodási hely',
        'interests' => 'Érdeklõdési kör',
        'website' => 'Honlap',
        'occupation' => 'Foglalkozás',
        'error' => 'HIBA',
        'confirm_email_subject' => '%s - Regisztráció nyugtázása',
        'information' => 'Információ',
        'failed_sending_email' => 'A regisztrációs megerõsítõ emailt nem sikerült elküldeni !',
        'thank_you' => 'Köszönjük, hogy regisztráltál.<br /><br />Küldtünk egy emailt a megadott email címre, amiben megadtuk, hogy hogyan aktiválhatod felhasználói hozzáférésed.',
        'acct_created' => 'Felhasználói hozzáférésed létrehoztuk és bejelentkezhetsz a felhasználóneveddel és jelszavaddal',
        'acct_active' => 'Felhasználói hozzáférésed aktiváltuk és bejelentkezhetsz a felhasználóneveddel és jelszavaddal',
        'acct_already_act' => 'Felhasználói hozzáférésed már aktív !',
        'acct_act_failed' => 'Ezt a felhasználói hozzáférést nem lehet aktiválni !',
        'err_unk_user' => 'A kiválasztott felhasználó nem létezik !',
        'x_s_profile' => '%s profilja',
        'group' => 'Csoport',
        'reg_date' => 'Csatlakozás ideje',
        'disk_usage' => 'Tárfelhasználás',
        'change_pass' => 'Jelszó megváltoztatása',
        'current_pass' => 'Jelenlegi jelszó',
        'new_pass' => 'Új jelszó',
        'new_pass_again' => 'Új jelszó még egyszer',
        'err_curr_pass' => 'A jelenlegi jelszó hibás',
        'apply_modif' => 'Módosítások végrehajtása',
        'change_pass' => 'Jelszó megváltoztatása',
        'update_success' => 'Profilod aktualizáltuk',
        'pass_chg_success' => 'Jelszavad megváltoztattuk',
        'pass_chg_error' => 'Jelszavad nem változtattuk meg',
		'notify_admin_email_subject' => '%s - regisztrációs értesítés', //cpg1.3.0
		'notify_admin_email_body' => 'Egy új felhasználó "%s" névvel regisztrált a képtáradba', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
Köszönjük, hogy regisztráltál '{SITE_NAME}' weblapunkon

Felhasználóneved : "{USER_NAME}"
Jelszavad : "{PASSWORD}"

Felhaználói hozzáférésed aktiválásához az alábbi linkre kell klikkelned.

{ACT_LINK}

Üdvözlettel,

A '{SITE_NAME}' adminisztrátora

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
        'title' => 'Hozzászólások megtekintése',
        'no_comment' => 'Nincs hozzászólás',
        'n_comm_del' => '%s hozzászólás(ok) törölve',
        'n_comm_disp' => 'Megjelenítendõ hozzászólások száma',
        'see_prev' => 'Elõzõ',
        'see_next' => 'Következõ',
        'del_comm' => 'Kijelölt hozzászólások törölve',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
        0 => 'Keresés a képtárban',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
        'page_title' => 'Új fájl keresése', //cpg1.3.0
        'select_dir' => 'Könyvtár választása',
        'select_dir_msg' => 'Ez a funkció lehetõvé teszi egy köteg - FTP-vel a szerverre másolt - fájl hozzáadását a képtárhoz.<br /><br />Válaszd ki a könyvtárat, ahonnan hozzá akarsz adni a képtárhoz fájlokat', //cpg1.3.0
        'no_pic_to_add' => 'Nincs hozzáadható fájl', //cpg1.3.0
        'need_one_album' => 'Ehhez a funkcióhoz legalább egy albumnak léteznie kell',
        'warning' => 'Figyelmeztetés',
        'change_perm' => 'a szkript nem tud írni ebbe a könyvtárba, 755-rõl 777-re kell cserélned a jogosultságát mielõtt hozzáadsz fájlokat!', //cpg1.3.0
        'target_album' => '<b>Adja hozzá a </b>"%s"<b> könyvtárból a fájlokat a </b>%s albumhoz', //cpg1.3.0
        'folder' => 'Könyvtár',
        'image' => 'Kép',
        'album' => 'Album',
        'result' => 'Eredmény',
        'dir_ro' => 'Nem írható. ',
        'dir_cant_read' => 'Nem olvasható. ',
        'insert' => 'Új fájlok hozzáadása a képtárhoz', //cpg1.3.0
        'list_new_pic' => 'Új fájlok felsorolása', //cpg1.3.0
        'insert_selected' => 'Kijelölt fájlok hozzáadása', //cpg1.3.0
        'no_pic_found' => 'Nincs új fájl', //cpg1.3.0
        'be_patient' => 'Légy türelemmel, a szkriptnek idõ kell a fájlok hozzáadásához', //cpg1.3.0
		'no_album' => 'nem választottál albumot',  //cpg1.3.0
        'notes' =>  '<ul>'.
                                '<li><b>OK</b> : azt jelenti, hogy a fájl hozzáadása sikeres volt'. //cpg1.3.0
                                '<li><b>DP</b> : azt jelenti, hogy a fájl már az adatbázisban volt'. //cpg1.3.0
                                '<li><b>PB</b> : azt jelenti, hogy a fájl nem volt hozzáadható, ellenõrizd a konfigurációt és a fájlokat tartalmazó könyvtárak jogosultságait '. //cpg1.3.0
		                        '<li><b>NA</b> : azt jelenti, hogy nem választottad ki az albumot, melybe a fájlokat fel akarod tölteni, üss \'<a href="javascript:history.back(1)">back</a>\'-t és válassz ki egy albumot. Ha nincs egy albumod se, akkor <a href="albmgr.php">elõször generálj egyet</a></li>'.
                                '<li>Ha az OK, DP, PB \'jelek\' nem láthatók, klikkelj a hibás fájlra a PHP hibaüzenetének megjelenítéséhez'. //cpg1.3.0
                                '<li>Ha a browser leidõzített, nyomja meg a frissítés gombot'.
                                '</ul>',
								'select_album' => 'album kiválasztása', //cpg1.3.0
								'check_all' => 'Mindet kijelöl', //cpg1.3.0
								'uncheck_all' => 'Mindet NEM kijelöl', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void


// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
        'title' => 'Fájl feltöltése', //cpg1.3.0
		'custom_title' => 'Beállított lekérési ûrlap', //cpg1.3.0
		'cust_instr_1' => 'Kiválaszthatsz beállított számú feltöltési sort. Azonban nem lépheted túl az alábbi limitet.', //cpg1.3.0
		'cust_instr_2' => 'Sor szám lekérés', //cpg1.3.0
		'cust_instr_3' => 'Fájl feltöltési sok: %s', //cpg1.3.0
		'cust_instr_4' => 'URI/URL feltöltési sorok: %s', //cpg1.3.0
		'cust_instr_5' => 'URI/URL feltöltési sorok:', //cpg1.3.0
		'cust_instr_6' => 'Fájl feltöltési sorok:', //cpg1.3.0
		'cust_instr_7' => 'Add meg minden típusra a jelenleg tervezett feltöltési sorok számát.  Utána üss \'Folytatás\'-t. ', //cpg1.3.0
		'reg_instr_1' => 'Érvénytelen akció ebben a generálásban.', //cpg1.3.0
		'reg_instr_2' => 'Most feltöltheted a fájljaidat az alábbi feltöltési sorok használatával. A kliensrõl a szerverre feltöltendõ fájlok mérete egyenként nem lépheti túl a %s KB határt. A \'Fájl feltöltés\' és \'URI/URL Feltöltés\' részben feltöltött ZIP fájlok tömörítettek maradnak.', //cpg1.3.0
		'reg_instr_3' => 'Ha azt akarod, hogy a ZIP fájlod kicsomagolásra kerüljön, használd a \'Kitömörítõ ZIP feltöltés\' részben található sort.', //cpg1.3.0
		'reg_instr_4' => 'Az URI/URL feltöltési részben add meg a fájl elérési útvonalat a következõ módon: http://www.mysite.com/images/example.jpg', //cpg1.3.0
		'reg_instr_5' => 'Ha kitöltötted az ûrlapot, nyomj \'Folytatás\'-t.', //cpg1.3.0
		'reg_instr_6' => 'Kitömörítõ ZIP feltöltés:', //cpg1.3.0
		'reg_instr_7' => 'Fájl feltöltés:', //cpg1.3.0
		'reg_instr_8' => 'URI/URL feltöltés:', //cpg1.3.0
		'error_report' => 'Hibajelentés', //cpg1.3.0
		'error_instr' => 'A következõ feltöltések hibát eredményeztek:', //cpg1.3.0
		'file_name_url' => 'Fájlnév/URL', //cpg1.3.0
		'error_message' => 'Hibaüzenet', //cpg1.3.0
		'no_post' => 'Nem került feltöltésre fájl a postázással.', //cpg1.3.0
		'forb_ext' => 'Tiltott fájlkiterjesztés.', //cpg1.3.0
		'exc_php_ini' => 'Túllépted a php.ini-ben megengedett fájlméretet.', //cpg1.3.0
		'exc_file_size' => 'Túllépted a CPG-ben megengedett fájlméretet.', //cpg1.3.0
		'partial_upload' => 'Csak részleges feltöltés.', //cpg1.3.0
		'no_upload' => 'Nem történt feltöltés.', //cpg1.3.0
		'unknown_code' => 'Ismeretlen PHP feltöltési hibakód.', //cpg1.3.0
		'no_temp_name' => 'Nincs feltöltés - Nincs temp név.', //cpg1.3.0
		'no_file_size' => 'Nem tartalmaz adatot / hibás adat', //cpg1.3.0
		'impossible' => 'Nem lehet átmozgatni.', //cpg1.3.0
		'not_image' => 'Nem / hibás kép', //cpg1.3.0
		'not_GD' => 'Nem GD kiterjesztés.', //cpg1.3.0
		'pixel_allowance' => 'Pixel határt túllépted.', //cpg1.3.0
		'incorrect_prefix' => 'Helytelen URI/URL prefix', //cpg1.3.0
		'could_not_open_URI' => 'Nem tudtam megnyitni az URI-t.', //cpg1.3.0
		'unsafe_URI' => 'Nem igazolható a biztonság.', //cpg1.3.0
		'meta_data_failure' => 'Meta adat hiba', //cpg1.3.0
		'http_401' => '401 Jogosulatlan', //cpg1.3.0
		'http_402' => '402 fizetési kötelezettség', //cpg1.3.0
		'http_403' => '403 tiltott', //cpg1.3.0
		'http_404' => '404 nem található', //cpg1.3.0
		'http_500' => '500 belsõ szerver hiba', //cpg1.3.0
		'http_503' => '503 szerver nem elérhetõ', //cpg1.3.0
		'MIME_extraction_failure' => 'MIME nem volt meghatározható.', //cpg1.3.0
		'MIME_type_unknown' => 'Ismeretlen MIME tipus', //cpg1.3.0
		'cant_create_write' => 'Nem lehet írható fájlt létrehozni.', //cpg1.3.0
		'not_writable' => 'Nem lehet írni az írható fájlba.', //cpg1.3.0
		'cant_read_URI' => 'Nem olvasható az URI/URL', //cpg1.3.0
		'cant_open_write_file' => 'Nem nyitható meg az URI írható fájl.', //cpg1.3.0
		'cant_write_write_file' => 'Nem lehet írni az URI írható fájlba.', //cpg1.3.0
		'cant_unzip' => 'Nem lehet kicsomagolni.', //cpg1.3.0
		'unknown' => 'Ismeretlen hiba', //cpg1.3.0
		'succ' => 'Sikeres feltöltések', //cpg1.3.0
		'success' => '%s feltöltés sikeres volt.', //cpg1.3.0
		'add' => 'Üss \'Folytatás\'-t a fájlok albumhoz történõ hozzáadásához.', //cpg1.3.0
		'failure' => 'Feltöltés hiba', //cpg1.3.0
		'f_info' => 'Fájl információ', //cpg1.3.0
		'no_place' => 'Az elõzõ fájlt nem sikerült elhelyezni.', //cpg1.3.0
		'yes_place' => 'Az elõzõ fájlt sikerült elhelyezni.', //cpg1.3.0
        'max_fsize' => 'Maximum megengedett fájlméret %s KB',
        'album' => 'Album',
        'picture' => 'Fájl', //cpg1.3.0
        'pic_title' => 'Fájl címe', //cpg1.3.0
        'description' => 'Fájl leírása', //cpg1.3.0
        'keywords' => 'Kulcsszavak (szóközökkel elválasztva)',
        'err_no_alb_uploadables' => 'Nincs album, ahova engedélyezett a feltöltés',
		'place_instr_1' => 'Tedd a fájlokat az albumba ezúttal.  Most megadhatod a releváns információkat minden fájlhoz.', //cpg1.3.0
		'place_instr_2' => 'Több fájlt kell elhelyezni. Nyomj \'Folytatás\'-t.', //cpg1.3.0
		'process_complete' => 'Minden fájlt sikeresen elhelyeztél.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
        'title' => 'Felhasználók menedzselése',
        'name_a' => 'Név növekvõ',
        'name_d' => 'Név csökkenõ',
        'group_a' => 'Csoport növekvõ',
        'group_d' => 'Csoport csökkenõ',
        'reg_a' => 'Reg. dátum növekvõ',
        'reg_d' => 'Reg. dátum csökkenõ',
        'pic_a' => 'Képszám növekvõ',
        'pic_d' => 'Képszám csökkenõ',
        'disku_a' => 'Diszkfelhasználás növekvõ',
        'disku_d' => 'Diszkfelhasználás csökkenõ',
		'lv_a' => 'Utolsó látogatás növekvõ', //cpg1.3.0
		'lv_d' => 'Utolsó látogatás csökkenõ', //cpg1.3.0
        'sort_by' => 'Felhasználók sorrendezése',
        'err_no_users' => 'Nincs felhasználó !',
        'err_edit_self' => 'Nem szerkesztheted a saját profilod, használd az \'Profilom\' menüpontot',
        'edit' => 'SZERKESZT',
        'delete' => 'TÖRÖL',
        'name' => 'Felhasználónév',
        'group' => 'Csoport',
        'inactive' => 'Inaktív',
        'operations' => 'Mûveletek',
        'pictures' => 'Fájlok', //cpg1.3.0
        'disk_space' => 'Felhasznált tárhely / kvóta',
        'registered_on' => 'Regisztrálva',
		'last_visit' => 'Utolsó látogatás', //cpg1.3.0
        'u_user_on_p_pages' => '%d felhasználó %d oldalon',
        'confirm_del' => 'Biztös törölni kívánod a felhasználót? \\nMinden fájlja és albuma is törlõdni fog.', //js-alert //cpg1.3.0
        'mail' => 'MAIL',
        'err_unknown_user' => 'A kijelölt felhasználó nem létezik !',
        'modify_user' => 'Felhasználó módosítása',
        'notes' => 'Megjegyzések',
        'note_list' => '<li>Ha nem kívánod megváltoztatni az aktuális jelszót, hagyd üresen a "jelszó" mezõt',
        'password' => 'Jelszó',
        'user_active' => 'Felhasználó aktív',
        'user_group' => 'Felhasználó csoport',
        'user_email' => 'Felhasználó email címe',
        'user_web_site' => 'Felhasználó honlapja',
        'create_new_user' => 'Új felhasználó létrehozása',
        'user_location' => 'Felhasználó lakhelye',
        'user_interests' => 'Felhasználó érdeklõdési köre',
        'user_occupation' => 'Felhasználó foglalkozása',
		'latest_upload' => 'Friss feltöltések', //cpg1.3.0
		'never' => 'soha', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
        'title' => 'Fájlok átméretezése', //cpg1.3.0
        'what_it_does' => 'Mi történjen',
        'what_update_titles' => 'Címek aktualizálása fájlnevekbõl',
        'what_delete_title' => 'Címek törlése',
        'what_rebuild' => 'Ikonok és átméretezett képek újragenerálása',
        'what_delete_originals' => 'Eredeti képek felülírása az átméretezettekkel',
        'file' => 'Fájl',
        'title_set_to' => 'cím beállítása ..',
        'submit_form' => 'érvényesítés',
        'updated_succesfully' => 'sikeres módosítás',
        'error_create' => 'HIBA a generálás során',
        'continue' => 'Több kép feldolgozása',
        'main_success' => 'A % fájlok felhasználása elsõdleges fájlként sikeres volt', //cpg1.3.0
        'error_rename' => '%s %s -ra átnevezése során HIBA',
        'error_not_found' => 'A % fájlok nem találhatók',
        'back' => 'vissza a fõoldalra',
        'thumbs_wait' => 'Ikonok és/vagy átméretezett képek aktualizálása, kérlek várj...',
        'thumbs_continue_wait' => 'Ikonok és/vagy átméretezett képek aktualizálásának folytatása...',
        'titles_wait' => 'Címek aktualizálása, kérlek várj...',
        'delete_wait' => 'Címek törlése, kérlek várj...',
        'replace_wait' => 'Eredeti képek felülírása az átméretezettekkel, kérlek várj...',
        'instruction' => 'Gyors áttekintés',
        'instruction_action' => 'Mûvelet kiválasztása',
        'instruction_parameter' => 'Paraméterek beállítása',
        'instruction_album' => 'Album kiválasztása',
        'instruction_press' => 'Nyomj &quot;%s&quot;-t',
        'update' => 'Ikonok és/vagy átméretezett fényképek aktualizálása',
        'update_what' => 'Mit kell aktualizálni',
        'update_thumb' => 'Csak ikonokat',
        'update_pic' => 'Csak átméretezett képeket',
        'update_both' => 'Ikonokat és átméretezett képeket is',
        'update_number' => 'Klikkelésenként feldolgozandó képek száma',
        'update_option' => '(Próbáld csökkenteni ezt az értéket, ha leidõzítési problémát észlelsz)',
        'filename_title' => 'Fájlnév &#8594; Fájl cím', //cpg1.3.0
        'filename_how' => 'Hogy legyen módosítva a fájlnév',
        'filename_remove' => 'A jpg végzõdés törlése és _ (alulvonás) helyettesítése szóközzel',
        'filename_euro' => '2003_11_23_13_20_20.jpg átnevezése 23/11/2003 13:20-ra',
        'filename_us' => '2003_11_23_13_20_20.jpg átnevezése 11/23/2003 13:20-ra',
        'filename_time' => '2003_11_23_13_20_20.jpg átnevezése 13:20ra',
        'delete' => 'Kép címek vagy eredeti méretû képek törlése',
        'delete_title' => 'Fájl címek törlése', //cpg1.3.0
        'delete_original' => 'Eredeti méretû fájlok törlése', //cpg1.3.0
        'delete_replace' => 'Eredeti képek felülírása átméretezettel',
        'select_album' => 'Album kiválasztása',
		'delete_orphans' => 'Árva hozzászólások törlése (minden albumon mûködik)', //cpg1.3.0
		'orphan_comment' => 'árva hozzászólást találtam', //cpg1.3.0
		'delete' => 'Törlés', //cpg1.3.0
		'delete_all' => 'Mind törlése', //cpg1.3.0
		'comment' => 'Hozzászólás: ', //cpg1.3.0
		'nonexist' => 'nem létezõ fájlhoz csatolva # ', //cpg1.3.0
		'phpinfo' => 'Phpinfo kijelzése', //cpg1.3.0
		'update_db' => 'Adatbázis aktualizálása', //cpg1.3.0
		'update_db_explanation' => 'Ha lecseréltél coppermine fájlokat, módosításokat végeztél, vagy korábbi verziójú coppermine-ról upgrade-eltél, futtasd le az adatbázis update-et. Ez létrehozza a szükséges adattáblákat és / vagy konfigurációs értékeket a coppermine adatbázisodban.', //cpg1.3.0
);

?>
