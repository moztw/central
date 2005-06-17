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
// CVS version: $Id: italian2.php,v 1.2 2004/07/24 15:04:05 gaugau Exp $
// ------------------------------------------------------------------------- //

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Italian',
  'lang_name_native' => 'Italiano',
  'lang_country_code' => 'it',
  'trans_name'=> 'ralf57 (CPG 1.1)',
  'trans_email' => 'greatkingrat@katamail.com',
  'trans_website' => 'http://www.madeinbanzi.it/',
  'trans_name2'=> 'Sesto Avolio aka eolica (with contribs by amicigg and canelli)',
  'trans_email2' => '',
  'trans_website2' => 'http://www.eolica.net/',
  'trans_date' => '2004-05-25',
  'trans_name3'=> '1.3 reviewed by Claudio Anelli aka canelli',
  'trans_email3' => 'canelli at iname.com',
  'trans_website3' => 'http://www.centroveladervio.it/',
  'trans_date3' => '2004-05-27',
);

$lang_charset = 'iso-8859-1';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab');
$lang_month = array('Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic');

// Some common strings
$lang_yes = 'Si';
$lang_no  = 'No';
$lang_back = 'INDIETRO';
$lang_continue = 'CONTINUA';
$lang_info = 'Informazione';
$lang_error = 'Errore';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%d %B %Y';
$lastcom_date_fmt =  '%d/%m/%y alle %H:%M'; //cpg1.3.0
$lastup_date_fmt = '%d %B %Y';
$register_date_fmt = '%d %B %Y';
$lasthit_date_fmt = '%d %B %Y alle %I:%M %p';  //cpg1.3.0
$comment_date_fmt =  '%d %B %Y alle %I:%M %p'; //cpg1.3.0

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'cazzo', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', '*fanculo', 'feces', 'figa', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'puttana', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'troia', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
  'random' => 'Documenti...a casaccio',  //cpg1.3.0
  'lastup' => 'Ultimi arrivi',
  'lastalb'=> 'Ultimi aggiornamenti album',
  'lastcom' => 'Ultimi commenti',
  'topn' => 'Più visti',
  'toprated' => 'Più votati',
  'lasthits' => 'Visti di recente',
  'search' => 'Risultati della ricerca',
  'favpics'=> 'I Miei Preferiti'  //cpg1.3.0
);

$lang_errors = array(
  'access_denied' => 'Non puoi accedere a questa pagina.',
  'perm_denied' => 'Non puoi effettuare questa operazione.',
  'param_missing' => 'Script eseguito senza i parametri richiesti.',
  'non_exist_ap' => 'Documento/album selezionato non presente nel database !',  //cpg1.3.0
  'quota_exceeded' => 'Quota disco superata<br /><br />Hai a disposizione [quota]K, attualmente utilizzi [space]K, un ulteriore documento farebbe superare la quota.', //cpg1.3.0
  'gd_file_type_err' => 'Le librerie GD supportano solo i formati JPEG and PNG.',
  'invalid_image' => 'Immagine corrotta o non supportata dalla libreria GD',
  'resize_failed' => 'Non posso creare le miniature e le immagini intermedie.',
  'no_img_to_display' => 'Nessuna immagine disponibile',
  'non_exist_cat' => 'La categoria selezionata non esiste',
  'orphan_cat' => 'Una categoria non è legata, correggi il problema col Manager Categorie.',  //cpg1.3.0
  'directory_ro' => 'La cartella \'%s\' è protetta in scrittura, i documenti non possono essere cancellati',  //cpg1.3.0
  'non_exist_comment' => 'Il commento selezionato non esiste.',
  'pic_in_invalid_album' => 'Documento appartenente ad un album inesistente (%s)!?',  //cpg1.3.0
  'banned' => 'Sei stato bloccato e non puoi usare questo sito.',
  'not_with_udb' => 'Questa funzione è disabilitata in Coppermine perché è integrata con il software del forum. Ciò che si sta facendo non è supportato in questa configurazione, oppure questa funzione dovrebbe essere gestita dal software del forum.',
  'offline_title' => 'Fuori servizio', //cpg1.3.0
  'offline_text' => 'La galleria è fuori servizio - sarà in linea nel più breve tempo possibile', //cpg1.3.0
  'ecards_empty' => 'Non ci sono registrazioni di e-cartoline da visualizzare. Verifica che la registrazione delle e-cartoline sia abilitata nella configurazione di Coppermine!', //cpg1.3.0
  'action_failed' => 'Operazione non riuscita.  Coppermine non è in grado di elaborare la tua richiesta.', //cpg1.3.0
  'no_zip' => 'Le librerie necessarie per trattare i file ZIP non sono disponibili. Contatta l\'amministratore di Coppermine.', //cpg1.3.0
  'zip_type' => 'Non sei autorizzato ad inviare file ZIP.', //cpg1.3.0
);

$lang_bbcode_help = 'Puoi utilizzare i seguenti codici: <li>[b]<b>Grassetto</b>[/b]</li> <li>[i]<i>Corsivo</i>[/i]</li> <li>[url=http://nomesito.com/]Descrizione del link[/url]</li> <li>[email]user@dominio.it[/email]</li>'; //cpg1.3.0

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'alb_list_title' => 'Vai alla lista degli album',
  'alb_list_lnk' => 'Lista album',
  'my_gal_title' => 'Vai alla galleria personale',
  'my_gal_lnk' => 'Galleria personale',
  'my_prof_lnk' => 'Il mio profilo',
  'adm_mode_title' => 'Passa in modalità admin',
  'adm_mode_lnk' => 'Modalità admin',
  'usr_mode_title' => 'Passa in modalità utente',
  'usr_mode_lnk' => 'Modalità utente',
  'upload_pic_title' => 'Aggiungi uno o più documenti', //cpg1.3.0
  'upload_pic_lnk' => 'Aggiungi documenti', //cpg1.3.0
  'register_title' => 'Crea un utente',
  'register_lnk' => 'Registrati',
  'login_lnk' => 'Login',
  'logout_lnk' => 'Logout',
  'lastup_lnk' => 'Ultimi arrivi',
  'lastcom_lnk' => 'Ultimi commenti',
  'topn_lnk' => 'Più visti',
  'toprated_lnk' => 'Più votati',
  'search_lnk' => 'Cerca',
  'fav_lnk' => 'I miei Preferiti',
  'memberlist_title' => 'Visualizza la lista degli utenti', //cpg1.3.0
  'memberlist_lnk' => 'Lista Utenti', //cpg1.3.0
  'faq_title' => 'Domande frequenti (F.A.Q.) sulla galleria fotografica &quot;Coppermine&quot;', //cpg1.3.0
  'faq_lnk' => 'FAQ', //cpg1.3.0
);

$lang_gallery_admin_menu = array(
  'upl_app_lnk' => 'Approva uploads',
  'config_lnk' => 'Configura',
  'albums_lnk' => 'Album',
  'categories_lnk' => 'Categorie',
  'users_lnk' => 'Utenti',
  'groups_lnk' => 'Gruppi',
  'comments_lnk' => 'Rivedi commenti', //cpg1.3.0
  'searchnew_lnk' => 'Aggiungi documenti (massivo)', //cpg1.3.0
  'util_lnk' => 'Manutenzione',  //cpg1.3.0
  'ban_lnk' => 'Blocca Utenti',
  'db_ecard_lnk' => 'Visualizza e-cartoline', //cpg1.3.0
);

$lang_user_admin_menu = array(
  'albmgr_lnk' => 'Crea / ordina album personali',
  'modifyalb_lnk' => 'Modifica album personali',
  'my_prof_lnk' => 'Il mio profilo',
);

$lang_cat_list = array(
  'category' => 'Gallerie',
  'albums' => 'Album',
  'pictures' => 'Documenti', //cpg1.3.0
);

$lang_album_list = array(
  'album_on_page' => '%d album in %d pagine',  //cpg1.3.0
);

