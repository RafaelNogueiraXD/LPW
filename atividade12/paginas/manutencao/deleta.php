<?php
require "../../classes/manutencao.php";
$manutencaos = new manutencao();
$del = $manutencaos->deletar($_GET['id']);
header("Location: manutencao.php");
?>