<?php
session_start();

#Array of possible options to throw
$gameOptions = [
    'scissors',
    'paper',
    'rock',
    'lizard',
    'spock'
];

$verbs = [
    'cuts',
    'covers',
    'crushes',
    'poisons',
    'smashes',
    'decapitates',
    'eats',
    'disproves',
    'vaporizes'
];