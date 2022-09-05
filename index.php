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

    // // methods
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
    public function setType($type){
        $this->type = $type;
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
    public function setAtk($atk){
        $this->atk = $atk;
    }    
    

    public function getDef(){
        return $this->def;
    }
    public function setDef($def){
        $this->def = $def;
    }

    public function getBonusatk(){
        return $this->bonusatk;
    }
    public function setBonusatk($lvl){
        if($lvl <= 7){
            $this->bonusatk = 1000;
        }
    }
}

$CardOne = new Card();
// // populate $CardOne (if private doesn't work; u have to use methods)
$CardOne->setName("drago bianco occhi blu");
$CardOne->setType("monster");
$CardOne->setLvl(8);
$CardOne->setAtk(3000);
$CardOne->setDef(2500);
// $CardOne->name = "drago bianco occhi blu";
// $CardOne->type = "monster";
// $CardOne->atk = 3000;
// $CardOne->def = 2500;



$CardTwo = new Card();

// // populate $CardTwo if private doesn't work)
$CardTwo->setName("drago nero occhi rossi");
$CardTwo->setType("monster");
$CardTwo->setLvl(7);
$CardTwo->setAtk(2800);
$CardTwo->setDef(2000);
// $CardTwo->name = "drago nero occhi rossi";
// $CardTwo->type = "monster";
// $CardTwo->atk = 2500;
// $CardTwo->def = 2000;


var_dump($CardOne);
var_dump($CardTwo);