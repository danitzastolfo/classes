<?php
require_once "funcionario.php";
class Desenvolvedor extends Funcionario{
    private string $linguagemprincipal;

    public function __construct($nome, $salario, $linguagemprincipal){
        parent::__construct($nome, $salario);
        $this->linguagemprincipal = $linguagemprincipal;
    }
    public function get_linguagem(){
        return $this->linguagemprincipal;
    }
    public function programar(){
        echo "<br>Atividade executada: Programa com a linguagem ".$this->get_linguagem()."<hr>";
    }
}

?>