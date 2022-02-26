<?php
include "conecta.php";
	$car = new carrosSQL;
	$carro = new Carró;
	// $carro->setPlaca();
	// $car->insere($carro);
	class Carró{
		private $placa,$cor, $defeito;

		public function setPlaca($placa){
			$this->placa = $placa;
		}
		public function getPlaca(){
			return $this->placa;
		}
		public function setCor($cor){
			$this->cor = $cor;
		}
		public function getCor(){
			return $this->cor;
		}
		public function setDefeito($defeito){
			$this->defeito = $defeito;
		}
		public function getDefeito(){
			return $this->defeito;
		}
	}
	class carrosSQL{
		private $conecta;
		private $con;
		public function __construct(){
			$this->conecta = new Conecta();
			$this->con = $this->conecta->conectar();
		}
		
		public function insere($carro){
			$stmt = $this->con->prepare("insert into carro (placa, cor, defeito) VALUES (?, ?, ?)");
			$stmt->bindValue(1, '$carro[1]');
			$stmt->bindValue(2, '$carro[2]');
			$stmt->bindValue(3, '$carro[3]');
			$stmt->execute();
		}
		
	}
	
?>

