<?php
    function conecta($usuario, $senha){
    if ($usuario == "admin" && $senha == "1234"){
        header("location: painel.php");
        exit;
    } else {
        // Codifica a mensagem para evitar problemas com acentuação
        $msg = urlencode("Usuário ou senha inválidos!");
        header("Location: index.php?msg=$msg");
        exit;
    }
}
function nota($nota, $disciplina) {
    if ($nota >= 7) {
        return "Aprovado em $disciplina";
    } elseif ($nota >= 5 && $nota < 7) {
        return "Recuperação em $disciplina";
    } else {
        return "Reprovado em $disciplina";
    }
}
?>
