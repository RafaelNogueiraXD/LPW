<?php

require_once "banco/comandbasicos.php";

class cidades extends crud {
  
    function selecionaCidades($estado){
        $result = crud::select("*","cidade","where estado = $estado",array());
        return $result;
    }
    function cidadeX($id){
        $result = crud::select("*","cidade","where id = $id",array());
        return $result;
    }
    function pesquisa($cidade){
        $result = crud::select("*","cidade","where nome like '%$cidade%'",array());
        return $result;
    }
    function deletaCidade($id){
        $result = crud::delete("cidade","id = $id",array());
        return $result;
        
    }
    function add($nome,$estado){
        $result = crud::insert("cidade","default,'$nome','$estado'",array());
        return $result;
    }
    function edita($id,$nome,$estado){
        $result = crud::update("cidade",
                                        "nome = '$nome',
                                        estado = '$estado'", 
                                        "where id = $id",array()
                                );
        return $result;
    }
}


?>