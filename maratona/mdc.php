<?php
$a=48; $b=18;
while($b != 0){
    $temp = $b;
    $b = $a % $b;
    $a = $temp;
}
echo "MDC = $a";


?>
