<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $evento = $_POST['evento'] ?? '';
    
    if ($nome != "" && $email != "" && $evento != "") {
        echo "<h1>Mensagem enviada com sucesso!</h1>";
        echo "<p>Nome: $nome</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Evento: $evento</p>";
    } else {
        echo "<h1>Erro: Preencha todos os campos.</h1>";
    }
}
?>
