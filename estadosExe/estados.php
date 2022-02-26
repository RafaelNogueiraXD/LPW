<?php

require_once "banco/comandbasicos.php";

class estados extends crud {

    function selecionaEstados(){
        $result = crud::select("*","estado","",array());
        return $result;
        // select * from estado where pais = 1;
    }

    function pesquisaEstado($uf){
        $result = crud::select("*","estado","where uf='$uf'",array());
        return $result;
        // select * from estado where uf = 'PR';
    }

    function pesquisaEstadoId($id){
        $result = crud::select("*","estado","where id ='$id'",array());
        return $result;
        // select * from estado where uf = 'PR';
    }

    function add($nome,$uf,$pais){
        $result = crud::insert("estado","default,'$nome','$uf','$pais'",array());
        return $result;
    }
    function edita($id,$nome,$uf,$pais){
        $result = crud::update("estado",
                                        "nome = '$nome',
                                        uf = '$uf',
                                        pais = '$pais'", 
                                        "where id = $id",array()
                                );
        return $result;
    }
    function region($regiao){
        if($regiao ==  'Sul'){
            $result = crud::select("*","cidade c 
            inner join estado e",
            "where c.estado = e.id and uf = 'RS' or uf = 'SC' or uf = 'PR'",array())->rowcount();
            return $result;
        // select * from estado where uf = 'RS' or uf = 'SC' or uf = 'PR';
        }
        if($regiao ==  'Sudeste'){
            $result = crud::select("*","cidade c 
            inner join estado e",
            "where c.estado = e.id and uf = 'SP' or uf = 'RJ' or uf = 'MG' or uf = 'ES'",array())->rowcount();
            return $result;

        // select * from estado where uf = 'SP' or uf = 'RJ' or uf = 'MG' or uf = 'ES';
        }
        if($regiao == 'Centro-Oeste'){
            $result = crud::select("*","cidade c 
            inner join estado e",
            "where c.estado = e.id and uf = 'MS' or uf = 'DF' or uf = 'GO' or uf = 'MT'",array())->rowcount();
            return $result;
            
            // select * from estado where uf = 'MS' or uf = 'DF' or uf = 'GO' or uf = 'MT';
        }
        if($regiao ==  'Nordeste'){
            $result = crud::select("*","cidade c 
            inner join estado e",
            "where c.estado = e.id and uf = 'BA' or uf = 'PI' or uf = 'MA' or uf = 'CE' or uf = 'RN' or uf = 'PB' or uf = 'PE' or uf = 'SE' or uf = 'AL'",array())->rowcount();
            return $result;

            // select * from estado where uf = 'BA' or uf = 'PI' or uf = 'MA' or uf = 'CE' or uf = 'RN' or uf = 'PB' or uf = 'PE' or uf = 'SE' or uf = 'AL';
        }
        if($regiao ==  'Norte'){
            $result = crud::select("*","cidade c 
            inner join estado e",
            "where c.estado = e.id and uf = 'RR' or uf = 'RO' or uf = 'AC' or uf = 'AM' or uf = 'PA' or uf = 'TO' or uf = 'AP'",array())->rowcount();
            return $result;
            // select * from estado where uf = 'RR' or uf = 'RO' or uf = 'AC' or uf = 'AM' or uf = 'PA' or uf = 'TO' or uf = 'AP';
        }
        
    }

}


?>