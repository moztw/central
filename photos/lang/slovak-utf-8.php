<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.3.2                                            //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002,2003 Gregory DEMAR                                     //
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
// CVS version: $Id: slovak-utf-8.php,v 1.6 2004/12/29 23:06:35 chtito Exp $
// ------------------------------------------------------------------------- //


// info about translators and translated language
$lang_translation_info = array(
'lang_name_english' => 'Slovak',  
'lang_name_native' => 'Slovensky', 
'lang_country_code' => 'sk', 
'trans_name'=> 'Zin (Martin Petriska)', //the name of the translator - can be a nickname
'trans_email' => 'zin@centrum.sk', //translator's email address (optional)
'trans_website' => 'http://zin.blog.sk', //translator's website (optional)
'trans_date' => '2004-11-04', //the date the translation was created / last modified
'trans_note' => 'Podpora slovenciny do Coppermine 1.3.2, preleozene z ceskeho prekladu, je mozne, ze nie vsetko je prelozene. Kodovanie win-1250, v apache treba pridat do suboru 

httpd.conf 

 AddCharset windows-1250 .cp-1250  .win-1250

teda ak to tam nemate, ja som pouzil instalaciu xampp a tam to default nebolo

subor slovak.php zkopirujte do adresara lang a vyberte v konfiguracii

zin@centrum.sk', // translator's note
);


$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytov', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Ne', 'Po', 'Ut', 'St', 'Št', 'Pi', 'So');
$lang_month = array('Január', 'Február', 'Marec', 'Apríl', 'Máj', 'Jún', 'Júl', 'August', 'September', 'Október', 'November', 'December');

// Some common strings
$lang_yes = 'Áno';
$lang_no  = 'Nie';
$lang_back = 'NASPEŤ';
$lang_continue = 'POKRAČOVAŤ';
$lang_info = 'Informácie';
$lang_error = 'Chyba';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%B %d, %Y';
$lastcom_date_fmt =  '%m/%d/%y at %H:%M';
$lastup_date_fmt = '%B %d, %Y';
$register_date_fmt = '%B %d, %Y';
$lasthit_date_fmt = '%B %d, %Y at %I:%M %p';
$comment_date_fmt =  '%B %d, %Y at %I:%M %p';

// For the word censor
$lang_bad_words = array('piča', 'hovno', '*fuck*', 'prdel', 'čurák', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*', 'kokot');

$lang_meta_album_names = array(
        'random' => 'Náhodné obrázky',
        'lastup' => 'Najnovšie',
        'lastalb'=> 'Naposledy aktualizovaná galéria',
        'lastcom' => 'Najnovšie komentáre',
        'topn' => 'Nejpozeranejšie',
        'toprated' => 'Nejlepšie hodnotené',
        'lasthits' => 'Naposledy zobrazené',
        'search' => 'Výsledky hladania',
        'favpics'=> 'Obľúbené obrázky',
);

$lang_errors = array(
    'access_denied' => 'Nemáte oprávnenie na túto stránku',
    'perm_denied' => 'Nemáte dostatočné práva pre potvrdenie tejto operácie.',
    'param_missing' => 'Skriptu aleboli predané potrebné parametre',
    'non_exist_ap' => 'Vybraná galéria/obrázok neexistuje',
    'quota_exceeded' => 'Vyčerpali(a) ste miesto na disku.<br /><br />Vaša kvóta je[quota]K, Vaše obrázky zaberajú [space]K, pridaním tohto obrázku by ste svoju kvótu prekročili',
    'gd_file_type_err' => 'Pokiaľ používate GD knižnicu sú podporované len obrázky JPG a PNG',
    'invalid_image' => 'Tento obrázok je poškodený/porušený GD knihovna s ním nemôže pracovat.',
    'resize_failed' => 'Nieje možné vytvoriť náhľad alebo zmenšený obrázok',
    'no_img_to_display' => 'Tu nie je žiadny obrázok, který by ste si mohli prezrieť',
    'non_exist_cat' => 'Vybraná kategórie neexistuje',
    'orphan_cat' => 'Podkategória nemá nadriadenú kategóriu. Problém opravte cez nastavenie kategorií.',
    'directory_ro' => 'Do adresára \'%s\' nieje možné zapisovať (nedostatečné práva), obrázky nemohli byť zmazané.',
    'non_exist_comment' => 'Vybraný komentár neexistuje',
    'pic_in_invalid_album' => 'Obrázok(y) je/sú v neexitujícej galerii (%s)!?',
    'banned' => 'Bol ste vykopnutý z týchto stránok, nie je Vám umožnené ich používať.',
    'not_with_udb' => 'Táto funkcia je vypnutá pretože je integrována ve fóru. Buď nie je požadovaná fukcia dostupná na tomto systéme, alebo túto/tieto funci/e plní fórum.',
    'offline_title' => 'Odpojené', //cpg1.3.0
    'offline_text' => 'Galéria je momentálne odpojená - prosím zkúste to znova neskôr', //cpg1.3.0
    'ecards_empty' => 'Momentálne nie sú k zobraniu dostupné žiadne záznamy o ecards. Overte prosím, či je zapnutá voľba "ecard logging" v konfiguráci coppermine!', //cpg1.3.0
    'action_failed' => 'Akcia zlyhala.  Coppermine nie je schopné vašu požiadavku zpracovat.', //cpg1.3.0
    'no_zip' => 'Knižnice potrebné pre zpracovánie ZIP súborov nie sú dostupné.  Prosím kontaktujte Vašeho administrátora aplikáce Coppermine.', //cpg1.3.0
    'zip_type' => 'Nemáte povolenie nahrávať na server súbory ZIP.', //cpg1.3.0
);

$lang_bbcode_help = 'Následujúce značky môžu byť užitočné: <li>[b]<b>Tučné</b>[/b]</li> <li>[i]<i>Kurzíva</i>[/i]</li> <li>[url=http://vasedomena.cz/]Text odkazu[/url]</li> <li>[email]uzivatel@domena.cz[/email]</li>'; //cpg1.3.0


// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
    'alb_list_title' => 'Prejsť na zoznam galérií',
    'alb_list_lnk' => 'Zoznam galérií',
    'my_gal_title' => 'Prejsť do mojej osobnej galérie',
    'my_gal_lnk' => 'Moja galéria',
    'my_prof_lnk' => 'Môj Profil',
    'adm_mode_title' => 'Do Admin módu',
    'adm_mode_lnk' => 'Admin mód',
    'usr_mode_title' => 'Do Užívateľského módu',
    'usr_mode_lnk' => 'Užívateľský mód',
    'upload_pic_title' => 'Nahrať obrázok do gallérie',
    'upload_pic_lnk' => 'Upload obrázku',
    'register_title' => 'Vytvoriť účet',
    'register_lnk' => 'Registrovať sa',
    'login_lnk' => 'Prihlásiť',
    'logout_lnk' => 'Odhlásiť',
    'lastup_lnk' => 'Najnovšie obrázky',
    'lastcom_lnk' => 'Posledné komentáre',
    'topn_lnk' => 'Najprezeranejšie',
    'toprated_lnk' => 'Najlepšie hodnotené',
    'search_lnk' => 'Vyhľadávanie',
    'fav_lnk' => 'Obľúbené',
    'memberlist_title' => 'Ukáž zoznam členov', //cpg1.3.0
    'memberlist_lnk' => 'Zoznam členov', //cpg1.3.0
    'faq_title' => 'FAQ = najčastejšie kladené otázky na galérii &quot;Coppermine&quot;', //cpg1.3.0
    'faq_lnk' => 'FAQ', //cpg1.3.0

);

$lang_gallery_admin_menu = array(
    'upl_app_lnk' => 'Potvdenie uploadu',
    'config_lnk' => 'Nastavenie',
    'albums_lnk' => 'Galéria',
    'categories_lnk' => 'Kategórie',
    'users_lnk' => 'Užívatelia',
    'groups_lnk' => 'Už. skupiny',
    'comments_lnk' => 'Komentáre',
    'searchnew_lnk' => 'Dávkové pridávanie obrázkov',
    'util_lnk' => 'Zmeniť veľkosť obrázkov',
    'ban_lnk' => 'Vykopnúť užívateľa',
);

$lang_user_admin_menu = array(
    'albmgr_lnk' => 'Vytvoriť / organizovať moju galériu',
    'modifyalb_lnk' => 'Zmeniť moju galériu',
    'my_prof_lnk' => 'Môj profil',
);

$lang_cat_list = array(
    'category' => 'Kategórie',
    'albums' => 'Galérie',
    'pictures' => 'Obrázky',
);

$lang_album_list = array(
    'album_on_page' => '%d galerií na %d stránkach'
);
           //ascending VZESTUPNE
