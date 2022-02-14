<?php
/*
7)
    Написать функцию которая рекурсивно выводит все делители переданого числа(для 21 это 7 и 3)
*/

function getDevidors(int $num)
{
    if ( $num == 0) {
        return false;
    }
    static $counter = 1;
    if ( $counter > intval($num / 2)){
        echo "{$num}";
    } else {
    if ( !($num % $counter) ){
        echo $counter . PHP_EOL;
        }
    $counter++;
    getDevidors($num);
    }
    $counter--;
}

echo getDevidors(155);