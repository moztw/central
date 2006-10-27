<?xml version="1.0" encoding="utf-8" ?> 
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0"> 
<!--
		 Style sheet ver. 1.0.3 english  for RSS Feed. Copyright 2005, Egor Naklonyaeff.
		  More info http://naklon.info/rss/about.htm
		 Javascript for mozilla borrowed from http://feedster.com/
-->
<xsl:output method="html"/>
<xsl:template match="/">
<html>
<head>
<title><xsl:value-of select="/rss/channel/title"/></title>
<style>
.head, .head a {background:#006699;color:#FFA34F;font:bold large/normal tahoma,arial,sans-serif;margin:0;padding:1ex;text-align:left;text-decoration:none} 
dd {font:0.8em arial,sans-serif;margin:0.5ex 10px 0.5ex 50px;text-align:left} 
dt {background:#D1D7DC;font:0.8em arial,sans-serif;margin:0 10px 0 10px;text-align:left;} 
.gen { font-size : 12px; } 
.genmed { font-size : 0.8em;; } 
.gensmall { font-size : 10px; } 
.gen,.genmed,.gensmall { color : #000000; } 
a.gen,a.genmed,a.gensmall { color: #006699; text-decoration: none; } 
a.gen:hover,a.genmed:hover,a.gensmall:hover   { color: #DD6900; text-decoration: underline; } 
.code { 
   font-family: Courier, 'Courier New', sans-serif; font-size: 11px; color: #006600; 
   background-color: #FAFAFA; border: #D1D7DC; border-style: solid; 
   border-left-width: 1px; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px 
} 
.quote { 
   font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: #444444; line-height: 125%; 
   background-color: #FAFAFA; border: #D1D7DC; border-style: solid; 
   border-left-width: 1px; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px 
} 
.datetime {font-size:0.8em;color:#FF6600}
.off, .off a, .note, .note a { font-size: 10px; color: #999999; } 
.off a:hover,.note a:hover{color:#FFA34F}
</style> 
</head>
<body>
<xsl:apply-templates/>
</body>
<script><![CDATA[
function sr(s,f,r)
{
  var ret = s;
  var start = ret.indexOf(f);
  while (start>=0)
  {
    ret = ret.substring(0,start) + r + ret.substring(start+f.length,ret.length);
    start = ret.indexOf(f,start+r.length);
  }
  return ret;
}
function moz()
{
  var i, o, d, t;
  for( i = 1; i; i++)
  {
    d = "d_" + i;
    o = document.getElementById(d);
    if( o == null ) break;
    if( null != o.innerText ) break; // IE ok
    t = unescape( o.innerHTML );
    t = sr( t, "&gt;", ">" );
    t = sr( t, "&lt;", "<" );
    t = sr( t, "&amp;", "&" );
    o.innerHTML = t;
  }
}
moz();
]]></script>
</html>
</xsl:template>
<xsl:template match="/rss/channel">
<h1><xsl:attribute name="class">head</xsl:attribute>
<xsl:if test="image">
<a><xsl:attribute name="href"><xsl:value-of select="image/link"/></xsl:attribute>
<img>
<xsl:attribute name="border">0</xsl:attribute>
<xsl:attribute name="src"><xsl:value-of select="image/url"/></xsl:attribute>
<xsl:attribute name="alt"><xsl:value-of select="image/title"/></xsl:attribute>
<xsl:attribute name="align">right</xsl:attribute>
</img></a>
</xsl:if>
<a><xsl:attribute name="href"><xsl:value-of select="link"/></xsl:attribute> 
<xsl:value-of select="title"/></a></h1>
<table cellpadding="3" cellspacing="3"><xsl:attribute name="style">clear:both</xsl:attribute><xsl:attribute name="width">100%</xsl:attribute>
	<tbody>
		<tr>
			<td width="66%">
			<p><xsl:value-of select="description" disable-output-escaping = "yes"/></p> 
			<xsl:if test="lastBuildDate">
			<p class="datetime">
			最後更新時間：
			<xsl:value-of select="lastBuildDate"/></p></xsl:if>
			</td>
			<td width="34%" style="border:1px outset;">
<p>
<xsl:attribute name="class">note</xsl:attribute>
你正在閱讀
<xsl:choose>
<xsl:when test="contains(generator, 'RSS Feed')">
由 <a href="http://naklon.info/rss/about.htm" title="RSS 2.0 and Atom 0.3 Feed for phpBB"> Mozilla Taiwan 討論區</a>
</xsl:when>
<xsl:when test="generator">
由 Mozilla Taiwan 討論區
</xsl:when>
</xsl:choose>
提供的消息來源，且經過 XSL 樣式表處理過。<br/>
要顯示原始的 XML 程式碼，請從瀏覽器中選擇「檢視原始檔」。<br />
<xsl:choose>
<xsl:when test="count(item) = 1">
此消息來源只有 1 篇文章。
</xsl:when>
<xsl:otherwise>
此消息來源有 <xsl:value-of select="count(item)"/> 篇文章。
</xsl:otherwise>
</xsl:choose>
</p>
			</td>
		</tr>
	</tbody>
</table> 
<hr />
<dl> 
<xsl:for-each select="item"> 
    <dt> 
        <a><xsl:attribute name="href"><xsl:value-of select="link"/></xsl:attribute> 
        <xsl:value-of select="title" disable-output-escaping = "yes"/></a> 
    </dt> 
    <dd><xsl:attribute name="id">d_<xsl:value-of select="position()"/></xsl:attribute> 
    <xsl:attribute name="class">genmed</xsl:attribute> 
        <xsl:value-of select="description" disable-output-escaping = "yes"/><br /><span> 
        <xsl:attribute name="class">datetime</xsl:attribute> 
        <xsl:value-of select="pubDate"/></span> 
      </dd> 
</xsl:for-each></dl> 
<hr /><p class="off"><xsl:value-of select="copyright"/></p> 
<xsl:if test="contains(generator, 'RSS Feed')">
<p class="off">下面是這個消息來源可用的參數，請接在網址後：</p>
<ul class="off">
<xsl:choose>
<xsl:when test="contains(generator, 'RSS Feed Album')">
<li>cat_id=x - 相簿 cat ID。 僅列出此分類 ID 的文章列表。</li>
<li>comments - 一併顯示相簿的留言</li>
</xsl:when>
<xsl:otherwise>
<li>f=x - 分區 ID，僅列出此分區 ID 的文章列表。</li>
</xsl:otherwise>
</xsl:choose>
<li>t=0 - 顯示所有討論文章，連回覆也一併顯示。</li>
<li>atom - 產生Atom 0.3 格式的消息來源</li>
<li>c=x - 顯示的文章數目</li>
</ul>
</xsl:if>
 </xsl:template> 
</xsl:stylesheet>