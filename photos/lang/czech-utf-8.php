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
//  (at your option) any later version.                                      //
// ------------------------------------------------------------------------- //
// Tanslation updated by Michal Ambroz <rebus@seznam.cz>                     //
// ------------------------------------------------------------------------- //
// CVS version: $Id: czech-utf-8.php,v 1.8 2004/07/24 15:04:01 gaugau Exp $
// ------------------------------------------------------------------------- //


// info about translators and translated language
$lang_translation_info = array(
'lang_name_english' => 'Czech',  
'lang_name_native' => '&#x10C;esky', 
'lang_country_code' => 'cz', 
'trans_name'=> 'Michal Soukup aka migon', //the name of the translator - can be a nickname
'trans_email' => 'migon@boule.cz', //translator's email address (optional)
'trans_website' => 'http://www.boule.cz/', //translator's website (optional)
'trans_date' => '2003-10-02', //the date the translation was created / last modified
);


$lang_charset = 'UTF-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytů', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Ne', 'Po', 'Út', 'St', 'Čt', 'Pá', 'So');
$lang_month = array('Leden', 'Únor', 'Březen', 'Duben', 'Květen', 'Červen', 'Červenec', 'Srpen', 'Září', 'Říjen', 'Listopad', 'Prosinec');

// Some common strings
$lang_yes = 'Ano';
$lang_no  = 'Ne';
$lang_back = 'ZPĚT';
$lang_continue = 'POKRAČOVAT';
$lang_info = 'Informace';
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
$lang_bad_words = array('píča', 'hovno', '*fuck*', 'prdel', 'čůrák', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
        'random' => 'Náhodné obrázky',
        'lastup' => 'Nejnovější',
        'lastalb'=> 'Naposledy aktualizované galerie',
        'lastcom' => 'Nejnovější komentáře',
        'topn' => 'Nejprohlíženější',
        'toprated' => 'Nejlépe hodnocené',
        'lasthits' => 'Naposledy zobrazené',
        'search' => 'Výsledky hledání',
        'favpics'=> 'Oblíbené obrázky',
);

$lang_errors = array(
    'access_denied' => 'Nemáte oprávnění na tuto stránku',
    'perm_denied' => 'Nemáte dostatečná práva pro potvrzení této operace.',
    'param_missing' => 'Skriptu nebyly předány potřebné parametry',
    'non_exist_ap' => 'Vybraná galerie/obrázek neexistuje',
    'quota_exceeded' => 'Vyčerpal(a) jste místo na disku.<br /><br />Vaše kvóta je[quota]K, Vaše obrázky zbírají [space]K, přidáním tohoto obrázku byste svoji kvótu překročil',
    'gd_file_type_err' => 'Pokud používáte GD knihovnu jsou podporovány jen obrázky JPG a PNG',
    'invalid_image' => 'Tento obrázek je poškozen/porušen GD knihovna s ním nemůže pracovat.',
    'resize_failed' => 'Nelze vytvořit náhled či zmenšený obrázek',
    'no_img_to_display' => 'Zde není žádný obrázek, který byste si mohl(a) prohlédnout',
    'non_exist_cat' => 'Vybraná kategorie neexistuje',
    'orphan_cat' => 'Podkategorie nemá nadřízenou kategorii. Problém opravte přes nastavení kategorií.',
    'directory_ro' => 'Do adresáře \'%s\' nelze zapisovat (nedostatečná práva), obrázky nemohly být smazány.',
    'non_exist_comment' => 'Vybraný komentář neexistuje',
    'pic_in_invalid_album' => 'Obrázek(y) je/jsou v neexitující galerii (%s)!?',
    'banned' => 'Byl jse vykopnut z těchto stránek, není Vám umožněno je používat.',
    'not_with_udb' => 'Tato funkce je vypnutá jelikož je integrována ve fóru. Buď není požadovaná fukce dostupná na tomto systému, nebo tuto/tyto funci/e plní fórum.',
    'offline_title' => 'Odpojeno', //cpg1.3.0
    'offline_text' => 'Galerie je momentálně odpojena - prosím zkuste to znovu později', //cpg1.3.0
    'ecards_empty' => 'Momentálně nejsou k zobraní dostupné žádné záznamy o ecards. Ověřte prosím, že je zapnutá volba "ecard logging" v konfiguraci coppermine!', //cpg1.3.0
    'action_failed' => 'Akce selhala.  Coppermine není schopno váš požadavek zpracovat.', //cpg1.3.0
    'no_zip' => 'Knihovny potřebné pro zpracování ZIP souborů nejsou dostupné.  Prosím kontaktujte Vašeho administrátora aplikace Coppermine.', //cpg1.3.0
    'zip_type' => 'Nemáte povolení nahrávat na server soubory ZIP.', //cpg1.3.0
);

$lang_bbcode_help = 'Následující značky mohou být užitečné: <li>[b]<b>Tučné</b>[/b]</li> <li>[i]<i>Kurzíva</i>[/i]</li> <li>[url=http://vasedomena.cz/]Text odkazu[/url]</li> <li>[email]uzivatel@domena.cz[/email]</li>'; //cpg1.3.0


// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
    'alb_list_title' => 'Přejít na seznam galerií',
    'alb_list_lnk' => 'Seznam galerií',
    'my_gal_title' => 'Přejít do mé osobní galerie',
    'my_gal_lnk' => 'Moje galerie',
    'my_prof_lnk' => 'Můj Profil',
    'adm_mode_title' => 'Do Admin módu',
    'adm_mode_lnk' => 'Admin mód',
    'usr_mode_title' => 'Do Uživatelského módu',
    'usr_mode_lnk' => 'Uživatelský mód',
    'upload_pic_title' => 'Nahrát obrázek do gallerie',
    'upload_pic_lnk' => 'Upload obrázku',
    'register_title' => 'Vytvořit účet',
    'register_lnk' => 'Registrovat se',
    'login_lnk' => 'Přihlásit',
    'logout_lnk' => 'Odhlásit',
    'lastup_lnk' => 'Nejnovější obrázky',
    'lastcom_lnk' => 'Poslední komentáře',
    'topn_lnk' => 'Nejprohlíženější',
    'toprated_lnk' => 'Nejlépe hodnocené',
    'search_lnk' => 'Vyhledávání',
    'fav_lnk' => 'Oblíbené',
    'memberlist_title' => 'Ukaž seznam členů', //cpg1.3.0
    'memberlist_lnk' => 'Seznam členů', //cpg1.3.0
    'faq_title' => 'FAQ = nejčastěji kladené otázky na galerii &quot;Coppermine&quot;', //cpg1.3.0
    'faq_lnk' => 'FAQ', //cpg1.3.0

);

$lang_gallery_admin_menu = array(
    'upl_app_lnk' => 'Potvrzení uploadu',
    'config_lnk' => 'Nastavení',
    'albums_lnk' => 'Galerie',
    'categories_lnk' => 'Kategorie',
    'users_lnk' => 'Uživatelé',
    'groups_lnk' => 'Už. skupiny',
    'comments_lnk' => 'Komentáře',
    'searchnew_lnk' => 'Dávkové přidání obrázků',
    'util_lnk' => 'Změnit velikost obrázků',
    'ban_lnk' => 'Vykopnout uživatele',
);

$lang_user_admin_menu = array(
    'albmgr_lnk' => 'Vytvořit / organizovat moje galerie',
    'modifyalb_lnk' => 'Změnit moje galerie',
    'my_prof_lnk' => 'Můj profil',
);

$lang_cat_list = array(
    'category' => 'Kategorie',
    'albums' => 'Galerie',
    'pictures' => 'Obrázky',
);

$lang_album_list = array(
    'album_on_page' => '%d galerií na %d stránkách'
);
           //ascending VZESTUPNE
