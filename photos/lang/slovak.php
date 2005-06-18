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
// CVS version: $Id: slovak.php,v 1.5 2004/12/29 23:03:49 chtito Exp $
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


$lang_charset = 'windows-1250';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytov', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Ne', 'Po', 'Ut', 'St', 'Št', 'Pi', 'So');
$lang_month = array('Január', 'Február', 'Marec', 'Apríl', 'Máj', 'Jún', 'Júl', 'August', 'September', 'Október', 'November', 'December');

// Some common strings
$lang_yes = 'Áno';
$lang_no  = 'Nie';
$lang_back = 'NASPE';
$lang_continue = 'POKRAÈOVA';
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
$lang_bad_words = array('pièa', 'hovno', '*fuck*', 'prdel', 'èurák', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*', 'kokot');

$lang_meta_album_names = array(
        'random' => 'Náhodné obrázky',
        'lastup' => 'Najnovšie',
        'lastalb'=> 'Naposledy aktualizovaná galéria',
        'lastcom' => 'Najnovšie komentáre',
        'topn' => 'Nejpozeranejšie',
        'toprated' => 'Nejlepšie hodnotené',
        'lasthits' => 'Naposledy zobrazené',
        'search' => 'Vısledky hladania',
        'favpics'=> 'Ob¾úbené obrázky',
);

$lang_errors = array(
    'access_denied' => 'Nemáte oprávnenie na túto stránku',
    'perm_denied' => 'Nemáte dostatoèné práva pre potvrdenie tejto operácie.',
    'param_missing' => 'Skriptu aleboli predané potrebné parametre',
    'non_exist_ap' => 'Vybraná galéria/obrázok neexistuje',
    'quota_exceeded' => 'Vyèerpali(a) ste miesto na disku.<br /><br />Vaša kvóta je[quota]K, Vaše obrázky zaberajú [space]K, pridaním tohto obrázku by ste svoju kvótu prekroèili',
    'gd_file_type_err' => 'Pokia¾ pouívate GD kninicu sú podporované len obrázky JPG a PNG',
    'invalid_image' => 'Tento obrázok je poškodenı/porušenı GD knihovna s ním nemôe pracovat.',
    'resize_failed' => 'Nieje moné vytvori náh¾ad alebo zmenšenı obrázok',
    'no_img_to_display' => 'Tu nie je iadny obrázok, kterı by ste si mohli prezrie',
    'non_exist_cat' => 'Vybraná kategórie neexistuje',
    'orphan_cat' => 'Podkategória nemá nadriadenú kategóriu. Problém opravte cez nastavenie kategorií.',
    'directory_ro' => 'Do adresára \'%s\' nieje moné zapisova (nedostateèné práva), obrázky nemohli by zmazané.',
    'non_exist_comment' => 'Vybranı komentár neexistuje',
    'pic_in_invalid_album' => 'Obrázok(y) je/sú v neexitujícej galerii (%s)!?',
    'banned' => 'Bol ste vykopnutı z tıchto stránok, nie je Vám umonené ich pouíva.',
    'not_with_udb' => 'Táto funkcia je vypnutá pretoe je integrována ve fóru. Buï nie je poadovaná fukcia dostupná na tomto systéme, alebo túto/tieto funci/e plní fórum.',
    'offline_title' => 'Odpojené', //cpg1.3.0
    'offline_text' => 'Galéria je momentálne odpojená - prosím zkúste to znova neskôr', //cpg1.3.0
    'ecards_empty' => 'Momentálne nie sú k zobraniu dostupné iadne záznamy o ecards. Overte prosím, èi je zapnutá vo¾ba "ecard logging" v konfiguráci coppermine!', //cpg1.3.0
    'action_failed' => 'Akcia zlyhala.  Coppermine nie je schopné vašu poiadavku zpracovat.', //cpg1.3.0
    'no_zip' => 'Kninice potrebné pre zpracovánie ZIP súborov nie sú dostupné.  Prosím kontaktujte Vašeho administrátora aplikáce Coppermine.', //cpg1.3.0
    'zip_type' => 'Nemáte povolenie nahráva na server súbory ZIP.', //cpg1.3.0
);

$lang_bbcode_help = 'Následujúce znaèky môu by uitoèné: <li>[b]<b>Tuèné</b>[/b]</li> <li>[i]<i>Kurzíva</i>[/i]</li> <li>[url=http://vasedomena.cz/]Text odkazu[/url]</li> <li>[email]uzivatel@domena.cz[/email]</li>'; //cpg1.3.0


// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
    'alb_list_title' => 'Prejs na zoznam galérií',
    'alb_list_lnk' => 'Zoznam galérií',
    'my_gal_title' => 'Prejs do mojej osobnej galérie',
    'my_gal_lnk' => 'Moja galéria',
    'my_prof_lnk' => 'Môj Profil',
    'adm_mode_title' => 'Do Admin módu',
    'adm_mode_lnk' => 'Admin mód',
    'usr_mode_title' => 'Do Uívate¾ského módu',
    'usr_mode_lnk' => 'Uívate¾skı mód',
    'upload_pic_title' => 'Nahra obrázok do gallérie',
    'upload_pic_lnk' => 'Upload obrázku',
    'register_title' => 'Vytvori úèet',
    'register_lnk' => 'Registrova sa',
    'login_lnk' => 'Prihlási',
    'logout_lnk' => 'Odhlási',
    'lastup_lnk' => 'Najnovšie obrázky',
    'lastcom_lnk' => 'Posledné komentáre',
    'topn_lnk' => 'Najprezeranejšie',
    'toprated_lnk' => 'Najlepšie hodnotené',
    'search_lnk' => 'Vyh¾adávanie',
    'fav_lnk' => 'Ob¾úbené',
    'memberlist_title' => 'Uká zoznam èlenov', //cpg1.3.0
    'memberlist_lnk' => 'Zoznam èlenov', //cpg1.3.0
    'faq_title' => 'FAQ = najèastejšie kladené otázky na galérii &quot;Coppermine&quot;', //cpg1.3.0
    'faq_lnk' => 'FAQ', //cpg1.3.0

);

$lang_gallery_admin_menu = array(
    'upl_app_lnk' => 'Potvdenie uploadu',
    'config_lnk' => 'Nastavenie',
    'albums_lnk' => 'Galéria',
    'categories_lnk' => 'Kategórie',
    'users_lnk' => 'Uívatelia',
    'groups_lnk' => 'U. skupiny',
    'comments_lnk' => 'Komentáre',
    'searchnew_lnk' => 'Dávkové pridávanie obrázkov',
    'util_lnk' => 'Zmeni ve¾kos obrázkov',
    'ban_lnk' => 'Vykopnú uívate¾a',
);

$lang_user_admin_menu = array(
    'albmgr_lnk' => 'Vytvori / organizova moju galériu',
    'modifyalb_lnk' => 'Zmeni moju galériu',
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
    'sort_da' => 'Zoradi vzostupne pod¾a dátumu',
    'sort_dd' => 'Zoradi zostupne pod¾a data',
    'sort_na' => 'Zoradi vzostupne pod¾a mena',
    'sort_nd' => 'Zoradi zostupne pod¾a mena',
    'sort_ta' => 'Zoradi pod¾a nadpisu vzostupne',
    'sort_td' => 'Zoradi pod¾a nadpisu zostupne',
    'download_zip' => 'Download ako Zip súbor', //cpg1.3.0
    'pic_on_page' => '%d obrázkov na %d stránkách',
    'user_on_page' => '%d uívate¾ov na %d stránkách'
);

