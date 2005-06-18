<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.3.0                                            //
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
// $Id: slovenian-utf-8.php,v 1.8 2004/12/29 23:06:33 chtito Exp $
// ------------------------------------------------------------------------- //

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Slovenian',
  'lang_name_native' => 'Slovenščina',
  'lang_country_code' => 'sl',
  'trans_name'=> 's55hh',
  'trans_email' => 's55hh@slovhf.net',
  'trans_website' => 'http://prekmurje.info/',
  'trans_date' => '2004-03-18',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytov', 'kB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Ne', 'Po', 'To', 'Sr', 'Če', 'Pe', 'So');
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
  'random' => 'Naključne datoteke', //cpg1.3.0
  'lastup' => 'Zadnje dodano',
  'lastalb'=> 'Zadnji posodobljeni album',
  'lastcom' => 'Zadnji komentarji',
  'topn' => 'Največ ogledov',
  'toprated' => 'Naj ocene',
  'lasthits' => 'Zadnji ogledi',
  'search' => 'Rezultati iskanja',
  'favpics'=> 'Priljubljene datoteke', //cpg1.3.0
);

$lang_errors = array(
  'access_denied' => 'Nimaš pravic za dostop do te strani.',
  'perm_denied' => 'Nimaš pravic za izvedbo tega ukaza.',
  'param_missing' => 'Manjkajo podatki za izvedbo...',
  'non_exist_ap' => 'Izbrani album/slika ne obstaja!', //cpg1.3.0
  'quota_exceeded' => 'Disk je poln<br /><br />Na razpolago imaš [quota]K, tvoje slike pa trenutno zasedajo [space]K, če bi dodal pa še to sliko, bi prekoračil prostor na disku.', //cpg1.3.0
  'gd_file_type_err' => 'Pri uporabi GD knjižnice lahko uporabiš samo JPEG in PNG slike.',
  'invalid_image' => 'Poslana slika je poškodovana ali pa ni v pravilnem formatu za GD knjižnico.',
  'resize_failed' => 'Ne morem narediti ikone ali pomanjšane slike.',
  'no_img_to_display' => 'Trenutno še brez slik',
  'non_exist_cat' => 'Izbrana kategorija ne obstaja',
  'orphan_cat' => 'Kategorija ima določeno neobstoječo nadrejeno kategorijo. Popravi napako v nastavitvah.', //cpg1.3.0
  'directory_ro' => 'Direktorij \'%s\' ne dopušča pisanja, slik ni možno pobrisati', //cpg1.3.0
  'non_exist_comment' => 'Izbrani komentar ne obstaja.',
  'pic_in_invalid_album' => 'Slika je v neobstoječem albumu (%s)!?', //cpg1.3.0
  'banned' => 'Trenutno imaš prepoved dostopa do teh strani.',
  'not_with_udb' => 'Ta ukaz je onemogočen, ker je premaknjen v forum. Ali to kar želiš narediti ni omogočeno v nastavitvah ali pa je predvideno za izvedbo v forumu.',
  'offline_title' => 'Izklopljeno', //cpg1.3.0
  'offline_text' => 'Galerija je trenutno izklopljena - preveri pozneje...', //cpg1.3.0
  'ecards_empty' => 'Trenutno ni podatkov o poslanih e-razglednicah. Preveri, če je v nastavitvah vklopljeno beleženje poslanih e-razglednic!', //cpg1.3.0
  'action_failed' => 'Ukaz je bil prekinjen. Tvojega zahtevka ni možno izvesti.', //cpg1.3.0
  'no_zip' => 'Potrebna knjižnica za izvedbo ZIP datoteke manjka. Sporoči napako administratorju galerije.', //cpg1.3.0
  'zip_type' => 'Nimaš dovoljenja za nalaganje ZIP datotek.', //cpg1.3.0
);

$lang_bbcode_help = 'Naslednje kode so lahko v pomoč: <li>[b]<b>Povdarjeno</b>[/b]</li> <li>[i]<i>Poševno</i>[/i]</li> <li>[url=http://tvojastran.com/]Url besedilo[/url]</li> <li>[email]nekaj@domain.com[/email]</li>'; //cpg1.3.0

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
  'usr_mode_title' => 'Preklop v uporabniški način',
  'usr_mode_lnk' => 'Uporabniški način',
  'upload_pic_title' => 'Naloži sliko v album', //cpg1.3.0
  'upload_pic_lnk' => 'Nalaganje slik', //cpg1.3.0
  'register_title' => 'Ustvari račun',
  'register_lnk' => 'Registracija',
  'login_lnk' => 'Prijava',
  'logout_lnk' => 'Odjava',
  'lastup_lnk' => 'Zadnje dodane slike',
  'lastcom_lnk' => 'Zadnji komentarji',
  'topn_lnk' => 'Največ ogledov',
  'toprated_lnk' => 'Najbolj ocenjeno',
  'search_lnk' => 'Iskanje',
  'fav_lnk' => 'Moji favoriti',
  'memberlist_title' => 'Pokaži seznam članov', //cpg1.3.0
  'memberlist_lnk' => 'Seznam članov', //cpg1.3.0
  'faq_title' => 'Pogosto zastavljena vprašanja o foto-galeriji &quot;Coppermine&quot;', //cpg1.3.0
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
  'db_ecard_lnk' => 'Prikaži e-razglednice', //cpg1.3.0
);

$lang_user_admin_menu = array(
  'albmgr_lnk' => 'Ustvari/naroči svoj album',
  'modifyalb_lnk' => 'Spremeni svoj album',
  'my_prof_lnk' => 'Moj profil',
);

$lang_cat_list = array(
  'category' => 'Kategorija',
  'albums' => 'Albumi',
  'pictures' => 'Slike', //cpg1.3.0
);

$lang_album_list = array(
  'album_on_page' => 'Št. albumov:%d (št. strani:%d)',
);

