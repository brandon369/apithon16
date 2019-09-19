<?php


include_once "controladores/plantilla.controlador.php";
include_once "controladores/usuario.controlador.php";
include_once "controladores/transferencia.controlador.php";

include_once "modelos/conexion.php";
include_once "modelos/usuario.modelo.php";
include_once "modelos/transferencia.modelo.php";


$plantilla = new ControladorPlantilla();
$plantilla->ctrPLantilla();



