<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.3.0                                            //
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
// ENCODING CHECK; SHOULD BE YEN BETA MU: ¥ ß µ
// ------------------------------------------------------------------------- //
// $Id: spanish.php,v 1.7 2004/12/29 23:03:46 chtito Exp $
// ------------------------------------------------------------------------- //

// info about translators and translated language
$lang_translation_info = array(
'lang_name_english' => 'Spanish',  
'lang_name_native' => 'Español',
'lang_country_code' => 'es', 
'trans_name'=> 'Daniel Villoldo (Grumpywolf)', //the name of the translator - can be a nickname
'trans_email' => 'daniel@grumpywolf.net', //translator's email address (optional)
'trans_website' => 'http://grumpywolf.net/', //translator's website (optional)
'trans_date' => '2004-03-22', //the date the translation was created / last modified
);

$lang_charset = 'iso-8859-1';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab');
$lang_month = array('Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic');

// Some common strings
$lang_yes = 'Si';
$lang_no  = 'No';
$lang_back = 'ATRÁS';
$lang_continue = 'CONTINUAR';
$lang_info = 'Información';
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
	'random' => 'Imágenes Al azar',
	'lastup' => 'Últimas imágenes',
	'lastalb'=> 'Últimos albums modificados',
	'lastcom' => 'Últimos comentarios',
	'topn' => 'Más vistas',
	'toprated' => 'Más valoradas',
	'lasthits' => 'Últimas vistas',
	'search' => 'Resultado de la búsqueda',
	'favpics'=> 'Favoritos'
);

$lang_errors = array(
	'access_denied' => 'No tienes permisos para acceder a esta página.',
	'perm_denied' => 'No tienes permisos para realizar esta operación.',
	'param_missing' => 'Llamada a Script sin los parámetros requeridos.',
	'non_exist_ap' => '¡El album/fichero seleccionado no existe!',
	'quota_exceeded' => 'Cuota de disco excedida<br /><br />Tienes una cuota de disco de [quota]K, tus archivos actualmente ocupan [space]K, y añadiendo este archivo excederías la cuota.',
	'gd_file_type_err' => 'Cuando se usa la librería de imagen GD solamente están permitidos los tipos JPEG y PNG.',
	'invalid_image' => 'La imagen que has añadido está corrupta o no puede ser tratada por la librería GD.',
	'resize_failed' => 'Incapaz de crear thumbnail o imagen de tamaño reducido.',
	'no_img_to_display' => 'Ninguna imagen que enseñar.',
	'non_exist_cat' => 'La categoría seleccionada no existe.',
	'orphan_cat' => 'Una categoría no tiene padre, ejecuta la utilidad de categorías para corregir el problema.',
	'directory_ro' => 'El directorio \'%s\' no tiene permisos de escritura, los archivos no pueden ser borrados.',
	'non_exist_comment' => 'El comentario seleccionado no existe.',
	'pic_in_invalid_album' => '¿¡El archivo está en un album que no existe (%s)!?',
	'banned' => 'Actualmente estás expulsado respecto al uso de esta web.',
	'not_with_udb' => 'Esta función está desactivada en Coppermine porque está integrada con un software de foros. Lo que fuese que estás intentando hacer no está soportado en esta configuración, o la función debe ser manejada por el software de foros.',
	'offline_title' => 'Desactivada', //cpg1.3.0
	'offline_text' => 'La galería está actualmente desactivada, por poco tiempo - ¡vuelve pronto!', //cpg1.3.0
	'ecards_empty' => 'Actualmente no hay registro de postales para mostrar. ¡Chequea que has activado guardar las postales en la configuración!', //cpg1.3.0
	'action_failed' => 'Acción no realizada.  Coppermine no es capaz de procesar tu petición.', //cpg1.3.0
	'no_zip' => 'Las librerías necesarias para procesar ficheros ZIP no están disponibles. Contacta con el administrador de este álbum.', //cpg1.3.0
	'zip_type' => 'No tienes permisos para añadir ficheros ZIP.', //cpg1.3.0
);

$lang_bbcode_help = 'Los siguientes códigos te pueden ser de utilidad: <li>[b]<b>Negrita</b>[/b]</li> <li>[i]<i>Itálica</i>[/i]</li> <li>[url=http://tusitio.com/]Texto de Web[/url]</li> <li>[email]usuario@dominio.com[/email]</li>'; //cpg1.3.0

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
	'alb_list_title' => 'Ir a la lista de albums',
	'alb_list_lnk' => 'Lista de albums',
	'my_gal_title' => 'Ir a mi galería personal',
	'my_gal_lnk' => 'Mi galería',
	'my_prof_lnk' => 'Mi perfil de usuario',
	'adm_mode_title' => 'Ir a modo administrador',
	'adm_mode_lnk' => 'Modo administrador',
	'usr_mode_title' => 'Ir a modo usuario',
	'usr_mode_lnk' => 'Modo usuario',
	'upload_pic_title' => 'Añadir archivo en un album',
	'upload_pic_lnk' => 'Añadir fichero',
	'register_title' => 'Crear un usuario',
	'register_lnk' => 'Registrarse',
	'login_lnk' => 'Login',
	'logout_lnk' => 'Logout',
	'lastup_lnk' => 'Últimos archivos',
	'lastcom_lnk' => 'Últimos comentarios',
	'topn_lnk' => 'Más vistos',
	'toprated_lnk' => 'Más valorados',
	'search_lnk' => 'Buscar',
	'fav_lnk' => 'Mis favoritos',
	'memberlist_title' => 'Mostrar lista de miembros', //cpg1.3.0
	'memberlist_lnk' => 'Lista de miembros', //cpg1.3.0
	'faq_title' => 'Preguntas frecuentes sobre la galería de imágenes &quot;Coppermine&quot;', //cpg1.3.0
	'faq_lnk' => 'FAQ', //cpg1.3.0
);

$lang_gallery_admin_menu = array(
	'upl_app_lnk' => 'Aprobar uploads',
	'config_lnk' => 'Config',
	'albums_lnk' => 'Albums',
	'categories_lnk' => 'Categorías',
	'users_lnk' => 'Usuarios',
	'groups_lnk' => 'Grupos',
	'comments_lnk' => 'Comentarios',
	'searchnew_lnk' => 'Añadir ficheros (Batch)',
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
	'category' => 'Categoría',
	'albums' => 'Albums',
	'pictures' => 'Ficheros',
);

$lang_album_list = array(
	'album_on_page' => '%d albums en %d página(s)'
);

$lang_thumb_view = array(
	'date' => 'FECHA',
	//Sort by filename and title
	'name' => 'NOMBRE',
	'title' => 'TÍTULO',
	'sort_da' => 'Ordenado por fecha ascendente',
	'sort_dd' => 'Ordenado por fecha descendente',
	'sort_na' => 'Ordenado por nombre ascendente',
	'sort_nd' => 'Ordenado por nombre descendente',
	'sort_ta' => 'Ordenado por título ascendente',
	'sort_td' => 'Ordenado por título descendente',
	'download_zip' => 'Descargar como fichero Zip', //cpg1.3.0
	'pic_on_page' => '%d archivos en %d página(s)',
	'user_on_page' => '%d usuarios en %d página(s)',
);

