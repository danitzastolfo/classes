<?php
require_once "pessoa.php";
class Aluno extends Pessoa{
    private string $curso;

    public function __construct($nome, $idade, $curso){
        parent::__construct($nome, $idade);
        $this->curso = $curso;
    }

    public function exibir_curso(){
        echo "<br>Curso: ".$this->curso."<br>";
    }
}

?>