$lang_thumb_view = array(
    'date' => 'DATUM',
    //Sort by filename and title
    'name' => 'JMÉNO SOUBORU',
    'title' => 'NADPIS',
    'sort_da' => 'Řadit vzestupně podle data',
    'sort_dd' => 'Řadit sestupně podle data',
    'sort_na' => 'Řadit vzestupně podle jména',
    'sort_nd' => 'Řadit sestupně podle jména',
    'sort_ta' => 'Řadit podle nadpisu vzestupně',
    'sort_td' => 'Řadit podle nadpisu sestupně',
    'download_zip' => 'Download jako Zip soubor', //cpg1.3.0
    'pic_on_page' => '%d obrázkků na %d stránkách',
    'user_on_page' => '%d uživatelů na %d stránkách'
);

$lang_img_nav_bar = array(
    'thumb_title' => 'Zpět na stránku s náhledy',
    'pic_info_title' => 'Zobraz/skryj informace o obrázku',
    'slideshow_title' => 'Slideshow',
    'ecard_title' => 'Poslat tento obrázek jako pohlednici',
    'ecard_disabled' => 'Pohlednice jsou vypnuté',
    'ecard_disabled_msg' => 'Nemáte dostatečná práva pro zaslání pohlednice',
    'prev_title' => 'Předchozí obrázek',
    'next_title' => 'Další obrázek',
    'pic_pos' => 'OBRÁZEK %s/%s',
);

$lang_rate_pic = array(
    'rate_this_pic' => 'Hodnotit tento obrázek ',
    'no_votes' => '(žádné hodnocení)',
    'rating' => '(Aktualní hodnocení : %s / z 5, hlasováno %s krát)',
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
    'file' => 'Soubor: ',
    'line' => 'Řádka: ',
);

$lang_display_thumbnails = array(
    'filename' => 'Jméno souboru : ',
    'filesize' => 'Velikost souboru : ',
    'dimensions' => 'Rozměry : ',
    'date_added' => 'Datum přidání : '
);

$lang_get_pic_data = array(
    'n_comments' => '%s Komentář(ů)',
    'n_views' => '%s zobrazení',
    'n_votes' => '(%s hlas(ů))'
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Debug Info', //cpg1.3.0
  'select_all' => 'Vybrat vše', //cpg1.3.0
  'copy_and_paste_instructions' => 'Pokud se chystáte požadovat pomoc na podpoře coppermine, vložte tento ladící výstup do vašecho příspěvku. Před takovým vložením se ujistěte, že jste všechna vaše hesla z tohoto textu nahradili pomocí "***".', //cpg1.3.0
  'phpinfo' => 'Zobrazit phpinfo', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => 'Přednastavený jazyk', //cpg1.3.0
  'choose_language' => 'Vyberte Váš jazyk', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'Přednastavený téma', //cpg1.3.0
  'choose_theme' => 'vyberte téma', //cpg1.3.0
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
    0 => 'Opouštím Admin Mód....:-(',
    1 => 'Vstupuji do Admin Módu....:-)',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
    'alb_need_name' => 'Galerie musí mít jméno',
    'confirm_modifs' => 'Jste si jist(a) těmito změnami ?',
    'no_change' => 'Neudělal(a) jste žádné změny !',
    'new_album' => 'Nová galerie',
    'confirm_delete1' => 'Jste si jist(a), že chcete smazat tuto galerii ?',
    'confirm_delete2' => '\nVšechny obrázky a komentáře budou smazány !',
    'select_first' => 'Nejprve vyberte galerii',
    'alb_mrg' => 'Správce galerií',
    'my_gallery' => '* Moje galerie *',
    'no_category' => '* Není kategorie *',
    'delete' => 'Smazat',
    'new' => 'Nový/á',
    'apply_modifs' => 'Potvrdit změny',
    'select_category' => 'Vybrat kategorii',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
    'miss_param' => 'Parametry potřebné pro \'%s\'operaci not supplied !',
    'unknown_cat' => 'Vybraná kategorie v databázi neexistuje',
    'usergal_cat_ro' => 'Nelze smazat uživatelské galerie !',
    'manage_cat' => 'Spravovat kategorie',
    'confirm_delete' => 'Opravdu chcete SMAZAT tuto kategorii',
    'category' => 'Kategorie',
    'operations' => 'Operace',
    'move_into' => 'Přesunout do',
    'update_create' => 'Aktualizovat/Vytvořit kategorii',
    'parent_cat' => 'Nadřazená kategorie',
    'cat_title' => 'Nadpis kategorie',
    'cat_thumb' => 'Miniatura kategorie', //cpg1.3.0
    'cat_desc' => 'Popis kategorie'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
    'title' => 'Nastavení',
    'restore_cfg' => 'Nastavit výchozí',
    'save_cfg' => 'Uložit konfiguraci',
    'notes' => 'Poznámky',
    'info' => 'Informace',
    'upd_success' => 'Konfigurace byla změněna',
    'restore_success' => 'Konfigurace byla nastavena na výchozí nastavení',
    'name_a' => 'Jméno vzestupně',
    'name_d' => 'Jméno sestupně',
    'title_a' => 'Nadpis vzestupně',
    'title_d' => 'Nadpis sestupně',
    'date_a' => 'Datum vzestupně',
    'date_d' => 'Datum sestupně',
    'th_any' => 'Max Aspect',
    'th_ht' => 'Výška',
    'th_wd' => 'Šířka',
    'label' => 'popiska', //cpg1.3.0
    'item' => 'položka', //cpg1.3.0
    'debug_everyone' => 'Každý', //cpg1.3.0
    'debug_admin' => 'Pouze Admin', //cpg1.3.0

);

