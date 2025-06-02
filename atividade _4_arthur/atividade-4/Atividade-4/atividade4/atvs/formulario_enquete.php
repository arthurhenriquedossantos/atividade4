<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Enquete </title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Qual a sua estação favorita?</h1>
    
    <form id="formenquente" method="POST">
        <input type="radio" id="est1" name="est" value="Verão" required>
        <label for="est1">Verão</label><br>
        
        <input type="radio" id="est2" name="est" value="Star Wars" required>
        <label for="est2">Inverno</label><br>
        
        <input type="radio" id="est3" name="est" value="Outono" required>
        <label for="est3">Outono</label><br>
        
        <input type="radio" id="est4" name="est" value="Primavera" required>
        <label for="est4">Primavera</label><br><br>
        
        <input type="submit" value="Votar">
    </form>
    <div id="resultado" style="margin-top: 20px;"></div>
    <script>
    document.getElementById('formenquente').addEventListener('submit', function(event) {
        event.preventDefault(); 

        const form = document.getElementById('formenquente');
        const dados = new FormData(form);

        fetch('/atividade4/atvs/processa_enquete.php', {
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
