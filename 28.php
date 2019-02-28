<?php
/*
28. Вывести таблицу умножения с помощью двух циклов for.
 */

echo "See task 13. It is equivalent<br>";
for ($i = 1; $i <= 10;$i++){
    echo "Таблица умножения на $i:<br>";

    for ($multiplier = 1; $multiplier<=10; $multiplier++){
        $result = $i*$multiplier;
        echo "$i * $multiplier = $result <br>";
        if ($multiplier>9){
            echo '<br>';
        };
    };
};