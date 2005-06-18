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
// CVS version: $Id: german_sie-utf-8.php,v 1.4 2004/12/29 23:03:50 chtito Exp $
// ------------------------------------------------------------------------- //

// info about translators and translated language
$lang_translation_info = array(
'lang_name_english' => 'German',
'lang_name_native' => 'Deutsch',
'lang_country_code' => 'de',
'trans_name'=> 'Anid',
'trans_email' => '',
'trans_website' => 'http://www.maax-design.de/',
'trans_date' => '2004-08-23',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'kB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa');
$lang_month = array('Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember');

// Some common strings
$lang_yes = 'Ja';
$lang_no  = 'Nein';
$lang_back = 'zurück';
$lang_continue = 'weiter';
$lang_info = 'Information';
$lang_error = 'Fehler';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%d.%B %Y';
$lastcom_date_fmt =  '%d.%m.%y um %H:%M';
$lastup_date_fmt = '%d.%B %Y';
$register_date_fmt = '%d.%B %Y';
$lasthit_date_fmt = '%d.%B %Y um %H:%M';
$comment_date_fmt =  '%d.%B %Y um %H:%M';

// For the word censor
$lang_bad_words = array('*fuck*', '*fick*', '*arsch*', 'hure*', 'nutte', 'fotze', 'möse', 'scheiss*', 'scheiß*', 'motherfucker','nigger*', 'pussy', 'shit', 'slut', 'titties', 'titty');

$lang_meta_album_names = array(
  'random' => 'Zufalls-Bilder',
  'lastup' => 'neueste Dateien',
  'lastalb'=> 'Zuletzt aktualisierte Alben',
  'lastcom' => 'neueste Kommentare',
  'topn' => 'am meisten angesehen',
  'toprated' => 'am besten bewertet',
  'lasthits' => 'zuletzt angesehen',
  'search' => 'Suchergebnisse',
  'favpics'=> 'Favourite Pictures'
);

$lang_errors = array(
  'access_denied' => 'Sie haben kein Recht, diese Seite anzusehen.',
  'perm_denied' => 'Sie haben nicht das Recht, diese Operation auszuführen.',
  'param_missing' => 'Das Skript wurde ohne den/die erfordlichen Parameter aufgerufen.',
  'non_exist_ap' => 'Das gewählte Album bzw. die gewählte Datei existiert nicht!',
  'quota_exceeded' => 'Speicherplatz erschöpft<br /><br />Sie haben ein Speicherlimit von [quota]K, Ihre Dateien belegen zur Zeit [space] kB, das Hinzufügen dieser Datei würde Ihren Speicherplatz überschreiten.',
  'gd_file_type_err' => 'Bei Verwendung der GD-Bibliothek sind nur die Dateitypen JPG und PNG erlaubt.',
  'invalid_image' => 'Das Bild, das Sie hochgeladen haben ist beschädigt oder kann nicht von der GD-Bibliothek verarbeitet werden',
  'resize_failed' => 'Kann Thumbnail nicht erzeugen.',
  'no_img_to_display' => 'Keine Datei zum Anzeigen vorhanden (oder Sie haben keine Berechtigung, das Album zu sehen)',
  'non_exist_cat' => 'Die gewählte Kategorie existiert nicht',
  'orphan_cat' => 'Eine Kategorie besitzt ein nicht-existierendes Eltern-Element, benutzen Sie den Kategorie-Manager um das Problem zu beheben.',
  'directory_ro' => 'Das Verzeichnis \'%s\' ist nicht beschreibbar, die Dateien können nicht gelöscht werden',
  'non_exist_comment' => 'Der gewählte Kommentar existiert nicht.',
  'pic_in_invalid_album' => 'Die Datei befindet sich in einem nicht-existierenden Album (%s)!?',
  'banned' => 'Sie sind zur Zeit von dieser Seite verbannt.',
  'not_with_udb' => 'Diese Funktion ist innerhalb Coppermine deaktiviert, weil Sie in die Forums-Software integriert ist. Entweder wird das, was Sie gerade zu tun versucht haben in dieser Konfiguration nicht unterstützt oder die Funktion sollte von der Forums-Software übernommen werden.',
  'offline_title' => 'Wartunsmodus', //cpg1.3.0
  'offline_text' => 'Die Galerie is zur Zeit im Wartungsmodus - schauen Sie bitte später nochmal vorbei!', //cpg1.3.0
  'ecards_empty' => 'Es können derzeit keine eCard-Einträge gefunden werden. Überprüfen Sie, ob die Aufzeichung von eCards in den Einstellungen aktivert wurde!', //cpg1.3.0
  'action_failed' => 'Aktion fehlgeschlagen. Coppermine konnte die gewünschte Aktion nicht ausführen.', //cpg1.3.0
  'no_zip' => 'Die zum Verarbeiten von ZIP-Dateien notwendigen libraries sind auf dem Server nicht verfügbar. Setzen Sie sich mit dem Server-Admin in Verbindung.', //cpg1.3.0
  'zip_type' => 'Keine Berechtigung für den Upload von ZIP-Dateien.', //cpg1.3.0
);

$lang_bbcode_help = 'Die folgenden codes könnten hilfreich sein: <li>[b]<b>fett</b>[/b]</li> <li>[i]<i>kursiv</i>[/i]</li> <li>[url=http://ihreseite.de/]Link-Text[/url]</li> <li>[email]benutzer@irgendwo.de[/email]</li>'; //cpg1.3.0// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'alb_list_title' => 'Gehe zur Alben-Übersicht',
  'alb_list_lnk' => 'Alben-Übersicht',
  'my_gal_title' => 'zu meiner persönlichen Galerie',
  'my_gal_lnk' => 'meine Galerie',
  'my_prof_lnk' => 'mein Profil',
  'adm_mode_title' => 'in Admin-Modus schalten',
  'adm_mode_lnk' => 'Admin-Modus',
  'usr_mode_title' => 'in Benutzer-Modus schalten',
  'usr_mode_lnk' => 'Benutzer-Modus',
  'upload_pic_title' => 'Datei in ein Album hochladen',
  'upload_pic_lnk' => 'Datei hochladen',
  'register_title' => 'Konto erzeugen',
  'register_lnk' => 'Registrieren',
  'login_lnk' => 'anmelden',
  'logout_lnk' => 'abmelden',
  'lastup_lnk' => 'neueste Uploads',
  'lastcom_lnk' => 'neueste Kommentare',
  'topn_lnk' => 'am meisten angesehen',
  'toprated_lnk' => 'am besten bewertet',
  'search_lnk' => 'Suche',
  'fav_lnk' => 'Meine Favoriten',
  'memberlist_title' => 'Benutzerliste anzeigen', //cpg1.3.0
  'memberlist_lnk' => 'Benutzerliste', //cpg1.3.0
  'faq_title' => 'Häufig gestellte Fragen (Frequently Asked Questions) zur Galerie &quot;Coppermine&quot;', //cpg1.3.0
  'faq_lnk' => 'FAQ', //cpg1.3.0
);

$lang_gallery_admin_menu = array(
  'upl_app_lnk' => 'Upload-Bestätigung',
  'config_lnk' => 'Einstellungen',
  'albums_lnk' => 'Alben',
  'categories_lnk' => 'Kategorien',
  'users_lnk' => 'Benutzer',
  'groups_lnk' => 'Gruppen',
  'comments_lnk' => 'Kommentare bearbeiten',
  'searchnew_lnk' => 'Batch-hinzufügen',
  'util_lnk' => 'Admin-Werkzeuge',
  'ban_lnk' => 'Benutzer verbannen',
  'db_ecard_lnk' => 'eCards anzeigen', //cpg1.3.0
);

$lang_user_admin_menu = array(
  'albmgr_lnk' => 'Alben erzeugen / anordnen',
  'modifyalb_lnk' => 'Meine Alben bearbeiten',
  'my_prof_lnk' => 'Mein Profil',
);

$lang_cat_list = array(
  'category' => 'Kategorie',
  'albums' => 'Alben',
  'pictures' => 'Dateien',
);

$lang_album_list = array(
  'album_on_page' => '%d Alben auf %d Seite(n)',
);

$lang_thumb_view = array(
  'date' => 'Datum',
  //Sort by filename and title
  'name' => 'Dateiname',
  'title' => 'Titel',
  'sort_da' => 'aufsteigend nach Datum sortieren',
  'sort_dd' => 'absteigend nach Datum sortieren',
  'sort_na' => 'aufsteigend nach Name sortieren',
  'sort_nd' => 'absteigend nach Name sortieren',
  'sort_ta' => 'aufsteigend nach Titel sortieren',
  'sort_td' => 'absteigend nach Titel sortieren',
  'download_zip' => 'Als ZIP-Datei herunterladen', //cpg1.3.0
  'pic_on_page' => '%d Dateien auf %d Seite(n)',
  'user_on_page' => '%d Benutzer auf %d Seite(n)',
);

$lang_img_nav_bar = array(
  'thumb_title' => 'zurück zur Thumbnail-Seite',
  'pic_info_title' => 'Dateiinformationen anzeigen/verbergen',
  'slideshow_title' => 'Diashow',
  'ecard_title' => 'Bild als eCard versenden',
  'ecard_disabled' => 'eCards sind deaktiviert',
  'ecard_disabled_msg' => 'Sie haben nicht das Recht, eCards zu versenden',
  'prev_title' => 'vorherige Datei anzeigen',
  'next_title' => 'nächste Datei anzeigen',
  'pic_pos' => 'Datei %s/%s',
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Diese Datei bewerten ',
  'no_votes' => '(noch keine Bewertung)',
  'rating' => '- derzeitige Bewertung : %s/5 mit %s Stimme(n)',
  'rubbish' => 'sehr schlecht',
  'poor' => 'schlecht',
  'fair' => 'ganz OK',
  'good' => 'gut',
  'excellent' => 'sehr gut',
  'great' => 'super',
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
  CRITICAL_ERROR => 'Kritischer Fehler',
  'file' => 'Datei: ',
  'line' => 'Zeile: ',
);

$lang_display_thumbnails = array(
  'filename' => 'Dateiname : ',
  'filesize' => 'Dateigrösse : ',
  'dimensions' => 'Abmessungen : ',
  'date_added' => 'hinzugefügt am : ',
);

