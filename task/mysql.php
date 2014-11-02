<?php
$mysql_server_name = '';
$mysql_server_port = '';
$mysql_server_username = '';
$mysql_server_password = '';
$mysql_server_database = '';
$link = @mysql_connect($mysql_server_name.':'.$mysql_server_port,$mysql_server_username,$mysql_server_password,true);
if(!$link) {
    echo 'Connect Server Failed: '.mysql_error($link);
	die();
}
if(!mysql_select_db($mysql_server_database,$link)) {
    echo 'Select Database Failed: '.mysql_error($link);
	die();
}