$lang_img_nav_bar = array(
    'thumb_title' => 'Zpe na stránku s náh¾admi',
    'pic_info_title' => 'Zobraz/skry informácie o obrázku',
    'slideshow_title' => 'Slideshow',
    'ecard_title' => 'Posla tento obrázok ako poh¾adnicu',
    'ecard_disabled' => 'Poh¾adnice sú vypnuté',
    'ecard_disabled_msg' => 'Nemáte dostateèné práva pre zaslanie poh¾adnice',
    'prev_title' => 'Predchádzajúci obrázok',
    'next_title' => 'Ïa¾ší obrázok',
    'pic_pos' => 'OBRÁZOK %s/%s',
);

$lang_rate_pic = array(
    'rate_this_pic' => 'Hodnoti tento obrázok ',
    'no_votes' => '(iadne hodnotenie)',
    'rating' => '(Aktuálne hodnotenie : %s / z 5, hlasované %s krát)',
    'rubbish' => 'Hnusnı',
    'poor' => 'Mizernı',
    'fair' => 'Ujde to',
    'good' => 'Dobrı',
    'excellent' => 'Vıbornı',
    'great' => 'Dokonalı',
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
    'filesize' => 'Ve¾kost súboru : ',
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
  'select_all' => 'Vybra všetko', //cpg1.3.0
  'copy_and_paste_instructions' => 'Pokia¾ sa chystáte poadovat pomoc na podpore coppermine, vlote tento ladiaci vıstup do vášho príspevku. Pred takúmto vloením sa uistite, e ste všetky vaše heslá z tohto textu nahradili pomocou "***".', //cpg1.3.0
  'phpinfo' => 'Zobrazi phpinfo', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => 'Prednastavenı jazyk', //cpg1.3.0
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
    0 => 'Opúšam Admin Mód....:-(',
    1 => 'Vstupujem do Admin Módu....:-)',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
    'alb_need_name' => 'Galéria musí ma meno',
    'confirm_modifs' => 'Ste si istı(a) tımito zmenami ?',
    'no_change' => 'Neurobil(a) ste iadne zmeny !',
    'new_album' => 'Nová galéria',
    'confirm_delete1' => 'Ste si istı(á), e chcete zmazat túto galériu ?',
    'confirm_delete2' => '\nVšetky obrázky a komentáre budú zmazané !',
    'select_first' => 'Najprv vyberte galériu',
    'alb_mrg' => 'Správca galérií',
    'my_gallery' => '* Moja galéria *',
    'no_category' => '* Nie je kategória *',
    'delete' => 'Zmaza',
    'new' => 'Novı/á',
    'apply_modifs' => 'Potvrdi zmeny',
    'select_category' => 'Vybra kategóriu',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
    'miss_param' => 'Parametre potrebné pre \'%s\'operáciu nie su dostupné !',
    'unknown_cat' => 'Vybraná kategória v databáze neexistuje',
    'usergal_cat_ro' => 'Nie je moné zmazat uívate¾ské galérie !',
    'manage_cat' => 'Spravova kategórie',
    'confirm_delete' => 'Naozaj chcete SMAZAT túto kategóriu',
    'category' => 'Kategoria',
    'operations' => 'Operácia',
    'move_into' => 'Presunú do',
    'update_create' => 'Aktualizova/Vytvori kategóriu',
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
    'restore_cfg' => 'Nastavit vıchodziu',
    'save_cfg' => 'Uloi konfiguráciu',
    'notes' => 'Poznámky',
    'info' => 'Informácie',
    'upd_success' => 'Konfigurácia bola zmenená',
    'restore_success' => 'Konfigurácia bola nastavená na vıchodzie nastavenie',
    'name_a' => 'Meno vzostupne',
    'name_d' => 'Meno zostupne',
    'title_a' => 'Nadpis vzostupne',
    'title_d' => 'Nadpis zostupne',
    'date_a' => 'Dátum vzostupne',
    'date_d' => 'Dátum zostupne',
    'th_any' => 'Max Aspect',
    'th_ht' => 'Vıška',
    'th_wd' => 'Šírka',
    'label' => 'popis', //cpg1.3.0
    'item' => 'poloka', //cpg1.3.0
    'debug_everyone' => 'Kadı', //cpg1.3.0
    'debug_admin' => 'Iba Admin', //cpg1.3.0

);

