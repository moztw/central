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
// $Id: romanian-utf-8.php,v 1.6 2004/08/07 09:22:19 gaugau Exp $
// ------------------------------------------------------------------------- //

// info about translators and translated language
$lang_translation_info = array(
        'lang_name_english' => 'Romanian',
        'lang_name_native' => 'Română',
        'lang_country_code' => 'ro',
        'trans_name'=> 'Adrian Stan',
        'trans_email' => 'adi.stan@gmail.com',
        'trans_website' => '',
        'trans_date' => '2004-08-01',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' stanga la dreapta, 'rtl' dreapta la stanga)

// prescurtări pentru Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// zilele săptămânii şi ale lunii
$lang_day_of_week = array('Du', 'Lu', 'Ma', 'Mi', 'Joi', 'Vi', 'Sâ');
$lang_month = array('Ian', 'Feb', 'Mar', 'Apr', 'Mai', 'Iun', 'Iul', 'Aug', 'Sep', 'Oct', 'Noi', 'Dec');

// Comune
$lang_yes = 'Da';
$lang_no  = 'Nu';
$lang_back = 'Înapoi';
$lang_continue = 'Continuă';
$lang_info = 'Informaţii';
$lang_error = 'Eroare';

// Data
$album_date_fmt =    '%d %B %Y';
$lastcom_date_fmt =  '%d/%m/%Y la %H:%M';
$lastup_date_fmt = '%d %B %Y';
$register_date_fmt = '%d %B %Y';
$lasthit_date_fmt = '%d %B %Y la %H:%M';
$comment_date_fmt =  '%d %B %Y la %H:%M';

// Cenzor cuvinte
$lang_bad_words = array('*fuck*', 'tâmpit', 'tampit', 'cretin', 'idiot', 'muie',  'pizda', 'pizdă', 'pula', 'pulă', 'sugi', 'coaie', 'cur', 'buci', 'cacat', 'căcat', 'caca', 'pewla', 'fut', 'futai', 'jepat');

$lang_meta_album_names = array(
        'random' => 'Imagini aleatoare',
        'lastup' => 'Ultimele adăugate',
        'lastalb'=> 'Ultimele albume modificate',
        'lastcom' => 'Ultimele comentarii',
        'topn' => 'Cele mai vizitate',
        'toprated' => 'Cele mai votate',
        'lasthits' => 'Ultimele vizitate',
        'search' => 'Rezultatele căutării',
        'favpics'=> 'Imaginile favorite'
);

$lang_errors = array(
        'access_denied' => 'Nu aveţi dreptul să accesaţi aceasta pagină.',
        'perm_denied' => 'Nu aveţi dreptul să efectuaţi această operaţie',
        'param_missing' => 'Scriptul a fost rulat fără parametrul/parametrii necesari.',
        'non_exist_ap' => 'Albumul/imaginea selectată nu există!',
        'quota_exceeded' => 'Cota dumneavoastră a fost depaşită<br /><br />Aveţi o cotă pe disc de [quota]K, pozele dumneavoastră ocupă acum [space]K, adăugând această imagine veţi depăşi această cotă.',
        'gd_file_type_err' => 'Când folosiţi biblioteca GD tipurile de fişiere ce le puteţi utiliza sunt doar JPEG şi PNG.',
        'invalid_image' => 'Imaginea înregistrată de dumneavoastră este coruptă sau nu poate fi prelucrată de biblioteca GD',
        'resize_failed' => 'Nu s-a putut crea pictograma sau imaginea redusă.',
        'no_img_to_display' => 'Nici o imagine încărcată',
        'non_exist_cat' => 'Categoria selectată nu există',
        'orphan_cat' => 'O categorie are părintele inexistent, rulaţi managerul de categorii pentru a corecta problema.',
        'directory_ro' => 'Directorul \'%s\' nu poate fi scris, imaginile nu pot fi şterse',
        'non_exist_comment' => 'Comentariul selectat nu există.',
        'pic_in_invalid_album' => 'Imaginea este într-un album inexistent (%s)!?',
        'banned' => 'Sunteţi exclus de pe această pagina web.',
        'not_with_udb' => 'Aceasta funcţie este blocată deoarece este integrată cu programul ce ruleaza forumul. Ce încercaţi să faceţi ori nu este suportat în această configuraţie, ori funcţia trebuie executată de programul ce ruleaza forumul.',
        'offline_title' => 'Offline',
        'offline_text' => 'Galeria este oprită, vă rugăm să reveniţi peste câteva minute.',
        'ecards_empty' => 'Nu sunt vederi electonice de vizualizat. Verificaţi dacă aveţi opţiunea pentru vederi electronice activată.',
        'action_failed' => 'Acţiune eşuată. Nu se poate procesa cererea dumneavoastră.',
        'no_zip' => 'Librăria pentru fişiere ZIP nu există.',
        'zip_type' => 'Nu aveţi dreptul să încărcaţi fişiere ZIP.',
);

$lang_bbcode_help = 'Următoarele coduri vă pot fi utile: <li>[b]<b>Bold</b>[/b]</li> <li>[i]<i>Italic</i>[/i]</li> <li>[url=http://site.ro/]Url Text[/url]</li> <li>[email]user@site.ro[/email]</li>';

// ------------------------------------------------------------------------- //
// theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
        'alb_list_title' => 'Albume',
        'alb_list_lnk' => 'Albume',
        'my_gal_title' => 'Galeria mea',
        'my_gal_lnk' => 'Galeria mea',
        'my_prof_lnk' => 'Profilul meu',
        'adm_mode_title' => 'Schimbaţi în modul admin',
        'adm_mode_lnk' => 'Mod admin',
        'usr_mode_title' => 'Schimbaţi în modul utilizator',
        'usr_mode_lnk' => 'Mod utilizator',
        'upload_pic_title' => 'Încărcaţi imagine',
        'upload_pic_lnk' => 'Încărcaţi imagine',
        'register_title' => 'Creaţi un cont',
        'register_lnk' => 'Înregistrare',
        'login_lnk' => 'Login',
        'logout_lnk' => 'Logout',
        'lastup_lnk' => 'Ultimele imagini',
        'lastcom_lnk' => 'Ultimele comentarii',
        'topn_lnk' => 'Top vizite',
        'toprated_lnk' => 'Top votări',
        'search_lnk' => 'Căutare',
        'fav_lnk' => 'Favoritele mele',
        'memberlist_title' => 'Lista membrilor', //cpg1.3.0
        'memberlist_lnk' => 'Membrii', //cpg1.3.0
        'faq_title' => 'Întrebări frecvente', //cpg1.3.0
        'faq_lnk' => 'FAQ', //cpg1.3.0
);

$lang_gallery_admin_menu = array(
        'upl_app_lnk' => 'Aprobare înregistrări',
        'config_lnk' => 'Configurare',
        'albums_lnk' => 'Albume',
        'categories_lnk' => 'Categorii',
        'users_lnk' => 'Utilizatori',
        'groups_lnk' => 'Grupuri',
        'comments_lnk' => 'Comentarii',
        'searchnew_lnk' => 'Adăugaţi imagini FTP',
        'util_lnk' => 'Redimensionaţi imagini',
        'ban_lnk' => 'Banaţi utilizatori',
        'db_ecard_lnk' => 'Arată vederi electronice', //cpg1.3.0
);

$lang_user_admin_menu = array(
        'albmgr_lnk' => 'Creaţi/ordonaţi albumele mele',
        'modifyalb_lnk' => 'Modificaţi albumele mele',
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
        'name' => 'Numele fişierului',
        'title' => 'Titlul',
        'sort_da' => 'Sortare dupa dată, ascendent',
        'sort_dd' => 'Sortare dupa dată, descendent',
        'sort_na' => 'Sortare dupa nume, ascendent',
        'sort_nd' => 'Sortare dupa nume, ascendent',
        'sort_ta' => 'Sortare dupa titlu, ascendent',
        'sort_td' => 'Sortare dupa titlu, ascendent',
        'download_zip' => 'Descarcă ca fişier ZIP',
        'pic_on_page' => '%d imagini pe %d pagini',
        'user_on_page' => '%d utilizatori pe %d pagini'
);

$lang_img_nav_bar = array(
        'thumb_title' => 'Înapoi la pagina cu pictograme',
        'pic_info_title' => 'Afişare/Ascundere informaţii despre imagine',
        'slideshow_title' => 'Diaporama',
        'ecard_title' => 'Trimiteţi această imagine ca vedere electronică',
        'ecard_disabled' => 'Vederile electronice sunt dezactivate',
        'ecard_disabled_msg' => 'Nu aveţi permisiunea să trimiteţi vederi electronice',
        'prev_title' => 'Vizualizaţi imaginea precedentă',
        'next_title' => 'Vizualizaţi imaginea următoare',
        'pic_pos' => 'Imaginea %s/%s',
);

