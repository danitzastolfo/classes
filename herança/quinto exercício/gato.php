<?php
require_once "animal.php";
class Gato extends Animal{
    private string $cor;

    public function __construct($nome, $idade, $cor){
        parent::__construct($nome, $idade);
        $this->cor = $cor;
    }
    public function miar(){
        echo "Miau! Minha cor é ".$this->cor."
         e tenho ".$this->get_idade()." anos.<hr>";
    }
}

?>