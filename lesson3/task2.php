<?php
/*
2)
            Используя функцию rand() Записать в переменную число
            Далее если число четное - вывести 'odd' если нет 'even'
            Для решения задачи используйте оператор %
*/

$RandomNumber = rand();
if ( !$RandomNumber % 2 )
{
    echo "{$RandomNumber} -- odd";
} else {
    echo "{$RandomNumber} -- even";
}