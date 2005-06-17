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
// CVS version: $Id: arabic-utf-8.php,v 1.8 2004/07/24 15:04:00 gaugau Exp $
// ------------------------------------------------------------------------- //

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Arabic',
  'lang_name_native' => 'عربي',
  'lang_country_code' => 'ar',
  'trans_name'=> 'alwateen ',
  'trans_email' => 'webmaster@watein.com',
  'trans_website' => 'http://watein.com/',
  'trans_date' => '2004-03-18',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'rtl'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('بايت', 'ك.ب', 'م.ب');

// Day of weeks and months
$lang_day_of_week = array('احد', 'اثنين', 'ثلاثاء', 'اربعاء', 'خميس', 'جمعة', 'سبت');
$lang_month = array('يناير', 'فبراير', 'مارس', 'ابريل', 'مايو', 'يونيو', 'يوليو', 'اغسطس', 'سبتمبر', 'اكتوبر', 'نوفمبر', 'ديسمبر');

// Some common strings
$lang_yes = 'نعم';
$lang_no  = 'لا';
$lang_back = 'رجوع';
$lang_continue = 'استمر';
$lang_info = 'معلومات';
$lang_error = 'خطأ';

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
        'random' => 'صور عشوائيـــة',
        'lastup' => 'آخــر اضافــات',
        'lastalb'=> 'آخر ألبومات تم تحديثها',
        'lastcom' => 'آخر ملاحظــات',
        'topn' => 'اكثرها مشاهدة',
        'toprated' => 'اعلاها تقييما',
        'lasthits' => 'آخر ما شوهد',
        'search' => 'نتائج البحـث',
        'favpics'=> 'الصور المفضلة'
);

$lang_errors = array(
  'access_denied' => 'ليـس لديك الصلاحية لدخول هذه الصفحة.',
  'perm_denied' => 'ليس لديك الصلاحية للقيام بتلك الخطوة.',
  'param_missing' => 'لقد نودي البرنامج بدون متغيرات.',
  'non_exist_ap' => 'الألبوم أو الصورة المختارة غير موجودة!',
  'quota_exceeded' => 'تخطيت حدود التخزين<br /><br />المساحة المسموحة لك [quota]K, صورك تحتل مساحة [space]K, وبإضافة هذه الصورة سوف تتخطى حدود التخزين المسموحة لك.',
  'gd_file_type_err' => 'عند استعمال مكتبة GD للبرامج لا يسمح إلا بـملفات  JPEG و PNG.',
  'invalid_image' => 'الصورة المحملة غير صالحة او لم تعالج بمكتبة GD',
  'resize_failed' => 'لم استطع تكوين اختصار الصورة او تصغيرها.',
  'no_img_to_display' => 'لا توجد صورة للعرض',
  'non_exist_cat' => 'التصنيف المختار غير موجود',
  'orphan_cat' => 'تصنيف ليس له تصنيف رئيسي, شغل مدير التصنيفات لعلاج المشكلة.',
  'directory_ro' => 'الدليل \'%s\' غير قابل للكتابة, لا استطيع الغاء الصورة',
  'non_exist_comment' => 'التعليق المختار غير موجود.',
  'pic_in_invalid_album' => 'الصورة غير موجودة في الالبوم (%s)!?',
  'banned' => 'انت ممنوع من استعمال هذا الموقع الآن.',
  'not_with_udb' => 'هذه الميزة معطلة في Coppermine لأنها مدموجة مع المنتدى. اما ما تود القيام به غير مدعوم, أو ان برنامج المنتدى يقوم بنفس المهمة.',
  'offline_title' => 'اللبوم مغلق الآن', //cpg1.3.0
  'offline_text' => 'المعرض مغلق الآن كرر زيارتك في وقت لاحق', //cpg1.3.0
  'ecards_empty' => 'خاصية البطاقات البريدية غير متوفرة تأكد انها مفعلة من لوحة التحكم!', //cpg1.3.0
  'action_failed' => 'العملية فاشلة غير قادر على اتماما العملية.', //cpg1.3.0
  'no_zip' => 'خاصية الملفات المضغوطة غير متوفرة راجع الموقع الرئيس للمنتج.', //cpg1.3.0
  'zip_type' => 'لايوجد لديك ترخيص الملفات المضغوطة.', //cpg1.3.0
);

$lang_bbcode_help = 'الرموز التالية قَدْ تَكُونُ مفيدةَ: <li>[b]<b>اسود</b>[/b]</li> <li>[i]<i>مائل</i>[/i]</li> <li>[url=http://yoursite.com/]Url Text[/url]</li> <li>[email]user@domain.com[/email]</li>'; //cpg1.3.0

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
        'alb_list_title' => 'انتقل الى قائمة الالبومات',
        'alb_list_lnk' => 'قائمة الالبومات',
        'my_gal_title' => 'انتقل الى البومي الخاص',
        'my_gal_lnk' => 'البومي الخاص',
        'my_prof_lnk' => 'تعريفي',
        'adm_mode_title' => 'تحويل الى واجهة الادارة',
        'adm_mode_lnk' => 'حالة الادارة',
        'usr_mode_title' => 'تحويل الى واجهة الاستعمال',
        'usr_mode_lnk' => 'حالة المستخدم',
        'upload_pic_title' => 'تحميل الصورة في الالبوم',
        'upload_pic_lnk' => 'تحميل الصورة',
        'register_title' => 'تكوين حساب',
        'register_lnk' => 'تسجيل',
        'login_lnk' => 'دخول',
        'logout_lnk' => 'خروج',
        'lastup_lnk' => 'آخر تحميل',
        'lastcom_lnk' => 'آخر تعليقات',
        'topn_lnk' => 'اكثر الصور مطالعة',
        'toprated_lnk' => 'اعلى الصور تقييما',
        'search_lnk' => 'ابحث',
        'fav_lnk' => 'المفضلة',
  'memberlist_title' => 'عرض قائمة الأعضاء', //cpg1.3.0
  'memberlist_lnk' => 'قائمة الأعضاء', //cpg1.3.0
  'faq_title' => 'الأسئلة المكرَّرة على معرضِ الصور &quot;Coppermine&quot;', //cpg1.3.0
  'faq_lnk' => 'س و ج', //cpg1.3.0
);

$lang_gallery_admin_menu = array(
  'upl_app_lnk' => 'الموافقة على التحميل',
  'config_lnk' => 'التحكم',
  'albums_lnk' => 'البومات',
  'categories_lnk' => 'الاقسام',
  'users_lnk' => 'المستخدمين',
  'groups_lnk' => 'المجموعات',
  'comments_lnk' => 'مراجعة التعليقات', //cpg1.3.0
  'searchnew_lnk' => 'اضافة مجموعة من الصور', //cpg1.3.0
  'util_lnk' => 'ادوات الإدارة', //cpg1.3.0
  'ban_lnk' => 'منع المستخدمين',
  'db_ecard_lnk' => 'عرض البطاقات', //cpg1.3.0
);

$lang_user_admin_menu = array(
        'albmgr_lnk' => 'اخلق / افرز البوماتي',
        'modifyalb_lnk' => 'تعديل البوماتي',
        'my_prof_lnk' => 'الملف الشخصي',
);

$lang_cat_list = array(
        'category' => 'التصنيف',
        'albums' => 'الالبومات',
        'pictures' => 'الصور',
);

$lang_album_list = array(
        'album_on_page' => '%d البوم في %d صفحة'
);

$lang_thumb_view = array(
        'date' => 'التاريخ',
  //Sort by filename and title
  'name' => 'اسم الملف',
  'title' => 'العنوان',
  'sort_da' => 'ترتيب تصاعدي حسب التاريخ',
  'sort_dd' => 'ترتيب تنازلي حسب التاريخ',
  'sort_na' => 'ترتيب تصاعدي حسب الاسم',
  'sort_nd' => 'ترتيب تنازلي حسب الاسم',
  'sort_ta' => 'ترتيب تصاعدي حسب العنوان',
  'sort_td' => 'ترتيب تنازلي حسب العنوان',
  'download_zip' => 'حمل الصورة كملف مضغوط zip', //cpg1.3.0
  'pic_on_page' => '%d صورة في %d صفحة/صفحات',
  'user_on_page' => '%d مستخدم في %d صفحة', //cpg1.3.0
);

