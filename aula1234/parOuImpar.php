<?php
    function parOuImpar($numero) {
        if ($numero % 2 == 0) {
            return "O número $numero é par.";
        } else {
            return "O número $numero é ímpar.";
        }
    }
    $numero = $_POST['numero'];

    $resultado = parOuImpar($numero);
        echo "<h2> $resultado";
    



?>