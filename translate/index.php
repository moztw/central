<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>MozTW 翻譯站</title>
	<base target="_blank" />
</head>
<body>
	<h1>MozTW 翻譯站</h1>
	<blockquote>
		<p><strong>English: </strong>This is where MozTW hosts its "bridging" services to localizing Mozilla products. Primary, there is a <a href="https://code.google.com/p/narro/">Narro</a> <a href="./narro/">installation</a> which separates files by products (with a project marked "shared" contains code for all Mozilla app). Some other scripts was also written to import and correct translations between repositories and Narro database. <strong>Any changes will and should always inspected by human before commit to the repository.</strong></p>
	</blockquote>
	<p>歡迎光臨翻譯站，此站（第三代）僅供在地化團隊內部使用。這裡的翻譯建議並沒有被監控，想要回報錯誤請到討論區的<a href="http://forum.moztw.org/viewforum.php?f=4">在地化板回報</a>。有意長期貢獻請或接手翻譯專案的話請<a href="http://moztw.org/contribute/">加入我們</a>，到 mailing list 報到！</p>
	<p>請前往 <a href="./narro/">Narro</a></p>
	<ul>
		<li>若您是 l10n 團隊的一員或是已接受邀請願意參與翻譯</li>
		<li>想要看看尚未 push 到 Mozilla 的翻譯進度</li>
	</ul>
	<p>請前往 <a href="http://translate.moztw.org/l10n-base/">L10n Base</a></p>
	<ul>
		<li>若您想要取得本站的 Narro 所匯出的資料（By file），這些資料可能已經或尚未送出至 Mozilla repository</li>
	</ul>
	<p>請前往 <a href="https://l10n.mozilla.org/teams/zh-TW">L10n dashboard</a><!-- 或 <a href="https://l10n.mozilla.org/dashboard/?locale=zh-TW">old l10n dashboard</a>--></p>
	<ul>
		<li>若您想要知道目前各程式的正體中文語系在 Mozilla repository 當中的狀態</li>
	</ul>
	<p>請前往 <a href="https://l10n.mozilla.org/webby/">Webby</a></p>
	<ul>
		<li>若您想要知道目前有哪些語系已經加入某個網頁專案，以及各專案的狀態</li>
		<li>各網頁專案的 repo/stage 等基礎資訊</li>
	</ul>
	<p>請前往 <a href="https://localize.mozilla.org/zh_TW/">Mozilla Verbatim</a></p>
	<ul>
		<li>若您想要知道目前已經加入的網頁專案（配合 Webby）</li>
		<li>送出各維護中專案的字串翻譯建議</li>
	</ul>
	<p>第三方工具</p>
	<ul>
		<li><a href="http://mxr.mozilla.org/">mxr.mozilla.org</a> - 瀏覽 Mozilla 程式碼（Mozilla）</li>
		<li><a href="http://transvision.mozfr.org/">Transvision glossary</a> - 詞彙位置搜尋（法國 L10n 團隊）</li>
                <li>English CopyNPaste Translations for <a href="http://indianoss.sourceforge.net/mozilla/CopyNPasteFinder.php?q=zh-TW">Firefox</a>、<a href="http://indianoss.sourceforge.net/mozilla/CopyNPasteFinder_Aurora.php?q=zh-TW">Firefox Aurora</a> - 中英相同詞彙列表（印度團隊）</li>
	</ul>
	<p>所有非 <a href="http://blog.mozilla.com/blog/2011/04/13/new-channels-for-firefox-rapid-releases/">Rapid Release Cycle</a> 下的舊版本翻譯已不再維護並自翻譯站移除，若有需要請直接至 Mozilla 取回最終版本翻譯，或至 <a href="oldrepo/">此處</a> 取用備份（以專案與版本區分資料夾）。</p>
	<hr />
	<h2>著作權</h2>
	<p>此網站上的所有翻譯皆為 <a href="http://www.mozilla.org/MPL/2.0/">MPL 2.0</a> 授權，與 Mozilla 所有程式碼的授權相同，供任何人在此授權條件下使用。<strong>如不同意該授權請勿在此站提供翻譯建議。</strong></p>
	<blockquote>
	<p><strong>English:</strong> Anything on this site is licensed under <a href="http://www.mozilla.org/MPL/2.0/">MPL 2.0</a>, in line with Mozilla policy. Anyone is welcome to make use of these work under such condition. <strong>Do not contribute if you don't agree with the terms.</strong></p>
	</blockquote>
	<hr />
	<h2>翻譯流程 (給 l10n owners)</h2>
	<ol>
		<li>到 Export 頁面匯出最後的翻譯結果</li>
		<li>到 Import 頁面匯入英文版更新的字串（經由 <a href="./update-log.txt">每日自動從 mozilla 更新的 repo</a>）</li>
		<li><strong>輸入翻譯，Validate 確定的譯文</strong></li>
		<li>到 Export 頁面匯出最後的翻譯結果</li>
		<li>更新你的工作目錄：<code>hg pull -u; hg update -r default</code> 或是 <code>svn update</code></li>
		<li>下載 tar.gz、ssh 進來主機、或是用 scp 複製 <code>/home/moztw/translate/var/narro/data/import/*/zh-TW</code>的檔案，蓋掉你的工作目錄的舊檔案
			<ul>
				<li><code>*</code> = Manage 頁面有寫的那個 project ID，網址上也有。</li>
			</ul>
		</li>
		<li>檢查所有修改是否正確：<code>hg diff</code> 或 <code>svn diff</code>，順便跑一下 compare-locales
			<ul>
				<li>刪掉 dashboard 說多餘的檔案</li>
				<li>compare-locales: http://translate.moztw.org/compare-locales/?app=<code>{browser|mail|mobile|sync|calendar|suite|toolkit}</code>&amp;branch=<code>{central|aurora|beta}</code></li>
			</ul>
		</li>
		<li>確定沒有錯誤就 commit：<code>hg ci</code> 或 <code>svn ci</code>
			<ul>
				<li>hg 還要另外 push 才會真的傳上去：<code>hg push</code></li>
			</ul>
		</li>
		<li>進行測試，如果認為可以用這個版本釋出了記得要在時限內 sign-off</li>
	</ol>
	<h2>準備工作目錄</h2>
	<p>有工作目錄才能繼續 commit 東西加進去往上疊。要注意哪些程式碼該 commit 到哪去。</p>
	<ol>
		<li><code>hg clone http://hg.mozilla.org/releases/l10n-mozilla-1.9.2/zh-TW <strong>l10n-mozilla-1.9.2</strong></code></li>
	</ol>
	<p>Windows 上面的作法請自行摸索 ...</p>
	<h2>開新 Project 流程 (給 Narro maintainer)</h2>
	<p>需要做這件事情的場合是如果 Mozilla 把 codebase split 出新的版本 (像是 <code>mozilla-central</code> →<code>releases/mozilla-1.9.2</code>，同時也開了對應的 l10n repository (像是 <code>releases/l10n-mozilla-1.9.2/zh-TW</code>)，需要在 Narro 開新的 Project 來維護的情況。<br>
	在進入 Rapid Release Cycle 後 codebase 僅分為 <code>mozilla-central</code>、<code>mozilla-aurora</code>、<code>mozilla-beta</code>，所以這個情況可能不大容易再遇到...。</p>
	<ol>
		<li><code>cd /home/moztw/translate/var/repo;\<br>
		sudo -u www-data hg clone http://hg.mozilla.org/releases/mozilla-1.9.2 <strong>mozilla-1.9.2</strong></code>
			<ul>
				<li>repo 目錄底下的目錄都會被 crontab 自動更新</li>
			</ul>
		</li>
		<li>Narro: <a href="narro/project_edit.php?l=zh-TW&amp;p=0">Add Project</a></li>
		<li><code>sudo -u www-data mkdir -p /home/moztw/translate/var/narro/data/import/*/en-US</code></li>
		<li><code>cd /home/moztw/translate/var/narro/data/import/*/en-US</code></li>
		<li>一個一個建 symbolic link，例如
			<ul>
				<li><code>sudo -u www-data ln -s ../../../../../repo/<strong>mozilla-1.9.2</strong>/<strong>browser</strong>/locales/en-US <strong>browser</strong></code></li>
				<li><code>sudo -u www-data mkdir -p other-licenses/branding;\<br>
				sudo -u www-data ln -s <strong>../../</strong>../../../../../repo/<strong>mozilla-1.9.2</strong>/<strong>other-licenses/branding/firefox</strong>/locales/en-US <strong>other-licenses/branding/firefox</strong></code></li>
			</ul>
		</li>
		<li>複製半成品翻譯到<code>/home/moztw/translate/var/narro/data/import/*/zh-TW</code></li>
		<li>到 Import 頁面匯入原文與譯文字串</li>
		<li>回到翻譯流程 #3</li>
	</ol>
</body>
</html>
