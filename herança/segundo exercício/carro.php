<?php
require_once "veiculo.php";
class Carro extends Veiculo{
    private int $quantidadeportas;

    public function __construct($marca, $ano, $quantidadeportas){
        parent::__construct($marca, $ano);
        $this->quantidadeportas = $quantidadeportas;
    }

    public function mostrar_carro(){
        echo "<br>Quantidade de portas: ".$this->quantidadeportas."<br>";
    }
}

?>