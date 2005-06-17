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
// CVS version: $Id: finnish-utf-8.php,v 1.6 2004/07/24 15:04:02 gaugau Exp $
// ------------------------------------------------------------------------- //

// Kääntäjä ja tietoja käännöksestä
$lang_translation_info = array(
        'lang_name_english' => 'Finnish',
        'lang_name_native' => 'Suomi',
        'lang_country_code' => 'fi',
        'trans_name'=> 'Mikko Kulmala',
        'trans_email' => 'mikko@kulmalat.org',
        'trans_website' => 'http://www.kulmalat.org',
        'trans_date' => '2004-06-13',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// lyhenteet Tavulle, Kilolle ja Megalle
$lang_byte_units = array('tavua', 'KB', 'MB');

// Viikonpäivät ja kuukaudet
$lang_day_of_week = array('Su', 'Ma', 'Ti', 'Ke', 'To', 'Pe', 'La');
$lang_month = array('Tammikuu', 'Helmikuu', 'Maaliskuu', 'Huhtikuu', 'Toukokuu', 'Kesäkuu', 'Heinäkuu', 'Elokuu', 'Syyskuu', 'Lokakuu', 'Marraskuu', 'Joulukuu');

// Yleistä
$lang_yes = 'Kyllä';
$lang_no  = 'Ei';
$lang_back = 'Takaisin';
$lang_continue = 'Jatka';
$lang_info = 'Tietoa';
$lang_error = 'Virhe';

// Päiväys
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%B %d, %Y';
$lastcom_date_fmt =  '%m/%d/%y at %H:%M';
$lastup_date_fmt = '%B %d, %Y';
$register_date_fmt = '%B %d, %Y';
$lasthit_date_fmt = '%B %d, %Y at %I:%M %p';
$comment_date_fmt =  '%B %d, %Y at %I:%M %p';

// Kirosanafiltteri (ei käännetty)
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
        'random' => 'Satunaiset kuvat', 
        'lastup' => 'Uusimmat kuvat', 
        'lastalb'=> 'Viimeksi päivitetyt albumit', 
        'lastcom' => 'Uusimmat komentit', 
        'topn' => 'Katsotuimmat', 
        'toprated' => 'Suosituimmat', 
        'lasthits' => 'Viimeksi tarkasteltu', 
        'search' => 'Haun tulokset', 
        'favpics'=> 'Omat suosikkini'
);

$lang_errors = array(
	'access_denied' => 'Ei oikeuksia tälle sivulle.',
	'perm_denied' => 'Ei oikeuksia kyseisen toiminnon suorittamiseen.',
	'param_missing' => 'Skriptiä kutsuttu ilman vaadittavia parametrejä.',
	'non_exist_ap' => 'Valittua albumia/kuvaa ei löydy !',
	'quota_exceeded' => 'Levytilasi on täynnä<br /><br />Levytilasi on täynnä [quota]K, kuviesi vievä tila [space]K, lisäämällä tämän kuvan tilasi koko ylittyisi.',
	'gd_file_type_err' => 'Kun käytät GD:tä, sallitut tiedostomuodot ovat JPEG ja PNG.',
	'invalid_image' => 'Kuva on korruptoitunut eikä sitä voi käsitellä GD:llä',
	'resize_failed' => 'Ongelma thumbnailien luomisessa.',
	'no_img_to_display' => 'Ei näyttettäviä kuvia',
	'non_exist_cat' => 'Valittua kategoriaa ei löydy',
	'orphan_cat' => 'Ongelmia kategoriassa. Aja kategoriamanageri ongelman selvittämiseksi.',
	'directory_ro' => 'Hakemistoon \'%s\' ei ole määritelty kirjoitusoikeuksia. Kuvia ei voi poistaa',
	'non_exist_comment' => 'Valittua kommenttia ei löydy.',
	'pic_in_invalid_album' => 'Kuvaa ei ole albumissa (%s)!?',
	'banned' => 'Sinulta on evätty pääsy tälle sivulle.', 
	'not_with_udb' => 'Tämä toiminto on poistettu käytöstä Coppermine gallerissa, koska tämä on integroitu foorumiohjelmistoon. Toiminto, jota yritit tehdä, ei ole tuettuna tässä kokoonpanossa. Toiminto löytyy mahdollisesti foorumiohjelmistosta.', 
	'offline_title' => 'Offline', //cpg1.3.0
	'offline_text' => 'Galleria on tällä hetkellä offline-tilassa - palaa myöhemmin uudelleen.', //cpg1.3.0
        'ecards_empty' => 'Yhtään e-korttia ei ole käytettävissä. Varmista, että olet sallinut e-korttien käyttämisen gallerian asetuksista.', //cpg1.3.0
	'action_failed' => 'Toiminto epäonnistui.  Coppermine ei pysty käsittelemään valitsemaasi toimintoa.', //cpg1.3.0
        'no_zip' => 'Zip-tiedostojen käsittelyssä välttämättömiä tiedostoja ei ole saatavilla. Ota yhteys gallerian ylläpitoon.', //cpg1.3.0
	'zip_type' => 'Sinulla ei ole oikeutta siirtää palvelimelle Zip-tiedostoja.', //cpg1.3.0
);

$lang_bbcode_help = 'Seuraavat koodit ovat käyttökelpoisia: <li>[b]<b>Lihavoitu</b>[/b]</li> <li>[i]<i>Kursivoitu</i>[/i]</li> <li>[url=http://omasivu.com/]Linkki[/url]</li> <li>[email]käyttäjä@domain.com[/email]</li>'; //cpg1.3.0

// ------------------------------------------------------------------------- //
// Tiedosto theme.php                                                        //
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
	'alb_list_title' => 'Siirry albumilistaan',
	'alb_list_lnk' => 'Albumilista',
	'my_gal_title' => 'Siirry omaan galleriaan',
	'my_gal_lnk' => 'Oma galleria',
	'my_prof_lnk' => 'Omat asetukset',
	'adm_mode_title' => 'Vaihda ylläpitotilaan',
	'adm_mode_lnk' => 'Ylläpitotila',
	'usr_mode_title' => 'Vaihda käyttäjätilaan',
	'usr_mode_lnk' => 'Käyttäjätila',
	'upload_pic_title' => 'Lisää kuva albumiin',
	'upload_pic_lnk' => 'Lisää kuva',
	'register_title' => 'Luo uusi tili',
	'register_lnk' => 'Rekisteröidy',
	'login_lnk' => 'Kirjaudu',
	'logout_lnk' => 'Poistu',
	'lastup_lnk' => 'Viimeksi lisätty',
	'lastcom_lnk' => 'Uusimmat kommentit',
	'topn_lnk' => 'Katsotuimmat',
	'toprated_lnk' => 'Suosituimmat',
	'search_lnk' => 'Haku',
	'fav_lnk' => 'Suosikkini',
	'memberlist_title' => 'Käyttäjälista', //cpg1.3.0
	'memberlist_lnk' => 'Näytä käyttäjälista', //cpg1.3.0
	'faq_title' => 'Usein kysytyt kysymykset', //cpg1.3.0
	'faq_lnk' => 'FAQ', //cpg1.3.0
);

$lang_gallery_admin_menu = array(
	'upl_app_lnk' => 'Tarkistettavat',
	'config_lnk' => 'Asetukset',
	'albums_lnk' => 'Albumit',
	'categories_lnk' => 'Kategoriat',
	'users_lnk' => 'Käyttäjät',
	'groups_lnk' => 'Ryhmät',
	'comments_lnk' => 'Kommentit',
	'searchnew_lnk' => 'Lisää kuvia',
	'util_lnk' => 'Käsittele kuvia',
	'ban_lnk' => 'Bannaa käyttäjiä',
	'db_ecard_lnk' => 'Näytä e-kortit', //cpg1.3.0
);

$lang_user_admin_menu = array(
	'albmgr_lnk' => 'Luo / muokkaa albumeita.',
	'modifyalb_lnk' => 'Muokkaa omaa albumia.',
	'my_prof_lnk' => 'Omat asetukset',
);

$lang_cat_list = array(
	'category' => 'Kategoria',
	'albums' => 'Albumit',
	'pictures' => 'Kuvat', //cpg1.3.0
);

$lang_album_list = array(
	'album_on_page' => '%d albumia %d sivu(a)'
);

//Järjestä tiedoston nimen ja päivämäärän mukaan
$lang_thumb_view = array(
	'date' => 'Päivämäärä',
	'name' => 'Nimi', 
	'title' => 'Otsikko', 
	'sort_da' => 'Järjestä päivämäärittäin nousevasti',
	'sort_dd' => 'Järjestä päivämäärittäin laskevasti',
	'sort_na' => 'Järjestä nimellä nousevasti',
	'sort_nd' => 'Järjestä nimellä laskevasti',
	'sort_ta' => 'Järjestä otsikolla nousevasti', 
	'sort_td' => 'Järjestä otsikolla laskevasti',
	'download_zip' => 'Lataa Zip-tiedostona', //cpg1.3.0
	'pic_on_page' => '%d kuvaa %d sivu(a)',
	'user_on_page' => '%d käyttäjää %d sivu(a)' //cpg1.3.0
);

$lang_img_nav_bar = array(
	'thumb_title' => 'Takaisin thumbnail-sivulle',
	'pic_info_title' => 'Näytä/piilota kuvan tiedot',
	'slideshow_title' => 'Diashow',
	'ecard_title' => 'Lähetä tämä kuva e-korttina.',
	'ecard_disabled' => 'E-kortit pois päältä.',
	'ecard_disabled_msg' => 'Sinulla ei ole oikeutta lähettää e-kortteja.',
	'prev_title' => 'Näytä edellinen kuva',
	'next_title' => 'Näytä seuraava kuva',
	'pic_pos' => 'Kuva %s/%s',
);

$lang_rate_pic = array(
	'rate_this_pic' => 'Äänestä tätä kuvaa ',
	'no_votes' => '(ei ääniä vielä)',
	'rating' => '(nykyinen taso : %s / 5 ja %s ääntä)',
	'rubbish' => 'Täyttä roskaa',
	'poor' => 'Melko huono',
	'fair' => 'Keskitasoa',
	'good' => 'Hyvä',
	'excellent' => 'Loistava',
	'great' => 'Aivan uskomaton',
);

// ------------------------------------------------------------------------- //
// Tiedosto include/exif.inc.php                                             //
// ------------------------------------------------------------------------- //

// tyhjä

// ------------------------------------------------------------------------- //
// Tiedosto include/functions.inc.php                                        //
// ------------------------------------------------------------------------- //

