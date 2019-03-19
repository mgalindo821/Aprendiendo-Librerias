<?php

require_once '../vendor/autoload.php';

$nombres = array("presidente" => "Marcos", "empleado" => "Regulo");

\FB::log($nombres);

$frutas = array("Manzanas", "Peras");

\FB::log($frutas);

echo "Hola Mundo!!!".$nombres["presidente"];

\FB::log("Muestrame en consola");