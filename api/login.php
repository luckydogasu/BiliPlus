<?php
function GetUID()
	{
	$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$string = '';
	for ($i=0;$i<10;$i++)
		{
		$string .= $chars[mt_rand(0,strlen($chars)-1)];
		}
	return $string;
	}
if ($_GET['act']=='reg')
    {
    $login = 1;
    $uid = GetUID();
    $mid = '0';
    $uname = '时空游客'.$uid;
    $access_key = '0';
    setcookie ("login",$login,time()+3600*24*30,"/");
    setcookie ("uid",$uid,time()+3600*24*30,"/");
    setcookie ("mid",$mid,time()+3600*24*30,"/");
    setcookie ("uname",$uname,time()+3600*24*30,"/");
    setcookie ("access_key",$access_key,time()+3600*24*30,"/");
    setcookie ("visiturl",$_GET['url'],time()+3600*24*30,"/");
    echo '<!DOCTYPE html><html><head><title>Visitor Control System - BiliPlus</title></head><body>Redirecting...<script language="javascript" type="text/javascript">window.location.href="'.$_GET['url'].'"</script></body></html>';
    exit();
    }
if ($_GET['act']=='visit')
    {
    setcookie ("visiturl",$_GET['url'],time()+3600*24*30,"/");
    exit();
    }
if (empty($_GET['act']))
    {
    if (empty($_GET['access_key'])||empty($_GET['mid'])||empty($_GET['uname']))
        {
        echo 'Bad Request';
        exit();
        }
    else
        {
        $login = 2;
        setcookie ("login",$login,time()+3600*24*30,"/");
        setcookie ("mid",$_GET['mid'],time()+3600*24*30,"/");
        setcookie ("uname",$_GET['uname'],time()+3600*24*30,"/");
        setcookie ("access_key",$_GET['access_key'],time()+3600*24*30,"/");
        echo '<!DOCTYPE html><html><head><title>Visitor Control System - BiliPlus</title></head><body>Redirecting...<script language="javascript" type="text/javascript">window.location.href="'.$_COOKIE['visiturl'].'"</script></body></html>';
        }
    }
if ($_GET["act"]=='logout')
    {
    $login = 1;
    $uname = '时空游客'.$_COOKIE['uid'];
    setcookie ("login",$login,time()-3600,"/");
    setcookie ("access_key",'',time()-3600,"/");
    setcookie ("mid",'',time()-3600,"/");
    setcookie ("uname",$uname,time()+3600*24*30,"/");
    echo '<!DOCTYPE html><html><head><title>Visitor Control System - BiliPlus</title></head><body>Redirecting...<script language="javascript" type="text/javascript">window.location.href="'.$_COOKIE['visiturl'].'"</script></body></html>';
    }