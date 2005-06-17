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
// CVS version: $Id: catmgr.php,v 1.6 2004/07/24 15:03:52 gaugau Exp $
// ------------------------------------------------------------------------- //

define('IN_COPPERMINE', true);
define('CATMGR_PHP', true);

require('include/init.inc.php');

if (!GALLERY_ADMIN_MODE) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
// Fix categories that have an invalid parent
function fix_cat_table()
{
    global $CONFIG;

    $result = db_query("SELECT cid FROM {$CONFIG['TABLE_CATEGORIES']} WHERE 1");
    if (mysql_num_rows($result) > 0) {
        $set = '';
        while ($row = mysql_fetch_array($result)) $set .= $row['cid'] . ',';
        $set = '(' . substr($set, 0, -1) . ')';
        $sql = "UPDATE {$CONFIG['TABLE_CATEGORIES']} " . "SET parent = '0' " . "WHERE parent=cid OR parent NOT IN $set";
        $result = db_query($sql);
    }
}

function get_subcat_data($parent, $ident = '')
{
    global $CONFIG, $CAT_LIST;

    $sql = "SELECT cid, name, description " . "FROM {$CONFIG['TABLE_CATEGORIES']} " . "WHERE parent = '$parent' " . "ORDER BY pos";
    $result = db_query($sql);

    if (($cat_count = mysql_num_rows($result)) > 0) {
        $rowset = db_fetch_rowset($result);
        $pos = 0;
        foreach ($rowset as $subcat) {
            if ($pos > 0) {
                $CAT_LIST[] = array('cid' => $subcat['cid'],
                    'parent' => $parent,
                    'pos' => $pos++,
                    'prev' => $prev_cid,
                    'cat_count' => $cat_count,
                    'name' => $ident . $subcat['name']);
                $CAT_LIST[$last_index]['next'] = $subcat['cid'];
            } else {
                $CAT_LIST[] = array('cid' => $subcat['cid'],
                    'parent' => $parent,
                    'pos' => $pos++,
                    'cat_count' => $cat_count,
                    'name' => $ident . $subcat['name']);
            }
            $prev_cid = $subcat['cid'];
            $last_index = count($CAT_LIST) -1;
            get_subcat_data($subcat['cid'], $ident . '&nbsp;&nbsp;&nbsp;');
        }
    }
}

function update_cat_order()
{
    global $CAT_LIST, $CONFIG;

    foreach ($CAT_LIST as $category)
    db_query("UPDATE {$CONFIG['TABLE_CATEGORIES']} SET pos='{$category['pos']}' WHERE cid = '{$category['cid']}' LIMIT 1");
}

function cat_list_box($highlight = 0, $curr_cat, $on_change_refresh = true)
{
    global $CAT_LIST, $PHP_SELF,$lang_albmgr_php;

    if ($on_change_refresh) {
        $lb = <<< EOT
                        <select onChange="if(this.options[this.selectedIndex].value) window.location.href='$PHP_SELF?op=setparent&cid=$curr_cat&parent='+this.options[this.selectedIndex].value;"  name="parent" class="listbox">

EOT;
    } else {
        $lb = <<< EOT
                        <select name="parent" class="listbox">

EOT;
    }
    $lb .= '                        <option value="0"' . ($highlight == 0 ? ' selected': '') . '>' . $lang_albmgr_php['no_category'] . "</option>\n";
    foreach($CAT_LIST as $category) if ($category['cid'] != 1 && $category['cid'] != $curr_cat) {
        $lb .= '                        <option value="' . $category['cid'] . '"' . ($highlight == $category['cid'] ? ' selected': '') . ">" . $category['name'] . "</option>\n";
    } elseif ($category['cid'] != 1 && $category['cid'] == $curr_cat) {
        $lb .= '                        <option value="' . $category['parent'] . '"' . ($highlight == $category['cid'] ? ' selected': '') . ">" . $category['name'] . "</option>\n";
    }

    $lb .= <<<EOT
                        </select>

EOT;

    return $lb;
}

