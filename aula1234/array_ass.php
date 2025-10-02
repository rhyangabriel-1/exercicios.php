<?php
    $pessoa = ["nome"=> "João", "idade" => 30]; 
    echo "Olá $pessoa[nome], você tem $pessoa[idade] anos" ;

?>
<p> Olá aqui é um HTML:</P>
<?php
    $aluno =["nome"=> "Francisco", "idade" => 16, "nota" => 100];
    echo "Olá $aluno[nome], você tem $aluno[idade] anos e sua nota é $aluno[nota]";
    $ano = 2025 - 16;
    echo " você nasceu no ano de $ano <br>";

    $dataAtual = date('d/m/Y'); // Formato brasileiro com hora
    echo "<p> Hoje é $dataAtual <br>";

    $data_atual = date('d');
    echo "<p> Hoje,  $data_atual é dia nacional da habitação <br>";

    $hora_atual = date('H:i:s');
    echo "<p> São exatamente $hora_atual";


    //Olá francisco, você tem 16 anos e sua nota é 100

?>