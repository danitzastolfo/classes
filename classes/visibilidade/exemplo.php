<?php
class ContaBancaria{
    private string $titular;
    private float $saldo;

    public function __construct($titular, $saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function exibirtitular(){
        echo "Titular: ".$this->titular;
    }

    public function alterartitular($novotitular){
        $this->titular = $novotitular;
    }

    public function depositar($valor){
        $this->saldo += $valor;
        echo "<br>Depósito: R$ $valor<br>";
    }

    public function sacar($valor){
        if ($valor > $this->saldo){
            echo "<br>Saldo insuficiente para saque<br>";
        }else {
            $this->saldo -= $valor;
            echo "<br>Saque: R$ $valor<br>";
        }
    }

    public function exibirsaldo(){
        echo "Saldo: R$ ".$this->saldo;
    }
}
$conta = new ContaBancaria("danirzas", 400);
$conta->exibirtitular();
echo "<br>";
$conta->alterartitular("kleira");
$conta->exibirtitular();
echo "<br>";
$conta->exibirsaldo();
echo "<br>";
$conta->depositar(2);
$conta->sacar(300);
echo "<br>";
$conta->exibirsaldo();

?>