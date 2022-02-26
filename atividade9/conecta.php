<?php
	class banco{
		public function conecta(){
			try{
				$con = new PDO('mysql:host=localhost;dbname=mercado', 'root', '');
				return $con;
			}catch (PDOException $e){
				return "erro ao conectar bd --> ".$e;
			}
		}
		
		public function retornaDados(){
			$a = "acb123456789";
			return $a;
		}
	}
?>