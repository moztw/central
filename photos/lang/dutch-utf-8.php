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
// ENCODING CHECK; SHOULD BE YEN BETA MU: ¥ ß µ
// ------------------------------------------------------------------------- //
// CVS version: $Id: dutch-utf-8.php,v 1.11 2004/12/29 23:03:48 chtito Exp $
// ------------------------------------------------------------------------- //

// info about translators and translated language
$lang_translation_info = array( 
'lang_name_english' => 'Dutch',  
'lang_name_native' => 'Nederlands', 
'lang_country_code' => 'nl', 
'trans_name'=> 'Ron Bos', //the name of the translator - can be a nickname 
'trans_email' => 'ron@ronbos.nl', //translator's email address (optional) 
'trans_website' => 'http://www.ronbos.nl/', //translator's website (optional) 
'trans_date' => '2004-4-12', //the date the translation was created / last modified 
); 

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('zon', 'maa', 'din', 'woe', 'don', 'vri', 'zat');
$lang_month = array('jan', 'feb', 'mrt', 'apr', 'mei', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'dec');

// Some common strings
$lang_yes = 'Ja';
$lang_no  = 'Nee';
$lang_back = 'TERUG';
$lang_continue = 'DOORGAAN';
$lang_info = 'Informatie';
$lang_error = 'Fout';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%d %B %Y';
$lastcom_date_fmt =  '%d-%m-%y om %H:%M';
$lastup_date_fmt = '%d %B %Y';
$register_date_fmt = '%d %B %Y';
$lasthit_date_fmt = '%d %B %Y om %H:%M ';
$comment_date_fmt =  '%d %B %Y om %H:%M ';

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*','kut','lul','neuken','klootzak','hoer','zak','hufter','pijpen','kloot','sex');

$lang_meta_album_names = array( 
        'random' => 'Willekeurige bestanden', 
        'lastup' => 'Laatste toevoegingen', 
        'lastalb'=> 'Laatste gewijzigde albums', 
        'lastcom' => 'Laatste commentaren', 
        'topn' => 'Meest bekeken', 
        'toprated' => 'Best beoordeeld', 
        'lasthits' => 'Laatst bekeken', 
        'search' => 'Zoek resultaten', 
        'favpics'=> 'Favoriete bestanden' 
);

$lang_errors = array(
        'access_denied' => 'Je hebt geen toestemming om deze pagina te bezoeken.',
        'perm_denied' => 'Je hebt geen toestemming om deze handeling uit te voeren.',
        'param_missing' => 'Script aangeroepen zonder de vereiste parameters.',
        'non_exist_ap' => 'Geselecteerde album/bestand bestaat niet!',
        'quota_exceeded' => 'Toegewezen bestandsgrootte overschreden<br /><br />Je hebt een bestandsgrootte-limiet van [quota]K, je bestanden gebruiken nu [space]K, het toevoegen van dit bestand zorgt er voor dat je je toegewezen bestandsgrootte overschrijdt.',
        'gd_file_type_err' => 'Indien je de GD afbeeldingenbibliotheek gebruikt zijn alleen JPEG- en PNG-bestanden toegestaan.',
        'invalid_image' => 'De afbeelding die je hebt geupload is corrupt of kan niet behandeld worden door de GD library.',
        'resize_failed' => 'Niet in staat de verkleinde afbeelding of de afmetingen van de afbeelding aan te passen.',
        'no_img_to_display' => 'Geen afbeelding om te laten zien.',
        'non_exist_cat' => 'De geselecteerde categorie bestaat niet.',
        'orphan_cat' => 'Een categorie heeft een niet bestaande hoofdcategorie, start de categorie-manager om het probleem te herstellen.',
        'directory_ro' => 'Map \'%s\' is niet beschrijfbaar, bestand kan niet verwijderd worden.',
        'non_exist_comment' => 'Het geselecteerde commentaar is niet aanwezig.',
        'pic_in_invalid_album' => 'Bestand is in een niet bestaand album (%s)!?', 
        'banned' => 'Je bent op dit moment uitgesloten van het gebruik van deze site.', 
        'not_with_udb' => 'Deze functie is uitgeschakeld in Coppermine omdat het geïntegreerd is met forumsoftware. Wat je tracht te doen is, of wordt niet ondersteund in deze configuratie, of de functie zal afgehandeld moeten worden door de forumsoftware.', 
        'offline_title' => 'Offline',
        'offline_text' => 'Galerij is op dit moment offline - controleer later nog eens',
        'ecards_empty' => 'Er zijn op dit moment geen e-cardrecords aanwezig om te laten zien. Controleer of je e-card logging hebt aangezet in de Coppermine-configuratie!',
        'action_failed' => 'Actie mislukt.  Coppermine kan je verzoek niet afhandelen.',
        'no_zip' => 'De benodigde bibliotheken om zip-bestanden te verwerken zijn niet beschikbaar.  Neem contact op met je Coppermine-beheerder.',
        'zip_type' => 'Je hebt geen toestemming om zip-bestanden te uploaden.'
);

$lang_bbcode_help = 'De volgende codes kunnen van pas komen: <li>[b]<b>Bold</b>[/b]</li> <li>[i]<i>Italic</i>[/i]</li> <li>[url=http://Jouwsite.nl/]Url Text[/url]</li> <li>[email]user@domain.nl[/email]</li>';

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
        'alb_list_title' => 'Ga naar de albumlijst',
        'alb_list_lnk' => 'Albumlijst',
        'my_gal_title' => 'Ga naar mijn persoonlijke galerij',
        'my_gal_lnk' => 'Mijn galerij',
        'my_prof_lnk' => 'Mijn profiel',
        'adm_mode_title' => 'Schakel naar beheerder-modus',
        'adm_mode_lnk' => 'Beheerder-modus',
        'usr_mode_title' => 'Schakel naar gebruiker-modus',
        'usr_mode_lnk' => 'Gebruiker-modus',
        'upload_pic_title' => 'Upload een bestand in een album',
        'upload_pic_lnk' => 'Upload bestand',
        'register_title' => 'Creëer een account',
        'register_lnk' => 'Registreer',
        'login_lnk' => 'Inloggen',
        'logout_lnk' => 'Uitloggen',
        'lastup_lnk' => 'Laatste upload',
        'lastcom_lnk' => 'Laatste commentaar',
        'topn_lnk' => 'Meest bekeken',
        'toprated_lnk' => 'Best beoordeeld',
        'search_lnk' => 'Zoek',
        'fav_lnk' => 'Mijn favorieten', 
        'memberlist_title' => 'Laat gebruikerslijst zien',
        'memberlist_lnk' => 'Gebruikerslijst',
        'faq_title' => 'Veel gestelde vragen en antwoorden over de fotogalerij &quot;Coppermine&quot;',
        'faq_lnk' => 'FAQ',
);

$lang_gallery_admin_menu = array(
        'upl_app_lnk' => 'Upload-toestemming',
        'config_lnk' => 'Instellingen',
        'albums_lnk' => 'Albums',
        'categories_lnk' => 'Categorieën',
        'users_lnk' => 'Gebruikers',
        'groups_lnk' => 'Groepen',
        'comments_lnk' => 'Bekijk commentaren',
        'searchnew_lnk' => 'Bestandenverzameling toevoegen',
        'util_lnk' => 'Beheerdersgereedschap', 
        'ban_lnk' => 'Verban gebruiker', 
        'db_ecard_lnk' => 'Laat e-cards zien',
);

$lang_user_admin_menu = array(
        'albmgr_lnk' => 'Creëer/sorteer albums',
        'modifyalb_lnk' => 'Wijzig mijn albums',
        'my_prof_lnk' => 'Mijn profiel',
);

$lang_cat_list = array(
       'category' => 'Categorie',
        'albums' => 'Albums',
        'pictures' => 'Bestanden',
);

$lang_album_list = array(
        'album_on_page' => '%d album(s) op %d pagina(\'s)'
);

$lang_thumb_view = array(
        'date' => 'DATUM',
        //Sort by filename and title 
        'name' => 'BESTANDSNAAM', 
        'title' => 'TITEL', 
        'sort_da' => 'Sorteer op datum oplopend',
        'sort_dd' => 'Sorteer op datum aflopend',
        'sort_na' => 'Sorteer op naam oplopend',
        'sort_nd' => 'Sorteer op naam aflopend',
        'sort_ta' => 'Sorteer op titel oploopend', 
        'sort_td' => 'Sorteer op titel afloopend', 
        'download_zip' => 'Download als zip-bestand',
        'pic_on_page' => '%d bestanden op %d pagina(\'s)',
        'user_on_page' => '%d gebruiker(s) op %d pagina(\'s)'
);

$lang_img_nav_bar = array(
        'thumb_title' => 'Terug naar de verkleinde afbeeldingpagina',
        'pic_info_title' => 'Laat zien/verberg bestandsinformatie',
        'slideshow_title' => 'Diashow',
        'ecard_title' => 'Stuur dit bestand als een e-card',
        'ecard_disabled' => 'e-cards zijn uitgeschakeld',
        'ecard_disabled_msg' => 'Je hebt geen toestemming een e-cards te verzenden',
        'prev_title' => 'Bekijk voorgaand bestand',
        'next_title' => 'Bekijk volgend bestand',
        'pic_pos' => 'Bestand %s / %s',
);

