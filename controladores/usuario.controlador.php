<?php
class ControladorUsuario{
    function ctrIngresoUsuario(){
        if(isset($_POST['cedula'])){
            $cedula = $_POST['cedula'];
            $respuesta = ModeloUsuario::mdlUsuario($cedula);
            if($respuesta['documento'] == $_POST['cedula'] && $respuesta['pass'] == $_POST['pass']){
                $_SESSION['documento'] = $respuesta['documento'];
                $_SESSION['nombre'] = $respuesta['nombre'];
                $_SESSION['apellido'] = $respuesta['apellido'];
                $_SESSION['monto'] = $respuesta['montoCuenta'];
                $_SESSION['numeroCuenta'] = $respuesta['numCuenta'];
                echo 
                    "<script>
                        window.location = 'transferencia'
                    </script>"
                ;
            }else{
  
                echo '<div class="alert alert-warning">Credenciales incorrectas</div>';


            }

        }
    }

    function ctrMontoTotalUsuario($usuario){
        $respuesta = ModeloUsuario::mdlMontoTotalusuario($usuario);
        // $stmt = Conexion::mdlConectar()->prepare("SELECT montoCuenta FROM tblUsuarios WHERE documento = :valor");
        // $stmt -> bindParam(":valor", $usuario);
        // $stmt -> execute();
        // $res = $stmt->fetch();
        // $res = $res['montoCuenta'];
        $_SESSION['monto'] = $respuesta;
        
    }


}