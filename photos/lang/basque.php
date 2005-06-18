<?php

// ENCODING CHECK; SHOULD BE YEN BETA MU: ¥ ß µ

// info about translators and translated language
$lang_translation_info = array(
'lang_name_english' => 'Basque',  
'lang_name_native' => 'Euskera',
'lang_country_code' => 'eu', 
'trans_name'=> 'Kurtsik', //the name of the translator - can be a nickname
'trans_email' => 'kurtsik@gmail.com', //translator's email address (optional)
'trans_website' => 'http://www.tuxtek.com', //translator's website (optional)
'trans_date' => '2004-12-12', //the date the translation was created / last modified
);

$lang_charset = 'iso-8859-1';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Byteak', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Iga', 'Ale', 'Aar', 'Aaz', 'Ote', 'Oti', 'Lar');
$lang_month = array('Urt', 'Ots', 'Mar', 'Api', 'Mai', 'Eka', 'Uzt', 'Abu', 'Ira', 'Urr', 'Aza', 'Abe');

// Some common strings
$lang_yes = 'Bai';
$lang_no  = 'Ez';
$lang_back = 'Atzera';
$lang_continue = 'Jarraitu';
$lang_info = 'Informazioa';
$lang_error = 'Akatsa';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%Y(e)ko %B(a)ren %d(e)an';
$lastcom_date_fmt =  '%y/%m/%d %H:%M(e)an';
$lastup_date_fmt = '%Y(e)ko %B(a)ren %d(e)an';
$register_date_fmt = '%Y(e)ko %B(a)ren %d(e)an';
$lasthit_date_fmt = '%Y(e)ko %B(a)ren %d(e)an %H:%M';
$comment_date_fmt =  '%Y(e)ko %B(a)ren %d(e)an %H:%M(e)an';

// For the word censor
$lang_bad_words = array();

$lang_meta_album_names = array(
	'random' => 'Irudiak boleoan',
	'lastup' => 'Azken irudiak',
	'lastalb'=> 'Eraldatutako azken bildumak',
	'lastcom' => 'Azken iruzkinak',
	'topn' => 'Bisita gehien',
	'toprated' => 'Estimatuenak',
	'lasthits' => 'Azken bisitaldiak',
	'search' => 'Bilaketaren emaitzak',
	'favpics'=> 'Gogokoak'
);

$lang_errors = array(
	'access_denied' => 'Ez duzu orri honetan sartzeko baimena.',
	'perm_denied' => 'Ez duzu hau egiteko baimena.',
	'param_missing' => 'Scriptari deia derrigorrezko parametrorik gabe.',
	'non_exist_ap' => 'Aukeratutako bilduma ez dago!',
	'quota_exceeded' => 'Disko kuota gainditu duzu<br /><br />Zure disko kuota [quota]KBekoa da, zure fitxategiek [space]KB okupatzen dute, hau gehituta kuota gaindituko duzu.',
	'gd_file_type_err' => 'GD irudi liburutegia erabiltzen denean PNG eta JPEG formatuak baino ezin dira erabili.',
	'invalid_image' => 'Gehitu duzun irudia akastuna da edo GD liburutegiak ezin du kudeatu.',
	'resize_failed' => 'Ezin izan dut miniatura sortu.',
	'no_img_to_display' => 'Ez dago erakusteko irudirik.',
	'non_exist_cat' => 'Aukeratutako kategoria ez dago.',
	'orphan_cat' => 'Kategoria umezurtza dago sisteman, kategoriak kudeatzeko tresna abiatu arazoa konpontzeko.',
	'directory_ro' => '\'%s\' direktorian ez duzu idazteko baimena, ezin ditut fitxategiak ezabatu.',
	'non_exist_comment' => 'Aukeratutako iruzkina ez dago.',
	'pic_in_invalid_album' => 'Fitxategia ez dagoen bilduma batean dago (%s)!?',
	'banned' => 'Oraingoz web honetan ezin zara sartu.',
	'not_with_udb' => 'Funtzio hau ezgaituta dago foruen funtzionalitateekin lotuta dago eta. Egin nahi duzuna ez da posible sistemaren konfigurazio honekin edo foruen aplikazioen esku dago.',
	'offline_title' => 'Ezgaitua', //cpg1.3.0
	'offline_text' => 'Une honetan galeria ezgaituta dago, berehala konponduko dugu.', //cpg1.3.0
	'ecards_empty' => 'Une honetan ez dago postalik erakusteko. Ziurtatu konfigurazioan aukera hau aktibatu duzula!', //cpg1.3.0
	'action_failed' => 'Ezin izan dut zure eskaera burutu.', //cpg1.3.0
	'no_zip' => 'ZIP fitxategiak kudeatzeko liburutegiak ez daude erabilgarri. Hitzegizu bilduma honen administradorearekin.', //cpg1.3.0
	'zip_type' => 'ZIP fitxategiak gehitzeko ez duzu baimenik.', //cpg1.3.0
);

$lang_bbcode_help = 'Honako kodigo hauek erabilgarriak izan daitezke: <li>[b]<b>Beltza</b>[/b]</li> <li>[i]<i>Etzana</i>[/i]</li> <li>[url=http://www.tuxtek.com/]Testua[/url]</li> <li>[email]erabiltzailea@domeinua.com[/email]</li>'; //cpg1.3.0

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
	'alb_list_title' => 'Bilduma zerrendara joan',
	'alb_list_lnk' => 'Bilduma zerrenda',
	'my_gal_title' => 'Nire bilduma pertsonaletara joan',
	'my_gal_lnk' => 'Nire bilduma',
	'my_prof_lnk' => 'Nire erabiltzaile profila',
	'adm_mode_title' => 'Admin modura joan',
	'adm_mode_lnk' => 'Admin modua',
	'usr_mode_title' => 'Erabiltzaile modura joan',
	'usr_mode_lnk' => 'Erabiltzaile modua',
	'upload_pic_title' => 'Bilduma batean fitxategia gehitu',
	'upload_pic_lnk' => 'Fitxategia gehitu',
	'register_title' => 'Erabiltzailea sortu',
	'register_lnk' => 'Izena eman',
	'login_lnk' => 'Sartu',
	'logout_lnk' => 'Irten',
	'lastup_lnk' => 'Azken fitxategiak',
	'lastcom_lnk' => 'Azken iruzkinak',
	'topn_lnk' => 'Ikusienak',
	'toprated_lnk' => 'Estimatuenak',
	'search_lnk' => 'Bilatu',
	'fav_lnk' => 'Nire gogokoak',
	'memberlist_title' => 'Bazkideen zerrenda erakutsi', //cpg1.3.0
	'memberlist_lnk' => 'Bazkideen zerrenda', //cpg1.3.0
	'faq_title' => '&quot;Coppermine&quot; argazki bildumari buruzko gardera arruntak', //cpg1.3.0
	'faq_lnk' => 'FAQ', //cpg1.3.0
);

$lang_gallery_admin_menu = array(
	'upl_app_lnk' => 'Igoerak baimendu',
	'config_lnk' => 'Konfiguratu',
	'albums_lnk' => 'Bildumak',
	'categories_lnk' => 'Kategoriak',
	'users_lnk' => 'Erabiltzaileak',
	'groups_lnk' => 'Taldeak',
	'comments_lnk' => 'Iruzkinak',
	'searchnew_lnk' => 'Fitxategiak gehitu (Batch)',
	'util_lnk' => 'Administratzeko tresnak',
	'ban_lnk' => 'Erabiltzaileak kaleratu',
	'db_ecard_lnk' => 'Postalak erakutsi', //cpg1.3.0
);

$lang_user_admin_menu = array(
	'albmgr_lnk' => 'Bildumak sortu / ordenatu',
	'modifyalb_lnk' => 'Nire bildumak eraldatu',
	'my_prof_lnk' => 'Nire profila',
);

$lang_cat_list = array(
	'category' => 'Kategoria',
	'albums' => 'Bildumak',
	'pictures' => 'Fitxategiak',
);

$lang_album_list = array(
	'album_on_page' => '%d bilduma %d orrialdetan'
);

$lang_thumb_view = array(
	'date' => 'DATA',
	//Sort by filename and title
	'name' => 'Izena',
	'title' => 'Titulua',
	'sort_da' => 'Dataren arabera gorako ordenatua',
	'sort_dd' => 'Dataren arabera beherako ordenatua',
	'sort_na' => 'Izenaren arabera gorako ordenatua',
	'sort_nd' => 'Izenaren arabera beherako ordenatua',
	'sort_ta' => 'Tituluaren arabera gorako ordenatua',
	'sort_td' => 'Tituluaren arabera beherako ordenatua',
	'download_zip' => 'ZIP fitxategian deskagatu', //cpg1.3.0
	'pic_on_page' => '%d fitxategi %d orrialdetan',
	'user_on_page' => '%d erabiltzaile %d orrialdetan',
);

$lang_img_nav_bar = array(
	'thumb_title' => 'Bildumaren aurkibidea',
	'pic_info_title' => 'Fitxategiari buruzko infoa erakutsi',
	'slideshow_title' => 'Slideshow',
	'ecard_title' => 'Postala bidali',
	'ecard_disabled' => 'Postalak bidaltzea ezgaitua',
	'ecard_disabled_msg' => 'Ez duzu postalak bidaltzeko baimena',
	'prev_title' => 'Aurreko fitxategia ikusi',
	'next_title' => 'Hurrengo fitxategia ikusi',
	'pic_pos' => 'FITXATEGIA %s/%s',
);

