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
// ENCODING CHECK; SHOULD BE YEN BETA MU: ¥ ß µ
// ------------------------------------------------------------------------- //
// $Id: croatian-utf-8.php,v 1.10 2004/12/29 23:03:30 chtito Exp $
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
$lang_day_of_week = array('Ned', 'Pon', 'Uto', 'Sri', 'Čet', 'Pet', 'Sub');
$lang_month = array('Sij', 'Velj', 'Ou', 'Tra', 'Svi', 'Lip', 'Srp', 'Kol', 'Ruj', 'Lis', 'Stu', 'Pro');

// Some common strings
$lang_yes = 'Da';
$lang_no  = 'Ne';
$lang_back = 'NATRAG';
$lang_continue = 'NASTAVI';
$lang_info = 'Informacija';
$lang_error = 'Pogreka';

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
  'perm_denied' => 'Nemate dozvolu izvriti ovu radnju.',
  'param_missing' => 'Skripta pozvana bez potrebnih parametara.',
  'non_exist_ap' => 'Odabrani album/slika ne postoji', //cpg1.3.0
  'quota_exceeded' => 'Premaena kvota diska<br /><br />Vaa kvota prostora je [quota]K, vae slike trenutno zauzimaju [space]K, ako dodate ovu sliku premait ćete kvotu.', //cpg1.3.0
  'gd_file_type_err' => 'Kada koristite GD image library dozvoljeni tipovi slika su samo JPEG and PNG.',
  'invalid_image' => 'Uploadana slika ima greku ili ne moe biti obrađena od strane GD library',
  'resize_failed' => 'Ne mogu napraviti thumbnail ili smanjiti veličinu slike.',
  'no_img_to_display' => 'Nema slike za prikaz',
  'non_exist_cat' => 'Odabrana kategorija ne postoji',
  'orphan_cat' => 'Kategorija nema direktorij, upotrijebite Category Manager kako biste ispravili problem!', //cpg1.3.0
  'directory_ro' => 'Direktorij \'%s\' nije dostupan, slike se ne mogu brisati', //cpg1.3.0
  'non_exist_comment' => 'Odabrani komentar ne postoji.',
  'pic_in_invalid_album' => 'Slika se nalazi u nepostojećem albumu!?', //cpg1.3.0
  'banned' => 'Trenutno Vam je zabranjeno koristiti ove stranice.',
  'not_with_udb' => 'Ova funkcija je onemogućena u Coppermine-u jer je integrirana sa skriptom za forum. Ili ono to pokuavate napraviti nije podrano u ovoj konfiguraciji, ili funkciju treba izvriti skripta za forum.',
  'offline_title' => 'Offline', //cpg1.3.0
  'offline_text' => 'Galerija trenutno nije u funkciji - navratite uskoro', //cpg1.3.0
  'ecards_empty' => 'Trenutno nema podataka o e-razglednicama. Provjerite da li ste omogućili ovu funkciju u Coppermine konfiguraciji!', //cpg1.3.0
  'action_failed' => 'Radnja nije uspjela.  Coppermine ne moe obaviti ovu radnju.', //cpg1.3.0
  'no_zip' => 'Potrebne libraries za procesuiranje ZIP dokumenata ne postoje.  Molimo Vas, kontaktirajte administratora.', //cpg1.3.0
  'zip_type' => 'Nemate doputenje za upload ZIP dokumenata.', //cpg1.3.0
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
  'adm_mode_title' => 'Prijeđi na admin mode',
  'adm_mode_lnk' => 'Admin mode',
  'usr_mode_title' => 'Prijeđi na user mode',
  'usr_mode_lnk' => 'User mode',
  'upload_pic_title' => '(Upload) Prebaci dokument  u album', //cpg1.3.0
  'upload_pic_lnk' => 'Upload file', //cpg1.3.0
  'register_title' => 'Kreiraj račun',
  'register_lnk' => 'Registracija',
  'login_lnk' => 'Ulaz',
  'logout_lnk' => 'Izlaz',
  'lastup_lnk' => 'Posljednje dodano',
  'lastcom_lnk' => 'Posljednji komentari',
  'topn_lnk' => 'Najgledanije',
  'toprated_lnk' => 'Najbolje ocijenjeno',
  'search_lnk' => 'Pretraga',
  'fav_lnk' => 'Omiljene slike',
  'memberlist_title' => 'Pokai popis članova', //cpg1.3.0
  'memberlist_lnk' => 'Popis članova', //cpg1.3.0
  'faq_title' => 'Često postavljana pitanja o galeriji slika &quot;Coppermine&quot;', //cpg1.3.0
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
  'db_ecard_lnk' => 'Pokai e-razglednice', //cpg1.3.0
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
  'thumb_title' => 'Vrati se na stranicu sa sličicama',
  'pic_info_title' => 'Prikai/sakrij podatke o slici', //cpg1.3.0
  'slideshow_title' => 'Slideshow',
  'ecard_title' => 'Poalji ovu sliku kao e-razglednicu', //cpg1.3.0
  'ecard_disabled' => 'e-razglednice nisu omogućene',
  'ecard_disabled_msg' => 'Nemate doputenje slati e-razglednice', //js-alert //cpg1.3.0
  'prev_title' => 'Pogledaj prethodnu sliku', //cpg1.3.0
  'next_title' => 'Pogledaj slijedeću sliku', //cpg1.3.0
  'pic_pos' => 'SLIKA %s/%s', //cpg1.3.0
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Ocijenite ovu sliku ', //cpg1.3.0
  'no_votes' => '(Nije jo ocijenjena)',
  'rating' => '(Trenutna ocjena : %s / 5 s %s glasova)',
  'rubbish' => 'Loe',
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
  CRITICAL_ERROR => 'Kritična greka',
  'file' => 'Slika: ',
  'line' => 'Linija: ',
);

