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
    include_once 'cidades.php';
    include_once 'pais.php';
    $estado = new estados();
    $cidades = new cidades();
    $estados = $estado->selecionaEstados();
    $pais = new pais();
    $pais = $pais->selecionaPais();
    if(isset($_GET['nome'])){
        $addstate =  $estado->edita($_GET['estado'],$_GET['nome'],$_GET['uf'],$_GET['pais']);
        header("Location: editstate.php");
      }
?>
<body>
<a href="index.php">Volta <<</a>
<center>
    <h2>Editar estado</h2>
        <form action="editstate.php" method="GET">
        Selecione um estado
            <select name="estado">
                    <?php
                        while($linha = $estados->fetch(PDO::FETCH_ASSOC)){
                    ?>
                        <option value="<?= $linha['id']?>"><?= $linha['nome']?></option>
    
                    <?php
                        }
                    ?>
            </select>
            <input type="text" name="nome" placeholder="Digite o novo nome">
            <input type="text" name="uf" placeholder="Digite a uf">
            <select name="pais">
                    <?php
                        while($linha = $pais->fetch(PDO::FETCH_ASSOC)){
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