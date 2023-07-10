<?php

ini_set('display_errors', 1);
ini_set('log_errors',1);
ini_set("error_log","/var/www/html/proyectoPos/php_error_log");

require_once "controladores/plantilla.controlador.php";
require_once "controladores/registros.controlador.php";
require_once "modelos/registros.modelo.php";
$plantilla=new ControladorPlantilla();
//Ejecuta un metodo de la clase ControladorPlantilla
$plantilla->ctrPlantilla();