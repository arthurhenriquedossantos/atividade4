<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Login do Usuário</h1>
    <form action="login.php" method="POST" id="formLogin">
        <label for="nome">Usuário:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="senha">Senha:</label><br>
        <input type="passoword" id="senha" name="senha" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>
    <div id="mensagem" style="margin-top: 20px;"></div>

    <script>
    document.getElementById('formLogin').addEventListener('submit', function(event) {
        event.preventDefault(); 

        const form = document.getElementById('formLogin');
        const dados = new FormData(form);

        fetch('/atividade4/atvs/processa_login.php', {
            method: 'POST',
            body: dados
        })
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