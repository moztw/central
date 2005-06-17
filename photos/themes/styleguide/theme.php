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
// CVS version: $Id: theme.php,v 1.3 2004/07/24 15:04:11 gaugau Exp $
// ------------------------------------------------------------------------- //

// HTML template for main menu
$template_main_menu = <<<EOT
                <span class="topmenu">
<!-- BEGIN album_list -->
                        <a href="{ALB_LIST_TGT}" title="{ALB_LIST_TITLE}">{ALB_LIST_LNK}</a> |
<!-- END album_list -->
<!-- BEGIN my_gallery -->
                        <a href="{MY_GAL_TGT}" title="{MY_GAL_TITLE}">{MY_GAL_LNK}</a> |
<!-- END my_gallery -->
<!-- BEGIN allow_memberlist -->
                        <a href="{MEMBERLIST_TGT}" title="{MEMBERLIST_TITLE}">{MEMBERLIST_LNK}</a>  ::
<!-- END allow_memberlist -->
<!-- BEGIN my_profile -->
                        <a href="{MY_PROF_TGT}">{MY_PROF_LNK}</a> |
<!-- END my_profile -->
<!-- BEGIN faq -->
                        <a href="{FAQ_TGT}" title="{FAQ_TITLE}">{FAQ_LNK}</a> ::
<!-- END faq -->
<!-- BEGIN enter_admin_mode -->
                        <a href="{ADM_MODE_TGT}" title="{ADM_MODE_TITLE}">{ADM_MODE_LNK}</a> |
<!-- END enter_admin_mode -->
<!-- BEGIN leave_admin_mode -->
                        <a href="{USR_MODE_TGT}" title="{USR_MODE_TITLE}">{USR_MODE_LNK}</a> |
<!-- END leave_admin_mode -->
<!-- BEGIN upload_pic -->
                        <a href="{UPL_PIC_TGT}" title="{UPL_PIC_TITLE}">{UPL_PIC_LNK}</a> |
<!-- END upload_pic -->
<!-- BEGIN register -->
                        <a href="{REGISTER_TGT}" title="{REGISTER_TITLE}">{REGISTER_LNK}</a> |
<!-- END register -->
<!-- BEGIN login -->
                        <a href="{LOGIN_TGT}">{LOGIN_LNK}</a> |
<!-- END login -->
<!-- BEGIN logout -->
                        <a href="{LOGOUT_TGT}">{LOGOUT_LNK}</a> |
<!-- END logout -->
                        <a href="{LASTUP_TGT}">{LASTUP_LNK}</a> |
                        <a href="{LASTCOM_TGT}">{LASTCOM_LNK}</a> |
                        <a href="{TOPN_TGT}">{TOPN_LNK}</a> |
                        <a href="{TOPRATED_TGT}">{TOPRATED_LNK}</a> |
                        <a href="{FAV_TGT}">{FAV_LNK}</a> |
                        <a href="{SEARCH_TGT}">{SEARCH_LNK}</a>
                </span>
EOT;
// HTML template for gallery admin menu
$template_gallery_admin_menu = <<<EOT

                <div align="left">
                <table cellpadding="0" cellspacing="1">
                        <tr>
                                <td class="admin_menu"><a href="editpics.php?mode=upload_approval" title="">{UPL_APP_LNK}</a></td>
                                <td class="admin_menu"><a href="config.php" title="">{CONFIG_LNK}</a></td>
                                <td class="admin_menu"><a href="albmgr.php{CATL}" title="">{ALBUMS_LNK}</a></td>
                                <td class="admin_menu"><a href="catmgr.php" title="">{CATEGORIES_LNK}</a></td>
                                <td class="admin_menu"><a href="usermgr.php" title="">{USERS_LNK}</a></td>
                                <td class="admin_menu"><a href="groupmgr.php" title="">{GROUPS_LNK}</a></td>
                                <td class="admin_menu"><a href="banning.php" title="">{BAN_LNK}</a></td>
                                <td class="admin_menu"><a href="db_ecard.php" title="">{DB_ECARD_LNK}</a></td>
                                <td class="admin_menu"><a href="reviewcom.php" title="">{COMMENTS_LNK}</a></td>
                                <td class="admin_menu"><a href="searchnew.php" title="">{SEARCHNEW_LNK}</a></td>
                                <td class="admin_menu"><a href="util.php" title="">{UTIL_LNK}</a></td>
                                <td class="admin_menu"><a href="profile.php?op=edit_profile" title="">{MY_PROF_LNK}</a></td>
                        </tr>
                </table>
                </div>

EOT;
// HTML template for user admin menu
$template_user_admin_menu = <<<EOT

                <div align="left">
                <table cellpadding="0" cellspacing="1">
                        <tr>
                                <td class="admin_menu"><a href="albmgr.php" title="">{ALBMGR_LNK}</a></td>
                                <td class="admin_menu"><a href="modifyalb.php" title="">{MODIFYALB_LNK}</a></td>
                                <td class="admin_menu"><a href="profile.php?op=edit_profile" title="">{MY_PROF_LNK}</a></td>
                        </tr>
                </table>
                </div>

EOT;
// HTML template for the category list
$template_cat_list = <<<EOT
<!-- BEGIN header -->
        <tr>
                <td class="tableh1" width="80%"><b>{CATEGORY}</b></td>
                <td class="tableh1" width="10%"><b>{ALBUMS}</b></td>
                <td class="tableh1" width="10%"><b>{PICTURES}</b></td>
        </tr>
<!-- END header -->
<!-- BEGIN catrow_noalb -->
        <tr>
                <td class="tableh2" colspan="3"><table border="0"><tr><td>{CAT_THUMB}</td><td><span class="catlink"><b>{CAT_TITLE}</b></span>{CAT_DESC}</td></tr></table></td>
        </tr>
<!-- END catrow_noalb -->
<!-- BEGIN catrow -->
        <tr>
                <td class="tableb" align="left"><table border="0"><tr><td>{CAT_THUMB}</td><td><span class="catlink"><b>{CAT_TITLE}</b></span>{CAT_DESC}</td></tr></table></td>
                <td class="tableb" align="center">{ALB_COUNT}</td>
                <td class="tableb" align="center">{PIC_COUNT}</td>
        </tr>
     <!--if (isset(CAT_ALBUMS)){-->
          <tr>
            <td class="tableb" colspan=3>{CAT_ALBUMS}</td>
      </tr><!--};-->
<!-- END catrow -->
<!-- BEGIN footer -->
        <tr>
                <td colspan="3" class="tableh1" align="center"><span class="statlink"><b>{STATISTICS}</b></span></td>
        </tr>
<!-- END footer -->
<!-- BEGIN spacer -->
        <img src="images/spacer.gif" width="1" height="17" /><br />
<!-- END spacer -->

EOT;
// HTML template for the breadcrumb
$template_breadcrumb = <<<EOT
<!-- BEGIN breadcrumb -->
        <tr>
                <td colspan="3" class="tableh1"><span class="statlink"><b>{BREADCRUMB}</b></span></td>
        </tr>
<!-- END breadcrumb -->
<!-- BEGIN breadcrumb_user_gal -->
        <tr>
                <td colspan="3" class="tableh1">
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                <tr>
                        <td><span class="statlink"><b>{BREADCRUMB}</b></span></td>
                        <td align="right"><span class="statlink"><b>{STATISTICS}</b></span></td>
                </tr>
                </table>
                </td>
        </tr>
<!-- END breadcrumb_user_gal -->

EOT;
// HTML template for the album list
$template_album_list = <<<EOT

<!-- BEGIN stat_row -->
        <tr>
                <td colspan="{COLUMNS}" class="tableh1" align="center"><span class="statlink"><b>{STATISTICS}</b></span></td>
        </tr>
<!-- END stat_row -->
<!-- BEGIN header -->
        <tr>
<!-- END header -->

<!-- BEGIN album_cell -->
<td width="{COL_WIDTH}%" height="100%" valign="top">
<table width="100%" height="100%" cellspacing="0" cellpadding="0">
<tr>
<td colspan="3" height="1" valign="top" class="tableh2">
<a href="{ALB_LINK_TGT}" class="alblink"><b>{ALBUM_TITLE}</b></a>
</td>
</tr>
<tr>
<td colspan="3">
<img src="images/spacer.gif" width="1" height="1"><br />
</td>
</tr>
<tr height="100%">
<td align="center" height="100%" valign="middle" class="thumbnails">
<!-- <img src="images/spacer.gif" width="{THUMB_CELL_WIDTH}" height="1" class="image" style="margin-top: 0px;
margin-bottom: 0px; border: none;"><br /> -->
<a href="{ALB_LINK_TGT}" class="albums">{ALB_LINK_PIC}<br /></a>
</td>
<td height="100%">
<img src="images/spacer.gif" width="1" height="1">
</td>
<td width="100%" height="100%" valign="top" class="album_stat">

<div style="width:100%;height:150px;position:relative;overflow:auto; padding-right:10px">
{ADMIN_MENU}
<p class="album_stat">{ALB_DESC}</p>
<p class="album_stat">{ALB_INFOS}</p>
</div>

</td>
</tr>
</table>
</td>
<!-- END album_cell -->

<!-- BEGIN empty_cell -->
        <td width="{COL_WIDTH}%" height="100%" valign="top">
        <table width="100%" height="100%" cellspacing="0" cellpadding="0">
        <tr>
                <td height="1" valign="top" class="tableh2">
                        <b>&nbsp;</b>
                </td>
        </tr>
        <tr>
                <td>
                        <img src="images/spacer.gif" width="1" height="1"><br />
                </td>
        </tr>
        <tr height="100%">
                <td width="100%" height="100%" valign="top" class="tableb_compact">
                        &nbsp;
                </td>
        </tr>
        </table>
        </td>
<!-- END empty_cell -->
<!-- BEGIN row_separator -->
        </tr>
        <tr>
<!-- END row_separator -->
<!-- BEGIN footer -->
        </tr>
<!-- END footer -->
<!-- BEGIN tabs -->
        <tr>
                <td colspan="{COLUMNS}" style="padding: 0px;">
                        <table width="100%" cellspacing="0" cellpadding="0">
                                <tr>
                                        {TABS}
                                </tr>
                        </table>
                </td>
        </tr>
<!-- END tabs -->
<!-- BEGIN spacer -->
        <img src="images/spacer.gif" width="1" height="17" /><br />
<!-- END spacer -->

EOT;
// HTML template for filmstrip display
$template_film_strip = <<<EOT

        <tr>
         <td valign="top" background='themes/styleguide/images/tile.gif' align="center" height='30'>&nbsp;</td>
        </tr>
        <tr>
        <td valign="bottom" class="thumbnails" align="center">
          {THUMB_STRIP}
        </td>
        </tr>
        <tr>
         <td valign="top" background='themes/styleguide/images/tile.gif' align="center" height='30'>&nbsp;</td>
        </tr>
