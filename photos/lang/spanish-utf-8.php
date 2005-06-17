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
// CVS version: $Id: spanish-utf-8.php,v 1.6 2004/07/24 15:04:07 gaugau Exp $
// ------------------------------------------------------------------------- //

// info about translators and translated language
$lang_translation_info = array(
'lang_name_english' => 'Spanish',  
'lang_name_native' => 'EspaÃ±ol',
'lang_country_code' => 'es', 
'trans_name'=> 'Daniel Villoldo (Grumpywolf)', //the name of the translator - can be a nickname
'trans_email' => 'daniel@grumpywolf.net', //translator's email address (optional)
'trans_website' => 'http://grumpywolf.net/', //translator's website (optional)
'trans_date' => '2004-03-22', //the date the translation was created / last modified
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab');
$lang_month = array('Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic');

// Some common strings
$lang_yes = 'Si';
$lang_no  = 'No';
$lang_back = 'ATRÃS';
$lang_continue = 'CONTINUAR';
$lang_info = 'InformaciÃ³n';
$lang_error = 'Error';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%d de %B de %Y';
$lastcom_date_fmt =  '%d/%m/%y a las %H:%M';
$lastup_date_fmt = '%d de %B de %Y';
$register_date_fmt = '%d de %B de %Y';
$lasthit_date_fmt = '%d de %B de %Y a las %I:%M %p';
$comment_date_fmt =  '%d de %B de %Y a las %I:%M %p';

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
	'random' => 'ImÃ¡genes Al azar',
	'lastup' => 'Ãšltimas imÃ¡genes',
	'lastalb'=> 'Ãšltimos albums modificados',
	'lastcom' => 'Ãšltimos comentarios',
	'topn' => 'MÃ¡s vistas',
	'toprated' => 'MÃ¡s valoradas',
	'lasthits' => 'Ãšltimas vistas',
	'search' => 'Resultado de la bÃºsqueda',
	'favpics'=> 'Favoritos'
);

$lang_errors = array(
	'access_denied' => 'No tienes permisos para acceder a esta pÃ¡gina.',
	'perm_denied' => 'No tienes permisos para realizar esta operaciÃ³n.',
	'param_missing' => 'Llamada a Script sin los parÃ¡metros requeridos.',
	'non_exist_ap' => 'Â¡El album/fichero seleccionado no existe!',
	'quota_exceeded' => 'Cuota de disco excedida<br /><br />Tienes una cuota de disco de [quota]K, tus archivos actualmente ocupan [space]K, y aÃ±adiendo este archivo excederÃ­as la cuota.',
	'gd_file_type_err' => 'Cuando se usa la librerÃ­a de imagen GD solamente estÃ¡n permitidos los tipos JPEG y PNG.',
	'invalid_image' => 'La imagen que has aÃ±adido estÃ¡ corrupta o no puede ser tratada por la librerÃ­a GD.',
	'resize_failed' => 'Incapaz de crear thumbnail o imagen de tamaÃ±o reducido.',
	'no_img_to_display' => 'Ninguna imagen que enseÃ±ar.',
	'non_exist_cat' => 'La categorÃ­a seleccionada no existe.',
	'orphan_cat' => 'Una categorÃ­a no tiene padre, ejecuta la utilidad de categorÃ­as para corregir el problema.',
	'directory_ro' => 'El directorio \'%s\' no tiene permisos de escritura, los archivos no pueden ser borrados.',
	'non_exist_comment' => 'El comentario seleccionado no existe.',
	'pic_in_invalid_album' => 'Â¿Â¡El archivo estÃ¡ en un album que no existe (%s)!?',
	'banned' => 'Actualmente estÃ¡s expulsado respecto al uso de esta web.',
	'not_with_udb' => 'Esta funciÃ³n estÃ¡ desactivada en Coppermine porque estÃ¡ integrada con un software de foros. Lo que fuese que estÃ¡s intentando hacer no estÃ¡ soportado en esta configuraciÃ³n, o la funciÃ³n debe ser manejada por el software de foros.',
	'offline_title' => 'Desactivada', //cpg1.3.0
	'offline_text' => 'La galerÃ­a estÃ¡ actualmente desactivada, por poco tiempo - Â¡vuelve pronto!', //cpg1.3.0
	'ecards_empty' => 'Actualmente no hay registro de postales para mostrar. Â¡Chequea que has activado guardar las postales en la configuraciÃ³n!', //cpg1.3.0
	'action_failed' => 'AcciÃ³n no realizada.  Coppermine no es capaz de procesar tu peticiÃ³n.', //cpg1.3.0
	'no_zip' => 'Las librerÃ­as necesarias para procesar ficheros ZIP no estÃ¡n disponibles. Contacta con el administrador de este Ã¡lbum.', //cpg1.3.0
	'zip_type' => 'No tienes permisos para aÃ±adir ficheros ZIP.', //cpg1.3.0
);

$lang_bbcode_help = 'Los siguientes cÃ³digos te pueden ser de utilidad: <li>[b]<b>Negrita</b>[/b]</li> <li>[i]<i>ItÃ¡lica</i>[/i]</li> <li>[url=http://tusitio.com/]Texto de Web[/url]</li> <li>[email]usuario@dominio.com[/email]</li>'; //cpg1.3.0

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
	'alb_list_title' => 'Ir a la lista de albums',
	'alb_list_lnk' => 'Lista de albums',
	'my_gal_title' => 'Ir a mi galerÃ­a personal',
	'my_gal_lnk' => 'Mi galerÃ­a',
	'my_prof_lnk' => 'Mi perfil de usuario',
	'adm_mode_title' => 'Ir a modo administrador',
	'adm_mode_lnk' => 'Modo administrador',
	'usr_mode_title' => 'Ir a modo usuario',
	'usr_mode_lnk' => 'Modo usuario',
	'upload_pic_title' => 'AÃ±adir archivo en un album',
	'upload_pic_lnk' => 'AÃ±adir fichero',
	'register_title' => 'Crear un usuario',
	'register_lnk' => 'Registrarse',
	'login_lnk' => 'Login',
	'logout_lnk' => 'Logout',
	'lastup_lnk' => 'Ãšltimos archivos',
	'lastcom_lnk' => 'Ãšltimos comentarios',
	'topn_lnk' => 'MÃ¡s vistos',
	'toprated_lnk' => 'MÃ¡s valorados',
	'search_lnk' => 'Buscar',
	'fav_lnk' => 'Mis favoritos',
	'memberlist_title' => 'Mostrar lista de miembros', //cpg1.3.0
	'memberlist_lnk' => 'Lista de miembros', //cpg1.3.0
	'faq_title' => 'Preguntas frecuentes sobre la galerÃ­a de imÃ¡genes &quot;Coppermine&quot;', //cpg1.3.0
	'faq_lnk' => 'FAQ', //cpg1.3.0
);

$lang_gallery_admin_menu = array(
	'upl_app_lnk' => 'Aprobar uploads',
	'config_lnk' => 'Config',
	'albums_lnk' => 'Albums',
	'categories_lnk' => 'CategorÃ­as',
	'users_lnk' => 'Usuarios',
	'groups_lnk' => 'Grupos',
	'comments_lnk' => 'Comentarios',
	'searchnew_lnk' => 'AÃ±adir ficheros (Batch)',
	'util_lnk' => 'Admin Tools',
	'ban_lnk' => 'Expulsar usuarios',
	'db_ecard_lnk' => 'Mostrar postales', //cpg1.3.0
);

$lang_user_admin_menu = array(
	'albmgr_lnk' => 'Crear / ordenar albums',
	'modifyalb_lnk' => 'Modificar mis albums',
	'my_prof_lnk' => 'Mi perfil',
);

$lang_cat_list = array(
	'category' => 'CategorÃ­a',
	'albums' => 'Albums',
	'pictures' => 'Ficheros',
);

$lang_album_list = array(
	'album_on_page' => '%d albums en %d pÃ¡gina(s)'
);

$lang_thumb_view = array(
	'date' => 'FECHA',
	//Sort by filename and title
	'name' => 'NOMBRE',
	'title' => 'TÃTULO',
	'sort_da' => 'Ordenado por fecha ascendente',
	'sort_dd' => 'Ordenado por fecha descendente',
	'sort_na' => 'Ordenado por nombre ascendente',
	'sort_nd' => 'Ordenado por nombre descendente',
	'sort_ta' => 'Ordenado por tÃ­tulo ascendente',
	'sort_td' => 'Ordenado por tÃ­tulo descendente',
	'download_zip' => 'Descargar como fichero Zip', //cpg1.3.0
	'pic_on_page' => '%d archivos en %d pÃ¡gina(s)',
	'user_on_page' => '%d usuarios en %d pÃ¡gina(s)',
);

$lang_img_nav_bar = array(
	'thumb_title' => 'Volver al Ã­ndice del album',
	'pic_info_title' => 'Mostrar/ocultar informaciÃ³n del fichero',
	'slideshow_title' => 'Slideshow',
	'ecard_title' => 'Enviar una postal con esta imagen',
	'ecard_disabled' => 'Envio de postales deshabilitado',
	'ecard_disabled_msg' => 'No tienes permisos para enviar postales',
	'prev_title' => 'Ver fichero anterior',
	'next_title' => 'Ver fichero siguiente',
	'pic_pos' => 'FICHERO %s/%s',
);

$lang_rate_pic = array(
	'rate_this_pic' => 'Valorar este archivo ',
	'no_votes' => '(No hay votos)',
	'rating' => '(valoraciÃ³n actual : %s / 5 con %s votos)',
	'rubbish' => 'Malo',
	'poor' => 'Regular',
	'fair' => 'Normal',
	'good' => 'Bueno',
	'excellent' => 'Excelente',
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
	CRITICAL_ERROR => 'Error crÃ­tico',
	'file' => 'Fichero: ',
	'line' => 'LÃ­nea: ',
);

