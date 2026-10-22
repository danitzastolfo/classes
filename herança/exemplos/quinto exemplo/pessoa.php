<?php
class Pessoa{
    protected string $nome;
    private int $idade;

    public function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function apresentar(){
        echo "Olá! Meu nome é ".$this->nome;
    }

    public function get_idade(){
        return $this->idade;
    }

    public function exibir(){
        echo "Nome: ".$this->nome."<br>Idade: ".$this->idade;
    }
}

?>