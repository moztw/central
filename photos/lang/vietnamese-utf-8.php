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
// $Id: vietnamese-utf-8.php,v 1.4 2004/08/14 17:05:07 gaugau Exp $
// ------------------------------------------------------------------------- //
// Kyo's temp: /random,2/lastup,1
// Kyo's note: bản dịch đựoc hướng tới các tác phẩm tự vẽ, tự làm, nên nhiều khi bị gọi là "tranh" hay "phòng tranh" - thành ra nếu bạn dùng bản dịch cho ảnh chụp hay gì khác, hãy sửa lại 1 chút nhé. Be fun! Kyo//

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Vietnamese',
  'lang_name_native' => 'Tiếng Việt',
  'lang_country_code' => 'vi',
  'trans_name'=> 'Kyo Sirowky',
  'trans_email' => 'kyo[et]coffeestation.net',
  'trans_website' => 'http://www.coffeestation.net/',
  'trans_date' => '2004-08-01',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Chủ nhật', 'Thứ hai', 'Thứ ba', 'Thứ tư', 'Thứ năm', 'Thứ sáu', 'Thứ bảy');
$lang_month = array('01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12');

// Some common strings
$lang_yes = 'Có';
$lang_no  = 'Không';
$lang_back = 'Trở lại';
$lang_continue = 'Tiếp tục';
$lang_info = 'Thông báo';
$lang_error = 'Lỗi';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%d %B, %Y';
$lastcom_date_fmt =  '%d/%m/%y at %H:%M'; //cpg1.3.0
$lastup_date_fmt = '%d %B, %Y';
$register_date_fmt = '%d %B, %Y';
$lasthit_date_fmt = '%d %B, %Y at %I:%M %p'; //cpg1.3.0
$comment_date_fmt =  '%d %B, %Y at %I:%M %p'; //cpg1.3.0

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*', 'địt', 'đéo', 'mẹ kiếp', 'chó chết', 'lồn', 'máu lồn', 'địt mẹ', 'cứt', 'đái', 'buồi', 'rắm', 'phân');

$lang_meta_album_names = array(
  'random' => 'Bạn đã xem chưa?', //cpg1.3.0
  'lastup' => 'Các tranh mới',
  'lastalb'=> 'Các album mới được cập nhập thêm',
  'lastcom' => 'Các ý kiến mới nhất',
  'topn' => 'Được xem nhiều nhất',
  'toprated' => 'Được đánh giá cao nhất',
  'lasthits' => 'Mới được xem',
  'search' => 'Kết quả tìm kiếm',
  'favpics'=> 'Các tranh ưa thích', //cpg1.3.0
);

$lang_errors = array(
  'access_denied' => 'Bạn không có quyền truy cập vào trang này.',
  'perm_denied' => 'Bạn không có quyền thực hiện tác vụ đó.',
  'param_missing' => 'Mã lệnh (script) được gọi bị thiếu parameter(s).',
  'non_exist_ap' => 'Album/file được chọn không tồn tại !', //cpg1.3.0
  'quota_exceeded' => 'Dung lượng của bạn đã đạt tới giới hạn cho phép.<br /><br />Bạn có dung lượng cho phép là [quota]K, các tập tin của bạn đang sử dụng [space]K, việc thêm tập tin mới này không thể thực hiện được.', //cpg1.3.0
  'gd_file_type_err' => 'Thư viện xử lý hình GD chỉ làm việc với định dạng PNG và JPEG.',
  'invalid_image' => 'Bức hình bạn mới tải lên bị lỗi hoặc sai định dạng (GD_lib error). Bạn nên dùng JPG hoặc PNG',
  'resize_failed' => 'Không thể tạo hình nhỏ (thumbnail) hoặc chỉnh kích cỡ của hình.',
  'no_img_to_display' => 'Không có hình',
  'non_exist_cat' => 'Thư mục đã được chọn không tồn tại',
  'orphan_cat' => 'Có một thư mục con không có thư mục mẹ, hãy sử dụng trình quản lý thư mục để sửa lỗi!', //cpg1.3.0
  'directory_ro' => 'Thư mục \'%s\' không thể ghi được, các tập tin không thể bị xóa!', //cpg1.3.0
  'non_exist_comment' => 'Ý kiến được chọn không tồn tại.',
  'pic_in_invalid_album' => 'Tập tin ở trong album không tồn tại (%s)!?', //cpg1.3.0
  'banned' => 'Hiện tại bạn đang bị truất quyền truy cập site.',
  'not_with_udb' => 'Hàm/lệnh (function) này bị tắt trong Coppermine vì nó được tích hợp với một phần mềm diễn đàn. Hoặc là điều bạn đang làm không được hỗ trợ trong cấu hình này, hoặc hàm/lệnh đó được điều khiển bới phần mềm diễn đàn kia.',
  'offline_title' => 'Đóng của tạm thời', //cpg1.3.0
  'offline_text' => 'Phòng tranh đang được đóng cửa tạm thời để nâng cấp/sửa chữa, mời bạn ghé lại sau.', //cpg1.3.0
  'ecards_empty' => 'Hiện tại không có ecard nào. Hãy kiểm tra xem bạn có bật tính năng ghi lại các ecard trong CP chưa?', //cpg1.3.0
  'action_failed' => 'Hành động không thể thực hiện được. Coppermine.... đầu hàng >_<', //cpg1.3.0
  'no_zip' => 'Các thư viện cần thiết để ZIP tập tin không có, bạn hãy liên hệ với quản lý của Phòng Tranh.', //cpg1.3.0
  'zip_type' => 'Bạn không thể tải lên tập tin ZIP.', //cpg1.3.0
);

$lang_bbcode_help = 'Các mã BBCode thường dùng: <li>[b]<b>Đậm</b>[/b]</li> <li>[i]<i>Nghiêng</i>[/i]</li> <li>[url=http://yoursite.com/]Tên URL[/url]</li> <li>[email]user@domain.com[/email]</li>'; //cpg1.3.0

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'alb_list_title' => 'Chuyển tới danh sách album của thư mục bạn đang xem',
  'alb_list_lnk' => 'Danh sách album',
  'my_gal_title' => 'Chuyển tới phòng tranh cá nhân của bạn - đồng thời là nơi đăng truyện',
  'my_gal_lnk' => 'Phòng tranh riêng',
  'my_prof_lnk' => 'Thông tin cá nhân',
  'adm_mode_title' => 'Chuyển sang chế độ quản lý',
  'adm_mode_lnk' =>'Chế độ quản lý',
  'usr_mode_title' => 'Chuyển qua chế độ thành viên',
  'usr_mode_lnk' => 'Chế độ sử dụng',
  'upload_pic_title' => 'Gửi tác phẩm của bạn', //cpg1.3.0
  'upload_pic_lnk' => 'Gửi tác phẩm', //cpg1.3.0
  'register_title' => 'Đăng ký làm thành viên của Phòng tranh',
  'register_lnk' => 'Đăng ký',
  'login_lnk' => 'Đăng nhập',
  'logout_lnk' => 'Thoát ra',
  'lastup_lnk' => 'Tác phẩm mới',
  'lastcom_lnk' => 'Các ý kiến mới',
  'topn_lnk' => 'Được xem nhiều nhất',
  'toprated_lnk' => 'Được đánh giá cao nhất',
  'search_lnk' => 'Tìm kiếm',
  'fav_lnk' => 'Hình yêu thích',
  'memberlist_title' => 'Danh sách thành viên', //cpg1.3.0
  'memberlist_lnk' => 'Danh sách thành viên', //cpg1.3.0
  'faq_title' => 'Trả lời các câu hỏi thường gặp về Phòng Tranh', //cpg1.3.0
  'faq_lnk' => 'FAQ', //cpg1.3.0
);

$lang_gallery_admin_menu = array(
  'upl_app_lnk' => 'Tranh mới',
  'config_lnk' => 'Cấu hình',
  'albums_lnk' => 'Album',
  'categories_lnk' => 'Thư mục',
  'users_lnk' => 'Thành viên',
  'groups_lnk' => 'Nhóm',
  'comments_lnk' => 'Ý kiến', //cpg1.3.0
  'searchnew_lnk' => 'Up tranh (FTP)', //cpg1.3.0
  'util_lnk' => 'Công cụ', //cpg1.3.0
  'ban_lnk' => 'Phạt',
  'db_ecard_lnk' => 'Xem thiệp', //cpg1.3.0
);

$lang_user_admin_menu = array(
  'albmgr_lnk' => 'Tạo album riêng',
  'modifyalb_lnk' => 'Chỉnh sửa album của bạn',
  'my_prof_lnk' => 'Thông tin cá nhân',
);

$lang_cat_list = array(
  'category' => 'Thư mục',
  'albums' => 'Albums',
  'pictures' => 'Tác phẩm', //cpg1.3.0
);

$lang_album_list = array(
  'album_on_page' => '%d album trong %d trang',
);

$lang_thumb_view = array(
  'date' => 'Ngày',
  //Sort by filename and title
  'name' => 'Tên tập tin',
  'title' => 'Tiêu đề',
  'sort_da' => 'Xếp theo ngày tăng dần',
  'sort_dd' => 'Xếp theo ngày giảm dần',
  'sort_na' => 'Xếp theo tên tăng dần',
  'sort_nd' => 'Xếp theo tên giảm dần',
  'sort_ta' => 'Xếp theo tiêu đề tăng dần',
  'sort_td' => 'Xếp theo tiêu đề giảm dần',
  'download_zip' => 'Tải tập tin ZIP xuống', //cpg1.3.0
  'pic_on_page' => '%d tranh trong %d trang',
  'user_on_page' => '%d thành viên trong %d trang', //cpg1.3.0
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Quay trở lại trang danh sách',
  'pic_info_title' => 'Hiển thị/giấu các thông tin về tranh', //cpg1.3.0
  'slideshow_title' => 'Xem lần lượt',
  'ecard_title' => 'Gửi tranh này ở dạng bưu thiếp', //cpg1.3.0
  'ecard_disabled' => 'Tính năng bưu thiếp đã bị tắt',
  'ecard_disabled_msg' => 'Bạn không có quyền gửi bưu thiếp', //js-alert //cpg1.3.0
  'prev_title' => 'Xem tranh trước', //cpg1.3.0
  'next_title' => 'Xem tranh tới', //cpg1.3.0
  'pic_pos' => 'Tranh %s/%s', //cpg1.3.0
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Đánh giá tranh', //cpg1.3.0
  'no_votes' => '(Chưa được đánh giá)',
  'rating' => '(Đánh giá hiện tại : %s/5 với %s đánh giá)',
  'rubbish' => 'Không đẹp',
  'poor' => 'Hơi tệ',
  'fair' => 'Bình thường',
  'good' => 'Đẹp',
  'excellent' => 'Rất đẹp',
  'great' => 'Tuyệt vời!',
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
  CRITICAL_ERROR => 'Lỗi nghiêm trọng',
  'file' => 'Tập tin: ',
  'line' => 'Dòng thứ: ',
);

