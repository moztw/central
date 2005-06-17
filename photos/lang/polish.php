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
// CVS version: $Id: polish.php,v 1.5 2004/07/24 15:04:07 gaugau Exp $
// ------------------------------------------------------------------------- //

// info about translators and translated language
$lang_translation_info = array(
'lang_name_english' => 'Polish', 
'lang_name_native' => 'Polski',
'lang_country_code' => 'pl',
'trans_name'=> 'Jacek Domoñ',
'trans_email' => 'plusz@plusz.net',
'trans_website' => 'http://www.plusz.net',
'trans_date' => '2004-05-16', 
);

$lang_charset = 'iso-8859-2';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bajtów', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Niedziela', 'Poniedzia³ek', 'Wtorek', '¦roda', 'Czwartek', 'Pi±tek', 'Sobota');
$lang_month = array('Styczenia', 'Lutego', 'Marca', 'Kwietnia', 'Maja', 'Czerwca', 'Lipica', 'Sierpnia', 'Wrzeñnia', 'Pa¼dziernika', 'Listopada', 'Grudnia');

// Some common strings
$lang_yes = 'Tak';
$lang_no  = 'Nie';
$lang_back = 'Wstecz';
$lang_continue = 'Dalej';
$lang_info = 'Informacja';
$lang_error = 'B³±d';

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
  'lastalb'=> 'Ostatnio aktualizacje albumów', 
  'lastcom' => 'Ostatnio dodane komentarze',
  'topn' => 'Najpopularniejsze',
  'toprated' => 'Najwy¿ej oceniane',
  'lasthits' => 'Ostatnio ogl±dane',
  'search' => 'Wyniki wyszukiwania', 
  'favpics'=> 'Ulubione pliki' //cpg1.3.0
);

$lang_errors = array(
  'access_denied' => 'Nie masz uprawnieñ aby ogl±daæ tê stronê.',
  'perm_denied' => 'Nie masz uprawnieñ aby wykonaæ tê operacjê.',
  'param_missing' => 'Skrypt zosta³ wywo³any bez wymaganego parametru.',
  'non_exist_ap' => 'Wybrany plik lub album nie istnieje!',
  'quota_exceeded' => 'Przekroczono limit miejsca. <br /><br />Twój przydzia³: [quota]K, Twoje pliki u¿ywaj± obecnie: [space]K. Dodanie wybranego pliku spowoduje przekroczenie limitu.', //cpg1.3.0
  'gd_file_type_err' => 'Je¿li w u¿yciu jest biblioteka GD, dozwolone formaty zdjêæ to wy³±cznie JPEG i PNG.',
  'invalid_image' => 'Zdjêcie które przes³ano nie mo¿e byæ obs³u¿one przez bibliotekê GD.',
  'resize_failed' => 'Nie mo¿na stworzyæ miniatury lub zdjêcia po¶redniego.',  
  'no_img_to_display' => 'Brak pliku do wy¶wietlenia',
  'non_exist_cat' => 'Wybrana kategoria nie istnieje',
  'orphan_cat' => 'Kategoria nie ma ga³êzi nadrzêdnej, uruchom mened¿era kategorii aby rozwi±zaæ ten problem.', //cpg1.3.0
  'directory_ro' => 'Katalog \'%s\' jest zabezpieczony przed zapisem. Pliki nie mog± byæ skasowane.', //cpg1.3.0
  'non_exist_comment' => 'Wybrany komentarz nie istnieje.',
  'pic_in_invalid_album' => 'Plik znajduje siê w nieistniej±cym albumie (%s)!?', //cpg1.3.0
  'banned' => 'Obecnie Twój dostêp do strony zosta³ zablokowany.',
  'not_with_udb' => 'Wybrana funkcja nie jest dostêpna, poniewa¿ jest zintegrowana z oprogramowniem forum. Czynno¶æ któr± chcesz wykonaæ nie jest wspierana w tej konfiguracji, b±d¼ powinna byæ obs³u¿ona przez oprogramowanie forum.',
  'offline_title' => 'Offline', //cpg1.3.0
  'offline_text' => 'Galeria jest obecnie wy³±czona - spróbuj ponownie pó¼niej', //cpg1.3.0
  'ecards_empty' => 'Nie ma obecnie ¿adnych zapisów dotycz±cych e-kartek. Sprawd¼, czy w³±czy³e¶ logowanie e-kartek w konfiguracji coppermine!', //cpg1.3.0
  'action_failed' => 'Dzia³anie nieudane. Coppermine nie mo¿e przetworzyæ Twojego ¿±dania.', //cpg1.3.0
  'no_zip' => 'Biblioteki do obs³ugi archiwów ZIP nie s± obecnie dostêpne. Skontaktuj siê z administratorem Coppermine.', //cpg1.3.0
  'zip_type' => 'Nie masz uprawnieñ by przesy³aæ archiwa ZIP.', //cpg1.3.0
);

$lang_bbcode_help = 'Mo¿esz u¿yæ nastêpuj±cych kodów: <li>[b]<b>Bold</b>[/b]</li> <li>[i]<i>Italic</i>[/i]</li> <li>[url=http://yoursite.com/]Url Text[/url]</li> <li>[email]user@domain.com[/email]</li>'; //cpg1.3.0

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //
$lang_main_menu = array(
  'alb_list_title' => 'Przejd¼ do listy albumów',
  'alb_list_lnk' => 'Albumy',
  'my_gal_title' => 'Do prywatnej galerii',
  'my_gal_lnk' => 'Moja galeria',
  'my_prof_lnk' => 'Mój profil',
  'adm_mode_title' => 'Prze³±cz w tryb administratora',
  'adm_mode_lnk' => 'Tryb administratora',
  'usr_mode_title' => 'Prze³±cz w tryb u¿ytkownika',
  'usr_mode_lnk' => 'Tryb u¿ytkownika',
  'upload_pic_title' => 'Przes³anie pliku do albumu', //cpg1.3.0
  'upload_pic_lnk' => 'Przes³anie pliku', //cpg1.3.0
  'register_title' => 'Utwórz konto',
  'register_lnk' => 'Zarejestruj siê',
  'login_lnk' => 'Zaloguj',
  'logout_lnk' => 'Wyloguj',
  'lastup_lnk' => 'Ostatnio dodane',
  'lastcom_lnk' => 'Ostatnie komentarze',
  'topn_lnk' => 'Najpopularniejsze',
  'toprated_lnk' => 'Top Lista',
  'search_lnk' => 'Szukaj',
  'fav_lnk' => 'Ulubione',
  'memberlist_title' => 'Poka¿ u¿ytkowników', //cpg1.3.0
  'memberlist_lnk' => 'U¿ytkownicy', //cpg1.3.0
   'faq_title' => 'FAQ galerii &quot;Coppermine&quot;', //cpg1.3.0
  'faq_lnk' => 'FAQ', //cpg1.3.0
);
  
$lang_gallery_admin_menu = array(
  'upl_app_lnk' => 'Akceptacja plików',
  'config_lnk' => 'Konfiguracja',
  'albums_lnk' => 'Albumy',
  'categories_lnk' => 'Kategorie',
  'users_lnk' => 'U¿ytkownicy',
  'groups_lnk' => 'Grupy',
  'comments_lnk' => 'Przejrzyj komentarze', //cpg1.3.0
  'searchnew_lnk' => 'Wsadowe dodawanie plików',  //cpg1.3.0
  'util_lnk' => 'Narzêdzia administracyjne',  //cpg1.3.0
  'ban_lnk' => 'Banowanie',
  'db_ecard_lnk' => 'Wy¶wietl e-kartki', //cpg1.3.0 
);

$lang_user_admin_menu = array(
  'albmgr_lnk' => 'Tworzenie / porz±dkowanie albumów',
  'modifyalb_lnk' => 'Modyfikacja moich albumów',
  'my_prof_lnk' => 'Mój profil',
);

$lang_cat_list = array(
  'category' => 'Kategoria',
  'albums' => 'Albumy',
  'pictures' => 'Pliki', //cpg1.3.0
);

$lang_album_list = array(
  'album_on_page' => 'albumów: %d, stron: %d'
);

