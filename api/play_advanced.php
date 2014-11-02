<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="author" content="Firefly" />
<meta name="Copyright" content="Copyright netcjy@gmail.com All Rights Reserved." />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<style type="text/css">
body{margin-left:auto;margin-right:auto;width:800px;}
</style>
</head>
<body>
<form name="input" action="/api/do.php?act=play" method="get">
<input type="hidden" name="act" value="play">
	<fieldset>
		<legend>说明</legend>
		<fieldset>
			<legend>弹幕源</legend>
			请填写投稿AV号及分P页码。
		</fieldset>
		<fieldset>
			<legend>视频源</legend>
			如直接使用原投稿自带视频源，请将“视频源”设置全部留空。<br/>如使用自定义视频源，请填写相应站点的视频ID，只可填写一个站点。<br/>由于MukioPlayer长时间未更新，各种视频源设置均可能失效。
		</fieldset>
		<fieldset>
			<legend>播放器</legend>
			MukioPlayer为第三方播放器，支持播放器设置，支持查看/发送普通、高级弹幕，弹幕以游客身份发送。
		</fieldset>
	</fieldset><br/>
	<fieldset>
		<legend>弹幕源</legend>
		AV<input type="text" name="av"><br/>
		分P页码：<input type="text" name="page" value="1"><br/>
	</fieldset><br/>	
	<fieldset>
		<legend>视频源</legend>
		  新浪　vid=<input type="text" name="vid"><br/>
		  优酷　ykid=<input type="text" name="ykid"><br/>
		  腾讯　qid=<input type="text" name="qid"><br/>
		  土豆　tdid=<input type="text" name="tdid"><br/>
		  6间房 rid=<input type="text" name="rid"><br/>
	</fieldset><br/>
	<fieldset>
		<legend>设置</legend>
		播放器：<select name="player"><option value="mukio">MukioPlayer</option></select><br/>
	</fieldset><br/>
<center><input type="submit" value="　　播放　　"></center>
</form>
<br/>
</body>
</html>