if (defined('CONFIG_PHP')) $lang_config_data = array(
    'Základní nastavení',
    array('Jméno gallerie', 'gallery_name', 0),
    array('Popis Galerie', 'gallery_description', 0),
    array('Email administrátora galerie', 'gallery_admin_email', 0),
    array('Cílová adresa pro odkaz \'Zobrazit další obrázky\' v odkazu pohlednice', 'ecards_more_pic_target', 0),
    array('Galrie je odpojena', 'offline', 1), //cpg1.3.0
    array('Logovat ecards', 'log_ecards', 1), //cpg1.3.0
    array('Povolit ZIP-stahování oblíbených', 'enable_zipdownload', 1), //cpg1.3.0

    'Jazyk, Témata &amp; nastavení znakové sady',
    array('Jazyk', 'lang', 5),
    array('Témátko', 'theme', 6),
    array('Zobrazit seznam jazyků', 'language_list', 1), //cpg1.3.0
    array('Zobrazit vlajky jazyků', 'language_flags', 8), //cpg1.3.0 
    array('Zobrazit &quot;reset&quot; ve výběru jazyka', 'language_reset', 1), //cpg1.3.0
    array('Zobrazit seznam témat', 'theme_list', 1), //cpg1.3.0
    array('Zobrazit &quot;reset&quot; ve výběru témat', 'theme_reset', 1), //cpg1.3.0
    array('Zobrazit FAQ', 'display_faq', 1), //cpg1.3.0
    array('Zobrazit nápovědu bbcode', 'show_bbcode_help', 1), //cpg1.3.0
    array('Kódování znaků', 'charset', 4), //cpg1.3.0

    'Nastavení zobrazení',
    array('Šířka hlavní tabulky v (pixelech nebo %)', 'main_table_width', 0),
    array('Počet úrovní subkategorií', 'subcat_level', 0),
    array('Počet galerií na stránku', 'albums_per_page', 0),
    array('Počet sloupců v přehledu galerií', 'album_list_cols', 0),
    array('Velikost náhledů v pixelech', 'alb_list_thumb_size', 0),
    array('Obsah hlavní stránky', 'main_page_layout', 0),
    array('Ukazovat v kategoriích náhledy galerií první úrovně','first_level',1),

    'Zobrazení náhledů',
    array('Počet sloupců na stránku', 'thumbcols', 0),
    array('Počet řádků na stránku', 'thumbrows', 0),
    array('Maximální množství záložek', 'max_tabs', 0),
    array('Zobrazit legendu obrázku pod náhledem', 'caption_in_thumbview', 1),
    array('Zobrazit počet shlédnutí pod náhledem', 'views_in_thumbview', 1), //cpg1.3.0
    array('Zobrazit počet komentářů pod náhldem', 'display_comment_count', 1),
    array('Zobrazit jméno autora pod náhledem', 'display_uploader', 1), //cpg1.3.0
    array('Základní řazení náhledů', 'default_sort_order', 3),
    array('Min. počet hlasů potřebný k zařazení do seznamu \'Nejlépe hodnocené\'', 'min_votes_for_rating', 0),

    'Zobrazení obrázků &amp; Nastavení komentářů',
    array('Šířka tabulky pro zobrazení obrázku (v pixelech nebo %)', 'picture_table_width', 0),
    array('Vždy zobrazit podrobné info', 'display_pic_info', 1),
    array('CENZUROVAT slova v komentářích', 'filter_bad_words', 1),
    array('Povolit smajlíky v komentářích', 'enable_smilies', 1),
    array('Maximální délka popisu obrázku', 'max_img_desc_length', 0),
    array('Maximální délka slova v komentáři', 'max_com_wlength', 0),
    array('Maximální množství řádků v komentáři', 'max_com_lines', 0),
    array('Maximální délka komentáře', 'max_com_size', 0),
    array('Ukázat filmový proužek', 'display_film_strip', 1),
    array('Počet položek ve filmovém proužku', 'max_film_strip_items', 0),
    array('Upozornit adminitratora na komentáře pomocí emailu', 'email_comment_notification', 1), //cpg1.3.0 
    array('Slideshow interval v milisekundách (1 sekunda = 1000 milisekund)', 'slideshow_interval', 0), //cpg1.3.0 

    'Obrázky a nastavení náhledů',
    array('Kvalita souborů JPEG', 'jpeg_qual', 0),
    array('Maximální rozměry náhledu <b>*</b>', 'thumb_width', 0),
    array('Použít rozměr ( šířka nebo výška nebo maximální rozměr náhledu )<b>*</b>', 'thumb_use', 7),
    array('Vytvořit střední obrázek','make_intermediate',1),
    array('Maximální šířka nebo výška střeního obrázku <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0), //cpg1.3.0
    array('Maximální velikost uploadovaných obrázků (KB)', 'max_upl_size', 0),
    array('Maximální rozměry uploadovaných obrázků (v pixelech)', 'max_upl_width_height', 0),

    'Obrázky a náhledy rozšířené nastavení',
    array('Zobrazit ikonu zamknuté galerie nepřihlášenému uživateli.','show_private',1),
    array('Znaky zakázané v názvech souborů', 'forbiden_fname_char',0),
    //array('Povolené koncovky uploadovaných souborů', 'allowed_file_extensions',0),
    array('Povolené typy obrázků', 'allowed_img_types',0), //cpg1.3.0
    array('Povolené typy videa', 'allowed_mov_types',0), //cpg1.3.0
    array('Povolené typy audia', 'allowed_snd_types',0), //cpg1.3.0
    array('Povolené typy documentů', 'allowed_doc_types',0), //cpg1.3.0
    array('Metoda změny velikosti obrázků','thumb_method',2),
    array('Cesta k ImageMagicu (příklad /usr/bin/X11/)', 'impath', 0),
    //array('Povolené typy obrázků (pouze pro ImageMagic)', 'allowed_img_types',0),
    array('Parametry pro ImageMagic', 'im_options', 0),
    array('Číst EXIF data ze souborů JPEG', 'read_exif_data', 1),
    array('Číst IPTC data ze souborů JPEG', 'read_iptc_data', 1), //cpg1.3.0
    array('Adresář pro galerie <b>*</b>', 'fullpath', 0),
    array('Adresář pro galerie uživatelů <b>*</b>', 'userpics', 0),
    array('Prefix pro středně velké obrázky <b>*</b>', 'normal_pfx', 0),
    array('Prefix pro náhledy <b>*</b>', 'thumb_pfx', 0),
    array('Základní mód pro adresáře', 'default_dir_mode', 0),
    array('Základní mód pro obrázky', 'default_file_mode', 0),

    'Nastavení uživatelů',
    array('Povolit registraci nových uživatelů', 'allow_user_registration', 1),
    array('Pro registraci vyžadovat potvrzení admina', 'reg_requires_valid_email', 1),
    array('Upozornit administrátora na registraci nového uživatele pomocí emailu', 'reg_notify_admin_email', 1), //cpg1.3.0
    array('Povolit pro dva uživatele stejný email', 'allow_duplicate_emails_addr', 1),
    array('Mají mít uživatelé vlastní galerii?', 'allow_private_albums', 1),
    array('Upozornit administrátora na vložený soubor čekající na schválení', 'upl_notify_admin_email', 1), //cpg1.3.0
    array('Dovolit přihlášeným uživatelům, aby viděli seznam uživatelů', 'allow_memberlist', 1), //cpg1.3.0

    'Vlastní položky pro popis obrázku (Nechte prázné a nezobrazí se)',
    array('Jméno položky 1', 'user_field1_name', 0),
    array('Jméno položky 2', 'user_field2_name', 0),
    array('Jméno položky 3', 'user_field3_name', 0),
    array('Jméno položky 4', 'user_field4_name', 0),

    'Cookies &amp; Kódová stráka',
    array('Jméno cookies užívané programem (expertní volba)', 'cookie_name', 0),
    array('Cesta pro cookies užívaná programem (expertní volba)', 'cookie_path', 0),
    array('Kódová stránka', 'charset', 4),

    'Další nastavení',
    array('Zapnout ladící mód (jen pro testování)', 'debug_mode', 1),
    array('Zobrazovat v ladícím módu upozornění', 'debug_notice', 1), //cpg1.3.0


    '<br /><div align="center">(*) Položky označené * se NESMÍ změnit pokud již máte ve vaší galerii nahrané obrázky</div><br />
    <a name="notice2"></a>(**) Při změně tohoto nastavení se změna projeví pouze u souborů, které jsou 
	přidány až od tohoto okamžiku. Je doporučeno neměnit toto nastavení pokud uz jsou v galerii nějaké soubory. 
	Přest je možné nechat promítnout změny i na už existující soubory pomocí nástroje
	&quot;<a href="util.php">admin tools</a> (resize pictures)&quot; v admin menu.</div><br />', //cpg1.3.0

);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //
if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Zasílání ecards', //cpg1.3.0
  'ecard_sender' => 'Odesílatel', //cpg1.3.0
  'ecard_recipient' => 'Příjemce', //cpg1.3.0
  'ecard_date' => 'Datum', //cpg1.3.0
  'ecard_display' => 'Zobrazit ecard', //cpg1.3.0
  'ecard_name' => 'Jméno', //cpg1.3.0
  'ecard_email' => 'Email', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'vzestupně', //cpg1.3.0
  'ecard_descending' =>'sestupně', //cpg1.3.0
  'ecard_sorted' => 'Setříděné', //cpg1.3.0
  'ecard_by_date' => 'podle data', //cpg1.3.0
  'ecard_by_sender_name' => 'podle jména odesílatele', //cpg1.3.0
  'ecard_by_sender_email' => 'podle emailu odesílatele', //cpg1.3.0
  'ecard_by_sender_ip' => 'podle IP addressy odesílatele', //cpg1.3.0
  'ecard_by_recipient_name' => 'podle jména příjemce', //cpg1.3.0
  'ecard_by_recipient_email' => 'podle emailu příjemce', //cpg1.3.0
  'ecard_number' => 'zobrazení záznamu %s až %s z %s', //cpg1.3.0
  'ecard_goto_page' => 'přechod na stranu', //cpg1.3.0
  'ecard_records_per_page' => 'Záznamu na jedné stránce', //cpg1.3.0
  'check_all' => 'Zatrhnout vše', //cpg1.3.0
  'uncheck_all' => 'Odznačit vše', //cpg1.3.0
  'ecards_delete_selected' => 'Smazat vybrané ecards', //cpg1.3.0
  'ecards_delete_confirm' => 'Jste si jist, že chcete smazat záznamy? Nastavte checkbox!', //cpg1.3.0 
  'ecards_delete_sure' => 'Jsem si jist.', //cpg1.3.0
);
                                                                                                                  



// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
    'empty_name_or_com' => 'Vložte jméno a Váš komentář',
    'com_added' => 'Váš komentář byl přidán',
    'alb_need_title' => 'Prosím, dejte galerii nadpis !',
    'no_udp_needed' => 'Aktualizace není třeba.',
    'alb_updated' => 'Galerie byla přidána',
    'unknown_album' => 'Vybraná galerie neexistuje nebo nemáte práva pro upload do této galerie',
    'no_pic_uploaded' => 'Obrázek nebyl uploadován!<br /><br />zkontrolujte zda server podporuje upload souborů, či zda jste opravdu zadal(a) obrázek k uploadu...',
    'err_mkdir' => '  ERROR: Chyba při vytváření adresáře (nebyl vytvořen) %s !',
    'dest_dir_ro' => 'Do cílového adresáře %s nemůže skript zapisovat (zkontrolujte práva) !',
    'err_move' => 'Nelze přesunout %s do %s !',
    'err_fsize_too_large' => 'Rozměry obrázku, který se snažíte uploadovat, jsou příliš velké (max. velikost je %s x %s) !',
    'err_imgsize_too_large' => 'Velikost souboru, který se snažíte uploadovat, je příliš velká (max. velikost je %s KB) !',
    'err_invalid_img' => 'Soubor který jste nahrál(a) na server není validním obrázkem !',
    'allowed_img_types' => 'Můžete uploadovat pouze obrázky %s .',
    'err_insert_pic' => 'Obrázek \'%s\' nelze vložit do galerie ',
    'upload_success' => 'Váš obrázek byl nahrán na server bez problémů<br /><br />Bude viditelný po schválení adminem.',
    'notify_admin_email_subject' => '%s - upozornění na Upload', //cpg1.3.0 
    'notify_admin_email_body' => '%s nahrál do galerie obrázek, který vyžaduje vaše potvrzení. Navštivte prosím %s', //cpg1.3.0
    'info' => 'Informace',
    'com_added' => 'Komentářu přidáno',
    'alb_updated' => 'Galerie aktualizována',
    'err_comment_empty' => 'Váš komentář je prázdný !',
    'err_invalid_fext' => 'Pouze soubory s následujícími koncovkami jsou podporované : <br /><br />%s.',
    'no_flood' => 'Jste autor posledního komentáře k tomuto obrázku<br /><br />Pokud ho chcete změnit použijte volbu upravit ',
    'redirect_msg' => 'Právě jste přesměrováván(a).<br /><br /><br />Klikněte na \'POKRAČOVAT\' pokud se stránka nepřesměruje sama',
    'upl_success' => 'Váš obrázek byl v pořádku přidán',
    'email_comment_subject' => 'Komentář byl přidán do Coppermine Photo Gallery', //cpg1.3.0 
    'email_comment_body' => 'Někdo přidal komentář do vaší galerie. Prohlédněte si ho na', //cpg1.3.0

);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
    'caption' => 'Legenda(popisek)',
    'fs_pic' => 'původní velikost obrázku',
    'del_success' => 'bezchybně smazáno',
    'ns_pic' => 'normální velikost obrázku',
    'err_del' => 'nelze smazat',
    'thumb_pic' => 'náhled',
    'comment' => 'komentář',
    'im_in_alb' => 'patří do galerie',
    'alb_del_success' => 'Galerie \'%s\' smazána',
    'alb_mgr' => 'Správce galerií',
    'err_invalid_data' => 'Obdržena chybná data \'%s\'',
    'create_alb' => 'Vytvářím galerii \'%s\'',
    'update_alb' => 'Aktualizuji galerii \'%s\' s nadpisem \'%s\' a seznamem \'%s\'',
    'del_pic' => 'Smazat obrázek',
    'del_alb' => 'Smazat galerii',
    'del_user' => 'Smazat uživatele',
    'err_unknown_user' => 'Vybraný uživatel neexistuje !',
    'comment_deleted' => 'Komentář bezchybně smazán ! ',
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
    'confirm_del' => 'Jste si jist, že chcete smazat tento obrázek ? \\nPřiložené komentáře budou straceny.',
      'del_pic' => 'SMAZAT TENTO OBRÁZEK',
    'size' => '%s x %s pixelelů',
    'views' => '%s krát',
    'slideshow' => 'Slideshow',
    'stop_slideshow' => 'ZASTAVIT SLIDESHOW',
    'view_fs' => 'klikněte pro zobrazení původního obrázku',
    'edit_pic' => 'Edit description', //cpg1.3.0
    'crop_pic' => 'Crop and Rotate', //cpg1.3.0

);

$lang_picinfo = array(
    'title' =>'Informace o obrázku',
    'Filename' => 'Jméno souboru',
    'Album name' => 'Jméno galerie',
    'Rating' => 'Hodnocení (%s hlas(ů))',
    'Keywords' => 'Klíčová slova',
    'File Size' => 'Velikost souboru',
    'Dimensions' => 'Rozměry',
    'Displayed' => 'Zobrazeno',
    'Camera' => 'Fotoaparát',
    'Date taken' => 'Datum pořízení snímku',
    'Aperture' => 'Clona',
    'Exposure time' => 'Expoziční čas',
    'Focal length' => 'Ohnisková vzdálenost',
    'Comment' => 'Komentáře',
    'addFav' => 'Přidat k oblíbeným',
    'addFavPhrase' => 'Oblíbené',
    'remFav' => 'Odstranit z oblíbených',
    'iptcTitle'=>'IPTC Title', //cpg1.3.0
    'iptcCopyright'=>'IPTC Copyright', //cpg1.3.0
    'iptcKeywords'=>'IPTC Keywords', //cpg1.3.0
    'iptcCategory'=>'IPTC Category', //cpg1.3.0
    'iptcSubCategories'=>'IPTC Sub Categories', //cpg1.3.0
);

$lang_display_comments = array(
    'OK' => 'OK',
    'edit_title' => 'Upravit tento komentář',
    'confirm_delete' => 'Jste si jist(a), že chcete smazat tento komentář ?',
    'add_your_comment' => 'Přidat komentář',
    'name'=>'Jméno',
    'comment'=>'Komentář',
    'your_name' => 'Anonym',
);

