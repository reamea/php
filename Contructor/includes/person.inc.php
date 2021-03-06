<?php

class Person {
    // Properties
    private $name;
    private $eyeColor;
    private $age;

    // Contrustor
    public function __construct($name, $eyeColor, $age) {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }

    //Methods get value name
    public function getName(){
        return $this->name;
    }
    public function getEyeColor(){
        return $this->eyeColor;
    }
    public function getAge(){
        return $this->age;
    }
}

?>