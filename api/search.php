<br/>
<form name="input" action="/api/do.php" method="get">
<input name="act" value="search" type="hidden">
	<fieldset>
		<legend><b>搜索</b></legend>
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td>
                    <input name="word" style="width:100%" type="text">
                </td>
                <td width="120px" align="right">
                    <select name="o" style="width:90%"><option value="default">综合排序</option><option value="stow">收藏数</option><option value="scores">评论数</option><option value="damku">弹幕数</option><option value="click">点击量</option><option value="pubdate">发布日期</option><option value="senddate">修改日期</option><option value="ranklevel">相关度</option><option value="id">投稿编号</option></select>
                </td>
                <td width="120px" align="right">
                    <select name="n" style="width:90%"><option value="5">5个/页</option><option value="10" selected="selected">10个/页</option><option value="20">20个/页</option><option value="30">30个/页</option><option value="50">50个/页</option></select>
                </td>
            </tr>
            <tr>
                <td align="center">
                    <input name="p" value="1" type="hidden"><input value="　　搜索　　" type="submit">
                </td>
            </tr>
        </table>
  </fieldset>
</form>