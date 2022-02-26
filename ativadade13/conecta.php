<?php
	class Conecta{
		public function conectar(){
			try{
				$con = new PDO('mysql:host=localhost;dbname=carros', 'root', '');
				return $con;
			}catch (PDOException $e){
				return "erro ao conectar bd --> ".$e;
			}
		}
	}
?>