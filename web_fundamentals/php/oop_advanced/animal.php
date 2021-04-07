<?php

class Animal{

    public $name;
    public $health;

    function __construct(){
        $this->health = 100;
    }

    function walk(){
        $this->health--;
        return $this;
    }
    
    function run(){
        $this->health -=5;
        return $this;
    }

    function displayHealth(){
        echo "Animal Name : ".$this->name."<br>";
        echo "Animal health : ".$this->health."<br><br>";
    }
}

class Dog extends Animal {

    function __construct(){
        $this->health = 150;
    }

    function pet(){
        $this->health +=5;
        return $this;
    }

}

class Dragon extends Animal{

    function __construct(){
        $this->health = 170;
    }
    
    function fly(){
        $this->health -=10;
        return $this;
    }

    function displayHealth(){
        echo "this is a dragon <br>";
        parent::displayHealth();
    }
}

$animal = new Animal();
$animal->walk()->walk()->walk()->run()->run()->displayHealth();

$dog1 = new Dog();
$dog1->walk()->walk()->walk()->run()->run()->pet()->displayHealth();

$dragon1 = new Dragon();
$dragon1->walk()->walk()->walk()->run()->run()->fly()->fly()->displayHealth();

?>