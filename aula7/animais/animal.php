<?php
	abstract class Animal{
		protected $nome;
		protected $alimento;
		public abstract function andar($n_passos);
		public abstract function comer();
	}
?>