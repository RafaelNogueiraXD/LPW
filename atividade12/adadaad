<?php

    require "../../classes/proprietario.php";
    $proprietarios = new proprietario();

    if(isset($_GET['var'])){
            if($_GET['var'] == '')header("Location: proprietario.php");
            $nome  = $_GET['var'];
        $seleciona = $proprietarios->pesquisaproprietario($_GET['var']);
    }else{
            if(isset($_GET['cpf'])){
                if($_GET['cpf'] == '')header("Location: proprietario.php");
                $nome = $_GET['cpf'];
            $seleciona = $proprietarios->pesquisaproprietariocpf($_GET['cpf']);
            }else header("Location: proprietario.php");
    }
?>
<body>
    <a href="proprietario.php"><< voltar</a>
  <center>
  <h1>Resultados da pesquisa <?= $nome ?></h1>
  <table border="1">
            <thead>
                <th>cpf</th>
                <th>nome</th>
                <th>telefone</th>
                <th>email</th>
                <th>Ações</th>
            </thead>
            <tbody>
                <?php
                        while($linha = $seleciona->fetch(PDO::FETCH_ASSOC)){
                    ?>
                        <tr>
                            <td><?= $linha['cpf']?></td>
                            <td><?= $linha['nome']?></td>
                            <td><?= $linha['telefone']?></td>
                            <td><?= $linha['email']?></td>
                            <td><a href="deleta.php?cpf=<?=$linha['cpf']?>">Deletar</a>
                            <a href="edita.php?cpf=<?=$linha['cpf']?>">Editar</a></td>
                        </tr>
                    <?php
                        }
                    ?>
            </tbody>
        </table>
  </center>
</body>