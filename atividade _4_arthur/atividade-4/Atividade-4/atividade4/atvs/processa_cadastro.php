<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $idade = $_POST['idade'] ?? '';

    // Aqui você poderia salvar no banco de dados. Por agora, só simula:
    if ($nome && $email && $idade) {
        echo "<span style='color: green;'>Usuário '$nome' <br>Email: $email<br>Idade: $idade <br>Cadastrado com sucesso!</span>";
    } 
}
?>