$lang_cpg_die = array(
	INFORMATION => $lang_info,
	ERROR => $lang_error,
	CRITICAL_ERROR => 'Kriittinen virhe',
	'file' => 'Tiedosto: ',
	'line' => 'Rivi: ',
);

$lang_display_thumbnails = array(
	'filename' => 'Tiedoston nimi : ',
	'filesize' => 'Tiedoston koko : ',
	'dimensions' => 'Tarkkuus : ',
	'date_added' => 'Lisätty : '
);

$lang_get_pic_data = array(
	'n_comments' => '%s kommenttia',
	'n_views' => '%s tarkastelua',
	'n_votes' => '(%s ääntä)'
);

$lang_cpg_debug_output = array(
	'debug_info' => 'Virheilmoitus', //cpg1.3.0
	'select_all' => 'Valitse kaikki', //cpg1.3.0
	'copy_and_paste_instructions' => 'Jos aiot pyytää apua Copperminen foorumeilta, liitä tämä virheinfo viestiisi. Muista korvata salasanat tähdillä (*) ennen kuin lähetät viestin.', //cpg1.3.0
	'phpinfo' => 'Näytä phpinfo', //cpg1.3.0
);

$lang_language_selection = array(
	'reset_language' => 'Alkuperäiset kieliasetukset', //cpg1.3.0
	'choose_language' => 'Valitse kieli', //cpg1.3.0
);

$lang_theme_selection = array(
	'reset_theme' => 'Alkuperäinen ulkoasu', //cpg1.3.0
	'choose_theme' => 'Valitse ulkoasu', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// Tiedosto include/init.inc.php                                             //
// ------------------------------------------------------------------------- //

// tyhjä

// ------------------------------------------------------------------------- //
// Tiedosto include/picmgmt.inc.php                                          //
// ------------------------------------------------------------------------- //

// tyhjä

// ------------------------------------------------------------------------- //
// Tiedosto include/smilies.inc.php                                          //
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
	'Exclamation' => 'Huuto',
	'Question' => 'Kysymys',
	'Very Happy' => 'Erittäin Iloinen',
	'Smile' => 'Hymy',
	'Sad' => 'Suru',
	'Surprised' => 'Yllättynyt',
	'Shocked' => 'Järkyttynyt',
	'Confused' => 'Häkeltynyt',
	'Cool' => 'Cool',
	'Laughing' => 'Nauru',
	'Mad' => 'Hullu',
	'Razz' => 'Razz',
	'Embarassed' => 'Embarassed',
	'Crying or Very sad' => 'Itkeä',
	'Evil or Very Mad' => 'Erittäin Hullu',
	'Twisted Evil' => 'Kieroutunut Hullu',
	'Rolling Eyes' => 'Pyörivät silmät',
	'Wink' => 'Vink',
	'Idea' => 'Idea',
	'Arrow' => 'Nuoli',
	'Neutral' => 'Neutraali',
	'Mr. Green' => 'Mr. Vihreä',
);

// ------------------------------------------------------------------------- //
// Tiedosto addpic.php                                                       //
// ------------------------------------------------------------------------- //

// tyhjä

// ------------------------------------------------------------------------- //
// Tiedosto admin.php                                                        //
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
	0 => 'Poistuu ylläpitotilasta.',
	1 => 'Siirtyy ylläpitotilaan.',
);

// ------------------------------------------------------------------------- //
// Tiedosto albmgr.php                                                       //
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
	'alb_need_name' => 'Albumi tarvitsee nimen !',
	'confirm_modifs' => 'Haluatko varmasti tehdä nämä muutokset?',
	'no_change' => 'Et tehnyt yhtään muutosta!',
	'new_album' => 'Uusi albumi',
	'confirm_delete1' => 'Haluatko varmasti poistaa tämän albumin?',
	'confirm_delete2' => '\nKaikki kuvat ja kommentit tulevat poistumaan!',
	'select_first' => 'Valitse albumi ensin',
	'alb_mrg' => 'Albumien käsittely',
	'my_gallery' => '* Oma galleria *',
	'no_category' => '* Ei kategoriaa *',
	'delete' => 'Poista',
	'new' => 'Uusi',
	'apply_modifs' => 'Hyväksy muutokset',
	'select_category' => 'Valitse kategoria',
);

// ------------------------------------------------------------------------- //
// Tiedosto catmgr.php                                                       //
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
	'miss_param' => 'Toimintoa \'%s\'ei voitu suorittaa.',
	'unknown_cat' => 'Valittua kategoriaa ei ole enää tietokannassa.',
	'usergal_cat_ro' => 'Käyttäjien gallerioiden kategorioita ei voi poistaa!',
	'manage_cat' => 'Hallitse kategorioita',
	'confirm_delete' => 'Haluatko varmasti poistaa tämän kategorian?',
	'category' => 'Kategoria',
	'operations' => 'Toiminnot',
	'move_into' => 'Siirrä',
	'update_create' => 'Päivitä/Luo kategoria',
	'parent_cat' => 'Pääkategoria',
	'cat_title' => 'Kategorian otsikko',
        'cat_thumb' => 'Kategorian thumbnail', //cpg1.3.0
	'cat_desc' => 'Kategorian tarkenne'
);

// ------------------------------------------------------------------------- //
// Tiedosto config.php                                                       //
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
	'title' => 'Asetukset',
	'restore_cfg' => 'Palauta oletukset',
	'save_cfg' => 'Tallenna muutokset',
	'notes' => 'Huomio',
	'info' => 'Info',
	'upd_success' => 'Gallerian asetukset päivitetty',
	'restore_success' => 'Gallerian oletusasetukset palautettu',
	'name_a' => 'Nimi nousevasti',
	'name_d' => 'Nimi laskevasti',
	'title_a' => 'Otsikko nousevasti', 
        'title_d' => 'Otsikko laskevasti',
	'date_a' => 'Päivä nousevasti',
	'date_d' => 'Päivä laskevasti',
        'th_any' => 'Max Aspect',
        'th_ht' => 'Korkeus',
        'th_wd' => 'Leveys',
        'label' => 'otsikko', //cpg1.3.0
        'item' => 'linkki', //cpg1.3.0
        'debug_everyone' => 'Kaikki', //cpg1.3.0
        'debug_admin' => 'Vain ylläpitäjä', //cpg1.3.0
        );

