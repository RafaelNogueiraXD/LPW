<?php
interface Elevador{
    public function entraPessoa($peso);
    public function saiPessoa($peso);
    public function sobeAndar();
    public function desceAndar();
}
class ElevadorClass implements Elevador{
    public $pessoas,$peso;
    public $andar;
    function __construct($pessoas,$peso,$andar)
    {
        $this->pessoas = $pessoas;
        $this->peso = $peso;
        $this->andar = $andar;
    }

    public function entraPessoa($peso)
    {
        $this->peso += $peso; 
        if($this->peso > 500){
            echo "O elevador não suporta";
            echo "<br>";
        }
        
    }
    public function saiPessoa($peso)
    {
        if($this->peso > 500){
            echo "O elevador não suporta";
            echo "<br>";
        }
        $this->peso -= $peso; 
    }
    public function sobeAndar()
    {
        echo " <h3 style='text-align: center;'>";
        echo "elevador subindo!";
        echo "</h3>";

        // $this->andar -= 1;
    }
    public function desceAndar()
    {
        echo " <h3 style='text-align: center;'>";
        echo "elevador irá descer para o terreo!";
        echo "</h3>";
    }
//Getter e setter
    public function getAndar()
    {
        return $this->andar;
    }

    public function setAndar($andar)
    {
        $this->andar = $andar;

        return $this;
    }
    public function getPeso()
    {
        return $this->peso;
    }
}

?>