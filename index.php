<?php
require_once "controller/inicio.php";
error_reporting(0);

$controller = new InicioController;
$home = "http://localhost/leslie/index.php/";

$ruta = str_replace($home, "", $_SERVER["REQUEST_URI"]);
// monitor path
//echo $ruta;
//echo "<br>";
//echo $_SERVER["REQUEST_URI"];
//echo "<br>";

//Creo el array de ruta (filtrando los vacíos)
$array_ruta = array_filter(explode("/", $ruta));
//var_dump($array_ruta);
// echo "<br>";

//Llamo al método por defecto del controlador
$controller->index();