$lang_rate_pic = array(
        'rate_this_pic' => 'Votează această imagine ',
        'no_votes' => '(Nici un vot încă)',
        'rating' => '(votarea curentă : %s / 5 cu %s voturi)',
        'rubbish' => 'Nereuşită',
        'poor' => 'Slabă',
        'fair' => 'Acceptabilă',
        'good' => 'Bună',
        'excellent' => 'Excelentă',
        'great' => 'Nemaipomenită',
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
        CRITICAL_ERROR => 'Eroare critică',
        'file' => 'Fişier: ',
        'line' => 'Linia: ',
);

$lang_display_thumbnails = array(
        'filename' => 'Nume fişier : ',
        'filesize' => 'Mărime fişier : ',
        'dimensions' => 'Dimensiuni : ',
        'date_added' => 'Data adăugării : ',
);

$lang_get_pic_data = array(
        'n_comments' => '%s comentarii',
        'n_views' => '%s vizitări',
        'n_votes' => '(%s voturi)'
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Debug Info', //cpg1.3.0
  'select_all' => 'Selectează tot', //cpg1.3.0
  'copy_and_paste_instructions' => 'Dacă doriţi să ne cereţi ajutorul, copiaţi şi trimiteţi această eroare în comentariul dumneavostră. Asiguraţi-vă că înlocuiţi orice parolă din mesajul dumneavostră cu *** înainte de a trimite.', //cpg1.3.0
  'phpinfo' => 'Arată phpinfo', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => 'Limba predefinită', //cpg1.3.0
  'choose_language' => 'Alegeţi limba', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'Tema predefinită', //cpg1.3.0
  'choose_theme' => 'Alegeţi tema', //cpg1.3.0
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
        'Smile' => 'Zâmbeşte',
        'Sad' => 'Supărat',
        'Surprised' => 'Surprins',
        'Shocked' => 'Şocat',
        'Confused' => 'Confuz',
        'Cool' => 'Cool',
        'Laughing' => 'Râzând',
        'Mad' => 'Nervos',
        'Razz' => 'Razz',
        'Embarassed' => 'Stânjenit',
        'Crying or Very sad' => 'Plângând sau foarte supărat',
        'Evil or Very Mad' => 'Rău sau foarte supărat',
        'Twisted Evil' => 'Foarte rău',
        'Rolling Eyes' => 'Rostogolind ochii',
        'Wink' => 'Clipeşte',
        'Idea' => 'Idee',
        'Arrow' => 'Săgeată',
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
        0 => 'Părăseşte modul administrator...',
        1 => 'Intră în modul administrator...',
);

// ------------------------------------------------------------------------- //
// albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
        'alb_need_name' => 'Albumele trebuie să aibă un nume!',
        'confirm_modifs' => 'Sunteţi sigur că vreţi să faceţi aceste modificări?',
        'no_change' => 'Nu aţi făcut nici o modificare!',
        'new_album' => 'Album nou',
        'confirm_delete1' => 'Sunteţi sigur că vreţi sa ştergeţi acest album?',
        'confirm_delete2' => '\nToate imaginile şi comentariile conţinute vor fi pierdute!',
        'select_first' => 'Selectaţi un album înainte',
        'alb_mrg' => 'Managerul de albume',
        'my_gallery' => '* Galeria mea *',
        'no_category' => '* Nici o categorie *',
        'delete' => 'Şterge',
        'new' => 'Nou',
        'apply_modifs' => 'Efectuaţi modificările',
        'select_category' => 'Selectaţi o categorie',
);

// ------------------------------------------------------------------------- //
// catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
        'miss_param' => 'Parametrii necesari pentru operaţia \'%s\' nu au fost stabiliţi!',
        'unknown_cat' => 'Categoria selectată nu există în baza de date',
        'usergal_cat_ro' => 'Categoria Galeria Utilizatorului nu poate fi ştearsă!',
        'manage_cat' => 'Administraţi categoriile',
        'confirm_delete' => 'Sunteţi sigur că doriţi să ştergeţi această categorie?',
        'category' => 'Categorie',
        'operations' => 'Operaţii',
        'move_into' => 'Mutaţi în',
        'update_create' => 'Modificaţi/Creaţi o categorie',
        'parent_cat' => 'Categoria părinte',
        'cat_title' => 'Titlul categoriei',
        'cat_thumb' => 'Categoria pictogramei', //cpg1.3.0
        'cat_desc' => 'Descrierea categoriei'
);

// ------------------------------------------------------------------------- //
// config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
        'title' => 'Configurare',
        'restore_cfg' => 'Reveniţi la setările predefinite',
        'save_cfg' => 'Salvaţi noua configuraţie',
        'notes' => 'Note',
        'info' => 'Informaţii',
        'upd_success' => 'Configuraţia a fost modificată',
        'restore_success' => 'Configuraţia predefinită a fost restabilită',
        'name_a' => 'Nume ascendent',
        'name_d' => 'Nume descendent',
        'title_a' => 'Titlu ascendent',
        'title_d' => 'Titlu descendent',
        'date_a' => 'Dată ascendentă',
        'date_d' => 'Dată descendentă',
        'th_any' => 'Aspect maxim',
        'th_ht' => 'Înălţime',
        'th_wd' => 'Lăţime',
        'label' => 'etichetă', //cpg1.3.0
        'item' => 'articol', //cpg1.3.0
        'debug_everyone' => 'Oricine', //cpg1.3.0
        'debug_admin' => 'Doar administratorul', //cpg1.3.0
);

