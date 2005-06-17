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
// CVS version: $Id: indonesian-utf-8.php,v 1.6 2004/07/24 15:04:05 gaugau Exp $
// ------------------------------------------------------------------------- //

// info about translators and translated language
$lang_translation_info = array(
'lang_name_english' => 'Indonesian',  
'lang_name_native' => 'Bahasa Indonesia', 
'lang_country_code' => 'id', 
'trans_name'=> 'sengsara', //the name of the translator - can be a nickname
'trans_email' => 'sengsara@batamweb.net', //translator's email address (optional)
'trans_website' => 'http://batamweb.net/', //translator's website (optional)
'trans_date' => '2004-04-10', //the date the translation was created / last modified
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Byte', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab');
$lang_month = array('Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agt', 'Sep', 'Okt', 'Nop', 'Des');

// Some common strings
$lang_yes = 'Ya';
$lang_no  = 'Tidak';
$lang_back = 'KEMBALI';
$lang_continue = 'LANJUT';
$lang_info = 'Informasi';
$lang_error = 'Error';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%d %B %Y';
$lastcom_date_fmt =  '%d/%m/%y pada %H:%M'; //cpg1.3.0
$lastup_date_fmt = '%d %B %Y';
$register_date_fmt = '%d %B %Y';
$lasthit_date_fmt = '%d %B %Y pada %I:%M %p'; //cpg1.3.0
$comment_date_fmt =  '%d %B %Y pada %I:%M %p'; //cpg1.3.0

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
  'random' => 'File Acak', //cpg1.3.0
  'lastup' => 'Upload Terakhir',
  'lastalb'=> 'Album Terakhir Diupdate ', 
  'lastcom' => 'Komentar Terakhir',
  'topn' => 'Terbanyak Dilihat',
  'toprated' => 'Nilai Tertingi',
  'lasthits' => 'Terakhir Dilihat',
  'search' => 'Hasil Pencarian', 
  'favpics'=> 'File Favorit', //cpg1.3.0 
);

$lang_errors = array(
  'access_denied' => 'Anda tidak memiliki izin untuk mengakses halaman ini.',
  'perm_denied' => 'Anda tidak memiliki izin untuk melakukan ini.',
  'param_missing' => 'Skrip dijalankan dengan parameter yang tidak lengkap.',
  'non_exist_ap' => 'File/Album yang dimaksud tidak ditemukan !', //cpg1.3.0
  'quota_exceeded' => 'Kuota disk terlampaui<br /><br />Anda memiliki kuota ruangan sebesar [quota]K, file-file anda telah menggunakan ruangan sebanyak [space]K, menambahkan file ini akan menyebabkan anda melampaui kuota.', //cpg1.3.0
  'gd_file_type_err' => 'Jika menggunakan GD library tipe image yang dibolehkan hanya JPEG dan PNG.',
  'invalid_image' => 'Image yang anda upload rusak atau tidak bisa ditangani oleh GD library',
  'resize_failed' => 'Gagal membuat thumbnail atau memperkecil image.',
  'no_img_to_display' => 'Tidak ada image untuk ditampilkan',
  'non_exist_cat' => 'Kategori yang dimaksud tidak ditemukan',
  'orphan_cat' => 'Kategori memiliki induk yang tidak ditemukan, jalankan pengaturan kategori untuk memperbaiki masalah ini!', //cpg1.3.0
  'directory_ro' => 'Direktori \'%s\' tidak bisa ditulisi, file tidak bisa dihapus', //cpg1.3.0
  'non_exist_comment' => 'Komentar yang dimaksud tidak ditemukan.',
  'pic_in_invalid_album' => 'File berada dalam album yang tidak ditemukan (%s)!?',  //cpg1.3.0
  'banned' => 'Anda telah di-banned dari situs ini.', 
  'not_with_udb' => 'Fungsi ini tidak digunakan lagi dalam Coppermine sebab telah terintegrasi kedalam forum. Mungkin hal yang ingin anda lakukan tidak disupport oleh konfigurasi ini, atau fungsi tersebut seharusnya ditangani oleh software forum.', 
  'offline_title' => 'Offline', //cpg1.3.0
  'offline_text' => 'Galeri sedang offline - silahkan kunjungi lagi nanti', //cpg1.3.0
  'ecards_empty' => 'Tidak ada data log e-card untuk ditampilkan. Coba periksa apakah anda sudah mengaktifkan log e-card dalam konfigurasi coppermine!', //cpg1.3.0
  'action_failed' => 'Proses gagal.  Coppermine tidak berhasil memproses permintaan anda.', //cpg1.3.0
  'no_zip' => 'File library yang diperlukan untuk memproses file ZIP tidak ditemukan. Silahkan hubungi administrator Coppermine.', //cpg1.3.0
  'zip_type' => 'Anda tidak memilki izin untuk mengupload file ZIP.', //cpg1.3.0
);

$lang_bbcode_help = 'Kode-kode berikut ini mungkin bermanfaat bagi anda: <li>[b]<b>Tebal</b>[/b]</li> <li>[i]<i>Miring</i>[/i]</li> <li>[url=http://situsweb.com/]Teks Url[/url]</li> <li>[email]alamat@email.com[/email]</li>'; //cpg1.3.0

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'alb_list_title' => 'Lihat daftar album',
  'alb_list_lnk' => 'Daftar Album',
  'my_gal_title' => 'Lihat galeri pribadi saya',
  'my_gal_lnk' => 'Galeriku',
  'my_prof_lnk' => 'Profilku',
  'adm_mode_title' => 'Pindah ke mode admin',
  'adm_mode_lnk' => 'Mode Admin',
  'usr_mode_title' => 'Pindah ke mode user',
  'usr_mode_lnk' => 'Mode user',
  'upload_pic_title' => 'Upload file ke dalam album', //cpg1.3.0
  'upload_pic_lnk' => 'Upload File', //cpg1.3.0
  'register_title' => 'Buat acount baru',
  'register_lnk' => 'Register',
  'login_lnk' => 'Login',
  'logout_lnk' => 'Logout',
  'lastup_lnk' => 'Upload Terakhir',
  'lastcom_lnk' => 'Komentar Terakhir',
  'topn_lnk' => 'Terbanyak Dilihat',
  'toprated_lnk' => 'Nilai Tertinggi',
  'search_lnk' => 'Pencarian',
  'fav_lnk' => 'Favoritku', 
  'memberlist_title' => 'Lihat Daftar Member', //cpg1.3.0
  'memberlist_lnk' => 'Daftar Member', //cpg1.3.0
  'faq_title' => 'Pertanyaan yang Sering Ditanyakan (FAQ) mengenai galeri foto &quot;Coppermine&quot;', //cpg1.3.0
  'faq_lnk' => 'FAQ', //cpg1.3.0
);

$lang_gallery_admin_menu = array(
  'upl_app_lnk' => 'Persetujuan upload',
  'config_lnk' => 'Konfig.',
  'albums_lnk' => 'Album',
  'categories_lnk' => 'Kategori',
  'users_lnk' => 'User',
  'groups_lnk' => 'Grup',
  'comments_lnk' => 'Lihat Komentar', //cpg1.3.0
  'searchnew_lnk' => 'Tambahkan file (batch)', //cpg1.3.0
  'util_lnk' => 'Tool Admin',  //cpg1.3.0
  'ban_lnk' => 'Ban User', 
  'db_ecard_lnk' => 'Tampilkan E-card', //cpg1.3.0
);

$lang_user_admin_menu = array(
  'albmgr_lnk' => 'Buat / urutkan album',
  'modifyalb_lnk' => 'Modifikasi album',
  'my_prof_lnk' => 'Profil',
);

$lang_cat_list = array(
  'category' => 'Kategori',
  'albums' => 'Album',
  'pictures' => 'File', //cpg1.3.0
);

$lang_album_list = array(
  'album_on_page' => '%d album pada %d halaman'
);

$lang_thumb_view = array(
  'date' => 'TANGGAL',
  //Sort by filename and title
  'name' => 'NAMA FILE', 
  'title' => 'JUDUL', 
  'sort_da' => 'Urutkan mendaki menurut tanggal',
  'sort_dd' => 'Urutkan menurun menurut tanggal',
  'sort_na' => 'Urutkan mendaki menurut nama',
  'sort_nd' => 'Urutkan menurun menurut nama',
  'sort_ta' => 'Urutkan mendaki menurut judul', 
  'sort_td' => 'Urutkan menurun menurut judul', 
  'download_zip' => 'Download sebagai file Zip', //cpg1.3.0
  'pic_on_page' => '%d file pada %d halaman', //cpg1.3.0
  'user_on_page' => '%d user pada %d halaman',
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Kembali ke halaman thumbnail',
  'pic_info_title' => 'Tampilkan/sembunyikan informasi file', //cpg1.3.0
  'slideshow_title' => 'Slideshow',
  'ecard_title' => 'Kirimkan file ini sebagai e-card',
  'ecard_disabled' => 'e-card nonaktif',
  'ecard_disabled_msg' => 'Anda tidak memiliki izin untuk mengirim e-card', //js-alert //cpg1.3.0
  'prev_title' => 'Lihat file sebelumnya', //cpg1.3.0
  'next_title' => 'Lihat file selanjutnya', //cpg1.3.0
  'pic_pos' => 'FILE %s/%s', //cpg1.3.0
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Beri nilai file ini ', //cpg1.3.0
  'no_votes' => '(Belum dinilai)',
  'rating' => '(nilai sekarang : %s / 5 dengan %s suara)',
  'rubbish' => 'Sampah',
  'poor' => 'Jelek',
  'fair' => 'Lumayan',
  'good' => 'Bagus',
  'excellent' => 'Bagus sekali',
  'great' => 'Hebat',
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
  'line' => 'Baris: ',
);

