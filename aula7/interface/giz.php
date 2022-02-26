<?php
	class Giz implements Caneta{
		private $cor;
		public function __construct($cor){
			$this->cor = $cor;
		}
		
		public function escrever($texto){
			echo "Escrevendo $texto com giz!";
		}
		
		public function getCor(){
			return $this->cor;
		}
	}
?>

