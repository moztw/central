<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html dir="{S_CONTENT_DIRECTION}">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Style-Type" content="text/css">
<link rel="alternate" type="application/rss+xml" title="RSS" href="rss.php">
{META}
{NAV_LINKS}
<title>{SITENAME}: {PAGE_TITLE}</title>
<link href="templates/LiteVision/LiteVision.css" rel="stylesheet" type="text/css">
<link href="templates/LiteVision/moztwheader.css" rel="stylesheet" type="text/css">
<!-- BEGIN switch_enable_pm_popup -->
<script language="JavaScript" type="text/javascript"><!--
	if ( 0 ) { window.open('privmsg.php?mode=newpm', '_phpbbprivmsg', 'HEIGHT=225,resizable=yes,WIDTH=400'); }
function submitSearch(formObj){
	if (formObj.searchtarget.value=="moztw"){
		formObj.action = "http://www.google.com/custom";
		formObj.method = "GET";
		formObj.search_keywords.setAttribute("name", "q");
	}
}
//-->
</script>
<!-- END switch_enable_pm_popup -->
</head>
<body bgcolor="{T_BODY_BGCOLOR}" text="{T_BODY_TEXT}" link="{T_BODY_LINK}" vlink="{T_BODY_VLINK}"  class="secondLevel sectionForum">
<a name="top"></a>
<div id="header">
<h1><a href="http://moztw.org/" title="Return to home page, moztw.org" accesskey="1">Mozilla Taiwan (MozTW)</a></h1>
 <ul>
  <li id="menu_aboutus"><a href="http://moztw.org/about" title="About this website">關於本站</a></li>
  <li id="menu_links"><a href="http://moztw.org/link" title="與 Mozilla 相關的連結">網路資源</a></li>
  <li id="menu_wiki"><a href="http://wiki.moztw.org/" title="Mozilla Taiwan 共筆系統">Wiki</a></li>
  <li id="menu_forum"><a href="{U_INDEX}" title="Mozilla 華語社群討論區">討論區</a></li>
  <li id="menu_docs"><a href="http://moztw.org/docs" title="各項使用說明、介紹與文件資料">文件</a></li>
  <li id="menu_products"><a href="http://moztw.org/dl" title="Moztw.org 提供的中文化軟體一覽">下載</a></li>
 </ul>
<form name="searchform" method="POST" action="http://forum.moztw.org/search.php?mode=results" onsubmit="submitSearch(this)">
 <div><label for="q" title="Search moztw.org">搜尋</label><select name="searchtarget"><option value="forum">討論區</option><option value="moztw">moztw.org</option></select><input type="text" id="key" name="search_keywords" size=12 maxlength=60><input type="submit" value="{L_SEARCH}">
  <input type="hidden" name="cof" value="LW:375;LH:69;L:http://forum.moztw.org/images/moztw_logo.jpg;GIMP:#cc0000;T:black;ALC:#0000ff;GFNT:grey;LC:#990000;BGC:white;AH:center;VLC:purple;GL:0;GALT:#666633;AWFID:9262c37cefe23a86;">
  <input type="hidden" name="domains" value="moztw.org"><input type="hidden" name="sitesearch" value="moztw.org">
  <input name="inlang" value="zh-TW" type="hidden"><input name="ie" value="UTF-8" type="hidden"><input name="oe" value="UTF-8" type="hidden">
  <input type="hidden" name="sort_dir" value="DESC"><input type="hidden" name="show_results" value="topics">
  <input type="hidden" name="return_chars" value="200"><input type="hidden" name="search_terms" value="all">
<a href="{U_SEARCH}" style='font-size:80%;color: #fff;'>進階{L_SEARCH}</a>
</div>
</form>
</div>


<!-- <a href="{U_GROUP_CP}" class="mainmenu">{L_USERGROUPS}</a> -->
<div style=" float: right; padding: 0; text-align:center;">
<!-- BEGIN switch_user_logged_in -->
<img src='templates/icons/icon_mini_search.gif'>
<a href="{U_SEARCH_NEW}" class="gensmall">{L_SEARCH_NEW}</a> |
<a href="{U_PRIVATEMSGS}" class="mainmenu">{PRIVATE_MESSAGE_INFO}</a> |
<img src='templates/icons/icon_mini_profile.gif'>
<a href="{U_PROFILE}" class="mainmenu">{L_PROFILE}</a>←FON優惠碼在此 | 
<img src='templates/icons/icon_mini_login.gif'> <a href="{U_LOGIN_LOGOUT}" class="mainmenu">{L_LOGIN_LOGOUT}</a>
<!-- END switch_user_logged_in -->


<!-- BEGIN switch_user_logged_out -->
<!--
| <a href="https://forum.moztw.org/login.php" class="mainmenu">安全登入(SSL)</a>
-->

<img src='templates/icons/icon_mini_login.gif'> <a href="{U_LOGIN_LOGOUT}" class="mainmenu">{L_LOGIN_LOGOUT}享福利，免費送 FON 路由器</a>
| <a href="{U_REGISTER}" class="mainmenu">{L_REGISTER}</a>

<br/>
<a href="http://forum.moztw.org/viewtopic.php?t=5571">部分看板</a>僅會員能貼文 (未註冊仍可閱讀內容)
<!-- END switch_user_logged_out -->
<!-- <a style='float: right;' href="{U_FAQ}" class="mainmenu" title="{L_FAQ}">
<img src='templates/icons/icon_mini_faq.gif' alt='FAQ'>
</a> -->
</div>
<br style="clear: both;"/>