$lang_display_thumbnails = array(
	'filename' => 'Fichero: ',
	'filesize' => 'TamaÃ±o: ',
	'dimensions' => 'Dimensiones: ',
	'date_added' => 'Fecha de alta: ',
);

$lang_get_pic_data = array(
	'n_comments' => '%s comentarios',
	'n_views' => '%s veces vista',
	'n_votes' => '(%s votos)'
);

$lang_cpg_debug_output = array(
  'debug_info' => 'InformaciÃ³n de Debug', //cpg1.3.0
  'select_all' => 'Seleccionar Todo', //cpg1.3.0
  'copy_and_paste_instructions' => 'Si vas a pedir ayuda en el foro de soporte de coppermine, copia y pega esta informaciÃ³n de debug en tu mensaje. AsegÃºrate de reemplazar cualquier contraseÃ±a de la consulta con *** (asteriscos) antes de enviarlo.', //cpg1.3.0
  'phpinfo' => 'mostrar phpinfo', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => 'Lenguaje por defecto', //cpg1.3.0
  'choose_language' => 'Elije tu lenguaje', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'Tema por defecto', //cpg1.3.0
  'choose_theme' => 'Elige tu tema (aspecto)', //cpg1.3.0
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
	'Exclamation' => 'Exclamation',
	'Question' => 'Question',
	'Very Happy' => 'Very Happy',
	'Smile' => 'Smile',
	'Sad' => 'Sad',
	'Surprised' => 'Surprised',
	'Shocked' => 'Shocked',
	'Confused' => 'Confused',
	'Cool' => 'Cool',
	'Laughing' => 'Laughing',
	'Mad' => 'Mad',
	'Razz' => 'Razz',
	'Embarassed' => 'Embarassed',
	'Crying or Very sad' => 'Crying or Very sad',
	'Evil or Very Mad' => 'Evil or Very Mad',
	'Twisted Evil' => 'Twisted Evil',
	'Rolling Eyes' => 'Rolling Eyes',
	'Wink' => 'Wink',
	'Idea' => 'Idea',
	'Arrow' => 'Arrow',
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
	0 => 'Saliendo de modo administrador...',
	1 => 'Entrando en modo administrador...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
	'alb_need_name' => 'Â¡Los albums deben tener un nombre!', //js-alert
	'confirm_modifs' => 'Â¿EstÃ¡s seguro de querer aplicar las modificaciones?', //js-alert
	'no_change' => 'Â¡No se hizo ningÃºn cambio!', //js-alert
	'new_album' => 'Nuevo Ã¡lbum',
	'confirm_delete1' => 'Â¿EstÃ¡s seguro de querer borrar este Ã¡lbum?', //js-alert
	'confirm_delete2' => '\nÂ¡Todos las archivos y comentarios que contiene se perderÃ¡n!', //js-alert
	'select_first' => 'Selecciona un Ã¡lbum primero',
	'alb_mrg' => 'Administrador de Albums',
	'my_gallery' => '* Mi galerÃ­a *',
	'no_category' => '* Sin categorÃ­a *',
	'delete' => 'Borrar',
	'new' => 'Nuevo',
	'apply_modifs' => 'Aplicar modificaciones',
	'select_category' => 'Seleccionar categorÃ­a',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
	'miss_param' => 'Â¡Los parÃ¡metros requeridos para la operaciÃ³n: \'%s\' no han sido suministrados!',
	'unknown_cat' => 'La categorÃ­a seleccionada no existe en la base da datos',
	'usergal_cat_ro' => 'Â¡Las categorÃ­as de galerÃ­as de usuario no pueden ser borradas!',
	'manage_cat' => 'Organizador de categorÃ­as',
	'confirm_delete' => 'EstÃ¡s seguro de querer BORRAR esta catagorÃ­a',
	'category' => 'CategorÃ­a',
	'operations' => 'Operaciones',
	'move_into' => 'Mover hacia',
	'update_create' => 'Modificar/Crear categorÃ­a',
	'parent_cat' => 'CategorÃ­a padre',
	'cat_title' => 'TÃ­tulo de la categorÃ­a',
	'cat_thumb' => 'Thumbnail de la categorÃ­a', //cpg1.3.0
	'cat_desc' => 'DescripciÃ³n de la categorÃ­a',
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
	'title' => 'ConfiguraciÃ³n',
	'restore_cfg' => 'Restaurar valores por defecto',
	'save_cfg' => 'Guardar la nueva configuraciÃ³n',
	'notes' => 'Notas',
	'info' => 'InformaciÃ³n',
	'upd_success' => 'La configuraciÃ³n de Coppermine ha sido actualizada',
	'restore_success' => 'Valores por defecto de Coppermine restaurados',
	'name_a' => 'Ascendente por nombre',
	'name_d' => 'Descendente por nombre',
	'title_a' => 'Ascendente por tÃ­tulo',
	'title_d' => 'Descendente por tÃ­tulo',
	'date_a' => 'Ascendente por fecha',
	'date_d' => 'Descendente por fecha',
	'th_any' => 'MÃ¡ximo alto/ancho',
	'th_ht' => 'Altura',
	'th_wd' => 'Anchura',
	'label' => 'etiqueta', //cpg1.3.0
	'item' => 'grÃ¡fico', //cpg1.3.0
	'debug_everyone' => 'Para todos', //cpg1.3.0
	'debug_admin' => 'Admin solamente', //cpg1.3.0
        );

