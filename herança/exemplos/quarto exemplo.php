<?php
class Pessoa{
    protected string $nome;

    public function __construct($nome){
        $this->nome = $nome;
    }
}
class Aluno extends Pessoa{
    private string $curso;

    public function __construct($nome, $curso){
        parent::__construct($nome); // acessa o construtor da classe pai
        $this->curso = $curso;
    }

    public function exibir(){
        echo "Nome: ".$this->nome."<br>Curso: ".$this->curso;
    }
}
$aluno = new Aluno("danirzas", "programação back-end");
$aluno->exibir();

?>