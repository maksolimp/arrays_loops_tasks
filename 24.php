<?php
/*
24. Вам нужно разработать программу, которая считала бы количество вхождений
какой­нибудь выбранной вами цифры в выбранном вами числе.
Например: цифра 5 в числе 442158755745 встречается 4 раза.
 */
$user_digit = 5;
$user_num = 442158755745;
$count = 0;

$arr_num = str_split($user_num);
foreach ($arr_num as $key){
    if ($key == $user_digit){
        $count++;
    }
};
echo $count;

