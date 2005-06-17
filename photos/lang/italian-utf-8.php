<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.3.2                                            //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002,2003 Gregory DEMAR                                     //
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
// CVS version: $Id: italian-utf-8.php,v 1.9 2004/07/24 15:04:05 gaugau Exp $
// ------------------------------------------------------------------------- //

// info about translators and translated language
$lang_translation_info = array(
'lang_name_english' => 'Italian',  
'lang_name_native' => 'Italiano', 
'lang_country_code' => 'it', 
'trans_name'=> 'ralf57 (CPG 1.1)', //the name of the translator - can be a nickname
'trans_email' => 'greatkingrat@katamail.com', //translator's email address (optional)
'trans_website' => 'http://www.madeinbanzi.it/', //translator's website (optional)
'trans_name2'=> 'Sesto Avolio aka eolica (with contribs by amicigg and canelli)', //the name of the translator - can be a nickname
'trans_email2' => '', //translator's email address (optional)
'trans_website2' => 'http://www.eolica.net/', //translator's website (optional)
'trans_date' => '2004/05/25', //the date the translation was created / last modified
);

$lang_charset = 'utf-8';
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
$lastcom_date_fmt =  '%d/%m/%y alle %H:%M';
$lastup_date_fmt = '%d %B %Y';
$register_date_fmt = '%d %B %Y';
$lasthit_date_fmt = '%d %B %Y alle %I:%M %p';
$comment_date_fmt =  '%d %B %Y alle %I:%M %p';

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
  'random' => 'Immagini...a casaccio',
  'lastup' => 'Ultimi arrivi',
  'lastalb'=> 'Ultimi aggiornamenti albums',
  'lastcom' => 'Ultimi commenti',
  'topn' => 'Le piÃ¹ viste',
  'toprated' => 'Le piÃ¹ votate',
  'lasthits' => 'Viste di recente',
  'search' => 'Risultati della ricerca',
  'favpics'=> 'Immagini Preferite'
);

$lang_errors = array(
  'access_denied' => 'Non puoi accedere a questa pagina.',
  'perm_denied' => 'Non puoi effettuare questa operazione.',
  'param_missing' => 'Script eseguito senza i parametri richiesti.',
  'non_exist_ap' => 'Immagine/album selezionato non presente nel database !',
  'quota_exceeded' => 'Quota disco superata<br /><br />Hai a disposizione [quota]K; attualmente utilizzi [space]K; una ulteriore immagine farebbe superare la quota.',
  'gd_file_type_err' => 'Le librerie GD supportano solo i formati JPEG and PNG.',
  'invalid_image' => 'Immagine corrotta o non supportata dalla libreria GD',
  'resize_failed' => 'Non posso creare le miniature e le immagini intermedie.',
  'no_img_to_display' => 'Nessuna immagine disponibile',
  'non_exist_cat' => 'La categoria selezionata non esiste',
  'orphan_cat' => 'Una categoria non Ã¨ legata, correggi il problema col Manager Categorie.',
  'directory_ro' => 'La cartella \'%s\' Ã¨ protetta in scrittura, le immagini non possono essere cancellate',
  'non_exist_comment' => 'Il commento selezionato non esiste.',
  'pic_in_invalid_album' => 'Immagine appartenente ad un album inesistente (%s)!?',
  'banned' => 'Sei stato bloccato e non puoi usare questo sito.',
  'not_with_udb' => 'Questa funzione Ã¨ disabilitata in Coppermine perchÃ© Ã¨ integrata con il software del forum. CiÃ² che stai cercando di fare non Ã¨ supportato in questa configurazione, oppure questa funzione dovrebbe essere gestita dal software del forum.',
  'offline_title' => 'Non operativa',
  'offline_text' => 'La galleria non Ã¨ attualmente operativa - riprova piÃ¹ tardi',
  'ecards_empty' => 'Non ci sono registrazioni di e-Card da mostrare. Verifica che il log delle e-Card sia stato abilitato nella configurazione di Coppermine!',
  'action_failed' => 'Operazione non riuscita. Coppermine non Ã¨ in grado di elaborare la tua richiesta.',
  'no_zip' => 'Le librerie necessarie per processare i file ZIP non sono disponibili.  Contatta l\'administrator di Coppermine.',
  'zip_type' => 'Non sei autorizzato ad inviare file ZIP.',
);

$lang_bbcode_help = 'Puoi utilizzare i seguenti codici: <li>[b]<b>Bold</b>[/b]</li> <li>[i]<i>Italic</i>[/i]</li> <li>[url=http://nomesito.com/]Testo Url[/url]</li> <li>[email]utente@domain.com[/email]</li>';

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'alb_list_title' => 'Vai alla lista degli album',
  'alb_list_lnk' => 'Lista album',
  'my_gal_title' => 'Vai alla galleria personale',
  'my_gal_lnk' => 'Galleria personale',
  'my_prof_lnk' => 'Il mio profilo',
  'adm_mode_title' => 'Passa in modalitÃ  admin',
  'adm_mode_lnk' => 'ModalitÃ  admin',
  'usr_mode_title' => 'Passa in modalitÃ  utente',
  'usr_mode_lnk' => 'ModalitÃ  utente',
  'upload_pic_title' => 'Aggiungi una o piÃ¹ immagini',
  'upload_pic_lnk' => 'Aggiungi immagini',
  'register_title' => 'Crea un account',
  'register_lnk' => 'Registrati',
  'login_lnk' => 'Login',
  'logout_lnk' => 'Logout',
  'lastup_lnk' => 'Ultimi arrivi',
  'lastcom_lnk' => 'Ultimi commenti',
  'topn_lnk' => 'Le piÃ¹ viste',
  'toprated_lnk' => 'Le piÃ¹ votate',
  'search_lnk' => 'Cerca',
  'fav_lnk' => 'I miei Preferiti',
  'memberlist_title' => 'Mostra Lista Utenti',
  'memberlist_lnk' => 'Lista Utenti',
  'faq_title' => 'Domande Frequenti sulla galleria fotografica &quot;Coppermine&quot;',
  'faq_lnk' => 'FAQ',

);

$lang_gallery_admin_menu = array(
  'upl_app_lnk' => 'Approva uploads',
  'config_lnk' => 'Configura',
  'albums_lnk' => 'Albums',
  'categories_lnk' => 'Categorie',
  'users_lnk' => 'Utenti',
  'groups_lnk' => 'Gruppi',
  'comments_lnk' => 'Commenti',
  'searchnew_lnk' => 'Aggiungi immagini',
  'util_lnk' => 'Manutenzione',
  'ban_lnk' => 'Blocca utenti',
  'db_ecard_lnk' => 'Mostra e-Cards',
);

$lang_user_admin_menu = array(
  'albmgr_lnk' => 'Crea / ordina album personali',
  'modifyalb_lnk' => 'Modifica album personali',
  'my_prof_lnk' => 'Il mio profilo',
);

$lang_cat_list = array(
  'category' => 'Gallerie',
  'albums' => 'Album',
  'pictures' => 'Immagini',
);

$lang_album_list = array(
  'album_on_page' => '%d album in %d pagine'
);

