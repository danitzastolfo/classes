<?php
require_once "livro.php";
require_once "revista.php";
$livro1 = new Livro("A Metamorfose", 1984, "Franz Kafka");
$livro1->mostrar_titulo();
$livro1->mostrar_livro();

$livro2 = new Livro("O Pequeno Príncipe", 1988, "autor");
$livro2->mostrar_titulo();
$livro2->mostrar_livro();

$revista = new Revista("Avon", 2014, 13);
$revista->mostrar_titulo();
$revista->mostrar_revista();

?>