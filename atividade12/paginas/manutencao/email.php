<script>
var idade=prompt("Digite a mensagem:");
var x = 0;
</script>
<p id="demo"></p>
<p>Att.
Oficina da Praça</p>

<?php

include "../../classes/manutencao.php";
$manutencao = new manutencao;

if(isset($_GET['placa'])){
    $email = $manutencao->enviaEmail($_GET['placa'])->fetch(PDO::FETCH_ASSOC);
    echo "<script>";
    echo "x = 'mensagem enviada para ".$email['email']."<br> ' + idade;";
    echo "document.getElementById('demo').innerHTML += x;";
    echo "</script>";
}else header("Location: manutencao.php");
?>
