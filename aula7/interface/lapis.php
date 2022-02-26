<?php
	class Lapis implements Caneta{
		private $cor;
		public function __construct($cor){
			$this->cor = $cor;
		}
		
		public function escrever($texto){
			echo "Escrevendo $texto com lápis!";
		}
		
		public function getCor(){
			return $this->cor;
		}
	}
?>