if (defined('CONFIG_PHP')) $lang_config_data = array(
	'ParÃ¡metros generales',
	array('Nombre de la galerÃ­a', 'gallery_name', 0),
	array('DescripciÃ³n de la galerÃ­a', 'gallery_description', 0),
	array('Correo electrÃ³nico del administrador', 'gallery_admin_email', 0),
	array('DirecciÃ³n web asociada a \'Ver mÃ¡s fotos\' en las e-cards', 'ecards_more_pic_target', 0),
	array('GalerÃ­a desactivada', 'offline', 1), //cpg1.3.0
	array('Guardar postales', 'log_ecards', 1), //cpg1.3.0
	array('Permitir descargas de favoritos en formato ZIP', 'enable_zipdownload', 1), //cpg1.3.0

	'Idioma, temas (aspecto) y juego de caracteres',
	array('Idioma', 'lang', 5),
	array('Tema (Aspecto)', 'theme', 6),
	array('Mostrar lista de idiomas', 'language_list', 1), //cpg1.3.0
	array('Mostrar banderas de idiomas', 'language_flags', 8), //cpg1.3.0
	array('Mostrar &quot;reset&quot; en selecciÃ³n de idiomas', 'language_reset', 1), //cpg1.3.0
	array('Mostrar lista de temas (aspecto)', 'theme_list', 1), //cpg1.3.0
	array('Mostrar &quot;reset&quot; en selecciÃ³n de temas', 'theme_reset', 1), //cpg1.3.0
	array('Mostrar FAQ (preguntas frecuentes)', 'display_faq', 1), //cpg1.3.0
	array('Mostrar ayuda sobre bbcode', 'show_bbcode_help', 1), //cpg1.3.0
	array('Juego de caracteres', 'charset', 4), //cpg1.3.0

	'Aspecto de la lista de albums',
	array('Anchura de la tabla principal (pixels o %)', 'main_table_width', 0),
	array('NÃºmero de niveles de categorÃ­as a mostrar', 'subcat_level', 0),
	array('NÃºmero de albums a mostrar', 'albums_per_page', 0),
	array('NÃºmero de columnas en la lista de albums', 'album_list_cols', 0),
	array('TamaÃ±o de los thumbnails en pixels', 'alb_list_thumb_size', 0),
	array('Contenido de la pÃ¡gina principal', 'main_page_layout', 0),
	array('Mostrar thumbnails de albums de primer nivel en categorÃ­as','first_level',1),

	'Aspecto de la vista de thumbnails',
	array('NÃºmero de columnas en la pÃ¡gina de thumbnails', 'thumbcols', 0),
	array('NÃºmero de filas en la pÃ¡gina de thumbnails', 'thumbrows', 0),
	array('MÃ¡ximo nÃºmero de pestaÃ±as (tabs) a mostrar', 'max_tabs', 10),
	array('Mostrar file caption (ademÃ¡s del tÃ­tulo) debajo del thumbnail', 'caption_in_thumbview', 1),
	array('Mostrar nÃºmero de veces vista debado del thumbnail', 'views_in_thumbview', 1), //cpg1.3.0
	array('Mostrar nÃºmero de comentarios debajo del thumbnail', 'display_comment_count', 1),
	array('Mostrar nombre del usuario que aÃ±adiÃ³ el archivo debajo del thumbnail', 'display_uploader', 1), //cpg1.3.0
	array('Orden por defecto de las imÃ¡genes', 'default_sort_order', 3),
	array('Minimo nÃºmero de votos para que una foto aparezca el la lista de \'MÃ¡s Valoradas\' list', 'min_votes_for_rating', 0), //cpg1.3.0

	'Vista de imÃ¡genes y configuraciÃ³n de comentarios',
	array('Anchura de la tabla donde mostrar la imagen (pixels o %)', 'picture_table_width', 0),
	array('InformaciÃ³n del fichero visible por defecto', 'display_pic_info', 1),
	array('Filtrar palabras malsonantes en los comentarios', 'filter_bad_words', 1),
	array('Permitir emoticons en los comentarios', 'enable_smilies', 1),
	array('Permitir varios comentarios consecutivos del mismo usuario en una imagen (deshabilitar flood protection)', 'disable_comment_flood_protect', 1), //cpg1.3.0
	array('MÃ¡xima longitud para la descripciÃ³n de una imagen', 'max_img_desc_length', 0),
	array('MÃ¡ximo nÃºmero de caracteres en una palabra', 'max_com_wlength', 0),
	array('MÃ¡ximo nÃºmero de lineas en un comentario', 'max_com_lines', 0),
	array('MÃ¡xima longitud de un comentario', 'max_com_size', 0),
	array('Mostrar tira de pelÃ­cula', 'display_film_strip', 1),
	array('NÃºmero de objetos en tira de pelÃ­cula', 'max_film_strip_items', 0),
	array('Notificar al administrador por email de los comentarios', 'email_comment_notification', 1), //cpg1.3.0
	array('Intervalo de tiempo entre imÃ¡genes en el Slideshow en milisegundos (1 segundo = 1000 milisegundos)', 'slideshow_interval', 0), //cpg1.3.0

	'ConfiguraciÃ³n de archivos y thumbnails',
	array('Calidad para los ficheros JPEG', 'jpeg_qual', 0),
	array('MÃ¡xima anchura o altura de los thumbnail <b>*</b>', 'thumb_width', 0),
	array('Usar dimensiÃ³n ( anchura, altura o mÃ¡ximo para los thumbnail )<b>**</b>', 'thumb_use', 7),
	array('Crear imÃ¡genes de tamaÃ±o intermedio','make_intermediate',1),
	array('MÃ¡xima anchura o altura de las imÃ¡genes de tamaÃ±o intermedio <b>*</b>', 'picture_width', 0),
	array('MÃ¡ximo tamaÃ±o de los ficheros aÃ±adidos por los usuarios (KB)', 'max_upl_size', 0),
	array('MÃ¡xima anchura o altura de las imÃ¡genes/videos aÃ±adidos (pixels)', 'max_upl_width_height', 0),

	'ConfiguraciÃ³n avanzada de archivos y thumbnails', //cpg1.3.0
	array('Mostrar icono de Ã¡lbum privado a usuarios no registrados','show_private',1), //cpg1.3.0
	array('Caracteres prohibidos en los nombres de archivos', 'forbiden_fname_char',0), //cpg1.3.0
	//array('Extensiones admitidas al aÃ±adir archivos', 'allowed_file_extensions',0), //cpg1.3.0
 	array('Tipos de imÃ¡genes admitidas', 'allowed_img_types',0), //cpg1.3.0
	array('Tipos de archivos de video admitidos', 'allowed_mov_types',0), //cpg1.3.0
	array('Tipos de archivos de sonido admitidos', 'allowed_snd_types',0), //cpg1.3.0
	array('Tipos de documentos admitidos', 'allowed_doc_types',0), //cpg1.3.0
	array('MÃ©todo para el reescalado de imÃ¡genes','thumb_method',2), //cpg1.3.0
	array('Ruta a la utilidad \'convert\' de ImageMagick (por ejemplo /usr/bin/X11/)', 'impath', 0), //cpg1.3.0
	//array('Tipos de archivo admitidos (solo vÃ¡lidos con ImageMagick)', 'allowed_img_types',0), //cpg1.3.0
	array('Comandos de lÃ­nea para ImageMagick', 'im_options', 0), //cpg1.3.0
	array('Leer datos EXIF en los archivos JPEG', 'read_exif_data', 1), //cpg1.3.0
	array('Leer datos IPTC en los archivos JPEG', 'read_iptc_data', 1), //cpg1.3.0
	array('Directorio base de los albums <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0), //cpg1.3.0
	array('Directorio para los archivos de los usuarios <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0), //cpg1.3.0
	array('Prefijo para las imÃ¡genes intermedias <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0), //cpg1.3.0
	array('Prefijo para los thumbnails <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0), //cpg1.3.0
	array('Modo por defecto para los directorios', 'default_dir_mode', 0), //cpg1.3.0
	array('Modo por defecto para los archivos', 'default_file_mode', 0), //cpg1.3.0

	'ConfiguraciÃ³n de usuarios',
	array('Permitir el registro de nuevos usuarios', 'allow_user_registration', 1),
	array('Registro de usuarios requiere verificaciÃ³n de email', 'reg_requires_valid_email', 1),
	array('Notificar por email al administrador del registro de nuevos usuarios', 'reg_notify_admin_email', 1), //cpg1.3.0
	array('Permitir a dos usuarios tener el mismo email', 'allow_duplicate_emails_addr', 1),
	array('Los usuarios pueden tener albums privados (Nota: si cambias de \'si\' a \'no\' todos los albums privados que existan se convertirÃ¡n en pÃºblicos)', 'allow_private_albums', 1), //cpg1.3.0
	array('Notificar al administrador de archivos aÃ±adidos esperando autorizaciÃ³n', 'upl_notify_admin_email', 1), //cpg1.3.0
	array('Permitir a los usuarios validados ver la lista de miembros', 'allow_memberlist', 1), //cpg1.3.0

	'Campos extra para descripciÃ³n de imÃ¡genes (dejar en blanco si no se usan)',
	array('Nombre del campo 1', 'user_field1_name', 0),
	array('Nombre del campo 2', 'user_field2_name', 0),
	array('Nombre del campo 3', 'user_field3_name', 0),
	array('Nombre del campo 4', 'user_field4_name', 0),
	
	'ConfiguraciÃ³n de cookies',
	array('Nombre de la cookie usada por el script (cuando se use junto con foros, tener cuidado de que sea diferente de la cookie de los foros)', 'cookie_name', 0),
	array('Path de la cookie usada por el script', 'cookie_path', 0),

	'Configuraciones de otros aspectos',
	array('Activar modo debug', 'debug_mode', 9), //cpg1.3.0
	array('Mostrar avisos en modo debug', 'debug_notice', 1), //cpg1.3.0

	'<br /><div align="left"><a name="notice1"></a>(*) Estos valores no deben ser cambiados si ya existen archivos en la base de datos.<br />
	<a name="notice2"></a>(**) Si se cambian estos valores, solamente afectarÃ¡ a los archivos que se aÃ±adan desde este momento, por lo que es recomendable no cambiarlos si ya hay imÃ¡genes en la galerÃ­a. Puedes, sin embargo, hacer los cambios sobre imÃ¡genes existentes con la utilidad &quot;<a href="util.php">Cambiar tamaÃ±os</a>&quot; del menÃº de administraciÃ³n.</div><br />', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Postales enviadas', //cpg1.3.0
  'ecard_sender' => 'Remitente', //cpg1.3.0
  'ecard_recipient' => 'Destinatario', //cpg1.3.0
  'ecard_date' => 'Fecha', //cpg1.3.0
  'ecard_display' => 'Mostrar postal', //cpg1.3.0
  'ecard_name' => 'Nombre', //cpg1.3.0
  'ecard_email' => 'Email', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'ascendente', //cpg1.3.0
  'ecard_descending' => 'descendente', //cpg1.3.0
  'ecard_sorted' => 'Orden', //cpg1.3.0
  'ecard_by_date' => 'por fecha', //cpg1.3.0
  'ecard_by_sender_name' => 'por nombre del remitente', //cpg1.3.0
  'ecard_by_sender_email' => 'por email del remitente', //cpg1.3.0
  'ecard_by_sender_ip' => 'por direcciÃ³n IP del remitente', //cpg1.3.0
  'ecard_by_recipient_name' => 'por nombre del destinatario', //cpg1.3.0
  'ecard_by_recipient_email' => 'por email del destinatario', //cpg1.3.0
  'ecard_number' => 'mostrando registros %s al %s de %s', //cpg1.3.0
  'ecard_goto_page' => 'ir a la pÃ¡gina', //cpg1.3.0
  'ecard_records_per_page' => 'Registros por pÃ¡gina', //cpg1.3.0
  'check_all' => 'Marcar todos', //cpg1.3.0
  'uncheck_all' => 'Desmarcar todos', //cpg1.3.0
  'ecards_delete_selected' => 'Borrar postales seleccionadas', //cpg1.3.0
  'ecards_delete_confirm' => 'Â¿EstÃ¡s seguro de querer borrar estos registros? Â¡Marca la checkbox!', //cpg1.3.0
  'ecards_delete_sure' => 'Estoy seguro', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
	'empty_name_or_com' => 'Debes introducir tu nombre y un comentario',
	'com_added' => 'Tu comentario ha sido aÃ±adido',
	'alb_need_title' => 'Â¡Debes de introducir un tÃ­tulo para el album!',
	'no_udp_needed' => 'No se requiere ningÃºn cambio',
	'alb_updated' => 'El album ha sido actualizado',
	'unknown_album' => 'El album seleccionado no existe o no tienes permisos para aÃ±adir fotos en este album',
	'no_pic_uploaded' => 'Â¡NingÃºn fichero fue aÃ±adido!<br /><br />Si habÃ­as seleccionado una foto para aÃ±adir, comprueba que el servidor admite subir ficheros...',
	'err_mkdir' => 'Â¡Fallo al crear el directorio %s!',
	'dest_dir_ro' => 'Â¡El directorio destino %s no tiene permisos de escritura!',
	'err_move' => 'Â¡Imposible mover %s a %s !',
	'err_fsize_too_large' => 'El fichero que quieres aÃ±adir es demasiago grande (el mÃ¡ximo permitido es de %s x %s)',
	'err_imgsize_too_large' => 'El fichero que quieres aÃ±adir es demasiado grande (el mÃ¡ximo permitido es de %s KB)',
	'err_invalid_img' => 'El fichero que quieres aÃ±adir no es una imagen vÃ¡lida',
	'allowed_img_types' => 'Puedes insertar solamente %s imÃ¡genes.',
	'err_insert_pic' => 'El fichero \'%s\' no puede ser dado de alta en el album ',
	'upload_success' => 'El fichero ha sido insertado correctamente<br /><br />SerÃ¡ visible tras la aprobaciÃ³n de los administradores.',
	'notify_admin_email_subject' => '%s - NotificaciÃ³n de fichero aÃ±adido', //cpg1.3.0
	'notify_admin_email_body' => 'Una imagen ha sido aÃ±adida por %s que necesita tu aprobaciÃ³n. Visita %s', //cpg1.3.0
	'info' => 'InformaciÃ³n',
	'com_added' => 'Comentario aÃ±adido',
	'alb_updated' => 'Album actualizado',
	'err_comment_empty' => 'Â¡El comentario estÃ¡ vacio!',
	'err_invalid_fext' => 'Solamente se admiten ficheros con las siguientes extensiones : <br /><br />%s.',
	'no_flood' => 'Perdona pero eres el autor/a del Ãºltimo comentario introducido para este archivo<br /><br />Puedes editar el comentario que has puesto si es que quieres modificarlo',
	'redirect_msg' => 'EstÃ¡s siendo redirigido.<br /><br /><br />Pulsa \'CONTINUAR\' si la pÃ¡gina no se refresca automÃ¡ticamente',
	'upl_success' => 'El fichero se ha aÃ±adido correctamente',
	'email_comment_subject' => 'Comentario aÃ±adido en la GalerÃ­a Coppermine', //cpg1.3.0
	'email_comment_body' => 'Alguien ha aÃ±adido un comentario en tu galerÃ­a. Puedes verlo en', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
	'caption' => 'TÃ­tulo',
	'fs_pic' => 'imagen tamaÃ±o completo',
	'del_success' => 'borrado correctamente',
	'ns_pic' => 'imagen tamaÃ±o normal',
	'err_del' => 'no puede ser borrado',
	'thumb_pic' => 'thumbnail',
	'comment' => 'comentario',
	'im_in_alb' => 'imÃ¡genes en el album',
	'alb_del_success' => 'Album \'%s\' borrado',
	'alb_mgr' => 'Organizador de albums',
	'err_invalid_data' => 'Datos invÃ¡lidos recibidos en \'%s\'',
	'create_alb' => 'Creando el album \'%s\'',
	'update_alb' => 'Actualizando el album \'%s\' con el tÃ­tulo \'%s\' y el Ã­ndice \'%s\'',
	'del_pic' => 'Borrar fichero',
	'del_alb' => 'Borrar album',
	'del_user' => 'Borrar usuario',
	'err_unknown_user' => 'Â¡El usuario seleccionado no existe!',
	'comment_deleted' => 'El comentario ha sido borrado',
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
	'confirm_del' => 'Â¿EstÃ¡s seguro de querer BORRAR este fichero? \\nLos comentarios serÃ¡n tambiÃ©n borrados.',
	'del_pic' => 'BORRAR ESTE FICHERO',
	'size' => '%s x %s pixels',
	'views' => '%s veces',
	'slideshow' => 'Slideshow',
	'stop_slideshow' => 'DETENER SLIDESHOW',
	'view_fs' => 'Pulsa aquÃ­ para ver la imagen a tamaÃ±o completo',
	'edit_pic' => 'Editar la descripciÃ³n', //cpg1.3.0
	'crop_pic' => 'Recortar y Rotar', //cpg1.3.0
);

$lang_picinfo = array(
	'title' =>'InformaciÃ³n del fichero',
	'Filename' => 'Nombre del fichero',
	'Album name' => 'Nombre del album',
	'Rating' => 'ValoraciÃ³n (%s votos)',
	'Keywords' => 'Palabras clave',
	'File Size' => 'TamaÃ±o del fichero',
	'Dimensions' => 'Dimensiones',
	'Displayed' => 'Se ha visto',
	'Camera' => 'CÃ¡mara',
	'Date taken' => 'Fecha de la captura',
	'Aperture' => 'Apertura',
	'Exposure time' => 'Tiempo de exposiciÃ³n',
	'Focal length' => 'Longitud del foco',
	'Comment' => 'Comentario',
	'addFav'=>'AÃ±adir a Favoritos',
	'addFavPhrase'=>'Favoritos',
	'remFav'=>'Quitar de Favoritos',
	'iptcTitle'=>'IPTC - TÃ­tulo', //cpg1.3.0
	'iptcCopyright'=>'IPTC - Copyright', //cpg1.3.0
	'iptcKeywords'=>'IPTC - Palabras clave', //cpg1.3.0
	'iptcCategory'=>'IPTC - CategorÃ­a', //cpg1.3.0
	'iptcSubCategories'=>'IPTC - Sub-CategorÃ­as', //cpg1.3.0
);

$lang_display_comments = array(
	'OK' => 'OK',
	'edit_title' => 'Editar el comentario',
	'confirm_delete' => 'Â¿EstÃ¡s seguro de querer borrar el comentario?',
	'add_your_comment' => 'AÃ±adir un comentario',
	'name'=>'Nombre',
	'comment'=>'Comentario',
	'your_name' => 'AnÃ³nimo',
);

$lang_fullsize_popup = array(
	'click_to_close' => 'Pulsa en la imagen para cerrar esta ventana',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
	'title' => 'Enviar una postal',
	'invalid_email' => '<b>AtenciÃ³n</b> : Â¡direcciÃ³n email incorrecta!',
	'ecard_title' => 'Una postal de %s para ti',
	'error_not_image' => 'Solo se pueden crear postales con imÃ¡genes.', //cpg1.3.0
	'view_ecard' => 'Si la imagen no se ve correctamente, pulsa en este enlace',
	'view_more_pics' => 'Â¡Pulsa aquÃ­ para ver mÃ¡s imÃ¡genes!',
	'send_success' => 'La postal ha sido enviada',
	'send_failed' => 'Disculpa, pero el servidor no puede enviar la postal...',
	'from' => 'De',
	'your_name' => 'Tu nombre',
	'your_email' => 'Tu direcciÃ³n de email',
	'to' => 'A',
	'rcpt_name' => 'Nombre del destinatario',
	'rcpt_email' => 'DirecciÃ³n email del destinatario',
	'greetings' => 'TÃ­tulo del mensaje',
	'message' => 'Mensaje',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
	'pic_info' => 'InformaciÃ³n',
	'album' => 'Album',
	'title' => 'TÃ­tulo',
	'desc' => 'DescripciÃ³n',
	'keywords' => 'Palabras clave',
	'pic_info_str' => '%sx%s - %sKB - %s veces vista - %s votos',
	'approve' => 'Aprobar el fichero',
	'postpone_app' => 'Postponer el aprobado',
	'del_pic' => 'Borrar el fichero',
	'read_exif' => 'Leer los datos EXIF de nuevo', //cpg1.3.0
	'reset_view_count' => 'Poner a cero el contador de veces que se ha visto',
	'reset_votes' => 'Poner a cero los votos',
	'del_comm' => 'Borrar comentarios',
	'upl_approval' => 'Aprobar ficheros aÃ±adidos',
	'edit_pics' => 'Editar imÃ¡genes',
	'see_next' => 'Ver los ficheros siguientes',
	'see_prev' => 'Ver los ficheros anteriores',
	'n_pic' => '%s fichero/s',
	'n_of_pic_to_disp' => 'NÃºmero de ficheros a mostrar',
	'apply' => 'Validar los cambios',
	'crop_title' => 'Editor de ImÃ¡genes Coppermine', //cpg1.3.0
	'preview' => 'Previsualizar', //cpg1.3.0
	'save' => 'Guardar imagen', //cpg1.3.0
	'save_thumb' =>'Guardar como thumbnail', //cpg1.3.0
	'sel_on_img' =>'Â¡La selecciÃ³n tiene que estar enteramente en la imagen!', //js-alert //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Preguntas Frecuentes', //cpg1.3.0
  'toc' => 'Ãndice de contenidos', //cpg1.3.0
  'question' => 'Pregunta: ', //cpg1.3.0
  'answer' => 'Respuesta: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'Cuestiones Generales', //cpg1.3.0
  array('Â¿PorquÃ© deberÃ­a registrarme?', 'El registro puede o no ser requerido por el administrador. El registro facilita caracterÃ­sticas adicionales tales como poder aÃ±adir ficheros, tener una lista de favoritos, puntuar imÃ¡genes, aÃ±adir comentarios, etc.', 'allow_user_registration', '0'), //cpg1.3.0
  array('Â¿CÃ³mo puedo registrarme?', 'Pulsa en &quot;Registrarse&quot; y rellena todos los campos requeridos (y los opcionales si quieres tambiÃ©n).<br />Si el administrador tiene activada la validaciÃ³n de email ,tras completar y enviar los datos recibirÃ¡s un mensaje en la direcciÃ³n que has indicado durante el registro, en el cual se explica cÃ³mo activar tu cuenta (solo pulsando un enlace). Hasta que no actives la cuenta no podrÃ¡s validarte como usuario registrado.', 'allow_user_registration', '1'), //cpg1.3.0
  array('Â¿CÃ³mo puedo hacer login (validarme)?', 'Pulsa en &quot;Login&quot;, rellena tu nombre de usuario y contraseÃ±a, y marca &quot;Recordarme&quot; con ello consigues estar validado la prÃ³xima vez que nos visites.<br /><b>IMPORTANTE: Las cookies deben estar activadas en el navegador y la cookie de este sitio no debe ser borrada si quieres que funcione la opciÃ³n &quot;Recordarme&quot;.</b>', 'offline', 0), //cpg1.3.0
  array('Â¿PorquÃ© no puedo hacer login?', 'Â¿Te has registrado y pulsado en el enlace del email de confirmaciÃ³n que se te enviÃ³?. Esto deberÃ­a haber activado tu cuenta. Si no es asÃ­, contacta con el administrador del sistema.', 'offline', 0), //cpg1.3.0
  array('Â¿QuÃ© pasa si olvido mi contraseÃ±a?', 'Si la web tiene opciÃ³n de &quot;He olvidado mi contraseÃ±a&quot; tendrÃ¡s que acceder a la recuperaciÃ³n de la misma. Si no, deberÃ¡s contactar con el administrador para que te cree una nueva contraseÃ±a.', 'offline', 0), //cpg1.3.0
  //array('Â¿QuÃ© pasa si he cambiado mi direcciÃ³n de email?', 'Simplemente haz login y cambia tu direcciÃ³n de email desde &quot;Mi Perfil&quot;', 'offline', 0), //cpg1.3.0
  array('Â¿CÃ³mo puedo guardar una imagen en &quot;Mis Favoritos&quot;?', 'Pulsa primero en la imagen y luego el icono de &quot;mostrar informaciÃ³n de fichero&quot; (<img src="images/info.gif" width="16" height="16" border="0" alt="Mostrar informaciÃ³n de fichero" />); baja hasta donde ha aparecido dicha informaciÃ³n y pulsa en &quot;AÃ±adir a Favoritos&quot;.<br />El administrador podrÃ­a tener activado &quot;mostrar informaciÃ³n de fichero&quot; por defecto.<br />IMPORTANTE: Las cookies deben estar activadas en el navegador y la cookie de esta web no debe ser borrada.', 'offline', 0), //cpg1.3.0
  array('Â¿CÃ³mo puedo valorar una imagen?', 'Pulsa en el thumbnail de la imagen, mira debajo de ella y elige la puntuaciÃ³n.', 'offline', 0), //cpg1.3.0
  array('Â¿CÃ³mo puedo enviar un comentario a una imagen?', 'Pulsa en el thumbnail de la imagen y mira debajo de ella. AhÃ­ puedes insertar tu comentario.', 'offline', 0), //cpg1.3.0
  array('Â¿CÃ³mo puedo aÃ±adir una imagen?', 'Pulsa en &quot;AÃ±adir fichero&quot; y elige el album en el que quieres aÃ±adir la imagen, pulsa &quot;Browse&quot; y elige la imagen que quieres de tu disco duro, pulsando el botÃ³n &quot;Abrir&quot; (aÃ±ade tÃ­tulo y descripciÃ³n si quieres), pulsando finalmente en &quot;AÃ±adir nuevo fichero&quot;', 'allow_private_albums', 0), //cpg1.3.0
  array('Â¿En dÃ³nde puedo aÃ±adir una imagen?', 'Puedes aÃ±adir una imagen a uno de tus albums de &quot;Mi galerÃ­a&quot;. El Administrador puede haber permitido el aÃ±adir imÃ¡genes en uno o mÃ¡s de los albums de la GalerÃ­a principal.', 'allow_private_albums', 0), //cpg1.3.0
  array('Â¿QuÃ© tipos y tamaÃ±os de imÃ¡genes puedo aÃ±adir?', 'Los tipos (jpg,gif,..etc.) y tamaÃ±os los decide el administrador.', 'offline', 0), //cpg1.3.0
  array('Â¿QuÃ© es &quot;Mi galerÃ­a&quot;?', '&quot;Mi galerÃ­a&quot; es una galerÃ­a personal en la que el usuario puede aÃ±adir nuevos ficheros, asÃ­ como configurarla.', 'allow_private_albums', 0), //cpg1.3.0
  array('Â¿CÃ³mo puedo crear,renombrar o borrar un album en &quot;Mi galerÃ­a&quot;?', 'Debes entrar en &quot;Modo administrador&quot;<br />Pulsa en &quot;Crear/ordenar albums&quot; y luego en &quot;Nuevo&quot;. Cambia &quot;Nuevo Ã¡lbum&quot; por el nombre que quieras.<br />Puedes tambiÃ©n renombrar cualquiera de los albums de tu galerÃ­a.<br />Pulsa &quot;Aplicar modificaciones&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Â¿CÃ³mo puedo modificar y restringir a otros usuarios el ver mi albums?', 'Debes entrar en &quot;Modo administrador&quot;<br />Pulsa en &quot;Modificar mis albums&quot;. En la barra de &quot;Modificar album&quot;, elige el album que quieres modificar.<br />Desde aqui puedes cambiar el nombre, descripciÃ³n, imagen thumbnail, y restringir quiÃ©n puede ver o poner comentarios en el album.<br />Pulsa &quot;Modificar album&quot; para guardar los cambios.', 'allow_private_albums', 0), //cpg1.3.0
  array('?CÃ³mo puedo ver galerÃ­as de otros usuarios?', 'Vete a la &quot;Lista de Ã¡lbums&quot; y elige &quot;GalerÃ­as de usuario&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Â¿QuÃ© son las cookies?', 'Las cookies son unos pequeÃ±os textos que se envÃ­an desde la web y se almacenan en tu ordenador.<br />Normalmente las cookies sirven para "recordar" al usuario cuando Ã©ste vuelva de nuevo, y para otros varios usos.', 'offline', 0), //cpg1.3.0
  array('Â¿DÃ³nde puedo conseguir este programa para ponerlo en mi web?', 'Coppermine es una GalerÃ­a Multimedia gratuÃ­ta, publicada bajo licencia GNU GPL. EstÃ¡ repleta de caracterÃ­sticas y ha sido adaptada a distintas plataformas y sistemas de contenido. Visita la <a href="http://coppermine.sf.net/">Web de Coppermine</a> para saber mÃ¡s y poder descargar el programa.', 'offline', 0), //cpg1.3.0

  'Navegando por Coppermine', //cpg1.3.0
  array('Â¿QuÃ© es la &quot;Lista de Ã¡lbums&quot;?', 'Desde aquÃ­ puedes ver la galerÃ­a completa, con un enlace a cada categorÃ­a. Los thumbnails pueden ser enlaces directos a las categorÃ­as.', 'offline', 0), //cpg1.3.0
  array('Â¿QuÃ© es &quot;Mi galerÃ­a&quot;?', 'Esta caracterÃ­stica permite al usuario crear su propia galerÃ­a y aÃ±adir, borrar o modificar albums asÃ­ como aÃ±adir nuevos ficheros en ellos.', 'allow_private_albums', 0), //cpg1.3.0
  array('Â¿CuÃ¡les son las diferencias entre &quot;Modo adminsitrador&quot; y &quot;Modo usuario&quot;?', 'Cuando se estÃ¡ en modo administrador, el usuario puede modificar su galerÃ­a (asÃ­ como otras si se lo ha permitido el administrador).', 'allow_private_albums', 0), //cpg1.3.0
  array('Â¿QuÃ© es &quot;AÃ±adir fichero&quot;?', 'Esta caracterÃ­stica permite al usuario aÃ±adir una imagen (tamaÃ±o y tipos definidos por el administrador) en una galerÃ­a seleccionada por el usuario o bien por el administrator.', 'allow_private_albums', 0), //cpg1.3.0
  array('Â¿QuÃ© es &quot;Ãšltimos archivos&quot;?', 'Muestra los Ãºltimos ficheros / imÃ¡genes aÃ±adidos a la galerÃ­a.', 'offline', 0), //cpg1.3.0
  array('Â¿QuÃ© es &quot;Ãšltimos comentarios&quot;?', 'Muestra los Ãºltimos comentarios aÃ±adidos por los usuarios, junto con las imÃ¡genes comentadas.', 'offline', 0), //cpg1.3.0
  array('Â¿QuÃ© es &quot;MÃ¡s vistos&quot;?', 'Muestra las imÃ¡genes mÃ¡s vistas por todos los usuarios (registrados y visitantes).', 'offline', 0), //cpg1.3.0
  array('Â¿QuÃ© es &quot;MÃ¡s valorados&quot;?', 'Muestra las imÃ¡genes mejor valoradas por los usuarios, junto con la media de puntuaciÃ³n (por ejemplo: cinco usuarios han dado un <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: la imagen tendrÃ¡ una puntuaciÃ³n media de <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ; si cinco usuarios han puntuado de 1 a 5 (1,2,3,4,5) la media resultante serÃ¡ <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />Las puntuaciones van desde <img src="images/rating5.gif" width="65" height="14" border="0" alt="mejor" /> (mejor) hasta <img src="images/rating0.gif" width="65" height="14" border="0" alt="peor" /> (peor).', 'offline', 0), //cpg1.3.0
  array('Â¿QuÃ© es &quot;Mis favoritos&quot;?', 'Esta caracterÃ­stica permite a un usuario guardar una imagen favorita en la cookie que es enviada a su ordenador.', 'offline', 0), //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'RecuperaciÃ³n de contraseÃ±a', //cpg1.3.0
  'err_already_logged_in' => 'Â¡Ya estÃ¡s validado como usuario!', //cpg1.3.0
  'enter_username_email' => 'Introduce tu nombre de usuario o direcciÃ³n email', //cpg1.3.0
  'submit' => 'buscar contraseÃ±a', //cpg1.3.0
  'failed_sending_email' => 'Â¡El email con la contraseÃ±a no ha podido ser enviado!', //cpg1.3.0
  'email_sent' => 'Se ha enviado un email con tu nombre de usuario y contraseÃ±a a %s', //cpg1.3.0
  'err_unk_user' => 'Â¡El usuario seleccionado no existe!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - RecuperaciÃ³n de contraseÃ±a', //cpg1.3.0
  'passwd_reminder_body' => 'Has solicitado la recuperaciÃ³n de contraseÃ±a del siguiente usuario:
Usuario: %s
ContraseÃ±a: %s
Pulsa %s para validarte.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
	'group_name' => 'Nombre del grupo',
	'disk_quota' => 'Cuota de disco',
	'can_rate' => 'Pueden valorar ficheros',
	'can_send_ecards' => 'Pueden enviar postales',
	'can_post_com' => 'Pueden aÃ±adir comentarios',
	'can_upload' => 'Pueden aÃ±adir ficheros',
	'can_have_gallery' => 'Pueden tener galerÃ­as personales',
	'apply' => 'Validar los cambios',
	'create_new_group' => 'Crear nuevo grupo',
	'del_groups' => 'Borrar el/los grupo(s) seleccionados',
	'confirm_del' => 'Â¡AtenciÃ³n, cuando borras un grupo, los usuarios que pertenecen a ese grupo serÃ¡n transferidos al grupo \'Registered\'!\n\nÂ¿Deseas continuar?',
	'title' => 'Configurar grupos de usuarios',
	'approval_1' => 'AprobaciÃ³n album pÃºblico (1)',
	'approval_2' => 'AprobaciÃ³n album privado (2)',
	'upload_form_config' => 'ConfiguraciÃ³n de formulario de upload', //cpg1.3.0
	'upload_form_config_values' => array( 'Uploads de un solo fichero solamente', 'Upload de mÃºltiples ficheros solamente', 'URI uploads solamente', 'ZIP uploads solamente', 'Ficheros-URI', 'Ficheros-ZIP', 'URI-ZIP', 'Ficheros-URI-ZIP'), //cpg1.3.0
	'custom_user_upload'=>'Â¿El usuario puede definir el nÃºmero de cajas de upload?', //cpg1.3.0
	'num_file_upload'=>'NÃºmero mÃ¡ximo/exacto de cajas de upload', //cpg1.3.0
	'num_URI_upload'=>'NÃºmero mÃ¡ximo/exacto de cajas de URI upload', //cpg1.3.0
	'note1' => '<b>(1)</b> AÃ±adir fotos en un album pÃºblico requerirÃ¡ aprobaciÃ³n de los administradores',
	'note2' => '<b>(2)</b> AÃ±adir fotos en un album que pertenece al asuario requerirÃ¡ aprobaciÃ³n de los administradores',
	'notes' => 'Notas'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
	'welcome' => 'Â¡Bienvenido!'
);

$lang_album_admin_menu = array(
	'confirm_delete' => 'Â¿EstÃ¡s seguro de querer BORRAR este album ? \\nTodas las fotos y comentarios serÃ¡n tambiÃ©n borrados.',
	'delete' => 'Borrar',
	'modify' => 'Modificar',
	'edit_pics' => 'Editar imÃ¡genes',
);

$lang_list_categories = array(
	'home' => 'Inicio',
	'stat1' => '<b>[pictures]</b> ficheros en <b>[albums]</b> albums y <b>[cat]</b> categorÃ­as con <b>[comments]</b> comentarios, vistas <b>[views]</b> veces',
	'stat2' => '<b>[pictures]</b> ficheros en <b>[albums]</b> albums, vistas <b>[views]</b> veces',
	'xx_s_gallery' => 'GalerÃ­a de %s',
	'stat3' => '<b>[pictures]</b> ficheros en <b>[albums]</b> albums con <b>[comments]</b> comentarios, vistas <b>[views]</b> veces'
);

$lang_list_users = array(
	'user_list' => 'Lista de usuarios',
	'no_user_gal' => 'No existen usuarios con permisos para tener albums',
	'n_albums' => '%s album(s)',
	'n_pics' => '%s fichero(s)'
);

$lang_list_albums = array(
	'n_pictures' => '%s ficheros',
	'last_added' => ', Ãºltimo aÃ±adido el %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
	'login' => 'Login',
	'enter_login_pswd' => 'Introduce nombre de usuario y contraseÃ±a',
	'username' => 'Nombre de usuario',
	'password' => 'ContraseÃ±a',
	'remember_me' => 'Recordarme',
	'welcome' => 'Bienvenido %s ...',
	'err_login' => '*** Login incorrecto. IntÃ©ntalo de nuevo ***',
	'err_already_logged_in' => 'Â¡Ya estabas validado en el sistema!',
	'forgot_password_link' => 'He olvidado mi contraseÃ±a', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
	'logout' => 'Salir',
	'bye' => 'Hasta otra, %s ...',
	'err_not_loged_in' => 'Â¡No estÃ¡s validado en el sistema!',
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
	'upd_alb_n' => 'Modificar album %s',
	'general_settings' => 'ConfiguraciÃ³n general',
	'alb_title' => 'TÃ­tulo del album',
	'alb_cat' => 'CategorÃ­a del album',
	'alb_desc' => 'DescripciÃ³n del album',
	'alb_thumb' => 'Thumbnail del album',
	'alb_perm' => 'Permisos para este album',
	'can_view' => 'Este album puede ser visto por',
	'can_upload' => 'Los visitantes pueden aÃ±adir fotos',
	'can_post_comments' => 'Los visitantes pueden aÃ±adir comentarios',
	'can_rate' => 'Los visitantes pueden valorar las fotos',
	'user_gal' => 'GalerÃ­a de usuario',
	'no_cat' => '* Sin categorÃ­a *',
	'alb_empty' => 'El album estÃ¡ vacÃ­o',
	'last_uploaded' => 'Ultima imagen aÃ±adida',
	'public_alb' => 'Todos (album pÃºblico)',
	'me_only' => 'Solamente yo',
	'owner_only' => 'Solamente el dueÃ±o del album (%s)',
	'groupp_only' => 'Miembros del grupo \'%s\'',
	'err_no_alb_to_modify' => 'No puedes modificar ningÃºn album en la base de datos.',
	'update' => 'Modificar album',
	'notice1' => '(*) dependiendo de la configuraciÃ³n de %sgrupos%s', //cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
	'already_rated' => 'Perdona pero ya has votado anteriormente a este fichero',
	'rate_ok' => 'Tu voto ha sido contabilizado',
	'forbidden' => 'No puedes votar a tus propias imÃ¡genes.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
A pesar de que los administradores de {SITE_NAME} intentarÃ¡n eliminar o editar cualquier material desagradable tan pronto como puedan, resulta imposible revisar todos los envÃ­os que se realizan. Por lo tanto debes tener en cuenta que todos los envÃ­os hechos hacia esta web expresan el punto de vista y opiniones de sus autores y no los de los administradores o webmasters (excepto los aÃ±adidos por ellos mismos).<br />
<br />
Usted acuerda no aÃ±adir ningÃºn material abusivo, obsceno, vulgar, escandaloso, odioso, amenazador, de orientaciÃ³n sexual, o ningÃºn otro que pueda violar cualquier ley aplicable. Usted estÃ¡ de acuerdo con que el webmaster, el administrador y los asesores de { SITE_NAME } tienen el derecho de quitar o de corregir cualquier contenido en cualquier momento si lo consideran necesario. Como usuario, accede a que cualquier informaciÃ³n aÃ±adida serÃ¡ almacenada en una base de datos. Asi mismo, esta informaciÃ³n no serÃ¡ divulgada a terceros sin su consentimiento. El webmaster y el administrador no se pueden hacer responsables de ningÃºn intento de destrucciÃ³n de la base de datos que pueda conducir a la pÃ©rdida de la misma.<br />
<br />
Este sitio utiliza cookies para almacenar la informaciÃ³n en su ordenador. Estas cookies sirven para mejorar la navegaciÃ³n en este sitio. La direcciÃ³n de email se utiliza solamente para confirmar sus detalles y contraseÃ±a del registro.<br />
<br />
Pulsando 'estoy de acuerdo' expresas tu conformidad con estas condiciones.
EOT;

$lang_register_php = array(
	'page_title' => 'Registro de nuevo usuario',
	'term_cond' => 'TÃ©rminos y condiciones',
	'i_agree' => 'Estoy de acuerdo',
	'submit' => 'Enviar solicitud de registro',
	'err_user_exists' => 'El nombre de usuario elegido ya existe, por favor elige otro diferente',
	'err_password_mismatch' => 'Las dos contraseÃ±as no son iguales, por favor vuelve a introducirlas',
	'err_uname_short' => 'El nombre de usuario debe ser de 2 caracteres de longitud como mÃ­nimo',
	'err_password_short' => 'La contraseÃ±a debe ser de 2 caracteres de longitud como mÃ­nimo',
	'err_uname_pass_diff' => 'El nombre de usuario y la contraseÃ±a deben ser diferentes',
	'err_invalid_email' => 'La direcciÃ³n de email no es vÃ¡lida',
	'err_duplicate_email' => 'Otro usuario se ha registrado anteriormente con la direcciÃ³n de email suministrada',
	'enter_info' => 'Introduce la informaciÃ³n de registro',
	'required_info' => 'InformaciÃ³n requerida',
	'optional_info' => 'InformaciÃ³n opcional',
	'username' => 'Nombre de usuario',
	'password' => 'ContraseÃ±a',
	'password_again' => 'Reescribir contraseÃ±a',
	'email' => 'Email',
	'location' => 'Localidad',
	'interests' => 'Intereses',
	'website' => 'PÃ¡gina web',
	'occupation' => 'OcupaciÃ³n',
	'error' => 'ERROR',
	'confirm_email_subject' => '%s - ConfirmaciÃ³n de registro',
	'information' => 'InformaciÃ³n',
	'failed_sending_email' => 'Â¡El email de confirmaciÃ³n de registro no ha podido ser enviado!',
	'thank_you' => 'Gracias por registrarte.<br /><br />Hemos enviado un email con informaciÃ³n sobre la activaciÃ³n de tu cuenta a la direcciÃ³n de email que nos has facilitado.',
	'acct_created' => 'Tu cuenta de usuario ha sido creada y ahora puedes acceder al sistema con tu nombre de usuario y contraseÃ±a',
	'acct_active' => 'Tu cuenta de usuario estÃ¡ ya activa y ahora puedes acceder al sistema con tu nombre de usuario y contraseÃ±a',
	'acct_already_act' => 'Â¡Tu cuenta ya estaba activa!',
	'acct_act_failed' => 'Â¡Esta cuenta no puede ser activada!',
	'err_unk_user' => 'Â¡El usuario seleccionado no existe!',
	'x_s_profile' => 'Perfil de %s',
	'group' => 'Grupo',
	'reg_date' => 'Fecha de alta',
	'disk_usage' => 'Uso de disco',
	'change_pass' => 'Cambiar contraseÃ±a',
	'current_pass' => 'ContraseÃ±a actual',
	'new_pass' => 'Nueva contraseÃ±a',
	'new_pass_again' => 'Reescribir nueva contraseÃ±a',
	'err_curr_pass' => 'La contraseÃ±a actual es incorrecta',
	'apply_modif' => 'Guardar los cambios',
	'change_pass' => 'Cambiar mi contraseÃ±a',
	'update_success' => 'Tu perfil ha sido actualizado',
	'pass_chg_success' => 'Tu contraseÃ±a ha sido cambiada',
	'pass_chg_error' => 'Tu contraseÃ±a no ha sido cambiada',
	'notify_admin_email_subject' => '%s - NotificaciÃ³n de registro', //cpg1.3.0
	'notify_admin_email_body' => 'Un nuevo usuario se ha registrado en tu galerÃ­a con el nombre "%s"', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
Gracias por registrarte en {SITE_NAME}

Tu nombre de usuario es: "{USER_NAME}"
Tu contraseÃ±a es: "{PASSWORD}"

Para terminar de activar tu cuenta, debes pulsar sobre el enlace que
aparece debajo o copiarlo y pegarlo en tu navegador de InterNet.

{ACT_LINK}

Saludos.

Los administradores de {SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
	'title' => 'Revisar comentarios',
	'no_comment' => 'No existen comentarios que mostrar',
	'n_comm_del' => '%s comentario(s) borrado(s)',
	'n_comm_disp' => 'NÃºmero de comentarios a mostrar',
	'see_prev' => 'Ver el anterior',
	'see_next' => 'Ver el siguiente',
	'del_comm' => 'Borrar comentarios seleccionados',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
	0 => 'Buscar en toda la galerÃ­a',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
	'page_title' => 'Buscar nuevos ficheros',
	'select_dir' => 'Selecciona directorio',
	'select_dir_msg' => 'Esta funciÃ³n te permite aÃ±adir de forma automÃ¡tica los ficheros que hayas subido a tu servidor mediante FTP.<br /><br />Selecciona el directorio donde has subido tus ficheros',
	'no_pic_to_add' => 'No hay ningÃºn fichero para aÃ±adir',
	'need_one_album' => 'Necesitas al menos un album para utilizar esta funciÃ³n',
	'warning' => 'AtenciÃ³n',
	'change_perm' => 'Â¡El script no puede escribir en este directorio, necesitas cambiar sus permisos a modo 755 o 777 antes de intentarlo de nuevo!',
	'target_album' => '<b>Colocar los ficheros del directorio &quot;</b>%s<b>&quot; en el album </b>%s',
	'folder' => 'Carpeta',
	'image' => 'Imagen',
	'album' => 'Album',
	'result' => 'Resultado',
	'dir_ro' => 'No se puede escribir. ',
	'dir_cant_read' => 'No se puede leer. ',
	'insert' => 'AÃ±adiendo nuevos ficheros a la galerÃ­a',
	'list_new_pic' => 'Listado de nuevos ficheros',
	'insert_selected' => 'AÃ±adir los ficheros seleccionados',
	'no_pic_found' => 'No se encontrÃ³ ningÃºn fichero nuevo',
	'be_patient' => 'Por favor, se paciente, el script necesita tiempo para aÃ±adir los ficheros',
	'no_album' => 'ningÃºn album seleccionado',  //cpg1.3.0
	'notes' =>  '<ul>'.
				'<li><b>OK</b> : significa que el fichero fue aÃ±adido sin problemas'.
				'<li><b>DP</b> : significa que el fichero es un duplicado y ya existe en la base de datos'.
				'<li><b>PB</b> : significa que el fichero no puede ser aÃ±adido, por favor comprueba la configaraciÃ³n y los permisos de los directorios donde estÃ¡n los ficheros'.
				'<li><b>NA</b> : significa que no has seleccionado un album en el que insertar los ficheros, pulsa \'<a href="javascript:history.back(1)">atrÃ¡s</a>\' y selecciona un album. Si no dispones de album <a href="albmgr.php">crea uno primero</a></li>'.
				'<li>Si los iconos OK, DP, PB no aparecen, pulsa sobre el icono de imagen no cargada para ver el error producido por PHP'.
				'<li>Si el navegador produce un timeout, pulsa el icono de Actualizar'.
				'</ul>',
	'select_album' => 'selecciona un album', //cpg1.3.0
	'check_all' => 'Marcar todos', //cpg1.3.0
	'uncheck_all' => 'Desmarcar todos', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
	'title' => 'Expulsar Usuarios',
	'user_name' => 'Nombre de Usuario',
	'ip_address' => 'DirecciÃ³n IP',
	'expiry' => 'Caduca (en blanco es permanente)',
	'edit_ban' => 'Guardar cambios',
	'delete_ban' => 'Borrar',
	'add_new' => 'AÃ±adir nueva expulsiÃ³n',
	'add_ban' => 'AÃ±adir',
	'error_user' => 'No se puede encontrar al usuario', //cpg1.3.0
	'error_specify' => 'Tienes que especificar un nombre de usuario o una direcciÃ³n IP', //cpg1.3.0
	'error_ban_id' => 'Â¡Identificador de expulsado invÃ¡lido!', //cpg1.3.0
	'error_admin_ban' => 'Â¡No puedes expulsarte a ti mismo!', //cpg1.3.0
	'error_server_ban' => 'Â¿Vas a expulsar a tu propio servidor? No se puede hacer eso...', //cpg1.3.0
	'error_ip_forbidden' => 'No puedes expulsar esta IP - Â¡No es rutable!', //cpg1.3.0
	'lookup_ip' => 'Buscar una direcciÃ³n IP', //cpg1.3.0
	'submit' => 'buscar', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
	'title' => 'AÃ±adir nuevo fichero',
	'custom_title' => 'Customized Request Form', //cpg1.3.0
	'cust_instr_1' => 'You may select a customized number of upload boxes. However, you may not select more than the limits listed below.', //cpg1.3.0
	'cust_instr_2' => 'Box Number Requests', //cpg1.3.0
	'cust_instr_3' => 'File upload boxes: %s', //cpg1.3.0
	'cust_instr_4' => 'URI/URL upload boxes: %s', //cpg1.3.0
	'cust_instr_5' => 'URI/URL upload boxes:', //cpg1.3.0
	'cust_instr_6' => 'File upload boxes:', //cpg1.3.0
	'cust_instr_7' => 'Please enter the number of each type of upload box you desire at this time.  Then click \'Continue\'. ', //cpg1.3.0
	'reg_instr_1' => 'Invalid action for form creation.', //cpg1.3.0
	'reg_instr_2' => 'Now you may upload your files using the upload boxes below. The size of files uploaded from your client to the server should not exceed %s KB each. ZIP files uploaded in the \'File Upload\' and \'URI/URL Upload\' sections will remain compressed.', //cpg1.3.0
	'reg_instr_3' => 'If you want the zipped file or archive to be decompressed, you must use the file upload box provided in the \'Decompressive ZIP Upload\' area.', //cpg1.3.0
	'reg_instr_4' => 'When using the URI/URL upload section, please enter the path to the file like so: http://www.mysite.com/images/example.jpg', //cpg1.3.0
	'reg_instr_5' => 'When you have completed the form, please click \'Continue\'.', //cpg1.3.0
	'reg_instr_6' => 'Decompressive ZIP Uploads:', //cpg1.3.0
	'reg_instr_7' => 'File Uploads:', //cpg1.3.0
	'reg_instr_8' => 'URI/URL Uploads:', //cpg1.3.0
	'error_report' => 'Error Report', //cpg1.3.0
	'error_instr' => 'The following uploads encountered errors:', //cpg1.3.0
	'file_name_url' => 'File Name/URL', //cpg1.3.0
	'error_message' => 'Error Message', //cpg1.3.0
	'no_post' => 'File not uploaded by POST.', //cpg1.3.0
	'forb_ext' => 'Forbidden file extension.', //cpg1.3.0
	'exc_php_ini' => 'Exceeded filesize allowed in php.ini.', //cpg1.3.0
	'exc_file_size' => 'Exceeded filesize permitted by CPG.', //cpg1.3.0
	'partial_upload' => 'Only a partial upload.', //cpg1.3.0
	'no_upload' => 'No upload occurred.', //cpg1.3.0
	'unknown_code' => 'Unknown PHP upload error code.', //cpg1.3.0
	'no_temp_name' => 'No upload - No temp name.', //cpg1.3.0
	'no_file_size' => 'Contains no data/Corrupted', //cpg1.3.0
	'impossible' => 'Impossible to move.', //cpg1.3.0
	'not_image' => 'Not an image/corrupt', //cpg1.3.0
	'not_GD' => 'Not a GD extension.', //cpg1.3.0
	'pixel_allowance' => 'Pixel allowance exceeded.', //cpg1.3.0
	'incorrect_prefix' => 'Incorrect URI/URL prefix', //cpg1.3.0
	'could_not_open_URI' => 'Could not open URI.', //cpg1.3.0
	'unsafe_URI' => 'Safety not verifiable.', //cpg1.3.0
	'meta_data_failure' => 'Meta data failure', //cpg1.3.0
	'http_401' => '401 No autorizado', //cpg1.3.0
	'http_402' => '402 Pago requerido', //cpg1.3.0
	'http_403' => '403 Prohibido', //cpg1.3.0
	'http_404' => '404 No encontrado', //cpg1.3.0
	'http_500' => '500 Error interno de servidor', //cpg1.3.0
	'http_503' => '503 Servicio no disponible', //cpg1.3.0
	'MIME_extraction_failure' => 'MIME could not be determined.', //cpg1.3.0
	'MIME_type_unknown' => 'Unknown MIME type', //cpg1.3.0
	'cant_create_write' => 'Cannot create write file.', //cpg1.3.0
	'not_writable' => 'Cannot write to write file.', //cpg1.3.0
	'cant_read_URI' => 'Cannot read URI/URL', //cpg1.3.0
	'cant_open_write_file' => 'Cannot open URI write file.', //cpg1.3.0
	'cant_write_write_file' => 'Cannot write to URI write file.', //cpg1.3.0
	'cant_unzip' => 'Cannot unzip.', //cpg1.3.0
	'unknown' => 'Unknown error', //cpg1.3.0
	'succ' => 'Successful Uploads', //cpg1.3.0
	'success' => '%s uploads were successful.', //cpg1.3.0
	'add' => 'Please click \'Continue\' to add the files to albums.', //cpg1.3.0
	'failure' => 'Upload Failure', //cpg1.3.0
	'f_info' => 'File Information', //cpg1.3.0
	'no_place' => 'The previous file could not be placed.', //cpg1.3.0
	'yes_place' => 'The previous file was placed successfully.', //cpg1.3.0
	'max_fsize' => 'El tamaÃ±o mÃ¡ximo de fichero admitido es de %s KB',
	'album' => 'Album',
	'picture' => 'Fichero',
	'pic_title' => 'TÃ­tulo del fichero',
	'description' => 'DescripciÃ³n del fichero',
	'keywords' => 'Palabras clave (separadas por espacios)',
	'err_no_alb_uploadables' => 'Perdona pero no hay ningÃºn album donde estÃ© permitido insertar nuevos ficheros',
	'place_instr_1' => 'Please place the files in albums at this time.  You may also enter relevant information about each file now.', //cpg1.3.0
	'place_instr_2' => 'More files need placement. Please click \'Continue\'.', //cpg1.3.0
	'process_complete' => 'You have successfully placed all the files.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
	'title' => 'Administrar usuarios',
	'name_a' => 'Ascendente por nombre',
	'name_d' => 'Descendente por nombre',
	'group_a' => 'Ascendente por grupo',
	'group_d' => 'Descendente por grupo',
	'reg_a' => 'Ascendente por fecha de alta',
	'reg_d' => 'Descendente por fecha de alta',
	'pic_a' => 'Ascendente por total de fotos',
	'pic_d' => 'Descendente por total de fotos',
	'disku_a' => 'Ascendente por uso de disco',
	'disku_d' => 'Descendente por uso de disco',
	'lv_a' => 'Ascendente por Ãºltima visita', //cpg1.3.0
	'lv_d' => 'Descendente por Ãºltima visita', //cpg1.3.0
	'sort_by' => 'Ordenar usuarios por',
	'err_no_users' => 'Â¡La tabla de usuarios estÃ¡ vacÃ­a!',
	'err_edit_self' => 'No puedes editar tu propio perfil, usa la opciÃ³n \'Mi perfil de usuario\' para eso',
	'edit' => 'EDITAR',
	'delete' => 'BORRAR',
	'name' => 'Nombre de usuario',
	'group' => 'Grupo',
	'inactive' => 'Inactivo',
	'operations' => 'Operaciones',
	'pictures' => 'Ficheros',
	'disk_space' => 'Espacio usado / Cuota',
	'registered_on' => 'Registrado el dÃ­a',
	'last_visit' => 'Ãšltima Visita', //cpg1.3.0
	'u_user_on_p_pages' => '%d usuarios en %d pÃ¡gina(s)',
	'confirm_del' => 'Â¿EstÃ¡s seguro de querer BORRAR este usuario? \\nTodas sus fotos y albums serÃ¡n tambiÃ©n borrados.',
	'mail' => 'MAIL',
	'err_unknown_user' => 'Â¡El usuario seleccionado no existe!',
	'modify_user' => 'Modificar usuario',
	'notes' => 'Notas',
	'note_list' => '<li>Si no quieres cambiar la contraseÃ±a actual, deja el campo "contraseÃ±a" vacÃ­o',
	'password' => 'ContraseÃ±a',
	'user_active' => 'El usuario estÃ¡ activo',
	'user_group' => 'Grupo de usuarios',
	'user_email' => 'Email del usuario',
	'user_web_site' => 'PÃ¡gina web del usuario',
	'create_new_user' => 'Crear nuevo usuario',
	'user_location' => 'Localidad del usuario',
	'user_interests' => 'Intereses del usuario',
	'user_occupation' => 'OcupaciÃ³n del usuario',
	'latest_upload' => 'Ãºltimos uploads', //cpg1.3.0
	'never' => 'nunca', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
	'title' => 'Cambiar tamaÃ±o a las imÃ¡genes',
	'what_it_does' => 'QuÃ© hace',
	'what_update_titles' => 'Actualiza los nombres de fichero',
	'what_delete_title' => 'Borra los tÃ­tulos',
	'what_rebuild' => 'Vuelve a crear los thumbnails y otros tamaÃ±os de las imÃ¡genes',
	'what_delete_originals' => 'Borra las imÃ¡genes originales reemplazÃ¡ndolas con versiones de nuevo tamaÃ±o',
	'file' => 'Fichero',
	'title_set_to' => 'tÃ­tulo a poner',
	'submit_form' => 'enviar',
	'updated_succesfully' => 'actualizado con Ã©xito',
	'error_create' => 'ERROR al crear',
	'continue' => 'Procesar mÃ¡s imÃ¡genes',
	'main_success' => 'El fichero %s ha sido usado como imagen principal con Ã©xito',
	'error_rename' => 'Error renombrando %s a %s',
	'error_not_found' => 'No se encuentra el fichero %s',
	'back' => 'volver al inicio',
	'thumbs_wait' => 'Actualizando thumbnails y/o tamaÃ±os de imÃ¡genes, por favor espere...',
	'thumbs_continue_wait' => 'Continuando la actualizaciÃ³n de thumbnails y/o tamaÃ±os de imÃ¡genes...',
	'titles_wait' => 'Actualizando tÃ­tulos, por favor espere...',
	'delete_wait' => 'Borrando tÃ­tulos, por favor espere...',
	'replace_wait' => 'Borrando originales y reemplazÃ¡ndolos con las imÃ¡genes de nuevo tamaÃ±o, por favor espere...',
	'instruction' => 'Instrucciones rÃ¡pidas',
	'instruction_action' => 'Selecionar acciÃ³n',
	'instruction_parameter' => 'Elegir los parÃ¡metros',
	'instruction_album' => 'Seleccionar el album',
	'instruction_press' => 'Pulsar %s',
	'update' => 'Actualizar thumbs y/o tamaÃ±os de imÃ¡genes',
	'update_what' => 'QuÃ© debe ser actualizado',
	'update_thumb' => 'Solo thumbnails',
	'update_pic' => 'Solo tamaÃ±os de imÃ¡genes',
	'update_both' => 'Thumbnails y tamaÃ±os de imÃ¡genes (ambos)',
	'update_number' => 'NÃºmero de imÃ¡genes procesadas por cada click',
	'update_option' => '(Prueba a poner un nÃºmero menor si experimentas problemas de timeout)',
	'filename_title' => 'Fichero &rArr; TÃ­tulo del fichero',
	'filename_how' => 'CÃ³mo debe ser el fichero modificado',
	'filename_remove' => 'Quitar .jpg del final y reemplazar _ (underscore) con espacios',
	'filename_euro' => 'Cambiar 2003_11_23_13_20_20.jpg a 23/11/2003 13:20',
	'filename_us' => 'Cambiar 2003_11_23_13_20_20.jpg a 11/23/2003 13:20',
	'filename_time' => 'Cambiar 2003_11_23_13_20_20.jpg a 13:20',
	'delete' => 'Borrar tÃ­tulos de ficheros o imÃ¡genes de tamaÃ±o original',
	'delete_title' => 'Borrar tÃ­tulos de ficheros',
	'delete_original' => 'Borrar imÃ¡genes de tamaÃ±o original',
	'delete_replace' => 'Borra las imÃ¡genes originales, reemplazÃ¡ndolas con otras de tamaÃ±o nuevo',
	'select_album' => 'Selecciona album',
	'delete_orphans' => 'Borrar comentarios huÃ©rfanos (funciona en todos los albums)', //cpg1.3.0
	'orphan_comment' => 'comentarios huÃ©rfanos encontrados', //cpg1.3.0
	'delete' => 'Borrar', //cpg1.3.0
	'delete_all' => 'Borrar todos', //cpg1.3.0
	'comment' => 'Comentario: ', //cpg1.3.0
	'nonexist' => 'asociado a un fichero no existente # ', //cpg1.3.0
	'phpinfo' => 'Mostrar phpinfo', //cpg1.3.0
	'update_db' => 'Actualizar base de datos', //cpg1.3.0
	'update_db_explanation' => 'Si has reemplazado los ficheros de coppermine, aÃ±adido modificaciones o actualizado de una versiÃ³n previa de coppermine, deberÃ­as ejecutar la actualizaciÃ³n de base de datos. Esta acciÃ³n crearÃ¡ las tablas necesarias y/o valores de configuraciÃ³n en la base de datos de  coppermine.', //cpg1.3.0
);

?>
