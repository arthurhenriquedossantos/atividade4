<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
session_start(); // Inicia a sessão para armazenar os votos

// Inicializa os votos se não existirem
if (!isset($_SESSION['resultados'])) {
    $_SESSION['resultados'] = [
        "Verão" => 0,
        "Inverno" => 0,
        "Outono" => 0,
        "Primavera" => 0
    ];
}

// Coleta a resposta do formulário
$estacaoEscolhida = $_POST["est"];

// Incrementa o voto para a estação escolhida
$_SESSION['resultados'][$estacaoEscolhida]++;

// Exibe a estação escolhida pelo usuário e os resultados
echo "<h1>Resultado da Enquete</h1>";
echo "<p>Você escolheu: <strong>$estacaoEscolhida</strong></p>";

echo "<h2>Resumo dos Resultados</h2>";
foreach ($_SESSION['resultados'] as $estacao => $votos) {
    echo "<p>$estacao: $votos votos</p>";
}
}
?>