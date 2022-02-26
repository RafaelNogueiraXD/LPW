<?php
require_once "animal.php";
	class Reptil extends Animal{
		private $corEscama;
		
		public function andar($nPassos){
			echo "Reptil andou $nPassos passos <br>";
		}
		
		public function comer(){
			echo "Reptil se alimentou de $this->alimento<br>";
		}
		
		
		public function __set($chave, $valor){
			$this->$chave = $valor;
		}
		
		public function __get($chave){
			return $this->$chave;
		}
	}
?>