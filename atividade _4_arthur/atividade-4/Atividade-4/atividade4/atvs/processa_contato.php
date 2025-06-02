<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    if ($nome != "" && $email != "" && $assunto != "" && $mensagem != "") {
        echo "<h1>Mensagem enviada com sucesso!</h1>";
        echo "<p>Nome: $nome</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Assunto: $assunto</p>";
        echo "<p>Mensagem: $mensagem</p>";
    } else {
        echo "<h1>Erro: Preencha todos os campos.</h1>";
    }
}
?>

