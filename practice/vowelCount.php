<?php

function vowelCount($word)
{
    $count = 0;
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $chars = str_split($word);
    foreach ($chars as $char) {
        if (in_array($char, $vowels)) {
            $count++;
            return $count;
        } 
        print($count);
    }
}

vowelCount('apple');