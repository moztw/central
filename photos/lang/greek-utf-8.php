<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.3.0                                            //
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
// ENCODING CHECK; SHOULD BE YEN BETA MU: ¥ ß µ
// ------------------------------------------------------------------------- //
// $Id: greek-utf-8.php,v 1.9 2004/12/29 23:03:49 chtito Exp $
// ------------------------------------------------------------------------- //

// info about translators and translated language 
$lang_translation_info = array( 
'lang_name_english' => 'Greek',  
'lang_name_native' => 'Ελληνικά', 
'lang_country_code' => 'gr', 
'trans_name'=> 'lykman', //the name of the translator - can be a nickname 
'trans_email' => 'lykman@freemail.gr', //translator's email address (optional) 
'trans_website' => 'http://www.lykman.com', //translator's website (optional) 
'trans_date' => 'created 29-03-2004 and last modified 09-04-2004', //the date the translation was created / last modified 
); 

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Κυρ', 'Δευ', 'Tρι', 'Τετ', 'Πεμ', 'Παρ', 'Σαβ');
$lang_month = array('Ιαν', 'Φεβ', 'Mαρ', 'Aπρ', 'Mαι', 'Ιουν', 'Ιουλ', 'Aυγ', 'Σεπ', 'Οκτ', 'Noε', 'Δεκ');

// Some common strings
$lang_yes = 'Ναι';
$lang_no  = 'Οχι';
$lang_back = 'ΠΙΣΩ';
$lang_continue = 'ΣΥΝΕΧΕΙΑ';
$lang_info = 'Πληροφορίες';
$lang_error = 'Λάθος';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%B %d, %Y';
$lastcom_date_fmt =  '%m/%d/%y at %H:%M'; //cpg1.3.0
$lastup_date_fmt = '%B %d, %Y';
$register_date_fmt = '%B %d, %Y';
$lasthit_date_fmt = '%B %d, %Y at %I:%M %p'; //cpg1.3.0
$comment_date_fmt =  '%B %d, %Y at %I:%M %p'; //cpg1.3.0

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array( 
        'random' => 'Τυχαία αρχεία', //cpg1.3.0
        'lastup' => 'Τελευταίες προσθήκες',
        'lastalb'=> 'Πρόσφατα ενημερωμένα άλμπουμ',
        'lastcom' => 'Τελευταία σχόλια',
        'topn' => 'Περισσότερες εμφανίσεις',
        'toprated' => 'Υψηλότερη βαθμολογία',
        'lasthits' => 'Τελευταίες εμφανίσεις',
        'search' => 'Αποτελέσματα αναζήτησης',
        'favpics'=> 'Αγαπημένα αρχεία' //cpg1.3.0
);

$lang_errors = array(
	'access_denied' => 'Δεν επιτρέπετε η πρόσβαση σε αυτήν την σελίδα.',
	'perm_denied' => 'Δεν επιτρέπετε να εκτελέσετε αυτήν την λειτουργία.',
	'param_missing' => 'Ελειπείς παράμετροι για την εκτέλεση.',
	'non_exist_ap' => 'Το επιλεγμένο άλμπουμ/αρχείο δεν υπάρχει!', //cpg1.3.0
	'quota_exceeded' => 'Ο χώρος σας γέμισε<br /><br />Σας αναλογεί χώρος [quota]K, τα αρχεία σας αυτή την στιγμή χρησιμοποιούν [space]K, προσθέτοντας αυτό το αρχείο θα υπερβείτε το όριο.', //cpg1.3.0
	'gd_file_type_err' => 'Χρησιμοποιώντας το GD image library, επιτρεπόμενα φορμά είναι μόνο τα JPEG και PNG.',
	'invalid_image' => 'Η φωτογραφία που ανεβάσατε είναι προβληματική ή ελειπής.',
	'resize_failed' => 'Δεν ήταν δυνατόν να δημιουργηθεί thumbnail ή εικόνα μειωμένου μεγέθους.',
	'no_img_to_display' => 'Καμμία εικόνα προς εμφάνιση',
	'non_exist_cat' => 'Η επιλεγμένη κατηγορία δεν υπάρχει',
	'orphan_cat' => 'Η κατηγορία δεν έχει δημιουργό, εκτελέστε τον category manager για να διορθώσετε το πρόβλημα.', //cpg1.3.0
	'directory_ro' => 'Ο κατάλογος \'%s\' δεν είναι διαθέσιμος για τροποποίηση, τα αρχεία δεν μπορούν να διαγραφούν', //cpg1.3.0
	'non_exist_comment' => 'Το επιλεγμένο σχόλιο δεν υπάρχει.',
        'pic_in_invalid_album' => 'Το αρχείο είναι σε ανύπαρκτο άλμπουμ (%s)!?', //cpg1.3.0
        'banned' => 'Εχετε αποκλειστεί από αυτό το site.', 
        'not_with_udb' => 'Αυτή η λειτουργία είναι απενεργοποιημένη στο Coppermine γιατί είναι αλληλεπιδραστική με το software του φόρουμ. Η αυτό που προσπαθείτε να κάνετε δεν υποστηρίζεται στην παρούσα διαμόρφωση, ή την λειτουργία θα πρέπει να την χειρίζεται το ίδιο το φόρουμ.',
	'offline_title' => 'Εκτός λειτουργίας', //cpg1.3.0
	'offline_text' => 'Η Gallery είναι προσωρινά εκτός λειτουργίας - παρακαλώ επιστρέψτε ξανά σύντομα', //cpg1.3.0
	'ecards_empty' => 'Αυτή την στιγμή δεν υπάρχουν ηλεκτρονικές κάρτες για εμφάνιση. Ελένξτε ότι έχετε ενεργοποιημένη την επιλογή ecard logging στις επιλογές του coppermine!', //cpg1.3.0
	'action_failed' => 'Η διαδικασία απέτυχε. Το Coppermine δεν μπόρεσε να εκτελέσει αυτό που ζητήσατε.', //cpg1.3.0
	'no_zip' => 'Οι απαραίτητες βιβλιοθήκες για την επεξεργασία ZIP αρχείων δεν είναι διαθέσιμες. Παρακαλώ επικοινωνήστε με τον διαχειριστή του Coppermine.', //cpg1.3.0
	'zip_type' => 'Δεν σας επιτρέπετε να προσθέσετε αρχεία ZIP.', //cpg1.3.0
);

$lang_bbcode_help = 'Πιθανόν να σας χρησιμέψουν: <li>[b]<b>Εντονα</b>[/b]</li> <li>[i]<i>Κεκλιμένα</i>[/i]</li> <li>[url=http://yoursite.com/]Url της σελίδας σας[/url]</li> <li>[email]χρήστης@domain.com[/email]</li>'; //cpg1.3.0

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
	'alb_list_title' => 'Μετακίνηση στην λίστα των άλμπουμ',
	'alb_list_lnk' => 'Λίστα των άλμπουμ',
	'my_gal_title' => 'Μετακίνηση στo προσωπικό φώτο άλμπουμ',
	'my_gal_lnk' => 'Το φώτο άλμπουμ μου',
	'my_prof_lnk' => 'Το προφίλ μου',
	'adm_mode_title' => 'Λειτουργίες διαχείρησης',
	'adm_mode_lnk' => 'Κατάσταση διαχείρησης',
	'usr_mode_title' => 'Λειτουργίες χρήστη',
	'usr_mode_lnk' => 'Κατάσταση χρήστη',
	'upload_pic_title' => 'Προσθήκη αρχείου σε άλμπουμ', //cpg1.3.0
	'upload_pic_lnk' => 'Προσθήκη αρχείου', //cpg1.3.0
	'register_title' => 'Δημιουργία λογαριασμού',
	'register_lnk' => 'Εγγραφή',
	'login_lnk' => 'Είσοδος',
	'logout_lnk' => 'Εξοδος',
	'lastup_lnk' => 'Τελευταίες προσθήκες',
	'lastcom_lnk' => 'Τελευταία σχόλια',
	'topn_lnk' => 'Περισσότερες εμφανίσεις',
	'toprated_lnk' => 'Υψηλότερη βαθμολογία',
	'search_lnk' => 'Αναζήτηση',
        'fav_lnk' => 'Τα αγαπημένα μου',
	'memberlist_title' => 'Εμφάνιση Λίστας Μελών', //cpg1.3.0
	'memberlist_lnk' => 'Λίστα Μελών', //cpg1.3.0
	'faq_title' => 'Συχνές ερωτήσεις και απαντήσεις (FAQ) σχετικά με το &quot;Coppermine&quot;', //cpg1.3.0
	'faq_lnk' => 'FAQ', //cpg1.3.0
);

$lang_gallery_admin_menu = array(
	'upl_app_lnk' => 'Εγκριση προσθήκης',
	'config_lnk' => 'Ρυθμίσεις',
	'albums_lnk' => 'Αλμπουμ',
	'categories_lnk' => 'Κατηγορίες',
	'users_lnk' => 'Χρήστες',
	'groups_lnk' => 'Ομάδες',
	'comments_lnk' => 'Ελενχος Σχολίων', //cpg1.3.0
	'searchnew_lnk' => 'Προσθήκη πλήθους αρχείων', //cpg1.3.0
        'util_lnk' => 'Εργαλεία Διαχείρισης', //cpg1.3.0
        'ban_lnk' => 'Αποκλεισμός χρηστών',
	'db_ecard_lnk' => 'Εμφάνιση Ecards', //cpg1.3.0
);

$lang_user_admin_menu = array(
	'albmgr_lnk' => 'Δημιουργία / ταξινόμηση άλμπουμ',
	'modifyalb_lnk' => 'Τροποποίηση των άλμπουμ',
	'my_prof_lnk' => 'Το προφίλ μου',
);

$lang_cat_list = array(
	'category' => 'Κατηγορία',
	'albums' => 'Aλμπουμ',
	'pictures' => 'Αρχεία', //cpg1.3.0
);

$lang_album_list = array(
	'album_on_page' => '%d άλμπουμ σε %d σελίδα(ες)'
);

$lang_thumb_view = array(
	'date' => 'ΗΜ/ΝΙΑ',
//Sort by filename and title 
        'name' => 'ΟΝΟΜΑ ΑΡΧΕΙΟΥ', 
        'title' => 'ΤΙΤΛΟΣ',
	'sort_da' => 'Στοίχιση από παλαιότερη προς νεότερη ημερομηνία',
	'sort_dd' => 'Στοίχιση από νεότερη προς παλαιότερη ημερομηνία',
	'sort_na' => 'Στοίχιση αλφαβητικά αύξουσα',
	'sort_nd' => 'Στοίχιση αλφαβητικά φθίνουσα',
        'sort_ta' => 'Στοίχιση με τίτλο αύξουσα',
        'sort_td' => 'Στοίχιση με τίτλο φθίνουσα',
	'download_zip' => 'Download σαν αρχείο Zip', //cpg1.3.0
	'pic_on_page' => '%d φωτογραφία(ες) σε %d σελίδα(ες)',
	'user_on_page' => '%d χρήστης(ες) σε %d σελίδα(ες)' //cpg1.3.0
);

