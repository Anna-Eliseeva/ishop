<?php
defined('ISHOP') or die('goodbye');

require_once MODEL;

$view = empty($_GET['view']) ? 'hits' : $_GET['view'];
////подключение вида
//exit(__DIR__ . '/../' . TEMPLATE . 'index.php');
require_once __DIR__ . '/../' . TEMPLATE . 'index.php';