<?php
if (!empty($_GET["av"]))
    {
    if (!empty($_GET["page"]))
        $page = $_GET["page"];
    else
        $page = 1;
    $title = 'AV'.$_GET["av"].'/P'.$page;
    }
else
    {
    $title = 'ERROR';
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta name="author" content="Tundra" />
<meta name="Copyright" content="Copyright Tundra All Rights Reserved." />
<link rel="shortcut icon" href="/favicon.ico" />
<title><?php echo $title; ?> - Bilibili API/Interface Testing Tool - BiliPlus</title>
<style>
body{font-family: Consolas, 'Lucida Console', 'Courier New', 'Droid Sans Mono', mono, monospace;margin:0px;padding:0px;width:100%}
</style>
</head>
<body>
<div style="text-align:center"><h1>Bilibili API/Interface Testing Tool</h1></div>
<hr/>
<?php
function get_sign($params, $key)
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
function UpdateCache($av,$page)
    {
    global $apijson;
    global $mp4json;
    global $cid;
    global $videoxml;
    if (empty($_COOKIE["access_key"]))
        {
        echo 'ERROR: System_Error [-403] Access_Key not found<br/>Please visit the following url to login. 请使用下方链接登录后刷新本页面。<br/><br/><a href="https://secure.bilibili.com/login?api=http%3A%2F%2Fi.bilicloud.com%2Fapi%2Flogin.php&appkey=fb83589f598aa390&sign=401a93108b41aa57efb518199ce674ce" target="_blank">https://secure.bilibili.com/login?api=http%3A%2F%2Fi.bilicloud.com%2Fapi%2Flogin.php&appkey=fb83589f598aa390&sign=401a93108b41aa57efb518199ce674ce</a>';
        }
    else
        {
        echo '<h2>ACCESS_KEY</h2>';
        echo $_COOKIE["access_key"];
        echo '<br/>';
        echo '<h2>API_VIEW</h2>';
        echo '<h3>Request</h3>';
        $sign = get_sign(array("type"=>"json","appkey"=>"fb83589f598aa390","id"=>$av,"page"=>$page,"batch"=>"1","check_area"=>"1","platform"=>"ios","access_key"=>$_COOKIE["access_key"]),'e14c7832fc119a032b9fd132b5ad1b59');
        $headers['CLIENT-IP'] = '58.32.100.0';
        $headers['X-FORWARDED-FOR'] = '58.32.100.0';
        $headers['Accept-Encoding'] = 'gzip,deflate,sdcl';
        $headerArr = array();
        foreach($headers as $n=>$v){$headerArr[] = $n.':'.$v;}
        $apiurl = 'http://api.bilibili.com/view?type=json&appkey=fb83589f598aa390&id='.$av.'&page='.$page.'&batch=1&check_area=1&platform=ios&access_key='.$_COOKIE["access_key"].'&sign='.$sign;
        /*echo '-HIDDEN-';*/echo $apiurl;
        echo '<br/>';
        echo '<h3>Response</h3>';
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL,$apiurl);
        curl_setopt($curl, CURLOPT_HTTPHEADER,$headerArr);
        curl_setopt($curl, CURLOPT_USERAGENT,'BiliBili API Helper/1.0.0 (tundrawork@gmail.com)');
        curl_setopt($curl, CURLOPT_REFERER,"http://www.bilibili.tv/");
        curl_setopt($curl, CURLOPT_HEADER,0);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION,1);
        $apijson = curl_exec($curl);
        curl_close($curl);
        echo $apijson;
        echo '<br/>';
        $info = json_decode($apijson,true);
        echo '<h3>Decode</h3>';
        if (!array_key_exists("code",$info))
            {
            if (isset($info['list'][($page-1)]['cid']))
                {
                echo 'SUCCESS';
                echo '<br/>';
                $cid = $info['list'][($page-1)]['cid'];
                echo '<h2>INTERFACE_PLAYURL</h2>';
                echo '<h3>Request</h3>';
                $interfaceurl = 'http://interface.bilibili.com/playurl?otype=xml&type=flv&platform=ios&appkey=fb83589f598aa390&cid='.$cid.'&access_key='.$_COOKIE["access_key"];
                /*echo '-HIDDEN-';*/echo $interfaceurl;
                echo '<br/>';
                echo '<h3>Response</h3>';
                $curl = curl_init();
                curl_setopt($curl, CURLOPT_URL,$interfaceurl);
                curl_setopt($curl, CURLOPT_HTTPHEADER,$headerArr);
                curl_setopt($curl, CURLOPT_USERAGENT,'Mozilla/5.0 (compatible; MSIE 11.0; Windows NT 6.1; WOW64; Trident/6.0)');
                curl_setopt($curl, CURLOPT_REFERER,"http://www.bilibili.tv/");
                curl_setopt($curl, CURLOPT_HEADER,0);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
                curl_setopt($curl, CURLOPT_FOLLOWLOCATION,1);
                $videoxml = curl_exec($curl);
                curl_close($curl);
                echo str_ireplace('	','&nbsp;&nbsp;&nbsp;&nbsp;',nl2br(htmlspecialchars($videoxml)));
                echo '<br/>';
                echo '<h3>Decode</h3>';
                $errorcheck = json_decode($videoxml,true);
                if (empty($errorcheck["error_code"]))
                    {
                    $play = simplexml_load_string($videoxml,'SimpleXMLElement',LIBXML_NOCDATA);
                    if (($play->result)=='succ'||($play->result)=='suee')
                        {
                        echo 'SUCCESS';
                        }
                    else
                        {
                        echo 'ERROR: XML_Decode_Error ['.$play->type.'] '.$play->message;
                        }
                    }
                else
                    {
                    echo 'ERROR: API_Error ['.$errorcheck["error_code"].'] '.$errorcheck["error_text"];
                    }
                echo '<br/>';
                echo '<h2>INTERFACE_CDN</h2>';
                echo '<h3>Request</h3>';
                $cdnurl = 'http://interface.bilibili.com/v_cdn_play?otype=xml&appkey=fb83589f598aa390&cid='.$cid.'&access_key='.$_COOKIE["access_key"];
                /*echo '-HIDDEN-';*/echo $cdnurl;
                echo '<br/>';
                echo '<h3>Response</h3>';
                $curl = curl_init();
                curl_setopt($curl, CURLOPT_URL,$cdnurl);
                curl_setopt($curl, CURLOPT_HTTPHEADER,$headerArr);
                curl_setopt($curl, CURLOPT_USERAGENT,'Mozilla/5.0 (compatible; MSIE 11.0; Windows NT 6.1; WOW64; Trident/6.0)');
                curl_setopt($curl, CURLOPT_REFERER,"http://www.bilibili.tv/");
                curl_setopt($curl, CURLOPT_HEADER,0);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
                curl_setopt($curl, CURLOPT_FOLLOWLOCATION,1);
                $cdnxml = curl_exec($curl);
                curl_close($curl);
                echo str_ireplace('	','&nbsp;&nbsp;&nbsp;&nbsp;',nl2br(htmlspecialchars($cdnxml)));
                echo '<br/>';
                echo '<h3>Decode</h3>';
                $errorcheck = json_decode($cdnxml,true);
                if (empty($errorcheck["error_code"]))
                    {
                    $play = simplexml_load_string($cdnxml,'SimpleXMLElement',LIBXML_NOCDATA);
                    if (($play->result)=='succ'||($play->result)=='suee')
                        {
                        echo 'SUCCESS';
                        }
                    else
                        {
                        echo 'ERROR: XML_Decode_Error ['.$play->type.'] '.$play->message;
                        }
                    }
                else
                    {
                    echo 'ERROR: API_Error ['.$errorcheck["error_code"].'] '.$errorcheck["error_text"];
                    }
                echo '<br/>';
                echo '<h2>INTERFACE_HTML5</h2>';
                echo '<h3>Request</h3>';
                $html5url = 'http://www.bilibili.com/m/html5?aid='.$av.'&page='.$page;
                /*echo '-HIDDEN-';*/echo $html5url;
                echo '<br/>';
                echo '<h3>Response</h3>';
                $curl = curl_init();
                curl_setopt($curl, CURLOPT_URL,$html5url);
                curl_setopt($curl, CURLOPT_HTTPHEADER,$headerArr);
                curl_setopt($curl, CURLOPT_USERAGENT,'Mozilla/5.0 (Linux; U; Android 4.3; en-us; Nexus 10) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1468.0 Safari/537.36');
                curl_setopt($curl, CURLOPT_REFERER,"http://m.acg.tv/");
                curl_setopt($curl, CURLOPT_HEADER,0);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
                curl_setopt($curl, CURLOPT_FOLLOWLOCATION,1);
                $mp4json = curl_exec($curl);
                curl_close($curl);
                echo nl2br(htmlspecialchars($mp4json));
                echo '<br/>';
                echo '<h3>Decode</h3>';
                $src = json_decode($mp4json,true);
                if (!empty($src['src']))
                    {
                    if (stristr($src['src'],'g3.letv.cn'))
                        {
                        echo 'SUCCESS';
                        }
                    else
                        {
                        echo 'ERROR: JSON_Decode_Error [-404] MP4 not found';
                        }
                    }
                else
                    {
                    echo 'ERROR: API_Error [-503] Service Unavailable';
                    }
                echo '<br/>';
                echo '<h2>INTERFACE_PLAYER</h2>';
                echo '<h3>Request</h3>';
                $playerurl = 'http://interface.bilibili.com/player?id=cid:'.$cid;
                /*echo '-HIDDEN-';*/echo $playerurl;
                echo '<br/>';
                echo '<h3>Response</h3>';
                $curl = curl_init();
                curl_setopt($curl, CURLOPT_URL,$playerurl);
                curl_setopt($curl, CURLOPT_HTTPHEADER,$headerArr);
                curl_setopt($curl, CURLOPT_USERAGENT,'Mozilla/5.0 (compatible; MSIE 11.0; Windows NT 6.1; WOW64; Trident/6.0)');
                curl_setopt($curl, CURLOPT_REFERER,"http://www.bilibili.tv/");
                curl_setopt($curl, CURLOPT_HEADER,0);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
                curl_setopt($curl, CURLOPT_FOLLOWLOCATION,1);
                $playerxml = curl_exec($curl);
                curl_close($curl);
                echo nl2br(htmlspecialchars($playerxml));
                echo '<br/>';
                echo '<h3>Decode</h3>';
                if (stripos($playerxml,'<aid>'))
                    {
                    //$aid = substr($playerxml,(stripos($playerxml,'<aid>')+5),(stripos($playerxml,'</aid>')-1));
                    echo 'SUCCESS';
                    }
                else
                    {
                    echo 'ERROR: XML_Decode_Error [-500] AID not found';
                    }
                }
            else
                {
                echo 'ERROR: JSON_Decode_Error [-500] CID not found';
                }
            }
        else
            {
            echo 'ERROR: API_Error ['.$info["code"].'] '.$info["error"];
            }
        }
    }
if (!empty($_GET["av"]))
    {
    UpdateCache($_GET["av"],$page);
    }
else
    {
    echo 'ERROR: System_Error [-400] Bad Request.';
    }
?>
<br/>
<br/>
<hr/>
<p style="text-align:center;font-weight:bold">&copy; TundraWork Some rights reserved.</p>
</body>
</html>