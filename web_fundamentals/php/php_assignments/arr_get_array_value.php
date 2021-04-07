<?php

$A = array(2,3,'hello'); 

function print_lists($arr){
    echo "</ul>";
    foreach($arr as $arr_){
        echo "<li>{$arr_}</li>";
    }
    echo "</ul>";
}

print_lists($A);

?>