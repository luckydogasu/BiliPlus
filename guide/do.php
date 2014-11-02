<?php
function GetSign($params,$key)
    {
    $_data = array();
    ksort($params);
    reset($params);
    foreach ($params as $k => $v)
        {
        $_data[] = $k . '=' . rawurlencode($v);
        }
    $_sign = implode('&', $_data);
    return strtolower(md5($_sign.$key));
    }
function GetInfo($av,$page)
    {
    $sign = GetSign(array("type"=>"json","appkey"=>"21087a09e533a072","id"=>$av,"page"=>$page,"batch"=>"1","check_area"=>"1","platform"=>"android","access_key"=>"237ecfe4b4795a715ea320acda31015a"),'e5b8ba95cab6104100be35739304c23a');
    $apiurl = 'http://api.bilibili.com/view?type=json&appkey=21087a09e533a072&id='.$av.'&page='.$page.'&batch=1&check_area=1&platform=android&access_key=237ecfe4b4795a715ea320acda31015a&sign='.$sign;
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL,$apiurl);
    curl_setopt($curl, CURLOPT_USERAGENT,'BiliPlus-UserGuidePage/1.0.0 (tundrawork@gmail.com)');
    curl_setopt($curl, CURLOPT_REFERER,"http://www.bilibili.tv/");
    curl_setopt($curl, CURLOPT_HEADER,0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION,1);
    $apijson = curl_exec($curl);
    curl_close($curl);
    $info = json_decode($apijson,true);
    return $info;
    }
if (strcasecmp(mb_substr($_GET['q'],0,2,'utf-8'),'AV')==0)
    {
    $str1 = mb_substr($_GET['q'],2);
    if(strlen($str1)<1)
        {
        $view = 0;
        }
    else
        {
        if (preg_match("/^[1-9][0-9]*$/",$str1))
            {
            $view = 1;
            $av = $str1;
            $page = 1;
            }
        else
            {
            $view = 0;
            }
        }
    }
else
    {
    if (mb_stripos($_GET['q'],'/video/av'))
        {
        $str1 = mb_substr($_GET['q'],(mb_stripos($_GET['q'],'/video/av')+9));
        if (mb_stripos($str1,'.html'))
            {
            $view = 1;
            $av = mb_substr($str1,0,(mb_stripos($str1,'/index_')));
            $page = mb_substr($str1,(mb_stripos($str1,'/index_')+7),(mb_stripos($str1,'.html')-(mb_stripos($str1,'/index_')+7)));
            }
        else
            {
            if (mb_substr($str1,-1)=='/')
                {
                $view = 1;
                $av = mb_substr($str1,0,(mb_stripos($str1,'/')));
                $page = 1;
                }
            else
                {
                $view = 1;
                $av = $str1;
                $page = 1;
                }
            }
        }
    else
        {
        if (preg_match("/^[1-9][0-9]*$/",$_GET['q']))
            {
            $view = 2;
            }
        else
            {
            $view = 0;
            }
        }
    }
