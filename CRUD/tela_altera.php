<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadatro Pessoas</title>
    <link rel="stylesheet" href="style_cadastro.css">
</head>
<body>
    <div class="cadastro">
        <form action="./Controllers/produto_altera.php" method="get">
            <label for="nome">Produto: </label>
            <input type="text" name="produto" value="<?php echo $_GET['produto'] ?>">
            <label for="idade">Categoria: </label>
            <input type="text" name="categoria" value="<?php echo $_GET['categoria'] ?>">
            <label for="idade">Estoque: </label>
            <input type="number" name="estoque" value="<?php echo $_GET['estoque'] ?>">
            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
            <input type="submit" value="Alterar">
        </form>
    </div>
</body>
</html>