<?php
/*
12)
Написать функцию котоая принимает аргументом строку и возвращает ее перевернутый 
вариант(пример, "Test" -> "tseT") использовать стандартные функции php работы
со строкаими нельзя
*/

function StrReverse(string $str) //: string
{
    $revstr = '';
    for ($i = -1 ; abs($i) <= strlen($str); $i--){
        $revstr .= $str[$i];    
    }    
     var_dump($revstr);
}
echo StrReverse('abc');