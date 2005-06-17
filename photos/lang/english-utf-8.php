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
// CVS version: $Id: english-utf-8.php,v 1.9 2004/08/08 11:36:50 caspershadow Exp $
// ------------------------------------------------------------------------- //

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'English',
  'lang_name_native' => 'English',
  'lang_country_code' => 'gb',
  'trans_name'=> 'Coppermine dev team',
  'trans_email' => '',
  'trans_website' => 'http://coppermine.sourceforge.net/',
  'trans_date' => '2004-03-18',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
$lang_month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');

// Some common strings
$lang_yes = 'Yes';
$lang_no  = 'No';
$lang_back = 'BACK';
$lang_continue = 'CONTINUE';
$lang_info = 'Information';
$lang_error = 'Error';

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
  'random' => 'Random files', //cpg1.3.0
  'lastup' => 'Last additions',
  'lastalb'=> 'Last updated albums',
  'lastcom' => 'Last comments',
  'topn' => 'Most viewed',
  'toprated' => 'Top rated',
  'lasthits' => 'Last viewed',
  'search' => 'Search results',
  'favpics'=> 'Favourite Files', //cpg1.3.0
);

$lang_errors = array(
  'access_denied' => 'You don\'t have permission to access this page.',
  'perm_denied' => 'You don\'t have permission to perform this operation.',
  'param_missing' => 'Script called without the required parameter(s).',
  'non_exist_ap' => 'The selected album/file does not exist !', //cpg1.3.0
  'quota_exceeded' => 'Disk quota exceeded<br /><br />You have a space quota of [quota]K, your files currently use [space]K, adding this file would make you exceed your quota.', //cpg1.3.0
  'gd_file_type_err' => 'When using the GD image library allowed image types are only JPEG and PNG.',
  'invalid_image' => 'The image you have uploaded is corrupted or can\'t be handled by the GD library',
  'resize_failed' => 'Unable to create thumbnail or reduced size image.',
  'no_img_to_display' => 'No image to display',
  'non_exist_cat' => 'The selected category does not exist',
  'orphan_cat' => 'A category has a non-existing parent, run the category manager to correct the problem!', //cpg1.3.0
  'directory_ro' => 'Directory \'%s\' is not writable, files can\'t be deleted', //cpg1.3.0
  'non_exist_comment' => 'The selected comment does not exist.',
  'pic_in_invalid_album' => 'File is in a non existant album (%s)!?', //cpg1.3.0
  'banned' => 'You are currently banned from using this site.',
  'not_with_udb' => 'This function is disabled in Coppermine because it is integrated with forum software. Either what you are trying to do is not supported in this configuration, or the function should be handled by the forum software.',
  'offline_title' => 'Offline', //cpg1.3.0
  'offline_text' => 'Gallery is currently offline - check back soon', //cpg1.3.0
  'ecards_empty' => 'There are currently no ecard records to display. Check that you have enabled ecard logging in coppermine config!', //cpg1.3.0
  'action_failed' => 'Action failed.  Coppermine is unable to process your request.', //cpg1.3.0
  'no_zip' => 'The necessary libraries to process ZIP files are not available.  Please contact your Coppermine administrator.', //cpg1.3.0
  'zip_type' => 'You do not have permission to upload ZIP files.', //cpg1.3.0
);

$lang_bbcode_help = 'Following codes might be useful: <li>[b]<b>Bold</b>[/b]</li> <li>[i]<i>Italic</i>[/i]</li> <li>[url=http://yoursite.com/]Url Text[/url]</li> <li>[email]user@domain.com[/email]</li>'; //cpg1.3.0

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'alb_list_title' => 'Go to the album list',
  'alb_list_lnk' => 'Album list',
  'my_gal_title' => 'Go to my personal gallery',
  'my_gal_lnk' => 'My gallery',
  'my_prof_lnk' => 'My profile',
  'adm_mode_title' => 'Switch to admin mode',
  'adm_mode_lnk' => 'Admin mode',
  'usr_mode_title' => 'Switch to user mode',
  'usr_mode_lnk' => 'User mode',
  'upload_pic_title' => 'Upload a file into an album', //cpg1.3.0
  'upload_pic_lnk' => 'Upload file', //cpg1.3.0
  'register_title' => 'Create an account',
  'register_lnk' => 'Register',
  'login_lnk' => 'Login',
  'logout_lnk' => 'Logout',
  'lastup_lnk' => 'Last uploads',
  'lastcom_lnk' => 'Last comments',
  'topn_lnk' => 'Most viewed',
  'toprated_lnk' => 'Top rated',
  'search_lnk' => 'Search',
  'fav_lnk' => 'My Favorites',
  'memberlist_title' => 'Show Memberlist', //cpg1.3.0
  'memberlist_lnk' => 'Memberlist', //cpg1.3.0
  'faq_title' => 'Frequently Asked Questions on the picture gallery &quot;Coppermine&quot;', //cpg1.3.0
  'faq_lnk' => 'FAQ', //cpg1.3.0
);

$lang_gallery_admin_menu = array(
  'upl_app_lnk' => 'Upload approval',
  'config_lnk' => 'Config',
  'albums_lnk' => 'Albums',
  'categories_lnk' => 'Categories',
  'users_lnk' => 'Users',
  'groups_lnk' => 'Groups',
  'comments_lnk' => 'Review Comments', //cpg1.3.0
  'searchnew_lnk' => 'Batch add files', //cpg1.3.0
  'util_lnk' => 'Admin Tools', //cpg1.3.0
  'ban_lnk' => 'Ban Users',
  'db_ecard_lnk' => 'Display Ecards', //cpg1.3.0
);

$lang_user_admin_menu = array(
  'albmgr_lnk' => 'Create / order my albums',
  'modifyalb_lnk' => 'Modify my albums',
  'my_prof_lnk' => 'My profile',
);

$lang_cat_list = array(
  'category' => 'Category',
  'albums' => 'Albums',
  'pictures' => 'Files', //cpg1.3.0
);

$lang_album_list = array(
  'album_on_page' => '%d albums on %d page(s)',
);

