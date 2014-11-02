<form name="input" action="/api/do.php" method="get">
<input type="hidden" name="act" value="info">
	<fieldset>
		<legend><b>说明</b></legend>
		<fieldset>
			<legend>解析源</legend>
			此功能可获得投稿源视频文件、MP4视频文件、弹幕文件，请填写投稿AV号及分P页码。<br/>目前仅通过调用哔哩哔哩开放API获取信息，如解析失败请检查您的节操。
		</fieldset>
		<fieldset>
			<legend>提示</legend>
			根据哔哩哔哩服务器情况，点击“解析”后可能需要等待数秒，请稍候。<br/>此功能仅为方便哔哩哔哩弹幕网会员保存视频/弹幕资源用，请严格遵守投稿UP主及哔哩哔哩弹幕网的相关规定使用资源。
		</fieldset>
	</fieldset><br/>
	<fieldset>
		<legend><b>解析源</b></legend>
		AV<input type="text" name="av" placeholder="B站投稿号(只填写“AV”后面的数字)" onkeyup="value=value.replace(/[^\d]/g,'')" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))" style="width:280px;ime-mode:Disabled"><br/>
		分P页码：<input type="text" name="page" value="1"><br/>
	</fieldset><br/>	
<center><input type="submit" value="　　　　解析　　　　"></center>
</form>