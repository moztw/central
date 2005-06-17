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
// CVS version: $Id: danish-utf-8.php,v 1.8 2004/07/24 15:04:02 gaugau Exp $
// ------------------------------------------------------------------------- //

// info about translators and translated language 
$lang_translation_info = array( 
'lang_name_english' => 'Danish',  
'lang_name_native' => 'Dansk', 
'lang_country_code' => 'dk', 
'trans_name'=> 'Laugesen', //the name of the translator - can be a nickname 
'trans_email' => 'laugesen@tommerup.net', //translator's email address (optional) 
'trans_website' => 'http://www.tommerup.net', //translator's website (optional) 
'trans_name2'=> 'David Holm', //the name of the translator - can be a nickname 
'trans_email2' => 'wormie@alberg.dk', //translator's email address (optional)
'trans_date' => '2003-22-03', //the date the translation was created / last modified
); 

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Byte', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Søn', 'Man', 'Tir', 'Ons', 'Tor', 'Fre', 'Lør');
$lang_month = array('Jan', 'Feb', 'Mar', 'Apr', 'Maj', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec');

// Some common strings
$lang_yes = 'Ja';
$lang_no  = 'Nej';
$lang_back = 'TILBAGE';
$lang_continue = 'FORTSÆT';
$lang_info = 'Information';
$lang_error = 'Fejl';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%d. %B, %Y';
$lastcom_date_fmt =  '%d/%m/%y kl %H:%M'; //cpg1.3.0
$lastup_date_fmt = '%d. %B, %Y';
$register_date_fmt = '%d. %B, %Y';
$lasthit_date_fmt = '%d. %B, %Y kl. %H:%M'; //cpg1.3.0
$comment_date_fmt =  '%d. %B, %Y kl. %H:%M'; //cpg1.3.0


// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(  
        'random' => 'Tilfældige files', //cpg1.3.0
        'lastup' => 'Nyeste filer', 
        'lastalb'=> 'Sidst opdaterede albums', 
        'lastcom' => 'Nyeste kommentarer', 
        'topn' => 'Mest viste', 
        'toprated' => 'Mest populære', 
        'lasthits' => 'Sidst viste', 
        'search' => 'Søge resultat', 
        'favpics'=> 'Foretrukne filer', //cpg1.3.0
); 

$lang_errors = array(
        'access_denied' => 'Du har ikke tilladelse til at se denne side.',
        'perm_denied' => 'Du har ikke tilladelse til at udføre denne handling.',
        'param_missing' => 'Script kaldt uden de nødvendige parametre(r).',
        'non_exist_ap' => 'Det valgte album/den valgte fil eksister ikke !', //cpg1.3.0
        'quota_exceeded' => 'Disk mængden overskredet<br /><br />Du har plads til en [quota]K, Dine filer bruger aktuelt [space]K, tilføjelse af denne fil medfører en overskridelse af din tilladte mængde.',
        'gd_file_type_err' => 'Når der anvendes GD billedeteknink, er tilladte typer kun JPEG og PNG.',
        'invalid_image' => 'Billedet som du har uploadet er defekt eller kan ikke bruges med GD billedeteknik',
        'resize_failed' => 'Ej muligt at oprette minibillede eller mellem stort billede.',
        'no_img_to_display' => 'Intet billede at vise',
        'non_exist_cat' => 'Den valgte kategori findes ikke',
        'orphan_cat' => 'En kategori har ikke et tilhørsforhold, kør kategori manager for at rette problemet.', //cpg1.3.0
        'directory_ro' => 'Mappen \'%s\' er skrivebeskyttet, filer kan ikke slettes', //cpg1.3.0
        'non_exist_comment' => 'Den valgte kommentar findes ikke.',
        'pic_in_invalid_album' => 'Filen er i et ikke eksisterende album (%s)!?', //cpg1.3.0
        'banned' => 'Din adgang til denne side er spærret.', 
        'not_with_udb' => 'Denne funktion er deaktiveret i Coppermine da den er integreret med forum software. Enten er det du ønsker at gøre ikke understøttet i denne opsætning eller også skal det gøres vha. forum software.', 
        'offline_title' => 'Offline', //cpg1.3.0
        'offline_text' => 'Galleriet er offline lige nu - prøv igen senere', //cpg1.3.0
        'ecards_empty' => 'Der findes ingen e-postkort lige nu. Kontroller at du har aktiveret e-postkort logning på opstænings siden!', //cpg1.3.0
        'action_failed' => 'Handling fejlede. Coppermine kan ikke udføre det ønskede.', //cpg1.3.0
        'no_zip' => 'Understøttelse af ZIP filer er ikke tilgængelig. Kontakt venligst administratoren af galleriet.', //cpg1.3.0
        'zip_type' => 'Du har ikke tilladelse til at uploade zip filer.', //cpg1.3.0
);

$lang_bbcode_help = 'Følgende koder kan være nyttige: <li>[b]<b>Fed</b>[/b]</li> <li>[i]<i>Kursiv</i>[/i]</li> <li>[url=http://dinside.dk/]Url Tekst[/url]</li> <li>[email]bruger@domæne.dk[/email]</li>'; //cpg1.3.0

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
        'alb_list_title' => 'Gå til albumlisten',
        'alb_list_lnk' => 'Albumliste',
        'my_gal_title' => 'Gå til personligt galleri',
        'my_gal_lnk' => 'Mit galleri',
        'my_prof_lnk' => 'Min profil',
        'adm_mode_title' => 'Skift til admin tilstand',
        'adm_mode_lnk' => 'Admin tilstand',
        'usr_mode_title' => 'Skift til bruger tilstand',
        'usr_mode_lnk' => 'Bruger tilstand',
        'upload_pic_title' => 'Upload en fil til et album', //cpg1.3.0
        'upload_pic_lnk' => 'Upload fil', //cpg1.3.0
        'register_title' => 'Opret en konto',
        'register_lnk' => 'Registrer',
        'login_lnk' => 'Log ind',
        'logout_lnk' => 'Log ud',
        'lastup_lnk' => 'Nyeste uploads',
        'lastcom_lnk' => 'Nyeste kommentar',
        'topn_lnk' => 'Mest viste',
        'toprated_lnk' => 'Top karakter',
        'search_lnk' => 'Søg',
        'fav_lnk'=>'Foretrukne',
        'memberlist_title' => 'Vis liste over medlemmer', //cpg1.3.0
        'memberlist_lnk' => 'Medlemsliste', //cpg1.3.0
        'faq_title' => 'Ofte Stillede Spørgsmål (FAQ) omkring galleriet &quot;Coppermine&quot;', //cpg1.3.0
        'faq_lnk' => 'OSS (FAQ)', //cpg1.3.0

);

$lang_gallery_admin_menu = array(
        'upl_app_lnk' => 'Upload til godkendelse',
        'config_lnk' => 'Opsætning',
        'albums_lnk' => 'Albums',
        'categories_lnk' => 'Kategorier',
        'users_lnk' => 'Brugere',
        'groups_lnk' => 'Grupper',
        'comments_lnk' => 'Kommentarer', //cpg1.3.0
        'searchnew_lnk' => 'Masse tilføj filer', //cpg1.3.0
        'util_lnk' => 'Admin værktøjer', //cpg1.3.0
        'ban_lnk' => 'Bloker brugere', 
        'db_ecard_lnk' => 'Vis e-postkort', //cpg1.3.0
);

$lang_user_admin_menu = array(
        'albmgr_lnk' => 'Opret / ordne albums',
        'modifyalb_lnk' => 'Ret i mit album',
        'my_prof_lnk' => 'Min profil',
);

$lang_cat_list = array(
        'category' => 'Kategori',
        'albums' => 'Album',
        'pictures' => 'Filer', //cpg1.3.0
);

$lang_album_list = array(
        'album_on_page' => '%d album på %d side(r)'
);

$lang_thumb_view = array(
        'date' => 'DATO',
        //Sort by filename and title
        'name' => 'FILNAVN',
        'title' => 'TITEL',
        'sort_da' => 'Sorter stigende efter dato',
        'sort_dd' => 'Sorter faldende efter dato',
        'sort_na' => 'Sorter stigende efter navn',
        'sort_nd' => 'Sorter faldende efter navn',
        'sort_ta' => 'Sorter stigende efter titel',
        'sort_td' => 'Sorter faldende efter titel',
        'download_zip' => 'Download som Zip fil', //cpg1.3.0
        'pic_on_page' => '%d filer på %d side(r)',
        'user_on_page' => '%d brugere på %d side(r)', //cpg1.3.0
);

