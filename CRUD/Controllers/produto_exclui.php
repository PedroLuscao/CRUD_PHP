<?php
    include_once "../produtoDAO.php";

    deletaProduto($_GET['id']);

    header("Location: ../listagem.php");
?>