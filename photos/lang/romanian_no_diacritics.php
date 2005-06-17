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
// $Id: romanian_no_diacritics.php,v 1.1 2004/08/07 09:22:19 gaugau Exp $
// ------------------------------------------------------------------------- //

// info about translators and translated language
$lang_translation_info = array(
        'lang_name_english' => 'Romanian',
        'lang_name_native' => 'Romana',
        'lang_country_code' => 'ro',
        'trans_name'=> 'Adrian Stan',
        'trans_email' => 'adi.stan@gmail.com',
        'trans_website' => '',
        'trans_date' => '2004-08-01',
);

$lang_charset = 'iso-8859-2';
$lang_text_dir = 'ltr'; // ('ltr' stanga la dreapta, 'rtl' dreapta la stanga)

// prescurtari pentru Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// zilele saptamanii si ale lunii
$lang_day_of_week = array('Du', 'Lu', 'Ma', 'Mi', 'Joi', 'Vi', 'Sa');
$lang_month = array('Ian', 'Feb', 'Mar', 'Apr', 'Mai', 'Iun', 'Iul', 'Aug', 'Sep', 'Oct', 'Noi', 'Dec');

// Comune
$lang_yes = 'Da';
$lang_no  = 'Nu';
$lang_back = 'Inapoi';
$lang_continue = 'Continua';
$lang_info = 'Informatii';
$lang_error = 'Eroare';

// Data
$album_date_fmt =    '%d %B %Y';
$lastcom_date_fmt =  '%d/%m/%Y la %H:%M';
$lastup_date_fmt = '%d %B %Y';
$register_date_fmt = '%d %B %Y';
$lasthit_date_fmt = '%d %B %Y la %H:%M';
$comment_date_fmt =  '%d %B %Y la %H:%M';

// Cenzor cuvinte
$lang_bad_words = array('*fuck*', 'tampit', 'tampit', 'cretin', 'idiot', 'muie',  'pizda', 'pizda', 'pula', 'pula', 'sugi', 'coaie', 'cur', 'buci', 'cacat', 'cacat', 'caca', 'pewla', 'fut', 'futai', 'jepat');

$lang_meta_album_names = array(
        'random' => 'Imagini aleatoare',
        'lastup' => 'Ultimele adaugate',
        'lastalb'=> 'Ultimele albume modificate',
        'lastcom' => 'Ultimele comentarii',
        'topn' => 'Cele mai vizitate',
        'toprated' => 'Cele mai votate',
        'lasthits' => 'Ultimele vizitate',
        'search' => 'Rezultatele cautarii',
        'favpics'=> 'Imaginile favorite'
);

$lang_errors = array(
        'access_denied' => 'Nu aveti dreptul sa accesati aceasta pagina.',
        'perm_denied' => 'Nu aveti dreptul sa efectuati aceasta operatie',
        'param_missing' => 'Scriptul a fost rulat fara parametrul/parametrii necesari.',
        'non_exist_ap' => 'Albumul/imaginea selectata nu exista!',
        'quota_exceeded' => 'Cota dumneavoastra a fost depasita<br /><br />Aveti o cota pe disc de [quota]K, pozele dumneavoastra ocupa acum [space]K, adaugand aceasta imagine veti depasi aceasta cota.',
        'gd_file_type_err' => 'Cand folositi biblioteca GD tipurile de fisiere ce le puteti utiliza sunt doar JPEG si PNG.',
        'invalid_image' => 'Imaginea inregistrata de dumneavoastra este corupta sau nu poate fi prelucrata de biblioteca GD',
        'resize_failed' => 'Nu s-a putut crea pictograma sau imaginea redusa.',
        'no_img_to_display' => 'Nici o imagine incarcata',
        'non_exist_cat' => 'Categoria selectata nu exista',
        'orphan_cat' => 'O categorie are parintele inexistent, rulati managerul de categorii pentru a corecta problema.',
        'directory_ro' => 'Directorul \'%s\' nu poate fi scris, imaginile nu pot fi sterse',
        'non_exist_comment' => 'Comentariul selectat nu exista.',
        'pic_in_invalid_album' => 'Imaginea este intr-un album inexistent (%s)!?',
        'banned' => 'Sunteti exclus de pe aceasta pagina web.',
        'not_with_udb' => 'Aceasta functie este blocata deoarece este integrata cu programul ce ruleaza forumul. Ce incercati sa faceti ori nu este suportat in aceasta configuratie, ori functia trebuie executata de programul ce ruleaza forumul.',
        'offline_title' => 'Offline',
        'offline_text' => 'Galeria este oprita, va rugam sa reveniti peste cateva minute.',
        'ecards_empty' => 'Nu sunt vederi electonice de vizualizat. Verificati daca aveti optiunea pentru vederi electronice activata.',
        'action_failed' => 'Actiune esuata. Nu se poate procesa cererea dumneavoastra.',
        'no_zip' => 'Libraria pentru fisiere ZIP nu exista.',
        'zip_type' => 'Nu aveti dreptul sa incarcati fisiere ZIP.',
);

$lang_bbcode_help = 'Urmatoarele coduri va pot fi utile: <li>[b]<b>Bold</b>[/b]</li> <li>[i]<i>Italic</i>[/i]</li> <li>[url=http://site.ro/]Url Text[/url]</li> <li>[email]user@site.ro[/email]</li>';

// ------------------------------------------------------------------------- //
// theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
        'alb_list_title' => 'Albume',
        'alb_list_lnk' => 'Albume',
        'my_gal_title' => 'Galeria mea',
        'my_gal_lnk' => 'Galeria mea',
        'my_prof_lnk' => 'Profilul meu',
        'adm_mode_title' => 'Schimbati in modul admin',
        'adm_mode_lnk' => 'Mod admin',
        'usr_mode_title' => 'Schimbati in modul utilizator',
        'usr_mode_lnk' => 'Mod utilizator',
        'upload_pic_title' => 'Incarcati imagine',
        'upload_pic_lnk' => 'Incarcati imagine',
        'register_title' => 'Creati un cont',
        'register_lnk' => 'Inregistrare',
        'login_lnk' => 'Login',
        'logout_lnk' => 'Logout',
        'lastup_lnk' => 'Ultimele imagini',
        'lastcom_lnk' => 'Ultimele comentarii',
        'topn_lnk' => 'Top vizite',
        'toprated_lnk' => 'Top votari',
        'search_lnk' => 'Cautare',
        'fav_lnk' => 'Favoritele mele',
        'memberlist_title' => 'Lista membrilor', //cpg1.3.0
        'memberlist_lnk' => 'Membrii', //cpg1.3.0
        'faq_title' => 'Intrebari frecvente', //cpg1.3.0
        'faq_lnk' => 'FAQ', //cpg1.3.0
);

$lang_gallery_admin_menu = array(
        'upl_app_lnk' => 'Aprobare inregistrari',
        'config_lnk' => 'Configurare',
        'albums_lnk' => 'Albume',
        'categories_lnk' => 'Categorii',
        'users_lnk' => 'Utilizatori',
        'groups_lnk' => 'Grupuri',
        'comments_lnk' => 'Comentarii',
        'searchnew_lnk' => 'Adaugati imagini FTP',
        'util_lnk' => 'Redimensionati imagini',
        'ban_lnk' => 'Banati utilizatori',
        'db_ecard_lnk' => 'Arata vederi electronice', //cpg1.3.0
);

$lang_user_admin_menu = array(
        'albmgr_lnk' => 'Creati/ordonati albumele mele',
        'modifyalb_lnk' => 'Modificati albumele mele',
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
        'name' => 'Numele fisierului',
        'title' => 'Titlul',
        'sort_da' => 'Sortare dupa data, ascendent',
        'sort_dd' => 'Sortare dupa data, descendent',
        'sort_na' => 'Sortare dupa nume, ascendent',
        'sort_nd' => 'Sortare dupa nume, ascendent',
        'sort_ta' => 'Sortare dupa titlu, ascendent',
        'sort_td' => 'Sortare dupa titlu, ascendent',
        'download_zip' => 'Descarca ca fisier ZIP',
        'pic_on_page' => '%d imagini pe %d pagini',
        'user_on_page' => '%d utilizatori pe %d pagini'
);

$lang_img_nav_bar = array(
        'thumb_title' => 'Inapoi la pagina cu pictograme',
        'pic_info_title' => 'Afisare/Ascundere informatii despre imagine',
        'slideshow_title' => 'Diaporama',
        'ecard_title' => 'Trimiteti aceasta imagine ca vedere electronica',
        'ecard_disabled' => 'Vederile electronice sunt dezactivate',
        'ecard_disabled_msg' => 'Nu aveti permisiunea sa trimiteti vederi electronice',
        'prev_title' => 'Vizualizati imaginea precedenta',
        'next_title' => 'Vizualizati imaginea urmatoare',
        'pic_pos' => 'Imaginea %s/%s',
);

