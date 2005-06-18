<?php
//This version is modifide by Bmossavari@gmail.com and it's first persian version//
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
// CVS version: $Id: persian-utf-8.php,v 1.1 2005/03/22 08:26:25 gaugau Exp $
// ------------------------------------------------------------------------- //

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Persian',
  'lang_name_native' => 'فارسی',
  'lang_country_code' => 'IR',
  'trans_name'=> 'B.Mossavari ',
  'trans_email' => 'bmossavari@gmail.com',
  'trans_website' => 'http://myprj.com/',
  'trans_date' => '2005-03-17',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'rtl'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('بایت', 'ك.ب', 'م.ب');

// Day of weeks and months
$lang_day_of_week = array('یكشنبه', 'دوشنبه', 'سه شنبه', 'چهارشنبه', 'پنجشنبه', 'جمعه', 'شنبه');
$lang_month = array('ژانویه', 'فوریه', 'مارس', 'آپریل', 'می', 'جون', 'جولای', 'آگوست', 'سبتامبر', 'اكتبر', 'نوامبر', 'دسامبر');

// Some common strings
$lang_yes = 'بله';
$lang_no  = 'خير';
$lang_back = 'بازگشت';
$lang_continue = 'ادامه';
$lang_info = 'اطلاعات';
$lang_error = 'خطا';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%B %d, %Y';
$lastcom_date_fmt =  '%m/%d/%y at %H:%M'; //cpg1.3.0
$lastup_date_fmt = '%B %d, %Y';
$register_date_fmt = '%B %d, %Y';
$lasthit_date_fmt = '%B %d, %Y at %I:%M %p'; //cpg1.3.0
$comment_date_fmt =  '%B %d, %Y at %I:%M %p'; //cpg1.3.0

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*','كس','*كون*','كیر','*جنده*','*فاحشه*','دول','دودول','*قرمساق*','*دیوس*','*قهبه*');

$lang_meta_album_names = array(
        'random' => 'تصویرهای انتخاب شده به صورت تصادفی',
        'lastup' => 'آخرین ارسالها',
        'lastalb'=> 'آخرین آلبوم تغییر یافته',
        'lastcom' => 'آخرین نوشته',
        'topn' => 'بیشترین بازدید',
        'toprated' => 'بالاترین امتیاز',
        'lasthits' => 'آخرین امتیاز',
        'search' => 'جستجوی نتایج',
        'favpics'=> 'تصویرهای مورد علاقه'
);

$lang_errors = array(
  'access_denied' => 'شما اجازه دسترسی به این صفحه را ندارید.',
  'perm_denied' => 'شما اجازه انجام این عمل را ندارید.',
  'param_missing' => 'اطلاعات برای انجام كار كافی نیست.',
  'non_exist_ap' => 'آلبوم انتخاب شده وجود ندارد!',
  'quota_exceeded' => 'بیشتر از فضای تخصیص داده شده<br /><br />به شما [quota]K فضا تخصیص داده شده است, فایل شما به [space]K فضا نیاز دارد, با اضافه كردن این فایل فضا استفاده شده توسط شما از فضای تخصیص داده شده به شما بیشتر می گردد.',
  'gd_file_type_err' => 'در حالت استفاده از GD Library تنها فرمت های پذیرفته شده JPEG و PNG می باشند.',
  'invalid_image' => 'تصویر ارسال شده خراب است یا GD Library نمی تواند تصویر را پردازش كند.',
  'resize_failed' => 'امكان ساخت thumbnail یا تغییر سایز تصویر نیست!',
  'no_img_to_display' => 'تصویری وجود ندارد.',
  'non_exist_cat' => 'موضوع انتخاب شده وجود ندارد',
  'orphan_cat' => 'یك موضوع بدون parent وجود دارد ، مدیریت آلبوم را اجرا كنید تا اشكال را برطرف كند.',
  'directory_ro' => 'زیر شاخه \'%s\' غیر قابل تغییر است, نمی توانید تصویر را پاك كنید.',
  'non_exist_comment' => 'نوشته (Comment)انتخاب شده موجود نیست.',
  'pic_in_invalid_album' => 'تصویر در آلبومی (%s)كه موجود نیست!?',
  'banned' => 'متاسفانه در حال حاضر امكان دسترسی شما به سایت محدود شده.',
  'not_with_udb' => 'این قابلیت در Coppermine  محدود شده زیرا نرم افزار Froum این قابلیت را بدست گرفته است.در غیر این صورت قابلیت مورد نظر شما در زمان پیكربندی محدود شده است.',
  'offline_title' => 'خارج از سرویس', //cpg1.3.0
  'offline_text' => 'این بخش در حال حاضر خارج از سرویس است ، به زودی راه اندازی می شود.', //cpg1.3.0
  'ecards_empty' => 'در حال حاضر هیچ كارتی برای نمایش موجود نیست.در پیكربندی  ، حفظ كارت پستال را enable كنید.', //cpg1.3.0
  'action_failed' => 'عدم قابلیت انجام درخواست ، درخواست شما خارج از توان برنامه است.', //cpg1.3.0
  'no_zip' => 'برنامه های مورد نیاز برای استفاده از فایلهای ZIP موجود نیست، با مدیریت تماس بگیرید.', //cpg1.3.0
  'zip_type' => 'شما اجازه ارسال فایل ZIP را ندارید.', //cpg1.3.0
);

$lang_bbcode_help = 'كدهای قابل استفاده: <li>[b]<b>Bold</b>[/b]</li> <li>[i]<i>Italic</i>[/i]</li> <li>[url=http://yoursite.com/]Url Text[/url]</li> <li>[email]user@domain.com[/email]</li>'; //cpg1.3.0

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
        'alb_list_title' => 'رفتن به لیست آلبوم',
        'alb_list_lnk' => 'لیست آلبوم',
        'my_gal_title' => 'رفتن به گالری شخصی',
        'my_gal_lnk' => 'گالری من',
        'my_prof_lnk' => 'مشخصات من',
        'adm_mode_title' => 'تغییر به حالت مدیریت',
        'adm_mode_lnk' => 'مدیریت',
        'usr_mode_title' => 'تغییر به حالت كاربر',
        'usr_mode_lnk' => 'كاربر',
        'upload_pic_title' => 'ارسال فایل به آلبوم',
        'upload_pic_lnk' => 'ارسال فایل',
        'register_title' => 'ایجاد كاربر جدید',
        'register_lnk' => 'كاربر جدید',
        'login_lnk' => 'ورود',
        'logout_lnk' => 'خروج',
        'lastup_lnk' => 'آخرین ارسال',
        'lastcom_lnk' => 'آخرین نوشته',
        'topn_lnk' => 'بیشترین بازدید',
        'toprated_lnk' => 'بالاترین امتیاز',
        'search_lnk' => 'جستجو',
        'fav_lnk' => 'علاقمندی من',
  'memberlist_title' => 'نمایش لیست اعضا', //cpg1.3.0
  'memberlist_lnk' => 'لیست اعضا', //cpg1.3.0
  'faq_title' => 'سوال های متداول پرسیده شده در &quot;Coppermine&quot;', //cpg1.3.0
  'faq_lnk' => 'سوال های متداول', //cpg1.3.0
);

$lang_gallery_admin_menu = array(
  'upl_app_lnk' => 'اجازه ارسال',
  'config_lnk' => 'پیكربندی',
  'albums_lnk' => 'آلبوم ها',
  'categories_lnk' => 'موضوعات',
  'users_lnk' => 'كاربرها',
  'groups_lnk' => 'گروه ها',
  'comments_lnk' => 'مشاهده نوشته ها', //cpg1.3.0
  'searchnew_lnk' => 'فایلهای اضافه شده', //cpg1.3.0
  'util_lnk' => 'ابزار مدیریت', //cpg1.3.0
  'ban_lnk' => 'كاربرهای محدود شده',
  'db_ecard_lnk' => 'مشاهده كارتها', //cpg1.3.0
);

$lang_user_admin_menu = array(
        'albmgr_lnk' => 'ایجاد / سفارش آلبوم من',
        'modifyalb_lnk' => 'تغییر آلبوم من',
        'my_prof_lnk' => 'مشخصات شخصی',
);

$lang_cat_list = array(
        'category' => 'موضوعات',
        'albums' => 'آلبوم ها',
        'pictures' => 'تصاویر',
);

$lang_album_list = array(
        'album_on_page' => '%d در آلبوم %d صفحه'
);

$lang_thumb_view = array(
        'date' => 'تاریخ',
  //Sort by filename and title
  'name' => 'نام فایل',
  'title' => 'عنوان',
  'sort_da' => 'مرتب سازی بر حسب تاریخ (صعودی)',
  'sort_dd' => 'مرتب سازی بر حسب تاریخ (نزولی)',
  'sort_na' => 'مرتب سازی بر حسب نام (صعودی)',
  'sort_nd' => 'مرتب سازی بر حسب نام (نزولی)',
  'sort_ta' => 'مرتب سازی بر حسب عنوان (صعودی)',
  'sort_td' => 'مرتب سازی بر حسب عنوان (نزولی)',
  'download_zip' => 'دریافت به صورت ZIP', //cpg1.3.0
  'pic_on_page' => '%d فایل در %d صفحه',
  'user_on_page' => '%d كاربر در %d صفحه', //cpg1.3.0
);

