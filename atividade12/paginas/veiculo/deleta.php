<?php
require "../../classes/veiculo.php";
$veiculos = new veiculo();
$del = $veiculos->deletar($_GET['placa']);
header("Location: veiculo.php");
?>