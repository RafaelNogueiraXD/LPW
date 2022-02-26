<?php

    class Pedido{
        private $idPedido;
        private $desconto;
        private $idProduto;
        private $quantidade;
        private $precoUnitario;
        
        function getIdPedido() {
            return $this->idPedido;
        }

        function getDesconto() {
            return $this->desconto;
        }

        function getIdProduto() {
            return $this->idProduto;
        }

        function getQuantidade() {
            return $this->quantidade;
        }

        function getPrecoUnitario() {
            return $this->precoUnitario;
        }

        function setIdPedido($idPedido) {
            $this->idPedido = $idPedido;
        }

        function setDesconto($desconto) {
            $this->desconto = $desconto;
        }

        function setIdProduto($idProduto) {
            $this->idProduto = $idProduto;
        }

        function setQuantidade($quantidade) {
            $this->quantidade = $quantidade;
        }

        function setPrecoUnitario($precoUnitario) {
            $this->precoUnitario = $precoUnitario;
        }


        
    }