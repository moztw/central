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
// $Id: romanian.php,v 1.6 2004/08/07 09:22:19 gaugau Exp $
// ------------------------------------------------------------------------- //

// info about translators and translated language
$lang_translation_info = array(
        'lang_name_english' => 'Romanian',
        'lang_name_native' => 'Românã',
        'lang_country_code' => 'ro',
        'trans_name'=> 'Adrian Stan',
        'trans_email' => 'adi.stan@gmail.com',
        'trans_website' => '',
        'trans_date' => '2004-08-01',
);

$lang_charset = 'iso-8859-2';
$lang_text_dir = 'ltr'; // ('ltr' stanga la dreapta, 'rtl' dreapta la stanga)

// prescurtãri pentru Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// zilele sãptãmânii ºi ale lunii
$lang_day_of_week = array('Du', 'Lu', 'Ma', 'Mi', 'Joi', 'Vi', 'Sâ');
$lang_month = array('Ian', 'Feb', 'Mar', 'Apr', 'Mai', 'Iun', 'Iul', 'Aug', 'Sep', 'Oct', 'Noi', 'Dec');

// Comune
$lang_yes = 'Da';
$lang_no  = 'Nu';
$lang_back = 'Înapoi';
$lang_continue = 'Continuã';
$lang_info = 'Informaþii';
$lang_error = 'Eroare';

// Data
$album_date_fmt =    '%d %B %Y';
$lastcom_date_fmt =  '%d/%m/%Y la %H:%M';
$lastup_date_fmt = '%d %B %Y';
$register_date_fmt = '%d %B %Y';
$lasthit_date_fmt = '%d %B %Y la %H:%M';
$comment_date_fmt =  '%d %B %Y la %H:%M';

// Cenzor cuvinte
$lang_bad_words = array('*fuck*', 'tâmpit', 'tampit', 'cretin', 'idiot', 'muie',  'pizda', 'pizdã', 'pula', 'pulã', 'sugi', 'coaie', 'cur', 'buci', 'cacat', 'cãcat', 'caca', 'pewla', 'fut', 'futai', 'jepat');

$lang_meta_album_names = array(
        'random' => 'Imagini aleatoare',
        'lastup' => 'Ultimele adãugate',
        'lastalb'=> 'Ultimele albume modificate',
        'lastcom' => 'Ultimele comentarii',
        'topn' => 'Cele mai vizitate',
        'toprated' => 'Cele mai votate',
        'lasthits' => 'Ultimele vizitate',
        'search' => 'Rezultatele cãutãrii',
        'favpics'=> 'Imaginile favorite'
);

$lang_errors = array(
        'access_denied' => 'Nu aveþi dreptul sã accesaþi aceasta paginã.',
        'perm_denied' => 'Nu aveþi dreptul sã efectuaþi aceastã operaþie',
        'param_missing' => 'Scriptul a fost rulat fãrã parametrul/parametrii necesari.',
        'non_exist_ap' => 'Albumul/imaginea selectatã nu existã!',
        'quota_exceeded' => 'Cota dumneavoastrã a fost depaºitã<br /><br />Aveþi o cotã pe disc de [quota]K, pozele dumneavoastrã ocupã acum [space]K, adãugând aceastã imagine veþi depãºi aceastã cotã.',
        'gd_file_type_err' => 'Când folosiþi biblioteca GD tipurile de fiºiere ce le puteþi utiliza sunt doar JPEG ºi PNG.',
        'invalid_image' => 'Imaginea înregistratã de dumneavoastrã este coruptã sau nu poate fi prelucratã de biblioteca GD',
        'resize_failed' => 'Nu s-a putut crea pictograma sau imaginea redusã.',
        'no_img_to_display' => 'Nici o imagine încãrcatã',
        'non_exist_cat' => 'Categoria selectatã nu existã',
        'orphan_cat' => 'O categorie are pãrintele inexistent, rulaþi managerul de categorii pentru a corecta problema.',
        'directory_ro' => 'Directorul \'%s\' nu poate fi scris, imaginile nu pot fi ºterse',
        'non_exist_comment' => 'Comentariul selectat nu existã.',
        'pic_in_invalid_album' => 'Imaginea este într-un album inexistent (%s)!?',
        'banned' => 'Sunteþi exclus de pe aceastã pagina web.',
        'not_with_udb' => 'Aceasta funcþie este blocatã deoarece este integratã cu programul ce ruleaza forumul. Ce încercaþi sã faceþi ori nu este suportat în aceastã configuraþie, ori funcþia trebuie executatã de programul ce ruleaza forumul.',
        'offline_title' => 'Offline',
        'offline_text' => 'Galeria este opritã, vã rugãm sã reveniþi peste câteva minute.',
        'ecards_empty' => 'Nu sunt vederi electonice de vizualizat. Verificaþi dacã aveþi opþiunea pentru vederi electronice activatã.',
        'action_failed' => 'Acþiune eºuatã. Nu se poate procesa cererea dumneavoastrã.',
        'no_zip' => 'Librãria pentru fiºiere ZIP nu existã.',
        'zip_type' => 'Nu aveþi dreptul sã încãrcaþi fiºiere ZIP.',
);

$lang_bbcode_help = 'Urmãtoarele coduri vã pot fi utile: <li>[b]<b>Bold</b>[/b]</li> <li>[i]<i>Italic</i>[/i]</li> <li>[url=http://site.ro/]Url Text[/url]</li> <li>[email]user@site.ro[/email]</li>';

// ------------------------------------------------------------------------- //
// theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
        'alb_list_title' => 'Albume',
        'alb_list_lnk' => 'Albume',
        'my_gal_title' => 'Galeria mea',
        'my_gal_lnk' => 'Galeria mea',
        'my_prof_lnk' => 'Profilul meu',
        'adm_mode_title' => 'Schimbaþi în modul admin',
        'adm_mode_lnk' => 'Mod admin',
        'usr_mode_title' => 'Schimbaþi în modul utilizator',
        'usr_mode_lnk' => 'Mod utilizator',
        'upload_pic_title' => 'Încãrcaþi imagine',
        'upload_pic_lnk' => 'Încãrcaþi imagine',
        'register_title' => 'Creaþi un cont',
        'register_lnk' => 'Înregistrare',
        'login_lnk' => 'Login',
        'logout_lnk' => 'Logout',
        'lastup_lnk' => 'Ultimele imagini',
        'lastcom_lnk' => 'Ultimele comentarii',
        'topn_lnk' => 'Top vizite',
        'toprated_lnk' => 'Top votãri',
        'search_lnk' => 'Cãutare',
        'fav_lnk' => 'Favoritele mele',
        'memberlist_title' => 'Lista membrilor', //cpg1.3.0
        'memberlist_lnk' => 'Membrii', //cpg1.3.0
        'faq_title' => 'Întrebãri frecvente', //cpg1.3.0
        'faq_lnk' => 'FAQ', //cpg1.3.0
);

$lang_gallery_admin_menu = array(
        'upl_app_lnk' => 'Aprobare înregistrãri',
        'config_lnk' => 'Configurare',
        'albums_lnk' => 'Albume',
        'categories_lnk' => 'Categorii',
        'users_lnk' => 'Utilizatori',
        'groups_lnk' => 'Grupuri',
        'comments_lnk' => 'Comentarii',
        'searchnew_lnk' => 'Adãugaþi imagini FTP',
        'util_lnk' => 'Redimensionaþi imagini',
        'ban_lnk' => 'Banaþi utilizatori',
        'db_ecard_lnk' => 'Aratã vederi electronice', //cpg1.3.0
);

$lang_user_admin_menu = array(
        'albmgr_lnk' => 'Creaþi/ordonaþi albumele mele',
        'modifyalb_lnk' => 'Modificaþi albumele mele',
        'my_prof_lnk' => 'Profilul meu',
);

$lang_cat_list = array(
        'category' => 'Categorie',
        'albums' => 'Albume',
        'pictures' => 'Imagini',
);

$lang_album_list = array(
        'album_on_page' => '%d albume pe %d pagini'
);

$lang_thumb_view = array(
        'date' => 'Data',
        //Sort by filename and title
        'name' => 'Numele fiºierului',
        'title' => 'Titlul',
        'sort_da' => 'Sortare dupa datã, ascendent',
        'sort_dd' => 'Sortare dupa datã, descendent',
        'sort_na' => 'Sortare dupa nume, ascendent',
        'sort_nd' => 'Sortare dupa nume, ascendent',
        'sort_ta' => 'Sortare dupa titlu, ascendent',
        'sort_td' => 'Sortare dupa titlu, ascendent',
        'download_zip' => 'Descarcã ca fiºier ZIP',
        'pic_on_page' => '%d imagini pe %d pagini',
        'user_on_page' => '%d utilizatori pe %d pagini'
);

$lang_img_nav_bar = array(
        'thumb_title' => 'Înapoi la pagina cu pictograme',
        'pic_info_title' => 'Afiºare/Ascundere informaþii despre imagine',
        'slideshow_title' => 'Diaporama',
        'ecard_title' => 'Trimiteþi aceastã imagine ca vedere electronicã',
        'ecard_disabled' => 'Vederile electronice sunt dezactivate',
        'ecard_disabled_msg' => 'Nu aveþi permisiunea sã trimiteþi vederi electronice',
        'prev_title' => 'Vizualizaþi imaginea precedentã',
        'next_title' => 'Vizualizaþi imaginea urmãtoare',
        'pic_pos' => 'Imaginea %s/%s',
);

