<?php
    $a=0;
    $b=1;
    for($i=1; $i<=10; $i++){
        echo "$a<br> ";
        $temp = $a + $b;
        $a = $b;
        $b = $temp;
    }


?>