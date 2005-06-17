<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.3.2                                            //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002,2003 Gregory DEMAR                                     //
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
// CVS version: $Id: swedish-utf-8.php,v 1.7 2004/07/24 15:04:07 gaugau Exp $
// ------------------------------------------------------------------------- //

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Swedish',
  'lang_name_native' => 'Svenska',
  'lang_country_code' => 'se',
  'trans_name'=> 'Musicalg and JMG',
  'trans_email' => 'musikalgalning@yahoo.se',
  'trans_website' => 'fotoalbum.jimmysvensson.com',
  'trans_date' => '2004-06-23',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Sön', 'Mån', 'Tis', 'Ons', 'Tors', 'Fre', 'Lör');
$lang_month = array('Jan', 'Feb', 'Mar', 'Apr', 'Maj', 'Jun', 'Jul', 'Aug', 'Sept', 'Okt', 'Nov', 'Dec');

// Some common strings
$lang_yes = 'Ja';
$lang_no  = 'Nej';
$lang_back = 'TILLBAKA';
$lang_continue = 'FORTSÄTT';
$lang_info = 'Information';
$lang_error = 'Fel';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%d %B %Y';
$lastcom_date_fmt =  '%d %B %Y %H:%M'; //cpg1.3.0
$lastup_date_fmt = '%d %B %Y';
$register_date_fmt = '%d %B %Y';
$lasthit_date_fmt = '%d %B %Y %H:%M'; //cpg1.3.0
$comment_date_fmt =  '%d %B %Y %H:%M'; //cpg1.3.0

// For the word censor
$lang_bad_words = array('*knulla*', 'fitta', 'arsle', 'kuk', 'mutta', 'fan', 'helvete', 'blatte', 'nigger', 'svarting', 'nasse', 'rˆv', 'ollon', 'dildo', 'fanculo', 'pattar', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
  'random' => 'Slumpmässiga objekt', //cpg1.3.0
  'lastup' => 'Senast inlagda',
  'lastalb'=> 'Senast uppdaterade album',
  'lastcom' => 'Senaste kommentarer',
  'topn' => 'Mest visade',
  'toprated' => 'Topplista',
  'lasthits' => 'Senast visade',
  'search' => 'Sökresultat',
  'favpics'=> 'Mina Favoriter', //cpg1.3.0
);

$lang_errors = array(
  'access_denied' => 'Du har inte behörighet till den här sidan.',
  'perm_denied' => 'Du är inte behörighet att utföra denna operation.',
  'param_missing' => 'Parametrar saknars för att kunna utföra operationen.',
  'non_exist_ap' => 'Det valda objektet finns inte', //cpg1.3.0
  'quota_exceeded' => 'Tilldelat diskutrymme överskridet<br /><br />Du har ett diskutrymme på [quota]K och ditt objekt är på [space]K. Skulle detta objekt läggas till överskrids ditt diskutrymme.', //cpg1.3.0
  'gd_file_type_err' => 'Vid användande av GD image library är endast bilder i JPEG- och PNG-format tillåtna.',
  'invalid_image' => 'Bilden du laddade upp är skadad eller kan inte hanteras av GD image library',
  'resize_failed' => 'Kan inte skapa miniatyr eller ändra storleken på objektet.',
  'no_img_to_display' => 'Inget objekt att visa',
  'non_exist_cat' => 'Den valda kategorin finns inte',
  'orphan_cat' => 'En kategori saknar root, kör category manager för att rätta till problemet', //cpg1.3.0
  'directory_ro' => 'Du saknar rättigheter i biblioteket \'%s\'. Objektet kan inte raderas.', //cpg1.3.0
  'non_exist_comment' => 'Den valda kommentaren finns inte.',
  'pic_in_invalid_album' => 'Objektet finns i ett icke existerande album (%s)!?', //cpg1.3.0
  'banned' => 'Du är för tillfället blockerad från den här sajten.',
  'not_with_udb' => 'Den här funktionen är inaktiverad i Commermine eftersom den är integrerad med forumets mjukvara. Antingen stöds inte det du försöker göra i den här funktionen eller så funktionen hanteras av forumets mjukvara..',
  'offline_title' => 'Ej online', //cpg1.3.0
  'offline_text' => 'Biblioteket är för tillfället inte online - försök igen om en stund', //cpg1.3.0
  'ecards_empty' => 'Det finns för tillfället inte några e-vykort att visa. Kontrollera att du aktiverat e-vykort i Coppermines inställningar!', //cpg1.3.0
  'action_failed' => 'Uppgiften misslyckades.  Coppermine kan inte utföra önskad uppgift.', //cpg1.3.0
  'no_zip' => 'Filerna som behövs för att hantera ZIP-filer kan inte hittas.  Kontakta Coppermineadministratören.', //cpg1.3.0
  'zip_type' => 'Du har inte behörighet att ladda upp ZIP-filer.', //cpg1.3.0
);

$lang_bbcode_help = 'Följande tags kan användas: <li>[b]<b>Fetstil</b>[/b]</li> <li>[i]<i>Kursiverad</i>[/i]</li> <li>[url=http://dinsajt.com/]Url Text[/url]</li> <li>[email]användare@domän.com[/email]</li>'; //cpg1.3.0

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'alb_list_title' => 'Gå till albumlistan',
  'alb_list_lnk' => 'Albumlista',
  'my_gal_title' => 'Gå till mitt privata galleri',
  'my_gal_lnk' => 'Mitt galleri',
  'my_prof_lnk' => 'Min profil',
  'adm_mode_title' => 'Växla till adminläge',
  'adm_mode_lnk' => 'Adminläge',
  'usr_mode_title' => 'Växla till användarläge',
  'usr_mode_lnk' => 'Användarläge',
  'upload_pic_title' => 'Ladda upp objekt till album', //cpg1.3.0
  'upload_pic_lnk' => 'Ladda upp objekt', //cpg1.3.0
  'register_title' => 'Skapa nytt konto',
  'register_lnk' => 'Registrera',
  'login_lnk' => 'Logga in',
  'logout_lnk' => 'Logga ut',
  'lastup_lnk' => 'Senast inlagda',
  'lastcom_lnk' => 'Senaste kommentarer',
  'topn_lnk' => 'Mest visade',
  'toprated_lnk' => 'Topplista',
  'search_lnk' => 'Sök',
  'fav_lnk' => 'Mina favoriter',
  'memberlist_title' => 'Visa medlemmar', //cpg1.3.0
  'memberlist_lnk' => 'Medlemmar', //cpg1.3.0
  'faq_title' => 'FAQ kring bildgalleriet &quot;Coppermine&quot;', //cpg1.3.0
  'faq_lnk' => 'FAQ', //cpg1.3.0
);

$lang_gallery_admin_menu = array(
  'upl_app_lnk' => 'Klara för publicering',
  'config_lnk' => 'Inställningar',
  'albums_lnk' => 'Album',
  'categories_lnk' => 'Kategorier',
  'users_lnk' => 'Användare',
  'groups_lnk' => 'Grupper',
  'comments_lnk' => 'Läs kommentarer', //cpg1.3.0
  'searchnew_lnk' => 'Lägg till flera objekt på en gång', //cpg1.3.0
  'util_lnk' => 'Adminverktyg', //cpg1.3.0
  'ban_lnk' => 'Blockera användare',
  'db_ecard_lnk' => 'Visa e-vykort', //cpg1.3.0
);

$lang_user_admin_menu = array(
  'albmgr_lnk' => 'Skapa / sortera mina album',
  'modifyalb_lnk' => 'Ändra i mina album',
  'my_prof_lnk' => 'Min profil',
);

$lang_cat_list = array(
  'category' => 'Kategori',
  'albums' => 'Album',
  'pictures' => 'Objekt', //cpg1.3.0
);

$lang_album_list = array(
  'album_on_page' => '%d album på %d sida(or)',
);

$lang_thumb_view = array(
  'date' => 'DATUM',
  //Sort by filename and title
  'name' => 'FILNAMN',
  'title' => 'TITEL',
  'sort_da' => 'Sortera per datum, stigande',
  'sort_dd' => 'Sortera per datum, fallande',
  'sort_na' => 'Sortera per namn, stigande',
  'sort_nd' => 'Sortera per namn, fallande',
  'sort_ta' => 'Sortera per tite, stigande',
  'sort_td' => 'Sortera per titel, fallande',
  'download_zip' => 'Ladda ner som ZIP-fil', //cpg1.3.0
  'pic_on_page' => '%d objekt på %d sida(or)',
  'user_on_page' => '%d användare på %d sida(or)', //cpg1.3.0
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Återvänd till miniatyrsidan',
  'pic_info_title' => 'Visa/dölj objektinformation', //cpg1.3.0
  'slideshow_title' => 'Bildspel',
  'ecard_title' => 'Skicka denna bild som ett e-vykort', //cpg1.3.0
  'ecard_disabled' => 'e-vykort är inaktiverat',
  'ecard_disabled_msg' => 'Du har inte behörighet att skicka e-vykort', //js-alert //cpg1.3.0
  'prev_title' => 'Se föregående objekt', //cpg1.3.0
  'next_title' => 'Se nästa objekt', //cpg1.3.0
  'pic_pos' => 'OBJEKT %s/%s', //cpg1.3.0
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Betygsätt den här bilden ', //cpg1.3.0
  'no_votes' => '(Ingen röst ännu)',
  'rating' => '(nuvarade betyg : %s / 5 från %s röster)',
  'rubbish' => 'Skräp',
  'poor' => 'Kass',
  'fair' => 'Godkänd',
  'good' => 'Bra',
  'excellent' => 'Mycket bra',
  'great' => 'Bäst',
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
  CRITICAL_ERROR => 'Kritiskt fel',
  'file' => 'Fil: ',
  'line' => 'Rad: ',
);