$lang_rate_pic = array(
        'rate_this_pic' => 'Voteazã aceastã imagine ',
        'no_votes' => '(Nici un vot încã)',
        'rating' => '(votarea curentã : %s / 5 cu %s voturi)',
        'rubbish' => 'Nereuºitã',
        'poor' => 'Slabã',
        'fair' => 'Acceptabilã',
        'good' => 'Bunã',
        'excellent' => 'Excelentã',
        'great' => 'Nemaipomenitã',
);

// ------------------------------------------------------------------------- //
// include/exif.inc.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// include/functions.inc.php
// ------------------------------------------------------------------------- //

$lang_cpg_die = array(
        INFORMATION => $lang_info,
        ERROR => $lang_error,
        CRITICAL_ERROR => 'Eroare criticã',
        'file' => 'Fiºier: ',
        'line' => 'Linia: ',
);

$lang_display_thumbnails = array(
        'filename' => 'Nume fiºier : ',
        'filesize' => 'Mãrime fiºier : ',
        'dimensions' => 'Dimensiuni : ',
        'date_added' => 'Data adãugãrii : ',
);

$lang_get_pic_data = array(
        'n_comments' => '%s comentarii',
        'n_views' => '%s vizitãri',
        'n_votes' => '(%s voturi)'
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Debug Info', //cpg1.3.0
  'select_all' => 'Selecteazã tot', //cpg1.3.0
  'copy_and_paste_instructions' => 'Dacã doriþi sã ne cereþi ajutorul, copiaþi ºi trimiteþi aceastã eroare în comentariul dumneavostrã. Asiguraþi-vã cã înlocuiþi orice parolã din mesajul dumneavostrã cu *** înainte de a trimite.', //cpg1.3.0
  'phpinfo' => 'Aratã phpinfo', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => 'Limba predefinitã', //cpg1.3.0
  'choose_language' => 'Alegeþi limba', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'Tema predefinitã', //cpg1.3.0
  'choose_theme' => 'Alegeþi tema', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// include/init.inc.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// include/picmgmt.inc.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
        'Exclamation' => 'Exclamare',
        'Question' => 'Întrebare',
        'Very Happy' => 'Foarte bucuros',
        'Smile' => 'Zâmbeºte',
        'Sad' => 'Supãrat',
        'Surprised' => 'Surprins',
        'Shocked' => 'ªocat',
        'Confused' => 'Confuz',
        'Cool' => 'Cool',
        'Laughing' => 'Râzând',
        'Mad' => 'Nervos',
        'Razz' => 'Razz',
        'Embarassed' => 'Stânjenit',
        'Crying or Very sad' => 'Plângând sau foarte supãrat',
        'Evil or Very Mad' => 'Rãu sau foarte supãrat',
        'Twisted Evil' => 'Foarte rãu',
        'Rolling Eyes' => 'Rostogolind ochii',
        'Wink' => 'Clipeºte',
        'Idea' => 'Idee',
        'Arrow' => 'Sãgeatã',
        'Neutral' => 'Neutru',
        'Mr. Green' => 'Dl. Verde',
);

// ------------------------------------------------------------------------- //
// addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
        0 => 'Pãrãseºte modul administrator...',
        1 => 'Intrã în modul administrator...',
);

// ------------------------------------------------------------------------- //
// albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
        'alb_need_name' => 'Albumele trebuie sã aibã un nume!',
        'confirm_modifs' => 'Sunteþi sigur cã vreþi sã faceþi aceste modificãri?',
        'no_change' => 'Nu aþi fãcut nici o modificare!',
        'new_album' => 'Album nou',
        'confirm_delete1' => 'Sunteþi sigur cã vreþi sa ºtergeþi acest album?',
        'confirm_delete2' => '\nToate imaginile ºi comentariile conþinute vor fi pierdute!',
        'select_first' => 'Selectaþi un album înainte',
        'alb_mrg' => 'Managerul de albume',
        'my_gallery' => '* Galeria mea *',
        'no_category' => '* Nici o categorie *',
        'delete' => 'ªterge',
        'new' => 'Nou',
        'apply_modifs' => 'Efectuaþi modificãrile',
        'select_category' => 'Selectaþi o categorie',
);

// ------------------------------------------------------------------------- //
// catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
        'miss_param' => 'Parametrii necesari pentru operaþia \'%s\' nu au fost stabiliþi!',
        'unknown_cat' => 'Categoria selectatã nu existã în baza de date',
        'usergal_cat_ro' => 'Categoria Galeria Utilizatorului nu poate fi ºtearsã!',
        'manage_cat' => 'Administraþi categoriile',
        'confirm_delete' => 'Sunteþi sigur cã doriþi sã ºtergeþi aceastã categorie?',
        'category' => 'Categorie',
        'operations' => 'Operaþii',
        'move_into' => 'Mutaþi în',
        'update_create' => 'Modificaþi/Creaþi o categorie',
        'parent_cat' => 'Categoria pãrinte',
        'cat_title' => 'Titlul categoriei',
        'cat_thumb' => 'Categoria pictogramei', //cpg1.3.0
        'cat_desc' => 'Descrierea categoriei'
);

// ------------------------------------------------------------------------- //
// config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
        'title' => 'Configurare',
        'restore_cfg' => 'Reveniþi la setãrile predefinite',
        'save_cfg' => 'Salvaþi noua configuraþie',
        'notes' => 'Note',
        'info' => 'Informaþii',
        'upd_success' => 'Configuraþia a fost modificatã',
        'restore_success' => 'Configuraþia predefinitã a fost restabilitã',
        'name_a' => 'Nume ascendent',
        'name_d' => 'Nume descendent',
        'title_a' => 'Titlu ascendent',
        'title_d' => 'Titlu descendent',
        'date_a' => 'Datã ascendentã',
        'date_d' => 'Datã descendentã',
        'th_any' => 'Aspect maxim',
        'th_ht' => 'Înãlþime',
        'th_wd' => 'Lãþime',
        'label' => 'etichetã', //cpg1.3.0
        'item' => 'articol', //cpg1.3.0
        'debug_everyone' => 'Oricine', //cpg1.3.0
        'debug_admin' => 'Doar administratorul', //cpg1.3.0
);