$lang_thumb_view = array(
  'date' => 'Datum',
  //Sort by filename and title
  'name' => 'Datoteka',
  'title' => 'Naziv',
  'sort_da' => 'Sortiraj po datumu naraščujoče',
  'sort_dd' => 'Sortiraj po datumu padajoče',
  'sort_na' => 'Sortiraj po imenu datoteke naraščujoče',
  'sort_nd' => 'Sortiraj po imenu datoteke padajoče',
  'sort_ta' => 'Sortiraj po nazivu naraščujoče',
  'sort_td' => 'Sortiraj po nazivu padajoče',
  'download_zip' => 'Download kot Zip datoteka', //cpg1.3.0
  'pic_on_page' => 'Št. slik:%d (št. strani:%d)',
  'user_on_page' => 'Št. uporabnikov:%d (št. strani:%d)', //cpg1.3.0
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Nazaj na stran z ikonami',
  'pic_info_title' => 'Prikaži/skrij informacije o sliki', //cpg1.3.0
  'slideshow_title' => 'Samodejno predvajaj slike',
  'ecard_title' => 'Pošlji sliko kot e-razglednico', //cpg1.3.0
  'ecard_disabled' => 'Pošiljanje e-razglednic ni dovoljeno',
  'ecard_disabled_msg' => 'Nimaš pravic za pošiljanje e-razglednic', //js-alert //cpg1.3.0
  'prev_title' => 'Poglej predhodno sliko', //cpg1.3.0
  'next_title' => 'Poglej naslednjo sliko', //cpg1.3.0
  'pic_pos' => 'Slika %s od %s', //cpg1.3.0
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Oceni to sliko ', //cpg1.3.0
  'no_votes' => '(Brez ocen do sedaj)',
  'rating' => '(trenutna ocena: %s (največ 5; št. glasov:%s)',
  'rubbish' => 'Zanič',
  'poor' => 'Slabo',
  'fair' => 'Tako tako',
  'good' => 'Dobro',
  'excellent' => 'Odlično',
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
  CRITICAL_ERROR => 'Kritična napaka',
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
  'n_comments' => 'Št. komentarjev:%s',
  'n_views' => 'Št. ogledov:%s',
  'n_votes' => '(št. ocen:%s)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Debug info', //cpg1.3.0
  'select_all' => 'Izberi vse', //cpg1.3.0
  'copy_and_paste_instructions' => 'Če želiš pomoč s strani coppermine foruma, kopiraj in prilepi (copy-paste) izpis napake v svoje sporočilo. Pred pošiljanjem preveri in zamenjaj (če obstaja v izpisu) geslo z ***.', //cpg1.3.0
  'phpinfo' => 'Prikaži phpinfo', //cpg1.3.0
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
  'Question' => 'Vprašanje',
  'Very Happy' => 'Zelo srečen',
  'Smile' => 'Smeško',
  'Sad' => 'Žalosten',
  'Surprised' => 'Presenečen',
  'Shocked' => 'V šoku',
  'Confused' => 'Zmeden',
  'Cool' => 'Hladen',
  'Laughing' => 'Nasmejan',
  'Mad' => 'Nor',
  'Razz' => 'Nagajiv',
  'Embarassed' => 'Embarassed',
  'Crying or Very sad' => 'Jokajoč ali žalosten',
  'Evil or Very Mad' => 'Vražji ali zloben',
  'Twisted Evil' => 'Slepar',
  'Rolling Eyes' => 'Kotaleče oči',
  'Wink' => 'Mežikanje',
  'Idea' => 'Ideja',
  'Arrow' => 'Puščica',
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
  0 => 'Zapuščam administracijo...',
  1 => 'Vstop v administracijo...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Album mora imeti ime!', //js-alert
  'confirm_modifs' => 'Res želiš izvesti te spremembe?', //js-alert
  'no_change' => 'Nobenih sprememb nisi naredil!', //js-alert
  'new_album' => 'Novi album',
  'confirm_delete1' => 'Res želiš pobrisati ta album?', //js-alert
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
  'usergal_cat_ro' => 'Brisanje kategorije od uporabniških galerij ni možno!',
  'manage_cat' => 'Urejanje kategorij',
  'confirm_delete' => 'Res želiš pobrisati to kategorijo', //js-alert
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
  'upd_success' => 'Nastavitve galerije so bile uspešno posodobljene',
  'restore_success' => 'Povrnjene so bile osnovne nastavitve galerije',
  'name_a' => 'Naziv naraščujoče',
  'name_d' => 'Naziv padajoče',
  'title_a' => 'Naslov naraščujoče',
  'title_d' => 'Naslov padajoče',
  'date_a' => 'Datum naraščujoče',
  'date_d' => 'Datum padajoče',
  'th_any' => 'Max razmerje',
  'th_ht' => 'Višina',
  'th_wd' => 'Širina',
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
  array('Naslov za link v e-razglednicah (Poglej si več slik)', 'ecards_more_pic_target', 0),
  array('Galerija je izklopljena', 'offline', 1), //cpg1.3.0
  array('Beleži e-razglednice', 'log_ecards', 1), //cpg1.3.0
  array('Dovoli ZIP-download priljubljenih slik', 'enable_zipdownload', 1), //cpg1.3.0

  'Language, Themes &amp; Charset settings',
  array('Jezik', 'lang', 5),
  array('Tema', 'theme', 6),
  array('Prikaži seznam jezikov', 'language_list', 1), //cpg1.3.0
  array('Prikaži zastave jezikov', 'language_flags', 8), //cpg1.3.0
  array('Prikaži &quot;reset&quot; na seznamu jezikov', 'language_reset', 1), //cpg1.3.0
  array('Prikaži seznam tem', 'theme_list', 1), //cpg1.3.0
  array('Prikaži &quot;reset&quot; na seznamu tem', 'theme_reset', 1), //cpg1.3.0
  array('Prikaži FAQ', 'display_faq', 1), //cpg1.3.0
  array('Prikaži pomoč za bbcode', 'show_bbcode_help', 1), //cpg1.3.0
  array('Kodiranje strani', 'charset', 4), //cpg1.3.0

  'Seznam albumov',
  array('Širina glavne tabele (pixli ali %)', 'main_table_width', 0),
  array('Število nivojev za prikaz kategorij', 'subcat_level', 0),
  array('Število albumov na strani', 'albums_per_page', 0),
  array('Število kolon za prikaz albumov', 'album_list_cols', 0),
  array('Velikost ikon v pixlih', 'alb_list_thumb_size', 0),
  array('Vsebina na glavni strani', 'main_page_layout', 0),
  array('Prikaz ikon albumov za prvi nivo kategorij','first_level',1),

  'Prikaz ikon',
  array('Število kolon na strani z ikonami', 'thumbcols', 0),
  array('Število vrstic na strani z ikonami', 'thumbrows', 0),
  array('Max. št. tabulatorjev', 'max_tabs', 10), //cpg1.3.0
  array('Prikaži opis slike (zraven imena) pod ikono', 'caption_in_thumbview', 1), //cpg1.3.0
  array('Prikaži število ogledov pod ikono', 'views_in_thumbview', 1), //cpg1.3.0
  array('Prikaži število komentarjev pod ikono', 'display_comment_count', 1),
  array('Prikaži pošiljatelja pod ikono', 'display_uploader', 1), //cpg1.3.0
  array('Privzeto sortiranje slik', 'default_sort_order', 3), //cpg1.3.0
  array('Minimalno število ocen za sliko, da se uvrsti na seznam  \'naj-ocene\'', 'min_votes_for_rating', 0), //cpg1.3.0

  'Prikaz slik &amp; nastavitve za komentarje',
  array('Širina tabele za prikaz slik (pixli ali %)', 'picture_table_width', 0), //cpg1.3.0
  array('Informacija o sliki je privzeto vidna', 'display_pic_info', 1), //cpg1.3.0
  array('Izloči grde besede v komentarjih', 'filter_bad_words', 1),
  array('Dovoli smeškote v komentarjih', 'enable_smilies', 1),
  array('Dovoli več komentarjev od enega uporabnika (iklopi kontrolo smeti...)', 'disable_comment_flood_protect', 1), //cpg1.3.0
  array('Max. velikost za opis slike', 'max_img_desc_length', 0),
  array('Max. število znakov v besedi', 'max_com_wlength', 0),
  array('Max. število vrstic komentarja', 'max_com_lines', 0),
  array('Max. velikost komentarja', 'max_com_size', 0),
  array('Prikaži filmski trak z ikonami', 'display_film_strip', 1),
  array('Št. ikon na traku', 'max_film_strip_items', 0),
  array('Obvesti admin. o novem komentarju', 'email_comment_notification', 1), //cpg1.3.0
  array('Interval pri samodejnem predvajanju v mili sekundah (1 sekunda = 1000 mili sekund)', 'slideshow_interval', 0), //cpg1.3.0

  'Nastavitve slik in ikon', //cpg1.3.0
  array('Kvaliteta za JPEG datoteke', 'jpeg_qual', 0),
  array('Max. velikost za ikone <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0), //cpg1.3.0
  array('Velikost uporabi za širino ali višino ali razmerje ikone<b>**</b>', 'thumb_use', 7),
  array('Ustvari vmesne slike','make_intermediate',1),
  array('Max. širina ali višina vmesnih slik/videa <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0), //cpg1.3.0
  array('Max. velikost datotek/slik (kB)', 'max_upl_size', 0), //cpg1.3.0
  array('Max. širina ali višina dodanih slik/videa (pixli)', 'max_upl_width_height', 0), //cpg1.3.0

  'Dodatne nastavitve slik in ikon', //cpg1.3.0
  array('Prikaži ikone privatnih albumov neprijavljenim uporabnikom','show_private',1), //cpg1.3.0
  array('Prepovedani znaki v imenih datotek', 'forbiden_fname_char',0), //cpg1.3.0
  //array('Accepted file extensions for uploaded pictures', 'allowed_file_extensions',0), //cpg1.3.0
  array('Dovoljene vrste datotek za dodajanje slik', 'allowed_img_types',0), //cpg1.3.0
  array('Dovoljene vrste datotek za dodajanje filmov', 'allowed_mov_types',0), //cpg1.3.0
  array('Dovoljene vrste datotek za audio', 'allowed_snd_types',0), //cpg1.3.0
  array('Dovoljene vrste datotek', 'allowed_doc_types',0), //cpg1.3.0
  array('Način kreiranja ikon','thumb_method',2), //cpg1.3.0
  array('Pot do ImageMagick programa (example /usr/bin/X11/)', 'impath', 0), //cpg1.3.0
  //array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types',0), //cpg1.3.0
  array('Opcija za ukazno vrstico od ImageMagick', 'im_options', 0), //cpg1.3.0
  array('Prikaži EXIF podatke v JPEG datotekah', 'read_exif_data', 1), //cpg1.3.0
  array('Prikaži IPTC podatke v JPEG datotekah', 'read_iptc_data', 1), //cpg1.3.0
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
  array('Uporabniki imajo lahko privatne albume (Opomba: če preklopiš iz DA na NE bodo trenutni privatni albumi postali javni)', 'allow_private_albums', 1), //cpg1.3.0
  array('Obvesti admina o čakajočih slikah za odobritev', 'upl_notify_admin_email', 1), //cpg1.3.0
  array('Dovoli prijavljenim uporabnikom ogled seznama članov', 'allow_memberlist', 1), //cpg1.3.0

  'Dodatna polja za vpis informacij o sliki (pusti prazno, če ne uporabljaš)',
  array('Polje 1', 'user_field1_name', 0),
  array('Polje 2', 'user_field2_name', 0),
  array('Polje 3', 'user_field3_name', 0),
  array('Polje 4', 'user_field4_name', 0),

  'Piškotki',
  array('Ime za piškotke, ki jih uporablja galerija (če uporabljaš še bbs, poskrbi za različno ime od piškotkov bbs-ja)', 'cookie_name', 0),
  array('Pot do piškotkov', 'cookie_path', 0),

  'Ostale nastavitve',
  array('Vključi način za odkrivanje napak', 'debug_mode', 9), //cpg1.3.0
  array('Prikaži opombe v načinu za odkrivanje napak', 'debug_notice', 1), //cpg1.3.0

  '<br /><div align="left"><a name="notice1"></a>(*) Teh nastavitev ni dovoljeno spreminjati, ko so v galeriji že slike.<br />
  <a name="notice2"></a>(**) Če spremeniš te nastavitve, bodo vplivale samo na slike dodane od spremembe naprej. Željene spremembe lahko izvedeš tudi na že obstoječih slikah z uporabo &quot;<a href="util.php">administracijskih orodij</a> (spreminjanje velikosti slik)&quot; pripomočka, ki se nahaja v administracijskem meniju.</div><br />', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Pošlji e-razglednico', //cpg1.3.0
  'ecard_sender' => 'Pošiljatelj', //cpg1.3.0
  'ecard_recipient' => 'Naslovnik', //cpg1.3.0
  'ecard_date' => 'Datum', //cpg1.3.0
  'ecard_display' => 'Prikaži e-razglednico', //cpg1.3.0
  'ecard_name' => 'Ime', //cpg1.3.0
  'ecard_email' => 'e-mail', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'naraščajoče', //cpg1.3.0
  'ecard_descending' => 'padajoče', //cpg1.3.0
  'ecard_sorted' => 'Sortirano', //cpg1.3.0
  'ecard_by_date' => 'po datumu', //cpg1.3.0
  'ecard_by_sender_name' => 'po pošiljateljevem imenu', //cpg1.3.0
  'ecard_by_sender_email' => 'po pošiljateljevem e-mail naslovu', //cpg1.3.0
  'ecard_by_sender_ip' => 'po pošiljateljevi IP številki', //cpg1.3.0
  'ecard_by_recipient_name' => 'po naslovnikovem imenu', //cpg1.3.0
  'ecard_by_recipient_email' => 'po naslovnikovem e-mail naslovu', //cpg1.3.0
  'ecard_number' => 'prikazani zapisi od %s do %s (vseh zapisov: %s', //cpg1.3.0
  'ecard_goto_page' => 'pojdi na stran', //cpg1.3.0
  'ecard_records_per_page' => 'Zapisov po strani', //cpg1.3.0
  'check_all' => 'Označi vse', //cpg1.3.0
  'uncheck_all' => 'Odznači vse', //cpg1.3.0
  'ecards_delete_selected' => 'Briši označeno', //cpg1.3.0
  'ecards_delete_confirm' => 'Si prepričan, da želiš to narediti? Označi ustrezno polje!', //cpg1.3.0
  'ecards_delete_sure' => 'Sem prepričan!', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Vpisati moraš ime in komentar',
  'com_added' => 'Komentar je bil dodan',
  'alb_need_title' => 'Vpisati moraš ime za album!',
  'no_udp_needed' => 'Posodobitve niso potrebne.',
  'alb_updated' => 'Album je bil posodobljen',
  'unknown_album' => 'Izbrani album ne obstaja ali pa nimaš pravic za dodajanje slik v njega',
  'no_pic_uploaded' => 'Nobena slika ni bila dodana!<br /><br />Če si resnično poslal sliko, preveri ali je to sploh dovoljeno...', //cpg1.3.0
  'err_mkdir' => 'Kreiranje direktorija %s ni bilo uspešno!',
  'dest_dir_ro' => 'Željeni direktorij %s ne omogoča pisanja - pravice!',
  'err_move' => 'Nemogoče je premakniti %s v %s !',
  'err_fsize_too_large' => 'Dimenzije slike so prevelike (dovoljeno je %s x %s)!', //cpg1.3.0
  'err_imgsize_too_large' => 'Velikost datoteke presega limit (dovoljeno je %s kB)!',
  'err_invalid_img' => 'Poslana slika ni v pravilnem formatu!',
  'allowed_img_types' => 'Dodaš lahko samo %s slike.',
  'err_insert_pic' => 'Slike \'%s\' se ne da dodati v album ', //cpg1.3.0
  'upload_success' => 'Tvoja slika je bila dodana.<br /><br />Vidna bo takoj po administratorjevi odobritvi.', //cpg1.3.0
  'notify_admin_email_subject' => '%s - slik za odobritev', //cpg1.3.0
  'notify_admin_email_body' => 'Dodane so bile slike (pošiljatelj: %s) in čakajo na odobritev. Obišči %s', //cpg1.3.0
  'info' => 'Informacija',
  'com_added' => 'Komentar dodan',
  'alb_updated' => 'Album posodobljen',
  'err_comment_empty' => 'Komentar je prazen!',
  'err_invalid_fext' => 'Veljavne so samo datoteke z naslednjimi končnicami: <br /><br />%s.',
  'no_flood' => 'Oprosti, ampak si že avtor zadnjega komentarja za to sliko<br /><br />Izberi urejanje,če ga želiš spremeniti', //cpg1.3.0
  'redirect_msg' => 'Prestavljen boš na novo stran.<br /><br /><br />Klikni \'NAPREJ\', če se stran samodejno ne zamenja',
  'upl_success' => 'Tvoje slike so bile uspešno dodane', //cpg1.3.0
  'email_comment_subject' => 'Dodan komentar v galerijo', //cpg1.3.0
  'email_comment_body' => 'Nekdo je vpisal komentar v galerijo. Poglej ga', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Naslov',
  'fs_pic' => 'velika slika',
  'del_success' => 'uspešno pobrisano',
  'ns_pic' => 'normalna velikost slike',
  'err_del' => 'brisanje ni možno',
  'thumb_pic' => 'ikona',
  'comment' => 'komentar',
  'im_in_alb' => 'slika v albumu',
  'alb_del_success' => 'Album \'%s\' pobrisan',
  'alb_mgr' => 'Urejanje albumov',
  'err_invalid_data' => 'Napačni podatki v \'%s\'',
  'create_alb' => 'Kreiram album \'%s\'',
  'update_alb' => 'Posodabljam album \'%s\' z naslovom \'%s\' in indeksom \'%s\'',
  'del_pic' => 'Pobriši sliko', //cpg1.3.0
  'del_alb' => 'Pobriši album',
  'del_user' => 'Pobriši uporabnika',
  'err_unknown_user' => 'Izbrani uporabnik ne obstaja!',
  'comment_deleted' => 'Komentar uspešno pobrisan',
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
  'confirm_del' => 'Res želiš pobrisati to sliko? \\nTudi komentarji od nje bodo pobrisani.', //js-alert //cpg1.3.0
  'del_pic' => 'POBRIŠI TO SLIKO', //cpg1.3.0
  'size' => '%s x %s pixlov',
  'views' => '%s krat',
  'slideshow' => 'Samodejno predvajanje',
  'stop_slideshow' => 'Ustavi predvajanje',
  'view_fs' => 'Klikni za ogled večje slike',
  'edit_pic' => 'Uredi opis', //cpg1.3.0
  'crop_pic' => 'Obreži in rotiraj', //cpg1.3.0
);

$lang_picinfo = array(
  'title' =>'Informacija o sliki', //cpg1.3.0
  'Filename' => 'Ime datoteke',
  'Album name' => 'Ime albuma',
  'Rating' => 'Ocena (št. glasov:%s)',
  'Keywords' => 'Ključne besede',
  'File Size' => 'Velikost datoteke',
  'Dimensions' => 'Velikost slike',
  'Displayed' => 'Št. ogledov',
  'Camera' => 'Kamera',
  'Date taken' => 'Datum posnetka',
  'Aperture' => 'Zaslonka',
  'Exposure time' => 'Čas',
  'Focal length' => 'Goriščna razdalja',
  'Comment' => 'Komentar',
  'addFav'=>'Dodaj med priljubljene', //cpg1.3.0
  'addFavPhrase'=>'Priljubljene', //cpg1.3.0
  'remFav'=>'Odstrani iz priljubljenih', //cpg1.3.0
  'iptcTitle'=>'IPTC naziv', //cpg1.3.0
  'iptcCopyright'=>'IPTC Copyright', //cpg1.3.0
  'iptcKeywords'=>'IPTC ključne besede', //cpg1.3.0
  'iptcCategory'=>'IPTC kategorija', //cpg1.3.0
  'iptcSubCategories'=>'IPTC pod kategorija', //cpg1.3.0
);

$lang_display_comments = array(
  'OK' => 'DA',
  'edit_title' => 'Uredi komentar',
  'confirm_delete' => 'Res želiš pobrisati komentar?', //js-alert
  'add_your_comment' => 'Dodaj komentar',
  'name'=>'Ime',
  'comment'=>'Komentar',
  'your_name' => 'Anonimnež',
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Klikni sliko, da zapreš to okno',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Pošlji e-razglednico',
  'invalid_email' => '<b>Opozorilo</b>: napačni e-mail naslov!',
  'ecard_title' => 'To je e-razglednica od %s za tebe',
  'error_not_image' => 'Samo slike je možno poslati kot razglednico.', //cpg1.3.0
  'view_ecard' => 'Če razglednice ne vidiš pravilno, klikni na to povezavo',
  'view_more_pics' => 'Klikni tukaj za ogled večih slik!',
  'send_success' => 'Razglednica je bila poslana',
  'send_failed' => 'Oprosti, ampak server ne omogoča pošiljanja razglednic...',
  'from' => 'Od',
  'your_name' => 'Tvoje ime',
  'your_email' => 'Tvoj e.mail naslov',
  'to' => 'Za',
  'rcpt_name' => 'Naslovnikovo ime',
  'rcpt_email' => 'Naslovnikov e-mail naslov',
  'greetings' => 'Pozdrav',
  'message' => 'Sporočilo',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Informacija o sliki', //cpg1.3.0
  'album' => 'Album',
  'title' => 'Naziv',
  'desc' => 'Opis',
  'keywords' => 'Ključne besede',
  'pic_info_str' => '%s &times; %s - %s kB - %s ogledov - %s ocen',
  'approve' => 'Odobri sliko', //cpg1.3.0
  'postpone_app' => 'Preloži odobritev',
  'del_pic' => 'Pobriši sliko', //cpg1.3.0
  'read_exif' => 'Preberi EXIF podatke še enkrat', //cpg1.3.0
  'reset_view_count' => 'Resetiraj števec ogledov',
  'reset_votes' => 'Resetiraj ocene',
  'del_comm' => 'Pobriši komentarje',
  'upl_approval' => 'Dodaj odobritev',
  'edit_pics' => 'Uredi sliko', //cpg1.3.0
  'see_next' => 'Naslednje slike', //cpg1.3.0
  'see_prev' => 'predhodne slike', //cpg1.3.0
  'n_pic' => '%s slik', //cpg1.3.0
  'n_of_pic_to_disp' => 'Število slik za prikaz', //cpg1.3.0
  'apply' => 'Izvedi spremembe', //cpg1.3.0
  'crop_title' => 'Urejanje slik', //cpg1.3.0
  'preview' => 'Predogled', //cpg1.3.0
  'save' => 'Shrani sliko', //cpg1.3.0
  'save_thumb' =>'Shrani kot ikono', //cpg1.3.0
  'sel_on_img' =>'Izbrano področje mora biti na sliki!', //js-alert //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Pogosto zastavljena vprašanja', //cpg1.3.0
  'toc' => 'Kazalo', //cpg1.3.0
  'question' => 'Vprašanje: ', //cpg1.3.0
  'answer' => 'Odgovor: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'Osnovna vprašanja', //cpg1.3.0
  array('Zakaj je potrebna registracija?', 'Registracija je ali pa ni potrebna - o tem odloča administrator. Registracija daje članom dodatne možnosti kot je dodajanje slik, kreiranje priljubljenih slik, urejanje albumov, ocenjevanje slik, dodajanje komentarjev....', 'allow_user_registration', '0'), //cpg1.3.0
  array('Kako se registriram?', 'Pojdi na &quot;Registracija&quot; in izpolni obrazec.<br />Če je administrator vklopil obveščanje preko e-mail naslovov, prejmeš na svoj e-mail naslov sporočilo z navodili za aktiviranje svojega računa in s tem boš imel možnost, da se s svojimi podatki potem prijaviš.', 'allow_user_registration', '1'), //cpg1.3.0
  array('Kako se prijavim?', 'Pojdi na &quot;Prijava&quot;, vpiši svoje uporabniško ime in geslo, odkljukaj polje &quot;Zapomni si me&quot; in boš prijavljen.<br /><b>POMEMBNO:omogočeno moraš imeti uporabo piškotkov in pa le-ti ne smejo biti pobrisani, če hočeš izkoristiti tudi opcijo &quot;Zapomni si me&quot;.</b>', 'offline', 0), //cpg1.3.0
  array('Zakaj se ne morem prijaviti?', 'Si se že registriral in odgovoril na povezavo, ki ti je bila poslana preko e-mail sporočila?. Poslana povezava služi za aktiviranje tvojega računa. Za ostale težave pri prijavi pošlji e-mail administratorju.', 'offline', 0), //cpg1.3.0
  array('Kaj če pozabim geslo?', 'Če se le da, uporabi povezavo &quot;Pozabljeno geslo&quot;. V nasprotnem primeru pošlji e-mail administratorju in zaprosi za novo geslo.', 'offline', 0), //cpg1.3.0
  //array('Kaj če sem spremenil svoj e-mail naslov?', 'Prijavi se in v svojih nastavitvah popravi naslov. Uporabi povezavo &quot;Profil&quot;', 'offline', 0), //cpg1.3.0
  array('Kako shranim sliko v &quot;Moji favoriti&quot;?', 'Klikni na sliko in vklopi prikaz &quot;informacija o sliki&quot; (<img src="images/info.gif" width="16" height="16" border="0" alt="Informacija o sliki" />); v okvirčku s podatki najdeš povezavo &quot;Dodaj med priljubljene&quot;.<br />Informacija o sliki je mogoče že vklopljena, kar pa je odvisno od nastavitev same galerije.<br />POMEMBNO:omogočeno moraš imeti uporabo piškotkov in pa le-ti ne smejo biti pobrisani.', 'offline', 0), //cpg1.3.0
  array('Kako lahko ocenim sliko?', 'Pri ogledu posamezne slike imaš možnost tudi oceniti le-to (seveda le, če je to dovoljeno s strani lastnika albuma). Klikni na slikico, ki predstavlja posamezno oceno.', 'offline', 0), //cpg1.3.0
  array('Kako lahko dodam komentar?', 'Pri ogledu posamezne slike imaš možnost tudi dodati svoj komentar (seveda le, če je to dovoljeno s strani lastnika albuma).', 'offline', 0), //cpg1.3.0
  array('Kako lahko dodam svojo sliko?', 'Izberi &quot;Nalaganje slik&quot;in določi najprej album v katerega jo želiš dodati, klikni na &quot;Prebrskaj&quot; in najdi sliko na disku, ki jo želiš dodati. Ko jo najdeš, klikni &quot;odpri/open&quot; (vpiši naslov za sliko in opis, če želiš) in klikni končno še &quot;Dodaj sliko&quot;', 'allow_private_albums', 0), //cpg1.3.0
  array('Kam lahko dodam sliko?', 'Imaš možnost, da jo dodaš v enega od svojih albumov v &quot;Moja galerija&quot; ali pa, v katerikoli drugi album, če je administrator to omogočil.', 'allow_private_albums', 0), //cpg1.3.0
  array('Kako velike in kakšne vrste slik lahko dodam?', 'Velikost in vrsta slik (jpg,gif,...) sta določena s strani administratorja.', 'offline', 0), //cpg1.3.0
  array('Kaj je &quot;Moja galerija&quot;?', '&quot;Moja galerija&quot; je osebna galerija, ki jo lahko imajo registrirani uporabniki. Omogoča pa samostojno urejanje in upravljanje s slikami in albumi.', 'allow_private_albums', 0), //cpg1.3.0
  array('Kako lahko ustvarim, spremenim ali brišem albume v&quot;Moji galeriji&quot;?', 'Biti moraš prijavljen in v &quot;načinu za administracijo&quot;<br />Klikni na &quot;Ustvari/naroči svoj album&quot; in klikni na &quot;Novo&quot;. Spremeni &quot;Novi album&quot; v svoje željeno ime za album.<br />V svoji galeriji lahko tako preimenuješ kateri koli album.<br />Klikni na &quot;Izvedi spremembe&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Kako lahko določim, da ostali ne vidijo slik v mojem albumu?', 'Biti moraš prijavljen in v &quot;načinu za administracijo&quot;<br />Klikni na &quot;Spremeni svoj album&quot; Sedaj lahko nastaviš možnosti za tvoj album (dovoliš dodajanje slik, ocenjevanje slik, dodajanje komentarjev in pa dostop do albuma).<br />Na koncu klikni še &quot;Posodobi album&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Kako lahko vidim albume od ostalih uporabnikov?', 'Klikni na &quot;Seznam albumov ali logotip od galerije &quot; in izberi kategorijo &quot;Uporabniške galerije&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Kaj so piškotki?', 'Piškotki so majhbe tekstovne datoteke, ki jih web stran shrani na tvojem računalniku.<br />piškotki omogočajo lažjo prijavo na web strani.', 'offline', 0), //cpg1.3.0
  array('Kje lahko najdem ta program za svoje web strani?', 'Coppermine je prosta multimedijska galerija, objavljena pod GNU GPL. Omogoča veliko raznoraznih funkcij in je predvidena za različne sisteme. Obišči <a href="http://coppermine.sf.net/">domačo stran od Coppermine galerije</a> za download in ostale informacije.', 'offline', 0), //cpg1.3.0

  'Navigacija po straneh', //cpg1.3.0
  array('Kaj je &quot;Seznam albumov&quot;?', 'To je popolni seznam povezav do posameznih kategorij in/ali albumov v galeriji. Ikone so lahko tudi povezava do posamezne kategorije.', 'offline', 0), //cpg1.3.0
  array('Kaj je &quot;Moja galerija&quot;?', 'To je možnost, da uporabniki ustvarijo svoje albume in v njih dodajajo, urejajo in brišejo slike brez posredovanja administratorja.', 'allow_private_albums', 0), //cpg1.3.0
  array('Kakšna je razlika med &quot;Administracijo&quot; in &quot;Uporabniškim načinom&quot;?', 'Administracija omogoča uporabnikom spreminjanje oz. urejanje svojih albumov in s tem slik.', 'allow_private_albums', 0), //cpg1.3.0
  array('Kaj pomeni &quot;Nalaganje slik&quot;?', 'To je možnost, da v posamezni album dodajaš slike (vrsta in velikost ter album so določeni s strani administratorja).', 'allow_private_albums', 0), //cpg1.3.0
  array('Kaj pomeni &quot;Zadnje dodane slike&quot;?', 'Tukaj vidiš ikone od slik, ki so bile nazadnje naložene na server.', 'offline', 0), //cpg1.3.0
  array('Kaj so &quot;Zadnji komentarji&quot;?', 'Tukaj vidiš vpisane zadnje komentarje k slikam s strani obiskovalcev.', 'offline', 0), //cpg1.3.0
  array('Kaj pomeni &quot;Največ ogledov&quot;?', 'Tukaj vidiš seznam slik, ki so bile največkrat pogledane s strani obiskovalcev.', 'offline', 0), //cpg1.3.0
  array('Kaj pomeni &quot;Najbolj ocenjeno&quot;?', 'Tukaj vidiš seznam slik, ki so dobile največje ocene s strani obiskovalcev, prikazana je povprečna ocena (primer: 5 uporabnikov, vsak da oceno <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: slika bo imela povprečno oceno <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;Pet uporabnikov oceni sliko z ocenami od 1 do 5 (1,2,3,4,5) - rezultat bo povprečna ocena <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />Ocene so od <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (super) do <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (zanič).', 'offline', 0), //cpg1.3.0
  array('Kaj so &quot;Moji favoriti&quot;?', 'To omogoča, da se v piškotek shrani seznam uporabniku najlepših slik.', 'offline', 0), //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Pozabljeno geslo', //cpg1.3.0
  'err_already_logged_in' => 'Trenutno si že prijavljen!', //cpg1.3.0
  'enter_username_email' => 'Vpiši uporabniško ime ali e-mail naslov', //cpg1.3.0
  'submit' => 'naprej', //cpg1.3.0
  'failed_sending_email' => 'Sporočila o pozabljenem geslu ni možno poslati!', //cpg1.3.0
  'email_sent' => 'Sporočilo s tvojim uporabniškim imenom in geslo je bilo poslano na %s', //cpg1.3.0
  'err_unk_user' => 'Vpisani uporabnik ne obstaja!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - pozabljeno geslo', //cpg1.3.0
  'passwd_reminder_body' => 'Tvoji podatki za prijavo:
Uporabniško ime: %s
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
  'can_send_ecards' => 'Lahko pošilja razglednice',
  'can_post_com' => 'Lahko dodaja komentarje',
  'can_upload' => 'Lahko dodaja slike', //cpg1.3.0
  'can_have_gallery' => 'Lahko ima osebno galerijo',
  'apply' => 'Izvedi spremembe',
  'create_new_group' => 'Ustvari novo skupino',
  'del_groups' => 'Pobriši izbrano skupino',
  'confirm_del' => 'Opozorilo: pri brisanju skupine se vsi člani premaknejo v skupino z imenom \'Registered\'!\n\nŽeliš nadaljevati?', //js-alert //cpg1.3.0
  'title' => 'Urejanje uporabniških skupin',
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
  'welcome' => 'Dobrodošel!',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Res želiš pobrisati ta album? \\nVse slike in komentarji v njem bodo tudi pobrisani.', //js-alert //cpg1.3.0
  'delete' => 'BRISANJE',
  'modify' => 'LASTNOSTI',
  'edit_pics' => 'UREJANJE', //cpg1.3.0
);

$lang_list_categories = array(
  'home' => 'Domov',
  'stat1' => 'Št. slik:<b>[pictures]</b> - št. albumov:<b>[albums]</b> - št. kategorij:<b>[cat]</b>  - št. komentarjev:<b>[comments]</b> - št. ogledov:<b>[views]</b>', //cpg1.3.0
  'stat2' => 'Št. slik:<b>[pictures]</b> - št. albumov:<b>[albums]</b> - št. ogledov<b>[views]</b>', //cpg1.3.0
  'xx_s_gallery' => 'Galerija od %s',
  'stat3' => 'Št. slik:<b>[pictures]</b> - št. albumov:<b>[albums]</b> - št. komentarjev:<b>[comments]</b>  - št. ogledov:<b>[views]</b>', //cpg1.3.0
);

$lang_list_users = array(
  'user_list' => 'Seznam uporabnikov',
  'no_user_gal' => 'Brez uporabniških galerij',
  'n_albums' => 'Št. albumov:%s',
  'n_pics' => 'Št. slik:%s', //cpg1.3.0
);

$lang_list_albums = array(
  'n_pictures' => 'Št. slik:%s', //cpg1.3.0
  'last_added' => ', zadnja dodana %s',
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Prijava',
  'enter_login_pswd' => 'Vpiši uporabniško ime in geslo',
  'username' => 'Uporabniško ime',
  'password' => 'Geslo',
  'remember_me' => 'Zapomni si me',
  'welcome' => 'Pozdravljen/a %s ...',
  'err_login' => '*** Prijava ni uspelo. Poskusi znova ***',
  'err_already_logged_in' => 'Si že prijavljen!',
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
  'no_link' => 'Če te podatke vidijo ostali je to lahko varnostno sporno. Zato jih lahko vidiš samo, če si prijavljen kot administrator. Čeprav bi ostalim poslal pot do te strani, je ne bodo videli.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Posodobi album %s',
  'general_settings' => 'Splošne nastavitve',
  'alb_title' => 'Ime albuma',
  'alb_cat' => 'Kategorija od albuma',
  'alb_desc' => 'Opis albuma',
  'alb_thumb' => 'Ikona albuma',
  'alb_perm' => 'Pravice za ta album',
  'can_view' => 'Album lahko vidijo',
  'can_upload' => 'Obiskovalci lahko dodajajo slike',
  'can_post_comments' => 'Obiskovalci lahko dodajajo komentarje',
  'can_rate' => 'Obiskovalci lahko ocenjujejo slike',
  'user_gal' => 'Uporabniška galerija',
  'no_cat' => '* Brez kategorije *',
  'alb_empty' => 'Album je prazen',
  'last_uploaded' => 'Zadnje dodano...',
  'public_alb' => 'Vsi (javni album)',
  'me_only' => 'Samo jaz',
  'owner_only' => 'Lastnik albuma (%s)',
  'groupp_only' => 'Člani skupine \'%s\'',
  'err_no_alb_to_modify' => 'Ni albumov, ki bi jih lahko urejal.',
  'update' => 'Posodobi album', //cpg1.3.0
  'notice1' => '(*) odvisno od %sskupine%s (lastnosti)', //cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Oprosti, ampak to sliko si že ocenil', //cpg1.3.0
  'rate_ok' => 'Tvoja ocena je bila zabeležena',
  'forbidden' => 'Lastnih slik ne moreš ocenjevati.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Čeprav bo administrator {SITE_NAME} poskušal odstraniti vsako neprimerno vsebino objavljeno v galeriji, je nemogoče hkrati in pravočasno pregledati vse kar je objavljeno s strani obiskovalcev. Zavedati se morate, da vse objavljeno na teh straneh predstavlja pogled in mnenje avtorja in ne administratorja oz. vzdrževalca teh spletnih strani (razen tistega kar je objavljeno z njune strani).<br />
<br />
S sodelovanjem na teh spletnih straneh se tudi strinjate, da ne boste objavljali nobenih obscenih, vulgarnih, žaljivih, seksualnih, sovražnih, rasno nestrpnih in ostalih vsebin, ki so v nasprotju z veljavno zakonodajo. Strinjate se tudi, da ima aministrator in/ali moderator določenih vsebin na {SITE_NAME} pravico v katerem koli trenutku odstraniti po njegovem mnenju sporni objavljeni prispevek. Kot uporabnik se strinjate, da je z vaše strani objavljeno gradivo shranjeno v bazi. Čeprav ti podatki ne bodo posredovani nobeni tretji stranki, administrator oziroma skrbnik teh strani ne odgovarja za izgubljene podatke v primeru hekerskega poskusa kraje podatkov.<br />
<br />
Te spletne strani uporabljajo piškotke (cookies) za shranjevanje informacij na vašem računalniku. Ti podatki so namenjeni isključno temu, da vam olajšajo brskanje na teh straneh. Vaš email naslov pa je uporabljen samo za to, da vam lahko posredujemo geslo za prijavo.<br />
<br />

S klikom na 'STRINJAM SE' potrjujete, da ste seznanjeni s pogoji sodelovanje na straneh {SITE_NAME} in da je poslano gradivo vaša osebna last. V nasprotnem primeru ste dolžni navesti izvor poslanega gradiva. Prav tako ste dolžni navesti kot izvor {SITE_NAME}, če uporabite gradivo s teh strani. Dovoljena je izključno uporaba v izobraževalne namene. Za vse ostale primere si morate priskrbeti dovoljenje lastnika teh strani.<br />
EOT;

$lang_register_php = array(
  'page_title' => 'Registracija',
  'term_cond' => 'Navodila in pogoji za sodelovanje',
  'i_agree' => 'STRINJAM SE',
  'submit' => 'Pošlji registracijo',
  'err_user_exists' => 'To uporabniško ime že obstaja, izberi si drugo',
  'err_password_mismatch' => 'Gesli se ne ujemata - ponovi vpis',
  'err_uname_short' => 'Uporabniško ime mora imeti vsaj dva znaka',
  'err_password_short' => 'Geslo mora biti dolgo vsaj dva znaka',
  'err_uname_pass_diff' => 'Uporabniško ime in geslo morata biti različna',
  'err_invalid_email' => 'Napačni e-mail naslov!',
  'err_duplicate_email' => 'Ta e-mail naslov je nekdo že uporabil',
  'enter_info' => 'Vpis podatkov za registracijo',
  'required_info' => 'Obvezni podatki',
  'optional_info' => 'Neobvezni vpis',
  'username' => 'Uporabniško ime',
  'password' => 'Geslo',
  'password_again' => 'Ponovi geslo',
  'email' => 'e-mail',
  'location' => 'Kraj',
  'interests' => 'Zanimanje',
  'website' => 'Domača stran',
  'occupation' => 'Zaposlitev',
  'error' => 'NAPAKA',
  'confirm_email_subject' => '%s - registracija potrjena',
  'information' => 'Informacija',
  'failed_sending_email' => 'Ne morem poslati e-mail sporočila s podatki o registraciji!',
  'thank_you' => 'Hvala za registracijo.<br /><br />Navodila za aktiviranje računa so bila poslana na vpisani e-mail naslov.',
  'acct_created' => 'Tvoj račun je bil ustvarjen - lahko se prijaviš s svojim uporabniškim imenom in geslom',
  'acct_active' => 'Tvoj račun je aktiven in se lahko prijaviš',
  'acct_already_act' => 'Tvoj račun je že aktiven!',
  'acct_act_failed' => 'Tega računa ni možno aktivirati!',
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

Tvoje uporabniško ime je: "{USER_NAME}"
Tvoje geslo je: "{PASSWORD}"

Če želiš aktivirati svoj račun, moraš klikniti na spodnjo povezavo
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
  'n_comm_del' => 'Št. pobrisanik komentarjev:%s',
  'n_comm_disp' => 'Št. komentarjev za prikaz',
  'see_prev' => 'Poglej predhodnega',
  'see_next' => 'Poglej naslednjega',
  'del_comm' => 'Pobriši izbrane komentarje',
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
  'select_dir_msg' => 'Ta ukaz ti omogoča dodajanje slik, ki si jih dodal na server s pomočjo FTP protokola.<br /><br />Izberi direktorij v katerega si dodal slike', //cpg1.3.0
  'no_pic_to_add' => 'Tu ni nobenih slik za dodajanje', //cpg1.3.0
  'need_one_album' => 'Za uporabo te funkcije moraš imeti vsaj en album',
  'warning' => 'Opozorilo',
  'change_perm' => 'pisanje v direktorij ni omogočeno, spremeni pravice v 755 ali 777 pred ponovnim poskusom dodajanja slik!', //cpg1.3.0
  'target_album' => '<b>Dodaj slike </b>%s<b> v </b>%s', //cpg1.3.0
  'folder' => 'Direktorij',
  'image' => 'Slika',
  'album' => 'Album',
  'result' => 'Rezultat',
  'dir_ro' => 'Pisanje onemogočeno. ',
  'dir_cant_read' => 'Branje onemogočeno. ',
  'insert' => 'Dodajanje novih slik v galerijo', //cpg1.3.0
  'list_new_pic' => 'Seznam novih slik', //cpg1.3.0
  'insert_selected' => 'Dodaj izbrane slike', //cpg1.3.0
  'no_pic_found' => 'Brez novih slik', //cpg1.3.0
  'be_patient' => 'Potrpežljivost... dodajanje traja nekaj časa', //cpg1.3.0
  'no_album' => 'nisi izbral albuma',  //cpg1.3.0
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : pomeni, da so slike uspešno dodane'.
                          '<li><b>DP</b> : pomeni, da je slika duplikat in je že v bazi'.
                          '<li><b>PB</b> : pomeni, da slike ni možno dodati. Preveri nastavitve in pravice za direktorij v katerem se nahajajo'.
                          '<li><b>NA</b> : pomeni, da nisi izbral albuma za slike, klikni \'<a href="javascript:history.back(1)">nazaj</a>\' in izberi album. Če albuma še nimaš, <a href="albmgr.php">ustvari enega najprej</a></li>'.
                          '<li>Če ne vidiš oznak OK, DP ali PB, klikni na manjkajočo slikico za prikaz napake, ki jo generira PHP'.
                          '<li>Za osvežitev prikaza pritisni tipko "ponovno naloži/reload"  v svojem brskalniku'.
                          '</ul>', //cpg1.3.0
  'select_album' => 'izberi album', //cpg1.3.0
  'check_all' => 'Označi vse', //cpg1.3.0
  'uncheck_all' => 'Odznači vse', //cpg1.3.0
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
  'user_name' => 'Uporabniško ime',
  'ip_address' => 'IP naslov',
  'expiry' => 'Poteče (za trajno - pusti prazno)',
  'edit_ban' => 'Shrani spremembe',
  'delete_ban' => 'Pobriši',
  'add_new' => 'Dodaj novo prepoved',
  'add_ban' => 'Dodaj',
  'error_user' => 'Ne najdem uporabnika', //cpg1.3.0
  'error_specify' => 'Vpisati moraš uporabniško ime ali IP številko', //cpg1.3.0
  'error_ban_id' => 'Napačna IP številka!', //cpg1.3.0
  'error_admin_ban' => 'Sebi ne moreš prepovedati dostopa!', //cpg1.3.0
  'error_server_ban' => 'Poskušaš prepovedati dostop svojemu serverju? Tsk tsk, tega pa ne bom podpiral...', //cpg1.3.0
  'error_ip_forbidden' => 'Temu IP naslovu ne moreš prpovedati dostopa - je nepovezljiv (non-routable)!', //cpg1.3.0
  'lookup_ip' => 'Poglej IP naslov', //cpg1.3.0
  'submit' => 'NAPREJ!', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Dodaj sliko', //cpg1.3.0
  'custom_title' => 'Obrazec za dodajanje', //cpg1.3.0
  'cust_instr_1' => 'Izbereš lahko poljubno število datotek za upload, vendar največ kot je navedeno spodaj.', //cpg1.3.0
  'cust_instr_2' => 'Številka zahtevka', //cpg1.3.0
  'cust_instr_3' => 'Upload datotek (največ): %s', //cpg1.3.0
  'cust_instr_4' => 'URI/URL upload (največ): %s', //cpg1.3.0
  'cust_instr_5' => 'URI/URL upload:', //cpg1.3.0
  'cust_instr_6' => 'Upload datotek:', //cpg1.3.0
  'cust_instr_7' => 'Izberi število posameznih načinov za upload in klikni \'NAPREJ\'. ', //cpg1.3.0
  'reg_instr_1' => 'Napačni ukaz za obrazec.', //cpg1.3.0
  'reg_instr_2' => 'Sedaj lahko dodaš/pošlješ svoje datoteke na server. Velikost posamezne datoteke ne sme preseči %s kB. ZIP datoteke dodane s pomočjo \'Upload datotek\' in \'URI/URL dodajanje\' bodo ostale kompresirane.', //cpg1.3.0
  'reg_instr_3' => 'Če hočeš, da bodo ZIP datoteke razpakirane, uporabi polje \'Dekompresivni ZIP upload\'.', //cpg1.3.0
  'reg_instr_4' => 'Ko uporabljaš URI/URL upload, vpiši pot do datoteke na naslednji način: http://www.mojastran.com/images/slika.jpg', //cpg1.3.0
  'reg_instr_5' => 'Ko si izpolnil obrazec, klikni \'NAPREJ\'.', //cpg1.3.0
  'reg_instr_6' => 'Dekompresivni ZIP upload:', //cpg1.3.0
  'reg_instr_7' => 'Dodajanje slik:', //cpg1.3.0
  'reg_instr_8' => 'URI/URL upload:', //cpg1.3.0
  'error_report' => 'Poročilo o napaki', //cpg1.3.0
  'error_instr' => 'Tvoja zahteva za upload je povzročila napako:', //cpg1.3.0
  'file_name_url' => 'Slika ime/URL', //cpg1.3.0
  'error_message' => 'Sporočilo o napaki', //cpg1.3.0
  'no_post' => 'Slike niso bile poslane.', //cpg1.3.0
  'forb_ext' => 'Napačna končnica datoteke.', //cpg1.3.0
  'exc_php_ini' => 'Prevelika datoteka/slika glede na dovoljeno nastavitev v php.ini.', //cpg1.3.0
  'exc_file_size' => 'Prevelika datoteka/slika glede na dovoljeno nastavitev v galeriji.', //cpg1.3.0
  'partial_upload' => 'Samo delno poslane/dodane slike.', //cpg1.3.0
  'no_upload' => 'Nobene slike ni bilo poslane/dodane.', //cpg1.3.0
  'unknown_code' => 'Neznana PHP koda o napaki.', //cpg1.3.0
  'no_temp_name' => 'No upload - No temp name.', //cpg1.3.0
  'no_file_size' => 'Datoteka ne vsebuje podatkov/pokvarjena', //cpg1.3.0
  'impossible' => 'Tega ni moč premakniti.', //cpg1.3.0
  'not_image' => 'Datoteka ni slika/pokvarjena', //cpg1.3.0
  'not_GD' => 'Slika ni dovoljena za GD knjižnico(gif,jpg).', //cpg1.3.0
  'pixel_allowance' => 'Pixel toleranca prekoračena.', //cpg1.3.0
  'incorrect_prefix' => 'Napačen URI/URL prefix', //cpg1.3.0
  'could_not_open_URI' => 'Ne morem odpreti URI.', //cpg1.3.0
  'unsafe_URI' => 'Ni možno preveriti varnosti.', //cpg1.3.0
  'meta_data_failure' => 'Meta podatki manjkajo', //cpg1.3.0
  'http_401' => '401 Dostop samo z geslom', //cpg1.3.0
  'http_402' => '402 Potrebno plačilo', //cpg1.3.0
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
  'succ' => 'Uspešno poslano na server', //cpg1.3.0
  'success' => 'Št. uspešnih uploadov:%s.', //cpg1.3.0
  'add' => 'Klikni \'NAPREJ\' za dodajanje slik v album.', //cpg1.3.0
  'failure' => 'Dodajanje ni uspelo', //cpg1.3.0
  'f_info' => 'Podatki o sliki', //cpg1.3.0
  'no_place' => 'Predhodna slika ni bila dodana.', //cpg1.3.0
  'yes_place' => 'Predhodna slika je bila uspešno dodana.', //cpg1.3.0
  'max_fsize' => 'največja dovoljena velikost je %s kB',
  'album' => 'Album',
  'picture' => 'Slika', //cpg1.3.0
  'pic_title' => 'Ime slike', //cpg1.3.0
  'description' => 'Opis slike', //cpg1.3.0
  'keywords' => 'Ključne besede (loči s presledki)',
  'err_no_alb_uploadables' => 'Oprosti, trenutno nobeden album ne omogoča dodajanja slik', //cpg1.3.0
  'place_instr_1' => 'Dodaj vse slike sedaj. Vpišeš lahko tudi dodatne informacije za posamezno sliko.', //cpg1.3.0
  'place_instr_2' => 'Na dodajanje čaka še več slik. Prosim klikni \'NAPREJ\'.', //cpg1.3.0
  'process_complete' => 'Uspešno si dodal vse slike.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'title' => 'Urejanje uporabnikov',
  'name_a' => 'Ime naraščajoče',
  'name_d' => 'Ime padajoče',
  'group_a' => 'Skupina naraščajoče',
  'group_d' => 'Skupina padajoče',
  'reg_a' => 'Datum reg. naraščajoče',
  'reg_d' => 'Datum reg. padajoče',
  'pic_a' => 'Št. slik naraščajoče',
  'pic_d' => 'Št. slik padajoče',
  'disku_a' => 'Poraba diska naraščajoče',
  'disku_d' => 'Poraba diska padajoče',
  'lv_a' => 'Zadnji obiski naraščajoče', //cpg1.3.0
  'lv_d' => 'Zadnji obiski padajoče', //cpg1.3.0
  'sort_by' => 'Sortiraj uporabnike po',
  'err_no_users' => 'Tabela s podatki je prazna!',
  'err_edit_self' => 'Svojega prifila ne moreš spremeniti. Uporabi povezavo \'Moj profil\'',
  'edit' => 'UREJANJE',
  'delete' => 'BRISANJE',
  'name' => 'Uporabniško ime',
  'group' => 'Skupina',
  'inactive' => 'Neaktivni',
  'operations' => 'Operacije',
  'pictures' => 'Slike', //cpg1.3.0
  'disk_space' => 'Porabljen prostor',
  'registered_on' => 'Registriran',
  'last_visit' => 'Zadnji obisk', //cpg1.3.0
  'u_user_on_p_pages' => 'Št. uporabnikov:%d (št. strani:%d)',
  'confirm_del' => 'Res želiš pobrisati tega uporabnika? \\nTudi njegove slike in albumi bodo pobrisani.', //js-alert //cpg1.3.0
  'mail' => 'POŠTA',
  'err_unknown_user' => 'Izbrani uporabnik ne obstaja!',
  'modify_user' => 'Uredi uporabnika',
  'notes' => 'Opombe',
  'note_list' => '<li>Če gesla ne želiš spreminjati, pusti polje za geslo prazno',
  'password' => 'Geslo',
  'user_active' => 'Uporabnik je aktiven',
  'user_group' => 'Uporabnikova skupina',
  'user_email' => 'Uporabnikov email',
  'user_web_site' => 'Uporabnikova domača stran',
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
  'what_delete_originals' => 'Pobriše originalne slike in jih nadomesti z novimi',
  'file' => 'Datoteka',
  'title_set_to' => 'naslov spremenjen v',
  'submit_form' => 'pošlji',
  'updated_succesfully' => 'uspešno posodobljeno',
  'error_create' => 'NAPAKA pri kreiranju',
  'continue' => 'Nadaljuj na naslednjih slikah',
  'main_success' => 'Datoteka %s je bila uporabljena za originalno sliko', //cpg1.3.0
  'error_rename' => 'Napaka pri preimenovanju %s v %s',
  'error_not_found' => 'Ne najdem datoteke %s',
  'back' => 'nazaj na glavno stran',
  'thumbs_wait' => 'Poteka posodabljanje ikon in/ali spreminjanje slik, prosim počakaj...',
  'thumbs_continue_wait' => 'Nadaljujem s posodabljanjem ikon in/ali slik, prosim počakaj...',
  'titles_wait' => 'Posodabljanje naslovov, prosim počakaj...',
  'delete_wait' => 'Brisanje naslovov, prosim počakaj...',
  'replace_wait' => 'Brisanje originalnih slik in nadomeščanje s spremenjenimi, prosim počakaj...',
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
  'update_number' => 'Število slik za spreminjanje za vsak klik',
  'update_option' => '(Poskusi z manjšo vrednostjo, če pride do poteka časa med izvajanjem opracije)',
  'filename_title' => 'Ime datoteke &rArr; Ime slike', //cpg1.3.0
  'filename_how' => 'Kako naj pretvorim ime datoteke',
  'filename_remove' => 'Odstrani končnico .jpg in nadomesti _ (podčrtaj) s presledki',
  'filename_euro' => 'Spremeni 2003_11_23_13_20_20.jpg v 23/11/2003 13:20',
  'filename_us' => 'Spremeni 2003_11_23_13_20_20.jpg v 11/23/2003 13:20',
  'filename_time' => 'Spremeni 2003_11_23_13_20_20.jpg v 13:20',
  'delete' => 'Pobriši naslove slik ali originalne slike', //cpg1.3.0
  'delete_title' => 'Pobriši naslove slik', //cpg1.3.0
  'delete_original' => 'Pobriši originalne slike',
  'delete_replace' => 'Pobriši originalne slike, nadomesti jih s spremenjenimi (po velikosti)',
  'select_album' => 'Izberi album',
  'delete_orphans' => 'Pobriši komentarje, ki ne pripadajo nobeni sliki (deluje na vseh albumih)', //cpg1.3.0
  'orphan_comment' => 'najden komentar brez "lastnika"', //cpg1.3.0
  'delete' => 'Brisanje', //cpg1.3.0
  'delete_all' => 'Pobriši vse', //cpg1.3.0
  'comment' => 'Komentar: ', //cpg1.3.0
  'nonexist' => 'pripeto k neobstoječi sliki # ', //cpg1.3.0
  'phpinfo' => 'Prikaži phpinfo', //cpg1.3.0
  'update_db' => 'Posodobi bazo', //cpg1.3.0
  'update_db_explanation' => 'Če si zamenjal kakšne datoteke od galerije, dodal spremembe ali nadgradil s prejšnje verije, izvedi vsaj enkrat ukaz "posodobi bazo". To bo naredilo potrebne spremembe v bazi, kreiralo manjkajoče tabele in nastavilo potrebne vrednosti za delovanje v konfiguracijskih tabelah.', //cpg1.3.0
);

?>