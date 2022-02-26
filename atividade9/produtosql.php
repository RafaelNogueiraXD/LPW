<?php
include "bancoBasico.php";
include_once "produtos.php";

	class produtoSQL extends crud{
		function selecionaTodos(){
			$a = crud::select("*","produto","",array());
			return $a;
		}
		function add($nome,$fornece,$custo,$venda,$estoque){
			$result = crud::insert("produto","default,'$nome','$fornece','$custo','$venda','$estoque'",array());
			return $result;
		}
		function pegaProd($id){
			$a = crud::select("*","produto","where id = $id",array());
			return $a;
		}
		function deleta($id){
			$result = crud::delete("produto","id = $id",array());
			return $result;
		}
		function edita($id,$nome,$fornecedor,$custo,$venda,$estoque){
			$result = crud::update("produto",
											"nome = '$nome',
											fornecedor = '$fornecedor', 
											custo = '$custo', 
											venda = '$venda', 
											estoque = $estoque",
											"where id = $id",array()
									);
			return $result;
		}
	}
?>
