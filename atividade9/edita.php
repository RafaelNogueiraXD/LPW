<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editando</title>
</head>
<?php

include "produtosql.php";
$produtos = new produtoSQL();

if(isset($_GET['editando'])){
    $produtos->edita($_GET['editando'],$_GET['nome'],$_GET['fornece'],$_GET['custo'],$_GET['venda'],$_GET['estoque']);  
}

if($_GET['id']){
     $produto = $produtos->pegaProd($_GET['id'])->fetch(PDO::FETCH_ASSOC);  
}else{
    header("Location: index.php");
}

?>
<body>
    <center>
        <h2>Editando <?= $produto['nome']?></h2>
        <table>
            <form action="edita.php">
            <input type="hidden" name="editando" value="<?= $produto['id']?>">
                <tr>
                    <td>Nome</td>
                    <td><input type="text" name="nome" id="nome" value="<?= $produto['nome']?>"></td>
                </tr>
                <tr>
                    <td>Fornecedor</td>
                    <td><input type="text" name="fornece" id="fornece" value="<?= $produto['fornecedor']?>"></td>
                </tr>
                <tr>
                    <td>custo</td>
                    <td><input type="number" name="custo" id="custo" value="<?= $produto['custo']?>"></td>
                </tr>
                <tr>
                    <td>venda</td>
                    <td><input value="<?= $produto['venda']?>" type="number" name="venda" id="venda"></td>
                </tr>
                <tr>
                    <td>Estoque</td>
                    <td><input type="number" name="estoque" value="<?= $produto['estoque']?>" id="estoque"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Enviar"></td>
                </tr>
            </form>
        </table>
    <a href="index.php">Voltar</a>
    </center>
</body>
</html>