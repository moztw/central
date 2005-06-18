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
  $Source: /cvsroot/coppermine/stable/include/functions.inc.php,v $
  $Revision: 1.24 $
  $Author: gaugau $
  $Date: 2005/04/19 03:17:11 $
**********************************************/

/**************************************************************************
   Function for managing cookie saved user profile
 **************************************************************************/

// Decode the user profile contained in a cookie
function user_get_profile()
{
        global $CONFIG, $USER, $HTTP_COOKIE_VARS;

        if (isset($HTTP_COOKIE_VARS[$CONFIG['cookie_name'].'_data'])) {
                $USER = @unserialize(@base64_decode($HTTP_COOKIE_VARS[$CONFIG['cookie_name'].'_data']));
        }

        if (!isset($USER['ID']) || strlen($USER['ID']) != 32) {
                list($usec, $sec) = explode(' ', microtime());
                $seed = (float) $sec + ((float) $usec * 100000);
                srand($seed);
                $USER=array('ID' => md5(uniqid(rand(),1)));
        } else {
                $USER['ID'] = addslashes($USER['ID']);
        }

        if (!isset($USER['am'])) $USER['am'] = 1;
}

// Save the user profile in a cookie
function user_save_profile()
{
        global $CONFIG, $USER, $HTTP_SERVER_VARS;

        $data = base64_encode(serialize($USER));
        setcookie($CONFIG['cookie_name'].'_data', $data, time()+86400*30, $CONFIG['cookie_path']);
}

/**************************************************************************
   Database functions
 **************************************************************************/

// Connect to the database
function cpg_db_connect()
{
        global $CONFIG;
        $result = @mysql_connect($CONFIG['dbserver'], $CONFIG['dbuser'], $CONFIG['dbpass']);
        if (!$result)
                return false;
        if (!mysql_select_db($CONFIG['dbname']))
                return false;
        return $result;
}

// Perform a database query
function db_query($query, $link_id = 0)
{
        global $CONFIG, $query_stats, $queries;

        $query_start = cpgGetMicroTime();
        if (($link_id)) {
            $result = mysql_query($query, $link_id);
        } else {
                $result = mysql_query($query);
        }
        $query_end = cpgGetMicroTime();
        if (isset($CONFIG['debug_mode']) && (($CONFIG['debug_mode']==1) || ($CONFIG['debug_mode']==2) )) {
                $query_stats[] = $query_end - $query_start;
                $queries[] = $query;
        }
        if (!$result) db_error("While executing query \"$query\" on $link_id");

        return $result;
}

// Error message if a query failed
function db_error($the_error)
{
        global $CONFIG;

        if (!$CONFIG['debug_mode']) {
            cpg_die(CRITICAL_ERROR, 'There was an error while processing a database query', __FILE__, __LINE__);
        } else {

                $the_error .= "\n\nmySQL error: ".mysql_error()."\n";

                $out = "<br />There was an error while processing a database query.<br /><br/>
                    <form name='mysql'><textarea rows=\"8\" cols=\"60\">".htmlspecialchars($the_error)."</textarea></form>";

            cpg_die(CRITICAL_ERROR, $out, __FILE__, __LINE__);
        }
}

// Fetch all rows in an array
function db_fetch_rowset($result)
{
        $rowset = array();

        while ($row = mysql_fetch_array($result)) $rowset[] = $row;

        return $rowset;
}

/**************************************************************************
   Utilities functions
 **************************************************************************/

//define ('LOC','YToyOntzOjE6ImwiO3M6OToie0dBTExFUll9IjtzOjE6InMiO3M6MTY5OiI8ZGl2IGNsYXNzPSJmb290ZXIiIGFsaWduPSJjZW50ZXIiIHN0eWxlPSJwYWRkaW5nLXRvcDogMTBweDsiPlBvd2VyZWQgYnkgPGEgaHJlZj0iaHR0cDovL3d3dy5jaGV6Z3JlZy5uZXQvY29wcGVybWluZS8iIHRhcmdldD0iX2JsYW5rIj5Db3BwZXJtaW5lIFBob3RvIEdhbGxlcnk8L2E+PC9kaXY+Ijt9');
 define ('LOC','YToyOntzOjE6ImwiO3M6OToie0dBTExFUll9IjtzOjE6InMiO3M6MTU5OiI8ZGl2IGNsYXNzPSJmb290ZXIiIGFsaWduPSJjZW50ZXIiIHN0eWxlPSJwYWRkaW5nLXRvcDogMTBweDsiPlBvd2VyZWQgYnkgPGEgaHJlZj0iaHR0cDovL2NvcHBlcm1pbmUuc2YubmV0LyIgdGFyZ2V0PSJfYmxhbmsiPkNvcHBlcm1pbmUgUGhvdG8gR2FsbGVyeTwvYT48L2Rpdj4iO30=');
// Replacement for the die function
function cpg_die($msg_code, $msg_text,  $error_file, $error_line, $output_buffer = false)
{
        global $CONFIG, $lang_cpg_die, $template_cpg_die;

        // Simple output if theme file is not loaded
        if(!function_exists('pageheader')){
                echo 'Fatal error :<br />'.$msg_text;
                exit;
        }

    $ob = ob_get_contents();
        if ($ob) ob_end_clean();

        if(!$CONFIG['debug_mode']) template_extract_block($template_cpg_die, 'file_line');
        if(!$output_buffer && !$CONFIG['debug_mode']) template_extract_block($template_cpg_die, 'output_buffer');

        $params = array(
                '{MESSAGE}' => $msg_text,
                '{FILE_TXT}' => $lang_cpg_die['file'],
                '{FILE}' => $error_file,
                '{LINE_TXT}' => $lang_cpg_die['line'],
                '{LINE}' => $error_line,
                '{OUTPUT_BUFFER}' => $ob,
        );

        pageheader($lang_cpg_die[$msg_code]);
        starttable(-1, $lang_cpg_die[$msg_code]);
        echo template_eval($template_cpg_die, $params);
        endtable();
        pagefooter();
        exit;
}

// Display a localised date
function localised_date($timestamp = -1, $datefmt)
{
    global $lang_month, $lang_day_of_week;

    if ($timestamp == -1) {
        $timestamp = time();
    }

    $date = ereg_replace('%[aA]', $lang_day_of_week[(int)strftime('%w', $timestamp)], $datefmt);
    $date = ereg_replace('%[bB]', $lang_month[(int)strftime('%m', $timestamp)-1], $date);

    return strftime($date, $timestamp);
}

// Function to create correct URLs for image name with space or exotic characters
function path2url($path)
{
        return str_replace("%2F","/",rawurlencode($path));
}

// Display a 'message box like' table
function msg_box($title, $msg_text, $button_text="", $button_link="", $width="-1")
{
        global $template_msg_box;

        if (!$button_text) {
            template_extract_block($template_msg_box, 'button');
        }

        $params = array(
                '{MESSAGE}' => $msg_text,
                '{LINK}' => $button_link,
                '{TEXT}' => $button_text
        );

        starttable($width, $title);
        echo template_eval($template_msg_box, $params);
        endtable();
}

function create_tabs($items, $curr_page, $total_pages, $template)
{
        global $CONFIG;

        if (function_exists('theme_create_tabs')) {
            theme_create_tabs($items, $curr_page, $total_pages, $template);
                return;
        }

        $maxTab = $CONFIG['max_tabs'];

        $tabs = sprintf($template['left_text'], $items, $total_pages);
        if (($total_pages == 1)) return $tabs;

        $tabs .= $template['tab_header'];
        if ($curr_page == 1) {
                $tabs .= sprintf($template['active_tab'], 1);
        } else {
                $tabs .= sprintf($template['inactive_tab'], 1, 1);
        }
        if ($total_pages > $maxTab){
                $start = max(2, $curr_page - floor(($maxTab -2)/2));
                $start = min($start, $total_pages - $maxTab +2);
                $end = $start + $maxTab -3;
        } else {
                $start = 2;
                $end = $total_pages-1;
        }
        for ($page = $start ; $page <= $end; $page++) {
                if ($page == $curr_page) {
                        $tabs .= sprintf($template['active_tab'], $page);
                } else {
                        $tabs .= sprintf($template['inactive_tab'], $page, $page);
                }
        }
        if ($total_pages > 1){
                if ($curr_page == $total_pages) {
                        $tabs .= sprintf($template['active_tab'], $total_pages);
                } else {
                        $tabs .= sprintf($template['inactive_tab'], $total_pages, $total_pages);
                }
        }
        return $tabs.$template['tab_trailer'];
}

/**
 * Rewritten by Nathan Codding - Feb 6, 2001. Taken from phpBB code
 * - Goes through the given string, and replaces xxxx://yyyy with an HTML <a> tag linking
 *         to that URL
 * - Goes through the given string, and replaces www.xxxx.yyyy[zzzz] with an HTML <a> tag linking
 *         to http://www.xxxx.yyyy[/zzzz]
 * - Goes through the given string, and replaces xxxx@yyyy with an HTML mailto: tag linking
 *                to that email address
 * - Only matches these 2 patterns either after a space, or at the beginning of a line
 *
 * Notes: the email one might get annoying - it's easy to make it more restrictive, though.. maybe
 * have it require something like xxxx@yyyy.zzzz or such. We'll see.
 */
