<?php
if (empty($_SERVER['QUERY_STRING']))
	{
	$title = 'Welcome To Your Bilibili';
	include dirname(__FILE__).'/guide/home.php';
	echo $welcome;
	exit();
	}
else
	{
	if ($_SERVER['QUERY_STRING']=='home')
		{
		$title = '首页';
		$body = '/include/home.php';
		}
	if ($_SERVER['QUERY_STRING']=='list')
		{
		$title = '分区列表';
		$body = '/include/list.php';
		}
	if ($_SERVER['QUERY_STRING']=='bangumi')
		{
		$title = '二次元 - 番组';
		$body = '/include/bangumi.php';
		}
	if (stristr($_SERVER['QUERY_STRING'],'dorama'))
		{
		$title = '三次元 - 番组';
		$body = '/include/dorama.php';
		}
	if ($_SERVER['QUERY_STRING']=='get')
		{
		$title = '下载';
		$body = '/api/info.php';
		}
	if ($_SERVER['QUERY_STRING']=='play')
		{
		$title = '播放';
		$body = '/api/play.php';
		}
	if ($_SERVER['QUERY_STRING']=='search')
		{
		$title = '搜索';
		$body = '/api/search.php';
		}
	if ($_SERVER['QUERY_STRING']=='about')
		{
		$title = '关于';
		$body = '/html/about.php';
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta name="keywords" content="BiliPlus,哔哩哔哩,Bilibili,下载,播放,弹幕,音乐,黑科技,HTML5" />
<meta name="description" content="哔哩哔哩投稿视频、弹幕、音乐下载，更换弹幕播放器，简明现代黑科技 - BiliPlus - ( ゜- ゜)つロ 乾杯~" />
<meta name="author" content="Tundra" />
<meta name="Copyright" content="Copyright Tundra All Rights Reserved." />
<link rel="icon" href="/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<title><?php echo $title; ?> - BiliPlus - ( ゜- ゜)つロ 乾杯~</title>
<style type="text/css">
a{text-decoration:none}
#userbar a:link{color:#FFFFFF}
#userbar a:visited{color:#FFFFFF}
#userbar a:hover{color:#CDCDCD}
#userbar a:active{color:#3388FF}
html,body{margin:0px;width:100%;height:100%;font-size:16px;cursor:default}
div.sidebar{margin:0px;width:150px;height:100%;background-color:#3388FF;box-shadow:5px 0px 0px #858585;position:fixed;top:0px;left:0px}
div.sidebar-title{margin:0px 0px 6px 0px;width:150px;height:75px;background-color:#3388FF;text-align:center;font-family:"Verdana";font-size:50px;font-weight:bold;color:white}
div.sidebar-list{margin:6px 0px 0px 0px;padding:10px 0px 10px 0px;width:150px;text-align:center;font-family:"Microsoft YaHei",SimHei;font-size:20px;font-weight:bold;color:white;box-shadow:0px -6px 0px #FFFFFF}
div.sidebar-about{margin:6px 0px 0px 0px;padding:10px 0px 10px 0px;width:150px;background-color:#3388FF;text-align:center;font-family:"Verdana";font-size:12px;color:white;box-shadow:0px -6px 0px #FFFFFF}
div.sidebar-list-block{margin:0px;padding:10px 0px 10px 0px;width:100%}
div.sidebar div:hover{background:#858585}
div.userbar{margin:0 0 6px 0;padding:0px;width:100%;color:#FFFFFF;text-align:right;font-size:14px;font-family:"Microsoft YaHei";background-color:#D04D74;float:right}
p.userbarcontent{margin:8px}
div.loading{margin:10px 0px 10px 0px;padding:0px;width:100%;height:100%;text-align:center;color:#FFFFFF;font-family:"Microsoft YaHei";font-size:18px;font-weight:bold;background-color:#999999;float:left;display:block;z-index:9}
div.content{margin:0px;padding:0px 0px 0px 160px;width:100%;box-sizing:border-box;float:left;display:block;z-index:1}
</style>
</head>
<body onload="LoadContent()">
<div id="userbar" class="userbar">
<?php
if (empty($_COOKIE['login']))
    {
    echo '请稍候……[如果长时间停留在此页面，请升级您的浏览器]</div><script language="javascript" type="text/javascript">window.location.href="/api/login.php?act=reg&url='.urlencode($_SERVER['REQUEST_URI']).'"</script></body></html>';
    exit();
    }
if ($_COOKIE['login']==1)
    {
    echo '<p class="userbarcontent">欢迎，<b>'.$_COOKIE["uname"].'</b> | <b><a href="https://secure.bilibili.com/login?api=http%3A%2F%2Fwww.bilicloud.com%2Fapi%2Flogin.php&appkey=21087a09e533a072&sign=794e0bbb9d699de15dd0381ef415fbed">连接哔哩哔哩账户</a></b></p>';
    }
if ($_COOKIE['login']==2)
    {
    echo '<p class="userbarcontent">欢迎，<b>'.$_COOKIE["uname"].'</b> | <b><a href="/api/login.php?act=logout">退出哔哩哔哩账户</a></b></p>';
    }
?>
</div>
<div id="loading" class="loading">
<p>少女祈祷中...<br/>Now Loading...</p>
</div>
<div id="content" class="content">
<?php
include_once (dirname(__FILE__).$body);
?>
</div>
<div id="sidebar" class="sidebar">
<div class="sidebar-title">Bili<sup>+</sup></div>
<a href="/?home" onclick="OpenURL()"><div class="sidebar-list">首页</div></a>
<a href="/?list" onclick="OpenURL()"><div class="sidebar-list">热门列表</div></a>
<a href="/?bangumi" onclick="OpenURL()"><div class="sidebar-list">二次元新番</div></a>
<a href="/?dorama" onclick="OpenURL()"><div class="sidebar-list">三次元新番</div></a>
<a href="/?get" onclick="OpenURL()"><div class="sidebar-list">视频下载</div></a>
<a href="/?play" onclick="OpenURL()"><div class="sidebar-list">弹幕播放</div></a>
<a href="/?search" onclick="OpenURL()"><div class="sidebar-list">搜索投稿</div></a>
<a href="/?about" onclick="OpenURL()"><div class="sidebar-list">关于</div></a>
<div class="sidebar-about"><b>Bilibili API Helper</b><br/>© 2014 Tundra Work</div>
</div>
<iframe height="0" width="0" src="/api/login.php?act=visit&url=<?php echo urlencode($_SERVER['REQUEST_URI']); ?>" scrolling="no" border="0" frameborder="no" framespacing="0"></iframe>
<script type="text/javascript">
function LoadContent(){document.getElementById("loading").style.display="none";document.getElementById("content").style.display="block";}
function OpenURL(){document.getElementById("loading").style.display="block";document.getElementById("content").style.display="none";}
document.oncontextmenu=new Function("event.returnValue=false;");
document.onselectstart=new Function("event.returnValue=false;");
</script>
</body>
</html>