<?php
/***************************************************************************
 *                            lang_main_attach.php [English]
 *                              -------------------
 *     begin                : Thu Feb 07 2002
 *     copyright            : (C) 2002 Meik Sievertsen
 *     email                : acyd.burn@gmx.de
 *     Translation          : Sp Lin , splin@cpalm.idv.tw (For Attachment Mod 2.39)
 *
 *     $Id: lang_main_attach.php,v 1.27 2003/01/16 11:11:56 acydburn Exp $
 *
 ****************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

//
// Attachment Mod Main Language Variables
//

// Auth Related Entries
$lang['Rules_attach_can'] = '您 <b>可以</b> 在這個版面附加檔案';
$lang['Rules_attach_cannot'] = '您 <b>無法</b> 在這個版面附加檔案';
$lang['Rules_download_can'] = '您 <b>可以</b> 在這個版面下載檔案';
$lang['Rules_download_cannot'] = '您 <b>無法</b> 在這個版面下載檔案';
$lang['Sorry_auth_view_attach'] = '對不起，但是您沒有被授權檢視或下載這個附加檔案。';

// Viewtopic -> Display of Attachments
$lang['Description'] = '檔案描述'; 
$lang['Downloaded'] = '下載次數'; 
$lang['Download'] = '下載'; 
$lang['Filesize'] = '檔案大小';
$lang['Viewed'] = '檢視次數'; 
$lang['Download_number'] = '檔案已被下載 %d 次'; // replace %d with count
$lang['Extension_disabled_after_posting'] = '副檔名 \'%s\' 已被系統管理員停用，因此這個附加檔案是不被顯示的。'; // used in Posts and PM's, replace %s with mime type

// Posting/PM -> Initial Display
$lang['Attach_posting_cp'] = '附加檔案發表控制台';
$lang['Attach_posting_cp_explain'] = '如果您點選「新增附加檔案」，您將可以看見附加檔案的對話盒。<br />上傳新的版本，如果您不想要下載次數被歸零而更新原先舊版的檔案。<br />如何上傳新版本檔案，先點選「發表的附加檔案清單」，再點選「新增附加檔案」，再點[新增附加檔案]中的「瀏覽」，<br />選擇新版本的檔案之後，再點選[發表的附加檔案清單]中的「上傳新的版本」。';

// Posting/PM -> Posting Attachments
$lang['Add_attachment'] = '新增附加檔案';
$lang['Add_attachment_title'] = '新增附加檔案';
$lang['Add_attachment_explain'] = '如果您不想要新增附加檔案到您的文章中，請保持欄位空白即可。';
$lang['File_name'] = '檔名';
$lang['File_comment'] = '檔案註解';

// Posting/PM -> Posted Attachments
$lang['Posted_attachments'] = '發表的附加檔案清單';
$lang['Options'] = '選項';
$lang['Update_comment'] = '更新註解';
$lang['Delete_attachments'] = '刪除附加檔案';
$lang['Delete_attachment'] = '刪除附加檔案';
$lang['Delete_thumbnail'] = '刪除縮圖';
$lang['Upload_new_version'] = '上傳新的版本';

// Errors -> Posting Attachments
$lang['Invalid_filename'] = '%s 是一個無效的檔名'; // replace %s with given filename
$lang['Attachment_php_size_na'] = '附加檔案太大了。<br />無法取得在 PHP 定義的大小限制。<br />附加檔案模組是無法確定定義在 php.ini 中的最大上傳大小。';
$lang['Attachment_php_size_overrun'] = '附加檔案太大了。<br />最大上傳大小: %d MB。<br />請注意那個大小是定義在 php.ini，這個工具它是由 PHP 所設定而且附加檔案模組無法推翻這個數值。'; // replace %d with ini_get('upload_max_filesize')
$lang['Disallowed_extension'] = '副檔名 %s 是不被允許的'; // replace %s with extension (e.g. .php) 
$lang['Disallowed_extension_within_forum'] = '你不被允許附加檔案的副檔名為 %s 於這一版面';
$lang['Attachment_too_big'] = '附加檔案太大了。<br />最大的大小: %d %s'; // replace %d with maximum file size, %s with size var
$lang['Attach_quota_reached'] = '對不起，但是已達到全部附加檔案最大的檔案大小限制。如果您有問題請聯絡系統管理員。';
$lang['Too_many_attachments'] = '附加檔案無法被新增，由於最大限制。%d 個的附加檔案在這個發表已完成。'; // replace %d with maximum number of attachments
$lang['Error_imagesize'] = '附加檔案/圖片必須小於寬度 %d 像素和高度 %d 像素'; 
$lang['General_upload_error'] = '上傳錯誤: 無法上傳附加檔案到 %s 。'; // replace %s with local path

$lang['Error_empty_add_attachbox'] = '您必須先在「新增附加檔案」對話盒裡點選「瀏覽」然後在您要更新的項目點選「上傳新的版本」。';
$lang['Error_missing_old_entry'] = '無法更新附加檔案，無法找到舊的附加檔案項目。';

// Errors -> PM Related
$lang['Attach_quota_sender_pm_reached'] = '對不起，但是在您的私人訊息收件匣已達到全部附加檔案最大檔案的大小限制。請刪除一些在您的收件匣/寄收匣的附加檔案。';
$lang['Attach_quota_receiver_pm_reached'] = '對不起，但是在私人訊息收件匣的 \'%s\' 已達到全部附加檔案的最大檔案的大小限制。請讓他們知道，或等待直到他/她刪除一些在他的/她的附加檔案。';

// Errors -> Download
$lang['No_attachment_selected'] = '您沒有選擇一個附加檔案來下載或檢視。';
$lang['Error_no_attachment'] = '選擇的附加檔案再也不存在了。';

// Delete Attachments
$lang['Confirm_delete_attachments'] = '您確定您想要刪除選擇的附加檔案?';
$lang['Deleted_attachments'] = '選擇的附加檔案已被刪除。';
$lang['Error_deleted_attachments'] = '無法刪除附加檔案。';
$lang['Confirm_delete_pm_attachments'] = '您確定您想要刪除已發表在這個 PM 中全部的附加檔案嗎?';

// General Error Messages
$lang['Attachment_feature_disabled'] = '附加檔案功能已被停用。';

$lang['Directory_does_not_exist'] = '資料夾 \'%s\' 不存在或是找不到。'; // replace %s with directory
$lang['Directory_is_not_a_dir'] = '如果 \'%s\' 是一個資料夾請核取。'; // replace %s with directory
$lang['Directory_not_writeable'] = '資料夾 \'%s\' 是不可寫入的。您將需要建立上傳路徑並變更屬性為 777 (或變更擁有者為您 httpd 伺服器的擁有者) 要上傳檔案。<br />如果您只要完全的 ftp-存取 變更資料夾的 \'屬性\' 為 rwxrwxrwx。'; // replace %s with directory

$lang['Ftp_error_connect'] = '無法連線到 FTP 伺服器: \'%s\'。請檢查您的 FTP-設定。';
$lang['Ftp_error_login'] = '無法登入到 FTP 伺服器。這用戶名稱 \'%s\' 或密碼是錯誤的。請檢查您的 FTP-設定。';
$lang['Ftp_error_path'] = '無法存取 FTP 資料夾: \'%s\'。請檢查您的 FTP 設定。';
$lang['Ftp_error_upload'] = '無法上傳檔案到 FTP 資料夾: \'%s\'。請檢查您的 FTP 設定。';
$lang['Ftp_error_delete'] = '無法刪除在 FTP 資料夾的檔案: \'%s\'。請檢查您的 FTP 設定。<br />其他的理由對於這個錯誤無法被不存在的附加檔案，請先在幽靈檔案檢查。';
$lang['Ftp_error_pasv_mode'] = '無法 使用/停用 FTP 被動模式(PASV)'; 

// Attach Rules Window
$lang['Rules_page'] = '附加檔案規則'; 
$lang['Attach_rules_title'] = '已允許副檔名群組和他們的大小';
$lang['Group_rule_header'] = '%s -> 最大上傳的大小: %s';
$lang['Allowed_extensions_and_sizes'] = '允許的副檔名和大小';
$lang['Note_user_empty_group_permissions'] = '注意:<br />你通常允許附加檔案於這個版面，<br />但是自從沒有副檔名群組在這裡被允許附加，<br />你無法附加任何檔案。如果你試著附加檔案，<br />你將會收到錯誤訊息。<br />';

// Quota Variables
$lang['Upload_quota'] = '上傳配額'; 
$lang['Pm_quota'] = '私人訊息配額'; 
$lang['User_upload_quota_reached'] = '對不起，你已達到你的最大的上傳配額限制 %d %s'; 

// User Attachment Control Panel
$lang['User_acp_title'] = '會員檔案附加控制台'; 
$lang['UACP'] = '會員檔案附加控制台'; 
$lang['User_uploaded_profile'] = '已上傳檔案：%s'; 
$lang['User_quota_profile'] = '配額限制：%s'; 
$lang['Upload_percent_profile'] = '全部的 %d%%'; 

// Common Variables
$lang['Bytes'] = '位元組';
$lang['KB'] = 'KB';
$lang['MB'] = 'MB';
$lang['Attach_search_query'] = '搜尋附加檔案';
$lang['Test_settings'] = '測試設定';
$lang['Not_assigned'] = '未被指定';
$lang['No_file_comment_available'] = '沒有可用的檔案註解';
$lang['Attachbox_limit'] = '你的附加檔案盒已使用 %d%% '; 
$lang['No_quota_limit'] = '沒有配額限制'; 
$lang['Unlimited'] = '沒有限制';

?>
