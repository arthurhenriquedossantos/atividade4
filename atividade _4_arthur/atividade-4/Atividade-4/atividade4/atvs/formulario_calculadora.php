<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simples</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <h2>Calculadora</h2>
  <form id="formulario-calculadora">
    <label>Número 1:</label><br>
    <input type="number" name="num1" required><br><br>

    <label>Número 2:</label><br>
    <input type="number" name="num2" required><br><br>

    <label>Operação:</label><br>
    <select name="operacao" required>
      <option value="adicao">Adição</option>
      <option value="subtracao">Subtração</option>
      <option value="multiplicacao">Multiplicação</option>
      <option value="divisao">Divisão</option>
    </select><br><br>

    <button type="submit">Calcular</button>
  </form>

  <div id="resultado" style="margin-top: 20px;"></div>

  <script>
    document.getElementById('formulario-calculadora').addEventListener('submit', function(event) {
    event.preventDefault();

    const form = document.getElementById('formulario-calculadora');
    const dados = new URLSearchParams(new FormData(form)).toString();
    const url = `atvs/calcular.php?${dados}`;

    fetch(url)
        .then(resposta => resposta.text())
        .then(resultado => {
            document.getElementById('resultado').innerHTML = resultado;
            form.reset();
        })
        .catch(error => {
            document.getElementById('resultado').innerHTML = 'Erro no envio.';
            console.error(error);
        });
});
</script>
</body>
</html>

