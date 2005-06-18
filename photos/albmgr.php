<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2005 Coppermine Dev Team
  v1.1 originaly written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
  ********************************************
  Coppermine version: 1.3.3
  $Source: /cvsroot/coppermine/stable/albmgr.php,v $
  $Revision: 1.6 $
  $Author: gaugau $
  $Date: 2005/04/19 03:17:10 $
**********************************************/

define('IN_COPPERMINE', true);
define('ALBMGR_PHP', true);

require('include/init.inc.php');

if (!(GALLERY_ADMIN_MODE || USER_ADMIN_MODE)) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

function get_subcat_data($parent, $ident = '')
{
    global $CONFIG, $CAT_LIST;

    $result = db_query("SELECT cid, name, description FROM {$CONFIG['TABLE_CATEGORIES']} WHERE parent = '$parent' AND cid != 1 ORDER BY pos");
    if (mysql_num_rows($result) > 0) {
        $rowset = db_fetch_rowset($result);
        foreach ($rowset as $subcat) {
            $CAT_LIST[] = array($subcat['cid'], $ident . $subcat['name']);
            get_subcat_data($subcat['cid'], $ident . '&nbsp;&nbsp;&nbsp;');
        }
    }
}

pageheader($lang_albmgr_php['alb_mrg']);

?>

<script language="javascript">
<!--
    function CheckAlbumForm(frm)
    {
        var select_len = frm.to.length;
        var album = new Object();
        var changed = false;

        for (i=0; i<select_len; i++) {
            album = new parseSelectValue(frm.to, i);

            if (album.action != '0') {
                if (album.album_nm == '') {
                    alert('<?php echo $lang_albmgr_php['alb_need_name'] ?>');
                    frm.to.options[i].selected = true;
                    return false;
                }
                changed = true;
            }
        }

        if (frm.delete_album.value.len !=0)
            changed = true;

        if (changed) {
            if (confirm('<?php echo $lang_albmgr_php['confirm_modifs'] ?>')) {
                for (i=0; i<select_len; i++) {
                    album = new parseSelectValue(frm.to, i);
                    if (album.action != '0') {
                        frm.to.options[i].selected = true;
                    }
                }
                return true;
            }
            else
                return false;
        }
        else {
            alert('<?php echo $lang_albmgr_php['no_change'] ?>');
            return false;
        }
    }

    function page_init()
    {
        document.album_menu.delete_album.value = "";
    }
-->
</script>