$lang_thumb_view = array(
    'date' => 'DÁTUM',
    //Sort by filename and title
    'name' => 'MENO SÚBORU',
    'title' => 'NADPIS',
    'sort_da' => 'Zoradiť vzostupne podľa dátumu',
    'sort_dd' => 'Zoradiť zostupne podľa data',
    'sort_na' => 'Zoradiť vzostupne podľa mena',
    'sort_nd' => 'Zoradiť zostupne podľa mena',
    'sort_ta' => 'Zoradiť podľa nadpisu vzostupne',
    'sort_td' => 'Zoradiť podľa nadpisu zostupne',
    'download_zip' => 'Download ako Zip súbor', //cpg1.3.0
    'pic_on_page' => '%d obrázkov na %d stránkách',
    'user_on_page' => '%d užívateľov na %d stránkách'
);

$lang_img_nav_bar = array(
    'thumb_title' => 'Zpeť na stránku s náhľadmi',
    'pic_info_title' => 'Zobraz/skry informácie o obrázku',
    'slideshow_title' => 'Slideshow',
    'ecard_title' => 'Poslať tento obrázok ako pohľadnicu',
    'ecard_disabled' => 'Pohľadnice sú vypnuté',
    'ecard_disabled_msg' => 'Nemáte dostatečné práva pre zaslanie pohľadnice',
    'prev_title' => 'Predchádzajúci obrázok',
    'next_title' => 'Ďaľší obrázok',
    'pic_pos' => 'OBRÁZOK %s/%s',
);

$lang_rate_pic = array(
    'rate_this_pic' => 'Hodnotiť tento obrázok ',
    'no_votes' => '(žiadne hodnotenie)',
    'rating' => '(Aktuálne hodnotenie : %s / z 5, hlasované %s krát)',
    'rubbish' => 'Hnusný',
    'poor' => 'Mizerný',
    'fair' => 'Ujde to',
    'good' => 'Dobrý',
    'excellent' => 'Výborný',
    'great' => 'Dokonalý',
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
    CRITICAL_ERROR => 'Kritická chyba',
    'file' => 'Súbor: ',
    'line' => 'Riadok: ',
);

$lang_display_thumbnails = array(
    'filename' => 'Meno súboru : ',
    'filesize' => 'Veľkost súboru : ',
    'dimensions' => 'Rozmery : ',
    'date_added' => 'Dátum pridania : '
);

$lang_get_pic_data = array(
    'n_comments' => '%s komentár(ov)',
    'n_views' => '%s zobrazenie',
    'n_votes' => '(%s hlas(ov))'
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Debug Info', //cpg1.3.0
  'select_all' => 'Vybrať všetko', //cpg1.3.0
  'copy_and_paste_instructions' => 'Pokiaľ sa chystáte požadovat pomoc na podpore coppermine, vložte tento ladiaci výstup do vášho príspevku. Pred takúmto vložením sa uistite, že ste všetky vaše heslá z tohto textu nahradili pomocou "***".', //cpg1.3.0
  'phpinfo' => 'Zobraziť phpinfo', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => 'Prednastavený jazyk', //cpg1.3.0
  'choose_language' => 'Vyberte Váš jazyk', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'Prednastavená téma', //cpg1.3.0
  'choose_theme' => 'vyberte tému', //cpg1.3.0
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
    0 => 'Opúšťam Admin Mód....:-(',
    1 => 'Vstupujem do Admin Módu....:-)',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
    'alb_need_name' => 'Galéria musí mať meno',
    'confirm_modifs' => 'Ste si istý(a) týmito zmenami ?',
    'no_change' => 'Neurobil(a) ste žiadne zmeny !',
    'new_album' => 'Nová galéria',
    'confirm_delete1' => 'Ste si istý(á), že chcete zmazat túto galériu ?',
    'confirm_delete2' => '\nVšetky obrázky a komentáre budú zmazané !',
    'select_first' => 'Najprv vyberte galériu',
    'alb_mrg' => 'Správca galérií',
    'my_gallery' => '* Moja galéria *',
    'no_category' => '* Nie je kategória *',
    'delete' => 'Zmazať',
    'new' => 'Nový/á',
    'apply_modifs' => 'Potvrdiť zmeny',
    'select_category' => 'Vybrať kategóriu',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
    'miss_param' => 'Parametre potrebné pre \'%s\'operáciu nie su dostupné !',
    'unknown_cat' => 'Vybraná kategória v databáze neexistuje',
    'usergal_cat_ro' => 'Nie je možné zmazat užívateľské galérie !',
    'manage_cat' => 'Spravovať kategórie',
    'confirm_delete' => 'Naozaj chcete SMAZAT túto kategóriu',
    'category' => 'Kategoria',
    'operations' => 'Operácia',
    'move_into' => 'Presunúť do',
    'update_create' => 'Aktualizovať/Vytvoriť kategóriu',
    'parent_cat' => 'Nadradená kategória',
    'cat_title' => 'Nadpis kategórie',
    'cat_thumb' => 'Miniatúra kategórie', //cpg1.3.0
    'cat_desc' => 'Popis kategórie'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
    'title' => 'Nastavenie',
    'restore_cfg' => 'Nastavit východziu',
    'save_cfg' => 'Uložiť konfiguráciu',
    'notes' => 'Poznámky',
    'info' => 'Informácie',
    'upd_success' => 'Konfigurácia bola zmenená',
    'restore_success' => 'Konfigurácia bola nastavená na východzie nastavenie',
    'name_a' => 'Meno vzostupne',
    'name_d' => 'Meno zostupne',
    'title_a' => 'Nadpis vzostupne',
    'title_d' => 'Nadpis zostupne',
    'date_a' => 'Dátum vzostupne',
    'date_d' => 'Dátum zostupne',
    'th_any' => 'Max Aspect',
    'th_ht' => 'Výška',
    'th_wd' => 'Šírka',
    'label' => 'popis', //cpg1.3.0
    'item' => 'položka', //cpg1.3.0
    'debug_everyone' => 'Každý', //cpg1.3.0
    'debug_admin' => 'Iba Admin', //cpg1.3.0

);

