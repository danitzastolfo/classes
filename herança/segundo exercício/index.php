<?php
require_once "carro.php";

$carro = new Carro("civic", 2011, 4);
$carro->apresentar_veiculo();
$carro->mostrar_carro();
echo "<hr>";
require_once "moto.php";

$moto = new Moto("xxxx", 2009, 54545);
$moto->apresentar_veiculo();
$moto->mostrar_moto();


?>