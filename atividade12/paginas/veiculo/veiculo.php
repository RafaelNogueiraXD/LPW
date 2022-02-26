
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Veiculo</title>
</head>
<?php

    require "../../classes/veiculo.php";
    $veiculos = new veiculo();
    $seleciona = $veiculos->selecionaVeiculos();

?>
<body>
<a href="../inicial/inicial.php"><< voltar</a> <br>
<button><a href="cadastrar.php">Cadastrar novo</a></button>
    <center>
        <h2>Campos de busca</h2>
        <table border="1">
                <tr>    
                    <td>
                    Pesquisa por todos os Campos</td>
                    <td>
                        <form action="pesquisa.php">
                            <input type="text" name="var" placeholder="digite algo..." required> 
                            <input type="submit" value="enviar">
                       
                        </form>
                    </td>
                </tr>
                <tr>    
                    <td>
                    Pesquisa por Tipo</td>
                    <td>
                        <form action="pesquisa.php">
                            <select name="tipo" id="" required>
                                <option value="moto">moto</option>
                                <option value="carro">carro</option>
                                <option value="caminhao">caminhao</option>
                            </select>
                            <input type="submit" value="enviar">
                        </form>
                    </td>
                </tr>
                <tr>    
                    <td>
                    Pesquisa por Placa</td>
                    <td>
                        <form action="pesquisa.php">
                            <input type="text" name="placa" placeholder="digite a placa" required>
                            <input type="submit" value="enviar">
                        </form>
                    </td>
                </tr>
        </table>
        <h1>Veiculos</h1>
        <table border="1">
            <thead>
                <th>Placa</th>
                <th>Marca</th>
                <th>Cor</th>
                <th>Defeito</th>
                <th>Tipo</th>
                <th>Ações</th>
            </thead>
            <tbody>
                <?php
                        while($linha = $seleciona->fetch(PDO::FETCH_ASSOC)){
                    ?>
                        <tr>
                            <td><?= $linha['placa']?></td>
                            <td><?= $linha['marca']?></td>
                            <td><?= $linha['Cor']?></td>
                            <td><?= $linha['Defeito']?></td>
                            <td><?= $linha['tipo']?></td>
                            <td><a href="deleta.php?placa=<?=$linha['placa']?>">Deletar</a>
                            <a href="editar.php?placa=<?=$linha['placa']?>">Editar</a></td>
                        </tr>
                    <?php
                        }
                    ?>
            </tbody>
        </table>
    </center>
</body>
</html>