if (defined('CONFIG_PHP')) $lang_config_data = array(
        'Setãri generale',
        array('Numele galeriei', 'gallery_name', 0),
        array('Descrierea galeriei', 'gallery_description', 0),
        array('Adresa e-mail a administratorului', 'gallery_admin_email', 0),
        array('Adresa pentru conexiunea \'Mai multe imagini la\' în vederile electronice', 'ecards_more_pic_target', 0),
        array('Galerie opritã', 'offline', 1), //cpg1.3.0
        array('Log vederi electronice', 'log_ecards', 1), //cpg1.3.0
        array('Permite descãrcarea favoritelor ca fiºier ZIP', 'enable_zipdownload', 1), //cpg1.3.0

        'Limba, Teme &amp; Setãri caractere',
        array('Limba', 'lang', 5),
        array('Tema', 'theme', 6),
        array('Aratã lista limbilor', 'language_list', 1), //cpg1.3.0
        array('Aratã steagurile limbilor', 'language_flags', 8), //cpg1.3.0
        array('Aratã opþiunea &quot;reseteazã&quot; în secþiunea limbilor', 'language_reset', 1), //cpg1.3.0
        array('Aratã lista temelor', 'theme_list', 1), //cpg1.3.0
        array('Aratã opþiunea &quot;reseteazã&quot; în secþiunea temelor', 'theme_reset', 1), //cpg1.3.0
        array('Aratã FAQ', 'display_faq', 1), //cpg1.3.0
        array('Aratã ajutor bbcode', 'show_bbcode_help', 1), //cpg1.3.0
        array('Caracter', 'charset', 4), //cpg1.3.0

        'Lista cu albume',
        array('Lãþimea tabelului principal (pixeli sau %)', 'main_table_width', 0),
        array('Numãrul de nivele de categorii care sã fie afiºate', 'subcat_level', 0),
        array('Numãrul albumelor ce vor fi afiºate', 'albums_per_page', 0),
        array('Numãrul de coloane în lista de albume', 'album_list_cols', 0),
        array('Dimensiunea pictogramelor în pixeli', 'alb_list_thumb_size', 0),
        array('Conþinutul paginii principale', 'main_page_layout', 0),
        array('Afiºeazã pictogramele albumelor din primul nivel în categorii','first_level',1),

        'Pictograme',
        array('Numãrul de coloane pe pagina cu pictograme', 'thumbcols', 0),
        array('Numãrul de rânduri pe pagina cu pictograme', 'thumbrows', 0),
        array('Numarul maxim de taburi ce vor fi afiºate', 'max_tabs', 0),
        array('Afiºeazã descrierea imaginii (pe lângã titlu) sub pictogramã', 'caption_in_thumbview', 1),
        array('Afiºeazã numãrul de vizualizari sub pictogramã', 'views_in_thumbview', 1), //cpg1.3.0
        array('Afiºeazã numãrul de comentarii sub pictogramã', 'display_comment_count', 1),
        array('Afiºeazã numele utilizatorului sub pictogramã', 'display_uploader', 1), //cpg1.3.0
        array('Ordinea de sortare a imaginilor predefinitã', 'default_sort_order', 3),
        array('Numãrul minim de voturi pentru ca o imagine sã aparã în lista \'Cele mai votate\' ', 'min_votes_for_rating', 0),

        'Afiºarea imaginii &amp; setãrile comentariilor',
        array('Lãþimea tabelului pentru afiºarea imaginii (pixeli sau %)', 'picture_table_width', 0),
        array('Informaþiile despre imagine sunt vizibile în mod predefinit', 'display_pic_info', 1),
        array('Filtraþi cuvintele urâte în comentarii', 'filter_bad_words', 1),
        array('Activeazã zâmbetele în comentarii', 'enable_smilies', 1),
        array('Permite comentarii consecutive de la acelaºi utilizator', 'disable_comment_flood_protect', 1), //cpg1.3.0
        array('Lungimea maximã a descrierii imaginii', 'max_img_desc_length', 0),
        array('Numãrul maxim de caractere într-un cuvânt', 'max_com_wlength', 0),
        array('Numãrul maxim de linii într-un comentariu', 'max_com_lines', 0),
        array('Lungimea maximã a unui comentariu', 'max_com_size', 0),
        array('Afiºeazã rama film', 'display_film_strip', 1),
        array('Numãrul de obiecte în rama film', 'max_film_strip_items', 0),
        array('Notificã administratorul despre comentarii prin email', 'email_comment_notification', 1), //cpg1.3.0
        array('Intervalul diaporamei în milisecunde (1 secundã = 1000 milisecunde)', 'slideshow_interval', 0), //cpg1.3.0

        'Setãri pentru imagini ºi pictograme',
        array('Calitatea fiºierelor JPEG', 'jpeg_qual', 0),
        array('Dimensiunea maximã a unei pictograme <a href="#notice2"  class="clickable_option">**</a>', 'thumb_width', 0), //cpg1.3.0
        array('Utilizaþi dimensiunea (lãþime sau înãlþime sau aspectul maxim pentru pictogramã )<b>**</b>', 'thumb_use', 7),
        array('Creazã imagini intermediare','make_intermediate',1),
        array('Lãþimea sau înãlþimea maximã a unei imagini intermediare <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0), //cpg1.3.0
        array('Dimensiunea maximã a unei imagini (KB)', 'max_upl_size', 0),
        array('Lãþimeã sau înãlþimea maximã a imaginilor încãrcate (pixeli)', 'max_upl_width_height', 0),

        'Setãri avansate pentru imagini si pictograme', //cpg1.3.0
        array('Afiºeazã icoana Privat utilizatorilor neînregistraþi','show_private',1), //cpg1.3.0
        array('Caractere interzise în numele de fiºiere', 'forbiden_fname_char',0), //cpg1.3.0
        array('Extensii acceptate pentru fiºierele încãrcate', 'allowed_file_extensions',0), //cpg1.3.0
        array('Tipuri de imagini permise', 'allowed_img_types',0), //cpg1.3.0
        array('Tipuri de video permise', 'allowed_mov_types',0), //cpg1.3.0
        array('Tipuri de audio permise', 'allowed_snd_types',0), //cpg1.3.0
        array('Tipuri de documente permise', 'allowed_doc_types',0), //cpg1.3.0
        array('Metoda de redimensionare a imaginilor','thumb_method',2), //cpg1.3.0
        array('Calea cãtre utilitarul \'convert\' al lui ImageMagick)', 'impath', 0), //cpg1.3.0
        array('Tipuri de imagini permise (valid doar pentru ImageMagick)', 'allowed_img_types',0), //cpg1.3.0
        array('Opþiuni în linie de comandã pentru ImageMagick', 'im_options', 0), //cpg1.3.0
        array('Citeºte informaþiile EXIF din fiºierele JPEG', 'read_exif_data', 1), //cpg1.3.0
        array('Citeºte informaþiile IPTC din fiºierele JPEG', 'read_iptc_data', 1), //cpg1.3.0
        array('Directorul cu albume <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0), //cpg1.3.0
        array('Directorul pentru imaginile utilizatorilor <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0), //cpg1.3.0
        array('Prefixul pentru imaginile intermediare <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0), //cpg1.3.0
        array('Prefixul pentru pictograme <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0), //cpg1.3.0
        array('Modul predefinit al directoarelor', 'default_dir_mode', 0), //cpg1.3.0
        array('Modul predefinit al imaginilor', 'default_file_mode', 0), //cpg1.3.0

        'Setãri pentru utilizatori',
        array('Permiteþi înregistrarea de noi utilizatori', 'allow_user_registration', 1),
        array('Înregistrarea utilizatorilor necesitã înregistrarea prin e-mail', 'reg_requires_valid_email', 1),
        array('Notificã administratorul de înregistrarea utilizatorilor prin email', 'reg_notify_admin_email', 1), //cpg1.3.0
        array('Permite ca doi utilizatori sã poatã avea aceeaºi adresa e-mail', 'allow_duplicate_emails_addr', 1),
        array('Utilizatorii pot avea albume private (Notã: dacã treceþi de la \'da\' la \'nu\' toate albumele personale curente vor deveni publice)', 'allow_private_albums', 1), //cpg1.3.0
        array('Notificã administratorul de aºteptarea aprobãrii încarcãrii imaginilor', 'upl_notify_admin_email', 1), //cpg1.3.0
        array('Permite utilizatorilor înregistraþi sã vadã lista membrilor', 'allow_memberlist', 1), //cpg1.3.0

        'Descrierea câmpurilor adiþionale (lãsaþi necompletat dacã nu le utilizaþi)',
        array('Numele câmpului 1', 'user_field1_name', 0),
        array('Numele câmpului 2', 'user_field2_name', 0),
        array('Numele câmpului 3', 'user_field3_name', 0),
        array('Numele câmpului 4', 'user_field4_name', 0),

        'Setãri cookie-uri',
        array('Numele cookie-ului utilizat de script', 'cookie_name', 0),
        array('Calea cookie-ului utilizat de script', 'cookie_path', 0),

        'Setãri',
        array('Activeazã modul debug', 'debug_mode', 9), //cpg1.3.0
        array('Aratã note în modul debug', 'debug_notice', 1), //cpg1.3.0
         '<br /><div align="left"><a name="notice1"></a>(*) Câmpurile marcate cu * nu trebuie modificate dacã aveþi deja imagini în galeria dvs.<br />
        <a name="notice2"></a>(**) Când schimbaþi setarea aceasta, doar fiºierele introduse dupã acest moment vor fi afectate, ºi de aceea nu este recomandat sã efectuaþi aceste modificãri dacã sunt imagini în galerie. Puteþi efectua modificãrile ºi asupra fiºierelor existente cu &quot;<a href="util.php">utilitar administrator</a>&quot; utilitar din menu-ul administratorului.</div><br />', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Trimite vederea', //cpg1.3.0
  'ecard_sender' => 'Expeditor', //cpg1.3.0
  'ecard_recipient' => 'Destinatar', //cpg1.3.0
  'ecard_date' => 'Data', //cpg1.3.0
  'ecard_display' => 'Aratã vederea', //cpg1.3.0
  'ecard_name' => 'Nume', //cpg1.3.0
  'ecard_email' => 'email', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'crescãtor', //cpg1.3.0
  'ecard_descending' => 'descrescãtor', //cpg1.3.0
  'ecard_sorted' => 'Sortare', //cpg1.3.0
  'ecard_by_date' => 'dupã datã', //cpg1.3.0
  'ecard_by_sender_name' => 'dupã numele expeditorului', //cpg1.3.0
  'ecard_by_sender_email' => 'dupã email-ul expeditorului', //cpg1.3.0
  'ecard_by_sender_ip' => 'dupã IP-ul expeditorului', //cpg1.3.0
  'ecard_by_recipient_name' => 'dupã numele destinatarului', //cpg1.3.0
  'ecard_by_recipient_email' => 'dupã email-ul destinatarului', //cpg1.3.0
  'ecard_number' => 'aratã înregistrãri %s to %s of %s', //cpg1.3.0
  'ecard_goto_page' => 'mergi la pagina', //cpg1.3.0
  'ecard_records_per_page' => 'Înregistrãri pe paginã', //cpg1.3.0
  'check_all' => 'Selecteazã tot', //cpg1.3.0
  'uncheck_all' => 'Deselecteazã tot', //cpg1.3.0
  'ecards_delete_selected' => 'ªterge vederile selectate', //cpg1.3.0
  'ecards_delete_confirm' => 'Sunteþi sigur cã vreþi sã ºtergeþi înregistrãrile? Marcaþi în casuþã!', //cpg1.3.0
  'ecards_delete_sure' => 'Sunt sigur', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
        'empty_name_or_com' => 'Trebuie sã introduceþi numele dvs. ºi un comentariu',
        'com_added' => 'Comentariul dvs. a fost adãugat',
        'alb_need_title' => 'Trebuie sã furnizaþi un titlu pentru album!',
        'no_udp_needed' => 'Nici o modificare necesarã.',
        'alb_updated' => 'Albumul a fost modificat',
        'unknown_album' => 'Albumul selectat nu existã sau nu aveþi permisiunea sã încãrcaþi în acest album',
        'no_pic_uploaded' => 'Nici o imagine nu a fost încãrcatã!<br /><br />Dacã aþi selectat o imagine, verificaþi dacã serverul permite încãrcãri.',
        'err_mkdir' => 'Eroare în crearea directorului %s!',
        'dest_dir_ro' => 'Directorul destinaþie %s nu poate fi scris de cãtre script!',
        'err_move' => 'Imposibil de deplasat %s în %s!',
        'err_fsize_too_large' => 'Dimensiunea imaginii este prea mare (maximul permis este %s x %s)!',
        'err_imgsize_too_large' => 'Mãrimea fiºierului încãrcat este prea mare (maximul permis este %s KB)!',
        'err_invalid_img' => 'Fiºerul încãrcat nu este o imagine validã!',
        'allowed_img_types' => 'Puteþi încãrca doar %s imagini.',
        'err_insert_pic' => 'Imaginea \'%s\' nu poate fi inseratã în album ',
        'upload_success' => 'Imaginea dvs. a fost încãrcatã cu succes<br /><br />Va fi vizibilã dupã aprobarea unui administrator.',
        'info' => 'Informaþii',
        'com_added' => 'Comentariu adãugat',
        'alb_updated' => 'Album modificat',
        'err_comment_empty' => 'Comentariul dvs. este gol!',
        'err_invalid_fext' => 'Doar fiºierele cu urmãtoarele extensii sunt permise : <br /><br />%s.',
        'no_flood' => 'Ne pare rãu dar sunteþi deja autorul ultimului comentariu postat pentru aceastã imagine<br /><br />Editaþi comentariul postat dacã doriþi sã-l modificaþi',
        'redirect_msg' => 'Sunteþi redirectat.<br /><br /><br />Apãsaþi pe \'Continuare\' dacã pagina nu se încarcã automat',
        'upl_success' => 'Imaginea dvs. a fost adãugatã cu succes',
        'email_comment_subject' => 'Comentariu din galeria foto', //cpg1.3.0
        'email_comment_body' => 'Cineva a postat un comentariu în galeria foto. Îl puteþi vedea la', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
        'caption' => 'Descriere',
        'fs_pic' => 'imaginea la dimensiuni maxime',
        'del_success' => 'ºtearsã cu succes',
        'ns_pic' => 'imaginea de dimensiuni normale',
        'err_del' => 'nu poate fi ºtearsã',
        'thumb_pic' => 'pictograma',
        'comment' => 'comentariul',
        'im_in_alb' => 'imaginea în album',
        'alb_del_success' => 'Albumul \'%s\' a fost ºters',
        'alb_mgr' => 'Managerul de albume',
        'err_invalid_data' => 'Date nevalide primite în \'%s\'',
        'create_alb' => 'Creare album \'%s\'',
        'update_alb' => 'Modificare album \'%s\' cu titlul \'%s\' ºi indexul \'%s\'',
        'del_pic' => 'ªterge imaginea',
        'del_alb' => 'ªterge albumul',
        'del_user' => 'ªterge utilizatorul',
        'err_unknown_user' => 'Utilizatorul selectat nu existã!',
        'comment_deleted' => 'Comentariul a fost ºters cu succes',
);

// ------------------------------------------------------------------------- //
// displayecard.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
        'confirm_del' => 'Sunteþi sigur cã doriþi sã ºtergeþi aceastã imagine? \\nComentariile vor fi de asemenea ºterse.', //js-alert
        'del_pic' => 'ªterge aceastã imagine',
        'size' => '%s x %s pixeli',
        'views' => '%s ori',
        'slideshow' => 'Diaporama',
        'stop_slideshow' => 'Opreºte diaporama',
        'view_fs' => 'Apãsaþi pentru a vedea imaginea la dimensiuni originale',
          'edit_pic' => 'Editeazã descrierea', //cpg1.3.0
          'crop_pic' => 'Taie ºi roteºte', //cpg1.3.0
);

$lang_picinfo = array(
        'title' =>'Informaþii despre imagine',
        'Filename' => 'Nume fiºier',
        'Album name' => 'Nume album',
        'Rating' => 'Votare (%s voturi)',
        'Keywords' => 'Cuvinte cheie',
        'File Size' => 'Dimensiune fiºier',
        'Dimensions' => 'Dimensiune imagine',
        'Displayed' => 'Afiºatã',
        'Camera' => 'Camera',
        'Date taken' => 'Data fotografierii',
         'ISO'=>'ISO',
        'Aperture' => 'Apertura',
        'Exposure time' => 'Timp de expunere',
        'Focal length' => 'Focala',
        'Comment' => 'Comentariul',
        'addFav'=>'Adaugã în Favorite',
        'addFavPhrase'=>'Favorite',
        'remFav'=>'ªterge din Favorite',
        'iptcTitle'=>'IPTC Titlu', //cpg1.3.0
        'iptcCopyright'=>'IPTC Copyright', //cpg1.3.0
        'iptcKeywords'=>'IPTC Cuvinte cheie', //cpg1.3.0
        'iptcCategory'=>'IPTC Categorie', //cpg1.3.0
        'iptcSubCategories'=>'IPTC Subcategorie', //cpg1.3.0
);

$lang_display_comments = array(
        'OK' => 'OK',
        'edit_title' => 'Editeazã acest comentariu',
        'confirm_delete' => 'Sunteþi sigur cã doriþi sã ºtergeþi acest comentariu?',
        'add_your_comment' => 'Adãugaþi comentariul dvs.',
        'name'=>'Nume',
        'comment'=>'Comentariu',
        'your_name' => 'Numele dvs.',
);

$lang_fullsize_popup = array(
        'click_to_close' => 'Apãsaþi pe imagine pentru a închide fereastra',
);

}

// ------------------------------------------------------------------------- //
// ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
        'title' => 'Trimite o vedere electronicã',
        'invalid_email' => '<b>Atenþie</b> : adresa email este incorectã!',
        'ecard_title' => 'O vedere electronicã de la %s',
        'view_ecard' => 'Dacã vederea nu este afiºatã corect, apãsaþi pe aceasta legãturã',
        'view_more_pics' => 'Apãsaþi aici pentru a vedea mai multe imagini!',
        'send_success' => 'Vederea dvs. a fost trimisã',
        'send_failed' => 'Ne pare rãu dar serverul nu poate trimite vederea dvs...',
        'from' => 'De la',
        'your_name' => 'Numele dvs.',
        'your_email' => 'Adresa dvs. de email',
        'to' => 'Cãtre',
        'rcpt_name' => 'Numele expeditorului',
        'rcpt_email' => 'Adresa de email a destinatarului',
        'greetings' => 'Salutãri',
        'message' => 'Mesaj',
);

// ------------------------------------------------------------------------- //
// editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
        'pic_info' => 'Imagine&nbsp;info',
        'album' => 'Album',
        'title' => 'Titlu',
        'desc' => 'Descriere',
        'keywords' => 'Cuvinte cheie',
        'pic_info_str' => '%sx%s - %sKB - %s afisari - %s voturi',
        'approve' => 'Aprobã imaginea',
        'postpone_app' => 'Amânã aprobarea',
        'del_pic' => 'ªterge imaginea',
        'read_exif' => 'Citeºte EXIF din nou', //cpg1.3.0
        'reset_view_count' => 'Reseteazã contorul de afiºãri',
        'reset_votes' => 'Reseteazã voturile',
        'del_comm' => 'ªterge comentariile',
        'upl_approval' => 'Aprobare încãrcãri',
        'edit_pics' => 'Editeazã imagini',
        'see_next' => 'Aratã imaginile urmãtoare',
        'see_prev' => 'Aratã imaginile precedente',
        'n_pic' => '%s imagini',
        'n_of_pic_to_disp' => 'Numãrul de imagini care sã fie afiºate',
        'apply' => 'Executã modificãrile',
        'crop_title' => 'Editor imagini', //cpg1.3.0
        'preview' => 'Previzualizare', //cpg1.3.0
        'save' => 'Salvare imagine', //cpg1.3.0
        'save_thumb' =>'Salveazã ca pictogramã', //cpg1.3.0
        'sel_on_img' =>'Selecþia este cât întreaga imagine!', //js-alert //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Întrebãri frecvente', //cpg1.3.0
  'toc' => 'Cuprins', //cpg1.3.0
  'question' => 'Întrebare: ', //cpg1.3.0
  'answer' => 'Rãspuns: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'Întrebãri frecvente', //cpg1.3.0
  array('De ce trebuie sã mã înregistrez?', 'Înregistrarea poate sau nu sã fie cerutã de cãtre administrator. Înregistrarea permite accesul la opþiuni suplimentare, cum ar fi încãrcarea de imagini, existenþa favoritelor, posibilitatea comentariilor sau a notãrii imaginilor.', 'allow_user_registration', '0'), //cpg1.3.0
  array('Cum mã pot înregistra?', 'Apãsaþi pe &quot;Înregistrare&quot; ºi completaþi toate câmpurile obligatorii (ºi cele opþionale dacã doriþi).<br />Dacã administratorul are activarea prin email selectatã, dupã ce aþi introdus datele trebuie sã primiþi un email la adresa specificatã de dv., în care gãsiþi detalii despre modul de activare al contului. Contul trebuie activat înainte de a vã loga.', 'allow_user_registration', '1'), //cpg1.3.0
  array('Cum mã loghez?', 'Apãsaþi &quot;Login&quot;, introduceþi numele ºi parola ºi selectaþi &quot;Memoreazã-mã&quot; dacã doriþi sã intraþi pe paginã în viitor deja logat.<br /><b>IMPORTANT:Cooki-urile trebuie activate ºi nu trebuie sã le ºtergeþi dacã doriþi activã opþiunea &quot;Memoreazã-mã&quot;.</b>', 'offline', 0), //cpg1.3.0
  array('De ce nu mã pot loga?', 'Aþi apãsat pe link-ul din email-ul de înregistrare?. Acest link vã activeazã contul. Pentru alte probleme legate de logare, vã rugãm sã contactaþi administratorul.', 'offline', 0), //cpg1.3.0
  array('Ce se întâmplã dacã am uitat parola?', 'Dacã pagina are activatã &quot;Reamintirea parolei&quot; apãsaþi pe link. Dacã acest link nu este disponibil, va trebui sã contactaþi administratorul.', 'offline', 0), //cpg1.3.0
  //array('Ce se întâmplã dacã îmi schimb email-ul?', 'Logaþi-vã ºi schimbaþi adresa de email în &quot;Profil&quot;', 'offline', 0), //cpg1.3.0
  array('Cum salvez imaginile din &quot;Favorite&quot;?', 'Apãsaþi pe imagine ºi apoi pe &quot;imagine info&quot; link (<img src="images/info.gif" width="16" height="16" border="0" alt="Informaþii imagine" />); cãutaþi în informaþii ºi apãsaþi &quot;Pune în favorite&quot;.<br />Administratorul trebuie sã lase &quot;informaþii imagine&quot; active în mod predefinit.<br />IMPORTANT:Cooki-urile trebuie activate ºi nu trebuie sã le ºtergeþi.', 'offline', 0), //cpg1.3.0
  array('Cum notez o imagine?', 'Apãsaþi pe pictogramã ºi mergeþi în jos pentru a o putea nota.', 'offline', 0), //cpg1.3.0
  array('Cum comentez o imagine?', 'Apãsaþi pe pictogramã ºi mergeþi în jos pentru a o putea comenta.', 'offline', 0), //cpg1.3.0
array('Cum încarc o imagine?', 'Apãsaþi &quot;Încarcã imagine&quot; ºi selectaþi albumul, apãsaþi &quot;Browse&quot; ºi gãsiþi imaginea care doriþi sã o încãrcaþi, apãsaþi &quot;open&quot; (scrieþi un tilu ºi o descriere dacã doriþi) ºi apãsaþi &quot;Submit&quot;', 'allow_private_albums', 0), //cpg1.3.0
  array('Unde pot încãrca o imagine?', 'Puteþi încãrca o imagine în albumul/ele din &quot;Galeria mea&quot;. Administratorul poate permite sau nu sã încãrcaþi imagini ºi în galeria principalã.', 'allow_private_albums', 0), //cpg1.3.0
  array('Ce tip ºi ce mãrime pot sã aibã imaginile pe care pot sã le încarc?', 'Tipul ºi mãrimea (jpg, png, etc.) sunt stabilite de administrator.', 'offline', 0), //cpg1.3.0
  array('Ce este &quot;Galeria mea&quot;?', '&quot;Galeria mea&quot; este o galerie personalã pe care puteþi sã o folosiþi ºi administraþi.', 'allow_private_albums', 0), //cpg1.3.0
  array('Cum pot crea, redenumi sau ºterge albume din &quot;galeria mea&quot;?', 'Trebuie sã fiþi în modul &quot;Mod admin&quot;<br />Mergeþi la &quot;Creaþi/ordonaþi albumele mele&quot; ºi apãsaþi &quot;Nou&quot;. Schimbaþi &quot;Album nou&quot; cu numele dorit.<br />Puteþi de asemenea sã redenumiþi orice album din galeria dvs.<br />Apãsaþi &quot;Efectuaþi modificãrile&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Cum restricþionez ºi cum modific ce utilizatori pot vedea Galeria mea?', 'Trebuie sã fiþi în modul &quot;Mod admin&quot;<br />Mergeeþi la &quot;Modificã albumele mele&quot;. Mergeþi la &quot;Modificã album&quot; ºi selectaþi albumul dorit.<br />Aici puteþi schimba numele, descrierea, pictograma, restricþiona vederea imaginilor ºi a notãrii/comentãrii acestora.<br />Apãsaþi &quot;Modificã album&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Cum pot vedea galeriile altor utilizatori?', 'Mergeþi la &quot;Lista albumelor&quot; ºi selectaþi &quot;galerii utilizatori&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Ce sunt cooki-urile?', 'Cooki-urile sunt date în mod text care sunt trimise de pagina web ºi stocate pe calculator.<br />Cooki+urile în mod normal permit utilizatorului sã iasã ºi sã intre în pagina fãrã a mai trebui sã se logheze.', 'offline', 0), //cpg1.3.0
  array('De unde pot descãrca acest program pentru pagina mea?', 'Coppermine este o galerie multimedia, apãrutã sub licenþa GNU GPL. Are o multitudine de opþiuni ºi merge pe multe tipuri de sisteme. Visitaþi <a href="http://coppermine.sf.net/">Coppermine Home Page</a> pentru a afla mai multe ºi pentru a descãrca.', 'offline', 0), //cpg1.3.0

  'Navigare prin site', //cpg1.3.0
  array('Ce este &quot;Lista albumelor&quot;?', 'Aceasta vã va arãta categoria unde vã aflaþi, cu un link cãtre alte album. Dacã nu sunteþi într-o categorie, vã va arãta întreaga galerie ºi link+uri cãtre fiecare categorie. Pictogramele pot fi un link cãtre categorie.', 'offline', 0), //cpg1.3.0
  array('Ce este &quot;galeria mea&quot;?', 'Aceasta permite utilizatorului sã îºi creeze propria galerie, sã punã/ºteargã/modifice albumele.', 'allow_private_albums', 0), //cpg1.3.0
  array('Care este diferenþa între &quot;Modul admin&quot; ºi &quot;Modul utilizator&quot;?', 'Modul admin permite utilizatorului sã modifice galeria personalã.', 'allow_private_albums', 0), //cpg1.3.0
  array('Ce este &quot;Încarcã imagine&quot;?', 'Permite utilizatorului sã încarce o imagine (dimensiunea ºi tipul sunt setate de administrator) în galerie.', 'allow_private_albums', 0), //cpg1.3.0
  array('Ce sunt &quot;Ultimele încãrcãri&quot;?', 'Vã aratã ultimele imagini încãrcate în paginã.', 'offline', 0), //cpg1.3.0
  array('Ce sunt &quot;Ultimele comentarii&quot;?', 'Vã aratã ultimele comentarii ºi pentru ce imagine din paginã.', 'offline', 0), //cpg1.3.0
  array('Ce sunt &quot;Ultimele vizitate&quot;?', 'Vã aratã ultimele imagini vizionate, indiferent dacã utilizatorul este logat sau nu.', 'offline', 0), //cpg1.3.0
  array('Ce sunt &quot;Cele mai votate&quot;?', 'Vã aratã cele mai votate imagini (ex: cinci utilizatori voteazã <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: imaginea trebuie sã aibã un vot de <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;Cinci utilizatori voteazãd de la 1 la 5 (1,2,3,4,5) ºi rezultatul <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />votul poate fi de la <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (nemaipomenit) to <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (prost).', 'offline', 0), //cpg1.3.0
  array('Ce sunt &quot;Favorite&quot;?', 'permite stocarea unei imagini favorite într-un cookie ce este tirmis cãtre calculatorul dvs.', 'offline', 0), //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Reamintirea parolei', //cpg1.3.0
  'err_already_logged_in' => 'Sunteþi deja logat!', //cpg1.3.0
  'enter_username_email' => 'Introduceþi numele sau adresa de email', //cpg1.3.0
  'submit' => 'go', //cpg1.3.0
  'failed_sending_email' => 'Email-ul cu parola nu poate fi trimis!', //cpg1.3.0
  'email_sent' => 'Un email cu numele ºi parola a fost trimis la %s', //cpg1.3.0
  'err_unk_user' => 'Utilizator inexistent!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - Reamintirea parolei', //cpg1.3.0
  'passwd_reminder_body' => 'Aþi cerut sã vã fie reamintitã parola:
Utilizator: %s
Parolã: %s
Apasaþi %s pentru a intra.', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
        'group_name' => 'Numele grupului',
        'disk_quota' => 'Cota pe disc',
        'can_rate' => 'Poate vota imaginile',
        'can_send_ecards' => 'Poate trimite vederi',
        'can_post_com' => 'Poate posta comentarii',
        'can_upload' => 'Poate încãrca imagini',
        'can_have_gallery' => 'Poate avea o galerie personalã',
        'apply' => 'Executã modificãrile',
        'create_new_group' => 'Creazã un grup nou',
        'del_groups' => 'ªterge grupul/grupurile selectat(e)',
        'confirm_del' => 'Atenþie, când ºtergeþi un grup, utilizatorii aparþinând acestui grup vor fi transferaþi în grupul \'Înregistraþi\' !\n\nSunteþi sigur cã doriþi sã continuaþi ?',
        'title' => 'Administreazã grupurile de utilizatori',
        'approval_1' => 'Aprobare Înreg. Pub. (1)',
        'approval_2' => 'Aprobare Înreg. Priv. (2)',
        'upload_form_config' => 'Încarcã din configuraþie', //cpg1.3.0
        'upload_form_config_values' => array( 'Doar o imagine de încãrcat', 'Mai multe imagini de încãrcat', 'Doar URL de încãrcat', 'Doar ZIP de încãrcat', 'Imagine-URL', 'Imagine-ZIP', 'URL-ZIP', 'Imagine-URL-ZIP'), //cpg1.3.0
        'custom_user_upload'=>'Utilizatorul îºi poate seta numãrul de cãsuþe?', //cpg1.3.0
        'num_file_upload'=>'Maxim/exact numãr de imagini de încãrcat', //cpg1.3.0
        'num_URI_upload'=>'Maxim/exact numãr de URL de încãrcat', //cpg1.3.0
        'note1' => '<b>(1)</b> Încãrcarea într-un album public necesitã aprobarea administratorului',
        'note2' => '<b>(2)</b> Încãrcarea într-un album aparþinând utilizatorului necesitã aprobarea administratorului',
        'notes' => 'Note'
);

// ------------------------------------------------------------------------- //
// index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
        'welcome' => 'Bine aþi venit!'
);

