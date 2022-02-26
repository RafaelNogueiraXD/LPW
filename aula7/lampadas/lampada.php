<?php
	interface Lampada{
		function ligar();
		function desligar();
	}

    class FabricaLampada implements Lampada{
        public $Incandescente,$Fluorescente;
        public function __construct($tipo){
            $this->$tipo = $tipo;
            echo "criou um objeto ".$this->$tipo;

        }
        public function ligar(){
            echo "<br>Lampada ligada<br>";    
        }
        public function desligar(){
            echo "<br>Lampada desligada<br>";    
        }
  
    }

    $criaLampda = new FabricaLampada("fluorescente");

    main($criaLampda);
    function main(Lampada $tipo){
        $tipo->ligar();
        $tipo->desligar();
    }

?>