$lang_rate_pic = array(
        'rate_this_pic' => 'Voteaza aceasta imagine ',
        'no_votes' => '(Nici un vot inca)',
        'rating' => '(votarea curenta : %s / 5 cu %s voturi)',
        'rubbish' => 'Nereusita',
        'poor' => 'Slaba',
        'fair' => 'Acceptabila',
        'good' => 'Buna',
        'excellent' => 'Excelenta',
        'great' => 'Nemaipomenita',
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
        CRITICAL_ERROR => 'Eroare critica',
        'file' => 'Fisier: ',
        'line' => 'Linia: ',
);

$lang_display_thumbnails = array(
        'filename' => 'Nume fisier : ',
        'filesize' => 'Marime fisier : ',
        'dimensions' => 'Dimensiuni : ',
        'date_added' => 'Data adaugarii : ',
);

$lang_get_pic_data = array(
        'n_comments' => '%s comentarii',
        'n_views' => '%s vizitari',
        'n_votes' => '(%s voturi)'
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Debug Info', //cpg1.3.0
  'select_all' => 'Selecteaza tot', //cpg1.3.0
  'copy_and_paste_instructions' => 'Daca doriti sa ne cereti ajutorul, copiati si trimiteti aceasta eroare in comentariul dumneavostra. Asigurati-va ca inlocuiti orice parola din mesajul dumneavostra cu *** inainte de a trimite.', //cpg1.3.0
  'phpinfo' => 'Arata phpinfo', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => 'Limba predefinita', //cpg1.3.0
  'choose_language' => 'Alegeti limba', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'Tema predefinita', //cpg1.3.0
  'choose_theme' => 'Alegeti tema', //cpg1.3.0
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
        'Question' => 'Intrebare',
        'Very Happy' => 'Foarte bucuros',
        'Smile' => 'Zambeste',
        'Sad' => 'Suparat',
        'Surprised' => 'Surprins',
        'Shocked' => 'Socat',
        'Confused' => 'Confuz',
        'Cool' => 'Cool',
        'Laughing' => 'Razand',
        'Mad' => 'Nervos',
        'Razz' => 'Razz',
        'Embarassed' => 'Stanjenit',
        'Crying or Very sad' => 'Plangand sau foarte suparat',
        'Evil or Very Mad' => 'Rau sau foarte suparat',
        'Twisted Evil' => 'Foarte rau',
        'Rolling Eyes' => 'Rostogolind ochii',
        'Wink' => 'Clipeste',
        'Idea' => 'Idee',
        'Arrow' => 'Sageata',
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
        0 => 'Paraseste modul administrator...',
        1 => 'Intra in modul administrator...',
);

// ------------------------------------------------------------------------- //
// albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
        'alb_need_name' => 'Albumele trebuie sa aiba un nume!',
        'confirm_modifs' => 'Sunteti sigur ca vreti sa faceti aceste modificari?',
        'no_change' => 'Nu ati facut nici o modificare!',
        'new_album' => 'Album nou',
        'confirm_delete1' => 'Sunteti sigur ca vreti sa stergeti acest album?',
        'confirm_delete2' => '\nToate imaginile si comentariile continute vor fi pierdute!',
        'select_first' => 'Selectati un album inainte',
        'alb_mrg' => 'Managerul de albume',
        'my_gallery' => '* Galeria mea *',
        'no_category' => '* Nici o categorie *',
        'delete' => 'Sterge',
        'new' => 'Nou',
        'apply_modifs' => 'Efectuati modificarile',
        'select_category' => 'Selectati o categorie',
);

// ------------------------------------------------------------------------- //
// catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
        'miss_param' => 'Parametrii necesari pentru operatia \'%s\' nu au fost stabiliti!',
        'unknown_cat' => 'Categoria selectata nu exista in baza de date',
        'usergal_cat_ro' => 'Categoria Galeria Utilizatorului nu poate fi stearsa!',
        'manage_cat' => 'Administrati categoriile',
        'confirm_delete' => 'Sunteti sigur ca doriti sa stergeti aceasta categorie?',
        'category' => 'Categorie',
        'operations' => 'Operatii',
        'move_into' => 'Mutati in',
        'update_create' => 'Modificati/Creati o categorie',
        'parent_cat' => 'Categoria parinte',
        'cat_title' => 'Titlul categoriei',
        'cat_thumb' => 'Categoria pictogramei', //cpg1.3.0
        'cat_desc' => 'Descrierea categoriei'
);

// ------------------------------------------------------------------------- //
// config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
        'title' => 'Configurare',
        'restore_cfg' => 'Reveniti la setarile predefinite',
        'save_cfg' => 'Salvati noua configuratie',
        'notes' => 'Note',
        'info' => 'Informatii',
        'upd_success' => 'Configuratia a fost modificata',
        'restore_success' => 'Configuratia predefinita a fost restabilita',
        'name_a' => 'Nume ascendent',
        'name_d' => 'Nume descendent',
        'title_a' => 'Titlu ascendent',
        'title_d' => 'Titlu descendent',
        'date_a' => 'Data ascendenta',
        'date_d' => 'Data descendenta',
        'th_any' => 'Aspect maxim',
        'th_ht' => 'Inaltime',
        'th_wd' => 'Latime',
        'label' => 'eticheta', //cpg1.3.0
        'item' => 'articol', //cpg1.3.0
        'debug_everyone' => 'Oricine', //cpg1.3.0
        'debug_admin' => 'Doar administratorul', //cpg1.3.0
);

