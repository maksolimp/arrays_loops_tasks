<?php
/*
16. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9.
С помощью цикла foreach и оператора if выведите на экран столбец элементов массива, как показано на картинке.
1, 2, 3
4, 5, 6
7, 8, 9
 */

$arr = [1,2,3,4,5,6,7,8,9];
$num = 0;
foreach ($arr as $item){
    echo $item;
    $num++;

    if ($num != 3){
        echo ", ";
    } elseif ($num == 3){
        echo "<br>";
        $num = 0;
    }
}