function form_alb_thumb()
{
    global $CONFIG, $lang_catmgr_php, $lang_modifyalb_php, $current_category, $cid;
    $results = db_query("SELECT pid, filepath, filename, url_prefix FROM {$CONFIG['TABLE_PICTURES']},{$CONFIG['TABLE_ALBUMS']} WHERE {$CONFIG['TABLE_PICTURES']}.aid = {$CONFIG['TABLE_ALBUMS']}.aid AND {$CONFIG['TABLE_ALBUMS']}.category = '$cid' AND approved='YES' ORDER BY filename");
    if (mysql_num_rows($results) == 0) {
        echo <<<EOT
        <tr>
                <td class="tableb" valign="top">
                        {$lang_modifyalb_php['alb_thumb']}
                </td>
                <td class="tableb" valign="top">
                        <i>{$lang_modifyalb_php['alb_empty']}</i>
                        <input type="hidden" name="thumb" value="0">
                </td>
        </tr>

EOT;
        return;
    }

    echo <<<EOT
<script language="JavaScript" type="text/JavaScript">
var Pic = new Array()

Pic[0] = 'images/nopic.jpg'

EOT;

    $initial_thumb_url = 'images/nopic.jpg';
    $img_list = array(0 => $lang_modifyalb_php['last_uploaded']);
    while ($picture = mysql_fetch_array($results)) {
        $thumb_url = get_pic_url($picture, 'thumb');
        echo "Pic[{$picture['pid']}] = '" . $thumb_url . "'\n";
        if ($picture['pid'] == $current_category['thumb']) $initial_thumb_url = $thumb_url;
        $img_list[$picture['pid']] = htmlspecialchars($picture['filename']);
    } // while
    echo <<<EOT

function ChangeThumb(index)
{
        document.images.Thumb.src = Pic[index]
}
</script>

EOT;
    $thumb_cell_height = $CONFIG['thumb_width'] + 17;
    echo <<<EOT
        <tr>
                <td class="tableb" valign="top">
                        {$lang_catmgr_php['cat_thumb']}
                </td>
                <td class="tableb" align="center">
                        <table cellspacing="0" cellpadding="5" border="0">
                                <tr>
                                        <td width="$thumb_cell_height" height="$thumb_cell_height" align="center"><img src="$initial_thumb_url" name='Thumb' class='image' /><br /></td>
                                </tr>
                        </table>
                        <select name="thumb" class="listbox" onChange="if(this.options[this.selectedIndex].value) ChangeThumb(this.options[this.selectedIndex].value);" onKeyUp="if(this.options[this.selectedIndex].value) ChangeThumb(this.options[this.selectedIndex].value);">

EOT;
    foreach($img_list as $pid => $pic_name) {
        echo '                                <option value="' . $pid . '"' . ($pid == $current_category['thumb'] ? ' selected':'') . '>' . $pic_name . "</option>\n";
    }
    echo <<<EOT
                        </select>
                </td>
        </tr>

EOT;
}

function display_cat_list()
{
    global $CAT_LIST, $PHP_SELF;

    $CAT_LIST3 = $CAT_LIST;

    foreach ($CAT_LIST3 as $key => $category) {
        echo "        <tr>\n";
        echo '                <td class="tableb" width="80%"><b>' . $category['name'] . '</b></td>' . "\n";

        if ($category['pos'] > 0) {
            echo '                <td class="tableb" width="4%"><a href="' . $PHP_SELF . '?op=move&cid1=' . $category['cid'] . '&pos1=' . ($category['pos']-1) . '&cid2=' . $category['prev'] . '&pos2=' . ($category['pos']) . '">' . '<img src="images/up.gif"  border="0">' . '</a></td>' . "\n";
        } else {
            echo '                <td class="tableb" width="4%">' . '&nbsp;' . '</td>' . "\n";
        }

        if ($category['pos'] < $category['cat_count']-1) {
            echo '                <td class="tableb" width="4%"><a href="' . $PHP_SELF . '?op=move&cid1=' . $category['cid'] . '&pos1=' . ($category['pos'] + 1) . '&cid2=' . $category['next'] . '&pos2=' . ($category['pos']) . '">' . '<img src="images/down.gif"  border="0">' . '</a></td>' . "\n";
        } else {
            echo '                <td class="tableb" width="4%">' . '&nbsp;' . '</td>' . "\n";
        }

        if ($category['cid'] != 1) {
            echo '                <td class="tableb" width="4%"><a href="' . $PHP_SELF . '?op=deletecat&cid=' . $category['cid'] . '" onClick="return confirmDel(\'' . addslashes(str_replace('&nbsp;', '', $category['name'])) . '\')">' . '<img src="images/delete.gif"  border="0">' . '</a></td>' . "\n";
        } else {
            echo '                <td class="tableb" width="4%">' . '&nbsp;' . '</td>' . "\n";
        }

        echo '                <td class="tableb" width="4%">' . '<a href="' . $PHP_SELF . '?op=editcat&cid=' . $category['cid'] . '">' . '<img src="images/edit.gif" border="0">' . '</a></td>' . "\n";
        echo '                <td class="tableb" width="4%">' . "\n" . cat_list_box($category['parent'], $category['cid']) . "\n" . '</td>' . "\n";
        echo "        </tr>\n";
    }
}

