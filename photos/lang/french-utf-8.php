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
//  (at your option) any later version.                                       //
// ------------------------------------------------------------------------- //
// CVS version: $Id: french-utf-8.php,v 1.10 2004/07/28 08:04:37 gaugau Exp $
// ------------------------------------------------------------------------- //

// info about translators and translated language
$lang_translation_info = array(
'lang_name_english' => 'French',
'lang_name_native' => 'FranÃ§ais',
'lang_country_code' => 'fr',
'trans_name'=> 'jdbaranger - modified by JDBaranger',
'trans_email' => '',
'trans_website' => 'http://www.everlasting-star.net/',
'trans_date' => '2004-03-18',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Octets', 'Ko', 'Mo');

// Day of weeks and months
$lang_day_of_week = array('Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam');
$lang_month = array('Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Aout', 'Sep', 'Oct', 'Nov', 'Dec');

// Some common strings
$lang_yes = 'Oui';
$lang_no  = 'Non';
$lang_back = 'Retour';
$lang_continue = 'CONTINUER';
$lang_info = 'Information';
$lang_error = 'Erreur';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =  '%B %d, %Y';
$lastcom_date_fmt =  '%m/%d/%y Ã  %H:%M';
$lastup_date_fmt = '%d %B %Y';
$register_date_fmt = '%B %d, %Y';
$lasthit_date_fmt = '%B %d, %Y Ã  %I:%M %p';
$comment_date_fmt =  '%B %d, %Y Ã  %I:%M %p';

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*', 'merde', 'putain', 'enculÃ©*', 'salope', 'bite', 'cul', 'pute', 'pÃ©nis', 'clito', 'couille', 'pÃ©tasse', 'connard', 'salaud');

$lang_meta_album_names = array(
  'random' => 'Photos alÃ©atoires',
  'lastup' => 'Derniers ajouts',
  'lastalb'=> 'Derniers albums mis en ligne',
  'lastcom' => 'Derniers commentaires',
  'topn' => 'Les plus populaires',
  'toprated' => 'Les mieux notÃ©es',
  'lasthits' => 'Les derniÃ¨res vues',
  'search' => 'RÃ©sultats de la recherche',
  'favpics'=> 'Photos prÃ©fÃ©rÃ©es'
);

$lang_errors = array(
  'access_denied' => 'Vous n\'avez pas la permission d\'accÃ©der Ã  cette page.',
  'perm_denied' => 'Vous n\'avez pas la permission d\'effectuer cette opÃ©ration.',
  'param_missing' => 'Script appelÃ© sans les paramÃ¨tres nÃ©cessaires.',
  'non_exist_ap' => 'L\'album/la photo demandÃ©(e) n\'existe pas !',
  'quota_exceeded' => 'Espace disque dÃ©passÃ©<br /><br />Vous avez un quota d\'espace de [quota]K, vos photos utilisent [space]K, le fait d\'ajouter cette photo vous ferait dÃ©passer votre quota.',
  'gd_file_type_err' => 'L\'utilisation de "GD image library" ne vous permet d\'utiliser que de images de type JPEG et PNG.',
  'invalid_image' => 'L\'image que vous avez uploadÃ©e est corrompue ou ne peut pas Ãªtre prise en charge par GD library',
  'resize_failed' => 'Impossible de crÃ©er la vignette ou l\'image rÃ©duite.',
  'no_img_to_display' => 'Pas d\'image Ã  afficher',
  'non_exist_cat' => 'La catÃ©gorie sÃ©lectionnÃ©e n\'existe pas',
  'orphan_cat' => 'Une catÃ©gorie a un parent inexistant, utilisez le gestionnaire de catÃ©gories afin de remÃ©dier au problÃ¨me.',
  'directory_ro' => 'Le rÃ©pertoire \'%s\' n\'est pas inscriptible : les images ne peuvent Ãªtre supprimÃ©es.',
  'non_exist_comment' => 'Le commentaire sÃ©lectionnÃ© n\'existe pas.',
  'pic_in_invalid_album' => 'L\'image se trouve dans un album qui n\'existe pas (%s)!?',
  'banned' => 'Vous Ãªtes pour l\'instant banni de ce site.',
  'not_with_udb' => 'Cette fonction est dÃ©sactivÃ©e dans Coppermine parce que la galerie est intÃ©grÃ©e Ã  un forum. Soit l\'action que vous essayez d\'effectuer n\'est pas disponible dans cette configuration, soit vous devez l\'effectuer Ã  partir du forum auquel vous avez intÃ©grÃ© la galerie.',
  'offline_title' => 'Hors Ligne', //cpg1.3.0
  'offline_text' => 'Cette gallerie n\'est pas en ligne actuellement. Revenez la voir trÃ¨s bientÃ´t !', //cpg1.3.0
  'ecards_empty' => 'Il n\'y a pas encore de logs enregistrÃ©s. VÃ©rifiez que vous avez activÃ© l\'option correspondante dans la configuration de Coppermine.', //cpg1.3.0
  'action_failed' => 'Erreur ! Coppermine ne peut pas traiter cette requÃªte.', //cpg1.3.0
  'no_zip' => 'Les librairies nÃ©cessaires au traitement des fichiers ZIP ne sont pas installÃ©es. Contactez l\'Administrateur du site.', //cpg1.3.0
  'zip_type' => 'Vous n\'avez pas l\'autorisation de tÃ©lÃ©charger des fichiers ZIP.', //cpg1.3.0
);

$lang_bbcode_help = 'Ces codes peuvent vous Ãªtre utiles: <li>[b]<b>Gras</b>[/b]</li> <li>[i]<i>Italique</i>[/i]</li> <li>[url=http://votre-site.com/]Texte de l\'URL[/url]</li> <li>[email]adresse@domaine.com[/email]</li>'; //cpg1.3.0

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'alb_list_title' => 'Aller Ã  la liste des albums',
  'alb_list_lnk' => 'Albums',
  'my_gal_title' => 'Aller dans ma galerie personnelle',
  'my_gal_lnk' => 'Ma galerie',
  'my_prof_lnk' => 'Mon profil',
  'adm_mode_title' => 'Passer en mode admin',
  'adm_mode_lnk' => 'Mode admin',
  'usr_mode_title' => 'Passer au mode utilisateur',
  'usr_mode_lnk' => 'Mode utilisateur',
  'upload_pic_title' => 'Uploader une image dans un album',
  'upload_pic_lnk' => 'Uploader une image',
  'register_title' => 'CrÃ©er un compte',
  'register_lnk' => 'Inscription',
  'login_lnk' => 'S\'identifier',
  'logout_lnk' => 'Quitter',
  'lastup_lnk' => 'Derniers ajouts',
  'lastcom_lnk' => 'Commentaires',
  'topn_lnk' => 'Les plus populaires',
  'toprated_lnk' => 'Les mieux notÃ©es',
  'search_lnk' => 'Rechercher',
  'fav_lnk' => 'Mes favoris',
  'memberlist_title' => 'Afficher la liste des membres', //cpg1.3.0
  'memberlist_lnk' => 'Liste des membres', //cpg1.3.0
  'faq_title' => 'Questions frÃ©quemment posÃ©es Ã  propos de &quot;Coppermine&quot;', //cpg1.3.0
  'faq_lnk' => 'FAQ', //cpg1.3.0
);

$lang_gallery_admin_menu = array(
  'upl_app_lnk' => 'Fichiers Ã  valider',
  'config_lnk' => 'Configuration',
  'albums_lnk' => 'Albums',
  'categories_lnk' => 'CatÃ©gories',
  'users_lnk' => 'Utilisateurs',
  'groups_lnk' => 'Groupes',
  'comments_lnk' => 'Commentaires',
  'searchnew_lnk' => 'FTP =>',
  'util_lnk' => 'Utilitaires',
  'ban_lnk' => 'Bannir des utilisateurs',
  'db_ecard_lnk' => 'Cartes envoyÃ©es', //cpg1.3.0
);

$lang_user_admin_menu = array(
  'albmgr_lnk' => 'CrÃ©er / classer mes albums',
  'modifyalb_lnk' => 'Modifier mes albums',
  'my_prof_lnk' => 'Mon profil',
);

$lang_cat_list = array(
  'category' => 'CatÃ©gorie',
  'albums' => 'Albums',
  'pictures' => 'Photos',
);

$lang_album_list = array(
  'album_on_page' => '%d albums sur %d page(s)'
);

$lang_thumb_view = array(
  'date' => 'DATE',
  //Sort by filename and title
  'name' => 'NOM DU FICHIER',
  'title' => 'TITRE',
  'sort_da' => 'Classement ascendant par date',
  'sort_dd' => 'Classement descendant par date',
  'sort_na' => 'Classement ascendant par nom',
  'sort_nd' => 'Classement descendant par nom',
  'sort_ta' => 'Classement ascendant par titre',
  'sort_td' => 'Classement descendant par titre',
  'download_zip' => 'Télécharger un fichier ZIP', //cpg1.3.0
  'pic_on_page' => '%d photos sur %d page(s)',
  'user_on_page' => '%d utilisateurs sur %d page(s)'
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Retourner Ã  la page des vignettes',
  'pic_info_title' => 'Afficher / cacher les informations sur l\'image',
  'slideshow_title' => 'Diaporama',
  'ecard_title' => 'Envoyer cette image en tant que carte Ã©lectronique',
  'ecard_disabled' => 'Les cartes Ã©lectroniques sont dÃ©sactivÃ©es',
  'ecard_disabled_msg' => 'Vous n\'avez pas l\'autorisation d\'envoyer des cartes',
  'prev_title' => 'Voir l\'image prÃ©cÃ©dente',
  'next_title' => 'Voir l\'image suivante',
  'pic_pos' => 'PHOTO %s/%s',
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Noter cette image ',
  'no_votes' => '(Pas encore de note)',
  'rating' => '(note actuelle : %s / 5 pour %s votes)',
  'rubbish' => 'TrÃ¨s mauvais',
  'poor' => 'Pauvre',
  'fair' => 'Moyen',
  'good' => 'Bon',
  'excellent' => 'Excellent',
  'great' => 'Superbe',
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
  CRITICAL_ERROR => 'Erreur critique',
  'file' => 'Fichier: ',
  'line' => 'Ligne: ',
);

$lang_display_thumbnails = array(
  'filename' => 'Nom du fichier : ',
  'filesize' => 'Poids du fichier : ',
  'dimensions' => 'Dimensions : ',
  'date_added' => 'AjoutÃ© le : '
);

