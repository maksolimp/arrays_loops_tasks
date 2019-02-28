<?php
/*
12. Дано число $n = 1000.
Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится?
Посчитайте количество итераций, необходимых для этого (итерации — это количество проходов цикла), и запишите его в переменную $num.
 */

//for-loop
$n =1000;
$num = 0;
for (; ;){
    if ($n/2 <=50){
        echo "Division result: $n <br>";
        echo "Iteration count: $num <br>";
        break;
    };
  $n/=2;
  $num++;
};

//while-loop
$n=1000;
$num=0;
while (true) {
    if ($n/2 <= 50) {
        echo "Division result: $n <br>";
        echo "Iteration count: $num <br>";
        break;
    }
    $n = $n/2;
    $num = $num +1;
};