<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Contato</title>
</head>
<body>
    <h2>Contato</h2>
    <form id="formcontato" method="post">
        <label>Nome:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Assunto:</label><br>
        <input type="text" name="assunto" required><br><br>

        <label>Mensagem:</label><br>
        <textarea name="mensagem" rows="5" required></textarea><br><br>

        <button type="submit">Enviar</button>
    </form>

    <div id="resultado" style="margin-top: 20px;"></div>

    <script>
    document.getElementById('formcontato').addEventListener('submit', function(event) {
        event.preventDefault();

        const form = document.getElementById('formcontato');
        const dados = new FormData(form);

        fetch('/atividade4/atvs/processa_contato.php', {
            method: 'POST',
            body: dados
        })
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