<!-- BEGIN thumb_cell -->
                                        <a href="{LINK_TGT}">{THUMB}</a>&nbsp;
                                        {CAPTION}
                                        {ADMIN_MENU}
<!-- END thumb_cell -->
<!-- BEGIN empty_cell -->
                <td valign="top" align="center" >1&nbsp;</td>
<!-- END empty_cell -->

EOT;
// HTML template for the album list
$template_album_list_cat = <<<EOT

<!-- BEGIN c_stat_row -->
        <tr>
                <td colspan="{COLUMNS}" class="tableh1" align="center"><span class="statlink"><b>{STATISTICS}</b></span></td>
        </tr>
<!-- END c_stat_row -->
<!-- BEGIN c_header -->
        <tr>
<!-- END c_header -->
<!-- BEGIN c_album_cell -->
        <td width="{COL_WIDTH}%" height="100%" valign="top">
        <table width="100%" height="100%" cellspacing="0" cellpadding="0">
        <tr>
                <td colspan="3" height="1" valign="top" class="tableh2">
                        <a href="{ALB_LINK_TGT}" class="alblink"><b>{ALBUM_TITLE}</b></a>
                </td>
        </tr>
        <tr>
                <td colspan="3">
                        <img src="images/spacer.gif" width="1" height="1"><br />
                </td>
        </tr>
        <tr height="100%">
                <td align="center" height="100%" valign="middle" class="thumbnails">
                        <img src="images/spacer.gif" width="{THUMB_CELL_WIDTH}" height="1" class="image" style="margin-top: 0px;
 margin-bottom: 0px; border: none;"><br />
                        <a href="{ALB_LINK_TGT}" class="albums">{ALB_LINK_PIC}<br /></a>
                </td>
                <td height="100%">
                        <img src="images/spacer.gif" width="1" height="1">
                </td>
                <td width="100%" height="100%" valign="top" class="tableb_compact">
                        {ADMIN_MENU}
                        <p>{ALB_DESC}</p>
                        <p class="album_stat">{ALB_INFOS}</p>
                </td>
        </tr>
        </table>
        </td>
<!-- END c_album_cell -->
<!-- BEGIN c_empty_cell -->
        <td width="{COL_WIDTH}%" height="100%" valign="top">
        <table width="100%" height="100%" cellspacing="0" cellpadding="0">
        <tr>
                <td height="1" valign="top" class="tableh2">
                        <b>&nbsp;</b>
                </td>
        </tr>
        <tr>
                <td>
                        <img src="images/spacer.gif" width="1" height="1"><br />
                </td>
        </tr>
        <tr height="100%">
                <td width="100%" height="100%" valign="top" class="tableb_compact">
                        &nbsp;
                </td>
        </tr>
        </table>
        </td>
<!-- END c_empty_cell -->
<!-- BEGIN c_row_separator -->
        </tr>
        <tr>
<!-- END c_row_separator -->
<!-- BEGIN c_footer -->
        </tr>
<!-- END c_footer -->
<!-- BEGIN c_tabs -->
        <tr>
                <td colspan="{COLUMNS}" style="padding: 0px;">
                        <table width="100%" cellspacing="0" cellpadding="0">
                                <tr>
                                        {TABS}
                                </tr>
                        </table>
                </td>
        </tr>
<!-- END c_tabs -->
<!-- BEGIN c_spacer -->
        <img src="images/spacer.gif" width="1" height="17" /><br />
<!-- END c_spacer -->

EOT;
// HTML template for the ALBUM admin menu displayed in the album list
$template_album_admin_menu = <<<EOT
        <table border="0" cellpadding="0" cellspacing="1">
                <tr>
                        <td align="center" valign="middle" class="admin_menu">
                                <a href="delete.php?id={ALBUM_ID}&what=album"  class="adm_menu" onclick="return confirm('{CONFIRM_DELETE}');">{DELETE}</a>
                        </td>
                        <td align="center" valign="middle" class="admin_menu">
                                <a href="modifyalb.php?album={ALBUM_ID}"  class="adm_menu">{MODIFY}</a>
                        </td>
                        <td align="center" valign="middle" class="admin_menu">
                                <a href="editpics.php?album={ALBUM_ID}"  class="adm_menu">{EDIT_PICS}</a>
                        </td>
                </tr>
        </table>

EOT;
// HTML template for title row of the thumbnail view (album title + sort options)
$template_thumb_view_title_row = <<<EOT

                        <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                                <td width="100%" class="statlink"><h2>{ALBUM_NAME}</h2></td>
                                <td><img src="images/spacer.gif" width="1"></td>
                                <td class="sortorder_cell">
                                        <table height="100%" cellpadding="0" cellspacing="0">
                                        <tr>
                                <td class="sortorder_options">{TITLE}</td>
                                <td class="sortorder_options"><span class="statlink"><a href="thumbnails.php?album={AID}&page={PAGE}&sort=ta" title="{SORT_TA}">&nbsp;+&nbsp;</a></span></td>
                                <td class="sortorder_options"><span class="statlink"><a href="thumbnails.php?album={AID}&page={PAGE}&sort=td" title="{SORT_TD}">&nbsp;-&nbsp;</a></span></td>
                                        </tr>
                                        <tr>
                                                <td class="sortorder_options">{NAME}</td>
                                                <td class="sortorder_options"><span class="statlink"><a href="thumbnails.php?album={AID}&page={PAGE}&sort=na" title="{SORT_NA}">&nbsp;+&nbsp;</a></span></td>
                                                <td class="sortorder_options"><span class="statlink"><a href="thumbnails.php?album={AID}&page={PAGE}&sort=nd" title="{SORT_ND}">&nbsp;-&nbsp;</a></span></td>
                                        </tr>
                                        <tr>
                                                <td class="sortorder_options">{DATE}</td>
                                                <td class="sortorder_options"><span class="statlink"><a href="thumbnails.php?album={AID}&page={PAGE}&sort=da" title="{SORT_DA}">&nbsp;+&nbsp;</a></span></td>
                                                <td class="sortorder_options"><span class="statlink"><a href="thumbnails.php?album={AID}&page={PAGE}&sort=dd" title="{SORT_DD}">&nbsp;-&nbsp;</a></span></td>
                                        </tr>
                                        </table>
                                </td>
                        </tr>
                        </table>

EOT;


// HTML template for title row of the fav thumbnail view (album title + download)
$template_fav_thumb_view_title_row = <<<EOT

                        <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                                <td width="100%" class="statlink"><h2>{ALBUM_NAME}</h2></td>
                                <td><img src="images/spacer.gif" width="1"></td>
                                <td class="sortorder_cell">
                                        <table height="100%" cellpadding="0" cellspacing="0">
                                                <tr>
                                                        <td class="sortorder_options"><span class="statlink"><a href="zipdownload.php">{DOWNLOAD_ZIP}</a></span></td>
                                                </tr>
                                                </table>
                                </td>
                        </tr>
                        </table>

EOT;


// HTML template for thumbnails display
$template_thumbnail_view = <<<EOT

<!-- BEGIN header -->
        <tr>
<!-- END header -->
<!-- BEGIN thumb_cell -->
        <td valign="top" class="thumbnails" width ="{CELL_WIDTH}" align="center">
                <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                                <td align="center">
                                        <a href="{LINK_TGT}">{THUMB}<br /></a>
                                        {CAPTION}
                                        {ADMIN_MENU}
                                </td>
                        </tr>
                </table>
        </td>
<!-- END thumb_cell -->
<!-- BEGIN empty_cell -->
                <td valign="top" class="thumbnails" align="center">&nbsp;</td>
<!-- END empty_cell -->
<!-- BEGIN row_separator -->
        </tr>
        <tr>
<!-- END row_separator -->
<!-- BEGIN footer -->
        </tr>
<!-- END footer -->
<!-- BEGIN tabs -->
        <tr>
                <td colspan="{THUMB_COLS}" style="padding: 0px;">
                        <table width="100%" cellspacing="0" cellpadding="0">
                                <tr>
                                        {TABS}
                                </tr>
                        </table>
                </td>
        </tr>
<!-- END tabs -->
<!-- BEGIN spacer -->
        <img src="images/spacer.gif" width="1" height="17" /><br />
<!-- END spacer -->

EOT;
// HTML template for the thumbnail view when there is no picture to show
$template_no_img_to_display = <<<EOT
        <tr>
                <td class="tableb" height="200" align="center">
                        <font size="3"><b>{TEXT}</b></font>
                </td>
        </tr>
<!-- BEGIN spacer -->
        <img src="images/spacer.gif" width="1" height="17" /><br />
<!-- END spacer -->

EOT;
// HTML template for the USER info box in the user list view
$template_user_list_info_box = <<<EOT

        <table cellspacing="1" cellpadding="0" border="0" width="100%" class="user_thumb_infobox">
                <tr>
                        <th><a href="profile.php?uid={USER_ID}">{USER_NAME}</a></th>
                </tr>
                <tr>
                        <td>{ALBUMS}</td>
                </tr>
                <tr>
                        <td>{PICTURES}</td>
                </tr>
        </table>

EOT;
// HTML template for the image navigation bar
$template_img_navbar = <<<EOT

        <tr>
                <td align="center" valign="middle" class="navmenu" width="48">
                        <a href="{THUMB_TGT}" class="navmenu_pic" title="{THUMB_TITLE}"><img src="images/folder.gif" width="16" height="16" align="absmiddle" border="0" alt="{THUMB_TITLE}" /></a>
                </td>
                <td align="center" valign="middle" class="navmenu" width="48">
                        <a href="javascript:;" onClick="blocking('picinfo','yes', 'block'); return false;" title="{PIC_INFO_TITLE}"><img src="images/info.gif" width="16" height="16" border="0" align="absmiddle" alt="{PIC_INFO_TITLE}" /></a>
                </td>
                <td align="center" valign="middle" class="navmenu" width="48">
                        <a href="{SLIDESHOW_TGT}" title="{SLIDESHOW_TITLE}"><img src="images/slideshow.gif" width="16" height="16" border="0" align="absmiddle" alt="{SLIDESHOW_TITLE}" /></a>
                </td>
                <td align="center" valign="middle" class="navmenu" witdh="100%">
                        {PIC_POS}
                </td>
                <td align="center" valign="middle" class="navmenu" width="48">
                        <a href="{ECARD_TGT}" title="{ECARD_TITLE}"><img src="images/ecard.gif" width="16" height="16" border="0" align="absmiddle" alt="{ECARD_TITLE}"></a>
                </td>
                <td align="center" valign="middle" class="navmenu" width="48">
                        <a href="{PREV_TGT}" class="navmenu_pic" title="{PREV_TITLE}"><img src="images/prev.gif" width="16" height="16" border="0" align="absmiddle" alt="{PREV_TITLE}" /></a>
                </td>
                <td align="center" valign="middle" class="navmenu" width="48">
                        <a href="{NEXT_TGT}" class="navmenu_pic" title="{NEXT_TITLE}"><img src="images/next.gif" width="16" height="16" border="0" align="absmiddle" alt="{NEXT_TITLE}" /></a>
                </td>
        </tr>

