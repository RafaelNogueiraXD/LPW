<?php

include_once "bancoBasico.php";

    class usuario extends crud{
        function add($nome,$email,$imagem){
            $result = crud::insert("usuarios","default,'$nome','$email','$imagem'",array());
			return $result;
        }
        function selectAll(){
            $a = crud::select("*","usuarios","",array());
			return $a;
        }
        function procuraUsu($nome){

        }
    }

?>