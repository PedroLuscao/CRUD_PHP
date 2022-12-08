<?php
    include_once "../produtoDAO.php";

    insereProduto($_GET['produto'], $_GET['categoria'], $_GET['estoque']);

    header("Location: ../listagem.php");
?>