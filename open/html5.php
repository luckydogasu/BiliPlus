<?php
require dirname(dirname(__FILE__)).'/task/mysql.php';
if (!empty($_GET["type"]))
    {
    if (!empty($_GET["width"]))
        $width = $_GET["width"];
    else
        $width = 1024;
    if (!empty($_GET["height"]))
        $height = $_GET["height"];
    else
        $height = 576;
    if ($_GET["type"]=='bilibili')
        {
        if (preg_match("/^[1-9][0-9]*$/",$_GET["av"]))
            {
            if (!empty($_GET["page"]))
				{
				if (preg_match("/^[1-9][0-9]*$/",$_GET["page"]))
					{
					$page = $_GET["page"];
					}
				else
					{
					echo json_encode(array('code'=>400,'error'=>'Bad Request'));
					}
				}
            else
                $page = 1;
            $id = $_GET["av"].'_'.$page;
            $apijson = mysql_query("SELECT * FROM CACHE_PAGE WHERE ID='{$id}'");
            if (!mysql_num_rows($apijson))
                {
                $error = 1;
                $e_text = 'Error: [404] AV id not found.';
                }
            else
                {
                $apijson = mysql_fetch_array($apijson);
                $return = json_decode($apijson['DATA'],true);
                if (isset($return['list'][($page-1)]['cid']))
                    {
                    $cid = $return['list'][($page-1)]['cid'];
                    $mp4 = json_decode($apijson['MP4'],true);
                    if (stristr($mp4['src'],'letv'))
                        {
                        $video = $mp4['src'];
                        $comment = 'http://comment.bilibili.com/'.$cid.'.xml';
                        }
                    else
                        {
                        $error = 9;
                        $e_text = 'Error: [500] Could not found LETV MP4 file.';
                        }
                    }
                else
                    {
                    $error = 1;
                    $e_text = 'Error: [404] Page not found.';
                    }
                }
            }
        else
            {
            $error = 9;
            $e_text = 'Error: [400] Bad request.';
            }
        }
    if ($_GET["type"]=='file')
        {
        if (!empty($_GET["mp4"]))
            {
            $video = $_GET["mp4"];
            $comment = $_GET["comment"];
            }
        else
            {
            $error = 9;
            $e_text = 'Error: [400] Bad request.';
            }
        }
    }
else
    {
    $error = 9;
    $e_text = 'Error: [400] Bad request.';
    }
if ($error!=0)
    {
    echo $e_text;
    }
else
    {
    echo '<div id="html5player">
<link rel="stylesheet" href="/style/abplayer/styles.css" />
<link rel="stylesheet" href="/style/abplayer/base.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="http://www.bilicloud.com/js/CommentCoreLibrary.js"></script>
<script src="http://www.bilicloud.com/js/libxml.js"></script>
<script src="http://www.bilicloud.com/js/player.js"></script>
<script type="text/javascript">
	window.addEventListener("load",function(){
		var inst = ABP.create(document.getElementById("player"), {
			"src":document.getElementById("video"),
			"width":'.$width.',
			"height":'.$height.',
		});
		CommentLoader("'.$comment.'", inst.cmManager);
	});
</script>
<div id="player" class="cover"></div>
<div class="video">
	<video id="video" preload="auto" autobuffer="true" data-setup="{}">
		<source src="'.$video.'">
		<div><b>[错误]您使用的浏览器不支持HTML5视频...</b> <a href="/html/html5player.html" target="_blank" style="color:#3388FF">[详细浏览器支持情况]</a></div>
	</video>
</div>
</div>';
    }
?>