$lang_img_nav_bar = array(
	'thumb_title' => 'Volver al índice del album',
	'pic_info_title' => 'Mostrar/ocultar información del fichero',
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
	'rating' => '(valoración actual : %s / 5 con %s votos)',
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
	CRITICAL_ERROR => 'Error crítico',
	'file' => 'Fichero: ',
	'line' => 'Línea: ',
);

$lang_display_thumbnails = array(
	'filename' => 'Fichero: ',
	'filesize' => 'Tamaño: ',
	'dimensions' => 'Dimensiones: ',
	'date_added' => 'Fecha de alta: ',
);

$lang_get_pic_data = array(
	'n_comments' => '%s comentarios',
	'n_views' => '%s veces vista',
	'n_votes' => '(%s votos)'
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Información de Debug', //cpg1.3.0
  'select_all' => 'Seleccionar Todo', //cpg1.3.0
  'copy_and_paste_instructions' => 'Si vas a pedir ayuda en el foro de soporte de coppermine, copia y pega esta información de debug en tu mensaje. Asegúrate de reemplazar cualquier contraseña de la consulta con *** (asteriscos) antes de enviarlo.', //cpg1.3.0
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
	'alb_need_name' => '¡Los albums deben tener un nombre!', //js-alert
	'confirm_modifs' => '¿Estás seguro de querer aplicar las modificaciones?', //js-alert
	'no_change' => '¡No se hizo ningún cambio!', //js-alert
	'new_album' => 'Nuevo álbum',
	'confirm_delete1' => '¿Estás seguro de querer borrar este álbum?', //js-alert
	'confirm_delete2' => '\n¡Todos las archivos y comentarios que contiene se perderán!', //js-alert
	'select_first' => 'Selecciona un álbum primero',
	'alb_mrg' => 'Administrador de Albums',
	'my_gallery' => '* Mi galería *',
	'no_category' => '* Sin categoría *',
	'delete' => 'Borrar',
	'new' => 'Nuevo',
	'apply_modifs' => 'Aplicar modificaciones',
	'select_category' => 'Seleccionar categoría',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
	'miss_param' => '¡Los parámetros requeridos para la operación: \'%s\' no han sido suministrados!',
	'unknown_cat' => 'La categoría seleccionada no existe en la base da datos',
	'usergal_cat_ro' => '¡Las categorías de galerías de usuario no pueden ser borradas!',
	'manage_cat' => 'Organizador de categorías',
	'confirm_delete' => 'Estás seguro de querer BORRAR esta catagoría',
	'category' => 'Categoría',
	'operations' => 'Operaciones',
	'move_into' => 'Mover hacia',
	'update_create' => 'Modificar/Crear categoría',
	'parent_cat' => 'Categoría padre',
	'cat_title' => 'Título de la categoría',
	'cat_thumb' => 'Thumbnail de la categoría', //cpg1.3.0
	'cat_desc' => 'Descripción de la categoría',
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
	'title' => 'Configuración',
	'restore_cfg' => 'Restaurar valores por defecto',
	'save_cfg' => 'Guardar la nueva configuración',
	'notes' => 'Notas',
	'info' => 'Información',
	'upd_success' => 'La configuración de Coppermine ha sido actualizada',
	'restore_success' => 'Valores por defecto de Coppermine restaurados',
	'name_a' => 'Ascendente por nombre',
	'name_d' => 'Descendente por nombre',
	'title_a' => 'Ascendente por título',
	'title_d' => 'Descendente por título',
	'date_a' => 'Ascendente por fecha',
	'date_d' => 'Descendente por fecha',
	'th_any' => 'Máximo alto/ancho',
	'th_ht' => 'Altura',
	'th_wd' => 'Anchura',
	'label' => 'etiqueta', //cpg1.3.0
	'item' => 'gráfico', //cpg1.3.0
	'debug_everyone' => 'Para todos', //cpg1.3.0
	'debug_admin' => 'Admin solamente', //cpg1.3.0
        );

