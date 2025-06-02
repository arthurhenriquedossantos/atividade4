<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inscrição na Newsletter</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Inscreva-se na Newsletter</h1>
    
    <form id="formnewsletter" method="POST">
        <label for="email">Seu E-mail:</label>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="Inscrever-se">
    </form>
    <div id="resultado" style="margin-top: 20px;"></div>
    <script>
    document.getElementById('formnewsletter').addEventListener('submit', function(event) {
        event.preventDefault(); 

        const form = document.getElementById('formnewsletter');
        const dados = new FormData(form);

        fetch('/atividade4/atvs/processa_newsletter.php', {
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
