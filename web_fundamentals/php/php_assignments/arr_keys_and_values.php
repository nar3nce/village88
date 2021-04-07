<?php

$users['first_name'] = "Michael";
$users['last_name'] = "Choi";


function myFunc($arr){
    foreach($arr as $key => $arr_){
        echo "The value in the key '{$key}' is '{$arr_}' "."<br>";
    }
}

myFunc($users);

?>  