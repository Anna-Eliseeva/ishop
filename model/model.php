<?php
defined('ISHOP') or die('goodbye');

//echo 'model';

//$conn = mysqli_connect(HOST, DB_USER, DB_PASSWORD, DB, DB_PORT);
//$sql = 'SELECT * FROM `brands`';
//$result = mysqli_query($conn, $sql);

//echo mysqli_fetch_assoc($result);
//exit();

//catalog
function catalog()
{
    global $db;

    $query = 'SELECT * FROM `brands` ORDER BY `parent_id`, `brand_name`';
    $res = mysqli_query($db, $query) or die ('ошибка запроса');
}

$cat = [];

while($row = mysqli_fetch_assoc($res)) {
    if(!$row['parent_id']) {
        $cat[$row['brand_id']][] = $row['brand_name'];
    }
    else {
        $cat[$row['parent_id']]['sub'][$row['brand_id']] = $row['brand_name'];
    }
}
return $cat;