<?php
require_once "dispositivo.php";
class SensorUmidade extends Dispositivo{
    private float $umidade;

    public function __construct($nome, $fabricante, $numero_serie, $umidade){
        parent::__construct($nome, $fabricante, $numero_serie);
        $this->umidade = $umidade;
    }
    public function mostrar_umidade(){
        echo "Umidade: ".$this->umidade."%<hr>";
    }
}

?>