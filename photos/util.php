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
// CVS version: $Id: util.php,v 1.8 2004/08/08 22:11:17 caspershadow Exp $
// ------------------------------------------------------------------------- //

// USER CONFIGURATION
// Default number of pictures to process at a time when rebuilding thumbs or normals:
$defpicnum = 45;
// END USER CONFIGURATION

define('IN_COPPERMINE', true);
define('UTIL_PHP', true);

require('include/init.inc.php');
require('include/picmgmt.inc.php');

pageheader($lang_util_php['title']);

if (!GALLERY_ADMIN_MODE) die('Access denied');

global $albumtbl, $picturetbl, $categorytbl, $usertbl, $lang_util_php;
$albumtbl = $CONFIG['TABLE_PREFIX'] . 'albums';
$picturetbl = $CONFIG['TABLE_PREFIX'] . 'pictures';
$categorytbl = $CONFIG['TABLE_PREFIX'] . 'categories';
$usertbl = $CONFIG['TABLE_PREFIX'] . 'users';

// initialize vars
$startpic = '';
$action = "";
$action = $_POST['action'];


MYSQL_CONNECT($CONFIG['dbserver'], $CONFIG['dbuser'], $CONFIG['dbpass']) or die("can't connect to mysql server");
MYSQL_SELECT_DB($CONFIG['dbname']);

function my_flush()
{
    print str_repeat(" ", 4096); // force a flush
}

function filenametotitle($delete)
{
    $albumid = $_POST['albumid'];
    $parsemode = $_POST['parsemode'];
    global $picturetbl, $lang_util_php;

    $query = "SELECT * FROM $picturetbl WHERE aid = '$albumid'";
    $result = MYSQL_QUERY($query);
    $num = mysql_numrows($result);

    $i = 0;
    while ($i < $num) {
        $filename = mysql_result($result, $i, "filename");
        $pid = mysql_result($result, $i, "pid");
        // //////////////////////////////////////////
        // ADD YOUR OWN PARSEMODES HERE //
        // /////////////////////////////////////////
        $pattern = "/(\d+)(.)(\d+)(.)(\d+)(.)(\d+)(.)(\d+)(.)(\d+)(.+)/";

        if ($delete == '0') {
            if ($parsemode == 0) {
                // REMOVE .JPG AND REPLACE _ WITH [ ]
                $filename = substr($filename, 0, -4);
                $newtitle = str_replace("_", " ", $filename);
            } else if ($parsemode == 1) {
                // CHANGE 2003_11_23_13_20_20.jpg TO 23/11/2003 13:20
                $newtitle = str_replace("%20", " ", $filename);
                $replacement = "$5/$3/$1 $7:$9";
                $newtitle = preg_replace($pattern, $replacement, $filename);
            } else if ($parsemode == 2) {
                // CHANGE 2003_11_23_13_20_20.jpg TO 11/23/2003 13:20
                $newtitle = str_replace("%20", " ", $filename);
                $replacement = "$3/$5/$1 $7:$9";
                $newtitle = preg_replace($pattern, $replacement, $filename);
            } else if ($parsemode == 3) {
                // CHANGE 2003_11_23_13_20_20.jpg TO 13:20
                $newtitle = str_replace("%20", " ", $filename);
                $replacement = "$7:$9";
                $newtitle = preg_replace($pattern, $replacement, $filename);
            }
        } else {
            $newtitle = '';
        }

        print $lang_util_php['file'] . ': '.$filename.' ' . $lang_util_php['title_set_to'] . ':'. $newtitle.'<br />';
        my_flush();

        $query = "UPDATE $picturetbl SET title='$newtitle' WHERE pid='$pid' ";
        MYSQL_QUERY($query);

        ++$i;
    }
}

function filloptions()
{
    global $albumtbl, $picturetbl, $categorytbl, $usertbl, $lang_util_php;

    $query = "SELECT aid, category, IF(user_name IS NOT NULL, CONCAT('(', user_name, ') ',title), CONCAT(' - ', title)) AS title " . "FROM $albumtbl AS a " . "LEFT JOIN $usertbl AS u ON category = (" . FIRST_USER_CAT . " + user_id) " . "ORDER BY category, title";
    $result = db_query($query);
    // $num=mysql_numrows($result);
    echo '<select size="1" name="albumid">';

    while ($row = mysql_fetch_array($result)) {
        $sql = "SELECT name FROM $categorytbl WHERE cid = " . $row["category"];
        $result2 = db_query($sql);
        $row2 = mysql_fetch_array($result2);

        print "<option value=\"" . $row["aid"] . "\">" . $row2["name"] . $row["title"] . "</option>\n";
    }

    print '</select> (3)';
    print '&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="'.$lang_util_php['submit_form'].'" class="submit" /> (4)';
    print '</form>';
}

