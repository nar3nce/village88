<?php

$x = array(4, 6, 1, 3, 5, 7, 25);
$y = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");


function draw_stars($arr){

    foreach($arr as $arr_){
        echo "<br>";
        if(is_string($arr_)){
            $length = strlen($arr_);
            for($i = 1; $i <= $length; $i++){
                echo $arr_[0];
            }
        }
        else
        {
            for($i = 1; $i <= $arr_; $i++){
                echo  "*";
            }
        }
    }
}

draw_stars($y);
?>