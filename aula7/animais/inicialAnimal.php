<?php
	require_once "mamifero.php";
	
	$m = new Mamifero();
	$m->__set("alimento", "leite");
	$m->__set("nome", "Gato");
	$m->__set("corPelo", "branco");
	
	$m->andar(10);
	$m->comer();
?>