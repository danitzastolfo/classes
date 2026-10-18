<?php
class Carro{
    private string $modelo;
    private float $consumo;
    private float $tanque;

    public function __construct($modelo, $consumo = 10, $tanque_inicial = 0){
        $this->modelo = $modelo;
        $this->consumo = $consumo;
        $this->tanque = $tanque_inicial;
    }

    public function abastecer($litros){
        if ($litros >= 0){
            $this->tanque += $litros;
            echo "<br><br>Quantidade abastecida: $litros litros<br><br>";
        }else {
            echo "<br><br>Valor inválido.<br><br>";
        }
    }

    public function dirigir($km){
        $combustivel_necessario = $km/$this->consumo;
        if ($combustivel_necessario > $this->tanque){
            echo "<br><br>Não é possível percorrer a distância necessária.<br><br>";
        }else {
            $this->tanque -= $combustivel_necessario;
            echo "<br>O carro ".$this->modelo." percorreu $km km e consumiu ".$combustivel_necessario." litros.";
        }
    }

    public function exibir(){
        echo "Modelo: ".$this->modelo;
        echo "<br>Consumo: ".$this->consumo." km/L";
        echo "<br>Tanque: ".$this->tanque." litros<br>";
    }
}
$carro = new Carro("civic", 10, 40);
$carro->exibir();
$carro->dirigir(100);
$carro->abastecer(50);
$carro->exibir();

?>