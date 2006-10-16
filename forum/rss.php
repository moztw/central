<?php
/***************************************************************************
*				   rss.php
*			     -------------------
*   begin		 : Monday, July 7, 2003
*   notes		 : This code is based on the work of the original
*			   developer below.  Portions of this code
*			   'borrowed' from phpbb_fetch_posts, an
*			   untitled rdf content syndicator posted at
*			   phpbb.com, and phpbb itself.
*   email		 : rss@wickedwisdom.com
*
*
*   $Id: rss.php,v 2.0.1 2003/07/17 10:11:00 nschindler Exp $
*
*
***************************************************************************/

/***************************************************************************
*				   rdf.php
*			     -------------------
*   begin		 : Saturday, Mar 2, 2002
*   copyright		 : (C) 2002 Matthijs van de Water
*				    Sascha Carlin
*   email		 : phpbb@matthijs.net
*			   sc@itst.org
*
*   $Id: rdf.php,v 1.3.1 2003/02/16 14:43:11 mvdwater Exp $
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

//
// BEGIN Configuration
//
// Set the relative path from this file to your phpBB root folder
$phpbb_root_path = './';
// How many posts do you want to returnd (count)?  Specified in the URL with "c=".  Defaults to 15, upper limit of 50.
$count = ( isset($HTTP_GET_VARS['c']) ) ? intval($HTTP_GET_VARS['c']) : 15;
$count = ( $count == 0 ) ? 15 : $count;
$count = ( $count > 50 ) ? 50 : $count;
// Which forum do you want posts from (forum_id)?  specified in the url with "f=".  Defaults to all (public) forums.
$forum_id = ( isset($HTTP_GET_VARS['f']) ) ? intval($HTTP_GET_VARS['f']) : '';
$sql_forum_where = ( !empty($forum_id) ) ? ' AND f.forum_id = ' . $forum_id : ' ';
// Return topics only, or all posts?  Specified in the URL with "t=".  Defaults to all posts (0).
$topics_only = (isset($HTTP_GET_VARS['t']) ) ? intval($HTTP_GET_VARS['t']) : 0;
$sql_topics_only_where = '';
if ( $topics_only == 1 )
{
	$sql_topics_only_where = 'AND p.post_id = t.topic_first_post_id';
}
//
// END Configuration
//

//
// BEGIN Includes of phpBB scripts
//
define ('IN_PHPBB', true);
include($phpbb_root_path . 'extension.inc');
include($phpbb_root_path . 'common.'.$phpEx);
include($phpbb_root_path . 'includes/bbcode.'.$phpEx);
//
// END Includes of phpBB scripts
//

//
// BEGIN Session management
//
$userdata = session_pagestart($user_ip, PAGE_INDEX);
init_userprefs($userdata);
//
// End session management
//

//
// BEGIN Create main board information (some code borrowed from functions_post.php)
//
// Build URL components
$script_name = preg_replace('/^\/?(.*?)\/?$/', '\1', trim($board_config['script_path']));
$viewpost = ( $script_name != '' ) ? $script_name . '/viewtopic.' . $phpEx : 'viewtopic.'. $phpEx;
$index = ( $script_name != '' ) ? $script_name . '/index.' . $phpEx : 'index.'. $phpEx;
$server_name = trim($board_config['server_name']);
$server_protocol = ( $board_config['cookie_secure'] ) ? 'https://' : 'http://';
$server_port = ( $board_config['server_port'] <> 80 ) ? ':' . trim($board_config['server_port']) . '/' : '/';
// Assemble URL components
$index_url = $server_protocol . $server_name . $server_port . $script_name . '/';
$viewpost_url = $server_protocol . $server_name . $server_port . $viewpost;
// Reformat site name and description
$site_name = strip_tags($board_config['sitename']);
$site_description = strip_tags($board_config['site_desc']);
// Set the fully qualified url to your smilies folder
$smilies_path = $board_config['smilies_path'];
$smilies_url = $index_url . $smilies_path;
$smilies_path = preg_replace("/\//", "\/", $smilies_path);
//
// END Create main board information
//

//
// BEGIN Initialise template
//
$template->set_filenames(array(
	"body" => "rss_body.tpl")
);
//
// END Initialise template
//

//
// BEGIN Assign static variables to template
//
// Variable reassignment for Topic Replies
$l_topic_replies = $lang['Topic'] . ' ' . $lang['Replies'];
$template->assign_vars(array(
	'S_CONTENT_ENCODING' => $lang['ENCODING'],
	'BOARD_URL' => $index_url,
	'BOARD_TITLE' => $site_name,
	'BOARD_DESCRIPTION' => $site_description,
	'BOARD_MANAGING_EDITOR' => $board_config['board_email'],
	'BOARD_WEBMASTER' => $board_config['board_email'],
	'BUILD_DATE' => gmdate('D, d M Y H:i:s', time()) . ' GMT', 
	'L_AUTHOR' => $lang['Author'],
	'L_POSTED' => $lang['Posted'],
	'L_TOPIC_REPLIES' => $l_topic_replies,
	'L_POST' => $lang['Post'])
);
//
// END Assign static variabless to template
//

//
// BEGIN SQL statement to fetch active posts of public forums
//
$sql = "SELECT f.forum_name, t.topic_title, u.user_id, u.username, u.user_sig, u.user_sig_bbcode_uid, p.post_id, pt.post_text, pt.post_subject, pt.bbcode_uid, p.post_time, t.topic_replies, t.topic_first_post_id
	FROM " . FORUMS_TABLE . " AS f, " . TOPICS_TABLE . " AS t, " . USERS_TABLE . " AS u, " . POSTS_TABLE . " AS p, " . POSTS_TEXT_TABLE . " as pt
	WHERE
		t.forum_id = f.forum_id
			AND f.auth_view = " . AUTH_ALL . "
			AND p.poster_id = u.user_id
			AND pt.post_id = p.post_id
			AND p.topic_id = t.topic_id
			$sql_topics_only_where
			$sql_forum_where
	ORDER BY p.post_time DESC LIMIT $count";
$posts_query = $db->sql_query($sql);
//
// END SQL statement to fetch active posts of public forums
//

//
// BEGIN Query failure check
//
if ( !$posts_query )
{
	message_die(GENERAL_ERROR, "Could not query list of active posts", "", __LINE__, __FILE__, $sql);
}
else if ( !$db->sql_numrows($posts_query) )
{
	message_die(GENERAL_MESSAGE, $lang['No_match']);
}
else
{
//
// END Query failure check
//

//
// BEGIN "item" loop
//
	while ($post = $db->sql_fetchrow($posts_query))
	{

// Variable reassignment and reformatting for post text
$post_text = $post['post_text'];
$post_text = str_replace("\n", "\n<br />\n", $post_text);
$post_text = bbencode_second_pass($post_text, $post['bbcode_uid']);
$post_text = smilies_pass($post_text);
$post_text = preg_replace("/$smilies_path/", $smilies_url, $post_text);
$post_text = make_clickable($post_text);
// Variable reassignment and reformatting for user sig
$user_sig = $post['user_sig'];
$user_sig = bbencode_second_pass($user_sig, $post['user_sig_bbcode_uid']);
$user_sig = smilies_pass($user_sig);
$user_sig = preg_replace("/$smilies_path/", $smilies_url, $user_sig);
$user_sig = make_clickable($user_sig);
	if ( $user_sig != '' )
{
		$user_sig = '<br />_________________<br />' . str_replace("\n", "\n<br />\n", $user_sig);
}
// Variable reassignment and reformatting for post subject
$post_subject = $post['post_subject'];
	if ( $post_subject != '' )
{
		$post_subject = $lang['Subject'] . ': ' . htmlspecialchars($post_subject) . '<br />';
}
// Variable reassignment for topic title, and show whether it is the start of topic, or a reply
$topic_title = $post['topic_title'];
if ( $post['post_id'] != $post['topic_first_post_id'] )
{
	$topic_title = 'RE: ' . $topic_title;
}
// Variable reassignment and reformatting for author
$author = $post['username'];
if ( $post['user_id'] != -1 )
{
        $author = '<a href="' . $index_url . 'profile.' . $phpEx . '?mode=viewprofile&u=' . $post['user_id'] . '" target="_blank">'
 . $author . '</a>';
}
$author = make_clickable($author);
// Assign "item" variables to template
		$template->assign_block_vars('post_item', array(
			'POST_URL' => $viewpost_url . '?' . POST_POST_URL . '=' . $post['post_id'] . '#' . $post['post_id'],
			'TOPIC_TITLE' => htmlspecialchars($topic_title),
			'AUTHOR' => htmlspecialchars($author),
			'POST_TIME' => create_date($board_config['default_dateformat'], $post['post_time'], $board_config['board_timezone']).' (GMT ' . $board_config['board_timezone'] . ')',
			'POST_SUBJECT' => htmlspecialchars($post_subject),
			'FORUM_NAME' => htmlspecialchars($post['forum_name']),
			'POST_TEXT' => htmlspecialchars($post_text),
			'USER_SIG' => htmlspecialchars($user_sig),
			'TOPIC_REPLIES' => $post['topic_replies']
)
		);
	}
}
//
// END "item" loop
//

//
// BEGIN XML and nocaching headers (copied from page_header.php)
//
if (!empty($HTTP_SERVER_VARS['SERVER_SOFTWARE']) && strstr($HTTP_SERVER_VARS['SERVER_SOFTWARE'], 'Apache/2'))
{
	header ('Cache-Control: no-cache, pre-check=0, post-check=0, max-age=0');
}
else
{
	header ('Cache-Control: private, pre-check=0, post-check=0, max-age=0');
}
header ('Expires: ' . gmdate('D, d M Y H:i:s', time()) . ' GMT');
header ('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header ('Content-Type: text/xml');
//
// End XML and nocaching headers
//

//
// BEGIN Output XML page
//
$template->pparse('body');
//
// END Output XML page
//

?>
