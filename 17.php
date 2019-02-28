<?php
/*
17.Составьте массив месяцев.
С помощью цикла foreach выведите все месяцы, а текущий месяц выведите жирным.
Текущий месяц должен храниться в переменной $month.
 */

$arr = array('jan','feb','mar','apr','may','jun','jul','aug','sep','oct','nov','dec');
$month = 'February';
// if we need to check what in month is it right length,letter-case,etc.
$month = strtolower($month);
$month = substr($month,0,3);


foreach ($arr as $item){
    if ($item === $month){
        echo "<b>$month</b> ";
        continue;
    } else {
        echo $item . " ";
    }
}