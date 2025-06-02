<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $produto = $_POST['produto'];
    $avaliacao = $_POST['avaliacao'];
    $comentarios = $_POST['comentarios'];

    if ($produto != "" && $avaliacao != "" && $comentarios != "") {
        echo "<h1>Mensagem enviada com sucesso!</h1>";
        echo "<p>Nome do Produto: $produto</p>";
        echo "<p>Avaliacao: $avaliacao</p>";
        echo "<p>comentarios: $comentarios</p>";
    } else {
        echo "<h1>Erro: Preencha todos os campos.</h1>";
    }
}   