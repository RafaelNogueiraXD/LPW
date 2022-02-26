<?php
    require "../../classes/proprietario.php";
    $proprietarios = new proprietario();
    if(isset($_GET['cpf'])){
        $pesquisa = $proprietarios->selecionaproprietariox($_GET['cpf'])->fetch(PDO::FETCH_ASSOC);
        // var_dump($pesquisa);
    }else {
        if(isset($_GET['edita'])){
            $edit = $proprietarios->edita($_GET['edita'],$_GET['nome'],$_GET['telefone'],$_GET['email']);
            header("Location: proprietario.php");
        }else header("Location: proprietario.php");   
    }
?>
<body>
<a href="proprietario.php"><< voltar</a>

<center>
<h1>Editar <?= $pesquisa['nome']?></h1>
    <table>
    <form action="editar.php" method="GET">
        <input type="hidden" name="edita" value="<?= $pesquisa['cpf']?>">
        <tr>
            <td>nome</td>
            <td><input type="text" name="nome" placeholder="Digite a nome" value="<?= $pesquisa['nome']?>" required></td>
        </tr>
        <tr>
            <td>telefone</td>
            <td><input type="text" name="telefone" placeholder="Digite a telefone" value="<?= $pesquisa['telefone']?>" required></td>
        </tr>
        <tr>
            <td>email</td>
            <td><input type="email"name="email"   value="<?= $pesquisa['email']?>"></td>
        </tr> 
        
        <tr>
        <td><input type="submit" value="enviar"></td></tr>
    </form>
    </table>
</center>
</body>