if (defined('CONFIG_PHP')) $lang_config_data = array(
    'Základné nastavenie',
    array('Meno galérie', 'gallery_name', 0),
    array('Popis galérie', 'gallery_description', 0),
    array('Email administrátora galérie', 'gallery_admin_email', 0),
    array('Cieľová adresa pre odkaz \'Zobraziť ďaľšie obrázky\' v odkaze pohľadnice', 'ecards_more_pic_target', 0),
    array('Galéria je odpojená', 'offline', 1), //cpg1.3.0
    array('Logovať ecards', 'log_ecards', 1), //cpg1.3.0
    array('Povoliť ZIP-sťahovánie obľúbených', 'enable_zipdownload', 1), //cpg1.3.0

    'Jazyk, Témy &amp; nastavenie znakovej sady',
    array('Jazyk', 'lang', 5),
    array('Téma', 'theme', 6),
    array('Zobraziť zoznam jazykov', 'language_list', 1), //cpg1.3.0
    array('Zobraziť vlajky jazykov', 'language_flags', 8), //cpg1.3.0 
    array('Zobraziť &quot;reset&quot; vo výbere jazyka', 'language_reset', 1), //cpg1.3.0
    array('Zobraziť zoznam tém', 'theme_list', 1), //cpg1.3.0
    array('Zobraziť &quot;reset&quot; vo výbere tém', 'theme_reset', 1), //cpg1.3.0
    array('Zobraziť FAQ', 'display_faq', 1), //cpg1.3.0
    array('Zobraziť nápovedu bbcode', 'show_bbcode_help', 1), //cpg1.3.0
    array('Kódováníe znakov', 'charset', 4), //cpg1.3.0

    'Nastavení zobrazení',
    array('Šírka hlavnej tabuľky v (pixeloch alebo %)', 'main_table_width', 0),
    array('Počet úrovní subkategorií', 'subcat_level', 0),
    array('Počet galérií na stránku', 'albums_per_page', 0),
    array('Počet stĺpcov v prehľade galérií', 'album_list_cols', 0),
    array('Veľkosť náhľadov v pixeloch', 'alb_list_thumb_size', 0),
    array('Obsah hlavnej stránky', 'main_page_layout', 0),
    array('Ukazovať v kategóriách náhľady galérií prvej úrovne','first_level',1),

    'Zobrazenie náhľadov',
    array('Počet stĺpcov na stránku', 'thumbcols', 0),
    array('Počet riadkov na stránku', 'thumbrows', 0),
    array('Maximálne množstvo záložiek', 'max_tabs', 0),
    array('Zobraziť legendu obrázkov pod náhľadom', 'caption_in_thumbview', 1),
    array('Zobraziť počet prehliadnutí pod náhľadom', 'views_in_thumbview', 1), //cpg1.3.0
    array('Zobraziť počet komentárov pod náhľadom', 'display_comment_count', 1),
    array('Zobraziť meno autora pod náhľadom', 'display_uploader', 1), //cpg1.3.0
    array('Základné radenie náhľadov', 'default_sort_order', 3),
    array('Min. počet hlasov potrebný k zaradeniu do zoznamu \'Najlepšie hodnotené\'', 'min_votes_for_rating', 0),

    'Zobrazenie obrázkov &amp; Nastavenie komentárov',
    array('Šírka tabuľky pre zobrazenie obrázku (v pixeloch alebo %)', 'picture_table_width', 0),
    array('Vždy zobraziť podrobné info', 'display_pic_info', 1),
    array('CENZÚROVAT slova v komentároch', 'filter_bad_words', 1),
    array('Povoliť smajlíky v komentároch', 'enable_smilies', 1),
    array('Maximálna dĺžka popisu obrázku', 'max_img_desc_length', 0),
    array('Maximálna dĺžka slova v komentári', 'max_com_wlength', 0),
    array('Maximálne množstvo riadkov v komentári', 'max_com_lines', 0),
    array('Maximální dĺžka komentáre', 'max_com_size', 0),
    array('Ukázať filmový prúžok', 'display_film_strip', 1),
    array('Počet položiek vo filmovom prúžku', 'max_film_strip_items', 0),
    array('Upozorniť adminitratora na komentáre pomocí emailu', 'email_comment_notification', 1), //cpg1.3.0 
    array('Slideshow interval v milisekundách (1 sekunda = 1000 milisekund)', 'slideshow_interval', 0), //cpg1.3.0 

    'Obrázky a nastavenie náhľadov',
    array('Kvalita súborov JPEG', 'jpeg_qual', 0),
    array('Maximálne rozmery náhľadu <b>*</b>', 'thumb_width', 0),
    array('Použiť rozmer ( šírka alebo výška alebo maximálny rozmer náhľadu )<b>*</b>', 'thumb_use', 7),
    array('Vytvoriť strední obrázek','make_intermediate',1),
    array('Maximálna šírka alebo výška stredného obrázku <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0), //cpg1.3.0
    array('Maximální velikost uploadovaných obrázkov (KB)', 'max_upl_size', 0),
    array('Maximálne rozmery uploadovaných obrázkov (v pixelech)', 'max_upl_width_height', 0),

    'Obrázky a náhľady rozšírené nastavenie',
    array('Zobrazit ikonu zamknuté galéria neprihlásenému uživateľovi.','show_private',1),
    array('Znaky zakázané v názvoch súborov', 'forbiden_fname_char',0),
    //array('Povolené koncovky uploadovaných súborov', 'allowed_file_extensions',0),
    array('Povolené typy obrázkov', 'allowed_img_types',0), //cpg1.3.0
    array('Povolené typy videa', 'allowed_mov_types',0), //cpg1.3.0
    array('Povolené typy audia', 'allowed_snd_types',0), //cpg1.3.0
    array('Povolené typy dokumentov', 'allowed_doc_types',0), //cpg1.3.0
    array('Metóda zmeny veľkosti obrázkov','thumb_method',2),
    array('Cesta k ImageMagicu (príklad /usr/bin/X11/)', 'impath', 0),
    //array('Povolené typy obrázkov (iba pre ImageMagic)', 'allowed_img_types',0),
    array('Parametre pre ImageMagic', 'im_options', 0),
    array('Čítať EXIF data zo súborov JPEG', 'read_exif_data', 1),
    array('Čítať IPTC data zo súborov JPEG', 'read_iptc_data', 1), //cpg1.3.0
    array('Adresár pre galériu <b>*</b>', 'fullpath', 0),
    array('Adresár pre galériu užívateľov <b>*</b>', 'userpics', 0),
    array('Prefix pre stredne veľké obrázky <b>*</b>', 'normal_pfx', 0),
    array('Prefix pre náhľady <b>*</b>', 'thumb_pfx', 0),
    array('Základný mód pre adresáre', 'default_dir_mode', 0),
    array('Základný mód pre obrázky', 'default_file_mode', 0),

    'Nastavenie užívateľov',
    array('Povoliť registráciu nových užívateľov', 'allow_user_registration', 1),
    array('Pre registráciu vyžadovať potvrdenie admina', 'reg_requires_valid_email', 1),
    array('Upozorniť administrátora na registráciu nového užívateľa pomocou emailu', 'reg_notify_admin_email', 1), //cpg1.3.0
    array('Povoliť pre dvoch uživateľov rovnaký email', 'allow_duplicate_emails_addr', 1),
    array('Majú mať užívatelia vlastné galérie?', 'allow_private_albums', 1),
    array('Upozorniť administrátora na vložený súbor čekajúci na schválenie', 'upl_notify_admin_email', 1), //cpg1.3.0
    array('Dovoliť prihláseným užívateľom, aby videli zoznam užívateľov', 'allow_memberlist', 1), //cpg1.3.0

    'Vlastné položky pre popis obrázku (Nechajte prázdne a nezobrazí sa)',
    array('Meno položky 1', 'user_field1_name', 0),
    array('Meno položky 2', 'user_field2_name', 0),
    array('Meno položky 3', 'user_field3_name', 0),
    array('Meno položky 4', 'user_field4_name', 0),

    'Cookies &amp; Kódová stránka',
    array('Meno cookies užívané programem (expertní volba)', 'cookie_name', 0),
    array('Cesta pre cookies užívaná programem (expertní volba)', 'cookie_path', 0),
    array('Kódová stránka', 'charset', 4),

    'Ďaľšie nastavenie',
    array('Zapnúť ladiaci mód (len pre testovanie)', 'debug_mode', 1),
    array('Zobrazovať v ladiacom móde upozornenie', 'debug_notice', 1), //cpg1.3.0


    '<br /><div align="center">(*) Položky označené * sa NESMÚ zmeniť pokiaľ už máte ve vašej galérii nahrané obrázky</div><br />
    <a name="notice2"></a>(**) Pri zmene tohto nastavenia sa zmena prejaví iba u súborov, které sú 
	pridané až od tohto okamžiku. Je doporučené nemeniť toto nastavenie pokiaľ už sú v galerii nejaké súbory. 
	Aj tak je možné nechať uplatniť zmeny i na už existujíce súbory pomocou nástroja
	&quot;<a href="util.php">admin tools</a> (resize pictures)&quot; v admin menu.</div><br />', //cpg1.3.0

);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //
if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Zasielanie ecards', //cpg1.3.0
  'ecard_sender' => 'Odosielateľ', //cpg1.3.0
  'ecard_recipient' => 'Príjemca', //cpg1.3.0
  'ecard_date' => 'Dátum', //cpg1.3.0
  'ecard_display' => 'Zobrazit ecard', //cpg1.3.0
  'ecard_name' => 'Meno', //cpg1.3.0
  'ecard_email' => 'Email', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'vzostupne', //cpg1.3.0
  'ecard_descending' =>'zostupne', //cpg1.3.0
  'ecard_sorted' => 'Utriedené', //cpg1.3.0
  'ecard_by_date' => 'podľa dátumu', //cpg1.3.0
  'ecard_by_sender_name' => 'podľa mena odesielateľa', //cpg1.3.0
  'ecard_by_sender_email' => 'podľa emailu odesielateľa', //cpg1.3.0
  'ecard_by_sender_ip' => 'podľa IP addressy odesielateľa', //cpg1.3.0
  'ecard_by_recipient_name' => 'podľa mena príjemcu', //cpg1.3.0
  'ecard_by_recipient_email' => 'podľa emailu príjemcu', //cpg1.3.0
  'ecard_number' => 'zobrazenie záznamu %s aľ %s z %s', //cpg1.3.0
  'ecard_goto_page' => 'prechod na stranu', //cpg1.3.0
  'ecard_records_per_page' => 'záznamu na jednej strane', //cpg1.3.0
  'check_all' => 'Zatrhnout všetko', //cpg1.3.0
  'uncheck_all' => 'Odznačit všetko', //cpg1.3.0
  'ecards_delete_selected' => 'Zmazať vybrané ecards', //cpg1.3.0
  'ecards_delete_confirm' => 'Ste si istý, že chcete zmazať záznamy? Nastavte checkbox!', //cpg1.3.0 
  'ecards_delete_sure' => 'Som si istý.', //cpg1.3.0
);
                                                                                                                  



// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
    'empty_name_or_com' => 'Vložte meno a Váš komentár',
    'com_added' => 'Váš komentár bol pridaný',
    'alb_need_title' => 'Prosím, dajte galérii nadpis !',
    'no_udp_needed' => 'Aktualizácia není potrebná.',
    'alb_updated' => 'Galéria bola pridaná',
    'unknown_album' => 'Vybraná galéria neexistuje alebo nemáte práva pre upload do tejto galérie',
    'no_pic_uploaded' => 'Obrázek nebol uploadovaný!<br /><br />zkontrolujte či server podporuje upload súborov, či ste naozaj zadal(a) obrázok pre upload...',
    'err_mkdir' => '  ERROR: Chyba pri vytváraní adresára (nebol vytvorený) %s !',
    'dest_dir_ro' => 'Do cielového adresára %s nemôže skript zapisovať (zkontrolujte práva) !',
    'err_move' => 'nie je možné presunúť %s do %s !',
    'err_fsize_too_large' => 'Rozmery obrázku, který sa snažíte uploadovat, sú príliš veľké (max. veľkosť je %s x %s) !',
    'err_imgsize_too_large' => 'Veľikosť súboru, který se snažíte uploadovať, je príliš veľká (max. veľkosť je %s KB) !',
    'err_invalid_img' => 'Súbor který ste nahral(a) na server nieje obrázkom !',
    'allowed_img_types' => 'Môžete uploadovať iba obrázky %s .',
    'err_insert_pic' => 'Obrázok \'%s\' nie je možné vložiť do galérie ',
    'upload_success' => 'Váš obrázok bol nahraný na server bez problémov<br /><br />Bude viditeľný po schválení adminom.',
    'notify_admin_email_subject' => '%s - upozornenie na Upload', //cpg1.3.0 
    'notify_admin_email_body' => '%s nahral do galérie obrázok, který vyžaduje vaše potvrdenie. Navštívte prosím %s', //cpg1.3.0
    'info' => 'Informácie',
    'com_added' => 'komentárov pridaných',
    'alb_updated' => 'Galéria aktualizována',
    'err_comment_empty' => 'Váš komentár je prázdny !',
    'err_invalid_fext' => 'Iba súbory s následujúcimi koncovkami sú podporované : <br /><br />%s.',
    'no_flood' => 'Ste autor posledného komentára k tomuto obrázku<br /><br />Pokiaľ ho chcete zmeniť použite voľbu upraviť ',
    'redirect_msg' => 'Práve ste presmerovávaný(a).<br /><br /><br />Kliknite na \'POKRAČOVAT\' pokiaľ sa stránka nepresmeruje sama',
    'upl_success' => 'Váš obrázok bol v poriadku pridaný',
    'email_comment_subject' => 'komentár bol pridaný do Coppermine Photo Gallery', //cpg1.3.0 
    'email_comment_body' => 'Niekto pridal komentár do vašej galérie. Prezrite si ho na', //cpg1.3.0

);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
    'caption' => 'Legenda(popis)',
    'fs_pic' => 'pôvodná veľkosť obrázku',
    'del_success' => 'bezchybne zmazané',
    'ns_pic' => 'normálna veľkosť obrázku',
    'err_del' => 'nie je možné zmazat',
    'thumb_pic' => 'náhľad',
    'comment' => 'komentár',
    'im_in_alb' => 'patrí do galérie',
    'alb_del_success' => 'Galéria \'%s\' zmazaná',
    'alb_mgr' => 'Správca galérií',
    'err_invalid_data' => 'Získané chybné dáta \'%s\'',
    'create_alb' => 'Vytváram galériu \'%s\'',
    'update_alb' => 'Aktualizujem galériu \'%s\' s nadpisom \'%s\' a zoznamom \'%s\'',
    'del_pic' => 'Zmazať obrázok',
    'del_alb' => 'Zmazať galériu',
    'del_user' => 'Zmazať užívateľa',
    'err_unknown_user' => 'Vybraný uľivateľ neexistuje !',
    'comment_deleted' => 'komentár bezchybne zmazaný ! ',
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
    'confirm_del' => 'Ste si istý, že chcete zmazat tento obrázok ? \\nPriložené komentáre budú stratené.',
      'del_pic' => 'ZMAZAŤ TENTO OBRÁZEK',
    'size' => '%s x %s pixelelov',
    'views' => '%s krát',
    'slideshow' => 'Slideshow',
    'stop_slideshow' => 'ZASTAVIŤ SLIDESHOW',
    'view_fs' => 'kliknite pre zobrazenie pôvodného obrázku',
    'edit_pic' => 'Edituj popis', //cpg1.3.0
    'crop_pic' => 'Orež a otoč', //cpg1.3.0

);

$lang_picinfo = array(
    'title' =>'Informácia o obrázku',
    'Filename' => 'Meno súboru',
    'Album name' => 'Meno galérie',
    'Rating' => 'Hodnotenie (%s hlas(ov))',
    'Keywords' => 'Kľúčové slová',
    'File Size' => 'Veľkosť súboru',
    'Dimensions' => 'Rozmery',
    'Displayed' => 'Zobrazené',
    'Camera' => 'Fotoaparát',
    'Date taken' => 'Dátum získania snímku',
    'Aperture' => 'Clona',
    'Exposure time' => 'Expozičný čas',
    'Focal length' => 'Ohnisková vzdialenosť',
    'Comment' => 'komentáre',
    'addFav' => 'Pridať k obľúbeným',
    'addFavPhrase' => 'Obľúbené',
    'remFav' => 'Odstrániť z obľúbených',
    'iptcTitle'=>'IPTC Title', //cpg1.3.0
    'iptcCopyright'=>'IPTC Copyright', //cpg1.3.0
    'iptcKeywords'=>'IPTC Keywords', //cpg1.3.0
    'iptcCategory'=>'IPTC Category', //cpg1.3.0
    'iptcSubCategories'=>'IPTC Sub Categories', //cpg1.3.0
);

$lang_display_comments = array(
    'OK' => 'OK',
    'edit_title' => 'Upraviť tento komentár',
    'confirm_delete' => 'Ste si istý(á), že chcete zmazat tento komentár ?',
    'add_your_comment' => 'Pridať komentár',
    'name'=>'Meno',
    'comment'=>'komentár',
    'your_name' => 'Anonym',
);

$lang_fullsize_popup = array(
        'click_to_close' => 'Kliknutím na obrázok zavriete okno',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
    'title' => 'Poslať pohľadnicu',
    'invalid_email' => '<b>Varovánie</b> : neplatná emailová adresa !',
    'ecard_title' => 'Pohľadnica zo serveru %s pre vás/teba',
    'error_not_image' => 'Iba obrázky môžu byť poslané ako ecard.', //cpg1.3.0
    'view_ecard' => 'Pokiaľ se pohľadnica nezobrazila klikni na link',
    'view_more_pics' => 'Klikni pre daľšie obrázky !',
    'send_success' => 'Vaša pohľadnica bola odeslána',
    'send_failed' => 'Ospravedlňujeme sa, ale server nebol schopný odoslať Vašu pohľadnicu zkúste
     to znovu za chvíľu...',
    'from' => 'Od',
    'your_name' => 'Vaše meno',
    'your_email' => 'Váš email',
    'to' => 'Komu',
    'rcpt_name' => 'Meno príjemcu',
    'rcpt_email' => 'Doručiť na email',
    'greetings' => 'Pozdrav/oslovenie',
    'message' => 'Správa',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
    'pic_info' => 'Info&nbsp;o obrázku',
    'album' => 'Galéria',
    'title' => 'Nadpis',
    'desc' => 'Popis',
    'keywords' => 'Kľúčové slová',
    'pic_info_str' => '%sx%s - %sKB - %s zobrazení - %s hlas(ov)',
    'approve' => 'Schváliť obrázok',
    'postpone_app' => 'Odložiť schválenie',
    'del_pic' => 'Zmazať obrázok',
    'read_exif' => 'Načítať znovu EXIF info', //cpg1.3.0
    'reset_view_count' => 'Vynulovať počítadlo zobrazení',
    'reset_votes' => 'Vynulovať hlasy',
    'del_comm' => 'Zmazať komentáre',
    'upl_approval' => 'Potvrdenie uploadu',
    'edit_pics' => 'Upraviť obrázky',
    'see_next' => 'Zobraziť ďalšie obrázky',
    'see_prev' => 'Zobrazit predcházajúce obrázky',
    'n_pic' => '%s obrázkov',
    'n_of_pic_to_disp' => 'Počet obrázkov k zobrazeniu',
    'apply' => 'Uložiť zmeny',
    'crop_title' => 'Coppermine Editor Obrázkov', //cpg1.3.0 
	 'preview' => 'Preview', //cpg1.3.0
    'save' => 'Save picture', //cpg1.3.0
    'save_thumb' =>'Save as thumbnail', //cpg1.3.0
    'sel_on_img' =>'The selection has to be entirely on the image!', //js-alert //cpg1.3.0

);

