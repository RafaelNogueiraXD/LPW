<?php
    include "cidades.php";
    $city = new cidades();
    $a = $city->deletaCidade($_GET['id']);
    header('Location: index.php');
?>

?>