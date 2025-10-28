<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RIFA</title>
    <link rel="stylesheet" href="rifa.css">
</head>
<body>
    <header>
        <form method ="POST" >
            <label for="nome">PREMIO:</label>
            <input type="text" id="text" name="premio" required>
            <label for="nome">Rifa minima:</label>
            <input type="text" id="text" name="numminimo" required>
            <label for="nome">Rifa maxima:</label>
            <input type="text" id="text" name="nummaximo" required>
            <button type="submit">Sortear</button>
        </form>
    </header>
</body>
</html>
<?php
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $numminimo = $_POST['numminimo'];
        $nummaximo = $_POST['nummaximo'];
        if ($nummaximo > $numminimo) {
            $numero = rand($numminimo, $nummaximo);
        }
        echo "<div class='sorteio'>";
        echo "<h3>O premio sorteado foi:</h3> " . $_POST['premio'] . "<br><br>";
        echo "<h3>A rifa premiada foi:</h3> $numero <br><br>";

        date_default_timezone_set("America/Sao_Paulo");
        echo "<h3>Data atual:</h3> " . date("d/m/Y") . "<br>";
        echo "<h3>Hora atual:</h3> " . date("H:i:s") . "<br>";

        echo "<h2> Os ganhadores são</h2> ";
        
        $arquivo = "ganhadores.txt";

        // salva o novo ganhador no arquivo
        $linha = $_POST['premio'] . " - Rifa nº " . $numero . " - " . date("d/m/Y H:i:s") . "\n";
        file_put_contents($arquivo, $linha );

        // lê e exibe todos os ganhadores
        $ganhadores = file($arquivo);
        echo "<ul>";
        foreach ($ganhadores as $g) {
            echo "<li>$g</li>";
        }
        echo "</ul>";
        echo "</div>";
    }

?>