<?php
if (empty($_COOKIE['login'])||!stristr($_COOKIE['visiturl'],'act=play&av='.$_GET['aid']))
    {
    echo 'Access Denied';
    exit();
    }
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
    body{margin:0px;text-align:center}
</style>
</head>
<body>
<?php
if ($_GET["player"]=='bilibili')
	{
	//echo '<iframe src="javascript:\'<embed id=&quot;bofqi_embed&quot; style=&quot;width:100%;height:100%;position:absolute;top:0;left:0;&quot; pluginspage=&quot;http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash&quot; allowfullscreeninteractive=&quot;true&quot; flashvars=&quot;cid='.$_GET["cid"].'&amp;aid='.$_GET["aid"].'&quot; src=&quot;https://static-s.bilibili.com/play.swf&quot; type=&quot;application/x-shockwave-flash&quot; allowscriptaccess=&quot;always&quot; allowfullscreen=&quot;true&quot; quality=&quot;high&quot;>\'" style="border:none" class="video" height="650" width="1160"></iframe>';
	echo '<embed id=&quot;bofqi_embed&quot; style=&quot;width:100%;height:100%;position:absolute;top:0;left:0;&quot; pluginspage=&quot;http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash&quot; allowfullscreeninteractive=&quot;true&quot; flashvars=&quot;cid='.$_GET["cid"].'&amp;aid='.$_GET["aid"].'&quot; src=&quot;https://static-s.bilibili.com/play.swf&quot; type=&quot;application/x-shockwave-flash&quot; allowscriptaccess=&quot;always&quot; allowfullscreen=&quot;true&quot; quality=&quot;high&quot;>';
	}
if ($_GET["player"]=='bilibili_bili')
	{
	echo '<iframe src="javascript:\'<embed id=&quot;bofqi_embed&quot; style=&quot;width:100%;height:100%;position:absolute;top:0;left:0;&quot; pluginspage=&quot;http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash&quot; allowfullscreeninteractive=&quot;true&quot; flashvars=&quot;cid='.$_GET["cid"].'&amp;aid='.$_GET["aid"].'&quot; src=&quot;http://www.bilicloud.com/play/biliplayer_bili.swf&quot; type=&quot;application/x-shockwave-flash&quot; allowscriptaccess=&quot;always&quot; allowfullscreen=&quot;true&quot; quality=&quot;high&quot;>\'" style="border:none" class="video" height="650" width="1160"></iframe>';
	}
if ($_GET["player"]=='bilibili_iqiyi720')
	{
	echo '<iframe src="javascript:\'<embed id=&quot;bofqi_embed&quot; style=&quot;width:100%;height:100%;position:absolute;top:0;left:0;&quot; pluginspage=&quot;http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash&quot; allowfullscreeninteractive=&quot;true&quot; flashvars=&quot;cid='.$_GET["cid"].'&amp;aid='.$_GET["aid"].'&quot; src=&quot;http://www.bilicloud.com/play/biliplayer_iqiyi720.swf&quot; type=&quot;application/x-shockwave-flash&quot; allowscriptaccess=&quot;always&quot; allowfullscreen=&quot;true&quot; quality=&quot;high&quot;>\'" style="border:none" class="video" height="650" width="1160"></iframe>';
	}
if ($_GET["player"]=='bilibili_iqiyi1080')
	{
	echo '<iframe src="javascript:\'<embed id=&quot;bofqi_embed&quot; style=&quot;width:100%;height:100%;position:absolute;top:0;left:0;&quot; pluginspage=&quot;http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash&quot; allowfullscreeninteractive=&quot;true&quot; flashvars=&quot;cid='.$_GET["cid"].'&amp;aid='.$_GET["aid"].'&quot; src=&quot;http://www.bilicloud.com/play/biliplayer_iqiyi1080.swf&quot; type=&quot;application/x-shockwave-flash&quot; allowscriptaccess=&quot;always&quot; allowfullscreen=&quot;true&quot; quality=&quot;high&quot;>\'" style="border:none" class="video" height="650" width="1160"></iframe>';
	}
if ($_GET["player"]=='bilibili_tucao')
	{
	echo '<iframe src="javascript:\'<embed id=&quot;bofqi_embed&quot; style=&quot;width:100%;height:100%;position:absolute;top:0;left:0;&quot; pluginspage=&quot;http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash&quot; allowfullscreeninteractive=&quot;true&quot; flashvars=&quot;cid='.$_GET["cid"].'&amp;aid='.$_GET["aid"].'&quot; src=&quot;http://www.bilicloud.com/play/biliplayer_tucao.swf&quot; type=&quot;application/x-shockwave-flash&quot; allowscriptaccess=&quot;always&quot; allowfullscreen=&quot;true&quot; quality=&quot;high&quot;>\'" style="border:none" class="video" height="650" width="1160"></iframe>';
	}
if ($_GET["player"]=='mukio')
	{
	echo '<embed id="player" style="width:100%;height:100%" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" allowFullScreenInteractive="true" src="/play/mukio.swf" flashvars="cid='.$_GET["cid"].'" type="application/x-shockwave-flash" AllowScriptAccess="always" allowfullscreen="true" quality="high" />';
	}
if ($_GET["player"]=='mukio_3rd')
	{
	echo '<embed id="player" style="width:100%;height:100%" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" allowFullScreenInteractive="true" src="/play/mukio.swf" flashvars="vid='.$_GET["vid"].'&cid='.$_GET["cid"].'" type="application/x-shockwave-flash" AllowScriptAccess="always" allowfullscreen="true" quality="high" />';
	}
if ($_GET["player"]=='tucao')
	{
	echo '<embed id="player" style="width:100%;height:100%" src="http://www.tucao.cc/player.swf?2013.12.10" type="application/x-shockwave-flash" quality="high" allowfullscreen="true" flashvars="type='.$_GET["type"].'&amp;vid='.$_GET["vid"].'&amp;cid=11-'.$_GET["hid"].'-1-'.$_GET["page"].'" allowscriptaccess="always" allownetworking="all" />';
	}
?>
</body>
</html>