$lang_img_nav_bar = array(
	'thumb_title' => 'Επιστροφή στην σελίδα με τα thumbnail',
	'pic_info_title' => 'Εμφάνιση/απόκρυψη πληροφοριών αρχείου', //cpg1.3.0
	'slideshow_title' => 'Slideshow',
	'ecard_title' => 'Αποστολή αυτού του αρχείου σαν ηλεκτρονική κάρτα', //cpg1.3.0
	'ecard_disabled' => 'Οι ηλεκτρονικές κάρτες έχουν απενεργοποιηθεί',
	'ecard_disabled_msg' => 'Δεν σας επιτρέπετε να στείλετε ηλεκτρονικές κάρτες', //js-alert //cpg1.3.0
	'prev_title' => 'Εμφάνιση προηγούμενου αρχείου', //cpg1.3.0
	'next_title' => 'Εμφάνιση επόμενου αρχείου', //cpg1.3.0
	'pic_pos' => 'ΑΡΧΕΙΟ %s/%s', //cpg1.3.0
);

$lang_rate_pic = array(
	'rate_this_pic' => 'Βαθμολογήστε αυτό το αρχείο ', //cpg1.3.0
	'no_votes' => '(Χωρίς ψήφο ακόμα)',
	'rating' => '(τωρινή βαθμολογία : %s / 5 με %s ψήφους)',
	'rubbish' => 'Χάλια',
	'poor' => 'Κακή',
	'fair' => 'Μέτρια',
	'good' => 'Καλή',
	'excellent' => 'Πολύ καλή',
	'great' => 'Καταπληκτική',
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
	CRITICAL_ERROR => 'Critical error',
	'file' => 'Αρχείο: ',
	'line' => 'Γραμμή: ',
);

$lang_display_thumbnails = array(
	'filename' => 'Ονομα αρχείου : ',
	'filesize' => 'Μέγεθος αρχείου : ',
	'dimensions' => 'Διαστάσεις : ',
	'date_added' => 'Ημερομηνία προσθήκης : ', //cpg1.3.0
);

$lang_get_pic_data = array(
	'n_comments' => '%s σχόλια',
	'n_views' => '%s εμφανίσεις',
	'n_votes' => '(%s ψήφοι)'
);

$lang_cpg_debug_output = array(
	'debug_info' => 'Πληροφορίες Debug', //cpg1.3.0
	'select_all' => 'Επιλογή όλων', //cpg1.3.0
	'copy_and_paste_instructions' => 'Εαν πρόκειται να ζητήσετε βοήθεια στο φόρουμ του coppermine, κάντε ένα copy & paste αυτές τις πληροφορίες του debug μέσα στο ποστ σας. Μην ξεχάσετε να αντικαταστήσετε τυχόν passwords από το query με *αστεράκια* πριν το δημοσιεύσετε!', //cpg1.3.0
	'phpinfo' => 'εμφάνιση πληροφοριών php (phpinfo)', //cpg1.3.0
);

$lang_language_selection = array(
	'reset_language' => 'Προεπιλογή γλώσσας', //cpg1.3.0
	'choose_language' => 'Επιλέξτε γλώσσα', //cpg1.3.0
);

$lang_theme_selection = array(
	'reset_theme' => 'Προεπιλογή θέματος', //cpg1.3.0
	'choose_theme' => 'Επιλέξτε θέμα', //cpg1.3.0
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
	'Exclamation' => 'Επεξήγηση',
	'Question' => 'Ερώτηση',
	'Very Happy' => 'Πολύ χαρούμενος',
	'Smile' => 'Χαμόγελο',
	'Sad' => 'Λυπημένος',
	'Surprised' => 'Εκπληκτος',
	'Shocked' => 'Σοκαρισμένος',
	'Confused' => 'Μπερδεμένος',
	'Cool' => 'Cool',
	'Laughing' => 'Γελαστός',
	'Mad' => 'Τρελός',
	'Razz' => 'Razz',
	'Embarassed' => 'Ντροπιασμένος',
	'Crying or Very sad' => 'Κλαμένος',
	'Evil or Very Mad' => 'Διαβολικός',
	'Twisted Evil' => 'Διαβολεμένος',
	'Rolling Eyes' => 'Γυριστά μάτια',
	'Wink' => 'Wink',
	'Idea' => 'Iδέα',
	'Arrow' => 'Βέλος',
	'Neutral' => 'Ουδέτερος',
	'Mr. Green' => 'Mr. Πράσινος',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
	0 => 'Εγκαταλείποντας τις λειτουργίες διαχείρησης...',
	1 => 'Εισοδος στις λειτουργίες διαχείρησης...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
	'alb_need_name' => 'Τα άλμπουμ πρέπει να έχουν όνομα !', //js-alert
	'confirm_modifs' => 'Ειστε σίγουρος πως θέλετε να κάνετε αυτές τις αλλαγές ?', //js-alert
	'no_change' => 'Δεν κάνατε καμία αλλαγή !', //js-alert
	'new_album' => 'Nέο άλμπουμ',
	'confirm_delete1' => 'Ειστε σίγουρος πως θέλετε να διαγράψετε αυτό το άλμπουμ ?', //js-alert
	'confirm_delete2' => '\nΟλες οι φωτογραφίες και τα σχόλια που περιέχονται θα χαθούν !', //js-alert
	'select_first' => 'Επιλέξτε ένα αλμπουμ πρώτα', //js-alert
	'alb_mrg' => 'Διαχείρηση Aλμπουμ',
	'my_gallery' => '* Το φώτο άλμπουμ μου *',
	'no_category' => '* Χωρίς κατηγορία *',
	'delete' => 'Διαγραφή',
	'new' => 'Nέο',
	'apply_modifs' => 'Εφαρμογή αλλαγών',
	'select_category' => 'Select category',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
	'miss_param' => 'Οι παράμετροι που απαιτούνται για \'%s\'λειτουργία δεν δόθηκαν !',
	'unknown_cat' => 'Η επιλεγμένη κατηγορία δεν υπάρχει στην database',
	'usergal_cat_ro' => 'Τα φώτο άλμπουμ των χρηστών δεν μπορούν να διαγραφούν !',
	'manage_cat' => 'Διαχείρηση κατηγοριών',
	'confirm_delete' => 'Είστε σίγουρος πως θέλετε να διαγράψετε αυτήν την κατηγορία', //js-alert
	'category' => 'Κατηγορία',
	'operations' => 'Λειτουργίες',
	'move_into' => 'Mετακίνηση σε',
	'update_create' => 'Ανανέωση/Δημιουργία κατηγορίας',
	'parent_cat' => 'Δημιουργός κατηγορίας',
	'cat_title' => 'Τίτλος κατηγορίας',
	'cat_thumb' => 'Τhumbnail κατηγορίας', //cpg1.3.0
	'cat_desc' => 'Περιγραφή κατηγορίας'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
	'title' => 'Ρυθμίσεις',
	'restore_cfg' => 'Επαναφορά αρχικών ρυθμίσεων',
	'save_cfg' => 'Αποθήκευση νέων ρυθμίσεων',
	'notes' => 'Σημειώσεις',
	'info' => 'Πληροφορίες',
	'upd_success' => 'Οι ρυθμίσεις του Coppermine ανανεώθηκαν',
	'restore_success' => 'Οι προεγκατεστημένες ρυθμίσεις του Coppermine επαναφέρθηκαν',
	'name_a' => 'Αυξων όνομα',
	'name_d' => 'Φθίνων όνομα',
	'title_a' => 'Αύξων τίτλος', 
        'title_d' => 'Φθίνων τίτλος',
	'date_a' => 'Αυξουσα ημερομηνία',
	'date_d' => 'Φθίνουσα ημερομηνία',
	'th_any' => 'Max Aspect',
	'th_ht' => 'Height',
	'th_wd' => 'Width',
	'label' => 'Ετικέτα', //cpg1.3.0
	'item' => 'αντικείμενο', //cpg1.3.0
	'debug_everyone' => 'Ολοι', //cpg1.3.0
	'debug_admin' => 'Μόνο ο Διαχειριστής', //cpg1.3.0

);

