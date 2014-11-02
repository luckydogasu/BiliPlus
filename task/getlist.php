<?php
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
include_once dirname(__FILE__).'/mysql.php';
echo 'EXECTING...<br/>';
echo '--------------------<br/>';
$sign = get_sign(array("appkey"=>"21087a09e533a072","type"=>"json","page"=>"1","pagesize"=>"16","order"=>"promote","access_key"=>"237ecfe4b4795a715ea320acda31015a"),'e5b8ba95cab6104100be35739304c23a');
$json1 = file_get_contents('http://api.bilibili.com/list?appkey=21087a09e533a072&type=json&page=1&pagesize=16&order=promote&access_key=237ecfe4b4795a715ea320acda31015a&sign='.$sign);
$return1 = json_decode($json1,true);
$number1 = 0;
while (isset($return1["list"][$number1]["aid"]))
    {
    $id1 = $number1+1;
    mysql_query("UPDATE LIST_HOT SET TITLE ='{$return1["list"][$number1]["title"]}' WHERE ID='{$id1}'");
    mysql_query("UPDATE LIST_HOT SET AID ='{$return1["list"][$number1]["aid"]}' WHERE ID='{$id1}'");
    mysql_query("UPDATE LIST_HOT SET PIC ='{$return1["list"][$number1]["pic"]}' WHERE ID='{$id1}'");
    mysql_query("UPDATE LIST_HOT SET INFO ='{$return1["list"][$number1]["description"]}' WHERE ID='{$id1}'");
    mysql_query("UPDATE LIST_HOT SET PLAY ='{$return1["list"][$number1]["play"]}' WHERE ID='{$id1}'");
    mysql_query("UPDATE LIST_HOT SET DANMU ='{$return1["list"][$number1]["video_review"]}' WHERE ID='{$id1}'");
    mysql_query("UPDATE LIST_HOT SET FAVOURITE ='{$return1["list"][$number1]["favorites"]}' WHERE ID='{$id1}'");
    $number1 = $number1+1;
    }
echo 'CACHED LIST_HOT,TOTAL:'.$id1.'<br/>';
echo '--------------------<br/>';
$sign = get_sign(array("appkey"=>"21087a09e533a072","type"=>"json","tid"=>"13","page"=>"1","pagesize"=>"16","days"=>"7","ver"=>"2","order"=>"promote","access_key"=>"237ecfe4b4795a715ea320acda31015a"),'e5b8ba95cab6104100be35739304c23a');
$json2 = file_get_contents('http://api.bilibili.com/list?appkey=21087a09e533a072&type=json&tid=13&page=1&pagesize=16&days=7&ver=2&order=promote&access_key=237ecfe4b4795a715ea320acda31015a&sign='.$sign);
$return2 = json_decode($json2,true);
$number2 = 0;
while (isset($return2["list"][$number2]["aid"]))
    {
    $id2 = $number2+1;
    mysql_query("UPDATE LIST_BANGUMI SET TITLE ='{$return2["list"][$number2]["title"]}' WHERE ID='{$id2}'");
    mysql_query("UPDATE LIST_BANGUMI SET AID ='{$return2["list"][$number2]["aid"]}' WHERE ID='{$id2}'");
    mysql_query("UPDATE LIST_BANGUMI SET PIC ='{$return2["list"][$number2]["pic"]}' WHERE ID='{$id2}'");
    mysql_query("UPDATE LIST_BANGUMI SET INFO ='{$return2["list"][$number2]["description"]}' WHERE ID='{$id2}'");
    mysql_query("UPDATE LIST_BANGUMI SET PLAY ='{$return2["list"][$number2]["play"]}' WHERE ID='{$id2}'");
    mysql_query("UPDATE LIST_BANGUMI SET DANMU ='{$return2["list"][$number2]["video_review"]}' WHERE ID='{$id2}'");
    mysql_query("UPDATE LIST_BANGUMI SET FAVOURITE ='{$return2["list"][$number2]["favorites"]}' WHERE ID='{$id2}'");
    $number2 = $number2+1;
    }