$lang_thumb_view = array(
  'date' => 'DATA',
//Sort by filename and title
  'name' => 'NOME FILE',
  'title' => 'TITOLO',
  'sort_da' => 'Ordina per data ascendente',
  'sort_dd' => 'Ordina per data discendente',
  'sort_na' => 'Ordina per nome ascendente',
  'sort_nd' => 'Ordina per nome discendente',
  'sort_ta' => 'Ordina per titolo ascendente',
  'sort_td' => 'Ordina per titolo discendente',
  'download_zip' => 'Scarica come file Zip',
  'pic_on_page' => '%d immagini in %d pagine',
  'user_on_page' => '%d utenti in %d pagine'
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Torna alle miniature',
  'pic_info_title' => 'Mostra/Nascondi info immagine',
  'slideshow_title' => 'Slideshow',
  'ecard_title' => 'Invia questa immagine come e-Card',
  'ecard_disabled' => 'e-Cards disabilitate',
  'ecard_disabled_msg' => 'Non puoi inviare e-Cards',
  'prev_title' => 'Immagine precedente',
  'next_title' => 'Immagine successiva',
  'pic_pos' => 'IMMAGINE %s/%s',
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Vota questa immagine',
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
  'filename' => 'Nome del file : ',
  'filesize' => 'Dimensione file : ',
  'dimensions' => 'Dimensioni : ',
  'date_added' => 'Aggiunta il : '
);

$lang_get_pic_data = array(
  'n_comments' => '%s commenti',
  'n_views' => '%s viste',
  'n_votes' => '(%s voti)'
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Info Debug',
  'select_all' => 'Seleziona Tutto',
  'copy_and_paste_instructions' => 'Se hai bisogno di chiedere aiuto sul Support Board di Coppermine, copia-e-incolla queste informazioni di debug nel tuo post. Accertati di sostituire ogni password delle query con *** prima di inviare.',
  'phpinfo' => 'mostra phpinfo',
);

$lang_language_selection = array(
  'reset_language' => 'Lingua di Default',
  'choose_language' => 'Scegli la lingua',
);

$lang_theme_selection = array(
  'reset_theme' => 'Tema di Default',
  'choose_theme' => 'Scegli un Tema',
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
  0 => 'Lascio la modalitÃ  admin...',
  1 => 'Entro in modalitÃ  admin...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Ogni album deve avere un nome !',
  'confirm_modifs' => 'Applico davvero le modifiche?',
  'no_change' => 'Non hai fatto alcuna modifica !',
  'new_album' => 'Nuovo album',
  'confirm_delete1' => 'Cancello davvero questo album ?',
  'confirm_delete2' => '\nTutte le immagini ed i commenti andranno persi !',
  'select_first' => 'Prima scegli un album',
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
  'miss_param' => 'Parametri necessari per \'%s\'operazione non forniti !',
  'unknown_cat' => 'La categoria scelta non Ã¨ nel database',
  'usergal_cat_ro' => 'La categoria delle gallerie personali non puÃ² essere cancellata !',
  'manage_cat' => 'Gestisci categorie',
  'confirm_delete' => 'Vuoi davvero cancellare questa categoria?',
  'category' => 'Categoria',
  'operations' => 'Operazioni',
  'move_into' => 'Sposta in',
  'update_create' => 'Aggiorna/Crea categoria',
  'parent_cat' => 'Categoria superiore',
  'cat_title' => ' Titolo categoria',
  'cat_thumb' => 'Miniatura Categoria',
  'cat_desc' => 'Descrizione categoria'
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
  'name_a' => 'Nome ascendente',
  'name_d' => 'Nome discendente',
  'title_a' => 'Titolo ascendente',
  'title_d' => 'Titolo discendente',
  'date_a' => 'Data ascendente',
  'date_d' => 'Data discendente',
  'th_any' => 'Dimensione maggiore',
  'th_ht' => 'Altezza',
  'th_wd' => 'Larghezza',
  'label' => 'etichetta',
  'item' => 'elemento',
  'debug_everyone' => 'Tutti',
  'debug_admin' => 'Solo Admin',
);