$lang_fullsize_popup = array(
        'click_to_close' => 'Kliknutím na obrázek zavřete okno',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
    'title' => 'Poslat pohlednici',
    'invalid_email' => '<b>Varování</b> : neplatná emailová adresa !',
    'ecard_title' => 'Pohlednice ze serveru %s pro vás/tebe',
    'error_not_image' => 'Pouze obrázky mohou být poslány jako ecard.', //cpg1.3.0
    'view_ecard' => 'Pokud se pohlednice nezobrazila klikni na link',
    'view_more_pics' => 'Klikni pro další obrázky !',
    'send_success' => 'Vaše pohlednice byla odeslána',
    'send_failed' => 'Omlouváme se, ale server nebyl schopen odeslat Vaší pohlednici zkuste
     to znovu za chvíli...',
    'from' => 'Od',
    'your_name' => 'Vaše jméno',
    'your_email' => 'Váš email',
    'to' => 'Komu',
    'rcpt_name' => 'Jméno příjemce',
    'rcpt_email' => 'Doručit na email',
    'greetings' => 'Pozdrav/oslovení',
    'message' => 'Zpráva',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
    'pic_info' => 'Info&nbsp;o obrázku',
    'album' => 'Galerie',
    'title' => 'Nadpis',
    'desc' => 'Popis',
    'keywords' => 'Klíčová slova',
    'pic_info_str' => '%sx%s - %sKB - %s zobrazení - %s hlas(ů)',
    'approve' => 'Schválit obrázek',
    'postpone_app' => 'Odložit schválení',
    'del_pic' => 'Smazat obrázek',
    'read_exif' => 'Načíst znovu EXIF info', //cpg1.3.0
    'reset_view_count' => 'Vynulovat počítadlo zobrazení',
    'reset_votes' => 'Vynulovat hlasy',
    'del_comm' => 'Smazat komentáře',
    'upl_approval' => 'Potvrzení uploadu',
    'edit_pics' => 'Upravit obrázky',
    'see_next' => 'Zobrazit další obrázky',
    'see_prev' => 'Zobrazit předchozí obrázky',
    'n_pic' => '%s obrázků',
    'n_of_pic_to_disp' => 'Počet obrázku k zobrazení',
    'apply' => 'Uložit změny',
    'crop_title' => 'Coppermine Editor Obrázků', //cpg1.3.0 
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
  'answer' => 'Odpověď: ', //cpg1.3.0
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
  'forgot_passwd' => 'Připomenutí hesla', //cpg1.3.0
  'err_already_logged_in' => 'Už jste přihlášen(a)!', //cpg1.3.0
  'enter_username_email' => 'Zadejte vaše přihlašovací jméno a email adresu', //cpg1.3.0
  'submit' => 'Proveď', //cpg1.3.0
  'failed_sending_email' => 'Email s připomenutím hesla nemohl být odeslán!', //cpg1.3.0
  'email_sent' => 'Na adresu 5s byl odeslán dopis z vaším uživatelským jménem a heslem', //cpg1.3.0
  'err_unk_user' => 'Zadaný uživatel neexistuje!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - Pripomenuti hesla', //cpg1.3.0
  'passwd_reminder_body' => 'Požádali jste o připomenutí vašich přihlašovacích údajů:
Uživatelské jméno: %s
Heslo:             %s
Klikněte na %s pro přihlášení.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
    'group_name' => 'Jméno skupiny',
    'disk_quota' => 'Disková kvóta',
    'can_rate' => 'Mohou hodnotit obrázky',
    'can_send_ecards' => 'mohou posílat pohlednice',
    'can_post_com' => 'Mohou posílat komentáře',
    'can_upload' => 'Mohou nahrávat obrázky',
    'can_have_gallery' => 'Mohou mít osobní galerii',
    'apply' => 'Uložit změny',
    'create_new_group' => 'Vytvořit novou skupinu',
    'del_groups' => 'Smazat vybrané skupiny',
    'confirm_del' => 'Pokud smažete tuto skupinu všichni uživatelé, patřící do této skupiny budou přesunuti do skupiny \'Registered\' !\n\nPřejete si pokračovat ?',
    'title' => 'Spravovat uživatelské skupiny',
    'approval_1' => 'Potvrzení veřejného. Upl. (1)',
    'approval_2' => 'Potvrzení soukromého. Upl. (2)',
    'upload_form_config' => 'Konfigurace formuláře pro upload', //cpg1.3.0 
    'upload_form_config_values' => array( 'Pouze jednotlivé soubory', 'Pouze mnoho souborů', 'Pouze URI uploads', 'Pouze ZIP upload', 'Soubory-URI', 'Soubory-ZIP', 'URI-ZIP', 'Soubory-URI-ZIP'), //cpg1.3.0  //TODO
    'custom_user_upload'=>'Uživatel může upravit počet vstupních políček pro upload?', //cpg1.3.0
    'num_file_upload'=>'Maximální/přesný počet políček pro upload souborů', //cpg1.3.0
    'num_URI_upload'=>'Maximální/přesný počet políček pro upload URI', //cpg1.3.0

    'note1' => '<b>(1)</b> Upload do veřejných galerií vyžaduje potvrzení adminem',
    'note2' => '<b>(2)</b> Upload do galerie patřící uživateli vyžaduje potvrzení adminem',
    'notes' => 'Poznámky'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
    'welcome' => 'Vítejte !'
);

$lang_album_admin_menu = array(
    'confirm_delete' => 'Jste si jist(a), že chcete smazat tuto galerii? \\nVšechny obrázky a komentáře půjdou do pekla taky. Přejete si pokračovat.',
    'delete' => 'SMAZAT',
    'modify' => 'VLASTNOSTI',
    'edit_pics' => 'UPRAVIT OBR.',
);

$lang_list_categories = array(
    'home' => 'Domů',
    'stat1' => '<b>[pictures]</b> obrázků v <b>[albums]</b> galeriích v <b>[cat]</b> kategoriích s <b>[comments]</b> komentáři zobrazeno <b>[views]</b> krát',
    'stat2' => '<b>[pictures]</b> obrázků v <b>[albums]</b> galeriích zobrazeno <b>[views]</b> krát',
    'xx_s_gallery' => '%s\' galerií',
    'stat3' => '<b>[pictures]</b> obrázků v <b>[albums]</b> galeriích s <b>[comments]</b> komentáři zobrazeno <b>[views]</b> krát'
);

$lang_list_users = array(
    'user_list' => 'Seznam uživatelů',
    'no_user_gal' => 'Nejsou žádné uživatelské alerie',
    'n_albums' => '%s galerií',
    'n_pics' => '%s obrázků'
);

$lang_list_albums = array(
    'n_pictures' => '%s obrázků',
    'last_added' => ', poslední přidán %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
    'login' => 'Přihlášení',
    'enter_login_pswd' => 'Zadejte Vaše jméno a heslo pro přihlášení',
    'username' => 'Jméno',
    'password' => 'Heslo',
    'remember_me' => 'Pamatuj si mě',
    'welcome' => 'Vítej u nás %s ...',
    'err_login' => '*** Chyba při přihlášení skuste to znova ***',
    'err_already_logged_in' => 'Již jste přihlášen !',
    'forgot_password_link' => 'Zapomněl jsem své heslo.', //cpg1.3.0

);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
    'logout' => 'Odhlásit',
    'bye' => 'Tak si to užij zase jinde %s ...',
    'err_not_loged_in' => 'Nejste přihlášen !',
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
    'upd_alb_n' => 'Aktualizovat album %s',
    'general_settings' => 'Základní nastavení',
    'alb_title' => 'Nadpis galerie',
    'alb_cat' => 'Kategorie galerie',
    'alb_desc' => 'Popis galerie',
    'alb_thumb' => 'Náhled reprezentující album',
    'alb_perm' => 'Přístupová práva pro tuto galerii',
    'can_view' => 'Album můžou prohlížet',
    'can_upload' => 'Návštěvníci smějí přidávat obrázky',
    'can_post_comments' => 'Povolit komentáře',
    'can_rate' => 'Návštěvníci mohou hlasovat',
    'user_gal' => 'User Gallery',
    'no_cat' => '* Není kategorie *',
    'alb_empty' => 'Galerie je prázdná',
    'last_uploaded' => 'Nejnovější obrázek',
    'public_alb' => 'kdokoliv (veřejná galerie)',
    'me_only' => 'Pouze já',
    'owner_only' => 'Pouze vlastník (%s)',
    'groupp_only' => 'Členové skupiny \'%s\'',
    'err_no_alb_to_modify' => 'Album nelze modifikovat v databázi.',
    'update' => 'Aktualizovat album',
    'notice1' => '(*) depending on %sgroups%s settings', //cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
    'already_rated' => 'Tento obázek jste již hodnotil(a)',
    'rate_ok' => 'Vás hlas byl přijat. Děkujeme.',
    'forbidden' => 'You can not rate your own files.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Administrátoři serveru {SITE_NAME}, potažmo této galerie si vyhrazují právo zásahu do obsahu galerie např. komentáře, mazání obrázků případně úprava (pokud porušují pravidla galerie nebo dobré mravy).
