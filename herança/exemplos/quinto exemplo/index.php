<?php
echo "<h1>Aluno</h1>";
require_once "aluno.php";
require_once "professor.php";
$aluno = new Aluno("danirzas", 17, "ds");
$aluno->exibir();
$aluno->exibir_curso();
echo "<hr><h1>Professor</h1>";
$professor = new Professor("samuel", 23, "banco de dados");
$professor->exibir();
$professor->exibir_disciplina();


?>