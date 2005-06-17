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
// CVS version: $Id: slovenian-utf-8.php,v 1.6 2004/07/24 15:04:07 gaugau Exp $
// ------------------------------------------------------------------------- //

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Slovenian',
  'lang_name_native' => 'SlovenÂšÄina',
  'lang_country_code' => 'sl',
  'trans_name'=> 's55hh',
  'trans_email' => 's55hh@slovhf.net',
  'trans_website' => 'http://prekmurje.info/',
  'trans_date' => '2004-03-18',
);
//$lang_charset = 'utf-8';
$lang_charset = 'windows-1250';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytov', 'kB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Ne', 'Po', 'To', 'Sr', 'ÄŒe', 'Pe', 'So');
$lang_month = array('Jan', 'Feb', 'Mar', 'Apr', 'Maj', 'Jun', 'Jul', 'Avg', 'Sep', 'Okt', 'Nov', 'Dec');

// Some common strings
$lang_yes = 'Da';
$lang_no  = 'Ne';
$lang_back = 'NAZAJ';
$lang_continue = 'NAPREJ';
$lang_info = 'Informacija';
$lang_error = 'Napaka';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%B %d, %Y';
$lastcom_date_fmt =  '%m/%d/%y ob %H:%M'; //cpg1.3.0
$lastup_date_fmt = '%B %d, %Y';
$register_date_fmt = '%B %d, %Y';
$lasthit_date_fmt = '%B %d, %Y ob %I:%M %p'; //cpg1.3.0
$comment_date_fmt =  '%B %d, %Y ob %I:%M %p'; //cpg1.3.0

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'rit', 'kurac', 'pizda', 'sranje', 'zajebano', 'jebi*', 'wop*');

$lang_meta_album_names = array(
  'random' => 'NakljuÄne datoteke', //cpg1.3.0
  'lastup' => 'Zadnje dodano',
  'lastalb'=> 'Zadnji posodobljeni album',
  'lastcom' => 'Zadnji komentarji',
  'topn' => 'NajveÄ ogledov',
  'toprated' => 'Naj ocene',
  'lasthits' => 'Zadnji ogledi',
  'search' => 'Rezultati iskanja',
  'favpics'=> 'Priljubljene datoteke', //cpg1.3.0
);

$lang_errors = array(
  'access_denied' => 'NimaÂš pravic za dostop do te strani.',
  'perm_denied' => 'NimaÂš pravic za izvedbo tega ukaza.',
  'param_missing' => 'Manjkajo podatki za izvedbo...',
  'non_exist_ap' => 'Izbrani album/slika ne obstaja!', //cpg1.3.0
  'quota_exceeded' => 'Disk je poln<br /><br />Na razpolago imaÂš [quota]K, tvoje slike pa trenutno zasedajo [space]K, Äe bi dodal pa Âše to sliko, bi prekoraÄil prostor na disku.', //cpg1.3.0
  'gd_file_type_err' => 'Pri uporabi GD knjiÂžnice lahko uporabiÂš samo JPEG in PNG slike.',
  'invalid_image' => 'Poslana slika je poÂškodovana ali pa ni v pravilnem formatu za GD knjiÂžnico.',
  'resize_failed' => 'Ne morem narediti ikone ali pomanjÂšane slike.',
  'no_img_to_display' => 'Trenutno Âše brez slik',
  'non_exist_cat' => 'Izbrana kategorija ne obstaja',
  'orphan_cat' => 'Kategorija ima doloÄeno neobstojeÄo nadrejeno kategorijo. Popravi napako v nastavitvah.', //cpg1.3.0
  'directory_ro' => 'Direktorij \'%s\' ne dopuÂšÄa pisanja, slik ni moÂžno pobrisati', //cpg1.3.0
  'non_exist_comment' => 'Izbrani komentar ne obstaja.',
  'pic_in_invalid_album' => 'Slika je v neobstojeÄem albumu (%s)!?', //cpg1.3.0
  'banned' => 'Trenutno imaÂš prepoved dostopa do teh strani.',
  'not_with_udb' => 'Ta ukaz je onemogoÄen, ker je premaknjen v forum. Ali to kar ÂželiÂš narediti ni omogoÄeno v nastavitvah ali pa je predvideno za izvedbo v forumu.',
  'offline_title' => 'Izklopljeno', //cpg1.3.0
  'offline_text' => 'Galerija je trenutno izklopljena - preveri pozneje...', //cpg1.3.0
  'ecards_empty' => 'Trenutno ni podatkov o poslanih e-razglednicah. Preveri, Äe je v nastavitvah vklopljeno beleÂženje poslanih e-razglednic!', //cpg1.3.0
  'action_failed' => 'Ukaz je bil prekinjen. Tvojega zahtevka ni moÂžno izvesti.', //cpg1.3.0
  'no_zip' => 'Potrebna knjiÂžnica za izvedbo ZIP datoteke manjka. SporoÄi napako administratorju galerije.', //cpg1.3.0
  'zip_type' => 'NimaÂš dovoljenja za nalaganje ZIP datotek.', //cpg1.3.0
);

$lang_bbcode_help = 'Naslednje kode so lahko v pomoÄ: <li>[b]<b>Povdarjeno</b>[/b]</li> <li>[i]<i>PoÂševno</i>[/i]</li> <li>[url=http://tvojastran.com/]Url besedilo[/url]</li> <li>[email]nekaj@domain.com[/email]</li>'; //cpg1.3.0

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'alb_list_title' => 'Pojdi na seznam albumov',
  'alb_list_lnk' => 'Seznam albumov',
  'my_gal_title' => 'Pojdi v mojo osebno galerijo',
  'my_gal_lnk' => 'Moja galerija',
  'my_prof_lnk' => 'Moj profil',
  'adm_mode_title' => 'Preklop v administracijo',
  'adm_mode_lnk' => 'Administracija',
  'usr_mode_title' => 'Preklop v uporabniÂški naÄin',
  'usr_mode_lnk' => 'UporabniÂški naÄin',
  'upload_pic_title' => 'NaloÂži sliko v album', //cpg1.3.0
  'upload_pic_lnk' => 'Nalaganje slik', //cpg1.3.0
  'register_title' => 'Ustvari raÄun',
  'register_lnk' => 'Registracija',
  'login_lnk' => 'Prijava',
  'logout_lnk' => 'Odjava',
  'lastup_lnk' => 'Zadnje dodane slike',
  'lastcom_lnk' => 'Zadnji komentarji',
  'topn_lnk' => 'NajveÄ ogledov',
  'toprated_lnk' => 'Najbolj ocenjeno',
  'search_lnk' => 'Iskanje',
  'fav_lnk' => 'Moji favoriti',
  'memberlist_title' => 'PokaÂži seznam Älanov', //cpg1.3.0
  'memberlist_lnk' => 'Seznam Älanov', //cpg1.3.0
  'faq_title' => 'Pogosto zastavljena vpraÂšanja o foto-galeriji &quot;Coppermine&quot;', //cpg1.3.0
  'faq_lnk' => 'FAQ', //cpg1.3.0
);

$lang_gallery_admin_menu = array(
  'upl_app_lnk' => 'Odobri slike',
  'config_lnk' => 'Nastavitve',
  'albums_lnk' => 'Albumi',
  'categories_lnk' => 'Kategorije',
  'users_lnk' => 'Uporabniki',
  'groups_lnk' => 'Skupine',
  'comments_lnk' => 'Komentarji', //cpg1.3.0
  'searchnew_lnk' => 'Najdi nove slike', //cpg1.3.0
  'util_lnk' => 'Orodja', //cpg1.3.0
  'ban_lnk' => 'Zavrni uporabnika',
  'db_ecard_lnk' => 'PrikaÂži e-razglednice', //cpg1.3.0
);

$lang_user_admin_menu = array(
  'albmgr_lnk' => 'Ustvari/naroÄi svoj album',
  'modifyalb_lnk' => 'Spremeni svoj album',
  'my_prof_lnk' => 'Moj profil',
);

$lang_cat_list = array(
  'category' => 'Kategorija',
  'albums' => 'Albumi',
  'pictures' => 'Slike', //cpg1.3.0
);

$lang_album_list = array(
  'album_on_page' => 'ÂŠt. albumov:%d (Âšt. strani:%d)',
);

$lang_thumb_view = array(
  'date' => 'Datum',
  //Sort by filename and title
  'name' => 'Datoteka',
  'title' => 'Naziv',
  'sort_da' => 'Sortiraj po datumu naraÂšÄujoÄe',
  'sort_dd' => 'Sortiraj po datumu padajoÄe',
  'sort_na' => 'Sortiraj po imenu datoteke naraÂšÄujoÄe',
  'sort_nd' => 'Sortiraj po imenu datoteke padajoÄe',
  'sort_ta' => 'Sortiraj po nazivu naraÂšÄujoÄe',
  'sort_td' => 'Sortiraj po nazivu padajoÄe',
  'download_zip' => 'Download kot Zip datoteka', //cpg1.3.0
  'pic_on_page' => 'ÂŠt. slik:%d (Âšt. strani:%d)',
  'user_on_page' => 'ÂŠt. uporabnikov:%d (Âšt. strani:%d)', //cpg1.3.0
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Nazaj na stran z ikonami',
  'pic_info_title' => 'PrikaÂži/skrij informacije o sliki', //cpg1.3.0
  'slideshow_title' => 'Samodejno predvajaj slike',
  'ecard_title' => 'PoÂšlji sliko kot e-razglednico', //cpg1.3.0
  'ecard_disabled' => 'PoÂšiljanje e-razglednic ni dovoljeno',
  'ecard_disabled_msg' => 'NimaÂš pravic za poÂšiljanje e-razglednic', //js-alert //cpg1.3.0
  'prev_title' => 'Poglej predhodno sliko', //cpg1.3.0
  'next_title' => 'Poglej naslednjo sliko', //cpg1.3.0
  'pic_pos' => 'Slika %s od %s', //cpg1.3.0
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Oceni to sliko ', //cpg1.3.0
  'no_votes' => '(Brez ocen do sedaj)',
  'rating' => '(trenutna ocena: %s (najveÄ 5; Âšt. glasov:%s)',
  'rubbish' => 'ZaniÄ',
  'poor' => 'Slabo',
  'fair' => 'Tako tako',
  'good' => 'Dobro',
  'excellent' => 'OdliÄno',
  'great' => 'Super',
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
  CRITICAL_ERROR => 'KritiÄna napaka',
  'file' => 'Datoteka: ',
  'line' => 'Vrstica: ',
);