if (defined('CONFIG_PHP')) $lang_config_data = array(
	'Yleiset asetukset',
	array('Gallerian nimi', 'gallery_name', 0),
	array('Gallerian tarkenne', 'gallery_description', 0),
	array('Gallerian ylläpitäjän sähköposti', 'gallery_admin_email', 0),
	array('Kohdeosoite \'Näytä enemmän kuvia\' -linkissä e-korteissa', 'ecards_more_pic_target', 0),
        array('Galleria on offline-tilassa', 'offline', 1), //cpg1.3.0
        array('Salli e-kortit', 'log_ecards', 1), //cpg1.3.0
        array('Salli Zip-tiedostot', 'enable_zipdownload', 1), //cpg1.3.0

  'Kieli, teema &amp; merkistö',
	array('Kieli', 'lang', 5),
	array('Teema', 'theme', 6),
        array('Näytä lista kielistä', 'language_list', 8), //cpg1.3.0
        array('Näytä kieliä vastaavat liput', 'language_flags', 8), //cpg1.3.0
        array('Näytä &quot;oletusasetus&quot; kielivalinnassa', 'language_reset', 1), //cpg1.3.0
        array('Näytä lista teemoista', 'theme_list', 8), //cpg1.3.0
        array('Näytä &quot;oletusasetus&quot; teemavalinnassa', 'theme_reset', 1), //cpg1.3.0
        array('Näytä FAQ', 'display_faq', 1), //cpg1.3.0
        array('Näytä apua bb-koodin käyttöön ', 'show_bbcode_help', 1), //cpg1.3.0
        array('Merkistö', 'charset', 4), //cpg1.3.0

  'Albumin näyttöasetukset',
	array('Päätaulukon leveys (pikseleissä tai %)', 'main_table_width', 0),
	array('Kuinka monta kategoriaa näytetään tasolla', 'subcat_level', 0),
	array('Kuinka monta albumia näytetään sivulla', 'albums_per_page', 0),
	array('Kuinka monta saraketta näytetään albumilistassa', 'album_list_cols', 0),
	array('Thumbnailien koko pikseleissä', 'alb_list_thumb_size', 0),
	array('Mitä tietoja etusivulla näytetään', 'main_page_layout', 0),
	array('Näytä ensimmäisen tason albumin thumbnailit kategoriassa','first_level',1),

  'Thumbnailien näyttö',
	array('Sarakkeita thumbnail-sivulla', 'thumbcols', 0),
	array('Rivejä thumbnail sivulla', 'thumbrows', 0),
	array('Kaistaleiden maksimimäärä', 'max_tabs', 10), //cpg1.3.0
	array('Näytä kuvateksti thumbnaileissa', 'caption_in_thumbview', 1), //cpg1.3.0
        array('Näytä katselukertojen määrä thumbnailin alla', 'views_in_thumbview', 1), //cpg1.3.0
	array('Näytä kommenttien määrä thumbnaileissa', 'display_comment_count', 1),
        array('Näytä tiedoston siirtäjän nimi kuvan alla', 'display_uploader', 1), //cpg1.3.0
	array('Kuvien oletusjärjestys', 'default_sort_order', 3), //cpg1.3.0
	array('Tarvittavien äänien määrä ennen suosituimmat-listalle pääsyä', 'min_votes_for_rating', 0), //cpg1.3.0

  'Kuvien näyttö- &amp; kommenttiasetukset',
	array('Kuvan näyttö taulukon leveys (pikseleinä tai %)', 'picture_table_width', 0), //cpg1.3.0
	array('Kuvan tiedot oletuksena näkyvissä', 'display_pic_info', 1), //cpg1.3.0
	array('Kirosanafiltteri', 'filter_bad_words', 1),
	array('Hyväksy hymiöt kommentissa', 'enable_smilies', 1),
        array('Salli useita kommentteja samaan kuvaan samalta käyttäjältä (flood-suojaus pois käytöstä)', 'disable_comment_flood_protect', 1), //cpg1.3.0
	array('Kuvatekstin maksimipituus', 'max_img_desc_length', 0),
	array('Maksimimäärä merkkejä sanassa', 'max_com_wlength', 0),
	array('Kommenttirivien maksimimäärä', 'max_com_lines', 0),
	array('Kommentin maksimipituus', 'max_com_size', 0),
	array('Näytä thumbnaileja kuvasivulla', 'display_film_strip', 1), 
        array('Thumbnaileja kuvasivulla', 'max_film_strip_items', 0),
        array('Ilmoita kommenteista ylläpitäjälle sähköpostilla', 'email_comment_notification', 1), //cpg1.3.0
        array('Kuvien väli diaesityksessä millisekunteina (1 sekunti = 1000 millisekuntia)', 'slideshow_interval', 0), //cpg1.3.0

  'Kuvien ja thumbnailien asetukset', //cpg1.3.0
	array('Tarkkuus JPEG -tiedostoilla', 'jpeg_qual', 0),
	array('Thumbnailin maksimileveys tai -korkeus <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0), //cpg1.3.0
        array('Käytä mittaa ( leveys tai korkeus tai maksimimitta thumbnaileissa )<b>**</b>', 'thumb_use', 7),
	array('Luo normaalikokoiset kuvat','make_intermediate',1),
	array('Väliaikaisten kuvien maksimileveys tai -korkeus <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0), //cpg1.3.0
	array('Ladattavien kuvien maksimikoko (KB)', 'max_upl_size', 0), //cpg1.3.0
	array('Ladattavien kuvien maksimileveys tai -korkeus (pikseleinä)', 'max_upl_width_height', 0), //cpg1.3.0

  'Tiedostojen ja thumbnailien edistyneemmät asetukset', //cpg1.3.0
        array('Näytä yksityisen albumien ikoni kirjautumattomalle käyttäjälle','show_private',1), //cpg1.3.0
        array('Merkit, joita ei saa käyttää tiedostonimissä', 'forbiden_fname_char',0), //cpg1.3.0
      //array('Sallitut tiedostomuodot siirretyissä kuvissa', 'allowed_file_extensions',0), //cpg1.3.0
        array('Sallitut kuvatiedostot', 'allowed_img_types',0), //cpg1.3.0
        array('Sallitut videotiedostot', 'allowed_mov_types',0), //cpg1.3.0
        array('Sallitut äänitiedostot', 'allowed_snd_types',0), //cpg1.3.0
        array('Sallitut dokumenttitiedostot', 'allowed_doc_types',0), //cpg1.3.0
        array('Kuvien koon muuttamisessa käytetty systeemi','thumb_method',2), //cpg1.3.0
        array('Täydellinen polku ImageMagick -ohjelmistoon (esim. /usr/bin/X11/)', 'impath', 0), //cpg1.3.0
      //array('Sallitut kuvatyypit (käytössä vain ImageMagick-ohjelman kanssa)', 'allowed_img_types',0), //cpg1.3.0
        array('ImageMagickin komentorivin asetukset', 'im_options', 0), //cpg1.3.0
        array('Lue EXIF-tietoa JPEG-tiedostoista', 'read_exif_data', 1), //cpg1.3.0
        array('Lue IPTC-tietoa JPEG-tiedostoista', 'read_iptc_data', 1), //cpg1.3.0
        array('Albumien hakemisto <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0), //cpg1.3.0
        array('Kuvien hakemisto <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0), //cpg1.3.0
        array('Normaalikokoisten kuvien etuliite <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0), //cpg1.3.0
        array('Thumbnailien etuliite <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0), //cpg1.3.0
        array('Hakemistojen oletusoikeudet', 'default_dir_mode', 0), //cpg1.3.0
        array('Tiedostojen oletusoikeudet', 'default_file_mode', 0), //cpg1.3.0

  'Käyttäjäasetukset',
        array('Salli uusien käyttäjien rekisteröityä', 'allow_user_registration', 1),
	array('Rekisteröinti vaatii sähköpostivarmistuksen', 'reg_requires_valid_email', 1),
        array('Ilmoita ylläpitäjälle sähköpostilla uudesta rekisteröitymisestä', 'reg_notify_admin_email', 1), //cpg1.3.0
	array('Salli kahdelle käyttäjälle sama sähköpostiosoite', 'allow_duplicate_emails_addr', 1),
	array('Käyttäjät saavat yksityiset albumit (Huom! Jos kiellät yksityiset albumit, kaikista yksityisistä albumeista tulee julkisia)', 'allow_private_albums', 1), //cpg1.3.0
        array('Ilmoita ylläpidolle jos käyttäjän suorittama kuvan siirto odottaa hyväksyntää', 'upl_notify_admin_email', 1), //cpg1.3.0
        array('Salli kirjautuneiden käyttäjien tarkastella käyttäjälistaa', 'allow_memberlist', 1), //cpg1.3.0

  'Valinnaiset kentät kuvan näytössä (jätä tyhjäksi jos et halua käyttää))',
	array('Kentän 1 nimi', 'user_field1_name', 0),
	array('Kentän 2 nimi', 'user_field2_name', 0),
	array('Kentän 3 nimi', 'user_field3_name', 0),
	array('Kentän 4 nimi', 'user_field4_name', 0),

  'Evästeet',
        array('Evästeen nimi (kun käytät galleriaa foorumin yhteydessä, varmista että gallerian eväste on eri niminen kuin foorumin)', 'cookie_name', 0),
	array('Evästeen polku', 'cookie_path', 0),

  'Muut asetukset',
        array('Siirry debug-tilaan', 'debug_mode', 9), //cpg1.3.0
        array('Näytä ilmoitukset debug-tilassa', 'debug_notice', 1), //cpg1.3.0

  '<br /><div align="left"><a name="notice1"></a>(*) Näitä asetuksia ei tulisi muuttaa, jos kuvia tai muita tiedostoja on jo lisätty.<br />
  <a name="notice2"></a>(**) Kun näitä asetuksia muutetaan, ne alkavat vaikuttaa tiedostoihin vasta vaihtamisen jälkeen. Siksi on suositeltavaa ettei näitä asetuksia muutettaisi jos galleriassa on jo tiedostoja. Jo albumissa olevia tiedostoja voidaan kuitenkin muuttaa käyttämällä  &quot;<a href="util.php">käsittele kuvia</a>&quot; -toimintoa ylläpidon valikosta.</div><br />', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// Tiedosto db_ecard.php //cpg1.3.0                                          //
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
        'title' => 'Lähetetyt e-kortit', //cpg1.3.0
        'ecard_sender' => 'Lähettäjä', //cpg1.3.0
        'ecard_recipient' => 'Vastaanottaja', //cpg1.3.0
        'ecard_date' => 'Päiväys', //cpg1.3.0
        'ecard_display' => 'Näytä e-kortit', //cpg1.3.0
        'ecard_name' => 'Nimi', //cpg1.3.0
        'ecard_email' => 'Sähköposti', //cpg1.3.0
        'ecard_ip' => 'IP #', //cpg1.3.0
        'ecard_ascending' => 'nouseva järjestys', //cpg1.3.0
        'ecard_descending' => 'laskeva järjestys', //cpg1.3.0
        'ecard_sorted' => 'Järjestetty', //cpg1.3.0
        'ecard_by_date' => 'päivämäärän mukaan', //cpg1.3.0
        'ecard_by_sender_name' => 'lähettäjän nimen mukaan', //cpg1.3.0
        'ecard_by_sender_email' => 'lähettäjän sähköpostin mukaan', //cpg1.3.0
        'ecard_by_sender_ip' => 'lähettäjän IP:n mukaan', //cpg1.3.0
        'ecard_by_recipient_name' => 'vastaanottajan nimen mukaan', //cpg1.3.0
        'ecard_by_recipient_email' => 'vastaanottajan sähköpostin mukaan', //cpg1.3.0
        'ecard_number' => 'Näyttää kohteet %s - %s. Yhteensä kohteita %s', //cpg1.3.0
        'ecard_goto_page' => 'Siirry sivulle', //cpg1.3.0
        'ecard_records_per_page' => 'Kohteita sivulla', //cpg1.3.0
        'check_all' => 'Valitse kaikki', //cpg1.3.0
        'uncheck_all' => 'Poista valinta kaikista', //cpg1.3.0
        'ecards_delete_selected' => 'Poista valitut', //cpg1.3.0
        'ecards_delete_confirm' => 'Haluatko varmasti poistaa kaikki? Klikkaa ruksi valintaruutuun!', //cpg1.3.0
        'ecards_delete_sure' => 'Olen varma', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// Tiedosto db_input.php                                                     //
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
        'empty_name_or_com' => 'Nimi ja kommentti ovat pakolliset',
        'com_added' => 'Kommentti lisätty',
        'alb_need_title' => 'Albumille tarvitsee lisätä otsikko!',
        'no_udp_needed' => 'Päivitystä ei tarvita',
        'alb_updated' => 'Albumi päivitetty',
        'unknown_album' => 'Valittua albumia ei ole tai sinulla ei ole oikeutta lisätä siihen kuvaa',
        'no_pic_uploaded' => 'Tiedostoa ei lisätty!<br /><br />Jos olet valinnut tiedoston lisättäväksi, varmista että serveri sallii tiedostojen lisäämisen...', //cpg1.3.0
        'err_mkdir' => 'Tiedoston %s luominen epäonnistui!',
        'dest_dir_ro' => 'Skripti ei pysty kirjoittamaan kohdekansioon %s!',
        'err_move' => 'Tiedoston %s siirtäminen kansioon %s on mahdotonta!',
        'err_fsize_too_large' => 'Tiedoston koko on liian suuri (suurin sallittu koko on is %s x %s)', //cpg1.3.0
        'err_imgsize_too_large' => 'Tiedoston koko on liian suuri (suurin sallittu on %s KB) !',
        'err_invalid_img' => 'Siirtämäsi tiedosto ei ole pätevä kuvatiedosto!',
        'allowed_img_types' => 'Voi siirtää vain %s kuvaa.',
        'err_insert_pic' => 'Tiedostoa \'%s\' ei voida laittaa albumiin', //cpg1.3.0
        'upload_success' => 'Tiedoston siirto onnistui<br /><br />Se tulee näkyviin ylläpidon hyväksynnän jälkeen.', //cpg1.3.0
        'notify_admin_email_subject' => '%s - Ilmoitus kuvansiirrosta', //cpg1.3.0
        'notify_admin_email_body' => '%s on siirtänyt kuvan, joka pitää hyväksyä. Siirry osoitteeseen %s', //cpg1.3.0
        'info' => 'Tiedot',
        'com_added' => 'Kommentti lisätty',
        'alb_updated' => 'Albumi lisätty',
        'err_comment_empty' => 'Kommenttirivi on tyhjä!',
        'err_invalid_fext' => 'Vain seuraavat tiedostomuodot ovat hyväksyttyjä: <br /><br />%s.',
        'no_flood' => 'Olet lisännyt viimeisen kommentin tähän kuvaan.<br /><br />Muokkaa edellistä kommenttia jos haluat lisätä jotain', //cpg1.3.0
        'redirect_msg' => 'Sinut uudelleenohjataan.<br /><br /><br />Paina \'Jatka\' jos sivu ei päivity itsestään',
        'upl_success' => 'Tiedosto on lisätty onnistuneesti', //cpg1.3.0
        'email_comment_subject' => 'Kommentti lisätty Coppermine-valokuvagalleriaan', //cpg1.3.0
        'email_comment_body' => 'Galleriaasi on lisätty kommentti. Lue se osoitteessa', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// Tiedosto delete.php                                                       //
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
        'caption' => 'Caption',
        'fs_pic' => 'täysikokoinen kuva',
        'del_success' => 'poistettu onnistuneesti',
        'ns_pic' => 'normaalikokoinen kuva',
        'err_del' => 'ei voida poistaa',
        'thumb_pic' => 'thumbnail',
        'comment' => 'kommentti',
        'im_in_alb' => 'kuva albumissa',
        'alb_del_success' => 'Albumi \'%s\' poistettu',
        'alb_mgr' => 'Albumihallinta',
        'err_invalid_data' => 'Puutteellista tietoa saatu kohteesta \'%s\'',
        'create_alb' => 'Luo albumia \'%s\'',
        'update_alb' => 'Pävittää albumia \'%s\'. Ostikko  \'%s\' ja tunnus \'%s\'',
        'del_pic' => 'Poista tiedosto', //cpg1.3.0
        'del_alb' => 'Poista albumi',
        'del_user' => 'Poista käyttäjä',
        'err_unknown_user' => 'Valittua käyttäjää ei ole olemassa!',
        'comment_deleted' => 'Kommentti poistettu onnistuneesti',
);

// ------------------------------------------------------------------------- //
// Tiedosto displayecard.php                                                 //
// ------------------------------------------------------------------------- //

// tyhjä

// ------------------------------------------------------------------------- //
// Tiedosto displayimage.php                                                 //
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
        'confirm_del' => 'Oletko varma että halaut poistaa tämän tiedoston? \\nKommentit tulevat myös poistumaan', //js-alert //cpg1.3.0
        'del_pic' => 'Poista tiedosto', //cpg1.3.0
        'size' => '%s x %s pikseliä',
        'views' => '%s kertaa',
        'slideshow' => 'Diaesitys',
        'stop_slideshow' => 'Pysäytä diaesitys',
        'view_fs' => 'Klikkaa nähdäksesi kuvan oikeassa koossa',
        'edit_pic' => 'Muuta tietoja', //cpg1.3.0
        'crop_pic' => 'Muokkaa ja käännä', //cpg1.3.0
);

$lang_picinfo = array(
        'title' =>'Tiedoston tiedot', //cpg1.3.0
        'Filename' => 'Tiedoston nimi',
        'Album name' => 'Albumin nimi',
        'Rating' => 'Arvostelu (%s ääntä)',
        'Keywords' => 'Hakusanat',
        'File Size' => 'Koko',
        'Dimensions' => 'Mitat',
        'Displayed' => 'Katsottu',
        'Camera' => 'Kamera',
        'Date taken' => 'Kuvan päiväys',
  	'Aperture' => 'Aukko',
  	'Exposure time' => 'Valotusaika',
  	'Focal length' => 'Polttoväli',
        'Comment' => 'Kommentti',
        'addFav'=>'Lisää suosikkeihin', //cpg1.3.0
        'addFavPhrase'=>'Suosikit', //cpg1.3.0
        'remFav'=>'Poista suosikeista', //cpg1.3.0
        'iptcTitle'=>'IPTC Otsikko', //cpg1.3.0
        'iptcCopyright'=>'IPTC copyright', //cpg1.3.0
        'iptcKeywords'=>'IPTC hakusanat', //cpg1.3.0
        'iptcCategory'=>'IPTC kategoria', //cpg1.3.0
        'iptcSubCategories'=>'IPTC Alakategoriat', //cpg1.3.0
);

$lang_display_comments = array(
        'OK' => 'OK',
        'edit_title' => 'Muokkaa kommenttia',
        'confirm_delete' => 'Haluatko varmasti poistaa kommentin?', //js-alert
        'add_your_comment' => 'Lisää kommentti',
        'name' => 'Nimi',
        'comment' => 'Kommentti',
	'your_name' => 'Anonyymi',
);

$lang_fullsize_popup = array(
        'click_to_close' => 'Klikkaa kuvaa sulkeaksesi tämän ikkunan',
);

}

// ------------------------------------------------------------------------- //
// Tiedosto ecard.php                                                        //
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php = array(
        'title' => 'Lähetä e-kortti',
        'invalid_email' => '<b>Varoitus</b> : Kelpaamaton sähköpostiosoite!',
        'ecard_title' => '%s on lähettänyt sinulle e-kortin',
        'error_not_image' => 'Vain kuvia voi lähettää e-korttina', //cpg1.3.0
        'view_ecard' => 'Jos e-kortti ei näy oikein, klikkaa tätä linkkiä',
        'view_more_pics' => 'Klikkaa tätä linkkiä nähdäksesi lisää kuvia!',
        'send_success' => 'E-kortin lähetys onnistui',
        'send_failed' => 'E-korttiasi ei jostain syystä voitu lähettää oikein...',
        'from' => 'Lähettäjä',
        'your_name' => 'Nimi',
        'your_email' => 'Sähköpostiosoite',
        'to' => 'Vastaanottaja',
        'rcpt_name' => 'Nimi',
        'rcpt_email' => 'Sähköpostiosoite',
        'greetings' => 'Tervehdys',
        'message' => 'Viesti',
);

// ------------------------------------------------------------------------- //
// Tiedosto editpics.php                                                     //
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
        'pic_info' => 'Tiedot', //cpg1.3.0
        'album' => 'Albumi',
        'title' => 'Otsikko',
        'desc' => 'Kuvaus',
        'keywords' => 'Hakusanat',
        'pic_info_str' => '%s &times; %s - %s KB - katsottu %s kertaa - %s ääntä',
        'approve' => 'Hyväksy tiedosto', //cpg1.3.0
        'postpone_app' => 'Siirrä hyväksyminen myöhemmäksi',
        'del_pic' => 'Poista tiedosto', //cpg1.3.0
        'read_exif' => 'Lue EXIF uudelleen', //cpg1.3.0
        'reset_view_count' => 'Nollaa katsojalaskuri',
        'reset_votes' => 'Nollaa äänestys',
        'del_comm' => 'Poista kommentit',
        'upl_approval' => 'Upload approval',
        'edit_pics' => 'Muokkaa tiedostoja', //cpg1.3.0
        'see_next' => 'Katsele seuraavia tiedostoja', //cpg1.3.0
        'see_prev' => 'Ketsele edellisiä tiedostoja', //cpg1.3.0
        'n_pic' => '%s tiedostoa', //cpg1.3.0
        'n_of_pic_to_disp' => 'Näytettäviä tiedostoja', //cpg1.3.0
        'apply' => 'Hyväksy muutokset', //cpg1.3.0
        'crop_title' => 'Coppermine kuvaeditori', //cpg1.3.0
        'preview' => 'Esikatselu', //cpg1.3.0
        'save' => 'Tallenna kuva', //cpg1.3.0
        'save_thumb' =>'Tallenna thumbnailina', //cpg1.3.0
        'sel_on_img' =>'Valinnan on oltava kokonaan kuvassa!', //js-alert //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// Tiedosto faq.php //cpg1.3.0                                               //
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
        'faq' => 'Usein kysytyt kysymykset', //cpg1.3.0
        'toc' => 'Sisällysluettelo', //cpg1.3.0
        'question' => 'Kysymys: ', //cpg1.3.0
        'answer' => 'Vastaus: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'Yleinen FAQ', //cpg1.3.0
        array('Miksi minun pitää rekisteröityä?', 'Ylläpito ei välttämättä vaadi rekisteröitymistä. Rekisteröityminen antaa jäsenelle lisää mahdollisuuksia käyttää galleriaa, kuten esimerkiksi kuvien siirto, omien albumien luonti, suosikkilista, kuvien arvostelu ja kommenttien lisääminen jne.', 'allow_user_registration', '0'), //cpg1.3.0
        array('Miten voin rekisteröityä?', 'Paina linkkiä &quot;Rekisteröidy&quot; ja täytä vaadittavat kentät (ja valinnaiset jos haluat).<br />Ylläpito voi vaatia sähköpostivarmistuksen rekisteröitymisen yhteydessä. Tällöin saat rekisteröitymisen jälkeen gallerian lähettämän sähköpostiviestin antamaasi sähköpostiosoitteeseen. Viesti antaa ohjeet tunnuksen aktivointiin. Tunnus pitää aktivoida ennen sisäänkirjautumista.', 'allow_user_registration', '1'), //cpg1.3.0
        array('Miten kirjaudun sisään?', 'Paina linkkiä &quot;Kirjaudu&quot; ja täytä käyttäjänimesi ja salasanasi niille varattuihin kenttiin. &quot;Muista minut&quot; -kohtaan laittamalla rastin galleria muistaa sinut kun seuraavan kerran tulet sivulle, eikä sinun tarvitse enää kirjautua sisään.<br /><b>HUOM: Evästeiden pitää olla päällä ja sivun asettamia evästeitä ei saa poistaa mikäli haluat käyttää &quot;Muista minut&quot; -toimintoa.</b>', 'offline', 0), //cpg1.3.0
        array('Miksi en voi kirjautua sisään?', 'Oletko rekisteröitynyt ja klikannut linkkiä joka lähetettiin sähköpostiisi?. Linkki aktivoi tilisi. Jos ongelmia on edelleen, ota yhteys gallerian ylläpitoon.', 'offline', 0), //cpg1.3.0
        array('Unohdin salasanani. Mitä teen?', 'Jos sivuilla on käytössä &quot;Unohdin salasanani&quot; -linkki, käytä sitä. Muussa tapauksessa ota yhteyttä gallerian ylläpitoon.', 'offline', 0), //cpg1.3.0
      //array('Mitä teen kun sähköpostiosoitteeni on vaihtunut?', 'Yksinkertaisesti vain kirjaudu sisään ja vaihda sähköpostiosoitteesi &quot;Profile&quot;', 'offline', 0), //cpg1.3.0
        array('Miten tallennan kuvan &quot;Omat suosikkini&quot; -kansioon?', 'Klikkaa kuvaa ja valitse linkki &quot;kuvan tiedot&quot; (<img src="images/info.gif" width="16" height="16" border="0" alt="Picture information" />); siirry sivun alalaitaan ja klikkaa linkkiä &quot;Lisää suosikkeihin&quot;.<br />Ylläpito on voinut laittaa oletusasetuksesi kuvan tietojen näkymisen &quot;kuvan tiedot&quot; -kohdassa.<br />HUOM: Evästeiden pitää olla päällä ja sivun asettamia evästeitä ei saa poistaa.', 'offline', 0), //cpg1.3.0
        array('Miten voin äänestää kuvaa?', 'Klikkaa kuvan thumbnailia, mene sivun alalaitaan ja valitse haluamasi äänestysvaihtoehto.', 'offline', 0), //cpg1.3.0
        array('Miten voin kommentoida kuvaa?', 'Klikkaa kuvan thumbnailia, mene sivun alalaitaan ja kirjoita kommenttisi.', 'offline', 0), //cpg1.3.0
        array('Miten siirrän kuvan galleriaan?', 'Mene &quot;Lisää kuva&quot; -osioon ja valitse albumi johon haluat siirtää kuvan, valitse &quot;Selaa&quot; ja etsi kuvat jotka haluat siirtää. Valitse sitten &quot;avaa&quot; (lisää otsikko ja kuvaus jos haluat) ja klikkaa &quot;Lähetä&quot;.', 'allow_private_albums', 0), //cpg1.3.0
        array('Minne voin siirtää kuvani?', 'Voit siirtää kuvasi haluamaasi albumiin &quot;Omassa galleriassa&quot;. Ylläpito on voinut myös sallia kuvien siirtämisen myös albumeihin jotka ovat Yleisesssä galleriassa.', 'allow_private_albums', 0), //cpg1.3.0
        array('Kuinka suuria tiedostoja voin siirtää ja mitä tiedostomuotoja?', 'Koko ja tiedostomuodot (jpg, png, jne.) riippuvat ylläpitäjästä.', 'offline', 0), //cpg1.3.0
        array('Mikä on &quot;Oma galleria&quot;?', '&quot;Oma galleria&quot; on käyttäjän henkilökohtainen galleria jonne käyttäjä voi siirtää kuvia ja hallita.', 'allow_private_albums', 0), //cpg1.3.0
        array('Miten luon, nimeän uudelleen tai poistan albuminen &quot;Omassa galleriassa&quot;?', 'Sinun pitää olla &quot;Ylläpitotilassa&quot;.<br />Mene kohtaan &quot;Luo / Muokkaa albumeita&quot; ja klikkaa &quot;Uusi&quot;. Albumin oletuksena nimi on &quot;Uusi albumi&quot;, jonka voit vaihtaa haluamaksesi nimeksi.<br />Voit myös nimetä uudelleen minkä tahansa albumin omassa galleriassasi.<br />Klikkaa &quot;Hyväksy muutokset&quot; jolloin tekemäsi muutokset tulevat voimaan.', 'allow_private_albums', 0), //cpg1.3.0
        array('Miten voin muokata käyttäjien oikeuksia omassa galleriassa?', 'Sinun pitää olla &quot;Ylläpitotilassa&quot;.<br />Mene kohtaan &quot;Muokkaa omia albumeita&quot;.  &quot;Update Album&quot; bar, select the album that you want to modify.<br />Here, you can change the name, description, thumbnail picture, restrict viewing and comment/rating permissions.<br />Click &quot;Update Album&quot;.', 'allow_private_albums', 0), //cpg1.3.0
        array('Miten voin katsella muidan käyttäjien omia gallerioita?', 'Mene &quot;Albumilistaan&quot; ja valitse &quot;Käyttäjien galleriat&quot;.', 'allow_private_albums', 0), //cpg1.3.0
        array('Mitä ovat evästeet?', 'Evästeet ovat pelkkää tekstiä sisältäviä tiedostoja, jotka lähetetään internetsivulta ja siirretään käyttäjän omalle koneelle.<br />Usein evästeet sallivat käyttäjän poistumisen ja palaamisen internetsivustolle ilman uutta kirjautumista.', 'offline', 0), //cpg1.3.0
        array('Mistä voin saada Coppermine-ohjelman omalle sivulleni?', 'Coppermine on ilmainen galleriaohjelma ja se on julkaistu GNU GPL:n alaisena. Se on täynnä erilaisia ominaisuuksiaja se sopii monille erilaisille käyttöjärjestelmille. Vieraile ohjelman sivuilla <a href="http://coppermine.sf.net/">Coppermine Home Page</a> saadaksesi lisää tietoa ja ladataksesi ohjelman.', 'offline', 0), //cpg1.3.0

  'Liikkuminen galleriassa', //cpg1.3.0
        array('Mikä on &quot;Albumilista&quot;?', 'Näyttää koko sen kategorian, jossa olet sillä hetkellä sisältäen linkin jokaiseen albumiin. Jos et ole missään kategoriassa, se näyttää koko gallerian ja linkin jokaiseen kategoriaan. Thumbnailit voivat olla linkki kategoriaan.', 'offline', 0), //cpg1.3.0
        array('Mikä on &quot;Oma galleria&quot;?', 'Täällä käyttäjä saa luoda oman gallerian sekä lisätä, poistaa tai muokata albumeita ja lisätä kuvia niihin.', 'allow_private_albums', 0), //cpg1.3.0
        array('Mitkä ovat &quot;Ylläpitotilan&quot; ja &quot;Käyttäjätilan&quot; erot?', 'Ylläpitotilassa voit muokata omaa galleriaasi (myös muita albumeita, riippuen ylläpidon asetuksista).', 'allow_private_albums', 0), //cpg1.3.0
        array('Mitä tarkoittaa &quot;Lisää kuva&quot;?', 'Voit lisätä omia tiedostoja (koko ja tiedostomuodot ovat ylläpidon päätettävissä) sellaiseen galleriaan johon sivun ylläpitäjä on antanut luvan.', 'allow_private_albums', 0), //cpg1.3.0
        array('Mitä näen linkin &quot;Viimeksi lisätty&quot; takaa?', 'Täältä näet kuvat, jotka on viimeksi siirretty galleriaan.', 'offline', 0), //cpg1.3.0
        array('Mikä on &quot;Viimeiset kommentit&quot;?', 'Täältä löydät viimeksi lisätyt kommentit ja tiedostot, joita on kommentoitu.', 'offline', 0), //cpg1.3.0
        array('Mikä on &quot;Katsotuimmat&quot;?', 'Näyttää eniten huomiota saaneet kuvat, eli kuvat joita on katsottu useimmin.', 'offline', 0), //cpg1.3.0
        array('Mikä on &quot;Suosituimmat&quot;?', 'Täällä näkyvät ne tiedostot, jotka ovat saaneet parhaat arvostelut. Tuloksissa näkyy äänten keskiarvo (esim: viisi käyttäjää antoivat kukin <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: tiedoston keskiarvo olisi silloin <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ; Viisi käyttäjää antoi kuvalle pisteet yhdestä viiteen (1,2,3,4,5) jolloin keskiarvo olisi <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />Arvosteluasteikko on <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (paras) -- <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (huonoin).', 'offline', 0), //cpg1.3.0
  	array('Mitä tarkoittaa &quot;Suosikkini&quot;?', 'Tämä toiminto antaa käyttäjän tallettaa omat suosikkikuvansa evästeiden, jotka lähetetään käyttäjän omalle koneelle, avulla.', 'offline', 0), //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// Tiedosto forgot_passwd.php //cpg1.3.0                                     //
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
        'forgot_passwd' => 'Salasanan muistuttaja', //cpg1.3.0
        'err_already_logged_in' => 'Olet jo kirjautunut sisään!', //cpg1.3.0
        'enter_username_email' => 'Kirjoita käyttäjänimesi tai salasanasi', //cpg1.3.0
        'submit' => 'Lähetä', //cpg1.3.0
        'failed_sending_email' => 'Salasananmuistuttajan sähköpostia ei voida lähettää!', //cpg1.3.0
        'email_sent' => 'Sähköposti, jossa on käyttäjätunnuksesi ja salasanasi on lähetetty %s', //cpg1.3.0
        'err_unk_user' => 'Valittua käyttäjää ei ole olemassa!', //cpg1.3.0
        'passwd_reminder_subject' => '%s - Salasananmuistuttaja', //cpg1.3.0
        'passwd_reminder_body' => 'Olet pyytänyt rekisteröitymistietoja:
Käyttäjänimi: %s
Salasana: %s
Klikkaa %s kirjautuaksesi sisään.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// Tiedosto groupmgr.php                                                     //
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  	'group_name' => 'Käyttäjäryhmä',
  	'disk_quota' => 'Levytilaa',
  	'can_rate' => 'Voi äänestää', //cpg1.3.0
  	'can_send_ecards' => 'Voi lähettää e-kortteja',
  	'can_post_com' => 'Voi lisätä kommentteja',
  	'can_upload' => 'Voi siirtää tiedostoja', //cpg1.3.0
  	'can_have_gallery' => 'Saa oman gallerian',
  	'apply' => 'Hyväksy muutokset',
  	'create_new_group' => 'Luo uusi ryhmä',
  	'del_groups' => 'Poista valittu ryhmä',
  	'confirm_del' => 'Kun poistat käyttäjäryhmän, kaikki sen rymäh edustajat siirtyvät ryhmän \'Rekisteröitynyt\' jäseniksi.\n\nHaluatko varmasti jatkaa?', //js-alert //cpg1.3.0
  	'title' => 'Muokkaa käyttäjäryhmiä',
  	'approval_1' => 'Yleisen siirron hyväksyntä (1)',
  	'approval_2' => 'Yksityisen siirron hyväksyntä (2)',
  	'upload_form_config' => 'Tiedoston siirron tyyppi', //cpg1.3.0
  	'upload_form_config_values' => array( 'Tiedot yksitellen', 'Monta tiedostoa kerralla', 'Vain URI siirtoja', 'Vain ZIP siirtoja', 'Tiedosto-URI', 'Tiedosto-ZIP', 'URI-ZIP', 'Tiedosto-URI-ZIP'), //cpg1.3.0
  	'custom_user_upload'=>'Käyttäjä voi valita siirrettäville tiedostoille tarkoitettujen kenttien määrän?', //cpg1.3.0
  	'num_file_upload'=>'Suurin / tarkka määrä siirrettäville tiedostoille tarkoitettuja kenttiä', //cpg1.3.0
  	'num_URI_upload'=>'Suurin / tarkka määrä URI-siirroille tarkoitettuja kenttiä', //cpg1.3.0
  	'note1' => '<b>(1)</b> Kuvan lisäys julkiseen albumiin vaatii ylläpidon hyväksynnän',
  	'note2' => '<b>(2)</b> Kuvan lisäys yksityiseen albumiin vaatii ylläpidon hyväksynnän',
  	'notes' => 'Huom',
);

// ------------------------------------------------------------------------- //
// Tiedosto index.php                                                        //
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  	'welcome' => 'Tervetuloa!',
);

$lang_album_admin_menu = array(
  	'confirm_delete' => 'Haluatko varmasti poistaa tämän albumin? \\nKaikki tiedostot ja kommentit poistuvat albumin mukan.', //js-alert //cpg1.3.0
  	'delete' => 'Poista',
  	'modify' => 'Asetukset',
  	'edit_pics' => 'Muokkaa kuvia', //cpg1.3.0
);

$lang_list_categories = array(
  	'home' => 'Koti',
  	'stat1' => '<b>[albums]</b> albumia jotka sisältävät <b>[pictures]</b> kuvaa. <b>[cat]</b> kategoriaa joissa <b>[comments]</b> kommenttia. Katseltu <b>[views]</b> kertaa.', //cpg1.3.0
  	'stat2' => '<b>[albums]</b> albumia jotka sisältävät <b>[pictures]</b> kuvaa. Katseltu <b>[views]</b> kertaa.', //cpg1.3.0
  	'xx_s_gallery' => '%s:n Galleria',
  	'stat3' => '<b>[albums]</b> albumia jotka sisältävät <b>[pictures]</b> kuvaa. <b>[comments]</b> kommenttia ja kuvia katseltu <b>[views]</b> kertaa.', //cpg1.3.0
);

$lang_list_users = array(
  	'user_list' => 'Käyttäjälista',
  	'no_user_gal' => 'Ei käyttäjien gallerioita',
  	'n_albums' => '%s albumia',
  	'n_pics' => '%s tiedostoa', //cpg1.3.0
);

$lang_list_albums = array(
  	'n_pictures' => '%s tiedostoa', //cpg1.3.0
  	'last_added' => ', viimeisin lisätty %s',
);

}

// ------------------------------------------------------------------------- //
// Tiedosto login.php                                                        //
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  	'login' => 'Kirjaudu',
  	'enter_login_pswd' => 'Kirjoita käyttäjänimesi ja salasanasi kirjautuaksesi sisään.',
  	'username' => 'Käyttjänimi',
  	'password' => 'Salasana',
  	'remember_me' => 'Muista minut',
  	'welcome' => 'Tervetuloa %s',
  	'err_login' => '*** Kirjautuminen epäonnistui. Yritä uudelleen ***',
  	'err_already_logged_in' => 'Olet jo kirjautunut sisään!',
        'forgot_password_link' => 'Unohdin salasanani', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// Tiedosto logout.php                                                       //
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  	'logout' => 'Kirjaudu ulos',
  	'bye' => 'Näkemiin %s',
  	'err_not_loged_in' => 'Et ole kirjautunut sisään!',
);

