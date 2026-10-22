<?php
class Produto{
    protected string $nome;
    private float $preco;

    public function __construct($nome, $preco){
        $this->nome = $nome;
        $this->preco = $preco;
    }
    public function get_preco(){
        return $this->preco;
    }
    public function mostrar_produto(){
        echo "Produto: ".$this->nome."<br>Preço: R$ ".$this->get_preco()."<br>";
    }
}

?>