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
// CVS version: $Id: polish-utf-8.php,v 1.5 2004/07/24 15:04:07 gaugau Exp $
// ------------------------------------------------------------------------- //

// info about translators and translated language
$lang_translation_info = array(
'lang_name_english' => 'Polish', 
'lang_name_native' => 'Polski',
'lang_country_code' => 'pl',
'trans_name'=> 'Jacek DomoÅ„',
'trans_email' => 'plusz@plusz.net',
'trans_website' => 'http://www.plusz.net',
'trans_date' => '2004-05-16', 
);

$lang_charset = 'iso-8859-2';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('BajtÃ³w', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Niedziela', 'PoniedziaÅ‚ek', 'Wtorek', 'Åšroda', 'Czwartek', 'PiÄ…tek', 'Sobota');
$lang_month = array('Styczenia', 'Lutego', 'Marca', 'Kwietnia', 'Maja', 'Czerwca', 'Lipica', 'Sierpnia', 'WrzeÅ„nia', 'PaÅºdziernika', 'Listopada', 'Grudnia');

// Some common strings
$lang_yes = 'Tak';
$lang_no  = 'Nie';
$lang_back = 'Wstecz';
$lang_continue = 'Dalej';
$lang_info = 'Informacja';
$lang_error = 'BÅ‚Ä…d';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =   '%d %B %Y';
$lastcom_date_fmt =  '%d/%m/%y @ %H:%M';
$lastup_date_fmt = '%d %B %Y';
$register_date_fmt = '%d %B %Y';
$lasthit_date_fmt = '%B %d %Y at %I:%M %p'; //cpg1.3.0
$comment_date_fmt =  '%B %d %Y at %I:%M %p'; //cpg1.3.0

// For the word censor
$lang_bad_words = array('');

$lang_meta_album_names = array(
  'random' => 'Losowo wybrane pliki', //cpg1.3.0
  'lastup' => 'Ostatnie aktualizacje',
  'lastalb'=> 'Ostatnio aktualizacje albumÃ³w', 
  'lastcom' => 'Ostatnio dodane komentarze',
  'topn' => 'Najpopularniejsze',
  'toprated' => 'NajwyÅ¼ej oceniane',
  'lasthits' => 'Ostatnio oglÄ…dane',
  'search' => 'Wyniki wyszukiwania', 
  'favpics'=> 'Ulubione pliki' //cpg1.3.0
);

$lang_errors = array(
  'access_denied' => 'Nie masz uprawnieÅ„ aby oglÄ…daÄ‡ tÄ™ stronÄ™.',
  'perm_denied' => 'Nie masz uprawnieÅ„ aby wykonaÄ‡ tÄ™ operacjÄ™.',
  'param_missing' => 'Skrypt zostaÅ‚ wywoÅ‚any bez wymaganego parametru.',
  'non_exist_ap' => 'Wybrany plik lub album nie istnieje!',
  'quota_exceeded' => 'Przekroczono limit miejsca. <br /><br />TwÃ³j przydziaÅ‚: [quota]K, Twoje pliki uÅ¼ywajÄ… obecnie: [space]K. Dodanie wybranego pliku spowoduje przekroczenie limitu.', //cpg1.3.0
  'gd_file_type_err' => 'JeÅ¼li w uÅ¼yciu jest biblioteka GD, dozwolone formaty zdjÄ™Ä‡ to wyÅ‚Ä…cznie JPEG i PNG.',
  'invalid_image' => 'ZdjÄ™cie ktÃ³re przesÅ‚ano nie moÅ¼e byÄ‡ obsÅ‚uÅ¼one przez bibliotekÄ™ GD.',
  'resize_failed' => 'Nie moÅ¼na stworzyÄ‡ miniatury lub zdjÄ™cia poÅ›redniego.',  
  'no_img_to_display' => 'Brak pliku do wyÅ›wietlenia',
  'non_exist_cat' => 'Wybrana kategoria nie istnieje',
  'orphan_cat' => 'Kategoria nie ma gaÅ‚Ä™zi nadrzÄ™dnej, uruchom menedÅ¼era kategorii aby rozwiÄ…zaÄ‡ ten problem.', //cpg1.3.0
  'directory_ro' => 'Katalog \'%s\' jest zabezpieczony przed zapisem. Pliki nie mogÄ… byÄ‡ skasowane.', //cpg1.3.0
  'non_exist_comment' => 'Wybrany komentarz nie istnieje.',
  'pic_in_invalid_album' => 'Plik znajduje siÄ™ w nieistniejÄ…cym albumie (%s)!?', //cpg1.3.0
  'banned' => 'Obecnie TwÃ³j dostÄ™p do strony zostaÅ‚ zablokowany.',
  'not_with_udb' => 'Wybrana funkcja nie jest dostÄ™pna, poniewaÅ¼ jest zintegrowana z oprogramowniem forum. CzynnoÅ›Ä‡ ktÃ³rÄ… chcesz wykonaÄ‡ nie jest wspierana w tej konfiguracji, bÄ…dÅº powinna byÄ‡ obsÅ‚uÅ¼ona przez oprogramowanie forum.',
  'offline_title' => 'Offline', //cpg1.3.0
  'offline_text' => 'Galeria jest obecnie wyÅ‚Ä…czona - sprÃ³buj ponownie pÃ³Åºniej', //cpg1.3.0
  'ecards_empty' => 'Nie ma obecnie Å¼adnych zapisÃ³w dotyczÄ…cych e-kartek. SprawdÅº, czy wÅ‚Ä…czyÅ‚eÅ› logowanie e-kartek w konfiguracji coppermine!', //cpg1.3.0
  'action_failed' => 'DziaÅ‚anie nieudane. Coppermine nie moÅ¼e przetworzyÄ‡ Twojego Å¼Ä…dania.', //cpg1.3.0
  'no_zip' => 'Biblioteki do obsÅ‚ugi archiwÃ³w ZIP nie sÄ… obecnie dostÄ™pne. Skontaktuj siÄ™ z administratorem Coppermine.', //cpg1.3.0
  'zip_type' => 'Nie masz uprawnieÅ„ by przesyÅ‚aÄ‡ archiwa ZIP.', //cpg1.3.0
);

$lang_bbcode_help = 'MoÅ¼esz uÅ¼yÄ‡ nastÄ™pujÄ…cych kodÃ³w: <li>[b]<b>Bold</b>[/b]</li> <li>[i]<i>Italic</i>[/i]</li> <li>[url=http://yoursite.com/]Url Text[/url]</li> <li>[email]user@domain.com[/email]</li>'; //cpg1.3.0

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //
$lang_main_menu = array(
  'alb_list_title' => 'PrzejdÅº do listy albumÃ³w',
  'alb_list_lnk' => 'Albumy',
  'my_gal_title' => 'Do prywatnej galerii',
  'my_gal_lnk' => 'Moja galeria',
  'my_prof_lnk' => 'MÃ³j profil',
  'adm_mode_title' => 'PrzeÅ‚Ä…cz w tryb administratora',
  'adm_mode_lnk' => 'Tryb administratora',
  'usr_mode_title' => 'PrzeÅ‚Ä…cz w tryb uÅ¼ytkownika',
  'usr_mode_lnk' => 'Tryb uÅ¼ytkownika',
  'upload_pic_title' => 'PrzesÅ‚anie pliku do albumu', //cpg1.3.0
  'upload_pic_lnk' => 'PrzesÅ‚anie pliku', //cpg1.3.0
  'register_title' => 'UtwÃ³rz konto',
  'register_lnk' => 'Zarejestruj siÄ™',
  'login_lnk' => 'Zaloguj',
  'logout_lnk' => 'Wyloguj',
  'lastup_lnk' => 'Ostatnio dodane',
  'lastcom_lnk' => 'Ostatnie komentarze',
  'topn_lnk' => 'Najpopularniejsze',
  'toprated_lnk' => 'Top Lista',
  'search_lnk' => 'Szukaj',
  'fav_lnk' => 'Ulubione',
  'memberlist_title' => 'PokaÅ¼ uÅ¼ytkownikÃ³w', //cpg1.3.0
  'memberlist_lnk' => 'UÅ¼ytkownicy', //cpg1.3.0
   'faq_title' => 'FAQ galerii &quot;Coppermine&quot;', //cpg1.3.0
  'faq_lnk' => 'FAQ', //cpg1.3.0
);
  
$lang_gallery_admin_menu = array(
  'upl_app_lnk' => 'Akceptacja plikÃ³w',
  'config_lnk' => 'Konfiguracja',
  'albums_lnk' => 'Albumy',
  'categories_lnk' => 'Kategorie',
  'users_lnk' => 'UÅ¼ytkownicy',
  'groups_lnk' => 'Grupy',
  'comments_lnk' => 'Przejrzyj komentarze', //cpg1.3.0
  'searchnew_lnk' => 'Wsadowe dodawanie plikÃ³w',  //cpg1.3.0
  'util_lnk' => 'NarzÄ™dzia administracyjne',  //cpg1.3.0
  'ban_lnk' => 'Banowanie',
  'db_ecard_lnk' => 'WyÅ›wietl e-kartki', //cpg1.3.0 
);

$lang_user_admin_menu = array(
  'albmgr_lnk' => 'Tworzenie / porzÄ…dkowanie albumÃ³w',
  'modifyalb_lnk' => 'Modyfikacja moich albumÃ³w',
  'my_prof_lnk' => 'MÃ³j profil',
);

$lang_cat_list = array(
  'category' => 'Kategoria',
  'albums' => 'Albumy',
  'pictures' => 'Pliki', //cpg1.3.0
);

$lang_album_list = array(
  'album_on_page' => 'albumÃ³w: %d, stron: %d'
);

$lang_thumb_view = array(
  'date' => 'DATA',
  //Sort by filename and title
  'name' => 'NAZWA PLIKU', 
  'title' => 'TYTUÅ', 
  'sort_da' => 'Sortowanie wg daty rosnÄ…co',
  'sort_dd' => 'Sortowanie wg daty malejÄ…co',
  'sort_na' => 'Sortowanie wg nazwy rosnÄ…co',
  'sort_nd' => 'Sortowanie wg nazwy malejÄ…co',
  'sort_ta' => 'Sortowanie wg tytuÅ‚u rosnÄ…co', 
  'sort_td' => 'Sortowanie wg tytuÅ‚u malejÄ…co', 
  'pic_on_page' => 'plikÃ³w: %d stron: %d',
  'user_on_page' => 'uÅ¼ytkownikÃ³w: %d, stron: %d'
);

$lang_img_nav_bar = array(
  'thumb_title' => 'WrÃ³Ä‡ do widoku miniatur',
  'pic_info_title' => 'WyÅ›wietl/ukryj info o pliku',
  'slideshow_title' => 'Pokaz slajdÃ³w',
  'ecard_title' => 'WyÅ›lij jako e-kartkÄ™',
  'ecard_disabled' => 'e-kartki sÄ… wyÅ‚Ä…czone',
  'ecard_disabled_msg' => 'Nie masz uprawnieÅ„ do wysyÅ‚ania e-kartek', //js-alert //cpg1.3.0
  'prev_title' => 'Poprzedni plik', //cpg1.3.0
  'next_title' => 'NastÄ™pny plik', //cpg1.3.0
  'pic_pos' => 'PLIK %s/%s', //cpg1.3.0
);

$lang_rate_pic = array(
  'rate_this_pic' => 'OceÅ„ ten plik ', //cpg1.3.0
  'no_votes' => '(Brak gÅ‚osÃ³w)',
  'rating' => '(obecna ocena : %s / 5 gÅ‚osÃ³w: %s)',
  'rubbish' => 'Do niczego',
  'poor' => 'SÅ‚abe',
  'fair' => 'NiezÅ‚e',
  'good' => 'Dobre',
  'excellent' => 'B. dobre',
  'great' => 'DoskonaÅ‚e',
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
  CRITICAL_ERROR => 'BÅ‚Ä…d krytyczny',
  'file' => 'Plik: ',
  'line' => 'Linia: ',
);

$lang_display_thumbnails = array(
  'filename' => 'Nazwa pliku: ',
  'filesize' => 'Rozmiar pliku: ',
  'dimensions' => 'Wymiary: ',
  'date_added' => 'Data dodania: ',  //cpg1.3.0
);

$lang_get_pic_data = array(
  'n_comments' => 'komentarzy: %s ',
  'n_views' => 'odsÅ‚on: %s ',
  'n_votes' => '(gÅ‚osÃ³w: %s)'
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Informacje debuggera', //cpg1.3.0
  'select_all' => 'Wybierz wszystko', //cpg1.3.0
  'copy_and_paste_instructions' => 'Aby otrzymaÄ‡ pomoc na forum wsparcia technicznego coppermine, skopiuj i wklej te informacje debuggera do swojego postu. PamiÄ™taj aby zastÄ…piÄ‡ wszelkie hasÅ‚a ciÄ…giem ***, przed zamieszczeniem postu.', //cpg1.3.0
  'phpinfo' => 'wyÅ›wietl phpinfo', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => 'DomyÅ›lny jÄ™zyk', //cpg1.3.0
  'choose_language' => 'Wybierz swÃ³j jÄ™zyk', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'DomyÅ›lny styl', //cpg1.3.0
  'choose_theme' => 'Wybierz styl', //cpg1.3.0
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
  'Exclamation' => 'Wykrzyknik',
  'Question' => 'Pytanie',
  'Very Happy' => 'Bardzo zadowolony',
  'Smile' => 'UÅ›miechniÄ™ty',
  'Sad' => 'Smutny',
  'Surprised' => 'Zaskoczony',
  'Shocked' => 'Zszokowany',
  'Confused' => 'Zniesmaczony',
  'Cool' => 'Luzak',
  'Laughing' => 'Åšmieje siÄ™',
  'Mad' => 'WÅ›ciekÅ‚y',
  'Razz' => 'JÄ™zorek',
  'Embarassed' => 'Zawstydzony / gafa',
  'Crying or Very sad' => 'Zrozpaczony',
  'Evil or Very Mad' => 'WÅ›ciekÅ‚y do kwadratu',
  'Twisted Evil' => 'Twisted Evil',
  'Rolling Eyes' => 'Przewraca oczami',
  'Wink' => 'Puszcza oczko',
  'Idea' => 'PomysÅ‚',
  'Arrow' => 'StrzaÅ‚ka',
  'Neutral' => 'Neutralny',
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
  0 => 'ZakoÅ„czono pracÄ™ administratora...',
  1 => 'PrzeÅ‚Ä…czanie do trybu administratora...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //
if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Albumy muszÄ… mieÄ‡ nazwÄ™ !', //js-alert
  'confirm_modifs' => 'Czy na pewno chcesz dokonaÄ‡ tych modyfikacji ?', //js-alert
  'no_change' => 'Nie dokonaÅ‚eÅ›/aÅ› Å¼adnej zmiany !', //js-alert
  'new_album' => 'Nowy album',
  'confirm_delete1' => 'Czy na pewno chcesz skasowaÄ‡ ten album ?', //js-alert
  'confirm_delete2' => '\nWszystkie pliki i komentarze ktÃ³re zawiera zostanÄ… stracone !', //js-alert
  'select_first' => 'Wybierz najpierw album', //js-alert
  'alb_mrg' => 'MenedÅ¼er albumÃ³w',
  'my_gallery' => '* Moja galeria *',
  'no_category' => '* Bez kategorii *',
  'delete' => 'Kasuj',
  'new' => 'Nowy',
  'apply_modifs' => 'Wykonaj modyfikacje',
  'select_category' => 'Wybierz kategoriÄ™',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //
if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Brak parametrÃ³w do operacji \'%s\'!',
  'unknown_cat' => 'Wybrana kategoria nie istnieje w bazie danych',
  'usergal_cat_ro' => 'Galerie uÅ¼ytkownikÃ³w nie mogÄ… byÄ‡ kasowane!',
  'manage_cat' => 'ZarzÄ…dzaj kategoriami',
  'confirm_delete' => 'Czy jesteÅ› pewny/a Å¼e chcesz SKASOWAÄ† tÄ™ kategoriÄ™',
  'category' => 'Kategoria',
  'operations' => 'Operacje',
  'move_into' => 'PrzesuÅ„ do',
  'update_create' => 'Uaktualnij / stwÃ³rz kategoriÄ™',
  'parent_cat' => 'Kategoria wyÅ¼szego rzÄ™du',
  'cat_title' => 'TytuÅ‚ kategorii',
  'cat_thumb' => 'Miniatrury kategorii', //cpg1.3.0
  'cat_desc' => 'Opis kategorii'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
  'title' => 'Konfiguracja',
  'restore_cfg' => 'PrzywrÃ³Ä‡ ustawienia domyÅ›lne',
  'save_cfg' => 'Zachowaj nowÄ… konfiguracjÄ™',
  'notes' => 'Notatki',
  'info' => 'Informacja',
  'upd_success' => 'Konfiguracja Coppermine zostaÅ‚a uaktualniona',
  'restore_success' => 'Konfiguracja Coppermine zostaÅ‚a przywrÃ³cona',
  'name_a' => 'Nazwa rosnÄ…co',
  'name_d' => 'Nazwa malejÄ…co',
  'title_a' => 'TytuÅ‚ rosnÄ…co', 
  'title_d' => 'TytuÅ‚ malejÄ…co', 
  'date_a' => 'Data rosnÄ…co',
  'date_d' => 'Data malejÄ…co',
  'th_any' => 'Maksymalne rozmiary',
  'th_ht' => 'WysokoÅ›Ä‡',
  'th_wd' => 'SzerokoÅ›Ä‡',
  'label' => 'etykieta', //cpg1.3.0
  'item' => 'element', //cpg1.3.0
  'debug_everyone' => 'Wszyscy', //cpg1.3.0
  'debug_admin' => 'Tylko administrator', //cpg1.3.0
  );

if (defined('CONFIG_PHP')) $lang_config_data = array(
  'Ustawienia gÅ‚Ã³wne',
  array('Nazwa galerii', 'gallery_name', 0),
  array('Opis galerii', 'gallery_description', 0),
  array('E-mail administratora galerii', 'gallery_admin_email', 0),
  array('Adresy docelowe dla linku \'Zobacz wiÄ™cej\' w e-kartkach', 'ecards_more_pic_target', 0),
  array('Galeria jest wyÅ‚Ä…czona', 'offline', 1), //cpg1.3.0
  array('Logowanie e-kartek', 'log_ecards', 1), //cpg1.3.0
  array('ZezwÃ³l na Å›ciÄ…ganie Ulubionych w archiwum ZIP', 'enable_zipdownload', 1), //cpg1.3.0

  'Language, Themes &amp; Charset settings',
  array('JÄ™zyk', 'lang', 5),
  array('Styl galerii', 'theme', 6),
  array('Pokazuj listÄ™ dostÄ™pnych jÄ™zykÃ³w', 'language_list', 8), //cpg1.3.0
  array('Pokazuj flagi jÄ™zykÃ³w', 'language_flags', 8), //cpg1.3.0
  array('Pokazuj &quot;reset&quot; przy wyborze jÄ™zyka', 'language_reset', 1), //cpg1.3.0
  array('Pokazuj listÄ™ styli', 'theme_list', 8), //cpg1.3.0
  array('Pokazuj &quot;reset&quot; przy wyborze stylu', 'theme_reset', 1), //cpg1.3.0
  array('Pokazuj FAQ', 'display_faq', 1), //cpg1.3.0
  array('Pokazuj pomoc bbcode', 'show_bbcode_help', 1), //cpg1.3.0
  array('Kodowanie znakÃ³w', 'charset', 4), //cpg1.3.0

  'PrzeglÄ…danie listy albumÃ³w',
  array('SzerokoÅ›Ä‡ gÅ‚Ã³wnej galerii (piksele lub %)', 'main_table_width', 0),
  array('IloÅ›Ä‡ kategorii do wyÅ›wietlenia', 'subcat_level', 0),
  array('IloÅ›Ä‡ albumÃ³w do wyÅ›wietlenia', 'albums_per_page', 0),
  array('IloÅ›Ä‡ kolumn w liÅ›cie albumÃ³w', 'album_list_cols', 0),
  array('Rozmiar miniatur w pikselach', 'alb_list_thumb_size', 0),
  array('ZawartoÅ›Ä‡ strony gÅ‚Ã³wnej', 'main_page_layout', 0),
  array('PokaÅ¼ miniaturÄ™ pierwszego poziomu w miniaturach albumu','first_level',1),
 
  'Widok miniatur',
  array('IloÅ›Ä‡ kolumn na stronie miniatur', 'thumbcols', 0),
  array('IloÅ›Ä‡ wierszy na stronie miniatur', 'thumbrows', 0),
  array('Maksymalna iloÅ›Ä‡ paskÃ³w do wyÅ›wietlenia', 'max_tabs', 10), //cpg1.3.0
  array('WyÅ›wietl opis pliku (oprÃ³cz tytuÅ‚u) poniÅ¼ej miniatury', 'caption_in_thumbview', 1), //cpg1.3.0
  array('WyÅ›wietl iloÅ›Ä‡ odsÅ‚on poniÅ¼ej miniatury', 'views_in_thumbview', 1), //cpg1.3.0
  array('WyÅ›wietl iloÅ›Ä‡ komentarzy poniÅ¼ej miniatury', 'display_comment_count', 1),
  array('WyÅ›wietl przesyÅ‚ajÄ…cego poniÅ¼ej miniatury', 'display_uploader', 1), //cpg1.3.0
  array('DomyÅ›lny porzÄ…dek sortowania plikÃ³w', 'default_sort_order', 3), //cpg1.3.0
  array('Minimalna iloÅ›Ä‡ gÅ‚osÃ³w niezbÄ™dna do umieszczenia pliku w kategorii \'Top Lista\'', 'min_votes_for_rating', 0), //cpg1.3.0

  'PrzeglÄ…danie obrazÃ³w &amp; Ustawienia komentarzy',
  array('SzerokoÅ›Ä‡ tabeli wyÅ›wietlajÄ…cej pliki (piksele lub %)', 'picture_table_width', 0), //cpg1.3.0
  array('DomyÅ›lne pokazywanie informacji o pliku', 'display_pic_info', 1), //cpg1.3.0
  array('Blokowanie sÅ‚Ã³w z "listy zakazanych" w komentarzach', 'filter_bad_words', 1),
  array('WyÅ›wietlanie emotikon w komentarzach', 'enable_smilies', 1),
  array('Maksymalna dÅ‚ugoÅ›Ä‡ opisu pliku', 'max_img_desc_length', 0),
  array('Maksymalna iloÅ›Ä‡ znakÃ³w w sÅ‚owie', 'max_com_wlength', 0),
  array('Maksymalna iloÅ›Ä‡ linii w komentarzu', 'max_com_lines', 0),
  array('Maksymalna dÅ‚ugoÅ›Ä‡ komentarza (znakÃ³w)', 'max_com_size', 0),
  array('PokaÅ¼ "pasek filmu" z miniaturami', 'display_film_strip', 1), 
  array('IloÅ›Ä‡ elementÃ³w wyÅ›wietlanych w "pasku filmu" z miniaturami', 'max_film_strip_items', 0), 
  array('Powiadom administratora o komentarzu', 'email_comment_notification', 1), //cpg1.3.0
  array('InterwaÅ‚ pokazu slajdÃ³w (1 sekunda = 1000 milisekund)', 'slideshow_interval', 0), //cpg1.3.0

  'Ustawienia plikÃ³w i miniatur', //cpg1.3.0
  array('JakoÅ›Ä‡ plikÃ³w JPEG', 'jpeg_qual', 0),
  array('Maksymalny rozmiar miniatury <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0), //cpg1.3.0
  array('UÅ¼yj wymiaru (szerokoÅ›Ä‡, wysokoÅ›Ä‡ lub maksymalny widok dla miniatury)<b>**</b>', 'thumb_use', 7),
  array('TwÃ³rz zdjÄ™cia poÅ›rednie','make_intermediate',1),
  array('Maksymalna szerokoÅ›Ä‡ poÅ›redniego zdjÄ™cia lub video <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0), //cpg1.3.0
  array('Maksymalny rozmiar przesyÅ‚anych plikÃ³w (KB)', 'max_upl_size', 0), //cpg1.3.0
  array('Maksymana wysokoÅ›Ä‡ lub szerokoÅ›Ä‡ przesyÅ‚anych zdjÄ™Ä‡ (w pikselach)', 'max_upl_width_height', 0), //cpg1.3.0

  'Zaawansowane ustawienia plikÃ³w i miniatur', //cpg1.3.0
  array('WyÅ›wietlanie ikon albumÃ³w prywatnych niezalogowanemu uÅ¼ytkownikowi','show_private',1), //cpg1.3.0
  array('Znaki zakazane w nazwach plikÃ³w', 'forbiden_fname_char',0), //cpg1.3.0
  //array('Akceptowane rozszerzenia przesyÅ‚anych zdjÄ™Ä‡', 'allowed_file_extensions',0), //cpg1.3.0
  array('Akceptowalne typy obrazÃ³w', 'allowed_img_types',0), //cpg1.3.0
  array('Akceptowalne typy plikÃ³w wideo', 'allowed_mov_types',0), //cpg1.3.0
  array('Akceptowalne typy plikÃ³w audio', 'allowed_snd_types',0), //cpg1.3.0
  array('Akceptowalne typy dokumentÃ³w', 'allowed_doc_types',0), //cpg1.3.0
  array('Metoda skalowania obrazÃ³w','thumb_method',2), //cpg1.3.0
  array('ÅšcieÅ¼ka dostÄ™pu do oprogramowania \'konwertujÄ…cego\' ImageMagick (np /usr/bin/X11/)', 'impath', 0), //cpg1.3.0
  //array('Dozwolone nazwy plikÃ³w (wÅ‚aÅ›ciwe dla ImageMagick)', 'allowed_img_types',0), //cpg1.3.0
  array('Komendy linii poleceÅ„ dla ImageMagick', 'im_options', 0), //cpg1.3.0
  array('Czytaj dane EXIF w plikach JPEG', 'read_exif_data', 1), //cpg1.3.0
  array('Czytaj dane IPTC w plikach JPEG', 'read_iptc_data', 1), //cpg1.3.0
  array('Katalog albumÃ³w <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0), //cpg1.3.0
  array('Nazwa katalogu na pliki uÅ¼ytkownikÃ³w <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0), //cpg1.3.0
  array('Prefix dla zdjÄ™Ä‡ poÅ›rednich <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0), //cpg1.3.0
  array('Prefix dla miniatur <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0), //cpg1.3.0
  array('DomyÅ›lne uprawnienia katalogÃ³w', 'default_dir_mode', 0), //cpg1.3.0
  array('DomyÅ›lne uprawnienia plikÃ³w', 'default_file_mode', 0), //cpg1.3.0

  'Ustawienia uÅ¼ytkownikÃ³w',
  array('Zezwalanie na rejestracjÄ™ nowych uÅ¼ytkownikÃ³w', 'allow_user_registration', 1),
  array('Rejestracja uÅ¼ytkownika wymaga potwierdzenia e-mail', 'reg_requires_valid_email', 1),
  array('Powiadom administratora o rejestracji e-mailem', 'reg_notify_admin_email', 1), //cpg1.3.0
  array('Zezwalanie posiadania tego samego adresu e-mail przez dwÃ³ch uÅ¼ytkownikÃ³w', 'allow_duplicate_emails_addr', 1),
  array('UÅ¼ytkownicy mogÄ… tworzyÄ‡ albumy prywatne', 'allow_private_albums', 1),
  array('Powiadom administratora o plikach oczekujÄ…cych na akceptacjÄ™', 'upl_notify_admin_email', 1), //cpg1.3.0
  array('ZezwÃ³l na oglÄ…danie listy uÅ¼ytkownikÃ³w uÅ¼ytkownikom zarejestrowanym', 'allow_memberlist', 1), //cpg1.3.0
  
  'Nazwy dodatkowych pÃ³l do opisu pliku (pozostaw je puste jeÅ¼eli nie sÄ… uÅ¼ywane)',
  array('Nazwa pola 1', 'user_field1_name', 0),
  array('Nazwa pola 2', 'user_field2_name', 0),
  array('Nazwa pola 3', 'user_field3_name', 0),
  array('Nazwa pola 4', 'user_field4_name', 0),

  'Ustawienia cookies',
  array('Nazwa plikÃ³w cookie tworzonych przez skrypt (w przypadku integracji bbs, upewnij siÄ™, Å¼e nazwa rÃ³Å¼ni siÄ™ od nazw plikÃ³w generowanych przez bbs', 'cookie_name', 0),
  array('ÅšcieÅ¼ka plikÃ³w cookie tworzonych przez skrypt', 'cookie_path', 0),
  
  'RÃ³Å¼ne ustawienia',
  array('WÅ‚Ä…cz tryb debugowania', 'debug_mode', 9), //cpg1.3.0
  array('Pokazuj powiadomienia w trybie debugowania', 'debug_notice', 1), //cpg1.3.0

  '<br /><div align="left"><a name="notice1"></a>(*) Pola oznaczone gwiazdkÄ… nie mogÄ… byÄ‡ zmienione jeÅ¼eli w bazie danych sÄ… juÅ¼ pliki.<br />
  <a name="notice2"></a>(**) Zmiana tych ustawieÅ„ dotyczy jedynie nowych plikÃ³w dodawanych do bazy, dlatego rekomenduje siÄ™ nie dokonywanie zmiany, jeÅ¼eli w galerii znajdujÄ… siÄ™ juÅ¼ jakieÅ› pliki. Zmiana istniejÄ…cych plikÃ³w moÅ¼e zostaÄ‡ jednak dokonana przy pomocy &quot;<a href="util.php">narzÄ™dzi administracyjnych (zmiana rozmiaru zdjÄ™Ä‡)</a>&quot; znajdujÄ…cych siÄ™ w menu administratora.</div><br />', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'WyÅ›lij e-kartkÄ™', //cpg1.3.0
  'ecard_sender' => 'Nadawca', //cpg1.3.0
  'ecard_recipient' => 'Odbiorca', //cpg1.3.0
  'ecard_date' => 'Data', //cpg1.3.0
  'ecard_display' => 'WyÅ›wietl e-kartkÄ™', //cpg1.3.0
  'ecard_name' => 'ImiÄ™', //cpg1.3.0
  'ecard_email' => 'E-mail', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'rosnÄ…co', //cpg1.3.0
  'ecard_descending' => 'malejÄ…co', //cpg1.3.0
  'ecard_sorted' => 'Sortowane', //cpg1.3.0
  'ecard_by_date' => 'wg daty', //cpg1.3.0
  'ecard_by_sender_name' => 'wg imienia nadawcy', //cpg1.3.0
  'ecard_by_sender_email' => 'wg e-maila nadawcy', //cpg1.3.0
  'ecard_by_sender_ip' => 'wg adresu IP nadawcy', //cpg1.3.0
  'ecard_by_recipient_name' => 'wg nazwy odbiorcy', //cpg1.3.0
  'ecard_by_recipient_email' => 'wg e-maila odbiorcy', //cpg1.3.0
  'ecard_number' => 'wyÅ›wietlane rekordy: %s - %s z %s', //cpg1.3.0
  'ecard_goto_page' => 'do strony', //cpg1.3.0
  'ecard_records_per_page' => 'RekordÃ³w na stronie', //cpg1.3.0
  'check_all' => 'Wybierz wszystkie', //cpg1.3.0
  'uncheck_all' => 'WyczyÅ›Ä‡ wszystkie', //cpg1.3.0
  'ecards_delete_selected' => 'Skasuj wybrane e-kartki', //cpg1.3.0
  'ecards_delete_confirm' => 'Czy na pewno chcesz skasowaÄ‡ te rekodry? Zaznacz checkbox!', //cpg1.3.0
  'ecards_delete_sure' => 'ChcÄ™ skasowaÄ‡', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Musisz podaÄ‡ swoje imiÄ™ i napisaÄ‡ komentarz',
  'com_added' => 'TwÃ³j komentarz zostaÅ‚ dodany',
  'alb_need_title' => 'Musisz podaÄ‡ tytuÅ‚ dla albumu!',
  'no_udp_needed' => 'Zmiana nie jest konieczna.',
  'alb_updated' => 'Album zostaÅ‚ uaktualniony',
  'unknown_album' => 'Wybrany album nie istnieje, lub nie masz uprawnieÅ„ do przesyÅ‚ania',
  'no_pic_uploaded' => 'Plik nie zostaÅ‚ dodany!<br /><br />JeÅ¼eli wybrano plik do przesÅ‚ania, sprawdÅº czy serwer na to zezwala...', //cpg1.3.0
  'err_mkdir' => 'Nie udaÅ‚o siÄ™ utworzyÄ‡ katalogu %s !',
  'dest_dir_ro' => 'Katalog docelowy %s nie moÅ¼e byÄ‡ zapisany przez skrypt!',
  'err_move' => 'Nie moÅ¼na przenieÅ›Ä‡ %s do %s !',
  'err_fsize_too_large' => 'Plik ktÃ³ry przesyÅ‚asz ma zbyt duÅ¼y rozmiar (maksymalnie dozwolony: %s x %s) !',//cpg1.3.0
  'err_imgsize_too_large' => 'Plik ktÃ³ry przesyÅ‚asz ma zbyt duÅ¼y rozmiar (maksymalnie dozwolony: to %s KB) !',
  'err_invalid_img' => 'Plik ktÃ³ry przesyÅ‚asz jest w niedozwolonym formacie!',
  'allowed_img_types' => 'MoÅ¼esz przesÅ‚aÄ‡ tylko %s plikÃ³w.',
  'err_insert_pic' => 'Plik \'%s\' nie moÅ¼e zostaÄ‡ wstawiony do albumu ', //cpg1.3.0
  'upload_success' => 'Plik zostaÅ‚ przesÅ‚any <br /><br />BÄ™dzie widoczny po akceptacji przez administratora.', //cpg1.3.0
  'notify_admin_email_subject' => '%s - powiadomienie o przesÅ‚aniu pliku', //cpg1.3.0
  'notify_admin_email_body' => 'UÅ¼ytkownik %s przesÅ‚aÅ‚ plik, oczekuje on na TwojÄ… aprobatÄ™. OdwiedÅº %s', //cpg1.3.0
  'info' => 'Informacje',
  'com_added' => 'Dodano komentarz',
  'alb_updated' => 'Uaktualniono album',
  'err_comment_empty' => 'TwÃ³j komentarz jest pusty!',
  'err_invalid_fext' => 'Akceptowane sÄ… jedynie pliki z nastÄ™pujÄ…cymi rozszerzeniami: <br /><br />%s.',
  'no_flood' => 'Przykro mi ale jesteÅ›/aÅ› autorem ostatniego dodanego komentarza<br /><br />MoÅ¼esz go edytowaÄ‡ aby zmieniÄ‡ treÅ›Ä‡',
  'redirect_msg' => 'JesteÅ› przekierowywany.<br /><br /><br />Kliknij \'DALEJ\' jeÅ¼eli strona nie zmieni siÄ™ automatycznie',
  'upl_success' => 'Plik zostaÅ‚ przesÅ‚any', //cpg1.3.0
  'email_comment_subject' => 'W galerii Coppermine dodano komentarz', //cpg1.3.0
  'email_comment_body' => 'Dodano komentarz do Twojej galerii zobacz go tutaj', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'TytuÅ‚',
  'fs_pic' => 'peÅ‚ny rozmiar',
  'del_success' => 'skasowano',
  'ns_pic' => 'normalny rozmiar',
  'err_del' => 'nie moÅ¼e byÄ‡ skasowane',
  'thumb_pic' => 'miniatura',
  'comment' => 'komentarz',
  'im_in_alb' => 'zdjÄ™cie z albumu',
  'alb_del_success' => 'Skasowano album \'%s\' ',
  'alb_mgr' => 'MenedÅ¼er albumÃ³w',
  'err_invalid_data' => 'Otrzymano niewÅ‚aÅ›ciwe dane \'%s\'',
  'create_alb' => 'Tworzenie albumu \'%s\'',
  'update_alb' => 'Uaktualnienie albumu: \'%s\' tytuÅ‚: \'%s\' index: \'%s\'',
  'del_pic' => 'Kasowanie pliku', //cpg1.3.0
  'del_alb' => 'Kasowanie albumu',
  'del_user' => 'Kasowanie uÅ¼ytkownika',
  'err_unknown_user' => 'Wybrany uÅ¼ytkownik nie istnieje!',
  'comment_deleted' => 'Komentarz zostaÅ‚ dodany',
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
  'confirm_del' => 'Czy na pewno chcesz skasowaÄ‡ ten plik? \\nZostanÄ… skasowane rÃ³wnieÅ¼ komentarze do niego.', //js-alert //cpg1.3.0
  'del_pic' => 'SKASUJ TEN PLIK', //cpg1.3.0
  'size' => '%s x %s pikseli',
  'views' => '%s razy',
  'slideshow' => 'Pokaz slajdÃ³w',
  'stop_slideshow' => 'ZATRZYMAJ POKAZ',
  'view_fs' => 'Kliknij aby zobaczyÄ‡ peÅ‚ny rozmiar',
  'edit_pic' => 'Edytowanie opisu', //cpg1.3.0
  'crop_pic' => 'Kadrowanie i obrÃ³t', //cpg1.3.0
);

$lang_picinfo = array(
  'title' =>'Informacja o pliku', //cpg1.3.0
  'Filename' => 'Nazwa pliku',
  'Album name' => 'Nazwa albumu',
  'Rating' => 'Ocena (%s gÅ‚osÃ³w)',
  'Keywords' => 'SÅ‚owa kluczowe',
  'File Size' => 'Rozmiar pliku',
  'Dimensions' => 'Wymiary',
  'Displayed' => 'WyÅ›wietleÅ„',
  'Camera' => 'Aparat fotograficzny',
  'Date taken' => 'Data zrobienia zdjÄ™cia',
  'Aperture' => 'PrzesÅ‚ona',
  'Exposure time' => 'Czas ekspozycji',
  'Focal length' => 'Ogniskowa',
  'Comment' => 'Komentarz',
  'addFav'=>'Dodaj do Ulubionych', 
  'addFavPhrase'=>'Ulubione', 
  'remFav'=>'UsuÅ„ z Ulubionych',
  'iptcTitle'=>'TytuÅ‚ IPTC', //cpg1.3.0
  'iptcCopyright'=>'Copyright IPTC', //cpg1.3.0
  'iptcKeywords'=>'SÅ‚owa kluczowe IPTC', //cpg1.3.0
  'iptcCategory'=>'Kategoria IPTC', //cpg1.3.0
  'iptcSubCategories'=>'Podkategorie IPTC', //cpg1.3.0
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Edytuj ten komentarz',
  'confirm_delete' => 'Czy na pewno chcesz skasowaÄ‡ ten komentarz ?', //js-alert
   'add_your_comment' => 'Dodaj komentarz',
  'name'=>'Pseudonim', 
  'comment'=>'Komentarz', 
  'your_name' => 'Anonim', 
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Kliknij zdjÄ™cie aby zamknÄ…Ä‡ okno', 
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'WyÅ›lij e-kartkÄ™',
  'invalid_email' => '<b>Uwaga!</b> : niepoprawny adres e-mail !',
  'ecard_title' => 'e-kartka od %s dla Ciebie',
  'view_ecard' => 'JeÅ¼eli e-kartka nie wyÅ›wietla siÄ™ poprawnie, kliknij ten link',
  'view_more_pics' => 'Kliknij ten link aby zobaczyÄ‡ wiÄ™cej zdjÄ™Ä‡!',
  'send_success' => 'Twoja e-kartka zostaÅ‚a wysÅ‚ana',
  'send_failed' => 'Niestety, serwer nie moÅ¼e wysÅ‚aÄ‡ Twojej e-kartki...',
  'from' => 'Od',
  'your_name' => 'Twoje imiÄ™',
  'your_email' => 'TwÃ³j adres e-mail',
  'to' => 'Do',
  'rcpt_name' => 'Nazwa odbiorcy',
  'rcpt_email' => 'Adres e-mail odbiorcy',
  'greetings' => 'Temat',
  'message' => 'WiadomoÅ›Ä‡',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Plik&nbsp;Info', //cpg1.3.0
  'album' => 'Album',
  'title' => 'TytuÅ‚',
  'desc' => 'Opis',
  'keywords' => 'SÅ‚owa kluczowe',
  'pic_info_str' => '%s &razy; %s - %s KB - %s odsÅ‚on - %s gÅ‚osÃ³w',
  'approve' => 'Akceptuj plik', //cpg1.3.0
  'postpone_app' => 'Odrocz akceptacjÄ™',
  'del_pic' => 'Skasuj plik', //cpg1.3.0
  'reset_view_count' => 'Resetuj licznik odsÅ‚on',
  'reset_votes' => 'Resetuj gÅ‚osowania',
  'del_comm' => 'Skasuj komentarze',
  'upl_approval' => 'Akceptacja zdjÄ™Ä‡',
  'edit_pics' => 'Edytuj zdjÄ™cia',
  'see_next' => 'Zobacz nastÄ™pne zdjÄ™cia',
  'see_prev' => 'Zobacz poprzednie zdjÄ™cia',
  'n_pic' => 'zdjÄ™Ä‡: %s',
  'n_of_pic_to_disp' => 'IloÅ›Ä‡ zdjÄ™Ä‡ do wyÅ›wietlenia',
  'apply' => 'Zastosuj zmiany'
);

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Informacja&nbsp;o pliku', //cpg1.3.0
  'album' => 'Album',
  'title' => 'TytuÅ‚',
  'desc' => 'Opis',
  'keywords' => 'SÅ‚owa kluczowe',
  'pic_info_str' => '%s &razy; %s - %s KB - %s odsÅ‚on - %s gÅ‚osÃ³w',
  'approve' => 'Akceptuj plik', //cpg1.3.0
  'postpone_app' => 'Odrocz akceptacjÄ™',
  'del_pic' => 'Kasuj plik', //cpg1.3.0
  'read_exif' => 'Odczytaj ponownie informacje EXIF', //cpg1.3.0
  'reset_view_count' => 'Kasuj licznik odsÅ‚on',
  'reset_votes' => 'Kasuj gÅ‚osowania',
  'del_comm' => 'Kasuj komentarze',
  'upl_approval' => 'Akceptacja plikÃ³w',
  'edit_pics' => 'Edycja plikÃ³w', //cpg1.3.0
  'see_next' => 'Zobacz nastÄ™pne pliki', //cpg1.3.0
  'see_prev' => 'Zobacz poprzednie pliki', //cpg1.3.0
  'n_pic' => '%s plikÃ³w', //cpg1.3.0
  'n_of_pic_to_disp' => 'IloÅ›Ä‡ plikÃ³w do wyÅ›wietlenia', //cpg1.3.0
  'apply' => 'Zastosuj zmiany', //cpg1.3.0
  'crop_title' => 'Edytor zdjÄ™Ä‡ Coppermine', //cpg1.3.0
  'preview' => 'PodglÄ…d', //cpg1.3.0
  'save' => 'Zapisz zdjÄ™cie', //cpg1.3.0
  'save_thumb' =>'Zapisz jako miniaturÄ™', //cpg1.3.0
  'sel_on_img' =>'Obszar wyboru musi mieÅ›ciÄ‡ siÄ™ na zdjÄ™ciu!', //js-alert //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'NajczÄ™Å›ciej zadawane pytania', //cpg1.3.0
  'toc' => 'Spis treÅ›ci', //cpg1.3.0
  'question' => 'Pytanie: ', //cpg1.3.0
  'answer' => 'OdpowiedÅº: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'Generalne FAQ', //cpg1.3.0
  array('Dlaczego warto siÄ™ zarejestrowaÄ‡?', 'Rejestracja moÅ¼e byÄ‡ wymagana przez administratora serwisu. Zarejestrowanie siÄ™ daje uÅ¼ytkownikowi dodatkowe moÅ¼liwoÅ›ci, takie jak przesyÅ‚anie wÅ‚asnych plikÃ³w, tworzenie listy ulubionych, ocenianie zdjÄ™Ä‡, zamieszczanie komentarzy itp.', 'allow_user_registration', '0'), //cpg1.3.0
  array('Jak siÄ™ zarejestrowaÄ‡?', 'PrzejdÅº do sekcji &quot;Rejestracja&quot; i wypeÅ‚nij wymagane pola (ew. takÅ¼e pola opcjonalne).<br />JeÅ¼eli Administrator wÅ‚Ä…czyÅ‚ opcjÄ™ aktywacji przez e-mail, po wypeÅ‚nieniu formularza rejestracji, na podany tam adres pocztowy otrzymasz e-mail zawierajÄ…cy instrukcje w jaki sposÃ³b aktywowaÄ‡ konto. Aktywacja jest wymagana przed pierwszym zaÅ‚ogowaniem.', 'allow_user_registration', '1'), //cpg1.3.0
  array('Jak siÄ™ logowaÄ‡?', 'PrzejdÅº do sekcji &quot;Logowanie&quot;, WprowadÅº swojÄ… nazwÄ™ uÅ¼ytkownika i hasÅ‚o. MoÅ¼esz takÅ¼e wybraÄ‡ opcjÄ™ &quot;PamiÄ™taj mnie&quot; abyÅ› nie musiaÅ‚ logowaÄ‡ siÄ™ przy ponownym wejÅ›ciu na stronÄ™.<br /><b>WAÅ»NE: aby ta funkcja serwisu dziaÅ‚aÅ‚a naleÅ¼y wÅ‚Ä…czyÄ‡ obsÅ‚ugÄ™ plikÃ³w cookie i nie kasowaÄ‡ plikÃ³w cookie generowanych przez serwis.</b>', 'offline', 0), //cpg1.3.0
  array('Dlaczego nie mogÄ™ siÄ™ zalogowaÄ‡?', 'Czy zarejestrowaÅ‚eÅ› siÄ™ juÅ¼ i kliknÄ…Å‚eÅ› na Å‚Ä…cze z wysÅ‚anego do Ciebie e-mail\'a? ÅÄ…cze to pozwoli na aktywowanie Twojego konta. W przypadku innych kÅ‚opotÃ³w skontaktuj siÄ™ z administratorem serwisu.', 'offline', 0), //cpg1.3.0
  array('Co mam zrobiÄ‡ jeÅ¼eli zapomnÄ™ hasÅ‚a?', 'JeÅ¼eli serwis udostÄ™pnia link &quot;ZapomniaÅ‚em hasÅ‚a&quot;, uÅ¼yj go. W innym wypadku skontaktuj siÄ™ z administratorem i poproÅ› go o nowe hasÅ‚o.', 'offline', 0), //cpg1.3.0
  //array('Co mam zrobiÄ‡, jeÅ¼eli zmieniÅ‚ mi siÄ™ adres e-mail?', 'Zaloguj siÄ™ i zmieÅ„ swÃ³j e-mail w &quot;Profilu&quot;', 'offline', 0), //cpg1.3.0
  array('Jak zapisaÄ‡ plik do &quot;Moich ulubionych&quot;?', 'Kliknij na pliku, a nastÄ™pnie na Å‚Ä…czu &quot;informacji o zdjÄ™ciu&quot; (<img src="images/info.gif" width="16" height="16" border="0" alt="Picture information" />); przejdÅº na dÃ³Å‚ i kliknij &quot;Dodaj do ulubionych&quot;.<br />MoÅ¼liwe, Å¼e administrator wÅ‚Ä…czyÅ‚ opcjÄ™ domyÅ›lnego pokazywania informacji o pliku.<br />WAÅ»NE: NaleÅ¼y wÅ‚Ä…czyÄ‡ obsÅ‚ugÄ™ plikÃ³w cookie z tego serwisu i nie kasowaÄ‡ ich.', 'offline', 0), //cpg1.3.0
  array('Jak oceniÄ‡ plik?', 'Kliknij na miniaturze, przejdÅº na dÃ³Å‚ strony i wybierz odpowiedniÄ… ocenÄ™.', 'offline', 0), //cpg1.3.0
  array('Jak zamieÅ›ciÄ‡ komentarz do pliku?', 'Kliknij na miniaturze, przejdÅº na dÃ³Å‚ i w odpowiednim polu wpisz komentarz.', 'offline', 0), //cpg1.3.0
  array('Jak przesÅ‚aÄ‡ plik?', 'PrzejdÅº do &quot;PrzesyÅ‚ania zdjÄ™Ä‡&quot; i wybierz album do ktÃ³rego chcesz przesÅ‚aÄ‡ plik, kliknij &quot;PrzeglÄ…daj&quot; znajdÅº plik ktÃ³ry chcesz przesÅ‚aÄ‡, wybierz &quot;OtwÃ³rz&quot; (dodaj opis, jeÅ¼eli chcesz) i kliknij &quot;PrzeÅ›lij&quot;', 'allow_private_albums', 0), //cpg1.3.0
  array('Gdzie mogÄ™ przesÅ‚aÄ‡ plik?', 'Pliki moÅ¼na przesyÅ‚aÄ‡ do jednego z albumÃ³w w Twojej Galerii. Administrator moÅ¼e takÅ¼e zezwoliÄ‡ Ci na przesyÅ‚anie zdjÄ™Ä‡ do albumÃ³w w Galerii GÅ‚Ã³wnej.', 'allow_private_albums', 0), //cpg1.3.0
  array('Jakie pliki moÅ¼na przesyÅ‚aÄ‡? W jakiej wielkoÅ›ci?', 'Typ i rodzaj przesyÅ‚anych plikÃ³w (jpg, png, etc.) okreÅ›la administrator serwisu.', 'offline', 0), //cpg1.3.0
  array('Co to jest &quot;Moja Galeria&quot;?', '&quot;Moja Galeria&quot; to prywatna galeria ktÃ³rÄ… moÅ¼e zarzÄ…dzaÄ‡ uÅ¼ytkownik. MoÅ¼esz tam przesyÅ‚aÄ‡ swoje pliki.', 'allow_private_albums', 0), //cpg1.3.0
  array('W jaki sposÃ³b tworzyÄ‡, kasowaÄ‡ i zmieniaÄ‡ nazwy albumÃ³w w &quot;Mojej Galerii&quot;?', 'PowinieneÅ› przejÅ›Ä‡ do &quot;Trybu Administracyjnego&quot;<br />PrzejdÅº do &quot;Tworzenie/PorzÄ…dkowanie albumÃ³w&quot;i kliknij &quot;Nowy&quot;. ZmieÅ„ domyÅ›lnÄ… nazwÄ™ &quot;Nowy Album&quot; na wybranÄ… przez siebie.<br />MoÅ¼esz takÅ¼e modyfikowaÄ‡ dowolny album ze swojej galerii.<br />NastÄ™pnie kliknij &quot;Zastosuj zmiany&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('W jaki sposÃ³b zezwalaÄ‡ i odbieraÄ‡ zezwolenia na oglÄ…danie moich albumÃ³w?', 'PrzejdÅº do &quot;Trybu Administracyjnego&quot;<br />i sekcji &quot;Modyfikuj moje albumy. Na pasku &quot;Aktualizuj Album&quot; wybierz album, ktÃ³ry chcesz zmodyfikowaÄ‡. <br />MoÅ¼esz zmieniÄ‡ jego nazwÄ™, opis, miniaturÄ™, ustawiÄ‡ zezwolenia na oglÄ…danie i komentowanie/ocenianie jego zawartoÅ›ci.<br />NastÄ™pnie kliknij &quot;Aktualizuj album&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Co zrobiÄ‡ by mÃ³c obejrzeÄ‡ galerie innych uÅ¼ytkownikÃ³w?', 'PrzejdÅº do &quot;Listy AlbumÃ³w&quot; i wybierz &quot;Galerie uÅ¼ytkownikÃ³w&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Co to sÄ… pliki cookie?', 'Pliki cookie zawierajÄ… dane tekstowe zapisywane przez stronÄ™ internetowÄ… na Twoim komputerze. <br />Zazwyczaj pozwalajÄ… uÅ¼ytkownikowi opuÅ›ciÄ‡ stronÄ™ i wejÅ›Ä‡ na niÄ… ponownie bez koniecznoÅ›ci ponownego logowania.', 'offline', 0), //cpg1.3.0
  array('SkÄ…d mogÄ™ pobraÄ‡ ten program aby umieÅ›ciÄ‡ go we wÅ‚asnym serwisie?', 'Galeria Coppermine jest darmowÄ… galeriÄ… multimediÃ³w, rozpowszechnianÄ… na licencji GNU GPL. Zawiera rozbudowanÄ… funkcjonalnoÅ›Ä‡ i zostaÅ‚a przygotowana na rÃ³Å¼ne platformy. OdwiedÅº <a href="http://coppermine.sf.net/">stronÄ™ domowÄ… Coppermine</a> by dowiedzieÄ‡ siÄ™ wiÄ™cej i Å›ciÄ…gnÄ…Ä‡ najnowszÄ… wersjÄ™ programu.', 'offline', 0), //cpg1.3.0

  'Nawigowanie po stronie', //cpg1.3.0
  array('Co to jest &quot;Lista albumÃ³w&quot;?', 'Lista albumÃ³w pokazuje caÅ‚Ä… kategoriÄ™, w ktÃ³rej obecnie siÄ™ znajdujesz wraz z Å‚Ä…czami do kaÅ¼dego albumu. JeÅ¼eli nie znajdujesz siÄ™ obecnie w Å¼adnej kategorii, lista albumÃ³w wyÅ›wietli caÅ‚Ä… zawartoÅ›Ä‡ galerii wraz z Å‚Ä…czami do kategorii, ktÃ³re zawiera. Miniatury mogÄ… byÄ‡ takÅ¼e Å‚Ä…czami do kategorii..', 'offline', 0), //cpg1.3.0
  array('Czym jest &quot;Moja Galeria&quot;?', 'Opcja ta umoÅ¼liwia uÅ¼ytkownikowi serwisu tworzenie wÅ‚asnej galerii, dodawanie, kasowanie i modyfikowanie albumÃ³w, oraz przesyÅ‚anie do nich plikÃ³w.', 'allow_private_albums', 0), //cpg1.3.0
  array('Czym rÃ³Å¼ni siÄ™ &quot;Tryb Administracyjny&quot; od &quot;Trybu uÅ¼ytkownika&quot;?', 'Tryb administracyjny umoÅ¼liwia zarzÄ…dzanie albumami znajdujÄ…cymi siÄ™ w Twojej prywatnej galerii (a takÅ¼e innymi albumami - jeÅ¼eli zezwoliÅ‚ na to administrator).', 'allow_private_albums', 0), //cpg1.3.0
  array('Co to jest &quot;PrzesÅ‚anie pliku&quot;?', 'To moÅ¼liwoÅ›Ä‡ przesÅ‚ania pliku (jego rodzaj i wielkoÅ›Ä‡ sÄ… okreÅ›lone przez administratora) do wybranych albumÃ³w', 'allow_private_albums', 0), //cpg1.3.0
  array('Co to sÄ… &quot;Ostatnie aktualizacje&quot;?', 'UmoÅ¼liwiajÄ… przejrzenie ostatnio dodanych do strony plikÃ³w.', 'offline', 0), //cpg1.3.0
  array('Co to sÄ… &quot;Ostatnie komentarze&quot;?', 'Ta opcja pokazuje ostatnio dodane przez uÅ¼ytkownikÃ³w komentarze, oraz pliki ktÃ³rych dotyczÄ….', 'offline', 0), //cpg1.3.0
  array('Czym jest opcja What\'s &quot;Najpopularniejsze&quot;?', 'Opcja ta pokazuje najczÄ™Å›ciej oglÄ…dane pliki (dotyczy wszystkich uÅ¼ytkownikÃ³w - zarÃ³wno tych zalogowanych jak i niezalogowanych).', 'offline', 0), //cpg1.3.0
  array('Co to jest &quot;Top Lista&quot;?', 'Top lista zawiera listÄ™ najwyÅ¼ej ocenianych plikÃ³w wraz z ich Å›redniÄ… ocenÄ… (np. piÄ™ciu uÅ¼ytkownikÃ³w gÅ‚osuje z ocenÄ… <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: plikowi zostanie przyznana ocena <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;lub wÅ›rÃ³d piÄ™ciu innych uÅ¼ytkownikÃ³w kaÅ¼dy daje plikowi ocenÄ™ od 1 do 5 (1,2,3,4,5) co spowoduje przyznanie plikowi Å›redniej oceny <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />Klasyfikacja przedstawia siÄ™ nastÄ™pujÄ…co: od <img src="images/rating5.gif" width="65" height="14" border="0" alt="najlepsze" /> (najlepsze) do <img src="images/rating0.gif" width="65" height="14" border="0" alt="najgorsze" /> (najgorsze).', 'offline', 0), //cpg1.3.0
  array('Czym sÄ… &quot;Ulubione&quot;?', 'Ta opcja pozwala uÅ¼ytkownikowi przechowywaÄ‡ odnoÅ›niki do ulubionych plikÃ³w z galerii w pliku cookie zapisywanym przez przeglÄ…darkÄ™.', 'offline', 0), //cpg1.3.0
);



// ------------------------------------------------------------------------- //
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Przypomnienie hasÅ‚a', //cpg1.3.0
  'err_already_logged_in' => 'JesteÅ› juÅ¼ zalogowany!', //cpg1.3.0
  'enter_username_email' => 'Podaj nazwÄ™ uÅ¼ytkownika lub adres e-mail', //cpg1.3.0
  'submit' => 'dalej', //cpg1.3.0
  'failed_sending_email' => 'E-mail z przypomnieniem hasÅ‚a nie moÅ¼e zostaÄ‡ wysÅ‚any!', //cpg1.3.0
  'email_sent' => 'E-mail z nazwÄ… uÅ¼ytkownika i hasÅ‚em zostaÅ‚ wysÅ‚any na adres %s', //cpg1.3.0
  'err_unk_user' => 'Wybrany uÅ¼ytkownik nie istnieje!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - Przypomnienie hasÅ‚a', //cpg1.3.0
  'passwd_reminder_body' => 'PoprosiÅ‚eÅ› o przesÅ‚anie Twoich danych uÅ¼ytkownika:
Nazwa uÅ¼ytkownika: %s
HasÅ‚o: %s
Kliknij %s aby siÄ™ zalogowaÄ‡.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Nazwa grupy',
  'disk_quota' => 'Miejsce na dane',
  'can_rate' => 'MoÅ¼e oceniaÄ‡ pliki', //cpg1.3.0
  'can_send_ecards' => 'MoÅ¼e wysyÅ‚aÄ‡ e-kartki',
  'can_post_com' => 'MoÅ¼e zamieszczaÄ‡ komentarze',
  'can_upload' => 'MoÅ¼e przesyÅ‚aÄ‡ pliki', //cpg1.3.0
  'can_have_gallery' => 'MoÅ¼e mieÄ‡ galeriÄ™ osobistÄ…',
  'apply' => 'Zastosuj zmiany',
  'create_new_group' => 'StwÃ³rz nowÄ… grupÄ™',
  'del_groups' => 'Skasuj zaznaczonÄ… grupÄ™/y',
  'confirm_del' => 'Uwaga: jeÅ¼eli skasujesz tÄ™ grupÄ™ jej czÅ‚onkowie zostanÄ… przeniesieni do grupy \'Zarejestrowani\'!\n\nKontynuowaÄ‡?',
  'title' => 'ZarzÄ…dzanie grupami',
  'approval_1' => 'Zgoda na pub. upl.(1)',
  'approval_2' => 'Zgoda na priv. upl.(2)',
  'upload_form_config' => 'Konfiguracja formularza przesyÅ‚ania', //cpg1.3.0
  'upload_form_config_values' => array( 'PrzesyÅ‚anie pojedynczych plikÃ³w', 'PrzesyÅ‚anie wielu plikÃ³w', 'PrzesyÅ‚anie URI', 'PrzesyÅ‚anie ZIP', 'Plik-URI', 'Plik-ZIP', 'URI-ZIP', 'Plik-URI-ZIP'), //cpg1.3.0
  'custom_user_upload'=>'UÅ¼ytkownik moÅ¼e wybieraÄ‡ iloÅ›Ä‡ pÃ³l do przesyÅ‚ania?', //cpg1.3.0
  'num_file_upload'=>'Maksymalna/dokÅ‚adna iloÅ›Ä‡ pÃ³l przesyÅ‚ania plikÃ³w', //cpg1.3.0
  'num_URI_upload'=>'Maksymalna/dokÅ‚adna iloÅ›Ä‡ pÃ³l przesyÅ‚ania URI', //cpg1.3.0
  'note1' => '<b>(1)</b> PrzesyÅ‚anie zdjÄ™Ä‡ do albumu publicznego wymaga zgody administratora',
  'note2' => '<b>(2)</b> PrzesyÅ‚anie zdjÄ™Ä‡ do albumu uÅ¼ytkownika wymaga zgody administratora',
  'notes' => 'Uwagi'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Witaj !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Czy na pewno chcesz skasowaÄ‡ ten album? \\nZostanÄ… skasowane rÃ³wnieÅ¼ wszystkie pliki i komentarze.', //js-alert //cpg1.3.0
  'delete' => 'KASUJ',
  'modify' => 'WÅAÅšCIWOÅšCI',
  'edit_pics' => 'EDYCJA PLIKÃ“W', //cpg1.3.0
);

$lang_list_categories = array(
  'home' => 'Strona gÅ‚Ã³wna',
  'stat1' => 'pliki: <b>[pictures]</b>, albumy: <b>[albums]</b>, kategorie: <b>[cat]</b>, komentarze: <b>[comments]</b>, odsÅ‚ony: <b>[views]</b>', //cpg1.3.0
  'stat2' => 'pliki: <b>[pictures]</b>, albumy: <b>[albums]</b>, odsÅ‚ony: <b>[views]</b>', //cpg1.3.0
  'xx_s_gallery' => 'galeria %s', //cpg1.3.0
  'stat3' => 'pliki: <b>[pictures]</b>, albumy: <b>[albums]</b>, komentarze: <b>[comments]</b>, odsÅ‚ony: <b>[views]</b>', //cpg1.3.0
);

$lang_list_users = array(
  'user_list' => 'Lista uÅ¼ytkownikÃ³w',
  'no_user_gal' => 'Galerie uÅ¼ytkownikÃ³w nie istniejÄ… lub nie masz do nich dostÄ™pu',
  'n_albums' => 'albumÃ³w: %s',
  'n_pics' => 'plikÃ³w: %s',  //cpg1.3.0
);

$lang_list_albums = array(
  'n_pictures' => 'plikÃ³w: %s', //cpg1.3.0
  'last_added' => ', ostatnio dodany: %s',
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Logowanie',
  'enter_login_pswd' => 'Podaj nazwÄ™ uÅ¼ytkownika i hasÅ‚o aby siÄ™ zalogowaÄ‡',
  'username' => 'Nazwa uÅ¼ytkownika',
  'password' => 'HasÅ‚o',
  'remember_me' => 'PamiÄ™taj mnie',
  'welcome' => 'Witaj %s ...',
  'err_login' => '*** Logowanie nieudane, sprÃ³buj ponownie ***',
  'err_already_logged_in' => 'JesteÅ› juÅ¼ zalogowany/a!',
  'forgot_password_link' => 'ZapomniaÅ‚em hasÅ‚a', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Wylogowywanie',
  'bye' => 'Pa pa %s ...',
  'err_not_loged_in' => 'Nie jesteÅ› zalogowany/a!',
);

// ------------------------------------------------------------------------- //
// File phpinfo.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP info', //cpg1.3.0
  'explanation' => 'Dane generowane przez funkcjÄ™ <a href="http://www.php.net/phpinfo">phpinfo()</a>, wyÅ›wietlane przez Coppermine (obcinanie wyjÅ›cia przy prawym rogu).', //cpg1.3.0
  'no_link' => 'OglÄ…danie tych informacji przez osoby nieuprawnione moÅ¼e stanowiÄ‡ zagroÅ¼enie bezpieczeÅ„stwa, dlatego teÅ¼ stronÄ™ tÄ™ moÅ¼na oglÄ…daÄ‡ tylko po zalogowaniu siÄ™ jako administrator. Nie moÅ¼esz podaÄ‡ Å‚Ä…cza do tej strony innym uÅ¼ytkownikom, nie uzyskajÄ… oni dostÄ™pu do strony.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Uaktualnij album %s',
  'general_settings' => 'Ustawienia ogÃ³lne',
  'alb_title' => 'TytuÅ‚ albumu',
  'alb_cat' => 'Kategoria albumu',
  'alb_desc' => 'Opis albumu',
  'alb_thumb' => 'Miniatury',
  'alb_perm' => 'Uprawnienia albumu',
  'can_view' => 'MoÅ¼e byÄ‡ oglÄ…dany przez',
  'can_upload' => 'GoÅ›cie mogÄ… przesyÅ‚aÄ‡ pliki',
  'can_post_comments' => 'GoÅ›cie mogÄ… dodawaÄ‡ komentarze',
  'can_rate' => 'GoÅ›cie mogÄ… oceniaÄ‡ pliki',
  'user_gal' => 'Galeria uÅ¼ytkownika',
  'no_cat' => '* Bez kategorii *',
  'alb_empty' => 'Album jest pusty',
  'last_uploaded' => 'Ostatnio przesÅ‚ane',
  'public_alb' => 'Wszyscy (album publiczny)',
  'me_only' => 'Tylko ja',
  'owner_only' => 'Tylko wÅ‚aÅ›ciciel albumu: (%s)',
  'groupp_only' => 'CzÅ‚onkowie grupy: \'%s\'',
  'err_no_alb_to_modify' => 'Nie moÅ¼na modyfikowaÄ‡ Å¼adnego albumu w bazie.',
  'update' => 'Uaktualnij album', //cpg1.3.0
  'notice1' => '(*) w zaleÅ¼noÅ›ci od ustawieÅ„ %sgrupy%',
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Niestety, juÅ¼ oceniaÅ‚eÅ› ten plik', //cpg1.3.0
  'rate_ok' => 'TwÃ³j gÅ‚os zostaÅ‚ zarejestrowany',
  'forbidden' => 'Nie moÅ¼esz oceniaÄ‡ swoich wÅ‚asnych plikÃ³w.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Administratorzy serwisu {SITE_NAME} dokÅ‚adajÄ… wszelkich staraÅ„ by usuwaÄ‡ lub zmieniaÄ‡ publikowane przez uÅ¼ytkownikÃ³w treÅ›ci ogÃ³lnie przyjÄ™te za obraÅºliwe, Å‚amiÄ…ce prawo, lub obsceniczne, jest jednak niemoÅ¼liwe by przejrzeÄ‡ kaÅ¼dy post. Dlatego musisz zobowiÄ…zaÄ‡ siÄ™, Å¼e wszelkie opinie, materiaÅ‚y i komentarze jakie zamieÅ›cisz na stronach serwisu reprezentujÄ… wyÅ‚Ä…cznie Twoje poglÄ…dy, a nie poglÄ…dy osÃ³b zarzÄ…dzajÄ…cych serwisem.<br />
<br />
Niniejszym zobowiÄ…zujesz siÄ™, by nie zamieszczaÄ‡ na stronach serwisu {SITE_NAME} materiaÅ‚Ã³w obraÅºliwych, obscenicznych, wulgarnych, pornograficznych, nawoÅ‚ujÄ…cych do uÅ¼ycia przemocy, stanowiÄ…cych zagroÅ¼enie dla bezpieczeÅ„stwa publicznego, oraz innych materiaÅ‚Ã³w, ktÃ³rych przedstawienie na stronach serwisu mogÅ‚oby stanowiÄ‡ zÅ‚amanie obowiÄ…zujÄ…cego prawa. Przyjmujesz do wiadomoÅ›ci, Å¼e administrator lub moderatorzy serwisu {SITE_NAME} majÄ… prawo do edycji i usuwania dowolnych zamieszczonych przez Ciebie treÅ›ci niezgodnych z tym regulaminem. Jako uÅ¼ytkownik serwisu zgadzasz siÄ™ na przechowywanie informacji niezbÄ™dnych do obsÅ‚ugi Twojego konta w bazie danych serwisu, oraz otrzymujesz prawo do ich modyfikacji oraz usuniÄ™cia w dowolnej chwili. W tym celu naleÅ¼y skontaktowaÄ‡ siÄ™ z administratorem serwisu. Informacje te nie bÄ™dÄ… przekazywane osobom trzecim bez Twojej zgody, jednakÅ¼e administratorzy serwisu nie mogÄ… ponoszÄ… odpowiedzialnoÅ›ci za kradzieÅ¼ tych informacji w wypadku dziaÅ‚aÅ„ osÃ³b nieuprawnionych.<br />
<br />
Serwis {SITE_NAME} uÅ¼ywa plikÃ³w cookie do przechowywania informacji na Twoim komputerze. SÅ‚uÅ¼Ä… one jedynie do poprawienia komfortu przeglÄ…dania zawartoÅ›ci serwisu. TwÃ³j adres e-mail jest uÅ¼ywany jedynie do wysyÅ‚ania potwierdzeÅ„ dotyczÄ…cych rejestracji w serwisie. <br />
<br />
KlikniÄ™cie znajdujÄ…cego siÄ™ poniÅ¼ej przycisku 'Zgadzam siÄ™' oznacza zgodÄ™ na przedstawiony wyÅ¼ej regulamin serwisu.
EOT;


$lang_register_php = array(
  'page_title' => 'Rejestrowanie uÅ¼ytkownika',
  'term_cond' => 'Warunki korzystania z serwisu',
  'i_agree' => 'Zgadzam siÄ™',
  'submit' => 'Wykonaj rejestracjÄ™',
  'err_user_exists' => 'Nazwa uÅ¼ytkownika ktÃ³rÄ… wybraÅ‚eÅ› juÅ¼ istnieje. Wybierz innÄ…',
  'err_password_mismatch' => 'HasÅ‚a nie pasujÄ… do siebie. Wpisz je ponownie',
  'err_uname_short' => 'Nazwa uÅ¼ytkownika musi mieÄ‡ co najmniej 2 znaki',
  'err_password_short' => 'HasÅ‚o musi mieÄ‡ co najmniej 2 znaki',
  'err_uname_pass_diff' => 'Nazwa uÅ¼ytkownika i hasÅ‚o muszÄ… siÄ™ od siebie rÃ³Å¼niÄ‡',
  'err_invalid_email' => 'Adres e-mail jest niepoprawny',
  'err_duplicate_email' => 'W bazie jest juÅ¼ uÅ¼ytkownik o podanym przez Ciebie adresie e-mail',
  'enter_info' => 'WprowadÅº informacje potrzebne do rejestracji',
  'required_info' => 'Informacje wymagane',
  'optional_info' => 'Informacje opcjonalne',
  'username' => 'Nazwa uÅ¼ytkownika',
  'password' => 'HasÅ‚o',
  'password_again' => 'WprowadÅº ponownie hasÅ‚o',
  'email' => 'E-mail',
  'location' => 'Lokalizacja',
  'interests' => 'Zainteresowania',
  'website' => 'Strona domowa',
  'occupation' => 'ZajÄ™cie / zawÃ³d',
  'error' => 'BÅÄ„D',
  'confirm_email_subject' => '%s - Informacja o rejestracji',
  'information' => 'Informacja',
  'failed_sending_email' => 'E-mail z potwierdzeniem nie moÅ¼e byÄ‡ wysÅ‚any!',
  'thank_you' => 'DziÄ™kujemy za rejestracjÄ™.<br /><br />Na podany przez Ciebie adres e-mail zostaÅ‚ wysÅ‚any list z proÅ›bÄ… o potwierdzenie.',
  'acct_created' => 'Konto zostaÅ‚o utworzone. MoÅ¼esz juÅ¼ zalogowaÄ‡ siÄ™ podajÄ…c wybranÄ… wczesniej nazwÄ™ uÅ¼ytkownika, oraz hasÅ‚o',
  'acct_active' => 'Konto jest juÅ¼ aktywne. MoÅ¼esz juÅ¼ zalogowaÄ‡ siÄ™ podajÄ…c wybranÄ… wczesniej nazwÄ™ uÅ¼ytkownika, oraz hasÅ‚o',
  'acct_already_act' => 'Twoje konto zostaÅ‚o juÅ¼ aktywowane!',
  'acct_act_failed' => 'Te konto nie moÅ¼e byÄ‡ aktywowane!',
  'err_unk_user' => 'Podany uÅ¼ytkownik nie istnieje!',
  'x_s_profile' => 'profil: %s',
  'group' => 'Grupa',
  'reg_date' => 'DoÅ‚Ä…czyÅ‚/a',
  'disk_usage' => 'UÅ¼yte miejsce',
  'change_pass' => 'ZmieÅ„ hasÅ‚o',
  'current_pass' => 'BieÅ¼Ä…ce hasÅ‚o',
  'new_pass' => 'Nowe hasÅ‚o',
  'new_pass_again' => 'Podaj ponownie nowe hasÅ‚o',
  'err_curr_pass' => 'BieÅ¼Ä…ce hasÅ‚o jest niepoprawne',
  'apply_modif' => 'Zastosuj zmiany',
  'change_pass' => 'ZmiaÅ„ moje hasÅ‚o',
  'update_success' => 'TwÃ³j profil zostaÅ‚ uaktualniony',
  'pass_chg_success' => 'Twoje hasÅ‚o zostaÅ‚o zmienione',
  'pass_chg_error' => 'Twoje hasÅ‚o nie zostaÅ‚o zmienione',
  'notify_admin_email_subject' => '%s - powiadomienie o rejestracji', //cpg1.3.0
  'notify_admin_email_body' => 'W galerii zarejestrowaÅ‚ siÄ™ nowy uÅ¼ytkownik o nazwie "%s"', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
DziÄ™kujemy za rejestracjÄ™ w witrynie {SITE_NAME}

Twoja nazwa uÅ¼ytkownika to: "{USER_NAME}"
Twoje hasÅ‚o to: "{PASSWORD}"

Aby aktywowaÄ‡ konto kliknij na poniÅ¼szy link albo skopiuj go
i wklej do swojej przeglÄ…darki internetowej.

{ACT_LINK}

Pozdrowienia,

ZespÃ³Å‚ strony {SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'PrzeglÄ…daj komentarze',
  'no_comment' => 'Nie ma komentarzy do przeglÄ…dania',
  'n_comm_del' => 'Skasowano komentarzy: %s',
  'n_comm_disp' => 'IloÅ›Ä‡ komentarzy do wyÅ›wietlenia',
  'see_prev' => 'Zobacz poprzednie',
  'see_next' => 'Zobacz nastÄ™pne',
  'del_comm' => 'Skasuj wybrane komentarze',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
  0 => 'Wyszukiwarka zdjÄ™Ä‡',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Szukaj plikÃ³w', //cpg1.3.0
  'select_dir' => 'Wybierz katalog',
  'select_dir_msg' => 'Wybrana funkcja umoÅ¼liwia wsadowe dodawanie do galerii zdjÄ™Ä‡ ktÃ³re zostaÅ‚y przesÅ‚ane na serwer.<br /><br />Wybierz katalog do ktÃ³rego zostaÅ‚y przesÅ‚ane wybrane pliki', //cpg1.3.0
  'no_pic_to_add' => 'Nie ma pliku do dodania', //cpg1.3.0
  'need_one_album' => 'UÅ¼ycie tej funckji wymaga istnienia przynajmniej jednego albumu do ktÃ³rego masz uprawnienia',
  'warning' => 'Uwaga',
  'change_perm' => 'skrypt nie moÅ¼e zapisywaÄ‡ plikÃ³w do wybranego katalogu. ZmieÅ„ ustawienia na 755 lub 777 zanim sprÃ³bujesz dodaÄ‡ pliki!', //cpg1.3.0
  'target_album' => '<b>Zapisuje zdjÄ™cia do katalogu &quot;</b>%s<b>&quot; </b>%s', //cpg1.3.0
  'folder' => 'Katalog',
  'image' => 'plik',
  'album' => 'Album',
  'result' => 'Wynik',
  'dir_ro' => 'Nie moÅ¼na zapisaÄ‡. ',
  'dir_cant_read' => 'Nie moÅ¼na odczytaÄ‡. ',
  'insert' => 'Dodawanie nowych plikÃ³w do galerii', //cpg1.3.0
  'list_new_pic' => 'Lista nowych plikÃ³w', //cpg1.3.0
  'insert_selected' => 'Wstaw wybrane pliki', //cpg1.3.0
  'no_pic_found' => 'Nie znaleziono nowych plikÃ³w', //cpg1.3.0
  'be_patient' => 'ProszÄ™ o cierpliwoÅ›Ä‡, skrypt potrzebuje czasu na dodanie zdjÄ™Ä‡', //cpg1.3.0
  'no_album' => 'nie wybrano albumu',  //cpg1.3.0
  'notes' =>  '<ul>'.
  '<li><b>OK</b> : oznacza, Å¼e zdjÄ™cie zostaÅ‚o dodane'.
  '<li><b>DP</b> : oznacza, Å¼e zdjÄ™cie jest zduplikowane i istnieje juÅ¼ w bazie'.
  '<li><b>PB</b> : oznacza brak moÅ¼liwoÅ›ci dodania pliku. SprawdÅº swoje uprawnienia do zapisywania katalogÃ³w i plikÃ³w'.
  '<li><b>NA</b> : oznacza, Å¼e nie wybraÅ‚eÅ› albumu do ktÃ³rego miaÅ‚yby trafiÄ‡ pliki, kliknij \'<a href="javascript:history.back(1)">tutaj</a>\' i wybierz album. JeÅ¼eli nie masz jeszcze albumu, <a href="albmgr.php">utwÃ³rz tutaj nowy</a></li>'.
  '<li>JeÅ¼eli \'znaki\' OK, DP, PB nie pojawiajÄ… siÄ™, kliknij na pliku aby otrzymaÄ‡ komunikat generowany przez PHP'.
  '<li>JeÅ¼eli przeglÄ…darka nie zaÅ‚adowaÅ‚a strony, wciÅ›nij klawisz F5 aby jÄ… odÅ›wieÅ¼yÄ‡'.
  '</ul>', //cpg1.3.0
  'select_album' => 'wybierz album', //cpg1.3.0
  'check_all' => 'Zaznacz wszystkie', //cpg1.3.0
  'uncheck_all' => 'Odznacz wszystkie', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Banuj UÅ¼ytkownikÃ³w', 
  'user_name' => 'Nazwa uÅ¼ytkownika', 
  'ip_address' => 'Adres IP', 
  'expiry' => 'Aktywny do daty<br>(pusta - na staÅ‚e)', 
  'edit_ban' => 'Zapisz zmiany', 
  'delete_ban' => 'Kasuj', 
  'add_new' => 'Dodaj nowy ban', 
  'add_ban' => 'Dodaj', 
  'error_user' => 'Nie moÅ¼na znaleÅºÄ‡ takiego uÅ¼ytkownika', //cpg1.3.0
  'error_specify' => 'Musisz okreÅ›liÄ‡ nazwÄ™ uÅ¼ytkownika lub address IP', //cpg1.3.0
  'error_ban_id' => 'NiewÅ‚aÅ›ciwy ID!', //cpg1.3.0
  'error_admin_ban' => 'Nie moÅ¼na banowaÄ‡ samego siebie!', //cpg1.3.0
  'error_server_ban' => 'ChciaÅ‚eÅ› zabanowaÄ‡ swÃ³j wÅ‚asny serwer? Hehe, nie moÅ¼na tego robiÄ‡...', //cpg1.3.0
  'error_ip_forbidden' => 'Nie moÅ¼na banowaÄ‡ tego adresu IP - jest nieroute\'owalny!', //cpg1.3.0
  'lookup_ip' => 'Sprawdz adres IP', //cpg1.3.0
  'submit' => 'dalej!', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Upload file', //cpg1.3.0
  'custom_title' => 'Spersonalizowany formularz przesyÅ‚ania', //cpg1.3.0
  'cust_instr_1' => 'MoÅ¼esz wybraÄ‡ wÅ‚asnÄ… liczbÄ™ pÃ³l sÅ‚uÅ¼Ä…cych do przesyÅ‚ania plikÃ³w, jednak nie zostanie pokazane ich wiÄ™cej niÅ¼ w limicie okreÅ›lonym poniÅ¼ej.', //cpg1.3.0
  'cust_instr_2' => 'Personalizacja formularza', //cpg1.3.0
  'cust_instr_3' => 'IloÅ›Ä‡ pÃ³l przesyÅ‚ania: %s', //cpg1.3.0
  'cust_instr_4' => 'Pola przesyÅ‚ania URI/URL: %s', //cpg1.3.0
  'cust_instr_5' => 'Pola przesyÅ‚ania URI/URL:', //cpg1.3.0
  'cust_instr_6' => 'Pola przesyÅ‚ania plikÃ³w:', //cpg1.3.0
  'cust_instr_7' => 'Podaj liczbÄ™ kaÅ¼dego z rodzajÃ³w pÃ³l przesyÅ‚ania plikÃ³w, jakich potrzebujesz. NastÄ™pnie kliknij \'Dalej\'. ', //cpg1.3.0
  'reg_instr_1' => 'Nieudane tworzenie formularza.', //cpg1.3.0
  'reg_instr_2' => 'MoÅ¼esz przesyÅ‚aÄ‡ pliki przy pomocy poniÅ¼szych pÃ³l. Rozmiar plikÃ³w przesyÅ‚anych na serwer nie moÅ¼e przekroczyÄ‡ %s KB kaÅ¼dy. Pliki ZIP przesÅ‚ane w sekcjach \'PrzesÅ‚anie pliku\' oraz \'PrzesÅ‚anie URI/URL\' pozostanÄ… skompresowane.', //cpg1.3.0
  'reg_instr_3' => 'JeÅ¼eli chcesz aby spakowane pliki zostaÅ‚y zdekompresowane, uÅ¼yj pola przesyÅ‚ania plikÃ³w w sekcji \'PrzesyÅ‚anie z rozpakowaniem ZIP\'', //cpg1.3.0
  'reg_instr_4' => 'Przy przesyÅ‚aniu plikÃ³w w sekcji PrzesyÅ‚ania URI/URL, podaj caÅ‚Ä… Å›cieÅ¼kÄ™ do pliku, np: http://www.mojastrona.com/images/foto.jpg', //cpg1.3.0
  'reg_instr_5' => 'Po uzupeÅ‚nieniu formularza, uÅ¼yj przycisku \'Dalej\'.', //cpg1.3.0
  'reg_instr_6' => 'PrzesyÅ‚anie z rozpakowaniem ZIP:', //cpg1.3.0
  'reg_instr_7' => 'PrzesyÅ‚anie plikÃ³w:', //cpg1.3.0
  'reg_instr_8' => 'PrzesyÅ‚anie URI/URL:', //cpg1.3.0
  'error_report' => 'Raport bÅ‚Ä™dÃ³w', //cpg1.3.0
  'error_instr' => 'WystÄ…piÅ‚y bÅ‚Ä™dy przy nastÄ™pujÄ…cych plikach:', //cpg1.3.0
  'file_name_url' => 'Nazwa pliku/URL', //cpg1.3.0
  'error_message' => 'WiadomoÅ›Ä‡ bÅ‚Ä™du', //cpg1.3.0
  'no_post' => 'Plik nie zostaÅ‚ przesÅ‚any metodÄ… POST.', //cpg1.3.0
  'forb_ext' => 'Zabronione rozszerzenie pliku.', //cpg1.3.0
  'exc_php_ini' => 'Przekroczono wielkoÅ›Ä‡ plku okreÅ›lonÄ… w php.ini.', //cpg1.3.0
  'exc_file_size' => 'Przekroczono wielkoÅ›Ä‡ plku okreÅ›lonÄ… w konfiguracji CPG.', //cpg1.3.0
  'partial_upload' => 'UdaÅ‚o siÄ™ tylko czÄ™Å›ciowo przesÅ‚aÄ‡ plik.', //cpg1.3.0
  'no_upload' => 'Nie doszÅ‚o do przesÅ‚ania.', //cpg1.3.0
  'unknown_code' => 'Nieznany bÅ‚Ä…d przesyÅ‚ania PHP.', //cpg1.3.0
  'no_temp_name' => 'Nie udaÅ‚o siÄ™ przesÅ‚aÄ‡ pliku ze wzglÄ™du na brak tymczasowej nazwy.', //cpg1.3.0
  'no_file_size' => 'Plik nie zawiera danych lub jest uszkodzony', //cpg1.3.0
  'impossible' => 'Nie moÅ¼na przenieÅ›Ä‡ pliku.', //cpg1.3.0
  'not_image' => 'Plik nie jest obrazem lub jest uszkodzony', //cpg1.3.0
  'not_GD' => 'Brak rozszerzenia GD.', //cpg1.3.0
  'pixel_allowance' => 'Przekroczono rozmiar podany w pikselach.', //cpg1.3.0
  'incorrect_prefix' => 'NiewÅ‚aÅ›ciwy prefiks URI/URL', //cpg1.3.0
  'could_not_open_URI' => 'Nie moÅ¼na otworzyÄ‡ URI.', //cpg1.3.0
  'unsafe_URI' => 'Nie moÅ¼na potwierdziÄ‡ bezpieczeÅ„stwa.', //cpg1.3.0
  'meta_data_failure' => 'BÅ‚Ä…d metadanych', //cpg1.3.0
  'http_401' => '401 - Brak dostÄ™pu', //cpg1.3.0
  'http_402' => '402 - Wymagana opÅ‚ata', //cpg1.3.0
  'http_403' => '403 - DostÄ™p zabroniony', //cpg1.3.0
  'http_404' => '404 - Nie znaleziono', //cpg1.3.0
  'http_500' => '500 - WewnÄ™trzny bÅ‚Ä…d serwera', //cpg1.3.0
  'http_503' => '503 - UsÅ‚uga niedostÄ™pna', //cpg1.3.0
  'MIME_extraction_failure' => 'nie moÅ¼na okreÅ›liÄ‡ MIME.', //cpg1.3.0
  'MIME_type_unknown' => 'Nieznany typ MIME', //cpg1.3.0
  'cant_create_write' => 'Nie moÅ¼na stworzyÄ‡/zapisaÄ‡ pliku.', //cpg1.3.0
  'not_writable' => 'Nie moÅ¼na zapisaÄ‡ do pliku.', //cpg1.3.0
  'cant_read_URI' => 'Nie moÅ¼na czytaÄ‡ URI/URL', //cpg1.3.0
  'cant_open_write_file' => 'Nie moÅ¼na otworzyÄ‡ pliku URI do zapisu.', //cpg1.3.0
  'cant_write_write_file' => 'Nie moÅ¼na zapisaÄ‡ pliku zapisywalnego URI.', //cpg1.3.0
  'cant_unzip' => 'Nie moÅ¼na zdekompresowaÄ‡.', //cpg1.3.0
  'unknown' => 'Nieznany bÅ‚Ä…d', //cpg1.3.0
  'succ' => 'Udane przesÅ‚anie', //cpg1.3.0
  'success' => 'Udane przesÅ‚anie plikÃ³w: %s.', //cpg1.3.0
  'add' => 'Kliknij \'Continue\' by dodaÄ‡ pliki do albumÃ³w.', //cpg1.3.0
  'failure' => 'Nieudane przesÅ‚anie', //cpg1.3.0
  'f_info' => 'Informacja o pliku', //cpg1.3.0
  'no_place' => 'Poprzedni plik nie zostaÅ‚ umieszczony w albumie.', //cpg1.3.0
  'yes_place' => 'Poprzedni plik zostaÅ‚ umieszczony w albumie.', //cpg1.3.0
  'max_fsize' => 'Maksymalny rozmiar przesyÅ‚anego pliku to %s KB',
  'album' => 'Album',
  'picture' => 'Plik', //cpg1.3.0
  'pic_title' => 'TytuÅ‚ pliku', //cpg1.3.0
  'description' => 'Opis pliku', //cpg1.3.0
  'keywords' => 'SÅ‚owa kluczowe (oddzielone spacjami)',
  'err_no_alb_uploadables' => 'Niestety, nie ma albumu do ktÃ³rego mÃ³gÅ‚byÅ› przesÅ‚aÄ‡ pliki', //cpg1.3.0
  'place_instr_1' => 'ProszÄ™ umieÅ›ciÄ‡ teraz pliki w albumach. MoÅ¼esz teraz takÅ¼e wprowadziÄ‡ stosowne informacje o kaÅ¼dym z plikÃ³w.', //cpg1.3.0
  'place_instr_2' => 'SÄ… jeszcze pliki wymagajÄ…ce umieszczenia. ProszÄ™ kliknÄ…Ä‡ \'Dalej\'.', //cpg1.3.0
  'process_complete' => 'Wszystkie pliki umieszczono w albumach.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'title' => 'ZarzÄ…dzanie uÅ¼ytkownikami',
  'name_a' => 'Nazwa rosnÄ…co',
  'name_d' => 'Nazwa malejÄ…co',
  'group_a' => 'Grupa rosnÄ…co',
  'group_d' => 'Grupa malejÄ…co',
  'reg_a' => 'Data rej. rosnÄ…co',
  'reg_d' => 'Data rej. malejÄ…co',
  'pic_a' => 'Liczba plikÃ³w rosnÄ…co',
  'pic_d' => 'Liczba plikÃ³w malejÄ…co',
  'disku_a' => 'UÅ¼ycie dysku rosnÄ…co',
  'disku_d' => 'UÅ¼ycie dysku malejÄ…co',
  'lv_a' => 'Ostatnie wizyty rosnÄ…co', //cpg1.3.0
  'lv_d' => 'Ostatnie wizyty malejÄ…co', //cpg1.3.0
  'sort_by' => 'Posortuj uÅ¼ytkownikÃ³w wg',
  'err_no_users' => 'Tabela uÅ¼ytkownikÃ³w jest pusta!',
  'err_edit_self' => 'Nie moÅ¼esz modyfikowaÄ‡ teraz swojego profilu. Aby to zrobiÄ‡ kliknij Å‚Ä…cze \'MÃ³j profil\'',
  'edit' => 'EDYTUJ',
  'delete' => 'KASUJ',
  'name' => 'Nazwa uÅ¼ytkownika',
  'group' => 'Grupa',
  'inactive' => 'Nieaktywny',
  'operations' => 'Operacje',
  'pictures' => 'Pliki', //cpg1.3.0
   'disk_space' => 'UÅ¼yte miejsce / Quota',
  'registered_on' => 'Zerejestrowano',
  'last_visit' => 'Ostatnia wizyta', //cpg1.3.0
  'u_user_on_p_pages' => 'uÅ¼ytkownikÃ³w: %d na stronach: %d',
  'confirm_del' => 'Czy na pewno chcesz skasowaÄ‡ tego uÅ¼ytkownika? \\nWszystkie jego pliki i albumy zostanÄ… automatycznie skasowane.', //js-alert //cpg1.3.0
  'mail' => 'E-MAIL',
  'err_unknown_user' => 'Selected user does not exist !',
  'modify_user' => 'Modyfikuj uÅ¼ytkownika',
  'notes' => 'Uwagi',
  'note_list' => '<li>JeÅ¼eli nie chcesz zmieniaÄ‡ swojego ulubionego hasÅ‚a teraz, zostaw pole "hasÅ‚o" puste',
  'password' => 'HasÅ‚o',
  'user_active' => 'UÅ¼ytkownik jest aktywny',
  'user_group' => 'Grupa uÅ¼ytkownikÃ³w',
  'user_email' => 'Adres e-mail uÅ¼ytkownika',
  'user_web_site' => 'Strona sieci web uÅ¼ytkownika',
  'create_new_user' => 'UtwÃ³rz nowego uÅ¼ytkownika',
  'user_location' => 'Lokacja uÅ¼ytkownika',
  'user_interests' => 'Zainteresowania',
  'user_occupation' => 'ZajÄ™cie',
  'latest_upload' => 'Ostatnio przesÅ‚ane', //cpg1.3.0
  'never' => 'brak', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
  'title' => 'NarzÄ™dzia administracyjne (ZmieÅ„ rozmiar zdjÄ™Ä‡)', //cpg1.3.0
  'what_it_does' => 'Do czego to sÅ‚uÅ¼y', 
  'what_update_titles' => 'Uaktualnia tytuÅ‚y nazwami plikÃ³w', 
  'what_delete_title' => 'Kasuje tytuÅ‚y', 
  'what_rebuild' => 'Odbudowuje miniatury i zdjÄ™cia poÅ›rednie', 
  'what_delete_originals' => 'Kasuje zdjÄ™cia ÅºrÃ³dÅ‚owe, zastÄ™pujÄ…c je zdjÄ™ciami o zmienionych wymiarach', 
  'file' => 'Plik', 
  'title_set_to' => 'tytuÅ‚', 
  'submit_form' => 'przeÅ›lij', 
  'updated_succesfully' => 'zaktualizowano', 
  'error_create' => 'BÅÄ„D tworzenia', 
  'continue' => 'Przetwarzaj wiÄ™cej zdjÄ™Ä‡', 
  'main_success' => 'Plik %s zostaÅ‚ ustawiony jako zdjÄ™cie gÅ‚Ã³wne', //cpg1.3.0
  'error_rename' => 'BÅ‚Ä…d przy zmiany nazwy z %s na %s', 
  'error_not_found' => 'Plik %s nie zostaÅ‚ znaleziony', 
  'back' => 'powrÃ³t na stronÄ™ gÅ‚Ã³wnÄ…', 
  'thumbs_wait' => 'Uaktualniam miniatury i/lub zdjÄ™cia o zmienionych wymiarach, proszÄ™ czekaÄ‡...', 
  'thumbs_continue_wait' => 'Trwa uaktualnianie miniatur i/lub zdjÄ™Ä‡ o zmienionych wymiarach...', 
  'titles_wait' => 'Uaktualnianie tytuÅ‚Ã³w, proszÄ™ czekaÄ‡...', 
  'delete_wait' => 'Kasowanie tytuÅ‚Ã³w, proszÄ™ czekaÄ‡...', 
  'replace_wait' => 'Kasowanie oryginaÅ‚Ã³w i zamienianie ich na zdjÄ™cia o zmienionych wymiarach..', 
  'instruction' => 'Szybkie instrukcje', 
  'instruction_action' => 'Wybierz akcjÄ™', 
  'instruction_parameter' => 'Ustaw parametry', 
  'instruction_album' => 'Wybierz album', 
  'instruction_press' => 'NaciÅ›nij %s', 
  'update' => 'Uaktualnij miniatury i/lub zdjÄ™cia o zmienionych wymiarach', 
  'update_what' => 'Do uaktualnienia', 
  'update_thumb' => 'Tylko miniatury', 
  'update_pic' => 'Tylko zdjÄ™cia o zmienionych wymiarach', 
  'update_both' => 'ZarÃ³wno miniatury jak i zdjÄ™cia o zmienionych rozmiarach', 
  'update_number' => 'IloÅ›Ä‡ przetworzonych zdjÄ™Ä‡/klikniÄ™cie', 
  'update_option' => '(SprÃ³buj zmniejszyÄ‡ tÄ™ iloÅ›Ä‡, jeÅ¼eli zaobserwujesz problem z timeoutem)',
  'filename_title' => 'Nazwa pliku &rArr; TytuÅ‚ pliku', //cpg1.3.0
  'filename_how' => 'Jak modyfikowaÄ‡ nazwÄ™ pliku', 
  'filename_remove' => 'UsuÅ„ rozszerzenie .jpg i zamieÅ„ _ (podkreÅ›lenie) na spacje', 
  'filename_euro' => 'Zmienia 2003_11_23_13_20_20.jpg na 23/11/2003 13:20', 
  'filename_us' => 'Zmienia 2003_11_23_13_20_20.jpg na 11/23/2003 13:20',
  'filename_time' => 'Zmienia 2003_11_23_13_20_20.jpg na 13:20',
  'delete' => 'Kasowanie tytuÅ‚Ã³w lub oryginalnych plikÃ³w', //cpg1.3.0
  'delete_title' => 'Kasowanie tytuÅ‚Ã³w plikÃ³w', //cpg1.3.0
  'delete_original' => 'Skasuj oryginalne zdjÄ™cia', 
  'delete_replace' => 'Kasuje oryginalne zdjÄ™cia zastÄ™pujÄ…c je zdjÄ™ciami zrewymiarowanymi', 
  'select_album' => 'Wybierz album',
  'delete_orphans' => 'Kasuj komentarze do nieistniejÄ…cych plikÃ³w (dotyczy wszystkich albumÃ³w)', //cpg1.3.0
  'orphan_comment' => 'znalezionych komentarzy do nieistniejÄ…cych plikÃ³w', //cpg1.3.0
  'delete' => 'Kasuj', //cpg1.3.0
  'delete_all' => 'Kasuj wszystko', //cpg1.3.0
  'comment' => 'Komentarz: ', //cpg1.3.0
  'nonexist' => 'doÅ‚Ä…czony do nieistniejÄ…cego pliku # ', //cpg1.3.0
  'phpinfo' => 'WyÅ›wietl phpinfo', //cpg1.3.0
  'update_db' => 'Aktualizacja bazy danych', //cpg1.3.0
  'update_db_explanation' => 'JeÅ¼eli usunÄ…Å‚eÅ› pliki coppermine, dodaÅ‚eÅ› jakÄ…Å› modyfikacjÄ™, lub dokonaÅ‚eÅ› aktualizacji poprzedniej wersji coppermine, uruchom jednorazowo aktualizacjÄ™ bazy danych. Stworzy ona niezbÄ™dne tabele i/lub ustawienia konfiguracyjne w bazie danych coppermine.', //cpg1.3.0
);

?>