EOT;
// HTML template for intermediate image display
$template_display_picture = <<<EOT
        <tr>
                <td align="center" class="tableb" height="{CELL_HEIGHT}" style="white-space: nowrap; padding: 0px;">
                        <table cellspacing="2" cellpadding="0" class="imageborder">
                                <tr>
                                        <td align="center">
                                                {IMAGE}
                                                {ADMIN_MENU}
                                        </td>
                                </tr>
                        </table>
<!-- BEGIN img_desc -->
                        <table cellpadding="0" cellspacing="0" class="img_caption_table">
<!-- BEGIN title -->
                                <tr>
                                        <th>
                                                {TITLE}
                                        </th>
                                </tr>
<!-- END title -->
<!-- BEGIN caption -->
                                <tr>
                                        <td>
                                                {CAPTION}
                                        </td>
                                </tr>
<!-- END caption -->
                        </table>
<!-- END img_desc -->
                </td>
        </tr>

EOT;
// HTML template for the image rating box
$template_image_rating = <<<EOT

        <tr>
                <td colspan="6" class="tableh2_compact"><b>{TITLE}</b> {VOTES}</td>
        </tr>
        <tr>
                <td class="tableb_compact" width="17%" align="center"><a href="{RATE0}" title="{RUBBISH}"><img src="images/rating0.gif" alt="{RUBBISH}" border="0" /><br /></a></td>
                <td class="tableb_compact" width="17%" align="center"><a href="{RATE1}" title="{POOR}"><img src="images/rating1.gif" alt="{POOR}" border="0" /><br /></a></td>
                <td class="tableb_compact" width="17%" align="center"><a href="{RATE2}" title="{FAIR}"><img src="images/rating2.gif" alt="{FAIR}" border="0" /><br /></a></td>
                <td class="tableb_compact" width="17%" align="center"><a href="{RATE3}" title="{GOOD}"><img src="images/rating3.gif" alt="{GOOD}" border="0" /><br /></a></td>
                <td class="tableb_compact" width="17%" align="center"><a href="{RATE4}" title="{EXCELLENT}"><img src="images/rating4.gif" alt="{EXCELLENT}" border="0" /><br /></a></td>
                <td class="tableb_compact" width="17%" align="center"><a href="{RATE5}" title="{GREAT}"><img src="images/rating5.gif" alt="{GREAT}" border="0" /><br /></a></td>
        </tr>

EOT;
// HTML template for the display of comments
$template_image_comments = <<<EOT

        <tr>
                <td>
                        <table width="100%" cellpadding="0" cellspacing="0">
                                <td class="tableh2_compact" nowrap>
                                        <b>{MSG_AUTHOR}</b>
<!-- BEGIN ipinfo -->
                                                                                 ({HDR_IP} [{RAW_IP}])
<!-- END ipinfo -->
                                </td>
                                <td class="tableh2_compact" align="right" width="100%">
<!-- BEGIN buttons -->
                                        <a href="javascript:;" onClick="blocking('cbody{MSG_ID}','', 'block'); blocking('cedit{MSG_ID}','', 'block'); return false;" title="{EDIT_TITLE}"><img src="images/edit.gif" border="0" align="absmiddle" ></a>
                                        <a href="delete.php?msg_id={MSG_ID}&what=comment"  onclick="return confirm('{CONFIRM_DELETE}');"><img src="images/delete.gif" border="0" align="absmiddle" ></a>
<!-- END buttons -->
                                </td>
                                <td class="tableh2_compact" align="right" nowrap>
                                        <span class="comment_date">[{MSG_DATE}]</span>
                                </td>
                        </table>
                </td>
        </tr>
        <tr>
                <td class="tableb_compact">
                        <div id="cbody{MSG_ID}" style="display:block">
                                {MSG_BODY}
                        </div>
                        <div id="cedit{MSG_ID}" style="display:none">
<!-- BEGIN edit_box_smilies -->
                                <table width="100%" cellpadding="0" cellspacing="0">

                                                <form name="f{MSG_ID}" method="POST" action="db_input.php">
                                                <input type="hidden" name="event" value="comment_update">
                                                <input type="hidden" name="msg_id" value="{MSG_ID}">
                                                <tr>
                                                <td>
                                                   <input type=text name=msg_author value={MSG_AUTHOR} class="textinput" size="25">
                                                </td>
                                                </tr>
                                                <tr>
                                                <td width="80%">
                                                        <textarea cols="40" rows="2" class="textinput" name="msg_body" onselect="storeCaret_f{MSG_ID}(this);" onclick="storeCaret_f{MSG_ID}(this);" onkeyup="storeCaret_f{MSG_ID}(this);" style="width: 100%;">{MSG_BODY_RAW}</textarea>
                                                </td>
                                                <td class="tableb_compact">
                                                </td>
                                                <td>
                                                        <input type="submit" class="comment_button" name="submit" value="{OK}">
                                                </td>
                                                </form>
                                        </tr>
                                        <tr>
                                                <td colspan="3"><img src="images/spacer.gif" width="1" height="2" /><br /></td>
                                        </tr>
                                </table>
                                {SMILIES}
<!-- END edit_box_smilies -->
<!-- BEGIN edit_box_no_smilies -->
                                <table width="100%" cellpadding="0" cellspacing="0">
                                        <tr>
                                                <form name="f{MSG_ID}" method="POST" action="db_input.php">
                                                <input type="hidden" name="event" value="comment_update">
                                                <input type="hidden" name="msg_id" value="{MSG_ID}">
<td>
                                                   <input type=text name=msg_author value={MSG_AUTHOR} class="textinput" size="25">
                                                </td>
                                                <td width="100%">
                                                        <textarea cols="40" rows="2" class="textinput" name="msg_body" style="width: 100%;">{MSG_BODY_RAW}</textarea>
                                                </td>
                                                <td class="tableb_compact">
                                                </td>
                                                <td>
                                                        <input type="submit" class="comment_button" name="submit" value="{OK}">
                                                </td>
                                                </form>
                                        </tr>
                                        <tr>
                                                <td colspan="3"><img src="images/spacer.gif" width="1" height="2" /><br /></td>
                                        </tr>
                                </table>
<!-- END edit_box_no_smilies -->
                        </div>
                </td>
        </tr>

EOT;

$template_add_your_comment = <<<EOT

        <tr>
                <td class="tableh2_compact"><b>{ADD_YOUR_COMMENT}</b></td>
        </tr>
        <tr>
                <form method="post" name="post" action="db_input.php">
                <td colspan="3">
                        <table width="100%" cellpadding="0" cellspacing="0">
                                <input type="hidden" name="event" value="comment">
                                <input type="hidden" name="pid" value="{PIC_ID}">
<!-- BEGIN user_name_input -->
                                <td class="tableb_compact">
                                        {NAME}
                                </td>
                                <td class="tableb_compact">
                                        <input type="text" class="textinput" name="msg_author" size="10" maxlength="20" value={USER_NAME}>
                                </td>
<!-- END user_name_input -->
<!-- BEGIN input_box_smilies -->
                                <td class="tableb_compact">
                                {COMMENT} </td>
                                <td width="100%" class="tableb_compact">
                                <input type="text" class="textinput" id="message" name="msg_body" onselect="storeCaret_post(this);" onclick="storeCaret_post(this);" onkeyup="storeCaret_post(this);" maxlength="{MAX_COM_LENGTH}" style="width: 100%;">                                        <!-- END input_box_smilies -->
<!-- BEGIN input_box_no_smilies -->
                                <input type="text" class="textinput" id="message" name="msg_body"  maxlength="{MAX_COM_LENGTH}" style="width: 100%;">
<!-- END input_box_no_smilies -->
                                </td>
                                <td class="tableb_compact">
                                <input type="submit" class="comment_button" name="submit" value="{OK}">
                                </td>
                        </table>
                </td>
                </form>
        </tr>
<!-- BEGIN smilies -->
        <tr>
                <td width="100%" class="tableb_compact">
                        {SMILIES}
                </td>
        </tr>
<!-- END smilies -->

EOT;
// HTML template used by the cpg_die function
$template_cpg_die = <<<EOT

        <tr>
                <td class="tableb" height="300" align="center">
                        <font size="3"><b>{MESSAGE}</b></font>
<!-- BEGIN file_line -->
                        <br />
                        <br />
                        {FILE_TXT}{FILE} - {LINE_TXT}{LINE}
<!-- END file_line -->
<!-- BEGIN output_buffer -->
                        <br />
                        <br />
                        <div align="left">
                                {OUTPUT_BUFFER}
                        </div>
<!-- END output_buffer -->
                        <br /><br />
                </td>
        </tr>


EOT;
// HTML template used by the msg_box function
$template_msg_box = <<<EOT

        <tr>
                <td class="tableb" height="150" align="center">
                        <font size="3"><b>{MESSAGE}</b></font>
                </td>
        </tr>
<!-- BEGIN button -->
                <tr>
                        <td align="center" class="tablef">
                                <table cellpadding="0" cellspacing="0">
                                        <tr>
                                                <td class="admin_menu">
                                                        <a href="{LINK}">{TEXT}</a>
                                                </td>
                                        </tr>
                                </table>
                        </td>
                </tr>
<!-- END button -->

EOT;
// HTML template for e-cards
$template_ecard = <<<EOT
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html dir="{LANG_DIR}">
<head>
<title>{TITLE}</title>
<meta http-equiv="content-type" content="text/html; charset={CHARSET}" />
</head>
<body bgcolor="#FFFFFF" text="#0F5475" link="#0F5475" vlink="#0F5475" alink="#0F5475">
<br />
<p align="center"><a href="{VIEW_ECARD_TGT}"><b>{VIEW_ECARD_LNK}</b></a></p>
<table border="0" cellspacing="0" cellpadding="1" align="center">
  <tr>
    <td bgcolor="#000000">
      <table border="0" cellspacing="0" cellpadding="10" bgcolor="#ffffff">
        <tr>
          <td valign="top">
           <img src="{PIC_URL}" border="1" alt="" /><br />
          </td>
          <td valign="top" width="200" height="250">
            <div align="right"><img src="{URL_PREFIX}images/stamp.gif" alt="" border="0" /></div>
            <br />
            <b><font face="arial" color="#000000" size="4">{GREETINGS}</font></b>
            <br />
            <br />
            <font face="arial" color="#000000" size="2">{MESSAGE}</font>
            <br />
            <br />
            <font face="arial" color="#000000" size="2">{SENDER_NAME}</font>
            (<a href="mailto:{SENDER_EMAIL}"><font face="arial" color="#000000" size="2">{SENDER_EMAIL}</font></a>)
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<p align="center"><a href="{VIEW_MORE_TGT}"><b>{VIEW_MORE_LNK}</b></a></p>
</body>
</html>
EOT;
// Template used for tabbed display
$template_tab_display = array('left_text' => '<td width="100%%" align="left" valign="middle" class="tableh1_compact" style="white-space: nowrap"><b>{LEFT_TEXT}</b></td>' . "\n",
    'tab_header' => '',
    'tab_trailer' => '',
    'active_tab' => '<td><img src="images/spacer.gif" width="1" height="1"></td>' . "\n" . '<td align="center" valign="middle" class="tableb_compact"><b>%d</b></td>',
    'inactive_tab' => '<td><img src="images/spacer.gif" width="1" height="1"></td>' . "\n" . '<td align="center" valign="middle" class="navmenu"><a href="{LINK}"<b>%d</b></a></td>' . "\n"
    );

