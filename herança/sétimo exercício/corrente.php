<?php
require_once "conta_bancaria.php";
class ContaCorrente extends ContaBancaria{
    private int $numero_cartao;

    public function __construct($titular, $saldo, $numero_cartao){
        parent::__construct($titular, $saldo);
        $this->numero_cartao = $numero_cartao;
    }
    public function mostrar_cartao(){
        echo "Titular: ".$this->titular."<br>Saldo: R$ ".$this->get_saldo()."
        <br>Número do cartão: ".$this->numero_cartao."<hr>";
    }
}

?>