echo 'CACHED LIST_BANGUMI,TOTAL:'.$id1.'<br/>';
echo '--------------------<br/>';
$sign = get_sign(array("appkey"=>"21087a09e533a072","type"=>"json","tid"=>"1","page"=>"1","pagesize"=>"16","days"=>"7","ver"=>"2","order"=>"promote","access_key"=>"237ecfe4b4795a715ea320acda31015a"),'e5b8ba95cab6104100be35739304c23a');
$json3 = file_get_contents('http://api.bilibili.com/list?appkey=21087a09e533a072&type=json&tid=1&page=1&pagesize=16&days=7&ver=2&order=promote&access_key=237ecfe4b4795a715ea320acda31015a&sign='.$sign);
$return3 = json_decode($json3,true);
$number3 = 0;
while (isset($return3["list"][$number3]["aid"]))
    {
    $id3 = $number3+1;
    mysql_query("UPDATE LIST_AMINE SET TITLE ='{$return3["list"][$number3]["title"]}' WHERE ID='{$id3}'");
    mysql_query("UPDATE LIST_AMINE SET AID ='{$return3["list"][$number3]["aid"]}' WHERE ID='{$id3}'");
    mysql_query("UPDATE LIST_AMINE SET PIC ='{$return3["list"][$number3]["pic"]}' WHERE ID='{$id3}'");
    mysql_query("UPDATE LIST_AMINE SET INFO ='{$return3["list"][$number3]["description"]}' WHERE ID='{$id3}'");
    mysql_query("UPDATE LIST_AMINE SET PLAY ='{$return3["list"][$number3]["play"]}' WHERE ID='{$id3}'");
    mysql_query("UPDATE LIST_AMINE SET DANMU ='{$return3["list"][$number3]["video_review"]}' WHERE ID='{$id3}'");
    mysql_query("UPDATE LIST_AMINE SET FAVOURITE ='{$return3["list"][$number3]["favorites"]}' WHERE ID='{$id3}'");
    $number3 = $number3+1;
    }
echo 'CACHED LIST_AMINE,TOTAL:'.$id1.'<br/>';
echo '--------------------<br/>';
$sign = get_sign(array("appkey"=>"21087a09e533a072","type"=>"json","tid"=>"3","page"=>"1","pagesize"=>"16","days"=>"7","ver"=>"2","order"=>"promote","access_key"=>"237ecfe4b4795a715ea320acda31015a"),'e5b8ba95cab6104100be35739304c23a');
$json4 = file_get_contents('http://api.bilibili.com/list?appkey=21087a09e533a072&type=json&tid=3&page=1&pagesize=16&days=7&ver=2&order=promote&access_key=237ecfe4b4795a715ea320acda31015a&sign='.$sign);
$return4 = json_decode($json4,true);
$number4 = 0;
while (isset($return4["list"][$number4]["aid"]))
    {
    $id4 = $number4+1;
    mysql_query("UPDATE LIST_MUSIC SET TITLE ='{$return4["list"][$number4]["title"]}' WHERE ID='{$id4}'");
    mysql_query("UPDATE LIST_MUSIC SET AID ='{$return4["list"][$number4]["aid"]}' WHERE ID='{$id4}'");
    mysql_query("UPDATE LIST_MUSIC SET PIC ='{$return4["list"][$number4]["pic"]}' WHERE ID='{$id4}'");
    mysql_query("UPDATE LIST_MUSIC SET INFO ='{$return4["list"][$number4]["description"]}' WHERE ID='{$id4}'");
    mysql_query("UPDATE LIST_MUSIC SET PLAY ='{$return4["list"][$number4]["play"]}' WHERE ID='{$id4}'");
    mysql_query("UPDATE LIST_MUSIC SET DANMU ='{$return4["list"][$number4]["video_review"]}' WHERE ID='{$id4}'");
    mysql_query("UPDATE LIST_MUSIC SET FAVOURITE ='{$return4["list"][$number4]["favorites"]}' WHERE ID='{$id4}'");
    $number4 = $number4+1;
    }
echo 'CACHED LIST_MUSIC,TOTAL:'.$id1.'<br/>';
echo '--------------------<br/>';
$sign = get_sign(array("appkey"=>"21087a09e533a072","type"=>"json","tid"=>"4","page"=>"1","pagesize"=>"16","days"=>"7","ver"=>"2","order"=>"promote","access_key"=>"237ecfe4b4795a715ea320acda31015a"),'e5b8ba95cab6104100be35739304c23a');
$json5 = file_get_contents('http://api.bilibili.com/list?appkey=21087a09e533a072&type=json&tid=4&page=1&pagesize=16&days=7&ver=2&order=promote&access_key=237ecfe4b4795a715ea320acda31015a&sign='.$sign);
$return5 = json_decode($json5,true);
$number5 = 0;
while (isset($return5["list"][$number5]["aid"]))
    {
    $id5 = $number5+1;
    mysql_query("UPDATE LIST_GAME SET TITLE ='{$return5["list"][$number5]["title"]}' WHERE ID='{$id5}'");
    mysql_query("UPDATE LIST_GAME SET AID ='{$return5["list"][$number5]["aid"]}' WHERE ID='{$id5}'");
    mysql_query("UPDATE LIST_GAME SET PIC ='{$return5["list"][$number5]["pic"]}' WHERE ID='{$id5}'");
    mysql_query("UPDATE LIST_GAME SET INFO ='{$return5["list"][$number5]["description"]}' WHERE ID='{$id5}'");
    mysql_query("UPDATE LIST_GAME SET PLAY ='{$return5["list"][$number5]["play"]}' WHERE ID='{$id5}'");
    mysql_query("UPDATE LIST_GAME SET DANMU ='{$return5["list"][$number5]["video_review"]}' WHERE ID='{$id5}'");
    mysql_query("UPDATE LIST_GAME SET FAVOURITE ='{$return5["list"][$number5]["favorites"]}' WHERE ID='{$id5}'");
    $number5 = $number5+1;
    }
