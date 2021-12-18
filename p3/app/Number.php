<?php 

namespace App; 

class Number 
{
    public $number = []; 

    public function __construct() 
    {
        $this->number = rand(1, 100); 
    }

    public function generateNumber() 
    {
        return $this->number; 
    }
}