$lang_thumb_view = array(
  'date' => 'DATE',
  //Sort by filename and title
  'name' => 'FILE NAME',
  'title' => 'TITLE',
  'sort_da' => 'Sort by date ascending',
  'sort_dd' => 'Sort by date descending',
  'sort_na' => 'Sort by name ascending',
  'sort_nd' => 'Sort by name descending',
  'sort_ta' => 'Sort by title ascending',
  'sort_td' => 'Sort by title descending',
  'download_zip' => 'Download as Zip file', //cpg1.3.0
  'pic_on_page' => '%d files on %d page(s)',
  'user_on_page' => '%d users on %d page(s)', //cpg1.3.0
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Return to the thumbnail page',
  'pic_info_title' => 'Display/hide file information', //cpg1.3.0
  'slideshow_title' => 'Slideshow',
  'ecard_title' => 'Send this file as an e-card', //cpg1.3.0
  'ecard_disabled' => 'e-cards are disabled',
  'ecard_disabled_msg' => 'You don\'t have permission to send ecards', //js-alert //cpg1.3.0
  'prev_title' => 'See previous file', //cpg1.3.0
  'next_title' => 'See next file', //cpg1.3.0
  'pic_pos' => 'FILE %s/%s', //cpg1.3.0
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Rate this file ', //cpg1.3.0
  'no_votes' => '(No vote yet)',
  'rating' => '(current rating : %s / 5 with %s votes)',
  'rubbish' => 'Rubbish',
  'poor' => 'Poor',
  'fair' => 'Fair',
  'good' => 'Good',
  'excellent' => 'Excellent',
  'great' => 'Great',
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
  'file' => 'File: ',
  'line' => 'Line: ',
);

$lang_display_thumbnails = array(
  'filename' => 'Filename : ',
  'filesize' => 'Filesize : ',
  'dimensions' => 'Dimensions : ',
  'date_added' => 'Date added : ', //cpg1.3.0
);

$lang_get_pic_data = array(
  'n_comments' => '%s comments',
  'n_views' => '%s views',
  'n_votes' => '(%s votes)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Debug Info', //cpg1.3.0
  'select_all' => 'Select All', //cpg1.3.0
  'copy_and_paste_instructions' => 'If you\'re going to request help on the coppermine support board, copy-and-paste this debug output into your posting. Make sure to replace any passwords from the query with *** before posting.', //cpg1.3.0
  'phpinfo' => 'display phpinfo', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => 'Default language', //cpg1.3.0
  'choose_language' => 'Choose your language', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'Default theme', //cpg1.3.0
  'choose_theme' => 'Choose a theme', //cpg1.3.0
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
  0 => 'Leaving admin mode...',
  1 => 'Entering admin mode...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Albums need to have a name !', //js-alert
  'confirm_modifs' => 'Are you sure you want to make these modifications ?', //js-alert
  'no_change' => 'You did not make any change !', //js-alert
  'new_album' => 'New album',
  'confirm_delete1' => 'Are you sure you want to delete this album ?', //js-alert
  'confirm_delete2' => '\nAll files and comments it contains will be lost !', //js-alert
  'select_first' => 'Select an album first', //js-alert
  'alb_mrg' => 'Album Manager',
  'my_gallery' => '* My gallery *',
  'no_category' => '* No category *',
  'delete' => 'Delete',
  'new' => 'New',
  'apply_modifs' => 'Apply modifications',
  'select_category' => 'Select category',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Parameters required for \'%s\'operation not supplied !',
  'unknown_cat' => 'Selected category does not exist in database',
  'usergal_cat_ro' => 'User galleries category can\'t be deleted !',
  'manage_cat' => 'Manage categories',
  'confirm_delete' => 'Are you sure you want to DELETE this category', //js-alert
  'category' => 'Category',
  'operations' => 'Operations',
  'move_into' => 'Move into',
  'update_create' => 'Update/Create category',
  'parent_cat' => 'Parent category',
  'cat_title' => 'Category title',
  'cat_thumb' => 'Category thumbnail', //cpg1.3.0
  'cat_desc' => 'Category description',
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
  'title' => 'Configuration',
  'restore_cfg' => 'Restore factory defaults',
  'save_cfg' => 'Save new configuration',
  'notes' => 'Notes',
  'info' => 'Information',
  'upd_success' => 'Coppermine configuration was updated',
  'restore_success' => 'Coppermine default configuration restored',
  'name_a' => 'Name ascending',
  'name_d' => 'Name descending',
  'title_a' => 'Title ascending',
  'title_d' => 'Title descending',
  'date_a' => 'Date ascending',
  'date_d' => 'Date descending',
  'th_any' => 'Max Aspect',
  'th_ht' => 'Height',
  'th_wd' => 'Width',
  'label' => 'label', //cpg1.3.0
  'item' => 'item', //cpg1.3.0
  'debug_everyone' => 'Everyone', //cpg1.3.0
  'debug_admin' => 'Admin only', //cpg1.3.0
        );

