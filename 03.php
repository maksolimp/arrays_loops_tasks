<?php
/*
3. Дан массив с элементами 26, 17, 136, 12, 79, 15.
С помощью цикла foreach найдите сумму квадратов элементов этого массива.
Результат запишите переменную $result.
*/

$arr = array(26,17,136,12,79,15);
$result = 0;
foreach ($arr as $item){
    $sqrt = pow($item, 2);
    $result = $result + $sqrt;
    // $result = $result + $item*$item;
}
echo $result;