if (defined('CONFIG_PHP')) $lang_config_data = array(
        'Setari generale',
        array('Numele galeriei', 'gallery_name', 0),
        array('Descrierea galeriei', 'gallery_description', 0),
        array('Adresa e-mail a administratorului', 'gallery_admin_email', 0),
        array('Adresa pentru conexiunea \'Mai multe imagini la\' in vederile electronice', 'ecards_more_pic_target', 0),
        array('Galerie oprita', 'offline', 1), //cpg1.3.0
        array('Log vederi electronice', 'log_ecards', 1), //cpg1.3.0
        array('Permite descarcarea favoritelor ca fisier ZIP', 'enable_zipdownload', 1), //cpg1.3.0

        'Limba, Teme &amp; Setari caractere',
        array('Limba', 'lang', 5),
        array('Tema', 'theme', 6),
        array('Arata lista limbilor', 'language_list', 1), //cpg1.3.0
        array('Arata steagurile limbilor', 'language_flags', 8), //cpg1.3.0
        array('Arata optiunea &quot;reseteaza&quot; in sectiunea limbilor', 'language_reset', 1), //cpg1.3.0
        array('Arata lista temelor', 'theme_list', 1), //cpg1.3.0
        array('Arata optiunea &quot;reseteaza&quot; in sectiunea temelor', 'theme_reset', 1), //cpg1.3.0
        array('Arata FAQ', 'display_faq', 1), //cpg1.3.0
        array('Arata ajutor bbcode', 'show_bbcode_help', 1), //cpg1.3.0
        array('Caracter', 'charset', 4), //cpg1.3.0

        'Lista cu albume',
        array('Latimea tabelului principal (pixeli sau %)', 'main_table_width', 0),
        array('Numarul de nivele de categorii care sa fie afisate', 'subcat_level', 0),
        array('Numarul albumelor ce vor fi afisate', 'albums_per_page', 0),
        array('Numarul de coloane in lista de albume', 'album_list_cols', 0),
        array('Dimensiunea pictogramelor in pixeli', 'alb_list_thumb_size', 0),
        array('Continutul paginii principale', 'main_page_layout', 0),
        array('Afiseaza pictogramele albumelor din primul nivel in categorii','first_level',1),

        'Pictograme',
        array('Numarul de coloane pe pagina cu pictograme', 'thumbcols', 0),
        array('Numarul de randuri pe pagina cu pictograme', 'thumbrows', 0),
        array('Numarul maxim de taburi ce vor fi afisate', 'max_tabs', 0),
        array('Afiseaza descrierea imaginii (pe langa titlu) sub pictograma', 'caption_in_thumbview', 1),
        array('Afiseaza numarul de vizualizari sub pictograma', 'views_in_thumbview', 1), //cpg1.3.0
        array('Afiseaza numarul de comentarii sub pictograma', 'display_comment_count', 1),
        array('Afiseaza numele utilizatorului sub pictograma', 'display_uploader', 1), //cpg1.3.0
        array('Ordinea de sortare a imaginilor predefinita', 'default_sort_order', 3),
        array('Numarul minim de voturi pentru ca o imagine sa apara in lista \'Cele mai votate\' ', 'min_votes_for_rating', 0),

        'Afisarea imaginii &amp; setarile comentariilor',
        array('Latimea tabelului pentru afisarea imaginii (pixeli sau %)', 'picture_table_width', 0),
        array('Informatiile despre imagine sunt vizibile in mod predefinit', 'display_pic_info', 1),
        array('Filtrati cuvintele urate in comentarii', 'filter_bad_words', 1),
        array('Activeaza zambetele in comentarii', 'enable_smilies', 1),
        array('Permite comentarii consecutive de la acelasi utilizator', 'disable_comment_flood_protect', 1), //cpg1.3.0
        array('Lungimea maxima a descrierii imaginii', 'max_img_desc_length', 0),
        array('Numarul maxim de caractere intr-un cuvant', 'max_com_wlength', 0),
        array('Numarul maxim de linii intr-un comentariu', 'max_com_lines', 0),
        array('Lungimea maxima a unui comentariu', 'max_com_size', 0),
        array('Afiseaza rama film', 'display_film_strip', 1),
        array('Numarul de obiecte in rama film', 'max_film_strip_items', 0),
        array('Notifica administratorul despre comentarii prin email', 'email_comment_notification', 1), //cpg1.3.0
        array('Intervalul diaporamei in milisecunde (1 secunda = 1000 milisecunde)', 'slideshow_interval', 0), //cpg1.3.0

        'Setari pentru imagini si pictograme',
        array('Calitatea fisierelor JPEG', 'jpeg_qual', 0),
        array('Dimensiunea maxima a unei pictograme <a href="#notice2"  class="clickable_option">**</a>', 'thumb_width', 0), //cpg1.3.0
        array('Utilizati dimensiunea (latime sau inaltime sau aspectul maxim pentru pictograma )<b>**</b>', 'thumb_use', 7),
        array('Creaza imagini intermediare','make_intermediate',1),
        array('Latimea sau inaltimea maxima a unei imagini intermediare <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0), //cpg1.3.0
        array('Dimensiunea maxima a unei imagini (KB)', 'max_upl_size', 0),
        array('Latimea sau inaltimea maxima a imaginilor incarcate (pixeli)', 'max_upl_width_height', 0),

        'Setari avansate pentru imagini si pictograme', //cpg1.3.0
        array('Afiseaza icoana Privat utilizatorilor neinregistrati','show_private',1), //cpg1.3.0
        array('Caractere interzise in numele de fisiere', 'forbiden_fname_char',0), //cpg1.3.0
        array('Extensii acceptate pentru fisierele incarcate', 'allowed_file_extensions',0), //cpg1.3.0
        array('Tipuri de imagini permise', 'allowed_img_types',0), //cpg1.3.0
        array('Tipuri de video permise', 'allowed_mov_types',0), //cpg1.3.0
        array('Tipuri de audio permise', 'allowed_snd_types',0), //cpg1.3.0
        array('Tipuri de documente permise', 'allowed_doc_types',0), //cpg1.3.0
        array('Metoda de redimensionare a imaginilor','thumb_method',2), //cpg1.3.0
        array('Calea catre utilitarul \'convert\' al lui ImageMagick)', 'impath', 0), //cpg1.3.0
        array('Tipuri de imagini permise (valid doar pentru ImageMagick)', 'allowed_img_types',0), //cpg1.3.0
        array('Optiuni in linie de comanda pentru ImageMagick', 'im_options', 0), //cpg1.3.0
        array('Citeste informatiile EXIF din fisierele JPEG', 'read_exif_data', 1), //cpg1.3.0
        array('Citeste informatiile IPTC din fisierele JPEG', 'read_iptc_data', 1), //cpg1.3.0
        array('Directorul cu albume <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0), //cpg1.3.0
        array('Directorul pentru imaginile utilizatorilor <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0), //cpg1.3.0
        array('Prefixul pentru imaginile intermediare <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0), //cpg1.3.0
        array('Prefixul pentru pictograme <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0), //cpg1.3.0
        array('Modul predefinit al directoarelor', 'default_dir_mode', 0), //cpg1.3.0
        array('Modul predefinit al imaginilor', 'default_file_mode', 0), //cpg1.3.0

        'Setari pentru utilizatori',
        array('Permiteti inregistrarea de noi utilizatori', 'allow_user_registration', 1),
        array('Inregistrarea utilizatorilor necesita inregistrarea prin e-mail', 'reg_requires_valid_email', 1),
        array('Notifica administratorul de inregistrarea utilizatorilor prin email', 'reg_notify_admin_email', 1), //cpg1.3.0
        array('Permite ca doi utilizatori sa poata avea aceeasi adresa e-mail', 'allow_duplicate_emails_addr', 1),
        array('Utilizatorii pot avea albume private (Nota: daca treceti de la \'da\' la \'nu\' toate albumele personale curente vor deveni publice)', 'allow_private_albums', 1), //cpg1.3.0
        array('Notifica administratorul de asteptarea aprobarii incarcarii imaginilor', 'upl_notify_admin_email', 1), //cpg1.3.0
        array('Permite utilizatorilor inregistrati sa vada lista membrilor', 'allow_memberlist', 1), //cpg1.3.0

        'Descrierea campurilor aditionale (lasati necompletat daca nu le utilizati)',
        array('Numele campului 1', 'user_field1_name', 0),
        array('Numele campului 2', 'user_field2_name', 0),
        array('Numele campului 3', 'user_field3_name', 0),
        array('Numele campului 4', 'user_field4_name', 0),

        'Setari cookie-uri',
        array('Numele cookie-ului utilizat de script', 'cookie_name', 0),
        array('Calea cookie-ului utilizat de script', 'cookie_path', 0),

        'Setari',
        array('Activeaza modul debug', 'debug_mode', 9), //cpg1.3.0
        array('Arata note in modul debug', 'debug_notice', 1), //cpg1.3.0
         '<br /><div align="left"><a name="notice1"></a>(*) Campurile marcate cu * nu trebuie modificate daca aveti deja imagini in galeria dvs.<br />
        <a name="notice2"></a>(**) Cand schimbati setarea aceasta, doar fisierele introduse dupa acest moment vor fi afectate, si de aceea nu este recomandat sa efectuati aceste modificari daca sunt imagini in galerie. Puteti efectua modificarile si asupra fisierelor existente cu &quot;<a href="util.php">utilitar administrator</a>&quot; utilitar din menu-ul administratorului.</div><br />', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Trimite vederea', //cpg1.3.0
  'ecard_sender' => 'Expeditor', //cpg1.3.0
  'ecard_recipient' => 'Destinatar', //cpg1.3.0
  'ecard_date' => 'Data', //cpg1.3.0
  'ecard_display' => 'Arata vederea', //cpg1.3.0
  'ecard_name' => 'Nume', //cpg1.3.0
  'ecard_email' => 'email', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'crescator', //cpg1.3.0
  'ecard_descending' => 'descrescator', //cpg1.3.0
  'ecard_sorted' => 'Sortare', //cpg1.3.0
  'ecard_by_date' => 'dupa data', //cpg1.3.0
  'ecard_by_sender_name' => 'dupa numele expeditorului', //cpg1.3.0
  'ecard_by_sender_email' => 'dupa email-ul expeditorului', //cpg1.3.0
  'ecard_by_sender_ip' => 'dupa IP-ul expeditorului', //cpg1.3.0
  'ecard_by_recipient_name' => 'dupa numele destinatarului', //cpg1.3.0
  'ecard_by_recipient_email' => 'dupa email-ul destinatarului', //cpg1.3.0
  'ecard_number' => 'arata inregistrari %s to %s of %s', //cpg1.3.0
  'ecard_goto_page' => 'mergi la pagina', //cpg1.3.0
  'ecard_records_per_page' => 'Inregistrari pe pagina', //cpg1.3.0
  'check_all' => 'Selecteaza tot', //cpg1.3.0
  'uncheck_all' => 'Deselecteaza tot', //cpg1.3.0
  'ecards_delete_selected' => 'Sterge vederile selectate', //cpg1.3.0
  'ecards_delete_confirm' => 'Sunteti sigur ca vreti sa stergeti inregistrarile? Marcati in casuta!', //cpg1.3.0
  'ecards_delete_sure' => 'Sunt sigur', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
        'empty_name_or_com' => 'Trebuie sa introduceti numele dvs. si un comentariu',
        'com_added' => 'Comentariul dvs. a fost adaugat',
        'alb_need_title' => 'Trebuie sa furnizati un titlu pentru album!',
        'no_udp_needed' => 'Nici o modificare necesara.',
        'alb_updated' => 'Albumul a fost modificat',
        'unknown_album' => 'Albumul selectat nu exista sau nu aveti permisiunea sa incarcati in acest album',
        'no_pic_uploaded' => 'Nici o imagine nu a fost incarcata!<br /><br />Daca ati selectat o imagine, verificati daca serverul permite incarcari.',
        'err_mkdir' => 'Eroare in crearea directorului %s!',
        'dest_dir_ro' => 'Directorul destinatie %s nu poate fi scris de catre script!',
        'err_move' => 'Imposibil de deplasat %s in %s!',
        'err_fsize_too_large' => 'Dimensiunea imaginii este prea mare (maximul permis este %s x %s)!',
        'err_imgsize_too_large' => 'Marimea fisierului incarcat este prea mare (maximul permis este %s KB)!',
        'err_invalid_img' => 'Fiserul incarcat nu este o imagine valida!',
        'allowed_img_types' => 'Puteti incarca doar %s imagini.',
        'err_insert_pic' => 'Imaginea \'%s\' nu poate fi inserata in album ',
        'upload_success' => 'Imaginea dvs. a fost incarcata cu succes<br /><br />Va fi vizibila dupa aprobarea unui administrator.',
        'info' => 'Informatii',
        'com_added' => 'Comentariu adaugat',
        'alb_updated' => 'Album modificat',
        'err_comment_empty' => 'Comentariul dvs. este gol!',
        'err_invalid_fext' => 'Doar fisierele cu urmatoarele extensii sunt permise : <br /><br />%s.',
        'no_flood' => 'Ne pare rau dar sunteti deja autorul ultimului comentariu postat pentru aceasta imagine<br /><br />Editati comentariul postat daca doriti sa-l modificati',
        'redirect_msg' => 'Sunteti redirectat.<br /><br /><br />Apasati pe \'Continuare\' daca pagina nu se incarca automat',
        'upl_success' => 'Imaginea dvs. a fost adaugata cu succes',
        'email_comment_subject' => 'Comentariu din galeria foto', //cpg1.3.0
        'email_comment_body' => 'Cineva a postat un comentariu in galeria foto. Il puteti vedea la', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
        'caption' => 'Descriere',
        'fs_pic' => 'imaginea la dimensiuni maxime',
        'del_success' => 'stearsa cu succes',
        'ns_pic' => 'imaginea de dimensiuni normale',
        'err_del' => 'nu poate fi stearsa',
        'thumb_pic' => 'pictograma',
        'comment' => 'comentariul',
        'im_in_alb' => 'imaginea in album',
        'alb_del_success' => 'Albumul \'%s\' a fost sters',
        'alb_mgr' => 'Managerul de albume',
        'err_invalid_data' => 'Date nevalide primite in \'%s\'',
        'create_alb' => 'Creare album \'%s\'',
        'update_alb' => 'Modificare album \'%s\' cu titlul \'%s\' si indexul \'%s\'',
        'del_pic' => 'Sterge imaginea',
        'del_alb' => 'Sterge albumul',
        'del_user' => 'Sterge utilizatorul',
        'err_unknown_user' => 'Utilizatorul selectat nu exista!',
        'comment_deleted' => 'Comentariul a fost sters cu succes',
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
        'confirm_del' => 'Sunteti sigur ca doriti sa stergeti aceasta imagine? \\nComentariile vor fi de asemenea sterse.', //js-alert
        'del_pic' => 'Sterge aceasta imagine',
        'size' => '%s x %s pixeli',
        'views' => '%s ori',
        'slideshow' => 'Diaporama',
        'stop_slideshow' => 'Opreste diaporama',
        'view_fs' => 'Apasati pentru a vedea imaginea la dimensiuni originale',
          'edit_pic' => 'Editeaza descrierea', //cpg1.3.0
          'crop_pic' => 'Taie si roteste', //cpg1.3.0
);

$lang_picinfo = array(
        'title' =>'Informatii despre imagine',
        'Filename' => 'Nume fisier',
        'Album name' => 'Nume album',
        'Rating' => 'Votare (%s voturi)',
        'Keywords' => 'Cuvinte cheie',
        'File Size' => 'Dimensiune fisier',
        'Dimensions' => 'Dimensiune imagine',
        'Displayed' => 'Afisata',
        'Camera' => 'Camera',
        'Date taken' => 'Data fotografierii',
         'ISO'=>'ISO',
        'Aperture' => 'Apertura',
        'Exposure time' => 'Timp de expunere',
        'Focal length' => 'Focala',
        'Comment' => 'Comentariul',
        'addFav'=>'Adauga in Favorite',
        'addFavPhrase'=>'Favorite',
        'remFav'=>'Sterge din Favorite',
        'iptcTitle'=>'IPTC Titlu', //cpg1.3.0
        'iptcCopyright'=>'IPTC Copyright', //cpg1.3.0
        'iptcKeywords'=>'IPTC Cuvinte cheie', //cpg1.3.0
        'iptcCategory'=>'IPTC Categorie', //cpg1.3.0
        'iptcSubCategories'=>'IPTC Subcategorie', //cpg1.3.0
);

$lang_display_comments = array(
        'OK' => 'OK',
        'edit_title' => 'Editeaza acest comentariu',
        'confirm_delete' => 'Sunteti sigur ca doriti sa stergeti acest comentariu?',
        'add_your_comment' => 'Adaugati comentariul dvs.',
        'name'=>'Nume',
        'comment'=>'Comentariu',
        'your_name' => 'Numele dvs.',
);

$lang_fullsize_popup = array(
        'click_to_close' => 'Apasati pe imagine pentru a inchide fereastra',
);

}

// ------------------------------------------------------------------------- //
// ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
        'title' => 'Trimite o vedere electronica',
        'invalid_email' => '<b>Atentie</b> : adresa email este incorecta!',
        'ecard_title' => 'O vedere electronica de la %s',
        'view_ecard' => 'Daca vederea nu este afisata corect, apasati pe aceasta legatura',
        'view_more_pics' => 'Apasati aici pentru a vedea mai multe imagini!',
        'send_success' => 'Vederea dvs. a fost trimisa',
        'send_failed' => 'Ne pare rau dar serverul nu poate trimite vederea dvs...',
        'from' => 'De la',
        'your_name' => 'Numele dvs.',
        'your_email' => 'Adresa dvs. de email',
        'to' => 'Catre',
        'rcpt_name' => 'Numele expeditorului',
        'rcpt_email' => 'Adresa de email a destinatarului',
        'greetings' => 'Salutari',
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
        'approve' => 'Aproba imaginea',
        'postpone_app' => 'Amana aprobarea',
        'del_pic' => 'Sterge imaginea',
        'read_exif' => 'Citeste EXIF din nou', //cpg1.3.0
        'reset_view_count' => 'Reseteaza contorul de afisari',
        'reset_votes' => 'Reseteaza voturile',
        'del_comm' => 'Sterge comentariile',
        'upl_approval' => 'Aprobare incarcari',
        'edit_pics' => 'Editeaza imagini',
        'see_next' => 'Arata imaginile urmatoare',
        'see_prev' => 'Arata imaginile precedente',
        'n_pic' => '%s imagini',
        'n_of_pic_to_disp' => 'Numarul de imagini care sa fie afisate',
        'apply' => 'Executa modificarile',
        'crop_title' => 'Editor imagini', //cpg1.3.0
        'preview' => 'Previzualizare', //cpg1.3.0
        'save' => 'Salvare imagine', //cpg1.3.0
        'save_thumb' =>'Salveaza ca pictograma', //cpg1.3.0
        'sel_on_img' =>'Selectia este cat intreaga imagine!', //js-alert //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Intrebari frecvente', //cpg1.3.0
  'toc' => 'Cuprins', //cpg1.3.0
  'question' => 'Intrebare: ', //cpg1.3.0
  'answer' => 'Raspuns: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'Intrebari frecvente', //cpg1.3.0
  array('De ce trebuie sa ma inregistrez?', 'Inregistrarea poate sau nu sa fie ceruta de catre administrator. Inregistrarea permite accesul la optiuni suplimentare, cum ar fi incarcarea de imagini, existenta favoritelor, posibilitatea comentariilor sau a notarii imaginilor.', 'allow_user_registration', '0'), //cpg1.3.0
  array('Cum ma pot inregistra?', 'Apasati pe &quot;Inregistrare&quot; si completati toate campurile obligatorii (si cele optionale daca doriti).<br />Daca administratorul are activarea prin email selectata, dupa ce ati introdus datele trebuie sa primiti un email la adresa specificata de dv., in care gasiti detalii despre modul de activare al contului. Contul trebuie activat inainte de a va loga.', 'allow_user_registration', '1'), //cpg1.3.0
  array('Cum ma loghez?', 'Apasati &quot;Login&quot;, introduceti numele si parola si selectati &quot;Memoreaza-ma&quot; daca doriti sa intrati pe pagina in viitor deja logat.<br /><b>IMPORTANT:Cooki-urile trebuie activate si nu trebuie sa le stergeti daca doriti activa optiunea &quot;Memoreaza-ma&quot;.</b>', 'offline', 0), //cpg1.3.0
  array('De ce nu ma pot loga?', 'Ati apasat pe link-ul din email-ul de inregistrare?. Acest link va activeaza contul. Pentru alte probleme legate de logare, va rugam sa contactati administratorul.', 'offline', 0), //cpg1.3.0
  array('Ce se intampla daca am uitat parola?', 'Daca pagina are activata &quot;Reamintirea parolei&quot; apasati pe link. Daca acest link nu este disponibil, va trebui sa contactati administratorul.', 'offline', 0), //cpg1.3.0
  //array('Ce se intampla daca imi schimb email-ul?', 'Logati-va si schimbati adresa de email in &quot;Profil&quot;', 'offline', 0), //cpg1.3.0
  array('Cum salvez imaginile din &quot;Favorite&quot;?', 'Apasati pe imagine si apoi pe &quot;imagine info&quot; link (<img src="images/info.gif" width="16" height="16" border="0" alt="Informatii imagine" />); cautati in informatii si apasati &quot;Pune in favorite&quot;.<br />Administratorul trebuie sa lase &quot;informatii imagine&quot; active in mod predefinit.<br />IMPORTANT:Cooki-urile trebuie activate si nu trebuie sa le stergeti.', 'offline', 0), //cpg1.3.0
  array('Cum notez o imagine?', 'Apasati pe pictograma si mergeti in jos pentru a o putea nota.', 'offline', 0), //cpg1.3.0
  array('Cum comentez o imagine?', 'Apasati pe pictograma si mergeti in jos pentru a o putea comenta.', 'offline', 0), //cpg1.3.0
array('Cum incarc o imagine?', 'Apasati &quot;Incarca imagine&quot; si selectati albumul, apasati &quot;Browse&quot; si gasiti imaginea care doriti sa o incarcati, apasati &quot;open&quot; (scrieti un tilu si o descriere daca doriti) si apasati &quot;Submit&quot;', 'allow_private_albums', 0), //cpg1.3.0
  array('Unde pot incarca o imagine?', 'Puteti incarca o imagine in albumul/ele din &quot;Galeria mea&quot;. Administratorul poate permite sau nu sa incarcati imagini si in galeria principala.', 'allow_private_albums', 0), //cpg1.3.0
  array('Ce tip si ce marime pot sa aiba imaginile pe care pot sa le incarc?', 'Tipul si marimea (jpg, png, etc.) sunt stabilite de administrator.', 'offline', 0), //cpg1.3.0
  array('Ce este &quot;Galeria mea&quot;?', '&quot;Galeria mea&quot; este o galerie personala pe care puteti sa o folositi si administrati.', 'allow_private_albums', 0), //cpg1.3.0
  array('Cum pot crea, redenumi sau sterge albume din &quot;galeria mea&quot;?', 'Trebuie sa fiti in modul &quot;Mod admin&quot;<br />Mergeti la &quot;Creati/ordonati albumele mele&quot; si apasati &quot;Nou&quot;. Schimbati &quot;Album nou&quot; cu numele dorit.<br />Puteti de asemenea sa redenumiti orice album din galeria dvs.<br />Apasati &quot;Efectuati modificarile&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Cum restrictionez si cum modific ce utilizatori pot vedea Galeria mea?', 'Trebuie sa fiti in modul &quot;Mod admin&quot;<br />Mergeeti la &quot;Modifica albumele mele&quot;. Mergeti la &quot;Modifica album&quot; si selectati albumul dorit.<br />Aici puteti schimba numele, descrierea, pictograma, restrictiona vederea imaginilor si a notarii/comentarii acestora.<br />Apasati &quot;Modifica album&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Cum pot vedea galeriile altor utilizatori?', 'Mergeti la &quot;Lista albumelor&quot; si selectati &quot;galerii utilizatori&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Ce sunt cooki-urile?', 'Cooki-urile sunt date in mod text care sunt trimise de pagina web si stocate pe calculator.<br />Cooki+urile in mod normal permit utilizatorului sa iasa si sa intre in pagina fara a mai trebui sa se logheze.', 'offline', 0), //cpg1.3.0
  array('De unde pot descarca acest program pentru pagina mea?', 'Coppermine este o galerie multimedia, aparuta sub licenta GNU GPL. Are o multitudine de optiuni si merge pe multe tipuri de sisteme. Visitati <a href="http://coppermine.sf.net/">Coppermine Home Page</a> pentru a afla mai multe si pentru a descarca.', 'offline', 0), //cpg1.3.0

  'Navigare prin site', //cpg1.3.0
  array('Ce este &quot;Lista albumelor&quot;?', 'Aceasta va va arata categoria unde va aflati, cu un link catre alte album. Daca nu sunteti intr-o categorie, va va arata intreaga galerie si link+uri catre fiecare categorie. Pictogramele pot fi un link catre categorie.', 'offline', 0), //cpg1.3.0
  array('Ce este &quot;galeria mea&quot;?', 'Aceasta permite utilizatorului sa isi creeze propria galerie, sa puna/stearga/modifice albumele.', 'allow_private_albums', 0), //cpg1.3.0
  array('Care este diferenta intre &quot;Modul admin&quot; si &quot;Modul utilizator&quot;?', 'Modul admin permite utilizatorului sa modifice galeria personala.', 'allow_private_albums', 0), //cpg1.3.0
  array('Ce este &quot;Incarca imagine&quot;?', 'Permite utilizatorului sa incarce o imagine (dimensiunea si tipul sunt setate de administrator) in galerie.', 'allow_private_albums', 0), //cpg1.3.0
  array('Ce sunt &quot;Ultimele incarcari&quot;?', 'Va arata ultimele imagini incarcate in pagina.', 'offline', 0), //cpg1.3.0
  array('Ce sunt &quot;Ultimele comentarii&quot;?', 'Va arata ultimele comentarii si pentru ce imagine din pagina.', 'offline', 0), //cpg1.3.0
  array('Ce sunt &quot;Ultimele vizitate&quot;?', 'Va arata ultimele imagini vizionate, indiferent daca utilizatorul este logat sau nu.', 'offline', 0), //cpg1.3.0
  array('Ce sunt &quot;Cele mai votate&quot;?', 'Va arata cele mai votate imagini (ex: cinci utilizatori voteaza <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: imaginea trebuie sa aiba un vot de <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;Cinci utilizatori voteazad de la 1 la 5 (1,2,3,4,5) si rezultatul <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />votul poate fi de la <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (nemaipomenit) to <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (prost).', 'offline', 0), //cpg1.3.0
  array('Ce sunt &quot;Favorite&quot;?', 'permite stocarea unei imagini favorite intr-un cookie ce este tirmis catre calculatorul dvs.', 'offline', 0), //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Reamintirea parolei', //cpg1.3.0
  'err_already_logged_in' => 'Sunteti deja logat!', //cpg1.3.0
  'enter_username_email' => 'Introduceti numele sau adresa de email', //cpg1.3.0
  'submit' => 'go', //cpg1.3.0
  'failed_sending_email' => 'Email-ul cu parola nu poate fi trimis!', //cpg1.3.0
  'email_sent' => 'Un email cu numele si parola a fost trimis la %s', //cpg1.3.0
  'err_unk_user' => 'Utilizator inexistent!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - Reamintirea parolei', //cpg1.3.0
  'passwd_reminder_body' => 'Ati cerut sa va fie reamintita parola:
Utilizator: %s
Parola: %s
Apasati %s pentru a intra.', //cpg1.3.0
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
        'can_upload' => 'Poate incarca imagini',
        'can_have_gallery' => 'Poate avea o galerie personala',
        'apply' => 'Executa modificarile',
        'create_new_group' => 'Creaza un grup nou',
        'del_groups' => 'Sterge grupul/grupurile selectat(e)',
        'confirm_del' => 'Atentie, cand stergeti un grup, utilizatorii apartinand acestui grup vor fi transferati in grupul \'Inregistrati\' !\n\nSunteti sigur ca doriti sa continuati ?',
        'title' => 'Administreaza grupurile de utilizatori',
        'approval_1' => 'Aprobare Inreg. Pub. (1)',
        'approval_2' => 'Aprobare Inreg. Priv. (2)',
        'upload_form_config' => 'Incarca din configuratie', //cpg1.3.0
        'upload_form_config_values' => array( 'Doar o imagine de incarcat', 'Mai multe imagini de incarcat', 'Doar URL de incarcat', 'Doar ZIP de incarcat', 'Imagine-URL', 'Imagine-ZIP', 'URL-ZIP', 'Imagine-URL-ZIP'), //cpg1.3.0
        'custom_user_upload'=>'Utilizatorul isi poate seta numarul de casute?', //cpg1.3.0
        'num_file_upload'=>'Maxim/exact numar de imagini de incarcat', //cpg1.3.0
        'num_URI_upload'=>'Maxim/exact numar de URL de incarcat', //cpg1.3.0
        'note1' => '<b>(1)</b> Incarcarea intr-un album public necesita aprobarea administratorului',
        'note2' => '<b>(2)</b> Incarcarea intr-un album apartinand utilizatorului necesita aprobarea administratorului',
        'notes' => 'Note'
);

// ------------------------------------------------------------------------- //
// index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
        'welcome' => 'Bine ati venit!'
);

$lang_album_admin_menu = array(
        'confirm_delete' => 'Sunteti sigur ca doriti sa stergeti acest album? \\nToate imaginile si comentariile continute vor fi de asemenea sterse.',
        'delete' => 'Sterge',
        'modify' => 'Proprietati',
        'edit_pics' => 'Editare imagini',
);

$lang_list_categories = array(
        'home' => 'Pagina principala',
        'stat1' => '<b>[pictures]</b> imagini in <b>[albums]</b> albume si <b>[cat]</b> categorii cu <b>[comments]</b> comentarii afisate de <b>[views]</b> ori',
        'stat2' => '<b>[pictures]</b> imagini in <b>[albums]</b> albume afisate de <b>[views]</b> ori',
        'xx_s_gallery' => 'Galeria %s\'s',
        'stat3' => '<b>[pictures]</b> imagini in <b>[albums]</b> albume cu <b>[comments]</b> comentarii afisate de <b>[views]</b> ori'
);

$lang_list_users = array(
        'user_list' => 'Lista utilizatorilor',
        'no_user_gal' => 'Nu exista galerii utilizator',
        'n_albums' => '%s album(e)',
        'n_pics' => '%s imagini'
);

$lang_list_albums = array(
        'n_pictures' => '%s imagini',
        'last_added' => ', ultima adaugata la %s'
);

}

// ------------------------------------------------------------------------- //
// login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
        'login' => 'Login',
        'enter_login_pswd' => 'Introduceti contul si parola pentru a va loga',
        'username' => 'Utilizator',
        'password' => 'Parola',
        'remember_me' => 'Memoreaza-ma',
        'welcome' => 'Bine ati venit %s ...',
        'err_login' => '*** Nu ati putut fi logat. Incercati din nou ***',
        'err_already_logged_in' => 'Sunteti deja logat !',
        'forgot_password_link' => 'Reamintirea parolei', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
        'logout' => 'Logout',
        'bye' => 'La revedere %s ...',
        'err_not_loged_in' => 'Nu sunteti logat!',
);

