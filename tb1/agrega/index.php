<?php
    include_once "cesta.php";
    include_once "produto.php";
    $c1 = new Cesta;

    $c1->addItem($p1 = new Produto('Chocolate',10,5));
    $c1->addItem($p1 = new Produto('Café',100,7));
    $c1->addItem($p1 = new Produto('Mostarda',50,3));

    echo "Cesta 1:<br>";
    foreach($c1->getItens() as $item){
        echo "Item: ".$item->getDescricao()."<br>";
    }
?>