<?php
/*
9)
        Написать функцию которая принимает на первым аргументом строку, а вторым символ.
        В случае если искомые символ присуствует в строке то заменить его встроке
        на такой же но в верхнем регистре
*/
function SwapWorld(string $str,mixed $wrld) :string
{
    return str_replace($wrld, mb_strtoupper($wrld), $str);
}
