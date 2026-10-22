<?php
class Funcionario{
    protected string $nome;
    private float $salario;

    public function __construct($nome, $salario){
        $this->nome = $nome;
        $this->salario = $salario;
    }
    public function get_salario(){
        return $this->salario;
    }
    public function exibir(){
        echo "Nome: ".$this->nome."<br>Salário: R$ ".$this->get_salario();
    }
}

?>