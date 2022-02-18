<?php
/*
10)
Написать функцию которая принимает первым аргументом строку, вторым символ.
С помощью цикла вывести данный симфол столько раз сколько симфолов в строке
переданной в первом аргументе
*/

function printCharacter(string $str,mixed $character){
    echo str_repeat($character.PHP_EOL, substr_count($str, $character));
}
