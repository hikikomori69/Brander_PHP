<?php
/*          
6)
                Написать функцию которая проверяет является ли число простым или нет
                (продвинутый уровень - использовтаь рекурсию)
*/
function Prime_Number(int $num) : string
{
    if ($num == 0) {return '=)';}
    
    $counter = 0;
    for ($i = 2 ; $i <= intval(abs($num) / 2) ; $i++){
        if ( !($num % $i) ){
            $counter += 1;
        }
        if ($counter == 1){
            return 'не простое';
        }
    }
    return 'простое';
}

function Prime_Number_Recursive(int $num){
    if ( $num == 0){return '=)';}

    static $counter = 2;
    if ($counter > intval(abs($num / 2))){
        $counter--;
        return 'простое';
    } else {
        if ( !($num % $counter) ){
            return 'не простое';
        }
        $counter++;
        return Prime_Number_Recursive($num);
    }
    $counter--;
}
