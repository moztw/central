<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html dir="{S_CONTENT_DIRECTION}">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Style-Type" content="text/css">
<link rel="alternate" type="application/xml" title="RSS" href="rdf.php">
{META}
{NAV_LINKS}
<title>{SITENAME}: {PAGE_TITLE}</title>
<link href="templates/LiteVision/LiteVision.css" rel="stylesheet" type="text/css">
<link href="templates/LiteVision/moztwheader.css" rel="stylesheet" type="text/css">
<!-- BEGIN switch_enable_pm_popup -->
<script language="JavaScript" type="text/javascript"><!--
	if ( 0 ) { window.open('privmsg.php?mode=newpm&amp;sid=be9b562f4955c3d0cd8b4319270867d5', '_phpbbprivmsg', 'HEIGHT=225,resizable=yes,WIDTH=400'); }
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
  <input type="hidden" name="return_chars" value="200"><input type="hidden" name="search_terms" value="any">
<a href="{U_SEARCH}" style='font-size:80%;color: #fff;'>進階{L_SEARCH}</a>
</div>
</form>
</div>


<!-- <a href="{U_GROUP_CP}" class="mainmenu">{L_USERGROUPS}</a> -->

<!-- BEGIN switch_user_logged_out -->
<big><b>您尚未登入</b></big> (Your are not logged in.)
<!-- END switch_user_logged_out -->
<span style=" float: right; padding: 0;">
<!-- BEGIN switch_user_logged_in -->
<img src='templates/icons/icon_mini_search.gif'>
<a href="{U_SEARCH_NEW}" class="gensmall">{L_SEARCH_NEW}</a> |
<a href="{U_PRIVATEMSGS}" class="mainmenu">{PRIVATE_MESSAGE_INFO}</a> |
<img src='templates/icons/icon_mini_profile.gif'>
<a href="{U_PROFILE}" class="mainmenu">{L_PROFILE}</a> | 
<!-- END switch_user_logged_in -->

<img src='templates/icons/icon_mini_login.gif'><a href="{U_LOGIN_LOGOUT}" class="mainmenu">{L_LOGIN_LOGOUT}</a>
<!-- BEGIN switch_user_logged_out -->
| <a href="{U_REGISTER}" class="mainmenu">{L_REGISTER}</a>&nbsp;
<!-- END switch_user_logged_out -->
<!-- <a style='float: right;' href="{U_FAQ}" class="mainmenu" title="{L_FAQ}">
<img src='templates/icons/icon_mini_faq.gif' alt='FAQ'>
</a> -->
</span>
<!-- BEGIN switch_user_logged_out -->
<br />
  <!-- 全站公告區 UTF-8 -->
<div align="left" style="width: 550px; padding: 5px 15px; background-color: #EEEE22; border:2px solid #DDDD11;" class="gen">您好，<a href="http://forum.moztw.org/viewtopic.php?t=5571">部分討論區將僅開放會員張貼文章</a>，建議您<a href="{U_REGISTER}">註冊為會員</a>。<br/>（註冊免費，未註冊依然可閱讀所有文章）</div>
<!-- END switch_user_logged_out -->

<br />
