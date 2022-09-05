<?php

// crea una nuova classe 
class Card{
    
    // insert card's characteristics
    private $name;
    private $type;
    private $lvl = 1;
    private $atk = 0;
    private $def = 0;
    private $bonusatk = 0;

    // // // METHODS

    // // this is magic in php!
    function __construct($name, $type, $lvl, $atk, $def)
    {
        $this->setName($name);
        $this->setType($type);
        $this->setLvl($lvl);
        $this->setAtk($atk);
        $this->setDef($def);
    }


    public function getName(){
        return $this->name;
    }
    public function setName($name){
        if(strlen($name) <= 3){
            $this->name = "error 404! the name is too short";
        }else if(strlen($name) >= 25){
            $this->name = "error 404! the name is too long";
        }else{
            $this->name = $name; 
        }
    }

 
    public function getType(){
        return $this->type;
    }
    public function setType($typesetted){
        $this->type = $typesetted;
    }

    public function getLvl(){
        return $this->lvl;
        
    }
    public function setLvl($lvl){
        $this->lvl = $lvl;
        $this->setBonusatk($lvl);
    }


    public function getAtk(){
        return $this->atk;
    }
    public function setAtk($atksetted){
        $this->atk = $atksetted;
    }    
    

    public function getDef(){
        return $this->def;
    }
    public function setDef($defsetted){
        $this->def = $defsetted;
    }

    public function getBonusatk(){
        return $this->bonusatk;
        
    }
    public function setBonusatk($lvlsetted){
        if($lvlsetted <= 7){
            $this->bonusatk = 1500;
        }
    }
}

$CardOne = new Card("drago bianco occhi blu", "monster", 6, 3000, 2500);

// // populate $CardOne (if private doesn't work; u have to use this methods)
// $CardOne->setName("drago bianco occhi blu");
// $CardOne->setType("monster");
// $CardOne->setLvl(8);
// $CardOne->setAtk(3000);
// $CardOne->setDef(2500);

// // if privates direct changes doesn't work
// $CardOne->name = "drago bianco occhi blu";
// $CardOne->type = "monster";
// $CardOne->atk = 3000;
// $CardOne->def = 2500;

var_dump($CardOne);


$CardTwo = new Card("drago nero occhi rossi", "monster", 6, 2500, 2000);

// // populate $CardTwo (if private doesn't work; u have to use this methods)
// $CardTwo->setName("drago nero occhi rossi");
// $CardTwo->setType("monster");
// $CardTwo->setLvl(6);
// $CardTwo->setAtk(2800);
// $CardTwo->setDef(2000);

// // if privates direct changes doesn't work
// $CardTwo->name = "drago nero occhi rossi";
// $CardTwo->type = "monster";
// $CardTwo->atk = 2500;
// $CardTwo->def = 2000;

var_dump($CardTwo);

// // // // // // // // // // // // // // // // // // Part two

// crea una nuova classe 
class Movie{
    // insert movie's characteristics
    private $name;
    private $actors;
    private $genres;
    private $runtime = 0;
    private $price = 0;
    // // // METHODS
    // // this is magic in php!
    function __construct($name, $actors, $genres, $runtime, $price)
    {
        $this->setName($name);
        $this->setType($actors);
        $this->setGenres($genres);
        $this->setRuntime($runtime);
        $this->setPrice($price);
    }
    public function getName(){
        return $this->name;
    }
    public function setName($namesetted){
        $this->name = $namesetted; 
    }
    public function getActors(){
        return $this->actors;
    }
    public function setType($actorssetted){
        $this->actors = $actorssetted;
    }
    public function getGenres(){
        return $this->genres;
        
    }
    public function setGenres($genressetted){
        $this->genres = $genressetted;
    }
    public function getRuntime(){
        return $this->runtime;
    }
    public function setRuntime($runtimesetted){
        $this->runtime = $runtimesetted;
    }    
    public function getPrice(){
        return $this->price;
    }
    public function setPrice($pricesetted){
        $this->price = $pricesetted;
    }
}
$MovieOne = new Movie("spiderman homecoming", "tom holland", "action", "1h 37m", 9.99);
var_dump($MovieOne);
$MovieTwo = new Movie("joker", "jack sparrow", "horror", "2h 16m", 16.99);
var_dump($MovieOne);
$MovieOne = new Movie("batman", "bruce wayne", "adventure", "1h 58m", 15);
var_dump($MovieOne);