$lang_album_admin_menu = array(
        'confirm_delete' => 'Sunteþi sigur cã doriþi sã ºtergeþi acest album? \\nToate imaginile ºi comentariile conþinute vor fi de asemenea ºterse.',
        'delete' => 'ªterge',
        'modify' => 'Proprietãþi',
        'edit_pics' => 'Editare imagini',
);

$lang_list_categories = array(
        'home' => 'Pagina principalã',
        'stat1' => '<b>[pictures]</b> imagini în <b>[albums]</b> albume ºi <b>[cat]</b> categorii cu <b>[comments]</b> comentarii afiºate de <b>[views]</b> ori',
        'stat2' => '<b>[pictures]</b> imagini în <b>[albums]</b> albume afiºate de <b>[views]</b> ori',
        'xx_s_gallery' => 'Galeria %s\'s',
        'stat3' => '<b>[pictures]</b> imagini în <b>[albums]</b> albume cu <b>[comments]</b> comentarii afiºate de <b>[views]</b> ori'
);

$lang_list_users = array(
        'user_list' => 'Lista utilizatorilor',
        'no_user_gal' => 'Nu existã galerii utilizator',
        'n_albums' => '%s album(e)',
        'n_pics' => '%s imagini'
);

$lang_list_albums = array(
        'n_pictures' => '%s imagini',
        'last_added' => ', ultima adãugatã la %s'
);

}

