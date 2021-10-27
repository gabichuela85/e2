<?php

session_start();

$throwOptions = ['rock', 'paper', 'scissors', 'lizard', 'spock'];

$usersThrow = $_POST['throw'];
$computer = $throwOptions[rand(0, 4)];
$throw = strtolower($usersThrow);
$outcomeOptions = [
    'You tied with the computer',
    'You are the Winner!!!',
    'The Computer beat you. Better Luck next time'
];

$win = $outcomeOptions[1];
$lose = $outcomeOptions[2];

$possibleWins = [
    'Scissors cuts Paper',
    'Paper covers Rock',
    'Rock crushes Lizard',
    'Lizard poisons Spock',
    'Spock smashes Scissors',
    'Scissors decapitates Lizard',
    'Lizard eats Paper',
    'Paper disproves Spock',
    'Spock vaporizes Rock',
    'Rock crushes Scissors'
];

if ($computer == $throw) {
    $outcome = $outcomeOptions[0];
} elseif ($computer == 'rock' and $throw == 'paper') {
    $outcome = $possibleWins[1] . "<br>" . $win;
} elseif ($throw == 'rock' and $computer == 'paper') {
    $outcome = $possibleWins[1] . "<br>" . $lose;
} elseif ($computer == 'scissors' and $throw == 'paper') {
    $outcome = $possibleWins[0] . "<br>" . $lose;
} elseif ($throw == 'scissors' and $computer == 'paper') {
    $outcome = $possibleWins[0] . "<br>" . $win;
} elseif ($computer == 'rock' and $throw == '$scissors') {
    $outcome = $possibleWins[9] . "<br>" . $lose;
} elseif ($throw == 'rock' and $computer == '$scissors') {
    $outcome = $possibleWins[9] . "<br>" . $win;
} elseif ($computer == 'lizard' and $throw == 'rock') {
    $outcome = $possibleWins[2] . "<br>" . $win;
} elseif ($throw == 'lizard' and $computer == 'rock') {
    $outcome = $possibleWins[2] . "<br>" . $lose;
} elseif ($computer == 'lizard' and $throw == 'spock') {
    $outcome = $possibleWins[3] . "<br>" . $lose;
} elseif ($throw == 'lizard' and $computer == 'spock') {
    $outcome = $possibleWins[3] . "<br>" . $win;
} elseif ($computer == 'spock' and $throw == 'scissors') {
    $outcome = $possibleWins[4] . "<br>" . $lose;
} elseif ($throw == 'spock' and $computer == 'scissors') {
    $outcome = $possibleWins[4] . "<br>" . $win;
} elseif ($computer == 'lizard' and $throw == 'scissors') {
    $outcome = $possibleWins[5] . "<br>" . $win;
} elseif ($throw == 'lizard' and $computer == 'scissors') {
    $outcome = $possibleWins[5] . "<br>" . $lose;
} elseif ($computer == 'lizard' and $throw == 'paper') {
    $outcome = $possibleWins[6] . "<br>" . $lose;
} elseif ($throw == 'lizard' and $computer == 'paper') {
    $outcome = $possibleWins[6] . "<br>" . $win;
} elseif ($computer == 'spock' and $throw == 'paper') {
    $outcome = $possibleWins[7] . "<br>" . $win;
} elseif ($throw == 'spock' and $computer == 'paper') {
    $outcome = $possibleWins[7] . "<br>" . $lose;
} elseif ($computer == 'spock' and $throw == 'rock') {
    $outcome = $possibleWins[8] . "<br>" . $lose;
} elseif ($throw == 'spock' and $computer == 'rock') {
    $outcome = $possibleWins[8] . "<br>" . $win;
}

$_SESSION['results'] = [
    'throw' => $throw,
    'computer' => $computer,
    'throwOptions' => $throwOptions,
    'outcome' => $outcome
];

header('Location: index.php');