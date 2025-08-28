<?php
    function saudacao($nome){
        return "Bem-vindo, $nome! sua participação foi comfirmada!";
    }



    function banco_dados($db){
        return "Seu banco, $db, foi conectado com sucesso!";
    }


    function fiap($aluno1, $aluno2, $aluno3, $observacao){
        echo "<h3> lista de alunos com observações: </h3>";
        echo "<ul>";
        echo "<li> $aluno1. </li>";
        echo "<li> $aluno2. </li>";
        echo "<li> $aluno3. </li>";
        echo "</ul>";
        echo "<p> Observação: $observacao </p>";

    }

?>