$lang_thumb_view = array(
  'date' => 'DATA',
//Sort by filename and title
  'name' => 'NOME DOC',
  'title' => 'TITOLO',
  'sort_da' => 'Ordina per data crescente',
  'sort_dd' => 'Ordina per data decrescente',
  'sort_na' => 'Ordina per nome crescente',
  'sort_nd' => 'Ordina per nome decrescente',
  'sort_ta' => 'Ordina per titolo crescente',
  'sort_td' => 'Ordina per titolo decrescente',
  'download_zip' => 'Scarica come file ZIP', //cpg1.3.0
  'pic_on_page' => '%d immagini in %d pagine',
  'user_on_page' => '%d utenti in %d pagine', //cpg1.3.0
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Torna alle miniature',
  'pic_info_title' => 'Mostra/Nascondi info documento', //cpg1.3.0
  'slideshow_title' => 'Presentazione', //cpg1.3.0
  'ecard_title' => 'Invia questa immagine come e-cartolina', //cpg1.3.0
  'ecard_disabled' => 'e-cartoline disabilitate', //cpg1.3.0
  'ecard_disabled_msg' => 'Non puoi inviare e-cartoline', //cpg1.3.0
  'prev_title' => 'Precedente', //cpg1.3.0
  'next_title' => 'Successivo', //cpg1.3.0
  'pic_pos' => 'DOCUMENTO %s/%s', //cpg1.3.0
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Vota questo documento', //cpg1.3.0
  'no_votes' => '(Ancora nessun voto)',
  'rating' => '(media attuale : %s / 5 con %s voti)',
  'rubbish' => 'Scadente',
  'poor' => 'Mediocre',
  'fair' => 'Sufficiente',
  'good' => 'Buona',
  'excellent' => 'Eccellente',
  'great' => 'Grande',
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
  CRITICAL_ERROR => 'Errore critico',
  'file' => 'File: ',
  'line' => 'Linea: ',
);

$lang_display_thumbnails = array(
  'filename' => 'Nome del documento : ',
  'filesize' => 'Dimensione documento : ',
  'dimensions' => 'Dimensioni : ',
  'date_added' => 'Aggiunto il : ', //cpg1.3.0
);

$lang_get_pic_data = array(
  'n_comments' => '%s commenti',
  'n_views' => '%s visualiz.',
  'n_votes' => '(%s voti)', //cpg1.3.0
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Info Debug', //cpg1.3.0
  'select_all' => 'Seleziona tutto', //cpg1.3.0
  'copy_and_paste_instructions' => 'Se hai bisogno di chiedere aiuto sul forum di supporto, copia-incolla queste informazioni di debug nel tuo messaggio. Assicurati di sostituire qualsiasi password nella \'query\' con *** prima di inviare.', //cpg1.3.0
  'phpinfo' => 'mostra phpinfo', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => 'Lingua di default', //cpg1.3.0
  'choose_language' => 'Seleziona la lingua', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'Tema di default', //cpg1.3.0
  'choose_theme' => 'Seleziona un tema', //cpg1.3.0
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
  'Exclamation' => 'Esclamazione',
  'Question' => 'Dubbio',
  'Very Happy' => 'Molto felice',
  'Smile' => 'Sorriso',
  'Sad' => 'Triste',
  'Surprised' => 'Sorpresa',
  'Shocked' => 'Shockato',
  'Confused' => 'Confuso',
  'Cool' => 'Figo',
  'Laughing' => 'Sorridente',
  'Mad' => 'Matto',
  'Razz' => 'Razz',
  'Embarassed' => 'Imbarazzato',
  'Crying or Very sad' => 'Molto triste',
  'Evil or Very Mad' => 'Cattivo',
  'Twisted Evil' => 'Molto cattivo',
  'Rolling Eyes' => 'Occhi fuori orbita',
  'Wink' => 'Wink',
  'Idea' => 'Idea',
  'Arrow' => 'Freccia',
  'Neutral' => 'Neutro',
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
  0 => 'Abbandona modalità admin...',
  1 => 'Entra in modalità admin...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Ogni album deve avere un nome !', //js-alert
  'confirm_modifs' => 'Applico davvero le modifiche?', //js-alert
  'no_change' => 'Non hai fatto alcuna modifica !', //js-alert
  'new_album' => 'Nuovo album',
  'confirm_delete1' => 'Cancello davvero questo album ?', //js-alert
  'confirm_delete2' => '\nTutti i documenti ed i commenti andranno persi !', //js-alert
  'select_first' => 'Prima scegli un album', //js-alert
  'alb_mrg' => 'Album Manager',
  'my_gallery' => '* Galleria personale *',
  'no_category' => '* Nessuna categoria *',
  'delete' => 'Cancella',
  'new' => 'Nuova',
  'apply_modifs' => 'Applica le modifiche',
  'select_category' => 'Seleziona categoria',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Parametri necessari per \'%s\' operazione non forniti !',
  'unknown_cat' => 'La categoria scelta non è nel database',
  'usergal_cat_ro' => 'La categoria delle gallerie personali non può essere cancellata !',
  'manage_cat' => 'Gestisci categorie',
  'confirm_delete' => 'Vuoi davvero cancellare questa categoria?', //js-alert
  'category' => 'Categoria',
  'operations' => 'Operazioni',
  'move_into' => 'Sposta in',
  'update_create' => 'Aggiorna/Crea categoria',
  'parent_cat' => 'Categoria superiore',
  'cat_title' => ' Titolo categoria',
  'cat_thumb' => 'Miniatura categoria', //cpg1.3.0
  'cat_desc' => 'Descrizione categoria', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
  'title' => 'Configurazione',
  'restore_cfg' => 'Ripristina impostazioni di default',
  'save_cfg' => 'Salva la nuova configurazione',
  'notes' => 'Note',
  'info' => 'Informazione',
  'upd_success' => 'Configurazione aggiornata',
  'restore_success' => 'Configurazione di default ripristinata',
  'name_a' => 'Nome crescente',
  'name_d' => 'Nome decrescente',
  'title_a' => 'Titolo crescente',
  'title_d' => 'Titolo decrescente',
  'date_a' => 'Data crescente',
  'date_d' => 'Data decrescente',
  'label' => 'etichetta', //cpg1.3.0
  'item' => 'elemento', //cpg1.3.0
  'debug_everyone' => 'Tutti', //cpg1.3.0
  'debug_admin' => 'solo Admin', //cpg1.3.0
);