$lang_rate_pic = array(
        'rate_this_pic' => 'Beoordeel dit bestand ',
        'no_votes' => '(Nog geen stemmen)',
        'rating' => '(huidige beoordeling : %s / 5 met %s stemmen)',
        'rubbish' => 'Rotzooi',
        'poor' => 'Zwak',
        'fair' => 'Gemiddeld',
        'good' => 'Goed',
        'excellent' => 'Uitstekend',
        'great' => 'Geweldig',
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
        CRITICAL_ERROR => 'Kritieke fout',
        'file' => 'Bestand: ',
        'line' => 'Regel: ',
);

$lang_display_thumbnails = array(
        'filename' => 'Bestandsnaam : ',
        'filesize' => 'Bestandsgrootte : ',
        'dimensions' => 'Afmetingen : ',
        'date_added' => 'Datum toegevoegd : '
);

$lang_get_pic_data = array(
        'n_comments' => '%s commentaren',
        'n_views' => '%s x bekeken',
        'n_votes' => '(%s stemmen)'
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Foutenverwijderings-informatie', //cpg1.3.0
   'select_all' => 'Selecteer alles',
   'copy_and_paste_instructions' => 'Als je om hulp gaat vragen op het Coppermine-forum, knip-en-plak dan deze foutenverwijderings-gegevens in je forumbericht.',
   'phpinfo' => 'toon phpinfo', //cpg1.3.0
);

$lang_language_selection = array(
        'reset_language' => 'Standaardtaal',
        'choose_language' => 'Kies een taal',
);

$lang_theme_selection = array(
        'reset_theme' => 'Standaardthema',
        'choose_theme' => 'Kies een thema',
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
        'Exclamation' => 'Uitroepteken',
        'Question' => 'Vraag',
        'Very Happy' => 'Zeer gelukkig',
        'Smile' => 'Glimlach',
        'Sad' => 'Bedroefd',
        'Surprised' => 'Verbaasd',
        'Shocked' => 'Geshockeerd',
        'Confused' => 'Verward',
        'Cool' => 'Cool',
        'Laughing' => 'Lachen',
        'Mad' => 'Gek',
        'Razz' => 'Uitlachen',
        'Embarassed' => 'Verlegen',
        'Crying or Very sad' => 'Huilen of erg bedroefd',
        'Evil or Very Mad' => 'Slecht of zeer gek',
        'Twisted Evil' => 'Volledig geschift',
        'Rolling Eyes' => 'Rollende ogen',
        'Wink' => 'Knipoog',
        'Idea' => 'Idee',
        'Arrow' => 'Pijl',
        'Neutral' => 'Neutraal',
        'Mr. Green' => 'Meneer Groen',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
        0 => 'Verlaten beheerder-modus',
        1 => 'Beheerder-modus geactiveerd'
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
        'alb_need_name' => 'Albums moeten een naam hebben !',
        'confirm_modifs' => 'Weet je zeker dat je deze wijzigingen wilt maken ?',
        'no_change' => 'Je hebt geen enkele wijziging gedaan !',
        'new_album' => 'Nieuw album',
        'confirm_delete1' => 'Weet je het zeker dat je dit album wilt verwijderen ?',
        'confirm_delete2' => '\nAlle bestanden en commentaren zullen verloren gaan !',
        'select_first' => 'Selecteer eerst een album.',
        'alb_mrg' => 'Album Manager',
        'my_gallery' => '* Mijn galerij *',
        'no_category' => '* Geen categorie *',
        'delete' => 'Verwijder',
        'new' => 'Nieuw',
        'apply_modifs' => 'Pas wijzigingen toe',
        'select_category' => 'Selecteer categorie',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
        'miss_param' => 'Vereiste parameters voor \'%s\'bewerking niet gegeven !',
        'unknown_cat' => 'Geselecteerde categorie bestaat niet in database',
        'usergal_cat_ro' => 'Gebruikersgalerijen-categorie kan niet verwijderd worden !',
        'manage_cat' => 'Beheer categorieën',
        'confirm_delete' => 'Weet je zeker dat je deze categorie wilt VERWIJDEREN',
        'category' => 'Categorie',
        'operations' => 'Bewerkingen',
        'move_into' => 'Verplaats naar',
        'update_create' => 'Aanpassen/Creëer categorie',
        'parent_cat' => 'Ouder categorie',
        'cat_title' => 'Categorie titel',
        'cat_thumb' => 'Categorie verkleinde afbeelding', //cpg1.3.0
        'cat_desc' => 'Categorie-omschrijving'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
        'title' => 'Configuratie',
        'restore_cfg' => 'Herstel de oorspronkelijke instellingen',
        'save_cfg' => 'Bewaar nieuwe configuratie',
        'notes' => 'Notitie',
        'info' => 'Informatie',
        'upd_success' => 'Coppermine-configuratie is aangepast',
        'restore_success' => 'Coppermine-standaardconfiguratie is hersteld',
        'name_a' => 'Naam oplopend',
        'name_d' => 'Naam aflopend',
        'title_a' => 'Titel oploopend', 
        'title_d' => 'Titel afloopend', 
        'date_a' => 'Datum oplopend',
        'date_d' => 'Datum aflopend',
        'th_any' => 'Max verhouding',
        'th_ht' => 'Hoogte',
        'th_wd' => 'Breedte',
        'label' => 'label',
        'item' => 'item',
        'debug_everyone' => 'Iedereen',
        'debug_admin' => 'Alleen beheerder',
        );

