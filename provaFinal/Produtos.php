<?php

    class Produto{
        private $idCategoria;
        private $idProduto;
        private $nomeProduto;
        private $quantidade;
        private $idEmpresa;
        private $precoUnitario;
        private $unidadesEstocadas;

        function getIdCategoria() {
            return $this->idCategoria;
        }

        function getIdProduto() {
            return $this->idProduto;
        }

        function getNomeProduto() {
            return $this->nomeProduto;
        }

        function getQuantidade() {
            return $this->quantidade;
        }

        function getIdEmpresa() {
            return $this->idEmpresa;
        }

        function getPrecoUnitario() {
            return $this->precoUnitario;
        }

        function getUnidadesEstocadas() {
            return $this->unidadesEstocadas;
        }

        function setIdCategoria($idCategoria) {
            $this->idCategoria = $idCategoria;
        }

        function setIdProduto($idProduto) {
            $this->idProduto = $idProduto;
        }

        function setNomeProduto($nomeProduto) {
            $this->nomeProduto = $nomeProduto;
        }

        function setQuantidade($quantidade) {
            $this->quantidade = $quantidade;
        }

        function setIdEmpresa($idEmpresa) {
            $this->idEmpresa = $idEmpresa;
        }

        function setPrecoUnitario($precoUnitario) {
            $this->precoUnitario = $precoUnitario;
        }

        function setUnidadesEstocadas($unidadesEstocadas) {
            $this->unidadesEstocadas = $unidadesEstocadas;
        }


    }

