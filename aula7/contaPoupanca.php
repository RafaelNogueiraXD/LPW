<?php
	require_once("conta.php");
	
	class ContaPoupanca extends Conta{
		function retirar($quantia){
			if($this->saldo >= $quantia){
				$this->saldo -= $quantia;
				echo "Retirada efetuada!";
			}else{
				echo "Retirada não permitida, saldo insuficiente!!!";
			}
			
		}
		
	}
?>