if (defined('CONFIG_PHP')) $lang_config_data = array(
        'Setări generale',
        array('Numele galeriei', 'gallery_name', 0),
        array('Descrierea galeriei', 'gallery_description', 0),
        array('Adresa e-mail a administratorului', 'gallery_admin_email', 0),
        array('Adresa pentru conexiunea \'Mai multe imagini la\' în vederile electronice', 'ecards_more_pic_target', 0),
        array('Galerie oprită', 'offline', 1), //cpg1.3.0
        array('Log vederi electronice', 'log_ecards', 1), //cpg1.3.0
        array('Permite descărcarea favoritelor ca fişier ZIP', 'enable_zipdownload', 1), //cpg1.3.0

        'Limba, Teme &amp; Setări caractere',
        array('Limba', 'lang', 5),
        array('Tema', 'theme', 6),
        array('Arată lista limbilor', 'language_list', 1), //cpg1.3.0
        array('Arată steagurile limbilor', 'language_flags', 8), //cpg1.3.0
        array('Arată opţiunea &quot;resetează&quot; în secţiunea limbilor', 'language_reset', 1), //cpg1.3.0
        array('Arată lista temelor', 'theme_list', 1), //cpg1.3.0
        array('Arată opţiunea &quot;resetează&quot; în secţiunea temelor', 'theme_reset', 1), //cpg1.3.0
        array('Arată FAQ', 'display_faq', 1), //cpg1.3.0
        array('Arată ajutor bbcode', 'show_bbcode_help', 1), //cpg1.3.0
        array('Caracter', 'charset', 4), //cpg1.3.0

        'Lista cu albume',
        array('Lăţimea tabelului principal (pixeli sau %)', 'main_table_width', 0),
        array('Numărul de nivele de categorii care să fie afişate', 'subcat_level', 0),
        array('Numărul albumelor ce vor fi afişate', 'albums_per_page', 0),
        array('Numărul de coloane în lista de albume', 'album_list_cols', 0),
        array('Dimensiunea pictogramelor în pixeli', 'alb_list_thumb_size', 0),
        array('Conţinutul paginii principale', 'main_page_layout', 0),
        array('Afişează pictogramele albumelor din primul nivel în categorii','first_level',1),

        'Pictograme',
        array('Numărul de coloane pe pagina cu pictograme', 'thumbcols', 0),
        array('Numărul de rânduri pe pagina cu pictograme', 'thumbrows', 0),
        array('Numarul maxim de taburi ce vor fi afişate', 'max_tabs', 0),
        array('Afişează descrierea imaginii (pe lângă titlu) sub pictogramă', 'caption_in_thumbview', 1),
        array('Afişează numărul de vizualizari sub pictogramă', 'views_in_thumbview', 1), //cpg1.3.0
        array('Afişează numărul de comentarii sub pictogramă', 'display_comment_count', 1),
        array('Afişează numele utilizatorului sub pictogramă', 'display_uploader', 1), //cpg1.3.0
        array('Ordinea de sortare a imaginilor predefinită', 'default_sort_order', 3),
        array('Numărul minim de voturi pentru ca o imagine să apară în lista \'Cele mai votate\' ', 'min_votes_for_rating', 0),

        'Afişarea imaginii &amp; setările comentariilor',
        array('Lăţimea tabelului pentru afişarea imaginii (pixeli sau %)', 'picture_table_width', 0),
        array('Informaţiile despre imagine sunt vizibile în mod predefinit', 'display_pic_info', 1),
        array('Filtraţi cuvintele urâte în comentarii', 'filter_bad_words', 1),
        array('Activează zâmbetele în comentarii', 'enable_smilies', 1),
        array('Permite comentarii consecutive de la acelaşi utilizator', 'disable_comment_flood_protect', 1), //cpg1.3.0
        array('Lungimea maximă a descrierii imaginii', 'max_img_desc_length', 0),
        array('Numărul maxim de caractere într-un cuvânt', 'max_com_wlength', 0),
        array('Numărul maxim de linii într-un comentariu', 'max_com_lines', 0),
        array('Lungimea maximă a unui comentariu', 'max_com_size', 0),
        array('Afişează rama film', 'display_film_strip', 1),
        array('Numărul de obiecte în rama film', 'max_film_strip_items', 0),
        array('Notifică administratorul despre comentarii prin email', 'email_comment_notification', 1), //cpg1.3.0
        array('Intervalul diaporamei în milisecunde (1 secundă = 1000 milisecunde)', 'slideshow_interval', 0), //cpg1.3.0

        'Setări pentru imagini şi pictograme',
        array('Calitatea fişierelor JPEG', 'jpeg_qual', 0),
        array('Dimensiunea maximă a unei pictograme <a href="#notice2"  class="clickable_option">**</a>', 'thumb_width', 0), //cpg1.3.0
        array('Utilizaţi dimensiunea (lăţime sau înălţime sau aspectul maxim pentru pictogramă )<b>**</b>', 'thumb_use', 7),
        array('Crează imagini intermediare','make_intermediate',1),
        array('Lăţimea sau înălţimea maximă a unei imagini intermediare <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0), //cpg1.3.0
        array('Dimensiunea maximă a unei imagini (KB)', 'max_upl_size', 0),
        array('Lăţimeă sau înălţimea maximă a imaginilor încărcate (pixeli)', 'max_upl_width_height', 0),

        'Setări avansate pentru imagini si pictograme', //cpg1.3.0
        array('Afişează icoana Privat utilizatorilor neînregistraţi','show_private',1), //cpg1.3.0
        array('Caractere interzise în numele de fişiere', 'forbiden_fname_char',0), //cpg1.3.0
        array('Extensii acceptate pentru fişierele încărcate', 'allowed_file_extensions',0), //cpg1.3.0
        array('Tipuri de imagini permise', 'allowed_img_types',0), //cpg1.3.0
        array('Tipuri de video permise', 'allowed_mov_types',0), //cpg1.3.0
        array('Tipuri de audio permise', 'allowed_snd_types',0), //cpg1.3.0
        array('Tipuri de documente permise', 'allowed_doc_types',0), //cpg1.3.0
        array('Metoda de redimensionare a imaginilor','thumb_method',2), //cpg1.3.0
        array('Calea către utilitarul \'convert\' al lui ImageMagick)', 'impath', 0), //cpg1.3.0
        array('Tipuri de imagini permise (valid doar pentru ImageMagick)', 'allowed_img_types',0), //cpg1.3.0
        array('Opţiuni în linie de comandă pentru ImageMagick', 'im_options', 0), //cpg1.3.0
        array('Citeşte informaţiile EXIF din fişierele JPEG', 'read_exif_data', 1), //cpg1.3.0
        array('Citeşte informaţiile IPTC din fişierele JPEG', 'read_iptc_data', 1), //cpg1.3.0
        array('Directorul cu albume <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0), //cpg1.3.0
        array('Directorul pentru imaginile utilizatorilor <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0), //cpg1.3.0
        array('Prefixul pentru imaginile intermediare <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0), //cpg1.3.0
        array('Prefixul pentru pictograme <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0), //cpg1.3.0
        array('Modul predefinit al directoarelor', 'default_dir_mode', 0), //cpg1.3.0
        array('Modul predefinit al imaginilor', 'default_file_mode', 0), //cpg1.3.0

        'Setări pentru utilizatori',
        array('Permiteţi înregistrarea de noi utilizatori', 'allow_user_registration', 1),
        array('Înregistrarea utilizatorilor necesită înregistrarea prin e-mail', 'reg_requires_valid_email', 1),
        array('Notifică administratorul de înregistrarea utilizatorilor prin email', 'reg_notify_admin_email', 1), //cpg1.3.0
        array('Permite ca doi utilizatori să poată avea aceeaşi adresa e-mail', 'allow_duplicate_emails_addr', 1),
        array('Utilizatorii pot avea albume private (Notă: dacă treceţi de la \'da\' la \'nu\' toate albumele personale curente vor deveni publice)', 'allow_private_albums', 1), //cpg1.3.0
        array('Notifică administratorul de aşteptarea aprobării încarcării imaginilor', 'upl_notify_admin_email', 1), //cpg1.3.0
        array('Permite utilizatorilor înregistraţi să vadă lista membrilor', 'allow_memberlist', 1), //cpg1.3.0

        'Descrierea câmpurilor adiţionale (lăsaţi necompletat dacă nu le utilizaţi)',
        array('Numele câmpului 1', 'user_field1_name', 0),
        array('Numele câmpului 2', 'user_field2_name', 0),
        array('Numele câmpului 3', 'user_field3_name', 0),
        array('Numele câmpului 4', 'user_field4_name', 0),

        'Setări cookie-uri',
        array('Numele cookie-ului utilizat de script', 'cookie_name', 0),
        array('Calea cookie-ului utilizat de script', 'cookie_path', 0),

        'Setări',
        array('Activează modul debug', 'debug_mode', 9), //cpg1.3.0
        array('Arată note în modul debug', 'debug_notice', 1), //cpg1.3.0
         '<br /><div align="left"><a name="notice1"></a>(*) Câmpurile marcate cu * nu trebuie modificate dacă aveţi deja imagini în galeria dvs.<br />
        <a name="notice2"></a>(**) Când schimbaţi setarea aceasta, doar fişierele introduse după acest moment vor fi afectate, şi de aceea nu este recomandat să efectuaţi aceste modificări dacă sunt imagini în galerie. Puteţi efectua modificările şi asupra fişierelor existente cu &quot;<a href="util.php">utilitar administrator</a>&quot; utilitar din menu-ul administratorului.</div><br />', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Trimite vederea', //cpg1.3.0
  'ecard_sender' => 'Expeditor', //cpg1.3.0
  'ecard_recipient' => 'Destinatar', //cpg1.3.0
  'ecard_date' => 'Data', //cpg1.3.0
  'ecard_display' => 'Arată vederea', //cpg1.3.0
  'ecard_name' => 'Nume', //cpg1.3.0
  'ecard_email' => 'email', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'crescător', //cpg1.3.0
  'ecard_descending' => 'descrescător', //cpg1.3.0
  'ecard_sorted' => 'Sortare', //cpg1.3.0
  'ecard_by_date' => 'după dată', //cpg1.3.0
  'ecard_by_sender_name' => 'după numele expeditorului', //cpg1.3.0
  'ecard_by_sender_email' => 'după email-ul expeditorului', //cpg1.3.0
  'ecard_by_sender_ip' => 'după IP-ul expeditorului', //cpg1.3.0
  'ecard_by_recipient_name' => 'după numele destinatarului', //cpg1.3.0
  'ecard_by_recipient_email' => 'după email-ul destinatarului', //cpg1.3.0
  'ecard_number' => 'arată înregistrări %s to %s of %s', //cpg1.3.0
  'ecard_goto_page' => 'mergi la pagina', //cpg1.3.0
  'ecard_records_per_page' => 'Înregistrări pe pagină', //cpg1.3.0
  'check_all' => 'Selectează tot', //cpg1.3.0
  'uncheck_all' => 'Deselectează tot', //cpg1.3.0
  'ecards_delete_selected' => 'Şterge vederile selectate', //cpg1.3.0
  'ecards_delete_confirm' => 'Sunteţi sigur că vreţi să ştergeţi înregistrările? Marcaţi în casuţă!', //cpg1.3.0
  'ecards_delete_sure' => 'Sunt sigur', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
        'empty_name_or_com' => 'Trebuie să introduceţi numele dvs. şi un comentariu',
        'com_added' => 'Comentariul dvs. a fost adăugat',
        'alb_need_title' => 'Trebuie să furnizaţi un titlu pentru album!',
        'no_udp_needed' => 'Nici o modificare necesară.',
        'alb_updated' => 'Albumul a fost modificat',
        'unknown_album' => 'Albumul selectat nu există sau nu aveţi permisiunea să încărcaţi în acest album',
        'no_pic_uploaded' => 'Nici o imagine nu a fost încărcată!<br /><br />Dacă aţi selectat o imagine, verificaţi dacă serverul permite încărcări.',
        'err_mkdir' => 'Eroare în crearea directorului %s!',
        'dest_dir_ro' => 'Directorul destinaţie %s nu poate fi scris de către script!',
        'err_move' => 'Imposibil de deplasat %s în %s!',
        'err_fsize_too_large' => 'Dimensiunea imaginii este prea mare (maximul permis este %s x %s)!',
        'err_imgsize_too_large' => 'Mărimea fişierului încărcat este prea mare (maximul permis este %s KB)!',
        'err_invalid_img' => 'Fişerul încărcat nu este o imagine validă!',
        'allowed_img_types' => 'Puteţi încărca doar %s imagini.',
        'err_insert_pic' => 'Imaginea \'%s\' nu poate fi inserată în album ',
        'upload_success' => 'Imaginea dvs. a fost încărcată cu succes<br /><br />Va fi vizibilă după aprobarea unui administrator.',
        'info' => 'Informaţii',
        'com_added' => 'Comentariu adăugat',
        'alb_updated' => 'Album modificat',
        'err_comment_empty' => 'Comentariul dvs. este gol!',
        'err_invalid_fext' => 'Doar fişierele cu următoarele extensii sunt permise : <br /><br />%s.',
        'no_flood' => 'Ne pare rău dar sunteţi deja autorul ultimului comentariu postat pentru această imagine<br /><br />Editaţi comentariul postat dacă doriţi să-l modificaţi',
        'redirect_msg' => 'Sunteţi redirectat.<br /><br /><br />Apăsaţi pe \'Continuare\' dacă pagina nu se încarcă automat',
        'upl_success' => 'Imaginea dvs. a fost adăugată cu succes',
        'email_comment_subject' => 'Comentariu din galeria foto', //cpg1.3.0
        'email_comment_body' => 'Cineva a postat un comentariu în galeria foto. Îl puteţi vedea la', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
        'caption' => 'Descriere',
        'fs_pic' => 'imaginea la dimensiuni maxime',
        'del_success' => 'ştearsă cu succes',
        'ns_pic' => 'imaginea de dimensiuni normale',
        'err_del' => 'nu poate fi ştearsă',
        'thumb_pic' => 'pictograma',
        'comment' => 'comentariul',
        'im_in_alb' => 'imaginea în album',
        'alb_del_success' => 'Albumul \'%s\' a fost şters',
        'alb_mgr' => 'Managerul de albume',
        'err_invalid_data' => 'Date nevalide primite în \'%s\'',
        'create_alb' => 'Creare album \'%s\'',
        'update_alb' => 'Modificare album \'%s\' cu titlul \'%s\' şi indexul \'%s\'',
        'del_pic' => 'Şterge imaginea',
        'del_alb' => 'Şterge albumul',
        'del_user' => 'Şterge utilizatorul',
        'err_unknown_user' => 'Utilizatorul selectat nu există!',
        'comment_deleted' => 'Comentariul a fost şters cu succes',
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
        'confirm_del' => 'Sunteţi sigur că doriţi să ştergeţi această imagine? \\nComentariile vor fi de asemenea şterse.', //js-alert
        'del_pic' => 'Şterge această imagine',
        'size' => '%s x %s pixeli',
        'views' => '%s ori',
        'slideshow' => 'Diaporama',
        'stop_slideshow' => 'Opreşte diaporama',
        'view_fs' => 'Apăsaţi pentru a vedea imaginea la dimensiuni originale',
          'edit_pic' => 'Editează descrierea', //cpg1.3.0
          'crop_pic' => 'Taie şi roteşte', //cpg1.3.0
);

$lang_picinfo = array(
        'title' =>'Informaţii despre imagine',
        'Filename' => 'Nume fişier',
        'Album name' => 'Nume album',
        'Rating' => 'Votare (%s voturi)',
        'Keywords' => 'Cuvinte cheie',
        'File Size' => 'Dimensiune fişier',
        'Dimensions' => 'Dimensiune imagine',
        'Displayed' => 'Afişată',
        'Camera' => 'Camera',
        'Date taken' => 'Data fotografierii',
         'ISO'=>'ISO',
        'Aperture' => 'Apertura',
        'Exposure time' => 'Timp de expunere',
        'Focal length' => 'Focala',
        'Comment' => 'Comentariul',
        'addFav'=>'Adaugă în Favorite',
        'addFavPhrase'=>'Favorite',
        'remFav'=>'Şterge din Favorite',
        'iptcTitle'=>'IPTC Titlu', //cpg1.3.0
        'iptcCopyright'=>'IPTC Copyright', //cpg1.3.0
        'iptcKeywords'=>'IPTC Cuvinte cheie', //cpg1.3.0
        'iptcCategory'=>'IPTC Categorie', //cpg1.3.0
        'iptcSubCategories'=>'IPTC Subcategorie', //cpg1.3.0
);

$lang_display_comments = array(
        'OK' => 'OK',
        'edit_title' => 'Editează acest comentariu',
        'confirm_delete' => 'Sunteţi sigur că doriţi să ştergeţi acest comentariu?',
        'add_your_comment' => 'Adăugaţi comentariul dvs.',
        'name'=>'Nume',
        'comment'=>'Comentariu',
        'your_name' => 'Numele dvs.',
);

$lang_fullsize_popup = array(
        'click_to_close' => 'Apăsaţi pe imagine pentru a închide fereastra',
);

}

// ------------------------------------------------------------------------- //
// ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
        'title' => 'Trimite o vedere electronică',
        'invalid_email' => '<b>Atenţie</b> : adresa email este incorectă!',
        'ecard_title' => 'O vedere electronică de la %s',
        'view_ecard' => 'Dacă vederea nu este afişată corect, apăsaţi pe aceasta legătură',
        'view_more_pics' => 'Apăsaţi aici pentru a vedea mai multe imagini!',
        'send_success' => 'Vederea dvs. a fost trimisă',
        'send_failed' => 'Ne pare rău dar serverul nu poate trimite vederea dvs...',
        'from' => 'De la',
        'your_name' => 'Numele dvs.',
        'your_email' => 'Adresa dvs. de email',
        'to' => 'Către',
        'rcpt_name' => 'Numele expeditorului',
        'rcpt_email' => 'Adresa de email a destinatarului',
        'greetings' => 'Salutări',
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
        'approve' => 'Aprobă imaginea',
        'postpone_app' => 'Amână aprobarea',
        'del_pic' => 'Şterge imaginea',
        'read_exif' => 'Citeşte EXIF din nou', //cpg1.3.0
        'reset_view_count' => 'Resetează contorul de afişări',
        'reset_votes' => 'Resetează voturile',
        'del_comm' => 'Şterge comentariile',
        'upl_approval' => 'Aprobare încărcări',
        'edit_pics' => 'Editează imagini',
        'see_next' => 'Arată imaginile următoare',
        'see_prev' => 'Arată imaginile precedente',
        'n_pic' => '%s imagini',
        'n_of_pic_to_disp' => 'Numărul de imagini care să fie afişate',
        'apply' => 'Execută modificările',
        'crop_title' => 'Editor imagini', //cpg1.3.0
        'preview' => 'Previzualizare', //cpg1.3.0
        'save' => 'Salvare imagine', //cpg1.3.0
        'save_thumb' =>'Salvează ca pictogramă', //cpg1.3.0
        'sel_on_img' =>'Selecţia este cât întreaga imagine!', //js-alert //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Întrebări frecvente', //cpg1.3.0
  'toc' => 'Cuprins', //cpg1.3.0
  'question' => 'Întrebare: ', //cpg1.3.0
  'answer' => 'Răspuns: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'Întrebări frecvente', //cpg1.3.0
  array('De ce trebuie să mă înregistrez?', 'Înregistrarea poate sau nu să fie cerută de către administrator. Înregistrarea permite accesul la opţiuni suplimentare, cum ar fi încărcarea de imagini, existenţa favoritelor, posibilitatea comentariilor sau a notării imaginilor.', 'allow_user_registration', '0'), //cpg1.3.0
  array('Cum mă pot înregistra?', 'Apăsaţi pe &quot;Înregistrare&quot; şi completaţi toate câmpurile obligatorii (şi cele opţionale dacă doriţi).<br />Dacă administratorul are activarea prin email selectată, după ce aţi introdus datele trebuie să primiţi un email la adresa specificată de dv., în care găsiţi detalii despre modul de activare al contului. Contul trebuie activat înainte de a vă loga.', 'allow_user_registration', '1'), //cpg1.3.0
  array('Cum mă loghez?', 'Apăsaţi &quot;Login&quot;, introduceţi numele şi parola şi selectaţi &quot;Memorează-mă&quot; dacă doriţi să intraţi pe pagină în viitor deja logat.<br /><b>IMPORTANT:Cooki-urile trebuie activate şi nu trebuie să le ştergeţi dacă doriţi activă opţiunea &quot;Memorează-mă&quot;.</b>', 'offline', 0), //cpg1.3.0
  array('De ce nu mă pot loga?', 'Aţi apăsat pe link-ul din email-ul de înregistrare?. Acest link vă activează contul. Pentru alte probleme legate de logare, vă rugăm să contactaţi administratorul.', 'offline', 0), //cpg1.3.0
  array('Ce se întâmplă dacă am uitat parola?', 'Dacă pagina are activată &quot;Reamintirea parolei&quot; apăsaţi pe link. Dacă acest link nu este disponibil, va trebui să contactaţi administratorul.', 'offline', 0), //cpg1.3.0
  //array('Ce se întâmplă dacă îmi schimb email-ul?', 'Logaţi-vă şi schimbaţi adresa de email în &quot;Profil&quot;', 'offline', 0), //cpg1.3.0
  array('Cum salvez imaginile din &quot;Favorite&quot;?', 'Apăsaţi pe imagine şi apoi pe &quot;imagine info&quot; link (<img src="images/info.gif" width="16" height="16" border="0" alt="Informaţii imagine" />); căutaţi în informaţii şi apăsaţi &quot;Pune în favorite&quot;.<br />Administratorul trebuie să lase &quot;informaţii imagine&quot; active în mod predefinit.<br />IMPORTANT:Cooki-urile trebuie activate şi nu trebuie să le ştergeţi.', 'offline', 0), //cpg1.3.0
  array('Cum notez o imagine?', 'Apăsaţi pe pictogramă şi mergeţi în jos pentru a o putea nota.', 'offline', 0), //cpg1.3.0
  array('Cum comentez o imagine?', 'Apăsaţi pe pictogramă şi mergeţi în jos pentru a o putea comenta.', 'offline', 0), //cpg1.3.0
array('Cum încarc o imagine?', 'Apăsaţi &quot;Încarcă imagine&quot; şi selectaţi albumul, apăsaţi &quot;Browse&quot; şi găsiţi imaginea care doriţi să o încărcaţi, apăsaţi &quot;open&quot; (scrieţi un tilu şi o descriere dacă doriţi) şi apăsaţi &quot;Submit&quot;', 'allow_private_albums', 0), //cpg1.3.0
  array('Unde pot încărca o imagine?', 'Puteţi încărca o imagine în albumul/ele din &quot;Galeria mea&quot;. Administratorul poate permite sau nu să încărcaţi imagini şi în galeria principală.', 'allow_private_albums', 0), //cpg1.3.0
  array('Ce tip şi ce mărime pot să aibă imaginile pe care pot să le încarc?', 'Tipul şi mărimea (jpg, png, etc.) sunt stabilite de administrator.', 'offline', 0), //cpg1.3.0
  array('Ce este &quot;Galeria mea&quot;?', '&quot;Galeria mea&quot; este o galerie personală pe care puteţi să o folosiţi şi administraţi.', 'allow_private_albums', 0), //cpg1.3.0
  array('Cum pot crea, redenumi sau şterge albume din &quot;galeria mea&quot;?', 'Trebuie să fiţi în modul &quot;Mod admin&quot;<br />Mergeţi la &quot;Creaţi/ordonaţi albumele mele&quot; şi apăsaţi &quot;Nou&quot;. Schimbaţi &quot;Album nou&quot; cu numele dorit.<br />Puteţi de asemenea să redenumiţi orice album din galeria dvs.<br />Apăsaţi &quot;Efectuaţi modificările&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Cum restricţionez şi cum modific ce utilizatori pot vedea Galeria mea?', 'Trebuie să fiţi în modul &quot;Mod admin&quot;<br />Mergeeţi la &quot;Modifică albumele mele&quot;. Mergeţi la &quot;Modifică album&quot; şi selectaţi albumul dorit.<br />Aici puteţi schimba numele, descrierea, pictograma, restricţiona vederea imaginilor şi a notării/comentării acestora.<br />Apăsaţi &quot;Modifică album&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Cum pot vedea galeriile altor utilizatori?', 'Mergeţi la &quot;Lista albumelor&quot; şi selectaţi &quot;galerii utilizatori&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Ce sunt cooki-urile?', 'Cooki-urile sunt date în mod text care sunt trimise de pagina web şi stocate pe calculator.<br />Cooki+urile în mod normal permit utilizatorului să iasă şi să intre în pagina fără a mai trebui să se logheze.', 'offline', 0), //cpg1.3.0
  array('De unde pot descărca acest program pentru pagina mea?', 'Coppermine este o galerie multimedia, apărută sub licenţa GNU GPL. Are o multitudine de opţiuni şi merge pe multe tipuri de sisteme. Visitaţi <a href="http://coppermine.sf.net/">Coppermine Home Page</a> pentru a afla mai multe şi pentru a descărca.', 'offline', 0), //cpg1.3.0

  'Navigare prin site', //cpg1.3.0
  array('Ce este &quot;Lista albumelor&quot;?', 'Aceasta vă va arăta categoria unde vă aflaţi, cu un link către alte album. Dacă nu sunteţi într-o categorie, vă va arăta întreaga galerie şi link+uri către fiecare categorie. Pictogramele pot fi un link către categorie.', 'offline', 0), //cpg1.3.0
  array('Ce este &quot;galeria mea&quot;?', 'Aceasta permite utilizatorului să îşi creeze propria galerie, să pună/şteargă/modifice albumele.', 'allow_private_albums', 0), //cpg1.3.0
  array('Care este diferenţa între &quot;Modul admin&quot; şi &quot;Modul utilizator&quot;?', 'Modul admin permite utilizatorului să modifice galeria personală.', 'allow_private_albums', 0), //cpg1.3.0
  array('Ce este &quot;Încarcă imagine&quot;?', 'Permite utilizatorului să încarce o imagine (dimensiunea şi tipul sunt setate de administrator) în galerie.', 'allow_private_albums', 0), //cpg1.3.0
  array('Ce sunt &quot;Ultimele încărcări&quot;?', 'Vă arată ultimele imagini încărcate în pagină.', 'offline', 0), //cpg1.3.0
  array('Ce sunt &quot;Ultimele comentarii&quot;?', 'Vă arată ultimele comentarii şi pentru ce imagine din pagină.', 'offline', 0), //cpg1.3.0
  array('Ce sunt &quot;Ultimele vizitate&quot;?', 'Vă arată ultimele imagini vizionate, indiferent dacă utilizatorul este logat sau nu.', 'offline', 0), //cpg1.3.0
  array('Ce sunt &quot;Cele mai votate&quot;?', 'Vă arată cele mai votate imagini (ex: cinci utilizatori votează <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: imaginea trebuie să aibă un vot de <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;Cinci utilizatori voteazăd de la 1 la 5 (1,2,3,4,5) şi rezultatul <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />votul poate fi de la <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (nemaipomenit) to <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (prost).', 'offline', 0), //cpg1.3.0
  array('Ce sunt &quot;Favorite&quot;?', 'permite stocarea unei imagini favorite într-un cookie ce este tirmis către calculatorul dvs.', 'offline', 0), //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Reamintirea parolei', //cpg1.3.0
  'err_already_logged_in' => 'Sunteţi deja logat!', //cpg1.3.0
  'enter_username_email' => 'Introduceţi numele sau adresa de email', //cpg1.3.0
  'submit' => 'go', //cpg1.3.0
  'failed_sending_email' => 'Email-ul cu parola nu poate fi trimis!', //cpg1.3.0
  'email_sent' => 'Un email cu numele şi parola a fost trimis la %s', //cpg1.3.0
  'err_unk_user' => 'Utilizator inexistent!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - Reamintirea parolei', //cpg1.3.0
  'passwd_reminder_body' => 'Aţi cerut să vă fie reamintită parola:
Utilizator: %s
Parolă: %s
Apasaţi %s pentru a intra.', //cpg1.3.0
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
        'can_upload' => 'Poate încărca imagini',
        'can_have_gallery' => 'Poate avea o galerie personală',
        'apply' => 'Execută modificările',
        'create_new_group' => 'Crează un grup nou',
        'del_groups' => 'Şterge grupul/grupurile selectat(e)',
        'confirm_del' => 'Atenţie, când ştergeţi un grup, utilizatorii aparţinând acestui grup vor fi transferaţi în grupul \'Înregistraţi\' !\n\nSunteţi sigur că doriţi să continuaţi ?',
        'title' => 'Administrează grupurile de utilizatori',
        'approval_1' => 'Aprobare Înreg. Pub. (1)',
        'approval_2' => 'Aprobare Înreg. Priv. (2)',
        'upload_form_config' => 'Încarcă din configuraţie', //cpg1.3.0
        'upload_form_config_values' => array( 'Doar o imagine de încărcat', 'Mai multe imagini de încărcat', 'Doar URL de încărcat', 'Doar ZIP de încărcat', 'Imagine-URL', 'Imagine-ZIP', 'URL-ZIP', 'Imagine-URL-ZIP'), //cpg1.3.0
        'custom_user_upload'=>'Utilizatorul îşi poate seta numărul de căsuţe?', //cpg1.3.0
        'num_file_upload'=>'Maxim/exact număr de imagini de încărcat', //cpg1.3.0
        'num_URI_upload'=>'Maxim/exact număr de URL de încărcat', //cpg1.3.0
        'note1' => '<b>(1)</b> Încărcarea într-un album public necesită aprobarea administratorului',
        'note2' => '<b>(2)</b> Încărcarea într-un album aparţinând utilizatorului necesită aprobarea administratorului',
        'notes' => 'Note'
);

// ------------------------------------------------------------------------- //
// index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
        'welcome' => 'Bine aţi venit!'
);

$lang_album_admin_menu = array(
        'confirm_delete' => 'Sunteţi sigur că doriţi să ştergeţi acest album? \\nToate imaginile şi comentariile conţinute vor fi de asemenea şterse.',
        'delete' => 'Şterge',
        'modify' => 'Proprietăţi',
        'edit_pics' => 'Editare imagini',
);

$lang_list_categories = array(
        'home' => 'Pagina principală',
        'stat1' => '<b>[pictures]</b> imagini în <b>[albums]</b> albume şi <b>[cat]</b> categorii cu <b>[comments]</b> comentarii afişate de <b>[views]</b> ori',
        'stat2' => '<b>[pictures]</b> imagini în <b>[albums]</b> albume afişate de <b>[views]</b> ori',
        'xx_s_gallery' => 'Galeria %s\'s',
        'stat3' => '<b>[pictures]</b> imagini în <b>[albums]</b> albume cu <b>[comments]</b> comentarii afişate de <b>[views]</b> ori'
);

$lang_list_users = array(
        'user_list' => 'Lista utilizatorilor',
        'no_user_gal' => 'Nu există galerii utilizator',
        'n_albums' => '%s album(e)',
        'n_pics' => '%s imagini'
);

$lang_list_albums = array(
        'n_pictures' => '%s imagini',
        'last_added' => ', ultima adăugată la %s'
);

}

// ------------------------------------------------------------------------- //
// login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
        'login' => 'Login',
        'enter_login_pswd' => 'Introduceţi contul şi parola pentru a vă loga',
        'username' => 'Utilizator',
        'password' => 'Parola',
        'remember_me' => 'Memorează-mă',
        'welcome' => 'Bine aţi venit %s ...',
        'err_login' => '*** Nu aţi putut fi logat. Încercaţi din nou ***',
        'err_already_logged_in' => 'Sunteţi deja logat !',
        'forgot_password_link' => 'Reamintirea parolei', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
        'logout' => 'Logout',
        'bye' => 'La revedere %s ...',
        'err_not_loged_in' => 'Nu sunteţi logat!',
);

