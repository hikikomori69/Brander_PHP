<?php
/*
14)
Написать функцию которая на вход примниает два аргумента - 
строки(отрывки из текста) и сравнивает % совпадения. Если строки идентичны - 100%
*/


//Нормально не смог реализовать. Думал-думал, но что-то вообще не идет. 
function getSimilarity(string $firstStr, string $secondStr){
    $pointsMax = 1;
    $points = 1;

    for($i = 0; $i < strlen($firstStr); $i++){
        for($j = 0; $j < strlen(substr($firstStr, $i)); $j++){ 
            if (str_contains($secondStr, substr($firstStr, $i, $j+1))){
                $points += 1;
                $pointsMax += 1;
            } else {
                $pointsMax += 1;
            }
        }
    }
    echo $pointsMax . PHP_EOL;
    echo $points . PHP_EOL;
    $total =  $points  / $pointsMax * 100;
    if ($total == 100){
        return 'Слово находится внутри второго слова, либо же они идентичны';
    } else {
        return $total;
    }
}