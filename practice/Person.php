<?php 

class Person {
    public $firstName = []; 
    public $lastName = []; 
    public $age = []; 

    public function __construct($firstName, $lastName, $age) 
    {
    
    }

    public function getFullName() {
        return this->$firstName . ' ' . this->$lastName; 
    }
}
 