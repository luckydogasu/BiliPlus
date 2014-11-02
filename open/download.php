<?php
require dirname(dirname(__FILE__)).'/task/mysql.php';
if (preg_match("/^[1-9][0-9]*$/",$_GET["av"]))
	{
	$av = $_GET["av"];
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
	$id = $av.'_'.$page;
	$apijson = mysql_query("SELECT * FROM CACHE_PAGE WHERE ID='{$id}'");
	if (!mysql_num_rows($apijson))
		{
        echo json_encode(array('code'=>404,'error'=>'DATA_NOT_FOUND:AV'.$av.'P'.$page.' does not have cache'));
		}
	else
		{
		$apijson = mysql_fetch_array($apijson);
		$datatime = $apijson['LASTUPDATE'];
		$info = json_decode($apijson['DATA'],true);
		if (!array_key_exists("code",$info))
			{
			if (isset($info['list'][($page-1)]['cid']))
				{
				$cid = $info['list'][($page-1)]['cid'];
				$vid = $info['list'][($page-1)]['vid'];
				if (empty($vid)) $vid = 'N/A';
				$videoxml = mysql_query("SELECT * FROM CACHE_VIDEO WHERE CID='{$cid}'");
				$videoxml = mysql_fetch_array($videoxml);
				$data = $videoxml['DATA'];
				$errorcheck = json_decode($data,true);
				if (empty($errorcheck["error_code"]))
					{
					$play = simplexml_load_string($data,'SimpleXMLElement',LIBXML_NOCDATA);
					if (($play->result)=='succ'||($play->result)=='suee')
						{
						$videolength = ($play->timelength)/1000;
						$part = 0;
						$video = '';
						while(!empty($play->durl->$part->url))
							{
							$partlength = (string)($play->durl->$part->length)/1000;
							$parturl = (string)$play->durl->$part->url;
							$videopart[$part] = array('url'=>$parturl,'length'=>$partlength);
							$part++;
							}
						$getmp4 = json_decode($apijson['MP4'],true);
						if (!stristr($getmp4['src'],'letv.cn'))
							{
							$getmp4 = null;
							}
						$from_real = (string)$play->from;
						$from_src = (string)$info['list'][($page-1)]['type'];
						if(empty($from_real)) $from_real = null;
						$src = (string)$play->src;
						if($src==400) $from_real='sina';
						if(empty($from_src)) $from_src = null;
                        echo json_encode(array('code'=>200,'datatime'=>$datatime,'data'=>array('title'=>$info['title'],'pagecount'=>$info['pages'],'pagetitle'=>$info['list'][($page-1)]['part'],'author'=>array('id'=>$info['mid'],'nick'=>$info['author']),'info'=>array('time'=>$info['created_at'],'play'=>$info['play'],'danmaku'=>$info['video_review'],'score'=>$info['credit'],'coin'=>$info['coins'],'favourite'=>$info['favorites']),'video'=>array('source_real'=>$from_real,'source_current'=>$from_src,'length'=>$videolength,'source'=>$videopart,'mp4'=>$getmp4['src'],'danmaku'=>'http://comment.bilibili.com/'.$cid.'.xml'))));
						}
					else
						{
						echo json_encode(array('code'=>500,'error'=>'VIDEO_PARSING_ERROR:BAD_API_XML:['.$play->type.']'.$play->message));
						}
					}
				else
					{
					echo json_encode(array('code'=>500,'error'=>'VIDEO_PARSING_ERROR:API_ERROR:['.$errorcheck["error_code"].']'.$errorcheck["error_text"]));
					}
				}
			else
				{
				echo json_encode(array('code'=>404,'error'=>'PAGE_NOT_FOUND: AV'.$av.' does not have page '.$_GET["page"]));
				}
			}
		else
			{
			if ($info["code"]==-403)
				{
				echo json_encode(array('code'=>403,'error'=>'PERMISSION_DENIED:['.$info["code"].']'.$info["error"]));
				}
			else
				{
				echo json_encode(array('code'=>404,'error'=>'CID_NOT_FOUND:['.$info["code"].']'.$info["error"]));
				}
			}
		}
	}
else
	{
	echo json_encode(array('code'=>400,'error'=>'Bad Request'));
	}