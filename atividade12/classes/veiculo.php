<?php

include "../../banco/comandbasicos.php";

class veiculo extends crud{
    private $placa,$marca,$cor,$defeito,$tipo;
	public function __set($chave, $valor){
        $this->$chave = $valor;
    }
    
    public function __get($chave){
        return $this->$chave;
    }

    
    
    function selecionaVeiculox($placa){
        $result = crud::select("*","veiculo","where placa = '$placa'",array());
        return $result;
    }
    function selecionaVeiculoporProprietario($cpf){
        $result = crud::select("v.placa, v.marca, p.nome, p.cpf","veiculo v 
        inner join `veic-prop` a
        inner join proprietario p","where '$cpf' = a.cpf and v.placa = a.placa and p.cpf = '$cpf'",array());
        return $result;
    }
    function selecionaVeiculos(){
        $result = crud::select("*","veiculo","",array());
        return $result;
    }

    function add($placa,$marca,$cor,$defeito,$tipo){
        $result = crud::insert("veiculo",
                                    "'$placa','$marca','$cor','$defeito','$tipo'",
                                array());
        return $result;
        // (`placa`, `marca`, `Cor`, `Defeito`, `tipo`) 

    }
    function addRelacao($placa,$cpf){
        $result = crud::insert("`veic-prop`",
                                    "default,'$placa','$cpf'",
                                array());
        return $result;
        // (`placa`, `marca`, `Cor`, `Defeito`, `tipo`) 

    }
    function edita($placa,$marca,$cor,$defeito,$tipo){
        $result = crud::update("veiculo",
                                "marca = '$marca',
                                Cor = '$cor',
                                Defeito = '$defeito',
                                tipo = '$tipo'", 
                                "where placa = '$placa'",
                            array());
        return $result;
    }
    

    function pesquisaVeiculo($var){
        $result = crud::select("*","veiculo","where
                                    placa like '%$var%'
                                    or marca like '%$var%'
                                    or cor like '%$var%'
                                    or tipo like '%$var%'"
                            ,array());
        return $result;
    }
    function pesquisaVeiculoTipo($tipo){
        $result = crud::select("*","veiculo","where tipo = '$tipo'",array());
        return $result;
    }
    function pesquisaVeiculoPlaca($placa){
        $result = crud::select("*","veiculo","where placa like '%$placa%'",array());
        return $result;
    }
    function deletar($placa){
        $result = crud::delete("veiculo","placa = '$placa'",array());
        return $result;
    }
}
?>