$lang_get_pic_data = array(
  'n_comments' => '%s commentaires',
  'n_views' => 'vu %s fois',
  'n_votes' => '(%s votes)'
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Infos de dÃ©buggage', //cpg1.3.0
  'select_all' => 'Tout sÃ©lectionner', //cpg1.3.0
  'copy_and_paste_instructions' => 'Si vous souhaitez soumettre une demande d\'assistance dans le forum de support de Coppermine, copier/collez ces informations de dÃ©buggage dans avec votre message. Assuez-vous de remplacer tous les mots de passe, mÃªme codÃ©s, par \'***\' avant de poster votre message.', //cpg1.3.0
  'phpinfo' => 'display phpinfo', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => '- Par dÃ©faut -', //cpg1.3.0
  'choose_language' => 'Langue :', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => '- Par dÃ©faut -', //cpg1.3.0
  'choose_theme' => 'ThÃ¨me :', //cpg1.3.0
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
  'Very Happy' => 'TrÃ¨s heureux',
  'Smile' => 'Sourire',
  'Sad' => 'Triste',
  'Surprised' => 'Surpris',
  'Shocked' => 'ChoquÃ©',
  'Confused' => 'Confus',
  'Cool' => 'Cool',
  'Laughing' => 'Rire',
  'Mad' => 'Fou',
  'Razz' => 'Razz',
  'Embarassed' => 'EmbarassÃ©',
  'Crying or Very sad' => 'Pleure ou trÃ¨s triste',
  'Evil or Very Mad' => 'Diabolique ou trÃ¨s en colÃ¨re',
  'Twisted Evil' => 'Sadique',
  'Rolling Eyes' => 'LÃ¨ve les yeux au ciel',
  'Wink' => 'Clin d\'oeil',
  'Idea' => 'IdÃ©e',
  'Arrow' => 'FlÃ¨che',
  'Neutral' => 'Neutre',
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
  0 => 'DÃ©connexion du mode administrateur...',
  1 => 'Passage au mode administrateur...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Les albums doivent avoir un nom !',
  'confirm_modifs' => 'Voulez-vous vraiment effectuer ces modifications ?',
  'no_change' => 'Vous n\\\'avez effectuÃ© aucun changement !',
  'new_album' => 'Nouvel album',
  'confirm_delete1' => 'Voulez vous vraiment supprimer cet album ?',
  'confirm_delete2' => '\nToutes les images et tous les commentaires seront perdus !',
  'select_first' => 'SÃ©lectionnez d\\\'abord un album',
  'alb_mrg' => 'Gestionnaire d\'album',
  'my_gallery' => '* Ma galerie *',
  'no_category' => '* Pas de catÃ©gorie *',
  'delete' => 'Supprimer',
  'new' => 'Nouveau',
  'apply_modifs' => 'Appliquer les modifications',
  'select_category' => 'SÃ©lectionner une categorie',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Les paramÃ¨tres requis pour l\'\'%s\'operation sont manquants !',
  'unknown_cat' => 'La catÃ©gorie sÃ©lectionnÃ©e n\'existe pas dans la base de donnÃ©es',
  'usergal_cat_ro' => 'La galerie des utilisateurs ne peut pas Ãªtre supprimÃ©e!',
  'manage_cat' => 'GÃ©rer les catÃ©gories',
  'confirm_delete' => 'Voulez vous vraiment SUPPRIMER cette catÃ©gorie ?',
  'category' => 'Categorie',
  'operations' => 'OpÃ©rations',
  'move_into' => 'DÃ©placer dans',
  'update_create' => 'Mettre Ã  jour / crÃ©er la catÃ©gorie',
  'parent_cat' => 'CatÃ©gorie parente',
  'cat_title' => 'Titre de la catÃ©gorie',
  'cat_thumb' => 'Vignette de la catÃ©gorie', //cpg1.3.0
  'cat_desc' => 'Description de la catÃ©gorie'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
  'title' => 'Configuration',
  'restore_cfg' => 'Restaurer les paramÃ¨tres d\'origine',
  'save_cfg' => 'Sauvegarder la nouvelle configuration',
  'notes' => 'Notes',
  'info' => 'Information',
  'upd_success' => 'La configuration de Coppermine a Ã©tÃ© mise Ã  jour',
  'restore_success' => 'La configuration d\'origine de Coppermine a Ã©tÃ© restaurÃ©e',
  'name_a' => 'Ascendant par nom',
  'name_d' => 'Descendantpar nom',
  'title_a' => 'Ascendant par titre',
  'title_d' => 'Descendant par titre',
  'date_a' => 'Ascendant par date',
  'date_d' => 'Descendant par date',
  'th_any' => 'Aspect max',
  'th_ht' => 'Hauteur',
  'th_wd' => 'Largeur',
  'label' => 'LibellÃ©', //cpg1.3.0
  'item' => 'Liste', //cpg1.3.0
  'debug_everyone' => 'Tout le monde', //cpg1.3.0
  'debug_admin' => 'Administrateurs uniquement' //cpg1.3.0
);

