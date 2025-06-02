<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Pesquisa</h1>
    <form action="processa_pesquisa.php" method="GET" id="formpesquisa">
        <label for="pesquisa">Digite o que deseja pesquisar:</label><br>
        <input type="text" id="pesquisa" name="pesquisa"><br><br>
        <input type="submit" value="Pesquisar">
    </form>
    <div id="mensagem"></div>
<script>
    document.getElementById('formpesquisa').addEventListener('submit', function(event) {
    event.preventDefault();

    const form = document.getElementById('formpesquisa');
    const dados = new URLSearchParams(new FormData(form)).toString();
    const url = `atvs/processa_pesquisa.php?${dados}`;

    fetch(url)
        .then(resposta => resposta.text())
        .then(resultado => {
            document.getElementById('mensagem').innerHTML = resultado;
            form.reset();
        })
        .catch(error => {
            document.getElementById('mensagem').innerHTML = 'Erro no envio.';
            console.error(error);
        });
});
</script>
</body>
</html>