echo 'CACHED LIST_GAME,TOTAL:'.$id1.'<br/>';
echo '--------------------<br/>';
$sign = get_sign(array("appkey"=>"21087a09e533a072","type"=>"json","tid"=>"5","page"=>"1","pagesize"=>"16","days"=>"7","ver"=>"2","order"=>"promote","access_key"=>"237ecfe4b4795a715ea320acda31015a"),'e5b8ba95cab6104100be35739304c23a');
$json6 = file_get_contents('http://api.bilibili.com/list?appkey=21087a09e533a072&type=json&tid=5&page=1&pagesize=16&days=7&ver=2&order=promote&access_key=237ecfe4b4795a715ea320acda31015a&sign='.$sign);
$return6 = json_decode($json6,true);
$number6 = 0;
while (isset($return6["list"][$number6]["aid"]))
    {
    $id6 = $number6+1;
    mysql_query("UPDATE LIST_ENTERTAINMENT SET TITLE ='{$return6["list"][$number6]["title"]}' WHERE ID='{$id6}'");
    mysql_query("UPDATE LIST_ENTERTAINMENT SET AID ='{$return6["list"][$number6]["aid"]}' WHERE ID='{$id6}'");
    mysql_query("UPDATE LIST_ENTERTAINMENT SET PIC ='{$return6["list"][$number6]["pic"]}' WHERE ID='{$id6}'");
    mysql_query("UPDATE LIST_ENTERTAINMENT SET INFO ='{$return6["list"][$number6]["description"]}' WHERE ID='{$id6}'");
    mysql_query("UPDATE LIST_ENTERTAINMENT SET PLAY ='{$return6["list"][$number6]["play"]}' WHERE ID='{$id6}'");
    mysql_query("UPDATE LIST_ENTERTAINMENT SET DANMU ='{$return6["list"][$number6]["video_review"]}' WHERE ID='{$id6}'");
    mysql_query("UPDATE LIST_ENTERTAINMENT SET FAVOURITE ='{$return6["list"][$number6]["favorites"]}' WHERE ID='{$id6}'");
    $number6 = $number6+1;
    }
echo 'CACHED LIST_ENTERTAINMENT,TOTAL:'.$id1.'<br/>';
echo '--------------------<br/>';
$sign = get_sign(array("appkey"=>"21087a09e533a072","type"=>"json","tid"=>"11","page"=>"1","pagesize"=>"16","days"=>"7","ver"=>"2","order"=>"promote","access_key"=>"237ecfe4b4795a715ea320acda31015a"),'e5b8ba95cab6104100be35739304c23a');
$json7 = file_get_contents('http://api.bilibili.com/list?appkey=21087a09e533a072&type=json&tid=11&page=1&pagesize=16&days=7&ver=2&order=promote&access_key=237ecfe4b4795a715ea320acda31015a&sign='.$sign);
$return7 = json_decode($json7,true);
$number7 = 0;
while (isset($return7["list"][$number7]["aid"]))
    {
    $id7 = $number7+1;
    mysql_query("UPDATE LIST_FILM SET TITLE ='{$return7["list"][$number7]["title"]}' WHERE ID='{$id7}'");
    mysql_query("UPDATE LIST_FILM SET AID ='{$return7["list"][$number7]["aid"]}' WHERE ID='{$id7}'");
    mysql_query("UPDATE LIST_FILM SET PIC ='{$return7["list"][$number7]["pic"]}' WHERE ID='{$id7}'");
    mysql_query("UPDATE LIST_FILM SET INFO ='{$return7["list"][$number7]["description"]}' WHERE ID='{$id7}'");
    mysql_query("UPDATE LIST_FILM SET PLAY ='{$return7["list"][$number7]["play"]}' WHERE ID='{$id7}'");
    mysql_query("UPDATE LIST_FILM SET DANMU ='{$return7["list"][$number7]["video_review"]}' WHERE ID='{$id7}'");
    mysql_query("UPDATE LIST_FILM SET FAVOURITE ='{$return7["list"][$number7]["favorites"]}' WHERE ID='{$id7}'");
    $number7 = $number7+1;
    }
