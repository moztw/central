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
// CVS version: $Id: bulgarian-utf-8.php,v 1.8 2004/12/29 23:06:22 chtito Exp $
// ------------------------------------------------------------------------- //

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Bulgarian',
  'lang_name_native' => 'Български',
  'lang_country_code' => 'bg',
  'trans_name'=> 'Mihail Tomoff',
  'trans_email' => 'gallery@starrydreams.com',
  'trans_website' => 'http://www.starrydreams.com/cpg/',
  'trans_date' => '2004-05-29',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('неделя', 'понеделник', 'вторник', 'сряда', 'четвъртък', 'петък', 'събота');
$lang_month = array('януари', 'февруари', 'март', 'април', 'май', 'юни', 'юли', 'август', 'септември', 'октомври', 'ноември', 'декември');

// Some common strings
$lang_yes = 'Да';
$lang_no  = 'Не';
$lang_back = 'НАЗАД';
$lang_continue = 'ПРОДЪЛЖИ';
$lang_info = 'Информация';
$lang_error = 'Грешка';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%B %d %Y';
$lastcom_date_fmt =  '%d/%m/%y в %H:%M'; //cpg1.3.0
$lastup_date_fmt = '%d %B %Y';
$register_date_fmt = '%d %B %Y';
$lasthit_date_fmt = '%d %B %Y в %I:%M %p'; //cpg1.3.0
$comment_date_fmt =  '%d %B %Y в %I:%M %p'; //cpg1.3.0

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
  'random' => 'Случайни снимки', //cpg1.3.0
  'lastup' => 'Последно добавени',
  'lastalb'=> 'Последно актуализирани албуми',
  'lastcom' => 'Последни коментари',
  'topn' => 'Най-гледани',
  'toprated' => 'Най-високо оценени',
  'lasthits' => 'Последно видяни',
  'search' => 'Резултати от търсенето',
  'favpics'=> 'Любими снимки', //cpg1.3.0
);

$lang_errors = array(
  'access_denied' => 'Нямате достъп до тази страница.',
  'perm_denied' => 'Нямате позволение за тази операция.',
  'param_missing' => 'Скриптът е извикан без нужните параметри.',
  'non_exist_ap' => 'Избраният албум/файл не съществува !', //cpg1.3.0
  'quota_exceeded' => 'Достигната е дисковата квота<br /><br />Имате квота от [quota]K, в момента файловете ви използват [space]K, добавянето на този файл ще надмине квотата ви.', //cpg1.3.0
  'gd_file_type_err' => 'Ако употребявате GD библиотеката ще можете да използвате само JPEG и PNG.',
  'invalid_image' => 'Файлът който качихте е дефектен и не може да бъде обработен от библиотеката GD',
  'resize_failed' => 'Не е възможно създаването на умалена картинка (thumnail) или образ с умалени размери.',
  'no_img_to_display' => 'Няма снимки за показване',
  'non_exist_cat' => 'Избраната категория не съществува',
  'orphan_cat' => 'Категорията има несъществуваща родителска категория, пуснете мениджъра за категории за да коригирате проблема!', //cpg1.3.0
  'directory_ro' => 'Не може да се пише в директорията \'%s\' , файловете не могат да бъдат изтрити', //cpg1.3.0
  'non_exist_comment' => 'Избраният коментар не съществува.',
  'pic_in_invalid_album' => 'Файлът е в несъществуващ албум (%s)!?', //cpg1.3.0
  'banned' => 'В момента ви е забранено да използвате сайта.',
  'not_with_udb' => 'Функцията е забранена от администратора на Coppermine, защото е интегрирана в софтуера на форума. Това, което се опитвате, или не е поддържано в тази конфигурация, или функцията трябва да се обслужва от форумния софтуер.',
  'offline_title' => 'Offline', //cpg1.3.0
  'offline_text' => 'Галерията е offline - проверете по-късно', //cpg1.3.0
  'ecards_empty' => 'В момента няма записи на картички. Проверете дали сте позволили логването на електронните картички в конфигурацията на coppermine!', //cpg1.3.0
  'action_failed' => 'Командата не бе изпълнена. Coppermine не може да я изпълни.', //cpg1.3.0
  'no_zip' => 'Нужните библиотеки за обработка на ZIP файлове не са в наличност. Обърнете се , моля, към администратора на Coppermine.', //cpg1.3.0
  'zip_type' => 'Не ви е позволено да качвате ZIP файлове.', //cpg1.3.0
);

$lang_bbcode_help = 'Следните кодове могат да ви бъдат от полза: <li>[b]<b>Bold</b>[/b]</li> <li>[i]<i>Italic</i>[/i]</li> <li>[url=http://yoursite.com/]Url Text[/url]</li> <li>[email]user@domain.com[/email]</li>'; //cpg1.3.0

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'alb_list_title' => 'Списък с албуми',
  'alb_list_lnk' => 'Списък с албуми',
  'my_gal_title' => 'Отиди в личната галерия',
  'my_gal_lnk' => 'Галерията ми',
  'my_prof_lnk' => 'Профил',
  'adm_mode_title' => 'Админ режим',
  'adm_mode_lnk' => 'Админ режим',
  'usr_mode_title' => 'Потребителски режим',
  'usr_mode_lnk' => 'Като потребител',
  'upload_pic_title' => 'Качи файл в албума', //cpg1.3.0
  'upload_pic_lnk' => 'Качи файл', //cpg1.3.0
  'register_title' => 'Създай акаунт',
  'register_lnk' => 'Регистрация',
  'login_lnk' => 'Вход',
  'logout_lnk' => 'Изход',
  'lastup_lnk' => 'Последно качени',
  'lastcom_lnk' => 'Последни коментари',
  'topn_lnk' => 'Най-гледани',
  'toprated_lnk' => 'Най-високо оценени',
  'search_lnk' => 'Търсене',
  'fav_lnk' => 'Любими снимки',
  'memberlist_title' => 'Покажи списъка от потребители', //cpg1.3.0
  'memberlist_lnk' => 'Списък с потребители', //cpg1.3.0
  'faq_title' => 'Често Задавани Въпроси за картинната галерия &quot;Coppermine&quot;', //cpg1.3.0
  'faq_lnk' => 'ЧЗВ', //cpg1.3.0
);

$lang_gallery_admin_menu = array(
  'upl_app_lnk' => 'Одобрение',
  'config_lnk' => 'Конфигурация',
  'albums_lnk' => 'Албуми',
  'categories_lnk' => 'Категории',
  'users_lnk' => 'Потребители',
  'groups_lnk' => 'Групи',
  'comments_lnk' => 'Коментари', //cpg1.3.0
  'searchnew_lnk' => 'Файлове на куп', //cpg1.3.0
  'util_lnk' => 'Админ средства', //cpg1.3.0
  'ban_lnk' => 'Забранени потребители',
  'db_ecard_lnk' => 'Картички', //cpg1.3.0
);

$lang_user_admin_menu = array(
  'albmgr_lnk' => 'Създаване / подреждане на албумите ми',
  'modifyalb_lnk' => 'Промяна на албумите ми',
  'my_prof_lnk' => 'Профил',
);

$lang_cat_list = array(
  'category' => 'Категория',
  'albums' => 'Албуми',
  'pictures' => 'Файлове', //cpg1.3.0
);

$lang_album_list = array(
  'album_on_page' => '%d албум(а) на %d страница(и)',
);

