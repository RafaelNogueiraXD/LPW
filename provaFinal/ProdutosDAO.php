<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProdutoDAO
 *
 * @author Radaelli
 */
class ProdutosDAO {
    private $conecta;
    
    public function __construct(){
        $c = new DB();
        $this->conecta = $c->conectar();        
    }
    
    public function buscaTudo(){
        $stmt = $this->conecta->prepare("SELECT * FROM products");
        $stmt->execute();

        $produtos = array();

        while ($linha = $stmt->fetch()) {
            $produto = new Produto();
            
            $produto->setIdProduto($linha['ProductID']);
            $produto->setIdEmpresa($linha['SupplierID']);
            $produto->setIdCategoria($linha['CategoryID']);
            $produto->setNomeProduto($linha['ProductName']);
            $produto->setPrecoUnitario($linha['UnitPrice']);
            $produto->setQuantidade($linha['QuantityPerUnit']);
            $produto->setUnidadesEstocadas($linha['UnitsInStock']);


            $produtos[] = $produto;
        }
        return $produtos;
    }
    
    public function buscaPorId($id){
        $stmt = $this->conecta->prepare("SELECT * FROM products where ProductID like :id");
        $stmt->bindValue(":id", $id);
        $stmt->execute();

        $produtos = array();

        while ($linha = $stmt->fetch()) {
            $produto = new Produto();
            
            $produto->setIdProduto($linha['ProductID']);
            $produto->setIdEmpresa($linha['SupplierID']);
            $produto->setIdCategoria($linha['CategoryID']);
            $produto->setNomeProduto($linha['ProductName']);
            $produto->setPrecoUnitario($linha['UnitPrice']);
            $produto->setQuantidade($linha['QuantityPerUnit']);
            $produto->setUnidadesEstocadas($linha['UnitsInStock']);


            $produtos[] = $produto;
        }
        return $produtos;
    }
    
    public function buscaPorProduto(Produto $produto){
        $stmt = $this->conecta->prepare("SELECT * FROM products where ProductName like :prodName");
        $stmt->bindValue(":prodName", $produto->getNomeProduto());
        $stmt->execute();

        $produtos = array();

        while ($linha = $stmt->fetch()) {
            $produto = new Produto();
            
            $produto->setIdProduto($linha['ProductID']);
            $produto->setIdEmpresa($linha['SupplierID']);
            $produto->setIdCategoria($linha['CategoryID']);
            $produto->setNomeProduto($linha['ProductName']);
            $produto->setPrecoUnitario($linha['UnitPrice']);
            $produto->setQuantidade($linha['QuantityPerUnit']);
            $produto->setUnidadesEstocadas($linha['UnitsInStock']);


            $produtos[] = $produto;
        }
        return $produtos;
    }
    
    public function buscaPorCompanhia($idEmpresa){
        $stmt = $this->conecta->prepare("SELECT * FROM products where SupplierID like :idEmpresa");
        $stmt->bindValue(":idEmpresa", $idEmpresa);
        $stmt->execute();

        $produtos = array();

        while ($linha = $stmt->fetch()) {
            $produto = new Produto();
            
            $produto->setIdProduto($linha['ProductID']);
            $produto->setIdEmpresa($linha['SupplierID']);
            $produto->setIdCategoria($linha['CategoryID']);
            $produto->setNomeProduto($linha['ProductName']);
            $produto->setPrecoUnitario($linha['UnitPrice']);
            $produto->setQuantidade($linha['QuantityPerUnit']);
            $produto->setUnidadesEstocadas($linha['UnitsInStock']);


            $produtos[] = $produto;
        }
        return $produtos;
    }
}
