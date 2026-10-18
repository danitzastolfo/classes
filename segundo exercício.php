<?php
class Aluno{
    public string $nome;
    public float $nota1;
    public float $nota2;
    public float $media;

    public function media(){
        return ($this->nota1 + $this->nota2)/2;
    }

    public function __construct($nome, $nota1, $nota2){
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->media = $this->media();
    }
}
$aluno = new Aluno("danirzas", 10, 9);

echo "<pre>";
print_r($aluno);
echo "</pre>";

?>