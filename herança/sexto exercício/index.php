<?php
require_once "físico.php";
require_once "digital.php";
$notebook = new Fisico("notebook", 16600, 8);
$notebook->mostrar_produto();
$notebook->mostrar_peso();

$software = new Digital("Roblox", 0, 644);
$software->mostrar_produto();
$software->mostrar_tamanho();

?>