$lang_display_thumbnails = array(
  'filename' => 'Filnamn : ',
  'filesize' => 'Filstorlek : ',
  'dimensions' => 'Bildstorlek : ',
  'date_added' => 'Inlagd den : ', //cpg1.3.0
);

$lang_get_pic_data = array(
  'n_comments' => '%s kommentarer',
  'n_views' => 'visad %s gånger',
  'n_votes' => '(%s röster)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Debuginformation', //cpg1.3.0
  'select_all' => 'Välj alla', //cpg1.3.0
  'copy_and_paste_instructions' => 'Om du vill ha hjälp på Commermines supportforum, kopiera den här debuginformationen och klista in den i ditt inlägg. Var noga med att ersätta känslig information (t.ex. lösenord) med *** innan du postar inlägget.', //cpg1.3.0
  'phpinfo' => 'visa phpinfo', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => 'Standardspråk', //cpg1.3.0
  'choose_language' => 'Välj språk', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'Standardtema', //cpg1.3.0
  'choose_theme' => 'Välj ett tema', //cpg1.3.0
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
  'Exclamation' => 'Utrop',
  'Question' => 'Fråga',
  'Very Happy' => 'Mycket glad',
  'Smile' => 'Smil',
  'Sad' => 'Ledsen',
  'Surprised' => 'Överraskad',
  'Shocked' => 'Shockad',
  'Confused' => 'Förbryllad',
  'Cool' => 'Cool',
  'Laughing' => 'Skrattande',
  'Mad' => 'Galen',
  'Razz' => 'Rumlande',
  'Embarassed' => 'Förlägen',
  'Crying or Very sad' => 'Gråter eller väldigt ledsen',
  'Evil or Very Mad' => 'Elak eller mycket arg',
  'Twisted Evil' => 'Fifflande elak',
  'Rolling Eyes' => 'Rullande elak',
  'Wink' => 'Blink',
  'Idea' => 'Idé',
  'Arrow' => 'Pil',
  'Neutral' => 'Neutral',
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
  0 => 'Lämnar adminläge...',
  1 => 'Startar adminläge...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Album måste namnges !', //js-alert
  'confirm_modifs' => 'Är du säker på att du vill göra dessa förändringar?', //js-alert
  'no_change' => 'Du gjorde ingen förändring!', //js-alert
  'new_album' => 'Nytt album',
  'confirm_delete1' => 'Är du säker på att du vill radera detta album?', //js-alert
  'confirm_delete2' => '\nAlla objekt dess kommentarer kommer att förkloras', //js-alert
  'select_first' => 'Välj ett album först', //js-alert
  'alb_mrg' => 'Administrera album',
  'my_gallery' => '* Mitt galleri *',
  'no_category' => '* Ingen kategori *',
  'delete' => 'Radera',
  'new' => 'Nytt',
  'apply_modifs' => 'Verkställ förändringar',
  'select_category' => 'Välj kategori',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Parametrar som krävs för \'%s\'operationen stöds inte!',
  'unknown_cat' => 'Vald kategori finns inte i databasen',
  'usergal_cat_ro' => 'Kategorin Användargalleri kan inte raderas!',
  'manage_cat' => 'Inställningar för kategorier',
  'confirm_delete' => 'Är du säker på att du vill RADERA denna kategori?', //js-alert
  'category' => 'Kategori',
  'operations' => 'Operationer',
  'move_into' => 'Flytta till',
  'update_create' => 'Uppdatera/Skapa galleri',
  'parent_cat' => 'Huvudkategori',
  'cat_title' => 'Kategorititel',
  'cat_thumb' => 'Kategoriminiatyr', //cpg1.3.0
  'cat_desc' => 'Kategoribeskrivning',
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
  'title' => 'Inställningar',
  'restore_cfg' => 'Återställ systemets grundinställning',
  'save_cfg' => 'Spara inställningar',
  'notes' => 'Anmärkningar',
  'info' => 'Information',
  'upd_success' => 'Coppermines inställningar uppdaterades',
  'restore_success' => 'Coppermines grundinställning återskapades',
  'name_a' => 'Namn stigande',
  'name_d' => 'Namn fallande',
  'title_a' => 'Titel stigande',
  'title_d' => 'Titel fallande',
  'date_a' => 'Datum stigande',
  'date_d' => 'Datum fallande',
  'th_any' => 'Max Aspect',
  'th_ht' => 'Höjd',
  'th_wd' => 'Bredd',
  'label' => 'rubrik', //cpg1.3.0
  'item' => 'alternativ', //cpg1.3.0
  'debug_everyone' => 'Alla', //cpg1.3.0
  'debug_admin' => 'Enbart admin', //cpg1.3.0
        );