// ------------------------------------------------------------------------- //
// File faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //
//TODO
if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Často kladené otázky', //cpg1.3.0
  'toc' => 'Obsah', //cpg1.3.0
  'question' => 'Otázka: ', //cpg1.3.0
  'answer' => 'Odpoveď: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'General FAQ', //cpg1.3.0
  array('Why do I need to register?', 'Registration may or may not be required by the administrator. Registration gives a member additional features such as uploading, having a favorite list, rating pictures and posting comments etc.', 'allow_user_registration', '0'), //cpg1.3.0
  array('How do I register?', 'Go to &quot;Register&quot; and fill out the required fields (and the optional ones if you want to).<br />If the Administrator has Email Activation enabled ,then after submitting your information you should recieve an email message at the address that you have submitted while registering, giving you instructions on how to activate your membership. Your membership must be activated in order for you to login.', 'allow_user_registration', '1'), //cpg1.3.0
  array('How Do I login?', 'Go to &quot;Login&quot;, submit your username and password and check &quot;Remember Me&quot; so you will be logged in on the site if you should leave it.<br /><b>IMPORTANT:Cookies must be enabled and the cookie from this site must not be deleted in order to use &quot;Remember Me&quot;.</b>', 'offline', 0), //cpg1.3.0
  array('Why can I not login?', 'Did you register and click the link that was sent to you via email?. The link will activate your account. For other login problems contact the site administrator.', 'offline', 0), //cpg1.3.0
  array('What if I forgot my password?', 'If this site has a &quot;Forgot password&quot; link then use it. Other
than that contact the site administrator for a new password.', 'offline', 0), //cpg1.3.0
  //array('What if I changed my email address?', 'Just simply login and change your email address through &quot;Profile&quot;', 'offline', 0), //cpg1.3.0
  array('How do I save a picture to &quot;My Favorites&quot;?', 'Click on a picture and click on the &quot;picture info&quot; link (<img src="images/info.gif" width="16" height="16" border="0" alt="Picture information" />); scroll down to the picture information set and click &quot;Add to fav&quot;.<br />The administrator may have the &quot;picture information&quot; on by default.<br />IMPORTANT:Cookies must be enabled and the cookie from this site must not be deleted.', 'offline', 0), //cpg1.3.0
  array('How do I rate a file?', 'Click on a thumbnail and go to the bottom and choose a rating.', 'offline', 0), //cpg1.3.0
  array('How do I post a comment for a picture?', 'Click on a thumbnail and go to the bottom and post a comment.', 'offline', 0), //cpg1.3.0
array('How do I upload a file?', 'Go to &quot;Upload&quot;and select the album that you want to upload to, click
&quot;Browse&quot; and find the file to upload and click &quot;open&quot; (add a title and description if you want to) and click &quot;Submit&quot;', 'allow_private_albums', 0), //cpg1.3.0
  array('Where do I upload a picture to?', 'You will be able to upload a file to one of your albums in &quot;My Gallery&quot;. The Administrator may also allow you to upload a file to one or more of the albums in the Main Gallery.', 'allow_private_albums', 0), //cpg1.3.0
  array('What type and size of a file can I upload?', 'The size and type (jpg, png, etc.) is up to the administrator.', 'offline', 0), //cpg1.3.0
  array('What is &quot;My Gallery&quot;?', '&quot;My Gallery&quot; is a personal gallery that the user can upload to and manage.', 'allow_private_albums', 0), //cpg1.3.0
  array('How do I create, rename or delete an album in &quot;My Gallery&quot;?', 'You should already be in &quot;Admin-Mode&quot;<br />Go to &quot;Create/Order My Albums&quot;and click &quot;New&quot;. Change &quot;New Album&quot; to your desired name.<br />You can also rename any of the albums in your gallery.<br />Click &quot;Apply Modifications&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('How can I modify and restrict users from viewing my albums?', 'You should already be in &quot;Admin Mode&quot;<br />Go to &quot;Modify My Albums. On the &quot;Update Album&quot; bar, select the album that you want to modify.<br />Here, you can change the name, description, thumbnail picture, restrict viewing and comment/rating permissions.<br />Click &quot;Update Album&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('How can I view other users\' galleries?', 'Go to &quot;Album List&quot; and select &quot;User Galleries&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('What are cookies?', 'Cookies are a plain text piece of data that is sent from a website and is put on to your computer.<br />Cookies usually allow a user to leave and return to the site without having to login again and other various chores.', 'offline', 0), //cpg1.3.0
  array('Where can I get this program for my site?', 'Coppermine is a free Multimedia Gallery, released under GNU GPL. It is full of features and has been ported to various platforms. Visit the <a href="http://coppermine.sf.net/">Coppermine Home Page</a> to find out more or download it.', 'offline', 0), //cpg1.3.0

  'Navigating the Site', //cpg1.3.0
  array('What\'s &quot;Album List&quot;?', 'This will show you the entire category you are currently in, with a link to each album. If you are not in a category, it will show you the entire gallery with a link to each category. Thumbnails may be a link to the category.', 'offline', 0), //cpg1.3.0
  array('What\'s &quot;My Gallery&quot;?', 'This feature lets a user create their own gallery and add,delete or modify albums as well as upload to them.', 'allow_private_albums', 0), //cpg1.3.0
  array('What\'s the difference between &quot;Admin Mode&quot; and &quot;User Mode&quot;?', 'This feature, when in admin-mode, allows a user to modify their gallery (as well as others if allowed by the administrator).', 'allow_private_albums', 0), //cpg1.3.0
  array('What\'s &quot;Upload Picture&quot;?', 'This feature allows a user to upload a file (size and type is set by the site administrator) to a gallery selected by either you or the administrator.', 'allow_private_albums', 0), //cpg1.3.0
  array('What\'s &quot;Last Uploads&quot;?', 'This feature shows the last uploads to the site.', 'offline', 0), //cpg1.3.0
  array('What\'s &quot;Last Comments&quot;?', 'This feature shows the last comments along with the files posted by users.', 'offline', 0), //cpg1.3.0
  array('What\'s &quot;Most Viewed&quot;?', 'This feature shows the most viewed files by all users (whether logged in or not).', 'offline', 0), //cpg1.3.0
  array('What\'s &quot;Top Rated&quot;?', 'This feature shows the top rated files rated by the users, showing the average rating (e.g: five users each gave a <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: the file would have an average rating of <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;Five users rated the file from 1 to 5 (1,2,3,4,5) would result in an average <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />The ratings go from <img src="images/rating5.gif" width="65"
height="14" border="0" alt="best" /> (best) to <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (worst).', 'offline', 0), //cpg1.3.0
  array('What\'s &quot;My Favorites&quot;?', 'This feature will let a user store a favorite file in the cookie that was sent to your computer.', 'offline', 0), //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //
//FOTO
if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Pripomenutie hesla', //cpg1.3.0
  'err_already_logged_in' => 'Už ste prihlásený(á)!', //cpg1.3.0
  'enter_username_email' => 'Zadajte vaše prihlasovacie meno a email adresu', //cpg1.3.0
  'submit' => 'Proveď', //cpg1.3.0
  'failed_sending_email' => 'Email s pripomenutím hesla nemohol byť odoslaný!', //cpg1.3.0
  'email_sent' => 'Na adresu 5s bol odoslaný mail z vašim uživateľským menom a heslom', //cpg1.3.0
  'err_unk_user' => 'Zadaný užívateľ neexistuje!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - Pripomenutie hesla', //cpg1.3.0
  'passwd_reminder_body' => 'Požiadali ste o pripomenutia vašich prihlasovacích údajov:
Uľivatelské jméno: %s
Heslo:             %s
Kliknite na %s pre prihlásenie.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
    'group_name' => 'Meno skupiny',
    'disk_quota' => 'Disková kvóta',
    'can_rate' => 'Môžu hodnotiť obrázky',
    'can_send_ecards' => 'môžu posielať pohľadnice',
    'can_post_com' => 'Môžu posielať komentáre',
    'can_upload' => 'Môžu nahrávať obrázky',
    'can_have_gallery' => 'Môžu mať osobnú galériu',
    'apply' => 'Uložiť zmeny',
    'create_new_group' => 'Vytvoriť novú skupinu',
    'del_groups' => 'Zmazať vybrané skupiny',
    'confirm_del' => 'Pokiaľ zmažete túto skupinu všetci užívatelia, patriaci do tejto skupiny budú presunutí do skupiny \'Registered\' !\n\nPrajete si pokračovať ?',
    'title' => 'Spravovať užívateľské skupiny',
    'approval_1' => 'Potvrdenie verejného. Upl. (1)',
    'approval_2' => 'Potvrdenie súkromného. Upl. (2)',
    'upload_form_config' => 'Konfigurácia formulára pre upload', //cpg1.3.0 
    'upload_form_config_values' => array( 'Iba jednotlivé súbory', 'Iba mnoho súborov', 'Iba URI uploads', 'Iba ZIP upload', 'Súbory-URI', 'Súbory-ZIP', 'URI-ZIP', 'Súbory-URI-ZIP'), //cpg1.3.0  //TODO
    'custom_user_upload'=>'Uľivateľ môže upraviť počet vstupních políčok pre upload?', //cpg1.3.0
    'num_file_upload'=>'Maximálny/presný počet políčok pre upload súborov', //cpg1.3.0
    'num_URI_upload'=>'Maximálny/presný počet políčok pre upload URI', //cpg1.3.0

    'note1' => '<b>(1)</b> Upload do verejných galerií vyžaduje potvrdenie adminom',
    'note2' => '<b>(2)</b> Upload do galérie patriacej užívateľom vyžaduje potvrdenie adminom',
    'notes' => 'Poznámky'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
    'welcome' => 'Vitajte !'
);

$lang_album_admin_menu = array(
    'confirm_delete' => 'Ste si isý(á), že chcete zmazať túto galériu? \\nVšetky obrázky a komentáre pôjdu do pekla tiež. Prajete si pokračovať.',
    'delete' => 'ZMAZAŤ',
    'modify' => 'VLASTNOSTI',
    'edit_pics' => 'UPRAVIŤ OBR.',
);

$lang_list_categories = array(
    'home' => 'Domov',
    'stat1' => '<b>[pictures]</b> obrázkov v <b>[albums]</b> galériach v <b>[cat]</b> kategóriách s <b>[comments]</b> komentármi zobrazené <b>[views]</b> krát',
    'stat2' => '<b>[pictures]</b> obrázkov v <b>[albums]</b> galériach zobrazené <b>[views]</b> krát',
    'xx_s_gallery' => '%s\' galerií',
    'stat3' => '<b>[pictures]</b> obrázkov v <b>[albums]</b> galériach s <b>[comments]</b> komentármi zobrazené <b>[views]</b> krát'
);

$lang_list_users = array(
    'user_list' => 'Zoznam užívateľov',
    'no_user_gal' => 'Nie sú žiadne užívateľské galérie',
    'n_albums' => '%s galérií',
    'n_pics' => '%s obrázkov'
);

$lang_list_albums = array(
    'n_pictures' => '%s obrázkov',
    'last_added' => ', posledný pridaný %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
    'login' => 'Prihlásenie',
    'enter_login_pswd' => 'Zadajte Vaše meno a heslo pre prihlásenie',
    'username' => 'Meno',
    'password' => 'Heslo',
    'remember_me' => 'Pamätaj si ma',
    'welcome' => 'Vitaj u nás %s ...',
    'err_login' => '*** Chyba pri prihlásení skúste to znova ***',
    'err_already_logged_in' => 'Už ste prihlásený !',
    'forgot_password_link' => 'Zabudol som svoje heslo.', //cpg1.3.0

);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
    'logout' => 'Odhlásiť',
    'bye' => 'Tak si to uži zase inde %s ...',
    'err_not_loged_in' => 'Nie ste prihlásený !',
);


// ------------------------------------------------------------------------- //
// File phpinfo.php //cpg1.3.0
// ------------------------------------------------------------------------- //
//TODO

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP info', //cpg1.3.0
  'explanation' => 'This is the output generated by the PHP-function <a href="http://www.php.net/phpinfo">phpinfo()</a>, displayed within Copermine (trimming the output at the right corner).', //cpg1.3.0
  'no_link' => 'Having others see your phpinfo can be a security risk, that\'s why this page is only visible when you\'re logged in as admin. You can not post a link to this page for others, they will be denied access.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
    'upd_alb_n' => 'Aktualizovať album %s',
    'general_settings' => 'Základníé nastavenie',
    'alb_title' => 'Nadpis galérie',
    'alb_cat' => 'Kategórie galérie',
    'alb_desc' => 'Popis galérie',
    'alb_thumb' => 'Náhľad reprezentující album',
    'alb_perm' => 'Prístupové práva pre túto galériu',
    'can_view' => 'Album môžu prehliadať',
    'can_upload' => 'Návštevníci môžu pridávať obrázky',
    'can_post_comments' => 'Povoliť komentáre',
    'can_rate' => 'Návštevníci môžu hlasovať',
    'user_gal' => 'User Gallery',
    'no_cat' => '* Nieje kategória *',
    'alb_empty' => 'Galéria je prázdná',
    'last_uploaded' => 'Nejnovší obrázok',
    'public_alb' => 'ktokoľvek (verejná galéria)',
    'me_only' => 'Iba ja',
    'owner_only' => 'Iba vlastník (%s)',
    'groupp_only' => 'Členovia skupiny \'%s\'',
    'err_no_alb_to_modify' => 'Album nie je možné modifikovat v databáze.',
    'update' => 'Aktualizovať album',
    'notice1' => '(*) depending on %sgroups%s settings', //cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
    'already_rated' => 'Tento obázok ste už hodnotil(a)',
    'rate_ok' => 'Vás hlas bol prijatý. Ďakujeme.',
    'forbidden' => 'You can not rate your own files.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Administrátori serveru {SITE_NAME}, alebo tejto galérie si vyhradzujú právo zásahu do obsahu galérie napr. komentáre, mazánie obrázkov prípadne úprava (pokiaľ porušujú pravidlá galérie alebo dobré mravy).
Pokiaľ budú obrázky nahrané užívateľom porušovať zákon(y) budú ihneď po zistení ich umiestnení na serveri zmazané. Administrátori/správcovia tejto galérie sa dištancujú od
prípadného závadného obsahu nahraného na server užívateľmi. Vlastníkom dát v galérii sú ich autori. Administrátori predpokladajú, že na server sú umiestňované užívateľmi obrázky ku ktorým vlastní uživateľ autorské práva.
<br />
Súhlasíte, že nebudete posielať akýkoľvek závadný materiál ako vulgárny a obscénne obrázky/komentáre, akýkoľvek materiál vzbudzujúci nenávisť, rasismus, alebo iný materiál porušujúcí zákony. Súhlasíte, že administrátori, správcovia a moderátori  {SITE_NAME}   majú právo zmazať prípadne upraviť akýkoľvek materiál kedykoľvek to uznajú za vhodné. Vložené informácie budú uložené na serveri a v databázi a nebudú poskytnuté žiadnej tretej strane bez vášho súhlasu. Administátori/správcovia serveru  však nebudú ručiť za dáta na serveru uložená pokiaľ dôjde k akémukoľvek útoku na sever.
<br />
<br />
Tieto stránky využívajú k uloženiu uživateľských dát cookies. Cookies slúžia iba pre zvýšenie konfortu pri používaní tejto aplikáce. Emailová adresa slúži len pre potvrdenie vašich údajov a posielanie hesla.<br />
<br />
Kliknutím na 'Súhlasím' súhlasíte z vyššie uvedenými pravidlami..
EOT;

$lang_register_php = array(
    'page_title' => 'Registrácia nového užívateľa',
    'term_cond' => 'Podmienky a pravidlá',
    'i_agree' => 'Súhlasím',
    'submit' => 'Poslať registráciu',
    'err_user_exists' => 'Zadané užívateľské meno už existuje vyberte si prosím iné',
    'err_password_mismatch' => 'Heslá sa musia zhodovať pokúste sa ich zadať znova',
    'err_uname_short' => 'Minimálna dĺžka uživateľskeho mena je 2 znaky',
    'err_password_short' => 'Heslo musí byť aspoň 2 znaky dlhé',
    'err_uname_pass_diff' => 'Meno a heslo se nesmie zhodovať',
    'err_invalid_email' => 'Bola zadaná neplatná emailová adresa',
    'err_duplicate_email' => 'Iný užívateľ sa zaregistroval zo zadaným emailem. Email musí byť jedinečný',
    'enter_info' => 'Zadané registračné informácie',
    'required_info' => 'Vyžadované informácie',
    'optional_info' => 'Voliteľné informácie',
    'username' => 'Meno',
    'password' => 'Heslo',
    'password_again' => 'Heslo (potvrdenie)',
    'email' => 'Email',
    'location' => 'Miesto (napr. Košice apod.)',
    'interests' => 'Záujmy',
    'website' => 'Domáca stránka',
    'occupation' => 'Povolanie',
    'error' => 'CHYBA',
    'confirm_email_subject' => '%s - Potvrdenie registrácie',
    'information' => 'Informácie',
    'failed_sending_email' => 'nie je možné odoslat potvrdenie registrácie !',
    'thank_you' => 'Ďakujeme za registráciu.<br /><br />Na adresu zadanú pri registrácii Vám budú doručené informácie o aktiváci vášho účtu',
    'acct_created' => 'Váš uľivatelský účet bol bezchybne vytvorený. Teraz sa prihláste pomocou vášho mena a hesla',
    'acct_active' => 'Váš účet je odteraz aktívny prihlaste sa pomocou vášho mena a hesla.',
    'acct_already_act' => 'Váš účet je už aktivny !',
    'acct_act_failed' => 'Tento účet nemôže byť aktivovaný !',
    'err_unk_user' => 'Vybraný užívateľ neexistuje !',
    'x_s_profile' => '%s\' profil',
    'group' => 'Skupina',
    'reg_date' => 'Pripojený',
    'disk_usage' => 'Využitie disku',
    'change_pass' => 'Zmeniť heslo',
    'current_pass' => 'Súčasné heslo',
    'new_pass' => 'Nové heslo',
    'new_pass_again' => 'Nové heslo (kontrola)',
    'err_curr_pass' => 'Súčasné heslo zadáné nesprávne',
    'apply_modif' => 'potvrdiť zmeny',
    'change_pass' => 'Zmeniť heslo',
    'update_success' => 'Váš profil bol aktualizovaný',
    'pass_chg_success' => 'Vaše heslo bolo zmenené',
    'pass_chg_error' => 'Vaše heslo nebolo zmenené',
    'notify_admin_email_subject' => '%s - upozornení na registráciu', //cpg1.3.0 
    'notify_admin_email_body' => 'Nový užívateľ s ménom "%s" sa registroval vo vašej galérii', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
Ďakujeme za registráciu na {SITE_NAME}

Vaše méno je : "{USER_NAME}"
Vaše heslo je: "{PASSWORD}"

Pre aktiváciu vášho účtu je treba kliknúť na odkaz nižšie alebo ho zkopírovať
do adresného riadku vášho browseru a prejsť na túto stránku


{ACT_LINK}

S pozdravom,

Správa serveru {SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
    'title' => 'Kontrola komentárov',
    'no_comment' => 'Nie sú žiadne komentáre na kontrolu',
    'n_comm_del' => '%s komentár(ov) zmazaný(ch)',
    'n_comm_disp' => 'Počet komentárov k zobrazeniu',
    'see_prev' => 'Predchádzajúci',
    'see_next' => 'Ďaľší',
    'del_comm' => 'Zmazať vybrané komentáre',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
    0 => 'Prehledávať obrázky',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
    'page_title' => 'Nájsť nové obrázky',
    'select_dir' => 'Vybrať adresár',
    'select_dir_msg' => 'Táto funkcia vám umožní dávkovo zpracovať obrázky nahrané cez FTP.<br /><br />Vyberte adresár kde se nachádzajú obrázky k spracovániu',
    'no_pic_to_add' => 'Nie sú tu žiadne obrázky k pridaniu',
    'need_one_album' => 'Potrebujete mať vytvorené aspoň jednu galériu',
    'warning' => 'Varovanie',
    'change_perm' => 'Skript nemôže zapisovať do tohto adresára, musíte ho nastaviť na CHMOD 755 alebo 777 pred pridáním obrázkov !',
    'target_album' => '<b>Vložiť obrázky z &quot;</b>%s<b>&quot; do </b>%s',
    'folder' => 'Zložka',
    'image' => 'Obrázek',
    'album' => 'Galéria',
    'result' => 'Výsledok',
    'dir_ro' => 'Nezapisovatelná. ',
    'dir_cant_read' => 'Nečitateľná. ',
    'insert' => 'Pridávam nové obrázky do galérie',
    'list_new_pic' => 'Zoznam obrázkov',
    'insert_selected' => 'Vložiť vybrané obrázky',
    'no_pic_found' => 'Žiadne nové obrázky',
    'be_patient' => 'Prosím buďte trpezlivý(á), program potrebuje na zpracovanie obrázkov nejaký ten čas.',
    'notes' =>  '<ul>'.
                '<li><b>OK</b> : Tieto obrázky boli pridané'.
                '<li><b>DP</b> : Zdvojenie!, Tento obrázek už existuje'.
                '<li><b>PB</b> : tento obrázok nie je možné pridať, skontrolujte konfiguráciu prípadne prístupové práva'.
                '<li>Keď sa neukáže \'označenie\' OK, DP, PB klepnite na obrázok a uvidíte chybovú hlášku generovanú PHP, ktorá Vám pomôže zistiť príčinu problému'.
                '<li>Pokiaľ dôjde k timeoutu F5 alebo reload stránky by mal pomôcť'.
                '</ul>',
     'select_album' => 'Vyberte galériu', //cpg1.3.0 
     'check_all' => 'Vybrať všetko', //cpg1.3.0
     'uncheck_all' => 'Odznačiť všetko', //cpg1.3.0
                
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
                'title' => 'Vykopnutie uživateľa',
                'user_name' => 'Uživateľské meno',
                'ip_address' => 'IP Adresa',
                'expiry' => 'Vyprší za (nevyplňovať pre stále vykopnutie)',
                'edit_ban' => 'Uložiť zmeny',
                'delete_ban' => 'Zmazať',
                'add_new' => 'Pridať ďalšie vykopnutie',
                'add_ban' => 'Pridať',
                'error_user' => 'Nemôžem nájsť užívateľa', //cpg1.3.0 
                'error_specify' => 'Je potrebné zadať buď uživateľské meno alebo IP adresu', //cpg1.3.0
                'error_ban_id' => 'Chybné ID pre zákaz!', //cpg1.3.0
                'error_admin_ban' => 'Nemôžete zakázať sám seba!', //cpg1.3.0
                'error_server_ban' => 'Snažíte sa zakázať vlastný server? To nie je možné urobiť.', //cpg1.3.0
                'error_ip_forbidden' => 'Nie je možné zakázať toto IP - nie je dosiahnuteľné!', //cpg1.3.0
                'lookup_ip' => 'Nájsť IP adresu', //cpg1.3.0
                'submit' => 'Odoslať', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(  
    'title' => 'Upload obrázkov', 
    'custom_title' => 'Upravený Formulár', //cpg1.3.0
    'cust_instr_1' => 'Môžete zvoliť požadovaný počet vstupních políčok. Nie je ale možné prekročiť omedzenie počtu políčok uvedený nížšie.', //cpg1.3.0
    'cust_instr_2' => 'Box Number Requests', //cpg1.3.0
    'cust_instr_3' => 'Políčka pre upload súborov: %s', //cpg1.3.0
    'cust_instr_4' => 'Políčka pre URI/URL upload: %s', //cpg1.3.0
    'cust_instr_5' => 'Políčka pre URI/URL upload:', //cpg1.3.0
    'cust_instr_6' => 'Políčka pre upload súborov:', //cpg1.3.0
    'cust_instr_7' => 'Prosím zadajte požadovaný počet ku každému typu vstupných políčok pre upload. Potom stlačte \'Pokračovať\'. ', //cpg1.3.0
    'reg_instr_1' => 'Neplatná akcia pre vytváranie formulára.', //cpg1.3.0  
    'reg_instr_2' => 'Pomocou políčok dole môžete nechat na server nahrať súbory. Veľkosť jednotlivých nahrávaných súborov pri uploade na server by nemala presiahnuť %s KB. Súbory ZIP nahrané pomocí sekcí \'Upload Súborov\' alebo \'URI/URL Upload\' zostanú zkomprimované ako jeden súbor aj po nahraní na server.', //cpg1.3.0
    'reg_instr_3' => 'Pokiaľ chcete, aby súbory zabalené v archivu ZIP boly rozbalené, musíte použiť pre zadanie súboru políčko v sekci \'Decompressive ZIP Upload\'.', //cpg1.3.0
    'reg_instr_4' => 'Pokiaľ používáte sekciu URI/URL upload, prosím zadávejte cestu k súboru takto: http://www.mojadomena.sk/obrazky/priklad1.jpg', //cpg1.3.0
    'reg_instr_5' => 'Po vyplnení formulára stlačte tlačítko \'Pokračovať\'.', //cpg1.3.0
    'reg_instr_6' => 'Upload ZIP Archivu:', //cpg1.3.0
    'reg_instr_7' => 'Upload Súborov:', //cpg1.3.0
    'reg_instr_8' => 'URI/URL Uploads:', //cpg1.3.0
    'error_report' => 'Error Report', //cpg1.3.0
    'error_instr' => 'The following uploads encountered errors:', //cpg1.3.0
    'file_name_url' => 'File Name/URL', //cpg1.3.0
    'error_message' => 'Error Message', //cpg1.3.0
    'no_post' => 'File not uploaded by POST.', //cpg1.3.0
    'forb_ext' => 'Forbidden file extension.', //cpg1.3.0
    'exc_php_ini' => 'Prekročena veľkosť súboru povolená v php.ini.', //cpg1.3.0
    'exc_file_size' => 'Prekročená veľkosť súboru povolená galériou.', //cpg1.3.0
    'partial_upload' => 'Iba čiastočný upload.', //cpg1.3.0
    'no_upload' => 'Neprobehol žiadny upload súborov.', //cpg1.3.0
    'unknown_code' => 'Neznáma chyba PHP pri uploade.', //cpg1.3.0
    'no_temp_name' => 'žiadny upload - žiadne dočasné meno.', //cpg1.3.0
    'no_file_size' => 'Neobsahuje žiadne dáta/rozbité', //cpg1.3.0
    'impossible' => 'Nebolo možné presunúť.', //cpg1.3.0
    'not_image' => 'Niejw obrázkom', //cpg1.3.0
    'not_GD' => 'Chýba rozšírenie GD.', //cpg1.3.0
    'pixel_allowance' => 'Pixel allowance exceeded.', //cpg1.3.0 //TODO
    'incorrect_prefix' => 'Neplatný URI/URL prefix', //cpg1.3.0
    'could_not_open_URI' => 'Nebolo možné otvoriť URI.', //cpg1.3.0
    'unsafe_URI' => 'Safety not verifiable.', //cpg1.3.0  //TODO
    'meta_data_failure' => 'Chyba v meta dátach', //cpg1.3.0
    'http_401' => '401 Neautorizovaný prístup', //cpg1.3.0
    'http_402' => '402 Požadována platba', //cpg1.3.0
    'http_403' => '403 Zakázaný prístup', //cpg1.3.0
    'http_404' => '404 Nebolo nájdené', //cpg1.3.0
    'http_500' => '500 Interná chyba serveru', //cpg1.3.0
    'http_503' => '503 Služba nieje dostupná', //cpg1.3.0
    'MIME_extraction_failure' => 'MIME nebolo rozpoznané.', //cpg1.3.0
    'MIME_type_unknown' => 'Neznámy MIME typ', //cpg1.3.0
    'cant_create_write' => 'Nebolo možné vytvoriť súbor pre zápis.', //cpg1.3.0
    'not_writable' => 'Nebolo možné zapisovať do súboru pre zápis.', //cpg1.3.0
    'cant_read_URI' => 'Nebolo možné prečítať URI/URL', //cpg1.3.0
    'cant_open_write_file' => 'Nebolo možné otvoriť súbor pre URI.', //cpg1.3.0
    'cant_write_write_file' => 'Nebolo možné zapisovať do súboru pre URI.', //cpg1.3.0
    'cant_unzip' => 'Nebolo možné rozbaliť ZIP archiv.', //cpg1.3.0
    'unknown' => 'Neznámá chyba', //cpg1.3.0
    'succ' => 'Úspešný Upload', //cpg1.3.0
    'success' => '%s súborov bolo úspešne nahraných.', //cpg1.3.0
    'add' => 'Prosím stlačte \'Pokračovat\' pre pridanie súborov do galérie.', //cpg1.3.0
    'failure' => 'Chyba pri Uploade', //cpg1.3.0
    'f_info' => 'Informácie o súbore', //cpg1.3.0
    'no_place' => 'Predchádzajúci súbor nie je možné umiestniť.', //cpg1.3.0
    'yes_place' => 'Predchádzajúci súbor bol úspešne umiestnený.', //cpg1.3.0
    'max_fsize' => 'Max. veľkosť súboru je %s KB',
    'album' => 'Galéria',
    'picture' => 'Obrázok',
    'pic_title' => 'Nadpis obrázku',
    'description' => 'Popis obrázku',
    'keywords' => 'Kľúčové slová (oddelené medzerou)',
    'err_no_alb_uploadables' => 'Tu sa nachádza galéria, do ktorej je povolený upload.', 
    'place_instr_1' => 'Prosím umiestnite teraz súbory do galerií. Môžete tiež zadať informácie týkajúce sa jednotlivých súborov.', //cpg1.3.0
    'place_instr_2' => 'Ďaľšie súbory je potreba umiestniť. Prosím stlačte \'Pokračovať\'.', //cpg1.3.0
    'process_complete' => 'Uspešne ste umiestnil všetky súbory.', //cpg1.3.0

);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
    'title' => 'Spravovat uľivatele',
    'name_a' => 'Meno vzostup.',
    'name_d' => 'Meno zostup.',
    'group_a' => 'Skupina vzostup.',
    'group_d' => 'Skupina zostup.',
    'reg_a' => 'Datum registrace vzostup.',
    'reg_d' => 'Datum registrace zostup.',
    'pic_a' => 'Počet obrázkov vzostup.',
    'pic_d' => 'Počet obrázkov zostup.',
    'disku_a' => 'Vyuľití disku vzostup.',
    'disku_d' => 'Vyuľití disku zostup.',
    'lv_a' => 'Last visit ascending', //cpg1.3.0
    'lv_d' => 'Last visit descending', //cpg1.3.0
    'sort_by' => 'Riadiť užívateľa podľa',
    'err_no_users' => 'Tabulka uživateľov je prázdna!',
    'err_edit_self' => 'Tu nie je možné editovať vlastný profil použite príslušnú voľbu pracujúcu s vašim profilom',
    'edit' => 'UPRAVIŤ',
    'delete' => 'ZMAZAŤ',
    'name' => 'Uživ. meno',
    'group' => 'Skupina Uživ.',
    'inactive' => 'Neaktivny',
    'operations' => 'Operácia',
    'pictures' => 'Obrázky',
    'disk_space' => 'Miesto využité / kvóta',
    'registered_on' => 'Registrovaný',
    'last_visit' => 'Posledná návšteva', //cpg1.3.0
    'u_user_on_p_pages' => '%d uživateľov na %d stránkách',
    'confirm_del' => 'Ste si istý(á), že chcete zmazat tohto užívateľa ? \\nVšetky jeho obrázky, galéria a komentáre budou zmazané.',
    'mail' => 'MAIL',
    'err_unknown_user' => 'Vybraný uživ. neexistuje !',
    'modify_user' => 'Zmeniť uživ.',
    'notes' => 'Poznámky',
    'note_list' => '<li>Pokiaľ nechcete zmeniť heslo ponechajte políčko pre heslo prázdne',
    'password' => 'Heslo',
    'user_active' => 'Uživ. je aktívny',
    'user_group' => 'Uživ. Skupina',
    'user_email' => 'Uživ. emaill',
    'user_web_site' => 'Uživ. domácí stránka',
    'create_new_user' => 'Vytvoriť nového užívateľa.',
    'user_location' => 'Miesto Uživ. (napr. Bratislava apod.)',
    'user_interests' => 'Uživ. záujmy',
    'user_occupation' => 'Uživ. povolanie',
    'latest_upload' => 'Recent uploads', //cpg1.3.0
    'never' => 'nikdy', //cpg1.3.0

);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
        'title' => 'Zmeniť veľkosť obrázku',
        'what_it_does' => 'Čo to robí?',
        'what_update_titles' => 'Aktualizovať nadpisy podľa mena súborov',
        'what_delete_title' => 'Zmazať nadpisy',
        'what_rebuild' => 'Prerobiť náhľady a zmenšené obrázky',
        'what_delete_originals' => 'Zmazať originály a nahradit ich stredními obrázkami',
        'file' => 'Súbor',
        'title_set_to' => 'Nastaviť nadpis na',
        'submit_form' => 'odoslať',
        'updated_succesfully' => 'Aktualizácia prebehla OK',
        'error_create' => 'CHYBA pri vytváraní',
        'continue' => 'Zpracovať viac obrázkov',
        'main_success' => 'Súbor %s bol uspešne použiť ako hlavný obrázok',
        'error_rename' => 'Chyba premenovánia %s na %s',
        'error_not_found' => 'Súbor %s nebol nájdený',
        'back' => 'zpäť na hlavnú',
        'thumbs_wait' => 'Aktualizujem náhľady a/alebo stredné obrázky, prosím čakajte...',
        'thumbs_continue_wait' => 'Pokračujem v aktualizácii náhľadov a/alebo stredných obrázkov...',
        'titles_wait' => 'Aktualizujem nadpisy, prosím čakajte...',
        'delete_wait' => 'Mažem nadpisy, prosím čakejte...',
        'replace_wait' => 'Mažem origináli a nahradzujem ich strednými obrázkami, prosím čakajte...',
        'instruction' => 'Rýchle inštrukcie',
        'instruction_action' => 'Vyberte akci',
        'instruction_parameter' => 'Nastaviť parametre',
        'instruction_album' => 'Vybrať galériu',
        'instruction_press' => 'Stisknite %s',
        'update' => 'Aktualizovať náhľady a/alebo stredné obrázky',
        'update_what' => 'Čo má byť aktualizované',
        'update_thumb' => 'Len náhľady',
        'update_pic' => 'Iba stredné obrázky',
        'update_both' => 'Oboje náhľady aj stredné obrázky',
        'update_number' => 'Počet obrázkov, ktoré zpracovať na 1 kliknutie',
        'update_option' => '(Znížte číslo pokiaľ máte problémy s timeoutom)',
        'filename_title' => 'Meno súboru ? Nadpis obrázku',
        'filename_how' => 'Ako sa má zmeniť meno obrázku?',
        'filename_remove' => 'Odstranit .jpg koncovku a prepísať _ (podtržítka medzerami)',
        'filename_euro' => 'Zmeniť 2003_11_23_13_20_20.jpg na 23/11/2003 13:20',
        'filename_us' => 'Zmeniť 2003_11_23_13_20_20.jpg na 11/23/2003 13:20',
        'filename_time' => 'Zmeniť 2003_11_23_13_20_20.jpg na 13:20',
        'delete' => 'Zmazať nadpisy obrázkov alebo originálne obrázky',
        'delete_title' => 'Zmazať nadpisy obrázkov',
        'delete_original' => 'Zmazať originálne obrázky',
        'delete_replace' => 'Zmazať originály a nahradit ich strednou verziou obrázkov',
        'select_album' => 'Vybrať galériu',
        'delete_orphans' => 'Zmazať osamelé komentáre (platí pre všetky galérie)', //cpg1.3.0 
        'orphan_comment' => 'Nájdené osamelé komentáre', //cpg1.3.0
        'delete' => 'Zmazať', //cpg1.3.0 
        'delete_all' => 'Zmazať všetko', //cpg1.3.0
        'comment' => 'komentár: ', //cpg1.3.0
        'nonexist' => 'priradené k neexistujúcemu súboru # ', //cpg1.3.0
        'phpinfo' => 'Zobraziť phpinfo', //cpg1.3.0
        'update_db' => 'Update databázy', //cpg1.3.0
        'update_db_explanation' => 'Pokiaľ ste vymenili súbory aplikáce galéria coppermine, pridali modifikáciu alebo upgradovali zo staršej verzie, uistite sa, že ste spustili update databázy. To vytvorí potrebné tabuľky a/alebo konfiguračné hodnoty vo vašej databáze.', //cpg1.3.0
);
?>
