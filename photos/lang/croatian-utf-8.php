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
// CVS version: $Id: croatian-utf-8.php,v 1.7 2004/07/24 15:04:01 gaugau Exp $
// ------------------------------------------------------------------------- //

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Croatian',
  'lang_name_native' => 'Hrvatski',
  'lang_country_code' => 'hr',
  'trans_name'=> '',
  'trans_email' => '',
  'trans_website' => '',
  'trans_date' => '2004-03-31',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Ned', 'Pon', 'Uto', 'Sri', 'ÄŒet', 'Pet', 'Sub');
$lang_month = array('Sij', 'Velj', 'OÂžu', 'Tra', 'Svi', 'Lip', 'Srp', 'Kol', 'Ruj', 'Lis', 'Stu', 'Pro');

// Some common strings
$lang_yes = 'Da';
$lang_no  = 'Ne';
$lang_back = 'NATRAG';
$lang_continue = 'NASTAVI';
$lang_info = 'Informacija';
$lang_error = 'PogreÂška';

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
  'random' => 'Odabrane slike', //cpg1.3.0
  'lastup' => 'Posljednje dodano',
  'lastalb'=> 'Posljednje izmijenjeni albumi',
  'lastcom' => 'Posljednji komentari',
  'topn' => 'Najgledanije',
  'toprated' => 'Najbolje ocijenjeno',
  'lasthits' => 'Posljednje pogledano',
  'search' => 'Rezultati pretrage',
  'favpics'=> 'Omiljene slike', //cpg1.3.0
);

$lang_errors = array(
  'access_denied' => 'Nemate dozvolu pristupiti ovoj stranici.',
  'perm_denied' => 'Nemate dozvolu izvrÂšiti ovu radnju.',
  'param_missing' => 'Skripta pozvana bez potrebnih parametara.',
  'non_exist_ap' => 'Odabrani album/slika ne postoji', //cpg1.3.0
  'quota_exceeded' => 'PremaÂšena kvota diska<br /><br />VaÂša kvota prostora je [quota]K, vaÂše slike trenutno zauzimaju [space]K, ako dodate ovu sliku premaÂšit Ä‡ete kvotu.', //cpg1.3.0
  'gd_file_type_err' => 'Kada koristite GD image library dozvoljeni tipovi slika su samo JPEG and PNG.',
  'invalid_image' => 'Uploadana slika ima greÂšku ili ne moÂže biti obraÄ‘ena od strane GD library',
  'resize_failed' => 'Ne mogu napraviti thumbnail ili smanjiti veliÄinu slike.',
  'no_img_to_display' => 'Nema slike za prikaz',
  'non_exist_cat' => 'Odabrana kategorija ne postoji',
  'orphan_cat' => 'Kategorija nema direktorij, upotrijebite Category Manager kako biste ispravili problem!', //cpg1.3.0
  'directory_ro' => 'Direktorij \'%s\' nije dostupan, slike se ne mogu brisati', //cpg1.3.0
  'non_exist_comment' => 'Odabrani komentar ne postoji.',
  'pic_in_invalid_album' => 'Slika se nalazi u nepostojeÄ‡em albumu!?', //cpg1.3.0
  'banned' => 'Trenutno Vam je zabranjeno koristiti ove stranice.',
  'not_with_udb' => 'Ova funkcija je onemoguÄ‡ena u Coppermine-u jer je integrirana sa skriptom za forum. Ili ono Âšto pokuÂšavate napraviti nije podrÂžano u ovoj konfiguraciji, ili funkciju treba izvrÂšiti skripta za forum.',
  'offline_title' => 'Offline', //cpg1.3.0
  'offline_text' => 'Galerija trenutno nije u funkciji - navratite uskoro', //cpg1.3.0
  'ecards_empty' => 'Trenutno nema podataka o e-razglednicama. Provjerite da li ste omoguÄ‡ili ovu funkciju u Coppermine konfiguraciji!', //cpg1.3.0
  'action_failed' => 'Radnja nije uspjela.  Coppermine ne moÂže obaviti ovu radnju.', //cpg1.3.0
  'no_zip' => 'Potrebne libraries za procesuiranje ZIP dokumenata ne postoje.  Molimo Vas, kontaktirajte administratora.', //cpg1.3.0
  'zip_type' => 'Nemate dopuÂštenje za upload ZIP dokumenata.', //cpg1.3.0
);

$lang_bbcode_help = 'Following codes might be useful: <li>[b]<b>Bold</b>[/b]</li> <li>[i]<i>Italic</i>[/i]</li> <li>[url=http://yoursite.com/]Url Text[/url]</li> <li>[email]user@domain.com[/email]</li>'; //cpg1.3.0

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'alb_list_title' => 'Idi na popis albuma',
  'alb_list_lnk' => 'Popis albuma',
  'my_gal_title' => 'Idi u moju osobnu galeriju',
  'my_gal_lnk' => 'Moja galerija',
  'my_prof_lnk' => 'Moj profil',
  'adm_mode_title' => 'PrijeÄ‘i na admin mode',
  'adm_mode_lnk' => 'Admin mode',
  'usr_mode_title' => 'PrijeÄ‘i na user mode',
  'usr_mode_lnk' => 'User mode',
  'upload_pic_title' => '(Upload) Prebaci dokument  u album', //cpg1.3.0
  'upload_pic_lnk' => 'Upload file', //cpg1.3.0
  'register_title' => 'Kreiraj raÄun',
  'register_lnk' => 'Registracija',
  'login_lnk' => 'Ulaz',
  'logout_lnk' => 'Izlaz',
  'lastup_lnk' => 'Posljednje dodano',
  'lastcom_lnk' => 'Posljednji komentari',
  'topn_lnk' => 'Najgledanije',
  'toprated_lnk' => 'Najbolje ocijenjeno',
  'search_lnk' => 'Pretraga',
  'fav_lnk' => 'Omiljene slike',
  'memberlist_title' => 'PokaÂži popis Älanova', //cpg1.3.0
  'memberlist_lnk' => 'Popis Älanova', //cpg1.3.0
  'faq_title' => 'ÄŒesto postavljana pitanja o galeriji slika &quot;Coppermine&quot;', //cpg1.3.0
  'faq_lnk' => 'FAQ', //cpg1.3.0
);

$lang_gallery_admin_menu = array(
  'upl_app_lnk' => 'Upload dozvola',
  'config_lnk' => 'Konfiguracija',
  'albums_lnk' => 'Albumi',
  'categories_lnk' => 'Kategorije',
  'users_lnk' => 'Korisnici',
  'groups_lnk' => 'Grupe',
  'comments_lnk' => 'Pogledaj komentare', //cpg1.3.0
  'searchnew_lnk' => 'Batch add files', //cpg1.3.0
  'util_lnk' => 'Admin alati', //cpg1.3.0
  'ban_lnk' => 'Zabrana korisnika',
  'db_ecard_lnk' => 'PokaÂži e-razglednice', //cpg1.3.0
);

$lang_user_admin_menu = array(
  'albmgr_lnk' => 'Kreiraj / poredaj moje albume',
  'modifyalb_lnk' => 'Izmijeni moje albume',
  'my_prof_lnk' => 'Moj profil',
);

$lang_cat_list = array(
  'category' => 'Kategorija',
  'albums' => 'Albumi',
  'pictures' => 'Slike', //cpg1.3.0
);

$lang_album_list = array(
  'album_on_page' => '%d albuma na %d stranici(a)',
);

$lang_thumb_view = array(
  'date' => 'DATE',
  //Sort by filename and title
  'name' => 'NAZIV SLIKE',
  'title' => 'NASLOV',
  'sort_da' => 'Poredaj po datumu uzlazno',
  'sort_dd' => 'Poredaj po datumu silazno',
  'sort_na' => 'Poredaj po imenu uzlazno',
  'sort_nd' => 'Poredaj po imenu silazno',
  'sort_ta' => 'Poredaj po nazivu uzlazno',
  'sort_td' => 'Poredaj po nazivu silazno',
  'download_zip' => 'Downloadaj kao Zip dokument', //cpg1.3.0
  'pic_on_page' => '%d slika na %d stranici(a)',
  'user_on_page' => '%d korisnika na %d stranici(a)', //cpg1.3.0
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Vrati se na stranicu sa sliÄicama',
  'pic_info_title' => 'PrikaÂži/sakrij podatke o slici', //cpg1.3.0
  'slideshow_title' => 'Slideshow',
  'ecard_title' => 'PoÂšalji ovu sliku kao e-razglednicu', //cpg1.3.0
  'ecard_disabled' => 'e-razglednice nisu omoguÄ‡ene',
  'ecard_disabled_msg' => 'Nemate dopuÂštenje slati e-razglednice', //js-alert //cpg1.3.0
  'prev_title' => 'Pogledaj prethodnu sliku', //cpg1.3.0
  'next_title' => 'Pogledaj slijedeÄ‡u sliku', //cpg1.3.0
  'pic_pos' => 'SLIKA %s/%s', //cpg1.3.0
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Ocijenite ovu sliku ', //cpg1.3.0
  'no_votes' => '(Nije joÂš ocijenjena)',
  'rating' => '(Trenutna ocjena : %s / 5 s %s glasova)',
  'rubbish' => 'LoÂše',
  'poor' => 'Slabo',
  'fair' => 'Pristojno',
  'good' => 'Dobro',
  'excellent' => 'Jako dobro',
  'great' => 'Izvrsno',
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
  CRITICAL_ERROR => 'KritiÄna greÂška',
  'file' => 'Slika: ',
  'line' => 'Linija: ',
);

