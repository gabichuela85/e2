<?php
// Rock Paper Scissors Lizard Spock Game Simulator 
// per Big Bang Theory 
//
require 'index-view.php'; 

$throw = ['Rock', 'Paper', 'Scissors', 'Lizard', 'Spock'];

$player1Move = $throw[rand(0,4)]; 
$player2Move = $throw[rand(0,4)]; 

function thethrow($player1Move, $player2Move) {
    echo "Player 1 threw " . $player1Move . ".<br>";
    echo "Player 2 threw " . $player2Move . ".<br>";
}

function eval1($player1Move, $happening, $player2Move){
    echo $player1Move . " $happening " . $player2Move . "<br>"; 
    echo "Player 1 wins!!!"; 
}

if($player1Move == $player2Move) {
    thethrow($player1Move, $player2Move);   
    echo "We have a tie!"; 
} elseif($player1Move == 'scissors' and $player2Move == 'paper') {
    thethrow($player1Move, $player2Move); 
    echo $player1Move . " cuts " . $player2Move . "<br>"; 
    echo "Player 1 wins!!!";   
} elseif($player1Move == 'paper' and $player2Move == 'scissors') {
    thethrow('paper', 'scissors'); 
    echo $player1Move . " cuts " . $player2Move . "<br>";
    echo "Player 2 wins!!!";  
} elseif($player1Move == 'Paper' and $player2Move == 'Rock') {
    thethrow('Paper', 'Rock'); 
    echo $player1Move . " covers " . $player2Move . "<br>"; 
    echo "Player 1 wins!!!"; 
} elseif($player1Move == 'Rock' and $player2Move == 'Paper') {
    thethrow('Rock', 'Paper'); 
    echo $player2Move . " covers " . $player1Move . "<br>"; 
    echo "Player 2 wins!!!"; 
} elseif($player1Move == 'Rock' and $player2Move == 'Lizard') {
    thethrow('Rock', 'Lizard'); 
    echo $player1Move . " crushes " . $player2Move . "<br>"; 
    echo "Player 1 wins!!!"; 
} elseif($player1Move == 'Lizard' and $player2Move == 'Rock') {
    thethrow('Lizard', 'Rock'); 
    echo $player2Move . " crushes " . $player1Move . "<br>"; 
    echo "Player 2 wins!!!"; 
} elseif($player1Move == 'Lizard' and $player2Move == 'Spock') {
    thethrow('Lizard', 'Spock'); 
    echo $player1Move . " poisons " . $player2Move . "<br>"; 
    echo "Player 1 wins!!!"; 
} elseif($player1Move == 'Spock' and $player2Move == 'Lizard') {
    thethrow('Spock', 'Lizard'); 
    echo $player2Move . " poisons " . $player1Move . "<br>"; 
    echo "Player 2 wins!!!"; 
} elseif($player1Move == 'Spock' and $player2Move == 'Scissors') {
    thethrow('Spock', 'Scissors'); 
    echo $player1Move . " smashes " . $player2Move . "<br>"; 
    echo "Player 1 wins!!!"; 
} elseif($player1Move == 'Scissors' and $player2Move == 'Spock') {
    thethrow('Scissors', 'Spock'); 
    echo $player2Move . " smashes " . $player1Move . "<br>"; 
    echo "Player 2 wins!!!"; 
} elseif($player1Move == 'Scissors' and $player2Move == 'Lizard') {
    thethrow('Scissors', 'Lizard'); 
    echo $player1Move . " decapitates " . $player2Move . "<br>"; 
    echo "Player 1 wins!!!"; 
} elseif($player1Move == 'Lizard' and $player2Move == 'Scissors') {
    thethrow('Lizard', 'Scissors'); 
    echo $player2Move . " decapitates " . $player1Move . "<br>"; 
    echo "Player 2 wins!!!"; 
} elseif($player1Move == 'Lizard' and $player2Move == 'Paper'){
    thethrow('Lizard', 'Paper'); 
    echo $player1Move . " eats " . $player2Move . "<br>"; 
    echo "Player 1 wins"; 
} elseif($player1Move == 'Paper' and $player2Move == 'Lizard'){
    thethrow('Paper', 'Lizard'); 
    echo $player2Move . " eats " . $player1Move . "<br>"; 
    echo "Player 2 wins"; 
} elseif($player1Move == 'Paper' and $player2Move == 'Spock') {
    thethrow('Paper', 'Spock'); 
    echo $player1Move . " disproves " . $player2Move . "<br>"; 
    echo "Player 1 wins"; 
} elseif($player1Move == 'Spock' and $player2Move == 'Paper') {
    thethrow('Spock', 'Paper'); 
    echo $player2Move . " disproves " . $player1Move . "<br>"; 
    echo "Player 2 wins"; 
} elseif($player1Move == 'Spock' and $player2Move == 'Rock') {
    thethrow('Spock', 'Rock'); 
    echo $player1Move . " vaporizes " . $player2Move . "<br>"; 
    echo "Player 1 wins"; 
} elseif($player1Move == 'Rock' and $player2Move == 'Spock') {
    thethrow('Rock', 'Spock'); 
    echo $player2Move . " vaporizes " . $player1Move . "<br>"; 
    echo "Player 2 wins"; 
} elseif($player1Move == 'Rock' and $player2Move == 'Scissors') {
    thethrow('Rock', 'Scissors'); 
    echo $player1Move . " crushes " . $player2Move . "<br>"; 
    echo "Player 1 wins"; 
} elseif($player1Move == 'Scissors' and $player2Move == 'Rock') {
    thethrow('Scissors', 'Rock'); 
    echo $player2Move . " crushes " . $player1Move . "<br>"; 
    echo "Player 2 wins"; 
}