<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align: center; margin-top: 100px; font-family: Arial, Helvetica, sans-serif; background-color: #ffffffff; color: #333; box-shadow: 0 0 10px rgba(0, 13, 196, 0.88); padding: 20px; border-radius: 8px; max-width: 400px; margin-left: auto; margin-right: auto;">
    <form action="login.php" method="post">
        Login <br>
        <input type="text" name="usuario"><br>
        Senha <br>
        <input type="password" name="senha"><br><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
        if (isset($_GET['msg'])){
            // Decodifica a mensagem para exibir corretamente os acentos
            $msg = urldecode($_GET['msg']);
            echo "<p style='color: red;'>$msg</p>";
        }
    ?>
</body>
</html>