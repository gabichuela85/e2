<?php

$cards = [1,2,3,4,5,6,7,8,9,10];

//$diamonds = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]; 

$i = 2; 
$diamonds = []; 
$spades = []; 
$clubs = []; 
$hearts = []; 

while ($i <= 10) {
    $diamonds[] = $i; 
    $spades[] = $i;
    $clubs[] = $i;
    $hearts[] = $i; 
    $i++; 
}

$fulldeck = $diamonds + $spades + $clubs + $hearts; 
var_dump($fulldeck); 
//var_dump($diamonds); 
//var_dump($spades); 
//var_dump($clubs);
//var_dump($hearts);


/*
$spades = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]; 
$clubs = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]; 
$hearts = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]; 
$fulldeck = [[$diamonds], [$spades], [$clubs], [$spades]]; 

var_dump($fulldeck); 

*/

/*
shuffle($cards);
var_dump($cards); 

$playerHand = []; 
$computerHand = []; 

$cardNumber = count($cards); 

var_dump($cardNumber); 

for ($i=0; $i<$cardNumber; $i++) {
    $playerCards =  array_shift($cards);
    array_push($playerHand, $playerCards); 
    $cardNumber -- ; 
    $computerCards = array_shift($cards);
    array_push($computerHand, $computerCards); 
}

var_dump($playerHand); 
var_dump($computerHand); 

*/ 