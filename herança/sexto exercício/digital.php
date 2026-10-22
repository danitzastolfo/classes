<?php
require_once "produto.php";
class Digital extends Produto{
    private float $tamanho_arquivo;

    public function __construct($nome, $preco, $tamanho_arquivo){
        parent::__construct($nome, $preco);
        $this->tamanho_arquivo = $tamanho_arquivo;
    }
    public function mostrar_tamanho(){
        echo "Tamanho: ".$this->tamanho_arquivo." MB<hr>";
    }
}

?>