$lang_get_pic_data = array(
  'n_comments' => '%s Kommentar(e)',
  'n_views' => '%s x angesehen',
  'n_votes' => '(%s Bewertungen)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Debug Info', //cpg1.3.0
  'select_all' => 'Alles markieren', //cpg1.3.0
  'copy_and_paste_instructions' => 'Wenn Sie Hilfe im Coppermine-Forum suchen wollen, kopieren Sie diese Debug-Ausgabe in Ihren Beitrag im Forum. Ersetzen Sie eventuell vorhandene Passwörter in den Queries durch ***.', //cpg1.3.0
  'phpinfo' => 'phpinfo anzeigen', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => 'Standard-Sprache', //cpg1.3.0
  'choose_language' => 'Wähle Sprache', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'Standard-Design', //cpg1.3.0
  'choose_theme' => 'Wähle Design', //cpg1.3.0
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

if (defined('SMILIES_PHP'))
 $lang_smilies_inc_php = array(
  'Exclamation' => 'Ausruf',
  'Question' => 'Frage',
  'Very Happy' => 'sehr glücklich',
  'Smile' => 'lachen',
  'Sad' => 'traurig',
  'Surprised' => 'überrascht',
  'Shocked' => 'schockiert',
  'Confused' => 'verwirrt',
  'Cool' => 'cool',
  'Laughing' => 'lachend',
  'Mad' => 'wütend',
  'Razz' => 'scheu',
  'Embarassed' => 'schüchtern',
  'Crying or Very sad' => 'traurig',
  'Evil or Very Mad' => 'böse',
  'Twisted Evil' => 'verschlagen',
  'Rolling Eyes' => 'na ja',
  'Wink' => 'zwinker',
  'Idea' => 'Idee',
  'Arrow' => 'Pfeil',
  'Neutral' => 'neutral',
  'Mr. Green' => 'Mr. Green',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP'))
 $lang_admin_php = array(
  0 => 'Beende Admin-Modus...',
  1 => 'Starte Admin-Modus...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP'))
 $lang_albmgr_php = array(
  'alb_need_name' => 'Alben müssen einen Namen haben!',
  'confirm_modifs' => 'Sind Sie sicher, dass Sie diese Änderungen durchführen wollen?',
  'no_change' => 'Sie haben nichts verändert!',
  'new_album' => 'neues Album',
  'confirm_delete1' => 'Wollen Sie dieses Album wirklich löschen?',
  'confirm_delete2' => '\nAlle Dateien und Kommentare, die darin enthalten sind, werden gelöscht!',
  'select_first' => 'Wählen Sie zuerst ein Album',
  'alb_mrg' => 'Alben-Manager',
  'my_gallery' => '* meine Galerie *',
  'no_category' => '* keine Kategorie *',
  'delete' => 'löschen',
  'new' => 'neu',
  'apply_modifs' => 'Änderungen übernehmen',
  'select_category' => 'wähle Kategorie',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP'))
 $lang_catmgr_php = array(
  'miss_param' => 'Fehlender Parameter für die Operation \'%s\' !',
  'unknown_cat' => 'Gewählte Kategorie existiert nicht in Datenbank',
  'usergal_cat_ro' => 'Benutzer-Galerie kann nicht gelöscht werden!',
  'manage_cat' => 'Kategorien verwalten',
  'confirm_delete' => 'Wollen Sie diese Kategorie wirklich LÖSCHEN', //js-alert
  'category' => 'Kategorie',
  'operations' => 'Operationen',
  'move_into' => 'verschieben in',
  'update_create' => 'Kategorie erzeugen/ändern',
  'parent_cat' => 'Eltern-Kategorie',
  'cat_title' => 'Titel der Kategorie',
  'cat_thumb' => 'Kategorie-Thumbnail', //cpg1.3.0
  'cat_desc' => 'Beschreibung Kategorie',
  'no_category' => 'keine Kategorie'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP'))
 $lang_config_php = array(
  'title' => 'Einstellungen',
  'restore_cfg' => 'auf Werkseinstellungen zurücksetzen',
  'save_cfg' => 'neue Einstellungen speichern',
  'notes' => 'Anmerkungen',
  'info' => 'Information',
  'upd_success' => 'Die Einstellungen von Coppermine wurden aktualisiert',
  'restore_success' => 'Coppermine Standard-Einstellungen wieder hergestellt',
  'name_a' => 'aufsteigend nach Name',
  'name_d' => 'absteigend nach Name',
  'title_a' => 'aufsteigend nach Titel',
  'title_d' => 'absteigend nach Titel',
  'date_a' => 'aufsteigend nach Datum',
  'date_d' => 'absteigend nach Datum',
  'th_any' => 'Maximalwert (entweder Höhe oder Breite)',
  'th_ht' => 'Höhe',
  'th_wd' => 'Breite',
  'label' => 'Beschriftung', //cpg1.3.0
  'item' => 'Eintrag', //cpg1.3.0
  'debug_everyone' => 'alle', //cpg1.3.0
  'debug_admin' => 'nur Admin', //cpg1.3.0
        );

if (defined('CONFIG_PHP'))
 $lang_config_data = array(
  'Allgemeine Einstellungen',
  array('Galerie-Name', 'gallery_name', 0),
  array('Galerie Beschreibung', 'gallery_description', 0),
  array('Galerie-Admin eMail', 'gallery_admin_email', 0),
  array('Ziel-Adresse für den  \'mehr Bilder ansehen\' Link in eCards', 'ecards_more_pic_target', 0),
  array('Galerie ist im Wartungsmodus', 'offline', 1), //cpg1.3.0
  array('eCards aufzeichnen (Logging)<br />(Anmerkung: das Aufzeichnen von Benutzer-Daten kann Datenschutz-Rechtliche Konsequenzen haben. Der Benutzer sollte über die Tatsache, daß die eCards gelogged werden informiert werden und sein Einverständnis gegeben haben, z.B. bei der Registrierung. Details, wie eine Datenschutz-Policy, die den Schutz der Privatsphäre regelt sollten separat auf der Seite verfügbar sein.)', 'log_ecards', 1), //cpg1.3.0
  array('ZIP-download der Favoriten erlauben', 'enable_zipdownload', 1), //cpg1.3.0  'Sprache-, Design- &amp; Zeichensatz-Einstellungen',
  array('Sprache', 'lang', 5),
  array('Design', 'theme', 6),
  array('Sprachauswahl-Liste anzeigen', 'language_list', 1), //cpg1.3.0
  array('Sprachauswahl-Flaggen anzeigen', 'language_flags', 8), //cpg1.3.0
  array('&quot;Standard&quot; in Sprachauswahl anzeigen', 'language_reset', 1), //cpg1.3.0
  array('Designauswahl-Liste anzeigen', 'theme_list', 1), //cpg1.3.0
  array('&quot;Standard&quot; in Designauswahl-Liste anzeigen', 'theme_reset', 1), //cpg1.3.0
  array('FAQ anzeigen', 'display_faq', 1), //cpg1.3.0
  array('bbcode-Hilfe anzeigen', 'show_bbcode_help', 1), //cpg1.3.0
  array('Zeichensatz', 'charset', 4), //cpg1.3.0  'Ansicht Albumliste',
  array('Breite der Haupttabelle (in Pixel oder %)', 'main_table_width', 0),
  array('Anzahl anzuzeigende Kategorie-Ebenen', 'subcat_level', 0),
  array('Anzahl anzuzeigende Alben', 'albums_per_page', 0),
  array('Anzahl Spalten in Album-Liste', 'album_list_cols', 0),
  array('Thumbnail-Grösse in Pixel', 'alb_list_thumb_size', 0),
  array('Inhalt der Hauptseite', 'main_page_layout', 0),
  array('Erste Ebene der Thumbnails der Alben auch in Kategorien anzeigen','first_level',1),  'Ansicht Thumbnail',
  array('Spaltenzahl auf Thumbnail-Seite', 'thumbcols', 0),
  array('Zeilenzahl auf Thumbnail-Seite', 'thumbrows', 0),
  array('Anzahl maximal anzuzeigende Tabs', 'max_tabs', 10), //cpg1.3.0
  array('Datei-Beschriftung anzeigen (zusätzlich zum Datei-Titel) unterhalb der Thumbnails', 'caption_in_thumbview', 1), //cpg1.3.0
  array('Anzahl der Treffer unterhalb dem Thumbnail anzeigen', 'views_in_thumbview', 1), //cpg1.3.0
  array('Anzahl der Kommentare unterhalb dem Thumbnail anzeigen', 'display_comment_count', 1),
  array('Name des Uploaders unterhalb des Thumbnails anzeigen', 'display_uploader', 1), //cpg1.3.0
  array('Standard-Sortierung für Dateien', 'default_sort_order', 3), //cpg1.3.0
  array('Mindestmenge Stimmen, die eine Datei benötigt, um in der \'am besten bewertet\' Liste zu erscheinen', 'min_votes_for_rating', 0), //cpg1.3.0  'Ansicht Bild &amp; Einstellungen Kommentare',
  array('Tabellenbreite für Bildanzeige (in Pixel oder %)', 'picture_table_width', 0), //cpg1.3.0
  array('Datei-Informationen sind standardmäßig sichtbar', 'display_pic_info', 1), //cpg1.3.0
  array('Schimpfwörter in Kommentaren zensieren', 'filter_bad_words', 1),
  array('Smilies in Kommentaren erlauben', 'enable_smilies', 1),
  array('Aufeinander folgende Kommentare eines Benutzers zu einer Datei zulassen (Überflutungs-Schutz abschalten)', 'disable_comment_flood_protect', 1), //cpg1.3.0
  array('Maximallänge für Dateibeschreibung', 'max_img_desc_length', 0),
  array('Maximale Anzahl von Buchstaben in einem Wort', 'max_com_wlength', 0),
  array('Maximale Zeilenzahl eines Kommentars', 'max_com_lines', 0),
  array('Maximale Länge eines Kommentars', 'max_com_size', 0),
  array('Film-Streifen anzeigen', 'display_film_strip', 1),
  array('Anzahl Elemente in Film-Streifen', 'max_film_strip_items', 0),
  array('Admin über abgegebene Kommentare per eMail benachrichtigen', 'email_comment_notification', 1), //cpg1.3.0
  array('Diashow-Intervall in Millisekunden (1 Sekunde = 1000 Millisekunden)', 'slideshow_interval', 0), //cpg1.3.0  'Bild/Datei- und Thumbnail-Einstellungen', //cpg1.3.0
  array('Qualität für JPEG-Dateien', 'jpeg_qual', 0),
  array('Maximalgrösse Thumbnail<a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0), //cpg1.3.0
  array('Welche Dimension soll genutzt werden für Thumbnails ( Breite oder Höhe oder das, was jeweils grösser ist)<a href="#notice1" class="clickable_option">**</a>', 'thumb_use', 7),
  array('Bilder in Zwischengröße erzeugen','make_intermediate',1),
  array('Maximale Breite oder Höhe von Bildern/Videos in Zwischengröße <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0), //cpg1.3.0
  array('Maximalgröße für das Hochladen von Dateien (KB)', 'max_upl_size', 0), //cpg1.3.0
  array('Maximale Breite oder Höhe für das Hochladen von Bildern/Videos (in Pixel)', 'max_upl_width_height', 0), //cpg1.3.0  'Erweiterte Bild/Datei- und Thumbnail-Einstellungen', //cpg1.3.0
  array('Icons für Persönliche Alben nicht eingeloggten Benutzern anzeigen?','show_private',1), //cpg1.3.0
  array('Nicht erlaubte Zeichen in Dateinamen', 'forbiden_fname_char',0), //cpg1.3.0
  //array('erlaubte Datei-Erweiterungen für das Hochladen von Bildern', 'allowed_file_extensions',0), //cpg1.3.0
  array('Zugelassenen Bild-Dateitypen', 'allowed_img_types',0), //cpg1.3.0
  array('Zugelassenen Video-Dateitypen', 'allowed_mov_types',0), //cpg1.3.0
  array('Zugelassenen Audio-Dateitypen', 'allowed_snd_types',0), //cpg1.3.0
  array('Zugelassenen Dokument-Dateitypen', 'allowed_doc_types',0), //cpg1.3.0
  array('Methode zur Größenänderung von Bildern','thumb_method',2),
  array('Pfad zur \'convert\' Anwendung von ImageMagick (z.B. /usr/bin/X11/)', 'impath', 0), //cpg1.3.0
  //array('Erlaubte Datei-Typen (nur gültig für ImageMagick)', 'allowed_img_types',0), //cpg1.3.0
  array('Kommandozeilen-Parameter für ImageMagick', 'im_options', 0), //cpg1.3.0
  array('EXIF-Daten in JPEG-Dateien lesen', 'read_exif_data', 1), //cpg1.3.0
  array('IPTC-Daten in JPEG-Dateien lesen', 'read_iptc_data', 1), //cpg1.3.0
  array('Alben-Verzeichnis <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0), //cpg1.3.0
  array('Verzeichnis für Benutzer-Dateien <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0), //cpg1.3.0
  array('Vorsilbe für Bilder in Zwischengröße <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0), //cpg1.3.0
  array('Vorsilbe für Thumbnails <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0), //cpg1.3.0
  array('Standard-Modus für Verzeichnisse', 'default_dir_mode', 0), //cpg1.3.0
  array('Standard-Modus für Dateien', 'default_file_mode', 0), //cpg1.3.0  'Benutzer-Einstellungen',
  array('Registrierung von Benutzern zulassen', 'allow_user_registration', 1),
  array('Registrierung von Benutzern erfordert Überprüfung per eMail', 'reg_requires_valid_email', 1),
  array('Admin über neu registrierten Benutzer per eMail benachrichtigen', 'reg_notify_admin_email', 1), //cpg1.3.0
  array('Zulassen, daß mehrere Benutzer die gleiche eMail Adresse haben', 'allow_duplicate_emails_addr', 1),
  array('Benutzer dürfen Privatalben anlegen (Anmerkung: wenn von \'ja\' auf \'nein\' umgeschaltet wird werden alle derzeit privaten Alben öffentlich)', 'allow_private_albums', 1), //cpg1.3.0
  array('Admin über genehmigungspflichtige Benutzer-Uplads per eMail benachrichtigen', 'upl_notify_admin_email', 1), //cpg1.3.0
  array('Angemeldeten Benutzern Benutzerliste anzeigen', 'allow_memberlist', 1), //cpg1.3.0  'Benutzerdefinierte Felder für zusätzliche Dateiinformationen (leer lassen, falls nicht benötigt)',
  array('Name Feld 1', 'user_field1_name', 0),
  array('Name Feld 2', 'user_field2_name', 0),
  array('Name Feld 3', 'user_field3_name', 0),
  array('Name Feld 4', 'user_field4_name', 0),  'Cookies-Einstellungen',
  array('Cookie-Name, der vom Skript verwendet wird (muß sich von Cookie-Name des Forums unterscheiden, wenn Forums-Integraion verwendet wird)', 'cookie_name', 0),
  array('Cookie-Pfad', 'cookie_path', 0),  'Verschiedene Einstellungen',
  array('Debug-Modus ein', 'debug_mode', 9), //cpg1.3.0
  array('PHP-notices in Debug-Modus anzeigen', 'debug_notice', 1), //cpg1.3.0
	
	'<br /><div align="left"><a name="notice1"></a>(*) Felder, die mit * gekennzeichnet sind, dürfen nicht geändert werden, wenn sich schon Dateien in der Galerie befinden!<br />
  <a name="notice2"></a>(**) Wenn diese Einträge geändert werden wirken sich die neuen Einstellungen nur auf Dateien/Bilder aus, die von diesem Zeitpunkt an zur Galerie hinzugefügt werden - es ist daher ratsam, diese Einstellungen nicht zu ändern, wenn sich bereits Dateien in der Galerie befinden. Die Änderungen können jedoch auch auf bestehende Bilder angewendet werden durch Verwendung der &quot;<a href="util.php">Admin-Werkzeuge</a> (Größe ändern)&quot;.</div><br />', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP'))
 $lang_db_ecard_php = array(
  'title' => 'Versendete eCards', //cpg1.3.0
  'ecard_sender' => 'Absender', //cpg1.3.0
  'ecard_recipient' => 'Empfänger', //cpg1.3.0
  'ecard_date' => 'Datum', //cpg1.3.0
  'ecard_display' => 'eCard anzeigen', //cpg1.3.0
  'ecard_name' => 'Name', //cpg1.3.0
  'ecard_email' => 'Email', //cpg1.3.0
  'ecard_ip' => 'IP', //cpg1.3.0
  'ecard_ascending' => 'aufsteigend', //cpg1.3.0
  'ecard_descending' => 'absteigend', //cpg1.3.0
  'ecard_sorted' => 'Sortiert', //cpg1.3.0
  'ecard_by_date' => 'nach Datum', //cpg1.3.0
  'ecard_by_sender_name' => 'nach Absender-Name', //cpg1.3.0
  'ecard_by_sender_email' => 'nach Email-Adresse des Absenders', //cpg1.3.0
  'ecard_by_sender_ip' => 'nach IP-Adresse des Absenders', //cpg1.3.0
  'ecard_by_recipient_name' => 'nach Empfänger-Name', //cpg1.3.0
  'ecard_by_recipient_email' => 'nach Email-Adresse des Empfängers', //cpg1.3.0
  'ecard_number' => 'zeige Eintrag %s bis %s von %s', //cpg1.3.0
  'ecard_goto_page' => 'gehe zu Seite', //cpg1.3.0
  'ecard_records_per_page' => 'Einträge pro Seite', //cpg1.3.0
  'check_all' => 'alle markieren', //cpg1.3.0
  'uncheck_all' => 'alle Markierungen entfernen', //cpg1.3.0
  'ecards_delete_selected' => 'Gewählte eCard-Einträge löschen', //cpg1.3.0
  'ecards_delete_confirm' => 'Alle Einträge löschen? Entsprechendes Feld ankreuzen!', //cpg1.3.0
  'ecards_delete_sure' => 'wirklich löschen', //cpg1.3.0
);
// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP'))
 $lang_db_input_php = array(
  'empty_name_or_com' => 'Sie müssen Ihren Namen und einen Kommentar eingeben',
  'com_added' => 'Ihr Kommentar wurde hinzugefügt',
  'alb_need_title' => 'Sie müssen einen Titel für das Album eingeben!',
  'no_udp_needed' => 'Keine Aktualisierung notwendig.',
  'alb_updated' => 'Das Album wurde aktualisiert',
  'unknown_album' => 'Das gewählte Album existiert nicht oder Sie haben keine Berechtigung, Dateien in dieses Album hochzuladen',
  'no_pic_uploaded' => 'Es wurde keine Datei hochgeladen!<br /><br />Wenn Sie tatsächlich eine Datei zum Hochladen selektiert haben, überprüfen Sie ob Ihr Server das Hochladen von Dateien zulässt...',
  'err_mkdir' => 'Verzeichnis %s konnte nicht angelegt werden!',
  'dest_dir_ro' => 'In das Zielverzeichnis %s kann vom Skript nicht geschrieben werden!',
  'err_move' => '%s kann nicht nach %s verschoben werden!',
  'err_fsize_too_large' => 'Die Datei, die Sie hochgeladen haben ist zu groß (maximal zulässig ist %s x %s) !',
  'err_imgsize_too_large' => 'Die Datei, die Sie hochgeladen haben ist zu groß (maximal zulässig ist %s KB) !',
  'err_invalid_img' => 'Die Datei, die Sie hochgeladen haben ist kein gültiger Bildtyp!',
  'allowed_img_types' => 'Sie können nur %s Bilder hochladen.',
  'err_insert_pic' => 'Das Bild \'%s\' kann nicht in das Album eingefügt werden',
  'upload_success' => 'Ihre Datei wurde erfolgreich hochgeladen.<br /><br />Die Datei wird nach der Bestätigung durch den Admin sichtbar sein.',
  'notify_admin_email_subject' => '%s - Upload-Benachrichtigung', //cpg1.3.0
  'notify_admin_email_body' => '%s hat eine Datei hochgeladen, die bestätigt werden muss. Gehe zu %s', //cpg1.3.0
  'info' => 'Information',
  'com_added' => 'Kommentar hinzugefügt',
  'alb_updated' => 'Album aktualisiert',
  'err_comment_empty' => 'Ihr Kommentar enthält keine Zeichen!',
  'err_invalid_fext' => 'Nur Dateien mit den folgenden Erweiterungen sind zulässig: <br /><br />%s.',
  'no_flood' => 'Leider sind Sie schon der Autor des letzten Kommentars zu dieser Datei<br /><br />Bearbeiten Sie Ihren bestehenden Kommentar, wenn Sie ihn verändern wollen',
  'redirect_msg' => 'Sie werden weitergeleitet.<br /><br /><br />Klicken Sie \'weiter\', falls die Seite sich nicht automatisch aktualisiert',
  'upl_success' => 'Ihre Datei wurde erfolgreich hinzugefügt',
  'email_comment_subject' => 'In der Coppermine Photo Gallery wurde ein Kommentar abgegeben', //cpg1.3.0
  'email_comment_body' => 'Jemand hat einen Kommentar in Ihrer Galerie abgegeben. Um den Kommentar anzusehen, klicken Sie hier: ', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP'))
 $lang_delete_php = array(
  'caption' => 'Überschrift',
  'fs_pic' => 'Bild in Originalgröße',
  'del_success' => 'erfolgreich gelöscht',
  'ns_pic' => 'normal grosses Bild',
  'err_del' => 'kann nicht gelöscht werden',
  'thumb_pic' => 'Thumbnail',
  'comment' => 'Kommentar',
  'im_in_alb' => 'Bild in Album',
  'alb_del_success' => 'Album \'%s\' gelöscht',
  'alb_mgr' => 'Alben-Manager',
  'err_invalid_data' => 'Ungültige Daten empfangen in \'%s\'',
  'create_alb' => 'Erzeuge Album \'%s\'',
  'update_alb' => 'Aktualisiere Album \'%s\' mit Titel \'%s\' und Index \'%s\'',
  'del_pic' => 'Datei löschen',
  'del_alb' => 'Album löschen',
  'del_user' => 'Benutzer löschen',
  'err_unknown_user' => 'Der gewählte Benutzer ist nicht vorhanden!',
  'comment_deleted' => 'Kommentar wurde gelöscht',
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){
$lang_display_image_php = array(
  'confirm_del' => 'Diese Datei wirklich LÖSCHEN? \\nKommentare werden ebenfalls gelöscht.',
  'del_pic' => 'Diese Datei Löschen',
  'size' => '%s x %s Pixel',
  'views' => '%s mal',
  'slideshow' => 'Diashow',
  'stop_slideshow' => 'Diashow anhalten',
  'view_fs' => 'Klicken für Bild in voller Grösse',
  'edit_pic' => 'Dieses Bild bearbeiten',
  'crop_pic' => 'Zuschneiden und drehen', //cpg1.3.0
);

$lang_picinfo = array(
  'title' =>'Datei-Information',
  'Filename' => 'Dateiname',
  'Album name' => 'Name des Albums',
  'Rating' => 'Bewertung (%s Stimmen)',
  'Keywords' => 'Stichworte',
  'File Size' => 'Dateigrösse',
  'Dimensions' => 'Abmessungen',
  'Displayed' => 'Angezeigt',
  'Camera' => 'Kamera',
  'Date taken' => 'Aufnahmedatum',
  'Aperture' => 'Blende',
  'Exposure time' => 'Belichtungszeit',
  'Focal length' => 'Brennweite',
  'Comment' => 'Kommentar',
  'addFav'=>'zu Favoriten hinzufügen',
  'addFavPhrase'=>'Favoriten',
  'remFav'=>'aus Favoriten entfernen',
  'iptcTitle'=>'IPTC Titel', //cpg1.3.0
  'iptcCopyright'=>'IPTC Copyright', //cpg1.3.0
  'iptcKeywords'=>'IPTC Stichworte', //cpg1.3.0
  'iptcCategory'=>'IPTC Kategorie', //cpg1.3.0
  'iptcSubCategories'=>'IPTC Unter-Kategorie', //cpg1.3.0
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Diesen Kommentar bearbeiten',
  'confirm_delete' => 'Wollen Sie diesen Kommentar wirklich löschen?', //js-alert
  'add_your_comment' => 'Fügen Sie Ihren Kommentar hinzu',
  'name'=>'Name',
  'comment'=>'Kommentar',
  'your_name' => 'Ihr Name',
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Bild anklicken, um das Fenster zu schliessen!',
);
}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP'))
 $lang_ecard_php =array(
  'title' => 'eCard senden',
  'invalid_email' => '<b>Achtung</b> : ungültige eMail Adresse !',
  'ecard_title' => 'Eine eCard von %s für Dich',
  'error_not_image' => 'Nur Bilder können als eCard verschickt werden.', //cpg1.3.0
  'view_ecard' => 'Falls diese eCard nicht korrekt angezeigt wird klicken Sie bitte auf den folgenden Link: ',
  'view_more_pics' => 'Klicken Sie auf diesen Link, um mehr Bilder ansehen zu können!',
  'send_success' => 'Ihre eCard wurde gesendet',
  'send_failed' => 'Leider kann der Server Ihre eCard nicht versenden...',
  'from' => 'Von',
  'your_name' => 'Ihr Name',
  'your_email' => 'Ihre eMail Adresse',
  'to' => 'An',
  'rcpt_name' => 'Empfänger Name',
  'rcpt_email' => 'Empfanger eMail Adresse',
  'greetings' => 'Grüsse',
  'message' => 'Nachricht',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP'))
 $lang_editpics_php = array(
  'pic_info' => 'Bild-Info',
  'album' => 'Album',
  'title' => 'Titel',
  'desc' => 'Beschreibung',
  'keywords' => 'Stichworte',
  'pic_info_str' => '%sx%s - %sKB - %s x angesehen - %s x bewertet',
  'approve' => 'Datei genehmigen',
  'postpone_app' => 'Genehmigung verschieben',
  'del_pic' => 'Datei löschen',
  'read_exif' => 'EXIF-Daten erneut einlesen', //cpg1.3.0
  'reset_view_count' => 'Zähler x mal angesehen auf Null setzen',
  'reset_votes' => 'Anzahl Stimmen auf Null setzen',
  'del_comm' => 'Kommentare löschen',
  'upl_approval' => 'Genehmigung zum Hochladen',
  'edit_pics' => 'Bilder bearbeiten',
  'see_next' => 'nächste Bilder ansehen',
  'see_prev' => 'vorherige Bilder ansehen',
  'n_pic' => '%s Dateien',
  'n_of_pic_to_disp' => 'Dateien pro Seite',
  'apply' => 'Änderungen ausführen',
  'crop_title' => 'Coppermine Bild-Editor', //cpg1.3.0
  'preview' => 'Vorschau', //cpg1.3.0
  'save' => 'Bild speichern', //cpg1.3.0
  'save_thumb' =>'Speichern als Thumbnail', //cpg1.3.0
  'sel_on_img' =>'Die Auswahl muss vollständig innerhalb des Bildes liegen!', //js-alert //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP'))
 $lang_faq_php = array(
  'faq' => 'Häufig gestellte Fragen (Frequently Asked Questions)', //cpg1.3.0
  'toc' => 'Inhalt', //cpg1.3.0
  'question' => 'Frage: ', //cpg1.3.0
  'answer' => 'Antwort: ', //cpg1.3.0
);

if (defined('FAQ_PHP'))
 $lang_faq_data = array(
  'Allgemeines', //cpg1.3.0
  array('Warum muss ich mich registrieren?', 'Der Administrator kann verlangen, dass Sie sich registrieren (oder auch nicht). Durch die Registrierung erhalten Sie möglicherweise einige zusätzliche Features, wie z.B. Dateien hochladen, eine Favoriten-Liste, Bewertung von Bildern, Abgabe von Kommentaren etc. ', 'allow_user_registration', '0'), //cpg1.3.0
  array('Wie kann ich mich registrieren?', 'Klicken Sie auf &quot;Registrieren&quot; und füllen Sie die notwendigen Felder aus (und die optionalen, wenn Sie möchten).<br />Wenn der Administrator eMail-Aktivierung eingeschaltet hat bekommen Sie eine eMail an die Adresse, die Sie bei der Registrierung angegeben haben, in der Anweisungen enthalten sind, wie Sie Ihr Benutzerkonto aktivieren k&ouml;nnen. In diesem Fall muss Ihr Konto aktiviert werden bevor Sie sich anmelden k&ouml;nnen.', 'allow_user_registration', '1'), //cpg1.3.0
  array('Wie kann ich mich anmelden?', 'Klicken Sie auf &quot;Anmelden&quot;, geben Sie Ihren Benutzernamen und Ihr Paswort ein, und kreuzen Sie die Option &quot; Immer angemeldet bleiben&quot; an, damit Sie sich bei Ihrem nächsten Besuch auf der Seite nicht erneut anmelden m&uuml;ssen.<br /><b>WICHTIG: Um sich anzumelden m&uuml;ssen Sie Cookies in Ihrem Browser zulassen, und das Cookie darf nicht gelöscht werden, wenn Sie die Option &quot;Immer angemeldet bleiben&quot; nutzen wollen.</b>', 'offline', 0), //cpg1.3.0
  array('Warum kann ich mich anmelden?', 'Haben Sie sich registriert und die Anweisungen ausgeführt, die in der Aktivierungsmail an Sie gesendet wurden?. Der Link in der Aktivierungsmail schaltet Ihr Benutzerkonto frei. Bezüglich anderer Probleme beim Anmelden, wenden Sie sich an den Admin dieser Seite.', 'offline', 0), //cpg1.3.0  array('Ich habe mein Passwort vergessen. Was nun?', 'Wenn diese einen Link &quot;Passwort vergessen&quot; auf der Anmeldeseite anzeigt, dann benutze ihn. Ansonsten nimm Kontakt mit dem Admin dieser Seite auf und bitte ihn um ein neues Passwort.', 'offline', 0), //cpg1.3.0
  //array('Meine eMail-Adresse hat sich geändert. Was tun?', 'Melde Sie sich an und ändern Sie Ihre eMail-Adresse im Menüpunkt &quot; mein Profil&quot;', 'offline', 0), //cpg1.3.0
  array('Wie speichere ich eine Datei in &quot;meine Favoriten&quot;?', 'Klicken Sie auf &quot;Datei-Info&quot; (<img src="images/info.gif" width="16" height="16" border="0" alt="Picture information" />); gehen Sie ganz nach unten auf der Seite und klicken Sie auf &quot;Zu Favoriten hinzufügen&quot;.<br />Möglicherweise ist die Anzeige des Datei-Info Bereichs auch standardmäßig eingeschaltet.<br />Wichtig: Cookies müssen aktiviert sein und Sie dürfen den Cookie nicht löschen (im Cookie werden die Favoriten gespeichert).', 'offline', 0), //cpg1.3.0
  array('Wie kann ich eine Datei bewerten?', 'Klicken Sie auf das Thumbnail (kleine Vorschaugrafik) einer Datei und wählen Sie eine Bewertung (angezeigt unterhalb des Bildes).', 'offline', 0), //cpg1.3.0
  array('Wie kann ich eine Kommentar abgeben?', 'Klicken Sie auf das Thumbnail (kleine Vorschaugrafik) einer Datei, gehen Sie nach unten auf der Seite und geben Sie Ihren Kommentar ein. Wenn keine Eingabe eines Kommentars möglich ist müssen Sie sich eventuell erst registrieren und anmelden, damit diese Option zur Verfügung steht.', 'offline', 0), //cpg1.3.0
  array('Wie kann ich eine Datei hochladen?', 'Klicken Sie auf &quot;Datei hochladen&quot; und wählen Sie das Album aus, in das Sie die Datei hochladen wollen, klicken Sie auf &quot;Durchsuchen&quot; und wählen Sie die Datei aus, die Sie hochladen wollen und klicken Sie dann auf &quot;öffnen&quot; (fügen Sie einen Titel, eine Beschriftung und ein paar Stichworte ein, wenn Sie möchten). Um den Vorgang abzuschliessen, klicken Sie auf &quot;Datei hochladen&quot;', 'allow_private_albums', 0), //cpg1.3.0
  array('Wohin kann ich Dateien hochladen?', 'Sie können Dateien in Alben hochladen, die Sie innerhalb der Kategorie &quot;meine Galerie&quot; erstellen können. Der Administrator der Seite kann Ihnen auch das Recht einräumen, in ein oder mehrere Alben der allgemeinen Galerie hochzuladen. Falls das der Fall ist, werden diese Alben Ihnen im Auswahlmenü auf der Upload-Seite angezeigt', 'allow_private_albums', 0), //cpg1.3.0
  array('Welche Art und Grösse von Dateien kann ich hochladen?', 'Die Art (z.B. jpg oder png) und Grösse bestimmt der Administrator dieser Seite.', 'allow_private_albums', 0), //cpg1.3.0
  array('Was ist &quot;meine Galerie&quot;?', '&quot;Meine Galerie&quot; ist Ihre persönliche Galerie, innerhalb der Sie Dateien hochladen und bearbeiten können.', 'allow_private_albums', 0), //cpg1.3.0
  array('Wie kann ich Alben erzeugen, umbenennen oder löschen in &quot;meine Galerie&quot;?', 'Sie sehen die Optionen erst nach der Anmeldung im Admin-Modus<br />Klicken Sie auf &quot;Erzeuge/ändere meine Alben&quot; und klicken Sie auf &quot;Neu&quot;. Ändern Sie den Text &quot;Neues Album&quot; in den gewünschten Namen ab.<br />Sie können auch bestehende Alben umbenennen, indem Sie sie zuerst anklicken und dann im Eingabefeld unten einen neuen Namen dafür eingeben.<br />Klicken Sie auf &quot;Änderungen übernehmen&quot;, um Ihre Änderungen durchzuführen.', 'allow_private_albums', 0), //cpg1.3.0
  array('Wie kann ich meine Alben abändern und die Zugriffsrechte darauf ändern?', 'Sie sollten nach der Anmeldung bereits im Admin-Modus sein.<br />Klicken Sie auf &quot; Meine Alben bearbeiten&quot;. Wählen Sie in der Zeile &quot;Album aktualisieren&quot; das Album aus, das Sie aktualisieren möchten.<br />Sie können dann den Namen, die Beschreibung, das Thumbnail (Vorschaugrafik) ändern und die Rechte ändern, wer das Album sehen und Kommentare dazu abgeben darf.<br />Um Ihre Änderungen zu bestätigen, klicken Sie am Schluß auf &quot;Album aktualisieren&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Was sind Cookies?', 'Cookies sind kleine Textdateien, die von einem Webserver versendet werden und auf Ihrem Rechner gespeichert werden. Beim erneuten Aufsuchen der Seite können die Cookies wieder vom Server gelesen werden.<br />In der Regel werden Sie dazu genutzt, Sie als Benutzer auf der Seite wieder zu erkennen. Cookies selbst können keine Viren oder sonstige bösartigen Schad-Programme enthalten und sind daher in erster Linie ungefährlich. Einige Seitenbetreiber setzen Cookies allerdings ein, um Verhaltensprofile von Surfern im Internet zu erstellen und nutzen die Informationen in der Regel, um zielgerichtet Werbung für den Surfer zur Verfügung zu stellen.', 'offline', 0), //cpg1.3.0
  array('Woher kann ich dieses Porgramm für meine Homepage bekommen?', 'Diese Seite läuft mit Coppermine. Coppermine ist eine kostenlose Multimedia-Galerie, die unter der Lizenz GNU GPL erscheint. Die Software ist voller Features und für einige Platformen erhältlich. Besuchen Sie die <a href="http://coppermine.sf.net/">Coppermine Home Page</a> für zusätzliche Informationen oder um die Software herunter zu laden.', 'offline', 0), //cpg1.3.0  'Seiten-Navigation', //cpg1.3.0
  array('Was ist &quot;meine Galerie&quot;?', 'Mit diesem Menüpunkt können Sie Ihre eigene Benutzer-Galerie erstellen und bearbeiten.', 'allow_private_albums', 0), //cpg1.3.0
  array('Was ist der Unterschied zwischen &quot;Admin Modus&quot; und &quot;Benutzer-Modus&quot;?', 'Im Admin-Modus werden die Navigations-Elemente zum Erstellen und Ändern Ihrer Benutzer-Galerie angezeigt; der Benutzer-Modus zeigt Ihnen, wie Ihre Benutzer-Galerie für andere Benutzer aussieht (ohne die entsprechenden Menüpunkte).', 'allow_private_albums', 0), //cpg1.3.0
  array('Was ist &quot;Dateien hochladen&quot;?', 'Dieses Feature ermöglicht es Benutzern, eigene Dateien hochzuladen und in Alben zu positionieren (Dateigrösse und -typ wurden vom Admin festgelegt).', 'allow_private_albums', 0), //cpg1.3.0
  array('Was ist &quot;Last Uploads&quot;?', 'Dieser Bereich zeigt die neuesten Dateien, die in eines der Alben der Galerie hochgeladen wurden.', 'offline', 0), //cpg1.3.0
  array('Was ist &quot;neueste Kommentare&quot;?', 'Dieser Bereich zeigt die zuletzt abgegebenen Kommentare unterhalb der Vorschau-Bilder (Thumbnails) der Dateien, auf die sich die Kommentare beziehen.', 'offline', 0), //cpg1.3.0
  array('Was ist &quot;am meisten angesehen&quot;?', 'Dieser Bereich zeigt die beliebtesten Dateien (am meisten angesehen) der gesamten Galerie oder des Bereichs an, in dem Sie sich befindest.', 'offline', 0), //cpg1.3.0
  array('Was ist &quot;am besten bewertet&quot;?', 'Durchschnittliche Bewertung der Datei (Bsp.: 5 Benutzer gaben einem Bild ein Bewertung von <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: das Bild hat eine durchschnittliche Bewertung von <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;Wenn 5 Benutzer ein Bild mit Noten von 1 bis 5 (1,2,3,4,5) bewerten würde der Schnitt ebenfalls so aussehen: <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />Die Bewertungs-Skala reicht von <img src="images/rating5.gif" width="65" height="14" border="0" alt="super" /> (super) bis <img src="images/rating0.gif" width="65" height="14" border="0" alt="sehr schlecht" /> (sehr schlecht).', 'offline', 0), //cpg1.3.0
  array('Was ist &quot;Meine Favoriten&quot;?', 'Mit diesem Feature können Sie Bilder, die Sie später noch einmal ansehen wollen in einer Favoriten-Liste speichern. Dazu müssen Sie nicht einmal angemeldet sein, da die Liste in einem Cookie auf Ihrem Computer gespeichert wird. Beachten Sie aber: die Favoriten stehen Ihnen nur an diesem Computer zur Verfügung; wenn die Cookies gelöscht werden sind die Favoriten ebenfalls verschwunden.', 'offline', 0), //cpg1.3.0
);
// ------------------------------------------------------------------------- //
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP'))
 $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Passwort-Erinnerung', //cpg1.3.0
  'err_already_logged_in' => 'Sie sind schon angemeldet!', //cpg1.3.0
  'enter_username_email' => 'Geben Sie Ihren Benutzernamen oder Ihre eMail-Adresse ein', //cpg1.3.0
  'submit' => 'los', //cpg1.3.0
  'failed_sending_email' => 'Die eMail mit der Paswort-Erinnerung kann nicht gesendet werden!', //cpg1.3.0
  'email_sent' => 'Eine eMail mit Ihrem Benutzernamen und Passwort wurde an %s gesendet.', //cpg1.3.0
  'err_unk_user' => 'Der gewählte Benutzer existiert nicht!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - Passwort-Erinnerung', //cpg1.3.0
  'passwd_reminder_body' => 'Sie wollten an Ihren Benutzernamen und Ihr Passwort erinnert werden:
Benutzername: %s
Passwort: %s
Klicken %s um Sie anzumelden.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP'))
 $lang_groupmgr_php = array(
  'group_name' => 'Gruppen-Name',
  'disk_quota' => 'Speicherplatz',
  'can_rate' => 'Darf Bilder bewerten',
  'can_send_ecards' => 'Darf eCards versenden',
  'can_post_com' => 'Darf Kommentare abgeben',
  'can_upload' => 'Darf Dateien hochladen',
  'can_have_gallery' => 'Darf eine persönliche Galerie haben',
  'apply' => 'Änderungen ausführen',
  'create_new_group' => 'Neue Gruppe erstellen',
  'del_groups' => 'ausgewählte Gruppe(n) löschen',
  'confirm_del' => 'Achtung: wenn Sie eine Gruppe löschen werden die dazu gehörenden Benutzer in die Gruppe \'Registrierte Benutzer\' Verschoben !\n\nWollen Sie das ?',
  'title' => 'Benutzer-Gruppen verwalten',
  'approval_1' => 'Öffentl. Upload best. (1)',
  'approval_2' => 'Priv. Upload best. (2)',
  'upload_form_config' => 'Formular-Konfiguration hochladen', //cpg1.3.0
  'upload_form_config_values' => array( 
	'Nur Upload von einzelnen Dateien', 'Nur Uploads von mehreren Dateien', 'Nur Upload von Internet-Adressen (URIs)', 'Nur Upload von ZIP-Dateien', 'Datei-URI', 'Datei-ZIP', 'URI-ZIP', 'Datei-URI-ZIP'), //cpg1.3.0
  'custom_user_upload' => 'Benutzer darf Anzahl der Upload-Feler einstellen?', //cpg1.3.0
  'num_file_upload' => 'Maximale/genaue Anzahl der Datei-Upload Felder', //cpg1.3.0
  'num_URI_upload' => 'Maximale/genaue Anzahl der URI-Upload Felder', //cpg1.3.0
  'note1' => '<b>(1)</b> Das Hochladen in ein öffentliches Album muß durch den Admin bestätigt werden',
  'note2' => '<b>(2)</b> Das Hochladen in ein privates Album muß durch den Admin bestätigt werden',
  'notes' => 'Anmerkungen'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){
$lang_index_php = array(
  'welcome' => 'Startseite'
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Wollen Sie dieses Album wirklich LÖSCHEN? \\nAlle darin befindlichen Dateien und Kommentare werden ebenfalls gelöscht.',
  'delete' => 'löschen',
  'modify' => 'Eigenschaften',
  'edit_pics' => 'Dateien bearbeiten',
);

$lang_list_categories = array(
  'home' => 'Galerie',
  'stat1' => '<b>[pictures]</b> Dateien in <b>[albums]</b> Alben und <b>[cat]</b> Kategorien mit <b>[comments]</b> Kommentaren, <b>[views]</b> mal angesehen',
  'stat2' => '<b>[pictures]</b> Dateien in <b>[albums]</b> Alben, <b>[views]</b> mal angesehen',
  'xx_s_gallery' => '%s\'s Galerie',
  'stat3' => '<b>[pictures]</b> Dateien in <b>[albums]</b> Alben mit <b>[comments]</b> Kommentaren, <b>[views]</b> mal angesehen'
);

$lang_list_users = array(
  'user_list' => 'Benutzer-Liste',
  'no_user_gal' => 'Es gibt keine Benutzer, die eigene Alben haben dürfen',
  'n_albums' => '%s Album/en',
  'n_pics' => '%s Datei(en)'
);

$lang_list_albums = array(
  'n_pictures' => '%s Dateien',
  'last_added' => ', letzte Aktualisierung am %s'
);
}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP'))
 $lang_login_php = array(
  'login' => 'Anmeldung (Login)',
  'enter_login_pswd' => 'Geben Sie Ihren Benutzernamen und Ihr Passwort ein, um Sie anzumelden',
  'username' => 'Benutzername',
  'password' => 'Passwort',
  'remember_me' => 'Immer angemeldet bleiben',
  'welcome' => 'Hallo %s ...',
  'err_login' => '*** Konnte Sie nicht anmelden. Versuchen Sie es nochmal ***',
  'err_already_logged_in' => 'Sie sind schon angemeldet!',
  'forgot_password_link' => 'Passwort vergessen', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP'))
 $lang_logout_php = array(
  'logout' => 'Abmelden',
  'bye' => 'Tschüss %s ...',
  'err_not_loged_in' => 'Sie sind nicht angemeldet!',
);

// ------------------------------------------------------------------------- //
// File phpinfo.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP'))
 $lang_phpinfo_php = array(
  'php_info' => 'PHP info', //cpg1.3.0
  'explanation' => 'Diese Ausgabe wird durch die PHP-FunKtion <a href="http://www.php.net/phpinfo">phpinfo()</a> erzeugt, und innerhalb der Coppermine angezeigt (dabei wird möglicherweise die Ausgabe einiger Felder am rechten Rand abgeschnitten).', //cpg1.3.0
  'no_link' => 'Anderen Personen die phpinfo-Daten anzuzeigen kann ein Sicherheitsrisiko sein - daher wird diese Seite nur angezeigt, wenn Sie als Admin angemeldet sind. Sie können daher anderen keinen Link auf diese Seite zukommen lassen, da ihnen der Zugriff verwährt werden wird!', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP'))
 $lang_modifyalb_php = array(
  'upd_alb_n' => 'Album %s aktualisieren',
  'general_settings' => 'Allgemeine Einstellungen',
  'alb_title' => 'Album Titel',
  'alb_cat' => 'Album Kategorie',
  'alb_desc' => 'Album Beschreibung',
  'alb_thumb' => 'Album Thumbnail',
  'alb_perm' => 'Berechtigungen für dieses Album',
  'can_view' => 'Album kann angesehen werden von',
  'can_upload' => 'Besucher können Dateien hochladen',
  'can_post_comments' => 'Besucher können Kommentare abgeben',
  'can_rate' => 'Besucher können Dateien bewerten',
  'user_gal' => 'Benutzer-Galerie',
  'no_cat' => '* keine Kategorie *',
  'alb_empty' => 'Album ist leer',
  'last_uploaded' => 'Letze Datei, die hochgeladen wurde',
  'public_alb' => 'Jeder (öffentliches Album)',
  'me_only' => 'Nur ich',
  'owner_only' => 'Nur der Besitzer des Albums (%s)',
  'groupp_only' => 'Mitglieder der Gruppe \'%s\'',
  'err_no_alb_to_modify' => 'Es ist kein Album zum Bearbeiten in der Datenbank.',
  'update' => 'Album aktualisieren',
  'notice1' => '(*) abhängig von den %sGruppen%s Einstellungen', //cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP'))
 $lang_rate_pic_php = array(
  'already_rated' => 'Sie haben diese Datei schon bewertet',
  'rate_ok' => 'Ihre Bewertung wurde akzeptiert',
  'forbidden' => 'Sie können Ihre eigenen Dateien nicht bewerten.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Obwohl die Administratoren von {SITE_NAME} versuchen werden, generell alle anstössigen Inhalte so schnell wie möglich zu löschen oder bearbeiten ist es unmöglich, jeden Beitrag zu überprüfen. Daher bestätigen Sie, dass alle Beiträge auf dieser Seite die Ansichten und Meinungen des Authors widerspiegeln und nicht die des Administrators oder Webmasters (außer den Beiträgen, die durch sie verfasst wurden) und sie daher dafür nicht verantwortlich gemacht werden können.<br />
<br />
Sie stimmen zu, keine beleidigende, obszöne, vulgäre, verleumderische, verhetzende,drohende, sexuell-orientierte oder sonstwie illegalen Beiträge zu verfassen. Sie stimmen zu, daß der/die Webmaster, Administrator(en) oder Moderator(en) von {SITE_NAME} das Recht haben, jeden Inhalt zu löschen oder ändern, bei dem sie es für richtig halten. Als Benutzer stimmen Sie zu, daß alle Informationen, die Sie oben eingetragen haben in einer Datenbank gespeichert werden. Obwohl diese Daten ohne Ihre ausdrückliche Zustimmung nicht an Dritte weitergegeben werden, können der Webmaster oder Administrator nicht dafür zur Verantwortung gezogen werden, wenn durch einen Angriff (Hacking) die gespeicherten Daten kompromitiert werden.<br />
<br />
Diese Seite benutzt Cookies, um Daten auf Ihrem Rechner zu speichern. Diese Cookies dienen nur dazu, die Bedienung der Seite zu ermöglichen. Die eMail Adresse wird nur dazu verwendet, die Registrierungs-Details und das Passwort zu bestätigen.<br />
<br />
Durch das Anklicken von 'ich stimme zu' stimmen Sie diesen Bedingungen zu.
EOT;

$lang_register_php = array(
  'page_title' => 'Benutzer-Registrierung',
  'term_cond' => 'Nutzungsbedingungen',
  'i_agree' => 'ich stimme zu',
  'submit' => 'Registrieren absenden',
  'err_user_exists' => 'Der Benutzername, den Sie eingegeben haben existiert schon, bitte wählen Sie einen anderen',
  'err_password_mismatch' => 'Die Passwörter stimmen nicht überein, bitte nochmals eingeben',
  'err_uname_short' => 'Der Benutzername muß mindestens 2 Zeichen lang sein',
  'err_password_short' => 'Das Passwort muß mindestens 2 Zeichen lang sein',
  'err_uname_pass_diff' => 'Benutzername und Passwort müssen unterschiedlich sein',
  'err_invalid_email' => 'eMail Adresse ist ungültig',
  'err_duplicate_email' => 'Es hat sich schon ein anderer Benutzer mit der angegebenen eMail Adresse registriert',
  'enter_info' => 'Geben Sie Registrierungs-Informationen ein',
  'required_info' => 'Pflichtfeld',
  'optional_info' => 'Optional',
  'username' => 'Benutzername',
  'password' => 'Passwort',
  'password_again' => 'Passwort-Bestätigung',
  'email' => 'eMail Adresse',
  'location' => 'Ort',
  'interests' => 'Hobbies',
  'website' => 'Homepage',
  'occupation' => 'Beruf',
  'error' => 'ERROR',
  'confirm_email_subject' => '%s - Registrierungs-Bestätigung',
  'information' => 'Information',
  'failed_sending_email' => 'Die Registrierungs-Bestätigung kann nicht per eMail versendet werden!',
  'thank_you' => 'Danke für Ihre Registrierung.<br /><br />Eine eMail mit Informationen, wie Sie Ihr Benutzerkonto aktivieren können wurde an die angegebene eMail Adresse gesendet.',
  'acct_created' => 'Ihr Benutzerkonto wurde erstellt. Sie können sich jetzt mit Benutzername und Passwort anmelden',
  'acct_active' => 'Ihr Benutzerkonto ist jetzt aktiviert - Sie können sich mit Benutzername und Passwort anmelden',
  'acct_already_act' => 'Ihr Benutzerkonto ist bereits aktiviert!',
  'acct_act_failed' => 'Dieses Benutzerkonto kann nicht aktiviert werden!',
  'err_unk_user' => 'Der gewählte Benutzer existiert nicht!',
  'x_s_profile' => '%s\'s Benutzerprofil',
  'group' => 'Gruppe',
  'reg_date' => 'Registriert am',
  'disk_usage' => 'Speicherplatz-Verbrauch',
  'change_pass' => 'Passwort ändern',
  'current_pass' => 'derzeitiges Passwort',
  'new_pass' => 'neues Passwort',
  'new_pass_again' => 'neues Passwort bestätigen',
  'err_curr_pass' => 'Derzeitiges Passwort ist verkehrt',
  'apply_modif' => 'Änderungen speichern',
  'change_pass' => 'Mein Passwort ändern',
  'update_success' => 'Ihr Benutzerprofil wurde aktualisiert',
  'pass_chg_success' => 'Ihr Passwort wurde geändert',
  'pass_chg_error' => 'Ihr Passwort wurde nicht geändert',
  'notify_admin_email_subject' => '%s - Registrierungs-Benachrichtigung', //cpg1.3.0
  'notify_admin_email_body' => 'Jemand mit dem Benutzernamen "%s" hat sich in Ihrer Galerie registriert', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
Danke für Ihre Registrierung bei {SITE_NAME}

Ihr Benutzername ist : "{USER_NAME}"
Ihr Passwort lautet : "{PASSWORD}"

Um Ihr Benutzerkonto zu aktivieren müssen Sie auf untenstehenden Link klicken
oder ihn kopieren und in der Adresszeile Ihres Browsers einfügen.
{ACT_LINK}

Grüsse,

Das Team von {SITE_NAME}

EOT;

}

// - ------------------------------------------------------------------------ //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP'))
 $lang_reviewcom_php = array(
  'title' => 'Kommentare bearbeiten',
  'no_comment' => 'keine zu bearbeitenden Kommentare vorhanden',
  'n_comm_del' => '%s Kommentar(e) gelöscht',
  'n_comm_disp' => 'Anzahl anzuzeigende Kommentare',
  'see_prev' => 'vorherigen anzeigen',
  'see_next' => 'nächsten anzeigen',
  'del_comm' => 'markierte Kommentare löschen',
);
// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP'))
 $lang_search_php = array(
  0 => 'Dateisammlung durchsuchen',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP'))
 $lang_search_new_php = array(
  'page_title' => 'neue Dateien suchen',
  'select_dir' => 'Wähle Verzeichnis',
  'select_dir_msg' => 'Diese Funktion ermöglicht, mehrere Dateien der Galerie hinzuzufügen, die mit einem FTP-Programm schon auf Ihre Webseite hochgeladen wurden.<br /><br />Wählen Sie das Verzeichnis, in das Sie die Dateien hochgeladen haben',
  'no_pic_to_add' => 'Keine Datei zum Hinzufügen gefunden',
  'need_one_album' => 'Sie brauchen mindestens ein Album, um dieses Funktion auszuführen',
  'warning' => 'Achtung',
  'change_perm' => 'das Skript kann in dieses Verzeichnis nicht schreiben, Sie müssen die Lese-/Schreibberechtigung (chmod) auf 755 oder 777 setzen, bevor Sie versuchen, Dateien hinzuzufügen!',
  'target_album' => '<b>Dateien aus dem Verzeichnis &quot;</b>%s<b>&quot; in </b>%s ablegen',
  'folder' => 'Verzeichnis',
  'image' => 'Datei',
  'album' => 'Album',
  'result' => 'Resultat',
  'dir_ro' => 'Verzeichnis nicht beschreibbar. ',
  'dir_cant_read' => 'Verzeichnis nicht lesbar. ',
  'insert' => 'Füge neue Dateien der Galerie hinzu',
  'list_new_pic' => 'Liste neuer Dateien',
  'insert_selected' => 'Markierte Dateien einfügen',
  'no_pic_found' => 'Keine neuen Dateien gefunden',
  'be_patient' => 'Bitte Geduld, das Skript braucht Zeit, um die Bilder hinzuzufügen',
  'no_album' => 'kein Album gewählt',  //cpg1.3.0
  'notes' =>  '<ul>'.
    '<li><b>OK</b> : bedeutet, daß die Datei erfolgreich hinzugefügt wurde'.
    '<li><b>DP</b> : bedeutet, daß die Datei ein Duplikat ist und schon in der Datenbank vorhanden ist'.
    '<li><b>PB</b> : bedeutet, daß die Datei nicht hinzugefügt werden konnte; überprüfen Sie Ihre Einstellungen und die Berechtigungen der Verzeichnisse, in dem die Dateien liegen'.
    '<li><b>NA</b> : bedeutet, daß Sie kein Album gewählt haben, in das die Dateien eingefügt werden sollen, klicken Sie \'<a href="javascript:history.back(1)">zurück</a>\' und wählen Sie ein Album aus. Wenn kein Album ausgewählt werden kann, dann müssen Sie erst <a href="albmgr.php">ein Album erzeugen</a>.</li>'.
    '<li>Falls die OK, DP, PB \'Zeichen\' nicht erscheinen klicken Sie auf die nicht-funktionierenden Bilder, um die Fehlermeldungen von PHP zu sehen'.
    '<li>Wenn Ihr Browser in ein Timeout läuft, klicken Sie auf die Aktualisieren-Schaltfläche'.
    '</ul>',
  'select_album' => 'Wählen Sie ein Album', //cpg1.3.0
  'check_all' => 'alle auswählen', //cpg1.3.0
  'uncheck_all' => 'Auswahl aufheben', //cpg1.3.0
);
// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP'))
 $lang_banning_php = array(
  'title' => 'Benutzer verbannen',
  'user_name' => 'Benutzername',
  'ip_address' => 'IP-Adresse',
  'expiry' => 'läuft ab (leer bedeutet &quot;für immer&quot;)',
  'edit_ban' => 'Änderungen speichern',
  'delete_ban' => 'Löschen',
  'add_new' => 'Neuen Bann hinzufügen',
  'add_ban' => 'hinzufügen',
  'error_user' => 'Kann angegebenen Benutzer nicht finden', //cpg1.3.0
  'error_specify' => 'Sie müssen entweder einen Benutzernamen oder eine IP-Adresse angeben.', //cpg1.3.0
  'error_ban_id' => 'Ungültige Ban-ID!', //cpg1.3.0
  'error_admin_ban' => 'Sie können sich nicht selbst verbannen!', //cpg1.3.0
  'error_server_ban' => 'Sie wollen Ihren eigenen Server verbannen? Ts ts, das geht doch nicht...', //cpg1.3.0
  'error_ip_forbidden' => 'Sie können diese IP nicht verbannen - sie ist nicht routbar!', //cpg1.3.0
  'lookup_ip' => 'IP-Adresse überprüfen', //cpg1.3.0
  'submit' => 'los!', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP'))
 $lang_upload_php = array(
  'title' => 'Datei hochladen',
  'custom_title' => 'Benutzer-definiertes Formular', //cpg1.3.0
  'cust_instr_1' => 'Die Anzahl der Upload-Felder kann angepasst werden, darf jedoch die untenstehenden Maximalwerte nicht überschreiten.', //cpg1.3.0
  'cust_instr_2' => 'Box Number Requests', //cpg1.3.0
  'cust_instr_3' => 'Datei-Upload Felder: %s', //cpg1.3.0
  'cust_instr_4' => 'URI/URL-Upload Felder: %s', //cpg1.3.0
  'cust_instr_5' => 'URI/URL Upload Felder:', //cpg1.3.0
  'cust_instr_6' => 'Datei-Upload Felder:', //cpg1.3.0
  'cust_instr_7' => 'Geben Sie die Anzahl der gewünschten Felder ein und klicken Sie auf \'weiter\'.', //cpg1.3.0
  'reg_instr_1' => 'Unzulässige Aktion bei der Formular-Erzeugung.', //cpg1.3.0
  'reg_instr_2' => 'Sie können jetzt Dateien mit den untenstehenden Feldern hochladen. Keine Datei darf grösser als %s KB sein. ZIP-Dateien, die mit Datei-Upload oder URI/URL-Upload hochgeladen werden, bleiben komprimiert.', //cpg1.3.0
  'reg_instr_3' => 'Um ZIP-Dateien auf dem Server automatisch zu entpacken, verwenden Sie die ZIP-Upload Felder.', //cpg1.3.0
  'reg_instr_4' => 'Die URI/URL-Upload Felder müssen dieses Format haben \'http://www.meinseite.de/bilder/beispiel.jpg\'', //cpg1.3.0
  'reg_instr_5' => 'Wenn alle Upload-Felder ausgefüllt sind, klicken Sie auf \'weiter\'.', //cpg1.3.0
  'reg_instr_6' => 'ZIP-Upload (wird entpackt auf Server):', //cpg1.3.0
  'reg_instr_7' => 'Datei-Upload:', //cpg1.3.0
  'reg_instr_8' => 'URI/URL-Upload:', //cpg1.3.0
  'error_report' => 'Fehlerliste', //cpg1.3.0
  'error_instr' => 'Folgende Uploads erzeugten Fehler:', //cpg1.3.0
  'file_name_url' => 'Dateiname/URL', //cpg1.3.0
  'error_message' => 'Fehlermeldung', //cpg1.3.0
  'no_post' => 'Datei durch Formular-Post nicht hochgeladen.', //cpg1.3.0
  'forb_ext' => 'Verbotene Datei-Erweiterung/-endung.', //cpg1.3.0
  'exc_php_ini' => 'Dateigrösse grösser als Limit in php.ini.', //cpg1.3.0
  'exc_file_size' => 'Dateigrösse grösser als Coppermine-Einstellungen.', //cpg1.3.0
  'partial_upload' => 'Nur teilweiser Upload.', //cpg1.3.0
  'no_upload' => 'Kein Upload erfolgt.', //cpg1.3.0
  'unknown_code' => 'Unbekannter PHP-Upload-Fehlercode.', //cpg1.3.0
  'no_temp_name' => 'Kein Upload - kein temporärer Name.', //cpg1.3.0
  'no_file_size' => 'Enthält keine Daten/defekt', //cpg1.3.0
  'impossible' => 'Kann nicht verschieben.', //cpg1.3.0
  'not_image' => 'kein Bild/korrupt', //cpg1.3.0
  'not_GD' => 'Keine GD-Erweiterung.', //cpg1.3.0
  'pixel_allowance' => 'maximale Bild-Abmessungen (Pixel-Grösse) überschritten.', //cpg1.3.0
  'incorrect_prefix' => 'Ungültige URI/URL Vorsible', //cpg1.3.0
  'could_not_open_URI' => 'Konnte URI nicht öffnen.', //cpg1.3.0
  'unsafe_URI' => 'Sicherheits nicht überprüfbar.', //cpg1.3.0
  'meta_data_failure' => 'Meat-Daten fehlerhaft', //cpg1.3.0
  'http_401' => '401 Fehlende Berechtigung', //cpg1.3.0
  'http_402' => '402 Bezahlung erforderlich', //cpg1.3.0
  'http_403' => '403 Verboten', //cpg1.3.0
  'http_404' => '404 nicht gefunden', //cpg1.3.0
  'http_500' => '500 Interner Server-Fehler', //cpg1.3.0
  'http_503' => '503 Service nicht verfügbar', //cpg1.3.0
  'MIME_extraction_failure' => 'MIME konnte nicht festgestellt werden.', //cpg1.3.0
  'MIME_type_unknown' => 'Unbekannter MIME-Typ', //cpg1.3.0
  'cant_create_write' => 'Kann zu schreibende Datei nicht erzeugen.', //cpg1.3.0
  'not_writable' => 'Kann nicht in zu schreibende Datei speichern.', //cpg1.3.0
  'cant_read_URI' => 'Kann URI/URL nicht lesen', //cpg1.3.0
  'cant_open_write_file' => 'Kann nicht in URI-Datei schreiben.', //cpg1.3.0
  'cant_write_write_file' => 'Kann nicht in zu schreibende URI-Datei speichern.', //cpg1.3.0
  'cant_unzip' => 'Kann nicht entpacken.', //cpg1.3.0
  'unknown' => 'Unbekannter Fehler', //cpg1.3.0
  'succ' => 'Erfolgreiche Uploads', //cpg1.3.0
  'success' => '%s Uploads waren erfolgreich.', //cpg1.3.0
  'add' => 'Klicken Sie auf \'weiter\', um die Dateien den Alben hinzuzufügen.', //cpg1.3.0
  'failure' => 'Upload-Fehler', //cpg1.3.0
  'f_info' => 'Datei-Information', //cpg1.3.0
  'no_place' => 'Die vorhergehende Datei konnte nicht gesetzt werden.', //cpg1.3.0
  'yes_place' => 'Die vorhergehende Datei wurde erfolgreich gesetzt.', //cpg1.3.0
  'max_fsize' => 'Maximal erlaubte Dateigrösse ist %s KB',
  'album' => 'Album',
  'picture' => 'Datei',
  'pic_title' => 'Datei-Titel',
  'description' => 'Datei-Beschreibung',
  'keywords' => 'Stichworte (Trennung mit Komma)',
  'err_no_alb_uploadables' => 'Leider gibt es kein Album, in das Sie Bilder hochladen dürfen',
  'place_instr_1' => 'Bitte die Dateien jetzt den Alben zuordnen.  Es können jetzt zusätzliche Angaben zu den Dateien gemacht werden.', //cpg1.3.0
  'place_instr_2' => 'Es müssen noch mehr Dateien Alben zugeordnet werden. Klicke Sie \'weiter\'!', //cpg1.3.0
  'process_complete' => 'Alle Dateien wurden erfolgreich Alben zugeordnet.', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP'))
 $lang_usermgr_php = array(
  'title' => 'Benutzer verwalten',
  'name_a' => 'Name aufsteigend',
  'name_d' => 'Name absteigend',
  'group_a' => 'Gruppe aufsteigend',
  'group_d' => 'Gruppe absteigend',
  'reg_a' => 'Registrierungsdatum aufsteigend',
  'reg_d' => 'Registrierungsdatum absteigend',
  'pic_a' => 'Dateianzahl aufsteigend',
  'pic_d' => 'Dateianzahl absteigend',
  'disku_a' => 'Speicherplatz-Verbrauch aufsteigend',
  'disku_d' => 'Speicherplatz-Verbrauch absteigend',
  'lv_a' => 'Letzter Seitenbesuch aufsteigend', //cpg1.3.0
  'lv_d' => 'Letzter Seitenbesuch absteigend', //cpg1.3.0
  'sort_by' => 'Benutzer sortieren nach',
  'err_no_users' => 'Benutzer-Tabelle ist leer!',
  'err_edit_self' => 'Sie können Ihr eigenes Profil hier nicht bearbeiten, benutzen Sie dafür den Link \'mein Profil\'',
  'edit' => 'bearbeiten',
  'delete' => 'löschen',
  'name' => 'Benutzername',
  'group' => 'Gruppe',
  'inactive' => 'Inaktiv',
  'operations' => 'Aktion',
  'pictures' => 'Dateien',
  'disk_space' => 'Speicherplatzverbrauch / Quota',
  'registered_on' => 'Registriert am',
  'last_visit' => 'Letzter Seitenbesuch', //cpg1.3.0
  'u_user_on_p_pages' => '%d Benutzer auf %d Seite(n)',
  'confirm_del' => 'Wollen Sie diesen Benutzer wirklich LÖSCHEN? \\nAlle seine Dateien und Alben werden ebenfalls gelöscht.', //js-alert //cpg1.3.0
  'mail' => 'MAIL',
  'err_unknown_user' => 'Gewählter Benutzer existiert nicht!',
  'modify_user' => 'Benutzer ändern',
  'notes' => 'Anmerkungen',
  'note_list' => '<li>Wenn Sie das derzeitige Passwort nicht ändern wollen, lassen Sie das Feld "Passwort" leer',
  'password' => 'Passwort',
  'user_active' => 'Benutzer ist aktiv',
  'user_group' => 'Benutzergruppe',
  'user_email' => 'eMail Adresse des Benutzers',
  'user_web_site' => 'Webseite des Benutzers',
  'create_new_user' => 'neuen Benutzer anlegen',
  'user_location' => 'Ort',
  'user_interests' => 'Hobbies/Interessen',
  'user_occupation' => 'Beruf/Beschäftigung',
  'latest_upload' => 'neueste Uploads', //cpg1.3.0
  'never' => 'nie', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP'))
 $lang_util_php = array(
  'title' => 'Admin-Werkzeuge (Grösse ändern)',
  'what_it_does' => 'Was macht dieses Tool',
  'what_update_titles' => 'Erzeugt Titel aus Dateinamen',
  'what_delete_title' => 'Löscht Titel',
  'what_rebuild' => 'Erneuert Thumbnails und Dateien in Zwischengrösse gemäß aktuellen Einstellungen',
  'what_delete_originals' => 'Löscht Bilder in Original-Grösse und ersetzt sie mit Bildern in Zwischengrösse',
  'file' => 'Datei',
  'title_set_to' => 'Ändere Titel auf',
  'submit_form' => 'los',
  'updated_succesfully' => 'erfolgreich geändert',
  'error_create' => 'FEHLER beim erzeugen von',
  'continue' => 'Mehr Bilder durchlaufen',
  'main_success' => 'Die Datei %s wurde erfolgreich als Hauptbild benutzt',
  'error_rename' => 'Fehler beim Umbenennen von %s zu %s',
  'error_not_found' => 'Die Datei %s wurde nicht gefunden',
  'back' => 'zurück zur Auswahl',
  'thumbs_wait' => 'Aktualisiere Thumbnails und/oder Bilder in Zwischengrösse, bitte warten...',
  'thumbs_continue_wait' => 'Fortfahren mit der Aktualisierung der Thumbnails und/oder Bilder in Zwischengrösse...',
  'titles_wait' => 'Aktualisiere Überschriften, bitte warten...',
  'delete_wait' => 'Lösche Überschriften, bitte warten...',
  'replace_wait' => 'Lösche Originale und ersetze sie mit Bilder in Zwischengrösse, bitte warten..',
  'instruction' => 'Kurzanleitung',
  'instruction_action' => 'Wähle Aktion',
  'instruction_parameter' => 'Wähle Parameter',
  'instruction_album' => 'Wähle Album',
  'instruction_press' => 'Klicke %s',
  'update' => 'Thumbnails und/oder Bilder in Zwischengrösse aktualisieren',
  'update_what' => 'Was soll aktualisiert werden',
  'update_thumb' => 'Nur Thumbnails',
  'update_pic' => 'Nur Bilder in Zwischengrösse',
  'update_both' => 'Sowohl Thumbnails als auch Bilder in Zwischengrösse',
  'update_number' => 'Anzahl der Bilder, die pro Klick aktualisiert werden sollen',
  'update_option' => '(Verringere diesen Wert niedriger, wenn &quot;Time-Out&quot;-Probleme auftreten sollten)',
  'filename_title' => 'Dateiname &rArr; Bild-Überschrift',
  'filename_how' => 'Wie soll der Dateiname modifiziert werden',
  'filename_remove' => 'Übersetze die Engung .jpg und ersetze _ (Unterstrich) mit Leerzeichen',
  'filename_euro' => 'Ändere 2003_11_23_13_20_20.jpg zu 23/11/2003 13:20',
  'filename_us' => 'Ändere 2003_11_23_13_20_20.jpg zu 11/23/2003 13:20',
  'filename_time' => 'Ändere 2003_11_23_13_20_20.jpg zu 13:20',
  'delete' => 'Lösche Bild-Überschriften oder Bilder in Original-Grösse',
  'delete_title' => 'Bild-Überschriften löschen',
  'delete_original' => 'Bilder in Originalgrösse löschen',
  'delete_replace' => 'Lösche die Original-Bilder und ersetze sie mit Bilder in Zwischengrösse',
  'select_album' => 'Wähle Album',
  'delete_orphans' => 'Verwaiste Kommentare löschen (wirkt sich auf alle Alben aus)', //cpg1.3.0
  'orphan_comment' => 'veraiste Kommentare gefunden', //cpg1.3.0
  'delete' => 'löschen', //cpg1.3.0
  'delete_all' => 'alle löschen', //cpg1.3.0
  'comment' => 'Kommentar: ', //cpg1.3.0
  'nonexist' => 'Bezug auf nicht existierende Datei # ', //cpg1.3.0
  'phpinfo' => 'phpinfo anzeigen', //cpg1.3.0
  'update_db' => 'Datenbank aktualisieren', //cpg1.3.0
  'update_db_explanation' => 'Wenn Sie Coppermine-Dateien ersetzt haben, eine Modifikation oder ein Upgrade von einer frühreren Version von Coppermine durchgeführt haben, lassen Sie diese Datenbank-Aktualisierung einmal laufen, um die möglicherweise notwendigen Änderungen an der Datenbank durchzuführen bzw. fehlende Tabellen zu erzeugen.', //cpg1.3.0
);

?>
