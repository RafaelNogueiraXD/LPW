<?php
    require_once "elevador.php";
    require_once "pessoa.php";
    require_once "function.php";

    $pessoas = array();
    $pessoas[] = new pessoa("tio caetano",60,4);
    $pessoas[] = new pessoa("jorge",45,2);
    $pessoas[] = new pessoa("clara",100,2);
    $pessoas[] = new pessoa("carlao",80,1);
    $pessoas[] = new pessoa("charles",200,5);
    $pessoas[] = new pessoa("tia Tania",60,4);
    $pessoas[] = new pessoa("cam",20,10);
 
    $elevadorPessoas = entraElevador($pessoas);
    $totaldePessoas = count($pessoas);
    $pessoasNoElevador = count($elevadorPessoas);
    foreach($elevadorPessoas as $key => $pessoa){
        $contaPeso += $pessoa->getPeso();
        if($maiorAndar < $pessoa->getAndar()){
            $maiorAndar = $pessoa->getAndar();  
        }
    }
    $elevador = new ElevadorClass($pessoasNoElevador,$contaPeso,10);
    imprimiDados($pessoasNoElevador,$elevador,$maiorAndar,$totaldePessoas);

    principal($andar,$maiorAndar,$elevadorPessoas,$removePessoa,$pessoasNoElevador,$contaPeso,$elevador);
    //limpeza Elevador
    while( $removePessoa < $pessoasNoElevador){
        unset($elevadorPessoas[$removePessoa]);  
        $removePessoa ++;
    }
    $pessoasNoElevador = count($elevadorPessoas);
    imprimiDados($pessoasNoElevador,$elevador,$maiorAndar,$totaldePessoas);

?>