if (defined('CONFIG_PHP')) $lang_config_data = array(
  'Impostazioni generali',
  array('Nome galleria', 'gallery_name', 0),
  array('Descrizione galleria', 'gallery_description', 0),
  array('Email amministratore', 'gallery_admin_email', 0),
  array('Target per il link \'Vedi altre immagini\' nelle e-cards', 'ecards_more_pic_target', 0),
  array('Galleria non operativa', 'offline', 1),
  array('Registra e-Cards', 'log_ecards', 1),
  array('Consenti download come ZIP dei Preferiti', 'enable_zipdownload', 1),

  'Language, Themes &amp; Charset settings',
  array('Lingua', 'lang', 5),
  array('Tema', 'theme', 6),
  array('Mostra elenco lingue', 'language_list', 8),
  array('Mostra bandiere lingue', 'language_flags', 8),
  array('Mostra &quot;reset&quot; nella scelta della lingua', 'language_reset', 1),
  array('Mostra elenco temi', 'theme_list', 8),
  array('Mostra &quot;reset&quot; nella scelta del tema', 'theme_reset', 1),
  array('Mostra FAQ - domande frequenti', 'display_faq', 1),
  array('Mostra aiuto per bbcode', 'show_bbcode_help', 1),
  array('Codifica caratteri', 'charset', 4),

  'Vista elenco album',
  array('Larghezza tabella principale (pixels o %)', 'main_table_width', 0),
  array('Numero di livelli delle categorie da mostrare', 'subcat_level', 0),
  array('Numero di albums da mostrare', 'albums_per_page', 0),
  array('Numero di colonne dell\'elenco album', 'album_list_cols', 0),
  array('Dimensione miniature in pixels', 'alb_list_thumb_size', 0),
  array('Contenuto della pagina principale', 'main_page_layout', 0),
  array('Mostra miniature per primo livello album nelle categorie','first_level',1),

  'Vista miniature',
  array('Numero di colonne nella pagina delle miniature', 'thumbcols', 0),
  array('Numero di righe nella pagina delle miniature', 'thumbrows', 0),
  array('Massimo numero di tabs da mostrare', 'max_tabs', 0),
  array('Mostra descrizione (in aggiunta al titolo) sotto la miniatura', 'caption_in_thumbview', 1),
  array('Mostra numero di viste sotto la miniatura', 'views_in_thumbview', 1),
  array('Mostra numero di commenti sotto la miniatura', 'display_comment_count', 1),
  array('Mostra nome uploader sotto la miniatura', 'display_uploader', 1),
  array('Criterio di default per ordinare le immagini', 'default_sort_order', 3),
  array('Minimo numero di voti affinchÃ¨ un\'immagine entri nella lista delle \'piÃ¹ votate\'', 'min_votes_for_rating', 0),

  'Vista immagine &amp; Impostazioni commenti',
  array('Larghezza della tabella mostra immagine (pixels o %)', 'picture_table_width', 0),
  array('Info immagini visibili di default', 'display_pic_info', 1),
  array('Filtra parolacce nei commenti', 'filter_bad_words', 1),
  array('Consenti smiles nei commenti', 'enable_smilies', 1),
  array('Consenti piÃ¹ commenti consecutivi ad un\'immagine dallo stesso utente (disattiva protezione flood)', 'disable_comment_flood_protect', 1),
  array('Lunghezza massima descrizione', 'max_img_desc_length', 0),
  array('Max numero di caratteri in una parola', 'max_com_wlength', 0),
  array('Max numero di linee in un commento', 'max_com_lines', 0),
  array('Lunghezza massima del commento', 'max_com_size', 0),
  array('Mostra film strip', 'display_film_strip', 1),
  array('Numero di miniature nella film strip', 'max_film_strip_items', 0),
  array('Avvisa admin via email quando arrivano commenti', 'email_comment_notification', 1),
  array('Intervallo slideshow in millisecondi (1 secondo = 1000 millisecondi)', 'slideshow_interval', 0),

  'Impostazioni immagini e miniature',
  array('QualitÃ  files JPEG', 'jpeg_qual', 0),
  array('Max dimensione delle miniature <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0),
  array('Usa dimensione ( larghezza o altezza o aspetto Max per miniature e immagini intermedie)<b>**</b>', 'thumb_use', 7),
  array('Crea immagini intermedie','make_intermediate',1),
  array('Max larghezza o altezza delle immagini intermedie <b>*</b>', 'picture_width', 0),
  array('Peso massimo dei files (KB)', 'max_upl_size', 0),
  array('Max larghezza o altezza delle immagini/video caricati (pixels)', 'max_upl_width_height', 0),

  'Impostazioni avanzate files e miniature',
  array('Mostra icona album privati ad utenti non connessi','show_private',1),
  array('Caratteri proibiti nei nomi dei file', 'forbiden_fname_char',0),
//  array('Estensioni consentite per le immagini', 'allowed_file_extensions',0), //cpg1.3.0
  array('Tipi di immagine consentiti', 'allowed_img_types',0),
  array('Tipi di video consentiti', 'allowed_mov_types',0),
  array('Tipi di audio consentiti', 'allowed_snd_types',0),
  array('Tipi di documento consentiti', 'allowed_doc_types',0),
  array('Metodo ridimensionamento immagini','thumb_method',2),
  array('Percorso per la utility \'convert\' di ImageMagick (esempio /usr/bin/X11/)', 'impath', 0),
//  array('Tipi di immagine consentiti (solo per ImageMagick)', 'allowed_img_types',0), //cpg1.3.0
  array('Opzioni di comando per ImageMagick', 'im_options', 0),
  array('Leggi dati EXIF nei file JPEG', 'read_exif_data', 1),
  array('Leggi dati IPTC nei file JPEG', 'read_iptc_data', 1),
  array('Cartella degli album <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0),
  array('Cartella immagini utenti <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0),
  array('Prefisso per le immagini intermedie <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0),
  array('Prefisso per le miniature <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0),
  array('Chmod di default per le cartelle', 'default_dir_mode', 0),
  array('Chmod di default per i file', 'default_file_mode', 0),

  'Impostazioni utenti',
  array('Consenti nuove registrazioni', 'allow_user_registration', 1),
  array('Verifica tramite e-mail richiesta', 'reg_requires_valid_email', 1),
  array('Avvisa via email admin di registrazioni utenti', 'reg_notify_admin_email', 1),
  array('Consenti due utenti con la stessa email', 'allow_duplicate_emails_addr', 1),
  array('Utenti possono avere album privati (Nota: cambiando da \'si\' a \'no\' tutti gli album attualmente privati diventeranno pubblici)', 'allow_private_albums', 1),
  array('Avvisa via email admin di file in attesa di approvazione', 'upl_notify_admin_email', 1),
  array('Consenti agli utenti connessi di vedere la Lista Utenti', 'allow_memberlist', 1),

  'Campi personalizzati per le descrizioni (lascia vuoti se inutilizzati)',
  array('Nome campo 1', 'user_field1_name', 0),
  array('Nome campo 2', 'user_field2_name', 0),
  array('Nome campo 3', 'user_field3_name', 0),
  array('Nome campo 4', 'user_field4_name', 0),

  'Impostazioni cookies',
  array('Nome del cookie usato dallo script (usando l\'integrazione con la bbs, assicurati che sia diverso dal nome dei cookie di quest\'ultima)', 'cookie_name', 0),
  array('Percorso del cookie usato dallo script', 'cookie_path', 0),

  'Impostazioni varie',
  array('Attiva modalitÃ  debug', 'debug_mode', 9),
  array('Mostra avvisi (notices) in modalitÃ  debug', 'debug_notice', 1),
  '<br /><div align="left"><a name="notice1"></a>(*) Le impostazioni con * non devono essere modificate se vi sono giÃ  delle immagini nella galleria.<br />
  <a name="notice2"></a>(**) La modifica di queste impostazioni non modifica i file precedentemente inseriti, quindi si consiglia di non modificarli se ci sono giÃ  dei file nella galleria. Si possono perÃ² applicare le modifiche ai file giÃ  esistenti, mediante la funzione &quot;<a href="util.php">Manutenzione</a>&quot; del menu di amministrazione.</div><br />',
);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Invia e-Cards',
  'ecard_sender' => 'Mittente',
  'ecard_recipient' => 'Destinatario',
  'ecard_date' => 'Data',
  'ecard_display' => 'Mostra e-Card',
  'ecard_name' => 'Nome',
  'ecard_email' => 'Email',
  'ecard_ip' => 'IP #',
  'ecard_ascending' => 'ascendente',
  'ecard_descending' => 'discendente',
  'ecard_sorted' => 'Ordinate',
  'ecard_by_date' => 'per data',
  'ecard_by_sender_name' => 'per nome mittente',
  'ecard_by_sender_email' => 'per email mittente',
  'ecard_by_sender_ip' => 'per indirizzo IP mittente ',
  'ecard_by_recipient_name' => 'per nome destinatario',
  'ecard_by_recipient_email' => 'per email destinatario',
  'ecard_number' => 'mostra record dal %s al %s di %s',
  'ecard_goto_page' => 'vai alla pagina',
  'ecard_records_per_page' => 'Record per pagina',
  'check_all' => 'Seleziona Tutti',
  'uncheck_all' => 'Deseleziona Tutti',
  'ecards_delete_selected' => 'Cancella e-Card selezionate',
  'ecards_delete_confirm' => 'Sei sicuro di voler cancellare i record? Spunta il checkbox!',
  'ecards_delete_sure' => 'Sono sicuro',
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Inserisci nome e commento',
  'com_added' => 'Il tuo commento Ã¨ stato aggiunto',
  'alb_need_title' => 'Inserisci il titolo dell\'album !',
  'no_udp_needed' => 'Non necessita di aggiornamenti.',
  'alb_updated' => 'Album aggiornato',
  'unknown_album' => 'Album inesistente o upload non consentito in quest\'album',
  'no_pic_uploaded' => 'Nessuna immagine aggiunta !<br /><br />Controlla che il server permetta gli uploads...',
  'err_mkdir' => 'Impossibile creare la cartella %s !',
  'dest_dir_ro' => 'La cartella di destinazione %s non Ã¨ scrivibile !',
  'err_move' => 'Impossible spostare %s in %s !',
  'err_fsize_too_large' => 'La dimensione dell\'immagine caricata Ã¨ eccessiva (il massimo consentito Ã¨ %s x %s) !',
  'err_imgsize_too_large' => 'Il peso del file caricato Ã¨ eccessivo (il massimo consentito Ã¨ %s KB) !',
  'err_invalid_img' => 'Il file caricato non Ã¨ un\'immagine supportata !',
  'allowed_img_types' => 'Puoi caricare %s immagini.',
  'err_insert_pic' => 'L\'immagine \'%s\' non puÃ² essere inserita',
  'upload_success' => 'Immagine caricata con successo<br /><br />SarÃ  visibile dopo il vaglio di un amministratore.',
  'notify_admin_email_subject' => '%s - Notifica inserimento',
  'notify_admin_email_body' => '%s ha inserito un\'immagine per la quale serve la tua approvazione. Visita %s',
  'info' => 'Informazione',
  'com_added' => 'Commento aggiunto',
  'alb_updated' => 'Album aggiornato',
  'err_comment_empty' => 'Il commento Ã¨ vuoto !',
  'err_invalid_fext' => 'Solo i files con le seguenti estensioni sono ammessi : <br /><br />%s.',
  'no_flood' => 'Spiacenti, sei giÃ  autore del commento<br /><br />Edita il commento se vuoi',
  'redirect_msg' => 'Sei stato reindirizzato.<br /><br /><br />Clicca \'CONTINUA\' se la pagina non si ricarica automaticamente',
  'upl_success' => 'Immagine aggiunta con successo',
  'email_comment_subject' => 'Commento inserito su Coppermine Photo Gallery',
  'email_comment_body' => 'Qualcuno ha inserito un commento nella tua galleria. Vedilo su',
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Descrizione',
  'fs_pic' => 'immagine full size',
  'del_success' => 'cancellata con successo',
  'ns_pic' => 'immagine normale',
  'err_del' => 'non puÃ² essere cancellata',
  'thumb_pic' => 'miniatura',
  'comment' => 'commento',
  'im_in_alb' => 'immagine nell\'album',
  'alb_del_success' => 'Album \'%s\' cancellato',
  'alb_mgr' => 'Album Manager',
  'err_invalid_data' => 'Dati non validi ricevuti in \'%s\'',
  'create_alb' => 'Creazione album \'%s\'',
  'update_alb' => 'Aggiornamento album \'%s\' con titolo \'%s\' ed indice \'%s\'',
  'del_pic' => 'Cancella immagine',
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
  'confirm_del' => 'Vuoi davvero cancellare questa immagine? \\nI commenti andranno persi.',
  'del_pic' => 'CANCELLA QUESTA IMMAGINE',
  'size' => '%s x %s pixels',
  'views' => '%s volte',
  'slideshow' => 'Slideshow',
  'stop_slideshow' => 'STOP SLIDESHOW',
  'view_fs' => 'Clicca per immagine full size',
  'edit_pic' => 'Modifica descrizione',
  'crop_pic' => 'Ritaglia e Ruota',
);

$lang_picinfo = array(
  'title' =>'Info immagine',
  'Filename' => 'Nome file',
  'Album name' => 'Nome album',
  'Rating' => 'Punteggio (%s voti)',
  'Keywords' => 'Keywords',
  'File Size' => 'Peso file',
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
  'iptcTitle'=>'Titolo IPTC',
  'iptcCopyright'=>'Copyright IPTC',
  'iptcKeywords'=>'Keywords IPTC',
  'iptcCategory'=>'Categoria IPTC',
  'iptcSubCategories'=>'Sub Categorie IPTC',
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Edita questo commento',
  'confirm_delete' => 'Vuoi davvero cancellare questo commento?',
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
  'title' => 'Invia una e-card',
  'invalid_email' => '<b>Attento</b> : email non valida !',
  'ecard_title' => 'Una e-card da %s per te',
  'error_not_image' => 'Solo le immagini possono essere inviate come e-Card.',
  'view_ecard' => 'Se la e-card non Ã¨ visualizzata correttamente, clicca su questo link',
  'view_more_pics' => 'Clicca su questo link per altre immagini !',
  'send_success' => 'E-card inviata con successo',
  'send_failed' => 'Spiacenti ma il server non puÃ² inviare la tua e-card...',
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
  'pic_info' => 'Info immagine',
  'album' => 'Album',
  'title' => 'Titolo',
  'desc' => 'Descrizione',
  'keywords' => 'Keywords',
  'pic_info_str' => '%s&times;%s - %sKB - %s viste - %s voti',
  'approve' => 'Approva immagine',
  'postpone_app' => 'Rinvia approvazione',
  'del_pic' => 'Cancella immagine',
  'read_exif' => 'Rileggi info EXIF',
  'reset_view_count' => 'Resetta contatore',
  'reset_votes' => 'Resetta voti',
  'del_comm' => 'Cancella commenti',
  'upl_approval' => 'Approvazione uploads',
  'edit_pics' => 'Edita immagini',
  'see_next' => 'Immagini successive',
  'see_prev' => 'Immagini precedenti',
  'n_pic' => '%s immagini',
  'n_of_pic_to_disp' => 'Numero di immagini da mostrare',
  'apply' => 'Applica modifiche',
  'crop_title' => 'Editor Immagini Coppermine',
  'preview' => 'Anteprima',
  'save' => 'Salva immagine',
  'save_thumb' =>'Salva come miniatura',
  'sel_on_img' =>'La selezione deve essere tutta interna all\'immagine!', //js-alert
);

// ------------------------------------------------------------------------- //
// File faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'FAQ - Domande Frequenti',
  'toc' => 'Indice',
  'question' => 'Domanda: ',
  'answer' => 'Risposta: ',
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'General FAQ', //cpg1.3.0
  array('PerchÃ¨ bisogna registrarsi?', 'L\'amministratore ha la facoltÃ  di rendere obbligatoria o facoltativa la registrazione. La registrazione consente agli utenti anonimi di diventare membri identificati, con la possibilitÃ  di inserire immagini proprie, costruire liste di preferiti, votare e commentare le immagini, ed altro.', 'allow_user_registration', '0'),
  array('Come posso registrarmi?', 'Vai su &quot;Registrati&quot; e compila i campi richiesti (e se vuoi anche i campi opzionali).<br />Se l\'Amministratore ha abilitato la registrazione tramite email, dopo aver inviato le tue informazioni dovresti ricevere un messaggio all\'indirizzo indicato durante la registrazione, con le istruzioni su come attivare la tua iscrizione. Occorre confermare l\'iscrizione per poter effettuare il login.', 'allow_user_registration', '1'), //cpg1.3.0
  array('Come posso fare il login?', 'Vai su &quot;Login&quot;, inserisci username e password e spunta &quot;Ricordati di Me&quot; cosÃ¬ avrai accesso senza ripetere il login, quando ritornerai nel sito.<br /><b>NOTA: i Cookies devono essere abilitati e non devi cancellare il cookie di questo sito.</b>', 'offline', 0), //cpg1.3.0
  array('PerchÃ¨ non posso fare il login?', 'Ti sei registrato ed hai seguito il link che ti Ã¨ stato inviato via email? Il link attiverÃ  la tua registrazione. Per altri problemi di autenticazione contatta l\'amministratore del sito.', 'offline', 0), //cpg1.3.0
  array('Cosa succede se dimentico la password?', 'Se su questo sito Ã¨ presente il link  &quot;Recupero password&quot; usalo. Altrimenti contatta l\'amministratore del sito per una nuova password.', 'offline', 0), //cpg1.3.0
//  array('Cosa succede se cambio indirizzo email?', 'Collegati e cambia il tuo indirizzo email nella sezione &quot;Il mio profilo&quot;', 'offline', 0), //cpg1.3.0
  array('Come salvo una immagine in &quot;I miei preferiti&quot;?', 'Clicca sull\'immagine e attiva &quot;Mostra/nascondi info immagine&quot; scorri in giÃ¹ sull\'insieme delle informazioni immagine e clicca su <b>Aggiungi a &quot;I miei preferiti&quot;</b>.<br />L\'amministratore puÃ² aver abilitato la visualizzazione delle &quot;Info immagine&quot; per default<br />IMPORTANTE: I Cookies devono essere abilitati ed il cookie di questo sito non deve essere cancellato.', 'offline', 0), //cpg1.3.0
  array('Come voto un\'immagine?', 'Clicca sulla miniatura, vai al fondo della pagina e scegli un voto.', 'offline', 0), //cpg1.3.0
  array('Come inserisco un commento su un\'immagine?', 'Clicca su una miniatura, vai in fondo alla pagina ed inserisci il commento.', 'offline', 0), //cpg1.3.0
  array('Come inserisco un\'immagine?', 'Vai alla sezione &quot;Aggiungi Immagine&quot;, seleziona l\'album in cui vuoi inserirla, clicca &quot;Browse&quot; e cerca l\'immagine da inserire, clicca su &quot;Apri&quot; (aggiungi un titolo e una descrizione se lo desideri) e infine clicca su &quot;Upload immagine&quot;', 'allow_private_albums', 0), //cpg1.3.0
  
  array('Dove inserisco un\'immagine?', 'Puoi inserire immagini in uno dei tuoi album della &quot;Galleria personale&quot;. L\'amministratore puÃ² inoltre consentirti di inserire immagini in uno o piÃ¹ album della Galleria Principale.', 'allow_private_albums', 0), //cpg1.3.0
  array('Che tipo di immagine e di che dimensione posso inserire?', 'La dimensione ed il tipo (jpg, gif, ecc.) sono inmpostati dall\'amministratore.', 'offline', 0), //cpg1.3.0
  array('Cos\'Ã¨ la &quot;Galleria personale&quot;?', 'La &quot;Galleria personale&quot; Ã¨ una galleria in cui ogni utente puÃ² inserire le proprie immagini e gestirle.', 'allow_private_albums', 0), //cpg1.3.0
  array('Come creo, rinomino o cancello un album nella &quot;Galleria personale&quot;?', 'Devi giÃ  trovarti in &quot;ModalitÃ  Admin&quot;<br />vai in &quot;Crea/ordina album personali&quot; e clicca su &quot;Nuova&quot;. Cambia &quot;Nuovo Album&quot; con il nome che preferisci.<br />Puoi anche rinominare qualsiasi album presente nella tua galleria<br />Clicca alla fine su &quot;Applica le modifiche&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Come posso modificare o inibire gli utenti a vedere i miei album?', 'Devi giÃ  trovarti in &quot;ModalitÃ  Admin&quot;<br />Vai in &quot;Modifica album personali&quot;. Sulla barra &quot;Aggiorna Album&quot;, seleziona l\'album che vuoi modificare. <br />Puoi cambiare il nome, la descrizione, la miniatura, limitare i permessi per vedere, votare o commentare.<br />Clicca su &quot;Aggiorna Album&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Come posso vedere le gallerie degli altri utenti?', 'Vai alla &quot;Lista Album&quot; e seleziona &quot;Gallerie Utenti&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Cosa sono i &quot;cookies&quot;?', 'I cookkies sono file di testo con dati che sono inviati dal sito e memorizzati sul tuo computer.<br />I cookies usualmente permettono agli utilizzatori di lasciare e ritornare su un sito senza dover autenticarsi di nuovo o di riselezionare altre preferenze.', 'offline', 0), //cpg1.3.0
  array('Dove posso trovare questo programma per il mio sito?', 'Copermine Ã¨ una Galleria Multimediale free, rilasciata con licenza GNU GPL. E\' piena di funzionalitÃ  ed Ã¨ realizzata per diverse piattaforme. Visita la <a href="http://coppermine.sf.net/">Home page Coppermine</a> per trovare altre informazioni o per effettuare il download.', 'offline', 0), //cpg1.3.0

  'Navigazione del Sito', //cpg1.3.0
  array('Cos\'Ã¨ la &quot;Lista Album&quot;?', 'Rappresenta il punto di ingresso dell\'intera galleria con un link a ciascuna categoria. I link alle diverse categorie possono essere delle miniature.', 'offline', 0), //cpg1.3.0
  array('Cos\'e la &quot;Galleria personale&quot;?', 'Permette ad un utente di creare la propria galleria e di aggiungere, cancellare o modificare gli album, e di inserirvi i contenuti.', 'allow_private_albums', 0), //cpg1.3.0
  array('Quali sono le differenze tra la &quot;ModalitÃ  Admin&quot; e la &quot;ModalitÃ  Utente&quot;?', 'Quando Ã¨ in &quot;ModalitÃ  Admin&quot; l\'utente puÃ² modificare la propria galleria (o quelle pubbliche se autorizzato dall\'amministratore).', 'allow_private_albums', 0), //cpg1.3.0
  array('Cos\'Ã¨ &quot;Carica Immagine&quot;?', 'Permette ad un utente di inserire un\'immagine (dimensione e tipo sono impostati dall\'amministratore) in una galleria selezionata da te o dall\'amministratore.', 'allow_private_albums', 0), //cpg1.3.0
  array('Cos\'Ã¨ &quot;Ultimi Arrivi&quot;?', 'Permette di vedere gli ultimi arrivi nella galleria.', 'offline', 0), //cpg1.3.0
  array('Cos\'Ã¨ &quot;Ultimi Commenti&quot;?', 'Permette di vedere gli ultimi commenti - insieme alle immagini - inseriti dagli utenti.', 'offline', 0), //cpg1.3.0
  array('Cos\'Ã¨ &quot;Le piÃ¹ viste&quot;?', 'Permette di vedere le immagini piÃ¹ viste da tutti gli utenti (collegati o non collegati).', 'offline', 0), //cpg1.3.0
  array('Cos\'Ã¨ &quot;Le piÃ¹ votate&quot;?', 'Permette di vedere le immagini piÃ¹ votate dagli utenti, mostrando la media dei voti (ad es.: 5 utenti votano ciascuno <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: l\'immagine dovrebbe avere un voto medio di <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ; se cinque utenti votano l\'immagine da 1 a 5 (1,2,3,4,5) la media risultante sarÃ  di <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />I voti vanno da <img src="images/rating5.gif" width="65" height="14" border="0" alt="migliore" /> (migliore) a <img src="images/rating0.gif" width="65" height="14" border="0" alt="peggiore" /> (peggiore).', 'offline', 0), //cpg1.3.0
  array('Cos\'Ã¨ &quot;I miei Preferiti&quot;?', 'Permette ad un utente di visualizzare le immagini preferite - memorizzate in un cookie sul proprio PC.', 'offline', 0), //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Recupero password',
  'err_already_logged_in' => 'Sei giÃ  connesso (!)',
  'enter_username_email' => 'Inserisci il tuo username o indirizzo email',
  'submit' => 'vai',
  'failed_sending_email' => 'Non Ã¨ possibile inviare il promemoria password!',
  'email_sent' => 'Una email con il tuo username e la password Ã¨ stata inviata a %s',
  'err_unk_user' => 'L\'utente selezionato non esiste!',
  'passwd_reminder_subject' => '%s - Recupero Password',
  'passwd_reminder_body' => 'Hai richiesto di recuperare i tuoi dati di accesso:
Username: %s
Password: %s
Clicca %s per fare il login.',
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Nome gruppo',
  'disk_quota' => 'Quota disco',
  'can_rate' => 'PuÃ² votare le immagini',
  'can_send_ecards' => 'PuÃ² inviare e-cards',
  'can_post_com' => 'PuÃ² scrivere commenti',
  'can_upload' => 'PuÃ² inserire immagini',
  'can_have_gallery' => 'PuÃ² avere galleria personale',
  'apply' => 'Applica modifiche',
  'create_new_group' => 'Crea nuovo gruppo',
  'del_groups' => 'Cancella gruppi selezionati',
  'confirm_del' => 'Attento, gli utenti saranno trasferiti nel gruppo degli Utenti registrati - Vuoi proseguire?',
  'title' => 'Gestisci gruppi utenti',
  'approval_1' => 'Approvazione Pub. Upl.  (1)',
  'approval_2' => 'Approvazione Priv. Upl.  (2)',
  'upload_form_config' => 'Configurazione scheda per Upload',
  'upload_form_config_values' => array( 'Upload solo file singolo', 'Upload solo file multiplo', 'Upload file solo da URI', 'Upload solo file ZIP', 'File-URI', 'File-ZIP', 'URI-ZIP', 'File-URI-ZIP'),
  'custom_user_upload'=>'Gli utenti possono scegliere il numero di schede upload?',
  'num_file_upload'=>'Numero massimo/esatto di schede per upload file',
  'num_URI_upload'=>'Numero massimo/esatto di schede per upload URI',
  'note1' => '<b>(1)</b> Gli uploads in un album pubblico necessitano della approvazione',
  'note2' => '<b>(2)</b> Gli uploads in un album di un utente necessitano della approvazione',
  'notes' => 'Note'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Benvenuto !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Vuoi davvero cancellare quest\'album ? \\nTutte le immagini ed i commenti andranno persi.',
  'delete' => 'CANCELLA',
  'modify' => 'PROPRIETA\'',
  'edit_pics' => 'EDITA IMMAGINI',
);

$lang_list_categories = array(
  'home' => 'Home',
  'stat1' => '<b>[pictures]</b> immagini: <b>[albums]</b> albums: <b>[cat]</b> categorie: <b>[comments]</b> commenti: viste <b>[views]</b> volte',
  'stat2' => '<b>[pictures]</b> immagini: <b>[albums]</b> albums: viste <b>[views]</b> volte',
  'xx_s_gallery' => '%s\'s Galleria',
  'stat3' => '<b>[pictures]</b> immagini: <b>[albums]</b> albums: <b>[comments]</b> commenti: viste <b>[views]</b> volte'
);

$lang_list_users = array(
  'user_list' => 'Lista utenti',
  'no_user_gal' => 'Non ci sono gallerie utenti',
  'n_albums' => '%s album',
  'n_pics' => '%s immagini'
);

$lang_list_albums = array(
  'n_pictures' => '%s immagini',
  'last_added' => ', ultimo arrivo del %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Login',
  'enter_login_pswd' => 'Inserisci username e password per entrare',
  'username' => 'Username',
  'password' => 'Password',
  'remember_me' => 'Ricordami',
  'welcome' => 'Benvenuto %s ...',
  'err_login' => '*** Non posso fare il login. Riprova ***',
  'err_already_logged_in' => 'Sei giÃ  connesso !',
  'forgot_password_link' => 'Recupero password',
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
  'php_info' => 'Info PHP',
  'explanation' => 'Questo Ã¨ l\'output generato dalla funzione PHP <a href="http://www.php.net/phpinfo">phpinfo()</a>, (con l\'output tagliato sulla destra).',
  'no_link' => 'Consentire ad altri di vedere il phpinfo puÃ² presentare rischi di sicurezza, quindi questa pagina Ã¨ visibile solo quando sei connesso come admin. Non puoi inserire un link a questa pagina per altri, avranno solo un messaggio di accesso negato.',
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
  'last_uploaded' => 'Ultimi arrivi',
  'public_alb' => 'Tutti (album pubblico)',
  'me_only' => 'Solo per me',
  'owner_only' => 'Solo per il titolare (%s)',
  'groupp_only' => 'Membri del gruppo \'%s\' ',
  'err_no_alb_to_modify' => 'Nessun album che tu possa modificare.',
  'update' => 'Aggiorna album',
  'notice1' => '(*) dipende dalle impostazioni dei %sgruppi%s',
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Spiacenti, hai giÃ  votato questa immagine',
  'rate_ok' => 'il tuo voto Ã¨ stato accettato',
  'forbidden' => 'Non puoi votare per le tue immagini.',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Gli amministratori di <b>{SITE_NAME}</b> rimuoveranno tutto quello che non sarÃ  ritenuto compatibile con le finalitÃ  ed il decoro del sito.Ti chiediamo di rispettare il lavoro degli altri utenti e del webmaster.<br />
<br />
Accetti di non pubblicare materiale osceno ed offensivo.<br />
<br />
Le informazioni relative al tuo account sono conservate in un cookie sul tuo computer per velocizzare accessi ed utilizzo della galleria. Il tuo indirizzo email non sarÃ  divulgato a nessuno per nessun motivo.<br />
<br />
Cliccando su 'Accetto' confermi queste condizioni.
EOT;

$lang_register_php = array(
  'page_title' => 'Registrazione utente',
  'term_cond' => 'Termini e condizioni',
  'i_agree' => 'Accetto',
  'submit' => 'Invia registrazione',
  'err_user_exists' => 'Lo username scelto Ã¨ giÃ  utilizzato, scegline un altro',
  'err_password_mismatch' => 'Le password non coincidono, controlla e riprova',
  'err_uname_short' => 'Lo username deve essere almeno di 2 caratteri',
  'err_password_short' => 'La password deve essere almeno di 2 caratteri',
  'err_uname_pass_diff' => 'Username e password devono essere diversi',
  'err_invalid_email' => 'La email non Ã¨ valida',
  'err_duplicate_email' => 'Email giÃ  utilizzata da un altro utente',
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
  'failed_sending_email' => 'La email di conferma non puÃ² essere inviata !',
  'thank_you' => 'Grazie per esserti registrato.<br /><br />Una e-mail di conferma e di attivazione Ã¨ stata inviata alla casella di posta indicata.',
  'acct_created' => 'Il tuo account Ã¨ stato creato e puoi fare il login',
  'acct_active' => 'Il tuo account Ã¨ stato attivato e puoi fare il login',
  'acct_already_act' => 'Il tuo account Ã¨ giÃ  attivo !',
  'acct_act_failed' => 'Questo account non puÃ² essere attivato !',
  'err_unk_user' => 'Utente selezionato inesistente !',
  'x_s_profile' => 'Profilo di %s',
  'group' => 'Gruppo',
  'reg_date' => 'Iscritto il ',
  'disk_usage' => 'Utilizzo disco',
  'change_pass' => 'Cambia password',
  'current_pass' => 'Password corrente',
  'new_pass' => 'Nuova password',
  'new_pass_again' => 'Ripeti nuova password',
  'err_curr_pass' => 'La password attuale Ã¨ errata',
  'apply_modif' => 'Applica le modifiche',
  'change_pass' => 'Cambia la mia password',
  'update_success' => 'Profilo aggiornato',
  'pass_chg_success' => 'Password cambiata',
  'pass_chg_error' => 'La tua password non Ã¨ stata cambiata',
  'notify_admin_email_subject' => '%s - Notifica Registrazione ',
  'notify_admin_email_body' => 'Un nuovo utente con username "%s" si Ã¨ registrato nella tua galleria',
);

$lang_register_confirm_email = <<<EOT
Grazie per esserti registrato su {SITE_NAME}

La tua username Ã¨ : "{USER_NAME}"
La tua password Ã¨ : "{PASSWORD}"

Per completare la registrazione clicca sul link qui sotto
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
  'page_title' => 'Cerca nuove immagini',
  'select_dir' => 'Seleziona cartella',
  'select_dir_msg' => 'Questa funzione consente di aggiungere immagini caricate via FTP sul tuo server<br /><br />Scegli la cartella in cui hai caricato le immagini',
  'no_pic_to_add' => 'Non ci sono immagini da aggiungere',
  'need_one_album' => 'Hai bisogno almeno di un album per usare questa funzione',
  'warning' => 'Attento',
  'change_perm' => 'lo script non puÃ² scrivere in questa cartella, fai il chmod a 755 o 777 e riprova!',
  'target_album' => '<b>Metti le immagini di &quot;</b>%s<b>&quot; in </b>%s',
  'folder' => 'Cartella',
  'image' => 'Immagine',
  'album' => 'Album',
  'result' => 'Risultato',
  'dir_ro' => 'Non scrivibile. ',
  'dir_cant_read' => 'Non leggibile. ',
  'insert' => 'Aggiungo le nuove immagini alla galleria',
  'list_new_pic' => 'Lista delle nuove immagini',
  'insert_selected' => 'Inserisci le immagini selezionate',
  'no_pic_found' => 'Nessuna nuova immagine Ã¨ stata trovata',
  'be_patient' => 'Sii paziente, lo script necessita di tempo per aggiungere le immagini',
  'notes' =>  '<ul>'.
				'<li><b>OK</b> : immagine aggiunta con successo'.
				'<li><b>DP</b> : immagine giÃ  presente nel database'.
				'<li><b>PB</b> : immagine non aggiunta a causa della errata configurazione del server o del chmod delle cartelle'.
                '<li><b>NA</b> : significa che non hai indicato l\'album in cui inserire i file; clicca su \'<a href="javascript:history.back(1)">indietro</a>\' ed indica un album. Se non hai un album <a href="albmgr.php">creane uno</a></li>'.
				'<li>Se OK, DP, PB non appaiono clicca sulla immagine per vedere quale errore Ã¨ stato causato dal PHP'.
				'<li>Se il tuo browser va in timeout, premi il tasto Aggiorna'.
				'</ul>',
  'select_album' => 'scegli album',
  'check_all' => 'Seleziona Tutti',
  'uncheck_all' => 'Deseleziona Tutti',
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
                'title' => 'Ban Utenti',
                'user_name' => 'Nome Utente',
                'ip_address' => 'Indirizzo IP',
                'expiry' => 'Scadenza (vuoto Ã¨ permanente)',
                'edit_ban' => 'Salva Modifiche',
                'delete_ban' => 'Cancella',
                'add_new' => 'Aggiungi Nuovo Ban',
                'add_ban' => 'Aggiungi',
  'error_user' => 'utente non trovato',
  'error_specify' => 'Occorre indicare un username o un indirizzo IP',
  'error_ban_id' => 'Indirizzo ID non valido!',
  'error_admin_ban' => 'Non puoi bloccare te stesso!',
  'error_server_ban' => 'Stai per bloccare il tuo server? Tsk tsk, non puoi fare questo...',
  'error_ip_forbidden' => 'Non puoi bloccare questo IP - (non-routable)',
  'lookup_ip' => 'Cerca indirizzo IP',
  'submit' => 'esegui!',
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
	'title' => 'Upload immagine',
  'custom_title' => 'Form personalizzato', //cpg1.3.0
  'cust_instr_1' => 'Puoi indicare il numero di schede upload. Non devi indicare un numero superiore al limite sottoindicato.', //cpg1.3.0
  'cust_instr_2' => 'Numero schede richieste:', //cpg1.3.0
  'cust_instr_3' => 'Schede upload File: %s', //cpg1.3.0
  'cust_instr_4' => 'Schede upload URI/URL: %s', //cpg1.3.0
  'cust_instr_5' => 'Schede upload URI/URL:', //cpg1.3.0
  'cust_instr_6' => 'Schede upload File:', //cpg1.3.0
  'cust_instr_7' => 'Inserisci il numero di schede per ciascun tipo di upload, quindi clicca \'Continua\'. ', //cpg1.3.0
  'reg_instr_1' => 'Azione non corretta per la creazione della scheda.', //cpg1.3.0
  'reg_instr_2' => 'Puoi effettuare gli upload dei tuoi file utilizzando le schede sottostanti. La dimensione dei file inviati al server non deve superare i %s KB ciascuno. I file ZIP caricati tramite  \'Upload File\' o \'Upload URI/URL\' rimarranno compressi.', //cpg1.3.0
  'reg_instr_3' => 'Se desideri che i tuoi file Zip vengano decompressi, devi usare la scheda \'Decomprimi ZIP Upload\'.', //cpg1.3.0
  'reg_instr_4' => 'Utilizzando \'Upload URI/URL\', occorre inserire il path completo del file come nel seguente esempio: http://www.miosito.com/immagini/esempio.jpg', //cpg1.3.0
  'reg_instr_5' => 'Una volta compilati tutti i campi della scheda,  clicca \'Continua\'.', //cpg1.3.0
  'reg_instr_6' => 'Decomprimi ZIP Upload:', //cpg1.3.0
  'reg_instr_7' => 'Upload File:', //cpg1.3.0
  'reg_instr_8' => 'Upload URI/URL:', //cpg1.3.0
  'error_report' => 'Rapporto di errore', //cpg1.3.0
  'error_instr' => 'I seguenti upload hanno generato errori:', //cpg1.3.0
  'file_name_url' => 'File Name/URL', //cpg1.3.0
  'error_message' => 'Messaggio d\'errore', //cpg1.3.0
  'no_post' => 'File non caricato (not uploaded by POST).', //cpg1.3.0
  'forb_ext' => 'Estensione del file non consentita.', //cpg1.3.0
  'exc_php_ini' => 'Superata dimensione massima file consentita da php.ini.', //cpg1.3.0
  'exc_file_size' => 'Superata dimensione massima file consentita da CPG.', //cpg1.3.0
  'partial_upload' => 'Upload parzialmente eseguito.', //cpg1.3.0
  'no_upload' => 'Upload non eseguito.', //cpg1.3.0
  'unknown_code' => 'Codice di errore PHP di upload sconosciuto.', //cpg1.3.0
  'no_temp_name' => 'Nessun caricamento - Nessun nome temporaneo.', //cpg1.3.0
  'no_file_size' => 'Non contiene dati/o Ã¨ corrotto', //cpg1.3.0
  'impossible' => 'Impossibile spostare.', //cpg1.3.0
  'not_image' => 'Non Ã¨ un\'immagine, o Ã¨ corrotto', //cpg1.3.0
  'not_GD' => 'Non Ã¨ un\'estensione di GD.', //cpg1.3.0
  'pixel_allowance' => 'Dimensioni in Pixel superate.', //cpg1.3.0
  'incorrect_prefix' => 'prefisso URI/URL errato', //cpg1.3.0
  'could_not_open_URI' => 'impossibile accedere a URI.', //cpg1.3.0
  'unsafe_URI' => 'Sicurezza non verificabile.', //cpg1.3.0
  'meta_data_failure' => 'errore Meta Data', //cpg1.3.0
  'http_401' => '401 Accesso Non Autorizzato', //cpg1.3.0
  'http_402' => '402 Accesso solo a Pagamento', //cpg1.3.0
  'http_403' => '403 Accesso Vietato', //cpg1.3.0
  'http_404' => '404 File Non Trovato', //cpg1.3.0
  'http_500' => '500 Errore Interno del Server', //cpg1.3.0
  'http_503' => '503 Servizio non disponibile', //cpg1.3.0
  'MIME_extraction_failure' => 'Impossibile determinare il tipo MIME.', //cpg1.3.0
  'MIME_type_unknown' => 'Tipo MIME sconosciuto', //cpg1.3.0
  'cant_create_write' => 'Impossibile creare file in scrittura.', //cpg1.3.0
  'not_writable' => 'Impossibile scrivere su file.', //cpg1.3.0
  'cant_read_URI' => 'Impossibile leggere URI/URL', //cpg1.3.0
  'cant_open_write_file' => 'Impossibile aprire URI file in scrittura.', //cpg1.3.0
  'cant_write_write_file' => 'Impossibile scrivere su URI file in scrittura.', //cpg1.3.0
  'cant_unzip' => 'impossibile decomprimere.', //cpg1.3.0
  'unknown' => 'Errore sconosciuto', //cpg1.3.0
  'succ' => 'Upload effettuati con successo', //cpg1.3.0
  'success' => '%s upload effettuati con successo.', //cpg1.3.0
  'add' => 'Clicca su \'Continua\' per aggiungere i file agli album.', //cpg1.3.0
  'failure' => 'Errore Upload', //cpg1.3.0
  'f_info' => 'Informazioni sul File', //cpg1.3.0
  'no_place' => 'Il file precedente non Ã¨ stato inserito.', //cpg1.3.0
  'yes_place' => 'Il file precedente Ã¨ stato inserito con successo.', //cpg1.3.0
  'max_fsize' => 'La dimensione massima del file Ã¨ %s KB',
  'album' => 'Album',
  'picture' => 'Immagine',
  'pic_title' => 'Titolo immagine',
  'description' => 'Descrizione immagine',
  'keywords' => 'Keywords (separate da spazi)',
  'err_no_alb_uploadables' => 'Spiacenti, in nessun album Ã¨ consentito caricare immagini',
  'place_instr_1' => 'Inserisci immediatamente i file negli album.  Puoi anche inserire informazioni su ciascun file adesso.', //cpg1.3.0
  'place_instr_2' => 'Altri file da inserire. Clicca \'Continua\'.', //cpg1.3.0
  'process_complete' => 'Tutti i file sono stati inseriti con successo.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'title' => 'Gestione utenti',
  'name_a' => 'Nome ascendente',
  'name_d' => 'Nome discendente',
  'group_a' => 'Gruppo ascendente',
  'group_d' => 'Gruppo discendente',
  'reg_a' => 'Data iscrizione ascendente',
  'reg_d' => 'Data iscrizione discendente',
  'pic_a' => 'Numero immagini crescente',
  'pic_d' => 'Numero immagini decrescente',
  'disku_a' => 'Utilizzo disco crescente',
  'disku_d' => 'Utilizzo disco decrescente',
  'lv_a' => 'Ultima visita ascendente',
  'lv_d' => 'Ultima visita discendente',
  'sort_by' => 'Ordina utenti per',
  'err_no_users' => 'La tabella utenti Ã¨ vuota !',
  'err_edit_self' => 'Non puoi editare il tuo profilo da qui, usa invece "Il mio profilo"',
  'edit' => 'EDITA',
  'delete' => 'CANCELLA',
  'name' => 'Nome utente',
  'group' => 'Gruppo',
  'inactive' => 'Inattivo',
  'operations' => 'Operazioni',
  'pictures' => 'Immagini',
  'disk_space' => 'Spazio usato / Quota',
  'registered_on' => 'Registrato il',
  'last_visit' => 'Ultima Visita',
  'u_user_on_p_pages' => '%d utenti in %d pagine',
  'confirm_del' => 'Vuoi davvero cancellare questo utente ? \\nTutte le sue immagini ed i suoi album andranno persi.',
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
  'latest_upload' => 'Uploads recenti',
  'never' => 'mai',
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
  'title' => 'Manutenzione (Ridimensiona immagini)',
  'what_it_does' => 'Cosa fa',
  'what_update_titles' => 'Aggiorna titoli da nome file',
  'what_delete_title' => 'Cancella titoli',
  'what_rebuild' => 'Ricostruisce miniature e immagini ridimensionate',
  'what_delete_originals' => 'Cancella immagini originali e sostituisce con versione ridimensionata',
  'file' => 'File',
  'title_set_to' => 'titolo impostato a',
  'submit_form' => 'esegui',
  'updated_succesfully' => 'aggiornamento riuscito',
  'error_create' => 'ERRORE creando',
  'continue' => 'Processa piÃ¹ immagini',
  'main_success' => 'Il file %s Ã¨ stato impostato come immagine principale',
  'error_rename' => 'Errore rinominando %s in %s',
  'error_not_found' => 'Il file %s non Ã¨ stato trovato',
  'back' => 'torna al menu principale',
  'thumbs_wait' => 'Aggiornamento miniature e/o immagini ridimensionate, attendi...',
  'thumbs_continue_wait' => 'Continua aggiornamento miniature e/o immagini ridimensionate...',
  'titles_wait' => 'Aggiornamento titoli, attendi...',
  'delete_wait' => 'Cancellazione titoli, attendi...',
  'replace_wait' => 'Cancellazione originali e sostituzione con immagini ridimensionate, attendi..',
  'instruction' => 'Istruzioni rapide',
  'instruction_action' => 'Scegli azione',
  'instruction_parameter' => 'Imposta parametri',
  'instruction_album' => 'Scegli album',
  'instruction_press' => 'Premi [%s]',
  'update' => 'Aggiorna miniature e/o immagini ridimensionate',
  'update_what' => 'Cosa aggiornare',
  'update_thumb' => 'Solo miniature',
  'update_pic' => 'Solo immagini ridimensionate',
  'update_both' => 'Sia le miniature che le immagini ridimensionate',
  'update_number' => 'Numero di immagini elaborate per click',
  'update_option' => '(Prova ad impostare questa opzione ad un valore basso se hai problemi di timeout)',
  'filename_title' => 'Nome File &rArr; Titolo Immagine',
  'filename_how' => 'Come modificare il nome file',
  'filename_remove' => 'Rimuovi il .jpg finale e sostituisci _ (underscore) con spazi',
  'filename_euro' => 'Cambia 2003_11_23_13_20_20.jpg in 23/11/2003 13:20',
  'filename_us' => 'Cambia 2003_11_23_13_20_20.jpg in 11/23/2003 13:20',
  'filename_time' => 'Cambia 2003_11_23_13_20_20.jpg in 13:20',
  'delete' => 'Cancella titoli immagini o immagini con dimensioni originali',
  'delete_title' => 'Cancella titoli immagini',
  'delete_original' => 'Cancella le immagini originali',
  'delete_replace' => 'Cancella le immagini originali sostituendole con la versione ridimensionata',
  'select_album' => 'Scegli album',
  'delete_orphans' => 'Cancella commenti orfani (opera su tutti gli album)',
  'orphan_comment' => 'commenti orfani trovati',
  'delete' => 'Cancella',
  'delete_all' => 'Cancella tutto',
  'comment' => 'Commento: ',
  'nonexist' => 'relativo a file inesistente # ',
  'phpinfo' => 'Mostra phpinfo',
  'update_db' => 'Aggiorna database',
  'update_db_explanation' => 'Se hai sostituito dei file di coppermine, apportato modifiche, o aggiornato da una precedente versione di coppermine, lancia una volta l\'aggiornamento del database. Questo creerÃ  le tabelle necessarie e/o i valori di configurazione nel database di coppermine.',
);

?>
