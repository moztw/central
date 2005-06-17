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
// Tanslation updated by Michal Ambroz <rebus@seznam.cz>                     //
// ------------------------------------------------------------------------- //
// CVS version: $Id: czech.php,v 1.8 2004/07/24 15:04:01 gaugau Exp $
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


$lang_charset = 'iso-8859-2';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytù', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Ne', 'Po', 'Út', 'St', 'Èt', 'Pá', 'So');
$lang_month = array('Leden', 'Únor', 'Bøezen', 'Duben', 'Kvìten', 'Èerven', 'Èervenec', 'Srpen', 'Záøí', 'Øíjen', 'Listopad', 'Prosinec');

// Some common strings
$lang_yes = 'Ano';
$lang_no  = 'Ne';
$lang_back = 'ZPÌT';
$lang_continue = 'POKRAÈOVAT';
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
$lang_bad_words = array('píèa', 'hovno', '*fuck*', 'prdel', 'èùrák', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
        'random' => 'Náhodné obrázky',
        'lastup' => 'Nejnovìj¹í',
        'lastalb'=> 'Naposledy aktualizované galerie',
        'lastcom' => 'Nejnovìj¹í komentáøe',
        'topn' => 'Nejprohlí¾enìj¹í',
        'toprated' => 'Nejlépe hodnocené',
        'lasthits' => 'Naposledy zobrazené',
        'search' => 'Výsledky hledání',
        'favpics'=> 'Oblíbené obrázky',
);

$lang_errors = array(
    'access_denied' => 'Nemáte oprávnìní na tuto stránku',
    'perm_denied' => 'Nemáte dostateèná práva pro potvrzení této operace.',
    'param_missing' => 'Skriptu nebyly pøedány potøebné parametry',
    'non_exist_ap' => 'Vybraná galerie/obrázek neexistuje',
    'quota_exceeded' => 'Vyèerpal(a) jste místo na disku.<br /><br />Va¹e kvóta je[quota]K, Va¹e obrázky zbírají [space]K, pøidáním tohoto obrázku byste svoji kvótu pøekroèil',
    'gd_file_type_err' => 'Pokud pou¾íváte GD knihovnu jsou podporovány jen obrázky JPG a PNG',
    'invalid_image' => 'Tento obrázek je po¹kozen/poru¹en GD knihovna s ním nemù¾e pracovat.',
    'resize_failed' => 'Nelze vytvoøit náhled èi zmen¹ený obrázek',
    'no_img_to_display' => 'Zde není ¾ádný obrázek, který byste si mohl(a) prohlédnout',
    'non_exist_cat' => 'Vybraná kategorie neexistuje',
    'orphan_cat' => 'Podkategorie nemá nadøízenou kategorii. Problém opravte pøes nastavení kategorií.',
    'directory_ro' => 'Do adresáøe \'%s\' nelze zapisovat (nedostateèná práva), obrázky nemohly být smazány.',
    'non_exist_comment' => 'Vybraný komentáø neexistuje',
    'pic_in_invalid_album' => 'Obrázek(y) je/jsou v neexitující galerii (%s)!?',
    'banned' => 'Byl jse vykopnut z tìchto stránek, není Vám umo¾nìno je pou¾ívat.',
    'not_with_udb' => 'Tato funkce je vypnutá jeliko¾ je integrována ve fóru. Buï není po¾adovaná fukce dostupná na tomto systému, nebo tuto/tyto funci/e plní fórum.',
    'offline_title' => 'Odpojeno', //cpg1.3.0
    'offline_text' => 'Galerie je momentálnì odpojena - prosím zkuste to znovu pozdìji', //cpg1.3.0
    'ecards_empty' => 'Momentálnì nejsou k zobraní dostupné ¾ádné záznamy o ecards. Ovìøte prosím, ¾e je zapnutá volba "ecard logging" v konfiguraci coppermine!', //cpg1.3.0
    'action_failed' => 'Akce selhala.  Coppermine není schopno vá¹ po¾adavek zpracovat.', //cpg1.3.0
    'no_zip' => 'Knihovny potøebné pro zpracování ZIP souborù nejsou dostupné.  Prosím kontaktujte Va¹eho administrátora aplikace Coppermine.', //cpg1.3.0
    'zip_type' => 'Nemáte povolení nahrávat na server soubory ZIP.', //cpg1.3.0
);

$lang_bbcode_help = 'Následující znaèky mohou být u¾iteèné: <li>[b]<b>Tuèné</b>[/b]</li> <li>[i]<i>Kurzíva</i>[/i]</li> <li>[url=http://vasedomena.cz/]Text odkazu[/url]</li> <li>[email]uzivatel@domena.cz[/email]</li>'; //cpg1.3.0


// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
    'alb_list_title' => 'Pøejít na seznam galerií',
    'alb_list_lnk' => 'Seznam galerií',
    'my_gal_title' => 'Pøejít do mé osobní galerie',
    'my_gal_lnk' => 'Moje galerie',
    'my_prof_lnk' => 'Mùj Profil',
    'adm_mode_title' => 'Do Admin módu',
    'adm_mode_lnk' => 'Admin mód',
    'usr_mode_title' => 'Do U¾ivatelského módu',
    'usr_mode_lnk' => 'U¾ivatelský mód',
    'upload_pic_title' => 'Nahrát obrázek do gallerie',
    'upload_pic_lnk' => 'Upload obrázku',
    'register_title' => 'Vytvoøit úèet',
    'register_lnk' => 'Registrovat se',
    'login_lnk' => 'Pøihlásit',
    'logout_lnk' => 'Odhlásit',
    'lastup_lnk' => 'Nejnovìj¹í obrázky',
    'lastcom_lnk' => 'Poslední komentáøe',
    'topn_lnk' => 'Nejprohlí¾enìj¹í',
    'toprated_lnk' => 'Nejlépe hodnocené',
    'search_lnk' => 'Vyhledávání',
    'fav_lnk' => 'Oblíbené',
    'memberlist_title' => 'Uka¾ seznam èlenù', //cpg1.3.0
    'memberlist_lnk' => 'Seznam èlenù', //cpg1.3.0
    'faq_title' => 'FAQ = nejèastìji kladené otázky na galerii &quot;Coppermine&quot;', //cpg1.3.0
    'faq_lnk' => 'FAQ', //cpg1.3.0

);

$lang_gallery_admin_menu = array(
    'upl_app_lnk' => 'Potvrzení uploadu',
    'config_lnk' => 'Nastavení',
    'albums_lnk' => 'Galerie',
    'categories_lnk' => 'Kategorie',
    'users_lnk' => 'U¾ivatelé',
    'groups_lnk' => 'U¾. skupiny',
    'comments_lnk' => 'Komentáøe',
    'searchnew_lnk' => 'Dávkové pøidání obrázkù',
    'util_lnk' => 'Zmìnit velikost obrázkù',
    'ban_lnk' => 'Vykopnout u¾ivatele',
);

$lang_user_admin_menu = array(
    'albmgr_lnk' => 'Vytvoøit / organizovat moje galerie',
    'modifyalb_lnk' => 'Zmìnit moje galerie',
    'my_prof_lnk' => 'Mùj profil',
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
    'sort_da' => 'Øadit vzestupnì podle data',
    'sort_dd' => 'Øadit sestupnì podle data',
    'sort_na' => 'Øadit vzestupnì podle jména',
    'sort_nd' => 'Øadit sestupnì podle jména',
    'sort_ta' => 'Øadit podle nadpisu vzestupnì',
    'sort_td' => 'Øadit podle nadpisu sestupnì',
    'download_zip' => 'Download jako Zip soubor', //cpg1.3.0
    'pic_on_page' => '%d obrázkkù na %d stránkách',
    'user_on_page' => '%d u¾ivatelù na %d stránkách'
);