$lang_thumb_view = array(
  'date' => 'ДАТА',
  //Сортиране по filename and title
  'name' => 'ИМЕ НА ФАЙЛА',
  'title' => 'ЗАГЛАВИЕ',
  'sort_da' => 'Сортиране по дата възходящо',
  'sort_dd' => 'Сортиране по дата низходящо',
  'sort_na' => 'Сортиране по име възходящо',
  'sort_nd' => 'Сортиране по име низходящо',
  'sort_ta' => 'Сортиране по заглавие възходящо',
  'sort_td' => 'Сортиране по заглавие низходящо',
  'download_zip' => 'Свали като Zip файл', //cpg1.3.0
  'pic_on_page' => '%d файл(а) в %d страница(и)',
  'user_on_page' => '%d потребител(и) на %d страница(и)', //cpg1.3.0
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Връщане в страницата с умалените снимки',
  'pic_info_title' => 'Покажи/скрий информация за файла', //cpg1.3.0
  'slideshow_title' => 'Slideshow',
  'ecard_title' => 'Изпратете файла като електронна картичка', //cpg1.3.0
  'ecard_disabled' => 'Електронните картички за изключени',
  'ecard_disabled_msg' => 'Нямате право да изпращате картички', //js-alert //cpg1.3.0
  'prev_title' => 'Вж. предишния файл', //cpg1.3.0
  'next_title' => 'Вж. следващия файл', //cpg1.3.0
  'pic_pos' => 'ФАЙЛ %s/%s', //cpg1.3.0
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Оцени файла ', //cpg1.3.0
  'no_votes' => '(Все още не е гласувано)',
  'rating' => '(настояща оценка : %s / 5 от %s гласа)',
  'rubbish' => 'За боклука',
  'poor' => 'Лош',
  'fair' => 'Става',
  'good' => 'Добър',
  'excellent' => 'Отличен',
  'great' => 'Велик',
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
  CRITICAL_ERROR => 'Критична грешка',
  'file' => 'Файл: ',
  'line' => 'Ред: ',
);

$lang_display_thumbnails = array(
  'filename' => 'Име : ',
  'filesize' => 'Големина : ',
  'dimensions' => 'Размери : ',
  'date_added' => 'Дата на добавяне : ', //cpg1.3.0
);

$lang_get_pic_data = array(
  'n_comments' => '%s коментара',
  'n_views' => '%s пъти видяна',
  'n_votes' => '(%s гласа)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Debug информация', //cpg1.3.0
  'select_all' => 'Избери всичко', //cpg1.3.0
  'copy_and_paste_instructions' => 'Ако ще търсите помощ от форума на coppermine , копирайте тази debug информация във вашето съобщение. Сменете всички пароли от питането с  *** преди да пуснете съобщението си.', //cpg1.3.0
  'phpinfo' => 'display phpinfo', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => 'По подразбиране', //cpg1.3.0
  'choose_language' => 'Избери език', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'По подразбиране', //cpg1.3.0
  'choose_theme' => 'Избери тема', //cpg1.3.0
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
  'Exclamation' => 'Възклицание',
  'Question' => 'Въпрос',
  'Very Happy' => 'Много съм щастлив',
  'Smile' => 'Усмивка',
  'Sad' => 'Тъжен съм',
  'Surprised' => 'Учуден съм',
  'Shocked' => 'Шокиран съм',
  'Confused' => 'Объркан съм',
  'Cool' => 'Гот ми е',
  'Laughing' => 'Смея се',
  'Mad' => 'Ще полудея',
  'Razz' => 'Освиркване',
  'Embarassed' => 'Засрамен съм',
  'Crying or Very sad' => 'Плачещ или много тъжен',
  'Evil or Very Mad' => 'Зъл или много луд',
  'Twisted Evil' => 'Извратено зъл',
  'Rolling Eyes' => 'Въртящи се очички',
  'Wink' => 'Намигам',
  'Idea' => 'Имам идея',
  'Arrow' => 'Стрелка',
  'Neutral' => 'Неутрален съм',
  'Mr. Green' => 'Чичко-тревичко',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  0 => 'Напускане на админ режим ...',
  1 => 'Влизане в админ режим...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Албумите се нуждаят от име !', //js-alert
  'confirm_modifs' => 'Сигурни ли сте че искате тези промени ?', //js-alert
  'no_change' => 'Не сте променили нищо !', //js-alert
  'new_album' => 'Нов албум',
  'confirm_delete1' => 'Наистина ли искате да изтриете албума ?', //js-alert
  'confirm_delete2' => '\nВсички файлове и коментари ще бъдат загубени безвъзвратно !', //js-alert
  'select_first' => 'Първо изберете албум', //js-alert
  'alb_mrg' => 'Албумен мениджър',
  'my_gallery' => '* Галерията ми *',
  'no_category' => '* Без категория *',
  'delete' => 'Изтрийте',
  'new' => 'Нов',
  'apply_modifs' => 'Промени',
  'select_category' => 'Изберете категория',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Параметрите изисквани за операцията \'%s\' не са зададени !',
  'unknown_cat' => 'Избраната категория не съществува в базата данни',
  'usergal_cat_ro' => 'Галериите на потребителите не могат да бъдат изтрити !',
  'manage_cat' => 'Управление на категории',
  'confirm_delete' => 'Наистина ли искате да изтриете категорията', //js-alert
  'category' => 'Категория',
  'operations' => 'Операции',
  'move_into' => 'Премести в',
  'update_create' => 'Актуализиране/Създаване на категория',
  'parent_cat' => 'Родителска категория',
  'cat_title' => 'Заглавие на категорията',
  'cat_thumb' => 'Умалена картинка на категорията', //cpg1.3.0
  'cat_desc' => 'Описание на категорията',
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
  'title' => 'Конфигурация',
  'restore_cfg' => 'Възстановяване на системните настройки',
  'save_cfg' => 'Запис на новата конфигурация',
  'notes' => 'Бележки',
  'info' => 'Информация',
  'upd_success' => 'Конфигурацията на Coppermine бе актуализирана',
  'restore_success' => 'Конфигурацията по подразбиране Coppermine бе възстановена',
  'name_a' => 'По име възходящо',
  'name_d' => 'По име низходящо',
  'title_a' => 'По заглавие възходящо',
  'title_d' => 'По заглавие низходящо',
  'date_a' => 'По дата възходящо',
  'date_d' => 'По дата низходящо',
  'th_any' => 'Максимално отношение',
  'th_ht' => 'Височина',
  'th_wd' => 'Ширина',
  'label' => 'табела', //cpg1.3.0
  'item' => 'флаг', //cpg1.3.0
  'debug_everyone' => 'Всеки', //cpg1.3.0
  'debug_admin' => 'Само администратори', //cpg1.3.0
        );