Pokud budou obrázky nahrané uživetelem porušovat zákon(y) budou ihned po zjištění jejich umístění na serveru smazány. Administrátoři/provozovatelé této galerie si distancují od
případného závadného obsahu nahraného na server uživateli. Vlastníkem dat v galerii jsou jejich autoři. Administrátoři předpokládají, že na server jsou umísťovaná uživateli pouze obrázky k nímž vlastní uživatel autorská práva.
<br />
Pokud souhlasíte, že nebudete posílat jakýkoliv závadný materiál jako vulgární a obscéní obrázky/komentáře, jakýkoliv materiál vzbuzující nenávist, rasismus, nebo jiný materiál porušující zákony. Souhlasíte, že administrátoři, provozovatelé a moderátoři  {SITE_NAME}   mají právo smazat případně upravit jakýkoliv materiál kdykoliv to uznají za vhodné. Vložené informace budou uložené na serveru a v databázi a nebudou poskytnuty žádné třetí straně bez vašeho souhlasu. Administátoři/povozovatelé serveru  však nejsou ani nebudou ručit za data na serveru uložená pokud dojde k jakémukoliv útoku na sever.
<br />
<br />
Tyto stránky využívají k uložení uživatelských dat cookies. Cookies slouží pouze pro zvýšení konfortu při používání této aplikace. Emailová adresa slouží jen pro potvrzení vašich údajů a poslání hesla.<br />
<br />
Kliknutím na 'Souhlasím' souhlasíte z výše uvedenými pravidly..
EOT;

