<?php
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $pesquisa = $_GET['pesquisa'] ?? '';

        // Aqui você poderia salvar no banco de dados. Por agora, só simula:
        if ($pesquisa) {
            echo "<span style='color: red;'>'$pesquisa'</span>";
        } 
    }
?>