function verify_children($parent, $cid)
{
    global $CONFIG, $children;

    $sql = "SELECT cid " . "FROM {$CONFIG['TABLE_CATEGORIES']} " . "WHERE parent = '$parent' ";
    $result = db_query($sql);

    if (($cat_count = mysql_num_rows($result)) > 0) {
                while ($row = mysql_fetch_array($result)) {
                       $children[]=$row['cid'];
       // call this function again to this this
       // child's children
                       verify_children($row['cid'], $cid);
              }
    }
        return false;
}

$op = isset($HTTP_GET_VARS['op']) ? $HTTP_GET_VARS['op'] : '';
$current_category = array('cid' => '0', 'name' => '', 'parent' => '0', 'description' => '');

switch ($op) {
    case 'move':
        if (!isset($HTTP_GET_VARS['cid1']) || !isset($HTTP_GET_VARS['cid2']) || !isset($HTTP_GET_VARS['pos1']) || !isset($HTTP_GET_VARS['pos2'])) cpg_die(CRITICAL_ERROR, sprintf($lang_catmgr_php['miss_param'], 'move'), __FILE__, __LINE__);

        $cid1 = (int)$HTTP_GET_VARS['cid1'];
        $cid2 = (int)$HTTP_GET_VARS['cid2'];
        $pos1 = (int)$HTTP_GET_VARS['pos1'];
        $pos2 = (int)$HTTP_GET_VARS['pos2'];

        db_query("UPDATE {$CONFIG['TABLE_CATEGORIES']} SET pos='$pos1' WHERE cid = '$cid1' LIMIT 1");
        db_query("UPDATE {$CONFIG['TABLE_CATEGORIES']} SET pos='$pos2' WHERE cid = '$cid2' LIMIT 1");
        break;

    case 'setparent':
        if (!isset($HTTP_GET_VARS['cid']) || !isset($HTTP_GET_VARS['parent'])) cpg_die(CRITICAL_ERROR, sprintf($lang_catmgr_php['miss_param'], 'setparent'), __FILE__, __LINE__);

        $cid = (int)$HTTP_GET_VARS['cid'];
        $parent = (int)$HTTP_GET_VARS['parent'];
                $children=array();
                verify_children($cid, $cid);
                if (!in_array($parent, $children)){
                db_query("UPDATE {$CONFIG['TABLE_CATEGORIES']} SET parent='$parent', pos='-1' WHERE cid = '$cid' LIMIT 1");
                }else{
                        cpg_die(ERROR, "You cannot move a category into its own child", __FILE__, __LINE__);
                }
                break;

    case 'editcat':
        if (!isset($HTTP_GET_VARS['cid'])) cpg_die(CRITICAL_ERROR, sprintf($lang_catmgr_php['miss_param'], 'editcat'), __FILE__, __LINE__);

        $cid = (int)$HTTP_GET_VARS['cid'];
        $result = db_query("SELECT cid, name, parent, description, thumb FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = '$cid' LIMIT 1");

        if (!mysql_num_rows($result)) cpg_die(ERROR, $lang_catmgr_php['unknown_cat'], __FILE__, __LINE__);
        $current_category = mysql_fetch_array($result);
        break;

    case 'updatecat':
        if (!isset($HTTP_POST_VARS['cid']) || !isset($HTTP_POST_VARS['parent']) || !isset($HTTP_POST_VARS['name']) || !isset($HTTP_POST_VARS['description'])) cpg_die(CRITICAL_ERROR, sprintf($lang_catmgr_php['miss_param'], 'updatecat'), __FILE__, __LINE__);

                $name = trim($HTTP_POST_VARS['name']);
                if (empty($name)){
                        break;
                }


        $cid = (int)$HTTP_POST_VARS['cid'];
        $parent = (int)$HTTP_POST_VARS['parent'];
        $thumb = (int)$HTTP_POST_VARS['thumb'];
        $name = trim($HTTP_POST_VARS['name']) ? addslashes($HTTP_POST_VARS['name']) : '&lt;???&gt;';
        $description = addslashes($HTTP_POST_VARS['description']);
                $children=array();
                verify_children($cid, $cid);
                if (!in_array($parent, $children)){
                db_query("UPDATE {$CONFIG['TABLE_CATEGORIES']} SET parent='$parent', name='$name', description='$description', thumb='$thumb' WHERE cid = '$cid' LIMIT 1");
                }else{
                        db_query("UPDATE {$CONFIG['TABLE_CATEGORIES']} SET name='$name', description='$description', thumb='$thumb' WHERE cid = '$cid' LIMIT 1");
                }
        break;

    case 'createcat':
        if (!isset($HTTP_POST_VARS['parent']) || !isset($HTTP_POST_VARS['name']) || !isset($HTTP_POST_VARS['description'])) cpg_die(CRITICAL_ERROR, sprintf($lang_catmgr_php['miss_param'], 'createcat'), __FILE__, __LINE__);

                $name = trim($HTTP_POST_VARS['name']);

                if (empty($name)){
                        break;
                }


                $parent = (int)$HTTP_POST_VARS['parent'];
        $name = trim($HTTP_POST_VARS['name']) ? addslashes($HTTP_POST_VARS['name']) : '&lt;???&gt;';
        $description = addslashes($HTTP_POST_VARS['description']);

        db_query("INSERT INTO {$CONFIG['TABLE_CATEGORIES']} (pos, parent, name, description) VALUES ('10000', '$parent', '$name', '$description')");
        break;

    case 'deletecat':
        if (!isset($HTTP_GET_VARS['cid'])) cpg_die(CRITICAL_ERROR, sprintf($lang_catmgr_php['miss_param'], 'deletecat'), __FILE__, __LINE__);

        $cid = (int)$HTTP_GET_VARS['cid'];

        $result = db_query("SELECT parent FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = '$cid' LIMIT 1");
        if ($cid == 1) cpg_die(ERROR, $lang_catmgr_php['usergal_cat_ro'], __FILE__, __LINE__);
        if (!mysql_num_rows($result)) cpg_die(ERROR, $lang_catmgr_php['unknown_cat'], __FILE__, __LINE__);
        $del_category = mysql_fetch_array($result);
        $parent = $del_category['parent'];
        $result = db_query("UPDATE {$CONFIG['TABLE_CATEGORIES']} SET parent='$parent' WHERE parent = '$cid'");
        $result = db_query("UPDATE {$CONFIG['TABLE_ALBUMS']} SET category='$parent' WHERE category = '$cid'");
        $result = db_query("DELETE FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid='$cid' LIMIT 1");
        break;
}

