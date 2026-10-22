<?php
class Veiculo{
    protected string $marca;
    private int $ano;

    public function __construct($marca, $ano){
        $this->marca = $marca;
        $this->ano = $ano;
    }

    public function get_ano(){
        return $this->ano;
    }

    public function apresentar_veiculo(){
        echo "Marca: ".$this->marca."<br>";
        echo "<br>Ano: ".$this->get_ano()."<br>";
    }
}

?>