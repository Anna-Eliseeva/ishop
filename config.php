<?php
defined('ISHOP') or exit('goodbye');

define('PATH', 'http://myshop.loc/');
define('MODEL', 'model/model.php');
define('CONTROLLER', 'controller/controller.php');
define('VIEW', 'view/');
define('TEMPLATE', VIEW . 'ishop/');

// Server DB
define('HOST', 'localhost');

// User
define('DB_USER', 'Anna');

// Password
define('DB_PASSWORD', '1234');
define('DB_PORT', 3304);
define('DB', 'ishop');

// Name Shop
define('NAME_SHOP', 'Имя магаза');

//$db = mysqli_connect(HOST, DB_USER, DB_PASSWORD, DB, 3306) or exit('exit');
//mysqli_query($db, "SET NAMES 'UTF8' ") or exit('cant set charset');