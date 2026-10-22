<?php
class ContaBancaria{
    protected string $titular;
    private float $saldo;

    public function __construct($titular, $saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }
    public function depositar($valor){
        if ($valor >= 0){
            $this->saldo += $valor;
        }else {
            echo "<br>!ERRO!<br>";
        }
    }
    public function sacar($valor){
        if ($this->saldo > $valor and $valor >= 0){
            $this->saldo -= $valor;
        }else {
            echo "<br>!ERRO!<br>";
        }
    }
    public function get_saldo(){
        return $this->saldo;
    }
}

?>