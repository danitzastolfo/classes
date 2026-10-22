<?php
require_once "corrente.php";
require_once "poupanca.php";
$corrente = new ContaCorrente("danirzas", 1000, 1234);
$corrente->mostrar_cartao();
$corrente->depositar(500);
$corrente->sacar(200);
$corrente->mostrar_cartao();

$poupanca = new ContaPoupanca("kleira", 1000, "reservar");
$poupanca->mostrar_objetivo();

?>