<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

$db_server = "localhost"; //資料庫位置

$db_name = "test"; //資料庫名稱
//資料庫管理者帳號
$db_user = "root";
//資料庫管理者密碼
$db_passwd = "";


if(!@mysql_connect($db_server, $db_user, $db_passwd))//對資料庫連線
        die("無法對資料庫連線");

mysql_query("SET NAMES utf8");


if(!@mysql_select_db($db_name))//選擇資料庫
        die("無法使用資料庫");
        
        

?> 