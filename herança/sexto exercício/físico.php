<?php
require_once "produto.php";
class Fisico extends Produto{
    private float $peso;

    public function __construct($nome, $preco, $peso){
        parent::__construct($nome, $preco);
        $this->peso = $peso;
    }
    public function mostrar_peso(){
        echo "Peso: ".$this->peso." kg<hr>";
    }
}

?>