// ------------------------------------------------------------------------- //
// Tiedosto phpinfo.php //cpg1.3.0                                           //
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  	'php_info' => 'PHP info', //cpg1.3.0
	'explanation' => 'Tämän teksin on luonut PHP-funktio <a href="http://www.php.net/phpinfo">phpinfo()</a>. Coppermine näyttää tekstin (muotoilee tekstin).', //cpg1.3.0
  	'no_link' => 'Phpinfon näyttäminen muille saattaa olla turvallisuusriski. Tästä syystä tämä sivu näkyy ainoastaan silloin kun on kirjautunut sisään ylläpitäjänä. Sivua ei voi linkittää ulkopuolisille, sillä heiltä on pääsy kielletty.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// Tiedosto modifyalb.php                                                    //
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
        'upd_alb_n' => 'Päivitä albumi %s',
        'general_settings' => 'Yleiset asetukset',
        'alb_title' => 'Albumin otsikko',
        'alb_cat' => 'Albumin kategoria',
        'alb_desc' => 'Albumin kuvaus',
        'alb_thumb' => 'Albumin thumbnail',
        'alb_perm' => 'Käyttäjien oikeudet tähän albumiin',
        'can_view' => 'Albumia voi katsella',
        'can_upload' => 'Vierailijat voivat siirtää tiedostoja albumiin',
        'can_post_comments' => 'Vierailijat voivat lisätä kommentteja',
        'can_rate' => 'Vierailijat voivat äänestää kuvia',
        'user_gal' => 'Käyttäjän galleria',
        'no_cat' => '* Ei kategoriaa *',
        'alb_empty' => 'Albumi on tyhjä',
        'last_uploaded' => 'Viimeksi lisätty',
        'public_alb' => 'Kaikki (julkinen)',
        'me_only' => 'Vain minä',
        'owner_only' => 'Vain albumin omistaja (%s)',
        'groupp_only' => 'Ryhmään \'%s\' kuuluvat',
        'err_no_alb_to_modify' => 'Tietokannassa ei ole yhtään albumia jota voisit muokata.',
        'update' => 'Päivitä albumi', //cpg1.3.0
        'notice1' => '(*) riippuvat %sgroups%s -asetuksista', //cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- //
