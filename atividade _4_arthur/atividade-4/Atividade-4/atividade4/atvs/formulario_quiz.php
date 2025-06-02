<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Quiz</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Quiz</h1>
    
    <form id="formquiz" method="POST">
        <p>1. Qual é a capital do Brasil?</p>
        <input type="radio" id="q1a" name="q1" value="a"> <label for="q1a">São Paulo</label><br>
        <input type="radio" id="q1b" name="q1" value="b"> <label for="q1b">Rio de Janeiro</label><br>
        <input type="radio" id="q1c" name="q1" value="c"> <label for="q1c">Brasília</label><br>
        <input type="radio" id="q1d" name="q1" value="d"> <label for="q1d">Salvador</label><br>
        <input type="radio" id="q1e" name="q1" value="e"> <label for="q1e">Belo Horizonte</label><br>
        <input type="radio" id="q1f" name="q1" value="f"> <label for="q1f">Belém</label><br>
        <input type="radio" id="q1g" name="q1" value="g"> <label for="q1g">Porto Alegre</label><br>
        
        <p>2. Qual é a maior time do mundo?</p>
        <input type="radio" id="q2a" name="q2" value="a"> <label for="q2a">Cruzeiro</label><br>
        <input type="radio" id="q2b" name="q2" value="b"> <label for="q2b">Flamengo</label><br>
        <input type="radio" id="q2c" name="q2" value="c"> <label for="q2c">Palmeiras</label><br>
        <input type="radio" id="q2d" name="q2" value="d"> <label for="q2d">São Paulo</label><br>
        <input type="radio" id="q2e" name="q2" value="e"> <label for="q2e">Real Madrid</label><br>
        <input type="radio" id="q2f" name="q2" value="f"> <label for="q2f">Barcelona</label><br>
        <input type="radio" id="q2g" name="q2" value="g"> <label for="q2g">Manchester City</label><br>
        <input type="radio" id="q2h" name="q2" value="h"> <label for="q2h">Liverpool</label><br>
        <input type="radio" id="q2i" name="q2" value="i"> <label for="q2i">Paysando</label><br>
        
        <p>3. Em que ano o Brasil foi descoberto?</p>
        <input type="radio" id="q3a" name="q3" value="a"> <label for="q3a">1600</label><br>
        <input type="radio" id="q3b" name="q3" value="b"> <label for="q3b">1540</label><br>
        <input type="radio" id="q3c" name="q3" value="c"> <label for="q3c">1499</label><br>
        <input type="radio" id="q3d" name="q3" value="d"> <label for="q3d">1550</label><br>
        <input type="radio" id="q3e" name="q3" value="e"> <label for="q3e">1501</label><br>
        <input type="radio" id="q3f" name="q3" value="f"> <label for="q3f">1500</label><br><br>
        
        <input type="submit" value="Enviar Respostas">
    </form>
    <div id="resultado" style="margin-top: 20px;"></div>
    <script>
    document.getElementById('formquiz').addEventListener('submit', function(event) {
        event.preventDefault(); 

        const form = document.getElementById('formquiz');
        const dados = new FormData(form);

        fetch('/atividade4/atvs/processa_quiz.php', {
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
