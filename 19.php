<?php
/*
19. Составьте массив дней недели.
С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом.
Текущий день должен храниться в переменной $day.
 */
$arr = ['Mon','Tue','Wed','Thu','Fri','Sat','Sun'];
$day = 'Thu';

foreach ($arr as $days){
    if ($days === $day){
        echo "<b>$day</b><br>";
        continue;
    }
    echo $days . "<br>"; // = echo $day . "\n";
}