function make_clickable($text)
{
        $ret = " " . $text;
        $ret = preg_replace("#([\n ])([a-z]+?)://([a-z0-9\-\.,\?!%\*_\#:;~\\&$@\/=\+]+)#i", "\\1<a href=\"\\2://\\3\" target=\"_blank\">\\2://\\3</a>", $ret);
        $ret = preg_replace("#([\n ])www\.([a-z0-9\-]+)\.([a-z0-9\-.\~]+)((?:/[a-z0-9\-\.,\?!%\*_\#:;~\\&$@\/=\+]*)?)#i", "\\1<a href=\"http://www.\\2.\\3\\4\" target=\"_blank\">www.\\2.\\3\\4</a>", $ret);
        $ret = preg_replace("#([\n ])([a-z0-9\-_.]+?)@([\w\-]+\.([\w\-\.]+\.)?[\w]+)#i", "\\1<a href=\"mailto:\\2@\\3\">\\2@\\3</a>", $ret);
        $ret = substr($ret, 1);

        return($ret);
}

// Allow the use of a limited set of phpBB bb codes in albums and image descriptions
// Taken from phpBB code
function bb_decode($text)
{
        $text = nl2br($text);

        static $bbcode_tpl = array();
        static $patterns = array();
        static $replacements = array();

        // First: If there isn't a "[" and a "]" in the message, don't bother.
        if ((strpos($text, "[") === false || strpos($text, "]") === false))
        {
                return $text;
        }

        // [b] and [/b] for bolding text.
        $text = str_replace("[b]", '<b>', $text);
        $text = str_replace("[/b]", '</b>', $text);

        // [u] and [/u] for underlining text.
        $text = str_replace("[u]", '<u>', $text);
        $text = str_replace("[/u]", '</u>', $text);

        // [i] and [/i] for italicizing text.
        $text = str_replace("[i]", '<i>', $text);
        $text = str_replace("[/i]", '</i>', $text);

        // colours
        $text = preg_replace("/\[color=(\#[0-9A-F]{6}|[a-z]+)\]/", '<span style="color:$1">', $text);
        $text = str_replace("[/color]", '</span>', $text);

        // [i] and [/i] for italicizing text.
        //$text = str_replace("[i:$uid]", $bbcode_tpl['i_open'], $text);
        //$text = str_replace("[/i:$uid]", $bbcode_tpl['i_close'], $text);

        if (!count($bbcode_tpl)) {
                // We do URLs in several different ways..
                $bbcode_tpl['url']  = '<span class="bblink"><a href="{URL}" target="_blank">{DESCRIPTION}</a></span>';
                $bbcode_tpl['email']= '<span class="bblink"><a href="mailto:{EMAIL}">{EMAIL}</a></span>';

                $bbcode_tpl['url1'] = str_replace('{URL}', '\\1\\2', $bbcode_tpl['url']);
                $bbcode_tpl['url1'] = str_replace('{DESCRIPTION}', '\\1\\2', $bbcode_tpl['url1']);

                $bbcode_tpl['url2'] = str_replace('{URL}', 'http://\\1', $bbcode_tpl['url']);
                $bbcode_tpl['url2'] = str_replace('{DESCRIPTION}', '\\1', $bbcode_tpl['url2']);

                $bbcode_tpl['url3'] = str_replace('{URL}', '\\1\\2', $bbcode_tpl['url']);
                $bbcode_tpl['url3'] = str_replace('{DESCRIPTION}', '\\3', $bbcode_tpl['url3']);

                $bbcode_tpl['url4'] = str_replace('{URL}', 'http://\\1', $bbcode_tpl['url']);
                $bbcode_tpl['url4'] = str_replace('{DESCRIPTION}', '\\2', $bbcode_tpl['url4']);

                $bbcode_tpl['email'] = str_replace('{EMAIL}', '\\1', $bbcode_tpl['email']);

                // [url]xxxx://www.phpbb.com[/url] code..
                $patterns[1] = "#\[url\]([a-z]+?://){1}([a-z0-9\-\.,\?!%\*_\#:;~\\&$@\/=\+\(\)]+)\[/url\]#si";
                $replacements[1] = $bbcode_tpl['url1'];

                // [url]www.phpbb.com[/url] code.. (no xxxx:// prefix).
                $patterns[2] = "#\[url\]([a-z0-9\-\.,\?!%\*_\#:;~\\&$@\/=\+\(\)]+)\[/url\]#si";
                $replacements[2] = $bbcode_tpl['url2'];

                // [url=xxxx://www.phpbb.com]phpBB[/url] code..
                $patterns[3] = "#\[url=([a-z]+?://){1}([a-z0-9\-\.,\?!%\*_\#:;~\\&$@\/=\+\(\)]+)\](.*?)\[/url\]#si";
                $replacements[3] = $bbcode_tpl['url3'];

                // [url=www.phpbb.com]phpBB[/url] code.. (no xxxx:// prefix).
                $patterns[4] = "#\[url=([a-z0-9\-\.,\?!%\*_\#:;~\\&$@\/=\+\(\)]+)\](.*?)\[/url\]#si";
                $replacements[4] = $bbcode_tpl['url4'];

                // [email]user@domain.tld[/email] code..
                $patterns[5] = "#\[email\]([a-z0-9\-_.]+?@[\w\-]+\.([\w\-\.]+\.)?[\w]+)\[/email\]#si";
                $replacements[5] = $bbcode_tpl['email'];

                // [img]xxxx://www.phpbb.com[/img] code..
                $bbcode_tpl['img']  = '<img src="{URL}" >';
                $bbcode_tpl['img']  = str_replace('{URL}', '\\1\\2', $bbcode_tpl['img']);

                $patterns[6] = "#\[img\]([a-z]+?://){1}([a-z0-9\-\.,\?!%\*_\#:;~\\&$@\/=\+\(\)]+)\[/img\]#si";
                $replacements[6] = $bbcode_tpl['img'];

        }

        $text = preg_replace($patterns, $replacements, $text);

        return $text;
}

/**************************************************************************
   Template functions
 **************************************************************************/

// Load and parse the template.html file
function load_template()
{
        global $THEME_DIR, $CONFIG, $template_header, $template_footer;

        $tmpl_loc = array();
        $tmpl_loc = unserialize(base64_decode(LOC));

        if (file_exists(TEMPLATE_FILE)) {
            $template_file = TEMPLATE_FILE;
        } elseif (file_exists($THEME_DIR . TEMPLATE_FILE)) {
            $template_file = $THEME_DIR . TEMPLATE_FILE;
        } else die("<b>Coppermine critical error</b>:<br />Unable to load template file ".TEMPLATE_FILE."!</b>");

        $template = fread(fopen($template_file, 'r'), filesize($template_file));
        $gallery_pos = strpos($template, '{LANGUAGE_SELECT_FLAGS}');
        $template = str_replace('{LANGUAGE_SELECT_FLAGS}', languageSelect('flags') ,$template);
        $gallery_pos = strpos($template, '{LANGUAGE_SELECT_LIST}');
        $template = str_replace('{LANGUAGE_SELECT_LIST}', languageSelect('list') ,$template);
        $gallery_pos = strpos($template, '{THEME_DIR}');
        $template = str_replace('{THEME_DIR}', $THEME_DIR ,$template);
        $gallery_pos = strpos($template, '{THEME_SELECT_LIST}');
        $template = str_replace('{THEME_SELECT_LIST}', themeSelect('list') ,$template);
        $gallery_pos = strpos($template, $tmpl_loc['l']);
        $template = str_replace($tmpl_loc['l'], $tmpl_loc['s'] ,$template);

        $template_header = substr($template, 0, $gallery_pos);
        $template_footer = substr($template, $gallery_pos);
        $add_version_info = '<!--Coppermine Photo Gallery '.COPPERMINE_VERSION.'--></body>';
        $template_footer = ereg_replace("</body[^>]*>",$add_version_info,$template_footer);
}

// Eval a template (substitute vars with values)
function template_eval(&$template, &$vars)
{
        return strtr($template, $vars);
}


// Extract and return block '$block_name' from the template, the block is replaced by $subst
function template_extract_block(&$template, $block_name, $subst='')
{
        $pattern = "#(<!-- BEGIN $block_name -->)(.*?)(<!-- END $block_name -->)#s";
        if ( !preg_match($pattern, $template, $matches)){
                die('<b>Template error<b><br />Failed to find block \''.$block_name.'\'('.htmlspecialchars($pattern).') in :<br /><pre>'.htmlspecialchars($template).'</pre>');
        }
        $template = str_replace($matches[1].$matches[2].$matches[3], $subst, $template);
        return $matches[2];
}

/**************************************************************************
   Functions for album/picture management
 **************************************************************************/

// Get the list of albums that the current user can't see
function get_private_album_set()
{
        if (GALLERY_ADMIN_MODE) return;
        global $CONFIG, $ALBUM_SET, $USER_DATA, $FORBIDDEN_SET;

        if ($USER_DATA['can_see_all_albums']) return;

        $result = db_query("SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE visibility != '0' AND visibility !='".(FIRST_USER_CAT + USER_ID)."' AND visibility NOT IN ".USER_GROUP_SET);
        if ((mysql_num_rows($result))) {
                $set ='';
            while($album=mysql_fetch_array($result)){
                    $set .= $album['aid'].',';
            } // while
                $FORBIDDEN_SET = "p.aid NOT IN (".substr($set, 0, -1).') ';
                $ALBUM_SET .= 'AND aid NOT IN ('.substr($set, 0, -1).') ';
        }
        mysql_free_result($result);
}

