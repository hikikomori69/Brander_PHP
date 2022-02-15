<?php
/* 
4)
       Написать функция котора принимает три целых числа и возвращает большее из них,
       если числа равны то любое из них

*/

function getMaxNumber(int $FirstNumber, int $SecondNumber, int $ThirdNumber) : int
{
    if ( $FirstNumber >= $SecondNumber) {
        if ($FirstNumber >= $ThirdNumber){
            return $FirstNumber;
        } else {
            return $ThirdNumber;
        }
    } else {
        if ($SecondNumber >= $ThirdNumber){
            return $SecondNumber;
        } else {
            return $ThirdNumber;
        }
    }
}