<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Atividade 4</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include 'header.php'; ?>

<div class="container-fluid my-5">
  <?php
  $pagina = isset($_GET['pagina']) ? htmlspecialchars($_GET['pagina']) : null;

  $formularios = [
    '1' => 'atvs/formulario_cadastro.php',
    '2' => 'atvs/formulario_login.php',
    '3' => 'atvs/formulario_pesquisa.php',
    '4' => 'atvs/formulario_contato.php',
    '5' => 'atvs/formulario_calculadora.php',
    '6' => 'atvs/formulario_feedback.php',
    '7' => 'atvs/formulario_registro.php',
    '8' => 'atvs/formulario_newsletter.php',
    '9' => 'atvs/formulario_quiz.php',
    '10' => 'atvs/formulario_enquete.php',
  ];

  if ($pagina && array_key_exists($pagina, $formularios)) {
    $caminho = $formularios[$pagina];

    if (file_exists($caminho)) {
      include $caminho;
    } else {
      echo "<div class='alert alert-danger'>Erro: Arquivo não encontrado em <strong>$caminho</strong></div>";
    }
  } else {
    echo "<div class='alert alert-info'>Clique no menus e escolha a atividade correspondente.</div>";
  }
  ?>
</div>

<?php include 'footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
