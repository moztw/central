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
// CVS version: $Id: latvian-utf-8.php,v 1.8 2004/07/24 15:04:06 gaugau Exp $
// ------------------------------------------------------------------------- //

// info about translators and translated language
$lang_translation_info = array(
'lang_name_english' => 'Latvian',  //the name of your language in English, e.g. 'Greek' or 'Spanish'
'lang_name_native' => 'Latviski', //the name of your language in your mother tongue (for non-latin alphabets, use unicode), e.g. '&#917;&#955;&#955;&#951;&#957;&#953;&#954;&#940;' or 'Espa&ntilde;ol'
'lang_country_code' => 'lv', //the two-letter code for the country your language is most-often spoken (refer to http://www.iana.org/cctld/cctld-whois.htm), e.g. 'gr' or 'es'
'trans_name'=> 'Kaspars Priedols', //the name of the translator - can be a nickname
'trans_email' => 'house@tvertne.nu', //translator's email address (optional)
'trans_website' => 'http://foto.tvertne.nu/', //translator's website (optional) //.lv ONLY
'trans_date' => '2004-06-28', //the date the translation was created / last modified
);

$lang_charset = 'UTF-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('B', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Sv', 'Pr', 'Ot', 'Tr', 'Ct', 'Pt', 'Ss');
$lang_month = array('Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jûn', 'Jûl', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec');

// Some common strings
$lang_yes = 'Jâ';
$lang_no  = 'Nį';
$lang_back = 'ATGRIEZTIES';
$lang_continue = 'TURPINÂT';
$lang_info = 'Informâcija';
$lang_error = 'Kīûda';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt = '%d/%m/%Y %H:%M';
$lastcom_date_fmt = '%d/%m/%Y %H:%M';
$lastup_date_fmt = '%d/%m/%Y %H:%M';
$register_date_fmt = '%d/%m/%Y %H:%M';
$lasthit_date_fmt = '%d/%m/%Y %H:%M';
$comment_date_fmt = '%d/%m/%Y %H:%M';


// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*', 'pimp*', 'peū*', 'pipel*', 'bīaė*', 'nahu*', 'pist*', 'pisien*', 'mirl*', 'sûd*', 'bled', 'blad', 'pizde*', 'mauka', 'maucî*', 'ânus*', 'kaka', 'sûkâ');

$lang_meta_album_names = array(
    'random' => 'Izlases veida attįli',
    'lastup' => 'Jaunâkie papildinâjumi',
    'lastalb'=> 'Pįdįjie atjaunotie albumi', //new in cpg1.2.0
    'lastcom' => 'Jaunâkie komentâri',
    'topn' => 'Skatîtâkie',
    'toprated' => 'Vispopulârâkie',
    'lasthits' => 'Pįdįjie skatîtie',
    'search' => 'Meklįđanas rezultâti', //new in cpg1.2.0
    'favpics'=> 'Attįlu favorîti' //new in cpg1.2.0
);

$lang_errors = array(
        'access_denied' => 'Tev nav pieejas tiesîbu đai lapai.',
        'perm_denied' => 'Tev nav tiesîbu veikt đâdu darbîbu.',
        'param_missing' => 'Tika izsaukta komanda bez parametriem.',
        'non_exist_ap' => 'Izvįlįtais albums/attįls neeksistį!',
        'quota_exceeded' => 'Nav vietas uz diska.<br /><br />Tev ir pieđíirts ierobeūojums [quota]K, bet pađlaik jau aizōemti [space]K, tâpįc đî attįla pievienođana nav ieteicama (tiks pârsniegts ierobeūojums).',
        'gd_file_type_err' => 'Izmantojot GD attįlu bibliotįku, atīauts izmantot tikai JPEG un PNG formâtus.',
        'invalid_image' => 'Attįls bojâts vai arî sistįmas GD attįlu bibliotįka nespįj to atkodįt.',
        'resize_failed' => 'Nav iespįjams izveidot mazo attįlu vai izmainît tâ izmįrus.',
        'no_img_to_display' => 'Nav attįla',
        'non_exist_cat' => 'Izvįlįtâ sadaīa neeksistį',
        'orphan_cat' => 'Đai apakđsadaīai nav sadaīas, kam tâ piederįtu, lûdzu izmanto sadaīu menedūeri, lai atrisinâtu problįmu.',
        'directory_ro' => 'Direktorijâ \'%s\' nav atīauts rakstît, tâpįc attįlus nav iespįjams izdzįst.',
        'non_exist_comment' => 'Izvįlįtais komentârs neeksistį.',
        'pic_in_invalid_album' => 'Attįls atrodas neeksistįjođâ albumâ (%s)!?', //new in cpg1.2.0
        'banned' => 'Pieeja foto galerijai aizliegta.', //new in cpg1.2.0
        'not_with_udb' => 'Đî iespįja ir atslįgta, jo tai jâbût integrįtai kopâ ar foruma programmatûru. Trûkst attiecîgâs konfigurâcijas, vai nepiecieđams uzinstalįt forumu.', //new in cpg1.2.0
        'offline_title' => 'Paziōojums', //cpg1.3.0
        'offline_text' => 'Pađlaik notiek tehniski uzlabojumi - ienâc vįlâk', //cpg1.3.0
        'ecards_empty' => 'E-karđu sistįma nav aktivizįta!', //cpg1.3.0
        'action_failed' => 'Operâcija pârtraukta, jo notikusi kīûda.', //cpg1.3.0
        'no_zip' => 'Kompresįđana ZIP formâtâ nav pieejama.', //cpg1.3.0
        'zip_type' => 'Nav atīaujas pievienot ZIP formâta failus.', //cpg1.3.0

);

$lang_bbcode_help = 'Teksta formatįđanai atīauts izmantot: <li>[b]<b>trekni</b>[/b]</li> <li>[i]<i>slîpi</i>[/i]</li> <li>[url=http://adrese.com/]Norâdes teksts[/url]</li> <li>[email]vards@adrese.com[/email]</li>'; //cpg1.3.0

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
    'alb_list_title' => 'Uz albumu sarakstu',
    'alb_list_lnk' => 'Albumu saraksts',
    'my_gal_title' => 'Uz manu galeriju',
    'my_gal_lnk' => 'Mana galerija',
    'my_prof_lnk' => 'My profails',
    'adm_mode_title' => 'Pârslįgties Administratora reūîmâ',
    'adm_mode_lnk' => 'Administratora reūîms',
    'usr_mode_title' => 'Pârslįgties lietotâja reūîmâ',
    'usr_mode_lnk' => 'Lietotâja reūîms',
    'upload_pic_title' => 'Ielikt attįlu albumâ',
    'upload_pic_lnk' => 'Pievienot attįlu',
    'register_title' => 'Izveidot kontu',
    'register_lnk' => 'Reėistrįties',
    'login_lnk' => 'Pieslįgties',
    'logout_lnk' => 'Beigt darbu',
    'lastup_lnk' => 'Jaunâkie attįli',
    'lastcom_lnk' => 'Jaunâkie komentâri',
    'topn_lnk' => 'Skatîtâkie attįli',
    'toprated_lnk' => 'Vispopulârâkie',
    'search_lnk' => 'Meklįt',
    'fav_lnk' => 'Favorîti', //new in cpg1.2.0
  'memberlist_title' => 'Visi dalîbnieki', //cpg1.3.0
  'memberlist_lnk' => 'Dalîbnieku saraksts', //cpg1.3.0
  'faq_title' => 'Bieūâk uzdotie jautâjumi par &quot;Coppermine&quot;', //cpg1.3.0
  'faq_lnk' => 'FAQ', //cpg1.3.0
);

$lang_gallery_admin_menu = array(
    'upl_app_lnk' => 'Apstiprinât',
    'config_lnk' => 'Konfigurįt',
    'albums_lnk' => 'Albumi',
    'categories_lnk' => 'Sadaīas',
    'users_lnk' => 'Lietotâji',
    'groups_lnk' => 'Grupas',
    'comments_lnk' => 'Komentâri',
    'searchnew_lnk' => 'Attįlu grupas...',
    'util_lnk' => 'Mainît attįla izmįrus', //new in cpg1.2.0
    'ban_lnk' => 'Aiziegt piekīuvi', //new in cpg1.2.0
        'db_ecard_lnk' => 'E-kartes', //cpg1.3.0
);

$lang_user_admin_menu = array(
    'albmgr_lnk' => 'Izveidot manu albumu',
    'modifyalb_lnk' => 'Mainît manu albumu',
    'my_prof_lnk' => 'Profails',
);

$lang_cat_list = array(
    'category' => 'Sadaīas',
    'albums' => 'Albumi',
    'pictures' => 'Attįli',
);

$lang_album_list = array(
    'album_on_page' => '%d albums(-i) %d lapâ(s)'
);