// ------------------------------------------------------------------------- //
// phpinfo.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP info', //cpg1.3.0
  'explanation' => 'Acesta este rezultatul generat de PHP <a href="http://www.php.net/phpinfo">phpinfo()</a>', //cpg1.3.0
  'no_link' => 'Lăsând pe alţii să vadă php info nu este recomandat, de aceea această pagină este vizibilă doar pentru administrator. Nu puteţi posta o legatură directă către această pagina, accesul nu va fi permis.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
        'upd_alb_n' => 'Modifică album %s',
        'general_settings' => 'Setări generale',
        'alb_title' => 'Titlul albumului',
        'alb_cat' => 'Categoria albumului',
        'alb_desc' => 'Descrierea albumului',
        'alb_thumb' => 'Pictograma albumului',
        'alb_perm' => 'Permisiile acestui album',
        'can_view' => 'Albumul poate fi văzut de',
        'can_upload' => 'Vizitatorii pot încărca imagini',
        'can_post_comments' => 'Vizitatorii pot posta comentarii',
        'can_rate' => 'Vizitatorii pot nota imaginile',
        'user_gal' => 'Galeria utilizatorului',
        'no_cat' => '* Nici o categorie *',
        'alb_empty' => 'Albumul este gol',
        'last_uploaded' => 'Ultimele încărcate',
        'public_alb' => 'Toată lumea (album public)',
        'me_only' => 'Doar eu',
        'owner_only' => 'Proprietarul albumul doar (%s)',
        'groupp_only' => 'Membrii grupului \'%s\'',
        'err_no_alb_to_modify' => 'Nici un album pe care să îl puteţi modifica în baza de date.',
        'update' => 'Modifcă album',
        'notice1' => '(*) depinde de setările %sgroups%s', //cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- //
// ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
        'already_rated' => 'Ne pare rău, dar aţi votat deja această imagine',
        'rate_ok' => 'Votul dvs. ',
        'forbidden' => 'Nu vă puteţi vota propria imagine.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Deşi administratorii paginii {SITE_NAME} vor încerca să şteargă sau să editeze orice material nepermis sau obscen cât de repede cu putinţă, este imposibil să fie verificat fiecare mesaj sau comentariu. De aceea sunteţi de acord ca toate mesajele postate pe această pagină exprimă opiniile autorului şi nu ale administratorilor (exceptând mesajele transmise de ei) şi deci nu pot fi traşi la răspundere.<br />
<br />
Sunteţi de acord să nu postaţi nici o imagine sau un mesaj obscen, vulgar, ameninţător, sau orice alt mesaj ce încalcă legile. Sunteţi de acord ca administratorul şi moderatorii paginii {SITE_NAME} au dreptul să modifice sau să şteargă orice conţinut oricând consideră ei necesar. Ca utilizator sunteţi de acord ca orice informaţie introdusă să fie stocată într-o bază de date. Deşi această informaţie NU va fi oferită unei terţe părţi administratorii nu pot fi făcuţi responsabili în cazul unei accesări forţate, ilegale a bazei de date ce ar duce la compromiterea acesteia. <br />
<br />
Acestă pagină foloseşte cookie-uri pentru a stoca informaţie pe computerul dvs. Acestea servesc doar la buna funcţionare a paginii web. Adresa dvs. e-mail este folosită doar pentru a verifica parola pentru procesul de înregistrare şi pentru a primi informaţii directe din pagină. <br />
<br />
Drepturile de autor asupra imaginilor din galerie aparţin exclusiv autorilor. Orice modificare/copiere se va face doar având consimţământul acestora!<br /><br />
Apăsând pe butonul 'Sunt de acord' de mai jos sunteţi de acord să respectaţi şi acceptaţi condiţiile de mai sus.
EOT;

