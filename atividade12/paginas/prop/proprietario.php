<?php
include "../../classes/proprietario.php";
  $prop = new proprietario;
  $seleciona = $prop->selecionaProprietarios();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Veiculo</title>
</head>
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
                    Pesquisa por cpf</td>
                    <td>
                        <form action="pesquisa.php">
                            <input type="text" name="cpf" placeholder="digite a cpf" required>
                            <input type="submit" value="enviar">
                        </form>
                    </td>
                </tr>
        </table>
        <h1>Proprietários</h1>
        <table border="1">
            <thead>
                <th>nome</th>
                <th>Telefone</th>
                <th>cpf</th>
                <th>email</th>
                <th>Ações</th>
            </thead>
            <tbody>
                <?php
                        while($linha = $seleciona->fetch(PDO::FETCH_ASSOC)){
                    ?>
                        <tr>
                            <td><?= $linha['nome']?></td>
                            <td><?= $linha['telefone']?></td>
                            <td><?= $linha['cpf']?></td>
                            <td><?= $linha['email']?></td>
                            <td><a href="deleta.php?cpf=<?=$linha['cpf']?>">Deletar</a>
                            <a href="editar.php?cpf=<?=$linha['cpf']?>">Editar</a></td>
                        </tr>
                    <?php
                        }
                    ?>
            </tbody>
        </table>
    </center>
</body>
</html>