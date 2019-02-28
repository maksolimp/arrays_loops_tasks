<?php
/*
25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
найти максимальное и минимальное значение и поменять их местами.
 */
$arr = array();
$arr_size = rand(3,10);

for ($i=0; $i < $arr_size; $i++){
    array_push($arr,rand());
    echo "$i position in array is number: $arr[$i]<br>";
};
//print_r($arr);
// memorizing our max&min value in variables
$max_val = max($arr);
$min_val = min($arr);

//looking for max&min position in arr
$max_key = array_search($max_val, $arr);
$min_key = array_search($min_val, $arr);

echo "This is max value in the array: $max_val, position in array: $max_key<br>";
echo "This is min value in the array: $min_val, position in array: $min_key<br>";
echo "An array after reversing positions of min & max value <br>";

//changing their places
$arrayRandom[$max_key] = $min_val;
$arrayRandom[$min_key] = $max_val;

foreach ($arr as $key=>$item) {
    echo "$key position in array is number: $item<br>";
}