if (defined('CONFIG_PHP')) $lang_config_data = array(
  'ParamÃ¨tres gÃ©nÃ©raux',
  array('Nom de la galerie', 'gallery_name', 0),
  array('Description de la galerie', 'gallery_description', 0),
  array('Email de l\'administrateur de la galerie', 'gallery_admin_email', 0),
  array('Adresse sur laquelle le lien \'Voir plus de photos\' des e-cards doit pointer', 'ecards_more_pic_target', 0),
  array('La galerie n\'est pas publiÃ©e', 'offline', 1), //cpg1.3.0
  array('Loguer les envois de cartes Ã©lectroniques', 'log_ecards', 1), //cpg1.3.0
  array('Autoriser le tÃ©lÃ©chargement ZIP des photos dans les Favoris', 'enable_zipdownload', 1), //cpg1.3.0

  'ParamÃ¨tres de langues, themes &amp; caractÃ¨res',
  array('Langue par dÃ©faut', 'lang', 5),
  array('Theme par dÃ©faut', 'theme', 6),
  array('Afficher la liste des langues', 'language_list', 1), //cpg1.3.0
  array('Afficher le drapeau des langues', 'language_flags', 8), //cpg1.3.0
  array('Afficher &quot;- Par dÃ©faut -&quot; dans la sÃ©lection des langues', 'language_reset', 1), //cpg1.3.0
  array('Afficher la liste des thÃ¨mes', 'theme_list', 1), //cpg1.3.0
  array('Afficher &quot;- Par dÃ©faut -&quot; dans la liste des thÃ¨mes', 'theme_reset', 1), //cpg1.3.0
  array('Afficher les FAQ', 'display_faq', 1), //cpg1.3.0
  array('Afficher l\'aide bbcode', 'show_bbcode_help', 1), //cpg1.3.0
  array('Encodage des caractÃ¨res', 'charset', 4), //cpg1.3.0

  'Affichage de la liste des albums',
  array('Largeur du tableau principal (pixels ou %)', 'main_table_width', 0),
  array('Nombre de niveaux de catÃ©gories Ã  afficher', 'subcat_level', 0),
  array('Nombre d\'albums Ã  afficher', 'albums_per_page', 0),
  array('Nombre de colonnes pour la liste des albums', 'album_list_cols', 0),
  array('Taille des vignettes en pixels', 'alb_list_thumb_size', 0),
  array('Le contenu de la page principale', 'main_page_layout', 0),
  array('Afficher les vignettes de l\'album du premier niveau avec la catÃ©gorie','first_level',1),

  'Affichage des vignettes',
  array('Nombre de colonnes sur la page des vignettes', 'thumbcols', 0),
  array('Nombre de lignes sur la page des vignettes', 'thumbrows', 0),
  array('Nombre maximal d\'onglets Ã  afficher', 'max_tabs', 0),
  array('Afficher la lÃ©gende de l\'image (en plus de son titre) sous la vignette', 'caption_in_thumbview', 1),
  array('Afficher le nombre de commentaires sous les vignettes', 'display_comment_count', 1),
  array('Afficher le nom de l\'utilisateur sous la vignette', 'display_uploader', 1), //cpg1.3.0
  array('Classement par dÃ©faut des images', 'default_sort_order', 3),
  array('Nombre minimum de votes nÃ©cessaires pour qu\'une image apparaisse dans la liste des images les mieux notÃ©es', 'min_votes_for_rating', 0),

  'Affichage des images &amp; paramÃ¨tres des commentaires',
  array('Largeur du tableau pour l\'affichage des images (pixels ou %)', 'picture_table_width', 0),
  array('Les informations relatives Ã  l\'image sont affichÃ©es par dÃ©faut', 'display_pic_info', 1),
  array('Filtrer les gros mots dans les commentaires', 'filter_bad_words', 1),
  array('Autoriser les smileys dans les commentaires', 'enable_smilies', 1),
  array('Autoriser plusieurs messages successifs du mÃªme utilisateur (DÃ©sactive la protection contre le flood)', 'disable_comment_flood_protect', 1), //cpg1.3.0
  array('Longueur maximale pour la description des images', 'max_img_desc_length', 0),
  array('Nombre maximal de lettres pour un mot', 'max_com_wlength', 0),
  array('Nombre maximal de lignes pour un commentaire', 'max_com_lines', 0),
  array('Longueur maximale d\'un commentaire', 'max_com_size', 0),
  array('Afficher le nÃ©gatif', 'display_film_strip', 1),
  array('Nombre d\'images par nÃ©gatif', 'max_film_strip_items', 0),
  array('PrÃ©venir l\'administrateur lorsque des commentaires sont postÃ©s', 'email_comment_notification', 1), //cpg1.3.0
  array('Intervalle d\affichage des photos dans les diaporamas, en millisecondes (1 seconde = 1000 millisecondes)', 'slideshow_interval', 0), //cpg1.3.0

  'ParamÃ¨tres des images et vignettes',
  array('QualitÃ© pour les fichiers JPG', 'jpeg_qual', 0),
  array('Dimension maximale pour les vignettes <b>*</b>', 'thumb_width', 0),
  array('Utiliser la dimension (largeur ou hauteur ou aspect max pour la vignette)<b>**</b>', 'thumb_use', 7),
  array('CrÃ©er des images intermÃ©diaires','make_intermediate',1),
  array('Largeur ou hauteur maximale pour une image intermÃ©diaire <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0),
  array('Poids maximal des images Ã  uploader (Ko)', 'max_upl_size', 0),
  array('Longueur ou hauteur maximale pour les images uploadÃ©es (en pixels)', 'max_upl_width_height', 0),

  'ParamÃ¨tres avancÃ©s', //cpg1.3.0
  array('Montrer les vignettes des albums privÃ©s aux utilisateurs anonymes','show_private',1), //cpg1.3.0
  array('CaractÃ¨res interdits dans les noms de fichiers', 'forbiden_fname_char',0), //cpg1.3.0
  //array('Extensions de fichiers acceptÃ©es pour l\'upload de fichiers', 'allowed_file_extensions',0), //cpg1.3.0
  array('Types d\'images autorisÃ©s', 'allowed_img_types',0), //cpg1.3.0
  array('Types de films autorisÃ©s', 'allowed_mov_types',0), //cpg1.3.0
  array('Types de fichiers sons autorisÃ©s', 'allowed_snd_types',0), //cpg1.3.0
  array('Types de fichiers textes autorisÃ©s', 'allowed_doc_types',0), //cpg1.3.0
  array('MÃ©thode de redimensionnement des images','thumb_method',2), //cpg1.3.0
  array('Chemin vers l\'utilitaire \'convert\' d\'ImageMagick (exemple /usr/bin/X11/)', 'impath', 0), //cpg1.3.0
  //array('Types d\'images autorisÃ©s (seulement pour ImageMagick)', 'allowed_img_types',0), //cpg1.3.0
  array('Options de ligne de commande pour ImageMagick', 'im_options', 0), //cpg1.3.0
  array('Lire les informations EXIF dans les fichiers JPEG', 'read_exif_data', 1), //cpg1.3.0
  array('Lire les informations IPTC dans les fichiers JPEG', 'read_iptc_data', 1), //cpg1.3.0
  array('RÃ©pertoire pour les albums des utilisateurs <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0), //cpg1.3.0
  array('RÃ©pertoire pour les images des utilisateurs <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0), //cpg1.3.0
  array('PrÃ©fixe pour les images intermÃ©diaires <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0), //cpg1.3.0
  array('PrÃ©fixe pour les vignettes <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0), //cpg1.3.0
  array('Mode par dÃ©faut des rÃ©pertoires', 'default_dir_mode', 0), //cpg1.3.0
  array('Mode par dÃ©faut des fichiers', 'default_file_mode', 0), //cpg1.3.0

  'ParamÃ¨tres Utilisateurs',
  array('Autoriser de nouvelles inscriptions', 'allow_user_registration', 1),
  array('L\'inscription d\'un nouvel utilisateur doit Ãªtre validÃ©e', 'reg_requires_valid_email', 1),
  array('Notifier l\'administrateur des nouvelles inscriptions', 'reg_notify_admin_email', 1), //cpg1.3.0
  array('Autoriser deux utilisateurs Ã  avoir le mÃªme e-mail', 'allow_duplicate_emails_addr', 1),
  array('Les utilisateurs peuvent avoir des albums personnels', 'allow_private_albums', 1),
  array('Notifier l\'administrateur lorsque des uploads nÃ©cessitent son approbation', 'upl_notify_admin_email', 1), //cpg1.3.0
  array('Autoriser les utilisateurs authentifiÃ©s Ã  visualiser la Liste des membres', 'allow_memberlist', 1), //cpg1.3.0

  'Champs libres pour les descriptions d\'images (Ã  laisser tel quel si vous n\'utilisez pas cette fonction)',
  array('Nom du champ 1', 'user_field1_name', 0),
  array('Nom du champ 2', 'user_field2_name', 0),
  array('Nom du champ 3', 'user_field3_name', 0),
  array('Nom du champ 4', 'user_field4_name', 0),

  'Cookies &amp; paramÃ¨tres d\'encodage des caractÃ¨res',
  array('Nom du cookie utilisÃ© par le script (si vous utilisez l\'intÃ©gration avec un forum, vÃ©rifiez que les cookies sont diffÃ©rents)', 'cookie_name', 0),
  array('Chemin du cookie utilisÃ© par le script', 'cookie_path', 0),

  'Divers',
  array('Activer le mode debug', 'debug_mode', 1),
  array('Afficher les notices dans le mode debug', 'debug_notice', 1), //cpg1.3.0


  '<br /><div align="left"><a name="notice1"></a>(*) Ce paramÃ¨tre ne doit pas Ãªtre modifiÃ© si des images sont dÃ©jÃ  prÃ©sentes dans la Base de donnÃ©es.<br />
  <a name="notice2"></a>(**) Lorsque vous modifiez ce paramÃ¨tre, seuls les nouveaux fichiers seront affectÃ©s. Il est donc conseillÃ© de ne pas modifier ce paramÃ¨tre si des images sont dÃ©jÃ  prÃ©sentes dans la Base de donnÃ©es. Vous pouvez toutefois appliquer ce paramÃ¨tre aux fichiers existants avec <a href="util.php">l\'utilitaire appropriÃ©</a> (option Redimensionner les images) accessible depuis le menu d\'administration.</div><br />', //cpg1.3.0
);

// -------------------------------------------------------------------------
//
// File db_ecard.php //cpg1.3.0
// -------------------------------------------------------------------------
//

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Cartes envoyÃ©es', //cpg1.3.0
  'ecard_sender' => 'ExpÃ©diteur', //cpg1.3.0
  'ecard_recipient' => 'Destinataire', //cpg1.3.0
  'ecard_date' => 'Date', //cpg1.3.0
  'ecard_display' => 'Afficher les cartes', //cpg1.3.0
  'ecard_name' => 'Nom', //cpg1.3.0
  'ecard_email' => 'E-mail', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'ascendant', //cpg1.3.0
  'ecard_descending' => 'descendant', //cpg1.3.0
  'ecard_sorted' => 'triÃ©es', //cpg1.3.0
  'ecard_by_date' => 'par date', //cpg1.3.0
  'ecard_by_sender_name' => 'par nom d\'expÃ©diteur', //cpg1.3.0
  'ecard_by_sender_email' => 'par adresse d\'expÃ©diteur', //cpg1.3.0
  'ecard_by_sender_ip' => 'par adresse IP d\'expÃ©diteur', //cpg1.3.0
  'ecard_by_recipient_name' => 'par nom de destinataire', //cpg1.3.0
  'ecard_by_recipient_email' => 'par adresse de destinataire', //cpg1.3.0
  'ecard_number' => 'Affichage des enregistrements %s Ã  %s parmi %s', //cpg1.3.0
  'ecard_goto_page' => 'Aller Ã  la page', //cpg1.3.0
  'ecard_records_per_page' => 'enregistrements par page', //cpg1.3.0
  'check_all' => 'Tout cocher', //cpg1.3.0
  'uncheck_all' => 'Tout dÃ©cocher', //cpg1.3.0
  'ecards_delete_selected' => 'Supprimer les cartes sÃ©lectionnÃ©es', //cpg1.3.0
  'ecards_delete_confirm' => 'Etes-vous certain de vouloir supprimer ces enregistrements ? Merci de cocher la case !', //cpg1.3.0
  'ecards_delete_sure' => 'Je suis certain', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Vous devez taper votre nom et un commentaire',
  'com_added' => 'Votre commentaire a Ã©tÃ© ajoutÃ©',
  'alb_need_title' => 'Vous devez donner un titre Ã  l\'album !',
  'no_udp_needed' => 'Aucune mise Ã  jour n\'est nÃ©cessaire.',
  'alb_updated' => 'L\'album a Ã©tÃ© mis Ã  jour',
  'unknown_album' => 'L\'album sÃ©lectionnÃ© n\'existe pas ou bien vous n\'avez pas la permission d\'uploader dans cet album',
  'no_pic_uploaded' => 'Aucune image n\'a Ã©tÃ© uploadÃ©e !<br /><br />Si vous avez vraiment sÃ©lectionnÃ© une image Ã  uploader, vÃ©rifier que le serveur autorise l\'upload de fichiers...',
  'err_mkdir' => 'Impossible de crÃ©er le rÃ©pertoire %s !',
  'dest_dir_ro' => 'Le rÃ©pertoire de destination (%s) ne dispose pas des droits d\'Ã©criture nÃ©cessaires pour le script!',
  'err_move' => 'Impossible de dÃ©placer %s vers %s !',
  'err_fsize_too_large' => 'La taille de l\'image que vous avez uploadÃ© est trop grande (le maximum autorisÃ© est de %s x %s) !',
  'err_imgsize_too_large' => 'Le poids du fichier que vous avez uploadÃ© est trop important (le maximum autorisÃ© est de %s Ko) !',
  'err_invalid_img' => 'Le fichier que vous avez uploadÃ© n\'est pas une image valide!',
  'allowed_img_types' => 'Vous ne pouvez uploader que %s images.',
  'err_insert_pic' => 'Les images \'%s\' ne peuvent pas Ãªtre insÃ©rÃ©es dans l\'album ',
  'upload_success' => 'Votre image a Ã©tÃ© correctement uploadÃ©e<br /><br />Elle sera visible aprÃ¨s validation de l\'administrateur.',
  'notify_admin_email_subject' => '%s - Notification d\'upload', //cpg1.3.0
  'notify_admin_email_body' => 'Une image a Ã©tÃ© uploadÃ©e par %s. Cela nÃ©cessite votre approbation. Connectez-vous Ã  %s', //cpg1.3.0
  'info' => 'Information',
  'com_added' => 'Commentaire ajoutÃ©',
  'alb_updated' => 'Album mis Ã  jour',
  'err_comment_empty' => 'Votre commentaire est vide!',
  'err_invalid_fext' => 'Seuls les fichiers avec les extensions suivantes sont autorisÃ©s : <br /><br />%s.',
  'no_flood' => 'Nous sommes dÃ©solÃ©s, mais vous Ãªtes dÃ©jÃ  l\'auteur du dernier commentaire postÃ© au sujet de cette image.<br /><br />Vous pouvez tout simplement Ã©diter votre message prÃ©cÃ©dent si vous souhaitez le modifier ou bien ajouter des informations.',
  'redirect_msg' => 'Redirection en cours.<br /><br /><br />Cliquez sur \'CONTINUER\' si la page ne se recharge pas automatiquement',
  'upl_success' => 'Votre image a Ã©tÃ© correctement ajoutÃ©e',
  'email_comment_subject' => 'Commentaire postÃ© sur Coppermine Photo Gallery', //cpg1.3.0
  'email_comment_body' => 'Quelqu\'un a postÃ© un commentaire dans votre galerie. Voyez-le Ã ', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'LÃ©gende',
  'fs_pic' => 'image en taille rÃ©elle',
  'del_success' => 'suppression rÃ©ussie',
  'ns_pic' => 'image en taille normale',
  'err_del' => 'ne peut pas Ãªtre supprimÃ©',
  'thumb_pic' => 'vignette',
  'comment' => 'commentaire',
  'im_in_alb' => 'image dans l\'album',
  'alb_del_success' => 'Album \'%s\' supprimÃ©s',
  'alb_mgr' => 'Gestionnaire d\'album',
  'err_invalid_data' => 'DonnÃ©es non valides reÃ§ues dans \'%s\'',
  'create_alb' => 'CrÃ©ation de l\'album \'%s\'',
  'update_alb' => 'Mise Ã  jour de l\'album \'%s\' avec le titre \'%s\' et index \'%s\'',
  'del_pic' => 'Supprimer l\'image',
  'del_alb' => 'Supprimer l\'album',
  'del_user' => 'Supprimer l\'utilisateur',
  'err_unknown_user' => 'L\'utilisateur sÃ©lectionnÃ© n\'existe pas !',
  'comment_deleted' => 'Le commentaire a Ã©tÃ© supprimÃ© avec succÃ¨s',
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
  'confirm_del' => 'Voulez vous vraiment SUPPRIMER cette image?\\nLes commentaires seront Ã©galement supprimÃ©s.',
  'del_pic' => 'SUPPRIMER CETTE IMAGE',
  'size' => '%s x %s pixels',
  'views' => '%s fois',
  'slideshow' => 'Diaporama',
  'stop_slideshow' => 'ARRETER LE DIAPORAMA',
  'view_fs' => 'Cliquez pour voir l\'image en taille rÃ©elle',
  'edit_pic' => 'Modifier la description', //cpg1.3.0
  'crop_pic' => 'Retoucher', //cpg1.3.0
);

$lang_picinfo = array(
  'title' =>'Informations sur l\'image',
  'Filename' => 'Nom du fichier',
  'Album name' => 'Nom de l\'album',
  'Rating' => 'Note (%s votes)',
  'Keywords' => 'Mots clefs',
  'File Size' => 'Taille du fichier',
  'Dimensions' => 'Dimensions',
  'Displayed' => 'AffichÃ©es',
  'Camera' => 'Appareil photos',
  'Date taken' => 'Date de la prise de vue',
  'Aperture' => 'Ouverture',
  'Exposure time' => 'Temps d\'exposition',
  'Focal length' => 'Focale',
  'Comment' => 'Commentaires',
  'addFav'=>'Ajouter aux favoris',
  'addFavPhrase'=>'Favoris',
  'remFav'=>'Supprimer des favoris',
  'iptcTitle'=>'Titre IPTC', //cpg1.3.0
  'iptcCopyright'=>'Copyright IPTC', //cpg1.3.0
  'iptcKeywords'=>'Mots clÃ©s IPTC', //cpg1.3.0
  'iptcCategory'=>'CatÃ©gorie IPTC', //cpg1.3.0
  'iptcSubCategories'=>'Sous-satÃ©gorie IPTC', //cpg1.3.0
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Modifier ce commentaire',
  'confirm_delete' => 'Voulez vous vraiment supprimer ce commentaire?',
  'add_your_comment' => 'Ajoutez votre commentaire',
  'name'=>'Nom',
  'comment'=>'Commentaire',
  'your_name' => 'Anonyme',
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Cliquez sur l\'image pour fermer la fenÃªtre',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Envoyer en tant que e-card',
  'invalid_email' => '<b>Attention</b> : cette adresse e-mail n\'est pas valide !',
  'ecard_title' => 'Une e-card pour vous, de la part de %s',
  'error_not_image' => 'Seules les images peuvent Ãªtre envoyÃ©es sous forme de cartes Ã©lectroniques.', //cpg1.3.0
  'view_ecard' => 'Si votre e-card ne s\'affiche pas correctement, cliquez ici',
  'view_more_pics' => 'Suivez ce lien pour dÃ©couvrir davantage de photos !',
  'send_success' => 'Votre ecard a Ã©tÃ© envoyÃ©e',
  'send_failed' => 'Nous sommes dÃ©solÃ©s, mais le serveur n\'a pu envoyer votre e-card...',
  'from' => 'De la part de',
  'your_name' => 'Votre nom',
  'your_email' => 'Votre adresse e-mail',
  'to' => 'A',
  'rcpt_name' => 'Nom du destinataire',
  'rcpt_email' => 'Adresse e-mail du destinataire',
  'greetings' => 'Introduction',
  'message' => 'Message',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Informations sur l\'image',
  'album' => 'Album',
  'title' => 'Titre',
  'desc' => 'Description',
  'keywords' => 'Mots clefs',
  'pic_info_str' => '%sx%s - %sKo - %s affichages - %s votes',
  'approve' => 'Approuver',
  'postpone_app' => 'Approuver plus tard',
  'del_pic' => 'Supprimer l\'image',
  'read_exif' => 'Relire les informations EXIF', //cpg1.3.0
  'reset_view_count' => 'Remettre le compteur des tÃ©lÃ©chargements Ã  zÃ©ro',
  'reset_votes' => 'Remettre le compteur de votes Ã  zÃ©ro',
  'del_comm' => 'Supprimer les commentaires',
  'upl_approval' => 'Autorisation d\'upload',
  'edit_pics' => 'Modifier les images',
  'see_next' => 'Voir les images suivantes',
  'see_prev' => 'Voir les images prÃ©cÃ©dentes',
  'n_pic' => '%s images',
  'n_of_pic_to_disp' => 'Nombre d\'images Ã  afficher',
  'apply' => 'Appliquer les modifications',
  'crop_title' => 'Editeur Photo de Coppermine', //cpg1.3.0
  'preview' => 'Previsualiser', //cpg1.3.0
  'save' => 'Sauvegarder la photo', //cpg1.3.0
  'save_thumb' =>'Save en tant que vignette', //cpg1.3.0
  'sel_on_img' =>'La sÃ©lection doit Ãªtre entiÃ¨rement sur l\'image', //js-alert //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Questions frÃ©quemment posÃ©es', //cpg1.3.0
  'toc' => 'Table des matiÃ¨res', //cpg1.3.0
  'question' => 'Question : ', //cpg1.3.0
  'answer' => 'RÃ©ponse : ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  '<br>FAQ gÃ©nÃ©rales<br>', //cpg1.3.0
  array('Pourquoi dois-je m\'inscrire ?', 'L\'inscription peut Ãªtre imposÃ©e ou non par l\'administrateur. Elle offre des fonctionnalitÃ©s supplÃ©mentaires telles que la possibilitÃ© d\'uploader des images, d\'avoir une liste de Favoris, de noter les images, de poster des commentaires etc...', 'allow_user_registration', '0'), //cpg1.3.0
  array('Comment puis-je m\'inscrire ?', 'Allez sur &quot;Inscription&quot; et renseignez les informations requises (Ã©ventuellement les informations optionnelles, si vous le souhaitez).<br />Si l\'administrateur a demandÃ© une confirmation par mail, vous recevrez un message Ã  l\'adresse que vous aurez renseignÃ©e dans le formulaire d\'inscription. Ce message vous induiqera la marche Ã  suivre pour valider votre inscription. Votre inscription doit Ãªtre validÃ©e avant que vous ne puissiez vous indentifier.', 'allow_user_registration', '1'), //cpg1.3.0
  array('Comment m\'identifier ?', 'Allez sur &quot;S\'identifier&quot;, saisissez votre pseudo et votre mot de passe. Cochez &quot;Se souvenir de moi&quot; afin d\'Ãªtre automatiquement reconnectÃ© lorsque vous reviendrez sur le site.<br /><b>IMPORTANT : Vous devez autoriser les cookies et le cookie ne doit pas Ãªtre effacÃ© pour que cette option fonctionne.</b>', 'offline', 0), //cpg1.3.0
  array('Pourquoi ne puis-je pas m\'identifier ?', 'VÃ©rifiez que vous vous Ãªtes bien inscrit et que vous avez cliquÃ© sur le lien de validation indiquÃ© dans le mail de confirmation que vous devez avoir reÃ§u. Pour tout autre problÃ¨me, contactez l\'administrateur du site.', 'offline', 0), //cpg1.3.0
  array('Et si j\'oublie mon mot de passe ?', 'Si le site possÃ¨de un lien &quot;J\'ai oubliÃ© mon mot de passe !&quot;, utilisez-le. Dans le cas contraire, contactez l\'administrateur qui vous crÃ©era un nouveau mot de passe.', 'offline', 0), //cpg1.3.0
  //array('Que dois-je faire si je change d\'adresse e-mail ?', 'Identifiez-vous et changez votre adresse de messagerie dans le menu &quot;Mon profil&quot;', 'offline', 0), //cpg1.3.0
  array('Comment sauvegarder une photo dans &quot;Mes Favoris&quot; ?', 'Cliquez sur une image. Si les informations de cette image ne sont pas indiquÃ©es au bas de celle-ci, cliquez sur le lien &quot;Afficher/cacher les informations de l\'image&quot; (<img src="images/info.gif" width="16" height="16" border="0" alt="Afficher/cacher les informations de l\'image" />); Cliquez ensuite sur le lien &quot;Ajouter aux favoris&quot;.<br /><br />IMPORTANT : Vous devez autoriser les cookies et le cookie ne doit pas Ãªtre effacÃ© pour que cette option fonctionne.', 'offline', 0), //cpg1.3.0
  array('Comment noter une photo ?', 'Cliquez sur une image et cliquez sur la note que vous souhaitez lui attribuer, au-dessous de l\'image', 'offline', 0), //cpg1.3.0
  array('Comment poster un commentaire sur une photo ?', 'Cliquez sur une image et tapez votre commentaire au-dessous de l\'image, sous la ligne &quot;Ajoutez votre commentaire&quot;.', 'offline', 0), //cpg1.3.0
  array('Comment uploader une photo ?', 'Cliquez sur &quot;Uploader une image&quot; et sÃ©lectionnez l\'album dans lequel vous souhaitez qu\'elle apparaisse. Cliquez sur &quot;Parcourir&quot; pour sÃ©lectionner le fichier Ã  transfÃ©rer. ComplÃ©tez ensuite les champs facultatifs si vous le dÃ©sirez. Enfin, validez par &quot;Mettre une photo en ligne&quot;', 'allow_private_albums', 0), //cpg1.3.0
  array('OÃ¹ puis-je uploader mes photos ?', 'Vous pourrez uploader vos photos dans l\'un de vos albums dans &quot;Ma galerie&quot;. L\'administrateur peut aussi vous avoir autorisÃ© Ã  uploader des photos dans un ou plusieurs albums dans la galerie principale.', 'allow_private_albums', 0), //cpg1.3.0
  array('Quels types et tailles d\'images puis-je uploader ?', 'La taille et le type (jpg,gif,..etc.) est dÃ©fini par l\'administrateur. Vous pouvez lui en demander la liste.', 'offline', 0), //cpg1.3.0
  array('Que signifie &quot;Ma galerie&quot; ?', '&quot;Ma galerie&quot; est une galerie personnelle dans laquelle les utilisateurs peuvent uploader et organiser leurs photos.', 'allow_private_albums', 0), //cpg1.3.0
  array('Comment puis-je crÃ©er, renommer ou supprimer des albums dans &quot;Ma Galerie&quot; ?', 'Vous devez auparavant entrer dans le &quot;Mode admin.&quot;<br/>Cliquez ensuite sur &quot;CrÃ©er / classer mes Albums&quot;puis cliquez sur &quot;Nouveau&quot;. Remplacez &quot;New Album&quot; Ã  votre convenance.<br />Vous pouvez aussi renommer vos albums dans votre galerie.<br />Cliquez ensuite sur &quot;Appliquer les Modifications&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Comment puis-je modifier ou restreindre l\'accÃ¨s Ã  mes albums ?', 'Vous devez auparavant entrer dans le &quot;Mode admin.&quot;<br />Cliquez ensuite sur &quot;Modifier mes albums&quot;. Dans la zone &quot;Mettre l\'album Ã  jour&quot; sÃ©lectionnez l\'album que vous souhaitez modifier.<br />Vous pouvez modifier le nom, la description, la vignette, restreindre l\'accÃ¨s, les options concernant les notes et les commentaires.<br />Cliquez sur &quot;Mettre l\'album Ã  jour&quot;. pour valider', 'allow_private_albums', 0), //cpg1.3.0
  array('Comment puis-je voir les albums des autres utilisateurs ?', 'Allez sur &quot;Liste des albums&quot; et choisissez &quot;Galeries utilisateurs&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Que sont les cookies ?', 'Les cookies sont des fichiers texte contenant des paramÃ¨tres du site et de votre pseudo. Ces cookies sont stockÃ©es dans votre ordinateur.<br />Ils vous apportent la possibilitÃ© d\'entrer et sortir du site sans avoir Ã  vous identifier, ainsi que d\'autres facilitÃ©s.', 'offline', 0), //cpg1.3.0
  array('OÃ¹ puis-je me procurer cette galerie pour mon site ?', 'Coppermine est une Galerie multimÃ©dia gratuite, sous licence GNU GPL. Elle comprend de nombreuses fonctions avancÃ©es et est portÃ©e sur plusieurs plateformes. Visitez le site <a href="http://coppermine.sf.net/" target="_blank">Page principale Coppermine</a> pour en savoir plus et procÃ©der Ã  son tÃ©lÃ©chargement.', 'offline', 0), //cpg1.3.0

  '<br>Navigation dans le site<br>', //cpg1.3.0
  array('Qu\'est-ce-que &quot;Liste des albums&quot; ?', 'Cela vous redirigera vers la galerie principale avec un lien vers chaque catÃ©gorie. Ces liens peuvent Ãªtre sous forme de vignettes.', 'offline', 0), //cpg1.3.0
  array('Qu\'est-ce-que &quot;Ma galerie&quot; ?', 'Cette fonctionnalitÃ© vous permet de crÃ©er vos propres albums et d\'y uploader et gÃ©rer vos photos.', 'allow_private_albums', 0), //cpg1.3.0
  array('Quelle est la diffÃ©rence entre le &quot;Mode admin.&quot; et le &quot;Mode utilisateur&quot; ?', 'Le &quot;Mode admin.&quot; vous permet de modifier vos albums ainsi que tous les albums pour lesquels vous aurez Ã©tÃ© habilitÃ© par l\'administrateur.', 'allow_private_albums', 0), //cpg1.3.0
  array('Qu\'est-ce-que &quot;Uploader une image&quot; ?', 'Cette fonctionnalitÃ© vous permet d\'uploader des photos (dont la taille et le type sont dÃ©finis par l\'administrateur) dans les galeries et albums pour lesquels vous aurez Ã©tÃ© habilitÃ© par l\'administrateur.', 'allow_private_albums', 0), //cpg1.3.0
  array('Qu\'est-ce-que &quot;Derniers ajouts&quot; ?', 'Cette fonctionnalitÃ© vous montre les derniÃ¨res photos uploadÃ©es sur le site.', 'offline', 0), //cpg1.3.0
  array('Qu\'est-ce-que &quot;Commentaires&quot; ?', 'Cette fonctionnalitÃ© vous montre les derniers commentaires postÃ©s par les utilisateurs du site.', 'offline', 0), //cpg1.3.0
  array('Qu\'est-ce-que &quot;Les plus populaires&quot; ?', 'Cette fonctionnalitÃ© vous montre les photos les plus vues par les visiteurs, identifiÃ©s ou anonymes.', 'offline', 0), //cpg1.3.0
  array('Qu\'est-ce-que &quot;Les mieux notÃ©es&quot; ?', 'Cette fonctionnalitÃ© vous montre les photos, triÃ©es par leur note moyenne. Par exemples : <br />- Si 5 utilisateurs donnent chacun la note 3 (<img src="images/rating3.gif" width="65" height="14" border="0" alt="" />), la photo obtient la note moyenne de 3 (<img src="images/rating3.gif" width="65" height="14" border="0" alt="" />).<br />- Si 5 utilisateurs donnent les notes 1, 2, 3, 4 et 5, la photo obtient une moyenne de 3 Ã©galement (<img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ).<br />Les notes vont de <img src="images/rating5.gif" width="65" height="14" border="0"/> (meilleure) to <img src="images/rating0.gif" width="65" height="14" border="0" /> (moins bonne).', 'offline', 0), //cpg1.3.0
  array('Qu\'est-ce-que &quot;Mes favoris&quot; ?', 'Cette fonctionnalitÃ© vous permet de stocker une ou plusieurs photos dans le cookie qui est stockÃ© dans votre ordinateur.', 'offline', 0), //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Rappel de Mot de passe', //cpg1.3.0
  'err_already_logged_in' => 'Vous Ãªtes dÃ©jÃ  identifiÃ© !', //cpg1.3.0
  'enter_username_email' => 'Saisissez votre pseudo ou votre adresse de messagerie', //cpg1.3.0
  'submit' => 'Envoyer', //cpg1.3.0
  'failed_sending_email' => 'Le mot de passe n\'a pas pu Ãªtre envoyÃ© !', //cpg1.3.0
  'email_sent' => 'Un message a Ã©tÃ© envoyÃ© avec votre mot de passe Ã  l\'adresse %s', //cpg1.3.0
  'err_unk_user' => 'L\'utilisateur indiquÃ© n\'existe pas !', //cpg1.3.0
  'passwd_reminder_subject' => '%s - Rappel de Mot de passe', //cpg1.3.0
  'passwd_reminder_body' => 'Vous avez demandÃ© que votre mot de passe vous soit rappelÃ©. Voici donc vos donnÃ©es de connexion :
Utilisateur: %s
Mot de passe : %s
Cliquez sur %s pour vous identifier.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Nom du groupe',
  'disk_quota' => 'Quota disque',
  'can_rate' => 'Peut noter les images',
  'can_send_ecards' => 'Peut envoyer des ecards',
  'can_post_com' => 'Peut Ã©crire des commentaires',
  'can_upload' => 'Peut mettre des photos en ligne',
  'can_have_gallery' => 'Peut avoir une galerie perso',
  'apply' => 'Appliquer les modifications',
  'create_new_group' => 'CrÃ©er un nouveau groupe',
  'del_groups' => 'Supprimer le(s) groupe(s) sÃ©lectionnÃ©(s)',
  'confirm_del' => 'Attention, lorsque vous supprimez un groupe, les utilisateurs de ce groupe seront transfÃ©rÃ©s dans le groupe d\'utilisateurs \'EnregistrÃ©\'!\n\nSouhaitez-vous continuer?',
  'title' => 'GÃ©rer les groupes d\'utilisateurs',
  'approval_1' => 'Autorisation d\'upload pub. (1)',
  'approval_2' => 'Autorisation d\'upload priv. (2)',
  'upload_form_config' => 'Formulaire de configuration d\'upload', //cpg1.3.0
  'upload_form_config_values' => array( 'Un seul fichier uniquement', 'Plusieurs fichiers uniquement', 'Uploads URI seulement', 'Uploads ZIP seulement', 'Fichier-URI', 'Fichier-ZIP', 'Fichier-ZIP', 'Fichier-URI-ZIP'), //cpg1.3.0
  'custom_user_upload'=>'Les utilisateurs peuvent-ils modifier le nombre de tÃ©lÃ©chargements ?', //cpg1.3.0
  'num_file_upload'=>'Nombre Maximum/exact de tÃ©lÃ©chargement de fichiers', //cpg1.3.0
  'num_URI_upload'=>'Nombre Maximum/exact de tÃ©lÃ©chargements de URI', //cpg1.3.0
  'note1' => '<b>(1)</b> Les uploads dans un album public doivent Ãªtre approuvÃ©s par un administrateur',
  'note2' => '<b>(2)</b> Les uploads dans un album qui appartient Ã  l\'utilisateur doivent Ãªtre approuvÃ©s par un admin',
  'notes' => 'Remarques'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Bienvenue!'
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Voulez-vous VRAIMENT supprimer cet album ? \\nToutes les photos et tous les commentaires seront perdus.',
  'delete' => 'SUPPRIMER',
  'modify' => 'PROPRIETES',
  'edit_pics' => 'MODIFIER LES PHOTOS',
);

$lang_list_categories = array(
  'home' => 'Accueil',
  'stat1' => '<b>[pictures]</b> photos dans <b>[albums]</b> albums et <b>[cat]</b> catÃ©gories avec <b>[comments]</b> commentaires affichÃ©es <b>[views]</b> fois',
  'stat2' => '<b>[pictures]</b> photos dans <b>[albums]</b> albums affichÃ©es <b>[views]</b> times',
  'xx_s_gallery' => '%s\'s Galerie',
  'stat3' => '<b>[pictures]</b> photos dans <b>[albums]</b> albums avec <b>[comments]</b> commentaires affichÃ©es <b>[views]</b> fois'
);

$lang_list_users = array(
  'user_list' => 'Liste d\'utilisateurs',
  'no_user_gal' => 'Il n\'y a pas de nouvelle galerie d\'utilisateurs',
  'n_albums' => '%s album(s)',
  'n_pics' => '%s photo(s)'
);

$lang_list_albums = array(
  'n_pictures' => '%s photos',
  'last_added' => ', la derniÃ¨re a Ã©tÃ© ajoutÃ©e le %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Se connecter',
  'enter_login_pswd' => 'Entrez votre login et mot de passe pour vous connecter',
  'username' => 'Login',
  'password' => 'Mot de passe',
  'remember_me' => 'Se souvenir de moi',
  'welcome' => 'Bienvenue %s ...',
  'err_login' => '*** Impossible de se connecter. Essayez encore ***',
  'err_already_logged_in' => 'Vous Ãªtes dÃ©jÃ  connectÃ© !',
  'forgot_password_link' => 'J\'ai oubliÃ© mon mot de passe !', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'DÃ©connection',
  'bye' => 'Au revoir %s ...',
  'err_not_loged_in' => 'Vous n\'Ãªtes pas identifÃ© !',
);

// ------------------------------------------------------------------------- //
// File phpinfo.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'Infos PHP', //cpg1.3.0
  'explanation' => 'Ceci est le rÃ©sultat gÃ©nÃ©rÃ© par la fonction PHP <a href="http://www.php.net/phpinfo">phpinfo()</a>, affichÃ©e dans Coppermine.', //cpg1.3.0
  'no_link' => 'Permettre Ã  tous de voir vos informations PHP peut Ãªtre un risque important, c\'est pourquoi cette page n\'est accessible qu\'aux administrateurs. Vous ne pouvez pas poster de liens vers cette page Ã  d\'autres utilisateurs, ils se verraient l\'accÃ¨s refusÃ©.', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Mettre Ã  jour l\'album %s',
  'general_settings' => 'ParamÃ¨tres gÃ©nÃ©raux',
  'alb_title' => 'Titre de l\'album',
  'alb_cat' => 'CatÃ©gorie de l\'album',
  'alb_desc' => 'Description de l\'album',
  'alb_thumb' => 'vignette de l\'album',
  'alb_perm' => 'Permissions pour cet album',
  'can_view' => 'Cet album peut Ãªtre consultÃ© par',
  'can_upload' => 'Les visiteurs peuvent mettre des photos en ligne',
  'can_post_comments' => 'Les visiteurs peuvent poster des commentaires',
  'can_rate' => 'Les visiteurs peuvent noter les photos',
  'user_gal' => 'Galerie de l\'utilisateur',
  'no_cat' => '* Pas de catÃ©gorie *',
  'alb_empty' => 'L\'album est vide',
  'last_uploaded' => 'Dernier upload',
  'public_alb' => 'Tout le monde (album public)',
  'me_only' => 'Moi seulement',
  'owner_only' => 'Le propriÃ©taire de l\'album (%s) seulement',
  'groupp_only' => 'Membres du groupe \'%s\'',
  'err_no_alb_to_modify' => 'Il n\'y a pas d\'album modifiable dans la base.',
  'update' => 'Mettre l\'album Ã  jour',
  'notice1' => '(*) en fonction de la configuration des %sgroupes%s', //cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Vous aviez dÃ©jÃ  notÃ© cette photo',
  'rate_ok' => 'Votre vote a Ã©tÃ© pris en compte',
  'forbidden' => 'Vous ne pouvez pas noter vos propres photos.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Bien que les administrateurs de {SITE_NAME} fassent en sorte de supprimer ou modifier toute donnÃ©e Ã  caractÃ¨re rÃ©prÃ©hensible le plus rapidement possible, il est impossible de scruter systÃ©matiquement l'intÃ©gralitÃ© des contenus. Vous Ãªtes par consÃ©quent conscient que tous les posts effectuÃ©s sur ce site expriment les points de vue et opinions de leurs auteurs et non ceux des administrateurs ou du webmaster (sauf, Ã©videmment dans le cas des posts effectuÃ©s par ces derniers), qui ne pourront par consÃ©quent pas Ãªtre considÃ©rÃ©s comme responsables.
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Vous acceptez de ne poster aucune donnÃ©e Ã  caractÃ¨re injurieux, obscÃ¨ne, vulgaire, diffamatoire, menaÃ§ant, sexuel ou tout autre contenu susceptible de violer la loi. Vous acceptez que le webmaster et les modÃ©rateurs de {SITE_NAME} aient le droit de supprimer ou modifier n'importe quel contenu, si cela leur semble opportun.
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Le droit Ã  l'image est la prÃ©rogative reconnue Ã  toute personne de s'opposer, Ã  certaines conditions, Ã  ce que des tiers non autorisÃ©s reproduisent et, a fortiori, diffusent son image. Ainsi, pour toute publication de photos montrant des personnes reconnaissables, vous devez, en tant qu'exposant, Ãªtre en possession d'une autorisation de publication. L'autorisation doit Ãªtre expresse et suffisamment prÃ©cise quant aux modalitÃ©s de diffusion. Vous devez, en tant qu'exposant, pouvoir rapporter la preuve de cet accord exprÃ¨s Ã  toute personne qui en ferait la demande. L'absence d'autorisation engage directement votre unique responsabilitÃ©.
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Les droits d'auteur permettent Ã  leur titulaire d'Ãªtre le seul Ã  produire ou reproduire son oeuvre, Ã  la prÃ©senter au public, Ã  la publier ou Ã  pouvoir octroyer ce droit Ã  quelqu'un d'autre. Ainsi, pour publier des photos, vous devez en Ãªtre l'auteur ou Ãªtre en possession d'une autorisation de publication fournie par l'auteur. Vous devez, en tant qu'exposant, pouvoir rapporter la preuve de cette autorisation Ã  toute personne qui en ferait la demande. L'absence d'autorisation engage directement votre unique responsabilitÃ©.
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Selon le Code de la PropriÃ©tÃ© Intellectuelle du 1er juillet 1992 qui regroupe les lois relatives Ã  la propriÃ©tÃ© intellectuelle, notamment la loi du 11 mars 1957 et la loi du 3 juillet 1985, le droit d'auteur protÃ¨ge les oeuvres sans l'accomplissement de formalitÃ©s. D'autre part, afin d'Ã©viter que d'Ã©ventuels liens puissent Ãªtre faits vers vos photos Ã  partir de sites dont nous ne pouvons contrÃ´ler le contenu, les noms de fichiers de vos photos pourront Ãªtre modifiÃ©s Ã  tout instant et sans prÃ©avis.
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  En tant qu'utilisateur, vous acceptez que toutes les informations entrÃ©es plus haut et toutes les photographies que vous publiez soient stockÃ©es dans une base de donnÃ©es. Bien que ces informations et photographies ne soient pas communiquÃ©es Ã  des tiers sans votre consentement, le webmaster et les administrateurs ne peuvent en aucun cas Ãªtre tenus pour responsables dans le cas de tentatives de hack qui pourraient compromettre les donnÃ©es ou permettre l'accÃ¨s ou l'utilisation illicite de vos photographies.
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Ce site utilise des cookies pour stocker des informations sur votre ordinateur. Ces cookies ne servent qu'Ã  amÃ©liorer votre navigation sur ce site. Votre adresse e-mail ne sera utilisÃ©e que pour confirmer les donnÃ©es de votre inscription ainsi que votre mot de passe.<br />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  En cliquant sur 'J'accepte' ci-dessous, vous acceptez de vous soumettre Ã  ces conditions ainsi qu'Ã  toutes leurs Ã©ventuelles mises Ã  jour.
EOT;

$lang_register_php = array(
  'page_title' => 'inscription d\'utilisateur',
  'term_cond' => 'Conditions gÃ©nÃ©rales d\'inscription',
  'i_agree' => 'J\'accepte',
  'submit' => 'S\'inscrire',
  'err_user_exists' => 'Le nom d\'utilisateur que vous avez entrÃ© existe dÃ©jÃ , merci de bien vouloir en choisir un autre',
  'err_password_mismatch' => 'Les deux mots de passe ne correspondent pas, merci de les entrer Ã  nouveau',
  'err_uname_short' => 'Le nom d\'utilisateur doit comprendre au moins 2 caractÃ¨res',
  'err_password_short' => 'Le mot de passe doit comprendre au moins 2 caractÃ¨res',
  'err_uname_pass_diff' => 'Le nom d\'utilisateur et le mot de passe doivent Ãªtre diffÃ©rents',
  'err_invalid_email' => 'L\'adresse e-mail n\'est pas valide',
  'err_duplicate_email' => 'Un autre utilisateur s\'est dÃ©jÃ  enregistÃ© avec l\'adresse e-mail que vous avez entrÃ©e',
  'enter_info' => 'Entrez les informations relatives Ã  votre inscription',
  'required_info' => 'Informations requises',
  'optional_info' => 'Informations optionnelles',
  'username' => 'Nom d\'utilisateur / login',
  'password' => 'Mot de passe',
  'password_again' => 'Entrez Ã  nouveau le mot de passe',
  'email' => 'Email',
  'location' => 'Localisation',
  'interests' => 'IntÃ©rÃªts',
  'website' => 'Site web',
  'occupation' => 'ActivitÃ©',
  'error' => 'ERREUR',
  'confirm_email_subject' => '%s - Confirmation d\'inscription',
  'information' => 'Informations',
  'failed_sending_email' => 'L\'e-mail de confirmation d\'inscription n\'a pu Ãªtre envoyÃ©!',
  'thank_you' => 'Merci pour votre inscription.<br /><br />Un e-mail contenant les informations sur l\'activation de votre compte vous a Ã©tÃ© envoyÃ© Ã  l\'adresse e-mail que vous nous avez communiquÃ©e.',
  'acct_created' => 'Votre compte a bien Ã©tÃ© crÃ©e. Vous pouvez maintenant vous identifier avec votre login et votre mot de passe',
  'acct_active' => 'Votre compte a bien Ã©tÃ© activÃ©. Vous pouvez maintenant vous identifier avec votre login et votre mot de passe',
  'acct_already_act' => 'Votre compte est dÃ©jÃ  actif!',
  'acct_act_failed' => 'Ce compte ne peut pas Ãªtre activÃ©!',
  'err_unk_user' => 'L\'utilisateur sÃ©lectionnÃ© n\'existe pas!',
  'x_s_profile' => 'Profil de %s',
  'group' => 'Groupe',
  'reg_date' => 'Date d\'inscription',
  'disk_usage' => 'Utilisation du disque',
  'change_pass' => 'Modifier le mot de passe',
  'current_pass' => 'Mot de passe actuel',
  'new_pass' => 'Nouveau mot de passe',
  'new_pass_again' => 'Nouveau mot de passe (Ã  nouveau)',
  'err_curr_pass' => 'Le mot de passe actuel n\'est pas correct',
  'apply_modif' => 'Appliquer les modifications',
  'change_pass' => 'Changer mon mot de passe',
  'update_success' => 'Votre profil a Ã©tÃ© mis Ã  jour',
  'pass_chg_success' => 'Votre mot de passe a Ã©tÃ© modifiÃ©',
  'pass_chg_error' => 'Votre mot de passe n\'a pas Ã©tÃ© modifiÃ©',
  'notify_admin_email_subject' => '%s - notification d\'inscription', //cpg1.3.0
  'notify_admin_email_body' => 'Un nouvel utilisateur s\'est inscrit dans votre galerie, nous le nom "%s"', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
Merci pour votre inscription sur {SITE_NAME}

Votre nom d\'utilisateur/login est : "{USER_NAME}"
Votre mot de passe est : "{PASSWORD}"

Afin d\'activer votre compte, vous devez cliquer sur le lien suivant, ou bien en faire un copier/coller dans la barre d\'adresse de votre navigateur.

{ACT_LINK}

Cordialement,

L'equipe de {SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'VÃ©rifier les commentaires',
  'no_comment' => 'Il n\'y a pas de commentaire Ã  vÃ©rifier',
  'n_comm_del' => '%s commentaire(s) supprimÃ©(s)',
  'n_comm_disp' => 'Nombre de commentaires Ã  afficher',
  'see_prev' => 'Voir prÃ©cÃ©dent(s)',
  'see_next' => 'Voir suivant(s)',
  'del_comm' => 'Supprimer les commentaires sÃ©lectionnÃ©s',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
  0 => 'Rechercher une image dans la galerie',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Rechercher les nouvelles photos',
  'select_dir' => 'Selectionnez le rÃ©pertoire',
  'select_dir_msg' => 'Cette fonction vous permet d\'ajouter un groupe de photos que vous avez uploadÃ© sur votre serveur FTP.<br /><br />SÃ©lectionnez le rÃ©pertoire oÃ¹ vous avez uploadÃ© vos photos',
  'no_pic_to_add' => 'Il n\'y a pas de photo Ã  ajouter',
  'need_one_album' => 'Vous avez besoin d\'au moins un album pour effectuer cette opÃ©ration',
  'warning' => 'Avertissement',
  'change_perm' => 'le script ne peut pas Ã©crire dans ce rÃ©pertoire, vous devez changer ses permissions Ã  755 ou 777 avant d\'essayer d\'ajouter les photos !',
  'target_album' => '<b>Mettre les photos de &quot;</b>%s<b>&quot; dans </b>%s',
  'folder' => 'RÃ©pertoire',
  'image' => 'Image',
  'album' => 'Album',
  'result' => 'RÃ©sultat',
  'dir_ro' => 'Non inscriptible. ',
  'dir_cant_read' => 'Illisible. ',
  'insert' => 'Ajouter de nouvelles images Ã  la galerie',
  'list_new_pic' => 'Liste des nouvelles images',
  'insert_selected' => 'InsÃ©rer les photos sÃ©lectionnÃ©es',
  'no_pic_found' => 'Aucune image n\'a Ã©tÃ© trouvÃ©e',
  'be_patient' => 'Soyez patient. Le script a besoin de temps pour mettre les photos en ligne',
  'no_album' => 'Aucun album sÃ©lectionnÃ©',  //cpg1.3.0
  'notes' =>  '<ul>'.
        '<li><b>OK</b> : signifie que l\'image a bien Ã©tÃ© mise en ligne'.
        '<li><b>DP</b> : signifie que la photo existe dÃ©jÃ  dans la base de donnÃ©es'.
        '<li><b>PB</b> : signifie que la photo n\'a pas pu Ãªtre ajoutÃ©e, vÃ©rifiez votre configuration et les permissions des rÃ©pertoires dans lesquels les images se trouvent'.
        '<li>Si les signes OK, DP, PB n\'apparaissent pas, cliquez sur l\'image cassÃ©e afin de voir le message d\'erreur gÃ©nÃ©rÃ© par PHP'.
        '<li>Si votre browser cesse d\'effectuer la tÃ¢che (timeout), cliquez sur le bouton actualiser'.
        '</ul>',
  'select_album' => 'Choisissez un album', //cpg1.3.0
  'check_all' => 'Tout cocher', //cpg1.3.0
  'uncheck_all' => 'Tout dÃ©cocher', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Bannir des utilisateurs',
  'user_name' => 'Nom d\'utilisateur',
  'ip_address' => 'Adresse IP',
  'expiry' => 'Expire (champs vide signifie que le ban est indÃ©fini)',
  'edit_ban' => 'Sauvegarder les changements',
  'delete_ban' => 'Supprimer',
  'add_new' => 'Ajouter un nouveau ban',
  'add_ban' => 'Ajouter',
  'error_user' => 'Utilisateur introuvable', //cpg1.3.0
  'error_specify' => 'Vous devez spÃ©cifier un nom d\'utilisateur ou une adresse IP', //cpg1.3.0
  'error_ban_id' => 'ID Invalide !', //cpg1.3.0
  'error_admin_ban' => 'Vous ne pouvez pas vous bannir !', //cpg1.3.0
  'error_server_ban' => 'Vous ne pouvez pas bannir votre propre serveur...', //cpg1.3.0
  'error_ip_forbidden' => 'Vous ne pouvez pas bannir cette adresse, elle est non routable !', //cpg1.3.0
  'lookup_ip' => 'Traduire cette adresse IP', //cpg1.3.0
  'submit' => 'Envoyer !', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Mettre une photo en ligne',
  'custom_title' => 'Formulaire de requÃªte personnalisÃ©e', //cpg1.3.0
  'cust_instr_1' => 'Vous pouvez sÃ©lectionner un nombre personnalisÃ© de boxes d\'uploads, dans la limite listÃ©e ci-dessous.', //cpg1.3.0
  'cust_instr_2' => 'RequÃªte de nombre de Boxes', //cpg1.3.0
  'cust_instr_3' => 'Boxes d\'uploads de fichier : %s', //cpg1.3.0
  'cust_instr_4' => 'Boxes d\'uploads URI/URL : %s', //cpg1.3.0
  'cust_instr_5' => 'Boxes d\'uploads URI/URL :', //cpg1.3.0
  'cust_instr_6' => 'Boxes d\'uploads de fichier :', //cpg1.3.0
  'cust_instr_7' => 'Merci de saisir le nombre de chaque type de boxes d\'uploads dÃ©sirÃ©s. Ensuite cliquez sur \'Continuer\'. ', //cpg1.3.0
  'reg_instr_1' => 'Action invalide dans la crÃ©ation du formulaire.', //cpg1.3.0
  'reg_instr_2' => 'Vous pouvez maintenant uploader vos fichiers en utilisant les cases d\'upload ci-dessous. Le poids des fichiers uploadÃ©s de votre fichier vers le serveur ne peut excÃ©der %s Ko chacun. Les fichiers ZIP uploadÃ©s dans les sections \'Upload de fichier\' and \'Upload URI/URL\' resteront compressÃ©s.', //cpg1.3.0
  'reg_instr_3' => 'Si vous souhaitez que le fichier soit dÃ©compressÃ©, vous devez utiliser la case de tÃ©lÃ©chargement fournie dans la zone \'Upload de ZIP dÃ©compressible\'', //cpg1.3.0
  'reg_instr_4' => 'Si vous utilisez la section d\upload URI/URL, saisissez l\'adresse du fichier de la forme http://www.votre-site.com/images/exemple.jpg', //cpg1.3.0
  'reg_instr_5' => 'Lorsque le formulaire est complÃ©tÃ©, cliquez sur \'Continuer\'.', //cpg1.3.0
  'reg_instr_6' => 'Upload de ZIP dÃ©compressible :', //cpg1.3.0
  'reg_instr_7' => 'Uploads de fichier :', //cpg1.3.0
  'reg_instr_8' => 'Uploads URI/URL :', //cpg1.3.0
  'error_report' => 'Rapport d\'erreur', //cpg1.3.0
  'error_instr' => 'Le tÃ©lÃ©chargement suivant a gÃ©nÃ©rÃ© des erreurs :', //cpg1.3.0
  'file_name_url' => 'Nom de fichier / URL', //cpg1.3.0
  'error_message' => 'Message d\'erreur', //cpg1.3.0
  'no_post' => 'Fichier non uploadÃ© par POST.', //cpg1.3.0
  'forb_ext' => 'Extension de fichier incorrect.', //cpg1.3.0
  'exc_php_ini' => 'Le poids excÃ¨de celui permis par le fichier php.ini.', //cpg1.3.0
   'exc_file_size' => 'Le poids excÃ¨de celui permis par Coppermine.', //cpg1.3.0
  'partial_upload' => 'Upload partiel uniquement.', //cpg1.3.0
  'no_upload' => 'L\'upload ne s\'est pas effectuÃ©.', //cpg1.3.0
  'unknown_code' => 'Code d\'erreur d\'upload PHP inconnu.', //cpg1.3.0
   'no_temp_name' => 'Pas d\'upload - Pas de dossier temporaire.', //cpg1.3.0
  'no_file_size' => 'Pas de donnÃ©es ou donnÃ©es endommagÃ©es', //cpg1.3.0
  'impossible' => 'Impossible Ã  dÃ©placer.', //cpg1.3.0
  'not_image' => 'Pas une image ou image endommagÃ©e', //cpg1.3.0
  'not_GD' => 'Pas une extension GD.', //cpg1.3.0
  'pixel_allowance' => 'Allocation de pixel excÃ©dÃ©e.', //cpg1.3.0
  'incorrect_prefix' => 'PrÃ©fixe URI/URL incorrect', //cpg1.3.0
  'could_not_open_URI' => 'Ouverture d\'URI impossible.', //cpg1.3.0
  'unsafe_URI' => 'SÃ»retÃ© non vÃ©rifiable.', //cpg1.3.0
  'meta_data_failure' => 'Erreur de Meta-donnÃ©es', //cpg1.3.0
  'http_401' => '401 RefusÃ©', //cpg1.3.0
  'http_402' => '402 Paiement requis', //cpg1.3.0
  'http_403' => '403 Interdit', //cpg1.3.0
  'http_404' => '404 Non trouvÃ©', //cpg1.3.0
  'http_500' => '500 Erreur interne au serveur', //cpg1.3.0
  'http_503' => '503 Service indisponible', //cpg1.3.0
  'MIME_extraction_failure' => 'Type MIME indÃ©terminÃ©.', //cpg1.3.0
  'MIME_type_unknown' => 'Type MIME inconnu', //cpg1.3.0
  'cant_create_write' => 'CrÃ©ature du fichier impossible.', //cpg1.3.0
  'not_writable' => 'Ecriture dans le fichier impossible.', //cpg1.3.0
  'cant_read_URI' => 'Lecture de l\'URI/URL impossible', //cpg1.3.0
  'cant_open_write_file' => 'Ouverture du fichier de l\'URI impossible.', //cpg1.3.0
  'cant_write_write_file' => 'Ecriture dans le fichier de l\'URI impossible.', //cpg1.3.0
  'cant_unzip' => 'DÃ©zippage impossible.', //cpg1.3.0
  'unknown' => 'Erreur inconnue.', //cpg1.3.0
  'succ' => 'Uploads effectuÃ©s avec succÃ¨s', //cpg1.3.0
  'success' => '%s uploads effectuÃ©s avec succÃ¨s.', //cpg1.3.0
  'add' => 'Cliquez sur \'Continue\' pour ajouter les fichiers aux albums.', //cpg1.3.0
  'failure' => 'Erreur d\'upload', //cpg1.3.0
  'f_info' => 'Information du fichier', //cpg1.3.0
  'no_place' => 'Le fichier prÃ©cÃ©dent n\'a pas pu Ãªtre placÃ©.', //cpg1.3.0
  'yes_place' => 'Le fichier prÃ©cÃ©dent a Ã©tÃ© placÃ© avec succÃ¨s', //cpg1.3.0
  'max_fsize' => 'Le poids maximal autorisÃ© pour une image est de %s Ko',
  'album' => 'Album',
  'picture' => 'Photo',
  'pic_title' => 'Titre de la photo',
  'description' => 'Description de la photo',
  'keywords' => 'Mots clefs (sÃ©parÃ©s par des espaces)',
  'err_no_alb_uploadables' => 'Nous sommes dÃ©solÃ©s, mais il n\'existe pas d\'album dans lequel vous ayiez le droit d\'uploader des photos',
  'place_instr_1' => 'Merci de placer les fichiers dans les albums maintenant.  Vous pouvez aussi saisir les informations de chaque fichier.', //cpg1.3.0
  'place_instr_2' => 'Plus de fichiers ont besoin d\'Ãªtre placÃ©s Merci de cliquer sur \'Continuer\'.', //cpg1.3.0
  'process_complete' => 'Vous avez placÃ© tous les fichiers avec succÃ¨s.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'title' => 'GÃ©rer les utilisateurs',
  'name_a' => 'Nom ascendant',
  'name_d' => 'Nom descendant',
  'group_a' => 'Groupe ascendant',
  'group_d' => 'Groupe descendant',
  'reg_a' => 'Date d\'inscription ascendante',
  'reg_d' => 'Date d\'inscription descendante',
  'pic_a' => 'Nombre de photos ascendant',
  'pic_d' => 'Nombre de photos descendant',
  'disku_a' => 'Utilisation espace disque ascendant',
  'disku_d' => 'Utilisatation espace disque descendant',
  'lv_a' => 'DerniÃ¨re visite ascendante', //cpg1.3.0
  'lv_d' => 'DerniÃ¨re visite descendante', //cpg1.3.0
  'sort_by' => 'Classer les utilisateurs par',
  'err_no_users' => 'La table d\'utilisateurs est vide!',
  'err_edit_self' => 'Vous ne pouvez pas modifier votre propre profil, utilisez le lien \'Mon profil\' pour effectuer cette opÃ©ration',
  'edit' => 'EDITER',
  'delete' => 'SUPPRIMER',
  'name' => 'Nom d\'utilisateur',
  'group' => 'Groupe',
  'inactive' => 'Inactif',
  'operations' => 'OpÃ©rations',
  'pictures' => 'Photos',
  'disk_space' => 'Espace utilisÃ© / quota',
  'registered_on' => 'EnregistrÃ© le',
  'last_visit' => 'DerniÃ¨re visite', //cpg1.3.0
  'u_user_on_p_pages' => '%d utilisateur(s) sur %d page(s)',
  'confirm_del' => 'Voulez vous vraiment SUPPRIMER cet utilisateur?\\nToutes ses photos et albums seront Ã©galement supprimÃ©s',
  'mail' => 'E-MAIL',
  'err_unknown_user' => 'L\'utilisateur sÃ©lectionnÃ© n\'existe pas!',
  'modify_user' => 'Modifier l\'utilisateur',
  'notes' => 'Commentaires',
  'note_list' => '<li>Si vous ne souhaitez pas modifier le mot de passe actuel, laisse le champs "mot de passe" vide.',
  'password' => 'Mot de passe',
  'user_active' => 'L\'utilisateur est actif',
  'user_group' => 'Groupe de l\'utilisateur',
  'user_email' => 'e-mail de l\'utilisateur',
  'user_web_site' => 'Site web de l\'utilisateur',
  'create_new_user' => 'CrÃ©er un nouvel utilisateur',
  'user_location' => 'Localisation de l\'utilisateur',
  'user_interests' => 'Centres d\'intÃ©rÃªt de l\'utilisateur',
  'user_occupation' => 'ActivitÃ© de l\'utilisateur',
  'latest_upload' => 'Derniers uploads', //cpg1.3.0
  'never' => 'Jamais', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
  'title' => 'Redimensionner les photos',
  'what_it_does' => 'FonctionnalitÃ©s',
  'what_update_titles' => 'Met Ã  jour les titres Ã  partir des noms de fichier',
  'what_delete_title' => 'Supprime les titres',
  'what_rebuild' => 'RegÃ©nÃ¨re les vignettes et les photos redimensionnÃ©es',
  'what_delete_originals' => 'Supprime les photos originales et les remplace par leur version redimensionnÃ©e',
  'file' => 'Fichier',
  'title_set_to' => 'titre changÃ© en',
  'submit_form' => 'valider',
  'updated_succesfully' => 'modifiÃ© avec succÃ¨s',
  'error_create' => 'ERREUR lors de la crÃ©ation',
  'continue' => 'Continuer avec plus d\'images',
  'main_success' => 'Le fichier %s est maintenant utilisÃ© comme image principale',
  'error_rename' => 'Erreur lors du changement du nom de %s Ã  %s',
  'error_not_found' => 'Le fichier %s n\'a pas Ã©tÃ© trouvÃ©',
  'back' => 'retour Ã  la page principale',
  'thumbs_wait' => 'Mise Ã  jour des vignettes et/ou images redimensionnÃ©es, merci de patienter...',
  'thumbs_continue_wait' => 'Continuer la mise Ã  jour des vignettes et/ou des images redimensionnÃ©es...',
  'titles_wait' => 'Mise Ã  jour des titres, merci de patienter...',
  'delete_wait' => 'Suppression des titres, merci de patienter...',
  'replace_wait' => 'Suppression des originaux et remplacement de ces derniers par les images redimensionnÃ©es, merci de patienter...',
  'instruction' => 'Instructions rapides',
  'instruction_action' => 'Selectionnez une action',
  'instruction_parameter' => 'DÃ©finissez les paramÃ¨tres',
  'instruction_album' => 'SÃ©lectionnez un album',
  'instruction_press' => 'Appuyez sur %s',
  'update' => 'Mettre Ã  jour les vignettes et/ou les photos redimensionnÃ©es',
  'update_what' => 'Ce qui doit Ãªtre mis Ã  jour',
  'update_thumb' => 'Seulement les vignettes',
  'update_pic' => 'Seulement les photos redimensionnÃ©es',
  'update_both' => 'Les vignettes et les images redimensionnÃ©es',
  'update_number' => 'Nombre d\'images traitÃ©es par clic',
  'update_option' => '(essayez de rÃ©duire cette valeur si vous avez des problÃ¨mes de timeout)',
  'filename_title' => 'Nom du fichier / Titre de l\'image',
  'filename_how' => 'Comment le nom du fichier doit-il Ãªtre modifiÃ© ?',
  'filename_remove' => 'Supprimer la fin .jpg et remplacer _ (underscore) par des espaces',
  'filename_euro' => 'Changer 2003_11_23_13_20_20.jpg en 23/11/2003 13:20',
  'filename_us' => 'Changer 2003_11_23_13_20_20.jpg en 11/23/2003 13:20',
  'filename_time' => 'Changer 2003_11_23_13_20_20.jpg en 13:20',
  'delete' => 'Supprimer le titre des photos ou les photos dans leur taille d\'origine',
  'delete_title' => 'Supprimer le titre des photos',
  'delete_original' => 'Supprimer les photos dans leur taille d\'origine',
  'delete_replace' => 'Supprime les images originales en les remplaÃ§ant par les versions redimensionnÃ©es',
  'select_album' => 'Selectionner un album',
  'delete_orphans' => 'Supprimer les commentaires orphelins (fonctionne pour tous les albums)', //cpg1.3.0
  'orphan_comment' => 'Pas de commentaire ophelin trouvÃ©', //cpg1.3.0
  'delete' => 'Supprimer', //cpg1.3.0
  'delete_all' => 'Supprimer tout', //cpg1.3.0
  'comment' => 'Commentaire : ', //cpg1.3.0
  'nonexist' => 'LiÃ© au fichier non existant # ', //cpg1.3.0
  'phpinfo' => 'Afficher phpinfo', //cpg1.3.0
  'update_db' => 'Mise Ã  jour de la base de donnÃ©es', //cpg1.3.0
  'update_db_explanation' => 'Si vous avez remplacÃ© des fichiers Coppermine, effectuÃ© des modifications ou upgradÃ© Ã  partir de versions prÃ©cÃ©dentes de Coppermine, assurez-vous d\'exÃ©cuter la mise Ã  jour de base de donnÃ©es une fois. Cela crÃ©era les tables et/ou valeurs de configuration nÃ©cessaires dans la base de donnÃ©es.', //cpg1.3.0
);
?>

