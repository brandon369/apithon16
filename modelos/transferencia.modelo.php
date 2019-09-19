<?php 

class ModeloTransferencia{

    public function mdlValidarTransferencia($numCuenta){
        $stmt = Conexion::mdlConectar()->prepare("SELECT * FROM tblUsuarios WHERE numCuenta = :valor");
        $stmt -> bindParam(":valor", $numCuenta);
        $stmt -> execute();
        
        //Ver si el numero de cuenta existe con el resultado de la consulta
        if($stmt->rowCount() == 1){
            $respuesta = "Ok";
        }else{
            $respuesta = '<div class="alert alert-warning">El numero de cuenta no existe, verifique e intentelo de nuevo</div>';            
        }
        return $respuesta;
    }

    public function mdlRealizarTransferencia($monto,$cuenta){
        //Aumentar monto cuenta
        $stmt = Conexion::mdlConectar()->prepare("UPDATE tblUsuarios SET montoCuenta = montoCuenta + :valor WHERE numCuenta = :numeCuenta");
        $stmt -> bindParam(":valor", $monto);
        $stmt -> bindParam(":numeCuenta", $cuenta);
        $stmt -> execute();

        //si el destinatario recibio el dinero se procede a descontar el monto enviado
        $stmt = Conexion::mdlConectar()->prepare("UPDATE tblUsuarios SET montoCuenta = montoCuenta - :valor WHERE numCuenta = :numeCuenta");
        $stmt -> bindParam(":valor", $monto);
        $stmt -> bindParam(":numeCuenta", $_SESSION['numeroCuenta']);
        $stmt -> execute();
    }
}