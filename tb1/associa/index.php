<?php
    include 'fabricante.php';
    include 'produto.php';

    $p1 = new Produto('Teclado',10,7);
    $f1 = new Fabricante('Rarr','Rua Fabrica de Perifericos','12345');

    $p1->setFabricante($f1);
    echo "o produto é :".$p1->getDescricao()."<br>";
    echo "O fabricante é :".$p1->getFabricante()->getNome()."<br>";
?>