if (defined('CONFIG_PHP')) $lang_config_data = array(
	'Γενικές επιλογές',
	array('Ονομα γκάλερι', 'gallery_name', 0),
	array('Περιγραφή φώτο άλμπουμ', 'gallery_description', 0),
	array('Ε-mail διαχειριστή του φώτο άλμπουμ', 'gallery_admin_email', 0),
	array('Διεύθυνση παραλήπτη για \'Δείτε περισσότερες φωτογραφίες\' διασύνδεση στις ηλεκτρονικές κάρτες', 'ecards_more_pic_target', 0),
	array('Η Gallery είναι εκτός λειτουργίας', 'offline', 1), //cpg1.3.0
	array('Καταγραφή ηλεκτρονικών καρτών', 'log_ecards', 1), //cpg1.3.0
	array('Να επιτραπεί το ZIP download των αγαπημένων', 'enable_zipdownload', 1), //cpg1.3.0

	'Γλώσσα, Θέμα και επιλογές κωδικοποίησης χαρακτήρων',
	array('Γλώσσα', 'lang', 5),
	array('Θέμα', 'theme', 6),
	array('Εμφάνιση λίστας γλωσσών', 'language_list', 1), //cpg1.3.0
	array('Εμφάνιση σημαίας γλώσσας', 'language_flags', 8), //cpg1.3.0
	array('Εμφάνιση &quot;reset&quot; στην επιλογή γλώσσας', 'language_reset', 1), //cpg1.3.0
	array('Εμφάνιση λίστας θεμάτων', 'theme_list', 1), //cpg1.3.0
	array('Εμφάνιση &quot;reset&quot; στην επιλογή θέματος', 'theme_reset', 1), //cpg1.3.0
	array('Εμφάνιση συχνών ερωτησεων και απαντήσεων (FAQ)', 'display_faq', 1), //cpg1.3.0
	array('Εμφάνιση βοήθειας bbcode', 'show_bbcode_help', 1), //cpg1.3.0
	array('Κωδικοποίηση χαρακτήρων', 'charset', 4), //cpg1.3.0

	'Εμφάνιση Λίστας Αλμπουμ',
	array('Πλάτος κυρίως πίνακα (πίξελ ή %)', 'main_table_width', 0),
	array('Πλήθος υποκατηγοριών προς εμφάνιση', 'subcat_level', 0),
	array('Πλήθος άλμπουμ προς εμφάνιση', 'albums_per_page', 0),
	array('Πλήθος στηλών για την λίστα των άλμπουμ', 'album_list_cols', 0),
	array('Μέγεθος των thumbnails σε πίξελ', 'alb_list_thumb_size', 0),
	array('Περιεχόμενο της κεντρικής σελίδας', 'main_page_layout', 0),
        array('Εμφάνιση πρώτου επιπέδου thumbnails του άλμπουμ στις κατηγορίες','first_level',1), 

	'Εμφάνιση Thumbnail',
	array('Πλήθος στηλών στην σελίδα των thumbnail', 'thumbcols', 0),
	array('Πλήθος γραμμών στην σελίδα των thumbnail', 'thumbrows', 0),
	array('Μέγιστο πλήθος tabs για εμφάνιση', 'max_tabs', 10), //cpg1.3.0
	array('Εμφάνιση ενσωματωμένου σχόλιου (επιπρόσθετα του τίτλου) κάτω από το thumbnail', 'caption_in_thumbview', 1), //cpg1.3.0
	array('Εμφάνιση πλήθους εμφανίσεων κάτω από το thumbnail', 'views_in_thumbview', 1), //cpg1.3.0
	array('Εμφάνιση πλήθους σχόλιων κάτω από το thumbnail', 'display_comment_count', 1),
	array('Εμφάνιση του προσθέτη κάτω από το thumbnail', 'display_uploader', 1), //cpg1.3.0
	array('Προεπιλογή ρύθμισης στοίχησης για τα αρχεία', 'default_sort_order', 3), //cpg1.3.0
	array('Ελάχιστο πλήθος ψήφων για ένα αρχείο ώστε να εμφανιστεί αυτό στην λίστα με την \'top-rated\' .', 'min_votes_for_rating', 0), //cpg1.3.0

	'Εμφάνιση εικόνων &amp; Ρυθμίσεις σχόλιων',
	array('Πλάτος πίνακα για εμφάνιση αρχείου (πίξελ ή %)', 'picture_table_width', 0), //cpg1.3.0
	array('Να εμφανίζονται οι πληροφορίες των αρχείων πάντα?', 'display_pic_info', 1), //cpg1.3.0
	array('Φιλτράρισμα απαγορευμένων λέξεων στα σχόλια', 'filter_bad_words', 1),
	array('Να επιτραπούν οι φατσούλες στα σχόλια', 'enable_smilies', 1),
	array('Να επιτραπούν πολλαπλά συνεχόμενα σχόλια σε μία φωτό από τον ίδιο χρήστη (απενεργοποιηση προστασίας από flood)', 'disable_comment_flood_protect', 1), //cpg1.3.0
	array('Mέγιστο μήκος για την περιγραφή μιας φωτογραφίας', 'max_img_desc_length', 0),
	array('Mέγιστο πλήθος χαρακτήρων ανά λέξη', 'max_com_wlength', 0),
	array('Mέγιστος αριθμός γραμμών ανά σχόλιο', 'max_com_lines', 0),
	array('Mέγιστο μήκος σχολίου', 'max_com_size', 0),
        array('Εμφάνιση film strip', 'display_film_strip', 1), 
        array('Αριθμός αντικειμένων μέσα στο film strip', 'max_film_strip_items', 0),
	array('Ειδοποίηση διαχειριστών με email αν προστεθούν σχόλια', 'email_comment_notification', 1), //cpg1.3.0
	array('Χρόνος εναλλαγής φωτό κατά το Slideshow σε milliseconds (1 δευτερόλεπτο = 1000 milliseconds)', 'slideshow_interval', 0), //cpg1.3.0

	'Pυθμίσεις αρχείων και thumbnails', //cpg1.3.0
	array('Ποιότητα των JPEG αρχείων', 'jpeg_qual', 0),
        array('Μέγιστη διάσταση του thumbnail <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0), //cpg1.3.0
        array('Χρήση διάστασης ( πλάτος ή ύψος ή Μέγιστη αναλογία για το thumbnail )<b>*</b>', 'thumb_use', 7), 
	array('Δημιουργία ενδιάμεσων φωτογραφιών','make_intermediate',1),
	array('Mέγιστο πλάτος ή ύψος ενδιάμεσης φωτο/βίντεο <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0), //cpg1.3.0
	array('Mέγιστο μέγεθος των αρχείων για προσθήκη (KB)', 'max_upl_size', 0), //cpg1.3.0
	array('Mέγιστο πλάτος ή ύψος των φωτό/βίντεο για προσθήκη (πίξελ)', 'max_upl_width_height', 0), //cpg1.3.0

	'Προχωρημένες ρυθμίσεις αρχείων και thumbnails', //cpg1.3.0
        array('Εμφάνιση εικονιδίου ιδιωτικού άλμουμ στους επισκέπτες','show_private',1), //cpg1.3.0
	array('Απαγορευμένοι χαρακτήρες σε όνομα αρχείου', 'forbiden_fname_char',0), //cpg1.3.0
	//array('Δεκτές επεκτάσεις αρχείων για τις προστιθέμενες φωτογραφίες', 'allowed_file_extensions',0), //cpg1.3.0
	array('Επιτρεπόμενοι τύποι εικόνας', 'allowed_img_types',0), //cpg1.3.0
	array('Επιτρεπόμενοι τύποι βίντεο', 'allowed_mov_types',0), //cpg1.3.0
	array('Επιτρεπόμενοι τύποι ήχων', 'allowed_snd_types',0), //cpg1.3.0
	array('Επιτρεπόμενοι τύποι κειμένων', 'allowed_doc_types',0), //cpg1.3.0
	array('Mέθοδος για αλλαγή μεγέθους φωτογραφιών','thumb_method',2), //cpg1.3.0
	array('Διαδρομή για την εφαρμογή ImageMagick \'convert\' (παράδειγμα /usr/bin/X11/)', 'impath', 0), //cpg1.3.0
	//array('Δεκτοί τύποι αρχείων (μόνο για το ImageMagick)', 'allowed_img_types',0), //cpg1.3.0
	array('Επιλογές εντολών γραμμής για το ImageMagick', 'im_options', 0), //cpg1.3.0
	array('Ανάγνωση πληροφοριών EXIF στα JPEG αρχεία', 'read_exif_data', 1), //cpg1.3.0
	array('Ανάγνωση πληροφοριών IPTC στα JPEG αρχεία', 'read_iptc_data', 1), //cpg1.3.0
	array('Κατάλογος άλμπουμ <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0), //cpg1.3.0
	array('Ο κατάλογος για τις φωτογραφίες των χρηστών <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0),
	array('Πρόθεμα των ενδιάμεσων φωτογραφιών <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0), //cpg1.3.0
	array('Πρόθεμα των thumbnails <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0), //cpg1.3.0
	array('Προεγκαταστημένες ρυθμίσεις για καταλόγους', 'default_dir_mode', 0), //cpg1.3.0
	array('Προεγκαταστημένες ρυθμίσεις για αρχεία', 'default_file_mode', 0), //cpg1.3.0

	'Ρυθμίσεις χρηστών',
	array('Επιτρέπετε η εγγραφή νέου χρήστη', 'allow_user_registration', 1),
	array('Η εγγραφή νέου χρήστη να απαιτεί επαλήθευση email', 'reg_requires_valid_email', 1),
	array('Ενημέρωση με email των διαχειριστών σε εγγραφή νέου χρήστη', 'reg_notify_admin_email', 1), //cpg1.3.0
	array('Επιτρέπετε δύο χρήστες να έχουν κοινή διεύθυνση email', 'allow_duplicate_emails_addr', 1),
	array('Οι χρήστες μπορούν να έχουν προσωπικά άλμπουμ (Σημείωση: εάν αλλάξετε από ναι σε όχι, όλα τα τωρινά προσωπικά άλμπουμ θα γίνουν δημόσια)', 'allow_private_albums', 1), //cpg1.3.0
	array('Ενημέρωση διαχειριστών με email όταν υπάρχουν αρχεία που περιμένουν έγκριση', 'upl_notify_admin_email', 1), //cpg1.3.0
	array('Να επιτραπεί στους χρήστες που έχουν κάνει login να μπορούν να δουν την λίστα μελών', 'allow_memberlist', 1), //cpg1.3.0

	'Custom πεδία για περιγραφή των φωτογραφιών (αφήστε κενό εαν δεν θα το χρησιμοποιήσετε)',
	array('Ονομα 1ου πεδίου', 'user_field1_name', 0),
	array('Ονομα 2ου πεδίου', 'user_field2_name', 0),
	array('Ονομα 3ου πεδίου', 'user_field3_name', 0),
	array('Ονομα 4ου πεδίου', 'user_field4_name', 0),

	'Ρυθμίσεις για τα Cookies',
	array('Ονομα του cookie που χρησιμοποιεί το πρόγραμμα', 'cookie_name', 0),
	array('Διαδρομή για το cookie που χρησιμοποιεί το πρόγραμμα', 'cookie_path', 0),
	
	'Λοιπές ρυθμίσεις',
	array('Eνεργοποίηση λειτουργίας εντοπισμού λαθών', 'debug_mode', 9), //cpg1.3.0
	array('Εμφάνιση πληροφοριών κατά την λειτουργία εντοπισμού λαθών', 'debug_notice', 1), //cpg1.3.0

	'<br /><div align="left"><a name="notice1"></a>(*) Τα πεδία με * δεν πρέπει να αλλαχτούν εαν έχετε ήδη φωτογραφίες στα αλμπουμ σας.<br />
	<a name="notice2"></a>(**) Οταν αλλάζετε αυτές τις ρυθμίσεις, μόνο τα αρχεία που θα προστθούν έπειτα θα επιρεαστούν, γιαυτό είναι προτιμότερο να μην αλλαχτούν εαν υπάρχουν ήδη αρχεία στην γκαλλερί. Παρόλα αυτά, μπορείτε να εφαρμόσετε τις αλλαγές στα υπάρχοντα αρχεία με τα &quot;<a href="util.php">εργαλεία διαχειριστών</a> (αλλαγή μεγεθών)&quot; εργαλεία από το μενου διαχειριστών.</div><br />', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Στείλτε ηλεκτρονικές κάρτες', //cpg1.3.0
  'ecard_sender' => 'Αποστολέας', //cpg1.3.0
  'ecard_recipient' => 'Παραλήπτης', //cpg1.3.0
  'ecard_date' => 'Ημερομηνία', //cpg1.3.0
  'ecard_display' => 'Εμφάνιση ηλεκτρονικής κάρτας', //cpg1.3.0
  'ecard_name' => 'Ονομα', //cpg1.3.0
  'ecard_email' => 'Email', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'αυξουσα', //cpg1.3.0
  'ecard_descending' => 'φθίνουσα', //cpg1.3.0
  'ecard_sorted' => 'Ταξινομηση', //cpg1.3.0
  'ecard_by_date' => 'με ημερομηνία', //cpg1.3.0
  'ecard_by_sender_name' => 'με όνομα αποστολέα', //cpg1.3.0
  'ecard_by_sender_email' => 'με email αποστολέα', //cpg1.3.0
  'ecard_by_sender_ip' => 'με IP αποστολέα', //cpg1.3.0
  'ecard_by_recipient_name' => 'με όνομα αποδέκτη', //cpg1.3.0
  'ecard_by_recipient_email' => 'με email αποδέκτη', //cpg1.3.0
  'ecard_number' => 'εμφανίζοντας τις εγγραφές από %s εως %s από %s', //cpg1.3.0
  'ecard_goto_page' => 'πήγαινε στην σελίδα', //cpg1.3.0
  'ecard_records_per_page' => 'Εγγραφές ανά σελίδα', //cpg1.3.0
  'check_all' => 'Επιλογή όλων', //cpg1.3.0
  'uncheck_all' => 'Αποεπιλογή όλων', //cpg1.3.0
  'ecards_delete_selected' => 'Διαγραφή επιλεγμένων ηλεκτρονικών καρτών', //cpg1.3.0
  'ecards_delete_confirm' => 'Είστε σίγουρος πως θέλετε να διαγράψετε τις εγγραφές? Επιλέξτε το checkbox!', //cpg1.3.0
  'ecards_delete_sure' => 'Είμαι σίγουρος', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
	'empty_name_or_com' => 'Πρέπει να γράψετε το όνομα σας και κάποιο σχόλιο',
	'com_added' => 'Το σχόλιο σας προστέθηκε',
	'alb_need_title' => 'Πρέπει να δώσετε κάποιο τίτλο για το άλμπουμ !',
	'no_udp_needed' => 'Δεν χρειάζεται ενημέρωση.',
	'alb_updated' => 'Tο άλμπουμ ενημερώθηκε',
	'unknown_album' => 'Το επιλεγμένο άλμπουμ δεν υπάρχει, ή δεν σας επιτρέπετε να προσθέσετε φωτογραφίες σε αυτό',
	'no_pic_uploaded' => 'Δεν προστέθηκε κανένα αρχείο!<br /><br />Εαν είχατε επιλέξει κάποιο να προσθέσετε, ελένξτε αν ο σέρβερ επιτρέπει προσθήκες...', //cpg1.3.0
	'err_mkdir' => 'Αποτυχία να δημιουργήσει τον κατάλογο %s !',
	'dest_dir_ro' => 'Ο κατάλογος %s στον οποίο προσπαθήτε να γράψετε, δεν μπορεί να αλλαχτεί από το πρόγραμμα !',
	'err_move' => 'Δεν ήταν δυνατή η μετακίνηση από τον %s στον %s !',
	'err_fsize_too_large' => 'Tο μέγεθος του αρχείου που ανεβάζετε είναι πολύ μεγάλο (μέγιστο επιτρεπόμενο είναι %s x %s) !', //cpg1.3.0
	'err_imgsize_too_large' => 'Tο μέγεθος του αρχείου που ανεβάζετε είναι πολύ μεγάλο (μέγιστο επιτρεπόμενο είναι %s KB) !',
	'err_invalid_img' => 'Tο αρχείο που ανεβάζετε, δεν είναι εγκυρο σαν φωτογραφία!',
	'allowed_img_types' => 'Μπορείτε να ανεβάσετε μόνο %s φωτογραφίες.',
	'err_insert_pic' => 'Το αρχείο \'%s\' δεν μπορεί να προστεθεί στο άλμπουμ ', //cpg1.3.0
	'upload_success' => 'Το αρχείο σας προστέθηκε επιτυχώς<br /><br />Θα είναι διαθέσιμη μετά την έγκριση του διαχειριστή.', //cpg1.3.0
	'notify_admin_email_subject' => '%s - Ενημέρωση νέας προσθήκης', //cpg1.3.0
	'notify_admin_email_body' => 'Μια φωτό από τον χρήστη %s μόλις προστέθηκε, και χρειάζεται την έγκριση σας. Επισκεφτείτε %s', //cpg1.3.0
	'info' => 'Πληροφορίες',
	'com_added' => 'Το σχόλιο προστέθηκε',
	'alb_updated' => 'Το άλμπουμ ανανεώθηκε',
	'err_comment_empty' => 'Το σχόλιο σας δεν έχει περιεχόμενο !',
	'err_invalid_fext' => 'Μόνο τα αρχεία με τις ακόλουθες επεκτάσεις επιτρέπονται : <br /><br />%s.',
	'no_flood' => 'Συγνώμη αλλά είστε αυτός που έγραψε το τελευταίο σχόλιο για αυτό το αρχείο<br /><br />Τροποποιήστε το σχόλιο που δημοσιεύσατε εαν θέλετε να το αλλάξετε', //cpg1.3.0
	'redirect_msg' => 'Μεταφερόσαστε...<br /><br /><br />Πατήστε \'CONTINUE\' εάν η σελίδα δεν ανανεωθεί αυτόματα',
	'upl_success' => 'Το αρχείο σας προστέθηκε επιτυχώς', //cpg1.3.0
	'email_comment_subject' => 'Νέο σχόλιο στο Coppermine Photo Gallery', //cpg1.3.0
	'email_comment_body' => 'Κάποιος πρόσθεσε νέο σχόλιο στην γκαλλερί σας. Δείτε το...', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
	'caption' => 'Λεζάντα',
	'fs_pic' => 'εικόνα πλήρους μεγέθους',
	'del_success' => 'διαγράφη επιτυχώς',
	'ns_pic' => 'φωτογραφία κανονικού μεγέθους',
	'err_del' => 'δεν μπορεί να διαγραφεί',
	'thumb_pic' => 'thumbnail',
	'comment' => 'σχόλιο',
	'im_in_alb' => 'φωτογραφία σε άλμπουμ',
	'alb_del_success' => 'Aλμπουμ \'%s\' διεγράφει',
	'alb_mgr' => 'Διαχείρηση Aλμπουμ',
	'err_invalid_data' => 'Μη έγκυρα δεδομένα παρελήφθησαν στο \'%s\'',
	'create_alb' => 'Δημιουργία άλμπουμ \'%s\'',
	'update_alb' => 'Ανανέωση άλμπουμ \'%s\' με τίτλο \'%s\' και ευρετήριο \'%s\'',
	'del_pic' => 'Διαγραφή αρχείου', //cpg1.3.0
	'del_alb' => 'Διαγραφή άλμπουμ',
	'del_user' => 'Διαγραφή χρήστη',
	'err_unknown_user' => 'Ο επιλεγμένος χρήστης δεν υπάρχει !',
	'comment_deleted' => 'Το σχόλιο διεγράφει επιτυχώς',
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
	'confirm_del' => 'Είστε σίγουρος πως θέλετε να ΔΙΑΓΡΑΨΕΤΕ αυτό το αρχείο? \\nΤα Σχόλια επίσης θα διαγραφούν.', //js-alert //cpg1.3.0
	'del_pic' => 'ΔΙΑΓΡΑΦΗ ΑΡΧΕΙΟΥ', //cpg1.3.0
	'size' => '%s x %s πίξελ',
	'views' => '%s φορές',
	'slideshow' => 'Slideshow',
	'stop_slideshow' => 'ΤΕΛΟΣ SLIDESHOW',
	'view_fs' => 'Click to view full size image',
	'edit_pic' => 'Τροποποίηση περιγραφής', //cpg1.3.0
	'crop_pic' => 'Crop και περιστροφή', //cpg1.3.0
);

$lang_picinfo = array(
	'title' =>'Πληροφορίες αρχείου', //cpg1.3.0
	'Filename' => 'Ονομα αρχείου',
	'Album name' => 'Ονομα άλμπουμ',
	'Rating' => 'Βαθμολογία (%s ψήφοι)',
	'Keywords' => 'Λέξεις Κλειδιά',
	'File Size' => 'Μέγεθος αρχείου',
	'Dimensions' => 'Διαστάσεις',
	'Displayed' => 'Εμφανίσεις',
	'Camera' => 'Φωτογραφική Μηχανή',
	'Date taken' => 'Ημερομηνία λήψης',
	'Aperture' => 'Διάφραγμα',
	'Exposure time' => 'Χρόνος έκθεσης',
	'Focal length' => 'Εστιακή απόσταση',
        'Comment' => 'Σχόλιο', 
        'addFav'=>'Προσθήκη στα Αγαπημένα', //cpg1.3.0
        'addFavPhrase'=>'Αγαπημένα', //cpg1.3.0
        'remFav'=>'Αφαίρεση από τα Αγαπημένα', //cpg1.3.0
	'iptcTitle'=>'IPTC Tίτλος', //cpg1.3.0
	'iptcCopyright'=>'IPTC Copyright', //cpg1.3.0
	'iptcKeywords'=>'IPTC Keywords', //cpg1.3.0
	'iptcCategory'=>'IPTC Κατηγορία', //cpg1.3.0
	'iptcSubCategories'=>'IPTC Υποκατηγορίες', //cpg1.3.0
);

$lang_display_comments = array(
	'OK' => 'OK',
	'edit_title' => 'Μετατροπή σχόλιου',
	'confirm_delete' => 'Είστε σίγουρος πως θέλετε να διαγράψετε αυτό το σχόλιο ?', //js-alert
	'add_your_comment' => 'Προσθήκη σχόλιου',
        'name'=>'Ονομα', 
        'comment'=>'Σχόλιο', 
        'your_name' => 'Ανώνυμος', 
);

$lang_fullsize_popup = array( 
        'click_to_close' => 'Πατήστε στην εικόνα για να κλείσετε αυτό το παράθυρο', 
); 

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
	'title' => 'Στείλτε μια ηλεκτρονική κάρτα',
	'invalid_email' => '<b>Προειδοποίηση</b> : η διεύθυνση e-mail δεν είναι εγκυρη !',
	'ecard_title' => 'Μια ηλεκτρονική κάρτα από τον %s για εσάς',
	'error_not_image' => 'Μόνο εικόνες μπορούν να αποσταλούν σαν ηλεκτρονικές κάρτες.', //cpg1.3.0
	'view_ecard' => 'Εαν η ηλεκτρονική κάρτα δεν εμφανιστεί σωστά, πατήσατε αυτήν την διασύνδεση',
	'view_more_pics' => 'Πατήσατε αυτή την διασύνδεση για να δείτε περισσότερες φωτογραφίες !',
	'send_success' => 'Η ηλεκτρονική σας κάρτα αποστάλει',
	'send_failed' => 'Συγνώμη, αλλά ο διακομιστής δεν μπορεί να στείλει την ηλεκτρονική σας κάρτα...',
	'from' => 'Από',
	'your_name' => 'ΤΟ όνομα σας',
	'your_email' => 'Η διεύθυνση email σας',
	'to' => 'Προς',
	'rcpt_name' => 'Ονομα παραλήπτη',
	'rcpt_email' => 'Διεύθυνση email παραλήπτη',
	'greetings' => 'Με φιλικούς χαιρετισμούς',
	'message' => 'Μήνυμα',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
	'pic_info' => 'Πληροφορίες&nbsp;αρχείου', //cpg1.3.0
	'album' => 'Aλμπουμ',
	'title' => 'Tίτλος',
	'desc' => 'Περιγραφή',
	'keywords' => 'Λέξεις κλειδιά',
	'pic_info_str' => '%sx%s - %sKB - %s εμφανίσεις - %s ψήφοι',
	'approve' => 'Εγκριση αρχείου',
	'postpone_app' => 'Αρνηση έγκρισης',
	'del_pic' => 'Διαγραφή αρχείου', //cpg1.3.0
	'read_exif' => 'Ανάγνωση πληροφοριών EXIF ξανά', //cpg1.3.0
	'reset_view_count' => 'Μηδενισμός μετρητή εμφανίσεων',
	'reset_votes' => 'Μηδενισμός ψήφων',
	'del_comm' => 'Διαγραφή σχόλιων',
	'upl_approval' => 'Εγκριση προσθήκης',
	'edit_pics' => 'Μετατροπή αρχείων',
	'see_next' => 'Εμφάνιση επόμενου αρχείου',
	'see_prev' => 'Εμφάνιση προηγούμενου αρχείου',
	'n_pic' => '%s αρχεία', //cpg1.3.0
	'n_of_pic_to_disp' => 'Αριθμός αρχείων προς εμφάνιση', //cpg1.3.0
	'apply' => 'Εφαρμογή τροποποιήσεων', //cpg1.3.0
	'crop_title' => 'Coppermine Picture Editor', //cpg1.3.0
	'preview' => 'Προεπισκόπηση', //cpg1.3.0
	'save' => 'Αποθήκευση φωτογραφίας', //cpg1.3.0
	'save_thumb' =>'Αποθήκευση ως thumbnail', //cpg1.3.0
	'sel_on_img' =>'Η επιλογή πρέπει να είναι ολόκληρη πάνω στην φωτογραφία!', //js-alert //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File faq.php //cpg1.3.0, not yet translated
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
	'faq' => 'Συνηθισμένες ερωτήσεις (FAQ)', //cpg1.3.0
	'toc' => 'Περιεχόμενα', //cpg1.3.0
	'question' => 'Ερώτηση: ', //cpg1.3.0
	'answer' => 'Απάντηση: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'General FAQ', //cpg1.3.0
  array('Why do I need to register?', 'Registration may or may not be required from the administrator. Registration gives a member additional features such as uploading, having a favorite list, rating pictures and posting comments etc.', 'allow_user_registration', '0'), //cpg1.3.0
  array('How do I register?', 'Go to &quot;Register&quot; and fill out the required fields (and the optional ones if you want to).<br />If the Administrator has Email Activation enabled ,then after submitting your information you should recieve an email message at the address that you have submitted while registering, giving you instructions on how to activate your membership. Your membership must be activated in order for you to login.', 'allow_user_registration', '1'), //cpg1.3.0
  array('How Do I login?', 'Go to &quot;Login&quot;, submit your username and password and check &quot;Remember Me&quot; so you will be logged in on the site if you should leave it.<br /><b>IMPORTANT:Cookies must be enabled and the cookie from this site must not be deleted in order to use &quot;Remember Me&quot;.</b>', 'offline', 0), //cpg1.3.0
  array('Why can I not login?', 'Did you register and replied to the link that was sent to you via email?. The link will activate your account. For other login probelms contact the site administrator.', 'offline', 0), //cpg1.3.0
  array('What if I forgot my password?', 'If this site has a &quot;Forgot password&quot; link then use it. Other than that contact the site administrator for a new password.', 'offline', 0), //cpg1.3.0
  array('What if I changed my email address?', 'Just simply login and change yor email address through &quot;Profile&quot;', 'offline', 0), //cpg1.3.0
  array('How do I save a picture to &quot;My Favorites&quot;?', 'Click on a picture and click on the &quot;picture info&quot; link (<img src="images/info.gif" width="16" height="16" border="0" alt="Picture information" />); scroll down to the picture information set and click &quot;Add to fav&quot;.<br />The administrator may have the &quot;picture information&quot; on by default.<br />IMPORTANT:Cookies must be enabled and the cookie from this site must not be deleted.', 'offline', 0), //cpg1.3.0
  array('How do I rate a picture?', 'Click on a thumbnailed picture and go to the bottom and choose a rating.', 'offline', 0), //cpg1.3.0
  array('How do I post a comment for a picture?', 'Click on a thumbnailed picture and go to the bottom and post a comment.', 'offline', 0), //cpg1.3.0
  array('How do I upload a picture?', 'Go to &quot;Upload Picture&quot;and select the album that you want to upload to,click &quot;Browse&quot; and find the picture to upload and click &quot;open&quot; (add a title and decription if you want to) and click &quot;Submit&quot;', 'allow_private_albums', 0), //cpg1.3.0
  array('Where do I upload a picture to?', 'You will be able to upload a picture to one of your albums in &quot;My Gallery&quot;. The Administrator may also allow you to upload a picture to one or more of the albums in the Main Gallery.', 'allow_private_albums', 0), //cpg1.3.0
  array('What type and size of a picture can I upload?', 'The size and type (jpg,gif,..etc.) is up to the administrator.', 'offline', 0), //cpg1.3.0
  array('What is &quot;My Gallery&quot;?', '&quot;My Gallery&quot; is a personal gallery that the user can upload to and manage.', 'allow_private_albums', 0), //cpg1.3.0
  array('How do I create,rename or delete an album in &quot;My Gallery&quot;?', 'You should already be in &quot;Admin-Mode&quot;<br />Go to &quot;Create/Order My Albums&quot;and click &quot;New&quot;. Change &quot;New Album&quot; to your desired name.<br />You can also rename any of the albums in your gallery.<br />Click &quot;Apply Modifications&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('How can I modify and restrict users from viewing my albums?', 'You should already be in &quot;Admin. Mode&quot;<br />Go to &quot;Modify My Albums. On the &quot;Update Album&quot; bar, select the album that you want to modify.<br />Here, you can change the name, description, thumbnail picture, restrict viewing and comment/rating permissions.<br />Click &quot;Update Album&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('How can I view other users galleries?', 'Go to &quot;Album List&quot; and select &quot;User Galleries&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('What are cookies?', 'Cookies are a plain text pice of data that is sent from a website and is put on to your computer.<br />Cookies usually allow a user to leave and return to the site without having to login again and other various chores.', 'offline', 0), //cpg1.3.0
  array('Where can I get this program for my site?', 'Coppermine is a free Multimedia Gallery, released under GNU GPL. It is full of features and has been ported to various platforms. Visit the <a href="http://coppermine.sf.net/">Coppermine Home Page</a> to find out more or download it.', 'offline', 0), //cpg1.3.0

  'Navigating the Site', //cpg1.3.0
  array('What\'s &quot;Album List&quot;?', 'This will show you the entire gallery with a link to each catagory. Thumbnails may be a link to the catagory.', 'offline', 0), //cpg1.3.0
  array('What\'s &quot;My Gallery&quot;?', 'This feature lets a user create their own gallery and add,delete or modify albums as well as upload to them.', 'allow_private_albums', 0), //cpg1.3.0
  array('What\'s the difference between &quot;Admin Mode&quot; and &quot;User Mode&quot;?', 'This feature, when in admin-mode, allows a user to modify their gallery (as well as others if allowed by the administrator).', 'allow_private_albums', 0), //cpg1.3.0
  array('What\'s &quot;Upload Picture&quot;?', 'This feature allows a user to upload a picture (size and type is set by the site administrator) to a gallery selected by either you or the administrator.', 'allow_private_albums', 0), //cpg1.3.0
  array('What\'s &quot;Last Uploads&quot;?', 'This feature shows the last uploads uploaded to the site.', 'offline', 0), //cpg1.3.0
  array('What\'s &quot;Last Comments&quot;?', 'This feature shows the last comments along with the picture posted by users.', 'offline', 0), //cpg1.3.0
  array('What\'s &quot;Most Viewed&quot;?', 'This feature shows the most viewed pictures by all users (whether logged in or not).', 'offline', 0), //cpg1.3.0
  array('What\'s &quot;Top Rated&quot;?', 'This feature shows the top rated pictures rated by the users, showing the average rating (e.g: five users each gave a <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: the picture would have an average rating of <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;Five users rated the picture from 1 to 5 (1,2,3,4,5) would result in an average <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />The ratings go from <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (best) to <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (worst).', 'offline', 0), //cpg1.3.0
  array('What\'s &quot;My Favorites&quot;?', 'This feature will let a user store a favorite picture in the cookie that was sent to your computer.', 'offline', 0), //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Υπενθύμιση κωδικού', //cpg1.3.0
  'err_already_logged_in' => 'Εχετε ήδη κάνει loggin !', //cpg1.3.0
  'enter_username_email' => 'Εισάγετε το όνομα χρήστη σας ή την email σας', //cpg1.3.0
  'submit' => 'υποβολή', //cpg1.3.0
  'failed_sending_email' => 'Η υπενθύμιση κωδικού δεν μπορεί να αποσταλεί!', //cpg1.3.0
  'email_sent' => 'Το email με το όνομα χρήστη σας και τον κωδικό σας στάλθηκαν στην %s', //cpg1.3.0
  'err_unk_user' => 'Ο επιλεγμένος χρήστης δεν υπάρχει!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - Υπενθύμιση κωδικού', //cpg1.3.0
  'passwd_reminder_body' => 'Εχετε ζητήσει να σας υπενθυμίσει το πρόγραμμα τα στοιχεία login σας:
Ονομα χρήστη: %s
Κωδικός: %s
Πατήστε %s για να εισέλθετε.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
	'group_name' => 'Ονομα ομάδας',
	'disk_quota' => 'Διαθέσιμος χώρος',
	'can_rate' => 'Μπορούν να βαθμολογήσουν αρχεία', //cpg1.3.0
	'can_send_ecards' => 'Μπορούν να στείλουν ηλεκτρονικές κάρτες',
	'can_post_com' => 'Μπορούν να δημοσιεύσουν σχόλια',
	'can_upload' => 'Μπορούν να προσθέσουν αρχεία', //cpg1.3.0
	'can_have_gallery' => 'Μπορούν να έχουν προσωπικό φώτο άλμπουμ',
	'apply' => 'Εφαρμογή τροποποιήσεων',
	'create_new_group' => 'Δημιουργία νέας ομάδας',
	'del_groups' => 'Διαγραφή επιλεγμένης ομάδας',
	'confirm_del' => 'Προσοχή, όταν διαγράφετε μια ομάδα, οι χρήστες που ανήκουν σε αυτήν την ομάδα θα μεταφερθουν στην ομάδα των \'Εγγεγραμένων\' !\n\nΘέλετε να συνεχίσετε ?', //js-alert //cpg1.3.0
	'title' => 'Διαχείρηση ομάδων χρηστών',
	'approval_1' => 'Δημοσ. Προσθ. δεκτή (1)',
	'approval_2' => 'Προσωπ. Προσθ. δεκτή (2)',
	'upload_form_config' => 'Ρύθμιση φόρμας Προσθήκης Αρχείων', //cpg1.3.0
	'upload_form_config_values' => array( 'Προσθήκη ανά ένα αρχείο', 'Πολλαπλή προσθήκη αρχείων', 'Προσθήκη μόνο URI', 'Προσθήκη ZIP αρχείων μόνο', 'Αρχεία-URI', 'Αρχεία-ZIP', 'URI-ZIP', 'Αρχεία-URI-ZIP'), //cpg1.3.0
	'custom_user_upload'=>'Οι χρήστες να μπορούν να επιλέγουν το πλήθος των boxes για προσθήκη?', //cpg1.3.0
	'num_file_upload'=>'Mέγιστος/ακριβής αριθμός για το πλήθος boxes για προσθήκη', //cpg1.3.0
	'num_URI_upload'=>'Mέγιστος/ακριβής αριθμός για πλήθος URI για προσθήκη', //cpg1.3.0
	'note1' => '<b>(1)</b> Προσθήκες σε ένα δημόσιο άλμπουμ απαιτεί την έγκριση του διαχειριστή',
	'note2' => '<b>(2)</b> Προσθήκες σε ένα προσωπικό άλμπουμ απαιτεί την έγκριση του διαχειριστή',
	'notes' => 'Σημειώσεις'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
	'welcome' => 'Καλωσήρθατε !'
);

$lang_album_admin_menu = array(
	'confirm_delete' => 'Ειστε σίγουρος πως θέλετε να διαγράψετε αυτο το άλμπουμ ? \\nΟλα τα αρχεία και τα σχόλια θα χαθούν επίσης.', //js-alert //cpg1.3.0
	'delete' => 'ΔΙΑΓΡΑΦΗ',
	'modify' => 'ΤΡΟΠΟΠΟΙΗΣΗ',
	'edit_pics' => 'ΕΠΕΞΕΡΓΑΣΙΑ ΑΡΧΕΙΩΝ', //cpg1.3.0
);

$lang_list_categories = array(
	'home' => 'Αρχική',
	'stat1' => '<b>[pictures]</b> αρχεία σε <b>[albums]</b> άλμπουμ και <b>[cat]</b> κατηγορίες με <b>[comments]</b> σχόλια, τα οποίες έχουν εμφανιστεί <b>[views]</b> φορές', //cpg1.3.0
	'stat2' => '<b>[pictures]</b> αρχεία σε <b>[albums]</b> αλμπουμ, τα οποία έχουν εμφανιστεί <b>[views]</b> φορές', //cpg1.3.0
	'xx_s_gallery' => '%s\'s Φώτο άλμπουμ',
	'stat3' => '<b>[pictures]</b> αρχεία σε <b>[albums]</b> άλμπουμ με <b>[comments]</b> σχόλια, τα οποία έχουν εμφανιστεί <b>[views]</b> φορές', //cpg1.3.0
);

$lang_list_users = array(
	'user_list' => 'Κατάλογος Χρηστών',
	'no_user_gal' => 'Δεν υπάρχουν χρήστες που να τους επιτρέπετε να έχουν άλμπουμ',
	'n_albums' => '%s άλμπουμ',
	'n_pics' => '%s αρχείο(α)', //cpg1.3.0
);

$lang_list_albums = array(
	'n_pictures' => '%s αρχεία', //cpg1.3.0
	'last_added' => ', το τελευταίο προστέθηκε στις %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
	'login' => 'Είσοδος',
	'enter_login_pswd' => 'Δώστε το Ονομα χρήστη και τον Κωδικό σας για να εισέρθετε',
	'username' => 'Ονομα χρήστη',
	'password' => 'Κωδικός',
	'remember_me' => 'Αυτόματη αναγνώριση',
	'welcome' => 'Καλωσήρθατε %s ...',
	'err_login' => '*** Δεν μπορέσατε να εισέρθετε. Ξαναπροσπαθήστε ***',
	'err_already_logged_in' => 'Εχετε ήδη εισέρθει !',
	'forgot_password_link' => 'Ξέχασα τον κωδικό μου', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
	'logout' => 'Εξοδος',
	'bye' => 'Αντίο %s ...',
	'err_not_loged_in' => 'Δεν έχετε εισέρθει !',
);

// ------------------------------------------------------------------------- //
// File phpinfo.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'Πληροφορίες PHP (PHP info)', //cpg1.3.0
  'explanation' => 'Αυτό είναι οι πληροφορίες που δημιουργούνται από την PHP-function <a href="http://www.php.net/phpinfo">phpinfo()</a>, εμφανίζονται μέσα στο Copermine (στην δεξιά γωνία).', //cpg1.3.0
  'no_link' => 'Εαν αφήνετε τους άλλους να βλέπουν τις πληροφορίες του php-info, υπάρχει ρίσκο ασφάλειας και για αυτό αυτή η σελίδα είναι εμφανής μόνο σε εσάς όταν έχετε εισέλθει σαν διαχειριστής. Δεν μπορείτε να δώσετε ένα link αυτής της σελίδας σε άλλους, θα τους αρνηθεί η πρόσβαση.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
	'upd_alb_n' => 'Ενημέρωση άλμπουμ %s',
	'general_settings' => 'Γενικές ρυθμίσεις',
	'alb_title' => 'Τίτλος άλμπουμ',
	'alb_cat' => 'Κατηγορία άλμπουμ',
	'alb_desc' => 'Περιγραφή άλμπουμ',
	'alb_thumb' => 'Aλμπουμ thumbnail',
	'alb_perm' => 'Διακαιώματα για αυτό το άλμπουμ',
	'can_view' => 'Το άλμπουμ μπορεί να εμφανιστεί στους',
	'can_upload' => 'Οι επισκέπτες μπορούν να προσθέσουν φωτογραφίες',
	'can_post_comments' => 'Οι επισκέπτες μπορούν να δημοσιεύσουν σχόλια',
	'can_rate' => 'Οι επισκέπτες μπορούν να βαθμολογήσουν τις φωτογραφίες',
	'user_gal' => 'Φώτο άλμπουμ χρηστών',
	'no_cat' => '* Μη κατηγοριοποιημένο *',
	'alb_empty' => 'Το άλμπουμ είναι άδειο',
	'last_uploaded' => 'Τελευταία προσθήκη',
	'public_alb' => 'Ολοι (δημόσιο άλμπουμ)',
	'me_only' => 'Mόνο εγώ',
	'owner_only' => 'Ο (%s) , ιδιοκτήτης του άλμπουμ',
	'groupp_only' => 'Τα μέλη της ομάδας \'%s\' ',
	'err_no_alb_to_modify' => 'Κανένα άλμπουμ για τροποποίηση στην βάση δεδομένων.',
	'update' => 'Ενημέρωση άλμπουμ', //cpg1.3.0
	'notice1' => '(*) εξαρτάτε από των %sgroups%s τις ρυθμίσεις', //cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
	'already_rated' => 'Συγνώμη αλλά έχετε ήδη βαθμολογήσει αυτό το αρχείο', //cpg1.3.0
	'rate_ok' => 'Η ψήφος σας έγινε δεκτή',
	'forbidden' => 'Δεν επιτρέπετε να βαθμολογείτε τις δικές σας φωτογραφίες.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Παρόλο που οι διαχειριστές του {SITE_NAME} θα προσπαθήσουν να αφαιρέσουν ή να τροποποιήσουν κάθε προσπάθεια προσβολής το συντομότερο δυνατό, είναι αδύνατο να επιβλέπουν κάθε δημοσιευμένο σχόλιο. Για αυτό αποδέχεστε ότι κάθε σχόλιο που δημοσιεύεται σε αυτό το site εκφράζει μόνο την άποψη και την γνώμη του συντάκτη του και κανενός άλλου.<br />
<br />
Με το παρόν, συμφωνείτε να μην δημοσιεύσετε ειρωνικά, μειωτικά, υβριστικά, κακοήθη, σεξουαλικά ή άλλου είδους προσβλητικά σχόλια που εναντιώνονται στους τρέχοντες νόμους και ήθη. Αποδέχεστε ότι οι διαχειριστές του {SITE_NAME} έχουν το δικαίωμα να αφαιρέσουν ή να τροποποιήσουν κάθε τι κατά την κρίση τους. Σαν χρήστης αποδέχεστε ότι κάθε πληροφορία που έχετε εισάγει θα καταχωρηθεί στην βάση δεδομένων. Παρόλο που κάθε πληροφορία σας θεωρείτε εμπιστευτική, και δεν θα δοθεί πουθενά χωρίς την άδεια σας οι διαχειριστές δεν μπορούν να σας διασφαλίσουν σε περίπτωση προσπάθειας hacking που μπορεί να οδηγήσει σε κλοπή πληροφοριών.<br />
<br />
Αυτό το site χρησιμοποιεί cookies για να αποθηκεύσει πληροφορίες τοπικά στον υπολογιστή σας. Αυτά τα cookies εξυπηρετούν μόνο την δικιά σας ικανοποίηση κατά την περιήγηση στις σελίδες. Η διεύθυνση email που σας ζητείτε είναι μόνο για να πιστοποιήσει για την εγγραφή σας τις πληροφορίες και τον Κωδικό σας.<br />
<br />
Επιλέγοντας 'Συμφωνώ' παρακάτω, αποδέχεστε αυτούς τους όρους.
EOT;

$lang_register_php = array(
	'page_title' => 'Εγγραφή χρήστη',
	'term_cond' => 'Οροι χρήσης',
	'i_agree' => 'Συμφωνώ',
	'submit' => 'Αποστολή εγγραφής',
	'err_user_exists' => 'Το Ονομα Χρήστη που εισάγατε υπάρχει ήδη, παρακαλώ διαλέξτε κάποιο άλλο',
	'err_password_mismatch' => 'Οι δύο Κωδικοί δεν είναι ίδιοι, παρακαλώ εισάγετέ τους ξανά',
	'err_uname_short' => 'Το Ονομα Χρήστη πρέπει να είναι τουλάχιστον 2 χαρακτήρες',
	'err_password_short' => 'Ο Κωδικός πρέπει να είναι τουλάχιστο 2 χαρακτήρες',
	'err_uname_pass_diff' => 'Το Ονομα Χρήστη και ο Κωδικός πρέπει να είναι διαφορετικά',
	'err_invalid_email' => 'Η διεύθυνση email δεν είναι έγκυρη',
	'err_duplicate_email' => 'Κάποιος άλλος χρήστης έχει ήδη εγγραφεί με την διεύθυνση email που δώσατε',
	'enter_info' => 'Καταχώρηση πληροφοριών εγγραφής',
	'required_info' => 'Υποχρεωτικές πληροφορίες',
	'optional_info' => 'Προαιρετικές πληροφορίες',
	'username' => 'Ονομα Χρήστη',
	'password' => 'Κωδικός',
	'password_again' => 'Ξαναδώστε τον Κωδικό',
	'email' => 'Email',
	'location' => 'Τοποθεσία',
	'interests' => 'Ενδιαφέροντα',
	'website' => 'Προσωπική σελίδα',
	'occupation' => 'Επάγγελμα',
	'error' => 'ΛΑΘΟΣ',
	'confirm_email_subject' => '%s - Πιστοποιηση εγγραφής',
	'information' => 'Πληροφορίες',
	'failed_sending_email' => 'Το email για την πιστοποίηση εγγραφής δεν μπορεί να αποσταλεί !',
	'thank_you' => 'Ευχαριστούμε για την εγγραφή σας.<br /><br />Ενα email με πληροφορίες για το πως θα ενεργοποιήσετε τον λογαριασμό σας απεστάλει στην διεύθυνση email που δώσατε.',
	'acct_created' => 'Ο λογαριασμός σας πλέον υπάρχει και μπορείτε να εισέρθετε χρησιμοποιώντας το Ονομα Χρήστη και τον Κωδικό σας',
	'acct_active' => 'Ο λογαριασμός σας είναι πλέον ενεργός και μπορείτε να εισέρθετε με το Ονομα Χρήστη και τον Κωδικό σας',
	'acct_already_act' => 'Ο λογαριασμός σας είναι ήδη ενεργός !',
	'acct_act_failed' => 'Αυτός ο λογαριασμός δεν μπορεί να ενεργοποιηθεί !',
	'err_unk_user' => 'Ο επιλεγμένος χρήστης δεν υπάρχει !',
	'x_s_profile' => 'Το προφίλ του %s',
	'group' => 'Ομάδα',
	'reg_date' => 'Προσήλθε',
	'disk_usage' => 'Χρήση χώρου',
	'change_pass' => 'Αλλαγή Κωδικού',
	'current_pass' => 'Παρών Κωδικός',
	'new_pass' => 'Nέος Κωδικός',
	'new_pass_again' => 'Δώστε πάλι τον Νέο Κωδικό',
	'err_curr_pass' => 'Ο παρών Κωδικός είναι λαθασμένος',
	'apply_modif' => 'Εφαρμογή τροποποιήσεων',
	'change_pass' => 'Αλαγή του Κωδικού μου',
	'update_success' => 'Το προφίλ ανανεώθηκε',
	'pass_chg_success' => 'Ο Κωδικός σας άλλαξε',
	'pass_chg_error' => 'Ο Κωδικός σας δεν άλλαξε',
	'notify_admin_email_subject' => '%s - Ενημέρωση για νέα εγγραφή', //cpg1.3.0
	'notify_admin_email_body' => 'Ενας νέο μέλος με όνομα χρήστη "%s" εγγράφηκε στην γκαλλερί σας', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
Ευχαριστούμε που εγγραφήκατε στο {SITE_NAME}

Το Ονομα Χρήστη σας είναι : "{USER_NAME}"
Ο Κωδικός σας είναι : "{PASSWORD}"

Για να ενεργοποιήσετε τον λογαριασμό σας, πρέπει να πατήσετε την παρακάτω διασύνδεση
ή να την αντιγράψετε στον web browser σας.

{ACT_LINK}

Με φιλικούς χαιρετισμούς,

Οι διαχειριστές του {SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
	'title' => 'Επισκόπηση σχολιων',
	'no_comment' => 'Δεν υπάρχουν σχόλια για επισκόπηση',
	'n_comm_del' => '%s σχόλιο(α) διαγράφηκε(αν)',
	'n_comm_disp' => 'Αριθμός σχόλιων προς εμφάνιση',
	'see_prev' => 'Εμφάνιση προηγούμενου',
	'see_next' => 'Εμφάνιση επόμενου',
	'del_comm' => 'Διαγραφή επιλεγμένων σχολιων',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
	0 => 'Αναζήτηση στην συλλογή φωτογραφιών',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
	'page_title' => 'Αναζήτηση νέων αρχείων', //cpg1.3.0
	'select_dir' => 'Επιλογή καταλόγου',
	'select_dir_msg' => 'Αυτή η λειτουργία σας επιτρέπει να προσθέσετε πλήθος αρχείων που έχετε ανεβάσει στον διακομιστή σας μέσω FTP.<br /><br />Επιλέξτε τον κατάλογο οπου ανεβάσατε τα αρχεία σας', //cpg1.3.0
	'no_pic_to_add' => 'Δεν υπάρχει αρχείο για προσθήκη', //cpg1.3.0
	'need_one_album' => 'Χρειάζεστε τουλάχιστο ένα άλμπουμ για να χρησιμοποιήσετε αυτή την λειτουργία',
	'warning' => 'Προειδοποίηση',
	'change_perm' => 'το πρόγραμμα δεν μπορεί να γράψει σε αυτό τον κατάλογο, πρέπει να αλλάξετε την κατάσταση του καταλόγου (CHMOD) σε 755 ή 777 πριν προσπαθήσετε να προσθέσετε τα αρχεία!', //cpg1.3.0
	'target_album' => '<b>Εισαγωγή αρχείων &quot;</b>%s<b>&quot; στο </b>%s', //cpg1.3.0
	'folder' => 'Κατάλογος',
	'image' => 'Εικόνα',
	'album' => 'Aλμπουμ',
	'result' => 'Αποτέλεσμα',
	'dir_ro' => 'Δεν μπορεί να εγγραφεί. ',
	'dir_cant_read' => 'Δεν μπορεί να διαβαστεί. ',
	'insert' => 'Προσθέτοντας νέα αρχεία στο φώτο άλμπουμ', //cpg1.3.0
	'list_new_pic' => 'Λίστα αρχείων', //cpg1.3.0
	'insert_selected' => 'Εισαγωγή επιλεγμένων αρχείων', //cpg1.3.0
	'no_pic_found' => 'Δεν βρέθηκαν νέα αρχεία', //cpg1.3.0
	'be_patient' => 'Παρακαλώ να είστε υπομονετικοί, το πρόγραμμα χρειάζετε λίγη ώρα για να προσθέσει τα αρχεία...', //cpg1.3.0
	'no_album' => 'Δεν επιλέξατε άλμπουμ',  //cpg1.3.0
	'notes' =>  '<ul>'.
				'<li><b>OK</b> : σημαίνει πως το αρχείο εισήχθει επιτυχώς'.
				'<li><b>DP</b> : σημαίνει πως το αρχείο υπάρχει ήδη στην βάση δεδομένων'.
				'<li><b>PB</b> : σημαίνει πως το αρχείο δεν μπορεί να προστεθεί, ελένξτε τις ρυθμίσεις σας και αν έχετε άδεια να χρησιμοποιήσετε τους καταλόγους που βρίσκονται τα αρχεία'.
				'<li><b>NA</b> : σημαίνει πως δεν επιλέξατε ένα άλμπουμ για να πάνε τα αρχεία, πατήστε \'<a href="javascript:history.back(1)">επιστροφή</a>\' και επιλέξτε ένα άλμπουμ. Εαν δεν υπάρχει άλμπουμ <a href="albmgr.php">δημιουργήστε</a> πρώτα κάποιο</li>'.
				'<li>Εαν τα OK, DP, PB, ΝΑ \'signs\' δεν εμφανίζονται, επιλέξτε πάνω στην μη εμφανιθείσα εικόνα τους να δείτε τι πρόβλημα παρουσιάστηκε από την γλώσσα PHP'.
				'<li>Εαν εμφανίσει ο browser σας timeout, ξαναφορτώστε την σελίδα με reload'.
				'</ul>', //cpg1.3.0
	'select_album' => 'επιλέξτε άλμπουμ', //cpg1.3.0
	'check_all' => 'Επιλογή όλων', //cpg1.3.0
	'uncheck_all' => 'Αποεπιλογή όλων', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- // 
// File banning.php 
// ------------------------------------------------------------------------- // 

if (defined('BANNING_PHP')) $lang_banning_php = array( 
	'title' => 'Αποκλεισμός χρηστών', 
	'user_name' => 'Ονομα χρήστη', 
	'ip_address' => 'Διεύθυνση IP', 
	'expiry' => 'Λήξη (να μείνει κενό εάν είναι μόνιμη)', 
	'edit_ban' => 'Αποθήκευση αλλαγών', 
	'delete_ban' => 'Διαγραφή', 
	'add_new' => 'Προσθήκη χρήστη για αποκλεισμό', 
	'add_ban' => 'Προσθήκη',
	'error_user' => 'Ο χρήστης δεν μπορεί να βρεθεί', //cpg1.3.0
	'error_specify' => 'Πρέπει να δώσετε ένα όνομα χρήστη ή μια IP διεύθυνση', //cpg1.3.0
	'error_ban_id' => 'Μη επιτρεπτό ID για αποκλεισμό!', //cpg1.3.0
	'error_admin_ban' => 'Δεν μπορείτε να αποκλείσετε το εαυτό σας!', //cpg1.3.0
	'error_server_ban' => 'Προσπαθείτε να αποκλείσετε τον ίδιο σας τον σέρβερ? Μπαααα... αυτό δεν γίνεται!', //cpg1.3.0
	'error_ip_forbidden' => 'Δεν μπορείτε να αποκλείσετε αυτήν την IP (δεν είναι routable)', //cpg1.3.0
	'lookup_ip' => 'Ελεγχος μιας IP διεύθυνσης', //cpg1.3.0
	'submit' => 'υποβολή!', //cpg1.3.0
); 



// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
	'title' => 'Προσθήκη αρχείου', //cpg1.3.0
	'custom_title' => 'Τροποποιημένη Φόρμα αίτησης', //cpg1.3.0
	'cust_instr_1' => 'Μπορείτε να επιλέξετε τον αριθμό boxes για προσθήκη. Παρόλα αυτά, δεν μπορείτε να επιλέξετε περισσότερα από το όριο που εμφανίζεται πιο κάτω.', //cpg1.3.0
	'cust_instr_2' => 'Αριθμός ζητούμενων Box', //cpg1.3.0
	'cust_instr_3' => 'Βoxes για προσθήκη αρχείων: %s', //cpg1.3.0
	'cust_instr_4' => 'URI/URL boxes προσθήκης: %s', //cpg1.3.0
	'cust_instr_5' => 'URI/URL boxes προσθήκης:', //cpg1.3.0
	'cust_instr_6' => 'Βoxes για προσθήκη αρχείων:', //cpg1.3.0
	'cust_instr_7' => 'Παρακαλώ εισάγετε τον αριθμό για κάθε τύπο box προσθήκης που επιθυμείτε αυτή την στιγμή. Μετά επιλέξτε \'Συνέχεια\'. ', //cpg1.3.0
	'reg_instr_1' => 'Μη έγκυρη ενέργεια για δημιουργία φόρμας.', //cpg1.3.0
	'reg_instr_2' => 'Τώρα μπορείτε να προσθέσετε τα αρχεία σας χρησιμοποιώντας τα boxes παρακάτω. Tο μέγεθος των αρχείων για προσθήκη από το τερματικό σας στον server δεν θα πρέπει να ξεπερνά τα %s KB κάθε φορά. Τα ZIP αρχεία που προστέθηκαν στους τομείς \'Προσθήκη Αρχείων\' και \'Προσθήκη URI/URL\' θα παραμείνουν συμπιεσμένα.', //cpg1.3.0
	'reg_instr_3' => 'If you want the zipped file or archive to be decompressed, you must use the file upload box provided in the \'Decompressive ZIP Upload\' area.', //cpg1.3.0
	'reg_instr_4' => 'Οταν χρησιμοποιείτε τον τομέα προσθήκης URI/URL, παρακαλείστε να γράφετε το path για το αρχείο έτσι: http://www.mysite.com/images/example.jpg', //cpg1.3.0
	'reg_instr_5' => 'Οταν συμπληρώσετε την φόρμα, παρακαλώ επιλέξτε \'Συνέχεια\'.', //cpg1.3.0
	'reg_instr_6' => 'Decompressive ZIP προσθήκες:', //cpg1.3.0
	'reg_instr_7' => 'προσθήκες αρχείων:', //cpg1.3.0
	'reg_instr_8' => 'προσθήκες URI/URL:', //cpg1.3.0
	'error_report' => 'Αναφορά λάθους', //cpg1.3.0
	'error_instr' => 'Οι παρακάτω προσπάθειες προσθήκης, δημιούργησαν λάθη:', //cpg1.3.0
	'file_name_url' => 'Αρχείο Ονομα/URL', //cpg1.3.0
	'error_message' => 'Μήνυμα λάθους', //cpg1.3.0
	'no_post' => 'Το αρχείο δεν προστέθηκε από το POST.', //cpg1.3.0
	'forb_ext' => 'Μη επιτρεπτή επέκταση αρχείου.', //cpg1.3.0
	'exc_php_ini' => 'Υπερβαση μεγέθους αρχείου που καθορίζεται στο php.ini.', //cpg1.3.0
	'exc_file_size' => 'Υπέρβαση μεγέθους αρχείου που επιτρέπεται από το CPG.', //cpg1.3.0
	'partial_upload' => 'Μόνο μέρος προστέθηκε.', //cpg1.3.0
	'no_upload' => 'Δεν έγινε προσθήκη.', //cpg1.3.0
	'unknown_code' => 'Αγνωστο λάθος προσθήκης στην PHP.', //cpg1.3.0
	'no_temp_name' => 'Δεν εγινε προσθήκη - δεν υπάρχει προσωρινό όνομα.', //cpg1.3.0
	'no_file_size' => 'Δεν περιέχει data/Corrupted', //cpg1.3.0
	'impossible' => 'Αδύνατο να μετακινηθεί.', //cpg1.3.0
	'not_image' => 'Δεν είναι εικόνα/corrupt', //cpg1.3.0
	'not_GD' => 'Δεν είναι επέκταση της GD.', //cpg1.3.0
	'pixel_allowance' => 'Υπέρβαση επιτρεπτών Pixel.', //cpg1.3.0
	'incorrect_prefix' => 'Λάθος πρόθεμα URI/URL', //cpg1.3.0
	'could_not_open_URI' => 'Δεν μπόρεσε να ανοίξει το URI.', //cpg1.3.0
	'unsafe_URI' => 'Η ασφάλεια δεν μπορεί να πιστοποιηθεί.', //cpg1.3.0
	'meta_data_failure' => 'πρόβλημα στα Meta data', //cpg1.3.0
	'http_401' => '401 Anauthorized', //cpg1.3.0
	'http_402' => '402 Payment Required', //cpg1.3.0
	'http_403' => '403 Forbidden', //cpg1.3.0
	'http_404' => '404 Not Found', //cpg1.3.0
	'http_500' => '500 Internal Server Error', //cpg1.3.0
	'http_503' => '503 Service Unavailable', //cpg1.3.0
	'MIME_extraction_failure' => 'τα MIME δεν μπόρεσαν να καθοριστούν.', //cpg1.3.0
	'MIME_type_unknown' => 'Αγνωστος τύπος MIME', //cpg1.3.0
	'cant_create_write' => 'Δεν κατορθώθηκε να δημιουργηθεί αρχείο εγγραφής.', //cpg1.3.0
	'not_writable' => 'Δεν μπορεί να εγγραφεί το αρχείο εγγραφής.', //cpg1.3.0
	'cant_read_URI' => 'Δεν μπορει να διαβαστεί η URI/URL', //cpg1.3.0
	'cant_open_write_file' => 'Δεν μπορεί να ανοιχτεί η URI του αρχείου εγγραφής.', //cpg1.3.0
	'cant_write_write_file' => 'Δεν μπορεί να εγγραφεί το URI στο αρχείο εγγραφής.', //cpg1.3.0
	'cant_unzip' => 'Δεν μπορεί να αποσυμπιεστεί.', //cpg1.3.0
	'unknown' => 'Αγνωστο λάθος', //cpg1.3.0
	'succ' => 'Επιτυχείς προσθήκες', //cpg1.3.0
	'success' => '%s προσθήκες ήταν επιτυχείς.', //cpg1.3.0
	'add' => 'Παρακαλώ επιλέξτε \'Συνέχεια\' για να προσθέσετε τα αρχεία στα άλμπουμ.', //cpg1.3.0
	'failure' => 'Αποτυχία προσθήκης', //cpg1.3.0
	'f_info' => 'Πληροφορίες αρχείου', //cpg1.3.0
	'no_place' => 'Το προηγούμενο αρχείο δεν μπόρεσε να τοποθετηθεί.', //cpg1.3.0
	'yes_place' => 'Το προηγούμενο αρχείο τοποθετήθηκε επιτυχώς.', //cpg1.3.0
	'max_fsize' => 'Το μέγιστο επιτρεπόμενο μέγεθος αρχείου είναι %s KB',
	'album' => 'Aλμπουμ',
	'picture' => 'Αρχείο', //cpg1.3.0
	'pic_title' => 'Τίτλος αρχείου', //cpg1.3.0
	'description' => 'Περιγραφή αρχείου', //cpg1.3.0
	'keywords' => 'Λέξεις Κλειδιά (διαχωρισμένες με κενά)',
	'err_no_alb_uploadables' => 'Συγνώμη, δεν υπάρχει άλμπουμ που να σας επιτρέπετε η προσθήκη αρχείων',
	'place_instr_1' => 'Παρακαλώ τοποθετήστε τα αρχεία σε άλμουμ τώρα. Μπορείτε επίσης να εισάγετε σχετικές πληροφορίες για κάθε ένα αρχείο.', //cpg1.3.0
	'place_instr_2' => 'Περισσότερα αρχεία χρειάζονται τοποθέτηση. Παρακαλώ επιλέξτε \'Συνέχεια\'.', //cpg1.3.0
	'process_complete' => 'Εχετε τοποθετήσει επιτυχώς όλα τα αρχεία.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
	'title' => 'Διαχείρηση χρηστών',
	'name_a' => 'όνομα, αύξουσα σειρά',
	'name_d' => 'όνομα, φθίνουσα σειρά',
	'group_a' => 'ομάδα, αύξουσα σειρά',
	'group_d' => 'ομάδα, φθίνουσα σειρά',
	'reg_a' => 'ημερομηνία εγγραφής, αύξουσα σειρά',
	'reg_d' => 'ημερομηνία εγγραφής, φθίνουσα σειρά',
	'pic_a' => 'αρίθμηση φωτογραφιών, άυξουσα σειρά',
	'pic_d' => 'αρίθμηση φωτογραφιών, φθίνουσα σειρά',
	'disku_a' => 'χρήση χώρου, αύξουσα σειρά',
	'disku_d' => 'χρήση χώρου, φθίνουσα σειρά',
	'lv_a' => 'Τελευταία επίσκεψη, αύξουσα σειρά', //cpg1.3.0
	'lv_d' => 'Τελευταία επίσκεψη, φθίνουσα σειρά', //cpg1.3.0
	'sort_by' => 'Στοίχηση χρηστών σύμφωνα με',
	'err_no_users' => 'Ο πίνακας χρηστών είναι άδειος !',
	'err_edit_self' => 'Δεν μπορείτε να τροποποιήσετε το προφίλ σας, χρησιμοποιήστε την διασύνδεση \'My profile\' για αυτό',
	'edit' => 'ΤΡΟΠΟΠΟΙΗΣΗ',
	'delete' => 'ΔΙΑΓΡΑΦΗ',
	'name' => 'Ονομα Χρήστη',
	'group' => 'Ομάδα',
	'inactive' => 'Ανενεργός',
	'operations' => 'Λειτουργίες',
	'pictures' => 'Αρχεία', //cpg1.3.0
	'disk_space' => 'Χώρος σε χρήση / Διαθέσιμος',
	'registered_on' => 'Εγγράφηκε στις',
	'last_visit' => 'Τελευταία επίσκεψη', //cpg1.3.0
	'u_user_on_p_pages' => '%d χρήστες σε %d σελίδα(ες)',
	'confirm_del' => 'Είστε σίγουρος πως θέλετε να ΔΙΑΓΡΑΨΕΤΕ αυτόν τον χρήστη ? \\nΟλα τα αρχεία του και τα άλμπουμ του θα διαγραφούν επίσης.', //js-alert //cpg1.3.0
	'mail' => 'MAIL',
	'err_unknown_user' => 'Ο επιλεγμένος χρήστης δεν υπάρχει !',
	'modify_user' => 'Τροποποίηση χρήστη',
	'notes' => 'Σημειώσεις',
	'note_list' => '<li>Εαν δεν θέλετε να αλλάξετε το παρών Κωδικό σας, αφήστε το πεδίο "Κωδικός" κενό',
	'password' => 'Κωδικός',
	'user_active' => 'Ο χρήστης είναι ενεργός',
	'user_group' => 'Ομάδα χρηστών',
	'user_email' => 'Εmail χρήστη',
	'user_web_site' => 'Προσωπική σελίδα χρήστη',
	'create_new_user' => 'Δημιουργία νέου χρήστη',
	'user_location' => 'Τοποθεσία χρήστη',
	'user_interests' => 'Ενδιαφέροντα χρήστη',
	'user_occupation' => 'Επάγγελμα χρήστη',
	'latest_upload' => 'τελευταίες προσθήκες', //cpg1.3.0
	'never' => 'ποτέ', //cpg1.3.0
);

// ------------------------------------------------------------------------- // 
// File util.php 
// ------------------------------------------------------------------------- // 

if (defined('UTIL_PHP')) $lang_util_php = array( 
        'title' => 'Utilities διαχειριστή (αλλαγή μεγέθους φωτογραφιών',  //cpg1.3.0
        'what_it_does' => 'Τι κάνει...', 
        'what_update_titles' => 'Ενημερώνει τίτλους από όνομα αρχείου', 
        'what_delete_title' => 'Διαγράφει τίτλους', 
        'what_rebuild' => 'Ξαναφτιάχνει τα thumbnails και τις φωτογραφίες αλλαγμένου μεγέθους', 
        'what_delete_originals' => 'Διαγράφει τις φωτογραφίες με το αρχικό μέγεθος, αντικαθιστώντας τις με τις άλλες αλλαγμένου μεγέθους', 
        'file' => 'Αρχείο', 
        'title_set_to' => 'ο τίτλος να γίνει', 
        'submit_form' => 'υποβολή', 
        'updated_succesfully' => 'ενημερώθηκε επιτυχώς', 
        'error_create' => 'ΛΑΘΟ‘κατα την δημιουργία', 
        'continue' => 'Συνέχεια με επόμενες φωτό', 
        'main_success' => 'Το αρχείο %s χρησιμοποιήθηκε επιτυχώς σαν το κυρίως αρχείο', //cpg1.3.0 
        'error_rename' => 'Λάθος κατά την μετονομασία από %s σε %s', 
        'error_not_found' => 'Το αρχείο %s δεν βρέθηκε', 
        'back' => 'πίσω στην κεντρική', 
        'thumbs_wait' => 'Ενημέρωση των thumbnails ή/και των φωτογραφιών αλλαγμένου μεγέθους, παρακαλώ περιμένετε...', 
        'thumbs_continue_wait' => 'Συνέχεια με την ενημέρωση των thumbnails ή/και των φωτογραφιών αλλαγμένου μεγέθους...', 
        'titles_wait' => 'Ενημέρωση τίτλων, παρακαλώ περιμένετε...', 
        'delete_wait' => 'Διαγραφή τιτλων, παρακαλώ περιμένετε...', 
        'replace_wait' => 'Διαγραφή προτοτύπων και αντικατάσταση με τις φωτογραφίες αλλαγμένου μεγέθους, παρακαλώ περιμένετε...', 
        'instruction' => 'Γρήγορες οδηγίες', 
        'instruction_action' => 'Επιλογή λειτουργίας', 
        'instruction_parameter' => 'Επιλογή παραμέτρων', 
        'instruction_album' => 'Επιλογή αλμπουμ', 
        'instruction_press' => 'Πατήστε %s', 
        'update' => 'Ενημέρωση thumbs ή/και φωτογραφιών αλλαγμένου μεγέθους', 
        'update_what' => 'Τι θα πρέπει να ενημερωθεί', 
        'update_thumb' => 'Μόνο τα thumbnails', 
        'update_pic' => 'Μόνο οι φωτογραφίες αλλαγμένου μεγέθους', 
        'update_both' => 'Και τα thumbnails και οι φωτογραφίες αλλαγμένου μεγέθους', 
        'update_number' => 'Πλήθος φωτογραφιών που επεξεργάστηκαν ανά κλικ', 
        'update_option' => '(Δηλώστε αυτήν την επιλογή με αριθμό χαμηλότερο αν σας εμφανίζει timeout )', 
        'filename_title' => 'Ονομα αρχείου ? Τίτλος Φωτογραφίας',  //cpg1.3.0
        'filename_how' => 'Πως θα πρεπει να μεταβληθεί ο τίτλος του αρχείου', 
        'filename_remove' => 'Αφαίρεση της επέκτασης .jpg και αντικατάσταση με _ (κάτω παύλα) και κενά', 
        'filename_euro' => 'Αλλαγή 2003_11_23_13_20_20.jpg σε 23/11/2003 13:20', 
        'filename_us' => 'Αλλαγή 2003_11_23_13_20_20.jpg σε 11/23/2003 13:20', 
        'filename_time' => 'Αλλαγή 2003_11_23_13_20_20.jpg σε 13:20', 
        'delete' => 'Διαγραφή τίτλων αρχείων ή φωτογραφιών αρχικού μεγέθους', //cpg1.3.0
        'delete_title' => 'Διαγραφή τίτλων αρχείων', //cpg1.3.0
        'delete_original' => 'Διαγραφή φωτογραφιών αρχικού μεγέθους', 
        'delete_replace' => 'Διαγραφή πρωτότυπων φωτογραφιών με αντικατάσταση τους από τις φωτογραφίες αλλαγμένου μεγέθους', 
        'select_album' => 'Επιλογή άλμπουμ',
	'delete_orphans' => 'Διαγραφή ορφανών σχολίων (επενεργεί σε όλα τα άλμπουμ)', //cpg1.3.0
	'orphan_comment' => 'βρέθηκε ορφανό σχόλιο', //cpg1.3.0
	'delete' => 'Διαγραφή', //cpg1.3.0
	'delete_all' => 'Διαγραφή όλων', //cpg1.3.0
	'comment' => 'Σχόλιο: ', //cpg1.3.0
	'nonexist' => 'προσαρτημένο σε μη υπαρκτό αρχείο # ', //cpg1.3.0
	'phpinfo' => 'Εμφάνιση phpinfo', //cpg1.3.0
	'update_db' => 'Ενημέρωση database', //cpg1.3.0
	'update_db_explanation' => 'Εαν εχετε αλλάξει αρχεία του coppermine, προσθέσατε κάποια μετατροπή ή αναβαθμίσατε από προηγούμενη έκδοση του coppermine, σιγουρευτείτε ότι τρέξατε και την αναβάθμιση της βάσης μια φορά. Αυτό θα δημιουργήσει τους απαραίτητους πίνακες και/ή τις απαραίτητες ρυθμίσεις στην coppermine database.', //cpg1.3.0
); 

?>