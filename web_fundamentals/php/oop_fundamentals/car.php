<?php

class Car{

    public $price;
    public $speed;
    public $fuel;
    public $mileage;
    public $tax;

    function __construct($price_, $speed_,$fuel_,$mileage_){
        $this->price = $price_;
        $this->speed = $speed_;
        $this->fuel = $fuel_;
        $this->mileage = $mileage_;
        if($price_ > 10000){
            $this->tax = 0.15;
        }
        else{
            $this->tax = 0.12;
        }
        $this->displayInfo();
    }

    function displayInfo(){
        echo "Price : ".$this->price."<br>";
        echo "Speed : ".$this->speed."<br>";
        echo "Fuel : ".$this->fuel."<br>";
        echo "mileage : ".$this->mileage."<br>";
        echo "tax : ".$this->tax."<br><br>";
    }
}

$car1 = new Car(100,"24mph","Full","15mpg");
$car2 = new Car(10000,"100mph","Full","15mpg");
$car3 = new Car(10001,"24mph","Full","15mpg");
$car4 = new Car(5000,"50mph","Full","15mpg");
$car5 = new Car(20000,"200mph","Full","15mpg");

?>