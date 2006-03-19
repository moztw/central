<span class="nav">您現在位於: <a href="http://moztw.org/">MozTW</a> &raquo; <a href="{U_INDEX}">討論區</a><br /></span>

<!-- BEGIN switch_user_logged_out -->
<form name='loginbox' method="post" action="{S_LOGIN_ACTION}">
<span class="gensmall">{L_USERNAME}: 
 <input class="form3" type="text" name="username" size="10" />
&nbsp;&nbsp;&nbsp;{L_PASSWORD}:
  <input class="form3" type="password" name="password" size="10" maxlength="32" />
&nbsp;&nbsp; (<input id='lb_autologin' type="checkbox" name="autologin" checked />
<label for='lb_autologin'>{L_AUTO_LOGIN}</label>&nbsp;
<!--
<input id='lb_ssl' type="checkbox" name="ssl" onChange='if (document["loginbox"]["lb_ssl"].checked) document["loginbox"].action = "https://forum.moztw.org/login.php"; else document["loginbox"].action = "http//forum.moztw.org/login.php"; '/>
<label for='lb_ssl'>安全連線(SSL)</label>
-->
)&nbsp;

  <input type="submit" class="form4" name="login" value="{L_LOGIN}" />
</div>
</form>
<!-- END switch_user_logged_out -->

<!-- BEGIN switch_user_logged_in -->
<br />
<!-- END switch_user_logged_in -->
<table width="98%"  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top">
  <td valign="top" colspan="6" style="background: #a4cbf7; margin: 0;">
  	<a class="faq" href="http://wiki.moztw.org/redirect_faq.php?f={FORUM_ID}">請按我閱讀<span style="color: red;">本區 FAQ</span>。發問前請先詳閱，內有常見問題的解決方法。  </a>
  </td>
<!-- BEGIN catrow -->
<table width="100%"  border="0" cellpadding="0" cellspacing="0" class="border-bleu-jos">
  <tr>
    <td width="" height="26" colspan="2" valign="bottom" class="stil01"><table width="100%"  border="0" cellpadding="0" cellspacing="0" height="21" class="border-maro-dr">
      <tr>
        <td><img src="templates/LiteVision/images/05.gif" width="49" height="21" style="display: block; "></td>
        <td width="90%"><span class="genmed"><strong><span class="cattitle"><a href="{catrow.U_VIEWCAT}" class="cattitle">{catrow.CAT_DESC}</a></span></strong></span></td>
      </tr>
    </table></td>
    <td height="26" colspan="2" valign="bottom" class="stil02"><table width="100%" height="21"  border="0" cellpadding="0" cellspacing="0" class="border-maro-dr">
      <tr>
        <td width="18%" valign="top"><div align="right"><span class="genmed">&nbsp;{L_TOPICS}</span>&nbsp;</div></td>
      </tr>
    </table></td>
    <td height="26" colspan="2" valign="bottom" class="stil03"><table width="100%" height="21"  border="0" cellpadding="0" cellspacing="0" class="border-maro-dr">
      <tr>
        <td width="18%" valign="top"><div align="left">&nbsp;<span class="genmed">{L_POSTS}</span></div></td>
      </tr>
    </table></td>
    <td height="26" colspan="2" valign="bottom" class="stil04"><table width="100%" height="21"  border="0" cellpadding="0" cellspacing="0" class="border-maro-dr">
      <tr>
        <td width="18%" valign="middle"><div align="center"><span class="genmed">{L_LASTPOST}</span></div></td>
      </tr>
    </table></td>
  </tr>
    <!-- BEGIN forumrow -->
  <tr>
    <td width="1%" bgcolor="#D0E4FB" class="border-bleu-st-dr">&nbsp;</td>
    <td width="60%" bgcolor="#EAF1FC" class="border-bleu-dr"><table width="98%"  border="0" align="center" cellpadding="0" cellspacing="2">
      <tr>
        <td width="6%" valign="middle"><div align="center"><img src="{catrow.forumrow.FORUM_FOLDER_IMG}" alt="{catrow.forumrow.L_FORUM_FOLDER_ALT}" title="{catrow.forumrow.L_FORUM_FOLDER_ALT}" /></div></td>
        <td width="94%"><a href="{catrow.forumrow.U_VIEWFORUM}" class="forumlink">{catrow.forumrow.FORUM_NAME}</a><br />
	   <span class="genmed">{catrow.forumrow.FORUM_DESC}</span><hr style="height:1px;"></td>
      </tr>
    </table>      </td>
    <td width="1%">&nbsp;</td>
    <td width="7%" valign="top" bgcolor="#EEEEEE" class="border-maro-st-dr"><div align="right"><span class="gensmall">{catrow.forumrow.TOPICS}</span>&nbsp;</div></td>
    <td width="7%" valign="top" bgcolor="#D9E7F9" class="border-maro-dr"><div align="left">&nbsp;<span class="gensmall">{catrow.forumrow.POSTS}</span></div></td>
    <td width="1%">&nbsp;</td>
    <td width="22%" valign="top" bgcolor="#EAF1FC" class="border-bleu-st"><div align="center"><span class="gensmall">{catrow.forumrow.LAST_POST}</span></div></td>
    <td width="1%" bgcolor="#D0E4FB" class="border-bleu-st-dr">&nbsp;</td>
  </tr>
  <!-- END forumrow -->