if (defined('CONFIG_PHP')) $lang_config_data = array(
  'Общи настройки',
  array('Име на галерията', 'gallery_name', 0),
  array('Описание на галерията', 'gallery_description', 0),
  array('Email на администратора на галерията', 'gallery_admin_email', 0),
  array('Адресът за линка \'Повече снимки\' в електронните картички', 'ecards_more_pic_target', 0),
  array('Галерията е offline', 'offline', 1), //cpg1.3.0
  array('Логване на картичките', 'log_ecards', 1), //cpg1.3.0
  array('Позволяване на ZIP-сваляне на любимите', 'enable_zipdownload', 1), //cpg1.3.0

  'Език, Теми &amp; Charset',
  array('Език', 'lang', 5),
  array('Тема', 'theme', 6),
  array('Показване на списъка с езици', 'language_list', 1), //cpg1.3.0
  array('Показване на езиковите флагчета', 'language_flags', 8), //cpg1.3.0
  array('Показване на &quot;нулиране&quot; в езиковия избор', 'language_reset', 1), //cpg1.3.0
  array('Показване на списъка с теми', 'theme_list', 1), //cpg1.3.0
  array('Показване на &quot;нулиране&quot; в списъка с теми', 'theme_reset', 1), //cpg1.3.0
  array('Показване на ЧЗВ', 'display_faq', 1), //cpg1.3.0
  array('Показване на bbcode помощта', 'show_bbcode_help', 1), //cpg1.3.0
  array('Character encoding', 'charset', 4), //cpg1.3.0

  'Изглед на списъка с албуми',
  array('Ширина на главната таблица (пиксели или %)', 'main_table_width', 0),
  array('Брой нива от категория за показване', 'subcat_level', 0),
  array('Брой албуми за показване', 'albums_per_page', 0),
  array('Брой колони за списъка от албуми', 'album_list_cols', 0),
  array('Размер на умалените картинки в пиксели', 'alb_list_thumb_size', 0),
  array('Съдържание на главната страница', 'main_page_layout', 0),
  array('Показване на албумни умалени картинки от първо ниво в категориите','first_level',1),

  'Изглед на умалените картинки',
  array('Брой колони в страница с умалени картинки', 'thumbcols', 0),
  array('Брой редове на страница с умалени картинки', 'thumbrows', 0),
  array('Максимум умалени картинки за показване', 'max_tabs', 10), //cpg1.3.0
  array('Показване на пояснение (в допълнение към заглавието) под умалената картинка', 'caption_in_thumbview', 1), //cpg1.3.0
  array('Показване на броя виждания под умалената картинка', 'views_in_thumbview', 1), //cpg1.3.0
  array('Показване на броя коментари под умалената картинка', 'display_comment_count', 1),
  array('Показване на потребителя качил файла под умалената картинка', 'display_uploader', 1), //cpg1.3.0
  array('Ред по подразбиране за сортиране на файловете', 'default_sort_order', 3), //cpg1.3.0
  array('Минимален брой гласове за да се появи даден файл в \'Най-високо оценени\'', 'min_votes_for_rating', 0), //cpg1.3.0

  'Изглед на снимката &amp; настройки на коментарите',
  array('Ширина на таблицата за показване на файлове (пиксели или %)', 'picture_table_width', 0), //cpg1.3.0
  array('Информацията за файла да се вижда по подразбиране', 'display_pic_info', 1), //cpg1.3.0
  array('Цензуриране на коментарите', 'filter_bad_words', 1),
  array('Позволяване на емотикони в коментарите', 'enable_smilies', 1),
  array('Позволяване на няколко последователни коментара от един и същ потребител (изключване на flood protection)', 'disable_comment_flood_protect', 1), //cpg1.3.0
  array('Максимална дължина на описанието', 'max_img_desc_length', 0),
  array('Максимален брой символи за дума', 'max_com_wlength', 0),
  array('Максимален брой редове за коментар', 'max_com_lines', 0),
  array('Максимална дължина на коментар', 'max_com_size', 0),
  array('Показване на филмовата лента', 'display_film_strip', 1),
  array('Брой снимки във филмовата лента', 'max_film_strip_items', 0),
  array('Уведомяване на администратора за коментари по email', 'email_comment_notification', 1), //cpg1.3.0
  array('Интервал на Slideshow в милисекунди (1 секунда = 1000 милисекунди)', 'slideshow_interval', 0), //cpg1.3.0

  'Настройки на файловете и умалените картинки', //cpg1.3.0
  array('Качество за JPEG файловете', 'jpeg_qual', 0),
  array('Максимален размер на умалената картинка <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0), //cpg1.3.0
  array('Използван размер ( ширина или височина или максимално отношение за умалената картинка )<b>**</b>', 'thumb_use', 7),
  array('Създаване на междинни образи','make_intermediate',1),
  array('Максимална ширина или височина на междинния образ/видео <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0), //cpg1.3.0
  array('Максимална големина на качен файл (KB)', 'max_upl_size', 0), //cpg1.3.0
  array('Максимална ширина или височина на качените образи/видео (пиксели)', 'max_upl_width_height', 0), //cpg1.3.0

  'Настройки на файловете и умалените картинки за напреднали', //cpg1.3.0
  array('Показване на икона за частен албум на нелогнат потребител','show_private',1), //cpg1.3.0
  array('Забранение символи в имената на файловете', 'forbiden_fname_char',0), //cpg1.3.0
  //array('Accepted file extensions for uploaded pictures', 'allowed_file_extensions',0), //cpg1.3.0
  array('Позволени видове образи', 'allowed_img_types',0), //cpg1.3.0
  array('Позволени видове видео', 'allowed_mov_types',0), //cpg1.3.0
  array('Позволени видове аудио', 'allowed_snd_types',0), //cpg1.3.0
  array('Позволение видове документи', 'allowed_doc_types',0), //cpg1.3.0
  array('Метод за променяне на размера на образите','thumb_method',2), //cpg1.3.0
  array('Път до програмата на ImageMagick \'convert\' (пример /usr/bin/X11/)', 'impath', 0), //cpg1.3.0
  //array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types',0), //cpg1.3.0
  array('Опции към ImageMagick', 'im_options', 0), //cpg1.3.0
  array('Четене на EXIF данните в JPEG файловете', 'read_exif_data', 1), //cpg1.3.0
  array('Четене IPTC данните в JPEG файловете', 'read_iptc_data', 1), //cpg1.3.0
  array('Директория с албумите <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0), //cpg1.3.0
  array('Директория за потребителските файлове <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0), //cpg1.3.0
  array('Представка за междинните образи <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0), //cpg1.3.0
  array('Представка за умалените картинки <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0), //cpg1.3.0
  array('Режим по подразбиране за директориите', 'default_dir_mode', 0), //cpg1.3.0
  array('Режим по подразбиране за файловете', 'default_file_mode', 0), //cpg1.3.0

  'Настройки за потребителите',
  array('Позволяване на регистрация на нови потребители', 'allow_user_registration', 1),
  array('Регистрацията на потребители изисква потвърждение по email', 'reg_requires_valid_email', 1),
  array('Уведомяване на администратора по email за регистрация на потребител', 'reg_notify_admin_email', 1), //cpg1.3.0
  array('Позволяване на двама потребители да имат един и същ email', 'allow_duplicate_emails_addr', 1),
  array('Потребителите могат да имат частни албуми (Заб.: ако превключите от \'да\' на \'не\' всички сегашни частни албуми ще станат публични)', 'allow_private_albums', 1), //cpg1.3.0
  array('Уведомяване на администратора за качени файлове чакащи одобряване', 'upl_notify_admin_email', 1), //cpg1.3.0
  array('Позволяване на логнатите потребители да виждат потребителския списък', 'allow_memberlist', 1), //cpg1.3.0

  'Допълнителни полета за описание на снимките (оставете празни ако няма да ги използвате)',
  array('Поле 1', 'user_field1_name', 0),
  array('Поле 2', 'user_field2_name', 0),
  array('Поле 3', 'user_field3_name', 0),
  array('Поле 4', 'user_field4_name', 0),

  'Настройки за Cookies',
  array('Име на cookie-то използвано от скрипта (когато се използва bbs интегриране, внимавайте да се различава от cookie-то на bbs-а)', 'cookie_name', 0),
  array('Път до cookie-то използвано от скрипта', 'cookie_path', 0),

  'Разни настройки',
  array('Позволяване на debug режим', 'debug_mode', 9), //cpg1.3.0
  array('Показване на съобщения в debug режим', 'debug_notice', 1), //cpg1.3.0

  '<br /><div align="left"><a name="notice1"></a>(*) Тази настройка не трябва да се променя ако вече имате файлове в базата данни.<br />
  <a name="notice2"></a>(**) Когато променяте тази настройка, само файловете, които са добавени от този момент нататък ще бъдат повлияни от нея, така че е препоръчително да не я променяте ако вече имате файлове в галерията. Все пак, ако желаете може да приложите промените и върху старите файлове като използвате  &quot;<a href="util.php">администраторските средства</a> (променяне на размер на снимки)&quot; от администраторското меню.</div><br />', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Изпращане на картичка', //cpg1.3.0
  'ecard_sender' => 'Подател', //cpg1.3.0
  'ecard_recipient' => 'Получател', //cpg1.3.0
  'ecard_date' => 'Дата', //cpg1.3.0
  'ecard_display' => 'Показване на картичка', //cpg1.3.0
  'ecard_name' => 'Име', //cpg1.3.0
  'ecard_email' => 'Email', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_възходящо' => 'възходящо', //cpg1.3.0
  'ecard_низходящо' => 'низходящо', //cpg1.3.0
  'ecard_sorted' => 'Сортиране', //cpg1.3.0
  'ecard_by_date' => 'по дата', //cpg1.3.0
  'ecard_by_sender_name' => 'по име на подател', //cpg1.3.0
  'ecard_by_sender_email' => 'по подателски email', //cpg1.3.0
  'ecard_by_sender_ip' => 'по име на подателски IP адрес', //cpg1.3.0
  'ecard_by_recipient_name' => 'по име на получател', //cpg1.3.0
  'ecard_by_recipient_email' => 'по получателски email', //cpg1.3.0
  'ecard_number' => 'показване на записи %s до %s от %s', //cpg1.3.0
  'ecard_goto_page' => 'отиване на страница', //cpg1.3.0
  'ecard_records_per_page' => 'Записи за страница', //cpg1.3.0
  'check_all' => 'Маркиране на всички', //cpg1.3.0
  'uncheck_all' => 'Отмаркиране', //cpg1.3.0
  'ecards_delete_selected' => 'Изтриване на избраните картички', //cpg1.3.0
  'ecards_delete_confirm' => 'Сигурни ли сте че искате да изтриете записите? Маркирайте кутийката!', //cpg1.3.0
  'ecards_delete_sure' => 'Сигурен съм', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Трябва да напишете име и коментар',
  'com_added' => 'Коментарът ви бе добавен',
  'alb_need_title' => 'Трябва да дадете заглавие на албума !',
  'no_udp_needed' => 'Няма нужда от актуализация.',
  'alb_updated' => 'Албумът бе актуализиран',
  'unknown_album' => 'Избраният албум не съществува или вие нямате разрешение да качвате в него',
  'no_pic_uploaded' => 'Не бе качен нито един файл !<br /><br />Ако наистина сте избрали  файл за качване, проверете дали сървъра позволява качване на файлове...', //cpg1.3.0
  'err_mkdir' => 'Създаването на директория %s бе неуспешно  !',
  'dest_dir_ro' => 'Целевата директория %s не позволява писане от скрипта !',
  'err_move' => 'Преместването от %s в %s невъзможно !',
  'err_fsize_too_large' => 'Размерът на файла, който качихте е твърде голям (максимум позволени размери %s x %s) !', //cpg1.3.0
  'err_imgsize_too_large' => 'Размерът на файла, който качихте е твърде голям (максимум позволени размер %s KB) !',
  'err_invalid_img' => 'Файлът, който качихте е в невалиден формат !',
  'allowed_img_types' => 'Можете да качите само %s образи.',
  'err_insert_pic' => 'Файлът \'%s\' не може да бъде включен в албума ', //cpg1.3.0
  'upload_success' => 'Файлът ви бе качен успешно<br /><br />Ще стане видим след одобрение от администратора.', //cpg1.3.0
  'notify_admin_email_subject' => '%s - Upload notification', //cpg1.3.0
  'notify_admin_email_body' => 'Снимка, качена от %s се нуждае от одобрението ви. Посетете %s', //cpg1.3.0
  'info' => 'Информация',
  'com_added' => 'Бе добавен коментар',
  'alb_updated' => 'Албумът бе актуализиран',
  'err_comment_empty' => 'Коментарът ви е празен !',
  'err_invalid_fext' => 'Само файлове със следните разширения се приемат : <br /><br />%s.',
  'no_flood' => 'Съжаляваме но вие сте автор вече на последния качен коментар.<br /><br />Можете ако искате да модифицирате вече качения коментар', //cpg1.3.0
  'redirect_msg' => 'Пренасочване.<br /><br /><br />Натиснете \'ПРОДЪЛЖЕТЕ\' ако страницата не се презареди автоматично',
  'upl_success' => 'Файлът ви бе добавен успешно', //cpg1.3.0
  'email_comment_subject' => 'Comment posted on Coppermine Photo Gallery', //cpg1.3.0
  'email_comment_body' => 'Някой е написал коментар в галерията ви. Вижте го на', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Пояснение',
  'fs_pic' => 'образ в цял размер',
  'del_success' => 'успешно изтрит',
  'ns_pic' => 'образ с нормален размер',
  'err_del' => 'не може да бъде изтрит',
  'thumb_pic' => 'умалена картинка',
  'comment' => 'коментар',
  'im_in_alb' => 'образ в албума',
  'alb_del_success' => 'Албумът \'%s\' бе изтрит',
  'alb_mgr' => 'Албумен мениджър',
  'err_invalid_data' => 'Невалидна информация се получи в \'%s\'',
  'create_alb' => 'Създаване на албум \'%s\'',
  'update_alb' => 'Актуализиране на албум \'%s\' със заглавие \'%s\' и индекс \'%s\'',
  'del_pic' => 'Изтриване на файл', //cpg1.3.0
  'del_alb' => 'Изтриване на албум',
  'del_user' => 'Изтриване на потребител',
  'err_unknown_user' => 'Избраният потребител не съществува !',
  'comment_deleted' => 'Коментарът успешно бе изтрит',
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
  'confirm_del' => 'Сигурни ли сте че искате да ИЗТРИЕТЕ този файл ? \\nКоментарите също ще бъдат изтрити.', //js-alert //cpg1.3.0
  'del_pic' => 'ИЗТРИВАНЕ НА ФАЙЛА', //cpg1.3.0
  'size' => '%s x %s пиксела',
  'views' => '%s пъти',
  'slideshow' => 'Slideshow',
  'stop_slideshow' => 'СПРИ ШОУТО',
  'view_fs' => 'Натиснете за да видите снимката уголемена',
  'edit_pic' => 'Редактиране на описание', //cpg1.3.0
  'crop_pic' => 'Изрязване и ротиране', //cpg1.3.0
);

$lang_picinfo = array(
  'title' =>'Информация за файла', //cpg1.3.0
  'Filename' => 'Име',
  'Album name' => 'Албум',
  'Rating' => 'Оценка ( %s глас(а) )',
  'Keywords' => 'Ключови думи',
  'File Size' => 'Размер на файла',
  'Dimensions' => 'Размери',
  'Displayed' => 'Показан',
  'Camera' => 'Камера',
  'Date taken' => 'Дата на заснемане',
  'Aperture' => 'Апертура',
  'Exposure time' => 'Експозиционно време',
  'Focal length' => 'Фокусно разстояние',
  'Comment' => 'Коментар',
  'addFav'=>'Добави към любими', //cpg1.3.0
  'addFavPhrase'=>'Любими', //cpg1.3.0
  'remFav'=>'Махни от любими снимки', //cpg1.3.0
  'iptcTitle'=>'IPTC заглавие', //cpg1.3.0
  'iptcCopyright'=>'IPTC Copyright', //cpg1.3.0
  'iptcKeywords'=>'IPTC ключови думи', //cpg1.3.0
  'iptcCategory'=>'IPTC категория', //cpg1.3.0
  'iptcSubCategories'=>'IPTC подкатегория', //cpg1.3.0
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Редактирайте коментара',
  'confirm_delete' => 'Сигурен ли сте че искате да изтриете коментара ?', //js-alert
  'add_your_comment' => 'Добавете коментар',
  'name'=>'Име',
  'comment'=>'Коментар',
  'your_name' => 'анонимен',
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Натиснете върху образа за да затворите прозореца',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Изпращане на електронна картичка',
  'invalid_email' => '<b>Предупреждение</b> : невалиден email адрес !',
  'ecard_title' => 'Електронна картичка до вас от %s',
  'error_not_image' => 'Само образи могат да бъдат пращани като картичка.', //cpg1.3.0
  'view_ecard' => 'Ако картичката не се показва коректно, натиснете върху този линк',
  'view_more_pics' => 'Натиснете върху линка за да видите още картинки !',
  'send_success' => 'Картичката ви бе пратена',
  'send_failed' => 'Съжаляваме но сървърът ви не може да праща картичките ви...',
  'from' => 'От',
  'your_name' => 'Името ви',
  'your_email' => 'Email адресът ви',
  'to' => 'To',
  'rcpt_name' => 'Име на получателя',
  'rcpt_email' => 'Email адрес на получателя',
  'greetings' => 'Поздравления',
  'message' => 'Съобщение',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Информация за&nbsp;файла', //cpg1.3.0
  'album' => 'Албум',
  'title' => 'Заглавие',
  'desc' => 'Описание',
  'keywords' => 'Ключови думи',
  'pic_info_str' => '%s пъти; %s - %s KB - %s разглеждания - %s гласа',
  'approve' => 'Одобрение на файл', //cpg1.3.0
  'postpone_app' => 'Отлагане на одобряването',
  'del_pic' => 'Изтриване на файла', //cpg1.3.0
  'read_exif' => 'Прочитане на EXIF информацията отново', //cpg1.3.0
  'reset_view_count' => 'Нулиране на брояча за разглежданията',
  'reset_votes' => 'Нулиране на гласовете',
  'del_comm' => 'Изтриване на коментари',
  'upl_approval' => 'Одобрение на качени файлове',
  'edit_pics' => 'Редактиране на файлове', //cpg1.3.0
  'see_next' => 'Вижте следващите файлове', //cpg1.3.0
  'see_prev' => 'Вижте предишните файлове', //cpg1.3.0
  'n_pic' => '%s файла', //cpg1.3.0
  'n_of_pic_to_disp' => 'Брой файлове за показване', //cpg1.3.0
  'apply' => 'Приложете измененията', //cpg1.3.0
  'crop_title' => 'Coppermine Picture Editor', //cpg1.3.0
  'preview' => 'Предварителен преглед', //cpg1.3.0
  'save' => 'Запис на образа', //cpg1.3.0
  'save_thumb' =>'Записване като умалена картинка', //cpg1.3.0
  'sel_on_img' =>'Селекцията трябва да бъде изцяло над образа!', //js-alert //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Често Задавани Въпроси', //cpg1.3.0
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
  'forgot_passwd' => 'Напомняне за парола', //cpg1.3.0
  'err_already_logged_in' => 'Вече сте логнат !', //cpg1.3.0
  'enter_username_email' => 'Въведете потребителското си име или email адрес', //cpg1.3.0
  'submit' => 'прати', //cpg1.3.0
  'failed_sending_email' => 'Писмото с паролата не може да бъде пратено !', //cpg1.3.0
  'email_sent' => 'Email с потребителското ви име и парола бе пратен на %s', //cpg1.3.0
  'err_unk_user' => 'Избраният потребител не съществува!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - Password reminder', //cpg1.3.0
  'passwd_reminder_body' => 'Помолихте да ви бъдат напомнени данните за влизане:
Име: %s
Парола: %s
Натиснете %s за да влезнете.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Име на група',
  'disk_quota' => 'Дискова квота',
  'can_rate' => 'Може да оценява файлове', //cpg1.3.0
  'can_send_ecards' => 'Може да праща картички',
  'can_post_com' => 'Може да пише коментари',
  'can_upload' => 'Може да качва файлове', //cpg1.3.0
  'can_have_gallery' => 'Може да има лична галерия',
  'apply' => 'Приложете измененията',
  'create_new_group' => 'Създаване на нова група',
  'del_groups' => 'Изтриване на избраната група',
  'confirm_del' => 'Предупреждение, когато изтриете група, потребителите от нея ще бъдат преместени в групата  \'Регистрирани\' !\n\nЖелаете ли да продължите ?', //js-alert //cpg1.3.0
  'title' => 'Управление на потребителските групи',
  'approval_1' => 'Одобр. за качване в публ. албуми (1)',
  'approval_2' => 'Одобр. за качване в частни албуми (2)',
  'upload_form_config' => 'Конфигурация на формата за качване', //cpg1.3.0
  'upload_form_config_values' => array( 'Единични файлове само', 'Множество файлове само', 'URI само', 'ZIP само', 'Файл-URI', 'Файл-ZIP', 'URI-ZIP', 'Файл-URI-ZIP'), //cpg1.3.0
  'custom_user_upload'=>'Потребителят може да определя броя на полетата за качване?', //cpg1.3.0
  'num_file_upload'=>'Максимум/точен брой на полетата за качване на файлове', //cpg1.3.0
  'num_URI_upload'=>'Максимум/точен брой на полетата за качване на URI', //cpg1.3.0
  'note1' => '<b>(1)</b> Качването в публичен албум изисква одобрение от администратора',
  'note2' => '<b>(2)</b> Качването в албуми, които принадлежат на потребителя изисква одобрение от администратора',
  'notes' => 'Бележки',
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Добре дошли !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Сигурни ли сте че искате да ИЗТРИЕТЕ този албум ? \\nВсички файлове и коментари ще бъдат изтрити.', //js-alert //cpg1.3.0
  'delete' => 'ИЗТРИЙ',
  'modify' => 'СВОЙСТВА',
  'edit_pics' => 'РЕДАКЦИЯ НА ФАЙЛ', //cpg1.3.0
);

$lang_list_categories = array(
  'home' => 'начало',
  'stat1' => '<b>[pictures]</b> файл(а) в <b>[albums]</b> албум(а) и <b>[cat]</b> категория(и) с <b>[comments]</b> коментар(а), видян(и) <b>[views]</b> път(и)', //cpg1.3.0
  'stat2' => '<b>[pictures]</b> файл(а) в <b>[albums]</b> албум(а), видян(и) <b>[views]</b> път(и)', //cpg1.3.0
  'xx_s_gallery' => 'Галерия на %s',
  'stat3' => '<b>[pictures]</b> файл(а) в <b>[albums]</b> албум(a) с <b>[comments]</b> коментар(а), видян(и) <b>[views]</b> път(и)', //cpg1.3.0
);

$lang_list_users = array(
  'user_list' => 'Списък с потребители',
  'no_user_gal' => 'Няма потребителски галерии',
  'n_albums' => '%s албум(а)',
  'n_pics' => '%s файл(а)', //cpg1.3.0
);

$lang_list_albums = array(
  'n_pictures' => '%s файл(а)', //cpg1.3.0
  'last_added' => ', последният добавен на %s',
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Вход',
  'enter_login_pswd' => 'Въведете име и парола за вход',
  'username' => 'Име',
  'password' => 'Парола',
  'remember_me' => 'Помни ме',
  'welcome' => 'Добре дошъл %s ...',
  'err_login' => '*** Не можете да влезнете. Опитайте пак. ***',
  'err_already_logged_in' => 'Вече сте влязъл !',
  'forgot_password_link' => 'Забравих си паролата', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Изход',
  'bye' => 'Чао, чао %s ...',
  'err_not_loged_in' => 'Не сте влязъл !',
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
  'upd_alb_n' => 'Актуализация на албум %s',
  'general_settings' => 'Общи настройки',
  'alb_title' => 'Заглавие на албум',
  'alb_cat' => 'Категория на албум',
  'alb_desc' => 'Описание на албум',
  'alb_thumb' => 'Умалена картинка на албума',
  'alb_perm' => 'Разрешения за този албум',
  'can_view' => 'Албумът може да бъде разглеждан само от',
  'can_upload' => 'Посетителите могат да качват файлове',
  'can_post_comments' => 'Посетителите могат да пишат коментари',
  'can_rate' => 'Посетителите могат да оценяват файлове',
  'user_gal' => 'Потребителски галерии',
  'no_cat' => '* Без категория *',
  'alb_empty' => 'Празен албум',
  'last_uploaded' => 'Последно качени',
  'public_alb' => 'Всеки (публичен албум)',
  'me_only' => 'Само мен',
  'owner_only' => 'Само собственика на албума (%s) ',
  'groupp_only' => 'Членовете на групата \'%s\' ',
  'err_no_alb_to_modify' => 'Нито един албум не можете да променяте в базата данни.',
  'update' => 'Актуализация на албум', //cpg1.3.0
  'notice1' => '(*) зависи от настройките на групата %sgroups%s ', //cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Съжаляваме но вече сте оценили този файл', //cpg1.3.0
  'rate_ok' => 'Гласът ви бе получен',
  'forbidden' => 'Не можете да оценявате собствените си файлове.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Въпреки че администраторите на {SITE_NAME} ще се опитват да премахват или редактират всеки нежелателен материал възможно най-бързо, не е възможно да се преглежда всеки файл. Затова трябва да се съгласите с това че всички файлове в този сайт отразяват само вижданията или мнението на авторите им, а не на администраторите или уебмастъра (освен файловете на последните) и следователно не могат да бъдат отговорни за тях.<br />
<br />
Съгласявате се да не качвате обидни, вулгарни, клеветнически, предизвикващи омраза, заплашващи, сексуално-ориентирани или други материали, които могат да нарушават действащите закони. Съгласявате се и че уебмастъра, администратора и модераторите на {SITE_NAME} имат правото да премахват или редактират всеки файл по всяко време когато им е удобно. Като потребител давате съгласието всяка информация, която въведете да бъде въведена в база данни. Въпреки че тази информация няма да бъде предавана на трети страни без съгласието ви, уебмастърът и администраторът не могат да бъдат подвеждани под отговорност за хакерски атаки, които могат да компрометират тайната на вашите данни.<br />
<br />
Сайтът използва cookies за да съхранява информация на локалния ви компютър. Тези cookies служат само за да подобрят удоволстието ви от разглеждането. Email aдресът ви ще се използва само за потвърждение на регистрационните ви детайли и за паролата.<br />
<br />
Като натиснете 'Съгласен съм' отдолу , се съгласявате с тези условия.
EOT;

$lang_register_php = array(
  'page_title' => 'Регистрация на потребител',
  'term_cond' => 'Условия',
  'i_agree' => 'Съгласен съм',
  'submit' => 'Изпращане на регистрация',
  'err_user_exists' => 'Потребителското име, което сте въвели вече съществува, моля изберете друго',
  'err_password_mismatch' => 'Двете пароли не съвпадат, въведете ги, моля, отново',
  'err_uname_short' => 'Потребителското име трябва да е поне 2 символа дълго',
  'err_password_short' => 'Паролата трябва да е поне 2 символа дълга',
  'err_uname_pass_diff' => 'Потребителското име и паролата трябва да са различни',
  'err_invalid_email' => 'Email адресът е невалиден',
  'err_duplicate_email' => 'Друг регистриран вече потребител има същия email, който въведохте',
  'enter_info' => 'Входна регистрационна информация',
  'required_info' => 'Задължителна информация',
  'optional_info' => 'Незадължителна информация',
  'username' => 'Потребителско име',
  'password' => 'Парола',
  'password_again' => 'Въведете отново паролата',
  'email' => 'Email',
  'location' => 'Място',
  'interests' => 'Интереси',
  'website' => 'Лична страница',
  'occupation' => 'Професия/занимание',
  'error' => 'ГРЕШКА',
  'confirm_email_subject' => '%s - Registration confirmation',
  'information' => 'Информация',
  'failed_sending_email' => 'Регистрационният email за потвърждаване не може да бъде изпратен !',
  'thank_you' => 'Благодарим ви за регистрацията.<br /><br />Email с информация за това как да активирате акаунта си бе пратен на email адресът, който дадохте.',
  'acct_created' => 'Акаунтът ви бе създаден и вече можете да влезнете с вашето име и парола',
  'acct_active' => 'Акаунтът ви вече е активен и можете да влезнете с името и паролата си',
  'acct_already_act' => 'Акаунтът ви вече бе активиран !',
  'acct_act_failed' => 'Този акаунт не може да бъде активиран !',
  'err_unk_user' => 'Избраният потребител не съществува !',
  'x_s_profile' => 'Профил на %s\'',
  'group' => 'Група',
  'reg_date' => 'Присъединил се на:',
  'disk_usage' => 'Използвано пространство',
  'change_pass' => 'Смяна на парола',
  'current_pass' => 'Сегашна парола',
  'new_pass' => 'Нова парола',
  'new_pass_again' => 'Нова парола отново',
  'err_curr_pass' => 'Настоящата парола е сгрешена',
  'apply_modif' => 'Промени',
  'change_pass' => 'Промяна на паролата ми',
  'update_success' => 'Профилът ви бе актуализиран',
  'pass_chg_success' => 'Паролата ви бе променена',
  'pass_chg_error' => 'Паролата ви не бе променена',
  'notify_admin_email_subject' => '%s - Registration notification', //cpg1.3.0
  'notify_admin_email_body' => 'Нов потребител с име "%s" се регистрира в галерията ви', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
Благодарим ви за регистриране в {SITE_NAME}

Потребителското ви име е : "{USER_NAME}"
Паролата ви : "{PASSWORD}"

За да активирате акаунта си, трябва да кликнете линка отдолу или да го копирате в адресния прозорец на уеб браузера ви.

{ACT_LINK}

С най-добри пожелания,

Екипът на {SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'Разглеждане на коментарите',
  'no_comment' => 'Няма коментари за разглеждане',
  'n_comm_del' => '%s коментар(а) изтрити',
  'n_comm_disp' => 'Брой коментари за показване',
  'see_prev' => 'Вж. предишните',
  'see_next' => 'Вж. следващите',
  'del_comm' => 'Изтрий избраните',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
  0 => 'Търсене в колекцията',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Търсене на нови файлове', //cpg1.3.0
  'select_dir' => 'Изберете директория',
  'select_dir_msg' => 'This function allows you to add a batch of file that your have uploaded to your server by FTP.<br /><br />Select the directory where you have uploaded your files', //cpg1.3.0
  'no_pic_to_add' => 'Няма файлове за добавяне', //cpg1.3.0
  'need_one_album' => 'Трябва ви поне един албум за да ползвате функцията.',
  'warning' => 'Предупреждение',
  'change_perm' => 'скрипта не може да пише в тази директория, трябва да смените разрешенията й на 755 или 777 преди да се опитвате да добавяте файлове !', //cpg1.3.0
  'target_album' => '<b>Сложете файловете от &quot;</b>%s<b>&quot; в </b>%s', //cpg1.3.0
  'folder' => 'Папка',
  'image' => 'файл',
  'album' => 'Албум',
  'result' => 'Резултат',
  'dir_ro' => 'Не може да се чете. ',
  'dir_cant_read' => 'Не може да се записва върху него. ',
  'insert' => 'Добавяне на файлове в галерията', //cpg1.3.0
  'list_new_pic' => 'Списък на новите файлове', //cpg1.3.0
  'insert_selected' => 'Вкарайте избраните файлове', //cpg1.3.0
  'no_pic_found' => 'Не бе открит нов файл', //cpg1.3.0
  'be_patient' => 'Бъдете търпеливи, скрипта има нужда от време за да добави файловете', //cpg1.3.0
  'no_album' => 'няма избрани албуми',  //cpg1.3.0
  'бележки' =>  '<ul>'.
                          '<li><b>OK</b> : означава че файлът бе успешно добавен'.
                          '<li><b>DP</b> : означава че файлът е дубликат и вече е в базата данни'.
                          '<li><b>PB</b> : означава че файлът не може да бъде добавен, проверете конфигурацията и позволенията на директориите където са разположени файловете'.
                          '<li><b>NA</b> : означава че не сте избрали албум, в който да отиде файлът, натиснете \'<a href="javascript:history.back(1)">назад</a>\' и изберете албум. Ако нямате албум <a href="albmgr.php">създайте си първо</a></li>'.
                          '<li>Ако знакът OK, DP, PB  не се появи, натиснете върху дефектния файл за да видите съобщението за грешка дадено от PHP'.
                          '<li>Ако браузерът ви даде: \' Timeout\', натиснете бутона за презареждане'.
                          '</ul>', //cpg1.3.0
  'select_album' => 'изберете албум', //cpg1.3.0
  'check_all' => 'Изберете всички', //cpg1.3.0
  'uncheck_all' => 'Нулиране', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Забрана на потребители',
  'user_name' => 'Потребителско име',
  'ip_address' => 'IP адрес',
  'expiry' => 'Изтича на: (празно е равностойно на постоянна забрана)',
  'edit_ban' => 'Запис на промените',
  'delete_ban' => 'Изтриване',
  'add_new' => 'Добавяне на нова забрана',
  'add_ban' => 'Добавяне',
  'error_user' => 'Не може да бъде открит потребител', //cpg1.3.0
  'error_specify' => 'Трябва да дадете или име или IP адрес', //cpg1.3.0
  'error_ban_id' => 'Невалидно ID на забрана!', //cpg1.3.0
  'error_admin_ban' => 'Не можете да забраните сам себе си!', //cpg1.3.0
  'error_server_ban' => 'Щяхте да забраните собствения си сървър? Вай, вай, не може ...', //cpg1.3.0
  'error_ip_forbidden' => 'Не можете да забраните това IP - не е routable!', //cpg1.3.0
  'lookup_ip' => 'Проверка на IP адрес', //cpg1.3.0
  'submit' => 'прати!', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Качване на файл', //cpg1.3.0
  'custom_title' => 'Форма по желание', //cpg1.3.0
  'cust_instr_1' => 'Можете да изберете по желание броя на полета за качване. Обаче, не може да изберете повече от лимитите изброени по-долу.', //cpg1.3.0
  'cust_instr_2' => 'Желан брой полета', //cpg1.3.0
  'cust_instr_3' => 'Полета за качване на файлове: %s', //cpg1.3.0
  'cust_instr_4' => 'Полета за качване от URI/URL: %s', //cpg1.3.0
  'cust_instr_5' => 'Полета за качване от URI/URL:', //cpg1.3.0
  'cust_instr_6' => 'Полета за качване на файлове:', //cpg1.3.0
  'cust_instr_7' => 'Моля въведете броя полета от всеки тип за качване, който желате този път. След това натиснете \'Продължете\'. ', //cpg1.3.0
  'reg_instr_1' => 'Невалидно действие при създаване на формата.', //cpg1.3.0
  'reg_instr_2' => 'Сега можете да качите файлове като използвате полетата по-долу. Размерът на качените файлове качени от вас на сървъра не трябва да надвишава %s KB всеки. ZIP файловете качени чрез \'Качване на файл\' и \'Качване на URI/URL\' секциите ще останат компресирани.', //cpg1.3.0
  'reg_instr_3' => 'Ако искате zip файла или архива да бъде декомпресиран, трябва да използвате полето за качване дадено в  \'Декомпресирано ZIP качване\'.', //cpg1.3.0
  'reg_instr_4' => 'Когато използвате секцията за качване от URI/URL, моля въведете пътя към файла по този модел: http://www.mysite.com/images/example.jpg', //cpg1.3.0
  'reg_instr_5' => 'След като попълните формата, натиснете \'Продължете\'.', //cpg1.3.0
  'reg_instr_6' => 'Декомпресирано ZIP качване:', //cpg1.3.0
  'reg_instr_7' => 'Качване на файлове:', //cpg1.3.0
  'reg_instr_8' => 'Качване от URI/URL:', //cpg1.3.0
  'error_report' => 'Съобщение за грешка', //cpg1.3.0
  'error_instr' => 'Следните качвания се сблъскаха с грешка:', //cpg1.3.0
  'file_name_url' => 'Име на файл/URL', //cpg1.3.0
  'error_message' => 'Съобщение за грешка', //cpg1.3.0
  'no_post' => 'Файлът не бе качен чрез POST.', //cpg1.3.0
  'forb_ext' => 'Забранено файлово разширение.', //cpg1.3.0
  'exc_php_ini' => 'Надвишен размер на файла позволен в php.ini.', //cpg1.3.0
  'exc_file_size' => 'Надвишен размер на файла позволен от CPG.', //cpg1.3.0
  'partial_upload' => 'Само частично качване.', //cpg1.3.0
  'no_upload' => 'Качване не се състоя.', //cpg1.3.0
  'unknown_code' => 'Неизвестна PHP грешка при качване.', //cpg1.3.0
  'no_temp_name' => 'No upload - No temp name.', //cpg1.3.0
  'no_file_size' => 'Не съдържа данни/Дефектен', //cpg1.3.0
  'impossible' => 'Не може да бъде преместен.', //cpg1.3.0
  'not_image' => 'Не е образ/дефектен', //cpg1.3.0
  'not_GD' => 'Не е GD разширение.', //cpg1.3.0
  'pixel_allowance' => 'Надвишен максимума от разрешени пиксели.', //cpg1.3.0
  'incorrect_prefix' => 'Невалидна URI/URL представка', //cpg1.3.0
  'could_not_open_URI' => 'Не може да бъде отворен URI.', //cpg1.3.0
  'unsafe_URI' => 'Не може да бъде проверена безопасносттаSafety not verifiable.', //cpg1.3.0
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
  'cant_read_URI' => 'Не може да бъде прочетен URI/URL', //cpg1.3.0
  'cant_open_write_file' => 'Cannot open URI write file.', //cpg1.3.0
  'cant_write_write_file' => 'Cannot write to URI write file.', //cpg1.3.0
  'cant_unzip' => 'Не може да бъде разархивиран zip файла.', //cpg1.3.0
  'unknown' => 'Неизвестна грешка', //cpg1.3.0
  'succ' => 'Успешни качвания', //cpg1.3.0
  'success' => '%s качвания бяха успешни.', //cpg1.3.0
  'add' => 'Натиснте моля \'Продължете\' за да добавите файловете към албумите.', //cpg1.3.0
  'failure' => 'Грешка при качване', //cpg1.3.0
  'f_info' => 'Информация за файла', //cpg1.3.0
  'no_place' => 'Предишният файл не може да бъде поставен.', //cpg1.3.0
  'yes_place' => 'Предишният файл беше поставен успешно.', //cpg1.3.0
  'max_fsize' => 'Максимумът позволен за големина на файле е %s KB',
  'album' => 'Албум',
  'picture' => 'Файл', //cpg1.3.0
  'pic_title' => 'Заглавие', //cpg1.3.0
  'description' => 'Описание на файла', //cpg1.3.0
  'keywords' => 'Ключови думи (отделени с интервали)',
  'err_no_alb_uploadables' => 'Съжаляваме, но няма албуми в които да ви е позволено да качвате файлове', //cpg1.3.0
  'place_instr_1' => 'Моля поставете файловете в албуми. Също така може да дадете и подходяща информация за всеки един от тях.', //cpg1.3.0
  'place_instr_2' => 'Още файлове трябва да бъдат поставени. Моля натиснете \'Продължете\'.', //cpg1.3.0
  'process_complete' => 'Успешно поставихте всички файлове.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'title' => 'Управление на потребители',
  'name_a' => 'По име възходящо',
  'name_d' => 'По име низходящо',
  'group_a' => 'По група възходящо',
  'group_d' => 'По група низходящо',
  'reg_a' => 'По дата на регистрация възходящо',
  'reg_d' => 'По дата на регистрация низходящо',
  'pic_a' => 'По брой файлове възходящо',
  'pic_d' => 'По брой файлове низходящо',
  'disku_a' => 'По използване на диска възходящо',
  'disku_d' => 'По използване на диска низходящо',
  'lv_a' => 'По последно посещение възходящо', //cpg1.3.0
  'lv_d' => 'По последно посещение низходящо', //cpg1.3.0
  'sort_by' => 'Сортиране на потребителите по',
  'err_no_users' => 'Таблицата с потребители е празна !',
  'err_edit_self' => 'Не можете да редактирате собствения си профил, вместо това използвайте линка \'Профил\'',
  'edit' => 'РЕДАКЦИЯ',
  'delete' => 'ИЗТРИЙ',
  'name' => 'Потребителско име',
  'group' => 'Група',
  'inactive' => 'Неактивен',
  'operations' => 'Операции',
  'pictures' => 'Файлове', //cpg1.3.0
  'disk_space' => 'Използвано пространство / Квота',
  'registered_on' => 'Регистриран на',
  'last_visit' => 'Последно посещение', //cpg1.3.0
  'u_user_on_p_pages' => '%d потребители на %d страници',
  'confirm_del' => 'Сигурни ли сте че искате да ИЗТРИЕТЕ този потребител ? \\nВсички негови файлове и албуми ще бъдат изтрити.', //js-alert //cpg1.3.0
  'mail' => 'ПОЩА',
  'err_unknown_user' => 'Избраният потребител не съществува !',
  'modify_user' => 'Промяна на потребител',
  'notes' => 'Бележки',
  'note_list' => '<li>Ако не искате да променяте сегашната парола, оставете полето с "парола" празно',
  'password' => 'Парола',
  'user_active' => 'Потребителят е активен',
  'user_group' => 'Потребителска група',
  'user_email' => 'Потребителски email',
  'user_web_site' => 'Потребителски уеб сайт',
  'create_new_user' => 'Създаване на нов потребител',
  'user_location' => 'Потребителско местонахождение',
  'user_interests' => 'Потребителски интереси',
  'user_occupation' => 'Потребителска професия',
  'latest_upload' => 'Скорошно качени файлове', //cpg1.3.0
  'never' => 'никога', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
  'title' => 'Администраторски средства (Промяна на размерите на образи)', //cpg1.3.0
  'what_it_does' => 'Какво прави',
  'what_update_titles' => 'Променя заглавията от имената на файловете',
  'what_delete_title' => 'Изтрива заглавия',
  'what_rebuild' => 'Пресъздава умалените картинки и променя размерите на снимките',
  'what_delete_originals' => 'Изтрива първоначалните снимки и ги замества със снимки с променените размери',
  'file' => 'Файл',
  'title_set_to' => 'заглавие сменено на',
  'submit_form' => 'прати',
  'updated_succesfully' => 'актуализирани успешно',
  'error_create' => 'ГРЕШКА при създаване',
  'continue' => 'Обработване на повече образи',
  'main_success' => 'Файлът %s бе успешно използван като главен файл', //cpg1.3.0
  'error_rename' => 'Грешка при преименуването от %s в %s',
  'error_not_found' => 'Файлът %s не бе открит',
  'back' => 'обратно в главната страница',
  'thumbs_wait' => 'Актуализация на умалени картинки и/или образи с променени размери, моля изчакайте...',
  'thumbs_continue_wait' => 'Продължават да се актуализират умалени картинки и/или образи с променени размери...',
  'titles_wait' => 'Актуализация на файлове, моля изчакайте...',
  'delete_wait' => 'Триене на заглавия, моля изчакайте...',
  'replace_wait' => 'Триене на оригинали и заместването им с образи с променени размери, моля изчакайте...',
  'instruction' => 'Бързи инструкции',
  'instruction_action' => 'Изберете действие',
  'instruction_parameter' => 'Нагласете параметрите',
  'instruction_album' => 'Изберете албум',
  'instruction_press' => 'Натиснете %s',
  'update' => 'Актуализация на умалени картинки и/или снимки с променени размери',
  'update_what' => 'Какво трябва да бъде актуализирано',
  'update_thumb' => 'Само умалените картинки',
  'update_pic' => 'Само картините с променени размери',
  'update_both' => 'И умалените картинки и картините с променени размери',
  'update_number' => 'Брой обработвани образи при натискане',
  'update_option' => '(Опитайте да сложите по-ниски стойности на тази опция ако получавате проблеми с грешка от типа "Тimeout" )',
  'filename_title' => 'Име на файл &rArr; Заглавие на файл', //cpg1.3.0
  'filename_how' => 'Как да бъде променено името на файла',
  'filename_remove' => 'Премахване на .jpg разширението и замяна на _ (долна черта) с интервали',
  'filename_euro' => 'От 2003_11_23_13_20_20.jpg в 23/11/2003 13:20',
  'filename_us' => 'От 2003_11_23_13_20_20.jpg в 11/23/2003 13:20',
  'filename_time' => 'От 2003_11_23_13_20_20.jpg в 13:20',
  'delete' => 'Изтриване на заглавията на файлове или снимките с първоначалния размер', //cpg1.3.0
  'delete_title' => 'Изтриване на заглавията на файлове', //cpg1.3.0
  'delete_original' => 'Изтриване на снимките с първоначалния размер',
  'delete_replace' => 'Изтриване на снимките с първоначалния размер и замяната им с версия с променени размери',
  'select_album' => 'Избор на албум',
  'delete_orphans' => 'Изтриване на "осиротяли" коментари (действа върху всички албуми)', //cpg1.3.0
  'orphan_comment' => 'осиротял коментар бе открит', //cpg1.3.0
  'delete' => 'Изтриване', //cpg1.3.0
  'delete_all' => 'Изтриване на всички', //cpg1.3.0
  'comment' => 'Коментар: ', //cpg1.3.0
  'nonexist' => 'прикачен към несъществуващ файл # ', //cpg1.3.0
  'phpinfo' => 'Показване на phpinfo', //cpg1.3.0
  'update_db' => 'Актуализация на базата данни', //cpg1.3.0
  'update_db_explanation' => 'Ако се подменили файловете на coppermine, или сте направили модификация или сте извършили ъпгрейд от предишна версия на coppermine, непременно извършете еднократна актуализация на базата данни. Това ще създаде необходимите таблици и/или конфигурационни стойности в базата ви данни.', //cpg1.3.0
);

?>
