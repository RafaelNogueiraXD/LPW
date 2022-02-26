<?php
	class Empresa{
		private $id;
		private $endereco;
		private $cidade;
		private $nomeEmpresa;
		private $nomeContato;
		private $cargoContato;
		private $pais;
		private $telefone;
		private $fax;
		private $site;
		private $cep;
		private $regiao;
		
                function getId() {
                    return $this->id;
                }

                function getEndereco() {
                    return $this->endereco;
                }

                function getCidade() {
                    return $this->cidade;
                }

                function getNomeEmpresa() {
                    return $this->nomeEmpresa;
                }

                function getNomeContato() {
                    return $this->nomeContato;
                }

                function getCargoContato() {
                    return $this->cargoContato;
                }

                function getPais() {
                    return $this->pais;
                }

                function getTelefone() {
                    return $this->telefone;
                }

                function getFax() {
                    return $this->fax;
                }

                function getSite() {
                    return $this->site;
                }

                function getCep() {
                    return $this->cep;
                }

                function setId($id) {
                    $this->id = $id;
                }

                function setEndereco($endereco) {
                    $this->endereco = $endereco;
                }

                function setCidade($cidade) {
                    $this->cidade = $cidade;
                }

                function setNomeEmpresa($nomeEmpresa) {
                    $this->nomeEmpresa = $nomeEmpresa;
                }

                function setNomeContato($nomeContato) {
                    $this->nomeContato = $nomeContato;
                }

                function setCargoContato($cargoContato) {
                    $this->cargoContato = $cargoContato;
                }

                function setPais($pais) {
                    $this->pais = $pais;
                }

                function setTelefone($telefone) {
                    $this->telefone = $telefone;
                }

                function setFax($fax) {
                    $this->fax = $fax;
                }

                function setSite($site) {
                    $this->site = $site;
                }

                function setCep($cep) {
                    $this->cep = $cep;
                }
                function getRegiao() {
                    return $this->regiao;
                }

                function setRegiao($regiao) {
                    $this->regiao = $regiao;
                }



		
	}

