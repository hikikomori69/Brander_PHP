<?php
/*
17)
Написать функцию которая принимает первым аргументом
массив и выводит все его элементы.
Учтите что массив может быть многомерный
*/

function getAllelements(array $arr){
    foreach ($arr as $value){
        if ( is_array($value)){
            getAllelements($value);
        } else {
            echo $value .PHP_EOL;
        }
    }
}
