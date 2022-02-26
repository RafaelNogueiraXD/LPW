<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercado</title>
</head>
<?php
    include "produtosql.php";
    $produtos = new produtoSQL();
    $prods = $produtos->selecionaTodos();
    if(isset($_GET['cadastrox'])){
        $add = $produtos->add($_GET['nome'],$_GET['fornece'],$_GET['custo'],$_GET['venda'],$_GET['estoque']);
        header('Location: index.php');
    }
?>
<body>
    <center>
    <h1>Adiciona</h1>
        <table>
            <form action="index.php" method="GET">
            <input type="hidden" name="cadastrox">
                <tr>
                    <td>Nome</td>
                    <td><input type="text" name="nome" id="nome"></td>
                </tr>
                <tr>
                    <td>Fornecedor</td>
                    <td><input type="text" name="fornece" id="fornece"></td>
                </tr>
                <tr>
                    <td>custo</td>
                    <td><input type="number" name="custo" id="custo"></td>
                </tr>
                <tr>
                    <td>venda</td>
                    <td><input type="number" name="venda" id="venda"></td>
                </tr>
                <tr>
                    <td>Estoque</td>
                    <td><input type="number" name="estoque" id="estoque"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Enviar"></td>
                </tr>
            </form>
        </table>
        <hr>
        <h1>Dados de Produtos</h1>
        <table border="1">
            <thead>
                <td>id</td>
                <td>Nome</td>
                <td>Fornecedor</td>
                <td>Custo</td>
                <td>Venda</td>
                <td>Estoque</td>
                <th>Ações</th>
            </thead>
            <tbody>
                <?php
                    while($linha = $prods->fetch(PDO::FETCH_ASSOC)){
                ?>
                    <tr>
                        <td><?= $linha['id']?></td>
                        <td><?= $linha['nome']?></td>
                        <td><?= $linha['fornecedor']?></td>
                        <td><?= $linha['custo']?></td>
                        <td><?= $linha['venda']?></td>
                        <td><?= $linha['estoque']?></td>
                        <td><a href="deleta.php?id=<?=$linha['id']?>">Deletar</a>
                        <a href="edita.php?id=<?=$linha['id']?>">Editar</a></td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        
    </center>
</body>
</html>