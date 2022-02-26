<?php
    require "../../classes/manutencao.php";
    $manutencaos = new manutencao();
    if(isset($_GET['id'])){
        $pesquisa = $manutencaos->selecionamanutencaox($_GET['id'])->fetch(PDO::FETCH_ASSOC);
        // var_dump($pesquisa);
    }else {
        if(isset($_GET['edita'])){
            $edit = $manutencaos->edita($_GET['edita'],$_GET['manutencao'],$_GET['pecas'],$_GET['placa'],$_GET['estado_manutencao']);
            header("Location: manutencao.php");
        }else header("Location: manutencao.php");   
    }
?>
<body>
<a href="manutencao.php"><< voltar</a>

<center>
<h1>Editar <?= $pesquisa['manutencao']?></h1>
    <table>
    <form action="editar.php" method="GET">
        <input type="hidden" name="edita" value="<?= $pesquisa['id']?>">
        <tr>
                <td>manutencao</td>
                <td><textarea name="manutencao" cols="50" rows="5" required><?= $pesquisa['manutencao']?></textarea></td>
            </tr>
            <tr>
                <td>pecas</td>
                <td><textarea name="pecas"  cols="50" rows="5" required><?= $pesquisa['pecas']?></textarea></td>
            </tr>
        <tr>
            <td>placa</td>
            <td><input type="text" name="placa" placeholder="Digite a placa" value="<?= $pesquisa['placa']?>" required></td>
        </tr>
        <tr>
                <td>estado_manutencao</td>
                <td><textarea name="estado_manutencao" cols="50" rows="5"  required><?= $pesquisa['estado_manutencao']?></textarea></td>
            </tr>
        <tr>
        <td><input type="submit" value="enviar"></td></tr>
    </form>
    </table>
</center>
</body>