if (defined('CONFIG_PHP')) $lang_config_data = array(
  'Allmänna inställningar',
  array('Gallerinamn', 'gallery_name', 0),
  array('Galleribeskrivning', 'gallery_description', 0),
  array('Galleriadministratörens e-post', 'gallery_admin_email', 0),
  array('Måladress för \'Se fler bilder\' länk i e-vykort', 'ecards_more_pic_target', 0),
  array('Galleriet offline', 'offline', 1), //cpg1.3.0
  array('Logga e-vykort', 'log_ecards', 1), //cpg1.3.0
  array('Tillåt nedladdning av favoriter i ZIP-format', 'enable_zipdownload', 1), //cpg1.3.0

  'Språk-, tema- &amp; teckenuppsättningsinställningar',
  array('Språk', 'lang', 5),
  array('Tema', 'theme', 6),
  array('Visa lista med språk', 'language_list', 8), //cpg1.3.0
  array('Visa språkflaggor', 'language_flags', 8), //cpg1.3.0
  array('Visa &quot;återställ&quot; i språkinställningarna', 'language_reset', 1), //cpg1.3.0
  array('Visa lista med teman', 'theme_list', 8), //cpg1.3.0
  array('Visa &quot;återställ&quot; i temalistan', 'theme_reset', 1), //cpg1.3.0
  array('Visa FAQ', 'display_faq', 1), //cpg1.3.0
  array('Visa bbcode-hjälp', 'show_bbcode_help', 1), //cpg1.3.0
  array('Teckenkodning', 'charset', 4), //cpg1.3.0

  'Utseende på albumlista',
  array('Bredd på huvudtabell (i pixlar eller %)', 'main_table_width', 0),
  array('Antal underkategorier som visas', 'subcat_level', 0),
  array('Antal album som visas', 'albums_per_page', 0),
  array('Antal kolumner i albumlistan', 'album_list_cols', 0),
  array('Storlek på miniatyrer (i pixlar)', 'alb_list_thumb_size', 0),
  array('Innehåll på huvudsidan', 'main_page_layout', 0),
  array('Visa första underkategorins miniatyrer i kategorierna','first_level',1),

  'Utseende på miniatyrer',
  array('Antal kolumner på miniatyrsida', 'thumbcols', 0),
  array('Antal rader på miniatyrsida', 'thumbrows', 0),
  array('Max antal flikar som visas', 'max_tabs', 10), //cpg1.3.0
  array('Visa bildrubrik (tillsammans med titeln) nedanför miniatyrerna', 'caption_in_thumbview', 1), //cpg1.3.0
  array('Visa antalet visningar nedanför miniatyrerna', 'views_in_thumbview', 1), //cpg1.3.0
  array('Visa antalet kommentarer under miniatyrerna', 'display_comment_count', 1),
  array('Visa vem som laddat upp bilden under miniatyrerna', 'display_uploader', 1), //cpg1.3.0
  array('Grundinställning för sortering av bilder', 'default_sort_order', 3), //cpg1.3.0
  array('Minsta antal röster för att en bild ska synas i \'topplistan\'', 'min_votes_for_rating', 0), //cpg1.3.0

  'Utseende på bilder samt inställningar för kommentarer',
  array('Tabellbredd för bildvisning (pixlar eller %)', 'picture_table_width', 0), //cpg1.3.0
  array('Bildinformation är synlig som standard', 'display_pic_info', 1), //cpg1.3.0
  array('Filtrera bort fula ord i kommentarer', 'filter_bad_words', 1),
  array('Tillåt smilies i kommentarer', 'enable_smilies', 1),
  array('Tillåt flera kommentarer från en och samma användare på samma bild (stänger av masspostningsskyddet)', 'disable_comment_flood_protect', 1), //cpg1.3.0
  array('Max längd på bildbeskrivning', 'max_img_desc_length', 0),
  array('Max antal tecken i ett ord', 'max_com_wlength', 0),
  array('Max antal rader i en kommentar', 'max_com_lines', 0),
  array('Max längd på en kommentar', 'max_com_size', 0),
  array('Visa filmrutor', 'display_film_strip', 1),
  array('Antal objekt i filmrutorna', 'max_film_strip_items', 0),
  array('Underrätta admin om kommentarer via e-post', 'email_comment_notification', 1), //cpg1.3.0
  array('Visning av varje bild i bildspel, anges i millisekunder (1 sekund = 1000 millisekunder)', 'slideshow_interval', 0), //cpg1.3.0

  'Bild- och miniatyrinställningar', //cpg1.3.0
  array('Kvalitet på JPEG-bilder', 'jpeg_qual', 0),
  array('Max dimension på en miniatyr <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0), //cpg1.3.0
  array('Använd dimension ( bredd eller höjd eller maxstorlek på miniatyr)<b>**</b>', 'thumb_use', 7),
  array('Skapa mellanliggande bilder','make_intermediate',1),
  array('Max bredd eller höjd på en mellanliggande bild/film <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0), //cpg1.3.0
  array('Max storlek på uppladdade objekt (KB)', 'max_upl_size', 0), //cpg1.3.0
  array('Max bredd eller höjd för uppladdade bilder/filmer (i pixlar)', 'max_upl_width_height', 0), //cpg1.3.0

  'Avancerade inställningar för bilder och miniatyrer', //cpg1.3.0
  array('Visa ikon för privata album för ej inloggade användare','show_private',1), //cpg1.3.0
  array('Förbjudna tecken i filnamn', 'forbiden_fname_char',0), //cpg1.3.0
  //array('Accepted file extensions for uploaded pictures', 'allowed_file_extensions',0), //cpg1.3.0
  array('Accepterade filändelser för bilder', 'allowed_img_types',0), //cpg1.3.0
  array('Accepterade filändelser för filmer', 'allowed_mov_types',0), //cpg1.3.0
  array('Accepterade filändelser för ljud', 'allowed_snd_types',0), //cpg1.3.0
  array('Accepterade filändelser för dokument', 'allowed_doc_types',0), //cpg1.3.0
  array('Metod för att ändra storlek på bilder','thumb_method',2), //cpg1.3.0
  array('Sökväg till ImageMagick \'konverteringsfunktion\' (t.ex. /usr/bin/X11/)', 'impath', 0), //cpg1.3.0
  //array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types',0), //cpg1.3.0
  array('Command line för ImageMagick', 'im_options', 0), //cpg1.3.0
  array('Läs ut EXIF-information ur JPEG-filer', 'read_exif_data', 1), //cpg1.3.0
  array('Läs ut IPTC-information ur JPEG-filer', 'read_iptc_data', 1), //cpg1.3.0
  array('Katalog för album <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0), //cpg1.3.0
  array('Katalog för användarnas objekt<a href="#notice1" class="clickable_option">*</a>', 'userpics', 0), //cpg1.3.0
  array('Prefix på mellanliggande bilder <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0), //cpg1.3.0
  array('Prefix på miniatyrer <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0), //cpg1.3.0
  array('Standardinställning för kataloger', 'default_dir_mode', 0), //cpg1.3.0
  array('Standardinställning för filer', 'default_file_mode', 0), //cpg1.3.0

  'Användarinställningar',
  array('Tillåt att nya användare registrerar sig', 'allow_user_registration', 1),
  array('Användarregistrering kräver e-postverifiering', 'reg_requires_valid_email', 1),
  array('Underrätta admin via e-post när ny användare registrerats', 'reg_notify_admin_email', 1), //cpg1.3.0
  array('Tillåt två användare att ha samma e-postadress', 'allow_duplicate_emails_addr', 1),
  array('Användare kan ha privata album (Om du byter från \'ja\' to \'nej\' blir alla existerande album offentliga)', 'allow_private_albums', 1), //cpg1.3.0
  array('Underrätta admin om uppladdade användarbilder som väntar på godkännande', 'upl_notify_admin_email', 1), //cpg1.3.0
  array('Tillåt att inloggade användare ser användarlistan', 'allow_memberlist', 1), //cpg1.3.0

  'Valfria fält för bildbeskrivningar (lämna blankt om du inte vill använda funktionen)',
  array('Fält 1 namn', 'user_field1_name', 0),
  array('Fält 2 namn', 'user_field2_name', 0),
  array('Fält 3 namn', 'user_field3_name', 0),
  array('Fält 4 namn', 'user_field4_name', 0),

  'Inställningar för Cookies',
  array('Namn på Cookien scriptet använder sig av (om du använder bbs-integrationen, se till att denna skiljer sig från namnet på bbs:ens cookie)', 'cookie_name', 0),
  array('Sökväg till cookie som scripten använder sig av', 'cookie_path', 0),

  'Övriga inställningar',
  array('Aktivera debug mode', 'debug_mode', 9), //cpg1.3.0
  array('Visa meddelanden i debug mode', 'debug_notice', 1), //cpg1.3.0

  '<br /><div align="left"><a name="notice1"></a>(*) Denna inställning får inte ändras om du redan har bilder i din databas.<br />
  <a name="notice2"></a>(**) Om du ändrar inställningen kommer enbart de filer som läggs in i databasen framöver att påverkas, därför rekommenderas det att man underviker att ändra denna parameter när det redan finns bilder i databasen. Du kan dock tillämpa ändringarna på gamla bilder genom  &quot;<a href="util.php">Administrationsverktygs</a> (Ändra storlek på bilder)&quot; funktionen från administrationsmenyn.</div><br />', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Skickade e-vykort', //cpg1.3.0
  'ecard_sender' => 'Avsändare', //cpg1.3.0
  'ecard_recipient' => 'Mottagare', //cpg1.3.0
  'ecard_date' => 'Datum', //cpg1.3.0
  'ecard_display' => 'Visa e-vykort', //cpg1.3.0
  'ecard_name' => 'Namn', //cpg1.3.0
  'ecard_email' => 'E-post', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'stigande', //cpg1.3.0
  'ecard_descending' => 'fallande', //cpg1.3.0
  'ecard_sorted' => 'Sorterad', //cpg1.3.0
  'ecard_by_date' => 'efter datum', //cpg1.3.0
  'ecard_by_sender_name' => 'efter avsändarens namn', //cpg1.3.0
  'ecard_by_sender_email' => 'efter avständarens e-post', //cpg1.3.0
  'ecard_by_sender_ip' => 'efter avsändarens IP-address', //cpg1.3.0
  'ecard_by_recipient_name' => 'efter mottagarens namn', //cpg1.3.0
  'ecard_by_recipient_email' => 'efter mottagaren e-post', //cpg1.3.0
  'ecard_number' => 'visar poster %s till %s av %s', //cpg1.3.0
  'ecard_goto_page' => 'gå till sida', //cpg1.3.0
  'ecard_records_per_page' => 'Poster per sida', //cpg1.3.0
  'check_all' => 'Markera alla', //cpg1.3.0
  'uncheck_all' => 'Avmarkera alla', //cpg1.3.0
  'ecards_delete_selected' => 'Radera markerade e-vykort', //cpg1.3.0
  'ecards_delete_confirm' => 'Är du säker på att du vill radera alla dessa poster? Markera i kryssrutan!', //cpg1.3.0
  'ecards_delete_sure' => 'Jag är säker!', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Du måste skriva ditt namn och en kommentar',
  'com_added' => 'Din kommentar är inlagd',
  'alb_need_title' => 'Du måste ge albumet en titel!',
  'no_udp_needed' => 'Ingen uppdatering behövdes.',
   'alb_updated' => 'Albumet uppdaterades',
  'unknown_album' => 'Valt album existerar inte eller så har du inte behörighet att ladda upp i detta album',
  'no_pic_uploaded' => 'Ingen bild laddades upp<br /><br />Om du är säker på att du valt en bild för uppladdning, kontrollera att servern tillåter uppladdning...', //cpg1.3.0
  'err_mkdir' => 'Misslyckades att skapa katalogen %s !',
  'dest_dir_ro' => 'Målkatalogen %s är inte skrivbart av scriptet!',
  'err_move' => 'Omöjligt att flytta %s till %s !',
  'err_fsize_too_large' => 'Bilden du laddat upp är för stor (max tillåtet är %s x %s) !', //cpg1.3.0
  'err_imgsize_too_large' => 'Filstorleken på bilden du laddat upp är för stor (max tillåtet är %s KB) !',
  'err_invalid_img' => 'Filen du laddat upp är inte i giltigt format!',
  'allowed_img_types' => 'Du kan bara ladda upp %s bilder.',
  'err_insert_pic' => 'Bilden \'%s\' kan inte infogas i albumet', //cpg1.3.0
  'upload_success' => 'Din bild laddades upp utan problem<br /><br />Den kommer att bli synlig när admin godkänt den', //cpg1.3.0
  'notify_admin_email_subject' => '%s - Bild eller film uppladdad', //cpg1.3.0
  'notify_admin_email_body' => '%s har laddat upp en bild eller film som behöver godkännas. Gå in på %s', //cpg1.3.0
  'info' => 'Information',
  'com_added' => 'Kommentar inlagd',
  'alb_updated' => 'Album uppdaterat',
  'err_comment_empty' => 'Din kommentar är tom!',
  'err_invalid_fext' => 'Enbart filer med följande ändelser är tillåtna: <br /><br />%s.',
  'no_flood' => 'Det var du som skrev den senaste kommentaren för den här bilden<br /><br />Ändra den redan inlagda kommentaren om du vill ändra något', //cpg1.3.0
  'redirect_msg' => 'Du skickas vidare.<br /><br /><br />Klicka \'FORTSÄTT\' om inte sidan uppdateras automatiskt',
  'upl_success' => 'Din bild infogades utan problem', //cpg1.3.0
  'email_comment_subject' => 'Ny kommentar på Coppermine Photo Gallery', //cpg1.3.0
  'email_comment_body' => 'Någon har skrivit en ny kommentar i ditt galleri. Läs den på', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Rubrik',
  'fs_pic' => 'full storlek på bild',
  'del_success' => 'radering lyckades',
  'ns_pic' => 'normal storlek på bild',
  'err_del' => 'kan inte raderas',
  'thumb_pic' => 'miniatyr',
  'comment' => 'kommentar',
  'im_in_alb' => 'bild i album',
  'alb_del_success' => 'Album \'%s\' raderades',
  'alb_mgr' => 'Albumhanterare',
  'err_invalid_data' => 'Ogiltig data togs emot i \'%s\'',
  'create_alb' => 'Skapar album \'%s\'',
  'update_alb' => 'Uppdaterar albumet \'%s\' med titeln \'%s\' och index \'%s\'',
  'del_pic' => 'Radera bild', //cpg1.3.0
  'del_alb' => 'Radera album',
  'del_user' => 'Radera användare',
  'err_unknown_user' => 'Den valda användaren finns inte!',
  'comment_deleted' => 'Kommentaren raderades utan problem',
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
  'confirm_del' => 'Är du säker på att du vill RADERA denna bild ? \\nÄven dess kommentarer kommer att raderas.', //js-alert //cpg1.3.0
  'del_pic' => 'RADERA DENNA BILD', //cpg1.3.0
  'size' => '%s x %s pixlar',
  'views' => '%s gånger',
  'slideshow' => 'Bildspel',
  'stop_slideshow' => 'STOPPA BILDSPEL',
  'view_fs' => 'Klicka här för att se bilden i fullstorlek',
  'edit_pic' => 'Ändra beskrivning', //cpg1.3.0
  'crop_pic' => 'Beskär och rotera', //cpg1.3.0
);

$lang_picinfo = array(
  'title' =>'Bildinformation', //cpg1.3.0
  'Filename' => 'Filnamn',
  'Album name' => 'Albumnamn',
  'Rating' => 'Betyg (%s röster)',
  'Keywords' => 'Nyckelord',
  'File Size' => 'Filstorlek',
  'Dimensions' => 'Dimensioner',
  'Displayed' => 'Visad',
  'Camera' => 'Kamera',
  'Date taken' => 'Datum för fototillfälle',
  'Aperture' => 'Slutare',
  'Exposure time' => 'Exponeringstid',
  'Focal length' => 'Fokallängd',
  'Comment' => 'Kommentar',
  'addFav'=>'Lägg till favoriter', //cpg1.3.0
  'addFavPhrase'=>'Favoriter', //cpg1.3.0
  'remFav'=>'Ta bort från favoriter', //cpg1.3.0
  'iptcTitle'=>'IPTC-titel', //cpg1.3.0
  'iptcCopyright'=>'IPTC-copyright', //cpg1.3.0
  'iptcKeywords'=>'IPTC-nyckelord', //cpg1.3.0
  'iptcCategory'=>'IPTC-kategori', //cpg1.3.0
  'iptcSubCategories'=>'IPTC-underkategorier', //cpg1.3.0
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Redigera denna kommentar',
  'confirm_delete' => 'Är du säker på att du vill radera denna kommentar?', //js-alert
  'add_your_comment' => 'Lägg till din kommentar',
  'name'=>'Namn',
  'comment'=>'Kommentar',
  'your_name' => 'Anonym',
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Klicka på bilden för att stänga det här fönstret',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Skicka ett e-vykort',
  'invalid_email' => '<b>Varning</b> : E-postadressen är ej giltig!',
  'ecard_title' => 'Du har fått ett e-vykort från %s',
  'error_not_image' => 'Enbart bilder kan skickas som e-vykort.', //cpg1.3.0
  'view_ecard' => 'Klicka på den här länken om du inte ser något e-vykort',
  'view_more_pics' => 'Klicka på den här länken för att se fler bilder!',
  'send_success' => 'Din e-vykort skickades',
  'send_failed' => 'Servern kan tyvärr inte skicka ditt e-vykort...',
  'from' => 'Från',
  'your_name' => 'Ditt namn',
  'your_email' => 'Din e-postadress',
  'to' => 'Till',
  'rcpt_name' => 'Mottagarens namn',
  'rcpt_email' => 'Mottagarens e-postadress',
  'greetings' => 'Hej',
  'message' => 'Meddelande',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Bild&nbsp;info', //cpg1.3.0
  'album' => 'Album',
  'title' => 'Titel',
  'desc' => 'Beskrivning',
  'keywords' => 'Nyckelord',
  'pic_info_str' => '%s &times; %s - %s KB - visad %s gånger - %s röster',
  'approve' => 'Godkänn bild', //cpg1.3.0
  'postpone_app' => 'Senarelägg godkännande',
  'del_pic' => 'Radera bild', //cpg1.3.0
  'read_exif' => 'Läs EXIF-informationen på nytt', //cpg1.3.0
  'reset_view_count' => 'Nollställ besökarräknaren',
  'reset_votes' => 'Nollställ röster',
  'del_comm' => 'Radera kommentarer',
  'upl_approval' => 'Godkännande för uppladdning',
  'edit_pics' => 'Redigera bild', //cpg1.3.0
  'see_next' => 'Se kommande bilder', //cpg1.3.0
  'see_prev' => 'Se föregående bilder', //cpg1.3.0
  'n_pic' => '%s bilder', //cpg1.3.0
  'n_of_pic_to_disp' => 'Antal bilder att visa', //cpg1.3.0
  'apply' => 'Verkställ förändringar', //cpg1.3.0
  'crop_title' => 'Commermine Bildredigerare', //cpg1.3.0
  'preview' => 'Visa utkast', //cpg1.3.0
  'save' => 'Spara bild', //cpg1.3.0
  'save_thumb' =>'Spara som miniatyr', //cpg1.3.0
  'sel_on_img' =>'Det valda området måste helt vara inom bildens yta', //js-alert //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Vanliga frågor', //cpg1.3.0
  'toc' => 'Kapitelförteckning', //cpg1.3.0
  'question' => 'Fråga: ', //cpg1.3.0
  'answer' => 'Svar: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'Allmän FAQ', //cpg1.3.0
  array('Varför måste jag registera mig?', 'Det är upp till administratören att bestämma om registrering krävs. Som registrerad får du dock tillgång till ytterligare funktioner, t.ex. ladda upp objekt, skapa en favoritlista, betygsätta bilder och skriva kommentarer mm.', '0'), //cpg1.3.0
  array('Hur registrerar jag mig?', 'Gå till &quot;Registrera dig&quot; och fyll i de obligatoriska fälten (och de frivilliga efter önskemål).<br />Om administratören har aktiverat e-postaktivering kommer du att få ett mejl till den adress du angav när du registrerade dig med vidare instruktioner om hur du ska göra för att ditt medlemsskap ska aktiveras. Ditt konto måste därefter aktiveras innan du kan logga in.', 'allow_user_registration', '1'), //cpg1.3.0
  array('Hur loggar jag in?', 'Gå till &quot;Logga in&quot; och skriv ditt användarnamn och lösenord. Om du markerar &quot;Kom ihåg mig&quot; kommer du automatiskt att loggas in varje gång du kommer tillbaka.<br /><b>VIKTIGT: cookies måste vara aktiverade i din webbläsare och du får inte radera Cookien från den här sajten om du ska kunna använda &quot;Kom ihåg mig&quot;.</b>', 'offline', 0), //cpg1.3.0
  array('Varför kan jag inte logga in?', 'Har du registrerat dig och sedan klickat på länken som du fick via e-post? Genom att göra så aktiveras ditt konto. Om inte detta löste problemet kontakta sajtens administratör.', 'offline', 0), //cpg1.3.0
  array('Vad gör jag om jag glömt mitt lösenord?', 'Om den här sajten har har länk med texten &quot;Glömt bort lösenord&quot; så använd den. I annat fall måste du kontakta sajtens administratör för att få ett nytt lösen.', 'offline', 0), //cpg1.3.0
  //array('Hur gör jag om jag byter e-postadress', 'Logga in och ändra din e-postadress i &quot;Profil&quot;', 'offline', 0), //cpg1.3.0
  array('Hur lägger jag till en bild i &quot;Mina favoriter&quot;?', 'Klicka på en bild och klicka därefter på &quot;bildinformation&quot;-länken (<img src="images/info.gif" width="16" height="16" border="0" alt="Picture information" />); Rulla ner till ställ in bildinformation och klicka på &quot;Lägg till favoriter&quot;.<br />Administratören måste ha ställt in att &quot;bildinformation&quot; visas som standard.<br />VIKTIGT: Cookies måste vara aktiverat i din webbläsare och cookien från den här sajten får inte raderas om funktionen ska fungera.', 'offline', 0), //cpg1.3.0
  array('Hur betygsätter jag en bild eller film?', 'Klicka på miniatyren och betygsätt den sedan en bit ner på sidan.', 'offline', 0), //cpg1.3.0
  array('Hur kommenterar jag en bild?', 'Klicka på miniatyren och skriv sedan en kommentar längst ner på sidan (under betygsättningen).', 'offline', 0), //cpg1.3.0
array('Hur laddar jag upp en bild?', 'Gå till &quot;Ladda upp&quot; och välj vilket album du vill ladda upp bilden till. Klicka sedan på &quot;välj fil&quot; och välj vilken fil du vill ladda upp. Klicka därefter på &quot;öppna&quot; (här har du även möjlighet att skriva in en titel och beskrivning av bilden) och sedan på &quot;Skicka&quot; (kommandona är beroende av vilken webbläsare du använder och kan därför variera något)', 'allow_private_albums', 0), //cpg1.3.0
  array('Var hamnar mina uppladdade bilder?', 'Du har möjlighet att ladda upp bilder eller filmer till något av dina album i &quot;Mitt Galleri&quot;. Administratören har också möjlighet att ge dig behörighet att ladda upp material till andra album i Huvudgalleriet.', 'allow_private_albums', 0), //cpg1.3.0
  array('Vilka format och hur stora filer kan jag ladda upp?', 'Tillåten filstorlek och filtyp (jpg, png, etc.) bestäms av administratören.', 'offline', 0), //cpg1.3.0
  array('Vad är &quot;Mitt galleri&quot;?', '&quot;Mitt galleri&quot; är ett personligt galleri som användaren dit användare kan ladda upp sina bilder och sedan själv hantera.', 'allow_private_albums', 0), //cpg1.3.0
  array('Hur skapar jag, döper om, eller raderar jag album i &quot;Mitt Galleri&quot;?', 'Du borde redan vara i &quot;Adminläge&quot;<br />Gå till &quot;Skapa/Organsiera mina album&quot; och klicka på &quot;Nytt&quot;. Ändra &quot;Nytt Album&quot; till önskat namn.<br />Du kan även döpa om albumen som finns i ditt galleri.<br />Klicka på &quot;Verkställ förändringar&quot; för att verkställa ändringarna.', 'allow_private_albums', 0), //cpg1.3.0
  array('Hur kontrollerar jag vilka användare som har tillgång till mina album?', 'Du borde redan vara i  &quot;Adminläge&quot;<br />Gå till&quot;Ändra mina album. Välj det album du vill ändra på&quot;Uppdatera Album&quot;-raden.<br />Här kan du ändra namn, beskrivning, miniatyr och användarnas rättigheter för att kunna kommentera och rösta på bilderna.<br />Klicka &quot;Uppdatera album&quot; när du gjort dina ändringar.', 'allow_private_albums', 0), //cpg1.3.0
  array('Hur kan jg se andra användares gallerier?', 'Gå till &quot;Albumlista&quot; och välj &quot;Användargallerier&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Vad är cookies och hur använder denna sajt dem?', 'Cookies är en liten text fil innehållande information som skickas från webbsajter och som lagras på din dators hårddisk.<br />Normalt sett användes cookies för att kunna lagra information som behövs för att man ska kunna lämna en sajt och sedan kunna komma tillbaka och få upp sin information igen utan att behöva göra alla inställningar på nytt.<br />Coppermine använder cookies får att lagra din inloggningsinformation (så du slipper logga in på nytt varje gång du besöker sajten) om Kom ihåg mig är valt. Coppermine använder även cookies för att komma ihåg vilka bilder som ligger i mina favoriter. Cookies används dock inte för at samla in någon personlig information och används inte heller i syfte att kartlägga dig eller använda uppgifter i kommersiella syften.', 'offline', 0), //cpg1.3.0
  array('Hur kan jag få tag på Coppermine till min egen sajt?', 'Coppermine är ett gratis multimediagalleri som faller under GNU GPL. Det innehåller massor av funktioner och finns för flera olika plattformar. Besök <a href="http://coppermine.sf.net/">Coppermine Home Page</a> för mer information eller för att ladda ner det.', 'offline', 0), //cpg1.3.0

  'Hitta på sajten', //cpg1.3.0
  array('Vad är &quot;Albumlista&quot;?', 'I albumlistan ser du alla album tillhörande den kategori som du är inne i. Om du inte är inne i någon kategori kommer du istället att se hela galleriet med länkar till varje kategori. Varje miniatyrer kan vara en länk till en kategori.', 'offline', 0), //cpg1.3.0
  array('Vad är &quot;Mitt galleri&quot;?', 'Denna funktion tillåter användare att skapa sitt eget galleri dit de kan lägga till, ändra och skapa egna album och även ladda upp bilder i dessa.', 'allow_private_albums', 0), //cpg1.3.0
  array('Vad är skillnaden mellan &quot;Adminläge&quot; and &quot;Användarläge&quot;?', 'När användare går in i &quot;Adminläge&quot kan de modifiera sina gallerier, medan det enbart går att titta på dem i &quot;Användarläge&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Vad ärt;Ladda upp bild&quot;?', 'Denna funktion gör det möjlgit för användare att ladda upp en fil (tillåten storlek och typ bestäms av administratören) till ett galleri som antingen valts av användaren eller administratören.', 'allow_private_albums', 0), //cpg1.3.0
  array('Vad är &quot;Senast inlagda&quot;?', 'Den här funktionen visar de senast uppladdade objekten till sajten.', 'offline', 0), //cpg1.3.0
  array('Vad är &quot;Senast kommenterades&quot;?', 'Den här funktionen visar de senaste objekten som kommenterats tillsammans med dess kommentarer.', 'offline', 0), //cpg1.3.0
  array('Vad är &quot;Mest visade&quot;?', 'Den här funktionen visar vilka objekt som är visade flest gånger (både för inloggade och ej inloggade användare).', 'offline', 0), //cpg1.3.0
  array('Vad är &quot;Topplista&quot;?', 'Den här funktionen visar de objekt som fått högst genomsnittligt betyg av använderna (t.ex. om fem användare vardera ger <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> får objektet ett genomsnitt på <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />. Om fem användare istället ger betyget 1 till 5 (1,2,3,4,5) ger detta objektet ett genomsnitt på <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br /> Betygen går från <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (bäst) till <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (sämst).', 'offline', 0), //cpg1.3.0
  array('Vad är &quot;Mina favoriter&quot;?', 'Den här funktionen låter användaren spara en lista över sina favoritobjekt i en cookie som lagras på användarens hårddisk.', 'offline', 0), //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Jag har glömt bort mitt lösen', //cpg1.3.0
  'err_already_logged_in' => 'Du är redan inloggad!', //cpg1.3.0
  'enter_username_email' => 'Skriv in ditt användarnamn eller e-postadress', //cpg1.3.0
  'submit' => 'Skicka', //cpg1.3.0
  'failed_sending_email' => 'Ditt lösen kan inte skickas!', //cpg1.3.0
  'email_sent' => 'Ett mejl med ditt användarnamn och lösenord har skickats till  %s', //cpg1.3.0
  'err_unk_user' => 'Användaren finns inte!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - Bortglömt lösen', //cpg1.3.0
  'passwd_reminder_body' => 'Du har begärt att få dina inloggningsuppgifter på nytt:
Användarnamn: %s
Lösen: %s
Klicka pp %s för att logga in.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Gruppnamn',
  'disk_quota' => 'Diskutrymme',
  'can_rate' => 'Kan betygsätta objekt', //cpg1.3.0
  'can_send_ecards' => 'Kan skicka e-vykort',
  'can_post_com' => 'Kan skriva kommentarer',
  'can_upload' => 'Kan ladda upp objekt', //cpg1.3.0
  'can_have_gallery' => 'Kan ha ett personligt galleri',
  'apply' => 'Verkställ förändringar',
  'create_new_group' => 'Create new group',
  'del_groups' => 'Radera vald(a) grupp(er)',
  'confirm_del' => 'Varning! När du raderar en grupp kommer användare i den gruppen att flyttas till gruppen \'Registrerad\' !\n\nVill du fortsätta?', //js-alert //cpg1.3.0
  'title' => 'Administrera användargrupper',
  'approval_1' => 'Godkänn publika uppladdningar (1)',
  'approval_2' => 'Godkänn personliga uppladdningar (2)',
  'upload_form_config' => 'Konfiguerera uppladdningsformulär', //cpg1.3.0
  'upload_form_config_values' => array( 'Ladda enbart upp enstaka objekt', 'Ladda enbart upp flera objekt samtidigt', 'Enbart URI-uppladdningar', 'Enbart ZIP-uplladningar', 'Fil-URI', 'Fil-ZIP', 'URI-ZIP', 'Fil-URI-ZIP'), //cpg1.3.0
  'custom_user_upload'=>'Användaren kan välja antalet uppladdningsfält', //cpg1.3.0
  'num_file_upload'=>'Max/exakt antal uppladdningsfält', //cpg1.3.0
  'num_URI_upload'=>'Max/exakt antal URI uppladdningsfält', //cpg1.3.0
  'note1' => '<b>(1)</b> Uppladdningar i ett publikt album kräver admins godkännande',
  'note2' => '<b>(2)</b> Uppladdningar i ett album som tillhör användare kräver admins godkännande',
  'notes' => 'Anmärkningar',
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Välkommen !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Är du säker på att du vill radera detta album? \\nAlla objekt och kommentarer kommer att raderas.', //js-alert //cpg1.3.0
  'delete' => 'RADERA',
  'modify' => 'EGENSKAPER',
  'edit_pics' => 'REDIGERA OBJEKT', //cpg1.3.0
);

$lang_list_categories = array(
  'home' => 'Hem',
  'stat1' => '<b>[pictures]</b> objekt i<b>[albums]</b> album och <b>[cat]</b> kategorier med <b>[comments]</b> kommentarer visade <b>[views]</b> gånger', //cpg1.3.0
  'stat2' => '<b>[pictures]</b> objekt i <b>[albums]</b> album visade <b>[views]</b> gånger', //cpg1.3.0
  'xx_s_gallery' => '%ss galleri',
  'stat3' => '<b>[pictures]</b> objekt i <b>[albums]</b> album med <b>[comments]</b> kommentarer visade <b>[views]</b> gånger', //cpg1.3.0
);

$lang_list_users = array(
  'user_list' => 'Användarlista',
  'no_user_gal' => 'Det fins inga användargallerier',
  'n_albums' => '%s album',
  'n_pics' => '%s objekt', //cpg1.3.0
);

$lang_list_albums = array(
  'n_pictures' => '%s objekt', //cpg1.3.0
  'last_added' => ', senaste inlagd %s',
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Logga in',
  'enter_login_pswd' => 'Skriv ditt användarnamn och lösenord för att logga in',
  'username' => 'Användarnamn',
  'password' => 'Lösenord',
  'remember_me' => 'Kom ihåg mig',
  'welcome' => 'Välkommen %s ...',
  'err_login' => '*** Kunde inte logga in. Försök igen ***',
  'err_already_logged_in' => 'Du är redan inloggad!',
  'forgot_password_link' => 'Jag har glömt mitt lösenord', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Logga ut',
  'bye' => 'Hej då %s ...',
  'err_not_loged_in' => 'Du är inte inloggad!',
);

// ------------------------------------------------------------------------- //
// File phpinfo.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP info', //cpg1.3.0
  'explanation' => 'Det här informationen är genererad av PHP-funktionen <a href="http://www.php.net/phpinfo">phpinfo()</a> och visas inom Coppermine (du kan kontrollera storleken i det högra hörnet).', //cpg1.3.0
  'no_link' => 'Det kan vara en säkerhetsrisk att låta andra se din phpinfo, av den anledningen är den här sidan enbart tillgänglig när du är inloggad som admin. Du kan därför inte skicka denna sida som länk till någon annan, de har inte behörighet att se sidan.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Uppdatera album %s',
  'general_settings' => 'Allmänna inställningar',
  'alb_title' => 'Albumtitel',
  'alb_cat' => 'Albumkategori',
  'alb_desc' => 'Albumbeskrivning',
  'alb_thumb' => 'Albumminiatyr',
  'alb_perm' => 'Rättigheter för detta album',
  'can_view' => 'Album kan ses av',
  'can_upload' => 'Besökare kan ladda upp bilder',
  'can_post_comments' => 'Besökare kan kommentera',
  'can_rate' => 'Besökare kan betygsätta bilder',
  'user_gal' => 'Användaregalleri',
  'no_cat' => '* Ingen kategori *',
  'alb_empty' => 'Album är tomt',
  'last_uploaded' => 'Senast uppladdat',
  'public_alb' => 'Alla (publikt album)',
  'me_only' => 'Endast jag',
  'owner_only' => 'Endast albumägare (%s)',
  'groupp_only' => 'Medlemmar av gruppen \'%s\'',
  'err_no_alb_to_modify' => 'Inget album att redigera i databasen.',
  'update' => 'Uppdatera album', //cpg1.3.0
  'notice1' => '(*) beroende av inställningar för %sgrupper%s', //cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Du har redan betygsatt detta objekt', //cpg1.3.0
  'rate_ok' => 'Ditt betyg är registrerat',
  'forbidden' => 'Du kan inte betygsätta dina egna objekt.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Trots att administratörerna här på (SITE_NAME) försöker att ta bort eller ändra allt störande eller stötande material så fort som möjligt, är det omöjligt att gå igenom alla meddelanden. Därför måste alla inlägg som skrivits på denna sajt betraktas som ett uttryck av författarens personliga tankar och åsikter, och administratörer eller webmaster kan inte stå till ansvar för det (givetvis bortsett från vad de själv skrivit).<br />
<br />
Du går med på att inte posta något störande, stötande, rasistiskt, sexistiskt, vulgärt, hatiskt, hotande eller annat material som kan tänkas bryta mot någon tillämplig lag. Om du bryter mot det här kan det leda till att du blir permanent avstängd från sajten (och din internetleverantör blir kontaktad). Vid varje inlägg sparas författarens IP-adress för att kunna användas vid sådana här situationer (dock enbart synlig för administratörerna). Som användare går du med på att webmaster, administratör och moderatorer har rätt att ta bort, ändra, flytta eller stänga vilka inlägg som helst när som helst. Som en användare går du med på att all information som du skrivit in sparas elektroniskt i databasen. Information på denna sajt kommer INTE att distribueras till någon 3:e part utan ditt samtycke. Webmastern, administratören eller moderatorer kan inte hållas ansvariga vid hackningsförsök som kan leda till att data stjäls. <br />
<br />
Denna sajt använder cookies för att spara information på din dator. Dessa cookies innehåller inte något av den information du skrivit in, utan används endast för att göra ditt användande av forumet bättre och smidigare. Din e-postadress används enbart för att aktivera din registrering, samt för omregistrering vid t.ex. byte av din e-post adress.<br />
<br />
Genom att klicka på knappen "Jag godkänner" nedan godkänner du ovan vilkor.
EOT;

$lang_register_php = array(
  'page_title' => 'Användarregistrering',
  'term_cond' => 'Användarvillkor',
  'i_agree' => 'Jag godkänner',
  'submit' => 'Skicka registrering',
  'err_user_exists' => 'Användarnamnet du skrev in finns redan, välj ett nytt',
  'err_password_mismatch' => 'Lösenorden stämmer inte överens med varandra. Skriv in dem igen.',
  'err_uname_short' => 'Användarnamnet måste vara minst 2 tecken långt',
  'err_password_short' => 'Lösenordet måste vara minst 2 tecken långt',
  'err_uname_pass_diff' => 'Användarnamn och lösenord får inte vara lika',
  'err_invalid_email' => 'E-postadressen är ogiltig',
  'err_duplicate_email' => 'En annan användare är redan registrerad med din e-postadress',
  'enter_info' => 'Fyll i registeringsuppgifter',
  'required_info' => 'Obligatorisk information',
  'optional_info' => 'Frivillig information',
  'username' => 'Användarnamn',
  'password' => 'Lösenord',
  'password_again' => 'Skriv lösenordet igen',
  'email' => 'E-post',
  'location' => 'Finns i',
  'interests' => 'Intressen',
  'website' => 'Hemsida',
  'occupation' => 'Yrke',
  'error' => 'FEL',
  'confirm_email_subject' => '%s - Bekräftande av registrering',
  'information' => 'Information',
  'failed_sending_email' => 'Registeringsinformation kan inte skickas!',
  'thank_you' => 'Tack för din registrering.<br /><br />Ett e-postmeddelande med information om hur di ska aktivera ditt konto skickades till den e-postadress du angav.',
  'acct_created' => 'Ditt konto har skapats och du kan nu logga in med ditt användarnamn och lösenord.',
  'acct_active' => 'Ditt konto är nu aktiverat och du kan logga in med ditt användarnamn och lösenord.',
  'acct_already_act' => 'Ditt konto är redan aktiverat!',
  'acct_act_failed' => 'Detta konto kan inte aktiveras!',
  'err_unk_user' => 'Vald användare finns inte!',
  'x_s_profile' => '%ss profil',
  'group' => 'Grupp',
  'reg_date' => 'Blev medlem',
  'disk_usage' => 'Diskanvändning',
  'change_pass' => 'Byt lösenord',
  'current_pass' => 'Nuvarande lösenord',
  'new_pass' => 'Nytt lösenord',
  'new_pass_again' => 'Nytt lösenord igen',
  'err_curr_pass' => 'Detta lösenord är inte korrekt',
  'apply_modif' => 'Verkställ ändringar',
  'change_pass' => 'Ändra mitt lösenord',
  'update_success' => 'Din profil uppdaterade',
  'pass_chg_success' => 'Ditt lösenord ändrades',
  'pass_chg_error' => 'Ditt lösenord ändrades inte',
  'notify_admin_email_subject' => '%s - Ny användare registrerad', //cpg1.3.0
  'notify_admin_email_body' => 'En användare med användarnamn "%s" har registrerat sig i ditt galleri.', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
Tack för att du registerade dig på {SITE_NAME}

Ditt användarnamn är : "{USER_NAME}"
Ditt lösenord är : "{PASSWORD}"

För att ditt konto ska aktiveras måste du klicka på nedanstående länk
eller kopiera den och klista in den i din webbläsare.

{ACT_LINK}

Vänligen

Administratören av {SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'Granska kommentarer',
  'no_comment' => 'Det finns ingen kommentar att granska',
  'n_comm_del' => '%s kommentar(er) raderad(e)',
  'n_comm_disp' => 'Antal kommentarer att visa',
  'see_prev' => 'Se föregående',
  'see_next' => 'Se nästa',
  'del_comm' => 'Radera valda kommentarer',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
  0 => 'Sök bland objekten',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Sök efter nya objekt', //cpg1.3.0
  'select_dir' => 'Välj katalog',
  'select_dir_msg' => 'Den här funktionen gör det möjligt att lägga till ett parti med objekt som du laddat upp på servern via FTP.<br /><br />Välj katalogen dit du laddade upp dina bilder', //cpg1.3.0
  'no_pic_to_add' => 'Det finns inga objekt att lägga till', //cpg1.3.0
  'need_one_album' => 'Du måste ha minst album för att använda denna funktion',
  'warning' => 'Varning',
  'change_perm' => 'Scriptet kan inte skriva i denna katalog. Du måste ändra dess rättigheter till 755 eller 77 innan du kan lägga till objekten!', //cpg1.3.0
  'target_album' => '<b>Lägg objekten &quot;</b>%s<b>&quot; i </b>%s', //cpg1.3.0
  'folder' => 'Katalog',
  'image' => 'Objekt',
  'album' => 'Album',
  'result' => 'Resultat',
  'dir_ro' => 'Inte skrivbart. ',
  'dir_cant_read' => 'Inte läsbart. ',
  'insert' => 'Lägger till nya objekt i galleriet', //cpg1.3.0
  'list_new_pic' => 'Förteckning över nya objekt', //cpg1.3.0
  'insert_selected' => 'Sätt in valda objekt', //cpg1.3.0
  'no_pic_found' => 'Inga nya objekt hittades', //cpg1.3.0
  'be_patient' => 'Ha tålamod, scriptet behöver lite tid att bearbeta objekten', //cpg1.3.0
  'no_album' => 'inget album valt',  //cpg1.3.0
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : betyder att objektet blev inlagda'.
                          '<li><b>DP</b> : betyder att objektet är en kopia av ett objekt som redan finns i databasen'.
                          '<li><b>PB</b> : betyder att objektet inte kunde läggas till, kontrollera din konfiguration och rättigheterna i katalogen objekten ska placeras i'.
                          '<li><b>NA</b> : means that you haven\'t selected an album the files should go to, hit \'<a href="javascript:history.back(1)">back</a>\' and select an album. If you don\'t have an album <a href="albmgr.php">create one first</a></li>'.
                          '<li>Om OK, DP, PB \'symbolerna\' inte visas, klicka på det felaktiga objektet för att se felmeddelandet som skapats av PHP'.
                          '<li>Om din webbläsare gör timeout, tryck på knappen \'Uppdatera\''.
                          '</ul>', //cpg1.3.0
  'select_album' => 'välj album', //cpg1.3.0
  'check_all' => 'Markera alla', //cpg1.3.0
  'uncheck_all' => 'Avmarkera alla', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Blockera användare',
  'user_name' => 'Användarnamn',
  'ip_address' => 'IP-address',
  'expiry' => 'Förfaller (blankt innebär permanent)',
  'edit_ban' => 'Spara ändringar',
  'delete_ban' => 'Radera',
  'add_new' => 'Lägg till ny blockering',
  'add_ban' => 'Lägg till',
  'error_user' => 'Användaren finns inte', //cpg1.3.0
  'error_specify' => 'Du måste specifiera antingen ett användarnamn eller en IP-adress', //cpg1.3.0
  'error_ban_id' => 'Ogiltig blockerings-ID!', //cpg1.3.0
  'error_admin_ban' => 'Du kan inte blockera dig själv!', //cpg1.3.0
  'error_server_ban' => 'Du höll på att blocka din egen server? Tsk tsk, glöm det...', //cpg1.3.0
  'error_ip_forbidden' => 'Du kan inte banna den här IP-adressen, den går inte att routa!', //cpg1.3.0
  'lookup_ip' => 'Slå upp en IP-adress', //cpg1.3.0
  'submit' => 'Slå upp', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Ladda upp objekt', //cpg1.3.0
  'custom_title' => 'Anpassat uppladdningsforumlär', //cpg1.3.0
  'cust_instr_1' => 'YDu kan välja et antal fält för uppladdning, du kan dock inte överskrida gränsen angiven nedan.', //cpg1.3.0
  'cust_instr_2' => 'Antal uppladdningsfält', //cpg1.3.0
  'cust_instr_3' => 'Filuppladdningsfält: %s', //cpg1.3.0
  'cust_instr_4' => 'URI/URL-uppladdningsfält: %s', //cpg1.3.0
  'cust_instr_5' => 'URI/URL-uppladdningsfält:', //cpg1.3.0
  'cust_instr_6' => 'Filuppladdningsfält:', //cpg1.3.0
  'cust_instr_7' => 'Ange antal uppladdningsfält av varje typ. Klicka sedan på \'Fortsätt\'. ', //cpg1.3.0
  'reg_instr_1' => 'Ogiltig åtgärd när formuläret skapades.', //cpg1.3.0
  'reg_instr_2' => 'Du kan nu ladda upp dina objekt genom fälten nedan. Storleken på filerna du laddar upp får vardera inte överskrida %s KB. ZIP-filer som laddas upp i \'Ladda upp fil\' och \'Ladda upp URI/URL\' kommer att förbli packade.', //cpg1.3.0
  'reg_instr_3' => 'Om du vill packa upp en zippad fil eller arkiv att packas upp måste du använda uppladdningsformuläret som finns i \'ZIP-uppladdning med uppackning\'', //cpg1.3.0
  'reg_instr_4' => 'När du använder URI/URL-uppladdning ange sökvägen i form av: http://www.minsajt.se/bilder/exempel.jpg', //cpg1.3.0
  'reg_instr_5' => 'Klicka på  \'Fortsätt\' när du valt alla filer du vill ladda upp.', //cpg1.3.0
  'reg_instr_6' => 'ZIP-uppladdning med uppackning:', //cpg1.3.0
  'reg_instr_7' => 'Filuppladdning:', //cpg1.3.0
  'reg_instr_8' => 'URI/URL-uppladdning:', //cpg1.3.0
  'error_report' => 'Felrapport', //cpg1.3.0
  'error_instr' => 'Följande uppladdningar råkade ut för problem:', //cpg1.3.0
  'file_name_url' => 'Filnamn/URL', //cpg1.3.0
  'error_message' => 'Felmeddelande', //cpg1.3.0
  'no_post' => 'Filen inte uppladdad genom POST.', //cpg1.3.0
  'forb_ext' => 'Ej tillåten filändelse.', //cpg1.3.0
  'exc_php_ini' => 'Filstorlek större än php.ini tillåter.', //cpg1.3.0
  'exc_file_size' => 'Filstorlek större än Coppermine tillåter.', //cpg1.3.0
  'partial_upload' => 'Enbart delvis uppladdad.', //cpg1.3.0
  'no_upload' => 'Det var inget som laddades upp.', //cpg1.3.0
  'unknown_code' => 'Okänd PHP felkod.', //cpg1.3.0
  'no_temp_name' => 'Ingenting laddades upp - Inget temporärt namn.', //cpg1.3.0
  'no_file_size' => 'Innehåller ingen data/filfel', //cpg1.3.0
  'impossible' => 'Gick inte att flytta filen.', //cpg1.3.0
  'not_image' => 'Ingen bild/filfel', //cpg1.3.0
  'not_GD' => 'Ingen GD-filändelse.', //cpg1.3.0
  'pixel_allowance' => 'Antal tillåtna pixlar överskridet.', //cpg1.3.0
  'incorrect_prefix' => 'Felaktigt URI/URL-prefix', //cpg1.3.0
  'could_not_open_URI' => 'Kunde inte öppna URI.', //cpg1.3.0
  'unsafe_URI' => 'Säkerheten inte kontrollerbar.', //cpg1.3.0
  'meta_data_failure' => 'Metadatafel', //cpg1.3.0
  'http_401' => '401 Ej tillåten', //cpg1.3.0
  'http_402' => '402 Betalning krävs', //cpg1.3.0
  'http_403' => '403 Förbjuden', //cpg1.3.0
  'http_404' => '404 Ej hittad', //cpg1.3.0
  'http_500' => '500 Internt serverfel', //cpg1.3.0
  'http_503' => '503 Service otillgänglig', //cpg1.3.0
  'MIME_extraction_failure' => 'MIME-typ kunde inte fastställas.', //cpg1.3.0
  'MIME_type_unknown' => 'Okänd MIME-typ', //cpg1.3.0
  'cant_create_write' => 'Kan inte skapa fil.', //cpg1.3.0
  'not_writable' => 'Kan inte skriva till fil.', //cpg1.3.0
  'cant_read_URI' => 'Kan inte läsa URI/URL', //cpg1.3.0
  'cant_open_write_file' => 'Kan inte öppna URI-fil.', //cpg1.3.0
  'cant_write_write_file' => 'Kan inte skriva till URI-fil.', //cpg1.3.0
  'cant_unzip' => 'Kan inte packa upp.', //cpg1.3.0
  'unknown' => 'Okänt fel', //cpg1.3.0
  'succ' => 'Uppladdning lyckades', //cpg1.3.0
  'success' => '%s uppladdningar lyckades.', //cpg1.3.0
  'add' => 'Klicka på \'Fortsätt\' för att lägga objekten i album.', //cpg1.3.0
  'failure' => 'Fel vid uppladdning', //cpg1.3.0
  'f_info' => 'Filinformation', //cpg1.3.0
  'no_place' => 'Den föregående filen kunde inte placeras.', //cpg1.3.0
  'yes_place' => 'Den föregående filen placerades.', //cpg1.3.0
  'max_fsize' => 'Max tillåten filstorlek för uppladdning är %s KB',
  'album' => 'Album',
  'picture' => 'Objekt', //cpg1.3.0
  'pic_title' => 'Objektets titel', //cpg1.3.0
  'description' => 'Objektets beskrivning', //cpg1.3.0
  'keywords' => 'Nyckelord (avskiljda med mellanslag)',
  'err_no_alb_uploadables' => 'Det finns inget album du har behörighet att ladda upp bilder till', //cpg1.3.0
  'place_instr_1' => 'Lägg objekten i album. Du kan också lägga in information om varje objekt nu.', //cpg1.3.0
  'place_instr_2' => 'Fler objekt måste placeras i album. Klicka på \'Fortsätt\'.', //cpg1.3.0
  'process_complete' => 'Du har placerat alla objekten i album.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'title' => 'Administrera användare',
  'name_a' => 'Namn stigande',
  'name_d' => 'Namn fallande',
  'group_a' => 'Grupp stigande',
  'group_d' => 'Grupp fallande',
  'reg_a' => 'Registreringsdatum stigande',
  'reg_d' => 'Registreringsdatum fallande',
  'pic_a' => 'Objekträknare stigande',
  'pic_d' => 'Objekträknare fallande',
  'disku_a' => 'Diskanvändande stigande',
  'disku_d' => 'Diskanvändande fallande',
  'lv_a' => 'Senaste besök stigande', //cpg1.3.0
  'lv_d' => 'Senaste besök fallande', //cpg1.3.0
  'sort_by' => 'Sortera användare efter',
  'err_no_users' => 'Användartabellen är tom!',
  'err_edit_self' => 'Du kan inte redigera din egen profil här. Gå istället in på \'Min profil\'.',
  'edit' => 'REDIGERA',
  'delete' => 'RADERA',
  'name' => 'Användarnamn',
  'group' => 'Grupp',
  'inactive' => 'Inaktiv',
  'operations' => 'Funktioner',
  'pictures' => 'Objekt', //cpg1.3.0
  'disk_space' => 'Diskutrymme använt / Tilldelat',
  'registered_on' => 'Registrerades',
  'last_visit' => 'Senaste besök', //cpg1.3.0
  'u_user_on_p_pages' => '%d användare på %d sida(or)',
  'confirm_del' => 'Är du säker på att du vill RADERA denna användare? \\nAlla hans/hennes objekt och album kommer att raderas.', //js-alert //cpg1.3.0
  'mail' => 'E-POST',
  'err_unknown_user' => 'Vald användare finns inte!',
  'modify_user' => 'Spara användare',
  'notes' => 'Anmärkningar',
  'note_list' => '<li>Om du inte vill byta ut ditt nuvarande lösenord, lämna "lösenord"-fältet blankt.',
  'password' => 'Lösenord',
  'user_active' => 'Användaren är aktiv',
  'user_group' => 'Användargrupp',
  'user_email' => 'Användarens e-post',
  'user_web_site' => 'Användarens hemsida',
  'create_new_user' => 'Skapa ny användare',
  'user_location' => 'Användaren finns i',
  'user_interests' => 'Användarens intressen',
  'user_occupation' => 'Användarens yrke',
  'latest_upload' => 'Nyligen uppladdade', //cpg1.3.0
  'never' => 'aldrig', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
  'title' => 'Administrationsvertyg (ändra storlek på bilder)', //cpg1.3.0
  'what_it_does' => 'Här kan du',
  'what_update_titles' => 'Uppdatera titlar från filnamnet',
  'what_delete_title' => 'Radera titlar',
  'what_rebuild' => 'Återuppbygga miniatyrbilder och storleksändrade bilder',
  'what_delete_originals' => 'Radera original och ersätta det med en storleksändrad versione',
  'file' => 'Fil',
  'title_set_to' => 'titel satt till',
  'submit_form' => 'skicka',
  'updated_succesfully' => 'uppdatering lyckades',
  'error_create' => 'fel vid skapande av',
  'continue' => 'Bearbeta fler bilder',
  'main_success' => 'Filen %s används nu som huvudobjekt', //cpg1.3.0
  'error_rename' => 'Misslyckades att byta namn från %s till %s',
  'error_not_found' => 'Filen %s hittades inte',
  'back' => 'tillbaka till huvudsidan',
  'thumbs_wait' => 'Uppdaterar miniatyrer och/eller storleksändrade bilder. Var god vänta...',
  'thumbs_continue_wait' => 'Fortsätter att uppdatera miniatyrer och/eller storleksändrade bilder...',
  'titles_wait' => 'Uppdaterar titlar, var god vänta...',
  'delete_wait' => 'Raderar titlar, var god vänta...',
  'replace_wait' => 'Raderar original och ersätter dem med storleksförändrade bilder, var god vänta....',
  'instruction' => 'Snabbinstruktioner',
  'instruction_action' => 'Välj funktion',
  'instruction_parameter' => 'Sätt parametrar',
  'instruction_album' => 'Välj album',
  'instruction_press' => 'Tryck %s',
  'update' => 'Uppdatera miniatyrer och/eller storleksförändra bilder',
  'update_what' => 'Vad ska uppdateras',
  'update_thumb' => 'Enbart miniatyrer',
  'update_pic' => 'Enbart storleksförändrade bilder',
  'update_both' => 'Både miniatyrer och storleksförändrade bilder',
  'update_number' => 'Antal bearbetade bilder per klick',
  'update_option' => '(Försök välja ett lägre värde om du får timeout-problem)',
  'filename_title' => 'Filnamn &rArr; Objektets titel', //cpg1.3.0
  'filename_how' => 'Hur ska filnamnet ändras',
  'filename_remove' => 'Ta bort .jpg-ändelsen och ersätt _ (underscore) med mellanslag',
  'filename_euro' => 'Ändra 2003_11_23_13_20_20.jpg till 23/11/2003 13:20',
  'filename_us' => 'Ändra 2003_11_23_13_20_20.jpg till 11/23/2003 13:20',
  'filename_time' => 'Ändra 2003_11_23_13_20_20.jpg till 13:20',
  'delete' => 'Radera objekttitlar eller objekt i originalstorle', //cpg1.3.0
  'delete_title' => 'Radera objekttitlar', //cpg1.3.0
  'delete_original' => 'Radera originalbildstorlek',
  'delete_replace' => 'Radera originalbilder och ersätter dem med storleksförändrade versioner',
  'select_album' => 'Välj album',
  'delete_orphans' => 'Radera kommentarer som inte längre är länkade till någon bild (fungerar i alla album)', //cpg1.3.0
  'orphan_comment' => 'Kommentarer som inte är länkade till något objekt hittade', //cpg1.3.0
  'delete' => 'Radera', //cpg1.3.0
  'delete_all' => 'Radera alla', //cpg1.3.0
  'comment' => 'Kommentar: ', //cpg1.3.0
  'nonexist' => 'kopplad till ej existerande fil # ', //cpg1.3.0
  'phpinfo' => 'Visa phpinfo', //cpg1.3.0
  'update_db' => 'Uppdatera databas', //cpg1.3.0
  'update_db_explanation' => 'Om du har ersatt Coppermineobjekt, ändrat dem eller uppgraderat från en äldre version av Coppermine så kör Uppdatera databas. Detta kommer att skapa nödvändiga tabeller och ändra nödvändiga konfigurationer i din Copperminedatabas.', //cpg1.3.0
);

?>