$lang_register_php = array(
        'page_title' => 'Înregistrare utilizator',
        'term_cond' => 'Termeni si condiţii',
        'i_agree' => 'Sunt de acord',
        'submit' => 'Trimite înregistrarea',
        'err_user_exists' => 'Numele utilizator ales există deja, vă rugăm să alegeţi alt nume',
        'err_password_mismatch' => 'Cele două parole nu sunt identice, vă rugăm să le reintroduceţi',
        'err_uname_short' => 'Numele utilizator trebuie să aibă minim 3 caractere',
        'err_password_short' => 'Parola trebuie să aibă minim 5 caractere',
        'err_uname_pass_diff' => 'Numele utilizator şi parola trebuie să fie diferite',
        'err_invalid_email' => 'Adresa e-mail este incorectă',
        'err_duplicate_email' => 'Alt utilizator este înregistrat deja cu aceasta adresă e-mail',
        'enter_info' => 'Introduceţi datele pentru înregistrare',
        'required_info' => 'Informaţii necesare',
        'optional_info' => 'Informaţii opţionale',
        'username' => 'Utilizator',
        'password' => 'Parola',
        'password_again' => 'Confirmaţi parola',
        'email' => 'Email',
        'location' => 'Locaţie',
        'interests' => 'Interese',
        'website' => 'Pagina web',
        'occupation' => 'Ocupaţie',
        'error' => 'Eroare',
        'confirm_email_subject' => '%s - Confirmarea înregistrării',
        'information' => 'Informaţii',
        'failed_sending_email' => 'Mesajul de confirmare a înregistrării nu poate fi trimis!',
        'thank_you' => 'Vă mulţumim pentru că v-aţi înregistrat.<br /><br />Un email conţinând informaţii despre cum să activaţi contul dvs. a fost trimis la adresa email specificată.',
        'acct_created' => 'Contul dvs. a fost creat şi vă puteti loga introducând user-ul şi parola dvs.',
        'acct_active' => 'Contul dvs. este acum activ şi va puteţi loga introducând user-ul şi parola dvs.',
        'acct_already_act' => 'Contul dvs. este deja activ!',
        'acct_act_failed' => 'Acest cont nu poate fi activat!',
        'err_unk_user' => 'Utilizatorul selectat nu există!',
        'x_s_profile' => 'Profilul lui %s',
        'group' => 'Grup',
        'reg_date' => 'Înregistrat la',
        'disk_usage' => 'Utilizare disc',
        'change_pass' => 'Schimbare parolă',
        'current_pass' => 'Parola curentă',
        'new_pass' => 'Parolă nouă',
        'new_pass_again' => 'Reintroduceţi parola nouă',
        'err_curr_pass' => 'Parola curentă este incorectă',
        'apply_modif' => 'Execută modificarile',
        'change_pass' => 'Schimbă parola mea',
        'update_success' => 'Profilul dumneavoastra a fost modificat',
        'pass_chg_success' => 'Parola dumneavoastră a fost schimbată',
        'pass_chg_error' => 'Parola dumneavoastră nu a fost schimbată',
        'notify_admin_email_subject' => '%s - Notificare înregistrare', //cpg1.3.0
        'notify_admin_email_body' => 'Un nou utilizator "%s" în galerie', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
Vă mulţumim că v-aţi înregistrat la {SITE_NAME}

Contul dvs. este : "{USER_NAME}"
Parola dvs. este : "{PASSWORD}"

Pentru a activa contul dvs., vă rugăm să apăsaţi pe legătura de mai jos
sau să o copiaţi si duceţi în navigatorul dvs. de internet.

{ACT_LINK}

Cu stimă,

{SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
        'title' => 'Revizuire comentarii',
        'no_comment' => 'Nu există comentarii care să fie revizuite',
        'n_comm_del' => '%s comentarii şterse',
        'n_comm_disp' => 'Numărul de comentarii de afişat',
        'see_prev' => 'Afişează precedentul',
        'see_next' => 'Afişează următorul',
        'del_comm' => 'Şterge comentariile selectate',
);

// ------------------------------------------------------------------------- //
// search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
        0 => 'Caută în colecţia de imagini',
);

