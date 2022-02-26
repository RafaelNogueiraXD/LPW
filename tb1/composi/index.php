<?php
    include_once "produto.php";
    include_once "caracteristica.php";

    $p1 = new Produto("Teclado", 10, 7);

    $p1->addCaracteristica("Tipo", "ABNT2");
    $p1->addCaracteristica("Conexão", "USB");
    $p1->addCaracteristica("Modelo", "Rarr 1");

    echo "Produto: ".$p1->getDescricao()."<br>";
    foreach ($p1->getCaracteristicas() as $c){
        echo "caracteristica: ".$c->getNome()." - ". $c->getValor()."<br>";
    }
?>