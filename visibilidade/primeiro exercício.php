<?php
class Funcionario{
    private string $nome;
    private float $salario;

    public function __construct($nome, $salario = 1000){
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function aumentar_salario($percentual){
        if ($percentual <= 10 && $percentual > 0){
            $this->salario += ($this->salario*($percentual/100));
            echo "<br><br>Aumento de $percentual%<br><br>";
        }else {
            echo "<br><br>!ERRO!<br>Percentual inválido.<br><br>";
        }
    }

    public function exibir_salario(){
        echo "Funcionário: ".$this->nome;
        echo "<br>Salário: R$ ".number_format($this->salario, 2);
    }
}
$funcionario = new Funcionario("danirzas", 4000);
$funcionario->exibir_salario();
$funcionario->aumentar_salario(4);
$funcionario->exibir_salario();

?>