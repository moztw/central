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
// $Id: japanese-utf-8.php,v 1.10 2004/12/29 23:03:30 chtito Exp $
// ------------------------------------------------------------------------- //

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Japanese',  
  'lang_name_native' => 'Japanese', 
  'lang_country_code' => 'jp', 
  'trans_name'=> 'Mitsuhiro Yoshida', //the name of the translator - can be a nickname
  'trans_email' => 'mits@mitstek.com', //translator's email address (optional)
  'trans_website' => 'http://mitstek.com/', //translator's website (optional)
  'trans_date' => '2004-04-07', //the date the translation was created / last modified
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('バイト', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('日', '月', '火', '水', '木', '金', '土');
$lang_month = array('01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12');

// Some common strings
$lang_yes = 'Yes';
$lang_no  = 'No';
$lang_back = '戻る';
$lang_continue = '続ける';
$lang_info = '情報';
$lang_error = 'エラー';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%Y年%B月%d日';
$lastcom_date_fmt =  '%y/%m/%d/ %H:%M';
$lastup_date_fmt =   '%Y年%B月%d日';
$register_date_fmt = '%Y年%B月%d日';
$lasthit_date_fmt =  '%Y年%B月%d日 %I:%M %p';
$comment_date_fmt =  '%Y年%B月%d日 %I:%M %p';

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
  'random' => 'ランダムファイル',
  'lastup' => '新着写真',
  'lastalb'=> '最新アルバム',
  'lastcom' => '最新コメント',
  'topn' => '最多閲覧',
  'toprated' => 'トップレート',
  'lasthits' => '最終閲覧',
  'search' => '検索結果',
  'favpics'=> 'お気に入り'
);

$lang_errors = array(
  'access_denied' => 'このページに対するアクセス権がありません。',
  'perm_denied' => 'この操作を行う権限がありません。',
  'param_missing' => '必要なパラメータ無しでスクリプトが実行されました。',
  'non_exist_ap' => '選択されたアルバムは存在しません!', 
  'quota_exceeded' => 'ディスク使用量オーバー<br /><br />あなたが使用できるディスク容量は [quota]Kです。現在 [space]Kを使用しています。このファイルを追加するとディスク容量がオーバーします。',
  'gd_file_type_err' => 'GDイメージライブラリーを使用する場合、JPEGとPNG形式のファイルのみ使用可能です。',
  'invalid_image' => 'あなたがアップロードした画像は破損したか、GDライブラリーで処理することが出来ません。',
  'resize_failed' => '画像サイズが小さいため、サムネイルを作成出来ません。',
  'no_img_to_display' => '表示する画像はありません。',
  'non_exist_cat' => '選択したカテゴリは存在しません。',
  'orphan_cat' => '存在しない親カテゴリを持っています。カテゴリマネージャーを使って問題を解決してください!',
  'directory_ro' => 'ディレクトリ \'%s\' に書込み権がありません。ファイルの削除は出来ません。',
  'non_exist_comment' => '選択したコメントは存在しません。',
  'pic_in_invalid_album' => '存在しないアルバム(%s)内にファイルがあります !?',
  'banned' => 'あなたは現在このサイトへのアクセスを禁止されています。',
  'not_with_udb' => 'フォーラムソフトに統合された為、この機能はCoppermineで無効にされています。フォーラムソフトで管理される為、この機能に関する設定は、ここでサポートされません。',
  'offline_title' => 'オフライン', 
  'offline_text' => '現在ギャラリーはオフラインです - もう暫くお待ちください',
  'ecards_empty' => '表示するeカードレコードがありません。eカードを使用可にしているか設定画面で確認してください!',
  'action_failed' => 'エラーが発生しました。Coppermineは処理を正常に終了出来ませんでした。', 
  'no_zip' => 'ZIPファイルを生成するライブラリが使用出来ません。Coppermine管理者に連絡してください。', 
  'zip_type' => 'ZIPファイルをアップロードする権限がありません。',
);

$lang_bbcode_help = 'bbcode記述方法: <li>[b]<b>太字</b>[/b]</li> <li>[i]<i>斜体</i>[/i]</li> <li>[url=http://yoursite.com/]Url Text[/url]</li> <li>[email]user@domain.com[/email]</li>';

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'alb_list_title' => 'アルバムリストへ移動',
  'alb_list_lnk' => 'アルバムリスト',
  'my_gal_title' => 'パーソナルギャラリーへ移動',
  'my_gal_lnk' => 'マイギャラリー',
  'my_prof_lnk' => 'マイプロフィール',
  'adm_mode_title' => '管理者モードに変更',
  'adm_mode_lnk' => '管理者モード',
  'usr_mode_title' => 'ユーザモードに変更',
  'usr_mode_lnk' => 'ユーザモード',
  'upload_pic_title' => 'アルバムにファイルをアップロード', 
  'upload_pic_lnk' => 'ファイルのアップロード',
  'register_title' => 'アカウントの作成',
  'register_lnk' => 'ユーザ登録',
  'login_lnk' => 'ログイン',
  'logout_lnk' => 'ログアウト',
  'lastup_lnk' => '最新アップロード',
  'lastcom_lnk' => '最新コメント',
  'topn_lnk' => '閲覧最多',
  'toprated_lnk' => 'トップレート',
  'search_lnk' => '検索',
  'fav_lnk' => 'お気に入り',
  'memberlist_title' => 'メンバーリストの表示',
  'memberlist_lnk' => 'メンバーリスト',
  'faq_title' => '写真ギャラリー&quot;Coppermine&quot;に関するよくある質問と答え', 
  'faq_lnk' => 'FAQ',
);

$lang_gallery_admin_menu = array(
  'upl_app_lnk' => 'アップロード承認',
  'config_lnk' => '設定',
  'albums_lnk' => 'アルバム',
  'categories_lnk' => 'カテゴリ',
  'users_lnk' => 'ユーザ',
  'groups_lnk' => 'グループ',
  'comments_lnk' => 'コメントのレビュー',
  'searchnew_lnk' => 'ファイル一括登録',
  'util_lnk' => '管理ツール',
  'ban_lnk' => 'アクセス禁止ユーザ',
  'db_ecard_lnk' => 'eカードの表示',
);

$lang_user_admin_menu = array(
  'albmgr_lnk' => 'マイアルバムの作成 / 整理',
  'modifyalb_lnk' => 'マイアルバムの修正',
  'my_prof_lnk' => 'マイプロフィール',
);

$lang_cat_list = array(
  'category' => 'カテゴリ',
  'albums' => 'アルバム',
  'pictures' => 'ファイル',
);

$lang_album_list = array(
  'album_on_page' => 'アルバム数 %d / %dページ中'
);

$lang_thumb_view = array(
  'date' => '日付',
  //Sort by filename and title
  'name' => 'ファイル名',
  'title' => 'タイトル',
  'sort_da' => '日付の昇順で並び替え',
  'sort_dd' => '日付の降順で並び替え',
  'sort_na' => 'ファイル名の昇順で並び替え',
  'sort_nd' => 'ファイル名の降順で並び替え',
  'sort_ta' => '写真タイトルの昇順で並び替え',
  'sort_td' => '写真タイトルの降順で並び替え',
  'download_zip' => 'ZIPファイルとしてダウンロードする',
  'pic_on_page' => 'ファイル数 %d / %dページ中',
  'user_on_page' => 'ユーザ数 %d / %dページ中'
);

$lang_img_nav_bar = array(
  'thumb_title' => 'サムネイルページに戻る',
  'pic_info_title' => 'ファイル情報の表示/非表示',
  'slideshow_title' => 'スライドショー',
  'ecard_title' => 'この写真をeカードとして送信する',
  'ecard_disabled' => 'eカードは送信出来ません。',
  'ecard_disabled_msg' => 'eカードを送信する権限がありません。',
  'prev_title' => '前へ',
  'next_title' => '次へ',
  'pic_pos' => 'ファイル %s/%s',
);

