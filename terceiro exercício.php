<?php
class ContaBancaria{
    public string $titular;
    public float $saldo;

    public function depositar($valor){
        $this->saldo += $valor;
        return "<br>Depósito: R$ ".$valor."<br>";
    }

    public function sacar($valor){
        $this->saldo -= $valor;
        return "<br>Saque: R$ ".$valor."<br>";
    }

    public function __construct($titular, $saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function exibir_saldo(){
        return "Titular: ".$this->titular."<br>Saldo atual: R$ ".$this->saldo."<br>";
    }
}
$objeto = new ContaBancaria("danirzas", 5000.13);
echo $objeto->exibir_saldo();
echo $objeto->depositar(2);
echo $objeto->sacar(1);
echo "<br>";
echo $objeto->exibir_saldo();

?>