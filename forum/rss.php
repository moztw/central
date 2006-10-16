<?php
/***************************************************************************
 *                                rss.php
 *                            -------------------
 *   begin                : Saturday, Feb 13, 2001
 *   copyright            : (C) 2005 by Lucas van Dijk
 *   email                : lucas@aoe3capitol.nl
 *
 *   $Id: rss.php,v 1.0.3 2004/07/11 16:46:15 mrlucky Exp $
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

define('IN_PHPBB', 1);
$phpbb_root_path = './';
include($phpbb_root_path . 'extension.inc');
include($phpbb_root_path . 'common.'.$phpEx);
include($phpbb_root_path.'includes/functions_post.'.$phpEx);
include($phpbb_root_path.'includes/bbcode.'.$phpEx);

//
// Start session management
//
$userdata = session_pagestart($user_ip, PAGE_INDEX);
init_userprefs($userdata);
//
// End session management
//

// -------
// Begin Page specific functions
//
function make_xml_compatible($text, $bbcode_uid = '', $use_bbcode = 0)
{
        global $board_config, $base_url;

        if($use_bbcode)
        {
                if($bbcode_uid != '')
                {
                        $text = ( $board_config['allow_bbcode'] ) ? bbencode_second_pass($text, $bbcode_uid) : preg_replace('/\:[0-9a-z\:]+\]/si', ']', $text);
                }
                else
                {
                        $text = preg_replace('/\:[0-9a-z\:]+\]/si', ']', $text);
                }
                $text = make_clickable($text);
                if($board_config['allow_smilies'])
                {
                        $text = smilies_pass($text);
                        $text = str_replace("./".$board_config['smilies_path'], $base_url.$board_config['smilies_path'], $text);
                }
        }
        $text = nl2br($text);

        $text = str_replace('&pound', '&amp;#163;', $text);
        $text = str_replace('&copy;', '(c)', $text);

        $text = htmlspecialchars($text);

        return $text;
}
//
// End page specific functions
// ------

//
// Get Various vars
//
$forum = isset($HTTP_GET_VARS[POST_FORUM_URL]) && ctype_digit($HTTP_GET_VARS[POST_FORUM_URL]) ? $HTTP_GET_VARS[POST_FORUM_URL] : false;
$topic = isset($HTTP_GET_VARS[POST_TOPIC_URL]) && ctype_digit($HTTP_GET_VARS[POST_TOPIC_URL]) ? $HTTP_GET_VARS[POST_TOPIC_URL] : false;
$post = isset($HTTP_GET_VARS[POST_POST_URL]) && ctype_digit($HTTP_GET_VARS[POST_POST_URL]) ? $HTTP_GET_VARS[POST_POST_URL] : false;

$base_url = ($board_config['cookie_secure'] ? "https://" : "http://").$HTTP_SERVER_VARS['HTTP_HOST'].dirname($HTTP_SERVER_VARS['PHP_SELF']);

if(substr($base_url, -1) != "/")
{
        $base_url .= "/";
}

//
// Get topic ID by post id
//
if($post)
{
        $sql = "SELECT topic_id
                FROM ".POSTS_TABLE."
                WHERE post_id = ".intval($post);
        if(!$result = $db->sql_query($sql))
        {
                message_die(GENERAL_ERROR, "Could not get topic id by post id", '', __LINE__, __FILE__, $sql);
        }

        $row = $db->sql_fetchrow($result);

        $topic = $row['topic_id'];
}

//
// Start RSS output
//
$rss_result = "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?>
<rss version=\"2.0\">
<channel>
  <title>".make_xml_compatible($board_config['sitename'])."</title>
  <link>".$base_url."index.".$phpEx."</link>
  <description>".make_xml_compatible($board_config['site_desc'])."</description>
  <language>".$board_config['default_lang']."</language>
  <copyright>(c) Copyright ".create_date("Y", time(), $board_config['board_timezone'])." by ".make_xml_compatible($board_config['sitename'])."</copyright>
  <managingEditor>".$board_config['board_email']."</managingEditor>
  <webMaster>".$board_config['board_email']."</webMaster>
  <pubDate>".create_date($board_config['default_dateformat'], time(), $board_config['board_timezone'])."</pubDate>
  <lastBuildDate>".create_date($board_config['default_dateformat'], time(), $board_config['board_timezone'])."</lastBuildDate>
  <docs>http://backend.userland.com/rss</docs>
  <generator>phpBB2 RSS Syndication Mod by Lucas</generator>
  <ttl>1</ttl>

  <image>
    <title>".make_xml_compatible($board_config['sitename'])."</title>
    <url>".$board_config['rss_image']."</url>
    <link>".$base_url."</link>
    <description>".make_xml_compatible($board_config['site_desc'])."</description>
  </image>
";

//
// Get latest topics
//
if(!$topic && !$forum)
{
        //
        // This SQL Code selects the latest topics on he forum
        //
        $sql = "SELECT t.topic_title, t.topic_last_post_id, t.forum_id, p.post_time, pt.post_text, pt.bbcode_uid, u.username, u.user_id
                FROM ".TOPICS_TABLE." t, ".POSTS_TABLE." p, ".POSTS_TEXT_TABLE." pt, ".USERS_TABLE." u
                WHERE t.topic_status != 1
                AND p.post_id = t.topic_last_post_id
                AND pt.post_id = p.post_id
                AND u.user_id = p.poster_id
                ORDER BY t.topic_last_post_id DESC
                LIMIT 0, ".intval($board_config['max_rss_topics']);
        if(!$result = $db->sql_query($sql))
        {
                message_die(GENERAL_ERROR, "Could not get Latest topics", '', __LINE__, __FILE__, $sql);
        }

        while($row = $db->sql_fetchrow($result))
        {
                $is_auth = array();
                $is_auth = auth(AUTH_ALL, $row['forum_id'], $userdata);
                if($is_auth['auth_view'] && $is_auth['auth_read'])
                {
                        $description = "
                                      <b>".$lang['Author'].":</b> <a href='".$base_url."profile.".$phpEx."?mode=viewprofile&".POST_USERS_URL."=".$row['user_id']."'>".$row['username']."</a><br />
                                      <b>".$lang['Posted'].":</b> ".create_date($board_config['default_dateformat'], $row['post_time'], $board_config['board_timezone'])."<br />
                                      <br />
                                      ".$row['post_text'];

                        $rss_result .= "
                                      <item>
                                        <title>".make_xml_compatible(strip_tags($row['topic_title']))."</title>
                                        <link>".$base_url."viewtopic.".$phpEx."?".POST_POST_URL."=".$row['topic_last_post_id']."#".$row['topic_last_post_id']."</link>
                                        <description>".make_xml_compatible($description, $row['bbcode_uid'], true)."</description>
                                        <comments>".$base_url."viewtopic.".$phpEx."?".POST_POST_URL."=".$row['topic_last_post_id']."#".$row['topic_last_post_id']."</comments>
                                        <author>".make_xml_compatible($row['username'])."</author>
                                        <pubDate>".create_date($board_config['default_dateformat'], $row['post_time'], $board_config['board_timezone'])."</pubDate>
                                        <guid isPermaLink=\"true\">".$base_url."viewtopic.".$phpEx."?".POST_POST_URL."=".$row['topic_last_post_id']."#".$row['topic_last_post_id']."</guid>
                                      </item>";
                }
        }
}

if($topic && !$forum)
{
        //
        // This SQL query selects the latest posts of a topic
        //
        $sql = "SELECT p.post_id, p.post_time, pt.post_text, pt.bbcode_uid, pt.post_subject, t.topic_title, t.forum_id, u.username, u.user_id
                FROM ".POSTS_TABLE." p, ".POSTS_TEXT_TABLE." pt, ".TOPICS_TABLE." t, ".USERS_TABLE." u
                WHERE p.topic_id = ".intval($topic)."
                AND pt.post_id = p.post_id
                AND t.topic_id = p.topic_id
                AND u.user_id = p.poster_id
                ORDER BY p.post_time DESC
                LIMIT 0, ".intval($board_config['max_rss_topics']);
        if(!$result = $db->sql_query($sql))
        {
                message_die(GENERAL_ERROR, "Could not get Latest posts", '', __LINE__, __FILE__, $sql);
        }

        $auth_loaded = false;

        while($row = $db->sql_fetchrow($result))
        {
                if(!$auth_loaded)
                {
                        $is_auth = array();
                        $is_auth = auth(AUTH_ALL, $row['forum_id'], $userdata);
                        $auth_loaded = true;
                }
                if($is_auth['auth_view'] && $is_auth['auth_read'])
                {
                        $description = "
                                      ".$lang['Author'].": <a href='".$base_url."profile.".$phpEx."?mode=viewprofile&".POST_USERS_URL."=".$row['user_id']."'>".$row['username']."</a><br />
                                      ".$lang['Posted'].": ".create_date($board_config['default_dateformat'], $row['post_time'], $board_config['board_timezone'])."<br />
                                      <br />
                                      ".$row['post_text'];

                        $rss_result .= "
                                      <item>
                                        <title>".make_xml_compatible(strip_tags(($row['post_subject'] != '' ? $row['post_subject'] : "Re: ".$row['topic_title'])))."</title>
                                        <link>".$base_url."viewtopic.".$phpEx."?".POST_POST_URL."=".$row['post_id']."#".$row['post_id']."</link>
                                        <description>".make_xml_compatible($description, $row['bbcode_uid'], true)."</description>
                                        <comments>".$base_url."viewtopic.".$phpEx."?".POST_POST_URL."=".$row['post_id']."#".$row['post_id']."</comments>
                                        <author>".make_xml_compatible($row['username'])."</author>
                                        <pubDate>".create_date($board_config['default_dateformat'], $row['post_time'], $board_config['board_timezone'])."</pubDate>
                                        <guid isPermaLink=\"true\">".$base_url."viewtopic.".$phpEx."?".POST_POST_URL."=".$row['post_id']."#".$row['post_id']."</guid>
                                      </item>";
                }
        }
}

if($forum && !$topic)
{
        //
        // This SQL query selects the latest topics of a specific forum
        //
        $sql = "SELECT t.topic_title, t.topic_last_post_id, p.post_time, pt.post_text, pt.bbcode_uid, u.username, u.user_id
                FROM ".TOPICS_TABLE." t, ".POSTS_TABLE." p, ".POSTS_TEXT_TABLE." pt, ".USERS_TABLE." u
                WHERE t.forum_id = ".intval($forum)."
                AND t.topic_status != 1
                AND p.post_id = t.topic_last_post_id
                AND pt.post_id = p.post_id
                AND u.user_id = p.poster_id
                ORDER BY t.topic_last_post_id DESC
                LIMIT 0, ".intval($board_config['max_rss_topics']);
        if(!$result = $db->sql_query($sql))
        {
                message_die(GENERAL_ERROR, "Could not get Latest topics", '', __LINE__, __FILE__, $sql);
        }

        $is_auth = array();
        $is_auth = auth(AUTH_ALL, $forum, $userdata);

        while($row = $db->sql_fetchrow($result))
        {
                if($is_auth['auth_view'] && $is_auth['auth_read'])
                {
                        $description = "
                                      ".$lang['Author'].": <a href='".$base_url."profile.".$phpEx."?mode=viewprofile&".POST_USERS_URL."=".$row['user_id']."'>".$row['username']."</a><br />
                                      ".$lang['Posted'].": ".create_date($board_config['default_dateformat'], $row['post_time'], $board_config['board_timezone'])."<br />
                                      <br />
                                      ".$row['post_text'];

                        $rss_result .= "
                                      <item>
                                        <title>".make_xml_compatible(strip_tags($row['topic_title']))."</title>
                                        <link>".$base_url."viewtopic.".$phpEx."?".POST_POST_URL."=".$row['topic_last_post_id']."#".$row['topic_last_post_id']."</link>
                                        <description>".make_xml_compatible($description, $row['bbcode_uid'], true)."</description>
                                        <comments>".$base_url."viewtopic.".$phpEx."?".POST_POST_URL."=".$row['topic_last_post_id']."#".$row['topic_last_post_id']."</comments>
                                        <author>".make_xml_compatible($row['username'])."</author>
                                        <pubDate>".create_date($board_config['default_dateformat'], $row['post_time'], $board_config['board_timezone'])."</pubDate>
                                        <guid isPermaLink=\"true\">".$base_url."viewtopic.".$phpEx."?".POST_POST_URL."=".$row['topic_last_post_id']."#".$row['topic_last_post_id']."</guid>
                                      </item>";
                }
        }
}

$rss_result .= "</channel></rss>";

header("Content-type: text/xml", true);
echo $rss_result;

?>
