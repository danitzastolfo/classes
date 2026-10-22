<?php
require_once "publicação.php";
class Livro extends Publicacao{
    private string $autor;

    public function __construct($titulo, $ano_publicacao, $autor){
        parent::__construct($titulo, $ano_publicacao);
        $this->autor = $autor;
    }
    public function mostrar_livro(){
        echo "Ano de Publicação: ".$this->get_ano_publicacao()."
        <br>Autor: ".$this->autor."<hr>";
    }
}

?>