<?php
require_once "cachorro.php";
require_once "gato.php";
$cachorro = new Cachorro("Kaida", 3, "Rottweiler");
$cachorro->mostrar_nome();
$cachorro->latir();

$gato = new Gato("Tannie", 2, "branco");
$gato->mostrar_nome();
$gato->miar();

?>