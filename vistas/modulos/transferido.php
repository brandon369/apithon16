<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="vistas/img/favi64.png" type="image/png" sizes="16x16">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="vistas/css/css_divext.css">

    <title>Divext | Datos de Transferencia</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light d-flex justify-content-center">
    <a class="navbar-brand" href="transferencia">
                    <img src="vistas/img/divextt.png" height="80" alt="logo-divext">
                </a>
        <ul class="navbar-nav d-flex flex-row">
            <li class="nav-item p-2">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"
                    class="btn btn-primary">Datos de Transferencia</a>
            </li>
            <li class="nav-item p-2">
                    <a class="nav-link" href="salir" >Cerrar Sesión</a>
                </li>
        </ul>
    </nav>

    <div class="card m-5">
        <div class="card-header h2 d-flex justify-content-center">
            Datos de Transferencia
        </div>
        <div class="container m-5">
            <div class="row">
                <div class="col">
                    <h2 class="h3 d-flex justify-content-center">Remitente</h2>
                    Nombre: <?= $_SESSION['nombre']?> <br>
                    Apellido: <?= $_SESSION['apellido']?><br>
                    Número de documento: <?= $_SESSION['documento']?><br>
                    Número de cuenta: <?= $_SESSION['numeroCuenta']?> <br>
                    Monto actual: COP$ <?= $_SESSION['monto']?><br>
            
                </div>
                <div class="col">
                    <h2 class="h3 d-flex justify-content-center">Destinatario</h2>
                    Número de cuenta: <?= $_SESSION['cuentaTransferida']?><br>
                    Monto Tranferido: $USD <?php $dolar = $_SESSION['transferido'] / (3458);   $dolar = number_format($dolar,2); echo $dolar?>  <br>

                </div>
                
            </div> <br>
            <a class="btn btn-primary" href="transferencia" id="color-azul"> Volver</a>
        </div>

 
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>