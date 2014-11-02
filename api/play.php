<style type="text/css">
a{text-decoration:none}
a:link{color:#1E90FF}
a:visited{color:#1E90FF}
a:hover{color:#BBBBBB}
a:active{color:#BBBBBB}
</style>
<form name="input" action="/api/do.php" method="get">
<input type="hidden" name="act" value="play">
	<fieldset>
		<legend><b>说明</b></legend>
		<fieldset>
			<legend>视频/弹幕源</legend>
			请填写投稿AV号及分P页码。<br/>目前仅支持解析哔哩哔哩源。
		</fieldset>
		<fieldset>
			<legend>播放器</legend>
			<b>BiliPlayer</b>　哔哩哔哩官方播放器，支持所有功能<br/><b>HTML5</b>　适合不支持Flash的移动设备/Mac OS系统使用，不支持发送弹幕 [<a href="/html/html5player.html" target="_blank"><b>详细浏览器支持情况</b></a>]<br/><b>MukioPlayer</b>　哔哩哔哩早期播放器，支持播放器设置，支持查看/发送普通、高级弹幕，弹幕以游客身份发送
		</fieldset>
	</fieldset><br/>
	<fieldset>
		<legend><b>视频/弹幕源</b></legend>
		AV<input type="text" name="av" placeholder="B站投稿号(只填写“AV”后面的数字)" onkeyup="value=value.replace(/[^\d]/g,'')" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))" style="width:280px;ime-mode:Disabled"><br/>
		分P页码：<input type="text" name="page" value="1"><br/>
	</fieldset><br/>	
	<fieldset>
		<legend><b>设置</b></legend>
		播放器：<select name="player"><option value="bilibili">BiliPlayer</option><option value="html5">HTML5</option><option value="mukio">MukioPlayer</option></select><br/>
	</fieldset><br/>
<center><input type="submit" value="　　　　播放　　　　"></center>
</form>