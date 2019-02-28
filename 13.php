<?php
/*
13. Вывести таблицу умножения
 */

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