$lang_img_nav_bar = array(
    'thumb_title' => 'Zpìt na stránku s náhledy',
    'pic_info_title' => 'Zobraz/skryj informace o obrázku',
    'slideshow_title' => 'Slideshow',
    'ecard_title' => 'Poslat tento obrázek jako pohlednici',
    'ecard_disabled' => 'Pohlednice jsou vypnuté',
    'ecard_disabled_msg' => 'Nemáte dostateèná práva pro zaslání pohlednice',
    'prev_title' => 'Pøedchozí obrázek',
    'next_title' => 'Dal¹í obrázek',
    'pic_pos' => 'OBRÁZEK %s/%s',
);

$lang_rate_pic = array(
    'rate_this_pic' => 'Hodnotit tento obrázek ',
    'no_votes' => '(¾ádné hodnocení)',
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
    'line' => 'Øádka: ',
);

$lang_display_thumbnails = array(
    'filename' => 'Jméno souboru : ',
    'filesize' => 'Velikost souboru : ',
    'dimensions' => 'Rozmìry : ',
    'date_added' => 'Datum pøidání : '
);

$lang_get_pic_data = array(
    'n_comments' => '%s Komentáø(ù)',
    'n_views' => '%s zobrazení',
    'n_votes' => '(%s hlas(ù))'
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Debug Info', //cpg1.3.0
  'select_all' => 'Vybrat v¹e', //cpg1.3.0
  'copy_and_paste_instructions' => 'Pokud se chystáte po¾adovat pomoc na podpoøe coppermine, vlo¾te tento ladící výstup do va¹echo pøíspìvku. Pøed takovým vlo¾ením se ujistìte, ¾e jste v¹echna va¹e hesla z tohoto textu nahradili pomocí "***".', //cpg1.3.0
  'phpinfo' => 'Zobrazit phpinfo', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => 'Pøednastavený jazyk', //cpg1.3.0
  'choose_language' => 'Vyberte Vá¹ jazyk', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'Pøednastavený téma', //cpg1.3.0
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
    0 => 'Opou¹tím Admin Mód....:-(',
    1 => 'Vstupuji do Admin Módu....:-)',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
    'alb_need_name' => 'Galerie musí mít jméno',
    'confirm_modifs' => 'Jste si jist(a) tìmito zmìnami ?',
    'no_change' => 'Neudìlal(a) jste ¾ádné zmìny !',
    'new_album' => 'Nová galerie',
    'confirm_delete1' => 'Jste si jist(a), ¾e chcete smazat tuto galerii ?',
    'confirm_delete2' => '\nV¹echny obrázky a komentáøe budou smazány !',
    'select_first' => 'Nejprve vyberte galerii',
    'alb_mrg' => 'Správce galerií',
    'my_gallery' => '* Moje galerie *',
    'no_category' => '* Není kategorie *',
    'delete' => 'Smazat',
    'new' => 'Nový/á',
    'apply_modifs' => 'Potvrdit zmìny',
    'select_category' => 'Vybrat kategorii',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
    'miss_param' => 'Parametry potøebné pro \'%s\'operaci not supplied !',
    'unknown_cat' => 'Vybraná kategorie v databázi neexistuje',
    'usergal_cat_ro' => 'Nelze smazat u¾ivatelské galerie !',
    'manage_cat' => 'Spravovat kategorie',
    'confirm_delete' => 'Opravdu chcete SMAZAT tuto kategorii',
    'category' => 'Kategorie',
    'operations' => 'Operace',
    'move_into' => 'Pøesunout do',
    'update_create' => 'Aktualizovat/Vytvoøit kategorii',
    'parent_cat' => 'Nadøazená kategorie',
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
    'save_cfg' => 'Ulo¾it konfiguraci',
    'notes' => 'Poznámky',
    'info' => 'Informace',
    'upd_success' => 'Konfigurace byla zmìnìna',
    'restore_success' => 'Konfigurace byla nastavena na výchozí nastavení',
    'name_a' => 'Jméno vzestupnì',
    'name_d' => 'Jméno sestupnì',
    'title_a' => 'Nadpis vzestupnì',
    'title_d' => 'Nadpis sestupnì',
    'date_a' => 'Datum vzestupnì',
    'date_d' => 'Datum sestupnì',
    'th_any' => 'Max Aspect',
    'th_ht' => 'Vý¹ka',
    'th_wd' => '©íøka',
    'label' => 'popiska', //cpg1.3.0
    'item' => 'polo¾ka', //cpg1.3.0
    'debug_everyone' => 'Ka¾dý', //cpg1.3.0
    'debug_admin' => 'Pouze Admin', //cpg1.3.0

);

