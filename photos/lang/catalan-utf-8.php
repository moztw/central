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
// ENCODING CHECK; SHOULD BE YEN BETA MU: ¥ ß µ
// ------------------------------------------------------------------------- //
// CVS version: $Id: catalan-utf-8.php,v 1.7 2004/12/29 23:03:50 chtito Exp $
// ------------------------------------------------------------------------- //


// info about translators and translated language
$lang_translation_info = array(
'lang_name_english' => 'Catalan',  
'lang_name_native' => 'Català',
'lang_country_code' => 'es', 
'trans_name'=> 'simkin', //the name of the translator - can be a nickname
'trans_email' => 'simkin@ono.com', //translator's email address (optional)
'trans_website' => 'http://simkin.now.nu/', //translator's website (optional)
'trans_date' => '2004-09-02', //the date the translation was created / last modified
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Octets', 'Kb', 'Mb');

// Day of weeks and months
$lang_day_of_week = array('Dg', 'Dl', 'Dt', 'Dc', 'Dj', 'Dv', 'Ds');
$lang_month = array('Gen', 'Febr', 'Març', 'Abr', 'Maig', 'Juny', 'Jul', 'Ago', 'Set', 'Oct', 'Nov', 'Des');

// Some common strings
$lang_yes = 'Si';
$lang_no  = 'No';
$lang_back = 'ARRERE';
$lang_continue = 'CONTINUA';
$lang_info = 'Informació';
$lang_error = 'Error';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%d de %B de %Y';
$lastcom_date_fmt =  '%d/%m/%y a les %H:%M';
$lastup_date_fmt = '%d de %B de %Y';
$register_date_fmt = '%d de %B de %Y';
$lasthit_date_fmt = '%d de %B de %Y a les %I:%M %p';
$comment_date_fmt =  '%d de %B de %Y a les %I:%M %p';
$log_date_fmt = '%d %B, %Y a les %I:%M %p'; //cpg 1.4.0

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
	'random' => 'Fitxers aleatoris',
	'lastup' => 'Últims fitxers',
    'lastalb'=> 'Últims àlbums modificats',
	'lastcom' => 'Últims comentaris',
	'topn' => 'Més vists',
	'toprated' => 'Més valorats',
	'lasthits' => 'Últims vists',
	'search' => 'Resultat de la recerca',
    'favpics'=> 'Favorits'
);

$lang_errors = array(
	'access_denied' => 'No teniu permisos per a accedir a aquesta pàgina.',
	'perm_denied' => 'No te permisos per a realitzar aquesta operació.',
	'param_missing' => 'Falten paràmetres requerits.',
	'non_exist_ap' => 'L\'àlbum/fitxer seleccionat no existeix!',
	'quota_exceeded' => 'Quota de disc excedida<br /><br />Teniu una quota de disc de [quota]K, els seus fitxers ocupen actualment [space]K, i afegint aquest fitxer excedirieu la quota.',
	'gd_file_type_err' => 'Quan s\'usa la llibreria d\'imatge GD solament estan permesos els tipus JPEG i PNG.',
	'invalid_image' => 'La imatge que heu afegit està corrupta o no pot ser tractada per la llibreria GD.',
	'resize_failed' => 'No es pot crear miniatura.',
	'no_img_to_display' => 'No hi ha cap imatge per mostrar.',
	'non_exist_cat' => 'La categoria seleccionada no existeix.',
	'orphan_cat' => 'Una categoria no té pare, executeu el gestor de categories per a corregir el problema.',
	'directory_ro' => 'El directori \'%s\' no té permisos d\'escriptura, el fitxers no poden ser esborrats.',
	'non_exist_comment' => 'El comentari seleccionat no existeix.',
	'pic_in_invalid_album' => 'El fitxer està en un àlbum que no existeix (%s)!?',
    'banned' => 'Actualment estàs expulsat de l\'ús d\'aquesta web.',
    'not_with_udb' => 'Aquesta funció està desactivada en Coppermine perquè està integrada amb un programari de fòrums. El que sigui que està intentant fer no està suportat per aquesta configuració, o la funció hauria de ser gestionada pel programari de fòrums.',
	'offline_title' => 'Fora de línia',
	'offline_text' => 'La galeria està actualment fora de línia - torneu prompte!',
	'ecards_empty' => 'Actualment no hi ha cap registre de postals per a mostrar. Comproveu que heu activat el registre de postals en la configuració de coppermine!',
	'action_failed' => 'L\'acció ha fallat. Coppermine no pot processar la vostra petició.',
	'no_zip' => 'Les llibreries necessàries per a processar fitxers ZIP no són disponibles. Per favor contacteu amb l\'administrador d\'aquesta galeria.',
	'zip_type' => 'No teniu permís per a penjar fitxers ZIP.',
);

$lang_bbcode_help = 'Els següents codis poden ser-vos d\'utilitat:<li>[b]<b>Negreta</b>[/b]</li> <li>[i]<i>Cursiva</i>[/i]</li> <li>[url=http://lavostraweb.com/]Nom de la web[/url]</li> <li>[email]usuari@domini.com[/email]</li>'; 

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
	'alb_list_title' => 'Vés a la llista d\'àlbums',
	'alb_list_lnk' => 'Llista d\'Àlbums',
	'my_gal_title' => 'Vés a la meva galeria personal',
	'my_gal_lnk' => 'La meva galeria',
	'my_prof_lnk' => 'El meu perfil d\'usuari',
	'adm_mode_title' => 'Canvia a mode administrador',
	'adm_mode_lnk' => 'Mode Admininstrador',
	'usr_mode_title' => 'Canvia a mode usuari',
	'usr_mode_lnk' => 'Mode Usuari',
	'upload_pic_title' => 'Insereix un fitxer a un àlbum',
	'upload_pic_lnk' => 'Insereix fitxer',
	'register_title' => 'Crea un compte',
	'register_lnk' => 'Registreu-vos',
	'login_lnk' => 'Entreu',
	'logout_lnk' => 'Sortiu',
	'lastup_lnk' => 'Últims fitxers',
	'lastcom_lnk' => 'Últims comentaris',
	'topn_lnk' => 'Més vists',
	'toprated_lnk' => 'Més valorats',
	'search_lnk' => 'Cercar',
	'fav_lnk' => 'Els meus Favorits',
	'memberlist_title' => 'Mostra llista d\'usuaris', 
	'memberlist_lnk' => 'Llista d\'usuaris', 
	'faq_title' => 'Preguntes més freqüents sobre la galeria d\'imatges &quot;Coppermine&quot;',
	'faq_lnk' => 'PMF', 
);

$lang_gallery_admin_menu = array(
	'upl_app_lnk' => 'Aprova pujades',
	'config_lnk' => 'Configuració',
	'albums_lnk' => 'Àlbums',
	'categories_lnk' => 'Categories',
	'users_lnk' => 'Usuaris',
	'groups_lnk' => 'Grups',
	'comments_lnk' => 'Comentaris',
	'searchnew_lnk' => 'Afegeix fitxers (FTP)',
    'util_lnk' => 'Eines',
    'ban_lnk' => 'Expulsa Usuaris',
	'db_ecard_lnk' => 'Mostra postals', 
);

$lang_user_admin_menu = array(
	'albmgr_lnk' => 'Crea / ordena àlbums',
	'modifyalb_lnk' => 'Modifica els meus àlbums',
	'my_prof_lnk' => 'El meu perfil',
);

$lang_cat_list = array(
	'category' => 'Categoria',
	'albums' => 'Àlbums',
	'pictures' => 'Fitxers',
);

$lang_album_list = array(
	'album_on_page' => '%d àlbums en %d pàgina(s)'
);

$lang_thumb_view = array(
	'date' => 'DATA',
        //Sort by filename and title
	'name' => 'NOM',
    'title' => 'TÍTOL',
	'sort_da' => 'Ordenat per data ascendent',
	'sort_dd' => 'Ordenat per data descendent',
	'sort_na' => 'Ordenat per nom ascendent',
	'sort_nd' => 'Ordenat per nom descendent',
    'sort_ta' => 'Ordenat per títol ascendent',
    'sort_td' => 'Ordenat per títol descendent',
	'download_zip' => 'Descarrega com fitxer ZIP', 
	'pic_on_page' => '%d fitxers en %d pàgina(s)',
	'user_on_page' => '%d usuaris en %d pàgina(s)'
);

$lang_img_nav_bar = array(
	'thumb_title' => 'Torna a l\'índex de l\'àlbum',
	'pic_info_title' => 'Mostra/oculta informació del fitxer',
	'slideshow_title' => 'Projecció de diapositives',
	'ecard_title' => 'Enviar aquesta fitxer a un amic/ga',
	'ecard_disabled' => 'Enviament de postals deshabilitat',
	'ecard_disabled_msg' => 'No teniu permisos per a enviar postals',
	'prev_title' => 'Veure fitxer anterior',
	'next_title' => 'Veure fitxer següent',
	'pic_pos' => 'FITXER %s/%s',
);

