<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PedidosDAO
 *
 * @author Radaelli
 */
class PedidosDAO {
    private $conecta;
    
    public function __construct(){
        $c = new DB();
        $this->conecta = $c->conectar();        
    }
    
    public function buscaTudo(){
        $stmt = $this->conecta->prepare("SELECT * FROM `order details`");
        $stmt->execute();

        $pedidos = array();

        while ($linha = $stmt->fetch()) {
            $pedido = new Pedido();
            
            $pedido->setDesconto($linha['Discount']);
            $pedido->setIdPedido($linha['OrderID']);
            $pedido->setIdProduto($linha['ProductID']);
            $pedido->setQuantidade($linha['Quantity']);
            $pedido->setPrecoUnitario($linha['UnitPrice']);

            $pedidos[] = $pedido;
        }
        return $pedidos;
    }
    
    public function buscaPorPedido(Pedido $pedido){
        $stmt = $this->conecta->prepare("SELECT * FROM `order details` where OrderID = :idPedido");
        $stmt->bindValue(":idPedido", $pedido->getIdPedido());
        $stmt->execute();

        $pedidos = array();

        while ($linha = $stmt->fetch()) {
            $pedido = new Pedido();
            
            $pedido->setDesconto($linha['Discount']);
            $pedido->setIdPedido($linha['OrderID']);
            $pedido->setIdProduto($linha['ProductID']);
            $pedido->setQuantidade($linha['Quantity']);
            $pedido->setPrecoUnitario($linha['UnitPrice']);

            $pedidos[] = $pedido;
        }
        return $pedidos;
    }
   
    public function buscaPorProduto($produto){
        $stmt = $this->conecta->prepare("SELECT * FROM `order details` where ProductID = :idProduto");
        $stmt->bindValue(":idProduto", $produto);
        $stmt->execute();

        $pedidos = array();

        while ($linha = $stmt->fetch()) {
            $pedido = new Pedido();
            
            $pedido->setDesconto($linha['Discount']);
            $pedido->setIdPedido($linha['OrderID']);
            $pedido->setIdProduto($linha['ProductID']);
            $pedido->setQuantidade($linha['Quantity']);
            $pedido->setPrecoUnitario($linha['UnitPrice']);

            $pedidos[] = $pedido;
        }
        return $pedidos;
    }
}
