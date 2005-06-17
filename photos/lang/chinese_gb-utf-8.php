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
// CVS version: $Id: chinese_gb-utf-8.php,v 1.7 2004/07/24 15:04:01 gaugau Exp $
// ------------------------------------------------------------------------- //

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Chinese',
  'lang_name_native' => 'ÖÐÎÄ(¼òÌå)',
  'lang_country_code' => 'zh',
  'trans_name'=> 'Neil Gerstenberg',
  'trans_email' => 'info@yellowriverarts.com',
  'trans_website' => 'http://yellowriverarts.com/',
  'trans_date' => '2004-04-20',
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
$lang_continue = '继续';
$lang_info = '讯息';
$lang_error = '错误';

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
  'random' => '随机图片', //cpg1.3.0
  'lastup' => '最新上传',
  'lastalb'=> '最近更新',
  'lastcom' => '最新留言',
  'topn' => '热门图片',
  'toprated' => '最高评分',
  'lasthits' => '最近显示',
  'search' => '搜寻结果',
  'favpics'=> '最爱图片', //cpg1.3.0
);

$lang_errors = array(
  'access_denied' => '你没有使用本页的权限.',
  'perm_denied' => '你没有权限执行此动作.',
  'param_missing' => '程式被呼叫而没有需要的参数.',
  'non_exist_ap' => '所选择的 相簿/图片 不存在 !', //cpg1.3.0
  'quota_exceeded' => '超过磁碟配额<br /><br />你的配额有 [quota]K, 已使用的有 [space]K, 加入此图片会超过配额.', //cpg1.3.0
  'gd_file_type_err' => '当使用 GD 图像程式库只容许 JPEG / PNG 图档.',
  'invalid_image' => '你上传的档案己经损坏, 或是 GD 图像程式库不能处理',
  'resize_failed' => '无法建立缩图或变更图档尺寸.',
  'no_img_to_display' => '没有图片可以显示.',
  'non_exist_cat' => '所选择的类别並不存在.',
  'orphan_cat' => '这个子类别存于一个不存在的父类别, 请先至类别管理修正这个问题.', //cpg1.3.0
  'directory_ro' => '目录 \'%s\' 无法写入, 导致图片无法删除', //cpg1.3.0
  'non_exist_comment' => '所选择的留言並不存在.',
  'pic_in_invalid_album' => '此图片存于不存在的相簿 (%s)!?', //cpg1.3.0
  'banned' => '你目前被禁止使用本站.',

  'not_with_udb' => '由于本相簿已和论坛程式整合, 此功能停止使用. 可能是目前设定不支援, 或已由论坛处理.', 
  'offline_title' => '离线', //cpg1.3.0
  'offline_text' => '相簿目前离线- 请稍后再试', //cpg1.3.0
  'ecards_empty' => '目前没有电子卡片的纪录可显示. 请检查相簿设定中是否启用电子卡片日誌!', //cpg1.3.0
  'action_failed' => '动作失败.  Coppermine 无法执行你的要求.', //cpg1.3.0
  'no_zip' => '无法执行ZIP压缩档.  请联络你的相簿管理员.', //cpg1.3.0
  'zip_type' => '你没有权限上传ZIP压缩档.', //cpg1.3.0
);

$lang_bbcode_help = '参考编码: <li>[b]<b>Bold</b>[/b]</li> <li>[i]<i>Italic</i>[/i]</li> <li>[url=http://yoursite.com/]Url Text[/url]</li> <li>[email]user@domain.com[/email]</li>'; //cpg1.3.0

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'alb_list_title' => '返回相簿目录',
  'alb_list_lnk' => '相簿目录',
  'my_gal_title' => '返回我的相簿',
  'my_gal_lnk' => '我的相簿',
  'my_prof_lnk' => '我的个人资料',
  'adm_mode_title' => '转为管理模式',
  'adm_mode_lnk' => '管理模式',
  'usr_mode_title' => '转为会员模式',
  'usr_mode_lnk' => '会员模式',
  'upload_pic_title' => '上传图片至相簿', //cpg1.3.0
  'upload_pic_lnk' => '上传图片', //cpg1.3.0
  'register_title' => '建立会员帐号',
  'register_lnk' => '注册',
  'login_lnk' => '登入',
  'logout_lnk' => '登出',
  'lastup_lnk' => '最新上传',
  'lastcom_lnk' => '最新留言',
  'topn_lnk' => '热门图片',
  'toprated_lnk' => '最高评分',
  'search_lnk' => '搜寻',
  'fav_lnk' => '我的最爱',
  'memberlist_title' => '显示会员列表', //cpg1.3.0
  'memberlist_lnk' => '会员列表', //cpg1.3.0
  'faq_title' => '相簿的常见问题解答 &quot;Coppermine&quot;', //cpg1.3.0
  'faq_lnk' => '常见问题解答', //cpg1.3.0
);

$lang_gallery_admin_menu = array(
  'upl_app_lnk' => '核准上传',
  'config_lnk' => '设定',
  'albums_lnk' => '相簿',
  'categories_lnk' => '类别',
  'users_lnk' => '会员',
  'groups_lnk' => '群组',
  'comments_lnk' => '观看留言', //cpg1.3.0
  'searchnew_lnk' => '整批加入图片', //cpg1.3.0
  'util_lnk' => '管理员工具箱', //cpg1.3.0
  'ban_lnk' => '停权会员',
  'db_ecard_lnk' => '显示电子卡片', //cpg1.3.0
);

$lang_user_admin_menu = array(
  'albmgr_lnk' => '建立/排序 我的相簿',
  'modifyalb_lnk' => '编辑我的相簿',
  'my_prof_lnk' => '我的个人资料',
);

$lang_cat_list = array(
  'category' => '类别',
  'albums' => '相簿',
  'pictures' => '图片', //cpg1.3.0
);

$lang_album_list = array(
  'album_on_page' => '%d 相簿在 %d 页',
);

$lang_thumb_view = array(
  'date' => '日期',
  //Sort by filename and title
  'name' => '档名',
  'title' => '标题',
  'sort_da' => '依日期排序 由远至近',
  'sort_dd' => '依日期排序 由近至远',
  'sort_na' => '依名称排序 由小至大',
  'sort_nd' => '依名称排序 由大至小',
  'sort_ta' => '依标题排序 由小至大',
  'sort_td' => '依标题排序 由大至小',
  'download_zip' => '下载成 Zip 档', //cpg1.3.0
  'pic_on_page' => '%d 图片在 %d 页',
  'user_on_page' => '%d 会员在 %d 页', //cpg1.3.0
);

$lang_img_nav_bar = array(
  'thumb_title' => '返回缩图页',
  'pic_info_title' => '显示/隐藏 图片资讯', //cpg1.3.0
  'slideshow_title' => '连续播放',
  'ecard_title' => '把图片以电子卡片寄出', //cpg1.3.0
  'ecard_disabled' => '电子卡片功能目前停用',
  'ecard_disabled_msg' => '你没有权限寄电子卡片', //js-alert //cpg1.3.0
  'prev_title' => '观看前一张图片', //cpg1.3.0
  'next_title' => '观看下一张图片', //cpg1.3.0
  'pic_pos' => '图片 %s/%s', //cpg1.3.0
);

$lang_rate_pic = array(
  'rate_this_pic' => '对图片评分', //cpg1.3.0
  'no_votes' => '(还没有人评分)',
  'rating' => '(目前得分 : %s / 5 于 %s 个评分)',
  'rubbish' => '昏倒 不看也罢',
  'poor' => '有点差劲',
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
  CRITICAL_ERROR => '紧急错误',
  'file' => '档案: ',
  'line' => '行数: ',
);

