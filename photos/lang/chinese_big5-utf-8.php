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
// ENCODING CHECK; SHOULD BE YEN BETA MU: ¥ ß µ
// ------------------------------------------------------------------------- //
// $Id: chinese_big5-utf-8.php,v 1.12 2005/01/01 11:55:34 chtito Exp $
// ------------------------------------------------------------------------- //

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Chinese Tranditional BIG5',
  'lang_name_native' => '中文繁體BIG5',
  'lang_country_code' => 'tw',
  'trans_name'=> 'CapriSkye and monkey',
  'trans_email' => 'admin@capriskye.com',
  'trans_website' => 'http://open.38.com/',
  'trans_date' => '2004-09-28',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('星期日', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六');
$lang_month = array('一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月');

// Some common strings
$lang_yes = '是';
$lang_no  = '否';
$lang_back = '返回';
$lang_continue = '繼續';
$lang_info = '訊息';
$lang_error = '錯誤';

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
  'random' => '隨機圖片', //cpg1.3.0
  'lastup' => '最新上傳',
  'lastalb'=> '最近更新',
  'lastcom' => '最新留言',
  'topn' => '熱門圖片',
  'toprated' => '最高評分',
  'lasthits' => '最近顯示',
  'search' => '搜尋結果',
  'favpics'=> '最愛圖片', //cpg1.3.0
);

$lang_errors = array(
  'access_denied' => '你沒有使用本頁的權限.',
  'perm_denied' => '你沒有權限執行此動作.',
  'param_missing' => '程式被呼叫而沒有需要的參數.',
  'non_exist_ap' => '所選擇的 相簿/圖片 不存在 !', //cpg1.3.0
  'quota_exceeded' => '超過磁碟配額<br /><br />你的配額有 [quota]K, 已使用的有 [space]K, 加入此圖片會超過擁有的配額.', //cpg1.3.0
  'gd_file_type_err' => '當使用 GD 圖像程式庫只容許 JPEG / PNG 圖檔.',
  'invalid_image' => '你上傳的檔案己經損壞, 或是 GD 圖像程式庫不能處理',
  'resize_failed' => '無法建立縮圖或變更圖檔尺寸.',
  'no_img_to_display' => '沒有圖片可以顯示.',
  'non_exist_cat' => '所選擇的類別並不存在.',
  'orphan_cat' => '這個子類別存於一個不存在的母類別, 請先至類別管理修正這個問題.', //cpg1.3.0
  'directory_ro' => '目錄 \'%s\' 無法寫入, 導致無法刪除圖片', //cpg1.3.0
  'non_exist_comment' => '所選擇的留言並不存在.',
  'pic_in_invalid_album' => '此圖片存於不存在的相簿 (%s)!?', //cpg1.3.0
  'banned' => '您目前被禁止使用本站.',
  'not_with_udb' => '由於本相簿已和論壇程式整合, 此功能已停止使用. 可能是目前設定不支援此功能, 或已由論壇處理.', 
  'offline_title' => '離線', //cpg1.3.0
  'offline_text' => '相簿目前是離線狀態 - 請稍後再試', //cpg1.3.0
  'ecards_empty' => '目前沒有電子卡片的紀錄可顯示. 請檢查相簿設定中是否啟用紀錄電子卡片功能!', //cpg1.3.0
  'action_failed' => '動作失敗.  Coppermine 無法執行您的要求.', //cpg1.3.0
  'no_zip' => '無法執行ZIP壓縮檔.  請聯絡您的相簿管理員.', //cpg1.3.0
  'zip_type' => '您沒有上傳ZIP壓縮檔的權限.', //cpg1.3.0
);

$lang_bbcode_help = '參考編碼: <li>[b]<b>Bold</b>[/b]</li> <li>[i]<i>Italic</i>[/i]</li> <li>[url=http://yoursite.com/]Url Text[/url]</li> <li>[email]user@domain.com[/email]</li>'; //cpg1.3.0

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //
//
$lang_main_menu = array(
  'alb_list_title' => '返回相簿目錄',
  'alb_list_lnk' => '相簿目錄',
  'my_gal_title' => '返回我的相簿',
  'my_gal_lnk' => '我的相簿',
  'my_prof_lnk' => '我的個人資料',
  'adm_mode_title' => '轉為管理模式',
  'adm_mode_lnk' => '管理模式',
  'usr_mode_title' => '轉為會員模式',
  'usr_mode_lnk' => '會員模式',
  'upload_pic_title' => '上傳圖片至相簿', //cpg1.3.0
  'upload_pic_lnk' => '上傳圖片', //cpg1.3.0
  'register_title' => '建立會員帳號',
  'register_lnk' => '註冊',
  'login_lnk' => '登入',
  'logout_lnk' => '登出',
  'lastup_lnk' => '最新上傳',
  'lastcom_lnk' => '最新留言',
  'topn_lnk' => '熱門圖片',
  'toprated_lnk' => '最高評分',
  'search_lnk' => '搜尋',
  'fav_lnk' => '我的最愛',
  'memberlist_title' => '顯示會員名單', //cpg1.3.0
  'memberlist_lnk' => '會員名單', //cpg1.3.0
  'faq_title' => '&quot;Coppermine&quot; 相簿的常見問題解答', //cpg1.3.0
  'faq_lnk' => '常見問題解答', //cpg1.3.0
);

$lang_gallery_admin_menu = array(
  'upl_app_lnk' => '核准上傳',
  'config_lnk' => '設定',
  'albums_lnk' => '相簿',
  'categories_lnk' => '類別',
  'users_lnk' => '會員',
  'groups_lnk' => '群組',
  'comments_lnk' => '觀看留言', //cpg1.3.0
  'searchnew_lnk' => '整批加入圖片', //cpg1.3.0
  'util_lnk' => '管理工具', //cpg1.3.0
  'ban_lnk' => '阻擋會員',
  'db_ecard_lnk' => '顯示電子卡片', //cpg1.3.0
);

$lang_user_admin_menu = array(
  'albmgr_lnk' => '建立/排序 我的相簿',
  'modifyalb_lnk' => '編輯我的相簿',
  'my_prof_lnk' => '我的個人資料',
);

$lang_cat_list = array(
  'category' => '類別',
  'albums' => '相簿',
  'pictures' => '圖片', //cpg1.3.0
);

$lang_album_list = array(
  'album_on_page' => '%d 個相簿在 %d 頁',
);

$lang_thumb_view = array(
  'date' => '日期',
  //Sort by filename and title
  'name' => '檔名',
  'title' => '標題',
  'sort_da' => '依日期排序 由遠至近',
  'sort_dd' => '依日期排序 由近至遠',
  'sort_na' => '依名稱排序 由小至大',
  'sort_nd' => '依名稱排序 由大至小',
  'sort_ta' => '依標題排序 由小至大',
  'sort_td' => '依標題排序 由大至小',
  'download_zip' => '下載成 Zip 檔', //cpg1.3.0
  'pic_on_page' => '%d 張圖片在 %d 頁',
  'user_on_page' => '%d 名會員在 %d 頁', //cpg1.3.0
);

$lang_img_nav_bar = array(
  'thumb_title' => '返回縮圖頁',
  'pic_info_title' => '顯示/隱藏 圖片資訊', //cpg1.3.0
  'slideshow_title' => '連續播放',
  'ecard_title' => '把圖片以電子卡片寄出', //cpg1.3.0
  'ecard_disabled' => '電子卡片功能目前停用',
  'ecard_disabled_msg' => '您沒有寄電子卡片的權限', //js-alert //cpg1.3.0
  'prev_title' => '顯示前一張圖片', //cpg1.3.0
  'next_title' => '顯示下一張圖片', //cpg1.3.0
  'pic_pos' => '圖片 %s/%s', //cpg1.3.0
);

