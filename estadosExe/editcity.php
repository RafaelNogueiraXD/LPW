<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    include_once 'estados.php';
    include_once 'cidades.php';;
    $estado = new estados();
    $cidades = new cidades();
    $estados = $estado->selecionaEstados();
    if(isset($_GET['id'])){
        $city = $cidades->cidadeX($_GET['id'])->fetch(PDO::FETCH_ASSOC);
        $estadoCidade = $estado->pesquisaEstadoId($city['estado'])->fetch(PDO::FETCH_ASSOC);

    }
    if(isset($_GET['nome'])){
        $addstate =  $cidades->edita($_GET['id'],$_GET['nome'],$_GET['estado']);
        header("Location: index.php");
      }
?>
<body>
<a href="index.php">Volta <<</a>
<center>
    <h2>Editar uma cidade</h2>
        <form action="editcity.php" method="GET">
        Selecione um estado
        <input type="text" name="nome" placeholder="Digite o novo nome" value="<?= $city['nome'] ?>">
        <input type="hidden" name="id" value="<?= $city['id']?>">
            <select name="estado">
                    <option value="<?= $estadoCidade['id']?>"><?= $estadoCidade['nome']?></option>

                    <?php
                        while($linha = $estados->fetch(PDO::FETCH_ASSOC)){
                    ?>
                        <option value="<?= $linha['id']?>"><?= $linha['nome']?></option>
    
                    <?php
                        }
                    ?>
            </select>
            <input type="submit" value="editar">
        </form>
</center>
</body>
</html>