if (defined('CONFIG_PHP')) $lang_config_data = array(
    'Základní nastavení',
    array('Jméno gallerie', 'gallery_name', 0),
    array('Popis Galerie', 'gallery_description', 0),
    array('Email administrátora galerie', 'gallery_admin_email', 0),
    array('Cílová adresa pro odkaz \'Zobrazit dal¹í obrázky\' v odkazu pohlednice', 'ecards_more_pic_target', 0),
    array('Galrie je odpojena', 'offline', 1), //cpg1.3.0
    array('Logovat ecards', 'log_ecards', 1), //cpg1.3.0
    array('Povolit ZIP-stahování oblíbených', 'enable_zipdownload', 1), //cpg1.3.0

    'Jazyk, Témata &amp; nastavení znakové sady',
    array('Jazyk', 'lang', 5),
    array('Témátko', 'theme', 6),
    array('Zobrazit seznam jazykù', 'language_list', 1), //cpg1.3.0
    array('Zobrazit vlajky jazykù', 'language_flags', 8), //cpg1.3.0 
    array('Zobrazit &quot;reset&quot; ve výbìru jazyka', 'language_reset', 1), //cpg1.3.0
    array('Zobrazit seznam témat', 'theme_list', 1), //cpg1.3.0
    array('Zobrazit &quot;reset&quot; ve výbìru témat', 'theme_reset', 1), //cpg1.3.0
    array('Zobrazit FAQ', 'display_faq', 1), //cpg1.3.0
    array('Zobrazit nápovìdu bbcode', 'show_bbcode_help', 1), //cpg1.3.0
    array('Kódování znakù', 'charset', 4), //cpg1.3.0

    'Nastavení zobrazení',
    array('©íøka hlavní tabulky v (pixelech nebo %)', 'main_table_width', 0),
    array('Poèet úrovní subkategorií', 'subcat_level', 0),
    array('Poèet galerií na stránku', 'albums_per_page', 0),
    array('Poèet sloupcù v pøehledu galerií', 'album_list_cols', 0),
    array('Velikost náhledù v pixelech', 'alb_list_thumb_size', 0),
    array('Obsah hlavní stránky', 'main_page_layout', 0),
    array('Ukazovat v kategoriích náhledy galerií první úrovnì','first_level',1),

    'Zobrazení náhledù',
    array('Poèet sloupcù na stránku', 'thumbcols', 0),
    array('Poèet øádkù na stránku', 'thumbrows', 0),
    array('Maximální mno¾ství zálo¾ek', 'max_tabs', 0),
    array('Zobrazit legendu obrázku pod náhledem', 'caption_in_thumbview', 1),
    array('Zobrazit poèet shlédnutí pod náhledem', 'views_in_thumbview', 1), //cpg1.3.0
    array('Zobrazit poèet komentáøù pod náhldem', 'display_comment_count', 1),
    array('Zobrazit jméno autora pod náhledem', 'display_uploader', 1), //cpg1.3.0
    array('Základní øazení náhledù', 'default_sort_order', 3),
    array('Min. poèet hlasù potøebný k zaøazení do seznamu \'Nejlépe hodnocené\'', 'min_votes_for_rating', 0),

    'Zobrazení obrázkù &amp; Nastavení komentáøù',
    array('©íøka tabulky pro zobrazení obrázku (v pixelech nebo %)', 'picture_table_width', 0),
    array('V¾dy zobrazit podrobné info', 'display_pic_info', 1),
    array('CENZUROVAT slova v komentáøích', 'filter_bad_words', 1),
    array('Povolit smajlíky v komentáøích', 'enable_smilies', 1),
    array('Maximální délka popisu obrázku', 'max_img_desc_length', 0),
    array('Maximální délka slova v komentáøi', 'max_com_wlength', 0),
    array('Maximální mno¾ství øádkù v komentáøi', 'max_com_lines', 0),
    array('Maximální délka komentáøe', 'max_com_size', 0),
    array('Ukázat filmový prou¾ek', 'display_film_strip', 1),
    array('Poèet polo¾ek ve filmovém prou¾ku', 'max_film_strip_items', 0),
    array('Upozornit adminitratora na komentáøe pomocí emailu', 'email_comment_notification', 1), //cpg1.3.0 
    array('Slideshow interval v milisekundách (1 sekunda = 1000 milisekund)', 'slideshow_interval', 0), //cpg1.3.0 

    'Obrázky a nastavení náhledù',
    array('Kvalita souborù JPEG', 'jpeg_qual', 0),
    array('Maximální rozmìry náhledu <b>*</b>', 'thumb_width', 0),
    array('Pou¾ít rozmìr ( ¹íøka nebo vý¹ka nebo maximální rozmìr náhledu )<b>*</b>', 'thumb_use', 7),
    array('Vytvoøit støední obrázek','make_intermediate',1),
    array('Maximální ¹íøka nebo vý¹ka støeního obrázku <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0), //cpg1.3.0
    array('Maximální velikost uploadovaných obrázkù (KB)', 'max_upl_size', 0),
    array('Maximální rozmìry uploadovaných obrázkù (v pixelech)', 'max_upl_width_height', 0),

    'Obrázky a náhledy roz¹íøené nastavení',
    array('Zobrazit ikonu zamknuté galerie nepøihlá¹enému u¾ivateli.','show_private',1),
    array('Znaky zakázané v názvech souborù', 'forbiden_fname_char',0),
    //array('Povolené koncovky uploadovaných souborù', 'allowed_file_extensions',0),
    array('Povolené typy obrázkù', 'allowed_img_types',0), //cpg1.3.0
    array('Povolené typy videa', 'allowed_mov_types',0), //cpg1.3.0
    array('Povolené typy audia', 'allowed_snd_types',0), //cpg1.3.0
    array('Povolené typy documentù', 'allowed_doc_types',0), //cpg1.3.0
    array('Metoda zmìny velikosti obrázkù','thumb_method',2),
    array('Cesta k ImageMagicu (pøíklad /usr/bin/X11/)', 'impath', 0),
    //array('Povolené typy obrázkù (pouze pro ImageMagic)', 'allowed_img_types',0),
    array('Parametry pro ImageMagic', 'im_options', 0),
    array('Èíst EXIF data ze souborù JPEG', 'read_exif_data', 1),
    array('Èíst IPTC data ze souborù JPEG', 'read_iptc_data', 1), //cpg1.3.0
    array('Adresáø pro galerie <b>*</b>', 'fullpath', 0),
    array('Adresáø pro galerie u¾ivatelù <b>*</b>', 'userpics', 0),
    array('Prefix pro støednì velké obrázky <b>*</b>', 'normal_pfx', 0),
    array('Prefix pro náhledy <b>*</b>', 'thumb_pfx', 0),
    array('Základní mód pro adresáøe', 'default_dir_mode', 0),
    array('Základní mód pro obrázky', 'default_file_mode', 0),

    'Nastavení u¾ivatelù',
    array('Povolit registraci nových u¾ivatelù', 'allow_user_registration', 1),
    array('Pro registraci vy¾adovat potvrzení admina', 'reg_requires_valid_email', 1),
    array('Upozornit administrátora na registraci nového u¾ivatele pomocí emailu', 'reg_notify_admin_email', 1), //cpg1.3.0
    array('Povolit pro dva u¾ivatele stejný email', 'allow_duplicate_emails_addr', 1),
    array('Mají mít u¾ivatelé vlastní galerii?', 'allow_private_albums', 1),
    array('Upozornit administrátora na vlo¾ený soubor èekající na schválení', 'upl_notify_admin_email', 1), //cpg1.3.0
    array('Dovolit pøihlá¹eným u¾ivatelùm, aby vidìli seznam u¾ivatelù', 'allow_memberlist', 1), //cpg1.3.0

    'Vlastní polo¾ky pro popis obrázku (Nechte prázné a nezobrazí se)',
    array('Jméno polo¾ky 1', 'user_field1_name', 0),
    array('Jméno polo¾ky 2', 'user_field2_name', 0),
    array('Jméno polo¾ky 3', 'user_field3_name', 0),
    array('Jméno polo¾ky 4', 'user_field4_name', 0),

    'Cookies &amp; Kódová stráka',
    array('Jméno cookies u¾ívané programem (expertní volba)', 'cookie_name', 0),
    array('Cesta pro cookies u¾ívaná programem (expertní volba)', 'cookie_path', 0),
    array('Kódová stránka', 'charset', 4),

    'Dal¹í nastavení',
    array('Zapnout ladící mód (jen pro testování)', 'debug_mode', 1),
    array('Zobrazovat v ladícím módu upozornìní', 'debug_notice', 1), //cpg1.3.0


    '<br /><div align="center">(*) Polo¾ky oznaèené * se NESMÍ zmìnit pokud ji¾ máte ve va¹í galerii nahrané obrázky</div><br />
    <a name="notice2"></a>(**) Pøi zmìnì tohoto nastavení se zmìna projeví pouze u souborù, které jsou 
	pøidány a¾ od tohoto okam¾iku. Je doporuèeno nemìnit toto nastavení pokud uz jsou v galerii nìjaké soubory. 
	Pøest je mo¾né nechat promítnout zmìny i na u¾ existující soubory pomocí nástroje
	&quot;<a href="util.php">admin tools</a> (resize pictures)&quot; v admin menu.</div><br />', //cpg1.3.0

);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //
if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Zasílání ecards', //cpg1.3.0
  'ecard_sender' => 'Odesílatel', //cpg1.3.0
  'ecard_recipient' => 'Pøíjemce', //cpg1.3.0
  'ecard_date' => 'Datum', //cpg1.3.0
  'ecard_display' => 'Zobrazit ecard', //cpg1.3.0
  'ecard_name' => 'Jméno', //cpg1.3.0
  'ecard_email' => 'Email', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'vzestupnì', //cpg1.3.0
  'ecard_descending' =>'sestupnì', //cpg1.3.0
  'ecard_sorted' => 'Setøídìné', //cpg1.3.0
  'ecard_by_date' => 'podle data', //cpg1.3.0
  'ecard_by_sender_name' => 'podle jména odesílatele', //cpg1.3.0
  'ecard_by_sender_email' => 'podle emailu odesílatele', //cpg1.3.0
  'ecard_by_sender_ip' => 'podle IP addressy odesílatele', //cpg1.3.0
  'ecard_by_recipient_name' => 'podle jména pøíjemce', //cpg1.3.0
  'ecard_by_recipient_email' => 'podle emailu pøíjemce', //cpg1.3.0
  'ecard_number' => 'zobrazení záznamu %s a¾ %s z %s', //cpg1.3.0
  'ecard_goto_page' => 'pøechod na stranu', //cpg1.3.0
  'ecard_records_per_page' => 'Záznamu na jedné stránce', //cpg1.3.0
  'check_all' => 'Zatrhnout v¹e', //cpg1.3.0
  'uncheck_all' => 'Odznaèit v¹e', //cpg1.3.0
  'ecards_delete_selected' => 'Smazat vybrané ecards', //cpg1.3.0
  'ecards_delete_confirm' => 'Jste si jist, ¾e chcete smazat záznamy? Nastavte checkbox!', //cpg1.3.0 
  'ecards_delete_sure' => 'Jsem si jist.', //cpg1.3.0
);
                                                                                                                  



// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
    'empty_name_or_com' => 'Vlo¾te jméno a Vá¹ komentáø',
    'com_added' => 'Vá¹ komentáø byl pøidán',
    'alb_need_title' => 'Prosím, dejte galerii nadpis !',
    'no_udp_needed' => 'Aktualizace není tøeba.',
    'alb_updated' => 'Galerie byla pøidána',
    'unknown_album' => 'Vybraná galerie neexistuje nebo nemáte práva pro upload do této galerie',
    'no_pic_uploaded' => 'Obrázek nebyl uploadován!<br /><br />zkontrolujte zda server podporuje upload souborù, èi zda jste opravdu zadal(a) obrázek k uploadu...',
    'err_mkdir' => '  ERROR: Chyba pøi vytváøení adresáøe (nebyl vytvoøen) %s !',
    'dest_dir_ro' => 'Do cílového adresáøe %s nemù¾e skript zapisovat (zkontrolujte práva) !',
    'err_move' => 'Nelze pøesunout %s do %s !',
    'err_fsize_too_large' => 'Rozmìry obrázku, který se sna¾íte uploadovat, jsou pøíli¹ velké (max. velikost je %s x %s) !',
    'err_imgsize_too_large' => 'Velikost souboru, který se sna¾íte uploadovat, je pøíli¹ velká (max. velikost je %s KB) !',
    'err_invalid_img' => 'Soubor který jste nahrál(a) na server není validním obrázkem !',
    'allowed_img_types' => 'Mù¾ete uploadovat pouze obrázky %s .',
    'err_insert_pic' => 'Obrázek \'%s\' nelze vlo¾it do galerie ',
    'upload_success' => 'Vá¹ obrázek byl nahrán na server bez problémù<br /><br />Bude viditelný po schválení adminem.',
    'notify_admin_email_subject' => '%s - upozornìní na Upload', //cpg1.3.0 
    'notify_admin_email_body' => '%s nahrál do galerie obrázek, který vy¾aduje va¹e potvrzení. Nav¹tivte prosím %s', //cpg1.3.0
    'info' => 'Informace',
    'com_added' => 'Komentáøu pøidáno',
    'alb_updated' => 'Galerie aktualizována',
    'err_comment_empty' => 'Vá¹ komentáø je prázdný !',
    'err_invalid_fext' => 'Pouze soubory s následujícími koncovkami jsou podporované : <br /><br />%s.',
    'no_flood' => 'Jste autor posledního komentáøe k tomuto obrázku<br /><br />Pokud ho chcete zmìnit pou¾ijte volbu upravit ',
    'redirect_msg' => 'Právì jste pøesmìrováván(a).<br /><br /><br />Kliknìte na \'POKRAÈOVAT\' pokud se stránka nepøesmìruje sama',
    'upl_success' => 'Vá¹ obrázek byl v poøádku pøidán',
    'email_comment_subject' => 'Komentáø byl pøidán do Coppermine Photo Gallery', //cpg1.3.0 
    'email_comment_body' => 'Nìkdo pøidal komentáø do va¹í galerie. Prohlédnìte si ho na', //cpg1.3.0

);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
    'caption' => 'Legenda(popisek)',
    'fs_pic' => 'pùvodní velikost obrázku',
    'del_success' => 'bezchybnì smazáno',
    'ns_pic' => 'normální velikost obrázku',
    'err_del' => 'nelze smazat',
    'thumb_pic' => 'náhled',
    'comment' => 'komentáø',
    'im_in_alb' => 'patøí do galerie',
    'alb_del_success' => 'Galerie \'%s\' smazána',
    'alb_mgr' => 'Správce galerií',
    'err_invalid_data' => 'Obdr¾ena chybná data \'%s\'',
    'create_alb' => 'Vytváøím galerii \'%s\'',
    'update_alb' => 'Aktualizuji galerii \'%s\' s nadpisem \'%s\' a seznamem \'%s\'',
    'del_pic' => 'Smazat obrázek',
    'del_alb' => 'Smazat galerii',
    'del_user' => 'Smazat u¾ivatele',
    'err_unknown_user' => 'Vybraný u¾ivatel neexistuje !',
    'comment_deleted' => 'Komentáø bezchybnì smazán ! ',
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
    'confirm_del' => 'Jste si jist, ¾e chcete smazat tento obrázek ? \\nPøilo¾ené komentáøe budou straceny.',
      'del_pic' => 'SMAZAT TENTO OBRÁZEK',
    'size' => '%s x %s pixelelù',
    'views' => '%s krát',
    'slideshow' => 'Slideshow',
    'stop_slideshow' => 'ZASTAVIT SLIDESHOW',
    'view_fs' => 'kliknìte pro zobrazení pùvodního obrázku',
    'edit_pic' => 'Edit description', //cpg1.3.0
    'crop_pic' => 'Crop and Rotate', //cpg1.3.0

);

$lang_picinfo = array(
    'title' =>'Informace o obrázku',
    'Filename' => 'Jméno souboru',
    'Album name' => 'Jméno galerie',
    'Rating' => 'Hodnocení (%s hlas(ù))',
    'Keywords' => 'Klíèová slova',
    'File Size' => 'Velikost souboru',
    'Dimensions' => 'Rozmìry',
    'Displayed' => 'Zobrazeno',
    'Camera' => 'Fotoaparát',
    'Date taken' => 'Datum poøízení snímku',
    'Aperture' => 'Clona',
    'Exposure time' => 'Expozièní èas',
    'Focal length' => 'Ohnisková vzdálenost',
    'Comment' => 'Komentáøe',
    'addFav' => 'Pøidat k oblíbeným',
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
    'edit_title' => 'Upravit tento komentáø',
    'confirm_delete' => 'Jste si jist(a), ¾e chcete smazat tento komentáø ?',
    'add_your_comment' => 'Pøidat komentáø',
    'name'=>'Jméno',
    'comment'=>'Komentáø',
    'your_name' => 'Anonym',
);

