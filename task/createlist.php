<?php
include_once dirname(__FILE__).'/mysql.php';
echo 'START...<br/>';
echo '--------------------<br/>';
$json1 = file_get_contents('http://api.bilibili.cn/list?appkey=5a88bc9210cda8e6&type=json&page=1&pagesize=16&order=comment');
$return1 = json_decode($json1,true);
$number1 = 0;
while (isset($return1['list'][$number1]['aid']))
    {
    $id1 = $number1+1;
    mysql_query("INSERT INTO LIST_HOT (TITLE,AID,PIC,INFO,PLAY,DANMU,FAVOURITE) VALUES ('{$return1["list"][$number1]["title"]}','{$return1["list"][$number1]["aid"]}','{$return1["list"][$number1]["pic"]}','{$return1["list"][$number1]["description"]}','{$return1["list"][$number1]["play"]}','{$return1["list"][$number1]["video_review"]}','{$return1["list"][$number1]["favorites"]}')");
    $number1 = $number1+1;
    echo 'CACHED HOT,'.$id1.'<br/>';
    }
echo '--------------------<br/>';
$json2 = file_get_contents('http://api.bilibili.cn/list?appkey=5a88bc9210cda8e6&type=json&tid=13&page=1&pagesize=16&days=7&ver=2&order=comment');
$return2 = json_decode($json2,true);
$number2 = 0;
while (isset($return1['list'][$number2]['aid']))
    {
    $id2 = $number2+1;
    mysql_query("INSERT INTO LIST_BANGUMI (TITLE,AID,PIC,INFO,PLAY,DANMU,FAVOURITE) VALUES ('{$return2["list"][$number2]["title"]}','{$return2["list"][$number2]["aid"]}','{$return2["list"][$number2]["pic"]}','{$return2["list"][$number2]["description"]}','{$return2["list"][$number2]["play"]}','{$return2["list"][$number2]["video_review"]}','{$return2["list"][$number2]["favorites"]}')");
    $number2 = $number2+1;
    echo 'CACHED BANGUMI,'.$id2.'<br/>';
    }
echo '--------------------<br/>';
$json3 = file_get_contents('http://api.bilibili.cn/list?appkey=5a88bc9210cda8e6&type=json&tid=1&page=1&pagesize=16&days=7&ver=2&order=comment');
$return3 = json_decode($json3,true);
$number3 = 0;
while (isset($return3['list'][$number3]['aid']))
    {
    $id3 = $number3+1;
    mysql_query("INSERT INTO LIST_AMINE (TITLE,AID,PIC,INFO,PLAY,DANMU,FAVOURITE) VALUES ('{$return3["list"][$number3]["title"]}','{$return3["list"][$number3]["aid"]}','{$return3["list"][$number3]["pic"]}','{$return3["list"][$number3]["description"]}','{$return3["list"][$number3]["play"]}','{$return3["list"][$number3]["video_review"]}','{$return3["list"][$number3]["favorites"]}')");
    $number3 = $number3+1;
    echo 'CACHED AMINE,'.$id3.'<br/>';
    }
echo '--------------------<br/>';
$json4 = file_get_contents('http://api.bilibili.cn/list?appkey=5a88bc9210cda8e6&type=json&tid=3&page=1&pagesize=16&days=7&ver=2&order=comment');
$return4 = json_decode($json4,true);
$number4 = 0;
while (isset($return4['list'][$number4]['aid']))
    {
    $id4 = $number4+1;
    mysql_query("INSERT INTO LIST_MUSIC (TITLE,AID,PIC,INFO,PLAY,DANMU,FAVOURITE) VALUES ('{$return4["list"][$number4]["title"]}','{$return4["list"][$number4]["aid"]}','{$return4["list"][$number4]["pic"]}','{$return4["list"][$number4]["description"]}','{$return4["list"][$number4]["play"]}','{$return4["list"][$number4]["video_review"]}','{$return4["list"][$number4]["favorites"]}')");
    $number4 = $number4+1;
    echo 'CACHED MUSIC,'.$id4.'<br/>';
    }
echo '--------------------<br/>';
$json5 = file_get_contents('http://api.bilibili.cn/list?appkey=5a88bc9210cda8e6&type=json&tid=4&page=1&pagesize=16&days=7&ver=2&order=comment');
$return5 = json_decode($json5,true);
$number5 = 0;
while (isset($return5['list'][$number5]['aid']))
    {
    $id5 = $number5+1;
    mysql_query("INSERT INTO LIST_GAME (TITLE,AID,PIC,INFO,PLAY,DANMU,FAVOURITE) VALUES ('{$return5["list"][$number5]["title"]}','{$return5["list"][$number5]["aid"]}','{$return5["list"][$number5]["pic"]}','{$return5["list"][$number5]["description"]}','{$return5["list"][$number5]["play"]}','{$return5["list"][$number5]["video_review"]}','{$return5["list"][$number5]["favorites"]}')");
    $number5 = $number5+1;
    echo 'CACHED GAME,'.$id5.'<br/>';
    }
