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
// CVS version: $Id: malay-utf-8.php,v 1.2 2004/07/24 15:04:07 gaugau Exp $
// ------------------------------------------------------------------------- //

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Malay',
  'lang_name_native' => 'Bahasa Melayu',
  'lang_country_code' => 'my',
  'trans_name'=> 'Raz Rahim',
  'trans_email' => 'raz@trazztech.co.uk',
  'trans_website' => 'http://coppermine.sourceforge.net/',
  'trans_date' => '2004-06-13',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Aha', 'Isn', 'Sel', 'Rab', 'Kha', 'Jum', 'Sab');
$lang_month = array('Jan', 'Feb', 'Mac', 'Apr', 'Mei', 'Jun', 'Jul', 'Ogo', 'Sep', 'Okt', 'Nov', 'Dis');

// Some common strings
$lang_yes = 'Ya';
$lang_no  = 'Tidak';
$lang_back = 'Kembali';
$lang_continue = 'Terus';
$lang_info = 'Informasi';
$lang_error = 'Perhatian';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%B %d, %Y';
$lastcom_date_fmt =  '%m/%d/%y jam %H:%M'; //cpg1.3.0
$lastup_date_fmt = '%B %d, %Y';
$register_date_fmt = '%B %d, %Y';
$lasthit_date_fmt = '%B %d, %Y jam %I:%M %p'; //cpg1.3.0
$comment_date_fmt =  '%B %d, %Y jam %I:%M %p'; //cpg1.3.0

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*', 'pantat', 'kote', 'cipap', 'babi', 'sundal');

$lang_meta_album_names = array(
  'random' => 'Gambar Secara Rawak', //cpg1.3.0
  'lastup' => 'Tambahan Gambar Terkini',
  'lastalb'=> 'Tambahan Album Terkini',
  'lastcom' => 'Ulasan Terkini',
  'topn' => 'Terbanyak Dilihat',
  'toprated' => 'Undian Tertinggi',
  'lasthits' => 'Last viewed',
  'search' => 'Hasil Carian',
  'favpics'=> 'Gambar Pilihan', //cpg1.3.0
);

$lang_errors = array(
  'access_denied' => 'Akses kepada halaman ini tidak dibenarkan!',
  'perm_denied' => 'Sebarang pengendalian kepada fungsi ini tidak dibenarkan',
  'param_missing' => 'Satu atau lebih perimeter yang diperlukan tidak dipenuhi',
  'non_exist_ap' => 'Album yang dipilih tiada di dalam sistem!', //cpg1.3.0
  'quota_exceeded' => 'Kuota disk melebihi!<br /><br />Anda memiliki [quota]K, saiz fail-fail anda sekarang berjumlah [space]K, penambahan kepada fail ini menyebabkan anda melebihi kuota yang dibenarkan.', //cpg1.3.0
  'gd_file_type_err' => 'Sekiranya <i>GD Image Library</i> digunakan, jenis format gambar/fail yang dibenarkan adalah JPEG dan PNG',
  'invalid_image' => 'Gambar yang ingin dimuat tambah mungkin rosak atau gagal ditangani oleh <i>GD Image Library</i>',
  'resize_failed' => 'Gagal menghasilkan <i>thumbnail</i> atau gambar bersaiz kecil',
  'no_img_to_display' => 'Tiada gambar untuk dipaparkan',
  'non_exist_cat' => 'Kategori yang dipilih tiada di dalam sistem',
  'orphan_cat' => 'Kategori mempunyai induk yang tidak wujud, sila jalankan <i>Category Manager</i> untuk membetulkan masalah ini!', //cpg1.3.0
  'directory_ro' => 'Direktori \'%s\' gagal ditulis, fail-fail di dalamnya gagal dihapuskan', //cpg1.3.0
  'non_exist_comment' => 'Ulasan yang dipilih tiada di dalam sistem!',
  'pic_in_invalid_album' => 'Fail berada dalam album yang tidak wujud (%s)!?', //cpg1.3.0
  'banned' => 'Anda telah dihalang untuk menggunakan laman web ini',
  'not_with_udb' => 'Fungsi ini tidak digunakan lagi dalam Coppermine sebab telah terintegrasi ke dalam forum. Mungkin fungsi ini tidak ditangani oleh konfigurasi, atau fungsi tersebut seharusnya ditangani oleh software forum.',
  'offline_title' => 'Tidak aktif', //cpg1.3.0
  'offline_text' => 'Galeri tidak aktif - sila kembali semula', //cpg1.3.0
  'ecards_empty' => 'Tiada rekod <i>ecard</i> untuk dipaparkan. Sila rujuk sekiranya anda mempunyai akses di dalam konfigurasi Coppermine!', //cpg1.3.0
  'action_failed' => 'Coppermine gagal meneruskan permintaan anda.', //cpg1.3.0
  'no_zip' => 'Fungsi-fungsi untuk memproses fail berformat ZIP tidak wujud.  Sila hubungi penyelaras laman Coppermine.', //cpg1.3.0
  'zip_type' => 'Anda tidak dibenarkan untuk muat tambah fail-fail berformat ZIP.', //cpg1.3.0
);

$lang_bbcode_help = 'Anda boleh menggunakan kod HTML berikut: <li>[b]<b>Bold</b>[/b]</li> <li>[i]<i>Italic</i>[/i]</li> <li>[url=http://yoursite.com/]Url Text[/url]</li> <li>[email]user@domain.com[/email]</li>'; //cpg1.3.0

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'alb_list_title' => 'Ke senarai album',
  'alb_list_lnk' => 'Senarai album',
  'my_gal_title' => 'Ke galeriku',
  'my_gal_lnk' => 'Galeriku',
  'my_prof_lnk' => 'Profailku',
  'adm_mode_title' => 'Tukar ke mod penyelaras',
  'adm_mode_lnk' => 'Mod Penyelaras',
  'usr_mode_title' => 'Tukar ke mod penggunae',
  'usr_mode_lnk' => 'Mod Pengguna',
  'upload_pic_title' => 'Muat tambah gambar ke dalam album', //cpg1.3.0
  'upload_pic_lnk' => 'Tambah gambar', //cpg1.3.0
  'register_title' => 'Daftar akaun baru',
  'register_lnk' => 'Daftar',
  'login_lnk' => 'Masuk',
  'logout_lnk' => 'Keluar',
  'lastup_lnk' => 'Gambar terkini',
  'lastcom_lnk' => 'Ulasan terkini',
  'topn_lnk' => 'Terbanyak Dilihat',
  'toprated_lnk' => 'Undian Tertinggi',
  'search_lnk' => 'Cari',
  'fav_lnk' => 'Gambar Pilihan',
  'memberlist_title' => 'Senaraikan ahli kumpulan', //cpg1.3.0
  'memberlist_lnk' => 'Senarai ahli', //cpg1.3.0
  'faq_title' => 'Soalan kerap &quot;Coppermine&quot;', //cpg1.3.0
  'faq_lnk' => 'FAQ', //cpg1.3.0
);

$lang_gallery_admin_menu = array(
  'upl_app_lnk' => 'Setujui muat tambah',
  'config_lnk' => 'Konfigurasi',
  'albums_lnk' => 'Album',
  'categories_lnk' => 'Kategori',
  'users_lnk' => 'Pengguna',
  'groups_lnk' => 'Kumpulan Pengguna',
  'comments_lnk' => 'Kemaskini Ulasan', //cpg1.3.0
  'searchnew_lnk' => 'Tambah gambar (berkumpulan)', //cpg1.3.0
  'util_lnk' => 'Utiliti Penyelaras', //cpg1.3.0
  'ban_lnk' => 'Larang Pengguna',
  'db_ecard_lnk' => 'Paparan <i>Ecards</i>', //cpg1.3.0
);

$lang_user_admin_menu = array(
  'albmgr_lnk' => 'Cipta / Selaraskan Album',
  'modifyalb_lnk' => 'Kemaskini Album',
  'my_prof_lnk' => 'Profailku',
);

$lang_cat_list = array(
  'category' => 'Kategori',
  'albums' => 'Album',
  'pictures' => 'Gambar', //cpg1.3.0
);

$lang_album_list = array(
  'album_on_page' => '%d jumlah album di dalam %d halaman',
);

$lang_thumb_view = array(
  'date' => 'Tarikh',
  //Sort by filename and title
  'name' => 'Nama fail',
  'title' => 'Judul',
  'sort_da' => 'Susunkan mengikut tarikh masuk (mendaki)',
  'sort_dd' => 'Susunkan mengikut tarikh masuk (menurun)',
  'sort_na' => 'Susunkan mengikut nama fail (mendaki)',
  'sort_nd' => 'Susunkan mengikut nama fail (menurun)',
  'sort_ta' => 'Susunkan mengikut judul gambar (mendaki)',
  'sort_td' => 'Susunkan mengikut judul gambar (menurun)',
  'download_zip' => 'Muat turun sebagai fail berformat ZIP', //cpg1.3.0
  'pic_on_page' => '%d jumlah gambar dalam %d halaman',
  'user_on_page' => '%d jumlah pengguna dalam %d halaman', //cpg1.3.0
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Kembali ke halaman thumbnail',
  'pic_info_title' => 'Paparkan/sembunyikan informasi gambar', //cpg1.3.0
  'slideshow_title' => 'Slideshow',
  'ecard_title' => 'Kirimkan gambar sebagai e-card', //cpg1.3.0
  'ecard_disabled' => 'Fungsi e-cards tidak aktif',
  'ecard_disabled_msg' => 'Anda tidak dibenarkan mengirim e-cards', //js-alert //cpg1.3.0
  'prev_title' => 'Gambar seterusnya', //cpg1.3.0
  'next_title' => 'Gambar sebelumnya', //cpg1.3.0
  'pic_pos' => 'FILE %s/%s', //cpg1.3.0
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Nilaikan gambar ini', //cpg1.3.0
  'no_votes' => '(Tiada lagi undian)',
  'rating' => '(Penilaian kini : %s / 5 dengan %s jumlah undian)',
  'rubbish' => 'Tidak Bagus',
  'poor' => 'Kurang Bagus',
  'fair' => 'Sederhana',
  'good' => 'Bagus',
  'excellent' => 'Amat Bagus',
  'great' => 'Cemerlang',
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
  CRITICAL_ERROR => 'Kesilapan Kritikal',
  'file' => 'Nama fail: ',
  'line' => 'Baris: ',
);