if (defined('CONFIG_PHP')) $lang_config_data = array(
	'Parámetros generales',
	array('Nombre de la galería', 'gallery_name', 0),
	array('Descripción de la galería', 'gallery_description', 0),
	array('Correo electrónico del administrador', 'gallery_admin_email', 0),
	array('Dirección web asociada a \'Ver más fotos\' en las e-cards', 'ecards_more_pic_target', 0),
	array('Galería desactivada', 'offline', 1), //cpg1.3.0
	array('Guardar postales', 'log_ecards', 1), //cpg1.3.0
	array('Permitir descargas de favoritos en formato ZIP', 'enable_zipdownload', 1), //cpg1.3.0

	'Idioma, temas (aspecto) y juego de caracteres',
	array('Idioma', 'lang', 5),
	array('Tema (Aspecto)', 'theme', 6),
	array('Mostrar lista de idiomas', 'language_list', 1), //cpg1.3.0
	array('Mostrar banderas de idiomas', 'language_flags', 8), //cpg1.3.0
	array('Mostrar &quot;reset&quot; en selección de idiomas', 'language_reset', 1), //cpg1.3.0
	array('Mostrar lista de temas (aspecto)', 'theme_list', 1), //cpg1.3.0
	array('Mostrar &quot;reset&quot; en selección de temas', 'theme_reset', 1), //cpg1.3.0
	array('Mostrar FAQ (preguntas frecuentes)', 'display_faq', 1), //cpg1.3.0
	array('Mostrar ayuda sobre bbcode', 'show_bbcode_help', 1), //cpg1.3.0
	array('Juego de caracteres', 'charset', 4), //cpg1.3.0

	'Aspecto de la lista de albums',
	array('Anchura de la tabla principal (pixels o %)', 'main_table_width', 0),
	array('Número de niveles de categorías a mostrar', 'subcat_level', 0),
	array('Número de albums a mostrar', 'albums_per_page', 0),
	array('Número de columnas en la lista de albums', 'album_list_cols', 0),
	array('Tamaño de los thumbnails en pixels', 'alb_list_thumb_size', 0),
	array('Contenido de la página principal', 'main_page_layout', 0),
	array('Mostrar thumbnails de albums de primer nivel en categorías','first_level',1),

	'Aspecto de la vista de thumbnails',
	array('Número de columnas en la página de thumbnails', 'thumbcols', 0),
	array('Número de filas en la página de thumbnails', 'thumbrows', 0),
	array('Máximo número de pestañas (tabs) a mostrar', 'max_tabs', 10),
	array('Mostrar file caption (además del título) debajo del thumbnail', 'caption_in_thumbview', 1),
	array('Mostrar número de veces vista debado del thumbnail', 'views_in_thumbview', 1), //cpg1.3.0
	array('Mostrar número de comentarios debajo del thumbnail', 'display_comment_count', 1),
	array('Mostrar nombre del usuario que añadió el archivo debajo del thumbnail', 'display_uploader', 1), //cpg1.3.0
	array('Orden por defecto de las imágenes', 'default_sort_order', 3),
	array('Minimo número de votos para que una foto aparezca el la lista de \'Más Valoradas\' list', 'min_votes_for_rating', 0), //cpg1.3.0

	'Vista de imágenes y configuración de comentarios',
	array('Anchura de la tabla donde mostrar la imagen (pixels o %)', 'picture_table_width', 0),
	array('Información del fichero visible por defecto', 'display_pic_info', 1),
	array('Filtrar palabras malsonantes en los comentarios', 'filter_bad_words', 1),
	array('Permitir emoticons en los comentarios', 'enable_smilies', 1),
	array('Permitir varios comentarios consecutivos del mismo usuario en una imagen (deshabilitar flood protection)', 'disable_comment_flood_protect', 1), //cpg1.3.0
	array('Máxima longitud para la descripción de una imagen', 'max_img_desc_length', 0),
	array('Máximo número de caracteres en una palabra', 'max_com_wlength', 0),
	array('Máximo número de lineas en un comentario', 'max_com_lines', 0),
	array('Máxima longitud de un comentario', 'max_com_size', 0),
	array('Mostrar tira de película', 'display_film_strip', 1),
	array('Número de objetos en tira de película', 'max_film_strip_items', 0),
	array('Notificar al administrador por email de los comentarios', 'email_comment_notification', 1), //cpg1.3.0
	array('Intervalo de tiempo entre imágenes en el Slideshow en milisegundos (1 segundo = 1000 milisegundos)', 'slideshow_interval', 0), //cpg1.3.0

	'Configuración de archivos y thumbnails',
	array('Calidad para los ficheros JPEG', 'jpeg_qual', 0),
	array('Máxima anchura o altura de los thumbnail <b>*</b>', 'thumb_width', 0),
	array('Usar dimensión ( anchura, altura o máximo para los thumbnail )<b>**</b>', 'thumb_use', 7),
	array('Crear imágenes de tamaño intermedio','make_intermediate',1),
	array('Máxima anchura o altura de las imágenes de tamaño intermedio <b>*</b>', 'picture_width', 0),
	array('Máximo tamaño de los ficheros añadidos por los usuarios (KB)', 'max_upl_size', 0),
	array('Máxima anchura o altura de las imágenes/videos añadidos (pixels)', 'max_upl_width_height', 0),

	'Configuración avanzada de archivos y thumbnails', //cpg1.3.0
	array('Mostrar icono de álbum privado a usuarios no registrados','show_private',1), //cpg1.3.0
	array('Caracteres prohibidos en los nombres de archivos', 'forbiden_fname_char',0), //cpg1.3.0
	//array('Extensiones admitidas al añadir archivos', 'allowed_file_extensions',0), //cpg1.3.0
 	array('Tipos de imágenes admitidas', 'allowed_img_types',0), //cpg1.3.0
	array('Tipos de archivos de video admitidos', 'allowed_mov_types',0), //cpg1.3.0
	array('Tipos de archivos de sonido admitidos', 'allowed_snd_types',0), //cpg1.3.0
	array('Tipos de documentos admitidos', 'allowed_doc_types',0), //cpg1.3.0
	array('Método para el reescalado de imágenes','thumb_method',2), //cpg1.3.0
	array('Ruta a la utilidad \'convert\' de ImageMagick (por ejemplo /usr/bin/X11/)', 'impath', 0), //cpg1.3.0
	//array('Tipos de archivo admitidos (solo válidos con ImageMagick)', 'allowed_img_types',0), //cpg1.3.0
	array('Comandos de línea para ImageMagick', 'im_options', 0), //cpg1.3.0
	array('Leer datos EXIF en los archivos JPEG', 'read_exif_data', 1), //cpg1.3.0
	array('Leer datos IPTC en los archivos JPEG', 'read_iptc_data', 1), //cpg1.3.0
	array('Directorio base de los albums <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0), //cpg1.3.0
	array('Directorio para los archivos de los usuarios <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0), //cpg1.3.0
	array('Prefijo para las imágenes intermedias <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0), //cpg1.3.0
	array('Prefijo para los thumbnails <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0), //cpg1.3.0
	array('Modo por defecto para los directorios', 'default_dir_mode', 0), //cpg1.3.0
	array('Modo por defecto para los archivos', 'default_file_mode', 0), //cpg1.3.0

	'Configuración de usuarios',
	array('Permitir el registro de nuevos usuarios', 'allow_user_registration', 1),
	array('Registro de usuarios requiere verificación de email', 'reg_requires_valid_email', 1),
	array('Notificar por email al administrador del registro de nuevos usuarios', 'reg_notify_admin_email', 1), //cpg1.3.0
	array('Permitir a dos usuarios tener el mismo email', 'allow_duplicate_emails_addr', 1),
	array('Los usuarios pueden tener albums privados (Nota: si cambias de \'si\' a \'no\' todos los albums privados que existan se convertirán en públicos)', 'allow_private_albums', 1), //cpg1.3.0
	array('Notificar al administrador de archivos añadidos esperando autorización', 'upl_notify_admin_email', 1), //cpg1.3.0
	array('Permitir a los usuarios validados ver la lista de miembros', 'allow_memberlist', 1), //cpg1.3.0

	'Campos extra para descripción de imágenes (dejar en blanco si no se usan)',
	array('Nombre del campo 1', 'user_field1_name', 0),
	array('Nombre del campo 2', 'user_field2_name', 0),
	array('Nombre del campo 3', 'user_field3_name', 0),
	array('Nombre del campo 4', 'user_field4_name', 0),
	
	'Configuración de cookies',
	array('Nombre de la cookie usada por el script (cuando se use junto con foros, tener cuidado de que sea diferente de la cookie de los foros)', 'cookie_name', 0),
	array('Path de la cookie usada por el script', 'cookie_path', 0),

	'Configuraciones de otros aspectos',
	array('Activar modo debug', 'debug_mode', 9), //cpg1.3.0
	array('Mostrar avisos en modo debug', 'debug_notice', 1), //cpg1.3.0

	'<br /><div align="left"><a name="notice1"></a>(*) Estos valores no deben ser cambiados si ya existen archivos en la base de datos.<br />
	<a name="notice2"></a>(**) Si se cambian estos valores, solamente afectará a los archivos que se añadan desde este momento, por lo que es recomendable no cambiarlos si ya hay imágenes en la galería. Puedes, sin embargo, hacer los cambios sobre imágenes existentes con la utilidad &quot;<a href="util.php">Cambiar tamaños</a>&quot; del menú de administración.</div><br />', //cpg1.3.0
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
  'ecard_by_sender_ip' => 'por dirección IP del remitente', //cpg1.3.0
  'ecard_by_recipient_name' => 'por nombre del destinatario', //cpg1.3.0
  'ecard_by_recipient_email' => 'por email del destinatario', //cpg1.3.0
  'ecard_number' => 'mostrando registros %s al %s de %s', //cpg1.3.0
  'ecard_goto_page' => 'ir a la página', //cpg1.3.0
  'ecard_records_per_page' => 'Registros por página', //cpg1.3.0
  'check_all' => 'Marcar todos', //cpg1.3.0
  'uncheck_all' => 'Desmarcar todos', //cpg1.3.0
  'ecards_delete_selected' => 'Borrar postales seleccionadas', //cpg1.3.0
  'ecards_delete_confirm' => '¿Estás seguro de querer borrar estos registros? ¡Marca la checkbox!', //cpg1.3.0
  'ecards_delete_sure' => 'Estoy seguro', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
	'empty_name_or_com' => 'Debes introducir tu nombre y un comentario',
	'com_added' => 'Tu comentario ha sido añadido',
	'alb_need_title' => '¡Debes de introducir un título para el album!',
	'no_udp_needed' => 'No se requiere ningún cambio',
	'alb_updated' => 'El album ha sido actualizado',
	'unknown_album' => 'El album seleccionado no existe o no tienes permisos para añadir fotos en este album',
	'no_pic_uploaded' => '¡Ningún fichero fue añadido!<br /><br />Si habías seleccionado una foto para añadir, comprueba que el servidor admite subir ficheros...',
	'err_mkdir' => '¡Fallo al crear el directorio %s!',
	'dest_dir_ro' => '¡El directorio destino %s no tiene permisos de escritura!',
	'err_move' => '¡Imposible mover %s a %s !',
	'err_fsize_too_large' => 'El fichero que quieres añadir es demasiago grande (el máximo permitido es de %s x %s)',
	'err_imgsize_too_large' => 'El fichero que quieres añadir es demasiado grande (el máximo permitido es de %s KB)',
	'err_invalid_img' => 'El fichero que quieres añadir no es una imagen válida',
	'allowed_img_types' => 'Puedes insertar solamente %s imágenes.',
	'err_insert_pic' => 'El fichero \'%s\' no puede ser dado de alta en el album ',
	'upload_success' => 'El fichero ha sido insertado correctamente<br /><br />Será visible tras la aprobación de los administradores.',
	'notify_admin_email_subject' => '%s - Notificación de fichero añadido', //cpg1.3.0
	'notify_admin_email_body' => 'Una imagen ha sido añadida por %s que necesita tu aprobación. Visita %s', //cpg1.3.0
	'info' => 'Información',
	'com_added' => 'Comentario añadido',
	'alb_updated' => 'Album actualizado',
	'err_comment_empty' => '¡El comentario está vacio!',
	'err_invalid_fext' => 'Solamente se admiten ficheros con las siguientes extensiones : <br /><br />%s.',
	'no_flood' => 'Perdona pero eres el autor/a del último comentario introducido para este archivo<br /><br />Puedes editar el comentario que has puesto si es que quieres modificarlo',
	'redirect_msg' => 'Estás siendo redirigido.<br /><br /><br />Pulsa \'CONTINUAR\' si la página no se refresca automáticamente',
	'upl_success' => 'El fichero se ha añadido correctamente',
	'email_comment_subject' => 'Comentario añadido en la Galería Coppermine', //cpg1.3.0
	'email_comment_body' => 'Alguien ha añadido un comentario en tu galería. Puedes verlo en', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
	'caption' => 'Título',
	'fs_pic' => 'imagen tamaño completo',
	'del_success' => 'borrado correctamente',
	'ns_pic' => 'imagen tamaño normal',
	'err_del' => 'no puede ser borrado',
	'thumb_pic' => 'thumbnail',
	'comment' => 'comentario',
	'im_in_alb' => 'imágenes en el album',
	'alb_del_success' => 'Album \'%s\' borrado',
	'alb_mgr' => 'Organizador de albums',
	'err_invalid_data' => 'Datos inválidos recibidos en \'%s\'',
	'create_alb' => 'Creando el album \'%s\'',
	'update_alb' => 'Actualizando el album \'%s\' con el título \'%s\' y el índice \'%s\'',
	'del_pic' => 'Borrar fichero',
	'del_alb' => 'Borrar album',
	'del_user' => 'Borrar usuario',
	'err_unknown_user' => '¡El usuario seleccionado no existe!',
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
	'confirm_del' => '¿Estás seguro de querer BORRAR este fichero? \\nLos comentarios serán también borrados.',
	'del_pic' => 'BORRAR ESTE FICHERO',
	'size' => '%s x %s pixels',
	'views' => '%s veces',
	'slideshow' => 'Slideshow',
	'stop_slideshow' => 'DETENER SLIDESHOW',
	'view_fs' => 'Pulsa aquí para ver la imagen a tamaño completo',
	'edit_pic' => 'Editar la descripción', //cpg1.3.0
	'crop_pic' => 'Recortar y Rotar', //cpg1.3.0
);

$lang_picinfo = array(
	'title' =>'Información del fichero',
	'Filename' => 'Nombre del fichero',
	'Album name' => 'Nombre del album',
	'Rating' => 'Valoración (%s votos)',
	'Keywords' => 'Palabras clave',
	'File Size' => 'Tamaño del fichero',
	'Dimensions' => 'Dimensiones',
	'Displayed' => 'Se ha visto',
	'Camera' => 'Cámara',
	'Date taken' => 'Fecha de la captura',
	'Aperture' => 'Apertura',
	'Exposure time' => 'Tiempo de exposición',
	'Focal length' => 'Longitud del foco',
	'Comment' => 'Comentario',
	'addFav'=>'Añadir a Favoritos',
	'addFavPhrase'=>'Favoritos',
	'remFav'=>'Quitar de Favoritos',
	'iptcTitle'=>'IPTC - Título', //cpg1.3.0
	'iptcCopyright'=>'IPTC - Copyright', //cpg1.3.0
	'iptcKeywords'=>'IPTC - Palabras clave', //cpg1.3.0
	'iptcCategory'=>'IPTC - Categoría', //cpg1.3.0
	'iptcSubCategories'=>'IPTC - Sub-Categorías', //cpg1.3.0
);

$lang_display_comments = array(
	'OK' => 'OK',
	'edit_title' => 'Editar el comentario',
	'confirm_delete' => '¿Estás seguro de querer borrar el comentario?',
	'add_your_comment' => 'Añadir un comentario',
	'name'=>'Nombre',
	'comment'=>'Comentario',
	'your_name' => 'Anónimo',
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
	'invalid_email' => '<b>Atención</b> : ¡dirección email incorrecta!',
	'ecard_title' => 'Una postal de %s para ti',
	'error_not_image' => 'Solo se pueden crear postales con imágenes.', //cpg1.3.0
	'view_ecard' => 'Si la imagen no se ve correctamente, pulsa en este enlace',
	'view_more_pics' => '¡Pulsa aquí para ver más imágenes!',
	'send_success' => 'La postal ha sido enviada',
	'send_failed' => 'Disculpa, pero el servidor no puede enviar la postal...',
	'from' => 'De',
	'your_name' => 'Tu nombre',
	'your_email' => 'Tu dirección de email',
	'to' => 'A',
	'rcpt_name' => 'Nombre del destinatario',
	'rcpt_email' => 'Dirección email del destinatario',
	'greetings' => 'Título del mensaje',
	'message' => 'Mensaje',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
	'pic_info' => 'Información',
	'album' => 'Album',
	'title' => 'Título',
	'desc' => 'Descripción',
	'keywords' => 'Palabras clave',
	'pic_info_str' => '%sx%s - %sKB - %s veces vista - %s votos',
	'approve' => 'Aprobar el fichero',
	'postpone_app' => 'Postponer el aprobado',
	'del_pic' => 'Borrar el fichero',
	'read_exif' => 'Leer los datos EXIF de nuevo', //cpg1.3.0
	'reset_view_count' => 'Poner a cero el contador de veces que se ha visto',
	'reset_votes' => 'Poner a cero los votos',
	'del_comm' => 'Borrar comentarios',
	'upl_approval' => 'Aprobar ficheros añadidos',
	'edit_pics' => 'Editar imágenes',
	'see_next' => 'Ver los ficheros siguientes',
	'see_prev' => 'Ver los ficheros anteriores',
	'n_pic' => '%s fichero/s',
	'n_of_pic_to_disp' => 'Número de ficheros a mostrar',
	'apply' => 'Validar los cambios',
	'crop_title' => 'Editor de Imágenes Coppermine', //cpg1.3.0
	'preview' => 'Previsualizar', //cpg1.3.0
	'save' => 'Guardar imagen', //cpg1.3.0
	'save_thumb' =>'Guardar como thumbnail', //cpg1.3.0
	'sel_on_img' =>'¡La selección tiene que estar enteramente en la imagen!', //js-alert //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Preguntas Frecuentes', //cpg1.3.0
  'toc' => 'Índice de contenidos', //cpg1.3.0
  'question' => 'Pregunta: ', //cpg1.3.0
  'answer' => 'Respuesta: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'Cuestiones Generales', //cpg1.3.0
  array('¿Porqué debería registrarme?', 'El registro puede o no ser requerido por el administrador. El registro facilita características adicionales tales como poder añadir ficheros, tener una lista de favoritos, puntuar imágenes, añadir comentarios, etc.', 'allow_user_registration', '0'), //cpg1.3.0
  array('¿Cómo puedo registrarme?', 'Pulsa en &quot;Registrarse&quot; y rellena todos los campos requeridos (y los opcionales si quieres también).<br />Si el administrador tiene activada la validación de email ,tras completar y enviar los datos recibirás un mensaje en la dirección que has indicado durante el registro, en el cual se explica cómo activar tu cuenta (solo pulsando un enlace). Hasta que no actives la cuenta no podrás validarte como usuario registrado.', 'allow_user_registration', '1'), //cpg1.3.0
  array('¿Cómo puedo hacer login (validarme)?', 'Pulsa en &quot;Login&quot;, rellena tu nombre de usuario y contraseña, y marca &quot;Recordarme&quot; con ello consigues estar validado la próxima vez que nos visites.<br /><b>IMPORTANTE: Las cookies deben estar activadas en el navegador y la cookie de este sitio no debe ser borrada si quieres que funcione la opción &quot;Recordarme&quot;.</b>', 'offline', 0), //cpg1.3.0
  array('¿Porqué no puedo hacer login?', '¿Te has registrado y pulsado en el enlace del email de confirmación que se te envió?. Esto debería haber activado tu cuenta. Si no es así, contacta con el administrador del sistema.', 'offline', 0), //cpg1.3.0
  array('¿Qué pasa si olvido mi contraseña?', 'Si la web tiene opción de &quot;He olvidado mi contraseña&quot; tendrás que acceder a la recuperación de la misma. Si no, deberás contactar con el administrador para que te cree una nueva contraseña.', 'offline', 0), //cpg1.3.0
  //array('¿Qué pasa si he cambiado mi dirección de email?', 'Simplemente haz login y cambia tu dirección de email desde &quot;Mi Perfil&quot;', 'offline', 0), //cpg1.3.0
  array('¿Cómo puedo guardar una imagen en &quot;Mis Favoritos&quot;?', 'Pulsa primero en la imagen y luego el icono de &quot;mostrar información de fichero&quot; (<img src="images/info.gif" width="16" height="16" border="0" alt="Mostrar información de fichero" />); baja hasta donde ha aparecido dicha información y pulsa en &quot;Añadir a Favoritos&quot;.<br />El administrador podría tener activado &quot;mostrar información de fichero&quot; por defecto.<br />IMPORTANTE: Las cookies deben estar activadas en el navegador y la cookie de esta web no debe ser borrada.', 'offline', 0), //cpg1.3.0
  array('¿Cómo puedo valorar una imagen?', 'Pulsa en el thumbnail de la imagen, mira debajo de ella y elige la puntuación.', 'offline', 0), //cpg1.3.0
  array('¿Cómo puedo enviar un comentario a una imagen?', 'Pulsa en el thumbnail de la imagen y mira debajo de ella. Ahí puedes insertar tu comentario.', 'offline', 0), //cpg1.3.0
  array('¿Cómo puedo añadir una imagen?', 'Pulsa en &quot;Añadir fichero&quot; y elige el album en el que quieres añadir la imagen, pulsa &quot;Browse&quot; y elige la imagen que quieres de tu disco duro, pulsando el botón &quot;Abrir&quot; (añade título y descripción si quieres), pulsando finalmente en &quot;Añadir nuevo fichero&quot;', 'allow_private_albums', 0), //cpg1.3.0
  array('¿En dónde puedo añadir una imagen?', 'Puedes añadir una imagen a uno de tus albums de &quot;Mi galería&quot;. El Administrador puede haber permitido el añadir imágenes en uno o más de los albums de la Galería principal.', 'allow_private_albums', 0), //cpg1.3.0
  array('¿Qué tipos y tamaños de imágenes puedo añadir?', 'Los tipos (jpg,gif,..etc.) y tamaños los decide el administrador.', 'offline', 0), //cpg1.3.0
  array('¿Qué es &quot;Mi galería&quot;?', '&quot;Mi galería&quot; es una galería personal en la que el usuario puede añadir nuevos ficheros, así como configurarla.', 'allow_private_albums', 0), //cpg1.3.0
  array('¿Cómo puedo crear,renombrar o borrar un album en &quot;Mi galería&quot;?', 'Debes entrar en &quot;Modo administrador&quot;<br />Pulsa en &quot;Crear/ordenar albums&quot; y luego en &quot;Nuevo&quot;. Cambia &quot;Nuevo álbum&quot; por el nombre que quieras.<br />Puedes también renombrar cualquiera de los albums de tu galería.<br />Pulsa &quot;Aplicar modificaciones&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('¿Cómo puedo modificar y restringir a otros usuarios el ver mi albums?', 'Debes entrar en &quot;Modo administrador&quot;<br />Pulsa en &quot;Modificar mis albums&quot;. En la barra de &quot;Modificar album&quot;, elige el album que quieres modificar.<br />Desde aqui puedes cambiar el nombre, descripción, imagen thumbnail, y restringir quién puede ver o poner comentarios en el album.<br />Pulsa &quot;Modificar album&quot; para guardar los cambios.', 'allow_private_albums', 0), //cpg1.3.0
  array('?Cómo puedo ver galerías de otros usuarios?', 'Vete a la &quot;Lista de álbums&quot; y elige &quot;Galerías de usuario&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('¿Qué son las cookies?', 'Las cookies son unos pequeños textos que se envían desde la web y se almacenan en tu ordenador.<br />Normalmente las cookies sirven para "recordar" al usuario cuando éste vuelva de nuevo, y para otros varios usos.', 'offline', 0), //cpg1.3.0
  array('¿Dónde puedo conseguir este programa para ponerlo en mi web?', 'Coppermine es una Galería Multimedia gratuíta, publicada bajo licencia GNU GPL. Está repleta de características y ha sido adaptada a distintas plataformas y sistemas de contenido. Visita la <a href="http://coppermine.sf.net/">Web de Coppermine</a> para saber más y poder descargar el programa.', 'offline', 0), //cpg1.3.0

  'Navegando por Coppermine', //cpg1.3.0
  array('¿Qué es la &quot;Lista de álbums&quot;?', 'Desde aquí puedes ver la galería completa, con un enlace a cada categoría. Los thumbnails pueden ser enlaces directos a las categorías.', 'offline', 0), //cpg1.3.0
  array('¿Qué es &quot;Mi galería&quot;?', 'Esta característica permite al usuario crear su propia galería y añadir, borrar o modificar albums así como añadir nuevos ficheros en ellos.', 'allow_private_albums', 0), //cpg1.3.0
  array('¿Cuáles son las diferencias entre &quot;Modo adminsitrador&quot; y &quot;Modo usuario&quot;?', 'Cuando se está en modo administrador, el usuario puede modificar su galería (así como otras si se lo ha permitido el administrador).', 'allow_private_albums', 0), //cpg1.3.0
  array('¿Qué es &quot;Añadir fichero&quot;?', 'Esta característica permite al usuario añadir una imagen (tamaño y tipos definidos por el administrador) en una galería seleccionada por el usuario o bien por el administrator.', 'allow_private_albums', 0), //cpg1.3.0
  array('¿Qué es &quot;Últimos archivos&quot;?', 'Muestra los últimos ficheros / imágenes añadidos a la galería.', 'offline', 0), //cpg1.3.0
  array('¿Qué es &quot;Últimos comentarios&quot;?', 'Muestra los últimos comentarios añadidos por los usuarios, junto con las imágenes comentadas.', 'offline', 0), //cpg1.3.0
  array('¿Qué es &quot;Más vistos&quot;?', 'Muestra las imágenes más vistas por todos los usuarios (registrados y visitantes).', 'offline', 0), //cpg1.3.0
  array('¿Qué es &quot;Más valorados&quot;?', 'Muestra las imágenes mejor valoradas por los usuarios, junto con la media de puntuación (por ejemplo: cinco usuarios han dado un <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: la imagen tendrá una puntuación media de <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ; si cinco usuarios han puntuado de 1 a 5 (1,2,3,4,5) la media resultante será <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />Las puntuaciones van desde <img src="images/rating5.gif" width="65" height="14" border="0" alt="mejor" /> (mejor) hasta <img src="images/rating0.gif" width="65" height="14" border="0" alt="peor" /> (peor).', 'offline', 0), //cpg1.3.0
  array('¿Qué es &quot;Mis favoritos&quot;?', 'Esta característica permite a un usuario guardar una imagen favorita en la cookie que es enviada a su ordenador.', 'offline', 0), //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Recuperación de contraseña', //cpg1.3.0
  'err_already_logged_in' => '¡Ya estás validado como usuario!', //cpg1.3.0
  'enter_username_email' => 'Introduce tu nombre de usuario o dirección email', //cpg1.3.0
  'submit' => 'buscar contraseña', //cpg1.3.0
  'failed_sending_email' => '¡El email con la contraseña no ha podido ser enviado!', //cpg1.3.0
  'email_sent' => 'Se ha enviado un email con tu nombre de usuario y contraseña a %s', //cpg1.3.0
  'err_unk_user' => '¡El usuario seleccionado no existe!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - Recuperación de contraseña', //cpg1.3.0
  'passwd_reminder_body' => 'Has solicitado la recuperación de contraseña del siguiente usuario:
Usuario: %s
Contraseña: %s
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
	'can_post_com' => 'Pueden añadir comentarios',
	'can_upload' => 'Pueden añadir ficheros',
	'can_have_gallery' => 'Pueden tener galerías personales',
	'apply' => 'Validar los cambios',
	'create_new_group' => 'Crear nuevo grupo',
	'del_groups' => 'Borrar el/los grupo(s) seleccionados',
	'confirm_del' => '¡Atención, cuando borras un grupo, los usuarios que pertenecen a ese grupo serán transferidos al grupo \'Registered\'!\n\n¿Deseas continuar?',
	'title' => 'Configurar grupos de usuarios',
	'approval_1' => 'Aprobación album público (1)',
	'approval_2' => 'Aprobación album privado (2)',
	'upload_form_config' => 'Configuración de formulario de upload', //cpg1.3.0
	'upload_form_config_values' => array( 'Uploads de un solo fichero solamente', 'Upload de múltiples ficheros solamente', 'URI uploads solamente', 'ZIP uploads solamente', 'Ficheros-URI', 'Ficheros-ZIP', 'URI-ZIP', 'Ficheros-URI-ZIP'), //cpg1.3.0
	'custom_user_upload'=>'¿El usuario puede definir el número de cajas de upload?', //cpg1.3.0
	'num_file_upload'=>'Número máximo/exacto de cajas de upload', //cpg1.3.0
	'num_URI_upload'=>'Número máximo/exacto de cajas de URI upload', //cpg1.3.0
	'note1' => '<b>(1)</b> Añadir fotos en un album público requerirá aprobación de los administradores',
	'note2' => '<b>(2)</b> Añadir fotos en un album que pertenece al asuario requerirá aprobación de los administradores',
	'notes' => 'Notas'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
	'welcome' => '¡Bienvenido!'
);

$lang_album_admin_menu = array(
	'confirm_delete' => '¿Estás seguro de querer BORRAR este album ? \\nTodas las fotos y comentarios serán también borrados.',
	'delete' => 'Borrar',
	'modify' => 'Modificar',
	'edit_pics' => 'Editar imágenes',
);

$lang_list_categories = array(
	'home' => 'Inicio',
	'stat1' => '<b>[pictures]</b> ficheros en <b>[albums]</b> albums y <b>[cat]</b> categorías con <b>[comments]</b> comentarios, vistas <b>[views]</b> veces',
	'stat2' => '<b>[pictures]</b> ficheros en <b>[albums]</b> albums, vistas <b>[views]</b> veces',
	'xx_s_gallery' => 'Galería de %s',
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
	'last_added' => ', último añadido el %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
	'login' => 'Login',
	'enter_login_pswd' => 'Introduce nombre de usuario y contraseña',
	'username' => 'Nombre de usuario',
	'password' => 'Contraseña',
	'remember_me' => 'Recordarme',
	'welcome' => 'Bienvenido %s ...',
	'err_login' => '*** Login incorrecto. Inténtalo de nuevo ***',
	'err_already_logged_in' => '¡Ya estabas validado en el sistema!',
	'forgot_password_link' => 'He olvidado mi contraseña', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
	'logout' => 'Salir',
	'bye' => 'Hasta otra, %s ...',
	'err_not_loged_in' => '¡No estás validado en el sistema!',
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
	'general_settings' => 'Configuración general',
	'alb_title' => 'Título del album',
	'alb_cat' => 'Categoría del album',
	'alb_desc' => 'Descripción del album',
	'alb_thumb' => 'Thumbnail del album',
	'alb_perm' => 'Permisos para este album',
	'can_view' => 'Este album puede ser visto por',
	'can_upload' => 'Los visitantes pueden añadir fotos',
	'can_post_comments' => 'Los visitantes pueden añadir comentarios',
	'can_rate' => 'Los visitantes pueden valorar las fotos',
	'user_gal' => 'Galería de usuario',
	'no_cat' => '* Sin categoría *',
	'alb_empty' => 'El album está vacío',
	'last_uploaded' => 'Ultima imagen añadida',
	'public_alb' => 'Todos (album público)',
	'me_only' => 'Solamente yo',
	'owner_only' => 'Solamente el dueño del album (%s)',
	'groupp_only' => 'Miembros del grupo \'%s\'',
	'err_no_alb_to_modify' => 'No puedes modificar ningún album en la base de datos.',
	'update' => 'Modificar album',
	'notice1' => '(*) dependiendo de la configuración de %sgrupos%s', //cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
	'already_rated' => 'Perdona pero ya has votado anteriormente a este fichero',
	'rate_ok' => 'Tu voto ha sido contabilizado',
	'forbidden' => 'No puedes votar a tus propias imágenes.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
A pesar de que los administradores de {SITE_NAME} intentarán eliminar o editar cualquier material desagradable tan pronto como puedan, resulta imposible revisar todos los envíos que se realizan. Por lo tanto debes tener en cuenta que todos los envíos hechos hacia esta web expresan el punto de vista y opiniones de sus autores y no los de los administradores o webmasters (excepto los añadidos por ellos mismos).<br />
<br />
Usted acuerda no añadir ningún material abusivo, obsceno, vulgar, escandaloso, odioso, amenazador, de orientación sexual, o ningún otro que pueda violar cualquier ley aplicable. Usted está de acuerdo con que el webmaster, el administrador y los asesores de { SITE_NAME } tienen el derecho de quitar o de corregir cualquier contenido en cualquier momento si lo consideran necesario. Como usuario, accede a que cualquier información añadida será almacenada en una base de datos. Asi mismo, esta información no será divulgada a terceros sin su consentimiento. El webmaster y el administrador no se pueden hacer responsables de ningún intento de destrucción de la base de datos que pueda conducir a la pérdida de la misma.<br />
<br />
Este sitio utiliza cookies para almacenar la información en su ordenador. Estas cookies sirven para mejorar la navegación en este sitio. La dirección de email se utiliza solamente para confirmar sus detalles y contraseña del registro.<br />
<br />
Pulsando 'estoy de acuerdo' expresas tu conformidad con estas condiciones.
EOT;

$lang_register_php = array(
	'page_title' => 'Registro de nuevo usuario',
	'term_cond' => 'Términos y condiciones',
	'i_agree' => 'Estoy de acuerdo',
	'submit' => 'Enviar solicitud de registro',
	'err_user_exists' => 'El nombre de usuario elegido ya existe, por favor elige otro diferente',
	'err_password_mismatch' => 'Las dos contraseñas no son iguales, por favor vuelve a introducirlas',
	'err_uname_short' => 'El nombre de usuario debe ser de 2 caracteres de longitud como mínimo',
	'err_password_short' => 'La contraseña debe ser de 2 caracteres de longitud como mínimo',
	'err_uname_pass_diff' => 'El nombre de usuario y la contraseña deben ser diferentes',
	'err_invalid_email' => 'La dirección de email no es válida',
	'err_duplicate_email' => 'Otro usuario se ha registrado anteriormente con la dirección de email suministrada',
	'enter_info' => 'Introduce la información de registro',
	'required_info' => 'Información requerida',
	'optional_info' => 'Información opcional',
	'username' => 'Nombre de usuario',
	'password' => 'Contraseña',
	'password_again' => 'Reescribir contraseña',
	'email' => 'Email',
	'location' => 'Localidad',
	'interests' => 'Intereses',
	'website' => 'Página web',
	'occupation' => 'Ocupación',
	'error' => 'ERROR',
	'confirm_email_subject' => '%s - Confirmación de registro',
	'information' => 'Información',
	'failed_sending_email' => '¡El email de confirmación de registro no ha podido ser enviado!',
	'thank_you' => 'Gracias por registrarte.<br /><br />Hemos enviado un email con información sobre la activación de tu cuenta a la dirección de email que nos has facilitado.',
	'acct_created' => 'Tu cuenta de usuario ha sido creada y ahora puedes acceder al sistema con tu nombre de usuario y contraseña',
	'acct_active' => 'Tu cuenta de usuario está ya activa y ahora puedes acceder al sistema con tu nombre de usuario y contraseña',
	'acct_already_act' => '¡Tu cuenta ya estaba activa!',
	'acct_act_failed' => '¡Esta cuenta no puede ser activada!',
	'err_unk_user' => '¡El usuario seleccionado no existe!',
	'x_s_profile' => 'Perfil de %s',
	'group' => 'Grupo',
	'reg_date' => 'Fecha de alta',
	'disk_usage' => 'Uso de disco',
	'change_pass' => 'Cambiar contraseña',
	'current_pass' => 'Contraseña actual',
	'new_pass' => 'Nueva contraseña',
	'new_pass_again' => 'Reescribir nueva contraseña',
	'err_curr_pass' => 'La contraseña actual es incorrecta',
	'apply_modif' => 'Guardar los cambios',
	'change_pass' => 'Cambiar mi contraseña',
	'update_success' => 'Tu perfil ha sido actualizado',
	'pass_chg_success' => 'Tu contraseña ha sido cambiada',
	'pass_chg_error' => 'Tu contraseña no ha sido cambiada',
	'notify_admin_email_subject' => '%s - Notificación de registro', //cpg1.3.0
	'notify_admin_email_body' => 'Un nuevo usuario se ha registrado en tu galería con el nombre "%s"', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
Gracias por registrarte en {SITE_NAME}

Tu nombre de usuario es: "{USER_NAME}"
Tu contraseña es: "{PASSWORD}"

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
	'n_comm_disp' => 'Número de comentarios a mostrar',
	'see_prev' => 'Ver el anterior',
	'see_next' => 'Ver el siguiente',
	'del_comm' => 'Borrar comentarios seleccionados',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
	0 => 'Buscar en toda la galería',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
	'page_title' => 'Buscar nuevos ficheros',
	'select_dir' => 'Selecciona directorio',
	'select_dir_msg' => 'Esta función te permite añadir de forma automática los ficheros que hayas subido a tu servidor mediante FTP.<br /><br />Selecciona el directorio donde has subido tus ficheros',
	'no_pic_to_add' => 'No hay ningún fichero para añadir',
	'need_one_album' => 'Necesitas al menos un album para utilizar esta función',
	'warning' => 'Atención',
	'change_perm' => '¡El script no puede escribir en este directorio, necesitas cambiar sus permisos a modo 755 o 777 antes de intentarlo de nuevo!',
	'target_album' => '<b>Colocar los ficheros del directorio &quot;</b>%s<b>&quot; en el album </b>%s',
	'folder' => 'Carpeta',
	'image' => 'Imagen',
	'album' => 'Album',
	'result' => 'Resultado',
	'dir_ro' => 'No se puede escribir. ',
	'dir_cant_read' => 'No se puede leer. ',
	'insert' => 'Añadiendo nuevos ficheros a la galería',
	'list_new_pic' => 'Listado de nuevos ficheros',
	'insert_selected' => 'Añadir los ficheros seleccionados',
	'no_pic_found' => 'No se encontró ningún fichero nuevo',
	'be_patient' => 'Por favor, se paciente, el script necesita tiempo para añadir los ficheros',
	'no_album' => 'ningún album seleccionado',  //cpg1.3.0
	'notes' =>  '<ul>'.
				'<li><b>OK</b> : significa que el fichero fue añadido sin problemas'.
				'<li><b>DP</b> : significa que el fichero es un duplicado y ya existe en la base de datos'.
				'<li><b>PB</b> : significa que el fichero no puede ser añadido, por favor comprueba la configaración y los permisos de los directorios donde están los ficheros'.
				'<li><b>NA</b> : significa que no has seleccionado un album en el que insertar los ficheros, pulsa \'<a href="javascript:history.back(1)">atrás</a>\' y selecciona un album. Si no dispones de album <a href="albmgr.php">crea uno primero</a></li>'.
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
	'ip_address' => 'Dirección IP',
	'expiry' => 'Caduca (en blanco es permanente)',
	'edit_ban' => 'Guardar cambios',
	'delete_ban' => 'Borrar',
	'add_new' => 'Añadir nueva expulsión',
	'add_ban' => 'Añadir',
	'error_user' => 'No se puede encontrar al usuario', //cpg1.3.0
	'error_specify' => 'Tienes que especificar un nombre de usuario o una dirección IP', //cpg1.3.0
	'error_ban_id' => '¡Identificador de expulsado inválido!', //cpg1.3.0
	'error_admin_ban' => '¡No puedes expulsarte a ti mismo!', //cpg1.3.0
	'error_server_ban' => '¿Vas a expulsar a tu propio servidor? No se puede hacer eso...', //cpg1.3.0
	'error_ip_forbidden' => 'No puedes expulsar esta IP - ¡No es rutable!', //cpg1.3.0
	'lookup_ip' => 'Buscar una dirección IP', //cpg1.3.0
	'submit' => 'buscar', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
	'title' => 'Añadir nuevo fichero',
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
	'max_fsize' => 'El tamaño máximo de fichero admitido es de %s KB',
	'album' => 'Album',
	'picture' => 'Fichero',
	'pic_title' => 'Título del fichero',
	'description' => 'Descripción del fichero',
	'keywords' => 'Palabras clave (separadas por espacios)',
	'err_no_alb_uploadables' => 'Perdona pero no hay ningún album donde esté permitido insertar nuevos ficheros',
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
	'lv_a' => 'Ascendente por última visita', //cpg1.3.0
	'lv_d' => 'Descendente por última visita', //cpg1.3.0
	'sort_by' => 'Ordenar usuarios por',
	'err_no_users' => '¡La tabla de usuarios está vacía!',
	'err_edit_self' => 'No puedes editar tu propio perfil, usa la opción \'Mi perfil de usuario\' para eso',
	'edit' => 'EDITAR',
	'delete' => 'BORRAR',
	'name' => 'Nombre de usuario',
	'group' => 'Grupo',
	'inactive' => 'Inactivo',
	'operations' => 'Operaciones',
	'pictures' => 'Ficheros',
	'disk_space' => 'Espacio usado / Cuota',
	'registered_on' => 'Registrado el día',
	'last_visit' => 'Última Visita', //cpg1.3.0
	'u_user_on_p_pages' => '%d usuarios en %d página(s)',
	'confirm_del' => '¿Estás seguro de querer BORRAR este usuario? \\nTodas sus fotos y albums serán también borrados.',
	'mail' => 'MAIL',
	'err_unknown_user' => '¡El usuario seleccionado no existe!',
	'modify_user' => 'Modificar usuario',
	'notes' => 'Notas',
	'note_list' => '<li>Si no quieres cambiar la contraseña actual, deja el campo "contraseña" vacío',
	'password' => 'Contraseña',
	'user_active' => 'El usuario está activo',
	'user_group' => 'Grupo de usuarios',
	'user_email' => 'Email del usuario',
	'user_web_site' => 'Página web del usuario',
	'create_new_user' => 'Crear nuevo usuario',
	'user_location' => 'Localidad del usuario',
	'user_interests' => 'Intereses del usuario',
	'user_occupation' => 'Ocupación del usuario',
	'latest_upload' => 'últimos uploads', //cpg1.3.0
	'never' => 'nunca', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
	'title' => 'Cambiar tamaño a las imágenes',
	'what_it_does' => 'Qué hace',
	'what_update_titles' => 'Actualiza los nombres de fichero',
	'what_delete_title' => 'Borra los títulos',
	'what_rebuild' => 'Vuelve a crear los thumbnails y otros tamaños de las imágenes',
	'what_delete_originals' => 'Borra las imágenes originales reemplazándolas con versiones de nuevo tamaño',
	'file' => 'Fichero',
	'title_set_to' => 'título a poner',
	'submit_form' => 'enviar',
	'updated_succesfully' => 'actualizado con éxito',
	'error_create' => 'ERROR al crear',
	'continue' => 'Procesar más imágenes',
	'main_success' => 'El fichero %s ha sido usado como imagen principal con éxito',
	'error_rename' => 'Error renombrando %s a %s',
	'error_not_found' => 'No se encuentra el fichero %s',
	'back' => 'volver al inicio',
	'thumbs_wait' => 'Actualizando thumbnails y/o tamaños de imágenes, por favor espere...',
	'thumbs_continue_wait' => 'Continuando la actualización de thumbnails y/o tamaños de imágenes...',
	'titles_wait' => 'Actualizando títulos, por favor espere...',
	'delete_wait' => 'Borrando títulos, por favor espere...',
	'replace_wait' => 'Borrando originales y reemplazándolos con las imágenes de nuevo tamaño, por favor espere...',
	'instruction' => 'Instrucciones rápidas',
	'instruction_action' => 'Selecionar acción',
	'instruction_parameter' => 'Elegir los parámetros',
	'instruction_album' => 'Seleccionar el album',
	'instruction_press' => 'Pulsar %s',
	'update' => 'Actualizar thumbs y/o tamaños de imágenes',
	'update_what' => 'Qué debe ser actualizado',
	'update_thumb' => 'Solo thumbnails',
	'update_pic' => 'Solo tamaños de imágenes',
	'update_both' => 'Thumbnails y tamaños de imágenes (ambos)',
	'update_number' => 'Número de imágenes procesadas por cada click',
	'update_option' => '(Prueba a poner un número menor si experimentas problemas de timeout)',
	'filename_title' => 'Fichero &rArr; Título del fichero',
	'filename_how' => 'Cómo debe ser el fichero modificado',
	'filename_remove' => 'Quitar .jpg del final y reemplazar _ (underscore) con espacios',
	'filename_euro' => 'Cambiar 2003_11_23_13_20_20.jpg a 23/11/2003 13:20',
	'filename_us' => 'Cambiar 2003_11_23_13_20_20.jpg a 11/23/2003 13:20',
	'filename_time' => 'Cambiar 2003_11_23_13_20_20.jpg a 13:20',
	'delete' => 'Borrar títulos de ficheros o imágenes de tamaño original',
	'delete_title' => 'Borrar títulos de ficheros',
	'delete_original' => 'Borrar imágenes de tamaño original',
	'delete_replace' => 'Borra las imágenes originales, reemplazándolas con otras de tamaño nuevo',
	'select_album' => 'Selecciona album',
	'delete_orphans' => 'Borrar comentarios huérfanos (funciona en todos los albums)', //cpg1.3.0
	'orphan_comment' => 'comentarios huérfanos encontrados', //cpg1.3.0
	'delete' => 'Borrar', //cpg1.3.0
	'delete_all' => 'Borrar todos', //cpg1.3.0
	'comment' => 'Comentario: ', //cpg1.3.0
	'nonexist' => 'asociado a un fichero no existente # ', //cpg1.3.0
	'phpinfo' => 'Mostrar phpinfo', //cpg1.3.0
	'update_db' => 'Actualizar base de datos', //cpg1.3.0
	'update_db_explanation' => 'Si has reemplazado los ficheros de coppermine, añadido modificaciones o actualizado de una versión previa de coppermine, deberías ejecutar la actualización de base de datos. Esta acción creará las tablas necesarias y/o valores de configuración en la base de datos de  coppermine.', //cpg1.3.0
);

?>