if (defined('CONFIG_PHP')) $lang_config_data = array(
  'General settings',
  array('Gallery name', 'gallery_name', 0),
  array('Gallery description', 'gallery_description', 0),
  array('Gallery administrator email', 'gallery_admin_email', 0),
  array('Target address for the \'See more pictures\' link in e-cards', 'ecards_more_pic_target', 0),
  array('Gallery is offline', 'offline', 1), //cpg1.3.0
  array('Log ecards', 'log_ecards', 1), //cpg1.3.0
  array('Allow ZIP-download of favorites', 'enable_zipdownload', 1), //cpg1.3.0

  'Language, Themes &amp; Charset settings',
  array('Language', 'lang', 5),
  array('Theme', 'theme', 6),
  array('Display language list', 'language_list', 1), //cpg1.3.0
  array('Display language flags', 'language_flags', 8), //cpg1.3.0
  array('Display &quot;reset&quot; in language selection', 'language_reset', 1), //cpg1.3.0
  array('Display theme list', 'theme_list', 1), //cpg1.3.0
  array('Display &quot;reset&quot; in theme selection', 'theme_reset', 1), //cpg1.3.0
  array('Display FAQ', 'display_faq', 1), //cpg1.3.0
  array('Display bbcode help', 'show_bbcode_help', 1), //cpg1.3.0
  array('Character encoding', 'charset', 4), //cpg1.3.0

  'Album list view',
  array('Width of the main table (pixels or %)', 'main_table_width', 0),
  array('Number of levels of categories to display', 'subcat_level', 0),
  array('Number of albums to display', 'albums_per_page', 0),
  array('Number of columns for the album list', 'album_list_cols', 0),
  array('Size of thumbnails in pixels', 'alb_list_thumb_size', 0),
  array('The content of the main page', 'main_page_layout', 0),
  array('Show first level album thumbnails in categories','first_level',1),

  'Thumbnail view',
  array('Number of columns on thumbnail page', 'thumbcols', 0),
  array('Number of rows on thumbnail page', 'thumbrows', 0),
  array('Maximum number of tabs to display', 'max_tabs', 10), //cpg1.3.0
  array('Display file caption (in addition to title) below the thumbnail', 'caption_in_thumbview', 1), //cpg1.3.0
  array('Display number of views below the thumbnail', 'views_in_thumbview', 1), //cpg1.3.0
  array('Display number of comments below the thumbnail', 'display_comment_count', 1),
  array('Display uploader name below the thumbnail', 'display_uploader', 1), //cpg1.3.0
  array('Default sort order for files', 'default_sort_order', 3), //cpg1.3.0
  array('Minimum number of votes for a file to appear in the \'top-rated\' list', 'min_votes_for_rating', 0), //cpg1.3.0

  'Image view &amp; Comment settings',
  array('Width of the table for file display (pixels or %)', 'picture_table_width', 0), //cpg1.3.0
  array('File information is visible by default', 'display_pic_info', 1), //cpg1.3.0
  array('Filter bad words in comments', 'filter_bad_words', 1),
  array('Allow smiles in comments', 'enable_smilies', 1),
  array('Allow several consecutive comments on one file from the same user (disable flood protection)', 'disable_comment_flood_protect', 1), //cpg1.3.0
  array('Max length for an image description', 'max_img_desc_length', 0),
  array('Max number of characters in a word', 'max_com_wlength', 0),
  array('Max number of lines in a comment', 'max_com_lines', 0),
  array('Maximum length of a comment', 'max_com_size', 0),
  array('Show film strip', 'display_film_strip', 1),
  array('Number of items in film strip', 'max_film_strip_items', 0),
  array('Notify admin of comments by email', 'email_comment_notification', 1), //cpg1.3.0
  array('Slideshow interval in milliseconds (1 second = 1000 milliseconds)', 'slideshow_interval', 0), //cpg1.3.0

  'Files and thumbnails settings', //cpg1.3.0
  array('Quality for JPEG files', 'jpeg_qual', 0),
  array('Max dimension of a thumbnail <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0), //cpg1.3.0
  array('Use dimension ( width or height or Max aspect for thumbnail )<b>**</b>', 'thumb_use', 7),
  array('Create intermediate pictures','make_intermediate',1),
  array('Max width or height of an intermediate picture/video <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0), //cpg1.3.0
  array('Max size for uploaded files (KB)', 'max_upl_size', 0), //cpg1.3.0
  array('Max width or height for uploaded pictures/videos (pixels)', 'max_upl_width_height', 0), //cpg1.3.0

  'Files and thumbnails advanced settings', //cpg1.3.0
  array('Show private album Icon to unlogged user','show_private',1), //cpg1.3.0
  array('Characters forbidden in filenames', 'forbiden_fname_char',0), //cpg1.3.0
  //array('Accepted file extensions for uploaded pictures', 'allowed_file_extensions',0), //cpg1.3.0
  array('Allowed image types', 'allowed_img_types',0), //cpg1.3.0
  array('Allowed movie types', 'allowed_mov_types',0), //cpg1.3.0
  array('Allowed audio types', 'allowed_snd_types',0), //cpg1.3.0
  array('Allowed document types', 'allowed_doc_types',0), //cpg1.3.0
  array('Method for resizing images','thumb_method',2), //cpg1.3.0
  array('Path to ImageMagick \'convert\' utility (example /usr/bin/X11/)', 'impath', 0), //cpg1.3.0
  //array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types',0), //cpg1.3.0
  array('Command line options for ImageMagick', 'im_options', 0), //cpg1.3.0
  array('Read EXIF data in JPEG files', 'read_exif_data', 1), //cpg1.3.0
  array('Read IPTC data in JPEG files', 'read_iptc_data', 1), //cpg1.3.0
  array('The album directory <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0), //cpg1.3.0
  array('The directory for user files <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0), //cpg1.3.0
  array('The prefix for intermediate pictures <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0), //cpg1.3.0
  array('The prefix for thumbnails <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0), //cpg1.3.0
  array('Default mode for directories', 'default_dir_mode', 0), //cpg1.3.0
  array('Default mode for files', 'default_file_mode', 0), //cpg1.3.0

  'User settings',
  array('Allow new user registrations', 'allow_user_registration', 1),
  array('User registration requires email verification', 'reg_requires_valid_email', 1),
  array('Notify admin of user registration by email', 'reg_notify_admin_email', 1), //cpg1.3.0
  array('Allow two users to have the same email address', 'allow_duplicate_emails_addr', 1),
  array('Users can have private albums (Note: if you switch from \'yes\' to \'no\' any current private albums will become public)', 'allow_private_albums', 1), //cpg1.3.0
  array('Notify admin of user upload awaiting approval', 'upl_notify_admin_email', 1), //cpg1.3.0
  array('Allow logged in users to view memberlist', 'allow_memberlist', 1), //cpg1.3.0

  'Custom fields for image description (leave blank if unused)',
  array('Field 1 name', 'user_field1_name', 0),
  array('Field 2 name', 'user_field2_name', 0),
  array('Field 3 name', 'user_field3_name', 0),
  array('Field 4 name', 'user_field4_name', 0),

  'Cookies settings',
  array('Name of the cookie used by the script (when using bbs integration, make sure it differs from the bbs\'s cookie name)', 'cookie_name', 0),
  array('Path of the cookie used by the script', 'cookie_path', 0),

  'Miscellaneous settings',
  array('Enable debug mode', 'debug_mode', 9), //cpg1.3.0
  array('Display notices in debug mode', 'debug_notice', 1), //cpg1.3.0

  '<br /><div align="left"><a name="notice1"></a>(*) This settings mustn\'t be changed if you already have files in your database.<br />
  <a name="notice2"></a>(**) When changing this setting, only the files that are added from that point on are affected, so it is advisable that this setting must not be changed if there are already files in the gallery. You can, however, apply the changes to the existing files with the &quot;<a href="util.php">admin tools</a> (resize pictures)&quot; utility from the admin menu.</div><br />', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Sent ecards', //cpg1.3.0
  'ecard_sender' => 'Sender', //cpg1.3.0
  'ecard_recipient' => 'Recipient', //cpg1.3.0
  'ecard_date' => 'Date', //cpg1.3.0
  'ecard_display' => 'Display ecard', //cpg1.3.0
  'ecard_name' => 'Name', //cpg1.3.0
  'ecard_email' => 'Email', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'ascending', //cpg1.3.0
  'ecard_descending' => 'descending', //cpg1.3.0
  'ecard_sorted' => 'Sorted', //cpg1.3.0
  'ecard_by_date' => 'by date', //cpg1.3.0
  'ecard_by_sender_name' => 'by sender\'s name', //cpg1.3.0
  'ecard_by_sender_email' => 'by sender\'s email', //cpg1.3.0
  'ecard_by_sender_ip' => 'by sender\'s IP address', //cpg1.3.0
  'ecard_by_recipient_name' => 'by recipient\'s name', //cpg1.3.0
  'ecard_by_recipient_email' => 'by recipient\'s email', //cpg1.3.0
  'ecard_number' => 'displaying record %s to %s of %s', //cpg1.3.0
  'ecard_goto_page' => 'go to page', //cpg1.3.0
  'ecard_records_per_page' => 'Records per page', //cpg1.3.0
  'check_all' => 'Check All', //cpg1.3.0
  'uncheck_all' => 'Uncheck All', //cpg1.3.0
  'ecards_delete_selected' => 'Delete selected ecards', //cpg1.3.0
  'ecards_delete_confirm' => 'Are you sure you want to delete the records? Tick the checkbox!', //cpg1.3.0
  'ecards_delete_sure' => 'I\'m sure', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'You need to type your name and a comment',
  'com_added' => 'Your comment was added',
  'alb_need_title' => 'You have to provide a title for the album !',
  'no_udp_needed' => 'No update needed.',
  'alb_updated' => 'The album was updated',
  'unknown_album' => 'Selected album does not exist or you don\'t have permission to upload in this album',
  'no_pic_uploaded' => 'No file was uploaded !<br /><br />If you have really selected a file to upload, check that the server allows file uploads...', //cpg1.3.0
  'err_mkdir' => 'Failed to create directory %s !',
  'dest_dir_ro' => 'Destination directory %s is not writable by the script !',
  'err_move' => 'Impossible to move %s to %s !',
  'err_fsize_too_large' => 'The size of file you have uploaded is too large (maximum allowed is %s x %s) !', //cpg1.3.0
  'err_imgsize_too_large' => 'The size of the file you have uploaded is too large (maximum allowed is %s KB) !',
  'err_invalid_img' => 'The file you have uploaded is not a valid image !',
  'allowed_img_types' => 'You can only upload %s images.',
  'err_insert_pic' => 'The file \'%s\' can\'t be inserted in the album ', //cpg1.3.0
  'upload_success' => 'Your file was uploaded successfully.<br /><br />It will be visible after admin approval.', //cpg1.3.0
  'notify_admin_email_subject' => '%s - Upload notification', //cpg1.3.0
  'notify_admin_email_body' => 'A picture has been uploaded by %s that needs your approval. Visit %s', //cpg1.3.0
  'info' => 'Information',
  'com_added' => 'Comment added',
  'alb_updated' => 'Album updated',
  'err_comment_empty' => 'Your comment is empty !',
  'err_invalid_fext' => 'Only files with the following extensions are accepted : <br /><br />%s.',
  'no_flood' => 'Sorry but you are already the author of the last comment posted for this file<br /><br />Edit the comment you have posted if you want to modify it', //cpg1.3.0
  'redirect_msg' => 'You are being redirected.<br /><br /><br />Click \'CONTINUE\' if the page does not refresh automatically',
  'upl_success' => 'Your file was successfully added', //cpg1.3.0
  'email_comment_subject' => 'Comment posted on Coppermine Photo Gallery', //cpg1.3.0
  'email_comment_body' => 'Someone has posted a comment on your gallery. See it at', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Caption',
  'fs_pic' => 'full size image',
  'del_success' => 'successfully deleted',
  'ns_pic' => 'normal size image',
  'err_del' => 'can\'t be deleted',
  'thumb_pic' => 'thumbnail',
  'comment' => 'comment',
  'im_in_alb' => 'image in album',
  'alb_del_success' => 'Album \'%s\' deleted',
  'alb_mgr' => 'Album Manager',
  'err_invalid_data' => 'Invalid data received in \'%s\'',
  'create_alb' => 'Creating album \'%s\'',
  'update_alb' => 'Updating album \'%s\' with title \'%s\' and index \'%s\'',
  'del_pic' => 'Delete file', //cpg1.3.0
  'del_alb' => 'Delete album',
  'del_user' => 'Delete user',
  'err_unknown_user' => 'The selected user does not exist !',
  'comment_deleted' => 'Comment was succesfully deleted',
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
  'confirm_del' => 'Are you sure you want to DELETE this file ? \\nComments will also be deleted.', //js-alert //cpg1.3.0
  'del_pic' => 'DELETE THIS FILE', //cpg1.3.0
  'size' => '%s x %s pixels',
  'views' => '%s times',
  'slideshow' => 'Slideshow',
  'stop_slideshow' => 'STOP SLIDESHOW',
  'view_fs' => 'Click to view full size image',
  'edit_pic' => 'Edit description', //cpg1.3.0
  'crop_pic' => 'Crop and Rotate', //cpg1.3.0
);

$lang_picinfo = array(
  'title' =>'File information', //cpg1.3.0
  'Filename' => 'Filename',
  'Album name' => 'Album name',
  'Rating' => 'Rating (%s votes)',
  'Keywords' => 'Keywords',
  'File Size' => 'File Size',
  'Dimensions' => 'Dimensions',
  'Displayed' => 'Displayed',
  'Camera' => 'Camera',
  'Date taken' => 'Date taken',
  'ISO'=>'ISO',
  'Aperture' => 'Aperture',
  'Exposure time' => 'Exposure time',
  'Focal length' => 'Focal length',
  'Comment' => 'Comment',
  'addFav'=>'Add to Favorites', //cpg1.3.0
  'addFavPhrase'=>'Favorites', //cpg1.3.0
  'remFav'=>'Remove from Favorites', //cpg1.3.0
  'iptcTitle'=>'IPTC Title', //cpg1.3.0
  'iptcCopyright'=>'IPTC Copyright', //cpg1.3.0
  'iptcKeywords'=>'IPTC Keywords', //cpg1.3.0
  'iptcCategory'=>'IPTC Category', //cpg1.3.0
  'iptcSubCategories'=>'IPTC Sub Categories', //cpg1.3.0
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Edit this comment',
  'confirm_delete' => 'Are you sure you want to delete this comment ?', //js-alert
  'add_your_comment' => 'Add your comment',
  'name'=>'Name',
  'comment'=>'Comment',
  'your_name' => 'Anon',
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Click image to close this window',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Send an e-card',
  'invalid_email' => '<b>Warning</b> : invalid email address !',
  'ecard_title' => 'An e-card from %s for you',
  'error_not_image' => 'Only images can be sent as an ecard.', //cpg1.3.0
  'view_ecard' => 'If the e-card does not display correctly, click this link',
  'view_more_pics' => 'Click this link to view more pictures !',
  'send_success' => 'Your ecard was sent',
  'send_failed' => 'Sorry but the server can\'t send your e-card...',
  'from' => 'From',
  'your_name' => 'Your name',
  'your_email' => 'Your email address',
  'to' => 'To',
  'rcpt_name' => 'Recipient name',
  'rcpt_email' => 'Recipient email address',
  'greetings' => 'Greetings',
  'message' => 'Message',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'File info', //cpg1.3.0
  'album' => 'Album',
  'title' => 'Title',
  'desc' => 'Description',
  'keywords' => 'Keywords',
  'pic_info_str' => '%s &times; %s - %s KB - %s views - %s votes',
  'approve' => 'Approve file', //cpg1.3.0
  'postpone_app' => 'Postpone approval',
  'del_pic' => 'Delete file', //cpg1.3.0
  'read_exif' => 'Read EXIF info again', //cpg1.3.0
  'reset_view_count' => 'Reset view counter',
  'reset_votes' => 'Reset votes',
  'del_comm' => 'Delete comments',
  'upl_approval' => 'Upload approval',
  'edit_pics' => 'Edit files', //cpg1.3.0
  'see_next' => 'See next files', //cpg1.3.0
  'see_prev' => 'See previous files', //cpg1.3.0
  'n_pic' => '%s files', //cpg1.3.0
  'n_of_pic_to_disp' => 'Number of files to display', //cpg1.3.0
  'apply' => 'Apply modifications', //cpg1.3.0
  'crop_title' => 'Coppermine Picture Editor', //cpg1.3.0
  'preview' => 'Preview', //cpg1.3.0
  'save' => 'Save picture', //cpg1.3.0
  'save_thumb' =>'Save as thumbnail', //cpg1.3.0
  'sel_on_img' =>'The selection has to be entirely on the image!', //js-alert //cpg1.3.0
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
  'forgot_passwd' => 'Password reminder', //cpg1.3.0
  'err_already_logged_in' => 'You are already logged in !', //cpg1.3.0
  'enter_username_email' => 'Enter your username or email address', //cpg1.3.0
  'submit' => 'go', //cpg1.3.0
  'failed_sending_email' => 'The password reminder email can\'t be sent !', //cpg1.3.0
  'email_sent' => 'An email with your username and password was sent to %s', //cpg1.3.0
  'err_unk_user' => 'Selected user does not exist!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - Password reminder', //cpg1.3.0
  'passwd_reminder_body' => 'You have requested to be reminded of your login data:
Username: %s
Password: %s
Click %s to log in.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Group name',
  'disk_quota' => 'Disk quota',
  'can_rate' => 'Can rate files', //cpg1.3.0
  'can_send_ecards' => 'Can send ecards',
  'can_post_com' => 'Can post comments',
  'can_upload' => 'Can upload files', //cpg1.3.0
  'can_have_gallery' => 'Can have a personal gallery',
  'apply' => 'Apply modifications',
  'create_new_group' => 'Create new group',
  'del_groups' => 'Delete selected group(s)',
  'confirm_del' => 'Warning, when you delete a group, users that belong to this group will be transferred to the \'Registered\' group !\n\nDo you want to proceed ?', //js-alert //cpg1.3.0
  'title' => 'Manage user groups',
  'approval_1' => 'Pub. Upl. approval (1)',
  'approval_2' => 'Priv. Upl. approval (2)',
  'upload_form_config' => 'Upload form configuration', //cpg1.3.0
  'upload_form_config_values' => array( 'Single file uploads only', 'Multiple file uploads only', 'URI uploads only', 'ZIP upload only', 'File-URI', 'File-ZIP', 'URI-ZIP', 'File-URI-ZIP'), //cpg1.3.0
  'custom_user_upload'=>'User may customize number of upload boxes?', //cpg1.3.0
  'num_file_upload'=>'Maximum/exact number of file upload boxes', //cpg1.3.0
  'num_URI_upload'=>'Maximum/exact number of URI upload boxes', //cpg1.3.0
  'note1' => '<b>(1)</b> Uploads in a public album need admin approval',
  'note2' => '<b>(2)</b> Uploads in an album that belong to the user need admin approval',
  'notes' => 'Notes',
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Welcome !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Are you sure you want to DELETE this album ? \\nAll files and comments will also be deleted.', //js-alert //cpg1.3.0
  'delete' => 'DELETE',
  'modify' => 'PROPERTIES',
  'edit_pics' => 'EDIT FILES', //cpg1.3.0
);

$lang_list_categories = array(
  'home' => 'Home',
  'stat1' => '<b>[pictures]</b> files in <b>[albums]</b> albums and <b>[cat]</b> categories with <b>[comments]</b> comments viewed <b>[views]</b> times', //cpg1.3.0
  'stat2' => '<b>[pictures]</b> files in <b>[albums]</b> albums viewed <b>[views]</b> times', //cpg1.3.0
  'xx_s_gallery' => '%s\'s Gallery',
  'stat3' => '<b>[pictures]</b> files in <b>[albums]</b> albums with <b>[comments]</b> comments viewed <b>[views]</b> times', //cpg1.3.0
);

$lang_list_users = array(
  'user_list' => 'User list',
  'no_user_gal' => 'There are no user galleries',
  'n_albums' => '%s album(s)',
  'n_pics' => '%s file(s)', //cpg1.3.0
);

$lang_list_albums = array(
  'n_pictures' => '%s files', //cpg1.3.0
  'last_added' => ', last one added on %s',
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Login',
  'enter_login_pswd' => 'Enter your username and password to login',
  'username' => 'Username',
  'password' => 'Password',
  'remember_me' => 'Remember me',
  'welcome' => 'Welcome %s ...',
  'err_login' => '*** Couldn\'t log in. Try again ***',
  'err_already_logged_in' => 'You are already logged in !',
  'forgot_password_link' => 'I forgot my password', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Logout',
  'bye' => 'Bye bye %s ...',
  'err_not_loged_in' => 'You are not logged in !',
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
  'upd_alb_n' => 'Update album %s',
  'general_settings' => 'General settings',
  'alb_title' => 'Album title',
  'alb_cat' => 'Album category',
  'alb_desc' => 'Album description',
  'alb_thumb' => 'Album thumbnail',
  'alb_perm' => 'Permissions for this album',
  'can_view' => 'Album can be viewed by',
  'can_upload' => 'Visitors can upload files',
  'can_post_comments' => 'Visitors can post comments',
  'can_rate' => 'Visitors can rate files',
  'user_gal' => 'User Gallery',
  'no_cat' => '* No category *',
  'alb_empty' => 'Album is empty',
  'last_uploaded' => 'Last uploaded',
  'public_alb' => 'Everybody (public album)',
  'me_only' => 'Me only',
  'owner_only' => 'Album owner (%s) only',
  'groupp_only' => 'Members of the \'%s\' group',
  'err_no_alb_to_modify' => 'No album you can modify in the database.',
  'update' => 'Update album', //cpg1.3.0
  'notice1' => '(*) depending on %sgroups%s settings', //cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Sorry but you have already rated this file', //cpg1.3.0
  'rate_ok' => 'Your vote was accepted',
  'forbidden' => 'You can not rate your own files.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
While the administrators of {SITE_NAME} will attempt to remove or edit any generally objectionable material as quickly as possible, it is impossible to review every post. Therefore you acknowledge that all posts made to this site express the views and opinions of the author and not the administrators or webmaster (except for posts by these people) and hence will not be held liable.<br />
<br />
You agree not to post any abusive, obscene, vulgar, slanderous, hateful, threatening, sexually-orientated or any other material that may violate any applicable laws. You agree that the webmaster, administrator and moderators of {SITE_NAME} have the right to remove or edit any content at any time should they see fit. As a user you agree to any information you have entered above being stored in a database. While this information will not be disclosed to any third party without your consent the webmaster and administrator cannot be held responsible for any hacking attempt that may lead to the data being compromised.<br />
<br />
This site uses cookies to store information on your local computer. These cookies serve only to improve your viewing pleasure. The email address is used only for confirming your registration details and password.<br />
<br />
By clicking 'I agree' below you agree to be bound by these conditions.
EOT;

$lang_register_php = array(
  'page_title' => 'User registration',
  'term_cond' => 'Terms and conditions',
  'i_agree' => 'I agree',
  'submit' => 'Submit registration',
  'err_user_exists' => 'The username you have entered already exist, please choose a different one',
  'err_password_mismatch' => 'The two passwords does not match, please input them again',
  'err_uname_short' => 'Username must be 2 characters long minimum',
  'err_password_short' => 'Password must be 2 characters long minimum',
  'err_uname_pass_diff' => 'Username and password must be different',
  'err_invalid_email' => 'Email address is invalid',
  'err_duplicate_email' => 'Another user has already registered with the email address you entered',
  'enter_info' => 'Input registration information',
  'required_info' => 'Required information',
  'optional_info' => 'Optional information',
  'username' => 'Username',
  'password' => 'Password',
  'password_again' => 'Re-enter password',
  'email' => 'Email',
  'location' => 'Location',
  'interests' => 'Interests',
  'website' => 'Home page',
  'occupation' => 'Occupation',
  'error' => 'ERROR',
  'confirm_email_subject' => '%s - Registration confirmation',
  'information' => 'Information',
  'failed_sending_email' => 'The registration confirmation email can\'t be send !',
  'thank_you' => 'Thank you for registering.<br /><br />An email with information on how to activate your account was sent to the email address you provided.',
  'acct_created' => 'Your account has been created and you can now login with your username and password',
  'acct_active' => 'Your account is now active and you can login with your username and password',
  'acct_already_act' => 'Your account is already active !',
  'acct_act_failed' => 'This account can\'t be activated !',
  'err_unk_user' => 'Selected user does not exist !',
  'x_s_profile' => '%s\'s profile',
  'group' => 'Group',
  'reg_date' => 'Joined',
  'disk_usage' => 'Disk usage',
  'change_pass' => 'Change password',
  'current_pass' => 'Current password',
  'new_pass' => 'New password',
  'new_pass_again' => 'New password again',
  'err_curr_pass' => 'Current password is incorrect',
  'apply_modif' => 'Apply modifications',
  'change_pass' => 'Change my password',
  'update_success' => 'Your profile was updated',
  'pass_chg_success' => 'Your password was changed',
  'pass_chg_error' => 'Your password was not changed',
  'notify_admin_email_subject' => '%s - Registration notification', //cpg1.3.0
  'notify_admin_email_body' => 'A new user with the username "%s" has registered in your gallery', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
Thank you for registering at {SITE_NAME}

Your username is : "{USER_NAME}"
Your password is : "{PASSWORD}"

In order to activate your account, you need to click on the link below
or copy and paste it in your web browser.

{ACT_LINK}

Regards,

The management of {SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'Review comments',
  'no_comment' => 'There is no comment to review',
  'n_comm_del' => '%s comment(s) deleted',
  'n_comm_disp' => 'Number of comments to display',
  'see_prev' => 'See previous',
  'see_next' => 'See next',
  'del_comm' => 'Delete selected comments',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
  0 => 'Search the file collection',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Search new files', //cpg1.3.0
  'select_dir' => 'Select directory',
  'select_dir_msg' => 'This function allows you to add a batch of file that your have uploaded to your server by FTP.<br /><br />Select the directory where you have uploaded your files', //cpg1.3.0
  'no_pic_to_add' => 'There is no file to add', //cpg1.3.0
  'need_one_album' => 'You need at least one album to use this function',
  'warning' => 'Warning',
  'change_perm' => 'the script can\'t write in this directory, you need to change its mode to 755 or 777 before trying to add the files !', //cpg1.3.0
  'target_album' => '<b>Put files of &quot;</b>%s<b>&quot; into </b>%s', //cpg1.3.0
  'folder' => 'Folder',
  'image' => 'file',
  'album' => 'Album',
  'result' => 'Result',
  'dir_ro' => 'Not writable. ',
  'dir_cant_read' => 'Not readable. ',
  'insert' => 'Adding new files to the gallery', //cpg1.3.0
  'list_new_pic' => 'List of new files', //cpg1.3.0
  'insert_selected' => 'Insert selected files', //cpg1.3.0
  'no_pic_found' => 'No new file was found', //cpg1.3.0
  'be_patient' => 'Please be patient, the script needs time to add the files', //cpg1.3.0
  'no_album' => 'no album selected',  //cpg1.3.0
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : means that the file was succesfully added'.
                          '<li><b>DP</b> : means that the file is a duplicate and is already in the database'.
                          '<li><b>PB</b> : means that the file could not be added, check your configuration and the permission of directories where the files are located'.
                          '<li><b>NA</b> : means that you haven\'t selected an album the files should go to, hit \'<a href="javascript:history.back(1)">back</a>\' and select an album. If you don\'t have an album <a href="albmgr.php">create one first</a></li>'.
                          '<li>If the OK, DP, PB \'signs\' does not appear click on the broken file to see any error message produced by PHP'.
                          '<li>If your browser timeouts, hit the reload button'.
                          '</ul>', //cpg1.3.0
  'select_album' => 'select album', //cpg1.3.0
  'check_all' => 'Check All', //cpg1.3.0
  'uncheck_all' => 'Uncheck All', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Ban Users',
  'user_name' => 'User Name',
  'ip_address' => 'IP Address',
  'expiry' => 'Expires (blank is permanent)',
  'edit_ban' => 'Save Changes',
  'delete_ban' => 'Delete',
  'add_new' => 'Add New Ban',
  'add_ban' => 'Add',
  'error_user' => 'Cannot find user', //cpg1.3.0
  'error_specify' => 'You need to specifiy either a user name or an IP address', //cpg1.3.0
  'error_ban_id' => 'Invalid ban ID!', //cpg1.3.0
  'error_admin_ban' => 'You cannnot ban yourself!', //cpg1.3.0
  'error_server_ban' => 'You were going to ban your own server? Tsk tsk, cannot do that...', //cpg1.3.0
  'error_ip_forbidden' => 'You cannnot ban this IP - it is non-routable!', //cpg1.3.0
  'lookup_ip' => 'Lookup an IP address', //cpg1.3.0
  'submit' => 'go!', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Upload file', //cpg1.3.0
  'custom_title' => 'Customized Request Form', //cpg1.3.0
  'cust_instr_1' => 'You may select a customized number of upload boxes. However, you may not select more than the limits listed below.', //cpg1.3.0
  'cust_instr_2' => 'Box Number Requests', //cpg1.3.0
  'cust_instr_3' => 'File upload boxes: %s', //cpg1.3.0
  'cust_instr_4' => 'URI/URL upload boxes: %s', //cpg1.3.0
  'cust_instr_5' => 'URI/URL upload boxes:', //cpg1.3.0
  'cust_instr_6' => 'File upload boxes:', //cpg1.3.0
  'cust_instr_7' => 'Please enter the number of each type of upload box you desire at this time.  Then click \'Continue\'. ', //cpg1.3.0
  'reg_instr_1' => 'Invalid action for form creation.', //cpg1.3.0
  'reg_instr_2' => 'Now you may upload your files using the upload boxes below. The size of files uploaded from your client to the server should not exceed %s KB each. ZIP files uploaded in the \'File Upload\' and \'URI/URL Upload\' sections will remain compressed.', //cpg1.3.0
  'reg_instr_3' => 'If you want the zipped file or archive to be decompressed, you must use the file upload box provided in the \'Decompressive ZIP Upload\' area.', //cpg1.3.0
  'reg_instr_4' => 'When using the URI/URL upload section, please enter the path to the file like so: http://www.mysite.com/images/example.jpg', //cpg1.3.0
  'reg_instr_5' => 'When you have completed the form, please click \'Continue\'.', //cpg1.3.0
  'reg_instr_6' => 'Decompressive ZIP Uploads:', //cpg1.3.0
  'reg_instr_7' => 'File Uploads:', //cpg1.3.0
  'reg_instr_8' => 'URI/URL Uploads:', //cpg1.3.0
  'error_report' => 'Error Report', //cpg1.3.0
  'error_instr' => 'The following uploads encountered errors:', //cpg1.3.0
  'file_name_url' => 'File Name/URL', //cpg1.3.0
  'error_message' => 'Error Message', //cpg1.3.0
  'no_post' => 'File not uploaded by POST.', //cpg1.3.0
  'forb_ext' => 'Forbidden file extension.', //cpg1.3.0
  'exc_php_ini' => 'Exceeded filesize allowed in php.ini.', //cpg1.3.0
  'exc_file_size' => 'Exceeded filesize permitted by CPG.', //cpg1.3.0
  'partial_upload' => 'Only a partial upload.', //cpg1.3.0
  'no_upload' => 'No upload occurred.', //cpg1.3.0
  'unknown_code' => 'Unknown PHP upload error code.', //cpg1.3.0
  'no_temp_name' => 'No upload - No temp name.', //cpg1.3.0
  'no_file_size' => 'Contains no data/Corrupted', //cpg1.3.0
  'impossible' => 'Impossible to move.', //cpg1.3.0
  'not_image' => 'Not an image/corrupt', //cpg1.3.0
  'not_GD' => 'Not a GD extension.', //cpg1.3.0
  'pixel_allowance' => 'Pixel allowance exceeded.', //cpg1.3.0
  'incorrect_prefix' => 'Incorrect URI/URL prefix', //cpg1.3.0
  'could_not_open_URI' => 'Could not open URI.', //cpg1.3.0
  'unsafe_URI' => 'Safety not verifiable.', //cpg1.3.0
  'meta_data_failure' => 'Meta data failure', //cpg1.3.0
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
  'cant_unzip' => 'Cannot unzip.', //cpg1.3.0
  'unknown' => 'Unknown error', //cpg1.3.0
  'succ' => 'Successful Uploads', //cpg1.3.0
  'success' => '%s uploads were successful.', //cpg1.3.0
  'add' => 'Please click \'Continue\' to add the files to albums.', //cpg1.3.0
  'failure' => 'Upload Failure', //cpg1.3.0
  'f_info' => 'File Information', //cpg1.3.0
  'no_place' => 'The previous file could not be placed.', //cpg1.3.0
  'yes_place' => 'The previous file was placed successfully.', //cpg1.3.0
  'max_fsize' => 'Maximum allowed file size is %s KB',
  'album' => 'Album',
  'picture' => 'File', //cpg1.3.0
  'pic_title' => 'File title', //cpg1.3.0
  'description' => 'File description', //cpg1.3.0
  'keywords' => 'Keywords (separate with spaces)',
  'err_no_alb_uploadables' => 'Sorry there is no album where you are allowed to upload files', //cpg1.3.0
  'place_instr_1' => 'Please place the files in albums at this time.  You may also enter relevant information about each file now.', //cpg1.3.0
  'place_instr_2' => 'More files need placement. Please click \'Continue\'.', //cpg1.3.0
  'process_complete' => 'You have successfully placed all the files.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'title' => 'Manage users',
  'name_a' => 'Name ascending',
  'name_d' => 'Name descending',
  'group_a' => 'Group ascending',
  'group_d' => 'Group descending',
  'reg_a' => 'Reg date ascending',
  'reg_d' => 'Reg date descending',
  'pic_a' => 'File count ascending',
  'pic_d' => 'File count descending',
  'disku_a' => 'Disk usage ascending',
  'disku_d' => 'Disk usage descending',
  'lv_a' => 'Last visit ascending', //cpg1.3.0
  'lv_d' => 'Last visit descending', //cpg1.3.0
  'sort_by' => 'Sort users by',
  'err_no_users' => 'User table is empty !',
  'err_edit_self' => 'You can\'t edit your own profile, use the \'My profile\' link for that',
  'edit' => 'EDIT',
  'delete' => 'DELETE',
  'name' => 'User name',
  'group' => 'Group',
  'inactive' => 'Inactive',
  'operations' => 'Operations',
  'pictures' => 'Files', //cpg1.3.0
  'disk_space' => 'Space used / Quota',
  'registered_on' => 'Registered on',
  'last_visit' => 'Last Visit', //cpg1.3.0
  'u_user_on_p_pages' => '%d users on %d page(s)',
  'confirm_del' => 'Are you sure you want to DELETE this user ? \\nAll his files and albums will also be deleted.', //js-alert //cpg1.3.0
  'mail' => 'MAIL',
  'err_unknown_user' => 'Selected user does not exist !',
  'modify_user' => 'Modify user',
  'notes' => 'Notes',
  'note_list' => '<li>If you don\'t want to change the current password, leave the "password" field blank',
  'password' => 'Password',
  'user_active' => 'User is active',
  'user_group' => 'User group',
  'user_email' => 'User email',
  'user_web_site' => 'User web site',
  'create_new_user' => 'Create new user',
  'user_location' => 'User location',
  'user_interests' => 'User interests',
  'user_occupation' => 'User occupation',
  'latest_upload' => 'Recent uploads', //cpg1.3.0
  'never' => 'never', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
  'title' => 'Admin utilities (Resize pictures)', //cpg1.3.0
  'what_it_does' => 'What it does',
  'what_update_titles' => 'Updates titles from filename',
  'what_delete_title' => 'Deletes titles',
  'what_rebuild' => 'Rebuilds thumbnails and resized photos',
  'what_delete_originals' => 'Deletes original sized photos replacing them with the resized version',
  'file' => 'File',
  'title_set_to' => 'title set to',
  'submit_form' => 'submit',
  'updated_succesfully' => 'updated succesfully',
  'error_create' => 'ERROR creating',
  'continue' => 'Process more images',
  'main_success' => 'The file %s was successfully used as main file', //cpg1.3.0
  'error_rename' => 'Error renaming %s to %s',
  'error_not_found' => 'The file %s was not found',
  'back' => 'back to main',
  'thumbs_wait' => 'Updating thumbnails and/or resized images, please wait...',
  'thumbs_continue_wait' => 'Continuing to update thumbnails and/or resized images...',
  'titles_wait' => 'Updating titles, please wait...',
  'delete_wait' => 'Deleting titles, please wait...',
  'replace_wait' => 'Deleting originals and replacing them with resized images, please wait..',
  'instruction' => 'Quick instructions',
  'instruction_action' => 'Select action',
  'instruction_parameter' => 'Set parameters',
  'instruction_album' => 'Select album',
  'instruction_press' => 'Press %s',
  'update' => 'Update thumbs and/or resized photos',
  'update_what' => 'What should be updated',
  'update_thumb' => 'Only thumbnails',
  'update_pic' => 'Only resized pictures',
  'update_both' => 'Both thumbnails and resized pictures',
  'update_number' => 'Number of processed images per click',
  'update_option' => '(Try setting this option lower if you experience timeout problems)',
  'filename_title' => 'Filename &rArr; File title', //cpg1.3.0
  'filename_how' => 'How should the filename be modified',
  'filename_remove' => 'Remove the .jpg ending and replace _ (underscore) with spaces',
  'filename_euro' => 'Change 2003_11_23_13_20_20.jpg to 23/11/2003 13:20',
  'filename_us' => 'Change 2003_11_23_13_20_20.jpg to 11/23/2003 13:20',
  'filename_time' => 'Change 2003_11_23_13_20_20.jpg to 13:20',
  'delete' => 'Delete file titles or original size photos', //cpg1.3.0
  'delete_title' => 'Delete file titles', //cpg1.3.0
  'delete_original' => 'Delete original size photos',
  'delete_replace' => 'Deletes the original images replacing them with the sized versions',
  'select_album' => 'Select album',
  'delete_orphans' => 'Delete orphaned comments (works on all albums)', //cpg1.3.0
  'orphan_comment' => 'orphan comments found', //cpg1.3.0
  'delete' => 'Delete', //cpg1.3.0
  'delete_all' => 'Delete all', //cpg1.3.0
  'comment' => 'Comment: ', //cpg1.3.0
  'nonexist' => 'attached to non existant file # ', //cpg1.3.0
  'phpinfo' => 'Display phpinfo', //cpg1.3.0
  'update_db' => 'Update database', //cpg1.3.0
  'update_db_explanation' => 'If you have replaced coppermine files, added a modification or upgraded from a previous version of coppermine, make sure to run the database update once. This will create the necessary tables and/or config values in your coppermine database.', //cpg1.3.0
);

?>