if (defined('CONFIG_PHP')) $lang_config_data = array(
    'Základné nastavenie',
    array('Meno galérie', 'gallery_name', 0),
    array('Popis galérie', 'gallery_description', 0),
    array('Email administrátora galérie', 'gallery_admin_email', 0),
    array('Cie¾ová adresa pre odkaz \'Zobrazi ïa¾šie obrázky\' v odkaze poh¾adnice', 'ecards_more_pic_target', 0),
    array('Galéria je odpojená', 'offline', 1), //cpg1.3.0
    array('Logova ecards', 'log_ecards', 1), //cpg1.3.0
    array('Povoli ZIP-sahovánie ob¾úbenıch', 'enable_zipdownload', 1), //cpg1.3.0

    'Jazyk, Témy &amp; nastavenie znakovej sady',
    array('Jazyk', 'lang', 5),
    array('Téma', 'theme', 6),
    array('Zobrazi zoznam jazykov', 'language_list', 1), //cpg1.3.0
    array('Zobrazi vlajky jazykov', 'language_flags', 8), //cpg1.3.0 
    array('Zobrazi &quot;reset&quot; vo vıbere jazyka', 'language_reset', 1), //cpg1.3.0
    array('Zobrazi zoznam tém', 'theme_list', 1), //cpg1.3.0
    array('Zobrazi &quot;reset&quot; vo vıbere tém', 'theme_reset', 1), //cpg1.3.0
    array('Zobrazi FAQ', 'display_faq', 1), //cpg1.3.0
    array('Zobrazi nápovedu bbcode', 'show_bbcode_help', 1), //cpg1.3.0
    array('Kódováníe znakov', 'charset', 4), //cpg1.3.0

    'Nastavení zobrazení',
    array('Šírka hlavnej tabu¾ky v (pixeloch alebo %)', 'main_table_width', 0),
    array('Poèet úrovní subkategorií', 'subcat_level', 0),
    array('Poèet galérií na stránku', 'albums_per_page', 0),
    array('Poèet ståpcov v preh¾ade galérií', 'album_list_cols', 0),
    array('Ve¾kos náh¾adov v pixeloch', 'alb_list_thumb_size', 0),
    array('Obsah hlavnej stránky', 'main_page_layout', 0),
    array('Ukazova v kategóriách náh¾ady galérií prvej úrovne','first_level',1),

    'Zobrazenie náh¾adov',
    array('Poèet ståpcov na stránku', 'thumbcols', 0),
    array('Poèet riadkov na stránku', 'thumbrows', 0),
    array('Maximálne mnostvo záloiek', 'max_tabs', 0),
    array('Zobrazi legendu obrázkov pod náh¾adom', 'caption_in_thumbview', 1),
    array('Zobrazi poèet prehliadnutí pod náh¾adom', 'views_in_thumbview', 1), //cpg1.3.0
    array('Zobrazi poèet komentárov pod náh¾adom', 'display_comment_count', 1),
    array('Zobrazi meno autora pod náh¾adom', 'display_uploader', 1), //cpg1.3.0
    array('Základné radenie náh¾adov', 'default_sort_order', 3),
    array('Min. poèet hlasov potrebnı k zaradeniu do zoznamu \'Najlepšie hodnotené\'', 'min_votes_for_rating', 0),

    'Zobrazenie obrázkov &amp; Nastavenie komentárov',
    array('Šírka tabu¾ky pre zobrazenie obrázku (v pixeloch alebo %)', 'picture_table_width', 0),
    array('Vdy zobrazi podrobné info', 'display_pic_info', 1),
    array('CENZÚROVAT slova v komentároch', 'filter_bad_words', 1),
    array('Povoli smajlíky v komentároch', 'enable_smilies', 1),
    array('Maximálna dåka popisu obrázku', 'max_img_desc_length', 0),
    array('Maximálna dåka slova v komentári', 'max_com_wlength', 0),
    array('Maximálne mnostvo riadkov v komentári', 'max_com_lines', 0),
    array('Maximální dåka komentáre', 'max_com_size', 0),
    array('Ukáza filmovı prúok', 'display_film_strip', 1),
    array('Poèet poloiek vo filmovom prúku', 'max_film_strip_items', 0),
    array('Upozorni adminitratora na komentáre pomocí emailu', 'email_comment_notification', 1), //cpg1.3.0 
    array('Slideshow interval v milisekundách (1 sekunda = 1000 milisekund)', 'slideshow_interval', 0), //cpg1.3.0 

    'Obrázky a nastavenie náh¾adov',
    array('Kvalita súborov JPEG', 'jpeg_qual', 0),
    array('Maximálne rozmery náh¾adu <b>*</b>', 'thumb_width', 0),
    array('Poui rozmer ( šírka alebo vıška alebo maximálny rozmer náh¾adu )<b>*</b>', 'thumb_use', 7),
    array('Vytvori strední obrázek','make_intermediate',1),
    array('Maximálna šírka alebo vıška stredného obrázku <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0), //cpg1.3.0
    array('Maximální velikost uploadovanıch obrázkov (KB)', 'max_upl_size', 0),
    array('Maximálne rozmery uploadovanıch obrázkov (v pixelech)', 'max_upl_width_height', 0),

    'Obrázky a náh¾ady rozšírené nastavenie',
    array('Zobrazit ikonu zamknuté galéria neprihlásenému uivate¾ovi.','show_private',1),
    array('Znaky zakázané v názvoch súborov', 'forbiden_fname_char',0),
    //array('Povolené koncovky uploadovanıch súborov', 'allowed_file_extensions',0),
    array('Povolené typy obrázkov', 'allowed_img_types',0), //cpg1.3.0
    array('Povolené typy videa', 'allowed_mov_types',0), //cpg1.3.0
    array('Povolené typy audia', 'allowed_snd_types',0), //cpg1.3.0
    array('Povolené typy dokumentov', 'allowed_doc_types',0), //cpg1.3.0
    array('Metóda zmeny ve¾kosti obrázkov','thumb_method',2),
    array('Cesta k ImageMagicu (príklad /usr/bin/X11/)', 'impath', 0),
    //array('Povolené typy obrázkov (iba pre ImageMagic)', 'allowed_img_types',0),
    array('Parametre pre ImageMagic', 'im_options', 0),
    array('Èíta EXIF data zo súborov JPEG', 'read_exif_data', 1),
    array('Èíta IPTC data zo súborov JPEG', 'read_iptc_data', 1), //cpg1.3.0
    array('Adresár pre galériu <b>*</b>', 'fullpath', 0),
    array('Adresár pre galériu uívate¾ov <b>*</b>', 'userpics', 0),
    array('Prefix pre stredne ve¾ké obrázky <b>*</b>', 'normal_pfx', 0),
    array('Prefix pre náh¾ady <b>*</b>', 'thumb_pfx', 0),
    array('Základnı mód pre adresáre', 'default_dir_mode', 0),
    array('Základnı mód pre obrázky', 'default_file_mode', 0),

    'Nastavenie uívate¾ov',
    array('Povoli registráciu novıch uívate¾ov', 'allow_user_registration', 1),
    array('Pre registráciu vyadova potvrdenie admina', 'reg_requires_valid_email', 1),
    array('Upozorni administrátora na registráciu nového uívate¾a pomocou emailu', 'reg_notify_admin_email', 1), //cpg1.3.0
    array('Povoli pre dvoch uivate¾ov rovnakı email', 'allow_duplicate_emails_addr', 1),
    array('Majú ma uívatelia vlastné galérie?', 'allow_private_albums', 1),
    array('Upozorni administrátora na vloenı súbor èekajúci na schválenie', 'upl_notify_admin_email', 1), //cpg1.3.0
    array('Dovoli prihlásenım uívate¾om, aby videli zoznam uívate¾ov', 'allow_memberlist', 1), //cpg1.3.0

    'Vlastné poloky pre popis obrázku (Nechajte prázdne a nezobrazí sa)',
    array('Meno poloky 1', 'user_field1_name', 0),
    array('Meno poloky 2', 'user_field2_name', 0),
    array('Meno poloky 3', 'user_field3_name', 0),
    array('Meno poloky 4', 'user_field4_name', 0),

    'Cookies &amp; Kódová stránka',
    array('Meno cookies uívané programem (expertní volba)', 'cookie_name', 0),
    array('Cesta pre cookies uívaná programem (expertní volba)', 'cookie_path', 0),
    array('Kódová stránka', 'charset', 4),

    'Ïa¾šie nastavenie',
    array('Zapnú ladiaci mód (len pre testovanie)', 'debug_mode', 1),
    array('Zobrazova v ladiacom móde upozornenie', 'debug_notice', 1), //cpg1.3.0


    '<br /><div align="center">(*) Poloky oznaèené * sa NESMÚ zmeni pokia¾ u máte ve vašej galérii nahrané obrázky</div><br />
    <a name="notice2"></a>(**) Pri zmene tohto nastavenia sa zmena prejaví iba u súborov, které sú 
	pridané a od tohto okamiku. Je doporuèené nemeni toto nastavenie pokia¾ u sú v galerii nejaké súbory. 
	Aj tak je moné necha uplatni zmeny i na u existujíce súbory pomocou nástroja
	&quot;<a href="util.php">admin tools</a> (resize pictures)&quot; v admin menu.</div><br />', //cpg1.3.0

);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //
if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Zasielanie ecards', //cpg1.3.0
  'ecard_sender' => 'Odosielate¾', //cpg1.3.0
  'ecard_recipient' => 'Príjemca', //cpg1.3.0
  'ecard_date' => 'Dátum', //cpg1.3.0
  'ecard_display' => 'Zobrazit ecard', //cpg1.3.0
  'ecard_name' => 'Meno', //cpg1.3.0
  'ecard_email' => 'Email', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'vzostupne', //cpg1.3.0
  'ecard_descending' =>'zostupne', //cpg1.3.0
  'ecard_sorted' => 'Utriedené', //cpg1.3.0
  'ecard_by_date' => 'pod¾a dátumu', //cpg1.3.0
  'ecard_by_sender_name' => 'pod¾a mena odesielate¾a', //cpg1.3.0
  'ecard_by_sender_email' => 'pod¾a emailu odesielate¾a', //cpg1.3.0
  'ecard_by_sender_ip' => 'pod¾a IP addressy odesielate¾a', //cpg1.3.0
  'ecard_by_recipient_name' => 'pod¾a mena príjemcu', //cpg1.3.0
  'ecard_by_recipient_email' => 'pod¾a emailu príjemcu', //cpg1.3.0
  'ecard_number' => 'zobrazenie záznamu %s a¾ %s z %s', //cpg1.3.0
  'ecard_goto_page' => 'prechod na stranu', //cpg1.3.0
  'ecard_records_per_page' => 'záznamu na jednej strane', //cpg1.3.0
  'check_all' => 'Zatrhnout všetko', //cpg1.3.0
  'uncheck_all' => 'Odznaèit všetko', //cpg1.3.0
  'ecards_delete_selected' => 'Zmaza vybrané ecards', //cpg1.3.0
  'ecards_delete_confirm' => 'Ste si istı, e chcete zmaza záznamy? Nastavte checkbox!', //cpg1.3.0 
  'ecards_delete_sure' => 'Som si istı.', //cpg1.3.0
);
                                                                                                                  



// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
    'empty_name_or_com' => 'Vlote meno a Váš komentár',
    'com_added' => 'Váš komentár bol pridanı',
    'alb_need_title' => 'Prosím, dajte galérii nadpis !',
    'no_udp_needed' => 'Aktualizácia není potrebná.',
    'alb_updated' => 'Galéria bola pridaná',
    'unknown_album' => 'Vybraná galéria neexistuje alebo nemáte práva pre upload do tejto galérie',
    'no_pic_uploaded' => 'Obrázek nebol uploadovanı!<br /><br />zkontrolujte èi server podporuje upload súborov, èi ste naozaj zadal(a) obrázok pre upload...',
    'err_mkdir' => '  ERROR: Chyba pri vytváraní adresára (nebol vytvorenı) %s !',
    'dest_dir_ro' => 'Do cielového adresára %s nemôe skript zapisova (zkontrolujte práva) !',
    'err_move' => 'nie je moné presunú %s do %s !',
    'err_fsize_too_large' => 'Rozmery obrázku, kterı sa snaíte uploadovat, sú príliš ve¾ké (max. ve¾kos je %s x %s) !',
    'err_imgsize_too_large' => 'Ve¾ikos súboru, kterı se snaíte uploadova, je príliš ve¾ká (max. ve¾kos je %s KB) !',
    'err_invalid_img' => 'Súbor kterı ste nahral(a) na server nieje obrázkom !',
    'allowed_img_types' => 'Môete uploadova iba obrázky %s .',
    'err_insert_pic' => 'Obrázok \'%s\' nie je moné vloi do galérie ',
    'upload_success' => 'Váš obrázok bol nahranı na server bez problémov<br /><br />Bude vidite¾nı po schválení adminom.',
    'notify_admin_email_subject' => '%s - upozornenie na Upload', //cpg1.3.0 
    'notify_admin_email_body' => '%s nahral do galérie obrázok, kterı vyaduje vaše potvrdenie. Navštívte prosím %s', //cpg1.3.0
    'info' => 'Informácie',
    'com_added' => 'komentárov pridanıch',
    'alb_updated' => 'Galéria aktualizována',
    'err_comment_empty' => 'Váš komentár je prázdny !',
    'err_invalid_fext' => 'Iba súbory s následujúcimi koncovkami sú podporované : <br /><br />%s.',
    'no_flood' => 'Ste autor posledného komentára k tomuto obrázku<br /><br />Pokia¾ ho chcete zmeni pouite vo¾bu upravi ',
    'redirect_msg' => 'Práve ste presmerovávanı(a).<br /><br /><br />Kliknite na \'POKRAÈOVAT\' pokia¾ sa stránka nepresmeruje sama',
    'upl_success' => 'Váš obrázok bol v poriadku pridanı',
    'email_comment_subject' => 'komentár bol pridanı do Coppermine Photo Gallery', //cpg1.3.0 
    'email_comment_body' => 'Niekto pridal komentár do vašej galérie. Prezrite si ho na', //cpg1.3.0

);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
    'caption' => 'Legenda(popis)',
    'fs_pic' => 'pôvodná ve¾kos obrázku',
    'del_success' => 'bezchybne zmazané',
    'ns_pic' => 'normálna ve¾kos obrázku',
    'err_del' => 'nie je moné zmazat',
    'thumb_pic' => 'náh¾ad',
    'comment' => 'komentár',
    'im_in_alb' => 'patrí do galérie',
    'alb_del_success' => 'Galéria \'%s\' zmazaná',
    'alb_mgr' => 'Správca galérií',
    'err_invalid_data' => 'Získané chybné dáta \'%s\'',
    'create_alb' => 'Vytváram galériu \'%s\'',
    'update_alb' => 'Aktualizujem galériu \'%s\' s nadpisom \'%s\' a zoznamom \'%s\'',
    'del_pic' => 'Zmaza obrázok',
    'del_alb' => 'Zmaza galériu',
    'del_user' => 'Zmaza uívate¾a',
    'err_unknown_user' => 'Vybranı u¾ivate¾ neexistuje !',
    'comment_deleted' => 'komentár bezchybne zmazanı ! ',
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
    'confirm_del' => 'Ste si istı, e chcete zmazat tento obrázok ? \\nPriloené komentáre budú stratené.',
      'del_pic' => 'ZMAZA TENTO OBRÁZEK',
    'size' => '%s x %s pixelelov',
    'views' => '%s krát',
    'slideshow' => 'Slideshow',
    'stop_slideshow' => 'ZASTAVI SLIDESHOW',
    'view_fs' => 'kliknite pre zobrazenie pôvodného obrázku',
    'edit_pic' => 'Edituj popis', //cpg1.3.0
    'crop_pic' => 'Ore a otoè', //cpg1.3.0

);

$lang_picinfo = array(
    'title' =>'Informácia o obrázku',
    'Filename' => 'Meno súboru',
    'Album name' => 'Meno galérie',
    'Rating' => 'Hodnotenie (%s hlas(ov))',
    'Keywords' => 'K¾úèové slová',
    'File Size' => 'Ve¾kos súboru',
    'Dimensions' => 'Rozmery',
    'Displayed' => 'Zobrazené',
    'Camera' => 'Fotoaparát',
    'Date taken' => 'Dátum získania snímku',
    'Aperture' => 'Clona',
    'Exposure time' => 'Expoziènı èas',
    'Focal length' => 'Ohnisková vzdialenos',
    'Comment' => 'komentáre',
    'addFav' => 'Prida k ob¾úbenım',
    'addFavPhrase' => 'Ob¾úbené',
    'remFav' => 'Odstráni z ob¾úbenıch',
    'iptcTitle'=>'IPTC Title', //cpg1.3.0
    'iptcCopyright'=>'IPTC Copyright', //cpg1.3.0
    'iptcKeywords'=>'IPTC Keywords', //cpg1.3.0
    'iptcCategory'=>'IPTC Category', //cpg1.3.0
    'iptcSubCategories'=>'IPTC Sub Categories', //cpg1.3.0
);

