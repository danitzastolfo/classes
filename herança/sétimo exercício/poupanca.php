<?php
require_once "conta_bancaria.php";
class ContaPoupanca extends ContaBancaria{
    private string $objetivo;

    public function __construct($titular, $saldo, $objetivo){
        parent::__construct($titular, $saldo);
        $this->objetivo = $objetivo;
    }
    public function mostrar_objetivo(){
        echo "Titular: ".$this->titular."<br>Saldo: R$ ".$this->get_saldo()."
        <br>Objetivo: ".$this->objetivo."<hr>";
    }
}

?>