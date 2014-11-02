<?php
$welcome = '<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <meta name="keywords" content="BiliPlus,哔哩哔哩,Bilibili,下载,播放,弹幕,音乐,黑科技,HTML5" />
        <meta name="description" content="哔哩哔哩投稿视频、弹幕、音乐下载，更换弹幕播放器，简明现代黑科技 - BiliPlus - ( ゜- ゜)つロ 乾杯~" />
        <meta name="author" content="Tundra">
        <meta name="Copyright" content="Copyright Tundra All Rights Reserved.">
        <link rel="shortcut icon" href="/favicon.ico">
        <title>BiliPlus - ( ゜- ゜)つロ 乾杯~</title>
        <style type="text/css">
html,body{height:100%;margin:0;overflow:hidden;padding:0;width:100%}
div.loading{background-color:#888;border-radius:16px;box-shadow:0 0 16px #000;color:#FFF;float:center;font-family:"Microsoft YaHei";font-size:18px;font-weight:700;height:160px;left:50%;line-height:40px;margin-left:-200px;margin-top:-80px;padding:20px;position:fixed;text-align:center;top:50%;width:400px}
div.content{background-attachment:fixed;background-image:url(http://bcs.duapp.com/cloudres/img%2Fbackground%2F01.jpg?sign=MBO:u32dsmgjqnbb2g4Vt9e1oCI6:vVdifFVOooEmrKe%2BCn4Ncoqs%2B24%3D);background-position:50% 50%;background-repeat:no-repeat;float:left;height:100%;margin:0;padding:0;width:100%}
div.mainbox{background-color:rgba(0,0,0,0.6);border-radius:16px;box-shadow:0 0 16px #000;filter:alpha(opacity=60);left:50%;margin-left:-500px;padding:20px;position:fixed;top:50%;width:1000px}
div.mainboxcontent{margin:20px;position:relative}
div.title{text-shadow:0 0 6px #38F}
span.indextitle1{color:#EEE;font-family:Microsoft YaHei;font-size:48px}
span.indextitle2{color:#AAA;font-family:Microsoft YaHei;font-size:24px}
span.hidden{font-size:0;height:0;width:0}
div.linkbutton{display:block;height:80px;margin:20px 0 0}
div.hitokoto{color:#AAA;display:block;font-family:"Microsoft YaHei";font-size:16px;line-height:60px;text-align:center;text-shadow:0 0 8px #000}
input.inputbar{-webkit-appearance:none;-webkit-rtl-ordering:logical;-webkit-transition-delay:0 0;-webkit-transition-duration:.15s .15s;-webkit-transition-property:border-color, box-shadow;-webkit-transition-timing-function:ease-in-out, ease-in-out;-webkit-user-select:text;-webkit-writing-mode:horizontal-tb;background-color:rgba(0,0,0,0.6);background-image:none;border-bottom-left-radius:8px;border-bottom-right-radius:0;border-collapse:separate;border-color:#38F;border-image-outset:0;border-image-repeat:stretch;border-image-slice:100%;border-image-source:none;border-image-width:1;border-style:solid;border-top-left-radius:8px;border-top-right-radius:0;border-width:1px;box-shadow:none;box-sizing:border-box;color:#006EDC;cursor:auto;display:inline-block;font-family:"Microsoft YaHei";font-size:18px;font-weight:700;height:45px;letter-spacing:normal;line-height:24px;margin:0;padding:10px 16px;position:relative；;text-align:start;text-indent:0;text-shadow:none;text-transform:none;top:0;transition-delay:0 0;transition-duration:.15s .15s;transition-property:border-color, box-shadow;transition-timing-function:ease-in-out, ease-in-out;vertical-align:middle;width:900px;word-spacing:0;writing-mode:lr-tb}
select{background:#38F no-repeat 90% center;border:0;box-shadow:inset 0 0 5px rgba(000,000,000,0.5);color:#BBB;font-family:"Microsoft YaHei";font-size:16px;font-weight:700;height:45px;padding:0;position:relative;top:2px;width:100px}
button.inputbutton{align-items:flex-start;background-color:#ececec;background-image:none;border-bottom-left-radius:0;border-bottom-right-radius:8px;border-collapse:separate;border-color:#38F;border-image-outset:0;border-image-repeat:stretch;border-image-slice:100%;border-image-source:none;border-image-width:1px;border-style:solid;border-top-left-radius:0;border-top-right-radius:8px;border-width:1px;box-sizing:border-box;color:#323232;cursor:pointer;display:inline-block;height:45px;letter-spacing:normal;line-height:24px;margin:0 0 0 -1px;padding:10px;position:relative；;text-align:center;text-indent:0;text-shadow:none;text-transform:none;top:0;vertical-align:middle;white-space:nowrap;width:60px;word-spacing:0;writing-mode:lr-tb}
span.inputbutton{border-collapse:separate;box-sizing:border-box;color:#323232;cursor:pointer;display:inline-block;font-family:Verdana;font-size:18px;font-style:normal;font-weight:700;height:18px;letter-spacing:normal;line-height:18px;margin:0 0 0 -16px;padding:0;text-align:center;text-indent:0;text-shadow:none;text-transform:none;white-space:nowrap;width:18px;word-spacing:0}
div.buttonleft{background-color:rgba(0,0,0,0.6);border-color:#38F;border-radius:8px;border-style:solid;border-width:1px;float:left;font-weight:700;height:60px;line-height:60px;margin:0;padding:0 4px;text-align:center;text-shadow:#38F 0 0 4px;width:450px}
div.buttonright{background-color:rgba(0,0,0,0.6);border-color:#38F;border-radius:8px;border-style:solid;border-width:1px;float:right;font-weight:700;height:60px;line-height:60px;margin:0;padding:0 4px;text-align:center;text-shadow:#38F 0 0 4px;width:450px}
span.arrow{color:#DDD;font-family:Tahoma;font-size:40px}
span.title{color:#DDD;font-family:Microsoft YaHei;font-size:24px;padding-left:20px;padding-right:20px}
span.content{color:#AAA;font-family:Microsoft YaHei;font-size:18px}
        </style>
        <script type="text/javascript">
function LoadContent(){
document.getElementById("loading").style.visibility="hidden";
document.getElementById("loading").style.height="0px";
document.getElementById("content").style.visibility="visible";
}
function LoadDiv(){
var url="/guide/do.php?q="+document.getElementById("inputbar").value;
document.getElementById("mainboxcontent").innerHTML="<style type=\"text/css\">div.mainboxcontent{color:#FFF;font-weight:bold;text-align:center}</style>少女祈祷中，请稍候……<br/>Now Loading, Please Wait…";
document.getElementById("mainboxcontent").style.height = document.getElementById("mainboxcontent").offsetHeight+"px";
document.getElementById("mainbox").style.marginTop = -document.getElementById("mainboxcontent").offsetHeight/2+"px";
var xmlhttp;
xmlhttp=new XMLHttpRequest();
xmlhttp.onreadystatechange=state_Change;
xmlhttp.open("GET",url,true);
xmlhttp.send();
function state_Change(){
if (xmlhttp.readyState==4)
  {
  if (xmlhttp.status==200)
    {
    document.getElementById("mainboxcontent").style.height = "";
    document.getElementById("mainboxcontent").innerHTML=xmlhttp.responseText;
    document.getElementById("mainboxcontent").style.height = document.getElementById("mainboxcontent").offsetHeight+"px";
    document.getElementById("mainbox").style.marginTop = -document.getElementById("mainboxcontent").offsetHeight/2+"px";
    }
  else
    {
    document.getElementById("mainboxcontent").innerHTML="<style type=\"text/css\">div.mainboxcontent{color:#FFF;font-weight:bold;text-align:center}</style>AJAX请求未成功接收到数据，请重试或反馈错误...";
    }
  }
}
}
function hitokoto(src){
var Hitokoto=document.getElementById("hitokoto");
var hitokoto_text=src.hitokoto+" —— "+src.source;
Hitokoto.innerHTML=hitokoto_text;
}
document.getElementById("inputbar").onkeydown=function(){
  if (event.keyCode==13){
  LoadDiv();
  }
}
document.oncontextmenu=function(){return false;};
document.onselectstart=function(){return false;};
        </script>
    </head>
    <body onload="LoadContent();">
        <div id="loading" class="loading" style="visibility:visible">
            <p>少女祈祷中，请稍后...<br/>Now Loading, Please Wait...<br/>&copy; 2014</p>
        </div>
        <div id="content" class="content" style="visibility:hidden">
            <div id="mainbox" class="mainbox">
                <div id="mainboxcontent" class="mainboxcontent">
                    <style type="text/css">div.mainbox{margin-top:-160px;height:320px}</style>
                    <div class="title"><span class="indextitle1">BiliPlus</span><span class="indextitle2"> , ( ゜- ゜)つロ 乾杯~</span></div><br/>
                    <input id="inputbar" class="inputbar" placeholder="请输入 : 投稿AV号(如:AV221107) / Bilibili视频播放页面地址 / 任何想搜索的内容"><button class="inputbutton" style="height:45px" type="submit" onclick="LoadDiv()"><span class="inputbutton">GO</span></button><br/>
                    <div class="linkbutton">
                        <a href="/?list"><div class="buttonleft"><span class="arrow">▶</span><span class="title">分区列表</span><span class="hidden"> - </span><span class="content">各分区前排热门视频</span></div></a>
                        <a href="/?bangumi"><div class="buttonright"><span class="arrow">▶</span><span class="title">新番放送</span><span class="hidden"> - </span><span class="content">每日二次元新番列表</span></div></a>
                    </div>
                    <div id="hitokoto" class="hitokoto"></div>
                    <script type="text/javascript">setTimeout(function(){var hjs=document.createElement(\'script\');hjs.setAttribute(\'src\',\'http://api.hitokoto.us/rand?encode=jsc&cat=a\');document.body.appendChild(hjs);},100);</script>
                </div>
            </div>
        </div>
    </body>
</html>';