// Tiedosto ratepic.php                                                      //
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  	'already_rated' => 'Olet jo äänestänyt tätä kuvaa.', //cpg1.3.0
  	'rate_ok' => 'Äänesi on hyväksytty.',
  	'forbidden' => 'Et voi äänestää omia tiedostojasi.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// Tiedosto register.php & profile.php                                       //
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Sivuston {SITE_NAME} ylläpito yrittää poistaa ja muokata kaikkea haitallista materiaalia niin pian kuin mahdollista. On kuitenkin mahdotonta ehtiä aina ensimmäisenä paikalle tai nähdä kaikkia tietoja, joita sivulle ilmestyy. Siksi pitää muistaa, että haitallinen tieto, joka ei ole ylläpidon itsensä lähettämä, ei kuvasta sivuston ylläpitoa vaan yksinomaan tiedon lähettäjää. Kommentti leimaa siis kirjoittajansa, ei sivuston ylläpitoa.
<br /><br />
Hyväksyt, että et lähetä sivulle hyökkävää, säädytöntä, mautonta, herjaavaa, vastenmielista, uhkaava, seksuaalista, rasistista tai mitään muutakaan lainvastaista, loukkaavaa tai hyvien tapojen vastaista materiaalia. Suostut myös siihen, että sivuston {SITE_NAME} ylläpito ja valvojat saattavat poistaa tai muokata lähettämääsi materiaalia milloin tahansa ilmoittamatta. Käyttäjänä hyväksyt myös sen, että tietosi tallennetaan sivuston tietokantaan. Vaikka käyttäjätietoja ei tietoisesti luovuteta kolmansille osapuolille ilman käyttäjän suostumusta, ylläpitoa ei pidetä vastuullisena tietomurron kautta saatujen tietojen väärinkäyttöön.
<br /><br />
Tämä galleria käyttää evästeitä tallentaakseen tietoja käyttäjän koneelle. Evästeitä käytetään vain gallerian selaamisen helpottamiseen. Luovuttamaasi sähköpostiosoitetta käytetään ainoastaan rekisteröitymisen vahvistamiseen, eikä sitä luovuteta kolmansien osapuolten käyttöön.
<br /><br />
Klikkaamalla alla olevaa linkkiä sitoudut noudattamaan näitä käyttöehtoja.
EOT;

