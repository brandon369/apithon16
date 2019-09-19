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

    <title>Bancolombia | Divext</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light d-flex justify-content-center">
        <a class="navbar-brand" href="#">
            <img src="vistas/img/logo-bancolombia.png" height="80" alt="logo-divext">
        </a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"
                    class="btn btn-primary">Iniciar sesión</a>
            </li>

        </ul>
    </nav>
    <?php
        //validar inicio de sesion
        $ingresoUsuario = new ControladorUsuario();
        $ingresoUsuario->ctrIngresoUsuario();   
    ?>


    <div class="container p-5" id="mujer">
    <h1 class="h1" id="blanco">Divext</h1>
        <div class="row" >
            <div class="col" >
                <p id="blanco">Si necesitas hacer una transferencia al extranjero, la puedes hacer con Divext, 
                que te permite hacer la transferencia desde tu cuenta a una cuenta extranjera de cualquier Banco que pertenezca a la red de Bancos SWIFT. 
                <br> <br>
                Para poder utilizar este servicio, debes tener en tu cuenta la divisa 
                extranjera, que debes comprar a través de Negocio de Divisas con Bancolombia. <br> <br> Luego solo sigue las instrucciones.</p>
            </div>
            <div class="col">
                <h2 class="h2" id="blanco">Instrucciones</h2>
                <ul class="navbar-nav">
                    <li id="blanco">1. Ser cliente Bancolombia.</li>
                    <li id="blanco">2. iniciar sesión con la cédula y clave dinámica.</li>
                    <li id="blanco">3. Llenar los datos requeridos para la transferencia.</li>
                    <li id="blanco"></li>
                    <li id="blanco"></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content ">
                <div id="padding">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="d-flex justify-content-center m-5">
                    <img src="vistas/img/divext.jpg" class="img-fluid" width="80%" alt="">
                </div>
                <h5 class="modal-title d-flex justify-content-center" id="padding-i" id="exampleModalLabel">Iniciar
                    sesión</h5>
                <div class="modal-body">
                    <form id="margin-inicio" method="POST">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Cédula</label>
                            <input type="text" class="form-control" id="recipient-name" name="cedula">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Clave dinámica</label>
                            <input class="form-control" id="message-text" type="password" name="pass"></input>
                        </div>
                        <input type="submit" class="btn btn-primary btn-lg btn-block" id="color-azul" value="Iniciar">
                        <!-- <a  id="color-azul" href="transferencia.html" >Iniciar</a> -->
                    </form>

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