$lang_img_nav_bar = array(
        'thumb_title' => 'Retur til oversigt',
        'pic_info_title' => 'Vis/skjul fil information', //cpg1.3.0
        'slideshow_title' => 'Slideshow',
        'ecard_title' => 'Send denne fil som et e-postkort', //cpg1.3.0
        'ecard_disabled' => 'E-postkort er slået fra',
        'ecard_disabled_msg' => 'Du har ikke tilladelse til at sende e-postkort', //js-alert //cpg1.3.0
        'prev_title' => 'Se forrige fil', //cpg1.3.0
        'next_title' => 'Se næste fil', //cpg1.3.0
        'pic_pos' => 'FIL %s/%s', //cpg1.3.0
);

$lang_rate_pic = array(
        'rate_this_pic' => 'Bedøm denne fil', //cpg1.3.0
        'no_votes' => '(Ej bedømt endnu)',
        'rating' => '(Aktuel karakter: %s / 5 med %s stemmer)',
        'rubbish' => 'Dårligt',
        'poor' => 'Ringe',
        'fair' => 'Rimeligt',
        'good' => 'Godt',
        'excellent' => 'Rigtig godt',
        'great' => 'Fantastisk',
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
        CRITICAL_ERROR => 'Kritisk fejl',
        'file' => 'Fil: ',
        'line' => 'Linje: ',
);

$lang_display_thumbnails = array(
        'filename' => 'Filnavn : ',
        'filesize' => 'Filstørrelse : ',
        'dimensions' => 'Dimensioner : ',
        'date_added' => 'Tilføjet dato : ', //cpg1.3.0
);

$lang_get_pic_data = array(
        'n_comments' => '%s kommentarer',
        'n_views' => '%s visninger',
        'n_votes' => '(%s stemmer)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Fejlfindings info', //cpg1.3.0
  'select_all' => 'Marker alt', //cpg1.3.0
  'copy_and_paste_instructions' => 'Hvis du vil bede om hjælp i coppermine hjælpe forumet, så kopier teksten og sæt den ind i din besked. Husk at erstatter koder med *** før du sender beskeden.', //cpg1.3.0
  'phpinfo' => 'vis phpinfo', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => '* Standard sprog *', //cpg1.3.0
  'choose_language' => 'Vælg sprog', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => '* Standard tema *', //cpg1.3.0
  'choose_theme' => 'Vælg tema', //cpg1.3.0
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
        'Exclamation' => 'Udråb',
        'Question' => 'Spørgsmål',
        'Very Happy' => 'Meget glad',
        'Smile' => 'Smil',
        'Sad' => 'Trist',
        'Surprised' => 'Overrasket',
        'Shocked' => 'Chokeret',
        'Confused' => 'Forvirret',
        'Cool' => 'Sejt',
        'Laughing' => 'Griner',
        'Mad' => 'Sur',
        'Razz' => 'Drille',
        'Embarassed' => 'Genert',
        'Crying or Very sad' => 'Græder eller meget trist',
        'Evil or Very Mad' => 'Ond eller meget sur',
        'Twisted Evil' => 'Lusket ond',
        'Rolling Eyes' => 'Ruller med øjne',
        'Wink' => 'Vinker',
        'Idea' => 'God ide',
        'Arrow' => 'Pil',
        'Neutral' => 'Neutral',
        'Mr. Green' => 'Hr. Grøn',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
        0 => 'Forlader admin mode...',
        1 => 'Logger ind som admin...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
        'alb_need_name' => 'Album skal have et navn!', //js-alert
        'confirm_modifs' => 'Er du sikker på at du vil lave disse ændringer?', //js-alert
        'no_change' => 'Du lavede ingen ændringer!', //js-alert
        'new_album' => 'Nyt album',
        'confirm_delete1' => 'Er du sikker på du vil slette dette album?', //js-alert
        'confirm_delete2' => '\nAlle filer og kommentarer forsvinder!', //js-alert
        'select_first' => 'Vælg først et album', //js-alert
        'alb_mrg' => 'Album Manager',
        'my_gallery' => '* Mit galleri *',
        'no_category' => '* Ingen kategori *',
        'delete' => 'Slet',
        'new' => 'Ny',
        'apply_modifs' => 'Godkend rettelser',
        'select_category' => 'Vælg kategori',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
        'miss_param' => 'Parameter Parameters obligatorisk ved \'%s\'operation ej udført!',
        'unknown_cat' => 'Valgte kategori eksister ikke i databasen',
        'usergal_cat_ro' => 'Bruger galleri kategorien kan ikke slettes!',
        'manage_cat' => 'Administrer kategorier',
        'confirm_delete' => 'Er du sikker på du ønsker at SLETTE denne kategori', //js-alert
        'category' => 'Kategori',
        'operations' => 'Handling',
        'move_into' => 'Flyt til',
        'update_create' => 'Opdater/Opret kategori',
        'parent_cat' => 'Hoved kategori',
        'cat_title' => 'Kategori titel',
        'cat_thumb' => 'Kategori ikon', //cpg1.3.0
        'cat_desc' => 'Kategori beskrivelse',
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
        'title' => 'Konfiguration',
        'restore_cfg' => 'Genskab standard indstillinger',
        'save_cfg' => 'Gem ny opsætning',
        'notes' => 'Noter',
        'info' => 'Information',
        'upd_success' => 'Coppermine opsætning er opdateret',
        'restore_success' => 'Coppermine standard opsætning er genskabt',
        'name_a' => 'Navn stigende',
        'name_d' => 'Navn faldende',
        'title_a' => 'Titel stigende',
        'title_d' => 'Titel faldende',
        'date_a' => 'Dato stigende',
        'date_d' => 'Dato faldende',
        'th_any' => 'Max højde/bredde',
        'th_ht' => 'Højde',
        'th_wd' => 'Bredde',
        'label' => 'tekst', //cpg1.3.0
        'item' => 'valg', //cpg1.3.0
        'debug_everyone' => 'Alle', //cpg1.3.0
        'debug_admin' => 'Kun administrator', //cpg1.3.0
);

