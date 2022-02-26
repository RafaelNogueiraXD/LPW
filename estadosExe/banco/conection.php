<?php
	class banco{
		public function conecta(){
			try{
				$con = new PDO('mysql:host=localhost;dbname=estados_cidades', 'root', '');
				return $con;
			}catch (PDOException $e){
				return "erro ao conectar bd --> ".$e;
			}
		}
		
	
	}
?>