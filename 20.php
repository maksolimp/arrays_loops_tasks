<?php
/*
20.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20 рядов, а не 5.
x<br>
xx<br>
xxx<br>
xxxx<br>
xxxxx<br>
 */

for($i=0; $i<20; $i++){
    if ($str == null){
        $str = 'x';
        echo $str . "<br>";
    } else {
        $str .= 'x';
        echo $str . "<br>";
    }
}
