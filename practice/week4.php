<?php 

$moves = ['rock', 'paper', 'scissors'];  #Array of strings 

$strawlengths = [2, 2, 2, 2, 2, 1]; 

$mixed = ['rock', 1, .04, true]; 



#var_dump($moves);

#generates a random number 
$randomNumber = rand(0, 2); 

#outputs random number to page to see that it's working 
//var_dump($randomNumber); 

#uses the random number to find a random item in an array 
$move = $moves[$randomNumber]; 
//var_dump($move); 

#Associative arrays - defines its' own keys for locating an element inside of an array 

$penny_value = .01;
$nickel_value = .05;
$dime_value = .10;
$quarter_value = .25;

$coin_values = [
    'penny' => .01, 
    'nickel' => .05, 
    'dime' => .10, 
    'quarter' => .25
]; 

//var_dump($coin_values['quarter']); 

$coin_counts = [
    'penny' => 100, 
    'nickel' => 25, 
    'dime' => 100, 
    'quarter' => 34, 
]; 

$coins = [
    'penny' => [100, .01], 
    'nickel' => [25, .05], 
    'dime' => [100, .10], 
    'quarter' => [34, .25], 
]; 

#sort by amounts 
//asort($coin_counts); 

#reverse sort by amounts 
//arsort($coin_counts); 

#sort by key 
//ksort($coin_counts); 

#sort reverse by keys 
//krsort($coin_counts);

//var_dump($coin_counts); 



//var_dump($cards); 

//foreach ($coin_counts as $coin => $count) {
//    $total = $total + ($count * $coin_values[$coin]); 
//}
//var_dump($total); 

//foreach($coins as $coin => $info) {
//    $total = $total + ($info[0] * $info[1]);
//}

//var_dump($total);

/*$cards = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14]; 
shuffle($cards); 
$playerCards = array_splice($cards, 0, count($cards)/2); 
$computerCards = $cards; 

$playerDraw = $playerCards[count($playerCards) -1 ]; 

var_dump($playerCards);
var_dump($playerDraw);

var_dump(date('F j Y', )); 
var_dump(strtolower('AbDCCCC')); 

var_dump(rand()); 
*/ 

/*$coin = ['heads', 'tails']; 

$randomNumber = rand(0,1); 
$player1Choice = $coin[$randomNumber]; 

$randomNumber = rand(0,1); 
$flip = $coin[$randomNumber]; 

if($player1Choice == $flip) {
    var_dump('Player 1 wins!'); 
} else {
    var_dump('Player 1 lost'); 
}

*/

$cards = [0,1,2,3,4,5,6,7,8,9,10]; 
shuffle($cards); 

$playerCardsExample = []; 
$computerCardsExample = []; 

while (count($cards) != 0) {
    $playerCardsDrawExample = [array_pop($cards)];
    $playerCardsExample = array_push($playerCardsDrawExample);
    $computerCardsExampleDraw = [array_pop($cards)];
    $computerCardsExample = array_push($computerCardsExampleDraw);
}; 

var_dump($playerCardsExample); 
var_dump($computerCardsExample); 