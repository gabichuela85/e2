<?php
// Rock Paper Scissors Lizard Spock Game Simulator 
// per Big Bang Theory 
//
require 'index-view.php'; 

$throw = ['Rock', 'Paper', 'Scissors', 'Lizard', 'Spock'];
$descriptor = ['cuts', 'covers', 'crushes', 'poisons', 'smashes', 'decapitates', 'eats', 'disproves', 'vaporizes']; 
$player1Move = $throw[rand(0,4)]; 
$player2Move = $throw[rand(0,4)]; 
$player1Count = 0; 
$player2Count = 0; 


function thethrow($player1Move, $player2Move) {
    echo "<b>Player 1</b> threw " . $player1Move . ".<br>";
    echo "<b>Player 2</b> threw " . $player2Move . ".<br>";
}


function eval1win($player1Move, $descriptor, $player2Move){
    thethrow($player1Move, $player2Move); 
    echo $player1Move . " " .  $descriptor ." " . $player2Move . "<br>"; 
    echo "Player 1 wins!!!<br>";
    global $player1Count; 
    $player1Count++; 
    echo "Player 1 has won " . $player1Count . " times."; 
    return $player1Count;  
}
function eval2win($player1Move, $descriptor, $player2Move) {
    thethrow($player1Move, $player2Move); 
    echo $player2Move . " " . $descriptor . " " . $player1Move . "<br>"; 
    echo "Player 2 wins!!!<br>";
    global $player2Count; 
    $player2Count++; 
    echo "Player 2 has won " . $player2Count . " times."; 
    return $player2Count; 
}
function thegame($player1Move, $descriptor, $player2Move) {
    if ($player1Move == $player2Move) {
        thethrow($player1Move, $player2Move);
        echo "We have a tie!";
    } elseif ($player1Move == 'scissors' and $player2Move == 'paper') {
        eval1win($player1Move, $descriptor[0], $player2Move);
    } elseif ($player1Move == 'paper' and $player2Move == 'scissors') {
        eval2win($player1Move, $descriptor[0], $player2Move);
    } elseif ($player1Move == 'Paper' and $player2Move == 'Rock') {
        eval1win($player1Move, $descriptor[1], $player2Move);
    } elseif ($player1Move == 'Rock' and $player2Move == 'Paper') {
        eval2win($player1Move, $descriptor[1], $player2Move);
    } elseif ($player1Move == 'Rock' and $player2Move == 'Lizard') {
        eval1win($player1Move, $descriptor[2], $player2Move);
    } elseif ($player1Move == 'Lizard' and $player2Move == 'Rock') {
        eval2win($player1Move, $descriptor[2], $player2Move);
    } elseif ($player1Move == 'Lizard' and $player2Move == 'Spock') {
        eval1win($player1Move, $descriptor[3], $player2Move);
    } elseif ($player1Move == 'Spock' and $player2Move == 'Lizard') {
        eval2win($player1Move, $descriptor[3], $player2Move);
    } elseif ($player1Move == 'Spock' and $player2Move == 'Scissors') {
        eval1win($player1Move, $descriptor[4], $player2Move);
    } elseif ($player1Move == 'Scissors' and $player2Move == 'Spock') {
        eval2win($player1Move, $descriptor[4], $player2Move);
    } elseif ($player1Move == 'Scissors' and $player2Move == 'Lizard') {
        eval1win($player1Move, $descriptor[5], $player2Move);
    } elseif ($player1Move == 'Lizard' and $player2Move == 'Scissors') {
        eval2win($player1Move, $descriptor[5], $player2Move);
    } elseif ($player1Move == 'Lizard' and $player2Move == 'Paper') {
        eval1win($player1Move, $descriptor[6], $player2Move);
    } elseif ($player1Move == 'Paper' and $player2Move == 'Lizard') {
        eval2win($player1Move, $descriptor[6], $player2Move);
    } elseif ($player1Move == 'Paper' and $player2Move == 'Spock') {
        eval1win($player1Move, $descriptor[7], $player2Move);
    } elseif ($player1Move == 'Spock' and $player2Move == 'Paper') {
        eval2win($player1Move, $descriptor[7], $player2Move);
    } elseif ($player1Move == 'Spock' and $player2Move == 'Rock') {
        eval1win($player1Move, $descriptor[8], $player2Move);
    } elseif ($player1Move == 'Rock' and $player2Move == 'Spock') {
        eval2win($player1Move, $descriptor[8], $player2Move);
    } elseif ($player1Move == 'Rock' and $player2Move == 'Scissors') {
        eval1win($player1Move, $descriptor[2], $player2Move);
    } elseif ($player1Move == 'Scissors' and $player2Move == 'Rock') {
        eval2win($player1Move, $descriptor[2], $player2Move);
    }
}

while($player1Count  != 2 and $player2Count != 2) {
    thegame($player1Move, $descriptor, $player2Move); 
    echo "<br><br>"; 
    $player1Move = $throw[rand(0,4)];
    $player2Move = $throw[rand(0,4)];
    if ($player1Count == 2){
        print("<b><em>Player 1 is the Ultimate Winner</em></b>"); 
    }elseif ($player2Count == 2) {
        print("<b><em>Player 2 is the Ultimate Winner</em></b>"); 
    }
}