$lang_thumb_view = array(
  'date' => 'DATA',
  //Sort by filename and title
  'name' => 'NAZWA PLIKU', 
  'title' => 'TYTU£', 
  'sort_da' => 'Sortowanie wg daty rosn±co',
  'sort_dd' => 'Sortowanie wg daty malej±co',
  'sort_na' => 'Sortowanie wg nazwy rosn±co',
  'sort_nd' => 'Sortowanie wg nazwy malej±co',
  'sort_ta' => 'Sortowanie wg tytu³u rosn±co', 
  'sort_td' => 'Sortowanie wg tytu³u malej±co', 
  'pic_on_page' => 'plików: %d stron: %d',
  'user_on_page' => 'u¿ytkowników: %d, stron: %d'
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Wróæ do widoku miniatur',
  'pic_info_title' => 'Wy¶wietl/ukryj info o pliku',
  'slideshow_title' => 'Pokaz slajdów',
  'ecard_title' => 'Wy¶lij jako e-kartkê',
  'ecard_disabled' => 'e-kartki s± wy³±czone',
  'ecard_disabled_msg' => 'Nie masz uprawnieñ do wysy³ania e-kartek', //js-alert //cpg1.3.0
  'prev_title' => 'Poprzedni plik', //cpg1.3.0
  'next_title' => 'Nastêpny plik', //cpg1.3.0
  'pic_pos' => 'PLIK %s/%s', //cpg1.3.0
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Oceñ ten plik ', //cpg1.3.0
  'no_votes' => '(Brak g³osów)',
  'rating' => '(obecna ocena : %s / 5 g³osów: %s)',
  'rubbish' => 'Do niczego',
  'poor' => 'S³abe',
  'fair' => 'Niez³e',
  'good' => 'Dobre',
  'excellent' => 'B. dobre',
  'great' => 'Doskona³e',
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
  CRITICAL_ERROR => 'B³±d krytyczny',
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
  'n_views' => 'ods³on: %s ',
  'n_votes' => '(g³osów: %s)'
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Informacje debuggera', //cpg1.3.0
  'select_all' => 'Wybierz wszystko', //cpg1.3.0
  'copy_and_paste_instructions' => 'Aby otrzymaæ pomoc na forum wsparcia technicznego coppermine, skopiuj i wklej te informacje debuggera do swojego postu. Pamiêtaj aby zast±piæ wszelkie has³a ci±giem ***, przed zamieszczeniem postu.', //cpg1.3.0
  'phpinfo' => 'wy¶wietl phpinfo', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => 'Domy¶lny jêzyk', //cpg1.3.0
  'choose_language' => 'Wybierz swój jêzyk', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'Domy¶lny styl', //cpg1.3.0
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
  'Smile' => 'U¶miechniêty',
  'Sad' => 'Smutny',
  'Surprised' => 'Zaskoczony',
  'Shocked' => 'Zszokowany',
  'Confused' => 'Zniesmaczony',
  'Cool' => 'Luzak',
  'Laughing' => '¦mieje siê',
  'Mad' => 'W¶ciek³y',
  'Razz' => 'Jêzorek',
  'Embarassed' => 'Zawstydzony / gafa',
  'Crying or Very sad' => 'Zrozpaczony',
  'Evil or Very Mad' => 'W¶ciek³y do kwadratu',
  'Twisted Evil' => 'Twisted Evil',
  'Rolling Eyes' => 'Przewraca oczami',
  'Wink' => 'Puszcza oczko',
  'Idea' => 'Pomys³',
  'Arrow' => 'Strza³ka',
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
  0 => 'Zakoñczono pracê administratora...',
  1 => 'Prze³±czanie do trybu administratora...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //
if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Albumy musz± mieæ nazwê !', //js-alert
  'confirm_modifs' => 'Czy na pewno chcesz dokonaæ tych modyfikacji ?', //js-alert
  'no_change' => 'Nie dokona³e¶/a¶ ¿adnej zmiany !', //js-alert
  'new_album' => 'Nowy album',
  'confirm_delete1' => 'Czy na pewno chcesz skasowaæ ten album ?', //js-alert
  'confirm_delete2' => '\nWszystkie pliki i komentarze które zawiera zostan± stracone !', //js-alert
  'select_first' => 'Wybierz najpierw album', //js-alert
  'alb_mrg' => 'Mened¿er albumów',
  'my_gallery' => '* Moja galeria *',
  'no_category' => '* Bez kategorii *',
  'delete' => 'Kasuj',
  'new' => 'Nowy',
  'apply_modifs' => 'Wykonaj modyfikacje',
  'select_category' => 'Wybierz kategoriê',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //
if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Brak parametrów do operacji \'%s\'!',
  'unknown_cat' => 'Wybrana kategoria nie istnieje w bazie danych',
  'usergal_cat_ro' => 'Galerie u¿ytkowników nie mog± byæ kasowane!',
  'manage_cat' => 'Zarz±dzaj kategoriami',
  'confirm_delete' => 'Czy jeste¶ pewny/a ¿e chcesz SKASOWAÆ tê kategoriê',
  'category' => 'Kategoria',
  'operations' => 'Operacje',
  'move_into' => 'Przesuñ do',
  'update_create' => 'Uaktualnij / stwórz kategoriê',
  'parent_cat' => 'Kategoria wy¿szego rzêdu',
  'cat_title' => 'Tytu³ kategorii',
  'cat_thumb' => 'Miniatrury kategorii', //cpg1.3.0
  'cat_desc' => 'Opis kategorii'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
  'title' => 'Konfiguracja',
  'restore_cfg' => 'Przywróæ ustawienia domy¶lne',
  'save_cfg' => 'Zachowaj now± konfiguracjê',
  'notes' => 'Notatki',
  'info' => 'Informacja',
  'upd_success' => 'Konfiguracja Coppermine zosta³a uaktualniona',
  'restore_success' => 'Konfiguracja Coppermine zosta³a przywrócona',
  'name_a' => 'Nazwa rosn±co',
  'name_d' => 'Nazwa malej±co',
  'title_a' => 'Tytu³ rosn±co', 
  'title_d' => 'Tytu³ malej±co', 
  'date_a' => 'Data rosn±co',
  'date_d' => 'Data malej±co',
  'th_any' => 'Maksymalne rozmiary',
  'th_ht' => 'Wysoko¶æ',
  'th_wd' => 'Szeroko¶æ',
  'label' => 'etykieta', //cpg1.3.0
  'item' => 'element', //cpg1.3.0
  'debug_everyone' => 'Wszyscy', //cpg1.3.0
  'debug_admin' => 'Tylko administrator', //cpg1.3.0
  );

