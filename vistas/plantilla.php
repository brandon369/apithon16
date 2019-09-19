<?php
session_start();

if(isset($_SESSION['documento'])){
    //hay sesion
    $montoTotal = new ControladorUsuario();
    $montoTotal->ctrMontoTotalUsuario($_SESSION['documento']);
    
    if(isset($_GET['ruta'])){
            if($_GET['ruta'] == "transferencia" ||
            $_GET['ruta'] == "transferido" ||
            $_GET['ruta'] == "estado" ||
            $_GET['ruta'] == "salir"){
                include_once "vistas/modulos/".$_GET['ruta'].".php";
            }

        }else{
            //si no hay peticion pagina de inicopo
            include_once "vistas/modulos/transferencia.php";
        }

}else{
    //Vista login
    include "vistas/modulos/login.php";
  

}






?>



