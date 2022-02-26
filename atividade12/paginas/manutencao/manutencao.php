<?php

include "../../classes/manutencao.php";

$manutencao = new manutencao;
$seleciona = $manutencao->selecionamanutencaos();
?>
<body>
<a href="../inicial/inicial.php"><< voltar</a>
<button><a href="cadastrar.php">Cadastrar novo</a></button>
<center>
        <h2>Campos de busca</h2>
        <table border="1">
                <tr>    
                    <td>
                    Pesquisa por veiculos em tratamento</td>
                    <td>
                        <form action="pesquisa.php">
                            <input type="text" name="var" placeholder="digite algo..." required> 
                            <input type="submit" value="enviar">
                       
                        </form>
                    </td>
                </tr>
        </table>
        <h1>Manutenção</h1>
        <table border="1">
            <thead>
                <th>id</th>
                <th>Manutencao</th>
                <th>Peças</th>
                <th>placa</th>
                <th>estado_manutencao</th>
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
                            <a href="editar.php?id=<?=$linha['id']?>">Editar</a>
                           </td>
                        </tr>
                    <?php
                        }
                    ?>
            </tbody>
        </table>
    </center>
</body>
