<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    if ($email != "") {
        echo "<h1>Cadastro Realizado!</h1>";
        echo "<p>Email: $email</p>";
    } else {
        echo "<h1>Erro: Preencha todos os campos.</h1>";
    }
}   