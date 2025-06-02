<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Registro de Participantes</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Registro de Participantes</h1>
    
    <form id="formregistro" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="evento">Evento de Interesse:</label>
        <select id="evento" name="evento" required>
            <option value="Cruzeiro x Vasco">Cruzeiro x Vasco</option>
            <option value="Cruzeiro x Vila Nova">Cruzeiro x Vila Nova</option>
            <option value="Cruzeiro x Flamengo">Cruzeiro x Flamengo</option>
        </select><br><br>
        <input type="submit" value="Registrar Participante">
    </form>
    <div id="resultado" style="margin-top: 20px;"></div>
    <script>
    document.getElementById('formregistro').addEventListener('submit', function(event) {
        event.preventDefault(); 

        const form = document.getElementById('formregistro');
        const dados = new FormData(form);

        fetch('/atividade4/atvs/processa_registro.php', {
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