echo '--------------------<br/>';
$json6 = file_get_contents('http://api.bilibili.cn/list?appkey=5a88bc9210cda8e6&type=json&tid=5&page=1&pagesize=16&days=7&ver=2&order=comment');
$return6 = json_decode($json6,true);
$number6 = 0;
while (isset($return6['list'][$number6]['aid']))
    {
    $id6 = $number6+1;
    mysql_query("INSERT INTO LIST_ENTERTAINMENT (TITLE,AID,PIC,INFO,PLAY,DANMU,FAVOURITE) VALUES ('{$return6["list"][$number6]["title"]}','{$return6["list"][$number6]["aid"]}','{$return6["list"][$number6]["pic"]}','{$return6["list"][$number6]["description"]}','{$return6["list"][$number6]["play"]}','{$return6["list"][$number6]["video_review"]}','{$return6["list"][$number6]["favorites"]}')");
    $number6 = $number6+1;
    echo 'CACHED ENTERTAINMENT,'.$id6.'<br/>';
    }
echo '--------------------<br/>';
$json7 = file_get_contents('http://api.bilibili.cn/list?appkey=5a88bc9210cda8e6&type=json&tid=11&page=1&pagesize=16&days=7&ver=2&order=comment');
$return7 = json_decode($json7,true);
$number7 = 0;
while (isset($return7['list'][$number7]['aid']))
    {
    $id7 = $number7+1;
    mysql_query("INSERT INTO LIST_FILM (TITLE,AID,PIC,INFO,PLAY,DANMU,FAVOURITE) VALUES ('{$return7["list"][$number7]["title"]}','{$return7["list"][$number7]["aid"]}','{$return7["list"][$number7]["pic"]}','{$return7["list"][$number7]["description"]}','{$return7["list"][$number7]["play"]}','{$return7["list"][$number7]["video_review"]}','{$return7["list"][$number7]["favorites"]}')");
    $number7 = $number7+1;
    echo 'CACHED FILM,'.$id7.'<br/>';
    }
echo '--------------------<br/>';
$json8 = file_get_contents('http://api.bilibili.cn/list?appkey=5a88bc9210cda8e6&type=json&tid=36&page=1&pagesize=16&days=7&ver=2&order=comment');
$return8 = json_decode($json8,true);
$number8 = 0;
while (isset($return7['list'][$number8]['aid']))
    {
    $id8 = $number8+1;
    mysql_query("INSERT INTO LIST_SCIENCE (TITLE,AID,PIC,INFO,PLAY,DANMU,FAVOURITE) VALUES ('{$return8["list"][$number8]["title"]}','{$return8["list"][$number8]["aid"]}','{$return8["list"][$number8]["pic"]}','{$return8["list"][$number8]["description"]}','{$return8["list"][$number8]["play"]}','{$return8["list"][$number8]["video_review"]}','{$return8["list"][$number8]["favorites"]}')");
    $number8 = $number8+1;
    echo 'CACHED SCIENCE,'.$id8.'<br/>';
    }
echo '--------------------<br/>';
/* 验证密钥生成 */
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
/* 验证密钥生成 */
$sign = get_sign(array("type"=>"json","btype"=>"2","appkey"=>"e0dbc7885f0b0fb2","access_key"=>"f5dd9c5fa47bfeb2b5e19f037cde6ce1"),'ab31b0c788f50903583bda7111f72fa8');
$return9 = json_decode(file_get_contents('http://api.bilibili.cn/bangumi?type=json&btype=2&appkey=e0dbc7885f0b0fb2&access_key=f5dd9c5fa47bfeb2b5e19f037cde6ce1&sign='.$sign),true);
$number9 = 0;
while (isset($return9['list'][$number9]['spid']))
    {
    mysql_query("INSERT INTO BANGUMI (TITLE,SPID,COVER,WEEKDAY,COUNT,CLICK,ATTENTION,LASTUPDATE) VALUES ('{$return9["list"][$number9]["title"]}','{$return9["list"][$number9]["spid"]}','{$return9["list"][$number9]["cover"]}','{$return9["list"][$number9]["weekday"]}','{$return9["list"][$number9]["bgmcount"]}','{$return9["list"][$number9]["click"]}','{$return9["list"][$number9]["attention"]}','{$return9["list"][$number9]["lastupdate_at"]}')");
    $number9 = $number9+1;
    }
echo 'CACHED BANGUMI,TOTAL:'.($number9+1).'<br/>--------------------<br/>';
echo 'PROCESS END.';