$lang_display_thumbnails = array(
  'filename' => '档案名称 : ',
  'filesize' => '档案大小 : ',
  'dimensions' => '影像尺寸 : ',
  'date_added' => '加入日期 : ', //cpg1.3.0
);

$lang_get_pic_data = array(
  'n_comments' => '%s 个留言',
  'n_views' => '%s 次观看',
  'n_votes' => '(%s 个评分)',
);

$lang_cpg_debug_output = array(
  'debug_info' => '除错讯息', //cpg1.3.0
  'select_all' => '全选', //cpg1.3.0
  'copy_and_paste_instructions' => '如果你要在Coppermine支援论坛上要求协助, 复制並贴上 这个除错讯息到你的发表文章内. 发表文章前请确定用***取代你的密码.', //cpg1.3.0
  'phpinfo' => '显示php讯息', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => '预设语言', //cpg1.3.0
  'choose_language' => '选择你的语言', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => '预设佈景主题', //cpg1.3.0
  'choose_theme' => '选择佈景主题', //cpg1.3.0
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
  'Question' => '疑问',
  'Very Happy' => '很高兴',
  'Smile' => '微笑',
  'Sad' => '悲哀',
  'Surprised' => '惊讶',
  'Shocked' => '震惊',
  'Confused' => '昏倒',
  'Cool' => '很棒',
  'Laughing' => '发笑',
  'Mad' => '发狂',
  'Razz' => '嘲笑',
  'Embarassed' => '尴尬',
  'Crying or Very sad' => '嚎哭',
  'Evil or Very Mad' => '恶毒',
  'Twisted Evil' => '古怪',
  'Rolling Eyes' => '旋转的眼睛',
  'Wink' => '眨眼',
  'Idea' => '主意',
  'Arrow' => '箭头',
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
  0 => '正离开管理模式...',
  1 => '正进入管理模式...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => '您需要给相簿一个名称 !', //js-alert
  'confirm_modifs' => '确定要做这些修改吗 ?', //js-alert
  'no_change' => '您没有做任何改变 !', //js-alert
  'new_album' => '新相簿',
  'confirm_delete1' => '确定要删除此相簿吗 ?', //js-alert
  'confirm_delete2' => '\n所有图片及留言都会删除 !', //js-alert
  'select_first' => '请先选择一个相簿', //js-alert
  'alb_mrg' => '相簿管理员',
  'my_gallery' => '* 我的相簿 *',
  'no_category' => '* 没有类别 *',
  'delete' => '删除',
  'new' => '新增',
  'apply_modifs' => '修改',
  'select_category' => '选择类别',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => '\'%s\'操作所需要的参数並未提供 !',
  'unknown_cat' => '所选择的类别並不存在于资料库',
  'usergal_cat_ro' => '会员相簿类别不能删除 !',
  'manage_cat' => '类别管理',
  'confirm_delete' => '确定要删除此类别吗', //js-alert
  'category' => '类别',
  'operations' => '操作',
  'move_into' => '搬移至',
  'update_create' => '更新/建立 类别',
  'parent_cat' => '父类别',
  'cat_title' => '类别标题',
  'cat_thumb' => '类别缩图', //cpg1.3.0
  'cat_desc' => '类别描述',
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
  'title' => '设定',
  'restore_cfg' => '回复原始设定',
  'save_cfg' => '储存新设定',

  'notes' => '注意',
  'info' => '讯息',
  'upd_success' => '设定已更新',
  'restore_success' => '原始设定已回复',
  'name_a' => '排序依名称 由小至大',
  'name_d' => '排序依名称 由大至小',
  'title_a' => '排序依标题 由小至大',
  'title_d' => '排序依标题 由大至小',
  'date_a' => '排序依日期 由远至近',
  'date_d' => '排序依日期 由近至远',
  'th_any' => '最大外观',
  'th_ht' => '高度',
  'th_wd' => '宽度',
  'label' => '标籤', //cpg1.3.0
  'item' => '项目', //cpg1.3.0
  'debug_everyone' => '任何人', //cpg1.3.0
  'debug_admin' => '管理员专用', //cpg1.3.0
        );

