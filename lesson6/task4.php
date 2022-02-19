<?php
/*
Написать функцию которая принимает два аргумента,
первый массив а вторым значение для поиска.
В случае если значение было найдено возвращает его ключ иначе false.
пользоваться стандартной функцией для поиска в массиве нельзя.
Учтите что массив может быть многомерный

*/


function checkInArray(array $haystack,mixed $nedle)
{
    foreach($haystack as $key=>$val){
        if (is_array($val)){
            foreach($val as $k => $v){
                if ($v === $nedle){
                    return $k;
                }
            };
        } else {        
            if ($val === $nedle){
                return $key;
            }
        }
    }
    return false;
}
