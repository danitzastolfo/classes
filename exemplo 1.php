<?php
class Pessoa{
    public string $nome;
    public int $idade;

    public function __construct($valor1, $valor2){
        $this->nome = $valor1;
        $this->idade = $valor2;
    }

    public function exibir_dados(){
        echo "Nome: ".$this->nome."<br>Idade: ".$this->idade;
    }
}
// método construtor deixa alguns campos obrigatórios para preenchimento
$pessoa = new Pessoa("danirzas", 17);
$pessoa->exibir_dados();

?>