$lang_display_thumbnails = array(
  'filename' => 'Ime datoteke: ',
  'filesize' => 'Velikost datoteke: ',
  'dimensions' => 'Dimenzija: ',
  'date_added' => 'Datum objave: ', //cpg1.3.0
);

$lang_get_pic_data = array(
  'n_comments' => 'ÂŠt. komentarjev:%s',
  'n_views' => 'ÂŠt. ogledov:%s',
  'n_votes' => '(Âšt. ocen:%s)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Debug info', //cpg1.3.0
  'select_all' => 'Izberi vse', //cpg1.3.0
  'copy_and_paste_instructions' => 'ÄŒe ÂželiÂš pomoÄ s strani coppermine foruma, kopiraj in prilepi (copy-paste) izpis napake v svoje sporoÄilo. Pred poÂšiljanjem preveri in zamenjaj (Äe obstaja v izpisu) geslo z ***.', //cpg1.3.0
  'phpinfo' => 'PrikaÂži phpinfo', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => 'Privzeti jezik', //cpg1.3.0
  'choose_language' => 'Izberi jezik', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'Privzeta tema', //cpg1.3.0
  'choose_theme' => 'Izberi temo', //cpg1.3.0
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
  'Exclamation' => 'Vzklik',
  'Question' => 'VpraÂšanje',
  'Very Happy' => 'Zelo sreÄen',
  'Smile' => 'SmeÂško',
  'Sad' => 'ÂŽalosten',
  'Surprised' => 'PreseneÄen',
  'Shocked' => 'V Âšoku',
  'Confused' => 'Zmeden',
  'Cool' => 'Hladen',
  'Laughing' => 'Nasmejan',
  'Mad' => 'Nor',
  'Razz' => 'Nagajiv',
  'Embarassed' => 'Embarassed',
  'Crying or Very sad' => 'JokajoÄ ali Âžalosten',
  'Evil or Very Mad' => 'VraÂžji ali zloben',
  'Twisted Evil' => 'Slepar',
  'Rolling Eyes' => 'KotaleÄe oÄi',
  'Wink' => 'MeÂžikanje',
  'Idea' => 'Ideja',
  'Arrow' => 'PuÂšÄica',
  'Neutral' => 'Nevtralen',
  'Mr. Green' => 'Gospod zelenko',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  0 => 'ZapuÂšÄam administracijo...',
  1 => 'Vstop v administracijo...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Album mora imeti ime!', //js-alert
  'confirm_modifs' => 'Res ÂželiÂš izvesti te spremembe?', //js-alert
  'no_change' => 'Nobenih sprememb nisi naredil!', //js-alert
  'new_album' => 'Novi album',
  'confirm_delete1' => 'Res ÂželiÂš pobrisati ta album?', //js-alert
  'confirm_delete2' => '\nVse slike in vsi komentarji bodo prav tako pobrisani!', //js-alert
  'select_first' => 'Najprej izberi album', //js-alert
  'alb_mrg' => 'Urejanje albumov',
  'my_gallery' => '* Moja galerija *',
  'no_category' => '* Brez kategorij *',
  'delete' => 'Brisanje',
  'new' => 'Novo',
  'apply_modifs' => 'Izvedi spremembe',
  'select_category' => 'Izberi kategorijo',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Parameter potreben za \'%s\'operacijo ni vpisan!',
  'unknown_cat' => 'Izbrana kategorija ne obstaja v bazi',
  'usergal_cat_ro' => 'Brisanje kategorije od uporabniÂških galerij ni moÂžno!',
  'manage_cat' => 'Urejanje kategorij',
  'confirm_delete' => 'Res ÂželiÂš pobrisati to kategorijo', //js-alert
  'category' => 'Kategorija',
  'operations' => 'Operacija',
  'move_into' => 'Premakni v',
  'update_create' => 'Posodobi/ustvari kategorijo',
  'parent_cat' => 'Nadrejena kategorija',
  'cat_title' => 'Ime kategorije',
  'cat_thumb' => 'Ikona kategorije', //cpg1.3.0
  'cat_desc' => 'Opis kategorije',
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
  'title' => 'Nastavitve',
  'restore_cfg' => 'Povrni osnovne nastavitve',
  'save_cfg' => 'Shrani nove nastavitve',
  'notes' => 'Opombe',
  'info' => 'Informacija',
  'upd_success' => 'Nastavitve galerije so bile uspeÂšno posodobljene',
  'restore_success' => 'Povrnjene so bile osnovne nastavitve galerije',
  'name_a' => 'Naziv naraÂšÄujoÄe',
  'name_d' => 'Naziv padajoÄe',
  'title_a' => 'Naslov naraÂšÄujoÄe',
  'title_d' => 'Naslov padajoÄe',
  'date_a' => 'Datum naraÂšÄujoÄe',
  'date_d' => 'Datum padajoÄe',
  'th_any' => 'Max razmerje',
  'th_ht' => 'ViÂšina',
  'th_wd' => 'ÂŠirina',
  'label' => 'labela', //cpg1.3.0
  'item' => 'vsebina', //cpg1.3.0
  'debug_everyone' => 'Vsi', //cpg1.3.0
  'debug_admin' => 'Samo admin', //cpg1.3.0
        );

