<?php

$A = array(2,4,10,16);
$value = array();

function multiply($arr, $m){
    foreach($arr as $arr_){
        $value[] = $arr_* $m;
    }
    return $value;
}

$B = multiply($A,2);
var_dump($B);

?>