$lang_img_nav_bar = array(
  'thumb_title' => 'الرجوع إلى المصغرات',
  'pic_info_title' => 'اظهر/اخفي معلومات الصور', //cpg1.3.0
  'slideshow_title' => 'عرض تلقائي',
  'ecard_title' => 'ارسل الصورة كبطاقة', //cpg1.3.0
  'ecard_disabled' => 'البطاقات البريدية معطلة',
  'ecard_disabled_msg' => 'ليس لديك صلاحية لارسال البطاقات البريدية', //js-alert //cpg1.3.0
  'prev_title' => 'الصورة السابقة', //cpg1.3.0
  'next_title' => 'الصورة اللاحقة', //cpg1.3.0
  'pic_pos' => 'صـوره %s/%s', //cpg1.3.0
);

$lang_rate_pic = array(
        'rate_this_pic' => 'قيـم هذه الصورة',
        'no_votes' => '(لا يوجد تصويت)',
        'rating' => '(التصويت الحالي: %s / 5 من %s تصويت)',
        'rubbish' => 'سيـئة',
        'poor' => 'عادية',
        'fair' => 'مقبولة',
        'good' => 'جيـدة',
        'excellent' => 'ممتـازة',
        'great' => 'رائعة',
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
  CRITICAL_ERROR => 'خطأ حاد',
  'file' => 'ملف: ',
  'line' => 'سطر: ',
);

$lang_display_thumbnails = array(
        'filename' => 'اسم الملف : ',
        'filesize' => 'الحجم : ',
        'dimensions' => 'الابعاد : ',
        'date_added' => 'اضيفت في : '
);

$lang_get_pic_data = array(
        'n_comments' => '%s تعليق',
        'n_views' => '%s مشاهدة',
        'n_votes' => '(%s تصويت)'
);

$lang_cpg_debug_output = array(
  'debug_info' => 'نقّحْ المعلوماتَ', //cpg1.3.0
  'select_all' => 'تحديد الكل', //cpg1.3.0
  'copy_and_paste_instructions' => 'If you\'re going to request help on the coppermine support board, copy-and-paste this debug output into your posting. Make sure to replace any passwords from the query with *** before posting.', //cpg1.3.0
  'phpinfo' => 'عرض معلومات php', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => 'Default language', //cpg1.3.0
  'choose_language' => 'اختر لغة', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'الشكل الاساسي', //cpg1.3.0
  'choose_theme' => 'اختر شكلا', //cpg1.3.0
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
        'Question' => 'استفهام',
        'Very Happy' => 'سعيد جدا',
        'Smile' => 'مبتسم',
        'Sad' => 'حزين',
        'Surprised' => 'متعجب',
        'Shocked' => 'مندهش',
        'Confused' => 'مرتبك',
        'Cool' => 'عجيب',
        'Laughing' => 'يضحك',
        'Mad' => 'غاضب',
        'Razz' => 'رافض',
        'Embarassed' => 'محرج',
        'Crying or Very sad' => 'يبكي',
        'Evil or Very Mad' => 'غاضب',
        'Twisted Evil' => 'مستعد للشر',
        'Rolling Eyes' => 'حيران',
        'Wink' => 'يغمز',
        'Idea' => 'فكرة',
        'Arrow' => 'سهم',
        'Neutral' => 'عادي',
        'Mr. Green' => 'معصب',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  0 => 'تَرْك نمطِ الإدارةِ. . .',
  1 => 'دُخُول نمطِ الإدارةِ...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
        'alb_need_name' => 'الألبوم بحاجة الى إسـم !',
        'confirm_modifs' => 'هل أنت متأكّد أنّك تريد عمل هذه التّعديلات  ?',
        'no_change' => 'لم تقم بأي تغيير !',
        'new_album' => 'البـوم جديد',
        'confirm_delete1' => 'هل أنت متأكد من إلغاء هذا البوم ?',
        'confirm_delete2' => '\nسوف يتم حذف الصور و التعليقات !',
        'select_first' => 'يجب عليك أولا ادخال اسم للبوم',
        'alb_mrg' => 'التحكم بالألبوم',
        'my_gallery' => '* معرضـي *',
        'no_category' => '* المعرض غير موجود *',
        'delete' => 'الغـاء',
        'new' => 'جديد',
        'apply_modifs' => 'استعمل التّعديلات ',
        'select_category' => 'الصّنف المختار ',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
        'miss_param' => 'المعلومات المطلوبة للعملية \'%s\'لم تعطى !',
        'unknown_cat' => 'التصنيف المختار غير معروف',
        'usergal_cat_ro' => 'لايسمح بالغاء تصنيف المستخدمين !',
        'manage_cat' => 'ادارة التصنيفات',
        'confirm_delete' => 'هل انت متأكد من الغاء هذا التصنيف',
        'category' => 'التصنيف',
        'operations' => 'العمليات',
        'move_into' => 'انقل الى',
        'update_create' => 'اضافة تعديل تصنيف',
        'parent_cat' => 'التصنيف الرئيسي',
        'cat_title' => 'عنوان التصنيف',
        'cat_thumb' => 'تصنيف فرعي', //cpg1.3.0
        'cat_desc' => 'شرح التصنيف'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
        'title' => 'الإعـــدادت',
        'restore_cfg' => 'تجاهـل التغييرات',
        'save_cfg' => 'لحفـظ الإعدادات',
        'notes' => 'ملاحظــات',
        'info' => 'المعـلومـات',
        'upd_success' => 'لقد تم تحديث الإعـدادت',
        'restore_success' => 'تم ارجاع الاعدادات الاصلية',
        'name_a' => 'تصاعدي على الاسم',
        'name_d' => 'تنازلي على الاسم',
        'title_a' => 'تصاعدي على العنوان',
        'title_d' => 'تنازلي على العنوان',
        'date_a' => 'تاريخ تصاعدي',
        'date_d' => 'تاريخ تنازلي',
        'th_any' => 'اعلى منظور',
        'th_ht' => 'ارتفاع',
        'th_wd' => 'عرض',
        'label' => 'صورة العلم', //cpg1.3.0
        'item' => 'اسم اللغة', //cpg1.3.0
        'debug_everyone' => 'الجميع', //cpg1.3.0
        'debug_admin' => 'المدير فقط', //cpg1.3.0
        );

