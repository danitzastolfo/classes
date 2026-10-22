<?php
require_once "publicação.php";
class Revista extends Publicacao{
    private string $edicao;

    public function __construct($titulo, $ano_publicacao, $edicao){
        parent::__construct($titulo, $ano_publicacao);
        $this->edicao = $edicao;
    }
    public function mostrar_revista(){
        echo "Ano de Publicação: ".$this->get_ano_publicacao()."
        <br>Edição: ".$this->edicao."ª<hr>";
    }
}

?>