if (defined('CONFIG_PHP')) $lang_config_data = array(
        'Algemene instellingen',
        array('Galerij-naam', 'gallery_name', 0),
        array('Galerij-omschrijving', 'gallery_description', 0),
        array('E-mailadres van de beheerder', 'gallery_admin_email', 0),
        array('Het bestemmingsadres van de "Zie meer foto\'s" link in e-cards', 'ecards_more_pic_target', 0),
        array('Galerij is offline', 'offline', 1),
        array('Log e-cards', 'log_ecards', 1),
        array('Laat zip-download van favorieten toe', 'enable_zipdownload', 1), //cpg1.3.0

        'Taal, Themas &amp; Tekenset-instellingen',
        array('Taal', 'lang', 5),
        array('Thema', 'theme', 6),
        array('Laat taallijst zien', 'language_list', 1),
        array('Laat taalvlaggen zien', 'language_flags', 8),
        array('Laat &quot;reset&quot; zien in taalselectie', 'language_reset', 1),
        array('Laat themalijst zien', 'theme_list', 1),
        array('Laat &quot;reset&quot; zien in themaselectie', 'theme_reset', 1),
        array('Laat FAQ zien', 'display_faq', 1),
        array('Laat bbcode hulp zien', 'show_bbcode_help', 1),
        array('Lettertekens-codering', 'charset', 4),

        'Uiterlijk albumlijst',
        array('Breedte van de hoofdtabel (pixels of %)', 'main_table_width', 0),
        array('Aantal te tonen categorie-niveaus', 'subcat_level', 0),
        array('Aantal te tonen albums', 'albums_per_page', 0),
        array('Aantal kolommen voor de albumlijst', 'album_list_cols', 0),
        array('Grootte van de verkleinde afbeeldingen in pixels', 'alb_list_thumb_size', 0),
        array('De inhoud van de hoofdpagina', 'main_page_layout', 0),
        array('Laat eerste albumniveau verkleinde afbeeldingen zien in categorieën','first_level',1), 

        'Uiterlijk verkleinde afbeelding',
        array('Aantal kolommen op de verkleinde afbeeldingenpagina', 'thumbcols', 0),
        array('Aantal regels op de verkleinde afbeeldingenpagina', 'thumbrows', 0),
        array('Maximaal aantal te tonen tabs', 'max_tabs', 0),
        array('Laat fotobeschrijving onder de verkleinde afbeeldingen zien', 'caption_in_thumbview', 1),
        array('Laat aantal keren bekeken onder de verkleinde afbeelding zien', 'views_in_thumbview', 1),
        array('Laat aantal commentaren onder de verkleinde afbeelding zien', 'display_comment_count', 1),
        array('Laat afzendernaam onder de verkleinde afbeelding zien', 'display_uploader', 1),
        array('Standaard sorteervolgorde voor bestanden','default_sort_order', 3),
        array('Minimum aantal stemmen op een bestand voordat deze in de \'best beoordeeld\' lijst verschijnt', 'min_votes_for_rating', 0),

        'Uiterlijk afbeelding &amp; commentaar-instellingen',
        array('Breedte van de tabel om bestanden te laten zien (pixels of %)', 'picture_table_width', 0),
        array('Bestandsinformatie is standaard zichtbaar', 'display_pic_info', 1),
        array('Filter slechte woorden in commentaren', 'filter_bad_words', 1),
        array('Sta emoticons toe in commentaren', 'enable_smilies', 1),
        array('Laat meerdere opeenvolgende commentaren toe op één foto van dezelfde gebruiker (schakel flood protection uit)', 'disable_comment_flood_protect', 1),
        array('Maximale lengte van omschrijving afbeelding', 'max_img_desc_length', 0),
        array('Maximale aantal lettertekens in een woord', 'max_com_wlength', 0),
        array('Maximale aantal regels in een commentaar', 'max_com_lines', 0),
        array('Maximale lengte van commentaar', 'max_com_size', 0),
        array('Laat filmstrip zien', 'display_film_strip', 1), 
        array('Aantal items in filmstrip', 'max_film_strip_items', 0), 
        array('Bericht de beheerder over commentaar per e-mail', 'email_comment_notification', 1),
        array('Diashow-interval in milliseconden (1 seconde = 1000 milliseconden)', 'slideshow_interval', 0), //cpg1.3.0

        'Bestanden- en verkleinde afbeeldingen-instellingen',
        array('Kwaliteit voor JPEG-bestanden', 'jpeg_qual', 0),
        array('Maximale breedte of hoogte van een verkleinde afbeelding <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0),
        array('Gebruik afmeting ( Breedte of hoogte of maximale verhouding voor verkleinde afbeelding )<b>**</b>', 'thumb_use', 7),
        array('Creëer tussenliggende foto\'s','make_intermediate',1),
        array('Maximale breedte of hoogte van tussenliggende foto\'s /video <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0),
        array('Maximale grootte van uploadbestanden (KB)', 'max_upl_size', 0),
        array('Maximale breedte en hoogte van uploadfoto\'s /videos (pixels)', 'max_upl_width_height', 0),

        'Geavanceerde bestanden- en verkleinde afbeeldingen-instellingen',
        array('Laat privé albumicoon zien aan niet-ingelogde gebruiker','show_private',1), 
        array('Verboden lettertekens in bestandsnamen', 'forbiden_fname_char',0),
        //array('Toegelaten bestandsextensies voor geuploade afbeeldingen', 'allowed_file_extensions',0),
        array('Toegestane fototypes', 'allowed_img_types',0),
        array('Toegestane filmtypes', 'allowed_mov_types',0),
        array('Toegestane audiotypes', 'allowed_snd_types',0),
        array('Toegestane documenttypes', 'allowed_doc_types',0),
        array('Methode van aanpassen afmetingen van afbeeldingen','thumb_method',2),
        array('Pad naar ImageMagick \'convert\' hulpmiddel (voorbeeld /usr/bin/X11/)', 'impath', 0),
        //array('Toegestane fototypes (alleen geldig voor ImageMagick)', 'allowed_img_types',0),
        array('Opdrachtregel opties voor ImageMagick', 'im_options', 0),
        array('Lees EXIF-data in JPEG-bestanden', 'read_exif_data', 1),
        array('Lees IPTC-data in JPEG-bestanden', 'read_iptc_data', 1),
        array('De albummap <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0),
        array('De map voor gebruikersbestanden <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0),
        array('Het voorvoegsel voor tussenliggende foto\'s <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0),
        array('Het voorvoegsel voor verkleinde afbeeldingen <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0),
        array('Standaardmodus voor mappen', 'default_dir_mode', 0),
        array('Standaardmodus voor bestanden', 'default_file_mode', 0),

        'Gebruikersinstellingen',
        array('Laat nieuwe gebruikersregistratie toe', 'allow_user_registration', 1),
        array('Gebruikersregistratie vereist e-mailverificatie', 'reg_requires_valid_email', 1),
        array('Bericht de beheerder over gebruikersregistratie per e-mail', 'reg_notify_admin_email', 1),
        array('Laat toe dat twee gebruikers hetzelfde e-mailadres hebben', 'allow_duplicate_emails_addr', 1),
        array('Gebruikers kunnen privé-albums hebben, (Aantekening: Indien je verandert van \'Ja\' naar \'Nee\' wordt elke privé-album publiek)', 'allow_private_albums', 1),
        array('Bericht de beheerder over gebruikersupload, wachtend op toestemming', 'upl_notify_admin_email', 1),
        array('Laat ingelogde gebruiker toe om gebruikerslijst te zien', 'allow_memberlist', 1),

        'Eigen velden voor foto omschrijving (laat leeg indien niet gebruikt)',
        array('Naam veld 1', 'user_field1_name', 0),
        array('Naam veld 2', 'user_field2_name', 0),
        array('Naam veld 3', 'user_field3_name', 0),
        array('Naam veld 4', 'user_field4_name', 0),

        'Cookie-instellingen',
        array('Naam van de cookie, gebruikt door het script', 'cookie_name', 0),
        array('Pad naar de cookie, gebruikt door het script', 'cookie_path', 0),

        'Overige instellingen',
        array('Aanzetten foutenverwijderings-modus', 'debug_mode', 1),
        array('Laat resultaten in foutenverwijderings-modus zien', 'debug_notice', 1), //cpg1.3.0

        '<br /><div align="left"><a name="notice1"></a>(*) Deze instellingen mogen niet veranderd worden indien je al bestanden in je database hebt.<br />
        <a name="notice2"></a>(**) Indien deze instelling gewijzigd wordt, worden alleen de bestanden die na dit punt toegevoegd worden, beïnvloed. Dus het is aan te raden dat deze instelling niet wordt aangepast als er al bestanden in de galerij aanwezig zijn. Je kunt echter, deze aanpassingen op bestaande bestanden uitvoeren met het &quot;<a href="util.php">beheerdersgereedschap</a> (aanpassen grootte foto\'s)&quot; hulpmiddel uit het beheerdersgereedschap-menu.</div><br />'
);

// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
        'title' => 'Stuur e-cards',
        'ecard_sender' => 'Afzender',
        'ecard_recipient' => 'Ontvanger',
        'ecard_date' => 'Datum',
        'ecard_display' => 'Laat e-card zien',
        'ecard_name' => 'Naam',
        'ecard_email' => 'E-mail',
        'ecard_ip' => 'IP #',
        'ecard_ascending' => 'oplopend',
        'ecard_descending' => 'aflopend',
        'ecard_sorted' => 'Gesorteerd',
        'ecard_by_date' => 'op datum',
        'ecard_by_sender_name' => 'op afzender\'s naam',
        'ecard_by_sender_email' => 'op afzender\'s e-mail',
        'ecard_by_sender_ip' => 'op afzender\'s IP-adres',
        'ecard_by_recipient_name' => 'op ontvanger\'s naam',
        'ecard_by_recipient_email' => 'op ontvanger\'s e-mail',
        'ecard_number' => 'tonen record %s aan %s van %s',
        'ecard_goto_page' => 'ga naar pagina',
        'ecard_records_per_page' => 'Records per pagina',
        'check_all' => 'Selecteer alles',
        'uncheck_all' => 'De-selecteer alles',
        'ecards_delete_selected' => 'Verwijder geselecteerde e-cards',
        'ecards_delete_confirm' => 'Weet je zeker dat je de records wilt verwijderen? Selecteer de checkbox!',
        'ecards_delete_sure' => 'Ik weet het zeker',
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
        'empty_name_or_com' => 'Je moet je naam en commentaar opgeven.',
        'com_added' => 'Je commentaar is toegevoegd.',
        'alb_need_title' => 'Je moet een naam geven aan het album !',
        'no_udp_needed' => 'Geen aanpassing nodig.',
        'alb_updated' => 'Het album is aangepast.',
        'unknown_album' => 'Geselecteerde album bestaat niet of je hebt geen toestemming naar dit album te uploaden.',
        'no_pic_uploaded' => 'Er is geen bestand geupload !<br /><br />Indien je echt een bestand geselecteerd hebt om te uploaden, controleer of de server bestands-upload toestaat...',
        'err_mkdir' => 'Creëren van map %s niet gelukt !',
        'dest_dir_ro' => 'Bestemmingsmap %s is niet beschrijfbaar door het script !',
        'err_move' => 'Onmogelijk %s te verplaatsen naar %s !',
        'err_fsize_too_large' => 'Het door jou geuploade bestand is te groot (maximum toegelaten is %s x %s) !',
        'err_imgsize_too_large' => 'Het door jou geuploade bestand is te groot (maximum toegestaan is %s KB) !',
        'err_invalid_img' => 'Het bestand dat je geupload hebt, is geen geldig afbeeldingenbestand !',
        'allowed_img_types' => 'Je kunt aleen %s afbeeldingen uploaden.',
        'err_insert_pic' => 'Het bestand \'%s\' kan niet ingevoegd worden in het album.',
        'upload_success' => 'Je bestand is met succes geupload<br /><br />Het wordt zichtbaar als de beheerder het goedgekeurd heeft.',
        'notify_admin_email_subject' => '%s - Upload-melding',
        'notify_admin_email_body' => 'Een foto is geupload door %s waarvoor toestemming is vereist. Bezoek %s',
        'info' => 'Informatie',
        'com_added' => 'Commentaar toegevoegd.',
        'alb_updated' => 'Album aangepast.',
        'err_comment_empty' => 'Je commentaar is leeg !',
        'err_invalid_fext' => 'Alleen bestanden met de volgende extensie worden geaccepteerd : <br /><br />%s.',
        'no_flood' => 'Sorry, maar je bent de auteur van het laatste geposte commentaar voor dit bestand<br /><br />Wijzig het commentaar dat je toegevoegd hebt',
        'redirect_msg' => 'je wordt doorgestuurd.<br /><br /><br />Klik \'Doorgaan\' indien de pagina niet automatisch ververst wordt',
        'upl_success' => 'Je bestand is met succes toegevoegd.',
        'email_comment_subject' => 'Commentaar toegevoegd op Coppermine Photo Gallery',
        'email_comment_body' => 'Er heeft iemand commentaar toegevoegd in je galerij. Bekijk het op',
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
        'caption' => 'Koptekst',
        'fs_pic' => 'Originele grootte foto',
        'del_success' => 'met succes verwijderd',
        'ns_pic'  => 'normale fotogrootte',
        'err_del' => 'kan niet verwijderd worden',
        'thumb_pic' => 'verkleinde afbeelding',
        'comment' => 'commentaar',
        'im_in_alb' => 'foto in album',
        'alb_del_success' => 'Album \'%s\' verwijderd',
        'alb_mgr' => 'Album Manager',
        'err_invalid_data' => 'Ongeldige data ontvangen in \'%s\'',
        'create_alb' => 'creëeren album \'%s\'',
        'update_alb' => 'Aanpassen album \'%s\' met titel \'%s\' en index \'%s\'',
        'del_pic' => 'Verwijder bestand',
        'del_alb' => 'Verwijder album',
        'del_user' => 'Verwijder gebruiker',
        'err_unknown_user' => 'De geselecteerde gebruiker bestaat niet !',
        'comment_deleted' => 'Commentaar met succes verwijderd',
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
        'confirm_del' => 'Weet je zeker dat je dit bestand wilt VERWIJDEREN ? \\nCommentaar wordt ook verwijderd.',
        'del_pic' => 'VERWIJDER DIT BESTAND',
        'size' => '%s x %s pixels',
        'views' => '%s keer',
        'slideshow' => 'Diashow',
        'stop_slideshow' => 'STOP DIASHOW',
        'view_fs' => 'Klik op de foto om originele grootte te bekijken',
        'edit_pic' => 'Wijzig omschrijving',
        'crop_pic' => 'Snijden en draaien',
);

$lang_picinfo = array(
        'title' =>'Bestandsinformatie',
        'Filename' => 'Bestandsnaam',
        'Album name' => 'Albumnaam',
        'Rating' => 'Beoordeling (%s stemmen)',
        'Keywords' => 'Sleutelwoorden',
        'File Size' => 'Bestandsgrootte',
        'Dimensions' => 'Afmetingen',
        'Displayed' => 'Getoond',
        'Camera' => 'Camera',
        'Date taken' => 'Opnamedatum',
        'Aperture' => 'Opening',
        'Exposure time' => 'Sluitertijd',
        'Focal length' => 'Brandpuntsafstand',
        'Comment' => 'Commentaar', 
        'addFav'=>'Voeg toe aan favorieten', 
        'addFavPhrase'=>'Favoriet', 
        'remFav'=>'Verwijder uit favorieten', 
        'iptcTitle'=>'IPTC-titel',
        'iptcCopyright'=>'IPTC-copyright',
        'iptcKeywords'=>'IPTC-sleutelwoorden',
        'iptcCategory'=>'IPTC-categorie',
        'iptcSubCategories'=>'IPTC-subcategorieën',
);

$lang_display_comments = array(
        'OK' => 'OK',
        'edit_title' => 'Wijzig dit commentaar.',
        'confirm_delete' => 'Weet je zeker dat je dit commentaar wilt verwijderen ?',
        'add_your_comment' => 'Voeg je commentaar toe.',
        'name'=>'Naam', 
        'comment'=>'Commentaar', 
        'your_name' => 'Je naam', 
);

$lang_fullsize_popup = array( 
        'click_to_close' => 'Klik op de foto om dit venster te sluiten', 
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
        'title' => 'Stuur een e-card',
        'invalid_email' => '<b>Waarschuwing</b> : ongeldig e-mailadres !',
        'ecard_title' => 'Een e-card van %s voor jou',
        'error_not_image' => 'Alleen foto\'s kunnen als een e-card verzonden worden.', //cpg1.3.0
        'view_ecard' => 'Indien de e-card niet juist wordt weergegeven, klik dan op deze link',
        'view_more_pics' => 'Klik op deze link om meer foto\'s te bekijken !',
        'send_success' => 'Je e-card is verzonden',
        'send_failed' => 'Sorry, maar de server kan je e-card niet verzenden...',
        'from' => 'Van',
        'your_name' => 'Jouw naam',
        'your_email' => 'Jouw e-mailadres',
        'to' => 'Aan',
        'rcpt_name' => 'Naam geadresseerde',
        'rcpt_email' => 'E-mailadres geadresseerde',
        'greetings' => 'Groeten',
        'message' => 'Bericht',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
        'pic_info' => 'Bestands&nbsp;info',
        'album' => 'Album',
        'title' => 'Titel',
        'desc' => 'Omschrijving',
        'keywords' => 'Sleutelwoorden',
        'pic_info_str' => '%s×%s - %sKB - %s bekeken - %s stemmen',
        'approve' => 'Laat bestand toe',
        'postpone_app' => 'Stel toelating uit',
        'del_pic' => 'Verwijder bestand',
        'read_exif' => 'Lees EXIF-info opnieuw',
        'reset_view_count' => 'Reset bekeken teller',
        'reset_votes' => 'Reset stemmen',
        'del_comm' => 'verwijder commentaar',
        'upl_approval' => 'Upload-toestemming',
        'edit_pics' => 'Wijzig bestanden',
        'see_next' => 'Bekijk volgend bestand',
        'see_prev' => 'Bekijk vorig bestand',
        'n_pic' => '%s bestanden',
        'n_of_pic_to_disp' => 'Aantal te tonen bestanden',
        'apply' => 'Pas wijzigingen toe',
        'crop_title' => 'Coppermine Foto Editor',
        'preview' => 'Voorbeeld',
        'save' => 'Bewaar foto',
        'save_thumb' =>'Bewaar als verkleinde afbeelding',
        'sel_on_img' =>'De selectie moet geheel op de afbeelding liggen!'
);

// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
        'faq' => 'Veel gestelde vragen',
        'toc' => 'Inhoudsopgave',
        'question' => 'Vraag: ',
        'answer' => 'Antwoord: ',
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
        'Veel gestelde vragen - algemeen',
        array('Waarom moet ik registreren?', 'Registratie kan wel of niet worden vereist door de beheerder van de site. Registratie geeft een gebruiker toegevoegde mogelijkheden zoals uploaden, het hebben van een favorietenlijst, waardering van foto\'s en het plaatsen van commentaar etc.', 'allow_user_registration', '0'),
        array('Hoe kan ik registreren?', 'Ga naar &quot;Registreer&quot; en vul de vereiste velden in (en als je wilt de optionele).<br />Als de beheerder e-mailaanmelding heeft geactiveerd, zul je nadat je de informatie hebt verzonden, een e-mailbevestiging ontvangen op het adres dat je hebt opgegeven tijdens het registreren, met daarin instructies hoe je je lidmaatschap moet activeren. Je lidmaatschap moet geactiveerd zijn om in te kunnen loggen.', 'allow_user_registration', '1'),
        array('Hoe log ik in?', 'Ga naar &quot;Login&quot;, geef je gebruikersnaam en wachtwoord en selecteer &quot;Onthoud mij&quot; zodat je de volgende keer weer ingelogd wordt op de site als je terugkeert nadat je het verlaten hebt.<br /><b>BELANGRIJK: Cookies moeten worden toegelaten en de cookie van deze site mag niet worden verwijderd om de optie &quot;Onthoud mij&quot; te kunnen gebruiken.</b>', 'offline', 0),
        array('Waarom kan ik niet inloggen?', 'Heb je je geregistreerd en heb de link aangeklikt die je is toegezonden via e-mail?. Deze aangeklikte link zal je account activeren. Voor andere inlogproblemen, neem contact op met de beheerder van deze site.', 'offline', 0),
        array('Wat gebeurt er als ik mijn wachtwoord vergeten ben?', 'Indien deze site de &quot;Wachtwoord vergeten&quot; link heeft, gebruik het dan. In alle andere gevallen, neem contact op met de beheerder van deze site voor een nieuw wachtwoord.', 'offline', 0),
        //array('Wat gebeurt er als ik mijn e-mailadres verander?', 'Eenvoudig inloggen en verander je e-mailadres via &quot;Profiel&quot;', 'offline', 0),
        array('Hoe bewaar ik een foto in &quot;Mijn favorieten&quot;?', 'Klik op een foto en klik dan op de &quot;foto-info&quot; link (<img src="images/info.gif" width="16" height="16" border="0" alt="Foto-informatie" />); scroll naar de onderzijde van de pagina naar &quot;Bestandsinformatie&quot; en klik op &quot;Voeg toe aan favorieten&quot;.<br />De beheerder kan deze &quot;Bestandsinformatie&quot; standaard aan hebben staan.<br />BELANGRIJK: Cookies moeten toegelaten worden en de cookie van deze site mag niet worden verwijderd.', 'offline', 0),
        array('Hoe beoordeel ik een bestand?', 'Klik op een verkleinde afbeelding en ga naar de onderzijde van de pagina en kies een beoordeling.', 'offline', 0),
        array('Hoe plaats ik een commentaar voor een foto?', 'Klik op een verkleinde afbeelding en ga naar de onderzijde van de pagina en plaats een commentaar.', 'offline', 0),
        array('Hoe upload ik een bestand?', 'Ga naar &quot;Upload bestand&quot; en selecteer het album waar je je bestand naar wilt uploaden, klik op &quot;Browse&quot; en ga naar het bestand dat je wilt uploaden en klik op &quot;open&quot; (voeg als je wilt een titel en beschrijving toe) en klik op &quot;Verzend&quot;', 'allow_private_albums', 0),
        array('Waar upload ik een foto naar toe?', 'Je zult in staat zijn een foto te uploaden naar één van je albums in &quot;Mijn Galerij&quot;. De beheerder kan je ook toestaan om te uploaden naar één of meer albums in de hoofdgalerij.', 'allow_private_albums', 0),
        array('Welk bestandstype en grootte kan ik uploaden?', 'De grootte en het bestandstype (jpg,gif,..etc.) worden bepaald door de beheerder.', 'offline', 0),
        array('Wat is &quot;Mijn Galerij&quot;?', '&quot;Mijn Galerij&quot; is een persoonlijke galerij waar de gebruiker bestanden naar kan uploaden en deze kan beheren.', 'allow_private_albums', 0),
        array('Hoe creëer, hernoem en verwijder ik een album in &quot;Mijn Galerij&quot;?', 'Je moet eerst in &quot;Beheerder-modus&quot; zijn<br />Ga vervolgens naar &quot;Creëer/Sorteer mijn albums&quot; en klik &quot;Nieuw&quot;. Verander &quot;Nieuw Album&quot; naar de door jou gewenste naam.<br />Je kunt ook elk ander album in je galerij hernoemen.<br />Klik &quot;Pas aanpassingen toe&quot;.', 'allow_private_albums', 0),
        array('Hoe pas ik aan en beperk ik gebruikers in het bekijken van mijn albums?', 'Je moet eerst in &quot;Beheerder-modus&quot; zijn<br />Ga vervolgens naar &quot;Pas mijn albums aan&quot;. Op de &quot;Aanpassen Album&quot; bar, kies het album dat je wilt aanpassen.<br />Hier kun je de naam, de omschrijving, de verkleinde afbeelding, de beperking in het bekijken en commentaar/beoordelingspermissie aanpassen.<br />Klik op &quot;Aanpassen album&quot;.', 'allow_private_albums', 0),
        array('Hoe kan ik gebruikersgalerijen bekijken van andere gebruikers?', 'Ga naar &quot;Albumlijst&quot; en kies &quot;Gebruikersgalerijen&quot;.', 'allow_private_albums', 0),
        array('Wat zijn cookies?', 'Cookies zijn tekstbestanden met data die door een website worden verzonden en op je computer worden geplaatst.<br />Cookies laten een gebruiker gewoonlijk toe een site te verlaten en weer terug te keren zonder weer opnieuw te hoeven in te loggen en andere verschillende zaken.', 'offline', 0),
        array('Waar kan ik dit programma krijgen voor mijn site?', 'Coppermine is een vrije Multimedia Galerij, uitgegeven onder GNU GPL. Het zit vol met mogelijkheden en is geschikt gemaakt voor verschillende platformen. Bezoek de <a href="http://coppermine.sf.net/">Coppermine Home Page</a> om meer te weten te komen of het te downloaden.', 'offline', 0),

        'Navigeren binnen de site',
        array('Wat is &quot;Albumlijst&quot;?', 'Deze optie toont je de complete galerij met een link naar iedere categorie. Verkleinde afbeeldingen kunnen ook een link zijn naar een categorie.', 'offline', 0),
        array('Wat is &quot;Mijn Galerij&quot;?', 'Deze optie laat een gebruiker de mogelijkheid zijn of haar eigen galerij te creëren en hier albums aan toe te voegen, te verwijderen of aan te passen en eveneens bestanden naar te uploaden.', 'allow_private_albums', 0),
        array('Wat is het verschil tussen &quot;Beheerder-modus&quot; en &quot;Gebruiker-modus&quot;?', 'Deze optie, wanneer deze is ingesteld op Beheerder-modus, stelt de gebruiker in staat zijn eigen galerij aan te passen (en eveneens die van anderen indien de beheerder dit toegelaten heeft).', 'allow_private_albums', 0),
        array('Wat is &quot;Upload bestand&quot;?', 'Deze optie stelt de gebruiker in staat een bestand te uploaden (grootte en type wordt bepaald door de beheerder van de site) naar een door jou of de door de beheerder geselecteerde galerij.', 'allow_private_albums', 0),
        array('Wat is &quot;Laatste uploads&quot;?', 'Deze optie toont de laatste uploads die naar de site zijn gezonden.', 'offline', 0),
        array('Wat is &quot;Laatste commentaar&quot;?', 'Deze optie toont de laatste commentaren samen met de foto die door gebruikers zijn geplaatst.', 'offline', 0),
        array('Wat is &quot;Meest bekeken&quot;?', 'Deze optie toont de meest bekeken foto\'s door alle bezoekers (ingelogd of niet).', 'offline', 0),
        array('Wat is &quot;Best beoordeeld&quot;?', 'Deze optie laat de door bezoekers best beoordeelde foto\'s zien in een gemiddelde beoordeling (bv: vijf gaven ieder een <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: de foto zal dan een gemiddelde beoordeling krijgen van <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;Vijf gebruikers beoordeelden de foto van 1 tot 5 (1,2,3,4,5) zal resulteren in een gemiddelde van <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />De beoordelingen gaan van <img src="images/rating5.gif" width="65" height="14" border="0" alt="beste" /> (beste) tot <img src="images/rating0.gif" width="65" height="14" border="0" alt="slechtste" /> (slechtste).', 'offline', 0),
        array('Wat is &quot;Mijn favorieten&quot;?', 'Deze optie geeft de gebruiker de mogelijkheid om hun favoriete foto in een cookie op te slaan, die vervolgens naar je computer wordt gezonden.', 'offline', 0),
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
        'forgot_passwd' => 'Wachtwoordherinnering',
        'err_already_logged_in' => 'Je bent al ingelogd !',
        'enter_username_email' => 'Geef je gebruikersnaam of e-mailadres',
        'submit' => 'gaan',
        'failed_sending_email' => 'De wachtwoordherinnerings-e-mail kan niet verzonden worden !',
        'email_sent' => 'Een e-mail met je gebruikersnaam en wachtwoord is verzonden aan %s',
        'err_unk_user' => 'Geselecteerde gebruiker bestaat niet!',
        'passwd_reminder_subject' => '%s - Wachtwoordherinnering',
        'passwd_reminder_body' => 'Je hebt verzocht, herinnerd te willen worden over je login-gegevens:
Gebruikernaam: %s
Wachtwoord   : %s
Klik %s om in te loggen.',
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
        'group_name' => 'Groepsnaam',
        'disk_quota' => 'Toegewezen bestandsgrootte',
        'can_rate' => 'Kan bestanden beoordelen ',
        'can_send_ecards' => 'Kan e-cards sturen',
        'can_post_com' => 'Kan commentaar plaatsen',
        'can_upload' => 'Kan bestanden uploaden',
        'can_have_gallery' => 'Kan een persoonlijke galerij hebben',
        'apply' => 'Pas wijzigingen toe',
        'create_new_group' => 'Creëer nieuwe groep',
        'del_groups' => 'Verwijder geselecteerde groep(en)',
        'confirm_del' => 'Waarschuwing: indien je een groep verwijderd, worden de gebruikers die tot deze groep behoorden, verplaatst naar de \'Geregistreerd\'groep!\n\nWil je doorgaan ?',
        'title' => 'Beheer gebruikersgroepen',
        'approval_1' => 'Pub. Upl. toestemming (1)',
        'approval_2' => 'Priv. Upl. toestemming (2)',
        'upload_form_config' => 'Upload-formulier configuratie',
        'upload_form_config_values' => array( 'Alleen enkelvoudige bestand-uploads', 'Alleen meevoudige bestand-uploads', 'Alleen URI-uploads', 'Alleen zip-upload', 'Bestand-URI', 'Bestand-zip', 'URI-zip', 'Bestand-URI-zip'),
        'custom_user_upload'=>'Gebruiker mag het aantal uploadboxen aanpassen?',
        'num_file_upload'=>'Maximum/exacte aantal bestand-uploadboxen',
        'num_URI_upload'=>'Maximum/exacte aantal URI-uploadboxen',
        'note1' => '<b>(1)</b> voor het uploaden in een publiek album is toestemming van de beheerder noodzakelijk',
        'note2' => '<b>(2)</b> voor het uploaden in een album die aan een gebruiker toebehoort, is toestemming van de beheerder noodzakelijk',
        'notes' => 'Notities'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
        'welcome' => 'Welkom !'
);

$lang_album_admin_menu = array(
        'confirm_delete' => 'Weet je zeker dat je dit album wilt VERWIJDEREN ? \\nAlle foto\\\'s en commentaren worden ook verwijderd.',
        'delete' => 'WISSEN',
        'modify' => 'EIGENSCHAPPEN',
        'edit_pics' => 'WIJZIGEN',
);

$lang_list_categories = array(
        'home' => 'Home',
        'stat1' => '<b>[pictures]</b> bestanden in <b>[albums]</b> albums en <b>[cat]</b> categorieën met <b>[comments]</b> commentaren en <b>[views]</b> keer bekeken',
        'stat2' => '<b>[pictures]</b> bestanden in <b>[albums]</b> albums en <b>[views]</b> keer bekeken',
        'xx_s_gallery' => '%s\'s Galerij',
        'stat3' => '<b>[pictures]</b> bestanden in <b>[albums]</b> albums met <b>[comments]</b> commentaren en <b>[views]</b> keer bekeken'
);

$lang_list_users = array(
        'user_list' => 'Gebruikerslijst',
        'no_user_gal' => 'Er zijn geen gebruikersgalerijen.',
        'n_albums' => '%s album(s)',
        'n_pics' => '%s bestand(en)'
);

$lang_list_albums = array(
        'n_pictures' => '%s bestanden',
        'last_added' => ', laatste toegevoegd op %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
        'login' => 'Login',
        'enter_login_pswd' => 'Voer je gebruikersnaam en wachtwoord in om in te loggen',
        'username' => 'Gebruikersnaam',
        'password' => 'Wachtwoord',
        'remember_me' => 'Onthoud mij',
        'welcome' => 'Welkom %s ...',
        'err_login' => '*** Kan niet inloggen. Probeer het nogmaals ***',
        'err_already_logged_in' => 'Je bent al ingelogd !',
        'forgot_password_link' => 'Wachtwoord vergeten',
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
        'logout' => 'Uitloggen',
        'bye' => 'Tot ziens %s ...',
        'err_not_loged_in' => 'Je bent niet ingelogd !',
);

// ------------------------------------------------------------------------- //
// File phpinfo.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP info', //cpg1.3.0
  'explanation' => 'Dit is de uitvoer gegenereerd door de PHP-functie <a href="http://www.php.net/phpinfo">phpinfo()</a>, getoond binnen Coppermine (de uitvoer is weergegeven aan de rechter kant).', //cpg1.3.0
  'no_link' => 'Het laten zien van je phpinfo kan een veiligheidsrisico betekenen, daarom is deze pagina alleen maar zichtbaar wanneer je ingelogd bent als beheerder. Je kunt geen link publiceren naar deze pagina aan anderen, hen wordt de toegang geweigerd.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
        'upd_alb_n' => 'Pas album %s aan',
        'general_settings' => 'Algemene instellingen',
        'alb_title' => 'Albumtitel',
        'alb_cat' => 'Albumcategorie',
        'alb_desc' => 'Albumomschrijving',
        'alb_thumb' => 'Album verkleinde afbeelding',
        'alb_perm' => 'Permissies voor dit album',
        'can_view' => 'Album kan bekeken worden door',
        'can_upload' => 'Bezoekers kunnen bestanden uploaden',
        'can_post_comments' => 'Bezoekers kunnen commentaar posten',
        'can_rate' => 'Gebruiker kan bestanden beoordelen',
        'user_gal' => 'Gebruikersgalerij',
        'no_cat' => '* geen categorie *',
        'alb_empty' => 'Album is leeg',
        'last_uploaded' => 'Laatste upload',
        'public_alb' => 'Iedereen (publiek album)',
        'me_only' => 'Alleen ik',
        'owner_only' => 'Alleen albumeigenaar (%s)',
        'groupp_only' => 'Leden van de \'%s\' groep',
        'err_no_alb_to_modify' => 'Geen album die je kunt aanpassen in de database.',
        'update' => 'Pas album aan',
        'notice1' => '(*) afhankelijk van %sgroeps%s instellingen',
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
        'already_rated' => 'Sorry, maar je hebt dit bestand al beoordeeld',
        'rate_ok' => 'Je stem is geaccepteerd',
        'forbidden' => 'Je kunt je eigen bestanden niet beoordelen.',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Hoewel de beheerder van {SITE_NAME} zal proberen al het aanstootgevende materiaal op de site zo snel mogelijk te verwijderen, is het echter onmogelijk elk bestand te bekijken. Daarom ga je er mee akkoord, dat alle op deze site geuploade bestanden en weergegeven commentaren de gezichtspunten en opinies zijn van de respectievelijke auteurs en niet van de beheerder of webmaster (behalve hun eigen postings) en deze zullen daarvoor niet aansprakelijk gesteld kunnen worden.<br />
<br />
Je gaat er mee akkoord geen aanstootgevend, obsceen, vulgair, hatelijk, bedreigend, seksueel-getint materiaal of welk ander materiaal dan ook op deze site te plaatsen, dat enige van toepassing zijnde wet overtreedt. Je gaat er mee akkoord dat de webmaster, beheerder en  moderators van {SITE_NAME} het recht hebben elke inhoud te verwijderen en of te wijzigen wanneer zij dat nodig achten. Als gebruiker ga je er mee akkoord, dat alle data die je hebt verstrekt in een database worden bewaard. Hoewel deze informatie niet openbaar gemaakt wordt aan derden zonder jouw toestemming, ga je akkoord met het feit dat de webmaster en de beheerder niet verantwoordelijk gehouden kunnen worden voor welke hack-poging dan ook, dat kan lijden tot het openbaar worden van de database.<br />
<br />
Deze site gebruikt cookies om informatie te bewaren op je lokale computer. Deze cookies dienen er voor jouw kijkgemak en plezier aan de site te verhogen. Het e-mailadres wordt alleen gebruikt om jouw registratiedetails en wachtwoord te bevestigen.<br />
<br />
Door op 'Ik ga akkoord' hieronder te klikken , verklaar je je akkoord en ben je gebonden aan de hiervoor weergegeven condities.
EOT;

$lang_register_php = array(
        'page_title' => 'Gebruikersregistratie',
        'term_cond' => 'Voorwaarden en condities',
        'i_agree' => 'Ik ga akkoord',
        'submit' => 'Verzend registratie',
        'err_user_exists' => 'De gebruikersnaam die je ingevoerd hebt, bestaat al. Kies een andere',
        'err_password_mismatch' => 'De twee wachtwoorden zijn niet identiek, geef ze nogmaals op',
        'err_uname_short' => 'Gebruikersnaam moet minimaal 2 tekens lang zijn',
        'err_password_short' => 'Wachtwoord moet minimaal 2 tekens lang zijn',
        'err_uname_pass_diff' => 'Gebruikersnaam en wachtwoord moeten verschillend zijn',
        'err_invalid_email' => 'E-mailadres is ongeldig',
        'err_duplicate_email' => 'Een andere gebruiker heeft zich al geregistreerd met dit e-mailadres',
        'enter_info' => 'Voer registratie-informatie in ',
        'required_info' => 'Verplichte informatie',
        'optional_info' => 'Niet-verplichte informatie',
        'username' => 'Gebruikersnaam',
        'password' => 'Wachtwoord',
        'password_again' => 'Nogmaals wachtwoord',
        'email' => 'E-mail',
        'location' => 'Locatie',
        'interests' => 'Interesse',
        'website' => 'Home-pagina',
        'occupation' => 'Beroep',
        'error' => 'FOUT',
        'confirm_email_subject' => '%s - Registratiebevestiging',
        'information' => 'Informatie',
        'failed_sending_email' => 'De registratiebevestiging kan niet verzonden worden !',
        'thank_you' => 'Dank je voor het registreren.<br /><br />Een e-mail met informatie over hoe je je account dient te activeren, is verzonden naar het adres dat je opgegeven hebt.',
        'acct_created' => 'Je account is gecreëerd en je kunt nu inloggen met je gebruikersnaam en wachtwoord',
        'acct_active' => 'Je account is nu actief en je kunt inloggen met je gebruikersnaam en wachtwoord',
        'acct_already_act' => 'Je account is al actief !',
        'acct_act_failed' => 'Dit account kan niet geactiveerd worden !',
        'err_unk_user' => 'Geselecteerde gebruiker bestaat niet !',
        'x_s_profile' => '%s\'s profiel',
        'group' => 'Groep',
        'reg_date' => 'Aangemeld',
        'disk_usage' => 'Bestandsgrootte-gebruik',
        'change_pass' => 'Verander wachtwoord',
        'current_pass' => 'Huidig wachtwoord',
        'new_pass' => 'Nieuw wachtwoord',
        'new_pass_again' => 'Nieuw wachtwoord opnieuw',
        'err_curr_pass' => 'Huidige wachtwoord is onjuist',
        'apply_modif' => 'Pas wijziging toe',
        'change_pass' => 'Verander mijn wachtwoord',
        'update_success' => 'Je profiel is aangepast',
        'pass_chg_success' => 'Je wachtwoord is aangepast',
        'pass_chg_error' => 'Je wachtwoord is niet aangepast',
        'notify_admin_email_subject' => '%s - Registratie-aanmelding',
        'notify_admin_email_body' => 'Een nieuwe gebruiker met gebruikersnaam "%s" heeft zich geregistreerd bij je galerij',
);

$lang_register_confirm_email = <<<EOT
Dank je voor het registreren bij {SITE_NAME}

Je gebruikernaam  : "{USER_NAME}"
Je wachtwoord     : "{PASSWORD}"

Om je account te kunnen activeren moet je op de link hieronder klikken
of knip en plak het in je webbrowser.

{ACT_LINK}

Hartelijke groet,

De beheerder van {SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
        'title' => 'Bekijk commentaar',
        'no_comment' => 'Er is geen commentaar te bekijken',
        'n_comm_del' => '%s commentaren verwijderd',
        'n_comm_disp' => 'Aantal toonbare commentaren',
        'see_prev' => 'Bekijk voorgaande',
        'see_next' => 'Bekijk volgende',
        'del_comm' => 'Verwijder geselecteerd commentaar',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
        0 => 'Doorzoek de bestandscollectie'
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
        'page_title' => 'Zoek nieuwe bestanden',
        'select_dir' => 'Selecteer map',
        'select_dir_msg' => 'Deze funktie stelt je in staat een aantal bestanden gelijktijdig naar je server te uploaden d.m.v. FTP.<br /><br />Selecteer de map waar je de bestanden naar hebt geupload',
        'no_pic_to_add' => 'Er is geen bestand om toe te voegen',
        'need_one_album' => 'Je hebt minimaal een album nodig om deze functie te gebruiken',
        'warning' => 'Waarschuwing',
        'change_perm' => 'Het script kan niet schrijven in deze map, je moet de modus ervan veranderen naar 755 of 777 voordat je probeert het bestand toe te voegen !',
        'target_album' => '<b>Plaats bestanden van &quot;</b>%s<b>&quot; in </b>%s',
        'folder' => 'Map',
        'image' => 'Bestand',
        'album' => 'Album',
        'result' => 'Resultaat',
	  'dir_ro' => 'Niet beschrijfbaar. ',
	  'dir_cant_read' => 'Niet leesbaar. ',
        'insert' => 'Toevoegen van nieuwe bestanden aan galerij',
        'list_new_pic' => 'Lijst van nieuwe bestanden',
        'insert_selected' => 'Invoegen van geselecteerde bestanden',
        'no_pic_found' => 'Er is GEEN bestand gevonden',
        'be_patient' => 'Heb geduld, het script heeft enige tijd nodig om de bestanden aan het album toe te voegen',
        'no_album' => 'geen album geselecteerd', 
        'notes' =>  '<ul>'.
                                '<li><b>OK</b> : betekent dat het bestand met succes is toegevoegd'.
                                '<li><b>DP</b> : betekent dat het bestand dubbel is en zich al in de database bevindt'.
                                '<li><b>PB</b> : betekent dat het bestand niet toegevoegd kon worden. Controleer je configuratie en de permissies van mappen waar de bestanden zich bevinden'.
                                '<li><b>NA</b> : betekent dat je geen album geselecteerd hebt waar de bestanden in moeten, klik \'<a href="javascript:history.back(1)">Terug</a>\' en selecteer een album. Als je geen album hebt, <a href="albmgr.php">creëer er dan éérst een</a></li>'.
                                '<li>Als de OK, DP, PB \'tekens\' niet verschijnen klik dan op het verbroken bestand om te kijken of er een PHP-foutbericht gegeven wordt'.
                                '<li>Indien je browser een time-out bericht geeft, klik dan op de herlaad-knop'.
                                '</ul>',
        'select_album' => 'selecteer album',
        'check_all' => 'Selecteer alles',
        'uncheck_all' => 'de-selecteer alles',
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
      'title' => 'Verban gebruikers', 
      'user_name' => 'Gebruikersnaam', 
      'ip_address' => 'IP-adres', 
      'expiry' => 'Verloopt (blanco is permanent)', 
      'edit_ban' => 'Bewaar veranderingen', 
      'delete_ban' => 'Verwijder', 
      'add_new' => 'Voeg nieuwe verbanning toe', 
      'add_ban' => 'Toevoegen', 
      'error_user' => 'Kan de gebruiker niet vinden', //cpg1.3.0
  	'error_specify' => 'Je moet een gebruikersnaam of een IP-adres opgeven', //cpg1.3.0
  	'error_ban_id' => 'Ongeldig verban ID!', //cpg1.3.0
  	'error_admin_ban' => 'Je kunt jezelf niet verbannen!', //cpg1.3.0
  	'error_server_ban' => 'Je ging je eigen server verbannen? Tsk tsk, kan dat niet doen...', //cpg1.3.0
  	'error_ip_forbidden' => 'Je kunt dit IP-adres niet verbannen - het is niet-traceerbaar!', //cpg1.3.0
  	'lookup_ip' => 'Een IP adres opzoeken', //cpg1.3.0
  	'submit' => 'Gaan!', //cpg1.3.0

);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
        'title' => 'Upload foto',
        'custom_title' => 'Aangepast aanvraagformulier',
        'cust_instr_1' => 'Je mag een aangepast aantal bestands- en URI-uploadboxen hebben. Echter, je mag niet meer selecteren dan de hieronder afggebeelde limieten.',
        'cust_instr_2' => 'Boxnummer-aanvraag',
        'cust_instr_3' => 'Bestand-uploadboxen: %s',
        'cust_instr_4' => 'URI/URL-uploadboxen: %s',
	  'cust_instr_5' => 'URI/URL-uploadboxen:', //cpg1.3.0
  	  'cust_instr_6' => 'Bestand-uploadboxen:', //cpg1.3.0
	  'cust_instr_7' => 'Geef het aantal voor ieder type uploadboxen dat je op dit moment wenst.  Klik daarna op\'Doorgaan\'. ', //cpg1.3.0
        'reg_instr_1' => 'Ongeldige actie voor aanmaken formulier:',
        'reg_instr_2' => 'Nu kun je je bestanden uploaden, gebruikmakend van onderstaande boxen. De grootte van de bestanden van je client naar de server mogen elk niet de %s KB overschrijden. Zip-bestanden in het \'Bestand Upload\' en \'URI/URL Upload\' gebied blijven gecomprimeerd.' ,
        'reg_instr_3' => 'Indien je de gezipte bestanden of archieven gecomprimeerd wilt hebben, moet je de uploadbox gebruiken in het \'Decompress zip-upload\' gebied',
        'reg_instr_4' => 'Als je de URI/URL-uploadsectie gebruikt, geef het pad op naar het bestand zoals bijv. dit : http://www.mysite.com/images/example.jpg',
        'reg_instr_5' => 'Als je het formulier voltooid hebt, klik op \'Doorgaan\'.',
        'reg_instr_6' => 'Decomprimeerbare Zip-uploads',
	  'reg_instr_7' => 'Bestands-upload:', //cpg1.3.0
 	  'reg_instr_8' => 'URI/URL-upload:', //cpg1.3.0
  	  'error_report' => 'Foutrapport', //cpg1.3.0
	  'error_instr' => 'De volgende uploads hebben een fout ervaren:', //cpg1.3.0
	  'file_name_url' => 'Bestandsnaam/URL', //cpg1.3.0
	  'error_message' => 'Foutboodschap', //cpg1.3.0
	  'no_post' => 'Bestand niet opgeladen door POST.', //cpg1.3.0
	  'forb_ext' => 'Verboden bestandsextensie.', //cpg1.3.0
	  'exc_php_ini' => 'Overschreden bestandsgrootte in php.ini toegestaan.', //cpg1.3.0
	  'exc_file_size' => 'Overschreden bestandsgrootte in CPG toegestaan.', //cpg1.3.0
	  'partial_upload' => 'Alleen een deel-upload.', //cpg1.3.0
	  'no_upload' => 'Geen upload plaatsgevonden.', //cpg1.3.0
	  'unknown_code' => 'Onbekende PHP-upload foutcode.', //cpg1.3.0
	  'no_temp_name' => 'Geen upload - Geen voorlopige naam.', //cpg1.3.0
	  'no_file_size' => 'Bevat geen data/corrupt', //cpg1.3.0
	  'impossible' => 'Onmogelijk te verplaatsen.', //cpg1.3.0
	  'not_image' => 'Geen foto/corrupt', //cpg1.3.0
	  'not_GD' => 'Geen GD-extensie.', //cpg1.3.0
	  'pixel_allowance' => 'Pixeltoestemming overschreden.', //cpg1.3.0
	  'incorrect_prefix' => 'Ongeldig URI/URL-voorvoegsel', //cpg1.3.0
	  'could_not_open_URI' => 'Kon URI niet openen.', //cpg1.3.0
	  'unsafe_URI' => 'Veiligheid niet verifieerbaar.', //cpg1.3.0
	  'meta_data_failure' => 'Meta data-fout', //cpg1.3.0
	  'http_401' => '401 Niet geauthoriseerd', //cpg1.3.0
	  'http_402' => '402 Betaling vereist', //cpg1.3.0
	  'http_403' => '403 Verboden', //cpg1.3.0
	  'http_404' => '404 Niet gevonden', //cpg1.3.0
	  'http_500' => '500 Interne server-fout', //cpg1.3.0
	  'http_503' => '503 Service niet beschikbaar', //cpg1.3.0
	  'MIME_extraction_failure' => 'MIME kon niet bepaald worden.', //cpg1.3.0
	  'MIME_type_unknown' => 'Onbekend MIME-type', //cpg1.3.0
	  'cant_create_write' => 'Kan schrijfbestand niet creëeren.', //cpg1.3.0
	  'not_writable' => 'Kan niet naar schrijfbestand schrijven.', //cpg1.3.0
	  'cant_read_URI' => 'Kan URI/URL niet lezen', //cpg1.3.0
	  'cant_open_write_file' => 'Kan URI-schrijfbestand niet openen.', //cpg1.3.0
	  'cant_write_write_file' => 'Kan niet schrijven naar URI-schrijfbestand.', //cpg1.3.0
	  'cant_unzip' => 'Kan niet zipbestanden niet uitpakken.', //cpg1.3.0
	  'unknown' => 'Onbekende fout', //cpg1.3.0
	  'succ' => 'Met succes geuploade bestanden', //cpg1.3.0
	  'success' => '%s bestanden waren met succesgeupload.', //cpg1.3.0
	  'add' => 'klik \'Doorgaan\' om de bestanden toe te voegen aan albums.', //cpg1.3.0
	  'failure' => 'Upload-fout', //cpg1.3.0
	  'f_info' => 'Bestandsinformatie', //cpg1.3.0
	  'no_place' => 'Het voorgaande bestand kon niet geplaatst worden.', //cpg1.3.0
	  'yes_place' => 'Het voorgaande bestand is met succes geplaatst.', //cpg1.3.0
        'max_fsize' => 'Maximaal toegestane bestandsgrootte is %s KB',
        'album' => 'Album',
        'picture' => 'Bestand',
        'pic_title' => 'Bestandstitel',
        'description' => 'Bestandsomschrijving',
        'keywords' => 'Sleutelwoorden (scheiden met spaties)',
        'err_no_alb_uploadables' => 'Sorry, er is geen album waar het je toegestaan is bestanden naar te uploaden',
        'place_instr_1' => 'Plaats de bestanden nu in albums.  Je kunt nu ook relevante informatie over ieder bestand toevoegen.',
        'place_instr_2' => 'Er zijn meer bestanden die geplaatst moeten worden. Klik op \'Doorgaan\'.',
        'process_complete' => 'Je hebt met succes alle bestanden geplaatst.'
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
        'title' => 'Gebruikersbeheer',
        'name_a' => 'Naam oplopend',
        'name_d' => 'Naam aflopend',
        'group_a' => 'Groep oplopend',
        'group_d' => 'Groep aflopend',
        'reg_a' => 'Registratiedatum oplopend',
        'reg_d' => 'Registratiedatum aflopend',
        'pic_a' => 'Aantal bestanden oplopend',
        'pic_d' => 'Aantal bestanden aflopend',
        'disku_a' => 'Gebruikte bestandsgrootte oplopend',
        'disku_d' => 'Gebruikte bestandsgrootte aflopend',
        'lv_a' => 'Laatste bezoek oplopend',
        'lv_d' => 'Laatste bezoek aflopend',
        'sort_by' => 'Sorteer gebruikers op',
        'err_no_users' => 'Gebruikerstabel is leeg !',
        'err_edit_self' => 'Je kunt je eigen profiel niet wijzigen, gebruik daarvoor de \'Mijn profiel\' link',
        'edit' => 'WIJZIG',
        'delete' => 'VERWIJDER',
        'name' => 'Gebruikersnaam',
        'group' => 'Groep',
        'inactive' => 'Inactief',
        'operations' => 'Bewerkingen',
        'pictures' => 'Bestanden',
        'disk_space' => 'Gebruikte bestandsgrootte',
        'registered_on' => 'Geregistreerd op',
	  'last_visit' => 'Laatste bezoek', //cpg1.3.0
        'u_user_on_p_pages' => '%d gebruikers op %d pagina(s)',
        'confirm_del' => 'Weet je zeker dat je deze gebruiker wilt VERWIJDEREN ? \\nAl zijn bestanden en albums worden ook verwijderd.',
        'mail' => 'MAIL',
        'err_unknown_user' => 'Geselecteerde gebruiker bestaat niet !',
        'modify_user' => 'Wijzig gebruiker',
        'notes' => 'Notities',
        'note_list' => '<li>Als je niet je huidige wachtwoord wilt wijzigen, laat dan het "wachtwoord" veld leeg',
        'password' => 'Wachtwoord',
        'user_active' => 'Gebruiker is actief',
        'user_group' => 'Gebruikersgroep',
        'user_email' => 'E-mail van gebruiker',
        'user_web_site' => 'Website van gebruiker',
        'create_new_user'=> 'Creëer nieuwe gebruiker',
        'user_location' => 'Locatie van gebruiker',
        'user_interests' => 'Interesse van gebruiker',
        'user_occupation'  => 'Beroep van gebruiker',
        'latest_upload' => 'Recente uploads',
        'never' => 'nooit',
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
        'title' => 'Beheerdergereedschap (Aanpassen afmetingen foto\'s)', 
        'what_it_does' => 'Wat doet dit gereedschap', 
        'what_update_titles' => 'Creëert titels uit bestandsnamen', 
        'what_delete_title' => 'Verwijdert titels', 
        'what_rebuild' => 'Construeert opnieuw verkleinde afbeeldingen en past afmetingen aan van foto\'s', 
        'what_delete_originals' => 'Verwijdert de originele foto\'s en vervangt deze door de aangepaste afmetingenversie', 
        'file' => 'Bestand', 
        'title_set_to' => 'titel aangepast naar', 
        'submit_form' => 'Doorvoeren', 
        'updated_succesfully' => 'met succes aangepast', 
        'error_create' => 'FOUT bij aanmaken', 
        'continue' => 'Verwerk meer foto\'s', 
        'main_success' => 'Het bestand %s is met succes gebruikt als hoofdbestand', 
        'error_rename' => 'Fout bij hernoemen van %s naar %s', 
        'error_not_found' => 'Het bestand %s is niet gevonden', 
        'back' => 'terug naar begin', 
        'thumbs_wait' => 'Aanpassen van verkleinde afbeeldingen en/of afmetingen van foto\'s, even geduld...', 
        'thumbs_continue_wait' => 'Doorgaan met aanpassen van verkleinde afbeeldingen en/of afmetingen van foto\'s...', 
        'titles_wait' => 'Aanpassen titels, even geduld...', 
        'delete_wait' => 'Verwijderen titels, even geduld...', 
        'replace_wait' => 'Verwijderen van originele en vervangen door aangepaste afmetingen van foto\'s, even geduld..', 
        'instruction' => 'Snelle instructies', 
        'instruction_action' => 'Selecteer actie', 
        'instruction_parameter' => 'Zet parameters', 
        'instruction_album' => 'Selecteer album', 
        'instruction_press' => 'Klik %s', 
        'update' => 'Aanpassen verkleinde afbeeldingen en/of afmetingen foto\'s', 
        'update_what' => 'Wat moet er aangepast worden', 
        'update_thumb' => 'Alleen verkleinde afbeeldingen', 
        'update_pic' => 'Alleen aangepaste foto\'s', 
        'update_both' => 'Zowel verkleinde afbeeldingen als aangepaste foto\'s', 
        'update_number' => 'Aantal verwerkte foto\'s per klik', 
        'update_option' => '(Probeer deze instelling lager te zetten indien je timeout problemen ervaart)', 
        'filename_title' => 'Bestandsnaam &rArr; Bestandstitel', 
        'filename_how' => 'Hoe moet de bestandsnaam aangepast worden', 
        'filename_remove' => 'Verwijder de .jpg-uitgang en vervang _ (underscore) met spaties', 
        'filename_euro' => 'Verander 2003_11_23_13_20_20.jpg naar 23/11/2003 13:20', 
        'filename_us' => 'Verander 2003_11_23_13_20_20.jpg naar 11/23/2003 13:20', 
        'filename_time' => 'Verander 2003_11_23_13_20_20.jpg naar 13:20', 
        'delete' => 'Verwijder bestandstitel of originele grootte van foto\'s', 
        'delete_title' => 'Verwijder bestandstitel', 
        'delete_original' => 'Verwijder originele foto\'s', 
        'delete_replace' => 'Verwijder de originele foto\'s en vervang deze door de in afmeting aangepaste versies', 
        'select_album' => 'Selecteer album', 
        'delete_orphans' => 'Verwijder \'wees\' commentaar (werkt op alle albums)',
        'orphan_comment' => '\'wees\' commentaar gevonden',
        'delete' => 'Verwijder',
        'delete_all' => 'Verwijder alles',
        'comment' => 'Commentaar: ',
        'nonexist' => 'aangekoppeld aan niet bestaand bestand # ',
	  'phpinfo' => 'Laat phpinfo zien', //cpg1.3.0
	  'update_db' => 'Aanpassen database', //cpg1.3.0
	  'update_db_explanation' => 'Als je Coppermine-bestanden vervangen hebt, een modificatie hebt toegevoegd of hebt geupgrade van een voorgaande versie van Coppermine, draai dan de database aanpassing eenmalig. Dit zal de nodige tabellen aanmaken en/of configuratiewaarden in je Coppermine-database aanpassen.', //cpg1.3.0
);

?>