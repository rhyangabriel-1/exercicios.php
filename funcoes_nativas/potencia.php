
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label>Digite um numero:</label>
        <input type="text" name="numero">
        <label>Digite a potência a ser elevada:</label>
        <input type="text" name="potencia">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
<?php
    $numero = $_POST['numero'] ?? '';
    $potencia = $_POST['potencia'] ?? '';
    echo "Potência: ".pow($numero,$potencia);

?>