// ------------------------------------------------------------------------- //
// phpinfo.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP info', //cpg1.3.0
  'explanation' => 'Acesta este rezultatul generat de PHP <a href="http://www.php.net/phpinfo">phpinfo()</a>', //cpg1.3.0
  'no_link' => 'Lasand pe altii sa vada php info nu este recomandat, de aceea aceasta pagina este vizibila doar pentru administrator. Nu puteti posta o legatura directa catre aceasta pagina, accesul nu va fi permis.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
        'upd_alb_n' => 'Modifica album %s',
        'general_settings' => 'Setari generale',
        'alb_title' => 'Titlul albumului',
        'alb_cat' => 'Categoria albumului',
        'alb_desc' => 'Descrierea albumului',
        'alb_thumb' => 'Pictograma albumului',
        'alb_perm' => 'Permisiile acestui album',
        'can_view' => 'Albumul poate fi vazut de',
        'can_upload' => 'Vizitatorii pot incarca imagini',
        'can_post_comments' => 'Vizitatorii pot posta comentarii',
        'can_rate' => 'Vizitatorii pot nota imaginile',
        'user_gal' => 'Galeria utilizatorului',
        'no_cat' => '* Nici o categorie *',
        'alb_empty' => 'Albumul este gol',
        'last_uploaded' => 'Ultimele incarcate',
        'public_alb' => 'Toata lumea (album public)',
        'me_only' => 'Doar eu',
        'owner_only' => 'Proprietarul albumul doar (%s)',
        'groupp_only' => 'Membrii grupului \'%s\'',
        'err_no_alb_to_modify' => 'Nici un album pe care sa il puteti modifica in baza de date.',
        'update' => 'Modifca album',
        'notice1' => '(*) depinde de setarile %sgroups%s', //cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- //
// ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
        'already_rated' => 'Ne pare rau, dar ati votat deja aceasta imagine',
        'rate_ok' => 'Votul dvs. ',
        'forbidden' => 'Nu va puteti vota propria imagine.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Desi administratorii paginii {SITE_NAME} vor incerca sa stearga sau sa editeze orice material nepermis sau obscen cat de repede cu putinta, este imposibil sa fie verificat fiecare mesaj sau comentariu. De aceea sunteti de acord ca toate mesajele postate pe aceasta pagina exprima opiniile autorului si nu ale administratorilor (exceptand mesajele transmise de ei) si deci nu pot fi trasi la raspundere.<br />
<br />
Sunteti de acord sa nu postati nici o imagine sau un mesaj obscen, vulgar, amenintator, sau orice alt mesaj ce incalca legile. Sunteti de acord ca administratorul si moderatorii paginii {SITE_NAME} au dreptul sa modifice sau sa stearga orice continut oricand considera ei necesar. Ca utilizator sunteti de acord ca orice informatie introdusa sa fie stocata intr-o baza de date. Desi aceasta informatie NU va fi oferita unei terte parti administratorii nu pot fi facuti responsabili in cazul unei accesari fortate, ilegale a bazei de date ce ar duce la compromiterea acesteia. <br />
<br />
Acesta pagina foloseste cookie-uri pentru a stoca informatie pe computerul dvs. Acestea servesc doar la buna functionare a paginii web. Adresa dvs. e-mail este folosita doar pentru a verifica parola pentru procesul de inregistrare si pentru a primi informatii directe din pagina. <br />
<br />
Drepturile de autor asupra imaginilor din galerie apartin exclusiv autorilor. Orice modificare/copiere se va face doar avand consimtamantul acestora!<br /><br />
Apasand pe butonul 'Sunt de acord' de mai jos sunteti de acord sa respectati si acceptati conditiile de mai sus.
EOT;