if ($view==1)
    {
    $info = GetInfo($av,$page);
    if (empty($info['title']))
        {
        echo '<div class="title"><span class="indextitle1">搜索</span><span class="indextitle2"> 您输入的AV号不存在，也许您想进行搜索…</span></div><br/>
<form name="input" action="/api/do.php" method="get">
<input name="act" value="search" type="hidden">
<input name="word" class="inputbar" style="width:700px" type="text" value="'.mb_convert_encoding($_GET['q'],'UTF-8','auto').'"><select name="o"><option value="default">综合排序</option><option value="stow">收藏数</option><option value="scores">评论数</option><option value="damku">弹幕数</option><option value="click">点击量</option><option value="pubdate">发布日期</option><option value="senddate">修改日期</option><option value="ranklevel">相关度</option><option value="id">投稿编号</option></select><select name="n"><option value="5">5个/页</option><option value="10" selected="selected">10个/页</option><option value="20">20个/页</option><option value="30">30个/页</option><option value="50">50个/页</option></select><input name="p" value="1" type="hidden"><button class="inputbutton" type="submit"><span class="inputbutton">搜索</span></button>
</form>';
        }
    else
		    { 
        echo '<div class="title"><span class="indextitle1">下载/播放</span><span class="indextitle2"> 成功检测到AV号，请问您需要做什么呢…</span></div><br/>
<style type="text/css">
div.infocontent{color:#FFF;text-align:center;font-family:"微软雅黑";font-size:18px}
div.url_go{margin:4px;padding:4px;color:#FFFFFF;font-family:"微软雅黑";font-size:20px;font-weight:bold;background-color:#006EDC;border-style:solid;border-width:2px;border-color:#999;display:inline-block}
div.url_back{margin:4px;padding:4px;color:#FFFFFF;font-family:"微软雅黑";font-size:16px;font-weight:bold;background-color:#666666;display:inline-block}
</style>
<div class="infocontent">
<div style="font-size:20px;font-weight:bold">'.$info['title'].'</div>UP主：'.$info['author'].'<br/>'.$info['created_at'].'<br/>'.$info['description'].'<hr/><a href="/api/do.php?act=info&av='.$av.'&page='.$page.'" title="使用BiliPlus下载哔哩哔哩投稿视频"><div class="url_go">使用BiliPlus下载</div></a><a href="/api/do.php?act=play&av='.$av.'&page='.$page.'&player=custom" title="使用BiliPlus播放哔哩哔哩投稿视频"><div class="url_go">使用BiliPlus播放</div></a><br/><a href="javascript:document.location.reload()" title="返回"><div class="url_back">← 返回</div></a>
</div>';
        }
    }
if ($view==0)
    {
    echo '<div class="title"><span class="indextitle1">搜索</span><span class="indextitle2"> 未检测到AV号或B站视频页地址，也许您想进行搜索…</span></div><br/>
<form name="input" action="/api/do.php" method="get">
<input name="act" value="search" type="hidden">
<input name="word" class="inputbar" style="width:700px" type="text" value="'.mb_convert_encoding($_GET['q'],'UTF-8','auto').'"><select name="o"><option value="default">综合排序</option><option value="stow">收藏数</option><option value="scores">评论数</option><option value="damku">弹幕数</option><option value="click">点击量</option><option value="pubdate">发布日期</option><option value="senddate">修改日期</option><option value="ranklevel">相关度</option><option value="id">投稿编号</option></select><select name="n"><option value="5">5个/页</option><option value="10" selected="selected">10个/页</option><option value="20">20个/页</option><option value="30">30个/页</option><option value="50">50个/页</option></select><input name="p" value="1" type="hidden"><button class="inputbutton" type="submit"><span class="inputbutton">搜索</span></button>
</form>';
    }
if ($view==2)
    {
    echo '<div class="title"><span class="indextitle1">下载/播放</span><span class="indextitle2"> 您是否在找“AV'.$_GET['q'].'”？</span></div>
<div style="color:#FFF;text-align:center;font-family:"微软雅黑";font-size:20px;font-weight:bold">请在首页输入“AV'.$_GET['q'].'”以下载/播放此投稿。</div><br/>
<div class="title"><span class="indextitle1">搜索</span><span class="indextitle2"> 未检测到AV号或B站视频页地址，也许您想进行搜索…</span></div><br/>
<form name="input" action="/api/do.php" method="get">
<input name="act" value="search" type="hidden">
<input name="word" class="inputbar" style="width:700px" type="text" value="'.mb_convert_encoding($_GET['q'],'UTF-8','auto').'"><select name="o"><option value="default">综合排序</option><option value="stow">收藏数</option><option value="scores">评论数</option><option value="damku">弹幕数</option><option value="click">点击量</option><option value="pubdate">发布日期</option><option value="senddate">修改日期</option><option value="ranklevel">相关度</option><option value="id">投稿编号</option></select><select name="n"><option value="5">5个/页</option><option value="10" selected="selected">10个/页</option><option value="20">20个/页</option><option value="30">30个/页</option><option value="50">50个/页</option></select><input name="p" value="1" type="hidden"><button class="inputbutton" type="submit"><span class="inputbutton">搜索</span></button>
</form>';
    }
exit;