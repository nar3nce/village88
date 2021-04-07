<?php

for($i = 0; $i < 1000; $i++){
    $grade = rand(50,100); 
    if($grade < 70){
        echo "<h1>Your Score: $grade/100</h1> <br> <h2>Your grade is D</h2>";
    }    
    else if($grade <= 80){
        echo "<h1>Your Score: $grade/100</h1> <br> <h2>Your grade is C</h2>";
    }
    else if($grade <= 90){
        echo "<h1>Your Score: $grade/100</h1> <br> <h2>Your grade is B</h2>";
    }
    else{
        echo "<h1>Your Score: $grade/100</h1> <br> <h2>Your grade is A</h2>";
    }
}

?>  