// ------------------------------------------------------------------------- //
// login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
        'login' => 'Login',
        'enter_login_pswd' => 'Introduceþi contul ºi parola pentru a vã loga',
        'username' => 'Utilizator',
        'password' => 'Parola',
        'remember_me' => 'Memoreazã-mã',
        'welcome' => 'Bine aþi venit %s ...',
        'err_login' => '*** Nu aþi putut fi logat. Încercaþi din nou ***',
        'err_already_logged_in' => 'Sunteþi deja logat !',
        'forgot_password_link' => 'Reamintirea parolei', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
        'logout' => 'Logout',
        'bye' => 'La revedere %s ...',
        'err_not_loged_in' => 'Nu sunteþi logat!',
);

// ------------------------------------------------------------------------- //
// phpinfo.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP info', //cpg1.3.0
  'explanation' => 'Acesta este rezultatul generat de PHP <a href="http://www.php.net/phpinfo">phpinfo()</a>', //cpg1.3.0
  'no_link' => 'Lãsând pe alþii sã vadã php info nu este recomandat, de aceea aceastã paginã este vizibilã doar pentru administrator. Nu puteþi posta o legaturã directã cãtre aceastã pagina, accesul nu va fi permis.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
        'upd_alb_n' => 'Modificã album %s',
        'general_settings' => 'Setãri generale',
        'alb_title' => 'Titlul albumului',
        'alb_cat' => 'Categoria albumului',
        'alb_desc' => 'Descrierea albumului',
        'alb_thumb' => 'Pictograma albumului',
        'alb_perm' => 'Permisiile acestui album',
        'can_view' => 'Albumul poate fi vãzut de',
        'can_upload' => 'Vizitatorii pot încãrca imagini',
        'can_post_comments' => 'Vizitatorii pot posta comentarii',
        'can_rate' => 'Vizitatorii pot nota imaginile',
        'user_gal' => 'Galeria utilizatorului',
        'no_cat' => '* Nici o categorie *',
        'alb_empty' => 'Albumul este gol',
        'last_uploaded' => 'Ultimele încãrcate',
        'public_alb' => 'Toatã lumea (album public)',
        'me_only' => 'Doar eu',
        'owner_only' => 'Proprietarul albumul doar (%s)',
        'groupp_only' => 'Membrii grupului \'%s\'',
        'err_no_alb_to_modify' => 'Nici un album pe care sã îl puteþi modifica în baza de date.',
        'update' => 'Modifcã album',
        'notice1' => '(*) depinde de setãrile %sgroups%s', //cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- //
// ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
        'already_rated' => 'Ne pare rãu, dar aþi votat deja aceastã imagine',
        'rate_ok' => 'Votul dvs. ',
        'forbidden' => 'Nu vã puteþi vota propria imagine.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Deºi administratorii paginii {SITE_NAME} vor încerca sã ºteargã sau sã editeze orice material nepermis sau obscen cât de repede cu putinþã, este imposibil sã fie verificat fiecare mesaj sau comentariu. De aceea sunteþi de acord ca toate mesajele postate pe aceastã paginã exprimã opiniile autorului ºi nu ale administratorilor (exceptând mesajele transmise de ei) ºi deci nu pot fi traºi la rãspundere.<br />
<br />
Sunteþi de acord sã nu postaþi nici o imagine sau un mesaj obscen, vulgar, ameninþãtor, sau orice alt mesaj ce încalcã legile. Sunteþi de acord ca administratorul ºi moderatorii paginii {SITE_NAME} au dreptul sã modifice sau sã ºteargã orice conþinut oricând considerã ei necesar. Ca utilizator sunteþi de acord ca orice informaþie introdusã sã fie stocatã într-o bazã de date. Deºi aceastã informaþie NU va fi oferitã unei terþe pãrþi administratorii nu pot fi fãcuþi responsabili în cazul unei accesãri forþate, ilegale a bazei de date ce ar duce la compromiterea acesteia. <br />
<br />
Acestã paginã foloseºte cookie-uri pentru a stoca informaþie pe computerul dvs. Acestea servesc doar la buna funcþionare a paginii web. Adresa dvs. e-mail este folositã doar pentru a verifica parola pentru procesul de înregistrare ºi pentru a primi informaþii directe din paginã. <br />
<br />
Drepturile de autor asupra imaginilor din galerie aparþin exclusiv autorilor. Orice modificare/copiere se va face doar având consimþãmântul acestora!<br /><br />
Apãsând pe butonul 'Sunt de acord' de mai jos sunteþi de acord sã respectaþi ºi acceptaþi condiþiile de mai sus.
EOT;

$lang_register_php = array(
        'page_title' => 'Înregistrare utilizator',
        'term_cond' => 'Termeni si condiþii',
        'i_agree' => 'Sunt de acord',
        'submit' => 'Trimite înregistrarea',
        'err_user_exists' => 'Numele utilizator ales existã deja, vã rugãm sã alegeþi alt nume',
        'err_password_mismatch' => 'Cele douã parole nu sunt identice, vã rugãm sã le reintroduceþi',
        'err_uname_short' => 'Numele utilizator trebuie sã aibã minim 3 caractere',
        'err_password_short' => 'Parola trebuie sã aibã minim 5 caractere',
        'err_uname_pass_diff' => 'Numele utilizator ºi parola trebuie sã fie diferite',
        'err_invalid_email' => 'Adresa e-mail este incorectã',
        'err_duplicate_email' => 'Alt utilizator este înregistrat deja cu aceasta adresã e-mail',
        'enter_info' => 'Introduceþi datele pentru înregistrare',
        'required_info' => 'Informaþii necesare',
        'optional_info' => 'Informaþii opþionale',
        'username' => 'Utilizator',
        'password' => 'Parola',
        'password_again' => 'Confirmaþi parola',
        'email' => 'Email',
        'location' => 'Locaþie',
        'interests' => 'Interese',
        'website' => 'Pagina web',
        'occupation' => 'Ocupaþie',
        'error' => 'Eroare',
        'confirm_email_subject' => '%s - Confirmarea înregistrãrii',
        'information' => 'Informaþii',
        'failed_sending_email' => 'Mesajul de confirmare a înregistrãrii nu poate fi trimis!',
        'thank_you' => 'Vã mulþumim pentru cã v-aþi înregistrat.<br /><br />Un email conþinând informaþii despre cum sã activaþi contul dvs. a fost trimis la adresa email specificatã.',
        'acct_created' => 'Contul dvs. a fost creat ºi vã puteti loga introducând user-ul ºi parola dvs.',
        'acct_active' => 'Contul dvs. este acum activ ºi va puteþi loga introducând user-ul ºi parola dvs.',
        'acct_already_act' => 'Contul dvs. este deja activ!',
        'acct_act_failed' => 'Acest cont nu poate fi activat!',
        'err_unk_user' => 'Utilizatorul selectat nu existã!',
        'x_s_profile' => 'Profilul lui %s',
        'group' => 'Grup',
        'reg_date' => 'Înregistrat la',
        'disk_usage' => 'Utilizare disc',
        'change_pass' => 'Schimbare parolã',
        'current_pass' => 'Parola curentã',
        'new_pass' => 'Parolã nouã',
        'new_pass_again' => 'Reintroduceþi parola nouã',
        'err_curr_pass' => 'Parola curentã este incorectã',
        'apply_modif' => 'Executã modificarile',
        'change_pass' => 'Schimbã parola mea',
        'update_success' => 'Profilul dumneavoastra a fost modificat',
        'pass_chg_success' => 'Parola dumneavoastrã a fost schimbatã',
        'pass_chg_error' => 'Parola dumneavoastrã nu a fost schimbatã',
        'notify_admin_email_subject' => '%s - Notificare înregistrare', //cpg1.3.0
        'notify_admin_email_body' => 'Un nou utilizator "%s" în galerie', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
Vã mulþumim cã v-aþi înregistrat la {SITE_NAME}

Contul dvs. este : "{USER_NAME}"
Parola dvs. este : "{PASSWORD}"

Pentru a activa contul dvs., vã rugãm sã apãsaþi pe legãtura de mai jos
sau sã o copiaþi si duceþi în navigatorul dvs. de internet.

{ACT_LINK}

Cu stimã,

{SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
        'title' => 'Revizuire comentarii',
        'no_comment' => 'Nu existã comentarii care sã fie revizuite',
        'n_comm_del' => '%s comentarii ºterse',
        'n_comm_disp' => 'Numãrul de comentarii de afiºat',
        'see_prev' => 'Afiºeazã precedentul',
        'see_next' => 'Afiºeazã urmãtorul',
        'del_comm' => 'ªterge comentariile selectate',
);

// ------------------------------------------------------------------------- //
// search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
        0 => 'Cautã în colecþia de imagini',
);

