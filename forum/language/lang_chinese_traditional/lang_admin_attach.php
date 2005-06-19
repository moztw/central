<?php
/***************************************************************************
 *                            lang_admin_attach.php [English]
 *                              -------------------
 *     begin                : Thu Feb 07 2002
 *     copyright            : (C) 2002 Meik Sievertsen
 *     email                : acyd.burn@gmx.de
 *     Translation          : Sp Lin , splin@cpalm.idv.tw (For Attachment Mod 2.39)

 *     $Id: lang_admin_attach.php,v 1.36 2003/08/30 15:47:39 acydburn Exp $
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
// Attachment Mod Admin Language Variables
//

// Modules, this replaces the keys used
$lang['Control_Panel'] = '控制台';
$lang['Shadow_attachments'] = '幽靈檔案';
$lang['Forbidden_extensions'] = '禁止副檔名';
$lang['Extension_control'] = '副檔名控制';
$lang['Extension_group_manage'] = '副檔名群組控制';
$lang['Special_categories'] = '特殊類別';
$lang['Sync_attachments'] = '同步附加檔案';
$lang['Quota_limits'] = '配額限制';

// Attachments -> Management
$lang['Attach_settings'] = '附加檔案設定';
$lang['Manage_attachments_explain'] = '在這裡你可以設定附加檔案模組的主要設定。如果你點選測試設定按鈕，附加檔案模組可以做些系統測試來確定那模組會正確地運作。如果你有上傳檔案的問題，請執行這個測試，來變成詳細的錯誤訊息。';
$lang['Attach_filesize_settings'] = '附加檔案檔案大小設定';
$lang['Attach_number_settings'] = '附加檔案數量設定';
$lang['Attach_options_settings'] = '附加檔案選項';

$lang['Upload_directory'] = '上傳資料夾';
$lang['Upload_directory_explain'] = '輸入相關路徑來自你的 phpBB2 安裝到附加檔案上傳資料夾。例如，輸入 \'files\' 如果你的 phpBB2 安裝的位置在 http://www.yourdomain.com/phpBB2 而附加檔案上傳資料夾的位置在 http://www.yourdomain.com/phpBB2/files。';
$lang['Attach_img_path'] = '附加檔案發表圖示';
$lang['Attach_img_path_explain'] = '在單獨的發表這個圖片是顯示在附加檔案連結的前面。保持這個欄位空白的如果你不想要圖示被顯示。這個設定將會覆寫被設定在副檔名群組管理。';
$lang['Attach_topic_icon'] = '附加檔案主題圖示';
$lang['Attach_topic_icon_explain'] = '這個圖片是顯示在有附加檔案的主題的前面。保持這個欄位空白如果你不想要圖示被顯示。';
$lang['Attach_display_order'] = '附加檔案顯示規則';
$lang['Attach_display_order_explain'] = '在這裡不論是在發表主題/PM 顯示你可以選擇附加檔案，依照您附加的時間先後來顯示。如:「[遞減]的檔案時間規則(最近的附加檔案則優先顯示)」或「[遞增]的檔案時間規則(較早的附加檔案則優先顯示)」。';
$lang['Show_apcp'] = '顯示新版附加檔案發表控制台';
$lang['Show_apcp_explain'] = '選擇 2.32 版以後的新版附加檔案發表控制台(選擇:是)或者是選擇 2.24 以前舊版的附加檔案發表控制台(選擇:否)。這個有點難以解釋，因此您還是自己去試一試囉!';

$lang['Max_filesize_attach'] = '檔案大小';
$lang['Max_filesize_attach_explain'] = '附加檔案的最大的檔案大小。數字 0 代表 \'沒有限制\'。這個設定是依你的伺服器組態所限制。例如，如果你的 php 組態只允許 2MB 的最大上傳限制，這個是無法被 Mod 的組態所取代的。';
$lang['Attach_quota'] = '附加檔案限額';
$lang['Attach_quota_explain'] = '全部附加檔案可以保留在你的網頁空間裡最大的磁碟大小。數字 0 代表 \'沒有限制\'。';
$lang['Max_filesize_pm'] = '在私人訊息資料夾的最大檔案大小';
$lang['Max_filesize_pm_explain'] = '可以使用在每個會員的私人訊息的附加檔案的最大的磁碟空間。數字 0 代表 \'沒有限制\'。';
$lang['Default_quota_limit'] = '預設配額限制'; 
$lang['Default_quota_limit_explain'] = '在這裡你可以選擇預設配額限制自動地指定給新進的註冊會員及會員而不用另外定義配額限制。這選項 \'無配額限制\' 是給不使用任何附加檔案配額的人使用的，替代使用預設值你要從這個管理控制台去定義它。'; 

$lang['Max_attachments'] = '附加檔案的最大數量';
$lang['Max_attachments_explain'] = '在一個發表文章中最多可以附加檔案的數量。';
$lang['Max_attachments_pm'] = '私人訊息中最多的附加檔案的數量';
$lang['Max_attachments_pm_explain'] = '定義使用者是允許在一個私人訊息裡包含最多附加檔案的數量。';

$lang['Disable_mod'] = '關閉附加檔案模組';
$lang['Disable_mod_explain'] = '這個選項是主要給測試新的樣板或主題，它關閉全部附加檔案的功能除了在管理控制台之外。';
$lang['PM_Attachments'] = '允許在私人訊息裡附加檔案';
$lang['PM_Attachments_explain'] = '允許/不允許附加檔案到私人訊息裡。';
$lang['Ftp_upload'] = '啟用 FTP 上傳';
$lang['Ftp_upload_explain'] = '啟用/停用 FTP 上傳選項。如果你設定它為「是」，你必須定義附加檔案 FTP 設定和上傳資料夾是不常使用的。';
$lang['Attachment_topic_review'] = '你想要顯示附加檔案在檢視主題視窗嗎?';
$lang['Attachment_topic_review_explain'] = '如果你選擇「是」，當你回覆主題時全部已附加的檔案將被在檢視主題中顯示。';

$lang['Ftp_server'] = 'FTP 上傳伺服器';
$lang['Ftp_server_explain'] = '在這裡你可以輸入 IP-位址或伺服器使用的 FTP-主機名稱做為你的上傳的檔案位址。如果你保持這個欄位空白的，伺服器在當你的 phpBB2 討論區已被安裝時會使用到。請注意那它是不允許加入「ftp://」到位址的前面，只要完全的 ftp.foo.com，想要較快的時候,只要使用完全的 IP 位址即可。';

$lang['Attach_ftp_path'] = 'FTP 路徑到你的上傳資料夾';
$lang['Attach_ftp_path_explain'] = '你的附加檔案要儲存的資料夾。這個資料夾不需要變更屬性。請不要在這裡輸入你的 IP 或 FTP-位址，這個輸入欄位只要提供 FTP 路徑。<br />例如: /home/web/uploads';
$lang['Ftp_download_path'] = '下載連結到 FTP 路徑';
$lang['Ftp_download_path_explain'] = '在你的 FTP 路徑輸入網址 ，你要儲存附加檔案的位置。<br />如果你使用遠端的 FTP 伺服器，請輸入完整的網址，例如：http://www.mystorage.com/phpBB2/upload。<br />如果你是使用在本地主機來儲存你的檔案，你可以輸入你的 phpBB2 目錄下的相對路徑，例如：\'upload\'。<br />最後面的斜線「/」要移除。保持這個欄位空白的，如果 FTP 路徑無法從網際網路存取。使用保持這個欄位空白的，你會無法使用實際的下載方式。';
$lang['Ftp_passive_mode'] = '使用 FTP 被動模式(PASV)'; 
$lang['Ftp_passive_mode_explain'] = '這 PASV 命令要求那是遠端伺服器開啟埠口給資料連線並回傳埠口的位址。這遠端伺服器在那伺服器的埠口等待客戶端連線進來。'; 

$lang['No_ftp_extensions_installed'] = '你無法使用 FTP 上傳的方式，因為 FTP 額外的功能沒有整合到你的 PHP 安裝裡。'; 

// Attachments -> Shadow Attachments
$lang['Shadow_attachments_explain'] = '在這裡你可以刪除附加檔案資料從發表文章中當檔案從你的檔案系統遺失的時候，並且刪除那些較久沒有附加到任何發表文章的檔案。如果你點選它，並且你可以下載或檢視檔案; 如果目前是沒有連結的，檔案就不會存在。';
$lang['Shadow_attachments_file_explain'] = '刪除全部的附加檔案那些在你的檔案系統而且是沒有指定到存在的發表文章。';
$lang['Shadow_attachments_row_explain'] = '刪除全部發表文章裡的附加檔案資料對於檔案那些不存在你的檔案系統。';
$lang['Empty_file_entry'] = 'Empty File Entry';

// Attachments -> Sync
$lang['Sync_thumbnail_resetted'] = '縮圖已重設給附加檔案: %s';
$lang['Attach_sync_finished'] = '附加檔案同步完成。';

// Extensions -> Extension Control
$lang['Manage_extensions'] = '管理副檔名';
$lang['Manage_extensions_explain'] = '在這裡你可以管理你的檔案副檔名。如果你想允許或不允許可上檔的副檔名，請使用副檔名群組管理。';
$lang['Explanation'] = '解釋';
$lang['Extension_group'] = '副檔名群組';
$lang['Invalid_extension'] = '無效副檔名';
$lang['Extension_exist'] = '副檔名 %s 已經存在'; // replace %s with the Extension
$lang['Unable_add_forbidden_extension'] = '副檔名 %s 是禁止上傳的，你沒有將它加入已允許的副檔名群組裡。';

// Extensions -> Extension Groups Management
$lang['Manage_extension_groups'] = '管理副檔名群組';
$lang['Manage_extension_groups_explain'] = '在這裡你可以加入，刪除和修改你的副檔名群組，你可以停用副檔名群組，指定特殊類別給它們，變更下載辦法而且你可以定義上傳圖示當做被顯示在附加檔案適用到群組的最前面時候。';
$lang['Special_category'] = '特殊類別';
$lang['Category_images'] = '圖片';
$lang['Category_stream_files'] = '串流檔案';
$lang['Category_swf_files'] = 'Flash 檔案';
$lang['Allowed'] = '允許的';
$lang['Allowed_forums'] = '已允許的版面';
$lang['Ext_group_permissions'] = '群組權限';
$lang['Download_mode'] = '下載模式';
$lang['Upload_icon'] = '上傳圖示';
$lang['Max_groups_filesize'] = '最大的檔案大小';
$lang['Extension_group_exist'] = '副檔名群組 %s 已經存在'; // replace %s with the group name
$lang['Collapse'] = '+';
$lang['Decollapse'] = '-';

// Extensions -> Special Categories
$lang['Manage_categories'] = '管理特殊類別';
$lang['Manage_categories_explain'] = '在這裡你可以組態特殊類別。你可以設定特殊參數和條件給特殊類別指定到副檔名群組。';
$lang['Settings_cat_images'] = '特殊類別設定: 圖片';
$lang['Settings_cat_streams'] = '特殊類別設定: 串流檔案';
$lang['Settings_cat_flash'] = '特殊類別設定: Flash 檔案';
$lang['Display_inlined'] = '線上顯示圖片';
$lang['Display_inlined_explain'] = '請選擇圖片的顯示方式:直接在發表文章中顯示圖片(選項:是)，或者將圖片顯示成一個連結(選項:否)?';
$lang['Max_image_size'] = '最大的圖片尺寸';
$lang['Max_image_size_explain'] = '在這裡你可以定義最大的允許圖片尺寸到附加的(寬度 x 高度,單位:像素)。<br />如果它是設定為 0x0，這個功能是被停用的。與某些圖片這個功能將不作用適合限制於 PHP。';
$lang['Image_link_size'] = '圖片連結尺寸';
$lang['Image_link_size_explain'] = '如果這個定義圖片的尺寸是達到的，圖片將被顯示成連結，當然是線上顯示，<br />如果線上顯示檢視是啟用的(寬度 x 高度,單位:像素)。<br />如果它是設定成 0x0，這個功能是會停用的。與某些圖片這個功能將不作用適合限制於 PHP。';
$lang['Assigned_group'] = '指定的群組';

$lang['Image_create_thumbnail'] = '建立縮圖';
$lang['Image_create_thumbnail_explain'] = '永遠使用建立縮圖。這個功能幾乎推翻在這個特殊類別全部的設定，除了最大圖片尺寸之外。使用這個功能將使縮圖被顯示於發表的文章中，使用者可以點選縮圖來開啟圖片。<br />請注意這功能需要安裝 Imagick，如果沒有安裝 Imagick 而且假如已啟用安全模式，則 PHP 的 GD-Extention 將被使用。如果圖片類型是 PHP 不支援的，這個功能將無法使用。';
$lang['Image_min_thumb_filesize'] = '最小的縮圖檔案大小';
$lang['Image_min_thumb_filesize_explain'] = '如果圖片小於這個定義的檔案大小，沒有縮圖會被建立，因為它已經夠小了。';
$lang['Image_imagick_path'] = 'Imagick 縮圖程式 (完整路徑)';
$lang['Image_imagick_path_explain'] = '輸入 Imagick 的縮圖轉換程式的路徑，一般是 /usr/bin/convert (在 windows 是: c:/imagemagick/convert.exe)。';
$lang['Image_search_imagick'] = '搜尋 Imagick';

$lang['Use_gd2'] = '使用 GD2 的 Extension';
$lang['Use_gd2_explain'] = 'PHP 是可以編譯與 GD1 或 GD2 的延伸模組(Extension)給圖片操作。要正確地建立縮圖而不用 imagemagick 這附加檔案模組使用兩個不同的方式，基本上你的選擇在這裡。如果你的縮圖是在不好的品質或 旋轉的，請試著變更這個設定。';
$lang['Attachment_version'] = '附加檔案模組版本 %s'; // %s is the version number

// Extensions -> Forbidden Extensions
$lang['Manage_forbidden_extensions'] = '管理禁止副檔名';
$lang['Manage_forbidden_extensions_explain'] = '在這裡你可以加入或刪除禁止的副檔名。這副檔名 php, php3 和 php4 是內定預設禁止的基於安全理由，你不可以刪除它們。';
$lang['Forbidden_extension_exist'] = '禁止的副檔名 %s 已經存在'; // replace %s with the extension
$lang['Extension_exist_forbidden'] = '副檔名 %s 是已定義在你已允許的副檔名，在你在這裡加入它之前請先刪除。';

// Extensions -> Extension Groups Control -> Group Permissions
$lang['Group_permissions_title'] = '副檔名群組權限 -> \'%s\''; // Replace %s with the Groups Name
$lang['Group_permissions_explain'] = '在這裡你能夠限制已選擇的副檔名群組給你選擇的版面(定義在允許的版面對話盒)。預設為允許副檔名群組給全部版面的使用者是可以附加檔案到(一般方式附加檔案模組是給初學者使用)。只要加入那些版面到你想使用的副檔名群組(副檔名必須在這個群組使用)並在那裡准許使用，預設為全部版面將不會出現當你加入版面到清單中。你可以在任何時候重新加入全部版面。如果你加入版面到你的討論區和權限是設定到全部版面是不會有任何改變。但是如果你有變更和限制存取到某些版面，你必須回到這裡檢查來加入你新建立的版面。它是容易執行這個是自動地，但是這個將強制你去編輯一串的檔案，因此我會選擇這方法它是目前的情形。請謹記在心，那些全部你的版面將會在此列出。';
$lang['Note_admin_empty_group_permissions'] = '注意:<br />使用在下面列表的版面你的使用者通常是被允許附加檔案，但是自從沒有副檔名群組在那裡被允許去附加的，你的使用者是無法附加任何檔案的。如果他們曾經嘗試附加檔案，他們將會接收到錯誤訊息。可能你想要設定權限\'可附加的檔案\' 來管理在這個版面的附加檔案。<br /><br />';
$lang['Add_forums'] = '加入版面';
$lang['Add_selected'] = '加入已選擇的';
$lang['Perm_all_forums'] = '全部版面';

// Attachments -> Quota Limits
$lang['Manage_quotas'] = '管理附加檔案配額限制'; 
$lang['Manage_quotas_explain'] = '在這裡你可以 加入/刪除/變更 配額限制。你可以稍後指定這些配額限制給會員和群組。要指定一個配額限制給會員，你必須到 會員管理 -> 管理選項，選擇會員和你要在下面看見的選項。要指定配額限制到一個群組，前往群組管理 -> 管理選項，選擇群組然後編輯它，並且你將看見組態設定。如果你想看見，當會員和群組被指定到指定的配額限制，點選在配額描述左邊的 \'檢視\'。'; 
$lang['Assigned_users'] = '指定的會員'; 
$lang['Assigned_groups'] = '指定的群組'; 
$lang['Quota_limit_exist'] = '配額限制 %s 已經存在。'; 

// Attachments -> Control Panel
$lang['Control_panel_title'] = '檔案附加控制台';
$lang['Control_panel_explain'] = '在這裡你可以檢視和管理全部的附加檔案基本設定在使用者，附加檔案，檢視其它...';
$lang['File_comment_cp'] = '檔案註解';

// Control Panel -> Search
$lang['Search_wildcard_explain'] = '使用 * 當做萬用字元做為符合的部分';
$lang['Size_smaller_than'] = '附加檔案大小小於(位元組)';
$lang['Size_greater_than'] = '附加檔案大小大於(位元組)';
$lang['Count_smaller_than'] = '下載次數是小於';
$lang['Count_greater_than'] = '下載次數是大於';
$lang['More_days_old'] = '比這些天數更舊的';
$lang['No_attach_search_match'] = '沒有附加檔案符合你的搜尋標準';

// Control Panel -> Statistics
$lang['Number_of_attachments'] = '附加檔案的數量';
$lang['Total_filesize'] = '總計檔案大小';
$lang['Number_posts_attach'] = '發表文章和附加檔案的數量';
$lang['Number_topics_attach'] = '主題與附加檔案的數量';
$lang['Number_users_attach'] = '個別的使用者已發表的附加檔案';
$lang['Number_pms_attach'] = '總計附加檔案的數量在私人訊息';

// Control Panel -> Attachments
$lang['Statistics_for_user'] = '%s 的附加檔案統計'; // replace %s with username
$lang['Size_in_kb'] = '大小 (KB)';
$lang['Downloads'] = '下載次數';
$lang['Post_time'] = '發表時間';
$lang['Posted_in_topic'] = '發表於主題';
$lang['Submit_changes'] = '送出變更';

// Sort Types
$lang['Sort_Attachments'] = '附加檔案';
$lang['Sort_Size'] = '大小';
$lang['Sort_Filename'] = '檔名';
$lang['Sort_Comment'] = '註解';
$lang['Sort_Extension'] = '副檔名';
$lang['Sort_Downloads'] = '下載次數';
$lang['Sort_Posttime'] = '發表時間';
$lang['Sort_Posts'] = '發表';

// View Types
$lang['View_Statistic'] = '統計';
$lang['View_Search'] = '搜尋';
$lang['View_Username'] = '使用者名稱';
$lang['View_Attachments'] = '附加檔案';

// Successfully updated
$lang['Attach_config_updated'] = '附加檔案設定更新完畢';//Attachment Configuration updated successfully
$lang['Click_return_attach_config'] = '請點 %s這裡%s 回到附加檔案設定';
$lang['Test_settings_successful'] = '設定測試完成，設定看起來是好的。';

// Some basic definitions
$lang['Attachments'] = '附加檔案';
$lang['Attachment'] = '附加檔案';
$lang['Extensions'] = '副檔名';
$lang['Extension'] = '副檔名';

// Auth pages
$lang['Auth_attach'] = '發表檔案';
$lang['Auth_download'] = '下載檔案';

?>
