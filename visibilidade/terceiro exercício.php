<?php
class Carro{
    private string $modelo;
    private string $consumo;
    private float $tanque;

    public function __construct($modelo, $consumo = 10, $tanque_inicial = 0){
        $this->modelo = $modelo;
        $this->consumo = $consumo;
        $this->tanque = $tanque_inicial;
    }

    public function abastecer($litros){
        if ($litros >= 0){
            $this->tanque += $litros;
            echo "<br><br>Quantidade abastecida: $litros l<br><br>";
        }else {
            echo "<br><br>Valor inválido.<br><br>";
        }
    }

    public function dirigir($km){
        $combustivel_necessario = $km/$this->consumo;
        $this->tanque -= $combustivel_necessario;
        if ($combustivel_necessario > $this->tanque){
            echo "<br><br>Não é possível percorrer a distância necessária.<br><br>";
        }
    }

    public function exibir(){
        echo "Modelo: ".$this->modelo;
        echo "<br>Consumo: ".$this->consumo." km/L";
        echo "<br>Tanque: ".$this->tanque." l";
        echo "<br>O carro ".$this->modelo." percorreu $km e consumiu ".$this->consumo." litros.";
        echo "<br>Abastecidos $litros litro(s) no automóvel.";
    }
}
$carro = new Carro("civic", 10, 40);
$carro->exibir();
$carro->dirigir(100);
$carro->abastecer(10);
$carro->exibir();

?>