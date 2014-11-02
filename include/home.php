<?php
$hitokoto_src = json_decode(file_get_contents('http://api.hitokoto.us/rand?cat=a'),true);
if (!empty($hitokoto_src))
    $hitokoto = $hitokoto_src['hitokoto'].' —— '.$hitokoto_src['source'];
else
    $hitokoto = '# Hitokoto太累啦，稍后刷新页面也许就能看到你喜欢的动漫台词哦~ #';
?>
<style type="text/css">
hr{width:100%}
div.indextitle{margin:0px;padding:0px 16px 0px 16px;width:100%;text-align:left;font-weight:bold;background-color:#38F;box-sizing:border-box;float:left}
span.indextitle1{font-family:Verdana;color:#FFFFFF;font-size:48px}
span.indextitle2{font-family:Microsoft YaHei;color:#FFFFFF;font-size:24px}
div.subtitle{font-family:Microsoft YaHei;font-size:18px;font-weight:bold;text-shadow:0px 0px 4px #888888}
div.guidebox{margin:0;padding:0;width:100%;height:180px;clear:both}
div.box{margin:0;padding:0;width:340px;height:auto;float:left}
div.boxtitle-1{margin:4px 4px 0 4px;padding:6px;width:200px;height:28px;color:#FFFFFF;text-align:center;font-family:"Microsoft YaHei";font-size:18px;font-weight:bold;background-color:#006EDC}
div.boxcontent-1{margin:0px 4px 4px 4px;padding:12px;width:308px;height:auto;color:#FFFFFF;font-family:"Verdana";font-size:16px;font-weight:bold;background-color:#1E90FF}
div.boxtitle-2{margin:0px;padding:6px;width:200px;height:28px;color:#FFFFFF;text-align:center;font-family:"Microsoft YaHei";font-size:18px;font-weight:bold;background-color:#006EDC}
div.boxcontent-2{margin:0px;padding:4px 0px 0px 0px;width:100%;height:auto;border-top:6px solid #1E90FF}
input{border:0px none}
input.text1{width:280px;font-family:"Verdana";font-size:16px;font-weight:bold}
input.text2{width:300px;font-family:"Verdana";font-size:16px;font-weight:bold}
input.submit{margin:6px 0 6px 0;width:305px;font-family:"Microsoft YaHei";font-size:16px;font-weight:bold}
div.more{margin:6px 0px 0px 0px;padding:10px;width:285px;text-align:center;font-family:"Microsoft YaHei";font-size:16px;font-weight:bold;color:white;background-color:#006EDC}
div.buttonleft{margin:4px;padding:0px 4px 0px 4px;width:480px;height:80px;line-height:80px;text-align:left;font-weight:bold;background-color:#006EDC;float:left}
div.buttonright{margin:4px;padding:0px 4px 0px 4px;width:480px;height:80px;line-height:80px;text-align:right;font-weight:bold;background-color:#006EDC;float:left}
span.arrow{font-family:Tahoma;color:#FFFFFF;font-size:48px}
span.title{padding-left:20px;padding-right:20px;font-family:Microsoft YaHei;color:#FFFFFF;font-size:30px}
span.content{font-family:Microsoft YaHei;color:#EEEEEE;font-size:20px}
div.about{color:#F57;font-family:"Microsoft YaHei";font-size:14px;font-weight:bold}
div.tip{margin:4px;padding:2px;color:#FFFFFF;text-align:center;font-family:微软雅黑;font-size:13px;font-weight:bold;background-color:green}
</style>
<div class="indextitle"><span class="indextitle1">BiliPlus</span><span class="indextitle2"> , ( ゜- ゜)つロ 乾杯~</span></div>
<div class="subtitle"><?php echo $hitokoto; ?></div><hr>
<div class="guidebox">
<div class="box">
<div class="boxtitle-1">下载视频文件/弹幕XML</div>
<div class="boxcontent-1">
<form name="input" action="/api/do.php" method="get">
<input type="hidden" name="act" value="info"><input type="hidden" name="page" value=""><input type="hidden" name="type" value="flv">
AV<input class="text1" type="text" name="av" placeholder="B站投稿号(只填写“AV”后面的数字)" onkeyup="value=value.replace(/[^\d]/g,'')" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))" style="ime-mode:Disabled"><br/>
<input class="submit" type="submit" value="解析"></form>
<a href="/?get"><div class="more" onMouseOut="this.style.backgroundColor=''" onMouseOver="this.style.backgroundColor='#858585'">更多高级选项……</div></a>
</div>
</div>
<div class="box">
<div class="boxtitle-1">播放弹幕视频</div>
<div class="boxcontent-1">
<form name="input" action="/api/do.php" method="get">
<input type="hidden" name="act" value="play"><input type="hidden" name="page" value="1"><input type="hidden" name="player" value="custom">
AV<input class="text1" type="text" name="av" placeholder="B站投稿号(只填写“AV”后面的数字)" onkeyup="value=value.replace(/[^\d]/g,'')" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))" style="ime-mode:Disabled"><br/>
<input class="submit" type="submit" value="播放"></form>
<a href="/?play"><div class="more" onMouseOut="this.style.backgroundColor=''" onMouseOver="this.style.backgroundColor='#858585'">更多高级选项……</div></a>
</div>
</div>
<div class="box">
<div class="boxtitle-1">搜索投稿/专题</div>
<div class="boxcontent-1">
<form name="input" action="/api/do.php" method="get">
<input type="hidden" name="act" value="search"><input type="hidden" name="p" value="1"><input type="hidden" name="o" value="default"><input type="hidden" name="n" value="10">
    <input class="text2" type="text" name="word" placeholder="输入投稿/视频/专题/UP主等关键字"><br/>
<input class="submit" type="submit" value="搜索"></form>
<a href="/?search"><div class="more" onMouseOut="this.style.backgroundColor=''" onMouseOver="this.style.backgroundColor='#858585'">更多高级选项……</div></a>
</div>
</div>
</div><hr>
<div class="boxtitle-2">浏览更多视频</div>
<div class="boxcontent-2">
<a href="/?list"><div class="buttonleft"><span class="arrow">◀</span><span class="title">分区列表</span><span class="content">各分区前排热门视频</span></div></a>
<a href="/?bangumi"><div class="buttonright"><span class="content">每日二次元新番列表</span><span class="title">新番放送</span><span class="arrow">▶</span></div></a>
</div><div style="clear:both"></div><hr>
<div class="about">本站不提供任何视听上传服务，所有内容均来自正规视频站点所提供的公开引用资源。<br/>本站所提供动画番剧资源仅供测试，如需观看请访问放映权所有方网站，制作方需要您对正版的支持！</div><br/>