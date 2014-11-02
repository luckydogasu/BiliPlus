<style type="text/css">
hr{width:100%}
div.title{font-family:"Microsoft YaHei";font-size:24px;font-weight:bold}
div.subtitle{font-family:"Verdana";font-size:18px;font-weight:bold}
div.guidebox{margin:0;padding:0;width:100%;height:200px;clear:both}
div.box{margin:0;padding:0;width:350px;height:auto;float:left}
div.boxtitle{margin:0px;padding:6px;width:200px;height:28px;color:#FFFFFF;text-align:center;font-family:"Microsoft YaHei";font-size:18px;font-weight:bold;background-color:#E9006D}
div.boxcontent{margin:0px;padding:4px 0px 0px 0px;width:100%;height:auto;border-top:6px solid #FF4DA0}
input{border:0px none}
input.text{width:280px;font-family:"Verdana";font-size:16px;font-weight:bold}
input.submit{margin:6px 0 6px 0;width:305px;font-family:"Microsoft YaHei";font-size:16px;font-weight:bold}
div.more{margin:6px 0px 0px 0px;padding:10px;width:285px;text-align:center;font-family:"Microsoft YaHei";font-size:16px;font-weight:bold;color:white;background-color:#006EDC}
div.listbox{margin:8px 8px 8px 8px;padding:2px;width:260px;height:200px;font-family:"Microsoft YaHei";box-shadow:0px 0px 3px 3px #888888}
div.listboxtitle{margin:0px;padding:0px 0px 4px 0px;font-family:"Microsoft YaHei";font-size:15px;font-weight:bold;box-shadow:0px -4px 0px #FF4DA0 inset;white-space:nowrap;text-overflow:ellipsis;overflow:hidden}
div.listboxtitle:hover{text-overflow:inherit;overflow:visible}
div.listboxinfo{height:15px;text-align:right;font-family:"Microsoft YaHei";font-size:12px;font-weight:bold}
    div.listboxbutton{margin:0px 0px 4px 4px;width:126px;height:40px;line-height:40px;color:#FFFFFF;text-align:center;font-family:"Microsoft YaHei";font-size:14px;font-weight:bold;background-color:#1FAAFF}
div.listboxcontent{height:64px;font-family:"Microsoft YaHei";font-size:12px;background-color:#DDDDDD;overflow:auto}
div.about{color:#F57;font-family:"Microsoft YaHei";font-size:14px;font-weight:bold}
</style>
<div class="title">分区列表</div>
<div class="subtitle">I used to be an adventurer like you, then I took an arrow in the knee.</div><hr>
<?php
include_once dirname(dirname(__FILE__)).'/task/mysql.php';
?>
<div class="boxtitle">动画</div>
<div class="boxcontent">
<?php
$list_hot = mysql_query("SELECT * FROM LIST_AMINE");
$number = 0;
while($return = mysql_fetch_array($list_hot))
    {
    echo '<div class="listbox" style="float:left"><div class="listboxtitle">'.$return['TITLE'].'</div><div class="listboxinfo">播放:'.$return['PLAY'].' | 弹幕:'.$return['DANMU'].' | 收藏:'.$return['FAVOURITE'].'&nbsp;</div><table style="width:100%;border:0px"><tr><td style="width:120px"><img style="max-width:120px;max-height:90px" src="'.$return['PIC'].'"></td><td><a href="/api/do.php?act=info&av='.$return['AID'].'&page=1"><div class="listboxbutton">下载视频文件</div></a><a href="/api/do.php?act=play&av='.$return['AID'].'&page=1&player=custom"><div class="listboxbutton">播放弹幕视频</div></a></td></tr></table><div class="listboxcontent">'.$return['INFO'].'</div></div>';
    $number = $number+1;
    }
?>
</div><div style="clear:both"></div><hr>
<div class="boxtitle">音乐·舞蹈</div>
<div class="boxcontent">
<?php
$list_music = mysql_query("SELECT * FROM LIST_MUSIC");
$number = 0;
while($return = mysql_fetch_array($list_music))
    {
    echo '<div class="listbox" style="float:left"><div class="listboxtitle">'.$return['TITLE'].'</div><div class="listboxinfo">播放:'.$return['PLAY'].' | 弹幕:'.$return['DANMU'].' | 收藏:'.$return['FAVOURITE'].'&nbsp;</div><table style="width:100%;border:0px"><tr><td style="width:120px"><img style="max-width:120px;max-height:90px" src="'.$return['PIC'].'"></td><td><a href="/api/do.php?act=info&av='.$return['AID'].'&page=1"><div class="listboxbutton">下载视频文件</div></a><a href="/api/do.php?act=play&av='.$return['AID'].'&page=1&player=custom"><div class="listboxbutton">播放弹幕视频</div></a></td></tr></table><div class="listboxcontent">'.$return['INFO'].'</div></div>';
    $number = $number+1;
    }
?>
</div><div style="clear:both"></div><hr>
<div class="boxtitle">游戏</div>
<div class="boxcontent">
<?php
$list_game = mysql_query("SELECT * FROM LIST_GAME");
$number = 0;
while($return = mysql_fetch_array($list_game))
    {
    echo '<div class="listbox" style="float:left"><div class="listboxtitle">'.$return['TITLE'].'</div><div class="listboxinfo">播放:'.$return['PLAY'].' | 弹幕:'.$return['DANMU'].' | 收藏:'.$return['FAVOURITE'].'&nbsp;</div><table style="width:100%;border:0px"><tr><td style="width:120px"><img style="max-width:120px;max-height:90px" src="'.$return['PIC'].'"></td><td><a href="/api/do.php?act=info&av='.$return['AID'].'&page=1"><div class="listboxbutton">下载视频文件</div></a><a href="/api/do.php?act=play&av='.$return['AID'].'&page=1&player=custom"><div class="listboxbutton">播放弹幕视频</div></a></td></tr></table><div class="listboxcontent">'.$return['INFO'].'</div></div>';
    $number = $number+1;
    }
?>
</div><div style="clear:both"></div><hr>
<div class="boxtitle">娱乐</div>
<div class="boxcontent">
<?php
$list_entertainment = mysql_query("SELECT * FROM LIST_ENTERTAINMENT");
$number = 0;
while($return = mysql_fetch_array($list_entertainment))
    {
    echo '<div class="listbox" style="float:left"><div class="listboxtitle">'.$return['TITLE'].'</div><div class="listboxinfo">播放:'.$return['PLAY'].' | 弹幕:'.$return['DANMU'].' | 收藏:'.$return['FAVOURITE'].'&nbsp;</div><table style="width:100%;border:0px"><tr><td style="width:120px"><img style="max-width:120px;max-height:90px" src="'.$return['PIC'].'"></td><td><a href="/api/do.php?act=info&av='.$return['AID'].'&page=1"><div class="listboxbutton">下载视频文件</div></a><a href="/api/do.php?act=play&av='.$return['AID'].'&page=1&player=custom"><div class="listboxbutton">播放弹幕视频</div></a></td></tr></table><div class="listboxcontent">'.$return['INFO'].'</div></div>';
    $number = $number+1;
    }
?>
</div><div style="clear:both"></div><hr>
<div class="boxtitle">科学·技术</div>
<div class="boxcontent">
<?php
$list_science = mysql_query("SELECT * FROM LIST_SCIENCE");
$number = 0;
while($return = mysql_fetch_array($list_science))
    {
    echo '<div class="listbox" style="float:left"><div class="listboxtitle">'.$return['TITLE'].'</div><div class="listboxinfo">播放:'.$return['PLAY'].' | 弹幕:'.$return['DANMU'].' | 收藏:'.$return['FAVOURITE'].'&nbsp;</div><table style="width:100%;border:0px"><tr><td style="width:120px"><img style="max-width:120px;max-height:90px" src="'.$return['PIC'].'"></td><td><a href="/api/do.php?act=info&av='.$return['AID'].'&page=1"><div class="listboxbutton">下载视频文件</div></a><a href="/api/do.php?act=play&av='.$return['AID'].'&page=1&player=custom"><div class="listboxbutton">播放弹幕视频</div></a></td></tr></table><div class="listboxcontent">'.$return['INFO'].'</div></div>';
    $number = $number+1;
    }
?>
</div><div style="clear:both"></div><hr>
<div class="boxtitle">番组</div>
<div class="boxcontent">
<?php
$list_bangumi = mysql_query("SELECT * FROM LIST_BANGUMI");
$number = 0;
while($return = mysql_fetch_array($list_bangumi))
    {
    echo '<div class="listbox" style="float:left"><div class="listboxtitle">'.$return['TITLE'].'</div><div class="listboxinfo">播放:'.$return['PLAY'].' | 弹幕:'.$return['DANMU'].' | 收藏:'.$return['FAVOURITE'].'&nbsp;</div><table style="width:100%;border:0px"><tr><td style="width:120px"><img style="max-width:120px;max-height:90px" src="'.$return['PIC'].'"></td><td><a href="/api/do.php?act=info&av='.$return['AID'].'&page=1"><div class="listboxbutton">下载视频文件</div></a><a href="/api/do.php?act=play&av='.$return['AID'].'&page=1&player=custom"><div class="listboxbutton">播放弹幕视频</div></a></td></tr></table><div class="listboxcontent">'.$return['INFO'].'</div></div>';
    $number = $number+1;
    }
?>
</div><div style="clear:both"></div><hr>
<div class="boxtitle">影视剧</div>
<div class="boxcontent">
<?php
$list_film = mysql_query("SELECT * FROM LIST_FILM");
$number = 0;
while($return = mysql_fetch_array($list_film))
    {
    echo '<div class="listbox" style="float:left"><div class="listboxtitle">'.$return['TITLE'].'</div><div class="listboxinfo">播放:'.$return['PLAY'].' | 弹幕:'.$return['DANMU'].' | 收藏:'.$return['FAVOURITE'].'&nbsp;</div><table style="width:100%;border:0px"><tr><td style="width:120px"><img style="max-width:120px;max-height:90px" src="'.$return['PIC'].'"></td><td><a href="/api/do.php?act=info&av='.$return['AID'].'&page=1"><div class="listboxbutton">下载视频文件</div></a><a href="/api/do.php?act=play&av='.$return['AID'].'&page=1&player=custom"><div class="listboxbutton">播放弹幕视频</div></a></td></tr></table><div class="listboxcontent">'.$return['INFO'].'</div></div>';
    $number = $number+1;
    }
?>
</div><div style="clear:both"></div><hr>
<div class="about">本站不提供任何视听上传服务，所有内容均来自正规视频站点所提供的公开引用资源。<br/>本站所提供动画番剧资源仅供测试，如需观看请访问放映权所有方网站，制作方需要您对正版的支持！</div><br/>