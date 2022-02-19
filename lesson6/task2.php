<?php
/*
16)
Основываясь на #1 задании отсортировать массивы по определенным критериям
(критерии выбирайте сами)
Я буду сортировать 2 и 3 массивы

        ·    По максимальному значению (от минимального до максимального)
        ·    По алфавитному порядку(ключей)
        ·    По минимальному значению
*/
$CimemaSeats  = ['reserved' => 1,
                      'free' => 4,
                      'occupied' => 7,
                      'vip' => 6];
    
$Marks = ['math' => 11,
          'chemistry' => 10,
          'english' => 8,
          'ukrainian_language' => 9];

//По максимальному
asort($CimemaSeats);
asort($Marks);
print_r($CimemaSeats);
echo '<br>';
print_r($Marks);
echo '<br>';
echo '<br>';

//По алфавиту(ключи)
ksort($CimemaSeats);
ksort($Marks);
print_r($CimemaSeats);
echo '<br>';
print_r($Marks);
echo '<br>';
echo '<br>';

//По минимальному 
arsort($CimemaSeats);
arsort($Marks);
print_r($CimemaSeats);
echo '<br>';
print_r($Marks);