echo 'CACHED LIST_FILM,TOTAL:'.$id1.'<br/>';
echo '--------------------<br/>';
$sign = get_sign(array("appkey"=>"21087a09e533a072","type"=>"json","tid"=>"36","page"=>"1","pagesize"=>"16","days"=>"7","ver"=>"2","order"=>"promote","access_key"=>"237ecfe4b4795a715ea320acda31015a"),'e5b8ba95cab6104100be35739304c23a');
$json8 = file_get_contents('http://api.bilibili.com/list?appkey=21087a09e533a072&type=json&tid=36&page=1&pagesize=16&days=7&ver=2&order=promote&access_key=237ecfe4b4795a715ea320acda31015a&sign='.$sign);
$return8 = json_decode($json8,true);
$number8 = 0;
while (isset($return8["list"][$number8]["aid"]))
    {
    $id8 = $number8+1;
    mysql_query("UPDATE LIST_SCIENCE SET TITLE ='{$return8["list"][$number8]["title"]}' WHERE ID='{$id8}'");
    mysql_query("UPDATE LIST_SCIENCE SET AID ='{$return8["list"][$number8]["aid"]}' WHERE ID='{$id8}'");
    mysql_query("UPDATE LIST_SCIENCE SET PIC ='{$return8["list"][$number8]["pic"]}' WHERE ID='{$id8}'");
    mysql_query("UPDATE LIST_SCIENCE SET INFO ='{$return8["list"][$number8]["description"]}' WHERE ID='{$id8}'");
    mysql_query("UPDATE LIST_SCIENCE SET PLAY ='{$return8["list"][$number8]["play"]}' WHERE ID='{$id8}'");
    mysql_query("UPDATE LIST_SCIENCE SET DANMU ='{$return8["list"][$number8]["video_review"]}' WHERE ID='{$id8}'");
    mysql_query("UPDATE LIST_SCIENCE SET FAVOURITE ='{$return8["list"][$number8]["favorites"]}' WHERE ID='{$id8}'");
    $number8 = $number8+1;
    }
echo 'CACHED LIST_SCIENCE,TOTAL:'.$id1.'<br/>';
echo '--------------------<br/>';
mysql_query("DELETE FROM BANGUMI");
echo 'CLEARED BANGUMI CACHE';
echo '--------------------<br/>';
$sign = get_sign(array("type"=>"json","btype"=>"2","appkey"=>"21087a09e533a072","access_key"=>"237ecfe4b4795a715ea320acda31015a"),'e5b8ba95cab6104100be35739304c23a');
$return9 = json_decode(file_get_contents('http://api.bilibili.com/bangumi?type=json&btype=2&appkey=21087a09e533a072&access_key=237ecfe4b4795a715ea320acda31015a&sign='.$sign),true);
$number9 = 0;
while (isset($return9['list'][$number9]['spid']))
    {
    mysql_query("INSERT INTO BANGUMI (TITLE,TYPE,SPID,COVER,WEEKDAY,COUNT,CLICK,ATTENTION,LASTUPDATE) VALUES ('{$return9["list"][$number9]["title"]}','2','{$return9["list"][$number9]["spid"]}','{$return9["list"][$number9]["cover"]}','{$return9["list"][$number9]["weekday"]}','{$return9["list"][$number9]["bgmcount"]}','{$return9["list"][$number9]["click"]}','{$return9["list"][$number9]["attention"]}','{$return9["list"][$number9]["lastupdate_at"]}')");
    $number9 = $number9+1;
    }
echo 'CACHED BANGUMI_2,TOTAL:'.($number9+1).'<br/>--------------------<br/>';
echo '--------------------<br/>';
$sign = get_sign(array("type"=>"json","btype"=>"3","appkey"=>"21087a09e533a072","access_key"=>"237ecfe4b4795a715ea320acda31015a"),'e5b8ba95cab6104100be35739304c23a');
$return9 = json_decode(file_get_contents('http://api.bilibili.com/bangumi?type=json&btype=3&appkey=21087a09e533a072&access_key=237ecfe4b4795a715ea320acda31015a&sign='.$sign),true);
$number9 = 0;
while (isset($return9['list'][$number9]['spid']))
    {
    mysql_query("INSERT INTO BANGUMI (TITLE,TYPE,SPID,COVER,WEEKDAY,COUNT,CLICK,ATTENTION,LASTUPDATE) VALUES ('{$return9["list"][$number9]["title"]}','3','{$return9["list"][$number9]["spid"]}','{$return9["list"][$number9]["cover"]}','{$return9["list"][$number9]["weekday"]}','{$return9["list"][$number9]["bgmcount"]}','{$return9["list"][$number9]["click"]}','{$return9["list"][$number9]["attention"]}','{$return9["list"][$number9]["lastupdate_at"]}')");
    $number9 = $number9+1;
    }
echo 'CACHED BANGUMI_3,TOTAL:'.($number9+1).'<br/>--------------------<br/>';
echo '--------------------<br/>';
echo 'SUCCESS!';