$lang_display_thumbnails = array(
  'filename' => 'Nama file : ',
  'filesize' => 'Besar file : ',
  'dimensions' => 'Dimensi : ',
  'date_added' => 'Tanggal upload : ', //cpg1.3.0
);

$lang_get_pic_data = array(
  'n_comments' => '%s komentar',
  'n_views' => '%s dilihat',
  'n_votes' => '(%s dinilai)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Info Debug', //cpg1.3.0
  'select_all' => 'Pilih Semua', //cpg1.3.0
  'copy_and_paste_instructions' => 'Jika anda akan meminta bantuan di forum support coppermine, copy-dan-paste output debug ini ke dalam posting anda. Pastikan anda mengganti password dari output ini dengan *** sebelum posting.', //cpg1.3.0
  'phpinfo' => 'Tampilkan phpinfo', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => 'Reset bahasa', //cpg1.3.0
  'choose_language' => 'Pilih bahasa anda', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'Reset theme', //cpg1.3.0
  'choose_theme' => 'Pilih theme', //cpg1.3.0
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
  'Embarassed' => 'Embarrassed',
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
  0 => 'Meninggalkan mode admin...',
  1 => 'Memasuki mode admin...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Album harus diberi nama !', //js-alert
  'confirm_modifs' => 'Apa anda yakin mau membuat perubahan ini ?', //js-alert
  'no_change' => 'Anda tidak melakukan perubahan !', //js-alert
  'new_album' => 'Album baru',
  'confirm_delete1' => 'Anda yakin mau menghapus album ini ?', //js-alert
  'confirm_delete2' => '\nSemua file dan komentar didalamnya akan ikut terhapus !', //js-alert
  'select_first' => 'Pilih album dulu', //js-alert
  'alb_mrg' => 'Pengaturan Album',
  'my_gallery' => '* Galeriku *',
  'no_category' => '* Tanpa kategori *',
  'delete' => 'Hapus',
  'new' => 'Baru',
  'apply_modifs' => 'Lakukan perubahan',
  'select_category' => 'Pilih kategori',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Parameter yang dibutuhkan untuk operasi \'%s\' tidak dimasukkan !',
  'unknown_cat' => 'Kategori yang dimasud tidak ditemukan !',
  'usergal_cat_ro' => 'Kategori Galeri User tidak boleh dihapus !',
  'manage_cat' => 'Pengaturan kategori',
  'confirm_delete' => 'Anda yakin mau meng-HAPUS kategori ini', //js-alert
  'category' => 'Kategori',
  'operations' => 'Operasi',
  'move_into' => 'Pindahkan ke dalam',
  'update_create' => 'Ubah/Buat kategori',
  'parent_cat' => 'Kategori induk',
  'cat_title' => 'Judul kategori',
  'cat_thumb' => 'Thumbnail kategori', //cpg1.3.0
  'cat_desc' => 'Keterangan',
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
  'title' => 'Konfigurasi',
  'restore_cfg' => 'Kembalikan ke default',
  'save_cfg' => 'Simpan konfigurasi',
  'notes' => 'Catatan',
  'info' => 'Informasi',
  'upd_success' => 'Konfigurasi Coppermine telah diupdate',
  'restore_success' => 'Konfigurasi Coppermine telah dikembalikan ke default',
  'name_a' => 'Nama mendaki',
  'name_d' => 'Nama menurun',
  'title_a' => 'Judul mendaki', 
  'title_d' => 'Judul menurun', 
  'date_a' => 'Tanggal mendaki',
  'date_d' => 'Tanggal menurun',
  'th_any' => 'Perbandingan Maksimum',
  'th_ht' => 'Tinggi',
  'th_wd' => 'Lebar',
  'label' => 'label', //cpg1.3.0
  'item' => 'item', //cpg1.3.0
  'debug_everyone' => 'Semua', //cpg1.3.0
  'debug_admin' => 'Admin saja', //cpg1.3.0
);

