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
// ENCODING CHECK; SHOULD BE YEN BETA MU: ¥ ß µ
// ------------------------------------------------------------------------- //
// CVS version: $Id: turkish-utf-8.php,v 1.9 2004/12/29 23:03:51 chtito Exp $
// ------------------------------------------------------------------------- //

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_turkish' => 'Turkish',
  'lang_name_native' => 'Türkçe',
  'lang_country_code' => 'tr',
  'trans_name'=> 'Ibrahim ALTINOK',
  'trans_email' => 'ibrahim@lavinya.net',
  'trans_website' => 'http://www.lavinya.net/',
  'trans_date' => '2004-09-01',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Paz', 'Pzt', 'Sal', 'Çar', 'Per', 'Cum', 'Cmt');
$lang_month = array('Ock', 'Şub', 'Mrt', 'Nis', 'May', 'Haz', 'Tem', 'Agu', 'Eyl', 'Ekm', 'Kas', 'Arl');

// Some common strings
$lang_yes = 'Evet';
$lang_no  = 'Hayır';
$lang_back = 'GERİ';
$lang_continue = 'DEVAM ET';
$lang_info = 'Bilgi';
$lang_error = 'Hata';

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
  'random' => 'Rastgele Resim', //cpg1.3.0
  'lastup' => 'Son Eklenen',
  'lastalb'=> 'Son Yorum Yapılanlar',
  'lastcom' => 'Son Yorumlar',
  'topn' => 'En Son Bakınlan',
  'toprated' => 'En Beğenilen',
  'lasthits' => 'Son Bakılan',
  'search' => 'Arama Sonuçları',
  'favpics'=> 'Favori Resimler', //cpg1.3.0
);

$lang_errors = array(
  'access_denied' => 'Bu Sayfaya erişim hakkınız yok.',
  'perm_denied' => 'Bu işlemi yapma hakkınız yok.',
  'param_missing' => 'Eksik parametre(ler)!',
  'non_exist_ap' => 'Böyle bir Album, Resim yok !',
  'quota_exceeded' => 'Diks alanı aşıldı<br /><br />[quota]K da boş bir alanınız var, resimleriniz şuanda kullanılıyor [space]K, bu resmi eklemek alanınızı aşıracaktır.', //cpg1.3.0
  'gd_file_type_err' => 'Eğer GD image library kullanılıyorsa sadece JPEG ve PNG formatları işlenebilir.',
  'invalid_image' => 'Yolladığınız resim hasarlı yada GD library tarafından işlenemiyor',
  'resize_failed' => 'Simge yada Düşürülmüş kalite resmi yaratılmadı.',
  'no_img_to_display' => 'Gösterilebilcek resim yok',
  'non_exist_cat' => 'Seçili Kategori yok',
  'orphan_cat' => 'Katagorinin Üst katagorisi belli değil, Düzeltmek için katagori yönete gidiniz.', //cpg1.3.0
  'directory_ro' => ' \'%s\'  klasörü yazılabilir değil, resimler silinemedi.', //cpg1.3.0
  'non_exist_comment' => 'Seçili Yorum aslında yok.',
  'pic_in_invalid_album' => 'Seçili resim geçersiz bir albumde (%s)!?', //cpg1.3.0
  'banned' => 'Kullanılan bu siteden banlandınız',
  'not_with_udb' => 'Bu fonksiyon Coppermine da kullanılamaz çünkü forum yazılımı ile bütünleştirildi. Yapmaya çalıştığınız şey bü şekilde kaldırılamadı, yada fonksiyon forum yazlımı tarafından elegeçirildi.',
  'offline_title' => 'Kapalı', //cpg1.3.0
  'offline_text' => 'Galeri kapalı- ilerde tekrar deneyin', //cpg1.3.0
  'ecards_empty' => 'Ekart kayıtı bulunmamaktadır. Coppermine seçeneklerindeki  ekart giriş imkanını kontrol edin!', //cpg1.3.0
  'action_failed' => 'İşlem olmadı.  Coppermine sizin talebinizi işleyemedi.', //cpg1.3.0
  'no_zip' => 'ZIP resimleri için Gerekli librarilere ulaşılamaz.  Lütfen Coppermine admininiz ile iletişime geçin.', //cpg1.3.0
  'zip_type' => 'ZIP dosyalarını yüklemeye izniniz yok.', //cpg1.3.0
);

$lang_bbcode_help = 'Yapılan kodlar yararlı olmalıdır: <li>[b]<b>Kalın</b>[/b]</li> <li>[i]<i>İtalik</i>[/i]</li> <li>[url=http://yoursite.com/]Url Text[/url]</li> <li>[email]user@domain.com[/email]</li>'; //cpg1.3.0

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'alb_list_title' => 'Albüm listesine git',
  'alb_list_lnk' => 'Albüm Listesi',
  'my_gal_title' => 'Kişisel galerime git',
  'my_gal_lnk' => 'Galerim',
  'my_prof_lnk' => 'Profilim',
  'adm_mode_title' => 'Yönetici moduna Geç',
  'adm_mode_lnk' => 'Admin modu',
  'usr_mode_title' => 'Kullanıcı moduna Geç',
  'usr_mode_lnk' => 'Kullanıcı modu',
  'upload_pic_title' => 'Bir Albüme Resim Ekle', //cpg1.3.0
  'upload_pic_lnk' => 'Resim yükle', //cpg1.3.0
  'register_title' => 'Albüme resim ekle',
  'register_lnk' => 'Kayıt ol',
  'login_lnk' => 'Giriş',
  'logout_lnk' => 'Çıkış',
  'lastup_lnk' => 'Son yüklenenler',
  'lastcom_lnk' => 'Son yorumlar',
  'topn_lnk' => 'En Çok Bakılanlar',
  'toprated_lnk' => 'En beğenilenler',
  'search_lnk' => 'Ara',
  'fav_lnk' => 'Favorilerim',
  'memberlist_title' => 'Üye listesini göster', //cpg1.3.0
  'memberlist_lnk' => 'Üye listesi', //cpg1.3.0
  'faq_title' => 'Resim galerisi üzerindeki Sorulan Soru &quot;Coppermine&quot;', //cpg1.3.0
  'faq_lnk' => 'FAQ', //cpg1.3.0
);

$lang_gallery_admin_menu = array(
  'upl_app_lnk' => 'Resim yükleme onayları',
  'config_lnk' => 'Seçenekler',
  'albums_lnk' => 'Albümler',
  'categories_lnk' => 'Kategoriler',
  'users_lnk' => 'Kullanıcılar',
  'groups_lnk' => 'Gruplar',
  'comments_lnk' => 'Yorumlar', //cpg1.3.0
  'searchnew_lnk' => 'Çoklu resim ekleme', //cpg1.3.0
  'util_lnk' => 'Admin sçenekleri', //cpg1.3.0
  'ban_lnk' => 'Kullanıcıları Banla',
  'db_ecard_lnk' => 'Ekart gösterimi', //cpg1.3.0
);

$lang_user_admin_menu = array(
  'albmgr_lnk' => 'Album YARAT / DÜZENLE',
  'modifyalb_lnk' => 'Albüm Seçenekleri',
  'my_prof_lnk' => 'Kişisel Profilim',
);

$lang_cat_list = array(
        'category' => 'Kategori',
        'albums' => 'Albumler',
  'pictures' => 'Resimler', //cpg1.3.0
);

$lang_album_list = array(
        'album_on_page' => '%d album var %d sayfada'
);