function pageheader($section, $meta = '')
{
    global $CONFIG, $THEME_DIR;
    global $template_header, $lang_charset, $lang_text_dir;

    header('P3P: CP="CAO DSP COR CURa ADMa DEVa OUR IND PHY ONL UNI COM NAV INT DEM PRE"');
    user_save_profile();

    $template_vars = array('{LANG_DIR}' => $lang_text_dir,
        '{TITLE}' => $CONFIG['gallery_name'] . ' - ' . $section,
        '{CHARSET}' => $CONFIG['charset'] == 'language file' ? $lang_charset : $CONFIG['charset'],
        '{META}' => $meta,
        '{GAL_NAME}' => $CONFIG['gallery_name'],
        '{GAL_DESCRIPTION}' => $CONFIG['gallery_description'],
        '{MAIN_MENU}' => theme_main_menu(),
        '{ADMIN_MENU}' => theme_admin_mode_menu(),
        '{CUSTOM_STYLESHEET}' => customStylesheet(),
        '{CUSTOM_HEADER}' => customHeader(),
        );

    echo template_eval($template_header, $template_vars);
}
// Function for writing a pagefooter
function pagefooter()
{
    global $HTTP_GET_VARS, $HTTP_POST_VARS, $HTTP_SERVER_VARS;
    global $USER, $USER_DATA, $ALBUM_SET, $CONFIG, $time_start, $query_stats, $queries;;
    global $template_footer;

    if ($CONFIG['debug_mode']==1 || ($CONFIG['debug_mode']==2 && GALLERY_ADMIN_MODE)) {
        $time_end = cpgGetMicroTime();
        $time = round($time_end - $time_start, 3);

        $query_count = count($query_stats);
        $query_times = '';
        $total_query_time = 0;
        foreach ($query_stats as $qtime) {
            $query_times .= round($qtime, 3) . "s ";
            $total_query_time += $qtime;
        }
        $total_query_time = round($total_query_time, 3);

        starttable('100%', 'Debug info');
        echo "<tr><td class=\"tableb\">";
        echo "USER: <pre>";
        print_r($USER);
        echo "</pre></td></tr><td class=\"tableb\">";
        echo "<tr><td class=\"tableb\">";
        echo "USER DATA: <pre>";
        print_r($USER_DATA);
        echo "</pre></td></tr><td class=\"tableb\">";
        echo "<tr><td class=\"tableb\">";
        echo "Queries: <pre>";
        print_r($queries);
        echo "</pre></td></tr><td class=\"tableb\">";
        echo "GET :<pre>";
        print_r($HTTP_GET_VARS);
        echo "</pre></td></tr><td class=\"tableb\">";
        echo "POST :<pre>";
        print_r($HTTP_POST_VARS);
        echo "</pre></td></tr><td class=\"tableb\" >";
        echo <<<EOT
                Page generated in <b>$time</b> seconds - <b>$query_count</b> queries in <b>$total_query_time</b> seconds - Album set : $ALBUM_SET
EOT;
        echo "</td></tr>";
        echo "<tr><td class=\"tableb\">";
        echo "<a href=\"phpinfo.php\">Advanced debug mode</a> (phpinfo)";
        echo "</td></tr>";
        endtable();
    }

    echo $template_footer;
}
// Function to start a 'standard' table
function starttable($width = '-1', $title = '', $title_colspan = '1')
{
    global $CONFIG;

    if ($width == '-1') $width = $CONFIG['picture_table_width'];
    if ($width == '100%') $width = $CONFIG['main_table_width'];
    echo <<<EOT

<!-- Start standard table -->
<table align="center" width="$width" cellspacing="1" cellpadding="0" class="maintable">

EOT;
    if ($title) {
        echo <<<EOT
        <tr>
                <td class="tableh1" colspan="$title_colspan"><h2>$title</h2></td>
        </tr>

EOT;
    }
}

function endtable()
{
    echo <<<EOT
</table>
<!-- End standard table -->

EOT;
}

function theme_main_menu()
{
    global $AUTHORIZED, $CONFIG, $album, $actual_cat, $cat, $REFERER, $HTTP_SERVER_VARS;
    global $lang_main_menu, $template_main_menu;

    static $main_menu = '';

    if ($main_menu != '') return $main_menu;

    $album_l = isset($album) ? "?album=$album" : '';
    $cat_l = (isset($actual_cat))? "?cat=$actual_cat" : (isset($cat) ? "?cat=$cat" : '');
    $cat_l2 = isset($cat) ? "&cat=$cat" : '';
    $my_gallery_id = FIRST_USER_CAT + USER_ID;

    if (USER_ID) {
        template_extract_block($template_main_menu, 'login');
    } else {
        template_extract_block($template_main_menu, 'logout');
        template_extract_block($template_main_menu, 'my_profile');
    }

    if (GALLERY_ADMIN_MODE || USER_ADMIN_MODE) {
        template_extract_block($template_main_menu, 'enter_admin_mode');
    } elseif (USER_CAN_CREATE_ALBUMS || USER_IS_ADMIN) {
        template_extract_block($template_main_menu, 'leave_admin_mode');
    }

    if (!USER_CAN_CREATE_ALBUMS && !USER_IS_ADMIN) {
        template_extract_block($template_main_menu, 'enter_admin_mode');
        template_extract_block($template_main_menu, 'leave_admin_mode');
    }

    if (!USER_CAN_CREATE_ALBUMS) {
        template_extract_block($template_main_menu, 'my_gallery');
    }

    if (USER_CAN_CREATE_ALBUMS) {
        template_extract_block($template_main_menu, 'my_profile');
    }

    if (!USER_CAN_UPLOAD_PICTURES) {
        template_extract_block($template_main_menu, 'upload_pic');
    }

    if (USER_ID || !$CONFIG['allow_user_registration']) {
        template_extract_block($template_main_menu, 'register');
    }
    if (!USER_ID || !$CONFIG['allow_memberlist']) {
        template_extract_block($template_main_menu, 'allow_memberlist');
    }

    if (!$CONFIG['display_faq']) {
        template_extract_block($template_main_menu, 'faq');
    }

    $param = array('{ALB_LIST_TGT}' => "index.php$cat_l",
        '{ALB_LIST_TITLE}' => $lang_main_menu['alb_list_title'],
        '{ALB_LIST_LNK}' => $lang_main_menu['alb_list_lnk'],
        '{MY_GAL_TGT}' => "index.php?cat=$my_gallery_id",
        '{MY_GAL_TITLE}' => $lang_main_menu['my_gal_title'],
        '{MY_GAL_LNK}' => $lang_main_menu['my_gal_lnk'],
        '{MY_PROF_TGT}' => "profile.php?op=edit_profile",
        '{MY_PROF_LNK}' => $lang_main_menu['my_prof_lnk'],
        '{MEMBERLIST_TGT}' => "usermgr.php",
        '{MEMBERLIST_TITLE}' => $lang_main_menu['memberlist_title'],
        '{MEMBERLIST_LNK}' => $lang_main_menu['memberlist_lnk'],
        '{ADM_MODE_TGT}' => "admin.php?admin_mode=1&referer=$REFERER",
        '{ADM_MODE_TITLE}' => $lang_main_menu['adm_mode_title'],
        '{ADM_MODE_LNK}' => $lang_main_menu['adm_mode_lnk'],
        '{USR_MODE_TGT}' => "admin.php?admin_mode=0&referer=$REFERER",
        '{USR_MODE_TITLE}' => $lang_main_menu['usr_mode_title'],
        '{USR_MODE_LNK}' => $lang_main_menu['usr_mode_lnk'],
        '{UPL_PIC_TGT}' => "upload.php",
        '{UPL_PIC_TITLE}' => $lang_main_menu['upload_pic_title'],
        '{UPL_PIC_LNK}' => $lang_main_menu['upload_pic_lnk'],
        '{REGISTER_TGT}' => "register.php",
        '{REGISTER_TITLE}' => $lang_main_menu['register_title'],
        '{REGISTER_LNK}' => $lang_main_menu['register_lnk'],
        '{LOGIN_TGT}' => "login.php?referer=$REFERER",
        '{LOGIN_LNK}' => $lang_main_menu['login_lnk'],
        '{LOGOUT_TGT}' => "logout.php?referer=$REFERER",
        '{LOGOUT_LNK}' => $lang_main_menu['logout_lnk'] . " [" . USER_NAME . "]",
        '{FAQ_TGT}' => "faq.php",
        '{FAQ_TITLE}' => $lang_main_menu['faq_title'],
        '{FAQ_LNK}' => $lang_main_menu['faq_lnk'],
        '{LASTUP_TGT}' => "thumbnails.php?album=lastup$cat_l2",
        '{LASTUP_LNK}' => $lang_main_menu['lastup_lnk'],
        '{LASTCOM_TGT}' => "thumbnails.php?album=lastcom$cat_l2",
        '{LASTCOM_LNK}' => $lang_main_menu['lastcom_lnk'],
        '{TOPN_TGT}' => "thumbnails.php?album=topn$cat_l2",
        '{TOPN_LNK}' => $lang_main_menu['topn_lnk'],
        '{TOPRATED_TGT}' => "thumbnails.php?album=toprated$cat_l2",
        '{TOPRATED_LNK}' => $lang_main_menu['toprated_lnk'],
        '{FAV_TGT}' => "thumbnails.php?album=favpics",
        '{FAV_LNK}' => $lang_main_menu['fav_lnk'],
        '{SEARCH_TGT}' => "search.php",
        '{SEARCH_LNK}' => $lang_main_menu['search_lnk'],
        );

    $main_menu = template_eval($template_main_menu, $param);
    return $main_menu;
}

