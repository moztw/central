<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html dir="{S_CONTENT_DIRECTION}">
<head>
<meta http-equiv="Content-Type" content="text/html; charset={S_CONTENT_ENCODING}">
<meta http-equiv="Content-Style-Type" content="text/css">
<link rel="alternate" type="application/xml" title="RSS" href="rdf.php">

{META}
{NAV_LINKS}
<title>{SITENAME} :: {PAGE_TITLE}</title>
<link href="templates/LiteVision/LiteVision.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
@import url("templates/LiteVision/formIE.css"); 
-->
</style>
<!-- BEGIN switch_enable_pm_popup -->
<script language="Javascript" type="text/javascript">
<!--
	if ( {PRIVATE_MESSAGE_NEW_FLAG} )
	{
		window.open('{U_PRIVATEMSGS_POPUP}', '_phpbbprivmsg', 'HEIGHT=225,resizable=yes,WIDTH=400');;
	}
//-->
</script>
<!-- END switch_enable_pm_popup -->
</head>
<body bgcolor="{T_BODY_BGCOLOR}" text="{T_BODY_TEXT}" link="{T_BODY_LINK}" vlink="{T_BODY_VLINK}">

<a name="top"></a>

<table width="98%"  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="26" colspan="3" valign="bottom" class="stil01"><table width="100%" height="21"  border="0" cellpadding="0" cellspacing="0" class="border-maro-st-dr">
      <tr>
        <td>
<a style='float: right;' href="rdf.php" class="mainmenu"><img style='padding: 5px; vertical-align: bottom;' src='templates/icons/rss.png' alt='RSS (RDF/XML)' title='RSS'/></a>
<a style='float: left;' href="http://moztw.org/" class="mainmenu"><img style='padding: 5px;' src='templates/icons/atmoztw.png' alt='moztw.org' title='moztw.org'/></a>
<div align="center">
<span class="gen"><strong>{SITENAME}</strong></span>
</div>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td width="1%" bgcolor="#D0E4FB" class="border-bleu-st-dr">&nbsp;</td>
    <td width="96%"><table width="100%"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="20%"><div align="center"><a href="{U_INDEX}"><img src="templates/LiteVision/images/moztw.jpg" border="0"></a></div></td>
        <td width="80%"><table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="33%"><table width="98%"  border="0" align="center" cellpadding="0" cellspacing="0" class="border-maro" onmouseover="this.style.backgroundColor='#F8F9FC';" onmouseout="this.style.backgroundColor='#FFFFFF';">
              <tr>
                <td><div align="center" style='line-height: 120%;'>
<form method="POST" action="search.php?mode=results" class="gensmall" style="margin:.2em; padding: 0;">
<input type="text" name="search_keywords" value="請輸入關鍵字" style="color: #DDDDDD; width: 7em" onfocus="if (this.value=='請輸入關鍵字') {this.value=''; this.style.color='#000000'}"> <input type="hidden" name="search_terms" value="any"><input type="hidden" name="search_author" value=""><input type="hidden" name="search_forum" value="-1"><input type="hidden" name="search_time" value="0"><input type="hidden" name="search_fields" value="all"><input type="hidden" name="search_cat" value="-1"><input type="hidden" name="sort_by" value="0"><input type="hidden" name="sort_dir" value="DESC"><input type="hidden" name="show_results" value="topics"><input type="hidden" name="return_chars" value="200"><input type="submit" value="搜尋"></form>
<img src='templates/icons/icon_mini_search.gif'> <a href="{U_SEARCH}" style='font-weight: bold;' class="mainmenu">進階{L_SEARCH}</a>
<!-- <a href="{U_GROUP_CP}" class="mainmenu">{L_USERGROUPS}</a> -->
</div></td>
              </tr>
            </table></td>
            <td width="33%"><table width="98%"  border="0" align="center" cellpadding="0" cellspacing="0" class="border-maro" onmouseover="this.style.backgroundColor='#F8F9FC';" onmouseout="this.style.backgroundColor='#FFFFFF';">
              <tr>
	      <td><div align="center" style='line-height: 120%;'>
	<!-- BEGIN switch_user_logged_out -->
<a href="rdf.php" class="mainmenu"><img style='padding: 5px;' src='templates/icons/rss.png' alt='RSS (RDF/XML)' title='RSS'/></a>
	<!-- END switch_user_logged_out -->
	<!-- BEGIN switch_user_logged_in -->
<img src='templates/icons/icon_mini_profile.gif'>
<a href="{U_PROFILE}" class="mainmenu">{L_PROFILE}</a><br>
<a href="{U_PRIVATEMSGS}" class="mainmenu">{PRIVATE_MESSAGE_INFO}</a>
	<!-- END switch_user_logged_in -->
</div></td>
              </tr>
            </table></td>
            <td width="33%"><table width="98%"  border="0" align="center" cellpadding="0" cellspacing="0" class="border-maro" onmouseover="this.style.backgroundColor='#F8F9FC';" onmouseout="this.style.backgroundColor='#FFFFFF';">
              <tr>
                <td style='text-align: center;'>
	<div align="center" style='line-height: 120%;'>
	<img src='templates/icons/icon_mini_login.gif'><a href="{U_LOGIN_LOGOUT}" class="mainmenu">{L_LOGIN_LOGOUT}</a><br>
	<!-- BEGIN switch_user_logged_out -->
	<a href="{U_REGISTER}" class="mainmenu">{L_REGISTER}</a>&nbsp;
	<!-- END switch_user_logged_out -->
	<!-- BEGIN switch_user_logged_in -->
<img src='templates/icons/icon_mini_search.gif'>
<a href="{U_SEARCH_NEW}" class="gensmall">{L_SEARCH_NEW}</a><br />
	<!-- END switch_user_logged_in -->
				</div>
		</td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
    <td width="1%" bgcolor="#D0E4FB" class="border-bleu-st-dr">&nbsp;</td>
  </tr>
  <tr valign="top">
    <td height="25" colspan="3" class="stil08"><table width="100%" height="18"  border="0" cellpadding="0" cellspacing="0" class="border-maro-st-dr">
      <tr>
        <td valign="bottom"><div align="center">
<a style='float: right;' href="{U_FAQ}" class="mainmenu" title="{L_FAQ}">
<img src='templates/icons/icon_mini_faq.gif' alt='FAQ'>
</a>
<span class="gen">{SITE_DESCRIPTION}</span>
</div></td>
      </tr>
    </table></td>
  </tr>
  <!-- BEGIN switch_user_logged_out -->
  <!-- 全站公告區 UTF-8 -->
  <tr><td align="center" colspan="3" class="gensmall">您好，<a href="http://forum.moztw.org/viewtopic.php?t=5571">一月十八號起<strong>部分</strong>討論區將僅開放會員張貼文章</a>，建議您<a href="{U_REGISTER}">註冊為會員</a>。（註冊免費，未註冊依然可閱讀所有文章）</td></tr>
  <!-- END switch_user_logged_out -->
</table>
<br />