// ------------------------------------------------------------------------- //
// searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
        'page_title' => 'Cautã imagini noi',
        'select_dir' => 'Selecteazã directorul',
        'select_dir_msg' => 'Aceastã funcþie vã permite sã adãugaþi mai multe imagini o datã, imagini încãrcate de dvs. pe server prin FTP.<br /><br />Selectaþi directorul unde aþi încãrcat imaginile',
        'no_pic_to_add' => 'Nu existã nici o imagine de adãugat',
        'need_one_album' => 'Aveþi nevoie de cel puþin un album pentru a folosi aceastã funcþie',
        'warning' => 'Atenþie',
        'change_perm' => 'scriptul nu poate scrie în acest director, trebuie sã schimbaþi modul la 755 sau 777 înainte de a încerca sã adãugaþi imaginile!',
        'target_album' => '<b>Pune imaginile din &quot;</b>%s<b>&quot; în </b>%s',
        'folder' => 'Director',
        'image' => 'Imagine',
        'album' => 'Album',
        'result' => 'Rezultat',
        'dir_ro' => 'Nu poate fi scris. ',
        'dir_cant_read' => 'Nu poate fi citit. ',
        'insert' => 'Adaugã imagini noi în galerie',
        'list_new_pic' => 'Lista noilor imagini',
        'insert_selected' => 'Insereazã imaginile selectate',
        'no_pic_found' => 'Nu a fost gasitã nici o imagine nouã',
        'be_patient' => 'Vã rugam aºteptaþi, scriptul necesitã timp pentru a procesa imaginile',
        'notes' =>  '<ul>'.
                                '<li><b>OK</b> : înseamnã cã imaginea a fost adaugatã cu succes'.
                                '<li><b>DP</b> : înseamnã cã imaginea este un duplicat ºi existã deja în baza de date'.
                                '<li><b>PB</b> : înseamnã cã imaginea nu a putut fi adaugatã, verificaþi configuraþia ºi permisiile directoarelor unde imaginile sunt stocate'.
                                '<li><b>NA</b> : înseamnã cã nu aþi selectat un album unde sã încãrcaþi imaginile, apãsaþi \'<a href="javascript:history.back(1)">înapoi</a>\' ºi selectaþi un album. Dacã nu aveþi un album <a href="albmgr.php">creaþi unul întâi</a>'.
                                '<li>Dacã \'semnele\' OK, DP, PB nu apar, daþi click pe icoana de imagine defectã pentru a verifica mesajele de eroare produse de PHP'.
                                '<li>Dacã navigatorul dvs. raporteazã \'timeout\', apãsaþi butonul de reîncãrcare a paginii'.
                                '</ul>',
                                'select_album' => 'Selecteazã album', //cpg1.3.0
                                'check_all' => 'Selecteazã tot', //cpg1.3.0
                                'uncheck_all' => 'Deselecteazã tot', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
                'title' => 'Banaþi utilizatori',
                'user_name' => 'Nume utilizator',
                'ip_address' => 'Adresa IP',
                'expiry' => 'Expirã (gol este permanent)',
                'edit_ban' => 'Salveazã modificarile',
                'delete_ban' => 'ªterge',
                'add_new' => 'Adaugã un nou ban',
                'add_ban' => 'Adaugã',
                'error_user' => 'Nu gãsesc utilizatorul', //cpg1.3.0
                'error_specify' => 'Trebuie sã specificaþi un nume sau o adresa IP', //cpg1.3.0
                'error_ban_id' => 'Ban ID invalid!', //cpg1.3.0
                'error_admin_ban' => 'Nu puteþi bana propriul user!', //cpg1.3.0
                'error_server_ban' => 'Nu puteþi bana propriul server!', //cpg1.3.0
                'error_ip_forbidden' => 'Nu puteþi bana acest IP - nu este rutabil!', //cpg1.3.0
                'lookup_ip' => 'Lookup adresa IP', //cpg1.3.0
                'submit' => 'da!', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Încarcã o imagine', //cpg1.3.0
  'custom_title' => 'Forma cerere', //cpg1.3.0
  'cust_instr_1' => 'Trebuie sã selectaþi numãrul de cãsuþe de încãrcare, nu mai multe decât numãrul de mai jos.', //cpg1.3.0
  'cust_instr_2' => 'Cerere numãr cãsuþe', //cpg1.3.0
  'cust_instr_3' => 'cãsuþe încãrcat imagini: %s', //cpg1.3.0
  'cust_instr_4' => 'cãsuþe încãrcat URL: %s', //cpg1.3.0
  'cust_instr_5' => 'cãsuþe încãrcat URL:', //cpg1.3.0
  'cust_instr_6' => 'cãsuþe încãrcat imagini:', //cpg1.3.0
  'cust_instr_7' => 'Vã rugãm introduceþi numãrul de cãsuþe. Apoi apãsaþi \'Continuare\'. ', //cpg1.3.0
  'reg_instr_1' => 'Acþiune invalidã pentru crearea formei.', //cpg1.3.0
  'reg_instr_2' => 'Acum puteþi încãrca imaginile folosind cãsuþele de mai jos. Mãrimea imaginilor trimise cãtre server nu trebuie sã depãºeascã %s KB fiecare. Fiºierele ZIP încãrcate în \'Încãrcare imagini\' ºi \'Încãrcare URL\' vor ramâne comprimate.', //cpg1.3.0
  'reg_instr_3' => 'Dacã doriþi ca fiºierele arhivate sã fie dezarhivate, trebuie sã folosiþi cãsuþa \'Încãrcaþi ZIP decompresate\'.', //cpg1.3.0
  'reg_instr_4' => 'Când folosiþi încãrcare URL, vã rugãm sã folosiþi întreaga cale: http://www.pagina.ro/imagini/exemplu.jpg', //cpg1.3.0
  'reg_instr_5' => 'Când aþi completat formularul, vã rugãm apãsaþi \'Continuare\'.', //cpg1.3.0
  'reg_instr_6' => 'Încãrcare ZIP decompresat:', //cpg1.3.0
  'reg_instr_7' => 'Încãrcare imagini:', //cpg1.3.0
  'reg_instr_8' => 'Încãrcare URL:', //cpg1.3.0
  'error_report' => 'Raporteazã eroare', //cpg1.3.0
  'error_instr' => 'Urmãtoarele încãrcãri au erori:', //cpg1.3.0
  'file_name_url' => 'Imagine(i)/URL', //cpg1.3.0
  'error_message' => 'Mesaj eroare', //cpg1.3.0
  'no_post' => 'Imaginea nu poate fi încãrcatã prin POST.', //cpg1.3.0
  'forb_ext' => 'Extensia fiºierului nepermisã.', //cpg1.3.0
  'exc_php_ini' => 'Mãrimea imaginii permisã în php.ini.', //cpg1.3.0
  'exc_file_size' => 'Mãrimea imaginii permisã de galerie.', //cpg1.3.0
  'partial_upload' => 'Încãrcare parþialã.', //cpg1.3.0
  'no_upload' => 'Fãrã încãrcare.', //cpg1.3.0
  'unknown_code' => 'Eroare PHP necunoscutã.', //cpg1.3.0
  'no_temp_name' => 'Fãrã încãrcare - fãrã nume temporar.', //cpg1.3.0
  'no_file_size' => 'Nu conþine date/corupt', //cpg1.3.0
  'impossible' => 'Imposibil de mutat.', //cpg1.3.0
  'not_image' => 'Nu este imagine/corupt', //cpg1.3.0
  'not_GD' => 'Nu are extensie corectã.', //cpg1.3.0
  'pixel_allowance' => 'Numãr mare de pixeli .', //cpg1.3.0
  'incorrect_prefix' => 'Prefix URL incorect', //cpg1.3.0
  'could_not_open_URI' => 'Nu pot deschide URL.', //cpg1.3.0
  'unsafe_URI' => 'URL neverificabil.', //cpg1.3.0
  'meta_data_failure' => 'Eroare Meta data', //cpg1.3.0
  'http_401' => '401 Neautorizat', //cpg1.3.0
  'http_402' => '402 Necesitã plata', //cpg1.3.0
  'http_403' => '403 Inaccesibil', //cpg1.3.0
  'http_404' => '404 Negãsit', //cpg1.3.0
  'http_500' => '500 Eroare internã', //cpg1.3.0
  'http_503' => '503 Serviciu indisponibil', //cpg1.3.0
  'MIME_extraction_failure' => 'MIME nu a putut fi extras.', //cpg1.3.0
  'MIME_type_unknown' => 'Tip MIME necunoscut', //cpg1.3.0
  'cant_create_write' => 'Nu pot sã scriu.', //cpg1.3.0
  'not_writable' => 'Nu pot sã scriu în imagine.', //cpg1.3.0
  'cant_read_URI' => 'Nu pot sã citesc URL', //cpg1.3.0
  'cant_open_write_file' => 'Nu pot deschide URL.', //cpg1.3.0
  'cant_write_write_file' => 'Nu pot sã scriu URL.', //cpg1.3.0
  'cant_unzip' => 'Nu pot dezarhiva.', //cpg1.3.0
  'unknown' => 'Eroare necunoscutã', //cpg1.3.0
  'succ' => 'Încãrcare reuºitã', //cpg1.3.0
  'success' => '%s încãrcãri reuºite.', //cpg1.3.0
  'add' => 'Vã rugãm apãsaþi \'Continuare\' pentru a adãuga imagini în album.', //cpg1.3.0
  'failure' => 'Încãrcare eºuatã', //cpg1.3.0
  'f_info' => 'Informaþii imagine', //cpg1.3.0
  'no_place' => 'Precedenta imagine nu a putut fi încãrcatã.', //cpg1.3.0
  'yes_place' => 'Precedenta imagine a putut fi încãrcatã.', //cpg1.3.0
  'max_fsize' => 'Dimensiunea maximã a imaginii este de %s KB',
  'album' => 'Album',
  'picture' => 'Imagine', //cpg1.3.0
  'pic_title' => 'Titlul imaginii', //cpg1.3.0
  'description' => 'Descrierea imaginii', //cpg1.3.0
  'keywords' => 'Cuvinte cheie (separate cu spaþiu)',
  'err_no_alb_uploadables' => 'Ne pare rãu dar nu existã un album unde sã încãrcaþi imaginile', //cpg1.3.0
  'place_instr_1' => 'Vã rugãm sã puneþi imaginile în albume în acest moment. Puteþi de asemenea adãuga informaþii despre fiecare imagine.', //cpg1.3.0
  'place_instr_2' => 'Mai multe imagini necesitã plasare, vã rugãm apãsaþi \'Continuare\'.', //cpg1.3.0
  'process_complete' => 'Aþi adãugat cu succes toate imaginile.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
        'title' => 'Administrare utilizatori',
        'name_a' => 'Nume ascendent',
        'name_d' => 'Nume descendent',
        'group_a' => 'Grup ascendent',
        'group_d' => 'Grup descendent',
        'reg_a' => 'Data înregistrãrii ascendent',
        'reg_d' => 'Data înregistrãrii descendent',
        'pic_a' => 'Numãr imagini ascendent',
        'pic_d' => 'Numãr imagini descendent',
        'disku_a' => 'Utilizare spaþiu ascendent',
        'disku_d' => 'Utilizare spaþiu descendent',
        'sort_by' => 'Sorteazã utilizatorii dupã',
        'err_no_users' => 'Tabelul cu utilizatori este gol!',
        'err_edit_self' => 'Nu puteþi edita propriul profil. Folosiþi opþiunea \'Profilul meu\' pentru aceasta',
        'edit' => 'Editeazã',
        'delete' => 'ªterge',
        'name' => 'Nume utilizator',
        'group' => 'Grup',
        'inactive' => 'Inactiv',
        'operations' => 'Operaþii',
        'pictures' => 'Imagini',
        'disk_space' => 'Spaþiu utilizat/Cota',
        'registered_on' => 'Înregistrat la',
        'last_visit' => 'Ultima vizitã', //cpg1.3.0
        'u_user_on_p_pages' => '%d utilizatori pe %d pagini',
        'confirm_del' => 'Sunteþi sigur cã doriþi sã ºtergeþi acest utilizator ? \\nToate imaginile ºi albumele sale vor fi de asemenea ºterse',
        'mail' => 'Poºta',
        'err_unknown_user' => 'Utilizatorul selectat nu existã!',
        'modify_user' => 'Modificã utilizatorul',
        'notes' => 'Note',
        'note_list' => '<li>Dacã nu doriþi sã schimbaþi parola, lãsaþi câmpurile "Parola" libere',
        'password' => 'Parola',
        'user_active' => 'Utilizatorul este activ',
        'user_group' => 'Grup utilizatori',
        'user_email' => 'E-mail',
        'user_web_site' => 'Pagina web',
        'create_new_user' => 'Creaza utilizator nou',
        'user_location' => 'Locaþie',
        'user_interests' => 'Interese',
        'user_occupation' => 'Ocupaþie',
        'latest_upload' => 'Ultima încãrcare', //cpg1.3.0
        'never' => 'niciodatã', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
        'title' => 'Redimensioneazã imagini',
        'what_it_does' => 'Ce face',
        'what_update_titles' => 'Modificã titlurile dupã numele fiºierului',
        'what_delete_title' => 'ªterge titlurile',
        'what_rebuild' => 'Reconstruieºte pictogramele ºi imaginile intermediare',
        'what_delete_originals' => 'ªterge imaginile dimensionate iniþial, înlocuindu-le cu versiunea dimensionatã',
        'file' => 'Fiºier',
        'title_set_to' => 'titlu setat ca',
        'submit_form' => 'trimite',
        'updated_succesfully' => 'modificatã cu succes',
        'error_create' => 'Eroare creare',
        'continue' => 'Proceseazã mai multe imagini',
        'main_success' => 'Fiºierul %s a fost folosit cu succes ca imagine principalã',
        'error_rename' => 'Eroare redenumire %s cu %s',
        'error_not_found' => 'Fiºierul %s nu a fost gãsit',
        'back' => 'înapoi la principal',
        'thumbs_wait' => 'Modificare pictograme ºi/sau imagini intermediare, vã rugãm asteptaþi...',
        'thumbs_continue_wait' => 'Continuare modificare pictograme ºi/sau imagini intermediare...',
        'titles_wait' => 'Modificare titluri, vã rugãm asteptaþi...',
        'delete_wait' => 'ªtergere titluri, vã rugãm asteptaþi...',
        'replace_wait' => 'ªtergere originale ºi modificare cu versiunile redimensionate, vã rugãm asteptaþi...',
        'instruction' => 'Instrucþiuni rapide',
        'instruction_action' => 'Selecteazã o acþiune',
        'instruction_parameter' => 'Seteazã parametrii',
        'instruction_album' => 'Selecteazã un album',
        'instruction_press' => 'Apasã %s',
        'update' => 'Modificã pictograme ºi/sau imagini intermediare',
        'update_what' => 'Ce trebuie modificat',
        'update_thumb' => 'Doar pictograme',
        'update_pic' => 'Doar imaginile intermediare',
        'update_both' => 'Amândouã',
        'update_number' => 'Numãrul de imagini procesate pentru o apãsare',
        'update_option' => '(Încercaþi o setare mai micã dacã primiþi timeout-uri)',
        'filename_title' => 'Nume fiºier &rArr; Titlu imagine',
        'filename_how' => 'Cum trebuie modificat titlul',
        'filename_remove' => 'Eliminã .jpg din final ºi înlocuieºte _ (liniuþa de subliniere) cu spaþiu',
        'filename_euro' => 'Schimbã 2003_11_23_13_20_20.jpg cu 23/11/2003 13:20',
        'filename_us' => 'Schimbã 2003_11_23_13_20_20.jpg cu 11/23/2003 13:20',
        'filename_time' => 'Schimbã 2003_11_23_13_20_20.jpg cu 13:20',
        'delete' => 'ªterge titlurile sau imaginile originale',
        'delete_title' => 'ªterge titlurile imaginilor',
        'delete_original' => 'ªterge imaginile originale',
        'delete_replace' => 'ªterge originalele, înlocuindu-le cu versiunile dimensionate',
        'select_album' => 'Selecteazã album',
        'delete_orphans' => 'ªterge comentarii orfane (în toate albumele)', //cpg1.3.0
        'orphan_comment' => 'Comentarii orfane', //cpg1.3.0
        'delete' => 'ªterge', //cpg1.3.0
        'delete_all' => 'ªterge tot', //cpg1.3.0
        'comment' => 'Comentariu: ', //cpg1.3.0
        'nonexist' => 'ataºat unei imagini inexistente # ', //cpg1.3.0
        'phpinfo' => 'Aratã phpinfo', //cpg1.3.0
        'update_db' => 'Actualizeazã baza de date', //cpg1.3.0
        'update_db_explanation' => 'Dacã aþi modificat fiºierele galeriei sau aþi fãcut up-grade, actualizeaþi baza de date. Aceasta va salva tabelele necesare ºi configurãrile în baza de date a galeriei.', //cpg1.3.0
);

?>