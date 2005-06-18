<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.3.0  //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002,2003 Gregory DEMAR    //
// http://www.chezgreg.net/coppermine/  //
// ------------------------------------------------------------------------- //
// Updated by the Coppermine Dev Team  //
// (http://coppermine.sf.net/team/)   //
// see /docs/credits.html for details  //
// ------------------------------------------------------------------------- //
// This program is free software; you can redistribute it and/or modify  //
// it under the terms of the GNU General Public License as published by  //
// the Free Software Foundation; either version 2 of the License, or  //
// (at your option) any later version.  //
// ------------------------------------------------------------------------- //
// ENCODING CHECK; SHOULD BE YEN BETA MU: ¥ ß µ
// ------------------------------------------------------------------------- //
// $Id: polish-utf-8.php,v 1.8 2005/01/01 11:55:34 chtito Exp $
// ------------------------------------------------------------------------- //

// info about translators and translated language
$lang_translation_info = array(
'lang_name_english' => 'Polish', 
'lang_name_native' => 'Polski',
'lang_country_code' => 'pl',
'trans_name'=> 'Jacek Domoń',
'trans_email' => 'plusz@plusz.net',
'trans_website' => 'http://www.plusz.net',
'trans_date' => '2004-05-16', 
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bajtów', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Niedziela', 'Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota');
$lang_month = array('Styczenia', 'Lutego', 'Marca', 'Kwietnia', 'Maja', 'Czerwca', 'Lipica', 'Sierpnia', 'Wrzeńnia', 'Października', 'Listopada', 'Grudnia');

// Some common strings
$lang_yes = 'Tak';
$lang_no  = 'Nie';
$lang_back = 'Wstecz';
$lang_continue = 'Dalej';
$lang_info = 'Informacja';
$lang_error = 'Błąd';

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
  'toprated' => 'Najwyżej oceniane',
  'lasthits' => 'Ostatnio oglądane',
  'search' => 'Wyniki wyszukiwania', 
  'favpics'=> 'Ulubione pliki' //cpg1.3.0
);

$lang_errors = array(
  'access_denied' => 'Nie masz uprawnień aby oglądać tę stronę.',
  'perm_denied' => 'Nie masz uprawnień aby wykonać tę operację.',
  'param_missing' => 'Skrypt został wywołany bez wymaganego parametru.',
  'non_exist_ap' => 'Wybrany plik lub album nie istnieje!',
  'quota_exceeded' => 'Przekroczono limit miejsca. <br /><br />Twój przydział: [quota]K, Twoje pliki używają obecnie: [space]K. Dodanie wybranego pliku spowoduje przekroczenie limitu.', //cpg1.3.0
  'gd_file_type_err' => 'Jeżli w użyciu jest biblioteka GD, dozwolone formaty zdjęć to wyłącznie JPEG i PNG.',
  'invalid_image' => 'Zdjęcie które przesłano nie może być obsłużone przez bibliotekę GD.',
  'resize_failed' => 'Nie można stworzyć miniatury lub zdjęcia pośredniego.',  
  'no_img_to_display' => 'Brak pliku do wyświetlenia',
  'non_exist_cat' => 'Wybrana kategoria nie istnieje',
  'orphan_cat' => 'Kategoria nie ma gałęzi nadrzędnej, uruchom menedżera kategorii aby rozwiązać ten problem.', //cpg1.3.0
  'directory_ro' => 'Katalog \'%s\' jest zabezpieczony przed zapisem. Pliki nie mogą być skasowane.', //cpg1.3.0
  'non_exist_comment' => 'Wybrany komentarz nie istnieje.',
  'pic_in_invalid_album' => 'Plik znajduje się w nieistniejącym albumie (%s)!?', //cpg1.3.0
  'banned' => 'Obecnie Twój dostęp do strony został zablokowany.',
  'not_with_udb' => 'Wybrana funkcja nie jest dostępna, ponieważ jest zintegrowana z oprogramowniem forum. Czynność którą chcesz wykonać nie jest wspierana w tej konfiguracji, bądź powinna być obsłużona przez oprogramowanie forum.',
  'offline_title' => 'Offline', //cpg1.3.0
  'offline_text' => 'Galeria jest obecnie wyłączona - spróbuj ponownie później', //cpg1.3.0
  'ecards_empty' => 'Nie ma obecnie żadnych zapisów dotyczących e-kartek. Sprawdź, czy włączyłeś logowanie e-kartek w konfiguracji coppermine!', //cpg1.3.0
  'action_failed' => 'Działanie nieudane. Coppermine nie może przetworzyć Twojego żądania.', //cpg1.3.0
  'no_zip' => 'Biblioteki do obsługi archiwów ZIP nie są obecnie dostępne. Skontaktuj się z administratorem Coppermine.', //cpg1.3.0
  'zip_type' => 'Nie masz uprawnień by przesyłać archiwa ZIP.', //cpg1.3.0
);

$lang_bbcode_help = 'Możesz użyć następujących kodów: <li>[b]<b>Bold</b>[/b]</li> <li>[i]<i>Italic</i>[/i]</li> <li>[url=http://yoursite.com/]Url Text[/url]</li> <li>[email]user@domain.com[/email]</li>'; //cpg1.3.0

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //
$lang_main_menu = array(
  'alb_list_title' => 'Przejdź do listy albumów',
  'alb_list_lnk' => 'Albumy',
  'my_gal_title' => 'Do prywatnej galerii',
  'my_gal_lnk' => 'Moja galeria',
  'my_prof_lnk' => 'Mój profil',
  'adm_mode_title' => 'Przełącz w tryb administratora',
  'adm_mode_lnk' => 'Tryb administratora',
  'usr_mode_title' => 'Przełącz w tryb użytkownika',
  'usr_mode_lnk' => 'Tryb użytkownika',
  'upload_pic_title' => 'Przesłanie pliku do albumu', //cpg1.3.0
  'upload_pic_lnk' => 'Przesłanie pliku', //cpg1.3.0
  'register_title' => 'Utwórz konto',
  'register_lnk' => 'Zarejestruj się',
  'login_lnk' => 'Zaloguj',
  'logout_lnk' => 'Wyloguj',
  'lastup_lnk' => 'Ostatnio dodane',
  'lastcom_lnk' => 'Ostatnie komentarze',
  'topn_lnk' => 'Najpopularniejsze',
  'toprated_lnk' => 'Top Lista',
  'search_lnk' => 'Szukaj',
  'fav_lnk' => 'Ulubione',
  'memberlist_title' => 'Pokaż użytkowników', //cpg1.3.0
  'memberlist_lnk' => 'Użytkownicy', //cpg1.3.0
   'faq_title' => 'FAQ galerii &quot;Coppermine&quot;', //cpg1.3.0
  'faq_lnk' => 'FAQ', //cpg1.3.0
);
  
$lang_gallery_admin_menu = array(
  'upl_app_lnk' => 'Akceptacja plików',
  'config_lnk' => 'Konfiguracja',
  'albums_lnk' => 'Albumy',
  'categories_lnk' => 'Kategorie',
  'users_lnk' => 'Użytkownicy',
  'groups_lnk' => 'Grupy',
  'comments_lnk' => 'Przejrzyj komentarze', //cpg1.3.0
  'searchnew_lnk' => 'Wsadowe dodawanie plików',  //cpg1.3.0
  'util_lnk' => 'Narzędzia administracyjne',  //cpg1.3.0
  'ban_lnk' => 'Banowanie',
  'db_ecard_lnk' => 'Wyświetl e-kartki', //cpg1.3.0 
);