// ------------------------------------------------------------------------- //
// searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
        'page_title' => 'Caută imagini noi',
        'select_dir' => 'Selectează directorul',
        'select_dir_msg' => 'Această funcţie vă permite să adăugaţi mai multe imagini o dată, imagini încărcate de dvs. pe server prin FTP.<br /><br />Selectaţi directorul unde aţi încărcat imaginile',
        'no_pic_to_add' => 'Nu există nici o imagine de adăugat',
        'need_one_album' => 'Aveţi nevoie de cel puţin un album pentru a folosi această funcţie',
        'warning' => 'Atenţie',
        'change_perm' => 'scriptul nu poate scrie în acest director, trebuie să schimbaţi modul la 755 sau 777 înainte de a încerca să adăugaţi imaginile!',
        'target_album' => '<b>Pune imaginile din &quot;</b>%s<b>&quot; în </b>%s',
        'folder' => 'Director',
        'image' => 'Imagine',
        'album' => 'Album',
        'result' => 'Rezultat',
        'dir_ro' => 'Nu poate fi scris. ',
        'dir_cant_read' => 'Nu poate fi citit. ',
        'insert' => 'Adaugă imagini noi în galerie',
        'list_new_pic' => 'Lista noilor imagini',
        'insert_selected' => 'Inserează imaginile selectate',
        'no_pic_found' => 'Nu a fost gasită nici o imagine nouă',
        'be_patient' => 'Vă rugam aşteptaţi, scriptul necesită timp pentru a procesa imaginile',
        'notes' =>  '<ul>'.
                                '<li><b>OK</b> : înseamnă că imaginea a fost adaugată cu succes'.
                                '<li><b>DP</b> : înseamnă că imaginea este un duplicat şi există deja în baza de date'.
                                '<li><b>PB</b> : înseamnă că imaginea nu a putut fi adaugată, verificaţi configuraţia şi permisiile directoarelor unde imaginile sunt stocate'.
                                '<li><b>NA</b> : înseamnă că nu aţi selectat un album unde să încărcaţi imaginile, apăsaţi \'<a href="javascript:history.back(1)">înapoi</a>\' şi selectaţi un album. Dacă nu aveţi un album <a href="albmgr.php">creaţi unul întâi</a>'.
                                '<li>Dacă \'semnele\' OK, DP, PB nu apar, daţi click pe icoana de imagine defectă pentru a verifica mesajele de eroare produse de PHP'.
                                '<li>Dacă navigatorul dvs. raportează \'timeout\', apăsaţi butonul de reîncărcare a paginii'.
                                '</ul>',
                                'select_album' => 'Selectează album', //cpg1.3.0
                                'check_all' => 'Selectează tot', //cpg1.3.0
                                'uncheck_all' => 'Deselectează tot', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
                'title' => 'Banaţi utilizatori',
                'user_name' => 'Nume utilizator',
                'ip_address' => 'Adresa IP',
                'expiry' => 'Expiră (gol este permanent)',
                'edit_ban' => 'Salvează modificarile',
                'delete_ban' => 'Şterge',
                'add_new' => 'Adaugă un nou ban',
                'add_ban' => 'Adaugă',
                'error_user' => 'Nu găsesc utilizatorul', //cpg1.3.0
                'error_specify' => 'Trebuie să specificaţi un nume sau o adresa IP', //cpg1.3.0
                'error_ban_id' => 'Ban ID invalid!', //cpg1.3.0
                'error_admin_ban' => 'Nu puteţi bana propriul user!', //cpg1.3.0
                'error_server_ban' => 'Nu puteţi bana propriul server!', //cpg1.3.0
                'error_ip_forbidden' => 'Nu puteţi bana acest IP - nu este rutabil!', //cpg1.3.0
                'lookup_ip' => 'Lookup adresa IP', //cpg1.3.0
                'submit' => 'da!', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Încarcă o imagine', //cpg1.3.0
  'custom_title' => 'Forma cerere', //cpg1.3.0
  'cust_instr_1' => 'Trebuie să selectaţi numărul de căsuţe de încărcare, nu mai multe decât numărul de mai jos.', //cpg1.3.0
  'cust_instr_2' => 'Cerere număr căsuţe', //cpg1.3.0
  'cust_instr_3' => 'căsuţe încărcat imagini: %s', //cpg1.3.0
  'cust_instr_4' => 'căsuţe încărcat URL: %s', //cpg1.3.0
  'cust_instr_5' => 'căsuţe încărcat URL:', //cpg1.3.0
  'cust_instr_6' => 'căsuţe încărcat imagini:', //cpg1.3.0
  'cust_instr_7' => 'Vă rugăm introduceţi numărul de căsuţe. Apoi apăsaţi \'Continuare\'. ', //cpg1.3.0
  'reg_instr_1' => 'Acţiune invalidă pentru crearea formei.', //cpg1.3.0
  'reg_instr_2' => 'Acum puteţi încărca imaginile folosind căsuţele de mai jos. Mărimea imaginilor trimise către server nu trebuie să depăşească %s KB fiecare. Fişierele ZIP încărcate în \'Încărcare imagini\' şi \'Încărcare URL\' vor ramâne comprimate.', //cpg1.3.0
  'reg_instr_3' => 'Dacă doriţi ca fişierele arhivate să fie dezarhivate, trebuie să folosiţi căsuţa \'Încărcaţi ZIP decompresate\'.', //cpg1.3.0
  'reg_instr_4' => 'Când folosiţi încărcare URL, vă rugăm să folosiţi întreaga cale: http://www.pagina.ro/imagini/exemplu.jpg', //cpg1.3.0
  'reg_instr_5' => 'Când aţi completat formularul, vă rugăm apăsaţi \'Continuare\'.', //cpg1.3.0
  'reg_instr_6' => 'Încărcare ZIP decompresat:', //cpg1.3.0
  'reg_instr_7' => 'Încărcare imagini:', //cpg1.3.0
  'reg_instr_8' => 'Încărcare URL:', //cpg1.3.0
  'error_report' => 'Raportează eroare', //cpg1.3.0
  'error_instr' => 'Următoarele încărcări au erori:', //cpg1.3.0
  'file_name_url' => 'Imagine(i)/URL', //cpg1.3.0
  'error_message' => 'Mesaj eroare', //cpg1.3.0
  'no_post' => 'Imaginea nu poate fi încărcată prin POST.', //cpg1.3.0
  'forb_ext' => 'Extensia fişierului nepermisă.', //cpg1.3.0
  'exc_php_ini' => 'Mărimea imaginii permisă în php.ini.', //cpg1.3.0
  'exc_file_size' => 'Mărimea imaginii permisă de galerie.', //cpg1.3.0
  'partial_upload' => 'Încărcare parţială.', //cpg1.3.0
  'no_upload' => 'Fără încărcare.', //cpg1.3.0
  'unknown_code' => 'Eroare PHP necunoscută.', //cpg1.3.0
  'no_temp_name' => 'Fără încărcare - fără nume temporar.', //cpg1.3.0
  'no_file_size' => 'Nu conţine date/corupt', //cpg1.3.0
  'impossible' => 'Imposibil de mutat.', //cpg1.3.0
  'not_image' => 'Nu este imagine/corupt', //cpg1.3.0
  'not_GD' => 'Nu are extensie corectă.', //cpg1.3.0
  'pixel_allowance' => 'Număr mare de pixeli .', //cpg1.3.0
  'incorrect_prefix' => 'Prefix URL incorect', //cpg1.3.0
  'could_not_open_URI' => 'Nu pot deschide URL.', //cpg1.3.0
  'unsafe_URI' => 'URL neverificabil.', //cpg1.3.0
  'meta_data_failure' => 'Eroare Meta data', //cpg1.3.0
  'http_401' => '401 Neautorizat', //cpg1.3.0
  'http_402' => '402 Necesită plata', //cpg1.3.0
  'http_403' => '403 Inaccesibil', //cpg1.3.0
  'http_404' => '404 Negăsit', //cpg1.3.0
  'http_500' => '500 Eroare internă', //cpg1.3.0
  'http_503' => '503 Serviciu indisponibil', //cpg1.3.0
  'MIME_extraction_failure' => 'MIME nu a putut fi extras.', //cpg1.3.0
  'MIME_type_unknown' => 'Tip MIME necunoscut', //cpg1.3.0
  'cant_create_write' => 'Nu pot să scriu.', //cpg1.3.0
  'not_writable' => 'Nu pot să scriu în imagine.', //cpg1.3.0
  'cant_read_URI' => 'Nu pot să citesc URL', //cpg1.3.0
  'cant_open_write_file' => 'Nu pot deschide URL.', //cpg1.3.0
  'cant_write_write_file' => 'Nu pot să scriu URL.', //cpg1.3.0
  'cant_unzip' => 'Nu pot dezarhiva.', //cpg1.3.0
  'unknown' => 'Eroare necunoscută', //cpg1.3.0
  'succ' => 'Încărcare reuşită', //cpg1.3.0
  'success' => '%s încărcări reuşite.', //cpg1.3.0
  'add' => 'Vă rugăm apăsaţi \'Continuare\' pentru a adăuga imagini în album.', //cpg1.3.0
  'failure' => 'Încărcare eşuată', //cpg1.3.0
  'f_info' => 'Informaţii imagine', //cpg1.3.0
  'no_place' => 'Precedenta imagine nu a putut fi încărcată.', //cpg1.3.0
  'yes_place' => 'Precedenta imagine a putut fi încărcată.', //cpg1.3.0
  'max_fsize' => 'Dimensiunea maximă a imaginii este de %s KB',
  'album' => 'Album',
  'picture' => 'Imagine', //cpg1.3.0
  'pic_title' => 'Titlul imaginii', //cpg1.3.0
  'description' => 'Descrierea imaginii', //cpg1.3.0
  'keywords' => 'Cuvinte cheie (separate cu spaţiu)',
  'err_no_alb_uploadables' => 'Ne pare rău dar nu există un album unde să încărcaţi imaginile', //cpg1.3.0
  'place_instr_1' => 'Vă rugăm să puneţi imaginile în albume în acest moment. Puteţi de asemenea adăuga informaţii despre fiecare imagine.', //cpg1.3.0
  'place_instr_2' => 'Mai multe imagini necesită plasare, vă rugăm apăsaţi \'Continuare\'.', //cpg1.3.0
  'process_complete' => 'Aţi adăugat cu succes toate imaginile.', //cpg1.3.0
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
        'reg_a' => 'Data înregistrării ascendent',
        'reg_d' => 'Data înregistrării descendent',
        'pic_a' => 'Număr imagini ascendent',
        'pic_d' => 'Număr imagini descendent',
        'disku_a' => 'Utilizare spaţiu ascendent',
        'disku_d' => 'Utilizare spaţiu descendent',
        'sort_by' => 'Sortează utilizatorii după',
        'err_no_users' => 'Tabelul cu utilizatori este gol!',
        'err_edit_self' => 'Nu puteţi edita propriul profil. Folosiţi opţiunea \'Profilul meu\' pentru aceasta',
        'edit' => 'Editează',
        'delete' => 'Şterge',
        'name' => 'Nume utilizator',
        'group' => 'Grup',
        'inactive' => 'Inactiv',
        'operations' => 'Operaţii',
        'pictures' => 'Imagini',
        'disk_space' => 'Spaţiu utilizat/Cota',
        'registered_on' => 'Înregistrat la',
        'last_visit' => 'Ultima vizită', //cpg1.3.0
        'u_user_on_p_pages' => '%d utilizatori pe %d pagini',
        'confirm_del' => 'Sunteţi sigur că doriţi să ştergeţi acest utilizator ? \\nToate imaginile şi albumele sale vor fi de asemenea şterse',
        'mail' => 'Poşta',
        'err_unknown_user' => 'Utilizatorul selectat nu există!',
        'modify_user' => 'Modifică utilizatorul',
        'notes' => 'Note',
        'note_list' => '<li>Dacă nu doriţi să schimbaţi parola, lăsaţi câmpurile "Parola" libere',
        'password' => 'Parola',
        'user_active' => 'Utilizatorul este activ',
        'user_group' => 'Grup utilizatori',
        'user_email' => 'E-mail',
        'user_web_site' => 'Pagina web',
        'create_new_user' => 'Creaza utilizator nou',
        'user_location' => 'Locaţie',
        'user_interests' => 'Interese',
        'user_occupation' => 'Ocupaţie',
        'latest_upload' => 'Ultima încărcare', //cpg1.3.0
        'never' => 'niciodată', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
        'title' => 'Redimensionează imagini',
        'what_it_does' => 'Ce face',
        'what_update_titles' => 'Modifică titlurile după numele fişierului',
        'what_delete_title' => 'Şterge titlurile',
        'what_rebuild' => 'Reconstruieşte pictogramele şi imaginile intermediare',
        'what_delete_originals' => 'Şterge imaginile dimensionate iniţial, înlocuindu-le cu versiunea dimensionată',
        'file' => 'Fişier',
        'title_set_to' => 'titlu setat ca',
        'submit_form' => 'trimite',
        'updated_succesfully' => 'modificată cu succes',
        'error_create' => 'Eroare creare',
        'continue' => 'Procesează mai multe imagini',
        'main_success' => 'Fişierul %s a fost folosit cu succes ca imagine principală',
        'error_rename' => 'Eroare redenumire %s cu %s',
        'error_not_found' => 'Fişierul %s nu a fost găsit',
        'back' => 'înapoi la principal',
        'thumbs_wait' => 'Modificare pictograme şi/sau imagini intermediare, vă rugăm asteptaţi...',
        'thumbs_continue_wait' => 'Continuare modificare pictograme şi/sau imagini intermediare...',
        'titles_wait' => 'Modificare titluri, vă rugăm asteptaţi...',
        'delete_wait' => 'Ştergere titluri, vă rugăm asteptaţi...',
        'replace_wait' => 'Ştergere originale şi modificare cu versiunile redimensionate, vă rugăm asteptaţi...',
        'instruction' => 'Instrucţiuni rapide',
        'instruction_action' => 'Selectează o acţiune',
        'instruction_parameter' => 'Setează parametrii',
        'instruction_album' => 'Selectează un album',
        'instruction_press' => 'Apasă %s',
        'update' => 'Modifică pictograme şi/sau imagini intermediare',
        'update_what' => 'Ce trebuie modificat',
        'update_thumb' => 'Doar pictograme',
        'update_pic' => 'Doar imaginile intermediare',
        'update_both' => 'Amândouă',
        'update_number' => 'Numărul de imagini procesate pentru o apăsare',
        'update_option' => '(Încercaţi o setare mai mică dacă primiţi timeout-uri)',
        'filename_title' => 'Nume fişier &rArr; Titlu imagine',
        'filename_how' => 'Cum trebuie modificat titlul',
        'filename_remove' => 'Elimină .jpg din final şi înlocuieşte _ (liniuţa de subliniere) cu spaţiu',
        'filename_euro' => 'Schimbă 2003_11_23_13_20_20.jpg cu 23/11/2003 13:20',
        'filename_us' => 'Schimbă 2003_11_23_13_20_20.jpg cu 11/23/2003 13:20',
        'filename_time' => 'Schimbă 2003_11_23_13_20_20.jpg cu 13:20',
        'delete' => 'Şterge titlurile sau imaginile originale',
        'delete_title' => 'Şterge titlurile imaginilor',
        'delete_original' => 'Şterge imaginile originale',
        'delete_replace' => 'Şterge originalele, înlocuindu-le cu versiunile dimensionate',
        'select_album' => 'Selectează album',
        'delete_orphans' => 'Şterge comentarii orfane (în toate albumele)', //cpg1.3.0
        'orphan_comment' => 'Comentarii orfane', //cpg1.3.0
        'delete' => 'Şterge', //cpg1.3.0
        'delete_all' => 'Şterge tot', //cpg1.3.0
        'comment' => 'Comentariu: ', //cpg1.3.0
        'nonexist' => 'ataşat unei imagini inexistente # ', //cpg1.3.0
        'phpinfo' => 'Arată phpinfo', //cpg1.3.0
        'update_db' => 'Actualizează baza de date', //cpg1.3.0
        'update_db_explanation' => 'Dacă aţi modificat fişierele galeriei sau aţi făcut up-grade, actualizeaţi baza de date. Aceasta va salva tabelele necesare şi configurările în baza de date a galeriei.', //cpg1.3.0
);

?>