<?php
/*
5. Дан массив $arr с ключами 'Коля', 'Вася', 'Петя' с элементами '200', '300', '400'.
С помощью цикла foreach выведите на экран столбец строк такого формата: 'Коля — зарплата 200 долларов.'.
 */

$arr = array(
    'Kolya' => '200',
    'Vasya'=>'300',
    'Petya'=>'400'
    );
foreach ($arr as $key => $value){
  echo $key . ' - salary is ' . $value . ' U.S. dollars.<br>';
};