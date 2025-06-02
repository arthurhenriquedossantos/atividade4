<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Feedback do Produto</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Feedback do Produto</h1>
    
    <form id="formfeed" method="POST">
        <label for="produto">Nome do Produto:</label>
        <input type="text" id="produto" name="produto" required><br><br>
        
        <label for="avaliacao">Avaliação:</label>
        <select id="avaliacao" name="avaliacao" required>
            <option value="1">1 Estrela</option>
            <option value="2">2 Estrelas</option>
            <option value="3">3 Estrelas</option>
            <option value="4">4 Estrelas</option>
            <option value="5">5 Estrelas</option>
        </select><br><br>
        
        <label for="comentarios">Comentários:</label><br>
        <textarea id="comentarios" name="comentarios" rows="4" cols="50" required></textarea><br><br>
        
        <input type="submit" value="Enviar Feedback">
    </form>
    <div id="resultado" style="margin-top: 20px;"></div>
    <script>
    document.getElementById('formfeed').addEventListener('submit', function(event) {
        event.preventDefault(); 

        const form = document.getElementById('formfeed');
        const dados = new FormData(form);

        fetch('/atividade4/atvs/processa_feedback.php', {
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