if (defined('CONFIG_PHP')) $lang_config_data = array(
  'اعدادات عامة',
  array('اسم المعرض', 'gallery_name', 0),
  array('وصف المعرض', 'gallery_description', 0),
  array('بريد مدير المعرض', 'gallery_admin_email', 0),
  array('العنوان الهدف لوصلة \'رؤية المزيد من الصور\' في الكروت', 'ecards_more_pic_target', 0),
  array('اغلاق المعرض', 'offline', 1), //cpg1.3.0
  array('تفعيل البطاقات', 'log_ecards', 1), //cpg1.3.0
  array('السماح بتحميل الملفات المضغوطةzipمن المفضلة', 'enable_zipdownload', 1), //cpg1.3.0

  'اللغة الاشكال والسمات والترميز',
  array('اللغة', 'lang', 5),
  array('الشكل', 'theme', 6),
  array('عرض قائمة اللغة', 'language_list', 1), //cpg1.3.0
  array('عرض اعلام اللغة', 'language_flags', 8), //cpg1.3.0
  array('عرض مسح في اختيارات اللغة', 'language_reset', 1), //cpg1.3.0
  array('عرض قائمة الاشكال ( السمات )', 'theme_list', 1), //cpg1.3.0
  array('عرض التهيئ في قائمة الاشكال', 'theme_reset', 1), //cpg1.3.0
  array('عرض الاسئلة المتكررة', 'display_faq', 1), //cpg1.3.0
  array('عرض مساعد شفرة bbcode', 'show_bbcode_help', 1), //cpg1.3.0
  array('نوعية الترميز', 'charset', 4), //cpg1.3.0

  'خيارات عرض المعرض',
        array('عرض الجدول الرئيسي لعرض الصور (بالنقاط أو بالنسبة)', 'main_table_width', 0),
        array('عدد مستويات التصنيف التي تعرض', 'subcat_level', 0),
        array('عدد الالبومات التي تعرض', 'albums_per_page', 0),
        array('عدد الاعمدة لعرض الالبوم', 'album_list_cols', 0),
        array('قياس الاختصار بالنقاط', 'alb_list_thumb_size', 0),
        array('محتويات الصفحة الرئيسية', 'main_page_layout', 0),
            array('اعرض مختصرات البوم المستوى الاول في التصنيفات ','first_level',1),

  'طريقة عرض المختصرات',
  array('عدد الاعمدة في صفحة مختصرات الصور', 'thumbcols', 0),
  array('عدد الاسطر في صفحة مختصرات الصور', 'thumbrows', 0),
  array('اكبر عدد للصفحات التي ستعرض', 'max_tabs', 10), //cpg1.3.0
  array('عرض عنوان الصور اسفل كل صورة', 'caption_in_thumbview', 1), //cpg1.3.0
  array('اعرض عددالمشاهدات اسفل الصور', 'views_in_thumbview', 1), //cpg1.3.0
  array('اظهر عدد التعليقات اسفل الصورة', 'display_comment_count', 1),
  array('اعرض اسم محمل الصورة اسفل الصور', 'display_uploader', 1), //cpg1.3.0
  array('الترتيب التقليدي للصور', 'default_sort_order', 3), //cpg1.3.0
  array('اقل عدد من التصويتات لظهور الصورة في قائمة  \'اعلى تقييم\'', 'min_votes_for_rating', 0),

  'اعدادات منظر الصور والتعليقات',
  array('عرض الجدول لعرض الصور (بالنقاط أو بالنسبة)', 'picture_table_width', 0), //cpg1.3.0
  array('معلومات الصور ترى تلقائيا', 'display_pic_info', 1), //cpg1.3.0
  array('منع الكلمات غير اللائقة (يجب وضع الكلمات أولا )', 'filter_bad_words', 1),
  array('السماح باستخدام تعبيرات الوجوه', 'enable_smilies', 1),
  array('إسمح لعدّة تعليقات متتالية على صورة واحد من نفس الشخص(بتعطيلة يقلل من الضغط على قواعد البيانات)', 'disable_comment_flood_protect', 1), //cpg1.3.0
  array('اكبر طول لوصف الصورة', 'max_img_desc_length', 0),
  array('اكبر عدد من الحروف في الكلمة', 'max_com_wlength', 0),
  array('اكبر عدد من الاسطر في التعليق', 'max_com_lines', 0),
  array('اكبر طول للتعليق', 'max_com_size', 0),
  array('اظهر شريط الفلم', 'display_film_strip', 1),
  array('عدد الصور في شريط الفلم', 'max_film_strip_items', 0),
  array('اشعر الإدارة بالتعليقات بريديا', 'email_comment_notification', 1), //cpg1.3.0
  array('فترة العرض بالجزء من الثانية (1 ثانية = 1000 أجزاء من الألف من الثانية)', 'slideshow_interval', 0), //cpg1.3.0

  'اعدادت الصور والمصغرات للصور', //cpg1.3.0
  array('دقة وضوح صور JPEG', 'jpeg_qual', 0),
  array('اكبر قياس لمختصر الصورة<a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0), //cpg1.3.0
  array('استعمل القياسات (عرض او ارتفاع أو اكبر تباعد لمختصر الصور )<b>**</b>', 'thumb_use', 7),
  array('إخلقْ صورَ متوسّطةَ','make_intermediate',1),
  array('اكبر عرض او ارتفاع لصورة وسطية/video <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0), //cpg1.3.0
  array('اكبر حجم لصورة محملة (بالكيلو بايت)', 'max_upl_size', 0), //cpg1.3.0
  array('اكبر عرض او ارتفاع لصورة وسطية فيديو بالنقاط ( بيكسل )', 'max_upl_width_height', 0), //cpg1.3.0

  'اعدادت ظهور الصور والمصغرات', //cpg1.3.0
  array('اعرض ايقونة لبوم المستخدم غير الفعال','show_private',1), //cpg1.3.0
  array('ضع الرموز والاسماء لمنع المسجلين من استخدامهافي التسجيل', 'forbiden_fname_char',0), //cpg1.3.0
  //array('Accepted file extensions for uploaded pictures', 'allowed_file_extensions',0), //cpg1.3.0
  array('انواع الصور المسموحة', 'allowed_img_types',0), //cpg1.3.0
  array('انواع الوسائط المسموحة', 'allowed_mov_types',0), //cpg1.3.0
  array('انواعملفات الصوت المسموحة', 'allowed_snd_types',0), //cpg1.3.0
  array('انواع الوثائق المسموحة', 'allowed_doc_types',0), //cpg1.3.0
  array('برنامج صنع المصغرات الذي تريد استخدامه','thumb_method',2), //cpg1.3.0
  array('Path to ImageMagick \'convert\' utility (example /usr/bin/X11/)', 'impath', 0), //cpg1.3.0
  //array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types',0), //cpg1.3.0
  array('Command line options for ImageMagick', 'im_options', 0), //cpg1.3.0
  array('إقرأ بيانات EXIF في ملفاتِ JPEG', 'read_exif_data', 1), //cpg1.3.0
  array('إقرأ بيانات IPTC في ملفاتِ JPEG', 'read_iptc_data', 1), //cpg1.3.0
  array('دليل الألبوم <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0), //cpg1.3.0
  array('الدليل لملفات العضو <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0), //cpg1.3.0
  array('الصور المتوسطة تبدأ بـ <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0), //cpg1.3.0
  array('الصور المصغرة تبدأ بـ <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0), //cpg1.3.0
  array('التصريح التلقائي للمجلدات', 'default_dir_mode', 0), //cpg1.3.0
  array('التصريح التلقائي للملفات', 'default_file_mode', 0), //cpg1.3.0

  'خيارات المستخدمين',
  array('السماح بالتسجيل للمستخدمين', 'allow_user_registration', 1),
  array('تأكيد التسجيل عن طريق البريد', 'reg_requires_valid_email', 1),
  array('اشعر الإدارة بالمسجلين الجدد عن طريق البريد', 'reg_notify_admin_email', 1), //cpg1.3.0
  array('السماح بالتسجيل لبريد مسجل سابقا', 'allow_duplicate_emails_addr', 1),
  array('المستخدمون يمكن ان يحصلوا على البوم خاص بهم (ملاحظة: اذا اخترت لا معنى هذا ان البومات الخاصة سابقا ستصبح عامة )', 'allow_private_albums', 1), //cpg1.3.0
  array('اشعر الإدارة بالمستخدم الذي ينتظر الموافقه على تفعيله', 'upl_notify_admin_email', 1), //cpg1.3.0
  array('السماح لغير المفعلين بمشاهدة قائمة الاعضاء', 'allow_memberlist', 1), //cpg1.3.0

  'بيانات اضافية لملعومات الصور (اتركه فارغا ان كنت لا تريد اضافة معلومات اضافية)',
        array('اسم الحقل الاول', 'user_field1_name', 0),
        array('اسم الحقل الثاني', 'user_field2_name', 0),
        array('اسم الحقل الثالث', 'user_field3_name', 0),
        array('اسم الحقل الرابع', 'user_field4_name', 0),

  'اعدادات الكوكيز',
        array('اسم الكوكي المستعمل في البرنامج', 'cookie_name', 0),
        array('دليل الكوكيز المستعمل في البرنامج', 'cookie_path', 0),

  'اعدادات اخرى',
  array('تمكين وضع التتبع', 'debug_mode', 9), //cpg1.3.0
  array('Display notices in debug mode', 'debug_notice', 1), //cpg1.3.0

  '<br /><div align="left"><a name="notice1"></a>(*) This settings mustn\'t be changed if you already have files in your database.<br />
  <a name="notice2"></a>(**) When changing this setting, only the files that are added from that point on are affected, so it is advisable that this setting must not be changed if there are already files in the gallery. You can, however, apply the changes to the existing files with the &quot;<a href="util.php">admin tools</a> (resize pictures)&quot; utility from the admin menu.</div><br />', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'ارسل بطاقة', //cpg1.3.0
  'ecard_sender' => 'المرسل', //cpg1.3.0
  'ecard_recipient' => 'المُستلم', //cpg1.3.0
  'ecard_date' => 'التاريخ', //cpg1.3.0
  'ecard_display' => 'اعرض البطاقة', //cpg1.3.0
  'ecard_name' => 'الاسم', //cpg1.3.0
  'ecard_email' => 'البريد الالكتروني', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'تصاعدي', //cpg1.3.0
  'ecard_descending' => 'تنازلي', //cpg1.3.0
  'ecard_sorted' => 'مصنف', //cpg1.3.0
  'ecard_by_date' => 'بواسطة التاريخ', //cpg1.3.0
  'ecard_by_sender_name' => 'مِن قِبل المرسلِ \ اسم', //cpg1.3.0
  'ecard_by_sender_email' => 'مِن قِبل المرسلِ \ بريد إلكتروني', //cpg1.3.0
  'ecard_by_sender_ip' => 'by sender\'s IP address', //cpg1.3.0
  'ecard_by_recipient_name' => 'مِن قِبل المُستلمِ \ اسم', //cpg1.3.0
  'ecard_by_recipient_email' => 'مِن قِبل المُستلمِ \ بريد إلكتروني', //cpg1.3.0
  'ecard_number' => 'عَرْض السجلِ %s إلى %s %s', //cpg1.3.0
  'ecard_goto_page' => 'اذهب الى الصفحة', //cpg1.3.0
  'ecard_records_per_page' => 'سجلات لكلّ صفحةِ', //cpg1.3.0
  'check_all' => 'دقق الكل', //cpg1.3.0
  'uncheck_all' => 'لا تدقق الكل', //cpg1.3.0
  'ecards_delete_selected' => 'احدف البطاقات المختارة', //cpg1.3.0
  'ecards_delete_confirm' => 'انت متأكد من عملية الحذف !!', //cpg1.3.0
  'ecards_delete_sure' => 'نعم متأكد', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
        'empty_name_or_com' => 'يجب ان تكتب اسمك وتعليقك',
        'com_added' => 'تم اضافة التعليق',
        'alb_need_title' => 'يجب ان تحدد عنوان للالبوم !',
        'no_udp_needed' => 'لا حاجة للتحديث.',
        'alb_updated' => 'تم تحديث الالبوم',
        'unknown_album' => 'الالبوم المختار غير موجود او ليس لك الصلاحية للتحميل في هذا الالبوم',
        'no_pic_uploaded' => 'لا توجد صور محملة !<br /><br />اذا كنت فعلا اخترت صور للتحميل, تأكد من ان خادم الصفحات يسمح بالتحميل...',
        'err_mkdir' => 'لم استطع تكوين المجلد %s !',
        'dest_dir_ro' => 'وجهة الملف %s غير قابل للكتابة !',
        'err_move' => 'من المستحيل نقل %s الى %s !',
        'err_fsize_too_large' => 'الصور التي تريد تحميلها كبيرة جدا (اكبر حجم للصورة هو %s x %s) !',
        'err_imgsize_too_large' => 'الصور التي تريد تحميلها كبيرة جدا (اكبر حجم للصورة هو %s KB) !',
        'err_invalid_img' => 'الصورة التي تم تحميلها غير صالحة !',
        'allowed_img_types' => 'تستطيع تحميل %s صورة.',
        'err_insert_pic' => 'الصورة \'%s\' لا يمكن تخزيها في الالبوم ',
        'upload_success' => 'تمم تحميل الصورة بنجاح<br /><br />سوف تراها بعد موافقة المدير.',
  'notify_admin_email_subject' => '%s - التبليغ', //cpg1.3.0
  'notify_admin_email_body' => 'ي صورة أُرسلتْ مِن قِبل %s الذي تَحتاجُ موافقتَكِ. زيارة %s', //cpg1.3.0
        'info' => 'معلومات',
        'com_added' => 'تم اضافة التعليق',
        'alb_updated' => 'تم تحديث الالبوم',
        'err_comment_empty' => 'لم تكتب التعليق !',
        'err_invalid_fext' => 'سوف يسمح بالملفات التي تنتهي بـ : <br /><br />%s.',
        'no_flood' => 'نأسف لكنك انت كنت آخر معلق على هذه الصورة<br /><br />تستطيع تغيير تعليقك على الصورة',
        'redirect_msg' => 'سيتم تحوليك الى صفحة اخرى.<br /><br /><br />اضغط على  \'استمــر\' ان لم يتم اعادة تنشيط الصفحة تلقائيا',
        'upl_success' => 'تم تحميل الصورة بنجاح',
  'email_comment_subject' => 'ارسل التعليق للمعرض', //cpg1.3.0
  'email_comment_body' => 'مستخدم ارسل تعليق على البومك شاهده', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
        'caption' => 'العنوان',
        'fs_pic' => 'صورة بالحجم الطبيعي',
        'del_success' => 'تم الغاءها بنجاح',
        'ns_pic' => 'صورة بالحجم الطبيعي',
        'err_del' => 'لا يمكن الغاءه',
        'thumb_pic' => 'مختصر',
        'comment' => 'تعليق',
        'im_in_alb' => 'صورة في الالبوم',
        'alb_del_success' => 'الالبوم \'%s\' تم الغاءه',
        'alb_mgr' => 'مدير الالبوم',
        'err_invalid_data' => 'بيانات غير صالحة تم استقبالها في \'%s\'',
        'create_alb' => 'جاري تكوين الالبوم \'%s\'',
        'update_alb' => 'جاري تحديث الالبوم \'%s\' بالعنوان \'%s\' والفهرس \'%s\'',
        'del_pic' => 'الغاء الصورة',
        'del_alb' => 'الغي الالبوم',
        'del_user' => 'الغي المستخدم',
        'err_unknown_user' => 'المستخدم المختار غير موجود !',
        'comment_deleted' => 'تم الغاء التعليق بنجاح',
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
  'confirm_del' => 'هل أنت متأكد لإلغاء الصورة ? \\nسيتم الغاء التعليقات ايضا', //js-alert //cpg1.3.0
  'del_pic' => 'أضغط لمسـح هذه الصورة', //cpg1.3.0
  'size' => '%s في %s نقطة',
  'views' => '%s مـرات',
  'slideshow' => 'عرض الشرائح',
  'stop_slideshow' => 'ايقاف عرض الشرائح',
  'view_fs' => 'اضغط لتكبيـر الصورة',
  'edit_pic' => 'حرر وصف الصورة', //cpg1.3.0
  'crop_pic' => 'Crop and Rotate', //cpg1.3.0
);

$lang_picinfo = array(
        'title' =>'معلومات عن الصورة',
        'Filename' => 'اسم الملف',
        'Album name' => 'اسم الألبوم',
        'Rating' => 'تقييم (%s تصويت)',
        'Keywords' => 'الكلمات الرّئيسيّة ',
        'File Size' => 'حجم الملف',
        'Dimensions' => 'الأبعاد ',
        'Displayed' => 'عدد مرات المشاهدة',
        'Camera' => 'آلة التصوير',
        'Date taken' => 'تاريخ التقاط الصورة',
        'Aperture' => 'العدسة ',
        'Exposure time' => 'وقت التّعرّض ',
        'Focal length' => 'البعد البؤريّ ',
        'Comment' => 'ملاحظات',
        'addFav'=>'اضف الى المفضلة',
        'addFavPhrase'=>'المفضلة',
        'remFav'=>'الغ من المفضلة',
  'iptcTitle'=>'IPTC عنوان', //cpg1.3.0
  'iptcCopyright'=>'IPTC حقوق', //cpg1.3.0
  'iptcKeywords'=>'IPTC نص', //cpg1.3.0
  'iptcCategory'=>'IPTC قسم', //cpg1.3.0
  'iptcSubCategories'=>'IPTC القسم الفرعي لـ', //cpg1.3.0
);

$lang_display_comments = array(
        'OK' => 'حسنـا',
        'edit_title' => 'لتحـرير الملاحظات',
        'confirm_delete' => 'هل أنت متأكـد لحـذف هذه الملاحظات ?',
        'add_your_comment' => 'أدخـل ملاحظاتك',
        'name'=>'الاسم',
        'comment'=>'تعليق',
        'your_name' => 'مجهول',
);

$lang_fullsize_popup = array(
        'click_to_close' => 'اضغط على الصورة لاغلاق النافذة',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
        'title' => 'ارسال كرت معايدة',
        'invalid_email' => '<b>تنبـيه</b> : البريد الالكتروني خطأ !',
        'ecard_title' => 'كرت من  %s لك',
  'error_not_image' => 'فقط الصور التي ترسل كبطاقة بريدية.', //cpg1.3.0
        'view_ecard' => 'ان لم يظهر الكرت بالصورة الصحيحة, اضغط هنا',
        'view_more_pics' => 'اضغط هنا لرؤية المزيد من الصور !',
        'send_success' => 'تم ارسال كرتك',
        'send_failed' => 'نأسف لكن الخادم لا يستطيع ارسال الكرت...',
        'from' => 'من',
        'your_name' => 'اسمك',
        'your_email' => 'البريد الألكتروني',
        'to' => 'الى',
        'rcpt_name' => 'اسم المرسل اليه',
        'rcpt_email' => 'بريد المرسل اليه الالكتروني',
        'greetings' => 'التحية',
        'message' => 'الرسالة',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'معلومات الصورة', //cpg1.3.0
  'album' => 'البوم',
  'title' => 'عنوان الصورة',
  'desc' => 'وصف وشرح عن الصورة',
  'keywords' => 'الكلمات الدليلية للبحث',
  'pic_info_str' => '%s &times; %s - %sكيلوبايت - %s مشاهدة - %s تصويتات',
  'approve' => 'اعتمد الصورة', //cpg1.3.0
  'postpone_app' => 'تأجيل الموافقة',
  'del_pic' => 'حذف الصورة', //cpg1.3.0
  'read_exif' => 'إقرأْ معلوماتَ EXIF ثانيةً', //cpg1.3.0
  'reset_view_count' => 'تصفير عداد المشاهدات',
  'reset_votes' => 'تصفير التقييم',
  'del_comm' => 'احذف التعليقات',
  'upl_approval' => 'الموافقة على الصورة',
  'edit_pics' => 'تحرير الصور', //cpg1.3.0
  'see_next' => 'الصورة التالية', //cpg1.3.0
  'see_prev' => 'الصورة اللاحقة', //cpg1.3.0
  'n_pic' => '%s الصور', //cpg1.3.0
  'n_of_pic_to_disp' => 'عدد الصور المعروضة', //cpg1.3.0
  'apply' => 'حفظ التعديلات', //cpg1.3.0
  'crop_title' => 'محرر صور المعرض', //cpg1.3.0
  'preview' => 'العرض', //cpg1.3.0
  'save' => 'احفظ الصورة', //cpg1.3.0
  'save_thumb' =>'احفظ كمصغرة', //cpg1.3.0
  'sel_on_img' =>'الإختيار يجب أن يكون كليّا على الصورة!', //js-alert //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'الاسئلة المتكررة', //cpg1.3.0
  'toc' => 'جدول المحتويات', //cpg1.3.0
  'question' => 'السؤال: ', //cpg1.3.0
  'answer' => 'الجواب: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'الأسئلة المهمة', //cpg1.3.0
  array('لماذا أحتاج للتسجيل؟', 'Registration may or may not be required by the administrator. Registration gives a member additional features such as uploading, having a favorite list, rating pictures and posting comments etc.', 'allow_user_registration', '0'), //cpg1.3.0
  array('كيف أسجّل؟', 'لكي تقوم بعملية التسجيل اذهب الى رابط ( <b>
التسجيل</b> ) تجده اعلى الصفحة ومن ثم املأ جميع الحقول المطلوبة وانتظر وصول
رسالة لتأكبد تسجيلك في حالة أن التسجيل يتطلب تأكيد الرسالة البريدية القادمة اليك
تحوي رابط لتفعيل اشتراكك لكي تقوم بتحميل الصور للموقع', 'allow_user_registration', '1'), //cpg1.3.0
  array('كيف ادخل للمعرض؟', 'لكي يتم دخولك إلى الموقع اذهب إلى رابط ( دخول ) اعلى الصفحة ومن ثم
ادخل اسم المستخدم وكلمة المرور<br /><b>ملاحظة المعرض يحتوي على ميزة الكوكيز
فتفعيله مهم لك لكي تدخل الموقع تلقائيا في المرات القادمة دون الحاجة الى تكرار
العملية في كل زيارة لتمكن الكوكيز&nbsp; انقر على زر &quot;تذكر ني&quot;.</b></p>
</b>', 'offline', 0), //cpg1.3.0
  array('لماذا لا استطيع الدخول للمعرض ؟', 'هل سجّلت ونقرت على الوصلة التي أرسلت إليك عن طريق البريد الإلكتروني؟ . الوصلة ستنشّط حسابك. هذه هي المشكلة ان لمتحل فاتصل بمدير المعرض.', 'offline', 0), //cpg1.3.0
  array('ماذا لو  نسيت كلمة المرور؟', 'انقر على رابط لقد نسيت كلمة المرور في اسفل الحقول المخصصة للدخول بعد نقر زر دخول سوف تجد حقل خاص بعنوان بريدك ادخل عنوان البريد الذي سجلت به وستصلك رسالة بريدية بكلمة مرور جديدة', 'offline', 0), //cpg1.3.0
  //array('What if I changed my email address?', 'Just simply login and change your email address through &quot;Profile&quot;', 'offline', 0), //cpg1.3.0
  array('كيف احفظ صوري المفضلة في مفضلتي الخاصة ؟', 'انقر على الصورة المطلوبة ومنثم ستجد اسفل معلومات الصورة رابط اضافة إلى المفضلة يتطلب ذلك أن تكون عضوا في المعرض<br />.', 'offline', 0), //cpg1.3.0
  array('السؤال?', 'حوابه.', 'offline', 0), //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'رسالة تذكير لكلمة المرور', //cpg1.3.0
  'err_already_logged_in' => 'انت بالفعل مسجل في المعرض !', //cpg1.3.0
  'enter_username_email' => 'ادخل اسم المستخدم او عنوان بريدك', //cpg1.3.0
  'submit' => 'ارسل', //cpg1.3.0
  'failed_sending_email' => 'هناك خطأ ما لايمكن ارسال رسالة تذكير بكلمة المرور لبريدك !', //cpg1.3.0
  'email_sent' => 'ارسلت كلمة المرور التذكيرية الى بريدك راجع بريدك %s', //cpg1.3.0
  'err_unk_user' => 'خطأ: لايوجد لدينا مستخدما بهذا الاسم حاول مرة اخرى', //cpg1.3.0
  'passwd_reminder_subject' => '%s - رسالة تذكير بكلمة المرور', //cpg1.3.0
  'passwd_reminder_body' => 'بياناتك لدينا في المعرض هي:
اسم المستخدم: %s
كلمة المرور: %s
انقر هنا %s للدخول.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
        'group_name' => 'اسم المجموعة',
        'disk_quota' => 'مساحة التخزين المسموحة',
        'can_rate' => 'لا استطيع تقييم الصور',
        'can_send_ecards' => 'يستطيع ارسال الصورة كبريد',
        'can_post_com' => 'يستطيع اضافة تعليقات',
        'can_upload' => 'يستطيع تحميل الصور',
        'can_have_gallery' => 'يستطيع الحصول على معرض شخصي',
        'apply' => 'تخزين التعديلات',
        'create_new_group' => 'تكوين مجموعة مستخدمين جديدة',
        'del_groups' => 'الغاء المجموعات المختارة',
        'confirm_del' => 'تحذير, عندما تمسح مجموعة, سيتم نقل المستخدمين في هذه المجموعة الى قائمة \'المسجلين\' !\n\nهل تود استكمال العملية  ?',
        'title' => 'ادارة مجموعات المستخدمين',
        'approval_1' => 'موافقة تحميل عامة (1)',
        'approval_2' => 'موافقة تحميل عامة (2)',
  'upload_form_config' => 'اختيار طريقة التحميل', //cpg1.3.0
  'upload_form_config_values' => array( 'تحميل صورة وحيدة', 'تحميل عدة ملفات', 'وضع رابط للصورة فقط', 'ملف مضغوط zip فقط', 'الصورة-رابط', 'رابط-ZIP', 'رابط-ZIP', 'الصورة-رابط-ZIP'), //cpg1.3.0
  'custom_user_upload'=>'المستعمل هل يمكن أن يفصّل عدد صناديق التحميل؟', //cpg1.3.0
  'num_file_upload'=>'الحد الاعلى من صناديق التحميل', //cpg1.3.0
  'num_URI_upload'=>'الحد الاعلى من روابط التحميل', //cpg1.3.0
        'note1' => '<b>(1)</b> التحميل في الالبوم العام يحتاج موافقة المدير',
        'note2' => '<b>(2)</b> التحميلات التي يمكلها المستخدم تحتاج موافقة المدير',
        'notes' => 'ملاحظات'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'السلام عليكم ورحمة الله وبركاته اهلا بك يا !',
);

$lang_album_admin_menu = array(
        'confirm_delete' => 'هل أنت متأكد لألغاء هذه الصورة ? \\nAll pictures and comments will also be deleted.',
        'delete' => 'الغاء الصورة',
        'modify' => 'تحديث الألبوم',
        'edit_pics' => 'تحرير الصورة',
);

$lang_list_categories = array(
        'home' => 'Home',
        'stat1' => '<b>[pictures]</b> صورة في <b>[albums]</b> البوم و <b>[cat]</b> تصنيفات مع <b>[comments]</b> تعليقات شوهدت <b>[views]</b> مرة',
        'stat2' => '<b>[pictures]</b> صورة في <b>[albums]</b> البوم وشوهدت <b>[views]</b> مرة',
        'xx_s_gallery' => 'معرض %s',
        'stat3' => '<b>[pictures]</b> صورة في <b>[albums]</b> البوم مع <b>[comments]</b> تعليقات شوهدت <b>[views]</b> مرة'
);

$lang_list_users = array(
        'user_list' => 'قائمة المستخدمين',
        'no_user_gal' => 'لا يوجد مستخدمين يمكن ان يكون لهم البومات',
        'n_albums' => '%s البوم',
        'n_pics' => '%s صورة/صور'
);

$lang_list_albums = array(
        'n_pictures' => '%s صورة',
        'last_added' => ', آخر صورة اضيفت في %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
        'login' => 'الدخول',
        'enter_login_pswd' => 'ادخل الكنية وكلمة السر للدخول',
        'username' => 'اسم المتسخدم',
        'password' => 'كلمة المرور',
        'remember_me' => 'تذكرني',
        'welcome' => 'حياك الله  %s ...',
        'err_login' => '*** لم استطع الدخول حاول مرة اخرى ***',
        'err_already_logged_in' => 'لقد تم تسجيل دخولك مسبقا !',
  'forgot_password_link' => 'لقد نسيت كلمة المرور', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
        'logout' => 'خروج',
        'bye' => 'في حفظ الله ورعايته يا %s ...',
        'err_not_loged_in' => 'لم تسجل الدخول !',
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
        'upd_alb_n' => 'تحديث الالبوم %s',
        'general_settings' => 'اعدادات عامة',
        'alb_title' => 'عنوان الالبوم',
        'alb_cat' => 'تصنيف الالبوم',
        'alb_desc' => 'شرح الالبوم',
        'alb_thumb' => 'نبذة الالبوم',
        'alb_perm' => 'صلاحيات الالبوم',
        'can_view' => 'مشاهدين الالبوم هم',
        'can_upload' => 'الزوار يستطيعون تحميل صور',
        'can_post_comments' => 'الزوار يستطيعون تسجيل تعليقات',
        'can_rate' => 'الزوار يستطيعون التقييم',
        'user_gal' => 'البوم المستخدمين',
        'no_cat' => '* غير مصنف *',
        'alb_empty' => 'الالبوم فارغ',
        'last_uploaded' => 'آخر تحميل',
        'public_alb' => 'للجميع (البوم عام)',
        'me_only' => 'لي فقط',
        'owner_only' => 'مالك الالبوم (%s) فقط',
  'groupp_only' => 'اعضاء المجموعة \'%s\'',
  'err_no_alb_to_modify' => 'لا يوجد البوم تستطيع تعديله في قاعدة البيانات.',
  'update' => 'تحديث الالبوم', //cpg1.3.0
  'notice1' => '(*) depending on %sgroups%s settings', //cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
        'already_rated' => 'نأسف لكن كنت قد قيمت هذه الصورة مسبقا',
        'rate_ok' => 'تم قبول تقييمك',
  'forbidden' => 'لايمكنك تقييم صورك الخاصة دع الآخرين يقيمونها.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
حيث ان مدراء الموقع {SITE_NAME} سيقومون بتعديل او الغاء الصور الغير مرغوب فيها, فمن الصعب مراجعة جميع الصور. لذا يجب عليك العلم ان الصور تمثل اصحابها فقط وليس لها علاقة بالمدراء أو مسؤولين الصفحة (الى اذا قامو هم بذلك) وبالتالي لن يتحملو مسؤولية تلك الصور.<br />
<br />
انت توافق انك لن تقوم بتحميل اي صور مرفوضة, وقحة, خارجة عن اللياقة العامة, تقذف الغير, كراهية, تهدد الغير, جنسية أو اي صور خارجة عن نطاق القانون. انت توافق ان مسؤول الصفحة, المدير والمشرفين في الموقع {SITE_NAME} لهم الحق في تعديل وازالة اي محتوى في اي وقت يرونه مناسبا. وكما توافق ان تكون البيانات التي تدخلها سوف تخزن في قاعدة بيانات. وحيث ان هذه المعلومات لن تعلن لشخص ثالث دون مواققتك لن يتحمل المسؤول او مدير الموقع اي دخول تخريبي على الموقع يتم به معرفة هذه المعلومات.<br />
<br />
هذا الموقع يستعمل الكوكيز لتخزين المعلومات على جهازك. هذه الكوكيز تحسن من اطلاعك على الصور فقط. ويستعمل البريد الالكتروني لتأكيد عملية تسجيلك وكلمة السر.<br />
<br />
بالضغط على زر 'اوافق' ان توافق وتلزم بهذه الشروط.
EOT;

$lang_register_php = array(
        'page_title' => 'تسجيل المستخدم',
        'term_cond' => 'الشروط والقواعد',
        'i_agree' => 'اوافق',
        'submit' => 'تسجيل الطلب',
        'err_user_exists' => 'الاسم الذي ادخلته موجود مسبقا, الرجاء استخدام اسم آخر',
        'err_password_mismatch' => 'كلمتي السر لا ينطبقان، عليك ادخالهما مرة اخرى',
        'err_uname_short' => 'يجب ان تكون الكنية على الاقل حرفين',
        'err_password_short' => 'يجب ان تكون كلمة السر على الاقل حرفين',
        'err_uname_pass_diff' => 'يجب ان تكون الكنية مختلفة عن كلمة السر',
        'err_invalid_email' => 'البريد الالكتروني الذي كتبته لا يعمل',
        'err_duplicate_email' => 'مستخدم آخر مسجل له نفص البريد الالكتروني',
        'enter_info' => 'ادخل بيانات التسجيل',
        'required_info' => 'معلومات مطلوبة',
        'optional_info' => 'معلومات اضافية',
        'username' => 'الكنية',
        'password' => 'كلمة السر',
        'password_again' => 'اعد ادخال كلمة السر',
        'email' => 'البريد الالكتروني',
        'location' => 'المكان',
        'interests' => 'الاهتمامات',
        'website' => 'صفحتك',
        'occupation' => 'الوظيفة',
        'error' => 'خطأ',
        'confirm_email_subject' => '%s - تأكيد التسجيل',
        'information' => 'بيانات',
        'failed_sending_email' => 'لم استطيع ارسال رسالة تأكيد التسجيل !',
        'thank_you' => 'شكرا على التسجيل.<br /><br />تم ارسال بريد يوضح كيفية تفعيل الاشتراك.',
        'acct_created' => 'تم تكوين اشتراكك وتستطيع الدخول بكنيتك وكلمة السر',
        'acct_active' => 'اشتراكك فعال الآن وتستطيع الدخول بكنيتك وكلمة السر',
        'acct_already_act' => 'اشتراكك فعال مسبقا !',
        'acct_act_failed' => 'لا يمكن تفعيل هذا الحساب !',
        'err_unk_user' => 'المستخدم المختار غير موجود !',
        'x_s_profile' => 'بيانات %s',
        'group' => 'المجموعة',
        'reg_date' => 'مشارك',
        'disk_usage' => 'استهلاك التخزين',
        'change_pass' => 'تغيير كلمة السر',
        'current_pass' => 'كلمة السر الحالية',
        'new_pass' => 'كلمة سر جديدة',
        'new_pass_again' => 'كلمة السر الجديدة مرة اخرى',
        'err_curr_pass' => 'كلمة السر الحالية غير صحيحة',
        'apply_modif' => 'تطبيق التغييرات',
        'change_pass' => 'غير كلمة السر',
        'update_success' => 'تم تحديث بياناتك',
        'pass_chg_success' => 'تم تغيير كلمة السر',
        'pass_chg_error' => 'لم تتغير كلمة السر',
  'notify_admin_email_subject' => '%s - إخطار تسجيل', //cpg1.3.0
  'notify_admin_email_body' => 'عضو جديد "%s" سجل في معرضك', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
Thank you for registering at {SITE_NAME}

Your username is : "{USER_NAME}"
Your password is : "{PASSWORD}"

لتفعيل الحساب عليك الضغط على الوصلة بالاسفل
او انسخ والصق الوصلة في متصفح الانترنت لديك.

{ACT_LINK}

Regards,

The management of {SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
        'title' => 'مراجعة التعليقات',
        'no_comment' => 'لا تعليقات للمراجعة',
        'n_comm_del' => '%s تعليق الغي',
        'n_comm_disp' => 'عدد التعليقات المعروضة',
        'see_prev' => 'السابق',
        'see_next' => 'التالي',
        'del_comm' => 'الغاء التعليقات المختارة',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
        0 => 'ابحث مجموعة الصور',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
        'page_title' => 'ابحث الصور الجديدة',
        'select_dir' => 'اختر مجلد',
        'select_dir_msg' => 'هذه العملية تمكنك من اضافة كمية من الصور تم تحميلها بواسطة FTP الى خادم الصفحات لديك.<br /><br />اختر الدليل حيث قمت بعملية التحميل مسبقا',
        'no_pic_to_add' => 'لا توجد صورة اضيفها',
        'need_one_album' => 'تحتاج على الاقل البوما واحدا لهذه العملية',
        'warning' => 'تحذير',
        'change_perm' => 'لا يستطيع البرنامج التخزين في هذا الدليل, تحتاج تغيير صلاحيات الدليل الى 755 او 777 قبل اضافة الصور !',
        'target_album' => '<b>ضع صور &quot;</b>%s<b>&quot; في </b>%s',
        'folder' => 'مجلد',
        'image' => 'صورة',
        'album' => 'البوم',
        'result' => 'نتيجة',
        'dir_ro' => 'غير قابل للتخزين. ',
        'dir_cant_read' => 'غير قابل للقراءة. ',
        'insert' => 'اضافة صور جديدة للمعرض',
        'list_new_pic' => 'قائمة الصور الجديدة',
        'insert_selected' => 'تخزين الصور المختارة',
        'no_pic_found' => 'لا توجد صور جديدة',
        'be_patient' => 'الرجاء الصبر، حيث يحتاج البرنامج لبعض من الوقت لاضافة الصور',
  'no_album' => 'لم تختر البوم',  //cpg1.3.0
  'notes' =>  '<ul>'.
                                '<li><b>OK</b> : يعني انه تم اضافة الصور بنجاح'.
                                '<li><b>DP</b> : يعني ان الصورة مكررة في قاعدة البيانات وهي موجودة فعلا'.
                                '<li><b>PB</b> : تعني انني لم اتمكن من اضافة الصورة, تأكد من الاعدادات ومن صلاحياتك في تخزين الصورة في هذا المجلد'.
                          '<li><b>NA</b> : means that you haven\'t selected an album the files should go to, hit \'<a href="javascript:history.back(1)">back</a>\' and select an album. If you don\'t have an album <a href="albmgr.php">create one first</a></li>'.
                                '<li>اذا كان الرمز OK, DP, PB لا يظهر اضغط على الوصلة المكسورة لمعرفة سبب عدم ظهورها PHP'.
                                '<li>ان لم يرد على المتصفح بعد وقت كاف, اضغط على زر اعادة تحميل الصفحة'.
                          '</ul>', //cpg1.3.0
  'select_album' => 'اختر البوم', //cpg1.3.0
  'check_all' => 'اختبر الكل', //cpg1.3.0
  'uncheck_all' => 'لا تختبر الكل', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
                'title' => 'منع المستخدمين',
                'user_name' => 'اسم المستخدم',
                'ip_address' => 'رقم الانترنت',
                'expiry' => 'ينتهي في (فارغ يعني لا ينتهي)',
                'edit_ban' => 'حفظ التغييرات',
                'delete_ban' => 'الغاء',
                'add_new' => 'اضافة منع جديد',
                'add_ban' => 'اضافة',
  'error_user' => 'لايوجد مستخدم', //cpg1.3.0
  'error_specify' => 'You need to specifiy either a user name or an IP address', //cpg1.3.0
  'error_ban_id' => 'المنع باطل!', //cpg1.3.0
  'error_admin_ban' => 'لاتستطيع منع نفسك!', //cpg1.3.0
  'error_server_ban' => 'You were going to ban your own server? Tsk tsk, cannot do that...', //cpg1.3.0
  'error_ip_forbidden' => 'You cannnot ban this IP - it is non-routable!', //cpg1.3.0
  'lookup_ip' => 'Lookup an IP address', //cpg1.3.0
  'submit' => 'ارسل!', //cpg1.3.0
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
  'cust_instr_4' => 'رابط/رابط صندوق التحميل: %s', //cpg1.3.0
  'cust_instr_5' => 'رابط/رابط ندوق التحميل:', //cpg1.3.0
  'cust_instr_6' => 'File upload boxes:', //cpg1.3.0
  'cust_instr_7' => 'Please enter the number of each type of upload box you desire at this time.  Then click \'Continue\'. ', //cpg1.3.0
  'reg_instr_1' => 'Invalid action for form creation.', //cpg1.3.0
  'reg_instr_2' => 'Now you may upload your files using the upload boxes below. The size of files uploaded from your client to the server should not exceed %s KB each. ZIP files uploaded in the \'File Upload\' and \'URI/URL Upload\' sections will remain compressed.', //cpg1.3.0
  'reg_instr_3' => 'If you want the zipped file or archive to be decompressed, you must use the file upload box provided in the \'Decompressive ZIP Upload\' area.', //cpg1.3.0
  'reg_instr_4' => 'When using the URI/URL upload section, please enter the path to the file like so: http://www.mysite.com/images/example.jpg', //cpg1.3.0
  'reg_instr_5' => 'When you have completed the form, please click \'Continue\'.', //cpg1.3.0
  'reg_instr_6' => 'Decompressive ZIP Uploads:', //cpg1.3.0
  'reg_instr_7' => 'File Uploads:', //cpg1.3.0
  'reg_instr_8' => 'رابط/رابط التحميل:', //cpg1.3.0
  'error_report' => 'Error Report', //cpg1.3.0
  'error_instr' => 'The following uploads encountered errors:', //cpg1.3.0
  'file_name_url' => 'اسم الصورة/رابط', //cpg1.3.0
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
        'title' => 'ادارة المستخدمين',
        'name_a' => 'تصاعدي حسب الاسم',
        'name_d' => 'تنازلي حسب الاسم',
        'group_a' => 'تصاعدي حسب المجموعة',
        'group_d' => 'تنازلي حسب المجموعة',
        'reg_a' => 'تصاعدي حسب تاريخ التسجيل',
        'reg_d' => 'تنازلي حسب تاريخ التسجيل',
        'pic_a' => 'تصاعدي حسب عد الصور',
        'pic_d' => 'تنازلي حسب عد الصور',
        'disku_a' => 'تصاعدي حسب مساحة التخزين',
        'disku_d' => 'تنازلي حسب مساحة التخزين',
  'lv_a' => 'حسب اخر الزيارات تصاعدي', //cpg1.3.0
  'lv_d' => 'حسب اخر الزيارات تنازلي', //cpg1.3.0
        'sort_by' => 'رتب المستخدمين حسب',
        'err_no_users' => 'جدول المستخدم فارغ !',
        'err_edit_self' => 'لا تستطيع تعديل بياناتك الخاصة, استعمل زر \'بياناتي\' لذلك',
        'edit' => 'تعديل',
        'delete' => 'الغاء',
        'name' => 'اسم المستخدم',
        'group' => 'المجموعة',
        'inactive' => 'معطل',
        'operations' => 'العمليات',
  'pictures' => 'الصور', //cpg1.3.0
  'disk_space' => 'مساحة التخزين المسموحة / كوتا',
  'registered_on' => 'تم تسجيله في',
  'last_visit' => 'اخر الزيارات', //cpg1.3.0
  'u_user_on_p_pages' => '%d مستخدم في %d صفحة/صفحات',
        'confirm_del' => 'هل انت متأكد من الغاء هذا المستخدم ? \\nكل صوره والبوماته سوف تلغى.',
        'mail' => 'بريد',
        'err_unknown_user' => 'المستخدم المختار غير موجود !',
        'modify_user' => 'تغيير المستخدم',
        'notes' => 'ملاحظات',
        'note_list' => '<li>ان لم تريد تغيير كلمة السر, اترك مربع كلمة السر فارغا',
  'password' => 'كلمة المرور',
  'user_active' => 'المستعمل نشط',
  'user_group' => 'مجموعات المستخدمين',
  'user_email' => 'بريد المستخدم',
  'user_web_site' => 'موقع المستخدم',
  'create_new_user' => 'اضف مستخدم جديد',
  'user_location' => 'بلد المستخدم',
  'user_interests' => 'اهتمامات المستخدم',
  'user_occupation' => 'مهنة المستخدم',
  'latest_upload' => 'الاضافات الاخيرة', //cpg1.3.0
  'never' => 'ابدا', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
  'title' => 'تغيير قياس الصورة', //cpg1.3.0
        'what_it_does' => 'ماذا تعمل',
        'what_update_titles' => 'تحديث العناوين من اسماء الملفات',
        'what_delete_title' => 'الغاء العناوين',
        'what_rebuild' => 'يعبد بناء مختصرات الصور ويعيد قياس الصور',
        'what_delete_originals' => 'يلغي الصور المعاد قياسها الاصلية و يستبدلهم بصور معاد قياسها',
        'file' => 'ملف',
        'title_set_to' => 'العنوان محدد الى',
        'submit_form' => 'سجل',
        'updated_succesfully' => 'تم تحديثه بنجاح',
        'error_create' => 'خطأ في تكوين',
        'continue' => 'معالجة المزيد من الصور',
        'main_success' => 'الملف %s تم استعماله كالصورة الرئيسية',
        'error_rename' => 'خطأ في تغيير الاسم %s الى %s',
        'error_not_found' => 'الملف %s غير موجود',
        'back' => 'الرجوع الى الرئيسية',
        'thumbs_wait' => 'تحديث مختصرات الصور و/او الصور المعاد قياسها, الرجاء الانتظار...',
        'thumbs_continue_wait' => 'مستمر في تحديث مختصرات الصور او/و الصور المعاد قياسها...',
        'titles_wait' => 'تحديث العناوين, الرجاء الانتظار...',
        'delete_wait' => 'الغاء العناوين, الرجاء الانتظار...',
        'replace_wait' => 'يتم الغاء الصور الاصلية ويتم استبداله باخرى معاد قياسها, الرجاء الانتظار..',
        'instruction' => 'تعليمات سريعة',
        'instruction_action' => 'اختار عملية',
        'instruction_parameter' => 'تحديد المتغيرات',
        'instruction_album' => 'اختر الالبوم',
        'instruction_press' => 'اضغط على %s',
        'update' => 'تحديث المختصرات و/أو اعادة تقييس الصور',
        'update_what' => 'ماذا يجب تحديثه',
        'update_thumb' => 'مختصرات الصور فقط',
        'update_pic' => 'الصور المعاد قياسها فقط',
        'update_both' => 'الصور المختصرة والمعاد قياسها معا',
        'update_number' => 'عدد الصور المعالجة بالضغطة',
        'update_option' => '(حال التقليل من هذا الاعداد ان واجهت مشاكل انتهاء الوقت)',
        'filename_title' => 'اسم الملف &rArr; عنوان الصورة',
        'filename_how' => 'كيفية تغيير اسم الملف',
        'filename_remove' => 'ازالة نهاية .jpg و استبدال _ (شرطة سفلية) بالمسافات',
        'filename_euro' => 'غير 2003_11_23_13_20_20.jpg الى 23/11/2003 13:20',
        'filename_us' => 'يغير  2003_11_23_13_20_20.jpg الى  11/23/2003 13:20',
        'filename_time' => 'يغير  2003_11_23_13_20_20.jpg الى 13:20',
        'delete' => 'يلغي عناوين الصور او صور القياس الاصلية',
        'delete_title' => 'الغي عناوين الصور',
        'delete_original' => 'الغي صور القياس الاصلية',
        'delete_replace' => 'يلغي الصور الاصلية ويستبدلهم باخرى بقياس مختلف',
        'select_album' => 'اختار الالبوم',
  'delete_orphans' => 'احذف العليقات (جميع الالبومات)', //cpg1.3.0
  'orphan_comment' => 'التعليقات التي وجدت', //cpg1.3.0
  'delete' => 'حذف', //cpg1.3.0
  'delete_all' => 'حذف الكل', //cpg1.3.0
  'comment' => 'التعليقات: ', //cpg1.3.0
  'nonexist' => 'ربط بالملف الغير موجود # ', //cpg1.3.0
  'phpinfo' => 'اعرض معلومات php', //cpg1.3.0
  'update_db' => 'ترقية قواعد البيانات', //cpg1.3.0
  'update_db_explanation' => 'If you have replaced coppermine files, added a modification or upgraded from a previous version of coppermine, make sure to run the database update once. This will create the necessary tables and/or config values in your coppermine database.', //cpg1.3.0
);

?>
