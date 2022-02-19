<?php
/*
18)
Написать функцию которая принимает два аргумента,
первый массив а вторым значение для поиска.
В случае если значение было найдено возвращает его ключ иначе false.
пользоваться стандартной функцией для поиска в массиве нельзя.
Учтите что массив может быть многомерный
(РЕКУРСИЯ)
*/


function checkInArrayRecursive(array $haystack,mixed $nedle)
{
    foreach($haystack as $key=>$val){
        if (is_array($val)){
            return checkInArrayRecursive($val,$nedle);
        } else {        
            if ($nedle === $val){
                return $key;
            }
        }
    }
    return false;
}
