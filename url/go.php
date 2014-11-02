<?php
if ($_SERVER['HTTPS']!='on')
	{
	$xredir='https://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
	header('Location: '.$xredir);
	exit();
	}
?>
<?php
$referrer = parse_url($_SERVER['HTTP_REFERER']);
if (!empty($referrer['host'])&&$referrer['host']!='www.bilicloud.com')
	{
	header('Location: http://www.bilicloud.com');
	exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<?php
if (empty($_GET['url']))
	{
	exit();
	}
else
	{
	echo '<meta http-equiv="refresh" content="1; url='.$_GET['url'].'" />';
	}
?>

<link rel="stylesheet" href="https://biliplus.sinaapp.com/style/iframe.css?no_rewrite=true" type="text/css">
<link rel="shortcut icon" href="https://biliplus.sinaapp.com/favicon.ico?no_rewrite=true" />
<title>次元跳转 - BiliPlus - ( ゜- ゜)つロ 乾杯~</title>
</head>
<body>
<br/>
<div class="iframetitle">次元跳转</div>
<div class="iframedescription">BiliPlus文件下载跳转页面</div>
<br/>
<hr>
<br/>
<div class="iframesubtitle">下载地址</div><br/><br/>
<div>请稍候，下载将在1秒后自动开始……<br/>如果您的浏览器没有正常开始文件下载，请 <a href="<?php echo $_GET['url']; ?>">点击这里</a> 下载文件。</div>
<br/>
<hr>
<div style="text-align:center;font-size:12px;font-weight:bold">&copy;2014 BiliPlus 严禁盗用此页面</div>
</body>
</html>