$lang_thumb_view = array(
    'date' => 'LAIKS',
    //Sort by filename and title
    'name' => 'NOSAUKUMS', //new in cpg1.2.0
    'title' => 'VIRSRAKSTS', //new in cpg1.2.0
    'sort_da' => 'pįc datuma augođi',
    'sort_dd' => 'pįc datuma dilstođi',
    'sort_na' => 'pįc nosaukuma augođi',
    'sort_nd' => 'pįc nosaukuma dilstođi',
    'sort_ta' => 'pįc virsraksta augođi', //new in cpg1.2.0
    'pic_on_page' => '%d attįls(-i) %d lapâ(s)',
    'user_on_page' => '%d dalîbnieks(-i) %d lapâ(s)'
);

$lang_img_nav_bar = array(
    'thumb_title' => 'Atgriezties uz attįlu indeksu',
    'pic_info_title' => 'Râdît/paslįpt informâciju par attįlu',
    'slideshow_title' => 'Slaidđovs',
    'ecard_title' => 'Sûtît kâ e-kartiōu',
    'ecard_disabled' => 'e-kartiōu sûtîđana atslįgta',
    'ecard_disabled_msg' => 'Tev nav pietiekamu tiesîbu, lai sûtîtu e-kartiōas',
    'prev_title' => 'Iepriekđįjais attįls',
    'next_title' => 'Nâkamais attįls',
    'pic_pos' => 'ATTĮLS %s/%s',
);

$lang_rate_pic = array(
    'rate_this_pic' => 'Novįrtįt ',
    'no_votes' => '(novįrtįjuma nav)',
    'rating' => '(novįrtįjums: %s balsis no 5 (balsots %s reizi(-es))',
    'rubbish' => 'Mįsls',
    'poor' => 'Vâji',
    'fair' => 'Viduvįji',
    'good' => 'Labi',
    'excellent' => 'Teicami',
    'great' => 'Lieliski',
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
    CRITICAL_ERROR => 'Kritiska kīûda',
    'file' => 'Fails: ',
    'line' => 'Rinda: ',
);

$lang_display_thumbnails = array(
    'filename' => 'Nosaukums : ',
    'filesize' => 'Lielums : ',
    'dimensions' => 'Izmįrs : ',
    'date_added' => 'Pievienots : '
);

$lang_get_pic_data = array(
    'n_comments' => 'komentâri: <b>%s</b>',
    'n_views' => 'skatîjumi: <b>%s</b>',
    'n_votes' => 'vįrtįjumi: <b>%s</b>'
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Debug Info', //cpg1.3.0
  'select_all' => 'Select All', //cpg1.3.0
  'copy_and_paste_instructions' => 'If you\'re going to request help on the coppermine support board, copy-and-paste this debug output into your posting. Make sure to replace any passwords from the query with *** before posting.', //cpg1.3.0
  'phpinfo' => 'display phpinfo', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => 'Valoda pįc noklusįđanas', //cpg1.3.0
  'choose_language' => 'Izvįlies valodu', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'Tįma pįc noklusįđanas', //cpg1.3.0
  'choose_theme' => 'Izvįlies tįmu', //cpg1.3.0
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
    0 => 'Pametam administrįđanas reūîmu...',
    1 => 'Uz administrįđanas reūîmu...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
    'alb_need_name' => 'Kâ sauksim albumu?',
    'confirm_modifs' => 'Apstiprinât veiktâs izmaiōas?',
    'no_change' => 'Nekas nav mainîts!',
    'new_album' => 'Jauns albums',
    'confirm_delete1' => 'Tieđâm dzįst đo albumu?',
    'confirm_delete2' => '\nVisi attįli un komentâri tajâ tiks izdzįsti!',
    'select_first' => 'Vispirms jâizvįlas albumu',
    'alb_mrg' => 'Albumu menedūeris',
    'my_gallery' => '* Mana galerija *',
    'no_category' => '* Mana sadaīa *',
    'delete' => 'Dzįst',
    'new' => 'Jauns',
    'apply_modifs' => 'Apstiprinât izmaiōas',
    'select_category' => 'Izvįlįties sadaīu',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
    'miss_param' => 'Komandas \'%s\' izpildîđanai trûkst nepiecieđamie parametri!',
    'unknown_cat' => 'Izvįlįtâ sadaīa datu bâzį neeksistį',
    'usergal_cat_ro' => 'Lietotâja galerijas sadaīa nevar tikt dzįsta!',
    'manage_cat' => 'Administrįt sadaīas',
    'confirm_delete' => 'Tieđâm dzįst đo sadaīu',
    'category' => 'Sadaīa',
    'operations' => 'Darbîbas',
    'move_into' => 'Pârvietot uz',
    'update_create' => 'Modificįt/izveidot sadaīu',
    'parent_cat' => 'Pieder sadaīai',
    'cat_title' => 'Sadaīas virsraksts',
        'cat_thumb' => 'Sadaīas starpattįls', //cpg1.3.0
    'cat_desc' => 'Sadaīas apraksts'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
    'title' => 'Konfigurâcija',
    'restore_cfg' => 'Atjaunot noklusįtâs vįrtîbas',
    'save_cfg' => 'Saglabât jaunos uzstâdîjumus',
    'notes' => 'Piezîmes',
    'info' => 'Informâcija',
    'upd_success' => 'Coppermine konfigurâcija saglabâta',
    'restore_success' => 'Coppermine noklusįtâ konfigurâcija uzstâdîta',
    'name_a' => 'Nosaukums augođi',
    'name_d' => 'Nosaukums dilstođi',
    'title_a' => 'Virsraksts augođi', //new in cpg1.2.0
    'title_d' => 'Virsraksts dilstođi', //new in cpg1.2.0
    'date_a' => 'Datums augođi',
    'date_d' => 'Datums dilstođi',
    'th_any' => 'Max Aspect',
    'th_ht' => 'Augstums',
    'th_wd' => 'Platums',
    'label' => 'Teksts', //cpg1.3.0
    'item' => 'att.', //cpg1.3.0
    'debug_everyone' => 'Jebkurđ', //cpg1.3.0
    'debug_admin' => 'Tikai administrators', //cpg1.3.0
);

