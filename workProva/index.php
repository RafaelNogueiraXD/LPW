<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Elevador</title>
</head>
<?php
    require_once "elevador.php";
    require_once "pessoa.php";
    require_once "function.php";

    $pessoas = array();
    $pessoas[] = new pessoa("carlao",88,1);
    $pessoas[] = new pessoa("jorge",45,2);
    $pessoas[] = new pessoa("clara",100,2);
    $pessoas[] = new pessoa("tia Tania",60,4);
    $pessoas[] = new pessoa("tio caetano",60,4);
    $pessoas[] = new pessoa("charles",80,5);
    $pessoas[] = new pessoa("Marlom",120,7);  
    $pessoas[] = new pessoa("Marla",80,5);
    $pessoas[] = new pessoa("cam",60,10);

    $elevador = new ElevadorClass(0,0,0);

    $elevadorPessoas = entraElevador($pessoas,$elevador);
    $totalDePessoas = count($pessoas);
    $pessoasNoElevador = count($elevadorPessoas);
    foreach($elevadorPessoas as $key => $pessoa){
        $contaPeso += $pessoa->getPeso();
    
        if($maiorAndar < $pessoa->getAndar()){
            $maiorAndar = $pessoa->getAndar();  
        }
    }
    $elevador->setAndar($maiorAndar);
    $elevador->entraPessoa($contaPeso);
    $numeroDeVoltas = 1;
?>
<body>
    <header>
        <h1 class="menuElevador"> <span style="color: white;"> Elevador do </span><span class="tmodern "> Verde Plaza hotel</span></h1>
    </header>
    <h3 style="text-align: center;">
        <?= $elevador->sobeAndar() ?>
    </h3>
    <main class="conteudo">
            <div class="caixaDeInfo">
                    <h2>Informações Da Ronda</h2>
                    <div class="texto">
                        <?php
                            imprimiDados($pessoasNoElevador,$elevador,$maiorAndar,$totalDePessoas);
                        ?>
                    </div>
            </div>
            <div class="elevador">
                    <div class="titulo">
                            <?= "<h1 style='text-align:center'>Ronda numero $numeroDeVoltas</h1>" ?>
                    </div>
                    <section class="andares">
                      <?=  
    principal($andar,$maiorAndar,$elevadorPessoas,$removePessoa,$pessoasNoElevador,$contaPeso,$elevador);
    ?>
                    </section>
            </div>
        <div class="centraliza" style="color: red;"> Feito por Rafael Nogueira Rodrigues</div>

    </main>
<?php
    //limpeza Elevador
    // while( $removePessoa < $pessoasNoElevador){
    //     unset($elevadorPessoas[$removePessoa]);  
    //     $removePessoa ++;
    // }
    $numeroDeVoltas ++;

    $contaPeso = 0 ;
    $elevador->desceAndar();
    $elevador->sobeAndar();
    
    while(  $totalDePessoas  != 0 ){
        $totalDePessoas = count($pessoas);
        $pessoasNoElevador = count($elevadorPessoas);
        $x = 0;
  
        
            if($totalDePessoas < 3){
                    break;
                }
        // echo "$totalDePessoas e $pessoasNoElevador";
        $tentativa = $totalDePessoas - $pessoasNoElevador;
     
        while($totalDePessoas != $tentativa){
            unset($pessoas[$x]);
            $x++;
            $totalDePessoas = count($pessoas);
            
            // echo "<br>";
            // echo "$x  pessoas sairam e  $tentativa sobraram";
            // echo "<br>";
            
        }
        // echo "$totalDePessoas a subir $tentativa - - $pessoasNoElevador";
        $elevadorPessoas = entraElevador($pessoas,$elevador);
        foreach($elevadorPessoas as $key => $pessoa){
            $contaPeso += $pessoa->getPeso();
            if($maiorAndar < $pessoa->getAndar()){
                $maiorAndar = $pessoa->getAndar();  
            }
        }
        // $elevador->setAndar($maiorAndar);
        $elevador->entraPessoa($contaPeso);
        $pessoasNoElevador = count($elevadorPessoas);
        ?>
            <main class="conteudo">
                        <div class="caixaDeInfo">
                                <h2>Informações Da Ronda</h2>
                                <div class="texto">
                                    
                                    <?php
                                        imprimiDados($pessoasNoElevador,$elevador,$maiorAndar,$totalDePessoas);
                                    ?>
                                </div>
                        </div>
                        <div class="elevador">
                                <div class="titulo">
                                        <?= "<h1 style='text-align:center'>Ronda numero $numeroDeVoltas</h1>" ?>
                                </div>
                                <section class="andares">
                                    <?=  
                                        principal($andar,$maiorAndar,$elevadorPessoas,$removePessoa,$pessoasNoElevador,$contaPeso,$elevador);
                                    ?>
                                </section>
                        </div>
                </main>
        <?php
        $numeroDeVoltas ++;
      
        $x = 0;
        while($pessoasNoElevador != 0){
            unset($elevadorPessoas[$x]);
            $x++;
            $pessoasNoElevador = count($elevadorPessoas);
            // var_dump($elevadorPessoas);
        }
        // imprimir($elevadorPessoas,$numeroDeVoltas);
        if($totalDePessoas == $tentativa && $tentativa > 0 ){
            $totalDePessoas = 0;
        }
       
    }
    $maiorAndar = 0 ; 
    $pessoasNoElevador = count($elevadorPessoas);
?>
    <main class="conteudo">
        <div class="caixaDeInfo">
                <h2>Informações Da Ronda</h2>
                <div class="texto">
                    <?php
                        imprimiDados($pessoasNoElevador,$elevador,$maiorAndar,$totalDePessoas);
                    ?>
                </div>
        </div>
    </main>