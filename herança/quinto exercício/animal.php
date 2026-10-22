<?php
class Animal{
    protected string $nome;
    private int $idade;

    public function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }
    public function mostrar_nome(){
        echo "Nome: ".$this->nome."<br>";
    }
    public function get_idade(){
        return $this->idade;
    }
}

?>