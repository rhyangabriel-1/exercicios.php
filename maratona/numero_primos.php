<?php
for($n =2; $n <= 50; $n++){
    $primo = true;
    for($i=2; $i<=sqrt($n); $i++){
        if($n % $i == 0){
            $primo = false;
            break;
        }
    }
    if($primo) echo "$n <br>";
}


?>