$lang_rate_pic = array(
  'rate_this_pic' => '對圖片評分', //cpg1.3.0
  'no_votes' => '(還沒有人評分)',
  'rating' => '(目前得分 : %s / 5 於 %s 個評分)',
  'rubbish' => '昏倒 不看也罷',
  'poor' => '有點差勁',
  'fair' => '普普通通',
  'good' => '很好',
  'excellent' => '非常出色',
  'great' => '叫我第一名',
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
  CRITICAL_ERROR => '緊急錯誤',
  'file' => '檔案: ',
  'line' => '行數: ',
);

$lang_display_thumbnails = array(
  'filename' => '檔案名稱: ',
  'filesize' => '檔案大小: ',
  'dimensions' => '圖片尺寸: ',
  'date_added' => '加入日期: ', //cpg1.3.0
);

$lang_get_pic_data = array(
  'n_comments' => '%s 個留言',
  'n_views' => '%s 次觀看',
  'n_votes' => '(%s 個評分)',
);

$lang_cpg_debug_output = array(
  'debug_info' => '除錯訊息', //cpg1.3.0
  'select_all' => '全選', //cpg1.3.0
  'copy_and_paste_instructions' => '如果你要在Coppermine支援論壇上要求協助, 複製並貼上這個除錯訊息到你的發表文章內. 發表文章前請注意用***來取代您的密碼.', //cpg1.3.0
  'phpinfo' => '顯示PHP訊息 (phpinfo)', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => '預設語系', //cpg1.3.0
  'choose_language' => '選擇你的語系', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => '預設佈景', //cpg1.3.0
  'choose_theme' => '選擇佈景', //cpg1.3.0
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
  'Exclamation' => '感歎',
  'Question' => '疑問',
  'Very Happy' => '很高興',
  'Smile' => '微笑',
  'Sad' => '悲哀',
  'Surprised' => '驚訝',
  'Shocked' => '震驚',
  'Confused' => '昏倒',
  'Cool' => '很棒',
  'Laughing' => '發笑',
  'Mad' => '發狂',
  'Razz' => '嘲笑',
  'Embarassed' => '尷尬',
  'Crying or Very sad' => '嚎哭',
  'Evil or Very Mad' => '惡毒',
  'Twisted Evil' => '古怪',
  'Rolling Eyes' => '旋轉的眼睛',
  'Wink' => '眨眼',
  'Idea' => '主意',
  'Arrow' => '箭頭',
  'Neutral' => '中立',
  'Mr. Green' => '格林先生',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  0 => '正離開管理模式...',
  1 => '正進入管理模式...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => '您需要給相簿一個名稱 !', //js-alert
  'confirm_modifs' => '確定要做這些修改嗎 ?', //js-alert
  'no_change' => '您沒有做任何改變 !', //js-alert
  'new_album' => '新相簿',
  'confirm_delete1' => '確定要刪除此相簿嗎 ?', //js-alert
  'confirm_delete2' => '\n所有圖片及留言都會刪除 !', //js-alert
  'select_first' => '請先選擇一個相簿', //js-alert
  'alb_mrg' => '相簿管理員',
  'my_gallery' => '* 我的相簿 *',
  'no_category' => '* 沒有類別 *',
  'delete' => '刪除',
  'new' => '新增',
  'apply_modifs' => '修改',
  'select_category' => '選擇類別',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => '\'%s\'操作所需要的參數並未提供 !',
  'unknown_cat' => '資料庫裡沒有您所選的類別',
  'usergal_cat_ro' => '會員相簿類別不能刪除 !',
  'manage_cat' => '類別管理',
  'confirm_delete' => '確定要刪除此類別嗎', //js-alert
  'category' => '類別',
  'operations' => '操作',
  'move_into' => '移動到',
  'update_create' => '更新/建立 類別',
  'parent_cat' => '母類別',
  'cat_title' => '類別標題',
  'cat_thumb' => '類別縮圖', //cpg1.3.0
  'cat_desc' => '類別簡介',
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
  'title' => '設定',
  'restore_cfg' => '回復原始設定',
  'save_cfg' => '儲存新設定',
  'notes' => '注意',
  'info' => '訊息',
  'upd_success' => '設定已更新',
  'restore_success' => '原始設定已回復',
  'name_a' => '排序依名稱 由小至大',
  'name_d' => '排序依名稱 由大至小',
  'title_a' => '排序依標題 由小至大',
  'title_d' => '排序依標題 由大至小',
  'date_a' => '排序依日期 由遠至近',
  'date_d' => '排序依日期 由近至遠',
  'th_any' => '最大外觀',
  'th_ht' => '高度',
  'th_wd' => '寬度',
  'label' => '標籤', //cpg1.3.0
  'item' => '項目', //cpg1.3.0
  'debug_everyone' => '任何人', //cpg1.3.0
  'debug_admin' => '管理員專用', //cpg1.3.0
        );