<script language="javascript">
<!--
    var selectedOptIndex;

    function Album_Select(selectedIndex)
    {
        selectedOptIndex = selectedIndex;

        for (i=0; i<document.album_menu.to.length; i++) {
            document.album_menu.to.options[i].selected = false;
        }
        document.album_menu.to.options[selectedIndex].selected = true;

        var album = new Object();
        album = new parseSelectValue(document.album_menu.to, selectedIndex);

        album.deleteFrm();
        album.changeFrm();
    }

    function Moveup_Option()
    {
        var to = document.album_menu.to;
        var pos = selectedOptIndex;
        if (pos == 0) {
            return;
        }

        swap_option(to, pos, pos-1);
        selected_option(to, pos-1);
    }

    function Movedown_Option()
    {
        var to = document.album_menu.to;
        var pos = selectedOptIndex;
        if (pos == to.length-1) {
            return;
        }

        swap_option(to, pos, pos+1);
        selected_option(to, pos+1);
    }

    function Album_Create()
    {
        var prev_album;
        var to_pos, album_type, album_sort;
        var to = document.album_menu.to;

        if (to.selectedIndex == -1)
            to_pos = to.length;
        else
            to_pos = to.selectedIndex;

        if (to_pos > 0) {
            prev_album = new parseSelectValue(to, to_pos-1);
            album_sort = Number(prev_album.album_sort)+1;
        }
        else {
            album_sort = 1;
        }
        move_list (to, to_pos);
        make_option("<?php echo $lang_albmgr_php['new_album'] ?>", make_value('0', "<?php echo $lang_albmgr_php['new_album'] ?>", album_sort, '1'), to, to_pos);

        selected_option(to, to_pos);
    }

    function Album_Delete()
    {
        var album = new Object();
        var to = document.album_menu.to;
        album = new parseSelectValue(to, selectedOptIndex);

        var msg = '<?php echo $lang_albmgr_php['confirm_delete1'] ?>';

        if (album.action == '1') {
            if (confirm(msg)) {
                to.options[selectedOptIndex] = null;
                document.album_menu.album_nm.value='';
            }
            else {
                return;
            }
        }
        else {
            msg = msg + '<?php echo $lang_albmgr_php['confirm_delete2'] ?>';

            if (confirm(msg)) {
                var album = new Object();
                album =  new parseSelectValue(to, selectedOptIndex);
                to.options[selectedOptIndex] = null;
                document.album_menu.album_nm.value='';

                document.album_menu.delete_album.value = document.album_menu.delete_album.value + album.album_no + ',';
            }
            else {
                return;
            }
        }
    }

    function Album_NameChange(change_name)
    {

                try {
                    var album = new Object();
                    var to = document.album_menu.to;
                    var value;
                    var text;

                    album = new parseSelectValue(to, selectedOptIndex);
                    if (album.action == '1')
                        action = '1';
                    else
                        action = '2';

                    text = change_name.substring(0, 80);
                    value = make_value(album.album_no, change_name, album.album_sort, action);
                    make_option(text, value, to, selectedOptIndex);
                }
                catch(e) {
                        alert("<?php echo $lang_albmgr_php['select_first'] ?>");
                }
        }

    function make_option(text, value, target, index)
    {
        target[index] = new Option(text, value);
    }

    function move_list(target, pos)
    {
        var album = new Object();
        var listlen = target.length;

        for (j=listlen-1; j>pos-1; j--) {
            album = new parseSelectValue(target, j)
            if (album.action == '1') {
                value = make_value(album.album_no, album.album_nm, Number(album.album_sort)+1, '1');
            }
            else {
                value = make_value(album.album_no, album.album_nm, Number(album.album_sort)+1, '2');
            }
            text  = target.options[j].text;

            make_option(text, value, target, j+1);
        }
    }

    function _private_update_frm_element(name)
    {
        var frm = document.album_menu;
        frm.album_nm.value = name;
    }

    function _private_change()
    {
        _private_update_frm_element(this.album_nm);
    }

    function _private_delete()
    {
        _private_update_frm_element('');
    }

    function parseSelectValue(select, selectedIndex)
    {
        var temp_nm
        var option_value = select.options[selectedIndex].value;

        this.album_no = option_value.substring(option_value.indexOf('album_no=') + 9, option_value.indexOf(','));
        option_value = option_value.substring(option_value.indexOf(',') + 1);

        temp_nm = option_value.substring(option_value.indexOf('album_nm=') + 9, option_value.indexOf('album_sort=')-1);
        this.album_nm = temp_nm.substring(1, temp_nm.length-1);
        option_value = option_value.substring(option_value.indexOf('album_sort='));

        this.album_sort = option_value.substring(option_value.indexOf('album_sort=') + 11 ,option_value.indexOf(','));
        option_value = option_value.substring(option_value.indexOf(',') + 1);

        this.action = option_value.substring(option_value.indexOf('action=') + 7);

        this.changeFrm = _private_change;
        this.deleteFrm = _private_delete;

        return this;
    }

    function selected_option(target, pos)
    {
        target.options[pos].selected = true;
        Album_Select(pos);
    }

    function swap_option(target, swap_a, swap_b)
    {
        var album_a = new Object();
        var album_b = new Object();

        album_a = new parseSelectValue(target, swap_a);
        album_b = new parseSelectValue(target, swap_b);

        if (album_a.action == '0') album_a.action = '2';
        if (album_b.action == '0') album_b.action = '2';

        var temp_option = new Option(target.options[swap_a].text, make_value(album_a.album_no, album_a.album_nm,album_b.album_sort,album_a.action));
        target[swap_a] = new Option(target.options[swap_b].text, make_value(album_b.album_no, album_b.album_nm,album_a.album_sort,album_b.action));
        target[swap_b] = temp_option;
    }

    function make_value(album_no, album_nm, album_sort, action)
    {
        return "album_no=" + album_no + ",album_nm='" + album_nm + "',album_sort=" + album_sort + ",action=" + action;
    }
-->
</script>

<?php starttable("100%", $lang_albmgr_php['alb_mrg'], 1);
?>
<tr>
<?php
$cat = isset($HTTP_GET_VARS['cat']) ? ($HTTP_GET_VARS['cat']) : 0;
if ($cat == 1) $cat = 0;

