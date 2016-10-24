<?php
$post = 100;

$int = [
    1,
    2,
];

for($i;  count($int) <= $post; $i++)
{
    $_1 = array_pop($int); // 2
    $_2 = array_pop($int); // 1
    $_3 = $_1 + $_2; // 3

    array_push($int, $_2, $_1, $_3);
}

var_dump($int);


//$


function calc($x,$y,$math){
    if($math === '+'){
        return $x + $y;
    }
//    else{
//        return 'error';
//    }
    elseif($math === '-'){
        return $x - $y;
    }


    elseif($math === '/'){
        if($y == 0)
            return 'Error!';
        return $x / $y;
    }
    elseif($math === '*'){
        return $x * $y;
    }
    else{
        return ' error';
    }
}
//if($math = '+' ){
//    $x + $y;
//
//}
//else{
//
//   echo 'error';
//}
//if($math = '-'){
//    $x - $y;
//}
//else{
//    echo 'error code';
//}
//if($math = '/'){
//    $x / $y;
//}
//else{
//    echo 'Error2';
//}
//if($math = '*'){
//    $x * $y;
//}
//else{
//    echo 'error3';
//}
//echo ;
echo calc(4,0,'/');