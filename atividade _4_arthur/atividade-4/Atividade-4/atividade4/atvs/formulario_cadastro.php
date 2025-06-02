<!DOCTYPE html>
<html lang="pt-BR">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cadastro</title> 
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Cadastro de Usuário</h1>

    <form id="formCadastro" action="/atividade4/atvs/processa_cadastro.php" method="POST">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="idade">Idade:</label><br>
        <input type="number" id="idade" name="idade" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>

    <div id="mensagem" style="margin-top: 20px;"></div>

    <script>
    document.getElementById('formCadastro').addEventListener('submit', function(event) {
        event.preventDefault(); 

        const form = document.getElementById('formCadastro');
        const dados = new FormData(form);

        fetch('/atividade4/atvs/processa_cadastro.php', {
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

