<?php

require_once "banco/comandbasicos.php";

class pais extends crud {

    function selecionaPais(){
        $result = crud::select("*","pais","",array());
        return $result;
        // select * from estado where pais = 1;
    }

}

?>