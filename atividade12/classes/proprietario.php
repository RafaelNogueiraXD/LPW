<?php

include "../../banco/comandbasicos.php";

class proprietario extends crud{
    private $nome,$telefone,$cpf,$email;
    public function __set($chave, $valor){
        $this->$chave = $valor;
    }
    
    public function __get($chave){
        return $this->$chave; 
    }

    function selecionaProprietariox($cpf){
        $result = crud::select("*","proprietario","where cpf = '$cpf'",array());
        return $result;
    }
    function selecionaProprietarios(){
        $result = crud::select("*","proprietario","",array());
        return $result;
    }

    function add($cpf,$nome,$telefone,$email){
        $result = crud::insert("proprietario",
                                    "'$nome','$telefone','$cpf','$email'",
                                array());
        return $result;
        // (`cpf`, `nome`, `telefone`, `email`, `tipo`) 

    }
    function edita($cpf,$nome,$telefone,$email){
        $result = crud::update("proprietario",
                                "nome = '$nome',
                                telefone = '$telefone',
                                email = '$email'", 
                                "where cpf = '$cpf'",
                            array());
        return $result;
    }
    

    function pesquisaproprietario($var){
        $result = crud::select("*","proprietario","where
                                    cpf like '%$var%'
                                    or nome like '%$var%'
                                    or telefone like '%$var%'"
                            ,array());
        return $result;
    }
    function pesquisaproprietariocpf($cpf){
        $result = crud::select("*","proprietario","where cpf like '%$cpf%'",array());
        return $result;
    }
    function deletar($cpf){
        $result = crud::delete("proprietario","cpf = '$cpf'",array());
        return $result;
    }
}
?>