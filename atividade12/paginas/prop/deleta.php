<?php
require "../../classes/proprietario.php";
$proprietarios = new proprietario();
$del = $proprietarios->deletar($_GET['cpf']);
header("Location: proprietario.php");
?>