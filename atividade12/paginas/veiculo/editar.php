<?php
    require "../../classes/veiculo.php";
    $veiculos = new veiculo();
    if(isset($_GET['placa'])){
        $pesquisa = $veiculos->selecionaVeiculox($_GET['placa'])->fetch(PDO::FETCH_ASSOC);
        // var_dump($pesquisa);
    }else {
        if(isset($_GET['edita'])){
            $edit = $veiculos->edita($_GET['edita'],$_GET['marca'],$_GET['cor'],$_GET['defeito'],$_GET['tipo']);
            header("Location: veiculo.php");
        }else header("Location: veiculo.php");   
    }
?>
<body>
<a href="veiculo.php"><< voltar</a>

<center>
<h1>Editar <?= $pesquisa['placa']?></h1>
    <table>
    <form action="editar.php" method="GET">
        <input type="hidden" name="edita" value="<?= $pesquisa['placa']?>">
        <tr>
            <td>marca</td>
            <td><input type="text" name="marca" placeholder="Digite a marca" value="<?= $pesquisa['marca']?>" required></td>
        </tr>
        <tr>
            <td>cor</td>
            <td><input type="text" name="cor" placeholder="Digite a cor" value="<?= $pesquisa['Cor']?>" required></td>
        </tr>
        <tr>
            <td>defeito</td>
            <td><textarea name="defeito"  cols="30" rows="10"><?= $pesquisa['Defeito']?></textarea></td>
        </tr>
        <tr>
            <td>tipo</td>
            <td><select name="tipo" required>
                <option value="<?= $pesquisa['tipo']?>"><?= $pesquisa['tipo']?></option>
                <option value="moto">moto</option>
                <option value="carro">carro</option>
                <option value="caminhão">caminhão</option>
            </select></td>
        </tr>
        <tr>
        <td><input type="submit" value="enviar"></td></tr>
    </form>
    </table>
</center>
</body>