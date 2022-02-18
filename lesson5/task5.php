<?php
/*
13)
Написать функцию которая на вход получает строку(пароль)
и проверяет сложность пароля по шкале Простой, Нормальный, Сложный

*/

function getSecurity(string $pass) : string
{
    $points = 0;
    for ($i = 0; $i < strlen($pass); $i++){
        if (str_contains("!@#$%^&*()_-+=", $pass[$i])){
            $points += 5;
        }
        if (mb_strtoupper($i) === $i){
            $points += 3;
        }
        if (is_numeric($i)){
            $points += 2;
        }    
    }
    $points += strlen($pass);
    switch ($points){
        case $points < 20:
            return 'Very weak';
        case $points < 25:
            return 'Weak';
        case $points < 35:
            return 'normal';
        case $points < 45;
            return 'Strong';
        default:
            return 'Very Strong';
        }
    }



//I tried to solve through Re - expressions, but it didn't work out very well.
//I'll leave it here, maybe someday I'll come back and make it =)
  
function getSecurityRegexTEST(string $pass) : string
{
    if ( preg_match('/^[\d]{1,8}$/', $pass) || preg_match('/^[a-zA-Z]{1,8}$/', $pass)){
        return 'weak';
    } elseif (preg_match('/^[\da-z A-Z]{4,}$/', $pass)) {
        return 'normal';
    } elseif ( preg_match('/^[\da-z A-Z!@№#$%^&*()_\-+=]{4,}$/', $pass)){
        return 'strong';
    } else {
        return 'Пароль должен состоять минимум из 4 символов';
    }
}
