<?php
/*
21. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов, а не 5.
1<br>
22<br>
333<br>
4444<br>
...
 */

for($i = 1; $i <10; $i++){
    $str = "";
    for ($n=1; $n <= $i; $n++){
        $str .= $i;
    }
    echo $str . "<br>";
}