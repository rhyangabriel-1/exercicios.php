<?php
    require_once "usuario.php";
    require_once "professor.php";
    require_once "aluno.php";

    $professor1 = new Professor("Carlos Silva", "carlos@escola.com", "Matemática");
    $professor2 = new Professor("Ronaldo Pinto", "ronaldo@escola.com", "Fisica");

    $aluno1 = new Aluno("Rhyan Gabriel", "rhyan@aluno.com", "2025A001");
    $aluno2 = new Aluno("Eugenio Ronaldo", "eugenio@aluno.com", "2025A002");

    echo "<h2>Professores<h2>";
    echo $professor1->exibirInfo() . "<br>";
    echo $professor1->darAula() . "<br><br>";

    echo $professor2->exibirInfo() . "<br>";
    echo $professor2->darAula() . "<br><br>";

    echo "<h2>Alunos<h2>";
    echo $aluno1->exibirInfo() . "<br>";
    echo $aluno1->estudar() . "<br><br>";

    echo $aluno2->exibirInfo() . "<br>";
    echo $aluno2->estudar() . "<br><br>";



?>