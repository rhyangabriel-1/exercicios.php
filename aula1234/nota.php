<?php
    function nota($nota) {
        if ($nota >= 7) {
            return "Aprovado";
        } elseif ($nota >= 5 && 7) {
            return "Recuperação";
        } else {
            return "Reprovado";
        }
    }
    
    $nota = $_POST['nota'];

    $resultado = nota($nota);
    echo "<h2>A sua nota é!!</h2>";
    echo "A nota digitados foram: $nota <br>";
    echo "Você foi (ou está): $resultado <br>";







?>