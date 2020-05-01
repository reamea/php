<?php

class House {
    // Properties
    private $street;
    private $city;

    // Contrustor
    public function __construct($street, $city) {
        $this->street = $street;
        $this->city = $city;
    }

    //Methods get value name
    public function getStreet(){
        return $this->street;
    }
    public function getCity(){
        return $this->city;
    }
}

?>