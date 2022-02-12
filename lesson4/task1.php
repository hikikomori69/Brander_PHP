<?php
/* 
4)
       Написать функция котора принимает три целых числа и возвращает большее из них,
       если числа равны то любое из них

*/

function getMaxNumber(int $FirstNumber, int $SecondNumber, int $ThirdNumber) : int
{
    $collections = [$FirstNumber, $SecondNumber, $ThirdNumber];
    return max($collections);
}