$lang_rate_pic = array(
	'rate_this_pic' => 'Fitxategi hau baloratu ',
	'no_votes' => '(Ez dago boturik)',
	'rating' => '(Egungo balorazioa : %s / 5 %s boturekin)',
	'rubbish' => 'Txarra',
	'poor' => 'Halan holan',
	'fair' => 'Normala',
	'good' => 'Ona',
	'excellent' => 'Oso ona',
	'great' => 'Itzela',
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
	CRITICAL_ERROR => 'Akats larria',
	'file' => 'Fitxategia: ',
	'line' => 'Lerroa: ',
);

$lang_display_thumbnails = array(
	'filename' => 'Fitxateagia: ',
	'filesize' => 'Tamaina: ',
	'dimensions' => 'Neurriak: ',
	'date_added' => 'Igotze data: ',
);

$lang_get_pic_data = array(
	'n_comments' => '%s iruzkin',
	'n_views' => '%s aldiz ikusia',
	'n_votes' => '(%s botu)'
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Debug informazioa', //cpg1.3.0
  'select_all' => 'Guztiak hautatu', //cpg1.3.0
  'copy_and_paste_instructions' => 'Coppermineren foroan laguntza eskatu behar baduzu debug informazio hau kopiatu eta zure mezuan jarri. Adi ibili bidali baino lehen pasahitzei buruzko informazio guztia asteriskoekin (***) ordezkatzeko.', //cpg1.3.0
  'phpinfo' => 'phpinfo erakutsi', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => 'Hizkuntza defektuz', //cpg1.3.0
  'choose_language' => 'Hizkuntza aukeratu', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'Gaia defektuz', //cpg1.3.0
  'choose_theme' => 'Gaia aukeratu (itxura)', //cpg1.3.0
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
	0 => 'Admin modutik irteten...',
	1 => 'Admin moduan sartzen...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
	'alb_need_name' => 'Bildumek izena izan behar dute!', //js-alert
	'confirm_modifs' => 'Seguru aldaketak aplikatu nahi dituzula?', //js-alert
	'no_change' => 'Ez dut aldaketarik egin!', //js-alert
	'new_album' => 'Bilduma berria',
	'confirm_delete1' => 'Seguru bilduma hau ezabatu nahi duzula?', //js-alert
	'confirm_delete2' => '\nDauzkan fitxategi eta iruzkinak galdu egingo dira!', //js-alert
	'select_first' => 'Lehenago bilduma bat aukeratu',
	'alb_mrg' => 'Bilduma administratzailea',
	'my_gallery' => '* Nire bilduma *',
	'no_category' => '* Kategoriarik gabe *',
	'delete' => 'Ezabatu',
	'new' => 'Berria',
	'apply_modifs' => 'Aldaketak aplikatu',
	'select_category' => 'Kategoria aukeratu',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
	'miss_param' => 'Behar ditudan parametroak: \'%s\' ez dizkidazu eman!',
	'unknown_cat' => 'Aukeratu duzun kategoria ez dago datu basean',
	'usergal_cat_ro' => 'Erabiltzaileen bildumen kategoriak ezin dituzu ezabatu!',
	'manage_cat' => 'Kategorien antolatzailea',
	'confirm_delete' => 'Seguru kategoria hau ezabatu nahi duzula?',
	'category' => 'Kategoria',
	'operations' => 'Ekintzak',
	'move_into' => 'Hona mugitu',
	'update_create' => 'Kategoria eraldatu / sortu',
	'parent_cat' => 'Kategoria nagusia',
	'cat_title' => 'Kategoriaren izenburua',
	'cat_thumb' => 'Kategoriaren miniatura', //cpg1.3.0
	'cat_desc' => 'Kategoriaren deskribapena',
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
	'title' => 'Konfigurazioa',
	'restore_cfg' => 'Defektuzko balioak berrezarri',
	'save_cfg' => 'Konfigurazio berria gorde',
	'notes' => 'Oharrak',
	'info' => 'Informazioa',
	'upd_success' => 'Coppermineren konfigurazioa eguneratu egin dut',
	'restore_success' => 'Coppermieneren defektuzko balioak berrezarri ditut',
	'name_a' => 'Izenaren arabera gorako',
	'name_d' => 'Izenaren arabera beherako',
	'title_a' => 'Izenburuaren arabera gorako',
	'title_d' => 'Izenburuaren arabera beherako',
	'date_a' => 'Dataren arabera gorako',
	'date_d' => 'Dataren arabera beherako',
	'th_any' => 'Zabalera/luzeera gehiena',
	'th_ht' => 'Altuera',
	'th_wd' => 'Zabalera',
	'label' => 'etiketa', //cpg1.3.0
	'item' => 'grafikoa', //cpg1.3.0
	'debug_everyone' => 'Denentzat', //cpg1.3.0
	'debug_admin' => 'Admin soilik', //cpg1.3.0
        );

