<?php
/* 
        Дано три числа(числа выбираете сами и записываете их в переменные) Нужно с помощью условия

                                    вывести большее из них
                                    меньшее из них
                                    если числа равны о вывести первое из них
*/

$FirstNumber = random_int(1, 10);
$SecondNumber = random_int(1, 10);
$ThirdNumber = random_int(1, 10);
$max = null;
$min = null;

if ( $FirstNumber >= $SecondNumber )
{
    if ( $FirstNumber >= $ThirdNumber ){
        $max = "1 -- {$FirstNumber}";
        if ($SecondNumber > $ThirdNumber){
            $min = "3 -- {$ThirdNumber}";
        } else {
            $min = "2 -- {$SecondNumber}";
        }
    } else {
        $max = "3 -- {$ThirdNumber}";
        $min = "2 -- {$SecondNumber}";
    }
} else {
    
    if ( $SecondNumber >= $ThirdNumber ){
        $max = "2 -- {$SecondNumber}";
        if ($FirstNumber > $ThirdNumber){
            $min = "3 -- {$ThirdNumber}";
        } else {
            $min = "1 -- {$FirstNumber}";
        }
    } else {
        $max = "3 -- {$ThirdNumber}";
        $min = "1 -- {$FirstNumber}";  
    }
} 

echo $FirstNumber;
echo $SecondNumber;
echo $ThirdNumber . PHP_EOL;

echo $max . PHP_EOL;
echo $min . PHP_EOL;