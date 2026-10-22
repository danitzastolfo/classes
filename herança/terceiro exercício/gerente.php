<?php
require_once "funcionario.php";
class Gerente extends Funcionario{
    private string $departamento;

    public function __construct($nome, $salario, $departamento){
        parent::__construct($nome, $salario);
        $this->departamento = $departamento;
    }
    public function get_departamento(){
        return $this->departamento;
    }
    public function gerenciar_equipe(){
        echo "<br>Atividade executada: Gerencia a equipe no departamento ".$this->get_departamento()."<hr>";
    }
}

?>