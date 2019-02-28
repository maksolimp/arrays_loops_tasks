<?php
/*
4. Дан массив $arr.
С помощью первого цикла foreach выведите на экран столбец ключей, c помощью второго — столбец элементов.
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
 */

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

echo 'This is key-list:' . '<br>';
foreach ($arr as $key => $elem){
  echo  $key . '<br>';
};

echo '<hr>' . 'This is element-list:' . '<br>';
foreach ($arr as $key => $elem){
    echo $elem . '<br>';
};
