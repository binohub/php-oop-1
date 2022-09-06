<?php

// crea una nuova classe 
class Actor
{
    // insert actor's characteristics
    private $fullname;
    private $age;

    // // // METHODS
    function __construct($fullname, $age)
    {
        $this->setFullname($fullname);
        $this->setAge($age);
        echo " | +1 Actor ";
    }

    public function getFullname()
    {
        return $this->fullname;
    }
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;
    }

    public function getAge()
    {
        return $this->age;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
}