$lang_display_thumbnails = array(
  'filename' => 'Tên tập tin : ',
  'filesize' => 'Độ lớn : ',
  'dimensions' => 'Kích cỡ : ',
  'date_added' => 'Ngày tải : ', //cpg1.3.0
);

$lang_get_pic_data = array(
  'n_comments' => '%s ý kiến',
  'n_views' => '%s lượt xem',
  'n_votes' => '(%s lượt đánh giá)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Thông tin sửa-lỗi(debug)', //cpg1.3.0
  'select_all' => 'Chọn hết', //cpg1.3.0
  'copy_and_paste_instructions' => 'Nếu bạn cần sự giúp đỡ từ diễn đàn hỗ trợ của Coppermine, hãy copy và dán lại các thông tin sửa-lỗi này vào bài viết của bạn. Bạn chú ý nhớ thay password bằng dấu *** trước khi đăng bài.', //cpg1.3.0
  'phpinfo' => 'Hiển thị phpinfo()', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => 'Ngôn ngữ mặc định', //cpg1.3.0
  'choose_language' => 'Chọn ngôn ngữ', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'Giao diện mặc định', //cpg1.3.0
  'choose_theme' => 'Chọn giao diện', //cpg1.3.0
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
  'Exclamation' => 'Chấm than',
  'Question' => 'Câu hỏi',
  'Very Happy' => 'Rất vui',
  'Smile' => 'Cười',
  'Sad' => 'Buồn',
  'Surprised' => 'Ngạc nhiên',
  'Shocked' => 'Choáng!',
  'Confused' => 'Thắc mắc',
  'Cool' => 'Cool',
  'Laughing' => 'Cười to',
  'Mad' => 'Điên',
  'Razz' => '',
  'Embarassed' => 'Ôm ấp',
  'Crying or Very sad' => 'Khóc hoặc rất buồn',
  'Evil or Very Mad' => 'Ác quỉ hay rất điên',
  'Twisted Evil' => 'Twisted Evil',
  'Rolling Eyes' => 'Quay chong chóng',
  'Wink' => 'Nháy mắt',
  'Idea' => 'Ý tưởng',
  'Arrow' => 'Mũi tên',
  'Neutral' => 'Trung gian',
  'Mr. Green' => 'Xanh mặt',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  0 => 'Chuyển sang chế độ sử dụng...',
  1 => 'Chuyển sang chê độ quản lý...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Albums cần được đặt tên!', //js-alert
  'confirm_modifs' => 'Bạn có muốn lưu lại các thay đổi này không?', //js-alert
  'no_change' => 'Bạn chưa thay đổi gì cả!', //js-alert
  'new_album' => 'Album mới',
  'confirm_delete1' => 'Bạn có muốn xóa album đó không?', //js-alert
  'confirm_delete2' => '\nTất cả tranh và các ý kiến sẽ bị xóa!', //js-alert
  'select_first' => 'Bạn phải chọn album trước đã', //js-alert
  'alb_mrg' => 'Trình quản lý album',
  'my_gallery' => '* Phòng tranh cá nhân *',
  'no_category' => '* Không thư mục *',
  'delete' => 'Xóa',
  'new' => 'Tạo mới',
  'apply_modifs' => 'Thay đổi',
  'select_category' => 'Chọn thư mục',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Parameters required for \'%s\'operation not supplied !',
  'unknown_cat' => 'Thư mục được chọn không tồn tại trong cơ sở dữ liệu',
  'usergal_cat_ro' => 'Các album cá nhân của thành viên không thể bị xoá!',
  'manage_cat' => 'Quản lý thư mục',
  'confirm_delete' => 'Bạn có muốn xoá thư mục này?', //js-alert
  'category' => 'Thư mục',
  'operations' => 'Các thực thi',
  'move_into' => 'Chuyển tới',
  'update_create' => 'Sửa/tạo thư mục',
  'parent_cat' => 'Thư mục mẹ',
  'cat_title' => 'Tên thư mục',
  'cat_thumb' => 'Hình nhỏ, biểu tượng của thư mục', //cpg1.3.0
  'cat_desc' => 'Chi tiết về thư mục',
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
  'title' => 'Cấu hình',
  'restore_cfg' => 'Chuyển về mặc định đầu tiên',
  'save_cfg' => 'Lưu lại cấu hình mới',
  'notes' => 'Các ghi chú',
  'info' => 'Thông tin',
  'upd_success' => 'Các cấu hình mới của Coppermine đã được cập nhập',
  'restore_success' => 'Cấu hình mặc định của Coppermine đã được phục hồi',
  'name_a' => 'Tên tác giả tăng dần',
  'name_d' => 'Tên tác giả giảm dần',
  'title_a' => 'Tiêu đề tăng dần',
  'title_d' => 'Tiêu đề giản dần',
  'date_a' => 'Ngày tăng dần',
  'date_d' => 'Ngày giảm dần',
  'th_any' => 'Cạnh lớn nhất',
  'th_ht' => 'Chiều cao',
  'th_wd' => 'Chiều rộng',
  'label' => 'dán nhãn', //cpg1.3.0
  'item' => 'item', //cpg1.3.0
  'debug_everyone' => 'Tất cả mọi người', //cpg1.3.0
  'debug_admin' => 'Chỉ với quản lý', //cpg1.3.0
        );

