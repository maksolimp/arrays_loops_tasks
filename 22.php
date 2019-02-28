<?php
/*
22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while
xx<br>
xxxx<br>
xxxxxx<br>
xxxxxxxx<br>
xxxxxxxxxx<br>
 */
// for-loop
for($i=0; $i<5; $i++){

    if ($str == null){
        $str = 'xx';
        echo $str . "<br>";
    } else {
        $str .= 'xx';
        echo $str . "<br>";
    }
}

//while-loop
$k="";
while($k != 'xxxxxxxx'){
    $k .= 'xx';
    echo $k . "<br>";
}
