<?php
require_once __DIR__ . '/Actor.php';

class Movie{
    private $title;
    private $actors;

    function __construct($title, ...$actors){
        $this->setTitle($title);
        $this->actors = $actors;
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title =  ucwords($title);
    }
    public function getActors()
    {
        return $this->actors;
    }
    public function addActors(...$actors)
    {
        echo 'i added a new actor array (this is a fusion summon; of the new and the old array)';
        $this->actors = array_merge($actors, $this->actors);
        
    }
}

$movie = new Movie('spiderman homecomin', 'tom holland', 'zendaya', 'robert downey jr');
$movie->addActors('ninja', 'conan', 'shinichi');
var_dump($movie->getTitle());
var_dump($movie->getActors());
// non riconosce gli array
echo 'i want to print an echo array! i have to convert it into a string with implode: ';
echo implode(", ", $movie->getActors()); 
var_dump($movie);




