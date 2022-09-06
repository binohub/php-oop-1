<?php

// collego Movie.php ad Actor.php
require_once __DIR__ . '/Actor.php';

// crea una nuova classe 
class Movie
{
    // insert movie's characteristics
    private $name;
    private $actors = [];
    private $genres;
    private $runtime = 0;
    private $price = 0;

    // // // METHODS



    // // this is magic in php!
    function __construct($name, $genres, $runtime, $price)
    {
        $this->setName($name);
        $this->setGenres($genres);
        $this->setRuntime($runtime);
        $this->setPrice($price);
        echo "I BUILDED A NEW MOVIE!";
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($namesetted)
    {
        $this->name = $namesetted;
    }
    public function getActors()
    {
        return $this->actors;
    }
    public function setActors($actorssetted)
    {
        $this->actors[] = $actorssetted;
    }
    public function getGenres()
    {
        return $this->genres;
    }
    public function setGenres($genressetted)
    {
        $this->genres = $genressetted;
    }
    public function getRuntime()
    {
        return $this->runtime;
    }
    public function setRuntime($runtimesetted)
    {
        $this->runtime = $runtimesetted;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($pricesetted)
    {
        $this->price = $pricesetted;
    }
}

$MovieOne = new Movie("spiderman homecoming", "action", "1h 37m", 9.99);
var_dump($MovieOne);
$MovieTwo = new Movie("joker", "horror", "2h 16m", 16.99);
var_dump($MovieTwo);
$MovieThree = new Movie("batman","adventure", "1h 58m", 15);
var_dump($MovieThree);
