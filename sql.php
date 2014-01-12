<?php

date_default_timezone_set("America/Bogota");
ini_set('display_errors', 1);

define('DS', DIRECTORY_SEPARATOR);//Separador dependiendo del sistema operativo
define('ROOT', realpath(dirname(__FILE__)) . DS);//Ruta raiz del aplicativo
require_once ROOT . 'Conexion.php';
$conexion = Conexion::getInstance();