$lang_register_php = array(
        'page_title' => 'Inregistrare utilizator',
        'term_cond' => 'Termeni si conditii',
        'i_agree' => 'Sunt de acord',
        'submit' => 'Trimite inregistrarea',
        'err_user_exists' => 'Numele utilizator ales exista deja, va rugam sa alegeti alt nume',
        'err_password_mismatch' => 'Cele doua parole nu sunt identice, va rugam sa le reintroduceti',
        'err_uname_short' => 'Numele utilizator trebuie sa aiba minim 3 caractere',
        'err_password_short' => 'Parola trebuie sa aiba minim 5 caractere',
        'err_uname_pass_diff' => 'Numele utilizator si parola trebuie sa fie diferite',
        'err_invalid_email' => 'Adresa e-mail este incorecta',
        'err_duplicate_email' => 'Alt utilizator este inregistrat deja cu aceasta adresa e-mail',
        'enter_info' => 'Introduceti datele pentru inregistrare',
        'required_info' => 'Informatii necesare',
        'optional_info' => 'Informatii optionale',
        'username' => 'Utilizator',
        'password' => 'Parola',
        'password_again' => 'Confirmati parola',
        'email' => 'Email',
        'location' => 'Locatie',
        'interests' => 'Interese',
        'website' => 'Pagina web',
        'occupation' => 'Ocupatie',
        'error' => 'Eroare',
        'confirm_email_subject' => '%s - Confirmarea inregistrarii',
        'information' => 'Informatii',
        'failed_sending_email' => 'Mesajul de confirmare a inregistrarii nu poate fi trimis!',
        'thank_you' => 'Va multumim pentru ca v-ati inregistrat.<br /><br />Un email continand informatii despre cum sa activati contul dvs. a fost trimis la adresa email specificata.',
        'acct_created' => 'Contul dvs. a fost creat si va puteti loga introducand user-ul si parola dvs.',
        'acct_active' => 'Contul dvs. este acum activ si va puteti loga introducand user-ul si parola dvs.',
        'acct_already_act' => 'Contul dvs. este deja activ!',
        'acct_act_failed' => 'Acest cont nu poate fi activat!',
        'err_unk_user' => 'Utilizatorul selectat nu exista!',
        'x_s_profile' => 'Profilul lui %s',
        'group' => 'Grup',
        'reg_date' => 'Inregistrat la',
        'disk_usage' => 'Utilizare disc',
        'change_pass' => 'Schimbare parola',
        'current_pass' => 'Parola curenta',
        'new_pass' => 'Parola noua',
        'new_pass_again' => 'Reintroduceti parola noua',
        'err_curr_pass' => 'Parola curenta este incorecta',
        'apply_modif' => 'Executa modificarile',
        'change_pass' => 'Schimba parola mea',
        'update_success' => 'Profilul dumneavoastra a fost modificat',
        'pass_chg_success' => 'Parola dumneavoastra a fost schimbata',
        'pass_chg_error' => 'Parola dumneavoastra nu a fost schimbata',
        'notify_admin_email_subject' => '%s - Notificare inregistrare', //cpg1.3.0
        'notify_admin_email_body' => 'Un nou utilizator "%s" in galerie', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
Va multumim ca v-ati inregistrat la {SITE_NAME}

Contul dvs. este : "{USER_NAME}"
Parola dvs. este : "{PASSWORD}"

Pentru a activa contul dvs., va rugam sa apasati pe legatura de mai jos
sau sa o copiati si duceti in navigatorul dvs. de internet.

{ACT_LINK}

Cu stima,

{SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
        'title' => 'Revizuire comentarii',
        'no_comment' => 'Nu exista comentarii care sa fie revizuite',
        'n_comm_del' => '%s comentarii sterse',
        'n_comm_disp' => 'Numarul de comentarii de afisat',
        'see_prev' => 'Afiseaza precedentul',
        'see_next' => 'Afiseaza urmatorul',
        'del_comm' => 'Sterge comentariile selectate',
);

// ------------------------------------------------------------------------- //
// search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
        0 => 'Cauta in colectia de imagini',
);

