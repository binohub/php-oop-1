<?php

// crea una nuova classe 
class Card{
    
    // inserisci le caratteristiche della classe
    public $name;
    public $type;
    public $atk = 0;
    public $def = 0;
}

$CardOne = new Card();

// popoliamo $CardOne
$CardOne->name = "drago bianco occhi blu";
$CardOne->type = "monster";
$CardOne->atk = 3000;
$CardOne->def = 2500;



$CardTwo = new Card();

var_dump($CardOne);
var_dump($CardTwo);