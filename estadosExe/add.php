<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add</title>
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
 
    if(isset($_GET['nomeCidade'])){
      $addcity =  $cidades->add($_GET['nomeCidade'],$_GET['estado']);
      header("Location: add.php");
    }
    if(isset($_GET['nomeEstado'])){
      $addstate =  $estado->add($_GET['nomeEstado'],$_GET['uf'],$_GET['pais']);
      header("Location: add.php");
    }

?>
<body>
<a href="index.php">Volta <<</a>
    <center>
        <h2>Adicionar cidade</h2>
        <form action="add.php" method="GET">
            <input type="text" name="nomeCidade" placeholder="Digite o nome">
            <select name="estado">
                    <?php
                        while($linha = $estados->fetch(PDO::FETCH_ASSOC)){
                    ?>
                        <option value="<?= $linha['id']?>"><?= $linha['nome']?></option>
    
                    <?php
                        }
                    ?>
            </select>
            <input type="submit" value="Adicionar">
        </form>

        <h2>Adicionar estado</h2>
        <form action="add.php" method="GET">
            <input type="text" name="nomeEstado" placeholder="Digite o nome">
            <input type="text" name="uf" placeholder="Digite o uf">
            <select name="pais">
                    <?php
                        while($linha = $pais->fetch(PDO::FETCH_ASSOC)){
                    ?>
                        <option value="<?= $linha['id']?>"><?= $linha['nome']?></option>
    
                    <?php
                        }
                    ?>
            </select>
            <input type="submit" value="Adicionar">
        </form>
    </center>
</body>
</html>