$lang_rate_pic = array(
	'rate_this_pic' => 'Valora aquest fitxer ',
	'no_votes' => '(No hi ha vots)',
	'rating' => '(valoració actual : %s / 5 amb %s vots)',
	'rubbish' => 'Dolent',
	'poor' => 'Regular',
	'fair' => 'Normal',
	'good' => 'Bo',
	'excellent' => 'Excel·lent',
	'great' => 'Genial',
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
	CRITICAL_ERROR => 'Error crític',
	'file' => 'Fitxer: ',
	'line' => 'Línia: ',
);

$lang_display_thumbnails = array(
	'filename' => 'Fitxer: ',
	'filesize' => 'Mida: ',
	'dimensions' => 'Dimensions: ',
	'date_added' => 'Data d\'alta: '
);

$lang_get_pic_data = array(
	'n_comments' => '%s comentaris',
	'n_views' => 'vist %s vegades',
	'n_votes' => '(%s vots)'
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Depuració', 
  'select_all' => 'Selecciona Tot', 
  'copy_and_paste_instructions' => 'Si aneu a demanar ajuda al fòrum de suport de coppermine, aleshores copieu i enganxeu la sortida de depuració al vostre missatge. Assegureu-vos de reemplaçar qualsevol contrasenya de la consulta amb *** abans de penjar el missatge.', 
  'phpinfo' => 'mostra phpinfo', 
);

$lang_language_selection = array(
  'reset_language' => 'Idioma per defecte', 
  'choose_language' => 'Trieu el vostre idioma', 
);

$lang_theme_selection = array(
  'reset_theme' => 'Aparença per defecte', 
  'choose_theme' => 'Trieu aparença', 
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
	'Exclamation' => 'Exclamació',
	'Question' => 'Pregunta',
	'Very Happy' => 'Molt Feliç',
	'Smile' => 'Somriure',
	'Sad' => 'Trist',
	'Surprised' => 'Sorprès',
	'Shocked' => 'Impressionat',
	'Confused' => 'Confós',
	'Cool' => 'Guai',
	'Laughing' => 'Rient',
	'Mad' => 'Furiós',
	'Razz' => 'Razz',
	'Embarassed' => 'Avergonyit',
	'Crying or Very sad' => 'Plorant o molt trist',
	'Evil or Very Mad' => 'Dolent o molt boig',
	'Twisted Evil' => 'Dimoni malvat',
	'Rolling Eyes' => 'Ulls girant',
	'Wink' => 'Fent l\'ullet',
	'Idea' => 'Idea',
	'Arrow' => 'Fletxa',
	'Neutral' => 'Neutral',
	'Mr. Green' => 'Mr. Verd',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
	0 => 'Sortint del mode administrador...',
	1 => 'Entrant al mode administrador...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
	'alb_need_name' => 'Els àlbums han de tenir un nom!',
	'confirm_modifs' => 'Esteu segur d\\\'aplicar aquestes modificacions?',
	'no_change' => 'No s\\\'ha fet cap canvi!',
	'new_album' => 'Nou àlbum',
	'confirm_delete1' => 'Esteu segur de voler esborrar aquest àlbum?',
	'confirm_delete2' => '\nTots els fitxers i comentaris que conté es perdran!',
	'select_first' => 'Seleccioneu un àlbum primer',
	'alb_mrg' => 'Gestor d\'Àlbums',
	'my_gallery' => '* La meva galeria *',
	'no_category' => '* Sense categoria *',
	'delete' => 'Esborra',
	'new' => 'Nou',
	'apply_modifs' => 'Aplica modificacions',
	'select_category' => 'Selecciona categoria',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
	'miss_param' => 'Els paràmetres requerits per a l\'operació: \'%s\' no han estat subministrats!',
	'unknown_cat' => 'La categoria seleccionada no existeix a la base de dades',
	'usergal_cat_ro' => 'La categoria de galeries d\'usuari no pot ser esborrada!',
	'manage_cat' => 'Gestiona les categories',
	'confirm_delete' => 'Esteu segur de voler ESBORRAR aquesta catagoría',
	'category' => 'Categoria',
	'operations' => 'Operacions',
	'move_into' => 'Moure cap a',
	'update_create' => 'Modifica/Crea categoria',
	'parent_cat' => 'Categoria pare',
	'cat_title' => 'Títol de la categoria',
	'cat_thumb' => 'Miniatura de la categoria',
	'cat_desc' => 'Descripció de la categoria'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
	'title' => 'Configuració',
	'restore_cfg' => 'Restaura valors per defecte',
	'save_cfg' => 'Desa la nova configuració',
	'notes' => 'Notes',
	'info' => 'Informació',
	'upd_success' => 'La configuració de Coppermine ha estat actualitzada',
	'restore_success' => 'Valors per defecte de Coppermine restaurats',
	'name_a' => 'Ascendent per nom',
	'name_d' => 'Descendent per nom',
    'title_a' => 'Ascendent per títol',
    'title_d' => 'Descendent per títol',
	'date_a' => 'Ascendent per data',
	'date_d' => 'Descendent per data',
    'th_any' => 'Màx. relació d\'aspecte',
    'th_ht' => 'Alçada',
    'th_wd' => 'Amplada',
    'label' => 'etiqueta', 
	'item' => 'ítem', 
	'debug_everyone' => 'Tothom', 
	'debug_admin' => 'Només Admin', 
);