function theme_admin_mode_menu()
{
    global $cat;
    global $lang_gallery_admin_menu, $lang_user_admin_menu;
    global $template_gallery_admin_menu, $template_user_admin_menu;

    $cat_l = isset($cat) ? "?cat=$cat" : '';

    if (GALLERY_ADMIN_MODE) {
        $param = array('{CATL}' => $cat_l,
            '{UPL_APP_LNK}' => $lang_gallery_admin_menu['upl_app_lnk'],
            '{CONFIG_LNK}' => $lang_gallery_admin_menu['config_lnk'],
            '{ALBUMS_LNK}' => $lang_gallery_admin_menu['albums_lnk'],
            '{CATEGORIES_LNK}' => $lang_gallery_admin_menu['categories_lnk'],
            '{USERS_LNK}' => $lang_gallery_admin_menu['users_lnk'],
            '{GROUPS_LNK}' => $lang_gallery_admin_menu['groups_lnk'],
            '{COMMENTS_LNK}' => $lang_gallery_admin_menu['comments_lnk'],
            '{SEARCHNEW_LNK}' => $lang_gallery_admin_menu['searchnew_lnk'],
            '{MY_PROF_LNK}' => $lang_user_admin_menu['my_prof_lnk'],
            '{UTIL_LNK}' => $lang_gallery_admin_menu['util_lnk'],
            '{BAN_LNK}' => $lang_gallery_admin_menu['ban_lnk'],
            '{DB_ECARD_LNK}' => $lang_gallery_admin_menu['db_ecard_lnk'],
            );

        $html = template_eval($template_gallery_admin_menu, $param);
    } elseif (USER_ADMIN_MODE) {
        $param = array('{ALBMGR_LNK}' => $lang_user_admin_menu['albmgr_lnk'],
            '{MODIFYALB_LNK}' => $lang_user_admin_menu['modifyalb_lnk'],
            '{MY_PROF_LNK}' => $lang_user_admin_menu['my_prof_lnk']
            );

        $html = template_eval($template_user_admin_menu, $param);
    } else {
        $html = '';
    }

    return $html;
}

function theme_display_cat_list($breadcrumb, &$cat_data, $statistics)
{
    global $template_cat_list, $lang_cat_list;

    starttable('100%');

    if (count($cat_data) > 0) {
        $template = template_extract_block($template_cat_list, 'header');
        $params = array('{CATEGORY}' => $lang_cat_list['category'],
            '{ALBUMS}' => $lang_cat_list['albums'],
            '{PICTURES}' => $lang_cat_list['pictures'],
            );
        echo template_eval($template, $params);
    }

    $template_noabl = template_extract_block($template_cat_list, 'catrow_noalb');
    $template = template_extract_block($template_cat_list, 'catrow');
    foreach($cat_data as $category) {
        if (count($category) == 3) {
            $params = array('{CAT_TITLE}' => $category[0],
                '{CAT_THUMB}' => $category['cat_thumb'],
                '{CAT_DESC}' => $category[1]
                );
            echo template_eval($template_noabl, $params);
        } elseif (isset($category['cat_albums']) && ($category['cat_albums'] != '')) {
            $params = array('{CAT_TITLE}' => $category[0],
                '{CAT_THUMB}' => $category['cat_thumb'],
                '{CAT_DESC}' => $category[1],
                '{CAT_ALBUMS}' => $category['cat_albums'],
                '{ALB_COUNT}' => $category[2],
                '{PIC_COUNT}' => $category[3],
                );
            echo template_eval($template, $params);
        } else {
            $params = array('{CAT_TITLE}' => $category[0],
                '{CAT_THUMB}' => $category['cat_thumb'],
                '{CAT_DESC}' => $category[1],
                '{CAT_ALBUMS}' => '',
                '{ALB_COUNT}' => $category[2],
                '{PIC_COUNT}' => $category[3],
                );
            echo template_eval($template, $params);
        }
    }

    if ($statistics && count($cat_data) > 0) {
        $template = template_extract_block($template_cat_list, 'footer');
        $params = array('{STATISTICS}' => $statistics);
        echo template_eval($template, $params);
    }
    endtable();

    if (count($cat_data) > 0)
        echo template_extract_block($template_cat_list, 'spacer');
}

function theme_display_breadcrumb($breadcrumb, &$cat_data)
{
    /**
     * ** added breadcrumb as a seperate element
     */
    global $template_breadcrumb, $lang_breadcrumb;

    starttable('100%');
    if ($breadcrumb) {
        $template = template_extract_block($template_breadcrumb, 'breadcrumb');
        $params = array('{BREADCRUMB}' => $breadcrumb
            );
        echo template_eval($template, $params);
    }
    endtable();
}

function theme_display_album_list(&$alb_list, $nbAlb, $cat, $page, $total_pages)
{
    global $CONFIG, $STATS_IN_ALB_LIST, $statistics, $template_tab_display, $template_album_list, $lang_album_list;

    $theme_alb_list_tab_tmpl = $template_tab_display;

    $theme_alb_list_tab_tmpl['left_text'] = strtr($theme_alb_list_tab_tmpl['left_text'], array('{LEFT_TEXT}' => $lang_album_list['album_on_page']));
    $theme_alb_list_tab_tmpl['inactive_tab'] = strtr($theme_alb_list_tab_tmpl['inactive_tab'], array('{LINK}' => 'index.php?cat=' . $cat . '&page=%d'));

    $tabs = create_tabs($nbAlb, $page, $total_pages, $theme_alb_list_tab_tmpl);

    $album_cell = template_extract_block($template_album_list, 'album_cell');
    $empty_cell = template_extract_block($template_album_list, 'empty_cell');
    $tabs_row = template_extract_block($template_album_list, 'tabs');
    $stat_row = template_extract_block($template_album_list, 'stat_row');
    $spacer = template_extract_block($template_album_list, 'spacer');
    $header = template_extract_block($template_album_list, 'header');
    $footer = template_extract_block($template_album_list, 'footer');
    $rows_separator = template_extract_block($template_album_list, 'row_separator');

    $count = 0;

    $columns = $CONFIG['album_list_cols'];
    $column_width = ceil(100 / $columns);
    $thumb_cell_width = $CONFIG['alb_list_thumb_size'] + 2;

    starttable('100%');

    if ($STATS_IN_ALB_LIST) {
        $params = array('{STATISTICS}' => $statistics,
            '{COLUMNS}' => $columns,
            );
        echo template_eval($stat_row, $params);
    }

    echo $header;

    if (is_array($alb_list)) {
        foreach($alb_list as $album) {
            $count ++;

            $params = array('{COL_WIDTH}' => $column_width,
                '{ALBUM_TITLE}' => $album['album_title'],
                '{THUMB_CELL_WIDTH}' => $thumb_cell_width,
                '{ALB_LINK_TGT}' => "thumbnails.php?album={$album['aid']}",
                '{ALB_LINK_PIC}' => $album['thumb_pic'],
                '{ADMIN_MENU}' => $album['album_adm_menu'],
                '{ALB_DESC}' => $album['album_desc'],
                '{ALB_INFOS}' => $album['album_info'],
                );

            echo template_eval($album_cell, $params);

            if ($count % $columns == 0 && $count < count($alb_list)) {
                echo $rows_separator;
            }
        }
    }

    $params = array('{COL_WIDTH}' => $column_width);
    $empty_cell = template_eval($empty_cell, $params);

    while ($count++ % $columns != 0) {
        echo $empty_cell;
    }

    echo $footer;
    // Tab display
    $params = array('{COLUMNS}' => $columns,
        '{TABS}' => $tabs,
        );
    echo template_eval($tabs_row, $params);

    endtable();

    echo $spacer;
}
// Function to display first level Albums of a category
function theme_display_album_list_cat(&$alb_list, $nbAlb, $cat, $page, $total_pages)
{
    global $CONFIG, $STATS_IN_ALB_LIST, $statistics, $template_tab_display, $template_album_list_cat, $lang_album_list;
    if (!$CONFIG['first_level']) {
        return;
    }

    $theme_alb_list_tab_tmpl = $template_tab_display;

    $theme_alb_list_tab_tmpl['left_text'] = strtr($theme_alb_list_tab_tmpl['left_text'], array('{LEFT_TEXT}' => $lang_album_list['album_on_page']));
    $theme_alb_list_tab_tmpl['inactive_tab'] = strtr($theme_alb_list_tab_tmpl['inactive_tab'], array('{LINK}' => 'index.php?cat=' . $cat . '&page=%d'));

    $tabs = create_tabs($nbAlb, $page, $total_pages, $theme_alb_list_tab_tmpl);
    // echo $template_album_list_cat;
    $template_album_list_cat1 = $template_album_list_cat;
    $album_cell = template_extract_block($template_album_list_cat1, 'c_album_cell');
    $empty_cell = template_extract_block($template_album_list_cat1, 'c_empty_cell');
    $tabs_row = template_extract_block($template_album_list_cat1, 'c_tabs');
    $stat_row = template_extract_block($template_album_list_cat1, 'c_stat_row');
    $spacer = template_extract_block($template_album_list_cat1, 'c_spacer');
    $header = template_extract_block($template_album_list_cat1, 'c_header');
    $footer = template_extract_block($template_album_list_cat1, 'c_footer');
    $rows_separator = template_extract_block($template_album_list_cat1, 'c_row_separator');

    $count = 0;

    $columns = $CONFIG['album_list_cols'];
    $column_width = ceil(100 / $columns);
    $thumb_cell_width = $CONFIG['alb_list_thumb_size'] + 2;

    starttable('100%');

    if ($STATS_IN_ALB_LIST) {
        $params = array('{STATISTICS}' => $statistics,
            '{COLUMNS}' => $columns,
            );
        echo template_eval($stat_row, $params);
    }

    echo $header;

    if (is_array($alb_list)) {
        foreach($alb_list as $album) {
            $count ++;

            $params = array('{COL_WIDTH}' => $column_width,
                '{ALBUM_TITLE}' => $album['album_title'],
                '{THUMB_CELL_WIDTH}' => $thumb_cell_width,
                '{ALB_LINK_TGT}' => "thumbnails.php?album={$album['aid']}",
                '{ALB_LINK_PIC}' => $album['thumb_pic'],
                '{ADMIN_MENU}' => $album['album_adm_menu'],
                '{ALB_DESC}' => $album['album_desc'],
                '{ALB_INFOS}' => $album['album_info'],
                );

            echo template_eval($album_cell, $params);

            if ($count % $columns == 0 && $count < count($alb_list)) {
                echo $rows_separator;
            }
        }
    }

    $params = array('{COL_WIDTH}' => $column_width);
    $empty_cell = template_eval($empty_cell, $params);

    while ($count++ % $columns != 0) {
        echo $empty_cell;
    }

    echo $footer;
    // Tab display
    $params = array('{COLUMNS}' => $columns,
        '{TABS}' => $tabs,
        );
    echo template_eval($tabs_row, $params);

    endtable();

    echo $spacer;
}

