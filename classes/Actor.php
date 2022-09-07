<?php

class Actor
{
    private $fullname;
    private $age;

    function __construct($fullname, $age)
    {
        $this->setFullname($fullname);
        $this->setAge($age);
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