$lang_display_thumbnails = array(
  'filename' => 'Nama fail : ',
  'filesize' => 'Saiz fail : ',
  'dimensions' => 'Ukuran gambar : ',
  'date_added' => 'Tarikh masuk : ', //cpg1.3.0
);

$lang_get_pic_data = array(
  'n_comments' => '%s ulasan',
  'n_views' => '%s kali gambar dilihat',
  'n_votes' => '(%s undian)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Informasi analisis', //cpg1.3.0
  'select_all' => 'Pilih semua', //cpg1.3.0
  'copy_and_paste_instructions' => 'Sekiranya anda perlukan bantuan menerusi <i>coppermine support board</i>, ambil dan tampalkan hasil analisis ini ke dalam kiriman anda. Sila pastikan anda telah menggantikan sesuatu kata nama (yang mengandungi ***) sebelum menghantar kiriman.', //cpg1.3.0
  'phpinfo' => 'Paparkan menerusi <i>phpinfo</i>', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => 'Kembalikan bahasa asal', //cpg1.3.0
  'choose_language' => 'Pilih bahasa', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'Kembalikan tema asal', //cpg1.3.0
  'choose_theme' => 'Pilih tema', //cpg1.3.0
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
  'Exclamation' => 'Tanda Seruan',
  'Question' => 'Tanda Soalan',
  'Very Happy' => 'Amat Gembira',
  'Smile' => 'Senyum',
  'Sad' => 'Sedih',
  'Surprised' => 'Terkejut',
  'Shocked' => 'Terkedu',
  'Confused' => 'Tidak Pasti',
  'Cool' => 'Rasa Senang',
  'Laughing' => 'Ketawa',
  'Mad' => 'Marah',
  'Razz' => 'Razz',
  'Embarassed' => 'Malu',
  'Crying or Very sad' => 'Terlalu Sedih',
  'Evil or Very Mad' => 'Terlalu Marah',
  'Twisted Evil' => 'Sangat Jahat',
  'Rolling Eyes' => 'Tidak Peduli',
  'Wink' => 'Kenyit Mata',
  'Idea' => 'Idea',
  'Arrow' => 'Anak Panah',
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
  0 => 'Meninggakan Mod Penyelaras...',
  1 => 'Memasuki Mod Penyelaras...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Album perlu dinamakan!', //js-alert
  'confirm_modifs' => 'Anda pasti?', //js-alert
  'no_change' => 'Anda tidak melakukan sebarang pertukaran!', //js-alert
  'new_album' => 'Album baru',
  'confirm_delete1' => 'Anda pasti untuk menghapuskan album ini?', //js-alert
  'confirm_delete2' => '\nSegala fail dan ulasan untuk album ini akan turut dihapuskan!', //js-alert
  'select_first' => 'Silih pilih kategori terlebih dahulu', //js-alert
  'alb_mrg' => 'Penyelarasan Album',
  'my_gallery' => '* Galeriku *',
  'no_category' => '* Tiada kategori *',
  'delete' => 'Hapus',
  'new' => 'Cipta baru',
  'apply_modifs' => 'Kemaskini',
  'select_category' => 'Pilih kategori',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Perimeter yang diperlukan untuk operasi \'%s\' tidak diberikan!',
  'unknown_cat' => 'Kategori yang dipilih tiada dalam sistem',
  'usergal_cat_ro' => 'Galeri pengguna tidak boleh dihapuskan!',
  'manage_cat' => 'Selaraskan Kategori',
  'confirm_delete' => 'Anda pasti untuk menghapuskan kategori ', //js-alert
  'category' => 'Kategori',
  'operations' => 'Fungsi-fungsi',
  'move_into' => 'Pindahkan ke...',
  'update_create' => 'Kemaskini/cipta kategori',
  'parent_cat' => 'Kategori induk',
  'cat_title' => 'Nama kategori',
  'cat_thumb' => 'Nama kategori <i>thumbnail</i>', //cpg1.3.0
  'cat_desc' => 'Keterangan/catatan untuk kategori',
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
  'title' => 'Konfigurasi',
  'restore_cfg' => 'Kembalikan ke konfigurasi asal',
  'save_cfg' => 'Simpan konfigurasi baru',
  'notes' => 'Catatan',
  'info' => 'Informasi',
  'upd_success' => 'Konfigurasi Coppermine telah disimpan dan dikemaskinikan',
  'restore_success' => 'Konfigurasi Coppermine asal telah dikembalikan',
  'name_a' => 'Urutan nama fail (mendaki)',
  'name_d' => 'Urutan nama fail (menurun)',
  'title_a' => 'Urutan judul fail (mendaki)',
  'title_d' => 'Urutan judul fail (menurun)',
  'date_a' => 'Urutan tarikh (mendaki)',
  'date_d' => 'Urutan tarikh (menurun)',
  'th_any' => 'Perbandingan maksimum',
  'th_ht' => 'Tinggi',
  'th_wd' => 'Lebar',
  'label' => 'label', //cpg1.3.0
  'item' => 'item', //cpg1.3.0
  'debug_everyone' => 'Semua', //cpg1.3.0
  'debug_admin' => 'Penyelaras sahaja', //cpg1.3.0
        );

