<?php
/*
8. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9.
С помощью цикла foreach создайте строку '123456789'.
 */

$arr = [1,2,3,4,5,6,7,8,9];
$str ='';
foreach ($arr as $item){
    $str .= $item;

};
echo $str . '<br>';

// varinat wih using '-' in string
$another_arr = [1,2,3,4,5,6,7,8,9];
$line = '-' ;
foreach ($another_arr as $item) {
    $line .= $item . '-';
}
echo $line . '<br>';

//without foreach-loop:
$arr = [1,2,3,4,5,6,7,8,9];
$string = implode('',$arr);
echo $string;