if (defined('CONFIG_PHP')) $lang_config_data = array(
  'Impostazioni generali',
  array('Nome galleria', 'gallery_name', 0),
  array('Descrizione galleria', 'gallery_description', 0),
  array('Email amministratore', 'gallery_admin_email', 0),
  array('Target per il link \'Vedi altre immagini\' nelle e-cartoline', 'ecards_more_pic_target', 0),
  array('Galleria fuori servizio', 'offline', 1), //cpg1.3.0
  array('Registra e-cartoline', 'log_ecards', 1), //cpg1.3.0
  array('Consenti scarica (download) come ZIP dei Preferiti', 'enable_zipdownload', 1), //cpg1.3.0

  'Lingua, Temi &amp; set di caratteri',
  array('Lingua', 'lang', 5),
  array('Tema', 'theme', 6),
  array('Mostra elenco lingue', 'language_list', 8), //cpg1.3.0
  array('Mostra bandiere lingue', 'language_flags', 8), //cpg1.3.0
  array('Mostra &quot;reset&quot; nella scelta dela lingua', 'language_reset', 1), //cpg1.3.0
  array('Mostra elenco temi', 'theme_list', 8), //cpg1.3.0
  array('Mostra &quot;reset&quot; nella scelta tema', 'theme_reset', 1), //cpg1.3.0
  array('Mostra FAQ', 'display_faq', 1), //cpg1.3.0
  array('Mostra aiuto per bbcode', 'show_bbcode_help', 1), //cpg1.3.0
  array('Codifica caratteri', 'charset', 4), //cpg1.3.0

  'Vista lista album',
  array('Larghezza tabella principale (pixels o %)', 'main_table_width', 0),
  array('Numero di livelli delle categorie da mostrare', 'subcat_level', 0),
  array('Numero di album da mostrare', 'albums_per_page', 0),
  array('Numero di colonne dell\'elenco album', 'album_list_cols', 0),
  array('Dimensione miniature in pixels', 'alb_list_thumb_size', 0),
  array('Contenuto della pagina principale', 'main_page_layout', 0),
  array('Mostra miniature per primo livello album nelle categorie','first_level',1),

  'Vista miniature',
  array('Numero di colonne nella pagina delle miniature', 'thumbcols', 0),
  array('Numero di righe nella pagina delle miniature', 'thumbrows', 0),
  array('Massimo numero di tabs da mostrare', 'max_tabs', 10),  //cpg1.3.0
  array('Mostra descrizione (in aggiunta al titolo) sotto la miniatura', 'caption_in_thumbview', 1),  //cpg1.3.0
  array('Mostra numero di visite sotto la miniatura', 'views_in_thumbview', 1), //cpg1.3.0
  array('Mostra numero di commenti sotto la miniatura', 'display_comment_count', 1),
  array('Mostra nome del proprieatrio sotto la miniatura', 'display_uploader', 1), //cpg1.3.0
  array('Criterio di default per ordinare i documenti', 'default_sort_order', 3), //cpg1.3.0
  array('Minimo numero di voti affinchè un documento entri nella lista dei \'più votati\'', 'min_votes_for_rating', 0), //cpg1.3.0

  'Vista immagine &amp; Impostazioni commenti',
  array('Larghezza della tabella mostra documento (pixels o %)', 'picture_table_width', 0), //cpg1.3.0
  array('Info documenti visibili di default', 'display_pic_info', 1), //cpg1.3.0
  array('Filtra parolacce nei commenti', 'filter_bad_words', 1),
  array('Consenti più commenti consecutivi ad un documento dallo stesso utente (disabilita protezione flood)', 'disable_comment_flood_protect', 1), //cpg1.3.0
  array('Consenti smiles nei commenti', 'enable_smilies', 1),
  array('Lunghezza massima descrizione', 'max_img_desc_length', 0),
  array('Max numero di caratteri in una parola', 'max_com_wlength', 0),
  array('Max numero di linee in un commento', 'max_com_lines', 0),
  array('Lunghezza massima del commento', 'max_com_size', 0),
  array('Mostra film strip', 'display_film_strip', 1),
  array('Numero di miniature nella film strip', 'max_film_strip_items', 0),
  array('Notifica all\'amministratore via email quando arrivano commenti', 'email_comment_notification', 1), //cpg1.3.0
  array('Intervallo nella presentazione in milliseconds (1 second = 1000 milliseconds)', 'slideshow_interval', 0), //cpg1.3.0

  'Impostazioni documenti e miniature',
  array('Qualità immagini JPEG', 'jpeg_qual', 0),
  array('Max dimensione delle miniature <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0), //cpg1.3.0
  array('Usa dimensione ( larghezza o altezza o aspetto Max per miniature e immagini intermedie)<b>**</b>', 'thumb_use', 7),
  array('Crea immagini intermedie','make_intermediate',1),
  array('Max larghezza o altezza delle immagini/video intermedie <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0), //cpg1.3.0
  array('Max grandezza dei documenti da caricare (KB)', 'max_upl_size', 0), //cpg1.3.0
  array('Max larghezza o altezza delle immagini/video caricate (pixels)', 'max_upl_width_height', 0), //cpg1.3.0

  'Impostazioni avanzate documenti e miniature', //cpg1.3.0
  array('Mostra l\'icona degli album privati agli utenti non connessi','show_private',1), //cpg1.3.0
  array('Caratteri proibiti nel nome file', 'forbiden_fname_char',0), //cpg1.3.0
  //array('Estensioni consentite per i documenti', 'allowed_file_extensions',0), //cpg1.3.0
  array('Tipi di immagine consentiti', 'allowed_img_types',0), //cpg1.3.0
  array('Tipi di video consentiti', 'allowed_mov_types',0), //cpg1.3.0
  array('Tipi di audio  consentiti', 'allowed_snd_types',0), //cpg1.3.0
  array('Tipi di documento  consentiti', 'allowed_doc_types',0), //cpg1.3.0
  array('Programma per ridimensionare le immagini','thumb_method',2), //cpg1.3.0
  array('Percorso di ImageMagick \'convert\' (esempio /usr/bin/X11/)', 'impath', 0), //cpg1.3.0
  //array('Tipi di immagine  consentiti (solo per ImageMagick)', 'allowed_img_types',0), //cpg1.3.0
  array('Opzioni linea di comando per ImageMagick', 'im_options', 0), //cpg1.3.0
  array('Lettura dati EXIF nei file JPEG', 'read_exif_data', 1), //cpg1.3.0
  array('Lettura dati IPTC nei file JPEG', 'read_iptc_data', 1), //cpg1.3.0
  array('Cartella degli album <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0), //cpg1.3.0
  array('Cartella file utente <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0), //cpg1.3.0
  array('Prefisso per le immagini intermedie <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0), //cpg1.3.0
  array('Prefisso per le miniature <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0), //cpg1.3.0
  array('Permessi (chmod) di default per le cartelle', 'default_dir_mode', 0), //cpg1.3.0
  array('Permessi (chmod) di default per i file', 'default_file_mode', 0), //cpg1.3.0

  'Impostazioni utenti',
  array('Consenti nuove registrazioni', 'allow_user_registration', 1),
  array('Verifica tramite e-mail richiesta', 'reg_requires_valid_email', 1),
  array('Avvisa amministratore via email di registrazioni utente', 'reg_notify_admin_email', 1), //cpg1.3.0
  array('Consenti due utenti con la stessa email', 'allow_duplicate_emails_addr', 1),
  array('Utenti possono avere album privati (Nota: al cambiamento tra \'sì\' e \'no\' tutti gli album privati diventeranno pubblici)', 'allow_private_albums', 1), //cpg1.3.0
  array('Avvisa amministratore via email di documenti in attesa di approvazione', 'upl_notify_admin_email', 1), //cpg1.3.0
  array('Consenti agli utenti connessi di vedere la Lista Utenti', 'allow_memberlist', 1), //cpg1.3.0

  'Campi personalizzati per le descrizioni (lascia vuoti se inutilizzati)',
  array('Nome campo 1', 'user_field1_name', 0),
  array('Nome campo 2', 'user_field2_name', 0),
  array('Nome campo 3', 'user_field3_name', 0),
  array('Nome campo 4', 'user_field4_name', 0),

  'Impostazioni cookies',
  array('Nome del cookie usato dallo script (quando si usa l\'integrazione con forum, assicurati che sia diverso dal nome cookie di quest\'ultimo)', 'cookie_name', 0),
  array('Percorso del cookie usato dallo script', 'cookie_path', 0),

  'Impostazioni varie',
  array('Attiva modalità debug', 'debug_mode', 9), //cpg1.3.0
  array('Mostra avvisi (notices) in modalità debug', 'debug_notice', 1), //cpg1.3.0

  '<br /><div align="left"><a name="notice1"></a>(*) Le impostazioni con * non devono essere modificate se vi sono già delle immagini nella galleria.<br />
  <a name="notice2"></a>(**) La modifica di queste impostazioni non modifica i file precedentemente inseriti, quindi si consiglia di non modificarli se ci sono già dei file nella galleria. Si possono però applicare le modifiche ai file già esistenti, mediante la funzione &quot;<a href="util.php">Manutenzione</a>&quot; del menu di amministrazione.</div><br />',
);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Invia una e-cartolina', //cpg1.3.0
  'ecard_sender' => 'Mittente', //cpg1.3.0
  'ecard_recipient' => 'Destinatari', //cpg1.3.0
  'ecard_date' => 'Data', //cpg1.3.0
  'ecard_display' => 'Mostra e-cartolina', //cpg1.3.0
  'ecard_name' => 'Nome', //cpg1.3.0
  'ecard_email' => 'Email', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'crescente', //cpg1.3.0
  'ecard_descending' => 'decrescente', //cpg1.3.0
  'ecard_sorted' => 'Ordinata', //cpg1.3.0
  'ecard_by_date' => 'data', //cpg1.3.0
  'ecard_by_sender_name' => 'nome mittente', //cpg1.3.0
  'ecard_by_sender_email' => 'email mittente', //cpg1.3.0
  'ecard_by_sender_ip' => 'indirizzo IP mittente', //cpg1.3.0
  'ecard_by_recipient_name' => 'nome destinatario', //cpg1.3.0
  'ecard_by_recipient_email' => 'email destinatario', //cpg1.3.0
  'ecard_number' => 'visualizzazione righe dal %s al %s di %s', //cpg1.3.0
  'ecard_goto_page' => 'vai a pagina', //cpg1.3.0
  'ecard_records_per_page' => 'Righe per pagina', //cpg1.3.0
  'check_all' => 'Seleziona tutto', //cpg1.3.0
  'uncheck_all' => 'Deseleziona tutto', //cpg1.3.0
  'ecards_delete_selected' => 'Elimina e-cartoline selezionate', //cpg1.3.0
  'ecards_delete_confirm' => 'Sei sicuro di voler cancellare queste righe? Spunta la casella!', //cpg1.3.0
  'ecards_delete_sure' => 'Sono sicuro', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Inserisci nome e commento',
  'com_added' => 'Il tuo commento è stato aggiunto',
  'alb_need_title' => 'Inserisci il titolo dell\'album !',
  'no_udp_needed' => 'Non necessita di aggiornamenti.',
  'alb_updated' => 'Album aggiornato',
  'unknown_album' => 'Album inesistente o caricamento non consentito in questo album',
  'no_pic_uploaded' => 'Nessun documento aggiunto !<br /><br />Controlla che il server permetta i caricamenti (uploads)...', //cpg1.3.0
  'err_mkdir' => 'Impossibile creare la cartella %s !',
  'dest_dir_ro' => 'La cartella di destinazione %s non è scrivibile !',
  'err_move' => 'Impossible spostare %s in %s !',
  'err_fsize_too_large' => 'La dimensione del documento caricato è eccessiva (il massimo consentito è %s x %s) !', //cpg1.3.0
  'err_imgsize_too_large' => 'La grandezza del documento caricato è eccessiva (il massimo consentito è %s KB) !',
  'err_invalid_img' => 'Il file caricato non è una immagine supportata !',
  'allowed_img_types' => 'Puoi caricare %s immagini.',
  'err_insert_pic' => 'Il documento \'%s\' non può essere inserito nell\'album', //cpg1.3.0
  'upload_success' => 'File caricato con successo<br /><br />Sarà visibile dopo il vaglio di un amministratore.', //cpg1.3.0
  'notify_admin_email_subject' => '%s - Notifica inserimento', //cpg1.3.0
  'notify_admin_email_body' => 'Una immagine è stata inserita da %s in attesa di approvazione. Visita %s', //cpg1.3.0
  'info' => 'Informazione',
  'com_added' => 'Commento aggiunto',
  'alb_updated' => 'Album aggiornato',
  'err_comment_empty' => 'Il commento è vuoto !',
  'err_invalid_fext' => 'Solo i file con le seguenti estensioni sono ammessi : <br /><br />%s.',
  'no_flood' => 'Spiacenti, sei già autore del commento<br /><br />Modifica il commento se vuoi',  //cpg1.3.0
  'redirect_msg' => 'Sei stato reindirizzato.<br /><br /><br />Clicca \'CONTINUA\' se la pagina non si ricarica automaticamente',
  'upl_success' => 'Documento aggiunto con successo',  //cpg1.3.0
  'email_comment_subject' => 'Commento inserito nella Galleria', //cpg1.3.0
  'email_comment_body' => 'Qualcuno ha inserito un commento nella tua galleria. Controllalo all\'indirizzo ', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Descrizione',
  'fs_pic' => 'documento grandezza intera',
  'del_success' => 'cancellato con successo',
  'ns_pic' => 'documento normale',
  'err_del' => 'non può essere cancellato',
  'thumb_pic' => 'miniatura',
  'comment' => 'commento',
  'im_in_alb' => 'immagine nell\'album',
  'alb_del_success' => 'Album \'%s\' cancellato',
  'alb_mgr' => 'Album Manager',
  'err_invalid_data' => 'Dati non validi ricevuti in \'%s\'',
  'create_alb' => 'Creazione album \'%s\'',
  'update_alb' => 'Aggiornamento album \'%s\' con titolo \'%s\' ed indice \'%s\'',
  'del_pic' => 'Cancella documento', //cpg1.3.0
  'del_alb' => 'Cancella album',
  'del_user' => 'Cancella utente',
  'err_unknown_user' => 'Utente inesistente !',
  'comment_deleted' => 'Commento cancellato con successo',
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
  'confirm_del' => 'Vuoi davvero cancellare questo documento? \\nI commenti andranno persi.', //js-alert //cpg1.3.0
  'del_pic' => 'CANCELLA QUESTO DOCUMENTO', //cpg1.3.0
  'size' => '%s x %s pixels',
  'views' => '%s volte',
  'slideshow' => 'Presentazione',
  'stop_slideshow' => 'Interrompi presentazione',
  'view_fs' => 'Clicca per immagine a grandezza intera',
  'edit_pic' => 'Modifica descrizione', //cpg1.3.0
  'crop_pic' => 'Ritaglia e Ruota', //cpg1.3.0
);

$lang_picinfo = array(
  'title' =>'Informazioni documento', //cpg1.3.0
  'Filename' => 'Nome file',
  'Album name' => 'Nome album',
  'Rating' => 'Punteggio (%s voti)',
  'Keywords' => 'Keywords',
  'File Size' => 'Grandezza file',
  'Dimensions' => 'Dimensioni',
  'Displayed' => 'Mostrato',
  'Camera' => 'Camera',
  'Date taken' => 'Data di scatto',
  'Aperture' => 'Apertura',
  'Exposure time' => 'Esposizione',
  'Focal length' => 'Focale',
  'Comment' => 'Commento',
  'addFav'=>'Aggiungi a "I miei Preferiti"',
  'addFavPhrase'=>'Preferiti',
  'remFav'=>'Rimuovi da "I miei Preferiti"',
  'iptcTitle'=>'Titolo IPTC', //cpg1.3.0
  'iptcCopyright'=>'Copyright IPTC', //cpg1.3.0
  'iptcKeywords'=>'Chiavi IPTC', //cpg1.3.0
  'iptcCategory'=>'Categoria IPTC', //cpg1.3.0
  'iptcSubCategories'=>'SottoCategoria IPTC', //cpg1.3.0
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Modifica questo commento',
  'confirm_delete' => 'Vuoi davvero cancellare questo commento?', //js-alert
  'add_your_comment' => 'Aggiungi il tuo commento',
  'name'=>'Nome',
  'comment'=>'Commento',
  'your_name' => 'Anon',
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Clicca l\'immagine per chiudere questa finestra',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Invia una e-cartolina',
  'invalid_email' => '<b>Attento</b> : email non valida !',
  'ecard_title' => 'Una e-cartolina da %s per te',
  'error_not_image' => 'Solo le immagini possono essere spedite come e-cartoline.', //cpg1.3.0
  'view_ecard' => 'Se la e-cartolina non è visualizzata correttamente, clicca su questo link',
  'view_more_pics' => 'Clicca su questo link per altre immagini !',
  'send_success' => 'E-cartolina inviata con successo',
  'send_failed' => 'Spiacenti ma il server non può inviare la tua e-cartolina...',
  'from' => 'Da',
  'your_name' => 'Il tuo nome',
  'your_email' => 'La tua email',
  'to' => 'Per ',
  'rcpt_name' => 'Nome destinatario',
  'rcpt_email' => 'Email destinatario',
  'greetings' => 'Saluti',
  'message' => 'Messaggio',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Informazioni documento', //cpg1.3.0
  'album' => 'Album',
  'title' => 'Titolo',
  'desc' => 'Descrizione',
  'keywords' => 'Chiavi',
  'pic_info_str' => '%s &times; %s - %s KB - %s visualiz. - %s voti',
  'approve' => 'Approva documento', //cpg1.3.0
  'postpone_app' => 'Rinvia approvazione',
  'del_pic' => 'Cancella documento', //cpg1.3.0
  'read_exif' => 'Leggi nuovamente info EXIF', //cpg1.3.0
  'reset_view_count' => 'Resetta contatore',
  'reset_votes' => 'Resetta voti',
  'del_comm' => 'Cancella commenti',
  'upl_approval' => 'Approvazione uploads',
  'edit_pics' => 'Modifica documento', //cpg1.3.0
  'see_next' => 'Successivo', //cpg1.3.0
  'see_prev' => 'Precedente', //cpg1.3.0
  'n_pic' => '%s documenti', //cpg1.3.0
  'n_of_pic_to_disp' => 'Numero di documenti da mostrare',  //cpg1.3.0
  'apply' => 'Applica modifiche', //cpg1.3.0
  'crop_title' => 'Editor Immagini Coppermine', //cpg1.3.0
  'preview' => 'Anteprima', //cpg1.3.0
  'save' => 'Salva immagine', //cpg1.3.0
  'save_thumb' =>'Salva come miniatura', //cpg1.3.0
  'sel_on_img' =>'la selezione deve essere tutta interna all\\\'immagine!', //js-alert //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'FAQ - Domande Frequenti', //cpg1.3.0
  'toc' => 'Indice', //cpg1.3.0
  'question' => 'Domanda: ', //cpg1.3.0
  'answer' => 'Risposta: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'General FAQ', //cpg1.3.0
  array('Perchè bisogna registrarsi?', 'L\'amministratore ha la facoltà di rendere obbligatoria o facoltativa la registrazione. La registrazione consente agli utenti anonimi di diventare membri identificati, con la possibilità di inserire immagini proprie, costruire liste di preferiti, votare e commentare le immagini, ed altro.', 'allow_user_registration', '0'),
  array('Come posso registrarmi?', 'Vai su &quot;Registrati&quot; e compila i campi richiesti (e se vuoi anche i campi opzionali).<br />Se l\'Amministratore ha abilitato la registrazione tramite email, dopo aver inviato le tue informazioni dovresti ricevere un messaggio all\'indirizzo indicato durante la registrazione, con le istruzioni su come attivare la tua iscrizione. Occorre confermare l\'iscrizione per poter effettuare il login.', 'allow_user_registration', '1'), //cpg1.3.0
  array('Come posso fare il login?', 'Vai su &quot;Login&quot;, inserisci username e password e spunta &quot;Ricordati di Me&quot; così avrai accesso senza ripetere il login, quando ritornerai nel sito.<br /><b>NOTA: i Cookies devono essere abilitati e non devi cancellare il cookie di questo sito.</b>', 'offline', 0), //cpg1.3.0
  array('Perchè non posso fare il login?', 'Ti sei registrato ed hai seguito il link che ti è stato inviato via email? Il link attiverà la tua registrazione. Per altri problemi di autenticazione contatta l\'amministratore del sito.', 'offline', 0), //cpg1.3.0
  array('Cosa succede se dimentico la password?', 'Se su questo sito è presente il link  &quot;Recupero password&quot; usalo. Altrimenti contatta l\'amministratore del sito per una nuova password.', 'offline', 0), //cpg1.3.0
//  array('Cosa succede se cambio indirizzo email?', 'Collegati e cambia il tuo indirizzo email nella sezione &quot;Il mio profilo&quot;', 'offline', 0), //cpg1.3.0
  array('Come salvo una immagine in &quot;I miei preferiti&quot;?', 'Clicca sull\'immagine e attiva &quot;Mostra/nascondi info immagine&quot; scorri in giù sull\'insieme delle informazioni immagine e clicca su <b>Aggiungi a &quot;I miei preferiti&quot;</b>.<br />L\'amministratore può aver abilitato la visualizzazione delle &quot;Info immagine&quot; per default<br />IMPORTANTE: I Cookies devono essere abilitati ed il cookie di questo sito non deve essere cancellato.', 'offline', 0), //cpg1.3.0
  array('Come voto un\'immagine?', 'Clicca sulla miniatura, vai al fondo della pagina e scegli un voto.', 'offline', 0), //cpg1.3.0
  array('Come inserisco un commento su un\'immagine?', 'Clicca su una miniatura, vai in fondo alla pagina ed inserisci il commento.', 'offline', 0), //cpg1.3.0
  array('Come inserisco un\'immagine?', 'Vai alla sezione &quot;Aggiungi Immagine&quot;, seleziona l\'album in cui vuoi inserirla, clicca &quot;Browse&quot; e cerca l\'immagine da inserire, clicca su &quot;Apri&quot; (aggiungi un titolo e una descrizione se lo desideri) e infine clicca su &quot;Upload immagine&quot;', 'allow_private_albums', 0), //cpg1.3.0

  array('Dove inserisco un\'immagine?', 'Puoi inserire immagini in uno dei tuoi album della &quot;Galleria personale&quot;. L\'amministratore può inoltre consentirti di inserire immagini in uno o più album della Galleria Principale.', 'allow_private_albums', 0), //cpg1.3.0
  array('Che tipo di immagine e di che dimensione posso inserire?', 'La dimensione ed il tipo (jpg, gif, ecc.) sono inmpostati dall\'amministratore.', 'offline', 0), //cpg1.3.0
  array('Cos\'è la &quot;Galleria personale&quot;?', 'La &quot;Galleria personale&quot; è una galleria in cui ogni utente può inserire le proprie immagini e gestirle.', 'allow_private_albums', 0), //cpg1.3.0
  array('Come creo, rinomino o cancello un album nella &quot;Galleria personale&quot;?', 'Devi già trovarti in &quot;Modalità Admin&quot;<br />vai in &quot;Crea/ordina album personali&quot; e clicca su &quot;Nuova&quot;. Cambia &quot;Nuovo Album&quot; con il nome che preferisci.<br />Puoi anche rinominare qualsiasi album presente nella tua galleria<br />Clicca alla fine su &quot;Applica le modifiche&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Come posso modificare o inibire gli utenti a vedere i miei album?', 'Devi già trovarti in &quot;Modalità Admin&quot;<br />Vai in &quot;Modifica album personali&quot;. Sulla barra &quot;Aggiorna Album&quot;, seleziona l\'album che vuoi modificare. <br />Puoi cambiare il nome, la descrizione, la miniatura, limitare i permessi per vedere, votare o commentare.<br />Clicca su &quot;Aggiorna Album&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Come posso vedere le gallerie degli altri utenti?', 'Vai alla &quot;Lista Album&quot; e seleziona &quot;Gallerie Utenti&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Cosa sono i &quot;cookies&quot;?', 'I cookkies sono file di testo con dati che sono inviati dal sito e memorizzati sul tuo computer.<br />I cookies usualmente permettono agli utilizzatori di lasciare e ritornare su un sito senza dover autenticarsi di nuovo o di riselezionare altre preferenze.', 'offline', 0), //cpg1.3.0
  array('Dove posso trovare questo programma per il mio sito?', 'Copermine è una Galleria Multimediale free, rilasciata con licenza GNU GPL. E\' piena di funzionalità ed è realizzata per diverse piattaforme. Visita la <a href="http://coppermine.sf.net/">Home page Coppermine</a> per trovare altre informazioni o per effettuare il download.', 'offline', 0), //cpg1.3.0

  'Navigazione del Sito', //cpg1.3.0
  array('Cos\'è la &quot;Lista Album&quot;?', 'Rappresenta il punto di ingresso dell\'intera galleria con un link a ciascuna categoria. I link alle diverse categorie possono essere delle miniature.', 'offline', 0), //cpg1.3.0
  array('Cos\'e la &quot;Galleria personale&quot;?', 'Permette ad un utente di creare la propria galleria e di aggiungere, cancellare o modificare gli album, e di inserirvi i contenuti.', 'allow_private_albums', 0), //cpg1.3.0
  array('Quali sono le differenze tra la &quot;Modalità Admin&quot; e la &quot;Modalità Utente&quot;?', 'Quando è in &quot;Modalità Admin&quot; l\'utente può modificare la propria galleria (o quelle pubbliche se autorizzato dall\'amministratore).', 'allow_private_albums', 0), //cpg1.3.0
  array('Cos\'è &quot;Carica Immagine&quot;?', 'Permette ad un utente di inserire un\'immagine (dimensione e tipo sono impostati dall\'amministratore) in una galleria selezionata da te o dall\'amministratore.', 'allow_private_albums', 0), //cpg1.3.0
  array('Cos\'è &quot;Ultimi Arrivi&quot;?', 'Permette di vedere gli ultimi arrivi nella galleria.', 'offline', 0), //cpg1.3.0
  array('Cos\'è &quot;Ultimi Commenti&quot;?', 'Permette di vedere gli ultimi commenti - insieme alle immagini - inseriti dagli utenti.', 'offline', 0), //cpg1.3.0
  array('Cos\'è &quot;Le più viste&quot;?', 'Permette di vedere le immagini più viste da tutti gli utenti (collegati o non collegati).', 'offline', 0), //cpg1.3.0
  array('Cos\'è &quot;Le più votate&quot;?', 'Permette di vedere le immagini più votate dagli utenti, mostrando la media dei voti (ad es.: 5 utenti votano ciascuno <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: l\'immagine dovrebbe avere un voto medio di <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ; se cinque utenti votano l\'immagine da 1 a 5 (1,2,3,4,5) la media risultante sarà di <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />I voti vanno da <img src="images/rating5.gif" width="65" height="14" border="0" alt="migliore" /> (migliore) a <img src="images/rating0.gif" width="65" height="14" border="0" alt="peggiore" /> (peggiore).', 'offline', 0), //cpg1.3.0
  array('Cos\'è &quot;I miei Preferiti&quot;?', 'Permette ad un utente di visualizzare le immagini preferite - memorizzate in un cookie sul proprio PC.', 'offline', 0), //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Ricorda la password', //cpg1.3.0
  'err_already_logged_in' => 'Sei già autenticato!', //cpg1.3.0
  'enter_username_email' => 'Inserisci la tua \'username\' o la tua email', //cpg1.3.0
  'submit' => 'Vai', //cpg1.3.0
  'failed_sending_email' => 'Il meccanismo di ricordo della password non può inviare un\'email !', //cpg1.3.0
  'email_sent' => 'Una email con la tua \'username\' and password sono state inviate a %s', //cpg1.3.0
  'err_unk_user' => 'L\'utente selezionato non esiste!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - Password reminder', //cpg1.3.0
  'passwd_reminder_body' => 'Hai richiesto di ricordarti i tuoi dati di login:
Username: %s
Password: %s
Click %s per collegarti.', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Nome gruppo',
  'disk_quota' => 'Quota disco',
  'can_rate' => 'Può votare i documenti',  //cpg1.3.0
  'can_send_ecards' => 'Può inviare e-cartoline',
  'can_post_com' => 'Può scrivere commenti',
  'can_upload' => 'Può inserire documenti',  //cpg1.3.0
  'can_have_gallery' => 'Può avere galleria personale',
  'apply' => 'Applica modifiche',
  'create_new_group' => 'Crea nuovo gruppo',
  'del_groups' => 'Cancella grouppi selezionati',
  'confirm_del' => 'Attenzione, tutti gli utenti di questo gruppo saranno trasferiti nel gruppo degli Utenti registrati - Vuoi proseguire?', //js-alert //cpg1.3.0
  'title' => 'Gestisci gruppi utenti',
  'approval_1' => 'Approvazione Pub. Upl.  (1)',
  'approval_2' => 'Approvazione Priv. Upl.  (2)',
  'note1' => '<b>(1)</b> Gli uploads in un album pubblico necessitano della approvazione',
  'note2' => '<b>(2)</b> Gli uploads in un album di un utente necessitano della approvazione',
  'upload_form_config' => 'Maschera di configurazione dei caricamenti (uploads)', //cpg1.3.0
  'upload_form_config_values' => array( 'solo singolo file', 'solo multi-files', 'solo tramite URI', 'solo tramite file ZIP', 'file+URI', 'file+ZIP', 'URI+ZIP', 'File+URI+ZIP'), //cpg1.3.0
  'custom_user_upload'=>'L\'utente può configurare il numero di caselle di caricamento?', //cpg1.3.0
  'num_file_upload'=>'Numero massimo/esatto di caselle caricamento file', //cpg1.3.0
  'num_URI_upload'=>'Numero massimo/esatto di caselle caricamento URI', //cpg1.3.0
  'notes' => 'Note',
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Benvenuto !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Vuoi davvero cancellare quest\\\'album ? \\nTutte le immagini ed i commenti andranno persi.', //js-alert //cpg1.3.0
  'delete' => 'CANCELLA',
  'modify' => 'PROPRIETÀ',
  'edit_pics' => 'MODIFICA FILE', //cpg1.3.0
);

$lang_list_categories = array(
  'home' => 'Home',
  'stat1' => '<b>[pictures]</b> documenti: <b>[albums]</b> album: <b>[cat]</b> categorie: <b>[comments]</b> commenti: visualiz. <b>[views]</b> volte',  //cpg1.3.0
  'stat2' => '<b>[pictures]</b> documenti: <b>[albums]</b> album: visualiz. <b>[views]</b> volte', //cpg1.3.0
  'xx_s_gallery' => '%s\'s Galleria',
  'stat3' => '<b>[pictures]</b> documenti: <b>[albums]</b> album: <b>[comments]</b> commenti: visualiz. <b>[views]</b> volte',  //cpg1.3.0
);

$lang_list_users = array(
  'user_list' => 'Lista utenti',
  'no_user_gal' => 'Non ci sono gallerie utenti',
  'n_albums' => '%s album',
  'n_pics' => '%s documenti', //cpg1.3.0
);

$lang_list_albums = array(
  'n_pictures' => '%s documenti', //cpg1.3.0
  'last_added' => ', ultimo arrivo del %s',
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Login',
  'enter_login_pswd' => 'inserire nome utente e password per entrare',
  'username' => 'Nome utente',
  'password' => 'Password',
  'remember_me' => 'Ricordati di me!',
  'welcome' => 'Benvenuto %s ...',
  'err_login' => '*** Non posso fare il login. Riprova ***',
  'err_already_logged_in' => 'Sei già connesso !',
  'forgot_password_link' => 'Ho dimenticato la password', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Logout',
  'bye' => 'Arrivederci %s ...',
  'err_not_loged_in' => 'Non sei connesso !',
);

// ------------------------------------------------------------------------- //
// File phpinfo.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'Info PHP', //cpg1.3.0
  'explanation' => 'Questo risultato è generato dalla funzione PHP <a href="http://www.php.net/phpinfo">phpinfo()</a>, visualizzata attraverso Copermine (tagliando il risultato sul lato destro).', //cpg1.3.0
  'no_link' => 'Lasciando che altri vedano le vostre info PHP può essere un rischio per la sicurezza, ecco perché questa pagina è visibile solo in modalità amministratore. Non potete inserire un link a questa sarà negato.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Aggiorna album %s',
  'general_settings' => 'Impostazioni generali',
  'alb_title' => 'Titolo album',
  'alb_cat' => 'Categoria album',
  'alb_desc' => 'Descrizione album',
  'alb_thumb' => 'Miniatura album',
  'alb_perm' => 'Permessi per questo album',
  'can_view' => 'Album visibile da',
  'can_upload' => 'I visitatori possono aggiungere immagini',
  'can_post_comments' => 'I visitatori possono inserire commenti',
  'can_rate' => 'I visitatori possono votare le immagini',
  'user_gal' => 'Galleria utente',
  'no_cat' => '* Nessuna categoria *',
  'alb_empty' => 'Album vuoto',
  'last_uploaded' => 'Ultimo arrivo',
  'public_alb' => 'Tutti (album pubblico)',
  'me_only' => 'Solo per me',
  'owner_only' => 'Solo per il titolare (%s)',
  'groupp_only' => 'Membri del gruppo \'%s\' ',
  'err_no_alb_to_modify' => 'Nessun album che tu possa modificare.',
  'update' => 'Aggiorna album', //cpg1.3.0
  'notice1' => '(*) dipende dalle impostazioni dei %sgruppi%s', //cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Spiacenti, hai già votato questo fili',
  'rate_ok' => 'il tuo voto è stato accettato',
  'forbidden' => 'è proibito votare i propri documenti.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Gli amministratori di <b>{SITE_NAME}</b> rimuoveranno tutto quello che non sarà ritenuto compatibile con le finalità ed il decoro del sito. Ti chiediamo di rispettare il lavoro degli altri utenti e del webmaster.<br />
<br />
Accetti di non pubblicare materiale osceno ed offensivo.<br />
<br />
Le informazioni relative al tuo account sono conservate in un cookie sul tuo computer per velocizzare l'utilizzo della galleria. Il tuo indirizzo email non sarà divulgato a nessuno per nessun motivo.<br />
<br />
Cliccando su 'Accetto' confermi queste condizioni.
EOT;

$lang_register_php = array(
  'page_title' => 'Registrazione utente',
  'term_cond' => 'Termini e condizioni',
  'i_agree' => 'Accetto',
  'submit' => 'Invia registrazione',
  'err_user_exists' => 'Lo username scelto è già utilizzato, scegline un altro',
  'err_password_mismatch' => 'Le password non coincidono, controlla e riprova',
  'err_uname_short' => 'Lo username deve essere almeno di 2 caratteri',
  'err_password_short' => 'La password deve essere almeno di 2 caratteri',
  'err_uname_pass_diff' => 'Username e password devono essere diversi',
  'err_invalid_email' => 'La email non è valida',
  'err_duplicate_email' => 'Email già utilizzata da un altro utente',
  'enter_info' => 'Inserisci info per la registrazione',
  'required_info' => 'Informazioni richieste',
  'optional_info' => 'Informazioni opzionali',
  'username' => 'Username',
  'password' => 'Password',
  'password_again' => 'Riscrivi password',
  'email' => 'Email',
  'location' => 'Dove vivi?',
  'interests' => 'Interessi',
  'website' => 'Sito web',
  'occupation' => 'Occupazione',
  'error' => 'ERRORE',
  'confirm_email_subject' => '%s - Conferma registrazione',
  'information' => 'Informazione',
  'failed_sending_email' => 'La email di conferma non può essere inviata !',
  'thank_you' => 'Grazie per esserti registrato.<br /><br />Una e-mail di conferma e di attivazione è stata inviata alla casella di posta indicata.',
  'acct_created' => 'Il tuo account è stato creato e puoi fare il login',
  'acct_active' => 'Il tuo account è stato attivato e puoi fare il login',
  'acct_already_act' => 'Il tuo account è già attivo !',
  'acct_act_failed' => 'Questo account non può essere attivato !',
  'err_unk_user' => 'Utente selezionato inesistente !',
  'x_s_profile' => 'Profilo di %s',
  'group' => 'Gruppo',
  'reg_date' => 'Iscritto il ',
  'disk_usage' => 'Utilizzo disco',
  'change_pass' => 'Cambia password',
  'current_pass' => 'Password corrente',
  'new_pass' => 'Nuova password',
  'new_pass_again' => 'Ripeti nuova password',
  'err_curr_pass' => 'La password attuale è errata',
  'apply_modif' => 'Applica modifiche',
  'change_pass' => 'Cambia la mia password',
  'update_success' => 'Profilo aggiornato',
  'pass_chg_success' => 'Password cambiata',
  'pass_chg_error' => 'La tua password non è stata cambiata',
  'notify_admin_email_subject' => '%s - Notifica registrazione', //cpg1.3.0
  'notify_admin_email_body' => 'Un nuovo utente con il nome "%s" si è registrato nella galleria', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
Grazie per esserti registrato su {SITE_NAME}

La tua username è : "{USER_NAME}"
La tua password è : "{PASSWORD}"

Per completare la attivazione clicca sul link qui sotto
o copia e incolla nel browser

{ACT_LINK}

Cordiali saluti,

Il webmaster di {SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'Revisiona commenti',
  'no_comment' => 'Non ci sono commenti da revisionare',
  'n_comm_del' => '%s commenti cancellati',
  'n_comm_disp' => 'Numero di commenti da mostrare',
  'see_prev' => 'Vedi precedente',
  'see_next' => 'Vedi successivo',
  'del_comm' => 'Cancella i commenti selezionati',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
  0 => 'Cerca nella galleria',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Cerca nuovi documenti', //cpg1.3.0
  'select_dir' => 'Seleziona cartella',
  'select_dir_msg' => 'Questa funzione consente di aggiungere documenti caricati via FTP sul tuo server<br /><br />Scegli la cartella in cui hai caricato i files',  //cpg1.3.0
  'no_pic_to_add' => 'Non ci sono documenti da aggiungere',  //cpg1.3.0
  'need_one_album' => 'Hai bisogno almeno di un album per usare questa funzione',
  'warning' => 'Attento',
  'change_perm' => 'lo script non può scrivere in questa cartella, fai il chmod a 755 o 777 e riprova!',  //cpg1.3.0
  'target_album' => '<b>Metti i documenti di &quot;</b>%s<b>&quot; in </b>%s',  //cpg1.3.0
  'folder' => 'Cartella',
  'image' => 'Immagine',
  'album' => 'Album',
  'result' => 'Risultato',
  'dir_ro' => 'Non scrivibile. ',
  'dir_cant_read' => 'Non leggibile. ',
  'insert' => 'Inserire nuovi documenti nella galleria',  //cpg1.3.0
  'list_new_pic' => 'Lista dei nuovi documenti',  //cpg1.3.0
  'insert_selected' => 'Inserire i documenti selezionati',  //cpg1.3.0
  'no_pic_found' => 'Nessun nuovo documento è stata trovato',  //cpg1.3.0
  'be_patient' => 'Sii paziente, lo script necessita di tempo per aggiungere i documenti',  //cpg1.3.0
  'no_album' => 'Nessun album selezionato',  //cpg1.3.0
  'notes' =>  '<ul>'.
			  '<li><b>OK</b> : doc aggiunto con successo'.
			  '<li><b>DP</b> : doc già presente nel database (dupplicato)'.
			  '<li><b>PB</b> : doc non aggiunto a causa della errata configurazione del server o dei permessi delle cartelle dove sono posizionati'.
                          '<li><b>NA</b> : nessun album selezionato per contenere i doc, premere \'<a href="javascript:history.back(1)">back</a>\' e selezionare un album. Se non avete un album <a href="albmgr.php">createne uno</a></li>'.
			  '<li>Se OK, DP, PB non appaiono cliccare sul DOC in errore per vedere quale è stata la causa'.
			  '<li>Se il browser va in timeout, premere il tasto Aggiorna'.
			  '</ul>', //cpg1.3.0
  'select_album' => 'Selezionare un album', //cpg1.3.0
  'check_all' => 'Seleziona tutto', //cpg1.3.0
  'uncheck_all' => 'Deseleziona tutto', //cpg1.3.0

);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Blocco Utenti',
  'user_name' => 'Nome Utente',
  'ip_address' => 'Indirizzo IP',
  'expiry' => 'Scadenza (vuoto è permanente)',
  'edit_ban' => 'Salva Modifiche',
  'delete_ban' => 'Cancella',
  'add_new' => 'Aggiungi Nuovo Blocco',
  'add_ban' => 'Aggiungi',
  'error_user' => 'Utente non trovato', //cpg1.3.0
  'error_specify' => 'Bisonga specificare o un \'Nome Utente\' o un indirizzo IP', //cpg1.3.0
  'error_ban_id' => 'ID da bloccare non valido!', //cpg1.3.0
  'error_admin_ban' => 'Non è possibile bloccare se stessi!', //cpg1.3.0
  'error_server_ban' => 'Si vuole bloccare il proprio server? Tsk tsk, non è possibile...', //cpg1.3.0
  'error_ip_forbidden' => 'Non è possibile bloccare questo IP - non è instradabile!', //cpg1.3.0
  'lookup_ip' => 'Ricerca di un indirizzo IP', //cpg1.3.0
  'submit' => 'go!', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Caricamento documenti', //cpg1.3.0
  'custom_title' => 'Maschera di richiesta personalizzata', //cpg1.3.0
  'cust_instr_1' => 'Si possono selezionare un numero personalizzabile di caselle di caricamento. Tuttavia non è possibile selezionarne più del limite visualizzato.', //cpg1.3.0
  'cust_instr_2' => 'Numero di Richieste', //cpg1.3.0
  'cust_instr_3' => 'Caselle di caricamento documenti: %s', //cpg1.3.0
  'cust_instr_4' => 'Caselle di caricamento URI/URL: %s', //cpg1.3.0
  'cust_instr_5' => 'Caselle di caricamento URI/URL:', //cpg1.3.0
  'cust_instr_6' => 'Caselle di caricamento documenti:', //cpg1.3.0
  'cust_instr_7' => 'Scrivere il numero di ciascun tipo di caselle di carcamento desiderato in questo momento. Poi cliccare \'Continua\'. ', //cpg1.3.0
  'reg_instr_1' => 'Azione invalida per la creazione della maschera di inserimento.', //cpg1.3.0
  'reg_instr_2' => 'Ora è possibile caricare i documenti utilizzando le seguenti caselle. La grandezza di ciascun documento caricato dal vostro sistema al server non dovrebbe superare %s KB. I file ZIP caricati nelle sezioni \'Caricamento documenti\' e \'Caricamento URI/URL\' rimarranno in forma compressa.', //cpg1.3.0
  'reg_instr_3' => 'Se si vuole che che i file ZIP siano decompressi, occorre utilizzare le caselle di caricamento documenti previste nell\'area \'Caricamento ZIP decompressi\'.', //cpg1.3.0
  'reg_instr_4' => 'Utilizzando la sezione\'Caricamento URI/URL\' occorre specificare il percorso del documento come: http://www.ilmiosito.com/immanini/esempio.jpg', //cpg1.3.0
  'reg_instr_5' => 'Quando si è completata la maschera, premere \'Continua\'.', //cpg1.3.0
  'reg_instr_6' => 'Caricamento ZIP Decompressi:', //cpg1.3.0
  'reg_instr_7' => 'Caricamento Documento:', //cpg1.3.0
  'reg_instr_8' => 'Caricamento URI/URL:', //cpg1.3.0
  'error_report' => 'Lista errori', //cpg1.3.0
  'error_instr' => 'I seguenti caricamenti hanno generato errore:', //cpg1.3.0
  'file_name_url' => 'Nome File/URL', //cpg1.3.0
  'error_message' => 'Messaggio di errore', //cpg1.3.0
  'no_post' => 'Documento non caricato con comando POST.', //cpg1.3.0
  'forb_ext' => 'Estensione file proibita.', //cpg1.3.0
  'exc_php_ini' => 'Superata la grandezza dei file permessa in php.ini.', //cpg1.3.0
  'exc_file_size' => 'Superata la grandezza dei file permessa da CPG.', //cpg1.3.0
  'partial_upload' => 'Solo un caricamento parziale.', //cpg1.3.0
  'no_upload' => 'Nessun caricamento avvenuto.', //cpg1.3.0
  'unknown_code' => 'Codice di errore PHP sconosciuto.', //cpg1.3.0
  'no_temp_name' => 'Nessun caricamento - Nessun nome temporaneo.', //cpg1.3.0
  'no_file_size' => 'Non contiene dati/Corrotto', //cpg1.3.0
  'impossible' => 'Impossibile spostare.', //cpg1.3.0
  'not_image' => 'Non è un\'imaagine/Corrotto', //cpg1.3.0
  'not_GD' => 'Non è un\'estensione GD.', //cpg1.3.0
  'pixel_allowance' => 'Superato il numero di Pixelpermesso.', //cpg1.3.0
  'incorrect_prefix' => 'Prefisso URI/URL non corretto', //cpg1.3.0
  'could_not_open_URI' => 'Impossibile aprire l\'indirizzo URI.', //cpg1.3.0
  'unsafe_URI' => 'Safety not verificabile.', //cpg1.3.0
  'meta_data_failure' => 'Errore nei Meta dati', //cpg1.3.0
  'http_401' => '401 Non autorizzato', //cpg1.3.0
  'http_402' => '402 Richiesto un pagamento', //cpg1.3.0
  'http_403' => '403 Proibito', //cpg1.3.0
  'http_404' => '404 Non trovato', //cpg1.3.0
  'http_500' => '500 Errore interno del server', //cpg1.3.0
  'http_503' => '503 Servizio non disponibile', //cpg1.3.0
  'MIME_extraction_failure' => 'Non è possibile determinare il contenuto MIME.', //cpg1.3.0
  'MIME_type_unknown' => 'Tipo MIME sconosciuto', //cpg1.3.0
  'cant_create_write' => 'Impossibile creare il documento.', //cpg1.3.0
  'not_writable' => 'Impossibile scrivere il documento.', //cpg1.3.0
  'cant_read_URI' => 'Impossibile leggere URI/URL', //cpg1.3.0
  'cant_open_write_file' => 'Impossibile aprire in scittura il documento URI.', //cpg1.3.0
  'cant_write_write_file' => 'Impossibile scrivere nel documento URI.', //cpg1.3.0
  'cant_unzip' => 'Impossibile decomprimere (unzip).', //cpg1.3.0
  'unknown' => 'Errore sconosciuto', //cpg1.3.0
  'succ' => 'Caricamento riuscito', //cpg1.3.0
  'success' =>  '%s caricati con successo.', //cpg1.3.0
  'add' => 'Premere \'Continua\' per aggiungere i documenti all\'album.', //cpg1.3.0
  'failure' => 'Caricamento Fallito', //cpg1.3.0
  'f_info' => 'Informazioni sul documento', //cpg1.3.0
  'no_place' => 'Il precedente documento non può essere posizionato.', //cpg1.3.0
  'yes_place' => 'Il precedente documento è stato posizionato correttamente.', //cpg1.3.0
  'max_fsize' => 'La dimensione massima del documento è %s KB',
  'album' => 'Album',
  'picture' => 'Documento',  //cpg1.3.0
  'pic_title' => 'Titolo documento',  //cpg1.3.0
  'description' => 'Descrizione documento',  //cpg1.3.0
  'keywords' => 'Keywords (separate da spazi)',
  'err_no_alb_uploadables' => 'Spiacenti, in nessun album è consentito caricare documenti', //cpg1.3.0
  'place_instr_1' => 'Posizionare i documenti nell\'album in questo momento. è possibile inserire informazioni importanti su ciascun documento ora.', //cpg1.3.0
  'place_instr_2' => 'Molti documenti necessitano un posizionamento. Premere \'Continua\'.', //cpg1.3.0
  'process_complete' => 'Sono stati posizionati tutti i documenti con successo.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'title' => 'Gestione utenti',
  'name_a' => 'Nome crescente',
  'name_d' => 'Nome decrescente',
  'group_a' => 'Gruppo crescente',
  'group_d' => 'Gruppo decrescente',
  'reg_a' => 'Data iscrizione crescente',
  'reg_d' => 'Data iscrizione decrescente',
  'pic_a' => 'Numero immagini crescente',
  'pic_d' => 'Numero immagini decrescente',
  'disku_a' => 'Utilizzo disco crescente',
  'disku_d' => 'Utilizzo disco decrescente',
  'lv_a' => 'Ultime visite crescente', //cpg1.3.0
  'lv_d' => 'Ultime visite decrescente', //cpg1.3.0
  'sort_by' => 'Ordina utenti per',
  'err_no_users' => 'La tabella utenti è vuota !',
  'err_edit_self' => 'Non puoi modificare il tuo profilo da qui, usa invece "Il mio profilo"',
  'edit' => 'MODIFICA',
  'delete' => 'CANCELLA',
  'name' => 'Nome utente',
  'group' => 'Gruppo',
  'inactive' => 'Inattivo',
  'operations' => 'Operazioni',
  'pictures' => 'Documenti',  //cpg1.3.0
  'disk_space' => 'Spazio usato / Quota',
  'registered_on' => 'Registrato il',
  'last_visit' => 'Ultima visita', //cpg1.3.0
  'u_user_on_p_pages' => '%d utenti in %d pagina(e)',
  'confirm_del' => 'Vuoi davvero cancellare questo utente ? \\nTutti i suoi files ed i suoi album andranno persi.', //js-alert //cpg1.3.0
  'mail' => 'MAIL',
  'err_unknown_user' => 'Utente selezionato inesistente !',
  'modify_user' => 'Modifica utente',
  'notes' => 'Note',
  'note_list' => '<li>Se non vuoi cambiare la password attuale, lascia vuoto il campo "password"',
  'password' => 'Password',
  'user_active' => 'Utente attivo',
  'user_group' => 'Gruppo utente',
  'user_email' => 'Email',
  'user_web_site' => 'Sito web',
  'create_new_user' => 'Crea nuovo utente',
  'user_location' => 'Dove vive',
  'user_interests' => 'Interessi',
  'user_occupation' => 'Occupazione',
  'latest_upload' => 'Caricamenti recenti', //cpg1.3.0
  'never' => 'mai', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
  'title' => '(Utilità amministratore) Ridimensiona immagini',
  'what_it_does' => 'Cosa fa',
  'what_update_titles' => 'Aggiorna titoli da nome file',
  'what_delete_title' => 'Cancella titoli',
  'what_rebuild' => 'Ricostruisce miniature e immagini ridimensionate',
  'what_delete_originals' => 'Cancella immagini originali e sostituisce con versione ridimensionata',
  'file' => 'File',
  'title_set_to' => 'titolo impostato a',
  'submit_form' => 'esegui',
  'updated_succesfully' => 'aggiornamento riuscito',
  'error_create' => 'ERRORE in creazione',
  'continue' => 'Processa più immagini',
  'main_success' => 'Il documento %s è stato impostato come documento principale',  //cpg1.3.0
  'error_rename' => 'Errore rinominando %s in %s',
  'error_not_found' => 'Il documento %s non è stato trovato',
  'back' => 'torna al menu principale',
  'thumbs_wait' => 'Aggiornamento miniature e/o immagini ridimensionate, attendere...',
  'thumbs_continue_wait' => 'Continua aggiornamento miniature e/o immagini ridimensionate...',
  'titles_wait' => 'Aggiornamento titoli, attendere...',
  'delete_wait' => 'Cancellazione titoli, attendere...',
  'replace_wait' => 'Cancellazione originali e sostituzione con immagini ridimensionate, attendere..',
  'instruction' => 'Istruzioni rapide',
  'instruction_action' => 'Scegliere azione',
  'instruction_parameter' => 'Impostare parametri',
  'instruction_album' => 'Scegliere album',
  'instruction_press' => 'Premere [%s]',
  'update' => 'Aggiorna miniature e/o immagini ridimensionate',
  'update_what' => 'Cosa aggiornare',
  'update_thumb' => 'Solo miniature',
  'update_pic' => 'Solo immagini ridimensionate',
  'update_both' => 'Sia le miniature che le immagini ridimensionate',
  'update_number' => 'Numero di immagini elaborate per click',
  'update_option' => '(Provare ad impostare questa opzione ad un valore basso se si hanno problemi di timeout)',
  'filename_title' => 'Nome Documento &rArr; Titolo Documento',
  'filename_how' => 'Come modificare il nome documento',
  'filename_remove' => 'Rimuovere il .jpg finale e sostituire _ (underscore) con spazi',
  'filename_euro' => 'Cambiare 2003_11_23_13_20_20.jpg in 23/11/2003 13:20',
  'filename_us' => 'Cambiare 2003_11_23_13_20_20.jpg in 11/23/2003 13:20',
  'filename_time' => 'Cambiare 2003_11_23_13_20_20.jpg in 13:20',
  'delete' => 'Cancellare titoli documenti o immagini con dimensioni originali',
  'delete_title' => 'Cancellare titoli documenti',
  'delete_original' => 'Cancellare le immagini originali',
  'delete_replace' => 'Cancellare le immagini originali sostituendole con la versione ridimensionata',
  'select_album' => 'Scegliere album',
  'delete_orphans' => 'Cancellare i commenti orfani (su tutti gli album)', //cpg1.3.0
  'orphan_comment' => 'Trovasti commenti orfani', //cpg1.3.0
  'delete' => 'Cancella', //cpg1.3.0
  'delete_all' => 'Cancella tutto', //cpg1.3.0
  'comment' => 'Commento: ', //cpg1.3.0
  'nonexist' => 'Allegato al documento # inesistente', //cpg1.3.0
  'phpinfo' => 'visualizza phpinfo', //cpg1.3.0
  'update_db' => 'Aggiorna database', //cpg1.3.0
  'update_db_explanation' => 'Se sono stati sostituiti file di coppermine, eseguite modifiche o aggiornati da una versione precedente di coppermine, assicurarsi di eseguire l\'aggiornamento del database una sola volta. Questa operazione crerà le tabelle necessarie e/o inserirà i nuovi valori di configurazione nel vostro database coppermine.', //cpg1.3.0
);

?>