function updatethumbs()
{
    global $picturetbl, $CONFIG, $lang_util_php;
    $phpself = $_SERVER['PHP_SELF'];
    $albumid = $_POST['albumid'];
    $updatetype = $_POST['updatetype'];
    $numpics = $_POST['numpics'];
    $startpic = 0;
    $startpic = $_POST['startpic'];

    $query = "SELECT * FROM $picturetbl WHERE aid = '$albumid'";
    $result = MYSQL_QUERY($query);
    $totalpics = mysql_numrows($result);

    if ($startpic == 0) {
        // 0 - numpics
        $num = $totalpics;
        // Over picture limit
        if ($totalpics > $numpics) $num = $startpic + $numpics;
    } else {
        // startpic - numpics
        $num = $startpic + $numpics;
        if ($num > $totalpics) $num = $totalpics;
    }

    $i = $startpic;
    while ($i < $num) {
        $image = $CONFIG['fullpath'] . mysql_result($result, $i, "filepath") . mysql_result($result, $i, "filename");

        if ($updatetype == 0 || $updatetype == 2) {
            $thumb = $CONFIG['fullpath'] . mysql_result($result, $i, "filepath") . $CONFIG['thumb_pfx'] . mysql_result($result, $i, "filename");

            if (resize_image($image, $thumb, $CONFIG['thumb_width'], $CONFIG['thumb_method'], $CONFIG['thumb_use'])) {
                print $thumb .' '. $lang_util_php['updated_succesfully'] . '!<br />';
                my_flush();
            } else {
                print $lang_util_php['error_create'] . ':$thumb<br />';
                my_flush();
            }
        }

        if ($updatetype == 1 || $updatetype == 2) {
            $normal = $CONFIG['fullpath'] . mysql_result($result, $i, "filepath") . $CONFIG['normal_pfx'] . mysql_result($result, $i, "filename");

            $imagesize = getimagesize($image);
            if (max($imagesize[0], $imagesize[1]) > $CONFIG['picture_width'] && $CONFIG['make_intermediate']) {
                if (resize_image($image, $normal, $CONFIG['picture_width'], $CONFIG['thumb_method'], $CONFIG['thumb_use'])) {
                    print $normal . $lang_util_php['updated_succesfully'] . '!<br />';
                    my_flush();
                } else {
                    print $lang_util_php['error_create'] . ':$normal<br />';
                    my_flush();
                }
            }
        }

        ++$i;
    }
    $startpic = $i;

    if ($startpic < $totalpics) {

        ?>
            <form action=<?php echo $phpself;
        ?> method="post">
                    <input type="hidden" name="action" value="continuethumbs" />
                    <input type="hidden" name="numpics" value="<?php echo $numpics?>" />
                    <input type="hidden" name="startpic" value="<?php echo $startpic?>" />
                    <input type="hidden" name="updatetype" value="<?php echo $updatetype?>" />
            <input type="hidden" name="albumid" value="<?php echo $albumid?>" />
            <input type="submit" value="<?php print $lang_util_php['continue'];
        ?>" class="submit" /></form>
                    <?php
    }
}

function deleteorig()
{
    global $picturetbl, $CONFIG, $lang_util_php;
    $albumid = $_POST['albumid'];

    $query = "SELECT * FROM $picturetbl WHERE aid = '$albumid'";
    $result = MYSQL_QUERY($query);
    $num = mysql_numrows($result);

    $i = 0;
    while ($i < $num) {
        $pid = mysql_result($result, $i, "pid");
        $image = $CONFIG['fullpath'] . mysql_result($result, $i, "filepath") . mysql_result($result, $i, "filename");
        $normal = $CONFIG['fullpath'] . mysql_result($result, $i, "filepath") . $CONFIG['normal_pfx'] . mysql_result($result, $i, "filename");
        $thumb = $CONFIG['fullpath'] . mysql_result($result, $i, "filepath") . $CONFIG['thumb_pfx'] . mysql_result($result, $i, "filename");

        if (file_exists($normal)) {
			unlink($image);
			$test = rename($normal, $image);
            if ($test == true) {
                $imagesize = getimagesize($image);
                $image_filesize = filesize($image);
                $total_filesize = $image_filesize + filesize($thumb);

                $query = "UPDATE $picturetbl SET filesize='$image_filesize' WHERE pid='$pid' ";
                MYSQL_QUERY($query);

                $query = "UPDATE $picturetbl SET total_filesize='$total_filesize' WHERE pid='$pid' ";
                MYSQL_QUERY($query);

                $query = "UPDATE $picturetbl SET pwidth='{$imagesize[0]}' WHERE pid='$pid' ";
                MYSQL_QUERY($query);

                $query = "UPDATE $picturetbl SET pheight='{$imagesize[1]}' WHERE pid='$pid' ";
                MYSQL_QUERY($query);
                printf($lang_util_php['main_success'], $normal);
                print '!<br>';
            } else {
                printf($lang_util_php['error_rename'], $normal, $image);
            }
        } else {
            printf($lang_util_php['error_not_found'], $normal);
            print '<br>';
        }

        ++$i;
    }
}

