<?php
	require_once("conta.php");
	class ContaCorrente extends Conta{
		private $limite;
		
		public function __construct($agencia, $conta, $saldo, $limite){
			parent::__construct($agencia, $conta, $saldo);
				$this->limite = $limite;
				$this->conta = $conta;
				$this->saldo = $saldo;
		}
		
		public function retirar($quantia){
			if(($this->saldo + $this->limite) >= $quantia){
				$this->saldo -= $quantia;
				echo "Retirada efetuada!";
			}else{
				echo "Retirada não permitida, saldo insuficiente!!!";
			}
		}
	}
?>