$lang_register_php = array(
    'page_title' => 'Registrace nového uživatele',
    'term_cond' => 'Podmínky a pravidla',
    'i_agree' => 'Souhlasím',
    'submit' => 'Poslat registraci',
    'err_user_exists' => 'Zadané uživatelské jméno již existuje vyberte si prosím jiné',
    'err_password_mismatch' => 'Hesla se musí schodovat pokuste je obě zadat znovu',
    'err_uname_short' => 'Minimální délka uživatelského jména je 2 znaky',
    'err_password_short' => 'Heslo musí být alespoň 2 znaky dlouhé',
    'err_uname_pass_diff' => 'Jméno a heslo se nesmí shodovat',
    'err_invalid_email' => 'Byla zadána neplatná emailová adresa',
    'err_duplicate_email' => 'Jiný uživatel se zaregistroval se zadaným emailem. Email musí být jedinečný',
    'enter_info' => 'Zadané registrační informace',
    'required_info' => 'Vyžadované informace',
    'optional_info' => 'Volitelné informace',
    'username' => 'Jméno',
    'password' => 'Heslo',
    'password_again' => 'Heslo (potvrzení)',
    'email' => 'Email',
    'location' => 'Místo (např. Brno apod.)',
    'interests' => 'Zájmy',
    'website' => 'Domácí stránka',
    'occupation' => 'Povolání',
    'error' => 'CHYBA',
    'confirm_email_subject' => '%s - Potvrzení registracce',
    'information' => 'Informace',
    'failed_sending_email' => 'Nelze odeslat potvrzení registace !',
    'thank_you' => 'Děkujeme za registraci.<br /><br />Na adresu zadanou při registraci Vám budou doručeny informace o aktivaci vašeho účtu',
    'acct_created' => 'Váš uživatelský účet byl bezchybně vytvořen. Nyní se přihlašte pomocí vašeho jména a hesla',
    'acct_active' => 'Váš účet je nyní aktivní přihlašte se pomocí vašeho jména a hesla.',
    'acct_already_act' => 'Váš účet je již aktivní !',
    'acct_act_failed' => 'Tento účet nmůže být aktivován !',
    'err_unk_user' => 'Vybraný uživatel neexistuje !',
    'x_s_profile' => '%s\' profil',
    'group' => 'Skupina',
    'reg_date' => 'Připojen',
    'disk_usage' => 'Využití disku',
    'change_pass' => 'Změnit heslo',
    'current_pass' => 'Současné heslo',
    'new_pass' => 'Nové heslo',
    'new_pass_again' => 'Nové heslo (kontola)',
    'err_curr_pass' => 'Současné heslo zadáno nesprávně',
    'apply_modif' => 'potvrdit změny',
    'change_pass' => 'Změnit heslo',
    'update_success' => 'Váš profil byl aktualizován',
    'pass_chg_success' => 'Vyše heslo bylo změněno',
    'pass_chg_error' => 'Vaše heslo nebylo změněno',
    'notify_admin_email_subject' => '%s - upozorneni na registraci', //cpg1.3.0 
    'notify_admin_email_body' => 'Nový uživatel se jménem "%s" se registroval ve vaší galerii', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
Děkujeme za registraci na {SITE_NAME}

Vaše jméno je : "{USER_NAME}"
Vaše heslo je: "{PASSWORD}"

Pro aktivaci vašeho účtu je přeba kliknout na odkaz níže nebo ho zkopírovat
do adresního řádku vašeho browseru a přejít na tuto stránku


{ACT_LINK}

S Pozdravem,

Správa serveru {SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
    'title' => 'Kontrola komentářů',
    'no_comment' => 'Nejsou žádné komentáře ke kontrole',
    'n_comm_del' => '%s komentář(ů) smazán(o)',
    'n_comm_disp' => 'Počet komentářů k zobrazení',
    'see_prev' => 'Předchozí',
    'see_next' => 'Další',
    'del_comm' => 'Smazat vybrané komentáře',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
    0 => 'Prohledávat obrázky',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
    'page_title' => 'Najít nové obrázky',
    'select_dir' => 'Vybrat adresář',
    'select_dir_msg' => 'Tato funkce vám umožní dávkově zpracovat obrázky nahrané přes FTP.<br /><br />Vyberte adresář kde se nacházejí obrázky k spracování',
    'no_pic_to_add' => 'Nejsou zde žádné obrázky k přidání',
    'need_one_album' => 'Pořebujete mít vytvořenu alespoň jednu galerii',
    'warning' => 'Varování',
    'change_perm' => 'Skript nemůže zapisovat do tohoto adresáře, musíte ho nastavit na CHMOD 755 nebo 777 před přidáním obrázků !',
    'target_album' => '<b>Vložit obrázky z &quot;</b>%s<b>&quot; do </b>%s',
    'folder' => 'Složka',
    'image' => 'Obrázek',
    'album' => 'Galerie',
    'result' => 'Výsledek',
    'dir_ro' => 'Nezapisovatelná. ',
    'dir_cant_read' => 'Nečitelná. ',
    'insert' => 'Přidávám nové obrázky do galerie',
    'list_new_pic' => 'Seznam obrázků',
    'insert_selected' => 'Vložit vybrané obrázky',
    'no_pic_found' => 'Nové obrázky nenalezeny',
    'be_patient' => 'Prosím buďte trpělivý(á), program potřebuje na zpracování obrázku nějaý ten čas.',
    'notes' =>  '<ul>'.
                '<li><b>OK</b> : Tyto obrázky byly přidány'.
                '<li><b>DP</b> : Zdvojení!, Tento obrázek ji existuje'.
                '<li><b>PB</b> : tento obrázek nelze přidat, skontrolujte konfiguraci případně přístupová práva'.
                '<li>Když se neukáže \'označení\' OK, DP, PB klepněte na obrázek a uvidíte chybovou hlášku generovanou PHP, která Vám pomůže zjistit příčinu problému'.
                '<li>Pokud dojde k timeoutu F5 nebo reload stránky by měl pomoci'.
                '</ul>',
     'select_album' => 'Vyberte galerii', //cpg1.3.0 
     'check_all' => 'Vybrat vše', //cpg1.3.0
     'uncheck_all' => 'Odznačit vše', //cpg1.3.0
                
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
                'title' => 'Vykopnutí uživatelé',
                'user_name' => 'Uživatelské jméno',
                'ip_address' => 'IP Adresa',
                'expiry' => 'Vyprší za (nevyplňovat pro stálé vykopnutí)',
                'edit_ban' => 'Uložit změny',
                'delete_ban' => 'Smazat',
                'add_new' => 'Přidat další vykopnutí',
                'add_ban' => 'Přidat',
                'error_user' => 'Nemohu nalézt uživatele', //cpg1.3.0 
                'error_specify' => 'Je potřeba zadat buď uživatelské jméno nebo IP adresu', //cpg1.3.0
                'error_ban_id' => 'Špatné ID pro zákaz!', //cpg1.3.0
                'error_admin_ban' => 'Nemůžete zakázat sám sebe!', //cpg1.3.0
                'error_server_ban' => 'Snažíte se zakázat vlastní server? To není možné udělat.', //cpg1.3.0
                'error_ip_forbidden' => 'Není možné zakázat toto IP - není dosažitelné!', //cpg1.3.0
                'lookup_ip' => 'Najít IP adresu', //cpg1.3.0
                'submit' => 'Odeslat', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(  
    'title' => 'Upload obrázku', 
    'custom_title' => 'Upravený Formulář', //cpg1.3.0
    'cust_instr_1' => 'Můžete zvolit požadovaný počet vstupních políček. Není ale možné překročit omezení počtu políček uvedená níže.', //cpg1.3.0
    'cust_instr_2' => 'Box Number Requests', //cpg1.3.0
    'cust_instr_3' => 'Políčka pro upload souborů: %s', //cpg1.3.0
    'cust_instr_4' => 'Políčka pro URI/URL upload: %s', //cpg1.3.0
    'cust_instr_5' => 'Políčka pro URI/URL upload:', //cpg1.3.0
    'cust_instr_6' => 'Políčka pro upload souborů:', //cpg1.3.0
    'cust_instr_7' => 'Prosím zadejte požadovaný počet ke každému typu vstupních políček pro upload. Potom stiskněte \'Pokračovat\'. ', //cpg1.3.0
    'reg_instr_1' => 'Neplatná akce pro vytvoření formuláře.', //cpg1.3.0  
    'reg_instr_2' => 'Pomocí políček dole můžete nechat na server nahrát soubory. Velikost jednotlivých nahrávaných souborů při uploadu na server by neměla přesáhnout %s KB. Soubory ZIP nahrané pomocí sekcí \'Upload Souborů\' nebo \'URI/URL Upload\' zůstanou zkomprimované jako jeden soubor i po nahrání na server.', //cpg1.3.0
    'reg_instr_3' => 'Pokud chcete, aby soubory zabalené v archivu ZIP byly rozbaleny, musíte použít pro zadání souboru políčko v sekci \'Decompressive ZIP Upload\'.', //cpg1.3.0
    'reg_instr_4' => 'Pokud používáte sekci URI/URL upload, prosím zadávejte cestu k souboru takto: http://www.mojedomena.cz/obrazky/priklad1.jpg', //cpg1.3.0
    'reg_instr_5' => 'Po vyplnění formuláře stiskněte tlačítko \'Pokračovat\'.', //cpg1.3.0
    'reg_instr_6' => 'Upload ZIP Archivu:', //cpg1.3.0
    'reg_instr_7' => 'Upload Souborů:', //cpg1.3.0
    'reg_instr_8' => 'URI/URL Uploads:', //cpg1.3.0
    'error_report' => 'Error Report', //cpg1.3.0
    'error_instr' => 'The following uploads encountered errors:', //cpg1.3.0
    'file_name_url' => 'File Name/URL', //cpg1.3.0
    'error_message' => 'Error Message', //cpg1.3.0
    'no_post' => 'File not uploaded by POST.', //cpg1.3.0
    'forb_ext' => 'Forbidden file extension.', //cpg1.3.0
    'exc_php_ini' => 'Překročena velikost souboru povolená v php.ini.', //cpg1.3.0
    'exc_file_size' => 'Překročena velikost souboru povolená galerií.', //cpg1.3.0
    'partial_upload' => 'Pouze částečný upload.', //cpg1.3.0
    'no_upload' => 'Neproběhl žádný upload souborů.', //cpg1.3.0
    'unknown_code' => 'Neznámá chyba PHP při uploadu.', //cpg1.3.0
    'no_temp_name' => 'Žádný upload - žadné dočasné jméno.', //cpg1.3.0
    'no_file_size' => 'Neobsahuje žádná data/rozbité', //cpg1.3.0
    'impossible' => 'Nebylo možné přesunout.', //cpg1.3.0
    'not_image' => 'Není obrázkem/rozité', //cpg1.3.0
    'not_GD' => 'Chybí rozšíření GD.', //cpg1.3.0
    'pixel_allowance' => 'Pixel allowance exceeded.', //cpg1.3.0 //TODO
    'incorrect_prefix' => 'Neplatný URI/URL prefix', //cpg1.3.0
    'could_not_open_URI' => 'Nebylo možné otevřít URI.', //cpg1.3.0
    'unsafe_URI' => 'Safety not verifiable.', //cpg1.3.0  //TODO
    'meta_data_failure' => 'Chyba v meta datech', //cpg1.3.0
    'http_401' => '401 Neautorizovaný přístup', //cpg1.3.0
    'http_402' => '402 Požadována platba', //cpg1.3.0
    'http_403' => '403 Zakázaný přístup', //cpg1.3.0
    'http_404' => '404 Nebylo nalezeno', //cpg1.3.0
    'http_500' => '500 Interní chyba serveru', //cpg1.3.0
    'http_503' => '503 Služba není dostupná', //cpg1.3.0
    'MIME_extraction_failure' => 'MIME nebylo rozpoznáno.', //cpg1.3.0
    'MIME_type_unknown' => 'Neznámý MIME typ', //cpg1.3.0
    'cant_create_write' => 'Nebylo možné vytvořit soubor pro zápis.', //cpg1.3.0
    'not_writable' => 'Nebylo možné zapisovat do souboru pro zápis.', //cpg1.3.0
    'cant_read_URI' => 'Nebylo možné přečíst URI/URL', //cpg1.3.0
    'cant_open_write_file' => 'Nebylo možné otevřít soubor pro URI.', //cpg1.3.0
    'cant_write_write_file' => 'Nebylo možné zapisovat do souboru pro URI.', //cpg1.3.0
    'cant_unzip' => 'Nebylo možné rozbalit ZIP archiv.', //cpg1.3.0
    'unknown' => 'Neznámá chyba', //cpg1.3.0
    'succ' => 'Uspěšný Upload', //cpg1.3.0
    'success' => '%s souborů bylo úspěšně nahráno.', //cpg1.3.0
    'add' => 'Prosím stiskněte \'Pokračovat\' pro přidání souborů do galerie.', //cpg1.3.0
    'failure' => 'Chyba při Uploadu', //cpg1.3.0
    'f_info' => 'Informace o souboru', //cpg1.3.0
    'no_place' => 'Předchozí soubor není možné umístit.', //cpg1.3.0
    'yes_place' => 'Předchozí soubor byl úspěšně umístěn.', //cpg1.3.0
    'max_fsize' => 'Max. velikost souboru je %s KB',
    'album' => 'Galerie',
    'picture' => 'Obrázek',
    'pic_title' => 'Nadpis obrázku',
    'description' => 'Popis obrázku',
    'keywords' => 'Klíčová slova (oddělená mezerou)',
    'err_no_alb_uploadables' => 'Zde se nenalézá galerie, do které je povolen upload.', 
    'place_instr_1' => 'Prosím umístěte teď soubory do galerií. Můžete také zadat informace týkající se jednotlivých souborů.', //cpg1.3.0
    'place_instr_2' => 'Další soubory je potřeba umístit. Prosím stiskěte \'Pokračovat\'.', //cpg1.3.0
    'process_complete' => 'Uspěšně jste umístil všechny soubory.', //cpg1.3.0

);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
    'title' => 'Spravovat uživatele',
    'name_a' => 'Jméno vzestup.',
    'name_d' => 'Jméno sestup.',
    'group_a' => 'Skupina vzestup.',
    'group_d' => 'Skupina sestup.',
    'reg_a' => 'Datum registrace vzestup.',
    'reg_d' => 'Datum registrace sestup.',
    'pic_a' => 'Počet obrázků vzestup.',
    'pic_d' => 'Počet obrázků sestup.',
    'disku_a' => 'Využití disku vzestup.',
    'disku_d' => 'Využití disku sestup.',
    'lv_a' => 'Last visit ascending', //cpg1.3.0
    'lv_d' => 'Last visit descending', //cpg1.3.0
    'sort_by' => 'Řadit užřivatele podle',
    'err_no_users' => 'Tabulka uživatelů je prázdná!',
    'err_edit_self' => 'Zde nelze editovat vlastní profil použijte příslušnou volbu pracující s vaším profilem',
    'edit' => 'UPRAVIT',
    'delete' => 'SMAZAT',
    'name' => 'Uživ. jméno',
    'group' => 'Skupina Uživ.',
    'inactive' => 'Neaktivní',
    'operations' => 'Operace',
    'pictures' => 'Obrázky',
    'disk_space' => 'Místo využité / kvóta',
    'registered_on' => 'Registrován',
    'last_visit' => 'Poslední návštěva', //cpg1.3.0
    'u_user_on_p_pages' => '%d uživatelů na %d stránkách',
    'confirm_del' => 'Jste si jist(a), že chcete smazat tohoto uživatele ? \\nVšechny jeho obrázky, galerie a komentáře budou smazány.',
    'mail' => 'MAIL',
    'err_unknown_user' => 'Vybraný uživ. neexistuje !',
    'modify_user' => 'Změnit uživ.',
    'notes' => 'Poznámky',
    'note_list' => '<li>Pokud nechcete změnit heslo ponechte políčko pro heslo prázdné',
    'password' => 'Heslo',
    'user_active' => 'Uživ. je aktivní',
    'user_group' => 'Uživ. Skupina',
    'user_email' => 'Uživ. emaill',
    'user_web_site' => 'Uživ. domácí stránka',
    'create_new_user' => 'Vytvořit nového uživatle.',
    'user_location' => 'Místo Uživ. (např. Praha apod.)',
    'user_interests' => 'Uživ. zájmy',
    'user_occupation' => 'Uživ. povolání',
    'latest_upload' => 'Recent uploads', //cpg1.3.0
    'never' => 'nikdy', //cpg1.3.0

);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
        'title' => 'Změnit velikost obrázku',
        'what_it_does' => 'Co to dělá?',
        'what_update_titles' => 'Aktualizovat nadpisy podle jména souborů',
        'what_delete_title' => 'Smazat nadpisy',
        'what_rebuild' => 'Předělat nahledy a změněné obrázky',
        'what_delete_originals' => 'Smazat originály a nahradit je středními obrázky',
        'file' => 'Soubor',
        'title_set_to' => 'Nastavit nadpis na',
        'submit_form' => 'odeslat',
        'updated_succesfully' => 'Aktualizace proběhla OK',
        'error_create' => 'CHYBA při vytváření',
        'continue' => 'Zpracovatvíce obrázků',
        'main_success' => 'Skoubor %s byl uspěšně použit jako hlavní obrázek',
        'error_rename' => 'Chyba přejmenování %s na %s',
        'error_not_found' => 'Soubor %s nebyl nalezen',
        'back' => 'zpět na halvní',
        'thumbs_wait' => 'Aktualizuji náhledy a/nebo střední obrázky, prosím čekejte...',
        'thumbs_continue_wait' => 'Pokračuji v aktualizaci náhledů a/nebo středních obrázků...',
        'titles_wait' => 'Aktualizuji nadpisy, prosím čekejte...',
        'delete_wait' => 'Mažu nadpisy, prosím čekejte...',
        'replace_wait' => 'Mažu originály a nahrazuji je středními obrázky, prosím čekejte...',
        'instruction' => 'Rychlé instrukce',
        'instruction_action' => 'Vyberte akci',
        'instruction_parameter' => 'Nastavit parametry',
        'instruction_album' => 'Vybrat galerii',
        'instruction_press' => 'Stiskněte %s',
        'update' => 'Aktualizovat náhledy a/nebo střední obrázky',
        'update_what' => 'Co má být aktualizováno',
        'update_thumb' => 'Jen náhledy',
        'update_pic' => 'Pouze střední obrázky',
        'update_both' => 'Obojí náhledy i střední obrázky',
        'update_number' => 'Počet obrázků, které zpracovat na 1 kliknutí',
        'update_option' => '(Snižte číslo pokud máte problémy s timeoutem)',
        'filename_title' => 'Jméno souboru ? Nadpis obrázku',
        'filename_how' => 'Jak se má změnit jméno obrázku?',
        'filename_remove' => 'Odstranit .jpg koncovku a přepsat _ (podtržítka mezerami)',
        'filename_euro' => 'Změnit 2003_11_23_13_20_20.jpg na 23/11/2003 13:20',
        'filename_us' => 'Změnit 2003_11_23_13_20_20.jpg na 11/23/2003 13:20',
        'filename_time' => 'Změnit 2003_11_23_13_20_20.jpg na 13:20',
        'delete' => 'Smazat nadpisy obrázků nebo originální obrázky',
        'delete_title' => 'Smazat nadpisy obrázků',
        'delete_original' => 'Smazat originální obrázky',
        'delete_replace' => 'Smazat originály a nahradit je střední verzí obrázků',
        'select_album' => 'Vybrat galerii',
        'delete_orphans' => 'Smazat osiřelé komentáře (platí pro všechny galerie)', //cpg1.3.0 
        'orphan_comment' => 'Nalezeny osiřelé komentáře', //cpg1.3.0
        'delete' => 'Smazat', //cpg1.3.0 
        'delete_all' => 'Smazat vše', //cpg1.3.0
        'comment' => 'Komentář: ', //cpg1.3.0
        'nonexist' => 'přiřazeno k neexistujícímu souboru # ', //cpg1.3.0
        'phpinfo' => 'Zobrazit phpinfo', //cpg1.3.0
        'update_db' => 'Update databáze', //cpg1.3.0
        'update_db_explanation' => 'Pokud jste vyměnili soubory aplikace galerie coppermine, přidali modifikaci nebo upgradovali ze starší verze, ujistěte se, že jste spustili update databáze. To vytvoří potřebné tabulky a/nebo konfigurační hodnoty ve vaší databázi.', //cpg1.3.0
);
?>
