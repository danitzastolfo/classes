<?php
class Produto{
    private string $nome;
    private float $preco;
    private int $estoque;

    public function __construct($nome, $preco, $estoque){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }

    public function vender($quantidade){
        if ($quantidade <= $this->estoque){
            $this->estoque -= $quantidade;
            echo "<br><br>Sucesso! ($quantidade vendas)<br><br>";
        }else {
            echo "<br><br>Estoque insuficiente para completar vendas.<br><br>";
        }
    }

    public function reajustar_preco($percentual){
        $this->preco += ($this->preco*($percentual/100));
        echo "Reajuste/desconto de $percentual%<br><br>";
    }

    public function exibir(){
        echo "Produto: ".$this->nome;
        echo "<br>Preço: R$ ".$this->preco;
        echo "<br>Estoque: ".$this->estoque;
    }
}
$produto = new Produto("flash limp", 14, 10);
$produto->exibir();
$produto->vender(2);
$produto->reajustar_preco(10);
$produto->exibir();

?>