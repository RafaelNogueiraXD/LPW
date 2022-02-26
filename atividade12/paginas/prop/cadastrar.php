
<?php

    require "../../classes/proprietario.php";
    $proprietario = new proprietario();
    if(isset($_GET['cadastra'])){
        $add = $proprietario->add($_GET['cpf'],$_GET['nome'],$_GET['telefone'],$_GET['email']);
        header("Location: proprietario.php");
    }
?>

<body>
<a href="proprietario.php"><< voltar</a>

    <center>
    <h1>cadastro</h1>
        <table>
        <form action="cadastrar.php" method="GET">
            <input type="hidden" name="cadastra" value="1">
            <tr>
                <td>cpf</td>
                <td><input type="text" name="cpf" placeholder="Digite a cpf" required></td>
            </tr>
            <tr>
                <td>nome</td>
                <td><input type="text" name="nome" placeholder="Digite a nome" required></td>
            </tr>
            <tr>
                <td>telefone</td>
                <td><input type="text" name="telefone" placeholder="Digite a telefone" required></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="text" name="email" placeholder="Digite a email" required></td>
            </tr>
            <tr>
            <td><input type="submit" value="enviar"></td></tr>
        </form>
        </table>
    </center>
</body>