$lang_display_thumbnails = array(
  'filename' => 'Naziv slike : ',
  'filesize' => 'VeliÄina slike : ',
  'dimensions' => 'Dimenzije : ',
  'date_added' => 'Dodana dana : ', //cpg1.3.0
);

$lang_get_pic_data = array(
  'n_comments' => '%s komentara',
  'n_views' => '%s pogleda',
  'n_votes' => '(%s glasova)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Debug Info', //cpg1.3.0
  'select_all' => 'Odaberi sve', //cpg1.3.0
  'copy_and_paste_instructions' => 'Ako Âželite zatraÂžiti pomoÄ‡ na forumu, copy-and-paste ovaj debug kod u vaÂš post. Provjerite da li ste zamijenili sve zaporke u postu sa *** prije objavljivanja posta.', //cpg1.3.0
  'phpinfo' => 'PokaÂži phpinfo', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => 'Defaultni jezik', //cpg1.3.0
  'choose_language' => 'Odaberite VaÂš jezik', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'Defaultni predloÂžak', //cpg1.3.0
  'choose_theme' => 'Odaberite predloÂžak', //cpg1.3.0
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
  'Exclamation' => 'UskliÄnik',
  'Question' => 'Upitnik',
  'Very Happy' => 'Jako sretan',
  'Smile' => 'SmjeÂšak',
  'Sad' => 'TuÂžan',
  'Surprised' => 'IznenaÄ‘en',
  'Shocked' => 'ÂŠokiran',
  'Confused' => 'Zbunjen',
  'Cool' => 'Zadovoljan',
  'Laughing' => 'Smije se',
  'Mad' => 'Lud',
  'Razz' => 'Razjaren',
  'Embarassed' => 'PostiÄ‘en',
  'Crying or Very sad' => 'PlaÄe ili je jako tuÂžan',
  'Evil or Very Mad' => 'Zao ili jako lud',
  'Twisted Evil' => 'IzopaÄeno zlo',
  'Rolling Eyes' => 'OkreÄ‡e oÄima',
  'Wink' => 'Namiguje',
  'Idea' => 'Ima ideju',
  'Arrow' => 'Strjelica',
  'Neutral' => 'Neutralan',
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
  0 => 'NapuÂšta admin mode...',
  1 => 'Ulazi u admin mode...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Album mora imati ime !', //js-alert
  'confirm_modifs' => 'Jeste li sigurni da Âželite uÄiniti ove izmjene ?', //js-alert
  'no_change' => 'NiÂšte niÂšta izmijenili !', //js-alert
  'new_album' => 'Novi album',
  'confirm_delete1' => 'Jeste li sigurni da Âželite izbrisati ovaj album ?', //js-alert
  'confirm_delete2' => '\nSve slike i komentari Ä‡e biti izbrisani !', //js-alert
  'select_first' => 'Odaberite prvo album', //js-alert
  'alb_mrg' => 'Album Manager',
  'my_gallery' => '* Moja galerija *',
  'no_category' => '* Nema kategorije *',
  'delete' => 'IzbriÂši',
  'new' => 'Novo',
  'apply_modifs' => 'Primijeni izmjene',
  'select_category' => 'Odaberi kategoriju',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Nema parametara za \'%s\'operaciju !',
  'unknown_cat' => 'Odabrana kategorija ne postoji u bazi podataka',
  'usergal_cat_ro' => 'Kategorija galerija korisnika se ne moÂže brisati !',
  'manage_cat' => 'Obrada kategorija',
  'confirm_delete' => 'Jeste li sigurni da Âželite IZBRISATI ovu kategoriju', //js-alert
  'category' => 'Kategorija',
  'operations' => 'Operacije',
  'move_into' => 'Prebaci u',
  'update_create' => 'OsvjeÂži/kreiraj kategoriju',
  'parent_cat' => 'Glavna kategorija',
  'cat_title' => 'Naziv kategorije',
  'cat_thumb' => 'Thumbnail kategorije', //cpg1.3.0
  'cat_desc' => 'Opis kategorije',
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
  'title' => 'Konfiguracija',
  'restore_cfg' => 'Vrati defaultne vrijednosti',
  'save_cfg' => 'SaÄuvaj novu konfiguraciju',
  'notes' => 'BiljeÂške',
  'info' => 'Informacije',
  'upd_success' => 'Coppermine konfiguracija je osvjeÂžena',
  'restore_success' => 'Coppermine default konfiguracija je vraÄ‡ena',
  'name_a' => 'Naziv uzlazno',
  'name_d' => 'Naziv silazno',
  'title_a' => 'Naslov uzlazno',
  'title_d' => 'Naslov silazno',
  'date_a' => 'Datum uzlazno',
  'date_d' => 'Datum silazno',
  'th_any' => 'Max Aspect',
  'th_ht' => 'Visina',
  'th_wd' => 'ÂŠirina',
  'label' => 'label', //cpg1.3.0
  'item' => 'item', //cpg1.3.0
  'debug_everyone' => 'Svatko', //cpg1.3.0
  'debug_admin' => 'Samo administrator', //cpg1.3.0
        );

