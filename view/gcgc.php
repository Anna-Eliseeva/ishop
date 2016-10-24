<?php
//$post = 50;
//$arrInt = [1,2,];
//
//print_r($arrInt);
//
//
//while(count($arrInt) <= $post){
//    $_2 =array_pop($arrInt);//2
//    $_1 = array_pop($arrInt);//1
//    array_push($arrInt, $_1, $_2, $_2 + $_1);
//}
//print_r($arrInt);

//for($i = 1; $i <= 99; $i++){
//    echo $i;
//}
/*$num = 100;

for($i = 0, $i2 = 1; $i <= $num; $i++, $i2++) {
    if($i % 5 == 0) {
        echo $i . ' ';
    }
    if($i2 === 5) {
        echo PHP_EOL;
        $i2 = 1;
    }
}

$a = 0;
$b = 100;
$sum = $a + $b;
do {
}
while(0);*/

function fsd($x = 5, $y = 10)
{
    $z = 0;

    for($i = 1; $i <= $y; $i++){
//      $z += $x;
        $z = $z + $x;
    }

    return $z;
}

echo fsd();