function theme_display_thumbnails(&$thumb_list, $nbThumb, $album_name, $aid, $cat, $page, $total_pages, $sort_options, $display_tabs, $mode = 'thumb')
{
    global $CONFIG;
    global $template_thumb_view_title_row, $template_fav_thumb_view_title_row, $lang_thumb_view, $template_tab_display, $template_thumbnail_view;

    static $header = '';
    static $thumb_cell = '';
    static $empty_cell = '';
    static $row_separator = '';
    static $footer = '';
    static $tabs = '';
    static $spacer = '';

    if ($header == '') {
        $thumb_cell = template_extract_block($template_thumbnail_view, 'thumb_cell');
        $tabs = template_extract_block($template_thumbnail_view, 'tabs');
        $header = template_extract_block($template_thumbnail_view, 'header');
        $empty_cell = template_extract_block($template_thumbnail_view, 'empty_cell');
        $row_separator = template_extract_block($template_thumbnail_view, 'row_separator');
        $footer = template_extract_block($template_thumbnail_view, 'footer');
        $spacer = template_extract_block($template_thumbnail_view, 'spacer');
    }

    $cat_link = is_numeric($aid) ? '' : '&cat=' . $cat;

    $theme_thumb_tab_tmpl = $template_tab_display;

    if ($mode == 'thumb') {
        $theme_thumb_tab_tmpl['left_text'] = strtr($theme_thumb_tab_tmpl['left_text'], array('{LEFT_TEXT}' => $lang_thumb_view['pic_on_page']));
        $theme_thumb_tab_tmpl['inactive_tab'] = strtr($theme_thumb_tab_tmpl['inactive_tab'], array('{LINK}' => 'thumbnails.php?album=' . $aid . $cat_link . '&page=%d'));
    } else {
        $theme_thumb_tab_tmpl['left_text'] = strtr($theme_thumb_tab_tmpl['left_text'], array('{LEFT_TEXT}' => $lang_thumb_view['user_on_page']));
        $theme_thumb_tab_tmpl['inactive_tab'] = strtr($theme_thumb_tab_tmpl['inactive_tab'], array('{LINK}' => 'index.php?cat=' . $cat . '&page=%d'));
    }

    $thumbcols = $CONFIG['thumbcols'];
    $cell_width = ceil(100 / $CONFIG['thumbcols']) . '%';

    $tabs_html = $display_tabs ? create_tabs($nbThumb, $page, $total_pages, $theme_thumb_tab_tmpl) : '';
    // The sort order options are not available for meta albums
    if ($sort_options) {
        $param = array('{ALBUM_NAME}' => $album_name,
            '{AID}' => $aid,
            '{PAGE}' => $page,
            '{NAME}' => $lang_thumb_view['name'],
            '{TITLE}' => $lang_thumb_view['title'],
            '{DATE}' => $lang_thumb_view['date'],
            '{SORT_TA}' => $lang_thumb_view['sort_ta'],
            '{SORT_TD}' => $lang_thumb_view['sort_td'],
            '{SORT_NA}' => $lang_thumb_view['sort_na'],
            '{SORT_ND}' => $lang_thumb_view['sort_nd'],
            '{SORT_DA}' => $lang_thumb_view['sort_da'],
            '{SORT_DD}' => $lang_thumb_view['sort_dd'],
            );
        $title = template_eval($template_thumb_view_title_row, $param);
    } else if ($aid == 'favpics' && $CONFIG['enable_zipdownload'] == 1) { //Lots of stuff can be added here later
       $param = array('{ALBUM_NAME}' => $album_name,
                             '{DOWNLOAD_ZIP}'=>$lang_thumb_view['download_zip']
                               );
       $title = template_eval($template_fav_thumb_view_title_row, $param);
    } else {
        $title = $album_name;
    }

    if ($mode == 'thumb') {
        starttable('100%', $title, $thumbcols);
    } else {
        starttable('100%');
    }

    echo $header;

    $i = 0;
    foreach($thumb_list as $thumb) {
        $i++;
        if ($mode == 'thumb') {
            if ($aid == 'lastalb') {
                $params = array('{CELL_WIDTH}' => $cell_width,
                    '{LINK_TGT}' => "thumbnails.php?album={$thumb['aid']}",
                    '{THUMB}' => $thumb['image'],
                    '{CAPTION}' => $thumb['caption'],
                    '{ADMIN_MENU}' => $thumb['admin_menu']
                    );
            } else {
                $params = array('{CELL_WIDTH}' => $cell_width,
                    '{LINK_TGT}' => "displayimage.php?album=$aid$cat_link&pos={$thumb['pos']}",
                    '{THUMB}' => $thumb['image'],
                    '{CAPTION}' => $thumb['caption'],
                    '{ADMIN_MENU}' => $thumb['admin_menu']
                    );
            }
        } else {
            $params = array('{CELL_WIDTH}' => $cell_width,
                '{LINK_TGT}' => "index.php?cat={$thumb['cat']}",
                '{THUMB}' => $thumb['image'],
                '{CAPTION}' => $thumb['caption'],
                '{ADMIN_MENU}' => ''
                );
        }
        echo template_eval($thumb_cell, $params);

        if ((($i % $thumbcols) == 0) && ($i < count($thumb_list))) {
            echo $row_separator;
        }
    }
    for (;($i % $thumbcols); $i++) {
        echo $empty_cell;
    }
    echo $footer;

    if ($display_tabs) {
        $params = array('{THUMB_COLS}' => $thumbcols,
            '{TABS}' => $tabs_html
            );
        echo template_eval($tabs, $params);
    }

    endtable();
    echo $spacer;
}
// Added to display flim_strip
function theme_display_film_strip(&$thumb_list, $nbThumb, $album_name, $aid, $cat, $pos, $sort_options, $mode = 'thumb')
{
    global $CONFIG;
    global $template_film_strip, $lang_film_strip;

    static $template = '';
    static $thumb_cell = '';
    static $empty_cell = '';
    static $spacer = '';

    if ((!$template)) {
        $template = $template_film_strip;
        $thumb_cell = template_extract_block($template, 'thumb_cell');
        $empty_cell = template_extract_block($template, 'empty_cell');
        // $spacer = template_extract_block($template, 'spacer');
    }
    // if ($header == '') {}
    $cat_link = is_numeric($aid) ? '' : '&cat=' . $cat;

    $theme_thumb_tab_tmpl = $template_tab_display;

    if ($mode == 'thumb') {
        $theme_thumb_tab_tmpl['left_text'] = strtr($theme_thumb_tab_tmpl['left_text'], array('{LEFT_TEXT}' => $lang_thumb_view['pic_on_page']));
        $theme_thumb_tab_tmpl['inactive_tab'] = strtr($theme_thumb_tab_tmpl['inactive_tab'], array('{LINK}' => 'thumbnails.php?album=' . $aid . $cat_link . '&page=%d'));
    } else {
        $theme_thumb_tab_tmpl['left_text'] = strtr($theme_thumb_tab_tmpl['left_text'], array('{LEFT_TEXT}' => $lang_thumb_view['user_on_page']));
        $theme_thumb_tab_tmpl['inactive_tab'] = strtr($theme_thumb_tab_tmpl['inactive_tab'], array('{LINK}' => 'index.php?cat=' . $cat . '&page=%d'));
    }

    $thumbcols = $CONFIG['thumbcols'];
    $cell_width = ceil(100 / $CONFIG['max_film_strip_items']) . '%';

    $i = 0;
    $thumb_strip = '';
    foreach($thumb_list as $thumb) {
        $i++;
        if ($mode == 'thumb') {
            $params = array('{CELL_WIDTH}' => $cell_width,
                '{LINK_TGT}' => "displayimage.php?album=$aid$cat_link&pos={$thumb['pos']}",
                '{THUMB}' => $thumb['image'],
                '{CAPTION}' => '',
                '{ADMIN_MENU}' => ''
                );
        } else {
            $params = array('{CELL_WIDTH}' => $cell_width,
                '{LINK_TGT}' => "index.php?cat={$thumb['cat']}",
                '{THUMB}' => $thumb['image'],
                '{CAPTION}' => '',
                '{ADMIN_MENU}' => ''
                );
        }
        $thumb_strip .= template_eval($thumb_cell, $params);
        // if ((($i % $thumbcols) == 0) && ($i < count($thumb_list))) {
        // echo $row_separator;
        // }
    }
    // for (;($i % $thumbcols); $i++){
    // echo $empty_cell;
    // }
    $params = array('{THUMB_STRIP}' => $thumb_strip,
        '{COLS}' => $i);

    ob_start();
    starttable('');
    echo template_eval($template, $params);
    endtable();
    $film_strip = ob_get_contents();
    ob_end_clean();

    return $film_strip;
}

function theme_no_img_to_display($album_name)
{
    global $lang_errors, $template_no_img_to_display;

    static $template = '';
    static $spacer;

    if ((!$template)) {
        $template = $template_no_img_to_display;
        $spacer = template_extract_block($template, 'spacer');
    }

    $params = array('{TEXT}' => $lang_errors['no_img_to_display']);
    starttable('100%', $album_name);
    echo template_eval($template, $params);
    endtable();
}

function theme_display_image($nav_menu, $picture, $votes, $pic_info, $comments, $film_strip)
{
    global $HTTP_COOKIE_VARS, $CONFIG;

    starttable();
    echo $nav_menu;
    endtable();

    starttable();
    echo $picture;
    endtable();
    if ($CONFIG['display_film_strip'] == 1) {
        echo $film_strip;
    }
    starttable();
    echo $votes;
    endtable();

    $picinfo = isset($HTTP_COOKIE_VARS['picinfo']) ? $HTTP_COOKIE_VARS['picinfo'] : ($CONFIG['display_pic_info'] ? 'block' : 'none');
    echo "<div id=\"picinfo\" style=\"display: $picinfo;\">\n";
    starttable();
    echo $pic_info;
    endtable();
    echo "</div>\n";

    starttable();
    echo $comments;
    endtable();
}

function theme_html_picinfo(&$info)
{
    global $lang_picinfo;

    $html = '';

    $html .= "        <tr><td colspan=\"2\" class=\"tableh2_compact\"><b>{$lang_picinfo['title']}</b></td></tr>\n";
    $template = "        <tr><td class=\"tableb_compact\" valign=\"top\" nowrap>%s:</td><td class=\"tableb_compact\">%s</td></tr>\n";
    foreach ($info as $key => $value) $html .= sprintf($template, $key, $value);

    return $html;
}

