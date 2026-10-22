<?php
class Pessoa{
    private string $nome = "danitza";

    public function get_nome(){
        return $this->nome;
    }
}
class Aluno extends Pessoa{
    public function apresentar(){
        echo "Olá! Meu nome é ".$this->get_nome().".";
    }
}
$aluno = new Aluno();
$aluno->apresentar();

?>