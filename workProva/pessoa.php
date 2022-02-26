<?php

    class pessoa{
        public $nome,$peso,$andar;
        public function __construct($nome,$peso,$andar)
        {
            $this->nome = $nome;
            $this->peso = $peso;
            $this->andar = $andar;
        }
        public function getPeso()
        {
                return $this->peso;
        }
        public function setPeso($peso)
        {
                $this->peso = $peso;

                return $this;
        }

        public function getAndar()
        {
                return $this->andar;
        }
        public function getNome()
        {
                return $this->nome;
        }
    }

?>