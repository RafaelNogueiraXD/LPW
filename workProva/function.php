<?php
    //variaveis Criadas para contar
    $andar = 0;
    $removePessoa = 0;
    $contaPeso = 0;
    $maiorAndar = 0;
    $contador = 0;

function entraElevador($pessoas,$elevador){
    $arraynew =  array();
    $acumuladorTeste = 0;
    foreach ($pessoas as $key => $num){
        $var = $acumuladorTeste + $num->getPeso();
        if($var > 500){
            return $arraynew;
            break;
        }else{
            $acumuladorTeste += $num->getPeso();
            // $elevador->setPeso($num->getPeso());
            $arraynew[] = $num;
        }
    }
    return $arraynew;
} 

function imprimiDados($verifica,$elevador,$maiorAndar,$ttPessoas){
    echo "<p>";
    echo "Total de pessoas a subir: $ttPessoas";
    echo "</p>";
    echo "Numero de pessoas no Elevador: ".$verifica;
    echo "<p>";
    echo "Total de peso: ".$elevador->getPeso()." kg (Peso máximo 500kg)";
    echo "</p>";
    echo "<p>";
    echo "Deve ir até o  andar: ".$maiorAndar;
    echo "</p>";
    if($maiorAndar == 0 && $ttPessoas == 0 && $verifica == 0){
        echo "<p>";
        echo "Elevador está parado !!!";
        echo "</p>";
    }
}
function Principal($andar,$maiorAndar,
                    $elevadorPessoas,$removePessoa,
                    $pessoasNoElevador,$contaPeso,$elevador){
                        // <div class="andar">
                            
                        // </div>
    // echo "<>";
        while($andar <=  $maiorAndar){
            $a = 0;
            //Titutlo
            foreach ($elevadorPessoas as $key => $pessoa){
                if($pessoa->getAndar() == $andar){
                    $a ++;
                }
            }
            if($a>0){
                echo "<div class='andar'>";
                    echo "<div class='numAnd'>";
                        echo "<h2> Andar $andar </h2>";
                    echo "</div>";
                // $elevador->sobeAndar();
                    echo "<div class = 'pessoasElevador'>";
                    echo "Sairam:";
                
            }
            //Mostra pessoas saindo
            foreach ($elevadorPessoas as $key => $pessoa){
                if($pessoa->getAndar() == $andar){
                    echo " - ";
                    $contaPeso -= $pessoa->getPeso();
               
                    echo $pessoa->getNome();
                    // echo "<br>";     
                    $elevador->saiPessoa($pessoa->getPeso());
                    // echo "<br>";                         
                    // echo "$contaPeso peso";     
                    // echo "<br>";   
                }
            }
            if($a > 0){
                    echo "</div>";
                echo "</div>";
            }
            $andar ++; 
        }
        //remove pessoas
  
    // echo "</center>";
}

?>