<?php
/*
18. Составьте массив дней недели.
С помощью цикла foreach выведите все дни недели, выходные дни следует вывести жирным.
 */

$arr = ['Mon','Tue','Wed','Thu','Fri','Sat','Sun'];

foreach ($arr as $day){
    if ($day === 'Sat' || $day === 'Sun'){
        echo "<b>$day</b><br>";
        continue;
    }
    echo $day . "<br>"; // = echo $day . "\n";
}
