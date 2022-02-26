<?php
$pessoas = array(12,32,41,49,32,1,2,92,32,41,34,20,21);
$elevadorPessoas = principal($pessoas);
$numeroDeVoltas = 1;

    echo "<h3>Ronda numero $numeroDeVoltas</h3>";
    imprimir($elevadorPessoas,$numeroDeVoltas);
    $totalDePessoas = count($pessoas); 

    while(  $totalDePessoas  != 0 ){
        $totalDePessoas = count($pessoas);
        $pessoasNoElevador = count($elevadorPessoas);
        $x = 0;
        
            if($totalDePessoas == 1){
                    break;
                }
        // echo "$totalDePessoas e $pessoasNoElevador";
        while($totalDePessoas != $pessoasNoElevador){
            unset($pessoas[$x]);
            $x++;
            $totalDePessoas = count($pessoas);
            echo "<br>";
            // echo "$totalDePessoas e $pessoasNoElevador";
            echo "<br>";
            
        }
            
        $x = 0;
        while($pessoasNoElevador != 0){
            unset($elevadorPessoas[$x]);
            $x++;
            $pessoasNoElevador = count($elevadorPessoas);
            var_dump($elevadorPessoas);
        }
        $elevadorPessoas = principal($pessoas);
        $numeroDeVoltas ++;
        echo "<h3>Ronda numero $numeroDeVoltas</h3>";
        imprimir($elevadorPessoas,$numeroDeVoltas);
    
    }
    
function principal($pessoas){
    $acumulador = 0;
    $elevadorPessoas =  array();

    foreach ($pessoas as $key => $num){
        $var = $acumulador + $num;
        if($var > 50){
            return $elevadorPessoas;
            break;
        }else{
            $acumulador += $num;
            $elevadorPessoas[] = $num;
        }
    }
    return $elevadorPessoas;
}

function imprimir($elevadorPessoas,$num){
    echo "<br>";
    echo "<pre>";
    var_dump($elevadorPessoas);
    echo "</pre>";
    echo "<br>";
}
 // deletando diretamente
    // echo "<br>";
    // unset($pessoas[0]);
    // echo "<br>";
    // echo "<br>";
    // echo "<pre>";
    // var_dump($pessoas);
    // echo "</pre>";
    // echo "<br>";
  
    /*
        !!Explicação basica!!
        enquanto elevador não chegar no ultimo andar pedido{
             andar - verifica se tem pessoas para sair{
                se pessoa->getAndar == $AndarQueoElevadorTa{
                    $variavel_que_pega_localização_da_pessoa_no_array = array_search($AndarQueoElevadorTa, $pessoas)
                    unset($pessoas[$variavel_que_pega_localização_da_pessoa_no_array]);
                    pessoaSaiu
                    calcula o peso do elevador
                }
            }
            elevador sobe para o andar ++ 
        }
        !!Recriando Explicação
        $andar = 0;
        while($andar <=  $maiorAndar){
            foreach ($pessoas as $key => $pessoa){
                if($pessoa->getAndar() == $andar){
                    unset($pessoas[$andar]);  
                    echo "remove essa pessoa $num";
                }
            }
            $andar ++; 
        }
    */

?>