if (defined('CONFIG_PHP')) $lang_config_data = array(
	'Paràmetres Generals',
	array('Nom de la galeria', 'gallery_name', 0),
	array('Descripció de la galeria', 'gallery_description', 0),
	array('Correu electrònic de l\'administrador', 'gallery_admin_email', 0),
	array('Adreça web associada a l\'enllaç  \'Veure més imatges\' de les postals', 'ecards_more_pic_target', 0),
	array('La galeria és fora de línia', 'offline', 1), 
	array('Registre de postals', 'log_ecards', 1), 
	array('Permetre descarregues de favorits en format ZIP', 'enable_zipdownload', 1), 

	'Idioma, aparença i paràmetres del joc de caràcters',
	array('Idioma', 'lang', 5),
	array('Aparença', 'theme', 6),
	array('Mostra llista d\'idiomes', 'language_list', 8), 
	array('Mostra banderes d\'idiomes', 'language_flags', 8), 
	array('Mostra &quot;reinicia&quot; en la selecció d\'idiomes', 'language_reset', 1), 
	array('Mostra llista d\'aparences', 'theme_list', 8), 
	array('Mostra &quot;reinicia&quot; en la selecció d\'aparences', 'theme_reset', 1), 
	array('Mostra PMF', 'display_faq', 1), 
	array('Mostra l\'ajuda per al bbcode', 'show_bbcode_help', 1), 
	array('Joc de caràcters', 'charset', 4), 

	'Aspecte de la llista d\'àlbums',
	array('Amplària de la taula principal (píxels o %)', 'main_table_width', 0),
	array('Nombre de nivells de categories a mostrar', 'subcat_level', 0),
	array('Nombre d\'àlbums a mostrar', 'albums_per_page', 0),
	array('Nombre de columnes a la llista d\'àlbums', 'album_list_cols', 0),
	array('Grandària de les miniatures en píxels', 'alb_list_thumb_size', 0),
	array('Contingut de la pàgina principal', 'main_page_layout', 0),
    array('Mostra miniatures d\'àlbums de primer nivell en categories','first_level',1),

	'Aspecte de la visualització de miniatures',
	array('Nombre de columnes a la pàgina de miniatures', 'thumbcols', 0),
	array('Nombre de files a la pàgina de miniatures', 'thumbrows', 0),
	array('Nombre màxim de pestanyes a mostrar', 'max_tabs', 0),
	array('Mostra peu del fitxer (a més del títol) sota la miniatura', 'caption_in_thumbview', 1),
	array('Mostra el nombre de vegades vist sota la miniatura', 'views_in_thumbview', 1),
	array('Mostra el nombre de comentaris sota la miniatura', 'display_comment_count', 1),
	array('Mostra el nom de l\'usuari que va afegir el fitxer sota la miniatura', 'display_uploader', 1),
	array('Ordre per defecte de les imatges', 'default_sort_order', 3),
	array('Mínim nombre de vots perquè una imatge aparegui a la llista de  \'Més Valorades\'', 'min_votes_for_rating', 0),

	'Visualització d\'imatges i paràmetres dels comentaris',
	array('Amplària de la taula on mostrar la imatge (píxels o %)', 'picture_table_width', 0),
	array('Informació del fitxer visible per defecte', 'display_pic_info', 1),
	array('Filtra paraules malsonants als comentaris', 'filter_bad_words', 1),
	array('Permet emoticones als comentaris', 'enable_smilies', 1),
	array('Permet diversos comentaris consecutius sobre un fitxer per part del mateix usuari (inhabilita la protecció d\'acumulació)', 'disable_comment_flood_protect', 1),
	array('Màxima longitud per a la descripció d\'un fitxer', 'max_img_desc_length', 0),
	array('Màxim nombre de caràcters d\'una paraula', 'max_com_wlength', 0),
	array('Màxim nombre de línies d\'un comentari', 'max_com_lines', 0),
	array('Màxima longitud d\'un comentari', 'max_com_size', 0),
    array('Mostrar tira de pel·lícula', 'display_film_strip', 1),
    array('Nombre d\'objectes de la tira de pel·lícula', 'max_film_strip_items', 0),
    array('Notifica a l\'administrador sobre nous comentaris (per email)', 'email_comment_notification', 1),
    array('Interval (en milisegons) per a la projecció de diapositives (1 segon = 1000 milisegons)', 'slideshow_interval', 0),

	'Paràmetres dels fitxers i les miniatures',
	array('Qualitat per als fitxers JPEG', 'jpeg_qual', 0),
	array('Dimensió màxima d\'una miniatura <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0),
    array('Usa dimensió ( amplària o alçada o màxima relació per a les miniatures )<a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7),
	array('Crea imatges de grandària intermèdia','make_intermediate',1),
	array('Amplària o alçada màxima d\'una imatge/vídeo de grandària intermèdia <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0),
	array('Mida màxima per a fitxers penjats (KB)', 'max_upl_size', 0),
	array('Amplària o alçada màxima per a les imatges/vídeos penjats (píxels)', 'max_upl_width_height', 0),

	'Paràmetres avançats per a fitxers i miniatures', 
	array('Mostra icona d\'àlbum privat als usuaris no identificats','show_private',1), 
	array('Caràcters no permesos al nom dels fitxers', 'forbiden_fname_char',0), 
	//array('Extensions de fitxer permeses per a imatges penjades', 'allowed_file_extensions',0), 
	array('Tipus d\'imatge permeses', 'allowed_img_types',0), 
	array('Tipus de vídeo permesos', 'allowed_mov_types',0), 
	array('Tipus d\'àudio permesos', 'allowed_snd_types',0), 
	array('Tipus de documents permesos', 'allowed_doc_types',0), 
	array('Mètode per a redimensionar imatges','thumb_method',2), 
	array('Camí a la utilitat \'convert\' de ImageMagick (p.ex. /usr/bin/X11/)', 'impath', 0), 
	//array('Tipus d\'imatge permeses (només vàlid per a ImageMagick)', 'allowed_img_types',0), 
	array('Ordres de línia per a ImageMagick', 'im_options', 0), 
	array('Llegeix dades EXIF dels fitxers JPEG', 'read_exif_data', 1), 
	array('Llegeix dades IPTC dels fitxers JPEG', 'read_iptc_data', 1), 
	array('Directori dels àlbums <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0), 
	array('Directori per als fitxers dels usuaris <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0), 
	array('Prefixe per a les imatges intermèdies <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0), 
	array('Prefixe per a les miniatures <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0), 
	array('Mode per defecte per als directoris', 'default_dir_mode', 0), 
	array('Mode per defecte per als fitxers', 'default_file_mode', 0), 

	'Paràmetres d\'usuari',
	array('Permetre el registre de nous usuaris', 'allow_user_registration', 1),
	array('Registre d\'usuaris requereix verificació per correu electrònic', 'reg_requires_valid_email', 1),
	array('Notifica a l\'administrador del registre d\'usuaris per email', 'reg_notify_admin_email', 1),
	array('Permetre a dos usuaris tenir el mateix correu electrònic', 'allow_duplicate_emails_addr', 1),
	array('Els usuaris poden tenir àlbums privats (Nota: si canvieu de \'si\' a \'no\' qualsevol àlbum privat actual esdevindrà públic)', 'allow_private_albums', 1),
	array('Notifica a l\'administrador de fitxers pujats esperant autorització', 'upl_notify_admin_email', 1),
	array('Permet als usuaris identificats veure la llista d\'usuaris', 'allow_memberlist', 1),

	'Camps extra per a descripció d\'imatges (deixeu en blanc si no els useu)',
	array('Nom del camp 1', 'user_field1_name', 0),
	array('Nom del camp 2', 'user_field2_name', 0),
	array('Nom del camp 3', 'user_field3_name', 0),
	array('Nom del camp 4', 'user_field4_name', 0),

	'Configuració de galetes (cookies)',
	array('Nom de la galeta usada per coppermine (quan s\'usa la integració amb fòrums, assegureu-vos que el nom sigui diferent del de la galeta del fòrum)', 'cookie_name', 0),
	array('Camí de la galeta usada per coppermine', 'cookie_path', 0),

	'Altres paràmetres',
	array('Habilita mode de depuració', 'debug_mode', 9),
	array('Mostra avisos en mode de depuració', 'debug_notice', 1),

  '<br /><div align="left"><a name="notice1"></a>(*) Aquests paràmetres no deuen ser canviats si ja teniu fitxers a la vostra base de dades.<br />
  <a name="notice2"></a>(**) Si es canvia aquest paràmetre, només afectarà als fitxers afegits d\'ara en avant, per tant si ja hi ha fitxers a la galeria és recomanable que no es canvie aquest paràmetre. Podeu, tanmateix, fer efectius els canvis sobre les imatges existents amb les &quot;<a href="util.php">eines</a>&quot; de redimensió d\'imatges del menú d\'administració.</div><br />',
);

// ------------------------------------------------------------------------- //
// File db_ecard.php 
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Postals enviades', 
  'ecard_sender' => 'Remitent', 
  'ecard_recipient' => 'Destinatari', 
  'ecard_date' => 'Data', 
  'ecard_display' => 'Mostra postal', 
  'ecard_name' => 'Nom', 
  'ecard_email' => 'Correu electrònic', 
  'ecard_ip' => 'IP #', 
  'ecard_ascending' => 'ascendent', 
  'ecard_descending' => 'descendent', 
  'ecard_sorted' => 'Ordre', 
  'ecard_by_date' => 'per data', 
  'ecard_by_sender_name' => 'per nom del remitent', 
  'ecard_by_sender_email' => 'per correu electrònic del remitent', 
  'ecard_by_sender_ip' => 'per IP del remitent', 
  'ecard_by_recipient_name' => 'per nom del destinatari', 
  'ecard_by_recipient_email' => 'per correu electrònic del destinatari', 
  'ecard_number' => 'mostrant registres %s al %s de %s', 
  'ecard_goto_page' => 'vés a la pàgina', 
  'ecard_records_per_page' => 'Registres per pàgina', 
  'check_all' => 'Activar Tots', 
  'uncheck_all' => 'Desactivar Tots', 
  'ecards_delete_selected' => 'Esborra postals seleccionades', 
  'ecards_delete_confirm' => 'Esteu segur de voler esborrar els registres? Marqueu el quadre de verificació!', 
  'ecards_delete_sure' => 'Estic segur', 
);


// ------------------------------------------------------------------------- //
// File dbinput.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
	'empty_name_or_com' => 'Heu d\'introduir el vostre nom i un comentari',
	'com_added' => 'El vostre comentari ha estat afegit',
	'alb_need_title' => 'Heu d\'introduir un títol per a l\'àlbum!',
	'no_udp_needed' => 'No es requereix cap canvi.',
	'alb_updated' => 'L\'àlbum ha estat actualitzat',
	'unknown_album' => 'L\'àlbum seleccionat no existeix o no teniu permisos per a afegir fitxers en aquest àlbum',
	'no_pic_uploaded' => 'No s\'ha penjat cap fitxer!<br /><br />Si havieu seleccionat un fitxer per a afegir, comproveu que el servidor admet penjar fitxers...',
	'err_mkdir' => 'No s\'ha pogut crear el directori %s!',
	'dest_dir_ro' => 'El directori de destí %s no té permisos d\'escriptura!',
	'err_move' => 'Impossible moure %s a  %s !',
	'err_fsize_too_large' => 'La mida del fitxer que heu penjat és massa gran (el màxim permès és de %s x %s)',
	'err_imgsize_too_large' => 'La mida del fitxer que heu penjat és massa gran (el màxim permès és de %s KB)',
	'err_invalid_img' => 'El fitxer que heu penjat no és una imatge vàlida',
	'allowed_img_types' => 'Només podeu penjar %s imatges.',
	'err_insert_pic' => 'El fitxer \'%s\' no es pot inserir a l\'àlbum ',
	'upload_success' => 'El vostre fitxer ha estat penjat amb èxit<br /><br />Serà visible després de l\'aprovació dels administradors.',
	'notify_admin_email_subject' => '%s - Notificació de fitxer penjat',
	'notify_admin_email_body' => 'Una imatge que necessita la vostra aprovació ha estat penjada per %s. Visiteu %s',
	'info' => 'Informació',
	'com_added' => 'Comentari afegit',
	'alb_updated' => 'Àlbum actualitzat',
	'err_comment_empty' => 'El vostre comentari està buit!',
	'err_invalid_fext' => 'Només són admesos fitxers amb les següents extensions : <br /><br />%s.',
	'no_flood' => 'Perdoneu però sou l\'autor/a de l\'últim comentari introduït en aquest fitxer<br /><br />Podeu editar el comentari que heu posat si voleu modificar-lo',
	'redirect_msg' => 'Esteu sent redirigit.<br /><br /><br />Premeu \'CONTINUAR\' si la pàgina no es refresca automàticament',
	'upl_success' => 'El vostre fitxer ha estat afegit amb èxit',
	'email_comment_subject' => 'Comentari enviat a la Galeria Coppermine',
	'email_comment_body' => 'Algú ha enviat un comentari a la vostra galeria. Vegeu-lo a',
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
	'caption' => 'Peu',
	'fs_pic' => 'imatge mida completa',
	'del_success' => 'esborrat amb èxit',
	'ns_pic' => 'imatge mida normal',
	'err_del' => 'no pot ser esborrat',
	'thumb_pic' => 'miniatura',
	'comment' => 'comentari',
	'im_in_alb' => 'imatges a l\'àlbum',
	'alb_del_success' => 'Àlbum \'%s\' esborrat',
	'alb_mgr' => 'Gestor d\'àlbums',
	'err_invalid_data' => 'Dades invàlides rebudes en \'%s\'',
	'create_alb' => 'Creant àlbum \'%s\'',
	'update_alb' => 'Actualitzant àlbum \'%s\' amb el títol \'%s\' i l\'índex \'%s\'',
	'del_pic' => 'Esborra imatge',
	'del_alb' => 'Esborra àlbum',
	'del_user' => 'Esborra usuari',
	'err_unknown_user' => 'L\'usuari seleccionat no existeix!',
	'comment_deleted' => 'El comentari ha estat esborrat',
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
	'confirm_del' => 'Esteu segur de voler ESBORRAR aquest fitxer? \\nEls comentaris també seran esborrats.',
	'del_pic' => 'ESBORRA AQUESTA IMATGE',
	'size' => '%s x %s píxels',
	'views' => '%s vegades',
	'slideshow' => 'Projecció de diapositives',
	'stop_slideshow' => 'ATURA PROJECCIÓ',
	'view_fs' => 'Premeu aquí per a veure la imatge a mida completa',
	'edit_pic' => 'Edita descripció',
	'crop_pic' => 'Escapça i gira',
);

$lang_picinfo = array(
	'title' =>'Informació del fitxer',
	'Filename' => 'Nom del fitxer',
	'Album name' => 'Nom de l\'àlbum',
	'Rating' => 'Valoració (%s vots)',
	'Keywords' => 'Paraules clau',
	'File Size' => 'Mida del fitxer',
	'Dimensions' => 'Dimensions',
	'Displayed' => 'S\'ha vist',
	'Camera' => 'Càmera',
	'Date taken' => 'Data de la captura',
	'Aperture' => 'Obertura',
	'Exposure time' => 'Temps d\'exposició',
	'Focal length' => 'Longitud del focus',
	'Comment' => 'Comentari',
    'addFav' => 'Afegeix a Favorits',
    'addFavPhrase' => 'Favorits',
    'remFav' => 'Lleva de Favorits',
	'iptcTitle'=>'Títol IPTC',
	'iptcCopyright'=>'Copyright IPTC',
	'iptcKeywords'=>'Paraules clau IPTC',
	'iptcCategory'=>'Categoria IPTC',
	'iptcSubCategories'=>'Sub Categories IPTC',
);

$lang_display_comments = array(
	'OK' => 'D\'acord',
	'edit_title' => 'Edita aquest comentari',
	'confirm_delete' => 'Esteu segur de voler esborrar aquest comentari?',
	'add_your_comment' => 'Afegiu el vostre comentari',
    'name'=>'Nom',
    'comment'=>'Comentari',
	'your_name' => 'Anònim',
);

$lang_fullsize_popup = array(
        'click_to_close' => 'Premeu la imatge per a tancar aquesta finestra',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
	'title' => 'Envieu una postal',
	'invalid_email' => '<b>Atenció</b>: adreça electrònica incorrecta!',
	'ecard_title' => 'Una postal de %s per a tu',
	'error_not_image' => 'Només podeu enviar postals amb imatges.',
	'view_ecard' => 'Si la imatge no es veu correctament, premeu en aquest enllaç',
	'view_more_pics' => 'Premeu aquest enllaç per a veure més imatges!',
	'send_success' => 'La postal ha estat enviada',
	'send_failed' => 'Disculpeu però el servidor no pot enviar la vostra postal...',
	'from' => 'De',
	'your_name' => 'El vostre nom',
	'your_email' => 'La vostra adreça electrònica',
	'to' => 'A',
	'rcpt_name' => 'Nom del destinatari',
	'rcpt_email' => 'Adreça electrònica del destinatari',
	'greetings' => 'Títol del missatge',
	'message' => 'Missatge',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
	'pic_info' => 'Informació',
	'album' => 'Àlbum',
	'title' => 'Títol',
	'desc' => 'Descripció',
	'keywords' => 'Paraules Clau',
	'pic_info_str' => '%s &times; %s - %s KB - vist %s vegades - %s vots',
	'approve' => 'Aprova el fitxer',
	'postpone_app' => 'Posposa l\'aprovament',
	'del_pic' => 'Esborra fitxer',
	'read_exif' => 'Torna a llegir informació EXIF', 
	'reset_view_count' => 'Posa a zero el comptador de visualitzacions',
	'reset_votes' => 'Posar a zero els vots',
	'del_comm' => 'Esborra comentaris',
	'upl_approval' => 'Aprova fitxers penjats',
	'edit_pics' => 'Edita fitxers',
	'see_next' => 'Veure fitxers següents',
	'see_prev' => 'Veure fitxers anteriors',
	'n_pic' => '%s fitxers',
	'n_of_pic_to_disp' => 'Nombre de fitxers a mostrar',
	'apply' => 'Aplica els canvis',
	'crop_title' => 'Editor d\'Imatges de Coppermine',
	'preview' => 'Visualització prèvia',
	'save' => 'Desa imatge',
	'save_thumb' =>'Desa com miniatura',
	'sel_on_img' =>'La selecció ha d\\\'estar per complet en la imatge!', //js-alert 
);

// ------------------------------------------------------------------------- //
// File faq.php 
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Preguntes Més Freqüents', 
  'toc' => 'Taula de continguts', 
  'question' => 'Pregunta: ', 
  'answer' => 'Resposta: ', 
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'PMF General',
  array('Perquè deuria registrar-me?', 'El registre pot o no ser requerit per l\'administrador. El registre facilita característiques addicionals tals com poder afegir fitxers, tenir una llista de favorits, puntuar imatges, afegir comentaris, enviar postals, etc.', 'allow_user_registration', '0'), 
  array('Com puc registrar-me?', 'Premeu en &quot;Registreu-vos&quot; i empleneu tots els camps requerits (i els opcionals si voleu també).<br />Si l\'administrador té activada la validació per correu electrònic, després de completar i enviar les dades rebreu un missatge en l\'adreça que heu indicat durant el registre, en el qual s\'explica com activar el vostre compte (sols prement un enllaç). Fins que no activeu el compte no podreu validar-vos com usuari registrat.', 'allow_user_registration', '1'),
  array('Com puc entrar al sistema (fer login)?', 'Premeu en &quot;Entreu&quot;, empleneu el vostre nom d\'usuari i contrasenya, i marqueu &quot;Recordar-me&quot; amb això aconseguiu estar validat la pròxima vegada que ens visiteu.<br /><b>IMPORTANT: Les galetes deuen estar activades en el navegador i la galeta d\'aquest lloc no deu ser esborrada si voleu que funcioni l\'opció &quot;Recordar-me&quot;.</b>', 'offline', 0),
  array('Perquè no puc entrar (fer login)?', 'Vos heu registrat i premut en l\'enllaç del correu electrònic de confirmació que vos va ser enviat? Això deuria haver activat el vostre compte. Si no és així, contacteu amb l\'administrador del sistema.', 'offline', 0), 
  array('Què passa si oblido la meva contrasenya?', 'Si aquesta web té una opció &quot;Heu oblidat la vostra contrasenya&quot;, useu-la. Haureu d\'accedir a la recuperació de la mateixa. Si no, haureu de contactar amb l\'administrador perquè vos crei una nova contrasenya.', 'offline', 0), 
  //array('Què passa si he canviat la meva adreça de correu electrònic?', 'Simplement entreu al sistema (feu login) i canvieu la vostra adreça de correu electrònic des de &quot;El vostre Perfil&quot;', 'offline', 0),
  array('Com puc guardar una imatge en &quot;Els meus favorits&quot;?', 'Premeu primer en la imatge i després la icona de &quot;Mostra informació del fitxer&quot; (<img src="images/info.gif" width="16" height="16" border="0" alt="Mostra informació del fitxer" />); baixeu fins on ha aparegut aquesta informació i premeu en &quot;Afegeix a Favorits&quot;.<br />L\'administrador podria tenir activada la opció &quot;Mostra informació del fitxer&quot; per defecte.<br />IMPORTANT: Les galetes deuen estar activades en el navegador i la galeta d\'aquesta web no deu ser esborrada.', 'offline', 0), 
  array('Com puc valorar una imatge?', 'Premeu en la miniatura de la imatge, mireu sota ella i elegiu la puntuació.', 'offline', 0), 
  array('Com puc enviar un comentari d\'una imatge?', 'Premeu en la miniatura de la imatge i mireu sota ella. Aquí podreu inserir el vostre comentari.', 'offline', 0), 
array('Com puc afegir una imatge?', 'Premeu en &quot;Insereix fitxer&quot; i elegiu l\'àlbum en el qual voleu afegir la imatge, premeu &quot;Navega&quot; i elegiu la imatge que voleu del vostre disc dur, premeu el botó &quot;Obri&quot; (afegiu títol i descripció si voleu), premeu finalment en &quot;Tramet&quot;', 'allow_private_albums', 0),
  array('On puc afegir una imatge?', 'Podeu afegir una imatge a un dels vostres àlbums en &quot;La meva galeria&quot;. L\'Administrador pot haver permès també l\'afegir imatges en un o més dels àlbums de la Galeria principal.', 'allow_private_albums', 0),
  array('Quins tipus i grandàries d\'imatges puc afegir?', 'Els tipus (jpg, png, etc.) i mides les decideix l\'administrador.', 'offline', 0), 
  array('Què és &quot;La meva galeria&quot;?', '&quot;La meva galeria&quot; és una galeria personal en la qual l\'usuari pot afegir nous fitxers, així com configurar-la.', 'allow_private_albums', 0), 
  array('Com puc crear, tornar a anomenar o esborrar un àlbum en &quot;La meva galeria&quot;?', 'Heu d\'entrar al &quot;Mode Administrador&quot;<br />Premeu en &quot;Crea/Ordena els meus àlbums&quot; i premeu &quot;Nou&quot;. Canvieu &quot;Nou Àlbum&quot; pel nom que vulgueu.<br />Podeu també tornar a anomenar qualsevol dels àlbums de la vostra galeria.<br />Premeu &quot;Aplica Modificacions&quot;.', 'allow_private_albums', 0), 
  array('Com puc modificar i restringir a altres usuaris de veure els meus àlbums?', 'Heu d\'entrar al &quot;Mode Administrador&quot;<br />Premeu en &quot;Modificar els meus àlbums&quot;. Premeu en la barra &quot;Actualitza Àlbum&quot;, elegiu l\'àlbum que voleu canviar.<br />Des d\'aquí podeu canviar el nom, descripció, miniatures de les imatges, i restringir qui pot veure o posar comentaris en l\'àlbum.<br />Premeu &quot;Actualitza Àlbum&quot;.', 'allow_private_albums', 0),
  array('Com puc veure galeries d\'altres usuaris?', 'Premeu en &quot;Llista d\'Àlbums&quot; i seleccioneu &quot;Galeries dels Usuaris&quot;.', 'allow_private_albums', 0),
  array('Què són les galetes?', 'Les galetes (cookies) són uns petits textos que s\'envien des de la web i s\'emmagatzemen al vostre ordinador.<br />Normalment les galetes serveixen per a "recordar" a l\'usuari quan aquest torni de nou, i per a altres usos diversos.', 'offline', 0),
  array('On puc aconseguir aquest programa per a posar-lo en la meva web?', 'Coppermine és una Galeria Multimèdia gratuïta, publicada sota llicència GNU GPL. Està repleta de característiques i ha estat adaptada a distintes plataformes i sistemes de contingut. Visiteu la <a href="http://coppermine.sf.net/">pàgina de Coppermine</a> per a saber més i poder descarregar el programa.', 'offline', 0), 

  'Navegant per la galeria',
  array('Què és la &quot;Llista d\'Àlbums&quot;?', 'Des d\'aquí podeu veure la galeria completa, amb un enllaç a cada categoria. Les miniatures poden ser enllaços directes a les categories.', 'offline', 0), 
  array('Què és &quot;La meva Galeria&quot;?', 'Aquesta característica permet a l\'usuari crear la seva pròpia galeria i afegir, esborrar o modificar àlbums així com afegir nous fitxers en ells.', 'allow_private_albums', 0), 
  array('Quines són les diferència entre &quot;Mode Administrador&quot; i &quot;Mode Usuari&quot;?', 'Quan s\'està en mode administrador, l\'usuari pot modificar la seva galeria (així com unes altres si l\'hi ha permès l\'administrador).', 'allow_private_albums', 0), 
  array('Què és &quot;Insereix Fitexer&quot;?', 'Aquesta característica permet a l\'usuari afegir una imatge (mida i tipus definits per l\'administrador) en una galeria seleccionada per l\'usuari o bé per l\'administrador.', 'allow_private_albums', 0), 
  array('Què és &quot;Últims fitexers&quot;?', 'Mostra els últims fitxers / imatges afegits a la galeria.', 'offline', 0), 
  array('Què és &quot;Últims comentaris&quot;?', 'Mostra els últims comentaris afegits pels usuaris, juntament amb les imatges comentades.', 'offline', 0),
  array('Què és &quot;Més vists&quot;?', 'Mostra els fitxers més vists per tots els usuaris (registrats i visitants).', 'offline', 0), 
  array('Què és &quot;Més valorats&quot;?', 'Mostra les imatges millor valorades pels usuaris, juntament amb la mitjana de puntuació (per exemple: cinc usuaris han donat un <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: el fitxer tindrà una puntuació mitja de <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;si cinc usuaris han puntuat de 1 a 5 (1,2,3,4,5) la mitjana resultant serà <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />Les puntuacions van des de <img src="images/rating5.gif" width="65" height="14" border="0" alt="Excel·lent" /> (excel·lent) fins a <img src="images/rating0.gif" width="65" height="14" border="0" alt="Dolent" /> (dolent).', 'offline', 0),
  array('Què és &quot;Els meus favorits&quot;?', 'Aquesta característica permet a un usuari guardar una imatge favorita en la galeta que és enviada al seu ordinador.', 'offline', 0),
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php 
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Recuperació de contrasenya',
  'err_already_logged_in' => 'Ja esteu identificat!',
  'enter_username_email' => 'Inseriu el vostre nom d\'usuari o adreça de correu electrònic',
  'submit' => 'endavant',
  'failed_sending_email' => 'El correu de recuperació de contrasenya no pot ser enviat!',
  'email_sent' => 'Un correu electrònic amb el vostre nom d\'usuari i contrasenya ha estat enviat a %s',
  'err_unk_user' => 'L\'usuari seleccionat no existeix!', 
  'passwd_reminder_subject' => '%s - Recuperació de contrasenya',
  'passwd_reminder_body' => 'Heu demanat que se vos recordin les vostres dades d\'entrada:
Nom d\'usuari: %s
Contrasenya: %s
Premeu %s per a entrar (login).',
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
	'group_name' => 'Nom del grup',
	'disk_quota' => 'Quota de disc',
	'can_rate' => 'Poden valorar fitxers',
	'can_send_ecards' => 'Poden enviar postals',
	'can_post_com' => 'Poden afegir comentaris',
	'can_upload' => 'Poden afegir fitxers',
	'can_have_gallery' => 'Poden tenir galeries personals',
	'apply' => 'Valida els canvis',
	'create_new_group' => 'Crea nou grup',
	'del_groups' => 'Esborra el(s) grup(s) seleccionat(s)',
	'confirm_del' => 'Atenció, quan esborreu un grup, els usuaris que pertanyen a aquest grup són transferits al grup \'Registered\'!\n\nVoleu continuar?',
	'title' => 'Configura grups d\'usuaris',
	'approval_1' => 'Aprovació fitxers penjats públics (1)',
	'approval_2' => 'Aprovació fitxers penjats privats (2)',
	'upload_form_config' => 'Configuració del formulari de pujada', 
	'upload_form_config_values' => array( 'Només pujades d\'un sol fitxer', 'Només pujades de multiples fitxers', 'Només pujades URI', 'Només pujades ZIP', 'Fitxer-URI', 'Fitxer-ZIP', 'URI-ZIP', 'Fitxers-URI-ZIP'), 
	'custom_user_upload'=>'Pot l\'usuari personalitzar el nombre de caixes de pujada?', 
	'num_file_upload'=>'Nombre màxim/exacte de caixes de pujada de fitxers', 
	'num_URI_upload'=>'Nombre màxim/exacte de caixes de pujada URI', 
	'note1' => '<b>(1)</b> Afegir fitxers en un àlbum públic requerirà aprovació dels administradors',
	'note2' => '<b>(2)</b> Afegir fitxers en un àlbum que pertany a l\'usuari requerirà aprovació dels administradors',
	'notes' => 'Notes'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
	'welcome' => 'Benvingut/da!'
);

$lang_album_admin_menu = array(
	'confirm_delete' => 'Esteu segur de voler ESBORRAR aquest àlbum? \\nTotes les imatges i comentaris seran també esborrats.',
	'delete' => 'ESBORRA',
	'modify' => 'MODIFICA',
	'edit_pics' => 'EDITA IMATGES',
);

$lang_list_categories = array(
	'home' => 'Inici',
	'stat1' => '<b>[pictures]</b> fitxers en <b>[albums]</b> àlbums i <b>[cat]</b> categories amb <b>[comments]</b> comentaris, vists <b>[views]</b> vegades',
	'stat2' => '<b>[pictures]</b> fitxers en <b>[albums]</b> àlbums, vists <b>[views]</b> vegades',
	'xx_s_gallery' => 'Galeria de %s',
	'stat3' => '<b>[pictures]</b> fitxers en <b>[albums]</b> àlbums amb <b>[comments]</b> comentaris, vists <b>[views]</b> vegades'
);

$lang_list_users = array(
	'user_list' => 'Llista d\'usuaris',
	'no_user_gal' => 'No existeixen usuaris amb permisos per a tenir àlbums',
	'n_albums' => '%s àlbum(s)',
	'n_pics' => '%s fitxer(s)'
);

$lang_list_albums = array(
	'n_pictures' => '%s fitxers',
	'last_added' => ', últim afegit el %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
	'login' => 'Entreu',
	'enter_login_pswd' => 'Introduiu el vostre nom d\'usuari i contrasenya per a entrar',
	'username' => 'Nom d\'usuari',
	'password' => 'Contrasenya',
	'remember_me' => 'Recorda\'m',
	'welcome' => 'Benvingut/da %s ...',
	'err_login' => '*** Entrada incorrecta. Intenteu-ho de nou ***',
	'err_already_logged_in' => 'Ja esteu identificat!',
	'forgot_password_link' => 'He oblidat la meva contrasenya', 
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
	'logout' => 'Sortiu',
	'bye' => 'Fins un altra, %s ...',
	'err_not_loged_in' => 'No estàs validat al sistema!',
);

// ------------------------------------------------------------------------- //
// File phpinfo.php 
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP info', 
  'explanation' => 'Aquesta és la sortida generada per la funció PHP <a href="http://www.php.net/phpinfo">phpinfo()</a>, mostrada dintre de Copermine (retallant la sortida).', 
  'no_link' => 'Deixar que altres vegin el vostre phpinfo pot ser arriscat, per això aquesta pàgina només és visible quan esteu identificat com a administrador. No podeu enviar un enllaç a aqueta pàgina per a terceres persones, se\'ls denegarà l\'accés.', 
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
	'upd_alb_n' => 'Modifica àlbum %s',
	'general_settings' => 'Paràmetres generals',
	'alb_title' => 'Títol de l\'àlbum',
	'alb_cat' => 'Categoría de l\'àlbum',
	'alb_desc' => 'Descripció de l\'àlbum',
	'alb_thumb' => 'Miniatura de l\'àlbum',
	'alb_perm' => 'Permisos per a aquest àlbum',
	'can_view' => 'Aquest àlbum pot ser vist per',
	'can_upload' => 'Els visitants poden afegir imatges',
	'can_post_comments' => 'Els visitants poden afegir comentaris',
	'can_rate' => 'Els visitants poden valorar les imatges',
	'user_gal' => 'Galeria d\'usuari',
	'no_cat' => '* Sense categoria *',
	'alb_empty' => 'L\'àlbum està buit',
	'last_uploaded' => 'Últim afegit',
	'public_alb' => 'Tothom (àlbum públic)',
	'me_only' => 'Només jo',
	'owner_only' => 'Només l\'amo de l\'àlbum (%s)',
	'groupp_only' => 'Membres del grup \'%s\'',
	'err_no_alb_to_modify' => 'No podeu modificar cap àlbum a la base de dades.',
	'update' => 'Actualitza àlbum',
	'notice1' => '(*) depenent dels paràmetres de %sgrups%s',
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
	'already_rated' => 'Perdoneu però ja heu votat anteriorment per aquest fitxer',
	'rate_ok' => 'El vostre vot ha estat comptabilitzat',
	'forbidden' => 'No podeu votar per els vostres propis fitxers.', 
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
A pesar que els administradors de {SITENAME} intentaran eliminar o editar qualsevol material desagradable tan aviat com puguin, resulta impossible revisar tots els enviaments que es realitzen. Per tant heu de tenir en compte que tots els enviaments fets a aquesta web expressen el punt de vista i opinions dels seus autors i no el dels administradors o webmasters (excepte els afegits per ells mateixos).<br />
<br />
Esteu d'acord en no afegir cap material abusiu, obscè, vulgar, escandalós, odiós, amenaçador, d'orientació sexual, o cap altre que pugui violar qualsevol llei aplicable. Esteu d'acord amb que el webmaster, l'administrador i els assessors de { SITENAME } tenen el dret de llevar o de corregir qualsevol contingut en qualsevol moment si el consideren necessari. Com usuari, accediu a que qualsevol informació que afegiu sigui emmagatzemada en una base de dades. Tan mateix, aquesta informació no serà divulgada a tercers sense el seu consentiment. El webmaster i l'administrador no es poden fer responsables de cap intent de destrucció de la base de dades que pugui conduir a la pèrdua de la mateixa.<br />
<br />
Aquest lloc utilitza galetes per a emmagatzemar la informació al vostre ordinador. Aquestes galetes serveixen per a millorar la navegació d'aquest lloc. L'adreça de correu electrònic s'usa només per a confirmar els seus detalls i contrasenya de registre.<br />
<br />
Prement <i>Estic d'acord</i> expresseu la vostra conformitat amb aquestes condicions.
EOT;

$lang_register_php = array(
	'page_title' => 'Registre de nou usuari',
	'term_cond' => 'Termes i condicions',
	'i_agree' => 'Estic d\'acord',
	'submit' => 'Enviar sol·licitud de registre',
	'err_user_exists' => 'El nom d\'usuari elegit ja existeix, per favor elegiu un altre diferent',
	'err_password_mismatch' => 'Les dues contrassenyes no són iguals, per favor torneu a introduir-les',
	'err_uname_short' => 'El nom d\'usuari deu ser de 2 caràcters de longitud com a mínim',
	'err_password_short' => 'La contrassenya deu ser de 2 caràcters de longitud com a mínim',
	'err_uname_pass_diff' => 'El nom d\'usuari i la contrassenya deuen ser diferents',
	'err_invalid_email' => 'L\'adreça electrònica no és vàlida',
	'err_duplicate_email' => 'Un altre usuari s\'ha registrat anteriorment amb l\'adreça de correu electrònic subministrada',
	'enter_info' => 'Introduiu la informació de registre',
	'required_info' => 'Informació requerida',
	'optional_info' => 'Informació opcional',
	'username' => 'Nom d\'usuari',
	'password' => 'Contrasenya',
	'password_again' => 'Reescriure contrasenya',
	'email' => 'Correu electrònic',
	'location' => 'Ubicació',
	'interests' => 'Interessos',
	'website' => 'Pàgina web',
	'occupation' => 'Ocupació',
	'error' => 'ERROR',
	'confirm_email_subject' => '%s - Confirmació de registre',
	'information' => 'Informació',
	'failed_sending_email' => 'El correu electrònic de confirmació de registre no pot ser enviat!',
	'thank_you' => 'Gràcies per registrar-vos.<br /><br />Hem enviat un correu electrònic amb informació sobre l\'activació del vostre compte a l\'adreça de correu que ens heu facilitat.',
	'acct_created' => 'El vostre compte d\'usuari ha estat creat i ara podeu accedir al sistema amb el vostre nom d\'usuari i contrasenya',
	'acct_active' => 'El vostre compte d\'usuari ja està activat i ara podeu accedir al sistema amb el vostre nom d\'usuari i contrasenya',
	'acct_already_act' => 'El vostre compte ja estava actiu!',
	'acct_act_failed' => 'Aquest compte no pot ser activat!',
	'err_unk_user' => 'L\'usuari seleccionat no existeix!',
	'x_s_profile' => 'Perfil de %s',
	'group' => 'Grup',
	'reg_date' => 'Data d\'alta',
	'disk_usage' => 'Ús de disc',
	'change_pass' => 'Canvia contrasenya',
	'current_pass' => 'Contrasenya actual',
	'new_pass' => 'Nova contrasenya',
	'new_pass_again' => 'Reescriure nova contrasenya',
	'err_curr_pass' => 'La contrasenya actual és incorrecta',
	'apply_modif' => 'Desa els canvis',
	'change_pass' => 'Canvia la meva contrasenya',
	'update_success' => 'El vostre perfil ha estat actualitzat',
	'pass_chg_success' => 'La vostra contrasenya ha estat canviada',
	'pass_chg_error' => 'La vostra contrassenya no ha estat canviada',
	'notify_admin_email_subject' => '%s - Notificació de registre',
	'notify_admin_email_body' => 'Un nou usuari amb el nom "%s" s\'ha registrat en la vostra galeria',
);

$lang_register_confirm_email = <<<EOT
Gràcies per registrar-vos a {SITE_NAME}

El vostre nom d'usuari és: "{USER_NAME}"
La vostra contrassenya és: "{PASSWORD}"

Per a acabar d'activar el vostre compte, heu de prémer sobre l'enllaç que
apareix sota o copiar-lo i pegar-lo al vostre navegador d'Internet.

{ACT_LINK}

Un salut,

Els administradors de {SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
	'title' => 'Revisa comentaris',
	'no_comment' => 'No existeixen comentaris que mostrar',
	'n_comm_del' => '%s comentari(s) esborrat(s)',
	'n_comm_disp' => 'Nombre de comentaris a mostrar',
	'see_prev' => 'Veure l\'anterior',
	'see_next' => 'Veure el següent',
	'del_comm' => 'Esborra comentaris seleccionats',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
	0 => 'Cercar en tota la galeria',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
	'page_title' => 'Cerca nous fitxers',
	'select_dir' => 'Seleccioneu directori',
	'select_dir_msg' => 'Aquesta funció vos permet afegir de forma automàtica els fitxers que hageu pujat al vostre servidor mitjançant FTP.<br /><br />Seleccioneu el directori on heu pujat els vostres fitxers',
	'no_pic_to_add' => 'No hi ha cap fitxer per a afegir',
	'need_one_album' => 'Necessiteu almenys un àlbum per a utilitzar aquesta funció',
	'warning' => 'Atenció',
	'change_perm' => 'Coppermine no pot escriure en aquest directori, necessiteu canviar els permisos a modes 755 o 777 abans d\'intentar-ho de nou!',
	'target_album' => '<b>Col·loca els fitxers del dierctori &quot;</b>%s<b>&quot; a l\'àlbum </b>%s',
	'folder' => 'Carpeta',
	'image' => 'fitxer',
	'album' => 'Àlbum',
	'result' => 'Resultat',
	'dir_ro' => 'No es pot escriure. ',
	'dir_cant_read' => 'No es pot llegir. ',
	'insert' => 'Afegint noves fitxers a la galeria',
	'list_new_pic' => 'Llistat de nous fitxers',
	'insert_selected' => 'Afegeix els fitxers seleccionades',
	'no_pic_found' => 'No s\'ha trobat cap fitxer nou',
	'be_patient' => 'Per favor, sigueu pacient, Coppermine necessita temps per a afegir els fitxers',
	'no_album' => 'Cap àlbum seleccionat', 
	'notes' =>  '<ul>'.
				'<li><b>OK</b> : significa que el fitxer ha estat afegit sense problemes'.
				'<li><b>DP</b> : significa que el fitxer és un duplicat i ja existeix a la base de dades'.
				'<li><b>PB</b> : significa que el fitxer no pot ser afegit, per favor comproveu la configaración i els permisos dels directoris on estan els fitxers'.
				'<li><b>NA</b> : significa que no heu seleccionat un àlbum on posar els fitxers, premeu \'<a href="javascript:history.back(1)">arrere</a>\' i seleccioneu un àlbum. Si no teniu un àlbum <a href="albmgr.php">creeu-ne un primer</a></li>'.
				'<li>Si les icones OK, DP, PB no apareixen, premeu sobre la icona d\'imatge no carregada per a veure l\'error produït per PHP'.
				'<li>Si el navegador excedeix el temps d\'espera (timeout), premeu la icona d\'actualitzar'.
				'</ul>', 
	'select_album' => 'selecciona àlbum',
	'check_all' => 'Activa Tots',
	'uncheck_all' => 'Desactiva Tots',
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
	'title' => 'Expulsa Usuaris',
	'user_name' => 'Nom d\'Usuari',
	'ip_address' => 'Adreça IP',
	'expiry' => 'Caduca (en blanc és permanent)',
	'edit_ban' => 'Desa Canvis',
	'delete_ban' => 'Esborra',
	'add_new' => 'Afegeix Nova Expulsió',
	'add_ban' => 'Afegeix',
	'error_user' => 'No es pot trobar l\'usuari',
	'error_specify' => 'Necessiteu especificar o un nom d\'usuari o una adreça IP', 
	'error_ban_id' => 'ID d\'expulsió invalida!', 
	'error_admin_ban' => 'No vos podeu expulsar a vosaltres mateixos!', 
	'error_server_ban' => 'Anàveu a expulsar al vostre propi servidor? Tsk tsk, no podeu fer això...',
	'error_ip_forbidden' => 'No podeu expulsar aquesta IP - no és pot encaminar (non-routable)!', 
	'lookup_ip' => 'Cerca una adreça IP', 
	'submit' => 'endavant!',
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
	'title' => 'Penja fitxer',
	'custom_title' => 'Formulari de sol·licitud personalitzat', 
	'cust_instr_1' => 'Podeu seleccionar un nombre personalitzat de quadres de pujada. Tanmateix, no podeu seleccionar-ne més dels límits llistats a sota.', 
	'cust_instr_2' => 'Nombre de quadres de sol·licitud', 
	'cust_instr_3' => 'Quadres de pujada de fitxer: %s', 
	'cust_instr_4' => 'Quadres de pujada URI/URL: %s', 
	'cust_instr_5' => 'Quadres de pujada URI/URL:', 
	'cust_instr_6' => 'Quadres de pujada de fitxer:', 
	'cust_instr_7' => 'Per favor inseriu el nombre de quadres de pujada de cada tipus que voleu actualment. Aleshores premeu \'Continua\'. ', 
	'reg_instr_1' => 'Acció invalida per a la creació del formulari.', 
	'reg_instr_2' => 'Ara podeu penjar els vostres fitxers fent servir els quadres de pujada de sota. La mida dels fitxers pujats al servidor no deuria excedir de %s KB cadascun. Els fitxers ZIP penjats en les seccions \'Pujades de fitxers\' i \'Pujades URI/URL\' restaran comprimits.', 
	'reg_instr_3' => 'Si voleu que el fitxer ZIP o arxiu sigui descomprimit, haureu d\'usar el quadre de pujada de fitxer proveït en l\'àrea \'Pujada ZIP descomprimida\'.', 
	'reg_instr_4' => 'Quan useu la secció de pujada URI/URL, per favor inseriu el camí al fitxer d\'aquesta manera: http://www.paginaweb.com/imatges/exemple.jpg', 
	'reg_instr_5' => 'Quan hageu completat el formulari, per favor premeu \'Continua\'.', 
	'reg_instr_6' => 'Pujades ZIP descomprimides:', 
	'reg_instr_7' => 'Pujades de fitxers:', 
	'reg_instr_8' => 'Pujades URI/URL:', 
	'error_report' => 'Informe d\'Error', 
	'error_instr' => 'S\'han trobat erros a les següents pujades:', 
	'file_name_url' => 'Nom/URL del fitxer', 
	'error_message' => 'Missatge d\'Error', 
	'no_post' => 'Fitxer no pujat per POST.', 
	'forb_ext' => 'Extensió de fitxer no permesa.', 
	'exc_php_ini' => 'Excedida la mida de fitxer permesa a php.ini.', 
	'exc_file_size' => 'Excedida la mida de fitxer permesa per Coppermine.', 
	'partial_upload' => 'Només una pujada parcial.', 
	'no_upload' => 'No s\'ha produït cap pujada.', 
	'unknown_code' => 'Codi d\'error de pujada de PHP desconegut.', 
	'no_temp_name' => 'Cap pujada - Cap nom temporal.', 
	'no_file_size' => 'No conté dades/Corrupte', 
	'impossible' => 'Impossible moure.', 
	'not_image' => 'No és una imatge/corrupte', 
	'not_GD' => 'Not és una extensió GD.', 
	'pixel_allowance' => 'Excedida assignació de píxel.', 
	'incorrect_prefix' => 'Prefixe URI/URL incorrecte', 
	'could_not_open_URI' => 'No s\'ha pogut obrir URI.', 
	'unsafe_URI' => 'No es pot verificar la seguretat.', 
	'meta_data_failure' => 'Fallada de dades Meta', 
	'http_401' => '401 No autoritzat', 
	'http_402' => '402 Requereix Pagament', 
	'http_403' => '403 Accés Prohibit', 
	'http_404' => '404 No s\'ha trobat', 
	'http_500' => '500 Error Intern del Servidor', 
	'http_503' => '503 Servei No Disponible', 
	'MIME_extraction_failure' => 'No es pot determinar MIME.', 
	'MIME_type_unknown' => 'Tipus MIME desconegut', 
	'cant_create_write' => 'No es pot crear fitxer d\'escriptura.', 
	'not_writable' => 'No es pot escriure al fitxer d\'escriptura.', 
	'cant_read_URI' => 'No es pot llegir URI/URL', 
	'cant_open_write_file' => 'No es pot obrir el fitxer d\'escriptura URI.', 
	'cant_write_write_file' => 'No es pot escriure al fitxer d\'escriptura URI.', 
	'cant_unzip' => 'No es pot descomprimir.', 
	'unknown' => 'Error desconegut', 
	'succ' => 'Pujades amb èxit', 
	'success' => '%s pujades amb èxit.', 
	'add' => 'Per favor premeu \'Continua\' per a afegir els fitxers als àlbums.', 
	'failure' => 'Pujada Fallida', 
	'f_info' => 'Informació del Fitxer', 
	'no_place' => 'No s\'ha pogut col·locar el fitxer anterior.', 
	'yes_place' => 'S\'ha col·locat amb èxit el fitxer anterior.', 
	'max_fsize' => 'La màxima mida de fitxer permesa és de %s KB',
	'album' => 'Àlbum',
	'picture' => 'Fitxer',
	'pic_title' => 'Títol del fitxer',
	'description' => 'Descripció del fitxer',
	'keywords' => 'Paraules clau (separades per espais)',
	'err_no_alb_uploadables' => 'Perdoneu però no hi ha cap àlbum on estigui permès inserir nous fitxers',
	'place_instr_1' => 'Per favor col·loqueu ara els fitxers als àlbums. Ara podeu inserir també informació d\'importància sobre cada fitxer.', 
	'place_instr_2' => 'Hi ha més fitxers per col·locar. Per favor premeu \'Continua\'.', 
	'process_complete' => 'Heu col·locat amb èxit tots els fitxers.', 
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
	'title' => 'Administra usuaris',
	'name_a' => 'Ascendent per nom',
	'name_d' => 'Descendent per nom',
	'group_a' => 'Ascendent per grup',
	'group_d' => 'Descendent per grup',
	'reg_a' => 'Ascendent per data d\'alta',
	'reg_d' => 'Descendent per data d\'alta',
	'pic_a' => 'Ascendent per total de fitxers',
	'pic_d' => 'Descendent per total de fitxers',
	'disku_a' => 'Ascendent per ús de disc',
	'disku_d' => 'Descendent per ús de disc',
	'lv_a' => 'Ascendent per última visita', 
	'lv_d' => 'Descendent per última visita', 
	'sort_by' => 'Ordena usuaris per',
	'err_no_users' => 'La taula d\'usuaris està buida!',
	'err_edit_self' => 'No podeu editar el vostre propi perfil, heu d\'usar l\'opció \'El meu perfil d\'usuari\' per a això',
	'edit' => 'EDITA',
	'delete' => 'ESBORRA',
	'name' => 'Nom d\'usuari',
	'group' => 'Grup',
	'inactive' => 'Inactiu',
	'operations' => 'Operacions',
	'pictures' => 'Fitxers',
	'disk_space' => 'Espai usat / Quota',
	'registered_on' => 'Registrat el dia',
	'last_visit' => 'Última Visita', 
	'u_user_on_p_pages' => '%d usuaris en %d pàgina(s)',
	'confirm_del' => 'Esteu segur de voler ESBORRAR aquest usuari? \\nTots els seus fitxers i àlbums seran esborrats també.',
	'mail' => 'CORREU',
	'err_unknown_user' => 'L\'usuari seleccionat no existeix!',
	'modify_user' => 'Modifica usuari',
	'notes' => 'Notes',
	'note_list' => '<li>Si no voleu canviar la contrassenya actual, deixeu el camp "contrasenya" buit',
	'password' => 'Contrasenya',
	'user_active' => 'L\'usuari està actiu',
	'user_group' => 'Grup d\'usuaris',
	'user_email' => 'Correu electrònic de l\'usuari',
	'user_web_site' => 'Pàgina web de l\'usuari',
	'create_new_user' => 'Crea nou usuari',
	'user_location' => 'Ubicació de l\'usuari',
	'user_interests' => 'Interessos de l\'usuari',
	'user_occupation' => 'Ocupació de l\'usuari',
	'latest_upload' => 'Pujades recents', 
	'never' => 'mai', 
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
        'title' => 'Eines (redimensiona imatges)',
        'what_it_does' => 'Què fa',
        'what_update_titles' => 'Actualitza els noms de fitxer',
        'what_delete_title' => 'Esborra els títols',
        'what_rebuild' => 'Torna a crear les miniatures i imatges redimensionades',
        'what_delete_originals' => 'Esborra les imatges originals reemplaçant-les amb les versions redimensionades',
        'file' => 'Fitxer',
        'title_set_to' => 'títol a posar',
        'submit_form' => 'envia',
        'updated_succesfully' => 'actualitzat amb èxit',
        'error_create' => 'ERROR al crear',
        'continue' => 'Processa més imatges',
        'main_success' => 'El fitxer %s ha estat usat com a fitxer principal amb èxit',
        'error_rename' => 'Error reanomenant %s a %s',
        'error_not_found' => 'No es troba el fitxer %s',
        'back' => 'torna a l\'inici',
        'thumbs_wait' => 'Actualitzant miniatures i/o imatges redimensionades, per favor espereu...',
        'thumbs_continue_wait' => 'Continuant l\'actualització de miniatures i/o imatges redimensionades...',
        'titles_wait' => 'Actualitzant títols, per favor espereu...',
        'delete_wait' => 'Esborrant títols, per favor espereu...',
        'replace_wait' => 'Esborrant originals i reemplaçant-los amb les imatges redimensionades, per favor espereu...',
        'instruction' => 'Instruccions ràpides',
        'instruction_action' => 'Seleciona acció',
        'instruction_parameter' => 'Posa paràmetres',
        'instruction_album' => 'Selecciona àlbum',
        'instruction_press' => 'Premeu %s',
        'update' => 'Actualitza miniatures i/o imatges redimensionades',
        'update_what' => 'Què deu ser actualitzat',
        'update_thumb' => 'Només miniatures',
        'update_pic' => 'Només imatges redimensionades',
        'update_both' => 'Miniatures i imatges redimensionades (ambdós)',
        'update_number' => 'Nombre d\'imatges processades per cada clic',
        'update_option' => '(Si experimenteu problemes de temps d\'espera (timeout) proveu a posar un nombre menor)',
        'filename_title' => 'Fitxer &rArr; Títol de fitxer',
        'filename_how' => 'Com s\'hauria de modificar el nom del fitxer',
        'filename_remove' => 'Lleva .jpg del final i reemplaça _ (barra baixa) amb espais',
        'filename_euro' => 'Canvia 2003_11_23_13_20_20.jpg a 23/11/2003 13:20',
        'filename_us' => 'Canvia 2003_11_23_13_20_20.jpg a 11/23/2003 13:20',
        'filename_time' => 'Canvia 2003_11_23_13_20_20.jpg a 13:20',
        'delete' => 'Esborra els títols de fitxer o imatges de grandària original',
        'delete_title' => 'Esborrar títols de fitxer',
        'delete_original' => 'Esborra imatges de grandària original',
        'delete_replace' => 'Esborra les imatges originals, reemplaçant-les amb unes altres de grandària nova',
        'select_album' => 'Selecciona àlbum',
		'delete_orphans' => 'Esborra els comentaris orfes (funciona en tots els àlbums)', 
		'orphan_comment' => 'Trobats comentaris orfes', 
		'delete' => 'Esborra', 
		'delete_all' => 'Esborra tot', 
		'comment' => 'Comentari: ', 
		'nonexist' => 'fitxer adjunt no existent # ', 
		'phpinfo' => 'Mostra phpinfo', 
		'update_db' => 'Actualitza base de dades', 
		'update_db_explanation' => 'Si heu reemplaçat fitxers de coppermine, afegit una modificació o actualitzat des d\'una versió anterior de coppermine, assegureu-vos d\'executar l\'actualització (update) de la base de dades un cop. Això crearà les taules necessàries i/o valors de configuració a la vostra base de dades de coppermine.', 
);

?>
