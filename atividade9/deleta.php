<?php
    include "produtosql.php";
    $produtos = new produtoSQL();
    $a = $produtos->deleta($_GET['id']);
    header('Location: index.php');
?>