// Retrieve the data for a picture or a set of picture
function get_pic_data($album, &$count, &$album_name, $limit1=-1, $limit2=-1, $set_caption = true)
{
        global $USER, $CONFIG, $ALBUM_SET, $CURRENT_CAT_NAME, $CURRENT_ALBUM_KEYWORD, $HTTP_GET_VARS, $HTML_SUBST, $THEME_DIR, $FAVPICS;
        global $album_date_fmt, $lastcom_date_fmt, $lastup_date_fmt, $lasthit_date_fmt;
        global $lang_get_pic_data, $lang_meta_album_names, $lang_errors;

        $sort_array = array('na' => 'filename ASC', 'nd' => 'filename DESC', 'ta'=>'title ASC', 'td'=>'title DESC', 'da' => 'pid ASC', 'dd' => 'pid DESC');
        $sort_code = isset($USER['sort'])? $USER['sort'] : $CONFIG['default_sort_order'];
        $sort_order = isset($sort_array[$sort_code]) ? $sort_array[$sort_code] : $sort_array[$CONFIG['default_sort_order']];
        $limit = ($limit1 != -1) ? ' LIMIT '. $limit1 : '';
        $limit .= ($limit2 != -1) ? ' ,'. $limit2 : '';

        if ($limit2 == 1) {
            $select_columns = '*';
        } else {
            $select_columns = 'pid, filepath, filename, url_prefix, filesize, pwidth, pheight, ctime, aid';
        }

        // Keyword
        if (!empty($CURRENT_ALBUM_KEYWORD)){
                $keyword = "OR keywords like '%$CURRENT_ALBUM_KEYWORD%'";
        } else $keyword = '';

        // Regular albums
        if ((is_numeric($album))) {
                $album_name_keyword = get_album_name($album);
                $album_name = $album_name_keyword['title'];
                $album_keyword = $album_name_keyword['keyword'];

                if (!empty($album_keyword)){
                        $keyword = "OR keywords like '%$album_keyword%'";
                }

                $approved = GALLERY_ADMIN_MODE ? '' : 'AND approved=\'YES\'';

                $result = db_query("SELECT COUNT(*) from {$CONFIG['TABLE_PICTURES']} WHERE aid='$album' $keyword $approved $ALBUM_SET");
                $nbEnr = mysql_fetch_array($result);
                $count = $nbEnr[0];
                mysql_free_result($result);

                if($select_columns != '*') $select_columns .= ', title, caption,hits,owner_id,owner_name';

                $result = db_query("SELECT $select_columns from {$CONFIG['TABLE_PICTURES']} WHERE aid='$album' $keyword $approved $ALBUM_SET ORDER BY $sort_order $limit");
                $rowset = db_fetch_rowset($result);
                mysql_free_result($result);
                // Set picture caption
                if ($set_caption) foreach ($rowset as $key => $row){

                        $caption = "<span class=\"thumb_title\">";
                        $caption .= ($rowset[$key]['title']||$rowset[$key]['hits']) ? $rowset[$key]['title'] : '';

            if ($CONFIG['views_in_thumbview']){
               if ($rowset[$key]['title']){$caption .= "&nbsp;&ndash;&nbsp;";}
            $caption .= sprintf($lang_get_pic_data['n_views'], $rowset[$key]['hits']);
            }
                 $caption .= "</span>";


                        if ($CONFIG['caption_in_thumbview']){
                           $caption .= $rowset[$key]['caption'] ? "<span class=\"thumb_caption\">".bb_decode(($rowset[$key]['caption']))."</span>" : '';
                        }
                        if ($CONFIG['display_comment_count']) {
                                $comments_nr = count_pic_comments($row['pid']);
                                if ($comments_nr > 0) $caption .= "<span class=\"thumb_num_comments\">".sprintf($lang_get_pic_data['n_comments'], $comments_nr )."</span>";
                        }

                        if ($CONFIG['display_uploader']){
                                $caption .= '<span class="thumb_title"><a href ="profile.php?uid='.$rowset[$key]['owner_id'].'">'.$rowset[$key]['owner_name'].'</a></span>';
                        }

                        $rowset[$key]['caption_text'] = $caption;

                }

                return $rowset;
        }


        // Meta albums
        switch($album){
        case 'lastcom': // Last comments
                if ($ALBUM_SET && $CURRENT_CAT_NAME) {
                        $album_name = $album_name = $lang_meta_album_names['lastcom'].' - '. $CURRENT_CAT_NAME;
                } else {
                        $album_name = $lang_meta_album_names['lastcom'];
                }
                $query = "SELECT COUNT(*) from {$CONFIG['TABLE_COMMENTS']}, {$CONFIG['TABLE_PICTURES']}  WHERE approved = 'YES' AND {$CONFIG['TABLE_COMMENTS']}.pid = {$CONFIG['TABLE_PICTURES']}.pid $keyword $ALBUM_SET";
                $result = db_query($query);

                $nbEnr = mysql_fetch_array($result);
                $count = $nbEnr[0];
                mysql_free_result($result);

                if($select_columns == '*'){
                        $select_columns = 'p.*';
                } else {
                        $select_columns = str_replace('pid', 'c.pid', $select_columns).', msg_id, author_id, msg_author, UNIX_TIMESTAMP(msg_date) as msg_date, msg_body, aid';
                }

                $TMP_SET = str_replace($CONFIG['TABLE_PICTURES'],'p',$ALBUM_SET);
                $result = db_query("SELECT $select_columns FROM {$CONFIG['TABLE_COMMENTS']} as c, {$CONFIG['TABLE_PICTURES']} as p WHERE approved = 'YES' AND c.pid = p.pid $keyword $TMP_SET ORDER by msg_id DESC $limit");


                $rowset = db_fetch_rowset($result);
                mysql_free_result($result);

                if ($set_caption) foreach ($rowset as $key => $row){
                        if ($row['author_id']) {
                            $user_link = '<a href ="profile.php?uid='.$row['author_id'].'">'.$row['msg_author'].'</a>';
                        } else {
                                $user_link = $row['msg_author'];
                        }
                        $msg_body = strlen($row['msg_body']) > 50 ? @substr($row['msg_body'],0,50)."...": $row['msg_body'];
                        if ($CONFIG['enable_smilies']) $msg_body = process_smilies($msg_body);
                        $caption = '<span class="thumb_title">'.$user_link.'</span>'.'<span class="thumb_caption">'.localised_date($row['msg_date'], $lastcom_date_fmt).'</span>'.'<span class="thumb_caption">'.$msg_body.'</span>';
                        $rowset[$key]['caption_text'] = $caption;
                }
                return $rowset;
                break;

        case 'lastcomby': // Last comments by a specific user
                if (isset($USER['uid'])) {
                        $uid = (int)$USER['uid'];
                } else {
                        $uid = -1;
                }

                $user_name = get_username($uid);
                if ($ALBUM_SET && $CURRENT_CAT_NAME) {
                        $album_name = $album_name = $lang_meta_album_names['lastcom'].' - '. $CURRENT_CAT_NAME .' - '. $user_name;
                } else {
                        $album_name = $lang_meta_album_names['lastcom'].' - '. $user_name;
                }
                $result = db_query("SELECT COUNT(*) from {$CONFIG['TABLE_COMMENTS']}, {$CONFIG['TABLE_PICTURES']}  WHERE approved = 'YES' AND author_id = '$uid' AND {$CONFIG['TABLE_COMMENTS']}.pid = {$CONFIG['TABLE_PICTURES']}.pid $ALBUM_SET");
                $nbEnr = mysql_fetch_array($result);
                $count = $nbEnr[0];
                mysql_free_result($result);

                if($select_columns == '*'){
                        $select_columns = 'p.*';
                } else {
                        $select_columns = str_replace('pid', 'c.pid', $select_columns).', msg_id, author_id, msg_author, UNIX_TIMESTAMP(msg_date) as msg_date, msg_body, aid';
                }

                $result = db_query("SELECT $select_columns FROM {$CONFIG['TABLE_COMMENTS']} as c, {$CONFIG['TABLE_PICTURES']} as p WHERE approved = 'YES' AND author_id = '$uid' AND c.pid = p.pid $ALBUM_SET ORDER by msg_id DESC $limit");
                $rowset = db_fetch_rowset($result);
                mysql_free_result($result);

                if ($set_caption) foreach ($rowset as $key => $row){
                        if ($row['author_id']) {
                            $user_link = '<a href ="profile.php?uid='.$row['author_id'].'">'.$row['msg_author'].'</a>';
                        } else {
                                $user_link = $row['msg_author'];
                        }

                        $caption = '<span class="thumb_title">'.$user_link.'</span>'.'<span class="thumb_caption">'.localised_date($row['msg_date'], $lastcom_date_fmt).'</span>'.'<span class="thumb_caption">'.$row['msg_body'].'</span>';
                        $rowset[$key]['caption_text'] = $caption;
                }
                return $rowset;
                break;

        case 'lastup': // Last uploads
                if ($ALBUM_SET && $CURRENT_CAT_NAME) {
                        $album_name = $lang_meta_album_names['lastup'].' - '. $CURRENT_CAT_NAME;
                } else {
                        $album_name = $lang_meta_album_names['lastup'];
                }

                $result = db_query("SELECT COUNT(*) from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' $ALBUM_SET");
                $nbEnr = mysql_fetch_array($result);
                $count = $nbEnr[0];
                mysql_free_result($result);

                if($select_columns != '*' ) $select_columns .= ',title, caption, owner_id, owner_name, aid';

                $result = db_query("SELECT $select_columns FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' $ALBUM_SET ORDER BY pid DESC $limit");

                $rowset = db_fetch_rowset($result);
                mysql_free_result($result);

                if ($set_caption) foreach ($rowset as $key => $row){
                        $user_link = ($CONFIG['display_uploader'] && $row['owner_id'] && $row['owner_name']) ? '<span class="thumb_title"><a href ="profile.php?uid='.$row['owner_id'].'">'.$row['owner_name'].'</a></span>' : '';
                        $caption = $user_link.'<span class="thumb_caption">'.localised_date($row['ctime'], $lastup_date_fmt).'</span>';
                        $rowset[$key]['caption_text'] = $caption;
                }
                return $rowset;
                break;

        case 'lastupby': // Last uploads by a specific user
                if (isset($USER['uid'])) {
                        $uid = (int)$USER['uid'];
                } else {
                        $uid = -1;
                }

                $user_name = get_username($uid);
                if ($ALBUM_SET && $CURRENT_CAT_NAME) {
                        $album_name = $lang_meta_album_names['lastup'].' - '. $CURRENT_CAT_NAME .' - '. $user_name;
                } else {
                        $album_name = $lang_meta_album_names['lastup'] .' - '. $user_name;
                }

                $result = db_query("SELECT COUNT(*) from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' AND owner_id = '$uid' $ALBUM_SET");
                $nbEnr = mysql_fetch_array($result);
                $count = $nbEnr[0];
                mysql_free_result($result);

                if($select_columns != '*' ) $select_columns .= ', owner_id, owner_name, aid';

                $result = db_query("SELECT $select_columns FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' AND owner_id = '$uid' $ALBUM_SET ORDER BY pid DESC $limit");

                $rowset = db_fetch_rowset($result);
                mysql_free_result($result);

                if ($set_caption) foreach ($rowset as $key => $row){
                        if ($row['owner_id'] && $row['owner_name']) {
                            $user_link = '<span class="thumb_title"><a href ="profile.php?uid='.$row['owner_id'].'">'.$row['owner_name'].'</a></span>';
                        } else {
                                $user_link = '';
                        }
                        $caption = $user_link.'<span class="thumb_caption">'.localised_date($row['ctime'], $lastup_date_fmt).'</span>';
                        $rowset[$key]['caption_text'] = $caption;
                }
                return $rowset;
                break;

        case 'topn': // Most viewed pictures
                if ($ALBUM_SET && $CURRENT_CAT_NAME) {
                        $album_name = $lang_meta_album_names['topn'].' - '. $CURRENT_CAT_NAME;
                } else {
                        $album_name = $lang_meta_album_names['topn'];
                }
                $query ="SELECT COUNT(*) from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' AND hits > 0  $ALBUM_SET $keyword";

                $result = db_query($query);
                $nbEnr = mysql_fetch_array($result);
                $count = $nbEnr[0];
                mysql_free_result($result);

                if($select_columns != '*') $select_columns .= ', hits, aid, filename';

                $result = db_query("SELECT $select_columns FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES'AND hits > 0 $ALBUM_SET $keyword ORDER BY hits DESC, filename  $limit");

                $rowset = db_fetch_rowset($result);
                mysql_free_result($result);

                if ($set_caption) foreach ($rowset as $key => $row){
                        $caption = "<span class=\"thumb_caption\">".sprintf($lang_get_pic_data['n_views'], $row['hits']).'</span>';
                        $rowset[$key]['caption_text'] = $caption;
                }
                return $rowset;
                break;

        case 'toprated': // Top rated pictures
                if ($ALBUM_SET && $CURRENT_CAT_NAME) {
                        $album_name = $lang_meta_album_names['toprated'].' - '. $CURRENT_CAT_NAME;
                } else {
                        $album_name = $lang_meta_album_names['toprated'];
                }
                $result = db_query("SELECT COUNT(*) from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' AND votes >= '{$CONFIG['min_votes_for_rating']}' $ALBUM_SET");
                $nbEnr = mysql_fetch_array($result);
                $count = $nbEnr[0];
                mysql_free_result($result);

                if($select_columns != '*') $select_columns .= ', pic_rating, votes, aid';

                $result = db_query("SELECT $select_columns FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' AND votes >= '{$CONFIG['min_votes_for_rating']}' $ALBUM_SET ORDER BY ROUND((pic_rating+1)/2000) DESC, votes DESC, filename $limit");
                $rowset = db_fetch_rowset($result);
                mysql_free_result($result);

                if ($set_caption) foreach ($rowset as $key => $row){
                        if (defined('THEME_HAS_RATING_GRAPHICS')) {
                            $prefix= $THEME_DIR;
                        } else {
                            $prefix= '';
                        }
                        $caption = "<span class=\"thumb_caption\">".'<img src="'.$prefix.'images/rating'.round($row['pic_rating']/2000).'.gif" align="absmiddle"/>'.'<br />'.sprintf($lang_get_pic_data['n_votes'], $row['votes']).'</span>';
                        $rowset[$key]['caption_text'] = $caption;
                }
                return $rowset;
                break;

        case 'lasthits': // Last viewed pictures
                if ($ALBUM_SET && $CURRENT_CAT_NAME) {
                        $album_name = $lang_meta_album_names['lasthits'].' - '. $CURRENT_CAT_NAME;
                } else {
                        $album_name = $lang_meta_album_names['lasthits'];
                }
                $result = db_query("SELECT COUNT(*) from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' $ALBUM_SET");
                $nbEnr = mysql_fetch_array($result);
                $count = $nbEnr[0];
                mysql_free_result($result);

                if($select_columns != '*') $select_columns .= ', UNIX_TIMESTAMP(mtime) as mtime, aid';

                $result = db_query("SELECT $select_columns FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' $ALBUM_SET ORDER BY mtime DESC $limit");
                $rowset = db_fetch_rowset($result);
                mysql_free_result($result);

                if ($set_caption) foreach ($rowset as $key => $row){
                        $caption = "<span class=\"thumb_caption\">".localised_date($row['mtime'], $lasthit_date_fmt).'</span>';
                        $rowset[$key]['caption_text'] = $caption;
                }
                return $rowset;
                break;

        case 'random': // Random pictures
                if ($ALBUM_SET && $CURRENT_CAT_NAME) {
                        $album_name = $lang_meta_album_names['random'].' - '. $CURRENT_CAT_NAME;
                } else {
                        $album_name = $lang_meta_album_names['random'];
                }
                $result = db_query("SELECT COUNT(*) from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' $ALBUM_SET");
                $nbEnr = mysql_fetch_array($result);
                $pic_count = $nbEnr[0];
                mysql_free_result($result);

                if($select_columns != '*') $select_columns .= ', aid';

                // if we have more than 1000 pictures, we limit the number of picture returned
                // by the SELECT statement as ORDER BY RAND() is time consuming
                                /* Commented out due to image not found bug
                if ($pic_count > 1000) {
                    $result = db_query("SELECT COUNT(*) from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES'");
                        $nbEnr = mysql_fetch_array($result);
                        $total_count = $nbEnr[0];
                        mysql_free_result($result);

                        $granularity = floor($total_count / RANDPOS_MAX_PIC);
                        $cor_gran = ceil($total_count / $pic_count);
                        srand(time());
                        for ($i=1; $i<= $cor_gran; $i++) $random_num_set =rand(0, $granularity).', ';
                        $random_num_set = substr($random_num_set,0, -2);
                        $result = db_query("SELECT $select_columns FROM {$CONFIG['TABLE_PICTURES']} WHERE  randpos IN ($random_num_set) AND approved = 'YES' $ALBUM_SET ORDER BY RAND() LIMIT $limit2");
                } else {
                                */
                $sql = "SELECT $select_columns FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' $ALBUM_SET ORDER BY RAND() LIMIT $limit2";
                $result = db_query($sql);

                $rowset = array();
                while($row = mysql_fetch_array($result)){
                        $row['caption_text'] = '';
                        $rowset[-$row['pid']] = $row;
                }
                mysql_free_result($result);

                return $rowset;
                break;

        case 'search': // Search results
                if (isset($USER['search'])) {
                        $search_string = $USER['search'];
                } else {
                        $search_string = '';
                }

                if (substr($search_string, 0, 3) == '###') {
                    $query_all = 1;
                        $search_string = substr($search_string, 3);
                } else {
                    $query_all = 0;
                }

                if ($ALBUM_SET && $CURRENT_CAT_NAME) {
                        $album_name = $lang_meta_album_names['search'].' - '. $CURRENT_CAT_NAME;
                } else {
                        $album_name = $lang_meta_album_names['search'].' - "'. strtr($search_string, $HTML_SUBST) . '"';
                }

                include 'include/search.inc.php';
                return $rowset;
                break;

        case 'lastalb': // Last albums to which uploads
                if ($ALBUM_SET && $CURRENT_CAT_NAME) {
                        $album_name = $lang_meta_album_names['lastalb'].' - '. $CURRENT_CAT_NAME;
                } else {
                        $album_name = $lang_meta_album_names['lastalb'];
                }


                $ALBUM_SET = str_replace( "aid", $CONFIG['TABLE_PICTURES'].".aid" , $ALBUM_SET );

                $result = db_query("SELECT COUNT(*) from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' $ALBUM_SET");
                $nbEnr = mysql_fetch_array($result);
                $count = $nbEnr[0];
                mysql_free_result($result);

                $result = db_query("SELECT *,{$CONFIG['TABLE_ALBUMS']}.title AS title,{$CONFIG['TABLE_ALBUMS']}.aid AS aid  FROM {$CONFIG['TABLE_PICTURES']},{$CONFIG['TABLE_ALBUMS']} WHERE {$CONFIG['TABLE_PICTURES']}.aid = {$CONFIG['TABLE_ALBUMS']}.aid AND approved = 'YES' $ALBUM_SET GROUP  BY {$CONFIG['TABLE_PICTURES']}.aid ORDER BY {$CONFIG['TABLE_PICTURES']}.ctime DESC $limit");
                $rowset = db_fetch_rowset($result);
                mysql_free_result($result);

                if ($set_caption) foreach ($rowset as $key => $row){
                        $caption = "<span class=\"thumb_caption\">".$row['title']." - ".localised_date($row['ctime'], $lastup_date_fmt).'</span>';
                        $rowset[$key]['caption_text'] = $caption;
                }
                return $rowset;
                break;

        case 'favpics': // Favourite Pictures

                $album_name = $lang_meta_album_names['favpics'];
                                $rowset = array();
                if (count($FAVPICS)>0){
                        $favs = implode(",",$FAVPICS);
                        $result = db_query("SELECT COUNT(*) from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' AND pid IN ($favs)");
                        $nbEnr = mysql_fetch_array($result);
                        $count = $nbEnr[0];
                        mysql_free_result($result);

                        $select_columns = '*';

                        $result = db_query("SELECT $select_columns FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES'AND pid IN ($favs) $limit");
                        $rowset = db_fetch_rowset($result);

                        mysql_free_result($result);

                        if ($set_caption) foreach ($rowset as $key => $row){
                                $caption = $rowset[$key]['title'] ? "<span class=\"thumb_caption\">".($rowset[$key]['title'])."</span>" : '';
                                $rowset[$key]['caption_text'] = $caption;
                        }
                }
                return $rowset;
                break;

        default : // Invalid meta album
        cpg_die(ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
        }
} // End of get_pic_data


// Get the name of an album
function get_album_name($aid)
{
        global $CONFIG;
        global $lang_errors;

        $result = db_query("SELECT title,keyword from {$CONFIG['TABLE_ALBUMS']} WHERE aid='$aid'");
        $count = mysql_num_rows($result);
        if ($count > 0) {
                $row = mysql_fetch_array($result);
                return $row;
        } else {
                cpg_die(ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
        }
}

// Return the name of a user
function get_username($uid)
{
        global $CONFIG;

        $uid = (int)$uid;

        if (!$uid) {
            return 'Anonymous';
        } elseif (defined('UDB_INTEGRATION')) {
           return udb_get_user_name($uid);
        } else {
                $result = db_query("SELECT user_name FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '".$uid."'");
                if (mysql_num_rows($result) == 0) return '';
                $row = mysql_fetch_array($result);
                mysql_free_result($result);
                return $row['user_name'];
        }
}

// Return the ID of a user
function get_userid($username)
{
        global $CONFIG;

        $username = addslashes($username);

        if (!$username) {
            return 0;
        } elseif (defined('UDB_INTEGRATION')) { // (Altered to fix banning w/ bb integration - Nibbler)
           return udb_get_user_id($username);
        } else {
                $result = db_query("SELECT user_id FROM {$CONFIG['TABLE_USERS']} WHERE user_name = '".$username."'");
                if (mysql_num_rows($result) == 0) return 0;
                $row = mysql_fetch_array($result);
                mysql_free_result($result);
                return $row['user_id'];
        }
}

// Return the total number of comments for a certain picture
function count_pic_comments($pid, $skip=0)
{
        global $CONFIG;
        $result = db_query("SELECT count(*) from {$CONFIG['TABLE_COMMENTS']} where pid=$pid and msg_id!=$skip");
        $nbEnr = mysql_fetch_array($result);
        $count = $nbEnr[0];
        mysql_free_result($result);

        return $count;
}

// Add 1 everytime a picture is viewed.
function add_hit($pid)
{
        global $CONFIG;

        db_query("UPDATE {$CONFIG['TABLE_PICTURES']} SET hits=hits+1 WHERE pid='$pid'");
}


// Build the breadcrumb
function breadcrumb($cat, &$breadcrumb, &$BREADCRUMB_TEXT)
{
        global $album, $lang_errors, $lang_list_categories;
        global $CONFIG,$CURRENT_ALBUM_DATA, $CURRENT_CAT_NAME;
        if ($cat != 0) { //Categories other than 0 need to be selected
                $breadcrumb_array = array();
                if ($cat >= FIRST_USER_CAT) {
                        $user_name = get_username($cat - FIRST_USER_CAT);
                        if (!$user_name) $user_name = 'Mr. X';

                        $breadcrumb_array[] = array($cat, $user_name);
                        $CURRENT_CAT_NAME = sprintf($lang_list_categories['xx_s_gallery'], $user_name);
                        $row['parent'] = 1;
                } else {
                    $result = db_query("SELECT name, parent FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = '$cat'");
                        if (mysql_num_rows($result) == 0) cpg_die(CRITICAL_ERROR, $lang_errors['non_exist_cat'], __FILE__, __LINE__);
                        $row = mysql_fetch_array($result);

                        $breadcrumb_array[] = array($cat, $row['name']);
                        $CURRENT_CAT_NAME = $row['name'];
                        mysql_free_result($result);
                }

                while($row['parent'] != 0){
                    $result = db_query("SELECT cid, name, parent FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = '{$row['parent']}'");
                        if (mysql_num_rows($result) == 0) cpg_die(CRITICAL_ERROR, $lang_errors['orphan_cat'], __FILE__, __LINE__);
                        $row = mysql_fetch_array($result);

                        $breadcrumb_array[] = array($row['cid'], $row['name']);
                        mysql_free_result($result);
                } // while

                $breadcrumb_array = array_reverse($breadcrumb_array);
                $breadcrumb = '<a href="index.php">'.$lang_list_categories['home'].'</a>';
                $BREADCRUMB_TEXT = $lang_list_categories['home'];

                foreach ($breadcrumb_array as $category){
                        $link = "<a href=\"index.php?cat={$category[0]}\">{$category[1]}</a>";
                        $breadcrumb .= ' > ' . $link;
                        $BREADCRUMB_TEXT .= ' > ' . $category[1];
                }

        }else{ //Dont bother just add the Home link  to breadcrumb
                $breadcrumb = '<a href="index.php">'.$lang_list_categories['home'].'</a>';
                $BREADCRUMB_TEXT = $lang_list_categories['home'];
        }
        //Add Link for album if aid is set
        if (isset($CURRENT_ALBUM_DATA['aid'])){
                $link = "<a href=\"thumbnails.php?album=".$CURRENT_ALBUM_DATA['aid']."\">".$CURRENT_ALBUM_DATA['title']."</a>";
                $breadcrumb .= ' > ' . $link;
                $BREADCRUMB_TEXT .= ' > ' . $CURRENT_ALBUM_DATA['title'];
        }
}





/**************************************************************************

 **************************************************************************/

// Compute image geometry based on max width / height
function compute_img_size($width, $height, $max)
{
         global $CONFIG;
        $thumb_use=$CONFIG['thumb_use'];
        if($thumb_use=='ht') {
          $ratio = $height / $max;
        } elseif($thumb_use=='wd') {
          $ratio = $width / $max;
        } else {
          $ratio = max($width, $height) / $max;
        }
        if ($ratio > 1.0) {
                $image_size['reduced'] = true;
        }
        $ratio = max($ratio, 1.0);
        $image_size['width'] = ceil($width / $ratio);
        $image_size['height'] = ceil($height / $ratio);
        $image_size['whole'] = 'width="'.$image_size['width'].'" height="'.$image_size['height'].'"';
        if($thumb_use=='ht') {
          $image_size['geom'] = ' height="'.$image_size['height'].'"';
        } elseif($thumb_use=='wd') {
          $image_size['geom'] = 'width="'.$image_size['width'].'"';
        } else {
          $image_size['geom'] = 'width="'.$image_size['width'].'" height="'.$image_size['height'].'"';
        }



        return $image_size;
}

// Prints thumbnails of pictures in an album
function display_thumbnails($album, $cat, $page, $thumbcols, $thumbrows, $display_tabs)
{
        global $CONFIG, $AUTHORIZED, $HTTP_GET_VARS;
        global $album_date_fmt, $lang_display_thumbnails, $lang_errors, $lang_byte_units;

        $thumb_per_page = $thumbcols * $thumbrows;
        $lower_limit = ($page-1) * $thumb_per_page;

        $pic_data = get_pic_data($album, $thumb_count, $album_name, $lower_limit, $thumb_per_page);

        $total_pages = ceil($thumb_count / $thumb_per_page);

        $i = 0;
        if (count($pic_data) > 0) {
                foreach ($pic_data as $key => $row) {
                        $i++;

                        $pic_title =$lang_display_thumbnails['filename'].$row['filename']."\n".
                                $lang_display_thumbnails['filesize'].($row['filesize'] >> 10).$lang_byte_units[1]."\n".
                                $lang_display_thumbnails['dimensions'].$row['pwidth']."x".$row['pheight']."\n".
                                $lang_display_thumbnails['date_added'].localised_date($row['ctime'], $album_date_fmt);

                        $pic_url =  get_pic_url($row, 'thumb');
                        if (!is_image($row['filename'])) {
                                $image_info = getimagesize($pic_url);
                                $row['pwidth'] = $image_info[0];
                                $row['pheight'] = $image_info[1];
                        }

                        $image_size = compute_img_size($row['pwidth'], $row['pheight'], $CONFIG['thumb_width']);

                        $thumb_list[$i]['pos'] = $key < 0 ? $key : $i - 1 + $lower_limit;
                        $thumb_list[$i]['image'] = "<img src=\"" . $pic_url . "\" class=\"image\" {$image_size['geom']} border=\"0\" alt=\"{$row['filename']}\" title=\"$pic_title\">";
                        $thumb_list[$i]['caption'] = $row['caption_text'];
                        $thumb_list[$i]['admin_menu'] = '';
                        $thumb_list[$i]['aid'] = $row['aid'];
                }
                theme_display_thumbnails($thumb_list, $thumb_count, $album_name, $album, $cat, $page, $total_pages, is_numeric($album), $display_tabs);
        } else {
                theme_no_img_to_display($album_name);
        }
}

/**
 * Return an array containing the system thumbs in a directory
 */
function cpg_get_system_thumb_list($search_folder = 'images/')
{
        global $CONFIG;
        static $thumbs = array();

        $folder = 'images/';

        $thumb_pfx =& $CONFIG['thumb_pfx'];
        // If thumb array is empty get list from coppermine 'images' folder
        if ((count($thumbs) == 0) && ($folder == $search_folder)) {
                $dir = opendir($folder);
                while (($file = readdir($dir))!==false) {
                        if (is_file($folder . $file) && strpos($file,$thumb_pfx) === 0) {
                                // Store filenames in an array
                                $thumbs[] = array('filename' => $file);
                        }
                }
                closedir($dir);
                return $thumbs;
        } elseif ($folder == $search_folder) {
                // Search folder is the same as coppermine images folder; just return the array
                return $thumbs;
        } else {
                // Search folder is the different; check for files in the given folder
                $results = array();
                foreach ($thumbs as $thumb) {
                        if (is_file($search_folder.$thumb['filename'])) {
                                $results[] = array('filename' => $thumb['filename']);
                        }
                }
                return $results;
        }
}

// Prints thumbnails of pictures in an album
function display_film_strip($album, $cat, $pos)
{
        global $CONFIG, $AUTHORIZED, $HTTP_GET_VARS;
        global $album_date_fmt, $lang_display_thumbnails, $lang_errors, $lang_byte_units;
        $max_item=$CONFIG['max_film_strip_items'];
        //$thumb_per_page = $pos+$CONFIG['max_film_strip_items'];
        $thumb_per_page = $max_item*2;
        $l_limit = max(0,$pos-$CONFIG['max_film_strip_items']);
        $new_pos=max(0,$pos-$l_limit);

        $pic_data = get_pic_data($album, $thumb_count, $album_name, $l_limit, $thumb_per_page);

        if (count($pic_data) < $max_item ){
                $max_item = count($pic_data);
        }
        $lower_limit=3;

        if(!isset($pic_data[$new_pos+1])) {
           $lower_limit=$new_pos-$max_item+1;
        } else if(!isset($pic_data[$new_pos+2])) {
           $lower_limit=$new_pos-$max_item+2;
        } else if(!isset($pic_data[$new_pos-1])) {
           $lower_limit=$new_pos;
        } else {
          $hf=$max_item/2;
          $ihf=(int)($max_item/2);
          if($new_pos > $hf ) {
             //if($max_item%2==0) {
               //$lower_limit=
             //} else {
             {
               $lower_limit=$new_pos-$ihf;
             }
          }
          elseif($new_pos < $hf ) { $lower_limit=0; }
        }

        $pic_data=array_slice($pic_data,$lower_limit,$max_item);
        $i=$l_limit;
        if (count($pic_data) > 0) {
                foreach ($pic_data as $key => $row) {
                        $hi =(($pos==($i + $lower_limit)) ? '1': '');
                        $i++;

                        $pic_title =$lang_display_thumbnails['filename'].$row['filename']."\n".
                                $lang_display_thumbnails['filesize'].($row['filesize'] >> 10).$lang_byte_units[1]."\n".
                                $lang_display_thumbnails['dimensions'].$row['pwidth']."x".$row['pheight']."\n".
                                $lang_display_thumbnails['date_added'].localised_date($row['ctime'], $album_date_fmt);

                        $pic_url =  get_pic_url($row, 'thumb');
                        if (!is_image($row['filename'])) {
                                $image_info = getimagesize($pic_url);
                                $row['pwidth'] = $image_info[0];
                                $row['pheight'] = $image_info[1];
                        }

                        $image_size = compute_img_size($row['pwidth'], $row['pheight'], $CONFIG['thumb_width']);

                        $p=$i - 1 + $lower_limit;
                        $p=($p < 0 ? 0 : $p);
                        $thumb_list[$i]['pos'] = $key < 0 ? $key : $p;
                        $thumb_list[$i]['image'] = "<img src=\"" . $pic_url . "\" class=\"image\" {$image_size['geom']} border=\"0\" alt=\"{$row['filename']}\" title=\"$pic_title\">";
                        $thumb_list[$i]['caption'] = $row['caption_text'];
                        $thumb_list[$i]['admin_menu'] = '';

                }
                return theme_display_film_strip($thumb_list, $thumb_count, $album_name, $album, $cat, $pos, is_numeric($album));
        } else {
                theme_no_img_to_display($album_name);
        }
}

// Return the url for a picture, allows to have pictures spreaded over multiple servers
function get_pic_url(&$pic_row, $mode)
{
        global $CONFIG,$THEME_DIR;

        static $pic_prefix = array();
        static $url_prefix = array();

        if (!count($pic_prefix)) {
                $pic_prefix = array(
                        'thumb' => $CONFIG['thumb_pfx'],
                        'normal' => $CONFIG['normal_pfx'],
                        'fullsize' => ''
                );

                $url_prefix = array(
                        0 => $CONFIG['fullpath'],
                );
        }

        $mime_content = get_type($pic_row['filename']);
        $filepathname = null;

        // Code to handle custom thumbnails
        // If fullsize or normal mode use regular file
        if ($mime_content['content'] != 'image' && $mode!= 'thumb') {
                $mode = 'fullsize';
        } elseif ($mime_content['content'] != 'image' && $mode == 'thumb') {
                $thumb_extensions = Array('.gif','.png','.jpg');
                // Check for user-level custom thumbnails
                // Create custom thumb path and erase extension using filename; Erase filename's extension
                $custom_thumb_path = $url_prefix[$pic_row['url_prefix']].$pic_row['filepath'].$pic_prefix[$mode];
                $file_base_name = str_replace('.'.$mime_content['extension'],'',basename($pic_row['filename']));
                // Check for file-specific thumbs
                foreach ($thumb_extensions as $extension) {
                        if (file_exists($custom_thumb_path.$file_base_name.$extension)) {
                                $filepathname = $custom_thumb_path.$file_base_name.$extension;
                                break;
                        }
                }
                // Check for extension-specific thumbs
                if (is_null($filepathname)) {
                        foreach ($thumb_extensions as $extension) {
                                if (file_exists($custom_thumb_path.$mime_content['extension'].$extension)) {
                                        $filepathname = $custom_thumb_path.$mime_content['extension'].$extension;
                                        break;
                                }
                        }
                }
                // Check for content-specific thumbs
                if (is_null($filepathname)) {
                        foreach ($thumb_extensions as $extension) {
                                if (file_exists($custom_thumb_path.$mime_content['content'].$extension)) {
                                        $filepathname = $custom_thumb_path.$mime_content['content'].$extension;
                                        break;
                                }
                        }
                }
                // Use default thumbs
                if (is_null($filepathname)) {
                               // Check for default theme- and global-level thumbs
                               $thumb_paths[] = $THEME_DIR.'/images/';                 // Used for custom theme thumbs
                               $thumb_paths[] = 'images/';                             // Default Coppermine thumbs
                               foreach ($thumb_paths as $default_thumb_path) {
                                       if (is_dir($default_thumb_path)) {
                                               foreach ($thumb_extensions as $extension) {
                                                       // Check for extension-specific thumbs
                                                       if (file_exists($default_thumb_path.$CONFIG['thumb_pfx'].$mime_content['extension'].$extension)) {
                                                               $filepathname = $default_thumb_path.$CONFIG['thumb_pfx'].$mime_content['extension'].$extension;
                                                               break 2;
                                                       }
                                        }
                                               foreach ($thumb_extensions as $extension) {
                                                       // Check for media-specific thumbs (movie,document,audio)
                                                       if (file_exists($default_thumb_path.$CONFIG['thumb_pfx'].$mime_content['content'].$extension)) {
                                                               $filepathname = $default_thumb_path.$CONFIG['thumb_pfx'].$mime_content['content'].$extension;
                                                               break 2;
                                                       }
                                               }
                                       }
                               }
                }
                return path2url($filepathname);
        }

        return $url_prefix[$pic_row['url_prefix']]. path2url($pic_row['filepath']. $pic_prefix[$mode]. $pic_row['filename']);
}

// Return a variable from the default language file
function& cpg_get_default_lang_var($language_var_name,$overide_language = null) {
        global $CONFIG;
        if (is_null($overide_language)) {
                if (isset($CONFIG['default_lang'])) {
                        $language = $CONFIG['default_lang'];
                } else {
                               $language = $CONFIG['lang'];
                }
        } else {
                       $language = $overide_language;
        }
        include('lang/'.$language.'.php');
        return $$language_var_name;
}

// Returns a variable from the current language file
// If variable doesn't exists gets value from english lang file
function& cpg_lang_var($varname,$index=null) {
        global $$varname;

        $lang_var =& $$varname;

        if (isset($lang_var)) {
                if (!is_null($index) && !isset($lang_var[$index])) {
                        include('lang/english.php');
                        return $lang_var[$index];
                } elseif (is_null($index)) {
                        return $lang_var;
                } else {
                               return $lang_var[$index];
                }
        } else {
                       include('lang/english.php');
                       return $lang_var;
        }
}

//defined new debug_output function here in functions.inc.php instead of theme.php with different function names to avoid incompatibilities with users not updating their themes as required. Advanced info is only output if (GALLERY_ADMIN_MODE == TRUE)  - GauGau 2003-11-23

function cpg_debug_output()
{
    global $HTTP_GET_VARS, $HTTP_POST_VARS, $HTTP_SERVER_VARS;
    global $USER, $USER_DATA, $ALBUM_SET, $CONFIG, $time_start, $query_stats, $queries, $lang_cpg_debug_output;
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
        $debug_underline = '&#0010;------------------&#0010;';
        $debug_separate = '&#0010;==========================&#0010;';
        echo '<form name="debug">';
        starttable('100%', $lang_cpg_debug_output['debug_info'],2);
        echo '<tr><td align="center" valign="middle" class="tableh2">';
        echo '<script language="Javascript">
<!--

function HighlightAll(theField) {
var tempval=eval("document."+theField)
tempval.focus()
tempval.select()
}
//-->
</script>';
        echo '
        <div class="admin_menu"><a href="javascript:HighlightAll(\'debug.debugtext\')" class="adm_menu">' . $lang_cpg_debug_output['select_all'] . '</a></div>';
        echo '</td><td align="left" valign="middle" class="tableh2">';
        if (GALLERY_ADMIN_MODE){echo '<span class="album_stat">('.$lang_cpg_debug_output['copy_and_paste_instructions'].')</span>';}
        echo '</td></tr>';
        echo '<tr><td class="tableb" colspan="2">';
        echo '<textarea  rows="10" class="debug_text" name="debugtext">';
        echo "USER: ";
        echo $debug_underline;
        print_r($USER);
        echo $debug_separate;
        echo "USER DATA:";
        echo $debug_underline;
        print_r($USER_DATA);
        echo $debug_separate;
        echo "Queries:";
        echo $debug_underline;
        print_r($queries);
        echo $debug_separate;
        echo "GET :";
        echo $debug_underline;
        print_r($HTTP_GET_VARS);
        echo $debug_separate;
        echo "POST :";
        echo $debug_underline;
        print_r($HTTP_POST_VARS);
        echo $debug_separate;
        if (GALLERY_ADMIN_MODE){
        echo "VERSION INFO :";
        echo $debug_underline;
        $version_comment = ' - OK';
        if (strcmp('4.0.0', phpversion()) == 1) {$version_comment = ' - your PHP version isn\'t good enough! Minimum requirements: 4.x';}
        echo 'PHP version: ' . phpversion().$version_comment;
        echo $debug_underline;
        $version_comment = '';
        $mySqlVersion = cpg_phpinfo_mysql_version();
        if (strcmp('3.23.23', $mySqlVersion) == 1) {$version_comment = ' - your mySQL version isn\'t good enough! Minimum requirements: 3.23.23';}
        echo 'mySQL version: ' . $mySqlVersion . $version_comment;
        echo $debug_underline;
        echo 'Coppermine version: ';
        echo COPPERMINE_VERSION;
        echo $debug_separate;
        error_reporting  (E_ERROR | E_WARNING | E_PARSE);
        echo cpg_phpinfo_mod_output('gd','text');
        echo cpg_phpinfo_mod_output('mysql','text');
        echo cpg_phpinfo_mod_output('zlib','text');
        echo 'Server restrictions (safe mode)?';
        echo $debug_underline;
        echo 'Directive | Local Value | Master Value';
        echo cpg_phpinfo_conf_output("safe_mode");
        echo cpg_phpinfo_conf_output("safe_mode_exec_dir");
        echo cpg_phpinfo_conf_output("safe_mode_gid");
        echo cpg_phpinfo_conf_output("safe_mode_include_dir");
        echo cpg_phpinfo_conf_output("safe_mode_exec_dir");
        echo cpg_phpinfo_conf_output("sql.safe_mode");
        echo cpg_phpinfo_conf_output("disable_functions");
        echo cpg_phpinfo_conf_output("file_uploads");
        echo cpg_phpinfo_conf_output("include_path");
        echo cpg_phpinfo_conf_output("open_basedir");
        echo $debug_separate;
        echo 'email';
        echo $debug_underline;
        echo 'Directive | Local Value | Master Value';
        echo cpg_phpinfo_conf_output("sendmail_from");
        echo cpg_phpinfo_conf_output("sendmail_path");
        echo cpg_phpinfo_conf_output("SMTP");
        echo cpg_phpinfo_conf_output("smtp_port");
        echo $debug_separate;
        echo 'Size and Time';
        echo $debug_underline;
        echo 'Directive | Local Value | Master Value';
        echo cpg_phpinfo_conf_output("max_execution_time");
        echo cpg_phpinfo_conf_output("max_input_time");
        echo cpg_phpinfo_conf_output("upload_max_filesize");
        echo cpg_phpinfo_conf_output("post_max_size");
        echo $debug_separate;
        }

        echo <<<EOT
Page generated in $time seconds - $query_count queries in $total_query_time seconds - Album set : $ALBUM_SET
EOT;
        echo "</textarea>";
        echo "</td>";
        echo "</tr>";
        if (GALLERY_ADMIN_MODE){
          echo "<tr><td class=\"tableb\" colspan=\"2\">";
          echo "<a href=\"phpinfo.php\">".$lang_cpg_debug_output['phpinfo']."</a>";
          error_reporting  (E_ERROR | E_WARNING | E_PARSE);
          echo "</td></tr>";
        }
        endtable();
        echo "</form>";
}

//phpinfo-related functions:
function cpg_phpinfo_mod($search)
{
    // this could be done much better with regexpr - anyone who wants to change it: go ahead
    ob_start();
    phpinfo(INFO_MODULES);
    $string = ob_get_contents();
    $module = $string;
    $delimiter = '#cpgdelimiter#';
    ob_end_clean();
    // find out the first occurence of "<h2" and throw the superfluos stuff away
    $string = strstr($string, 'module_' . $search);
    $string = eregi_replace('</table>(.*)', '', $string);
    $string = strstr($string, '<tr>');
    $string = str_replace('</td>', '|', $string);
    $string = str_replace('</tr>', $delimiter, $string);
    $string = chop(strip_tags($string));
    $pieces = explode($delimiter, $string);
    foreach($pieces as $key => $val) {
        $bits[$key] = explode("|", $val);
    }
    return $bits;
}

function cpg_phpinfo_mod_output($search,$output_type)
{
// first parameter is the module name, second parameter is the way you want your output to look like: table or text
    $pieces = cpg_phpinfo_mod($search);
    $summ = '';
    $return = '';
    $debug_underline = '&#0010;------------------&#0010;';
    $debug_separate = '&#0010;==========================&#0010;';

    if ($output_type == 'table')
    {
    ob_start();
    starttable('100%', 'Module: '.$search, 2);
    $return.= ob_get_contents();
    ob_end_clean();
    }
    else
    {
    $return.= 'Module: '.$search.$debug_underline;
    }
    foreach($pieces as $val) {
        if ($output_type == 'table') {$return.= '<tr><td>';}
        $return.= $val[0];
        if ($output_type == 'table') {$return.= '</td><td>';}
        $return.= $val[1];
        if ($output_type == 'table') {$return.= '</td></tr>';}
        $summ .= $val[0];
    }
    if (!$summ) {
        if ($output_type == 'table') {$return.= '<tr><td colspan="2">';}
        $return.= 'module doesn\'t exist';
        if ($output_type == 'table') {$return.= '</td></tr>';}
    }
    if ($output_type == 'table')
    {
    ob_start();
    endtable();
    $return.= ob_get_contents();
    ob_end_clean();
    }
    else
    {
    $return.= $debug_separate;
    }
    return $return;
}

function cpg_phpinfo_mysql_version()
{
    $result = db_query("SELECT VERSION() as version");
    $row = mysql_fetch_row($result);
    return $row[0];
}

function cpg_phpinfo_conf($search)
{
    // this could be done much better with regexpr - anyone who wants to change it: go ahead
    $string ='';
    $pieces = '';
    $delimiter = '#cpgdelimiter#';
    $bits = '';

    ob_start();
    phpinfo(INFO_CONFIGURATION);
    $string = ob_get_contents();
    ob_end_clean();
    // find out the first occurence of "</tr" and throw the superfluos stuff in front of it away
    $string = strchr($string, '</tr>');
    $string = str_replace('</td>', '|', $string);
    $string = str_replace('</tr>', $delimiter, $string);
    $string = chop(strip_tags($string));
    $pieces = explode($delimiter, $string);
    foreach($pieces as $val) {
        $bits = explode("|", $val);
        if (strchr($bits[0], $search)) {
            return $bits;
        }
    }
}

function cpg_phpinfo_conf_output($search)
{
$pieces = cpg_phpinfo_conf($search);
        $return= $pieces[0] . ' | ' . $pieces[1] . ' | ' . $pieces[2];
        return $return;
}

// theme and language selection
function languageSelect($parameter)
{
global $CONFIG,$lang_language_selection;
$return= '';
$lineBreak = "\n";

//check if language display is enabled
if ($CONFIG['language_list'] == 0 && $parameter == 'list'){
    return;
}
if ($CONFIG['language_flags'] == 0 && $parameter == 'flags'){
    return;
}




// get the current language
 //use the default language of the gallery
 $cpgCurrentLanguage = $CONFIG['lang'];

 // is a user logged in?
 //has the user already chosen another language for himself?
 //if($USER['lang']!=""){
 //   $cpgCurrentLanguage = $USER['lang'];
 //   }
 //has the language been set to something else on the previous page?
 if (isset($_GET['lang'])){
    $cpgCurrentLanguage = $_GET['lang'];
    }
 //get the url and all vars except $lang
 $cpgChangeUrl = $_SERVER["SCRIPT_NAME"]."?";
 foreach ($_GET as $key => $value) {
    if ($key!="lang"){$cpgChangeUrl.= $key . "=" . $value . "&";}
 }
 $cpgChangeUrl.= 'lang=';


// get an array of english and native language names and flags
// for now, use a static array definition here - this could later be made into a true database query
$lang_language_data['arabic'] = array('Arabic','&#1575;&#1604;&#1593;&#1585;&#1576;&#1610;&#1577;','sa');
$lang_language_data['basque'] = array('Basque','Euskera','baq');
$lang_language_data['bosnian'] = array('Bosnian','Bosanski','ba');
$lang_language_data['brazilian_portuguese'] = array('Portuguese [Brazilian]','Portugu&ecirc;s Brasileiro','br');
$lang_language_data['bulgarian'] = array('Bulgarian','&#1041;&#1098;&#1083;&#1075;&#1072;&#1088;&#1089;&#1082;&#1080;','bg');
$lang_language_data['catalan'] = array('Catalan','Catal&agrave;','ct');
$lang_language_data['chinese_big5'] = array('Chinese-Big5','&#21488;&#28771;','tw');
$lang_language_data['chinese_gb'] = array('Chinese-GB2312','&#20013;&#22269;','cn');
$lang_language_data['croatian'] = array('Croatian','Hrvatski','hr');
$lang_language_data['czech'] = array('Czech','&#x010C;esky','cz');
$lang_language_data['danish'] = array('Danish','Dansk','dk');
$lang_language_data['dutch'] = array('Dutch','Nederlands','nl');
$lang_language_data['english'] = array('English','English','gb');
$lang_language_data['estonian'] = array('Estonian','Eesti','ee');
$lang_language_data['finnish'] = array('Finnish','Suomea','fi');
$lang_language_data['french'] = array('French','Fran&ccedil;ais','fr');
$lang_language_data['german'] = array('German','Deutsch','de');
$lang_language_data['greek'] = array('Greek','&#917;&#955;&#955;&#951;&#957;&#953;&#954;&#940;','gr');
$lang_language_data['hebrew'] = array('Hebrew','&#1506;&#1489;&#1512;&#1497;&#1514;','il');
$lang_language_data['hungarian'] = array('Hungarian','Magyarul','hu');
$lang_language_data['indonesian'] = array('Indonesian','Bahasa Indonesia','id');
$lang_language_data['italian'] = array('Italian','Italiano','it');
$lang_language_data['japanese'] = array('Japanese','&#26085;&#26412;&#35486;','jp');
$lang_language_data['korean'] = array('Korean','&#54620;&#44397;&#50612;','kr');
$lang_language_data['kurdish'] = array('Kurdish','&#1603;&#1608;&#1585;&#1583;&#1740;','ku');
$lang_language_data['latvian'] = array('Latvian','Latvian','lv');
$lang_language_data['malay'] = array('Malay','Bahasa Melayu','my');
$lang_language_data['norwegian'] = array('Norwegian','Norsk','no');
$lang_language_data['polish'] = array('Polish','Polski','pl');
$lang_language_data['portuguese'] = array('Portuguese [Portugal]','Portugu&ecirc;s','pt');
$lang_language_data['romanian'] = array('Romanian','Rom&acirc;n&atilde;','ro');
$lang_language_data['russian'] = array('Russian','&#1056;&#1091;&#1089;&#1089;&#1082;&#1080;&#1081;','ru');
$lang_language_data['slovak'] = array('Slovak','Slovensky','sl');
$lang_language_data['slovenian'] = array('Slovenian','Slovensko','si');
$lang_language_data['spanish'] = array('Spanish','Espa&ntilde;ol','es');
$lang_language_data['swedish'] = array('Swedish','Svenska','se');
$lang_language_data['thai'] = array('Thai','&#3652;&#3607;&#3618;','th');
$lang_language_data['turkish'] = array('Turkish','T&uuml;rk&ccedil;e','tr');
$lang_language_data['uighur'] = array('Uighur','Uighur','cn-xj');
$lang_language_data['vietnamese'] = array('Vietnamese','Tieng Viet','vn');
$lang_language_data['welsh'] = array('Welsh','Cymraeg','gb-cm');

// get list of available languages
  $value = strtolower($CONFIG['lang']);
  // is utf-8 selected?
 if ($CONFIG['charset'] == 'utf-8') {
     $cpg_charset = 'utf-8';
 } else {
     $cpg_charset = '';
 }
  $lang_dir = 'lang/';
  $dir = opendir($lang_dir);
  while ($file = readdir($dir)) {
      if (is_file($lang_dir . $file) && strtolower(substr($file, -4)) == '.php') {
          if (($cpg_charset != 'utf-8' && strstr($file,'utf-8') == false) || ($cpg_charset == 'utf-8' && strstr($file,'utf-8') == true)) {
              $lang_array[] = strtolower(substr($file, 0 , -4));
          }
      }
  }
  closedir($dir);
  natcasesort($lang_array);

//start the output
switch ($parameter) {
   case 'flags':
       if ($CONFIG['language_flags'] == 2){
           $return.= $lang_language_selection['choose_language'].': ';
       }
       foreach ($lang_array as $language) {
       $cpg_language_name = str_replace('-utf-8','', $language);
              if (array_key_exists($cpg_language_name, $lang_language_data)){
              $return.= $lineBreak .  '<a href="' .$cpgChangeUrl. $language . '"><img src="images/flags/' . $lang_language_data[$cpg_language_name][2] . '.gif" border="0" width="16" height="10" alt="" title="';
              $return.= $lang_language_data[$language][0];
              if ($lang_language_data[$language][1] != $lang_language_data[$language][0]){
                  $return.= ' (' . $lang_language_data[$language][1] . ')';
                  }
              $return.= '" /></a>&nbsp;' . $lineBreak;
              }
              }
          if ($CONFIG['language_reset'] == 1){
              $return.=  '<a href="' .$cpgChangeUrl. 'xxx"><img src="images/flags/reset.gif" border="0" width="16" height="11" alt="" title="';
              $return.=  $lang_language_selection['reset_language'] . '" /></a>' . $lineBreak;
          }
       break;
   case 'table':
       $return = 'not yet implemented';
       break;
   default:
       $return.= $lineBreak . '<form name="cpgChooseLanguage" action="' . $cpgChangeUrl . '" method="get" style="margin-top:0px;margin-bottom:0px;margin-left:0px;margin-right:0px;display:inline">' . $lineBreak;
       $return.= '<select name="cpgLanguageSelect" class="listbox_lang" onchange="if (this.options[this.selectedIndex].value) window.location.href=\'' . $cpgChangeUrl . '\' + this.options[this.selectedIndex].value;">' . $lineBreak;
       $return.='<option selected="selected">' . $lang_language_selection['choose_language'] . '</option>' . $lineBreak;
       foreach ($lang_array as $language) {
          $return.=  '<option value="' . $language  . '" >';
              if (array_key_exists($language, $lang_language_data)){
              $return.= $lang_language_data[$language][0];
              if ($lang_language_data[$language][1] != $lang_language_data[$language][0]){
                  $return.= ' (' . $lang_language_data[$language][1] . ')';
                  }
              }
              else{
                  $return.= ucfirst($language);
                  }
              $return.= ($value == $language ? '*' : '');
              $return.= '</option>' . $lineBreak;
              }
          if ($CONFIG['language_reset'] == 1){
              $return.=  '<option value="xxx">' . $lang_language_selection['reset_language'] . '</option>' . $lineBreak;
          }
          $return.=  '</select>' . $lineBreak;
          $return.=  '</form>' . $lineBreak;
   }

return $return;
}

function themeSelect($parameter)
{
global $CONFIG,$lang_theme_selection;
$return= '';
$lineBreak = "\n";

if ($CONFIG['theme_list'] == 0){
    return;
}

// get the current theme
//get the url and all vars except $theme
$cpgCurrentTheme = $_SERVER["SCRIPT_NAME"]."?";
foreach ($_GET as $key => $value) {
    if ($key!="theme"){$cpgCurrentTheme.= $key . "=" . $value . "&";}
}
$cpgCurrentTheme.="theme=";

// get list of available languages
    $value = $CONFIG['theme'];
    $theme_dir = 'themes/';

    $dir = opendir($theme_dir);
    while ($file = readdir($dir)) {
        if (is_dir($theme_dir . $file) && $file != "." && $file != "..") {
            $theme_array[] = $file;
        }
    }
    closedir($dir);

    natcasesort($theme_array);

//start the output
switch ($parameter) {
   case 'table':
       $return = 'not yet implemented';
       break;
   default:
       $return.= $lineBreak . '<form name="cpgChooseTheme" action="' . $cpgCurrentTheme . '" method="get" style="margin-top:0px;margin-bottom:0px;margin-left:0px;margin-right:0px;display:inline">' . $lineBreak;
       $return.= '<select name="cpgThemeSelect" class="listbox_lang" onchange="if (this.options[this.selectedIndex].value) window.location.href=\'' . $cpgCurrentTheme . '\' + this.options[this.selectedIndex].value;">' . $lineBreak;
       $return.='<option selected="selected">' . $lang_theme_selection['choose_theme'] . '</option>';
       foreach ($theme_array as $theme) {
           $return.= '<option value="' . $theme . '">' . strtr(ucfirst($theme), '_', ' ') . ($value == $theme ? '*' : ''). '</option>' . $lineBreak;
       }
          if ($CONFIG['theme_reset'] == 1){
              $return.=  '<option value="xxx">' . $lang_theme_selection['reset_theme'] . '</option>' . $lineBreak;
          }
          $return.=  '</select>' . $lineBreak;
          $return.=  '</form>' . $lineBreak;
   }

return $return;
}





?>