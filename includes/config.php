<?php

error_reporting(E_ALL ^ E_NOTICE);

/*=========== Database Configuraiton ==========*/

/*$db_host = '127.0.0.1';
$db_user = 'root';
$db_pass = '';
$db_name = 'productsdb';*/
$db_port = 3306;

/*$db_host = '';
$db_user = '';
$db_pass = '';
$db_name = 'products';*/
echo getenv('MYSQLCONNSTR_defaultConnection');

foreach ($_SERVER as $key => $value) {
    if (strpos($key, "MYSQLCONNSTR_defaultConnection") !== 0) {
        continue;
    }
    
    $db_host = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
    $db_name = 'productsdb';
    $db_user = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
    $db_pass = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
}



/*=========== Website Configuration ==========*/

$defaultTitle = 'Mobile Computer Store';
$defaultFooter = date('Y').' &copy; Computer Store';

?>