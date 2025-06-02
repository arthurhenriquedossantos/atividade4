<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $respostas_corretas = [
        "q1" => "c", 
        "q2" => "a", 
        "q3" => "f" 
    ];
    $respostas_usuario = [
        "q1" => $_POST["q1"],
        "q2" => $_POST["q2"],
        "q3" => $_POST["q3"]
    ];

    $pontos = 0;
    foreach ($respostas_usuario as $pergunta => $resposta) {
        if ($resposta == $respostas_corretas[$pergunta]) {
            $pontos++;
        }
    }
    echo "<h1>Resultado do Quiz</h1>";
    echo "<p>Sua pontuação é: $pontos de 3</p>";

    if ($pontos == 3) {
    echo "<p>Parabéns! Você acertou todas as perguntas.</p>";
    } elseif ($pontos == 2) {
    echo "<p>Bom trabalho! Você acertou 2 perguntas.</p>";
    } elseif ($pontos == 1) {
    echo "<p>Você acertou 1 pergunta. Tente novamente!</p>";
    } else {
    echo "<p>Infelizmente, você não acertou nenhuma pergunta. Tente de novo!</p>";
    }
}
?>