$lang_img_nav_bar = array(
  'thumb_title' => 'بازگشت به لیست تصاویر',
  'pic_info_title' => 'نمایش/عدم نمایش مشخصات فایل', //cpg1.3.0
  'slideshow_title' => 'نمایش پشت سر هم تصاویر',
  'ecard_title' => 'ارسال این تصویر به صورت كارت پستال', //cpg1.3.0
  'ecard_disabled' => 'امكان ارسال كارت پستال محدود شده است.',
  'ecard_disabled_msg' => 'شما امكان ارسال كارت پستال ندارید.', //js-alert //cpg1.3.0
  'prev_title' => 'مشاهده عكس قبلی', //cpg1.3.0
  'next_title' => 'مشاهده عكس بعدی', //cpg1.3.0
  'pic_pos' => 'فایل %s/%s', //cpg1.3.0
);

$lang_rate_pic = array(
        'rate_this_pic' => 'امتیاز به این فایل',
        'no_votes' => '(هنوز امتیازی داده نشده)',
        'rating' => '(رتبه: %s / 5 با %s رای)',
        'rubbish' => 'بی خود',
        'poor' => 'ضعیف',
        'fair' => 'قابل قبول',
        'good' => 'خوب',
        'excellent' => 'عالی',
        'great' => 'باور نكردنی',
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
  CRITICAL_ERROR => 'خطای سیستم',
  'file' => 'فایل: ',
  'line' => 'خط: ',
);

$lang_display_thumbnails = array(
        'filename' => 'نام فایل : ',
        'filesize' => 'حجم فایل : ',
        'dimensions' => 'ابعاد : ',
        'date_added' => 'تاریخ ارسال : '
);

$lang_get_pic_data = array(
        'n_comments' => '%s نوشته(نظر)',
        'n_views' => '%s مشاهده',
        'n_votes' => '(%s رای)'
);

$lang_cpg_debug_output = array(
  'debug_info' => 'اطلاعات دیباگَ', //cpg1.3.0
  'select_all' => 'انتخاب همه', //cpg1.3.0
  'copy_and_paste_instructions' => 'اگر از ساپورت درخواست كمك دارید اطلاعات دیباگ را در پست خود copy and paste كنید. دقت كنید كه تمامی رمزهای كاربری را با علامت **** جایگزین كنید.', //cpg1.3.0
  'phpinfo' => 'نمایش مشخصات php', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => 'زبان پیش فرض', //cpg1.3.0
  'choose_language' => 'انتخاب زبان', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'تم پیش فرض', //cpg1.3.0
  'choose_theme' => 'انتخاب تم', //cpg1.3.0
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
        'Exclamation' => 'تعجب',
        'Question' => 'سوال',
        'Very Happy' => 'خیلی خوشحال',
        'Smile' => 'خندان',
        'Sad' => 'ناراحت',
        'Surprised' => 'متعجب',
        'Shocked' => 'ترسیده',
        'Confused' => 'قاطی كرده',
        'Cool' => 'جالب',
        'Laughing' => 'می خندد',
        'Mad' => 'عصبانی',
        'Razz' => 'سروصدا',
        'Embarassed' => 'تحقیر شده',
        'Crying or Very sad' => 'گریان یا خیلی ناراحت',
        'Evil or Very Mad' => 'دیوانه یا خیلی عصبانی',
        'Twisted Evil' => 'در حال انفجار',
        'Rolling Eyes' => 'سرگردان',
        'Wink' => 'چشمك',
        'Idea' => 'ایده',
        'Arrow' => 'نشانه',
        'Neutral' => 'عادی',
        'Mr. Green' => 'عصبی',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  0 => 'در حال خروج از حالت مدیریت. . .',
  1 => 'در حال ورود به حالت مدیریت...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
        'alb_need_name' => 'آلبوم ها به اسم احتیاج دارند! این طور نیست!!؟',
        'confirm_modifs' => 'مطمئنیدكه می خواهید این تغییرات را انجام دهید؟',
        'no_change' => 'شما تغییری انجام ندادید!',
        'new_album' => 'آلبوم جدید',
        'confirm_delete1' => 'مطمئنید كه می خواهید این آلبوم را حذف كنید ؟',
        'confirm_delete2' => '\nتمامی فایلها و نظرات این آلبوم از بین خواهد رفت !',
        'select_first' => 'ابتدا آلبوم را انتخاب كنید',
        'alb_mrg' => 'مدیریت آلبوم',
        'my_gallery' => '* گالری من *',
        'no_category' => '* موضوعي موجود نيست *',
        'delete' => 'حذف',
        'new' => 'جدید',
        'apply_modifs' => 'اعمال تغییرات ',
        'select_category' => 'انتخاب موضوع ',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
        'miss_param' => 'پارامتر های لازم برای  \'%s\'داده نشده !',
        'unknown_cat' => 'موضوع انتخاب شده در دیتابیس نیست!',
        'usergal_cat_ro' => 'موضوع گالری های كاربر قابل حذف نیست !',
        'manage_cat' => 'مدیریت موضوعات',
        'confirm_delete' => 'مطمئنید كه می خواهید این موضوع را حذف كنید ?',
        'category' => 'موضوع',
        'operations' => 'عملیات',
        'move_into' => 'انتقال به',
        'update_create' => 'تغییر/تصحیح موضوع',
        'parent_cat' => 'موضوع مادر',
        'cat_title' => 'عنوان موضوع',
        'cat_thumb' => 'عكس(Thumbnail) موضوع', //cpg1.3.0
        'cat_desc' => 'شرح موضوع'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
        'title' => 'پیكربندی',
        'restore_cfg' => 'بازگشت به حالت پیكربندی اولیه',
        'save_cfg' => 'ثبت پیكربندی جدید',
        'notes' => 'یاداشتها',
        'info' => 'اطلاعات',
        'upd_success' => 'پیكربندی به روز رسانی شد',
        'restore_success' => 'پیكربندی اولیه اعمال شد',
        'name_a' => 'نام(صعودی)',
        'name_d' => 'نام(نزولی)',
        'title_a' => 'عنوان(صعودی)',
        'title_d' => 'عنوان(نزولی)',
        'date_a' => 'تاریخ(صعودی)',
        'date_d' => 'تاریخ(نزولی)',
        'th_any' => 'Max Aspect',
        'th_ht' => 'ارتفاع',
        'th_wd' => 'عرض',
        'label' => 'عنوان', //cpg1.3.0
        'item' => 'آیتم', //cpg1.3.0
        'debug_everyone' => 'همه', //cpg1.3.0
        'debug_admin' => 'فقط مدیر', //cpg1.3.0
        );

