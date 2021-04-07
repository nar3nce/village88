<?php

class Bike{
    Public $price;
    Public $max_speed;
    Public $miles;

    function __construct($price_, $max_speed_){
        $this->price = $price_;
        $this->max_speed = $max_speed_;
        $this->miles = 0;
    }

    function displayInfo(){
        echo "Bike Price : ".$this->price."<br>";
        echo "Bike max speed : ".$this->max_speed."<br>";
        if($this->miles < 0){
            $this->miles = 0;
        }
        echo "Total Miles : ".$this->miles."<br><br>";
    }

    function drive(){
        echo "Driving...<br>";
        $this->miles += 10;
        return $this;
    }

    function reverse(){
        echo "Reversing...<br>";
        $this->miles -= 5;
        return $this;
    }
}

$bike1 = new Bike(100,200);
$bike1->drive()->drive()->drive()->reverse()->displayInfo();

$bike2 = new Bike(200,200);
$bike2->drive()->reverse()->drive()->reverse()->displayInfo();

$bike3 = new Bike(300,400);
$bike3->reverse()->reverse()->reverse()->displayInfo();
?>