fix_cat_table();
get_subcat_data(0);
update_cat_order();

pageheader($lang_catmgr_php['manage_cat']);
echo <<<EOT

<script language="javascript">
function confirmDel(catName)
{
    return confirm("{$lang_catmgr_php['confirm_delete']} (" + catName + ") ?");
}
</script>


EOT;

starttable('100%');

echo <<<EOT
        <tr>
                <td class="tableh1"><b><span class="statlink">{$lang_catmgr_php['category']}</span></b></td>
                <td colspan="4" class="tableh1" align="center"><b><span class="statlink">{$lang_catmgr_php['operations']}</span></b></td>
                <td class="tableh1" align="center"><b><span class="statlink">{$lang_catmgr_php['move_into']}</span></b></td>
        </tr>
        <form method="get" action="$PHP_SELF">

EOT;

display_cat_list();

echo <<<EOT
        </form>

EOT;

endtable();

echo "<br />\n";

starttable('100%', $lang_catmgr_php['update_create'], 2);
$lb = cat_list_box($current_category['parent'], $current_category['cid'], false);
$op = $current_category['cid'] ? 'updatecat' : 'createcat';
echo <<<EOT
        <form method="post" action="$PHP_SELF?op=$op">
        <input type="hidden" name="cid" value ="{$current_category['cid']}">
        <tr>
            <td width="40%" class="tableb">
                        {$lang_catmgr_php['parent_cat']}
        </td>
        <td width="60%" class="tableb" valign="top">
                $lb
                </td>
        </tr>
        <tr>
            <td width="40%" class="tableb">
                        {$lang_catmgr_php['cat_title']}
        </td>
        <td width="60%" class="tableb" valign="top">
                <input type="text" style="width: 100%" name="name" value="{$current_category['name']}" class="textinput">
                </td>
        </tr>
        <tr>
                <td class="tableb" valign="top">
                        {$lang_catmgr_php['cat_desc']}
                </td>
                <td class="tableb" valign="top">
                        <textarea name="description" ROWS="5" COLS="40" SIZE="9"  WRAP="virtual" STYLE="WIDTH: 100%;" class="textinput">{$current_category['description']}</textarea>
                </td>
        </tr>
EOT;

form_alb_thumb();

echo <<<EOT
        <tr>
                <td colspan="2" align="center" class="tablef">
                <input type="submit" value="{$lang_catmgr_php['update_create']}" class="button">
                </td>
                </form>
        </tr>

EOT;

endtable();
pagefooter();
ob_end_flush();

?>