$lang_thumb_view = array(
  'date' => 'TARİH',
  //Sort by filename and title
  'name' => 'Ad',
  'title' => 'Konu',
  'sort_da' => 'Tarihe göre ARTAN Sırala',
  'sort_dd' => 'Tarihe göre AZALAN Sırala',
  'sort_na' => 'Ada göre ARTAN Sırala',
  'sort_nd' => 'Ada göre AZALAN Sırala',
  'sort_ta' => 'Konuya göre ARTAN Sırala',
  'sort_td' => 'Konuya göre AZALAN Sırala',
  'download_zip' => 'Zip dosyası olarak indir', //cpg1.3.0
  'pic_on_page' => '%d resim var %d sayfada',
  'user_on_page' => '%d kullanıcı var %d sayfada', //cpg1.3.0
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Küçük Resim Sayfasına Dön',
  'pic_info_title' => 'Resim Özelliklerini Göster/Sakla', //cpg1.3.0
  'slideshow_title' => 'Ard-arda Gösterim',
  'ecard_title' => 'Bu resmi bir e-kartpostal olrak yolla ', //cpg1.3.0
  'ecard_disabled' => 'e-kartpostal özelliği etkin değil',
  'ecard_disabled_msg' => 'E-kartpostal yollama izniniz YOK', //js-alert //cpg1.3.0
  'prev_title' => 'Önceki Resme Bak', //cpg1.3.0
  'next_title' => 'Sonraki Resme Bak', //cpg1.3.0
  'pic_pos' => 'RESİM %s/%s', //cpg1.3.0
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Resimi Puanla', //cpg1.3.0
  'no_votes' => '(Puanlama henuz yok)',
  'rating' => '(Güncel Beğeni Oranı : %s / 5 etkiyen %s oy',
  'rubbish' => 'Berbat',
  'poor' => 'Değersiz',
  'fair' => 'İdare Eder',
  'good' => 'İyi',
  'excellent' => 'Çok İyi',
  'great' => 'Mükemmel',
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
  CRITICAL_ERROR => 'Kritik Hata',
  'file' => 'Dosya: ',
  'line' => 'Satır: ',
);

$lang_display_thumbnails = array(
  'filename' => 'Dosya Adı : ',
  'filesize' => 'Dosya Büyüklüğü: ',
  'dimensions' => 'Ölçüler : ',
  'date_added' => 'Eklendiği Tarih : '
);

$lang_get_pic_data = array(
  'n_comments' => '%s yorum yapıldı',
  'n_views' => '%s kez bakıldı',
  'n_votes' => '(%s oy verildi)'
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Debug Info', //cpg1.3.0
  'select_all' => 'Tümünü Seç', //cpg1.3.0
  'copy_and_paste_instructions' => 'Coppermine den yardım talebinde bulunacaksanız,debug çıkışını yolladığınıza copyalayıp yapıştırın. Yollamadan önce *** ile olan yerleri tekrar doldurun.', //cpg1.3.0
  'phpinfo' => 'phpbilgi gösterimi', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => 'Geçerli dil', //cpg1.3.0
  'choose_language' => 'Dilinizi seçin', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'Geçerli konu', //cpg1.3.0
  'choose_theme' => 'Bir konu seçiniz', //cpg1.3.0
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
  'Exclamation' => 'Ünlem',
  'Question' => 'Soru',
  'Very Happy' => 'Çok Mutlu',
  'Smile' => 'Gülümsiyen',
  'Sad' => 'Üzgün',
  'Surprised' => 'Şaşırmış',
  'Shocked' => 'Şok olmuş',
  'Confused' => 'Kafası Karışık',
  'Cool' => 'Cool',
  'Laughing' => 'Gülen',
  'Mad' => 'Deli',
  'Razz' => 'Razz',
  'Embarassed' => 'Utanmış',
  'Crying or Very sad' => 'Çok üzgün veya ağlama',
  'Evil or Very Mad' => 'Şeytan veye manyak',
  'Twisted Evil' => 'Sapıtmış Seytan',
  'Rolling Eyes' => 'Gözü dönmüş',
  'Wink' => 'Gözkırpan',
  'Idea' => 'Ampül Fikirli',
  'Arrow' => 'Ok',
  'Neutral' => 'Doğal',
  'Mr. Green' => 'Bay Yeşil',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  0 => 'Yönetici modu terkediliyor...',
  1 => 'Yönetici moduna Geçiliyor...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Albumlerin adı olmalı!', //js-alert
  'confirm_modifs' => 'Bu değişiklikleri Yapmak istediğinizden eminmisiniz ?', //js-alert
  'no_change' => 'Değişiklik yapmadınız ki !', //js-alert
  'new_album' => 'Yeni Albüm',
  'confirm_delete1' => 'BU albumu silmek istediğinizden eminmisiniz ?', //js-alert
  'confirm_delete2' => '\nBütün RESİMLER,YORUMLAR ve İÇERİĞİ YOK OLACAK !', //js-alert
  'select_first' => 'İlk önce bir album seçiniz', //js-alert
  'alb_mrg' => 'Album Yöneticisi',
  'my_gallery' => '* Kişisel Galerim *',
  'no_category' => '* Katagori Yok *',
  'delete' => 'Sil',
  'new' => 'Yeni',
  'apply_modifs' => 'Değişiklikleri Yap',
  'select_category' => 'Katagori Seç',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => '\'%s\' işlemi için gerekli parametreler eksik !',
  'unknown_cat' => 'Seçili Katagaori Veritabanında yok',
  'usergal_cat_ro' => 'Kullanıcı Galerileri Katagorisi Silinemez!',
  'manage_cat' => 'Katagorileri Yönet',
  'confirm_delete' => 'BU katagoriyi silmek istediğinizden eminmisiniz ?', //js-alert
  'category' => 'Katagori',
  'operations' => 'İşlemler',
  'move_into' => 'Taşı',
  'update_create' => 'Katagori Güncelle/Ekle',
  'parent_cat' => 'ÜST Katagori',
  'cat_title' => 'Katagori ADI',
  'cat_desc' => 'Katagori Tanımı'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
  'title' => 'Ayarlamalar',
  'restore_cfg' => 'Fabrika ayarlarına GeriDÖN',
  'save_cfg' => 'Yeni Ayarları kaydet',
  'notes' => 'Notlar',
  'info' => 'Bilgi',
  'upd_success' => 'Coppermine Galeri Ayarları Güncellendi',
  'restore_success' => 'Coppermine Galeri Ayarları Varsayılana Döndü',
  'name_a' => 'Ada göre ARTAN',
  'name_d' => 'Ada göre AZALAN',
  'date_a' => 'Tarihe göre ARTAN',
  'date_d' => 'Tarihe göre AZALAN',
  'th_any' => 'Maksimum Aspect',
  'th_ht' => 'Yükseklik',
  'th_wd' => 'Genişlik',
  'label' => 'label', //cpg1.3.0
  'item' => 'item', //cpg1.3.0
  'debug_everyone' => 'Herkes', //cpg1.3.0
  'debug_admin' => 'Sadece Admin', //cpg1.3.0
        );

