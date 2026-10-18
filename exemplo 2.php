<?php
class Produto{
    public string $nome;
    public float $preco;
    public string $descricao;

    public function __construct($valor1, $valor2, $valor3 = "Sem descrição"){ // $valor3 não é obrigatório e tem valor padrão
        $this->nome = $valor1;
        $this->preco = $valor2;
        $this->descricao = $valor3;
    }
}
$camiseta = new Produto("camiseta", 44);
$calca = new Produto("calça", 180.99, "calça jeans baggy y2k");
echo "<pre>";
print_r($camiseta);
print_r($calca);
echo "</pre>";

?>