if (defined('CONFIG_PHP')) $lang_config_data = array(
  'Osnovne nastavitve',
  array('Ime galerije', 'gallery_name', 0),
  array('Opis galerije', 'gallery_description', 0),
  array('Administratorjev e-mail', 'gallery_admin_email', 0),
  array('Naslov za link v e-razglednicah (Poglej si veÄ slik)', 'ecards_more_pic_target', 0),
  array('Galerija je izklopljena', 'offline', 1), //cpg1.3.0
  array('BeleÂži e-razglednice', 'log_ecards', 1), //cpg1.3.0
  array('Dovoli ZIP-download priljubljenih slik', 'enable_zipdownload', 1), //cpg1.3.0

  'Language, Themes &amp; Charset settings',
  array('Jezik', 'lang', 5),
  array('Tema', 'theme', 6),
  array('PrikaÂži seznam jezikov', 'language_list', 1), //cpg1.3.0
  array('PrikaÂži zastave jezikov', 'language_flags', 8), //cpg1.3.0
  array('PrikaÂži &quot;reset&quot; na seznamu jezikov', 'language_reset', 1), //cpg1.3.0
  array('PrikaÂži seznam tem', 'theme_list', 1), //cpg1.3.0
  array('PrikaÂži &quot;reset&quot; na seznamu tem', 'theme_reset', 1), //cpg1.3.0
  array('PrikaÂži FAQ', 'display_faq', 1), //cpg1.3.0
  array('PrikaÂži pomoÄ za bbcode', 'show_bbcode_help', 1), //cpg1.3.0
  array('Kodiranje strani', 'charset', 4), //cpg1.3.0

  'Seznam albumov',
  array('ÂŠirina glavne tabele (pixli ali %)', 'main_table_width', 0),
  array('ÂŠtevilo nivojev za prikaz kategorij', 'subcat_level', 0),
  array('ÂŠtevilo albumov na strani', 'albums_per_page', 0),
  array('ÂŠtevilo kolon za prikaz albumov', 'album_list_cols', 0),
  array('Velikost ikon v pixlih', 'alb_list_thumb_size', 0),
  array('Vsebina na glavni strani', 'main_page_layout', 0),
  array('Prikaz ikon albumov za prvi nivo kategorij','first_level',1),

  'Prikaz ikon',
  array('ÂŠtevilo kolon na strani z ikonami', 'thumbcols', 0),
  array('ÂŠtevilo vrstic na strani z ikonami', 'thumbrows', 0),
  array('Max. Âšt. tabulatorjev', 'max_tabs', 10), //cpg1.3.0
  array('PrikaÂži opis slike (zraven imena) pod ikono', 'caption_in_thumbview', 1), //cpg1.3.0
  array('PrikaÂži Âštevilo ogledov pod ikono', 'views_in_thumbview', 1), //cpg1.3.0
  array('PrikaÂži Âštevilo komentarjev pod ikono', 'display_comment_count', 1),
  array('PrikaÂži poÂšiljatelja pod ikono', 'display_uploader', 1), //cpg1.3.0
  array('Privzeto sortiranje slik', 'default_sort_order', 3), //cpg1.3.0
  array('Minimalno Âštevilo ocen za sliko, da se uvrsti na seznam  \'naj-ocene\'', 'min_votes_for_rating', 0), //cpg1.3.0

  'Prikaz slik &amp; nastavitve za komentarje',
  array('ÂŠirina tabele za prikaz slik (pixli ali %)', 'picture_table_width', 0), //cpg1.3.0
  array('Informacija o sliki je privzeto vidna', 'display_pic_info', 1), //cpg1.3.0
  array('IzloÄi grde besede v komentarjih', 'filter_bad_words', 1),
  array('Dovoli smeÂškote v komentarjih', 'enable_smilies', 1),
  array('Dovoli veÄ komentarjev od enega uporabnika (iklopi kontrolo smeti...)', 'disable_comment_flood_protect', 1), //cpg1.3.0
  array('Max. velikost za opis slike', 'max_img_desc_length', 0),
  array('Max. Âštevilo znakov v besedi', 'max_com_wlength', 0),
  array('Max. Âštevilo vrstic komentarja', 'max_com_lines', 0),
  array('Max. velikost komentarja', 'max_com_size', 0),
  array('PrikaÂži filmski trak z ikonami', 'display_film_strip', 1),
  array('ÂŠt. ikon na traku', 'max_film_strip_items', 0),
  array('Obvesti admin. o novem komentarju', 'email_comment_notification', 1), //cpg1.3.0
  array('Interval pri samodejnem predvajanju v mili sekundah (1 sekunda = 1000 mili sekund)', 'slideshow_interval', 0), //cpg1.3.0

  'Nastavitve slik in ikon', //cpg1.3.0
  array('Kvaliteta za JPEG datoteke', 'jpeg_qual', 0),
  array('Max. velikost za ikone <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0), //cpg1.3.0
  array('Velikost uporabi za Âširino ali viÂšino ali razmerje ikone<b>**</b>', 'thumb_use', 7),
  array('Ustvari vmesne slike','make_intermediate',1),
  array('Max. Âširina ali viÂšina vmesnih slik/videa <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0), //cpg1.3.0
  array('Max. velikost datotek/slik (kB)', 'max_upl_size', 0), //cpg1.3.0
  array('Max. Âširina ali viÂšina dodanih slik/videa (pixli)', 'max_upl_width_height', 0), //cpg1.3.0

  'Dodatne nastavitve slik in ikon', //cpg1.3.0
  array('PrikaÂži ikone privatnih albumov neprijavljenim uporabnikom','show_private',1), //cpg1.3.0
  array('Prepovedani znaki v imenih datotek', 'forbiden_fname_char',0), //cpg1.3.0
  //array('Accepted file extensions for uploaded pictures', 'allowed_file_extensions',0), //cpg1.3.0
  array('Dovoljene vrste datotek za dodajanje slik', 'allowed_img_types',0), //cpg1.3.0
  array('Dovoljene vrste datotek za dodajanje filmov', 'allowed_mov_types',0), //cpg1.3.0
  array('Dovoljene vrste datotek za audio', 'allowed_snd_types',0), //cpg1.3.0
  array('Dovoljene vrste datotek', 'allowed_doc_types',0), //cpg1.3.0
  array('NaÄin kreiranja ikon','thumb_method',2), //cpg1.3.0
  array('Pot do ImageMagick programa (example /usr/bin/X11/)', 'impath', 0), //cpg1.3.0
  //array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types',0), //cpg1.3.0
  array('Opcija za ukazno vrstico od ImageMagick', 'im_options', 0), //cpg1.3.0
  array('PrikaÂži EXIF podatke v JPEG datotekah', 'read_exif_data', 1), //cpg1.3.0
  array('PrikaÂži IPTC podatke v JPEG datotekah', 'read_iptc_data', 1), //cpg1.3.0
  array('Direktorij za albume <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0), //cpg1.3.0
  array('Direktorij za slike od uporabnikov <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0), //cpg1.3.0
  array('Predpona za vmesne slike <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0), //cpg1.3.0
  array('Predpona za ikone <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0), //cpg1.3.0
  array('Privzete pravice za direktorije', 'default_dir_mode', 0), //cpg1.3.0
  array('Privzete pravice za slike', 'default_file_mode', 0), //cpg1.3.0

  'Nastavitve uporabnikov',
  array('Dovoli registriranje novih uporabnikov', 'allow_user_registration', 1),
  array('Registracija zahteva preverjanje e-mail naslova', 'reg_requires_valid_email', 1),
  array('Obvesti admina o novi registraciji', 'reg_notify_admin_email', 1), //cpg1.3.0
  array('Dva uporabnika lahko imata enak e-mail naslov', 'allow_duplicate_emails_addr', 1),
  array('Uporabniki imajo lahko privatne albume (Opomba: Äe preklopiÂš iz DA na NE bodo trenutni privatni albumi postali javni)', 'allow_private_albums', 1), //cpg1.3.0
  array('Obvesti admina o ÄakajoÄih slikah za odobritev', 'upl_notify_admin_email', 1), //cpg1.3.0
  array('Dovoli prijavljenim uporabnikom ogled seznama Älanov', 'allow_memberlist', 1), //cpg1.3.0

  'Dodatna polja za vpis informacij o sliki (pusti prazno, Äe ne uporabljaÂš)',
  array('Polje 1', 'user_field1_name', 0),
  array('Polje 2', 'user_field2_name', 0),
  array('Polje 3', 'user_field3_name', 0),
  array('Polje 4', 'user_field4_name', 0),

  'PiÂškotki',
  array('Ime za piÂškotke, ki jih uporablja galerija (Äe uporabljaÂš Âše bbs, poskrbi za razliÄno ime od piÂškotkov bbs-ja)', 'cookie_name', 0),
  array('Pot do piÂškotkov', 'cookie_path', 0),

  'Ostale nastavitve',
  array('VkljuÄi naÄin za odkrivanje napak', 'debug_mode', 9), //cpg1.3.0
  array('PrikaÂži opombe v naÄinu za odkrivanje napak', 'debug_notice', 1), //cpg1.3.0

  '<br /><div align="left"><a name="notice1"></a>(*) Teh nastavitev ni dovoljeno spreminjati, ko so v galeriji Âže slike.<br />
  <a name="notice2"></a>(**) ÄŒe spremeniÂš te nastavitve, bodo vplivale samo na slike dodane od spremembe naprej. ÂŽeljene spremembe lahko izvedeÂš tudi na Âže obstojeÄih slikah z uporabo &quot;<a href="util.php">administracijskih orodij</a> (spreminjanje velikosti slik)&quot; pripomoÄka, ki se nahaja v administracijskem meniju.</div><br />', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'PoÂšlji e-razglednico', //cpg1.3.0
  'ecard_sender' => 'PoÂšiljatelj', //cpg1.3.0
  'ecard_recipient' => 'Naslovnik', //cpg1.3.0
  'ecard_date' => 'Datum', //cpg1.3.0
  'ecard_display' => 'PrikaÂži e-razglednico', //cpg1.3.0
  'ecard_name' => 'Ime', //cpg1.3.0
  'ecard_email' => 'e-mail', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'naraÂšÄajoÄe', //cpg1.3.0
  'ecard_descending' => 'padajoÄe', //cpg1.3.0
  'ecard_sorted' => 'Sortirano', //cpg1.3.0
  'ecard_by_date' => 'po datumu', //cpg1.3.0
  'ecard_by_sender_name' => 'po poÂšiljateljevem imenu', //cpg1.3.0
  'ecard_by_sender_email' => 'po poÂšiljateljevem e-mail naslovu', //cpg1.3.0
  'ecard_by_sender_ip' => 'po poÂšiljateljevi IP Âštevilki', //cpg1.3.0
  'ecard_by_recipient_name' => 'po naslovnikovem imenu', //cpg1.3.0
  'ecard_by_recipient_email' => 'po naslovnikovem e-mail naslovu', //cpg1.3.0
  'ecard_number' => 'prikazani zapisi od %s do %s (vseh zapisov: %s', //cpg1.3.0
  'ecard_goto_page' => 'pojdi na stran', //cpg1.3.0
  'ecard_records_per_page' => 'Zapisov po strani', //cpg1.3.0
  'check_all' => 'OznaÄi vse', //cpg1.3.0
  'uncheck_all' => 'OdznaÄi vse', //cpg1.3.0
  'ecards_delete_selected' => 'BriÂši oznaÄeno', //cpg1.3.0
  'ecards_delete_confirm' => 'Si prepriÄan, da ÂželiÂš to narediti? OznaÄi ustrezno polje!', //cpg1.3.0
  'ecards_delete_sure' => 'Sem prepriÄan!', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Vpisati moraÂš ime in komentar',
  'com_added' => 'Komentar je bil dodan',
  'alb_need_title' => 'Vpisati moraÂš ime za album!',
  'no_udp_needed' => 'Posodobitve niso potrebne.',
  'alb_updated' => 'Album je bil posodobljen',
  'unknown_album' => 'Izbrani album ne obstaja ali pa nimaÂš pravic za dodajanje slik v njega',
  'no_pic_uploaded' => 'Nobena slika ni bila dodana!<br /><br />ÄŒe si resniÄno poslal sliko, preveri ali je to sploh dovoljeno...', //cpg1.3.0
  'err_mkdir' => 'Kreiranje direktorija %s ni bilo uspeÂšno!',
  'dest_dir_ro' => 'ÂŽeljeni direktorij %s ne omogoÄa pisanja - pravice!',
  'err_move' => 'NemogoÄe je premakniti %s v %s !',
  'err_fsize_too_large' => 'Dimenzije slike so prevelike (dovoljeno je %s x %s)!', //cpg1.3.0
  'err_imgsize_too_large' => 'Velikost datoteke presega limit (dovoljeno je %s kB)!',
  'err_invalid_img' => 'Poslana slika ni v pravilnem formatu!',
  'allowed_img_types' => 'DodaÂš lahko samo %s slike.',
  'err_insert_pic' => 'Slike \'%s\' se ne da dodati v album ', //cpg1.3.0
  'upload_success' => 'Tvoja slika je bila dodana.<br /><br />Vidna bo takoj po administratorjevi odobritvi.', //cpg1.3.0
  'notify_admin_email_subject' => '%s - slik za odobritev', //cpg1.3.0
  'notify_admin_email_body' => 'Dodane so bile slike (poÂšiljatelj: %s) in Äakajo na odobritev. ObiÂšÄi %s', //cpg1.3.0
  'info' => 'Informacija',
  'com_added' => 'Komentar dodan',
  'alb_updated' => 'Album posodobljen',
  'err_comment_empty' => 'Komentar je prazen!',
  'err_invalid_fext' => 'Veljavne so samo datoteke z naslednjimi konÄnicami: <br /><br />%s.',
  'no_flood' => 'Oprosti, ampak si Âže avtor zadnjega komentarja za to sliko<br /><br />Izberi urejanje,Äe ga ÂželiÂš spremeniti', //cpg1.3.0
  'redirect_msg' => 'Prestavljen boÂš na novo stran.<br /><br /><br />Klikni \'NAPREJ\', Äe se stran samodejno ne zamenja',
  'upl_success' => 'Tvoje slike so bile uspeÂšno dodane', //cpg1.3.0
  'email_comment_subject' => 'Dodan komentar v galerijo', //cpg1.3.0
  'email_comment_body' => 'Nekdo je vpisal komentar v galerijo. Poglej ga', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Naslov',
  'fs_pic' => 'velika slika',
  'del_success' => 'uspeÂšno pobrisano',
  'ns_pic' => 'normalna velikost slike',
  'err_del' => 'brisanje ni moÂžno',
  'thumb_pic' => 'ikona',
  'comment' => 'komentar',
  'im_in_alb' => 'slika v albumu',
  'alb_del_success' => 'Album \'%s\' pobrisan',
  'alb_mgr' => 'Urejanje albumov',
  'err_invalid_data' => 'NapaÄni podatki v \'%s\'',
  'create_alb' => 'Kreiram album \'%s\'',
  'update_alb' => 'Posodabljam album \'%s\' z naslovom \'%s\' in indeksom \'%s\'',
  'del_pic' => 'PobriÂši sliko', //cpg1.3.0
  'del_alb' => 'PobriÂši album',
  'del_user' => 'PobriÂši uporabnika',
  'err_unknown_user' => 'Izbrani uporabnik ne obstaja!',
  'comment_deleted' => 'Komentar uspeÂšno pobrisan',
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
  'confirm_del' => 'Res ÂželiÂš pobrisati to sliko? \\nTudi komentarji od nje bodo pobrisani.', //js-alert //cpg1.3.0
  'del_pic' => 'POBRIÂŠI TO SLIKO', //cpg1.3.0
  'size' => '%s x %s pixlov',
  'views' => '%s krat',
  'slideshow' => 'Samodejno predvajanje',
  'stop_slideshow' => 'Ustavi predvajanje',
  'view_fs' => 'Klikni za ogled veÄje slike',
  'edit_pic' => 'Uredi opis', //cpg1.3.0
  'crop_pic' => 'ObreÂži in rotiraj', //cpg1.3.0
);

$lang_picinfo = array(
  'title' =>'Informacija o sliki', //cpg1.3.0
  'Filename' => 'Ime datoteke',
  'Album name' => 'Ime albuma',
  'Rating' => 'Ocena (Âšt. glasov:%s)',
  'Keywords' => 'KljuÄne besede',
  'File Size' => 'Velikost datoteke',
  'Dimensions' => 'Velikost slike',
  'Displayed' => 'ÂŠt. ogledov',
  'Camera' => 'Kamera',
  'Date taken' => 'Datum posnetka',
  'Aperture' => 'Zaslonka',
  'Exposure time' => 'ÄŒas',
  'Focal length' => 'GoriÂšÄna razdalja',
  'Comment' => 'Komentar',
  'addFav'=>'Dodaj med priljubljene', //cpg1.3.0
  'addFavPhrase'=>'Priljubljene', //cpg1.3.0
  'remFav'=>'Odstrani iz priljubljenih', //cpg1.3.0
  'iptcTitle'=>'IPTC naziv', //cpg1.3.0
  'iptcCopyright'=>'IPTC Copyright', //cpg1.3.0
  'iptcKeywords'=>'IPTC kljuÄne besede', //cpg1.3.0
  'iptcCategory'=>'IPTC kategorija', //cpg1.3.0
  'iptcSubCategories'=>'IPTC pod kategorija', //cpg1.3.0
);

$lang_display_comments = array(
  'OK' => 'DA',
  'edit_title' => 'Uredi komentar',
  'confirm_delete' => 'Res ÂželiÂš pobrisati komentar?', //js-alert
  'add_your_comment' => 'Dodaj komentar',
  'name'=>'Ime',
  'comment'=>'Komentar',
  'your_name' => 'AnonimneÂž',
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Klikni sliko, da zapreÂš to okno',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'PoÂšlji e-razglednico',
  'invalid_email' => '<b>Opozorilo</b>: napaÄni e-mail naslov!',
  'ecard_title' => 'To je e-razglednica od %s za tebe',
  'error_not_image' => 'Samo slike je moÂžno poslati kot razglednico.', //cpg1.3.0
  'view_ecard' => 'ÄŒe razglednice ne vidiÂš pravilno, klikni na to povezavo',
  'view_more_pics' => 'Klikni tukaj za ogled veÄih slik!',
  'send_success' => 'Razglednica je bila poslana',
  'send_failed' => 'Oprosti, ampak server ne omogoÄa poÂšiljanja razglednic...',
  'from' => 'Od',
  'your_name' => 'Tvoje ime',
  'your_email' => 'Tvoj e.mail naslov',
  'to' => 'Za',
  'rcpt_name' => 'Naslovnikovo ime',
  'rcpt_email' => 'Naslovnikov e-mail naslov',
  'greetings' => 'Pozdrav',
  'message' => 'SporoÄilo',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Informacija o sliki', //cpg1.3.0
  'album' => 'Album',
  'title' => 'Naziv',
  'desc' => 'Opis',
  'keywords' => 'KljuÄne besede',
  'pic_info_str' => '%s &times; %s - %s kB - %s ogledov - %s ocen',
  'approve' => 'Odobri sliko', //cpg1.3.0
  'postpone_app' => 'PreloÂži odobritev',
  'del_pic' => 'PobriÂši sliko', //cpg1.3.0
  'read_exif' => 'Preberi EXIF podatke Âše enkrat', //cpg1.3.0
  'reset_view_count' => 'Resetiraj Âštevec ogledov',
  'reset_votes' => 'Resetiraj ocene',
  'del_comm' => 'PobriÂši komentarje',
  'upl_approval' => 'Dodaj odobritev',
  'edit_pics' => 'Uredi sliko', //cpg1.3.0
  'see_next' => 'Naslednje slike', //cpg1.3.0
  'see_prev' => 'predhodne slike', //cpg1.3.0
  'n_pic' => '%s slik', //cpg1.3.0
  'n_of_pic_to_disp' => 'ÂŠtevilo slik za prikaz', //cpg1.3.0
  'apply' => 'Izvedi spremembe', //cpg1.3.0
  'crop_title' => 'Urejanje slik', //cpg1.3.0
  'preview' => 'Predogled', //cpg1.3.0
  'save' => 'Shrani sliko', //cpg1.3.0
  'save_thumb' =>'Shrani kot ikono', //cpg1.3.0
  'sel_on_img' =>'Izbrano podroÄje mora biti na sliki!', //js-alert //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Pogosto zastavljena vpraÂšanja', //cpg1.3.0
  'toc' => 'Kazalo', //cpg1.3.0
  'question' => 'VpraÂšanje: ', //cpg1.3.0
  'answer' => 'Odgovor: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'Osnovna vpraÂšanja', //cpg1.3.0
  array('Zakaj je potrebna registracija?', 'Registracija je ali pa ni potrebna - o tem odloÄa administrator. Registracija daje Älanom dodatne moÂžnosti kot je dodajanje slik, kreiranje priljubljenih slik, urejanje albumov, ocenjevanje slik, dodajanje komentarjev....', 'allow_user_registration', '0'), //cpg1.3.0
  array('Kako se registriram?', 'Pojdi na &quot;Registracija&quot; in izpolni obrazec.<br />ÄŒe je administrator vklopil obveÂšÄanje preko e-mail naslovov, prejmeÂš na svoj e-mail naslov sporoÄilo z navodili za aktiviranje svojega raÄuna in s tem boÂš imel moÂžnost, da se s svojimi podatki potem prijaviÂš.', 'allow_user_registration', '1'), //cpg1.3.0
  array('Kako se prijavim?', 'Pojdi na &quot;Prijava&quot;, vpiÂši svoje uporabniÂško ime in geslo, odkljukaj polje &quot;Zapomni si me&quot; in boÂš prijavljen.<br /><b>POMEMBNO:omogoÄeno moraÂš imeti uporabo piÂškotkov in pa le-ti ne smejo biti pobrisani, Äe hoÄeÂš izkoristiti tudi opcijo &quot;Zapomni si me&quot;.</b>', 'offline', 0), //cpg1.3.0
  array('Zakaj se ne morem prijaviti?', 'Si se Âže registriral in odgovoril na povezavo, ki ti je bila poslana preko e-mail sporoÄila?. Poslana povezava sluÂži za aktiviranje tvojega raÄuna. Za ostale teÂžave pri prijavi poÂšlji e-mail administratorju.', 'offline', 0), //cpg1.3.0
  array('Kaj Äe pozabim geslo?', 'ÄŒe se le da, uporabi povezavo &quot;Pozabljeno geslo&quot;. V nasprotnem primeru poÂšlji e-mail administratorju in zaprosi za novo geslo.', 'offline', 0), //cpg1.3.0
  //array('Kaj Äe sem spremenil svoj e-mail naslov?', 'Prijavi se in v svojih nastavitvah popravi naslov. Uporabi povezavo &quot;Profil&quot;', 'offline', 0), //cpg1.3.0
  array('Kako shranim sliko v &quot;Moji favoriti&quot;?', 'Klikni na sliko in vklopi prikaz &quot;informacija o sliki&quot; (<img src="images/info.gif" width="16" height="16" border="0" alt="Informacija o sliki" />); v okvirÄku s podatki najdeÂš povezavo &quot;Dodaj med priljubljene&quot;.<br />Informacija o sliki je mogoÄe Âže vklopljena, kar pa je odvisno od nastavitev same galerije.<br />POMEMBNO:omogoÄeno moraÂš imeti uporabo piÂškotkov in pa le-ti ne smejo biti pobrisani.', 'offline', 0), //cpg1.3.0
  array('Kako lahko ocenim sliko?', 'Pri ogledu posamezne slike imaÂš moÂžnost tudi oceniti le-to (seveda le, Äe je to dovoljeno s strani lastnika albuma). Klikni na slikico, ki predstavlja posamezno oceno.', 'offline', 0), //cpg1.3.0
  array('Kako lahko dodam komentar?', 'Pri ogledu posamezne slike imaÂš moÂžnost tudi dodati svoj komentar (seveda le, Äe je to dovoljeno s strani lastnika albuma).', 'offline', 0), //cpg1.3.0
  array('Kako lahko dodam svojo sliko?', 'Izberi &quot;Nalaganje slik&quot;in doloÄi najprej album v katerega jo ÂželiÂš dodati, klikni na &quot;Prebrskaj&quot; in najdi sliko na disku, ki jo ÂželiÂš dodati. Ko jo najdeÂš, klikni &quot;odpri/open&quot; (vpiÂši naslov za sliko in opis, Äe ÂželiÂš) in klikni konÄno Âše &quot;Dodaj sliko&quot;', 'allow_private_albums', 0), //cpg1.3.0
  array('Kam lahko dodam sliko?', 'ImaÂš moÂžnost, da jo dodaÂš v enega od svojih albumov v &quot;Moja galerija&quot; ali pa, v katerikoli drugi album, Äe je administrator to omogoÄil.', 'allow_private_albums', 0), //cpg1.3.0
  array('Kako velike in kakÂšne vrste slik lahko dodam?', 'Velikost in vrsta slik (jpg,gif,...) sta doloÄena s strani administratorja.', 'offline', 0), //cpg1.3.0
  array('Kaj je &quot;Moja galerija&quot;?', '&quot;Moja galerija&quot; je osebna galerija, ki jo lahko imajo registrirani uporabniki. OmogoÄa pa samostojno urejanje in upravljanje s slikami in albumi.', 'allow_private_albums', 0), //cpg1.3.0
  array('Kako lahko ustvarim, spremenim ali briÂšem albume v&quot;Moji galeriji&quot;?', 'Biti moraÂš prijavljen in v &quot;naÄinu za administracijo&quot;<br />Klikni na &quot;Ustvari/naroÄi svoj album&quot; in klikni na &quot;Novo&quot;. Spremeni &quot;Novi album&quot; v svoje Âželjeno ime za album.<br />V svoji galeriji lahko tako preimenujeÂš kateri koli album.<br />Klikni na &quot;Izvedi spremembe&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Kako lahko doloÄim, da ostali ne vidijo slik v mojem albumu?', 'Biti moraÂš prijavljen in v &quot;naÄinu za administracijo&quot;<br />Klikni na &quot;Spremeni svoj album&quot; Sedaj lahko nastaviÂš moÂžnosti za tvoj album (dovoliÂš dodajanje slik, ocenjevanje slik, dodajanje komentarjev in pa dostop do albuma).<br />Na koncu klikni Âše &quot;Posodobi album&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Kako lahko vidim albume od ostalih uporabnikov?', 'Klikni na &quot;Seznam albumov ali logotip od galerije &quot; in izberi kategorijo &quot;UporabniÂške galerije&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Kaj so piÂškotki?', 'PiÂškotki so majhbe tekstovne datoteke, ki jih web stran shrani na tvojem raÄunalniku.<br />piÂškotki omogoÄajo laÂžjo prijavo na web strani.', 'offline', 0), //cpg1.3.0
  array('Kje lahko najdem ta program za svoje web strani?', 'Coppermine je prosta multimedijska galerija, objavljena pod GNU GPL. OmogoÄa veliko raznoraznih funkcij in je predvidena za razliÄne sisteme. ObiÂšÄi <a href="http://coppermine.sf.net/">domaÄo stran od Coppermine galerije</a> za download in ostale informacije.', 'offline', 0), //cpg1.3.0

  'Navigacija po straneh', //cpg1.3.0
  array('Kaj je &quot;Seznam albumov&quot;?', 'To je popolni seznam povezav do posameznih kategorij in/ali albumov v galeriji. Ikone so lahko tudi povezava do posamezne kategorije.', 'offline', 0), //cpg1.3.0
  array('Kaj je &quot;Moja galerija&quot;?', 'To je moÂžnost, da uporabniki ustvarijo svoje albume in v njih dodajajo, urejajo in briÂšejo slike brez posredovanja administratorja.', 'allow_private_albums', 0), //cpg1.3.0
  array('KakÂšna je razlika med &quot;Administracijo&quot; in &quot;UporabniÂškim naÄinom&quot;?', 'Administracija omogoÄa uporabnikom spreminjanje oz. urejanje svojih albumov in s tem slik.', 'allow_private_albums', 0), //cpg1.3.0
  array('Kaj pomeni &quot;Nalaganje slik&quot;?', 'To je moÂžnost, da v posamezni album dodajaÂš slike (vrsta in velikost ter album so doloÄeni s strani administratorja).', 'allow_private_albums', 0), //cpg1.3.0
  array('Kaj pomeni &quot;Zadnje dodane slike&quot;?', 'Tukaj vidiÂš ikone od slik, ki so bile nazadnje naloÂžene na server.', 'offline', 0), //cpg1.3.0
  array('Kaj so &quot;Zadnji komentarji&quot;?', 'Tukaj vidiÂš vpisane zadnje komentarje k slikam s strani obiskovalcev.', 'offline', 0), //cpg1.3.0
  array('Kaj pomeni &quot;NajveÄ ogledov&quot;?', 'Tukaj vidiÂš seznam slik, ki so bile najveÄkrat pogledane s strani obiskovalcev.', 'offline', 0), //cpg1.3.0
  array('Kaj pomeni &quot;Najbolj ocenjeno&quot;?', 'Tukaj vidiÂš seznam slik, ki so dobile najveÄje ocene s strani obiskovalcev, prikazana je povpreÄna ocena (primer: 5 uporabnikov, vsak da oceno <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: slika bo imela povpreÄno oceno <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;Pet uporabnikov oceni sliko z ocenami od 1 do 5 (1,2,3,4,5) - rezultat bo povpreÄna ocena <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />Ocene so od <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (super) do <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (zaniÄ).', 'offline', 0), //cpg1.3.0
  array('Kaj so &quot;Moji favoriti&quot;?', 'To omogoÄa, da se v piÂškotek shrani seznam uporabniku najlepÂših slik.', 'offline', 0), //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Pozabljeno geslo', //cpg1.3.0
  'err_already_logged_in' => 'Trenutno si Âže prijavljen!', //cpg1.3.0
  'enter_username_email' => 'VpiÂši uporabniÂško ime ali e-mail naslov', //cpg1.3.0
  'submit' => 'naprej', //cpg1.3.0
  'failed_sending_email' => 'SporoÄila o pozabljenem geslu ni moÂžno poslati!', //cpg1.3.0
  'email_sent' => 'SporoÄilo s tvojim uporabniÂškim imenom in geslo je bilo poslano na %s', //cpg1.3.0
  'err_unk_user' => 'Vpisani uporabnik ne obstaja!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - pozabljeno geslo', //cpg1.3.0
  'passwd_reminder_body' => 'Tvoji podatki za prijavo:
UporabniÂško ime: %s
Geslo: %s
Klikni %s za prijavo.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Ime skupine',
  'disk_quota' => 'Velikost diska',
  'can_rate' => 'Lahko ocenjuje slike', //cpg1.3.0
  'can_send_ecards' => 'Lahko poÂšilja razglednice',
  'can_post_com' => 'Lahko dodaja komentarje',
  'can_upload' => 'Lahko dodaja slike', //cpg1.3.0
  'can_have_gallery' => 'Lahko ima osebno galerijo',
  'apply' => 'Izvedi spremembe',
  'create_new_group' => 'Ustvari novo skupino',
  'del_groups' => 'PobriÂši izbrano skupino',
  'confirm_del' => 'Opozorilo: pri brisanju skupine se vsi Älani premaknejo v skupino z imenom \'Registered\'!\n\nÂŽeliÂš nadaljevati?', //js-alert //cpg1.3.0
  'title' => 'Urejanje uporabniÂških skupin',
  'approval_1' => 'Javne odobritve slik (1)',
  'approval_2' => 'Privatne odobritve slik (2)',
  'upload_form_config' => 'Upload form configuration', //cpg1.3.0
  'upload_form_config_values' => array( 'Single file uploads only', 'Multiple file uploads only', 'URI uploads only', 'ZIP upload only', 'File-URI', 'File-ZIP', 'URI-ZIP', 'File-URI-ZIP'), //cpg1.3.0
  'custom_user_upload'=>'User may customize number of upload boxes?', //cpg1.3.0
  'num_file_upload'=>'Maximum/exact number of file upload boxes', //cpg1.3.0
  'num_URI_upload'=>'Maximum/exact number of URI upload boxes', //cpg1.3.0
  'note1' => '<b>(1)</b> Slike v javnih albumih potrebujejo odobritev za prikaz',
  'note2' => '<b>(2)</b> Slike v privatnih albumih potrebujejo odobritev za prikaz',
  'notes' => 'Opombe',
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'DobrodoÂšel!',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Res ÂželiÂš pobrisati ta album? \\nVse slike in komentarji v njem bodo tudi pobrisani.', //js-alert //cpg1.3.0
  'delete' => 'BRISANJE',
  'modify' => 'LASTNOSTI',
  'edit_pics' => 'UREJANJE', //cpg1.3.0
);

$lang_list_categories = array(
  'home' => 'Domov',
  'stat1' => 'ÂŠt. slik:<b>[pictures]</b> - Âšt. albumov:<b>[albums]</b> - Âšt. kategorij:<b>[cat]</b>  - Âšt. komentarjev:<b>[comments]</b> - Âšt. ogledov:<b>[views]</b>', //cpg1.3.0
  'stat2' => 'ÂŠt. slik:<b>[pictures]</b> - Âšt. albumov:<b>[albums]</b> - Âšt. ogledov<b>[views]</b>', //cpg1.3.0
  'xx_s_gallery' => 'Galerija od %s',
  'stat3' => 'ÂŠt. slik:<b>[pictures]</b> - Âšt. albumov:<b>[albums]</b> - Âšt. komentarjev:<b>[comments]</b>  - Âšt. ogledov:<b>[views]</b>', //cpg1.3.0
);

$lang_list_users = array(
  'user_list' => 'Seznam uporabnikov',
  'no_user_gal' => 'Brez uporabniÂških galerij',
  'n_albums' => 'ÂŠt. albumov:%s',
  'n_pics' => 'ÂŠt. slik:%s', //cpg1.3.0
);

$lang_list_albums = array(
  'n_pictures' => 'ÂŠt. slik:%s', //cpg1.3.0
  'last_added' => ', zadnja dodana %s',
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Prijava',
  'enter_login_pswd' => 'VpiÂši uporabniÂško ime in geslo',
  'username' => 'UporabniÂško ime',
  'password' => 'Geslo',
  'remember_me' => 'Zapomni si me',
  'welcome' => 'Pozdravljen/a %s ...',
  'err_login' => '*** Prijava ni uspelo. Poskusi znova ***',
  'err_already_logged_in' => 'Si Âže prijavljen!',
  'forgot_password_link' => 'Pozabil sem geslo', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Odjava',
  'bye' => 'Lepo pozdravljen %s ...',
  'err_not_loged_in' => 'Nisi prijavljen!',
);

// ------------------------------------------------------------------------- //
// File phpinfo.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP info', //cpg1.3.0
  'explanation' => 'To je rezultat, ki ga je generiral php ukaz <a href="http://www.php.net/phpinfo">phpinfo()</a>, prikazan s strani galerije.', //cpg1.3.0
  'no_link' => 'ÄŒe te podatke vidijo ostali je to lahko varnostno sporno. Zato jih lahko vidiÂš samo, Äe si prijavljen kot administrator. ÄŒeprav bi ostalim poslal pot do te strani, je ne bodo videli.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Posodobi album %s',
  'general_settings' => 'SploÂšne nastavitve',
  'alb_title' => 'Ime albuma',
  'alb_cat' => 'Kategorija od albuma',
  'alb_desc' => 'Opis albuma',
  'alb_thumb' => 'Ikona albuma',
  'alb_perm' => 'Pravice za ta album',
  'can_view' => 'Album lahko vidijo',
  'can_upload' => 'Obiskovalci lahko dodajajo slike',
  'can_post_comments' => 'Obiskovalci lahko dodajajo komentarje',
  'can_rate' => 'Obiskovalci lahko ocenjujejo slike',
  'user_gal' => 'UporabniÂška galerija',
  'no_cat' => '* Brez kategorije *',
  'alb_empty' => 'Album je prazen',
  'last_uploaded' => 'Zadnje dodano...',
  'public_alb' => 'Vsi (javni album)',
  'me_only' => 'Samo jaz',
  'owner_only' => 'Lastnik albuma (%s)',
  'groupp_only' => 'ÄŒlani skupine \'%s\'',
  'err_no_alb_to_modify' => 'Ni albumov, ki bi jih lahko urejal.',
  'update' => 'Posodobi album', //cpg1.3.0
  'notice1' => '(*) odvisno od %sskupine%s (lastnosti)', //cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Oprosti, ampak to sliko si Âže ocenil', //cpg1.3.0
  'rate_ok' => 'Tvoja ocena je bila zabeleÂžena',
  'forbidden' => 'Lastnih slik ne moreÂš ocenjevati.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
ÄŒeprav bo administrator {SITE_NAME} poskuÂšal odstraniti vsako neprimerno vsebino objavljeno v galeriji, je nemogoÄe hkrati in pravoÄasno pregledati vse kar je objavljeno s strani obiskovalcev. Zavedati se morate, da vse objavljeno na teh straneh predstavlja pogled in mnenje avtorja in ne administratorja oz. vzdrÂževalca teh spletnih strani (razen tistega kar je objavljeno z njune strani).<br />
<br />
S sodelovanjem na teh spletnih straneh se tudi strinjate, da ne boste objavljali nobenih obscenih, vulgarnih, Âžaljivih, seksualnih, sovraÂžnih, rasno nestrpnih in ostalih vsebin, ki so v nasprotju z veljavno zakonodajo. Strinjate se tudi, da ima aministrator in/ali moderator doloÄenih vsebin na {SITE_NAME} pravico v katerem koli trenutku odstraniti po njegovem mnenju sporni objavljeni prispevek. Kot uporabnik se strinjate, da je z vaÂše strani objavljeno gradivo shranjeno v bazi. ÄŒeprav ti podatki ne bodo posredovani nobeni tretji stranki, administrator oziroma skrbnik teh strani ne odgovarja za izgubljene podatke v primeru hekerskega poskusa kraje podatkov.<br />
<br />
Te spletne strani uporabljajo piÂškotke (cookies) za shranjevanje informacij na vaÂšem raÄunalniku. Ti podatki so namenjeni iskljuÄno temu, da vam olajÂšajo brskanje na teh straneh. VaÂš email naslov pa je uporabljen samo za to, da vam lahko posredujemo geslo za prijavo.<br />
<br />

S klikom na 'STRINJAM SE' potrjujete, da ste seznanjeni s pogoji sodelovanje na straneh {SITE_NAME} in da je poslano gradivo vaÂša osebna last. V nasprotnem primeru ste dolÂžni navesti izvor poslanega gradiva. Prav tako ste dolÂžni navesti kot izvor {SITE_NAME}, Äe uporabite gradivo s teh strani. Dovoljena je izkljuÄno uporaba v izobraÂževalne namene. Za vse ostale primere si morate priskrbeti dovoljenje lastnika teh strani.<br />
EOT;

$lang_register_php = array(
  'page_title' => 'Registracija',
  'term_cond' => 'Navodila in pogoji za sodelovanje',
  'i_agree' => 'STRINJAM SE',
  'submit' => 'PoÂšlji registracijo',
  'err_user_exists' => 'To uporabniÂško ime Âže obstaja, izberi si drugo',
  'err_password_mismatch' => 'Gesli se ne ujemata - ponovi vpis',
  'err_uname_short' => 'UporabniÂško ime mora imeti vsaj dva znaka',
  'err_password_short' => 'Geslo mora biti dolgo vsaj dva znaka',
  'err_uname_pass_diff' => 'UporabniÂško ime in geslo morata biti razliÄna',
  'err_invalid_email' => 'NapaÄni e-mail naslov!',
  'err_duplicate_email' => 'Ta e-mail naslov je nekdo Âže uporabil',
  'enter_info' => 'Vpis podatkov za registracijo',
  'required_info' => 'Obvezni podatki',
  'optional_info' => 'Neobvezni vpis',
  'username' => 'UporabniÂško ime',
  'password' => 'Geslo',
  'password_again' => 'Ponovi geslo',
  'email' => 'e-mail',
  'location' => 'Kraj',
  'interests' => 'Zanimanje',
  'website' => 'DomaÄa stran',
  'occupation' => 'Zaposlitev',
  'error' => 'NAPAKA',
  'confirm_email_subject' => '%s - registracija potrjena',
  'information' => 'Informacija',
  'failed_sending_email' => 'Ne morem poslati e-mail sporoÄila s podatki o registraciji!',
  'thank_you' => 'Hvala za registracijo.<br /><br />Navodila za aktiviranje raÄuna so bila poslana na vpisani e-mail naslov.',
  'acct_created' => 'Tvoj raÄun je bil ustvarjen - lahko se prijaviÂš s svojim uporabniÂškim imenom in geslom',
  'acct_active' => 'Tvoj raÄun je aktiven in se lahko prijaviÂš',
  'acct_already_act' => 'Tvoj raÄun je Âže aktiven!',
  'acct_act_failed' => 'Tega raÄuna ni moÂžno aktivirati!',
  'err_unk_user' => 'Izbrani uporabnik ne obstaja!',
  'x_s_profile' => 'Profil od %s',
  'group' => 'Skupina',
  'reg_date' => 'Datum pristopa',
  'disk_usage' => 'Velikost diska',
  'change_pass' => 'Spremeni geslo',
  'current_pass' => 'Staro geslo',
  'new_pass' => 'Novo geslo',
  'new_pass_again' => 'Novo geslo ponovno',
  'err_curr_pass' => 'Staro geslo ni pravilno',
  'apply_modif' => 'Izvedi spremembe',
  'change_pass' => 'Spremeni moje geslo',
  'update_success' => 'Profil je bil posodobljen',
  'pass_chg_success' => 'Geslo je bilo spremenjeno',
  'pass_chg_error' => 'Geslo ni bilo spremenjeno',
  'notify_admin_email_subject' => '%s - obvestilo o registraciji', //cpg1.3.0
  'notify_admin_email_body' => 'Registriral se je novi uporabnik "%s" ', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
Hvala za registracijo pri: {SITE_NAME}

Tvoje uporabniÂško ime je: "{USER_NAME}"
Tvoje geslo je: "{PASSWORD}"

ÄŒe ÂželiÂš aktivirati svoj raÄun, moraÂš klikniti na spodnjo povezavo
ali pa jo vpisati v naslovno vrstico brskalnika.

{ACT_LINK}

Lep pozdrav,

administrator od {SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'Prikaz komentarjev',
  'no_comment' => 'Ni komentarjev za prikaz',
  'n_comm_del' => 'ÂŠt. pobrisanik komentarjev:%s',
  'n_comm_disp' => 'ÂŠt. komentarjev za prikaz',
  'see_prev' => 'Poglej predhodnega',
  'see_next' => 'Poglej naslednjega',
  'del_comm' => 'PobriÂši izbrane komentarje',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
  0 => 'Iskanje slik',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Iskanje novih slik', //cpg1.3.0
  'select_dir' => 'Izberi direktorij',
  'select_dir_msg' => 'Ta ukaz ti omogoÄa dodajanje slik, ki si jih dodal na server s pomoÄjo FTP protokola.<br /><br />Izberi direktorij v katerega si dodal slike', //cpg1.3.0
  'no_pic_to_add' => 'Tu ni nobenih slik za dodajanje', //cpg1.3.0
  'need_one_album' => 'Za uporabo te funkcije moraÂš imeti vsaj en album',
  'warning' => 'Opozorilo',
  'change_perm' => 'pisanje v direktorij ni omogoÄeno, spremeni pravice v 755 ali 777 pred ponovnim poskusom dodajanja slik!', //cpg1.3.0
  'target_album' => '<b>Dodaj slike </b>%s<b> v </b>%s', //cpg1.3.0
  'folder' => 'Direktorij',
  'image' => 'Slika',
  'album' => 'Album',
  'result' => 'Rezultat',
  'dir_ro' => 'Pisanje onemogoÄeno. ',
  'dir_cant_read' => 'Branje onemogoÄeno. ',
  'insert' => 'Dodajanje novih slik v galerijo', //cpg1.3.0
  'list_new_pic' => 'Seznam novih slik', //cpg1.3.0
  'insert_selected' => 'Dodaj izbrane slike', //cpg1.3.0
  'no_pic_found' => 'Brez novih slik', //cpg1.3.0
  'be_patient' => 'PotrpeÂžljivost... dodajanje traja nekaj Äasa', //cpg1.3.0
  'no_album' => 'nisi izbral albuma',  //cpg1.3.0
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : pomeni, da so slike uspeÂšno dodane'.
                          '<li><b>DP</b> : pomeni, da je slika duplikat in je Âže v bazi'.
                          '<li><b>PB</b> : pomeni, da slike ni moÂžno dodati. Preveri nastavitve in pravice za direktorij v katerem se nahajajo'.
                          '<li><b>NA</b> : pomeni, da nisi izbral albuma za slike, klikni \'<a href="javascript:history.back(1)">nazaj</a>\' in izberi album. ÄŒe albuma Âše nimaÂš, <a href="albmgr.php">ustvari enega najprej</a></li>'.
                          '<li>ÄŒe ne vidiÂš oznak OK, DP ali PB, klikni na manjkajoÄo slikico za prikaz napake, ki jo generira PHP'.
                          '<li>Za osveÂžitev prikaza pritisni tipko "ponovno naloÂži/reload"  v svojem brskalniku'.
                          '</ul>', //cpg1.3.0
  'select_album' => 'izberi album', //cpg1.3.0
  'check_all' => 'OznaÄi vse', //cpg1.3.0
  'uncheck_all' => 'OdznaÄi vse', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Zavrni uporabnika',
  'user_name' => 'UporabniÂško ime',
  'ip_address' => 'IP naslov',
  'expiry' => 'PoteÄe (za trajno - pusti prazno)',
  'edit_ban' => 'Shrani spremembe',
  'delete_ban' => 'PobriÂši',
  'add_new' => 'Dodaj novo prepoved',
  'add_ban' => 'Dodaj',
  'error_user' => 'Ne najdem uporabnika', //cpg1.3.0
  'error_specify' => 'Vpisati moraÂš uporabniÂško ime ali IP Âštevilko', //cpg1.3.0
  'error_ban_id' => 'NapaÄna IP Âštevilka!', //cpg1.3.0
  'error_admin_ban' => 'Sebi ne moreÂš prepovedati dostopa!', //cpg1.3.0
  'error_server_ban' => 'PoskuÂšaÂš prepovedati dostop svojemu serverju? Tsk tsk, tega pa ne bom podpiral...', //cpg1.3.0
  'error_ip_forbidden' => 'Temu IP naslovu ne moreÂš prpovedati dostopa - je nepovezljiv (non-routable)!', //cpg1.3.0
  'lookup_ip' => 'Poglej IP naslov', //cpg1.3.0
  'submit' => 'NAPREJ!', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Dodaj sliko', //cpg1.3.0
  'custom_title' => 'Obrazec za dodajanje', //cpg1.3.0
  'cust_instr_1' => 'IzbereÂš lahko poljubno Âštevilo datotek za upload, vendar najveÄ kot je navedeno spodaj.', //cpg1.3.0
  'cust_instr_2' => 'ÂŠtevilka zahtevka', //cpg1.3.0
  'cust_instr_3' => 'Upload datotek (najveÄ): %s', //cpg1.3.0
  'cust_instr_4' => 'URI/URL upload (najveÄ): %s', //cpg1.3.0
  'cust_instr_5' => 'URI/URL upload:', //cpg1.3.0
  'cust_instr_6' => 'Upload datotek:', //cpg1.3.0
  'cust_instr_7' => 'Izberi Âštevilo posameznih naÄinov za upload in klikni \'NAPREJ\'. ', //cpg1.3.0
  'reg_instr_1' => 'NapaÄni ukaz za obrazec.', //cpg1.3.0
  'reg_instr_2' => 'Sedaj lahko dodaÂš/poÂšljeÂš svoje datoteke na server. Velikost posamezne datoteke ne sme preseÄi %s kB. ZIP datoteke dodane s pomoÄjo \'Upload datotek\' in \'URI/URL dodajanje\' bodo ostale kompresirane.', //cpg1.3.0
  'reg_instr_3' => 'ÄŒe hoÄeÂš, da bodo ZIP datoteke razpakirane, uporabi polje \'Dekompresivni ZIP upload\'.', //cpg1.3.0
  'reg_instr_4' => 'Ko uporabljaÂš URI/URL upload, vpiÂši pot do datoteke na naslednji naÄin: http://www.mojastran.com/images/slika.jpg', //cpg1.3.0
  'reg_instr_5' => 'Ko si izpolnil obrazec, klikni \'NAPREJ\'.', //cpg1.3.0
  'reg_instr_6' => 'Dekompresivni ZIP upload:', //cpg1.3.0
  'reg_instr_7' => 'Dodajanje slik:', //cpg1.3.0
  'reg_instr_8' => 'URI/URL upload:', //cpg1.3.0
  'error_report' => 'PoroÄilo o napaki', //cpg1.3.0
  'error_instr' => 'Tvoja zahteva za upload je povzroÄila napako:', //cpg1.3.0
  'file_name_url' => 'Slika ime/URL', //cpg1.3.0
  'error_message' => 'SporoÄilo o napaki', //cpg1.3.0
  'no_post' => 'Slike niso bile poslane.', //cpg1.3.0
  'forb_ext' => 'NapaÄna konÄnica datoteke.', //cpg1.3.0
  'exc_php_ini' => 'Prevelika datoteka/slika glede na dovoljeno nastavitev v php.ini.', //cpg1.3.0
  'exc_file_size' => 'Prevelika datoteka/slika glede na dovoljeno nastavitev v galeriji.', //cpg1.3.0
  'partial_upload' => 'Samo delno poslane/dodane slike.', //cpg1.3.0
  'no_upload' => 'Nobene slike ni bilo poslane/dodane.', //cpg1.3.0
  'unknown_code' => 'Neznana PHP koda o napaki.', //cpg1.3.0
  'no_temp_name' => 'No upload - No temp name.', //cpg1.3.0
  'no_file_size' => 'Datoteka ne vsebuje podatkov/pokvarjena', //cpg1.3.0
  'impossible' => 'Tega ni moÄ premakniti.', //cpg1.3.0
  'not_image' => 'Datoteka ni slika/pokvarjena', //cpg1.3.0
  'not_GD' => 'Slika ni dovoljena za GD knjiÂžnico(gif,jpg).', //cpg1.3.0
  'pixel_allowance' => 'Pixel toleranca prekoraÄena.', //cpg1.3.0
  'incorrect_prefix' => 'NapaÄen URI/URL prefix', //cpg1.3.0
  'could_not_open_URI' => 'Ne morem odpreti URI.', //cpg1.3.0
  'unsafe_URI' => 'Ni moÂžno preveriti varnosti.', //cpg1.3.0
  'meta_data_failure' => 'Meta podatki manjkajo', //cpg1.3.0
  'http_401' => '401 Dostop samo z geslom', //cpg1.3.0
  'http_402' => '402 Potrebno plaÄilo', //cpg1.3.0
  'http_403' => '403 Prepovedano', //cpg1.3.0
  'http_404' => '404 Ne najdem', //cpg1.3.0
  'http_500' => '500 Napaka na serverju', //cpg1.3.0
  'http_503' => '503 Tega ni na razpolago', //cpg1.3.0
  'MIME_extraction_failure' => 'MIME tipa podatka ne morem razbrati.', //cpg1.3.0
  'MIME_type_unknown' => 'Neznana MIME vrsta', //cpg1.3.0
  'cant_create_write' => 'Kreiranje datoteke ni uspelo.', //cpg1.3.0
  'not_writable' => 'Pisanje v datoteko ni uspelo.', //cpg1.3.0
  'cant_read_URI' => 'Ne morem prebrati URI/URL naslova', //cpg1.3.0
  'cant_open_write_file' => 'Ne morem odpreti URI datoteke za pisanje.', //cpg1.3.0
  'cant_write_write_file' => 'Ne morem pisati v URI datoteko.', //cpg1.3.0
  'cant_unzip' => 'Unzip ni uspel.', //cpg1.3.0
  'unknown' => 'Neznana napaka', //cpg1.3.0
  'succ' => 'UspeÂšno poslano na server', //cpg1.3.0
  'success' => 'ÂŠt. uspeÂšnih uploadov:%s.', //cpg1.3.0
  'add' => 'Klikni \'NAPREJ\' za dodajanje slik v album.', //cpg1.3.0
  'failure' => 'Dodajanje ni uspelo', //cpg1.3.0
  'f_info' => 'Podatki o sliki', //cpg1.3.0
  'no_place' => 'Predhodna slika ni bila dodana.', //cpg1.3.0
  'yes_place' => 'Predhodna slika je bila uspeÂšno dodana.', //cpg1.3.0
  'max_fsize' => 'najveÄja dovoljena velikost je %s kB',
  'album' => 'Album',
  'picture' => 'Slika', //cpg1.3.0
  'pic_title' => 'Ime slike', //cpg1.3.0
  'description' => 'Opis slike', //cpg1.3.0
  'keywords' => 'KljuÄne besede (loÄi s presledki)',
  'err_no_alb_uploadables' => 'Oprosti, trenutno nobeden album ne omogoÄa dodajanja slik', //cpg1.3.0
  'place_instr_1' => 'Dodaj vse slike sedaj. VpiÂšeÂš lahko tudi dodatne informacije za posamezno sliko.', //cpg1.3.0
  'place_instr_2' => 'Na dodajanje Äaka Âše veÄ slik. Prosim klikni \'NAPREJ\'.', //cpg1.3.0
  'process_complete' => 'UspeÂšno si dodal vse slike.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'title' => 'Urejanje uporabnikov',
  'name_a' => 'Ime naraÂšÄajoÄe',
  'name_d' => 'Ime padajoÄe',
  'group_a' => 'Skupina naraÂšÄajoÄe',
  'group_d' => 'Skupina padajoÄe',
  'reg_a' => 'Datum reg. naraÂšÄajoÄe',
  'reg_d' => 'Datum reg. padajoÄe',
  'pic_a' => 'ÂŠt. slik naraÂšÄajoÄe',
  'pic_d' => 'ÂŠt. slik padajoÄe',
  'disku_a' => 'Poraba diska naraÂšÄajoÄe',
  'disku_d' => 'Poraba diska padajoÄe',
  'lv_a' => 'Zadnji obiski naraÂšÄajoÄe', //cpg1.3.0
  'lv_d' => 'Zadnji obiski padajoÄe', //cpg1.3.0
  'sort_by' => 'Sortiraj uporabnike po',
  'err_no_users' => 'Tabela s podatki je prazna!',
  'err_edit_self' => 'Svojega prifila ne moreÂš spremeniti. Uporabi povezavo \'Moj profil\'',
  'edit' => 'UREJANJE',
  'delete' => 'BRISANJE',
  'name' => 'UporabniÂško ime',
  'group' => 'Skupina',
  'inactive' => 'Neaktivni',
  'operations' => 'Operacije',
  'pictures' => 'Slike', //cpg1.3.0
  'disk_space' => 'Porabljen prostor',
  'registered_on' => 'Registriran',
  'last_visit' => 'Zadnji obisk', //cpg1.3.0
  'u_user_on_p_pages' => 'ÂŠt. uporabnikov:%d (Âšt. strani:%d)',
  'confirm_del' => 'Res ÂželiÂš pobrisati tega uporabnika? \\nTudi njegove slike in albumi bodo pobrisani.', //js-alert //cpg1.3.0
  'mail' => 'POÂŠTA',
  'err_unknown_user' => 'Izbrani uporabnik ne obstaja!',
  'modify_user' => 'Uredi uporabnika',
  'notes' => 'Opombe',
  'note_list' => '<li>ÄŒe gesla ne ÂželiÂš spreminjati, pusti polje za geslo prazno',
  'password' => 'Geslo',
  'user_active' => 'Uporabnik je aktiven',
  'user_group' => 'Uporabnikova skupina',
  'user_email' => 'Uporabnikov email',
  'user_web_site' => 'Uporabnikova domaÄa stran',
  'create_new_user' => 'Ustvari novega uporabnika',
  'user_location' => 'Uporabnikova lokacija',
  'user_interests' => 'Uporabnikovo zanimanje',
  'user_occupation' => 'Uporabnikova zaposlitev',
  'latest_upload' => 'Zadnje dodano', //cpg1.3.0
  'never' => 'nikoli', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
  'title' => 'Spremeni velikost slik', //cpg1.3.0
  'what_it_does' => 'Kaj to pomeni',
  'what_update_titles' => 'Kreira imena slik iz imena datotek',
  'what_delete_title' => 'Brisanje imen',
  'what_rebuild' => 'Ponastavi ikone in spremeni velikost slik',
  'what_delete_originals' => 'PobriÂše originalne slike in jih nadomesti z novimi',
  'file' => 'Datoteka',
  'title_set_to' => 'naslov spremenjen v',
  'submit_form' => 'poÂšlji',
  'updated_succesfully' => 'uspeÂšno posodobljeno',
  'error_create' => 'NAPAKA pri kreiranju',
  'continue' => 'Nadaljuj na naslednjih slikah',
  'main_success' => 'Datoteka %s je bila uporabljena za originalno sliko', //cpg1.3.0
  'error_rename' => 'Napaka pri preimenovanju %s v %s',
  'error_not_found' => 'Ne najdem datoteke %s',
  'back' => 'nazaj na glavno stran',
  'thumbs_wait' => 'Poteka posodabljanje ikon in/ali spreminjanje slik, prosim poÄakaj...',
  'thumbs_continue_wait' => 'Nadaljujem s posodabljanjem ikon in/ali slik, prosim poÄakaj...',
  'titles_wait' => 'Posodabljanje naslovov, prosim poÄakaj...',
  'delete_wait' => 'Brisanje naslovov, prosim poÄakaj...',
  'replace_wait' => 'Brisanje originalnih slik in nadomeÂšÄanje s spremenjenimi, prosim poÄakaj...',
  'instruction' => 'Kratka navodila',
  'instruction_action' => 'Izberi ukaz',
  'instruction_parameter' => 'Nastavi parametre',
  'instruction_album' => 'Izberi album',
  'instruction_press' => 'Pritisni %s',
  'update' => 'Posodobi ikone in/ali spremenjene slike',
  'update_what' => 'Kaj naj posodobim',
  'update_thumb' => 'Samo ikone',
  'update_pic' => 'Samo spremenjene slike',
  'update_both' => 'Ikone in spremenjene slike',
  'update_number' => 'ÂŠtevilo slik za spreminjanje za vsak klik',
  'update_option' => '(Poskusi z manjÂšo vrednostjo, Äe pride do poteka Äasa med izvajanjem opracije)',
  'filename_title' => 'Ime datoteke &rArr; Ime slike', //cpg1.3.0
  'filename_how' => 'Kako naj pretvorim ime datoteke',
  'filename_remove' => 'Odstrani konÄnico .jpg in nadomesti _ (podÄrtaj) s presledki',
  'filename_euro' => 'Spremeni 2003_11_23_13_20_20.jpg v 23/11/2003 13:20',
  'filename_us' => 'Spremeni 2003_11_23_13_20_20.jpg v 11/23/2003 13:20',
  'filename_time' => 'Spremeni 2003_11_23_13_20_20.jpg v 13:20',
  'delete' => 'PobriÂši naslove slik ali originalne slike', //cpg1.3.0
  'delete_title' => 'PobriÂši naslove slik', //cpg1.3.0
  'delete_original' => 'PobriÂši originalne slike',
  'delete_replace' => 'PobriÂši originalne slike, nadomesti jih s spremenjenimi (po velikosti)',
  'select_album' => 'Izberi album',
  'delete_orphans' => 'PobriÂši komentarje, ki ne pripadajo nobeni sliki (deluje na vseh albumih)', //cpg1.3.0
  'orphan_comment' => 'najden komentar brez "lastnika"', //cpg1.3.0
  'delete' => 'Brisanje', //cpg1.3.0
  'delete_all' => 'PobriÂši vse', //cpg1.3.0
  'comment' => 'Komentar: ', //cpg1.3.0
  'nonexist' => 'pripeto k neobstojeÄi sliki # ', //cpg1.3.0
  'phpinfo' => 'PrikaÂži phpinfo', //cpg1.3.0
  'update_db' => 'Posodobi bazo', //cpg1.3.0
  'update_db_explanation' => 'ÄŒe si zamenjal kakÂšne datoteke od galerije, dodal spremembe ali nadgradil s prejÂšnje verije, izvedi vsaj enkrat ukaz "posodobi bazo". To bo naredilo potrebne spremembe v bazi, kreiralo manjkajoÄe tabele in nastavilo potrebne vrednosti za delovanje v konfiguracijskih tabelah.', //cpg1.3.0
);

?>
