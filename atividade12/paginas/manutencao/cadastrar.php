
<?php

    require "../../classes/manutencao.php";
    $manutencao = new manutencao();
    if(isset($_GET['cadastra'])){
        $add = $manutencao->add($_GET['manutencao'],$_GET['pecas'],$_GET['placa'],$_GET['estado_manutencao']);
        header("Location: manutencao.php");
    }
?>

<body>
<a href="manutencao.php"><< voltar</a>

    <center>
    <h1>cadastro</h1>
        <table>
        <form action="cadastrar.php" method="GET">
            <input type="hidden" name="cadastra" value="1">
            <tr>
                <td>manutencao</td>
                <td><textarea name="manutencao" cols="50" rows="5" placeholder="Digite a manutencao" required></textarea></td>
            </tr>
            <tr>
                <td>pecas</td>
                <td><textarea name="pecas" cols="50" rows="5" placeholder="Digite a pecas" required></textarea></td>
            </tr>
            <tr>
                <td>placa</td>
                <td><input type="text" name="placa" placeholder="Digite a placa" required></td>
            </tr>
            <tr>
                <td>estado_manutencao</td>
                <td><textarea name="estado_manutencao"  cols="50" rows="5"placeholder="Digite a estado_manutencao" required></textarea></td>
            </tr>
            <tr>
            <td><input type="submit" value="enviar"></td></tr>
        </form>
        </table>
    </center>
</body>
