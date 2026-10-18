<?php
class Livro{
    public string $titulo;
    public string $autor;
    public int $paginas;
    public string $anop;

    public function __construct($titulo, $autor, $paginas, $anop = "Desconhecido"){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->paginas = $paginas;
        $this->anop = $anop;
    }

    public function exibir_detalhes(){
        echo "Título: ".$this->titulo.", Autor: ".$this->autor.", Páginas: ".$this->paginas.". Publicado em: ".$this->anop."<br>";
    }
}
$livro = new Livro("Memórias Póstumas de Brás Cubas", "Machado de Assis", 194, 1880);
$book = new Livro("Lucíola", "Aluísio de Azevedo", 204);
echo $livro->exibir_detalhes();
echo $book->exibir_detalhes();

?>