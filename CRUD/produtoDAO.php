<?php

// show errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

// funcao que conecta no banco de dados
function conectaDB(){
    $conPDO = new PDO("mysql:host=localhost;dbname=meudb", "root", "aluno");

    // verificar conexao
    if(!$conPDO){
        echo "Erro na conexão!<br>";
        return null;
    }
    return $conPDO;
}

function insereProduto($produto, $categoria, $estoque){
    $conPDO = conectaDB();

    $sql = "INSERT INTO produtos (nome, categoria, estoque) VALUES ('$produto', '$categoria', $estoque)";

    $query = $conPDO->query($sql);

    if(!$query){
        echo 'Erro ao inserir dados na tabela';
        return false;
    }

    return true;
}

function deletaProduto($id) {
    $conPDO = conectaDB();

    $sql = "DELETE FROM produtos WHERE id=$id";

    $query = $conPDO->query($sql);

    if(!$query){
        echo 'Erro ao deletar dados na tabela';
        return false;
    }

    return true;
}

function alteraProduto($id, $produto, $categoria, $estoque) {
    $conPDO = conectaDB();

    $sql = "UPDATE PRODUTOS SET nome='$produto', categoria='$categoria', estoque=$estoque where id=$id";

    $query = $conPDO->query($sql);

    if(!$query){
        echo 'Erro ao deletar dados na tabela';
        return false;
    }

    return true;
}
?>