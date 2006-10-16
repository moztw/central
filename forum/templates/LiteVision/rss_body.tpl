<?xml version="1.0" encoding="{S_CONTENT_ENCODING}" ?>
<rss version="0.92">
<channel>
	<docs>http://backend.userland.com/rss092</docs>
	<title>{BOARD_TITLE}</title>
	<link>{BOARD_URL}</link>
	<description>{BOARD_DESCRIPTION}</description>
	<managingEditor>{BOARD_MANAGING_EDITOR}</managingEditor>
	<webMaster>{BOARD_WEBMASTER}</webMaster>
	<lastBuildDate>{BUILD_DATE}</lastBuildDate>
<!-- BEGIN post_item -->
<item>
	<title>{post_item.FORUM_NAME} :: {post_item.TOPIC_TITLE}</title>
	<link>{post_item.POST_URL}</link>
	<description>{L_AUTHOR}: {post_item.AUTHOR}&lt;br /&gt;
{post_item.POST_SUBJECT}
{L_POSTED}: {post_item.POST_TIME}&lt;br /&gt;
{L_TOPIC_REPLIES}: {post_item.TOPIC_REPLIES}&lt;br /&gt;&lt;br /&gt;
&lt;span class="postbody"&gt;{post_item.POST_TEXT}
{post_item.USER_SIG}&lt;/span&gt;&lt;br /&gt;
</description>
</item>
<!-- END post_item -->
</channel>
</rss>