$lang_fullsize_popup = array(
        'click_to_close' => 'Kliknutím na obrázek zavøete okno',
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
    'view_more_pics' => 'Klikni pro dal¹í obrázky !',
    'send_success' => 'Va¹e pohlednice byla odeslána',
    'send_failed' => 'Omlouváme se, ale server nebyl schopen odeslat Va¹í pohlednici zkuste
     to znovu za chvíli...',
    'from' => 'Od',
    'your_name' => 'Va¹e jméno',
    'your_email' => 'Vá¹ email',
    'to' => 'Komu',
    'rcpt_name' => 'Jméno pøíjemce',
    'rcpt_email' => 'Doruèit na email',
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
    'keywords' => 'Klíèová slova',
    'pic_info_str' => '%sx%s - %sKB - %s zobrazení - %s hlas(ù)',
    'approve' => 'Schválit obrázek',
    'postpone_app' => 'Odlo¾it schválení',
    'del_pic' => 'Smazat obrázek',
    'read_exif' => 'Naèíst znovu EXIF info', //cpg1.3.0
    'reset_view_count' => 'Vynulovat poèítadlo zobrazení',
    'reset_votes' => 'Vynulovat hlasy',
    'del_comm' => 'Smazat komentáøe',
    'upl_approval' => 'Potvrzení uploadu',
    'edit_pics' => 'Upravit obrázky',
    'see_next' => 'Zobrazit dal¹í obrázky',
    'see_prev' => 'Zobrazit pøedchozí obrázky',
    'n_pic' => '%s obrázkù',
    'n_of_pic_to_disp' => 'Poèet obrázku k zobrazení',
    'apply' => 'Ulo¾it zmìny',
    'crop_title' => 'Coppermine Editor Obrázkù', //cpg1.3.0 
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
  'faq' => 'Èasto kladené otázky', //cpg1.3.0
  'toc' => 'Obsah', //cpg1.3.0
  'question' => 'Otázka: ', //cpg1.3.0
  'answer' => 'Odpovìï: ', //cpg1.3.0
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
  'forgot_passwd' => 'Pøipomenutí hesla', //cpg1.3.0
  'err_already_logged_in' => 'U¾ jste pøihlá¹en(a)!', //cpg1.3.0
  'enter_username_email' => 'Zadejte va¹e pøihla¹ovací jméno a email adresu', //cpg1.3.0
  'submit' => 'Proveï', //cpg1.3.0
  'failed_sending_email' => 'Email s pøipomenutím hesla nemohl být odeslán!', //cpg1.3.0
  'email_sent' => 'Na adresu 5s byl odeslán dopis z va¹ím u¾ivatelským jménem a heslem', //cpg1.3.0
  'err_unk_user' => 'Zadaný u¾ivatel neexistuje!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - Pripomenuti hesla', //cpg1.3.0
  'passwd_reminder_body' => 'Po¾ádali jste o pøipomenutí va¹ich pøihla¹ovacích údajù:
U¾ivatelské jméno: %s
Heslo:             %s
Kliknìte na %s pro pøihlá¹ení.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
    'group_name' => 'Jméno skupiny',
    'disk_quota' => 'Disková kvóta',
    'can_rate' => 'Mohou hodnotit obrázky',
    'can_send_ecards' => 'mohou posílat pohlednice',
    'can_post_com' => 'Mohou posílat komentáøe',
    'can_upload' => 'Mohou nahrávat obrázky',
    'can_have_gallery' => 'Mohou mít osobní galerii',
    'apply' => 'Ulo¾it zmìny',
    'create_new_group' => 'Vytvoøit novou skupinu',
    'del_groups' => 'Smazat vybrané skupiny',
    'confirm_del' => 'Pokud sma¾ete tuto skupinu v¹ichni u¾ivatelé, patøící do této skupiny budou pøesunuti do skupiny \'Registered\' !\n\nPøejete si pokraèovat ?',
    'title' => 'Spravovat u¾ivatelské skupiny',
    'approval_1' => 'Potvrzení veøejného. Upl. (1)',
    'approval_2' => 'Potvrzení soukromého. Upl. (2)',
    'upload_form_config' => 'Konfigurace formuláøe pro upload', //cpg1.3.0 
    'upload_form_config_values' => array( 'Pouze jednotlivé soubory', 'Pouze mnoho souborù', 'Pouze URI uploads', 'Pouze ZIP upload', 'Soubory-URI', 'Soubory-ZIP', 'URI-ZIP', 'Soubory-URI-ZIP'), //cpg1.3.0  //TODO
    'custom_user_upload'=>'U¾ivatel mù¾e upravit poèet vstupních políèek pro upload?', //cpg1.3.0
    'num_file_upload'=>'Maximální/pøesný poèet políèek pro upload souborù', //cpg1.3.0
    'num_URI_upload'=>'Maximální/pøesný poèet políèek pro upload URI', //cpg1.3.0

    'note1' => '<b>(1)</b> Upload do veøejných galerií vy¾aduje potvrzení adminem',
    'note2' => '<b>(2)</b> Upload do galerie patøící u¾ivateli vy¾aduje potvrzení adminem',
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
    'confirm_delete' => 'Jste si jist(a), ¾e chcete smazat tuto galerii? \\nV¹echny obrázky a komentáøe pùjdou do pekla taky. Pøejete si pokraèovat.',
    'delete' => 'SMAZAT',
    'modify' => 'VLASTNOSTI',
    'edit_pics' => 'UPRAVIT OBR.',
);

$lang_list_categories = array(
    'home' => 'Domù',
    'stat1' => '<b>[pictures]</b> obrázkù v <b>[albums]</b> galeriích v <b>[cat]</b> kategoriích s <b>[comments]</b> komentáøi zobrazeno <b>[views]</b> krát',
    'stat2' => '<b>[pictures]</b> obrázkù v <b>[albums]</b> galeriích zobrazeno <b>[views]</b> krát',
    'xx_s_gallery' => '%s\' galerií',
    'stat3' => '<b>[pictures]</b> obrázkù v <b>[albums]</b> galeriích s <b>[comments]</b> komentáøi zobrazeno <b>[views]</b> krát'
);

$lang_list_users = array(
    'user_list' => 'Seznam u¾ivatelù',
    'no_user_gal' => 'Nejsou ¾ádné u¾ivatelské alerie',
    'n_albums' => '%s galerií',
    'n_pics' => '%s obrázkù'
);

$lang_list_albums = array(
    'n_pictures' => '%s obrázkù',
    'last_added' => ', poslední pøidán %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
    'login' => 'Pøihlá¹ení',
    'enter_login_pswd' => 'Zadejte Va¹e jméno a heslo pro pøihlá¹ení',
    'username' => 'Jméno',
    'password' => 'Heslo',
    'remember_me' => 'Pamatuj si mì',
    'welcome' => 'Vítej u nás %s ...',
    'err_login' => '*** Chyba pøi pøihlá¹ení skuste to znova ***',
    'err_already_logged_in' => 'Ji¾ jste pøihlá¹en !',
    'forgot_password_link' => 'Zapomnìl jsem své heslo.', //cpg1.3.0

);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
    'logout' => 'Odhlásit',
    'bye' => 'Tak si to u¾ij zase jinde %s ...',
    'err_not_loged_in' => 'Nejste pøihlá¹en !',
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
    'alb_perm' => 'Pøístupová práva pro tuto galerii',
    'can_view' => 'Album mù¾ou prohlí¾et',
    'can_upload' => 'Náv¹tìvníci smìjí pøidávat obrázky',
    'can_post_comments' => 'Povolit komentáøe',
    'can_rate' => 'Náv¹tìvníci mohou hlasovat',
    'user_gal' => 'User Gallery',
    'no_cat' => '* Není kategorie *',
    'alb_empty' => 'Galerie je prázdná',
    'last_uploaded' => 'Nejnovìj¹í obrázek',
    'public_alb' => 'kdokoliv (veøejná galerie)',
    'me_only' => 'Pouze já',
    'owner_only' => 'Pouze vlastník (%s)',
    'groupp_only' => 'Èlenové skupiny \'%s\'',
    'err_no_alb_to_modify' => 'Album nelze modifikovat v databázi.',
    'update' => 'Aktualizovat album',
    'notice1' => '(*) depending on %sgroups%s settings', //cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
    'already_rated' => 'Tento obázek jste ji¾ hodnotil(a)',
    'rate_ok' => 'Vás hlas byl pøijat. Dìkujeme.',
    'forbidden' => 'You can not rate your own files.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Administrátoøi serveru {SITE_NAME}, pota¾mo této galerie si vyhrazují právo zásahu do obsahu galerie napø. komentáøe, mazání obrázkù pøípadnì úprava (pokud poru¹ují pravidla galerie nebo dobré mravy).
