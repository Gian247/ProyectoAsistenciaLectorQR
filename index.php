<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/registros.controlador.php";
require_once "modelos/registros.modelo.php";
$plantilla=new ControladorPlantilla();
//Ejecuta un metodo de la clase ControladorPlantilla
$plantilla->ctrPlantilla();