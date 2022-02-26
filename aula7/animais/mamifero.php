<?php
require_once "animal.php";
	class Mamifero extends Animal{
		private $corPelo;
		
		public function andar($nPassos){
			echo "Mamífero andou $nPassos passos <br>";
		}
		
		public function comer(){
			echo "Mamífero se alimentou de $this->alimento<br>";
		}
		
		
		public function __set($chave, $valor){
			$this->$chave = $valor;
		}
		
		public function __get($chave){
			return $this->$chave;
		}
	}
?>