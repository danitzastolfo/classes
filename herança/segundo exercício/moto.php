<?php
require_once "veiculo.php";
class Moto extends Veiculo{
    private int $cilindradas;

    public function __construct($marca, $ano, $cilindradas){
        parent::__construct($marca, $ano);
        $this->cilindradas = $cilindradas;
    }

    public function mostrar_moto(){
        echo "<br>Cilindradas: ".$this->cilindradas."<br>";
    }
}

?>