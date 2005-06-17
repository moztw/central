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
// CVS version: $Id: latvian.php,v 1.8 2004/07/24 15:04:07 gaugau Exp $
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

$lang_charset = 'ISO-8859-4';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('B', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Sv', 'Pr', 'Ot', 'Tr', 'Ct', 'Pt', 'Ss');
$lang_month = array('Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jûn', 'Jûl', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec');

// Some common strings
$lang_yes = 'Jâ';
$lang_no  = 'Nç';
$lang_back = 'ATGRIEZTIES';
$lang_continue = 'TURPINÂT';
$lang_info = 'Informâcija';
$lang_error = 'Kïûda';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt = '%d/%m/%Y %H:%M';
$lastcom_date_fmt = '%d/%m/%Y %H:%M';
$lastup_date_fmt = '%d/%m/%Y %H:%M';
$register_date_fmt = '%d/%m/%Y %H:%M';
$lasthit_date_fmt = '%d/%m/%Y %H:%M';
$comment_date_fmt = '%d/%m/%Y %H:%M';


// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*', 'pimp*', 'peþ*', 'pipel*', 'bïaì*', 'nahu*', 'pist*', 'pisien*', 'mirl*', 'sûd*', 'bled', 'blad', 'pizde*', 'mauka', 'maucî*', 'ânus*', 'kaka', 'sûkâ');

$lang_meta_album_names = array(
    'random' => 'Izlases veida attçli',
    'lastup' => 'Jaunâkie papildinâjumi',
    'lastalb'=> 'Pçdçjie atjaunotie albumi', //new in cpg1.2.0
    'lastcom' => 'Jaunâkie komentâri',
    'topn' => 'Skatîtâkie',
    'toprated' => 'Vispopulârâkie',
    'lasthits' => 'Pçdçjie skatîtie',
    'search' => 'Meklçðanas rezultâti', //new in cpg1.2.0
    'favpics'=> 'Attçlu favorîti' //new in cpg1.2.0
);

$lang_errors = array(
        'access_denied' => 'Tev nav pieejas tiesîbu ðai lapai.',
        'perm_denied' => 'Tev nav tiesîbu veikt ðâdu darbîbu.',
        'param_missing' => 'Tika izsaukta komanda bez parametriem.',
        'non_exist_ap' => 'Izvçlçtais albums/attçls neeksistç!',
        'quota_exceeded' => 'Nav vietas uz diska.<br /><br />Tev ir pieðíirts ierobeþojums [quota]K, bet paðlaik jau aizòemti [space]K, tâpçc ðî attçla pievienoðana nav ieteicama (tiks pârsniegts ierobeþojums).',
        'gd_file_type_err' => 'Izmantojot GD attçlu bibliotçku, atïauts izmantot tikai JPEG un PNG formâtus.',
        'invalid_image' => 'Attçls bojâts vai arî sistçmas GD attçlu bibliotçka nespçj to atkodçt.',
        'resize_failed' => 'Nav iespçjams izveidot mazo attçlu vai izmainît tâ izmçrus.',
        'no_img_to_display' => 'Nav attçla',
        'non_exist_cat' => 'Izvçlçtâ sadaïa neeksistç',
        'orphan_cat' => 'Ðai apakðsadaïai nav sadaïas, kam tâ piederçtu, lûdzu izmanto sadaïu menedþeri, lai atrisinâtu problçmu.',
        'directory_ro' => 'Direktorijâ \'%s\' nav atïauts rakstît, tâpçc attçlus nav iespçjams izdzçst.',
        'non_exist_comment' => 'Izvçlçtais komentârs neeksistç.',
        'pic_in_invalid_album' => 'Attçls atrodas neeksistçjoðâ albumâ (%s)!?', //new in cpg1.2.0
        'banned' => 'Pieeja foto galerijai aizliegta.', //new in cpg1.2.0
        'not_with_udb' => 'Ðî iespçja ir atslçgta, jo tai jâbût integrçtai kopâ ar foruma programmatûru. Trûkst attiecîgâs konfigurâcijas, vai nepiecieðams uzinstalçt forumu.', //new in cpg1.2.0
        'offline_title' => 'Paziòojums', //cpg1.3.0
        'offline_text' => 'Paðlaik notiek tehniski uzlabojumi - ienâc vçlâk', //cpg1.3.0
        'ecards_empty' => 'E-karðu sistçma nav aktivizçta!', //cpg1.3.0
        'action_failed' => 'Operâcija pârtraukta, jo notikusi kïûda.', //cpg1.3.0
        'no_zip' => 'Kompresçðana ZIP formâtâ nav pieejama.', //cpg1.3.0
        'zip_type' => 'Nav atïaujas pievienot ZIP formâta failus.', //cpg1.3.0

);

$lang_bbcode_help = 'Teksta formatçðanai atïauts izmantot: <li>[b]<b>trekni</b>[/b]</li> <li>[i]<i>slîpi</i>[/i]</li> <li>[url=http://adrese.com/]Norâdes teksts[/url]</li> <li>[email]vards@adrese.com[/email]</li>'; //cpg1.3.0

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
    'alb_list_title' => 'Uz albumu sarakstu',
    'alb_list_lnk' => 'Albumu saraksts',
    'my_gal_title' => 'Uz manu galeriju',
    'my_gal_lnk' => 'Mana galerija',
    'my_prof_lnk' => 'My profails',
    'adm_mode_title' => 'Pârslçgties Administratora reþîmâ',
    'adm_mode_lnk' => 'Administratora reþîms',
    'usr_mode_title' => 'Pârslçgties lietotâja reþîmâ',
    'usr_mode_lnk' => 'Lietotâja reþîms',
    'upload_pic_title' => 'Ielikt attçlu albumâ',
    'upload_pic_lnk' => 'Pievienot attçlu',
    'register_title' => 'Izveidot kontu',
    'register_lnk' => 'Reìistrçties',
    'login_lnk' => 'Pieslçgties',
    'logout_lnk' => 'Beigt darbu',
    'lastup_lnk' => 'Jaunâkie attçli',
    'lastcom_lnk' => 'Jaunâkie komentâri',
    'topn_lnk' => 'Skatîtâkie attçli',
    'toprated_lnk' => 'Vispopulârâkie',
    'search_lnk' => 'Meklçt',
    'fav_lnk' => 'Favorîti', //new in cpg1.2.0
  'memberlist_title' => 'Visi dalîbnieki', //cpg1.3.0
  'memberlist_lnk' => 'Dalîbnieku saraksts', //cpg1.3.0
  'faq_title' => 'Bieþâk uzdotie jautâjumi par &quot;Coppermine&quot;', //cpg1.3.0
  'faq_lnk' => 'FAQ', //cpg1.3.0
);

$lang_gallery_admin_menu = array(
    'upl_app_lnk' => 'Apstiprinât',
    'config_lnk' => 'Konfigurçt',
    'albums_lnk' => 'Albumi',
    'categories_lnk' => 'Sadaïas',
    'users_lnk' => 'Lietotâji',
    'groups_lnk' => 'Grupas',
    'comments_lnk' => 'Komentâri',
    'searchnew_lnk' => 'Attçlu grupas...',
    'util_lnk' => 'Mainît attçla izmçrus', //new in cpg1.2.0
    'ban_lnk' => 'Aiziegt piekïuvi', //new in cpg1.2.0
        'db_ecard_lnk' => 'E-kartes', //cpg1.3.0
);

$lang_user_admin_menu = array(
    'albmgr_lnk' => 'Izveidot manu albumu',
    'modifyalb_lnk' => 'Mainît manu albumu',
    'my_prof_lnk' => 'Profails',
);

$lang_cat_list = array(
    'category' => 'Sadaïas',
    'albums' => 'Albumi',
    'pictures' => 'Attçli',
);

$lang_album_list = array(
    'album_on_page' => '%d albums(-i) %d lapâ(s)'
);

$lang_thumb_view = array(
    'date' => 'LAIKS',
    //Sort by filename and title
    'name' => 'NOSAUKUMS', //new in cpg1.2.0
    'title' => 'VIRSRAKSTS', //new in cpg1.2.0
    'sort_da' => 'pçc datuma augoði',
    'sort_dd' => 'pçc datuma dilstoði',
    'sort_na' => 'pçc nosaukuma augoði',
    'sort_nd' => 'pçc nosaukuma dilstoði',
    'sort_ta' => 'pçc virsraksta augoði', //new in cpg1.2.0
    'pic_on_page' => '%d attçls(-i) %d lapâ(s)',
    'user_on_page' => '%d dalîbnieks(-i) %d lapâ(s)'
);

$lang_img_nav_bar = array(
    'thumb_title' => 'Atgriezties uz attçlu indeksu',
    'pic_info_title' => 'Râdît/paslçpt informâciju par attçlu',
    'slideshow_title' => 'Slaidðovs',
    'ecard_title' => 'Sûtît kâ e-kartiòu',
    'ecard_disabled' => 'e-kartiòu sûtîðana atslçgta',
    'ecard_disabled_msg' => 'Tev nav pietiekamu tiesîbu, lai sûtîtu e-kartiòas',
    'prev_title' => 'Iepriekðçjais attçls',
    'next_title' => 'Nâkamais attçls',
    'pic_pos' => 'ATTÇLS %s/%s',
);

$lang_rate_pic = array(
    'rate_this_pic' => 'Novçrtçt ',
    'no_votes' => '(novçrtçjuma nav)',
    'rating' => '(novçrtçjums: %s balsis no 5 (balsots %s reizi(-es))',
    'rubbish' => 'Mçsls',
    'poor' => 'Vâji',
    'fair' => 'Viduvçji',
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
    CRITICAL_ERROR => 'Kritiska kïûda',
    'file' => 'Fails: ',
    'line' => 'Rinda: ',
);

$lang_display_thumbnails = array(
    'filename' => 'Nosaukums : ',
    'filesize' => 'Lielums : ',
    'dimensions' => 'Izmçrs : ',
    'date_added' => 'Pievienots : '
);

$lang_get_pic_data = array(
    'n_comments' => 'komentâri: <b>%s</b>',
    'n_views' => 'skatîjumi: <b>%s</b>',
    'n_votes' => 'vçrtçjumi: <b>%s</b>'
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Debug Info', //cpg1.3.0
  'select_all' => 'Select All', //cpg1.3.0
  'copy_and_paste_instructions' => 'If you\'re going to request help on the coppermine support board, copy-and-paste this debug output into your posting. Make sure to replace any passwords from the query with *** before posting.', //cpg1.3.0
  'phpinfo' => 'display phpinfo', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => 'Valoda pçc noklusçðanas', //cpg1.3.0
  'choose_language' => 'Izvçlies valodu', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'Tçma pçc noklusçðanas', //cpg1.3.0
  'choose_theme' => 'Izvçlies tçmu', //cpg1.3.0
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
    0 => 'Pametam administrçðanas reþîmu...',
    1 => 'Uz administrçðanas reþîmu...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
    'alb_need_name' => 'Kâ sauksim albumu?',
    'confirm_modifs' => 'Apstiprinât veiktâs izmaiòas?',
    'no_change' => 'Nekas nav mainîts!',
    'new_album' => 'Jauns albums',
    'confirm_delete1' => 'Tieðâm dzçst ðo albumu?',
    'confirm_delete2' => '\nVisi attçli un komentâri tajâ tiks izdzçsti!',
    'select_first' => 'Vispirms jâizvçlas albumu',
    'alb_mrg' => 'Albumu menedþeris',
    'my_gallery' => '* Mana galerija *',
    'no_category' => '* Mana sadaïa *',
    'delete' => 'Dzçst',
    'new' => 'Jauns',
    'apply_modifs' => 'Apstiprinât izmaiòas',
    'select_category' => 'Izvçlçties sadaïu',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
    'miss_param' => 'Komandas \'%s\' izpildîðanai trûkst nepiecieðamie parametri!',
    'unknown_cat' => 'Izvçlçtâ sadaïa datu bâzç neeksistç',
    'usergal_cat_ro' => 'Lietotâja galerijas sadaïa nevar tikt dzçsta!',
    'manage_cat' => 'Administrçt sadaïas',
    'confirm_delete' => 'Tieðâm dzçst ðo sadaïu',
    'category' => 'Sadaïa',
    'operations' => 'Darbîbas',
    'move_into' => 'Pârvietot uz',
    'update_create' => 'Modificçt/izveidot sadaïu',
    'parent_cat' => 'Pieder sadaïai',
    'cat_title' => 'Sadaïas virsraksts',
        'cat_thumb' => 'Sadaïas starpattçls', //cpg1.3.0
    'cat_desc' => 'Sadaïas apraksts'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
    'title' => 'Konfigurâcija',
    'restore_cfg' => 'Atjaunot noklusçtâs vçrtîbas',
    'save_cfg' => 'Saglabât jaunos uzstâdîjumus',
    'notes' => 'Piezîmes',
    'info' => 'Informâcija',
    'upd_success' => 'Coppermine konfigurâcija saglabâta',
    'restore_success' => 'Coppermine noklusçtâ konfigurâcija uzstâdîta',
    'name_a' => 'Nosaukums augoði',
    'name_d' => 'Nosaukums dilstoði',
    'title_a' => 'Virsraksts augoði', //new in cpg1.2.0
    'title_d' => 'Virsraksts dilstoði', //new in cpg1.2.0
    'date_a' => 'Datums augoði',
    'date_d' => 'Datums dilstoði',
    'th_any' => 'Max Aspect',
    'th_ht' => 'Augstums',
    'th_wd' => 'Platums',
    'label' => 'Teksts', //cpg1.3.0
    'item' => 'att.', //cpg1.3.0
    'debug_everyone' => 'Jebkurð', //cpg1.3.0
    'debug_admin' => 'Tikai administrators', //cpg1.3.0
);

if (defined('CONFIG_PHP')) $lang_config_data = array(
    'Galvenie uzstâdîjumi',
    array('Nosaukums', 'gallery_name', 0),
    array('Apraksts', 'gallery_description', 0),
    array('Administrators', 'gallery_admin_email', 0),
    array('Adrese, kas bûs e-kartiòâ pie teksta \'Citi attçli...\'', 'ecards_more_pic_target', 0),
        array('Norit tehniski darbi. Galerija ir atslçgta.', 'offline', 1), //cpg1.3.0
        array('Log ecards', 'log_ecards', 1), //cpg1.3.0
        array('Atïaut lejupielâdçt ZIP attçlus', 'enable_zipdownload', 1), //cpg1.3.0

        'Valodas, Tçmas &amp; kodçðana',
    array('Valoda', 'lang', 5),
    array('Tçma', 'theme', 6),
        array('Râdît valodu izvçli', 'language_list', 1), //cpg1.3.0
        array('Râdît karodziòus', 'language_flags', 8), //cpg1.3.0
        array('Râdît &quot;reset&quot; valodu izvçlç', 'language_reset', 1), //cpg1.3.0
        array('Râdît tçmu sarakstu', 'theme_list', 1), //cpg1.3.0
        array('Râdît &quot;reset&quot; tçmu izvçlç', 'theme_reset', 1), //cpg1.3.0
        array('Râdît FAQ', 'display_faq', 1), //cpg1.3.0
        array('Râdît bbcode palîdzîbu un piemçrus', 'show_bbcode_help', 1), //cpg1.3.0
        array('Kodçjums (Character encoding)', 'charset', 4), //cpg1.3.0

        'Albumu saraksta skatîjums',
        array('Galvenâs tabulas platums (pikseïos vai %)', 'main_table_width', 0),
    array('Cik lîmeòos sadaïas atspoguïot', 'subcat_level', 0),
    array('Cik albumus atspoguïot', 'albums_per_page', 0),
    array('Cik kolonnâs atspoguïot albûmus', 'album_list_cols', 0),
    array('Cik lieli pikseïos bûs mazie attçli', 'alb_list_thumb_size', 0),
    array('Galvenâs lapas saturs', 'main_page_layout', 0),
    array('Râdît pirmâ lîmeòa mazos attçlus pa sadaïâm','first_level',1), //new in cpg1.2.0

    'Mazo attçlu skatîjums',
    array('Cik kolonnâs râdît mazos attçlus', 'thumbcols', 0),
    array('Cik rindâs râdît mazos attçlus', 'thumbrows', 0),
    array('Cik tabulas atspoguïot', 'max_tabs', 0),
    array('Blakus mazajam attçlam atspoguïot ne tikai attçla virsrakstu, bet arî aprakstu', 'caption_in_thumbview', 1),
        array('Râdît skatîðanâs reiþu skaitu blakus mazajam attçlam', 'views_in_thumbview', 1), //cpg1.3.0
    array('Atspoguïot komentâru skaitu', 'display_comment_count', 1),
        array('Râdît, kurð uzlicis attçlu', 'display_uploader', 1), //cpg1.3.0
    array('Kâ kârtot attçlus', 'default_sort_order', 3),
    array('Minimâlais balsu skaits, lai attçls tiktu iekïauts vispopulârâko sarakstâ', 'min_votes_for_rating', 0),

    'Attçlu skatîðanâs &amp; Komentâri',
    array('Attçla tabulas platums (pikseïos vai %)', 'picture_table_width', 0),
    array('Attçla informâcija redzama pçc noklusçðanas', 'display_pic_info', 1),
    array('Filtrçt sliktus vârdus komentâros', 'filter_bad_words', 1),
    array('Atïaut sejiòas komentâros', 'enable_smilies', 1),
        array('Atïaut vairâkkârtçjus komentârus no vienas personas par vienu attçlu (atslçgt -flood protection-)', 'disable_comment_flood_protect', 1), //cpg1.3.0
    array('Max attçla apraksta garums', 'max_img_desc_length', 0),
    array('Max simbolu skaits vienâ vârdâ', 'max_com_wlength', 0),
    array('Max rindu skaits komentârâ', 'max_com_lines', 0),
    array('Max komentâra garums', 'max_com_size', 0),
    array('Filmas skatîjums', 'display_film_strip', 1), //new in cpg1.2.0
    array('Attçlu skaits filmas skatîjumâ', 'max_film_strip_items', 0), //new in cpg1.2.0
        array('Paziòot Administratoram par jaunu komentâru', 'email_comment_notification', 1), //cpg1.3.0
        array('Slaidðova intervâls (1 sek. = 1000 milisek.)', 'slideshow_interval', 0), //cpg1.3.0


    'Lielo un mazo attçlu kvalitâte',
    array('JPEG failu kvalitâte', 'jpeg_qual', 0),
    array('Max mazâ attçla platums vai augstums <b>*</b>', 'thumb_width', 0),
    array('Izmantojamie izmçri ( platums vai augstums )<b>*</b>', 'thumb_use', 0), //new in cpg1.2.0
    array('Izveidot arî \'starpattçlus\'','make_intermediate', 1),
    array('Max \'starpattçla\' platums vai augstums <b>*</b>', 'picture_width', 0),
    array('Max uzliktâ attçla lielums (KB)', 'max_upl_size', 0),
    array('Max uzliktâ attçla platums vai augstums (pikseïos)', 'max_upl_width_height', 0),


        'Failu un mazo attçlu sîkâki uzstâdîjumi', //cpg1.3.0
        array('Râdît privâta albûma ikonu tiem, kas nav pieslçguðies','show_private',1), //cpg1.3.0
        array('Aizliegtie simboli failu nosaukumos', 'forbiden_fname_char',0), //cpg1.3.0
        //array('Accepted file extensions for uploaded pictures', 'allowed_file_extensions',0), //cpg1.3.0
        array('Atïautie attçlu formâti', 'allowed_img_types',0), //cpg1.3.0
        array('Atïautie îsfilmu formâti', 'allowed_mov_types',0), //cpg1.3.0
        array('Atïautie audio formâti', 'allowed_snd_types',0), //cpg1.3.0
        array('Atïautie dokumentu formâti', 'allowed_doc_types',0), //cpg1.3.0
        array('Attçlu izmçru koriìçðanas metode','thumb_method',2), //cpg1.3.0
        array('Kur sistçmâ atrodas ImageMagick \'convert\' utilîta (piemçram, /usr/bin/X11/)', 'impath', 0), //cpg1.3.0
        //array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types',0), //cpg1.3.0
        array('ImageMagick komandrindas opcijas', 'im_options', 0), //cpg1.3.0
        array('Lasît EXIF informâciju no JPEG failiem', 'read_exif_data', 1), //cpg1.3.0
        array('Lasît IPTC informâciju no JPEG failiem', 'read_iptc_data', 1), //cpg1.3.0
        array('Albûma direktorija <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0), //cpg1.3.0
        array('Dalîbnieku failu direktorija <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0), //cpg1.3.0
        array('Direktorija vidçja izmçra attçlu glabâðanai <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0), //cpg1.3.0
        array('Mazo attçlu prefikss <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0), //cpg1.3.0
        array('Direktoriju opcijas', 'default_dir_mode', 0), //cpg1.3.0
        array('Failu opcijas', 'default_file_mode', 0), //cpg1.3.0


    'Lietotâju uzstâdîjumi',
    array('Atïaut jaunu lietotâju piereìistrçðanos', 'allow_user_registration', 1),
    array('Lietotâja sekmîgai reìistrâcija nepiecieðams e-pasta apstiprinâjums', 'reg_requires_valid_email', 1),
        array('Paziòot administratoram par jaunu dalîbnieka reìistrâciju', 'reg_notify_admin_email', 1), //cpg1.3.0
    array('Atïaut diviem daþâdiem lietotâjiem izmantot vienâdas e-pasta adreses', 'allow_duplicate_emails_addr', 1),
    array('Lietotâjs drîkst veidot personîgus albûmus', 'allow_private_albums', 1),
        array('Paziòot Administratoram par dalîbnieku, kam jâapstiprina faila pievienoðana', 'upl_notify_admin_email', 1), //cpg1.3.0
        array('Atïaut skatîties informâciju par citiem dalîbniekiem, ja ir notikusi veiksmîga pieslçgðanâs sistçmai', 'allow_memberlist', 1), //cpg1.3.0

    'Rezerves lauki attçla aprakstam (ja neizmanto, atstâj tukðus)',
    array('Lauka 1 nosaukums', 'user_field1_name', 0),
    array('Lauka 2 nosaukums', 'user_field2_name', 0),
    array('Lauka 3 nosaukums', 'user_field3_name', 0),
    array('Lauka 4 nosaukums', 'user_field4_name', 0),

    'Lielo un mazo attçlu îpaðie uzstâdîjumi',
    array('Râdît personîgâ albuma ikonu anonîmajiem apmeklçtâjiem','show_private',1), //new in cpg1.2.0
    array('Kâdi simboli aizliegti failu nosaukumos', 'forbiden_fname_char',0),
    array('Uzliekamo attçlu atïautie failu paplaðinâjumi', 'allowed_file_extensions',0),
    array('Attçlu izmçru mainîðanas metodes','thumb_method',2),
    array('Ceïð uz ImageMagick \'convert\' utilîtu (piemçram, /usr/bin/X11/)', 'impath', 0),
    array('Atïauti attçlu formâti (tikai priekð ImageMagick)', 'allowed_img_types',0),
    array('Komandrindas parametri ImageMagick utilîtai', 'im_options', 0),
    array('Izmantot JPEG attçlu EXIF informâciju', 'read_exif_data', 1),
    array('Albumu direktorija <b>*</b>', 'fullpath', 0),
    array('Lietotâju albumu direktorija <b>*</b>', 'userpics', 0),
    array('Starpattçlu prefikss <b>*</b>', 'normal_pfx', 0),
    array('Mazo attçlu prefikss <b>*</b>', 'thumb_pfx', 0),
    array('Direktoriju skatîjuma reþîms pçc noklusçðanas', 'default_dir_mode', 0),
    array('Attçlu reþîms', 'default_file_mode', 0),
    array('Atslçgt peles labo taustiòu uz lielajiem attçliem (JavaScript)', 'disable_popup_rightclick', 1), //new in cpg1.2.0
    array('Atslçgt peles labo taustiòu &quot;parastajâs&quot; lapâs (JavaScript)', 'disable_gallery_rightclick', 1), //new in cpg1.2.0

    'Cepumi (cookies) &amp; Kodçjums',
    array('Cookie nosaukumus', 'cookie_name', 0),
    array('Cookie ceïð', 'cookie_path', 0),
    array('Teksta kodçjums', 'charset', 4),

    'Citi uzstâdîjumi',
    array('Debug reþîms', 'debug_mode', 1),

    '<br /><div align="center">(*) Ar * atzîmçtos parametrus nav ieteicams mainît, ja galerîjâs jau ir attçli</div><br /><a name="notice2"></a>(**) Ðî konfigurâcijas opcija neiespaidos lîdz ðim pievienotos attçlus, bet iespaidos turpmâkâs operâcijas. Jau esoðos failus iespçjams modificçt &quot;<a href="util.php">ar Administratora lîdzekïiem</a> (resize opcija no Administratora izvçlnes)&quot;.</div><br />', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Nosûtît e-kartiòu', //cpg1.3.0
  'ecard_sender' => 'Sûtîtâjs', //cpg1.3.0
  'ecard_recipient' => 'Saòçmçjs', //cpg1.3.0
  'ecard_date' => 'Datums', //cpg1.3.0
  'ecard_display' => 'Râdît e-kartiòu', //cpg1.3.0
  'ecard_name' => 'Vârds', //cpg1.3.0
  'ecard_email' => 'Epasts', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'augoði', //cpg1.3.0
  'ecard_descending' => 'dilstoði', //cpg1.3.0
  'ecard_sorted' => 'Sakârtots', //cpg1.3.0
  'ecard_by_date' => 'pçc datuma', //cpg1.3.0
  'ecard_by_sender_name' => 'pçc vârda', //cpg1.3.0
  'ecard_by_sender_email' => 'pçc sûtîtâja epasta adreses', //cpg1.3.0
  'ecard_by_sender_ip' => 'pçc sûtîtâja IP adreses', //cpg1.3.0
  'ecard_by_recipient_name' => 'pçc saòçmçja vârda', //cpg1.3.0
  'ecard_by_recipient_email' => 'pçc saòçmçja epasta', //cpg1.3.0
  'ecard_number' => 'atspoguïoti %s ieraksti no %s (kopâ %s)', //cpg1.3.0
  'ecard_goto_page' => 'uz lapu', //cpg1.3.0
  'ecard_records_per_page' => 'ieraksti vienâ lapâ', //cpg1.3.0
  'check_all' => 'Ieíeksçt visus', //cpg1.3.0
  'uncheck_all' => 'Atíeksçt visus', //cpg1.3.0
  'ecards_delete_selected' => 'Dzçst izvçlçtâs kartiòas', //cpg1.3.0
  'ecards_delete_confirm' => 'Vai tieðâm dzçst? Apstiprini!', //cpg1.3.0
  'ecards_delete_sure' => 'Esmu guvis nelauþamu pârliecîbu, ka tâ jâdara', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
    'empty_name_or_com' => 'Ja nebûs vârds un komentâra teksts, nekas nesanâks',
    'com_added' => 'Komentârs pievienots',
    'alb_need_title' => 'Kâds ir albuma virsraksts (nosaukums)?',
    'no_udp_needed' => 'Izmaiòas nav nepiecieðamas.',
    'alb_updated' => 'Albumâ veiksmîgi veiktas izmaiòas',
    'unknown_album' => 'Izvçlçtais albums neeksistç vai arî nav tiesîbu tajâ pievienot attçlus',
    'no_pic_uploaded' => 'Attçls netika uzlikts!<br /><br />Vai uz servera ir uzlikta atïauja ðâdâm operâcijâm?',
    'err_mkdir' => 'Direktorija %s NEtika izveidota!',
    'dest_dir_ro' => 'Nav tiesîbu veikt ierakstu direktrijâ %s!',
    'err_move' => 'Nav iespçjams pârvietot %s uz %s !',
    'err_fsize_too_large' => 'Uzliekamâ attçla izmçrs pârsniedz max atïauto (max atïautais ir %s x %s) !',
    'err_imgsize_too_large' => 'Uzliekamâ attçla faila izmçrs pârsniedz max atïauto (max atïautais ir %s KB) !',
    'err_invalid_img' => 'Uzliekamais fails nav klasificçjams kâ attçls!',
    'allowed_img_types' => 'Tu drîksti uzlikt %s attçlus.',
    'err_insert_pic' => 'Attçls \'%s\' nevar tikt pievienots ',
    'upload_success' => 'Attçls veiksmîgi uzlikts<br /><br />Tas bûs redzams galerijâ, tiklîdz Administrators to bûs akceptçjis.',
    'info' => 'Informâcija',
    'com_added' => 'Komentârs pievienots',
    'alb_updated' => 'Albums modificçts',
    'err_comment_empty' => 'Nav komentâra!',
    'err_invalid_fext' => 'Atïauti faili ar ðâdiem paplaðinâjumiem : <br /><br />%s.',
    'no_flood' => 'Atvaino, bet tieði tu arî esi pçdçjâ iesûtîtâ komentâra autors.<br /><br />Modificç sava pçdçjâ iesûtîtâ komentâra tekstu',
    'redirect_msg' => 'Notiek pâradresâcija.<br /><br /><br />Spied uz \'TURPINÂT\', ja lapa nepârlâdçjas',
    'upl_success' => 'Attçls veiksmîgi pievienots',
        'email_comment_subject' => 'Jauns foto galerijas komentârs', //cpg1.3.0
        'email_comment_body' => 'Kâds pievienojis komentâru, apskaties', //cpg1.3.0

);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
    'caption' => 'Teksts',
    'fs_pic' => 'pilnâ izmçra attçls',
    'del_success' => 'veiksmîgi izdzçsts',
    'ns_pic' => 'normâla izmçra attçls',
    'err_del' => 'nevar tikt izdzçsts',
    'thumb_pic' => 'mazais attçls',
    'comment' => 'komentârs',
    'im_in_alb' => 'attçls albumâ',
    'alb_del_success' => 'Albums \'%s\' izdzçsts',
    'alb_mgr' => 'Albuma menedþeris',
    'err_invalid_data' => 'Saòemta nekorekta informâcija \'%s\'',
    'create_alb' => 'Tiek veidots albums \'%s\'',
    'update_alb' => 'Tiek modificçts albums \'%s\' ar virsrakstu \'%s\' un indeksu \'%s\'',
    'del_pic' => 'Dzçst attçlu',
    'del_alb' => 'Dzçst albumu',
    'del_user' => 'Dzçst lietotâju',
    'err_unknown_user' => 'Izvçlçtais lietotâjs neeksistç!',
    'comment_deleted' => 'Komentârs veiksmîgi izdzçsts',
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
    'confirm_del' => 'Tieðâm DZÇST ðo attçlu? \\nArî komentâri tiks izdzçsti.',
    'del_pic' => 'IZDZÇST ÐO ATTÇLU',
    'size' => '%s x %s px',
    'views' => '%s reizes',
    'slideshow' => 'Slaidðovs',
    'stop_slideshow' => 'APSTÂDINÂT SLAIDÐOVU',
    'view_fs' => 'Uzspied, lai redzçtu pilna izmçra attçlu',
        'edit_pic' => 'Rediìçt aprakstu', //cpg1.3.0
        'crop_pic' => 'Izgriezt un sagriezt (Crop and Rotate)', //cpg1.3.0
);

$lang_picinfo = array(
    'title' =>'Informâcija par attçlu',
    'Filename' => 'Attçls',
    'Album name' => 'Albums',
    'Rating' => 'Vçrtçjums (%s balsis)',
    'Keywords' => 'Atslçgas vârdi',
    'File Size' => 'Faila lielums',
    'Dimensions' => 'Izmçrs',
    'Displayed' => 'Attçlots',
    'Camera' => 'Kamera',
    'Date taken' => 'Uzòemðanas datums',
    'Aperture' => 'Objektîva diametrs',
    'Exposure time' => 'Ekspozîcijas laiks',
    'Focal length' => 'Fokuss',
    'Comment' => 'Komentâri',
    'addFav'=>'Uz favorîtiem', //new in cpg1.2.0
    'addFavPhrase'=>'Favorîti', //new in cpg1.2.0
    'remFav'=>'Dzçst no favorîtiem', //new in cpg1.2.0
        'iptcTitle'=>'IPTC Title', //cpg1.3.0
        'iptcCopyright'=>'IPTC Copyright', //cpg1.3.0
        'iptcKeywords'=>'IPTC Keywords', //cpg1.3.0
        'iptcCategory'=>'IPTC Category', //cpg1.3.0
        'iptcSubCategories'=>'IPTC Sub Categories', //cpg1.3.0

);

$lang_display_comments = array(
    'OK' => 'OK',
    'edit_title' => 'Modificçt komentâru',
    'confirm_delete' => 'Tieðâm DZÇST ðo komentâru?',
    'add_your_comment' => 'Pievienot komentâru',
    'name'=>'Vârds', //new in cpg1.2.0
    'comment'=>'Komentârs', //new in cpg1.2.0
    'your_name' => 'Anonîms', //new in cpg1.2.0
);

$lang_fullsize_popup = array(
        'click_to_close' => 'Uzklikðíini uz attçla, lai aizvçrtu ðo logu', //new in cpg1.2.0
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
    'title' => 'Nosûtît e-kartiòu',
    'invalid_email' => '<b>UZMANÎBU</b> : kïûdaina adrese!',
    'ecard_title' => 'Sveiciens no %s',
    'view_ecard' => 'Ðo sveicienu var redzçt arî sekojoða adresç',
    'view_more_pics' => 'Citi forði attçli...',
    'send_success' => 'E-kartiòa nosûtîta',
    'send_failed' => 'Atvaino, serveris nevar nosûtît tavu E-kartiòu...',
    'from' => 'No kâ',
    'your_name' => 'Vârds',
    'your_email' => 'E-pasta adrese',
    'to' => 'Kam',
    'rcpt_name' => 'Saòemçja vârds',
    'rcpt_email' => 'Saòçmçja e-pasta adrese',
    'greetings' => 'Sveiciens',
    'message' => 'Pilnais teksts',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
    'pic_info' => 'Attçla&nbsp;dati',
    'album' => 'Albums',
    'title' => 'Virsraksts',
    'desc' => 'Apraksts',
    'keywords' => 'Atslçgas vârdi',
    'pic_info_str' => '%sx%s - %sKB - %s skatîjumi - %s balsis',
    'approve' => 'Apstiprinât attçla pievienoðanu',
    'postpone_app' => 'Noraidît attçla pievienoðanu',
    'del_pic' => 'Dzçst attçlu',
    'reset_view_count' => 'Nodzçst skatîjumi skaitîtâju',
    'reset_votes' => 'Nodzçst balsojumu skaitu',
    'del_comm' => 'Dzçst komentârus',
    'upl_approval' => 'Uzlikðanas apstiprinâjums',
    'edit_pics' => 'Modificçt attçlus',
    'see_next' => 'Iepriekðçjie attçli',
    'see_prev' => 'Nâkamie attçli',
    'n_pic' => '%s attçli',
    'n_of_pic_to_disp' => 'Cik attçlus atspoguïot',
    'apply' => 'Apstiprinât izmaiòas'
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
  'err_already_logged_in' => 'Tu jau esi pieslçdzies!', //cpg1.3.0
  'enter_username_email' => 'Tavs dalîbnieka vârds vai epasta adrese', //cpg1.3.0
  'submit' => 'Aiziet!', //cpg1.3.0
  'failed_sending_email' => 'Neko neav iespçjams nosûtît!', //cpg1.3.0
  'email_sent' => 'Vçstule ar dalîbnieka informâciju tika nosûtîta uz %s', //cpg1.3.0
  'err_unk_user' => 'Nav tâda dalîbnieka!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - Paroles atgâdinâtâjs', //cpg1.3.0
  'passwd_reminder_body' => 'Saòçmâm pieprasîjumu par dalîbnieku:
Username: %s
Password: %s
Spied %s un pieslçdzies.', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
    'group_name' => 'Grupa',
    'disk_quota' => 'Kvota (atmiòas ierobeþojumi)',
    'can_rate' => 'Drîkst vçrtçt attçlus',
    'can_send_ecards' => 'Drîkst sûtît e-kartiòas',
    'can_post_com' => 'Drîkst komentçt',
    'can_upload' => 'Drîkst likt attçlus',
    'can_have_gallery' => 'Drîkst bût personîga galerija',
    'apply' => 'Apstiprinât izmaiòas',
    'create_new_group' => 'Izveidot jaunu grupu',
    'del_groups' => 'Dzçst grupu(-as)',
    'confirm_del' => 'Uzmanîbu! Dzçðot grupu, visi tai piederîgie lietotâji tiks pârvietoti uz reìistrçto lietotâju grupu!\n\nTurpinât?',
    'title' => 'Administrçt lietotâju grupas',
    'approval_1' => 'Publisks uzlikðanas apstiprinâjums (1)',
    'approval_2' => 'Privâts uzlikðanas apstiprinâjums (2)',
        'upload_form_config' => 'Pievienoðanas formas rediìçðana', //cpg1.3.0
        'upload_form_config_values' => array( 'Tikai pa vienam failam', 'Multiple file uploads only', 'URI uploads only', 'ZIP upload only', 'File-URI', 'File-ZIP', 'URI-ZIP', 'File-URI-ZIP'), //cpg1.3.0
        'custom_user_upload'=>'Vai dalîbniekam ir atïauts mainît rediìçðanas formu?', //cpg1.3.0
        'num_file_upload'=>'Cik failu pievienoðanas lauciòus râdît?', //cpg1.3.0
        'num_URI_upload'=>'Cik URI lauciòus râdît?', //cpg1.3.0
    'note1' => '<b>(1)</b> Attçlu uzlikðanai publiskâ albûmâ ir nepiecieðama administratora atïauja',
    'note2' => '<b>(2)</b> Attçlu pievienoðanai albumâ, kas pieder ðim lietotâjam, nepiecieðama administratora atïauja',
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
    'confirm_delete' => 'Tieðâm DZÇST ðo albumu? \\nVisi attçli un komentâri tajâ tiks izdzçsti.',
    'delete' => 'IZDZÇST',
    'modify' => 'UZSTÂDÎJUMI',
    'edit_pics' => 'MODIFICÇT ATTÇLUS',
);

$lang_list_categories = array(
    'home' => 'Galvenâ lapa',
    'stat1' => 'attçli: <b>[pictures]</b> | albumi: <b>[albums]</b> | sadaïas: <b>[cat]</b> | komentâri: <b>[comments]</b> | <b>skatîts [views]</b> reizes',
    'stat2' => 'attçli: <b>[pictures]</b> | albumi: <b>[albums]</b> | skatîti <b>[views]</b> reizes',
    'xx_s_gallery' => 'Autors %s',
    'stat3' => '<b>[pictures]</b> attçli | <b>[albums]</b> albumi | <b>[comments]</b> komentâri | skatîti <b>[views]</b> reizes'
);

$lang_list_users = array(
    'user_list' => 'Lietotâju saraksts',
    'no_user_gal' => 'Nav lietotâju galerijas',
    'n_albums' => 'albumi: <b>%s</b>',
    'n_pics' => 'attçli: <b>%s</b>'
);

$lang_list_albums = array(
    'n_pictures' => '<b>%s</b> attçli',
    'last_added' => ', pçdçjais pievienots <b>%s</b>'
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
    'login' => 'Pieslçgties',
    'enter_login_pswd' => 'Pieslçdzies ar savu lietotâja vârdu un paroli',
    'username' => 'Vârds',
    'password' => 'Parole',
    'remember_me' => 'Atcerçties mani arî turpmâk',
    'welcome' => 'Sveicinâts, %s ...',
    'err_login' => '*** Vârds vai/un parole nepareizi. Mçìinâsi vçlreiz? ***',
    'err_already_logged_in' => 'Tu jau esi sistçmâ!',
        'forgot_password_link' => 'Aizmirsu paroli!', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
    'logout' => 'Iziet',
    'bye' => 'Visu labu,  %s ...',
    'err_not_loged_in' => 'Jâpieslçdzas sistçmai!',
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
    'upd_alb_n' => 'Modificçt albumu %s',
    'general_settings' => 'Galvenie uzstâdîjumi',
    'alb_title' => 'Albuma virsraksts',
    'alb_cat' => 'Sadaïa',
    'alb_desc' => 'Albuma apraksts',
    'alb_thumb' => 'Albuma mazais attçls',
    'alb_perm' => 'Albuma lietotâju tiesîbas',
    'can_view' => 'Albumu var skatîties',
    'can_upload' => 'Apmeklçtâjie drîkst pievienot attçlus',
    'can_post_comments' => 'Apmeklçtâji drîkst komentçt',
    'can_rate' => 'Apmeklçtâji drîkst vçrtçt attçlus',
    'user_gal' => 'Lietotâja galerija',
    'no_cat' => '* Kategorijas nav *',
    'alb_empty' => 'Albums ir tukðs',
    'last_uploaded' => 'Pçdejoreiz uzlikts attçls',
    'public_alb' => 'Ikviens (publiskais albums)',
    'me_only' => 'Tikai es',
    'owner_only' => 'Tikai albuma îpaðnieks (%s)',
    'groupp_only' => 'Tikai \'%s\' grupâ esoðie',
    'err_no_alb_to_modify' => 'Tev nav tiesîbu modificçt albumus.',
    'update' => 'Saglabât izmaiòas'
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
    'already_rated' => 'Atvaino, bet tu jau esi iesniedzis savu vçrtçjumu',
    'rate_ok' => 'Vçrtçjums pieòemts',
        'forbidden' => 'Vçrtçsi pats savus attçlus?', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Ar ðo Tu apòemies neievietot citus aizskaroðus, piedauzîgus, vulgârus,
apmelojoðus, pretîgus, draudoðus, seksuâli orientçtus, vai jebkâdus citus
materiâlus, kas pârkâpj jebkâdus likumus. Likumu nezinâðana neatbrîvo
no atbildîbas!!! Tu piekrîti, ka ðîs lapas webmasters, administrators un
moderators ir tiesîgi izdzçst vai mainît saturu jebkurâ laikâ, kad vien
vçlâs. Kâ lietotâjs Tu piekrîti, ka visa informâcija ko Tu ievadîsi
tiks saglabâta datubâzç.<br />
<br />
Ðî lapa izmanto <em>cookies</em> tehnoloìiju, lai saglabâtu informâciju tavâ datorâ.
<em>Cookies</em> vienîgi uzlabo lapas parâdîðanas kvalitâti. E-pasta adrese
tiek izmantota vienîgi Tavas reìistrâcijas apstiprinâðanai,
lai nosûtîtu paroli.<br />
<br />
Izvçloties zemâk <bold>Es piekrîtu</bold> Tu piekrîti visam iepriekð rakstîtajam.
EOT;

$lang_register_php = array(
    'page_title' => 'Lietotâja reìistrâcija',
    'term_cond' => 'Vienoðanâs nosacîjumi',
    'i_agree' => 'Es piekrîtu',
    'submit' => 'Apstiprinât reìistrâciju',
    'err_user_exists' => 'Ðis lietotâja vârds jau ir reìistrçts, izvçlies citu',
    'err_password_mismatch' => 'Paroles nesakrît, raksti vçlreiz',
    'err_uname_short' => 'Lietotâja vârda minimâlais simbolu skaits ir 2',
    'err_password_short' => 'Parolç jâbût ne mazâk kâ 2 simboliem',
    'err_uname_pass_diff' => 'Lietotâja vârds un parole nedrîkst bût vienâdi',
    'err_invalid_email' => 'E-pasta adres ir nepareiza',
    'err_duplicate_email' => 'Ðâda email adrese jau ir datu bâzç',
    'enter_info' => 'Reìistrâcijas informâcija',
    'required_info' => 'Nepiecieðamâ informâcija',
    'optional_info' => 'Neobligâtâ informâcija',
    'username' => 'Lietotâja vârds',
    'password' => 'Parole',
    'password_again' => 'Vçlreiz parole',
    'email' => 'E-pasts',
    'location' => 'Atraðanâs vieta',
    'interests' => 'Intereses',
    'website' => 'Mâjas lapa',
    'occupation' => 'Nodarboðanâs',
    'error' => 'KÏÛDA',
    'confirm_email_subject' => '%s - Reìistrâcijas apstiprinâjums',
    'information' => 'Informâcija',
    'failed_sending_email' => 'Nevar tikt nosûtîta reìistrâcijas apstiprinâjuma vçstule!',
    'thank_you' => 'Paldies par reìistrçðanos.<br /><br />Vçstule ar sîkâku informâciju, kâ pabeigt reìistrçðanâs procesu, tika nosûtîta uz iepriekð minçto adresi.',
    'acct_created' => 'Konts izveidots un tu vari pieslçgties ar savu lietotâja vârdu un paroli',
    'acct_active' => 'Konts ir aktîvs un tu tagad vari pieslçgties sistçmai',
    'acct_already_act' => 'Konts jau ir aktîvs!',
    'acct_act_failed' => 'Ðis konts nevar tikt aktivizçts!',
    'err_unk_user' => 'Izvçlçtais lietotâjs neeksistç!',
    'x_s_profile' => '%s : profails',
    'group' => 'Grupa',
    'reg_date' => 'Pievienojies',
    'disk_usage' => 'Diska izmantoðana',
    'change_pass' => 'Nomainît paroli',
    'current_pass' => 'Paðreizçjâ parole',
    'new_pass' => 'Jauna parole',
    'new_pass_again' => 'Vçlreiz jaunâ parole',
    'err_curr_pass' => 'Paðreizçjâ parole nepareiza',
    'apply_modif' => 'Apstiprinât izmaiòas',
    'change_pass' => 'Nomainît paroli',
    'update_success' => 'Profails izmainîts',
    'pass_chg_success' => 'Parole nomainîta',
    'pass_chg_error' => 'Parole netika nomainîta',
        'notify_admin_email_subject' => '%s - reìistrâcijas paziòojums', //cpg1.3.0
        'notify_admin_email_body' => 'Jauns dalîbnieks "%s" piereìistrçjies', //cpg1.3.0

);

$lang_register_confirm_email = <<<EOT
Paldies par reìistrçðanos {SITE_NAME}

Lietotâja vârds : "{USER_NAME}"
Lietotâja parole : "{PASSWORD}"

Lai aktivizçtu savu kontu, nepiecieðams ielâdçt zemâk redzamo lapu.

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
    'n_comm_del' => '%s komentâri izdzçsti',
    'n_comm_disp' => 'Cik komentârus atspoguïot',
    'see_prev' => 'Iepriekðçjie',
    'see_next' => 'Nâkamie',
    'del_comm' => 'Dzçst izvçlçtos komentârus',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
    0 => 'Meklçt attçlu kolekcijâ',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
    'page_title' => 'Meklçt jaunus attçlus',
    'select_dir' => 'Izvçlçties direktoriju',
    'select_dir_msg' => 'Ðî funkcija ïauj pievienot daudzus attçlus vienlaikus, ja tie iepriekð uzlikti ar FTP.<br /><br />Izvçlies direktoriju, kur tika uzlikti attçli',
    'no_pic_to_add' => 'Nav attçlu, ko varçtu pievienot',
    'need_one_album' => 'Lai izmantotu ðo funkciju, nepiecieðams vismaz viens albums',
    'warning' => 'Uzmanîbu',
    'change_perm' => 'nav pieeja direktorijai, tai jâizmaina tiesîbas (chmod) no 755 uz 777, lai varçtu pievienot attçlus!',
    'target_album' => '<b>Ievietot attçlus &quot;</b>%s<b>&quot; </b>%s',
    'folder' => 'Direktorija',
    'image' => 'Attçls',
    'album' => 'Albums',
    'result' => 'Rezultâti',
    'dir_ro' => 'Nav rakstîðanas tiesîbu. ',
    'dir_cant_read' => 'Nav lasîðanas tiesîbu. ',
    'insert' => 'Jaunu attçlu pievienoðana',
    'list_new_pic' => 'Jauno attçlu saraksts',
    'insert_selected' => 'Pievienot izvçlçtos attçlus',
    'no_pic_found' => 'Jauni attçli netika atrasti',
    'be_patient' => 'Lûdzu esiet pacietîgi, kamçr tiek pievienoti jaunie attçli',
        'no_album' => 'Albûms nav izvçlçts',  //cpg1.3.0
    'notes' =>  '<ul>'.
                '<li><b>OK</b> : attçls veiksmîgi pievienots'.
                '<li><b>DP</b> : nozîmç, ka tâds attçls jau ir datu bâzç'.
                '<li><b>PB</b> : attçlu nevar pievienot, jâpârbauda pieejas tiesîbas'.
                                '<li><b>NA</b> : nozîmç, ka neesi izvçlçjies albûmu, kur ievietot ðos foto. Spied \'<a href="javascript:history.back(1)">atpakaï pogu</a>\' un izvçlies. Ja nav neviena albûma, <a href="albmgr.php">vispirms izveidot</a></li>'.
                '<li>Ja OK, DP, PB \'zîmes\' neparâdâs, jâklikðíina uz attçla, kas parâdâs, lai iegûtu detalizçtâku kïûdas aprakstu'.
                '<li>Ja pârlûkâ parâdâs paziòojums par taimautu, lapa ir jâpârlâdç'.
                '</ul>',
        'select_album' => 'izvçlçties albûmu', //cpg1.3.0
        'check_all' => 'ieíeksçt visu', //cpg1.3.0
        'uncheck_all' => 'atíeksçt visu', //cpg1.3.0
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
                'expiry' => 'Darbojas lîdz (tukðs nozîmç - bezgalîgi)', //new in cpg1.2.0
                'edit_ban' => 'Saglabât', //new in cpg1.2.0
                'delete_ban' => 'Dzçst', //new in cpg1.2.0
                'add_new' => 'Jauns ieraksts', //new in cpg1.2.0
                'add_ban' => 'Pievienot', //new in cpg1.2.0
                                'error_user' => 'Nevar atrast tâdu dalîbnieku', //cpg1.3.0
                                'error_specify' => 'Nepiecieðams dalîbnieka vârds vai IP adrese', //cpg1.3.0
                                'error_ban_id' => 'Nepareizs aizlieguma ID!', //cpg1.3.0
                                'error_admin_ban' => 'Sevi nevar aizliegt!', //cpg1.3.0
                                'error_server_ban' => 'Aizliegt piekïuvi no savas adreses? Neprâts...', //cpg1.3.0
                                'error_ip_forbidden' => 'Nevar aizliegt piekïuvi ðâdai IP adresei! (not routable)', //cpg1.3.0
                                'lookup_ip' => 'Lookup an IP address', //cpg1.3.0
                                'submit' => 'aiziet!', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Pievienot', //cpg1.3.0
  'custom_title' => 'Modificçta pievienoðanas forma', //cpg1.3.0
  'cust_instr_1' => 'Izvçlies, cik lauciòus atspoguïot (ierobeþots lielums).', //cpg1.3.0
  'cust_instr_2' => 'Pievienoðanas lauciòu skaits', //cpg1.3.0
  'cust_instr_3' => 'Max pievienoðanas lauciòu skaits: %s', //cpg1.3.0
  'cust_instr_4' => 'URI/URL lauciòu skaits: %s', //cpg1.3.0
  'cust_instr_5' => 'URI/URL lauciòu skaits:', //cpg1.3.0
  'cust_instr_6' => 'Pievienoðanas lauciòu skaits:', //cpg1.3.0
  'cust_instr_7' => 'Izvçlies katra tipa lauciòu skaitu. pçc tam spied \'Turpinât\'. ', //cpg1.3.0
  'reg_instr_1' => 'Kïûda opcijâs.', //cpg1.3.0
  'reg_instr_2' => '<small style="color:white;">Iespçjama vairâku failu vienlaicîga pievienoðana. Failiem nevajadzçtu bût lielâkiem par %s KB (katram). Pievienojot ZIP failus, tie paliek tâdâ paðâ formâtâ (netiek atvçrti).</small>', //cpg1.3.0
  'reg_instr_3' => 'Ja vçlies, lai ZIP formâta faili tiktu atkompresçti automâtiski, pievieno tos sadaïâ \'Decompressive ZIP Upload\'.', //cpg1.3.0
  'reg_instr_4' => '<small style="color:white;">Izmantojot URI/URL, izmanto pilnu ceïu uz failu: <code>http://www.mysite.com/images/example.jpg</code></small>', //cpg1.3.0
  'reg_instr_5' => '<small style="color:white;">Ja viss aizpildît un pârbaudîts, spied \'Turpinât\'.</small><br/>', //cpg1.3.0
  'reg_instr_6' => 'Decompressive ZIP Uploads:', //cpg1.3.0
  'reg_instr_7' => 'Faili:', //cpg1.3.0
  'reg_instr_8' => 'URI/URL:', //cpg1.3.0
  'error_report' => 'Kïûdas', //cpg1.3.0
  'error_instr' => 'Bija sekojoðas kïûdas:', //cpg1.3.0
  'file_name_url' => 'Fails nosaukums/URL', //cpg1.3.0
  'error_message' => 'Kïûdas paziòojums', //cpg1.3.0
  'no_post' => 'Fails netika pievienots ar POST metodi.', //cpg1.3.0
  'forb_ext' => 'Aizliegts faila formâts.', //cpg1.3.0
  'exc_php_ini' => 'Pârsniegts php.ini norâdîtais pievienojamo failu lielums.', //cpg1.3.0
  'exc_file_size' => 'Pârsniegts CPG uzstâdîtais failu lielums.', //cpg1.3.0
  'partial_upload' => 'Only a partial upload.', //cpg1.3.0
  'no_upload' => 'Pievienoðana nenotika.', //cpg1.3.0
  'unknown_code' => 'Nezinâma PHP kïûda.', //cpg1.3.0
  'no_temp_name' => 'No upload - No temp name.', //cpg1.3.0
  'no_file_size' => 'Contains no data/Corrupted', //cpg1.3.0
  'impossible' => 'Impossible to move.', //cpg1.3.0
  'not_image' => 'Tas nav attçls/attçls ir íïûdains', //cpg1.3.0
  'not_GD' => 'Not a GD extension.', //cpg1.3.0
  'pixel_allowance' => 'Pârâk daudz pikseïi.', //cpg1.3.0
  'incorrect_prefix' => 'Nepareiza formâta URI/URL', //cpg1.3.0
  'could_not_open_URI' => 'Nav iespçjams atvçrt URI.', //cpg1.3.0
  'unsafe_URI' => 'Safety not verifiable.', //cpg1.3.0
  'meta_data_failure' => 'Meta data kïûda', //cpg1.3.0
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
  'cant_unzip' => 'Nav iespçjams atkompresçt.', //cpg1.3.0
  'unknown' => 'Nedefinçta kïuda', //cpg1.3.0
  'succ' => 'Veiksmîgi pievienots', //cpg1.3.0
  'success' => '<small style="color:white;">Fails nr. %s veiksmîgi pievienots</small>', //cpg1.3.0
  'add' => '<small style="color:white;">Spied uz \'Turpinât\', lai albûmam pievienotu attçlus.<br/></small>', //cpg1.3.0
  'failure' => 'Pievienoðanas kïûda', //cpg1.3.0
  'f_info' => 'Informâcija par datiem', //cpg1.3.0
  'no_place' => 'Nav iespçjams nomainît jau esoðu failu.', //cpg1.3.0
  'yes_place' => 'Iepriekðçjais fails veiksmîgi pievienots.', //cpg1.3.0
  'max_fsize' => 'Atïautais viena faila lielums %s KB',
  'album' => 'Albûms',
  'picture' => 'Fails', //cpg1.3.0
  'pic_title' => 'Faila nosaukums (virsraksts)', //cpg1.3.0
  'description' => 'Fila apraksts', //cpg1.3.0
  'keywords' => 'Atslçgas vârdi (vairâkus atdali ar atstarpçm)',
  'err_no_alb_uploadables' => 'Atvaino, bet nav neviena albûma, kur tu varçtu likt attçlus', //cpg1.3.0
  'place_instr_1' => 'Ievieto katru attçlu vajadzîgajâ albûmâ, ja vajadzîgs, katram pievieno sîkâku informâciju.', //cpg1.3.0
  'place_instr_2' => 'Spied uz \'Turpinât\' un norâdi, kur ievietot pârçjos failus.', //cpg1.3.0
  'process_complete' => 'Visi dati veiksmîgi pievienoti.', //cpg1.3.0
);

/*
if (defined('UPLOAD_PHP')) $lang_upload_php = array(
    'title' => 'Uzlikt attçlu',
    'max_fsize' => 'Max pievienojamâ faila lielums %s KB',
    'album' => 'Albums',
    'picture' => 'Attçls',
    'pic_title' => 'Attçla virsraksts',
    'description' => 'Attçla apraksts',
    'keywords' => 'Atslçgas vârdi (atdalît ar atstarpçm)',
    'err_no_alb_uploadables' => 'Atvaino, nav neviena albuma, kurâ tu varçtu ievietot savus attçlus',
);
*/

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
    'title' => 'Administrçt lietotâjus',
    'name_a' => 'Vârds augoði',
    'name_d' => 'Vârds dilstoði',
    'group_a' => 'Grupa augoði',
    'group_d' => 'Grupa dilstoði',
    'reg_a' => 'Reg datums augoði',
    'reg_d' => 'Reg datums dilstoði',
    'pic_a' => 'Attçlu skaits augoði',
    'pic_d' => 'Attçlu skaits dilstoði',
    'disku_a' => 'Diska atmiòa augoði',
    'disku_d' => 'Diska atmiòa dilstoði',
        'lv_a' => 'Pedçjais apmeklçjums augoði', //cpg1.3.0
        'lv_d' => 'Pçdçjais apmeklçjums dilstoði', //cpg1.3.0
    'sort_by' => 'Kârtot',
    'err_no_users' => 'Lietotâju tabulâ nav datu!',
    'err_edit_self' => 'Nemaini te savu profailu, tam izmanto \'Mans profails\'',
    'edit' => 'MODIFICÇT',
    'delete' => 'DZÇST',
    'name' => 'Lietotâjs',
    'group' => 'Grupa',
    'inactive' => 'Neaktîvs',
    'operations' => 'Darbîbas',
    'pictures' => 'Attçli',
    'disk_space' => 'Izmantotâ atmiòa / Ierobeþojums',
    'registered_on' => 'Reìistrçts',
        'last_visit' => 'Pçdçjais apmeklçjums', //cpg1.3.0
    'u_user_on_p_pages' => '%d lietotâji %d lapâ(s)',
    'confirm_del' => 'Tieðâm DZÇST ðo lietotâju? \\nVisi viòa attçli un komentâri arî tiks izdzçsti',
    'mail' => 'MAIL',
    'err_unknown_user' => 'Izvçlçtais lietotâjs neeksistç!',
    'modify_user' => 'Mainît datus',
    'notes' => 'Piezîmes',
    'note_list' => '<li>Ja nevçlies mainît paroli, atstâj paroles lauku tukðu',
    'password' => 'Parole',
    'user_active' => 'Lietotâjs aktîvs',
    'user_group' => 'Grupa',
    'user_email' => 'Emails',
    'user_web_site' => 'Mâjas lapa',
    'create_new_user' => 'Izveidot',
    'user_location' => 'Atraðanâs',
    'user_interests' => 'Intereses',
    'user_occupation' => 'Nodarboðanâs',
        'latest_upload' => 'Pçdçjie pievienotie faili', //cpg1.3.0
        'never' => 'nekad', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
        'title' => 'Attçlu izmçri', //new in cpg1.2.0
        'what_it_does' => 'Funkcijas', //new in cpg1.2.0
        'what_update_titles' => 'Virsraksti tiek òemti no failu nosaukumiem', //new in cpg1.2.0
        'what_delete_title' => 'Dzçst virsrakstus', //new in cpg1.2.0
        'what_rebuild' => 'Pârveidot attçlus', //new in cpg1.2.0
        'what_delete_originals' => 'Dzçst oriìinâlos attçlus un nomainît tos ar samazinâtajiem/palielinâtajiem', //new in cpg1.2.0
        'file' => 'Fails', //new in cpg1.2.0
        'title_set_to' => 'virsraksts', //new in cpg1.2.0
        'submit_form' => 'Apstiprinât', //new in cpg1.2.0
        'updated_succesfully' => 'Veiksmîgi izmanîts', //new in cpg1.2.0
        'error_create' => 'Kïûda', //new in cpg1.2.0
        'continue' => 'Turpinât ar citiem attçliem', //new in cpg1.2.0
        'main_success' => 'Fails %s tiek izmantots kâ galvenais attçls', //new in cpg1.2.0
        'error_rename' => 'Kïûda %s pârsaucot par %s', //new in cpg1.2.0
        'error_not_found' => 'Fails %s nav atrasts', //new in cpg1.2.0
        'back' => 'Atgriezties', //new in cpg1.2.0
        'thumbs_wait' => 'Notiek mazo un normâlo attçlu modificçðana, lûdzu uzgaidi...', //new in cpg1.2.0
        'thumbs_continue_wait' => 'Turpinam modificçt mazos un normâlos attçlus...', //new in cpg1.2.0
        'titles_wait' => 'Norit sparîga virsrakstu modificçðana, uzgaidi...', //new in cpg1.2.0
        'delete_wait' => 'Dzçðu virsrakstus, lûdzu uzgaidi...', //new in cpg1.2.0
        'replace_wait' => 'Dzçðu oriìinâlus, nomainot tos ar modificçtajiem attçliem, lûdzu uzgaidi...', //new in cpg1.2.0
        'instruction' => 'Ieteikumi', //new in cpg1.2.0
        'instruction_action' => 'Izvçlies darbîbu', //new in cpg1.2.0
        'instruction_parameter' => 'Uzliec parametrus', //new in cpg1.2.0
        'instruction_album' => 'Izvçlies albumu', //new in cpg1.2.0
        'instruction_press' => 'Nospied %s', //new in cpg1.2.0
        'update' => 'Modificç mazos un/vai normâlos attçlus', //new in cpg1.2.0
        'update_what' => 'Kas jâmodificç', //new in cpg1.2.0
        'update_thumb' => 'Tikai mazos attçlus', //new in cpg1.2.0
        'update_pic' => 'Tikai modificçtos attçlus', //new in cpg1.2.0
        'update_both' => 'Gan mazie, gan normâlie attçli', //new in cpg1.2.0
        'update_number' => 'Cik attçlus var modificçt ar vienu klikðíi', //new in cpg1.2.0
        'update_option' => '(Ðo parametru samazini, ja ir problçmas ar modificçðanu)', //new in cpg1.2.0
        'filename_title' => 'Faila nosaukums &rArr; Attçla virsraksts', //new in cpg1.2.0
        'filename_how' => 'Kâ modificçt attçlu', //new in cpg1.2.0
        'filename_remove' => 'Dzçst .jpg paplaðinâjumu un _ nomainît ar atstarpi', //new in cpg1.2.0
        'filename_euro' => 'Konvertçt 2003_11_23_13_20_20.jpg uz 23/11/2003 13:20', //new in cpg1.2.0
        'filename_us' => 'Konevertçt 2003_11_23_13_20_20.jpg uz 11/23/2003 13:20', //new in cpg1.2.0
        'filename_time' => 'Konvertçt 2003_11_23_13_20_20.jpg uz 13:20', //new in cpg1.2.0
        'delete' => 'Attçlu virsrakstu un attçlu dzçðana', //new in cpg1.2.0
        'delete_title' => 'Dzçst attçlu virsrakstus', //new in cpg1.2.0
        'delete_original' => 'Dzçst oriìinâlus', //new in cpg1.2.0
        'delete_replace' => 'Dzçst oriìinâlus aizstâjot tos ar modificçtajiem attçliem', //new in cpg1.2.0
        'select_album' => 'Izvçlies albumu', //new in cpg1.2.0
        'delete_orphans' => 'Delete orphaned comments (works on all albums)', //cpg1.3.0
        'orphan_comment' => 'orphan comments found', //cpg1.3.0
        'delete' => 'Dzçst', //cpg1.3.0
        'delete_all' => 'Dzçst visu', //cpg1.3.0
        'comment' => 'Komentâri: ', //cpg1.3.0
        'nonexist' => 'Pievienots neeksistçjoðam dailam # ', //cpg1.3.0
        'phpinfo' => 'Râdît phpinfo', //cpg1.3.0
        'update_db' => 'Atjaunot datu bâzi', //cpg1.3.0
        'update_db_explanation' => 'If you have replaced coppermine files, added a modification or upgraded from a previous version of coppermine, make sure to run the database update once. This will create the necessary tables and/or config  values in your coppermine database.', //cpg1.3.0

);

?>