<?php

require_once "mamifero.php";

 class Cachorro extends Mamifero{
    public function andar($nPassos){
        $nPassos += 10;
        echo "Cachorro correu ". $nPassos ." passos <br>";
    }
    
 }

?>