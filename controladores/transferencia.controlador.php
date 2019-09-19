<?php

class ControladorTransferencia{
    //Validar monto a transferir y número de cuenta
    public function ctrValidarTransferencia(){
        if(isset($_POST['transferencia'])){
            if($_POST['transferencia'] < $_SESSION['monto']){
                $montoTransferencia = $_POST['transferencia'];         

                if(isset($_POST['cuenta'])){
                    $numCuenta = $_POST['cuenta'];
                    if($numCuenta !== $_SESSION['numeroCuenta']){
    
                        $respuesta = ModeloTransferencia::mdlValidarTransferencia($numCuenta);
                        // var_dump($respuesta);
                        if($respuesta == "Ok"){
                           //Se recibio una respuesta positiva se procede a realizar transferencia
                            $this->ctrRealizartransferencia($montoTransferencia,$numCuenta);
                        }else{
                            echo $respuesta;
                        }
                    }else{
                        echo '<div class="alert alert-warning">El numero de cuenta al que va transferir no puede ser el mismo tuyo </div>';

                    }
    

                }else{
                    echo '<div class="alert alert-warning">Por favor ingrese un numero de cuenta </div>';
                }
            }else{

                echo '<div class="alert alert-warning"> El monto a transferir no puede ser mayor al monto actual</div>';
            }
           
                
        }
    }

        //metodo que realiza la transferencia recibe dos parametros el monto a transferir y el numero de la cuenta a la cual va dirigida
    private function ctrRealizartransferencia($monto,$cuenta){
        

            $respuesta = ModeloTransferencia::mdlRealizarTransferencia($monto,$cuenta);
            $_SESSION['transferido'] = $monto;
            $_SESSION['cuentaTransferida'] = $cuenta;
            echo 
           
            "<script>
                window.location = 'transferido'
            </script>"
        ;

    }
}

