<?php
	require_once "caneta.php";
	require_once "CanetaEsferografica.php";
	require_once "Giz.php";
	require_once "Lapis.php";
	
	$ce = new CanetaEsferografica("Azul");
	$l = new Lapis("Preta");
	$g = new Giz("Vermelha");
	
	escrevendoUmTexto($ce, "abc");
	escrevendoUmTexto($l, "def");
	escrevendoUmTexto($g, "hij");
	
	function escrevendoUmTexto(Caneta $caneta, $texto){
		$caneta->escrever($texto);
		echo "<br>Cor--> {$caneta->getCor()}<br><br><br>";
	}
?>