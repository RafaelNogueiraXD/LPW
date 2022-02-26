<?php
	class banco{
		public function conecta(){
			try{
				$con = new PDO('mysql:host=localhost;dbname=oficina', 'root', '');
				return $con;
			}catch (PDOException $e){
				return "erro ao conectar bd --> ".$e;
			}
		}
		
	
	}
?>