$lang_user_admin_menu = array(
  'albmgr_lnk' => 'Tworzenie / porządkowanie albumów',
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
  'title' => 'TYTUŁ', 
  'sort_da' => 'Sortowanie wg daty rosnąco',
  'sort_dd' => 'Sortowanie wg daty malejąco',
  'sort_na' => 'Sortowanie wg nazwy rosnąco',
  'sort_nd' => 'Sortowanie wg nazwy malejąco',
  'sort_ta' => 'Sortowanie wg tytułu rosnąco', 
  'sort_td' => 'Sortowanie wg tytułu malejąco', 
  'pic_on_page' => 'plików: %d stron: %d',
  'user_on_page' => 'użytkowników: %d, stron: %d'
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Wróć do widoku miniatur',
  'pic_info_title' => 'Wyświetl/ukryj info o pliku',
  'slideshow_title' => 'Pokaz slajdów',
  'ecard_title' => 'Wyślij jako e-kartkę',
  'ecard_disabled' => 'e-kartki są wyłączone',
  'ecard_disabled_msg' => 'Nie masz uprawnień do wysyłania e-kartek', //js-alert //cpg1.3.0
  'prev_title' => 'Poprzedni plik', //cpg1.3.0
  'next_title' => 'Następny plik', //cpg1.3.0
  'pic_pos' => 'PLIK %s/%s', //cpg1.3.0
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Oceń ten plik ', //cpg1.3.0
  'no_votes' => '(Brak głosów)',
  'rating' => '(obecna ocena : %s / 5 głosów: %s)',
  'rubbish' => 'Do niczego',
  'poor' => 'Słabe',
  'fair' => 'Niezłe',
  'good' => 'Dobre',
  'excellent' => 'B. dobre',
  'great' => 'Doskonałe',
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
  CRITICAL_ERROR => 'Błąd krytyczny',
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
  'n_views' => 'odsłon: %s ',
  'n_votes' => '(głosów: %s)'
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Informacje debuggera', //cpg1.3.0
  'select_all' => 'Wybierz wszystko', //cpg1.3.0
  'copy_and_paste_instructions' => 'Aby otrzymać pomoc na forum wsparcia technicznego coppermine, skopiuj i wklej te informacje debuggera do swojego postu. Pamiętaj aby zastąpić wszelkie hasła ciągiem ***, przed zamieszczeniem postu.', //cpg1.3.0
  'phpinfo' => 'wyświetl phpinfo', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => 'Domyślny język', //cpg1.3.0
  'choose_language' => 'Wybierz swój język', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'Domyślny styl', //cpg1.3.0
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
  'Smile' => 'Uśmiechnięty',
  'Sad' => 'Smutny',
  'Surprised' => 'Zaskoczony',
  'Shocked' => 'Zszokowany',
  'Confused' => 'Zniesmaczony',
  'Cool' => 'Luzak',
  'Laughing' => 'Śmieje się',
  'Mad' => 'Wściekły',
  'Razz' => 'Jęzorek',
  'Embarassed' => 'Zawstydzony / gafa',
  'Crying or Very sad' => 'Zrozpaczony',
  'Evil or Very Mad' => 'Wściekły do kwadratu',
  'Twisted Evil' => 'Twisted Evil',
  'Rolling Eyes' => 'Przewraca oczami',
  'Wink' => 'Puszcza oczko',
  'Idea' => 'Pomysł',
  'Arrow' => 'Strzałka',
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
  0 => 'Zakończono pracę administratora...',
  1 => 'Przełączanie do trybu administratora...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //
if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Albumy muszą mieć nazwę !', //js-alert
  'confirm_modifs' => 'Czy na pewno chcesz dokonać tych modyfikacji ?', //js-alert
  'no_change' => 'Nie dokonałeś/aś żadnej zmiany !', //js-alert
  'new_album' => 'Nowy album',
  'confirm_delete1' => 'Czy na pewno chcesz skasować ten album ?', //js-alert
  'confirm_delete2' => '\nWszystkie pliki i komentarze które zawiera zostaną stracone !', //js-alert
  'select_first' => 'Wybierz najpierw album', //js-alert
  'alb_mrg' => 'Menedżer albumów',
  'my_gallery' => '* Moja galeria *',
  'no_category' => '* Bez kategorii *',
  'delete' => 'Kasuj',
  'new' => 'Nowy',
  'apply_modifs' => 'Wykonaj modyfikacje',
  'select_category' => 'Wybierz kategorię',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //
if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Brak parametrów do operacji \'%s\'!',
  'unknown_cat' => 'Wybrana kategoria nie istnieje w bazie danych',
  'usergal_cat_ro' => 'Galerie użytkowników nie mogą być kasowane!',
  'manage_cat' => 'Zarządzaj kategoriami',
  'confirm_delete' => 'Czy jesteś pewny/a że chcesz SKASOWAĆ tę kategorię',
  'category' => 'Kategoria',
  'operations' => 'Operacje',
  'move_into' => 'Przesuń do',
  'update_create' => 'Uaktualnij / stwórz kategorię',
  'parent_cat' => 'Kategoria wyższego rzędu',
  'cat_title' => 'Tytuł kategorii',
  'cat_thumb' => 'Miniatrury kategorii', //cpg1.3.0
  'cat_desc' => 'Opis kategorii'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
  'title' => 'Konfiguracja',
  'restore_cfg' => 'Przywróć ustawienia domyślne',
  'save_cfg' => 'Zachowaj nową konfigurację',
  'notes' => 'Notatki',
  'info' => 'Informacja',
  'upd_success' => 'Konfiguracja Coppermine została uaktualniona',
  'restore_success' => 'Konfiguracja Coppermine została przywrócona',
  'name_a' => 'Nazwa rosnąco',
  'name_d' => 'Nazwa malejąco',
  'title_a' => 'Tytuł rosnąco', 
  'title_d' => 'Tytuł malejąco', 
  'date_a' => 'Data rosnąco',
  'date_d' => 'Data malejąco',
  'th_any' => 'Maksymalne rozmiary',
  'th_ht' => 'Wysokość',
  'th_wd' => 'Szerokość',
  'label' => 'etykieta', //cpg1.3.0
  'item' => 'element', //cpg1.3.0
  'debug_everyone' => 'Wszyscy', //cpg1.3.0
  'debug_admin' => 'Tylko administrator', //cpg1.3.0
  );