function deleteorphans()
{
        global $picturetbl, $CONFIG, $lang_util_php;
        $phpself = $_SERVER['PHP_SELF'];
        $del = $_POST['del'];
        $single = $_POST['single'];
        $count = 0;

        if ($single) {
          $delone = db_query("DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id=$single") or die ("failed to delete msgs - " . mysql_error());
        }

        $result = db_query("SELECT pid,msg_id,msg_body FROM {$CONFIG['TABLE_COMMENTS']} WHERE 1");

        while ($row = mysql_fetch_array($result)) {
                $pid = $row['pid'];
                $msg_id = $row['msg_id'];
                $msg_body = $row['msg_body'];
                $result2 = db_query("SELECT * FROM {$CONFIG['TABLE_PICTURES']} WHERE pid=$pid");
                if (!mysql_num_rows($result2)) {
                        if ($del == "all")
                        {
                        $Deletions = db_query("DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id=$msg_id") or die ("failed to delete msgs - " . mysql_error());
                        } else {
                                $count++;
                                ?>
                                <form action=<?php echo $phpself;?> method="post">
                                <input type="hidden" name="action" value="delorphans" />
                                <input type="hidden" name="single" value="<?php echo $msg_id; ?>" />
                                <?php echo $lang_util_php['comment'].' "'.$msg_body.'" '.$lang_util_php['nonexist'].' '.$pid; ?>
                                <input type="submit" value="<?php print $lang_util_php['delete'];?>" class="submit" /></form>
                                 <?php
                        }
                }

        }

        echo '<br>'.$count.' '.$lang_util_php['orphan_comment'].'<br><br>';
        if ($count>=1) {
        ?>
        <form action=<?php echo $phpself;?> method="post">
        <input type="hidden" name="action" value="delorphans" />
        <input type="hidden" name="del" value="all" />
        Delete all orphans?
        <input type="submit" value="<?php print $lang_util_php['delete_all'];?>" class="submit" /></form>
         <?php
        }
}


$phpself = $_SERVER['PHP_SELF'];
// start output
print '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>' . $lang_util_php['title'] . '</title>
</head>
<style type="text/css">
.labelradio { cursor : hand;}
/*.accesskey {text-decoration:underline}*/
</style>
<body>';

