<style type="text/css">
hr{width:100%}
div.title{font-family:"Microsoft YaHei";font-size:24px;font-weight:bold}
div.subtitle{font-family:"Verdana";font-size:18px;font-weight:bold}
div.daylistbox{margin:2px;padding:4px;color:#FFFFFF;font-family:"Microsoft YaHei";font-size:15px;font-weight:bold;background-color:#006EDC;display:inline-block}
div.guidebox{margin:0;padding:0;width:100%;height:200px;clear:both}
div.box{margin:0;padding:0;width:350px;height:auto;float:left}
div.boxtitle{margin:0px;padding:6px;width:200px;height:28px;color:#FFFFFF;text-align:center;font-family:"Microsoft YaHei";font-size:18px;font-weight:bold;background-color:#E9006D}
div.boxcontent{margin:0px;padding:4px 0px 0px 0px;width:100%;height:auto;border-top:6px solid #FF4DA0}
td{margin:0px;padding:0px}
tr{margin:0px;padding:0px}
div.more{margin:6px 0px 0px 0px;padding:10px;width:285px;text-align:center;font-family:"Microsoft YaHei";font-size:16px;font-weight:bold;color:white;background-color:#006EDC}
div.listbox{margin:8px 8px 8px 8px;padding:2px;width:240px;height:180px;font-family:"Microsoft YaHei";box-shadow:0px 0px 3px 3px #888888}
div.listboxtitle{margin:0px;padding:0px 0px 4px 0px;font-family:"Microsoft YaHei";font-size:16px;font-weight:bold;box-shadow:0px -4px 0px #FF4DA0 inset;white-space:nowrap;text-overflow:ellipsis;overflow:hidden}
div.listboxtitle:hover{margin:0px;text-overflow:inherit;overflow:visible}
div.listboxinfo{margin:0px;height:16px;text-align:right;font-family:"Microsoft YaHei";font-size:13px;font-weight:bold}
div.listboxbutton1{margin:0px 0px 4px 2px;padding:12px 0px 0px 0px;width:136px;height:32px;color:#FFFFFF;text-align:center;font-family:"Microsoft YaHei";font-size:16px;font-weight:bold;background-color:#1FAAFF}
div.listboxbutton2{margin:0px 0px 0px 2px;padding:14px 0px 0px 0px;width:136px;height:30px;color:#FFFFFF;text-align:center;font-family:"Microsoft YaHei";font-size:14px;font-weight:bold;background-color:#1FAAFF}
div.listboxcontent{margin:0px;padding:6px 0px 0px 0px;height:25px;color:#FFFFFF;text-align:center;font-family:"Microsoft YaHei";font-size:15px;font-weight:bold;background-color:#FF4DA0;overflow:auto}
div.pageselect{margin:4px;padding:6px 0px 0px 0px;text-align:center;color:#FFFFFF;background-color:#1E90FF;font-size:18px;font-weight:bold}
div.about{color:#F57;font-family:"Microsoft YaHei";font-size:14px;font-weight:bold}
</style>
<div class="title">三次元 - 新番放送</div>
<div class="subtitle">我们一路奋战，不是为了改变世界，而是为了不让世界改变我们。</div><hr>
<div class="daylist"><a href="/?dorama&weekday=1"><div class="daylistbox">周一/Monday</div></a><a href="/?dorama&weekday=2"><div class="daylistbox">周二/Tuesday</div></a><a href="/?dorama&weekday=3"><div class="daylistbox">周三/Wednesday</div></a><a href="/?dorama&weekday=4"><div class="daylistbox">周四/Thursday</div></a><a href="/?dorama&weekday=5"><div class="daylistbox">周五/Friday</div></a><a href="/?dorama&weekday=6"><div class="daylistbox">周六/Saturday</div></a><a href="/?dorama&weekday=0"><div class="daylistbox">周日/Sunday</div></a></div><hr>
<?php
include_once dirname(dirname(__FILE__)).'/task/mysql.php';
if (!isset($_GET['weekday']))
    $weekday = date('w');
else
    $weekday = $_GET['weekday'];
if ($weekday==1)
    {
    echo '<div class="boxtitle">周一/Monday</div>
<div class="boxcontent">';
    $bangumi_1 = mysql_query("SELECT * FROM BANGUMI WHERE TYPE='3' AND WEEKDAY='1'");
    $number = 0;
    if (!mysql_fetch_array($bangumi_1))
        echo '<div class="subtitle">怎么找也找不到呢~ ⊙ω⊙</div>';
    else
        {
        while($return = mysql_fetch_array($bangumi_1))
            {
            $title = urlencode($return['TITLE']);
            echo '<div class="listbox" style="float:left"><div class="listboxtitle">'.$return['TITLE'].'</div><div class="listboxinfo">点击:'.$return['CLICK'].' | 关注:'.$return['ATTENTION'].'&nbsp;</div><table style="width:100%;border:0px"><tr><td style="width:96px"><img style="width:96px;max-height:96px" src="'.$return['COVER'].'"></td><td><div class="listboxbutton1">共 '.$return['COUNT'].' 话</div><div class="listboxbutton2">'.$return['LASTUPDATE'].'</div></td></tr></table><a href="/api/do.php?act=viewsp&id='.$return['SPID'].'&title='.$title.'&bangumi=1"><div class="listboxcontent">打开新番专题列表</div></a></div>';
            $number = $number+1;
            }
        }
    echo '</div><div style="clear:both"></div><hr>';
    }
if ($weekday==2)
    {
    echo '<div class="boxtitle">周二/Tuesday</div>
<div class="boxcontent">';
    $bangumi = mysql_query("SELECT * FROM BANGUMI WHERE TYPE='3' AND WEEKDAY='2'");
    $number = 0;
    if (!mysql_fetch_array($bangumi))
        echo '<div class="subtitle">怎么找也找不到呢~ ⊙ω⊙</div>';
    else
        {
        while($return = mysql_fetch_array($bangumi))
            {
            $title = urlencode($return['TITLE']);
            echo '<div class="listbox" style="float:left"><div class="listboxtitle">'.$return['TITLE'].'</div><div class="listboxinfo">点击:'.$return['CLICK'].' | 关注:'.$return['ATTENTION'].'&nbsp;</div><table style="width:100%;border:0px"><tr><td style="width:96px"><img style="width:96px;max-height:96px" src="'.$return['COVER'].'"></td><td><div class="listboxbutton1">共 '.$return['COUNT'].' 话</div><div class="listboxbutton2">'.$return['LASTUPDATE'].'</div></td></tr></table><a href="/api/do.php?act=viewsp&id='.$return['SPID'].'&title='.$title.'&bangumi=1"><div class="listboxcontent">打开新番专题列表</div></a></div>';
            $number = $number+1;
            }
        }
    echo '</div><div style="clear:both"></div><hr>';
    }
if ($weekday==3)
    {
    echo '<div class="boxtitle">周三/Wednesday</div>
<div class="boxcontent">';
    $bangumi_1 = mysql_query("SELECT * FROM BANGUMI WHERE TYPE='3' AND WEEKDAY='3'");
    $number = 0;
    if (!mysql_fetch_array($bangumi_1))
        echo '<div class="subtitle">怎么找也找不到呢~ ⊙ω⊙</div>';
    else
        {
        while($return = mysql_fetch_array($bangumi_1))
            {
            $title = urlencode($return['TITLE']);
            echo '<div class="listbox" style="float:left"><div class="listboxtitle">'.$return['TITLE'].'</div><div class="listboxinfo">点击:'.$return['CLICK'].' | 关注:'.$return['ATTENTION'].'&nbsp;</div><table style="width:100%;border:0px"><tr><td style="width:96px"><img style="width:96px;max-height:96px" src="'.$return['COVER'].'"></td><td><div class="listboxbutton1">共 '.$return['COUNT'].' 话</div><div class="listboxbutton2">'.$return['LASTUPDATE'].'</div></td></tr></table><a href="/api/do.php?act=viewsp&id='.$return['SPID'].'&title='.$title.'&bangumi=1"><div class="listboxcontent">打开新番专题列表</div></a></div>';
            $number = $number+1;
            }
        }
    echo '</div><div style="clear:both"></div><hr>';
    }
if ($weekday==4)
    {
    echo '<div class="boxtitle">周四/Thursday</div>
<div class="boxcontent">';
    $bangumi_1 = mysql_query("SELECT * FROM BANGUMI WHERE TYPE='3' AND WEEKDAY='4'");
    $number = 0;
    if (!mysql_fetch_array($bangumi_1))
        echo '<div class="subtitle">怎么找也找不到呢~ ⊙ω⊙</div>';
    else
        {
        while($return = mysql_fetch_array($bangumi_1))
            {
            $title = urlencode($return['TITLE']);
            echo '<div class="listbox" style="float:left"><div class="listboxtitle">'.$return['TITLE'].'</div><div class="listboxinfo">点击:'.$return['CLICK'].' | 关注:'.$return['ATTENTION'].'&nbsp;</div><table style="width:100%;border:0px"><tr><td style="width:96px"><img style="width:96px;max-height:96px" src="'.$return['COVER'].'"></td><td><div class="listboxbutton1">共 '.$return['COUNT'].' 话</div><div class="listboxbutton2">'.$return['LASTUPDATE'].'</div></td></tr></table><a href="/api/do.php?act=viewsp&id='.$return['SPID'].'&title='.$title.'&bangumi=1"><div class="listboxcontent">打开新番专题列表</div></a></div>';
            $number = $number+1;
            }
        }
    echo '</div><div style="clear:both"></div><hr>';
    }
if ($weekday==5)
    {
    echo '<div class="boxtitle">周五/Friday</div>
<div class="boxcontent">';
    $bangumi_1 = mysql_query("SELECT * FROM BANGUMI WHERE TYPE='3' AND WEEKDAY='5'");
    $number = 0;
    if (!mysql_fetch_array($bangumi_1))
        echo '<div class="subtitle">怎么找也找不到呢~ ⊙ω⊙</div>';
    else
        {
        while($return = mysql_fetch_array($bangumi_1))
            {
            $title = urlencode($return['TITLE']);
            echo '<div class="listbox" style="float:left"><div class="listboxtitle">'.$return['TITLE'].'</div><div class="listboxinfo">点击:'.$return['CLICK'].' | 关注:'.$return['ATTENTION'].'&nbsp;</div><table style="width:100%;border:0px"><tr><td style="width:96px"><img style="width:96px;max-height:96px" src="'.$return['COVER'].'"></td><td><div class="listboxbutton1">共 '.$return['COUNT'].' 话</div><div class="listboxbutton2">'.$return['LASTUPDATE'].'</div></td></tr></table><a href="/api/do.php?act=viewsp&id='.$return['SPID'].'&title='.$title.'&bangumi=1"><div class="listboxcontent">打开新番专题列表</div></a></div>';
            $number = $number+1;
            }
        }
    echo '</div><div style="clear:both"></div><hr>';
    }
if ($weekday==6)
    {
    echo '<div class="boxtitle">周六/Saturday</div>
<div class="boxcontent">';
    $bangumi_1 = mysql_query("SELECT * FROM BANGUMI WHERE TYPE='3' AND WEEKDAY='6'");
    $number = 0;
    if (!mysql_fetch_array($bangumi_1))
        echo '<div class="subtitle">怎么找也找不到呢~ ⊙ω⊙</div>';
    else
        {
        while($return = mysql_fetch_array($bangumi_1))
            {
            $title = urlencode($return['TITLE']);
            echo '<div class="listbox" style="float:left"><div class="listboxtitle">'.$return['TITLE'].'</div><div class="listboxinfo">点击:'.$return['CLICK'].' | 关注:'.$return['ATTENTION'].'&nbsp;</div><table style="width:100%;border:0px"><tr><td style="width:96px"><img style="width:96px;max-height:96px" src="'.$return['COVER'].'"></td><td><div class="listboxbutton1">共 '.$return['COUNT'].' 话</div><div class="listboxbutton2">'.$return['LASTUPDATE'].'</div></td></tr></table><a href="/api/do.php?act=viewsp&id='.$return['SPID'].'&title='.$title.'&bangumi=1"><div class="listboxcontent">打开新番专题列表</div></a></div>';
            $number = $number+1;
            }
        }
    echo '</div><div style="clear:both"></div><hr>';
    }
if ($weekday==0)
    {
    echo '<div class="boxtitle">周日/Sunday</div>
<div class="boxcontent">';
    $bangumi = mysql_query("SELECT * FROM BANGUMI WHERE TYPE='3' AND WEEKDAY='0'");
    $number = 0;
    if (!mysql_fetch_array($bangumi_1))
        echo '<div class="subtitle">怎么找也找不到呢~ ⊙ω⊙</div>';
    else
        {
        while($return = mysql_fetch_array($bangumi_1))
            {
            $title = urlencode($return['TITLE']);
            echo '<div class="listbox" style="float:left"><div class="listboxtitle">'.$return['TITLE'].'</div><div class="listboxinfo">点击:'.$return['CLICK'].' | 关注:'.$return['ATTENTION'].'&nbsp;</div><table style="width:100%;border:0px"><tr><td style="width:96px"><img style="width:96px;max-height:96px" src="'.$return['COVER'].'"></td><td><div class="listboxbutton1">共 '.$return['COUNT'].' 话</div><div class="listboxbutton2">'.$return['LASTUPDATE'].'</div></td></tr></table><a href="/api/do.php?act=viewsp&id='.$return['SPID'].'&title='.$title.'&bangumi=1"><div class="listboxcontent">打开新番专题列表</div></a></div>';
            $number = $number+1;
            }
        }
    echo '</div><div style="clear:both"></div><hr>';
    }
?>
<div class="about">本站不提供任何视听上传服务，所有内容均来自正规视频站点所提供的公开引用资源。<br/>本站所提供影视番剧资源仅供测试，如需观看请访问放映权所有方网站，制作方需要您对正版的支持！</div><br/>