if (GALLERY_ADMIN_MODE) {
    $result = db_query("SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = $cat ORDER BY pos ASC");
} elseif (USER_ADMIN_MODE) {
    $result = db_query("SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = " . (USER_ID + FIRST_USER_CAT) . " ORDER BY pos ASC");
} else cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
$rowset = db_fetch_rowset($result);
$i = 100;
$sort_order = '';
if (count ($rowset) > 0) foreach ($rowset as $album) {
    $sort_order .= $album['aid'] . '@' . ($i++) . ',';
}

?>
        <form name="album_menu" method="post" action="delete.php?what=albmgr" onSubmit="return CheckAlbumForm(this);">
        <input type="hidden" name="delete_album" value="">
        <input type="hidden" name="sort_order" value="<?php echo $sort_order ?>">
        <td class="tableb" valign="top" align="center">
                <br>
                <table width="300" border="0" cellspacing="0" cellpadding="0">
<?php
if (GALLERY_ADMIN_MODE) {
    $CAT_LIST = array();
    $CAT_LIST[] = array(FIRST_USER_CAT + USER_ID, $lang_albmgr_php['my_gallery']);
    $CAT_LIST[] = array(0, $lang_albmgr_php['no_category']);
    get_subcat_data(0, '');

    echo <<<EOT
                <tr>
                        <td>
                                <b>{$lang_albmgr_php['select_category']}</b>
                                <select onChange="if(this.options[this.selectedIndex].value) window.location.href='$PHP_SELF?cat='+this.options[this.selectedIndex].value;"  name="cat" class="listbox">
EOT;
    foreach($CAT_LIST as $category) {
        echo '                                <option value="' . $category[0] . '"' . ($cat == $category[0] ? ' selected': '') . ">" . $category[1] . "</option>\n";
    }
    echo <<<EOT
                                </select>
                                <br /><br />
                        </td>
                </tr>

EOT;
}

?>
                <tr>
                        <td>
                                <select id="to" name="to[]" size="<?php echo min(max(count ($rowset) + 3, 15), 40) ?>" multiple onChange="Album_Select(this.selectedIndex);" class="listbox" style="width: 300px">
<?php
$i = 100;
$lb = '';
if (count ($rowset) > 0) foreach ($rowset as $album) {
    $lb .= '                                        <option value="album_no=' . $album['aid'] . ',album_nm=\'' . $album['title'] . '\',album_sort=' . ($i++) . ',action=0">' . stripslashes($album['title']) . "</option>\n";
}
echo $lb;

?>
                                </select>
                        </td>
                </tr>
                <tr>
                        <td>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                                        <td><a href="javascript:Moveup_Option();"><img src="images/move_up.gif" width="26" height="21" border="0"></a><a href="javascript:Movedown_Option();"><img src="images/move_down.gif" width="26" height="21" border="0"></a>
                                        </td>
                                        <td align="center" style="background-color: #D4D0C8; width: 80px; height: 21px; border-top: 1px solid White; border-left: 1px solid White; border-right: 1px solid #808080; border-bottom: 1px solid #808080;"><a href="javascript:Album_Delete();" style="color: Black; font-weight: bold;"><?php echo $lang_albmgr_php['delete'] ?></a>
                                        </td>
                                        <td align="center" style="width: 1px;"><img src="images/spacer.gif" width="1" alt=""><br>
                                        </td>
                                        <td align="center" style="background-color: #D4D0C8; width: 80px; height: 21px; border-top: 1px solid White; border-left: 1px solid White; border-right: 1px solid #808080; border-bottom: 1px solid #808080;"><a href="javascript:Album_Create();" style="color: Black; font-weight: bold;"><?php echo $lang_albmgr_php['new'] ?></a>
                                        </td>
                                </tr>
                                </table>
                        </td>
                </tr>
                <tr>
                        <td><br>
                                <input type="text" name="album_nm" size="27" maxlength="80" class="textinput" style="width: 300px;" onChange="Album_NameChange(this.value);" onKeyUp="Album_NameChange(this.value);">
                                <br>
                                <br>
                        </td>
                </tr>
        </table>
        </td>
</tr>
<tr>
        <td colspan="2" align="center" class="tablef">
        <input type="submit" class="button" value="<?php echo $lang_albmgr_php['apply_modifs'] ?>">
        </td>
        </form>
</tr>
<?php
endtable();
pagefooter();
ob_end_flush();

?>