if ($action == 'thumbs') {
    global $picturetbl, $CONFIG;

    print '<a href="' . $phpself . '">' . $lang_util_php['back'] . '</a><br />';
    print '<h2>' . $lang_util_php['thumbs_wait'] . '</h2>';

    updatethumbs();

    echo '<br /><a href="' . $phpself . '">' . $lang_util_php['back'] . '</a>';
} else if ($action == 'continuethumbs') {
    print '<a href="' . $phpself . '">' . $lang_util_php['back'] . '</a><br />';
    print '<h2>' . $lang_util_php['thumbs_continue_wait'] . '</h2>';

    updatethumbs();

    echo '<br /><a href="' . $phpself . '">' . $lang_util_php['back'] . '</a>';
} else if ($action == 'title') {
    echo '<a href="' . $phpself . '">' . $lang_util_php['back'] . '</a><br />';
    print '<h2>' . $lang_util_php['titles_wait'] . '</h2>';

    filenametotitle(0);

    echo '<br /><a href="' . $phpself . '">' . $lang_util_php['back'] . '</a>';
} else if ($action == 'deltit') {
    print '<a href="' . $phpself . '">' . $lang_util_php['back'] . '</a><br />';
    print '<h2>' . $lang_util_php['delete_wait'] . '</h2>';

    filenametotitle(1);

    echo '<br /><a href="' . $phpself . '">' . $lang_util_php['back'] . '</a>';
} else if ($action == 'delnorm') {
    print '<a href="' . $phpself . '">' . $lang_util_php['back'] . '</a><br />';
    print '<h2>' . $lang_util_php['replace_wait'] . '</h2>';

    deleteorig();

    echo '<br /><a href="' . $phpself . '">' . $lang_util_php['back'] . '</a>';
} else if ($action == 'delorphans') {
    deleteorphans();
    echo '<br /><a href="' . $phpself . '">' . $lang_util_php['back'] . '</a>';
} else {
    starttable('100%');

    print '<tr><td>';
    starttable('100%', $lang_util_php['title'] . ' (util.mod)', 2);
    print '<tr><td class="tablef"><b>';
    print $lang_util_php['what_it_does'] . '</b>:
<ul style="margin-top:0px;margin-bottom:0px;list-style-type:square">
<li>' . $lang_util_php['what_update_titles'] . '</li>
<li>' . $lang_util_php['what_delete_title'] . '</li>
<li>' . $lang_util_php['what_rebuild'] . '</li>
<li>' . $lang_util_php['what_delete_originals'] . '</li>
</ul></td>
<td class="tableb"><b>
' . $lang_util_php['instruction'] . '</b>:
<br />
(1) ' . $lang_util_php['instruction_action'] . '<br />
(2) ' . $lang_util_php['instruction_parameter'] . '<br />
(3) ' . $lang_util_php['instruction_album'] . '<br />
(4) ';
    printf($lang_util_php['instruction_press'], $lang_util_php['submit_form']);
    print '
';

    print '</td></tr>';
    endtable();
    print '<br />
<form action="' . $phpself . '" method="post">
';

    starttable('100%', '<input type="radio" name="action" checked="checked" value="thumbs" id="thumbs" class="nobg" /><label for="thumbs" accesskey="t" class="labelradio">' . $lang_util_php['update'] . '</label> (1)');
    print '
<tr><td>
' . $lang_util_php['update_what'] . ' (2):<br />
<input type="radio" name="updatetype" value="0" id="thumb" class="nobg" /><label for="thumb" accesskey="t" class="labelradio">' . $lang_util_php['update_thumb'] . '</label><br />
<input type="radio" name="updatetype" value="1" id="resized" class="nobg" /><label for="resized" accesskey="r" class="labelradio">' . $lang_util_php['update_pic'] . '</label><br />
<input type="radio" name="updatetype" value="2" checked="checked" id="all" class="nobg" /><label for="all" accesskey="a" class="labelradio">' . $lang_util_php['update_both'] . '</label><br />
' . $lang_util_php['update_number'] . '
<input type="text" name="numpics" value="' . $defpicnum . '" size="5" /><br />
' . $lang_util_php['update_option'] . '<br /><br />
</td></tr>';
    endtable();

    print '<br />';

    starttable('100%', '<input type="radio" name="action" value="title" id="title" class="nobg" /><label for="title" accesskey="F" class="labelradio">' . $lang_util_php['filename_title'] . '</label> (1)');
    print '
<tr><td>
' . $lang_util_php['filename_how'] . ' (2):<br />
<input type="radio" name="parsemode" checked="checked" value="0" id="remove" class="nobg" /><label for="remove" accesskey="s" class="labelradio">' . $lang_util_php['filename_remove'] . '</label><br />
<input type="radio" name="parsemode" value="1" id="euro" class="nobg" /><label for="euro" accesskey="e" class="labelradio">' . $lang_util_php['filename_euro'] . '</label><br />
<input type="radio" name="parsemode" value="2" id="us" class="nobg" /><label for="us" accesskey="u" class="labelradio">' . $lang_util_php['filename_us'] . '</label><br />
<input type="radio" name="parsemode" value="3" id="hour" class="nobg" /><label for="hour" accesskey="h" class="labelradio">' . $lang_util_php['filename_time'] . '</label><br /><br />
</td></tr>';
    endtable();

    print '<br />';

    starttable('100%', '<input type="radio" name="action" value="deltit" id="deltit" class="nobg" /><label for="deltit" accesskey="D" class="labelradio">' . $lang_util_php['delete_title'] . '</label> (1)');
    endtable();
    print '<br />';

    starttable('100%', '<input type="radio" name="action" value="delorphans" id="delorphans" class="nobg" /><label for="delorphans" accesskey="O" class="labelradio">' . $lang_util_php['delete_orphans'] . '</label> (1)');
    endtable();
    print '<br />';

    starttable('100%', '<input type="radio" name="action" value="delnorm" id="delnorm" class="nobg" /><label for="delnorm" accesskey="e" class="labelradio">' . $lang_util_php['delete_original'] . '</label> (1)');
    endtable();
    print '<br />';

    starttable('100%', '<a href="phpinfo.php">' . $lang_util_php['phpinfo'] . '</a> (1)');
    endtable();
    print '<br />';

    starttable('100%', '<a href="update.php">' . $lang_util_php['update_db'] . '</a> (1)');
    print '<tr><td>'.$lang_util_php['update_db_explanation'].'</td></tr>';
    endtable();
    print '<br />';

    print '&nbsp;<br />';

    print '<h2>'.$lang_util_php['select_album'].'</h2>';

    if (defined('UDB_INTEGRATION')) {
        udb_util_filloptions();
    } else {
        filloptions();
    }

}
print '</td></tr>';
endtable();
echo 'Util.mod 1.4 - Created by David Alberg Holm';
pagefooter();
ob_end_flush();

?>
