<?php
/*
11)
Написать функцию которая первым аргументом принимает символ(по умолчанию #)
и число(по умолчанию 5) после чего рисует пирамиду следующего вида:
 #
 ##
 ###
 ####
 ##### 

Где второй аргумент это одновременно и количество рядов и количество печатаемых символов
*/

function drawPattern(string $symbol='#',int $count=5){
    $i = 1;
    while ($i != $count){
        echo nl2br(htmlspecialchars(str_repeat($symbol, $i). PHP_EOL));
        $i++;
    }
}
drawPattern('<3>', 41);