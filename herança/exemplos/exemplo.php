<?php
class Pessoa{
    public function apresentar(){
        echo "Olá! Eu sou uma pessoa.";
    }
}
class Aluno extends Pessoa{
}

$aluno = new Aluno();
$aluno->apresentar();

?>