if (defined('CONFIG_PHP')) $lang_config_data = array(
  'General settings',
  array('Galeri adı', 'gallery_name', 0),
  array('Galeri tanıtımı', 'gallery_description', 0),
  array('Galeri admin emaili', 'gallery_admin_email', 0),
  array('E-kartpostallardaki linkin hedef adresi', 'ecards_more_pic_target', 0),
  array('Galeri kapalı', 'offline', 1), //cpg1.3.0
  array('Ekartları logla', 'log_ecards', 1), //cpg1.3.0
  array('Favori ZIP-indirmelerini takip et', 'enable_zipdownload', 1), //cpg1.3.0

  'Language, Themes &amp; Charset settings',
  array('Dil', 'lang', 5),
  array('Konu', 'theme', 6),
  array('Dil listesini göster', 'language_list', 1), //cpg1.3.0
  array('Dil bayraklarını göster', 'language_flags', 8), //cpg1.3.0
  array(' &quot;reset&quot; dil seçimlerinde göster', 'language_reset', 1), //cpg1.3.0
  array('Konu listesini göster', 'theme_list', 1), //cpg1.3.0
  array(' &quot;reset&quot; konu seçeneğinde göster', 'theme_reset', 1), //cpg1.3.0
  array('FAQ göster', 'display_faq', 1), //cpg1.3.0
  array('Bbcode yardımı göster', 'show_bbcode_help', 1), //cpg1.3.0
  array('Karakter seçeneği', 'charset', 4), //cpg1.3.0

  'Albüm listesi Gösterimi',
  array('Ana Tablo Genişliği (pixel yada %)', 'main_table_width', 0),
  array('Gösterilecek Alt Katagori Düzeyi', 'subcat_level', 0),
  array('Bir Sayfada gösterilecek Album sayısı', 'albums_per_page', 0),
  array('Album Listesinin Sütün sayısı', 'album_list_cols', 0),
  array('Küçük Resim(Pul) Boyutu (Pixel olarak)', 'alb_list_thumb_size', 0),
  array('Ana Sayfa İçeriği', 'main_page_layout', 0),
  array('Kategorilerdeki küçük resimleri birinci seviye göster','first_level',1),

  'Küçük resim (Pul)Gösterimi',
  array('Küçük Resim(Pul) sayfası sütün sayısı', 'thumbcols', 0),
  array('Küçük Resim(Pul) sayfası sıra sayısı', 'thumbrows', 0),
  array('En fazla Pul', 'max_tabs', 0), //cpg1.3.0
  array('Pulun adının altında tanımınıda göster', 'caption_in_thumbview', 1), //cpg1.3.0
  array('Küçük resimleri bakılma sayısına göre göster', 'views_in_thumbview', 1), //cpg1.3.0
  array('Pulun adının altında yapılan yorum sayısınıda göster', 'display_comment_count', 1),
  array('Küçük resimleri ada göre göster', 'display_uploader', 1), //cpg1.3.0
  array('Geçerli sıraya koy', 'default_sort_order', 3), //cpg1.3.0
  array('Pulun adının altında yapılan yorum sayısınıda göster', 'display_comment_count', 1), //cpg1.3.0

  'Resim Gösterimi &amp; Yorum Seçenekleri',
  array('Resim Tablosu Genişliği (pixel yada %)', 'picture_table_width', 0), //cpg1.3.0
  array('Resim özellikleri öntanımlı açılsın mı?', 'display_pic_info', 1), //cpg1.3.0
  array('Yorumlardaki kötü kelimeleri sansürle', 'filter_bad_words', 1),
  array('Gülücüklere yorumlarda izin ver', 'enable_smilies', 1),
  array('Allow several consecutive comments on one file from the same user (disable flood protection)', 'disable_comment_flood_protect', 1), //cpg1.3.0
  array('Resim tanımı uzunluğu En-fazla?', 'max_img_desc_length', 0),
  array('Bir kelimeki karakter sayısı En-çok?', 'max_com_wlength', 0),
  array('Bir Yorumdaki Satır sayısı En-çok?', 'max_com_lines', 0),
  array('Bir Yorumun uzunluğu En-fazla?', 'max_com_size', 0),
  array('Film şeridini göster', 'display_film_strip', 1),
  array('Şeritdeki parçaların numarası', 'max_film_strip_items', 0),
  array('Yorumları admine email aracılığı ile haber ver', 'email_comment_notification', 1), //cpg1.3.0
  array('Ardarda gösterimi aralıklarını milisaniyelerle yap (1 saniye = 1000 milisaniye)', 'slideshow_interval', 0), //cpg1.3.0

  'Resim ve Pul Seçenekleri', //cpg1.3.0
  array('JPEG dosyaları için kalite ayarı', 'jpeg_qual', 0),
  array('Küçük resim içn maksimum boyut <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0), //cpg1.3.0
  array('Boyut kullan ( genişlik yadayğkseklik yada küçük resim için maksimum görünüş )<b>**</b>', 'thumb_use', 7),
  array('Orta seviye resim oluştur','make_intermediate',1),
  array('Orta seviye resim/video için maksimum genişlik yada yükseklik <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0), //cpg1.3.0
  array('Yülenen resim için en büyük boyut (KB)', 'max_upl_size', 0), //cpg1.3.0
  array('Yüklene resimler/videolar için en büyük genişlik ve boyut (pixels)', 'max_upl_width_height', 0), //cpg1.3.0

  'Resim ve Pul Gelişmiş Seçenekleri', //cpg1.3.0
  array('Özel albüm ikonunu giriş yapmayan kullanıcıya göster','show_private',1), //cpg1.3.0
  array('Dosya adlarında Yasaklanmış Karakterler', 'forbiden_fname_char',0), //cpg1.3.0
  //array('Dosya adlarında Yasaklanmış Karakterler', 'forbiden_fname_char',0), //cpg1.3.0
  array('İzin verilen imaj türleri', 'allowed_img_types',0), //cpg1.3.0
  array('İzin verilen movie türleri', 'allowed_mov_types',0), //cpg1.3.0
  array('İzin verilen audio türleri', 'allowed_snd_types',0), //cpg1.3.0
  array('İzin verilen döküman türleri', 'allowed_doc_types',0), //cpg1.3.0
  array('Resim boyutlandırması için kullanılacak yöntem','thumb_method',2), //cpg1.3.0
  array('ImageMagick \'dönüştürücü\' programının yolu (örn /usr/bin/X11/)', 'impath', 0), //cpg1.3.0
  //array('İzinli Resim tipleri (sadece ImageMagick için geçerli)', 'allowed_img_types',0), //cpg1.3.0
  array('ImageMagick için ek komut satırı seçenekleri', 'im_options', 0), //cpg1.3.0
  array('JPEG dosyalrındaki EXIF verisini oku', 'read_exif_data', 1), //cpg1.3.0
  array('JPEG dosyalarındaki IPTC verisini oku', 'read_iptc_data', 1), //cpg1.3.0
  array('Albüm Klasörü <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0), //cpg1.3.0
  array('Kullanıcı resimleri klasörü <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0), //cpg1.3.0
  array('Orta Seviye RES. için ad ön takısı <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0), //cpg1.3.0
  array('Pullar için ad ön takısı <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0), //cpg1.3.0
  array('Klasörler için geçerli olan Cmode', 'default_dir_mode', 0), //cpg1.3.0
  array('Resimler için geçerli olan Cmode', 'default_file_mode', 0), //cpg1.3.0

  'Kullanıcı Ayarları',
  array('Yeni Kullanıcı Kaydına izin ver', 'allow_user_registration', 1),
  array('Kullanıcı Kaydına email onayı gerektirir', 'reg_requires_valid_email', 1),
  array('Kullanıcı kayıtlarını email yoluyla admine haber ver', 'reg_notify_admin_email', 1), //cpg1.3.0
  array('Birden fazla kullanıcı aynı email adresine sahip olabilir', 'allow_duplicate_emails_addr', 1),
  array('Kullanıcılar özel albüme sahip olabilirler (Not:Eğer \'evet\' i \'hayır\' a çevirirseniz özel albümler herkese açık olmayacaktır)', 'allow_private_albums', 1), //cpg1.3.0
  array('Kullanıcıların bekleyen yüklemelerini admine haber ver', 'upl_notify_admin_email', 1), //cpg1.3.0
  array('Giriş yapan kullanıcıları üye listesini göstermeye izin ver', 'allow_memberlist', 1), //cpg1.3.0

  'Özel Tanım Alanları (Kullanım Dışıysa Boş Bırakabilirsiniz)',
  array('Alan 1 adı', 'user_field1_name', 0),
  array('Alan 2 adı', 'user_field2_name', 0),
  array('Alan 3 adı', 'user_field3_name', 0),
  array('Alan 4 adı', 'user_field4_name', 0),

  'Cookies Seçenekleri',
  array('Script tarafından kullanılan cookie nin adı', 'cookie_name', 0),
  array('Script tarafından cookie için geçerli yol', 'cookie_path', 0),

  'Diğer Seçenekler',
  array('Debug moduna ulaşılamaz', 'debug_mode', 9), //cpg1.3.0
  array('Debug modundaki notları göster', 'debug_notice', 1), //cpg1.3.0

  '<br /><div align="left"><a name="notice1"></a>(*) ile işeretli alanlar eğer zaten galerilerinizde resim varsa değiştirilmemelidir<br />
  <a name="notice2"></a>(**) ile işaretli yerleri değiştirdiğiniz zaman, sadece eklediğiniz noktadaki dosyaları etkiler, bundan dolayı galeride eğer resimler varsa ayarların değiştirilmemesi daha mantıklı. Siz, bununla birlikte, &quot mevcut olan dosyaları da ; <a href="util.php">admin seçenekleri</a> le değiştirmiş olacaksınız (resimleri yeniden boyutlandır)&quot; admin menüsünden faydalanın.</div><br />', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Ekart yollama', //cpg1.3.0
  'ecard_sender' => 'Gönderen', //cpg1.3.0
  'ecard_recipient' => 'Recipient', //cpg1.3.0
  'ecard_date' => 'Tarih', //cpg1.3.0
  'ecard_display' => 'Ekart gösterimi', //cpg1.3.0
  'ecard_name' => 'Ad', //cpg1.3.0
  'ecard_email' => 'Email', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'yükselim', //cpg1.3.0
  'ecard_descending' => 'alçalım', //cpg1.3.0
  'ecard_sorted' => 'Sıralandı', //cpg1.3.0
  'ecard_by_date' => 'tarihe göre', //cpg1.3.0
  'ecard_by_sender_name' => 'by sender\'s name', //cpg1.3.0
  'ecard_by_sender_email' => 'by sender\'s email', //cpg1.3.0
  'ecard_by_sender_ip' => 'by sender\'s IP address', //cpg1.3.0
  'ecard_by_recipient_name' => 'by recipient\'s name', //cpg1.3.0
  'ecard_by_recipient_email' => 'by recipient\'s email', //cpg1.3.0
  'ecard_number' => 'gösterim kayıtı %s to %s of %s', //cpg1.3.0
  'ecard_goto_page' => 'sayfaya git', //cpg1.3.0
  'ecard_records_per_page' => 'Sayfa başındaki kayıtlar', //cpg1.3.0
  'check_all' => 'Tümünü kontrol et', //cpg1.3.0
  'uncheck_all' => 'Hiçbirini kontrol etme', //cpg1.3.0
  'ecards_delete_selected' => 'Seçilen ekartları sil', //cpg1.3.0
  'ecards_delete_confirm' => 'Silmek istediğinizden emin misiniz?Kontrol kutusunu işaretleyin!', //cpg1.3.0
  'ecards_delete_sure' => 'Eminim', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => ' Adınızı ve bir yorum yazmalısınız',
  'com_added' => 'Yorumunuz eklendi',
  'alb_need_title' => 'Albüm için bir başlık seçmelisiniz !',
  'no_udp_needed' => 'Güncellemeye gerek yok.',
  'alb_updated' => 'Albüm güncelleşti',
  'unknown_album' => 'Seçilen albüm bulunamadı yada bu albüme yükleme izniniz yok',
  'no_pic_uploaded' => 'Resim Yüklenmedi !<br /><br />Eğer gerçekten yüklemek için resim seçtiyseniz, sunucunun izin veridiği resim yüklemelerini kontrol edin...', //cpg1.3.0
  'err_mkdir' => 'Yaratma klasörü başarısız %s !',
  'dest_dir_ro' => 'Gönderilen adres %s script tarafından yazılamaz !',
  'err_move' => '%s ya %s geçmek imkansız!',
  'err_fsize_too_large' => 'Yüklediğiniz resim çok büyük(izin verilen maksimum büyklük %s x %s) !', //cpg1.3.0
  'err_imgsize_too_large' => 'Yüklediğiniz resim boyuttu çok geniş (izin verilen maksimum genişlik %s KB) !',
  'err_invalid_img' => 'Yüklediğiniz resim geçerli değil !',
  'allowed_img_types' => 'sadece %s imajları yükleyebilirsiniz.',
  'err_insert_pic' => ' \'%s\' resim albüme yerleşmedi ', //cpg1.3.0
  'upload_success' => 'Resminiz başarı ile yüklendi.<br /><br />Admin onayından sonra resminiz eklenecektir.', //cpg1.3.0
  'notify_admin_email_subject' => '%s - Yükleme bildirisi', //cpg1.3.0
  'notify_admin_email_body' => ' %s tarafından onayınızı bekleyen resim eklendi. %s bak', //cpg1.3.0
  'info' => 'Bilgi',
  'com_added' => 'Yorum eklendi',
  'alb_updated' => 'Album updated',
  'err_comment_empty' => 'Yorumunuz boş !',
  'err_invalid_fext' => 'Sadece izin verilen resimler büyütülebilir : <br /><br />%s.',
  'no_flood' => 'Üzgümün ama bu dosya için son yorumun yazarı sizsiniz<br /><br /> Eğer istiyorsanız yorumunuzu düzeltin', //cpg1.3.0
  'redirect_msg' => 'Adresiniz değiştiriliyor.<br /><br /><br />Click \'DEVAM\' eğer sayfa otomatik olarak yenilenmezse',
  'upl_success' => 'Resminiz başarılyla eklendi', //cpg1.3.0
  'email_comment_subject' => 'Yorum İbrahim ALTINOK Galeri de yolandı', //cpg1.3.0
  'email_comment_body' => 'Birisi galerinize bir yorum yolladı. Buradan bakın', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Başlık',
  'fs_pic' => 'Tam boy görüntü',
  'del_success' => 'Başarıyla silindi',
  'ns_pic' => 'Normal boy görüntü',
  'err_del' => 'silinemedi',
  'thumb_pic' => 'küçük resim',
  'comment' => 'yorum',
  'im_in_alb' => 'albümde görüntü',
  'alb_del_success' => '\'%s\' albüm silindi',
  'alb_mgr' => 'Albüm Yöneticisi',
  'err_invalid_data' => '\'%s\' da Veri almada hata',
  'create_alb' => 'Albüm oluşturma\'%s\'',
  'update_alb' => 'Albüm güncelleme\'%s\' başlıkla \'%s\' ve index \'%s\'',
  'del_pic' => 'Resmi sil', //cpg1.3.0
  'del_alb' => 'Albümü sil',
  'del_user' => 'Kullanıcıyı sil',
  'err_unknown_user' => 'Seçilen kullanıcı bulunamadı !',
  'comment_deleted' => 'Yorum başarıyla silindi',
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
  'confirm_del' => 'Bu resmi SİLMEK istediğinizden emin misiniz ? \\nYorum silinmiş olmalı.', //js-alert //cpg1.3.0
  'del_pic' => 'BU RESMİ SİL', //cpg1.3.0
  'size' => '%s x %s pixels',
  'views' => '%s zamanlar',
  'slideshow' => 'Ardarda gösterim',
  'stop_slideshow' => 'Gösterimi durdur',
  'view_fs' => 'Tam boy görünüm için tıklayın',
  'edit_pic' => 'Açıklamayı düzenle', //cpg1.3.0
  'crop_pic' => 'Kes ve yer değiştir', //cpg1.3.0
);

$lang_picinfo = array(
  'title' =>'Resim bilgisi', //cpg1.3.0
  'Filename' => 'Resim Adı',
  'Album name' => 'Albüm Adı',
  'Rating' => 'Oylar (%s votes)',
  'Keywords' => 'Anahtar Kelimeler',
  'File Size' => 'Resim boyutu',
  'Dimensions' => 'Boyutlar',
  'Displayed' => 'Gösterilme',
  'Camera' => 'Kamera',
  'Date taken' => 'Çekilen tarih',
  'ISO'=>'ISO',
  'Aperture' => 'Boşluk',
  'Exposure time' => 'Ortaya çıkma zamanı',
  'Focal length' => 'Uzunluk',
  'Comment' => 'Yorum',
  'addFav'=>'Favorilere ekle', //cpg1.3.0
  'addFavPhrase'=>'Favoriler', //cpg1.3.0
  'remFav'=>'Favorilerden ayrıl', //cpg1.3.0
  'iptcTitle'=>'IPTC Başlık', //cpg1.3.0
  'iptcCopyright'=>'IPTC Kopyalama', //cpg1.3.0
  'iptcKeywords'=>'IPTC Anahtar kelimeler', //cpg1.3.0
  'iptcCategory'=>'IPTC Kategori', //cpg1.3.0
  'iptcSubCategories'=>'IPTC Alt kategoriler', //cpg1.3.0
);

$lang_display_comments = array(
  'OK' => 'TAMAM',
  'edit_title' => 'Bu yorumu düzenle',
  'confirm_delete' => 'Bu yorumu silmek istediğinizden emin misiniz?', //js-alert
  'add_your_comment' => 'Yorumunuzu ekleyin',
  'name'=>'İsim',
  'comment'=>'Yorum',
  'your_name' => 'Anon',
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Bu pencereyi kapatmak için götüntüye tıklayın',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Ekart gönder',
  'invalid_email' => '<b>Uyarı</b> : geçersiz email adres !',
  'ecard_title' => ' %s den sizin için bir ekart ',
  'error_not_image' => 'Sadece görüntüler ekart olarak gönderilebilir', //cpg1.3.0
  'view_ecard' => 'Eğer ekart tam olarak görünmezse bu linki yıklayınız',
  'view_more_pics' => 'Daha fazla resim resim için bu linki tıklayınız !',
  'send_success' => 'Ekartınız yolandı',
  'send_failed' => 'Üzgünüm ama sunucu ekartınızı yollayamadı...',
  'from' => 'Nereden',
  'your_name' => 'Adınız',
  'your_email' => 'Email adresiniz',
  'to' => 'Kime',
  'rcpt_name' => 'Alıcının Adı',
  'rcpt_email' => 'Alıcının email adresi',
  'greetings' => 'Başlık',
  'message' => 'Mesajınız',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Rsim bilgisi', //cpg1.3.0
  'album' => 'Albüm',
  'title' => 'Başlık',
  'desc' => 'Açıklama',
  'keywords' => 'Anahtar kelimeler',
  'pic_info_str' => '%s &times; %s - %s KB - %s views - %s votes',
  'approve' => 'Resmi onayla', //cpg1.3.0
  'postpone_app' => 'Onayı ertele',
  'del_pic' => 'Resmi sil', //cpg1.3.0
  'read_exif' => 'EXIF bilgisini tekrar okuyunuz', //cpg1.3.0
  'reset_view_count' => 'Görüntü sayacını yenile',
  'reset_votes' => 'Oyları yenile',
  'del_comm' => 'Yorumları sil',
  'upl_approval' => 'Onay gönder',
  'edit_pics' => 'Resimleri Düzenle', //cpg1.3.0
  'see_next' => 'Diğer resimlere bak', //cpg1.3.0
  'see_prev' => 'Gerideki resimlere bak', //cpg1.3.0
  'n_pic' => '%s resimler', //cpg1.3.0
  'n_of_pic_to_disp' => 'Gösterim için resimlerin numaraları', //cpg1.3.0
  'apply' => 'Değişiklikleri Kaydet', //cpg1.3.0
  'crop_title' => 'Coppermine Picture Editor', //cpg1.3.0
  'preview' => 'Özel gösterim', //cpg1.3.0
  'save' => 'Rsimleri kaydet', //cpg1.3.0
  'save_thumb' =>'Küçük resim olarak kaydet', //cpg1.3.0
  'sel_on_img' =>'Seçim tümüyle resimler üzerinde olmalıdır!', //js-alert //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Sık Sorulan Sorular', //cpg1.3.0
  'toc' => 'İçeriklerin çizelgesi', //cpg1.3.0
  'question' => 'Sorular: ', //cpg1.3.0
  'answer' => 'Cevap: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'General FAQ', //cpg1.3.0
  array('Neden kayıt olmaya ihtiyaç var?', 'Kayıt admin tarafından onaylanabilir veya onaylanmaz. Kayıt işlemi üyeye ek olarak resim yükleme özelliği verir, favori listesine sahip olurlar, resimlere oy verebilir ve onlara yorum yazabilirler ve benzeri.', 'allow_user_registration', '1'), //cpg1.3.0
  array('Nasıl kayıt olabilirim?', '&quot;Register&quot; a gidin ve istenilen boşlukları doldurun (eğer isterseniz).<br />Eğer admin If the Administrator has Email Activation enabled ,then after submitting your information you should recieve an email message at the address that you have submitted while registering, giving you instructions on how to activate your membership. Your membership must be activated in order for you to login.', 'allow_user_registration', '1'), //cpg1.3.0
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
  'forgot_passwd' => 'Şifremi unuttum', //cpg1.3.0
  'err_already_logged_in' => 'Daha önceden giriş yapmışsınız !', //cpg1.3.0
  'enter_username_email' => 'Kullanıcı adınızı veya email adresinizi yazın', //cpg1.3.0
  'submit' => 'git', //cpg1.3.0
  'failed_sending_email' => 'Şifreniz yollanamadı !', //cpg1.3.0
  'email_sent' => 'Kullanıcı adınız ve şifrenize mail yoluyla %s a yollandı', //cpg1.3.0
  'err_unk_user' => 'Seçilen kullanıcı bulunamadı!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - Şifremi unuttum', //cpg1.3.0
  'passwd_reminder_body' => 'Giriş verilerinizi öğrenmek istemişsiniz:
Kullanıcı adı: %s
Şifre: %s
Giriş için %s i tıklayın.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Grup Adı',
  'disk_quota' => 'Disk boyutu',
  'can_rate' => 'Resim oranı', //cpg1.3.0
  'can_send_ecards' => 'Ekart yollama',
  'can_post_com' => 'Yorum yolama',
  'can_upload' => 'Resim yükleme', //cpg1.3.0
  'can_have_gallery' => 'Kişisel galeri sahibi olma',
  'apply' => 'Değişiklikleri kaydet',
  'create_new_group' => 'Yeni grup ',
  'del_groups' => 'Seçilen grup (-ları) sil',
  'confirm_del' => 'Uyarı, ne zaman bir grubu silerseniz, o gruba ait olan kullanıcılar \'Registered\' grubuna transfar edilecektir !\n\nDevam etma istiyor musunuz?', //js-alert //cpg1.3.0
  'title' => 'Kullanıcı gruplarını yönet',
  'approval_1' => 'herkese açık yüklemeyi onayla (1)',
  'approval_2' => 'özel yüklemeyi onayla (2)',
  'upload_form_config' => 'Yükleme formu biçimleri', //cpg1.3.0
  'upload_form_config_values' => array( 'Sadece tek resim yüklemeler', 'Sadece çoklu yüklemeler ', 'Sadece URI yüklemeler', 'Sadece ZIP Yüklemeler', 'resim-URI', 'resim-ZIP', 'URI-ZIP', 'resim-URI-ZIP'), //cpg1.3.0
  'custom_user_upload'=>'Kullanıcı yükleme kutusunun numarasını düzenleyebilir mi?', //cpg1.3.0
  'num_file_upload'=>'Yükleme kutularının maksimum resim numarası', //cpg1.3.0
  'num_URI_upload'=>'Yükleme kutularının maksimum URI numarası', //cpg1.3.0
  'note1' => '<b>(1)</b> Herkese açık albümdeki yüklemelere admin onayı gerekmektedir',
  'note2' => '<b>(2)</b> Bir albüme yükleme yapmak için kullanıcı admin onayı almalıdır',
  'notes' => 'Notlar',
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Hoşgeldiniz !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Bu albümü SİLMEK istediğinizden emin misiniz ? \\nBütün resimler ve yorumlar silinmiş olacaktır.', //js-alert //cpg1.3.0
  'delete' => 'SİL',
  'modify' => 'ÖZELLİKLER',
  'edit_pics' => 'RESİMLERİ DÜZENLE', //cpg1.3.0
);

$lang_list_categories = array(
  'home' => 'Ana sayfa',
  'stat1' => '<b>[pictures]</b> daki resimler <b>[albums]</b> albümler ve <b>[cat]</b> kategoriler <b>[comments]</b> yorumlar gösterildi <b>[views]</b> zaman', //cpg1.3.0
  'stat2' => '<b>[pictures]</b> daki resimler <b>[albums]</b> albümler gösterildi <b>[views]</b> zaman', //cpg1.3.0
  'xx_s_gallery' => '%s\'s Geleri',
  'stat3' => '<b>[pictures]</b> daki resimler <b>[albums]</b> albümler <b>[comments]</b> yorumlar gösterildi <b>[views]</b> zaman', //cpg1.3.0
);

$lang_list_users = array(
  'user_list' => 'Kullanıcı listesi',
  'no_user_gal' => 'Kullanıcı galerisi yok',
  'n_albums' => '%s albüm(-ler)',
  'n_pics' => '%s resim(-ler)', //cpg1.3.0
);

$lang_list_albums = array(
  'n_pictures' => '%s resimler', //cpg1.3.0
  'last_added' => ', sonuncusu %s a eklendi',
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Giriş',
  'enter_login_pswd' => 'Giriş yapmak için kullanıcı adınızı ve şifrenizi yazın',
  'username' => 'Kullanıcı adı',
  'password' => 'Şifre',
  'remember_me' => 'Beni hatırla',
  'welcome' => 'Hoşgeldin %s ...',
  'err_login' => '*** Giriş yapılamadı! Lütfen tekrar deneyin ***',
  'err_already_logged_in' => 'Daha önceden giriş yapmışsınız !',
  'forgot_password_link' => 'Şifremi unuttum', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Çıkış',
  'bye' => 'Bye bye %s ...',
  'err_not_loged_in' => 'Giriş yapmamışsınız !',
);

// ------------------------------------------------------------------------- //
// File phpinfo.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP bilgi', //cpg1.3.0
  'explanation' => 'This is the output generated by the PHP-function <a href="http://www.php.net/phpinfo">phpinfo()</a>, displayed within Copermine (trimming the output at the right corner).', //cpg1.3.0
  'no_link' => 'Having others see your phpinfo can be a security risk, that\'s why this page is only visible when you\'re logged in as admin. You can not post a link to this page for others, they will be denied access.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Güncellenen albüm %s',
  'general_settings' => 'Genel ayarlar',
  'alb_title' => 'Albüm başlığı',
  'alb_cat' => 'Albüm kategorisi',
  'alb_desc' => 'Albüm açıklaması',
  'alb_thumb' => 'Albüm küçük resmi',
  'alb_perm' => 'Bu albüm için izinler',
  'can_view' => 'Albüm tarafından görüntülenebilir',
  'can_upload' => 'Ziyaretçiler resim yükleyebilirler',
  'can_post_comments' => 'Ziyaretçiler yorum ekleyebilirler',
  'can_rate' => 'Ziyaretçiler oy verebilirler',
  'user_gal' => 'Kullanıcı galerisi',
  'no_cat' => '* Kategori yok *',
  'alb_empty' => 'Albüm boş',
  'last_uploaded' => 'Son yüklenenler',
  'public_alb' => 'Herkes (Herkese açık albüm)',
  'me_only' => 'Sadece ben',
  'owner_only' => 'Sadece (%s) albüm sahibi',
  'groupp_only' => ' \'%s\' grubunun üyeleri',
  'err_no_alb_to_modify' => 'Veritabanında albüm düzenleyemazsiniz.',
  'update' => 'Albümü güncelle', //cpg1.3.0
  'notice1' => '(*)  %sgroups%s ayarlar', //cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Üzgünüm ama bu resme daha önceden oy verdiniz', //cpg1.3.0
  'rate_ok' => 'Oyunuz kabul edildi',
  'forbidden' => 'Kendi resminize oy veremezsiniz.', //cpg1.3.0
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
  'page_title' => 'Kullanıcı kayıdı',
  'term_cond' => 'Durumlar ve süreler',
  'i_agree' => 'Katılıyorum',
  'submit' => 'Anlaşmayı Yolla',
  'err_user_exists' => 'Yazdığınız kullanıcı adı bulunamadı, lütfen başka birtane seçin',
  'err_password_mismatch' => 'İki şifre birbirine uymuyor, lütfen tekrar yazın',
  'err_uname_short' => 'Kullanıcı dı en az 2 karakterden fazla olmalıdır',
  'err_password_short' => 'Şifre en az 2 karakterden fazla olmalıdır',
  'err_uname_pass_diff' => 'Kullanıcı adı ve şifre birbirinden farklı olmalıdır',
  'err_invalid_email' => 'Email adresi geçersiz',
  'err_duplicate_email' => 'Başka bir kullanıcı yazdığınız e mail adresini yazmıştır',
  'enter_info' => 'Kayıt bilgilerini girin',
  'required_info' => 'Talep bilgileri',
  'optional_info' => 'İsteğe bağlı bilgi',
  'username' => 'Kullanıcı adı',
  'password' => 'Şifre',
  'password_again' => 'Şifreyi tekrar yazın',
  'email' => 'Email',
  'location' => 'Nereden',
  'interests' => 'Hobiler',
  'website' => 'Web sitesi',
  'occupation' => 'Meslek',
  'error' => 'HATA',
  'confirm_email_subject' => '%s - Kayıt Doğrulama',
  'information' => 'Bilgi',
  'failed_sending_email' => 'Kayıt doğrulama maili yollanamadı !',
  'thank_you' => 'Kayıt olduğunuz için teşekkürler.<br /><br />Email adresinize üyeliğinizi aktif etmeniz için bir mail gönderildi.',
  'acct_created' => 'Üyeliğiniz oluşturuldu ve şimdi siteye girip kullanıcı adınız ve şifrenizle giriş yapabilirsiniz',
  'acct_active' => 'Üyeliğiniz şu an aktif ve kullanıcı adınızla ve şifrenizle giriş yapabilirsiniz',
  'acct_already_act' => 'Üyeliğiniz daha önceden aktif edilmiş !',
  'acct_act_failed' => 'Bu üyelik aktif edilemez !',
  'err_unk_user' => 'Seçilen kullanıcı bulunamadı !',
  'x_s_profile' => '%s\'s profil',
  'group' => 'Grup',
  'reg_date' => 'Katıldı',
  'disk_usage' => 'Kullanılan disk',
  'change_pass' => 'Şifre değiş',
  'current_pass' => 'Şimdiki şifre',
  'new_pass' => 'Yeni şifre',
  'new_pass_again' => 'Yeni şifre tekrarı',
  'err_curr_pass' => 'Şimdiki şifreniz yanlış',
  'apply_modif' => 'Değişiklikleri kaydet',
  'change_pass' => 'Şifremi değiş',
  'update_success' => 'Profiliniz güncellendi',
  'pass_chg_success' => 'Şifreniz değişti',
  'pass_chg_error' => 'Şifreniz değişmedi',
  'notify_admin_email_subject' => '%s - Kayıt Bildirisi', //cpg1.3.0
  'notify_admin_email_body' => 'Yeni bi kullanıcı "%s" galerinize kayıt oldu', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
{SITE_NAME}e kayıt olduğunuz için teşekkürler.

Kullanıcı adınız : "{USER_NAME}"
Şifreniz : "{PASSWORD}"

Üyeliğinizi aktif etmek için, aşağıdaki linki tıklamalısınız
ya da web browserınıza copyalayıp yapıştırın.

{ACT_LINK}

Teşekkürler,

{SITE_NAME} yönetimi

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'Yorumları inceleme',
  'no_comment' => 'İnceleme için bir yorum bulunamadı',
  'n_comm_del' => '%s yorum(-lar) silindi',
  'n_comm_disp' => 'Gösterim için yorumların numarası',
  'see_prev' => 'Geriye bak',
  'see_next' => 'İleriye bak',
  'del_comm' => 'Seçilen yorumları sil',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
  0 => 'Resim kolleksiyonunu ara',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Yeni resimler ara', //cpg1.3.0
  'select_dir' => 'Klasör seç',
  'select_dir_msg' => 'Bu fonksiyon size FTP ile sunucunuza resim grubu eklemenize izin verir.<br /><br />Resimlerinizi eklediğiniz klsörü seçin', //cpg1.3.0
  'no_pic_to_add' => 'Eklemek için resim bulunamadı', //cpg1.3.0
  'need_one_album' => 'Son olarak Bu fonksiyonu kullanabilmek için bir albüme ihtiyacınız var',
  'warning' => 'Uyarı',
  'change_perm' => 'Script bu klasörü yazamaz , modunu resimleri eklemeden önce 755 e vaya 777 ye çevirmeniz gerekir !', //cpg1.3.0
  'target_album' => '<b>Resimlerini koy &quot;</b>%s<b>&quot; içine </b>%s', //cpg1.3.0
  'folder' => 'Klasör',
  'image' => 'Dosya',
  'album' => 'Albüm',
  'result' => 'Sonuç',
  'dir_ro' => 'Yazılamaz. ',
  'dir_cant_read' => 'Okunamaz. ',
  'insert' => 'Galeriye yeni resimler ekleme', //cpg1.3.0
  'list_new_pic' => 'Yeni resimlerin listesi', //cpg1.3.0
  'insert_selected' => 'Seçilen resimleri ekle', //cpg1.3.0
  'no_pic_found' => 'Yeni resim bulunamadı', //cpg1.3.0
  'be_patient' => 'Lütfen sabırlı olun, scriptin resimleri eklemek için zamana ihtiyacı var', //cpg1.3.0
  'no_album' => 'Albüm seçilmedi',  //cpg1.3.0
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : anlamı resim başarıyla eklendi'.
                          '<li><b>DP</b> : anlamı resim aynı ve daha öneceden veri tabanın içinde'.
                          '<li><b>PB</b> : anlamı resim eklanamedi, biçiminizi ve resimlerin nerede kloasör izninine sahip olduğunuzu konyrol ediniz'.
                          '<li><b>NA</b> : anlamı resime gidebilmek için bir albüm seçmediniz, \' <a href="javascript:history.back(1)">geriye gidin</a>\' ve bir albüm seçin. Eğer albümünüz yoksa<a href="albmgr.php">birtane oluşturun</a></li>'.
                          '<li>Eğer TAMAM, DP, PB \'signs\' gözükmüyorsa hata görmemek için resme tıklayın'.
                          '<li>Eğer browserınız timeout ise, tekrar yükle butonunu tıklayınız'.
                          '</ul>', //cpg1.3.0
  'select_album' => 'albüm seç', //cpg1.3.0
  'check_all' => 'Tümünü kontrol et', //cpg1.3.0
  'uncheck_all' => 'Tümünü kontrol etme', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Kullanıcıları banla',
  'user_name' => 'Kullanıcı Adı',
  'ip_address' => 'IP Adresi',
  'expiry' => 'Süresi dolanlar (Sürekli ise boş bırak)',
  'edit_ban' => 'Değişiklikleri kaydet',
  'delete_ban' => 'Sil',
  'add_new' => 'Yeni ban ekle',
  'add_ban' => 'Ekle',
  'error_user' => 'Kullanıcı bulunamadı', //cpg1.3.0
  'error_specify' => 'Kullanıcı adını veya IP edresini açıkça belirtin', //cpg1.3.0
  'error_ban_id' => 'Geçersiz ID!', //cpg1.3.0
  'error_admin_ban' => 'Kendini banlayamazsın!', //cpg1.3.0
  'error_server_ban' => 'Sunucunu banlayacaksın? Tsk tsk, Bunu yapamazsın...', //cpg1.3.0
  'error_ip_forbidden' => 'Bu IP adresini banlayamazsın - Dokunulmazlığı var!', //cpg1.3.0
  'lookup_ip' => 'IP adresi bak', //cpg1.3.0
  'submit' => 'git!', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Upload file', //cpg1.3.0
  'custom_title' => 'Talep Formu Düzenleme', //cpg1.3.0
  'cust_instr_1' => 'Yükleme kutularının numarasını seçebilirisin. Bununla birlikte, Aşağıda listelenen limitin üstünde seçim yapamzsınız.', //cpg1.3.0
  'cust_instr_2' => 'Kutu numarası talebi', //cpg1.3.0
  'cust_instr_3' => 'Resim yükleme kutuları: %s', //cpg1.3.0
  'cust_instr_4' => 'URI/URL yükleme kutulrı: %s', //cpg1.3.0
  'cust_instr_5' => 'URI/URL yükleme kutuları:', //cpg1.3.0
  'cust_instr_6' => 'Resim yükleme kutuları:', //cpg1.3.0
  'cust_instr_7' => 'Lütfen istediğiniz yükleme kutusunun numarasını girin.  sonra tıklayın \'Continue\'. ', //cpg1.3.0
  'reg_instr_1' => 'Forum aluşumunda geçersiz durum.', //cpg1.3.0
  'reg_instr_2' => 'Şidi aşağıda kullanılan yükleme kutularından resimlerinizi yükleyebilirsiniz. Sunucuya yüklediğiniz resimler boyutu aşmamalıdır ve herbiri için %s KB olmalıdır. ZIP resimleri \'File Upload\' e yüklendi ve  \'URI/URL Upload\' bölümleri sıkışmış olarak kalacaktır.', //cpg1.3.0
  'reg_instr_3' => 'Eğer sıkıştırılmış resimleri açmak istiyorsanız, \'Decompressive ZIP Upload\' daki yükleme kutusunu kullanmalısınız.', //cpg1.3.0
  'reg_instr_4' => 'URI/URL yükleme seçeneklerini kullandığınız zaman, lütfen örnekteki gibi: http://www.mysite.com/images/example.jpg yol verin', //cpg1.3.0
  'reg_instr_5' => 'Formu tamamladığınızda, lütfen tıklayın \'Continue\'.', //cpg1.3.0
  'reg_instr_6' => 'Zipli dosyaları açma:', //cpg1.3.0
  'reg_instr_7' => 'Resim yüklemeleri:', //cpg1.3.0
  'reg_instr_8' => 'URI/URL Yüklemeleri:', //cpg1.3.0
  'error_report' => 'Hata raporu', //cpg1.3.0
  'error_instr' => 'Takip edilen yükleme karşılaştırma hataları:', //cpg1.3.0
  'file_name_url' => 'Resim Adı/URL', //cpg1.3.0
  'error_message' => 'Hata Mesajı', //cpg1.3.0
  'no_post' => 'Resim yüklenemedi.', //cpg1.3.0
  'forb_ext' => 'Resim büyütmek yasaktır.', //cpg1.3.0
  'exc_php_ini' => 'php.ini de izinverilen dasya boyutu aşıldı.', //cpg1.3.0
  'exc_file_size' => 'CPG tarafından izin verilen dosya boyutu aşıldı.', //cpg1.3.0
  'partial_upload' => 'Sadece kısmi yükleme.', //cpg1.3.0
  'no_upload' => 'Yükleme yok.', //cpg1.3.0
  'unknown_code' => 'Bilinmeyen PHP yükleme hata kodu.', //cpg1.3.0
  'no_temp_name' => 'Yükleme yok - Temp adı yok.', //cpg1.3.0
  'no_file_size' => 'İçerilen veri bulunamadı/Bozulmuş', //cpg1.3.0
  'impossible' => 'Hareket etmek imkansız.', //cpg1.3.0
  'not_image' => 'İmaj notu/bozma', //cpg1.3.0
  'not_GD' => 'GD genişletme değil.', //cpg1.3.0
  'pixel_allowance' => 'Piksel izini aşıldı.', //cpg1.3.0
  'incorrect_prefix' => 'Yanlış URI/URL ', //cpg1.3.0
  'could_not_open_URI' => 'URI açılamadı.', //cpg1.3.0
  'unsafe_URI' => 'Güvenlik kanıtlanamadı.', //cpg1.3.0
  'meta_data_failure' => 'Meta verisi başarısız', //cpg1.3.0
  'http_401' => '401 Yetkisiz', //cpg1.3.0
  'http_402' => '402 Ödeme gerekli', //cpg1.3.0
  'http_403' => '403 Yasak', //cpg1.3.0
  'http_404' => '404 Bulunamadı', //cpg1.3.0
  'http_500' => '500 Sunucu hatası', //cpg1.3.0
  'http_503' => '503 Servis bulunamadı', //cpg1.3.0
  'MIME_extraction_failure' => 'MIME belirtilemedi.', //cpg1.3.0
  'MIME_type_unknown' => 'Bilinmeyen MIME türü', //cpg1.3.0
  'cant_create_write' => 'Yazı dosyası oluşturulamadı.', //cpg1.3.0
  'not_writable' => 'Yazı dosyası yazamazsınız.', //cpg1.3.0
  'cant_read_URI' => 'URI/URL okunamaz', //cpg1.3.0
  'cant_open_write_file' => 'URI yazma dosyası açılamadı.', //cpg1.3.0
  'cant_write_write_file' => 'URI yazma dosyasına yazamazsınız.', //cpg1.3.0
  'cant_unzip' => 'Uzip yapamazsınız.', //cpg1.3.0
  'unknown' => 'Bilinmeyen hata', //cpg1.3.0
  'succ' => 'Başarılı Yüklemeler', //cpg1.3.0
  'success' => '%s yüklemesi başarılı.', //cpg1.3.0
  'add' => 'Lütfen albüme resim eklemek için tıklayın \'Continue\' .', //cpg1.3.0
  'failure' => 'Yükleme başarısız', //cpg1.3.0
  'f_info' => 'Resim bilgisi', //cpg1.3.0
  'no_place' => 'Önceki resim yerleştirilemedi.', //cpg1.3.0
  'yes_place' => 'Önceki resim başarıyla yerleştirildi.', //cpg1.3.0
  'max_fsize' => 'Maksimum resim boyutu %s KB',
  'album' => 'Albüm',
  'picture' => 'Resim', //cpg1.3.0
  'pic_title' => 'Resim başlığı', //cpg1.3.0
  'description' => 'Resim açıklaması', //cpg1.3.0
  'keywords' => 'Anahtar kelimeler (aralarına boluk bırakınız)',
  'err_no_alb_uploadables' => 'Üzgünüm Yaptığınız yüklemelerde albüm bulunamadı', //cpg1.3.0
  'place_instr_1' => 'Lütfen resimleri yerleştirin.  Her resim için gerekli bilgiyi girin.', //cpg1.3.0
  'place_instr_2' => 'Daha fazla resim alana ihtiyaç duyar. Lütfen tıklayın \'Continue\'.', //cpg1.3.0
  'process_complete' => 'Başarıyla bütün resimleri yerleştirdiniz.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'title' => 'Kullanıcıları yönet',
  'name_a' => 'Ada göre artan',
  'name_d' => 'Ada göre azalan',
  'group_a' => 'Gruba göre artan',
  'group_d' => 'Gruba göre azalan',
  'reg_a' => 'Rege göre artan',
  'reg_d' => 'Rege göre azalan',
  'pic_a' => 'Resim içeriğine göre artan',
  'pic_d' => 'Resim içeriğine göre azalan',
  'disku_a' => 'Disk kullanımına göreartan',
  'disku_d' => 'Disk kullanımına göre azalan',
  'lv_a' => 'Son ziyarete göre artan', //cpg1.3.0
  'lv_d' => 'Son ziyarete göreazalan', //cpg1.3.0
  'sort_by' => 'kullanıcıları sırala',
  'err_no_users' => 'Kullanıcı çizelgesi boş !',
  'err_edit_self' => 'Kendi profilinizi düzeltemezsiniz,  \'My profile\' linkini kullanın',
  'edit' => 'DÜZELT',
  'delete' => 'SİL',
  'name' => 'Kullanıcı adı',
  'group' => 'Grup',
  'inactive' => 'Inaktif',
  'operations' => 'İşlemler',
  'pictures' => 'Resimler', //cpg1.3.0
  'disk_space' => 'Alan kulanıldı / kontenjan',
  'registered_on' => 'Kayıt ol',
  'last_visit' => 'Son ziyaret edilen', //cpg1.3.0
  'u_user_on_p_pages' => '%d kullanıcılar %d sayfa(-lar)da',
  'confirm_del' => 'Bu kullanıcıyı silmek istediğinizden emin misiniz? \\nOnun büyünresimleri ve albümleri silinecek.', //js-alert //cpg1.3.0
  'mail' => 'MAİL',
  'err_unknown_user' => 'Seçilen kullanıcı bulunamadı !',
  'modify_user' => 'Kullanıcıyı düzenle',
  'notes' => 'Notlar',
  'note_list' => '<li>Şimdiki şifreni değiştirmek istemiyorsan, "şifre" alanını boş bırakınız',
  'password' => 'Şifre',
  'user_active' => 'Kullanıcı Aktif',
  'user_group' => 'Kullanıcı grubu',
  'user_email' => 'Kullanıcı emaili',
  'user_web_site' => 'Kullanıcı web sitesi',
  'create_new_user' => 'Yeni kullanıcı oluştur',
  'user_location' => 'Kullanıcı yeri',
  'user_interests' => 'Kullanıcı hobileri',
  'user_occupation' => 'Kullanıcı mesleği',
  'latest_upload' => 'Yakınlardaki yüklemeler', //cpg1.3.0
  'never' => 'asla', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
  'title' => 'Admin İşlevleri (Resimleri yeniden boyutlandır)', //cpg1.3.0
  'what_it_does' => 'Ne yapar',
  'what_update_titles' => 'Resim adından güncelleme başlıkları',
  'what_delete_title' => 'Başlıkları siler',
  'what_rebuild' => 'Küçük resimleri ve yeniden boyutlanmış fotoğrafları yeniden oluşturur',
  'what_delete_originals' => 'Yeniden boyutlanma versiyonu ile fotoğrafları orjinal boyutlarını siler',
  'file' => 'Resim',
  'title_set_to' => 'ayarlama için başlık',
  'submit_form' => 'gönder',
  'updated_succesfully' => 'Güncelleme başarılı',
  'error_create' => 'Oluşturmada HATA',
  'continue' => 'daha fazla görüntü',
  'main_success' => 'Resim %s ana dosyada kullanılıyor', //cpg1.3.0
  'error_rename' => ' %s  %s ye yeni adlandırmada hata ',
  'error_not_found' => 'Resim %s bulunamadı',
  'back' => 'ana sayfaya dön',
  'thumbs_wait' => 'Küçük resimler ve/veya yeniden boyutlanan resimler Güncelleniyor, lütfen bekliyor...',
  'thumbs_continue_wait' => 'Küçük resimleri ve/veya yeniden boyutlanan resimleri gücelleme devam ediyor...',
  'titles_wait' => 'Başlıklar güncelleniyor, Lütfen bekleyin...',
  'delete_wait' => 'Başlılar siliniyor, lütfen bekleiyin...',
  'replace_wait' => 'Orjinal resimler yeniden boyutlanana resimler ile orjinal halde siliniyor, lütfen bekleyin..',
  'instruction' => 'Hızlı talimat',
  'instruction_action' => 'İşlem seç',
  'instruction_parameter' => 'Parametreleri ayarla',
  'instruction_album' => 'Albüm seç',
  'instruction_press' => 'Bas %s',
  'update' => 'Küçük resimleri ve/veya yeniden boyutlandırılan resimler güncelleniyor',
  'update_what' => 'Ne güncellenmeli',
  'update_thumb' => 'Sadece küçük resimler',
  'update_pic' => 'Sadece yeniden boyutlandırılan resimler',
  'update_both' => 'Küçük resimler ve yeniden boyutlandırılan reimler',
  'update_number' => 'Resimleri tılama sürecini numaralandır',
  'update_option' => '(Bu tecihi azaltma ayarlarını deneyin eğer timeout problemlerinde tecrübeliysen)',
  'filename_title' => 'Resim adı &rArr; Resim başlığı', //cpg1.3.0
  'filename_how' => 'Resim adı nasıl düzenlenmeli',
  'filename_remove' => ' .jpg sonlandırmasından ayrıl ve boşlulklarla yerine _ (alt tire) ekle ',
  'filename_euro' => '2003_11_23_13_20_20.jpg ği  23/11/2003 13:20 ğe çevir',
  'filename_us' => '2003_11_23_13_20_20.jpg ği  23/11/2003 13:20 ğe çevir',
  'filename_time' => '2003_11_23_13_20_20.jpg ği  13:20 e çevir',
  'delete' => 'Resim adlarını yada orjinal forğraf boyutlarını sil', //cpg1.3.0
  'delete_title' => 'Resim başlıklarını sil', //cpg1.3.0
  'delete_original' => 'Orjinal foroğraf boyutlarını sil',
  'delete_replace' => 'Yeniden boyutlanma versiyonu ile fotoğrafları orjinal boyutlarını siler',
  'select_album' => 'Albüm seç',
  'delete_orphans' => 'Yorumları sil (bütün albümlerin üzerinde çalışır)', //cpg1.3.0
  'orphan_comment' => 'Yorumlar bulundu', //cpg1.3.0
  'delete' => 'Sil', //cpg1.3.0
  'delete_all' => 'Tümünü sil', //cpg1.3.0
  'comment' => 'Yorum: ', //cpg1.3.0
  'nonexist' => 'attached to non existant file # ', //cpg1.3.0
  'phpinfo' => 'phpinfo gösterimi', //cpg1.3.0
  'update_db' => 'Veritabanını güncelle', //cpg1.3.0
  'update_db_explanation' => 'Eğer coppermine resimlerini tekrar yerleştirmek istiyorsan, değişiklik eklendi yada copperminenin önceki versiyonundan yüklendiğini, veritabanın güncellendiğinden emin ol. Bu gerekli çizelgeleri ve/veya seçenekleri coppermine veri tabanında değerlendirir.', //cpg1.3.0
);

?>
