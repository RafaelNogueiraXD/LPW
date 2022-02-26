<?php
require_once "animal.php";
	class Ave extends Animal{
		private $corPenas;
		
		public function andar($nPassos){
			echo "Ave andou $nPassos passos <br>";
		}
		
		public function comer(){
			echo "Ave se alimentou de $this->alimento<br>";
		}
		
		
		public function __set($chave, $valor){
			$this->$chave = $valor;
		}
		
		public function __get($chave){
			return $this->$chave;
		}
	}
?>