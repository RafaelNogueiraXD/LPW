
<?php

    require "../../classes/veiculo.php";
    $veiculos = new veiculo();
    if(isset($_GET['cadastra'])){
        $add = $veiculos->add($_GET['placa'],$_GET['marca'],$_GET['cor'],$_GET['defeito'],$_GET['tipo']);
        $addr = $veiculos->addRelacao($_GET['placa'],$_GET['cpf']);
        header("Location: veiculo.php");
    }
?>

<body>
<a href="veiculo.php"><< voltar</a>

    <center>
    <h1>cadastro</h1>
        <table>
        <form action="cadastrar.php" method="GET">
            <input type="hidden" name="cadastra" value="1">
            <tr>
                <td>Placa</td>
                <td><input type="text" name="placa" placeholder="Digite a placa" required></td>
            </tr>
            <tr>
                <td>marca</td>
                <td><input type="text" name="marca" placeholder="Digite a marca" required></td>
            </tr>
            <tr>
                <td>cor</td>
                <td><input type="text" name="cor" placeholder="Digite a cor" required></td>
            </tr>
            <tr>
                <td>defeito</td>
                <td><input type="text" name="defeito" placeholder="Digite a defeito" required></td>
            </tr>
            <tr>
                <td>tipo</td>
                <td><select name="tipo" required>
                    <option value="moto">moto</option>
                    <option value="carro">carro</option>
                    <option value="caminhão">caminhão</option>
                </select></td>
            </tr>
            <tr>
                <td>Cpf do dono</td>
                <td><input type="text" name="cpf" placeholder="Digite o cpf" required></td>
            </tr>
            <tr>
            <td><input type="submit" value="enviar"></td></tr>
        </form>
        </table>
    </center>
</body>