$lang_register_php = array(
  	'page_title' => 'Rekisteröityminen',
  	'term_cond' => 'Käyttöehdot',
  	'i_agree' => 'Hyväksyn',
  	'submit' => 'Submit registration',
  	'err_user_exists' => 'Valitsemasi käyttäjätunnus on jo käytössä. Valitse uusi käyttäjätunnus.',
  	'err_password_mismatch' => 'Kirjoittamasi kaksi salasanaa eivät ole samat. Kirjoita ne uudelleen.',
  	'err_uname_short' => 'Käyttäjänimen on oltava vähintään kaksi merkkiä pitkä.',
  	'err_password_short' => 'Salasanan on oltava vähintään kaksi merkkiä pitkä.',
  	'err_uname_pass_diff' => 'Käyttäjätunnus ja salasana eivät saa olla samat.',
  	'err_invalid_email' => 'Sähköpostiosoite on väärä.',
  	'err_duplicate_email' => 'Sama sähköpostiosoite on toisen käyttäjän käytössä.',
  	'enter_info' => 'Kaikki pakolliset kohdat on täytettävä',
  	'required_info' => 'Pakolliset tiedot',
  	'optional_info' => 'Valinnaiset tiedot',
  	'username' => 'Käyttäjätunnus',
  	'password' => 'Salasana',
  	'password_again' => 'Salasana uudelleen',
  	'email' => 'Sähköpostiosoite',
  	'location' => 'Asuinpaikka',
  	'interests' => 'Harrastukset',
  	'website' => 'Kotisivu',
  	'occupation' => 'Ammatti',
  	'error' => 'Virhe',
  	'confirm_email_subject' => '%s - Rekisteröitymisen varmistus',
  	'information' => 'Tieto',
  	'failed_sending_email' => 'Rekisteöritymisen varmistavaa sähköpostia ei voida lähettää!',
  	'thank_you' => 'Kiitos rekisteröitymisestä.<br /><br />Käyttäjätilin aktivoimista koskeva sähköposti on lähetetty antamaasi sähköpostiosoitteeseen.',
  	'acct_created' => 'Käyttäjätilisi on luotu ja voit nyt kirjautua sisään käyttämällä käyttäjätunnustasi ja salasanaasi.',
  	'acct_active' => 'Käyttäjätunnuksesi on aktivoitu ja voit nyt kirjautua sisään käyttämällä käyttäjätunnustasi ja salasanaasi.',
  	'acct_already_act' => 'Käyttäjätunnuksesi on jo aktivoitu!',
  	'acct_act_failed' => 'Tunnusta ei voida aktivoida!',
  	'err_unk_user' => 'Valittua käyttäjää ei ole olemassa!',
  	'x_s_profile' => '%s: profiili',
  	'group' => 'Käyttäjäryhmä',
  	'reg_date' => 'Liittynyt',
  	'disk_usage' => 'Tilankäyttö',
  	'change_pass' => 'Vaihda salasana',
  	'current_pass' => 'Nykyinen salasana',
  	'new_pass' => 'Uusi salasana',
  	'new_pass_again' => 'Uusi salasana uudelleen',
  	'err_curr_pass' => 'Nykyinen salasana on väärä',
  	'apply_modif' => 'Hyväksy muutokset',
  	'change_pass' => 'Vaihda salasanaa',
  	'update_success' => 'Käyttäjätietosi on päivitetty',
  	'pass_chg_success' => 'Salasanasi on vaihdettu',
  	'pass_chg_error' => 'Salasanaasi ei vaihdettu',
  	'notify_admin_email_subject' => '%s - Rekisteröitymisilmoitus', //cpg1.3.0
  	'notify_admin_email_body' => 'Uusi käyttäjä, %s, on rekisteröitynyt galleriaasi.', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
Kiitos kun rekisteröidyit - {SITE_NAME}

Käyttäjänimesi on : "{USER_NAME}"
Salasanasi on : "{PASSWORD}"

Aktivoidaksesi tunnuksen sinun on klikattava alla olevaa linkkiä
tai kopioita se selaimesi osoiteriville.

{ACT_LINK}

Toivottaa,

{SITE_NAME} : Ylläpito

EOT;

}