$lang_rate_pic = array(
  'rate_this_pic' => 'このファイルを評価する',
  'no_votes' => '(未投票)',
  'rating' => '(現在のレーティング: %s/5&nbsp;&nbsp;&nbsp;投票数 %s件)',
  'rubbish' => '酷い',
  'poor' => '悪い',
  'fair' => '普通',
  'good' => '良い',
  'excellent' => '素晴らしい',
  'great' => '凄い',
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
  CRITICAL_ERROR => '致命的なエラー',
  'file' => 'ファイル: ',
  'line' => '行: ',
);

$lang_display_thumbnails = array(
  'filename' => 'ファイル名 : ',
  'filesize' => 'ファイルサイズ : ',
  'dimensions' => '大きさ : ',
  'date_added' => '登録日 : '
);

$lang_get_pic_data = array(
  'n_comments' => 'コメント数 %s',
  'n_views' => '閲覧回数 %s',
  'n_votes' => '(投票数 %s)'
);

$lang_cpg_debug_output = array(
  'debug_info' => 'デバッグ情報',
  'select_all' => '全てを選択',
  'copy_and_paste_instructions' => 'coppermineのサポート掲示板にサポートの依頼を投稿する場合は、このデバッグ表示をコピー&ペーストしてください。投稿前にパスワードを***に書換えてください。',
  'phpinfo' => 'phpinfoを表示',
);

$lang_language_selection = array(
  'reset_language' => 'デフォルト言語',
  'choose_language' => '言語を選択してください',
);

$lang_theme_selection = array(
  'reset_theme' => 'デフォルトテーマ',
  'choose_theme' => 'テーマを選択してください',
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
  'Exclamation' => 'ビックリ',
  'Question' => '質問',
  'Very Happy' => 'とても幸せ',
  'Smile' => 'スマイル',
  'Sad' => '悲しい',
  'Surprised' => '驚き',
  'Shocked' => 'ショック',
  'Confused' => '混乱',
  'Cool' => 'クール',
  'Laughing' => '笑い',
  'Mad' => '怒り',
  'Razz' => '苦笑い',
  'Embarassed' => '恥ずかしい',
  'Crying or Very sad' => '泣く又はとても悲しい',
  'Evil or Very Mad' => '悪い又はとても怒った',
  'Twisted Evil' => '意地悪い',
  'Rolling Eyes' => '転がる目',
  'Wink' => 'ウインク',
  'Idea' => 'アイディア',
  'Arrow' => '許可',
  'Neutral' => '中立',
  'Mr. Green' => 'ミスター・グリーン',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  0 => '管理者モードを終了中 ...',
  1 => '管理者モードに移行中 ...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'アルバムにはアルバム名が必要です !',
  'confirm_modifs' => '本当に更新しても宜しいですか ?',
  'no_change' => '何も変更されていません !',
  'new_album' => '新しいアルバム',
  'confirm_delete1' => '本当にこのアルバムを削除しても宜しいですか ?',
  'confirm_delete2' => '\nアルバムに含まれる全ての写真とコメントは削除されます !',
  'select_first' => '最初にアルバムを選択してください。',
  'alb_mrg' => 'アルバム管理',
  'my_gallery' => '* マイギャラリー *',
  'no_category' => '* カテゴリ無し *',
  'delete' => '削除',
  'new' => '新規作成',
  'apply_modifs' => '更新の適用',
  'select_category' => 'カテゴリ選択',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => '「%s」の操作に必要なパラメータが渡されていません !',
  'unknown_cat' => '選択したカテゴリはデータベースに存在しません。',
  'usergal_cat_ro' => 'ユーザギャラリーのカテゴリは削除出来ません !',
  'manage_cat' => 'カテゴリの管理',
  'confirm_delete' => '本当にこのカテゴリを削除しても宜しいですか ?',
  'category' => 'カテゴリ',
  'operations' => '操作',
  'move_into' => '移動先',
  'update_create' => 'カテゴリの作成/更新',
  'parent_cat' => '親カテゴリ',
  'cat_title' => 'カテゴリ名',
  'cat_thumb' => 'カテゴリサムネイル',
  'cat_desc' => 'カテゴリ説明'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
  'title' => '設定',
  'restore_cfg' => 'インストール直後の状態に戻す',
  'save_cfg' => '新しい設定を保存する',
  'notes' => 'Notes',
  'info' => '情報',
  'upd_success' => 'Coppermineの設定が更新されました。',
  'restore_success' => 'Coppermineデフォルトの設定にリストアされました。',
  'name_a' => '写真名の昇順',
  'name_d' => '写真名の降順',
  'title_a' => 'タイトルの昇順',
  'title_d' => 'タイトルの降順',
  'date_a' => '日付の昇順',
  'date_d' => '日付の降順',
  'th_any' => 'サムネイルの最大サイズ',
  'th_ht' => '高さ',
  'th_wd' => '幅',
  'label' => 'ラベル',
  'item' => '項目',
  'debug_everyone' => '全員',
  'debug_admin' => '管理者のみ',
);

