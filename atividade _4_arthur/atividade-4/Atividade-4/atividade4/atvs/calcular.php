<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $numero1 = $_POST["num1"];
    $numero2 = $_POST["num2"];
    $operacao = $_POST["operacao"];

    switch ($operacao) {
        case "adicao":
            $resultado = $numero1 + $numero2;
            break;
        case "subtracao":
            $resultado = $numero1 - $numero2;
            break;
        case "multiplicacao":
            $resultado = $numero1 * $numero2;
            break;
        case "divisao":
            if ($numero2 != 0) {
                $resultado = $numero1 / $numero2;
            } else {
                $resultado = "Erro: Divisão por zero";
            }
            break;
        default:
            $resultado = "Operação inválida";
            break;
    }

    echo $resultado;
}
?>


