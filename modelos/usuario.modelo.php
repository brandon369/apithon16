<?php

class ModeloUsuario{
    public function mdlUsuario($item){
        $stmt = Conexion::mdlConectar()->prepare("SELECT * FROM tblUsuarios WHERE documento = :valor");
        $stmt -> bindParam(":valor", $item);
        $stmt -> execute();
        return $stmt -> fetch();
        $stmt = null;

    }

    public function mdlMontoTotalUsuario($usuario){
        $stmt = Conexion::mdlConectar()->prepare("SELECT montoCuenta FROM tblUsuarios WHERE documento = :valor");
        $stmt -> bindParam(":valor", $usuario);
        $stmt -> execute();
        $res = $stmt->fetch();
        $res = $res['montoCuenta'];
        return $res;
    }
}