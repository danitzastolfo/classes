<?php
class Dispositivo{
    protected string $nome;
    protected string $fabricante;
    private int $numero_serie;

    public function __construct($nome, $fabricante, $numero_serie){
        $this->nome = $nome;
        $this->fabricante = $fabricante;
        $this->numero_serie = $numero_serie;
    }
    public function apresentar_dispositivo(){
        echo "Nome: ".$this->nome."<br>Fabricante: ".$this->fabricante."
        <br>Número da série: ".$this->get_nserie()."<br>";
    }
    public function get_nserie(){
        return $this->numero_serie;
    }
}

?>