function customHeader()
{
$backToDefaultTheme = customGetUrlVars('theme').'xxx';
$highlightUrl = customGetUrlVars2('highlight').'highlight';
//$return='|'.customGetUrlVars2('highlight').'|';
$return=<<<EOT
<table border="0" cellspacing="0" cellpadding="0">
<tr><td class="stgsm">
<ul style="margin-top:0px;margin-bottom:0px;">
<li>visible for <span class="bgg">everyone</span>/<span class="bgy">admin and logged-in user</span>/<span class="bgr">admin only</span></li>
<li>X = applies, C = depending on config, A = when in admin mode</li>
<li><a href="javascript:;" onClick="MM_openBrWindow('themes/styleguide/readme.htm','styleguide','scrollbars=yes,toolbar=no,status=no,resizable=yes,width=600,height=300')">view styleguide readme</a></li>
<li><a href="$backToDefaultTheme">back to default theme</a></li>
</ul>
</td>
<td class="bgy" valign="bottom"><img src="themes/styleguide/images/albmgr_php.gif" width="11" height="50" border="0" alt="" /></td>
<td class="bgr" valign="bottom"><img src="themes/styleguide/images/banning_php.gif" width="11" height="55" border="0" alt="" /></td>
<td class="bgr" valign="bottom"><img src="themes/styleguide/images/catmgr_php.gif" width="12" height="83" border="0" alt="" /></td>
<td class="bgr" valign="bottom"><img src="themes/styleguide/images/config_php.gif" width="11" height="46" border="0" alt="" /></td>
<td class="bgy" valign="bottom"><img src="themes/styleguide/images/delete_php.gif" width="11" height="47" border="0" alt="" /></td>
<td class="bgg" valign="bottom"><img src="themes/styleguide/images/displayimage_php.gif" width="12" height="76" border="0" alt="" /></td>
<td class="bgg" valign="bottom"><img src="themes/styleguide/images/ecard_php.gif" width="11" height="44" border="0" alt="" /></td>
<td class="bgy" valign="bottom"><img src="themes/styleguide/images/editpics_php.gif" width="11" height="53" border="0" alt="" /></td>
<td class="bgg" valign="bottom"><img src="themes/styleguide/images/forgot_passwd_php.gif" width="11" height="83" border="0" alt="" /></td>
<td class="bgr" valign="bottom"><img src="themes/styleguide/images/groupmgr_php.gif" width="12" height="62" border="0" alt="" /></td>
<td class="bgg" valign="bottom"><img src="themes/styleguide/images/index_php.gif" width="11" height="41" border="0" alt="" /></td>
<td class="bgg" valign="bottom"><img src="themes/styleguide/images/login_php.gif" width="11" height="41" border="0" alt="" /></td>
<td class="bgy" valign="bottom"><img src="themes/styleguide/images/logout_php.gif" width="12" height="47" border="0" alt="" /></td>
<td class="bgy" valign="bottom"><img src="themes/styleguide/images/modifyalb_php.gif" width="11" height="62" border="0" alt="" /></td>
<td class="bgy" valign="bottom"><img src="themes/styleguide/images/profile_php.gif" width="11" height="47" border="0" alt="" /></td>
<td class="bgr" valign="bottom"><img src="themes/styleguide/images/reviewcom_php.gif" width="12" height="66" border="0" alt="" /></td>
<td class="bgg" valign="bottom"><img src="themes/styleguide/images/search_php.gif" width="11" height="48" border="0" alt="" /></td>
<td class="bgr" valign="bottom"><img src="themes/styleguide/images/searchnew_php.gif" width="11" height="66" border="0" alt="" /></td>
<td class="bgg" valign="bottom"><img src="themes/styleguide/images/thumbnails_php.gif" width="11" height="68" border="0" alt="" /></td>
<td class="bgg" valign="bottom"><img src="themes/styleguide/images/upload_php.gif" width="12" height="49" border="0" alt="" /></td>
<td class="bgr" valign="bottom"><img src="themes/styleguide/images/usermgr_php.gif" width="11" height="56" border="0" alt="" /></td>
<td class="bgr" valign="bottom"><img src="themes/styleguide/images/util_php.gif" width="11" height="34" border="0" alt="" />
<td class="bgr" valign="bottom"><img src="themes/styleguide/images/db_ecard_php.gif" width="11" height="56" border="0" alt="" />
</tr>
<tr><td class="bgsm"><a href="$highlightUrl=admin_menu" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'admin_menu', 'content', 'Controls the admin menu buttons.<br />The row of admin fuction buttons across the top of the gallery in admin mode. If you allow users to login, they will have an admin mode as well (user admin mode), so you better configure this to look nicely!',   'trail', true));">admin_menu</a></td><td class="bgsm">A</td><td class="bgsm">A</td><td class="bgsm">A</td><td class="bgsm">A</td><td class="bgsm">A</td><td class="bgsm">A</td><td class="bgsm">A</td><td class="bgsm">A</td><td class="bgsm">A</td><td class="bgsm">A</td><td class="bgsm">A</td><td class="bgsm">&nbsp;</td><td class="bgsm">A</td><td class="bgsm">A</td><td class="bgsm">A</td><td class="bgsm">A</td><td class="bgsm">A</td><td class="bgsm">A</td><td class="bgsm">A</td><td class="bgsm">A</td><td class="bgsm">A</td><td class="bgsm">A</td><td class="bgsm">A</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=admin_menu_thumb" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'admin_menu_thumb', 'content', 'Only available on delete.php, visible for a short instance. This class will vanish in future versions, as it is not needed any longer.',   'trail', true));">admin_menu_thumb</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=alblink" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'alblink', 'content', 'On displayimage.php, this controls the link back to an album in the information area.',   'trail', true));">alblink</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=album_stat" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'album_stat', 'content', 'Controls the album stats text.<br />e.g. 57 pictures, last one added on Jan 03, 2004',   'trail', true));">album_stat</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">C</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=button" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'button', 'content', 'Controls the look of the buttons used to submit forms.',   'trail', true));">button</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=catlink" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'catlink', 'content', '',   'trail', true));">catlink</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=checkbox" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'checkbox', 'content', 'Controls the look of checkboxes. In cpg1.3.0 it is only used on forgot_passwd.php.<br />Make sure to set background color properly when experiencing &quot;strange&quot; borders around the checkbox.',   'trail', true));">checkbox</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=clickable_option" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'clickable_option', 'content', 'Only visible in config screen (for admin) - admin does not have to click on radio buttons, but can click to corresponding text as well.',   'trail', true));">clickable_option</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=comment_date" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'comment_date', 'content', 'Controls the text on displayimage.php that tells the date a comment was made.',   'trail', true));">comment_date</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=debug_text" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'debug_text', 'content', 'Visible on every page, but only debug_mode is switched on in coppermine config.',   'trail', true));">debug_text</a></td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=footer" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'footer', 'content', 'Controls the &quot;Powered by Coppermine&quot; text at the bottom of the gallery. ',   'trail', true));">footer</a></td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=image" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'image', 'content', 'Controls settings like border size and color for images on displayimage.php.',   'trail', true));">image</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=image" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'imageborder', 'content', 'Controls border around intermediate picture on displayimage.php',   'trail', true));">imageborder</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=listbox" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'listbox', 'content', 'Controls the look of dropdown fields',   'trail', true));">listbox</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=listbox_lang" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'listbox_lang', 'content', 'The language and theme selection dropdown boxes (only in cpg1.3.0 or better), if switched on in config and existing in template.html. Will appear on all pages.',   'trail', true));">listbox_lang</a></td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">&nbsp;</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=maintable" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'maintable', 'content', 'Shows on every coppermine page: maintable controls (as the name suggests) the main table that has the gallery content in it.',   'trail', true));">maintable</a></td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=navmenu" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'navmenu', 'content', 'On thumbnails.php, this controls the cells at the bottom that contain page numbers. On displayimage.php, this controls the header where the e-card, information, previous, next, etc... images are.<br />&quot;navmenu img&quot; controls spacing for images which use the navmenu style.',   'trail', true));">navmenu</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=sortorder_cell" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'sortorder_cell', 'content', 'Controls the appearance of the cells that have options for sorting the images on thumbnails.php.',   'trail', true));">sortorder_cell</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=sortorder_options" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'sortorder_options', 'content', 'Controls the appearance of the cells that have options for sorting the images on thumbnails.php. This controls the actual text contents of the cell as well.',   'trail', true));">sortorder_options</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=statlink" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'statlink', 'content', 'Controls the stats text at the top of the main page,<br />e.g. xx pictures in yy Albums',   'trail', true));">statlink</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=tableb" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'tableb', 'content', 'Controls the table cell on displayimage.php where the image is.',   'trail', true));">tableb</a></td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=tableb_compact" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'tableb_compact', 'content', 'Controls all of the &quot;information&quot; fields on displayimage.php as well as the area where the rating stars are and the cell that the add comment area is in.',   'trail', true));">tableb_compact</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">C</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">C</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=tablef" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'tablef', 'content', 'Controls cells of tables on some pages with form submission buttons.<br />It controls cells on the search, upload and on the page that appears when you enter admin mode.',   'trail', true));">tablef</a></td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=tableh1" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'tableh1', 'content', 'Controls the main table header areas.',   'trail', true));">tableh1</a></td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=tableh1_compact" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'tableh1_compact', 'content', 'Controls the areas at the bottoms of the main tables.',   'trail', true));">tableh1_compact</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=tableh2" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'tableh2', 'content', 'On the main page, it controls the title area under the main table header.',   'trail', true));">tableh2</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">C</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=textinput" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'textinput', 'content', 'Controls the look of all textinput fields (like comments)',   'trail', true));">textinput</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=thumb_caption" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'thumb_caption', 'content', 'Only visible on the thumbnails pages - used to control the caption of a thumbnail.',   'trail', true));">thumb_caption</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">C</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=thumb_num_comments" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'thumb_num_comments', 'content', 'Only visible on the thumbnails page - controls the way the number of comments are displayed.',   'trail', true));">thumb_num_comments</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=thumb_title" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'thumb_title', 'content', 'Controls text that appears under thumbnails.<br />e.g. X views. A title that you have given to an image.',   'trail', true));">thumb_title</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">C</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=thumbnails" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'thumbnails', 'content', 'Controls the cells that thumbnail images are in.<br />The cells on the main page and on thumbnails.php',   'trail', true));">thumbnails</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">C</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">C</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=topmenu" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'topmenu', 'content', 'Controls the menu at the top of the gallery.<br />The search, upload picture, favorites, most viewed, last uploaded, etc links. Visible on all coppermine pages.',   'trail', true));">topmenu</a></td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td></tr>
</table>
EOT;



return $return;
}

