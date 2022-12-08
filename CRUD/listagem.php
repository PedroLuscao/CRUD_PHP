<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
    <link rel="stylesheet" href="style_tabela.css">
</head>
<body>
    <table>
        <tr>
            <th>Produto</th>
            <th>Categoria</th>
            <th>Estoque</th>
            <th></th>
            <th></th>
        </tr>

        <!-- Listar -->
        <?php
            $conPDO = new PDO("mysql:host=localhost;dbname=meudb", "root", "aluno");
            $query = $conPDO->query("SELECT * FROM produtos"); 

            $dados = $query -> fetchALL(PDO::FETCH_ASSOC);

            if(sizeof($dados)==0){
                echo '<p>Nenhum produto cadastrado!</p>';
            }

            foreach($dados as $produto){
        ?>
        <tr>
            <td><?php echo $produto['nome'] ?></td>
            <td><?php echo $produto['categoria'] ?></td>
            <td><?php echo $produto['estoque'] ?></td>
            <td><a href="tela_altera.php?produto=<?php echo $produto['nome'].'&categoria='.$produto['categoria'].'&estoque='.$produto['estoque'].'&id='.$produto['id'] ?>">Editar</a></td>
            <td><a href="./Controllers/produto_exclui.php?id=<?php echo $produto['id'] ?>">Excluir</a></td>
        </tr>
        <?php         
            }
        ?>
    </table>

    <a href="tela_cadastro.php"><button>Adiconar</button></a>
    
</body>
</html>