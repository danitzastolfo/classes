<?php
require_once "pessoa.php";
class Professor extends Pessoa{
    private string $disciplina;

    public function __construct($nome, $idade, $disciplina){
        parent::__construct($nome, $idade);
        $this->disciplina = $disciplina;
    }
    
    public function exibir_disciplina(){
        echo "<br>Disciplina: ".$this->disciplina."<br>";
    }
}

?>