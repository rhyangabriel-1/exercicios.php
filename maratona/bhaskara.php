<?php
$a = 1;
$b = -3;
$c = 2;
$delta = $b*$b - 4*$a*$c;
if($delta < 0){
    echo "Não existe raiz real";
    }elseif($delta == 0){
        $x = -$b/(2*$a);
        echo "Raiz unica: $x";
    }else{
        $x1 = (-$b + sqrt($delta)) / (2*$a);
        $x2 = (-$b - sqrt($delta)) / (2*$a);
        echo "raízes: $x1 e $x2";
    }


?>