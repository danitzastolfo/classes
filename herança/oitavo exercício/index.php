<?php
require_once "sensor_temp.php";
require_once "sensor_umid.php";
require_once "camera.php";
$temp = new SensorTemp("temperatura", "fabr", 1, 24);
$temp->apresentar_dispositivo();
$temp->mostrar_temp();

$umid = new SensorUmidade("umidade", "fabr", 2, 30);
$umid->apresentar_dispositivo();
$umid->mostrar_umidade();

$camera = new Camera("powershot", "canon", 3, 50.6);
$camera->apresentar_dispositivo();
$camera->mostrar_reso();

?>