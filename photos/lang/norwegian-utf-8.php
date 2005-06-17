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
// CVS version: $Id: norwegian-utf-8.php,v 1.8 2004/07/24 15:04:07 gaugau Exp $
// ------------------------------------------------------------------------- //

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Norwegian',
  'lang_name_native' => 'Norsk',
  'lang_country_code' => 'no',
  'trans_name'=> 'johnwr',
  'trans_email' => 'johnwr_coppermine@responseweb.net',
  'trans_website' => '',
  'trans_date' => '2004-05-19',
);

$lang_charset = 'iso-8859-1';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('SÃ¸n', 'Man', 'Tir', 'Ons', 'Tor', 'Fre', 'LÃ¸r');
$lang_month = array('Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Des');

// Some common strings
$lang_yes = 'Ja';
$lang_no  = 'Nei';
$lang_back = 'TILBAKE';
$lang_continue = 'FORTSETT';
$lang_info = 'Informasjon';
$lang_error = 'Feil';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%d. %B, %Y';
$lastcom_date_fmt =  '%Y-%m-%d kl. %H:%M'; //cpg1.3.0
$lastup_date_fmt = '%d. %B, %Y';
$register_date_fmt = '%d. %B, %Y';
$lasthit_date_fmt = '%Y-%m-%d kl. %H:%M %p'; //cpg1.3.0
$comment_date_fmt =  '%Y-%m-%d kl. %H:%M %p'; //cpg1.3.0

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
  'random' => 'Tilfeldige filer', //cpg1.3.0
  'lastup' => 'Siste filer',
  'lastalb'=> 'Sist oppdaterte album',
  'lastcom' => 'Siste kommentarer',
  'topn' => 'Mest sett',
  'toprated' => 'Beste karakter',
  'lasthits' => 'Siste visninger',
  'search' => 'SÃ¸keresultat',
  'favpics'=> 'Favoritter', //cpg1.3.0
);

$lang_errors = array(
  'access_denied' => 'Du har ikke tilgang til denne siden.',
  'perm_denied' => 'Du kan ikke utfÃ¸re denne handlingen.',
  'param_missing' => 'Scriptet ble kalt uten nÃ¸dvendige parametere.',
  'non_exist_ap' => 'Det valgte album/bilde eksisterer ikke!', //cpg1.3.0
  'quota_exceeded' => 'Din diskkvote er oppbrukt<br /><br />Du har plass til [quota]K, dine bilder bruker [space]K. Legger du inn flere bilder overskrider du denne kvoten.', //cpg1.3.0
  'gd_file_type_err' => 'NÃ¥r albumet bruker GD Graphics- teknikk er det kun tillatt Ã¥ bruke JPEG eller PNG bilder.',
  'invalid_image' => 'Bildet du lastet opp er defekt eller stÃ¸ttes ikke av GD.',
  'resize_failed' => 'Kunne ikke forandre stÃ¸rrelsen pÃ¥ bildet eller opprette miniatyrbilde.',
  'no_img_to_display' => 'Ingen bilder',
  'non_exist_cat' => 'Den valgte kategorien eksisterer ikke',
  'orphan_cat' => 'En kategori er -foreldrelÃ¸s-. Oppdater i kategoriadministrasjonen.', //cpg1.3.0
  'directory_ro' => 'Mappen \'%s\' er skrivebeskyttet. Bildet kan ikke slettes.', //cpg1.3.0
  'non_exist_comment' => 'Den valgte kommentaren finnes ikke.',
  'pic_in_invalid_album' => 'Det finnes bilder i et album som ikke eksisterer (%s)!?', //cpg1.3.0
  'banned' => 'Du har mistet retten til Ã¥ bruke dette internettstedet.',
  'not_with_udb' => 'Funksjonen er deaktivert fordi Coppermine kjÃ¸rer sammen med et diskusjonsforum.',
  'offline_title' => 'Offline', //cpg1.3.0
  'offline_text' => 'Galleriet er midlertidig offline - prÃ¸v igjen senere', //cpg1.3.0
  'ecards_empty' => 'Det er ingen ekort Ã¥ vise. Sjekk at ekortlogging er aktivert!', //cpg1.3.0
  'action_failed' => 'Handling feilet.  Coppermine kan ikke utfÃ¸re denne handlingen.', //cpg1.3.0
  'no_zip' => 'NÃ¸dvendige biblioteker for Ã¥ behandle ZIPfiler mangler.  Kontakt din administrator.', //cpg1.3.0
  'zip_type' => 'Du har ikke rettigheter til Ã¥ laste opp ZIP filer.', //cpg1.3.0
);

$lang_bbcode_help = 'Disse kodene kan vÃ¦re til hjelp: <li>[b]<b>Bold</b>[/b]</li> <li>[i]<i>Italic</i>[/i]</li> <li>[url=http://dittnettsted.no/]Url Tekst[/url]</li> <li>[email]deg@dittnettsted.no[/email]</li>'; //cpg1.3.0

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'alb_list_title' => 'GÃ¥ til albumliste',
  'alb_list_lnk' => 'Albumliste',
  'my_gal_title' => 'GÃ¥ til mitt personlige galleri',
  'my_gal_lnk' => 'Mitt galleri',
  'my_prof_lnk' => 'Min profil',
  'adm_mode_title' => 'Bytt til adminmodus',
  'adm_mode_lnk' => 'Adminmodus',
  'usr_mode_title' => 'Bytt til brukermodus',
  'usr_mode_lnk' => 'Brukermodus',
  'upload_pic_title' => 'Last opp fil til et album', //cpg1.3.0
  'upload_pic_lnk' => 'Last opp fil', //cpg1.3.0
  'register_title' => 'Lag bruker',
  'register_lnk' => 'Registrer',
  'login_lnk' => 'Logg inn',
  'logout_lnk' => 'Logg ut',
  'lastup_lnk' => 'Siste opplastninger',
  'lastcom_lnk' => 'Siste kommentarer',
  'topn_lnk' => 'Mest sett',
  'toprated_lnk' => 'Beste karakter',
  'search_lnk' => 'SÃ¸k',
  'fav_lnk' => 'Mine Favoritter',
  'memberlist_title' => 'Vis Medlemsliste', //cpg1.3.0
  'memberlist_lnk' => 'Medlemsliste', //cpg1.3.0
  'faq_title' => 'SpÃ¸rsmÃ¥l og Svar om bildegalleriet &quot;Coppermine&quot;', //cpg1.3.0
  'faq_lnk' => 'FAQ', //cpg1.3.0
);

$lang_gallery_admin_menu = array(
  'upl_app_lnk' => 'Godkjenning av filer',
  'config_lnk' => 'Konfigurasjon',
  'albums_lnk' => 'Album',
  'categories_lnk' => 'Kategorier',
  'users_lnk' => 'Brukere',
  'groups_lnk' => 'Grupper',
  'comments_lnk' => 'Godkjenne kommentarer', //cpg1.3.0
  'searchnew_lnk' => 'Masseinnlegging av filer', //cpg1.3.0
  'util_lnk' => 'AdministrasjonsverktÃ¸y', //cpg1.3.0
  'ban_lnk' => 'Utvis brukere',
  'db_ecard_lnk' => 'Vis ekort', //cpg1.3.0
);

$lang_user_admin_menu = array(
  'albmgr_lnk' => 'Opprett / ordne mine album',
  'modifyalb_lnk' => 'Rediger mine album',
  'my_prof_lnk' => 'Min profil',
);

$lang_cat_list = array(
  'category' => 'Kategori',
  'albums' => 'Album',
  'pictures' => 'Filer', //cpg1.3.0
);

$lang_album_list = array(
  'album_on_page' => '%d album over %d side(r)',
);

$lang_thumb_view = array(
  'date' => 'DATO',
  //Sort by filename and title
  'name' => 'FILNAVN',
  'title' => 'TITTEL',
  'sort_da' => 'Sorter pÃ¥ dato i stigende rekkefÃ¸lge',
  'sort_dd' => 'Sorter pÃ¥ dato i synkende rekkefÃ¸lge',
  'sort_na' => 'Sorter pÃ¥ navn i stigende rekkefÃ¸lge',
  'sort_nd' => 'Sorter pÃ¥ navn i synkende rekkefÃ¸lge',
  'sort_ta' => 'Sorter pÃ¥ tittel i stigende rekkefÃ¸lge',
  'sort_td' => 'Sorter pÃ¥ tittel i synkende rekkefÃ¸lge',
  'download_zip' => 'Last ned som Zipfil', //cpg1.3.0
  'pic_on_page' => '%d filer over %d side(r)',
  'user_on_page' => '%d brukere over %d side(r)', //cpg1.3.0
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Tilbake til oversikt',
  'pic_info_title' => 'Vis/skjul filinformasjon', //cpg1.3.0
  'slideshow_title' => 'Lysbildevisning',
  'ecard_title' => 'Send denne filen som et ekort', //cpg1.3.0
  'ecard_disabled' => 'ekortfunksjonalitet er ikke tilgjengelig',
  'ecard_disabled_msg' => 'Du har ikke tilgang til Ã¥ sende ekort', //js-alert //cpg1.3.0
  'prev_title' => 'Se forrige fil', //cpg1.3.0
  'next_title' => 'Se neste fil', //cpg1.3.0
  'pic_pos' => 'FIL %s/%s', //cpg1.3.0
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Gi karakter pÃ¥ dette bildet ', //cpg1.3.0
  'no_votes' => '(Ingen stemmer)',
  'rating' => '(Karakter : %s / 5 med %s stemmer)',
  'rubbish' => 'SÃ¸ppel',
  'poor' => 'DÃ¥rlig',
  'fair' => 'Greit nok',
  'good' => 'Bra',
  'excellent' => 'Veldig bra',
  'great' => 'Topp',
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
  CRITICAL_ERROR => 'Kritisk feil',
  'file' => 'Fil: ',
  'line' => 'Linje: ',
);

