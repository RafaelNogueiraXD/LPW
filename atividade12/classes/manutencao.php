<?php

include "../../banco/comandbasicos.php";

class manutencao extends crud{
    private $id,$manutencao,$pecas,$estado_manutencao;
    public function __set($chave, $valor){
        $this->$chave = $valor;
    }

    public function email($email,$msg){
        
    ?>
    <p>
    E-mail enviado para <?= $email['email'] ?>. <br>
    <?= $msg ?>
    Att. Oficina da Praça
    </p>
<?php
    }
    
    public function __get($chave){
        return $this->$chave;
    }
    function selecionamanutencaos(){
        $result = crud::select("*","manutencao","",array());
        return $result;
    }
    function add($manutencao,$pecas,$placa,$estado_manutencao){
        $result = crud::insert("manutencao",
                                    "default,'$manutencao','$pecas','$placa','$estado_manutencao'",
                                array());
        return $result;
        // (`id`, `manutencao`, `pecas`, `estado_manutencao`, `tipo`) 

    }
    function edita($id,$manutencao,$pecas,$placa,$estado_manutencao){
        $result = crud::update("manutencao",
                                "manutencao = '$manutencao',
                                pecas = '$pecas',
                                placa = '$placa',
                                estado_manutencao = '$estado_manutencao'", 
                                "where id = '$id'",
                            array());
        return $result;
    }
    function selecionamanutencaox($id){
        $result = crud::select("*","manutencao","where id = '$id'",array());
        return $result;
    }

    function pesquisamanutencao($var){
        $result = crud::select("*","manutencao","where
                                    placa like '%$var%'"
                            ,array());
        return $result;
    }

    function enviaEmail($placa){
        $result = crud::select("p.email","proprietario p 
                                    inner join manutencao m 
                                    inner join `veic-prop` a ",
                                    "where '$placa' = a.placa and p.cpf = a.cpf"
                            ,array());
        return $result;
    }
    function deletar($id){
        $result = crud::delete("manutencao","id = '$id'",array());
        return $result;
    }
    
}
?>