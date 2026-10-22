<?php
require_once "dispositivo.php";
class SensorTemp extends Dispositivo{
    private float $temperatura;

    public function __construct($nome, $fabricante, $numero_serie, $temperatura){
        parent::__construct($nome, $fabricante, $numero_serie);
        $this->temperatura = $temperatura;
    }
    public function mostrar_temp(){
        echo "Temperatura: ".$this->temperatura."° C<hr>";
    }
}

?>