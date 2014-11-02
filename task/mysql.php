<?php
$link = @mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS,true);
if(!$link) {
    echo 'Connect Server Failed: '.mysql_error($link);
	die();
}
if(!mysql_select_db(SAE_MYSQL_DB,$link)) {
    echo 'Select Database Failed: '.mysql_error($link);
	die();
}