function customStylesheet()
{
//initialize class definitions that can be highlighted
$cssClassDef = array(
'admin_menu' => ' font-family: Arial, Helvetica, sans-serif; font-size: 85%; border: 1px solid #005D8C; background-image : url(images/button_bg.gif); background-position : bottom; color: #000000; margin-top: 0px; margin-bottom: 0px; text-align: center; ',
'admin_menu a' => ' color: #000000; text-decoration: none; display: block; position: relative; padding-top: 1px; padding-bottom: 1px; padding-left: 2px; padding-right: 2px; ',
'admin_menu a:hover' => ' color: #000000; text-decoration: underline; ',
'admin_menu_thumb' => ' font-family: Arial, Helvetica, sans-serif; font-size: 85%; border: 1px solid #005D8C; background-image : url(images/button_bg.gif); background-position : bottom; color: #000000; font-weight: bold; margin-top: 0px; margin-bottom: 0px; width: 85px; ',
'admin_menu_thumb a' => ' color: #000000; text-decoration: none; display: block; position: relative; padding-top: 1px; padding-bottom: 1px; padding-left: 10px; padding-right: 10px; ',
'admin_menu_thumb a:hover' => ' color: #000000; text-decoration: underline; ',
'alblink a' => ' text-decoration: underline; color: #000000; ',
'alblink a:hover' => ' color: #000000; text-decoration: underline; ',
'album_stat' => ' font-size: 85%; margin: 5px 0px; ',
'bblink a' => ' color: #7F7F7F; text-decoration: none; ',
'bblink a:hover' => ' color: #7F7F7F; text-decoration: underline; ',
'button' => ' font-family: Arial, Helvetica, sans-serif; font-size: 100%; border: 1px solid #005D8C; background-image : url(images/button_bg.gif); background-position : bottom; ',
'catlink' => ' display: block; margin-bottom: 2px; ',
'catlink a' => ' text-decoration: underline; color: #000000; ',
'catlink a:hover' => ' color: #000000; text-decoration: underline; ',
'checkbox' => ' font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 100%; vertical-align : middle; ',
'clickable_option' => ' border-bottom : 1px dotted blue; cursor : hand; ',
'comment_button' => ' font-family: Arial, Helvetica, sans-serif; font-size: 85%; border: 1px solid #005D8C; background-image : url(images/button_bg.gif); background-position : bottom; padding-left: 3px; padding-right: 3px; ',
'comment_date{ color : #5F5F5F; font-size : 90%; vertical-align : middle; ',
'debug_text' => ' border: #BDBEBD; background-color: #EFEFEF; width : 100%; margin : 0px; ',
'footer' => ' font-size : 9px; ',
'footer a' => ' text-decoration: none; color: #000000; ',
'footer a:hover' => ' color: #000000; text-decoration: underline; ',
'image' => ' border-style: solid; border-width:1px; border-color: #000000; margin: 2px; ',
'imageborder' => ' border: 1px solid #000000; background-color: #FFFFFF; margin-top: 30px; margin-bottom: 30px; ',
'img_caption_table' => ' border: none; background-color: #FFFFFF; width : 100%; margin : 0px; ',
'img_caption_table th' => ' background: #D1D7DC ; font-size: 100%; color : #000000; padding-top: 4px; padding-right: 10px; padding-bottom: 4px; padding-left: 10px; border-top : 1px solid #FFFFFF; ',
'listbox' => ' font-family: Verdana, Arial, Arial, Helvetica, sans-serif; font-size: 100%; border: 1px solid #D1D7DC; vertical-align : middle; ',
'listbox_lang' => ' color: #000000; background-color: #D1D7DC; border: 1px solid #D1D7DC; font-size: 80%; font-family: Arial, Helvetica, sans-serif; vertical-align : middle; ',
'maintable' => ' border: 1px solid #C0C0C0; background-color: #FFFFFF; margin-top: 1px; margin-bottom: 1px; ',
'navmenu' => ' font-family: Verdana, Arial, Helvetica, sans-serif; color: #FFFFFF; font-size: 100%; font-weight: bold; background : #C0C0C0 ; border-style: none; ',
'navmenu a' => ' position: relative; display: block; padding-top: 2px; padding-right: 5px; padding-bottom: 2px; padding-left: 5px; text-decoration: none; color: #FFFFFF; ',
'navmenu a:hover' => ' background : #EFEFEF ; text-decoration: none; color:         #000000; ',
'navmenu img' => ' margin-top: 1px; margin-right: 5px; margin-bottom: 1px; margin-left: 5px; ',
'radio' => ' font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 100%; vertical-align : middle; ',
'sortorder_cell' => ' background : #C0C0C0 ; color : #FFFFFF; padding: 0px; margin: 0px; ',
'sortorder_options' => ' font-family: Verdana, Arial, Helvetica, sans-serif; background : #C0C0C0 ; color : #FFFFFF; padding: 0px; margin: 0px; font-weight: normal; font-size: 80%; white-space: nowrap; ',
'statlink' => ' color: #FFFFFF; ',
'statlink a' => ' text-decoration: none; color: #FFFFFF; ',
'statlink a:hover' => ' color: #FFFFFF; text-decoration: underline; ',
'tableb' => ' background: #EFEFEF ; padding-top: 3px; padding-right: 10px; padding-bottom: 3px; padding-left: 10px; ',
'tableb_compact' => ' background: #EFEFEF ; padding-top: 2px; padding-right: 5px; padding-bottom: 2px; padding-left: 5px; ',
'tablef' => ' background: #D1D7DC; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px; ',
'tableh1' => ' background : #C0C0C0 ; color : #FFFFFF; padding-top: 3px; padding-right: 10px; padding-bottom: 3px; padding-left: 10px; ',
'tableh1_compact' => ' background : #C0C0C0 ; color : #FFFFFF; padding-top: 2px; padding-right: 5px; padding-bottom: 2px; padding-left: 5px; ',
'tableh2' => ' background: #D1D7DC ; color : #000000; padding-top: 3px; padding-right: 10px; padding-bottom: 3px; padding-left: 10px; ',
'tableh2_compact' => ' background: #D1D7DC ; color : #000000; padding-top: 2px; padding-right: 5px; padding-bottom: 2px; padding-left: 5px; ',
'textinput' => 'font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 100%; border: 1px solid #D1D7DC; padding-right: 3px; padding-left: 3px; ',
'thumb_caption' => ' font-size: 80%; padding: 1px; display : block; ',
'thumb_caption a' => ' text-decoration: underline; color: #000000; ',
'thumb_num_comments' => ' font-weight: normal; font-size: 80%; padding: 2px; font-style : italic; display : block; ',
'thumb_title' => ' font-weight : bold; font-size: 80%; padding: 2px; display : block; ',
'thumbnails' => ' background: #EFEFEF ; padding: 5px; ',
'topmenu' => ' line-height : 130%; font-size: 100%; ',
'topmenu a' => ' color : #7F7F7F; text-decoration : none; ',
'topmenu a:hover ' => ' color : #7F7F7F; text-decoration : underline; ',
'user_thumb_infobox' => ' margin-top: 1px; margin-bottom: 1px; ',
'user_thumb_infobox a' => ' text-decoration: none; color: #000000; ',
'user_thumb_infobox a:hover' => ' color: #000000; text-decoration: underline; ',
'user_thumb_infobox td' => ' font-size: 80%; margin-top: 1px; margin-bottom: 1px; text-align : center; ',
'user_thumb_infobox th' => ' font-weight : bold; font-size: 100%; margin-top: 1px; margin-bottom: 1px; text-align : center; ',
);


$return = <<<EOT
<style type="text/css">
body {font-family : Verdana, Arial, Helvetica, sans-serif;font-size: 12px;background : #FFFFFF ;color : Black;margin: 0px;}

table {font-size: 12px;}

h1{font-weight: bold;font-size: 22px; font-family: "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif; text-decoration: none; line-height : 120%; color : #000000; margin: 2px; }

h2 {font-family: Arial, Helvetica, sans-serif; font-size: 18px; margin: 0px;}

h3 {font-weight: normal; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; margin: 2px; }

p {font-family: Arial, Helvetica, sans-serif; font-size: 100%; margin: 2px 0px; }

ul { margin-left: 5px; padding: 0px;}

li { margin-left: 10px; margin-top: 4px; margin-bottom: 4px; padding: 0px; list-style-position: outside; list-style-type: disc; }

a { color: #7F7F7F; text-decoration: none; }

a:hover { color: #7F7F7F; text-decoration: underline;}

/* Default DOM Tooltip Style */
div.domTT {
    border: 1px solid #333333;
}
div.domTTCaption {
    font-family: serif;
    font-size: 12px;
    font-weight: bold;
    padding: 1px 2px;
    color: #FFFFFF;
    background-color: #333333;
}
div.domTTContent {
    font-size: 12px;
    font-family: sans-serif;
    padding: 3px 2px;
    background-color: #F1F1FF;
}
/* Classic Style */
div.domTTClassic {
    border: 1px solid black;
    background-color: #FBF4D4;
}
div.domTTClassicCaption {
    font-family: serif;
    font-size: 12px;
    font-weight: bold;
    font-style: italic;
    padding: 1px 2px;
}
div.domTTClassicContent {
    font-size: 12px;
    font-family: Arial, sans-serif;
    padding: 1px 2px 0 2px;
}
/* Win9x Style */
div.domTTWin {
  border: 2px outset #BFBFBF;
  background-color: #808080
}
div.domTTWinCaption {
  border: 0px solid #BFBFBF;
  border-width: 1px 1px 0px 1px;
  background-color: #00007F;
  padding: 2px;
  font-size: 12px;
  font-weight: bold;
  font-family: sans-serif;
  color: white;
}
div.domTTWinContent {
  border: 1px solid #BFBFBF;
}
/* Overlib Style */
div.domTTOverlib {
    border: 1px solid #333366;
}
div.domTTOverlibCaption {
    font-family: Verdana, Helvetica;
    font-size: 10px;
    font-weight: bold;
    color: #FFFFFF;
    background-color: #333366;
}
div.domTTOverlibContent {
    font-size: 10px;
    font-family: Verdana, Helvetica;
    padding: 2px;
    background-color: #F1F1FF;
}
div.domTTMenu {
  width: 150px;
  border: 2px outset #E6E6E6;
}
div.domTTMenuCaption {
  font-size: 12px;
  font-family: sans-serif;
  background-color: #E6E6E6;
}
div.domTTMenuContent {
  padding: 1px 0;
  background-color: #E6E6E6;
}
.bgg {
background-color: #00E090;
padding:0px;
margin: 0px
text-align : center;
font-size:8px;
}
.bgy {
background-color: #FFDF00;
padding:0px;
margin: 0px
text-align : center;
font-size:8px;
}
.bgr {
background-color: #FF3F00;
padding:0px;
margin:0px
text-align : center;
font-size:8px;
}
.stgsm {
font-size:9px;
}
.bgsm {
font-size:9px;
border-color:#EFEFEF; border-width:1px; border-style:solid;
}

EOT;

foreach ($cssClassDef as $key => $value) {
  $return.= '.' . $key .'{';
  $return.= $value;
  if ($_GET['highlight'] == $key){$return.= 'background:red;border: 2px solid green;color:black;font-style: italic;font-weight:bold;font-variant:small-caps ;';}
  $return.= "}\n";
}

$return.= '</style>';

return $return;
}

function customGetUrlVars($exception)
// get the url vars
{
 $cpgGetUrl = $_SERVER["SCRIPT_NAME"]."?";
 foreach ($_GET as $key => $value) {
    if ($key!=$exception){$cpgGetUrl.= $key . "=" . $value . "&";}
 }
 $cpgGetUrl.= $exception . '=';
 return $cpgGetUrl;
}

function customGetUrlVars2($exception)
// get the url vars
{
 $cpgGetUrl = $_SERVER["SCRIPT_NAME"]."?";
 foreach ($_GET as $key => $value) {
    if ($key!=$exception){$cpgGetUrl.= $key . "=" . $value . "&";}
 }
 //$cpgGetUrl.= $exception . '=';
 return $cpgGetUrl;
}
?>