if (defined('CONFIG_PHP')) $lang_config_data = array(
  'Setting Umum',
  array('Nama Galeri', 'gallery_name', 0),
  array('Keterangan', 'gallery_description', 0),
  array('Email admin galeri', 'gallery_admin_email', 0),
  array('Target untuk link \'Lihat foto lain\' dalam e-card', 'ecards_more_pic_target', 0),
  array('Galeri offline', 'offline', 1), //cpg1.3.0
  array('Log e-card', 'log_ecards', 1), //cpg1.3.0
  array('Izinkan ZIP-download dari favorit', 'enable_zipdownload', 1), //cpg1.3.0

  'Setting Bahasa, Theme &amp; Karakter Set',
  array('Bahasa', 'lang', 5),
  array('Theme', 'theme', 6),
  array('Tampilkan pilihan bahasa', 'language_list', 1), //cpg1.3.0
  array('Tampilkan bendera', 'language_flags', 8), //cpg1.3.0
  array('Tampilkan &quot;reset&quot; dalam pilihan bahasa', 'language_reset', 1), //cpg1.3.0
  array('Tampilkan pilihan theme', 'theme_list', 1), //cpg1.3.0
  array('Tampilkan &quot;reset&quot; dalam pilihan theme', 'theme_reset', 1), //cpg1.3.0
  array('Tampilkan FAQ', 'display_faq', 1), //cpg1.3.0
  array('Tampilkan bantuan bbcode', 'show_bbcode_help', 1), //cpg1.3.0
  array('Encoding Karakter', 'charset', 4), //cpg1.3.0

  'Tampilan daftar album',
  array('Lebar tabel utama (piksel atau %)', 'main_table_width', 0),
  array('Jumlah level kategori yang ditampilkan', 'subcat_level', 0),
  array('Jumlah album yang ditampilkan', 'albums_per_page', 0),
  array('Jumlah kolom di daftar album', 'album_list_cols', 0),
  array('Ukuran thumbnail dalam piksel', 'alb_list_thumb_size', 0),
  array('Tampilan halaman utama', 'main_page_layout', 0),
  array('Tampilkan thumbnail album level pertama dalam kategori','first_level',1), 

  'Tampilan thumbnail',
  array('Jumlah kolom di halaman thumbnail', 'thumbcols', 0),
  array('Jumlah baris di halaman thumbnail', 'thumbrows', 0),
  array('Jumlah maksimum tampilan tab', 'max_tabs', 10), //cpg1.3.o
  array('Tampilkan keterangan file (sebagai tambahan judul) di bawah thumbnail', 'caption_in_thumbview', 1), //cpg1.3.o
  array('Tampilkan jumlah dilihat di bawah thumbnail', 'views_in_thumbview', 1), //cpg1.3.0
  array('Tampilkan jumlah komentar di bawah thumbnail', 'display_comment_count', 1), //cpg1.3.o
  array('Tampilkan nama pengirim file dibawah thumbnail', 'display_uploader', 1), //cpg1.3.0
  array('Urutan file default', 'default_sort_order', 3), //cpg1.3.o
  array('Jumlah suara minimal bagi file untuk tampil di daftar \'nilai tertinggi\'', 'min_votes_for_rating', 0), //cpg1.3.o

  'Tampilan file &amp; setting komentar',
  array('Lebar tabel tampilan file (piksel atau %)', 'picture_table_width', 0), //cpg1.3.o
  array('Informasi file secara default tampak', 'display_pic_info', 1), //cpg1.3.o
  array('Saring kata-kata buruk dalam komentar', 'filter_bad_words', 1),
  array('Izinkan smilies dalam komentar', 'enable_smilies', 1),
  array('Izinkan pengiriman lebih dari satu komentar pada satu file secara berturut-turut oleh user yang sama (non-aktifkan flood protection)', 'disable_comment_flood_protect', 1), //cpg1.3.0
  array('Panjang maksimum keterangan file', 'max_img_desc_length', 0),
  array('Jumlah karakter makimum dalam kata', 'max_com_wlength', 0),
  array('Jumlah baris maksimum dalam komentar', 'max_com_lines', 0),
  array('Panjang maksimum komentar', 'max_com_size', 0),
  array('Tampilkan film strip', 'display_film_strip', 1), 
  array('Jumlah item dalam film strip', 'max_film_strip_items', 0), 
  array('Email admin saat ada pengiriman komentar', 'email_comment_notification', 1), //cpg1.3.0
  array('Interval Slideshow dalam milidetik (1 detik = 1000 milidetik)', 'slideshow_interval', 0), //cpg1.3.0

  'Setting file dan thumbnail', //cpg1.3.0
  array('Kualitas file JPEG', 'jpeg_qual', 0),
  array('Dimensi thumbnail maksimum <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0), //cpg1.3.0
  array('Gunakan dimensi (lebar atau tinggi atau perbandingan maksimum untuk thumbnail)<a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7),   
  array('Buat foto/video antara','make_intermediate',1),
  array('Lebar atau tinggi maksimum foto/video antara <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0), //cpg1.3.0
  array('Besar maksimum file yang diupload (KB)', 'max_upl_size', 0), //cpg1.3.0
  array('Lebar atau tinggi maksimum foto/video yang diupload (piksel)', 'max_upl_width_height', 0), //cpg1.3.0

  'Setting tambahan file dan thumbnail', //cpg1.3.0
  array('Tampilkan ikon album pribadi untuk user yang tidak login','show_private',1), //cpg1.3.0
  array('Karakter yang tidak diizinkan dalam nama file', 'forbiden_fname_char',0), //cpg1.3.0
  //array('Ekstensi file yang diizinkan untuk foto yang diupload', 'allowed_file_extensions',0), //cpg1.3.0
  array('Tipe image yang diizinkan', 'allowed_img_types',0), //cpg1.3.0
  array('Tipe film/video yang diizinkan', 'allowed_mov_types',0), //cpg1.3.0
  array('Tipe audio yang diizinkan', 'allowed_snd_types',0), //cpg1.3.0
  array('Tipe dokumen yang diizinkan', 'allowed_doc_types',0), //cpg1.3.0
  array('Metode pengubah ukuran image','thumb_method',2), //cpg1.3.0
  array('Path utiliti \'konversi\' ImageMagick (mis. /usr/bin/X11/)', 'impath', 0), //cpg1.3.0
  //array('Tipe image yang diizinkan (hanya berlaku untuk ImageMagick)', 'allowed_img_types',0), //cpg1.3.0
  array('Opsi command line untuk ImageMagick', 'im_options', 0), //cpg1.3.0
  array('Baca data EXIF dalam file JPEG', 'read_exif_data', 1), //cpg1.3.0
  array('Baca data IPTC dalam file JPEG', 'read_iptc_data', 1), //cpg1.3.0
  array('Direktori album <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0), //cpg1.3.0
  array('Direktori file user <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0), //cpg1.3.0
  array('Prefiks untuk foto antara <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0), //cpg1.3.0
  array('Prefiks untuk thumbnail <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0), //cpg1.3.0
  array('Mode default untuk direktori', 'default_dir_mode', 0), //cpg1.3.0
  array('Mode default untuk file', 'default_file_mode', 0), //cpg1.3.0

  'Setting user',
  array('Izinkan pendaftaran user baru', 'allow_user_registration', 1),
  array('Pendaftaran menggunakan pengesahan melalui email', 'reg_requires_valid_email', 1),
  array('Email admin saat ada pendaftaran member baru', 'reg_notify_admin_email', 1), //cpg1.3.0
  array('Izinkan dua user untuk memiliki alamat email yang sama', 'allow_duplicate_emails_addr', 1),
  array('User bisa memiliki album pribadi (Catatan: jika anda mengubah setting dari \'ya\' ke \'tidak\' semua album pribadi akan menjadi publik)', 'allow_private_albums', 1), //cpg1.3.0'
  array('Email admin saat ada upload yang menunggu persetujuan', 'upl_notify_admin_email', 1), //cpg1.3.0
  array('Izinkan member yang login untuk melihat daftar member', 'allow_memberlist', 1), //cpg1.3.0

  'Field tambahan untuk keterangan image (kosongkan jika tidak digunakan)',
  array('Nama field 1', 'user_field1_name', 0),
  array('Nama field 2', 'user_field2_name', 0),
  array('Nama field 3', 'user_field3_name', 0),
  array('Nama field 4', 'user_field4_name', 0),

  'Setting Cookie',
  array('Nama cookie yang digunakan oleh skrip (jika menggunakan forum, pastikan nama cookie ini berbeda dengan nama cookie forum)', 'cookie_name', 0),
  array('Path cookie yang digunakan oleh skrip', 'cookie_path', 0),
  
  'Setting lain-lain',
  array('Aktifkan mode debug', 'debug_mode', 9), //cpg1.3.0
  array('Tampilkan notice PHP dalam mode debug', 'debug_notice', 1), //cpg1.3.0

  '<br /><div align="left"><a name="notice1"></a>(*) Setting ini tidak boleh diubah jika telah ada file dalam galeri.<br />
  <a name="notice2"></a>(**)Jika dirubah setting ini hanya akan mempengaruhi file yang ditambahkan setelah perubahan dilakukan, jadi disarankan setting ini tidak dirubah jika telah ada file dalam galeri. Namun anda masih bisa melakukan perubahan terhadap file-file yang sudah ada dengan menggunakan fungsi &quot;<a href="util.php">Tool Admin</a> (ubah ukuran foto)&quot; di menu admin.</div><br />', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Kirim e-card', //cpg1.3.0
  'ecard_sender' => 'Pengirim', //cpg1.3.0
  'ecard_recipient' => 'Penerima', //cpg1.3.0
  'ecard_date' => 'Tanggal', //cpg1.3.0
  'ecard_display' => 'Tampilkan ecard', //cpg1.3.0
  'ecard_name' => 'Nama', //cpg1.3.0
  'ecard_email' => 'Email', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'mendaki', //cpg1.3.0
  'ecard_descending' => 'menurun', //cpg1.3.0
  'ecard_sorted' => 'Diurutkan', //cpg1.3.0
  'ecard_by_date' => 'menurut tanggal', //cpg1.3.0
  'ecard_by_sender_name' => 'menurut nama pengirim', //cpg1.3.0
  'ecard_by_sender_email' => 'menurut email pengirim', //cpg1.3.0
  'ecard_by_sender_ip' => 'menurut IP address pengirim', //cpg1.3.0
  'ecard_by_recipient_name' => 'menurut nama penerima', //cpg1.3.0
  'ecard_by_recipient_email' => 'menurut email penerima', //cpg1.3.0
  'ecard_number' => 'tampilan log %s - %s dari total %s', //cpg1.3.0
  'ecard_goto_page' => 'ke halaman', //cpg1.3.0
  'ecard_records_per_page' => 'Data per halaman', //cpg1.3.0
  'check_all' => 'Pilih Semua', //cpg1.3.0
  'uncheck_all' => 'Batal Pilih Semua', //cpg1.3.0
  'ecards_delete_selected' => 'Hapus e-card yang dipilih', //cpg1.3.0
  'ecards_delete_confirm' => 'Anda yakin mau menghapus data? Tandai checkbox!', //cpg1.3.0
  'ecards_delete_sure' => 'Yakin', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Anda harus mengisi nama dan komentar',
  'com_added' => 'Komentar anda telah dimasukkan',
  'alb_need_title' => 'Anda harus memberi Judul pada album !',
  'no_udp_needed' => 'Tidak ada yang perlu diupdate.',
  'alb_updated' => 'Album telah diupdate',
  'unknown_album' => 'Album yang dimaksud tidak ditemukan atau anda tidak memiliki izin untuk mengupload ke dalam album ini',
  'no_pic_uploaded' => 'Tidak ada file yang diupload !<br /><br />Jika anda yakin telah memilih file untuk diupload, periksa lagi apakah server mengizinkan upload...', //cpg1.3.0
  'err_mkdir' => 'Gagal membuat direktori %s !',
  'dest_dir_ro' => 'Direktori tujuan %s tidak bisa ditulisi oleh skrip !',
  'err_move' => 'Gagal memindahkan %s ke %s !',
  'err_fsize_too_large' => 'Dimensi file yang diupload terlalu besar (maksimum yang diizinkan adalah %s x %s) !', //cpg1.3.0
  'err_imgsize_too_large' => 'Ukuran file yang diupload terlalu besar (maksimum yang diizinkan adalah %s KB) !',
  'err_invalid_img' => 'File yang diupload bukan berupa image !',
  'allowed_img_types' => 'Anda hanya bisa mengupload image %s.',
  'err_insert_pic' => 'File \'%s\' tidak bisa dimasukkan kedalam album ', //cpg1.3.0
  'upload_success' => 'File anda telah berhasil diupload<br /><br />File tersebut akan tampil setelah disetujui oleh admin.', //cpg1.3.0
  'notify_admin_email_subject' => '%s - Pemberitahuan upload', //cpg1.3.0
  'notify_admin_email_body' => 'Sebuah file telah di upload oleh %s yang memerlukan persetujuan anda. Kunjungi %s', //cpg1.3.0
  'info' => 'Informasi',
  'com_added' => 'Komentar ditambahkan',
  'alb_updated' => 'Album diupdate',
  'err_comment_empty' => 'Komentar anda kosong !',
  'err_invalid_fext' => 'Hanya file dengan ekstensi berikut yang diterima : <br /><br />%s.',
  'no_flood' => 'Maaf, anda adalah pengirim komentar yang terkhir untuk file ini<br /><br />Ubahlah komentar yang anda kirimkan jika anda menginginkannya',
  'redirect_msg' => 'Anda sedang diredireksi.<br /><br /><br />Klik \'LANJUT\' jika halaman ini tidak refresh secara otomatis',
  'upl_success' => 'File anda telah berhasil dimasukkan', //cpg1.3.0
  'email_comment_subject' => 'Komentar yang dikirimkan ke Galeri', //cpg1.3.0
  'email_comment_body' => 'Seseorang telah mengirimkan komentar ke galeri anda. Kunjungi', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Keterangan',
  'fs_pic' => 'image ukuran penuh',
  'del_success' => 'berhasil dihapus',
  'ns_pic' => 'image ukuran normal',
  'err_del' => 'tidak bisa dihapus',
  'thumb_pic' => 'thumbnail',
  'comment' => 'komentar',
  'im_in_alb' => 'image dalam album',
  'alb_del_success' => 'Album \'%s\' dihapus',
  'alb_mgr' => 'Pengaturan Album',
  'err_invalid_data' => 'Data invalid diterima dalam \'%s\'',
  'create_alb' => 'Sedang membuat album \'%s\'',
  'update_alb' => 'Mengupdate album \'%s\' dengan judul \'%s\' dan indeks \'%s\'',
  'del_pic' => 'Hapus file', //cpg1.3.0
  'del_alb' => 'Hapus album',
  'del_user' => 'Hapus user',
  'err_unknown_user' => 'User yang dimaksud tidak ditemukan !',
  'comment_deleted' => 'Komentar berhasil dihapus',
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
  'confirm_del' => 'Anda yakin mau mengHAPUS file ini ? \\nKomentar juga akan ikut dihapus.', //js-alert //cpg1.3.0
  'del_pic' => 'HAPUS FILE INI', //cpg1.3.0
  'size' => '%s x %s piksel',
  'views' => '%s kali dilihat',
  'slideshow' => 'Slideshow',
  'stop_slideshow' => 'HENTIKAN SLIDESHOW',
  'view_fs' => 'Klik untuk melihat image ukuran penuh',
  'edit_pic' => 'Ubah keterangan', //cpg1.3.0
  'crop_pic' => 'Crop dan Rotate', //cpg1.3.0
);

$lang_picinfo = array(
  'title' =>'Informasi file', //cpg1.3.0
  'Filename' => 'Filename',
  'Album name' => 'Nama Album',
  'Rating' => 'Nilai (%s suara)',
  'Keywords' => 'Kata Kunci',
  'File Size' => 'Ukuran File',
  'Dimensions' => 'Dimensi',
  'Displayed' => 'Ditampilkan',
  'Camera' => 'Kamera',
  'Date taken' => 'Tanggal pengambilan',
  'Aperture' => 'Bukaan',
  'Exposure time' => 'Waktu bukaan',
  'Focal length' => 'Panjang fokus',
  'Comment' => 'Komentar',
  'addFav'=>'Tambahkan ke Favorit', //cpg1.3.0 
  'addFavPhrase'=>'Favorit',  //cpg1.3.0
  'remFav'=>'Hapus dari Favorit',  //cpg1.3.0
  'iptcTitle'=>'Judul IPTC', //cpg1.3.0
  'iptcCopyright'=>'Copyright IPTC', //cpg1.3.0
  'iptcKeywords'=>'Katakunci IPTC', //cpg1.3.0
  'iptcCategory'=>'Kategori IPTC', //cpg1.3.0
  'iptcSubCategories'=>'Sub Kategori IPTC', //cpg1.3.0
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Ubah komentar ini',
  'confirm_delete' => 'Anda yakin mau menghapus komentar ini ?',
  'add_your_comment' => 'Tambah komentar',
  'name'=>'Nama', 
  'comment'=>'Komentar', 
  'your_name' => 'Anon', 
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Klik image untuk menutup jendela ini', 
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Kirim e-card',
  'invalid_email' => '<b>Peringatan</b> : alamat email invalid !',
  'ecard_title' => 'Sebuah e-card dari %s untuk anda',
  'error_not_image' => 'Hanya file image yang bisa dikirimkan sebagai ecard.', //cpg1.3.0
  'view_ecard' => 'Jika e-card tidak tampil dengan benar, klik disini',
  'view_more_pics' => 'Klik disini untuk melhat foto-foto lain !',
  'send_success' => 'E-card anda telah dikirimkan',
  'send_failed' => 'Maaf, server tidak bisa mengirim e-card anda...',
  'from' => 'Dari',
  'your_name' => 'Nama anda',
  'your_email' => 'Alamat email anda',
  'to' => 'Untuk',
  'rcpt_name' => 'Nama penerima',
  'rcpt_email' => 'Alamat email penerima',
  'greetings' => 'Salam',
  'message' => 'Pesan',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Info&nbsp;file', //cpg1.3.0
  'album' => 'Album',
  'title' => 'Judul',
  'desc' => 'Keterangan',
  'keywords' => 'Kata Kunci',
  'pic_info_str' => '%s &times; %s - %s KB - %s kali dilihat - %s kali dinilai',
  'approve' => 'Setujui file', //cpg1.3.0
  'postpone_app' => 'Tunda persetujuan',
  'del_pic' => 'Hapus file', //cpg1.3.0
  'read_exif' => 'Baca ulang info EXIF', //cpg1.3.0
  'reset_view_count' => 'Reset jumlah dilihat',
  'reset_votes' => 'Reset suara penilaian',
  'del_comm' => 'Hapus komentar',
  'upl_approval' => 'Persetujuan upload',
  'edit_pics' => 'Ubah file', //cpg1.3.0
  'see_next' => 'Lihat file berikutnya', //cpg1.3.0
  'see_prev' => 'Lihat file sebelumnya', //cpg1.3.0
  'n_pic' => '%s file', //cpg1.3.0
  'n_of_pic_to_disp' => 'Jumlah file untuk ditampilkan', //cpg1.3.0
  'apply' => 'Lakukan perubahan', //cpg1.3.0
  'crop_title' => 'Coppermine Picture Editor', //cpg1.3.0
  'preview' => 'Preview', //cpg1.3.0
  'save' => 'Simpan Foto', //cpg1.3.0
  'save_thumb' =>'Simpan sebagai thumbnail', //cpg1.3.0
  'sel_on_img' =>'Pilihan harus pada keseluruhan gambar!', //js-alert //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Pertanyaan yang Sering Ditanyakan (FAQ)', //cpg1.3.0
  'toc' => 'Daftar Isi', //cpg1.3.0
  'question' => 'Pertanyaan: ', //cpg1.3.0
  'answer' => 'Jawaban: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'FAQ Umum', //cpg1.3.0
  array('Mengapa saya harus mendaftar?', 'Keharusan mendaftar mendaftar atau tidak tergantung dari administrator. Mendaftar memberikan fitur-fitur tambahan kepada seorang member seperti upload, memiliki daftar favorit, menilai file dan mengirim komentar dll.', 'allow_user_registration', '0'), //cpg1.3.0
  array('Bagaimana cara mendaftar?', 'Klik &quot;Daftar&quot; dan lengkapi semua kolom yang harus diisi (dan yang opsional juga jika anda mau).<br />Jika Administrator mengaktifkan Aktifasi melalui Email,maka setelah mengirimkan informasi anda, anda akan menerima sebuah email di alamat email yang anda kirimkan saat mendaftar, yang berisi petunjuk mengenai bagaimana cara mengaktifkan keanggotaan anda. Status keanggotaan anda harus diaktifkan terlebih dahulu agar anda bisa login.', 'allow_user_registration', '1'), //cpg1.3.0
  array('Bagaimana cara login?', 'Klik &quot;Login&quot;, masukkan nama login dan password anda lalu tandai &quot;Ingat Saya&quot; agar anda tetap login ke situs ini walaupun anda meninggalkan situs ini.<br /><b>PENTING: Cookie harus diaktifkan dan cookie dari situs ini tidak boleh dihapus untuk menggunakan fungsi &quot;Ingat Saya&quot;.</b>', 'offline', 0), //cpg1.3.0
  array('Mengapa saya tidak bisa login?', 'Apakah anda telah mendaftar dan mengklik link yang dikirimkan kepada anda lewat email?. Link tersebut akan mengaktifkan keanggotaan anda. Untuk masalah login yang lain silahkan hubungi administrator.', 'offline', 0), //cpg1.3.0
  array('Bagaimana jika saya lupa password?', 'Jika situs ini memiliki link &quot;Lupa password&quot;, anda bisa menggunakannya. Jika tidak hubungi administrator situs untuk mendapatkan password baru.', 'offline', 0), //cpg1.3.0
  //array('Bagaimana jika saya menganti alamat email saya?', 'Login dan ganti alamat email anda melalui &quot;Profil&quot;', 'offline', 0), //cpg1.3.0
  array('Bagaimana cara menyimpan file kedalam &quot;Favoritku&quot;?', 'Klik foto kemudian klik link &quot;info foto&quot; (<img src="images/info.gif" width="16" height="16" border="0" alt="Informasi Foto" />); scroll ke arah bawah foto dan klik link &quot;Tambahkan ke favorit&quot;.<br />Administrator mungkin menampilkan &quot;informasi foto&quot; secara default.<br />PENTING:Cookie harus diaktifkan dan cookie dari situs ini tidak boleh dihapus.', 'offline', 0), //cpg1.3.0
  array('Bagaimana cara menilai file?', 'Klik thumbnail file, scroll kebawah kemudian pilih nilai.', 'offline', 0), //cpg1.3.0
  array('Bagaimana cara mengirim komentar untuk file?', 'Klik thumbnail file, scroll kebawah kemudian kirim komentar.', 'offline', 0), //cpg1.3.0
  array('Bagaimana cara mengupload file?', 'Klik &quot;Upload Foto&quot;, pilih album tempat anda ingin memasukkan foto, klik &quot;Browse&quot; untuk mencari foto yang akan anda upload  kemudian klik &quot;open&quot; (tambahkan judul dan keterangan jika anda mau) dan klik &quot;Upload File&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Kemana saya mengupload file?', 'Anda bisa mengupload file ke salah satu album anda di &quot;Galeriku&quot;. Administrator situs juga mungkin mengizinkan anda mengupload foto ke satu atau beberapa album di Galeri Utama.', 'allow_private_albums', 0), //cpg1.3.0
  array('Apa jenis file dan berapa ukuran file yang bisa saya upload?', 'Ukuran dan jenis file (jpg, png etc.) ditentukan oleh Administrator.', 'offline', 0), //cpg1.3.0
  array('Apa itu &quot;Galeriku&quot;?', '&quot;Galeriku&quot; adalah galeri pribadi dimana user bisa mengupload dan mengatur file.', 'allow_private_albums', 0), //cpg1.3.0
  array('Bagaimana cara membuat, merubah nama atau menghapus album dalam &quot;Galeriku&quot;?', 'Anda harus berada dalam &quot;Mode Admin&quot;<br />Klik &quot;Buat/Ubah Album&quot;klik &quot;Baru&quot;. Ganti &quot;Album baru&quot; dengan nama yang anda inginkan.<br />Anda juga bisa merubah nama album lain yang ada dalam galeri anda.<br />Klik &quot;Lakukan Perubahan&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Bagaimana cara merubah atau membatasi user dari melihat album saya?', 'Anda harus berada dalam &quot;Mode Admin&quot;<br />Klik &quot;Modifikasi Album&quot;. Pilih album yang akan anda modifikasi pada &quot;Update Album&quot;.<br />Disini anda bisa merubah judul, keterangan, image thumbnail, membatasi izin akses untuk melihat, mengirim komentar, maupun menilai.<br />Click &quot;Update Album&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Bagaimana cara melihat galeri user lain?', 'Klik &quot;Daftar Album&quot; dan pilih &quot;User Galleries&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Apa itu cookie?', 'Cookie adalah data berupa file teks yang dikirimkan dari sebuah situs web dan disimpan di komputer anda.<br />Cookie biasanya memudahkan user untuk meninggalkan sebuah situs dan kembali lagi ke situs tersebut tanpa harus login lagi serta beberapa fungsi lainnya.', 'offline', 0), //cpg1.3.0
  array('Dimana aku bisa mendapatkan program ini?', 'Coppermine adalah software Galeri Multimedia yang bersifat freeware, dibawah lisesnsi GNU GPL. Memiliki banyak fitur dan telah diport dan bisa digunakan di berbagai system. Kunjungi <a href="http://coppermine.sf.net/">Situs Web Coppermine</a> untuk informasi lebih lanjut atau untuk mendownloadnya.', 'offline', 0), //cpg1.3.0

  'Menjelajahi situs ini', //cpg1.3.0
  array('Apa itu &quot;Daftar Album&quot;?', 'Ini akan memperlihatkan kepada anda keseluruhan kategori dimana anda sedang berada, dengan link ke setiap album. Jika anda tidak berada dalam kategori, ia akan menampilkan keseluruhan galeri dengan link ke setiap kategori. Thumbnail juga bisa merupakan link ke kategori.', 'offline', 0), //cpg1.3.0
  array('Apa itu &quot;Galeriku&quot;?', 'Fitur ini memperbolehkan user untuk membuat galeri mereka sendiri dan menambahkan, menghapus atau merubah album serta mengupload file kedalamnya.', 'allow_private_albums', 0), //cpg1.3.0
  array('Apa perbedaan &quot;Mode Admin&quot; dan &quot;Mode User&quot;?', 'Fitur ini, saat berada dalam mode admin, memperbolehkan user untuk merubah galeri mereka (serta yang lain jika diizinkan oleh administrator).', 'allow_private_albums', 0), //cpg1.3.0
  array('Apa itu &quot;Upload File&quot;?', 'Fitur ini memperbolehkan user untuk mengupload file (ukuran dan jenis file ditentukan oleh administrator) kedalam galeri yang dipileh oleh anda atau administrator.', 'allow_private_albums', 0), //cpg1.3.0
  array('Apa itu &quot;Upload Terakhir&quot;?', 'Fitur ini menampilkan file-file yang terakhir diupload ke situs.', 'offline', 0), //cpg1.3.0
  array('Apa itu &quot;Komentar Terakhir&quot;?', 'Fitur ini menampilkan file yang terakhir dikomentari user.', 'offline', 0), //cpg1.3.0
  array('Apa itu &quot;Terbanyak Dilihat&quot;?', 'Fitur ini menampilkan file yang terbanyak dilihat oleh user (member maupun pengunjung).', 'offline', 0), //cpg1.3.0
  array('Apa itu &quot;Nilai Tertinggi&quot;?', 'Fitur ini menampilkan file yang memiliki nilai tertinggi, beserta nilai rata-ratanya (mis.: lima user masing - masing memberi nilai <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: foto akan mendapat nilai rata-rata <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ; Lima user menilai foto mulai 1 sama 5 (1,2,3,4,5) akan mendapatkan rata-rata <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />Nilai dimulai dari <img src="images/rating5.gif" width="65" height="14" border="0" alt="terbaik" /> (terbaik) sampai <img src="images/rating0.gif" width="65" height="14" border="0" alt="terburuk" /> (terburuk).', 'offline', 0), //cpg1.3.0
  array('Apa itu &quot;Favoritku&quot;?', 'Fitur ini membolehkan user menyimpan file favorit menggunakan cookie.', 'offline', 0), //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Pengingat Password', //cpg1.3.0
  'err_already_logged_in' => 'Anda sedang login !', //cpg1.3.0
  'enter_username_email' => 'Masukkan nama login atau alamat email anda', //cpg1.3.0
  'submit' => 'kirim', //cpg1.3.0
  'failed_sending_email' => 'Email pengingat password tidak bisa dikirim !', //cpg1.3.0
  'email_sent' => 'Email yang berisi nama login dan password anda telah dikirimkan ke %s', //cpg1.3.0
  'err_unk_user' => 'User tidak ditemukan!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - Pengingat Password', //cpg1.3.0
  'passwd_reminder_body' => 'Anda telah meminta untuk diingatkan mengenai data login:
Nama login: %s
Password: %s
Klik %s untuk login.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Nama grup',
  'disk_quota' => 'Kuota',
  'can_rate' => 'Bisa menilai file', //cpg1.3.0
  'can_send_ecards' => 'Bisa mengirim e-card',
  'can_post_com' => 'Bisa memberi komentar',
  'can_upload' => 'Bisa mengupload file', //cpg1.3.0
  'can_have_gallery' => 'Bisa mempunyai galeri pribadi',
  'apply' => 'Lakukan perubahan',
  'create_new_group' => 'Buat grup baru',
  'del_groups' => 'Hapus grup yang dipilih',
  'confirm_del' => 'Peringatan, jika anda menghapus sebuah grup, user yang merupakan anggota grup ini akan dipindahkan ke dalam grup \'Registered\' !\n\nAnda ingin melanjutkan ?', //js-alert //cpg1.3.0
  'title' => 'Pengaturan grup',
  'approval_1' => 'Setujui Upl. umum (1)',
  'approval_2' => ' Setujui Upl. pribadi (2)',
  'upload_form_config' => 'Konfigurasi formulir upload', //cpg1.3.0
  'upload_form_config_values' => array( 'Upload satu file saja', 'Upload banyak file saja', 'Uploads URI saja', 'Upload ZIP saja', 'File-URI', 'File-ZIP', 'URI-ZIP', 'File-URI-ZIP'), //cpg1.3.0
  'custom_user_upload'=>'User bisa merubah jumlah kolom upload?', //cpg1.3.0
  'num_file_upload'=>'Jumlah maksimum kolom upload file', //cpg1.3.0
  'num_URI_upload'=>'Jumlah maksimum kolom upload URI', //cpg1.3.0
  'note1' => '<b>(1)</b> Upload ke dalam album publik memerlukan persetujuan admin',
  'note2' => '<b>(2)</b> Upload ke dalam album pribadi user memerlukan persetujuan admin',
  'notes' => 'Catatan'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Selamat datang !'
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Anda yakin mau meng-HAPUS album ini ? \\nSeluruh file dan komentar akan ikut terhapus.', //js-alert //cpg1.3.0
  'delete' => 'HAPUS',
  'modify' => 'PROPERTI',
  'edit_pics' => 'UBAH FILE', //cpg1.3.0
);

$lang_list_categories = array(
  'home' => 'Home',
  'stat1' => '<b>[pictures]</b> file dalam <b>[albums]</b> album dan <b>[cat]</b> kategori dengan <b>[comments]</b> komentar dilihat <b>[views]</b> kali', //cpg1.3.0
  'stat2' => '<b>[pictures]</b> file dalam <b>[albums]</b> album dilihat <b>[views]</b> kali', //cpg1.3.0
  'xx_s_gallery' => 'Galeri %s',
  'stat3' => '<b>[pictures]</b> file dalam <b>[albums]</b> album dengan <b>[comments]</b> komentar dilihat <b>[views]</b> kali', //cpg1.3.0
);

$lang_list_users = array(
  'user_list' => 'Daftar user',
  'no_user_gal' => 'Tidak ada galeri user',
  'n_albums' => '%s album',
  'n_pics' => '%s file', //cpg1.3.0
);

$lang_list_albums = array(
  'n_pictures' => '%s file', //cpg1.3.0
  'last_added' => ', yang terakhir ditambahkan pada %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Login',
  'enter_login_pswd' => 'Masukkan username dan password anda untuk login',
  'username' => 'Username',
  'password' => 'Password',
  'remember_me' => 'Ingat sya',
  'welcome' => 'Selamat datang %s ...',
  'err_login' => '*** Tak bisa log in. Coba lagi ***',
  'err_already_logged_in' => 'Anda sudah log in !',
  'forgot_password_link' => 'Saya lupa password saya', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Logout',
  'bye' => 'Selamat berpisah %s ...',
  'err_not_loged_in' => 'Anda tidak log in !',
);

// ------------------------------------------------------------------------- //
// File phpinfo.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP info', //cpg1.3.0
  'explanation' => 'Ini adalah output dari fungsi PHP <a href="http://www.php.net/phpinfo">phpinfo()</a>, yang ditampilkan di dalam coppermine.', //cpg1.3.0
  'no_link' => 'Membiarkan pengunjung melihat phpinfo anda merupakan security-risk, karena itu halaman ini hanya tampak jika anda login sebagai admin. Anda tidak bisa memberikan link ini kepada user lain, mereka tidak akan diberi akses.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Update album %s',
  'general_settings' => 'Setting umum',
  'alb_title' => 'Judul album',
  'alb_cat' => 'Kategori album',
  'alb_desc' => 'Keterangan album',
  'alb_thumb' => 'Thumbnail album',
  'alb_perm' => 'Izin akses untuk album ini',
  'can_view' => 'Album bisa dilihat oleh',
  'can_upload' => 'Pengunjung bisa mengupload file',
  'can_post_comments' => 'Pengunjung bisa memberi komentar',
  'can_rate' => 'Pengunjung bisa memberi penilaian',
  'user_gal' => 'Galeri User',
  'no_cat' => '* Tanpa kategori *',
  'alb_empty' => 'Album ini kosong',
  'last_uploaded' => 'Terakhir diupload',
  'public_alb' => 'Semua (album publik)',
  'me_only' => 'Hanya saya saja',
  'owner_only' => 'Pemilik album (%s) saja',
  'groupp_only' => 'Anggota grup \'%s\'',
  'err_no_alb_to_modify' => 'Tak ada album yang bisa anda ubah dalam database.',
  'update' => 'Update album', //cpg1.3.0
  'notice1' => '(*) tergantung dari setting %sgrup%s', //cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Maaf, anda telah menilai file ini', //cpg1.3.0
  'rate_ok' => 'Penilaian anda telah diterima',
  'forbidden' => 'Anda tidak bisa menilai file anda sendiri.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Meskipun para administrator dari {SITE_NAME} akan berusaha mengubah atau menghapus materi yang tidak pantas secepat mungkin, adalah mustahil untuk mereview semua kiriman. Karena itu anda paham bahwa seluruh komentar yang dikirim ke situs ini adalah merupakan pandangan dan pendapat pengirimnya dan bukan merupakan pandangan administrator dan webmaster (terkecuali yang dikirimkan oleh orang-orang tersebut) dan karenanya bukan merupakan tanggung jawab mereka.<br />
<br />
Anda setuju untuk tidak mengirimkan materi yang bersifat menghina, tidak patut, jorok, menghasut, mengancam, pornografi, atau materi apapun yang bisa melanggar hukum. Anda setuju bahwa webmaster, administrator dan moderator dari {SITE_NAME} memiliki hak untuk mangahapus atau merubah isi situs ini kapan saja jika dipandang perlu. Sebagai user anda setuju bahwa semua informasi yang anda masukkan disini akan disimpan dalam database kami. Walaupun informasi ini tidak akan diberikan pada pihak ketiga manapun tanpa persetujuan anda, webmaster dan administrator bertanggung jawab terhadap semua jenis upaya hacking yang bisa membuka data tersebut.<br />
<br />
Situs ini menggunakan cookie untuk menyimpan informasi di komputer anda. Informasi ini hanya berfungsi untuk memudahkan anda mengakses situs ini. Alamat email hanya digunakan untuk mengirimkan dan mengkonfirmasi pendaftaran serta password anda.<br />
<br />
Dengan mengklik link 'Saya setuju' Dibawah ini anda setuju untuk diikat dengan ketentuan tersebut diatas.
EOT;

$lang_register_php = array(
  'page_title' => 'Registrasi user',
  'term_cond' => 'Syarat penggunaan',
  'i_agree' => 'Saya setuju',
  'submit' => 'Kirim registrasi',
  'err_user_exists' => 'Nama login yang anda masukkan telah digunakan, silahkan pilih yang lain',
  'err_password_mismatch' => 'Kedua password tidak cocok, silahkan masukkan lagi',
  'err_uname_short' => 'Nama login harus terdiri dari 2 karakter minimum',
  'err_password_short' => 'Password harus terdiri dari 2 karakter minimum',
  'err_uname_pass_diff' => 'Nama login dan password harus berbeda',
  'err_invalid_email' => 'Alamat email tidak valid',
  'err_duplicate_email' => 'User lain telah terdaftar dengan alamat email yang anda masukkan',
  'enter_info' => 'Masukkan informasi registrasi',
  'required_info' => 'Informasi yang harus diisi',
  'optional_info' => 'Informasi opsional',
  'username' => 'Nama login',
  'password' => 'Password',
  'password_again' => 'Ketik ulang Password',
  'email' => 'Email',
  'location' => 'Lokasi',
  'interests' => 'Hobi / Interest',
  'website' => 'Website',
  'occupation' => 'Pekerjaan',
  'error' => 'ERROR',
  'confirm_email_subject' => 'Konfirmasi registrasi - %s',
  'information' => 'Informasi',
  'failed_sending_email' => 'Email konfirmasi registrasi tidak dapat dikirimkan !',
  'thank_you' => 'Terima kasih untuk registrasi.<br /><br />Sebuah email yang berisi informasi tentang cara mengaktifkan account anda telah dikirimkan ke alamat email yang anda sediakan.',
  'acct_created' => 'Account anda telah dibuat dan anda sekarang bisa login dengan nama login dan password anda',
  'acct_active' => 'Account anda sekarang telah aktif dan anda bisa login dengan nama login dan password anda',
  'acct_already_act' => 'Account anda sudah aktif !',
  'acct_act_failed' => 'Account ini tidak bisa diaktifkan !',
  'err_unk_user' => 'User yang dimaksud tidak ditemukan !',
  'x_s_profile' => 'Profil %s',
  'group' => 'Grup',
  'reg_date' => 'Bergabung',
  'disk_usage' => 'Ruang digunakan',
  'change_pass' => 'Ubah password',
  'current_pass' => 'Password kini',
  'new_pass' => 'Password baru',
  'new_pass_again' => 'Ketik lagi password baru',
  'err_curr_pass' => 'Password salah',
  'apply_modif' => 'Lakukan perubahan',
  'change_pass' => 'Ubah password',
  'update_success' => 'Profile anda telah diupdate',
  'pass_chg_success' => 'Password anda telah diubah',
  'pass_chg_error' => ' Password anda tidak diubah ',
  'notify_admin_email_subject' => '%s - Pemberitahuan Pendaftaran Baru', //cpg1.3.0
  'notify_admin_email_body' => 'Member baru dengan nama "%s" telah mendaftar di galeri anda', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
Terima kasih anda telah mendaftar di {SITE_NAME}

Nama login anda adalah : "{USER_NAME}"
Password anda adalah : "{PASSWORD}"

Untuk mengaktifkan account anda, anda harus mengklik link di bawah ini
atau kopi dan paste pada web browser anda.

{ACT_LINK}

Hormat kami,

Manajemen {SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'Review komentar',
  'no_comment' => 'Tidak ada komentar untuk direview',
  'n_comm_del' => '%s komentar dihapus',
  'n_comm_disp' => 'Jumlah komentar untuk ditampilkan',
  'see_prev' => 'Lihat sebelumnya',
  'see_next' => 'Lihat berikutnya',
  'del_comm' => 'Hapus komentar yang dipilih',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
        0 => 'Cari dalam koleksi file',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Cari file baru', //cpg1.3.0
  'select_dir' => 'Pilih direktori',
  'select_dir_msg' => 'Fungsi ini membolehkan anda untuk menambahkan sekumpulan file yang telah anda upload ke server anda melalui FTP.<br /><br />Pilih direktori di mana anda telah mengupload file-file anda', //cpg1.3.0
  'no_pic_to_add' => 'Tak ada file untuk ditambahkan', //cpg1.3.0
  'need_one_album' => 'Anda memerlukan minimum satu buah album untuk menjalankan fungsi ini',
  'warning' => 'Peringatan',
  'change_perm' => 'skrip tidak bisa menulis pada direktori ini, anda perlu merubah modenya ke 755 atau 777 sebelum mencoba menambahkan file !', //cpg1.3.0
  'target_album' => '<b>Masukkan file &quot;</b>%s<b>&quot; kedalam </b>%s', //cpg1.3.0
  'folder' => 'Folder',
  'image' => 'File',
  'album' => 'Album',
  'result' => 'Hasil',
  'dir_ro' => 'Tidak bisa ditulisi. ',
  'dir_cant_read' => 'Tidak bisa dibaca. ',
  'insert' => 'Menambahkan file baru kedalam galeri', //cpg1.3.0
  'list_new_pic' => 'Daftar file baru', //cpg1.3.0
  'insert_selected' => 'Masukkan file yang dipilih', //cpg1.3.0
  'no_pic_found' => 'Tidak ada file baru yang ditemukan', //cpg1.3.0
  'be_patient' => 'Sabar, skrip memerlukan waktu untuk menambahkan file', //cpg1.3.0
  'no_album' => 'tak ada album yang dipilih',  //cpg1.3.0
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : berarti file telah berhasil ditambahkan'.
                          '<li><b>DP</b> : berarti file merupakan duplikat dan telah berada dalam database'.
                          '<li><b>PB</b> : berarti file tidak bisa ditambahkan, periksa konfigurasi dan permission direktori dimana file berada'.
                          '<li><b>NA</b> : berarti anda belum memilih album untuk file yang anda upload, klik \'<a href="javascript:history.back(1)">kembali</a>\' dan pilih album. Jika anda tidak memiliki album silahkan <a href="albmgr.php">buat album dulu</a></li>'.
                          '<li>Jika \'tanda\' OK, DP, PB tidak tampil, klik pada tanda yang tidak tampil tersebut untuk melihat pesan error yang dihasilkan oleh PHP'.
                          '<li>Jika browser anda timeout, klik tombol reload/refresh'.
                          '</ul>', //cpg1.3.0
  'select_album' => 'pilih album', //cpg1.3.0
  'check_all' => 'Pilih Semua', //cpg1.3.0
  'uncheck_all' => 'Batal Pilih Semua', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Ban User', 
  'user_name' => 'User Name', 
  'ip_address' => 'IP Address', 
  'expiry' => 'Berakhir (kosong berarti selamanya)', 
  'edit_ban' => 'Simpan Perubahan', 
  'delete_ban' => 'Hapus', 
  'add_new' => 'Tambahkan banned baru', 
  'add_ban' => 'Tambahkan', 
  'error_user' => 'User tidak ditemukan', //cpg1.3.0
  'error_specify' => 'Anda harus memasukkan nama user atau IP Address', //cpg1.3.0
  'error_ban_id' => 'Ban ID tidak valid!', //cpg1.3.0
  'error_admin_ban' => 'Anda tidak bisa mem-banned diri anda sendiri!', //cpg1.3.0
  'error_server_ban' => 'Anda ingin mem-banned server anda sendiri? Ck ck ck, tak bisa...', //cpg1.3.0
  'error_ip_forbidden' => 'Anda tidak bisa membanned IP ini - Ip ini non-routable!', //cpg1.3.0
  'lookup_ip' => 'Lookup IP address', //cpg1.3.0
  'submit' => 'lakukan!', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Upload file',
  'custom_title' => 'Ubah Formulir Upload', //cpg1.3.0
  'cust_instr_1' => 'Anda bisa merubah jumlah kolom upload. Bagaimanapun anda tidak memilih lebih dari jumlah maksimum dibawah ini.', //cpg1.3.0
  'cust_instr_2' => 'Jumlah Kolom', //cpg1.3.0
  'cust_instr_3' => 'Kolom upload file: %s', //cpg1.3.0
  'cust_instr_4' => 'Kolom upload URI/URL: %s', //cpg1.3.0
  'cust_instr_5' => 'Kolom upload URI/URL:', //cpg1.3.0
  'cust_instr_6' => 'Kolom upload file:', //cpg1.3.0
  'cust_instr_7' => 'Silahkan masukkan jumlah tiap jenis kolom upload yang anda inginkan kali ini.  Kemudian klik \'Lanjut\'. ', //cpg1.3.0
  'reg_instr_1' => 'Permintaan salah.', //cpg1.3.0
  'reg_instr_2' => 'Sekarang anda bisa mengupload file-file anda menggunakan kolom-kolom upload dibawah. Ukuran file yang akan anda upload ke server masing-masing tidak boleh melebihi %s KB. File ZIP yang anda upload melalui \'Upload File\' dan \'Upload URI/URL\' akan tetap dalam bentuk terkompresi.', //cpg1.3.0
  'reg_instr_3' => 'Jika anda ingin file zip yang anda upload didekompres, anda harus menggunakan kolom file upload pada bagian \'Upload Dekompres ZIP\'.', //cpg1.3.0
  'reg_instr_4' => 'Jika menggunakan URI/URL upload, masukkan url secara lengkap seperti: http://www.situsweb.com/images/example.jpg', //cpg1.3.0
  'reg_instr_5' => 'Jika form telah terisi, klik \'Continue\'.', //cpg1.3.0
  'reg_instr_6' => 'Upload Dekompres Zip:', //cpg1.3.0
  'reg_instr_7' => 'Upload File:', //cpg1.3.0
  'reg_instr_8' => 'Upload URI/URL:', //cpg1.3.0
  'error_report' => 'Laporan Error', //cpg1.3.0
  'error_instr' => 'Terjadi error:', //cpg1.3.0
  'file_name_url' => 'File/URL', //cpg1.3.0
  'error_message' => 'Error', //cpg1.3.0
  'no_post' => 'File tidak terupload oleh POST.', //cpg1.3.0
  'forb_ext' => 'Extensi file tidak diizinkan.', //cpg1.3.0
  'exc_php_ini' => 'Besar file melampaui yang diizinkan oleh php.ini.', //cpg1.3.0
  'exc_file_size' => 'Besar file melampaui yang diizinkan oleh CPG.', //cpg1.3.0
  'partial_upload' => 'Hanya terupload sebagian.', //cpg1.3.0
  'no_upload' => 'Tidak terjadi upload.', //cpg1.3.0
  'unknown_code' => 'Error upload PHP tidak diketahui.', //cpg1.3.0
  'no_temp_name' => 'Tak ada upload - nama temp.', //cpg1.3.0
  'no_file_size' => 'Tak ada data/Rusak', //cpg1.3.0
  'impossible' => 'Tidak bisa dipindahkan.', //cpg1.3.0
  'not_image' => 'Bukan image/Rusak', //cpg1.3.0
  'not_GD' => 'Bukan ekstensi GD.', //cpg1.3.0
  'pixel_allowance' => 'Besar piksel terampaui.', //cpg1.3.0
  'incorrect_prefix' => 'Prefiks URI/URL salah', //cpg1.3.0
  'could_not_open_URI' => 'Tidak bisa membuka URI.', //cpg1.3.0
  'unsafe_URI' => 'Keamanan tidak bisa dicek.', //cpg1.3.0
  'meta_data_failure' => 'Kesalahan meta data', //cpg1.3.0
  'http_401' => '401 Unauthorized', //cpg1.3.0
  'http_402' => '402 Payment Required', //cpg1.3.0
  'http_403' => '403 Forbidden', //cpg1.3.0
  'http_404' => '404 Not Found', //cpg1.3.0
  'http_500' => '500 Internal Server Error', //cpg1.3.0
  'http_503' => '503 Service Unavailable', //cpg1.3.0
  'MIME_extraction_failure' => 'MIME tidak bisa ditentukan.', //cpg1.3.0
  'MIME_type_unknown' => 'Jenis MIME tidak diketahui', //cpg1.3.0
  'cant_create_write' => 'Tidak bisa membuat file.', //cpg1.3.0
  'not_writable' => 'Tidak bisa menulis ke file.', //cpg1.3.0
  'cant_read_URI' => 'Tidak bisa membaca URI/URL', //cpg1.3.0
  'cant_open_write_file' => 'Tidak bisa membuka file URI.', //cpg1.3.0
  'cant_write_write_file' => 'Tidak bisa menulis ke file URI.', //cpg1.3.0
  'cant_unzip' => 'Tidak bisa unzip.', //cpg1.3.0
  'unknown' => 'Error tidak diketahui', //cpg1.3.0
  'succ' => 'Upload berhasil', //cpg1.3.0
  'success' => '%s upload berhasil.', //cpg1.3.0
  'add' => 'Klik \'Lanjut\' untuk menambahkan file kedalam album.', //cpg1.3.0
  'failure' => 'Upload Gagal', //cpg1.3.0
  'f_info' => 'Informasi File', //cpg1.3.0
  'no_place' => 'File sebelumnya tidak bisa diletakkan.', //cpg1.3.0
  'yes_place' => 'File sebelumnya berhasil diletakkan.', //cpg1.3.0
  'max_fsize' => 'Ukuran file maksimum yang diizinkan adalah %s KB',
  'album' => 'Album',
  'picture' => 'File',
  'pic_title' => 'Judul File',
  'description' => 'Keterangan file',
  'keywords' => 'Kata Kunci (pisahkan dengan spasi)',
  'err_no_alb_uploadables' => 'Maaf, tak ada album yang dizinkan bagi anda untuk mengupload file',
  'place_instr_1' => 'Silahkan letakkan file ini dalam album yang anda inginkan.  Anda juga bisa memasukkan informasi mengenai file ini sekarang.', //cpg1.3.0
  'place_instr_2' => 'Masih ada file lagi yang perlu diletakkan kedalam album. Silahkan klik \'Lanjut\'.', //cpg1.3.0
  'process_complete' => 'Anda telah berhasil meletakkan semua file.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'title' => 'Pengaturan user',
  'name_a' => 'Nama mendaki',
  'name_d' => 'Nama menurun',
  'group_a' => 'Grup mendaki',
  'group_d' => 'Grup menurun',
  'reg_a' => 'Tanggal daftar mendaki',
  'reg_d' => ' Tanggal daftar menurun',
  'pic_a' => 'Jumlah file mendaki',
  'pic_d' => ' Jumlah file menurun',
  'disku_a' => 'Penggunaan ruang mendaki',
  'disku_d' => ' Penggunaan ruang menurun',
  'lv_a' => 'Kunjungan terakhir mendaki', //cpg1.3.0
  'lv_d' => 'Kunjungan terakhir menurun', //cpg1.3.0
  'sort_by' => 'Urutkan user menurut',
  'err_no_users' => 'Tabel user kosong !',
  'err_edit_self' => 'Anda tidak bisa mengubaubah profil anda sendiri, gunakan link \'Profilku\' untuk itu',
  'edit' => 'UBAH',
  'delete' => 'HAPUS',
  'name' => 'Nama login',
  'group' => 'Grup',
  'inactive' => 'Nonaktif',
  'operations' => 'Operasi',
  'pictures' => 'File',
  'disk_space' => 'Ruang digunakan / Kuota',
  'registered_on' => 'Mendaftar pada',
  'last_visit' => 'Kunjungan Terakhir', //cpg1.3.0
  'u_user_on_p_pages' => '%d user pada %d halaman',
  'confirm_del' => 'Anda yakin mau mengHAPUS user ini ? \\nSemua file dan album user ini akan ikut terhapus.',
  'mail' => 'MAIL',
  'err_unknown_user' => 'User yang dimaksud tidak ditemukan !',
  'modify_user' => 'Ubah user',
  'notes' => 'Catatan',
  'note_list' => '<li>Jika anda tidak ingin merubah password sekarang, biarkan field "password" kosong',
  'password' => 'Password',
  'user_active' => 'User aktif',
  'user_group' => 'Grup User',
  'user_email' => 'Email user',
  'user_web_site' => 'Situs web user',
  'create_new_user' => 'Buat user baru',
  'user_location' => 'Lokasi user',
  'user_interests' => 'Hobi/interest user',
  'user_occupation' => 'Pekerjaan user',
  'latest_upload' => 'Upload Terakhir', //cpg1.3.0
  'never' => 'tidak pernah', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
  'title' => 'Ubah dimensi foto', 
  'what_it_does' => 'Kegunaannya', 
  'what_update_titles' => 'Update judul dari nama file', 
  'what_delete_title' => 'Hapus judul', 
  'what_rebuild' => 'Buat kembali thumbnail dan ubah dimensi foto', 
  'what_delete_originals' => 'Menghapus foto lama yang telah diubah dimensinya dan menggantinya dengan foto baru yang telah diubah dimensinya', 
  'file' => 'File', 
  'title_set_to' => 'judul ubah ke', 
  'submit_form' => 'kirim', 
  'updated_succesfully' => 'berhasil diupdate', 
  'error_create' => 'ERROR membuat', 
  'continue' => 'Proses image lain', 
  'main_success' => 'File %s telah berhasil digunakan sebagai foto utama', 
  'error_rename' => 'Error mengubah nama %s ke %s', 
  'error_not_found' => 'File %s tidak ditemukan', 
  'back' => 'kembali', 
  'thumbs_wait' => 'Sedang mengupdate thumbnail dan/atau mengubah dimensi image, tunggu sejenak...', 
  'thumbs_continue_wait' => 'Lanjutkan mengupdate thumbnail dan/atau mengubah dimensi image...', 
  'titles_wait' => 'Sedang mengupdate judul, tunggu sejenak...', 
  'delete_wait' => 'Sedang menghapus judul, tunggu sejenak...', 
  'replace_wait' => 'Sedang menghapus yang original dan menggantinya dengan image yang telah diubah dimensinya, tunggu sejenak..', 
  'instruction' => 'Instruksi cepat', 
  'instruction_action' => 'Pilih fungsi', 
  'instruction_parameter' => 'Set parameter', 
  'instruction_album' => 'Pilih album', 
  'instruction_press' => 'Klik %s', 
  'update' => 'Update thumbnail dan/atau ubah dimensi foto', 
  'update_what' => 'Apa yang harus diupdate', 
  'update_thumb' => 'Thumbnail saja', 
  'update_pic' => 'Ubah dimensi foto saja', 
  'update_both' => 'Thumbnail dan ubah ukuran foto', 
  'update_number' => 'Jumlah image yang diproses per klik', 
  'update_option' => '(Coba set dengan nilai yang lebih kecil jika anda mengalami masalah timeout browser)', 
  'filename_title' => 'Nama File &rarr; Judul foto', 
  'filename_how' => 'Bagaimana nama file akan diubah', 
  'filename_remove' => 'Hapus akhiran .jpg dan ganti _ (underscore) dengan spasi', 
  'filename_euro' => 'Ubah 2003_11_23_13_20_20.jpg ke 23/11/2003 13:20', 
  'filename_us' => 'Ubah 2003_11_23_13_20_20.jpg ke 11/23/2003 13:20', 
  'filename_time' => 'Ubah 2003_11_23_13_20_20.jpg ke 13:20', 
  'delete' => 'Hapus judul foto atau image yang tela diubah dimensinya', 
  'delete_title' => 'Hapus judul foto', 
  'delete_original' => 'Hapus foto yang telah diubah dimensinya', 
  'delete_replace' => 'Hapus image original ganti dengan image yang telah diubah dimensinya', 
  'select_album' => 'Pilih album', 
  'delete_orphans' => 'Hapus komentar orphan (untuk semua album)', //cpg1.3.0
  'orphan_comment' => 'komentar orphan ditemukan', //cpg1.3.0
  'delete' => 'Hapus', //cpg1.3.0
  'delete_all' => 'Hapus semua', //cpg1.3.0
  'comment' => 'Komentar: ', //cpg1.3.0
  'nonexist' => 'terhubung ke file yang sudah dihapus # ', //cpg1.3.0
  'phpinfo' => 'Tampilkan phpinfo', //cpg1.3.0
  'update_db' => 'Update database', //cpg1.3.0
  'update_db_explanation' => 'Jika anda telah mengganti file coppermine, menambah modifikasi atau upgrade dari versi coppermine sebelumnya, jalankan update database ini SATU KALI SAJA. Fungsi ini akan membuat database dan/atau menambahkan nilai konfigurasi yang perlu.', //cpg1.3.0
);

?>
