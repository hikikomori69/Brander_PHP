<?php
/*          
6)
                Написать функцию которая проверяет является ли число простым или нет
                (продвинутый уровень - использовтаь рекурсию)
*/
function PrimeNumber(int $num) : bool
{
    if ($num ==  0 ){
        return false;
    }
    for ($i = 2 ; $i <= intval(abs($num) / 2) ; $i++){
        if ( !($num % $i) ){
            return false;
        }
    }
    return true;
}

function PrimeNumberRecursive(int $num) : bool{
    if ( $num == 0){
        return false;
    }  
    static $counter = 2;
    if ($counter > intval(abs($num / 2))){
        $counter--;
        return true;
    } else {
        if ( !($num % $counter) ){
            return false;
        }
        $counter++;
        return PrimeNumberRecursive($num);
    }
    $counter--;
}