// ------------------------------------------------------------------------- //
// Tiedosto reviewcom.php                                                    //
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  	'title' => 'Katsele kommentteja',
  	'no_comment' => 'Ei yhtään kommenttia',
  	'n_comm_del' => '%s kommenttia poistettu',
  	'n_comm_disp' => 'Näytettävien kommenttien määrä',
  	'see_prev' => 'Edellinen',
  	'see_next' => 'Seuraava',
  	'del_comm' => 'Poista valitut kommentit',
);


// ------------------------------------------------------------------------- //
// Tiedosto search.php - OK                                                  //
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
  	0 => 'Etsi tiedostot',
);

// ------------------------------------------------------------------------- //
// Tiedosto searchnew.php                                                    //
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  	'page_title' => 'Etsi uusia tiedostoja', //cpg1.3.0
  	'select_dir' => 'Valitse kansio',
  	'select_dir_msg' => 'Tämän toiminnon avulla voit lisätä tiedostoja, jotka olet jo siirtänyt FTP:llä.<br /><br />Valitse kansio, johon olet siirtänyt tiedostot.', //cpg1.3.0
  	'no_pic_to_add' => 'Ei lisättäviä tiedostoja', //cpg1.3.0
  	'need_one_album' => 'Tämä toiminto vaatii vähintään yhden albumin',
  	'warning' => 'Varoitus',
  	'change_perm' => 'Skripti ei voi kirjoittaa valitsemaasi kansioon. Vaihda kansion oikeudet muotoon 755 tai 777 ennen kuin yrität lisätä tiedostoja!', //cpg1.3.0
  	'target_album' => '<b>Siirrä &quot;</b>%s<b>&quot; tiedostot albumiin </b>%s', //cpg1.3.0
  	'folder' => 'Kansio',
  	'image' => 'tiedosto',
  	'album' => 'Albumi',
  	'result' => 'Tulos',
  	'dir_ro' => 'Ei voida kirjoittaa. ',
  	'dir_cant_read' => 'Ei voida lukea. ',
  	'insert' => 'Lisää uusia tiedostoja galleriaan', //cpg1.3.0
  	'list_new_pic' => 'Lista uusista tiedostoista', //cpg1.3.0
  	'insert_selected' => 'Lisää valitut tiedostot', //cpg1.3.0
  	'no_pic_found' => 'Uusia tiedostoja ei löytynyt', //cpg1.3.0
  	'be_patient' => 'Ole kärsivällinen, skripti tarvitsee aikaa tiedostojen lisäämiseen', //cpg1.3.0
  	'no_album' => 'albumia ei valittu',  //cpg1.3.0
  	'notes' =>  '<ul>'.
                          '<li><b>OK</b> : tarkoittaa, että tiedosto lisättiin onnistuneesti</li>'.
                          '<li><b>DP</b> : tarkoittaa, että sama tiedosto on jo tietokannassa</li>'.
                          '<li><b>PB</b> : tarkoittaa, että tiedostoa ei voitu lisätä. Tarkista kohdekansioiden käyttöoikeudet</li>'.
                          '<li><b>NA</b> : tarkoittaa, että et ole valinnut albumia johon kuvat pitäisi siirtää. Siirry \'<a href="javascript:history.back(1)">takaisin</a>\' ja valitse albumi. Jos galleriassa ei ole yhtään albuamia, <a href="albmgr.php">luo</a> ensin yksi albumi</li>'.
                          '<li>Jos merkit OK, DP, PB eivät ilmesty, klikkaa rikkoutunutta tiedosta nähdäksesi PHP:n tuottaman virheilmoituksen</li>'.
                          '<li>Jos selaimesi menee timeout-tilaan, päivitä sivu</li>'.
                          '</ul>', //cpg1.3.0
  	'select_album' => 'valitse albumi', //cpg1.3.0
  	'check_all' => 'Valise kaikki', //cpg1.3.0
  	'uncheck_all' => 'Poista valinta kaikista', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// Tiedosto thumbnails.php                                                   //
// ------------------------------------------------------------------------- //

// tyhjä

