<?php

error_reporting(E_ALL ^ E_NOTICE);

/*=========== Database Configuraiton ==========*/

/*$db_host = '127.0.0.1';
$db_user = 'azure';
$db_pass = 'password';
$db_name = 'products';*/

$db_host = '';
$db_user = '';
$db_pass = '';
$db_name = 'products';

foreach ($_SERVER as $key => $value) {
    if (strpos($key, "MYSQLCONNSTR_localdb") !== 0) {
        continue;
    }
    
    $db_host = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
    $db_name = 'products';
    $db_user = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
    $db_pass = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
}



/*=========== Website Configuration ==========*/

$defaultTitle = 'Mobile Computer Store';
$defaultFooter = date('Y').' &copy; Computer Store';

?>