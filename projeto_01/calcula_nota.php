<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcula Nota</title>
</head>
<body style="text-align: center; margin-top: 100px; font-family: Arial, Helvetica, sans-serif; background-color: #f0f0f0; color: #000000ff; box-shadow: 0 0 10px rgba(0, 13, 196, 0.88); padding: 20px; border-radius: 8px; max-width: 400px; margin-left: auto; margin-right: auto; ">
    <h2 style="color: blue;">Informe a Diciplina e a nota</h2>
    <form action="nota.php" method="post">
        <label for="nota">Nota:</label>
        <input type="number" id="nota" name="nota" step="any" required><br><br>
        <label for="disciplina">Diciplina:</label>
        <input type="text" id="disciplina" name="disciplina" required><br><br>    
    
        <button type="submit">Resultado</button>
    </form>
</body>
</html>