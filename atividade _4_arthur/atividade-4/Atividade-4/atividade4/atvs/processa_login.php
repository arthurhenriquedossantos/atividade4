<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $senha = $_POST['senha'] ?? '';

    // Aqui você poderia salvar no banco de dados. Por agora, só simula:
    if ($nome && $senha) {
        echo "<span style='color: green;'>Usuário '$nome' <br>Senha: $senha <br>Bem vindo Novamente $nome!</span>";
    } 
}
?>