</table>
<br />
  <!-- END catrow -->	
	
	</td>
  </tr>
</table>

<table width="98%"  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>
	
<table width="100%"  border="0" cellpadding="0" cellspacing="0" class="border-bleu-jos">
  <tr>
    <td height="26" colspan="7" valign="bottom" class="stil01"><table width="100%" height="21"  border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="18%" valign="bottom"><table width="100%"  border="0" cellpadding="0" cellspacing="0" class="border-maro-dr">
            <tr>
              <td width="5%"><table height="21"  border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td><img src="templates/LiteVision/images/05.gif" width="49" height="21"></td>
                  </tr>
              </table></td>
              <td width="95%"><span class="genmed"><strong>
<!-- BEGIN switch_user_logged_in -->
<span class="cattitle"><a href="{U_VIEWONLINE}" class="cattitle">{L_WHO_IS_ONLINE}</a></span>
<!-- END switch_user_logged_in -->
<!-- BEGIN switch_user_logged_out -->
<span class="cattitle">{L_WHO_IS_ONLINE}</span>
<!-- END switch_user_logged_out -->
</strong></span></td>
            </tr>
          </table></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td width="1%" bgcolor="#D0E4FB" class="border-bleu-st-dr">&nbsp;</td>
    <td width="62%" bgcolor="#EAF1FC" class="border-bleu-dr"><table width="98%"  border="0" align="center" cellpadding="0" cellspacing="3">
      <tr>
        <td width="10%" valign="middle"><div align="center"><img src="templates/LiteVision/images/whosonline.gif" alt="{L_WHO_IS_ONLINE}" /></div></td>
        <td width="88%" class="gensmall">
{TOTAL_POSTS}, 
{TOTAL_USERS}<br />
{TOTAL_USERS_ONLINE} &nbsp;
<!--
[ {L_WHOSONLINE_ADMIN} ] &nbsp; [ {L_WHOSONLINE_MOD} ], 
-->
<!-- BEGIN switch_user_logged_in -->
<a href="{U_MEMBERLIST}" class="mainmenu"> [ {L_MEMBERLIST} ] </a><br/>
<!-- END switch_user_logged_in -->
      </tr>
    </table></td>
    <td colspan="4" bgcolor="#EAF1FC">
<table width="90%"  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="30%"><div align="center"><img src="templates/LiteVision/images/folder_new_big.gif" alt="{L_NEW_POSTS}"/><br><span class="gensmall">{L_NEW_POSTS}</span></div></td>
    <td width="30%"><div align="center"><img src="templates/LiteVision/images/folder_big.gif" alt="{L_NO_NEW_POSTS}" /><br><span class="gensmall">{L_NO_NEW_POSTS}</span></div></td>
    <td width="30%"><div align="center"><img src="templates/LiteVision/images/folder_locked_big.gif" alt="{L_FORUM_LOCKED}" /><br><span class="gensmall">{L_FORUM_LOCKED}</span></div></td>
  </tr>
</table>
	</td>
    <td width="1%" bgcolor="#D0E4FB" class="border-bleu-st-dr">&nbsp;</td>
  </tr>
</table>
	
	</td>
  </tr>
</table>