Pokud budou obrázky nahrané u¾ivetelem poru¹ovat zákon(y) budou ihned po zji¹tìní jejich umístìní na serveru smazány. Administrátoøi/provozovatelé této galerie si distancují od
pøípadného závadného obsahu nahraného na server u¾ivateli. Vlastníkem dat v galerii jsou jejich autoøi. Administrátoøi pøedpokládají, ¾e na server jsou umís»ovaná u¾ivateli pouze obrázky k ním¾ vlastní u¾ivatel autorská práva.
<br />
Pokud souhlasíte, ¾e nebudete posílat jakýkoliv závadný materiál jako vulgární a obscéní obrázky/komentáøe, jakýkoliv materiál vzbuzující nenávist, rasismus, nebo jiný materiál poru¹ující zákony. Souhlasíte, ¾e administrátoøi, provozovatelé a moderátoøi  {SITE_NAME}   mají právo smazat pøípadnì upravit jakýkoliv materiál kdykoliv to uznají za vhodné. Vlo¾ené informace budou ulo¾ené na serveru a v databázi a nebudou poskytnuty ¾ádné tøetí stranì bez va¹eho souhlasu. Administátoøi/povozovatelé serveru  v¹ak nejsou ani nebudou ruèit za data na serveru ulo¾ená pokud dojde k jakémukoliv útoku na sever.
<br />
<br />
Tyto stránky vyu¾ívají k ulo¾ení u¾ivatelských dat cookies. Cookies slou¾í pouze pro zvý¹ení konfortu pøi pou¾ívání této aplikace. Emailová adresa slou¾í jen pro potvrzení va¹ich údajù a poslání hesla.<br />
<br />
Kliknutím na 'Souhlasím' souhlasíte z vý¹e uvedenými pravidly..
EOT;

