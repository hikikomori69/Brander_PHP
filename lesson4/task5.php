<?php
/*
7)
            На перед Написать функуию которая возвращает все делители числа
            (нужно будет использовтаь массив)
*/

function getDivisorsList(int $num) : array{
    $list = [];
    for ($i = 1 ; $i <= intval(abs($num) / 2) ; $i++){
         if ( $num % $i == 0 ){
            $list[] += $i; 
        }
    }
    array_push($list, $num);
    return $list;
}