// ------------------------------------------------------------------------- //
// Tiedosto banning.php                                                      //
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  	'title' => 'Bannaa käyttäjiä',
  	'user_name' => 'Käyttäjänimi',
  	'ip_address' => 'IP-osoite',
  	'expiry' => 'Päättymisaika (tyhjä tarkoittaa pysyvää)',
  	'edit_ban' => 'Tallenna muutokset',
  	'delete_ban' => 'Poista',
  	'add_new' => 'Lisää uusi',
  	'add_ban' => 'Lisää',
  	'error_user' => 'Ei löydä käyttäjää', //cpg1.3.0
  	'error_specify' => 'Käyttäjänimi tai IP-osoite on pakollinen tieto', //cpg1.3.0
  	'error_ban_id' => 'Virheellinen bannin ID!', //cpg1.3.0
  	'error_admin_ban' => 'Et voi bannata itseäsi!', //cpg1.3.0
  	'error_server_ban' => 'Olet bannaamassa omaa palvelintasi? Tehtävää ei voi toteuttaa.', //cpg1.3.0
  	'error_ip_forbidden' => 'Et voi bannata tätä IP-osoitetta - sitä ei ole reititetty!', //cpg1.3.0
  	'lookup_ip' => 'Etsi IP-osoitetta', //cpg1.3.0
  	'submit' => 'Etsi', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// Tiedosto upload.php                                                       //
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  	'title' => 'Siirrä tiedosto', //cpg1.3.0
  	'custom_title' => 'Muokkaa tiedostonsiirtolomaketta', //cpg1.3.0
  	'cust_instr_1' => 'Voit valita haluamasi määrän siirrettäville tiedostoille tarkoitettuja kenttiä. Et voi kuitenkaan valita kenttiä enempää kuin ylläpitäjä on määrännyt.', //cpg1.3.0
  	'cust_instr_2' => 'Kenttien määrä', //cpg1.3.0
  	'cust_instr_3' => 'Suoraa tiedostojen siirtoa palvelimelle varten enintään: %s', //cpg1.3.0
  	'cust_instr_4' => 'URI/URL -siirtoa varten enintään: %s', //cpg1.3.0
	'cust_instr_5' => 'URI/URL -siirtoa varten:', //cpg1.3.0
  	'cust_instr_6' => 'Suoraa siirtoa palvelimelle varten:', //cpg1.3.0
  	'cust_instr_7' => 'Valitse haluamasi määrä siirtokenttiä. Siirry sitten eteenpäin klikkaamalla \'Jatka\'. ', //cpg1.3.0
  	'reg_instr_1' => 'Lomakkeessa viallinen tieto.', //cpg1.3.0
  	'reg_instr_2' => 'Voit nyt siirtää tiedostoja kirjoittamalla niiden sijainnin alla oleviin kenttiin. Tiedoston koko ei saa ylittää %s KB:ta. ZIP-tiedostot jotka siirretään \'Suoran siirron\' tai \'URI/URL -siirron\' kautta säilyvät pakattuina.', //cpg1.3.0
  	'reg_instr_3' => 'Jos haluat että pakattu tiedosto puretaan, se pitää lisätä \'Purkaa ZIP-tiedoston\' -kentän kautta.', //cpg1.3.0
  	'reg_instr_4' => 'URI/URL -siirtoa käytettäessä tiedoston polku pitää kirjoitttaa täydellisesti: http://www.omasivu.com/images/example.jpg', //cpg1.3.0
  	'reg_instr_5' => 'Kun olet täyttänyt lomakkeen, jatka klikkaamalla \'Jatka\'.', //cpg1.3.0
  	'reg_instr_6' => 'Purettavat ZIP-tiedostot:', //cpg1.3.0
  	'reg_instr_7' => 'Tiedosto siirretään palvelimelle:', //cpg1.3.0
  	'reg_instr_8' => 'URI/URL -siirrot:', //cpg1.3.0
  	'error_report' => 'Virheraportti', //cpg1.3.0
  	'error_instr' => 'Seuraavissa siirroissa oli ongelmia:', //cpg1.3.0
  	'file_name_url' => 'Tiedoston nimi/URL', //cpg1.3.0
  	'error_message' => 'Virheraportti', //cpg1.3.0
  	'no_post' => 'POST ei siirtänyt tiedostoa.', //cpg1.3.0
  	'forb_ext' => 'Kielletty tiedostomuoto.', //cpg1.3.0
  	'exc_php_ini' => 'php.ini sallii kokorajoituksen ylittämisen.', //cpg1.3.0
  	'exc_file_size' => 'CPG ylitti tiedostokoon rajoituksen.', //cpg1.3.0
  	'partial_upload' => 'Vain osittainen siirto.', //cpg1.3.0
  	'no_upload' => 'Siirto ei onnistunut.', //cpg1.3.0
  	'unknown_code' => 'Tuntematon PHP-virhe siirron yhteydessä.', //cpg1.3.0
  	'no_temp_name' => 'Ei siirtoa - Ei väliaikaista nimeä.', //cpg1.3.0
  	'no_file_size' => 'Ei sisällä tietoa / tieto vaurioitunut', //cpg1.3.0
  	'impossible' => 'Ei voida siirtää.', //cpg1.3.0
  	'not_image' => 'Tiedosto ei ole kuva / tieto vaurioitunut', //cpg1.3.0
  	'not_GD' => 'Ei GD tiedostotarkennin.', //cpg1.3.0
  	'pixel_allowance' => 'Pixel allowance exceeded.', //cpg1.3.0 //Ei käännetty - Sopivaa suomennosta ei löydy
  	'incorrect_prefix' => 'Väärä URI/URL', //cpg1.3.0
  	'could_not_open_URI' => 'Ei voinut avata URI:a.', //cpg1.3.0
  	'unsafe_URI' => 'Turvallisuus ei ole varmaa.', //cpg1.3.0
  	'meta_data_failure' => 'Meta data failure', //cpg1.3.0 //Ei käännetty - Sopivaa suomennosta ei löydy
  	'http_401' => '401 Unauthorized', //cpg1.3.0 //Ei käännetty - Käännös tarpeeton virheilmoituksissa
  	'http_402' => '402 Payment Required', //cpg1.3.0 //Ei käännetty - Käännös tarpeeton virheilmoituksissa
  	'http_403' => '403 Forbidden', //cpg1.3.0 //Ei käännetty - Käännös tarpeeton virheilmoituksissa
  	'http_404' => '404 Not Found', //cpg1.3.0 //Ei käännetty - Käännös tarpeeton virheilmoituksissa
  	'http_500' => '500 Internal Server Error', //cpg1.3.0 //Ei käännetty - Käännös tarpeeton virheilmoituksissa
  	'http_503' => '503 Service Unavailable', //cpg1.3.0 //Ei käännetty - Käännös tarpeeton virheilmoituksissa
  	'MIME_extraction_failure' => 'MIME:ä ei havaittu.', //cpg1.3.0
  	'MIME_type_unknown' => 'Tuntematon MIME-tyyppi', //cpg1.3.0
  	'cant_create_write' => 'Ei voi luoda tiedostoa.', //cpg1.3.0
  	'not_writable' => 'Ei voi kirjoittaa tiedostoon.', //cpg1.3.0
  	'cant_read_URI' => 'Ei voi lukea URI/URL', //cpg1.3.0
  	'cant_open_write_file' => 'Ei voi avata URI -kirjoitustiedostoa.', //cpg1.3.0
  	'cant_write_write_file' => 'Ei voi kirjoittaa URI -kirjoitustiedostoon.', //cpg1.3.0
  	'cant_unzip' => 'Ei voi purkaa tiedostoa.', //cpg1.3.0
  	'unknown' => 'Tuntematon virhe', //cpg1.3.0
  	'succ' => 'Onnistuneet tiedostonsiirrot', //cpg1.3.0
  	'success' => '%s siirtoa onnistui.', //cpg1.3.0
  	'add' => 'Klikkaa \'Jatka\' lisätäksesi tiedostot albumeihin.', //cpg1.3.0
  	'failure' => 'Siirrossa tapahtui virhe', //cpg1.3.0
  	'f_info' => 'Tiedoston tiedot', //cpg1.3.0
  	'no_place' => 'Edellistä tiedostoa ei voitu sijoittaa haluamallasi tavalla.', //cpg1.3.0
  	'yes_place' => 'Edellinen tiedosto sijoitettiin onnistuneesti.', //cpg1.3.0
  	'max_fsize' => 'Suurin sallittu tiedoston koko on %s KB',
  	'album' => 'Albumi',
  	'picture' => 'Tiedosto', //cpg1.3.0
  	'pic_title' => 'Tiedoston otsikko', //cpg1.3.0
  	'description' => 'Tiedoston kuvaus', //cpg1.3.0
  	'keywords' => 'Hakusanat (erottele välilyönneillä)',
  	'err_no_alb_uploadables' => 'Ei ole albumia johon sinulla olisi oikeus siirtää tiedostoja', //cpg1.3.0
  	'place_instr_1' => 'Sijoita tiedostot albumeihin. Voit myös lisätä tiedostoihin haluamiasi tietoja.', //cpg1.3.0
  	'place_instr_2' => 'Lisää tiedostoja odottaa sijoitusta. Klikkaa \'Jatka\'.', //cpg1.3.0
  	'process_complete' => 'Kaikki tiedostot sijoitettu onnistuneesti.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// Tiedosto usermgr.php                                                      //
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  	'title' => 'Muokkaa käyttäjiä',
  	'name_a' => 'Nimi nousevasti',
  	'name_d' => 'Nimi laskevasti',
  	'group_a' => 'Käyttäjäryhmä nousevasti',
  	'group_d' => 'Käyttäjäryhmä laskevasti',
  	'reg_a' => 'Rek. pvm. nousevasti',
  	'reg_d' => 'Rek. pvm. laskevasti',
  	'pic_a' => 'Tiedostojen määrä nousevasti',
  	'pic_d' => 'Tiedostojen määrä laskevasti',
  	'disku_a' => 'Tilankäyttö nousevasti',
  	'disku_d' => 'Tilankäyttö laskevasti',
  	'lv_a' => 'Viimeinen käynti nousevasti', //cpg1.3.0
  	'lv_d' => 'Viimeinen käynti laskevasti', //cpg1.3.0
  	'sort_by' => 'Järjestä käyttäjät',
  	'err_no_users' => 'Ei käyttäjiä!',
  	'err_edit_self' => 'Et voi muokata omaa profiiliasi. Käytä \'Omat tiedot\' linkkiä siihen tarkoitukseent',
  	'edit' => 'Muokkaa',
  	'delete' => 'Poista',
  	'name' => 'Käyttäjänimi',
  	'group' => 'Käyttäjäryhmä',
  	'inactive' => 'Passiivinen',
  	'operations' => 'Toiminnat',
  	'pictures' => 'Tiedostot', //cpg1.3.0
  	'disk_space' => 'Tilaa käytetty / Yläraja',
  	'registered_on' => 'Rekisteöritymisen päivämäärä',
  	'last_visit' => 'Viimeksi vieraillut', //cpg1.3.0
  	'u_user_on_p_pages' => '%d käyttäjää %d sivulla',
  	'confirm_del' => 'Haluatko varmasti poistaa tämän käyttäjän? \\nKaikki hänen albuminsa ja tiedostonsa poistuvat myös.', //js-alert //cpg1.3.0
  	'mail' => 'Posti',
  	'err_unknown_user' => 'Valittua käyttäjää ei ole!',
  	'modify_user' => 'Muokkaa käyttäjää',
  	'notes' => 'Huom',
  	'note_list' => '<li>Jos et halua vaihtaa nykyistä salasanaa, jätä salasana-kenttä tyhjäksi',
  	'password' => 'Salasana',
  	'user_active' => 'Käyttäjä on aktiivinen',
  	'user_group' => 'Käyttäjäryhmä',
  	'user_email' => 'Sähköposti',
  	'user_web_site' => 'Kotisivu',
  	'create_new_user' => 'Luo uusi käyttäjä',
  	'user_location' => 'Sijainti',
  	'user_interests' => 'Harrastukset',
  	'user_occupation' => 'Ammatti',
  	'latest_upload' => 'Viimeiset tiedostonsiirrot', //cpg1.3.0
  	'never' => 'ei koskaan', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// Tiedosto util.php                                                         //
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
  	'title' => 'Ylläpitäjän asetukset (Muokkaa kuvien kokoa)', //cpg1.3.0
  	'what_it_does' => 'Tehtävät',
  	'what_update_titles' => 'Muokkaa tiedoston otsikkoa',
  	'what_delete_title' => 'Poistaa otsikon',
  	'what_rebuild' => 'Tekee thumbnailit ja uudelleen ja muokkaa kuvan kokoa',
  	'what_delete_originals' => 'Poistaa alkuperäisen kokoiset kuvat ja korvaa ne muokatuilla',
  	'file' => 'Tiedosto',
  	'title_set_to' => 'otsikko asetettu',
  	'submit_form' => 'lähetä',
  	'updated_succesfully' => 'muokkaus onnistui',
  	'error_create' => 'Virhe!',
  	'continue' => 'Muokkaa lisää kuvia',
  	'main_success' => 'Tiedostoa %s käytettiin onnistuneesti päätiedostona', //cpg1.3.0
  	'error_rename' => 'Virhe uudelleennimettäessä tiedostoa %s muotoon %s',
  	'error_not_found' => 'Tiedostoa %s ei löytynyt',
  	'back' => 'takaisin päävalikkoon',
  	'thumbs_wait' => 'Päivittää thumbnaileja / muokkaa kuvia. Odota hetki...',
  	'thumbs_continue_wait' => 'Jatkaa thumbnailien päivitystä / kuvien muokkausta...',
  	'titles_wait' => 'Päivittää otsikkoja. Odota hetki...',
  	'delete_wait' => 'Poista otsikkoja. Odota hetki...',
  	'replace_wait' => 'Poistaa alkuperäisi kuvia ja korvaa niitä muokatuilla. Odota hetki...',
  	'instruction' => 'Pikaohjeet',
  	'instruction_action' => 'Valitse toiminto',
  	'instruction_parameter' => 'Aseta parametrit',
  	'instruction_album' => 'Valitse albumi',
  	'instruction_press' => 'Paina %s',
  	'update' => 'Päivitä thumbnailit / muokatut kuvat',
  	'update_what' => 'Mitä päivitetään',
  	'update_thumb' => 'Vain thumbnailit',
  	'update_pic' => 'Vain muokatut kuvat',
  	'update_both' => 'Sekä thumbnailit että muokatut kuvat',
  	'update_number' => 'Käsiteltäviä kuvia per klikkaus',
  	'update_option' => '(Aseta alemmalle tasolle mikäli selain joutuu toistuvasti timeout-tilaan)',
  	'filename_title' => 'Tiedostonimi &rArr; Otsikko', //cpg1.3.0
  	'filename_how' => 'Miten tiedostonimeä muokataan',
  	'filename_remove' => 'Poista .jpg-pääte ja korvaa _ (alaviiva) välilyönnillä',
  	'filename_euro' => 'Muuta 2003_11_23_13_20_20.jpg muotoon 23/11/2003 13:20',
  	'filename_us' => 'Muuta 2003_11_23_13_20_20.jpg muotoon 11/23/2003 13:20',
  	'filename_time' => 'Muuta 2003_11_23_13_20_20.jpg muotoon 13:20',
  	'delete' => 'Poista otsikot ja alkuperäisen kokoiset kuvat', //cpg1.3.0
  	'delete_title' => 'Poista otsikot', //cpg1.3.0
  	'delete_original' => 'Poista alkuperäisen kokoiset kuvat',
  	'delete_replace' => 'Poista alkuperäisen kokoiset kuvat ja korvaa ne muokatuilla versioilla',
  	'select_album' => 'Valitse albumi',
  	'delete_orphans' => 'Poista yksittäiset kommentit (toimii kaikkiin albumeihin)', //cpg1.3.0
  	'orphan_comment' => 'yksittäistä kommenttia löytynyt', //cpg1.3.0
  	'delete' => 'Poista', //cpg1.3.0
  	'delete_all' => 'Poista kaikki', //cpg1.3.0
  	'comment' => 'Kommentti: ', //cpg1.3.0
  	'nonexist' => 'liitetty olemattomaan tiedostoon # ', //cpg1.3.0
  	'phpinfo' => 'Näytä phpinfo', //cpg1.3.0
  	'update_db' => 'Päivitä tietokanta', //cpg1.3.0
  	'update_db_explanation' => 'Jos olet korvannut copperminen tiedostoja, lisännyt muokkauksia tai päivittänyt aiemmasta versiosta, muista päivittää tietokanta. Tämä luo tarvittavat taulukot ja/tai configin arvot gallerian tietokantaan.', //cpg1.3.0
);

?>