$lang_display_thumbnails = array(
  'filename' => 'Filnavn : ',
  'filesize' => 'FilstÃ¸rrelse : ',
  'dimensions' => 'Dimensjoner : ',
  'date_added' => 'Lagt inn dato : ', //cpg1.3.0
);

$lang_get_pic_data = array(
  'n_comments' => '%s kommentarer',
  'n_views' => '%s visninger',
  'n_votes' => '(%s stemmer)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Debuginformasjon', //cpg1.3.0
  'select_all' => 'Velg alle', //cpg1.3.0
  'copy_and_paste_instructions' => 'Dersom du skal be om hjelp pÃ¥ Coppermine support forumet mÃ¥ du kopiere denne teksten inn i forespÃ¸rselen din. VÃ¦r oppmerksom pÃ¥ Ã¥ fjerne eventuelle passord fÃ¸rst.', //cpg1.3.0
  'phpinfo' => 'vis phpinfo', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => 'Standard sprÃ¥k', //cpg1.3.0
  'choose_language' => 'Velg ditt sprÃ¥k', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'Standard utseende', //cpg1.3.0
  'choose_theme' => 'Velg utseende', //cpg1.3.0
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
  'Question' => 'SpÃ¸rsmÃ¥l',
  'Very Happy' => 'Veldig glad',
  'Smile' => 'Smil',
  'Sad' => 'Trist',
  'Surprised' => 'Overrasket',
  'Shocked' => 'Sjokkert',
  'Confused' => 'Forvirret',
  'Cool' => 'Kult',
  'Laughing' => 'Ler',
  'Mad' => 'Sint',
  'Razz' => 'Fleiper',
  'Embarassed' => 'Flau',
  'Crying or Very sad' => 'GrÃ¥ter eller veldig trist',
  'Evil or Very Mad' => 'Ond eller veldig sint',
  'Twisted Evil' => 'Ond',
  'Rolling Eyes' => 'Rullende Ã¸yne',
  'Wink' => 'Blunker lurt',
  'Idea' => 'Ide',
  'Arrow' => 'Pil',
  'Neutral' => 'NÃ¸ytral',
  'Mr. Green' => 'Herr GrÃ¸nn',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  0 => 'Forlater administrasjonsmodus...',
  1 => 'GÃ¥r inn i administrasjonsmodus...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Album mÃ¥ ha et navn !', //js-alert
  'confirm_modifs' => 'Er du sikker pÃ¥ at du vil lagre disse endringene ?', //js-alert
  'no_change' => 'Du gjorde ingen endringer !', //js-alert
  'new_album' => 'Nytt album',
  'confirm_delete1' => 'Er du sikker pÃ¥ at du vil slette dette albumet?', //js-alert
  'confirm_delete2' => '\nAlle bilder og kommentarer vil forsvinne!', //js-alert
  'select_first' => 'Velg et album fÃ¸rst', //js-alert
  'alb_mrg' => 'Albumadministrasjon',
  'my_gallery' => '* Mitt galleri *',
  'no_category' => '* Ingen kategori *',
  'delete' => 'Slett',
  'new' => 'Ny',
  'apply_modifs' => 'Lagre endringer',
  'select_category' => 'Velg kategori',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'NÃ¸dvendige parametere for \'%s\'operasjonen manglet!',
  'unknown_cat' => 'Den valgte kategorien eksisterer ikke i databasen!',
  'usergal_cat_ro' => 'Brukergalleri kategorien kan ikke slettes!',
  'manage_cat' => 'Administrer kategorier',
  'confirm_delete' => 'Er du sikker pÃ¥ at du Ã¸nsker og SLETTE denne kategorien?', //js-alert
  'category' => 'Kategori',
  'operations' => 'Handling',
  'move_into' => 'Flytt til',
  'update_create' => 'Oppdater/opprett kategori',
  'parent_cat' => 'Overkategori',
  'cat_title' => 'Kategoritittel',
  'cat_thumb' => 'Kategoribilde', //cpg1.3.0 // Translatorcomment: There is (afaik) no good translation of "Thumbnail" in Norwegian
  'cat_desc' => 'Kategoribeskrivelse',
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
  'title' => 'Konfigurasjon',
  'restore_cfg' => 'Gjenopprett standardoppsett',
  'save_cfg' => 'Lagre ny konfigurasjon',
  'notes' => 'Notater',
  'info' => 'Informasjon',
  'upd_success' => 'Konfigurasjon av Coppermine oppdatert',
  'restore_success' => 'Coppermine standardoppsett gjenopprettet',
  'name_a' => 'Navn i stigende rekkefÃ¸lge',
  'name_d' => 'Navn i synkende rekkefÃ¸lge',
  'title_a' => 'Tittel i synkende rekkefÃ¸lge',
  'title_d' => 'Tittel i synkende rekkefÃ¸lge',
  'date_a' => 'Dato i synkende rekkefÃ¸lge',
  'date_d' => 'Dato i synkende rekkefÃ¸lge',
  'th_any' => 'Maksimal hÃ¸yde/bredde',
  'th_ht' => 'HÃ¸yde',
  'th_wd' => 'Bredde',
  'label' => 'merkelapp', //cpg1.3.0 // Translatorcomment: Have to see this one in context
  'item' => 'emne', //cpg1.3.0 // Translatorcomment: Have to see this one in context
  'debug_everyone' => 'Alle', //cpg1.3.0
  'debug_admin' => 'Kun Administratorer', //cpg1.3.0
        );

