<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saguão</title>
</head>
<?php
    require "../../classes/veiculo.php";
    $veiculos = new veiculo();
    if(isset($_GET['prop'])){
        if($_GET['prop'] == "") header("Location: inicial.php");
        $select = $veiculos->selecionaVeiculoporProprietario($_GET['prop']);
    }

?>
<body>
    <center>
        <h1>Bem-Vindo a oficina</h1>
        <button>
            <a href="../veiculo/veiculo.php">Ver Veiculos</a>
        </button>
        <button>
            <a href="../prop/proprietario.php">Ver proprietários</a>
        </button>
        <button>
            <a href="../manutencao/manutencao.php">Veiculos em manutenção</a>
        </button><hr>
        <form action="inicial.php" method="$_GET">
            buscar Veiculo por proprietário
            <input type="text" name="prop" placeholder="digite o cpf do proprietario">
            <input type="submit">
        </form>
        <?php
            if(isset($select)){
        // var_dump($select);

                ?>
                <table>
                    <th>Placa</th>
                    <th>Marca</th>
                    <th>Nome</th>
                    <th>Cpf</th>
                    <tbody>
                    <?php
                        while($linha = $select->fetch(PDO::FETCH_ASSOC)){
                    ?>
                        <tr>
                            <td><?= $linha['placa']?></td>
                            <td><?= $linha['marca']?></td>
                            <td><?= $linha['nome']?></td>
                            <td><?= $linha['cpf']?></td>
                            <td><a href="deleta.php?placa=<?=$linha['placa']?>">Deletar</a>
                            <a href="editar.php?placa=<?=$linha['placa']?>">Editar</a></td>
                        </tr>
                    <?php
                        }
                    ?>
                    </tbody>
                </table>
        <?php
            }
        ?>
    </center>
</body>
</html>