<?php
class Publicacao{
    protected string $titulo;
    private int $ano_publicacao;

    public function __construct($titulo, $ano_publicacao){
        $this->titulo = $titulo;
        $this->ano_publicacao = $ano_publicacao;
    }
    public function mostrar_titulo(){
        echo "Título: ".$this->titulo."<br>";
    }
    public function get_ano_publicacao(){
        return $this->ano_publicacao;
    }
}

?>