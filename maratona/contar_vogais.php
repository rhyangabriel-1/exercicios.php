<?php
$str="computador";
$vogais=preg_match_all('/[aeiou]/i',$str);
echo "Número de vogais: $vogais";



?>