if (defined('CONFIG_PHP')) $lang_config_data = array(
    'Galvenie uzstâdîjumi',
    array('Nosaukums', 'gallery_name', 0),
    array('Apraksts', 'gallery_description', 0),
    array('Administrators', 'gallery_admin_email', 0),
    array('Adrese, kas bûs e-kartiōâ pie teksta \'Citi attįli...\'', 'ecards_more_pic_target', 0),
        array('Norit tehniski darbi. Galerija ir atslįgta.', 'offline', 1), //cpg1.3.0
        array('Log ecards', 'log_ecards', 1), //cpg1.3.0
        array('Atīaut lejupielâdįt ZIP attįlus', 'enable_zipdownload', 1), //cpg1.3.0

        'Valodas, Tįmas &amp; kodįđana',
    array('Valoda', 'lang', 5),
    array('Tįma', 'theme', 6),
        array('Râdît valodu izvįli', 'language_list', 1), //cpg1.3.0
        array('Râdît karodziōus', 'language_flags', 8), //cpg1.3.0
        array('Râdît &quot;reset&quot; valodu izvįlį', 'language_reset', 1), //cpg1.3.0
        array('Râdît tįmu sarakstu', 'theme_list', 1), //cpg1.3.0
        array('Râdît &quot;reset&quot; tįmu izvįlį', 'theme_reset', 1), //cpg1.3.0
        array('Râdît FAQ', 'display_faq', 1), //cpg1.3.0
        array('Râdît bbcode palîdzîbu un piemįrus', 'show_bbcode_help', 1), //cpg1.3.0
        array('Kodįjums (Character encoding)', 'charset', 4), //cpg1.3.0

        'Albumu saraksta skatîjums',
        array('Galvenâs tabulas platums (pikseīos vai %)', 'main_table_width', 0),
    array('Cik lîmeōos sadaīas atspoguīot', 'subcat_level', 0),
    array('Cik albumus atspoguīot', 'albums_per_page', 0),
    array('Cik kolonnâs atspoguīot albûmus', 'album_list_cols', 0),
    array('Cik lieli pikseīos bûs mazie attįli', 'alb_list_thumb_size', 0),
    array('Galvenâs lapas saturs', 'main_page_layout', 0),
    array('Râdît pirmâ lîmeōa mazos attįlus pa sadaīâm','first_level',1), //new in cpg1.2.0

    'Mazo attįlu skatîjums',
    array('Cik kolonnâs râdît mazos attįlus', 'thumbcols', 0),
    array('Cik rindâs râdît mazos attįlus', 'thumbrows', 0),
    array('Cik tabulas atspoguīot', 'max_tabs', 0),
    array('Blakus mazajam attįlam atspoguīot ne tikai attįla virsrakstu, bet arî aprakstu', 'caption_in_thumbview', 1),
        array('Râdît skatîđanâs reiūu skaitu blakus mazajam attįlam', 'views_in_thumbview', 1), //cpg1.3.0
    array('Atspoguīot komentâru skaitu', 'display_comment_count', 1),
        array('Râdît, kurđ uzlicis attįlu', 'display_uploader', 1), //cpg1.3.0
    array('Kâ kârtot attįlus', 'default_sort_order', 3),
    array('Minimâlais balsu skaits, lai attįls tiktu iekīauts vispopulârâko sarakstâ', 'min_votes_for_rating', 0),

    'Attįlu skatîđanâs &amp; Komentâri',
    array('Attįla tabulas platums (pikseīos vai %)', 'picture_table_width', 0),
    array('Attįla informâcija redzama pįc noklusįđanas', 'display_pic_info', 1),
    array('Filtrįt sliktus vârdus komentâros', 'filter_bad_words', 1),
    array('Atīaut sejiōas komentâros', 'enable_smilies', 1),
        array('Atīaut vairâkkârtįjus komentârus no vienas personas par vienu attįlu (atslįgt -flood protection-)', 'disable_comment_flood_protect', 1), //cpg1.3.0
    array('Max attįla apraksta garums', 'max_img_desc_length', 0),
    array('Max simbolu skaits vienâ vârdâ', 'max_com_wlength', 0),
    array('Max rindu skaits komentârâ', 'max_com_lines', 0),
    array('Max komentâra garums', 'max_com_size', 0),
    array('Filmas skatîjums', 'display_film_strip', 1), //new in cpg1.2.0
    array('Attįlu skaits filmas skatîjumâ', 'max_film_strip_items', 0), //new in cpg1.2.0
        array('Paziōot Administratoram par jaunu komentâru', 'email_comment_notification', 1), //cpg1.3.0
        array('Slaidđova intervâls (1 sek. = 1000 milisek.)', 'slideshow_interval', 0), //cpg1.3.0


    'Lielo un mazo attįlu kvalitâte',
    array('JPEG failu kvalitâte', 'jpeg_qual', 0),
    array('Max mazâ attįla platums vai augstums <b>*</b>', 'thumb_width', 0),
    array('Izmantojamie izmįri ( platums vai augstums )<b>*</b>', 'thumb_use', 0), //new in cpg1.2.0
    array('Izveidot arî \'starpattįlus\'','make_intermediate', 1),
    array('Max \'starpattįla\' platums vai augstums <b>*</b>', 'picture_width', 0),
    array('Max uzliktâ attįla lielums (KB)', 'max_upl_size', 0),
    array('Max uzliktâ attįla platums vai augstums (pikseīos)', 'max_upl_width_height', 0),


        'Failu un mazo attįlu sîkâki uzstâdîjumi', //cpg1.3.0
        array('Râdît privâta albûma ikonu tiem, kas nav pieslįguđies','show_private',1), //cpg1.3.0
        array('Aizliegtie simboli failu nosaukumos', 'forbiden_fname_char',0), //cpg1.3.0
        //array('Accepted file extensions for uploaded pictures', 'allowed_file_extensions',0), //cpg1.3.0
        array('Atīautie attįlu formâti', 'allowed_img_types',0), //cpg1.3.0
        array('Atīautie îsfilmu formâti', 'allowed_mov_types',0), //cpg1.3.0
        array('Atīautie audio formâti', 'allowed_snd_types',0), //cpg1.3.0
        array('Atīautie dokumentu formâti', 'allowed_doc_types',0), //cpg1.3.0
        array('Attįlu izmįru koriėįđanas metode','thumb_method',2), //cpg1.3.0
        array('Kur sistįmâ atrodas ImageMagick \'convert\' utilîta (piemįram, /usr/bin/X11/)', 'impath', 0), //cpg1.3.0
        //array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types',0), //cpg1.3.0
        array('ImageMagick komandrindas opcijas', 'im_options', 0), //cpg1.3.0
        array('Lasît EXIF informâciju no JPEG failiem', 'read_exif_data', 1), //cpg1.3.0
        array('Lasît IPTC informâciju no JPEG failiem', 'read_iptc_data', 1), //cpg1.3.0
        array('Albûma direktorija <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0), //cpg1.3.0
        array('Dalîbnieku failu direktorija <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0), //cpg1.3.0
        array('Direktorija vidįja izmįra attįlu glabâđanai <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0), //cpg1.3.0
        array('Mazo attįlu prefikss <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0), //cpg1.3.0
        array('Direktoriju opcijas', 'default_dir_mode', 0), //cpg1.3.0
        array('Failu opcijas', 'default_file_mode', 0), //cpg1.3.0


    'Lietotâju uzstâdîjumi',
    array('Atīaut jaunu lietotâju piereėistrįđanos', 'allow_user_registration', 1),
    array('Lietotâja sekmîgai reėistrâcija nepiecieđams e-pasta apstiprinâjums', 'reg_requires_valid_email', 1),
        array('Paziōot administratoram par jaunu dalîbnieka reėistrâciju', 'reg_notify_admin_email', 1), //cpg1.3.0
    array('Atīaut diviem daūâdiem lietotâjiem izmantot vienâdas e-pasta adreses', 'allow_duplicate_emails_addr', 1),
    array('Lietotâjs drîkst veidot personîgus albûmus', 'allow_private_albums', 1),
        array('Paziōot Administratoram par dalîbnieku, kam jâapstiprina faila pievienođana', 'upl_notify_admin_email', 1), //cpg1.3.0
        array('Atīaut skatîties informâciju par citiem dalîbniekiem, ja ir notikusi veiksmîga pieslįgđanâs sistįmai', 'allow_memberlist', 1), //cpg1.3.0

    'Rezerves lauki attįla aprakstam (ja neizmanto, atstâj tukđus)',
    array('Lauka 1 nosaukums', 'user_field1_name', 0),
    array('Lauka 2 nosaukums', 'user_field2_name', 0),
    array('Lauka 3 nosaukums', 'user_field3_name', 0),
    array('Lauka 4 nosaukums', 'user_field4_name', 0),

    'Lielo un mazo attįlu îpađie uzstâdîjumi',
    array('Râdît personîgâ albuma ikonu anonîmajiem apmeklįtâjiem','show_private',1), //new in cpg1.2.0
    array('Kâdi simboli aizliegti failu nosaukumos', 'forbiden_fname_char',0),
    array('Uzliekamo attįlu atīautie failu paplađinâjumi', 'allowed_file_extensions',0),
    array('Attįlu izmįru mainîđanas metodes','thumb_method',2),
    array('Ceīđ uz ImageMagick \'convert\' utilîtu (piemįram, /usr/bin/X11/)', 'impath', 0),
    array('Atīauti attįlu formâti (tikai priekđ ImageMagick)', 'allowed_img_types',0),
    array('Komandrindas parametri ImageMagick utilîtai', 'im_options', 0),
    array('Izmantot JPEG attįlu EXIF informâciju', 'read_exif_data', 1),
    array('Albumu direktorija <b>*</b>', 'fullpath', 0),
    array('Lietotâju albumu direktorija <b>*</b>', 'userpics', 0),
    array('Starpattįlu prefikss <b>*</b>', 'normal_pfx', 0),
    array('Mazo attįlu prefikss <b>*</b>', 'thumb_pfx', 0),
    array('Direktoriju skatîjuma reūîms pįc noklusįđanas', 'default_dir_mode', 0),
    array('Attįlu reūîms', 'default_file_mode', 0),
    array('Atslįgt peles labo taustiōu uz lielajiem attįliem (JavaScript)', 'disable_popup_rightclick', 1), //new in cpg1.2.0
    array('Atslįgt peles labo taustiōu &quot;parastajâs&quot; lapâs (JavaScript)', 'disable_gallery_rightclick', 1), //new in cpg1.2.0

    'Cepumi (cookies) &amp; Kodįjums',
    array('Cookie nosaukumus', 'cookie_name', 0),
    array('Cookie ceīđ', 'cookie_path', 0),
    array('Teksta kodįjums', 'charset', 4),

    'Citi uzstâdîjumi',
    array('Debug reūîms', 'debug_mode', 1),

    '<br /><div align="center">(*) Ar * atzîmįtos parametrus nav ieteicams mainît, ja galerîjâs jau ir attįli</div><br /><a name="notice2"></a>(**) Đî konfigurâcijas opcija neiespaidos lîdz đim pievienotos attįlus, bet iespaidos turpmâkâs operâcijas. Jau esođos failus iespįjams modificįt &quot;<a href="util.php">ar Administratora lîdzekīiem</a> (resize opcija no Administratora izvįlnes)&quot;.</div><br />', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Nosûtît e-kartiōu', //cpg1.3.0
  'ecard_sender' => 'Sûtîtâjs', //cpg1.3.0
  'ecard_recipient' => 'Saōįmįjs', //cpg1.3.0
  'ecard_date' => 'Datums', //cpg1.3.0
  'ecard_display' => 'Râdît e-kartiōu', //cpg1.3.0
  'ecard_name' => 'Vârds', //cpg1.3.0
  'ecard_email' => 'Epasts', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'augođi', //cpg1.3.0
  'ecard_descending' => 'dilstođi', //cpg1.3.0
  'ecard_sorted' => 'Sakârtots', //cpg1.3.0
  'ecard_by_date' => 'pįc datuma', //cpg1.3.0
  'ecard_by_sender_name' => 'pįc vârda', //cpg1.3.0
  'ecard_by_sender_email' => 'pįc sûtîtâja epasta adreses', //cpg1.3.0
  'ecard_by_sender_ip' => 'pįc sûtîtâja IP adreses', //cpg1.3.0
  'ecard_by_recipient_name' => 'pįc saōįmįja vârda', //cpg1.3.0
  'ecard_by_recipient_email' => 'pįc saōįmįja epasta', //cpg1.3.0
  'ecard_number' => 'atspoguīoti %s ieraksti no %s (kopâ %s)', //cpg1.3.0
  'ecard_goto_page' => 'uz lapu', //cpg1.3.0
  'ecard_records_per_page' => 'ieraksti vienâ lapâ', //cpg1.3.0
  'check_all' => 'Ieíeksįt visus', //cpg1.3.0
  'uncheck_all' => 'Atíeksįt visus', //cpg1.3.0
  'ecards_delete_selected' => 'Dzįst izvįlįtâs kartiōas', //cpg1.3.0
  'ecards_delete_confirm' => 'Vai tieđâm dzįst? Apstiprini!', //cpg1.3.0
  'ecards_delete_sure' => 'Esmu guvis nelauūamu pârliecîbu, ka tâ jâdara', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
    'empty_name_or_com' => 'Ja nebûs vârds un komentâra teksts, nekas nesanâks',
    'com_added' => 'Komentârs pievienots',
    'alb_need_title' => 'Kâds ir albuma virsraksts (nosaukums)?',
    'no_udp_needed' => 'Izmaiōas nav nepiecieđamas.',
    'alb_updated' => 'Albumâ veiksmîgi veiktas izmaiōas',
    'unknown_album' => 'Izvįlįtais albums neeksistį vai arî nav tiesîbu tajâ pievienot attįlus',
    'no_pic_uploaded' => 'Attįls netika uzlikts!<br /><br />Vai uz servera ir uzlikta atīauja đâdâm operâcijâm?',
    'err_mkdir' => 'Direktorija %s NEtika izveidota!',
    'dest_dir_ro' => 'Nav tiesîbu veikt ierakstu direktrijâ %s!',
    'err_move' => 'Nav iespįjams pârvietot %s uz %s !',
    'err_fsize_too_large' => 'Uzliekamâ attįla izmįrs pârsniedz max atīauto (max atīautais ir %s x %s) !',
    'err_imgsize_too_large' => 'Uzliekamâ attįla faila izmįrs pârsniedz max atīauto (max atīautais ir %s KB) !',
    'err_invalid_img' => 'Uzliekamais fails nav klasificįjams kâ attįls!',
    'allowed_img_types' => 'Tu drîksti uzlikt %s attįlus.',
    'err_insert_pic' => 'Attįls \'%s\' nevar tikt pievienots ',
    'upload_success' => 'Attįls veiksmîgi uzlikts<br /><br />Tas bûs redzams galerijâ, tiklîdz Administrators to bûs akceptįjis.',
    'info' => 'Informâcija',
    'com_added' => 'Komentârs pievienots',
    'alb_updated' => 'Albums modificįts',
    'err_comment_empty' => 'Nav komentâra!',
    'err_invalid_fext' => 'Atīauti faili ar đâdiem paplađinâjumiem : <br /><br />%s.',
    'no_flood' => 'Atvaino, bet tieđi tu arî esi pįdįjâ iesûtîtâ komentâra autors.<br /><br />Modificį sava pįdįjâ iesûtîtâ komentâra tekstu',
    'redirect_msg' => 'Notiek pâradresâcija.<br /><br /><br />Spied uz \'TURPINÂT\', ja lapa nepârlâdįjas',
    'upl_success' => 'Attįls veiksmîgi pievienots',
        'email_comment_subject' => 'Jauns foto galerijas komentârs', //cpg1.3.0
        'email_comment_body' => 'Kâds pievienojis komentâru, apskaties', //cpg1.3.0

);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
    'caption' => 'Teksts',
    'fs_pic' => 'pilnâ izmįra attįls',
    'del_success' => 'veiksmîgi izdzįsts',
    'ns_pic' => 'normâla izmįra attįls',
    'err_del' => 'nevar tikt izdzįsts',
    'thumb_pic' => 'mazais attįls',
    'comment' => 'komentârs',
    'im_in_alb' => 'attįls albumâ',
    'alb_del_success' => 'Albums \'%s\' izdzįsts',
    'alb_mgr' => 'Albuma menedūeris',
    'err_invalid_data' => 'Saōemta nekorekta informâcija \'%s\'',
    'create_alb' => 'Tiek veidots albums \'%s\'',
    'update_alb' => 'Tiek modificįts albums \'%s\' ar virsrakstu \'%s\' un indeksu \'%s\'',
    'del_pic' => 'Dzįst attįlu',
    'del_alb' => 'Dzįst albumu',
    'del_user' => 'Dzįst lietotâju',
    'err_unknown_user' => 'Izvįlįtais lietotâjs neeksistį!',
    'comment_deleted' => 'Komentârs veiksmîgi izdzįsts',
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
    'confirm_del' => 'Tieđâm DZĮST đo attįlu? \\nArî komentâri tiks izdzįsti.',
    'del_pic' => 'IZDZĮST ĐO ATTĮLU',
    'size' => '%s x %s px',
    'views' => '%s reizes',
    'slideshow' => 'Slaidđovs',
    'stop_slideshow' => 'APSTÂDINÂT SLAIDĐOVU',
    'view_fs' => 'Uzspied, lai redzįtu pilna izmįra attįlu',
        'edit_pic' => 'Rediėįt aprakstu', //cpg1.3.0
        'crop_pic' => 'Izgriezt un sagriezt (Crop and Rotate)', //cpg1.3.0
);

$lang_picinfo = array(
    'title' =>'Informâcija par attįlu',
    'Filename' => 'Attįls',
    'Album name' => 'Albums',
    'Rating' => 'Vįrtįjums (%s balsis)',
    'Keywords' => 'Atslįgas vârdi',
    'File Size' => 'Faila lielums',
    'Dimensions' => 'Izmįrs',
    'Displayed' => 'Attįlots',
    'Camera' => 'Kamera',
    'Date taken' => 'Uzōemđanas datums',
    'Aperture' => 'Objektîva diametrs',
    'Exposure time' => 'Ekspozîcijas laiks',
    'Focal length' => 'Fokuss',
    'Comment' => 'Komentâri',
    'addFav'=>'Uz favorîtiem', //new in cpg1.2.0
    'addFavPhrase'=>'Favorîti', //new in cpg1.2.0
    'remFav'=>'Dzįst no favorîtiem', //new in cpg1.2.0
        'iptcTitle'=>'IPTC Title', //cpg1.3.0
        'iptcCopyright'=>'IPTC Copyright', //cpg1.3.0
        'iptcKeywords'=>'IPTC Keywords', //cpg1.3.0
        'iptcCategory'=>'IPTC Category', //cpg1.3.0
        'iptcSubCategories'=>'IPTC Sub Categories', //cpg1.3.0

);

$lang_display_comments = array(
    'OK' => 'OK',
    'edit_title' => 'Modificįt komentâru',
    'confirm_delete' => 'Tieđâm DZĮST đo komentâru?',
    'add_your_comment' => 'Pievienot komentâru',
    'name'=>'Vârds', //new in cpg1.2.0
    'comment'=>'Komentârs', //new in cpg1.2.0
    'your_name' => 'Anonîms', //new in cpg1.2.0
);

$lang_fullsize_popup = array(
        'click_to_close' => 'Uzklikđíini uz attįla, lai aizvįrtu đo logu', //new in cpg1.2.0
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
    'title' => 'Nosûtît e-kartiōu',
    'invalid_email' => '<b>UZMANÎBU</b> : kīûdaina adrese!',
    'ecard_title' => 'Sveiciens no %s',
    'view_ecard' => 'Đo sveicienu var redzįt arî sekojođa adresį',
    'view_more_pics' => 'Citi forđi attįli...',
    'send_success' => 'E-kartiōa nosûtîta',
    'send_failed' => 'Atvaino, serveris nevar nosûtît tavu E-kartiōu...',
    'from' => 'No kâ',
    'your_name' => 'Vârds',
    'your_email' => 'E-pasta adrese',
    'to' => 'Kam',
    'rcpt_name' => 'Saōemįja vârds',
    'rcpt_email' => 'Saōįmįja e-pasta adrese',
    'greetings' => 'Sveiciens',
    'message' => 'Pilnais teksts',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
    'pic_info' => 'Attįla&nbsp;dati',
    'album' => 'Albums',
    'title' => 'Virsraksts',
    'desc' => 'Apraksts',
    'keywords' => 'Atslįgas vârdi',
    'pic_info_str' => '%sx%s - %sKB - %s skatîjumi - %s balsis',
    'approve' => 'Apstiprinât attįla pievienođanu',
    'postpone_app' => 'Noraidît attįla pievienođanu',
    'del_pic' => 'Dzįst attįlu',
    'reset_view_count' => 'Nodzįst skatîjumi skaitîtâju',
    'reset_votes' => 'Nodzįst balsojumu skaitu',
    'del_comm' => 'Dzįst komentârus',
    'upl_approval' => 'Uzlikđanas apstiprinâjums',
    'edit_pics' => 'Modificįt attįlus',
    'see_next' => 'Iepriekđįjie attįli',
    'see_prev' => 'Nâkamie attįli',
    'n_pic' => '%s attįli',
    'n_of_pic_to_disp' => 'Cik attįlus atspoguīot',
    'apply' => 'Apstiprinât izmaiōas'
);

// ------------------------------------------------------------------------- //
// File faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Frequently Asked Questions', //cpg1.3.0
  'toc' => 'Table of contents', //cpg1.3.0
  'question' => 'Question: ', //cpg1.3.0
  'answer' => 'Answer: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'General FAQ', //cpg1.3.0
  array('Why do I need to register?', 'Registration may or may not be required by the administrator. Registration gives a member additional features such as uploading, having a favorite list, rating pictures and posting comments etc.', 'allow_user_registration', '0'), //cpg1.3.0
  array('How do I register?', 'Go to &quot;Register&quot; and fill out the required fields (and the optional ones if you want to).<br />If the Administrator has Email Activation enabled ,then after submitting your information you should recieve an email message at the address that you have submitted while registering, giving you instructions on how to activate your membership. Your membership must be activated in order for you to login.', 'allow_user_registration', '1'), //cpg1.3.0
  array('How Do I login?', 'Go to &quot;Login&quot;, submit your username and password and check &quot;Remember Me&quot; so you will be logged in on the site if you should leave it.<br /><b>IMPORTANT:Cookies must be enabled and the cookie from this site must not be deleted in order to use &quot;Remember Me&quot;.</b>', 'offline', 0), //cpg1.3.0
  array('Why can I not login?', 'Did you register and click the link that was sent to you via email?. The link will activate your account. For other login problems contact the site administrator.', 'offline', 0), //cpg1.3.0
  array('What if I forgot my password?', 'If this site has a &quot;Forgot password&quot; link then use it. Other than that contact the site administrator for a new password.', 'offline', 0), //cpg1.3.0
  //array('What if I changed my email address?', 'Just simply login and change your email address through &quot;Profile&quot;', 'offline', 0), //cpg1.3.0
  array('How do I save a picture to &quot;My Favorites&quot;?', 'Click on a picture and click on the &quot;picture info&quot; link (<img src="images/info.gif" width="16" height="16" border="0" alt="Picture information" />); scroll down to the picture information set and click &quot;Add to fav&quot;.<br />The administrator may have the &quot;picture information&quot; on by default.<br />IMPORTANT:Cookies must be enabled and the cookie from this site must not be deleted.', 'offline', 0), //cpg1.3.0
  array('How do I rate a file?', 'Click on a thumbnail and go to the bottom and choose a rating.', 'offline', 0), //cpg1.3.0
  array('How do I post a comment for a picture?', 'Click on a thumbnail and go to the bottom and post a comment.', 'offline', 0), //cpg1.3.0
array('How do I upload a file?', 'Go to &quot;Upload&quot;and select the album that you want to upload to, click &quot;Browse&quot; and find the file to upload and click &quot;open&quot; (add a title and description if you want to) and click &quot;Submit&quot;', 'allow_private_albums', 0), //cpg1.3.0
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
  array('What\'s &quot;Top Rated&quot;?', 'This feature shows the top rated files rated by the users, showing the average rating (e.g: five users each gave a <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: the file would have an average rating of <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;Five users rated the file from 1 to 5 (1,2,3,4,5) would result in an average <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />The ratings go from <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (best) to <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (worst).', 'offline', 0), //cpg1.3.0
  array('What\'s &quot;My Favorites&quot;?', 'This feature will let a user store a favorite file in the cookie that was sent to your computer.', 'offline', 0), //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Paroles atgâdinâtâjs', //cpg1.3.0
  'err_already_logged_in' => 'Tu jau esi pieslįdzies!', //cpg1.3.0
  'enter_username_email' => 'Tavs dalîbnieka vârds vai epasta adrese', //cpg1.3.0
  'submit' => 'Aiziet!', //cpg1.3.0
  'failed_sending_email' => 'Neko neav iespįjams nosûtît!', //cpg1.3.0
  'email_sent' => 'Vįstule ar dalîbnieka informâciju tika nosûtîta uz %s', //cpg1.3.0
  'err_unk_user' => 'Nav tâda dalîbnieka!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - Paroles atgâdinâtâjs', //cpg1.3.0
  'passwd_reminder_body' => 'Saōįmâm pieprasîjumu par dalîbnieku:
Username: %s
Password: %s
Spied %s un pieslįdzies.', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
    'group_name' => 'Grupa',
    'disk_quota' => 'Kvota (atmiōas ierobeūojumi)',
    'can_rate' => 'Drîkst vįrtįt attįlus',
    'can_send_ecards' => 'Drîkst sûtît e-kartiōas',
    'can_post_com' => 'Drîkst komentįt',
    'can_upload' => 'Drîkst likt attįlus',
    'can_have_gallery' => 'Drîkst bût personîga galerija',
    'apply' => 'Apstiprinât izmaiōas',
    'create_new_group' => 'Izveidot jaunu grupu',
    'del_groups' => 'Dzįst grupu(-as)',
    'confirm_del' => 'Uzmanîbu! Dzįđot grupu, visi tai piederîgie lietotâji tiks pârvietoti uz reėistrįto lietotâju grupu!\n\nTurpinât?',
    'title' => 'Administrįt lietotâju grupas',
    'approval_1' => 'Publisks uzlikđanas apstiprinâjums (1)',
    'approval_2' => 'Privâts uzlikđanas apstiprinâjums (2)',
        'upload_form_config' => 'Pievienođanas formas rediėįđana', //cpg1.3.0
        'upload_form_config_values' => array( 'Tikai pa vienam failam', 'Multiple file uploads only', 'URI uploads only', 'ZIP upload only', 'File-URI', 'File-ZIP', 'URI-ZIP', 'File-URI-ZIP'), //cpg1.3.0
        'custom_user_upload'=>'Vai dalîbniekam ir atīauts mainît rediėįđanas formu?', //cpg1.3.0
        'num_file_upload'=>'Cik failu pievienođanas lauciōus râdît?', //cpg1.3.0
        'num_URI_upload'=>'Cik URI lauciōus râdît?', //cpg1.3.0
    'note1' => '<b>(1)</b> Attįlu uzlikđanai publiskâ albûmâ ir nepiecieđama administratora atīauja',
    'note2' => '<b>(2)</b> Attįlu pievienođanai albumâ, kas pieder đim lietotâjam, nepiecieđama administratora atīauja',
    'notes' => 'Piezîmes'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
    'welcome' => 'Laipni lûdzam!'
);

$lang_album_admin_menu = array(
    'confirm_delete' => 'Tieđâm DZĮST đo albumu? \\nVisi attįli un komentâri tajâ tiks izdzįsti.',
    'delete' => 'IZDZĮST',
    'modify' => 'UZSTÂDÎJUMI',
    'edit_pics' => 'MODIFICĮT ATTĮLUS',
);

$lang_list_categories = array(
    'home' => 'Galvenâ lapa',
    'stat1' => 'attįli: <b>[pictures]</b> | albumi: <b>[albums]</b> | sadaīas: <b>[cat]</b> | komentâri: <b>[comments]</b> | <b>skatîts [views]</b> reizes',
    'stat2' => 'attįli: <b>[pictures]</b> | albumi: <b>[albums]</b> | skatîti <b>[views]</b> reizes',
    'xx_s_gallery' => 'Autors %s',
    'stat3' => '<b>[pictures]</b> attįli | <b>[albums]</b> albumi | <b>[comments]</b> komentâri | skatîti <b>[views]</b> reizes'
);

$lang_list_users = array(
    'user_list' => 'Lietotâju saraksts',
    'no_user_gal' => 'Nav lietotâju galerijas',
    'n_albums' => 'albumi: <b>%s</b>',
    'n_pics' => 'attįli: <b>%s</b>'
);

$lang_list_albums = array(
    'n_pictures' => '<b>%s</b> attįli',
    'last_added' => ', pįdįjais pievienots <b>%s</b>'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //
//
// Login->Latvian????
// Logout->Latvian???
//

if (defined('LOGIN_PHP')) $lang_login_php = array(
    'login' => 'Pieslįgties',
    'enter_login_pswd' => 'Pieslįdzies ar savu lietotâja vârdu un paroli',
    'username' => 'Vârds',
    'password' => 'Parole',
    'remember_me' => 'Atcerįties mani arî turpmâk',
    'welcome' => 'Sveicinâts, %s ...',
    'err_login' => '*** Vârds vai/un parole nepareizi. Mįėinâsi vįlreiz? ***',
    'err_already_logged_in' => 'Tu jau esi sistįmâ!',
        'forgot_password_link' => 'Aizmirsu paroli!', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
    'logout' => 'Iziet',
    'bye' => 'Visu labu,  %s ...',
    'err_not_loged_in' => 'Jâpieslįdzas sistįmai!',
);

// ------------------------------------------------------------------------- //
// File phpinfo.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP info', //cpg1.3.0
  'explanation' => 'This is the output generated by the PHP-function <a href="http://www.php.net/phpinfo">phpinfo()</a>, displayed within Copermine (trimming the output at the right corner).', //cpg1.3.0
  'no_link' => 'Having others see your phpinfo can be a security risk, that\'s why this page is only visible when you\'re logged in as admin. You can not post a link to this page for others, they will be denied access.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
    'upd_alb_n' => 'Modificįt albumu %s',
    'general_settings' => 'Galvenie uzstâdîjumi',
    'alb_title' => 'Albuma virsraksts',
    'alb_cat' => 'Sadaīa',
    'alb_desc' => 'Albuma apraksts',
    'alb_thumb' => 'Albuma mazais attįls',
    'alb_perm' => 'Albuma lietotâju tiesîbas',
    'can_view' => 'Albumu var skatîties',
    'can_upload' => 'Apmeklįtâjie drîkst pievienot attįlus',
    'can_post_comments' => 'Apmeklįtâji drîkst komentįt',
    'can_rate' => 'Apmeklįtâji drîkst vįrtįt attįlus',
    'user_gal' => 'Lietotâja galerija',
    'no_cat' => '* Kategorijas nav *',
    'alb_empty' => 'Albums ir tukđs',
    'last_uploaded' => 'Pįdejoreiz uzlikts attįls',
    'public_alb' => 'Ikviens (publiskais albums)',
    'me_only' => 'Tikai es',
    'owner_only' => 'Tikai albuma îpađnieks (%s)',
    'groupp_only' => 'Tikai \'%s\' grupâ esođie',
    'err_no_alb_to_modify' => 'Tev nav tiesîbu modificįt albumus.',
    'update' => 'Saglabât izmaiōas'
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
    'already_rated' => 'Atvaino, bet tu jau esi iesniedzis savu vįrtįjumu',
    'rate_ok' => 'Vįrtįjums pieōemts',
        'forbidden' => 'Vįrtįsi pats savus attįlus?', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Ar đo Tu apōemies neievietot citus aizskarođus, piedauzîgus, vulgârus,
apmelojođus, pretîgus, draudođus, seksuâli orientįtus, vai jebkâdus citus
materiâlus, kas pârkâpj jebkâdus likumus. Likumu nezinâđana neatbrîvo
no atbildîbas!!! Tu piekrîti, ka đîs lapas webmasters, administrators un
moderators ir tiesîgi izdzįst vai mainît saturu jebkurâ laikâ, kad vien
vįlâs. Kâ lietotâjs Tu piekrîti, ka visa informâcija ko Tu ievadîsi
tiks saglabâta datubâzį.<br />
<br />
Đî lapa izmanto <em>cookies</em> tehnoloėiju, lai saglabâtu informâciju tavâ datorâ.
<em>Cookies</em> vienîgi uzlabo lapas parâdîđanas kvalitâti. E-pasta adrese
tiek izmantota vienîgi Tavas reėistrâcijas apstiprinâđanai,
lai nosûtîtu paroli.<br />
<br />
Izvįloties zemâk <bold>Es piekrîtu</bold> Tu piekrîti visam iepriekđ rakstîtajam.
EOT;

$lang_register_php = array(
    'page_title' => 'Lietotâja reėistrâcija',
    'term_cond' => 'Vienođanâs nosacîjumi',
    'i_agree' => 'Es piekrîtu',
    'submit' => 'Apstiprinât reėistrâciju',
    'err_user_exists' => 'Đis lietotâja vârds jau ir reėistrįts, izvįlies citu',
    'err_password_mismatch' => 'Paroles nesakrît, raksti vįlreiz',
    'err_uname_short' => 'Lietotâja vârda minimâlais simbolu skaits ir 2',
    'err_password_short' => 'Parolį jâbût ne mazâk kâ 2 simboliem',
    'err_uname_pass_diff' => 'Lietotâja vârds un parole nedrîkst bût vienâdi',
    'err_invalid_email' => 'E-pasta adres ir nepareiza',
    'err_duplicate_email' => 'Đâda email adrese jau ir datu bâzį',
    'enter_info' => 'Reėistrâcijas informâcija',
    'required_info' => 'Nepiecieđamâ informâcija',
    'optional_info' => 'Neobligâtâ informâcija',
    'username' => 'Lietotâja vârds',
    'password' => 'Parole',
    'password_again' => 'Vįlreiz parole',
    'email' => 'E-pasts',
    'location' => 'Atrađanâs vieta',
    'interests' => 'Intereses',
    'website' => 'Mâjas lapa',
    'occupation' => 'Nodarbođanâs',
    'error' => 'KĪÛDA',
    'confirm_email_subject' => '%s - Reėistrâcijas apstiprinâjums',
    'information' => 'Informâcija',
    'failed_sending_email' => 'Nevar tikt nosûtîta reėistrâcijas apstiprinâjuma vįstule!',
    'thank_you' => 'Paldies par reėistrįđanos.<br /><br />Vįstule ar sîkâku informâciju, kâ pabeigt reėistrįđanâs procesu, tika nosûtîta uz iepriekđ minįto adresi.',
    'acct_created' => 'Konts izveidots un tu vari pieslįgties ar savu lietotâja vârdu un paroli',
    'acct_active' => 'Konts ir aktîvs un tu tagad vari pieslįgties sistįmai',
    'acct_already_act' => 'Konts jau ir aktîvs!',
    'acct_act_failed' => 'Đis konts nevar tikt aktivizįts!',
    'err_unk_user' => 'Izvįlįtais lietotâjs neeksistį!',
    'x_s_profile' => '%s : profails',
    'group' => 'Grupa',
    'reg_date' => 'Pievienojies',
    'disk_usage' => 'Diska izmantođana',
    'change_pass' => 'Nomainît paroli',
    'current_pass' => 'Pađreizįjâ parole',
    'new_pass' => 'Jauna parole',
    'new_pass_again' => 'Vįlreiz jaunâ parole',
    'err_curr_pass' => 'Pađreizįjâ parole nepareiza',
    'apply_modif' => 'Apstiprinât izmaiōas',
    'change_pass' => 'Nomainît paroli',
    'update_success' => 'Profails izmainîts',
    'pass_chg_success' => 'Parole nomainîta',
    'pass_chg_error' => 'Parole netika nomainîta',
        'notify_admin_email_subject' => '%s - reėistrâcijas paziōojums', //cpg1.3.0
        'notify_admin_email_body' => 'Jauns dalîbnieks "%s" piereėistrįjies', //cpg1.3.0

);

$lang_register_confirm_email = <<<EOT
Paldies par reėistrįđanos {SITE_NAME}

Lietotâja vârds : "{USER_NAME}"
Lietotâja parole : "{PASSWORD}"

Lai aktivizįtu savu kontu, nepiecieđams ielâdįt zemâk redzamo lapu.

{ACT_LINK}

Lai veicas,

{SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
    'title' => 'Apskatîties komentârus',
    'no_comment' => 'Komentâru nav',
    'n_comm_del' => '%s komentâri izdzįsti',
    'n_comm_disp' => 'Cik komentârus atspoguīot',
    'see_prev' => 'Iepriekđįjie',
    'see_next' => 'Nâkamie',
    'del_comm' => 'Dzįst izvįlįtos komentârus',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
    0 => 'Meklįt attįlu kolekcijâ',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
    'page_title' => 'Meklįt jaunus attįlus',
    'select_dir' => 'Izvįlįties direktoriju',
    'select_dir_msg' => 'Đî funkcija īauj pievienot daudzus attįlus vienlaikus, ja tie iepriekđ uzlikti ar FTP.<br /><br />Izvįlies direktoriju, kur tika uzlikti attįli',
    'no_pic_to_add' => 'Nav attįlu, ko varįtu pievienot',
    'need_one_album' => 'Lai izmantotu đo funkciju, nepiecieđams vismaz viens albums',
    'warning' => 'Uzmanîbu',
    'change_perm' => 'nav pieeja direktorijai, tai jâizmaina tiesîbas (chmod) no 755 uz 777, lai varįtu pievienot attįlus!',
    'target_album' => '<b>Ievietot attįlus &quot;</b>%s<b>&quot; </b>%s',
    'folder' => 'Direktorija',
    'image' => 'Attįls',
    'album' => 'Albums',
    'result' => 'Rezultâti',
    'dir_ro' => 'Nav rakstîđanas tiesîbu. ',
    'dir_cant_read' => 'Nav lasîđanas tiesîbu. ',
    'insert' => 'Jaunu attįlu pievienođana',
    'list_new_pic' => 'Jauno attįlu saraksts',
    'insert_selected' => 'Pievienot izvįlįtos attįlus',
    'no_pic_found' => 'Jauni attįli netika atrasti',
    'be_patient' => 'Lûdzu esiet pacietîgi, kamįr tiek pievienoti jaunie attįli',
        'no_album' => 'Albûms nav izvįlįts',  //cpg1.3.0
    'notes' =>  '<ul>'.
                '<li><b>OK</b> : attįls veiksmîgi pievienots'.
                '<li><b>DP</b> : nozîmį, ka tâds attįls jau ir datu bâzį'.
                '<li><b>PB</b> : attįlu nevar pievienot, jâpârbauda pieejas tiesîbas'.
                                '<li><b>NA</b> : nozîmį, ka neesi izvįlįjies albûmu, kur ievietot đos foto. Spied \'<a href="javascript:history.back(1)">atpakaī pogu</a>\' un izvįlies. Ja nav neviena albûma, <a href="albmgr.php">vispirms izveidot</a></li>'.
                '<li>Ja OK, DP, PB \'zîmes\' neparâdâs, jâklikđíina uz attįla, kas parâdâs, lai iegûtu detalizįtâku kīûdas aprakstu'.
                '<li>Ja pârlûkâ parâdâs paziōojums par taimautu, lapa ir jâpârlâdį'.
                '</ul>',
        'select_album' => 'izvįlįties albûmu', //cpg1.3.0
        'check_all' => 'ieíeksįt visu', //cpg1.3.0
        'uncheck_all' => 'atíeksįt visu', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
                'title' => 'Aizliegt pieeju', //new in cpg1.2.0
                'user_name' => 'Lietotâjs', //new in cpg1.2.0
                'ip_address' => 'IP adrese', //new in cpg1.2.0
                'expiry' => 'Darbojas lîdz (tukđs nozîmį - bezgalîgi)', //new in cpg1.2.0
                'edit_ban' => 'Saglabât', //new in cpg1.2.0
                'delete_ban' => 'Dzįst', //new in cpg1.2.0
                'add_new' => 'Jauns ieraksts', //new in cpg1.2.0
                'add_ban' => 'Pievienot', //new in cpg1.2.0
                                'error_user' => 'Nevar atrast tâdu dalîbnieku', //cpg1.3.0
                                'error_specify' => 'Nepiecieđams dalîbnieka vârds vai IP adrese', //cpg1.3.0
                                'error_ban_id' => 'Nepareizs aizlieguma ID!', //cpg1.3.0
                                'error_admin_ban' => 'Sevi nevar aizliegt!', //cpg1.3.0
                                'error_server_ban' => 'Aizliegt piekīuvi no savas adreses? Neprâts...', //cpg1.3.0
                                'error_ip_forbidden' => 'Nevar aizliegt piekīuvi đâdai IP adresei! (not routable)', //cpg1.3.0
                                'lookup_ip' => 'Lookup an IP address', //cpg1.3.0
                                'submit' => 'aiziet!', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Pievienot', //cpg1.3.0
  'custom_title' => 'Modificįta pievienođanas forma', //cpg1.3.0
  'cust_instr_1' => 'Izvįlies, cik lauciōus atspoguīot (ierobeūots lielums).', //cpg1.3.0
  'cust_instr_2' => 'Pievienođanas lauciōu skaits', //cpg1.3.0
  'cust_instr_3' => 'Max pievienođanas lauciōu skaits: %s', //cpg1.3.0
  'cust_instr_4' => 'URI/URL lauciōu skaits: %s', //cpg1.3.0
  'cust_instr_5' => 'URI/URL lauciōu skaits:', //cpg1.3.0
  'cust_instr_6' => 'Pievienođanas lauciōu skaits:', //cpg1.3.0
  'cust_instr_7' => 'Izvįlies katra tipa lauciōu skaitu. pįc tam spied \'Turpinât\'. ', //cpg1.3.0
  'reg_instr_1' => 'Kīûda opcijâs.', //cpg1.3.0
  'reg_instr_2' => '<small style="color:white;">Iespįjama vairâku failu vienlaicîga pievienođana. Failiem nevajadzįtu bût lielâkiem par %s KB (katram). Pievienojot ZIP failus, tie paliek tâdâ pađâ formâtâ (netiek atvįrti).</small>', //cpg1.3.0
  'reg_instr_3' => 'Ja vįlies, lai ZIP formâta faili tiktu atkompresįti automâtiski, pievieno tos sadaīâ \'Decompressive ZIP Upload\'.', //cpg1.3.0
  'reg_instr_4' => '<small style="color:white;">Izmantojot URI/URL, izmanto pilnu ceīu uz failu: <code>http://www.mysite.com/images/example.jpg</code></small>', //cpg1.3.0
  'reg_instr_5' => '<small style="color:white;">Ja viss aizpildît un pârbaudîts, spied \'Turpinât\'.</small><br/>', //cpg1.3.0
  'reg_instr_6' => 'Decompressive ZIP Uploads:', //cpg1.3.0
  'reg_instr_7' => 'Faili:', //cpg1.3.0
  'reg_instr_8' => 'URI/URL:', //cpg1.3.0
  'error_report' => 'Kīûdas', //cpg1.3.0
  'error_instr' => 'Bija sekojođas kīûdas:', //cpg1.3.0
  'file_name_url' => 'Fails nosaukums/URL', //cpg1.3.0
  'error_message' => 'Kīûdas paziōojums', //cpg1.3.0
  'no_post' => 'Fails netika pievienots ar POST metodi.', //cpg1.3.0
  'forb_ext' => 'Aizliegts faila formâts.', //cpg1.3.0
  'exc_php_ini' => 'Pârsniegts php.ini norâdîtais pievienojamo failu lielums.', //cpg1.3.0
  'exc_file_size' => 'Pârsniegts CPG uzstâdîtais failu lielums.', //cpg1.3.0
  'partial_upload' => 'Only a partial upload.', //cpg1.3.0
  'no_upload' => 'Pievienođana nenotika.', //cpg1.3.0
  'unknown_code' => 'Nezinâma PHP kīûda.', //cpg1.3.0
  'no_temp_name' => 'No upload - No temp name.', //cpg1.3.0
  'no_file_size' => 'Contains no data/Corrupted', //cpg1.3.0
  'impossible' => 'Impossible to move.', //cpg1.3.0
  'not_image' => 'Tas nav attįls/attįls ir íīûdains', //cpg1.3.0
  'not_GD' => 'Not a GD extension.', //cpg1.3.0
  'pixel_allowance' => 'Pârâk daudz pikseīi.', //cpg1.3.0
  'incorrect_prefix' => 'Nepareiza formâta URI/URL', //cpg1.3.0
  'could_not_open_URI' => 'Nav iespįjams atvįrt URI.', //cpg1.3.0
  'unsafe_URI' => 'Safety not verifiable.', //cpg1.3.0
  'meta_data_failure' => 'Meta data kīûda', //cpg1.3.0
  'http_401' => '401 Unauthorized', //cpg1.3.0
  'http_402' => '402 Payment Required', //cpg1.3.0
  'http_403' => '403 Forbidden', //cpg1.3.0
  'http_404' => '404 Not Found', //cpg1.3.0
  'http_500' => '500 Internal Server Error', //cpg1.3.0
  'http_503' => '503 Service Unavailable', //cpg1.3.0
  'MIME_extraction_failure' => 'MIME could not be determined.', //cpg1.3.0
  'MIME_type_unknown' => 'Unknown MIME type', //cpg1.3.0
  'cant_create_write' => 'Cannot create write file.', //cpg1.3.0
  'not_writable' => 'Cannot write to write file.', //cpg1.3.0
  'cant_read_URI' => 'Cannot read URI/URL', //cpg1.3.0
  'cant_open_write_file' => 'Cannot open URI write file.', //cpg1.3.0
  'cant_write_write_file' => 'Cannot write to URI write file.', //cpg1.3.0
  'cant_unzip' => 'Nav iespįjams atkompresįt.', //cpg1.3.0
  'unknown' => 'Nedefinįta kīuda', //cpg1.3.0
  'succ' => 'Veiksmîgi pievienots', //cpg1.3.0
  'success' => '<small style="color:white;">Fails nr. %s veiksmîgi pievienots</small>', //cpg1.3.0
  'add' => '<small style="color:white;">Spied uz \'Turpinât\', lai albûmam pievienotu attįlus.<br/></small>', //cpg1.3.0
  'failure' => 'Pievienođanas kīûda', //cpg1.3.0
  'f_info' => 'Informâcija par datiem', //cpg1.3.0
  'no_place' => 'Nav iespįjams nomainît jau esođu failu.', //cpg1.3.0
  'yes_place' => 'Iepriekđįjais fails veiksmîgi pievienots.', //cpg1.3.0
  'max_fsize' => 'Atīautais viena faila lielums %s KB',
  'album' => 'Albûms',
  'picture' => 'Fails', //cpg1.3.0
  'pic_title' => 'Faila nosaukums (virsraksts)', //cpg1.3.0
  'description' => 'Fila apraksts', //cpg1.3.0
  'keywords' => 'Atslįgas vârdi (vairâkus atdali ar atstarpįm)',
  'err_no_alb_uploadables' => 'Atvaino, bet nav neviena albûma, kur tu varįtu likt attįlus', //cpg1.3.0
  'place_instr_1' => 'Ievieto katru attįlu vajadzîgajâ albûmâ, ja vajadzîgs, katram pievieno sîkâku informâciju.', //cpg1.3.0
  'place_instr_2' => 'Spied uz \'Turpinât\' un norâdi, kur ievietot pârįjos failus.', //cpg1.3.0
  'process_complete' => 'Visi dati veiksmîgi pievienoti.', //cpg1.3.0
);

/*
if (defined('UPLOAD_PHP')) $lang_upload_php = array(
    'title' => 'Uzlikt attįlu',
    'max_fsize' => 'Max pievienojamâ faila lielums %s KB',
    'album' => 'Albums',
    'picture' => 'Attįls',
    'pic_title' => 'Attįla virsraksts',
    'description' => 'Attįla apraksts',
    'keywords' => 'Atslįgas vârdi (atdalît ar atstarpįm)',
    'err_no_alb_uploadables' => 'Atvaino, nav neviena albuma, kurâ tu varįtu ievietot savus attįlus',
);
*/

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
    'title' => 'Administrįt lietotâjus',
    'name_a' => 'Vârds augođi',
    'name_d' => 'Vârds dilstođi',
    'group_a' => 'Grupa augođi',
    'group_d' => 'Grupa dilstođi',
    'reg_a' => 'Reg datums augođi',
    'reg_d' => 'Reg datums dilstođi',
    'pic_a' => 'Attįlu skaits augođi',
    'pic_d' => 'Attįlu skaits dilstođi',
    'disku_a' => 'Diska atmiōa augođi',
    'disku_d' => 'Diska atmiōa dilstođi',
        'lv_a' => 'Pedįjais apmeklįjums augođi', //cpg1.3.0
        'lv_d' => 'Pįdįjais apmeklįjums dilstođi', //cpg1.3.0
    'sort_by' => 'Kârtot',
    'err_no_users' => 'Lietotâju tabulâ nav datu!',
    'err_edit_self' => 'Nemaini te savu profailu, tam izmanto \'Mans profails\'',
    'edit' => 'MODIFICĮT',
    'delete' => 'DZĮST',
    'name' => 'Lietotâjs',
    'group' => 'Grupa',
    'inactive' => 'Neaktîvs',
    'operations' => 'Darbîbas',
    'pictures' => 'Attįli',
    'disk_space' => 'Izmantotâ atmiōa / Ierobeūojums',
    'registered_on' => 'Reėistrįts',
        'last_visit' => 'Pįdįjais apmeklįjums', //cpg1.3.0
    'u_user_on_p_pages' => '%d lietotâji %d lapâ(s)',
    'confirm_del' => 'Tieđâm DZĮST đo lietotâju? \\nVisi viōa attįli un komentâri arî tiks izdzįsti',
    'mail' => 'MAIL',
    'err_unknown_user' => 'Izvįlįtais lietotâjs neeksistį!',
    'modify_user' => 'Mainît datus',
    'notes' => 'Piezîmes',
    'note_list' => '<li>Ja nevįlies mainît paroli, atstâj paroles lauku tukđu',
    'password' => 'Parole',
    'user_active' => 'Lietotâjs aktîvs',
    'user_group' => 'Grupa',
    'user_email' => 'Emails',
    'user_web_site' => 'Mâjas lapa',
    'create_new_user' => 'Izveidot',
    'user_location' => 'Atrađanâs',
    'user_interests' => 'Intereses',
    'user_occupation' => 'Nodarbođanâs',
        'latest_upload' => 'Pįdįjie pievienotie faili', //cpg1.3.0
        'never' => 'nekad', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
        'title' => 'Attįlu izmįri', //new in cpg1.2.0
        'what_it_does' => 'Funkcijas', //new in cpg1.2.0
        'what_update_titles' => 'Virsraksti tiek ōemti no failu nosaukumiem', //new in cpg1.2.0
        'what_delete_title' => 'Dzįst virsrakstus', //new in cpg1.2.0
        'what_rebuild' => 'Pârveidot attįlus', //new in cpg1.2.0
        'what_delete_originals' => 'Dzįst oriėinâlos attįlus un nomainît tos ar samazinâtajiem/palielinâtajiem', //new in cpg1.2.0
        'file' => 'Fails', //new in cpg1.2.0
        'title_set_to' => 'virsraksts', //new in cpg1.2.0
        'submit_form' => 'Apstiprinât', //new in cpg1.2.0
        'updated_succesfully' => 'Veiksmîgi izmanîts', //new in cpg1.2.0
        'error_create' => 'Kīûda', //new in cpg1.2.0
        'continue' => 'Turpinât ar citiem attįliem', //new in cpg1.2.0
        'main_success' => 'Fails %s tiek izmantots kâ galvenais attįls', //new in cpg1.2.0
        'error_rename' => 'Kīûda %s pârsaucot par %s', //new in cpg1.2.0
        'error_not_found' => 'Fails %s nav atrasts', //new in cpg1.2.0
        'back' => 'Atgriezties', //new in cpg1.2.0
        'thumbs_wait' => 'Notiek mazo un normâlo attįlu modificįđana, lûdzu uzgaidi...', //new in cpg1.2.0
        'thumbs_continue_wait' => 'Turpinam modificįt mazos un normâlos attįlus...', //new in cpg1.2.0
        'titles_wait' => 'Norit sparîga virsrakstu modificįđana, uzgaidi...', //new in cpg1.2.0
        'delete_wait' => 'Dzįđu virsrakstus, lûdzu uzgaidi...', //new in cpg1.2.0
        'replace_wait' => 'Dzįđu oriėinâlus, nomainot tos ar modificįtajiem attįliem, lûdzu uzgaidi...', //new in cpg1.2.0
        'instruction' => 'Ieteikumi', //new in cpg1.2.0
        'instruction_action' => 'Izvįlies darbîbu', //new in cpg1.2.0
        'instruction_parameter' => 'Uzliec parametrus', //new in cpg1.2.0
        'instruction_album' => 'Izvįlies albumu', //new in cpg1.2.0
        'instruction_press' => 'Nospied %s', //new in cpg1.2.0
        'update' => 'Modificį mazos un/vai normâlos attįlus', //new in cpg1.2.0
        'update_what' => 'Kas jâmodificį', //new in cpg1.2.0
        'update_thumb' => 'Tikai mazos attįlus', //new in cpg1.2.0
        'update_pic' => 'Tikai modificįtos attįlus', //new in cpg1.2.0
        'update_both' => 'Gan mazie, gan normâlie attįli', //new in cpg1.2.0
        'update_number' => 'Cik attįlus var modificįt ar vienu klikđíi', //new in cpg1.2.0
        'update_option' => '(Đo parametru samazini, ja ir problįmas ar modificįđanu)', //new in cpg1.2.0
        'filename_title' => 'Faila nosaukums &rArr; Attįla virsraksts', //new in cpg1.2.0
        'filename_how' => 'Kâ modificįt attįlu', //new in cpg1.2.0
        'filename_remove' => 'Dzįst .jpg paplađinâjumu un _ nomainît ar atstarpi', //new in cpg1.2.0
        'filename_euro' => 'Konvertįt 2003_11_23_13_20_20.jpg uz 23/11/2003 13:20', //new in cpg1.2.0
        'filename_us' => 'Konevertįt 2003_11_23_13_20_20.jpg uz 11/23/2003 13:20', //new in cpg1.2.0
        'filename_time' => 'Konvertįt 2003_11_23_13_20_20.jpg uz 13:20', //new in cpg1.2.0
        'delete' => 'Attįlu virsrakstu un attįlu dzįđana', //new in cpg1.2.0
        'delete_title' => 'Dzįst attįlu virsrakstus', //new in cpg1.2.0
        'delete_original' => 'Dzįst oriėinâlus', //new in cpg1.2.0
        'delete_replace' => 'Dzįst oriėinâlus aizstâjot tos ar modificįtajiem attįliem', //new in cpg1.2.0
        'select_album' => 'Izvįlies albumu', //new in cpg1.2.0
        'delete_orphans' => 'Delete orphaned comments (works on all albums)', //cpg1.3.0
        'orphan_comment' => 'orphan comments found', //cpg1.3.0
        'delete' => 'Dzįst', //cpg1.3.0
        'delete_all' => 'Dzįst visu', //cpg1.3.0
        'comment' => 'Komentâri: ', //cpg1.3.0
        'nonexist' => 'Pievienots neeksistįjođam dailam # ', //cpg1.3.0
        'phpinfo' => 'Râdît phpinfo', //cpg1.3.0
        'update_db' => 'Atjaunot datu bâzi', //cpg1.3.0
        'update_db_explanation' => 'If you have replaced coppermine files, added a modification or upgraded from a previous version of coppermine, make sure to run the database update once. This will create the necessary tables and/or config  values in your coppermine database.', //cpg1.3.0

);

?>