if (defined('CONFIG_PHP')) $lang_config_data = array(
  'Các thiết lập cơ bản',
  array('Tên của Phòng tranh', 'gallery_name', 0),
  array('Mô tả về Phòng tranh', 'gallery_description', 0),
  array('Địa chỉ email của quản lý', 'gallery_admin_email', 0),
  array('Địa chỉ cho liên kết \'Xem thêm tranh\' trong các thiệp điện tử', 'ecards_more_pic_target', 0),
  array('Đóng của tạm thời Phòng tranh?', 'offline', 1), //cpg1.3.0
  array('Lưu lại các ecard', 'log_ecards', 1), //cpg1.3.0
  array('Cho phép tải ZIP các tranh ở mục yêu thích', 'enable_zipdownload', 1), //cpg1.3.0

  'Các thiết lập ngôn ngữ, giao diện &amp; mã hoá',
  array('Ngôn ngữ', 'lang', 5),
  array('Giao diện', 'theme', 6),
  array('Hiển thị danh sách ngôn ngữ', 'language_list', 1), //cpg1.3.0
  array('Hiển thị cờ (ngôn ngữ)', 'language_flags', 8), //cpg1.3.0
  array('Hiển thị &quot;reset&quot; trong phần chọn ngôn ngữ?', 'language_reset', 1), //cpg1.3.0
  array('Hiển thị danh sách giao diện', 'theme_list', 1), //cpg1.3.0
  array('Hiển thị &quot;reset&quot; trong danh sách giao diện', 'theme_reset', 1), //cpg1.3.0
  array('Hiển thị FAQ', 'display_faq', 1), //cpg1.3.0
  array('Hiển thị trợ giúp về BBCode', 'show_bbcode_help', 1), //cpg1.3.0
  array('Mã hoá ký tự', 'charset', 4), //cpg1.3.0

  'Thiết lập hiển thị album',
  array('Chiều rộng của bảng lớn chính (pixel hoặc %)', 'main_table_width', 0),
  array('Số lượng phân cấp thư mục hiển thị', 'subcat_level', 0),
  array('Số lượng album hiển thị', 'albums_per_page', 0),
  array('Số cột cho danh sách hình nhỏ trong album', 'album_list_cols', 0),
  array('Kích cỡ của hình nhỏ trong album', 'alb_list_thumb_size', 0),
  array('Các nội dung của trang chính', 'main_page_layout', 0),
  array('Hiển thị hình nhỏ trong album ở phân cấp đầu tiên','first_level',1),

  'Thiết lập về hình nhỏ',
  array('Số lượng cột các hình nhỏ trong trang', 'thumbcols', 0),
  array('Số lượng hàng các hình nhỏ trong trang', 'thumbrows', 0),
  array('Số lượng tabs hiển thị nhiều nhất', 'max_tabs', 10), //cpg1.3.0
  array('Hiển thị chi tiết (bên cạnh tên) dưới hình nhỏ', 'caption_in_thumbview', 1), //cpg1.3.0
  array('Hiển thị số lượng lượt xem dưới hình nhỏ', 'views_in_thumbview', 1), //cpg1.3.0
  array('Hiển thị số lượng ý kiến dưới hình nhỏ', 'display_comment_count', 1),
  array('Hiển thị tên tác giả dưới hình nhỏ', 'display_uploader', 1), //cpg1.3.0
  array('Cách sắp xếp tranh mặc định', 'default_sort_order', 3), //cpg1.3.0
  array('Số lượng lượt đánh giá ít nhất để tranh vào danh sách \'được đánh giá cao nhất\'', 'min_votes_for_rating', 0), //cpg1.3.0

  'Thiết lập về xem tranh và gửi ý kiến',
  array('Độ rộng cua bảng con ghi tên file (pixel hoặc %)', 'picture_table_width', 0), //cpg1.3.0
  array('Hiển thị thông tin thêm về tập tin là mặc định?', 'display_pic_info', 1), //cpg1.3.0
  array('Lọc các từ ngữ xấu', 'filter_bad_words', 1),
  array('Cho phép hình mặt cười trong ý kiến', 'enable_smilies', 1),
  array('Cho phép gửi nhiều ý kiến 1 lúc trong thời gian ngắn (có nghĩa là tắt kiểm soát flood)', 'disable_comment_flood_protect', 1), //cpg1.3.0
  array('Độ dài tối đa cho phần chi tiết tranh', 'max_img_desc_length', 0),
  array('Độ dài tối đa của một từ ', 'max_com_wlength', 0),
  array('Số dòng nhiều nhất của một ý kiến', 'max_com_lines', 0),
  array('Độ dài tối đa của ý kiến', 'max_com_size', 0),
  array('Hiển thị Film-strip', 'display_film_strip', 1),
  array('Số lượng vật (item) trong film strip', 'max_film_strip_items', 0),
  array('Lưu ý quản lý bằng email về ý kiến', 'email_comment_notification', 1), //cpg1.3.0
  array('Thời gian trễ khi xem ảnh liên tiếp, tính bằng mili-giây', 'slideshow_interval', 0), //cpg1.3.0

  'Thiết lập về tập tin và hình nhỏ', //cpg1.3.0
  array('Chất lượng của tập tin JPEG', 'jpeg_qual', 0),
  array('Kích cỡ lớn nhất của hình nhỏ <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0), //cpg1.3.0
  array('Sử dụng cạnh làm chuẩn để thu nhỏ hình (chiều cao, rộng hay chiều lớn nhất) <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7),
  array('Tạo hình cỡ trung gian','make_intermediate',1),
  array('Chiều cao hoặc rộng lớn nhất của hình/phim trung gian <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0), //cpg1.3.0
  array('Dung lượng tập tin tối đa cho phép (KB)', 'max_upl_size', 0), //cpg1.3.0
  array('Chiều cao hoặc rộng của tranh/phim tối đa cho phép (pixel)', 'max_upl_width_height', 0), //cpg1.3.0

  'Thiết lập thêm về tranh và hình nhỏ', //cpg1.3.0
  array('Hiển thị biểu tượng album cá nhân đối với khách','show_private',1), //cpg1.3.0
  array('Ký tự không được phép trong tên tập tin', 'forbiden_fname_char',0), //cpg1.3.0
  //array('Các đuôi tập tin cho phép', 'allowed_file_extensions',0), //cpg1.3.0
  array('Các kiểu tập tin hình ảnh cho phép', 'allowed_img_types',0), //cpg1.3.0
  array('Các kiểu tập tin phim cho phép', 'allowed_mov_types',0), //cpg1.3.0
  array('Các kiểu tập tin âm thanh cho phép', 'allowed_snd_types',0), //cpg1.3.0
  array('Các kiểu tập tin tài liệu cho phép', 'allowed_doc_types',0), //cpg1.3.0
  array('Phương pháp thu nhỏ hình','thumb_method',2), //cpg1.3.0
  array('Đường dẫn tới công cụ chuyển đổi ImageMagick (ví dụ: /usr/bin/X11/)', 'impath', 0), //cpg1.3.0
  //array('Cách kiểu hình ảnh cho phép (Chỉ hợp lệ với ImageMagick)', 'allowed_img_types',0), //cpg1.3.0
  array('Câu lệnh tuỳ chọn thêm cho ImageMagick', 'im_options', 0), //cpg1.3.0
  array('Đọc thông tin EXIF trong các tập tin JPEG', 'read_exif_data', 1), //cpg1.3.0
  array('Đọc thông tin IPTC trong các tập tin JPEG', 'read_iptc_data', 1), //cpg1.3.0
  array('Thư mục chứa các album <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0), //cpg1.3.0
  array('Thư mục chứa các tập tin của thành viên <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0), //cpg1.3.0
  array('Từ thêm ở đầu các tậmp tin hình trung gian <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0), //cpg1.3.0
  array('Từ thêm ở đầu các tập tin hình nhỏ <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0), //cpg1.3.0
  array('Chế độ mặc định cho các thư mục', 'default_dir_mode', 0), //cpg1.3.0
  array('Chế độ mặc định cho các tập tin', 'default_file_mode', 0), //cpg1.3.0

  'Thiết lập về thành viên',
  array('Cho phép đăng ký thành viên mới', 'allow_user_registration', 1),
  array('Đăng ký cần được kích hoạt qua email', 'reg_requires_valid_email', 1),
  array('Thông báo với quản lý về thành viên mới đăng ký qua email', 'reg_notify_admin_email', 1), //cpg1.3.0
  array('Cho phép 2 thành viên có cùng địa chỉ email', 'allow_duplicate_emails_addr', 1),
  array('Thành viên có thể tạo album cá nhân riêng (Lưu ý: nếu chuyển từ \'có\' sang \'không\' các album cá nhân sẽ xem được bởi mọi người)', 'allow_private_albums', 1), //cpg1.3.0
  array('Thông báo quản lý khi có tranh cần xem xét', 'upl_notify_admin_email', 1), //cpg1.3.0
  array('Cho phép các thành viên xem danh sách thành viên', 'allow_memberlist', 1), //cpg1.3.0

  'Các trường thêm cho chi tiết về tranh (để trống nếu không sử dụng)',
  array('Tên trường 1', 'user_field1_name', 0),
  array('Tên trường 2', 'user_field2_name', 0),
  array('Tên trường 3', 'user_field3_name', 0),
  array('Tên trường 4', 'user_field4_name', 0),

  'Thiết lập về Cookies',
  array('Tên của cookie đựoc sử dụng (khi dùng chung, tích hợp với 1 bbs, hãy chắc chắn nó khác với tên Cookies của bbs đó)', 'cookie_name', 0),
  array('Đường dẫn tới Cookies', 'cookie_path', 0),

  'Các thiết lập khác',
  array('Bật chế độ theo-dõi (debug)', 'debug_mode', 9), //cpg1.3.0
  array('Hiển thị các cảnh báo trong chế độ theo dõi', 'debug_notice', 1), //cpg1.3.0

  '<br /><div align="left"><a name="notice1"></a>(*) Thiết lập này không được thay đổi nếu như bạn đã có tranh trong CSDL.<br />
  <a name="notice2"></a>(**) Thiết lập này nếu thay đổi chỉ có tác dụng với các tập tin được tải lên sau đó, các tập tin trước đó vẫn giữ nguyên như trước.</div><br />', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Gửi thiệp điện tử', //cpg1.3.0
  'ecard_sender' => 'Người gửi', //cpg1.3.0
  'ecard_recipient' => 'Người nhận', //cpg1.3.0
  'ecard_date' => 'Ngày', //cpg1.3.0
  'ecard_display' => 'Xem thiệp', //cpg1.3.0
  'ecard_name' => 'Tên', //cpg1.3.0
  'ecard_email' => 'Địa chỉ email', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'tăng dần', //cpg1.3.0
  'ecard_descending' => 'giảm dần', //cpg1.3.0
  'ecard_sorted' => 'Được xếp', //cpg1.3.0
  'ecard_by_date' => 'theo ngày', //cpg1.3.0
  'ecard_by_sender_name' => 'theo tên người gửi', //cpg1.3.0
  'ecard_by_sender_email' => 'theo đại chỉ email người nhận', //cpg1.3.0
  'ecard_by_sender_ip' => 'theo địa chỉ IP người gửi', //cpg1.3.0
  'ecard_by_recipient_name' => 'theo tên người nhận', //cpg1.3.0
  'ecard_by_recipient_email' => 'theo địa chỉ email người nhận', //cpg1.3.0
  'ecard_number' => 'xem các bản ghi từ %s tới %s trong %s', //cpg1.3.0
  'ecard_goto_page' => 'nhảy tới trang', //cpg1.3.0
  'ecard_records_per_page' => 'Số bản ghi trên một trang', //cpg1.3.0
  'check_all' => 'Đánh dấu hết', //cpg1.3.0
  'uncheck_all' => 'Bỏ đánh dấu hết', //cpg1.3.0
  'ecards_delete_selected' => 'Xóa các thiệp được chọn', //cpg1.3.0
  'ecards_delete_confirm' => 'Bạn có muốn xóa các bản ghi đó? Hãy đánh dấu vào hộp!', //cpg1.3.0
  'ecards_delete_sure' => 'Tôi chắc chắn', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Bạn cần gõ tên và ý kiến của mình.',
  'com_added' => 'Ý kiến của bạn đã được gửi lên.',
  'alb_need_title' => 'Bạn phải đặt tiêu đề cho album!',
  'no_udp_needed' => 'Không có cập nhập cần thiết.',
  'alb_updated' => 'Album đã được cập nhập',
  'unknown_album' => 'Album được chọn không tồn tại, hoặc là bạn ko có quyền tải lên vào album đó.',
  'no_pic_uploaded' => 'Chưa có tập tin nào được tải lên!<br /><br />Nếu bạn đã thực sự chọn tập tin để tải lên, hãy kiểm tra xem máy chủ có cho phép tải tập tin lên?', //cpg1.3.0
  'err_mkdir' => 'Không tạo được thư mục %s !',
  'dest_dir_ro' => 'Thư mục %s không ghi được bởi đoạn mã được gọi!',
  'err_move' => 'Không thể chuyển %s tới %s !',
  'err_fsize_too_large' => 'Kích cỡ (các chiều) của tập tin bạn vừa tải lên quá lớn. (Mức cho phép tối đa là %s x %s) !', //cpg1.3.0
  'err_imgsize_too_large' => 'Dung lượng của tập tin bạn vừa tải lên quá lớn. (Mức cho phép tối đa là %s KB) !',
  'err_invalid_img' => 'Tập tin bạn vừa tải không phải là tập tin hình ảnh! Có thể bạn tải nhầm hoặc tập tin đã bị lỗi.',
  'allowed_img_types' => 'Bạn chỉ có thể tải các tranh với định dạng %s.',
  'err_insert_pic' => 'Tập tin \'%s\' không đưa được vào album ', //cpg1.3.0
  'upload_success' => 'Tác phẩm của bạn đã được tải lên thành công.<br /><br />Nó sẽ có trên phòng tranh sau khi được quản lý xem và chấp thuận.', //cpg1.3.0
  'notify_admin_email_subject' => '%s - Upload notification', //cpg1.3.0
  'notify_admin_email_body' => 'A picture has been uploaded by %s that needs your approval. Visit %s', //cpg1.3.0
  'info' => 'Thông báo',
  'com_added' => 'Ý kiến đã được thêm',
  'alb_updated' => 'Album đã được cập nhập',
  'err_comment_empty' => 'Ý kiến của bạn chưa có gì cả!',
  'err_invalid_fext' => 'Chỉ có các tập tin theo định dạng mới được chấp thuận: <br /><br />%s.',
  'no_flood' => 'Xin lỗi, bạn không thể gửi nhiều ý kiến cùng một lúc cho tác phẩm này<br /><br />Hãy sửa lại bài viết của bạn vừa rồi, thay vì viết thêm :)', //cpg1.3.0
  'redirect_msg' => 'Bạn đang được chuyển đi.<br /><br /><br />Hãy nhấn \'Tiếp tục\' nếu như trang này không tự thay đổi.',
  'upl_success' => 'Tác phẩm của bạn đã được thêm vào thành công.', //cpg1.3.0
  'email_comment_subject' => 'Y kien ve tac pham cua ban tai phong tranh', //cpg1.3.0
  'email_comment_body' => 'Ai do da ghi y kien vao tac pham cua ban tren phong tranh. Ban co the xem no tai', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Chú thích',
  'fs_pic' => 'hình đúng cỡ',
  'del_success' => 'đã xoá xong',
  'ns_pic' => 'hình cỡ bình thường',
  'err_del' => 'không thể xoá được',
  'thumb_pic' => 'hình nhỏ',
  'comment' => 'ý kiến',
  'im_in_alb' => 'tác phẩm trong album',
  'alb_del_success' => 'Album \'%s\' đã được xoá',
  'alb_mgr' => 'Quản lý album',
  'err_invalid_data' => 'Nhận được dữ liệu sai tại \'%s\'',
  'create_alb' => 'Đang tạo album \'%s\'',
  'update_alb' => 'Đang sửa album \'%s\' với tiêu đề \'%s\' và mục lục \'%s\'',
  'del_pic' => 'Xoá tác phẩm', //cpg1.3.0
  'del_alb' => 'Xoá album',
  'del_user' => 'Xoá thành viên',
  'err_unknown_user' => 'Thành viên được chọn không tồn tại!',
  'comment_deleted' => 'Các ý kiến đã được xoá xong.',
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
  'confirm_del' => 'Bạn có thực sự muốn xoá tác phẩm này không? \\nCác ý kiến của nó cũng sẽ bị xoá.', //js-alert //cpg1.3.0
  'del_pic' => 'Xoá tác phẩm này', //cpg1.3.0
  'size' => '%s x %s pixel',
  'views' => '%s lần',
  'slideshow' => 'Xem lần lượt',
  'stop_slideshow' => 'Ngừng xem',
  'view_fs' => 'Nhấn để xem hình đúng cỡ',
  'edit_pic' => 'Sửa', //cpg1.3.0
  'crop_pic' => 'Xoay & cắt', //cpg1.3.0
);

$lang_picinfo = array(
  'title' =>'Thông tin về tác phẩm', //cpg1.3.0
  'Filename' => 'Tên tập tin',
  'Album name' => 'Tên album',
  'Rating' => 'Đanh giá (%s lượt đánh giá)',
  'Keywords' => 'Từ khoá',
  'File Size' => 'Dung lượng tập tin',
  'Dimensions' => 'Kích cỡ',
  'Displayed' => 'Số lần xem',
  'Camera' => 'Camera',
  'Date taken' => 'Ngày chụp',
  'Aperture' => 'Đường kính ống',
  'Exposure time' => 'Thời gian mở sáng',
  'Focal length' => 'Focal length',
  'Comment' => 'Ý kiến',
  'addFav'=>'Thêm vào dánh sách hình tôi thích', //cpg1.3.0
  'addFavPhrase'=>'Yêu thích', //cpg1.3.0
  'remFav'=>'Bỏ khỏi danh sách hình tôi thích', //cpg1.3.0
  'iptcTitle'=>'Tiêu đề IPTC', //cpg1.3.0
  'iptcCopyright'=>'Bản quyền IPTC', //cpg1.3.0
  'iptcKeywords'=>'Từ khoá IPTC', //cpg1.3.0
  'iptcCategory'=>'Thư mục IPTC', //cpg1.3.0
  'iptcSubCategories'=>'Thư mục IPTC con', //cpg1.3.0
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Sửa ý kiến này',
  'confirm_delete' => 'Bạn có muốn xoá ý kiến này không?', //js-alert
  'add_your_comment' => 'Thêm ý kiến của bạn',
  'name'=>'Tên',
  'comment'=>'Ý kiến',
  'your_name' => 'Anon',
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Nhấn vào hình để đóng cửa sổ',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Gửi thiệp điện tử',
  'invalid_email' => '<b>Chú ý</b>: địa chỉ email bị sai!',
  'ecard_title' => 'Thiep duoc gui tu %s cho ban',
  'error_not_image' => 'Chỉ có tranh-ảnh mới có thể được dùng để gửi thiệp.', //cpg1.3.0
  'view_ecard' => 'Neu nhu thiep khong hien ro, ban nhan vao lien ket nay',
  'view_more_pics' => 'Nhan vao day de xem them cac tranh khac!',
  'send_success' => 'Thiệp của bạn đã được gửi đi',
  'send_failed' => 'Sorry but the server can\'t send your e-card...',
  'from' => 'Từ',
  'your_name' => 'Tên của bạn',
  'your_email' => 'Địa chỉ email của bạn',
  'to' => 'Tới',
  'rcpt_name' => 'Tên người nhận',
  'rcpt_email' => 'Địa chỉ email của người nhận',
  'greetings' => 'Lời chào',
  'message' => 'Nội dung',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Thông tin về tập tin', //cpg1.3.0
  'album' => 'Album',
  'title' => 'Tiêu đề',
  'desc' => 'Chi tiết',
  'keywords' => 'Từ khoá',
  'pic_info_str' => '%s &times; %s - %s KB :: có %s lần được xem :: %s lần được đánh giá',
  'approve' => 'Up!', //cpg1.3.0
  'postpone_app' => 'Cứ vứt tạm ở đây',
  'del_pic' => 'Xoá', //cpg1.3.0
  'read_exif' => 'Đọc lại thông tin EXIF', //cpg1.3.0
  'reset_view_count' => 'Sắp lại số lần xem (đưa về 0)',
  'reset_votes' => 'Xoá bỏ các đánh giá',
  'del_comm' => 'Xoá các ý kiến',
  'upl_approval' => 'Chấp thuận đăng tác phẩm',
  'edit_pics' => 'Sửa tập tin', //cpg1.3.0
  'see_next' => 'Xem tác phẩm tiếp theo', //cpg1.3.0
  'see_prev' => 'Xem tác phẩm trước', //cpg1.3.0
  'n_pic' => '%s tác phẩm', //cpg1.3.0
  'n_of_pic_to_disp' => 'Số lượng tác phẩm hiển thị', //cpg1.3.0
  'apply' => 'Áp dụng các thay đổi', //cpg1.3.0
  'crop_title' => 'Trình sửa tranh Coppermine', //cpg1.3.0
  'preview' => 'Xem trước kết quả sửa', //cpg1.3.0
  'save' => 'Cất tranh', //cpg1.3.0
  'save_thumb' =>'Cất tranh được sửa làm hình nhỏ', //cpg1.3.0
  'sel_on_img' =>'Phần được chọn phải bao toàn bộ tranh!', //js-alert //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Các câu hỏi và trả lời thường gặp', //cpg1.3.0
  'toc' => 'Mục lục', //cpg1.3.0
  'question' => 'Hỏi: ', //cpg1.3.0
  'answer' => 'Trả lời: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'FAQ - Các câu hỏi và trả lời thường gặp', //cpg1.3.0
  array('Tại sao tôi phải đăng ký thành viên?', 'Đăng ký làm thành viên của Phòng Tranh sẽ cho bạn nhiều quyền lợi hơn một khách ghé thăm thông thường, đó là: quyền tải tranh/truyện lên, ghi ý kiến nhận xét, đánh giá tranh, đưa các tranh bạn thích vào danh sách riêng,..vv Và một điều nữa là để các quản lý có thể liên lạc với bạn khi cần.', 'allow_user_registration', '0'), //cpg1.3.0
  array('Đăng ký như thế nào?', 'Bạn theo liên kêt &quot;Đăng ký&quot; và điền đầy đủ các mục cần thiết ở đó (và các mục tùy chọn nếu muốn). Lưu ý là đỉa chỉ email bạn điền phải tồn tại và nó là của bạn (xin đừng bịa!) thì bạn mới có thể đăng ý được<br />Sau đó bạn xem thư ở hòm thư mà bạn đã điền, nhấn vào liên kết tới Phòng Tranh ở trong thư để kích hoạt. Lúc này, bạn đã là thành viên chính thức và có thể đăng nhập được rôi :)', 'allow_user_registration', '1'), //cpg1.3.0
  array('Làm sao tôi có thể đăng nhập?', 'Bạn nhấn vào &quot;Đăng nhập&quot;, điền tên và mật mã mà bạn đã đăng ký, đánh dấu &quot;Tự động đăng nhập&quot; nếu bạn muốn tự động được đăng nhập vào lần sau ghé thăm - hoặc không, bạn để trống.<br /><b>Lưu ý: Cookies phải được bật trong trình duyệt của bạn, hoặc ít nhất là cho phép Phòng tranh tạo cookies trên máy của bạn.</b>', 'offline', 0), //cpg1.3.0
  array('Tại sao tôi không đăng nhập được?', 'Bạn đã đăng ký và nhấn vào liên kết trong email mà Phòng tranh đã gửi cho bạn chưa?. Liên kết đó sẽ kích hoạt tài khoản của bạn. Trong các trường hợp khác, bạn hãy liên lạc với quản lý.', 'offline', 0), //cpg1.3.0
  array('Tôi phải làm gì nếu quên mật mã?', 'Nếu như có liên kết &quot;Quên mật mã&quot; trong trang đăng nhập, bạn hãy sử dụng nó, hoặc không, bạn có thể liên lạc với quản lý để làm mật mã mới.', 'offline', 0), //cpg1.3.0
  //array('Tôi phải làm gì nếu thay địa chỉ email?', 'Chỉ cần đơn giản là bạn hãy đăng nhập và thay đỉa chỉ email của mình qua liên kết &quot;Thông tin cá nhân&quot;', 'offline', 0), //cpg1.3.0
  array('Làm sao tôi có thể cất một bức tranh vào mục &quot;Yêu thích&quot;?', 'Bạn hãy nhấn vào bức trnah bạn thích, nếu phần &quot;Thông tin về tác phẩm&quot; chưa có, bạn nhấn tiếp vào &quot;thông tin tranh&quot; (<img src="images/info.gif" width="16" height="16" border="0" alt="Picture information" />); kéo thanh trượt xuống và chọn &quot;Thêm vào danh sách hình tôi thích&quot;.<br />Lưu ý: Cookies phải được bật hoặc là cho phép Phòng tranh cất tranh của bạn.', 'offline', 0), //cpg1.3.0
  array('Làm sao tôi có thể đánh giá một tác phẩm?', 'Bạn nhấn vào hình nhỏ cần đánh giá, kéo thanh trượt xuống và chọn một đánh giá (hình sao từ 0 tới 5).', 'offline', 0), //cpg1.3.0
  array('Làm sao để tôi có thể ghi ý kiến?', 'Bạn nhấn vào hình nhỏ, kéo thanh trượt xuống, sẽ thấy phần để bạn điền ý kiến của mình vào.', 'offline', 0), //cpg1.3.0
array('Làm sao để tôi có thể gửi tác phẩm?', 'Bạn hãy nhấn vào liên kết ;Gửi tác phẩm&quot; và chọn album mà bạn muốn gửi lên, nhấn &quot;Browse&quot; và tìm tập tin bạn muốn tải lên và nhấn &quot;open&quot; (thêm tiêu đề và thông tin chi tiết nếu bạn muốn) và nhấn &quot;Tiếp tục&quot;', 'allow_private_albums', 0), //cpg1.3.0
  array('Tôi có thể gửi tác phẩm vào đâu?', 'Bạn có thể gửi tác phầm của mình vào một trong những album trong &quot;Phòng tranh riêng&quot;. Quản lý cũng có thể cho phép bạn gửi tác phẩm lên các album khác trong Phòng tranh chính.', 'allow_private_albums', 0), //cpg1.3.0
  array('Kiểu tập tin và kích cỡ tôi có thể tải lên là như thế nào?', 'Kích cỡ và kiểu (jpg, png,...vv) là phụ thuộc vào các thiết lập của quản lý.', 'offline', 0), //cpg1.3.0
  array('&quot;Phòng tranh riêng&quot; là gì?', '&quot;Phòng tranh riêng&quot; là một phòng tranh cá nhân của riêng một thành viên mà thành viên đó có thể tải tác phẩm lên và quản lý nó.', 'allow_private_albums', 0), //cpg1.3.0
  array('Làm sao tôi có thể tạo, thay tên hay xoá các album trong &quot;Phòng tranh riêng&quot;?', 'Bạn phải ở trong &quot;Chế độ quản lý&quot;<br />Bạn nhấn &quot;Tạo album riêng&quot; và nhấn &quot;Tạo mới&quot;. Thay đổi &quot;Album mới&quot; thành tên của album bạn muốn.<br />Bạn cũng có thể thay tên của bất kỳ album nào trong Phòng tranh riêng của mình.<br />Nhấn &quot;Thay đổi&quot; để kết thúc.', 'allow_private_albums', 0), //cpg1.3.0
  array('Làm sao tôi có thể chỉnh sửa và giới hạn người xem các album của tôi?', 'Bạn phải ở trong &quot;Chế độ quản lý&quot;<br />Tới &quot;Chỉnh sửa album của bạn&quot;. Trên dòng &quot;Cập nhập album&quot;, chọn album bạn muốn thay đổi.<br />Ở đây, bạn có thể thay đổi tên, chi tiết, hình nhỏ tượng trưng cho album, giới hạn các nhóm thành viên có thể xem, đánh giá hay ý kiến album của bạn.<br />Nhấn &quot;Cập nhập album&quot; để kết thúc.', 'allow_private_albums', 0), //cpg1.3.0
  array('làm sao tôi có thể xem \'Phòng tranh riêng\' của các thành viên khác?', 'Bạn tới &quot;Danh sách album&quot; và chọn &quot;Phòng tranh của thành viên&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Cookies là gì?', 'Cookies là các tập tin ký tự chứa thông tin về bạn mà một trang web bạn đã đi qua lưu lại trên máy của bạn.<br />Cookies thường được dùng để cho phép các người dùng thoát ra khỏi trang web đó mà lầm ghé thăm sau sẽ được tự động đăng nhập. Ngoài ra nó còn dùng để chứa các thông tin khác nữa.<br />Lưu ý rằng: nếu bạn dùng máy tại nhà, mới nên sử dụng tính năng \'Tự động đăng nhập\'.', 'offline', 0), //cpg1.3.0
  array('Tôi có thể lấy chương trình Phòng tranh này cho site của tôi không?', 'Coppermine là trình về miễn phí, mã nguồn mở, được đưa ra dưới dạng GNU GPL. Bạn hãy xem <a href="http://coppermine.sf.net/">Trang chủ của Coppermine</a> để biết thêm chi tiết.', 'offline', 0), //cpg1.3.0

  'Duyệt site', //cpg1.3.0
  array('&quot;Danh sách Album&quot; là gì?', 'Liên kết này sẽ đưa ra danh sách album trong toàn bộ thư mục mà  bạn đang xem. Nếu như bạn đang không ở trong một thư mục nào cả, nó sẽ đưa bạn tới trang chủ của Phòng tranh.', 'offline', 0), //cpg1.3.0
  array('&quot;Phòng tranh riêng&quot; là gì?', 'Tính năng này cho phép một thành viên có quyền tại các album riêng của họ, cũng như sửa, xoá, cập nhập và tải tác phẩm lên đó. Nó là những phòng tranh cá nhân.', 'allow_private_albums', 0), //cpg1.3.0
  array('Sự khác nhau giữa &quot;Chế độ quản lý&quot; và &quot;Chế độ sử dụng&quot; là gì?', 'Khi bạn ở chế độ quản lý, bạn có thể thay đổi các thiết lập của mình: về album và về thông tin cá nhân (có thể với cả người khác, nếu quản lý cho phép).', 'allow_private_albums', 0), //cpg1.3.0
  array('&quot;Gửi tác phẩm&quot; là như thế nào?', 'Tính năng này cho phép một người dùng gửi các tập tin lên (dung lượng và kích cỡ phụ thuộc vào thiết lập của quản lý) album được chọn bởi bạn hoặc bởi quản lý.', 'allow_private_albums', 0), //cpg1.3.0
  array('&quot;Tác phẩm mới&quot; là như thế nào?', 'Liên kết này sẽ đưa ra các tác phẩm mới được gửi lên Phòng tranh.', 'offline', 0), //cpg1.3.0
  array('&quot;Ý kiến mới&quot; là gì?', 'Liên kết này sẽ đưa bạn tới xem các ý kiến mới nhất được gửi lên trên Phòng tranh.', 'offline', 0), //cpg1.3.0
  array('&quot;Được xem nhiều nhất&quot; là gì', 'Liên kết này sẽ đưa ra các tác phẩm được xem nhiều nhất tại Phòng tranh (cho dù là thành viên hay khách).', 'offline', 0), //cpg1.3.0
  array('&quot;Được đánh giá cao nhất&quot; là gì?', 'Liên kết này sẽ đưa ra các tác phẩm được người đánh giá cao nhất, là giá trị trung bình của các đánh giá (VD: năm thành viên đánh giá <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: tác phẩm sẽ có giá trị đánh giá trung bình là <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;Năm thành viên đánh giá tác phẩm từ 1 tới 5 (1,2,3,4,5) sẽ cho kết quả đánh giá trung bình là <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />Giá trị của các đánh giá sẽ đi từ <img src="images/rating5.gif" width="65" height="14" border="0" alt="Tuyệt vời" /> (Tuyệt vời) tới <img src="images/rating0.gif" width="65" height="14" border="0" alt="Xấu" /> (Xấu).', 'offline', 0), //cpg1.3.0
  array('&quot;Hình yêu thích&quot; là gì?', 'Tính năng này sẽ cho phép thành viên xem mục lục của các hình mà họ đã đánh dấu là \'Hình yêu thích\' của mình. Cookies cần được bật để tính năng này hoạt động.', 'offline', 0), //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Lấy lại mật mã', //cpg1.3.0
  'err_already_logged_in' => 'Bạn đã đăng nhập sẵn rồi!', //cpg1.3.0
  'enter_username_email' => 'Điền địa chỉ email hoặc tên đăng nhập của bạn', //cpg1.3.0
  'submit' => 'Lấy lại', //cpg1.3.0
  'failed_sending_email' => 'Thư để lấy lại password của bạn không thể gửi được!', //cpg1.3.0
  'email_sent' => 'An email with your username and password was sent to %s', //cpg1.3.0
  'err_unk_user' => 'Selected user does not exist!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - Mat ma cua ban tai phong tranh', //cpg1.3.0
  'passwd_reminder_body' => 'Ban da yeu-cau tim lai mat ma cua minh tai phong tranh:
Ten: %s
Mat ma: %s
Nhan vao %s de dang-nhap.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Group name',
  'disk_quota' => 'Giới hạn dung lượng',
  'can_rate' => 'Có thể đánh giá tác phẩm', //cpg1.3.0
  'can_send_ecards' => 'Có thể gửi thiệp',
  'can_post_com' => 'Có thể ghi ý kiến',
  'can_upload' => 'Có thể tải tác phẩm lên', //cpg1.3.0
  'can_have_gallery' => 'Có thể tạo album riêng',
  'apply' => 'Áp dụng các thay đổi',
  'create_new_group' => 'Tạo nhóm mới',
  'del_groups' => 'Xoá nhóm được chọn',
  'confirm_del' => 'Chú ý, khi bạn xoá một nhóm, các thành viên nhóm đó sẽ được tới nhóm \'Thành viên thông thường\'!\n\nBạn có muốn làm thế không?', //js-alert //cpg1.3.0
  'title' => 'Quản lý các nhóm thành viên',
  'approval_1' => 'Cần chấp thuận ở album chung',
  'approval_2' => 'Cần chấp thuận ở album riêng',
  'upload_form_config' => 'Thiết lập các ô tải lên', //cpg1.3.0
  'upload_form_config_values' => array( 'Chỉ một tập tin tải lên', 'Chỉ nhiều tập tin tải lên', 'Chỉ sử dụng URI tải lên', 'Chỉ nhận tải ZIP', 'Tập tin-URI', 'Tập tin-ZIP', 'URI-ZIP', 'Tập tin-URI-ZIP'), //cpg1.3.0
  'custom_user_upload'=>'Thành viên có thể chọn số ô tải lên?', //cpg1.3.0
  'num_file_upload'=>'Tối đa/chính xác số lượng ô tải lên', //cpg1.3.0
  'num_URI_upload'=>'Tối đa/chính xác số lượng ô tải URI', //cpg1.3.0
  'note1' => '<b>(1)</b> Các tải lên ở các album công cộng cần sự chấp thuận của quản lý',
  'note2' => '<b>(2)</b> Các tải lên ở các album cá nhân cần sự chấp thuận của quản lý',
  'notes' => 'Notes',
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Xin chào!',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Bạn có chắc bạn đinh XOÁ album này không? \\nTất cả các tập tin và ý kiến cũng sẽ bị xoá theo.', //js-alert //cpg1.3.0
  'delete' => 'Xoá',
  'modify' => 'Sửa',
  'edit_pics' => 'Sửa tác phẩm', //cpg1.3.0
);

$lang_list_categories = array(
  'home' => 'Trang chủ',
  'stat1' => '<b>[pictures]</b> tác phẩm trong <b>[albums]</b> album và <b>[cat]</b> thư mục với <b>[comments]</b> ý kiến, đã được xem <b>[views]</b> lần', //cpg1.3.0
  'stat2' => '<b>[pictures]</b> tác phẩm trong <b>[albums]</b> album được xem <b>[views]</b> lần', //cpg1.3.0
  'xx_s_gallery' => 'Phòng tranh của %s ',
  'stat3' => '<b>[pictures]</b> tác phẩm trong <b>[albums]</b> album với <b>[comments]</b> ý kiến, được xem <b>[views]</b> lần', //cpg1.3.0
);

$lang_list_users = array(
  'user_list' => 'Danh sách thành viên',
  'no_user_gal' => 'Không có phong tranh nào của thành viên!',
  'n_albums' => '%s album',
  'n_pics' => '%s file(s)', //cpg1.3.0
);

$lang_list_albums = array(
  'n_pictures' => '%s tác phẩm', //cpg1.3.0
  'last_added' => ', tác phẩm mới nhất được gửi vào %s',
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Đăng nhập',
  'enter_login_pswd' => 'Nhập tên và mật mã của bạn để đăng nhập',
  'username' => 'Tên',
  'password' => 'Mật mã',
  'remember_me' => 'Tự động đăng nhập lần sau',
  'welcome' => 'Xin chào %s ...',
  'err_login' => '*** Không đăng nhập được. Bạn hãy thử lại ***',
  'err_already_logged_in' => 'Bạn đã đăng nhập sẵn rồi!',
  'forgot_password_link' => 'Quên mật mã', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Thoát ra',
  'bye' => 'Tạm biệt %s ...',
  'err_not_loged_in' => 'Bạn hiện chưa đăng nhập!',
);

// ------------------------------------------------------------------------- //
// File phpinfo.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'Thông tin thiết lập từ PHP', //cpg1.3.0
  'explanation' => 'Đây là thông tin được in ra từ hàm của PHP<a href="http://www.php.net/phpinfo">phpinfo()</a>, hiển thị trong Copermine (cắt bỏ bớt phẩn bên phải).', //cpg1.3.0
  'no_link' => 'Để người khác xem thấy phpinfo có thể là một sự nguy hiểm, đó là lý do tại sao bạn chỉ có thể nhìn thấy khi bạn đăng nhập dưới quyền quản lý. Bạn không thể đưa liên kết này cho người khác, họ sẽ bị từ chối truy cập.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Sửa album: %s',
  'general_settings' => 'Các thiết lập cơ bản',
  'alb_title' => 'Tiêu đề album',
  'alb_cat' => 'Thư mục của album',
  'alb_desc' => 'Chi tiết về album',
  'alb_thumb' => 'Hình nhỏ của album',
  'alb_perm' => 'Các quyền cho phép về album',
  'can_view' => 'Album có thể được xem bởi',
  'can_upload' => 'Cho phép thành viên gửi hình lên',
  'can_post_comments' => 'Cho phép thành viên gửi ý kiến lên',
  'can_rate' => 'Cho phép thành viên đánh giá',
  'user_gal' => 'Phòng tranh của thành viên', //KyoS
  'no_cat' => '* Không thư mục *',
  'alb_empty' => 'Album này rỗng',
  'last_uploaded' => 'Tải lên mới nhất',
  'public_alb' => 'Tất cả mọi người (album chung)',
  'me_only' => 'Chỉ riêng mình tôi',
  'owner_only' => 'Chỉ có chủ sở hữu của album (%s)',
  'groupp_only' => 'Chỉ thành viên của nhóm \'%s\' ',
  'err_no_alb_to_modify' => 'Không có album này trong CSDL để sửa.',
  'update' => 'Cập nhập album', //cpg1.3.0
  'notice1' => '(*) phụ thuộc và các thiết lập về %snhóm%s ', //cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Xin lỗi, bạn đã đánh giá hình này rồi', //cpg1.3.0
  'rate_ok' => 'Đánh giá của bạn đã được gửi',
  'forbidden' => 'Bạn không thể tự đánh giá chính tác phẩm của mình.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Tham gia vào {SITE_NAME}, bạn cần phải đồng ý rằng:<br />
* Bạn không gửi các hình hay ý kiến vi phạm nội qui của {SITE_NAME} (xem trong FAQ).<br />
* Bạn phải tự chịu trách nhiệm những gì bạn gửi lên (tác phẩm và ý kiến).<br />
* Quyết định của quản lý là quyết định cuối cùng trong mọi trường hợp xảy ra.<br /><br />
Bạn nhấn "Tôi đồng ý" tức là bạn đống ý các điều khỏan trên để đăng ký thành viên với {SITE_NAME}.
EOT;

$lang_register_php = array(
  'page_title' => 'Đăng ký thành viên',
  'term_cond' => 'Điều kiện thỏa thuận',
  'i_agree' => 'Tôi đồng ý',
  'submit' => 'Gửi bản đăng ký',
  'err_user_exists' => 'Tên thành viên mà bạn chọn đã được đăng ký rồi, bạn hãy chọn tên khác.',
  'err_password_mismatch' => 'Hai mật mã không khớp với nhau, bạn hãy đánh lại chúng.',
  'err_uname_short' => 'Tên thành viên cần dài ít nhất 2 ký tự',
  'err_password_short' => 'Mật mã cần dài ít nhất 2 kí tự',
  'err_uname_pass_diff' => 'Tên thành viên và mật mã phải khác nhau.',
  'err_invalid_email' => 'Địa chỉ email bạn điền không hợp lệ, xin bạn hãy điền địa chỉ email của mình',
  'err_duplicate_email' => 'Đã có thành viên đăng ký sử dụng địa chỉ email bạn vừa điền',
  'enter_info' => 'Bản đăng ký thành viên',
  'required_info' => 'Các thông tin bắt buộc',
  'optional_info' => 'Các thông tin thêm',
  'username' => 'Tên thành viên',
  'password' => 'Mật mã',
  'password_again' => 'Đánh lại mật mã',
  'email' => 'Email',
  'location' => 'Nơi ở',
  'interests' => 'Các sở thích',
  'website' => 'Trang chủ',
  'occupation' => 'Chuyên môn',
  'error' => 'LỖI',
  'confirm_email_subject' => '%s - Thong tin dang ky',
  'information' => 'Thông tin',
  'failed_sending_email' => 'Email chứa thông tin kích hoạt không thể gửi được!',
  'thank_you' => 'Cảm ơn bạn đã đăng ký.<br /><br />Một email chứa các thông tin để kích hoạt tài khỏan đã được gửi tới địa chỉ mà email bạn vừa đưa. Bạn hãy kiểm tra thư đó để kích hoạt tài khỏan trước khi có thể đăng nhập :)',
  'acct_created' => 'Tài khoản của bạn đã được tạo, bây giờ bạn có thể đăng nhập với tên và mật mã của mình.',
  'acct_active' => 'Tài khoản của bạn đã được kích hoạt, và bây giờ bạn có thể đăng nhập với tên và mật mã của mình.',
  'acct_already_act' => 'Tài khoản của bạn đã được kích hoạt trước đó rồi!',
  'acct_act_failed' => 'Tài khoản này không thể kích hoạt được!',
  'err_unk_user' => 'Thành viên được chọn không tồn tại!',
  'x_s_profile' => 'Thông tin cá nhân của %s ',
  'group' => 'Nhóm',
  'reg_date' => 'Tham gia vào',
  'disk_usage' => 'Dung lượng sử dụng',
  'change_pass' => 'Thay mật mã',
  'current_pass' => 'Mật mã hiện tại',
  'new_pass' => 'Mật mã mới',
  'new_pass_again' => 'Mật mã mới lần nữa',
  'err_curr_pass' => 'Mật mã hiện tại bị sai',
  'apply_modif' => 'Áp dụng các thay đổi',
  'change_pass' => 'Thay mật mã của bạn',
  'update_success' => 'Các thông tin về bạn đã được cập nhập',
  'pass_chg_success' => 'Mật mã của bạn đã được sửa',
  'pass_chg_error' => 'Mật mã của bạn CHƯA được sửa',
  'notify_admin_email_subject' => '%s - Registration notification', //cpg1.3.0
  'notify_admin_email_body' => 'A new user with the username "%s" has registered in your gallery', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
Cam-on ban da dang ky tai {SITE_NAME}

Ten thanh vien cua ban: "{USER_NAME}"
Mat ma cua ban: "{PASSWORD}"

De la` tha`nh vien chi'nh thuc, ban can nhan vao lien-ket sau,
hoac copy va da'n vao tri`nh duyet cua ban.

{ACT_LINK}

Than ai,

Quan ly cua {SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'Xem xét các ý kiến',
  'no_comment' => 'Không có ý kiến nào để xem',
  'n_comm_del' => '%s ý kiến đã được xoá',
  'n_comm_disp' => 'Số lượng ý kiến được hiển thị',
  'see_prev' => 'Xem trước đó',
  'see_next' => 'Xem tiếp theo',
  'del_comm' => 'Đã xoá các ý kiến được đánh dấu',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
  0 => 'Tìm tác phẩm (theo tên)',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Tìm tập tin mới', //cpg1.3.0
  'select_dir' => 'Chọn thư mục',
  'select_dir_msg' => 'Tác vụ này giúp bạn thêm các tác phẩm mới bằng cách tải trực tiếp từ FTP.<br /><br />Hãy chọn thư mục nơi bạn đã tải các tác phẩm lên.', //cpg1.3.0
  'no_pic_to_add' => 'Không có tập tin mới nào để thêm', //cpg1.3.0
  'need_one_album' => 'Bạn cần ít nhất một album để sử dụng tác vụ này',
  'warning' => 'Cảnh báo',
  'change_perm' => 'mã thực thi không thể ghi vào được thư mục này, bạn cần chuyển chế độ của nó thành 755 hoặc 777 trước khi có thể thêm các tác phẩm!', //cpg1.3.0
  'target_album' => '<b>Cho các tác phẩm của &quot;</b>%s<b>&quot; vào </b>%s', //cpg1.3.0
  'folder' => 'Thư mục',
  'image' => 'tranh',
  'album' => 'Album',
  'result' => 'Kết quả',
  'dir_ro' => 'Không thể ghi được. ',
  'dir_cant_read' => 'Không thể đọc được. ',
  'insert' => 'Thêm tác phẩm vào phòng tranh', //cpg1.3.0
  'list_new_pic' => 'Danh sách các tập tin mới', //cpg1.3.0
  'insert_selected' => 'Thêm các tập tin được chọn', //cpg1.3.0
  'no_pic_found' => 'Không tìm thấy tập tin nào mới', //cpg1.3.0
  'be_patient' => 'Xin chờ đợi, quá trình này cần thời gian.', //cpg1.3.0
  'no_album' => 'không có album được chọn',  //cpg1.3.0
  'notes' =>  '<ul>'.
                          '<li><b>OK</b>: nghĩa là tập tin đã được thêm vào thành công'.
                          '<li><b>DP</b>: nghĩa là tập tin bị trùng lặp, đã có trong CSDL'.
                          '<li><b>PB</b>: nghĩa là tập tin không thể thêm vào được, hãy xem xét các thiết lập cấu hình và quyền của các thư mục bạn định thêm tác phẩm vào'.
                          '<li><b>NA</b>: nghĩa là bạn chưa chọn album mà tác phẩm sẽ tới, nhấn \'<a href="javascript:history.back(1)">trở lại (Back)</a>\' và chọn 1 album. Nếu bạn chưa có album nào, hãy <a href="albmgr.php">tạo nó</a> trước</li>'.
                          '<li>Nếu các dấu \'OK, DP, PB\' không xuất hiện, nhấn vào tập tin bị hỏng để xem thông báo lỗi của PHP'.
                          '<li>Nếu bị \'timeouts\', nhấn \'refresh\''.
                          '</ul>', //cpg1.3.0
  'select_album' => 'chọn album', //cpg1.3.0
  'check_all' => 'Chọn tất cả', //cpg1.3.0
  'uncheck_all' => 'Bỏ chọn tất cả', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Phạt thành viên',
  'user_name' => 'Tên thành viên',
  'ip_address' => 'Địa chỉ IP',
  'expiry' => 'Thời gian hết hiệu lực phạt (bỏ trống là mãi mãi)',
  'edit_ban' => 'Lưư các thay đổi',
  'delete_ban' => 'Xoá',
  'add_new' => 'Thêm người bị phạt',
  'add_ban' => 'Thêm',
  'error_user' => 'Không tìm thấy thành viên', //cpg1.3.0
  'error_specify' => 'Bạn cần xác định tên thành viên hoặc địa chỉ IP', //cpg1.3.0
  'error_ban_id' => 'Địa chỉ ID bị sai!', //cpg1.3.0
  'error_admin_ban' => 'Bạn không thể tự phạt chính mình!', //cpg1.3.0
  'error_server_ban' => 'Bạn không thể tự phạt chính máy chủ của mình... hihi. Vì không thể làm thế được :D', //cpg1.3.0
  'error_ip_forbidden' => 'Bạn không thể phạt địa chỉ IP này - it is non-routable! (??)', //cpg1.3.0
  'lookup_ip' => 'Xem xét một địa chỉ IP', //cpg1.3.0
  'submit' => 'Xem nào!', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Tải tác phẩm lên Phòng tranh', //cpg1.3.0
  'custom_title' => 'Ô tải được chọn theo yêu cầu', //cpg1.3.0
  'cust_instr_1' => 'Bạn có thể chọn tuỳ ý số lượng ô tải. Tuy nhiên, bạn không thể chọn nhiều hơn lượng tối đa được liệt kê ở dưới.', //cpg1.3.0
  'cust_instr_2' => 'Số ô yêu cầu:', //cpg1.3.0
  'cust_instr_3' => 'Số ô tải tập tin: %s', //cpg1.3.0
  'cust_instr_4' => 'Số ô tải URI/URL: %s', //cpg1.3.0
  'cust_instr_5' => 'Số ô tải URI/URL:', //cpg1.3.0
  'cust_instr_6' => 'Số ô tải tập tin:', //cpg1.3.0
  'cust_instr_7' => 'Bạn hãy điền số lượng mỗi loại ô, sau đó nhấn \'Tiếp tục\'. ', //cpg1.3.0
  'reg_instr_1' => 'Việc tạo ô bị lỗi.', //cpg1.3.0
  'reg_instr_2' => 'Bạn có thể tải các tác phẩm của mình sử dụng các ô tải ở dưới. Dung lượng của các tác phẩm được tải lên từ máy của bạn không được vượt quá %s KB mỗi tác phẩm. Tập tin ZIP được tải lên từ \'Tải tập tin\' và \'Tải từ URI/URL\' sẽ vẫn được nén như ban đầu.', //cpg1.3.0
  'reg_instr_3' => 'Nếu bạn muốn các tập tin nén được giải nén sau đó, bạn cần sử dụng ô tải tập tin nén ở phần \'Tải lên và giải nén ZIP\'.', //cpg1.3.0
  'reg_instr_4' => 'Khi sử dụng phần URI/URL, xin hãy điền địa chỉ tới tập tin ở dạng: http://www.webcuaban.com/tranh/vidu.jpg', //cpg1.3.0
  'reg_instr_5' => 'Sai khi bạn đã điền xong, hãy nhấn vào \'Tiếp tục\'.', //cpg1.3.0
  'reg_instr_6' => 'Tải lên và giải nén ZIP:', //cpg1.3.0
  'reg_instr_7' => 'Tập tin để tải lên:', //cpg1.3.0
  'reg_instr_8' => 'Tải lên từ URI/URL:', //cpg1.3.0
  'error_report' => 'Thông báo có lỗi', //cpg1.3.0
  'error_instr' => 'Các tải lên sau đây đã gặp lỗi:', //cpg1.3.0
  'file_name_url' => 'Tên tập tin/URL', //cpg1.3.0
  'error_message' => 'Thông báo lỗi', //cpg1.3.0
  'no_post' => 'Tập tin không được tải lên bởi POST.', //cpg1.3.0
  'forb_ext' => 'Kiểu tập tin bị cấm.', //cpg1.3.0
  'exc_php_ini' => 'Dung lương tập tin vượt quá giới hạn cho phép của php.ini', //cpg1.3.0
  'exc_file_size' => 'Dung lượng tập tin vượt quá giới hạn của Phòng tranh.', //cpg1.3.0
  'partial_upload' => 'Chỉ tải lên một phần (partial).', //cpg1.3.0
  'no_upload' => 'Không có tải lên nào vừa được thực hiện.', //cpg1.3.0
  'unknown_code' => 'Lỗi tải lên không xác định được của PHP.', //cpg1.3.0
  'no_temp_name' => 'Không có tải lên - Không có tên tạm thời.', //cpg1.3.0
  'no_file_size' => 'Không chứa dữ liệu/Dữ liệu bị hỏng', //cpg1.3.0
  'impossible' => 'Không thể di chuyển được.', //cpg1.3.0
  'not_image' => 'Không phải tập tin hình ảnh hoặc tập tin bị hỏng', //cpg1.3.0
  'not_GD' => 'Không phải phần mở rộng của GD.', //cpg1.3.0
  'pixel_allowance' => 'Số điểm ảnh cho phép đã đạt tới giới hạn.', //cpg1.3.0
  'incorrect_prefix' => 'Phần giao thức của URI/URL bị sai (kiểu giống http://)', //cpg1.3.0
  'could_not_open_URI' => 'Không mở được URI.', //cpg1.3.0
  'unsafe_URI' => 'Độ an toàn không được kiểm định.', //cpg1.3.0
  'meta_data_failure' => 'Siêu dữ liệu (Meta data) gặp sự cố', //cpg1.3.0
  'http_401' => '401 Không có quyền sở hữu', //cpg1.3.0
  'http_402' => '402 Cần trả cước phí', //cpg1.3.0
  'http_403' => '403 Không được phép', //cpg1.3.0
  'http_404' => '404 Không tìm thấy', //cpg1.3.0
  'http_500' => '500 Lỗi bên trong máy chủ', //cpg1.3.0
  'http_503' => '503 Dịch vụ không tồn tại', //cpg1.3.0
  'MIME_extraction_failure' => 'MIME không xác định được.', //cpg1.3.0
  'MIME_type_unknown' => 'Không hiểu kiểu MIME', //cpg1.3.0
  'cant_create_write' => 'Không tạo được tập tin để ghi.', //cpg1.3.0
  'not_writable' => 'Không ghi được vào tập tin ghi.', //cpg1.3.0
  'cant_read_URI' => 'Không đọc được URI/URL', //cpg1.3.0
  'cant_open_write_file' => 'Không thể mở được tập tin ghi URI.', //cpg1.3.0
  'cant_write_write_file' => 'Không thể ghi được vào tập tin ghi URI.', //cpg1.3.0
  'cant_unzip' => 'Không giải nén được.', //cpg1.3.0
  'unknown' => 'Lỗi... không biết là lỗi gì :(', //cpg1.3.0
  'succ' => 'Các tập tin đã tải lên thành công', //cpg1.3.0
  'success' => '%s tập tin đã tải lên thành công.', //cpg1.3.0
  'add' => 'Hãy nhấn \'Tiếp tục\' để thêm các tác phẩm của bạn vào các album.', //cpg1.3.0
  'failure' => 'Quá trình tải lên bị lỗi', //cpg1.3.0
  'f_info' => 'Thông tin về tập tin', //cpg1.3.0
  'no_place' => 'Tác phẩm vừa xong không thể đặt được.', //cpg1.3.0
  'yes_place' => 'Tác phẩm vừa xong đã được đặt vào thành công.', //cpg1.3.0
  'max_fsize' => 'Dương lượng tập tin lớn nhất chp phép là %s KB',
  'album' => 'Album',
  'picture' => 'Tác phẩm', //cpg1.3.0
  'pic_title' => 'Tên tác phẩm', //cpg1.3.0
  'description' => 'Chi tiết về tác phẩm', //cpg1.3.0
  'keywords' => 'Từ khoá (phải được viết cách nhau ra)',
  'err_no_alb_uploadables' => 'Xin lỗi, không có album nào bạn có thể được phép để tải lên', //cpg1.3.0
  'place_instr_1' => 'Bạn hãy đặt các tác phẩm vào lúc này, bạn cũng có thể điền các thông tin thích ứng về mỗi tác phẩm.', //cpg1.3.0
  'place_instr_2' => 'Vẫn còn tác phẩm cần đặt, bạn hãy nhấn \'Tiếp tục\'.', //cpg1.3.0
  'process_complete' => 'Bạn đã đặt xong tất cả các tác phẩm.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'title' => 'Quản lý thành viên',
  'name_a' => 'Xếp tên tăng dần',
  'name_d' => 'Xếp tên giảm dần',
  'group_a' => 'Xếp tên nhóm tăng dần',
  'group_d' => 'Xếp tên nhóm giảm dần',
  'reg_a' => 'Xếp theo ngày đăng ký tăng dần',
  'reg_d' => 'Xếp theo ngày đăng ký giảm dần',
  'pic_a' => 'Xếp theo số lượng tác phẩm tăng dần',
  'pic_d' => 'Xếp theo số lượng tác phẩm giảm dần',
  'disku_a' => 'Xếp theo dung lượng sử dụng tăng dần',
  'disku_d' => 'Xếp theo dung lượng sử dụng giảm dần',
  'lv_a' => 'Xếp theo lần vào cuối tăng dần', //cpg1.3.0
  'lv_d' => 'Xếp theo lần vào cuối giảm dần', //cpg1.3.0
  'sort_by' => 'Xếp các thành viên theo',
  'err_no_users' => 'Bảng thành viên rỗng!',
  'err_edit_self' => 'Bạn không thể sửa chính mình, hãy sử dụng \'Thông tin cá nhân\' để sửa thông tin về mình.',
  'edit' => 'Sửa',
  'delete' => 'Xoá',
  'name' => 'Tên thành viên',
  'group' => 'Nhóm',
  'inactive' => 'Không hoạt động',
  'operations' => 'Chỉnh sửa',
  'pictures' => 'Số lượng tác phẩm', //cpg1.3.0
  'disk_space' => 'Dung lượng sử dụng/Giói hạn',
  'registered_on' => 'Đăng ký',
  'last_visit' => 'Hoạt động lần cuối', //cpg1.3.0
  'u_user_on_p_pages' => '%d thành viên trong %d trang',
  'confirm_del' => 'Bạn có muốn xoá thành viên này không? \\nTất cả các tác phẩm và album của người này cũng sẽ bị xoá.', //js-alert //cpg1.3.0
  'mail' => 'MAIL',
  'err_unknown_user' => 'Thành viên được chọn không tồn tại!',
  'modify_user' => 'Sửa thành viên',
  'notes' => 'Ghi chú',
  'note_list' => '<li>Nếu bạn không muốn thay đổi mật mã hiện tại, hãy để mục password là rỗng',
  'password' => 'Mật mã',
  'user_active' => 'Thành viên đang hoạt động',
  'user_group' => 'Nhóm thành viên',
  'user_email' => 'Email của thành viên',
  'user_web_site' => 'Tranh web của thành viên',
  'create_new_user' => 'Tạo thành viên mới',
  'user_location' => 'Nơi ở của thành viên',
  'user_interests' => 'Sở thích của thành viên',
  'user_occupation' => 'Chuyên môn của thành viên',
  'latest_upload' => 'Các tác phẩm gần đây', //cpg1.3.0
  'never' => 'không bao giờ', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
  'title' => 'Các công cụ quản lý (Thu nhỏ tranh)', //cpg1.3.0
  'what_it_does' => 'Công cụ này làm gì',
  'what_update_titles' => 'Đặt tên tác phẩm từ tên của tập tin',
  'what_delete_title' => 'Xoá các tiêu đề tác phẩm',
  'what_rebuild' => 'Làm lại các hình nhỏ và thu nhỏ tranh/ảnh',
  'what_delete_originals' => 'Xoá hình đúng cỡ ban đầu và thay thế bằng hình đã được thu nhỏ bớt.',
  'file' => 'Tập tin',
  'title_set_to' => 'Chuyển tiêu đề thành',
  'submit_form' => 'Thực hiện',
  'updated_succesfully' => 'Cập nhập thành công',
  'error_create' => 'Lỗi khi đang tạo',
  'continue' => 'Tiếp tục với các bức hình khác',
  'main_success' => 'Tập tin %s đã được sử dụng như là tập tin chính thành công', //cpg1.3.0
  'error_rename' => 'Lỗi khi sửa tên %s thành %s',
  'error_not_found' => 'Tập tin %s không tìm thấy',
  'back' => 'trở lại trang chính',
  'thumbs_wait' => 'Đang cập nhập các hình nhỏ/thu nhỏ hình, xin vui lòng chờ...',
  'thumbs_continue_wait' => 'Tiếp tục cập nhập hình nhở và/hoặc thu nhỏ hình...',
  'titles_wait' => 'Đang cập nhập các tiêu đề tác phẩm, xin hãy chờ...',
  'delete_wait' => 'Đang xoá các tiêu đề, xin hãy chờ...',
  'replace_wait' => 'Đang xoá các tập tin hình gốc và thay thế bằng tập tin hình đã được thu nhỏ, xin hãy chờ...',
  'instruction' => 'Hướng dẫn nhanh',
  'instruction_action' => 'Chọn hành động (nhìn số)',
  'instruction_parameter' => 'Chỉnh các thông số',
  'instruction_album' => 'Chọn album',
  'instruction_press' => 'Nhấn %s',
  'update' => 'Cập nhập hình nhỏ/hình đã được chỉnh cỡ',
  'update_what' => 'Cái gì sẽ được cập nhập',
  'update_thumb' => 'Chỉ có hình nhỏ',
  'update_pic' => 'Chỉ có các hình cần chỉnh cỡ',
  'update_both' => 'Cả hình nhỏ và hình chỉnh cỡ',
  'update_number' => 'Số lượng hình được thực thi mỗi lần thực hiện',
  'update_option' => '(Thử thiết lập này nếu như bạn gẵp lỗi quá hạn thời gian (timeout)',
  'filename_title' => 'Tên tập tin &rArr; Tiêu đề tác phẩm', //cpg1.3.0
  'filename_how' => 'Tên tập tin sẽ được sửa như thế nào',
  'filename_remove' => 'Bỏ đuôi .jpg và thay thế các dấu _ (gạch dưới) bằng khoảng trắng',
  'filename_euro' => 'Chuyển 2003_11_23_13_20_20.jpg thành 23/11/2003 13:20',
  'filename_us' => 'Chuyển 2003_11_23_13_20_20.jpg thành 11/23/2003 13:20',
  'filename_time' => 'Chuyển 2003_11_23_13_20_20.jpg thành 13:20',
  'delete' => 'Xoá các tiêu đề và hình gốc', //cpg1.3.0
  'delete_title' => 'Xoá tên tiêu đề', //cpg1.3.0
  'delete_original' => 'Xoá tập tin hình gốc',
  'delete_replace' => 'Xoá các hình gốc và thay thế bằng hình đã được thu nhỏ',
  'select_album' => 'Chọn album',
  'delete_orphans' => 'Xoá các ý kiến vô chủ (thực hiện với tất cả các album)', //cpg1.3.0
  'orphan_comment' => 'Tìm thấy ý kiến vô chủ', //cpg1.3.0
  'delete' => 'Xoá', //cpg1.3.0
  'delete_all' => 'Xoá hết', //cpg1.3.0
  'comment' => 'Ý kiến: ', //cpg1.3.0
  'nonexist' => 'gắn với tập tin không tồn tại # ', //cpg1.3.0
  'phpinfo' => 'Hiển thị phpinfo', //cpg1.3.0
  'update_db' => 'Cập nhập CSDL', //cpg1.3.0
  'update_db_explanation' => 'Nếu bạn đã thay thế các tập tin của coppermine, thêm các sửa đổi hoặc nâng cấp, hãy chắc chắn rằng bạn thực hiện cập nhập CSDL này một lần. Nó sẽ tạo các thay đổi trong CSDL và các thiết lập cần thiết.', //cpg1.3.0
);

?>