if (defined('CONFIG_PHP')) $lang_config_data = array(
  '一般設定',
  array('ギャラリー名', 'gallery_name', 0),
  array('ギャラリーの説明', 'gallery_description', 0),
  array('管理者のメールアドレス', 'gallery_admin_email', 0),
  array('eカードの「もっと写真を見る」リンクのターゲットアドレス', 'ecards_more_pic_target', 0),
  array('ギャラリーをオフラインにする', 'offline', 1), 
  array('eカードを記録する', 'log_ecards', 1),
  array('お気に入りのZIPファイルのダウンロードを許可する', 'enable_zipdownload', 1),

  '言語、テーマ &amp; Charset設定',
  array('言語', 'lang', 5),
  array('テーマ', 'theme', 6),
  array('言語リストを表示する', 'language_list', 1),
  array('国旗を表示する', 'language_flags', 8),
  array('言語選択に&quot;リセット&quot;を表示する', 'language_reset', 1),
  array('テーマリストを表示', 'theme_list', 1),
  array('テーマ選択に&quot;リセット&quot;を表示する', 'theme_reset', 1), 
  array('FAQを表示する', 'display_faq', 1),
  array('bbcodeヘルプを表示する', 'show_bbcode_help', 1),
  array('エンコード', 'charset', 4),

  'アルバムリスト表示',
  array('メインテーブルの幅 (ピクセル又は%)', 'main_table_width', 0),
  array('カテゴリ階層の表示数', 'subcat_level', 0),
  array('アルバムの表示数', 'albums_per_page', 0),
  array('アルバムリストの列数', 'album_list_cols', 0),
  array('サムネイルのサイズ (ピクセル)', 'alb_list_thumb_size', 0),
  array('メインページのコンテンツ', 'main_page_layout', 0),
  array('カテゴリに第一レベルのサムネイルを表示する','first_level',1),

  'サムネイル表示',
  array('サムネイルページの列数', 'thumbcols', 0),
  array('サムネイルページの行数', 'thumbrows', 0),
  array('タブの最大表示数', 'max_tabs', 10), 
  array('サムネイルの下にファイル説明を表示する (写真名に追加)', 'caption_in_thumbview', 1), 
  array('サムネイルの下に閲覧数を表示する', 'views_in_thumbview', 1), 
  array('サムネイルの下にコメント数を表示する', 'display_comment_count', 1),
  array('サムネイルの下にアップロードした人の名前を表示する', 'display_uploader', 1),
  array('ファイルのデフォルト並び順', 'default_sort_order', 3),
  array('「トップレート」リストにファイルが表示される為の最小投票数', 'min_votes_for_rating', 0),

  '画像表示とコメント設定',
  array('写真表示のテーブル幅 (ピクセル又は%)', 'picture_table_width', 0),
  array('写真情報をデフォルトで表示する', 'display_pic_info', 1),
  array('コメント中の使用禁止用語を取除く', 'filter_bad_words', 1),
  array('コメント中のスマイリー使用を許可する', 'enable_smilies', 1),
  array('1つの写真に対して同一ユーザより複数の連続したコメント許可する (flood protectionを使用停止にする)', 'disable_comment_flood_protect', 1),
  array('写真説明の最大長', 'max_img_desc_length', 0),
  array('1語あたりの最大文字数 (注意: 日本語の場合、コメントの最大長と同値)', 'max_com_wlength', 0),
  array('コメントの最大行数', 'max_com_lines', 0),
  array('コメントの最大長 (半角換算)', 'max_com_size', 0),
  array('フィルムストリップを表示する', 'display_film_strip', 1),
  array('フィルムストリップ内の項目表示数', 'max_film_strip_items', 0),
  array('コメント投稿時に管理者にメール通知する', 'email_comment_notification', 1), 
  array('スライドショーの間隔 (1/1000秒単位)', 'slideshow_interval', 0), 

  'ファイルとサムネイル設定',
  array('JPEGファイルのクオリティー', 'jpeg_qual', 0),
  array('サムネイルの最大幅又は高さ <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0),
  array('使用する寸法 ( 幅 又は 高さ 又は サムネイルの最大サイズ )<b>*</b>', 'thumb_use', 7),
  array('中間写真を作成する','make_intermediate',1),
  array('中間写真の最大幅又は高さ <b>*</b>', 'picture_width', 0),
  array('中間写真/ビデオの最大幅又は高さ <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0),
  array('アップロードファイルの最大サイズ (KB)', 'max_upl_size', 0),
  array('アップロード写真/ビデオの最大幅又は高さ (ピクセル)', 'max_upl_width_height', 0),

  'ファイルとサムネイル設定の高度な設定',
  array('ログインしていないユーザにプライベートアルバムアイコンを表示する','show_private',1),
  array('ファイル名の使用禁止文字', 'forbiden_fname_char',0),
  //array('アップロードの使用可能拡張子', 'allowed_file_extensions',0),
  array('使用可能イメージタイプ', 'allowed_img_types',0),
  array('使用可能ムービータイプ', 'allowed_mov_types',0),
  array('使用可能オーディオタイプ', 'allowed_snd_types',0),
  array('使用可能ドキュメントタイプ', 'allowed_doc_types',0),
  array('イメージのリサイズ方法','thumb_method',2),
  array('ImageMagickのパス (例 /usr/bin/X11/)', 'impath', 0),
  //array('使用可能イメージタイプ (ImageMagickのみ)', 'allowed_img_types',0),
  array('ImageMagickのコマンドラインオプション', 'im_options', 0),
  array('JPEGファイルのEXIFデータを取得する', 'read_exif_data', 1),
  array('JPEGファイルのIPTCデータを取得する', 'read_iptc_data', 1),
  array('アルバムディレクトリ <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0),
  array('ユーザファイルディレクトリ <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0),
  array('中間写真の接頭辞 <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0),
  array('サムネイルの接頭辞 <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0),
  array('ディレクトリのデフォルトパーミッション', 'default_dir_mode', 0),
  array('ファイルのデフォルトパーミッション', 'default_file_mode', 0),

  'ユーザ設定',
  array('ユーザ登録を許可する', 'allow_user_registration', 1),
  array('ユーザ登録にメール承認を必要とする', 'reg_requires_valid_email', 1),
  array('管理者にユーザ登録をメール通知する', 'reg_notify_admin_email', 1),
  array('2人のユーザによる同一メールアドレスの登録を許可する', 'allow_duplicate_emails_addr', 1),
  array('ユーザがプライベートアルバムを作成出来る', 'allow_private_albums', 1),
  array('ユーザがプライベートアルバムを作成出来る (注意: \'yes\' から \'no\' に変更した場合、現存する全てのプライベートは公開されます)', 'allow_private_albums', 1),
  array('管理者にユーザのアップロード承認待ちをメール通知する', 'upl_notify_admin_email', 1),
  array('ログインユーザにメンバーリストの閲覧を許可する', 'allow_memberlist', 1),

  '画像説明のためのカスタムフィールド (使用しない場合は空白)',
  array('フィールド名 1', 'user_field1_name', 0),
  array('フィールド名 2', 'user_field2_name', 0),
  array('フィールド名 3', 'user_field3_name', 0),
  array('フィールド名 4', 'user_field4_name', 0),

  'クッキー設定',
  array('スクリプトで使用するクッキー名 (統合環境でBBSを使用する場合は、bbsのクッキー名と違う名称を使用してください)', 'cookie_name', 0),
  array('スクリプトで使用するクッキーの保存先', 'cookie_path', 0),

  'その他の設定',
  array('デバッグモードを使用する', 'debug_mode', 9),
  array('デバッグモードで警告を表示する', 'debug_notice', 1),

        '<br /><div align="center">(*) 既にギャラリーに写真が登録されている場合は、*マークが付いているフィールドは変更しないでください</div><br />
  <a name="notice2"></a>(**) この設定を変更する場合は、変更後に追加されるファイルのみが影響を受けます。ギャラリー内にファイルがある場合は、この設定を変更しないことをお勧めします。管理メニューの&quot;<a href="util.php">管理ツール</a>(写真のリサイズ)&quot;を使用して、登録済みファイルに変更を適用することも出来ます。</div><br />',
);

// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => '送信済みeカード',
  'ecard_sender' => '送信者',
  'ecard_recipient' => '受取人',
  'ecard_date' => '送信日時',
  'ecard_display' => 'eカードの表示',
  'ecard_name' => '名前',
  'ecard_email' => 'メールアドレス',
  'ecard_ip' => 'IP #',
  'ecard_ascending' => '昇順',
  'ecard_descending' => '降順',
  'ecard_sorted' => '並び替え:',
  'ecard_by_date' => '日付',
  'ecard_by_sender_name' => '送信者名',
  'ecard_by_sender_email' => '送信者メールアドレス',
  'ecard_by_sender_ip' => '送信者IPアドレス',
  'ecard_by_recipient_name' => '受取人名',
  'ecard_by_recipient_email' => '受取人メールアドレス',
  'ecard_number' => '表示レコード %s - %s (%s 件中)',
  'ecard_goto_page' => 'ページ移動',
  'ecard_records_per_page' => '1ページ当たりのレコード数',
  'check_all' => '全てを選択',
  'uncheck_all' => 'すべての選択を解除 ',
  'ecards_delete_selected' => '選択したeカードを削除する',
  'ecards_delete_confirm' => '本当にレコードを削除しても宜しいですか? チェックボックスをチェックしてください!',
  'ecards_delete_sure' => '削除確認',
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'お名前とコメントを入力してください。',
  'com_added' => 'あなたのコメントは追加されました。',
  'alb_need_title' => 'アルバム名を入力してください !',
  'no_udp_needed' => '更新は必要ありません。',
  'alb_updated' => 'アルバムが更新されました。',
  'unknown_album' => '選択したアルバムが存在しない、又はこのアルバムにアップロードする権限がありません。',
  'no_pic_uploaded' => 'ファイルはアップロードされませんでした !<br /><br />アップロードするファイルを正しく選択している場合は、サーバが</br>ファイルのアップロードを許可しているか確認してください ...',
  'err_mkdir' => 'ディレクトリ %s の作成に失敗しました !',
  'dest_dir_ro' => '対象ディレクトリ %s はスクリプトによる書込みが出来ません !',
  'err_move' => '%s を %s に移動できません !',
  'err_fsize_too_large' => 'あなたがアップロードしたファイルのサイズは大き過ぎます (最大サイズは%sx%sです) !',
  'err_imgsize_too_large' => 'あなたがアップロードしたファイルのサイズは大き過ぎます (最大サイズは%sKBです) !',
  'err_invalid_img' => 'あなたがアップロードしたファイルは有効な画像ではありません !',
  'allowed_img_types' => '%s の画像のみアップロード出来ます。',
  'err_insert_pic' => 'ファイル「%s」はアルバムに登録できません。 ',
  'upload_success' => 'あなたのファイルは正常にアップロードされました<br /><br />管理者の承認後に表示されます。',
  'notify_admin_email_subject' => '%s - Upload notification',
  'notify_admin_email_body' => '%s によって写真がアップロードされました。認証する場合は、次のリンクをクリックしてください。 %s',
  'info' => '情報',
  'com_added' => 'コメントが追加されました。',
  'alb_updated' => 'アルバムが更新されました。',
  'err_comment_empty' => 'コメントが空白です !',
  'err_invalid_fext' => '次の拡張子のファイルのみ使用できます: <br /><br />%s.',
  'no_flood' => '申し訳ございません、あなたは既にこのファイルにコメントを投稿しています<br /><br />修正したい場合は、コメントを編集してください。',
  'redirect_msg' => 'リダイレクトされました。<br /><br /><br />ページが自動的に更新されない場合は、「続く」をクリックしてください。',
  'upl_success' => 'あなたのファイルは正常に登録されました。',
  'email_comment_subject' => 'Comment posted on Coppermine Photo Gallery',
  'email_comment_body' => 'ギャラリーにコメントが投稿されました。こちらをご覧ください:',
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'キャプション',
  'fs_pic' => 'フルサイズ画像',
  'del_success' => '削除成功',
  'ns_pic' => 'ノーマルサイズ画像',
  'err_del' => '削除不可',
  'thumb_pic' => 'サムネイル',
  'comment' => 'コメント',
  'im_in_alb' => 'アルバム内の画像',
  'alb_del_success' => 'アルバム「%s」が削除されました。',
  'alb_mgr' => 'アルバムマネージャー',
  'err_invalid_data' => '「%s」に不正なデータが発生しました。',
  'create_alb' => 'アルバム「%s」の作成中',
  'update_alb' => 'アルバム「%s」 アルバム名「%s」 インデックス「%s\」を更新しています。',
  'del_pic' => 'ファイルの削除',
  'del_alb' => 'アルバムの削除',
  'del_user' => 'ユーザの削除',
  'err_unknown_user' => '選択したユーザは存在していません !',
  'comment_deleted' => 'コメントが削除されました。',
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
  'confirm_del' => '本当にこのファイルを削除しても宜しいですか ? \\n同時にコメントも削除されます。',
  'del_pic' => 'この写真を削除',
  'size' => '%s x %s ピクセル',
  'views' => '%s 回',
  'slideshow' => 'スライドショー',
  'stop_slideshow' => 'スライドショーを停止',
  'view_fs' => 'クリックでフルサイズの画像を表示',
  'edit_pic' => '説明の編集',
  'crop_pic' => 'クロップ及び回転',
);

$lang_picinfo = array(
  'title' =>'ファイル情報',
  'Filename' => 'ファイル名',
  'Album name' => 'アルバム名',
  'Rating' => 'レーティング (投票数 %s件)',
  'Keywords' => 'キーワード',
  'File Size' => 'ファイルサイズ',
  'Dimensions' => '大きさ',
  'Displayed' => '表示',
  'Camera' => 'カメラ',
  'Date taken' => '撮影日',
  'Aperture' => 'レンズ',
  'Exposure time' => '露出時間',
  'Focal length' => '焦点距離',
  'Comment' => 'コメント',
  'addFav'=>'お気に入りに追加',
  'addFavPhrase'=>'お気に入り',
  'remFav'=>'お気に入りから削除',
  'iptcTitle'=>'IPTCタイトル',
  'iptcCopyright'=>'IPTC著作権',
  'iptcKeywords'=>'IPTCキーワード',
  'iptcCategory'=>'IPTCカテゴリ',
  'iptcSubCategories'=>'IPTCサブカテゴリ',
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'このコメントを編集する',
  'confirm_delete' => '本当にこのコメントを削除しても宜しいですか ?',
  'add_your_comment' => 'コメントを追加する',
  'name'=>'名前',
  'comment'=>'コメント',
  'your_name' => 'お名前',
);

$lang_fullsize_popup = array(
  'click_to_close' => '画像のクリックでウインドウを閉じる',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'eカードの送信',
  'invalid_email' => '<b>警告</b> : メールアドレスが正しくありません !',
  'ecard_title' => 'An e-card from %s for you',
  'error_not_image' => '画像以外はeカードとして送信出来ません。',
  'view_ecard' => 'eカードが正常に表示されない場合は、このリンクをクリックしてください。',
  'view_more_pics' => 'もっと写真を見る場合は、このリンクをクリックしてください !',
  'send_success' => 'eカードが送信されました。',
  'send_failed' => '申し訳ございません、eカードを送信出来ませんでした ...',
  'from' => 'From',
  'your_name' => 'お名前',
  'your_email' => 'メールアドレス',
  'to' => 'To',
  'rcpt_name' => '受取人のお名前',
  'rcpt_email' => '受取人のメールアドレス',
  'greetings' => 'あいさつ',
  'message' => 'メッセージ',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'ファイル情報',
  'album' => 'アルバム',
  'title' => '写真名',
  'desc' => '説明',
  'keywords' => 'キーワード',
  'pic_info_str' => '%s&times;%s - %sKB - 閲覧回数 %s - 投票数 %s',
  'approve' => 'ファイルの承認',
  'postpone_app' => '承認の延期',
  'del_pic' => 'ファイルの削除',
  'read_exif' => 'EXIF情報を再度取得する',
  'reset_view_count' => '閲覧カウンタのリセット',
  'reset_votes' => '投票のリセット',
  'del_comm' => 'コメントの削除',
  'upl_approval' => 'アップロード承認',
  'edit_pics' => 'ファイルの編集',
  'see_next' => '前へ',
  'see_prev' => '次へ',
  'n_pic' => 'ファイル数 %s',
  'n_of_pic_to_disp' => 'ファイル表示数',
  'apply' => '更新の適用',
  'crop_title' => 'Coppermineピクチャーエディタ',
  'preview' => 'プレビュー',
  'save' => '写真の保存',
  'save_thumb' =>'サムネイルとして保存',
  'sel_on_img' =>'選択は画像内で行ってください!',
);

// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'よくある質問と答え ',
  'toc' => '目次',
  'question' => '質問: ',
  'answer' => '答え: ', 
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  '一般的なFAQ', //
  array('なぜユーザ登録する必要がありますか?', 'ユーザ登録の要否は管理者によって決定されます。ユーザ登録することで、メンバーはファイルのアップロード、お気に入りの追加、写真の評価、コメントの投稿等の機能を使用することが出来ます。', 'allow_user_registration', '0'),
  array('ユーザ登録方法は?', '&quot;ユーザ登録&quot;にアクセスして必須項目フィールドに必要事項を入力してください(必要であれば任意項目も)。<br />管理者がメール承認を利用可にしている場合は個人情報を送信した後、登録メールアドレス宛にアカウントの活性化に関する説明が記載されたメールが送信されます。ログインする為にはアカウントの活性化を行ってください。', 'allow_user_registration', '1'),
  array('ログインの方法は?', '&quot;ログイン&quot;画面にアクセスしてユーザ名とパスワードを入力してください。&quot;ユーザ名・パスワードを記憶&quot;をチェックすると以後自動的にログインすることが出来ます。 <br /><b>重要:クッキーは利用可にしてください。&quot;ユーザ名・パスワードを記憶&quot;を使用する場合は、このサイト発行のクッキーを削除しないでください。</b>', 'offline', 0),
  array('なぜログイン出来ないのですか?', 'ユーザ登録後に送信されるメールに記載されていたリンクをクリックしましたか? リンクをクリックすることでアカウントを活性化することが出来ます。他のログインに関するトラブルは管理者にお問合せください。', 'offline', 0),
  array('パスワードを忘れたら?', 'このサイトに&quot;パスワードを忘れました&quot;リンクがある場合はお使いください。その他の場合はサイト管理者に新しいパスワードの発行を依頼してください。', 'offline', 0),
  array('普段使用しているメールアドレスを変更したら?', 'ログイン後、&quot;マイプロフィール&quot;で変更してください。', 'offline', 0),
  array('&quot;お気に入り&quot;に写真を保存する方法は?', '写真をクリックした後、&quot;写真情報&quot;リンク(<img src="images/info.gif" width="16" height="16" border="0" alt="Picture information" />)をクリックしてください。写真情報の下方にある&quot;お気に入りに追加&quot;をクリックしてください。<br />管理者には&quot;写真情報&quot;がデフォルトで表示されています。<br /><b>重要:クッキーを使用可にして、このサイト発行のクッキーを削除しないでください。', 'offline', 0),
  array('写真の評価方法は?', '写真のサムネイルをクリックして、下方に表示されるレーティングを選択してください。', 'offline', 0),
  array('写真へのコメント投稿方法は?', '写真のサムネイルをクリックして、下方に表示されるコメント欄に投稿してください。', 'offline', 0),
  array('写真のアップロード方法は?', '&quot;ファイルのアップロード&quot;にアクセスして、ファイルをアップロードしたいアルバムを選択してください。&quot;参照&quot;をクリックした後、アップロードしたいファイルを選択して&quot;開く&quot;をクリックします。(必要に応じてタイトル、説明文を付加えてください) 最後に&quot;ファイルのアップロード&quot;をクリックしてください。', 'allow_private_albums', 0),
  array('どこに写真をアップロードすれば良いですか?', '&quot;マイギャラリー&quot;内のアルバムに写真をアップロードすることが出来ます。管理者の設定により、メインギャラリー内のアルバムに写真をアップロードすることも出来ます。', 'allow_private_albums', 0),
  array('どのような種類とサイズの写真をアップロード出来ますか?', 'アップロード出来るサイズと種類(jpg,gif,等)は管理者により決定されます。', 'offline', 0),
  array('&quot;マイギャラリー&quot;とは?', '&quot;マイギャラリー&quot;はユーザが写真をアップロード及び管理することが出来る個人用ギャラリーです。', 'allow_private_albums', 0),
  array('&quot;マイギャラリー&quot;内のアルバム作成・リネーム・削除方法は?', 'まず、&quot;管理者モード&quot;にしてください。<br />&quot;アルバム&quot;にアクセスして&quot;新規作成&quot;をクリックしてください。 &quot;新しいアルバム&quot;を好きな名称に変更してください。<br />ギャラリー内の全てのアルバムの名称を変更することが出来ます。<br />&quot;更新の適用&quot;をクリックしてください。', 'allow_private_albums', 0),
  array('マイアルバムの修正及び閲覧の制限方法は?', 'まず、&quot;管理者モード&quot;にしてください。<br />&quot;アルバムの更新&quot;バーにある&quot;マイアルバムの修正&quot;にアクセスして、修正したいアルバムを選択してください。<br />ここでアルバム名、説明、サムネイル、閲覧制限、コメント/レーティングのパーミッションを変更することが出来ます。<br />&quot;アルバムの更新&quot;をクリックしてください。', 'allow_private_albums', 0),
  array('他のユーザのギャラリーを閲覧する方法は?', '&quot;アルバムリスト&quot;にアクセスして、&quot;ユーザギャラリー&quot;を選択してください。', 'allow_private_albums', 0),
  array('クッキーとは?', 'クッキーは、ウェブサイトからあなたのコンピュータに保存されるプレインテキストのデータです。<br />通常、クッキーはユーザがサイトに戻って来た時に、再度ログインしなくても済むように利用されます。また、他の多くの役割を持っています。', 'offline', 0),
  array('このプログラムの入手方法は?', 'Coppermineは、GNU GPLによりリリースされたフリーのマルチメディアギャラリーです。Coppermineは、多機能なシステムであり、様々なプラットフォームに移植されています。詳細情報の閲覧、ダウンロードは<a href="http://coppermine.sf.net/">Coppermineホームページ</a>にアクセスして行ってください。', 'offline', 0),

  'サイト運用',
  array('&quot;アルバムリスト&quot;とは?', 'アルバムリストでは、ギャラリー全てをそれぞれのカテゴリへのリンクと共に表示します。サムネイルは、カテゴリへリンクされています。', 'offline', 0),
  array('&quot;マイギャラリー&quot;とは?', 'マイギャラリーでは、ユーザが自身のギャラリーを作成することが出来ます。ユーザは、写真のアップロードと同様に、アルバムの追加、削除、修正を行うことが出来ます。', 'allow_private_albums', 0),
  array('&quot;管理者モード&quot;と&quot;ユーザモード&quot;の違いは?', '管理者モードでは、ユーザが自分のギャラリーを(管理者が許可している場合は他の人のギャラリーも)修正することが出来ます。', 'allow_private_albums', 0),
  array('&quot;ファイルのアップロード&quot;とは?', 'ユーザは自分又は管理者が選択したギャラリーに写真をアップロードすることが出来ます。 (サイズと種類は管理者により設定されます)', 'allow_private_albums', 0),
  array('&quot;最新アップロード&quot;とは?', '最新アップロードでは、サイトにアップロードされた直近のファイルが表示されます。', 'offline', 0),
  array('&quot;最新コメント&quot;とは?', '最新コメントでは、写真に投稿された直近のコメントが表示されます。', 'offline', 0),
  array('&quot;閲覧最多&quot;とは?', '閲覧最多では、ログインの有無に係わらず全ユーザから最も閲覧された写真が表示されます。', 'offline', 0),
  array('&quot;トップレート&quot;とは?', 'トップレートでは、ユーザによりレーティングされたトップレートの写真が、平均レーティングと共に表示されます。(例: 5名のユーザが<img src="images/rating3.gif" width="65" height="14" border="0" alt="" />のレーティングを行った場合、写真の平均レーティングは<img src="images/rating3.gif" width="65" height="14" border="0" alt="" />となります。5名のユーザが1から5のレーティングを行った場合(1,2,3,4,5)、平均レーティングは<img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> になります。)<br />レーティングの範囲は、<img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (最高) から <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (最低)の間です。', 'offline', 0),
  array('&quot;お気に入り&quot;とは?', 'お気に入りでは、お気に入りの写真情報を、あなたのコンピュータにクッキーで保存します。', 'offline', 0),
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'パスワードリマインダ', 
  'err_already_logged_in' => '既にログインしています !',
  'enter_username_email' => 'ユーザ名又はメールアドレスを入力してください',
  'submit' => 'go',
  'failed_sending_email' => 'パスワードリマインダによるメールは送信出来ません!',
  'email_sent' => 'ユーザ名とパスワードを記載したメールが %s 宛に送信されました',
  'err_unk_user' => '選択したユーザは登録されていません!',
  'passwd_reminder_subject' => '%s - Password reminder',
  'passwd_reminder_body' => 'ログインデータが請求されました:
ユーザ名: %s
パスワード: %s
ログインはこちら %s ',
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'グループ名',
  'disk_quota' => 'ディスク容量',
  'can_rate' => 'ファイル写真を評価可能',
  'can_send_ecards' => 'e-カードを送信可能',
  'can_post_com' => 'コメントを投稿可能',
  'can_upload' => 'ファイルをアップロード可能',
  'can_have_gallery' => 'パーソナルギャラリーを作成可能',
  'apply' => '更新の適用',
  'create_new_group' => '新規グループの作成',
  'del_groups' => '選択したグループの削除',
  'confirm_del' => '警告、グループを削除した場合、グループに属していたユーザは\'Registered\'グループに移動されます !\n\n処理を続けますか ?',
  'title' => 'ユーザグループの管理',
  'approval_1' => 'パブリックアップロード承認 (1)',
  'approval_2' => 'プライベートアップロード承認 (2)',
  'upload_form_config' => 'アップロードフォーム設定',
  'upload_form_config_values' => array( '単一ファイルアップロードのみ', '複数ファイルアップロードのみ', 'URLアップロードのみ', 'ZIPアップロードのみ', 'ファイル-URL', 'ファイル-ZIP', 'URL-ZIP', 'ファイル-URL-ZIP'),
  'custom_user_upload'=>'ユーザはアップロードボックスの数を変更出来ますか?',
  'num_file_upload'=>'ファイルアップロードボックスの最大数',
  'num_URI_upload'=>'URLアップロードボックスの最大数',
  'note1' => '<b>(1)</b> パブリックアルバムへアップロードされた写真は管理者の承認が必要です。',
  'note2' => '<b>(2)</b> ユーザのアルバムへアップロードされた写真は管理者の承認が必要です。',
  'notes' => '注意'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Welcome !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => '本当にこのアルバムを削除しても宜しいですか ? \\n同時に全ての写真とコメントは削除されます。',
  'delete' => '削除',
  'modify' => 'プロパティ',
  'edit_pics' => 'ファイルの編集',
);

$lang_list_categories = array(
  'home' => 'Home',
  'stat1' => 'カテゴリ数:<b>[cat]</b>&nbsp;&nbsp;&nbsp;アルバム数:<b>[albums]</b>&nbsp;&nbsp;&nbsp;写真枚数:<b>[pictures]</b>&nbsp;&nbsp;&nbsp;コメント数:<b>[comments]</b>&nbsp;&nbsp;&nbsp;閲覧回数:<b>[views]</b>',
  'stat2' => 'アルバム数:<b>[albums]</b>&nbsp;&nbsp;&nbsp;写真枚数:<b>[pictures]</b>&nbsp;&nbsp;&nbsp;閲覧回数:<b>[views]</b>',
  'xx_s_gallery' => '%sのギャラリー',
  'stat3' => 'アルバム数:<b>[albums]</b>&nbsp;&nbsp;&nbsp;写真枚数:<b>[pictures]</b>&nbsp;&nbsp;&nbsp;コメント数:<b>[comments]</b>&nbsp;&nbsp;&nbsp;閲覧回数:<b>[views]</b>'
);

$lang_list_users = array(
  'user_list' => 'ユーザリスト',
  'no_user_gal' => 'ユーザギャラリーはありません。',
  'n_albums' => 'アルバム数 %s',
  'n_pics' => 'ファイル数 %s'
);

$lang_list_albums = array(
  'n_pictures' => 'ファイル数 %s',
  'last_added' => '、最終追加日:%s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'ログイン',
  'enter_login_pswd' => 'ユーザ名とパスワードを入力してください',
  'username' => 'ユーザ名',
  'password' => 'パスワード',
  'remember_me' => 'ユーザ名・パスワードを記憶',
  'welcome' => 'ようこそ %sさん...',
  'err_login' => '*** ログイン出来ませんでした。再度ログインしてください ***',
  'err_already_logged_in' => '既にログインしています !',
  'forgot_password_link' => 'パスワードを忘れました',
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'ログアウト',
  'bye' => '%sさん、さようなら...',
  'err_not_loged_in' => 'ログインしていません !',
);

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP情報',
  'explanation' => 'この内容はPHP関数<a href="http://www.php.net/phpinfo">phpinfo()</a>によって生成され、Copermine内に表示されているものです。 (右側の余白をトリミングしています。)',
  'no_link' => '他の人にphpinfoを見られることでセキュリティ上のリスクが生じます。このページは管理者としてログインした時のみ閲覧することが出来ます。このページへのリンクを他のページに張っても、管理者としてログインしない限りアクセスは拒否されます。',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'アルバムの更新 %s',
  'general_settings' => '一般設定',
  'alb_title' => 'アルバム名',
  'alb_cat' => 'カテゴリ',
  'alb_desc' => '説明',
  'alb_thumb' => 'サムネイル',
  'alb_perm' => 'このアルバムに対するパーミッション',
  'can_view' => 'アルバム閲覧可能',
  'can_upload' => 'ビジターは写真をアップロード出来る',
  'can_post_comments' => 'ビジターはコメントを投稿できる',
  'can_rate' => 'ビジターは写真を評価出来る',
  'user_gal' => 'ユーザギャラリー',
  'no_cat' => '* カテゴリ無し *',
  'alb_empty' => 'アルバムには何も入っていません',
  'last_uploaded' => '最新アップロード',
  'public_alb' => '全員 (パブリックアルバム)',
  'me_only' => '私のみ',
  'owner_only' => 'アルバムの所有者 (%s) のみ',
  'groupp_only' => '%sグループメンバーのみ',
  'err_no_alb_to_modify' => '修正できるアルバムがデータベースにありません。',
  'update' => 'アルバムの更新',
  'notice1' => '(*) %sグループ%s 設定による',
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => '申し訳ございません、あなたは既にこのファイルを評価しています。',
  'rate_ok' => 'あなたの投票は受理されました。',
  'forbidden' => '自分の写真を評価することは出来ません。',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
{SITE_NAME}の管理者は、一般的に好ましくない投稿を出来るだけ速やかに削除するよう試みますが、全ての投稿を閲覧することは不可能です。従って、このサイトに対する全投稿の見解が投稿者によるものであり、管理者やウェブマスターのもので無く(これらの人々の投稿は除く)、管理者やウェブマスターに投稿の責任が無いことをあなたは認めます。
<br>
<br>
あなたは、公序良俗に反する投稿や、個人への誹謗中傷の投稿、性的な投稿、その他法に反する投稿をしない事に同意します。
あなたは、{SITE_NAME}の管理者、ウェブマスター、モデレーターが如何なる時も投稿内容を編集・削除する権利を有することに同意します。あなたは、ユーザとしてあなたが投稿した情報がデータベースに保存されることに同意します。この情報は、あなたの同意無しに管理者、ウェブマスターより第三者に開示されることはありませんが、データが流出する恐れのあるハッキング等の行為に対して管理者、ウェブマスターは責任を負うことはありません。
<br>
<br>
このサイトでは、あなたのコンピュータに情報を保存するためにクッキーを使用します。クッキーはあなたの閲覧を快適にする為だけに使用されます。メールアドレスは、あなたの登録に関する詳細及びパスワードの認証の為だけに使用されます。 
<br>
<br>
「同意します」をクリックすることで、あなたは上記の利用規約に同意します。
EOT;

$lang_register_php = array(
  'page_title' => 'ユーザ登録',
  'term_cond' => '利用規約',
  'i_agree' => '同意します',
  'submit' => '登録実行',
  'err_user_exists' => '入力されたユーザ名は既に登録されています、別のユーザ名を入力してください。',
  'err_password_mismatch' => 'パスワードが一致しません、再度入力してください。',
  'err_uname_short' => 'ユーザ名は2文字以上にしてください。',
  'err_password_short' => 'パスワードは2文字以上にしてください。',
  'err_uname_pass_diff' => 'ユーザ名とパスワードは異なる必要があります。',
  'err_invalid_email' => 'メールアドレスが正しくありません。',
  'err_duplicate_email' => '他のユーザが既に同じメールアドレスを登録しています。',
  'enter_info' => '登録情報を入力してください',
  'required_info' => '必須項目',
  'optional_info' => '任意項目',
  'username' => 'ユーザ名',
  'password' => 'パスワード',
  'password_again' => 'パスワードをもう一度',
  'email' => 'メールアドレス',
  'location' => '居住地',
  'interests' => '興味のあること',
  'website' => 'ホームページ',
  'occupation' => '職業',
  'error' => 'エラー',
  'confirm_email_subject' => '%s - Registration confirmation',
  'information' => '情報',
  'failed_sending_email' => '登録確認メールが送信できません !',
  'thank_you' => 'ご登録ありがとうございます。<br /><br />アカウントの活性化に関する情報が登録されたメールアドレス宛に送信されました。',
  'acct_created' => 'あなたのアカウントが作成されました。ユーザ名とパスワードでログイン出来ます。',
  'acct_active' => 'あなたのアカウントが活性化されました。ユーザ名とパスワードでログイン出来ます。',
  'acct_already_act' => 'あなたのアカウントは既に活性化されています !',
  'acct_act_failed' => 'このアカウントは活性化出来ません !',
  'err_unk_user' => '選択したユーザは存在しません !',
  'x_s_profile' => '%s のプロフィール',
  'group' => 'グループ',
  'reg_date' => '登録年月日',
  'disk_usage' => 'ディスク使用量',
  'change_pass' => 'パスワードの変更',
  'current_pass' => '現在のパスワード',
  'new_pass' => '新しいパスワード',
  'new_pass_again' => '新しいパスワードをもう一度',
  'err_curr_pass' => '現在のパスワードが正しくありません。',
  'apply_modif' => '更新の適用',
  'change_pass' => 'パスワードの変更',
  'update_success' => 'プロフィールが更新されました。',
  'pass_chg_success' => 'パスワードが変更されました。',
  'pass_chg_error' => 'パスワードが変更されませんでした。',
  'notify_admin_email_subject' => '%s - Registration notification',
  'notify_admin_email_body' => 'ギャラリーにユーザ名 "%s" の新しいユーザが登録されました',
);

$lang_register_confirm_email = <<<EOT
{SITE_NAME} へのご登録ありがとうございます。

あなたのユーザ名は "{USER_NAME}" です。
あなたのパスワードは "{PASSWORD}" です。

アカウントの活性化をするには下記のリンクをクリック又は
ブラウザのアドレス欄にコピーしてください。

{ACT_LINK}管理者

{SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'コメントのレビュー',
  'no_comment' => 'レビューするコメントはありません。',
  'n_comm_del' => '%s件のコメントが削除されました。',
  'n_comm_disp' => '表示するコメント数',
  'see_prev' => '前へ',
  'see_next' => '次へ',
  'del_comm' => '選択したコメントを削除',
);

// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
  0 => '写真の検索',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => '新しいファイルの検索',
  'select_dir' => 'ディレクトリ選択',
  'select_dir_msg' => 'ここではFTPによりサーバにアップロードしたファイルをアルバムに一括登録します。<br /><br />ファイルをアップロードしたディレクトリを選択してください。',
  'no_pic_to_add' => '追加するファイルはありません。',
  'need_one_album' => 'この機能を使うためには1つ以上のアルバムが必要です。',
  'warning' => '警告',
  'change_perm' => 'スクリプトがこのディレクトリに書込めませんでした。ファイルを追加する前にディレクトリのパーミッションモードを755又は777に変更する必要があります !',
  'target_album' => '<b>「</b>%s<b>」内のファイルを</b>%s<b>に追加する</b>',
  'folder' => 'フォルダ',
  'image' => '画像',
  'album' => 'アルバム',
  'result' => '結果',
  'dir_ro' => '書込み権がありません。',
  'dir_cant_read' => '読取り権がありません。',
  'insert' => '新規ファイルのギャラリーへの追加',
  'list_new_pic' => '新規ファイル一覧',
  'insert_selected' => '選択したファイルの追加',
  'no_pic_found' => '新しいファイルは見つかりませんでした。',
  'be_patient' => '暫くお待ちください。',
  'no_album' => 'アルバムが選択されていません',
  'notes' =>  '<ul>'.
                         '<li><b>OK</b> : 正常にファイルが追加されました。'.
                         '<li><b>DP</b> : ファイルが重複して既にデータベースに登録されています。'.
                         '<li><b>PB</b> : ファイルを追加出来ませんでした、設定及びファイルが登録されるディレクトリのパーミッションを確認してください。'.
                         '<li><b>NA</b> : ファイルを追加するアルバムが選択されていません。\'<a href="javascript:history.back(1)">戻る</a>\'をクリックしてアルバムを選択してください。アルバムを作成していない場合は、<a href="albmgr.php">最初に作成してください。</a></li>'.
                          '<li>OK、DP、PBサインのいずれも表示されなかった場合は、PHPエラーを表示するために破損した写真をクリックしてください。'.
                         '<li>タイムアウトが発生した場合、ブラウザの更新ボタンをクリックしてください。'.
                         '</ul>',
  'select_album' => 'アルバムを選択してください',
  'check_all' => '全てを選択',
  'uncheck_all' => '全てを選択解除',
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'アクセス禁止ユーザ',
  'user_name' => 'ユーザ名',
  'ip_address' => 'IPアドレス',
  'expiry' => '禁止終了 (空白は永久)',
  'edit_ban' => '変更を保存',
  'delete_ban' => '削除',
  'add_new' => '新しい禁止ユーザを追加',
  'add_ban' => '追加',
  'error_user' => 'ユーザが見つかりません',
  'error_specify' => 'ユーザ名又はIPアドレスを特定してください',
  'error_ban_id' => 'アクセス禁止IDが違います!',
  'error_admin_ban' => '自分自身をアクセス禁止に出来ません!',
  'error_server_ban' => '自分自身のサーバをアクセス禁止にしますか? それは出来ません...',
  'error_ip_forbidden' => 'このIPアドレスをアクセス禁止に出来ません - ルーティング出来ないIPアドレスです!',
  'lookup_ip' => 'IPアドレスのルックアップ',
  'submit' => 'go!',
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'ファイルのアップロード',
  'custom_title' => 'カスタマイズ・リクエストフォーム',
  'cust_instr_1' => 'アップロードボックス数を選択することが出来ます。下記の制限値以上に選択することは出来ません。',
  'cust_instr_2' => 'ボックス数リクエスト',
  'cust_instr_3' => 'ファイルアップロードボックス: %s',
  'cust_instr_4' => 'URI/URL アップロードボックス: %s',
  'cust_instr_5' => 'URI/URL アップロードボックス:',
  'cust_instr_6' => 'ファイルアップロードボックス:',
  'cust_instr_7' => '作成したいそれぞれの種類のアップロードボックス数を入力してください。その後「続く」をクリックしてください。 ',
  'reg_instr_1' => 'フォームの作成に間違いがあります。',
  'reg_instr_2' => '下記のアップロードボックスを使用してファイルをアップロードすることが出来ます。サーバにアップロードするファイルのサイズは、%s KBを超えないようにしてください。ZIPファイルは「ファイルのアップロード」及び「URI/URLのアップロード」セクションより圧縮されたままアップロードされます。',
  'reg_instr_3' => 'ZIP圧縮されたファイル又は圧縮されたアーカイブを展開したい場合は、ZIPファイルの展開アップロード」を使用してください。',
  'reg_instr_4' => 'URI/URLアップロードセクションを使用するときは、http://www.mysite.com/images/example.jpg のようにファイルのパスを入力してください。',
  'reg_instr_5' => 'フォームの入力完了後、「続く」をクリックしてください。',
  'reg_instr_6' => 'ZIPファイルの展開アップロード:',
  'reg_instr_7' => 'ファイルのアップロード:',
  'reg_instr_8' => 'URI/URLアップロード:',
  'error_report' => 'エラーレポート',
  'error_instr' => '次のアップロードファイルにエラーが発生しました:',
  'file_name_url' => 'ファイル名/URL',
  'error_message' => 'エラーメッセージ',
  'no_post' => 'ファイルの投稿はありません。',
  'forb_ext' => '許可されていないファイル拡張子です。',
  'exc_php_ini' => 'php.iniで許可されているファイルサイズを超えました。',
  'exc_file_size' => 'CPGで許可されたファイルサイズを超えました。', 
  'partial_upload' => '一部のみアップロードされました。',
  'no_upload' => 'アップロードされませんでした。',
  'unknown_code' => '不明なPHPアップロードエラーコードです。',
  'no_temp_name' => 'アップロードされませんでした - テンポラリ名称がありません。',
  'no_file_size' => 'データがありません。',
  'impossible' => '移動できません。',
  'not_image' => 'イメージがありません。',
  'not_GD' => 'GD extensionではありません。',
  'pixel_allowance' => '許可されたピクセルの範囲を超えました。',
  'incorrect_prefix' => '間違ったURI/URL接頭辞です。',
  'could_not_open_URI' => 'URIをオープン出来ません。',
  'unsafe_URI' => '安全性が検証出来ません。',
  'meta_data_failure' => 'メタデータエラー',
  'http_401' => '401 Unauthorized',
  'http_402' => '402 Payment Required',
  'http_403' => '403 Forbidden',
  'http_404' => '404 Not Found',
  'http_500' => '500 Internal Server Error',
  'http_503' => '503 Service Unavailable',
  'MIME_extraction_failure' => 'MIMEタイプを決定出来ません。',
  'MIME_type_unknown' => '不明なMIMEタイプです。',
  'cant_create_write' => '書込みファイルを作成出来ません。',
  'not_writable' => '書込みファイルに書き込めません。',
  'cant_read_URI' => 'URI/URLを読み込めません。',
  'cant_open_write_file' => 'URI書込みファイルをオープン出来ません。',
  'cant_write_write_file' => 'URI書込みファイルに書き込めません。',
  'cant_unzip' => 'ZIPファイルの展開が出来ません。',
  'unknown' => '不明なエラー',
  'succ' => 'アップロード完了',
  'success' => '%s のファイルアップロードが正常に完了しました。',
  'add' => 'アルバムにファイルを追加する場合は、「続く」をクリックしてください。',
  'failure' => 'アップロードエラー',
  'f_info' => 'ファイル情報',
  'no_place' => 'ファイルはアップロードされませんでした。',
  'yes_place' => 'ファイルが正常にアップロードされました。',
  'max_fsize' => 'アップロード可能な最大ファイルサイズは %sKB です。',
  'album' => 'アルバム',
  'picture' => 'ファイル',
  'pic_title' => 'ファイル名',
  'description' => 'ファイルの説明',
  'keywords' => 'キーワード (半角スペースで区切る)',
  'err_no_alb_uploadables' => 'ファイルのアップロードが許可されたアルバムはありません。',
  'place_instr_1' => 'アルバムにファイルをアップロードしてください。各ファイルに関連情報を入力することも出来ます。',
  'place_instr_2' => '更にファイルをアップロードする必要があります。「続く」をクリックしてください。',
  'process_complete' => '全てのファイルが正常にアップロードされました。',
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'title' => 'ユーザの管理',
  'name_a' => 'ユーザ名の昇順',
  'name_d' => 'ユーザ名の降順',
  'group_a' => 'グループ名の昇順',
  'group_d' => 'グループ名の降順',
  'reg_a' => '登録日の昇順',
  'reg_d' => '登録日の降順',
  'pic_a' => '写真枚数の昇順',
  'pic_d' => '写真枚数の降順',
  'disku_a' => 'ディスク使用量の昇順',
  'disku_d' => 'ディスク使用量の降順',
  'lv_a' => '最終アクセスの昇順',
  'lv_d' => '最終アクセスの降順',
  'sort_by' => 'ユーザの並び替え',
  'err_no_users' => 'ユーザテーブルが空です !',
  'err_edit_self' => '自分自身のプロフィールは編集できません。「マイプロフィール」を使用してください。',
  'edit' => '編集',
  'delete' => '削除',
  'name' => 'ユーザ名',
  'group' => 'グループ',
  'inactive' => '非活性',
  'operations' => '操作',
  'pictures' => 'ファイル',
  'disk_space' => '使用済み容量 / 容量',
  'registered_on' => '登録年月日',
  'last_visit' => '最終アクセス',
  'u_user_on_p_pages' => 'ユーザ数 %d / %dページ中',
  'confirm_del' => '本当にこのユーザを削除しても宜しいですか ? \\ユーザに属する全てのファイルとアルバムは削除されます。',
  'mail' => 'メール',
  'err_unknown_user' => '選択したユーザは存在しません !',
  'modify_user' => 'ユーザの変更',
  'notes' => '注意',
  'note_list' => '<li>現在のパスワードを変更したくない場合は、「パスワード」フィールドを空白にしてください。',
  'password' => 'パスワード',
  'user_active' => 'ユーザを活性化する',
  'user_group' => 'グループ',
  'user_email' => 'メールアドレス',
  'user_web_site' => 'ホームページ',
  'create_new_user' => '新規ユーザの作成',
  'user_location' => '居住地',
  'user_interests' => '興味のあること',
  'user_occupation' => '職業',
  'latest_upload' => '最新アップロード',
  'never' => '無し',
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
  'title' => '管理ツール (写真のリサイズ)',
  'what_it_does' => '処理内容',
  'what_update_titles' => 'タイトルをファイル名で更新する',
  'what_delete_title' => 'タイトルの削除',
  'what_rebuild' => 'サムネイルの再構築及び写真のリサイズ',
  'what_delete_originals' => 'オリジナルサイズの画像を削除して、サイズ変更後の画像と入れ替える',
  'file' => 'ファイル',
  'title_set_to' => 'タイトル設定',
  'submit_form' => '送信',
  'updated_succesfully' => '更新完了',
  'error_create' => '作成中にエラーが発生しました',
  'continue' => 'さらに画像を処理する',
  'main_success' => 'ファイル %s がメインファイルに設定されました',
  'error_rename' => '%s を %s にリネーム中にエラーが発生しました',
  'error_not_found' => 'ファイル %s が見つかりませんでした',
  'back' => 'メインに戻る',
  'thumbs_wait' => 'サムネイルの更新 及び/又は 写真のリサイズを行っています、お待ちください...',
  'thumbs_continue_wait' => 'サムネイルの更新 及び/又は 写真のリサイズを行っています...',
  'titles_wait' => 'タイトルの更新を行っています、お待ちください...',
  'delete_wait' => 'タイトルを削除しています、お待ちください...',
  'replace_wait' => 'オリジナルサイズの画像を削除して変更後の画像と入れ替えを行っています、お待ちください..',
  'instruction' => 'クイックインストラクション',
  'instruction_action' => 'アクションの選択',
  'instruction_parameter' => 'パラメータの設定',
  'instruction_album' => 'アルバムの選択',
  'instruction_press' => '%s を押す',
  'update' => 'サムネイルの更新 及び/又は 写真のリサイズ',
  'update_what' => '更新対象',
  'update_thumb' => 'サムネイルの作成のみ',
  'update_pic' => '写真のリサイズのみ',
  'update_both' => 'サムネイルの作成及び写真のリサイズ',
  'update_number' => 'クリックあたりの画像処理数',
  'update_option' => '(タイムアウトする時は、この数値を低めに設定してください)',
  'filename_title' => 'ファイル名 &rArr; ファイルタイトル',
  'filename_how' => 'ファイル名の変更方法',
  'filename_remove' => '.jpgを空白付きの _ (アンダースコア)に変更する',
  'filename_euro' => '2003_11_23_13_20_20.jpg を 23/11/2003 13:20 に変更する',
  'filename_us' => '2003_11_23_13_20_20.jpg を 11/23/2003 13:20 に変更する',
  'filename_time' => '2003_11_23_13_20_20.jpg を 13:20 に変更する',
  'delete' => 'ファイルタイトル又はオリジナルサイズの写真を削除する',
  'delete_title' => 'ファイルタイトルを削除する',
  'delete_original' => 'オリジナルサイズの写真を削除する',
  'delete_replace' => 'オリジナルサイズの画像を削除して、サイズ変更後の画像と入れ替える',
  'select_album' => 'アルバムの選択',
  'delete_orphans' => '迷子コメントの削除 (全アルバム対象)',
  'orphan_comment' => '件の迷子コメントが見つかりました',
  'delete' => '削除',
  'delete_all' => '全てを削除する',
  'comment' => 'コメント: ',
  'nonexist' => '存在しないファイル # に割り当てられています',
  'phpinfo' => 'php情報の表示',
  'update_db' => 'データベースの更新',
  'update_db_explanation' => 'coppermineの入れ替え、修正の追加、以前のバージョンよりアップグレードを行った場合は、データベースの更新を必ず1度実行してください。データベースの更新では必要なテーブルの追加及びcoppermineデータベースの設定を行います。',
);

?>