$lang_register_php = array(
    'page_title' => 'Registrace nového u¾ivatele',
    'term_cond' => 'Podmínky a pravidla',
    'i_agree' => 'Souhlasím',
    'submit' => 'Poslat registraci',
    'err_user_exists' => 'Zadané u¾ivatelské jméno ji¾ existuje vyberte si prosím jiné',
    'err_password_mismatch' => 'Hesla se musí schodovat pokuste je obì zadat znovu',
    'err_uname_short' => 'Minimální délka u¾ivatelského jména je 2 znaky',
    'err_password_short' => 'Heslo musí být alespoò 2 znaky dlouhé',
    'err_uname_pass_diff' => 'Jméno a heslo se nesmí shodovat',
    'err_invalid_email' => 'Byla zadána neplatná emailová adresa',
    'err_duplicate_email' => 'Jiný u¾ivatel se zaregistroval se zadaným emailem. Email musí být jedineèný',
    'enter_info' => 'Zadané registraèní informace',
    'required_info' => 'Vy¾adované informace',
    'optional_info' => 'Volitelné informace',
    'username' => 'Jméno',
    'password' => 'Heslo',
    'password_again' => 'Heslo (potvrzení)',
    'email' => 'Email',
    'location' => 'Místo (napø. Brno apod.)',
    'interests' => 'Zájmy',
    'website' => 'Domácí stránka',
    'occupation' => 'Povolání',
    'error' => 'CHYBA',
    'confirm_email_subject' => '%s - Potvrzení registracce',
    'information' => 'Informace',
    'failed_sending_email' => 'Nelze odeslat potvrzení registace !',
    'thank_you' => 'Dìkujeme za registraci.<br /><br />Na adresu zadanou pøi registraci Vám budou doruèeny informace o aktivaci va¹eho úètu',
    'acct_created' => 'Vá¹ u¾ivatelský úèet byl bezchybnì vytvoøen. Nyní se pøihla¹te pomocí va¹eho jména a hesla',
    'acct_active' => 'Vá¹ úèet je nyní aktivní pøihla¹te se pomocí va¹eho jména a hesla.',
    'acct_already_act' => 'Vá¹ úèet je ji¾ aktivní !',
    'acct_act_failed' => 'Tento úèet nmù¾e být aktivován !',
    'err_unk_user' => 'Vybraný u¾ivatel neexistuje !',
    'x_s_profile' => '%s\' profil',
    'group' => 'Skupina',
    'reg_date' => 'Pøipojen',
    'disk_usage' => 'Vyu¾ití disku',
    'change_pass' => 'Zmìnit heslo',
    'current_pass' => 'Souèasné heslo',
    'new_pass' => 'Nové heslo',
    'new_pass_again' => 'Nové heslo (kontola)',
    'err_curr_pass' => 'Souèasné heslo zadáno nesprávnì',
    'apply_modif' => 'potvrdit zmìny',
    'change_pass' => 'Zmìnit heslo',
    'update_success' => 'Vá¹ profil byl aktualizován',
    'pass_chg_success' => 'Vy¹e heslo bylo zmìnìno',
    'pass_chg_error' => 'Va¹e heslo nebylo zmìnìno',
    'notify_admin_email_subject' => '%s - upozorneni na registraci', //cpg1.3.0 
    'notify_admin_email_body' => 'Nový u¾ivatel se jménem "%s" se registroval ve va¹í galerii', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
Dìkujeme za registraci na {SITE_NAME}

Va¹e jméno je : "{USER_NAME}"
Va¹e heslo je: "{PASSWORD}"

Pro aktivaci va¹eho úètu je pøeba kliknout na odkaz ní¾e nebo ho zkopírovat
do adresního øádku va¹eho browseru a pøejít na tuto stránku


{ACT_LINK}

S Pozdravem,

Správa serveru {SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
    'title' => 'Kontrola komentáøù',
    'no_comment' => 'Nejsou ¾ádné komentáøe ke kontrole',
    'n_comm_del' => '%s komentáø(ù) smazán(o)',
    'n_comm_disp' => 'Poèet komentáøù k zobrazení',
    'see_prev' => 'Pøedchozí',
    'see_next' => 'Dal¹í',
    'del_comm' => 'Smazat vybrané komentáøe',
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
    'select_dir' => 'Vybrat adresáø',
    'select_dir_msg' => 'Tato funkce vám umo¾ní dávkovì zpracovat obrázky nahrané pøes FTP.<br /><br />Vyberte adresáø kde se nacházejí obrázky k spracování',
    'no_pic_to_add' => 'Nejsou zde ¾ádné obrázky k pøidání',
    'need_one_album' => 'Poøebujete mít vytvoøenu alespoò jednu galerii',
    'warning' => 'Varování',
    'change_perm' => 'Skript nemù¾e zapisovat do tohoto adresáøe, musíte ho nastavit na CHMOD 755 nebo 777 pøed pøidáním obrázkù !',
    'target_album' => '<b>Vlo¾it obrázky z &quot;</b>%s<b>&quot; do </b>%s',
    'folder' => 'Slo¾ka',
    'image' => 'Obrázek',
    'album' => 'Galerie',
    'result' => 'Výsledek',
    'dir_ro' => 'Nezapisovatelná. ',
    'dir_cant_read' => 'Neèitelná. ',
    'insert' => 'Pøidávám nové obrázky do galerie',
    'list_new_pic' => 'Seznam obrázkù',
    'insert_selected' => 'Vlo¾it vybrané obrázky',
    'no_pic_found' => 'Nové obrázky nenalezeny',
    'be_patient' => 'Prosím buïte trpìlivý(á), program potøebuje na zpracování obrázku nìjaý ten èas.',
    'notes' =>  '<ul>'.
                '<li><b>OK</b> : Tyto obrázky byly pøidány'.
                '<li><b>DP</b> : Zdvojení!, Tento obrázek ji existuje'.
                '<li><b>PB</b> : tento obrázek nelze pøidat, skontrolujte konfiguraci pøípadnì pøístupová práva'.
                '<li>Kdy¾ se neuká¾e \'oznaèení\' OK, DP, PB klepnìte na obrázek a uvidíte chybovou hlá¹ku generovanou PHP, která Vám pomù¾e zjistit pøíèinu problému'.
                '<li>Pokud dojde k timeoutu F5 nebo reload stránky by mìl pomoci'.
                '</ul>',
     'select_album' => 'Vyberte galerii', //cpg1.3.0 
     'check_all' => 'Vybrat v¹e', //cpg1.3.0
     'uncheck_all' => 'Odznaèit v¹e', //cpg1.3.0
                
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
                'title' => 'Vykopnutí u¾ivatelé',
                'user_name' => 'U¾ivatelské jméno',
                'ip_address' => 'IP Adresa',
                'expiry' => 'Vypr¹í za (nevyplòovat pro stálé vykopnutí)',
                'edit_ban' => 'Ulo¾it zmìny',
                'delete_ban' => 'Smazat',
                'add_new' => 'Pøidat dal¹í vykopnutí',
                'add_ban' => 'Pøidat',
                'error_user' => 'Nemohu nalézt u¾ivatele', //cpg1.3.0 
                'error_specify' => 'Je potøeba zadat buï u¾ivatelské jméno nebo IP adresu', //cpg1.3.0
                'error_ban_id' => '©patné ID pro zákaz!', //cpg1.3.0
                'error_admin_ban' => 'Nemù¾ete zakázat sám sebe!', //cpg1.3.0
                'error_server_ban' => 'Sna¾íte se zakázat vlastní server? To není mo¾né udìlat.', //cpg1.3.0
                'error_ip_forbidden' => 'Není mo¾né zakázat toto IP - není dosa¾itelné!', //cpg1.3.0
                'lookup_ip' => 'Najít IP adresu', //cpg1.3.0
                'submit' => 'Odeslat', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(  
    'title' => 'Upload obrázku', 
    'custom_title' => 'Upravený Formuláø', //cpg1.3.0
    'cust_instr_1' => 'Mù¾ete zvolit po¾adovaný poèet vstupních políèek. Není ale mo¾né pøekroèit omezení poètu políèek uvedená ní¾e.', //cpg1.3.0
    'cust_instr_2' => 'Box Number Requests', //cpg1.3.0
    'cust_instr_3' => 'Políèka pro upload souborù: %s', //cpg1.3.0
    'cust_instr_4' => 'Políèka pro URI/URL upload: %s', //cpg1.3.0
    'cust_instr_5' => 'Políèka pro URI/URL upload:', //cpg1.3.0
    'cust_instr_6' => 'Políèka pro upload souborù:', //cpg1.3.0
    'cust_instr_7' => 'Prosím zadejte po¾adovaný poèet ke ka¾dému typu vstupních políèek pro upload. Potom stisknìte \'Pokraèovat\'. ', //cpg1.3.0
    'reg_instr_1' => 'Neplatná akce pro vytvoøení formuláøe.', //cpg1.3.0  
    'reg_instr_2' => 'Pomocí políèek dole mù¾ete nechat na server nahrát soubory. Velikost jednotlivých nahrávaných souborù pøi uploadu na server by nemìla pøesáhnout %s KB. Soubory ZIP nahrané pomocí sekcí \'Upload Souborù\' nebo \'URI/URL Upload\' zùstanou zkomprimované jako jeden soubor i po nahrání na server.', //cpg1.3.0
    'reg_instr_3' => 'Pokud chcete, aby soubory zabalené v archivu ZIP byly rozbaleny, musíte pou¾ít pro zadání souboru políèko v sekci \'Decompressive ZIP Upload\'.', //cpg1.3.0
    'reg_instr_4' => 'Pokud pou¾íváte sekci URI/URL upload, prosím zadávejte cestu k souboru takto: http://www.mojedomena.cz/obrazky/priklad1.jpg', //cpg1.3.0
    'reg_instr_5' => 'Po vyplnìní formuláøe stisknìte tlaèítko \'Pokraèovat\'.', //cpg1.3.0
    'reg_instr_6' => 'Upload ZIP Archivu:', //cpg1.3.0
    'reg_instr_7' => 'Upload Souborù:', //cpg1.3.0
    'reg_instr_8' => 'URI/URL Uploads:', //cpg1.3.0
    'error_report' => 'Error Report', //cpg1.3.0
    'error_instr' => 'The following uploads encountered errors:', //cpg1.3.0
    'file_name_url' => 'File Name/URL', //cpg1.3.0
    'error_message' => 'Error Message', //cpg1.3.0
    'no_post' => 'File not uploaded by POST.', //cpg1.3.0
    'forb_ext' => 'Forbidden file extension.', //cpg1.3.0
    'exc_php_ini' => 'Pøekroèena velikost souboru povolená v php.ini.', //cpg1.3.0
    'exc_file_size' => 'Pøekroèena velikost souboru povolená galerií.', //cpg1.3.0
    'partial_upload' => 'Pouze èásteèný upload.', //cpg1.3.0
    'no_upload' => 'Neprobìhl ¾ádný upload souborù.', //cpg1.3.0
    'unknown_code' => 'Neznámá chyba PHP pøi uploadu.', //cpg1.3.0
    'no_temp_name' => '®ádný upload - ¾adné doèasné jméno.', //cpg1.3.0
    'no_file_size' => 'Neobsahuje ¾ádná data/rozbité', //cpg1.3.0
    'impossible' => 'Nebylo mo¾né pøesunout.', //cpg1.3.0
    'not_image' => 'Není obrázkem/rozité', //cpg1.3.0
    'not_GD' => 'Chybí roz¹íøení GD.', //cpg1.3.0
    'pixel_allowance' => 'Pixel allowance exceeded.', //cpg1.3.0 //TODO
    'incorrect_prefix' => 'Neplatný URI/URL prefix', //cpg1.3.0
    'could_not_open_URI' => 'Nebylo mo¾né otevøít URI.', //cpg1.3.0
    'unsafe_URI' => 'Safety not verifiable.', //cpg1.3.0  //TODO
    'meta_data_failure' => 'Chyba v meta datech', //cpg1.3.0
    'http_401' => '401 Neautorizovaný pøístup', //cpg1.3.0
    'http_402' => '402 Po¾adována platba', //cpg1.3.0
    'http_403' => '403 Zakázaný pøístup', //cpg1.3.0
    'http_404' => '404 Nebylo nalezeno', //cpg1.3.0
    'http_500' => '500 Interní chyba serveru', //cpg1.3.0
    'http_503' => '503 Slu¾ba není dostupná', //cpg1.3.0
    'MIME_extraction_failure' => 'MIME nebylo rozpoznáno.', //cpg1.3.0
    'MIME_type_unknown' => 'Neznámý MIME typ', //cpg1.3.0
    'cant_create_write' => 'Nebylo mo¾né vytvoøit soubor pro zápis.', //cpg1.3.0
    'not_writable' => 'Nebylo mo¾né zapisovat do souboru pro zápis.', //cpg1.3.0
    'cant_read_URI' => 'Nebylo mo¾né pøeèíst URI/URL', //cpg1.3.0
    'cant_open_write_file' => 'Nebylo mo¾né otevøít soubor pro URI.', //cpg1.3.0
    'cant_write_write_file' => 'Nebylo mo¾né zapisovat do souboru pro URI.', //cpg1.3.0
    'cant_unzip' => 'Nebylo mo¾né rozbalit ZIP archiv.', //cpg1.3.0
    'unknown' => 'Neznámá chyba', //cpg1.3.0
    'succ' => 'Uspì¹ný Upload', //cpg1.3.0
    'success' => '%s souborù bylo úspì¹nì nahráno.', //cpg1.3.0
    'add' => 'Prosím stisknìte \'Pokraèovat\' pro pøidání souborù do galerie.', //cpg1.3.0
    'failure' => 'Chyba pøi Uploadu', //cpg1.3.0
    'f_info' => 'Informace o souboru', //cpg1.3.0
    'no_place' => 'Pøedchozí soubor není mo¾né umístit.', //cpg1.3.0
    'yes_place' => 'Pøedchozí soubor byl úspì¹nì umístìn.', //cpg1.3.0
    'max_fsize' => 'Max. velikost souboru je %s KB',
    'album' => 'Galerie',
    'picture' => 'Obrázek',
    'pic_title' => 'Nadpis obrázku',
    'description' => 'Popis obrázku',
    'keywords' => 'Klíèová slova (oddìlená mezerou)',
    'err_no_alb_uploadables' => 'Zde se nenalézá galerie, do které je povolen upload.', 
    'place_instr_1' => 'Prosím umístìte teï soubory do galerií. Mù¾ete také zadat informace týkající se jednotlivých souborù.', //cpg1.3.0
    'place_instr_2' => 'Dal¹í soubory je potøeba umístit. Prosím stiskìte \'Pokraèovat\'.', //cpg1.3.0
    'process_complete' => 'Uspì¹nì jste umístil v¹echny soubory.', //cpg1.3.0

);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
    'title' => 'Spravovat u¾ivatele',
    'name_a' => 'Jméno vzestup.',
    'name_d' => 'Jméno sestup.',
    'group_a' => 'Skupina vzestup.',
    'group_d' => 'Skupina sestup.',
    'reg_a' => 'Datum registrace vzestup.',
    'reg_d' => 'Datum registrace sestup.',
    'pic_a' => 'Poèet obrázkù vzestup.',
    'pic_d' => 'Poèet obrázkù sestup.',
    'disku_a' => 'Vyu¾ití disku vzestup.',
    'disku_d' => 'Vyu¾ití disku sestup.',
    'lv_a' => 'Last visit ascending', //cpg1.3.0
    'lv_d' => 'Last visit descending', //cpg1.3.0
    'sort_by' => 'Øadit u¾øivatele podle',
    'err_no_users' => 'Tabulka u¾ivatelù je prázdná!',
    'err_edit_self' => 'Zde nelze editovat vlastní profil pou¾ijte pøíslu¹nou volbu pracující s va¹ím profilem',
    'edit' => 'UPRAVIT',
    'delete' => 'SMAZAT',
    'name' => 'U¾iv. jméno',
    'group' => 'Skupina U¾iv.',
    'inactive' => 'Neaktivní',
    'operations' => 'Operace',
    'pictures' => 'Obrázky',
    'disk_space' => 'Místo vyu¾ité / kvóta',
    'registered_on' => 'Registrován',
    'last_visit' => 'Poslední náv¹tìva', //cpg1.3.0
    'u_user_on_p_pages' => '%d u¾ivatelù na %d stránkách',
    'confirm_del' => 'Jste si jist(a), ¾e chcete smazat tohoto u¾ivatele ? \\nV¹echny jeho obrázky, galerie a komentáøe budou smazány.',
    'mail' => 'MAIL',
    'err_unknown_user' => 'Vybraný u¾iv. neexistuje !',
    'modify_user' => 'Zmìnit u¾iv.',
    'notes' => 'Poznámky',
    'note_list' => '<li>Pokud nechcete zmìnit heslo ponechte políèko pro heslo prázdné',
    'password' => 'Heslo',
    'user_active' => 'U¾iv. je aktivní',
    'user_group' => 'U¾iv. Skupina',
    'user_email' => 'U¾iv. emaill',
    'user_web_site' => 'U¾iv. domácí stránka',
    'create_new_user' => 'Vytvoøit nového u¾ivatle.',
    'user_location' => 'Místo U¾iv. (napø. Praha apod.)',
    'user_interests' => 'U¾iv. zájmy',
    'user_occupation' => 'U¾iv. povolání',
    'latest_upload' => 'Recent uploads', //cpg1.3.0
    'never' => 'nikdy', //cpg1.3.0

);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
        'title' => 'Zmìnit velikost obrázku',
        'what_it_does' => 'Co to dìlá?',
        'what_update_titles' => 'Aktualizovat nadpisy podle jména souborù',
        'what_delete_title' => 'Smazat nadpisy',
        'what_rebuild' => 'Pøedìlat nahledy a zmìnìné obrázky',
        'what_delete_originals' => 'Smazat originály a nahradit je støedními obrázky',
        'file' => 'Soubor',
        'title_set_to' => 'Nastavit nadpis na',
        'submit_form' => 'odeslat',
        'updated_succesfully' => 'Aktualizace probìhla OK',
        'error_create' => 'CHYBA pøi vytváøení',
        'continue' => 'Zpracovatvíce obrázkù',
        'main_success' => 'Skoubor %s byl uspì¹nì pou¾it jako hlavní obrázek',
        'error_rename' => 'Chyba pøejmenování %s na %s',
        'error_not_found' => 'Soubor %s nebyl nalezen',
        'back' => 'zpìt na halvní',
        'thumbs_wait' => 'Aktualizuji náhledy a/nebo støední obrázky, prosím èekejte...',
        'thumbs_continue_wait' => 'Pokraèuji v aktualizaci náhledù a/nebo støedních obrázkù...',
        'titles_wait' => 'Aktualizuji nadpisy, prosím èekejte...',
        'delete_wait' => 'Ma¾u nadpisy, prosím èekejte...',
        'replace_wait' => 'Ma¾u originály a nahrazuji je støedními obrázky, prosím èekejte...',
        'instruction' => 'Rychlé instrukce',
        'instruction_action' => 'Vyberte akci',
        'instruction_parameter' => 'Nastavit parametry',
        'instruction_album' => 'Vybrat galerii',
        'instruction_press' => 'Stisknìte %s',
        'update' => 'Aktualizovat náhledy a/nebo støední obrázky',
        'update_what' => 'Co má být aktualizováno',
        'update_thumb' => 'Jen náhledy',
        'update_pic' => 'Pouze støední obrázky',
        'update_both' => 'Obojí náhledy i støední obrázky',
        'update_number' => 'Poèet obrázkù, které zpracovat na 1 kliknutí',
        'update_option' => '(Sni¾te èíslo pokud máte problémy s timeoutem)',
        'filename_title' => 'Jméno souboru ? Nadpis obrázku',
        'filename_how' => 'Jak se má zmìnit jméno obrázku?',
        'filename_remove' => 'Odstranit .jpg koncovku a pøepsat _ (podtr¾ítka mezerami)',
        'filename_euro' => 'Zmìnit 2003_11_23_13_20_20.jpg na 23/11/2003 13:20',
        'filename_us' => 'Zmìnit 2003_11_23_13_20_20.jpg na 11/23/2003 13:20',
        'filename_time' => 'Zmìnit 2003_11_23_13_20_20.jpg na 13:20',
        'delete' => 'Smazat nadpisy obrázkù nebo originální obrázky',
        'delete_title' => 'Smazat nadpisy obrázkù',
        'delete_original' => 'Smazat originální obrázky',
        'delete_replace' => 'Smazat originály a nahradit je støední verzí obrázkù',
        'select_album' => 'Vybrat galerii',
        'delete_orphans' => 'Smazat osiøelé komentáøe (platí pro v¹echny galerie)', //cpg1.3.0 
        'orphan_comment' => 'Nalezeny osiøelé komentáøe', //cpg1.3.0
        'delete' => 'Smazat', //cpg1.3.0 
        'delete_all' => 'Smazat v¹e', //cpg1.3.0
        'comment' => 'Komentáø: ', //cpg1.3.0
        'nonexist' => 'pøiøazeno k neexistujícímu souboru # ', //cpg1.3.0
        'phpinfo' => 'Zobrazit phpinfo', //cpg1.3.0
        'update_db' => 'Update databáze', //cpg1.3.0
        'update_db_explanation' => 'Pokud jste vymìnili soubory aplikace galerie coppermine, pøidali modifikaci nebo upgradovali ze star¹í verze, ujistìte se, ¾e jste spustili update databáze. To vytvoøí potøebné tabulky a/nebo konfiguraèní hodnoty ve va¹í databázi.', //cpg1.3.0
);
?>
