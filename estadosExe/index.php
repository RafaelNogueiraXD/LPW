<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estados</title>
</head>
<?php
    include_once 'estados.php';
    include_once 'cidades.php';
    $estado = new estados();
    $cidades = new cidades();
    $estados = $estado->selecionaEstados();
    if(isset($_GET['estado'])){
        if($_GET['estado'] == ''){
            header("Location: index.php");
        }
        $var = $_GET['estado'];
        $dadoEstado = $estado->pesquisaEstado($var)->fetch(PDO::FETCH_ASSOC);
        $selectCidades = $cidades->selecionaCidades($dadoEstado['id']);
        $conta = $selectCidades->rowcount();
     
    }
    if(isset($_GET['cidade'])){
        if($_GET['cidade'] == ''){
            header("Location: index.php");
        }else{
            $cidadeX = $cidades->pesquisa($_GET['cidade']);
        }

    }
?>
<body>
    <h2>Cidades por região</h2>
    <?php
        $sul = $estado->region('Sul');
        $Sudeste = $estado->region('Sudeste');
        $Centroeste = $estado->region('Centro-Oeste');
        $Nordeste = $estado->region('Nordeste');
        $Norte = $estado->region('Norte');
    ?>
    <p>Sul: <?= $sul?> cidades</p>
    <p>Sudeste: <?= $Sudeste?> cidades</p>
    <p>Centro-oeste: <?= $Centroeste?> cidades</p>
    <p>Nordeste: <?= $Nordeste?> cidades</p>
    <p>Norte: <?= $Norte?> cidades</p>
    <center>
        
        <h1>Escolha metodo de pesquisa</h1>
        <button id="btn1">Ver cidades de um Estado</button>
        <button id="btn2">Procurar cidade</button>
        <a href="add.php">Adicionar cidade/estado</a>
        <a href="editstate.php">Editar estado</a>

        <div id="item1">
            <form action="index.php" method="GET">
                <select name="estado" id="estado">
                    <option value="">Selecione um estado</option>
                    <?php
                        while($linha = $estados->fetch(PDO::FETCH_ASSOC)){
                    ?>
                        <option value="<?= $linha['uf']?>"><?= $linha['nome']?></option>
    
                    <?php
                        }
                    ?>
                </select>
                <input type="submit" value="Pesquisar">
            </form>
        </div>
        <div id="item2">
            <form action="index.php" method="GET">
                <input type="text" name="cidade" placeholder="Digite o nome da Cidade">
                <input type="submit" value="pesquisar">
            </form>
        </div>
        
        <?php
            if(isset($_GET['estado'])){
        ?>
            <h1>Cidades do estado <?= $dadoEstado['nome']?></h1>
        <table border="1">
            <thead>
                <th>ID</th>
                <th>Nome</th>
                <th>Ações</th>
            </thead>
            <tbody>
                <?php
                    echo "Numero de Cidades:".$conta;
                    while($linha = $selectCidades->fetch(PDO::FETCH_ASSOC)){
                
                ?>
                <tr>
                    <td><?= $linha['id']?></td>
                    <td><?= $linha['nome']?></td>
                    <td><a href="deleta.php?id=<?= $linha['id']?>">Remover</a>
                    <a href="editcity.php?id=<?= $linha['id']?>">Editar</a></td>
                </tr>

                <?php
                    }
                ?>
            </tbody>
        </table>
        <?php
            }
        ?>

        <?php
            if(isset($_GET['cidade'])){
            ?>
                <table border='1'>
                    <thead>
                        <th>Nome</th>
                        <th>Estado</th>
                        <th>Ação</th>
                    </thead>
                    <tbody>

               
                <?php
                while($linha = $cidadeX->fetch(PDO::FETCH_ASSOC)){
                    ?>
                        <tr>
                            <td><?=$linha['nome']?></td>
                            <td><?php
                                $estadoCidade = $estado->pesquisaEstadoId($linha['estado'])->fetch(PDO::FETCH_ASSOC);
                                echo $estadoCidade['nome'];
                            ?></td>
                            <td><a href="deleta.php?id=<?= $linha['id']?>">Remover</a>
                            <a href="editcity.php?id=<?= $linha['id']?>">Editar</a></td>
                        
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
    <script>
            $("#item1").hide();
            $("#item2").hide();

        
        $("#btn1").click(function(){
            $("#item1").show();
            $("#item2").hide();
       
        });
        $("#btn2").click(function(){
            $("#item2").show();
            $("#item1").hide();
          
        });
     
    </script>
</body>
</html>