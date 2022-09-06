<?php
require_once __DIR__ . '/Actor.php';

class Movie{
    private $title;
    private $actors;

    function __construct($title, $actors){
        $this->title = $title;
        $this->actors = $actors = [
            'conan edogawa'
        ];
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getActors()
    {
        return $this->actors;
    }
    public function addActors(...$actors)
    {
        echo 'i added a new actor array';
        $this->actors = array_merge($actors, $this->actors);
        var_dump($this->actors);
    }
}

$movie = new Movie('spiderman homecomin', []);
$movie->addActors('tom holland', 'bruce wayne' , 'flash');
$movie->addActors('tom holland', 'bruce wayne' , 'flash');
$movie->addActors('tom holland', 'bruce wayne' , 'flash');
