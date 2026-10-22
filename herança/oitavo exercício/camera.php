<?php
require_once "dispositivo.php";
class Camera extends Dispositivo{
    private float $resolucao;

    public function __construct($nome, $fabricante, $numero_serie, $resolucao){
        parent::__construct($nome, $fabricante, $numero_serie);
        $this->resolucao = $resolucao;
    }
    public function mostrar_reso(){
        echo "Resolução: ".$this->resolucao." MP<hr>";
    }
}

?>