$lang_display_thumbnails = array(
  'filename' => 'Naziv slike : ',
  'filesize' => 'Veličina slike : ',
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
  'copy_and_paste_instructions' => 'Ako elite zatraiti pomoć na forumu, copy-and-paste ovaj debug kod u va post. Provjerite da li ste zamijenili sve zaporke u postu sa *** prije objavljivanja posta.', //cpg1.3.0
  'phpinfo' => 'Pokai phpinfo', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => 'Defaultni jezik', //cpg1.3.0
  'choose_language' => 'Odaberite Va jezik', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'Defaultni predloak', //cpg1.3.0
  'choose_theme' => 'Odaberite predloak', //cpg1.3.0
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
  'Exclamation' => 'Uskličnik',
  'Question' => 'Upitnik',
  'Very Happy' => 'Jako sretan',
  'Smile' => 'Smjeak',
  'Sad' => 'Tuan',
  'Surprised' => 'Iznenađen',
  'Shocked' => 'okiran',
  'Confused' => 'Zbunjen',
  'Cool' => 'Zadovoljan',
  'Laughing' => 'Smije se',
  'Mad' => 'Lud',
  'Razz' => 'Razjaren',
  'Embarassed' => 'Postiđen',
  'Crying or Very sad' => 'Plače ili je jako tuan',
  'Evil or Very Mad' => 'Zao ili jako lud',
  'Twisted Evil' => 'Izopačeno zlo',
  'Rolling Eyes' => 'Okreće očima',
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
  0 => 'Naputa admin mode...',
  1 => 'Ulazi u admin mode...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Album mora imati ime !', //js-alert
  'confirm_modifs' => 'Jeste li sigurni da elite učiniti ove izmjene ?', //js-alert
  'no_change' => 'Nite nita izmijenili !', //js-alert
  'new_album' => 'Novi album',
  'confirm_delete1' => 'Jeste li sigurni da elite izbrisati ovaj album ?', //js-alert
  'confirm_delete2' => '\nSve slike i komentari će biti izbrisani !', //js-alert
  'select_first' => 'Odaberite prvo album', //js-alert
  'alb_mrg' => 'Album Manager',
  'my_gallery' => '* Moja galerija *',
  'no_category' => '* Nema kategorije *',
  'delete' => 'Izbrii',
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
  'usergal_cat_ro' => 'Kategorija galerija korisnika se ne moe brisati !',
  'manage_cat' => 'Obrada kategorija',
  'confirm_delete' => 'Jeste li sigurni da elite IZBRISATI ovu kategoriju', //js-alert
  'category' => 'Kategorija',
  'operations' => 'Operacije',
  'move_into' => 'Prebaci u',
  'update_create' => 'Osvjei/kreiraj kategoriju',
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
  'save_cfg' => 'Sačuvaj novu konfiguraciju',
  'notes' => 'Biljeke',
  'info' => 'Informacije',
  'upd_success' => 'Coppermine konfiguracija je osvjeena',
  'restore_success' => 'Coppermine default konfiguracija je vraćena',
  'name_a' => 'Naziv uzlazno',
  'name_d' => 'Naziv silazno',
  'title_a' => 'Naslov uzlazno',
  'title_d' => 'Naslov silazno',
  'date_a' => 'Datum uzlazno',
  'date_d' => 'Datum silazno',
  'th_any' => 'Max Aspect',
  'th_ht' => 'Visina',
  'th_wd' => 'irina',
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
  array('Predloak', 'theme', 6),
  array('Pokai popis jezika', 'language_list', 1), //cpg1.3.0
  array('Pokai zastave jezika', 'language_flags', 8), //cpg1.3.0
  array('Pokai &quot;reset&quot; u odabranom jeziku', 'language_reset', 1), //cpg1.3.0
  array('Pokai popis predloaka', 'theme_list', 1), //cpg1.3.0
  array('Pokai &quot;reset&quot; u odabiru predloaka', 'theme_reset', 1), //cpg1.3.0
  array('Pokai FAQ', 'display_faq', 1), //cpg1.3.0
  array('Pokai bbcode help', 'show_bbcode_help', 1), //cpg1.3.0
  array('Character encoding', 'charset', 4), //cpg1.3.0

  'Album list view',
  array('irina glavne tablice (pixels or %)', 'main_table_width', 0),
  array('Broj nivoa kategorija za prikaz', 'subcat_level', 0),
  array('Broj albuma za prikaz', 'albums_per_page', 0),
  array('Broj stupaca za popis albuma', 'album_list_cols', 0),
  array('Veličina thumbnails-a u pikselima', 'alb_list_thumb_size', 0),
  array('Sadraj glavne stranice', 'main_page_layout', 0),
  array('Pokai thumbnails-e albuma prvog nivoa u kategorijama','first_level',1),

  'Thumbnail view',
  array('Broj stupaca na thumbnail stranici', 'thumbcols', 0),
  array('Broj redova na thumbnail stranici', 'thumbrows', 0),
  array('Maksimalan broja tabs za prikaz', 'max_tabs', 10), //cpg1.3.0
  array('Prikai podatke (pored naslova) ispod thumbnail-a', 'caption_in_thumbview', 1), //cpg1.3.0
  array('Prikai broj pregleda ispod thumbnail-a', 'views_in_thumbview', 1), //cpg1.3.0
  array('Prikai broj komentara ispod thumbnail-a', 'display_comment_count', 1),
  array('Prikai naziv uploada ispod thumbnail-a', 'display_uploader', 1), //cpg1.3.0
  array('Defaultni poredak za slike', 'default_sort_order', 3), //cpg1.3.0
  array('Minimalni broj glasova za sliku za prikaz u \'top-rated\' list', 'min_votes_for_rating', 0), //cpg1.3.0

  'Image view &amp; Comment settings',
  array('irina tablice za prikaz slika (pixels or %)', 'picture_table_width', 0), //cpg1.3.0
  array('Podaci o slikama se vide po dafaultu', 'display_pic_info', 1), //cpg1.3.0
  array('Filtriraj rune riječi u komentarima', 'filter_bad_words', 1),
  array('Dopusti smilies u komentarima', 'enable_smilies', 1),
  array('Dopusti nekoliko  uzastopnih komentara o nekoj slici od istog korisnika (disable flood protection)', 'disable_comment_flood_protect', 1), //cpg1.3.0
  array('Maksimalna duina opisa slike', 'max_img_desc_length', 0),
  array('Maksimalni broj znakova u riječi', 'max_com_wlength', 0),
  array('Maksimalni broj redova u komentaru', 'max_com_lines', 0),
  array('Maksimalna duina komentara', 'max_com_size', 0),
  array('Pokai filmski strip', 'display_film_strip', 1),
  array('Broj slika u film stripu', 'max_film_strip_items', 0),
  array('Obavijesti administratora o komentaru e-mailom', 'email_comment_notification', 1), //cpg1.3.0
  array('Slideshow pauza u milisekundama (1 second = 1000 milliseconds)', 'slideshow_interval', 0), //cpg1.3.0

  'Files and thumbnails settings', //cpg1.3.0
  array('Kvalitet JPEG dokumenata', 'jpeg_qual', 0),
  array('Maksimalna veličina thumbnail-a <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0), //cpg1.3.0
  array('Koristi veličinu ( width or height or Max aspect for thumbnail )<b>*</b>', 'thumb_use', 7),
  array('Kreiraj srednjevelike slike','make_intermediate',1),
  array('Maksimalna irina ili visina srednjevelikih slika/videa <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0), //cpg1.3.0
  array('Maksimalna veličina za uploadane dokumente (KB)', 'max_upl_size', 0), //cpg1.3.0
  array('Maksimalna irina ili visina za uploadane slike/video (pixels)', 'max_upl_width_height', 0), //cpg1.3.0

  'Files and thumbnails advanced settings', //cpg1.3.0
  array('Prikai ikonu privatnog albuma nelogiranom korisniku','show_private',1), //cpg1.3.0
  array('Zaboravljeni znakovi u nazivima slika', 'forbiden_fname_char',0), //cpg1.3.0
  //array('Doputene ekstenzije dokumenata za upload', 'allowed_file_extensions',0), //cpg1.3.0
  array('Doputeni tipovi slika', 'allowed_img_types',0), //cpg1.3.0
  array('Doputeni tipovi filmova', 'allowed_mov_types',0), //cpg1.3.0
  array('Doputeni audio tipovi', 'allowed_snd_types',0), //cpg1.3.0
  array('Doputeni tipovi dokumenata', 'allowed_doc_types',0), //cpg1.3.0
  array('Način mijenjanja veličine slika','thumb_method',2), //cpg1.3.0
  array('Put do ImageMagick \'convert\' utility (example /usr/bin/X11/)', 'impath', 0), //cpg1.3.0
  //array('Doputeni tipovi slika (vaeći samo za ImageMagick)', 'allowed_img_types',0), //cpg1.3.0
  array('Komandne opcije za ImageMagick', 'im_options', 0), //cpg1.3.0
  array('Pročitaj EXIF podatke kod JPEG dokumenata', 'read_exif_data', 1), //cpg1.3.0
  array('Pročitaj IPTC podatke kod JPEG dokumenata', 'read_iptc_data', 1), //cpg1.3.0
  array('Direktorij albuma <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0), //cpg1.3.0
  array('Direktorij za korisničke slike <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0), //cpg1.3.0
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
  array('Obavijesti administratora o davanju doputenja korisniku za upload', 'upl_notify_admin_email', 1), //cpg1.3.0
  array('Dopusti logiranim korisnicima da vide popis korisnika', 'allow_memberlist', 1), //cpg1.3.0

  'Custom fields for image description (leave blank if unused)',
  array('Polje 1 ime', 'user_field1_name', 0),
  array('Polje 2 ime', 'user_field2_name', 0),
  array('Polje 3 ime', 'user_field3_name', 0),
  array('Polje 4 ime', 'user_field4_name', 0),

  'Cookies settings',
  array('Naziv kolačića kojeg koristi skripta (when using bbs integration, make sure it differs from the bbs\'s cookie name)', 'cookie_name', 0),
  array('Put kolačića kojeg koristi skripta', 'cookie_path', 0),

  'Miscellaneous settings',
  array('Omogući debug mode', 'debug_mode', 9), //cpg1.3.0
  array('Prikai obavijesti u debug modu', 'debug_notice', 1), //cpg1.3.0

  '<br /><div align="left"><a name="notice1"></a>(*) This settings mustn\'t be changed if you already have pictures in your database.<br />
  <a name="notice2"></a>(**) When changing this setting, only the files that are added from that point on are affected, so it is advisable that this setting must not be changed if there are already files in the gallery. You can, however, apply the changes to the existing files with the &quot;<a href="util.php">admin tools</a> (resize pictures)&quot; utility from the admin menu.</div><br />', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Poslane e-razglednice', //cpg1.3.0
  'ecard_sender' => 'Poiljatelj', //cpg1.3.0
  'ecard_recipient' => 'Primatelj', //cpg1.3.0
  'ecard_date' => 'Datum', //cpg1.3.0
  'ecard_display' => 'Prikai e-razglednicu', //cpg1.3.0
  'ecard_name' => 'Ime', //cpg1.3.0
  'ecard_email' => 'E-mail', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'uzlazno', //cpg1.3.0
  'ecard_descending' => 'silazno', //cpg1.3.0
  'ecard_sorted' => 'Sortirano', //cpg1.3.0
  'ecard_by_date' => 'po datumu', //cpg1.3.0
  'ecard_by_sender_name' => 'po poiljateljevu imenu', //cpg1.3.0
  'ecard_by_sender_email' => 'po poiljateljevoj e-mail adresi', //cpg1.3.0
  'ecard_by_sender_ip' => 'po poiljateljevoj IP adresi', //cpg1.3.0
  'ecard_by_recipient_name' => 'po primateljevu imenu', //cpg1.3.0
  'ecard_by_recipient_email' => 'po primateljevoj e-mail adresi', //cpg1.3.0
  'ecard_number' => 'prikai podatke %s to %s of %s', //cpg1.3.0
  'ecard_goto_page' => 'idi na stranicu', //cpg1.3.0
  'ecard_records_per_page' => 'Podaci po stranici', //cpg1.3.0
  'check_all' => 'Check All', //cpg1.3.0
  'uncheck_all' => 'Uncheck All', //cpg1.3.0
  'ecards_delete_selected' => 'Izbrii odabrane e-razglednice', //cpg1.3.0
  'ecards_delete_confirm' => 'Jeste li sigurni da elite izbrisati podatke? Označite checkbox!', //cpg1.3.0
  'ecards_delete_sure' => 'Siguran/na sam', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Trebate upisati svoje ime i komentar',
  'com_added' => 'Va komentar je dodan',
  'alb_need_title' => 'Trebate napisati naziv albuma !',
  'no_udp_needed' => 'Nije potrebno osvjeavanje.',
  'alb_updated' => 'Album je osvjeen',
  'unknown_album' => 'Odabrani album ne postoji ili nemate doputenje za upload u ovaj album',
  'no_pic_uploaded' => 'Nije uploadana slika !<br /><br />If you have really selected a file to upload, check that the server allows file uploads...', //cpg1.3.0
  'err_mkdir' => 'Nije kreiran direktorij %s !',
  'dest_dir_ro' => 'U traeni direktorij %s se ne moe pisati po defaultu skripte !',
  'err_move' => 'Nemoguće premjestiti %s u %s !',
  'err_fsize_too_large' => 'Veličina dokumenta kojeg ste uploadali je prevelika (maksimalna doputena je %s x %s) !', //cpg1.3.0
  'err_imgsize_too_large' => 'Veličina dokumenta kojeg ste uploadali je prevelika (maksimalna doutena je %s KB) !',
  'err_invalid_img' => 'Dokument kojeg ste uploadali nije vaeća slika !',
  'allowed_img_types' => 'Moete uploadati samo %s slike.',
  'err_insert_pic' => 'Dokument \'%s\' se ne moe dodati u album ', //cpg1.3.0
  'upload_success' => 'Va dokument je uploadan uspjeno<br /><br />Bit će vidljiv nakon odobrenja administratora.', //cpg1.3.0
  'notify_admin_email_subject' => '%s - Obavijest o uploadu', //cpg1.3.0
  'notify_admin_email_body' => 'Uploada je slika %s koja treba Vae odobrenje. Posjetite %s', //cpg1.3.0
  'info' => 'Informacije',
  'com_added' => 'Dodan komentar',
  'alb_updated' => 'Album osvjeen',
  'err_comment_empty' => 'Va komentar je prazan !',
  'err_invalid_fext' => 'Prihvaćaju se samo dokumenti sa slijedećim ekstenzijama : <br /><br />%s.',
  'no_flood' => 'ao mi je, ali Vi ste već autor posljednjeg komentara za ovu sliku<br /><br />Uredite komentar kojeg ste napisali, ako ga elite izmijeniti', //cpg1.3.0
  'redirect_msg' => 'Preusmjereni ste.<br /><br /><br />Click \'CONTINUE\' if the page does not refresh automatically',
  'upl_success' => 'Va dokument je uspjeno dodan', //cpg1.3.0
  'email_comment_subject' => 'Komentar napisan u Coppermine Photo Gallery', //cpg1.3.0
  'email_comment_body' => 'Netko je napisao komentar u Vaoj galeriji. See it at', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Caption',
  'fs_pic' => 'slika u punoj veličini',
  'del_success' => 'uspjeno izbrisano',
  'ns_pic' => 'normalna veličina slike',
  'err_del' => 'ne moe se izbrisati',
  'thumb_pic' => 'thumbnail',
  'comment' => 'komentar',
  'im_in_alb' => 'slika u albumu',
  'alb_del_success' => 'Album \'%s\' izbrisan',
  'alb_mgr' => 'Album Manager',
  'err_invalid_data' => 'Pogreni podaci u \'%s\'',
  'create_alb' => 'Kreira album \'%s\'',
  'update_alb' => 'Osvjeava album \'%s\' s naslovom \'%s\' i indexom \'%s\'',
  'del_pic' => 'Brii dokument', //cpg1.3.0
  'del_alb' => 'Brii album',
  'del_user' => 'Brii korisnika',
  'err_unknown_user' => 'Odabrani korisnik ne postoji !',
  'comment_deleted' => 'Komentar je uspjeno izbrisan',
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
  'confirm_del' => 'Jeste li sigurni da elite IZBRISATI ovaj dokument ? \\nKomentari će također biti izbrisani.', //js-alert //cpg1.3.0
  'del_pic' => 'IZBRII OVAJ DOKUMENT', //cpg1.3.0
  'size' => '%s x %s pixela',
  'views' => '%s puta',
  'slideshow' => 'Slideshow',
  'stop_slideshow' => 'ZAUSTAVI SLIDESHOW',
  'view_fs' => 'Klikni za sliku u punoj veličini',
  'edit_pic' => 'Uredu opis', //cpg1.3.0
  'crop_pic' => 'Smanji i rotiraj', //cpg1.3.0
);

$lang_picinfo = array(
  'title' =>'Info o dokumentu', //cpg1.3.0
  'Filename' => 'Naziv dokumenta',
  'Album name' => 'Naziv albuma',
  'Rating' => 'Ocjena (%s votes)',
  'Keywords' => 'Ključne riječi',
  'File Size' => 'Veličina dokumenta',
  'Dimensions' => 'Dimenzije',
  'Displayed' => 'Prikazano',
  'Camera' => 'Kamera',
  'Date taken' => 'Datum snimanja',
  'Aperture' => 'Otvor',
  'Exposure time' => 'Vrijeme ekspozicije',
  'Focal length' => 'arina duina',
  'Comment' => 'Komentar',
  'addFav'=>'Dodaj u Favorite', //cpg1.3.0
  'addFavPhrase'=>'Favoriti', //cpg1.3.0
  'remFav'=>'Izbrii iz Favorita', //cpg1.3.0
  'iptcTitle'=>'IPTC Naslov', //cpg1.3.0
  'iptcCopyright'=>'IPTC Copyright', //cpg1.3.0
  'iptcKeywords'=>'IPTC ključne riječi', //cpg1.3.0
  'iptcCategory'=>'IPTC kategorija', //cpg1.3.0
  'iptcSubCategories'=>'IPTC podkategorija', //cpg1.3.0
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Uredi ovaj komentar',
  'confirm_delete' => 'Jeste li sigurni da elite izbrisati ovaj komentar ?', //js-alert
  'add_your_comment' => 'Dodajte Va komentar',
  'name'=>'Ime',
  'comment'=>'Komentar',
  'your_name' => 'Vae ime',
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Klikni sliku za zatvaranje prozora',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Poalji e-razglednicu',
  'invalid_email' => '<b>Upozorenje</b> : nevaeća e-mail adresa !',
  'ecard_title' => 'E-razglednica od %s za Vas',
  'error_not_image' => 'Samo se slike mogu poslati kao e-razglednice.', //cpg1.3.0
  'view_ecard' => 'Ako se e-razglednica ne prikae točno, kliknite na ovaj link',
  'view_more_pics' => 'Kliknite na ovaj link da biste vidjeli vie slika !',
  'send_success' => 'Vaa e-razglednica je poslana',
  'send_failed' => 'ao nam je, ali server ne moe poslati Vau razglednicu...',
  'from' => 'Od',
  'your_name' => 'Vae ime',
  'your_email' => 'Vaa e-mail adresa',
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
  'keywords' => 'Ključne riječi',
  'pic_info_str' => '%s &times; %s - %s KB - %s views - %s votes',
  'approve' => 'Potvrdi dokument', //cpg1.3.0
  'postpone_app' => 'Odgodi potvrdu',
  'del_pic' => 'Izbrii dokument', //cpg1.3.0
  'read_exif' => 'Pročitaj EXIF info ponovno', //cpg1.3.0
  'reset_view_count' => 'Resetiraj brojač posjeta',
  'reset_votes' => 'Resetiraj glasove',
  'del_comm' => 'Izbrii komentare',
  'upl_approval' => 'Uploadaj potvrdu',
  'edit_pics' => 'Uredi dokumente', //cpg1.3.0
  'see_next' => 'Pogledajte slijedeće dokumente', //cpg1.3.0
  'see_prev' => 'Pogledajte prethodne dokumente', //cpg1.3.0
  'n_pic' => '%s dokumenti', //cpg1.3.0
  'n_of_pic_to_disp' => 'Broj slika za prikaz', //cpg1.3.0
  'apply' => 'Primijeni izmjene', //cpg1.3.0
  'crop_title' => 'Coppermine Picture Editor', //cpg1.3.0
  'preview' => 'Pregled', //cpg1.3.0
  'save' => 'Sačuvaj sliku', //cpg1.3.0
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
  array('Zato se trebam registrirati?', 'Administrator moe, ali ne mora zahtijevati registraciju.Registracija članu omogućuje dodatne mogućnosti, kao uploadanje, posjedovanje liste favorita, mogućnost ocjenjivanja slika, pisanja komentara, itd.', 'omogući registraciju korisnika', '0'), //cpg1.3.0
  array('Kako se registrirati?', 'Odite na &quot;Registracija&quot; i ispunite potrebna polja (i opcionalna ako to elite).<br />Ako administrator ima e-mail aktivaciju , tada ćete nakon slanja Vaih podataka primiti e-mail na adresu koju ste naveli prilikom registracije, u kojem su naputci o tome kako aktivirati Vae članstvo. Morate aktivirati članstvo kako biste se mogli logirati.', 'allow_user_registration', '1'), //cpg1.3.0
  array('Kako se logirati?', 'Odite na &quot;Login&quot;, unesite Vae korisničko ime i zaporku i kliknite na &quot;Upamti me&quot; tako ćete biti logirani ia ako napustite stranice.<br /><b>VANO:Cookies moraju biti uključeni i cookie s ovih stranica se ne smije izbrisati kako bi se mogla koristiti opcija &quot;Upamti me&quot;.</b>', 'offline', 0), //cpg1.3.0
  array('Zato se ne mogu logirati?', 'Jeste li se registrirali i odgovorili na link koji Vam je poslan u e-mail poruci?. Ovaj link aktivira Vae članstvo. Za druge probleme u vezi logiranja kontaktirajte administratora.', 'offline', 0), //cpg1.3.0
  array('to ako sam zaboravio/la zaporku?', 'Ako ove stranice imaju &quot;Zaboravljena zaporka&quot; link onda ga upotrijebite. U drugim slučajevima kontaktirajte administratora za novu zaporku.', 'offline', 0), //cpg1.3.0
  array('to ako sam promijenio e-mail adresu?', 'Jednostavno se logirajte i promijenite e-mail adresu u &quot;Profilu&quot;', 'offline', 0), //cpg1.3.0
  array('Kako ću sačuvati sliku u  &quot;Moji favoriti&quot;?', 'Kliknite na sliku i kliknite na &quot;info o slici&quot; link (<img src="images/info.gif" width="16" height="16" border="0" alt="Picture information" />); odite na informacije o slici i kliknite &quot;Dodaj u favorite&quot;.<br />Administrator moe imati  &quot;informacije o slici&quot; po defaultu.<br />VANO:Cookies moraju biti uključeni za ovu stranicu i ne smiju se izbrisati.', 'offline', 0), //cpg1.3.0
  array('Kako ću ocijeniti sliku?', 'Kliknite na thumbnail slike i odite na dno, te odaberite ocjenu.', 'offline', 0), //cpg1.3.0
  array('Kako ću napisati komentar za sliku?', 'Kliknite na thumbnail slike i odite na dno, te napiite komentar.', 'offline', 0), //cpg1.3.0
  array('Kako ću uploadati sliku?', 'Odite na  &quot;Uploadaj sliku&quot;te odaberite album u kojeg elite uploadati,kliknite &quot;Browse&quot; i odaberite sliku za upload, kliknite &quot;open&quot; (dodajte naslov i opis ako elite) i kliknite &quot;Submit&quot;', 'allow_private_albums', 0), //cpg1.3.0
  array('Gdje ću uploadati sliku?', 'Moći ćete uploadati sliku u jedan od Vaih albuma u &quot;Moja galerija&quot;. Administrator Vam moe dopustiti da uploadate jednu ili vie slika u albume u glavnoj galeriji.', 'allow_private_albums', 0), //cpg1.3.0
  array('Koji tip i koju veličinu slika mogu uploadati?', 'Veličina i tip (jpg,gif,..itd.) ovose o administratoru.', 'offline', 0), //cpg1.3.0
  array('to je &quot;Moja galerija&quot;?', '&quot;Moja galerija&quot; je osobna galerija u koju korisnik moe uploadati svoje slike.', 'allow_private_albums', 0), //cpg1.3.0
  array('Kako ću kreirati, promijeniti naziv ili izbrisati album u  &quot;Moja galerija&quot;?', 'Morate biti u &quot;Admin-Modu&quot;<br />Odite &quot;Kreiraj/Poredaj moje albume&quot;i kliknite &quot;Novo&quot;. Promijeni &quot;Novi album&quot; u eljeno ime.<br />Također moete preimenovati bilo koji album u Vao galeriji.<br />Kliknite &quot;Primijeni promjene&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Kako mogu izmijeniti i onemogućiti korisnike da gledaju moje albume?', 'Morate biti u &quot;Admin. Modu&quot;<br />Idite na &quot;Izmijeni moje albume. Na &quot;Osvjei album&quot; baru, odaberite album kojeg elite izmijeniti.<br />Ovdje moete promijeniti naziv, opis, thumbnail sliku, ograničiti doputenje za pregledanje i komentiranje/ocjenjivanje.<br />Kliknite &quot;Osvjei album&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Kako mogu gledati albume drugih korisnika?', 'Odite na &quot;Popis albuma&quot; i odaberite &quot;Korisničke galerije&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('to su kolačići (cookies)?', 'Cookies su tekstualni podaci koji se alju sa stranica i koji se postavljaju na Va kompjuter.<br />Cookies obično doputaju korisniku da napusti neke stranice i da se kasnije na njih vrati bez ponovnog logiranja.', 'offline', 0), //cpg1.3.0
  array('Gdje mogu nabaviti ovaj program za moje stranice?', 'Coppermine je besplatna multimedijalna galerija, ostvarena pod GNU GPL. Ima brojne mogućnosti i moe se koristiti na različitim platformama. Posjetite <a href="http://coppermine.sf.net/">Coppermine Home Page</a> za vie informacija ili za download.', 'offline', 0), //cpg1.3.0

  'Navigating the Site', //cpg1.3.0
  array('to je &quot;Popis albuma&quot;?', 'On će Vam pokazati cijelu galeriju s linkovima za svaku kategoriju. Thumbnail mugu biti link za kategorije.', 'offline', 0), //cpg1.3.0
  array('to je &quot;Moja galerija&quot;?', 'Ova omogućuje korisnicima da otvaraju vlastite galerije i da dodaju/briu ili mijenjaju albume kao i da u njih uploadju.', 'allow_private_albums', 0), //cpg1.3.0
  array('to je razlika između &quot;Admin Moda&quot; i &quot;Korisničkog Moda&quot;?', 'Kada ste u admin-modu, moete modificirati svoje galerije (kao i druge ako Vam to dopusti administrator).', 'allow_private_albums', 0), //cpg1.3.0
  array('to je &quot;Uploadaj sliku&quot;?', 'Ova mogućnost doputa korisniku da uploada sliku (veličinu i vrstu određuje administrator) u galeriju koju odabere ili korisnik ili administrator.', 'allow_private_albums', 0), //cpg1.3.0
  array('to je &quot;Posljednje uploadano&quot;?', 'Ova rubrika pokazuje posljednje slike uploadane u galeriju.', 'offline', 0), //cpg1.3.0
  array('to je &quot;Posljednji komentari&quot;?', 'Ova rubrika pokazuje posljednje komentare uz slike koje su napisali korisnici.', 'offline', 0), //cpg1.3.0
  array('to je &quot;Najgledanije&quot;?', 'Ova rubrika pokazuje najgledanije slike od strane korisnika (bilo da su logirani ili ne).', 'offline', 0), //cpg1.3.0
  array('to je &quot;Najbolje ocijenjene&quot;?', 'Ova rubrika pokazuje najbolje ocijenjene slike od strane korisnika, te pokazuje prosječnu ocjenu (e.g: five users each gave a <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: the picture would have an average rating of <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;Five users rated the picture from 1 to 5 (1,2,3,4,5) would result in an average <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />The ratings go from <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (best) to <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (worst).', 'offline', 0), //cpg1.3.0
  array('to je &quot;Moji favoriti&quot;?', 'Ova rubrika omogućava korisnicima da sačuvaju omiljene slike u cookieju koji je poslan na kompjuter.', 'offline', 0), //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Podsjetnik za zaporku', //cpg1.3.0
  'err_already_logged_in' => 'Već ste logirani !', //cpg1.3.0
  'enter_username_email' => 'Unesite Vae korisničko ime i e-mail adresu', //cpg1.3.0
  'submit' => 'go', //cpg1.3.0
  'failed_sending_email' => 'E-mail podsjetnika za zaporku se ne moe poslati !', //cpg1.3.0
  'email_sent' => 'E-mail sa Vaim korisničkim imenom i zaporkom je poslan %s', //cpg1.3.0
  'err_unk_user' => 'Odabrani korisnik ne postoji!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - Podsjetnik za zaporku', //cpg1.3.0
  'passwd_reminder_body' => 'Traili ste da Vas se obavijesti o login podacima:
Korisničko ime: %s
Zaporka: %s
Kliknite %s za login.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Ime grupe',
  'disk_quota' => 'Disk quota',
  'can_rate' => 'Moete ocijeniti slike', //cpg1.3.0
  'can_send_ecards' => 'Moete poslati e-razglednice',
  'can_post_com' => 'Moete pisati komentare',
  'can_upload' => 'Moete uploadati slike', //cpg1.3.0
  'can_have_gallery' => 'Moete imati osobnu galeriju',
  'apply' => 'Primijeni izmjene',
  'create_new_group' => 'Kreiraj novu grupu',
  'del_groups' => 'Izbrii odabranu(e) grupU(e)',
  'confirm_del' => 'Upozorenje, kada izbriete grupukorisnici koji pripadaju toj grupi biti će prebačeni u \'Registrirani\' grupu !\n\nalite li nastaviti ?', //js-alert //cpg1.3.0
  'title' => 'Uredite korisničke grupe',
  'approval_1' => 'Pub. Upl. dozvola (1)',
  'approval_2' => 'Priv. Upl. dozvola (2)',
  'upload_form_config' => 'Upload form configuration', //cpg1.3.0
  'upload_form_config_values' => array( 'Upload samo jedne slike', 'Upload samo vie slika', 'samo URI upload', 'samo ZIP upload', 'File-URI', 'File-ZIP', 'URI-ZIP', 'File-URI-ZIP'), //cpg1.3.0
  'custom_user_upload'=>'Moe li korisnik prilagoditi broj upload kućica?', //cpg1.3.0
  'num_file_upload'=>'Maksimalni/precizni broj kućica za upload slika', //cpg1.3.0
  'num_URI_upload'=>'Maksimalni/precizni broj kućica za URI upload', //cpg1.3.0
  'note1' => '<b>(1)</b> Za upload u javni album potrebna je dozvola administratora',
  'note2' => '<b>(2)</b> Za upload u album korisnika potrbna je dozvola administratora',
  'notes' => 'Notes',
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Dobro doli !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Jeste li sigurni da elite IZBRISATI ovaj album ? \\nSve slike i komentari će također biti izbrisani.', //js-alert //cpg1.3.0
  'delete' => 'IZBRIPI',
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
  'enter_login_pswd' => 'Unesite Vae korisničko ime i zaporku',
  'username' => 'Korisničko ime',
  'password' => 'Zaporka',
  'remember_me' => 'Upamti me',
  'welcome' => 'Dobro doli %s ...',
  'err_login' => '*** Neuspio login. Pokuajte ponovno ***',
  'err_already_logged_in' => 'Već ste logirani !',
  'forgot_password_link' => 'Zaboravio(la) sam zaporku', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Logout',
  'bye' => 'Do viđenja %s ...',
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
  'upd_alb_n' => 'Osvjei album(e) %s',
  'general_settings' => 'Generalne postavke',
  'alb_title' => 'Naziv albuma',
  'alb_cat' => 'Kategorija albuma',
  'alb_desc' => 'Opis albuma',
  'alb_thumb' => 'Thumbnail albuma',
  'alb_perm' => 'Dozvole za ovaj album',
  'can_view' => 'Album moe(gu) vidjeti',
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
  'groupp_only' => 'Članovi \'%s\' grupe',
  'err_no_alb_to_modify' => 'Albumi se ne mogu mijenjati u bazi podataka.',
  'update' => 'Osvjei album', //cpg1.3.0
  'notice1' => '(*) ovisi o  %sgroupnim%s postavkama', //cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'ao nam je, ali već ste ocijenili ovu sliku', //cpg1.3.0
  'rate_ok' => 'Vaa ocjena je prihvaćena',
  'forbidden' => 'Ne moete ocijeniti Vae vlastite slike.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Iako će administrator {IME_GALERIJE} brisati ili izmijeniti shvati neprihvatljivi materijal čim prije, nemoguće je pregledati ba svaki komentar. Stoga, prihvaćate da stavovi objavljeni na ovim stranicama izraavaju poglede i miljenja autora, a ne administratora ili webmastera (osim za njihove vlastite), te oni neće biti odgovorni za iste.<br />
<br />
Prihvaćate klauzulu da nećete objavljivati nikakav materijal koji je uvredljiv, opscen, vulgaran, prepun mrnje, prijetnji, ili bilo kakav drugi koji bi mogao povrijediti postojeće zakone. Slaete se da webmaster, administrator i moderatori {IME_GALERIJE} imaju pravo ukloniti ili izmijeniti bilo koji sadraj u bilo koje vrijeme ako budu smatrali to potrebnim. Kao korisnik slaete se da sve informacije koje upiete bude spremljene u bazi podataka. Iako ove informacije neće biti proslijeđene trećim strankama bez Vaeg doputenja, webmaster i administrator ne mogu biti odgovorni za bilo kakvo hackiranje, koje bi dovelo do kompromitiranja podataka.<br />
<br />
Ove stranice koriste cookieje za pohranu informacija na Va kompjuter. Oni slue samo za Vae jednostavnije gledanje ovih stranica. E-mail adresa koju ste naveli koristi se samo za potvrdu detalja Vae registracije i zaporke.<br />
<br />
Kliknuvi na 'Slaem se' ispod, potvrđujete da se slaete sa gore navedenim uvjetima.
EOT;

$lang_register_php = array(
  'page_title' => 'Registracija korisnika',
  'term_cond' => 'Uvjeti koritenja',
  'i_agree' => 'Slaem se',
  'submit' => 'Provedi registraciju',
  'err_user_exists' => 'Korisničko ime koje ste naveli već postoji, molimo Vas, odaberite drugo ime',
  'err_password_mismatch' => 'Dvije zaporke se ne slau, molimo Vas unesite ih ponovno',
  'err_uname_short' => 'Korisničko ime mora imati makar dva znaka',
  'err_password_short' => 'Zaporka mora imati makar dva znaka',
  'err_uname_pass_diff' => 'Korisničko ime i zaporka moraju biti različiti',
  'err_invalid_email' => 'E-mail adresa nije vaeća',
  'err_duplicate_email' => 'Drugi korisnik već je registriran s ovom e-mail adresom',
  'enter_info' => 'Input registration information',
  'required_info' => 'Potrebne informacije',
  'optional_info' => 'Optional information',
  'username' => 'Korisničko ime',
  'password' => 'Zaporka',
  'password_again' => 'Ponovno unesite zaporku',
  'email' => 'E-mail',
  'location' => 'Mjesto',
  'interests' => 'Hobiji',
  'website' => 'Home page',
  'occupation' => 'Zanimanje',
  'error' => 'POGREKA',
  'confirm_email_subject' => '%s - Potvrda registracije',
  'information' => 'Informacije',
  'failed_sending_email' => 'E-mail o potvrdi registracije se ne moe poslati !',
  'thank_you' => 'Hvala na registraciji.<br /><br />E-mail sa informacijama o tome kako aktivirati Vae članstvo poslan je na e-mail adresu koju ste naveli pri registraciji.',
  'acct_created' => 'Va račun je otvoren i sada se moete logirati s Vaim korisničkim imenom i zaporkom',
  'acct_active' => 'Va račun je sada aktivan i i Vi se moete logirati sa Vaim korisničkim imenom i zaporkom',
  'acct_already_act' => 'Va račun je već aktivan !',
  'acct_act_failed' => 'Ovaj račun se ne moe aktivirati !',
  'err_unk_user' => 'Odabrani korisnik ne postoji !',
  'x_s_profile' => '%s\' profil',
  'group' => 'Grupa',
  'reg_date' => 'Pristupio/la',
  'disk_usage' => 'Upotrebljivost diska',
  'change_pass' => 'Izmijeni zaporku',
  'current_pass' => 'Sadanja zaporka',
  'new_pass' => 'Nova zaporka',
  'new_pass_again' => 'Nova zaporka ponovno',
  'err_curr_pass' => 'Trenutna zaporka je netočna',
  'apply_modif' => 'Primijeni izmjene',
  'change_pass' => 'Promijeni moju zaporku',
  'update_success' => 'Va profil je izmijenjen',
  'pass_chg_success' => 'Vaa zaporka je promijenjena',
  'pass_chg_error' => 'Vaa zaporka nije promijenjena',
  'notify_admin_email_subject' => '%s - Obavijest o registraciji', //cpg1.3.0
  'notify_admin_email_body' => 'Novi korisnik s korisničkim imenom "%s" se upravo registrirao u Vaoj galeriji', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
Hvala za registraciju u {IME_GALERIJE}

Vae korisničko ime je : "{KORISNIČKO_IME}"
Vaa zaporka je : "{ZAPORKA}"

Da biste aktivirali Va račun, trebate kliknuti na link ispod, ili ga kopirati u Va preglednik.

{ACT_LINK}

Srdačan pozdrav,

Urednitvo {IME_GALERIJE}

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
  'see_next' => 'Pogledaj slijedeće',
  'del_comm' => 'Izbrii odabrane komentare',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
  0 => 'Pretrai u zbirci slika',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Pretrai nove slike', //cpg1.3.0
  'select_dir' => 'Odaberi direktorij',
  'select_dir_msg' => 'Ova funkcija Vam omogućuje da dodate batch of file koju ste uploadali na Va server preko FTP-a.<br /><br />Select the directory where you have uploaded your files', //cpg1.3.0
  'no_pic_to_add' => 'Nema slike za dodati', //cpg1.3.0
  'need_one_album' => 'Potreban Vam je bar jedan album za koritenje ove funkcije',
  'warning' => 'Upozorenje',
  'change_perm' => 'skripta ne moe pisati u ovaj direktorij, trebate promijeniti mod na 755 ili 777 prije nego pokuate dodati slike !', //cpg1.3.0
  'target_album' => '<b>Stavi slike iz &quot;</b>%s<b>&quot; u </b>%s', //cpg1.3.0
  'folder' => 'Direktorij',
  'image' => 'Slika',
  'album' => 'Album',
  'result' => 'Resultat',
  'dir_ro' => 'Ne moe se pisati. ',
  'dir_cant_read' => 'Ne moe se čitati. ',
  'insert' => 'Dodavanje novih slika u galeriju', //cpg1.3.0
  'list_new_pic' => 'Popis novih slika', //cpg1.3.0
  'insert_selected' => 'Unesi odabrane slike', //cpg1.3.0
  'no_pic_found' => 'Nije pronađena niti jedna nova slika', //cpg1.3.0
  'be_patient' => 'Molimmo Vas da budete strpljivi, skripti je potrebno vremena za dodavanje slika', //cpg1.3.0
  'no_album' => 'nije odabran album',  //cpg1.3.0
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : znači da je slika uspjeno dodana'.
                          '<li><b>DP</b> : znači da je slika duplikat i da se već nalazi u bazi podataka'.
                          '<li><b>PB</b> : znači da se slika nije mogla dodati, provjerite Vae postavke i dozvole za direktorije gdje su smjetene slike'.
                          '<li><b>NA</b> : znači da niste odabrali album u kojeg idu slike, kliknite na \'<a href="javascript:history.back(1)">back</a>\' i odaberite album. If you don\'t have an album <a href="albmgr.php">create one first</a></li>'.
                          '<li>Ako se  OK, DP, PB \'znakovi\' ne pojave, kliknite na sliku za provjeru poruke o PHP greci'.
                          '<li>If your browser timeout, hit the reload button'.
                          '</ul>', //cpg1.3.0
  'select_album' => 'odaberi album', //cpg1.3.0
  'check_all' => 'Obiljei sve', //cpg1.3.0
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
  'user_name' => 'Korisničko ime',
  'ip_address' => 'IP Adresa',
  'expiry' => 'Ističe (prazno znači stalno)',
  'edit_ban' => 'Sačuvaj izmjene',
  'delete_ban' => 'Izbrii',
  'add_new' => 'Dodaj novu zabranu',
  'add_ban' => 'Dodaj',
  'error_user' => 'Ne mogu naći korisnika', //cpg1.3.0
  'error_specify' => 'Trebate odrediti ili korisničko ime ili IP adresu', //cpg1.3.0
  'error_ban_id' => 'Nepravilna zabrana ID-a!', //cpg1.3.0
  'error_admin_ban' => 'Ne moete napraviti zabranu sebi!', //cpg1.3.0
  'error_server_ban' => 'Jeste li htjeli zabraniti pristup vlastitom serveru? Tsk tsk, ne moete to učiniti...', //cpg1.3.0
  'error_ip_forbidden' => 'Ne moete zabrabiti pristup ovoj IP adresi - it is non-routable!', //cpg1.3.0
  'lookup_ip' => 'Pogledajte IP adresu', //cpg1.3.0
  'submit' => 'go!', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Upload file', //cpg1.3.0
  'custom_title' => 'Prilagođeni obrazac za zahtjev', //cpg1.3.0
  'cust_instr_1' => 'Moete odabrati prilagođeni broj kućica za upload. Ali, ne moete odabrati vie od ograničenja naznačenog ispod.', //cpg1.3.0
  'cust_instr_2' => 'Box Number Requests', //cpg1.3.0
  'cust_instr_3' => 'Kućice za upload slika: %s', //cpg1.3.0
  'cust_instr_4' => 'URI/URL upload kućice: %s', //cpg1.3.0
  'cust_instr_5' => 'URI/URL upload kućice:', //cpg1.3.0
  'cust_instr_6' => 'Upload kućice za slike:', //cpg1.3.0
  'cust_instr_7' => 'Molimo Vas, unesite broj svakog tipa kućica za upload koje elite. Tada kliknite  \'Nastavi\'. ', //cpg1.3.0
  'reg_instr_1' => 'Nevaljana radnja za stvaranje obrasca.', //cpg1.3.0
  'reg_instr_2' => 'Sada moete uploadati Vae slike koristeći kućice za upload ispod. Veličina uploadanih slika na server ne smije prijeći %s KB svaka. ZIP slike uploadane u \'Upload slika\' i \'URI/URL Upload\' rubrike će ostai compressed.', //cpg1.3.0
  'reg_instr_3' => 'Ako elite dekompresirati zip slike ili arhiv, morate koristiti kućicu za upload slika koja se nalazi \'Decompressive ZIP Upload\' rubrici.', //cpg1.3.0
  'reg_instr_4' => 'Kada koristite URI/URL upload rubriku, unesite put do slike kao ovdje: http://www.mysite.com/images/example.jpg', //cpg1.3.0
  'reg_instr_5' => 'Kada kompletirate obrazac, kliknite na \'Nastavi\'.', //cpg1.3.0
  'reg_instr_6' => 'Upload decompressive ZIP:', //cpg1.3.0
  'reg_instr_7' => 'Upload slika:', //cpg1.3.0
  'reg_instr_8' => 'URI/URL Upload:', //cpg1.3.0
  'error_report' => 'Poruka o greci', //cpg1.3.0
  'error_instr' => 'Slijedeći uploadi imaju potekoće:', //cpg1.3.0
  'file_name_url' => 'Naziv slike/URL', //cpg1.3.0
  'error_message' => 'Poruka o greci', //cpg1.3.0
  'no_post' => 'Sliku nije uploadao POST.', //cpg1.3.0
  'forb_ext' => 'Zabranjena ekstenzija slike.', //cpg1.3.0
  'exc_php_ini' => 'Premaena doputena veličina slike u php.ini.', //cpg1.3.0
  'exc_file_size' => 'Premaena veličina slike dozvoljena po CPG.', //cpg1.3.0
  'partial_upload' => 'Samo djelomičan upload.', //cpg1.3.0
  'no_upload' => 'Nije bilo uploada.', //cpg1.3.0
  'unknown_code' => 'Nepoznata PHP upload greka.', //cpg1.3.0
  'no_temp_name' => 'Nema uploada - Nema privremenog imena.', //cpg1.3.0
  'no_file_size' => 'Ne sadri podatke/Otećena', //cpg1.3.0
  'impossible' => 'Nemoguće prebaciti.', //cpg1.3.0
  'not_image' => 'Nije slika/otećeno', //cpg1.3.0
  'not_GD' => 'Nije GD ekstenzija.', //cpg1.3.0
  'pixel_allowance' => 'Premaena dozvola pixela.', //cpg1.3.0
  'incorrect_prefix' => 'Netočan URI/URL prefiks', //cpg1.3.0
  'could_not_open_URI' => 'Ne moe se otvoriti URI.', //cpg1.3.0
  'unsafe_URI' => 'Sigurnost nije verificirana.', //cpg1.3.0
  'meta_data_failure' => 'Meta data pogreka', //cpg1.3.0
  'http_401' => '401 Neautorizirano', //cpg1.3.0
  'http_402' => '402 Potrebno plaćanje', //cpg1.3.0
  'http_403' => '403 Zabranjeno', //cpg1.3.0
  'http_404' => '404 Nije pronađeno', //cpg1.3.0
  'http_500' => '500 Unutarnja server pogreka', //cpg1.3.0
  'http_503' => '503 Servis nedostupan', //cpg1.3.0
  'MIME_extraction_failure' => 'MIME se ne moe odrediti.', //cpg1.3.0
  'MIME_type_unknown' => 'Nepoznati MIME tip', //cpg1.3.0
  'cant_create_write' => 'Ne moe se kreirati dokument za pisanje.', //cpg1.3.0
  'not_writable' => 'Ne moe se pisati u dokument za pisanje.', //cpg1.3.0
  'cant_read_URI' => 'Ne moe se pročitati URI/URL', //cpg1.3.0
  'cant_open_write_file' => 'Ne moe se otvoriti URI dokument za pisanje.', //cpg1.3.0
  'cant_write_write_file' => 'Ne moe se pisati u URI dokument za pisanje.', //cpg1.3.0
  'cant_unzip' => 'Ne moe se izvriti dekompresija.', //cpg1.3.0
  'unknown' => 'Nepoznata pogreka', //cpg1.3.0
  'succ' => 'Uspjeni uploadi', //cpg1.3.0
  'success' => '%s uploada je bilo uspjeno.', //cpg1.3.0
  'add' => 'Molimo Vas, kliknite na \'Nastavi\' dodavati slike u album.', //cpg1.3.0
  'failure' => 'Upload pogreka', //cpg1.3.0
  'f_info' => 'Informacije o dokumentu', //cpg1.3.0
  'no_place' => 'Prethodna slika se nije mogla smjestiti.', //cpg1.3.0
  'yes_place' => 'Prethodna slika je smjetena uspjeno.', //cpg1.3.0
  'max_fsize' => 'Maksimalna doputena veličina slika je  %s KB',
  'album' => 'Album',
  'picture' => 'Slika', //cpg1.3.0
  'pic_title' => 'Naslov slike', //cpg1.3.0
  'description' => 'Opis slike', //cpg1.3.0
  'keywords' => 'Ključne riječi (odvojene praznim mjestima)',
  'err_no_alb_uploadables' => 'ao nam je, nema albuma u kojem Vam je doputeno uploadati slike', //cpg1.3.0
  'place_instr_1' => 'Molimo Vas, stavite slike u albume.  Moete također unijeti informacije o svakoj slici.', //cpg1.3.0
  'place_instr_2' => 'Treba smjestiti vie slika. Molimo Vas, kliknite na  \'Nastavi\'.', //cpg1.3.0
  'process_complete' => 'Uspjeno ste smjestili sve slike.', //cpg1.3.0
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
  'err_no_users' => 'Korisnička tablica je prazna !',
  'err_edit_self' => 'Ne moete mijenjati Va profil, upotrijebite You can\'t edit your own profile, use the \'Moj profil\' link za to',
  'edit' => 'UREDI',
  'delete' => 'IZBRII',
  'name' => 'Korisničko ime',
  'group' => 'Grupa',
  'inactive' => 'Neaktivan',
  'operations' => 'Operacije',
  'pictures' => 'Slike', //cpg1.3.0
  'disk_space' => 'Iskoritenost prostora / Quota',
  'registered_on' => 'Registriran(na) dana',
  'last_visit' => 'Posljednja posjeta', //cpg1.3.0
  'u_user_on_p_pages' => '%d korisnika na %d strane(a)',
  'confirm_del' => 'Jeste li sigurni da elite IZBRISATI ovog korisnika ? \\nSve njegove slike i albumi će također biti izbrisani.', //js-alert //cpg1.3.0
  'mail' => 'MAIL',
  'err_unknown_user' => 'Odabrani korisnik ne postoji !',
  'modify_user' => 'Izmijeni korisnika',
  'notes' => 'Biljeke',
  'note_list' => '<li>Ako ne elite mijenjati trenutnu zaporku, ostavite polje za zaporku praznim',
  'password' => 'Zaporka',
  'user_active' => 'Korisnik je aktivan',
  'user_group' => 'Korisnička grupa',
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
  'what_it_does' => 'to to radi',
  'what_update_titles' => 'Osvećava naslove iz imena slika',
  'what_delete_title' => 'Brie naslove',
  'what_rebuild' => 'Osvjeava thumbnaile i mijenja veličinu slika',
  'what_delete_originals' => 'Brie originalne slike mijenjajući ih sa verzijom promijenjene veličine',
  'file' => 'Slika',
  'title_set_to' => 'naslov postavljen na',
  'submit_form' => 'provedi',
  'updated_succesfully' => 'uspjeno osvjeeno',
  'error_create' => 'ERROR creating',
  'continue' => 'Procesuira vie slika',
  'main_success' => 'Slika %s je bila uspjeno upotrijebljena kao glavna slika', //cpg1.3.0
  'error_rename' => 'Greka mijenjanja imena %s u %s',
  'error_not_found' => 'Slika %s nije pronađena',
  'back' => 'natrag na glavno',
  'thumbs_wait' => 'Osvjeava thumbnaile i/ili slike promijenjene veličine, molimo Vas, sačekajte...',
  'thumbs_continue_wait' => 'Nastavlja osvjeavanje thumbnaila i/ili slika promijenjene veličine...',
  'titles_wait' => 'Osvjeava naslove, sačekajte...',
  'delete_wait' => 'Brie naslove, sačekajte...',
  'replace_wait' => 'Brie originale i mijenja ih slikama promijenjene veličine, sačekajte..',
  'instruction' => 'Brze instrukcije',
  'instruction_action' => 'Odaberite radnju',
  'instruction_parameter' => 'Postavite parametre',
  'instruction_album' => 'Odaberite album',
  'instruction_press' => 'Press %s',
  'update' => 'Osvjeava thumbe i/ili slike promijenjene veličine',
  'update_what' => 'to treba osvjeiti',
  'update_thumb' => 'SamoOnly thumbnaile',
  'update_pic' => 'Samo slike promijenjene veličine',
  'update_both' => 'I thumbnaile i slike promijenjene veličine',
  'update_number' => 'Broj procesuiranih slika po kliku',
  'update_option' => '(Pokuajte postaviti ovu opciju s niim vrijednostima ako dođe do timeout problema)',
  'filename_title' => 'Naziv slike &rArr; Naslov slike', //cpg1.3.0
  'filename_how' => 'Kako treba promijeniti naziv slike',
  'filename_remove' => 'Odstranite .jpg nastavak i zamijenite  _ (crta) praznim prostorom',
  'filename_euro' => 'Izmijeni 2003_11_23_13_20_20.jpg u 23/11/2003 13:20',
  'filename_us' => 'Izmijeni 2003_11_23_13_20_20.jpg u 11/23/2003 13:20',
  'filename_time' => 'Izmijeni 2003_11_23_13_20_20.jpg u 13:20',
  'delete' => 'Izbrii tipove slika ili originalnu veličinu slika', //cpg1.3.0
  'delete_title' => 'Izbrii naslove slika', //cpg1.3.0
  'delete_original' => 'Izbrii originalnu veličinu slika',
  'delete_replace' => 'Brie originalne slike mijenjajući ih slikama promijenjene veličine',
  'select_album' => 'Odaberi album',
  'delete_orphans' => 'Brie neprikladne komentare (works on all albums)', //cpg1.3.0
  'orphan_comment' => 'pronađen neprikladan komentar', //cpg1.3.0
  'delete' => 'Brii', //cpg1.3.0
  'delete_all' => 'Brii sve', //cpg1.3.0
  'comment' => 'Komentira: ', //cpg1.3.0
  'nonexist' => 'prikačeno na nepostojeću sliku # ', //cpg1.3.0
  'phpinfo' => 'Prikazuje php info', //cpg1.3.0
  'update_db' => 'Osvjei bazu podataka', //cpg1.3.0
  'update_db_explanation' => 'Ako ste zamijenili Coppermine files, dodali ispravke ili osvjeili sa prethodne verzije Coppermine-a, pazite da osvjeite bazu padataka. Ovaj postupak će kreirati potrebne tablice i/ili config vrijednosti u vaoj Coppermine bazi podataka.', //cpg1.3.0
);

?>