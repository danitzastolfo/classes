<?php
require_once "animal.php";
class Cachorro extends Animal{
    private string $raca;

    public function __construct($nome, $idade, $raca){
        parent::__construct($nome, $idade);
        $this->raca = $raca;
    }
    public function latir(){
        echo "AU, AU! Minha raça é ".$this->raca."
         e tenho ".$this->get_idade()." anos.<hr>";
    }
}

?>