if (defined('CONFIG_PHP')) $lang_config_data = array(
  'Ustawienia główne',
  array('Nazwa galerii', 'gallery_name', 0),
  array('Opis galerii', 'gallery_description', 0),
  array('E-mail administratora galerii', 'gallery_admin_email', 0),
  array('Adresy docelowe dla linku \'Zobacz więcej\' w e-kartkach', 'ecards_more_pic_target', 0),
  array('Galeria jest wyłączona', 'offline', 1), //cpg1.3.0
  array('Logowanie e-kartek', 'log_ecards', 1), //cpg1.3.0
  array('Zezwól na ściąganie Ulubionych w archiwum ZIP', 'enable_zipdownload', 1), //cpg1.3.0

  'Language, Themes &amp; Charset settings',
  array('Język', 'lang', 5),
  array('Styl galerii', 'theme', 6),
  array('Pokazuj listę dostępnych języków', 'language_list', 8), //cpg1.3.0
  array('Pokazuj flagi języków', 'language_flags', 8), //cpg1.3.0
  array('Pokazuj &quot;reset&quot; przy wyborze języka', 'language_reset', 1), //cpg1.3.0
  array('Pokazuj listę styli', 'theme_list', 8), //cpg1.3.0
  array('Pokazuj &quot;reset&quot; przy wyborze stylu', 'theme_reset', 1), //cpg1.3.0
  array('Pokazuj FAQ', 'display_faq', 1), //cpg1.3.0
  array('Pokazuj pomoc bbcode', 'show_bbcode_help', 1), //cpg1.3.0
  array('Kodowanie znaków', 'charset', 4), //cpg1.3.0

  'Przeglądanie listy albumów',
  array('Szerokość głównej galerii (piksele lub %)', 'main_table_width', 0),
  array('Ilość kategorii do wyświetlenia', 'subcat_level', 0),
  array('Ilość albumów do wyświetlenia', 'albums_per_page', 0),
  array('Ilość kolumn w liście albumów', 'album_list_cols', 0),
  array('Rozmiar miniatur w pikselach', 'alb_list_thumb_size', 0),
  array('Zawartość strony głównej', 'main_page_layout', 0),
  array('Pokaż miniaturę pierwszego poziomu w miniaturach albumu','first_level',1),
 
  'Widok miniatur',
  array('Ilość kolumn na stronie miniatur', 'thumbcols', 0),
  array('Ilość wierszy na stronie miniatur', 'thumbrows', 0),
  array('Maksymalna ilość pasków do wyświetlenia', 'max_tabs', 10), //cpg1.3.0
  array('Wyświetl opis pliku (oprócz tytułu) poniżej miniatury', 'caption_in_thumbview', 1), //cpg1.3.0
  array('Wyświetl ilość odsłon poniżej miniatury', 'views_in_thumbview', 1), //cpg1.3.0
  array('Wyświetl ilość komentarzy poniżej miniatury', 'display_comment_count', 1),
  array('Wyświetl przesyłającego poniżej miniatury', 'display_uploader', 1), //cpg1.3.0
  array('Domyślny porządek sortowania plików', 'default_sort_order', 3), //cpg1.3.0
  array('Minimalna ilość głosów niezbędna do umieszczenia pliku w kategorii \'Top Lista\'', 'min_votes_for_rating', 0), //cpg1.3.0

  'Przeglądanie obrazów &amp; Ustawienia komentarzy',
  array('Szerokość tabeli wyświetlającej pliki (piksele lub %)', 'picture_table_width', 0), //cpg1.3.0
  array('Domyślne pokazywanie informacji o pliku', 'display_pic_info', 1), //cpg1.3.0
  array('Blokowanie słów z "listy zakazanych" w komentarzach', 'filter_bad_words', 1),
  array('Wyświetlanie emotikon w komentarzach', 'enable_smilies', 1),
  array('Maksymalna długość opisu pliku', 'max_img_desc_length', 0),
  array('Maksymalna ilość znaków w słowie', 'max_com_wlength', 0),
  array('Maksymalna ilość linii w komentarzu', 'max_com_lines', 0),
  array('Maksymalna długość komentarza (znaków)', 'max_com_size', 0),
  array('Pokaż "pasek filmu" z miniaturami', 'display_film_strip', 1), 
  array('Ilość elementów wyświetlanych w "pasku filmu" z miniaturami', 'max_film_strip_items', 0), 
  array('Powiadom administratora o komentarzu', 'email_comment_notification', 1), //cpg1.3.0
  array('Interwał pokazu slajdów (1 sekunda = 1000 milisekund)', 'slideshow_interval', 0), //cpg1.3.0

  'Ustawienia plików i miniatur', //cpg1.3.0
  array('Jakość plików JPEG', 'jpeg_qual', 0),
  array('Maksymalny rozmiar miniatury <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0), //cpg1.3.0
  array('Użyj wymiaru (szerokość, wysokość lub maksymalny widok dla miniatury)<b>**</b>', 'thumb_use', 7),
  array('Twórz zdjęcia pośrednie','make_intermediate',1),
  array('Maksymalna szerokość pośredniego zdjęcia lub video <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0), //cpg1.3.0
  array('Maksymalny rozmiar przesyłanych plików (KB)', 'max_upl_size', 0), //cpg1.3.0
  array('Maksymana wysokość lub szerokość przesyłanych zdjęć (w pikselach)', 'max_upl_width_height', 0), //cpg1.3.0

  'Zaawansowane ustawienia plików i miniatur', //cpg1.3.0
  array('Wyświetlanie ikon albumów prywatnych niezalogowanemu użytkownikowi','show_private',1), //cpg1.3.0
  array('Znaki zakazane w nazwach plików', 'forbiden_fname_char',0), //cpg1.3.0
  //array('Akceptowane rozszerzenia przesyłanych zdjęć', 'allowed_file_extensions',0), //cpg1.3.0
  array('Akceptowalne typy obrazów', 'allowed_img_types',0), //cpg1.3.0
  array('Akceptowalne typy plików wideo', 'allowed_mov_types',0), //cpg1.3.0
  array('Akceptowalne typy plików audio', 'allowed_snd_types',0), //cpg1.3.0
  array('Akceptowalne typy dokumentów', 'allowed_doc_types',0), //cpg1.3.0
  array('Metoda skalowania obrazów','thumb_method',2), //cpg1.3.0
  array('Ścieżka dostępu do oprogramowania \'konwertującego\' ImageMagick (np /usr/bin/X11/)', 'impath', 0), //cpg1.3.0
  //array('Dozwolone nazwy plików (właściwe dla ImageMagick)', 'allowed_img_types',0), //cpg1.3.0
  array('Komendy linii poleceń dla ImageMagick', 'im_options', 0), //cpg1.3.0
  array('Czytaj dane EXIF w plikach JPEG', 'read_exif_data', 1), //cpg1.3.0
  array('Czytaj dane IPTC w plikach JPEG', 'read_iptc_data', 1), //cpg1.3.0
  array('Katalog albumów <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0), //cpg1.3.0
  array('Nazwa katalogu na pliki użytkowników <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0), //cpg1.3.0
  array('Prefix dla zdjęć pośrednich <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0), //cpg1.3.0
  array('Prefix dla miniatur <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0), //cpg1.3.0
  array('Domyślne uprawnienia katalogów', 'default_dir_mode', 0), //cpg1.3.0
  array('Domyślne uprawnienia plików', 'default_file_mode', 0), //cpg1.3.0

  'Ustawienia użytkowników',
  array('Zezwalanie na rejestrację nowych użytkowników', 'allow_user_registration', 1),
  array('Rejestracja użytkownika wymaga potwierdzenia e-mail', 'reg_requires_valid_email', 1),
  array('Powiadom administratora o rejestracji e-mailem', 'reg_notify_admin_email', 1), //cpg1.3.0
  array('Zezwalanie posiadania tego samego adresu e-mail przez dwóch użytkowników', 'allow_duplicate_emails_addr', 1),
  array('Użytkownicy mogą tworzyć albumy prywatne', 'allow_private_albums', 1),
  array('Powiadom administratora o plikach oczekujących na akceptację', 'upl_notify_admin_email', 1), //cpg1.3.0
  array('Zezwól na oglądanie listy użytkowników użytkownikom zarejestrowanym', 'allow_memberlist', 1), //cpg1.3.0
  
  'Nazwy dodatkowych pól do opisu pliku (pozostaw je puste jeżeli nie są używane)',
  array('Nazwa pola 1', 'user_field1_name', 0),
  array('Nazwa pola 2', 'user_field2_name', 0),
  array('Nazwa pola 3', 'user_field3_name', 0),
  array('Nazwa pola 4', 'user_field4_name', 0),

  'Ustawienia cookies',
  array('Nazwa plików cookie tworzonych przez skrypt (w przypadku integracji bbs, upewnij się, że nazwa różni się od nazw plików generowanych przez bbs', 'cookie_name', 0),
  array('Ścieżka plików cookie tworzonych przez skrypt', 'cookie_path', 0),
  
  'Różne ustawienia',
  array('Włącz tryb debugowania', 'debug_mode', 9), //cpg1.3.0
  array('Pokazuj powiadomienia w trybie debugowania', 'debug_notice', 1), //cpg1.3.0

  '<br /><div align="left"><a name="notice1"></a>(*) Pola oznaczone gwiazdką nie mogą być zmienione jeżeli w bazie danych są już pliki.<br />
  <a name="notice2"></a>(**) Zmiana tych ustawień dotyczy jedynie nowych plików dodawanych do bazy, dlatego rekomenduje się nie dokonywanie zmiany, jeżeli w galerii znajdują się już jakieś pliki. Zmiana istniejących plików może zostać jednak dokonana przy pomocy &quot;<a href="util.php">narzędzi administracyjnych (zmiana rozmiaru zdjęć)</a>&quot; znajdujących się w menu administratora.</div><br />', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Wyślij e-kartkę', //cpg1.3.0
  'ecard_sender' => 'Nadawca', //cpg1.3.0
  'ecard_recipient' => 'Odbiorca', //cpg1.3.0
  'ecard_date' => 'Data', //cpg1.3.0
  'ecard_display' => 'Wyświetl e-kartkę', //cpg1.3.0
  'ecard_name' => 'Imię', //cpg1.3.0
  'ecard_email' => 'E-mail', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'rosnąco', //cpg1.3.0
  'ecard_descending' => 'malejąco', //cpg1.3.0
  'ecard_sorted' => 'Sortowane', //cpg1.3.0
  'ecard_by_date' => 'wg daty', //cpg1.3.0
  'ecard_by_sender_name' => 'wg imienia nadawcy', //cpg1.3.0
  'ecard_by_sender_email' => 'wg e-maila nadawcy', //cpg1.3.0
  'ecard_by_sender_ip' => 'wg adresu IP nadawcy', //cpg1.3.0
  'ecard_by_recipient_name' => 'wg nazwy odbiorcy', //cpg1.3.0
  'ecard_by_recipient_email' => 'wg e-maila odbiorcy', //cpg1.3.0
  'ecard_number' => 'wyświetlane rekordy: %s - %s z %s', //cpg1.3.0
  'ecard_goto_page' => 'do strony', //cpg1.3.0
  'ecard_records_per_page' => 'Rekordów na stronie', //cpg1.3.0
  'check_all' => 'Wybierz wszystkie', //cpg1.3.0
  'uncheck_all' => 'Wyczyść wszystkie', //cpg1.3.0
  'ecards_delete_selected' => 'Skasuj wybrane e-kartki', //cpg1.3.0
  'ecards_delete_confirm' => 'Czy na pewno chcesz skasować te rekodry? Zaznacz checkbox!', //cpg1.3.0
  'ecards_delete_sure' => 'Chcę skasować', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Musisz podać swoje imię i napisać komentarz',
  'com_added' => 'Twój komentarz został dodany',
  'alb_need_title' => 'Musisz podać tytuł dla albumu!',
  'no_udp_needed' => 'Zmiana nie jest konieczna.',
  'alb_updated' => 'Album został uaktualniony',
  'unknown_album' => 'Wybrany album nie istnieje, lub nie masz uprawnień do przesyłania',
  'no_pic_uploaded' => 'Plik nie został dodany!<br /><br />Jeżeli wybrano plik do przesłania, sprawdź czy serwer na to zezwala...', //cpg1.3.0
  'err_mkdir' => 'Nie udało się utworzyć katalogu %s !',
  'dest_dir_ro' => 'Katalog docelowy %s nie może być zapisany przez skrypt!',
  'err_move' => 'Nie można przenieść %s do %s !',
  'err_fsize_too_large' => 'Plik który przesyłasz ma zbyt duży rozmiar (maksymalnie dozwolony: %s x %s) !',//cpg1.3.0
  'err_imgsize_too_large' => 'Plik który przesyłasz ma zbyt duży rozmiar (maksymalnie dozwolony: to %s KB) !',
  'err_invalid_img' => 'Plik który przesyłasz jest w niedozwolonym formacie!',
  'allowed_img_types' => 'Możesz przesłać tylko %s plików.',
  'err_insert_pic' => 'Plik \'%s\' nie może zostać wstawiony do albumu ', //cpg1.3.0
  'upload_success' => 'Plik został przesłany <br /><br />Będzie widoczny po akceptacji przez administratora.', //cpg1.3.0
  'notify_admin_email_subject' => '%s - powiadomienie o przesłaniu pliku', //cpg1.3.0
  'notify_admin_email_body' => 'Użytkownik %s przesłał plik, oczekuje on na Twoją aprobatę. Odwiedź %s', //cpg1.3.0
  'info' => 'Informacje',
  'com_added' => 'Dodano komentarz',
  'alb_updated' => 'Uaktualniono album',
  'err_comment_empty' => 'Twój komentarz jest pusty!',
  'err_invalid_fext' => 'Akceptowane są jedynie pliki z następującymi rozszerzeniami: <br /><br />%s.',
  'no_flood' => 'Przykro mi ale jesteś/aś autorem ostatniego dodanego komentarza<br /><br />Możesz go edytować aby zmienić treść',
  'redirect_msg' => 'Jesteś przekierowywany.<br /><br /><br />Kliknij \'DALEJ\' jeżeli strona nie zmieni się automatycznie',
  'upl_success' => 'Plik został przesłany', //cpg1.3.0
  'email_comment_subject' => 'W galerii Coppermine dodano komentarz', //cpg1.3.0
  'email_comment_body' => 'Dodano komentarz do Twojej galerii zobacz go tutaj', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Tytuł',
  'fs_pic' => 'pełny rozmiar',
  'del_success' => 'skasowano',
  'ns_pic' => 'normalny rozmiar',
  'err_del' => 'nie może być skasowane',
  'thumb_pic' => 'miniatura',
  'comment' => 'komentarz',
  'im_in_alb' => 'zdjęcie z albumu',
  'alb_del_success' => 'Skasowano album \'%s\' ',
  'alb_mgr' => 'Menedżer albumów',
  'err_invalid_data' => 'Otrzymano niewłaściwe dane \'%s\'',
  'create_alb' => 'Tworzenie albumu \'%s\'',
  'update_alb' => 'Uaktualnienie albumu: \'%s\' tytuł: \'%s\' index: \'%s\'',
  'del_pic' => 'Kasowanie pliku', //cpg1.3.0
  'del_alb' => 'Kasowanie albumu',
  'del_user' => 'Kasowanie użytkownika',
  'err_unknown_user' => 'Wybrany użytkownik nie istnieje!',
  'comment_deleted' => 'Komentarz został dodany',
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
  'confirm_del' => 'Czy na pewno chcesz skasować ten plik? \\nZostaną skasowane również komentarze do niego.', //js-alert //cpg1.3.0
  'del_pic' => 'SKASUJ TEN PLIK', //cpg1.3.0
  'size' => '%s x %s pikseli',
  'views' => '%s razy',
  'slideshow' => 'Pokaz slajdów',
  'stop_slideshow' => 'ZATRZYMAJ POKAZ',
  'view_fs' => 'Kliknij aby zobaczyć pełny rozmiar',
  'edit_pic' => 'Edytowanie opisu', //cpg1.3.0
  'crop_pic' => 'Kadrowanie i obrót', //cpg1.3.0
);

$lang_picinfo = array(
  'title' =>'Informacja o pliku', //cpg1.3.0
  'Filename' => 'Nazwa pliku',
  'Album name' => 'Nazwa albumu',
  'Rating' => 'Ocena (%s głosów)',
  'Keywords' => 'Słowa kluczowe',
  'File Size' => 'Rozmiar pliku',
  'Dimensions' => 'Wymiary',
  'Displayed' => 'Wyświetleń',
  'Camera' => 'Aparat fotograficzny',
  'Date taken' => 'Data zrobienia zdjęcia',
  'Aperture' => 'Przesłona',
  'Exposure time' => 'Czas ekspozycji',
  'Focal length' => 'Ogniskowa',
  'Comment' => 'Komentarz',
  'addFav'=>'Dodaj do Ulubionych', 
  'addFavPhrase'=>'Ulubione', 
  'remFav'=>'Usuń z Ulubionych',
  'iptcTitle'=>'Tytuł IPTC', //cpg1.3.0
  'iptcCopyright'=>'Copyright IPTC', //cpg1.3.0
  'iptcKeywords'=>'Słowa kluczowe IPTC', //cpg1.3.0
  'iptcCategory'=>'Kategoria IPTC', //cpg1.3.0
  'iptcSubCategories'=>'Podkategorie IPTC', //cpg1.3.0
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Edytuj ten komentarz',
  'confirm_delete' => 'Czy na pewno chcesz skasować ten komentarz ?', //js-alert
   'add_your_comment' => 'Dodaj komentarz',
  'name'=>'Pseudonim', 
  'comment'=>'Komentarz', 
  'your_name' => 'Anonim', 
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Kliknij zdjęcie aby zamknąć okno', 
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Wyślij e-kartkę',
  'invalid_email' => '<b>Uwaga!</b> : niepoprawny adres e-mail !',
  'ecard_title' => 'e-kartka od %s dla Ciebie',
  'view_ecard' => 'Jeżeli e-kartka nie wyświetla się poprawnie, kliknij ten link',
  'view_more_pics' => 'Kliknij ten link aby zobaczyć więcej zdjęć!',
  'send_success' => 'Twoja e-kartka została wysłana',
  'send_failed' => 'Niestety, serwer nie może wysłać Twojej e-kartki...',
  'from' => 'Od',
  'your_name' => 'Twoje imię',
  'your_email' => 'Twój adres e-mail',
  'to' => 'Do',
  'rcpt_name' => 'Nazwa odbiorcy',
  'rcpt_email' => 'Adres e-mail odbiorcy',
  'greetings' => 'Temat',
  'message' => 'Wiadomość',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Plik&nbsp;Info', //cpg1.3.0
  'album' => 'Album',
  'title' => 'Tytuł',
  'desc' => 'Opis',
  'keywords' => 'Słowa kluczowe',
  'pic_info_str' => '%s &razy; %s - %s KB - %s odsłon - %s głosów',
  'approve' => 'Akceptuj plik', //cpg1.3.0
  'postpone_app' => 'Odrocz akceptację',
  'del_pic' => 'Skasuj plik', //cpg1.3.0
  'reset_view_count' => 'Resetuj licznik odsłon',
  'reset_votes' => 'Resetuj głosowania',
  'del_comm' => 'Skasuj komentarze',
  'upl_approval' => 'Akceptacja zdjęć',
  'edit_pics' => 'Edytuj zdjęcia',
  'see_next' => 'Zobacz następne zdjęcia',
  'see_prev' => 'Zobacz poprzednie zdjęcia',
  'n_pic' => 'zdjęć: %s',
  'n_of_pic_to_disp' => 'Ilość zdjęć do wyświetlenia',
  'apply' => 'Zastosuj zmiany'
);

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Informacja&nbsp;o pliku', //cpg1.3.0
  'album' => 'Album',
  'title' => 'Tytuł',
  'desc' => 'Opis',
  'keywords' => 'Słowa kluczowe',
  'pic_info_str' => '%s &razy; %s - %s KB - %s odsłon - %s głosów',
  'approve' => 'Akceptuj plik', //cpg1.3.0
  'postpone_app' => 'Odrocz akceptację',
  'del_pic' => 'Kasuj plik', //cpg1.3.0
  'read_exif' => 'Odczytaj ponownie informacje EXIF', //cpg1.3.0
  'reset_view_count' => 'Kasuj licznik odsłon',
  'reset_votes' => 'Kasuj głosowania',
  'del_comm' => 'Kasuj komentarze',
  'upl_approval' => 'Akceptacja plików',
  'edit_pics' => 'Edycja plików', //cpg1.3.0
  'see_next' => 'Zobacz następne pliki', //cpg1.3.0
  'see_prev' => 'Zobacz poprzednie pliki', //cpg1.3.0
  'n_pic' => '%s plików', //cpg1.3.0
  'n_of_pic_to_disp' => 'Ilość plików do wyświetlenia', //cpg1.3.0
  'apply' => 'Zastosuj zmiany', //cpg1.3.0
  'crop_title' => 'Edytor zdjęć Coppermine', //cpg1.3.0
  'preview' => 'Podgląd', //cpg1.3.0
  'save' => 'Zapisz zdjęcie', //cpg1.3.0
  'save_thumb' =>'Zapisz jako miniaturę', //cpg1.3.0
  'sel_on_img' =>'Obszar wyboru musi mieścić się na zdjęciu!', //js-alert //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Najczęściej zadawane pytania', //cpg1.3.0
  'toc' => 'Spis treści', //cpg1.3.0
  'question' => 'Pytanie: ', //cpg1.3.0
  'answer' => 'Odpowiedź: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'Generalne FAQ', //cpg1.3.0
  array('Dlaczego warto się zarejestrować?', 'Rejestracja może być wymagana przez administratora serwisu. Zarejestrowanie się daje użytkownikowi dodatkowe możliwości, takie jak przesyłanie własnych plików, tworzenie listy ulubionych, ocenianie zdjęć, zamieszczanie komentarzy itp.', 'allow_user_registration', '0'), //cpg1.3.0
  array('Jak się zarejestrować?', 'Przejdź do sekcji &quot;Rejestracja&quot; i wypełnij wymagane pola (ew. także pola opcjonalne).<br />Jeżeli Administrator włączył opcję aktywacji przez e-mail, po wypełnieniu formularza rejestracji, na podany tam adres pocztowy otrzymasz e-mail zawierający instrukcje w jaki sposób aktywować konto. Aktywacja jest wymagana przed pierwszym załogowaniem.', 'allow_user_registration', '1'), //cpg1.3.0
  array('Jak się logować?', 'Przejdź do sekcji &quot;Logowanie&quot;, Wprowadź swoją nazwę użytkownika i hasło. Możesz także wybrać opcję &quot;Pamiętaj mnie&quot; abyś nie musiał logować się przy ponownym wejściu na stronę.<br /><b>WAŻNE: aby ta funkcja serwisu działała należy włączyć obsługę plików cookie i nie kasować plików cookie generowanych przez serwis.</b>', 'offline', 0), //cpg1.3.0
  array('Dlaczego nie mogę się zalogować?', 'Czy zarejestrowałeś się już i kliknąłeś na łącze z wysłanego do Ciebie e-mail\'a? Łącze to pozwoli na aktywowanie Twojego konta. W przypadku innych kłopotów skontaktuj się z administratorem serwisu.', 'offline', 0), //cpg1.3.0
  array('Co mam zrobić jeżeli zapomnę hasła?', 'Jeżeli serwis udostępnia link &quot;Zapomniałem hasła&quot;, użyj go. W innym wypadku skontaktuj się z administratorem i poproś go o nowe hasło.', 'offline', 0), //cpg1.3.0
  //array('Co mam zrobić, jeżeli zmienił mi się adres e-mail?', 'Zaloguj się i zmień swój e-mail w &quot;Profilu&quot;', 'offline', 0), //cpg1.3.0
  array('Jak zapisać plik do &quot;Moich ulubionych&quot;?', 'Kliknij na pliku, a następnie na łączu &quot;informacji o zdjęciu&quot; (<img src="images/info.gif" width="16" height="16" border="0" alt="Picture information" />); przejdź na dół i kliknij &quot;Dodaj do ulubionych&quot;.<br />Możliwe, że administrator włączył opcję domyślnego pokazywania informacji o pliku.<br />WAŻNE: Należy włączyć obsługę plików cookie z tego serwisu i nie kasować ich.', 'offline', 0), //cpg1.3.0
  array('Jak ocenić plik?', 'Kliknij na miniaturze, przejdź na dół strony i wybierz odpowiednią ocenę.', 'offline', 0), //cpg1.3.0
  array('Jak zamieścić komentarz do pliku?', 'Kliknij na miniaturze, przejdź na dół i w odpowiednim polu wpisz komentarz.', 'offline', 0), //cpg1.3.0
  array('Jak przesłać plik?', 'Przejdź do &quot;Przesyłania zdjęć&quot; i wybierz album do którego chcesz przesłać plik, kliknij &quot;Przeglądaj&quot; znajdź plik który chcesz przesłać, wybierz &quot;Otwórz&quot; (dodaj opis, jeżeli chcesz) i kliknij &quot;Prześlij&quot;', 'allow_private_albums', 0), //cpg1.3.0
  array('Gdzie mogę przesłać plik?', 'Pliki można przesyłać do jednego z albumów w Twojej Galerii. Administrator może także zezwolić Ci na przesyłanie zdjęć do albumów w Galerii Głównej.', 'allow_private_albums', 0), //cpg1.3.0
  array('Jakie pliki można przesyłać? W jakiej wielkości?', 'Typ i rodzaj przesyłanych plików (jpg, png, etc.) określa administrator serwisu.', 'offline', 0), //cpg1.3.0
  array('Co to jest &quot;Moja Galeria&quot;?', '&quot;Moja Galeria&quot; to prywatna galeria którą może zarządzać użytkownik. Możesz tam przesyłać swoje pliki.', 'allow_private_albums', 0), //cpg1.3.0
  array('W jaki sposób tworzyć, kasować i zmieniać nazwy albumów w &quot;Mojej Galerii&quot;?', 'Powinieneś przejść do &quot;Trybu Administracyjnego&quot;<br />Przejdź do &quot;Tworzenie/Porządkowanie albumów&quot;i kliknij &quot;Nowy&quot;. Zmień domyślną nazwę &quot;Nowy Album&quot; na wybraną przez siebie.<br />Możesz także modyfikować dowolny album ze swojej galerii.<br />Następnie kliknij &quot;Zastosuj zmiany&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('W jaki sposób zezwalać i odbierać zezwolenia na oglądanie moich albumów?', 'Przejdź do &quot;Trybu Administracyjnego&quot;<br />i sekcji &quot;Modyfikuj moje albumy. Na pasku &quot;Aktualizuj Album&quot; wybierz album, który chcesz zmodyfikować. <br />Możesz zmienić jego nazwę, opis, miniaturę, ustawić zezwolenia na oglądanie i komentowanie/ocenianie jego zawartości.<br />Następnie kliknij &quot;Aktualizuj album&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Co zrobić by móc obejrzeć galerie innych użytkowników?', 'Przejdź do &quot;Listy Albumów&quot; i wybierz &quot;Galerie użytkowników&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Co to są pliki cookie?', 'Pliki cookie zawierają dane tekstowe zapisywane przez stronę internetową na Twoim komputerze. <br />Zazwyczaj pozwalają użytkownikowi opuścić stronę i wejść na nią ponownie bez konieczności ponownego logowania.', 'offline', 0), //cpg1.3.0
  array('Skąd mogę pobrać ten program aby umieścić go we własnym serwisie?', 'Galeria Coppermine jest darmową galerią multimediów, rozpowszechnianą na licencji GNU GPL. Zawiera rozbudowaną funkcjonalność i została przygotowana na różne platformy. Odwiedź <a href="http://coppermine.sf.net/">stronę domową Coppermine</a> by dowiedzieć się więcej i ściągnąć najnowszą wersję programu.', 'offline', 0), //cpg1.3.0

  'Nawigowanie po stronie', //cpg1.3.0
  array('Co to jest &quot;Lista albumów&quot;?', 'Lista albumów pokazuje całą kategorię, w której obecnie się znajdujesz wraz z łączami do każdego albumu. Jeżeli nie znajdujesz się obecnie w żadnej kategorii, lista albumów wyświetli całą zawartość galerii wraz z łączami do kategorii, które zawiera. Miniatury mogą być także łączami do kategorii..', 'offline', 0), //cpg1.3.0
  array('Czym jest &quot;Moja Galeria&quot;?', 'Opcja ta umożliwia użytkownikowi serwisu tworzenie własnej galerii, dodawanie, kasowanie i modyfikowanie albumów, oraz przesyłanie do nich plików.', 'allow_private_albums', 0), //cpg1.3.0
  array('Czym różni się &quot;Tryb Administracyjny&quot; od &quot;Trybu użytkownika&quot;?', 'Tryb administracyjny umożliwia zarządzanie albumami znajdującymi się w Twojej prywatnej galerii (a także innymi albumami - jeżeli zezwolił na to administrator).', 'allow_private_albums', 0), //cpg1.3.0
  array('Co to jest &quot;Przesłanie pliku&quot;?', 'To możliwość przesłania pliku (jego rodzaj i wielkość są określone przez administratora) do wybranych albumów', 'allow_private_albums', 0), //cpg1.3.0
  array('Co to są &quot;Ostatnie aktualizacje&quot;?', 'Umożliwiają przejrzenie ostatnio dodanych do strony plików.', 'offline', 0), //cpg1.3.0
  array('Co to są &quot;Ostatnie komentarze&quot;?', 'Ta opcja pokazuje ostatnio dodane przez użytkowników komentarze, oraz pliki których dotyczą.', 'offline', 0), //cpg1.3.0
  array('Czym jest opcja What\'s &quot;Najpopularniejsze&quot;?', 'Opcja ta pokazuje najczęściej oglądane pliki (dotyczy wszystkich użytkowników - zarówno tych zalogowanych jak i niezalogowanych).', 'offline', 0), //cpg1.3.0
  array('Co to jest &quot;Top Lista&quot;?', 'Top lista zawiera listę najwyżej ocenianych plików wraz z ich średnią oceną (np. pięciu użytkowników głosuje z oceną <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: plikowi zostanie przyznana ocena <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;lub wśród pięciu innych użytkowników każdy daje plikowi ocenę od 1 do 5 (1,2,3,4,5) co spowoduje przyznanie plikowi średniej oceny <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />Klasyfikacja przedstawia się następująco: od <img src="images/rating5.gif" width="65" height="14" border="0" alt="najlepsze" /> (najlepsze) do <img src="images/rating0.gif" width="65" height="14" border="0" alt="najgorsze" /> (najgorsze).', 'offline', 0), //cpg1.3.0
  array('Czym są &quot;Ulubione&quot;?', 'Ta opcja pozwala użytkownikowi przechowywać odnośniki do ulubionych plików z galerii w pliku cookie zapisywanym przez przeglądarkę.', 'offline', 0), //cpg1.3.0
);



// ------------------------------------------------------------------------- //
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Przypomnienie hasła', //cpg1.3.0
  'err_already_logged_in' => 'Jesteś już zalogowany!', //cpg1.3.0
  'enter_username_email' => 'Podaj nazwę użytkownika lub adres e-mail', //cpg1.3.0
  'submit' => 'dalej', //cpg1.3.0
  'failed_sending_email' => 'E-mail z przypomnieniem hasła nie może zostać wysłany!', //cpg1.3.0
  'email_sent' => 'E-mail z nazwą użytkownika i hasłem został wysłany na adres %s', //cpg1.3.0
  'err_unk_user' => 'Wybrany użytkownik nie istnieje!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - Przypomnienie hasła', //cpg1.3.0
  'passwd_reminder_body' => 'Poprosiłeś o przesłanie Twoich danych użytkownika:
Nazwa użytkownika: %s
Hasło: %s
Kliknij %s aby się zalogować.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Nazwa grupy',
  'disk_quota' => 'Miejsce na dane',
  'can_rate' => 'Może oceniać pliki', //cpg1.3.0
  'can_send_ecards' => 'Może wysyłać e-kartki',
  'can_post_com' => 'Może zamieszczać komentarze',
  'can_upload' => 'Może przesyłać pliki', //cpg1.3.0
  'can_have_gallery' => 'Może mieć galerię osobistą',
  'apply' => 'Zastosuj zmiany',
  'create_new_group' => 'Stwórz nową grupę',
  'del_groups' => 'Skasuj zaznaczoną grupę/y',
  'confirm_del' => 'Uwaga: jeżeli skasujesz tę grupę jej członkowie zostaną przeniesieni do grupy \'Zarejestrowani\'!\n\nKontynuować?',
  'title' => 'Zarządzanie grupami',
  'approval_1' => 'Zgoda na pub. upl.(1)',
  'approval_2' => 'Zgoda na priv. upl.(2)',
  'upload_form_config' => 'Konfiguracja formularza przesyłania', //cpg1.3.0
  'upload_form_config_values' => array( 'Przesyłanie pojedynczych plików', 'Przesyłanie wielu plików', 'Przesyłanie URI', 'Przesyłanie ZIP', 'Plik-URI', 'Plik-ZIP', 'URI-ZIP', 'Plik-URI-ZIP'), //cpg1.3.0
  'custom_user_upload'=>'Użytkownik może wybierać ilość pól do przesyłania?', //cpg1.3.0
  'num_file_upload'=>'Maksymalna/dokładna ilość pól przesyłania plików', //cpg1.3.0
  'num_URI_upload'=>'Maksymalna/dokładna ilość pól przesyłania URI', //cpg1.3.0
  'note1' => '<b>(1)</b> Przesyłanie zdjęć do albumu publicznego wymaga zgody administratora',
  'note2' => '<b>(2)</b> Przesyłanie zdjęć do albumu użytkownika wymaga zgody administratora',
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
  'confirm_delete' => 'Czy na pewno chcesz skasować ten album? \\nZostaną skasowane również wszystkie pliki i komentarze.', //js-alert //cpg1.3.0
  'delete' => 'KASUJ',
  'modify' => 'WŁAŚCIWOŚCI',
  'edit_pics' => 'EDYCJA PLIKÓW', //cpg1.3.0
);

$lang_list_categories = array(
  'home' => 'Strona główna',
  'stat1' => 'pliki: <b>[pictures]</b>, albumy: <b>[albums]</b>, kategorie: <b>[cat]</b>, komentarze: <b>[comments]</b>, odsłony: <b>[views]</b>', //cpg1.3.0
  'stat2' => 'pliki: <b>[pictures]</b>, albumy: <b>[albums]</b>, odsłony: <b>[views]</b>', //cpg1.3.0
  'xx_s_gallery' => 'galeria %s', //cpg1.3.0
  'stat3' => 'pliki: <b>[pictures]</b>, albumy: <b>[albums]</b>, komentarze: <b>[comments]</b>, odsłony: <b>[views]</b>', //cpg1.3.0
);

$lang_list_users = array(
  'user_list' => 'Lista użytkowników',
  'no_user_gal' => 'Galerie użytkowników nie istnieją lub nie masz do nich dostępu',
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
  'enter_login_pswd' => 'Podaj nazwę użytkownika i hasło aby się zalogować',
  'username' => 'Nazwa użytkownika',
  'password' => 'Hasło',
  'remember_me' => 'Pamiętaj mnie',
  'welcome' => 'Witaj %s ...',
  'err_login' => '*** Logowanie nieudane, spróbuj ponownie ***',
  'err_already_logged_in' => 'Jesteś już zalogowany/a!',
  'forgot_password_link' => 'Zapomniałem hasła', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Wylogowywanie',
  'bye' => 'Pa pa %s ...',
  'err_not_loged_in' => 'Nie jesteś zalogowany/a!',
);

// ------------------------------------------------------------------------- //
// File phpinfo.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP info', //cpg1.3.0
  'explanation' => 'Dane generowane przez funkcję <a href="http://www.php.net/phpinfo">phpinfo()</a>, wyświetlane przez Coppermine (obcinanie wyjścia przy prawym rogu).', //cpg1.3.0
  'no_link' => 'Oglądanie tych informacji przez osoby nieuprawnione może stanowić zagrożenie bezpieczeństwa, dlatego też stronę tę można oglądać tylko po zalogowaniu się jako administrator. Nie możesz podać łącza do tej strony innym użytkownikom, nie uzyskają oni dostępu do strony.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Uaktualnij album %s',
  'general_settings' => 'Ustawienia ogólne',
  'alb_title' => 'Tytuł albumu',
  'alb_cat' => 'Kategoria albumu',
  'alb_desc' => 'Opis albumu',
  'alb_thumb' => 'Miniatury',
  'alb_perm' => 'Uprawnienia albumu',
  'can_view' => 'Może być oglądany przez',
  'can_upload' => 'Goście mogą przesyłać pliki',
  'can_post_comments' => 'Goście mogą dodawać komentarze',
  'can_rate' => 'Goście mogą oceniać pliki',
  'user_gal' => 'Galeria użytkownika',
  'no_cat' => '* Bez kategorii *',
  'alb_empty' => 'Album jest pusty',
  'last_uploaded' => 'Ostatnio przesłane',
  'public_alb' => 'Wszyscy (album publiczny)',
  'me_only' => 'Tylko ja',
  'owner_only' => 'Tylko właściciel albumu: (%s)',
  'groupp_only' => 'Członkowie grupy: \'%s\'',
  'err_no_alb_to_modify' => 'Nie można modyfikować żadnego albumu w bazie.',
  'update' => 'Uaktualnij album', //cpg1.3.0
  'notice1' => '(*) w zależności od ustawień %sgrupy%',
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Niestety, już oceniałeś ten plik', //cpg1.3.0
  'rate_ok' => 'Twój głos został zarejestrowany',
  'forbidden' => 'Nie możesz oceniać swoich własnych plików.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Administratorzy serwisu {SITE_NAME} dokładają wszelkich starań by usuwać lub zmieniać publikowane przez użytkowników treści ogólnie przyjęte za obraźliwe, łamiące prawo, lub obsceniczne, jest jednak niemożliwe by przejrzeć każdy post. Dlatego musisz zobowiązać się, że wszelkie opinie, materiały i komentarze jakie zamieścisz na stronach serwisu reprezentują wyłącznie Twoje poglądy, a nie poglądy osób zarządzających serwisem.<br />
<br />
Niniejszym zobowiązujesz się, by nie zamieszczać na stronach serwisu {SITE_NAME} materiałów obraźliwych, obscenicznych, wulgarnych, pornograficznych, nawołujących do użycia przemocy, stanowiących zagrożenie dla bezpieczeństwa publicznego, oraz innych materiałów, których przedstawienie na stronach serwisu mogłoby stanowić złamanie obowiązującego prawa. Przyjmujesz do wiadomości, że administrator lub moderatorzy serwisu {SITE_NAME} mają prawo do edycji i usuwania dowolnych zamieszczonych przez Ciebie treści niezgodnych z tym regulaminem. Jako użytkownik serwisu zgadzasz się na przechowywanie informacji niezbędnych do obsługi Twojego konta w bazie danych serwisu, oraz otrzymujesz prawo do ich modyfikacji oraz usunięcia w dowolnej chwili. W tym celu należy skontaktować się z administratorem serwisu. Informacje te nie będą przekazywane osobom trzecim bez Twojej zgody, jednakże administratorzy serwisu nie mogą ponoszą odpowiedzialności za kradzież tych informacji w wypadku działań osób nieuprawnionych.<br />
<br />
Serwis {SITE_NAME} używa plików cookie do przechowywania informacji na Twoim komputerze. Służą one jedynie do poprawienia komfortu przeglądania zawartości serwisu. Twój adres e-mail jest używany jedynie do wysyłania potwierdzeń dotyczących rejestracji w serwisie. <br />
<br />
Kliknięcie znajdującego się poniżej przycisku 'Zgadzam się' oznacza zgodę na przedstawiony wyżej regulamin serwisu.
EOT;


$lang_register_php = array(
  'page_title' => 'Rejestrowanie użytkownika',
  'term_cond' => 'Warunki korzystania z serwisu',
  'i_agree' => 'Zgadzam się',
  'submit' => 'Wykonaj rejestrację',
  'err_user_exists' => 'Nazwa użytkownika którą wybrałeś już istnieje. Wybierz inną',
  'err_password_mismatch' => 'Hasła nie pasują do siebie. Wpisz je ponownie',
  'err_uname_short' => 'Nazwa użytkownika musi mieć co najmniej 2 znaki',
  'err_password_short' => 'Hasło musi mieć co najmniej 2 znaki',
  'err_uname_pass_diff' => 'Nazwa użytkownika i hasło muszą się od siebie różnić',
  'err_invalid_email' => 'Adres e-mail jest niepoprawny',
  'err_duplicate_email' => 'W bazie jest już użytkownik o podanym przez Ciebie adresie e-mail',
  'enter_info' => 'Wprowadź informacje potrzebne do rejestracji',
  'required_info' => 'Informacje wymagane',
  'optional_info' => 'Informacje opcjonalne',
  'username' => 'Nazwa użytkownika',
  'password' => 'Hasło',
  'password_again' => 'Wprowadź ponownie hasło',
  'email' => 'E-mail',
  'location' => 'Lokalizacja',
  'interests' => 'Zainteresowania',
  'website' => 'Strona domowa',
  'occupation' => 'Zajęcie / zawód',
  'error' => 'BŁĄD',
  'confirm_email_subject' => '%s - Informacja o rejestracji',
  'information' => 'Informacja',
  'failed_sending_email' => 'E-mail z potwierdzeniem nie może być wysłany!',
  'thank_you' => 'Dziękujemy za rejestrację.<br /><br />Na podany przez Ciebie adres e-mail został wysłany list z prośbą o potwierdzenie.',
  'acct_created' => 'Konto zostało utworzone. Możesz już zalogować się podając wybraną wczesniej nazwę użytkownika, oraz hasło',
  'acct_active' => 'Konto jest już aktywne. Możesz już zalogować się podając wybraną wczesniej nazwę użytkownika, oraz hasło',
  'acct_already_act' => 'Twoje konto zostało już aktywowane!',
  'acct_act_failed' => 'Te konto nie może być aktywowane!',
  'err_unk_user' => 'Podany użytkownik nie istnieje!',
  'x_s_profile' => 'profil: %s',
  'group' => 'Grupa',
  'reg_date' => 'Dołączył/a',
  'disk_usage' => 'Użyte miejsce',
  'change_pass' => 'Zmień hasło',
  'current_pass' => 'Bieżące hasło',
  'new_pass' => 'Nowe hasło',
  'new_pass_again' => 'Podaj ponownie nowe hasło',
  'err_curr_pass' => 'Bieżące hasło jest niepoprawne',
  'apply_modif' => 'Zastosuj zmiany',
  'change_pass' => 'Zmiań moje hasło',
  'update_success' => 'Twój profil został uaktualniony',
  'pass_chg_success' => 'Twoje hasło zostało zmienione',
  'pass_chg_error' => 'Twoje hasło nie zostało zmienione',
  'notify_admin_email_subject' => '%s - powiadomienie o rejestracji', //cpg1.3.0
  'notify_admin_email_body' => 'W galerii zarejestrował się nowy użytkownik o nazwie "%s"', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
Dziękujemy za rejestrację w witrynie {SITE_NAME}

Twoja nazwa użytkownika to: "{USER_NAME}"
Twoje hasło to: "{PASSWORD}"

Aby aktywować konto kliknij na poniższy link albo skopiuj go
i wklej do swojej przeglądarki internetowej.

{ACT_LINK}

Pozdrowienia,

Zespół strony {SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'Przeglądaj komentarze',
  'no_comment' => 'Nie ma komentarzy do przeglądania',
  'n_comm_del' => 'Skasowano komentarzy: %s',
  'n_comm_disp' => 'Ilość komentarzy do wyświetlenia',
  'see_prev' => 'Zobacz poprzednie',
  'see_next' => 'Zobacz następne',
  'del_comm' => 'Skasuj wybrane komentarze',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
  0 => 'Wyszukiwarka zdjęć',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Szukaj plików', //cpg1.3.0
  'select_dir' => 'Wybierz katalog',
  'select_dir_msg' => 'Wybrana funkcja umożliwia wsadowe dodawanie do galerii zdjęć które zostały przesłane na serwer.<br /><br />Wybierz katalog do którego zostały przesłane wybrane pliki', //cpg1.3.0
  'no_pic_to_add' => 'Nie ma pliku do dodania', //cpg1.3.0
  'need_one_album' => 'Użycie tej funckji wymaga istnienia przynajmniej jednego albumu do którego masz uprawnienia',
  'warning' => 'Uwaga',
  'change_perm' => 'skrypt nie może zapisywać plików do wybranego katalogu. Zmień ustawienia na 755 lub 777 zanim spróbujesz dodać pliki!', //cpg1.3.0
  'target_album' => '<b>Zapisuje zdjęcia do katalogu &quot;</b>%s<b>&quot; </b>%s', //cpg1.3.0
  'folder' => 'Katalog',
  'image' => 'plik',
  'album' => 'Album',
  'result' => 'Wynik',
  'dir_ro' => 'Nie można zapisać. ',
  'dir_cant_read' => 'Nie można odczytać. ',
  'insert' => 'Dodawanie nowych plików do galerii', //cpg1.3.0
  'list_new_pic' => 'Lista nowych plików', //cpg1.3.0
  'insert_selected' => 'Wstaw wybrane pliki', //cpg1.3.0
  'no_pic_found' => 'Nie znaleziono nowych plików', //cpg1.3.0
  'be_patient' => 'Proszę o cierpliwość, skrypt potrzebuje czasu na dodanie zdjęć', //cpg1.3.0
  'no_album' => 'nie wybrano albumu',  //cpg1.3.0
  'notes' =>  '<ul>'.
  '<li><b>OK</b> : oznacza, że zdjęcie zostało dodane'.
  '<li><b>DP</b> : oznacza, że zdjęcie jest zduplikowane i istnieje już w bazie'.
  '<li><b>PB</b> : oznacza brak możliwości dodania pliku. Sprawdź swoje uprawnienia do zapisywania katalogów i plików'.
  '<li><b>NA</b> : oznacza, że nie wybrałeś albumu do którego miałyby trafić pliki, kliknij \'<a href="javascript:history.back(1)">tutaj</a>\' i wybierz album. Jeżeli nie masz jeszcze albumu, <a href="albmgr.php">utwórz tutaj nowy</a></li>'.
  '<li>Jeżeli \'znaki\' OK, DP, PB nie pojawiają się, kliknij na pliku aby otrzymać komunikat generowany przez PHP'.
  '<li>Jeżeli przeglądarka nie załadowała strony, wciśnij klawisz F5 aby ją odświeżyć'.
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
  'title' => 'Banuj Użytkowników', 
  'user_name' => 'Nazwa użytkownika', 
  'ip_address' => 'Adres IP', 
  'expiry' => 'Aktywny do daty<br>(pusta - na stałe)', 
  'edit_ban' => 'Zapisz zmiany', 
  'delete_ban' => 'Kasuj', 
  'add_new' => 'Dodaj nowy ban', 
  'add_ban' => 'Dodaj', 
  'error_user' => 'Nie można znaleźć takiego użytkownika', //cpg1.3.0
  'error_specify' => 'Musisz określić nazwę użytkownika lub address IP', //cpg1.3.0
  'error_ban_id' => 'Niewłaściwy ID!', //cpg1.3.0
  'error_admin_ban' => 'Nie można banować samego siebie!', //cpg1.3.0
  'error_server_ban' => 'Chciałeś zabanować swój własny serwer? Hehe, nie można tego robić...', //cpg1.3.0
  'error_ip_forbidden' => 'Nie można banować tego adresu IP - jest nieroute\'owalny!', //cpg1.3.0
  'lookup_ip' => 'Sprawdz adres IP', //cpg1.3.0
  'submit' => 'dalej!', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Upload file', //cpg1.3.0
  'custom_title' => 'Spersonalizowany formularz przesyłania', //cpg1.3.0
  'cust_instr_1' => 'Możesz wybrać własną liczbę pól służących do przesyłania plików, jednak nie zostanie pokazane ich więcej niż w limicie określonym poniżej.', //cpg1.3.0
  'cust_instr_2' => 'Personalizacja formularza', //cpg1.3.0
  'cust_instr_3' => 'Ilość pól przesyłania: %s', //cpg1.3.0
  'cust_instr_4' => 'Pola przesyłania URI/URL: %s', //cpg1.3.0
  'cust_instr_5' => 'Pola przesyłania URI/URL:', //cpg1.3.0
  'cust_instr_6' => 'Pola przesyłania plików:', //cpg1.3.0
  'cust_instr_7' => 'Podaj liczbę każdego z rodzajów pól przesyłania plików, jakich potrzebujesz. Następnie kliknij \'Dalej\'. ', //cpg1.3.0
  'reg_instr_1' => 'Nieudane tworzenie formularza.', //cpg1.3.0
  'reg_instr_2' => 'Możesz przesyłać pliki przy pomocy poniższych pól. Rozmiar plików przesyłanych na serwer nie może przekroczyć %s KB każdy. Pliki ZIP przesłane w sekcjach \'Przesłanie pliku\' oraz \'Przesłanie URI/URL\' pozostaną skompresowane.', //cpg1.3.0
  'reg_instr_3' => 'Jeżeli chcesz aby spakowane pliki zostały zdekompresowane, użyj pola przesyłania plików w sekcji \'Przesyłanie z rozpakowaniem ZIP\'', //cpg1.3.0
  'reg_instr_4' => 'Przy przesyłaniu plików w sekcji Przesyłania URI/URL, podaj całą ścieżkę do pliku, np: http://www.mojastrona.com/images/foto.jpg', //cpg1.3.0
  'reg_instr_5' => 'Po uzupełnieniu formularza, użyj przycisku \'Dalej\'.', //cpg1.3.0
  'reg_instr_6' => 'Przesyłanie z rozpakowaniem ZIP:', //cpg1.3.0
  'reg_instr_7' => 'Przesyłanie plików:', //cpg1.3.0
  'reg_instr_8' => 'Przesyłanie URI/URL:', //cpg1.3.0
  'error_report' => 'Raport błędów', //cpg1.3.0
  'error_instr' => 'Wystąpiły błędy przy następujących plikach:', //cpg1.3.0
  'file_name_url' => 'Nazwa pliku/URL', //cpg1.3.0
  'error_message' => 'Wiadomość błędu', //cpg1.3.0
  'no_post' => 'Plik nie został przesłany metodą POST.', //cpg1.3.0
  'forb_ext' => 'Zabronione rozszerzenie pliku.', //cpg1.3.0
  'exc_php_ini' => 'Przekroczono wielkość plku określoną w php.ini.', //cpg1.3.0
  'exc_file_size' => 'Przekroczono wielkość plku określoną w konfiguracji CPG.', //cpg1.3.0
  'partial_upload' => 'Udało się tylko częściowo przesłać plik.', //cpg1.3.0
  'no_upload' => 'Nie doszło do przesłania.', //cpg1.3.0
  'unknown_code' => 'Nieznany błąd przesyłania PHP.', //cpg1.3.0
  'no_temp_name' => 'Nie udało się przesłać pliku ze względu na brak tymczasowej nazwy.', //cpg1.3.0
  'no_file_size' => 'Plik nie zawiera danych lub jest uszkodzony', //cpg1.3.0
  'impossible' => 'Nie można przenieść pliku.', //cpg1.3.0
  'not_image' => 'Plik nie jest obrazem lub jest uszkodzony', //cpg1.3.0
  'not_GD' => 'Brak rozszerzenia GD.', //cpg1.3.0
  'pixel_allowance' => 'Przekroczono rozmiar podany w pikselach.', //cpg1.3.0
  'incorrect_prefix' => 'Niewłaściwy prefiks URI/URL', //cpg1.3.0
  'could_not_open_URI' => 'Nie można otworzyć URI.', //cpg1.3.0
  'unsafe_URI' => 'Nie można potwierdzić bezpieczeństwa.', //cpg1.3.0
  'meta_data_failure' => 'Błąd metadanych', //cpg1.3.0
  'http_401' => '401 - Brak dostępu', //cpg1.3.0
  'http_402' => '402 - Wymagana opłata', //cpg1.3.0
  'http_403' => '403 - Dostęp zabroniony', //cpg1.3.0
  'http_404' => '404 - Nie znaleziono', //cpg1.3.0
  'http_500' => '500 - Wewnętrzny błąd serwera', //cpg1.3.0
  'http_503' => '503 - Usługa niedostępna', //cpg1.3.0
  'MIME_extraction_failure' => 'nie można określić MIME.', //cpg1.3.0
  'MIME_type_unknown' => 'Nieznany typ MIME', //cpg1.3.0
  'cant_create_write' => 'Nie można stworzyć/zapisać pliku.', //cpg1.3.0
  'not_writable' => 'Nie można zapisać do pliku.', //cpg1.3.0
  'cant_read_URI' => 'Nie można czytać URI/URL', //cpg1.3.0
  'cant_open_write_file' => 'Nie można otworzyć pliku URI do zapisu.', //cpg1.3.0
  'cant_write_write_file' => 'Nie można zapisać pliku zapisywalnego URI.', //cpg1.3.0
  'cant_unzip' => 'Nie można zdekompresować.', //cpg1.3.0
  'unknown' => 'Nieznany błąd', //cpg1.3.0
  'succ' => 'Udane przesłanie', //cpg1.3.0
  'success' => 'Udane przesłanie plików: %s.', //cpg1.3.0
  'add' => 'Kliknij \'Continue\' by dodać pliki do albumów.', //cpg1.3.0
  'failure' => 'Nieudane przesłanie', //cpg1.3.0
  'f_info' => 'Informacja o pliku', //cpg1.3.0
  'no_place' => 'Poprzedni plik nie został umieszczony w albumie.', //cpg1.3.0
  'yes_place' => 'Poprzedni plik został umieszczony w albumie.', //cpg1.3.0
  'max_fsize' => 'Maksymalny rozmiar przesyłanego pliku to %s KB',
  'album' => 'Album',
  'picture' => 'Plik', //cpg1.3.0
  'pic_title' => 'Tytuł pliku', //cpg1.3.0
  'description' => 'Opis pliku', //cpg1.3.0
  'keywords' => 'Słowa kluczowe (oddzielone spacjami)',
  'err_no_alb_uploadables' => 'Niestety, nie ma albumu do którego mógłbyś przesłać pliki', //cpg1.3.0
  'place_instr_1' => 'Proszę umieścić teraz pliki w albumach. Możesz teraz także wprowadzić stosowne informacje o każdym z plików.', //cpg1.3.0
  'place_instr_2' => 'Są jeszcze pliki wymagające umieszczenia. Proszę kliknąć \'Dalej\'.', //cpg1.3.0
  'process_complete' => 'Wszystkie pliki umieszczono w albumach.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'title' => 'Zarządzanie użytkownikami',
  'name_a' => 'Nazwa rosnąco',
  'name_d' => 'Nazwa malejąco',
  'group_a' => 'Grupa rosnąco',
  'group_d' => 'Grupa malejąco',
  'reg_a' => 'Data rej. rosnąco',
  'reg_d' => 'Data rej. malejąco',
  'pic_a' => 'Liczba plików rosnąco',
  'pic_d' => 'Liczba plików malejąco',
  'disku_a' => 'Użycie dysku rosnąco',
  'disku_d' => 'Użycie dysku malejąco',
  'lv_a' => 'Ostatnie wizyty rosnąco', //cpg1.3.0
  'lv_d' => 'Ostatnie wizyty malejąco', //cpg1.3.0
  'sort_by' => 'Posortuj użytkowników wg',
  'err_no_users' => 'Tabela użytkowników jest pusta!',
  'err_edit_self' => 'Nie możesz modyfikować teraz swojego profilu. Aby to zrobić kliknij łącze \'Mój profil\'',
  'edit' => 'EDYTUJ',
  'delete' => 'KASUJ',
  'name' => 'Nazwa użytkownika',
  'group' => 'Grupa',
  'inactive' => 'Nieaktywny',
  'operations' => 'Operacje',
  'pictures' => 'Pliki', //cpg1.3.0
   'disk_space' => 'Użyte miejsce / Quota',
  'registered_on' => 'Zerejestrowano',
  'last_visit' => 'Ostatnia wizyta', //cpg1.3.0
  'u_user_on_p_pages' => 'użytkowników: %d na stronach: %d',
  'confirm_del' => 'Czy na pewno chcesz skasować tego użytkownika? \\nWszystkie jego pliki i albumy zostaną automatycznie skasowane.', //js-alert //cpg1.3.0
  'mail' => 'E-MAIL',
  'err_unknown_user' => 'Selected user does not exist !',
  'modify_user' => 'Modyfikuj użytkownika',
  'notes' => 'Uwagi',
  'note_list' => '<li>Jeżeli nie chcesz zmieniać swojego ulubionego hasła teraz, zostaw pole "hasło" puste',
  'password' => 'Hasło',
  'user_active' => 'Użytkownik jest aktywny',
  'user_group' => 'Grupa użytkowników',
  'user_email' => 'Adres e-mail użytkownika',
  'user_web_site' => 'Strona sieci web użytkownika',
  'create_new_user' => 'Utwórz nowego użytkownika',
  'user_location' => 'Lokacja użytkownika',
  'user_interests' => 'Zainteresowania',
  'user_occupation' => 'Zajęcie',
  'latest_upload' => 'Ostatnio przesłane', //cpg1.3.0
  'never' => 'brak', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
  'title' => 'Narzędzia administracyjne (Zmień rozmiar zdjęć)', //cpg1.3.0
  'what_it_does' => 'Do czego to służy', 
  'what_update_titles' => 'Uaktualnia tytuły nazwami plików', 
  'what_delete_title' => 'Kasuje tytuły', 
  'what_rebuild' => 'Odbudowuje miniatury i zdjęcia pośrednie', 
  'what_delete_originals' => 'Kasuje zdjęcia źródłowe, zastępując je zdjęciami o zmienionych wymiarach', 
  'file' => 'Plik', 
  'title_set_to' => 'tytuł', 
  'submit_form' => 'prześlij', 
  'updated_succesfully' => 'zaktualizowano', 
  'error_create' => 'BŁĄD tworzenia', 
  'continue' => 'Przetwarzaj więcej zdjęć', 
  'main_success' => 'Plik %s został ustawiony jako zdjęcie główne', //cpg1.3.0
  'error_rename' => 'Błąd przy zmiany nazwy z %s na %s', 
  'error_not_found' => 'Plik %s nie został znaleziony', 
  'back' => 'powrót na stronę główną', 
  'thumbs_wait' => 'Uaktualniam miniatury i/lub zdjęcia o zmienionych wymiarach, proszę czekać...', 
  'thumbs_continue_wait' => 'Trwa uaktualnianie miniatur i/lub zdjęć o zmienionych wymiarach...', 
  'titles_wait' => 'Uaktualnianie tytułów, proszę czekać...', 
  'delete_wait' => 'Kasowanie tytułów, proszę czekać...', 
  'replace_wait' => 'Kasowanie oryginałów i zamienianie ich na zdjęcia o zmienionych wymiarach..', 
  'instruction' => 'Szybkie instrukcje', 
  'instruction_action' => 'Wybierz akcję', 
  'instruction_parameter' => 'Ustaw parametry', 
  'instruction_album' => 'Wybierz album', 
  'instruction_press' => 'Naciśnij %s', 
  'update' => 'Uaktualnij miniatury i/lub zdjęcia o zmienionych wymiarach', 
  'update_what' => 'Do uaktualnienia', 
  'update_thumb' => 'Tylko miniatury', 
  'update_pic' => 'Tylko zdjęcia o zmienionych wymiarach', 
  'update_both' => 'Zarówno miniatury jak i zdjęcia o zmienionych rozmiarach', 
  'update_number' => 'Ilość przetworzonych zdjęć/kliknięcie', 
  'update_option' => '(Spróbuj zmniejszyć tę ilość, jeżeli zaobserwujesz problem z timeoutem)',
  'filename_title' => 'Nazwa pliku &rArr; Tytuł pliku', //cpg1.3.0
  'filename_how' => 'Jak modyfikować nazwę pliku', 
  'filename_remove' => 'Usuń rozszerzenie .jpg i zamień _ (podkreślenie) na spacje', 
  'filename_euro' => 'Zmienia 2003_11_23_13_20_20.jpg na 23/11/2003 13:20', 
  'filename_us' => 'Zmienia 2003_11_23_13_20_20.jpg na 11/23/2003 13:20',
  'filename_time' => 'Zmienia 2003_11_23_13_20_20.jpg na 13:20',
  'delete' => 'Kasowanie tytułów lub oryginalnych plików', //cpg1.3.0
  'delete_title' => 'Kasowanie tytułów plików', //cpg1.3.0
  'delete_original' => 'Skasuj oryginalne zdjęcia', 
  'delete_replace' => 'Kasuje oryginalne zdjęcia zastępując je zdjęciami zrewymiarowanymi', 
  'select_album' => 'Wybierz album',
  'delete_orphans' => 'Kasuj komentarze do nieistniejących plików (dotyczy wszystkich albumów)', //cpg1.3.0
  'orphan_comment' => 'znalezionych komentarzy do nieistniejących plików', //cpg1.3.0
  'delete' => 'Kasuj', //cpg1.3.0
  'delete_all' => 'Kasuj wszystko', //cpg1.3.0
  'comment' => 'Komentarz: ', //cpg1.3.0
  'nonexist' => 'dołączony do nieistniejącego pliku # ', //cpg1.3.0
  'phpinfo' => 'Wyświetl phpinfo', //cpg1.3.0
  'update_db' => 'Aktualizacja bazy danych', //cpg1.3.0
  'update_db_explanation' => 'Jeżeli usunąłeś pliki coppermine, dodałeś jakąś modyfikację, lub dokonałeś aktualizacji poprzedniej wersji coppermine, uruchom jednorazowo aktualizację bazy danych. Stworzy ona niezbędne tabele i/lub ustawienia konfiguracyjne w bazie danych coppermine.', //cpg1.3.0
);

?>