<?php
/*
5)
        Написать функцию которая принимает число от 1 до 7 и возвращает день недели 
        Если число не входит в заданый диапазон то возвращает сообщение об ошибке
*/

function getDay (int $DayNumber) : string
{
    if ( 8 < $DayNumber || $DayNumber < 1 ){
        return 'unknown day of the week. Please, write correct number';
    } else {
        $collections = [
                'monday',
                'tuesday',
                'wednesday',
                'thursday',
                'friday',
                'saturday',
                'sunday'
        ];
        return $collections[$DayNumber - 1];
    }   
}

echo getDay(7);