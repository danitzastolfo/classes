<?php
require_once "gerente.php";
require_once "desenvolvedor.php";

$gerente = new Gerente("danirzas", 8800, "cpi");
$gerente->exibir();
$gerente->gerenciar_equipe();
$desenvolvedor = new Desenvolvedor("rafael", 500, "python");
$desenvolvedor->exibir();
$desenvolvedor->programar();

?>