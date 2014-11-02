<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Language" content="zh-cn" />
<meta name="robots" content="all" />
<meta name="author" content="OrangeJam" />
<meta name="Copyright" content="Copyright OrangeJam All Rights Reserved." />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<center>
<title>Info Fetch Engine - 安装 - BiliPlus</title>
</head>
<body>
<?php
require dirname(__FILE__).'/mysql.php';
$createtable1 = "CREATE TABLE LIST_HOT
(
ID int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(ID),
AID text,
TITLE text,
PIC text,
INFO text,
PLAY text,
DANMU text,
FAVOURITE text
)";
$createtable2 = "CREATE TABLE LIST_BANGUMI
(
ID int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(ID),
AID text,
TITLE text,
PIC text,
INFO text,
PLAY text,
DANMU text,
FAVOURITE text
)";
$createtable3 = "CREATE TABLE LIST_AMINE
(
ID int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(ID),
AID text,
TITLE text,
PIC text,
INFO text,
PLAY text,
DANMU text,
FAVOURITE text
)";
$createtable4 = "CREATE TABLE LIST_MUSIC
(
ID int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(ID),
AID text,
TITLE text,
PIC text,
INFO text,
PLAY text,
DANMU text,
FAVOURITE text
)";
$createtable5 = "CREATE TABLE LIST_GAME
(
ID int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(ID),
AID text,
TITLE text,
PIC text,
INFO text,
PLAY text,
DANMU text,
FAVOURITE text
)";
$createtable6 = "CREATE TABLE LIST_ENTERTAINMENT
(
ID int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(ID),
AID text,
TITLE text,
PIC text,
INFO text,
PLAY text,
DANMU text,
FAVOURITE text
)";
$createtable7 = "CREATE TABLE LIST_FILM
(
ID int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(ID),
AID text,
TITLE text,
PIC text,
INFO text,
PLAY text,
DANMU text,
FAVOURITE text
)";
$createtable8 = "CREATE TABLE LIST_SCIENCE
(
ID int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(ID),
AID text,
TITLE text,
PIC text,
INFO text,
PLAY text,
DANMU text,
FAVOURITE text
)";
$createtable9 = "CREATE TABLE BANGUMI
(
ID int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(ID),
TYPE int,
SPID text,
TITLE text,
COVER text,
WEEKDAY text,
COUNT text,
CLICK text,
ATTENTION text,
LASTUPDATE text
)";
$createtable10 = "CREATE TABLE CACHE_PAGE
(
ID varchar(16) NOT NULL,
PRIMARY KEY(ID),
SUCCESS text,
DATA text,
MP3 text,
MP4 text,
LASTUPDATE text
)";
$createtable11 = "CREATE TABLE CACHE_VIDEO
(
CID int NOT NULL,
PRIMARY KEY(CID),
SUCCESS text,
DATA text,
LASTUPDATE text
)";
if (mysql_query($createtable1,$link))
    echo '</br>数据库LIST_HOT创建成功...';
else
    echo '</br>数据库LIST_HOT创建失败！';
if (mysql_query($createtable2,$link))
    echo '</br>数据库LIST_BANGUMI创建成功...';
else
    echo '</br>数据库LIST_BANGUMI创建失败！';
if (mysql_query($createtable3,$link))
    echo '</br>数据库LIST_AMINE创建成功...';
else
    echo '</br>数据库LIST_AMINE创建失败！';
if (mysql_query($createtable4,$link))
    echo '</br>数据库LIST_MUSIC创建成功...';
else
    echo '</br>数据库LIST_MUSIC创建失败！';
if (mysql_query($createtable5,$link))
    echo '</br>数据库LIST_GAME创建成功...';
else
    echo '</br>数据库LIST_GAME创建失败！';
if (mysql_query($createtable6,$link))
    echo '</br>数据库LIST_ENTERTAINMENT创建成功...';
else
    echo '</br>数据库LIST_ENTERTAINMENT创建失败！';
if (mysql_query($createtable7,$link))
    echo '</br>数据库LIST_FILM创建成功...';
else
    echo '</br>数据库LIST_FILM创建失败！';
if (mysql_query($createtable8,$link))
    echo '</br>数据库LIST_SCIENCE创建成功...';
else
    echo '</br>数据库LIST_SCIENCE创建失败！';
if (mysql_query($createtable9,$link))
    echo '</br>数据库BANGUMI创建成功...';
else
    echo '</br>数据库BANGUMI创建失败！';
if (mysql_query($createtable10,$link))
    echo '</br>数据库CACHE_PAGE创建成功...';
else
    echo '</br>数据库CACHE_PAGE创建失败！';
if (mysql_query($createtable11,$link))
    echo '</br>数据库CACHE_VIDEO创建成功...';
else
    echo '</br>数据库CACHE_VIDEO创建失败！';
mysql_close($link);
echo "</br></br><b>系统安装完成！</br>如有任何错误请检查MySQL连接设置和数据库状态，并在清空数据库后重新运行本页面。</br>请在安装完成后删除此文件以避免安全问题！"
?>
</body>
</html>