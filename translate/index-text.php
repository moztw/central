<?php

header('Content-Type: text/plain; charset=utf-8');

?>

歡迎光臨翻譯站，此站（第三代）僅供團隊內部使用。

請前往 http://translate.moztw.org/narro/
 - 若您是 l10n 團隊的一員或是已接受邀請
 - 想要看看尚未 push 到 Mozilla 的翻譯進度

請前往 https://l10n-stage-sj.mozilla.org/dashboard/?locale=zh-TW
 - 若您想要知道目前各程式在 Mozilla repository 的狀態

要瀏覽檔案請洽 http://mxr.mozilla.org/

-----------

給 l10n owners：

 在管理頁面可以自由更新最新的英文版 （按 Import）
 和匯出中文檔案 (按 Export)。

 英文版的來源是 /home/moztw/translate/var/repo，
 softlink 到各 project 的 /home/moztw/translate/var/narro/data/import/*/en-US 目錄，
 有 crontab 自動同步。
 可以在 http://translate.moztw.org/update-log.txt 看到紀錄。

 中文檔案 Export 之後可以下載 tar.gz，
 或是登入進機器裡 cp /home/moztw/translate/var/narro/data/import/*/zh-TW 的資料。
 
 ＊請注意，若未來 Mozilla 為新版本開啟了新的 repository，
   （像是 http://hg.mozilla.org/releases/mozilla-1.9.1/）
   您有必要自行 checkout 新的 repository 並在 Narro 建立
   相對應 Project、import 目錄與 en-US softlink。
   不要把該 push 到不同 l10n repository 混在一起。
  
