<?php

class Card{
    public $standard_cards = array(
        "Ace_hearts","two_hearts","three_hearts","four_hearts","five_hearts","six_hearts","seven_hearts","eight_hearts","nine_hearts","ten_hearts","Jack_hearts","Queen_hearts","King_hearts",
        "Ace_diamonds","two_diamonds","three_diamonds","four_diamonds","five_diamonds","six_diamonds","seven_diamonds","eight_diamonds","nine_diamonds","ten_diamonds","Jack_diamonds","Queen_diamonds","King_diamonds",
        "Ace_spades","two_spades","three_spades","four_spades","five_spades","six_spades","seven_spades","eight_spades","nine_spades","ten_spades","Jack_spades","Queen_spades","King_spades",
        "Ace_clubs","two_clubs","three_clubs","four_clubs","five_clubs","six_clubs","seven_clubs","eight_clubs","nine_clubs","ten_clubs","Jack_clubs","Queen_clubs","King_clubs"
    );

    public $cards;
    public $remaining_cards;

    function shuffle(){
        shuffle($this->standard_cards);
        return $this;
    }

    function Deal(){
        $this->cards = array_slice($this->standard_cards,0,13);
        $this->remaining_cards = array_slice($this->standard_cards,13);
        return $this;
    }

    function DisplayCards(){
        foreach($this->cards as $cards){
            echo $cards."<br>";
        }
        echo"<br>";
    }

    function DisplayRemainingCards(){
        foreach($this->remaining_cards as $remaining_cards_){
            echo $remaining_cards_."<br>";
        }
    }
}   

class Player extends Card{
    public $name;

    function __construct($name_){
        $this->name = $name_;
    }

    function DisplayCards(){
        echo "Player name : ".$this->name. " <br> <br>";
        echo "Player cards : <br>";
        parent::DisplayCards();
        echo "Remaining cards : <br> <br>";
        parent::DisplayRemainingCards();
    }
}


$player1 = new Player("narence");
$player1->shuffle()->Deal()->DisplayCards();
$player1->Deal()->DisplayCards();

?>