if (defined('CONFIG_PHP')) $lang_config_data = array(
  'تنظیمات اصلی',
  array('نام گالری', 'gallery_name', 0),
  array('توضیحات گالری', 'gallery_description', 0),
  array('پست الكترونیك مدیر گالری', 'gallery_admin_email', 0),
  array('آدرس لینك \'عكسهای بیشتر\' در كارت پستالها', 'ecards_more_pic_target', 0),
  array('گالری بسته است', 'offline', 1), //cpg1.3.0
  array('حفظ كارت پستالها', 'log_ecards', 1), //cpg1.3.0
  array('اجازه دانلود علاقمندی ها به صورت ZIP را دارد', 'enable_zipdownload', 1), //cpg1.3.0

  'زبان ، تم و كاركتر ست',
  array('زبان', 'lang', 5),
  array('تم', 'theme', 6),
  array('نمایش لیست زبان', 'language_list', 1), //cpg1.3.0
  array('نمایش پرچم زبان', 'language_flags', 8), //cpg1.3.0
  array('نمایش &quot;تنظیم مجدد&quot; در انتخاب زبان', 'language_reset', 1), //cpg1.3.0
  array('نمایش لیست تم ها', 'theme_list', 1), //cpg1.3.0
  array('نمایش &quot;تنظیم مجدد&quot; در انتخاب تم ها', 'theme_reset', 1), //cpg1.3.0
  array('نمایش پرسشهای متداول', 'display_faq', 1), //cpg1.3.0
  array('نمایش bbcode help', 'show_bbcode_help', 1), //cpg1.3.0
  array('Character encoding', 'charset', 4), //cpg1.3.0

  'نمایش لیست آلبوم',
        array('عرض جدول اصلی (به پیكسل یا درصد)', 'main_table_width', 0),
        array('تعداد تقسیمات موضوعات برای نمایش', 'subcat_level', 0),
        array('تعداد آلبوم ها برای نمایش', 'albums_per_page', 0),
        array('تعداد ستون های لیست آلبوم برای نمایش', 'album_list_cols', 0),
        array('اندازه ریزعكسها(Thumbnails) به پیكسل', 'alb_list_thumb_size', 0),
        array('محتویات صفحه اصلی', 'main_page_layout', 0),
            array('نمایش ریزعكسهای اول آلبوم در هر موضوع ','first_level',1),

  'نمایش ریزعكسها(Thumbnails)',
  array('تعداد ستونها در صفحه ریزعكسها', 'thumbcols', 0),
  array('تعداد سطرها در صفحه ریزعكسها', 'thumbrows', 0),
  array('بیشترین تعداد نمایش TAB در صفحه ', 'max_tabs', 10), //cpg1.3.0
  array('نمایش توضیحات عكس(علاوه بر عنوان)زیر ریزعكسها', 'caption_in_thumbview', 1), //cpg1.3.0
  array('نمایش دفعات مشاهده عكس زیر ریزعكسها', 'views_in_thumbview', 1), //cpg1.3.0
  array('نمایش تعداد نظرات نوشته شده زیر ریزعكسها', 'display_comment_count', 1),
  array('نمایش نام ارسال كننده زیر ریزعكسها', 'display_uploader', 1), //cpg1.3.0
  array('پیش فرض مرتب سازی فایل ها', 'default_sort_order', 3), //cpg1.3.0
  array('حداقل تعداد رای برای نمایش فایل در لیست  \'بهترین رتبه ها\'', 'min_votes_for_rating', 0),

  'نمایش تصاویر و نظرات',
  array('عرض جدول برای نمایش فایل (به پیكسل یا درصد)', 'picture_table_width', 0), //cpg1.3.0
  array('مشخصات فایل به طور پیش فرض قابل دیدن است', 'display_pic_info', 1), //cpg1.3.0
  array('حذف كلمات زشت از نظرات', 'filter_bad_words', 1),
  array('امكان استفاده از شكلك در نظرات', 'enable_smilies', 1),
  array('امكان ارسال چندین نظر برای یك فایل از طرف یك كاربر(از كار انداختن مخافظ سرریز نظرات)', 'disable_comment_flood_protect', 1), //cpg1.3.0
  array('حداكثر طول توضیحات یك فایل', 'max_img_desc_length', 0),
  array('حداكثر تعداد كاراكتر در یك كلمه', 'max_com_wlength', 0),
  array('حداكثر تعداد خط در یك نظر', 'max_com_lines', 0),
  array('حداكثر طول یك نظر', 'max_com_size', 0),
  array('نمایش با كادر فیلم', 'display_film_strip', 1),
  array('تعداد آیتمها در كادر فیلم', 'max_film_strip_items', 0),
  array('ارسال نامه به مدیریت در صورت نظردهی به فایل', 'email_comment_notification', 1), //cpg1.3.0
  array('مكث بین تصاویر در حالت پخش مداوم (Slideshow) به میلی ثانیه (1 ثانیه = 1000 میلی ثانیه)', 'slideshow_interval', 0), //cpg1.3.0

  'تنظیمات فایل ها و ریزعكسها', //cpg1.3.0
  array('كیفیت تصاویر JPEG', 'jpeg_qual', 0),
  array('حداكثر اندازه ریزعكسها <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0), //cpg1.3.0
  array('اندازه مورد استفاده (عرض یا ارتفاع یا نسبت عرض به ارتفاع) <a href="#notice2" class="clickable_option"><b>**</b></a>', 'thumb_use', 7),
  array('ایجاد تصاویر متوسط','make_intermediate',1),
  array('حداكثر عرض یا ارتفاع تصویر/فیلم متوسط <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0), //cpg1.3.0
  array('حداكثر حجم فایل ارسالی (كیلوبایت)', 'max_upl_size', 0), //cpg1.3.0
  array('حداكثر عرض یا ارتفاع تصویر/فیلم ارسالی ( پیكسل )', 'max_upl_width_height', 0), //cpg1.3.0

  'تنظیمات پیشرفته فایل ها و ریزعكسها', //cpg1.3.0
  array('نمایش آیكون آلبوم خصوصی به كاربری كه وارد سیستم نشده','show_private',1), //cpg1.3.0
  array('كاراكترهای ممنوع در نام فایل', 'forbiden_fname_char',0), //cpg1.3.0
  //array('Accepted file extensions for uploaded pictures', 'allowed_file_extensions',0), //cpg1.3.0
  array('نوع تصاویر مجاز (gpeg,png,...)', 'allowed_img_types',0), //cpg1.3.0
  array('نوع فیلمهای مجاز', 'allowed_mov_types',0), //cpg1.3.0
  array('نوع موزیك های مجاز', 'allowed_snd_types',0), //cpg1.3.0
  array('نوع متنهای مجاز', 'allowed_doc_types',0), //cpg1.3.0
  array('روش تغییر اندازه تصاویر','thumb_method',2), //cpg1.3.0
  array('آدرس نرم افزار تغییر اندازه ImageMagick(اگر انتخاب شده)(مثال /usr/bin/X11/)', 'impath', 0), //cpg1.3.0
  //array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types',0), //cpg1.3.0
  array('دستورات خط فرمان برای ImageMagick', 'im_options', 0), //cpg1.3.0
  array('خواندن EXIF فایل هایِ JPEG', 'read_exif_data', 1), //cpg1.3.0
  array('خواندن IPTC فایل های JPEG', 'read_iptc_data', 1), //cpg1.3.0
  array('زیرشاخه آلبوم <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0), //cpg1.3.0
  array('زیرشاخه فایل كاربران <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0), //cpg1.3.0
  array('پیشوند تصاویر متوسط <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0), //cpg1.3.0
  array('پیشوند ریزعكسها <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0), //cpg1.3.0
  array('حالت پیش فرض زیرشاخه ها', 'default_dir_mode', 0), //cpg1.3.0
  array('حاات پیش فرض فایل ها', 'default_file_mode', 0), //cpg1.3.0

  'تنظیمات كاربر',
  array('امكان ایجاد كاربر جدید', 'allow_user_registration', 1),
  array('ایجاد كاربر جدید منوط به كنترل از طریق ارسال نامه الكترونیك و دریافت جواب (eMail verification)', 'reg_requires_valid_email', 1),
  array('اطلاع به مدیریت در مورد ایجاد كاربر جدید از طریق نامه الكترونیك', 'reg_notify_admin_email', 1), //cpg1.3.0
  array('امكان استفاده دو كاربر از یك آدرس پست الكترونیك', 'allow_duplicate_emails_addr', 1),
  array('كاربران امكان ایجاد آلبوم خصوصی دارند(توجه: اگر از حالت \'بله\' به \'خیر\' تغییر دهید تمامی آلبوم های خصوصی ، عمومی خواهند شد. )', 'allow_private_albums', 1), //cpg1.3.0
  array('اطلاع به مدیریت در مورد درخواست كاربر برای اجازه آپلود', 'upl_notify_admin_email', 1), //cpg1.3.0
  array('امكان دسترسی به لیست اعضا برای كاربران وارد شده به سیستم', 'allow_memberlist', 1), //cpg1.3.0

  'توضیحات اضافی برای فایل ها (در صورت عدم استفاده خالی بگذارید)',
        array('نام فیلد اول', 'user_field1_name', 0),
        array('نام فیلد دوم', 'user_field2_name', 0),
        array('نام فیلد سوم', 'user_field3_name', 0),
        array('نام فیلد چهارم', 'user_field4_name', 0),

  'تنظیمات كوكی',
        array('نام كوكی كورد استفاده برنامه ( دقت كنید كه در صورت استفاده از BBS ها نام كوكی این برنامه با كوكی آنها یكی نباشد)', 'cookie_name', 0),
        array('آدرس كوكی مورد استفاده برنامه', 'cookie_path', 0),

  'تنظیمات دیگر',
  array('فعال سازی حالت دیباگ', 'debug_mode', 9), //cpg1.3.0
  array('نمایش نكات ایمنی در حالت دیباگ', 'debug_notice', 1), //cpg1.3.0

  '<br /><div align="right"><a name="notice1"></a>(*) در صورتی كه در دیتابیس شما فایلی وجود دارد هرگز این تنظیمات را تغییر ندهید.<br />
  <a name="notice2"></a>(**) وفتی این تنظیمات را تغییر می دهید ، تنها فایل هایی كه از این لحظه اضافه می گردند شامل تغییرات می شوند ، بنابراین در صورتی كه فایلی در دیتابیس دارید بهتر است این تنظیمات را تغییر ندهید. شما میتوانید برای تغییر تنظیمات فایل های موجود از &quot;<a href="util.php">ابزار مدیریت</a> (resize pictures)&quot; كه در بخش مدیریت است استفاده كنید.</div><br />', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'ارسال كارت پستال الكترونیك', //cpg1.3.0
  'ecard_sender' => 'ارسال كننده', //cpg1.3.0
  'ecard_recipient' => 'دریافت كننده', //cpg1.3.0
  'ecard_date' => 'تاریخ', //cpg1.3.0
  'ecard_display' => 'نمایش كارت', //cpg1.3.0
  'ecard_name' => 'نام', //cpg1.3.0
  'ecard_email' => 'آدرس پست الكترونیك', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'صعودی', //cpg1.3.0
  'ecard_descending' => 'نزولی', //cpg1.3.0
  'ecard_sorted' => 'ثبت شده', //cpg1.3.0
  'ecard_by_date' => 'در تاریخ', //cpg1.3.0
  'ecard_by_sender_name' => ' نام ارسال كننده ', //cpg1.3.0
  'ecard_by_sender_email' => ' آدرس پست الكترونیك ارسال كننده', //cpg1.3.0
  'ecard_by_sender_ip' => 'IP address ارسال كننده', //cpg1.3.0
  'ecard_by_recipient_name' => 'نام دریافت كننده', //cpg1.3.0
  'ecard_by_recipient_email' => 'آدرس پست الكترونیك دریافت كننده', //cpg1.3.0
  'ecard_number' => 'نمایش آمار ثبتِ %s تا %s از %s', //cpg1.3.0
  'ecard_goto_page' => 'برو به صفحه', //cpg1.3.0
  'ecard_records_per_page' => 'تعداد آماد در هر صفحه', //cpg1.3.0
  'check_all' => 'انتخاب همه', //cpg1.3.0
  'uncheck_all' => 'عدم انتخاب همه', //cpg1.3.0
  'ecards_delete_selected' => 'حذف كارت انتخاب شده', //cpg1.3.0
  'ecards_delete_confirm' => 'مطمئنید كه می خواهید كارت مورد نظر را حذف كنید؟! چك باكس را علامت بزنید !!', //cpg1.3.0
  'ecards_delete_sure' => 'مطمئن هستم!', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
        'empty_name_or_com' => 'لطفا نام و نظر خود را قید بفرمائید',
        'com_added' => 'نظر شما ارسال شد',
        'alb_need_title' => 'لطفا برای آلبوم عنوان ذكر كنید !',
        'no_udp_needed' => 'به روز رسانی احتیاج نیست.',
        'alb_updated' => 'آلبوم به روز رسانی شده است',
        'unknown_album' => 'آلبوم انتخاب شده موجود نیست یا شما اجازه ارسال فایل به این آلبوم را ندارید',
        'no_pic_uploaded' => 'فایلی ارسال نشد!<br /><br />اگر فایلی را برای ارسال انتخاب كرده بودید ،چك كنید كه آیا سرور اجازه ارسال فایل را میدهد یا خیر...',
        'err_mkdir' => 'عدم امكان ایجاد دایركتوری %s !',
        'dest_dir_ro' => 'ودایركتوری مقصد %s برای نوشتن توسط برنامه غیر قابل دسترسی است !',
        'err_move' => 'امكان فرستادن %s به %s نیست!',
        'err_fsize_too_large' => 'اندازه فایل ارسالی شما از حد مجاز بیشتر است (حداكثر اندازه مجاز %s x %s است) !',
        'err_imgsize_too_large' => 'حجم فایل ارسالی شما از حد مجاز بیشتر است (حداكثر حجم مجاز %s KB است) !',
        'err_invalid_img' => 'فایل ارسالی شما یك فایل تصویری نیست !',
        'allowed_img_types' => 'شما فقط می توانید تصاویر با فرمت %s ارسال نمائید.',
        'err_insert_pic' => 'فایل \'%s\' نمی تواند در آلبوم قرار بگیرد ',
        'upload_success' => 'فایل شما با موفقیت ارسال شد<br /><br />بعد از اجازه مدیریت فایل شما قابل بازدید می گردد.',
  'notify_admin_email_subject' => '%s - نتیجه ارسال', //cpg1.3.0
  'notify_admin_email_body' => 'تصویری توسط %s ارسال شده كه به اجازه شما برای بازدید نیاز دارد. %s ببینید', //cpg1.3.0
        'info' => 'اطلاعات',
        'com_added' => 'نظر اضافه شد',
        'alb_updated' => 'آلبوم به روز رسانی شد',
        'err_comment_empty' => 'متن نظر شما خالی است !',
        'err_invalid_fext' => 'پسوندهای قابل قبول برای فایلهای ارسالی : <br /><br />%s.',
        'no_flood' => 'متاسانه شما  آخرین نفری هستید كه در حال حاضر نظر داده است<br /><br />میتوانید نظر خود را ویرایش كنید',
        'redirect_msg' => 'شما در حال تغییر مسیر هستید.<br /><br /><br />اگر مسیر به طور اتوماتیك تغییر نكرد بر روی  \'ادامه\' كلیك كنید',
        'upl_success' => 'فایل شما با موفقیت اضافه شد.',
  'email_comment_subject' => 'Comment posted on Coppermine Photo Gallery', //cpg1.3.0
  'email_comment_body' => 'Someone has posted a comment on your gallery. See it at', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
        'caption' => 'عنوان',
        'fs_pic' => 'بزرگترین اندازه تصویر',
        'del_success' => 'با موفقیت حذف شد',
        'ns_pic' => 'انداره طبیعی تصویر',
        'err_del' => 'امكان حدف نیست',
        'thumb_pic' => 'ریزعكس (Thumbnail)',
        'comment' => 'نظر',
        'im_in_alb' => 'تصویر در آلبوم',
        'alb_del_success' => 'آلبوم \'%s\' با موفقیت حذف شد',
        'alb_mgr' => 'مدیریت آلبوم',
        'err_invalid_data' => 'اطلاعات اشتباه از \'%s\' دریافت شد',
        'create_alb' => 'آلبوم \'%s\' با موفقیت ایجاد شد',
        'update_alb' => 'به روز رسانی آلبوم \'%s\' با عنوان \'%s\' و ایندكس \'%s\'',
        'del_pic' => 'حدف فایل',
        'del_alb' => 'حدف آلبوم',
        'del_user' => 'حدف كاربر',
        'err_unknown_user' => 'كاربر انتخاب شده موجود نیست !',
        'comment_deleted' => 'نظر با موفقیت حدف شد',
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
  'confirm_del' => 'مطمئنید كه می خواهید این فایل را حدف كنید؟ \\nنظرات مربوط به این فایل نیز حدف خواهند شد', //js-alert //cpg1.3.0
  'del_pic' => 'این فایل را حدف كن', //cpg1.3.0
  'size' => '%s در %s پیكسل',
  'views' => '%s دفعه',
  'slideshow' => 'نمایش پیوسته ( Slideshow )',
  'stop_slideshow' => 'توقف نمایش پیوسته',
  'view_fs' => 'برای نمایش بزرگترین اندازه كلیك كنید',
  'edit_pic' => 'ویرایش توضیحات', //cpg1.3.0
  'crop_pic' => 'برش و چرخاندن', //cpg1.3.0
);

$lang_picinfo = array(
        'title' =>'مشخصات فایل',
        'Filename' => 'نام فایل',
        'Album name' => 'نام آلبوم',
        'Rating' => 'رتبه (%s رای)',
        'Keywords' => 'كلمات كلیدی',
        'File Size' => 'حجم فایل',
        'Dimensions' => 'ابعاد فایل ',
        'Displayed' => 'دفعات مشاهده',
        'Camera' => 'دوربین',
        'Date taken' => 'تاریخ عكس برداری',
		'ISO'=>'ISO',
        'Aperture' => 'Aperture',
        'Exposure time' => 'Exposure time',
 		'Focal length' => 'Focal length',
        'Comment' => 'نظرات',
        'addFav'=>'به علاقمندی ها اضافه كن',
        'addFavPhrase'=>'علاقمندی ها',
        'remFav'=>'از علاقمندی ها حذف كن',
  'iptcTitle'=>'IPTC عنوان', //cpg1.3.0
  'iptcCopyright'=>'IPTC حقوق', //cpg1.3.0
  'iptcKeywords'=>'IPTC نص', //cpg1.3.0
  'iptcCategory'=>'IPTC موضوع', //cpg1.3.0
  'iptcSubCategories'=>'IPTC موصوع فرعی', //cpg1.3.0
);

$lang_display_comments = array(
        'OK' => 'تائید',
        'edit_title' => 'ویرایش این نظر',
        'confirm_delete' => 'مطمئنید كه می خواهید این نظر را حدف كنید؟',
        'add_your_comment' => 'نظر بدهید',
        'name'=>'نام',
        'comment'=>'نظر',
        'your_name' => 'نامعلوم',
);

$lang_fullsize_popup = array(
        'click_to_close' => 'بر روی تصویر كلیك كنید تا این پنجره بسته شود',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
        'title' => 'ارسال كارت پستال',
        'invalid_email' => '<b>اخطار</b> : آدرس پست الكترونیك اشتباه است !',
        'ecard_title' => 'كارت پستالی از  %s برای شما',
  'error_not_image' => 'فقظ تصاویر را می توان به صورت كارت پستال ارسال كرد.', //cpg1.3.0
        'view_ecard' => 'اگر كارت پستال صحیح نمایش داده نشد اینجا كلیك كنید',
        'view_more_pics' => 'برای تصاویر بیشتر اینجا كلیك كنید !',
        'send_success' => 'كارت شما با موفقیت ارسال شد',
        'send_failed' => 'متاسفانه سرور نمی تواند كارت شما را ارسال نماید...',
        'from' => 'از',
        'your_name' => 'نام فرستنده',
        'your_email' => 'آدرس پست الكترونیك فرسنتده',
        'to' => 'به',
        'rcpt_name' => 'نام گیرنده',
        'rcpt_email' => 'آدرس پست الكترونیك گیرنده',
        'greetings' => 'عنوان پیام',
        'message' => 'پیام',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'مشخصات فایل', //cpg1.3.0
  'album' => 'آلبوم',
  'title' => 'عنوان عكس',
  'desc' => 'توضیحات',
  'keywords' => 'كلمات كلیدی',
  'pic_info_str' => '%s &times; %s - %sكیلوبایت - %s مشاهده - %s رای',
  'approve' => 'فایل مجوز', //cpg1.3.0
  'postpone_app' => 'منتظر مجوز',
  'del_pic' => 'حدف فایل', //cpg1.3.0
  'read_exif' => 'خواندن مجدد اطلاعات EXIF ً', //cpg1.3.0
  'reset_view_count' => 'صفر كردن شمارنده مشاهده',
  'reset_votes' => 'صفر كردن شمارنده رای',
  'del_comm' => 'حدف نظرات',
  'upl_approval' => 'ارسال فایل های دارای مجوز',
  'edit_pics' => 'ویرایش فایلها', //cpg1.3.0
  'see_next' => 'فایل بعدی', //cpg1.3.0
  'see_prev' => 'فایل قبلی', //cpg1.3.0
  'n_pic' => '%s فایل', //cpg1.3.0
  'n_of_pic_to_disp' => 'تعداد نمایش تصویر', //cpg1.3.0
  'apply' => 'اعمال تغییرات', //cpg1.3.0
  'crop_title' => 'Main Image Editor', //cpg1.3.0
  'preview' => 'پیش نمایش', //cpg1.3.0
  'save' => 'ثبت تصویر', //cpg1.3.0
  'save_thumb' =>'ثبت به صورت ریزعكس ( Thumbnail )', //cpg1.3.0
  'sel_on_img' =>'منطقه انتخاب شده باید كاملا داخل تصویر باشد!', //js-alert //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'سئوال های متداول', //cpg1.3.0
  'toc' => 'مختویات', //cpg1.3.0
  'question' => 'سئوال: ', //cpg1.3.0
  'answer' => 'جواب: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'سئوال های متداول اصلی', //cpg1.3.0
  array('چرا باید حتما ثبت نام (رجیستر) كنم؟', ' حتما لازم نیست نام نویسی كنید اما اعضا این گالری می توانند از امكاناتی نظیر  ارسال تصویر و داشتن لیستی از علاقمندی شخصی ، رتبه دهی به تصاویر و ارسال نظر و ...استفاده كنند.', 'allow_user_registration', '0'), //cpg1.3.0
  array('چگونه ثبت نام كنم؟', 'بر روی لینك &quot;كاربر جدید &quot;، كلیك كنید و فرم مربوط را به طور كامل پر كنید ، اگر مدیریت سیستم فعال سازی با نامه الكترونیك را فعال كرده باشد ، پس از ارسال فرم نامه ای از طرف سیستم برای آدرس شما ارسال می گردد كه در آن نحوه فعال سازی عضویت شما توضیح داده شده. عضویت شما از اولین ورود شما به سیستم شروع می گردد.', 'allow_user_registration', '1'), //cpg1.3.0
  array('چگونه وارد سیستم شوم؟', 'بر روی لینك &quot;ورود&quot;، كلیك كنید و نام كاربری و رمز ورودی كه در هنگام ثبت نام استفاده نموده اید را وارد كنید، اگر میخواهید سیستم در دفعات بعدی شما را بدون پرسیدن نام و رمز وارد كند باید  &quot; مرا فراموش نكن &quot;، را تیك بزنید <br /><b>مهم : شما باید كوكی خود را فعال كنید در غیر این صورت سیستم قادر به شناسای شما در دفعات بعدی نخواهد بود و همچنین نباید كوكی سایت را از روی كامپیوتر خود حدف كنید.</b>', 'offline', 0), //cpg1.3.0
  array('چرا نمی توانم وارد شوم؟', 'آیا ثبت نام كرده اید؟ شگر ثبت نام كرده اید آیا بر روی لینكی كه توسط نامه برای شما فرستاده شده كلیك كرده اید؟ در سایر موارد با مدیریت سایت ( bmossavari@gmail.com )تماس بگیرید.', 'offline', 0), //cpg1.3.0
  array('اگر رمز ورود را گم كرده ام چه كار كنم؟', 'اگر سایت به شما لینك &quot;رمز فراموش شده&quot;، را داده از آن استفاده كنید در غیر اینصورت با مدیریت تماس بگیرید.', 'offline', 0), //cpg1.3.0
  //array('What if I changed my email address?', 'Just simply login and change your email address through &quot;Profile&quot;', 'offline', 0), //cpg1.3.0
  array('چگونه تصویری را در &quot;علاقمندی های من&quot;، ثبت كنم؟', 'بر روی تصویر كلیك كنید و سپس بر روی &quot;مشخصات تصویر&quot;(<img src="images/info.gif" width="16" height="16" border="0" alt="Picture information" />) كلیك كنید ; به پایین صفحه بروید و بر روی &quot;به علاقمندی ها اضافه كن&quot;، كلیك كنید<br /> مدیریت باید امكان مشخصات فایل را به صورت پیش فرض فعال كرده باشد.<br />مهم :كوكی باید فعال باشد و حدف نشده باشد.', 'offline', 0), //cpg1.3.0
  //array('السؤال?', 'حوابه.', 'offline', 0), //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'یادآوری رمز ورود', //cpg1.3.0
  'err_already_logged_in' => 'شما هم اكنون وارد شده اید !', //cpg1.3.0
  'enter_username_email' => 'نام كاربری یا آدرس پست الكترونیك خود را وارد فرمائید', //cpg1.3.0
  'submit' => 'ارسال', //cpg1.3.0
  'failed_sending_email' => 'نامه یادآوری رمز ورود قادر به ارسال نیست!', //cpg1.3.0
  'email_sent' => 'نامه ای به همراه نام كاربری و رمز ورود شما به آدرس %s ارسال شد', //cpg1.3.0
  'err_unk_user' => 'اخطار: كاربری با این نام موجود نیست', //cpg1.3.0
  'passwd_reminder_subject' => '%s - Password Reminder', //cpg1.3.0
  'passwd_reminder_body' => 'شما درخواست كرده بودید تا نام كاربری و رمز عبور به شما یادآوری شود :
نام كاربری ( Username ): %s
رمز ورود ( Password ): %s
كلیك %s برای ورود.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
        'group_name' => 'نام گروه',
        'disk_quota' => 'سهم فضا',
        'can_rate' => 'امكان دادن امتیاز به تصاویر را دارد؟',
        'can_send_ecards' => 'امكان فرستادن كارت پستال را دارد؟',
        'can_post_com' => 'امكان ارسال نظر را دارد؟',
        'can_upload' => 'امكان ارسال فایل را دارد؟',
        'can_have_gallery' => 'امكان داشتن گالری خصوصی را دارد؟',
        'apply' => 'اعمال تغییرات',
        'create_new_group' => 'ایجاد گروه جدید',
        'del_groups' => 'حدف گروه (های) انتخاب شده',
        'confirm_del' => 'اخطار :وقتی گروهی را حدف می كنید تمامی كاربران آن گروه به گروه \'Registred\' منتقل میگردند!\n\nمطمئنید كه می خواهید حدف كنید؟',
        'title' => 'مدیریت گروه های كاربر',
        'approval_1' => 'اجازه ارسال عموم لازم دارد؟(1)',
        'approval_2' => 'اجازه ارسال خصوصی لازم دارد؟(2)',
  'upload_form_config' => 'تنظیمات فرم ارسال', //cpg1.3.0
  'upload_form_config_values' => array( 'فقط ارسال یك فایل', 'فقط ارسال چند فایل', 'فقط ارسال URI', 'فقط ارسال ZIP', 'فایل-URI', 'فایل-ZIP', 'URI-ZIP', 'فاسل-URI-ZIP'), //cpg1.3.0
  'custom_user_upload'=>'كاربر می تواند تعداد باكسهای ارسال را تغییر دهد؟', //cpg1.3.0
  'num_file_upload'=>'تعداد حداكثر/دقیق باكسهای ارسال فایل', //cpg1.3.0
  'num_URI_upload'=>'تعداد حداكثر/دقیق باكسهای ارسال URI', //cpg1.3.0
        'note1' => '<b>(1)</b> ارسال به آلبوم های عمومی اجازه مدیریت را نیاز دارد.',
        'note2' => '<b>(2)</b> ارسال به آلبوم یك كاربر اجازه مدیریت را نیاز دارد.',
        'notes' => 'ملاحظات'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'خوش آمدید !',
);

$lang_album_admin_menu = array(
        'confirm_delete' => 'آیا مطمئنید كه می خواهید این آلبوم را حدف نمایید؟ \\nهمه تصاویر و همچنین نظرات حدف خواهند شد.',
        'delete' => 'حدف',
        'modify' => 'متعلقات آلبوم',
        'edit_pics' => 'ویرایش فایل',
);

$lang_list_categories = array(
        'home' => 'صفحه اصلی',
        'stat1' => '<b>[pictures]</b> تصویر در <b>[albums]</b> آلبوم و <b>[cat]</b> موضوع با <b>[comments]</b> نظر <b>[views]</b> دفعه مشاهده شده',
        'stat2' => '<b>[pictures]</b> تصویر در <b>[albums]</b> آلبوم <b>[views]</b> دفعه مشاهده شده',
        'xx_s_gallery' => 'گالری %s',
        'stat3' => '<b>[pictures]</b> تصویر در <b>[albums]</b> آلبوم با <b>[comments]</b> نظر <b>[views]</b>  دفعه مشاهده شده'
);

$lang_list_users = array(
        'user_list' => 'لیست كاربران',
        'no_user_gal' => 'گالری كاربری یافت نشد',
        'n_albums' => '%s آلبوم',
        'n_pics' => '%s تصویر'
);

$lang_list_albums = array(
        'n_pictures' => '%s تصویر',
        'last_added' => ', آخرین ارسال در %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
        'login' => 'ورود',
        'enter_login_pswd' => 'برای ورود به سایت نام كاربری و رمز عبور را وارد نمایید',
        'username' => 'نام كاربری',
        'password' => 'رمز عبور',
        'remember_me' => 'مرا فراموش نكن',
        'welcome' => 'خوش آمدید %s ...',
        'err_login' => '*** خطای ورود ، دوباره امتحان كنید ***',
        'err_already_logged_in' => 'شما در حال حاضر در سایت وارد شده اید !',
  'forgot_password_link' => 'رمز فراموش شده', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
        'logout' => 'خروج',
        'bye' => 'خداحافظ %s ...',
        'err_not_loged_in' => 'شما وارد سایت نشده اید !',
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
        'upd_alb_n' => 'به روز رسانی آلبوم %s',
        'general_settings' => 'تنظیمات اصلی',
        'alb_title' => 'عنوان آلبوم',
        'alb_cat' => 'موضوع آلبوم',
        'alb_desc' => 'شرح آلبوم',
        'alb_thumb' => 'ریزعكس آلبوم',
        'alb_perm' => 'سطح دسترسی آلبوم',
        'can_view' => 'آلبوم قابل مشاهده است برای',
        'can_upload' => 'بیننده ها می توانند فایل ارسال كنند',
        'can_post_comments' => 'بیننده ها می توانند نظر بدهند',
        'can_rate' => 'بیننده ها می توانند به این فایل رای بدهند',
        'user_gal' => 'گالری كاربران',
        'no_cat' => '* بدون موضوع *',
        'alb_empty' => 'آلبوم خالی است',
        'last_uploaded' => 'آخرین ارسال',
        'public_alb' => 'همه (آلبوم عمومی)',
        'me_only' => 'فقط برای من',
        'owner_only' => 'صاحب آلبوم (%s) فقط',
  'groupp_only' => 'اعضا گروه \'%s\'',
  'err_no_alb_to_modify' => 'آلبومی برای ویرایش توسط شما در دیتابیس موجود نیست.',
  'update' => 'به روز رسانی آلبوم', //cpg1.3.0
  'notice1' => '(*) بسته به تنظیمات  %sgroups%s ', //cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
        'already_rated' => 'متاسفانه شما همین الان به فایل رای دادید',
        'rate_ok' => 'رای شما پذیرفته شد',
  'forbidden' => 'شما نمی توانید به فایل های خودتان رای بدهید!', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
مدیریت {SITE_NAME} حق هرگونه تغییر یا حذف مطالب را برای خود محفوظ نگه داشته و در زمان تغییرات مشاهده تمامی ارسالها غیر ممكن خواهد بود. همچنین مسئولیت استفاده غیر قانونی از این سایت به عهده استفاده كننده میباشد و هر گونه عمل غیر قانونی به مراجع ذی صلاح ارجاع داده می شود.<br />
<br />
به عنوان كاربر شما تعهد میكنید كه هیچگونه فایل سكسی ، ترسناك ، تحریك كننده به خشونت ، آزار دهنده ، شخصی(مربوط به دیگران بدون رضایت شخص)و هر گونه اطلاعاتی كه خلاف قوانین دولتی باشد به سایت ارسال نكنید و شما می پذیرید كه مدیریت {SITE_NAME} حق حذف یا ویرایش هر گونه از این نوع مطالب را دارد.به عنوان كاربر شما می پذیرید كه اطلاعات شما در دیتابیس {SITE_NAME} ثبت و نگهداری گردد و  این اطلاعات مگر در موارد ذكر شده قبلی به شخص سومی داده نخواهد شد، البته این سایت مسئولیتی در قبال حملات هكری قبول نمیكند.<br />
<br />
این سایت برای نگهداری اطلاعات شما از كوكی استفاده می نماید. همچنین از آدرس پست الكترونیك شما تنها جهت فعال سازی نام كاربری و ارسال رمز فراموش شده استفاده خواهد شد.<br />
<br />
با كلیك كردن بر روی دكمه 'می پذیرم' شما كلیه موارد بالا را قبول میكنید.
EOT;

$lang_register_php = array(
        'page_title' => 'ثبت نام كاربران',
        'term_cond' => 'قوانین و مقررات سایت',
        'i_agree' => 'می پذیرم',
        'submit' => 'ارسال فرم ثبت نام',
        'err_user_exists' => 'لطفا نام كاربری دیگری انتخاب كنید این نام قبلا استفاده شده',
        'err_password_mismatch' => 'لطفا مجددا پسورد را وارد نمایید ، دو پسورد مشابه هم نیستند',
        'err_uname_short' => 'نام كاربری حداقل باید 2 حرف داشته باشد',
        'err_password_short' => 'رمز ورود حداقل باید 2 حرف داشته باشد',
        'err_uname_pass_diff' => 'نام كاربری و رمز عبور باید متفاوت باشند',
        'err_invalid_email' => 'آدرس پست الكترونیك اشتباه است',
        'err_duplicate_email' => 'با این آدرس پست الكترونیك ، كاربر دیگری ثبت نام كرده',
        'enter_info' => 'ورود اطلاعات ثبت نام',
        'required_info' => 'اطلاعات مورد نیاز',
        'optional_info' => 'اطلاعات اختیاری',
        'username' => 'نام كاربری',
        'password' => 'رمز ورود',
        'password_again' => 'تكرار مجدد رمز عبور',
        'email' => 'آدرس پست الكترونیك',
        'location' => 'محل اقامت',
        'interests' => 'علاقمندیها',
        'website' => 'وب سایت',
        'occupation' => 'شغل',
        'error' => 'خطا',
        'confirm_email_subject' => '%s - اطلاعات ثبت نام تائید شد',
        'information' => 'اطلاعات',
        'failed_sending_email' => 'امكان ارسال نامه ثبت نام نیست !',
        'thank_you' => 'از ثبت نام شما متشكریم.<br /><br />نامه ای به آدرس شما ارسال شد كه در آن نحوه فعال سازی اشتراك شما اعلام گردیده.',
        'acct_created' => 'اشتراك شما ایجاد شد و شما می توانید با ورود نام كاربری و دادن رمز ورود به سایت وارد شوید.',
        'acct_active' => 'اشتراك شما فعال شد و شما می توانید با ورود نام كاربری و دادن رمز ورود به سایت وارد شوید.',
        'acct_already_act' => 'اشتراك شما قبلا فعال شده است !',
        'acct_act_failed' => 'این اشتراك قابل فعال سازی نیست !',
        'err_unk_user' => 'كاربر انتخاب شده وجود ندارد !',
        'x_s_profile' => 'مشخصات شخصی %s',
        'group' => 'گروه',
        'reg_date' => 'عضو شده در',
        'disk_usage' => 'فضای استفاده شده',
        'change_pass' => 'تغییر رمز ورود',
        'current_pass' => 'رمز ورود سابق',
        'new_pass' => 'رمز ورود جدید',
        'new_pass_again' => 'تكرار مجدد رمز ورود جدید',
        'err_curr_pass' => 'پسورد سابق اشتباه است',
        'apply_modif' => 'تغییرات انجام شد',
        'change_pass' => 'تغییر رمز ورود من',
        'update_success' => 'اطلاعات شخسی شما به روز رسانی شد',
        'pass_chg_success' => 'رمز ورود شما تغییر یافت',
        'pass_chg_error' => 'رمز ورود شما تغییر نیافت',
  'notify_admin_email_subject' => '%s - خطای ثبت نام', //cpg1.3.0
  'notify_admin_email_body' => 'یك كاربر جدید با نام  "%s" به گالری شما اضافه شد.', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
Thank you for registering at {SITE_NAME}

Your username is : "{USER_NAME}"
Your password is : "{PASSWORD}"

In order to activate your account, you need to click on the link below
or copy and paste it in your web browser.
in Persian: برای فعال سازی اشتراك خود بر روی لینك ریز كلیك كنید.

{ACT_LINK}

Regards,

The management of {SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
        'title' => 'بازنگری نظرات',
        'no_comment' => 'نظری برای بازنگری وجود ندارد',
        'n_comm_del' => '%s نظر حدف شد',
        'n_comm_disp' => 'تعداد نظرات برای نمایش',
        'see_prev' => 'قبلی',
        'see_next' => 'بعدی',
        'del_comm' => 'حدف نظرات انتخاب شده',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
        0 => 'جستجو بر روی مجموعه فایل ها',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
        'page_title' => 'جستجوی فایل جدید',
        'select_dir' => 'انتخاب زیر شاخه',
        'select_dir_msg' => 'این گزینه به شما اجازه می دهد تا فایلهایی را كه از طریق FTP بروی سرور خود ارسال كرده اید، اضافه كنید.<br /><br />زیرشاخه ای كه فایل ها در آن هستند را انتخاب كنبد',
        'no_pic_to_add' => 'فایلی برای اضافه نمودن وجود ندارد.',
        'need_one_album' => 'شما حداقل به یك آلبوم برای اجرای این گزینه احتیاج دارید',
        'warning' => 'اخطار',
        'change_perm' => 'برنامه نمی تواند بر روی زیرشاخه بنویسد لطفا زیرشاخه را از حالت 755 به 777 تغییر دهید و مجددا سعی نمائید. !',
        'target_album' => '<b>فرستادن فایل های &quot;</b>%s<b>&quot; به </b>%s',
        'folder' => 'زیرشاخه',
        'image' => 'تصویر',
        'album' => 'آلبوم',
        'result' => 'نتایج',
        'dir_ro' => 'غیر قابل نوشتن! ',
        'dir_cant_read' => 'غیر قابل خواندن! ',
        'insert' => 'اضافه كردن فایل های جدید به گالری',
        'list_new_pic' => 'لیست فایل های جدید',
        'insert_selected' => 'ورود فایل های انتخاب شده',
        'no_pic_found' => 'فایل جدیدی پیدا نشد',
        'be_patient' => 'برنامه برای اضافه نمودن فایل ها به زمان نیاز دارد، صبر كنید ...',
  'no_album' => 'آلبومی انتخاب نشد',  //cpg1.3.0
  'notes' =>  '<ul>'.
                                '<li><b>OK</b> : یعنی فایل با موفقیت اضافه شد'.
                                '<li><b>DP</b> : یعنی فایل قبلا در دیتابیس موجود بوده'.
                                '<li><b>PB</b> : یعنی فایل نمی تواند اضافه شود ، تنظیمات خود و سطح دسترسی زیرشاخه حاوی فایل ها را بررسی كنید'.
                        		'<li><b>NA</b> : یعنی آلبومی كه فایل ها باید به آن اضافه شوند مشحص نشده , بر روی \'<a href="javascript:history.back(1)">بازگشت</a>\' كلیك كنید و آلبوم را انتخاب نمائید. اگر آلبوم ندارید <a href="albmgr.php"> آلبوم بسازید </a></li>'.
                                '<li>اگر پیام های OK, DP, PB نمایش داده نشد بر روی فایل خراب شده كلیك كنید تا پیغام PHP را ببینید'.
                                '<li>اگر پیغام Timeout دریافت نمودید یك بار دیگر صفحه را Reload كنید'.
                          '</ul>', //cpg1.3.0
  'select_album' => 'انتخاب آلبوم', //cpg1.3.0
  'check_all' => 'انتخاب همه', //cpg1.3.0
  'uncheck_all' => 'عدم انتخاب همه', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
                'title' => 'كاربران محدود شده',
                'user_name' => 'نام كاربر',
                'ip_address' => 'آدرس آی پی',
                'expiry' => 'پایان محدودیت (خالی یعنی برای همیشه)',
                'edit_ban' => 'ثبت تغییرات',
                'delete_ban' => 'حدف',
                'add_new' => 'اضافه كردن محدودیت جدید',
                'add_ban' => 'اضافه كردن',
  'error_user' => 'كاربر پیدا نشد', //cpg1.3.0
  'error_specify' => 'شما باید نام كاربر یا آدری آی پی آن را وارد نمائید', //cpg1.3.0
  'error_ban_id' => 'مشخصات محدودیت اشتباه است!', //cpg1.3.0
  'error_admin_ban' => 'شما نمی توانید خودتان را محدود كنید!', //cpg1.3.0
  'error_server_ban' => 'شما دارید سرور خودتان را محدود میكنید؟!!اومجا چه خبره هوا خوبه!!!, نمی توانید...', //cpg1.3.0
  'error_ip_forbidden' => 'شما نمی توانید این آدرس آی پی را محدود كنید - این آدرس Routable نیست!', //cpg1.3.0
  'lookup_ip' => 'Lookup an IP address', //cpg1.3.0
  'submit' => 'تائید!', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'ارسال فایل', //cpg1.3.0
  'custom_title' => 'تغییر فرم ارسال', //cpg1.3.0
  'cust_instr_1' => 'شما میتوانید تعداد فایل های ارسالی همزمان را مشخص كنید. اما به هر حال, بیشتر از تعداد زیر اجازه ارسال همزمان ندارید.', //cpg1.3.0
  'cust_instr_2' => 'تعداد درخواست ارسال همزمان', //cpg1.3.0
  'cust_instr_3' => 'تعداد ارسال همزمان فایل: %s', //cpg1.3.0
  'cust_instr_4' => '‌‌‌‌‌‌‌‌تعداد ارسال همزمان ‌اینتر فیس ‌:‌ ‌‌%s‌‌', //cpg1.3.0
  'cust_instr_5' => 'تعداد در خواست ارسال همزمان ‌اینتر فیس:', //cpg1.3.0
  'cust_instr_6' => 'تعداد درخواست ارسال همزمان فایل:', //cpg1.3.0
  'cust_instr_7' => 'لطفا تعداد درخواست ارسال همزمان خود را ذكر كنید.  سپس بر روی \'ادامه\' كلیك كنید. ', //cpg1.3.0
  'reg_instr_1' => 'عمل خطا در ایجاد فرم.', //cpg1.3.0
  'reg_instr_2' => 'شما می توانید در زیر فایل خود را ارسال نمائید. حجم هر كدام از فایل های ارسالی شما نباید از %s KB بیشتر باشد. فایل های ZIP ارسالی به صورت فشرده باقی خواهند ماند.', //cpg1.3.0
  'reg_instr_3' => 'اگر می خواهید فایل فشرده خود را باز كنید از بخش باز كننده فایل فشرده استفاده نمائید.', //cpg1.3.0
  'reg_instr_4' => 'وقتی از قسمت ارسال URI/URL uاستفاده می كنید, لطفا آدرس را به صورت: http://www.mysite.com/images/example.jpg وارد نمائید', //cpg1.3.0
  'reg_instr_5' => 'هنگامی مه فرم تكمیل شد ،لطفا بر روی \'ادامه\' كلیك كنید.', //cpg1.3.0
  'reg_instr_6' => 'باز كردن فایل فشرده ارسالی:', //cpg1.3.0
  'reg_instr_7' => 'فایل های ارسالی:', //cpg1.3.0
  'reg_instr_8' => 'ارسال URI/URL :', //cpg1.3.0
  'error_report' => 'گزارش دهی خطا', //cpg1.3.0
  'error_instr' => 'ارسال های مشروحه دارای خطا هستند:', //cpg1.3.0
  'file_name_url' => 'نام فایل/URL', //cpg1.3.0
  'error_message' => 'پیغام خطا', //cpg1.3.0
  'no_post' => 'فایل بوسیله پست ارسال نشده.', //cpg1.3.0
  'forb_ext' => 'فایل با این پسوند قابل قبول نیست.', //cpg1.3.0
  'exc_php_ini' => 'ارسال فایلی با بیش از حجم اعلام شده در php.ini.', //cpg1.3.0
  'exc_file_size' => 'ارسال فایلی با بیش از حجم اعلام شده در تنظیمات.', //cpg1.3.0
  'partial_upload' => 'Only a partial upload.', //cpg1.3.0
  'no_upload' => 'ارسالی اتفاق نیفتاد.', //cpg1.3.0
  'unknown_code' => 'خطای نامشخص PHPدر ارسال.', //cpg1.3.0
  'no_temp_name' => 'عدم ارسال - عدم نام موقت.', //cpg1.3.0
  'no_file_size' => 'شامل اطلاعات نیست/خراب است', //cpg1.3.0
  'impossible' => 'غیر قابل حركت.', //cpg1.3.0
  'not_image' => 'تصویر نیست/خراب شده', //cpg1.3.0
  'not_GD' => 'پسوند یك GD نیست.', //cpg1.3.0
  'pixel_allowance' => 'بیشتر از حداكثر پیكسل قابل قبول.', //cpg1.3.0
  'incorrect_prefix' => 'URI/URL اشتباه', //cpg1.3.0
  'could_not_open_URI' => 'نمی توان URI را باز كرد.', //cpg1.3.0
  'unsafe_URI' => 'امنیت قابل بررسی نیست.', //cpg1.3.0
  'meta_data_failure' => 'خرابی اطلاعات سر خط', //cpg1.3.0
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
  'cant_unzip' => 'عدم توانایی در باز كردن.', //cpg1.3.0
  'unknown' => 'خطای ناشناخته', //cpg1.3.0
  'succ' => 'ارسال با موفقیت انجام شد', //cpg1.3.0
  'success' => '%s ارسال با موفقیت انجام شدند.', //cpg1.3.0
  'add' => 'لطفا بر روی \'ادامه\' كلیك كنید تا فایل ها به آلبوم اضافه گردند.', //cpg1.3.0
  'failure' => 'خطای ارسال', //cpg1.3.0
  'f_info' => 'اطلاعات فایل', //cpg1.3.0
  'no_place' => 'فایل قبلی نتوانسته در جای خود قرار بگیرد.', //cpg1.3.0
  'yes_place' => 'فایل قبلی با موفقیت مستقر شد.', //cpg1.3.0
  'max_fsize' => 'حداكثر حجم اجازه داده شده %s KB',
  'album' => 'آلبوم',
  'picture' => 'فایل', //cpg1.3.0
  'pic_title' => 'عنوان فایل', //cpg1.3.0
  'description' => 'شرح فایل', //cpg1.3.0
  'keywords' => 'كلمات كلیدی (با جای خالی جداسازی كنید)',
  'err_no_alb_uploadables' => 'متاسفانه آلبومی وحود ندارد كه شما اجازه ارسال در آن داشته باشید', //cpg1.3.0
  'place_instr_1' => 'لطفا حالا فایل ها را در این آلبوم قرار دهید و اطلاعات مربوط به هر فایل را وارد كنید.', //cpg1.3.0
  'place_instr_2' => 'فایل بیشتری احتیاج به اسقرار دارد. لطفا بر روی \'ادامه\'كلیك كنید.', //cpg1.3.0
  'process_complete' => 'تمامی فایل ها با موفقیت مستقر شدند.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
        'title' => 'مدیریت كاربران',
        'name_a' => 'نام(صعودی)',
        'name_d' => 'نام(نزولی)',
        'group_a' => 'گروه(صعودی)',
        'group_d' => 'گروه(نزولی)',
        'reg_a' => 'تاریخ ثبت نام(صعودی)',
        'reg_d' => 'تاریخ ثبت نام(نزولی)',
        'pic_a' => 'تعداد تصویر(صعودی)',
        'pic_d' => 'تعداد تصویر(نزولی)',
        'disku_a' => 'میزان استفاده از فضا(صعودی)',
        'disku_d' => 'میزان استفاده از فضا(نزولی)',
 		'lv_a' => 'آخرین بار مشاهده(صعودی)', //cpg1.3.0
 		'lv_d' => 'آخرین بار مشاهده(نزولی)', //cpg1.3.0
        'sort_by' => 'مرتب سازی كاربران بر حسب',
        'err_no_users' => 'جدول كاربران خالی است !',
        'err_edit_self' => 'شما نمی توانید مشخصات شخصی خود را از اینجا ویرایش كنید از \'مشخصات شخصی\' استفاده كنید',
        'edit' => 'ویرایش',
        'delete' => 'حدف',
        'name' => 'نام كاربری',
        'group' => 'گروه',
        'inactive' => 'غیر فعال',
        'operations' => 'عملیات',
 		'pictures' => 'فایل ها', //cpg1.3.0
 		'disk_space' => 'فضای استفاده شده / سهمیه	',
 		'registered_on' => 'ثبت نام شده در',
		'last_visit' => 'آحرین مشاهده در', //cpg1.3.0
		'u_user_on_p_pages' => '%d كاربر در %d صفحه',
        'confirm_del' => 'شما مطمئنید كه می خواهید این كاربر را حدف نمائید؟ \\nتمامی فایل ها و آلبوم های وی نیز حدف خواهند شد.',
        'mail' => 'نامه',
        'err_unknown_user' => 'كاربر انتخاب شده وجود ندارد !',
        'modify_user' => 'تغییرات كاربر',
        'notes' => 'ملاحظات',
        'note_list' => '<li>اگر نمی خواهید رمز ورود را تغییر دهید آن را خالی بگذارید',
		'password' => 'رمز ورود',
		'user_active' => 'كاربر فعال است',
 		'user_group' => 'گروه كاربر',
 		'user_email' => 'آدرس پست الكترونیك كاربر',
 		'user_web_site' => 'آدرس وب سایت كاربر',
		'create_new_user' => 'ایجاد كاربر جدید',
		'user_location' => 'محل زندگی كاربر',
 		'user_interests' => 'علایق كاربر',
		'user_occupation' => 'شغل كاربر',
		'latest_upload' => 'ارسال های تازه', //cpg1.3.0
 		'never' => 'هرگز', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
  'title' => 'مدیریت ابزار (تغییر اندازه تصاویر)', //cpg1.3.0
        'what_it_does' => 'چگونگی كار با ابزار',
        'what_update_titles' => 'بروز رسانی عنوانها توسط نام فایل ها',
        'what_delete_title' => 'حذف عناوین',
        'what_rebuild' => 'ایجاد مجدد ریزعكسها و تصاویر تغییر اندازه یافته',
        'what_delete_originals' => 'حذف تصاویر اصلی و جایگزین كردن تصاویر اصلی با تصاویر تغییر اندازه بافته',
        'file' => 'فایل',
        'title_set_to' => 'عنوان مخدود به',
        'submit_form' => 'ارسال',
        'updated_succesfully' => 'به روز رسانی با موفقیت انجام شد',
        'error_create' => 'در حال ایجاد خطا',
        'continue' => 'پردازش تصاویر بیشتر',
        'main_success' => 'فایل %s با موفقیت به عنوان فایل اصلی استفاده شد',
        'error_rename' => 'خطا در تغییر نام از %s به %s',
        'error_not_found' => 'فایل %s موجود نیست',
        'back' => 'بازگشت به اصلی',
        'thumbs_wait' => 'در حال به روز رسانی ریزعكسها/ویا تغییر اندازه تصاویر، لطفا كمی صبر كنید...',
        'thumbs_continue_wait' => 'به روز رسانی ریز عكسها/ویا تغییر اندازه تصاویر ادامه دارد ...',
        'titles_wait' => 'به روز رسانی عناوین، لطفا كمی صبر كنید...',
        'delete_wait' => 'حذف یك عنوان، لطفا كمی صبر كنید...',
        'replace_wait' => 'حذف فایل اصلی و جایگزینی تصویر تغییر اندازه یافته به جای اصلی، لطفا كمی صبر كنید..',
        'instruction' => 'توضیحات سریع',
        'instruction_action' => 'نوع عمل را انتخاب كنید',
        'instruction_parameter' => 'آیتم ها را ست كنید',
        'instruction_album' => 'آلبوم را انتخاب كنید',
        'instruction_press' => '%s را فشار دهید',
        'update' => 'به روز رسانی ریزعكسها/ویا تغییر اندازه تصاویر',
        'update_what' => 'چه چیزی باید به روز رسانی شود',
        'update_thumb' => 'فقط ریزعكسها',
        'update_pic' => 'فقط تصاویر تغییر اندازه یافته',
        'update_both' => 'اریزعكسها و تصاویر تغییر اندازه یافته',
        'update_number' => 'تعداد تصاویر پردازش شده در هر كلیك',
        'update_option' => '(در صورتی كه با خطای اتمام زمان پردازش مواجه شدید این مقدار را كمتر كنید )',
        'filename_title' => 'نام قایل &rArr; عنوان فایل',
        'filename_how' => 'چه تغییری در نام فایل میدهید',
        'filename_remove' => 'برداشتن .jpg از انتها و تبدیل _ (خط فاصله زیر) به جای خالی',
        'filename_euro' => 'تبدیل 2003_11_23_13_20_20.jpg به 23/11/2003 13:20',
        'filename_us' => 'تبدیل  2003_11_23_13_20_20.jpg به  11/23/2003 13:20',
        'filename_time' => 'تبدیل  2003_11_23_13_20_20.jpg به 13:20',
        'delete' => 'حدف عنوان فایل یا فایل با اندازه اصلی',
        'delete_title' => 'حدف عنوان فایل',
        'delete_original' => 'حدف فایل با اندازه اصلی',
        'delete_replace' => 'حدف فایل اصلی و جایگزین كردن فایل تغییر اندازه یافته',
        'select_album' => 'انتخاب آلبوم',
  'delete_orphans' => 'حدف نظرات سرگردان (در تمامی آلبوم ها)', //cpg1.3.0
  'orphan_comment' => 'نظر سرگردان پیدا شد', //cpg1.3.0
  'delete' => 'حذف', //cpg1.3.0
  'delete_all' => 'حدف همه', //cpg1.3.0
  'comment' => 'نظر: ', //cpg1.3.0
  'nonexist' => 'مربوط به فایلی كه موجود نیست # ', //cpg1.3.0
  'phpinfo' => 'مشاهده مشخصات php', //cpg1.3.0
  'update_db' => 'به روز رسانی دیتابیس', //cpg1.3.0
  'update_db_explanation' => ' اگر تغییری در فایلهای اصلی برنامه داده اید و یا نرم افزار را به نسخه بالاتری ارتقاء داده اید حتما دیتابیس را به روز رسانی كنید چون با این كار جداول دیتابیس ساخته و یا به روز رسانی می شوند.', //cpg1.3.0
);

?>
