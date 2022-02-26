<?php
	require_once "conta.php";
	require_once "contaPoupanca.php";
	require_once "contaCorrente.php";
	
	$contas = array();
	$contas[] = new ContaCorrente(1122, "CC1122.33", 100, 200);
	$contas[] = new ContaPoupanca(3344, "PP5566.77", 100);
	
	foreach($contas as $key => $conta){
		print "Conta: {$conta->getInfo()} <br>";
		print "Saldo atual: {$conta->getSaldo()} <br>";
		
		$conta->depositar(200);
		
		print "-----------Depósito de R$200------------<br>";
		print "Saldo atual: {$conta->getSaldo()}<br>";
		
		print "<br><br> Retirando 500<br><br>";		
		$conta->retirar(500);
		print "-------- Saldo atual: {$conta->getSaldo()}<br><br><br>";
	}
?>