if (defined('CONFIG_PHP')) $lang_config_data = array(
        'Generelle indstillinger',
        array('Galleri navn', 'gallery_name', 0),
        array('Galleri beskrivelse', 'gallery_description', 0),
        array('Galleri administrator e-mail', 'gallery_admin_email', 0),
        array('Mål adressen for \'Se flere billeder\' link i e-postkort', 'ecards_more_pic_target', 0),
        array('Galleriet er offline', 'offline', 1), //cpg1.3.0
        array('Log e-postkort', 'log_ecards', 1), //cpg1.3.0
        array('Tillad ZIP-hentning af foretrukne', 'enable_zipdownload', 1), //cpg1.3.0

        'Sprog, Tema og Tegnsæt indstillinger',
        array('Sprog', 'lang', 5),
        array('Tema', 'theme', 6),
        array('Vis liste over sprog', 'language_list', 8), //cpg1.3.0
        array('Vis sprog flag', 'language_flags', 8), //cpg1.3.0
        array('Vis &quot;nulstil&quot; i valg af sprog', 'language_reset', 1), //cpg1.3.0
        array('Vis liste over temaer', 'theme_list', 8), //cpg1.3.0
        array('Vis &quot;nulstil&quot; i valg af tema', 'theme_reset', 1), //cpg1.3.0
        array('Vis OSS (FAQ)', 'display_faq', 1), //cpg1.3.0
        array('Vis hjælp til bbcode', 'show_bbcode_help', 1), //cpg1.3.0
        array('Tegn sæt', 'charset', 4), //cpg1.3.0

        'Albumsliste visning',
        array('Bredde på hoved tabellen (pixels eller %)', 'main_table_width', 0),
        array('Antal af trin i kategorier for fremvisning', 'subcat_level', 0),
        array('Antal af album til fremvisning', 'albums_per_page', 0),
        array('Antal af kolonner for albumliste', 'album_list_cols', 0),
        array('Størrelse af minibilleder i pixels', 'alb_list_thumb_size', 0),
        array('Indholdet af hovedsiden', 'main_page_layout', 0),
        array('Vis minibilleder fra albums i en kategori i listen over kategorier','first_level',1),

        'Minibillede visning',
        array('Antal kolonner på minibillede siden', 'thumbcols', 0),
        array('Antal rækker på minibillede siden', 'thumbrows', 0),
        array('Max antal minibilleder pr side', 'max_tabs', 0), //cpg1.3.0
        array('Vis billedeoverskriften (i tilføjelse til titel) under minibillede', 'caption_in_thumbview', 1), //cpg1.3.0
        array('Vis antal visninger under minibillede', 'views_in_thumbview', 1), //cpg1.3.0
        array('Vis antal af kommentarer under minibilledet', 'display_comment_count', 1), //cpg1.3.0
        array('Vis navn på person der har uploadet filen under minibillede', 'display_uploader', 1), //cpg1.3.0
        array('Standard sortering af filer', 'default_sort_order', 3), //cpg1.3.0
        array('Min antal stemmer på fil før visning i \'top karakter\' listen', 'min_votes_for_rating', 0), //cpg1.3.0

        'Billedevisning &amp; Kommentar indstillinger',
        array('Bredde for tabellen til visning af filer (pixels eller %)', 'picture_table_width', 0), //cpg1.3.0
        array('Fil information er synlig som standard', 'display_pic_info', 1), //cpg1.3.0
        array('Filtrer bande ord i kommentarer', 'filter_bad_words', 1),
        array('Tillad smilies i kommentarer', 'enable_smilies', 1),
        array('Tillad flere kommentarer om samme fil fra samme bruger (deaktiver flood beskyttelse)', 'disable_comment_flood_protect', 1), //cpg1.3.0
        array('Max længde for filbeskrivelse', 'max_img_desc_length', 0),
        array('Max længde på et ord', 'max_com_wlength', 0),
        array('Max antal linjer i en kommentar', 'max_com_lines', 0),
        array('Maximum længde på en kommentar', 'max_com_size', 0),
        array('Vis film rulle', 'display_film_strip', 1),
        array('Antal emner i film rulle', 'max_film_strip_items', 0),
        array('Informer administrater om nye kommentarer via mail', 'email_comment_notification', 1), //cpg1.3.0
        array('Slideshow interval i millisekunder (1 sekund = 1000 millisekunder)', 'slideshow_interval', 0), //cpg1.3.0

        'Fil og minibillede indstillinger', //cpg1.3.0
        array('Kvalitet for JPEG billeder', 'jpeg_qual', 0),
        array('Maks. dimension på minibilleder <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0), //cpg1.3.0
        array('Brug dimension ( bredde, højde eller maksimum af de to til minibilleder )<a href="#notice1" class="clickable_option">*</a>', 'thumb_use', 7),
        array('Opret mellemstore billeder','make_intermediate',1),
        array('Max bredde eller højde for et mellemstort billede/video <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0),
        array('Max størrelse for uploadede filer (KB)', 'max_upl_size', 0),
        array('Max bredde eller højde for uploadede billeder/video (pixels)', 'max_upl_width_height', 0), //cpg1.3.0

        'Avancerede billede og minibillede indstillinger', //cpg1.3.0
        array('Vis ikon for private album for anononyme brugere','show_private',1), //cpg1.3.0
        array('Forbudte karakterer i filnavne', 'forbiden_fname_char',0), //cpg1.3.0
        //array('Accepterede filtyper for uploadede billeder', 'allowed_file_extensions',0), //cpg1.3.0
        array('Tilladte billed typer', 'allowed_img_types',0), //cpg1.3.0
        array('Tilladte film typer', 'allowed_mov_types',0), //cpg1.3.0
        array('Tilladte lyd typer', 'allowed_snd_types',0), //cpg1.3.0
        array('Tilladte dokument typer', 'allowed_doc_types',0), //cpg1.3.0
        array('Program til skalering af billeder','thumb_method',2),
        array('Sti til ImageMagick \'konveter\' værktøj (eksempel /usr/bin/X11/)', 'impath', 0),
        //array('Tillad billedetyper (kun aktiv ved brug af ImageMagick)', 'allowed_img_types',0),
        array('Kommandolinje indstillinger ved brug af ImageMagick', 'im_options', 0),
        array('Læs EXIF data i JPEG filer', 'read_exif_data', 1),
        array('Læs IPTC data i JPEG filer', 'read_iptc_data', 1), //cpg1.3.0
        array('Album mappen <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0),
        array('Mappen for bruger filer <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0),
        array('Foranstillet navn på mellembilleder <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0),
        array('Foranstillet navn på minibilleder <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0),
        array('Standard tilladelser for mapper', 'default_dir_mode', 0),
        array('Standard tilladelser for filer', 'default_file_mode', 0),

        'Bruger indstillinger',
        array('Tillad registrering af nye brugere', 'allow_user_registration', 1),
        array('Forlang e-mail godkendelse ved registrering', 'reg_requires_valid_email', 1),
        array('Send mail til administrator når nye brugere registrere', 'reg_notify_admin_email', 1), //cpg1.3.0
        array('Tillad to brugere at have samme e-mail adresse', 'allow_duplicate_emails_addr', 1),
        array('Brugere kan have private album (OBS: hvis du skifter fra \'ja\' til \'nej\' vil alle nuværende private albums blive offentlige)', 'allow_private_albums', 1), //cpg1.3.0
        array('Send mail til admin når der skal godkendes uploadede filer', 'upl_notify_admin_email', 1), //cpg1.3.0
        array('Tillad at brugere der er logget ind kan se medlemslisten', 'allow_memberlist', 1), //cpg1.3.0

        'Brugerdefinerede felter til billedbeskrivelse (lad det forblive blanke, hvis ikke de skal bruges)',
        array('Felt 1 navn', 'user_field1_name', 0),
        array('Felt 2 navn', 'user_field2_name', 0),
        array('Felt 3 navn', 'user_field3_name', 0),
        array('Felt 4 navn', 'user_field4_name', 0),

        'Cookies &amp; tegn-kodnings indstillinger',
        array('Navn på cookie brugt af dette system', 'cookie_name', 0),
        array('Stien til cookie brugt at dette system', 'cookie_path', 0),
        array('Tegn-kodning', 'charset', 4),

        'Diverse indstillinger',
        array('Aktiver fejlfindings tilstand', 'debug_mode', 9), //cpg1.3.0
        array('Vis meddelelser i fejlfindingstilstand', 'debug_notice', 1), //cpg1.3.0

        '<br /><div align="left"><a name="notice1"></a>(*) Denne indstilling må ikke ændres hvis der allerede er billeder i databasen!<br />
        <a name="notice2"></a>(**) denne indstilling vil kun have betydning for billeder tilføjet efter ændring. Derfor er det tilrådeligt ikke at ændre denne indstilling når der allerede er billeder i galleriet. Du kan dog ændre de eksisterende billeder ved at bruge &quot;<a href="util.php">administrator værktøjer</a> (ændre billed størrelse)&quot; fra administrator menuen.</div><br />', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Sendte epostkort', //cpg1.3.0
  'ecard_sender' => 'Afsender', //cpg1.3.0
  'ecard_recipient' => 'Modtager', //cpg1.3.0
  'ecard_date' => 'Dato', //cpg1.3.0
  'ecard_display' => 'Vis kort', //cpg1.3.0
  'ecard_name' => 'Navn', //cpg1.3.0
  'ecard_email' => 'E-mail', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'stigende', //cpg1.3.0
  'ecard_descending' => 'faldende', //cpg1.3.0
  'ecard_sorted' => 'Sorteret', //cpg1.3.0
  'ecard_by_date' => 'efter datp', //cpg1.3.0
  'ecard_by_sender_name' => 'efter afsenders navn', //cpg1.3.0
  'ecard_by_sender_email' => 'efter afsenders e-mail', //cpg1.3.0
  'ecard_by_sender_ip' => 'efter afsenders IP adresse', //cpg1.3.0
  'ecard_by_recipient_name' => 'efter modtagers navn', //cpg1.3.0
  'ecard_by_recipient_email' => 'efter modtagers e-mail', //cpg1.3.0
  'ecard_number' => 'viser kort %s til %s af %s', //cpg1.3.0
  'ecard_goto_page' => 'gå til side', //cpg1.3.0
  'ecard_records_per_page' => 'Kort pr. side', //cpg1.3.0
  'check_all' => 'Marker alle', //cpg1.3.0
  'uncheck_all' => 'Fjern alle markeringer', //cpg1.3.0
  'ecards_delete_selected' => 'Slet valgte epostkort', //cpg1.3.0
  'ecards_delete_confirm' => 'Er du sikker på at du vil slette de valgte kort? Sæt flueben i afkrydsningsfeltet!', //cpg1.3.0
  'ecards_delete_sure' => 'Jeg er sikker', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
        'empty_name_or_com' => 'Du skal indtaste dit navn og en kommentar',
        'com_added' => 'Din kommentar blev tilføjet',
        'alb_need_title' => 'Du skal angive en titel for dit album!',
        'no_udp_needed' => 'Der var ikke behov for en opdatering.',
        'alb_updated' => 'Albummet blev opdateret',
        'unknown_album' => 'Det valgte album eksisterer ikke eller du har ikke rettigheder til at uploade til det',
        'no_pic_uploaded' => 'Der blev ikke uploadet nogen fil !<br /><br />Hvis du valgte en fil der skal uploades så kontroller at serveren tillader fil upload...',
        'err_mkdir' => 'Kunne ikke oprette denne mappe: %s !',
        'dest_dir_ro' => 'Destinations mappen %s er ikke skrivbar af dette script !',
        'err_move' => 'Kunne ikke flytte %s til %s !',
        'err_fsize_too_large' => 'Den fil du har uploadet er for stort (max tilladte størrelse er %s x %s) !',
        'err_imgsize_too_large' => 'Den fil du har uploadet er for stor (max tilladte filstørrelse er %s KB) !',
        'err_invalid_img' => 'Filen du har uploadet er ikke et gyldigt billede!',
        'allowed_img_types' => 'Du kan kun uploade %s billeder.',
        'err_insert_pic' => 'Filen \'%s\' kunne ikke indsættes i albummet ',
        'upload_success' => 'Din fil blev uploadet med success<br /><br />Den er synlig når en administrator har godkendt den.',
        'notify_admin_email_subject' => '%s - information om upload', //cpg1.3.0
        'notify_admin_email_body' => 'Et billede som kræver godkendelse er blevet uploadet af %s. Besøg %s', //cpg1.3.0
        'info' => 'Information',
        'com_added' => 'Kommentar tilføjet',
        'alb_updated' => 'Album opdateret',
        'err_comment_empty' => 'Din kommentar er tom !',
        'err_invalid_fext' => 'Kun filer med følgende endelser er gyldige : <br /><br />%s.',
        'no_flood' => 'Desværre, men du er stadig den seneste der har kommenteret denne fil<br /><br />Rediger kommentaren hvis du vil ændre den',
        'redirect_msg' => 'Du bliver viderestillet.<br /><br /><br />Tryk på \'FORTSÆT\' hvis siden ikke opdateres automatisk',
        'upl_success' => 'Din fil blev tilføjet med succes',
        'email_comment_subject' => 'Kommentar tilføjet til dit Coppermine billed galleri', //cpg1.3.0
        'email_comment_body' => 'Nogen har sendt en kommentar til dit galleri. Se den her', //cpg1.3.0

);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
        'caption' => 'Overskrift',
        'fs_pic' => 'Fuld størrelse billede',
        'del_success' => 'Slettet',
        'ns_pic' => 'Mellem størrelse billede',
        'err_del' => 'Kan ikke slettes',
        'thumb_pic' => 'Minibillede',
        'comment' => 'Kommentar',
        'im_in_alb' => 'Billede i album',
        'alb_del_success' => 'Album \'%s\' slettet',
        'alb_mgr' => 'Album Administrator',
        'err_invalid_data' => 'Forkert data modtaget i \'%s\'',
        'create_alb' => 'Opretter album \'%s\'',
        'update_alb' => 'Opdaterer album \'%s\' med titel \'%s\' og index \'%s\'',
        'del_pic' => 'Slet fil',
        'del_alb' => 'Slet album',
        'del_user' => 'Slet bruger',
        'err_unknown_user' => 'Den valgte bruger findes ikke !',
        'comment_deleted' => 'Kommentaren blev slettet',
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
        'confirm_del' => 'Er du sikker på du ønsker at SLETTE denne fil? \\nKommentarer bliver også slettet.',
        'del_pic' => 'SLET DENNE FIL',
        'size' => '%s x %s pixels',
        'views' => '%s gange',
        'slideshow' => 'Slideshow',
        'stop_slideshow' => 'STOP SLIDESHOW',
        'view_fs' => 'Klik for at se fuld størrelse billede',
        'edit_pic' => 'Rediger beskrivelse', //cpg1.3.0
        'crop_pic' => 'Beskær og roter', //cpg1.3.0
);

$lang_picinfo = array(
        'title' =>'Fil information',
        'Filename' => 'Filnavn',
        'Album name' => 'Album navn',
        'Rating' => 'Karakter (%s stemmer)',
        'Keywords' => 'Nøgleord',
        'File Size' => 'Filstørrelse',
        'Dimensions' => 'Dimensioner',
        'Displayed' => 'Vist',
        'Camera' => 'Kamera',
        'Date taken' => 'Optaget dato',
        'Aperture' => 'Blænderåbning',
        'Exposure time' => 'Eksponeringstid ',
        'Focal length' => 'Brændvidde',
        'Comment' => 'Kommentar',
        'addFav'=>'Føj til foretrukne',
        'addFavPhrase'=>'Foretrukne',
        'remFav'=>'Fjern fra foretrukne',
        'iptcTitle'=>'IPTC Titel', //cpg1.3.0
        'iptcCopyright'=>'IPTC Copyright', //cpg1.3.0
        'iptcKeywords'=>'IPTC nøgleord', //cpg1.3.0
        'iptcCategory'=>'IPTC kategori', //cpg1.3.0
        'iptcSubCategories'=>'IPTC under kategori', //cpg1.3.0
);

$lang_display_comments = array(
        'OK' => 'OK',
        'edit_title' => 'Ret denne kommentar',
        'confirm_delete' => 'Er du sikker på at du vil slette denne kommentar?',
        'add_your_comment' => 'Tilføj din kommentar',
        'name'=>'Navn',
        'comment'=>'Kommentar',
        'your_name' => 'Anonym',
);

$lang_fullsize_popup = array(
        'click_to_close' => 'Klik på billedet for at lukke dette vindue',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
        'title' => 'Send et e-postkort',
        'invalid_email' => '<b>Advarsel</b>: ugyldig e-mail adresse!',
        'ecard_title' => 'Et e-postkort fra %s til dig',
        'error_not_image' => 'Kun billeder kan sendes som epostkort.', //cpg1.3.0
        'view_ecard' => 'Hvis kortet ikke vises korrekt, klik her',
        'view_more_pics' => 'Klik på dette link for at se flere billeder!',
        'send_success' => 'Dit e-postkort blev sendt',
        'send_failed' => 'Beklager men serveren kan ikke sende dit e-postkort...',
        'from' => 'Fra',
        'your_name' => 'Dit navn',
        'your_email' => 'Din e-mail adresse',
        'to' => 'Til',
        'rcpt_name' => 'Modtagers navn',
        'rcpt_email' => 'Modtagers e-mail adresse',
        'greetings' => 'Hilsen',
        'message' => 'Besked',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
        'pic_info' => 'Fil&nbsp;info',
        'album' => 'Album',
        'title' => 'Titel',
        'desc' => 'Beskrivelse',
        'keywords' => 'Nøgleord',
        'pic_info_str' => '%sx%s - %sKB - %s visninger - %s stemmer',
        'approve' => 'Godkend fil',
        'postpone_app' => 'Udskyd godkendelsen',
        'del_pic' => 'Slet fil',
        'read_exif' => 'Læs EXIF info igen', //cpg1.3.0
        'reset_view_count' => 'Nulstil tæller',
        'reset_votes' => 'Nulstil afstemning',
        'del_comm' => 'Slet kommentarer',
        'upl_approval' => 'Upload godkendelse',
        'edit_pics' => 'Rediger filer',
        'see_next' => 'Se næste filer',
        'see_prev' => 'Se forrige filer',
        'n_pic' => '%s filer',
        'n_of_pic_to_disp' => 'Antal filer til fremvisning',
        'apply' => 'Anvend rettelser',
        'crop_title' => 'Coppermine billed editor', //cpg1.3.0
        'preview' => 'Vis', //cpg1.3.0
        'save' => 'Gem billede', //cpg1.3.0
        'save_thumb' =>'Gem som minibillede', //cpg1.3.0
        'sel_on_img' =>'Markeringen skal være indenfor billedet!', //js-alert //cpg1.3.0
);


if (defined('FAQ_PHP')) $lang_faq_data = array(
  'Generel OSS (FAQ)', //cpg1.3.0
  array('Hvorfor skal jeg registreres?', 'Registrering kan eller kan ikke være krævet af administratoren. Registrering giver ekstra muligheder såsom at uploade filer, have en liste over foretrukne, give billeder kommentarer osv.', 'allow_user_registration', '0'), //cpg1.3.0
  array('Hvordan bliver jeg registreret?', 'Gå til &quot;Registrer&quot; og udfyld de krævede felter (og de frivillige hvis du har lyst).<br />Hvis administratoren har slået Email aktivering til, vil du efter registrering modtage en email på den adresse du har skrevet, som vil give dig information om hvordan du aktiverer din konto. Din konto skal aktiveres før du kan logge ind.', 'allow_user_registration', '1'), //cpg1.3.0
  array('Hvordan logger jeg ind?', 'Gå til &quot;Log ind&quot;, skriv dit brugernavn og og adgangskode og marker &quot;Husk mig&quot; så vil du være logget ind næste gang du besøger siden.<br /><b>VIGTIGT: Cookies skal være aktiveret og cookien fra denne side må ikke slettes for at kunne bruge &quot;Husk mig&quot;.</b>', 'offline', 0), //cpg1.3.0
  array('Hvorfor kan jeg ikke logge ind?', 'Registrerede du dig og trykkede på linket i den mail du fik tilsendt?. Linket vil aktivere din konto. For andre login problemer, kontakt administratoren.', 'offline', 0), //cpg1.3.0
  array('Hvad hvis jeg glemmer mit password?', 'Hvis siden har et &quot;Glemt password&quot; link så brug det. Ellers kontakt administratoren for at få en ny kode.', 'offline', 0), //cpg1.3.0
  array('Hvad hvis jeg har fået ny email adresse?', 'Så log ind og ret din email adresse via &quot;Profil&quot;', 'offline', 0), //cpg1.3.0
  array('Hvordan tilføjer jeg billeder til &quot;Foretrukne&quot;?', 'Vælg et billede og  tryk på &quot;billed info&quot; linket (<img src="images/info.gif" width="16" height="16" border="0" alt="Picture information" />); scroll ned til billed informationerne og tryk på &quot;Føj til foretrukne&quot;.<br />Administratoren kan have sat &quot;billede information&quot; på som standard.<br />VIGTIGT: Cookies skal være aktiveret og cookien fra denne side må ikke slettes.', 'offline', 0), //cpg1.3.0
  array('Hvordan giver jeg et billede karakter?', 'Klik på et minibillede, scroll til bunden, og vælg en karakter.', 'offline', 0), //cpg1.3.0
  array('Hvordan kommenterer jeg et billede?', 'Klik på et minibillede, scroll til bunden, og skriv en kommentar.', 'offline', 0), //cpg1.3.0
  array('Hvordan uploader jeg et billede?', 'Gå til &quot;Upload billede&quot;vælg et album, tryk &quot;Gennemse&quot;, find det billede du vil uploade, og tryk på &quot;åben&quot; (skriv titel og beskrivelse hvis du har lyst). Tryk så på &quot;Send&quot;', 'allow_private_albums', 0), //cpg1.3.0
  array('Hvor kan jeg uploade billeder til?', 'Du kan uploade billeder til en af dine albums i &quot;Mit Galleri&quot;. Adminstratoren kan også give tilladelse til at du kan uploade til et eller flere albums i hoved galleriet.', 'allow_private_albums', 0), //cpg1.3.0
  array('Hvilken størrelse og type af billeder kan jeg uploade?', 'Størrelsen og typen (jpg,gif,..osv.) er valgt af administratoren.', 'offline', 0), //cpg1.3.0
  array('Hvad er &quot;Mit Galleri&quot;?', '&quot;Mit Galleri&quot; er et personligt galleri som brugeren kan uploade til og administrere.', 'allow_private_albums', 0), //cpg1.3.0
  array('Hvordan opretter, omdøber eller sletter jeg et album i &quot;Mit Galleri&quot;?', 'Du burde allerede være i &quot;Administrator-Tilstand&quot;<br />Gå til &quot;Opret/rediger Mine Albums&quot;og tryk på &quot;Nyt&quot;. Ænder &quot;Nyt Album&quot; til det ønskede navn.<br />Du kan også omdøbe et eksisterende album.<br />Tryk på &quot;Godkend rettelser&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Hvordan kan jeg vælge hvem der kan se mine albums?', 'Du burde allerede være i  &quot;Admin. tilstand&quot;<br />Gå til &quot;Rediger Mine Albums.&quot; På &quot;Opdater album&quot; baren, og vælg det album du vil redigere.<br />Her kan du ændre navn, beskrivelse, minibillede, og begrænse visning og kommentar tilladelser.<br />Tryk på &quot;Opdater album&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Hvordan kan jeg se andre brugeres gallerier?', 'Gå til &quot;Album Liste&quot; og vælg &quot;Bruger gallerier&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Hvad er cookies?', 'Cookies er en tekst fil som sendes fra en hjemmesside og gemmes på din computer.<br />Cookies tillader brugeren at forlade en side og komme tilbage uden at logge ind igen og at tilpasse siden på forskellige måder.', 'offline', 0), //cpg1.3.0
  array('Hvor kan jeg hente dette program til min side?', 'Coppermine er et gratis Multimedia Galleri, udgiver under GNU licens. Det er fuld af funktioner og findes til forskellige platforme. Besøg <a href="http://coppermine.sf.net/">Coppermine hjemmesiden</a> for at læse mere eller at hente det.', 'offline', 0), //cpg1.3.0
  'Navigere på siden', //cpg1.3.0
  array('Hvad er &quot;Albumliste&quot;?', 'Dette vil vise dig hele galleriet med et link til hver kategori. Minibilleder kan være et link til en kategori.', 'offline', 0), //cpg1.3.0
  array('Hvad er &quot;Mit Galleri&quot;?', 'Denne funktion tillader at hver bruger laver sit eget galleri, som brugeren kan tilføje, slette og redigere albums i, samt uploade billeder til dem.', 'allow_private_albums', 0), //cpg1.3.0
  array('Hvad er forskellen mellem &quot;Admin mode&quot; og &quot;Bruger mode&quot;?', 'Admin mode tillader brugeren at modificere albums (samt andre hvis de har tilladelse fra administratoren).', 'allow_private_albums', 0), //cpg1.3.0
  array('Hvad er &quot;Upload billede&quot;?', 'Denne funktion giver brugeren mulighed for at uploade et billede (størrelse og type er valgt af administratoren) til et galleri som du eller administratoren har valgt.', 'allow_private_albums', 0), //cpg1.3.0
  array('Hvad er &quot;Nyeste uploads&quot;?', 'Denne funktion viser de nyeste filer som er uploadet til siden', 'offline', 0), //cpg1.3.0
  array('Hvad er &quot;Nyeste kommentar&quot;?', 'Denne funktion viser de nyeste kommentarer med de tilhørende billeder.', 'offline', 0), //cpg1.3.0
  array('Hvad er &quot;Mest viste&quot;?', 'Denne funktion viser de billeder som er vist flest gange af alle brugere (uanser om de er logget ind eller ej).', 'offline', 0), //cpg1.3.0
  array('Hvad er &quot;Top karakter&quot;?', 'Denne funktion viser de billeder som har opnået højest karakter fra brugererne, og viser den gennemsnitlige karakter (f.eks.: hvis fem brugere gav <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: ville billedet have et gennemsnit på <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;Fem brugere gav billedet fra 1-5 (1,2,3,4,5) ville resuletere i et snit på <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />Karakteren går fra <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (bedst) til <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (værst).', 'offline', 0), //cpg1.3.0
  array('Hvad er &quot;Foretrukne&quot;?', 'Denne funktion lader brugeren gemme sine foretrukne billeder i en cookie som gemmes på vedkommendes computer.', 'offline', 0), //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Glemt password', //cpg1.3.0
  'err_already_logged_in' => 'Du er allerede logget ind !', //cpg1.3.0
  'enter_username_email' => 'Indtast brugernavn eller email addresse', //cpg1.3.0
  'submit' => 'Send', //cpg1.3.0
  'failed_sending_email' => 'Dit password kunne ikke sendes !', //cpg1.3.0
  'email_sent' => 'En email med dit brugernavn og password blev sendt til %s', //cpg1.3.0
  'err_unk_user' => 'Den valgte bruger findes ikke!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - glemt password', //cpg1.3.0
  'passwd_reminder_body' => 'Du har bedt om at få tilsendt dine bruger oplysninger:
Brugernavn: %s
Password: %s
Tryk på %s for at logge ind.', //cpg1.3.0
);



// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
        'group_name' => 'Gruppe navn',
        'disk_quota' => 'Disk kvote',
        'can_rate' => 'Kan give karakter',
        'can_send_ecards' => 'Kan sende e-postkort',
        'can_post_com' => 'Kan oprette kommentar',
        'can_upload' => 'Kan uploade filer',
        'can_have_gallery' => 'Kan have privat galleri',
        'apply' => 'Tilføj rettelser',
        'create_new_group' => 'Opret ny gruppe',
        'del_groups' => 'Slet valgte gruppe(er)',
        'confirm_del' => 'Advarsel, når du sletter en gruppe, vil brugere tilhørende denne gruppe blive flyttet til gruppen af \'Registrerede\' brugere !\n\nVil du fortsætte?',
        'title' => 'Administrer bruger grupper',
        'approval_1' => 'Offentlig upload godkendelse(1)',
        'approval_2' => 'Privat Upload godkendelse(2)',
        'upload_form_config' => 'Upload skema opsætning', //cpg1.3.0
        'upload_form_config_values' => array( 'Kun upload af enkelte filer', 'Kun uploads af flere filer', 'Kun URI uploads', 'Kun ZIP uploads', 'Fil-URI', 'Fil-ZIP', 'URI-ZIP', 'Fil-URI-ZIP'), //cpg1.3.0
        'custom_user_upload'=>'Brugeren kan vælge antal upload bokse?', //cpg1.3.0
        'num_file_upload'=>'Max/eksakt antal upload bokse', //cpg1.3.0
        'num_URI_upload'=>'Max/eksat antal URI upload bokse', //cpg1.3.0
        'note1' => '<b>(1)</b> Upload i det offentlige album, kræver admin godkendelse',
        'note2' => '<b>(2)</b> Upload i et album som tilhører brugeren, kræver admin godkendelse',
        'notes' => 'Noter',
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
        'welcome' => 'Velkommen!'
);

$lang_album_admin_menu = array(
        'confirm_delete' => 'Er du sikker på du vil SLETTE dette album? \\nAlle filer og kommentarer vil også blive slettet.',
        'delete' => 'SLET',
        'modify' => 'EGENSKABER',
        'edit_pics' => 'REDIGER FILER',
);

$lang_list_categories = array(
        'home' => 'Hjem',
        'stat1' => '<b>[pictures]</b> filer i <b>[albums]</b> albums og <b>[cat]</b> kategorier med <b>[comments]</b> kommentarer vist <b>[views]</b> gange',
        'stat2' => '<b>[pictures]</b> filer i <b>[albums]</b> albums vist <b>[views]</b> gange',
        'xx_s_gallery' => '%s\'s Galleri',
        'stat3' => '<b>[pictures]</b> filer i <b>[albums]</b> albums med <b>[comments]</b> kommentarer vist <b>[views]</b> gange'
);

$lang_list_users = array(
        'user_list' => 'Bruger liste',
        'no_user_gal' => 'Der er ingen bruger gallerier',
        'n_albums' => '%s album(s)',
        'n_pics' => '%s file(r)'
);

$lang_list_albums = array(
        'n_pictures' => '%s filer',
        'last_added' => ', sidste tilføjet den %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
        'login' => 'Log ind',
        'enter_login_pswd' => 'Skriv dig brugernavn og password',
        'username' => 'Brugernavn',
        'password' => 'Password',
        'remember_me' => 'Husk mig',
        'welcome' => 'Velkommen %s ...',
        'err_login' => '*** Kunne ikke logge ind. Prøv igen ***',
        'err_already_logged_in' => 'Du er allerede logget ind !',
        'forgot_password_link' => 'Jeg har glemt mit password', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
        'logout' => 'Logud',
        'bye' => 'Farvel %s ...',
        'err_not_loged_in' => 'Du er ikke logget ind!',
);

// ------------------------------------------------------------------------- //
// File phpinfo.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP info', //cpg1.3.0
  'explanation' => 'Dette er tekst genereret af PHP-funktionen <a href="http://www.php.net/phpinfo">phpinfo()</a>, vist i Coppermine (trimmet til formålet).', //cpg1.3.0
  'no_link' => 'At vise phpinfo til andre kan medføre en sikkerheds risiko, derfor er denne side kun synlig når du er logget ind som administrator. Du kan ikke sende et link til siden til andre idet de ikke vil kunne få adgang.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
        'upd_alb_n' => 'Opdater album %s',
        'general_settings' => 'Generelle indstillinger',
        'alb_title' => 'Album titel',
        'alb_cat' => 'Album kategori',
        'alb_desc' => 'Album beskrivelse',
        'alb_thumb' => 'Album minibillede',
        'alb_perm' => 'Tilladelser for dette album',
        'can_view' => 'Album kan vises af',
        'can_upload' => 'Gæster kan oploade billeder',
        'can_post_comments' => 'Gæster kan skrive kommentarer',
        'can_rate' => 'Gæster kan stemme på billeder',
        'user_gal' => 'Bruger Galleri',
        'no_cat' => '* Ingen kategori *',
        'alb_empty' => 'Album er tomt',
        'last_uploaded' => 'Sidst indsendt',
        'public_alb' => 'Alle (offentligt album)',
        'me_only' => 'Kun mig',
        'owner_only' => 'Album ejer (%s)',
        'groupp_only' => 'Medlemmer af \'%s\' gruppen',
        'err_no_alb_to_modify' => 'Intet album at korrigerer i databasen.',
        'update' => 'Opdater album',
        'notice1' => '(*) afhængig af %sgruppe%s indstillinger', //cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
        'already_rated' => 'Beklager, men du har allerede stemt på denne fil',
        'rate_ok' => 'Din stemme blev accepteret',
        'forbidden' => 'Du kan ikke stemme på egne filer.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Mens administratorerne af denne site {SITE_NAME} vil prøve at fjerne eller tilrette alt generelt relevant materiale så hurtigt som muligt, er det umuligt at gennemse alle indlæg. Derfor bør du være opmærksom på at alle indlæg der er lavet til denne site Tilkendegiver meninger og holdninger af de forskellige forfattere og ikke altid administratorernes mening (med undtagelse af de indlæg skrevet af disse) derfor kan disse ikke stille til ansvar for andres indlæg.<br><br>
Du accepterer hermed ikke at indsende anstødelige, vulgære, usmagelige, hadefulde, truende, sex-relaterede eller andet materiale der er i strid med lovgivningen. Du accepterer hermed at webmaster, administratorerne af {SITE_NAME} har lov til at fjerne eller rette i indholdet til enhver tid. Som bruger accepterer du at alle dine oplysninger bliver gemt i en database. Men dine informationer bliver ikke givet videre til andre uden din accept. Administratorerne kan ikke kræves til ansvar overfor hackerforsøg der eventuelt kan føre til videregivelse af dine oplysninger.<br><br>
Denne site bruger cookies til at gemme informationer på din private computer. Disse cookies tjener kun det formål at forbedre billedkvaliteten. Denne e-mail bekræfter din registrering, detaljer og password.<br>
Ved at klikke på "jeg accepterer" knappen forneden acceptere du ovenstående betingelser
EOT;

$lang_register_php = array(
        'page_title' => 'Bruger registrering',
        'term_cond' => 'Regler og betingelser',
        'i_agree' => 'Jeg er enig',
        'submit' => 'Send registrering',
        'err_user_exists' => 'Brugernavnet du har skrevet findes allerede, vælge venligst et andet',
        'err_password_mismatch' => 'de to password er ikke ens, prøv igen',
        'err_uname_short' => 'Brugernavn skal være på mindst 2 karakterer',
        'err_password_short' => 'Password skal være på mindst 2 karakterer',
        'err_uname_pass_diff' => 'Brugernavn og password skal være forskellige',
        'err_invalid_email' => 'E-mail adresse er ugyldig',
        'err_duplicate_email' => 'En anden bruger er allerede registret med den e-mail du har opgivet',
        'enter_info' => 'Angiv registrerings information',
        'required_info' => 'Information forlanges',
        'optional_info' => 'Information er valgfri',
        'username' => 'Brugernavn',
        'password' => 'Password',
        'password_again' => 'gentag password',
        'email' => 'E-mail',
        'location' => 'Sted',
        'interests' => 'Interesser',
        'website' => 'Hjemmeside',
        'occupation' => 'Beskæftigelse',
        'error' => 'FEJL',
        'confirm_email_subject' => '%s - Registrerings godkendelse ',
        'information' => 'Information',
        'failed_sending_email' => 'Registrerings godkendelsen kan ikke sendes!',
        'thank_you' => 'Tak for din registrering.<br /><br />En e-mail med informationer om hvordan du aktiver din konto, er blevet sendt til den adresse som du har angivet.',
        'acct_created' => 'Din konto er blevet oprettet og du kan nu logge ind med dit brugernavn og password',
        'acct_active' => 'Din konto er nu aktiv og du kan logge ind med dit brugernavn og password',
        'acct_already_act' => 'Din konto er allerede aktiv!',
        'acct_act_failed' => 'Denne konto kan ikke blive aktiveret!',
        'err_unk_user' => 'Valgte bruger eksister ikke!',
        'x_s_profile' => '%s\'s profil',
        'group' => 'Gruppe',
        'reg_date' => 'Tilsluttet',
        'disk_usage' => 'Disk forbrug',
        'change_pass' => 'Skift password',
        'current_pass' => 'Nuværende password',
        'new_pass' => 'Nyt password',
        'new_pass_again' => 'Nyt password igen',
        'err_curr_pass' => 'Nuværende password er forkert',
        'apply_modif' => 'Tilføj rettelser',
        'change_pass' => 'Skift mit password',
        'update_success' => 'Din profil blev opdateret',
        'pass_chg_success' => 'Dit password blev ændret',
        'pass_chg_error' => 'Dit password blev ikke ændret',
        'notify_admin_email_subject' => '%s - information om registrering', //cpg1.3.0
        'notify_admin_email_body' => 'En ny bruger med brugernavnet "%s" har registreret sig i dit galleri', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
Tak for din registrering hos {SITE_NAME}

Dit brugernavn er : "{USER_NAME}"
Dit password er : "{PASSWORD}"

Som led i at aktiver din konto, skal du klikke på linket her under
eller kopier og indsætte det i din web browser.

{ACT_LINK}

Mange hilsner,

{SITE_NAME} - Administrationen

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
        'title' => 'Kommentar overblik',
        'no_comment' => 'Der er ingen kommentar at se tilbage på',
        'n_comm_del' => '%s kommentar(er) slettet',
        'n_comm_disp' => 'Antal af kommentarer at vise',
        'see_prev' => 'Se foregående',
        'see_next' => 'Se næste',
        'del_comm' => 'Slet valgte kommentarer',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
        0 => 'Søg i billede samlingen',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
        'page_title' => 'Søg i nye filer',
        'select_dir' => 'Vælg mappe',
        'select_dir_msg' => 'Denne funktion tillader dig at massetilføje de filer som du har uploadet via FTP.<br /><br />Vælg den mappe hvor du har uploadet dine filer',
        'no_pic_to_add' => 'Der er ingen filer at tilføje',
        'need_one_album' => 'Du skal have mindst et album oprettet, for at bruge denne funktion',
        'warning' => 'Advarsel',
        'change_perm' => 'systemet kan ikke skrive i denne mappe, du skal ændre server rettigheder på denne mappe til 755 or 777 før du prøver at tilføje filer !',
        'target_album' => '<b>Anbring filer fra &quot;</b>%s<b>&quot; i </b>%s',
        'folder' => 'Mappe',
        'image' => 'Billede',
        'album' => 'Album',
        'result' => 'Resultat',
        'dir_ro' => 'Ej skrivebar. ',
        'dir_cant_read' => 'Ej læsbar. ',
        'insert' => 'Tilføje nye filer til galleriet',
        'list_new_pic' => 'Liste over nye filer',
        'insert_selected' => 'Indsæt valgte filer',
        'no_pic_found' => 'Ingen nye filer blev fundet',
        'be_patient' => 'Hav lidt tålmodighed, systemet arbejder på at tilføje filerne',
        'notes' =>  '<ul>'.
                                '<li><b>OK</b> : Betyder at filen blev tilføjet'.
                                '<li><b>DP</b> : Betyder at filen er en duplikat og at den allerede ligger i databasen'.
                                '<li><b>PB</b> : Betyder at filen ikke kunne tilføjes, kontrollerer venligst din konfiguration samt tilladelser på de respektive mapper'.
                                '<li>Hvis OK, DP, PB \'signalet\' ikke kommer frem, klik da på de manglede filer for at se om der fremkommer nogle fejlmeddelelser som frembringes af PHP'.
                                '<li>Hvis din browser laver time-out, da opdater den browser'.
                                '</ul>',
        'select_album' => 'Vælg album', //cpg1.3.0
        'check_all' => 'Marker alle', //cpg1.3.0
        'uncheck_all' => 'Fjern markering', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- // 
// File banning.php 
// ------------------------------------------------------------------------- // 

if (defined('BANNING_PHP')) $lang_banning_php = array( 
                'title' => 'Bloker brugere', 
                'user_name' => 'Bruger navn', 
                'ip_address' => 'IP Adresse', 
                'expiry' => 'Udløber (efterlad tom for aldrig)', 
                'edit_ban' => 'Gem ændringer', 
                'delete_ban' => 'Slet', 
                'add_new' => 'Tilføj ny blokering', 
                'add_ban' => 'Tilføj', 
                'error_user' => 'Kan ikke finde bruger', //cpg1.3.0
                'error_specify' => 'Du skal skrive enten et brugernavn eller en IP adresse', //cpg1.3.0
                'error_ban_id' => 'Ugyldig blokerings ID!', //cpg1.3.0
                'error_admin_ban' => 'Du kan ikke blokere dig selv!', //cpg1.3.0
                'error_server_ban' => 'Du ville blokere din egen server? Tsk tsk, det kan man ikke...', //cpg1.3.0
                'error_ip_forbidden' => 'Du kan ikke blokere denne IP - der findes ingen rute til den!', //cpg1.3.0
                'lookup_ip' => 'Slå en IP adresse op', //cpg1.3.0
                'submit' => 'send!', //cpg1.3.0
); 

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
        'title' => 'Upload fil',
        'custom_title' => 'Tilpasset upload skema', //cpg1.3.0
        'cust_instr_1' => 'Du kan selv vælge antal upload bokse, men du kan ikke vælge flere end grænserne nedenfor.', //cpg1.3.0
        'cust_instr_2' => 'Antal upload bokse', //cpg1.3.0
        'cust_instr_3' => 'Fil upload bokse: %s', //cpg1.3.0
        'cust_instr_4' => 'URI/URL upload bokse: %s', //cpg1.3.0
        'cust_instr_5' => 'URI/URL upload bokse:', //cpg1.3.0
        'cust_instr_6' => 'File upload bokse:', //cpg1.3.0
        'cust_instr_7' => 'Skriv venligst hvor mange af hver type upload bokse du ønsker og tryk \'Fortsæt\'. ', //cpg1.3.0
        'reg_instr_1' => 'Ugyldig handlig ved dannelse af skema.', //cpg1.3.0
        'reg_instr_2' => 'Du kan nu uploade filer ved hjælp af upload boksene nedenfor. Størrelsen af hver enkelt fil må ikke overskride %s KB each. ZIP filer uploadet i \'Fil Upload\' og \'URI/URL Upload\' sektioner vil forblive komprimeret.', //cpg1.3.0
        'reg_instr_3' => 'Hvis du vil have zip filen eller arkivet pakket ud, skal du bruge fil upload boksen under \'ZIP Upload med udpakning\' området.', //cpg1.3.0
        'reg_instr_4' => 'Når du bruger URI/URL upload sektionen, så indtast venligst adressen til filen således: http://www.minhjemmeside.dk/images/eksempel.jpg', //cpg1.3.0
        'reg_instr_5' => 'Når du har udfyldt skemaet, så tryk venligst på \'Fortsæt\'.', //cpg1.3.0
        'reg_instr_6' => 'ZIP Upload med uppakning:', //cpg1.3.0
        'reg_instr_7' => 'Fil Upload:', //cpg1.3.0
        'reg_instr_8' => 'URI/URL Upload:', //cpg1.3.0
        'error_report' => 'Fejl rapport', //cpg1.3.0
        'error_instr' => 'Følgende uploads fejlede:', //cpg1.3.0
        'file_name_url' => 'File navn/URL', //cpg1.3.0
        'error_message' => 'Fejl meddelelse', //cpg1.3.0
        'no_post' => 'Fil ikke uploadet af POST.', //cpg1.3.0
        'forb_ext' => 'Forbudt fil type.', //cpg1.3.0
        'exc_php_ini' => 'Overskred filstørrelse tilladt i php.ini.', //cpg1.3.0
        'exc_file_size' => 'Overskred filstørrelse tilladt af Coppermine.', //cpg1.3.0
        'partial_upload' => 'Kun delvis upload.', //cpg1.3.0
        'no_upload' => 'Der blev ikke uploadet noget.', //cpg1.3.0
        'unknown_code' => 'Ukendt PHP upload fejl kode.', //cpg1.3.0
        'no_temp_name' => 'Ingen upload - ingen midlertidigt navn.', //cpg1.3.0
        'no_file_size' => 'Indeholder ingen data/fejl i filen', //cpg1.3.0
        'impossible' => 'Kunne ikke flytte.', //cpg1.3.0
        'not_image' => 'Ikke et billed/fejl i filen', //cpg1.3.0
        'not_GD' => 'Ikke en GD udvidelse.', //cpg1.3.0
        'pixel_allowance' => 'Tilladte pixels overskredet.', //cpg1.3.0
        'incorrect_prefix' => 'Ugyldig URI/URL præfix', //cpg1.3.0
        'could_not_open_URI' => 'Kunne ikke åbne URI.', //cpg1.3.0
        'unsafe_URI' => 'Sikkerhed ikke verificerbar.', //cpg1.3.0
        'meta_data_failure' => 'Meta data fejl', //cpg1.3.0
        'http_401' => '401 Ikke autoriseret', //cpg1.3.0
        'http_402' => '402 Betaling påkrevet', //cpg1.3.0
        'http_403' => '403 Forbudt', //cpg1.3.0
        'http_404' => '404 Ikke fundet', //cpg1.3.0
        'http_500' => '500 Intern Server Fejl', //cpg1.3.0
        'http_503' => '503 Service Utilgængelig', //cpg1.3.0
        'MIME_extraction_failure' => 'MIME kunne ikke fastslåes.', //cpg1.3.0
        'MIME_type_unknown' => 'Ukendt MIME type', //cpg1.3.0
        'cant_create_write' => 'Kan ikke åbne skrive fil.', //cpg1.3.0
        'not_writable' => 'Kan ikke skrive til skrive fil.', //cpg1.3.0
        'cant_read_URI' => 'Kan ikke læse URI/URL', //cpg1.3.0
        'cant_open_write_file' => 'Kan ikke åbne URI skrive fil.', //cpg1.3.0
        'cant_write_write_file' => 'Kan ikke skrive til URI skrive fil.', //cpg1.3.0
        'cant_unzip' => 'Kan ikke udpakke.', //cpg1.3.0
        'unknown' => 'Ukendt fejl', //cpg1.3.0
        'succ' => 'Succesfulde uploads', //cpg1.3.0
        'success' => '%s filer blev uploadet med succes.', //cpg1.3.0
        'add' => 'Tryk venligst på \'Fortsæt\' for at tilføje billederne til albums.', //cpg1.3.0
        'failure' => 'Upload fejl', //cpg1.3.0
        'f_info' => 'Fil Information', //cpg1.3.0
        'no_place' => 'Den forrige fil kunne ikke placeres.', //cpg1.3.0
        'yes_place' => 'Den forrige fil blev placeret med succes.', //cpg1.3.0
        'max_fsize' => 'Max tilladte filstørrelse er sat til %s KB',
        'album' => 'Album',
        'picture' => 'Billede',
        'pic_title' => 'Billede titel',
        'description' => ' Billede beskrivelse',
        'keywords' => 'Nøgleord (Adskil med mellemrum)',
        'err_no_alb_uploadables' => 'Beklager der er intet album, som du har tilladelse til at uploade billeder til',
        'place_instr_1' => 'Vælg venligst album til filerne nu. Du kan også indtaste relevante oplysninger om hver fil nu.', //cpg1.3.0
        'place_instr_2' => 'Flere filer skal placeres. Tryk venligst på \'Fortsæt\'.', //cpg1.3.0
        'process_complete' => 'Alle filer er blevet placeret med succes.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
        'title' => 'Administrer bruger',
        'name_a' => 'Navn stigende',
        'name_d' => 'Navn faldende',
        'group_a' => 'Gruppe stigende',
        'group_d' => 'Gruppe faldende',
        'reg_a' => 'Reg dato stigende',
        'reg_d' => 'Reg dato faldende',
        'pic_a' => 'Billede tæller stigende',
        'pic_d' => 'Billede tæller faldende',
        'disku_a' => 'Disk forbrug stigende',
        'disku_d' => 'Disk forbrug faldende',
        'lv_a' => 'Sidste besøg stigende', //cpg1.3.0
        'lv_d' => 'Sidste besøg faldende', //cpg1.3.0
        'sort_by' => 'Sorter brugere efter',
        'err_no_users' => 'Bruger tabel er tom!',
        'err_edit_self' => 'Du kan ikke rette i egen profil, brug \'Min profil\' link til dette formål',
        'edit' => 'RET',
        'delete' => 'SLET',
        'name' => 'Brugernavn',
        'group' => 'Gruppe',
        'inactive' => 'Inaktiv',
        'operations' => 'Handlinger',
        'pictures' => 'Filer',
        'disk_space' => 'Plads brugt / Kvote',
        'registered_on' => 'Registreret den',
        'last_visit' => 'Sidste besøg', //cpg1.3.0
        'u_user_on_p_pages' => '%d bruger på %d side(r)',
        'confirm_del' => 'Er du sikker på du vil SLETTE denne bruger? \\nAlle filer og albums vil også blive slettet.',
        'mail' => 'POST',
        'err_unknown_user' => 'Valgt bruger eksister ikke!',
        'modify_user' => 'Rediger / opret bruger',
        'notes' => 'Noter',
        'note_list' => '<li>Hvis du ikke vil rette det aktuelle password, så lad feltet "password" stå tomt',
        'password' => 'Password',
        'user_active' => 'Bruger er aktiv',
        'user_group' => 'Brugers gruppe',
        'user_email' => 'Brugers e-mail',
        'user_web_site' => 'Brugers webside',
        'create_new_user' => 'Opret ny bruger',
        'user_location' => 'Brugers placering',
        'user_interests' => 'Brugers interesser',
        'user_occupation' => 'Brugers beskæftigelse',
        'latest_upload' => 'Nyeste uploads', //cpg1.3.0
        'never' => 'aldrig', //cpg1.3.0
);

// ------------------------------------------------------------------------- // 
// File util.php 
// ------------------------------------------------------------------------- // 

if (defined('UTIL_PHP')) $lang_util_php = array( 
        'title' => 'Administrator værktøjer (Ændre billedstørrelse)', 
        'what_it_does' => 'Gør dette', 
        'what_update_titles' => 'Opdater titler fra filnavn', 
        'what_delete_title' => 'Slet titler', 
        'what_rebuild' => 'Genskab minibilleder og mellemstore billeder', 
        'what_delete_originals' => 'Sletter billeder med original størrelse og erstatter dem med de mellemstore billeder', 
        'file' => 'Fil', 
        'title_set_to' => 'titel sat til', 
        'submit_form' => 'Udfør', 
        'updated_succesfully' => 'opdateret med succes', 
        'error_create' => 'FEJL ved oprettelse af', 
        'continue' => 'Fortsæt', 
        'main_success' => 'Filen %s bliver nu brugt som original fil', 
        'error_rename' => 'Fejl da filen skulle omdøbes fra %s til %s', 
        'error_not_found' => 'Filen %s blev ikke fundet', 
        'back' => 'tilbage til hovedmenu', 
        'thumbs_wait' => 'Opdaterer minibilleder og/eller mellemstore billeder, vent venligst...', 
        'thumbs_continue_wait' => 'Fortsætter med opdatering af minibilleder og/eller mellemstore billeder...', 
        'titles_wait' => 'Opdaterer titler, vent venligst...', 
        'delete_wait' => 'Slettet titler, vent venligst...', 
        'replace_wait' => 'Sletter originale billeder og erstatter dem med de mellemstore, vent venligst...', 
        'instruction' => 'Hurtig manual', 
        'instruction_action' => 'Vælg funktion', 
        'instruction_parameter' => 'Indstil parametre', 
        'instruction_album' => 'Vælg album', 
        'instruction_press' => 'Tryk %s', 
        'update' => 'Opdater minibilleder og/eller mellemstore billeder', 
        'update_what' => 'Hvad skal opdateres', 
        'update_thumb' => 'Kun minibilleder', 
        'update_pic' => 'Kun mellemstore billeder', 
        'update_both' => 'Både mini- og mellemstore billeder', 
        'update_number' => 'Antal behandlede billeder pr. klik', 
        'update_option' => '(Prøv at sætte den værdi lavere hvis du oplever timeout fejl)', 
        'filename_title' => 'Filnavn -> Billed titel', 
        'filename_how' => 'Hvordan skal filnavnet modificeres', 
        'filename_remove' => 'Fjern .jpg endelsen og erstat _ (underscore) med mellemrum', 
        'filename_euro' => 'Omdøb 2003_11_23_13_20_20.jpg til 23/11/2003 13:20', 
        'filename_us' => 'Omdøb 2003_11_23_13_20_20.jpg til 11/23/2003 13:20', 
        'filename_time' => 'Omdøb 2003_11_23_13_20_20.jpg til 13:20', 
        'delete' => 'Slet titler eller original størrelse filer', 
        'delete_title' => 'Slet fil titler', 
        'delete_original' => 'Slet original størrelse filer', 
        'delete_replace' => 'Sletter de originale billeder og erstatter dem med de mellemstore', 
        'select_album' => 'Vælg album', 
        'delete_orphans' => 'Slet kommentarer som ikke har et album (virker på alle albums)', //cpg1.3.0
        'orphan_comment' => 'kommentarer uden album fundet', //cpg1.3.0
        'delete' => 'Slet', //cpg1.3.0
        'delete_all' => 'Slet alle', //cpg1.3.0
        'comment' => 'Kommentar: ', //cpg1.3.0
        'nonexist' => 'til ikke eksisterende fil # ', //cpg1.3.0
        'phpinfo' => 'Vis phpinfo', //cpg1.3.0
        'update_db' => 'Opdater database', //cpg1.3.0
        'update_db_explanation' => 'Hvis du har erstatter coppermine filer, tilføjet en modificering eller opdateret fra en tidliger udgave af coppermine, så kør venligst Opdater database en gang. Det vil oprette de nødvendige skemaer og/eller opsætnings værdier i din Coppermine database.', //cpg1.3.0
); 

?>

