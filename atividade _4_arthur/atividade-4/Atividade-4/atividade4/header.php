<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Atividade 4</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <?php
        $formularios = [
          '1' => 'formulario_cadastro.php',
          '2' => 'formulario_login.php',
          '3' => 'formulario_pesquisa.php',
          '4' => 'formulario_contato.php',
          '5' => 'formulario_calculadora.php',
          '6' => 'formulario_feedback.php',
          '7' => 'formulario_registro.php',
          '8' => 'formulario_newsletter.php',
          '9' => 'formulario_quiz.php',
          '10' => 'formulario_enquete.php',
        ];

        foreach ($formularios as $key => $arquivo) {
          $nome = ucfirst(str_replace(['formulario_', '.php'], '', $arquivo));
          echo "<li class='nav-item'><a class='nav-link' href='index.php?pagina=$key'>$nome</a></li>";
        }
        ?>
      </ul>
    </div>
  </nav>
</header>

