<?php

    require "../../classes/manutencao.php";
    $manutencaos = new manutencao();

    if(isset($_GET['var'])){
            if($_GET['var'] == '')header("Location: manutencao.php");
            $manutencao  = $_GET['var'];
        $seleciona = $manutencaos->pesquisamanutencao($_GET['var']);
    }else header("Location: manutencao.php");
?>
<body>
    <a href="manutencao.php"><< voltar</a>
  <center>
  <h1>Resultados da pesquisa <?= $manutencao ?></h1>
  <table border="1">
            <thead>
                <th>id</th>
                <th>manutencao</th>
                <th>peças</th>
                <th>placa</th>
                <th>Estado</th>
                <th>Ações</th>
            </thead>
            <tbody>
                <?php
                        while($linha = $seleciona->fetch(PDO::FETCH_ASSOC)){
                    ?>
                        <tr>
                            <td><?= $linha['id']?></td>
                            <td><?= $linha['manutencao']?></td>
                            <td><?= $linha['pecas']?></td>
                            <td><?= $linha['placa']?></td>
                            <td><?= $linha['estado_manutencao']?></td>

                            <td><a href="deleta.php?id=<?=$linha['id']?>">Deletar</a>
                            <a href="edita.php?id=<?=$linha['id']?>">Editar</a>
                            <a href="email.php?placa=<?=$linha['placa']?>">Email</a></td>
                        </tr>
                    <?php
                        }
                    ?>
            </tbody>
        </table>
  </center>
</body>