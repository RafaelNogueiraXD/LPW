<?php

    require "../../classes/veiculo.php";
    $veiculos = new veiculo();

    if(isset($_GET['var'])){
            if($_GET['var'] == '')header("Location: veiculo.php");
            $nome  = $_GET['var'];
        $seleciona = $veiculos->pesquisaVeiculo($_GET['var']);
    }else{
        if(isset($_GET['tipo'])){
            if($_GET['tipo'] == '')header("Location: veiculo.php");
            $nome = $_GET['tipo'];
            $seleciona = $veiculos->pesquisaVeiculoTipo($_GET['tipo']);

        }else{
            if(isset($_GET['placa'])){
                if($_GET['placa'] == '')header("Location: veiculo.php");
                $nome = $_GET['placa'];
            $seleciona = $veiculos->pesquisaVeiculoPlaca($_GET['placa']);

            }else header("Location: veiculo.php");
            
        }

    }
?>
<body>
    <a href="veiculo.php"><< voltar</a>
  <center>
  <h1>Resultados da pesquisa <?= $nome ?></h1>
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
                            <a href="edita.php?placa=<?=$linha['placa']?>">Editar</a></td>
                        </tr>
                    <?php
                        }
                    ?>
            </tbody>
        </table>
  </center>
</body>