if (defined('CONFIG_PHP')) $lang_config_data = array(
  '基本設定',
  array('相簿名稱', 'gallery_name', 0),
  array('相簿描述', 'gallery_description', 0),
  array('相簿管理員的電子郵件', 'gallery_admin_email', 0),
  array('在電子卡片內顯示\'觀看更多圖片\'的連結', 'ecards_more_pic_target', 0),
  array('相簿目前離線中', 'offline', 1), //cpg1.3.0
  array('紀錄電子卡片', 'log_ecards', 1), //cpg1.3.0
  array('允許將最愛的圖片下載成ZIP檔', 'enable_zipdownload', 1), //cpg1.3.0

  '語系, 佈景 &amp; 文字編碼設定',
  array('語系', 'lang', 5),
  array('佈景', 'theme', 6),
  array('顯示語系列表', 'language_list', 8), //cpg1.3.0
  array('顯示語系國旗', 'language_flags', 8), //cpg1.3.0
  array('在語系列表內顯示 &quot;重設&quot;', 'language_reset', 1), //cpg1.3.0
  array('顯示佈景列表', 'theme_list', 8), //cpg1.3.0
  array('在佈景列表內顯示 &quot;重設&quot;', 'theme_reset', 1), //cpg1.3.0
  array('顯示 FAQ', 'display_faq', 1), //cpg1.3.0
  array('顯示 bbcode 簡介', 'show_bbcode_help', 1), //cpg1.3.0
  array('文字編碼', 'charset', 4), //cpg1.3.0

  '相簿目錄顯示',
  array('主要表格寬度 (像素或 %)', 'main_table_width', 0),
  array('同一層次的子類別顯示數量', 'subcat_level', 0),
  array('相簿顯示數量', 'albums_per_page', 0),
  array('相簿目錄內的相簿欄數', 'album_list_cols', 0),
  array('縮圖像素', 'alb_list_thumb_size', 0),
  array('主頁的內容', 'main_page_layout', 0),
  array('顯示分類中第一層的相簿縮圖','first_level',1),

  '縮圖顯示',
  array('縮圖頁欄數', 'thumbcols', 0),
  array('縮圖頁列數', 'thumbrows', 0),
  array('表格顯示最高個數', 'max_tabs', 10), //cpg1.3.0
  array('顯示圖片說明於縮圖下方 (連標題)', 'caption_in_thumbview', 1), //cpg1.3.0
  array('顯示觀看次數於縮圖下方', 'views_in_thumbview', 1), //cpg1.3.0
  array('顯示留言數於縮圖下方', 'display_comment_count', 1),
  array('顯示上傳者名稱於縮圖下方', 'display_uploader', 1), //cpg1.3.0
  array('圖片的預設排序', 'default_sort_order', 3), //cpg1.3.0
  array('\'熱門投票\'需要的最少投票數', 'min_votes_for_rating', 0), //cpg1.3.0

  '圖片顯示 &amp; 留言設定',
  array('圖片顯示的表格寬度 (像素或 %)', 'picture_table_width', 0), //cpg1.3.0
  array('圖片資訊的預設為顯示', 'display_pic_info', 1), //cpg1.3.0
  array('留言內過濾不良詞彙', 'filter_bad_words', 1),
  array('留言可以使用笑臉圖示', 'enable_smilies', 1),
  array('允許會員在同一張圖片 連續發表留言(關閉灌水保護)', 'disable_comment_flood_protect', 1), //cpg1.3.0
  array('圖片簡介的最大長度', 'max_img_desc_length', 0),
  array('文字的最大字數', 'max_com_wlength', 0),
  array('留言的最大行數', 'max_com_lines', 0),
  array('留言的最大長度', 'max_com_size', 0),
  array('顯示圖片預覽列', 'display_film_strip', 1),
  array('圖片預覽列的圖片數', 'max_film_strip_items', 0),
  array('有留言時用電子郵件通知管理員', 'email_comment_notification', 1), //cpg1.3.0
  array('連續撥放間隔時間 (毫秒). 1 秒 = 1000 毫秒', 'slideshow_interval', 0), //cpg1.3.0

  '圖片及縮圖設定', //cpg1.3.0
  array('JPEG 格式品質', 'jpeg_qual', 0),
  array('縮圖最大尺寸 <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0), //cpg1.3.0
  array('使用尺寸 ( 寬、高或縮圖最大邊長 )<b>**</b>', 'thumb_use', 7),
  array('建立中級圖片','make_intermediate',1),
  array('中級圖片/影片最大尺寸 <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0), //cpg1.3.0
  array('上傳圖檔的最大限制 (KB)', 'max_upl_size', 0), //cpg1.3.0
  array('上傳圖片/影片的最大寬度或最高尺寸 (像素)', 'max_upl_width_height', 0), //cpg1.3.0

  '圖片和縮圖的進階設定', //cpg1.3.0
  array('顯示私人相簿圖片給未登入會員','show_private',1), //cpg1.3.0
  array('檔案名稱不接受的字符', 'forbiden_fname_char',0), //cpg1.3.0
  //array('上傳圖檔可接受的副檔名', 'allowed_file_extensions',0), //cpg1.3.0
  array('允許的圖片檔類型', 'allowed_img_types',0), //cpg1.3.0
  array('允許的影片檔類型', 'allowed_mov_types',0), //cpg1.3.0
  array('允許的聲音檔類型', 'allowed_snd_types',0), //cpg1.3.0
  array('允許的文件檔類型', 'allowed_doc_types',0), //cpg1.3.0
  array('建立縮圖的方法','thumb_method',2), //cpg1.3.0
  array('ImageMagick \'convert\' 程式的路徑 (例如 /usr/bin/X11/)', 'impath', 0), //cpg1.3.0
  //array('可接受的圖檔類型(只對 ImageMagick 有效)', 'allowed_img_types',0), //cpg1.3.0
  array('ImageMagick 的命令列選項', 'im_options', 0), //cpg1.3.0
  array('讀取 JPEG 檔案的 EXIF 資料', 'read_exif_data', 1), //cpg1.3.0
  array('讀取 JPEG 檔案的 IPTC 資料', 'read_iptc_data', 1), //cpg1.3.0
  array('相簿路徑 <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0), //cpg1.3.0
  array('會員圖檔路徑 <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0), //cpg1.3.0
  array('中級圖檔的前置字元 <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0), //cpg1.3.0
  array('縮圖檔的前置字元 <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0), //cpg1.3.0
  array('放置圖檔目錄的預設權限', 'default_dir_mode', 0), //cpg1.3.0
  array('上傳圖片的預設權限', 'default_file_mode', 0), //cpg1.3.0

  '會員設定',
  array('允許新會員註冊', 'allow_user_registration', 1),
  array('註冊需要電子郵件驗證', 'reg_requires_valid_email', 1),
  array('有使用者註冊時用電子郵件通知管理員', 'reg_notify_admin_email', 1), //cpg1.3.0
  array('允許兩個會員使用同一個電子郵件', 'allow_duplicate_emails_addr', 1),
  array('會員可以有私人的相簿 (注意: 如果你切換 是到否 任何目前私人相簿將變成公開相簿)', 'allow_private_albums', 1), //cpg1.3.0
  array('有會員上傳檔案等待核准時通知管理員', 'upl_notify_admin_email', 1), //cpg1.3.0
  array('允許登入的會員查看會員名單', 'allow_memberlist', 1), //cpg1.3.0

  '影像簡介的自訂欄位 (如果不使用請留下空白)',
  array('欄位 1 的名稱', 'user_field1_name', 0),
  array('欄位 2 的名稱', 'user_field2_name', 0),
  array('欄位 3 的名稱', 'user_field3_name', 0),
  array('欄位 4 的名稱', 'user_field4_name', 0),

  'Cookies 設定',
  array('使用的 cookie 名稱 (與論壇程式整合時, 確定它和論壇的cookie不同)', 'cookie_name', 0),
  array('使用的 cookie 路徑', 'cookie_path', 0),

  '其他設定',
  array('啟動除錯模式', 'debug_mode', 9), //cpg1.3.0
  array('在除錯模式時顯示提示', 'debug_notice', 1), //cpg1.3.0

  '<br /><div align="left"><a name="notice1"></a>(*) 若相簿內有圖片, 標示有 * 的欄位表示不可更改.<br />
  <a name="notice2"></a>(**) 改變這個設定只影響已經加入的檔案, 如果那些檔案已經在相簿內了,這個設定不必改變. 無論如何,你可以從 管理員功能選單裡 調整既有的檔案,從 &quot;<a href="util.php">管理工具</a> (調整圖片尺寸)&quot; </div><br />', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => '寄出電子卡片', //cpg1.3.0
  'ecard_sender' => '寄件者', //cpg1.3.0
  'ecard_recipient' => '收件者', //cpg1.3.0
  'ecard_date' => '日期', //cpg1.3.0
  'ecard_display' => '顯示電子卡片', //cpg1.3.0
  'ecard_name' => '名稱', //cpg1.3.0
  'ecard_email' => '電子郵件', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => '升冪', //cpg1.3.0
  'ecard_descending' => '降冪', //cpg1.3.0
  'ecard_sorted' => '排序', //cpg1.3.0
  'ecard_by_date' => '依日期', //cpg1.3.0
  'ecard_by_sender_name' => '依寄件者名稱', //cpg1.3.0
  'ecard_by_sender_email' => '依寄件者郵件', //cpg1.3.0
  'ecard_by_sender_ip' => '依寄件者的 IP 位址', //cpg1.3.0
  'ecard_by_recipient_name' => '依收件者名稱', //cpg1.3.0
  'ecard_by_recipient_email' => '依收件者郵件', //cpg1.3.0
  'ecard_number' => '顯示紀錄 %s 到 %s 在 %s', //cpg1.3.0
  'ecard_goto_page' => '到頁次', //cpg1.3.0
  'ecard_records_per_page' => '頁次紀錄', //cpg1.3.0
  'check_all' => '全選', //cpg1.3.0
  'uncheck_all' => '都不選', //cpg1.3.0
  'ecards_delete_selected' => '刪除選取的卡片', //cpg1.3.0
  'ecards_delete_confirm' => '你確定要刪除紀錄? 請點選!', //cpg1.3.0
  'ecards_delete_sure' => '我確定', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => '請輸入您的名字和留言',
  'com_added' => '您的留言已經加入',
  'alb_need_title' => '您必須為相簿提供一個標題 !',
  'no_udp_needed' => '沒有更新的必要',
  'alb_updated' => '相簿已經更新',
  'unknown_album' => '所選擇的相簿不存在或您沒有權限上傳檔案到此相簿',
  'no_pic_uploaded' => '沒有檔案被上傳 !<br /><br />如果您確定有選擇檔案上傳, 請檢查伺服器是否允許上傳檔案...', //cpg1.3.0
  'err_mkdir' => '無法建立目錄 %s !',
  'dest_dir_ro' => '目錄 %s 無法寫入 !',
  'err_move' => '無法移動 %s 到 %s !',
  'err_fsize_too_large' => '您上傳的圖片太大 (不能超過 %s x %s) !', //cpg1.3.0
  'err_imgsize_too_large' => '您上傳的圖檔太大 (不能超過 %s KB) !',
  'err_invalid_img' => '上傳的檔案並不是容許的圖片格式 !',
  'allowed_img_types' => '您只可以上傳 %s 張圖片.',
  'err_insert_pic' => '檔案 \'%s\' 無法加入此相簿 ', //cpg1.3.0
  'upload_success' => '檔案上傳完成!<br /><br />當管理者核准後就可以看到檔案了.', //cpg1.3.0
  'notify_admin_email_subject' => '%s - 上傳檔案通知', //cpg1.3.0
  'notify_admin_email_body' => '%s有上傳檔案 需要你的核准. 請查閱 %s', //cpg1.3.0
  'info' => '訊息',
  'com_added' => '留言已加入',
  'alb_updated' => '相簿已經更新',
  'err_comment_empty' => '留言是空的 !',
  'err_invalid_fext' => '只有下列的副檔名才允許上傳 : <br /><br />%s.',
  'no_flood' => '抱歉, 此圖片最後一個留言是您提供<br /><br />您只可以修改您的留言', //cpg1.3.0
  'redirect_msg' => '頁面轉移中.<br /><br /><br />按 \'繼續\' 如果頁面沒有自動刷新',
  'upl_success' => '已經加入您的圖片', //cpg1.3.0
  'email_comment_subject' => '已經有留言發表在網路相簿', //cpg1.3.0
  'email_comment_body' => '已經有留言發表在您的相簿. 請查閱', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => '說明',
  'fs_pic' => '原圖',
  'del_success' => '完成刪除',
  'ns_pic' => '標準尺寸圖片',
  'err_del' => '無法刪除',
  'thumb_pic' => '縮圖',
  'comment' => '留言',
  'im_in_alb' => '相簿內圖片',
  'alb_del_success' => '相簿 \'%s\' 已刪除',
  'alb_mgr' => '相簿管理',
  'err_invalid_data' => '接收到不正確的資料於 \'%s\'',
  'create_alb' => '建立相簿 \'%s\'',
  'update_alb' => '更新相簿 \'%s\' 標題為 \'%s\' 索引為 \'%s\'',
  'del_pic' => '刪除圖片', //cpg1.3.0
  'del_alb' => '刪除相簿',
  'del_user' => '刪除會員',
  'err_unknown_user' => '所選擇的會員不存在 !',
  'comment_deleted' => '留言已刪除',
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
  'confirm_del' => '確定要刪除此圖片嗎 ? \\n留言也會被刪除.', //js-alert //cpg1.3.0
  'del_pic' => '刪除此圖片', //cpg1.3.0
  'size' => '%s x %s 像素',
  'views' => '%s 次',
  'slideshow' => '連續播放',
  'stop_slideshow' => '停止播放',
  'view_fs' => '點選圖片以觀看原圖',
  'edit_pic' => '編輯說明', //cpg1.3.0
  'crop_pic' => '裁剪與旋轉', //cpg1.3.0
);

$lang_picinfo = array(
  'title' =>'圖片資訊', //cpg1.3.0
  'Filename' => '檔案名稱',
  'Album name' => '相簿名稱',
  'Rating' => '評分 (%s 次投票)',
  'Keywords' => '關鍵字',
  'File Size' => '檔案大小',
  'Dimensions' => '尺寸',
  'Displayed' => '顯示',
  'Camera' => '相機',
  'Date taken' => '拍攝日期',
  'Aperture' => '光圈',
  'Exposure time' => '曝光時間',
  'Focal length' => '焦距',
  'Comment' => '留言',
  'addFav'=>'加到我的最愛', //cpg1.3.0
  'addFavPhrase'=>'我的最愛', //cpg1.3.0
  'remFav'=>'從我的最愛移除', //cpg1.3.0
  'iptcTitle'=>'IPTC 標題', //cpg1.3.0
  'iptcCopyright'=>'IPTC 版權', //cpg1.3.0
  'iptcKeywords'=>'IPTC 關鍵字', //cpg1.3.0
  'iptcCategory'=>'IPTC 類別', //cpg1.3.0
  'iptcSubCategories'=>'IPTC 子類別', //cpg1.3.0
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => '編輯此留言',
  'confirm_delete' => '確定要刪除此留言 ?', //js-alert
  'add_your_comment' => '加入你的留言',
  'name'=>'名稱',
  'comment'=>'留言',
  'your_name' => '無名氏',
);

$lang_fullsize_popup = array(
  'click_to_close' => '點選圖片來關閉視窗',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => '寄出 電子卡片',
  'invalid_email' => '<b>警告</b> : 不正確的電子郵件地址 !',
  'ecard_title' => '%s 寄給你一張電子卡片',
  'error_not_image' => '電子卡片只能寄出圖片.', //cpg1.3.0
  'view_ecard' => '如果 電子卡片 無法正確顯示, 請按此連結',
  'view_more_pics' => '按此連結看更多圖片 !',
  'send_success' => '你的 電子卡片 已寄出',
  'send_failed' => '抱歉, 本伺服器無法為你寄出 電子卡片...',
  'from' => '由',
  'your_name' => '你的名稱',
  'your_email' => '你的電子郵件',
  'to' => '給',
  'rcpt_name' => '收件者名稱',
  'rcpt_email' => '收件者電子郵件',
  'greetings' => '標題',
  'message' => '訊息內容',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => '檔案資料', //cpg1.3.0
  'album' => '相簿',
  'title' => '標題',
  'desc' => '描述',
  'keywords' => '關鍵字',
  'pic_info_str' => '%s &times; %s - %s KB - %s 次觀看 - %s 次評分',
  'approve' => '核准圖片', //cpg1.3.0
  'postpone_app' => '延遲核准',
  'del_pic' => '刪除圖片', //cpg1.3.0
  'read_exif' => '再次讀取 EXIF 資料', //cpg1.3.0
  'reset_view_count' => '重設觀看計數器',
  'reset_votes' => '重設評分',
  'del_comm' => '刪除留言',
  'upl_approval' => '核准上傳',
  'edit_pics' => '編輯圖片', //cpg1.3.0
  'see_next' => '觀看下一張圖片', //cpg1.3.0
  'see_prev' => '觀看前一張圖片', //cpg1.3.0
  'n_pic' => '%s 張圖片', //cpg1.3.0
  'n_of_pic_to_disp' => '圖片顯示數量', //cpg1.3.0
  'apply' => '修改', //cpg1.3.0
  'crop_title' => 'CPG 圖片編輯器', //cpg1.3.0
  'preview' => '預覽', //cpg1.3.0
  'save' => '存檔', //cpg1.3.0
  'save_thumb' =>'存成縮圖', //cpg1.3.0
  'sel_on_img' =>'選擇的區域必須在圖片範圍內!', //js-alert //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => '常見問題解答', //cpg1.3.0
  'toc' => '目錄', //cpg1.3.0
  'question' => '問題: ', //cpg1.3.0
  'answer' => '解答: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  '一般性問題與解答', //cpg1.3.0
  array('為什麼要註冊?', '管理員決定使用者是否需要註冊. 註冊成為會員可獲得額外的功能,如 上傳檔案,有 我的最愛列表, 對影像評分及發表留言 等等.', 'allow_user_registration', '0'), //cpg1.3.0
  array('如何註冊?', '到 &quot;註冊&quot; 去填寫欄位內的資料 (部分欄位是選填的).<br />如果管理員開啟Email 啟用功能 ,在你確認送出註冊資料後 你會收到一封認證信 寄到你所填寫的信箱內, 裡面會說明如何啟用你的會員資格. 會員登入前 必須先完成啟用動作.', 'allow_user_registration', '1'), //cpg1.3.0
  array('如何登入?', '到 &quot;登入&quot;, 填入你的會員名稱及密碼 且勾選 &quot;記住我&quot; 下次你再來的時候就會自動登入了.<br /><b>注意:如果你點選 &quot;記住我 Me&quot; ,Cookies 功能必須開啟,且本站的cookie存在你的電腦中..</b>', 'offline', 0), //cpg1.3.0
  array('為何無法登入?', '你已經註冊並啟用帳號了嗎(回覆認證郵件的連結)?. 那個連結將會啟用你的帳號. 其他登入問題 請聯絡網站管理員.', 'offline', 0), //cpg1.3.0
  array('忘記密碼了怎麼辦 ?', '如果這個網站有 &quot;忘記密碼了&quot; 的連結,就按它. 不然就聯絡網站管理員 請他給你一個新的密碼.', 'offline', 0), //cpg1.3.0
  array('我的email變更了怎麼辦 ?', '只要登入 並且到 &quot;我的個人資料&quot; 變更你的電子郵件地址就可以了', 'offline', 0), //cpg1.3.0
  array('如何把圖片存到  &quot;我的最愛 &quot;?', '點選圖片並且點按 &quot;影像資訊&quot; 連結 (<img src="images/info.gif" width="16" height="16" border="0" alt="Picture information" />); 在影像資訊設定裡面按 &quot;加入我的最愛&quot;.<br />管理員可能有預設&quot;影像資訊; .<br />注意:Cookies 功能必須開啟,且本站的cookie存在你的電腦中.', 'offline', 0), //cpg1.3.0
  array('如何對圖片評分 ?', '點按該影像縮圖,在影像底下可以點選你的評分.', 'offline', 0), //cpg1.3.0
  array('如何發表留言 ?', '點按該影像縮圖,在影像底下可以發表留言.', 'offline', 0), //cpg1.3.0
  array('如何上傳圖片 ?', '到 &quot;上傳圖片&quot;並選擇你要上傳到哪一個相簿,按 &quot;瀏覽&quot; 且點選要上傳的圖片 按 &quot;開啟&quot; (你可以加入影像標題及描述) 然後按 &quot;確認&quot;', 'allow_private_albums', 0), //cpg1.3.0
  array('要從哪裡上傳圖片 ?', '你可以上傳圖片在 &quot;我的相簿&quot;. 管理員可能允許你上傳圖片到主相簿內.', 'allow_private_albums', 0), //cpg1.3.0
  array('哪種格式或大小的影像可以上傳?', '格式跟大小 (jpg,gif,..etc.) 根據管理員的設定.', 'offline', 0), //cpg1.3.0
  array('什麼是 &quot;我的相簿&quot;?', '&quot;我的相簿&quot; 是個人的相簿,讓會員可以上傳及管裡影像.', 'allow_private_albums', 0), //cpg1.3.0
  array('如何新增,修改 或刪除相簿 從 &quot;我的相簿&quot;?', '你必須在 &quot;管理模式&quot;<br />到 &quot;新增/排序 我的相簿&quot;按 &quot;新增New&quot;. 變更 &quot;新相簿&quot; 到你要的名稱.<br />你可以對你的每一個相簿重新命名.<br />按 &quot;修改;.', 'allow_private_albums', 0), //cpg1.3.0
  array('我要如何禁止其他會員看我的相簿?', '你必須在 &quot;管理模式&quot;<br />到 &quot;變更我的相簿. 在 &quot;更新相簿&quot; 欄位, 選擇你要變更的相簿.<br />在這裡, 你可以變更相簿名稱 描述 縮圖 ,及限制觀看 留言 評分 的權限.<br />按 &quot;更新相簿&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('如何觀看其他會員的相簿?', '到 &quot;相簿目錄&quot; 選擇 &quot;會員相簿&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('什麼是 cookies?', 'Cookies 是網站放在你電腦中的文字資料.<br />Cookies 通常讓使用者再次回到網站時自動登入 並記錄其他設定資料.', 'offline', 0), //cpg1.3.0
  array('在哪裡可以取得這個相簿程式?', 'Coppermine 是基於GNU GPL的免費多媒體相簿. 它是全功能的 且支援不同的平台. 請到<a href="http://coppermine.sf.net/">Coppermine 的網站</a> 取得更多的資訊 或是下載它.', 'offline', 0), //cpg1.3.0

  '網站導引', //cpg1.3.0
  array('什麼是 &quot;相簿目錄 &quot;?', '這將顯示整個相簿 包含每一個分類. 縮圖可以連結到類別中.', 'offline', 0), //cpg1.3.0
  array('什麼是 &quot;我的相簿 &quot;?', '這項功能讓會員建立自己的相簿,可增加,刪除,修改相簿. 並且可上傳檔案到相簿裡.', 'allow_private_albums', 0), //cpg1.3.0
  array('有什麼差異在 &quot;管理模式&quot; 和 &quot;會員模式&quot;?', '這項功能, 在管理模式時, 允許會員修改他們自己的相簿 (如果管理員允許的話).', 'allow_private_albums', 0), //cpg1.3.0
  array('什麼是 &quot;上傳圖片 &quot;?', '這項功能允許會員上傳影像(檔案大小及格式依管理員設定) 到指定的相簿.', 'allow_private_albums', 0), //cpg1.3.0
  array('什麼是 &quot;最新上傳 &quot;?', '這項功能顯示最新上傳到相簿的檔案.', 'offline', 0), //cpg1.3.0
  array('什麼是 &quot;最新留言 &quot;?', '這項功能會員對影像發表的最新留言.', 'offline', 0), //cpg1.3.0
  array('什麼是 &quot;熱門圖片 &quot;?', '這項功能顯示被觀看最多次的影像,不論是會員或訪客.', 'offline', 0), //cpg1.3.0
  array('什麼是 &quot;最高評分 &quot;?', '這項功能顯示會員評分最高的影像, 顯示平均分數(例如: 五個會員各給一個評分 <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: 影像將有平均評分 <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;五個會員評分從 1 到 5 (1,2,3,4,5) 平均結果將是 <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />評分從 <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (最佳) 到 <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (最差).', 'offline', 0), //cpg1.3.0
  array('什麼是 &quot;我的最愛 &quot;?', '這項功能讓會員儲存喜愛的影像,需要有cookie資訊.', 'offline', 0), //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => '忘記密碼', //cpg1.3.0
  'err_already_logged_in' => '你已經登入了!', //cpg1.3.0
  'enter_username_email' => '輸入你的會員名稱或 email ', //cpg1.3.0
  'submit' => '繼續', //cpg1.3.0
  'failed_sending_email' => '無法寄出密碼提醒郵件 !', //cpg1.3.0
  'email_sent' => '已經將你的會員名稱與密碼寄到 %s', //cpg1.3.0
  'err_unk_user' => '沒有這個會員!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - 密碼提醒', //cpg1.3.0
  'passwd_reminder_body' => '您的登入資料如下:
Username: %s
Password: %s
按 %s 登入.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => '群組名稱',
  'disk_quota' => '磁碟配額',
  'can_rate' => '允許圖片評分', //cpg1.3.0
  'can_send_ecards' => '允許寄出卡片',
  'can_post_com' => '允許貼出留言',
  'can_upload' => '允許上傳檔案', //cpg1.3.0
  'can_have_gallery' => '允許私人相簿',
  'apply' => '修改',
  'create_new_group' => '建立新群組',
  'del_groups' => '刪除所選擇的群組',
  'confirm_del' => '警告, 當刪除了一個群組, 屬於該群組的用戶將被轉移至 \'Registered\' 群組中 !\n\nn確定要刪除嗎 ?', //js-alert //cpg1.3.0
  'title' => '管理會員群組',
  'approval_1' => '公開相簿上傳核准 (1)',
  'approval_2' => '私人相簿上傳核准 (2)',
  'upload_form_config' => '上傳格式設定', //cpg1.3.0
  'upload_form_config_values' => array( '上傳一個檔案', '多檔上傳', '只上傳URI ', '只上傳ZIP ', 'File-URI', 'File-ZIP', 'URI-ZIP', 'File-URI-ZIP'), //cpg1.3.0
  'custom_user_upload'=>'會員可用的上傳框數量?', //cpg1.3.0
  'num_file_upload'=>'最大/實際 檔案 上傳框數量', //cpg1.3.0
  'num_URI_upload'=>'最大/實際 URI 上傳框數量', //cpg1.3.0
  'note1' => '<b>(1)</b> 上傳圖片至公開相簿需管理員核准',
  'note2' => '<b>(2)</b> 上傳圖片至私人相簿需管理員核准',
  'notes' => '注意',
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => '歡迎 !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => '確定要刪除這相簿 ? \\n所有圖片及留言都會被刪除.', //js-alert //cpg1.3.0
  'delete' => '刪除',
  'modify' => '屬性',
  'edit_pics' => '編輯', //cpg1.3.0
);

$lang_list_categories = array(
  'home' => '相簿首頁',
  'stat1' => '<b>[pictures]</b> 張影像於 <b>[albums]</b> 個相簿及 <b>[cat]</b> 個類別, 有 <b>[comments]</b> 個留言, 被觀看 <b>[views]</b> 次', //cpg1.3.0
  'stat2' => '<b>[pictures]</b> 張影像於 <b>[albums]</b> 個相簿, 被觀看 <b>[views]</b> 次', //cpg1.3.0
  'xx_s_gallery' => '%s\'s 相簿',
  'stat3' => '<b>[pictures]</b> 張影像於 <b>[albums]</b> 個相簿, 有 <b>[comments]</b> 個留言, 被觀看 <b>[views]</b> 次', //cpg1.3.0
);

$lang_list_users = array(
  'user_list' => '會員列表',
  'no_user_gal' => '還沒有會員相簿',
  'n_albums' => '%s 個相簿',
  'n_pics' => '%s 張影像', //cpg1.3.0
);

$lang_list_albums = array(
  'n_pictures' => '%s 張影像', //cpg1.3.0
  'last_added' => ', 最新影像於 %s',
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => '登入',
  'enter_login_pswd' => '輸入會員名稱和密碼',
  'username' => '會員名稱',
  'password' => '密碼',
  'remember_me' => '記住我',
  'welcome' => '歡迎 %s ...',
  'err_login' => '*** 無法登入. 請重試 ***',
  'err_already_logged_in' => '您已經登入 !',
  'forgot_password_link' => '忘記密碼了', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => '登出',
  'bye' => '再見 %s ...',
  'err_not_loged_in' => '您還沒有登入 !',
);

// ------------------------------------------------------------------------- //
// File phpinfo.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP 資料', //cpg1.3.0
  'explanation' => '這是由 PHP-function 產生 <a href="http://www.php.net/phpinfo">phpinfo()</a>, Copermine 截取部分內容顯示.', //cpg1.3.0
  'no_link' => '讓其他人看到你的 phpinfo 會有安全上的風險, 這就是為何 當你以管理員身分登入時才會看到此頁的原因. 你不能將本頁的連結給其他人因為會顯示存取錯誤.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => '更新相簿 %s',
  'general_settings' => '一般設定',
  'alb_title' => '相簿標題',
  'alb_cat' => '相簿類別',
  'alb_desc' => '相簿描述',
  'alb_thumb' => '相簿縮圖',
  'alb_perm' => '相簿權限',
  'can_view' => '允許觀看相簿的會員',
  'can_upload' => '訪客可上傳圖片',
  'can_post_comments' => '訪客可發表留言',
  'can_rate' => '訪客可為圖片評分',
  'user_gal' => '會員相簿',
  'no_cat' => '* 沒有類別 *',
  'alb_empty' => '相簿是空的',
  'last_uploaded' => '最近上傳',
  'public_alb' => '任何人 (公開相簿)',
  'me_only' => '只有我',
  'owner_only' => '只有相簿擁有人 (%s) ',
  'groupp_only' => ' \'%s\' 群組的會員',
  'err_no_alb_to_modify' => '資料庫內沒有您可修改的相簿.',
  'update' => '更新相簿', //cpg1.3.0
  'notice1' => '(*) 根據 %s群組%s 設定', //cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => '抱歉, 您已經為此圖片評分', //cpg1.3.0
  'rate_ok' => '您的評分已經被接受',
  'forbidden' => '你不能對你自己的圖片評分.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
 {SITE_NAME} 的管理員會儘快整理會引起反感的資料, 但我們不可能審查每一份文件. 因此您必需同意所有文件只是代表作者的立場及意見, 不代表管理人員的立場 (除了由他們貼出) 並不負任何法律責任.<br />
<br />
您必需同意不可張貼任何色情, 暴力, 不良, 不正當, 不健康, 妨害國家安全, 或任何可能違法的文件.  {SITE_NAME} 人員在任何時候都有權過濾並編輯您張貼的內容. 並且會員留在本站內的資料已存在資料庫中. 末經您的同意, 我們不會將您的資料轉給其他人使用, 不過我們不會為任何因駭客行為而外洩的資料負任何責任.<br />
<br />
本站使用 cookies 在您的電腦上來儲存資訊. 這樣是方便您更愉快瀏覽. 您的電子郵件地址只是讓我們認證您的資料而已.<br />
<br />
按下 '我同意' 代表您同意以上條款.
EOT;

$lang_register_php = array(
  'page_title' => '會員註冊',
  'term_cond' => '條款與規則',
  'i_agree' => '我同意',
  'submit' => '確認註冊',
  'err_user_exists' => '您所填寫的會員名稱已被其他會員使用, 請重選一個',
  'err_password_mismatch' => '兩個密碼不合, 請重填一次',
  'err_uname_short' => '會員名稱至少需 2 個字元',
  'err_password_short' => '密碼至少需 2 個字元',
  'err_uname_pass_diff' => '會員名稱和密碼不可以相同',
  'err_invalid_email' => '電子郵件不正確',
  'err_duplicate_email' => '這個電子郵件已經被其他會員使用',
  'enter_info' => '輸入註冊資料',
  'required_info' => '必填的資料',
  'optional_info' => '選填的資料',
  'username' => '會員名稱',
  'password' => '會員密碼',
  'password_again' => '確認密碼',
  'email' => '電子郵件',
  'location' => '居住地區',
  'interests' => '興趣',
  'website' => '個人網站',
  'occupation' => '職業',
  'error' => '錯誤',
  'confirm_email_subject' => '%s - 註冊認證',
  'information' => '訊息',
  'failed_sending_email' => '所註冊的電子郵件無法寄出 !',
  'thank_you' => '感謝您的註冊.<br /><br />一封含有如何啟用帳號的電子郵件將會送到您所提供的信箱.',
  'acct_created' => '您的帳號已經建立, 現在您可以登入',
  'acct_active' => '您的帳號已經啟用, 現在您可以登入',
  'acct_already_act' => '您的帳號已經啟用 !',
  'acct_act_failed' => '此帳號無法啟用 !',
  'err_unk_user' => '所選擇的會員並不存在 !',
  'x_s_profile' => '%s\'的個人資料',
  'group' => '群組',
  'reg_date' => '加入日期',
  'disk_usage' => '磁碟使用量',
  'change_pass' => '修改密碼',
  'current_pass' => '目前的密碼',
  'new_pass' => '新密碼',
  'new_pass_again' => '確認新密碼',
  'err_curr_pass' => '目前的密碼不正確',
  'apply_modif' => '修改',
  'change_pass' => '修改密碼',
  'update_success' => '你的個人資料已經更新',
  'pass_chg_success' => '你的密碼已經修改',
  'pass_chg_error' => '你的密碼沒有修改',
  'notify_admin_email_subject' => '%s - 註冊通知', //cpg1.3.0
  'notify_admin_email_body' => '有一個新會員名稱 "%s" 已經在你的相簿註冊', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
感謝您在 {SITE_NAME} 的註冊

您的會員名稱 : "{USER_NAME}"
您的密碼 : "{PASSWORD}"

請您按下面的連結以啟動您的帳號
或者把此連結貼到瀏覽器上.

{ACT_LINK}

歡迎你(妳),

{SITE_NAME} 管理小組

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => '觀看留言',
  'no_comment' => '還沒有留言可以觀看',
  'n_comm_del' => '%s 個留言已刪除',
  'n_comm_disp' => '顯示的留言數量',
  'see_prev' => '看前一個',
  'see_next' => '看下一個',
  'del_comm' => '刪除所選的留言',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
  0 => '搜尋圖片內容',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => '搜尋新圖片', //cpg1.3.0
  'select_dir' => '選擇目錄',
  'select_dir_msg' => '本功能可以讓你用 FTP 上傳整批圖片.<br /><br />請選擇你已上傳圖片的目錄', //cpg1.3.0
  'no_pic_to_add' => '沒有圖片可以加入', //cpg1.3.0
  'need_one_album' => '使用此功能必需至少要有一個相簿',
  'warning' => '警告',
  'change_perm' => '程式無法寫入這個目錄, 請修改權限至 755 或 777 後再試一次 !', //cpg1.3.0
  'target_album' => '<b>把圖片由 &quot;</b>%s<b>&quot; 放到 </b>%s', //cpg1.3.0
  'folder' => '資料夾',
  'image' => '圖片',
  'album' => '相簿',
  'result' => '結果',
  'dir_ro' => '無法寫入. ',
  'dir_cant_read' => '無法讀取. ',
  'insert' => '新增圖片至相簿', //cpg1.3.0
  'list_new_pic' => '新圖片列表', //cpg1.3.0
  'insert_selected' => '加入所選擇的圖片', //cpg1.3.0
  'no_pic_found' => '沒有找到新圖片', //cpg1.3.0
  'be_patient' => '請耐心等候, 程式需要一點時間來加入所選圖片', //cpg1.3.0
  'no_album' => '沒有選擇的相簿',  //cpg1.3.0
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : 表示圖片已成功被加入'.
                          '<li><b>DP</b> : 表示圖片重覆或已存在資料庫'.
                          '<li><b>PB</b> : 表示圖片無法加入, 請檢查設定或圖片存放目錄的權限'.
                          '<li><b>NA</b> : 表示你還沒有選擇圖片的相簿, 按 \'<a href="javascript:history.back(1)">返回</a>\' 並選擇相簿. 如果你沒有相簿 <a href="albmgr.php">請先建立一個</a></li>'.
                          '<li>如果 OK, DP, PB \'符號\' 沒有顯示請按壞掉的圖片查看 PHP 顯示的錯誤訊息'.
                          '<li>如果瀏覽器逾時, 請按重新整理'.
                          '</ul>', //cpg1.3.0
  'select_album' => '選擇相簿', //cpg1.3.0
  'check_all' => '全選', //cpg1.3.0
  'uncheck_all' => '都不選', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => '阻擋會員',
  'user_name' => '會員名稱',
  'ip_address' => 'IP位址',
  'expiry' => '期限（空白代表永久停權）',
  'edit_ban' => '儲存修改',
  'delete_ban' => '刪除',
  'add_new' => '新增阻擋會員',
  'add_ban' => '新增',
  'error_user' => '找不到該會員的名稱!你沒打錯吧.. ', //cpg1.3.0
  'error_specify' => '你需要具體指明會員名稱或IP位址', //cpg1.3.0
  'error_ban_id' => '無效的 ID!', //cpg1.3.0
  'error_admin_ban' => '別鬧了 你無法將自己停權!', //cpg1.3.0
  'error_server_ban' => '你要將自己的伺服器停權? 哎..不要再耍寶了...', //cpg1.3.0
  'error_ip_forbidden' => '你無法禁止這個 IP - 它是 non-routable!', //cpg1.3.0
  'lookup_ip' => '查看 IP 位址', //cpg1.3.0
  'submit' => '執行!', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => '上傳檔案', //cpg1.3.0
  'custom_title' => '上傳選項表', //cpg1.3.0
  'cust_instr_1' => '你可以從下列 選擇一個上傳框 進行上傳.', //cpg1.3.0
  'cust_instr_2' => '選擇上傳框號', //cpg1.3.0
  'cust_instr_3' => '檔案上傳框: %s', //cpg1.3.0
  'cust_instr_4' => 'URI/URL 上傳框: %s', //cpg1.3.0
  'cust_instr_5' => 'URI/URL 上傳框:', //cpg1.3.0
  'cust_instr_6' => '檔案上傳框:', //cpg1.3.0
  'cust_instr_7' => '請輸入您目前需要的 每一種上傳框的數量. 然後按 \'繼續\'. ', //cpg1.3.0
  'reg_instr_1' => '無效的選項表動作.', //cpg1.3.0
  'reg_instr_2' => '現在 你可以用以下的上傳框 上傳你的檔案. 每一個上傳檔案的大小不可以超過 %s KB . ZIP 檔案上傳在 \'檔案上傳\' and \'URI/URL 上傳\' 區 .', //cpg1.3.0
  'reg_instr_3' => '如果你要上傳壓縮檔或要解壓縮, 必須使用檔案上傳框 \'解壓縮ZIP 上傳\' 區.', //cpg1.3.0
  'reg_instr_4' => '如果選擇以 URI/URL 上傳, 請輸入檔案連結路徑 如: http://www.mysite.com/images/example.jpg', //cpg1.3.0
  'reg_instr_5' => '完成選項表後,請按 \'繼續\'.', //cpg1.3.0
  'reg_instr_6' => '解壓縮ZIP 上傳:', //cpg1.3.0
  'reg_instr_7' => '檔案 上傳:', //cpg1.3.0
  'reg_instr_8' => 'URI/URL 上傳:', //cpg1.3.0
  'error_report' => '錯誤報告', //cpg1.3.0
  'error_instr' => '下列上傳遇到錯誤:', //cpg1.3.0
  'file_name_url' => '檔案 名稱/URL', //cpg1.3.0
  'error_message' => '錯誤訊息', //cpg1.3.0
  'no_post' => '檔案沒有被上傳.', //cpg1.3.0
  'forb_ext' => '不允許的副檔名.', //cpg1.3.0
  'exc_php_ini' => '檔案超過php.ini允許的大小.', //cpg1.3.0
  'exc_file_size' => '檔案超過CPG允許的大小.', //cpg1.3.0
  'partial_upload' => '只有部分上傳.', //cpg1.3.0
  'no_upload' => '沒有上傳.', //cpg1.3.0
  'unknown_code' => '未知的 PHP 上傳錯誤碼.', //cpg1.3.0
  'no_temp_name' => '沒有上傳 - 無暫存檔名.', //cpg1.3.0
  'no_file_size' => '沒有內容', //cpg1.3.0
  'impossible' => '無法傳檔.', //cpg1.3.0
  'not_image' => '這不是標準影像檔', //cpg1.3.0
  'not_GD' => '這不是 GD 副檔名.', //cpg1.3.0
  'pixel_allowance' => '影像尺寸太大了.', //cpg1.3.0
  'incorrect_prefix' => '不正確的 URI/URL 前綴', //cpg1.3.0
  'could_not_open_URI' => '無法開啟URI.', //cpg1.3.0
  'unsafe_URI' => '安全性未被認證.', //cpg1.3.0
  'meta_data_failure' => '轉換資料失敗', //cpg1.3.0
  'http_401' => '401 未被授權瀏覽', //cpg1.3.0
  'http_402' => '402 此處需付費瀏覽', //cpg1.3.0
  'http_403' => '403 目前此處關閉禁止瀏覽', //cpg1.3.0
  'http_404' => '404 伺服器沒有回應', //cpg1.3.0
  'http_500' => '500 內部伺服器錯誤', //cpg1.3.0
  'http_503' => '503 伺服器等待過久 停止服務', //cpg1.3.0
  'MIME_extraction_failure' => '無法確認 MIME.', //cpg1.3.0
  'MIME_type_unknown' => '未知的 MIME type', //cpg1.3.0
  'cant_create_write' => '無法新增寫入檔案.', //cpg1.3.0
  'not_writable' => '無法寫入.', //cpg1.3.0
  'cant_read_URI' => '無法讀取 URI/URL', //cpg1.3.0
  'cant_open_write_file' => '無法開啟URI .', //cpg1.3.0
  'cant_write_write_file' => '無法寫入URI .', //cpg1.3.0
  'cant_unzip' => '無法解壓縮.', //cpg1.3.0
  'unknown' => '未知的錯誤', //cpg1.3.0
  'succ' => '成功上傳', //cpg1.3.0
  'success' => '%s 上傳已經完成.', //cpg1.3.0
  'add' => '請按 \'繼續\' 增加檔案到相簿.', //cpg1.3.0
  'failure' => '上傳失敗', //cpg1.3.0
  'f_info' => '檔案資訊', //cpg1.3.0
  'no_place' => '先前的檔案無法被配置.', //cpg1.3.0
  'yes_place' => '先前的檔案已經配置完成.', //cpg1.3.0
  'max_fsize' => '最大允許檔案大小是 %s KB',
  'album' => '相簿',
  'picture' => '圖片', //cpg1.3.0
  'pic_title' => '圖片標題', //cpg1.3.0
  'description' => '圖片描述', //cpg1.3.0
  'keywords' => '關鍵字 (以空格區隔)',
  'err_no_alb_uploadables' => '目前尚未有相簿可以上傳圖片', //cpg1.3.0
  'place_instr_1' => '現在 請將圖片放到相簿.  你現在可以輸入這個檔案的相關資訊.', //cpg1.3.0
  'place_instr_2' => '更多的圖片需要配置. 請按 \'繼續\'.', //cpg1.3.0
  'process_complete' => '恭喜  你已經成功的將全部檔案上傳了.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'title' => '會員管理',
  'name_a' => '名稱 由小至大',
  'name_d' => '名稱 由大至小',
  'group_a' => '群組 由小至大',
  'group_d' => '群組 由大至小',
  'reg_a' => '註冊日期 由遠至近',
  'reg_d' => '註冊日期 由近至遠',
  'pic_a' => '圖片數 由小至大',
  'pic_d' => '圖片數 由大至小',
  'disku_a' => '磁碟用量 由小至大',
  'disku_d' => '磁碟用量 由大至小',
  'lv_a' => '最近來訪 由近至遠', //cpg1.3.0
  'lv_d' => '最近來訪 由遠至近', //cpg1.3.0
  'sort_by' => '會員排序依',
  'err_no_users' => '會員資料表是空的 !',
  'err_edit_self' => '您無法編輯您的個人資料, 請利用 \'我的個人資料\' 來編輯',
  'edit' => '編輯',
  'delete' => '刪除',
  'name' => '會員名稱',
  'group' => '群組',
  'inactive' => '未啟動',
  'operations' => '操作',
  'pictures' => '圖片', //cpg1.3.0
  'disk_space' => '磁碟 用量 / 限額',
  'registered_on' => '註冊日',
  'last_visit' => '最近來訪', //cpg1.3.0
  'u_user_on_p_pages' => '%d 個會員於 %d 頁',
  'confirm_del' => '確定要刪除這個會員嗎? \\n所有他的相簿及圖片都會被刪除.', //js-alert //cpg1.3.0
  'mail' => '電子郵件',
  'err_unknown_user' => '所選擇的會員並不存在 !',
  'modify_user' => '編輯會員',
  'notes' => '注意',
  'note_list' => '<li>如果不想改變目前的密碼, 請將 "密碼" 位留下空白',
  'password' => '密碼',
  'user_active' => '會員已啟動',
  'user_group' => '會員群組',
  'user_email' => '會員電子郵件',
  'user_web_site' => '會員網址',
  'create_new_user' => '建立新會員',
  'user_location' => '會員地區',
  'user_interests' => '會員興趣',
  'user_occupation' => '會員職業',
  'latest_upload' => '最新上傳', //cpg1.3.0
  'never' => '從未有', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
  'title' => '管理員工具 (調整圖片大小)', //cpg1.3.0
  'what_it_does' => '功能',
  'what_update_titles' => '從檔案名稱更新圖片標題',
  'what_delete_title' => '刪除標題',
  'what_rebuild' => '重建縮圖及調整圖片大小',
  'what_delete_originals' => '重新調整後的圖片將 取代原有的圖片',
  'file' => '檔案',
  'title_set_to' => '標題變更為',
  'submit_form' => '確認',
  'updated_succesfully' => '更新 已經完成',
  'error_create' => '產生錯誤',
  'continue' => '繼續執行其他的影像',
  'main_success' => '檔案 %s 已設為主圖',  //cpg1.3.0
  'error_rename' => '錯誤 %s 改名為 %s', 
  'error_not_found' => '找不到檔案 %s ',
  'back' => '回主頁',
  'thumbs_wait' => '更新縮圖 且/或 調整影像尺寸, 請稍待...',
  'thumbs_continue_wait' => '繼續 更新縮圖 且/或 調整影像尺寸...',
  'titles_wait' => '更新標題, 請稍待...',
  'delete_wait' => '刪除標題, 請稍待...',
  'replace_wait' => '重新調整後的圖片將 取代原有的圖片中, 請稍待...',
  'instruction' => '簡易操作說明',
  'instruction_action' => '請選擇操作',
  'instruction_parameter' => '設定參數',
  'instruction_album' => '選擇相簿',
  'instruction_press' => '請按 %s',
  'update' => '更新縮圖 且/或 調整圖片大小',
  'update_what' => '要更新什麼',
  'update_thumb' => '只有縮圖',
  'update_pic' => '只調整圖片大小',
  'update_both' => '更新縮圖且調整圖片尺寸',
  'update_number' => '每點選一次要處理的圖片數目',
  'update_option' => '(如果您遇到操作程序逾時的問題，請試著降低此設定)',
  'filename_title' => '檔案名稱 &rArr; 圖片標題', //cpg1.3.0
  'filename_how' => '如何修改檔名', 
  'filename_remove' => '刪除 .jpg 並將 _ (底線) 用空格取代', 
  'filename_euro' => '將 2003_11_23_13_20_20.jpg 改為 23/11/2003 13:20', 
  'filename_us' => '將 2003_11_23_13_20_20.jpg 改為 11/23/2003 13:20', 
  'filename_time' => '將 2003_11_23_13_20_20.jpg 改為 13:20', 
  'delete' => '刪除圖片標題或原始尺寸的圖片', //cpg1.3.0
  'delete_title' => '刪除圖片標題', //cpg1.3.0
  'delete_original' => '刪除原始尺寸的圖片',
  'delete_replace' => '刪除原始尺寸的圖片並以調整尺寸的圖片取代',
  'select_album' => '選擇相簿',
  'delete_orphans' => '刪除零散的留言(對全部的相簿)', //cpg1.3.0
  'orphan_comment' => '發現零散的留言', //cpg1.3.0
  'delete' => '刪除', //cpg1.3.0
  'delete_all' => '全部刪除', //cpg1.3.0
  'comment' => '留言: ', //cpg1.3.0
  'nonexist' => '要附加的檔案不存在 # ', //cpg1.3.0
  'phpinfo' => '顯示 phpinfo 資料', //cpg1.3.0
  'update_db' => '更新資料庫', //cpg1.3.0
  'update_db_explanation' => '如果妳有更新 CPG 檔案, 加入修改或由以前的版本升級, 請確定執行一次資料庫更新. 這將會在 CPG 資料庫新增必要的資料表 及/或 設定值.', //cpg1.3.0
);

?>