$lang_display_comments = array(
    'OK' => 'OK',
    'edit_title' => 'Upravi tento komentár',
    'confirm_delete' => 'Ste si istı(á), e chcete zmazat tento komentár ?',
    'add_your_comment' => 'Prida komentár',
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
    'title' => 'Posla poh¾adnicu',
    'invalid_email' => '<b>Varovánie</b> : neplatná emailová adresa !',
    'ecard_title' => 'Poh¾adnica zo serveru %s pre vás/teba',
    'error_not_image' => 'Iba obrázky môu by poslané ako ecard.', //cpg1.3.0
    'view_ecard' => 'Pokia¾ se poh¾adnica nezobrazila klikni na link',
    'view_more_pics' => 'Klikni pre da¾šie obrázky !',
    'send_success' => 'Vaša poh¾adnica bola odeslána',
    'send_failed' => 'Ospravedlòujeme sa, ale server nebol schopnı odosla Vašu poh¾adnicu zkúste
     to znovu za chví¾u...',
    'from' => 'Od',
    'your_name' => 'Vaše meno',
    'your_email' => 'Váš email',
    'to' => 'Komu',
    'rcpt_name' => 'Meno príjemcu',
    'rcpt_email' => 'Doruèi na email',
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
    'keywords' => 'K¾úèové slová',
    'pic_info_str' => '%sx%s - %sKB - %s zobrazení - %s hlas(ov)',
    'approve' => 'Schváli obrázok',
    'postpone_app' => 'Odloi schválenie',
    'del_pic' => 'Zmaza obrázok',
    'read_exif' => 'Naèíta znovu EXIF info', //cpg1.3.0
    'reset_view_count' => 'Vynulova poèítadlo zobrazení',
    'reset_votes' => 'Vynulova hlasy',
    'del_comm' => 'Zmaza komentáre',
    'upl_approval' => 'Potvrdenie uploadu',
    'edit_pics' => 'Upravi obrázky',
    'see_next' => 'Zobrazi ïalšie obrázky',
    'see_prev' => 'Zobrazit predcházajúce obrázky',
    'n_pic' => '%s obrázkov',
    'n_of_pic_to_disp' => 'Poèet obrázkov k zobrazeniu',
    'apply' => 'Uloi zmeny',
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
  'faq' => 'Èasto kladené otázky', //cpg1.3.0
  'toc' => 'Obsah', //cpg1.3.0
  'question' => 'Otázka: ', //cpg1.3.0
  'answer' => 'Odpoveï: ', //cpg1.3.0
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
  'err_already_logged_in' => 'U ste prihlásenı(á)!', //cpg1.3.0
  'enter_username_email' => 'Zadajte vaše prihlasovacie meno a email adresu', //cpg1.3.0
  'submit' => 'Proveï', //cpg1.3.0
  'failed_sending_email' => 'Email s pripomenutím hesla nemohol by odoslanı!', //cpg1.3.0
  'email_sent' => 'Na adresu 5s bol odoslanı mail z vašim uivate¾skım menom a heslom', //cpg1.3.0
  'err_unk_user' => 'Zadanı uívate¾ neexistuje!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - Pripomenutie hesla', //cpg1.3.0
  'passwd_reminder_body' => 'Poiadali ste o pripomenutia vašich prihlasovacích údajov:
U¾ivatelské jméno: %s
Heslo:             %s
Kliknite na %s pre prihlásenie.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
    'group_name' => 'Meno skupiny',
    'disk_quota' => 'Disková kvóta',
    'can_rate' => 'Môu hodnoti obrázky',
    'can_send_ecards' => 'môu posiela poh¾adnice',
    'can_post_com' => 'Môu posiela komentáre',
    'can_upload' => 'Môu nahráva obrázky',
    'can_have_gallery' => 'Môu ma osobnú galériu',
    'apply' => 'Uloi zmeny',
    'create_new_group' => 'Vytvori novú skupinu',
    'del_groups' => 'Zmaza vybrané skupiny',
    'confirm_del' => 'Pokia¾ zmaete túto skupinu všetci uívatelia, patriaci do tejto skupiny budú presunutí do skupiny \'Registered\' !\n\nPrajete si pokraèova ?',
    'title' => 'Spravova uívate¾ské skupiny',
    'approval_1' => 'Potvrdenie verejného. Upl. (1)',
    'approval_2' => 'Potvrdenie súkromného. Upl. (2)',
    'upload_form_config' => 'Konfigurácia formulára pre upload', //cpg1.3.0 
    'upload_form_config_values' => array( 'Iba jednotlivé súbory', 'Iba mnoho súborov', 'Iba URI uploads', 'Iba ZIP upload', 'Súbory-URI', 'Súbory-ZIP', 'URI-ZIP', 'Súbory-URI-ZIP'), //cpg1.3.0  //TODO
    'custom_user_upload'=>'U¾ivate¾ môe upravi poèet vstupních políèok pre upload?', //cpg1.3.0
    'num_file_upload'=>'Maximálny/presnı poèet políèok pre upload súborov', //cpg1.3.0
    'num_URI_upload'=>'Maximálny/presnı poèet políèok pre upload URI', //cpg1.3.0

    'note1' => '<b>(1)</b> Upload do verejnıch galerií vyaduje potvrdenie adminom',
    'note2' => '<b>(2)</b> Upload do galérie patriacej uívate¾om vyaduje potvrdenie adminom',
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
    'confirm_delete' => 'Ste si isı(á), e chcete zmaza túto galériu? \\nVšetky obrázky a komentáre pôjdu do pekla tie. Prajete si pokraèova.',
    'delete' => 'ZMAZA',
    'modify' => 'VLASTNOSTI',
    'edit_pics' => 'UPRAVI OBR.',
);

$lang_list_categories = array(
    'home' => 'Domov',
    'stat1' => '<b>[pictures]</b> obrázkov v <b>[albums]</b> galériach v <b>[cat]</b> kategóriách s <b>[comments]</b> komentármi zobrazené <b>[views]</b> krát',
    'stat2' => '<b>[pictures]</b> obrázkov v <b>[albums]</b> galériach zobrazené <b>[views]</b> krát',
    'xx_s_gallery' => '%s\' galerií',
    'stat3' => '<b>[pictures]</b> obrázkov v <b>[albums]</b> galériach s <b>[comments]</b> komentármi zobrazené <b>[views]</b> krát'
);

$lang_list_users = array(
    'user_list' => 'Zoznam uívate¾ov',
    'no_user_gal' => 'Nie sú iadne uívate¾ské galérie',
    'n_albums' => '%s galérií',
    'n_pics' => '%s obrázkov'
);

$lang_list_albums = array(
    'n_pictures' => '%s obrázkov',
    'last_added' => ', poslednı pridanı %s'
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
    'err_already_logged_in' => 'U ste prihlásenı !',
    'forgot_password_link' => 'Zabudol som svoje heslo.', //cpg1.3.0

);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
    'logout' => 'Odhlási',
    'bye' => 'Tak si to ui zase inde %s ...',
    'err_not_loged_in' => 'Nie ste prihlásenı !',
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
    'upd_alb_n' => 'Aktualizova album %s',
    'general_settings' => 'Základníé nastavenie',
    'alb_title' => 'Nadpis galérie',
    'alb_cat' => 'Kategórie galérie',
    'alb_desc' => 'Popis galérie',
    'alb_thumb' => 'Náh¾ad reprezentující album',
    'alb_perm' => 'Prístupové práva pre túto galériu',
    'can_view' => 'Album môu prehliada',
    'can_upload' => 'Návštevníci môu pridáva obrázky',
    'can_post_comments' => 'Povoli komentáre',
    'can_rate' => 'Návštevníci môu hlasova',
    'user_gal' => 'User Gallery',
    'no_cat' => '* Nieje kategória *',
    'alb_empty' => 'Galéria je prázdná',
    'last_uploaded' => 'Nejnovší obrázok',
    'public_alb' => 'ktoko¾vek (verejná galéria)',
    'me_only' => 'Iba ja',
    'owner_only' => 'Iba vlastník (%s)',
    'groupp_only' => 'Èlenovia skupiny \'%s\'',
    'err_no_alb_to_modify' => 'Album nie je moné modifikovat v databáze.',
    'update' => 'Aktualizova album',
    'notice1' => '(*) depending on %sgroups%s settings', //cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
    'already_rated' => 'Tento obázok ste u hodnotil(a)',
    'rate_ok' => 'Vás hlas bol prijatı. Ïakujeme.',
    'forbidden' => 'You can not rate your own files.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Administrátori serveru {SITE_NAME}, alebo tejto galérie si vyhradzujú právo zásahu do obsahu galérie napr. komentáre, mazánie obrázkov prípadne úprava (pokia¾ porušujú pravidlá galérie alebo dobré mravy).
