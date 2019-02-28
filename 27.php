<?php
/*
27. Создать генератор случайных таблиц.
Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице.
Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green').
Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols,
в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors.
В каждой ячейке должно находиться случайное число.
*/
$row = 4; //кол-во строк в таблице
$cols = 5; //кол-во столбцо в таблице
$colors = array('red','yellow','blue','gray','maroon','brown','green'); // список цветов в массиве
echo "<table style='border: 1px solid black;'>";

for ($i=0; $i<$row; $i++){
    echo "<br><tr style='border: 1px solid black;'>";
    for ($j=1; $j<$cols; $j++){
        $num = rand();
        echo "<td style='background-color:" . $colors[rand(0, 6)] ." '>$num</td>";
    }
    echo "</tr>";
}
echo "</table>";