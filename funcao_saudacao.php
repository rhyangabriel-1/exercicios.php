<?php
    // Está é uma função 
    // Inicio da função saudação
    function saudacao($nome) {
    return "Olá, $nome!<br> ";
    }
    // Fim da função saudação

    echo saudacao("Rhyan");
    echo ("--------------------<br>");

    function nomeDaFuncao($parametro1, $parametro2) {
        //código que será executado
        $resultado = $parametro1 + $parametro2;
        return $resultado; // Retorna o valor
    }
    //chamando a função
    $soma = nomeDaFuncao(5, 10);
    echo "O resultado é:" . $soma;
?>