Pokia¾ budú obrázky nahrané uívate¾om porušova zákon(y) budú ihneï po zistení ich umiestnení na serveri zmazané. Administrátori/správcovia tejto galérie sa dištancujú od
prípadného závadného obsahu nahraného na server uívate¾mi. Vlastníkom dát v galérii sú ich autori. Administrátori predpokladajú, e na server sú umiestòované uívate¾mi obrázky ku ktorım vlastní uivate¾ autorské práva.
<br />
Súhlasíte, e nebudete posiela akıko¾vek závadnı materiál ako vulgárny a obscénne obrázky/komentáre, akıko¾vek materiál vzbudzujúci nenávis, rasismus, alebo inı materiál porušujúcí zákony. Súhlasíte, e administrátori, správcovia a moderátori  {SITE_NAME}   majú právo zmaza prípadne upravi akıko¾vek materiál kedyko¾vek to uznajú za vhodné. Vloené informácie budú uloené na serveri a v databázi a nebudú poskytnuté iadnej tretej strane bez vášho súhlasu. Administátori/správcovia serveru  však nebudú ruèi za dáta na serveru uloená pokia¾ dôjde k akémuko¾vek útoku na sever.
<br />
<br />
Tieto stránky vyuívajú k uloeniu uivate¾skıch dát cookies. Cookies slúia iba pre zvıšenie konfortu pri pouívaní tejto aplikáce. Emailová adresa slúi len pre potvrdenie vašich údajov a posielanie hesla.<br />
<br />
Kliknutím na 'Súhlasím' súhlasíte z vyššie uvedenımi pravidlami..
EOT;

