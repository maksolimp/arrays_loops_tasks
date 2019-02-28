<?php
/*
26. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные индексы.
После вывести на экран элементы, которые больше ноля и у которых не парный индекс.
*/
$arr = array();
$arr_size = rand(3,10);

for ($i=0; $i <= $arr_size; $i++){
    array_push($arr,rand(1,100));
    echo "$i position in array is number: $arr[$i]<br>";
};

$mult = 1; //giving start-value for multiplication values in array

foreach ($arr as $key=>$elem){
    if ($elem > 0 && $key % 2 == 0){
        $mult *= $elem;
    };
};
echo "Multiplication of elements with an even key-value: " . $mult;

foreach ($arr as $key=>$elem){
    if ($elem > 0 && $key % 2 != 0){
        echo "<br> An odd key-values of the array: $elem";
    };
};