if (defined('CONFIG_PHP')) $lang_config_data = array(
  'Konfigurasi Umum',
  array('Nama galeri', 'gallery_name', 0),
  array('Keterangan galeri', 'gallery_description', 0),
  array('Emel penyelaras galeri', 'gallery_admin_email', 0),
  array('Laman web untuk \'Sila lihat gambar-gambar lain\' dalam e-cards', 'ecards_more_pic_target', 0),
  array('Galeri tidak aktif?', 'offline', 1), //cpg1.3.0
  array('Log kiriman e-cards?', 'log_ecards', 1), //cpg1.3.0
  array('Benarkan muat turun gambar-gambar pilihan dalam fail format ZIP?', 'enable_zipdownload', 1), //cpg1.3.0

  'Bahasa, Tema Galeri &amp; Konfigurasi <i>Charset</i>',
  array('Bahasa', 'lang', 5),
  array('Tema', 'theme', 6),
  array('Senaraikan pilihan bahasa?', 'language_list', 1), //cpg1.3.0
  array('Paparkan bendera negara mengikut bahasa yang dipilih?', 'language_flags', 8), //cpg1.3.0
  array('Paparkan &quot;reset&quot; dalam pilihan bahasa?', 'language_reset', 1), //cpg1.3.0
  array('Senaraikan pilihan tema?', 'theme_list', 1), //cpg1.3.0
  array('Paparkan &quot;reset&quot; dalam pilihan tema?', 'theme_reset', 1), //cpg1.3.0
  array('Paparkan FAQ?', 'display_faq', 1), //cpg1.3.0
  array('Paparkan bantuan <i>bbcode</i>?', 'show_bbcode_help', 1), //cpg1.3.0
  array('<i>Character encoding</i>', 'charset', 4), //cpg1.3.0

  'Paparan untuk Senarai Album',
  array('Lebar rangka utama (dalam piksel atau %)', 'main_table_width', 0),
  array('Jumlah paras kategori untuk paparan', 'subcat_level', 0),
  array('Jumlah album untuk paparan', 'albums_per_page', 0),
  array('Bilangan barisan menegak (<i>columns</i> untuk senarai album)', 'album_list_cols', 0),
  array('Saiz gambar <i>thumbnails</i> (dalam piksel)', 'alb_list_thumb_size', 0),
  array('Cara dan susunan penampilan elemen di dalam halaman utama', 'main_page_layout', 0),
  array('Hanya paparkan paras pertama album <i>thumbnails</i> dalam senarai kategori?','first_level',1),

  'Paparan untuk <i>Thumbnail</i>',
  array('Bilangan barisan menegak (<i>columns</i>)', 'thumbcols', 0),
  array('Bilangan barisan mendatar (<i>rows</i>)', 'thumbrows', 0),
  array('Jumlah maksimum <i>tabs</i>', 'max_tabs', 10), //cpg1.3.0
  array('Paparkan keterangan gambar (sebagai tambahan kepada nama gambar) di bawah <i>thumbnail</i>?', 'caption_in_thumbview', 1), //cpg1.3.0
  array('Paparkan jumlah pemerhati di bawah <i>thumbnail</i>?', 'views_in_thumbview', 1), //cpg1.3.0
  array('Tampilkan jumlah ulasan di bawah <i>thumbnail</i>?', 'display_comment_count', 1),
  array('Tampilkan nama pemuat turun di bawah <i>thumbnail</i>?', 'display_uploader', 1), //cpg1.3.0
  array('Gambar-gambar disusunkan mengikut...', 'default_sort_order', 3), //cpg1.3.0
  array('Jumlah undian minimum yang diperlukan (sebagai syarat untuk dipaparkan dalam senarai Undian Tertinggi)', 'min_votes_for_rating', 0), //cpg1.3.0

  'Konfigurasi Paparan Gambar &amp; Ulasan',
  array('Ukuran lebar rangka utama untuk setiap gambar (dalam piksel atau %)', 'picture_table_width', 0), //cpg1.3.0
  array('Tampilkan informasi gambar?', 'display_pic_info', 1), //cpg1.3.0
  array('Saring kata-kata buruk dalam ulasan?', 'filter_bad_words', 1),
  array('Benarkan <i>smilies</i> dalam ulasan?', 'enable_smilies', 1),
  array('Benarkan ulasan berturut-turut di dalam satu gambar daripada pengguna yang sama?', 'disable_comment_flood_protect', 1), //cpg1.3.0
  array('Jumlah maksimum huruf/abjad yang dibenarkan dalam keterangan gambar', 'max_img_desc_length', 0),
  array('Jumlah maksimum huruf/abjad yang dibenarkan dalam setiap perkataan', 'max_com_wlength', 0),
  array('Jumlah maksimum barisan ayat dalam ulasan', 'max_com_lines', 0),
  array('Jumlah maksimum huruf/abjad yang dibenarkan dalam satu-satu ulasan', 'max_com_size', 0),
  array('Tampilkan unjuran filem (<i>film strip</i>)', 'display_film_strip', 1),
  array('Jumlah maksimum gambar dalam satu unjuran filem', 'max_film_strip_items', 0),
  array('Kirimkan ulasan kepada penyelaras melalui emel?', 'email_comment_notification', 1), //cpg1.3.0
  array('Masa perantaraan <i>slideshow</i> dalam mili-saat (1 saat = 1000 mili-saat)', 'slideshow_interval', 0), //cpg1.3.0

  'Konfigurasi Fail dan <i>Thumbnails</i>', //cpg1.3.0
  array('Kualiti fail format JPEG', 'jpeg_qual', 0),
  array('Ukuran lebar maksimum setiap <i>thumbnail</i> <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0), //cpg1.3.0
  array('Pilih perbandingan ukuran ( sama ada lebar atau tinggi atau perbandingan maksimum (<i>Max Aspect</i>) )<b>**</b>', 'thumb_use', 7),
  array('Hasilkan gambar perantaraan/intermediasi?','make_intermediate',1),
  array('Lebar atau tinggi maksimum untuk satu gambar intermediasi/video <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0), //cpg1.3.0
  array('Saiz maksimum setiap gambar (dalam KB)', 'max_upl_size', 0), //cpg1.3.0
  array('Lebar atau tinggi maksimum gambar/video (dalam piksel)', 'max_upl_width_height', 0), //cpg1.3.0

  'Konfigurasi Tambahan (<i>advanced</i>) Fail dan <i>Thumbnails</i>', //cpg1.3.0
  array('Paparkan ikon album peribadi untuk pengguna umum?','show_private',1), //cpg1.3.0
  array('Huruf/abjad yang tidak dibenarkan dalam menamakan sesebuah fail', 'forbiden_fname_char',0), //cpg1.3.0
  //array('Accepted file extensions for uploaded pictures', 'allowed_file_extensions',0), //cpg1.3.0
  array('Fail format gambar yang dibenarkan', 'allowed_img_types',0), //cpg1.3.0
  array('Fail format video yang dibenarkan', 'allowed_mov_types',0), //cpg1.3.0
  array('Fail format audio yang dibenarkan', 'allowed_snd_types',0), //cpg1.3.0
  array('Fail format dokumen yang dibenarkan', 'allowed_doc_types',0), //cpg1.3.0
  array('Pilih cara/ejen/fungsi pengubah ukuran gambar','thumb_method',2), //cpg1.3.0
  array('Lokasi untuk utiliti/fungsi ImageMagick \'convert\' (contoh /usr/bin/X11/)', 'impath', 0), //cpg1.3.0
  //array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types',0), //cpg1.3.0
  array('Pilihan <i>command line</i> untuk ImageMagick', 'im_options', 0), //cpg1.3.0
  array('Baca data EXIF dalam fail JPEG', 'read_exif_data', 1), //cpg1.3.0
  array('Baca data IPTC dalam fail JPEG', 'read_iptc_data', 1), //cpg1.3.0
  array('Nama direktori album <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0), //cpg1.3.0
  array('Nama direktori gambar untuk setiap pengguna <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0), //cpg1.3.0
  array('Prefiks untuk gambar asal atau gambar bersaiz biasa <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0), //cpg1.3.0
  array('Prefiks untuk gambar <i>thumbnail</i> <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0), //cpg1.3.0
  array('Mod untuk setiap direktori (seperti mod sistem UNIX)', 'default_dir_mode', 0), //cpg1.3.0
  array('Mod untuk setiap fail (seperti mod sistem UNIX)', 'default_file_mode', 0), //cpg1.3.0

  'Konfigurasi Pengguna',
  array('Izinkan pendaftaran pengguna baru?', 'allow_user_registration', 1),
  array('Pendaftaran memerlukan pengesahan melalui email?', 'reg_requires_valid_email', 1),
  array('Kirimkan emel kepada penyelaras tentang pendaftaran baru pengguna?', 'reg_notify_admin_email', 1), //cpg1.3.0
  array('Izinkan dua pengguna untuk memiliki alamat emel yang sama?', 'allow_duplicate_emails_addr', 1),
  array('Izinkan pengguna memiliki album peribadi (Nota: sekiranya anda menukar \'Ya\' ke \'Tidak\' sebarang album peribadi akan ditukarkan kepada album umum)', 'allow_private_albums', 1), //cpg1.3.0
  array('Kirimkan emel kepada penyelaras tentang gambar-gambar yang memerlukan persetujuan untuk muat tambah?', 'upl_notify_admin_email', 1), //cpg1.3.0
  array('Izinkan pengguna pendaftar melihat senarai ahli?', 'allow_memberlist', 1), //cpg1.3.0

  'Perimeter Tambahan untuk Keterangan Gambar (kosongkan jika tidak digunakan)',
  array('Nama perimeter 1', 'user_field1_name', 0),
  array('Nama perimeter 2', 'user_field2_name', 0),
  array('Nama perimeter 3', 'user_field3_name', 0),
  array('Nama perimeter 4', 'user_field4_name', 0),

  'Konfigurasi <i>Cookies</i>',
  array('Nama <i>cookie</i> yang digunakan oleh skrip (sekiranya anda menggunakan integrasi <i>bbs</i>, sila pastikan ia tidak serupa dengan nama <i>cookie bbs</i>)', 'cookie_name', 0),
  array('Lokasi <i>cookie</i> yang digunakan oleh skrip', 'cookie_path', 0),

  'Konfigurasi Lain-lain',
  array('Aktifkan mod semak-selidik', 'debug_mode', 9), //cpg1.3.0
  array('Paparkan catatan di dalam mod semak-selidik', 'debug_notice', 1), //cpg1.3.0

  '<br /><div align="left"><a name="notice1"></a>(*) Konfigurasi ini tidak boleh ditukar sekiranya anda telah memasukkan gambar/fail ke dalam sistem.<br />
  <a name="notice2"></a>(**) Sekiranya konfigurasi ini ditukar, hanya fail-fail yang ditambah selepas ini akan ditukar, jadi adalah lebih baik konfigurasi ini tidak ditukar sekiranya telah ada gambar-gambar di dalam galeri. Bagaimanapun, anda boleh menukar konfigurasi fail-fail/gambar-gambar tersebut melalui &quot;<a href="util.php">Utiliti Penyelaras</a> (Kemaskini Gambar)&quot; menerusi menu penyelaras.</div><br />', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'E-card yang telah dihantar', //cpg1.3.0
  'ecard_sender' => 'Pengirim', //cpg1.3.0
  'ecard_recipient' => 'Penerima', //cpg1.3.0
  'ecard_date' => 'Tarikh kirim', //cpg1.3.0
  'ecard_display' => 'Paparan e-card', //cpg1.3.0
  'ecard_name' => 'Nama', //cpg1.3.0
  'ecard_email' => 'Emel', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'mendaki', //cpg1.3.0
  'ecard_descending' => 'menurun', //cpg1.3.0
  'ecard_sorted' => 'Susunkan', //cpg1.3.0
  'ecard_by_date' => 'menurut tarikh', //cpg1.3.0
  'ecard_by_sender_name' => 'menurut nama pengirim', //cpg1.3.0
  'ecard_by_sender_email' => 'menurut emel pengirim', //cpg1.3.0
  'ecard_by_sender_ip' => 'menurut alamat IP pengirim', //cpg1.3.0
  'ecard_by_recipient_name' => 'menurut nama penerima', //cpg1.3.0
  'ecard_by_recipient_email' => 'menurut emel penerima', //cpg1.3.0
  'ecard_number' => 'menunjukkan rekod %s - %s daripada %s', //cpg1.3.0
  'ecard_goto_page' => 'ke halaman', //cpg1.3.0
  'ecard_records_per_page' => 'Jumlah rekod/halaman', //cpg1.3.0
  'check_all' => 'Tandakan semua', //cpg1.3.0
  'uncheck_all' => 'Batalkan semua', //cpg1.3.0
  'ecards_delete_selected' => 'Hapuskan e-card yang telah dipilih', //cpg1.3.0
  'ecards_delete_confirm' => 'Anda pasti untuk menghapuskan rekod ini? Sila tandakan kotak yang disediakan!', //cpg1.3.0
  'ecards_delete_sure' => 'Ya, saya pasti', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Anda perlu memasukkan nama dan ulasan',
  'com_added' => 'Ulasan ada telah dimasukkan',
  'alb_need_title' => 'Anda perlu memberikan judul album!',
  'no_udp_needed' => 'Tiada pertukaran diperlukan.',
  'alb_updated' => 'Album telah dikemaskinikan',
  'unknown_album' => 'Album yang dipilih tidak wujud atau anda tidak dibenarkan muat tambah di dalam album ini',
  'no_pic_uploaded' => 'Tiada fail yang telah dimuat tambah!<br /><br />Sekiranya anda telah memilih fail untuk dimuat tambah, sila pastikan <i>server</i> anda membenarkan aktiviti muat tambah...', //cpg1.3.0
  'err_mkdir' => 'Gagal untuk menghasilkan direktori %s !',
  'dest_dir_ro' => 'Direktori yang dimaksudkan (%s) tidak boleh dituliskan oleh skrip!',
  'err_move' => 'Tidak boleh memindahkan %s kepada %s !',
  'err_fsize_too_large' => 'Saiz gambar terlalu besar (ukuran maksimum ialah %s x %s) !', //cpg1.3.0
  'err_imgsize_too_large' => 'Saiz fail terlalu besar (saiz maksimum ialah %s KB) !',
  'err_invalid_img' => 'Fail yang dimasukkan tidak mempunyai format gambar yang dibenarkan!',
  'allowed_img_types' => 'Anda hanya dibenarkan muat tambah gambar berformat %s.',
  'err_insert_pic' => 'Fail \'%s\' gagal dimasukkan ke dalam album', //cpg1.3.0
  'upload_success' => 'Fail anda telah dimasukkan.<br /><br />Gambar ini akan dipaparkan setelah disemak dan disetujui oleh penyelaras.', //cpg1.3.0
  'notify_admin_email_subject' => '%s - Pemberitahuan Muat Tambah Gambar', //cpg1.3.0
  'notify_admin_email_body' => 'Gambar telah dimuat tambah oleh %s yang memerlukan persetujuan anda. Sila lawat %s', //cpg1.3.0
  'info' => 'Informasi',
  'com_added' => 'Ulasan ditambah',
  'alb_updated' => 'Album dikemaskinikan',
  'err_comment_empty' => 'Ulasan anda kosong!',
  'err_invalid_fext' => 'Hanya fail-fail yang mempunyai ekstensi berikut boleh diterima : <br /><br />%s.',
  'no_flood' => 'Harap maaf. Anda adalah pengulas terkini kepada ulasan fail ini<br /><br />Sila tukar ulasan yang telah anda masukkan.', //cpg1.3.0
  'redirect_msg' => 'Anda sedang ditukar haluan ke laman lain.<br /><br /><br />Tekan \'Teruskan\' sekiranya tiada perubahan yang berlaku kepada laman ini',
  'upl_success' => 'Gambar telah dimuat tambah', //cpg1.3.0
  'email_comment_subject' => 'Ulasan ditambah ke Galeri Gambar Coppermine', //cpg1.3.0
  'email_comment_body' => 'Seseorang telah menambahkan ulasan. Lihat ulasan di %s', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Keterangan',
  'fs_pic' => 'Saiz penuh gambar',
  'del_success' => 'telah dihapuskan',
  'ns_pic' => 'Saiz normal gambar',
  'err_del' => 'tidak boleh dihapuskan',
  'thumb_pic' => '<i>thumbnail</i>',
  'comment' => 'ulasan',
  'im_in_alb' => 'gambar dalam album',
  'alb_del_success' => 'Album \'%s\' telah dihapuskan',
  'alb_mgr' => 'Penyelarasan Album',
  'err_invalid_data' => 'Data rosak diterima dalam \'%s\'',
  'create_alb' => 'Album \'%s\' telah dihasilkan',
  'update_alb' => 'Sedang mengemaskinikan album \'%s\' berjudul \'%s\' dan mempunyai induk \'%s\'',
  'del_pic' => 'Hapus fail', //cpg1.3.0
  'del_alb' => 'Hapus album',
  'del_user' => 'Hapus pengguna',
  'err_unknown_user' => 'Pengguna yang dipilih tidak wujud!',
  'comment_deleted' => 'Ulasan telah dihapuskan',
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
  'confirm_del' => 'Anda pasti untuk menghapuskan album ini? \\nSemua ulasan yang berkaitan akan turut terhapus.', //js-alert //cpg1.3.0
  'del_pic' => 'Hapus gambar', //cpg1.3.0
  'size' => '%s x %s piksel',
  'views' => '%s kali dilihat',
  'slideshow' => '<i>Slideshow</i>',
  'stop_slideshow' => 'Hentikan <i>Slideshow</i>',
  'view_fs' => 'Tekan untuk gambar bersaiz penuh',
  'edit_pic' => 'Ubah keterangan', //cpg1.3.0
  'crop_pic' => 'Potong dan pusingkan gambar', //cpg1.3.0
);

$lang_picinfo = array(
  'title' =>'Informasi fail', //cpg1.3.0
  'Filename' => 'Nama fail',
  'Album name' => 'Nama album',
  'Rating' => 'Penilaian (%s undian)',
  'Keywords' => 'Kata-kata berkaitan',
  'File Size' => 'Saiz fail',
  'Dimensions' => 'Ukuran gambar',
  'Displayed' => 'Telah dilihat',
  'Camera' => 'Kamera',
  'Date taken' => 'Tarikh gambar diambil',
  'Aperture' => 'Bukaan lensa',
  'Exposure time' => 'Maka bukaan',
  'Focal length' => 'Panjang fokus',
  'Comment' => 'Ulasan',
  'addFav'=>'Masukkan gambar ke Gambar Pilihan', //cpg1.3.0
  'addFavPhrase'=>'Pilihan', //cpg1.3.0
  'remFav'=>'Buangkan gambar daripada Gambar Pilihan', //cpg1.3.0
  'iptcTitle'=>'Judul IPTC', //cpg1.3.0
  'iptcCopyright'=>'Hak Cipta IPTC', //cpg1.3.0
  'iptcKeywords'=>'Kata-kata berkaitan untuk IPTC', //cpg1.3.0
  'iptcCategory'=>'Kategori induk IPTC', //cpg1.3.0
  'iptcSubCategories'=>'Kategori anak IPTC', //cpg1.3.0
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Ubah ulasan',
  'confirm_delete' => 'Anda pasti untuk menghapuskan ulasan ini?', //js-alert
  'add_your_comment' => 'Masukkan ulasan anda',
  'name'=>'Nama',
  'comment'=>'Ulasan',
  'your_name' => 'Anon',
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Tekan gambar untuk menutup laman ini',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Kiriman e-card',
  'invalid_email' => '<b>Amaran</b> : alamat emel tidak betul!',
  'ecard_title' => 'E-card telah dikirimkan kepada anda istimewa daripada %s',
  'error_not_image' => 'Hanya gambar yang boleh dikirimkan sebagai e-card', //cpg1.3.0
  'view_ecard' => 'Sekiranya e-card tidak dipaparkan dengan baik, sila tekan ini',
  'view_more_pics' => 'Sila tekan untuk gambar bersaiz penuh!',
  'send_success' => 'E-card anda telah dikirimkan',
  'send_failed' => 'Harap maaf. Masalah untuk mengirimkan e-card...',
  'from' => 'Daripada',
  'your_name' => 'Nama pengirim',
  'your_email' => 'Alamat emel pengirim',
  'to' => 'Kepada',
  'rcpt_name' => 'Nama penerima',
  'rcpt_email' => 'Alamat emel penerima',
  'greetings' => 'Ucapan',
  'message' => 'Mesej',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Informasi&nbsp;fail', //cpg1.3.0
  'album' => 'Album',
  'title' => 'Judul gambar',
  'desc' => 'Keterangan gambar',
  'keywords' => 'Kata-kata berkaitan',
  'pic_info_str' => '%s &times; %s - %s KB - %s kali dilihat - %s undian',
  'approve' => 'Setujui fail', //cpg1.3.0
  'postpone_app' => 'Tunda persetujuan',
  'del_pic' => 'Hapus fail', //cpg1.3.0
  'read_exif' => 'Baca data EXIF sekali lagi', //cpg1.3.0
  'reset_view_count' => 'Kosongkan bilangan',
  'reset_votes' => 'Kosongkan undian',
  'del_comm' => 'Hapus ulasan',
  'upl_approval' => 'Persetujuan Muat Tambah',
  'edit_pics' => 'Kemaskini gambar', //cpg1.3.0
  'see_next' => 'Gambar seterusnya', //cpg1.3.0
  'see_prev' => 'Gambar sebelumnya', //cpg1.3.0
  'n_pic' => '%s gambar', //cpg1.3.0
  'n_of_pic_to_disp' => 'Jumlah gambar untuk paparan', //cpg1.3.0
  'apply' => 'Kemaskini', //cpg1.3.0
  'crop_title' => 'Editor Gambar Coppermine', //cpg1.3.0
  'preview' => 'Tunjukkan hasil', //cpg1.3.0
  'save' => 'Simpan gambar', //cpg1.3.0
  'save_thumb' =>'Simpan sebagai thumbnail', //cpg1.3.0
  'sel_on_img' =>'Pilihan seharusnya di dalam kawasan gambar sahaja', //js-alert //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Soalan-soalan yang kerap ditanya', //cpg1.3.0
  'toc' => 'Isi kandungan', //cpg1.3.0
  'question' => 'Soalan: ', //cpg1.3.0
  'answer' => 'Jawapan: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'Soalan-soalan Umum', //cpg1.3.0
  array('Kenapa saya perlu mendaftar?', 'Penyelaras berkemungkinan memerlukan pendaftaran untuk setiap pengguna. Ini adalah kerana pendaftaran membenarkan setiap pengguna menjalankan fungsi-fungsi tambahan seperti muat tambah gambar, keistimewaan untuk memiliki album peribadi, menilai gambar, memberi ulasan dan lain-lain.', 'allow_user_registration', '0'), //cpg1.3.0
  array('Bagaimana untuk saya mendaftar?', 'Sila tekan &quot;Daftar&quot; dan isi borang pendaftaran yang disediakan.<br />Sekiranya penyelaras memerlukan pengesahan pendaftaran melalui emel, anda akan menerima emel (dikirimkan kepada alamat emel yang diberikan di dalam borang pendaftaran) yang mengandungi panduan dan cara-cara untuk mengaktifkan keahlian anda. Ingatan: Anda harus mengaktifkan keahlian untuk masuk ke sistem, yang membolehkan anda mengguna fungsi-fungsi seperti muat tambah gambar, keistimewaan untuk memiliki album peribadi, menilai gambar, memberi ulasan dan lain-lain.', 'allow_user_registration', '1'), //cpg1.3.0
  array('Bagaimana untuk saya masuk ke sistem?', 'Sila tekan &quot;Masuk&quot;, dan isikan kata nama dan kata kunci anda. Tandakan kotak &quot;Ingatkan saya&quot; sekiranya anda perlukan sistem mengingati anda setiap masa anda melayari laman ini.<br /><b>PENTING: Anda perlu mengaktifkan <i>cookies</i> daripada laman ini dan ia tidak boleh dihapuskan sekiranya anda menggunakan &quot;Ingatkan saya&quot;.</b>', 'offline', 0), //cpg1.3.0
  array('Kenapa saya tidak boleh masuk?', 'Sekiranya anda telah mendaftar, anda harus mengaktifkan akaun anda melalui emel yang telah dikirimkan oleh penyelaras. Untuk masalah akaun anda yang lain-lain, sila hubungi penyelaras.', 'offline', 0), //cpg1.3.0
  array('Bagaimana sekiranya saya terlupa kata kunci?', 'Sila tekan &quot;Terlupa kata kunci&quot;. Kata kunci akan dikirimkan ke emel anda', 'offline', 0), //cpg1.3.0
  //array('What if I changed my email address?', 'Just simply login and change your email address through &quot;Profile&quot;', 'offline', 0), //cpg1.3.0
  array('Bagaimana untuk menyimpan gambar pilihan ke dalam &quot;Gambar Pilihan&quot;?', 'Tekan gambar, kemudian tekang butang &quot;Informasi gambar&quot; (<img src="images/info.gif" width="16" height="16" border="0" alt="Informasi gambar" />); layari ke bawah sehingga ke informasi gambar. Kemudian, tekan &quot;Masukkan gambar ke Gambar Pilihan&quot;.<br /><b>PENTING: Anda perlu mengaktifkan <i>cookies</i> daripada laman ini dan ia tidak boleh dihapuskan.</b>', 'offline', 0), //cpg1.3.0
  array('Bagaimana untuk saya menilai gambar?', 'Tekan gambar <i>thumbnail</i> dan layar ke bawah halaman, dan pilih penilaian menerusi &quot;Nilaikan gambar ini&quot;', 'offline', 0), //cpg1.3.0
  array('Bagaimana untuk saya memberi ulasan kepada gambar?', 'Tekan gambar <i>thumbnail</i> dan layar ke bawah halaman, dan masukkan ulasan menerusi &quot;Masukkan ulasan anda&quot;', 'offline', 0), //cpg1.3.0
 array('Bagaimana untuk saya muat tambah gambar?', 'Tekan &quot;Tambah gambar&quot;. Kemudian, masukkan gambar menerusi kotak-kotak yang disediakan (masukkan satu gambar dalam satu kotak sahaja). Tekan &quot;Terus&quot;', 'allow_private_albums', 0), //cpg1.3.0
  array('Ke mana boleh saya masukkan gambar?', 'Anda boleh masukkan gambar ke dalam album peribadi (&quot;Galeriku&quot;). Bergantung kepada konfigurasi, penyelaras boleh membenarkan anda menambah gambar ke galeri utama', 'allow_private_albums', 0), //cpg1.3.0
  array('Apakah jenis dan saiz fail yang dibenarkan?', 'Ini bergantung kepada keputusan penyelaras. Jenis fail gambar selalunya berformat JPG, PNG dan lain-lain', 'offline', 0), //cpg1.3.0
  array('Apakah &quot;Galeriku&quot;?', '&quot;Galeriku&quot; ialah galeri peribadi untuk setiap pengguna yang telah mendaftar. Menerusi galeri peribadi, anda boleh mencipta album-album baru dan menambah gambar ke dalam album-album tersebut', 'allow_private_albums', 0), //cpg1.3.0
  array('Bagaimana untuk saya mencipta, menamakan semula atau menghapuskan album di dalam &quot;Galeriku&quot;?', 'Anda seharusnya berada di dalam &quot;Mod Penyelaras&quot;<br />Tekan &quot;Cipta\/Selaraskan Album&quot; dan tekan butang &quot;Cipta baru&quot;. &quot;Album baru&quot; akan tercipta secara otomatik. Tukar &quot;Album baru&quot; kepada nama album yang anda suka.<br />Anda boleh juga menamakan semula album-album di dalam galeri peribadi.<br />Kemudian, tekan &quot;Kemaskini&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Bagaimana untuk saya mengubah dan mengemaskinikan album?', 'Anda seharusnya berada di dalam &quot;Mod Penyelaras&quot;<br />Tekan &quot;Kemaskini Album&quot;. Pilih album menerusi senarai (di ruang sebelah kanan).<br />Di sini, anda boleh menukar judul album, keterangan album, gambar <i>thumbnail</i> dan juga menentukan siapa yang boleh melihat album tersebut dan siapa yang dibenarkan memberi ulasan.<br />Tekan &quot;Kemaskini album&quot; setelah selesai.', 'allow_private_albums', 0), //cpg1.3.0
  array('Bagaimana untuk saya melihat album-album pengguna lain?', 'Tekan &quot;Senarai album&quot; dan pilih &quot;Galeri Pengguna&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Apakah <i>cookies</i>?', '<i>Cookies</i> adalah sejenis fail yang mengandungi data teks yang dihantar oleh sesebuah laman web dan disimpan secara otomatik ke dalam komputer anda.<br /><i>Cookies</i> selalunya membenarkan pengunjung laman web untuk meninggalkan laman tersebut dan kembali tanpa memasukkan semula kata nama dan kata kunci.', 'offline', 0), //cpg1.3.0
  array('Di mana boleh saya perolehi program Coppermine ini?', 'Coppermine adalah satu program galeri multimedia percuma, dihasilkan di bawah GNU GPL. Program ini mengandungi banyak fungsi yang berguna dan telah diuji dalam pelbagai jenis komputer. Lawati <a href="http://coppermine.sf.net/">Laman Web Coppermine</a> untuk keterangan lanjut.', 'offline', 0), //cpg1.3.0

  'Melayari laman web ini', //cpg1.3.0
  array('Apakah &quot;Senarai album&quot;?', 'Halaman ini menampilkan semua kategori yang boleh anda lawati. Sekiranya anda telah berada di dalam satu-satu kategori, dengan menekan &quot;Senarai album&quot;, kesemua album di dalam kategori ini akan ditampilkan. Selain itu, gambar-gambar <i>thumbnail</i> juga akan ditampilkan di mana setiap <i>thumbnail</i> terkandung di dalam kategori yang sama ataupun kategori yang lain.', 'offline', 0), //cpg1.3.0
  array('Apakah &quot;Galeriku&quot;?', '&quot;Galeriku&quot; ialah galeri peribadi untuk setiap pengguna yang telah mendaftar. Menerusi galeri peribadi, anda boleh mencipta album-album baru dan menambah gambar ke dalam album-album tersebut', 'allow_private_albums', 0), //cpg1.3.0
  array('Apakah perbezaan di antara &quot;Mod Penyelaras&quot; dan &quot;Mod Pengguna&quot;?', 'Sekiranya anda berada di dalam mod penyelaras, anda boleh mengemaskini dan menambah gambar ke dalam album peribadi anda (anda juga boleh mengemaskini dan menambah gambar ke dalam album lain selain daripada album peribadi - ini tertakluk kepada kebenaran penyelaras utama sistem).', 'allow_private_albums', 0), //cpg1.3.0
  array('Apakah &quot;Tambahan terkini&quot;?', 'Fungsi ini menampilkan gambar-gambar terkini yang telah ditambah oleh pengguna-pengguna sistem.', 'offline', 0), //cpg1.3.0
  array('Apakah &quot;Ulasan terkini&quot;?', 'Fungsi ini menampilkan ulasan terkini bersama-sama fail yang telah dimasukkan oleh pengguna-pengguna sistem.', 'offline', 0), //cpg1.3.0
  array('Apakah &quot;Terbanyak Dilihat&quot;?', 'Fungsi ini menampilkan gambar-gambar yang paling banyak dilihat oleh pengunjung (sama ada pengguna sistem ataupun bukan pengguna).', 'offline', 0), //cpg1.3.0
  array('Apakah &quot;Undian Tertinggi&quot;?', 'Fungsi ini menampilkan gambar-gambar yang telah menerima penilaian tertinggi daripada pengunjung laman, dengan menunjukkan purata penilaian (sebagai contoh: sekiranya 5 pengunjung memberikan <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />, gambar tersebut akan menerima purata penilaian sebanyak <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ; Sekiranya 5 pengunjung menilai gambar tersebut daripada 1 ke 5 (1,2,3,4,5), ini akan menghasilkan purata penilaian sebanyak <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />Penilaiann adalah di antara <img src="images/rating5.gif" width="65" height="14" border="0" alt="cemerlang" /> (cemerlang) dan <img src="images/rating0.gif" width="65" height="14" border="0" alt="tidak bagus" /> (tidak bagus).', 'offline', 0), //cpg1.3.0
  array('Apakah &quot;Gambar Pilihan&quot;?', 'Fungsi ini membenarkan pengguna untuk menyimpan gambar-gambar pilihan mereka di dalam <i>cookie</i> yang dihantar ke komputer anda.', 'offline', 0), //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Hantar Kata Kunci', //cpg1.3.0
  'err_already_logged_in' => 'Anda telah dikenalpasti!', //cpg1.3.0
  'enter_username_email' => 'Sila masukkan kata nama atau alamat email anda', //cpg1.3.0
  'submit' => 'hantar', //cpg1.3.0
  'failed_sending_email' => 'Emel yang mengandungi kata kunci tidak boleh dihantar!', //cpg1.3.0
  'email_sent' => 'Emel yang mengandungi kata nama dan kata kunci anda telah dihantar kepada %s', //cpg1.3.0
  'err_unk_user' => 'Pengguna yang dipilih tidak wujud!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - Peringatan Kata Kunci', //cpg1.3.0
  'passwd_reminder_body' => 'Anda telah memohon supaya kata nama dan kata kunci anda dikirimkan semula:
Kata nama: %s
Kata kunci: %s
Tekan %s untuk masuk.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Nama kumpulan',
  'disk_quota' => 'Kuota disk',
  'can_rate' => 'Boleh menilai gambar', //cpg1.3.0
  'can_send_ecards' => 'Boleh mengirim e-card',
  'can_post_com' => 'Boleh memberi ulasan',
  'can_upload' => 'Boleh muat tambah', //cpg1.3.0
  'can_have_gallery' => 'Boleh memiliki galeri peribadi',
  'apply' => 'Kemaskini',
  'create_new_group' => 'Cipta kumpulan baru',
  'del_groups' => 'Hapus kumpulan yang dipilih',
  'confirm_del' => 'Amaran: Apabila anda menghapuskan satu-satu kumpulan, pengguna dalam kumpulan tersebut akan dipindahkan ke kumpulan \'Registered\'!\n\nAnda pasti?', //js-alert //cpg1.3.0
  'title' => 'Selaras pengguna kumpulan',
  'approval_1' => 'Setujui muat tambah ke album umum (1)',
  'approval_2' => 'Setujui muat tambah ke album peribadi (2)',
  'upload_form_config' => 'Konfigurasi muat tambah', //cpg1.3.0
  'upload_form_config_values' => array( 'Single file uploads only', 'Multiple file uploads only', 'URI uploads only', 'ZIP upload only', 'File-URI', 'File-ZIP', 'URI-ZIP', 'File-URI-ZIP'), //cpg1.3.0
  'custom_user_upload'=>'Pengguna boleh mengubah jumlah maksimum fail untuk dimuat tambah?', //cpg1.3.0
  'num_file_upload'=>'Jumlah maksimum fail untuk muat tambah', //cpg1.3.0
  'num_URI_upload'=>'Jumlah maksimum URI untuk muat tambah', //cpg1.3.0
  'note1' => '<b>(1)</b> Muat tambah ke album umum memerlukan persetujuan penyelaras',
  'note2' => '<b>(2)</b> Muat tambah ke album peribadi milik pengguna lain memerlukan persetujuan penyelaras',
  'notes' => 'Nota',
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Selamat Datang !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Anda pasti untuk menghapuskan album ini? \\nSemua fail dan ulasan di dalam album ini akan turut terhapus', //js-alert //cpg1.3.0
  'delete' => 'Hapus',
  'modify' => 'Kemaskini Album',
  'edit_pics' => 'Kemaskini Gambar', //cpg1.3.0
);

$lang_list_categories = array(
  'home' => 'Laman Utama',
  'stat1' => '<b>[pictures]</b> gambar dalam <b>[albums]</b> album dan <b>[cat]</b> kategori dengan <b>[comments]</b> ulasan, dilihat sebanyak <b>[views]</b> kali', //cpg1.3.0
  'stat2' => '<b>[pictures]</b> gambar dalam <b>[albums]</b> album, dilihat sebanyak <b>[views]</b> kali', //cpg1.3.0
  'xx_s_gallery' => 'Galeri Album %s',
  'stat3' => '<b>[pictures]</b> gambar dalam <b>[albums]</b> album dengan <b>[comments]</b> ulasan, dilihat <b>[views]</b> kali', //cpg1.3.0
);

$lang_list_users = array(
  'user_list' => 'Senarai pengguna',
  'no_user_gal' => 'Tiada galeri ditemui',
  'n_albums' => '%s jumlah album',
  'n_pics' => '%s jumlah gambar', //cpg1.3.0
);

$lang_list_albums = array(
  'n_pictures' => '%s jumlah gambar', //cpg1.3.0
  'last_added' => ', terkini ditambah pada %s',
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Masuk',
  'enter_login_pswd' => 'Sila masukkan kata nama dan kata kunci untuk akses',
  'username' => 'Kata Nama',
  'password' => 'Kata Kunci',
  'remember_me' => 'Ingatkan saya',
  'welcome' => 'Selamat Datang %s ...',
  'err_login' => '*** Gagal dikenalpasti. Sila cuba sekali lagi ***',
  'err_already_logged_in' => 'Anda telah dikenalpasti!',
  'forgot_password_link' => 'Terlupa kata kunci', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Keluar',
  'bye' => 'Selamat Tinggal %s ...',
  'err_not_loged_in' => 'Identiti anda tidak dikenalpasti!',
);

// ------------------------------------------------------------------------- //
// File phpinfo.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'Informasi PHP', //cpg1.3.0
  'explanation' => 'Berikut adalah keputusan yang dihasilkan oleh fungsi PHP <a href="http://www.php.net/phpinfo">phpinfo()</a>.', //cpg1.3.0
  'no_link' => 'Membenarkan pengunjung melihat hasil <i>phpinfo()</i> adalah tidak digalakkan sama sekali kerana ia mengandungi informasi penting berkenaan dengan sistem komputer di mana anda menjalankan Coppermine. Hanya penyelaras utama yang boleh melihat hasil <i>phpinfo()</i>.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Kemaskini album %s',
  'general_settings' => 'Konfigurasi umum',
  'alb_title' => 'Judul album',
  'alb_cat' => 'Kategori album',
  'alb_desc' => 'Keterangan album',
  'alb_thumb' => '<i>Thumbnail</i>',
  'alb_perm' => 'Konfigurasi akses untuk album ini',
  'can_view' => 'Album boleh dilihat oleh',
  'can_upload' => 'Pengunjung boleh muat tambah gambar',
  'can_post_comments' => 'Pengunjung boleh memberi ulasan',
  'can_rate' => 'Pengunjung boleh menilai gambar',
  'user_gal' => 'Galeri Pengguna',
  'no_cat' => '* Tiada kategori *',
  'alb_empty' => 'Album kosong',
  'last_uploaded' => 'Tambahan terkini',
  'public_alb' => 'Semua (album umum)',
  'me_only' => 'Saya sahaja',
  'owner_only' => 'Pemilik album (%s) sahaja',
  'groupp_only' => 'Ahli kumpulan \'%s\' sahaja',
  'err_no_alb_to_modify' => 'Tiada album yang boleh anda kemaskini.',
  'update' => 'Kemaskini album', //cpg1.3.0
  'notice1' => '(*) bergantung kepada konfigurasi %skumpulan pengguna%s', //cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Harap maaf. Anda telahpun memberi ulasan kepada gambar ini', //cpg1.3.0
  'rate_ok' => 'Undian diterima',
  'forbidden' => 'Anda dilarang mengulas gambar sendiri.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Dari masa ke semasa, penyelaras {SITE_NAME} akan sentiasa berusaha untuk menghapuskan, mengemaskini atau mengubah isi kandungan yang tidak sesuai untuk tatapan khalayak ramai. Walaubagaimanapun, pengendalian terhadap setiap isi kandungan yang telah ditambah oleh pengguna-pengguna adalah sukar dan kadangkala mustahil untuk dilakukan pada setiap masa. Oleh hal yang demikian, anda harus bersetuju bahawa kesemua isi kandungan yang telah ditambah ke laman web ini adalah tertakluk kepada pandangan dan tingkah laku individu dan bukan bergantung kepada penyelaras laman ini (kecuali isi kandungan yang telah ditambah dan dimasukkan oleh penyelaras sendiri). Oleh itu, penyelaras laman ini tidak boleh memegang tanggung jawab sedemikian.<br />
<br />
Di sini anda bersetuju untuk tidak memasukkan sebarang isi kandungan yang buruk dan tidak sesuai untuk tatapan khalayak ramai, dan juga isi kandungan yang menyalahi undang-undang. Anda juga bersetuju bahawa penyelaras utama laman web {SITE_NAME} memiliki hak mutlak untuk menghapuskan atau mengubah sebarang isi kandungan tersebut. Sebagai pengguna laman ini, anda harus menyedari bahawa isi kandungan yang telah ditambah akan disimpan di dalam sistem <i>database</i>. Walaupun data dan informasi sedemikian tidak akan diberikan kepada mana-mana individu atau organisasi tanpa kebenaran anda, para penyelaras utama laman web ini tidak boleh memberi apa-apa jaminan dan tanggungjawab terhadap sebarang aktiviti penggeladahan data dan sistem secara keseluruhan.<br />
<br />
Laman web ini menggunakan <i>cookies</i> untuk menyimpan data ke dalam komputer anda. <i>Cookies</i> ini hanyalah digunakan untuk menyenangkan pengalaman anda melayari laman web ini. Alamat emel anda digunakan di dalam laman web ini hanyalah untuk pengesahan pendaftaran, butiran diri dan juga kata kunci pilihan anda.<br />
<br />
Dengan menekan butang 'Saya setuju' di bawah ini, anda telah bersetuju dengan syarat-syarat di atas.
EOT;

$lang_register_php = array(
  'page_title' => 'Pendaftaran Pengguna',
  'term_cond' => 'Syarat-syarat',
  'i_agree' => 'Saya setuju',
  'submit' => 'Daftar',
  'err_user_exists' => 'Kata nama sedia ada. Sila masukkan kata nama lain',
  'err_password_mismatch' => 'Kedua-dua kata nama tidak serupa, sila masukkan semula',
  'err_uname_short' => 'Kata nama dimestikan dengan minimum 2 huruf/abjad',
  'err_password_short' => 'Kata kunci dimestikan dengan minimum 2 huruf/abjad',
  'err_uname_pass_diff' => 'Kata nama dan kata kunci tidak boleh serupa',
  'err_invalid_email' => 'Alamat emel tidak sah',
  'err_duplicate_email' => 'Pengguna lain telah menggunakan alamat emel yang sama!',
  'enter_info' => 'Masukkan informasi pendaftaran',
  'required_info' => 'Informasi Yang Diperlukan',
  'optional_info' => 'Informasi Pilihan',
  'username' => 'Kata nama',
  'password' => 'Kata kunci',
  'password_again' => 'Sila masukkan semula kata kunci',
  'email' => 'Emel',
  'location' => 'Lokasi',
  'interests' => 'Kegemaran',
  'website' => 'Laman web',
  'occupation' => 'Pekerjaan',
  'error' => 'Perhatian',
  'confirm_email_subject' => '%s - Pengesahan pendaftaran',
  'information' => 'Informasi',
  'failed_sending_email' => 'Emel pengesahan pendaftaran gagal dihantar!',
  'thank_you' => 'Terima kasih kerana mendaftar.<br /><br />Emel pengesahan pendaftaran (bersama-sama panduan untuk mengaktifkan akaun) telah dihantar ke alamat emel yang diberikan.',
  'acct_created' => 'Akaun anda telah dihasilkan. Anda boleh memasuki laman dengan menggunakan kata nama dan kata kunci yang anda pilih',
  'acct_active' => 'Akaun anda aktif. Anda boleh memasuki laman dengan menggunakan kata nama dan kata kunci yang anda pilih',
  'acct_already_act' => 'Akaun anda telah sedia ada aktif!',
  'acct_act_failed' => 'Akaun ini tidak boleh diaktifkan!',
  'err_unk_user' => 'Pengguna yang dipilih tidak wujud!',
  'x_s_profile' => 'Profail %s',
  'group' => 'Kumpulan pengguna',
  'reg_date' => 'Tarikh mendaftar',
  'disk_usage' => 'Kadar penggunaan disk',
  'change_pass' => 'Tukar kata kunci',
  'current_pass' => 'Kata kunci sekarang',
  'new_pass' => 'Kata kunci baru',
  'new_pass_again' => 'Kata kunci baru (masukkan semula)',
  'err_curr_pass' => 'Kata kunci sekarang salah',
  'apply_modif' => 'Kemaskini',
  'change_pass' => 'Tukar kata kunci',
  'update_success' => 'Profail anda telah dikemaskini',
  'pass_chg_success' => 'Kata kunci telah dikemaskini',
  'pass_chg_error' => 'Kata kunci gagal dikemaskini',
  'notify_admin_email_subject' => '%s - Pemberitahuan pendaftaran baru', //cpg1.3.0
  'notify_admin_email_body' => 'Pengguna "%s" telah mendaftar dalam galeri anda', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
Terima kasih kerana mendaftar di {SITE_NAME}

Kata nama anda : "{USER_NAME}"
Kata kunci anda : "{PASSWORD}"

Untuk mengaktifkan akaun ini, sila tekan barisan di bawah ini
atau ambil dan tampilkan ke dalam pelayar Internet anda:

{ACT_LINK}

Salam sejahtera,

Penyelaras {SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'Kemaskini ulasan',
  'no_comment' => 'Tiada ulasan untuk disemak dan dikemaskini',
  'n_comm_del' => '%s ulasan dihapuskan',
  'n_comm_disp' => 'Jumlah ulasan untuk dipaparkan',
  'see_prev' => 'Ulasan seterusnya',
  'see_next' => 'Ulasan sebelumnya',
  'del_comm' => 'Hapus ulasan yang dipilih',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
  0 => 'Cari',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Cari fail baru', //cpg1.3.0
  'select_dir' => 'Pilih direktori',
  'select_dir_msg' => 'Fungsi ini membolehkan anda menambah fail-fail (sekaligus) yang telah anda muat tambah ke <i>server</i> melalui FTP.<br /><br />Sila pilih direktori di mana anda telah muat tambah fail-fail anda', //cpg1.3.0
  'no_pic_to_add' => 'Tiada fail untuk ditambah', //cpg1.3.0
  'need_one_album' => 'Anda harus memilih satu album untuk menjalankan fungsi ini',
  'warning' => 'Amaran',
  'change_perm' => 'skrip gagal menulis direktori, anda perlu menukarkan mod direktori kepada 755 anda 777 sebelum menambahkan fail!', //cpg1.3.0
  'target_album' => '<b>Menambahkan fail &quot;</b>%s<b>&quot; ke dalam </b>%s', //cpg1.3.0
  'folder' => 'Direktori',
  'image' => 'gambar',
  'album' => 'Album',
  'result' => 'Hasil',
  'dir_ro' => 'Direktori tidak boleh ditulis. ',
  'dir_cant_read' => 'Direkroti tidak boleh dibaca. ',
  'insert' => 'Tambah', //cpg1.3.0
  'list_new_pic' => 'Senarai fail/gambar baru', //cpg1.3.0
  'insert_selected' => 'Masukkan fail/gambar yang dipilih', //cpg1.3.0
  'no_pic_found' => 'Tiada fail/gambar baru ditemui', //cpg1.3.0
  'be_patient' => 'Sila bersabar, skrip memerlukan masa untuk menambahkan fail/gambar', //cpg1.3.0
  'no_album' => 'tiada album yang dipilih',  //cpg1.3.0
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : bermaksud fail/gambar telah ditambah'.
                          '<li><b>DP</b> : bermaksud sistem menemui dua fail serupa dan fail telah sedia ada di dalam sistem'.
                          '<li><b>PB</b> : bermaksud fail tidak boleh ditambah, sila semak konfigurasi dan akses direktori di mana fail-fail berada'.
                          '<li><b>NA</b> : bermaksud anda tidak memilih album di mana fail-fail harus ditambah, tekan \'<a href="javascript:history.back(1)">kembali</a>\' dan pilih satu album. Sekiranya anda tidak mempunyai album <a href="albmgr.php">hasilkan satu</a></li>'.
                          '<li>Sekiranya tanda-tanda OK, DP, PB tidak muncul, tekan di atas nama fail yang berkaitan untuk menyemak sebarang pesanan yang dihasilkan oleh PHP'.
                          '<li>Sekiranya pelayar Internet anda berhenti berfungsi, sila tekan kunci \'Refresh\' atau \'Reload\' menerusi pelayar Internet anda'.
                          '</ul>', //cpg1.3.0
  'select_album' => 'pilih album', //cpg1.3.0
  'check_all' => 'Pilih Semua', //cpg1.3.0
  'uncheck_all' => 'Batal Semua', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Larang Pengguna',
  'user_name' => 'Kata nama',
  'ip_address' => 'Alamat IP',
  'expiry' => 'Tarikh luput (kosong bermakna aktif selama-lamanya)',
  'edit_ban' => 'Simpan',
  'delete_ban' => 'Hapus',
  'add_new' => 'Tambah larangan baru',
  'add_ban' => 'Tambah',
  'error_user' => 'Pengguna tidak ditemui', //cpg1.3.0
  'error_specify' => 'Sila masukkan sama ada kata nama pengguna atau alamat IP', //cpg1.3.0
  'error_ban_id' => 'Identiti larangan tidak sah!', //cpg1.3.0
  'error_admin_ban' => 'Anda tidak boleh melarang diri sendiri!', //cpg1.3.0
  'error_server_ban' => 'Anda tidak boleh melarang <i>server</i> sendiri!', //cpg1.3.0
  'error_ip_forbidden' => 'Anda tidak boleh melarang alamat IP ini!', //cpg1.3.0
  'lookup_ip' => 'Selidik alamat IP address', //cpg1.3.0
  'submit' => 'hantar!', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Tambah gambar', //cpg1.3.0
  'custom_title' => 'Borang konfigurasi muat tambah', //cpg1.3.0
  'cust_instr_1' => 'Anda telah dibenarkan olen penyelaras untuk menentukan jumlah fail/gambar yang boleh dimuat tambah sekaligus. Walau bagaimanapun, anda hanya boleh menetapkan jumlah tidak lebih daripada yang tertakluk di bawah:', //cpg1.3.0
  'cust_instr_2' => 'Konfigurasi', //cpg1.3.0
  'cust_instr_3' => 'Bilangan fail yang boleh ditambah sekaligus: %s', //cpg1.3.0
  'cust_instr_4' => 'Bilangan URI/URL yang boleh dimasukkan sekaligus: %s', //cpg1.3.0
  'cust_instr_5' => 'Bilangan URI/URL yang boleh dimasukkan sekaligus:', //cpg1.3.0
  'cust_instr_6' => 'Bilangan fail yang boleh ditambah sekaligus:', //cpg1.3.0
  'cust_instr_7' => 'Sila masukkan bilangan untuk setiap jenis muat tambah yang diperlukan di bawah.  Kemudian, tekan \'Terus\'. ', //cpg1.3.0
  'reg_instr_1' => 'Harap maaf. Borang muat tambah tidak boleh dihasilkan.', //cpg1.3.0
  'reg_instr_2' => 'Sekarang anda boleh menambah fail/gambar dengan menggunakan kotak-kotak di bawah. Saiz fail tidak boleh melebihi %s KB untuk setiap gambar. Sekiranya anda menambah fail berformat ZIP, fail-fail ini akan diterima tetapi tidak boleh dibuka.', //cpg1.3.0
  'reg_instr_3' => 'Untuk membuka fail-fail berformat ZIP, you must use the file upload box provided in the \'Decompressive ZIP Upload\' area.', //cpg1.3.0
  'reg_instr_4' => 'Sekiranya anda muat tambah melalui URI/URL, sila masukkan alamat laman web seperti: http://www.mysite.com/images/example.jpg', //cpg1.3.0
  'reg_instr_5' => 'Setelah selesai, tekan \'Terus\'.', //cpg1.3.0
  'reg_instr_6' => 'Muat tambah fail-fail berformat ZIP:', //cpg1.3.0
  'reg_instr_7' => 'Muat tambah fail menerusi disk:', //cpg1.3.0
  'reg_instr_8' => 'Muat tambah menerusi URI/URL:', //cpg1.3.0
  'error_report' => 'Perhatian', //cpg1.3.0
  'error_instr' => 'Fail-fail berikut gagal dimuat tambah:', //cpg1.3.0
  'file_name_url' => 'Nama fail/URL', //cpg1.3.0
  'error_message' => 'Mesej', //cpg1.3.0
  'no_post' => 'Fail tidak dimuat tambah menggunakan POST.', //cpg1.3.0
  'forb_ext' => 'Akhiran kepada nama fail tidak sah.', //cpg1.3.0
  'exc_php_ini' => 'Fail saiz melebihi tahap yang dibenarkan dalam php.ini.', //cpg1.3.0
  'exc_file_size' => 'Fail saiz melebihi tahap yang dibenarkan CPG.', //cpg1.3.0
  'partial_upload' => 'Hanya muat tambah separuh.', //cpg1.3.0
  'no_upload' => 'Tiada tambahan fail/gambar.', //cpg1.3.0
  'unknown_code' => 'Kod mesej PHP tidak dikenalpasti.', //cpg1.3.0
  'no_temp_name' => 'Gagal muat tambah - Tiada nama sementara.', //cpg1.3.0
  'no_file_size' => 'Fail tidak mempunyai data/fail rosak', //cpg1.3.0
  'impossible' => 'Tidak boleh dipindahkan.', //cpg1.3.0
  'not_image' => 'Fail tidak dikenalpasti sebagai gambar/fail rosak', //cpg1.3.0
  'not_GD' => 'Bukan sambungan GD.', //cpg1.3.0
  'pixel_allowance' => 'Jumlah piksel yang dibenarkan melebihi.', //cpg1.3.0
  'incorrect_prefix' => 'Prefiks URI/URL tidak sah', //cpg1.3.0
  'could_not_open_URI' => 'Tidak boleh melayari URI.', //cpg1.3.0
  'unsafe_URI' => 'URI didapati tidak selamat.', //cpg1.3.0
  'meta_data_failure' => 'Masalah dalam data meta', //cpg1.3.0
  'http_401' => '401 Unauthorized', //cpg1.3.0
  'http_402' => '402 Payment Required', //cpg1.3.0
  'http_403' => '403 Forbidden', //cpg1.3.0
  'http_404' => '404 Not Found', //cpg1.3.0
  'http_500' => '500 Internal Server Error', //cpg1.3.0
  'http_503' => '503 Service Unavailable', //cpg1.3.0
  'MIME_extraction_failure' => 'Gagal memproses MIME.', //cpg1.3.0
  'MIME_type_unknown' => 'Jenis MIME tidak dikenalpasti', //cpg1.3.0
  'cant_create_write' => 'Gagal menghasilkan fail.', //cpg1.3.0
  'not_writable' => 'Fail tidak boleh ditulis.', //cpg1.3.0
  'cant_read_URI' => 'Gagal melayari URI/URL', //cpg1.3.0
  'cant_open_write_file' => 'Gagal membuka fail URI.', //cpg1.3.0
  'cant_write_write_file' => 'Gagal menulis fail URI.', //cpg1.3.0
  'cant_unzip' => 'Fail ZIP tidak boleh dibuka.', //cpg1.3.0
  'unknown' => 'Masalah tidak dikenalpasti', //cpg1.3.0
  'succ' => 'Telah dimuat tambah', //cpg1.3.0
  'success' => '%s fail telah dimasukkan.', //cpg1.3.0
  'add' => 'Sila tekan \'Terus\' untuk menambah gambar-gambar ke dalam album.', //cpg1.3.0
  'failure' => 'Gagal muat tambah', //cpg1.3.0
  'f_info' => 'Informasi fail', //cpg1.3.0
  'no_place' => 'Fail gagal dimasukkan.', //cpg1.3.0
  'yes_place' => 'Fail telah dimasukkan.', //cpg1.3.0
  'max_fsize' => 'Saiz maksimum fail ialah %s KB',
  'album' => 'Album',
  'picture' => 'Nama fail', //cpg1.3.0
  'pic_title' => 'Judul gambar', //cpg1.3.0
  'description' => 'Keterangan gambar', //cpg1.3.0
  'keywords' => 'Kata-kata berkaitan (asingkan setiap kata-kata dengan <i>spaces</i>)',
  'err_no_alb_uploadables' => 'Harap maaf. Tiada album yang boleh anda muat tambah fail.', //cpg1.3.0
  'place_instr_1' => 'Sila masukkan fail-fail ke dalam pilihan album di bawah.  Anda boleh juga memasukkan keterangan setiap gambar.', //cpg1.3.0
  'place_instr_2' => 'Fail-fail lain diperlukan. Sila tekan \'Terus\'.', //cpg1.3.0
  'process_complete' => 'Anda telah memasukkan kesemua fail.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'title' => 'Selaras Pengguna',
  'name_a' => 'Nama (mendaki)',
  'name_d' => 'Nama (menurun)',
  'group_a' => 'Kumpulan (mendaki)',
  'group_d' => 'Kumpulan (menurun)',
  'reg_a' => 'Tarikh daftar (mendaki)',
  'reg_d' => 'Tarikh daftar (menurun)',
  'pic_a' => 'Jumlah fail (mendaki)',
  'pic_d' => 'Jumlah fail (menurun)',
  'disku_a' => 'Penggunaan disk (mendaki)',
  'disku_d' => 'Penggunaan disk (menurun)',
  'lv_a' => 'Tarikh lawatan (mendaki)', //cpg1.3.0
  'lv_d' => 'Tarikh lawatan (menurun)', //cpg1.3.0
  'sort_by' => 'Senaraikan menurut',
  'err_no_users' => 'Tiada pengguna!',
  'err_edit_self' => 'Anda tidak boleh mengemaskini profail sendiri, sebaliknya sila gunakan fungsi \'Profailku\'',
  'edit' => 'Tukar',
  'delete' => 'Hapus',
  'name' => 'Kata nama',
  'group' => 'Kumpulan',
  'inactive' => 'Tidak aktif',
  'operations' => 'Operasi',
  'pictures' => 'Jumlah gambar', //cpg1.3.0
  'disk_space' => 'Kuota digunakan',
  'registered_on' => 'Tarikh daftar',
  'last_visit' => 'Lawatan Terkini', //cpg1.3.0
  'u_user_on_p_pages' => '%d pengguna dalam %d jumlah halaman',
  'confirm_del' => 'Anda pasti untuk menghapuskan pengguna ini? \\nSegala fail/gambar milik pengguna ini akan turut terhapus.', //js-alert //cpg1.3.0
  'mail' => 'Hantar emel',
  'err_unknown_user' => 'Pengguna yang dipilih tidak wujud!',
  'modify_user' => 'Kemaskini pengguna',
  'notes' => 'Nota',
  'note_list' => '<li>Sekiranya anda tidak mahu menukar kata kunci sekarang, kosongkan perimeter kata kunci',
  'password' => 'Kata kunci',
  'user_active' => 'Pengguna aktif',
  'user_group' => 'Kumpulan pengguna',
  'user_email' => 'Emel pengguna',
  'user_web_site' => 'User web site',
  'create_new_user' => 'Cipta pengguna baru',
  'user_location' => 'Lokasi',
  'user_interests' => 'Kegemaran',
  'user_occupation' => 'Pekerjaan',
  'latest_upload' => 'Lihat muat tambah terkini', //cpg1.3.0
  'never' => 'tidak pernah', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
  'title' => 'Utiliti penyelaras (Ubah saiz gambar)', //cpg1.3.0
  'what_it_does' => 'Fungsi-fungsi utiliti',
  'what_update_titles' => 'Kemaskini judul gambar daripada nama fail',
  'what_delete_title' => 'Hapus judul gambar',
  'what_rebuild' => 'Bina semula gambar <i>thumbnail</i> dan ubah saiz gambar',
  'what_delete_originals' => 'Hapus saiz asal gambar dan gantikan dengan saiz yang dibenarkan',
  'file' => 'Fail',
  'title_set_to' => 'Judul gambar',
  'submit_form' => 'Hantar',
  'updated_succesfully' => 'telah dikemaskinikan',
  'error_create' => 'Gagal membina',
  'continue' => 'Proseskan gambar lain-lain',
  'main_success' => 'Fail %s telah digunakan sebagai fail utama', //cpg1.3.0
  'error_rename' => 'Gagal menamakan %s kepada %s',
  'error_not_found' => 'Fail %s tidak jumpa',
  'back' => 'kembali',
  'thumbs_wait' => 'Sedang mengemaskini <i>thumbnail<i>/gambar, sila tunggu sebentar...',
  'thumbs_continue_wait' => 'Masih lagi mengemaskini <i>thumbnail<i>/gambar...',
  'titles_wait' => 'Sedang kemaskini judul gambar, sila tunggu sebentar...',
  'delete_wait' => 'Sedang menghapuskan gambar, sila tunggu sebentar...',
  'replace_wait' => 'Sedang menghapuskan gambar asal atau/dan digantikan dengan saiz yang dibenarkan, sila tunggu sebentar...',
  'instruction' => 'Panduan',
  'instruction_action' => 'Pilih operasi',
  'instruction_parameter' => 'Pilih perimeter',
  'instruction_album' => 'Pilih album',
  'instruction_press' => '%s',
  'update' => 'Kemaskini <i>thumbnail</i> dan/atau gambar',
  'update_what' => 'Apa yang perlu dikemaskini',
  'update_thumb' => '<i>Thumbnail</i> sahaja',
  'update_pic' => 'Gambar yang telah dimuat tambah',
  'update_both' => 'Kedua-dua <i>thumbnail</i> dan gambar-gambar yang telah dimuat tambah',
  'update_number' => 'Jumlah gambar yang perlu dikemaskini',
  'update_option' => '(Sekiranya anda menemui masalah dengan konfigurasi ini, sila cuba lagi dengan merendahkan jumlah gambar)',
  'filename_title' => 'Nama Fail &rArr; Judul Gambar', //cpg1.3.0
  'filename_how' => 'Bagaimana seharusnya nama fail ditukar',
  'filename_remove' => 'Hapuskan fail berakhir dengan .jpg dan gantikan _ (<i>underscore</i>) dengan <i>spaces</i>',
  'filename_euro' => 'Tukar 2003_11_23_13_20_20.jpg kepada 23/11/2003 13:20',
  'filename_us' => 'Tukar 2003_11_23_13_20_20.jpg kepada 11/23/2003 13:20',
  'filename_time' => 'Tukar 2003_11_23_13_20_20.jpg kepada 13:20',
  'delete' => 'Haus judul gambar atau gambar asal', //cpg1.3.0
  'delete_title' => 'Hapus judul gambar', //cpg1.3.0
  'delete_original' => 'Hapus gambar bersaiz asal',
  'delete_replace' => 'Hapus gambar bersaiz asal dan gantikan dengan saiz yang dibenarkan',
  'select_album' => 'Pilih album',
  'delete_orphans' => 'Hapus ulasan asing - yang tiada kaitan dengan album (terhadap semua album)', //cpg1.3.0
  'orphan_comment' => 'jumlah ulasan asing', //cpg1.3.0
  'delete' => 'Hapus', //cpg1.3.0
  'delete_all' => 'Hapus semua', //cpg1.3.0
  'comment' => 'Ulasan: ', //cpg1.3.0
  'nonexist' => 'berkait dengan fail yang tidak wujud # ', //cpg1.3.0
  'phpinfo' => 'Paparkan hasil fungsi phpinfo', //cpg1.3.0
  'update_db' => 'Kemaskini <i>database</i>', //cpg1.3.0
  'update_db_explanation' => '<b>Notis Penting</b>: Sekiranya anda telah menggantikan fail-fail Coppermine, telah melakukan perubahan terhadap fail atau telah menggunakan Coppermine versi baru daripada versi lama (<i>upgrade</i>), sila pastikan anda menggunakan fungsi ini sekali sahaja. Ini akan menyebabkan perubahan terhadap struktur atau/dan data konfigurasi dalam <i>database</i> Coppermine.', //cpg1.3.0
);

?>