if (defined('CONFIG_PHP')) $lang_config_data = array(
  'Ustawienia g³ówne',
  array('Nazwa galerii', 'gallery_name', 0),
  array('Opis galerii', 'gallery_description', 0),
  array('E-mail administratora galerii', 'gallery_admin_email', 0),
  array('Adresy docelowe dla linku \'Zobacz wiêcej\' w e-kartkach', 'ecards_more_pic_target', 0),
  array('Galeria jest wy³±czona', 'offline', 1), //cpg1.3.0
  array('Logowanie e-kartek', 'log_ecards', 1), //cpg1.3.0
  array('Zezwól na ¶ci±ganie Ulubionych w archiwum ZIP', 'enable_zipdownload', 1), //cpg1.3.0

  'Language, Themes &amp; Charset settings',
  array('Jêzyk', 'lang', 5),
  array('Styl galerii', 'theme', 6),
  array('Pokazuj listê dostêpnych jêzyków', 'language_list', 8), //cpg1.3.0
  array('Pokazuj flagi jêzyków', 'language_flags', 8), //cpg1.3.0
  array('Pokazuj &quot;reset&quot; przy wyborze jêzyka', 'language_reset', 1), //cpg1.3.0
  array('Pokazuj listê styli', 'theme_list', 8), //cpg1.3.0
  array('Pokazuj &quot;reset&quot; przy wyborze stylu', 'theme_reset', 1), //cpg1.3.0
  array('Pokazuj FAQ', 'display_faq', 1), //cpg1.3.0
  array('Pokazuj pomoc bbcode', 'show_bbcode_help', 1), //cpg1.3.0
  array('Kodowanie znaków', 'charset', 4), //cpg1.3.0

  'Przegl±danie listy albumów',
  array('Szeroko¶æ g³ównej galerii (piksele lub %)', 'main_table_width', 0),
  array('Ilo¶æ kategorii do wy¶wietlenia', 'subcat_level', 0),
  array('Ilo¶æ albumów do wy¶wietlenia', 'albums_per_page', 0),
  array('Ilo¶æ kolumn w li¶cie albumów', 'album_list_cols', 0),
  array('Rozmiar miniatur w pikselach', 'alb_list_thumb_size', 0),
  array('Zawarto¶æ strony g³ównej', 'main_page_layout', 0),
  array('Poka¿ miniaturê pierwszego poziomu w miniaturach albumu','first_level',1),
 
  'Widok miniatur',
  array('Ilo¶æ kolumn na stronie miniatur', 'thumbcols', 0),
  array('Ilo¶æ wierszy na stronie miniatur', 'thumbrows', 0),
  array('Maksymalna ilo¶æ pasków do wy¶wietlenia', 'max_tabs', 10), //cpg1.3.0
  array('Wy¶wietl opis pliku (oprócz tytu³u) poni¿ej miniatury', 'caption_in_thumbview', 1), //cpg1.3.0
  array('Wy¶wietl ilo¶æ ods³on poni¿ej miniatury', 'views_in_thumbview', 1), //cpg1.3.0
  array('Wy¶wietl ilo¶æ komentarzy poni¿ej miniatury', 'display_comment_count', 1),
  array('Wy¶wietl przesy³aj±cego poni¿ej miniatury', 'display_uploader', 1), //cpg1.3.0
  array('Domy¶lny porz±dek sortowania plików', 'default_sort_order', 3), //cpg1.3.0
  array('Minimalna ilo¶æ g³osów niezbêdna do umieszczenia pliku w kategorii \'Top Lista\'', 'min_votes_for_rating', 0), //cpg1.3.0

  'Przegl±danie obrazów &amp; Ustawienia komentarzy',
  array('Szeroko¶æ tabeli wy¶wietlaj±cej pliki (piksele lub %)', 'picture_table_width', 0), //cpg1.3.0
  array('Domy¶lne pokazywanie informacji o pliku', 'display_pic_info', 1), //cpg1.3.0
  array('Blokowanie s³ów z "listy zakazanych" w komentarzach', 'filter_bad_words', 1),
  array('Wy¶wietlanie emotikon w komentarzach', 'enable_smilies', 1),
  array('Maksymalna d³ugo¶æ opisu pliku', 'max_img_desc_length', 0),
  array('Maksymalna ilo¶æ znaków w s³owie', 'max_com_wlength', 0),
  array('Maksymalna ilo¶æ linii w komentarzu', 'max_com_lines', 0),
  array('Maksymalna d³ugo¶æ komentarza (znaków)', 'max_com_size', 0),
  array('Poka¿ "pasek filmu" z miniaturami', 'display_film_strip', 1), 
  array('Ilo¶æ elementów wy¶wietlanych w "pasku filmu" z miniaturami', 'max_film_strip_items', 0), 
  array('Powiadom administratora o komentarzu', 'email_comment_notification', 1), //cpg1.3.0
  array('Interwa³ pokazu slajdów (1 sekunda = 1000 milisekund)', 'slideshow_interval', 0), //cpg1.3.0

  'Ustawienia plików i miniatur', //cpg1.3.0
  array('Jako¶æ plików JPEG', 'jpeg_qual', 0),
  array('Maksymalny rozmiar miniatury <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0), //cpg1.3.0
  array('U¿yj wymiaru (szeroko¶æ, wysoko¶æ lub maksymalny widok dla miniatury)<b>**</b>', 'thumb_use', 7),
  array('Twórz zdjêcia po¶rednie','make_intermediate',1),
  array('Maksymalna szeroko¶æ po¶redniego zdjêcia lub video <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0), //cpg1.3.0
  array('Maksymalny rozmiar przesy³anych plików (KB)', 'max_upl_size', 0), //cpg1.3.0
  array('Maksymana wysoko¶æ lub szeroko¶æ przesy³anych zdjêæ (w pikselach)', 'max_upl_width_height', 0), //cpg1.3.0

  'Zaawansowane ustawienia plików i miniatur', //cpg1.3.0
  array('Wy¶wietlanie ikon albumów prywatnych niezalogowanemu u¿ytkownikowi','show_private',1), //cpg1.3.0
  array('Znaki zakazane w nazwach plików', 'forbiden_fname_char',0), //cpg1.3.0
  //array('Akceptowane rozszerzenia przesy³anych zdjêæ', 'allowed_file_extensions',0), //cpg1.3.0
  array('Akceptowalne typy obrazów', 'allowed_img_types',0), //cpg1.3.0
  array('Akceptowalne typy plików wideo', 'allowed_mov_types',0), //cpg1.3.0
  array('Akceptowalne typy plików audio', 'allowed_snd_types',0), //cpg1.3.0
  array('Akceptowalne typy dokumentów', 'allowed_doc_types',0), //cpg1.3.0
  array('Metoda skalowania obrazów','thumb_method',2), //cpg1.3.0
  array('¦cie¿ka dostêpu do oprogramowania \'konwertuj±cego\' ImageMagick (np /usr/bin/X11/)', 'impath', 0), //cpg1.3.0
  //array('Dozwolone nazwy plików (w³a¶ciwe dla ImageMagick)', 'allowed_img_types',0), //cpg1.3.0
  array('Komendy linii poleceñ dla ImageMagick', 'im_options', 0), //cpg1.3.0
  array('Czytaj dane EXIF w plikach JPEG', 'read_exif_data', 1), //cpg1.3.0
  array('Czytaj dane IPTC w plikach JPEG', 'read_iptc_data', 1), //cpg1.3.0
  array('Katalog albumów <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0), //cpg1.3.0
  array('Nazwa katalogu na pliki u¿ytkowników <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0), //cpg1.3.0
  array('Prefix dla zdjêæ po¶rednich <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0), //cpg1.3.0
  array('Prefix dla miniatur <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0), //cpg1.3.0
  array('Domy¶lne uprawnienia katalogów', 'default_dir_mode', 0), //cpg1.3.0
  array('Domy¶lne uprawnienia plików', 'default_file_mode', 0), //cpg1.3.0

  'Ustawienia u¿ytkowników',
  array('Zezwalanie na rejestracjê nowych u¿ytkowników', 'allow_user_registration', 1),
  array('Rejestracja u¿ytkownika wymaga potwierdzenia e-mail', 'reg_requires_valid_email', 1),
  array('Powiadom administratora o rejestracji e-mailem', 'reg_notify_admin_email', 1), //cpg1.3.0
  array('Zezwalanie posiadania tego samego adresu e-mail przez dwóch u¿ytkowników', 'allow_duplicate_emails_addr', 1),
  array('U¿ytkownicy mog± tworzyæ albumy prywatne', 'allow_private_albums', 1),
  array('Powiadom administratora o plikach oczekuj±cych na akceptacjê', 'upl_notify_admin_email', 1), //cpg1.3.0
  array('Zezwól na ogl±danie listy u¿ytkowników u¿ytkownikom zarejestrowanym', 'allow_memberlist', 1), //cpg1.3.0
  
  'Nazwy dodatkowych pól do opisu pliku (pozostaw je puste je¿eli nie s± u¿ywane)',
  array('Nazwa pola 1', 'user_field1_name', 0),
  array('Nazwa pola 2', 'user_field2_name', 0),
  array('Nazwa pola 3', 'user_field3_name', 0),
  array('Nazwa pola 4', 'user_field4_name', 0),

  'Ustawienia cookies',
  array('Nazwa plików cookie tworzonych przez skrypt (w przypadku integracji bbs, upewnij siê, ¿e nazwa ró¿ni siê od nazw plików generowanych przez bbs', 'cookie_name', 0),
  array('¦cie¿ka plików cookie tworzonych przez skrypt', 'cookie_path', 0),
  
  'Ró¿ne ustawienia',
  array('W³±cz tryb debugowania', 'debug_mode', 9), //cpg1.3.0
  array('Pokazuj powiadomienia w trybie debugowania', 'debug_notice', 1), //cpg1.3.0

  '<br /><div align="left"><a name="notice1"></a>(*) Pola oznaczone gwiazdk± nie mog± byæ zmienione je¿eli w bazie danych s± ju¿ pliki.<br />
  <a name="notice2"></a>(**) Zmiana tych ustawieñ dotyczy jedynie nowych plików dodawanych do bazy, dlatego rekomenduje siê nie dokonywanie zmiany, je¿eli w galerii znajduj± siê ju¿ jakie¶ pliki. Zmiana istniej±cych plików mo¿e zostaæ jednak dokonana przy pomocy &quot;<a href="util.php">narzêdzi administracyjnych (zmiana rozmiaru zdjêæ)</a>&quot; znajduj±cych siê w menu administratora.</div><br />', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Wy¶lij e-kartkê', //cpg1.3.0
  'ecard_sender' => 'Nadawca', //cpg1.3.0
  'ecard_recipient' => 'Odbiorca', //cpg1.3.0
  'ecard_date' => 'Data', //cpg1.3.0
  'ecard_display' => 'Wy¶wietl e-kartkê', //cpg1.3.0
  'ecard_name' => 'Imiê', //cpg1.3.0
  'ecard_email' => 'E-mail', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'rosn±co', //cpg1.3.0
  'ecard_descending' => 'malej±co', //cpg1.3.0
  'ecard_sorted' => 'Sortowane', //cpg1.3.0
  'ecard_by_date' => 'wg daty', //cpg1.3.0
  'ecard_by_sender_name' => 'wg imienia nadawcy', //cpg1.3.0
  'ecard_by_sender_email' => 'wg e-maila nadawcy', //cpg1.3.0
  'ecard_by_sender_ip' => 'wg adresu IP nadawcy', //cpg1.3.0
  'ecard_by_recipient_name' => 'wg nazwy odbiorcy', //cpg1.3.0
  'ecard_by_recipient_email' => 'wg e-maila odbiorcy', //cpg1.3.0
  'ecard_number' => 'wy¶wietlane rekordy: %s - %s z %s', //cpg1.3.0
  'ecard_goto_page' => 'do strony', //cpg1.3.0
  'ecard_records_per_page' => 'Rekordów na stronie', //cpg1.3.0
  'check_all' => 'Wybierz wszystkie', //cpg1.3.0
  'uncheck_all' => 'Wyczy¶æ wszystkie', //cpg1.3.0
  'ecards_delete_selected' => 'Skasuj wybrane e-kartki', //cpg1.3.0
  'ecards_delete_confirm' => 'Czy na pewno chcesz skasowaæ te rekodry? Zaznacz checkbox!', //cpg1.3.0
  'ecards_delete_sure' => 'Chcê skasowaæ', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Musisz podaæ swoje imiê i napisaæ komentarz',
  'com_added' => 'Twój komentarz zosta³ dodany',
  'alb_need_title' => 'Musisz podaæ tytu³ dla albumu!',
  'no_udp_needed' => 'Zmiana nie jest konieczna.',
  'alb_updated' => 'Album zosta³ uaktualniony',
  'unknown_album' => 'Wybrany album nie istnieje, lub nie masz uprawnieñ do przesy³ania',
  'no_pic_uploaded' => 'Plik nie zosta³ dodany!<br /><br />Je¿eli wybrano plik do przes³ania, sprawd¼ czy serwer na to zezwala...', //cpg1.3.0
  'err_mkdir' => 'Nie uda³o siê utworzyæ katalogu %s !',
  'dest_dir_ro' => 'Katalog docelowy %s nie mo¿e byæ zapisany przez skrypt!',
  'err_move' => 'Nie mo¿na przenie¶æ %s do %s !',
  'err_fsize_too_large' => 'Plik który przesy³asz ma zbyt du¿y rozmiar (maksymalnie dozwolony: %s x %s) !',//cpg1.3.0
  'err_imgsize_too_large' => 'Plik który przesy³asz ma zbyt du¿y rozmiar (maksymalnie dozwolony: to %s KB) !',
  'err_invalid_img' => 'Plik który przesy³asz jest w niedozwolonym formacie!',
  'allowed_img_types' => 'Mo¿esz przes³aæ tylko %s plików.',
  'err_insert_pic' => 'Plik \'%s\' nie mo¿e zostaæ wstawiony do albumu ', //cpg1.3.0
  'upload_success' => 'Plik zosta³ przes³any <br /><br />Bêdzie widoczny po akceptacji przez administratora.', //cpg1.3.0
  'notify_admin_email_subject' => '%s - powiadomienie o przes³aniu pliku', //cpg1.3.0
  'notify_admin_email_body' => 'U¿ytkownik %s przes³a³ plik, oczekuje on na Twoj± aprobatê. Odwied¼ %s', //cpg1.3.0
  'info' => 'Informacje',
  'com_added' => 'Dodano komentarz',
  'alb_updated' => 'Uaktualniono album',
  'err_comment_empty' => 'Twój komentarz jest pusty!',
  'err_invalid_fext' => 'Akceptowane s± jedynie pliki z nastêpuj±cymi rozszerzeniami: <br /><br />%s.',
  'no_flood' => 'Przykro mi ale jeste¶/a¶ autorem ostatniego dodanego komentarza<br /><br />Mo¿esz go edytowaæ aby zmieniæ tre¶æ',
  'redirect_msg' => 'Jeste¶ przekierowywany.<br /><br /><br />Kliknij \'DALEJ\' je¿eli strona nie zmieni siê automatycznie',
  'upl_success' => 'Plik zosta³ przes³any', //cpg1.3.0
  'email_comment_subject' => 'W galerii Coppermine dodano komentarz', //cpg1.3.0
  'email_comment_body' => 'Dodano komentarz do Twojej galerii zobacz go tutaj', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Tytu³',
  'fs_pic' => 'pe³ny rozmiar',
  'del_success' => 'skasowano',
  'ns_pic' => 'normalny rozmiar',
  'err_del' => 'nie mo¿e byæ skasowane',
  'thumb_pic' => 'miniatura',
  'comment' => 'komentarz',
  'im_in_alb' => 'zdjêcie z albumu',
  'alb_del_success' => 'Skasowano album \'%s\' ',
  'alb_mgr' => 'Mened¿er albumów',
  'err_invalid_data' => 'Otrzymano niew³a¶ciwe dane \'%s\'',
  'create_alb' => 'Tworzenie albumu \'%s\'',
  'update_alb' => 'Uaktualnienie albumu: \'%s\' tytu³: \'%s\' index: \'%s\'',
  'del_pic' => 'Kasowanie pliku', //cpg1.3.0
  'del_alb' => 'Kasowanie albumu',
  'del_user' => 'Kasowanie u¿ytkownika',
  'err_unknown_user' => 'Wybrany u¿ytkownik nie istnieje!',
  'comment_deleted' => 'Komentarz zosta³ dodany',
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
  'confirm_del' => 'Czy na pewno chcesz skasowaæ ten plik? \\nZostan± skasowane równie¿ komentarze do niego.', //js-alert //cpg1.3.0
  'del_pic' => 'SKASUJ TEN PLIK', //cpg1.3.0
  'size' => '%s x %s pikseli',
  'views' => '%s razy',
  'slideshow' => 'Pokaz slajdów',
  'stop_slideshow' => 'ZATRZYMAJ POKAZ',
  'view_fs' => 'Kliknij aby zobaczyæ pe³ny rozmiar',
  'edit_pic' => 'Edytowanie opisu', //cpg1.3.0
  'crop_pic' => 'Kadrowanie i obrót', //cpg1.3.0
);

$lang_picinfo = array(
  'title' =>'Informacja o pliku', //cpg1.3.0
  'Filename' => 'Nazwa pliku',
  'Album name' => 'Nazwa albumu',
  'Rating' => 'Ocena (%s g³osów)',
  'Keywords' => 'S³owa kluczowe',
  'File Size' => 'Rozmiar pliku',
  'Dimensions' => 'Wymiary',
  'Displayed' => 'Wy¶wietleñ',
  'Camera' => 'Aparat fotograficzny',
  'Date taken' => 'Data zrobienia zdjêcia',
  'Aperture' => 'Przes³ona',
  'Exposure time' => 'Czas ekspozycji',
  'Focal length' => 'Ogniskowa',
  'Comment' => 'Komentarz',
  'addFav'=>'Dodaj do Ulubionych', 
  'addFavPhrase'=>'Ulubione', 
  'remFav'=>'Usuñ z Ulubionych',
  'iptcTitle'=>'Tytu³ IPTC', //cpg1.3.0
  'iptcCopyright'=>'Copyright IPTC', //cpg1.3.0
  'iptcKeywords'=>'S³owa kluczowe IPTC', //cpg1.3.0
  'iptcCategory'=>'Kategoria IPTC', //cpg1.3.0
  'iptcSubCategories'=>'Podkategorie IPTC', //cpg1.3.0
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Edytuj ten komentarz',
  'confirm_delete' => 'Czy na pewno chcesz skasowaæ ten komentarz ?', //js-alert
   'add_your_comment' => 'Dodaj komentarz',
  'name'=>'Pseudonim', 
  'comment'=>'Komentarz', 
  'your_name' => 'Anonim', 
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Kliknij zdjêcie aby zamkn±æ okno', 
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Wy¶lij e-kartkê',
  'invalid_email' => '<b>Uwaga!</b> : niepoprawny adres e-mail !',
  'ecard_title' => 'e-kartka od %s dla Ciebie',
  'view_ecard' => 'Je¿eli e-kartka nie wy¶wietla siê poprawnie, kliknij ten link',
  'view_more_pics' => 'Kliknij ten link aby zobaczyæ wiêcej zdjêæ!',
  'send_success' => 'Twoja e-kartka zosta³a wys³ana',
  'send_failed' => 'Niestety, serwer nie mo¿e wys³aæ Twojej e-kartki...',
  'from' => 'Od',
  'your_name' => 'Twoje imiê',
  'your_email' => 'Twój adres e-mail',
  'to' => 'Do',
  'rcpt_name' => 'Nazwa odbiorcy',
  'rcpt_email' => 'Adres e-mail odbiorcy',
  'greetings' => 'Temat',
  'message' => 'Wiadomo¶æ',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Plik&nbsp;Info', //cpg1.3.0
  'album' => 'Album',
  'title' => 'Tytu³',
  'desc' => 'Opis',
  'keywords' => 'S³owa kluczowe',
  'pic_info_str' => '%s &razy; %s - %s KB - %s ods³on - %s g³osów',
  'approve' => 'Akceptuj plik', //cpg1.3.0
  'postpone_app' => 'Odrocz akceptacjê',
  'del_pic' => 'Skasuj plik', //cpg1.3.0
  'reset_view_count' => 'Resetuj licznik ods³on',
  'reset_votes' => 'Resetuj g³osowania',
  'del_comm' => 'Skasuj komentarze',
  'upl_approval' => 'Akceptacja zdjêæ',
  'edit_pics' => 'Edytuj zdjêcia',
  'see_next' => 'Zobacz nastêpne zdjêcia',
  'see_prev' => 'Zobacz poprzednie zdjêcia',
  'n_pic' => 'zdjêæ: %s',
  'n_of_pic_to_disp' => 'Ilo¶æ zdjêæ do wy¶wietlenia',
  'apply' => 'Zastosuj zmiany'
);

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Informacja&nbsp;o pliku', //cpg1.3.0
  'album' => 'Album',
  'title' => 'Tytu³',
  'desc' => 'Opis',
  'keywords' => 'S³owa kluczowe',
  'pic_info_str' => '%s &razy; %s - %s KB - %s ods³on - %s g³osów',
  'approve' => 'Akceptuj plik', //cpg1.3.0
  'postpone_app' => 'Odrocz akceptacjê',
  'del_pic' => 'Kasuj plik', //cpg1.3.0
  'read_exif' => 'Odczytaj ponownie informacje EXIF', //cpg1.3.0
  'reset_view_count' => 'Kasuj licznik ods³on',
  'reset_votes' => 'Kasuj g³osowania',
  'del_comm' => 'Kasuj komentarze',
  'upl_approval' => 'Akceptacja plików',
  'edit_pics' => 'Edycja plików', //cpg1.3.0
  'see_next' => 'Zobacz nastêpne pliki', //cpg1.3.0
  'see_prev' => 'Zobacz poprzednie pliki', //cpg1.3.0
  'n_pic' => '%s plików', //cpg1.3.0
  'n_of_pic_to_disp' => 'Ilo¶æ plików do wy¶wietlenia', //cpg1.3.0
  'apply' => 'Zastosuj zmiany', //cpg1.3.0
  'crop_title' => 'Edytor zdjêæ Coppermine', //cpg1.3.0
  'preview' => 'Podgl±d', //cpg1.3.0
  'save' => 'Zapisz zdjêcie', //cpg1.3.0
  'save_thumb' =>'Zapisz jako miniaturê', //cpg1.3.0
  'sel_on_img' =>'Obszar wyboru musi mie¶ciæ siê na zdjêciu!', //js-alert //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Najczê¶ciej zadawane pytania', //cpg1.3.0
  'toc' => 'Spis tre¶ci', //cpg1.3.0
  'question' => 'Pytanie: ', //cpg1.3.0
  'answer' => 'Odpowied¼: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'Generalne FAQ', //cpg1.3.0
  array('Dlaczego warto siê zarejestrowaæ?', 'Rejestracja mo¿e byæ wymagana przez administratora serwisu. Zarejestrowanie siê daje u¿ytkownikowi dodatkowe mo¿liwo¶ci, takie jak przesy³anie w³asnych plików, tworzenie listy ulubionych, ocenianie zdjêæ, zamieszczanie komentarzy itp.', 'allow_user_registration', '0'), //cpg1.3.0
  array('Jak siê zarejestrowaæ?', 'Przejd¼ do sekcji &quot;Rejestracja&quot; i wype³nij wymagane pola (ew. tak¿e pola opcjonalne).<br />Je¿eli Administrator w³±czy³ opcjê aktywacji przez e-mail, po wype³nieniu formularza rejestracji, na podany tam adres pocztowy otrzymasz e-mail zawieraj±cy instrukcje w jaki sposób aktywowaæ konto. Aktywacja jest wymagana przed pierwszym za³ogowaniem.', 'allow_user_registration', '1'), //cpg1.3.0
  array('Jak siê logowaæ?', 'Przejd¼ do sekcji &quot;Logowanie&quot;, Wprowad¼ swoj± nazwê u¿ytkownika i has³o. Mo¿esz tak¿e wybraæ opcjê &quot;Pamiêtaj mnie&quot; aby¶ nie musia³ logowaæ siê przy ponownym wej¶ciu na stronê.<br /><b>WA¯NE: aby ta funkcja serwisu dzia³a³a nale¿y w³±czyæ obs³ugê plików cookie i nie kasowaæ plików cookie generowanych przez serwis.</b>', 'offline', 0), //cpg1.3.0
  array('Dlaczego nie mogê siê zalogowaæ?', 'Czy zarejestrowa³e¶ siê ju¿ i klikn±³e¶ na ³±cze z wys³anego do Ciebie e-mail\'a? £±cze to pozwoli na aktywowanie Twojego konta. W przypadku innych k³opotów skontaktuj siê z administratorem serwisu.', 'offline', 0), //cpg1.3.0
  array('Co mam zrobiæ je¿eli zapomnê has³a?', 'Je¿eli serwis udostêpnia link &quot;Zapomnia³em has³a&quot;, u¿yj go. W innym wypadku skontaktuj siê z administratorem i popro¶ go o nowe has³o.', 'offline', 0), //cpg1.3.0
  //array('Co mam zrobiæ, je¿eli zmieni³ mi siê adres e-mail?', 'Zaloguj siê i zmieñ swój e-mail w &quot;Profilu&quot;', 'offline', 0), //cpg1.3.0
  array('Jak zapisaæ plik do &quot;Moich ulubionych&quot;?', 'Kliknij na pliku, a nastêpnie na ³±czu &quot;informacji o zdjêciu&quot; (<img src="images/info.gif" width="16" height="16" border="0" alt="Picture information" />); przejd¼ na dó³ i kliknij &quot;Dodaj do ulubionych&quot;.<br />Mo¿liwe, ¿e administrator w³±czy³ opcjê domy¶lnego pokazywania informacji o pliku.<br />WA¯NE: Nale¿y w³±czyæ obs³ugê plików cookie z tego serwisu i nie kasowaæ ich.', 'offline', 0), //cpg1.3.0
  array('Jak oceniæ plik?', 'Kliknij na miniaturze, przejd¼ na dó³ strony i wybierz odpowiedni± ocenê.', 'offline', 0), //cpg1.3.0
  array('Jak zamie¶ciæ komentarz do pliku?', 'Kliknij na miniaturze, przejd¼ na dó³ i w odpowiednim polu wpisz komentarz.', 'offline', 0), //cpg1.3.0
  array('Jak przes³aæ plik?', 'Przejd¼ do &quot;Przesy³ania zdjêæ&quot; i wybierz album do którego chcesz przes³aæ plik, kliknij &quot;Przegl±daj&quot; znajd¼ plik który chcesz przes³aæ, wybierz &quot;Otwórz&quot; (dodaj opis, je¿eli chcesz) i kliknij &quot;Prze¶lij&quot;', 'allow_private_albums', 0), //cpg1.3.0
  array('Gdzie mogê przes³aæ plik?', 'Pliki mo¿na przesy³aæ do jednego z albumów w Twojej Galerii. Administrator mo¿e tak¿e zezwoliæ Ci na przesy³anie zdjêæ do albumów w Galerii G³ównej.', 'allow_private_albums', 0), //cpg1.3.0
  array('Jakie pliki mo¿na przesy³aæ? W jakiej wielko¶ci?', 'Typ i rodzaj przesy³anych plików (jpg, png, etc.) okre¶la administrator serwisu.', 'offline', 0), //cpg1.3.0
  array('Co to jest &quot;Moja Galeria&quot;?', '&quot;Moja Galeria&quot; to prywatna galeria któr± mo¿e zarz±dzaæ u¿ytkownik. Mo¿esz tam przesy³aæ swoje pliki.', 'allow_private_albums', 0), //cpg1.3.0
  array('W jaki sposób tworzyæ, kasowaæ i zmieniaæ nazwy albumów w &quot;Mojej Galerii&quot;?', 'Powiniene¶ przej¶æ do &quot;Trybu Administracyjnego&quot;<br />Przejd¼ do &quot;Tworzenie/Porz±dkowanie albumów&quot;i kliknij &quot;Nowy&quot;. Zmieñ domy¶ln± nazwê &quot;Nowy Album&quot; na wybran± przez siebie.<br />Mo¿esz tak¿e modyfikowaæ dowolny album ze swojej galerii.<br />Nastêpnie kliknij &quot;Zastosuj zmiany&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('W jaki sposób zezwalaæ i odbieraæ zezwolenia na ogl±danie moich albumów?', 'Przejd¼ do &quot;Trybu Administracyjnego&quot;<br />i sekcji &quot;Modyfikuj moje albumy. Na pasku &quot;Aktualizuj Album&quot; wybierz album, który chcesz zmodyfikowaæ. <br />Mo¿esz zmieniæ jego nazwê, opis, miniaturê, ustawiæ zezwolenia na ogl±danie i komentowanie/ocenianie jego zawarto¶ci.<br />Nastêpnie kliknij &quot;Aktualizuj album&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Co zrobiæ by móc obejrzeæ galerie innych u¿ytkowników?', 'Przejd¼ do &quot;Listy Albumów&quot; i wybierz &quot;Galerie u¿ytkowników&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Co to s± pliki cookie?', 'Pliki cookie zawieraj± dane tekstowe zapisywane przez stronê internetow± na Twoim komputerze. <br />Zazwyczaj pozwalaj± u¿ytkownikowi opu¶ciæ stronê i wej¶æ na ni± ponownie bez konieczno¶ci ponownego logowania.', 'offline', 0), //cpg1.3.0
  array('Sk±d mogê pobraæ ten program aby umie¶ciæ go we w³asnym serwisie?', 'Galeria Coppermine jest darmow± galeri± multimediów, rozpowszechnian± na licencji GNU GPL. Zawiera rozbudowan± funkcjonalno¶æ i zosta³a przygotowana na ró¿ne platformy. Odwied¼ <a href="http://coppermine.sf.net/">stronê domow± Coppermine</a> by dowiedzieæ siê wiêcej i ¶ci±gn±æ najnowsz± wersjê programu.', 'offline', 0), //cpg1.3.0

  'Nawigowanie po stronie', //cpg1.3.0
  array('Co to jest &quot;Lista albumów&quot;?', 'Lista albumów pokazuje ca³± kategoriê, w której obecnie siê znajdujesz wraz z ³±czami do ka¿dego albumu. Je¿eli nie znajdujesz siê obecnie w ¿adnej kategorii, lista albumów wy¶wietli ca³± zawarto¶æ galerii wraz z ³±czami do kategorii, które zawiera. Miniatury mog± byæ tak¿e ³±czami do kategorii..', 'offline', 0), //cpg1.3.0
  array('Czym jest &quot;Moja Galeria&quot;?', 'Opcja ta umo¿liwia u¿ytkownikowi serwisu tworzenie w³asnej galerii, dodawanie, kasowanie i modyfikowanie albumów, oraz przesy³anie do nich plików.', 'allow_private_albums', 0), //cpg1.3.0
  array('Czym ró¿ni siê &quot;Tryb Administracyjny&quot; od &quot;Trybu u¿ytkownika&quot;?', 'Tryb administracyjny umo¿liwia zarz±dzanie albumami znajduj±cymi siê w Twojej prywatnej galerii (a tak¿e innymi albumami - je¿eli zezwoli³ na to administrator).', 'allow_private_albums', 0), //cpg1.3.0
  array('Co to jest &quot;Przes³anie pliku&quot;?', 'To mo¿liwo¶æ przes³ania pliku (jego rodzaj i wielko¶æ s± okre¶lone przez administratora) do wybranych albumów', 'allow_private_albums', 0), //cpg1.3.0
  array('Co to s± &quot;Ostatnie aktualizacje&quot;?', 'Umo¿liwiaj± przejrzenie ostatnio dodanych do strony plików.', 'offline', 0), //cpg1.3.0
  array('Co to s± &quot;Ostatnie komentarze&quot;?', 'Ta opcja pokazuje ostatnio dodane przez u¿ytkowników komentarze, oraz pliki których dotycz±.', 'offline', 0), //cpg1.3.0
  array('Czym jest opcja What\'s &quot;Najpopularniejsze&quot;?', 'Opcja ta pokazuje najczê¶ciej ogl±dane pliki (dotyczy wszystkich u¿ytkowników - zarówno tych zalogowanych jak i niezalogowanych).', 'offline', 0), //cpg1.3.0
  array('Co to jest &quot;Top Lista&quot;?', 'Top lista zawiera listê najwy¿ej ocenianych plików wraz z ich ¶redni± ocen± (np. piêciu u¿ytkowników g³osuje z ocen± <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: plikowi zostanie przyznana ocena <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;lub w¶ród piêciu innych u¿ytkowników ka¿dy daje plikowi ocenê od 1 do 5 (1,2,3,4,5) co spowoduje przyznanie plikowi ¶redniej oceny <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />Klasyfikacja przedstawia siê nastêpuj±co: od <img src="images/rating5.gif" width="65" height="14" border="0" alt="najlepsze" /> (najlepsze) do <img src="images/rating0.gif" width="65" height="14" border="0" alt="najgorsze" /> (najgorsze).', 'offline', 0), //cpg1.3.0
  array('Czym s± &quot;Ulubione&quot;?', 'Ta opcja pozwala u¿ytkownikowi przechowywaæ odno¶niki do ulubionych plików z galerii w pliku cookie zapisywanym przez przegl±darkê.', 'offline', 0), //cpg1.3.0
);



// ------------------------------------------------------------------------- //
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Przypomnienie has³a', //cpg1.3.0
  'err_already_logged_in' => 'Jeste¶ ju¿ zalogowany!', //cpg1.3.0
  'enter_username_email' => 'Podaj nazwê u¿ytkownika lub adres e-mail', //cpg1.3.0
  'submit' => 'dalej', //cpg1.3.0
  'failed_sending_email' => 'E-mail z przypomnieniem has³a nie mo¿e zostaæ wys³any!', //cpg1.3.0
  'email_sent' => 'E-mail z nazw± u¿ytkownika i has³em zosta³ wys³any na adres %s', //cpg1.3.0
  'err_unk_user' => 'Wybrany u¿ytkownik nie istnieje!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - Przypomnienie has³a', //cpg1.3.0
  'passwd_reminder_body' => 'Poprosi³e¶ o przes³anie Twoich danych u¿ytkownika:
Nazwa u¿ytkownika: %s
Has³o: %s
Kliknij %s aby siê zalogowaæ.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Nazwa grupy',
  'disk_quota' => 'Miejsce na dane',
  'can_rate' => 'Mo¿e oceniaæ pliki', //cpg1.3.0
  'can_send_ecards' => 'Mo¿e wysy³aæ e-kartki',
  'can_post_com' => 'Mo¿e zamieszczaæ komentarze',
  'can_upload' => 'Mo¿e przesy³aæ pliki', //cpg1.3.0
  'can_have_gallery' => 'Mo¿e mieæ galeriê osobist±',
  'apply' => 'Zastosuj zmiany',
  'create_new_group' => 'Stwórz now± grupê',
  'del_groups' => 'Skasuj zaznaczon± grupê/y',
  'confirm_del' => 'Uwaga: je¿eli skasujesz tê grupê jej cz³onkowie zostan± przeniesieni do grupy \'Zarejestrowani\'!\n\nKontynuowaæ?',
  'title' => 'Zarz±dzanie grupami',
  'approval_1' => 'Zgoda na pub. upl.(1)',
  'approval_2' => 'Zgoda na priv. upl.(2)',
  'upload_form_config' => 'Konfiguracja formularza przesy³ania', //cpg1.3.0
  'upload_form_config_values' => array( 'Przesy³anie pojedynczych plików', 'Przesy³anie wielu plików', 'Przesy³anie URI', 'Przesy³anie ZIP', 'Plik-URI', 'Plik-ZIP', 'URI-ZIP', 'Plik-URI-ZIP'), //cpg1.3.0
  'custom_user_upload'=>'U¿ytkownik mo¿e wybieraæ ilo¶æ pól do przesy³ania?', //cpg1.3.0
  'num_file_upload'=>'Maksymalna/dok³adna ilo¶æ pól przesy³ania plików', //cpg1.3.0
  'num_URI_upload'=>'Maksymalna/dok³adna ilo¶æ pól przesy³ania URI', //cpg1.3.0
  'note1' => '<b>(1)</b> Przesy³anie zdjêæ do albumu publicznego wymaga zgody administratora',
  'note2' => '<b>(2)</b> Przesy³anie zdjêæ do albumu u¿ytkownika wymaga zgody administratora',
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
  'confirm_delete' => 'Czy na pewno chcesz skasowaæ ten album? \\nZostan± skasowane równie¿ wszystkie pliki i komentarze.', //js-alert //cpg1.3.0
  'delete' => 'KASUJ',
  'modify' => 'W£A¦CIWO¦CI',
  'edit_pics' => 'EDYCJA PLIKÓW', //cpg1.3.0
);

$lang_list_categories = array(
  'home' => 'Strona g³ówna',
  'stat1' => 'pliki: <b>[pictures]</b>, albumy: <b>[albums]</b>, kategorie: <b>[cat]</b>, komentarze: <b>[comments]</b>, ods³ony: <b>[views]</b>', //cpg1.3.0
  'stat2' => 'pliki: <b>[pictures]</b>, albumy: <b>[albums]</b>, ods³ony: <b>[views]</b>', //cpg1.3.0
  'xx_s_gallery' => 'galeria %s', //cpg1.3.0
  'stat3' => 'pliki: <b>[pictures]</b>, albumy: <b>[albums]</b>, komentarze: <b>[comments]</b>, ods³ony: <b>[views]</b>', //cpg1.3.0
);

$lang_list_users = array(
  'user_list' => 'Lista u¿ytkowników',
  'no_user_gal' => 'Galerie u¿ytkowników nie istniej± lub nie masz do nich dostêpu',
  'n_albums' => 'albumów: %s',
  'n_pics' => 'plików: %s',  //cpg1.3.0
);

$lang_list_albums = array(
  'n_pictures' => 'plików: %s', //cpg1.3.0
  'last_added' => ', ostatnio dodany: %s',
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Logowanie',
  'enter_login_pswd' => 'Podaj nazwê u¿ytkownika i has³o aby siê zalogowaæ',
  'username' => 'Nazwa u¿ytkownika',
  'password' => 'Has³o',
  'remember_me' => 'Pamiêtaj mnie',
  'welcome' => 'Witaj %s ...',
  'err_login' => '*** Logowanie nieudane, spróbuj ponownie ***',
  'err_already_logged_in' => 'Jeste¶ ju¿ zalogowany/a!',
  'forgot_password_link' => 'Zapomnia³em has³a', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Wylogowywanie',
  'bye' => 'Pa pa %s ...',
  'err_not_loged_in' => 'Nie jeste¶ zalogowany/a!',
);

// ------------------------------------------------------------------------- //
// File phpinfo.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP info', //cpg1.3.0
  'explanation' => 'Dane generowane przez funkcjê <a href="http://www.php.net/phpinfo">phpinfo()</a>, wy¶wietlane przez Coppermine (obcinanie wyj¶cia przy prawym rogu).', //cpg1.3.0
  'no_link' => 'Ogl±danie tych informacji przez osoby nieuprawnione mo¿e stanowiæ zagro¿enie bezpieczeñstwa, dlatego te¿ stronê tê mo¿na ogl±daæ tylko po zalogowaniu siê jako administrator. Nie mo¿esz podaæ ³±cza do tej strony innym u¿ytkownikom, nie uzyskaj± oni dostêpu do strony.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Uaktualnij album %s',
  'general_settings' => 'Ustawienia ogólne',
  'alb_title' => 'Tytu³ albumu',
  'alb_cat' => 'Kategoria albumu',
  'alb_desc' => 'Opis albumu',
  'alb_thumb' => 'Miniatury',
  'alb_perm' => 'Uprawnienia albumu',
  'can_view' => 'Mo¿e byæ ogl±dany przez',
  'can_upload' => 'Go¶cie mog± przesy³aæ pliki',
  'can_post_comments' => 'Go¶cie mog± dodawaæ komentarze',
  'can_rate' => 'Go¶cie mog± oceniaæ pliki',
  'user_gal' => 'Galeria u¿ytkownika',
  'no_cat' => '* Bez kategorii *',
  'alb_empty' => 'Album jest pusty',
  'last_uploaded' => 'Ostatnio przes³ane',
  'public_alb' => 'Wszyscy (album publiczny)',
  'me_only' => 'Tylko ja',
  'owner_only' => 'Tylko w³a¶ciciel albumu: (%s)',
  'groupp_only' => 'Cz³onkowie grupy: \'%s\'',
  'err_no_alb_to_modify' => 'Nie mo¿na modyfikowaæ ¿adnego albumu w bazie.',
  'update' => 'Uaktualnij album', //cpg1.3.0
  'notice1' => '(*) w zale¿no¶ci od ustawieñ %sgrupy%',
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Niestety, ju¿ ocenia³e¶ ten plik', //cpg1.3.0
  'rate_ok' => 'Twój g³os zosta³ zarejestrowany',
  'forbidden' => 'Nie mo¿esz oceniaæ swoich w³asnych plików.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Administratorzy serwisu {SITE_NAME} dok³adaj± wszelkich starañ by usuwaæ lub zmieniaæ publikowane przez u¿ytkowników tre¶ci ogólnie przyjête za obra¼liwe, ³ami±ce prawo, lub obsceniczne, jest jednak niemo¿liwe by przejrzeæ ka¿dy post. Dlatego musisz zobowi±zaæ siê, ¿e wszelkie opinie, materia³y i komentarze jakie zamie¶cisz na stronach serwisu reprezentuj± wy³±cznie Twoje pogl±dy, a nie pogl±dy osób zarz±dzaj±cych serwisem.<br />
<br />
Niniejszym zobowi±zujesz siê, by nie zamieszczaæ na stronach serwisu {SITE_NAME} materia³ów obra¼liwych, obscenicznych, wulgarnych, pornograficznych, nawo³uj±cych do u¿ycia przemocy, stanowi±cych zagro¿enie dla bezpieczeñstwa publicznego, oraz innych materia³ów, których przedstawienie na stronach serwisu mog³oby stanowiæ z³amanie obowi±zuj±cego prawa. Przyjmujesz do wiadomo¶ci, ¿e administrator lub moderatorzy serwisu {SITE_NAME} maj± prawo do edycji i usuwania dowolnych zamieszczonych przez Ciebie tre¶ci niezgodnych z tym regulaminem. Jako u¿ytkownik serwisu zgadzasz siê na przechowywanie informacji niezbêdnych do obs³ugi Twojego konta w bazie danych serwisu, oraz otrzymujesz prawo do ich modyfikacji oraz usuniêcia w dowolnej chwili. W tym celu nale¿y skontaktowaæ siê z administratorem serwisu. Informacje te nie bêd± przekazywane osobom trzecim bez Twojej zgody, jednak¿e administratorzy serwisu nie mog± ponosz± odpowiedzialno¶ci za kradzie¿ tych informacji w wypadku dzia³añ osób nieuprawnionych.<br />
<br />
Serwis {SITE_NAME} u¿ywa plików cookie do przechowywania informacji na Twoim komputerze. S³u¿± one jedynie do poprawienia komfortu przegl±dania zawarto¶ci serwisu. Twój adres e-mail jest u¿ywany jedynie do wysy³ania potwierdzeñ dotycz±cych rejestracji w serwisie. <br />
<br />
Klikniêcie znajduj±cego siê poni¿ej przycisku 'Zgadzam siê' oznacza zgodê na przedstawiony wy¿ej regulamin serwisu.
EOT;


$lang_register_php = array(
  'page_title' => 'Rejestrowanie u¿ytkownika',
  'term_cond' => 'Warunki korzystania z serwisu',
  'i_agree' => 'Zgadzam siê',
  'submit' => 'Wykonaj rejestracjê',
  'err_user_exists' => 'Nazwa u¿ytkownika któr± wybra³e¶ ju¿ istnieje. Wybierz inn±',
  'err_password_mismatch' => 'Has³a nie pasuj± do siebie. Wpisz je ponownie',
  'err_uname_short' => 'Nazwa u¿ytkownika musi mieæ co najmniej 2 znaki',
  'err_password_short' => 'Has³o musi mieæ co najmniej 2 znaki',
  'err_uname_pass_diff' => 'Nazwa u¿ytkownika i has³o musz± siê od siebie ró¿niæ',
  'err_invalid_email' => 'Adres e-mail jest niepoprawny',
  'err_duplicate_email' => 'W bazie jest ju¿ u¿ytkownik o podanym przez Ciebie adresie e-mail',
  'enter_info' => 'Wprowad¼ informacje potrzebne do rejestracji',
  'required_info' => 'Informacje wymagane',
  'optional_info' => 'Informacje opcjonalne',
  'username' => 'Nazwa u¿ytkownika',
  'password' => 'Has³o',
  'password_again' => 'Wprowad¼ ponownie has³o',
  'email' => 'E-mail',
  'location' => 'Lokalizacja',
  'interests' => 'Zainteresowania',
  'website' => 'Strona domowa',
  'occupation' => 'Zajêcie / zawód',
  'error' => 'B£¡D',
  'confirm_email_subject' => '%s - Informacja o rejestracji',
  'information' => 'Informacja',
  'failed_sending_email' => 'E-mail z potwierdzeniem nie mo¿e byæ wys³any!',
  'thank_you' => 'Dziêkujemy za rejestracjê.<br /><br />Na podany przez Ciebie adres e-mail zosta³ wys³any list z pro¶b± o potwierdzenie.',
  'acct_created' => 'Konto zosta³o utworzone. Mo¿esz ju¿ zalogowaæ siê podaj±c wybran± wczesniej nazwê u¿ytkownika, oraz has³o',
  'acct_active' => 'Konto jest ju¿ aktywne. Mo¿esz ju¿ zalogowaæ siê podaj±c wybran± wczesniej nazwê u¿ytkownika, oraz has³o',
  'acct_already_act' => 'Twoje konto zosta³o ju¿ aktywowane!',
  'acct_act_failed' => 'Te konto nie mo¿e byæ aktywowane!',
  'err_unk_user' => 'Podany u¿ytkownik nie istnieje!',
  'x_s_profile' => 'profil: %s',
  'group' => 'Grupa',
  'reg_date' => 'Do³±czy³/a',
  'disk_usage' => 'U¿yte miejsce',
  'change_pass' => 'Zmieñ has³o',
  'current_pass' => 'Bie¿±ce has³o',
  'new_pass' => 'Nowe has³o',
  'new_pass_again' => 'Podaj ponownie nowe has³o',
  'err_curr_pass' => 'Bie¿±ce has³o jest niepoprawne',
  'apply_modif' => 'Zastosuj zmiany',
  'change_pass' => 'Zmiañ moje has³o',
  'update_success' => 'Twój profil zosta³ uaktualniony',
  'pass_chg_success' => 'Twoje has³o zosta³o zmienione',
  'pass_chg_error' => 'Twoje has³o nie zosta³o zmienione',
  'notify_admin_email_subject' => '%s - powiadomienie o rejestracji', //cpg1.3.0
  'notify_admin_email_body' => 'W galerii zarejestrowa³ siê nowy u¿ytkownik o nazwie "%s"', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
Dziêkujemy za rejestracjê w witrynie {SITE_NAME}

Twoja nazwa u¿ytkownika to: "{USER_NAME}"
Twoje has³o to: "{PASSWORD}"

Aby aktywowaæ konto kliknij na poni¿szy link albo skopiuj go
i wklej do swojej przegl±darki internetowej.

{ACT_LINK}

Pozdrowienia,

Zespó³ strony {SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'Przegl±daj komentarze',
  'no_comment' => 'Nie ma komentarzy do przegl±dania',
  'n_comm_del' => 'Skasowano komentarzy: %s',
  'n_comm_disp' => 'Ilo¶æ komentarzy do wy¶wietlenia',
  'see_prev' => 'Zobacz poprzednie',
  'see_next' => 'Zobacz nastêpne',
  'del_comm' => 'Skasuj wybrane komentarze',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
  0 => 'Wyszukiwarka zdjêæ',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Szukaj plików', //cpg1.3.0
  'select_dir' => 'Wybierz katalog',
  'select_dir_msg' => 'Wybrana funkcja umo¿liwia wsadowe dodawanie do galerii zdjêæ które zosta³y przes³ane na serwer.<br /><br />Wybierz katalog do którego zosta³y przes³ane wybrane pliki', //cpg1.3.0
  'no_pic_to_add' => 'Nie ma pliku do dodania', //cpg1.3.0
  'need_one_album' => 'U¿ycie tej funckji wymaga istnienia przynajmniej jednego albumu do którego masz uprawnienia',
  'warning' => 'Uwaga',
  'change_perm' => 'skrypt nie mo¿e zapisywaæ plików do wybranego katalogu. Zmieñ ustawienia na 755 lub 777 zanim spróbujesz dodaæ pliki!', //cpg1.3.0
  'target_album' => '<b>Zapisuje zdjêcia do katalogu &quot;</b>%s<b>&quot; </b>%s', //cpg1.3.0
  'folder' => 'Katalog',
  'image' => 'plik',
  'album' => 'Album',
  'result' => 'Wynik',
  'dir_ro' => 'Nie mo¿na zapisaæ. ',
  'dir_cant_read' => 'Nie mo¿na odczytaæ. ',
  'insert' => 'Dodawanie nowych plików do galerii', //cpg1.3.0
  'list_new_pic' => 'Lista nowych plików', //cpg1.3.0
  'insert_selected' => 'Wstaw wybrane pliki', //cpg1.3.0
  'no_pic_found' => 'Nie znaleziono nowych plików', //cpg1.3.0
  'be_patient' => 'Proszê o cierpliwo¶æ, skrypt potrzebuje czasu na dodanie zdjêæ', //cpg1.3.0
  'no_album' => 'nie wybrano albumu',  //cpg1.3.0
  'notes' =>  '<ul>'.
  '<li><b>OK</b> : oznacza, ¿e zdjêcie zosta³o dodane'.
  '<li><b>DP</b> : oznacza, ¿e zdjêcie jest zduplikowane i istnieje ju¿ w bazie'.
  '<li><b>PB</b> : oznacza brak mo¿liwo¶ci dodania pliku. Sprawd¼ swoje uprawnienia do zapisywania katalogów i plików'.
  '<li><b>NA</b> : oznacza, ¿e nie wybra³e¶ albumu do którego mia³yby trafiæ pliki, kliknij \'<a href="javascript:history.back(1)">tutaj</a>\' i wybierz album. Je¿eli nie masz jeszcze albumu, <a href="albmgr.php">utwórz tutaj nowy</a></li>'.
  '<li>Je¿eli \'znaki\' OK, DP, PB nie pojawiaj± siê, kliknij na pliku aby otrzymaæ komunikat generowany przez PHP'.
  '<li>Je¿eli przegl±darka nie za³adowa³a strony, wci¶nij klawisz F5 aby j± od¶wie¿yæ'.
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
  'title' => 'Banuj U¿ytkowników', 
  'user_name' => 'Nazwa u¿ytkownika', 
  'ip_address' => 'Adres IP', 
  'expiry' => 'Aktywny do daty<br>(pusta - na sta³e)', 
  'edit_ban' => 'Zapisz zmiany', 
  'delete_ban' => 'Kasuj', 
  'add_new' => 'Dodaj nowy ban', 
  'add_ban' => 'Dodaj', 
  'error_user' => 'Nie mo¿na znale¼æ takiego u¿ytkownika', //cpg1.3.0
  'error_specify' => 'Musisz okre¶liæ nazwê u¿ytkownika lub address IP', //cpg1.3.0
  'error_ban_id' => 'Niew³a¶ciwy ID!', //cpg1.3.0
  'error_admin_ban' => 'Nie mo¿na banowaæ samego siebie!', //cpg1.3.0
  'error_server_ban' => 'Chcia³e¶ zabanowaæ swój w³asny serwer? Hehe, nie mo¿na tego robiæ...', //cpg1.3.0
  'error_ip_forbidden' => 'Nie mo¿na banowaæ tego adresu IP - jest nieroute\'owalny!', //cpg1.3.0
  'lookup_ip' => 'Sprawdz adres IP', //cpg1.3.0
  'submit' => 'dalej!', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Upload file', //cpg1.3.0
  'custom_title' => 'Spersonalizowany formularz przesy³ania', //cpg1.3.0
  'cust_instr_1' => 'Mo¿esz wybraæ w³asn± liczbê pól s³u¿±cych do przesy³ania plików, jednak nie zostanie pokazane ich wiêcej ni¿ w limicie okre¶lonym poni¿ej.', //cpg1.3.0
  'cust_instr_2' => 'Personalizacja formularza', //cpg1.3.0
  'cust_instr_3' => 'Ilo¶æ pól przesy³ania: %s', //cpg1.3.0
  'cust_instr_4' => 'Pola przesy³ania URI/URL: %s', //cpg1.3.0
  'cust_instr_5' => 'Pola przesy³ania URI/URL:', //cpg1.3.0
  'cust_instr_6' => 'Pola przesy³ania plików:', //cpg1.3.0
  'cust_instr_7' => 'Podaj liczbê ka¿dego z rodzajów pól przesy³ania plików, jakich potrzebujesz. Nastêpnie kliknij \'Dalej\'. ', //cpg1.3.0
  'reg_instr_1' => 'Nieudane tworzenie formularza.', //cpg1.3.0
  'reg_instr_2' => 'Mo¿esz przesy³aæ pliki przy pomocy poni¿szych pól. Rozmiar plików przesy³anych na serwer nie mo¿e przekroczyæ %s KB ka¿dy. Pliki ZIP przes³ane w sekcjach \'Przes³anie pliku\' oraz \'Przes³anie URI/URL\' pozostan± skompresowane.', //cpg1.3.0
  'reg_instr_3' => 'Je¿eli chcesz aby spakowane pliki zosta³y zdekompresowane, u¿yj pola przesy³ania plików w sekcji \'Przesy³anie z rozpakowaniem ZIP\'', //cpg1.3.0
  'reg_instr_4' => 'Przy przesy³aniu plików w sekcji Przesy³ania URI/URL, podaj ca³± ¶cie¿kê do pliku, np: http://www.mojastrona.com/images/foto.jpg', //cpg1.3.0
  'reg_instr_5' => 'Po uzupe³nieniu formularza, u¿yj przycisku \'Dalej\'.', //cpg1.3.0
  'reg_instr_6' => 'Przesy³anie z rozpakowaniem ZIP:', //cpg1.3.0
  'reg_instr_7' => 'Przesy³anie plików:', //cpg1.3.0
  'reg_instr_8' => 'Przesy³anie URI/URL:', //cpg1.3.0
  'error_report' => 'Raport b³êdów', //cpg1.3.0
  'error_instr' => 'Wyst±pi³y b³êdy przy nastêpuj±cych plikach:', //cpg1.3.0
  'file_name_url' => 'Nazwa pliku/URL', //cpg1.3.0
  'error_message' => 'Wiadomo¶æ b³êdu', //cpg1.3.0
  'no_post' => 'Plik nie zosta³ przes³any metod± POST.', //cpg1.3.0
  'forb_ext' => 'Zabronione rozszerzenie pliku.', //cpg1.3.0
  'exc_php_ini' => 'Przekroczono wielko¶æ plku okre¶lon± w php.ini.', //cpg1.3.0
  'exc_file_size' => 'Przekroczono wielko¶æ plku okre¶lon± w konfiguracji CPG.', //cpg1.3.0
  'partial_upload' => 'Uda³o siê tylko czê¶ciowo przes³aæ plik.', //cpg1.3.0
  'no_upload' => 'Nie dosz³o do przes³ania.', //cpg1.3.0
  'unknown_code' => 'Nieznany b³±d przesy³ania PHP.', //cpg1.3.0
  'no_temp_name' => 'Nie uda³o siê przes³aæ pliku ze wzglêdu na brak tymczasowej nazwy.', //cpg1.3.0
  'no_file_size' => 'Plik nie zawiera danych lub jest uszkodzony', //cpg1.3.0
  'impossible' => 'Nie mo¿na przenie¶æ pliku.', //cpg1.3.0
  'not_image' => 'Plik nie jest obrazem lub jest uszkodzony', //cpg1.3.0
  'not_GD' => 'Brak rozszerzenia GD.', //cpg1.3.0
  'pixel_allowance' => 'Przekroczono rozmiar podany w pikselach.', //cpg1.3.0
  'incorrect_prefix' => 'Niew³a¶ciwy prefiks URI/URL', //cpg1.3.0
  'could_not_open_URI' => 'Nie mo¿na otworzyæ URI.', //cpg1.3.0
  'unsafe_URI' => 'Nie mo¿na potwierdziæ bezpieczeñstwa.', //cpg1.3.0
  'meta_data_failure' => 'B³±d metadanych', //cpg1.3.0
  'http_401' => '401 - Brak dostêpu', //cpg1.3.0
  'http_402' => '402 - Wymagana op³ata', //cpg1.3.0
  'http_403' => '403 - Dostêp zabroniony', //cpg1.3.0
  'http_404' => '404 - Nie znaleziono', //cpg1.3.0
  'http_500' => '500 - Wewnêtrzny b³±d serwera', //cpg1.3.0
  'http_503' => '503 - Us³uga niedostêpna', //cpg1.3.0
  'MIME_extraction_failure' => 'nie mo¿na okre¶liæ MIME.', //cpg1.3.0
  'MIME_type_unknown' => 'Nieznany typ MIME', //cpg1.3.0
  'cant_create_write' => 'Nie mo¿na stworzyæ/zapisaæ pliku.', //cpg1.3.0
  'not_writable' => 'Nie mo¿na zapisaæ do pliku.', //cpg1.3.0
  'cant_read_URI' => 'Nie mo¿na czytaæ URI/URL', //cpg1.3.0
  'cant_open_write_file' => 'Nie mo¿na otworzyæ pliku URI do zapisu.', //cpg1.3.0
  'cant_write_write_file' => 'Nie mo¿na zapisaæ pliku zapisywalnego URI.', //cpg1.3.0
  'cant_unzip' => 'Nie mo¿na zdekompresowaæ.', //cpg1.3.0
  'unknown' => 'Nieznany b³±d', //cpg1.3.0
  'succ' => 'Udane przes³anie', //cpg1.3.0
  'success' => 'Udane przes³anie plików: %s.', //cpg1.3.0
  'add' => 'Kliknij \'Continue\' by dodaæ pliki do albumów.', //cpg1.3.0
  'failure' => 'Nieudane przes³anie', //cpg1.3.0
  'f_info' => 'Informacja o pliku', //cpg1.3.0
  'no_place' => 'Poprzedni plik nie zosta³ umieszczony w albumie.', //cpg1.3.0
  'yes_place' => 'Poprzedni plik zosta³ umieszczony w albumie.', //cpg1.3.0
  'max_fsize' => 'Maksymalny rozmiar przesy³anego pliku to %s KB',
  'album' => 'Album',
  'picture' => 'Plik', //cpg1.3.0
  'pic_title' => 'Tytu³ pliku', //cpg1.3.0
  'description' => 'Opis pliku', //cpg1.3.0
  'keywords' => 'S³owa kluczowe (oddzielone spacjami)',
  'err_no_alb_uploadables' => 'Niestety, nie ma albumu do którego móg³by¶ przes³aæ pliki', //cpg1.3.0
  'place_instr_1' => 'Proszê umie¶ciæ teraz pliki w albumach. Mo¿esz teraz tak¿e wprowadziæ stosowne informacje o ka¿dym z plików.', //cpg1.3.0
  'place_instr_2' => 'S± jeszcze pliki wymagaj±ce umieszczenia. Proszê klikn±æ \'Dalej\'.', //cpg1.3.0
  'process_complete' => 'Wszystkie pliki umieszczono w albumach.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'title' => 'Zarz±dzanie u¿ytkownikami',
  'name_a' => 'Nazwa rosn±co',
  'name_d' => 'Nazwa malej±co',
  'group_a' => 'Grupa rosn±co',
  'group_d' => 'Grupa malej±co',
  'reg_a' => 'Data rej. rosn±co',
  'reg_d' => 'Data rej. malej±co',
  'pic_a' => 'Liczba plików rosn±co',
  'pic_d' => 'Liczba plików malej±co',
  'disku_a' => 'U¿ycie dysku rosn±co',
  'disku_d' => 'U¿ycie dysku malej±co',
  'lv_a' => 'Ostatnie wizyty rosn±co', //cpg1.3.0
  'lv_d' => 'Ostatnie wizyty malej±co', //cpg1.3.0
  'sort_by' => 'Posortuj u¿ytkowników wg',
  'err_no_users' => 'Tabela u¿ytkowników jest pusta!',
  'err_edit_self' => 'Nie mo¿esz modyfikowaæ teraz swojego profilu. Aby to zrobiæ kliknij ³±cze \'Mój profil\'',
  'edit' => 'EDYTUJ',
  'delete' => 'KASUJ',
  'name' => 'Nazwa u¿ytkownika',
  'group' => 'Grupa',
  'inactive' => 'Nieaktywny',
  'operations' => 'Operacje',
  'pictures' => 'Pliki', //cpg1.3.0
   'disk_space' => 'U¿yte miejsce / Quota',
  'registered_on' => 'Zerejestrowano',
  'last_visit' => 'Ostatnia wizyta', //cpg1.3.0
  'u_user_on_p_pages' => 'u¿ytkowników: %d na stronach: %d',
  'confirm_del' => 'Czy na pewno chcesz skasowaæ tego u¿ytkownika? \\nWszystkie jego pliki i albumy zostan± automatycznie skasowane.', //js-alert //cpg1.3.0
  'mail' => 'E-MAIL',
  'err_unknown_user' => 'Selected user does not exist !',
  'modify_user' => 'Modyfikuj u¿ytkownika',
  'notes' => 'Uwagi',
  'note_list' => '<li>Je¿eli nie chcesz zmieniaæ swojego ulubionego has³a teraz, zostaw pole "has³o" puste',
  'password' => 'Has³o',
  'user_active' => 'U¿ytkownik jest aktywny',
  'user_group' => 'Grupa u¿ytkowników',
  'user_email' => 'Adres e-mail u¿ytkownika',
  'user_web_site' => 'Strona sieci web u¿ytkownika',
  'create_new_user' => 'Utwórz nowego u¿ytkownika',
  'user_location' => 'Lokacja u¿ytkownika',
  'user_interests' => 'Zainteresowania',
  'user_occupation' => 'Zajêcie',
  'latest_upload' => 'Ostatnio przes³ane', //cpg1.3.0
  'never' => 'brak', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
  'title' => 'Narzêdzia administracyjne (Zmieñ rozmiar zdjêæ)', //cpg1.3.0
  'what_it_does' => 'Do czego to s³u¿y', 
  'what_update_titles' => 'Uaktualnia tytu³y nazwami plików', 
  'what_delete_title' => 'Kasuje tytu³y', 
  'what_rebuild' => 'Odbudowuje miniatury i zdjêcia po¶rednie', 
  'what_delete_originals' => 'Kasuje zdjêcia ¼ród³owe, zastêpuj±c je zdjêciami o zmienionych wymiarach', 
  'file' => 'Plik', 
  'title_set_to' => 'tytu³', 
  'submit_form' => 'prze¶lij', 
  'updated_succesfully' => 'zaktualizowano', 
  'error_create' => 'B£¡D tworzenia', 
  'continue' => 'Przetwarzaj wiêcej zdjêæ', 
  'main_success' => 'Plik %s zosta³ ustawiony jako zdjêcie g³ówne', //cpg1.3.0
  'error_rename' => 'B³±d przy zmiany nazwy z %s na %s', 
  'error_not_found' => 'Plik %s nie zosta³ znaleziony', 
  'back' => 'powrót na stronê g³ówn±', 
  'thumbs_wait' => 'Uaktualniam miniatury i/lub zdjêcia o zmienionych wymiarach, proszê czekaæ...', 
  'thumbs_continue_wait' => 'Trwa uaktualnianie miniatur i/lub zdjêæ o zmienionych wymiarach...', 
  'titles_wait' => 'Uaktualnianie tytu³ów, proszê czekaæ...', 
  'delete_wait' => 'Kasowanie tytu³ów, proszê czekaæ...', 
  'replace_wait' => 'Kasowanie orygina³ów i zamienianie ich na zdjêcia o zmienionych wymiarach..', 
  'instruction' => 'Szybkie instrukcje', 
  'instruction_action' => 'Wybierz akcjê', 
  'instruction_parameter' => 'Ustaw parametry', 
  'instruction_album' => 'Wybierz album', 
  'instruction_press' => 'Naci¶nij %s', 
  'update' => 'Uaktualnij miniatury i/lub zdjêcia o zmienionych wymiarach', 
  'update_what' => 'Do uaktualnienia', 
  'update_thumb' => 'Tylko miniatury', 
  'update_pic' => 'Tylko zdjêcia o zmienionych wymiarach', 
  'update_both' => 'Zarówno miniatury jak i zdjêcia o zmienionych rozmiarach', 
  'update_number' => 'Ilo¶æ przetworzonych zdjêæ/klikniêcie', 
  'update_option' => '(Spróbuj zmniejszyæ tê ilo¶æ, je¿eli zaobserwujesz problem z timeoutem)',
  'filename_title' => 'Nazwa pliku &rArr; Tytu³ pliku', //cpg1.3.0
  'filename_how' => 'Jak modyfikowaæ nazwê pliku', 
  'filename_remove' => 'Usuñ rozszerzenie .jpg i zamieñ _ (podkre¶lenie) na spacje', 
  'filename_euro' => 'Zmienia 2003_11_23_13_20_20.jpg na 23/11/2003 13:20', 
  'filename_us' => 'Zmienia 2003_11_23_13_20_20.jpg na 11/23/2003 13:20',
  'filename_time' => 'Zmienia 2003_11_23_13_20_20.jpg na 13:20',
  'delete' => 'Kasowanie tytu³ów lub oryginalnych plików', //cpg1.3.0
  'delete_title' => 'Kasowanie tytu³ów plików', //cpg1.3.0
  'delete_original' => 'Skasuj oryginalne zdjêcia', 
  'delete_replace' => 'Kasuje oryginalne zdjêcia zastêpuj±c je zdjêciami zrewymiarowanymi', 
  'select_album' => 'Wybierz album',
  'delete_orphans' => 'Kasuj komentarze do nieistniej±cych plików (dotyczy wszystkich albumów)', //cpg1.3.0
  'orphan_comment' => 'znalezionych komentarzy do nieistniej±cych plików', //cpg1.3.0
  'delete' => 'Kasuj', //cpg1.3.0
  'delete_all' => 'Kasuj wszystko', //cpg1.3.0
  'comment' => 'Komentarz: ', //cpg1.3.0
  'nonexist' => 'do³±czony do nieistniej±cego pliku # ', //cpg1.3.0
  'phpinfo' => 'Wy¶wietl phpinfo', //cpg1.3.0
  'update_db' => 'Aktualizacja bazy danych', //cpg1.3.0
  'update_db_explanation' => 'Je¿eli usun±³e¶ pliki coppermine, doda³e¶ jak±¶ modyfikacjê, lub dokona³e¶ aktualizacji poprzedniej wersji coppermine, uruchom jednorazowo aktualizacjê bazy danych. Stworzy ona niezbêdne tabele i/lub ustawienia konfiguracyjne w bazie danych coppermine.', //cpg1.3.0
);

?>