// ------------------------------------------------------------------------- //
// searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
        'page_title' => 'Cauta imagini noi',
        'select_dir' => 'Selecteaza directorul',
        'select_dir_msg' => 'Aceasta functie va permite sa adaugati mai multe imagini o data, imagini incarcate de dvs. pe server prin FTP.<br /><br />Selectati directorul unde ati incarcat imaginile',
        'no_pic_to_add' => 'Nu exista nici o imagine de adaugat',
        'need_one_album' => 'Aveti nevoie de cel putin un album pentru a folosi aceasta functie',
        'warning' => 'Atentie',
        'change_perm' => 'scriptul nu poate scrie in acest director, trebuie sa schimbati modul la 755 sau 777 inainte de a incerca sa adaugati imaginile!',
        'target_album' => '<b>Pune imaginile din &quot;</b>%s<b>&quot; in </b>%s',
        'folder' => 'Director',
        'image' => 'Imagine',
        'album' => 'Album',
        'result' => 'Rezultat',
        'dir_ro' => 'Nu poate fi scris. ',
        'dir_cant_read' => 'Nu poate fi citit. ',
        'insert' => 'Adauga imagini noi in galerie',
        'list_new_pic' => 'Lista noilor imagini',
        'insert_selected' => 'Insereaza imaginile selectate',
        'no_pic_found' => 'Nu a fost gasita nici o imagine noua',
        'be_patient' => 'Va rugam asteptati, scriptul necesita timp pentru a procesa imaginile',
        'notes' =>  '<ul>'.
                                '<li><b>OK</b> : inseamna ca imaginea a fost adaugata cu succes'.
                                '<li><b>DP</b> : inseamna ca imaginea este un duplicat si exista deja in baza de date'.
                                '<li><b>PB</b> : inseamna ca imaginea nu a putut fi adaugata, verificati configuratia si permisiile directoarelor unde imaginile sunt stocate'.
                                '<li><b>NA</b> : inseamna ca nu ati selectat un album unde sa incarcati imaginile, apasati \'<a href="javascript:history.back(1)">inapoi</a>\' si selectati un album. Daca nu aveti un album <a href="albmgr.php">creati unul intai</a>'.
                                '<li>Daca \'semnele\' OK, DP, PB nu apar, dati click pe icoana de imagine defecta pentru a verifica mesajele de eroare produse de PHP'.
                                '<li>Daca navigatorul dvs. raporteaza \'timeout\', apasati butonul de reincarcare a paginii'.
                                '</ul>',
                                'select_album' => 'Selecteaza album', //cpg1.3.0
                                'check_all' => 'Selecteaza tot', //cpg1.3.0
                                'uncheck_all' => 'Deselecteaza tot', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
                'title' => 'Banati utilizatori',
                'user_name' => 'Nume utilizator',
                'ip_address' => 'Adresa IP',
                'expiry' => 'Expira (gol este permanent)',
                'edit_ban' => 'Salveaza modificarile',
                'delete_ban' => 'Sterge',
                'add_new' => 'Adauga un nou ban',
                'add_ban' => 'Adauga',
                'error_user' => 'Nu gasesc utilizatorul', //cpg1.3.0
                'error_specify' => 'Trebuie sa specificati un nume sau o adresa IP', //cpg1.3.0
                'error_ban_id' => 'Ban ID invalid!', //cpg1.3.0
                'error_admin_ban' => 'Nu puteti bana propriul user!', //cpg1.3.0
                'error_server_ban' => 'Nu puteti bana propriul server!', //cpg1.3.0
                'error_ip_forbidden' => 'Nu puteti bana acest IP - nu este rutabil!', //cpg1.3.0
                'lookup_ip' => 'Lookup adresa IP', //cpg1.3.0
                'submit' => 'da!', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Incarca o imagine', //cpg1.3.0
  'custom_title' => 'Forma cerere', //cpg1.3.0
  'cust_instr_1' => 'Trebuie sa selectati numarul de casute de incarcare, nu mai multe decat numarul de mai jos.', //cpg1.3.0
  'cust_instr_2' => 'Cerere numar casute', //cpg1.3.0
  'cust_instr_3' => 'casute incarcat imagini: %s', //cpg1.3.0
  'cust_instr_4' => 'casute incarcat URL: %s', //cpg1.3.0
  'cust_instr_5' => 'casute incarcat URL:', //cpg1.3.0
  'cust_instr_6' => 'casute incarcat imagini:', //cpg1.3.0
  'cust_instr_7' => 'Va rugam introduceti numarul de casute. Apoi apasati \'Continuare\'. ', //cpg1.3.0
  'reg_instr_1' => 'Actiune invalida pentru crearea formei.', //cpg1.3.0
  'reg_instr_2' => 'Acum puteti incarca imaginile folosind casutele de mai jos. Marimea imaginilor trimise catre server nu trebuie sa depaseasca %s KB fiecare. Fisierele ZIP incarcate in \'Incarcare imagini\' si \'Incarcare URL\' vor ramane comprimate.', //cpg1.3.0
  'reg_instr_3' => 'Daca doriti ca fisierele arhivate sa fie dezarhivate, trebuie sa folositi casuta \'Incarcati ZIP decompresate\'.', //cpg1.3.0
  'reg_instr_4' => 'Cand folositi incarcare URL, va rugam sa folositi intreaga cale: http://www.pagina.ro/imagini/exemplu.jpg', //cpg1.3.0
  'reg_instr_5' => 'Cand ati completat formularul, va rugam apasati \'Continuare\'.', //cpg1.3.0
  'reg_instr_6' => 'Incarcare ZIP decompresat:', //cpg1.3.0
  'reg_instr_7' => 'Incarcare imagini:', //cpg1.3.0
  'reg_instr_8' => 'Incarcare URL:', //cpg1.3.0
  'error_report' => 'Raporteaza eroare', //cpg1.3.0
  'error_instr' => 'Urmatoarele incarcari au erori:', //cpg1.3.0
  'file_name_url' => 'Imagine(i)/URL', //cpg1.3.0
  'error_message' => 'Mesaj eroare', //cpg1.3.0
  'no_post' => 'Imaginea nu poate fi incarcata prin POST.', //cpg1.3.0
  'forb_ext' => 'Extensia fisierului nepermisa.', //cpg1.3.0
  'exc_php_ini' => 'Marimea imaginii permisa in php.ini.', //cpg1.3.0
  'exc_file_size' => 'Marimea imaginii permisa de galerie.', //cpg1.3.0
  'partial_upload' => 'Incarcare partiala.', //cpg1.3.0
  'no_upload' => 'Fara incarcare.', //cpg1.3.0
  'unknown_code' => 'Eroare PHP necunoscuta.', //cpg1.3.0
  'no_temp_name' => 'Fara incarcare - fara nume temporar.', //cpg1.3.0
  'no_file_size' => 'Nu contine date/corupt', //cpg1.3.0
  'impossible' => 'Imposibil de mutat.', //cpg1.3.0
  'not_image' => 'Nu este imagine/corupt', //cpg1.3.0
  'not_GD' => 'Nu are extensie corecta.', //cpg1.3.0
  'pixel_allowance' => 'Numar mare de pixeli .', //cpg1.3.0
  'incorrect_prefix' => 'Prefix URL incorect', //cpg1.3.0
  'could_not_open_URI' => 'Nu pot deschide URL.', //cpg1.3.0
  'unsafe_URI' => 'URL neverificabil.', //cpg1.3.0
  'meta_data_failure' => 'Eroare Meta data', //cpg1.3.0
  'http_401' => '401 Neautorizat', //cpg1.3.0
  'http_402' => '402 Necesita plata', //cpg1.3.0
  'http_403' => '403 Inaccesibil', //cpg1.3.0
  'http_404' => '404 Negasit', //cpg1.3.0
  'http_500' => '500 Eroare interna', //cpg1.3.0
  'http_503' => '503 Serviciu indisponibil', //cpg1.3.0
  'MIME_extraction_failure' => 'MIME nu a putut fi extras.', //cpg1.3.0
  'MIME_type_unknown' => 'Tip MIME necunoscut', //cpg1.3.0
  'cant_create_write' => 'Nu pot sa scriu.', //cpg1.3.0
  'not_writable' => 'Nu pot sa scriu in imagine.', //cpg1.3.0
  'cant_read_URI' => 'Nu pot sa citesc URL', //cpg1.3.0
  'cant_open_write_file' => 'Nu pot deschide URL.', //cpg1.3.0
  'cant_write_write_file' => 'Nu pot sa scriu URL.', //cpg1.3.0
  'cant_unzip' => 'Nu pot dezarhiva.', //cpg1.3.0
  'unknown' => 'Eroare necunoscuta', //cpg1.3.0
  'succ' => 'Incarcare reusita', //cpg1.3.0
  'success' => '%s incarcari reusite.', //cpg1.3.0
  'add' => 'Va rugam apasati \'Continuare\' pentru a adauga imagini in album.', //cpg1.3.0
  'failure' => 'Incarcare esuata', //cpg1.3.0
  'f_info' => 'Informatii imagine', //cpg1.3.0
  'no_place' => 'Precedenta imagine nu a putut fi incarcata.', //cpg1.3.0
  'yes_place' => 'Precedenta imagine a putut fi incarcata.', //cpg1.3.0
  'max_fsize' => 'Dimensiunea maxima a imaginii este de %s KB',
  'album' => 'Album',
  'picture' => 'Imagine', //cpg1.3.0
  'pic_title' => 'Titlul imaginii', //cpg1.3.0
  'description' => 'Descrierea imaginii', //cpg1.3.0
  'keywords' => 'Cuvinte cheie (separate cu spatiu)',
  'err_no_alb_uploadables' => 'Ne pare rau dar nu exista un album unde sa incarcati imaginile', //cpg1.3.0
  'place_instr_1' => 'Va rugam sa puneti imaginile in albume in acest moment. Puteti de asemenea adauga informatii despre fiecare imagine.', //cpg1.3.0
  'place_instr_2' => 'Mai multe imagini necesita plasare, va rugam apasati \'Continuare\'.', //cpg1.3.0
  'process_complete' => 'Ati adaugat cu succes toate imaginile.', //cpg1.3.0
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
        'reg_a' => 'Data inregistrarii ascendent',
        'reg_d' => 'Data inregistrarii descendent',
        'pic_a' => 'Numar imagini ascendent',
        'pic_d' => 'Numar imagini descendent',
        'disku_a' => 'Utilizare spatiu ascendent',
        'disku_d' => 'Utilizare spatiu descendent',
        'sort_by' => 'Sorteaza utilizatorii dupa',
        'err_no_users' => 'Tabelul cu utilizatori este gol!',
        'err_edit_self' => 'Nu puteti edita propriul profil. Folositi optiunea \'Profilul meu\' pentru aceasta',
        'edit' => 'Editeaza',
        'delete' => 'Sterge',
        'name' => 'Nume utilizator',
        'group' => 'Grup',
        'inactive' => 'Inactiv',
        'operations' => 'Operatii',
        'pictures' => 'Imagini',
        'disk_space' => 'Spatiu utilizat/Cota',
        'registered_on' => 'Inregistrat la',
        'last_visit' => 'Ultima vizita', //cpg1.3.0
        'u_user_on_p_pages' => '%d utilizatori pe %d pagini',
        'confirm_del' => 'Sunteti sigur ca doriti sa stergeti acest utilizator ? \\nToate imaginile si albumele sale vor fi de asemenea sterse',
        'mail' => 'Posta',
        'err_unknown_user' => 'Utilizatorul selectat nu exista!',
        'modify_user' => 'Modifica utilizatorul',
        'notes' => 'Note',
        'note_list' => '<li>Daca nu doriti sa schimbati parola, lasati campurile "Parola" libere',
        'password' => 'Parola',
        'user_active' => 'Utilizatorul este activ',
        'user_group' => 'Grup utilizatori',
        'user_email' => 'E-mail',
        'user_web_site' => 'Pagina web',
        'create_new_user' => 'Creaza utilizator nou',
        'user_location' => 'Locatie',
        'user_interests' => 'Interese',
        'user_occupation' => 'Ocupatie',
        'latest_upload' => 'Ultima incarcare', //cpg1.3.0
        'never' => 'niciodata', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
        'title' => 'Redimensioneaza imagini',
        'what_it_does' => 'Ce face',
        'what_update_titles' => 'Modifica titlurile dupa numele fisierului',
        'what_delete_title' => 'Sterge titlurile',
        'what_rebuild' => 'Reconstruieste pictogramele si imaginile intermediare',
        'what_delete_originals' => 'Sterge imaginile dimensionate initial, inlocuindu-le cu versiunea dimensionata',
        'file' => 'Fisier',
        'title_set_to' => 'titlu setat ca',
        'submit_form' => 'trimite',
        'updated_succesfully' => 'modificata cu succes',
        'error_create' => 'Eroare creare',
        'continue' => 'Proceseaza mai multe imagini',
        'main_success' => 'Fisierul %s a fost folosit cu succes ca imagine principala',
        'error_rename' => 'Eroare redenumire %s cu %s',
        'error_not_found' => 'Fisierul %s nu a fost gasit',
        'back' => 'inapoi la principal',
        'thumbs_wait' => 'Modificare pictograme si/sau imagini intermediare, va rugam asteptati...',
        'thumbs_continue_wait' => 'Continuare modificare pictograme si/sau imagini intermediare...',
        'titles_wait' => 'Modificare titluri, va rugam asteptati...',
        'delete_wait' => 'Stergere titluri, va rugam asteptati...',
        'replace_wait' => 'Stergere originale si modificare cu versiunile redimensionate, va rugam asteptati...',
        'instruction' => 'Instructiuni rapide',
        'instruction_action' => 'Selecteaza o actiune',
        'instruction_parameter' => 'Seteaza parametrii',
        'instruction_album' => 'Selecteaza un album',
        'instruction_press' => 'Apasa %s',
        'update' => 'Modifica pictograme si/sau imagini intermediare',
        'update_what' => 'Ce trebuie modificat',
        'update_thumb' => 'Doar pictograme',
        'update_pic' => 'Doar imaginile intermediare',
        'update_both' => 'Amandoua',
        'update_number' => 'Numarul de imagini procesate pentru o apasare',
        'update_option' => '(Incercati o setare mai mica daca primiti timeout-uri)',
        'filename_title' => 'Nume fisier &rArr; Titlu imagine',
        'filename_how' => 'Cum trebuie modificat titlul',
        'filename_remove' => 'Elimina .jpg din final si inlocuieste _ (liniuta de subliniere) cu spatiu',
        'filename_euro' => 'Schimba 2003_11_23_13_20_20.jpg cu 23/11/2003 13:20',
        'filename_us' => 'Schimba 2003_11_23_13_20_20.jpg cu 11/23/2003 13:20',
        'filename_time' => 'Schimba 2003_11_23_13_20_20.jpg cu 13:20',
        'delete' => 'Sterge titlurile sau imaginile originale',
        'delete_title' => 'Sterge titlurile imaginilor',
        'delete_original' => 'Sterge imaginile originale',
        'delete_replace' => 'Sterge originalele, inlocuindu-le cu versiunile dimensionate',
        'select_album' => 'Selecteaza album',
        'delete_orphans' => 'Sterge comentarii orfane (in toate albumele)', //cpg1.3.0
        'orphan_comment' => 'Comentarii orfane', //cpg1.3.0
        'delete' => 'Sterge', //cpg1.3.0
        'delete_all' => 'Sterge tot', //cpg1.3.0
        'comment' => 'Comentariu: ', //cpg1.3.0
        'nonexist' => 'atasat unei imagini inexistente # ', //cpg1.3.0
        'phpinfo' => 'Arata phpinfo', //cpg1.3.0
        'update_db' => 'Actualizeaza baza de date', //cpg1.3.0
        'update_db_explanation' => 'Daca ati modificat fisierele galeriei sau ati facut up-grade, actualizeati baza de date. Aceasta va salva tabelele necesare si configurarile in baza de date a galeriei.', //cpg1.3.0
);

?>