if (defined('CONFIG_PHP')) $lang_config_data = array(
	'Parametro orokorrak',
	array('Bildumaren izena', 'gallery_name', 0),
	array('Bildumaren deskribapena', 'gallery_description', 0),
	array('Administratzailearen ePosta', 'gallery_admin_email', 0),
	array('e-cardetako \'Argazki gehiago ikusi\' atalari lotutako webgunea', 'ecards_more_pic_target', 0),
	array('Bilduma ezgaitua', 'offline', 1), //cpg1.3.0
	array('Postalak gorde', 'log_ecards', 1), //cpg1.3.0
	array('Gogokoak ZIP formatuan deskargatzea baimendu', 'enable_zipdownload', 1), //cpg1.3.0

	'Hizkuntza, gaiak (itxura) eta karaktere bilduma',
	array('Hizkuntza', 'lang', 5),
	array('Gaia (itxura)', 'theme', 6),
	array('Hizkuntzen zerrenda erakutsi', 'language_list', 1), //cpg1.3.0
	array('Hizkuntzen banderak erakutsi', 'language_flags', 8), //cpg1.3.0
	array('&quot;reset&quot; erakutsi hizkuntzen aukeraketan', 'language_reset', 1), //cpg1.3.0
	array('Gaien zerrenda erakutsi (itxura)', 'theme_list', 1), //cpg1.3.0
	array('&quot;reset&quot; erakutsi gaien aukeraketan', 'theme_reset', 1), //cpg1.3.0
	array('FAQak erakutsi (galdera arruntak)', 'display_faq', 1), //cpg1.3.0
	array('bbcoderi buruzko laguntza erakutsi', 'show_bbcode_help', 1), //cpg1.3.0
	array('Karaktere bilduma', 'charset', 4), //cpg1.3.0

	'Bildumen zerrendaren itxura',
	array('Taula nagusiaren zabalera (pixelak edo %)', 'main_table_width', 0),
	array('Zenbat kategoria maila erakutsi', 'subcat_level', 0),
	array('Zenbat bilduma erakutsi', 'albums_per_page', 0),
	array('Zenbat zutabe bildumen zerrendan', 'album_list_cols', 0),
	array('Miniaturen taima pixeletan', 'alb_list_thumb_size', 0),
	array('Orri nagusiaren edukina', 'main_page_layout', 0),
	array('Lehen mailako bildumen miniaturak kategoriatan erakutsi','first_level',1),

	'Miniaturen itxura (thumbnailak)',
	array('Zenbat zutabe miniaturen orrian', 'thumbcols', 0),
	array('Zenbat lerro miniaturen orrian', 'thumbrows', 0),
	array('Zenbat fitxa erakutsi gehienez', 'max_tabs', 10),
	array('File captiona (izenburuaz gain) erakutsi miniaturaren azpian', 'caption_in_thumbview', 1),
	array('Zenbat aldiz ikusi duten erakutsi miniaturaren azpian', 'views_in_thumbview', 1), //cpg1.3.0
	array('Iruzkin kopurua erakutsi miniaturaren azpian', 'display_comment_count', 1),
	array('Fitxategia nork igo zuen erakutsi miniaturaren azpian', 'display_uploader', 1), //cpg1.3.0
	array('Irudien defektuzko ordena', 'default_sort_order', 3),
	array('Botu kopuru minimoa irudi bat \'Estimatuenen\' zerrendan agertzeko', 'min_votes_for_rating', 0), //cpg1.3.0

	'Irudien ikuspegia eta iruzkinen konfigurazioa',
	array('Irudiak erakusteko taularen zabalera (pixelak edo %)', 'picture_table_width', 0),
	array('Defektuz ikusiko den fitxategiari buruzko infoa', 'display_pic_info', 1),
	array('Iruzkinetan hitz gogorrak filtratu', 'filter_bad_words', 1),
	array('Iruzkinetan emotikoiak gaitu', 'enable_smilies', 1),
	array('Onartu erabiltzaile batek irudi bati iruzkin bat baino gehiago egitea (flood protection ezgaitu)', 'disable_comment_flood_protect', 1), //cpg1.3.0
	array('Irudien deskripzioaren tamaina gehienez', 'max_img_desc_length', 0),
	array('Iruzkin batean hitz kopurua gehienez', 'max_com_wlength', 0),
	array('Iruzkin batean lerro kopurua gehienez', 'max_com_lines', 0),
	array('Iruzkinen luzeera gehienez', 'max_com_size', 0),
	array('Pelikula tira erakutsi', 'display_film_strip', 1),
	array('Zenbat elementu pelikula tiran', 'max_film_strip_items', 0),
	array('Iruzkinak ePostaz bidali administradoreari', 'email_comment_notification', 1), //cpg1.3.0
	array('Slideshowen irudien arteko denbora tartea milisegundutan (segundu 1 = 1000 milisegundu)', 'slideshow_interval', 0), //cpg1.3.0

	'Miniatura eta fitxategien konfigurazioa',
	array('JPEG fitxategientzako kalitatea', 'jpeg_qual', 0),
	array('Miniaturen zabalera / luzeera gehienez <b>*</b>', 'thumb_width', 0),
	array('Hau erabili ( zabalera, altuera edo maximoa minuaturentzako )<b>**</b>', 'thumb_use', 7),
	array('Tamaina ertaineko irudiak sortu','make_intermediate',1),
	array('Tarmaina ertaineko irudietan zabalera / altuera gehienez <b>*</b>', 'picture_width', 0),
	array('Erabiltzaileek gehitutako fitxategien tamaina gehienez (KBetan)', 'max_upl_size', 0),
	array('Gehitutako irudi / bideoen zabalera / altuera gehienez (pixeletan)', 'max_upl_width_height', 0),

	'Miniatura eta fitxategien konfigurazio aurretatua', //cpg1.3.0
	array('Alta eman gabeko erabiltzaileei bilduma pribatuen ikonoa erakutsi','show_private',1), //cpg1.3.0
	array('Fitxategi izenburuetan debekatutako karaktereak', 'forbiden_fname_char',0), //cpg1.3.0
	//array('Extensiones admitidas al aÃ±adir archivos', 'allowed_file_extensions',0), //cpg1.3.0
 	array('Onartzen diren irudi motak', 'allowed_img_types',0), //cpg1.3.0
	array('Onartzen diren bideo motak', 'allowed_mov_types',0), //cpg1.3.0
	array('Onartzen diren soinu fitxategi motak', 'allowed_snd_types',0), //cpg1.3.0
	array('Onartzen diren dukumentu motak', 'allowed_doc_types',0), //cpg1.3.0
	array('Irudiak berreskalatzeko metodoa','thumb_method',2), //cpg1.3.0
	array('ImageMagicken \'convert\' tresnarako bidea (/usr/bin/X11/ adibidez)', 'impath', 0), //cpg1.3.0
	//array('Tipos de archivo admitidos (solo vÃ¡lidos con ImageMagick)', 'allowed_img_types',0), //cpg1.3.0
	array('ImageMagickentzako komandoak', 'im_options', 0), //cpg1.3.0
	array('EXIF datuak irakurri JPEG fitxategietan', 'read_exif_data', 1), //cpg1.3.0
	array('IPTC datuak irakurri JPEG fitxategietan', 'read_iptc_data', 1), //cpg1.3.0
	array('Bildumen oinarrizko direktoria <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0), //cpg1.3.0
	array('Erabiltzaileen fitxategientzako direktoria <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0), //cpg1.3.0
	array('Tarteko irudientzako aurrizkia <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0), //cpg1.3.0
	array('Miniaturentzako aurrizkia <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0), //cpg1.3.0
	array('Direktorientzako defektuzko modua', 'default_dir_mode', 0), //cpg1.3.0
	array('Fitxategientzako defektuzko modua', 'default_file_mode', 0), //cpg1.3.0

	'Erabiltzaileen konfigurazioa',
	array('Erabiltzaile berrien errejistroa baimendu', 'allow_user_registration', 1),
	array('Erabiltzaileen errejistroak ePostaz ziurtatzea eskatzen du', 'reg_requires_valid_email', 1),
	array('Erabiltzaile berrien alta administradoreari ePostaz jakinarazi', 'reg_notify_admin_email', 1), //cpg1.3.0
	array('Bi erabiltzailek ePosta berbera edukitzea ahalbidetu', 'allow_duplicate_emails_addr', 1),
	array('Erabiltzaileek bilduma pribatuak eduki ahal dituzte (Oharra: \'bai\'tik \'ez\'era aldatzen baduzu dauden bilduma pribatu guztiak publiko bihurtuko dira)', 'allow_private_albums', 1), //cpg1.3.0
	array('Administradoreari jakinarazi gaitzeko fitxategiak daudela', 'upl_notify_admin_email', 1), //cpg1.3.0
	array('Balidatutako erabiltzaileek bazkideen zerrenda ikustea baimendu', 'allow_memberlist', 1), //cpg1.3.0

	'Gune gehigarriak irudiak deskribatzeko (zuri utzi erabili ezean)',
	array('1 gunearen izena', 'user_field1_name', 0),
	array('2 gunearen izena', 'user_field2_name', 0),
	array('3 gunearen izena', 'user_field3_name', 0),
	array('4 gunearen izena', 'user_field4_name', 0),
	
	'Cookieen konfigurazioa',
	array('Cookiearen izena (foruekin batera erabiltzen denean adi ibili foruenarekin desberdina izateko)', 'cookie_name', 0),
	array('Cookiearen PATHa', 'cookie_path', 0),

	'Bestelako konfigurazioak',
	array('Debug era gaitu', 'debug_mode', 9), //cpg1.3.0
	array('Debug eran abisuak erakutsi', 'debug_notice', 1), //cpg1.3.0

	'<br /><div align="left"><a name="notice1"></a>(*) Datu basean datuak badaude balore hauek ez dituzu aldatu behar.<br />
	<a name="notice2"></a>(**) Balore hauek aldatuz gero hemendik aurrera gehitutako fitxategien gainean izango du eragina, horrexegatik dagoeneko bilduman irudiak badaude ez da gomendagarria aldatzea. Dauden irudietan aldaketak egin ahal dituzu administrazio menuaren &quot;<a href="util.php">Tamainak aldatu</a>&quot; tresnarekin.</div><br />', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Bidalitako postalak', //cpg1.3.0
  'ecard_sender' => 'Igorlea', //cpg1.3.0
  'ecard_recipient' => 'Jasotzailea', //cpg1.3.0
  'ecard_date' => 'Data', //cpg1.3.0
  'ecard_display' => 'Postala erakutsi', //cpg1.3.0
  'ecard_name' => 'Izena', //cpg1.3.0
  'ecard_email' => 'ePosta', //cpg1.3.0
  'ecard_ip' => 'IPa #', //cpg1.3.0
  'ecard_ascending' => 'gorako', //cpg1.3.0
  'ecard_descending' => 'beherako', //cpg1.3.0
  'ecard_sorted' => 'Ordena', //cpg1.3.0
  'ecard_by_date' => 'dataren arabera', //cpg1.3.0
  'ecard_by_sender_name' => 'igorlearen arabera', //cpg1.3.0
  'ecard_by_sender_email' => 'igorlearen ePostaren arabera', //cpg1.3.0
  'ecard_by_sender_ip' => 'igorlearen IParen arabera', //cpg1.3.0
  'ecard_by_recipient_name' => 'jasotzailearen izenaren arabera', //cpg1.3.0
  'ecard_by_recipient_email' => 'jasotzailearen ePostaren arabera', //cpg1.3.0
  'ecard_number' => '%s tik %s rako errejistroak erakusten (Totala %s)', //cpg1.3.0
  'ecard_goto_page' => 'orrira joan', //cpg1.3.0
  'ecard_records_per_page' => 'Errejistroak orriko', //cpg1.3.0
  'check_all' => 'Guztiak markatu', //cpg1.3.0
  'uncheck_all' => 'Guztiak desmarkatu', //cpg1.3.0
  'ecards_delete_selected' => 'Aukeratutako postalak ezabatu', //cpg1.3.0
  'ecards_delete_confirm' => 'Seguru errejistro hauek ezabatunahi dituzula? checkboxa markatu!', //cpg1.3.0
  'ecards_delete_sure' => 'Seguru nago', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
	'empty_name_or_com' => 'Zure izena eta iruzkin batean idatzi behar duzu',
	'com_added' => 'Zure iruzkina gehitu dut',
	'alb_need_title' => 'Bildumaren izena idatzi behar duzu!',
	'no_udp_needed' => 'Ez da aldaketarik behar',
	'alb_updated' => 'Bilduma eguneratu dut',
	'unknown_album' => 'Aukeratutako bilduma ez dago edo ez daukazu irudiak gehitzeko baimena',
	'no_pic_uploaded' => 'Ez dut fitxategirik gehitu!<br /><br />Irudiak bidaltzen saiatu bazara ziurtatu zerbitzariak igoerak onartzen dituela...',
	'err_mkdir' => 'Akatsa direktoria sortzean %s!',
	'dest_dir_ro' => ' %s direktorioak ez dauka idazteko baimena!',
	'err_move' => 'Ezin izan dut %s  %s ra mugitu!',
	'err_fsize_too_large' => 'Igo nahi duzun fitxategia handiegia da (onartzen den handiena %s x %s)',
	'err_imgsize_too_large' => 'Igo nahi duzun fitxategia handiegia da (onartzen den handiena %s KB)',
	'err_invalid_img' => 'Igo nahi duzun fitxategia ez da irudi balidoa',
	'allowed_img_types' => '%s irudi igo ahal duzu soilik.',
	'err_insert_pic' => 'Ezin izan dut \'%s\' fitxategia bilduman alta eman ',
	'upload_success' => 'Fitxategia ondo gorde dut<br /><br />administradoreek baimendu ostean ikusi ahal izango da.',
	'notify_admin_email_subject' => '%s - Oharra, fitxategi gehitua', //cpg1.3.0
	'notify_admin_email_body' => '%s k zure oniritsia behar duen irudi bat gehitu du. Visita %s', //cpg1.3.0
	'info' => 'Informazioa',
	'com_added' => 'Iruzkin gehitua',
	'alb_updated' => 'Bilduma eguneratua',
	'err_comment_empty' => 'Iruzkina hutsik dago!',
	'err_invalid_fext' => 'Estensio hauek dauzkaten fitxategiak onartzen dira soilik : <br /><br />%s.',
	'no_flood' => 'Barkatu baina fitxategi honetan sartutako azken iruzkinaren egilea zara.<br /><br />Eraldatu nahi baduzu edita dezakezu',
	'redirect_msg' => 'Berbidaltzen....<br /><br /><br />Sakatu \'JARRAITU\' orria automatikoki freskatzen ez bada',
	'upl_success' => 'Fitxategia ondo gehitu dut',
	'email_comment_subject' => 'Coppermine bilduman iruzkina gehitu dut', //cpg1.3.0
	'email_comment_body' => 'Norbaitek iruzkin bat gehitu dio zure bildumari. Hemen ikus dezakezu', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
	'caption' => 'Izenburua',
	'fs_pic' => 'tamaina osoko irudia',
	'del_success' => 'zuzen ezabatua',
	'ns_pic' => 'tamaina normaleko irudia',
	'err_del' => 'ezin da ezabatu',
	'thumb_pic' => 'miniatura',
	'comment' => 'iruzkina',
	'im_in_alb' => 'irudiak bilduman',
	'alb_del_success' => '\'%s\' bilduma ezabatua',
	'alb_mgr' => 'Bilduma antolatzailea',
	'err_invalid_data' => 'Datu ez balidoak jaso ditut \'%s\'n',
	'create_alb' => '\'%s\' bilduma sortzen',
	'update_alb' => '\'%s\' bilduma eguneratzen : izenburua \'%s\' eta indizea \'%s\'',
	'del_pic' => 'Fitxategia ezabatu',
	'del_alb' => 'Bilduma ezabatu',
	'del_user' => 'Erabiltzailea ezabatu',
	'err_unknown_user' => 'Aukeratu duzun erabiltzailea ez dago!',
	'comment_deleted' => 'Iruzkina ezabatu dut',
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
	'confirm_del' => 'Seguru fitxategi hau ezabtu nahi duzula? \\nIruzkinak ere ezabatuko ditut.',
	'del_pic' => 'FITXATEGI HAU EZABATU',
	'size' => '%s x %s pixel',
	'views' => '%s aldiz',
	'slideshow' => 'Slideshow',
	'stop_slideshow' => 'SLIDESHOWa GELDITU',
	'view_fs' => 'Hemen sakatu irudia tamaina osoan ikusteko',
	'edit_pic' => 'Deskribapena editatu', //cpg1.3.0
	'crop_pic' => 'Moztu eta biratu', //cpg1.3.0
);

$lang_picinfo = array(
	'title' =>'Fitxategiari buruzko infoa',
	'Filename' => 'Fitxategiaren izena',
	'Album name' => 'Bildumaren izena',
	'Rating' => 'Balorazioa (%s botu)',
	'Keywords' => 'Hitz gakoak',
	'File Size' => 'Fitxategiaren tamaina',
	'Dimensions' => 'Neurriak',
	'Displayed' => 'Ikusi dute',
	'Camera' => 'Kamara',
	'Date taken' => 'Kapturaren data',
	'Aperture' => 'Zabalera',
	'Exposure time' => 'Esposizio denbora',
	'Focal length' => 'Fokoa',
	'Comment' => 'Iruzkina',
	'addFav'=>'Gogokoetan gehitu',
	'addFavPhrase'=>'Gogokoak',
	'remFav'=>'Gogokoetatik kendu',
	'iptcTitle'=>'IPTC - Izenburua', //cpg1.3.0
	'iptcCopyright'=>'IPTC - Copyrighta', //cpg1.3.0
	'iptcKeywords'=>'IPTC - Hitz gakoa', //cpg1.3.0
	'iptcCategory'=>'IPTC - Kategoria', //cpg1.3.0
	'iptcSubCategories'=>'IPTC - Azpikategoriak', //cpg1.3.0
);

$lang_display_comments = array(
	'OK' => 'ADOS',
	'edit_title' => 'Iruzkina editatu',
	'confirm_delete' => 'Seguru iruzkin hau ezabatu nahi duzula?',
	'add_your_comment' => 'Iruzkina gehitu',
	'name'=>'Izena',
	'comment'=>'Iruzkina',
	'your_name' => 'Anonimoa',
);

$lang_fullsize_popup = array(
	'click_to_close' => 'Leiho hau ixteko irudian egin klik',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
	'title' => 'Postala bidali',
	'invalid_email' => '<b>ADI</b> : ePosta helbidea ez zuzena!',
	'ecard_title' => '%s k postal bat bidali dizu',
	'error_not_image' => 'Soilik irudiekin sortu ahal dira postalak.', //cpg1.3.0
	'view_ecard' => 'Irudia ondo ikusten ez baduzu lotura honetan egin klik',
	'view_more_pics' => 'Hemen sakatu irudi gehiago ikusteko!',
	'send_success' => 'Postala bidali dut',
	'send_failed' => 'Barkatu baina zerbitzariak ezin izan du postala bidali...',
	'from' => 'Nork',
	'your_name' => 'Zure izena',
	'your_email' => 'Zure ePosta',
	'to' => 'Nori',
	'rcpt_name' => 'Jasotzailearen izena',
	'rcpt_email' => 'Jasotzaileren ePosta',
	'greetings' => 'Mezuaren izenburua',
	'message' => 'Mezua',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
	'pic_info' => 'Informazioa',
	'album' => 'Bilduma',
	'title' => 'Izenburua',
	'desc' => 'Deskribapena',
	'keywords' => 'Hitz gakoak',
	'pic_info_str' => '%sx%s - %sKB - %s aldiz ikusia - %s botu',
	'approve' => 'Fitxategia onartu',
	'postpone_app' => 'Beranduago onartu',
	'del_pic' => 'Fitxategia ezabatu',
	'read_exif' => 'EXIF datuak berriro irakurri', //cpg1.3.0
	'reset_view_count' => 'Ikustaldien kontadorea hutsean jarri',
	'reset_votes' => 'Botuak hutsean jarri',
	'del_comm' => 'Iruzkinak ezabatu',
	'upl_approval' => 'Gehitutako fitxategiak onartu',
	'edit_pics' => 'Irudiak editatu',
	'see_next' => 'Hurrengo fitxategiak ikusi',
	'see_prev' => 'Aurreko fitxategiak ikusi',
	'n_pic' => '%s fitxategia(k)',
	'n_of_pic_to_disp' => 'ZSenbat fitxategi erakutsi',
	'apply' => 'Aldaketak onartu',
	'crop_title' => 'Coppermineren irudi editorea', //cpg1.3.0
	'preview' => 'Aurrikusi', //cpg1.3.0
	'save' => 'Irudia gorde', //cpg1.3.0
	'save_thumb' =>'Minituran gorde', //cpg1.3.0
	'sel_on_img' =>'Aukeraketa osoak irudi barruan egon behar du!', //js-alert //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Galdera arruntak', //cpg1.3.0
  'toc' => 'Edukinen aurkibidea', //cpg1.3.0
  'question' => 'Galdera: ', //cpg1.3.0
  'answer' => 'Erantzuna: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'Galdera orokorrak', //cpg1.3.0
  array('Zergatik behar dut errejistratu?', 'Administradoreak errejistroa derrigortu dezake. Errejistroaren bitartez estatistikak, gogokoen zerrenda, argazkiak bozkatu, iruzkinak gehitu, etab .. bezalako gaitasunak erabil daitezke', 'allow_user_registration', '0'), //cpg1.3.0
  array('Nola errejistra naiteke?', '&quot;Alta eman&quot;n sakatu eta derrigorrezko eremuak bete (nahi izanez gero aukerakoak ere bai).<br />ePosta bitartez egiten bada balidazioa mezu bat jasoko duzu zer egin behar duzun azaltzen (lotura batean klikatzen soilik). Kontua aktibatu arte ezin izango duzu sistema sartu.', 'allow_user_registration', '1'), //cpg1.3.0
  array('Nola egiten da logina (sistema sartu)?', '&quot;Login&quot;en sakatu, idatzi zure erabiltzaile izena eta pasahitza, nahi izanez gero &quot;Gogorarazi&quot; markatu hurrengoan ez galdetzeko.<br /><b>ADI: aukera hau funzionatzea nahi baduzu zure nabegadorean cookieak gaituta izan behar dituzu eta jasoko duzun cookiea ez duzu ezabatu behar).</b>', 'offline', 'Zergatik ezin dut login egin?', 'Errejistratu zara?, aktibatu duzu kontua (bidali dizugun ePostan loturan klikatu). Hori eginda zure kontua gaituta egon beharko litzateke, hala ez bada sistemaren administradorearekin jarri harremanetan.', 'offline', 0), //cpg1.3.0
  array('Zer gertatuko litzateke nire pasahitza ahaztuz gero?', 'Webguneak &quot;Nire pasahitza ahaztu dut&quot; ezaugarria gaituta ba du pasahitza bertan egin klik eta prozesua segitu, bestela administradorearekin jarri harremanetan berri bat eginteko.', 'offline', 0), //cpg1.3.0
  //array('Zer gertatzen da nire ePosta aldatuz gerol?', 'Ezer ez, login egin eta zure helbide berria idatzi &quot;Nire profila&quot; atalean.', 'offline', 0), //cpg1.3.0
  array('Zelan gorde dezaket irudi bat &quot;Nire gogokoak&quot; atalean?', 'Irudian egin klik eta gero &quot;fitxategiari buruzko infoa erakutsi&quot; ikonoan (<img src="images/info.gif" width="16" height="16" border="0" alt="Fitxategiari buruzko infoa" />); joan informazio hori agertu den lekura eta &quot;Gogokoetan gehitu&quot;n sakatu.<br />Administradoreak &quot;Fitxategiari buruzko infoa erakutsi&quot; defektuz gaitu dezake.<br />ADI!: cookieak gaituta izan behar dituzu eta gune honetako cookiea ez da ezabatu behar.', 'offline', 0), //cpg1.3.0
  array('Zelan balora dezaket argazki bat?', 'Irudiaren miniaturan egin klik, bere azpikaldean begiratu eta aukeratu puntuaketa.', 'offline', 0), //cpg1.3.0
  array('Zelan gehitu diezaioket iruzkin bat argazki bati?', 'Irudiaren miniaturan egin klik, bere azpikaldean begiratu. Bertan idatz dezakezu zure iruzkina.', 'offline', 0), //cpg1.3.0
  array('Zelan igo dezaket irudi bat?', '&quot;Fitxategia gehitu&quot;n egin klik eta aukeratu zein bildumari gehituko diozun, &quot;Arakatu&quot;n sakatu eta aukeratu igo nahi duzun irudia, &quot;Ados&quot; sakatu (nahi izanez gero izenburua eta deskripzioa ere jarri ahal duzu), amaitzeko &quot;Fitxategi berria gehitu&quot;n egin klik', 'allow_private_albums', 0), //cpg1.3.0
  array('Non jar dezaket irudia?', '&quot;Nire bilduma&quot;ko bilduma batean irudiak gehitu ditzakezu. Gerta daiteke kategoria nagusiko bilduma bat baino gehiagotak administradoreak ezaugarri hau ezgaitzea.', 'allow_private_albums', 0), //cpg1.3.0
  array('Zein tamaina eta irudi mota gehitu igo dezaket?', 'Motak (jpg,gif,..etc.) eta tamainak administradoreak erabakitzen ditu.', 'offline', 0), //cpg1.3.0
  array('Zer da &quot;Nire bilduma&quot;?', '&quot;Nire bilduma&quot; bilduma pertsonala da, erabiltzaileak konfiguratu eta fitxategiak gehitu ahal ditu.', 'allow_private_albums', 0), //cpg1.3.0
  array('Zelan sortu, ezabatu edo berrizendatu dezaken bilduma bat &quot;Nire bilduma&quot;n?', 'Debes entrar en &quot;Modo administrador&quot;<br />&quot;Bildumak sortu/ordenatu&quot;n egin klik eta gero &quot;Birria&quot;n. &quot;Bilduma berria&quot; kendu eta nahi duzun izena jarri.<br />Zure edozein bildumari izena alda diezaiokezu.<br />&quot;Aldaketak aplikatu&quot;n sakatu amaitzeko.', 'allow_private_albums', 0), //cpg1.3.0
  array('Nola kudea ditzaket nire bildumak?', '&quot;Admin modua&quot;sartu.<br />&quot;Nire bildumak eraldatun&quot;n egin klik.&quot;Bilduma eraldatu&quot; barran aukeratu aldatu nahi duzun bilduma.<br />Hemen kudea dezakezu: izana, deskribapena, miniatura, nork ikusi eta komenta dezakeen, ... .<br />Sakatu &quot;Bilduma eraldatu&quot; aldaketak gordetzeko.', 'allow_private_albums', 0), //cpg1.3.0
  array('Zelan ikus ditzaket beste erabiltzaileen bildumak?', '&quot;Bildumen zerrenda&quot;ra joan eta &quot;Erabiltzaileen bildumak&quot; aukeratu.', 'allow_private_albums', 0), //cpg1.3.0
  array('Zer dira cookieak?', 'Cookieak zerbitzariak nebegagoreei bidaltzen dizkien testu fitxategi txikiak dira.<br />Normalean horien bitartez zure ezarpenak gogoratu ahal ditu zerbitzariak (beste erabilpen batzuk ere izan ditzakete).', 'offline', 0), //cpg1.3.0
  array('Non lor dezaket programa hau?', 'Coppermine galeria multimedia librea da, GNU GPL lizentziapean argitaratuta. Ezaugarriz beteta eta plataforma eta sistema anitza. Gehiago jakiteko eta programa eskuratzeko <a href="http://coppermine.sf.net/">Coppermineren webgunea</a> bisita ezazu.', 'offline', 0), //cpg1.3.0

  'Copperminen zehar nabigatzen', //cpg1.3.0
  array('Zer da &quot;Bildumen zerrenda&quot;?', 'Hemen erabiltzaileek bilduma guztiak ikus ditzakete (baita kategorien zerrenda). Miniaturak kategoriekiko lotura zuzenak izan daitezke.', 'offline', 0), //cpg1.3.0
  array('Zer da &quot;Nire bilduma&quot;?', 'Ezaugarri honen bitartez erabiltzaileak bere bilduma propioa sor dezake eta bertan fitxategiak gehitu, ezabatu edo eraldatu.', 'allow_private_albums', 0), //cpg1.3.0
  array('Zertan desberdintzen dira &quot;Admin modua&quot; eta &quot;Erabiltzaile modua&quot;?', 'Admin moduan moduan erabiltzaileak bere bilduma eralda dezake (administradoreak baimenduz gero gauza gehiago).', 'allow_private_albums', 0), //cpg1.3.0
  array('Zer da &quot;Fitxategia gehitu&quot;?', 'Ezaugarri honen bitartez erabiltzaileak irudiak gehitu ditzakete (administradoreak zehaztutako tamaina eta moten arabera) haiek edota administradoreak aukeratutako biduma batean.', 'allow_private_albums', 0), //cpg1.3.0
  array('Zer da &quot;Azken fitxategiak&quot;?', 'Bildumetan gehitutako azken fitxategi / irudiak erakusten ditu.', 'offline', 0), //cpg1.3.0
  array('Zer da &quot;Azken iruzkinak&quot;?', 'Erabiltzaileek gehitu dituzten azken iruzkinak erakusten du (komentatutako irudiak ere agertzen dira).', 'offline', 0), //cpg1.3.0
  array('Zer da &quot;Ikusienak&quot;?', 'Erabiltzaileek gehien ikusi dituzten argazkiak erakusten ditu (errejistratuak eta bisitariak).', 'offline', 0), //cpg1.3.0
  array('Zer da &quot;Estimatuenak&quot;?', 'Erabiltzaileek gehien bozkatu dituzten (eta botuen media) argazkiak erakusten ditu, adibidez: : bost erabiltzailek esan dute <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: irudiak honako bataz besteko puntuazioa izango du <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ; 5 erabiltzailek 1etik 5era puntuatu badute (1,2,3,4,5) bataz bestekoa izango da: <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />Puntuaketak <img src="images/rating5.gif" width="65" height="14" border="0" alt="onena" />etik (onena) <img src="images/rating0.gif" width="65" height="14" border="0" alt="txarrena" /> arte (txarrena).', 'offline', 0), //cpg1.3.0
  array('Zer da &quot;Nire gogokoak&quot;?', 'Ezaugarri honek erabiltzaileari gogoko duen irudi bat cookiean gordetzea ahalbidetzen dio.', 'offline', 0), //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Pasahitza berreskuratu', //cpg1.3.0
  'err_already_logged_in' => 'Dagoeneko izena eman duzu!', //cpg1.3.0
  'enter_username_email' => 'Idatzi zure erabiltzaile izena edo ePosta', //cpg1.3.0
  'submit' => 'pasahitza bilatu', //cpg1.3.0
  'failed_sending_email' => 'Ezin izan dizut pasahitza daukan ePosta bidali!', //cpg1.3.0
  'email_sent' => '%s ra bidali dut ePosta zure erabiltzaile izena eta pasahitzarekin', //cpg1.3.0
  'err_unk_user' => 'Idatzi duzun erabiltzailea ez dago!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - Pasahitza berreskuratzea', //cpg1.3.0
  'passwd_reminder_body' => 'Erabiltzaile honen pasahitza berreskuratzea eskatu duzu:
Erabiltzailea: %s
Pasahitza: %s
%s sakatu onartzeko.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
	'group_name' => 'Taldearen izena',
	'disk_quota' => 'Disko kuota',
	'can_rate' => 'Fitxategiak baloratu ahal dituzte',
	'can_send_ecards' => 'Postalak bidali ahal dituzte',
	'can_post_com' => 'Iruzkinak gehitu ahal dituzte',
	'can_upload' => 'Fitxategiak gehitu ahal dituzte',
	'can_have_gallery' => 'Bilduma pertsonalak eduki ahal dituzte',
	'apply' => 'Aldaketak onartu',
	'create_new_group' => 'Talde berria sortu',
	'del_groups' => 'Aukeratutako taldea(k) ezabatu',
	'confirm_del' => 'Adi!!, talde bat ezabatzen duzunean bertako erabiltzaileak  \'Registered\' taldera pasatzen ditut!\n\nJarraitu nahi duzu?',
	'title' => 'Erabiltzaile taldeak konfiguratu',
	'approval_1' => 'Bilduma publikoetan onartuak (1)',
	'approval_2' => 'Bilduma pribatuetan onartuak (2)',
	'upload_form_config' => 'Igotzeko formularioaren konfigurazioa', //cpg1.3.0
	'upload_form_config_values' => array( 'Fitxategi solteak igo soilik', 'Fitxategi batzuk igo soilik', 'URI igoera soilik', 'ZIPak igo soilik', 'URI-fitxategiak', 'ZIP-fitxategiak', 'URI-ZIP', 'Fitxategiak-URI-ZIP'), //cpg1.3.0
	'custom_user_upload'=>'Erabiltzaileak igoeren kopurua zehaztu dezake?', //cpg1.3.0
	'num_file_upload'=>'Zenbat igoera gehienez', //cpg1.3.0
	'num_URI_upload'=>'Zenbat URI igoera gehienez', //cpg1.3.0
	'note1' => '<b>(1)</b> Bilduma publikoetan irudiak gehitzeak administratzaileen onarpena beharko du',
	'note2' => '<b>(2)</b> Bilduma pribatuetan irudiak gehitzeak administratzaileen onarpena beharko du',
	'notes' => 'Oharrak'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
	'welcome' => 'Ongi etorri!'
);

$lang_album_admin_menu = array(
	'confirm_delete' => 'Seguru bilduma hau ezabatu nahi duzula? \\nIrudi eta iruskin guztiak ezabatuko ditut.',
	'delete' => 'Ezabatu',
	'modify' => 'Eraldatu',
	'edit_pics' => 'Irudiak editatu',
);

$lang_list_categories = array(
	'home' => 'Hasiera',
	'stat1' => '<b>[pictures]</b> fitxategi <b>[albums]</b> bildumetan eta <b>[cat]</b> kategoria <b>[comments]</b> iruzkinekin, <b>[views]</b> aldiz bisitatua(k)',
	'stat2' => '<b>[pictures]</b> fitxategi <b>[albums]</b> bildumatan, <b>[views]</b> aldiz bisitatua(k)',
	'xx_s_gallery' => '%s (r)en bilduma',
	'stat3' => '<b>[pictures]</b> fitxategi <b>[albums]</b> bildumatan <b>[comments]</b> iruzkinekin, <b>[views]</b> aldiz bisitatua(k)'
);

$lang_list_users = array(
	'user_list' => 'Erabiltzaileen zerrenda',
	'no_user_gal' => 'Ez dago bildumak izateko eskubidea duen erabiltzailerik',
	'n_albums' => '%s bilduma',
	'n_pics' => '%s fitxategi'
);

$lang_list_albums = array(
	'n_pictures' => '%s fitxategiak',
	'last_added' => ', gehitutako azkena: %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
	'login' => 'Login',
	'enter_login_pswd' => 'Erabiltzailea eta pasahitza idatzi',
	'username' => 'Erabiltzaile izena',
	'password' => 'Pasahitza',
	'remember_me' => 'Gogora nazazu',
	'welcome' => 'Ongi etorri %s ...',
	'err_login' => '*** Login ez zuzena. Saiatu berriro ***',
	'err_already_logged_in' => 'Dagoeneko izena eman duzu!',
	'forgot_password_link' => 'Nire pasahitza ahaztu dut', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
	'logout' => 'Irten',
	'bye' => 'Hurrenerarte, %s ...',
	'err_not_loged_in' => 'Ez duzu izena eman!',
);

// ------------------------------------------------------------------------- //
// File phpinfo.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP info', //cpg1.3.0
  'explanation' => 'Hau da <a href="http://www.php.net/phpinfo">phpinfo()</a> PHP-funtzioak ematen duen irteera, Coperminek erakutsita (trimming the output at the right corner).', //cpg1.3.0
  'no_link' => 'Besteei hau ikusten uztea arriskutsua izan daiteke, horregatik administradore bezala logeatuta zaudenean soilik ikus dezakezu orri hau. Ezin diezu besteei lotura hau bidali, sarrera debekatuta baitaukate.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
	'upd_alb_n' => '%s bilduma eraldatu',
	'general_settings' => 'Konfigurazio orokorra',
	'alb_title' => 'Bildumaren izenburua',
	'alb_cat' => 'Bildumaren kategoria',
	'alb_desc' => 'Bildumaren deskripzioa',
	'alb_thumb' => 'Bildumaren miniatura',
	'alb_perm' => 'Bilduma honek baimenak',
	'can_view' => 'Hauek ikus dezakete bilduma hau',
	'can_upload' => 'Bisitariek irudiak gehitu ditzakete',
	'can_post_comments' => 'Bisitariek iruzkinak gehitu ditzakete',
	'can_rate' => 'Bisitariek argazkiak baloratu ahal dituzte',
	'user_gal' => 'Erabiltzailearen bilduma',
	'no_cat' => '* Kategoriarik gabekoa *',
	'alb_empty' => 'Bilduma hutsik dago',
	'last_uploaded' => 'Gehitutako azken irudia',
	'public_alb' => 'Denek (bilduma publikoa)',
	'me_only' => 'Nik soilik',
	'owner_only' => 'Bildumaren jabe soilik (%s)',
	'groupp_only' => '\'%s\' taldearen partaideak',
	'err_no_alb_to_modify' => 'Ez dago zuk eraldatu ahal duzun bildumarik.',
	'update' => 'Bilduma eraldatu',
	'notice1' => '(*) %staldeen%s konfigurazioaren arabera', //cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
	'already_rated' => 'Barkatu baina dagoeneko bozkatu duzu',
	'rate_ok' => 'Zure botua zenbatu dut',
	'forbidden' => 'Ezin dituzu zure irudiak bozkatu.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
{SITE_NAME}ko administratzaileak edukin ez egokiak edo iraingarriak azkar ezabatzen saiatuko dira, hala ere ezinenkoa da bidaltzen den informazio guzti guztia ikuskatzea. Herregatik ulertu behar duzu webgune honetan plazaratutako iritzi guztiak egileen iritzia eta ikus puntua dela, ez webmaste edo administradoreena (beraiek idatitakoak izan ezik).<br />
<br />
Zin egiten duzu ez duzula inolako material iraingarria, arrazista, gorrotagarria edo ilegala argitaratuko eta, halaber, onartzen duzu { SITE_NAME }ko webmasterrak horrelakoa den edozen materialak webgunetik ezaba dezakeela. Onartzen duzu zuk idatzitako informazio guztia datu base batean biltegiratuko dela, informazio hau ez da inoiz beste kontuetarako erabiliko. Webmasterra eta administradorea ez dira datu basearen integritatearen erantzuleak.<br />
<br />
Webgune honek cookieak erabiltzen ditu. Hauen bitartez nabegazioa hobetzen dugu. ePosta zure profila eta pasahitza ziurtatzeko baino ez dugu erabiltzen.<br />
<br />
Ados bazaude 'Ados nago'n egin klik
EOT;

$lang_register_php = array(
	'page_title' => 'Erabiltzaile berria',
	'term_cond' => 'Baldintzak',
	'i_agree' => 'Ados nago',
	'submit' => 'Alta eskaera bidali',
	'err_user_exists' => 'Aukeratu duzun erabiltzaile izena dagoeneko hartuta dago, beste bat aukeratu mesedez',
	'err_password_mismatch' => 'Bi pasahitzak ez dira berdinak, saiatu berriro',
	'err_uname_short' => 'Erabiltzaile izenak 2 karaktere izan behar du gutxienez',
	'err_password_short' => 'Pasahitzak 2 karaktere izan behar du gutxienez',
	'err_uname_pass_diff' => 'Erabiltzaile izenak eta pasahitzak desberdinak izan behar dute',
	'err_invalid_email' => 'ePosta ez da balidoa',
	'err_duplicate_email' => 'Beste erabiltzaile bat errejistratu da lehenago zuk idatzitako ePostarekin',
	'enter_info' => 'Errejistratzeko informazioa idatzi',
	'required_info' => 'Derrigorrezko informazioa',
	'optional_info' => 'Aukerako informazioa',
	'username' => 'Erabiltzaile izena',
	'password' => 'Pasahitza',
	'password_again' => 'Pasahitza (berriro)',
	'email' => 'ePosta',
	'location' => 'Bizilekua',
	'interests' => 'Gustuak',
	'website' => 'Web orria',
	'occupation' => 'Lanbidea',
	'error' => 'AKATSA',
	'confirm_email_subject' => '%s - Altaren ziurtapena',
	'information' => 'Informazioa',
	'failed_sending_email' => 'Alta ziurtatzeko ePosta ezin izan dut bidali!',
	'thank_you' => 'Mila esker alta emateagatik.<br /><br />Zuk idatzitako ePostara mezu bat bidali dut kontua aktibatzeko behar duzun informazio guztiarekin.',
	'acct_created' => 'Zure kontu sortuta dago, orain sistema erabili ahal duzu zure erabiltzailea eta zure pasahitza idatziz',
	'acct_active' => 'Zure kontua aktibo dago, orain sistema erabili ahal duzu zure erabiltzailea eta zure pasahitza idatziz',
	'acct_already_act' => 'Zure kontua aktibatuta zegoen ya!',
	'acct_act_failed' => 'Kontu hau ezin da aktibatu!',
	'err_unk_user' => 'Aukeratuta erabiltzailea ez dago!',
	'x_s_profile' => '%s ren profila',
	'group' => 'Taldea',
	'reg_date' => 'Alta data',
	'disk_usage' => 'Diskoaren erabilpena',
	'change_pass' => 'Pasahitza aldatu',
	'current_pass' => 'Egungo pasahitza',
	'new_pass' => 'Pasahitz berria',
	'new_pass_again' => 'Pasahitz berria (berriro)',
	'err_curr_pass' => 'Egungo pasahitza ez da zuzena',
	'apply_modif' => 'Aldaketak gorde',
	'change_pass' => 'Nire pasahitza aldatu',
	'update_success' => 'Profila eguneratu dut',
	'pass_chg_success' => 'Pasahitza aldatu dut',
	'pass_chg_error' => 'Ez dut pasahitza aldatu',
	'notify_admin_email_subject' => '%s - Errejistro jakinarazpena', //cpg1.3.0
	'notify_admin_email_body' => 'Erabiltzaile berria errejistratu da zure bilduman "%s" izenpean', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
Mila esker {SITE_NAME}n errejistratzeagatik

Zure erabiltzaile izena: "{USER_NAME}"
Zure pasahitza: "{PASSWORD}"

Aktibaketa amaitzeko bahean agertzen den loturaren gainean egin klik 
edo kopiatu zure nabegadoaren helbide barran.

{ACT_LINK}

Ondo ibili.

{SITE_NAME}ko administradoreak

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
	'title' => 'Iruzkinak ikuskatu',
	'no_comment' => 'Ez dago erakusteko iruzkinik',
	'n_comm_del' => '%s iruzkin ezabatuta',
	'n_comm_disp' => 'Zenbat iruzkin erakutsi',
	'see_prev' => 'Aurrekoa ikusi',
	'see_next' => 'Hurrengoa ikusi',
	'del_comm' => 'Aukeratutako iruzkinak ezabatu',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
	0 => 'Bilduma guztietan bilatu',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
	'page_title' => 'Fitxategi berriak bilatu',
	'select_dir' => 'Aukeratu direktoria',
	'select_dir_msg' => 'Funtzio honen bitartez FTP bidez igotako fitxategi guztiak automatikoki gehituko dira.<br /><br />Aukeratu fitxategiak utzi dituzun direktorioa',
	'no_pic_to_add' => 'Ez dago fitxategirik gehitzeko',
	'need_one_album' => 'Funtzio hau erabiltzeko bilduma bat behar duzu gutxienez',
	'warning' => 'Adi',
	'change_perm' => 'Scriptak ezin izan du direktorioan idatzi, bere baimenak aldatu behar dituzu (755 edo 777) berriro saiatu baino lehen!',
	'target_album' => '<b>&quot;</b>%s<b>&quot; direktorioko fitxategiak </b>%s bilduman jarri',
	'folder' => 'Karpeta',
	'image' => 'Irudia',
	'album' => 'Bilduma',
	'result' => 'Emaitza',
	'dir_ro' => 'Ezin da idatzi. ',
	'dir_cant_read' => 'Ezin da irakurri. ',
	'insert' => 'Bilduman fitxategiak gehitzen',
	'list_new_pic' => 'Fitxategi berrien zerrenda',
	'insert_selected' => 'Aukeratutako fitxategiak gehitu',
	'no_pic_found' => 'Ez dut fitxategi berririk topatu',
	'be_patient' => 'Lasai, scriptak denbora behar du fitxategi guztiak gehitzeko',
	'no_album' => 'ez duzu bildumarik aukeratu',  //cpg1.3.0
	'notes' =>  '<ul>'.
				'<li><b>OK</b> : fitxategia ondo gehitu duela esan nahi du'.
				'<li><b>DP</b> : fitxategia duplikatuta dagoela esan nahi du (dagoeneko datu basean dagoela)'.
				'<li><b>PB</b> : fitxategia ezin izan duela gehitu esan nahi du (ziurtatu, mesedez, konfigurazioa eta direktoriaren baimenak)'.
				'<li><b>NA</b> : fitxategiak gehitzeko bilduma ez duzula aukera esan nahi du, \'<a href="javascript:history.back(1)">Atzera</a>\' sakatu eta bilduma bat aukeratu. Bat izan ezean lehenago <a href="albmgr.php">bat sortu</a></li>'.
				'<li>OK, DP, PB ikonoak agertu ezean, sakatu kargatu gabeko irudiaren ikonoan PHPk bueltatu duen akatsa ikusteko'.
				'<li>Nabegadoreak timeout bueltatzen badu, eguneratzeko ikonoak sakatu'.
				'</ul>',
	'select_album' => 'bilduma aukeratu', //cpg1.3.0
	'check_all' => 'Guztiak markatu', //cpg1.3.0
	'uncheck_all' => 'Guztiak desmarkatu', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
	'title' => 'Erabiltzaileak kaleratu',
	'user_name' => 'Erabiltzaile izena',
	'ip_address' => 'IP helbidea',
	'expiry' => 'Iraungitzea (zuriz betirako)',
	'edit_ban' => 'Aldaketak gorde',
	'delete_ban' => 'Ezabatu',
	'add_new' => 'Kaleraketa berria',
	'add_ban' => 'Berria',
	'error_user' => 'Ezin izan dut erabiltzailea topatu', //cpg1.3.0
	'error_specify' => 'Erabiltzaile izena edo IPa idatzi behar duzu', //cpg1.3.0
	'error_ban_id' => 'Kaletze identifikadorea ez balidoa!', //cpg1.3.0
	'error_admin_ban' => 'Ezin duzu zure burua kaleratu!', //cpg1.3.0
	'error_server_ban' => 'Zeure zerbitzaria kaleratu behar duzu?? Ezin duzu hori egin...', //cpg1.3.0
	'error_ip_forbidden' => 'Ezin duzu IP hau kaleratu, ez da bideragarria!', //cpg1.3.0
	'lookup_ip' => 'IPa bilatu', //cpg1.3.0
	'submit' => 'bilatu', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
	'title' => 'Fitxategi berria',
	'custom_title' => 'Formularioak personalizatzeko', //cpg1.3.0
	'cust_instr_1' => 'Igotzeko gelaxken kopurua zehaztu ahal duzu. Hala ere, ezin duzu behean zehaztutako mugak gainditu.', //cpg1.3.0
	'cust_instr_2' => 'Box Number Requests', //cpg1.3.0
	'cust_instr_3' => 'Fitxategiak igoetzeko gelaxka: %s', //cpg1.3.0
	'cust_instr_4' => 'URI/URLak igoetzeko gelaxka: %s', //cpg1.3.0
	'cust_instr_5' => 'URI/URLak igoetzeko gelaxka:', //cpg1.3.0
	'cust_instr_6' => 'Fitxategiak igotzeko gelaxkak:', //cpg1.3.0
	'cust_instr_7' => 'Idatzi zenbat mota baikoitzeko gelaxka nahi duzun oraingo honetan.  Gero \'Jarraitu\' sakatu. ', //cpg1.3.0
	'reg_instr_1' => 'Ekintza ezbalidoa formularioa sortzeko.', //cpg1.3.0
	'reg_instr_2' => 'Orain fitxategiak igo ahal dituzu beheko igoera gelaxkak erabilita. Fitxategiak ezin dira  %s KB baino handiagoak. ZIP fitxategiak \'Fitxategi igotzea\' eta \'URI/URL igotzea\' ataletan konprimituta iraungo dute.', //cpg1.3.0
	'reg_instr_3' => 'Konprimitutako fitxategiak deskonprimituak izatea nahi baduzu \'Deskonprimitu ZIP igoerak\' atalean dauden igoera gelaxkak erabili behar dituzu.', //cpg1.3.0
	'reg_instr_4' => 'URI/URL igera atala erabiltzen duzunean era egokian idatzi fitxategiekiko bideak. Horrela: http://www.niregunea.org/irudiak/adibidea.jpg', //cpg1.3.0
	'reg_instr_5' => 'Formularioa osotu ostean \'Jarraitu\'n sakatu.', //cpg1.3.0
	'reg_instr_6' => 'Deskonprimitu ZIP igoerak:', //cpg1.3.0
	'reg_instr_7' => 'Fitxategi igoerak:', //cpg1.3.0
	'reg_instr_8' => 'URI/URL igoerak:', //cpg1.3.0
	'error_report' => 'Akatsak', //cpg1.3.0
	'error_instr' => 'Igoera hauekin akatsak gertatu dira:', //cpg1.3.0
	'file_name_url' => 'Fitxategia/URLa', //cpg1.3.0
	'error_message' => 'Akats mezua', //cpg1.3.0
	'no_post' => 'Ezin POSTen bitartez igo.', //cpg1.3.0
	'forb_ext' => 'Fitxategiaren estensioa debekatuta.', //cpg1.3.0
	'exc_php_ini' => 'php.ini-n zehaztutako gehienezko tamaina gaindituta.', //cpg1.3.0
	'exc_file_size' => 'CPG-ek onartutako gehienezko tamaina gainditua.', //cpg1.3.0
	'partial_upload' => 'Only a partial upload.', //cpg1.3.0
	'no_upload' => 'Igoera ez da burutu.', //cpg1.3.0
	'unknown_code' => 'PHP igoera akats ezezaguna.', //cpg1.3.0
	'no_temp_name' => 'Igoerarik ez - behin behineko izenik ez.', //cpg1.3.0
	'no_file_size' => 'Daturik gabea/apurtuta', //cpg1.3.0
	'impossible' => 'Ezin mugitu.', //cpg1.3.0
	'not_image' => 'Ez da irudia/apurtuta', //cpg1.3.0
	'not_GD' => 'Ez da GD luzapena.', //cpg1.3.0
	'pixel_allowance' => 'Pixel baimenduak gaindituta.', //cpg1.3.0
	'incorrect_prefix' => 'URI/URL aurrizkia ez zuzena', //cpg1.3.0
	'could_not_open_URI' => 'Ezin izan dut URIa zabaldu.', //cpg1.3.0
	'unsafe_URI' => 'Zuzentasuna ezin zehaztu.', //cpg1.3.0
	'meta_data_failure' => 'Meta datuen akatsa', //cpg1.3.0
	'http_401' => '401 Baimen gabekoa', //cpg1.3.0
	'http_402' => '402 Ordainpekoa', //cpg1.3.0
	'http_403' => '403 Debekatuta', //cpg1.3.0
	'http_404' => '404 Ez topatua', //cpg1.3.0
	'http_500' => '500 Zerbitzariaren barne akatsa', //cpg1.3.0
	'http_503' => '503 Zerbitzu ez erabilgarria', //cpg1.3.0
	'MIME_extraction_failure' => 'MIME mota ezin da zehaztu.', //cpg1.3.0
	'MIME_type_unknown' => 'MIME mota ezezaguna', //cpg1.3.0
	'cant_create_write' => 'Ezin idazteko fitxategia sortu.', //cpg1.3.0
	'not_writable' => 'Ezin idazteko fitxategian idatzi.', //cpg1.3.0
	'cant_read_URI' => 'Ezin dut URI/URLa irakurri', //cpg1.3.0
	'cant_open_write_file' => 'Ezin zabaldu URIa idazteko.', //cpg1.3.0
	'cant_write_write_file' => 'Ezin idatzi URIaren idazteko fitxategian.', //cpg1.3.0
	'cant_unzip' => 'Ezin deskonprimitu.', //cpg1.3.0
	'unknown' => 'Akats ezezaguna', //cpg1.3.0
	'succ' => 'Ondo igota', //cpg1.3.0
	'success' => '%s igoera zuzenak.', //cpg1.3.0
	'add' => '\'Jarraitu\'n sakatu fitxategiak bildumari gehitzeko.', //cpg1.3.0ari	'failure' => 'Akatsa igotzean', //cpg1.3.0
	'f_info' => 'Fitxategiaren infoa', //cpg1.3.0
	'no_place' => 'Aurreko fitxategia ezin izan dut gehitu.', //cpg1.3.0
	'yes_place' => 'Aurreko fitxategia ondo gehitu dut.', //cpg1.3.0
	'max_fsize' => 'Onartzen diren fitxategi tamaina handiena %s KBekoa da',
	'album' => 'Bilduma',
	'picture' => 'Fitxategia',
	'pic_title' => 'Fitxategiaren izenburua',
	'description' => 'Fitxategiaren deskribapena',
	'keywords' => 'Hitz gakoak (zuriuneek separatuta)',
	'err_no_alb_uploadables' => 'Ez dago fitxategiak gehitzea onartzen duen bildumarik',
	'place_instr_1' => 'Fitxategiak bildumetan sartzen ari zara.  Orain fitxategi bakiotzari buruzko informazio garrantzitsua gehitu ahal duzu.', //cpg1.3.0
	'place_instr_2' => 'Fitxategi gehiago gehitu nahi?. \'Gehiago\'n sakatu.', //cpg1.3.0
	'process_complete' => 'Fitxategi guztiak ondo gehitu ditut.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
	'title' => 'Erabiltzaileak kudeatu',
	'name_a' => 'Izenaren arabera gorako',
	'name_d' => 'Izenaren arabera beherako',
	'group_a' => 'Taldearen arabera gorako',
	'group_d' => 'Taldearen arabera beherako',
	'reg_a' => 'Alta dataren arabera gorako',
	'reg_d' => 'Alta dataren arabera beherako',
	'pic_a' => 'Argazki kopuruaren arabera gorako',
	'pic_d' => 'Argazki kopuruaren arabera beherako',
	'disku_a' => 'Disko okupazioaren arabera gorako',
	'disku_d' => 'Disko okupazioaren arabera beherako',
	'lv_a' => 'Azken bisitaren arabera gorako', //cpg1.3.0
	'lv_d' => 'Azken bisitaren arabera beherako', //cpg1.3.0
	'sort_by' => 'Erabiltzaileak ordenatu',
	'err_no_users' => 'Erabiltzaileen taula hutsik dago!',
	'err_edit_self' => 'Ezin duzu zeure profila editatu, horretarako \'Nire erabiltzaile profila\' aukera erabili',
	'edit' => 'EDITATU',
	'delete' => 'EZABATU',
	'name' => 'Erabiltzaile izena',
	'group' => 'Taldea',
	'inactive' => 'Inaktiboa',
	'operations' => 'Ekintzak',
	'pictures' => 'Fitxategiak',
	'disk_space' => 'Erabilitako espazioa / kuota',
	'registered_on' => 'Errejistratua',
	'last_visit' => 'Azken bisita', //cpg1.3.0
	'u_user_on_p_pages' => '%d erabiltzaile %d orritan',
	'confirm_del' => 'Seguru erabiltzaile hau ezabatu nahi duzula? \\nBere argazki eta bildumak guztiak ere ezabatuko ditut.',
	'mail' => 'ePOSTA',
	'err_unknown_user' => 'Aukeratutako erabiltzailea ez dago!',
	'modify_user' => 'Erabiltzailea eraldatu',
	'notes' => 'Oharrak',
	'note_list' => '<li>Egungo pasahitza aldatu nahi ez baduzu "pasahitza" atala zuri utzi',
	'password' => 'Pasahitza',
	'user_active' => 'Erabiltzailea aktibo dago',
	'user_group' => 'Erabiltzaileen taldea',
	'user_email' => 'Erabiltzailearen ePosta',
	'user_web_site' => 'Erabiltzailearen web orria',
	'create_new_user' => 'Erabiltzaile berria',
	'user_location' => 'Erabiltzailearen bizilekua',
	'user_interests' => 'Erabiltzailerean gogoak',
	'user_occupation' => 'Erabiltzailearen lanbidea',
	'latest_upload' => 'Azken igoerak', //cpg1.3.0
	'never' => 'inoiz ez', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
	'title' => 'Irudien tamaina aldatu',
	'what_it_does' => 'Zer egiten du',
	'what_update_titles' => 'Fitxategien izenak eguneratu',
	'what_delete_title' => 'Izenburuak ezabatu',
	'what_rebuild' => 'Miniaturak eta irudien tamainak berriro sortu',
	'what_delete_originals' => 'Jatorrizko irudiak ezabatu eta tamaina berriko irudiekin ordezkatu',
	'file' => 'Fitxategia',
	'title_set_to' => 'Izenburua',
	'submit_form' => 'bidali',
	'updated_succesfully' => 'ondo eguneratu',
	'error_create' => 'Akatsa sortzean',
	'continue' => 'Irudi gehiago',
	'main_success' => '%s fitxategia irudi nagusi izateko ondo erabili dut',
	'error_rename' => '%s  %s ra berrizendatzean akatsa',
	'error_not_found' => 'Ez dut %s fitxategia topatu',
	'back' => 'Hasierara bueltatu',
	'thumbs_wait' => 'Miniaturak / irudien tamainak eguneratzen, itxaron...',
	'thumbs_continue_wait' => 'Miniaturak / irudien tamainak eguneratzen jarraitzen dut...',
	'titles_wait' => 'Izenburuak eguneratzen, itxaron...',
	'delete_wait' => 'Izenburuak ezabatzen, itxaron...',
	'replace_wait' => 'Jatorrizko irudiak ezabatzen eta tamaina berriko irudiekin ordezkatzen, itxaron...',
	'instruction' => 'Agindu arinak',
	'instruction_action' => 'Ekintza aukeratu',
	'instruction_parameter' => 'Parametroak aukeratu',
	'instruction_album' => 'Bilduma aukeratu',
	'instruction_press' => '%s n sakatu',
	'update' => 'Miniaturak / irudien tamainak eguneratu',
	'update_what' => 'Zer eguneratu behar dut',
	'update_thumb' => 'Miniaturak soilik',
	'update_pic' => 'Irudien tamainak soilik',
	'update_both' => 'Miniaturak eta irudien tamainak (biak)',
	'update_number' => 'Zenbat irudi prozesatu klik bakoitzean',
	'update_option' => '(Timeout arazoak izanez gero zenbaki txikiago jarri)',
	'filename_title' => 'Fitxategia &rArr; Fitxategiaren izenburua',
	'filename_how' => 'Zelan eraldatu fitxategia',
	'filename_remove' => '.jpg luzapena kendu eta y _ (underscore) espazioekin ordezkatu',
	'filename_euro' => '2003_11_23_13_20_20.jpg aldatu: 2003/11/23 13:20',
	'filename_us' => '2003_11_23_13_20_20.jpg aldatu: 2003/11/23 13:20',
	'filename_time' => '2003_11_23_13_20_20.jpg aldatu: 13:20',
	'delete' => 'Jatorriko tamaina edo izena diten argazkiak ezabatu',
	'delete_title' => 'Fitxategien izenburuak ezabatu',
	'delete_original' => 'Jatorrizko tamaina duten argazkiak ezabatu',
	'delete_replace' => 'Jatorrizko irudiak ezabatu eta tamaina berrikoekin ordezkatu',
	'select_album' => 'Bilduma aukeratu',
	'delete_orphans' => 'Iruzkin umezurtzak ezabatu (bilduma guztietan dabil)', //cpg1.3.0
	'orphan_comment' => 'Topatutako iruzkin umezurtzak', //cpg1.3.0
	'delete' => 'Ezabatu', //cpg1.3.0
	'delete_all' => 'Dena ezabatu', //cpg1.3.0
	'comment' => 'Iruzkina: ', //cpg1.3.0
	'nonexist' => 'ez dagoen fitxategi batekin dago lotuta # ', //cpg1.3.0
	'phpinfo' => 'phpinfo erakutsi', //cpg1.3.0
	'update_db' => 'Datu basea eguneratu', //cpg1.3.0
	'update_db_explanation' => 'Coppermineren fitxategiak ordezkatu badituzu, aldatu edo bertsioa eguneratu datu basearen eguneraketa egikaritu beharko duzu. Horrela beharrezkoak diren taulak eta baloreak sortuko ditu datu basean.', //cpg1.3.0
);

?>