if (defined('CONFIG_PHP')) $lang_config_data = array(
  'General settings',
  array('Naziv galerije', 'gallery_name', 0),
  array('Opis galerije', 'gallery_description', 0),
  array('E-mail administratora galerije', 'gallery_admin_email', 0),
  array('Target address for the \'See more pictures\' link in e-cards', 'ecards_more_pic_target', 0),
  array('Galerija nije u funkciji', 'offline', 1), //cpg1.3.0
  array('Log ecards', 'log_ecards', 1), //cpg1.3.0
  array('Dopusti ZIP-download omiljenih slika', 'enable_zipdownload', 1), //cpg1.3.0

  'Language, Themes &amp; Charset settings',
  array('Jezik', 'lang', 5),
  array('PredloÂžak', 'theme', 6),
  array('PokaÂži popis jezika', 'language_list', 1), //cpg1.3.0
  array('PokaÂži zastave jezika', 'language_flags', 8), //cpg1.3.0
  array('PokaÂži &quot;reset&quot; u odabranom jeziku', 'language_reset', 1), //cpg1.3.0
  array('PokaÂži popis predloÂžaka', 'theme_list', 1), //cpg1.3.0
  array('PokaÂži &quot;reset&quot; u odabiru predloÂžaka', 'theme_reset', 1), //cpg1.3.0
  array('PokaÂži FAQ', 'display_faq', 1), //cpg1.3.0
  array('PokaÂži bbcode help', 'show_bbcode_help', 1), //cpg1.3.0
  array('Character encoding', 'charset', 4), //cpg1.3.0

  'Album list view',
  array('ÂŠirina glavne tablice (pixels or %)', 'main_table_width', 0),
  array('Broj nivoa kategorija za prikaz', 'subcat_level', 0),
  array('Broj albuma za prikaz', 'albums_per_page', 0),
  array('Broj stupaca za popis albuma', 'album_list_cols', 0),
  array('VeliÄina thumbnails-a u pikselima', 'alb_list_thumb_size', 0),
  array('SadrÂžaj glavne stranice', 'main_page_layout', 0),
  array('PokaÂži thumbnails-e albuma prvog nivoa u kategorijama','first_level',1),

  'Thumbnail view',
  array('Broj stupaca na thumbnail stranici', 'thumbcols', 0),
  array('Broj redova na thumbnail stranici', 'thumbrows', 0),
  array('Maksimalan broja tabs za prikaz', 'max_tabs', 10), //cpg1.3.0
  array('PrikaÂži podatke (pored naslova) ispod thumbnail-a', 'caption_in_thumbview', 1), //cpg1.3.0
  array('PrikaÂži broj pregleda ispod thumbnail-a', 'views_in_thumbview', 1), //cpg1.3.0
  array('PrikaÂži broj komentara ispod thumbnail-a', 'display_comment_count', 1),
  array('PrikaÂži naziv uploada ispod thumbnail-a', 'display_uploader', 1), //cpg1.3.0
  array('Defaultni poredak za slike', 'default_sort_order', 3), //cpg1.3.0
  array('Minimalni broj glasova za sliku za prikaz u \'top-rated\' list', 'min_votes_for_rating', 0), //cpg1.3.0

  'Image view &amp; Comment settings',
  array('ÂŠirina tablice za prikaz slika (pixels or %)', 'picture_table_width', 0), //cpg1.3.0
  array('Podaci o slikama se vide po dafaultu', 'display_pic_info', 1), //cpg1.3.0
  array('Filtriraj ruÂžne rijeÄi u komentarima', 'filter_bad_words', 1),
  array('Dopusti smilies u komentarima', 'enable_smilies', 1),
  array('Dopusti nekoliko  uzastopnih komentara o nekoj slici od istog korisnika (disable flood protection)', 'disable_comment_flood_protect', 1), //cpg1.3.0
  array('Maksimalna duÂžina opisa slike', 'max_img_desc_length', 0),
  array('Maksimalni broj znakova u rijeÄi', 'max_com_wlength', 0),
  array('Maksimalni broj redova u komentaru', 'max_com_lines', 0),
  array('Maksimalna duÂžina komentara', 'max_com_size', 0),
  array('PokaÂži filmski strip', 'display_film_strip', 1),
  array('Broj slika u film stripu', 'max_film_strip_items', 0),
  array('Obavijesti administratora o komentaru e-mailom', 'email_comment_notification', 1), //cpg1.3.0
  array('Slideshow pauza u milisekundama (1 second = 1000 milliseconds)', 'slideshow_interval', 0), //cpg1.3.0

  'Files and thumbnails settings', //cpg1.3.0
  array('Kvalitet JPEG dokumenata', 'jpeg_qual', 0),
  array('Maksimalna veliÄina thumbnail-a <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0), //cpg1.3.0
  array('Koristi veliÄinu ( width or height or Max aspect for thumbnail )<b>*</b>', 'thumb_use', 7),
  array('Kreiraj srednjevelike slike','make_intermediate',1),
  array('Maksimalna Âširina ili visina srednjevelikih slika/videa <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0), //cpg1.3.0
  array('Maksimalna veliÄina za uploadane dokumente (KB)', 'max_upl_size', 0), //cpg1.3.0
  array('Maksimalna Âširina ili visina za uploadane slike/video (pixels)', 'max_upl_width_height', 0), //cpg1.3.0

  'Files and thumbnails advanced settings', //cpg1.3.0
  array('PrikaÂži ikonu privatnog albuma nelogiranom korisniku','show_private',1), //cpg1.3.0
  array('Zaboravljeni znakovi u nazivima slika', 'forbiden_fname_char',0), //cpg1.3.0
  //array('DopuÂštene ekstenzije dokumenata za upload', 'allowed_file_extensions',0), //cpg1.3.0
  array('DopuÂšteni tipovi slika', 'allowed_img_types',0), //cpg1.3.0
  array('DopuÂšteni tipovi filmova', 'allowed_mov_types',0), //cpg1.3.0
  array('DopuÂšteni audio tipovi', 'allowed_snd_types',0), //cpg1.3.0
  array('DopuÂšteni tipovi dokumenata', 'allowed_doc_types',0), //cpg1.3.0
  array('NaÄin mijenjanja veliÄine slika','thumb_method',2), //cpg1.3.0
  array('Put do ImageMagick \'convert\' utility (example /usr/bin/X11/)', 'impath', 0), //cpg1.3.0
  //array('DopuÂšteni tipovi slika (vaÂžeÄ‡i samo za ImageMagick)', 'allowed_img_types',0), //cpg1.3.0
  array('Komandne opcije za ImageMagick', 'im_options', 0), //cpg1.3.0
  array('ProÄitaj EXIF podatke kod JPEG dokumenata', 'read_exif_data', 1), //cpg1.3.0
  array('ProÄitaj IPTC podatke kod JPEG dokumenata', 'read_iptc_data', 1), //cpg1.3.0
  array('Direktorij albuma <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0), //cpg1.3.0
  array('Direktorij za korisniÄke slike <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0), //cpg1.3.0
  array('Prefix za srednjevelike slike <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0), //cpg1.3.0
  array('Prefix za thumbnails-e <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0), //cpg1.3.0
  array('Defaultni mode za direktorije', 'default_dir_mode', 0), //cpg1.3.0
  array('Defaultni mode za dokumente', 'default_file_mode', 0), //cpg1.3.0

  'User settings',
  array('Dopusti registraciju novih korisnika', 'allow_user_registration', 1),
  array('Registracija korisnika zahtijeva potvrdu e-mailom', 'reg_requires_valid_email', 1),
  array('Obavijesti administratora o registraciji e-mailom', 'reg_notify_admin_email', 1), //cpg1.3.0
  array('Dopusti da dva korisnika imaju istu e-mail adresu', 'allow_duplicate_emails_addr', 1),
  array('Korisnici mogu imati privatne albume (Note: if you switch from \'yes\' to \'no\' any current private albums will become public)', 'allow_private_albums', 1), //cpg1.3.0
  array('Obavijesti administratora o davanju dopuÂštenja korisniku za upload', 'upl_notify_admin_email', 1), //cpg1.3.0
  array('Dopusti logiranim korisnicima da vide popis korisnika', 'allow_memberlist', 1), //cpg1.3.0

  'Custom fields for image description (leave blank if unused)',
  array('Polje 1 ime', 'user_field1_name', 0),
  array('Polje 2 ime', 'user_field2_name', 0),
  array('Polje 3 ime', 'user_field3_name', 0),
  array('Polje 4 ime', 'user_field4_name', 0),

  'Cookies settings',
  array('Naziv kolaÄiÄ‡a kojeg koristi skripta (when using bbs integration, make sure it differs from the bbs\'s cookie name)', 'cookie_name', 0),
  array('Put kolaÄiÄ‡a kojeg koristi skripta', 'cookie_path', 0),

  'Miscellaneous settings',
  array('OmoguÄ‡i debug mode', 'debug_mode', 9), //cpg1.3.0
  array('PrikaÂži obavijesti u debug modu', 'debug_notice', 1), //cpg1.3.0

  '<br /><div align="left"><a name="notice1"></a>(*) This settings mustn\'t be changed if you already have pictures in your database.<br />
  <a name="notice2"></a>(**) When changing this setting, only the files that are added from that point on are affected, so it is advisable that this setting must not be changed if there are already files in the gallery. You can, however, apply the changes to the existing files with the &quot;<a href="util.php">admin tools</a> (resize pictures)&quot; utility from the admin menu.</div><br />', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Poslane e-razglednice', //cpg1.3.0
  'ecard_sender' => 'PoÂšiljatelj', //cpg1.3.0
  'ecard_recipient' => 'Primatelj', //cpg1.3.0
  'ecard_date' => 'Datum', //cpg1.3.0
  'ecard_display' => 'PrikaÂži e-razglednicu', //cpg1.3.0
  'ecard_name' => 'Ime', //cpg1.3.0
  'ecard_email' => 'E-mail', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'uzlazno', //cpg1.3.0
  'ecard_descending' => 'silazno', //cpg1.3.0
  'ecard_sorted' => 'Sortirano', //cpg1.3.0
  'ecard_by_date' => 'po datumu', //cpg1.3.0
  'ecard_by_sender_name' => 'po poÂšiljateljevu imenu', //cpg1.3.0
  'ecard_by_sender_email' => 'po poÂšiljateljevoj e-mail adresi', //cpg1.3.0
  'ecard_by_sender_ip' => 'po poÂšiljateljevoj IP adresi', //cpg1.3.0
  'ecard_by_recipient_name' => 'po primateljevu imenu', //cpg1.3.0
  'ecard_by_recipient_email' => 'po primateljevoj e-mail adresi', //cpg1.3.0
  'ecard_number' => 'prikaÂži podatke %s to %s of %s', //cpg1.3.0
  'ecard_goto_page' => 'idi na stranicu', //cpg1.3.0
  'ecard_records_per_page' => 'Podaci po stranici', //cpg1.3.0
  'check_all' => 'Check All', //cpg1.3.0
  'uncheck_all' => 'Uncheck All', //cpg1.3.0
  'ecards_delete_selected' => 'IzbriÂši odabrane e-razglednice', //cpg1.3.0
  'ecards_delete_confirm' => 'Jeste li sigurni da Âželite izbrisati podatke? OznaÄite checkbox!', //cpg1.3.0
  'ecards_delete_sure' => 'Siguran/na sam', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Trebate upisati svoje ime i komentar',
  'com_added' => 'VaÂš komentar je dodan',
  'alb_need_title' => 'Trebate napisati naziv albuma !',
  'no_udp_needed' => 'Nije potrebno osvjeÂžavanje.',
  'alb_updated' => 'Album je osvjeÂžen',
  'unknown_album' => 'Odabrani album ne postoji ili nemate dopuÂštenje za upload u ovaj album',
  'no_pic_uploaded' => 'Nije uploadana slika !<br /><br />If you have really selected a file to upload, check that the server allows file uploads...', //cpg1.3.0
  'err_mkdir' => 'Nije kreiran direktorij %s !',
  'dest_dir_ro' => 'U traÂženi direktorij %s se ne moÂže pisati po defaultu skripte !',
  'err_move' => 'NemoguÄ‡e premjestiti %s u %s !',
  'err_fsize_too_large' => 'VeliÄina dokumenta kojeg ste uploadali je prevelika (maksimalna dopuÂštena je %s x %s) !', //cpg1.3.0
  'err_imgsize_too_large' => 'VeliÄina dokumenta kojeg ste uploadali je prevelika (maksimalna doÂšuÂštena je %s KB) !',
  'err_invalid_img' => 'Dokument kojeg ste uploadali nije vaÂžeÄ‡a slika !',
  'allowed_img_types' => 'MoÂžete uploadati samo %s slike.',
  'err_insert_pic' => 'Dokument \'%s\' se ne moÂže dodati u album ', //cpg1.3.0
  'upload_success' => 'VaÂš dokument je uploadan uspjeÂšno<br /><br />Bit Ä‡e vidljiv nakon odobrenja administratora.', //cpg1.3.0
  'notify_admin_email_subject' => '%s - Obavijest o uploadu', //cpg1.3.0
  'notify_admin_email_body' => 'Uploada je slika %s koja treba VaÂše odobrenje. Posjetite %s', //cpg1.3.0
  'info' => 'Informacije',
  'com_added' => 'Dodan komentar',
  'alb_updated' => 'Album osvjeÂžen',
  'err_comment_empty' => 'VaÂš komentar je prazan !',
  'err_invalid_fext' => 'PrihvaÄ‡aju se samo dokumenti sa slijedeÄ‡im ekstenzijama : <br /><br />%s.',
  'no_flood' => 'ÂŽao mi je, ali Vi ste veÄ‡ autor posljednjeg komentara za ovu sliku<br /><br />Uredite komentar kojeg ste napisali, ako ga Âželite izmijeniti', //cpg1.3.0
  'redirect_msg' => 'Preusmjereni ste.<br /><br /><br />Click \'CONTINUE\' if the page does not refresh automatically',
  'upl_success' => 'VaÂš dokument je uspjeÂšno dodan', //cpg1.3.0
  'email_comment_subject' => 'Komentar napisan u Coppermine Photo Gallery', //cpg1.3.0
  'email_comment_body' => 'Netko je napisao komentar u VaÂšoj galeriji. See it at', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Caption',
  'fs_pic' => 'slika u punoj veliÄini',
  'del_success' => 'uspjeÂšno izbrisano',
  'ns_pic' => 'normalna veliÄina slike',
  'err_del' => 'ne moÂže se izbrisati',
  'thumb_pic' => 'thumbnail',
  'comment' => 'komentar',
  'im_in_alb' => 'slika u albumu',
  'alb_del_success' => 'Album \'%s\' izbrisan',
  'alb_mgr' => 'Album Manager',
  'err_invalid_data' => 'PogreÂšni podaci u \'%s\'',
  'create_alb' => 'Kreira album \'%s\'',
  'update_alb' => 'OsvjeÂžava album \'%s\' s naslovom \'%s\' i indexom \'%s\'',
  'del_pic' => 'BriÂši dokument', //cpg1.3.0
  'del_alb' => 'BriÂši album',
  'del_user' => 'BriÂši korisnika',
  'err_unknown_user' => 'Odabrani korisnik ne postoji !',
  'comment_deleted' => 'Komentar je uspjeÂšno izbrisan',
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
  'confirm_del' => 'Jeste li sigurni da Âželite IZBRISATI ovaj dokument ? \\nKomentari Ä‡e takoÄ‘er biti izbrisani.', //js-alert //cpg1.3.0
  'del_pic' => 'IZBRIÂŠI OVAJ DOKUMENT', //cpg1.3.0
  'size' => '%s x %s pixela',
  'views' => '%s puta',
  'slideshow' => 'Slideshow',
  'stop_slideshow' => 'ZAUSTAVI SLIDESHOW',
  'view_fs' => 'Klikni za sliku u punoj veliÄini',
  'edit_pic' => 'Uredu opis', //cpg1.3.0
  'crop_pic' => 'Smanji i rotiraj', //cpg1.3.0
);

$lang_picinfo = array(
  'title' =>'Info o dokumentu', //cpg1.3.0
  'Filename' => 'Naziv dokumenta',
  'Album name' => 'Naziv albuma',
  'Rating' => 'Ocjena (%s votes)',
  'Keywords' => 'KljuÄne rijeÄi',
  'File Size' => 'VeliÄina dokumenta',
  'Dimensions' => 'Dimenzije',
  'Displayed' => 'Prikazano',
  'Camera' => 'Kamera',
  'Date taken' => 'Datum snimanja',
  'Aperture' => 'Otvor',
  'Exposure time' => 'Vrijeme ekspozicije',
  'Focal length' => 'ÂŽariÂšna duÂžina',
  'Comment' => 'Komentar',
  'addFav'=>'Dodaj u Favorite', //cpg1.3.0
  'addFavPhrase'=>'Favoriti', //cpg1.3.0
  'remFav'=>'IzbriÂši iz Favorita', //cpg1.3.0
  'iptcTitle'=>'IPTC Naslov', //cpg1.3.0
  'iptcCopyright'=>'IPTC Copyright', //cpg1.3.0
  'iptcKeywords'=>'IPTC kljuÄne rijeÄi', //cpg1.3.0
  'iptcCategory'=>'IPTC kategorija', //cpg1.3.0
  'iptcSubCategories'=>'IPTC podkategorija', //cpg1.3.0
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Uredi ovaj komentar',
  'confirm_delete' => 'Jeste li sigurni da Âželite izbrisati ovaj komentar ?', //js-alert
  'add_your_comment' => 'Dodajte VaÂš komentar',
  'name'=>'Ime',
  'comment'=>'Komentar',
  'your_name' => 'VaÂše ime',
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Klikni sliku za zatvaranje prozora',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'PoÂšalji e-razglednicu',
  'invalid_email' => '<b>Upozorenje</b> : nevaÂžeÄ‡a e-mail adresa !',
  'ecard_title' => 'E-razglednica od %s za Vas',
  'error_not_image' => 'Samo se slike mogu poslati kao e-razglednice.', //cpg1.3.0
  'view_ecard' => 'Ako se e-razglednica ne prikaÂže toÄno, kliknite na ovaj link',
  'view_more_pics' => 'Kliknite na ovaj link da biste vidjeli viÂše slika !',
  'send_success' => 'VaÂša e-razglednica je poslana',
  'send_failed' => 'ÂŽao nam je, ali server ne moÂže poslati VaÂšu razglednicu...',
  'from' => 'Od',
  'your_name' => 'VaÂše ime',
  'your_email' => 'VaÂša e-mail adresa',
  'to' => 'Za',
  'rcpt_name' => 'Ime primatelja',
  'rcpt_email' => 'E-mail adresa primatelja',
  'greetings' => 'Pozdravi',
  'message' => 'Poruka',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Info&nbsp;o slici', //cpg1.3.0
  'album' => 'Album',
  'title' => 'Naziv',
  'desc' => 'Opis',
  'keywords' => 'KljuÄne rijeÄi',
  'pic_info_str' => '%s &times; %s - %s KB - %s views - %s votes',
  'approve' => 'Potvrdi dokument', //cpg1.3.0
  'postpone_app' => 'Odgodi potvrdu',
  'del_pic' => 'IzbriÂši dokument', //cpg1.3.0
  'read_exif' => 'ProÄitaj EXIF info ponovno', //cpg1.3.0
  'reset_view_count' => 'Resetiraj brojaÄ posjeta',
  'reset_votes' => 'Resetiraj glasove',
  'del_comm' => 'IzbriÂši komentare',
  'upl_approval' => 'Uploadaj potvrdu',
  'edit_pics' => 'Uredi dokumente', //cpg1.3.0
  'see_next' => 'Pogledajte slijedeÄ‡e dokumente', //cpg1.3.0
  'see_prev' => 'Pogledajte prethodne dokumente', //cpg1.3.0
  'n_pic' => '%s dokumenti', //cpg1.3.0
  'n_of_pic_to_disp' => 'Broj slika za prikaz', //cpg1.3.0
  'apply' => 'Primijeni izmjene', //cpg1.3.0
  'crop_title' => 'Coppermine Picture Editor', //cpg1.3.0
  'preview' => 'Pregled', //cpg1.3.0
  'save' => 'SaÄuvaj sliku', //cpg1.3.0
  'save_thumb' =>'Save kao thumbnail', //cpg1.3.0
  'sel_on_img' =>'Izbor treba biti na slici!', //js-alert //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Frequently Asked Questions', //cpg1.3.0
  'toc' => 'Table of contents', //cpg1.3.0
  'question' => 'Question: ', //cpg1.3.0
  'answer' => 'Answer: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'General FAQ', //cpg1.3.0
  array('ZaÂšto se trebam registrirati?', 'Administrator moÂže, ali ne mora zahtijevati registraciju.Registracija Älanu omoguÄ‡uje dodatne moguÄ‡nosti, kao uploadanje, posjedovanje liste favorita, moguÄ‡nost ocjenjivanja slika, pisanja komentara, itd.', 'omoguÄ‡i registraciju korisnika', '0'), //cpg1.3.0
  array('Kako se registrirati?', 'Odite na &quot;Registracija&quot; i ispunite potrebna polja (i opcionalna ako to Âželite).<br />Ako administrator ima e-mail aktivaciju , tada Ä‡ete nakon slanja VaÂših podataka primiti e-mail na adresu koju ste naveli prilikom registracije, u kojem su naputci o tome kako aktivirati VaÂše Älanstvo. Morate aktivirati Älanstvo kako biste se mogli logirati.', 'allow_user_registration', '1'), //cpg1.3.0
  array('Kako se logirati?', 'Odite na &quot;Login&quot;, unesite VaÂše korisniÄko ime i zaporku i kliknite na &quot;Upamti me&quot; tako Ä‡ete biti logirani ia ako napustite stranice.<br /><b>VAÂŽNO:Cookies moraju biti ukljuÄeni i cookie s ovih stranica se ne smije izbrisati kako bi se mogla koristiti opcija &quot;Upamti me&quot;.</b>', 'offline', 0), //cpg1.3.0
  array('ZaÂšto se ne mogu logirati?', 'Jeste li se registrirali i odgovorili na link koji Vam je poslan u e-mail poruci?. Ovaj link aktivira VaÂše Älanstvo. Za druge probleme u vezi logiranja kontaktirajte administratora.', 'offline', 0), //cpg1.3.0
  array('ÂŠto ako sam zaboravio/la zaporku?', 'Ako ove stranice imaju &quot;Zaboravljena zaporka&quot; link onda ga upotrijebite. U drugim sluÄajevima kontaktirajte administratora za novu zaporku.', 'offline', 0), //cpg1.3.0
  array('ÂŠto ako sam promijenio e-mail adresu?', 'Jednostavno se logirajte i promijenite e-mail adresu u &quot;Profilu&quot;', 'offline', 0), //cpg1.3.0
  array('Kako Ä‡u saÄuvati sliku u  &quot;Moji favoriti&quot;?', 'Kliknite na sliku i kliknite na &quot;info o slici&quot; link (<img src="images/info.gif" width="16" height="16" border="0" alt="Picture information" />); odite na informacije o slici i kliknite &quot;Dodaj u favorite&quot;.<br />Administrator moÂže imati  &quot;informacije o slici&quot; po defaultu.<br />VAÂŽNO:Cookies moraju biti ukljuÄeni za ovu stranicu i ne smiju se izbrisati.', 'offline', 0), //cpg1.3.0
  array('Kako Ä‡u ocijeniti sliku?', 'Kliknite na thumbnail slike i odite na dno, te odaberite ocjenu.', 'offline', 0), //cpg1.3.0
  array('Kako Ä‡u napisati komentar za sliku?', 'Kliknite na thumbnail slike i odite na dno, te napiÂšite komentar.', 'offline', 0), //cpg1.3.0
  array('Kako Ä‡u uploadati sliku?', 'Odite na  &quot;Uploadaj sliku&quot;te odaberite album u kojeg Âželite uploadati,kliknite &quot;Browse&quot; i odaberite sliku za upload, kliknite &quot;open&quot; (dodajte naslov i opis ako Âželite) i kliknite &quot;Submit&quot;', 'allow_private_albums', 0), //cpg1.3.0
  array('Gdje Ä‡u uploadati sliku?', 'MoÄ‡i Ä‡ete uploadati sliku u jedan od VaÂših albuma u &quot;Moja galerija&quot;. Administrator Vam moÂže dopustiti da uploadate jednu ili viÂše slika u albume u glavnoj galeriji.', 'allow_private_albums', 0), //cpg1.3.0
  array('Koji tip i koju veliÄinu slika mogu uploadati?', 'VeliÄina i tip (jpg,gif,..itd.) ovose o administratoru.', 'offline', 0), //cpg1.3.0
  array('ÂŠto je &quot;Moja galerija&quot;?', '&quot;Moja galerija&quot; je osobna galerija u koju korisnik moÂže uploadati svoje slike.', 'allow_private_albums', 0), //cpg1.3.0
  array('Kako Ä‡u kreirati, promijeniti naziv ili izbrisati album u  &quot;Moja galerija&quot;?', 'Morate biti u &quot;Admin-Modu&quot;<br />Odite &quot;Kreiraj/Poredaj moje albume&quot;i kliknite &quot;Novo&quot;. Promijeni &quot;Novi album&quot; u Âželjeno ime.<br />TakoÄ‘er moÂžete preimenovati bilo koji album u VaÂšo galeriji.<br />Kliknite &quot;Primijeni promjene&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Kako mogu izmijeniti i onemoguÄ‡iti korisnike da gledaju moje albume?', 'Morate biti u &quot;Admin. Modu&quot;<br />Idite na &quot;Izmijeni moje albume. Na &quot;OsvjeÂži album&quot; baru, odaberite album kojeg Âželite izmijeniti.<br />Ovdje moÂžete promijeniti naziv, opis, thumbnail sliku, ograniÄiti dopuÂštenje za pregledanje i komentiranje/ocjenjivanje.<br />Kliknite &quot;OsvjeÂži album&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Kako mogu gledati albume drugih korisnika?', 'Odite na &quot;Popis albuma&quot; i odaberite &quot;KorisniÄke galerije&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('ÂŠto su kolaÄiÄ‡i (cookies)?', 'Cookies su tekstualni podaci koji se Âšalju sa stranica i koji se postavljaju na VaÂš kompjuter.<br />Cookies obiÄno dopuÂštaju korisniku da napusti neke stranice i da se kasnije na njih vrati bez ponovnog logiranja.', 'offline', 0), //cpg1.3.0
  array('Gdje mogu nabaviti ovaj program za moje stranice?', 'Coppermine je besplatna multimedijalna galerija, ostvarena pod GNU GPL. Ima brojne moguÄ‡nosti i moÂže se koristiti na razliÄitim platformama. Posjetite <a href="http://coppermine.sf.net/">Coppermine Home Page</a> za viÂše informacija ili za download.', 'offline', 0), //cpg1.3.0

  'Navigating the Site', //cpg1.3.0
  array('ÂŠto je &quot;Popis albuma&quot;?', 'On Ä‡e Vam pokazati cijelu galeriju s linkovima za svaku kategoriju. Thumbnail mugu biti link za kategorije.', 'offline', 0), //cpg1.3.0
  array('ÂŠto je &quot;Moja galerija&quot;?', 'Ova omoguÄ‡uje korisnicima da otvaraju vlastite galerije i da dodaju/briÂšu ili mijenjaju albume kao i da u njih uploadju.', 'allow_private_albums', 0), //cpg1.3.0
  array('ÂŠto je razlika izmeÄ‘u &quot;Admin Moda&quot; i &quot;KorisniÄkog Moda&quot;?', 'Kada ste u admin-modu, moÂžete modificirati svoje galerije (kao i druge ako Vam to dopusti administrator).', 'allow_private_albums', 0), //cpg1.3.0
  array('ÂŠto je &quot;Uploadaj sliku&quot;?', 'Ova moguÄ‡nost dopuÂšta korisniku da uploada sliku (veliÄinu i vrstu odreÄ‘uje administrator) u galeriju koju odabere ili korisnik ili administrator.', 'allow_private_albums', 0), //cpg1.3.0
  array('ÂŠto je &quot;Posljednje uploadano&quot;?', 'Ova rubrika pokazuje posljednje slike uploadane u galeriju.', 'offline', 0), //cpg1.3.0
  array('ÂŠto je &quot;Posljednji komentari&quot;?', 'Ova rubrika pokazuje posljednje komentare uz slike koje su napisali korisnici.', 'offline', 0), //cpg1.3.0
  array('ÂŠto je &quot;Najgledanije&quot;?', 'Ova rubrika pokazuje najgledanije slike od strane korisnika (bilo da su logirani ili ne).', 'offline', 0), //cpg1.3.0
  array('ÂŠto je &quot;Najbolje ocijenjene&quot;?', 'Ova rubrika pokazuje najbolje ocijenjene slike od strane korisnika, te pokazuje prosjeÄnu ocjenu (e.g: five users each gave a <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: the picture would have an average rating of <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;Five users rated the picture from 1 to 5 (1,2,3,4,5) would result in an average <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />The ratings go from <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (best) to <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (worst).', 'offline', 0), //cpg1.3.0
  array('ÂŠto je &quot;Moji favoriti&quot;?', 'Ova rubrika omoguÄ‡ava korisnicima da saÄuvaju omiljene slike u cookieju koji je poslan na kompjuter.', 'offline', 0), //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Podsjetnik za zaporku', //cpg1.3.0
  'err_already_logged_in' => 'VeÄ‡ ste logirani !', //cpg1.3.0
  'enter_username_email' => 'Unesite VaÂše korisniÄko ime i e-mail adresu', //cpg1.3.0
  'submit' => 'go', //cpg1.3.0
  'failed_sending_email' => 'E-mail podsjetnika za zaporku se ne moÂže poslati !', //cpg1.3.0
  'email_sent' => 'E-mail sa VaÂšim korisniÄkim imenom i zaporkom je poslan %s', //cpg1.3.0
  'err_unk_user' => 'Odabrani korisnik ne postoji!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - Podsjetnik za zaporku', //cpg1.3.0
  'passwd_reminder_body' => 'TraÂžili ste da Vas se obavijesti o login podacima:
KorisniÄko ime: %s
Zaporka: %s
Kliknite %s za login.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Ime grupe',
  'disk_quota' => 'Disk quota',
  'can_rate' => 'MoÂžete ocijeniti slike', //cpg1.3.0
  'can_send_ecards' => 'MoÂžete poslati e-razglednice',
  'can_post_com' => 'MoÂžete pisati komentare',
  'can_upload' => 'MoÂžete uploadati slike', //cpg1.3.0
  'can_have_gallery' => 'MoÂžete imati osobnu galeriju',
  'apply' => 'Primijeni izmjene',
  'create_new_group' => 'Kreiraj novu grupu',
  'del_groups' => 'IzbriÂši odabranu(e) grupU(e)',
  'confirm_del' => 'Upozorenje, kada izbriÂšete grupukorisnici koji pripadaju toj grupi biti Ä‡e prebaÄeni u \'Registrirani\' grupu !\n\nÂŽalite li nastaviti ?', //js-alert //cpg1.3.0
  'title' => 'Uredite korisniÄke grupe',
  'approval_1' => 'Pub. Upl. dozvola (1)',
  'approval_2' => 'Priv. Upl. dozvola (2)',
  'upload_form_config' => 'Upload form configuration', //cpg1.3.0
  'upload_form_config_values' => array( 'Upload samo jedne slike', 'Upload samo viÂše slika', 'samo URI upload', 'samo ZIP upload', 'File-URI', 'File-ZIP', 'URI-ZIP', 'File-URI-ZIP'), //cpg1.3.0
  'custom_user_upload'=>'MoÂže li korisnik prilagoditi broj upload kuÄ‡ica?', //cpg1.3.0
  'num_file_upload'=>'Maksimalni/precizni broj kuÄ‡ica za upload slika', //cpg1.3.0
  'num_URI_upload'=>'Maksimalni/precizni broj kuÄ‡ica za URI upload', //cpg1.3.0
  'note1' => '<b>(1)</b> Za upload u javni album potrebna je dozvola administratora',
  'note2' => '<b>(2)</b> Za upload u album korisnika potrbna je dozvola administratora',
  'notes' => 'Notes',
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Dobro doÂšli !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Jeste li sigurni da Âželite IZBRISATI ovaj album ? \\nSve slike i komentari Ä‡e takoÄ‘er biti izbrisani.', //js-alert //cpg1.3.0
  'delete' => 'IZBRIÂŠPI',
  'modify' => 'KARAKTERISTIKE',
  'edit_pics' => 'UREDI SLIKE', //cpg1.3.0
);

$lang_list_categories = array(
  'home' => 'Home',
  'stat1' => '<b>[pictures]</b> slike(a) u <b>[albums]</b> albuma(u) i <b>[cat]</b> kategorije(a) sa <b>[comments]</b> komentara pregledane <b>[views]</b> put(a)', //cpg1.3.0
  'stat2' => '<b>[pictures]</b> slike(a) <b>[albums]</b> albuma(u) i <b>[views]</b> times', //cpg1.3.0
  'xx_s_gallery' => '%s\'s Gallery',
  'stat3' => '<b>[pictures]</b> files in <b>[albums]</b> albums with <b>[comments]</b> comments viewed <b>[views]</b> put(a)', //cpg1.3.0
);

$lang_list_users = array(
  'user_list' => 'Popis korisnika',
  'no_user_gal' => 'Nema galerija korisnika',
  'n_albums' => '%s album(i)',
  'n_pics' => '%s slika(e)', //cpg1.3.0
);

$lang_list_albums = array(
  'n_pictures' => '%s slika', //cpg1.3.0
  'last_added' => ', posljednja dodana %s',
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Login',
  'enter_login_pswd' => 'Unesite VaÂše korisniÄko ime i zaporku',
  'username' => 'KorisniÄko ime',
  'password' => 'Zaporka',
  'remember_me' => 'Upamti me',
  'welcome' => 'Dobro doÂšli %s ...',
  'err_login' => '*** Neuspio login. PokuÂšajte ponovno ***',
  'err_already_logged_in' => 'VeÄ‡ ste logirani !',
  'forgot_password_link' => 'Zaboravio(la) sam zaporku', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Logout',
  'bye' => 'Do viÄ‘enja %s ...',
  'err_not_loged_in' => 'Niste logirani !',
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
  'upd_alb_n' => 'OsvjeÂži album(e) %s',
  'general_settings' => 'Generalne postavke',
  'alb_title' => 'Naziv albuma',
  'alb_cat' => 'Kategorija albuma',
  'alb_desc' => 'Opis albuma',
  'alb_thumb' => 'Thumbnail albuma',
  'alb_perm' => 'Dozvole za ovaj album',
  'can_view' => 'Album moÂže(gu) vidjeti',
  'can_upload' => 'Posjetitelji mogu uploadati slike',
  'can_post_comments' => 'Posjetitelji mogu pisati komentare',
  'can_rate' => 'Posjetitelji mogu ocjenjivati slike',
  'user_gal' => 'Galerija korisnika',
  'no_cat' => '* Nema kategorije *',
  'alb_empty' => 'Album je prazan',
  'last_uploaded' => 'Posljednje dodano',
  'public_alb' => 'Svatko (javni album)',
  'me_only' => 'Samo ja',
  'owner_only' => 'Vlasnik albuma (%s) samo',
  'groupp_only' => 'ÄŒlanovi \'%s\' grupe',
  'err_no_alb_to_modify' => 'Albumi se ne mogu mijenjati u bazi podataka.',
  'update' => 'OsvjeÂži album', //cpg1.3.0
  'notice1' => '(*) ovisi o  %sgroupnim%s postavkama', //cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'ÂŽao nam je, ali veÄ‡ ste ocijenili ovu sliku', //cpg1.3.0
  'rate_ok' => 'VaÂša ocjena je prihvaÄ‡ena',
  'forbidden' => 'Ne moÂžete ocijeniti VaÂše vlastite slike.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Iako Ä‡e administrator {IME_GALERIJE} brisati ili izmijeniti shvati neprihvatljivi materijal Äim prije, nemoguÄ‡e je pregledati baÂš svaki komentar. Stoga, prihvaÄ‡ate da stavovi objavljeni na ovim stranicama izraÂžavaju poglede i miÂšljenja autora, a ne administratora ili webmastera (osim za njihove vlastite), te oni neÄ‡e biti odgovorni za iste.<br />
<br />
PrihvaÄ‡ate klauzulu da neÄ‡ete objavljivati nikakav materijal koji je uvredljiv, opscen, vulgaran, prepun mrÂžnje, prijetnji, ili bilo kakav drugi koji bi mogao povrijediti postojeÄ‡e zakone. SlaÂžete se da webmaster, administrator i moderatori {IME_GALERIJE} imaju pravo ukloniti ili izmijeniti bilo koji sadrÂžaj u bilo koje vrijeme ako budu smatrali to potrebnim. Kao korisnik slaÂžete se da sve informacije koje upiÂšete bude spremljene u bazi podataka. Iako ove informacije neÄ‡e biti proslijeÄ‘ene treÄ‡im strankama bez VaÂšeg dopuÂštenja, webmaster i administrator ne mogu biti odgovorni za bilo kakvo hackiranje, koje bi dovelo do kompromitiranja podataka.<br />
<br />
Ove stranice koriste cookieje za pohranu informacija na VaÂš kompjuter. Oni sluÂže samo za VaÂše jednostavnije gledanje ovih stranica. E-mail adresa koju ste naveli koristi se samo za potvrdu detalja VaÂše registracije i zaporke.<br />
<br />
KliknuvÂši na 'SlaÂžem se' ispod, potvrÄ‘ujete da se slaÂžete sa gore navedenim uvjetima.
EOT;

$lang_register_php = array(
  'page_title' => 'Registracija korisnika',
  'term_cond' => 'Uvjeti koriÂštenja',
  'i_agree' => 'SlaÂžem se',
  'submit' => 'Provedi registraciju',
  'err_user_exists' => 'KorisniÄko ime koje ste naveli veÄ‡ postoji, molimo Vas, odaberite drugo ime',
  'err_password_mismatch' => 'Dvije zaporke se ne slaÂžu, molimo Vas unesite ih ponovno',
  'err_uname_short' => 'KorisniÄko ime mora imati makar dva znaka',
  'err_password_short' => 'Zaporka mora imati makar dva znaka',
  'err_uname_pass_diff' => 'KorisniÄko ime i zaporka moraju biti razliÄiti',
  'err_invalid_email' => 'E-mail adresa nije vaÂžeÄ‡a',
  'err_duplicate_email' => 'Drugi korisnik veÄ‡ je registriran s ovom e-mail adresom',
  'enter_info' => 'Input registration information',
  'required_info' => 'Potrebne informacije',
  'optional_info' => 'Optional information',
  'username' => 'KorisniÄko ime',
  'password' => 'Zaporka',
  'password_again' => 'Ponovno unesite zaporku',
  'email' => 'E-mail',
  'location' => 'Mjesto',
  'interests' => 'Hobiji',
  'website' => 'Home page',
  'occupation' => 'Zanimanje',
  'error' => 'POGREÂŠKA',
  'confirm_email_subject' => '%s - Potvrda registracije',
  'information' => 'Informacije',
  'failed_sending_email' => 'E-mail o potvrdi registracije se ne moÂže poslati !',
  'thank_you' => 'Hvala na registraciji.<br /><br />E-mail sa informacijama o tome kako aktivirati VaÂše Älanstvo poslan je na e-mail adresu koju ste naveli pri registraciji.',
  'acct_created' => 'VaÂš raÄun je otvoren i sada se moÂžete logirati s VaÂšim korisniÄkim imenom i zaporkom',
  'acct_active' => 'VaÂš raÄun je sada aktivan i i Vi se moÂžete logirati sa VaÂšim korisniÄkim imenom i zaporkom',
  'acct_already_act' => 'VaÂš raÄun je veÄ‡ aktivan !',
  'acct_act_failed' => 'Ovaj raÄun se ne moÂže aktivirati !',
  'err_unk_user' => 'Odabrani korisnik ne postoji !',
  'x_s_profile' => '%s\' profil',
  'group' => 'Grupa',
  'reg_date' => 'Pristupio/la',
  'disk_usage' => 'Upotrebljivost diska',
  'change_pass' => 'Izmijeni zaporku',
  'current_pass' => 'SadaÂšnja zaporka',
  'new_pass' => 'Nova zaporka',
  'new_pass_again' => 'Nova zaporka ponovno',
  'err_curr_pass' => 'Trenutna zaporka je netoÄna',
  'apply_modif' => 'Primijeni izmjene',
  'change_pass' => 'Promijeni moju zaporku',
  'update_success' => 'VaÂš profil je izmijenjen',
  'pass_chg_success' => 'VaÂša zaporka je promijenjena',
  'pass_chg_error' => 'VaÂša zaporka nije promijenjena',
  'notify_admin_email_subject' => '%s - Obavijest o registraciji', //cpg1.3.0
  'notify_admin_email_body' => 'Novi korisnik s korisniÄkim imenom "%s" se upravo registrirao u VaÂšoj galeriji', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
Hvala za registraciju u {IME_GALERIJE}

VaÂše korisniÄko ime je : "{KORISNIÄŒKO_IME}"
VaÂša zaporka je : "{ZAPORKA}"

Da biste aktivirali VaÂš raÄun, trebate kliknuti na link ispod, ili ga kopirati u VaÂš preglednik.

{ACT_LINK}

SrdaÄan pozdrav,

UredniÂštvo {IME_GALERIJE}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'Pogledaj komentare',
  'no_comment' => 'Nema komentara za pregled',
  'n_comm_del' => '%s komentar(a) izbrisan(o)',
  'n_comm_disp' => 'Broj komentara za prikaz',
  'see_prev' => 'Pogledaj prethodno',
  'see_next' => 'Pogledaj slijedeÄ‡e',
  'del_comm' => 'IzbriÂši odabrane komentare',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
  0 => 'PretraÂži u zbirci slika',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'PretraÂži nove slike', //cpg1.3.0
  'select_dir' => 'Odaberi direktorij',
  'select_dir_msg' => 'Ova funkcija Vam omoguÄ‡uje da dodate batch of file koju ste uploadali na VaÂš server preko FTP-a.<br /><br />Select the directory where you have uploaded your files', //cpg1.3.0
  'no_pic_to_add' => 'Nema slike za dodati', //cpg1.3.0
  'need_one_album' => 'Potreban Vam je bar jedan album za koriÂštenje ove funkcije',
  'warning' => 'Upozorenje',
  'change_perm' => 'skripta ne moÂže pisati u ovaj direktorij, trebate promijeniti mod na 755 ili 777 prije nego pokuÂšate dodati slike !', //cpg1.3.0
  'target_album' => '<b>Stavi slike iz &quot;</b>%s<b>&quot; u </b>%s', //cpg1.3.0
  'folder' => 'Direktorij',
  'image' => 'Slika',
  'album' => 'Album',
  'result' => 'Resultat',
  'dir_ro' => 'Ne moÂže se pisati. ',
  'dir_cant_read' => 'Ne moÂže se Äitati. ',
  'insert' => 'Dodavanje novih slika u galeriju', //cpg1.3.0
  'list_new_pic' => 'Popis novih slika', //cpg1.3.0
  'insert_selected' => 'Unesi odabrane slike', //cpg1.3.0
  'no_pic_found' => 'Nije pronaÄ‘ena niti jedna nova slika', //cpg1.3.0
  'be_patient' => 'Molimmo Vas da budete strpljivi, skripti je potrebno vremena za dodavanje slika', //cpg1.3.0
  'no_album' => 'nije odabran album',  //cpg1.3.0
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : znaÄi da je slika uspjeÂšno dodana'.
                          '<li><b>DP</b> : znaÄi da je slika duplikat i da se veÄ‡ nalazi u bazi podataka'.
                          '<li><b>PB</b> : znaÄi da se slika nije mogla dodati, provjerite VaÂše postavke i dozvole za direktorije gdje su smjeÂštene slike'.
                          '<li><b>NA</b> : znaÄi da niste odabrali album u kojeg idu slike, kliknite na \'<a href="javascript:history.back(1)">back</a>\' i odaberite album. If you don\'t have an album <a href="albmgr.php">create one first</a></li>'.
                          '<li>Ako se  OK, DP, PB \'znakovi\' ne pojave, kliknite na sliku za provjeru poruke o PHP greÂšci'.
                          '<li>If your browser timeout, hit the reload button'.
                          '</ul>', //cpg1.3.0
  'select_album' => 'odaberi album', //cpg1.3.0
  'check_all' => 'ObiljeÂži sve', //cpg1.3.0
  'uncheck_all' => 'deaktiviraj sve', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Zabrana korisnika',
  'user_name' => 'KorisniÄko ime',
  'ip_address' => 'IP Adresa',
  'expiry' => 'IstiÄe (prazno znaÄi stalno)',
  'edit_ban' => 'SaÄuvaj izmjene',
  'delete_ban' => 'IzbriÂši',
  'add_new' => 'Dodaj novu zabranu',
  'add_ban' => 'Dodaj',
  'error_user' => 'Ne mogu naÄ‡i korisnika', //cpg1.3.0
  'error_specify' => 'Trebate odrediti ili korisniÄko ime ili IP adresu', //cpg1.3.0
  'error_ban_id' => 'Nepravilna zabrana ID-a!', //cpg1.3.0
  'error_admin_ban' => 'Ne moÂžete napraviti zabranu sebi!', //cpg1.3.0
  'error_server_ban' => 'Jeste li htjeli zabraniti pristup vlastitom serveru? Tsk tsk, ne moÂžete to uÄiniti...', //cpg1.3.0
  'error_ip_forbidden' => 'Ne moÂžete zabrabiti pristup ovoj IP adresi - it is non-routable!', //cpg1.3.0
  'lookup_ip' => 'Pogledajte IP adresu', //cpg1.3.0
  'submit' => 'go!', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Upload file', //cpg1.3.0
  'custom_title' => 'PrilagoÄ‘eni obrazac za zahtjev', //cpg1.3.0
  'cust_instr_1' => 'MoÂžete odabrati prilagoÄ‘eni broj kuÄ‡ica za upload. Ali, ne moÂžete odabrati viÂše od ograniÄenja naznaÄenog ispod.', //cpg1.3.0
  'cust_instr_2' => 'Box Number Requests', //cpg1.3.0
  'cust_instr_3' => 'KuÄ‡ice za upload slika: %s', //cpg1.3.0
  'cust_instr_4' => 'URI/URL upload kuÄ‡ice: %s', //cpg1.3.0
  'cust_instr_5' => 'URI/URL upload kuÄ‡ice:', //cpg1.3.0
  'cust_instr_6' => 'Upload kuÄ‡ice za slike:', //cpg1.3.0
  'cust_instr_7' => 'Molimo Vas, unesite broj svakog tipa kuÄ‡ica za upload koje Âželite. Tada kliknite  \'Nastavi\'. ', //cpg1.3.0
  'reg_instr_1' => 'Nevaljana radnja za stvaranje obrasca.', //cpg1.3.0
  'reg_instr_2' => 'Sada moÂžete uploadati VaÂše slike koristeÄ‡i kuÄ‡ice za upload ispod. VeliÄina uploadanih slika na server ne smije prijeÄ‡i %s KB svaka. ZIP slike uploadane u \'Upload slika\' i \'URI/URL Upload\' rubrike Ä‡e ostai compressed.', //cpg1.3.0
  'reg_instr_3' => 'Ako Âželite dekompresirati zip slike ili arhiv, morate koristiti kuÄ‡icu za upload slika koja se nalazi \'Decompressive ZIP Upload\' rubrici.', //cpg1.3.0
  'reg_instr_4' => 'Kada koristite URI/URL upload rubriku, unesite put do slike kao ovdje: http://www.mysite.com/images/example.jpg', //cpg1.3.0
  'reg_instr_5' => 'Kada kompletirate obrazac, kliknite na \'Nastavi\'.', //cpg1.3.0
  'reg_instr_6' => 'Upload decompressive ZIP:', //cpg1.3.0
  'reg_instr_7' => 'Upload slika:', //cpg1.3.0
  'reg_instr_8' => 'URI/URL Upload:', //cpg1.3.0
  'error_report' => 'Poruka o greÂšci', //cpg1.3.0
  'error_instr' => 'SlijedeÄ‡i uploadi imaju poteÂškoÄ‡e:', //cpg1.3.0
  'file_name_url' => 'Naziv slike/URL', //cpg1.3.0
  'error_message' => 'Poruka o greÂšci', //cpg1.3.0
  'no_post' => 'Sliku nije uploadao POST.', //cpg1.3.0
  'forb_ext' => 'Zabranjena ekstenzija slike.', //cpg1.3.0
  'exc_php_ini' => 'PremaÂšena dopuÂštena veliÄina slike u php.ini.', //cpg1.3.0
  'exc_file_size' => 'PremaÂšena veliÄina slike dozvoljena po CPG.', //cpg1.3.0
  'partial_upload' => 'Samo djelomiÄan upload.', //cpg1.3.0
  'no_upload' => 'Nije bilo uploada.', //cpg1.3.0
  'unknown_code' => 'Nepoznata PHP upload greÂška.', //cpg1.3.0
  'no_temp_name' => 'Nema uploada - Nema privremenog imena.', //cpg1.3.0
  'no_file_size' => 'Ne sadrÂži podatke/OÂšteÄ‡ena', //cpg1.3.0
  'impossible' => 'NemoguÄ‡e prebaciti.', //cpg1.3.0
  'not_image' => 'Nije slika/oÂšteÄ‡eno', //cpg1.3.0
  'not_GD' => 'Nije GD ekstenzija.', //cpg1.3.0
  'pixel_allowance' => 'PremaÂšena dozvola pixela.', //cpg1.3.0
  'incorrect_prefix' => 'NetoÄan URI/URL prefiks', //cpg1.3.0
  'could_not_open_URI' => 'Ne moÂže se otvoriti URI.', //cpg1.3.0
  'unsafe_URI' => 'Sigurnost nije verificirana.', //cpg1.3.0
  'meta_data_failure' => 'Meta data pogreÂška', //cpg1.3.0
  'http_401' => '401 Neautorizirano', //cpg1.3.0
  'http_402' => '402 Potrebno plaÄ‡anje', //cpg1.3.0
  'http_403' => '403 Zabranjeno', //cpg1.3.0
  'http_404' => '404 Nije pronaÄ‘eno', //cpg1.3.0
  'http_500' => '500 Unutarnja server pogreÂška', //cpg1.3.0
  'http_503' => '503 Servis nedostupan', //cpg1.3.0
  'MIME_extraction_failure' => 'MIME se ne moÂže odrediti.', //cpg1.3.0
  'MIME_type_unknown' => 'Nepoznati MIME tip', //cpg1.3.0
  'cant_create_write' => 'Ne moÂže se kreirati dokument za pisanje.', //cpg1.3.0
  'not_writable' => 'Ne moÂže se pisati u dokument za pisanje.', //cpg1.3.0
  'cant_read_URI' => 'Ne moÂže se proÄitati URI/URL', //cpg1.3.0
  'cant_open_write_file' => 'Ne moÂže se otvoriti URI dokument za pisanje.', //cpg1.3.0
  'cant_write_write_file' => 'Ne moÂže se pisati u URI dokument za pisanje.', //cpg1.3.0
  'cant_unzip' => 'Ne moÂže se izvrÂšiti dekompresija.', //cpg1.3.0
  'unknown' => 'Nepoznata pogreÂška', //cpg1.3.0
  'succ' => 'UspjeÂšni uploadi', //cpg1.3.0
  'success' => '%s uploada je bilo uspjeÂšno.', //cpg1.3.0
  'add' => 'Molimo Vas, kliknite na \'Nastavi\' dodavati slike u album.', //cpg1.3.0
  'failure' => 'Upload pogreÂška', //cpg1.3.0
  'f_info' => 'Informacije o dokumentu', //cpg1.3.0
  'no_place' => 'Prethodna slika se nije mogla smjestiti.', //cpg1.3.0
  'yes_place' => 'Prethodna slika je smjeÂštena uspjeÂšno.', //cpg1.3.0
  'max_fsize' => 'Maksimalna dopuÂštena veliÄina slika je  %s KB',
  'album' => 'Album',
  'picture' => 'Slika', //cpg1.3.0
  'pic_title' => 'Naslov slike', //cpg1.3.0
  'description' => 'Opis slike', //cpg1.3.0
  'keywords' => 'KljuÄne rijeÄi (odvojene praznim mjestima)',
  'err_no_alb_uploadables' => 'ÂŽao nam je, nema albuma u kojem Vam je dopuÂšteno uploadati slike', //cpg1.3.0
  'place_instr_1' => 'Molimo Vas, stavite slike u albume.  MoÂžete takoÄ‘er unijeti informacije o svakoj slici.', //cpg1.3.0
  'place_instr_2' => 'Treba smjestiti viÂše slika. Molimo Vas, kliknite na  \'Nastavi\'.', //cpg1.3.0
  'process_complete' => 'UspjeÂšno ste smjestili sve slike.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'title' => 'Evidencija korisnika',
  'name_a' => 'Imena uzlazno',
  'name_d' => 'Imena silazno',
  'group_a' => 'Grupa uzlazno',
  'group_d' => 'Grupa silazno',
  'reg_a' => 'Datum reg uzlazno',
  'reg_d' => 'Datum reg silazno',
  'pic_a' => 'Broj slika uzlazno',
  'pic_d' => 'Broj slika silazno',
  'disku_a' => 'Upotrebljivost diska uzlazno',
  'disku_d' => 'Upotrebljivost diska silazno',
  'lv_a' => 'Posljednja posjeta uzlazno', //cpg1.3.0
  'lv_d' => 'Posljednja posjeta silazno', //cpg1.3.0
  'sort_by' => 'Poredaj korisnike po ',
  'err_no_users' => 'KorisniÄka tablica je prazna !',
  'err_edit_self' => 'Ne moÂžete mijenjati VaÂš profil, upotrijebite You can\'t edit your own profile, use the \'Moj profil\' link za to',
  'edit' => 'UREDI',
  'delete' => 'IZBRIÂŠI',
  'name' => 'KorisniÄko ime',
  'group' => 'Grupa',
  'inactive' => 'Neaktivan',
  'operations' => 'Operacije',
  'pictures' => 'Slike', //cpg1.3.0
  'disk_space' => 'IskoriÂštenost prostora / Quota',
  'registered_on' => 'Registriran(na) dana',
  'last_visit' => 'Posljednja posjeta', //cpg1.3.0
  'u_user_on_p_pages' => '%d korisnika na %d strane(a)',
  'confirm_del' => 'Jeste li sigurni da Âželite IZBRISATI ovog korisnika ? \\nSve njegove slike i albumi Ä‡e takoÄ‘er biti izbrisani.', //js-alert //cpg1.3.0
  'mail' => 'MAIL',
  'err_unknown_user' => 'Odabrani korisnik ne postoji !',
  'modify_user' => 'Izmijeni korisnika',
  'notes' => 'BiljeÂške',
  'note_list' => '<li>Ako ne Âželite mijenjati trenutnu zaporku, ostavite polje za zaporku praznim',
  'password' => 'Zaporka',
  'user_active' => 'Korisnik je aktivan',
  'user_group' => 'KorisniÄka grupa',
  'user_email' => 'Korisnikov e-mail',
  'user_web_site' => 'Korisnikov web site',
  'create_new_user' => 'Kreiraj novog korisnika',
  'user_location' => 'Mjesto boravka korisnika',
  'user_interests' => 'Korisnikovi hobiji',
  'user_occupation' => 'Korisnikovo zanimanje',
  'latest_upload' => 'Nedavni uploadi', //cpg1.3.0
  'never' => 'nikada', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
  'title' => 'Admin utilities (Resize pictures)', //cpg1.3.0
  'what_it_does' => 'ÂŠto to radi',
  'what_update_titles' => 'OsveÄ‡ava naslove iz imena slika',
  'what_delete_title' => 'BriÂše naslove',
  'what_rebuild' => 'OsvjeÂžava thumbnaile i mijenja veliÄinu slika',
  'what_delete_originals' => 'BriÂše originalne slike mijenjajuÄ‡i ih sa verzijom promijenjene veliÄine',
  'file' => 'Slika',
  'title_set_to' => 'naslov postavljen na',
  'submit_form' => 'provedi',
  'updated_succesfully' => 'uspjeÂšno osvjeÂženo',
  'error_create' => 'ERROR creating',
  'continue' => 'Procesuira viÂše slika',
  'main_success' => 'Slika %s je bila uspjeÂšno upotrijebljena kao glavna slika', //cpg1.3.0
  'error_rename' => 'GreÂška mijenjanja imena %s u %s',
  'error_not_found' => 'Slika %s nije pronaÄ‘ena',
  'back' => 'natrag na glavno',
  'thumbs_wait' => 'OsvjeÂžava thumbnaile i/ili slike promijenjene veliÄine, molimo Vas, saÄekajte...',
  'thumbs_continue_wait' => 'Nastavlja osvjeÂžavanje thumbnaila i/ili slika promijenjene veliÄine...',
  'titles_wait' => 'OsvjeÂžava naslove, saÄekajte...',
  'delete_wait' => 'BriÂše naslove, saÄekajte...',
  'replace_wait' => 'BriÂše originale i mijenja ih slikama promijenjene veliÄine, saÄekajte..',
  'instruction' => 'Brze instrukcije',
  'instruction_action' => 'Odaberite radnju',
  'instruction_parameter' => 'Postavite parametre',
  'instruction_album' => 'Odaberite album',
  'instruction_press' => 'Press %s',
  'update' => 'OsvjeÂžava thumbe i/ili slike promijenjene veliÄine',
  'update_what' => 'ÂŠto treba osvjeÂžiti',
  'update_thumb' => 'SamoOnly thumbnaile',
  'update_pic' => 'Samo slike promijenjene veliÄine',
  'update_both' => 'I thumbnaile i slike promijenjene veliÄine',
  'update_number' => 'Broj procesuiranih slika po kliku',
  'update_option' => '(PokuÂšajte postaviti ovu opciju s niÂžim vrijednostima ako doÄ‘e do timeout problema)',
  'filename_title' => 'Naziv slike &rArr; Naslov slike', //cpg1.3.0
  'filename_how' => 'Kako treba promijeniti naziv slike',
  'filename_remove' => 'Odstranite .jpg nastavak i zamijenite  _ (crta) praznim prostorom',
  'filename_euro' => 'Izmijeni 2003_11_23_13_20_20.jpg u 23/11/2003 13:20',
  'filename_us' => 'Izmijeni 2003_11_23_13_20_20.jpg u 11/23/2003 13:20',
  'filename_time' => 'Izmijeni 2003_11_23_13_20_20.jpg u 13:20',
  'delete' => 'IzbriÂši tipove slika ili originalnu veliÄinu slika', //cpg1.3.0
  'delete_title' => 'IzbriÂši naslove slika', //cpg1.3.0
  'delete_original' => 'IzbriÂši originalnu veliÄinu slika',
  'delete_replace' => 'BriÂše originalne slike mijenjajuÄ‡i ih slikama promijenjene veliÄine',
  'select_album' => 'Odaberi album',
  'delete_orphans' => 'BriÂše neprikladne komentare (works on all albums)', //cpg1.3.0
  'orphan_comment' => 'pronaÄ‘en neprikladan komentar', //cpg1.3.0
  'delete' => 'BriÂši', //cpg1.3.0
  'delete_all' => 'BriÂši sve', //cpg1.3.0
  'comment' => 'Komentira: ', //cpg1.3.0
  'nonexist' => 'prikaÄeno na nepostojeÄ‡u sliku # ', //cpg1.3.0
  'phpinfo' => 'Prikazuje php info', //cpg1.3.0
  'update_db' => 'OsvjeÂži bazu podataka', //cpg1.3.0
  'update_db_explanation' => 'Ako ste zamijenili Coppermine files, dodali ispravke ili osvjeÂžili sa prethodne verzije Coppermine-a, pazite da osvjeÂžite bazu padataka. Ovaj postupak Ä‡e kreirati potrebne tablice i/ili config vrijednosti u vaÂšoj Coppermine bazi podataka.', //cpg1.3.0
);

?>