if (defined('CONFIG_PHP')) $lang_config_data = array(
  'Generelle instillinger',
  array('Gallerinavn', 'gallery_name', 0),
  array('Galleribeskrivelse', 'gallery_description', 0),
  array('Galleriadministrators epostadresse', 'gallery_admin_email', 0),
  array('Addresse for \'Se flere bilder\' linken i ekortene', 'ecards_more_pic_target', 0),
  array('Galleriet er offline', 'offline', 1), //cpg1.3.0
  array('Logg ekort', 'log_ecards', 1), //cpg1.3.0
  array('Tillat ZIP-nedlastning av favoritter', 'enable_zipdownload', 1), //cpg1.3.0

  'SprÃ¥k, Utseende &amp; Tegnsettinnstillinger',
  array('SprÃ¥k', 'lang', 5),
  array('Utseende', 'theme', 6),
  array('Vis sprÃ¥kliste', 'language_list', 8), //cpg1.3.0
  array('Vis sprÃ¥kflag', 'language_flags', 8), //cpg1.3.0
  array('Vis &quot;reset&quot; i sprÃ¥kvalg', 'language_reset', 1), //cpg1.3.0
  array('Vis liste over utseender', 'theme_list', 8), //cpg1.3.0
  array('Vis &quot;reset&quot; i valg av utseede', 'theme_reset', 1), //cpg1.3.0
  array('Vis FAQ', 'display_faq', 1), //cpg1.3.0
  array('Vis bbcode hjelp', 'show_bbcode_help', 1), //cpg1.3.0
  array('Tegnsett', 'charset', 4), //cpg1.3.0

  'Albumliste visning',
  array('Bredde pÃ¥ hovedtabell (pixler eller %)', 'main_table_width', 0),
  array('Antall kategorinivÃ¥er som skal vises', 'subcat_level', 0),
  array('Antall album som skal vises pr.side', 'albums_per_page', 0),
  array('Antall kolonner i albumlisten', 'album_list_cols', 0),
  array('StÃ¸rrelse pÃ¥ miniatyrbilde i piksler', 'alb_list_thumb_size', 0),
  array('Innhold pÃ¥ hovedsiden', 'main_page_layout', 0),
  array('Vis miniatyrbilder fra Ã¸verste albumnivÃ¥ i kategorier','first_level',1),

  'Miniatyrbilder',
  array('Antall kolonner pÃ¥ siden med miniatyrbilder', 'thumbcols', 0),
  array('Antall rader pÃ¥ siden med miniatyrbilder', 'thumbrows', 0),
  array('Maks antall side-snarveier som skal vises pÃ¥ siden', 'max_tabs', 10), //cpg1.3.0
  array('Vis bildebeskrivelsen (i tillegg til tittelen) under miniatyrbildet', 'caption_in_thumbview', 1), //cpg1.3.0
  array('Vis antall visninger under miniatyrbildet', 'views_in_thumbview', 1), //cpg1.3.0
  array('Vis antall kommentarer under miniatyrbildet', 'display_comment_count', 1),
  array('Vis navn pÃ¥ bruker som har lastet opp filen under miniatyrbildet', 'display_uploader', 1), //cpg1.3.0
  array('Standard sortering av bildene', 'default_sort_order', 3), //cpg1.3.0
  array('Minimum antall stemmer pÃ¥ bilde fÃ¸r visning i \'beste karakter\' listen', 'min_votes_for_rating', 0), //cpg1.3.0

  'Bildevisning og kommentarinnstillinger',
  array('Bredde pÃ¥ tabell ved visning av bilder (piksler eller %)', 'picture_table_width', 0), //cpg1.3.0
  array('Bildeinformasjon er synlig som standard', 'display_pic_info', 1), //cpg1.3.0
  array('Filtrer ufine ord i kommentarer', 'filter_bad_words', 1),
  array('Tillat smilefjes i kommentarer', 'enable_smilies', 1),
  array('Tillat flere etterfÃ¸lgende kommentarer pÃ¥ en fil fra samme bruker (disable flood protection)', 'disable_comment_flood_protect', 1), //cpg1.3.0
  array('Maksimal lengde pÃ¥ bildebeskrivelse', 'max_img_desc_length', 0),
  array('Maksimal antall tegn pr. ord', 'max_com_wlength', 0),
  array('Max number of lines in a comment', 'max_com_lines', 0),
  array('Maksimalt antall linjer pr. kommentar', 'max_com_size', 0),
  array('Vis filmstripe', 'display_film_strip', 1),
  array('Maksimalt antall enheter i filmstripe', 'max_film_strip_items', 0),
  array('Varsle administrator om kommentarer pÃ¥ epost', 'email_comment_notification', 1), //cpg1.3.0
  array('Antall millisekunder pr. bilde i lysbildevisning (1 sekund = 1000 millisekunder)', 'slideshow_interval', 0), //cpg1.3.0

  'Fil- og miniatyrbildeinnstillinger', //cpg1.3.0
  array('Kvalitet pÃ¥ JPEG bilder', 'jpeg_qual', 0),
  array('Maksimal dimensjon pÃ¥ miniatyrbilde <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0), //cpg1.3.0
  array('Bruk dimensjon ( bredde, hÃ¸yde eller eller maks bredde/hÃ¸yde for mineatyrbilder) <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7),
  array('Opprett bilder i mellomstÃ¸rrelse','make_intermediate',1),
  array('Maksimal bredde eller hÃ¸yde pÃ¥ bilde/video i mellomstÃ¸rrelse <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0), //cpg1.3.0
  array('Maksimal filstÃ¸rrelse for opplastede filer  (KB)', 'max_upl_size', 0), //cpg1.3.0
  array('Maks bredde eller hÃ¸yde for opplastede bilder/videoer (piksler)', 'max_upl_width_height', 0), //cpg1.3.0

  'Filer og miniatyrbilder avanserte innstillinger', //cpg1.3.0
  array('Vis ikon for private album for ikke innloggede brukere','show_private',1), //cpg1.3.0
  array('Forbudte tegn i filnavn', 'forbiden_fname_char',0), //cpg1.3.0
  //array('Aksepterte filtyper for opplasting', 'allowed_file_extensions',0), //cpg1.3.0
  array('Tillatte bildeformater', 'allowed_img_types',0), //cpg1.3.0
  array('Tillatte videoformater', 'allowed_mov_types',0), //cpg1.3.0
  array('Tillatte lydformater', 'allowed_snd_types',0), //cpg1.3.0
  array('Tillatte dokumentformater', 'allowed_doc_types',0), //cpg1.3.0
  array('Metode for endring av bildestÃ¸rrelse','thumb_method',2), //cpg1.3.0
  array('Adresse(sti) til ImageMagick \'konverterings\' verktÃ¸y (eksempel /usr/bin/X11/)', 'impath', 0), //cpg1.3.0
  //array('Tillatte bildeformater (kun for ImageMagick)', 'allowed_img_types',0), //cpg1.3.0
  array('Kommandolinjeparametre ved bruk av ImageMagick ', 'im_options', 0), //cpg1.3.0
  array('Les EXIF data i JPEG filer', 'read_exif_data', 1), //cpg1.3.0
  array('Les IPTC data i JPEG filer', 'read_iptc_data', 1), //cpg1.3.0
  array('Albumkatalog <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0), //cpg1.3.0
  array('Brukerkatalog <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0), //cpg1.3.0
  array('Prefiks for mellomstore bilder/filmer <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0), //cpg1.3.0
  array('Prefiks for miniatyrbilder <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0), //cpg1.3.0
  array('Standardrettigheter pÃ¥ kataloger', 'default_dir_mode', 0), //cpg1.3.0
  array('Standardrettigheter pÃ¥ filer', 'default_file_mode', 0), //cpg1.3.0

  'Brukerinnstillinger',
  array('Tillat nye brukerregistreringer', 'allow_user_registration', 1),
  array('Brukerregistrering krever bekreftelse pÃ¥ epost', 'reg_requires_valid_email', 1),
  array('Varsle administrator pr. epost ved nye brukerregistreringer', 'reg_notify_admin_email', 1), //cpg1.3.0
  array('Tillat to brukere Ã¥ ha samme epostadresse', 'allow_duplicate_emails_addr', 1),
  array('Brukere kan ha private album (Merk: dersom du skifter fra \'ja\' til \'nei\' vil alle private album bli offentlige)', 'allow_private_albums', 1), //cpg1.3.0
  array('Varsle administrator pr. epost nÃ¥r filer blir lastet opp til godkjennelse', 'upl_notify_admin_email', 1), //cpg1.3.0
  array('La innloggede brukere se medlemslisten', 'allow_memberlist', 1), //cpg1.3.0

  'Spesialfelt for bildebeskrivelse (la disse vÃ¦re tomme hvis de ikke skal brukes)',
  array('Navn spesialfelt 1', 'user_field1_name', 0),
  array('Navn spesialfelt 2', 'user_field2_name', 0),
  array('Navn spesialfelt 3', 'user_field3_name', 0),
  array('Navn spesialfelt 4', 'user_field4_name', 0),

  'Innstillinger for cookies',
  array('Navn pÃ¥ cookie som brukes av Coppermine (ved integrasjon med andre systemer, husk Ã¥ sÃ¸rge for at denne er forskjellig fra navnet pÃ¥ dette systemts cookie)', 'cookie_name', 0),
  array('Sti til cookie brukt av Coppermine', 'cookie_path', 0),

  'Diverse innstillinger',
  array('Aktiver debugmodus', 'debug_mode', 9), //cpg1.3.0
  array('Vis notiser i debugmodus', 'debug_notice', 1), //cpg1.3.0

  '<br /><div align="left"><a name="notice1"></a>(*) Denne innstillingen mÃ¥ IKKE endres dersom det allerede eksisterer filer i databasen.<br />
  <a name="notice2"></a>(**) Dersom denne innstillingen endres vil bare filer som er lagt til etter dette bli berÃ¸rt, slik at det er anbefalt Ã¥ la denne vÃ¦re urÃ¸rt dersom det allerede eksister filer i Coppermine. Du kan imidlertid gjÃ¸re disse endringene pÃ¥ de eksisterende filene i &quot;<a href="util.php">administrasjonsverktÃ¸yet</a>&quot; pÃ¥ administrasjonemenyen.</div><br />', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Sendte ekort', //cpg1.3.0
  'ecard_sender' => 'Avsender', //cpg1.3.0
  'ecard_recipient' => 'Mottaker', //cpg1.3.0
  'ecard_date' => 'Dato', //cpg1.3.0
  'ecard_display' => 'Vis ekort', //cpg1.3.0
  'ecard_name' => 'Navn', //cpg1.3.0
  'ecard_email' => 'Epost', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'i stigende rekkefÃ¸lge', //cpg1.3.0
  'ecard_descending' => 'i synkende rekkefÃ¸lge', //cpg1.3.0
  'ecard_sorted' => 'Sortert', //cpg1.3.0
  'ecard_by_date' => 'etter dato', //cpg1.3.0
  'ecard_by_sender_name' => 'etter avsenders navn', //cpg1.3.0
  'ecard_by_sender_email' => 'etter avsenders epos', //cpg1.3.0
  'ecard_by_sender_ip' => 'etter senders IP adresse', //cpg1.3.0
  'ecard_by_recipient_name' => 'etter mottakers name', //cpg1.3.0
  'ecard_by_recipient_email' => 'etter mottakers epost', //cpg1.3.0
  'ecard_number' => 'viser ekortnummer %s til %s av %s', //cpg1.3.0
  'ecard_goto_page' => 'gÃ¥ til side', //cpg1.3.0
  'ecard_records_per_page' => 'Ekort per side', //cpg1.3.0
  'check_all' => 'Marker alle', //cpg1.3.0
  'uncheck_all' => 'Avmarker alle', //cpg1.3.0
  'ecards_delete_selected' => 'Slett valgte ekort', //cpg1.3.0
  'ecards_delete_confirm' => 'Er du sikker pÃ¥ at du vil slette valgte ekort? Marker avkryssningsfeltet!', //cpg1.3.0
  'ecards_delete_sure' => 'Jeg er sikker', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Du mÃ¥ skrive bÃ¥de navn og kommentar',
  'com_added' => 'Din kommentar er lagt inn',
  'alb_need_title' => 'Du mÃ¥ legge inn en tittel pÃ¥ albumet!',
  'no_udp_needed' => 'Ingen oppdatering nÃ¸dvendig.',
  'alb_updated' => 'Albumet ble oppdatert',
  'unknown_album' => 'Det valgte albumet eksisterer ikke, eller du har ikke tillatelse til Ã¥ laste opp bilder i dette albumet',
  'no_pic_uploaded' => 'Det ble ikke lastet opp noen fil!<br /><br />Hvis du virkelig valgte en fil sÃ¥ sjekk om serveren tillater opplasting', //cpg1.3.0
  'err_mkdir' => 'Klarte ikke Ã¥ lage en katalog %s !',
  'dest_dir_ro' => 'Katalogen %s kan ikke skrives til av dette skriptet !',
  'err_move' => 'Umulig Ã¥ flytte %s til %s !',
  'err_fsize_too_large' => 'Filen du lastet opp er for stor (maksimalt tillatt stÃ¸rrelse er %s x %s). !', //cpg1.3.0 //translcomment`: switch these?
  'err_imgsize_too_large' => 'Filen du lastet opp er for stor (maksimalt tillatt stÃ¸rrelse er %s KB) !',             //translcomment`: switch these?
  'err_invalid_img' => 'Filen du har lastet opp er ikke en gyldig bildefil !',
  'allowed_img_types' => 'Du kan bare laste opp %s bilder.',
  'err_insert_pic' => 'Bildet \'%s\' kan ikke legges inn i albumet', //cpg1.3.0
  'upload_success' => 'Opplastingen av bildet ditt var vellykket<br /><br />Det vil bli tilgjengelig etter at administrator har godkjent det.', //cpg1.3.0
  'notify_admin_email_subject' => '%s - Opplastningsvarsel', //cpg1.3.0
  'notify_admin_email_body' => 'En fil har blitt lastet opp av %s, det trenger din godkjennelse. GÃ¥ til %s', //cpg1.3.0
  'info' => 'Informasjon',
  'com_added' => 'Kommentar tagt inn',
  'alb_updated' => 'Album oppdatert',
  'err_comment_empty' => 'Din kommentar er tom!',
  'err_invalid_fext' => 'Kun disse filtypene er akseptert : <br /><br />%s.',
  'no_flood' => 'Du er allerede den siste som har kommentert denne filen<br /><br />Vennligst rediger din forrige kommentar istedet', //cpg1.3.0
  'redirect_msg' => 'Du blir omdirigert.<br /><br /><br />Trykk \'FORTSETT\' dersom siden ikke lastes automatisk',
  'upl_success' => 'Din fil ble lagt inn', //cpg1.3.0
  'email_comment_subject' => 'Kommentar lagt inn pÃ¥ Coppermine Photo Gallery', //cpg1.3.0
  'email_comment_body' => 'Noen har lagt inn en kommentar i ditt galleri. Se kommentaren pÃ¥', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Beskrivelse',
  'fs_pic' => 'Full stÃ¸rrelse', //translcomment: Need to see context
  'del_success' => 'slettet',
  'ns_pic' => 'normal stÃ¸rrelse', //translcomment: Need to see context
  'err_del' => 'kan ikke slettes',
  'thumb_pic' => 'miniatyrbilde',
  'comment' => 'kommentar',
  'im_in_alb' => 'bilde i album',
  'alb_del_success' => 'Album \'%s\' slettet',
  'alb_mgr' => 'Albumadministrasjon',
  'err_invalid_data' => 'Ugyldig data mottatt i \'%s\'',
  'create_alb' => 'Oppretter album \'%s\'',
  'update_alb' => 'Oppdaterer album \'%s\' med tittel \'%s\' og index \'%s\'',
  'del_pic' => 'Slett fil', //cpg1.3.0
  'del_alb' => 'Slett album',
  'del_user' => 'Slett bruker',
  'err_unknown_user' => 'Den valgte brukeren eksisterer ikke!',
  'comment_deleted' => 'Kommentar ble slettet',
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
  'confirm_del' => 'Er du sikker pÃ¥ at du vil slette denne filen? \\nKommentarer vil ogsÃ¥ bli slettet.', //js-alert //cpg1.3.0
  'del_pic' => 'SLETT DENNE FILEN', //cpg1.3.0
  'size' => '%s x %s piksler',
  'views' => '%s ganger',
  'slideshow' => 'Lysbildeshow',
  'stop_slideshow' => 'STOPP LYSBILDESHOW',
  'view_fs' => 'Klikk for Ã¥ vise bildet i full stÃ¸rrelse',
  'edit_pic' => 'Endre beskrivelse', //cpg1.3.0
  'crop_pic' => 'Klipp eller roter', //cpg1.3.0
);

$lang_picinfo = array(
  'title' =>'Filinformasjon', //cpg1.3.0
  'Filename' => 'Filnavn',
  'Album name' => 'Albumnavn',
  'Rating' => 'Karakter (%s stemmer)',
  'Keywords' => 'NÃ¸kkelord',
  'File Size' => 'FilstÃ¸rrelse',
  'Dimensions' => 'Dimensjoner',
  'Displayed' => 'Visninger',
  'Camera' => 'Kamera',
  'Date taken' => 'Tatt dato',
  'Aperture' => 'BlenderÃ¥pning',
  'Exposure time' => 'Eksponeringstid',
  'Focal length' => 'Brennvidde',
  'Comment' => 'Kommentar',
  'addFav'=>'Legg til i favoritter', //cpg1.3.0
  'addFavPhrase'=>'Favoritter', //cpg1.3.0
  'remFav'=>'Fjern fra favoritter', //cpg1.3.0
  'iptcTitle'=>'IPTC Tittel', //cpg1.3.0
  'iptcCopyright'=>'IPTC Opphavsrett', //cpg1.3.0
  'iptcKeywords'=>'IPTC NÃ¸kkelord', //cpg1.3.0
  'iptcCategory'=>'IPTC Kategori', //cpg1.3.0
  'iptcSubCategories'=>'IPTC Underkategorier', //cpg1.3.0
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Rediger denne kommentaren',
  'confirm_delete' => 'Er du sikker pÃ¥ at du vil slette denne kommentaren?', //js-alert
  'add_your_comment' => 'Legg til din kommentar',
  'name'=>'Navn',
  'comment'=>'Kommentar',
  'your_name' => 'Anonym',
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Klikk pÃ¥ bildet for Ã¥ lukke viduet',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Send et ekort',
  'invalid_email' => '<b>Advarsel</b> : ugyldig epostadresse!',
  'ecard_title' => 'Et ekort fra %s til deg',
  'error_not_image' => 'Bare bilder kan sendes som ekort.', //cpg1.3.0
  'view_ecard' => 'Hvis kortet ikke vises riktig, klikk her',
  'view_more_pics' => 'Klikk pÃ¥ denne linken for flere bilder!',
  'send_success' => 'Ditt ekort ble sendt',
  'send_failed' => 'Beklager, serveren kunne ikke sende Ekortet',
  'from' => 'Fra',
  'your_name' => 'Ditt navn',
  'your_email' => 'Din epostadresse',
  'to' => 'Til',
  'rcpt_name' => 'Mottakers navn',
  'rcpt_email' => 'Mottakers epostadresse',
  'greetings' => 'Hilsen',
  'message' => 'Beskjed',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Filinformasjon', //cpg1.3.0
  'album' => 'Album',
  'title' => 'Tittel',
  'desc' => 'Beskrivelse',
  'keywords' => 'NÃ¸kkelord',
  'pic_info_str' => '%s &ganger; %s - %s KB - %s visninger - %s stemmer',
  'approve' => 'Godkjenn fil', //cpg1.3.0
  'postpone_app' => 'Utsett godkjennelse',
  'del_pic' => 'Slett fil', //cpg1.3.0
  'read_exif' => 'Les EXIF info pÃ¥ nytt', //cpg1.3.0
  'reset_view_count' => 'Tilbakestill visningsteller',
  'reset_votes' => 'Tilakestill avstemmning',
  'del_comm' => 'Slett kommentarer',
  'upl_approval' => 'Opplastingsgodkjennelse',
  'edit_pics' => 'Rediger filer', //cpg1.3.0
  'see_next' => 'Se neste fil', //cpg1.3.0
  'see_prev' => 'Se forrige fil', //cpg1.3.0
  'n_pic' => '%s filer', //cpg1.3.0
  'n_of_pic_to_disp' => 'Antall filer til fremvisning', //cpg1.3.0
  'apply' => 'Lagre endringer', //cpg1.3.0
  'crop_title' => 'Coppermine Picture Editor', //cpg1.3.0
  'preview' => 'ForhÃ¥ndsvisning', //cpg1.3.0
  'save' => 'Lagre', //cpg1.3.0
  'save_thumb' =>'Lagre som miniatyrbilde', //cpg1.3.0
  'sel_on_img' =>'Utvalget mÃ¥ vÃ¦re innenfor bildets utterkanter!', //js-alert //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'SpÃ¸rsmÃ¥l og Svar', //cpg1.3.0
  'toc' => 'Innholdsfortegnelse', //cpg1.3.0
  'question' => 'SpÃ¸rsmÃ¥l: ', //cpg1.3.0
  'answer' => 'Svar: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'General FAQ', //cpg1.3.0
  array('Hvorfor mÃ¥ jeg registrere meg?', 'Registrering kan vÃ¦re pÃ¥krevd av administrator. Registrering gir medlemmene utvidede rettigheter som opplastning av egne filer, registrering av egne favoritter, karaktergivning og kommentering av andres filer etc.', 'allow_user_registration', '0'), //cpg1.3.0
  array('Hvordan registrerer jeg meg?', 'GÃ¥ til &quot;Registrer&quot; og fyll inn de nÃ¸dvendige feltene (alle dersom du Ã¸nsker det).<br />Har Administrator aktivert funksjonen for epost aktivering skal du motta en epost til den adressen du oppga med instruksjoner om hvordan du kan aktivere medlemskapet ditt. Medlemskapet mÃ¥ da aktiveres fÃ¸r du kan logge inn.', 'allow_user_registration', '1'), //cpg1.3.0
  array('Hvordan logger jeg inn?', 'GÃ¥ til &quot;Logg inn&quot;, legg inn ditt brukernavn og passord og marker &quot;Husk meg&quot; slik at du automatisk blir logget inn neste gang dersom du forlater dette nettstedet.<br /><b>VIKTIG:Cookies mÃ¥ vÃ¦re aktivert og cookien fra denne siten kan ikke slettes dersom du vil bruke &quot;Husk meg&quot; funksjonen.</b>', 'offline', 0), //cpg1.3.0
  array('Hvorfor kan jeg ikke logge inn?', 'Har du registrert deg, og klikket pÃ¥ linken sendt til din epostadresse??. Denne linken vil aktivere din konto. For andre innloggingsproblemer kontakt administrator.', 'offline', 0), //cpg1.3.0
  array('Hva skjer dersom jeg mister passordet mitt?', 'Dersom denne siten har en &quot;Glemt passordet?&quot; link kan du bruke den. Ellers kan du kontakte administrator for et nytt passord.', 'offline', 0), //cpg1.3.0
  //array('Hva skjer dersom jeg endrer epostadresse?', 'Bare logg inn og endre epostadressen din gjennom &quot;Min Profil&quot;', 'offline', 0), //cpg1.3.0
  array('Hvordan lagrer jeg en fil i &quot;Mine Favoritter&quot;?', 'Klikk pÃ¥ en fil, og klikk sÃ¥ pÃ¥ &quot;Vis/skjul filinformasjon&quot; linken (<img src="images/info.gif" width="16" height="16" border="0" alt="Picture information" />); Skroll ned til filinformasjonen, og klikk &quot; Legg til i favoritter&quot;.<br />Administrator kan allerede ha slÃ¥tt pÃ¥ &quot;Vis/skjul filinformasjon&quot;.<br />VIKTIG:Cookies mÃ¥ vÃ¦re aktivert og cookiene fra denne sitem kan ikke slettes.', 'offline', 0), //cpg1.3.0
  array('Hvordan gir jeg karakterer til en fil?', 'Klikk pÃ¥ et miniatyrbilde, gÃ¥ nederst og velg en karakter.', 'offline', 0), //cpg1.3.0
  array('Hvordan kommenterer jeg en fil?', 'Klikk pÃ¥ et miniatyrbilde gÃ¥ nederst og legg inn en kommentar.', 'offline', 0), //cpg1.3.0
  array('Hvordan laster jeg opp en fil?', 'GÃ¥ til &quot;Last opp fil&quot; og velg et album du vil laste opp til, klikk pÃ¥ &quot;Browse&quot;, finn filen som to lastes opp og klikk &quot;open&quot;, (legg til en tittel og en beskrivelse om du vil). Klikk sÃ¥ &quot;Submit&quot;', 'allow_private_albums', 0), //cpg1.3.0
  array('Hvor havner filene jeg laster opp?', 'Du kan laste opp en fil til en av dine album i &quot;Mitt Galleri&quot;. Administrator ka ogsÃ¥ tilllate deg Ã¥ laste opp filer til en eller flere av de andre albumene i galleriet.', 'allow_private_albums', 0), //cpg1.3.0
  array('Hvilke typer filer og i hvilke stÃ¸rrelser kan jeg laste opp?', 'Tillatte filstÃ¸rrelser og filtyper (jpg, png, etc.) bestemmes av administrator.', 'offline', 0), //cpg1.3.0
  array('Hva er &quot;Mitt Galleri&quot;?', '&quot;Mitt Galleri&quot; er et personlig galleri du kan laste opp til og administrere selv.', 'allow_private_albums', 0), //cpg1.3.0
  array('Hvordan lager, endrer eller sletter jeg album i &quot;Mitt Galleri&quot;?', 'Du mÃ¥ enable &quot;Adminmodus&quot;<br />GÃ¥ sÃ¥ til &quot;Opprett / ordne mine album&quot;and klikk &quot;Ny&quot;. Endre &quot;Nytt Album&quot; til ditt nye navn.<br />Du kan endre navn pÃ¥ alle album i ditt galleri.<br />Klikk &quot;Lagre endringer&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Hvordan kan jeg endre og begrense brukere som kan se mine album?', 'Du mÃ¥ enable &quot;Adminmodus&quot;<br />GÃ¥ til &quot;Endre Mine Album. PÃ¥ &quot;Oppdater album&quot; linjen, velg albumet du vil endre.<br />Her kan du endre navn, beskrivelse, miniatyrbilde, begrense tilgang og kommentar/karaktertillatelser.<br />Klikk &quot;Oppdater album&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Hvordan kan jeg se andre brukeres gallerier?', 'GÃ¥ til &quot;Albumliste&quot; og velg &quot;Brukergallerier&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Hva er cookies?', 'Cookies er tekstdata som blir sendt fra et nettsted som blir lagret pÃ¥ din datamaskin.<br />Cookies sÃ¸rger normalt for at en bruker kan returnere til nettstedet uten Ã¥ mÃ¥tte logge inn igjen m.m.', 'offline', 0), //cpg1.3.0
  array('Hvor kan jeg finne dette programmet til mitt eget nettsted?', 'Coppermine er et gratis multimediagalleri, utgitt under GNU GPL lisens. Det er full av funksjoner, og har blitt oversatt til diverse andre platformer. BesÃ¸k <a href="http://coppermine.sf.net/">Copperminea hjemmeside</a> for Ã¥ finne ut mer, og for Ã¥ laste ned.', 'offline', 0), //cpg1.3.0

  'Navigating the Site', //cpg1.3.0
  array('Hva er &quot;Albumliste&quot;?', 'Dette vil vise deg hele kategorien du befinner deg i, med en link til hvert album. Dersom du ikke er i en kategori viser det hele galleriet med en link til hver kategori. Miniatyrbilder kan vÃ¦re en link til kategorien.', 'offline', 0), //cpg1.3.0
  array('Hva er &quot;Mitt Galleri&quot;?', 'Dette lar brukere lage deres egne gallerier og legge til, slette eller endre album.', 'allow_private_albums', 0), //cpg1.3.0
  array('Hva er forskjellen mellom &quot;Adminmodus&quot; og &quot;Brukermodus&quot;?', 'I adminmodus las brukeren endre deres egne gallerier (eller andres dersom brukeren er en administrator).', 'allow_private_albums', 0), //cpg1.3.0
  array('Hva er &quot;Last opp fil&quot;?', 'Dette lar brukeren laste opp filer (stÃ¸rrelse og type er bestemt av administrator) til et galleri valgt enten av brukeren eller av administrator.', 'allow_private_albums', 0), //cpg1.3.0
  array('Hva er &quot;Siste opplastninger&quot;?', 'Dette viser galleriets sist opplastede filer.', 'offline', 0), //cpg1.3.0
  array('Hva er &quot;Siste kommentarer&quot;?', 'Dette viser de seneste filene noen brukere har lagt inn kommentar pÃ¥.', 'offline', 0), //cpg1.3.0
  array('Hva er &quot;Mest sett&quot;?', 'Dette viser de filene som er mest sett av brukere (enten de er logget pÃ¥ eller ikke).', 'offline', 0), //cpg1.3.0
  array('Hva er &quot;Beste karakter&quot;?', 'Dette viser de filene som har fÃ¥tt best karakter av andre brukere. Det viser gjennomsnittelig karaktaer  (f.eks: fem brukere ga <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: da ville filen ha gjennomsnittelig karakter: <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;Fem brukere gav filer karakter fra 1 til 5 (1,2,3,4,5), dette ville da gjennomsnittelig gi: <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />Karakterene gÃ¥r fra <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (best) il <img src="images/rating0.gif" width="65" height="14" border="0" alt="verst" /> (verst).', 'offline', 0), //cpg1.3.0
  array('Hva er &quot;Mine Favoritter&quot;?', 'Dette gir brukerne anledning til Ã¥ lagre favorittfiler i cookien som blir sendt til datamaskinen din.', 'offline', 0), //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'PassordpÃ¥minnelse', //cpg1.3.0
  'err_already_logged_in' => 'Du er allerede logget inn !', //cpg1.3.0
  'enter_username_email' => 'Skriv inn ditt brukernavn eller epostadresse', //cpg1.3.0
  'submit' => 'OK', //cpg1.3.0
  'failed_sending_email' => 'PassordpÃ¥minnelsen kan ikke sendes!', //cpg1.3.0
  'email_sent' => 'En epost med ditt brukernavn og passord ble sendt til %s', //cpg1.3.0
  'err_unk_user' => 'Valgte bruker eksisterer ikke!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - PassordpÃ¥minnelse', //cpg1.3.0
  'passwd_reminder_body' => 'Du har etterspurt en pÃ¥minnelse av dine innloggingsdata:
Brukernavn: %s
Passord: %s
Klikk %s for Ã¥ logge inn.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Gruppenavn',
  'disk_quota' => 'Diskkvote',
  'can_rate' => 'Kan gi karakter til filer', //cpg1.3.0
  'can_send_ecards' => 'Kan sende ekort',
  'can_post_com' => 'Kan kommentere filer',
  'can_upload' => 'Kan laste opp filer', //cpg1.3.0
  'can_have_gallery' => 'Kan ha personlige gallerier',
  'apply' => 'Lagre endringer',
  'create_new_group' => 'Lag ny gruppe',
  'del_groups' => 'Slett valgte gruppe(r)',
  'confirm_del' => 'Advarsel, nÃ¥r du sletter en gruppe vil brukerne som tilhÃ¸rer denne gruppen bli overfÃ¸rt til gruppen kalt \'Registered\' !\n\nVil du fortsette?', //js-alert //cpg1.3.0
  'title' => 'Administrer brukergrupper',
  'approval_1' => 'Rett til offentlig opplastning (1)',
  'approval_2' => 'Rett til privat opplastning (2)',
  'upload_form_config' => 'Last opp skjemakonfigurasjon', //cpg1.3.0 // translcomment: (Upload form configuration) need context
  'upload_form_config_values' => array( 'Single file uploads only', 'Multiple file uploads only', 'URI uploads only', 'ZIP upload only', 'File-URI', 'File-ZIP', 'URI-ZIP', 'File-URI-ZIP'), //cpg1.3.0
  'custom_user_upload'=>'Bruker kan tilpasse antall opplastningsbokser?', //cpg1.3.0
  'num_file_upload'=>'Maksimalt/nÃ¸yaktig antall filopplastningsbokser', //cpg1.3.0
  'num_URI_upload'=>'Maksimalt/nÃ¸yaktig antall URLopplastningsbokser', //cpg1.3.0
  'note1' => '<b>(1)</b> Opplastninger til et offentlig album trenger godkjennelse av administrator',
  'note2' => '<b>(2)</b> Opplastninger til en brukers eget album trenger godkjennelse av administrator',
  'notes' => 'Notater',
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Velkommen !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Er du sikker pÃ¥ at tu vil SLETTE dette albumet? \\nAlle filer og kommentarer vil ogsÃ¥ bli slettet.', //js-alert //cpg1.3.0
  'delete' => 'SLETT',
  'modify' => 'EGENSKAPER',
  'edit_pics' => 'OPPDATER FILER', //cpg1.3.0
);

$lang_list_categories = array(
  'home' => 'Hjem',
  'stat1' => '<b>[pictures]</b> filer i <b>[albums]</b> album og <b>[cat]</b> kategorier med <b>[comments]</b> kommentarer sett <b>[views]</b> ganger', //cpg1.3.0
  'stat2' => '<b>[pictures]</b> filer i <b>[albums]</b> album sett <b>[views]</b> ganger', //cpg1.3.0
  'xx_s_gallery' => '%s\'s Galleri',
  'stat3' => '<b>[pictures]</b> filer i <b>[albums]</b> album med <b>[comments]</b> kommentarer sett <b>[views]</b> ganger', //cpg1.3.0
);

$lang_list_users = array(
  'user_list' => 'Brukerliste',
  'no_user_gal' => 'Det er ingen tilgjengelige brukergallerier',
  'n_albums' => '%s album',
  'n_pics' => '%s fil(er)', //cpg1.3.0
);

$lang_list_albums = array(
  'n_pictures' => '%s filer', //cpg1.3.0
  'last_added' => ', siste lagt til den %s',
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Log inn',
  'enter_login_pswd' => 'Skriv brukernavn og passord for Ã¥ logge inn',
  'username' => 'Brukernavn',
  'password' => 'Passord',
  'remember_me' => 'Husk meg',
  'welcome' => 'Velkommen %s ...',
  'err_login' => '*** Kunne ikke logge deg inn. PrÃ¸v igjen ***',
  'err_already_logged_in' => 'Du er allerede logget inn !',
  'forgot_password_link' => 'Glemt passordet?', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Logg ut',
  'bye' => 'PÃ¥ gjensyn %s ...',
  'err_not_loged_in' => 'Du er ikke logget inn !',
);

// ------------------------------------------------------------------------- //
// File phpinfo.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP informasjon', //cpg1.3.0
  'explanation' => 'Dette er generert av PHP-funksjonen <a href="http://www.php.net/phpinfo">phpinfo()</a>, her vist inne i Coppermine (kuttet litt ved hÃ¸yre hjÃ¸rne).', //cpg1.3.0
  'no_link' => 'Ã… la andre se din phpinfo kan vÃ¦re en sikkerhetsrisiko, derfor er denne siden bare mulig Ã¥ se nÃ¥r du er logget inn som admin. Du kan ikke sende en link til denne siden for andre, de vil bli nektet adgang.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Oppdater album %s',
  'general_settings' => 'Generelle innstillinger',
  'alb_title' => 'Albumtittel',
  'alb_cat' => 'Albumkategori',
  'alb_desc' => 'Albumbeskrivelse',
  'alb_thumb' => 'Miniatyrbilde for album',
  'alb_perm' => 'Tillatelser for dette album',
  'can_view' => 'Dette album kan ses av',
  'can_upload' => 'BesÃ¸kende kan laste opp filer',
  'can_post_comments' => 'BesÃ¸kende kan kommentere filer',
  'can_rate' => 'BesÃ¸kende kan gi filer karakter',
  'user_gal' => 'Brukergalleri',
  'no_cat' => '* Ingen kategori *',
  'alb_empty' => 'Album er tomt',
  'last_uploaded' => 'Sist lastet opp',
  'public_alb' => 'Alle (offentlig album)',
  'me_only' => 'Kun meg',
  'owner_only' => 'Kun albumeier (%s)',
  'groupp_only' => 'Medlemmer av \'%s\' gruppen',
  'err_no_alb_to_modify' => 'Det er ingen tilgjengelige album du kan redigere.',
  'update' => 'Oppdater album', //cpg1.3.0
  'notice1' => '(*) avhengig av %sgroups%s innstillinger', //cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Du har allerede gitt denne filen karakter', //cpg1.3.0
  'rate_ok' => 'Din stemme ble akseptert',
  'forbidden' => 'Du kan ikke gi karakter til dine egne filer.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Selv om administratoren(e) av {SITE_NAME} vil prÃ¸ve Ã¥ fjerne eller redigere stÃ¸tende materiale umiddelbart , kan det ofte vÃ¦re umulig Ã¥ gÃ¥ igjennom alt som legges inn.Derfor mÃ¥ du godta at det som legges inn her bare reflekterer meninger og holdninger til brukerne selv og ikke til administratoren(e) eller webmasteren(e) (Bortsett fra materiale disse selv har lagt inn.) disse kan derfor ikke holdes ansvarlig.<br />
<br />
Du godtar Ã¥ ikke legge inn noe materiale som kan virke stÃ¸tende pÃ¥ noen mÃ¥te, eller som pÃ¥ noen mÃ¥te kan vÃ¦re lovstridig. Herunder fornÃ¦rmelig, uanstendig, vulgÃ¦r, Ã¦reskrenkende, forhatt, truende, seksuelt orientert eller noe annet materiale som kan krenke enhver gjeldende lov. Du godtar at webmaster, administrator og andre moderatorer av {SITE_NAME} nÃ¥r som helst har rett til Ã¥ fjerne eller redigere alt innhold dersom de Ã¸nsker. Som bruker godtar du at all informasjon du har lagt inn over blir lagret i en database. Selv om denne informasjonen ikke vil bli gitt til noen tredje part uten ditt samtykke, kan ikke webmaster eller administrator bli holdt ansvarlig dersom hacking eller annet skulle fÃ¸re til at slik informasjon skulle bli tilgjengelig.<br />
<br />
Dette nettstedet bruker cookies for Ã¥ lagre informasjon pÃ¥ din lokale datamaskin. Disse cookies er bare for Ã¥ bedre opplevelsen for deg. Epostadressen blir kun brukt til Ã¥ bekrefte din registrering, og til Ã¥ sende passord..<br />
<br />
Ved Ã¥ trykke pÃ¥ 'Jeg aksepterer' under sier du deg enig i disse punktene.
EOT;

$lang_register_php = array(
  'page_title' => 'Registrering av ny bruker',
  'term_cond' => 'Regler og betingelser',
  'i_agree' => 'Jeg aksepterer',
  'submit' => 'Send registrering',
  'err_user_exists' => 'Brukernavnet finnes allerede. Velg et annet',
  'err_password_mismatch' => 'Passordene var ikke like, skriv dem inn pÃ¥ ny',
  'err_uname_short' => 'Brukernavnet var for kort. MÃ¥ vÃ¦re pÃ¥ minimum 2 tegn',
  'err_password_short' => 'Passordet var for kort. MÃ¥ vÃ¦re pÃ¥ minimum 2 tegn',
  'err_uname_pass_diff' => 'Brukernavn og passord mÃ¥ vÃ¦re forskjellige',
  'err_invalid_email' => 'Epostadressen er ugyldig',
  'err_duplicate_email' => 'En annen bruker er allerede oppfÃ¸rt med denne epostadressen',
  'enter_info' => 'Legg inn registreringsinfo',
  'required_info' => 'PÃ¥krevd informasjon',
  'optional_info' => 'Valgfri informasjon',
  'username' => 'Brukernavn',
  'password' => 'Passord',
  'password_again' => 'Gjenta passord',
  'email' => 'Epost',
  'location' => 'Sted',
  'interests' => 'Interesser',
  'website' => 'Hjemmeside',
  'occupation' => 'Stilling',
  'error' => 'FEIL',
  'confirm_email_subject' => '%s - bekreftelse av registrering',
  'information' => 'Informasjon',
  'failed_sending_email' => 'Godkjennelseseposten kan ikke sendes!',
  'thank_you' => 'Takk for din registrering.<br /><br />En e-post er sendt til deg der du mÃ¥ aktivere din konto.',
  'acct_created' => 'Din konto er nÃ¥ opprettet og du kan logge inn med ditt brukernavn og passord',
  'acct_active' => 'Din konto er nÃ¥ aktiv og du kan logge pÃ¥ med ditt brukernavn og passord',
  'acct_already_act' => 'Din konto er allerede aktiv!',
  'acct_act_failed' => 'Denne kontoen kan ikke aktiveres!',
  'err_unk_user' => 'Den valgte brukeren eksisterer ikke!',
  'x_s_profile' => '%ss profil',
  'group' => 'Gruppe',
  'reg_date' => 'Tilsluttet',
  'disk_usage' => 'Diskforbruk',
  'change_pass' => 'Bytt passord',
  'current_pass' => 'NÃ¥vÃ¦rende passord',
  'new_pass' => 'Nytt passord',
  'new_pass_again' => 'Nytt passord en gang til',
  'err_curr_pass' => 'NÃ¥vÃ¦rende passord er feil',
  'apply_modif' => 'UtfÃ¸r endringer',
  'change_pass' => 'Bytt mitt passord',
  'update_success' => 'Din profil ble oppdatert',
  'pass_chg_success' => 'Ditt passord ble endret',
  'pass_chg_error' => 'Ditt passord ble ikke endret',
  'notify_admin_email_subject' => '%s - Registreringsvarsling', //cpg1.3.0
  'notify_admin_email_body' => 'En ny bruker med brukernavn "%s" er registrert i ditt galleri', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
Takk for din registrering hos {SITE_NAME}

Ditt brukernavn er : "{USER_NAME}"
Ditt passord er : "{PASSWORD}"

For Ã¥ aktivere din konto mÃ¥ du klikke pÃ¥ linken under eller lime den inn i din nettleser.

{ACT_LINK}

Vennlig hilsen,

Administrasjonen av - {SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'Se igjennom kommentarer',
  'no_comment' => 'Der er ingen kommentarer Ã¥ se igjennom',
  'n_comm_del' => '%s kommentar(er) slettet',
  'n_comm_disp' => 'Antall kommentarer Ã¥ vise',
  'see_prev' => 'Se forrige',
  'see_next' => 'Se neste',
  'del_comm' => 'Slett valgte kommentarer',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
  0 => 'SÃ¸k i filsamlingen',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'SÃ¸k etter nye filer', //cpg1.3.0
  'select_dir' => 'Velg katalog',
  'select_dir_msg' => 'Denne funksjonen tillater deg og legge inn filer du har lastet opp via FTP.<br /><br />Velg katalogen du har lastet opp filer i', //cpg1.3.0
  'no_pic_to_add' => 'Det finnes ingen filer Ã¥ legge til', //cpg1.3.0
  'need_one_album' => 'Du mÃ¥ ha minst ett album for Ã¥ bruke denne funksjonen',
  'warning' => 'Advarsel',
  'change_perm' => 'systemet kan ikke skrive til denne katalogen, du mÃ¥ endre rettigheter med CHMOD 755 eller 777 fÃ¸r du prÃ¸ver igjen!', //cpg1.3.0
  'target_album' => '<b>Flytt bilder av &quot;</b>%s<b>&quot; til </b>%s', //cpg1.3.0
  'folder' => 'Katalog',
  'image' => 'fil',
  'album' => 'Album',
  'result' => 'Resultat',
  'dir_ro' => 'Ikke skrivbar. ',
  'dir_cant_read' => 'Ikke lesbar. ',
  'insert' => 'Legger inn nye filer i galleriet', //cpg1.3.0
  'list_new_pic' => 'Liste over nye filer', //cpg1.3.0
  'insert_selected' => 'Sett inn valgte filer', //cpg1.3.0
  'no_pic_found' => 'Ingen nye fileR ble funnet', //cpg1.3.0
  'be_patient' => 'Ha litt tÃ¥lmodighet, systemet arbeider nÃ¥ med Ã¥ legge inn bildene', //cpg1.3.0
  'no_album' => 'ingen album valgt',  //cpg1.3.0
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : Betyr at filen er lagt inn'.
                          '<li><b>DP</b> : Betyr at filen er en dublett og allerede ligger i databasen'.
                          '<li><b>PB</b> : Betyr at filen ikke kan legges inn, sjekk konfigurasjon og tillatelser til katalogen bildene ligger i'.
                          '<li><b>NA</b> : Betyr at du ikke har valgt et album for filene, trykk \'<a href="javascript:history.back(1)">tilbake</a>\' og velg et album. Dersom du ikke har noen album, <a href="albmgr.php">lag et fÃ¸rst</a></li>'.
                          '<li>Dersom OK, DP, PB \'signs\' ikke kommer fram, klikk pÃ¥ det manglende bildet for Ã¥ se eventuelle feilmeldinger laget av PHP'.
                          '<li>Hvis din nettleser timer ut, klikk pÃ¥ oppdater-knappen'.
                          '</ul>', //cpg1.3.0
  'select_album' => 'velg album', //cpg1.3.0
  'check_all' => 'Marker alle', //cpg1.3.0
  'uncheck_all' => 'Avmarker alle', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Utvis brukere',
  'user_name' => 'Brukernavn',
  'ip_address' => 'IPadresse',
  'expiry' => 'UtgÃ¥r (blankt felt er permanent)',
  'edit_ban' => 'Lagre endringer',
  'delete_ban' => 'Slett',
  'add_new' => 'Utvis ny bruker',
  'add_ban' => 'Utvis bruker',
  'error_user' => 'Finner ikke bruker', //cpg1.3.0
  'error_specify' => 'Du mÃ¥ spesifisere enten en bruker, eller en IPadresse', //cpg1.3.0
  'error_ban_id' => 'Ugyldig utvisningsID!', //cpg1.3.0
  'error_admin_ban' => 'Du kan ikke vise ut deg selv!', //cpg1.3.0
  'error_server_ban' => 'Du holdt pÃ¥ Ã¥ vise ut din egen server. Tsk tsk, det kan du jo ikke gjÃ¸re...', //cpg1.3.0
  'error_ip_forbidden' => 'Du kan ikke vise ut denne IPadressen. Den er ikke rutbar!', //cpg1.3.0
  'lookup_ip' => 'SlÃ¥ opp en IPadresse', //cpg1.3.0
  'submit' => 'OK!', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Last opp fil', //cpg1.3.0
  'custom_title' => 'Skreddersydd skjema', //cpg1.3.0
  'cust_instr_1' => 'Spesifiser valgfritt antall opplastningsbokser, men ikke mer enn spesifisert nedenfor.', //cpg1.3.0
  'cust_instr_2' => 'BoksnummerforespÃ¸rsel', //cpg1.3.0 // translcomment: Nedd to see context
  'cust_instr_3' => 'Fileopplastningsbokser: %s', //cpg1.3.0
  'cust_instr_4' => 'URI/URL opplastningsbokser: %s', //cpg1.3.0
  'cust_instr_5' => 'URI/URL opplastningsbokser:', //cpg1.3.0
  'cust_instr_6' => 'Filopplastningsbokser:', //cpg1.3.0
  'cust_instr_7' => 'Skriv inn antall opplastningsbokser for hver type. Klikk sÃ¥ \'Fortsett\'. ', //cpg1.3.0
  'reg_instr_1' => 'Ugyldig handling for skjema.', //cpg1.3.0
  'reg_instr_2' => 'NÃ¥ kan du laste opp filene dine med opplastningsboksene nedenfor. StÃ¸rrelsen pÃ¥ filene som lastes opp fra klienten din til serveren kan ikke overstige %s KB hver. ZIPfiler lastet opp i \'Filopplastninger\' og \'URI/URL opplastninger\' boksene vil forbli pakket.', //cpg1.3.0
  'reg_instr_3' => 'Dersom du vil pakke ut en ZIPfil mÃ¥ du bruke filopplastningsboksen \'ZIPopplastninger Ã¥ pakke ut\'.', //cpg1.3.0
  'reg_instr_4' => 'NÃ¥r du bruker URI/URL opplastninger,skriv inn stien som dette: http://www.mysite.com/images/example.jpg', //cpg1.3.0
  'reg_instr_5' => 'NÃ¥r du har fylt ut skjemaet, trykk \'Fortsett\'.', //cpg1.3.0
  'reg_instr_6' => 'ZIPopplastninger Ã¥ pakke ut:', //cpg1.3.0
  'reg_instr_7' => 'Filopplastninger:', //cpg1.3.0
  'reg_instr_8' => 'URI/URL opplastninger:', //cpg1.3.0
  'error_report' => 'Feilrapport', //cpg1.3.0
  'error_instr' => 'FÃ¸lgende opplastning genererte feil:', //cpg1.3.0
  'file_name_url' => 'Filnavn/URL', //cpg1.3.0
  'error_message' => 'Feilmelding', //cpg1.3.0
  'no_post' => 'Ingen fil lastet opp av POST.', //cpg1.3.0
  'forb_ext' => 'Avvist filending.', //cpg1.3.0
  'exc_php_ini' => 'Overskridelse av filstÃ¸rrelse tillatt i php.ini.', //cpg1.3.0
  'exc_file_size' => 'Overskridelse av filstÃ¸rrelse tillatt av Coppermine.', //cpg1.3.0
  'partial_upload' => 'Delvis opplastning utfÃ¸rt.', //cpg1.3.0
  'no_upload' => 'Ingen opplastning utfÃ¸rt.', //cpg1.3.0
  'unknown_code' => 'Ukjent PHP opplastningsfeilkode.', //cpg1.3.0
  'no_temp_name' => 'Ingen opplastning - Ingen midlertidig navn.', //cpg1.3.0
  'no_file_size' => 'Inneholder ingen data/Ã¸delagt', //cpg1.3.0
  'impossible' => 'Umulig Ã¥ flytte.', //cpg1.3.0
  'not_image' => 'Ikke et bilde/Ã¸delagt', //cpg1.3.0
  'not_GD' => 'Ikke en GD extension.', //cpg1.3.0
  'pixel_allowance' => 'Antall piksler overskredet.', //cpg1.3.0
  'incorrect_prefix' => 'Feil URI/URL prefiks', //cpg1.3.0
  'could_not_open_URI' => 'Kunne ikke Ã¥pne URI.', //cpg1.3.0
  'unsafe_URI' => 'Sikkerhet kunne ikke verifiseres.', //cpg1.3.0
  'meta_data_failure' => 'Metadatafeil', //cpg1.3.0
  'http_401' => '401 Uautorisert', //cpg1.3.0
  'http_402' => '402 Betaling pÃ¥krevd', //cpg1.3.0
  'http_403' => '403 Avvist', //cpg1.3.0
  'http_404' => '404 Ikke funnet', //cpg1.3.0
  'http_500' => '500 Intern feil pÃ¥ server', //cpg1.3.0
  'http_503' => '503 Tjeneste utilgjengelig', //cpg1.3.0
  'MIME_extraction_failure' => 'MIMEtype kunne ikke detekteres.', //cpg1.3.0
  'MIME_type_unknown' => 'Ukjent MIMEtype', //cpg1.3.0
  'cant_create_write' => 'Kan ikke opprette fil.', //cpg1.3.0
  'not_writable' => 'Kan ikke skrive til fil.', //cpg1.3.0
  'cant_read_URI' => 'Kan ikke lese URI/URL', //cpg1.3.0
  'cant_open_write_file' => 'Kan ikke Ã¥pne URI fil.', //cpg1.3.0
  'cant_write_write_file' => 'Kan ikke skrive til URI fil.', //cpg1.3.0
  'cant_unzip' => 'Kan ikke pakke ut.', //cpg1.3.0
  'unknown' => 'Ukjent feil', //cpg1.3.0
  'succ' => 'Opplastning utfÃ¸rt', //cpg1.3.0
  'success' => '%s opplastninger utfÃ¸rt.', //cpg1.3.0
  'add' => 'Klikk \'Fortsett\' for Ã¥ legge filene til album.', //cpg1.3.0
  'failure' => 'Feil ved opplastning', //cpg1.3.0
  'f_info' => 'Filinformasjon', //cpg1.3.0
  'no_place' => 'Den forrige filen kunne ikke plassseres.', //cpg1.3.0
  'yes_place' => 'Den forrige filen ble plasssert.', //cpg1.3.0
  'max_fsize' => 'Maksimum tillatt filstÃ¸rrelse er %s KB',
  'album' => 'Album',
  'picture' => 'Fil', //cpg1.3.0
  'pic_title' => 'Filtittel', //cpg1.3.0
  'description' => 'Filbeskrivelse', //cpg1.3.0
  'keywords' => 'NÃ¸kkelord (separate ord med mellomrom)',
  'err_no_alb_uploadables' => 'Beklager, det er ingen tilgjengelige album du kan laste opp filer i', //cpg1.3.0
  'place_instr_1' => 'Legg filene i album. Du kan ogsÃ¥ legge inn relevant informasjon om hver fil.', //cpg1.3.0
  'place_instr_2' => 'Flere filer trenger plassering. Klikk \'Fortsett\'.', //cpg1.3.0
  'process_complete' => 'Du har plassert alle filene.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'title' => 'Administrer brukere',
  'name_a' => 'Navn i stigende rekkefÃ¸lge',
  'name_d' => 'Navn i synkende rekkefÃ¸lge',
  'group_a' => 'Grupper i stigende rekkefÃ¸lge',
  'group_d' => 'Grupper i synkende rekkefÃ¸lge',
  'reg_a' => 'Registreringsdato i stigende rekkefÃ¸lge',
  'reg_d' => 'Registreringsdato i synkende rekkefÃ¸lge',
  'pic_a' => 'Antall filer i stigende rekkefÃ¸lge',
  'pic_d' => 'Antall filer i synkende rekkefÃ¸lge',
  'disku_a' => 'Diskforbruk i stigende rekkefÃ¸lge',
  'disku_d' => 'Diskforbruk i synkende rekkefÃ¸lge',
  'lv_a' => 'Siste besÃ¸k i stigende rekkefÃ¸lge', //cpg1.3.0
  'lv_d' => 'Siste besÃ¸k i synkende rekkefÃ¸lge', //cpg1.3.0
  'sort_by' => 'Sorter brukere etter',
  'err_no_users' => 'Brukertabellen er tom!',
  'err_edit_self' => 'Du kan ikke redigere din profil her, bruk \'Min profil\' linken til dette formÃ¥let',
  'edit' => 'REDIGER',
  'delete' => 'SLETT',
  'name' => 'Brukernavn',
  'group' => 'Gruppe',
  'inactive' => 'Ikke aktiv',
  'operations' => 'Handlinger',
  'pictures' => 'Filer', //cpg1.3.0
  'disk_space' => 'Diskplass brukt / Kvote',
  'registered_on' => 'Registrert den',
  'last_visit' => 'Siste besÃ¸k', //cpg1.3.0
  'u_user_on_p_pages' => '%d brukere over %d side(r)',
  'confirm_del' => 'Er du sikker pÃ¥ du vil SLETTE denne brukeren? \\nAlle filer og album vil ogsÃ¥ bli slettet.', //js-alert //cpg1.3.0
  'mail' => 'POST',
  'err_unknown_user' => 'Den valgte brukeren eksisterer ikke!',
  'modify_user' => 'Rediger bruker',
  'notes' => 'Notater',
  'note_list' => '<li>Dersom du ikke vil endre det gjeldende passordet, la feltet "passord" stÃ¥ tomt',
  'password' => 'Passord',
  'user_active' => 'Brukeren er aktiv',
  'user_group' => 'Brukergruppe',
  'user_email' => 'Brukers epost',
  'user_web_site' => 'Brukers hjemmeside',
  'create_new_user' => 'Opprett ny bruker',
  'user_location' => 'Brukerens plassering',
  'user_interests' => 'Brukerens interesser',
  'user_occupation' => 'Brukerens yrke',
  'latest_upload' => 'Siste opplastninger', //cpg1.3.0
  'never' => 'aldri', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
  'title' => 'AdministrasjonsverktÃ¸y', //cpg1.3.0
  'what_it_does' => 'Hva det gjÃ¸r',
  'what_update_titles' => 'Oppdater titler fra bildenavn',
  'what_delete_title' => 'Slett titler',
  'what_rebuild' => 'Gjennoppbygger miniatyrbilder og endrede bilder',
  'what_delete_originals' => 'Sletter originalbilder og bytter disse med den versjonen du har endret stÃ¸rrelsen pÃ¥',
  'file' => 'Fil',
  'title_set_to' => 'tittel settes til',
  'submit_form' => 'Send',
  'updated_succesfully' => 'oppdateringen var vellykket',
  'error_create' => 'FEIL under opprettelse av',
  'continue' => 'Fortsett Ã¥ behandle bilder',
  'main_success' => 'Filen %s ble brukt som hovedbilde', //cpg1.3.0
  'error_rename' => 'Feil ved navnebytte av %s til %s',
  'error_not_found' => 'Filen %s ble ikke funnet',
  'back' => 'tilbake til hovedsiden',
  'thumbs_wait' => 'Oppdaterer bilder... vennligst vent...',
  'thumbs_continue_wait' => 'Fortsetter oppdateringen av bilder...',
  'titles_wait' => 'Oppdaterer titler, vennligst vent...',
  'delete_wait' => 'Sletter titler, vennligst vent...',
  'replace_wait' => 'Sletter originalbilder og erstatter dem med endrede bilder, vennligst vent...',
  'instruction' => 'Hurtiginstruksjoner',
  'instruction_action' => 'Velg handling',
  'instruction_parameter' => 'Sett parameter',
  'instruction_album' => 'Velg album',
  'instruction_press' => 'Trykk %s',
  'update' => 'Oppdater bilder',
  'update_what' => 'Hva skal oppdateres',
  'update_thumb' => 'Kun miniatyrbilder',
  'update_pic' => 'Kun endrede bilder',
  'update_both' => 'BÃ¥de miniatyrbilder og endrede bilder',
  'update_number' => 'Antall behandlede bilder pr. klikk',
  'update_option' => '(PrÃ¸v Ã¥ sette denne instillingen lavere om du fÃ¥r time-out i nettleseren)',
  'filename_title' => 'Filnavn &rArr; Tittel pÃ¥ bilde', //cpg1.3.0
  'filename_how' => 'Hvordan skal filnavnet modifiseres',
  'filename_remove' => 'Fjern .jpg endelsen og bytt ut _(understrek) med mellomrom',
  'filename_euro' => 'Endre 2003_11_23_13_20_20.jpg to 23/11/2003 13:20',
  'filename_us' => 'Endre 2003_11_23_13_20_20.jpg to 11/23/2003 13:20',
  'filename_time' => 'Endre 2003_11_23_13_20_20.jpg to 13:20',
  'delete' => 'Slett bildetitler eller bilder i originalstÃ¸rrelse', //cpg1.3.0
  'delete_title' => 'Slett bildetitler', //cpg1.3.0
  'delete_original' => 'Slett bilder i originalstÃ¸rrelse',
  'delete_replace' => 'Sletter de originale bildene og bytter dem ut med de endrede utgavene',
  'select_album' => 'Velg album',
  'delete_orphans' => 'Slett kommentarer som ikke lenger er linket til bilder (gjelder alle album)', //cpg1.3.0
  'orphan_comment' => 'kommentarer som ikke lenger er linket til bilder ble funnet', //cpg1.3.0
  'delete' => 'Slett', //cpg1.3.0
  'delete_all' => 'Slett alle', //cpg1.3.0
  'comment' => 'Kommetar: ', //cpg1.3.0
  'nonexist' => 'vedlagt til en ikkeeksisterende fil # ', //cpg1.3.0
  'phpinfo' => 'Vis phpinfo', //cpg1.3.0
  'update_db' => 'Oppdater database', //cpg1.3.0
  'update_db_explanation' => 'Dersom du har byttet ut Copperminefiler, lagt til endringer eller oppgradert fra en tidligere versjon av Coppermine, pass pÃ¥ Ã¥ kjÃ¸re databaseoppdateringen Ã©n gang. Dette vil opprette de nÃ¸dvendige tabeller og/eller konfigurasjonsverdier i din database.', //cpg1.3.0
);

?>