$lang_register_php = array(
    'page_title' => 'Registrácia nového uívate¾a',
    'term_cond' => 'Podmienky a pravidlá',
    'i_agree' => 'Súhlasím',
    'submit' => 'Posla registráciu',
    'err_user_exists' => 'Zadané uívate¾ské meno u existuje vyberte si prosím iné',
    'err_password_mismatch' => 'Heslá sa musia zhodova pokúste sa ich zada znova',
    'err_uname_short' => 'Minimálna dåka uivate¾skeho mena je 2 znaky',
    'err_password_short' => 'Heslo musí by aspoò 2 znaky dlhé',
    'err_uname_pass_diff' => 'Meno a heslo se nesmie zhodova',
    'err_invalid_email' => 'Bola zadaná neplatná emailová adresa',
    'err_duplicate_email' => 'Inı uívate¾ sa zaregistroval zo zadanım emailem. Email musí by jedineènı',
    'enter_info' => 'Zadané registraèné informácie',
    'required_info' => 'Vyadované informácie',
    'optional_info' => 'Volite¾né informácie',
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
    'failed_sending_email' => 'nie je moné odoslat potvrdenie registrácie !',
    'thank_you' => 'Ïakujeme za registráciu.<br /><br />Na adresu zadanú pri registrácii Vám budú doruèené informácie o aktiváci vášho úètu',
    'acct_created' => 'Váš u¾ivatelskı úèet bol bezchybne vytvorenı. Teraz sa prihláste pomocou vášho mena a hesla',
    'acct_active' => 'Váš úèet je odteraz aktívny prihlaste sa pomocou vášho mena a hesla.',
    'acct_already_act' => 'Váš úèet je u aktivny !',
    'acct_act_failed' => 'Tento úèet nemôe by aktivovanı !',
    'err_unk_user' => 'Vybranı uívate¾ neexistuje !',
    'x_s_profile' => '%s\' profil',
    'group' => 'Skupina',
    'reg_date' => 'Pripojenı',
    'disk_usage' => 'Vyuitie disku',
    'change_pass' => 'Zmeni heslo',
    'current_pass' => 'Súèasné heslo',
    'new_pass' => 'Nové heslo',
    'new_pass_again' => 'Nové heslo (kontrola)',
    'err_curr_pass' => 'Súèasné heslo zadáné nesprávne',
    'apply_modif' => 'potvrdi zmeny',
    'change_pass' => 'Zmeni heslo',
    'update_success' => 'Váš profil bol aktualizovanı',
    'pass_chg_success' => 'Vaše heslo bolo zmenené',
    'pass_chg_error' => 'Vaše heslo nebolo zmenené',
    'notify_admin_email_subject' => '%s - upozornení na registráciu', //cpg1.3.0 
    'notify_admin_email_body' => 'Novı uívate¾ s ménom "%s" sa registroval vo vašej galérii', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
Ïakujeme za registráciu na {SITE_NAME}

Vaše méno je : "{USER_NAME}"
Vaše heslo je: "{PASSWORD}"

Pre aktiváciu vášho úètu je treba kliknú na odkaz nišie alebo ho zkopírova
do adresného riadku vášho browseru a prejs na túto stránku


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
    'no_comment' => 'Nie sú iadne komentáre na kontrolu',
    'n_comm_del' => '%s komentár(ov) zmazanı(ch)',
    'n_comm_disp' => 'Poèet komentárov k zobrazeniu',
    'see_prev' => 'Predchádzajúci',
    'see_next' => 'Ïa¾ší',
    'del_comm' => 'Zmaza vybrané komentáre',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
    0 => 'Prehledáva obrázky',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
    'page_title' => 'Nájs nové obrázky',
    'select_dir' => 'Vybra adresár',
    'select_dir_msg' => 'Táto funkcia vám umoní dávkovo zpracova obrázky nahrané cez FTP.<br /><br />Vyberte adresár kde se nachádzajú obrázky k spracovániu',
    'no_pic_to_add' => 'Nie sú tu iadne obrázky k pridaniu',
    'need_one_album' => 'Potrebujete ma vytvorené aspoò jednu galériu',
    'warning' => 'Varovanie',
    'change_perm' => 'Skript nemôe zapisova do tohto adresára, musíte ho nastavi na CHMOD 755 alebo 777 pred pridáním obrázkov !',
    'target_album' => '<b>Vloi obrázky z &quot;</b>%s<b>&quot; do </b>%s',
    'folder' => 'Zloka',
    'image' => 'Obrázek',
    'album' => 'Galéria',
    'result' => 'Vısledok',
    'dir_ro' => 'Nezapisovatelná. ',
    'dir_cant_read' => 'Neèitate¾ná. ',
    'insert' => 'Pridávam nové obrázky do galérie',
    'list_new_pic' => 'Zoznam obrázkov',
    'insert_selected' => 'Vloi vybrané obrázky',
    'no_pic_found' => 'iadne nové obrázky',
    'be_patient' => 'Prosím buïte trpezlivı(á), program potrebuje na zpracovanie obrázkov nejakı ten èas.',
    'notes' =>  '<ul>'.
                '<li><b>OK</b> : Tieto obrázky boli pridané'.
                '<li><b>DP</b> : Zdvojenie!, Tento obrázek u existuje'.
                '<li><b>PB</b> : tento obrázok nie je moné prida, skontrolujte konfiguráciu prípadne prístupové práva'.
                '<li>Keï sa neukáe \'oznaèenie\' OK, DP, PB klepnite na obrázok a uvidíte chybovú hlášku generovanú PHP, ktorá Vám pomôe zisti príèinu problému'.
                '<li>Pokia¾ dôjde k timeoutu F5 alebo reload stránky by mal pomôc'.
                '</ul>',
     'select_album' => 'Vyberte galériu', //cpg1.3.0 
     'check_all' => 'Vybra všetko', //cpg1.3.0
     'uncheck_all' => 'Odznaèi všetko', //cpg1.3.0
                
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
                'title' => 'Vykopnutie uivate¾a',
                'user_name' => 'Uivate¾ské meno',
                'ip_address' => 'IP Adresa',
                'expiry' => 'Vyprší za (nevyplòova pre stále vykopnutie)',
                'edit_ban' => 'Uloi zmeny',
                'delete_ban' => 'Zmaza',
                'add_new' => 'Prida ïalšie vykopnutie',
                'add_ban' => 'Prida',
                'error_user' => 'Nemôem nájs uívate¾a', //cpg1.3.0 
                'error_specify' => 'Je potrebné zada buï uivate¾ské meno alebo IP adresu', //cpg1.3.0
                'error_ban_id' => 'Chybné ID pre zákaz!', //cpg1.3.0
                'error_admin_ban' => 'Nemôete zakáza sám seba!', //cpg1.3.0
                'error_server_ban' => 'Snaíte sa zakáza vlastnı server? To nie je moné urobi.', //cpg1.3.0
                'error_ip_forbidden' => 'Nie je moné zakáza toto IP - nie je dosiahnute¾né!', //cpg1.3.0
                'lookup_ip' => 'Nájs IP adresu', //cpg1.3.0
                'submit' => 'Odosla', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(  
    'title' => 'Upload obrázkov', 
    'custom_title' => 'Upravenı Formulár', //cpg1.3.0
    'cust_instr_1' => 'Môete zvoli poadovanı poèet vstupních políèok. Nie je ale moné prekroèi omedzenie poètu políèok uvedenı níšie.', //cpg1.3.0
    'cust_instr_2' => 'Box Number Requests', //cpg1.3.0
    'cust_instr_3' => 'Políèka pre upload súborov: %s', //cpg1.3.0
    'cust_instr_4' => 'Políèka pre URI/URL upload: %s', //cpg1.3.0
    'cust_instr_5' => 'Políèka pre URI/URL upload:', //cpg1.3.0
    'cust_instr_6' => 'Políèka pre upload súborov:', //cpg1.3.0
    'cust_instr_7' => 'Prosím zadajte poadovanı poèet ku kadému typu vstupnıch políèok pre upload. Potom stlaète \'Pokraèova\'. ', //cpg1.3.0
    'reg_instr_1' => 'Neplatná akcia pre vytváranie formulára.', //cpg1.3.0  
    'reg_instr_2' => 'Pomocou políèok dole môete nechat na server nahra súbory. Ve¾kos jednotlivıch nahrávanıch súborov pri uploade na server by nemala presiahnu %s KB. Súbory ZIP nahrané pomocí sekcí \'Upload Súborov\' alebo \'URI/URL Upload\' zostanú zkomprimované ako jeden súbor aj po nahraní na server.', //cpg1.3.0
    'reg_instr_3' => 'Pokia¾ chcete, aby súbory zabalené v archivu ZIP boly rozbalené, musíte poui pre zadanie súboru políèko v sekci \'Decompressive ZIP Upload\'.', //cpg1.3.0
    'reg_instr_4' => 'Pokia¾ pouíváte sekciu URI/URL upload, prosím zadávejte cestu k súboru takto: http://www.mojadomena.sk/obrazky/priklad1.jpg', //cpg1.3.0
    'reg_instr_5' => 'Po vyplnení formulára stlaète tlaèítko \'Pokraèova\'.', //cpg1.3.0
    'reg_instr_6' => 'Upload ZIP Archivu:', //cpg1.3.0
    'reg_instr_7' => 'Upload Súborov:', //cpg1.3.0
    'reg_instr_8' => 'URI/URL Uploads:', //cpg1.3.0
    'error_report' => 'Error Report', //cpg1.3.0
    'error_instr' => 'The following uploads encountered errors:', //cpg1.3.0
    'file_name_url' => 'File Name/URL', //cpg1.3.0
    'error_message' => 'Error Message', //cpg1.3.0
    'no_post' => 'File not uploaded by POST.', //cpg1.3.0
    'forb_ext' => 'Forbidden file extension.', //cpg1.3.0
    'exc_php_ini' => 'Prekroèena ve¾kos súboru povolená v php.ini.', //cpg1.3.0
    'exc_file_size' => 'Prekroèená ve¾kos súboru povolená galériou.', //cpg1.3.0
    'partial_upload' => 'Iba èiastoènı upload.', //cpg1.3.0
    'no_upload' => 'Neprobehol iadny upload súborov.', //cpg1.3.0
    'unknown_code' => 'Neznáma chyba PHP pri uploade.', //cpg1.3.0
    'no_temp_name' => 'iadny upload - iadne doèasné meno.', //cpg1.3.0
    'no_file_size' => 'Neobsahuje iadne dáta/rozbité', //cpg1.3.0
    'impossible' => 'Nebolo moné presunú.', //cpg1.3.0
    'not_image' => 'Niejw obrázkom', //cpg1.3.0
    'not_GD' => 'Chıba rozšírenie GD.', //cpg1.3.0
    'pixel_allowance' => 'Pixel allowance exceeded.', //cpg1.3.0 //TODO
    'incorrect_prefix' => 'Neplatnı URI/URL prefix', //cpg1.3.0
    'could_not_open_URI' => 'Nebolo moné otvori URI.', //cpg1.3.0
    'unsafe_URI' => 'Safety not verifiable.', //cpg1.3.0  //TODO
    'meta_data_failure' => 'Chyba v meta dátach', //cpg1.3.0
    'http_401' => '401 Neautorizovanı prístup', //cpg1.3.0
    'http_402' => '402 Poadována platba', //cpg1.3.0
    'http_403' => '403 Zakázanı prístup', //cpg1.3.0
    'http_404' => '404 Nebolo nájdené', //cpg1.3.0
    'http_500' => '500 Interná chyba serveru', //cpg1.3.0
    'http_503' => '503 Sluba nieje dostupná', //cpg1.3.0
    'MIME_extraction_failure' => 'MIME nebolo rozpoznané.', //cpg1.3.0
    'MIME_type_unknown' => 'Neznámy MIME typ', //cpg1.3.0
    'cant_create_write' => 'Nebolo moné vytvori súbor pre zápis.', //cpg1.3.0
    'not_writable' => 'Nebolo moné zapisova do súboru pre zápis.', //cpg1.3.0
    'cant_read_URI' => 'Nebolo moné preèíta URI/URL', //cpg1.3.0
    'cant_open_write_file' => 'Nebolo moné otvori súbor pre URI.', //cpg1.3.0
    'cant_write_write_file' => 'Nebolo moné zapisova do súboru pre URI.', //cpg1.3.0
    'cant_unzip' => 'Nebolo moné rozbali ZIP archiv.', //cpg1.3.0
    'unknown' => 'Neznámá chyba', //cpg1.3.0
    'succ' => 'Úspešnı Upload', //cpg1.3.0
    'success' => '%s súborov bolo úspešne nahranıch.', //cpg1.3.0
    'add' => 'Prosím stlaète \'Pokraèovat\' pre pridanie súborov do galérie.', //cpg1.3.0
    'failure' => 'Chyba pri Uploade', //cpg1.3.0
    'f_info' => 'Informácie o súbore', //cpg1.3.0
    'no_place' => 'Predchádzajúci súbor nie je moné umiestni.', //cpg1.3.0
    'yes_place' => 'Predchádzajúci súbor bol úspešne umiestnenı.', //cpg1.3.0
    'max_fsize' => 'Max. ve¾kos súboru je %s KB',
    'album' => 'Galéria',
    'picture' => 'Obrázok',
    'pic_title' => 'Nadpis obrázku',
    'description' => 'Popis obrázku',
    'keywords' => 'K¾úèové slová (oddelené medzerou)',
    'err_no_alb_uploadables' => 'Tu sa nachádza galéria, do ktorej je povolenı upload.', 
    'place_instr_1' => 'Prosím umiestnite teraz súbory do galerií. Môete tie zada informácie tıkajúce sa jednotlivıch súborov.', //cpg1.3.0
    'place_instr_2' => 'Ïa¾šie súbory je potreba umiestni. Prosím stlaète \'Pokraèova\'.', //cpg1.3.0
    'process_complete' => 'Uspešne ste umiestnil všetky súbory.', //cpg1.3.0

);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
    'title' => 'Spravovat u¾ivatele',
    'name_a' => 'Meno vzostup.',
    'name_d' => 'Meno zostup.',
    'group_a' => 'Skupina vzostup.',
    'group_d' => 'Skupina zostup.',
    'reg_a' => 'Datum registrace vzostup.',
    'reg_d' => 'Datum registrace zostup.',
    'pic_a' => 'Poèet obrázkov vzostup.',
    'pic_d' => 'Poèet obrázkov zostup.',
    'disku_a' => 'Vyu¾ití disku vzostup.',
    'disku_d' => 'Vyu¾ití disku zostup.',
    'lv_a' => 'Last visit ascending', //cpg1.3.0
    'lv_d' => 'Last visit descending', //cpg1.3.0
    'sort_by' => 'Riadi uívate¾a pod¾a',
    'err_no_users' => 'Tabulka uivate¾ov je prázdna!',
    'err_edit_self' => 'Tu nie je moné editova vlastnı profil pouite príslušnú vo¾bu pracujúcu s vašim profilom',
    'edit' => 'UPRAVI',
    'delete' => 'ZMAZA',
    'name' => 'Uiv. meno',
    'group' => 'Skupina Uiv.',
    'inactive' => 'Neaktivny',
    'operations' => 'Operácia',
    'pictures' => 'Obrázky',
    'disk_space' => 'Miesto vyuité / kvóta',
    'registered_on' => 'Registrovanı',
    'last_visit' => 'Posledná návšteva', //cpg1.3.0
    'u_user_on_p_pages' => '%d uivate¾ov na %d stránkách',
    'confirm_del' => 'Ste si istı(á), e chcete zmazat tohto uívate¾a ? \\nVšetky jeho obrázky, galéria a komentáre budou zmazané.',
    'mail' => 'MAIL',
    'err_unknown_user' => 'Vybranı uiv. neexistuje !',
    'modify_user' => 'Zmeni uiv.',
    'notes' => 'Poznámky',
    'note_list' => '<li>Pokia¾ nechcete zmeni heslo ponechajte políèko pre heslo prázdne',
    'password' => 'Heslo',
    'user_active' => 'Uiv. je aktívny',
    'user_group' => 'Uiv. Skupina',
    'user_email' => 'Uiv. emaill',
    'user_web_site' => 'Uiv. domácí stránka',
    'create_new_user' => 'Vytvori nového uívate¾a.',
    'user_location' => 'Miesto Uiv. (napr. Bratislava apod.)',
    'user_interests' => 'Uiv. záujmy',
    'user_occupation' => 'Uiv. povolanie',
    'latest_upload' => 'Recent uploads', //cpg1.3.0
    'never' => 'nikdy', //cpg1.3.0

);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
        'title' => 'Zmeni ve¾kos obrázku',
        'what_it_does' => 'Èo to robí?',
        'what_update_titles' => 'Aktualizova nadpisy pod¾a mena súborov',
        'what_delete_title' => 'Zmaza nadpisy',
        'what_rebuild' => 'Prerobi náh¾ady a zmenšené obrázky',
        'what_delete_originals' => 'Zmaza originály a nahradit ich stredními obrázkami',
        'file' => 'Súbor',
        'title_set_to' => 'Nastavi nadpis na',
        'submit_form' => 'odosla',
        'updated_succesfully' => 'Aktualizácia prebehla OK',
        'error_create' => 'CHYBA pri vytváraní',
        'continue' => 'Zpracova viac obrázkov',
        'main_success' => 'Súbor %s bol uspešne poui ako hlavnı obrázok',
        'error_rename' => 'Chyba premenovánia %s na %s',
        'error_not_found' => 'Súbor %s nebol nájdenı',
        'back' => 'zpä na hlavnú',
        'thumbs_wait' => 'Aktualizujem náh¾ady a/alebo stredné obrázky, prosím èakajte...',
        'thumbs_continue_wait' => 'Pokraèujem v aktualizácii náh¾adov a/alebo strednıch obrázkov...',
        'titles_wait' => 'Aktualizujem nadpisy, prosím èakajte...',
        'delete_wait' => 'Maem nadpisy, prosím èakejte...',
        'replace_wait' => 'Maem origináli a nahradzujem ich strednımi obrázkami, prosím èakajte...',
        'instruction' => 'Rıchle inštrukcie',
        'instruction_action' => 'Vyberte akci',
        'instruction_parameter' => 'Nastavi parametre',
        'instruction_album' => 'Vybra galériu',
        'instruction_press' => 'Stisknite %s',
        'update' => 'Aktualizova náh¾ady a/alebo stredné obrázky',
        'update_what' => 'Èo má by aktualizované',
        'update_thumb' => 'Len náh¾ady',
        'update_pic' => 'Iba stredné obrázky',
        'update_both' => 'Oboje náh¾ady aj stredné obrázky',
        'update_number' => 'Poèet obrázkov, ktoré zpracova na 1 kliknutie',
        'update_option' => '(Zníte èíslo pokia¾ máte problémy s timeoutom)',
        'filename_title' => 'Meno súboru ? Nadpis obrázku',
        'filename_how' => 'Ako sa má zmeni meno obrázku?',
        'filename_remove' => 'Odstranit .jpg koncovku a prepísa _ (podtrítka medzerami)',
        'filename_euro' => 'Zmeni 2003_11_23_13_20_20.jpg na 23/11/2003 13:20',
        'filename_us' => 'Zmeni 2003_11_23_13_20_20.jpg na 11/23/2003 13:20',
        'filename_time' => 'Zmeni 2003_11_23_13_20_20.jpg na 13:20',
        'delete' => 'Zmaza nadpisy obrázkov alebo originálne obrázky',
        'delete_title' => 'Zmaza nadpisy obrázkov',
        'delete_original' => 'Zmaza originálne obrázky',
        'delete_replace' => 'Zmaza originály a nahradit ich strednou verziou obrázkov',
        'select_album' => 'Vybra galériu',
        'delete_orphans' => 'Zmaza osamelé komentáre (platí pre všetky galérie)', //cpg1.3.0 
        'orphan_comment' => 'Nájdené osamelé komentáre', //cpg1.3.0
        'delete' => 'Zmaza', //cpg1.3.0 
        'delete_all' => 'Zmaza všetko', //cpg1.3.0
        'comment' => 'komentár: ', //cpg1.3.0
        'nonexist' => 'priradené k neexistujúcemu súboru # ', //cpg1.3.0
        'phpinfo' => 'Zobrazi phpinfo', //cpg1.3.0
        'update_db' => 'Update databázy', //cpg1.3.0
        'update_db_explanation' => 'Pokia¾ ste vymenili súbory aplikáce galéria coppermine, pridali modifikáciu alebo upgradovali zo staršej verzie, uistite sa, e ste spustili update databázy. To vytvorí potrebné tabu¾ky a/alebo konfiguraèné hodnoty vo vašej databáze.', //cpg1.3.0
);
?>
