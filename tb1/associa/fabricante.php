<?php

    class Fabricante{
        private $nome, $endereco,$documento;

        public function __construct($nome,$endereco,$documento){
            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->documento = $documento;
        }

        public function getNome(){
            return $this->nome;
        }
    }

?>