if (defined('CONFIG_PHP')) $lang_config_data = array(
  '基本设定',
  array('相簿名称', 'gallery_name', 0),
  array('相簿描述', 'gallery_description', 0),
  array('相簿管理员电子邮件', 'gallery_admin_email', 0),
  array('在电子卡片内显示\'观看更多图片\'的网址', 'ecards_more_pic_target', 0),
  array('相簿目前离线中', 'offline', 1), //cpg1.3.0
  array('电子卡片日誌', 'log_ecards', 1), //cpg1.3.0
  array('允许将最爱的图片下载成ZIP档', 'enable_zipdownload', 1), //cpg1.3.0

  '语系, 佈景 &amp; 文字编码设定',
  array('语言', 'lang', 5),
  array('佈景', 'theme', 6),
  array('显示语言列表', 'language_list', 1), //cpg1.3.0
  array('显示语言国旗', 'language_flags', 8), //cpg1.3.0
  array('显示 &quot;重设&quot; 在语言选择', 'language_reset', 1), //cpg1.3.0
  array('显示佈景列表', 'theme_list', 1), //cpg1.3.0
  array('显示 &quot;重设&quot; 在佈景选择', 'theme_reset', 1), //cpg1.3.0
  array('显示 FAQ', 'display_faq', 1), //cpg1.3.0
  array('显示 bbcode help', 'show_bbcode_help', 1), //cpg1.3.0
  array('文字编码', 'charset', 4), //cpg1.3.0

  '相簿目录显示',
  array('主要表格宽度 (像素或 %)', 'main_table_width', 0),
  array('同一层次的子类别显示个数', 'subcat_level', 0),
  array('相簿显示个数', 'albums_per_page', 0),
  array('相簿目录页相簿栏数', 'album_list_cols', 0),
  array('缩图像素', 'alb_list_thumb_size', 0),
  array('主页的内容', 'main_page_layout', 0),
  array('显示分类中第一层的相簿缩图','first_level',1),

  '缩图显示',
  array('缩图页栏数', 'thumbcols', 0),
  array('缩图页列数', 'thumbrows', 0),
  array('表格显示最高个数', 'max_tabs', 10), //cpg1.3.0
  array('显示图片说明于缩图下方 (附加的标题)', 'caption_in_thumbview', 1), //cpg1.3.0
  array('显示观看次数于缩图下方', 'views_in_thumbview', 1), //cpg1.3.0
  array('显示留言数于缩图下方', 'display_comment_count', 1),
  array('显示上传者名称于缩图下方', 'display_uploader', 1), //cpg1.3.0
  array('图片的原始排序次序', 'default_sort_order', 3), //cpg1.3.0
  array('\'热门投票\'需要最少投票数', 'min_votes_for_rating', 0), //cpg1.3.0

  '图片显示 &amp; 留言设定',
  array('图片显示的表格宽度 (像素或 %)', 'picture_table_width', 0), //cpg1.3.0
  array('图片资讯预设显示', 'display_pic_info', 1), //cpg1.3.0
  array('留言内过滤不良词彙', 'filter_bad_words', 1),
  array('留言可以使用笑脸图示', 'enable_smilies', 1),
  array('允许会员在同一张图片 连续发表留言(关闭灌水保护)', 'disable_comment_flood_protect', 1), //cpg1.3.0
  array('图片描述内容的最大长度', 'max_img_desc_length', 0),
  array('描述内容的最大字数', 'max_com_wlength', 0),
  array('留言的最大行数', 'max_com_lines', 0),
  array('留言的最大长度', 'max_com_size', 0),
  array('显示图片预览列', 'display_film_strip', 1),
  array('图片预览列的图片数', 'max_film_strip_items', 0),
  array('有留言时 用电子邮件通知管理员', 'email_comment_notification', 1), //cpg1.3.0
  array('连续拨放间隔几 毫秒(1 秒 = 1000 毫秒)', 'slideshow_interval', 0), //cpg1.3.0

  '图片及缩图设定', //cpg1.3.0
  array('JPEG 格式品质', 'jpeg_qual', 0),
  array('缩图最大尺寸 <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0), //cpg1.3.0
  array('使用尺寸 ( 宽、高或缩图最大边长 )<b>**</b>', 'thumb_use', 7),
  array('建立中级图片','make_intermediate',1),
  array('中级图片/影片最大尺寸 <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0), //cpg1.3.0
  array('上传图档的最大限制 (KB)', 'max_upl_size', 0), //cpg1.3.0
  array('上传图片/影片最大宽或高尺寸 (像素)', 'max_upl_width_height', 0), //cpg1.3.0

  '图片和缩图的进阶设定', //cpg1.3.0
  array('显示私人相簿图片给未登入会员','show_private',1), //cpg1.3.0
  array('档案名称不接受的字符', 'forbiden_fname_char',0), //cpg1.3.0
  //array('上传图档可接受的副档名', 'allowed_file_extensions',0), //cpg1.3.0
  array('可接受的图片档类型', 'allowed_img_types',0), //cpg1.3.0
  array('可接受的影片档类型', 'allowed_mov_types',0), //cpg1.3.0
  array('可接受的声音档类型', 'allowed_snd_types',0), //cpg1.3.0
  array('可接受的文件档类型', 'allowed_doc_types',0), //cpg1.3.0
  array('建立缩图的方法','thumb_method',2), //cpg1.3.0
  array('ImageMagick \'convert\' 程式的路径 (例如 /usr/bin/X11/)', 'impath', 0), //cpg1.3.0
  //array('可接受的图档类型(只对 ImageMagick 有效)', 'allowed_img_types',0), //cpg1.3.0
  array('ImageMagick 的命令列选项', 'im_options', 0), //cpg1.3.0
  array('读取 JPEG 档案的 EXIF 资料', 'read_exif_data', 1), //cpg1.3.0
  array('读取 JPEG 档案的 IPTC 资料', 'read_iptc_data', 1), //cpg1.3.0
  array('相簿路径 <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0), //cpg1.3.0
  array('会员图档路径 <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0), //cpg1.3.0
  array('中级图档的前置字元 <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0), //cpg1.3.0
  array('缩图档的前置字元 <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0), //cpg1.3.0
  array('放置图档目录的预设权限', 'default_dir_mode', 0), //cpg1.3.0
  array('上传图片的预设权限', 'default_file_mode', 0), //cpg1.3.0

  '会员设定',
  array('允许新会员注册', 'allow_user_registration', 1),
  array('注册需要电子邮件验证', 'reg_requires_valid_email', 1),
  array('有使用者注册时 用电子邮件通知管理员', 'reg_notify_admin_email', 1), //cpg1.3.0
  array('允许两个会员使用同一个电子邮件地址', 'allow_duplicate_emails_addr', 1),
  array('会员可以有私人的相簿 (注意: 如果你切换 是到否 任何目前私人相簿将变成公开相簿)', 'allow_private_albums', 1), //cpg1.3.0
  array('有会员上传档案等待核准时 通知管理员', 'upl_notify_admin_email', 1), //cpg1.3.0
  array('允许登入的会员查看会员列表', 'allow_memberlist', 1), //cpg1.3.0

  '影像描述的自订栏位 (如果不使用请留下空白)',
  array('栏位 1 名称', 'user_field1_name', 0),
  array('栏位 2 名称', 'user_field2_name', 0),
  array('栏位 3 名称', 'user_field3_name', 0),
  array('栏位 4 名称', 'user_field4_name', 0),

  'Cookies settings',
  array('使用的 cookie 名称 (与论坛程式整合时, 确定它和论坛的cookie不同)', 'cookie_name', 0),
  array('使用的 cookie 路径', 'cookie_path', 0),

  '其他设定',
  array('启动除错模式', 'debug_mode', 9), //cpg1.3.0
  array('在除错模式时显示提示', 'debug_notice', 1), //cpg1.3.0

  '<br /><div align="left"><a name="notice1"></a>(*) 若相簿内有图片, 标示有 * 的栏位表示不可更改.<br />
  <a name="notice2"></a>(**) 改变这个设定只影响已经加入的档案, 如果那些档案已经在相簿内了,这个设定不必改变. 无论如何,你可以从 管理员功能选单里 调整既有的档案,从 &quot;<a href="util.php">管理员工具箱</a> (调整图片尺寸)&quot; </div><br />', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => '寄出电子卡片', //cpg1.3.0
  'ecard_sender' => '寄件者', //cpg1.3.0
  'ecard_recipient' => '收件者', //cpg1.3.0
  'ecard_date' => '日期', //cpg1.3.0
  'ecard_display' => '显示电子卡片', //cpg1.3.0
  'ecard_name' => '名称', //cpg1.3.0
  'ecard_email' => '电子邮件地址', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => '升幂', //cpg1.3.0
  'ecard_descending' => '降幂', //cpg1.3.0
  'ecard_sorted' => '排序', //cpg1.3.0
  'ecard_by_date' => '依日期', //cpg1.3.0
  'ecard_by_sender_name' => '依寄件者名称', //cpg1.3.0
  'ecard_by_sender_email' => '依寄件者邮件', //cpg1.3.0
  'ecard_by_sender_ip' => '依寄件者的 IP 位址', //cpg1.3.0
  'ecard_by_recipient_name' => '依收件者名称', //cpg1.3.0
  'ecard_by_recipient_email' => '依收件者邮件', //cpg1.3.0
  'ecard_number' => '显示纪录 %s 到 %s 在 %s', //cpg1.3.0
  'ecard_goto_page' => '到页次', //cpg1.3.0
  'ecard_records_per_page' => '页次纪录', //cpg1.3.0
  'check_all' => '全选', //cpg1.3.0
  'uncheck_all' => '都不选', //cpg1.3.0
  'ecards_delete_selected' => '删除已经选择的卡片', //cpg1.3.0
  'ecards_delete_confirm' => '你确定要删除纪录? 请点选!', //cpg1.3.0
  'ecards_delete_sure' => '我确定', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => '请输入你的名字和留言',
  'com_added' => '您的留言已经加入',
  'alb_need_title' => '您必须为相簿提供一个标题 !',
  'no_udp_needed' => '没有更新的必要',
  'alb_updated' => '相簿已经更新',
  'unknown_album' => '所选择的相簿不存在或您没有权限上传档案到此相簿',
  'no_pic_uploaded' => '没有档案被上传 !<br /><br />如果您确定有选择档案上传, 请检查伺服器是否允许上传档案...', //cpg1.3.0
  'err_mkdir' => '无法建立目录 %s !',
  'dest_dir_ro' => '目录 %s 无法写入 !',
  'err_move' => '无法搬移 %s 到 %s !',
  'err_fsize_too_large' => '您上传的图片太大 (不能超过 %s x %s) !', //cpg1.3.0
  'err_imgsize_too_large' => '您上传的图档太大 (不能超过 %s KB) !',
  'err_invalid_img' => '上传的档案並不是容许的图片格式 !',
  'allowed_img_types' => '您只可以上传 %s 张图片.',
  'err_insert_pic' => '档案 \'%s\' 无法加入此相簿 ', //cpg1.3.0
  'upload_success' => '档案上传完成!<br /><br />当管理者核准后就可以看到档案了.', //cpg1.3.0
  'notify_admin_email_subject' => '%s - 上传档案通知', //cpg1.3.0
  'notify_admin_email_body' => '%s有上传档案 需要你的核准. 请查阅 %s', //cpg1.3.0
  'info' => '讯息',
  'com_added' => '留言已加入',
  'alb_updated' => '相簿已经更新',
  'err_comment_empty' => '留言是空的 !',
  'err_invalid_fext' => '只有下列的副档名才容许 : <br /><br />%s.',
  'no_flood' => '抱歉, 此图片最后一个留言是您提供<br /><br />您可以修改您的留言', //cpg1.3.0
  'redirect_msg' => '页面转移中.<br /><br /><br />按 \'继续\' 如果页面没有自动刷新',
  'upl_success' => '已经加入您的图片', //cpg1.3.0
  'email_comment_subject' => '已经有留言发表在网路相簿', //cpg1.3.0
  'email_comment_body' => '已经有留言发表在您的相簿.请查阅', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => '说明',
  'fs_pic' => '原图',
  'del_success' => '完成删除',
  'ns_pic' => '标准尺寸图片',
  'err_del' => '无法删除',
  'thumb_pic' => '缩图',
  'comment' => '留言',
  'im_in_alb' => '相簿内图片',
  'alb_del_success' => '相簿 \'%s\' 已删除',
  'alb_mgr' => '相簿管理',
  'err_invalid_data' => '接收到不正确的资料于 \'%s\'',
  'create_alb' => '建立相簿 \'%s\'',
  'update_alb' => '更新相簿 \'%s\' 标题为 \'%s\' 索引为 \'%s\'',
  'del_pic' => '删除图片', //cpg1.3.0
  'del_alb' => '删除相簿',
  'del_user' => '删除会员',
  'err_unknown_user' => '所选择的会员不存在 !',
  'comment_deleted' => '留言已删除',
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
  'confirm_del' => '确定要删除此图片吗 ? \\n留言也会被删除.', //js-alert //cpg1.3.0
  'del_pic' => '删除此图片', //cpg1.3.0
  'size' => '%s x %s 像素',
  'views' => '%s 次',
  'slideshow' => '连续播放',
  'stop_slideshow' => '停止播放',
  'view_fs' => '点选图片以观看原图',
  'edit_pic' => '编辑说明', //cpg1.3.0
  'crop_pic' => '裁剪与旋转', //cpg1.3.0
);

$lang_picinfo = array(
  'title' =>'图片资讯', //cpg1.3.0
  'Filename' => '档案名称',
  'Album name' => '相簿名称',
  'Rating' => '评分 (%s 次投票)',
  'Keywords' => '关键字',
  'File Size' => '档案大小',
  'Dimensions' => '尺寸',
  'Displayed' => '显示',
  'Camera' => '相机',
  'Date taken' => '拍摄日期',
  'Aperture' => '光圈',
  'Exposure time' => '曝光时间',
  'Focal length' => '焦距',
  'Comment' => '留言',
  'addFav'=>'加到我的最爱', //cpg1.3.0
  'addFavPhrase'=>'我的最爱', //cpg1.3.0
  'remFav'=>'从我的最爱移除', //cpg1.3.0
  'iptcTitle'=>'IPTC 标题', //cpg1.3.0
  'iptcCopyright'=>'IPTC 版权', //cpg1.3.0
  'iptcKeywords'=>'IPTC 关键字', //cpg1.3.0
  'iptcCategory'=>'IPTC 类别', //cpg1.3.0
  'iptcSubCategories'=>'IPTC 子类别', //cpg1.3.0
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => '编辑此留言',
  'confirm_delete' => '确定要删除此留言 ?', //js-alert
  'add_your_comment' => '加入你的留言',
  'name'=>'名称',
  'comment'=>'留言',
  'your_name' => '留言',
);

$lang_fullsize_popup = array(
  'click_to_close' => '点选图片以关闭视窗',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => '寄出 电子卡片',
  'invalid_email' => '<b>警告</b> : 不正确的电子邮件地址 !',
  'ecard_title' => '%s 寄来给你的 电子卡片',
  'error_not_image' => '电子卡片只能寄出图片.', //cpg1.3.0
  'view_ecard' => '如果 电子卡片 无法正确显示, 请按此连结',
  'view_more_pics' => '按此连结看更多图片 !',
  'send_success' => '你的 电子卡片 寄出',
  'send_failed' => '抱歉, 本伺服器无法为你寄出 电子卡片...',
  'from' => '由',
  'your_name' => '你的名称',
  'your_email' => '你的电子邮件地址',
  'to' => '给',
  'rcpt_name' => '收件者名称',
  'rcpt_email' => '收件者电子邮件地址',
  'greetings' => '问候语',
  'message' => '讯息内容',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'File&nbsp;info', //cpg1.3.0
  'album' => '相簿',
  'title' => '标题',
  'desc' => '描述',
  'keywords' => '关键字',
  'pic_info_str' => '%s &times; %s - %s KB - %s 次观看 - %s 次评分',
  'approve' => '核准图片', //cpg1.3.0
  'postpone_app' => '延迟核准',
  'del_pic' => '删除图片', //cpg1.3.0
  'read_exif' => '再次读取EXIF 讯息', //cpg1.3.0
  'reset_view_count' => '重设观看计数器',
  'reset_votes' => '重设评分',
  'del_comm' => '删除留言',
  'upl_approval' => '核准上传',
  'edit_pics' => '编辑图片', //cpg1.3.0
  'see_next' => '观看下一张图片', //cpg1.3.0
  'see_prev' => '观看前一张图片', //cpg1.3.0
  'n_pic' => '%s 张图片', //cpg1.3.0
  'n_of_pic_to_disp' => '图片显示数量', //cpg1.3.0
  'apply' => '修改', //cpg1.3.0
  'crop_title' => 'Coppermine 图片编辑器', //cpg1.3.0
  'preview' => '预览', //cpg1.3.0
  'save' => '存档', //cpg1.3.0
  'save_thumb' =>'存成缩图', //cpg1.3.0
  'sel_on_img' =>'动作已经完成!', //js-alert //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => '常见问题解答', //cpg1.3.0
  'toc' => '目录', //cpg1.3.0
  'question' => '问题: ', //cpg1.3.0
  'answer' => '解答: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  '一般性问题与解答', //cpg1.3.0
  array('为什么要注册?', '管理员决定使用者是否需要注册. 注册成为会员可获得额外的功能,如 上传档案,有 我的最爱列表, 对影像评分及发表留言 等等.', 'allow_user_registration', '0'), //cpg1.3.0
  array('如何注册?', '到 &quot;注册&quot; 去填写栏位内的资料 (部分栏位是选填的).<br />如果管理员开启Email 启用功能 ,在你确认送出注册资料后 你会收到一封认证信 寄到你所填写的信箱内, 里面会说明如何启用你的会员资格. 会员登入前 必须先完成启用动作.', 'allow_user_registration', '1'), //cpg1.3.0
  array('如何登入?', '到 &quot;登入&quot;, 填入你的会员名称及密码 且勾选 &quot;记住我&quot; 下次你再来的时候就会自动登入了.<br /><b>注意:如果你点选 &quot;记住我 Me&quot; ,Cookies 功能必须开启,且本站的cookie存在你的电脑中..</b>', 'offline', 0), //cpg1.3.0
  array('为何无法登入?', '你已经注册並启用帐号了吗(回复认证邮件的连结)?. 那个连结将会启用你的帐号. 其他登入问题 请联络网站管理员.', 'offline', 0), //cpg1.3.0
  array('忘记密码了怎么办 ?', '如果这个网站有 &quot;忘记密码了&quot; 的连结,就按它. 不然就联络网站管理员 请他给你一个新的密码.', 'offline', 0), //cpg1.3.0
  array('我的email变更了怎么办 ?', '只要登入 並且到 &quot;我的个人资料&quot; 变更你的电子邮件地址就可以了', 'offline', 0), //cpg1.3.0
  array('如何把图片存到  &quot;我的最爱 &quot;?', '点选图片並且点按 &quot;影像资讯&quot; 连结 (<img src="images/info.gif" width="16" height="16" border="0" alt="Picture information" />); 在影像资讯设定里面按 &quot;加入我的最爱&quot;.<br />管理员可能有预设&quot;影像资讯; .<br />注意:Cookies 功能必须开启,且本站的cookie存在你的电脑中.', 'offline', 0), //cpg1.3.0
  array('如何对图片评分 ?', '点按该影像缩图,在影像底下可以点选你的评分.', 'offline', 0), //cpg1.3.0
  array('如何发表留言 ?', '点按该影像缩图,在影像底下可以发表留言.', 'offline', 0), //cpg1.3.0
  array('如何上传图片 ?', '到 &quot;上传图片&quot;並选择你要上传到哪一个相簿,按 &quot;浏览&quot; 且点选要上传的图片 按 &quot;开启&quot; (你可以加入影像标题及描述) 然后按 &quot;确认&quot;', 'allow_private_albums', 0), //cpg1.3.0
  array('要从哪里上传图片 ?', '你可以上传图片在 &quot;我的相簿&quot;. 管理员可能允许你上传图片到主相簿内.', 'allow_private_albums', 0), //cpg1.3.0
  array('哪种格式或大小的影像可以上传?', '格式跟大小 (jpg,gif,..etc.) 根据管理员的设定.', 'offline', 0), //cpg1.3.0
  array('什么是 &quot;我的相簿&quot;?', '&quot;我的相簿&quot; 是个人的相簿,让会员可以上传及管里影像.', 'allow_private_albums', 0), //cpg1.3.0
  array('如何新增,修改 或删除相簿 从 &quot;我的相簿&quot;?', '你必须在 &quot;管理模式&quot;<br />到 &quot;新增/排序 我的相簿&quot;按 &quot;新增New&quot;. 变更 &quot;新相簿&quot; 到你要的名称.<br />你可以对你的每一个相簿重新命名.<br />按 &quot;修改;.', 'allow_private_albums', 0), //cpg1.3.0
  array('我要如何禁止其他会员看我的相簿?', '你必须在 &quot;管理模式&quot;<br />到 &quot;变更我的相簿. 在 &quot;更新相簿&quot; 栏位, 选择你要变更的相簿.<br />在这里, 你可以变更相簿名称 描述 缩图 ,及限制观看 留言 评分 的权限.<br />按 &quot;更新相簿&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('如何观看其他会员的相簿?', '到 &quot;相簿目录&quot; 选择 &quot;会员相簿&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('什么是 cookies?', 'Cookies 是网站放在你电脑中的文字资料.<br />Cookies 通常让使用者再次回到网站时自动登入 並记录其他设定资料.', 'offline', 0), //cpg1.3.0
  array('在哪里可以取得这个相簿程式?', 'Coppermine 是基于GNU GPL的免费多媒体相簿. 它是全功能的 且支援不同的平台. 请到<a href="http://coppermine.sf.net/">Coppermine 的网站</a> 取得更多的资讯 或是下载它.', 'offline', 0), //cpg1.3.0

  '网站导引', //cpg1.3.0
  array('什么是 &quot;相簿目录 &quot;?', '这将显示整个相簿 包含每一个分类. 缩图可以连结到类别中.', 'offline', 0), //cpg1.3.0
  array('什么是 &quot;我的相簿 &quot;?', '这项功能让会员建立自己的相簿,可增加,删除,修改相簿. 並且可上传档案到相簿里.', 'allow_private_albums', 0), //cpg1.3.0
  array('有什么差异在 &quot;管理模式&quot; 和 &quot;会员模式&quot;?', '这项功能, 在管理模式时, 允许会员修改他们自己的相簿 (如果管理员允许的话).', 'allow_private_albums', 0), //cpg1.3.0
  array('什么是 &quot;上传图片 &quot;?', '这项功能允许会员上传影像(档案大小及格式依管理员设定) 到指定的相簿.', 'allow_private_albums', 0), //cpg1.3.0
  array('什么是 &quot;最新上传 &quot;?', '这项功能显示最新上传到相簿的档案.', 'offline', 0), //cpg1.3.0
  array('什么是 &quot;最新留言 &quot;?', '这项功能会员对影像发表的最新留言.', 'offline', 0), //cpg1.3.0
  array('什么是 &quot;热门图片 &quot;?', '这项功能显示被观看最多次的影像,不论是会员或访客.', 'offline', 0), //cpg1.3.0
  array('什么是 &quot;最高评分 &quot;?', '这项功能显示会员评分最高的影像, 显示平均分数(例如: 五个会员各给一个评分 <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: 影像将有平均评分 <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;五个会员评分从 1 到 5 (1,2,3,4,5) 平均结果将是 <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />评分从 <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (最佳) 到 <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (最差).', 'offline', 0), //cpg1.3.0
  array('什么是 &quot;我的最爱 &quot;?', '这项功能让会员储存喜爱的影像,需要有cookie资讯.', 'offline', 0), //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => '忘记密码了', //cpg1.3.0
  'err_already_logged_in' => '你已经登入了!', //cpg1.3.0
  'enter_username_email' => '输入你的会员名称或 email ', //cpg1.3.0
  'submit' => '确认', //cpg1.3.0
  'failed_sending_email' => '无法寄出密码提醒邮件 !', //cpg1.3.0
  'email_sent' => '已经将你的会员名称与密码寄到 %s', //cpg1.3.0
  'err_unk_user' => '没有这个会员!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - 密码提醒', //cpg1.3.0
  'passwd_reminder_body' => '您的登入资料如下:
Username: %s
Password: %s
按 %s 登入.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => '群组名称',
  'disk_quota' => '磁碟配额',
  'can_rate' => '容许为图片评分', //cpg1.3.0
  'can_send_ecards' => '容许寄出卡片',
  'can_post_com' => '容许贴出留言',
  'can_upload' => '容许上传档案', //cpg1.3.0
  'can_have_gallery' => '容许有个人相簿',
  'apply' => '修改',
  'create_new_group' => '建立新群组',
  'del_groups' => '删除所选择的群组',
  'confirm_del' => '警告, 当删除了一个群组, 属于该群组的用户将被转移至 \'Registered\' 群组中 !\n\nn确定要删除 ?', //js-alert //cpg1.3.0
  'title' => '管理会员群组',
  'approval_1' => '公开相簿上传核准 (1)',
  'approval_2' => '私人相簿上传核准 (2)',
  'upload_form_config' => '上传格式设定', //cpg1.3.0
  'upload_form_config_values' => array( '上传一个档案', '多档上传', '只上传URI ', '只上传ZIP ', 'File-URI', 'File-ZIP', 'URI-ZIP', 'File-URI-ZIP'), //cpg1.3.0
  'custom_user_upload'=>'会员可用的上传框数量?', //cpg1.3.0
  'num_file_upload'=>'最大/实际 档案 上传框数量', //cpg1.3.0
  'num_URI_upload'=>'最大/实际 URI 上传框数量', //cpg1.3.0
  'note1' => '<b>(1)</b> 上传图片至公开相簿需管理员核准',
  'note2' => '<b>(2)</b> 上传图片至私人相簿需管理员核准',
  'notes' => '注意',
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => '欢 迎 !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => '确定要删除这相簿 ? \\n所有图片及留言都会删除.', //js-alert //cpg1.3.0
  'delete' => '删除',
  'modify' => '属性',
  'edit_pics' => '编辑', //cpg1.3.0
);

$lang_list_categories = array(
  'home' => '相簿首页',
  'stat1' => '<b>[pictures]</b> 张影像于 <b>[albums]</b> 个相簿及 <b>[cat]</b> 个类别, 有 <b>[comments]</b> 个留言, 被观看 <b>[views]</b> 次', //cpg1.3.0
  'stat2' => '<b>[pictures]</b> 张影像于 <b>[albums]</b> 个相簿, 被观看 <b>[views]</b> 次', //cpg1.3.0
  'xx_s_gallery' => '%s\'s 相簿',
  'stat3' => '<b>[pictures]</b> 张影像于 <b>[albums]</b> 个相簿, 有 <b>[comments]</b> 个留言, 被观看 <b>[views]</b> 次', //cpg1.3.0
);

$lang_list_users = array(
  'user_list' => '会员列表',
  'no_user_gal' => '还没有会员相簿',
  'n_albums' => '%s 个相簿',
  'n_pics' => '%s 张影像', //cpg1.3.0
);

$lang_list_albums = array(
  'n_pictures' => '%s 张影像', //cpg1.3.0
  'last_added' => ', 最新影像于 %s',
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => '登入',
  'enter_login_pswd' => '输入会员名称和密码',
  'username' => '会员名称',
  'password' => '密码',
  'remember_me' => '记住我',
  'welcome' => '欢迎 %s ...',
  'err_login' => '*** 无法登入. 请重试 ***',
  'err_already_logged_in' => '您已经登入 !',
  'forgot_password_link' => '忘记密码了', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => '登出',
  'bye' => '再见 %s ...',
  'err_not_loged_in' => '您还没有登入 !',
);

// ------------------------------------------------------------------------- //
// File phpinfo.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP 资讯', //cpg1.3.0
  'explanation' => '这是由PHP-function 产生 <a href="http://www.php.net/phpinfo">phpinfo()</a>, Copermine 截取部分内容显示.', //cpg1.3.0
  'no_link' => '其他人看到你的 phpinfo 会有安全上的风险, 这就是为何 当你以管理员身分登入时才会看到此页的原因. 你不能将本页的连结给其他人, 因为它们将会遇到存取错误.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => '更新相簿 %s',
  'general_settings' => '一般设定',
  'alb_title' => '相簿标题',
  'alb_cat' => '相簿类别',
  'alb_desc' => '相簿描述',
  'alb_thumb' => '相簿缩图',
  'alb_perm' => '相簿权限',
  'can_view' => '相簿可观看',
  'can_upload' => '访客可上传图片',
  'can_post_comments' => '访客可发表留言',
  'can_rate' => '访客可为图片评分',
  'user_gal' => '会员相簿',
  'no_cat' => '* 没有类别 *',
  'alb_empty' => '相簿是空的',
  'last_uploaded' => '最近上传',
  'public_alb' => '任何人 (公开相簿)',
  'me_only' => '只有我',
  'owner_only' => '只有相簿拥有人 (%s) ',
  'groupp_only' => '群组 \'%s\' 会员',
  'err_no_alb_to_modify' => '资料库内没有您可修改的相簿.',
  'update' => '更新相簿', //cpg1.3.0
  'notice1' => '(*) 根据 %s群组%s 设定', //cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => '抱歉, 您已经为此图片评分', //cpg1.3.0
  'rate_ok' => '您的评分已经被接受',
  'forbidden' => '你不能对你自己的图片评分.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
 {SITE_NAME} 的管理员会尽快整理会引起反感的资料, 但我们不可能审查每一份文件. 因此您必需同意所有文件只是代表作者的立场及意见, 不代表管理人员的立场 (除了由他们贴出) 並不负任何法律责任.<br />
<br />
您必需同意不可张贴任何色情, 暴力, 不良, 不正当, 不健康, 妨害国家安全, 或任何可能违法的文件.  {SITE_NAME} 人员在任何时候都有权过滤並编辑您张贴的内容. 並且会员留在本站内的资料已存在资料库中. 末经您的同意, 我们不会将您的资料转给其他人使用, 不过我们不会为任何因骇客行为而外洩的资料负任何责任.<br />
<br />
本站使用 cookies 在您的电脑上来储存资讯. 这样是方便您更愉快浏览. 您的电子邮件地址只是让我们认证您的资料而已.<br />
<br />
按下 '我同意' 代表您同意以上条款.
EOT;

$lang_register_php = array(
  'page_title' => '会员注册',
  'term_cond' => '条款与规则',
  'i_agree' => '我同意',
  'submit' => '确认注册',
  'err_user_exists' => '您所填写的会员名称已被人使用, 请重选一个',
  'err_password_mismatch' => '两个密码不合, 请重填一次',
  'err_uname_short' => '会员名称至少需 2 个字元',
  'err_password_short' => '密码至少需 2 个字元',
  'err_uname_pass_diff' => '会员名称和密码不可以相同',
  'err_invalid_email' => '电子邮件地址不正确',
  'err_duplicate_email' => '这个电子邮件地址已经被其他人使用过了',
  'enter_info' => '输入注册资料',
  'required_info' => '必填的资料',
  'optional_info' => '选填的资料',
  'username' => '会员名称',
  'password' => '密码',
  'password_again' => '确认密码',
  'email' => '电子邮件地址',
  'location' => '所在地区',
  'interests' => '兴趣',
  'website' => '个人网站',
  'occupation' => '职业',
  'error' => '错娱',
  'confirm_email_subject' => '%s - 注册认证',
  'information' => '讯息',
  'failed_sending_email' => '所注册的电子邮件地址无法寄出 !',
  'thank_you' => '感谢您的注册.<br /><br />一封内含有如何启用帐号的资讯电子邮件将被送到您所提供的信箱.',
  'acct_created' => '您的帐号已经建立, 现在您可以登入',
  'acct_active' => '您的帐号已经启用, 现在您可以登入',
  'acct_already_act' => '您的帐号已经启用 !',
  'acct_act_failed' => '此帐号无法启用 !',
  'err_unk_user' => '所选择的会员並不存在 !',
  'x_s_profile' => '%s\'的个人资料',
  'group' => '群组',
  'reg_date' => '加入',
  'disk_usage' => '磁碟使用量',
  'change_pass' => '修改密码',
  'current_pass' => '现行密码',
  'new_pass' => '新密码',
  'new_pass_again' => '确认新密码',
  'err_curr_pass' => '现行密码不正确',
  'apply_modif' => '修改',
  'change_pass' => '修改密码',
  'update_success' => '你的个人资料已经更新',
  'pass_chg_success' => '你的密码已经修改',
  'pass_chg_error' => '你的密码没有修改',
  'notify_admin_email_subject' => '%s - 注册通知', //cpg1.3.0
  'notify_admin_email_body' => '有一个新会员名称 "%s" 已经在你的相簿注册', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
感谢您在 {SITE_NAME} 的注册

您的会员名称 : "{USER_NAME}"
您的密码 : "{PASSWORD}"

请您按下面的连结以启动您的帐号
或者把此连结贴上浏览器上.

{ACT_LINK}

欢迎你(妳),

{SITE_NAME} 敬上

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => '观看留言',
  'no_comment' => '还没有留言可以观看',
  'n_comm_del' => '%s 个留言已删除',
  'n_comm_disp' => '显示的留言数量',
  'see_prev' => '看前一个',
  'see_next' => '看下一个',
  'del_comm' => '删除所选的留言',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
  0 => '搜寻图片内容',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => '搜寻新图片', //cpg1.3.0
  'select_dir' => '选择目录',
  'select_dir_msg' => '本功能可以让你用 FTP 上传整批图片.<br /><br />请选择你已上传图片的目录', //cpg1.3.0
  'no_pic_to_add' => '没有图片可以加入', //cpg1.3.0
  'need_one_album' => '使用此功能必需少要有一个相簿',
  'warning' => '警告',
  'change_perm' => '程式无法写入这个目录, 请修改权限至 755 或r 777 后再试一次 !', //cpg1.3.0
  'target_album' => '<b>把图片由 &quot;</b>%s<b>&quot; 到 </b>%s', //cpg1.3.0
  'folder' => '资料夹',
  'image' => '图片',
  'album' => '相簿',
  'result' => '结果',
  'dir_ro' => '无法写入. ',
  'dir_cant_read' => '无法读取. ',
  'insert' => '新增图片至相簿', //cpg1.3.0
  'list_new_pic' => '列出新图片', //cpg1.3.0
  'insert_selected' => '加入所选择的图片', //cpg1.3.0
  'no_pic_found' => '没有找到新图片', //cpg1.3.0
  'be_patient' => '请耐心等候, 程式需要一点时间来加入所选图片', //cpg1.3.0
  'no_album' => '没有相簿被选择',  //cpg1.3.0
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : 表示图片已成功被加入'.
                          '<li><b>DP</b> : 表示图片重复或已存在资料库'.
                          '<li><b>PB</b> : 表示图片无法加入, 请检查设定或图片存放目录的权限'.
                          '<li><b>NA</b> : 表示你还没有选择图片的相簿, 按 \'<a href="javascript:history.back(1)">返回</a>\' 並选择相簿. 如果你没有相簿 <a href="albmgr.php">请先建立一个</a></li>'.
                          '<li>如果 OK, DP, PB \'符号\' 没有显示请按坏掉的图片查看 PHP 显示的错误讯息'.
                          '<li>如果浏览器逾时, 请按重新整理'.
                          '</ul>', //cpg1.3.0
  'select_album' => '选择相簿', //cpg1.3.0
  'check_all' => '全选', //cpg1.3.0
  'uncheck_all' => '都不选', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => '停权会员',
  'user_name' => '会员名称',
  'ip_address' => 'IP位址',
  'expiry' => '期限(空白代表永久停权)',
  'edit_ban' => '储存修改',
  'delete_ban' => '删除',
  'add_new' => '新增停权会员',
  'add_ban' => '新增',
  'error_user' => '找不到该使用者名称!你没打错吧.. ', //cpg1.3.0
  'error_specify' => '你需要具体指明使用者名称或IP位址', //cpg1.3.0
  'error_ban_id' => '无效的 ID!', //cpg1.3.0
  'error_admin_ban' => '别闹了 你无法将自己停权!', //cpg1.3.0
  'error_server_ban' => '你要将自己的伺服器停权? 哎..不要再耍宝了...', //cpg1.3.0
  'error_ip_forbidden' => '你无法禁止这个 IP - 它是 non-routable!', //cpg1.3.0
  'lookup_ip' => '查看IP 位址', //cpg1.3.0
  'submit' => '执行!', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => '上传档案', //cpg1.3.0
  'custom_title' => '上传选项表', //cpg1.3.0
  'cust_instr_1' => '你可以从下列 选择一个上传框 进行上传.', //cpg1.3.0
  'cust_instr_2' => '选择上传框号', //cpg1.3.0
  'cust_instr_3' => '档案上传框: %s', //cpg1.3.0
  'cust_instr_4' => 'URI/URL 上传框: %s', //cpg1.3.0
  'cust_instr_5' => 'URI/URL 上传框:', //cpg1.3.0
  'cust_instr_6' => '档案上传框:', //cpg1.3.0
  'cust_instr_7' => '请输入您目前需要的 每一种上传框的数量. 然后按 \'继续\'. ', //cpg1.3.0
  'reg_instr_1' => '无效的选项表动作.', //cpg1.3.0
  'reg_instr_2' => '现在 你可以用以下的上传框 上传你的档案. 每一个上传档案的大小不可以超过 %s KB . ZIP 档案上传在 \'档案上传\' and \'URI/URL 上传\' 区 .', //cpg1.3.0
  'reg_instr_3' => '如果你要上传压缩档或要解压缩, 必须使用档案上传框 \'解压缩ZIP 上传\' 区.', //cpg1.3.0
  'reg_instr_4' => '如果选择以 URI/URL 上传, 请输入档案连结路径 如: http://www.mysite.com/images/example.jpg', //cpg1.3.0
  'reg_instr_5' => '完成选项表后,请按 \'继续\'.', //cpg1.3.0
  'reg_instr_6' => '解压缩ZIP 上传:', //cpg1.3.0
  'reg_instr_7' => '档案 上传:', //cpg1.3.0
  'reg_instr_8' => 'URI/URL 上传:', //cpg1.3.0
  'error_report' => '错误报告', //cpg1.3.0
  'error_instr' => '下列上传遇到错误:', //cpg1.3.0
  'file_name_url' => '档案 名称/URL', //cpg1.3.0
  'error_message' => '错误讯息', //cpg1.3.0
  'no_post' => '档案没有被上传.', //cpg1.3.0
  'forb_ext' => '不允许的副档名.', //cpg1.3.0
  'exc_php_ini' => '档案超过php.ini允许的大小.', //cpg1.3.0
  'exc_file_size' => '档案超过CPG允许的大小.', //cpg1.3.0
  'partial_upload' => '只有部分上传.', //cpg1.3.0
  'no_upload' => '没有上传.', //cpg1.3.0
  'unknown_code' => '未知的 PHP 上传错误码.', //cpg1.3.0
  'no_temp_name' => '没有上传 - 无暂存档名.', //cpg1.3.0
  'no_file_size' => '没有内容', //cpg1.3.0
  'impossible' => '无法传档.', //cpg1.3.0
  'not_image' => '这不是标准影像档', //cpg1.3.0
  'not_GD' => '这不是 GD 副档名.', //cpg1.3.0
  'pixel_allowance' => '影像尺寸太大了.', //cpg1.3.0
  'incorrect_prefix' => '不正确的 URI/URL 前缀', //cpg1.3.0
  'could_not_open_URI' => '无法开启URI.', //cpg1.3.0
  'unsafe_URI' => '安全性未被认证.', //cpg1.3.0
  'meta_data_failure' => '转换资料失败', //cpg1.3.0
  'http_401' => '401 未被授权浏览', //cpg1.3.0
  'http_402' => '402 此处需付费浏览', //cpg1.3.0
  'http_403' => '403 目前此处关闭禁止浏览', //cpg1.3.0
  'http_404' => '404 伺服器没有回应', //cpg1.3.0
  'http_500' => '500 内部伺服器错误', //cpg1.3.0
  'http_503' => '503 伺服器等待过久 停止服务', //cpg1.3.0
  'MIME_extraction_failure' => 'MIME 无法被测定.', //cpg1.3.0
  'MIME_type_unknown' => '未知的 MIME type', //cpg1.3.0
  'cant_create_write' => '无法新增写入档案.', //cpg1.3.0
  'not_writable' => '无法写入.', //cpg1.3.0
  'cant_read_URI' => '无法读取 URI/URL', //cpg1.3.0
  'cant_open_write_file' => '无法开启URI .', //cpg1.3.0
  'cant_write_write_file' => '无法写入URI .', //cpg1.3.0
  'cant_unzip' => '无法 unzip.', //cpg1.3.0
  'unknown' => '未知的错误', //cpg1.3.0
  'succ' => '成功上传', //cpg1.3.0
  'success' => '%s 上传已经成功.', //cpg1.3.0
  'add' => '请按 \'继续\' 增加档案到相簿.', //cpg1.3.0
  'failure' => '上传失败', //cpg1.3.0
  'f_info' => '档案资讯', //cpg1.3.0
  'no_place' => '先前的档案无法被配置.', //cpg1.3.0
  'yes_place' => '先前的档案已经配置成功.', //cpg1.3.0
  'max_fsize' => '最大允许档案大小是 %s KB',
  'album' => '相簿',
  'picture' => '图片', //cpg1.3.0
  'pic_title' => '图片标题', //cpg1.3.0
  'description' => '图片描述', //cpg1.3.0
  'keywords' => '关键字 (以空格区隔)',
  'err_no_alb_uploadables' => '目前尚未有相簿可以上传图片', //cpg1.3.0
  'place_instr_1' => '现在 请将图片放到相簿.  你现在可以输入这个档案的相关资讯.', //cpg1.3.0
  'place_instr_2' => '更多的图片需要配置. 请按 \'继续\'.', //cpg1.3.0
  'process_complete' => '恭喜  你已经将全部的成功档案上传了.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'title' => '会员管理',
  'name_a' => '名称 由小至大',
  'name_d' => '名称 由大至小',
  'group_a' => '群组 由小至大',
  'group_d' => '群组 由大至小',
  'reg_a' => '注册日期 由远至近',
  'reg_d' => '注册日期 由近至远',
  'pic_a' => '图片数 由小至大',
  'pic_d' => '图片数 由大至小',
  'disku_a' => '磁碟用量 由小至大',
  'disku_d' => '磁碟用量 由大至小',
  'lv_a' => '最近来访 由近至远', //cpg1.3.0
  'lv_d' => '最近来访 由远至近', //cpg1.3.0
  'sort_by' => '会员排序依',
  'err_no_users' => '会员资料表是空的 !',
  'err_edit_self' => '您无法编辑您的个人资料, 请利用 \'我的个人资料\' 来编辑',
  'edit' => '编辑',
  'delete' => '删除',
  'name' => '会员名称',
  'group' => '群组',
  'inactive' => '未启动',
  'operations' => '操作',
  'pictures' => '图片', //cpg1.3.0
  'disk_space' => '磁碟 用量 / 限额',
  'registered_on' => '注册日',
  'last_visit' => '最近来访', //cpg1.3.0
  'u_user_on_p_pages' => '%d 个会员于 %d 页',
  'confirm_del' => '确定要删除这个会员吗? \\n所有他的相簿及图片都会被删除.', //js-alert //cpg1.3.0
  'mail' => '电子邮件',
  'err_unknown_user' => '所选择的会员並不存在 !',
  'modify_user' => '编辑会员',
  'notes' => '注意',
  'note_list' => '<li>如果不想改变现行密码, 请将 "密码" 位留下空白',
  'password' => '密码',
  'user_active' => '会员已启动',
  'user_group' => '会员群组',
  'user_email' => '会员电子邮件',
  'user_web_site' => '会员网址',
  'create_new_user' => '建立新会员',
  'user_location' => '会员地区',
  'user_interests' => '会员兴趣',
  'user_occupation' => '会员职业',
  'latest_upload' => '最新上传', //cpg1.3.0
  'never' => '从未有', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
  'title' => '管理员工具 (调整图片大小)', //cpg1.3.0
  'what_it_does' => '功能',
  'what_update_titles' => '从档案名称更新图片标题',
  'what_delete_title' => '删除标题',
  'what_rebuild' => '重建缩图及调整图片大小',
  'what_delete_originals' => '重新调整后的图片将 取代原有的图片',
  'file' => '档案',
  'title_set_to' => '标题变更为',
  'submit_form' => '确认',
  'updated_succesfully' => '更新 已经成功',
  'error_create' => '产生错误',
  'continue' => '继续执行其他的影像',
  'main_success' => '档案 %s 已设为主图',  //cpg1.3.0
  'error_rename' => '错误 %s 改名为 %s', 
  'error_not_found' => '找不到档案 %s ',
  'back' => '回主页',
  'thumbs_wait' => '更新缩图 且/或 调整影像尺寸, 请稍待...',
  'thumbs_continue_wait' => '继续 更新缩图 且/或 调整影像尺寸...',
  'titles_wait' => '更新标题, 请稍待...',
  'delete_wait' => '删除标题, 请稍待...',
  'replace_wait' => '重新调整后的图片将 取代原有的图片中, 请稍待...',
  'instruction' => '简易操作说明',
  'instruction_action' => '请选择操作',
  'instruction_parameter' => '设定参数',
  'instruction_album' => '选择相簿',
  'instruction_press' => '请按 %s',
  'update' => '更新缩图 且/或 调整图片大小',
  'update_what' => '要更新什么',
  'update_thumb' => '只有缩图',
  'update_pic' => '只调整图片大小',
  'update_both' => '更新缩图且调整图片尺寸',
  'update_number' => '每点选一次要处理的图片数目',
  'update_option' => '(如果您遇到操作程序逾时的问题,请试着降低此设定)',
  'filename_title' => '档案名称 &rArr; 图片标题', //cpg1.3.0
  'filename_how' => '如何修改档名', 
  'filename_remove' => '删除 .jpg 並将 _ (底线) 用空格取代', 
  'filename_euro' => '将 2003_11_23_13_20_20.jpg 改为 23/11/2003 13:20', 
  'filename_us' => '将 2003_11_23_13_20_20.jpg 改为 11/23/2003 13:20', 
  'filename_time' => '将 2003_11_23_13_20_20.jpg 改为 13:20', 
  'delete' => '删除图片标题或原始尺寸的图片', //cpg1.3.0
  'delete_title' => '删除图片标题', //cpg1.3.0
  'delete_original' => '删除原始尺寸的图片',
  'delete_replace' => '删除原始尺寸的图片並以调整尺寸的图片取代',
  'select_album' => '选择相簿',
  'delete_orphans' => '删除零散的留言(对全部的相簿)', //cpg1.3.0
  'orphan_comment' => '发现零散的留言', //cpg1.3.0
  'delete' => '删除', //cpg1.3.0
  'delete_all' => '全部删除', //cpg1.3.0
  'comment' => '留言: ', //cpg1.3.0
  'nonexist' => '要附加的档案不存在 # ', //cpg1.3.0
  'phpinfo' => '显示php资讯', //cpg1.3.0
  'update_db' => '更新资料库', //cpg1.3.0
  'update_db_explanation' => '如果妳有更新 coppermine 档案, 加入修改或由以前的版本升级, 请确定执行一次资料库更新. 这将会在coppermine资料库新增必要的资料表 及/或 设定值.', //cpg1.3.0
);

?>