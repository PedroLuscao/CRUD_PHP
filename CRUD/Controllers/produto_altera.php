<?php
    include_once "../produtoDAO.php";

    alteraProduto($_GET['id'], $_GET['produto'], $_GET['categoria'], $_GET['estoque']);

    header("Location: ../listagem.php");
?>