<?php
	class CanetaEsferografica implements Caneta{
		private $cor;
		public function __construct($cor){
			$this->cor = $cor;
		}
		
		public function escrever($texto){
			echo "Escrevendo $texto com caneta esferográfica!";
		}
		
		public function getCor(){
			return $this->cor;
		}
	}
?>